<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

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

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
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

        // easyadmin
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'easyadmin');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\AdminController::indexAction',  '_route' => 'easyadmin',);
        }

        // admin
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'admin');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\AdminController::indexAction',  '_route' => 'admin',);
        }

        // homepage
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/admin/login')) {
            // sonata_admin_redirect
            if ('/admin/login' === $trimmedPathinfo) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'sonata_admin_redirect');
                }

                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => 'sonata_admin_dashboard',  'permanent' => 'true',  '_route' => 'sonata_admin_redirect',);
            }

            // sonata_admin_dashboard
            if ('/admin/login/dashboard' === $pathinfo) {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::dashboardAction',  '_route' => 'sonata_admin_dashboard',);
            }

            if (0 === strpos($pathinfo, '/admin/login/core')) {
                if (0 === strpos($pathinfo, '/admin/login/core/get-')) {
                    // sonata_admin_retrieve_form_element
                    if ('/admin/login/core/get-form-field-element' === $pathinfo) {
                        return array (  '_controller' => 'sonata.admin.controller.admin:retrieveFormFieldElementAction',  '_route' => 'sonata_admin_retrieve_form_element',);
                    }

                    // sonata_admin_short_object_information
                    if (0 === strpos($pathinfo, '/admin/login/core/get-short-object-description') && preg_match('#^/admin/login/core/get\\-short\\-object\\-description(?:\\.(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_admin_short_object_information')), array (  '_controller' => 'sonata.admin.controller.admin:getShortObjectDescriptionAction',  '_format' => 'html',));
                    }

                    // sonata_admin_retrieve_autocomplete_items
                    if ('/admin/login/core/get-autocomplete-items' === $pathinfo) {
                        return array (  '_controller' => 'sonata.admin.controller.admin:retrieveAutocompleteItemsAction',  '_route' => 'sonata_admin_retrieve_autocomplete_items',);
                    }

                }

                // sonata_admin_append_form_element
                if ('/admin/login/core/append-form-field-element' === $pathinfo) {
                    return array (  '_controller' => 'sonata.admin.controller.admin:appendFormFieldElementAction',  '_route' => 'sonata_admin_append_form_element',);
                }

                // sonata_admin_set_object_field_value
                if ('/admin/login/core/set-object-field-value' === $pathinfo) {
                    return array (  '_controller' => 'sonata.admin.controller.admin:setObjectFieldValueAction',  '_route' => 'sonata_admin_set_object_field_value',);
                }

            }

            // sonata_admin_search
            if ('/admin/login/search' === $pathinfo) {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::searchAction',  '_route' => 'sonata_admin_search',);
            }

        }

        elseif (0 === strpos($pathinfo, '/admin/app')) {
            if (0 === strpos($pathinfo, '/admin/app/category')) {
                // admin_app_category_list
                if ('/admin/app/category/list' === $pathinfo) {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'app.admin.category',  '_sonata_name' => 'admin_app_category_list',  '_route' => 'admin_app_category_list',);
                }

                // admin_app_category_create
                if ('/admin/app/category/create' === $pathinfo) {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'app.admin.category',  '_sonata_name' => 'admin_app_category_create',  '_route' => 'admin_app_category_create',);
                }

                // admin_app_category_batch
                if ('/admin/app/category/batch' === $pathinfo) {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'app.admin.category',  '_sonata_name' => 'admin_app_category_batch',  '_route' => 'admin_app_category_batch',);
                }

                // admin_app_category_edit
                if (preg_match('#^/admin/app/category/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_category_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'app.admin.category',  '_sonata_name' => 'admin_app_category_edit',));
                }

                // admin_app_category_delete
                if (preg_match('#^/admin/app/category/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_category_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'app.admin.category',  '_sonata_name' => 'admin_app_category_delete',));
                }

                // admin_app_category_show
                if (preg_match('#^/admin/app/category/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_category_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'app.admin.category',  '_sonata_name' => 'admin_app_category_show',));
                }

                // admin_app_category_export
                if ('/admin/app/category/export' === $pathinfo) {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'app.admin.category',  '_sonata_name' => 'admin_app_category_export',  '_route' => 'admin_app_category_export',);
                }

                // admin_app_category_blogpost_list
                if (preg_match('#^/admin/app/category/(?P<id>[^/]++)/blogpost/list$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_category_blogpost_list')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'app.admin.category|app.admin.blogpost',  '_sonata_name' => 'admin_app_category_blogpost_list',));
                }

                // admin_app_category_blogpost_create
                if (preg_match('#^/admin/app/category/(?P<id>[^/]++)/blogpost/create$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_category_blogpost_create')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'app.admin.category|app.admin.blogpost',  '_sonata_name' => 'admin_app_category_blogpost_create',));
                }

                // admin_app_category_blogpost_batch
                if (preg_match('#^/admin/app/category/(?P<id>[^/]++)/blogpost/batch$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_category_blogpost_batch')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'app.admin.category|app.admin.blogpost',  '_sonata_name' => 'admin_app_category_blogpost_batch',));
                }

                // admin_app_category_blogpost_edit
                if (preg_match('#^/admin/app/category/(?P<id>[^/]++)/blogpost/(?P<childId>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_category_blogpost_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'app.admin.category|app.admin.blogpost',  '_sonata_name' => 'admin_app_category_blogpost_edit',));
                }

                // admin_app_category_blogpost_delete
                if (preg_match('#^/admin/app/category/(?P<id>[^/]++)/blogpost/(?P<childId>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_category_blogpost_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'app.admin.category|app.admin.blogpost',  '_sonata_name' => 'admin_app_category_blogpost_delete',));
                }

                // admin_app_category_blogpost_show
                if (preg_match('#^/admin/app/category/(?P<id>[^/]++)/blogpost/(?P<childId>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_category_blogpost_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'app.admin.category|app.admin.blogpost',  '_sonata_name' => 'admin_app_category_blogpost_show',));
                }

                // admin_app_category_blogpost_export
                if (preg_match('#^/admin/app/category/(?P<id>[^/]++)/blogpost/export$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_category_blogpost_export')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'app.admin.category|app.admin.blogpost',  '_sonata_name' => 'admin_app_category_blogpost_export',));
                }

            }

            elseif (0 === strpos($pathinfo, '/admin/app/blogpost')) {
                // admin_app_blogpost_list
                if ('/admin/app/blogpost/list' === $pathinfo) {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'app.admin.blogpost',  '_sonata_name' => 'admin_app_blogpost_list',  '_route' => 'admin_app_blogpost_list',);
                }

                // admin_app_blogpost_create
                if ('/admin/app/blogpost/create' === $pathinfo) {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'app.admin.blogpost',  '_sonata_name' => 'admin_app_blogpost_create',  '_route' => 'admin_app_blogpost_create',);
                }

                // admin_app_blogpost_batch
                if ('/admin/app/blogpost/batch' === $pathinfo) {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'app.admin.blogpost',  '_sonata_name' => 'admin_app_blogpost_batch',  '_route' => 'admin_app_blogpost_batch',);
                }

                // admin_app_blogpost_edit
                if (preg_match('#^/admin/app/blogpost/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_blogpost_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'app.admin.blogpost',  '_sonata_name' => 'admin_app_blogpost_edit',));
                }

                // admin_app_blogpost_delete
                if (preg_match('#^/admin/app/blogpost/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_blogpost_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'app.admin.blogpost',  '_sonata_name' => 'admin_app_blogpost_delete',));
                }

                // admin_app_blogpost_show
                if (preg_match('#^/admin/app/blogpost/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_blogpost_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'app.admin.blogpost',  '_sonata_name' => 'admin_app_blogpost_show',));
                }

                // admin_app_blogpost_export
                if ('/admin/app/blogpost/export' === $pathinfo) {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'app.admin.blogpost',  '_sonata_name' => 'admin_app_blogpost_export',  '_route' => 'admin_app_blogpost_export',);
                }

            }

            elseif (0 === strpos($pathinfo, '/admin/app/user')) {
                // admin_app_user_list
                if ('/admin/app/user/list' === $pathinfo) {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'app.admin.user',  '_sonata_name' => 'admin_app_user_list',  '_route' => 'admin_app_user_list',);
                }

                // admin_app_user_create
                if ('/admin/app/user/create' === $pathinfo) {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'app.admin.user',  '_sonata_name' => 'admin_app_user_create',  '_route' => 'admin_app_user_create',);
                }

                // admin_app_user_batch
                if ('/admin/app/user/batch' === $pathinfo) {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'app.admin.user',  '_sonata_name' => 'admin_app_user_batch',  '_route' => 'admin_app_user_batch',);
                }

                // admin_app_user_edit
                if (preg_match('#^/admin/app/user/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_user_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'app.admin.user',  '_sonata_name' => 'admin_app_user_edit',));
                }

                // admin_app_user_delete
                if (preg_match('#^/admin/app/user/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_user_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'app.admin.user',  '_sonata_name' => 'admin_app_user_delete',));
                }

                // admin_app_user_show
                if (preg_match('#^/admin/app/user/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_user_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'app.admin.user',  '_sonata_name' => 'admin_app_user_show',));
                }

                // admin_app_user_export
                if ('/admin/app/user/export' === $pathinfo) {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'app.admin.user',  '_sonata_name' => 'admin_app_user_export',  '_route' => 'admin_app_user_export',);
                }

                // admin_app_user_group_list
                if (preg_match('#^/admin/app/user/(?P<id>[^/]++)/group/list$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_user_group_list')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'app.admin.user|app.admin.groups',  '_sonata_name' => 'admin_app_user_group_list',));
                }

                // admin_app_user_group_create
                if (preg_match('#^/admin/app/user/(?P<id>[^/]++)/group/create$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_user_group_create')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'app.admin.user|app.admin.groups',  '_sonata_name' => 'admin_app_user_group_create',));
                }

                // admin_app_user_group_batch
                if (preg_match('#^/admin/app/user/(?P<id>[^/]++)/group/batch$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_user_group_batch')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'app.admin.user|app.admin.groups',  '_sonata_name' => 'admin_app_user_group_batch',));
                }

                // admin_app_user_group_edit
                if (preg_match('#^/admin/app/user/(?P<id>[^/]++)/group/(?P<childId>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_user_group_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'app.admin.user|app.admin.groups',  '_sonata_name' => 'admin_app_user_group_edit',));
                }

                // admin_app_user_group_delete
                if (preg_match('#^/admin/app/user/(?P<id>[^/]++)/group/(?P<childId>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_user_group_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'app.admin.user|app.admin.groups',  '_sonata_name' => 'admin_app_user_group_delete',));
                }

                // admin_app_user_group_show
                if (preg_match('#^/admin/app/user/(?P<id>[^/]++)/group/(?P<childId>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_user_group_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'app.admin.user|app.admin.groups',  '_sonata_name' => 'admin_app_user_group_show',));
                }

                // admin_app_user_group_export
                if (preg_match('#^/admin/app/user/(?P<id>[^/]++)/group/export$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_user_group_export')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'app.admin.user|app.admin.groups',  '_sonata_name' => 'admin_app_user_group_export',));
                }

            }

            elseif (0 === strpos($pathinfo, '/admin/app/group')) {
                // admin_app_group_list
                if ('/admin/app/group/list' === $pathinfo) {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'app.admin.groups',  '_sonata_name' => 'admin_app_group_list',  '_route' => 'admin_app_group_list',);
                }

                // admin_app_group_create
                if ('/admin/app/group/create' === $pathinfo) {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'app.admin.groups',  '_sonata_name' => 'admin_app_group_create',  '_route' => 'admin_app_group_create',);
                }

                // admin_app_group_batch
                if ('/admin/app/group/batch' === $pathinfo) {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'app.admin.groups',  '_sonata_name' => 'admin_app_group_batch',  '_route' => 'admin_app_group_batch',);
                }

                // admin_app_group_edit
                if (preg_match('#^/admin/app/group/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_group_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'app.admin.groups',  '_sonata_name' => 'admin_app_group_edit',));
                }

                // admin_app_group_delete
                if (preg_match('#^/admin/app/group/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_group_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'app.admin.groups',  '_sonata_name' => 'admin_app_group_delete',));
                }

                // admin_app_group_show
                if (preg_match('#^/admin/app/group/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_group_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'app.admin.groups',  '_sonata_name' => 'admin_app_group_show',));
                }

                // admin_app_group_export
                if ('/admin/app/group/export' === $pathinfo) {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'app.admin.groups',  '_sonata_name' => 'admin_app_group_export',  '_route' => 'admin_app_group_export',);
                }

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
