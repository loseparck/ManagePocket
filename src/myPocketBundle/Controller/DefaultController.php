<?php

namespace myPocketBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller {

    public function acceuilAction(Request $req) {
        $m=date('m');
        $y=date('Y');
        $cr=$this->countR($req);
        $cd=$this->countD($req);
        $dp=$this->sumD($req,$m,$y);
        $rv=$this->sumR($req,$m,$y);
        $s=$rv-$dp;
        $session = $req->getSession();
        $nom = $session->get('nom');
        if ($session->get('connected')) {
            return $this->render('myPocketBundle:public:acceuil.html.twig', array('nom' => $nom,'m'=>$m,'cr'=>$cr,'cd'=>$cd,'dp'=>$dp,'rv'=>$rv,'s'=>$s));
        }
        return $this->render('myPocketBundle:public:login.html.twig');
    }

    public function nouvelledepenseAction(Request $req) {
        $session = $req->getSession();
        if ($session->get('connected')) {
            if ($req->request->get('confnvdp')) {
                $idc = $req->request->get('categorie');
                $categorie= $this->getCategorieById($idc);
                $desig = $req->request->get('desig');
                $mt = $req->request->get('montant');
                $idu=$session->get('id');
                $date = $req->request->get('date');
                $r = explode("/", $date);
		$date = $r[2]."-".$r[1]."-".$r[0];
                $this->addDepense($idu, $desig, $date, $categorie, $mt);
                return $this->getCategoriesD($req);
            }
            $session = $req->getSession();
            $m=date('m');
            $cr=$this->countR($req);
            $cd=$this->countD($req);
            $nom = $session->get('nom');
            $flag = $this->getDoctrine()
                    ->getRepository('myPocketBundle:categorie')
                    ->findAll();
            return $this->render('myPocketBundle:public:nouvelledepense.html.twig', array('nom' => $nom, 'categories' => $flag,'m'=>$m,'cr'=>$cr,'cd'=>$cd));
        }
        return $this->render('myPocketBundle:public:login.html.twig');
    }
    
    public function nouveaurevenuAction(Request $req) {
        $session = $req->getSession();
        if ($session->get('connected')) {
            if ($req->request->get('confnvrv')) {
                $idc = $req->request->get('categorie');
                $categorie= $this->getCategorieById($idc);
                $desig = $req->request->get('desig');
                $mt = $req->request->get('montant');
                $idu=$session->get('id');
                $date = $req->request->get('date');
                $r = explode("/", $date);
		$date = $r[2]."-".$r[1]."-".$r[0];
                $this->addRevenu($idu, $desig, $date, $categorie, $mt);
                return $this->getCategoriesR($req);
            }
            $m=date('m');
            $cr=$this->countR($req);
            $cd=$this->countD($req);
            $nom = $session->get('nom');
            $flag = $this->getDoctrine()
                    ->getRepository('myPocketBundle:categorie')
                    ->findAll();
            return $this->render('myPocketBundle:public:nouveaurevenu.html.twig', array('nom' => $nom, 'categories' => $flag,'m'=>$m,'cr'=>$cr,'cd'=>$cd));
        }
        return $this->render('myPocketBundle:public:login.html.twig');
    }
    
    public function editrevenuAction(Request $req){
        $session = $req->getSession();
        $nom = $session->get('nom');
        $cr=$this->countR($req);
        $cd=$this->countD($req);
        if ($session->get('connected')) {
            if ($req->request->get('confedit')) {
                $idr=$req->request->get('idr');
                $m = $req->request->get('mois');
                $y = $req->request->get('annee');
                $desig = $req->request->get('desig');
                $mt = $req->request->get('montant');
                $this->editRevenu($desig, $idr, $mt);
                $rs=$this->getRev($req,$m,$y);
                return $this->render('myPocketBundle:public:listerevenu.html.twig', array('nom' => $nom,'revenus'=>$rs,'m'=>$m,'y'=>$y,'cr'=>$cr,'cd'=>$cd));
            }
        }
        return $this->render('myPocketBundle:public:login.html.twig');
    }
    
    public function editdepenseAction(Request $req){
        $session = $req->getSession();
        $nom = $session->get('nom');
        $cr=$this->countR($req);
        $cd=$this->countD($req);
        if ($session->get('connected')) {
            if ($req->request->get('confedit')) {
                $idd=$req->request->get('idr');
                $m = $req->request->get('mois');
                $y = $req->request->get('annee');
                $desig = $req->request->get('desig');
                $mt = $req->request->get('montant');
                $this->editDepense($desig, $idd, $mt);
                $dp=$this->getDep($req,$m,$y);
                return $this->render('myPocketBundle:public:listedepense.html.twig', array('nom' => $nom,'depenses'=>$dp,'m'=>$m,'y'=>$y,'cr'=>$cr,'cd'=>$cd));
            }
        }
        return $this->render('myPocketBundle:public:login.html.twig');
    }
    
    public function listerevenuAction(Request $req) {
        $session = $req->getSession();
        $nom = $session->get('nom');
        $cr=$this->countR($req);
        $cd=$this->countD($req);
        if ($session->get('connected')) {
            if($req->request->get('confdel')){
                $idr = $req->request->get('idr');
                $m = $req->request->get('mois');
                $y = $req->request->get('annee');
                $this->dropR($idr);
                $rs=$this->getRev($req,$m,$y);
                return $this->render('myPocketBundle:public:listerevenu.html.twig', array('nom' => $nom,'revenus'=>$rs,'m'=>$m,'y'=>$y,'cr'=>$cr,'cd'=>$cd));
            }
            else if($req->request->get('edit')){
                $m = $req->request->get('mois');
                $y = $req->request->get('annee');
                $idr = $req->request->get('idr');
                $rs = $this->getRevenuById($idr);
                return $this->render('myPocketBundle:public:editrevenu.html.twig', array('nom' => $nom,'revenu'=>$rs,'m'=>$m,'y'=>$y,'cr'=>$cr,'cd'=>$cd));
            }
            else if($req->request->get('pred')){
                $m = $req->request->get('mois');
                $y = $req->request->get('annee');
                $m=$m-1;
                if($m<1){
                    $m=12;
                    $y=$y-1;
                }
                $rs=$this->getRev($req,$m,$y);
                return $this->render('myPocketBundle:public:listerevenu.html.twig', array('nom' => $nom,'revenus'=>$rs,'m'=>$m,'y'=>$y,'cr'=>$cr,'cd'=>$cd));
            }
            else if($req->request->get('suiv')){
                $m = $req->request->get('mois');
                $y = $req->request->get('annee');
                $m=$m+1;
                if($m>12){
                    $m=1;
                    $y=$y+1;
                }
                $rs=$this->getRev($req,$m,$y);
                return $this->render('myPocketBundle:public:listerevenu.html.twig', array('nom' => $nom,'revenus'=>$rs,'m'=>$m,'y'=>$y,'cr'=>$cr,'cd'=>$cd));
            }
            else{
                $m=date('m');
                $y=date('Y');
                $rs=$this->getRev($req,$m,$y);
                return $this->render('myPocketBundle:public:listerevenu.html.twig', array('nom' => $nom,'revenus'=>$rs,'m'=>$m,'y'=>$y,'cr'=>$cr,'cd'=>$cd));
            }
        }
        return $this->render('myPocketBundle:public:login.html.twig');
    }
    
    public function listedepenseAction(Request $req) {
        $session = $req->getSession();
        $nom = $session->get('nom');
        $cr=$this->countR($req);
        $cd=$this->countD($req);
        if ($session->get('connected')) {
            if($req->request->get('confdel')){
                $idr = $req->request->get('idr');
                $m = $req->request->get('mois');
                $y = $req->request->get('annee');
                $this->dropD($idr);
                $dp=$this->getDep($req,$m,$y);
                return $this->render('myPocketBundle:public:listedepense.html.twig', array('nom' => $nom,'depenses'=>$dp,'m'=>$m,'y'=>$y,'cr'=>$cr,'cd'=>$cd));
            }
            else if($req->request->get('edit')){
                $m = $req->request->get('mois');
                $y = $req->request->get('annee');
                $idd = $req->request->get('idr');
                $ds = $this->getDepenseById($idd);
                return $this->render('myPocketBundle:public:editdepense.html.twig', array('nom' => $nom,'depense'=>$ds,'m'=>$m,'y'=>$y,'cr'=>$cr,'cd'=>$cd));
            }
            else if($req->request->get('pred')){
                $m = $req->request->get('mois');
                $y = $req->request->get('annee');
                $m=$m-1;
                if($m<1){
                    $m=12;
                    $y=$y-1;
                }
                $dp=$this->getDep($req,$m,$y);
                return $this->render('myPocketBundle:public:listedepense.html.twig', array('nom' => $nom,'depenses'=>$dp,'m'=>$m,'y'=>$y,'cr'=>$cr,'cd'=>$cd));
            }
            else if($req->request->get('suiv')){
                $m = $req->request->get('mois');
                $y = $req->request->get('annee');
                $m=$m+1;
                if($m>12){
                    $m=1;
                    $y=$y+1;
                }
                $dp=$this->getDep($req,$m,$y);
                return $this->render('myPocketBundle:public:listedepense.html.twig', array('nom' => $nom,'depenses'=>$dp,'m'=>$m,'y'=>$y,'cr'=>$cr,'cd'=>$cd));
            }
            else{
                $m=date('m');
                $y=date('Y');
                $dp=$this->getDep($req,$m,$y);
                return $this->render('myPocketBundle:public:listedepense.html.twig', array('nom' => $nom,'depenses'=>$dp,'m'=>$m,'y'=>$y,'cr'=>$cr,'cd'=>$cd));
            }
        }
        return $this->render('myPocketBundle:public:login.html.twig');
    }
    
    public function statrevenuAction(Request $req){
        $session = $req->getSession();
        $nom = $session->get('nom');
        $cr=$this->countR($req);
        $cd=$this->countD($req);
        if ($session->get('connected')) {
            if($req->request->get('pred')){
                $m = $req->request->get('mois');
                $y = $req->request->get('annee');
                $m=$m-1;
                if($m<1){
                    $m=12;
                    $y=$y-1;
                }
                $dp=$this->sumD($req,$m,$y);
                $rv=$this->sumR($req,$m,$y);
                if($rv=="")
                    $rv=0;
                if($dp=="")
                    $dp=0;
                $s=$rv-$dp;
                $smr=$this->sumstatRY($req, $y);
                $cm=$this->sumstatRCat($req, $m, $y);
                return $this->render('myPocketBundle:public:statistiquerevenu.html.twig', array('nom' => $nom,'m'=>$m,'y'=>$y,'cr'=>$cr,'cd'=>$cd,'rv'=>$rv,'s'=>$s,'smr'=>$smr,'cm'=>$cm));
            }
            else if($req->request->get('suiv')){
                $m = $req->request->get('mois');
                $y = $req->request->get('annee');
                $m=$m+1;
                if($m>12){
                    $m=1;
                    $y=$y+1;
                }
                $dp=$this->sumD($req,$m,$y);
                $rv=$this->sumR($req,$m,$y);
                if($rv=="")
                    $rv=0;
                if($dp=="")
                    $dp=0;
                $s=$rv-$dp;
                $smr=$this->sumstatRY($req, $y);
                $cm=$this->sumstatRCat($req, $m, $y);
                return $this->render('myPocketBundle:public:statistiquerevenu.html.twig', array('nom' => $nom,'m'=>$m,'y'=>$y,'cr'=>$cr,'cd'=>$cd,'rv'=>$rv,'s'=>$s,'smr'=>$smr,'cm'=>$cm));
            }
            else{
                $m=date('m');
                $y=date('Y');
                $dp=$this->sumD($req,$m,$y);
                $rv=$this->sumR($req,$m,$y);
                if($rv=="")
                    $rv=0;
                if($dp=="")
                    $dp=0;
                $s=$rv-$dp;
                $smr=$this->sumstatRY($req, $y);
                $cm=$this->sumstatRCat($req, $m, $y);
                return $this->render('myPocketBundle:public:statistiquerevenu.html.twig', array('nom' => $nom,'m'=>$m,'y'=>$y,'cr'=>$cr,'cd'=>$cd,'rv'=>$rv,'s'=>$s,'smr'=>$smr,'cm'=>$cm));
            }
        }
        return $this->render('myPocketBundle:public:login.html.twig');
    }
    
    public function statdepenseAction(Request $req){
        $session = $req->getSession();
        $nom = $session->get('nom');
        $cr=$this->countR($req);
        $cd=$this->countD($req);
        if ($session->get('connected')) {
            if($req->request->get('pred')){
                $m = $req->request->get('mois');
                $y = $req->request->get('annee');
                $m=$m-1;
                if($m<1){
                    $m=12;
                    $y=$y-1;
                }
                $dp=$this->sumD($req,$m,$y);
                $rv=$this->sumR($req,$m,$y);
                if($rv=="")
                    $rv=0;
                if($dp=="")
                    $dp=0;
                $s=$rv-$dp;
                $smr=$this->sumstatDY($req, $y);
                $cm=$this->sumstatDCat($req, $m, $y);
                return $this->render('myPocketBundle:public:statistiquedepense.html.twig', array('nom' => $nom,'m'=>$m,'y'=>$y,'cr'=>$cr,'cd'=>$cd,'dp'=>$dp,'s'=>$s,'smr'=>$smr,'cm'=>$cm));
            }
            else if($req->request->get('suiv')){
                $m = $req->request->get('mois');
                $y = $req->request->get('annee');
                $m=$m+1;
                if($m>12){
                    $m=1;
                    $y=$y+1;
                }
                $dp=$this->sumD($req,$m,$y);
                $rv=$this->sumR($req,$m,$y);
                if($rv=="")
                    $rv=0;
                if($dp=="")
                    $dp=0;
                $s=$rv-$dp;
                $smr=$this->sumstatDY($req, $y);
                $cm=$this->sumstatDCat($req, $m, $y);
                return $this->render('myPocketBundle:public:statistiquedepense.html.twig', array('nom' => $nom,'m'=>$m,'y'=>$y,'cr'=>$cr,'cd'=>$cd,'dp'=>$dp,'s'=>$s,'smr'=>$smr,'cm'=>$cm));
            }
            else{
                $m=date('m');
                $y=date('Y');
                $dp=$this->sumD($req,$m,$y);
                $rv=$this->sumR($req,$m,$y);
                if($rv=="")
                    $rv=0;
                if($dp=="")
                    $dp=0;
                $s=$rv-$dp;
                $smr=$this->sumstatDY($req, $y);
                $cm=$this->sumstatDCat($req, $m, $y);
                return $this->render('myPocketBundle:public:statistiquedepense.html.twig', array('nom' => $nom,'m'=>$m,'y'=>$y,'cr'=>$cr,'cd'=>$cd,'dp'=>$dp,'s'=>$s,'smr'=>$smr,'cm'=>$cm));
            }
        }
        return $this->render('myPocketBundle:public:login.html.twig');
    }
    
    public function statsoldeAction(Request $req){
        $session = $req->getSession();
        $nom = $session->get('nom');
        $cr=$this->countR($req);
        $cd=$this->countD($req);
        if ($session->get('connected')) {
            if($req->request->get('pred')){
                $m = $req->request->get('mois');
                $y = $req->request->get('annee');
                $m=$m-1;
                if($m<1){
                    $m=12;
                    $y=$y-1;
                }
                $dp=$this->sumD($req,$m,$y);
                $rv=$this->sumR($req,$m,$y);
                if($rv=="")
                    $rv=0;
                if($dp=="")
                    $dp=0;
                $s=$rv-$dp;
                $smr=$this->sumstatSY($req, $y);
                $cm=$this->sumstatDCat($req, $m, $y);
                return $this->render('myPocketBundle:public:statistiquesolde.html.twig', array('nom' => $nom,'m'=>$m,'y'=>$y,'cr'=>$cr,'cd'=>$cd,'rv'=>$rv,'dp'=>$dp,'s'=>$s,'smr'=>$smr,'cm'=>$cm));
            }
            else if($req->request->get('suiv')){
                $m = $req->request->get('mois');
                $y = $req->request->get('annee');
                $m=$m+1;
                if($m>12){
                    $m=1;
                    $y=$y+1;
                }
                $dp=$this->sumD($req,$m,$y);
                $rv=$this->sumR($req,$m,$y);
                if($rv=="")
                    $rv=0;
                if($dp=="")
                    $dp=0;
                $s=$rv-$dp;
                $smr=$this->sumstatSY($req, $y);
                $cm=$this->sumstatDCat($req, $m, $y);
                return $this->render('myPocketBundle:public:statistiquesolde.html.twig', array('nom' => $nom,'m'=>$m,'y'=>$y,'cr'=>$cr,'cd'=>$cd,'rv'=>$rv,'dp'=>$dp,'s'=>$s,'smr'=>$smr,'cm'=>$cm));
            }
            else{
                $m=date('m');
                $y=date('Y');
                $dp=$this->sumD($req,$m,$y);
                $rv=$this->sumR($req,$m,$y);
                if($rv=="")
                    $rv=0;
                if($dp=="")
                    $dp=0;
                $s=$rv-$dp;
                $smr=$this->sumstatSY($req, $y);
                $cm=$this->sumstatDCat($req, $m, $y);
                $sm=$this->sumstatS($req, $m, $y);
                return $this->render('myPocketBundle:public:statistiquesolde.html.twig', array('nom' => $nom,'m'=>$m,'y'=>$y,'cr'=>$cr,'cd'=>$cd,'rv'=>$rv,'dp'=>$dp,'s'=>$s,'sm'=>$sm,'smr'=>$smr,'cm'=>$cm));
            }
        }
        return $this->render('myPocketBundle:public:login.html.twig');
    }
    
    private function dropR($id){
        $em = $this->getDoctrine()->getManager();
        $revenu = $em->getRepository('myPocketBundle:revenu')->find($id);
        $revenu->setDeleted(1);
        $em->flush();
    }
    
    private function dropD($id){
        $em = $this->getDoctrine()->getManager();
        $depense = $em->getRepository('myPocketBundle:depense')->find($id);
        $depense->setDeleted(1);
        $em->flush();
    }
    
    private function editRevenu($desig,$idr,$mt){
        $em = $this->getDoctrine()->getManager();
        $revenu = $em->getRepository('myPocketBundle:revenu')->find($idr);
        $revenu->setDesignation($desig);
        $revenu->setMontant($mt);
        $em->flush();
    }
    
    private function editDepense($desig,$idr,$mt){
        $em = $this->getDoctrine()->getManager();
        $depense = $em->getRepository('myPocketBundle:depense')->find($idr);
        $depense->setDesignation($desig);
        $depense->setMontant($mt);
        $em->flush();
    }
    
    private function countR(Request $req){
        $m1=date('Y-m-1');
        $m2=date('Y-m-31');
        $session = $req->getSession();
        $repo = $this->getDoctrine()
                ->getManager()
                ->getRepository('myPocketBundle:revenu');
        $qb = $repo->createQueryBuilder('r');
        $qb->select('COUNT(r)');
        $qb->where('r.deleted = :check and r.iduser = :id');
        $qb->andwhere('r.date BETWEEN :m1 AND :m2');
        $qb->setParameter('check', 0);
        $qb->setParameter('id',$session->get('id'));
        $qb->setParameter('m1', $m1);
        $qb->setParameter('m2', $m2);
        $count = $qb->getQuery()->getSingleScalarResult();
        return $count;
    }
    
    private function sumR(Request $req,$m,$y){
        $m1=date($y.'-'.$m.'-1');
        $m2=date($y.'-'.$m.'-31');
        $session = $req->getSession();
        $repo = $this->getDoctrine()
                ->getManager()
                ->getRepository('myPocketBundle:revenu');
        $qb = $repo->createQueryBuilder('r');
        $qb->select('SUM(r.montant)');
        $qb->where('r.deleted = :check and r.iduser = :id');
        $qb->andwhere('r.date BETWEEN :m1 AND :m2');
        $qb->setParameter('check', 0);
        $qb->setParameter('id',$session->get('id'));
        $qb->setParameter('m1', $m1);
        $qb->setParameter('m2', $m2);
        $count = $qb->getQuery()->getSingleScalarResult();
        return $count;
    }   
    
    private function countD(Request $req){
        $m1=date('Y-m-1');
        $m2=date('Y-m-31');
        $session = $req->getSession();
        $repo = $this->getDoctrine()
                ->getManager()
                ->getRepository('myPocketBundle:depense');
        $qb = $repo->createQueryBuilder('d');
        $qb->select('COUNT(d)');
        $qb->where('d.deleted = :check and d.iduser = :id');
        $qb->andwhere('d.date BETWEEN :m1 AND :m2');
        $qb->setParameter('check', 0);
        $qb->setParameter('id',$session->get('id'));
        $qb->setParameter('m1', $m1);
        $qb->setParameter('m2', $m2);
        $count = $qb->getQuery()->getSingleScalarResult();
        return $count;
    }
    
    private function sumD(Request $req,$m,$y){
        $m1=date($y.'-'.$m.'-1');
        $m2=date($y.'-'.$m.'-31');
        $session = $req->getSession();
        $repo = $this->getDoctrine()
                ->getManager()
                ->getRepository('myPocketBundle:depense');
        $qb = $repo->createQueryBuilder('d');
        $qb->select('SUM(d.montant)');
        $qb->where('d.deleted = :check and d.iduser = :id');
        $qb->andwhere('d.date BETWEEN :m1 AND :m2');
        $qb->setParameter('check', 0);
        $qb->setParameter('id',$session->get('id'));
        $qb->setParameter('m1', $m1);
        $qb->setParameter('m2', $m2);
        $sum = $qb->getQuery()->getSingleScalarResult();
        return $sum;
    }  
    
    private function getRev(Request $req,$mois,$annee){
        $box = array();
        $session = $req->getSession();
         for ($i = 0; $i < 31 ; $i++){
            $m2 = date($annee.'-'.($mois).'-'.($i+1).'');
            //die($m2);
            $repo = $this->getDoctrine()
                ->getManager()
                ->getRepository('myPocketBundle:revenu');
            $query = $repo->createQueryBuilder('r');
            $query->where('r.date = :date')
                    ->andWhere('r.iduser = :idu')
                    ->andWhere('r.deleted = :del')
            ->setParameter('date', $m2)
            ->setParameter('del', 0)
            ->setParameter('idu', $session->get('id'));
            $result = $query->getQuery()->getResult();
            foreach ($result as $value) {
                $box[]=$value;
            }
        }
        return $box;
    }
        
    private function sumstatRY(Request $req,$y){
        $box = array();
        $session = $req->getSession();
         for ($i = 0; $i < 12 ; $i++){
            $m1=date($y.'-'.($i+1).'-1');
            $m2=date($y.'-'.($i+1).'-31');
            $repo = $this->getDoctrine()
                ->getManager()
                ->getRepository('myPocketBundle:revenu');
            $query = $repo->createQueryBuilder('r');
            $query->select('SUM(r.montant)');
            $query->where('r.date BETWEEN :m1 AND :m2')
                    ->andWhere('r.iduser = :idu')
                    ->andWhere('r.deleted = :del')
            ->setParameter('m1', $m1)
            ->setParameter('m2', $m2)
            ->setParameter('del', 0)
            ->setParameter('idu', $session->get('id'));
            $result = $query->getQuery()->getResult();
            foreach ($result as $value) {
                $box[]=$value;
            }
        }
        return $box;
    }
    
    private function sumstatS(Request $req,$m,$y){
        $box = array();
        $session = $req->getSession();
        $s=0;
        for ($i = 0; $i < 31 ; $i++){
            $m2 = date($y.'-'.($m).'-'.($i+1));
            $repo = $this->getDoctrine()
                ->getManager()
                ->getRepository('myPocketBundle:revenu');
            $query = $repo->createQueryBuilder('r');
            $query->select('SUM(r.montant)');
            $query->where('r.date = :date')
                    ->andWhere('r.iduser = :idu')
                    ->andWhere('r.deleted = :del')
            ->setParameter('date', $m2)
            ->setParameter('del', 0)
            ->setParameter('idu', $session->get('id'));
            $r = $query->getQuery()->getSingleScalarResult();
            $repo = $this->getDoctrine()
                ->getManager()
                ->getRepository('myPocketBundle:depense');
            $query = $repo->createQueryBuilder('d');
            $query->select('SUM(d.montant)');
            $query->where('d.date = :date')
                    ->andWhere('d.iduser = :idu')
                    ->andWhere('d.deleted = :del')
            ->setParameter('date', $m2)
            ->setParameter('del', 0)
            ->setParameter('idu', $session->get('id'));
            $d = $query->getQuery()->getSingleScalarResult();
            if($r=="")
                $r=0;
            if($d=="")
                $d=0;
            $s=$s+($r-$d);
            $box[]=$s;
        }
        return $box;
    }
    
    private function sumstatDY(Request $req,$y){
        $box = array();
        $session = $req->getSession();
         for ($i = 0; $i < 12 ; $i++){
            $m1=date($y.'-'.($i+1).'-1');
            $m2=date($y.'-'.($i+1).'-31');
            $repo = $this->getDoctrine()
                ->getManager()
                ->getRepository('myPocketBundle:depense');
            $query = $repo->createQueryBuilder('d');
            $query->select('SUM(d.montant)');
            $query->where('d.date BETWEEN :m1 AND :m2')
                    ->andWhere('d.iduser = :idu')
                    ->andWhere('d.deleted = :del')
            ->setParameter('m1', $m1)
            ->setParameter('m2', $m2)
            ->setParameter('del', 0)
            ->setParameter('idu', $session->get('id'));
            $result = $query->getQuery()->getResult();
            foreach ($result as $value) {
                $box[]=$value;
            }
        }
        return $box;
    }
    
    private function sumstatSY(Request $req,$y){
        $box = array();
        $session = $req->getSession();
        for ($i = 1; $i < 13 ; $i++){
            $r=$this->sumR($req, $i, $y);
            $d=$this->sumD($req, $i, $y);
            if($r=="")
                $r=0;
            if($d=="")
                $d=0;
            $s=$r-$d;
            $box[]=$s;
        }
        return $box;
    }
    
    private function sumstatR(Request $req,$m,$y,$i){
        $session = $req->getSession();
        $m1=date($y.'-'.$m.'-1');
        $m2=date($y.'-'.$m.'-31');
        $repo = $this->getDoctrine()
            ->getManager()
            ->getRepository('myPocketBundle:revenu');
        $qb = $repo->createQueryBuilder('r');
        $qb->select('SUM(r.montant)');
        $qb->where('r.deleted = :check and r.iduser = :id');
        $qb->andwhere('r.categorie = :c');
        $qb->andwhere('r.date BETWEEN :m1 AND :m2');
        $qb->setParameter('check', 0);
        $qb->setParameter('id',$session->get('id'));
        $qb->setParameter('m1', $m1);
        $qb->setParameter('m2', $m2);
        $qb->setParameter('c', $i);
        $count = $qb->getQuery()->getSingleScalarResult();
        return $count;
    }
    
    private function sumstatD(Request $req,$m,$y,$i){
        $session = $req->getSession();
        $m1=date($y.'-'.$m.'-1');
        $m2=date($y.'-'.$m.'-31');
        $repo = $this->getDoctrine()
            ->getManager()
            ->getRepository('myPocketBundle:depense');
        $qb = $repo->createQueryBuilder('d');
        $qb->select('SUM(d.montant)');
        $qb->where('d.deleted = :check and d.iduser = :id');
        $qb->andwhere('d.categorie = :c');
        $qb->andwhere('d.date BETWEEN :m1 AND :m2');
        $qb->setParameter('check', 0);
        $qb->setParameter('id',$session->get('id'));
        $qb->setParameter('m1', $m1);
        $qb->setParameter('m2', $m2);
        $qb->setParameter('c', $i);
        $count = $qb->getQuery()->getSingleScalarResult();
        return $count;
    }
    
    private function sumstatRCat(Request $req,$m,$y){
        $session = $req->getSession();
        $box=array();
        $flag = $this->getDoctrine()
                ->getRepository('myPocketBundle:categorie')
                ->findAll();
        foreach ($flag as $c) {
            $id=$c->getId();
            $cr=$this->sumstatR($req, $m, $y,$id);
            if($cr==null){
                $cr=0;
            }
            $box[]=$cr;
        }
        return $box;
    }
    
    private function sumstatDCat(Request $req,$m,$y){
        $session = $req->getSession();
        $box=array();
        $flag = $this->getDoctrine()
                ->getRepository('myPocketBundle:categorie')
                ->findAll();
        foreach ($flag as $c) {
            $id=$c->getId();
            $cr=$this->sumstatD($req, $m, $y,$id);
            if($cr==null){
                $cr=0;
            }
            $box[]=$cr;
        }
        return $box;
    }

    private function getDep(Request $req,$mois,$annee){
        $box = array();
        $session = $req->getSession();
         for ($i = 0; $i < 31 ; $i++){
            $m2 = date($annee.'-'.($mois).'-'.($i+1).'');
            $repo = $this->getDoctrine()
                ->getManager()
                ->getRepository('myPocketBundle:depense');
            $query = $repo->createQueryBuilder('d');
            $query->where('d.date = :date')
                    ->andWhere('d.iduser = :idu')
                    ->andWhere('d.deleted = :del')
            ->setParameter('date', $m2)
            ->setParameter('del', 0)
            ->setParameter('idu', $session->get('id'));
            $result = $query->getQuery()->getResult();
            foreach ($result as $value) {
                $box[]=$value;
            }
        }
        return $box;
    }
    
    private function addDepense($idu,$desig,$date,\myPocketBundle\Entity\categorie $categorie,$mt){
        $depense = new \myPocketBundle\Entity\depense();
        $depense->setIduser($idu);
        $depense->setDate(new \DateTime($date));
        $depense->setDesignation($desig);
        $depense->setCategorie($categorie);
        $depense->setMontant($mt);
        $depense->setDeleted(0);
        $em = $this->getDoctrine()->getManager();
        $em->persist($depense);
        $em->flush(); 
    }
    
    private function addRevenu($idu,$desig,$date,\myPocketBundle\Entity\categorie $categorie,$mt){
        $revenu = new \myPocketBundle\Entity\revenu();
        $revenu->setIduser($idu);
        $revenu->setDate(new \DateTime($date));
        $revenu->setDesignation($desig);
        $revenu->setCategorie($categorie);
        $revenu->setMontant($mt);
        $revenu->setDeleted(0);
        $em = $this->getDoctrine()->getManager();
        $em->persist($revenu);
        $em->flush(); 
    }
    
    private  function getCategorieById($id){
        $cat = $this->getDoctrine()
                    ->getRepository('myPocketBundle:categorie')
                    ->find($id);
        return $cat;
    }
    
    private  function getRevenuById($id){
        $rv = $this->getDoctrine()
                    ->getRepository('myPocketBundle:revenu')
                    ->find($id);
        return $rv;
    }
    
    private  function getDepenseById($id){
        $dp = $this->getDoctrine()
                    ->getRepository('myPocketBundle:depense')
                    ->find($id);
        return $dp;
    }
    
    private function getCategoriesD(Request $req) {
        $session = $req->getSession();
        $m=date('m');
        $cr=$this->countR($req);
        $cd=$this->countD($req);
        $nom = $session->get('nom');
        $flag = $this->getDoctrine()
                ->getRepository('myPocketBundle:categorie')
                ->findAll();
        return $this->render('myPocketBundle:public:nouvelledepense.html.twig', array('nom' => $nom, 'categories' => $flag,'m'=>$m,'cr'=>$cr,'cd'=>$cd,'message'=>'Dépense ajoutée avec succès.'));
    }
    
    private function getCategoriesR(Request $req) {
        $session = $req->getSession();
        $m=date('m');
        $cr=$this->countR($req);
        $cd=$this->countD($req);
        $nom = $session->get('nom');
        $flag = $this->getDoctrine()
                ->getRepository('myPocketBundle:categorie')
                ->findAll();
        return $this->render('myPocketBundle:public:nouveaurevenu.html.twig', array('nom' => $nom, 'categories' => $flag,'m'=>$m,'cr'=>$cr,'cd'=>$cd,'message'=>'Revenu ajouté avec succès.'));
    }

    public function loginAction(Request $req) {
        $session = $req->getSession();
        if ($req->request->get('check')) {
            $email = $req->request->get('email');
            $pass = $req->request->get('pass');
            if ($this->isUser($req, $email, $pass)) {
                 return $this->acceuilAction($req);
            } else {
                return $this->render('myPocketBundle:public:login.html.twig', array('error' => 'login or password invalid !'));
            }
        }
        return $this->render('myPocketBundle:public:login.html.twig');
    }

    public function deconnexionAction(Request $req) {
        $session = $req->getSession();
        $session->set('connected', false);
        return $this->render('myPocketBundle:public:login.html.twig');
    }

    private function isUser(Request $request, $email, $pass) {
        $flag = $this->getDoctrine()
                ->getRepository('myPocketBundle:compte')
                ->findOneBy(array('login' => $email, 'password' => $pass, 'deleted' => 0));

        if ($flag) {
            $session = $request->getSession();
            $session->set('id', $flag->getId());
            $session->set('nom', $flag->getNom());
            $session->set('connected', true);
            return true;
        } else
            return false;
    }

}
