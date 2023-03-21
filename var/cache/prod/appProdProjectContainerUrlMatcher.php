<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/client')) {
            // sftp
            if ('/client/sftp' === $pathinfo) {
                return array (  '_controller' => 'ClientBundle\\Controller\\DefaultController::sftpAction',  '_route' => 'sftp',);
            }

            // espaceclient
            if ('/client/profil' === $pathinfo) {
                return array (  '_controller' => 'ClientBundle\\Controller\\DefaultController::indexAction',  '_route' => 'espaceclient',);
            }

            // compteclient
            if ('/client/compte' === $pathinfo) {
                return array (  '_controller' => 'ClientBundle\\Controller\\DefaultController::compteAction',  '_route' => 'compteclient',);
            }

            // uploadsfiles
            if ('/client/upload-file' === $pathinfo) {
                return array (  '_controller' => 'ClientBundle\\Controller\\DefaultController::uploadsAction',  '_route' => 'uploadsfiles',);
            }

            // myfiles
            if ('/client/my-files' === $pathinfo) {
                return array (  '_controller' => 'ClientBundle\\Controller\\DefaultController::sendAction',  '_route' => 'myfiles',);
            }

            // dashbord
            if ('/client' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'ClientBundle\\Controller\\DefaultController::dashbordAction',  '_route' => 'dashbord',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_dashbord;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'dashbord'));
                }

                return $ret;
            }
            not_dashbord:

            // deletefiles
            if ('/client/delete-files' === $pathinfo) {
                return array (  '_controller' => 'ClientBundle\\Controller\\DefaultController::deletesAction',  '_route' => 'deletefiles',);
            }

        }

        elseif (0 === strpos($pathinfo, '/admin')) {
            // dashbordadmin
            if ('/admin' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'AdminBundle\\Controller\\DefaultController::dashbordAction',  '_route' => 'dashbordadmin',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_dashbordadmin;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'dashbordadmin'));
                }

                return $ret;
            }
            not_dashbordadmin:

            // adminclients
            if ('/admin/clients' === $pathinfo) {
                return array (  '_controller' => 'AdminBundle\\Controller\\DefaultController::indexAction',  '_route' => 'adminclients',);
            }

            // adminfiles
            if ('/admin/files' === $pathinfo) {
                return array (  '_controller' => 'AdminBundle\\Controller\\DefaultController::filesAction',  '_route' => 'adminfiles',);
            }

            if (0 === strpos($pathinfo, '/admin/de')) {
                // deletefilesadmin
                if ('/admin/delete-files' === $pathinfo) {
                    return array (  '_controller' => 'AdminBundle\\Controller\\DefaultController::deletesAction',  '_route' => 'deletefilesadmin',);
                }

                // deleteuseradmin
                if ('/admin/delete-user' === $pathinfo) {
                    return array (  '_controller' => 'AdminBundle\\Controller\\DefaultController::deletesuserAction',  '_route' => 'deleteuseradmin',);
                }

                // desactiveruser
                if (0 === strpos($pathinfo, '/admin/desactiver-user') && preg_match('#^/admin/desactiver\\-user/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'desactiveruser']), array (  '_controller' => 'AdminBundle\\Controller\\DefaultController::desactiversuserAction',));
                }

            }

            // activeruser
            if (0 === strpos($pathinfo, '/admin/activer-user') && preg_match('#^/admin/activer\\-user/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'activeruser']), array (  '_controller' => 'AdminBundle\\Controller\\DefaultController::activersuserAction',));
            }

            // uploadsfilesadmin
            if ('/admin/upload-file' === $pathinfo) {
                return array (  '_controller' => 'AdminBundle\\Controller\\DefaultController::uploadsAction',  '_route' => 'uploadsfilesadmin',);
            }

        }

        // adddoctor
        if ('/adddoctor' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::registeraddAction',  '_route' => 'adddoctor',);
        }

        if (0 === strpos($pathinfo, '/re')) {
            // redirectlogin
            if ('/redirectlogin' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'redirectlogin',);
            }

            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if ('/register' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'fos_user.registration.controller:registerAction',  '_route' => 'fos_user_registration_register',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_fos_user_registration_register;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'fos_user_registration_register'));
                    }

                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_fos_user_registration_register;
                    }

                    return $ret;
                }
                not_fos_user_registration_register:

                // fos_user_registration_check_email
                if ('/register/check-email' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.registration.controller:checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_fos_user_registration_check_email;
                    }

                    return $ret;
                }
                not_fos_user_registration_check_email:

                if (0 === strpos($pathinfo, '/register/confirm')) {
                    // fos_user_registration_confirm
                    if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'fos_user_registration_confirm']), array (  '_controller' => 'fos_user.registration.controller:confirmAction',));
                        if (!in_array($canonicalMethod, ['GET'])) {
                            $allow = array_merge($allow, ['GET']);
                            goto not_fos_user_registration_confirm;
                        }

                        return $ret;
                    }
                    not_fos_user_registration_confirm:

                    // fos_user_registration_confirmed
                    if ('/register/confirmed' === $pathinfo) {
                        $ret = array (  '_controller' => 'fos_user.registration.controller:confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        if (!in_array($canonicalMethod, ['GET'])) {
                            $allow = array_merge($allow, ['GET']);
                            goto not_fos_user_registration_confirmed;
                        }

                        return $ret;
                    }
                    not_fos_user_registration_confirmed:

                }

            }

            elseif (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ('/resetting/request' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.resetting.controller:requestAction',  '_route' => 'fos_user_resetting_request',);
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_fos_user_resetting_request;
                    }

                    return $ret;
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'fos_user_resetting_reset']), array (  '_controller' => 'fos_user.resetting.controller:resetAction',));
                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_fos_user_resetting_reset;
                    }

                    return $ret;
                }
                not_fos_user_resetting_reset:

                // fos_user_resetting_send_email
                if ('/resetting/send-email' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.resetting.controller:sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                    if (!in_array($requestMethod, ['POST'])) {
                        $allow = array_merge($allow, ['POST']);
                        goto not_fos_user_resetting_send_email;
                    }

                    return $ret;
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ('/resetting/check-email' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.resetting.controller:checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_fos_user_resetting_check_email;
                    }

                    return $ret;
                }
                not_fos_user_resetting_check_email:

            }

        }

        // insciption
        if ('/insciption' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::insciptionAction',  '_route' => 'insciption',);
        }

        // getname
        if ('/getname' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::getnameAction',  '_route' => 'getname',);
        }

        // modifclient
        if ('/modifclient' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::modifdoctorAction',  '_route' => 'modifclient',);
        }

        // logindocteur
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\DefaultController::loginarchitectAction',  '_route' => 'logindocteur',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_logindocteur;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'logindocteur'));
            }

            return $ret;
        }
        not_logindocteur:

        if (0 === strpos($pathinfo, '/login')) {
            // fos_user_security_login
            if ('/login' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.security.controller:loginAction',  '_route' => 'fos_user_security_login',);
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_fos_user_security_login;
                }

                return $ret;
            }
            not_fos_user_security_login:

            // fos_user_security_check
            if ('/login_check' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.security.controller:checkAction',  '_route' => 'fos_user_security_check',);
                if (!in_array($requestMethod, ['POST'])) {
                    $allow = array_merge($allow, ['POST']);
                    goto not_fos_user_security_check;
                }

                return $ret;
            }
            not_fos_user_security_check:

        }

        // fos_user_security_logout
        if ('/logout' === $pathinfo) {
            $ret = array (  '_controller' => 'fos_user.security.controller:logoutAction',  '_route' => 'fos_user_security_logout',);
            if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                $allow = array_merge($allow, ['GET', 'POST']);
                goto not_fos_user_security_logout;
            }

            return $ret;
        }
        not_fos_user_security_logout:

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if ('/profile' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'fos_user.profile.controller:showAction',  '_route' => 'fos_user_profile_show',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_fos_user_profile_show;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'fos_user_profile_show'));
                }

                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_fos_user_profile_show;
                }

                return $ret;
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ('/profile/edit' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.profile.controller:editAction',  '_route' => 'fos_user_profile_edit',);
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_fos_user_profile_edit;
                }

                return $ret;
            }
            not_fos_user_profile_edit:

            // fos_user_change_password
            if ('/profile/change-password' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.change_password.controller:changePasswordAction',  '_route' => 'fos_user_change_password',);
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_fos_user_change_password;
                }

                return $ret;
            }
            not_fos_user_change_password:

        }

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
