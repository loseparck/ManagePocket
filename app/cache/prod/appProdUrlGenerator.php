<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes = array(
        'my_pocket_loginpage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'myPocketBundle\\Controller\\DefaultController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'my_pocket_acceuilpage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'myPocketBundle\\Controller\\DefaultController::acceuilAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/acceuil',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'my_pocket_nouvelledepensepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'myPocketBundle\\Controller\\DefaultController::nouvelledepenseAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/depense',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'my_pocket_editdepensepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'myPocketBundle\\Controller\\DefaultController::editdepenseAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/editdepense',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'my_pocket_listedepensepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'myPocketBundle\\Controller\\DefaultController::listedepenseAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/listedepense',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'my_pocket_nouveaurevenupage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'myPocketBundle\\Controller\\DefaultController::nouveaurevenuAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/revenu',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'my_pocket_editrevenupage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'myPocketBundle\\Controller\\DefaultController::editrevenuAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/editrevenu',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'my_pocket_listerevenupage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'myPocketBundle\\Controller\\DefaultController::listerevenuAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/listerevenu',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'my_pocket_chartdepensepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'myPocketBundle\\Controller\\DefaultController::statdepenseAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/statistiquedepense',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'my_pocket_chartrevenupage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'myPocketBundle\\Controller\\DefaultController::statrevenuAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/statistiquerevenu',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'my_pocket_chartsoldepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'myPocketBundle\\Controller\\DefaultController::statsoldeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/statistiquesolde',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'my_pocket_deconnexionpage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'myPocketBundle\\Controller\\DefaultController::deconnexionAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/app/example',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
