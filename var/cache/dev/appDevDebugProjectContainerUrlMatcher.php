<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = [];
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => '_wdt']), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not__profiler_home;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', '_profiler_home'));
                    }

                    return $ret;
                }
                not__profiler_home:

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_search_results']), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler']), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_router']), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_exception']), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_exception_css']), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => '_twig_error_test']), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        elseif (0 === strpos($pathinfo, '/friend')) {
            // app_friendadd_friendrequest
            if (0 === strpos($pathinfo, '/friendrequest') && preg_match('#^/friendrequest/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'app_friendadd_friendrequest']), array (  '_controller' => 'AppBundle\\Controller\\FriendAddController::friendRequest',));
            }

            // friendreject
            if (0 === strpos($pathinfo, '/friendreject') && preg_match('#^/friendreject/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'friendreject']), array (  '_controller' => 'AppBundle\\Controller\\ListController::friendReject',));
            }

            // app_list_showfriendlist
            if (0 === strpos($pathinfo, '/friendlist') && preg_match('#^/friendlist/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'app_list_showfriendlist']), array (  '_controller' => 'AppBundle\\Controller\\ListController::showFriendList',));
            }

            // friendaccept
            if (0 === strpos($pathinfo, '/friendaccept') && preg_match('#^/friendaccept/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'friendaccept']), array (  '_controller' => 'AppBundle\\Controller\\ListController::friendAccept',));
            }

        }

        // welcome
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\ListController::showAction',  '_route' => 'welcome',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_welcome;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'welcome'));
            }

            return $ret;
        }
        not_welcome:

        if (0 === strpos($pathinfo, '/profile')) {
            // profile_details
            if (0 === strpos($pathinfo, '/profile_details') && preg_match('#^/profile_details/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'profile_details']), array (  '_controller' => 'AppBundle\\Controller\\ListController::showProfile',));
            }

            // profile
            if ('/profile' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'AppBundle\\Controller\\SecurityController::showProfile',  '_route' => 'profile',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_profile;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'profile'));
                }

                return $ret;
            }
            not_profile:

        }

        // myprofile
        if ('/myprofile' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\ListController::showMyProfile',  '_route' => 'myprofile',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_myprofile;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'myprofile'));
            }

            return $ret;
        }
        not_myprofile:

        // mypost
        if ('/mypost' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\ListController::showMyPost',  '_route' => 'mypost',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_mypost;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'mypost'));
            }

            return $ret;
        }
        not_mypost:

        if (0 === strpos($pathinfo, '/a')) {
            if (0 === strpos($pathinfo, '/allpost')) {
                // allpost
                if ('/allpost' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'AppBundle\\Controller\\ListController::showAllPost',  '_route' => 'allpost',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_allpost;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'allpost'));
                    }

                    return $ret;
                }
                not_allpost:

                // app_list_increaselike
                if (preg_match('#^/allpost/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'app_list_increaselike']), array (  '_controller' => 'AppBundle\\Controller\\ListController::increaseLike',));
                }

            }

            // app_postadd_addpost
            if ('/addpost' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'AppBundle\\Controller\\PostAddController::addPost',  '_route' => 'app_postadd_addpost',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_app_postadd_addpost;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'app_postadd_addpost'));
                }

                return $ret;
            }
            not_app_postadd_addpost:

            // app_profileadd_profileadd
            if (0 === strpos($pathinfo, '/addprofile') && preg_match('#^/addprofile/(?P<for_id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'app_profileadd_profileadd']), array (  '_controller' => 'AppBundle\\Controller\\ProfileAddController::profileAdd',));
            }

        }

        // register
        if ('/register' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'register',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_register;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'register'));
            }

            return $ret;
        }
        not_register:

        if (0 === strpos($pathinfo, '/login')) {
            // login
            if ('/login' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'AppBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_login;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'login'));
                }

                return $ret;
            }
            not_login:

            // security_login_check
            if ('/login_check' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\SecurityController::loginCheckAction',  '_route' => 'security_login_check',);
            }

        }

        // logout
        if ('/logout' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'logout',);
        }

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
