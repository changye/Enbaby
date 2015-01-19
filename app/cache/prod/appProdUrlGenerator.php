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
        'enbaby_redirect_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Enbaby\\RedirectBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/redirect/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_redirect_wechat' => array (  0 =>   array (    0 => 'index',  ),  1 =>   array (    '_controller' => 'Enbaby\\RedirectBundle\\Controller\\DefaultController::wechatAction',    'index' => 1,  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'index',    ),    1 =>     array (      0 => 'text',      1 => '/redirect/wechat',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Enbaby\\AudioLibBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/audiolib/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_series' => array (  0 =>   array (    0 => 'seriesId',  ),  1 =>   array (    '_controller' => 'Enbaby\\AudioLibBundle\\Controller\\DefaultController::getSeriesAction',    'seriesId' => 'Z1401',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'seriesId',    ),    1 =>     array (      0 => 'text',      1 => '/audiolib/series',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_series_book' => array (  0 =>   array (    0 => 'seriesId',    1 => 'subId',  ),  1 =>   array (    '_controller' => 'Enbaby\\AudioLibBundle\\Controller\\DefaultController::getSeriesBookAction',    'seriesId' => 'Z1401',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'subId',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'seriesId',    ),    2 =>     array (      0 => 'text',      1 => '/audiolib/series',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_book' => array (  0 =>   array (    0 => 'bookId',  ),  1 =>   array (    '_controller' => 'Enbaby\\AudioLibBundle\\Controller\\DefaultController::getBookAction',    'bookId' => 'Z1401-0001',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'bookId',    ),    1 =>     array (      0 => 'text',      1 => '/audiolib/book',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_redirect' => array (  0 =>   array (    0 => 'index',  ),  1 =>   array (    '_controller' => 'Enbaby\\AudioLibBundle\\Controller\\DefaultController::redirectAction',    'index' => 1,  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'index',    ),    1 =>     array (      0 => 'text',      1 => '/audiolib/redirect',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
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
