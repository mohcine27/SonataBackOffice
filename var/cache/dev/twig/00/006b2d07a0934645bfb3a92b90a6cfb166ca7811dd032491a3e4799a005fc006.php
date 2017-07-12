<?php

/* EasyAdminBundle:default:layout.html.twig */
class __TwigTemplate_ee9efe7bcbf9efa1706cbf91df8c8fd36baa5664769a92b96f130cacbe69ee94 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
            'head_stylesheets' => array($this, 'block_head_stylesheets'),
            'head_favicon' => array($this, 'block_head_favicon'),
            'head_javascript' => array($this, 'block_head_javascript'),
            'adminlte_options' => array($this, 'block_adminlte_options'),
            'body' => array($this, 'block_body'),
            'body_id' => array($this, 'block_body_id'),
            'body_class' => array($this, 'block_body_class'),
            'wrapper' => array($this, 'block_wrapper'),
            'header' => array($this, 'block_header'),
            'header_logo' => array($this, 'block_header_logo'),
            'header_custom_menu' => array($this, 'block_header_custom_menu'),
            'user_menu' => array($this, 'block_user_menu'),
            'user_menu_dropdown' => array($this, 'block_user_menu_dropdown'),
            'sidebar' => array($this, 'block_sidebar'),
            'main_menu_wrapper' => array($this, 'block_main_menu_wrapper'),
            'content' => array($this, 'block_content'),
            'flash_messages' => array($this, 'block_flash_messages'),
            'content_header' => array($this, 'block_content_header'),
            'content_title' => array($this, 'block_content_title'),
            'content_help' => array($this, 'block_content_help'),
            'main' => array($this, 'block_main'),
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1691444b45f10eb2043ffd7a052880905f7c227a5d1ff926b1794c169a111e18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1691444b45f10eb2043ffd7a052880905f7c227a5d1ff926b1794c169a111e18->enter($__internal_1691444b45f10eb2043ffd7a052880905f7c227a5d1ff926b1794c169a111e18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:layout.html.twig"));

        $__internal_df03dc6e8ebe73f00cef805ecd7e829bea87fd9d0100d112211a23bc4adbb70e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df03dc6e8ebe73f00cef805ecd7e829bea87fd9d0100d112211a23bc4adbb70e->enter($__internal_df03dc6e8ebe73f00cef805ecd7e829bea87fd9d0100d112211a23bc4adbb70e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, _twig_default_filter(twig_first($this->env, twig_split_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array()), "_")), "en"), "html", null, true);
        echo "\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"robots\" content=\"noindex, nofollow, noarchive, nosnippet, noodp, noimageindex, notranslate, nocache\" />
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <meta name=\"generator\" content=\"EasyAdmin\" />

        <title>";
        // line 10
        $this->displayBlock('page_title', $context, $blocks);
        echo "</title>

        ";
        // line 12
        $this->displayBlock('head_stylesheets', $context, $blocks);
        // line 18
        echo "
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.assets.css"));
        foreach ($context['_seq'] as $context["_key"] => $context["css_asset"]) {
            // line 20
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($context["css_asset"]), "html", null, true);
            echo "\">
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['css_asset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "
        ";
        // line 23
        $this->displayBlock('head_favicon', $context, $blocks);
        // line 27
        echo "
        ";
        // line 28
        $this->displayBlock('head_javascript', $context, $blocks);
        // line 45
        echo "
        ";
        // line 46
        if ($this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.rtl")) {
            // line 47
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/easyadmin/stylesheet/bootstrap-rtl.min.css"), "html", null, true);
            echo "\">
            <link rel=\"stylesheet\" href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/easyadmin/stylesheet/adminlte-rtl.min.css"), "html", null, true);
            echo "\">
        ";
        }
        // line 50
        echo "
        <!--[if lt IE 9]>
            <script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/easyadmin/stylesheet/html5shiv.min.css"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/easyadmin/stylesheet/respond.min.css"), "html", null, true);
        echo "\"></script>
        <![endif]-->
    </head>

    ";
        // line 57
        $this->displayBlock('body', $context, $blocks);
        // line 167
        echo "</html>
";
        
        $__internal_1691444b45f10eb2043ffd7a052880905f7c227a5d1ff926b1794c169a111e18->leave($__internal_1691444b45f10eb2043ffd7a052880905f7c227a5d1ff926b1794c169a111e18_prof);

        
        $__internal_df03dc6e8ebe73f00cef805ecd7e829bea87fd9d0100d112211a23bc4adbb70e->leave($__internal_df03dc6e8ebe73f00cef805ecd7e829bea87fd9d0100d112211a23bc4adbb70e_prof);

    }

    // line 10
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_de23d3f5e8bdb0859f58a8a8bc82006fa4d46903ab72e16dddbc9f0c2884ec74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de23d3f5e8bdb0859f58a8a8bc82006fa4d46903ab72e16dddbc9f0c2884ec74->enter($__internal_de23d3f5e8bdb0859f58a8a8bc82006fa4d46903ab72e16dddbc9f0c2884ec74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_498ea34085fa99dc014771f7ce10ade63c47c21cde27ecd78b95c6d574628b18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_498ea34085fa99dc014771f7ce10ade63c47c21cde27ecd78b95c6d574628b18->enter($__internal_498ea34085fa99dc014771f7ce10ade63c47c21cde27ecd78b95c6d574628b18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo strip_tags(        $this->renderBlock("content_title", $context, $blocks));
        
        $__internal_498ea34085fa99dc014771f7ce10ade63c47c21cde27ecd78b95c6d574628b18->leave($__internal_498ea34085fa99dc014771f7ce10ade63c47c21cde27ecd78b95c6d574628b18_prof);

        
        $__internal_de23d3f5e8bdb0859f58a8a8bc82006fa4d46903ab72e16dddbc9f0c2884ec74->leave($__internal_de23d3f5e8bdb0859f58a8a8bc82006fa4d46903ab72e16dddbc9f0c2884ec74_prof);

    }

    // line 12
    public function block_head_stylesheets($context, array $blocks = array())
    {
        $__internal_30fd0d2f99ecc9a333eccb3e2a09f90107cd2a6abec4efd6aebc4e998ba809cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30fd0d2f99ecc9a333eccb3e2a09f90107cd2a6abec4efd6aebc4e998ba809cc->enter($__internal_30fd0d2f99ecc9a333eccb3e2a09f90107cd2a6abec4efd6aebc4e998ba809cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_stylesheets"));

        $__internal_856730c8a66d56b0a82c148a1e39d7add8402ea3aa195b50f57f5be73b62b4f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_856730c8a66d56b0a82c148a1e39d7add8402ea3aa195b50f57f5be73b62b4f5->enter($__internal_856730c8a66d56b0a82c148a1e39d7add8402ea3aa195b50f57f5be73b62b4f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_stylesheets"));

        // line 13
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/easyadmin/stylesheet/easyadmin-all.min.css"), "html", null, true);
        echo "\">
            <style>
                ";
        // line 15
        echo $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("_internal.custom_css");
        echo "
            </style>
        ";
        
        $__internal_856730c8a66d56b0a82c148a1e39d7add8402ea3aa195b50f57f5be73b62b4f5->leave($__internal_856730c8a66d56b0a82c148a1e39d7add8402ea3aa195b50f57f5be73b62b4f5_prof);

        
        $__internal_30fd0d2f99ecc9a333eccb3e2a09f90107cd2a6abec4efd6aebc4e998ba809cc->leave($__internal_30fd0d2f99ecc9a333eccb3e2a09f90107cd2a6abec4efd6aebc4e998ba809cc_prof);

    }

    // line 23
    public function block_head_favicon($context, array $blocks = array())
    {
        $__internal_a67dbd0c6110bdd57db74680d9fc2c6a4857134a733ffbc6da2105dc0d42fb99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a67dbd0c6110bdd57db74680d9fc2c6a4857134a733ffbc6da2105dc0d42fb99->enter($__internal_a67dbd0c6110bdd57db74680d9fc2c6a4857134a733ffbc6da2105dc0d42fb99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_favicon"));

        $__internal_36b1607f274d137f9ea1be1744506a22f0ff7f81a0cce9cce792a3fd28ef8647 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36b1607f274d137f9ea1be1744506a22f0ff7f81a0cce9cce792a3fd28ef8647->enter($__internal_36b1607f274d137f9ea1be1744506a22f0ff7f81a0cce9cce792a3fd28ef8647_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_favicon"));

        // line 24
        echo "            ";
        $context["favicon"] = $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.assets.favicon");
        // line 25
        echo "            <link rel=\"icon\" type=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["favicon"]) ? $context["favicon"] : $this->getContext($context, "favicon")), "mime_type", array()), "html", null, true);
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute((isset($context["favicon"]) ? $context["favicon"] : $this->getContext($context, "favicon")), "path", array())), "html", null, true);
        echo "\" />
        ";
        
        $__internal_36b1607f274d137f9ea1be1744506a22f0ff7f81a0cce9cce792a3fd28ef8647->leave($__internal_36b1607f274d137f9ea1be1744506a22f0ff7f81a0cce9cce792a3fd28ef8647_prof);

        
        $__internal_a67dbd0c6110bdd57db74680d9fc2c6a4857134a733ffbc6da2105dc0d42fb99->leave($__internal_a67dbd0c6110bdd57db74680d9fc2c6a4857134a733ffbc6da2105dc0d42fb99_prof);

    }

    // line 28
    public function block_head_javascript($context, array $blocks = array())
    {
        $__internal_5937cce164737a6d8f9b9abe605a8895d4f8fd544ef5d51bb851afb99835a1dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5937cce164737a6d8f9b9abe605a8895d4f8fd544ef5d51bb851afb99835a1dc->enter($__internal_5937cce164737a6d8f9b9abe605a8895d4f8fd544ef5d51bb851afb99835a1dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_javascript"));

        $__internal_7229f435261de72480d5196256c07f4eb72dc006eca760280e22d78ca51f2b9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7229f435261de72480d5196256c07f4eb72dc006eca760280e22d78ca51f2b9a->enter($__internal_7229f435261de72480d5196256c07f4eb72dc006eca760280e22d78ca51f2b9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_javascript"));

        // line 29
        echo "            ";
        $this->displayBlock('adminlte_options', $context, $blocks);
        // line 42
        echo "
            <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/easyadmin/javascript/easyadmin-all.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_7229f435261de72480d5196256c07f4eb72dc006eca760280e22d78ca51f2b9a->leave($__internal_7229f435261de72480d5196256c07f4eb72dc006eca760280e22d78ca51f2b9a_prof);

        
        $__internal_5937cce164737a6d8f9b9abe605a8895d4f8fd544ef5d51bb851afb99835a1dc->leave($__internal_5937cce164737a6d8f9b9abe605a8895d4f8fd544ef5d51bb851afb99835a1dc_prof);

    }

    // line 29
    public function block_adminlte_options($context, array $blocks = array())
    {
        $__internal_441c786ea104285ab0af1ae9766f6607f71bf6f10714c5aa49b8987b808cc311 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_441c786ea104285ab0af1ae9766f6607f71bf6f10714c5aa49b8987b808cc311->enter($__internal_441c786ea104285ab0af1ae9766f6607f71bf6f10714c5aa49b8987b808cc311_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adminlte_options"));

        $__internal_ce7e00090742fab223e7784fcc98bd63ed6f396577dc805d8ad1233fd991db44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce7e00090742fab223e7784fcc98bd63ed6f396577dc805d8ad1233fd991db44->enter($__internal_ce7e00090742fab223e7784fcc98bd63ed6f396577dc805d8ad1233fd991db44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adminlte_options"));

        // line 30
        echo "                <script type=\"text/javascript\">
                    var AdminLTEOptions = {
                        animationSpeed: 'normal',
                        sidebarExpandOnHover: false,
                        enableBoxRefresh: false,
                        enableBSToppltip: false,
                        enableFastclick: false,
                        enableControlSidebar: false,
                        enableBoxWidget: false
                    };
                </script>
            ";
        
        $__internal_ce7e00090742fab223e7784fcc98bd63ed6f396577dc805d8ad1233fd991db44->leave($__internal_ce7e00090742fab223e7784fcc98bd63ed6f396577dc805d8ad1233fd991db44_prof);

        
        $__internal_441c786ea104285ab0af1ae9766f6607f71bf6f10714c5aa49b8987b808cc311->leave($__internal_441c786ea104285ab0af1ae9766f6607f71bf6f10714c5aa49b8987b808cc311_prof);

    }

    // line 57
    public function block_body($context, array $blocks = array())
    {
        $__internal_8bd95284ebd4513529511b13ea5fc4172c13b2ae7ba0d39746f28090842e97cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bd95284ebd4513529511b13ea5fc4172c13b2ae7ba0d39746f28090842e97cd->enter($__internal_8bd95284ebd4513529511b13ea5fc4172c13b2ae7ba0d39746f28090842e97cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_79bc7db903871544544f8e6611902580bda3b8628c7793866357eff9c393be0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79bc7db903871544544f8e6611902580bda3b8628c7793866357eff9c393be0c->enter($__internal_79bc7db903871544544f8e6611902580bda3b8628c7793866357eff9c393be0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 58
        echo "    <body id=\"";
        $this->displayBlock('body_id', $context, $blocks);
        echo "\" class=\"easyadmin sidebar-mini ";
        $this->displayBlock('body_class', $context, $blocks);
        echo " ";
        echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "cookies", array()), "has", array(0 => "_easyadmin_navigation_iscollapsed"), "method")) ? ("sidebar-collapse") : (""));
        echo "\">
        <div class=\"wrapper\">
        ";
        // line 60
        $this->displayBlock('wrapper', $context, $blocks);
        // line 158
        echo "        </div>

        ";
        // line 160
        $this->displayBlock('body_javascript', $context, $blocks);
        // line 161
        echo "
        ";
        // line 162
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.assets.js"));
        foreach ($context['_seq'] as $context["_key"] => $context["js_asset"]) {
            // line 163
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($context["js_asset"]), "html", null, true);
            echo "\"></script>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['js_asset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 165
        echo "    </body>
    ";
        
        $__internal_79bc7db903871544544f8e6611902580bda3b8628c7793866357eff9c393be0c->leave($__internal_79bc7db903871544544f8e6611902580bda3b8628c7793866357eff9c393be0c_prof);

        
        $__internal_8bd95284ebd4513529511b13ea5fc4172c13b2ae7ba0d39746f28090842e97cd->leave($__internal_8bd95284ebd4513529511b13ea5fc4172c13b2ae7ba0d39746f28090842e97cd_prof);

    }

    // line 58
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_01eab9c67a373f6da640f89cb8800095b8f6f12fd4725a43dcc37d7306270514 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01eab9c67a373f6da640f89cb8800095b8f6f12fd4725a43dcc37d7306270514->enter($__internal_01eab9c67a373f6da640f89cb8800095b8f6f12fd4725a43dcc37d7306270514_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_330e1f541178c60bd12822eebf8a35ddbd5ef81946c68ffe94e0d83a2145b82f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_330e1f541178c60bd12822eebf8a35ddbd5ef81946c68ffe94e0d83a2145b82f->enter($__internal_330e1f541178c60bd12822eebf8a35ddbd5ef81946c68ffe94e0d83a2145b82f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_330e1f541178c60bd12822eebf8a35ddbd5ef81946c68ffe94e0d83a2145b82f->leave($__internal_330e1f541178c60bd12822eebf8a35ddbd5ef81946c68ffe94e0d83a2145b82f_prof);

        
        $__internal_01eab9c67a373f6da640f89cb8800095b8f6f12fd4725a43dcc37d7306270514->leave($__internal_01eab9c67a373f6da640f89cb8800095b8f6f12fd4725a43dcc37d7306270514_prof);

    }

    public function block_body_class($context, array $blocks = array())
    {
        $__internal_bce38c8614eea980f279c8bd94b4ffb49d3605f3802b342c771bdb562ff316f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bce38c8614eea980f279c8bd94b4ffb49d3605f3802b342c771bdb562ff316f6->enter($__internal_bce38c8614eea980f279c8bd94b4ffb49d3605f3802b342c771bdb562ff316f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_cd7c5e39c2070877b414e0340af5951e7971491ccf56cd4b1f08cd313aedaaac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd7c5e39c2070877b414e0340af5951e7971491ccf56cd4b1f08cd313aedaaac->enter($__internal_cd7c5e39c2070877b414e0340af5951e7971491ccf56cd4b1f08cd313aedaaac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        
        $__internal_cd7c5e39c2070877b414e0340af5951e7971491ccf56cd4b1f08cd313aedaaac->leave($__internal_cd7c5e39c2070877b414e0340af5951e7971491ccf56cd4b1f08cd313aedaaac_prof);

        
        $__internal_bce38c8614eea980f279c8bd94b4ffb49d3605f3802b342c771bdb562ff316f6->leave($__internal_bce38c8614eea980f279c8bd94b4ffb49d3605f3802b342c771bdb562ff316f6_prof);

    }

    // line 60
    public function block_wrapper($context, array $blocks = array())
    {
        $__internal_74c2a326a278456314bd594b2270749e615a62259d4d1d3bae6b84338a613ea2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74c2a326a278456314bd594b2270749e615a62259d4d1d3bae6b84338a613ea2->enter($__internal_74c2a326a278456314bd594b2270749e615a62259d4d1d3bae6b84338a613ea2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

        $__internal_fcddcef8664189cf11e24c45b5b4f0c888fc400ca2ada678b5eb99192796d198 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcddcef8664189cf11e24c45b5b4f0c888fc400ca2ada678b5eb99192796d198->enter($__internal_fcddcef8664189cf11e24c45b5b4f0c888fc400ca2ada678b5eb99192796d198_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

        // line 61
        echo "            <header class=\"main-header\">
            ";
        // line 62
        $this->displayBlock('header', $context, $blocks);
        // line 115
        echo "            </header>

            <aside class=\"main-sidebar\">
            ";
        // line 118
        $this->displayBlock('sidebar', $context, $blocks);
        // line 129
        echo "            </aside>

            <div class=\"content-wrapper\">
            ";
        // line 132
        $this->displayBlock('content', $context, $blocks);
        // line 156
        echo "            </div>
        ";
        
        $__internal_fcddcef8664189cf11e24c45b5b4f0c888fc400ca2ada678b5eb99192796d198->leave($__internal_fcddcef8664189cf11e24c45b5b4f0c888fc400ca2ada678b5eb99192796d198_prof);

        
        $__internal_74c2a326a278456314bd594b2270749e615a62259d4d1d3bae6b84338a613ea2->leave($__internal_74c2a326a278456314bd594b2270749e615a62259d4d1d3bae6b84338a613ea2_prof);

    }

    // line 62
    public function block_header($context, array $blocks = array())
    {
        $__internal_e4a1014d3094ba1e6b4361dbc94388cfb528c1d555f3471383dd841b2921baa5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4a1014d3094ba1e6b4361dbc94388cfb528c1d555f3471383dd841b2921baa5->enter($__internal_e4a1014d3094ba1e6b4361dbc94388cfb528c1d555f3471383dd841b2921baa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_215b997e46d537427785d1ab549052d78dedb91a5f407808cf9b05a0436edc9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_215b997e46d537427785d1ab549052d78dedb91a5f407808cf9b05a0436edc9d->enter($__internal_215b997e46d537427785d1ab549052d78dedb91a5f407808cf9b05a0436edc9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 63
        echo "                <nav class=\"navbar\" role=\"navigation\">
                    <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                        <span class=\"sr-only\">";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("toggle_navigation", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
                    </a>

                    <div id=\"header-logo\">
                        ";
        // line 69
        $this->displayBlock('header_logo', $context, $blocks);
        // line 74
        echo "                    </div>

                    <div class=\"navbar-custom-menu\">
                    ";
        // line 77
        $this->displayBlock('header_custom_menu', $context, $blocks);
        // line 112
        echo "                    </div>
                </nav>
            ";
        
        $__internal_215b997e46d537427785d1ab549052d78dedb91a5f407808cf9b05a0436edc9d->leave($__internal_215b997e46d537427785d1ab549052d78dedb91a5f407808cf9b05a0436edc9d_prof);

        
        $__internal_e4a1014d3094ba1e6b4361dbc94388cfb528c1d555f3471383dd841b2921baa5->leave($__internal_e4a1014d3094ba1e6b4361dbc94388cfb528c1d555f3471383dd841b2921baa5_prof);

    }

    // line 69
    public function block_header_logo($context, array $blocks = array())
    {
        $__internal_62d0735b3bb7e724adec9c64db19bd2134a2c5add6ea9197360d3664bce931ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62d0735b3bb7e724adec9c64db19bd2134a2c5add6ea9197360d3664bce931ef->enter($__internal_62d0735b3bb7e724adec9c64db19bd2134a2c5add6ea9197360d3664bce931ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_logo"));

        $__internal_520cb3797f68f2d2fb620d825aeb77d39096d569c9c7a28024fea6178b3fd63f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_520cb3797f68f2d2fb620d825aeb77d39096d569c9c7a28024fea6178b3fd63f->enter($__internal_520cb3797f68f2d2fb620d825aeb77d39096d569c9c7a28024fea6178b3fd63f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_logo"));

        // line 70
        echo "                            <a class=\"logo ";
        echo (((twig_length_filter($this->env, $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("site_name")) > 14)) ? ("logo-long") : (""));
        echo "\" title=\"";
        echo twig_escape_filter($this->env, strip_tags($this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("site_name")), "html", null, true);
        echo "\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin");
        echo "\">
                                ";
        // line 71
        echo $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("site_name");
        echo "
                            </a>
                        ";
        
        $__internal_520cb3797f68f2d2fb620d825aeb77d39096d569c9c7a28024fea6178b3fd63f->leave($__internal_520cb3797f68f2d2fb620d825aeb77d39096d569c9c7a28024fea6178b3fd63f_prof);

        
        $__internal_62d0735b3bb7e724adec9c64db19bd2134a2c5add6ea9197360d3664bce931ef->leave($__internal_62d0735b3bb7e724adec9c64db19bd2134a2c5add6ea9197360d3664bce931ef_prof);

    }

    // line 77
    public function block_header_custom_menu($context, array $blocks = array())
    {
        $__internal_296ed96d3c3016777bcded5b3fe64072a8d22e49da4d4d24e7a1f551d448abff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_296ed96d3c3016777bcded5b3fe64072a8d22e49da4d4d24e7a1f551d448abff->enter($__internal_296ed96d3c3016777bcded5b3fe64072a8d22e49da4d4d24e7a1f551d448abff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_custom_menu"));

        $__internal_4467c5ec17e3e912bc34a88ce9a1eda9e946fd01bd71e9663ec52c9783f756a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4467c5ec17e3e912bc34a88ce9a1eda9e946fd01bd71e9663ec52c9783f756a1->enter($__internal_4467c5ec17e3e912bc34a88ce9a1eda9e946fd01bd71e9663ec52c9783f756a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_custom_menu"));

        // line 78
        echo "                        ";
        $context["_logout_path"] = $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getLogoutPath();
        // line 79
        echo "                        <ul class=\"nav navbar-nav\">
                            <li class=\"dropdown user user-menu\">
                                ";
        // line 81
        $this->displayBlock('user_menu', $context, $blocks);
        // line 109
        echo "                            </li>
                        </ul>
                    ";
        
        $__internal_4467c5ec17e3e912bc34a88ce9a1eda9e946fd01bd71e9663ec52c9783f756a1->leave($__internal_4467c5ec17e3e912bc34a88ce9a1eda9e946fd01bd71e9663ec52c9783f756a1_prof);

        
        $__internal_296ed96d3c3016777bcded5b3fe64072a8d22e49da4d4d24e7a1f551d448abff->leave($__internal_296ed96d3c3016777bcded5b3fe64072a8d22e49da4d4d24e7a1f551d448abff_prof);

    }

    // line 81
    public function block_user_menu($context, array $blocks = array())
    {
        $__internal_9e0ed60c05dd2e65c9ce48c754294ffed87e3fcfbb1112dd0c1b3ccd50b1ce25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e0ed60c05dd2e65c9ce48c754294ffed87e3fcfbb1112dd0c1b3ccd50b1ce25->enter($__internal_9e0ed60c05dd2e65c9ce48c754294ffed87e3fcfbb1112dd0c1b3ccd50b1ce25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu"));

        $__internal_85ea7b807e644cc35eab8bb92a57f0384c15854b69d2a9555ed9c6a478e78c4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85ea7b807e644cc35eab8bb92a57f0384c15854b69d2a9555ed9c6a478e78c4f->enter($__internal_85ea7b807e644cc35eab8bb92a57f0384c15854b69d2a9555ed9c6a478e78c4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu"));

        // line 82
        echo "                                    <span class=\"sr-only\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.logged_in_as", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>

                                    ";
        // line 84
        if (((($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), false)) : (false)) == false)) {
            // line 85
            echo "                                        <i class=\"hidden-xs fa fa-user-times\"></i>
                                        ";
            // line 86
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.anonymous", array(), "EasyAdminBundle"), "html", null, true);
            echo "
                                    ";
        } elseif ( !        // line 87
(isset($context["_logout_path"]) ? $context["_logout_path"] : $this->getContext($context, "_logout_path"))) {
            // line 88
            echo "                                        <i class=\"hidden-xs fa fa-user\"></i>
                                        ";
            // line 89
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "username", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "username", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.unnamed", array(), "EasyAdminBundle"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.unnamed", array(), "EasyAdminBundle"))), "html", null, true);
            echo "
                                    ";
        } else {
            // line 91
            echo "                                        <div class=\"btn-group\">
                                            <button type=\"button\" class=\"btn\" data-toggle=\"dropdown\">
                                                <i class=\"hidden-xs fa fa-user\"></i>
                                                ";
            // line 94
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "username", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "username", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.unnamed", array(), "EasyAdminBundle"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.unnamed", array(), "EasyAdminBundle"))), "html", null, true);
            echo "
                                            </button>
                                            <button type=\"button\" class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                                                <span class=\"caret\"></span>
                                            </button>
                                            <ul class=\"dropdown-menu\" role=\"menu\">
                                                ";
            // line 100
            $this->displayBlock('user_menu_dropdown', $context, $blocks);
            // line 105
            echo "                                            </ul>
                                        </div>
                                    ";
        }
        // line 108
        echo "                                ";
        
        $__internal_85ea7b807e644cc35eab8bb92a57f0384c15854b69d2a9555ed9c6a478e78c4f->leave($__internal_85ea7b807e644cc35eab8bb92a57f0384c15854b69d2a9555ed9c6a478e78c4f_prof);

        
        $__internal_9e0ed60c05dd2e65c9ce48c754294ffed87e3fcfbb1112dd0c1b3ccd50b1ce25->leave($__internal_9e0ed60c05dd2e65c9ce48c754294ffed87e3fcfbb1112dd0c1b3ccd50b1ce25_prof);

    }

    // line 100
    public function block_user_menu_dropdown($context, array $blocks = array())
    {
        $__internal_e03237cdc6aeaf37c7b4e0dfcee0bb73fd41d231c7b642062fb3a4d27388cca4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e03237cdc6aeaf37c7b4e0dfcee0bb73fd41d231c7b642062fb3a4d27388cca4->enter($__internal_e03237cdc6aeaf37c7b4e0dfcee0bb73fd41d231c7b642062fb3a4d27388cca4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu_dropdown"));

        $__internal_fc276be712b3ad3cde2fc90144e803f8caf329ef3524ffbb346394be0c7e94c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc276be712b3ad3cde2fc90144e803f8caf329ef3524ffbb346394be0c7e94c4->enter($__internal_fc276be712b3ad3cde2fc90144e803f8caf329ef3524ffbb346394be0c7e94c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu_dropdown"));

        // line 101
        echo "                                                <li>
                                                    <a href=\"";
        // line 102
        echo twig_escape_filter($this->env, (isset($context["_logout_path"]) ? $context["_logout_path"] : $this->getContext($context, "_logout_path")), "html", null, true);
        echo "\"><i class=\"fa fa-sign-out\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.signout", array(), "EasyAdminBundle"), "html", null, true);
        echo "</a>
                                                </li>
                                                ";
        
        $__internal_fc276be712b3ad3cde2fc90144e803f8caf329ef3524ffbb346394be0c7e94c4->leave($__internal_fc276be712b3ad3cde2fc90144e803f8caf329ef3524ffbb346394be0c7e94c4_prof);

        
        $__internal_e03237cdc6aeaf37c7b4e0dfcee0bb73fd41d231c7b642062fb3a4d27388cca4->leave($__internal_e03237cdc6aeaf37c7b4e0dfcee0bb73fd41d231c7b642062fb3a4d27388cca4_prof);

    }

    // line 118
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_45d6e08be5b61761aa8e73d5dc6a6f43170985875122c92969d65efcdeb80a6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45d6e08be5b61761aa8e73d5dc6a6f43170985875122c92969d65efcdeb80a6a->enter($__internal_45d6e08be5b61761aa8e73d5dc6a6f43170985875122c92969d65efcdeb80a6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_584eed069f82720ea365b15717b913d2c9937c455991a34216ee0d9d87455580 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_584eed069f82720ea365b15717b913d2c9937c455991a34216ee0d9d87455580->enter($__internal_584eed069f82720ea365b15717b913d2c9937c455991a34216ee0d9d87455580_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 119
        echo "                <section class=\"sidebar\">
                    ";
        // line 120
        $this->displayBlock('main_menu_wrapper', $context, $blocks);
        // line 127
        echo "                </section>
            ";
        
        $__internal_584eed069f82720ea365b15717b913d2c9937c455991a34216ee0d9d87455580->leave($__internal_584eed069f82720ea365b15717b913d2c9937c455991a34216ee0d9d87455580_prof);

        
        $__internal_45d6e08be5b61761aa8e73d5dc6a6f43170985875122c92969d65efcdeb80a6a->leave($__internal_45d6e08be5b61761aa8e73d5dc6a6f43170985875122c92969d65efcdeb80a6a_prof);

    }

    // line 120
    public function block_main_menu_wrapper($context, array $blocks = array())
    {
        $__internal_6206b08f37d552547addbbceb8086952b984a9a0e9333627836396637a9970b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6206b08f37d552547addbbceb8086952b984a9a0e9333627836396637a9970b2->enter($__internal_6206b08f37d552547addbbceb8086952b984a9a0e9333627836396637a9970b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_wrapper"));

        $__internal_702c53da47c71ae4e96b2511e2f0e7448da74461e981e50b7f66c7b313b5def1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_702c53da47c71ae4e96b2511e2f0e7448da74461e981e50b7f66c7b313b5def1->enter($__internal_702c53da47c71ae4e96b2511e2f0e7448da74461e981e50b7f66c7b313b5def1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_wrapper"));

        // line 121
        echo "                        ";
        echo twig_include($this->env, $context, array(0 => ((        // line 122
array_key_exists("_entity_config", $context)) ? ($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "templates", array()), "menu", array())) : ("")), 1 => $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.templates.menu"), 2 => "@EasyAdmin/default/menu.html.twig"));
        // line 125
        echo "
                    ";
        
        $__internal_702c53da47c71ae4e96b2511e2f0e7448da74461e981e50b7f66c7b313b5def1->leave($__internal_702c53da47c71ae4e96b2511e2f0e7448da74461e981e50b7f66c7b313b5def1_prof);

        
        $__internal_6206b08f37d552547addbbceb8086952b984a9a0e9333627836396637a9970b2->leave($__internal_6206b08f37d552547addbbceb8086952b984a9a0e9333627836396637a9970b2_prof);

    }

    // line 132
    public function block_content($context, array $blocks = array())
    {
        $__internal_cac97424ec833cb7a3f29424638d02be7af829daf2401e94dd3aca811ec33621 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cac97424ec833cb7a3f29424638d02be7af829daf2401e94dd3aca811ec33621->enter($__internal_cac97424ec833cb7a3f29424638d02be7af829daf2401e94dd3aca811ec33621_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_e24f4c9105c9a0dbae796f9280ac0657c9c499a51b1f2ac5d45c719a53c4fa0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e24f4c9105c9a0dbae796f9280ac0657c9c499a51b1f2ac5d45c719a53c4fa0d->enter($__internal_e24f4c9105c9a0dbae796f9280ac0657c9c499a51b1f2ac5d45c719a53c4fa0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 133
        echo "                ";
        $this->displayBlock('flash_messages', $context, $blocks);
        // line 136
        echo "
                <section class=\"content-header\">
                ";
        // line 138
        $this->displayBlock('content_header', $context, $blocks);
        // line 141
        echo "                ";
        $this->displayBlock('content_help', $context, $blocks);
        // line 150
        echo "                </section>

                <section id=\"main\" class=\"content\">
                    ";
        // line 153
        $this->displayBlock('main', $context, $blocks);
        // line 154
        echo "                </section>
            ";
        
        $__internal_e24f4c9105c9a0dbae796f9280ac0657c9c499a51b1f2ac5d45c719a53c4fa0d->leave($__internal_e24f4c9105c9a0dbae796f9280ac0657c9c499a51b1f2ac5d45c719a53c4fa0d_prof);

        
        $__internal_cac97424ec833cb7a3f29424638d02be7af829daf2401e94dd3aca811ec33621->leave($__internal_cac97424ec833cb7a3f29424638d02be7af829daf2401e94dd3aca811ec33621_prof);

    }

    // line 133
    public function block_flash_messages($context, array $blocks = array())
    {
        $__internal_c25b04fbe61aae65386405422caf71621a8b1bd8c2576c5b9eeb8b7d28af76f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c25b04fbe61aae65386405422caf71621a8b1bd8c2576c5b9eeb8b7d28af76f1->enter($__internal_c25b04fbe61aae65386405422caf71621a8b1bd8c2576c5b9eeb8b7d28af76f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash_messages"));

        $__internal_d52146e04bf78d8fb5a44bf94af72ee9c1968facc2cf94de887c536bdc0afb2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d52146e04bf78d8fb5a44bf94af72ee9c1968facc2cf94de887c536bdc0afb2e->enter($__internal_d52146e04bf78d8fb5a44bf94af72ee9c1968facc2cf94de887c536bdc0afb2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash_messages"));

        // line 134
        echo "                    ";
        echo twig_include($this->env, $context, ((array_key_exists("_entity_config", $context)) ? ($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "templates", array()), "flash_messages", array())) : ("@EasyAdmin/default/flash_messages.html.twig")));
        echo "
                ";
        
        $__internal_d52146e04bf78d8fb5a44bf94af72ee9c1968facc2cf94de887c536bdc0afb2e->leave($__internal_d52146e04bf78d8fb5a44bf94af72ee9c1968facc2cf94de887c536bdc0afb2e_prof);

        
        $__internal_c25b04fbe61aae65386405422caf71621a8b1bd8c2576c5b9eeb8b7d28af76f1->leave($__internal_c25b04fbe61aae65386405422caf71621a8b1bd8c2576c5b9eeb8b7d28af76f1_prof);

    }

    // line 138
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_70198cb9f75c9cc01cff4dd2723067ad18171a1538cde931661e2db0c1bec656 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70198cb9f75c9cc01cff4dd2723067ad18171a1538cde931661e2db0c1bec656->enter($__internal_70198cb9f75c9cc01cff4dd2723067ad18171a1538cde931661e2db0c1bec656_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        $__internal_7d25deaa92ff00c7e9d49bee8d9efae9a0ab6a7a4caf1dcc524a275b2f828190 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d25deaa92ff00c7e9d49bee8d9efae9a0ab6a7a4caf1dcc524a275b2f828190->enter($__internal_7d25deaa92ff00c7e9d49bee8d9efae9a0ab6a7a4caf1dcc524a275b2f828190_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        // line 139
        echo "                    <h1 class=\"title\">";
        $this->displayBlock('content_title', $context, $blocks);
        echo "</h1>
                ";
        
        $__internal_7d25deaa92ff00c7e9d49bee8d9efae9a0ab6a7a4caf1dcc524a275b2f828190->leave($__internal_7d25deaa92ff00c7e9d49bee8d9efae9a0ab6a7a4caf1dcc524a275b2f828190_prof);

        
        $__internal_70198cb9f75c9cc01cff4dd2723067ad18171a1538cde931661e2db0c1bec656->leave($__internal_70198cb9f75c9cc01cff4dd2723067ad18171a1538cde931661e2db0c1bec656_prof);

    }

    public function block_content_title($context, array $blocks = array())
    {
        $__internal_04b66c6f16faf8e0f313e7696d8d7b61cbb456b036ae05594399dd3e95c5ccb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04b66c6f16faf8e0f313e7696d8d7b61cbb456b036ae05594399dd3e95c5ccb6->enter($__internal_04b66c6f16faf8e0f313e7696d8d7b61cbb456b036ae05594399dd3e95c5ccb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_171b69d155964fdf4e1326c7aa1896992d912e9385e6885f7884fcc18c417b10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_171b69d155964fdf4e1326c7aa1896992d912e9385e6885f7884fcc18c417b10->enter($__internal_171b69d155964fdf4e1326c7aa1896992d912e9385e6885f7884fcc18c417b10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        
        $__internal_171b69d155964fdf4e1326c7aa1896992d912e9385e6885f7884fcc18c417b10->leave($__internal_171b69d155964fdf4e1326c7aa1896992d912e9385e6885f7884fcc18c417b10_prof);

        
        $__internal_04b66c6f16faf8e0f313e7696d8d7b61cbb456b036ae05594399dd3e95c5ccb6->leave($__internal_04b66c6f16faf8e0f313e7696d8d7b61cbb456b036ae05594399dd3e95c5ccb6_prof);

    }

    // line 141
    public function block_content_help($context, array $blocks = array())
    {
        $__internal_f15a99e8747a52d59731d6dd66909424c68d4d23d5808c777e09a15f91d1dfa3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f15a99e8747a52d59731d6dd66909424c68d4d23d5808c777e09a15f91d1dfa3->enter($__internal_f15a99e8747a52d59731d6dd66909424c68d4d23d5808c777e09a15f91d1dfa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_help"));

        $__internal_7372fcd1edb34163a077de8951ee584c8f08c22d869ccb34e64cc4889ff15526 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7372fcd1edb34163a077de8951ee584c8f08c22d869ccb34e64cc4889ff15526->enter($__internal_7372fcd1edb34163a077de8951ee584c8f08c22d869ccb34e64cc4889ff15526_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_help"));

        // line 142
        echo "                    ";
        if ((array_key_exists("_entity_config", $context) && (($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "action"), "method"), array(), "array", false, true), "help", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "action"), "method"), array(), "array", false, true), "help", array(), "array"), false)) : (false)))) {
            // line 143
            echo "                        <div class=\"box box-widget help-entity\">
                            <div class=\"box-body\">
                                ";
            // line 145
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "action"), "method"), array(), "array"), "help", array(), "array"));
            echo "
                            </div>
                        </div>
                    ";
        }
        // line 149
        echo "                ";
        
        $__internal_7372fcd1edb34163a077de8951ee584c8f08c22d869ccb34e64cc4889ff15526->leave($__internal_7372fcd1edb34163a077de8951ee584c8f08c22d869ccb34e64cc4889ff15526_prof);

        
        $__internal_f15a99e8747a52d59731d6dd66909424c68d4d23d5808c777e09a15f91d1dfa3->leave($__internal_f15a99e8747a52d59731d6dd66909424c68d4d23d5808c777e09a15f91d1dfa3_prof);

    }

    // line 153
    public function block_main($context, array $blocks = array())
    {
        $__internal_cecfb97a5c6813d7073f506fcb3958081842e5eeaf4b10af93b9ef0b946ca6ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cecfb97a5c6813d7073f506fcb3958081842e5eeaf4b10af93b9ef0b946ca6ed->enter($__internal_cecfb97a5c6813d7073f506fcb3958081842e5eeaf4b10af93b9ef0b946ca6ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_5610ee03c0127416d980f2d0dde5dc16ba0d77f4819590fb8450a152502f8ae4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5610ee03c0127416d980f2d0dde5dc16ba0d77f4819590fb8450a152502f8ae4->enter($__internal_5610ee03c0127416d980f2d0dde5dc16ba0d77f4819590fb8450a152502f8ae4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_5610ee03c0127416d980f2d0dde5dc16ba0d77f4819590fb8450a152502f8ae4->leave($__internal_5610ee03c0127416d980f2d0dde5dc16ba0d77f4819590fb8450a152502f8ae4_prof);

        
        $__internal_cecfb97a5c6813d7073f506fcb3958081842e5eeaf4b10af93b9ef0b946ca6ed->leave($__internal_cecfb97a5c6813d7073f506fcb3958081842e5eeaf4b10af93b9ef0b946ca6ed_prof);

    }

    // line 160
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_6741082ff9e9f72b113fe2bab9395e7046c0eba13868a59eb3a7126e2b625910 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6741082ff9e9f72b113fe2bab9395e7046c0eba13868a59eb3a7126e2b625910->enter($__internal_6741082ff9e9f72b113fe2bab9395e7046c0eba13868a59eb3a7126e2b625910_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_35d1809eb8a71bfa9e4e7b16d9a81f0326c55eb55bd101386fbdaa9e6ceaef20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35d1809eb8a71bfa9e4e7b16d9a81f0326c55eb55bd101386fbdaa9e6ceaef20->enter($__internal_35d1809eb8a71bfa9e4e7b16d9a81f0326c55eb55bd101386fbdaa9e6ceaef20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        
        $__internal_35d1809eb8a71bfa9e4e7b16d9a81f0326c55eb55bd101386fbdaa9e6ceaef20->leave($__internal_35d1809eb8a71bfa9e4e7b16d9a81f0326c55eb55bd101386fbdaa9e6ceaef20_prof);

        
        $__internal_6741082ff9e9f72b113fe2bab9395e7046c0eba13868a59eb3a7126e2b625910->leave($__internal_6741082ff9e9f72b113fe2bab9395e7046c0eba13868a59eb3a7126e2b625910_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  786 => 160,  769 => 153,  759 => 149,  752 => 145,  748 => 143,  745 => 142,  736 => 141,  707 => 139,  698 => 138,  685 => 134,  676 => 133,  665 => 154,  663 => 153,  658 => 150,  655 => 141,  653 => 138,  649 => 136,  646 => 133,  637 => 132,  626 => 125,  624 => 122,  622 => 121,  613 => 120,  602 => 127,  600 => 120,  597 => 119,  588 => 118,  573 => 102,  570 => 101,  561 => 100,  551 => 108,  546 => 105,  544 => 100,  535 => 94,  530 => 91,  525 => 89,  522 => 88,  520 => 87,  516 => 86,  513 => 85,  511 => 84,  505 => 82,  496 => 81,  484 => 109,  482 => 81,  478 => 79,  475 => 78,  466 => 77,  453 => 71,  444 => 70,  435 => 69,  423 => 112,  421 => 77,  416 => 74,  414 => 69,  407 => 65,  403 => 63,  394 => 62,  383 => 156,  381 => 132,  376 => 129,  374 => 118,  369 => 115,  367 => 62,  364 => 61,  355 => 60,  322 => 58,  311 => 165,  302 => 163,  298 => 162,  295 => 161,  293 => 160,  289 => 158,  287 => 60,  277 => 58,  268 => 57,  247 => 30,  238 => 29,  226 => 43,  223 => 42,  220 => 29,  211 => 28,  196 => 25,  193 => 24,  184 => 23,  171 => 15,  165 => 13,  156 => 12,  138 => 10,  127 => 167,  125 => 57,  118 => 53,  114 => 52,  110 => 50,  105 => 48,  100 => 47,  98 => 46,  95 => 45,  93 => 28,  90 => 27,  88 => 23,  85 => 22,  76 => 20,  72 => 19,  69 => 18,  67 => 12,  62 => 10,  51 => 2,  48 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"{{ app.request.locale|split('_')|first|default('en') }}\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"robots\" content=\"noindex, nofollow, noarchive, nosnippet, noodp, noimageindex, notranslate, nocache\" />
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <meta name=\"generator\" content=\"EasyAdmin\" />

        <title>{% block page_title %}{{ block('content_title')|striptags|raw }}{% endblock %}</title>

        {% block head_stylesheets %}
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/easyadmin/stylesheet/easyadmin-all.min.css') }}\">
            <style>
                {{ easyadmin_config('_internal.custom_css')|raw }}
            </style>
        {% endblock %}

        {% for css_asset in easyadmin_config('design.assets.css') %}
            <link rel=\"stylesheet\" href=\"{{ asset(css_asset) }}\">
        {% endfor %}

        {% block head_favicon %}
            {% set favicon = easyadmin_config('design.assets.favicon') %}
            <link rel=\"icon\" type=\"{{ favicon.mime_type }}\" href=\"{{ asset(favicon.path) }}\" />
        {% endblock %}

        {% block head_javascript %}
            {% block adminlte_options %}
                <script type=\"text/javascript\">
                    var AdminLTEOptions = {
                        animationSpeed: 'normal',
                        sidebarExpandOnHover: false,
                        enableBoxRefresh: false,
                        enableBSToppltip: false,
                        enableFastclick: false,
                        enableControlSidebar: false,
                        enableBoxWidget: false
                    };
                </script>
            {% endblock %}

            <script src=\"{{ asset('bundles/easyadmin/javascript/easyadmin-all.min.js') }}\"></script>
        {% endblock head_javascript %}

        {% if easyadmin_config('design.rtl') %}
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/easyadmin/stylesheet/bootstrap-rtl.min.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/easyadmin/stylesheet/adminlte-rtl.min.css') }}\">
        {% endif %}

        <!--[if lt IE 9]>
            <script src=\"{{ asset('bundles/easyadmin/stylesheet/html5shiv.min.css') }}\"></script>
            <script src=\"{{ asset('bundles/easyadmin/stylesheet/respond.min.css') }}\"></script>
        <![endif]-->
    </head>

    {% block body %}
    <body id=\"{% block body_id %}{% endblock %}\" class=\"easyadmin sidebar-mini {% block body_class %}{% endblock %} {{ app.request.cookies.has('_easyadmin_navigation_iscollapsed') ? 'sidebar-collapse' }}\">
        <div class=\"wrapper\">
        {% block wrapper %}
            <header class=\"main-header\">
            {% block header %}
                <nav class=\"navbar\" role=\"navigation\">
                    <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                        <span class=\"sr-only\">{{ 'toggle_navigation'|trans(domain = 'EasyAdminBundle') }}</span>
                    </a>

                    <div id=\"header-logo\">
                        {% block header_logo %}
                            <a class=\"logo {{ easyadmin_config('site_name')|length > 14 ? 'logo-long' }}\" title=\"{{ easyadmin_config('site_name')|striptags }}\" href=\"{{ path('easyadmin') }}\">
                                {{ easyadmin_config('site_name')|raw }}
                            </a>
                        {% endblock header_logo %}
                    </div>

                    <div class=\"navbar-custom-menu\">
                    {% block header_custom_menu %}
                        {% set _logout_path = easyadmin_logout_path() %}
                        <ul class=\"nav navbar-nav\">
                            <li class=\"dropdown user user-menu\">
                                {% block user_menu %}
                                    <span class=\"sr-only\">{{ 'user.logged_in_as'|trans(domain = 'EasyAdminBundle') }}</span>

                                    {% if app.user|default(false) == false %}
                                        <i class=\"hidden-xs fa fa-user-times\"></i>
                                        {{ 'user.anonymous'|trans(domain = 'EasyAdminBundle') }}
                                    {% elseif not _logout_path %}
                                        <i class=\"hidden-xs fa fa-user\"></i>
                                        {{ app.user.username|default('user.unnamed'|trans(domain = 'EasyAdminBundle')) }}
                                    {% else %}
                                        <div class=\"btn-group\">
                                            <button type=\"button\" class=\"btn\" data-toggle=\"dropdown\">
                                                <i class=\"hidden-xs fa fa-user\"></i>
                                                {{ app.user.username|default('user.unnamed'|trans(domain = 'EasyAdminBundle')) }}
                                            </button>
                                            <button type=\"button\" class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                                                <span class=\"caret\"></span>
                                            </button>
                                            <ul class=\"dropdown-menu\" role=\"menu\">
                                                {% block user_menu_dropdown %}
                                                <li>
                                                    <a href=\"{{ _logout_path }}\"><i class=\"fa fa-sign-out\"></i> {{ 'user.signout'|trans(domain = 'EasyAdminBundle') }}</a>
                                                </li>
                                                {% endblock user_menu_dropdown %}
                                            </ul>
                                        </div>
                                    {% endif %}
                                {% endblock user_menu %}
                            </li>
                        </ul>
                    {% endblock header_custom_menu %}
                    </div>
                </nav>
            {% endblock header %}
            </header>

            <aside class=\"main-sidebar\">
            {% block sidebar %}
                <section class=\"sidebar\">
                    {% block main_menu_wrapper %}
                        {{ include([
                            _entity_config is defined ? _entity_config.templates.menu,
                            easyadmin_config('design.templates.menu'),
                            '@EasyAdmin/default/menu.html.twig'
                        ]) }}
                    {% endblock main_menu_wrapper %}
                </section>
            {% endblock sidebar %}
            </aside>

            <div class=\"content-wrapper\">
            {% block content %}
                {% block flash_messages %}
                    {{ include(_entity_config is defined ? _entity_config.templates.flash_messages : '@EasyAdmin/default/flash_messages.html.twig') }}
                {% endblock flash_messages %}

                <section class=\"content-header\">
                {% block content_header %}
                    <h1 class=\"title\">{% block content_title %}{% endblock %}</h1>
                {% endblock content_header %}
                {% block content_help %}
                    {% if _entity_config is defined and _entity_config[app.request.query.get('action')]['help']|default(false) %}
                        <div class=\"box box-widget help-entity\">
                            <div class=\"box-body\">
                                {{ _entity_config[app.request.query.get('action')]['help']|trans|raw }}
                            </div>
                        </div>
                    {% endif %}
                {% endblock content_help %}
                </section>

                <section id=\"main\" class=\"content\">
                    {% block main %}{% endblock %}
                </section>
            {% endblock content %}
            </div>
        {% endblock wrapper %}
        </div>

        {% block body_javascript %}{% endblock body_javascript %}

        {% for js_asset in easyadmin_config('design.assets.js') %}
            <script src=\"{{ asset(js_asset) }}\"></script>
        {% endfor %}
    </body>
    {% endblock body %}
</html>
", "EasyAdminBundle:default:layout.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\javiereguiluz\\easyadmin-bundle\\Resources\\views\\default\\layout.html.twig");
    }
}
