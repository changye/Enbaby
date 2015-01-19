<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/redirect')) {
            // enbaby_redirect_homepage
            if (rtrim($pathinfo, '/') === '/redirect') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'enbaby_redirect_homepage');
                }

                return array (  '_controller' => 'Enbaby\\RedirectBundle\\Controller\\DefaultController::indexAction',  '_route' => 'enbaby_redirect_homepage',);
            }

            // _redirect_wechat
            if (0 === strpos($pathinfo, '/redirect/wechat') && preg_match('#^/redirect/wechat(?:/(?P<index>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_redirect_wechat')), array (  '_controller' => 'Enbaby\\RedirectBundle\\Controller\\DefaultController::wechatAction',  'index' => 1,));
            }

        }

        if (0 === strpos($pathinfo, '/audiolib')) {
            // _index
            if (rtrim($pathinfo, '/') === '/audiolib') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_index');
                }

                return array (  '_controller' => 'Enbaby\\AudioLibBundle\\Controller\\DefaultController::indexAction',  '_route' => '_index',);
            }

            if (0 === strpos($pathinfo, '/audiolib/series')) {
                // _series
                if (preg_match('#^/audiolib/series(?:/(?P<seriesId>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_series')), array (  '_controller' => 'Enbaby\\AudioLibBundle\\Controller\\DefaultController::getSeriesAction',  'seriesId' => 'Z1401',));
                }

                // _series_book
                if (preg_match('#^/audiolib/series/(?P<seriesId>[^/]++)/(?P<subId>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_series_book')), array (  '_controller' => 'Enbaby\\AudioLibBundle\\Controller\\DefaultController::getSeriesBookAction',  'seriesId' => 'Z1401',));
                }

            }

            // _book
            if (0 === strpos($pathinfo, '/audiolib/book') && preg_match('#^/audiolib/book(?:/(?P<bookId>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_book')), array (  '_controller' => 'Enbaby\\AudioLibBundle\\Controller\\DefaultController::getBookAction',  'bookId' => 'Z1401-0001',));
            }

            // _redirect
            if (0 === strpos($pathinfo, '/audiolib/redirect') && preg_match('#^/audiolib/redirect(?:/(?P<index>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_redirect')), array (  '_controller' => 'Enbaby\\AudioLibBundle\\Controller\\DefaultController::redirectAction',  'index' => 1,));
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
