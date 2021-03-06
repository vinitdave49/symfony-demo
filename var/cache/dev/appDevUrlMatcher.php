<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'index');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'index',);
        }

        // logout
        if ($pathinfo === '/logout') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::logoutAction',  '_route' => 'logout',);
        }

        // login
        if ($pathinfo === '/home') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::loginAction',  '_route' => 'login',);
        }

        if (0 === strpos($pathinfo, '/c')) {
            if (0 === strpos($pathinfo, '/create')) {
                // createactivityTemplate
                if ($pathinfo === '/createactivityTemplate') {
                    return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::createActivityTemplateAction',  '_route' => 'createactivityTemplate',);
                }

                // createworkerTemplate
                if ($pathinfo === '/createworkerTemplate') {
                    return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::createWorkerTemplateAction',  '_route' => 'createworkerTemplate',);
                }

                // createtaskqueueTemplate
                if ($pathinfo === '/createtaskqueueTemplate') {
                    return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::createTaskQueueTemplateAction',  '_route' => 'createtaskqueueTemplate',);
                }

                // createuser
                if ($pathinfo === '/createuser') {
                    return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::createuserAction',  '_route' => 'createuser',);
                }

                // createproject
                if ($pathinfo === '/createproject') {
                    return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::createprojecttemplateAction',  '_route' => 'createproject',);
                }

            }

            // configureproject
            if ($pathinfo === '/configureproject') {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::configureprojectAction',  '_route' => 'configureproject',);
            }

            if (0 === strpos($pathinfo, '/create')) {
                // createprojectaction
                if ($pathinfo === '/createprojectaction') {
                    return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::createprojectAction',  '_route' => 'createprojectaction',);
                }

                // createworker
                if ($pathinfo === '/createworker') {
                    return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::createworkerAction',  '_route' => 'createworker',);
                }

                // createactivity
                if ($pathinfo === '/createactivity') {
                    return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::createactivityAction',  '_route' => 'createactivity',);
                }

                // createworkflow
                if ($pathinfo === '/createworkflow') {
                    return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::createworkflowAction',  '_route' => 'createworkflow',);
                }

                // createtaskqueue
                if ($pathinfo === '/createtaskqueue') {
                    return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::createtaskqueueAction',  '_route' => 'createtaskqueue',);
                }

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
