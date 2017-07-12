<?php

/* SonataAdminBundle::standard_layout.html.twig */
class __TwigTemplate_4a21b66db5abfacc03ccd7af0db2a0d4d80355aad538aaf06f558969cace6f3a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'html_attributes' => array($this, 'block_html_attributes'),
            'meta_tags' => array($this, 'block_meta_tags'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'sonata_javascript_config' => array($this, 'block_sonata_javascript_config'),
            'sonata_javascript_pool' => array($this, 'block_sonata_javascript_pool'),
            'sonata_head_title' => array($this, 'block_sonata_head_title'),
            'body_attributes' => array($this, 'block_body_attributes'),
            'sonata_header' => array($this, 'block_sonata_header'),
            'sonata_header_noscript_warning' => array($this, 'block_sonata_header_noscript_warning'),
            'logo' => array($this, 'block_logo'),
            'sonata_nav' => array($this, 'block_sonata_nav'),
            'sonata_breadcrumb' => array($this, 'block_sonata_breadcrumb'),
            'sonata_top_nav_menu' => array($this, 'block_sonata_top_nav_menu'),
            'sonata_top_nav_menu_add_block' => array($this, 'block_sonata_top_nav_menu_add_block'),
            'sonata_top_nav_menu_user_block' => array($this, 'block_sonata_top_nav_menu_user_block'),
            'sonata_wrapper' => array($this, 'block_sonata_wrapper'),
            'sonata_left_side' => array($this, 'block_sonata_left_side'),
            'sonata_side_nav' => array($this, 'block_sonata_side_nav'),
            'sonata_sidebar_search' => array($this, 'block_sonata_sidebar_search'),
            'side_bar_before_nav' => array($this, 'block_side_bar_before_nav'),
            'side_bar_nav' => array($this, 'block_side_bar_nav'),
            'side_bar_after_nav' => array($this, 'block_side_bar_after_nav'),
            'side_bar_after_nav_content' => array($this, 'block_side_bar_after_nav_content'),
            'sonata_page_content' => array($this, 'block_sonata_page_content'),
            'sonata_page_content_header' => array($this, 'block_sonata_page_content_header'),
            'sonata_page_content_nav' => array($this, 'block_sonata_page_content_nav'),
            'tab_menu_navbar_header' => array($this, 'block_tab_menu_navbar_header'),
            'sonata_admin_content_actions_wrappers' => array($this, 'block_sonata_admin_content_actions_wrappers'),
            'sonata_admin_content' => array($this, 'block_sonata_admin_content'),
            'notice' => array($this, 'block_notice'),
            'bootlint' => array($this, 'block_bootlint'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e1ec91bce10ee36de2cda5004378eb57aa2b86a12777c22391d9805f04e5599e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1ec91bce10ee36de2cda5004378eb57aa2b86a12777c22391d9805f04e5599e->enter($__internal_e1ec91bce10ee36de2cda5004378eb57aa2b86a12777c22391d9805f04e5599e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::standard_layout.html.twig"));

        $__internal_6ecee47b61f95f4424a947dd7e81e8d87102d0768992695a2d1445e3dcdbd1e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ecee47b61f95f4424a947dd7e81e8d87102d0768992695a2d1445e3dcdbd1e4->enter($__internal_6ecee47b61f95f4424a947dd7e81e8d87102d0768992695a2d1445e3dcdbd1e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::standard_layout.html.twig"));

        // line 11
        echo "
";
        // line 12
        $context["_preview"] = ((        $this->hasBlock("preview", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("preview", $context, $blocks))) : (null));
        // line 13
        $context["_form"] = ((        $this->hasBlock("form", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("form", $context, $blocks))) : (null));
        // line 14
        $context["_show"] = ((        $this->hasBlock("show", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("show", $context, $blocks))) : (null));
        // line 15
        $context["_list_table"] = ((        $this->hasBlock("list_table", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("list_table", $context, $blocks))) : (null));
        // line 16
        $context["_list_filters"] = ((        $this->hasBlock("list_filters", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("list_filters", $context, $blocks))) : (null));
        // line 17
        $context["_tab_menu"] = ((        $this->hasBlock("tab_menu", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("tab_menu", $context, $blocks))) : (null));
        // line 18
        $context["_content"] = ((        $this->hasBlock("content", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("content", $context, $blocks))) : (null));
        // line 19
        $context["_title"] = ((        $this->hasBlock("title", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("title", $context, $blocks))) : (null));
        // line 20
        $context["_breadcrumb"] = ((        $this->hasBlock("breadcrumb", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("breadcrumb", $context, $blocks))) : (null));
        // line 21
        $context["_actions"] = ((        $this->hasBlock("actions", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("actions", $context, $blocks))) : (null));
        // line 22
        $context["_navbar_title"] = ((        $this->hasBlock("navbar_title", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("navbar_title", $context, $blocks))) : (null));
        // line 23
        $context["_list_filters_actions"] = ((        $this->hasBlock("list_filters_actions", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("list_filters_actions", $context, $blocks))) : (null));
        // line 24
        echo "
<!DOCTYPE html>
<html ";
        // line 26
        $this->displayBlock('html_attributes', $context, $blocks);
        echo ">
    <head>
        ";
        // line 28
        $this->displayBlock('meta_tags', $context, $blocks);
        // line 33
        echo "
        ";
        // line 34
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 39
        echo "
        ";
        // line 40
        $this->displayBlock('javascripts', $context, $blocks);
        // line 88
        echo "
        <title>
        ";
        // line 90
        $this->displayBlock('sonata_head_title', $context, $blocks);
        // line 116
        echo "        </title>
    </head>
    <body ";
        // line 118
        $this->displayBlock('body_attributes', $context, $blocks);
        echo ">

    <div class=\"wrapper\">

        ";
        // line 122
        $this->displayBlock('sonata_header', $context, $blocks);
        // line 221
        echo "
        ";
        // line 222
        $this->displayBlock('sonata_wrapper', $context, $blocks);
        // line 355
        echo "    </div>

    ";
        // line 357
        if ($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "use_bootlint"), "method")) {
            // line 358
            echo "        ";
            $this->displayBlock('bootlint', $context, $blocks);
            // line 364
            echo "    ";
        }
        // line 365
        echo "
    </body>
</html>
";
        
        $__internal_e1ec91bce10ee36de2cda5004378eb57aa2b86a12777c22391d9805f04e5599e->leave($__internal_e1ec91bce10ee36de2cda5004378eb57aa2b86a12777c22391d9805f04e5599e_prof);

        
        $__internal_6ecee47b61f95f4424a947dd7e81e8d87102d0768992695a2d1445e3dcdbd1e4->leave($__internal_6ecee47b61f95f4424a947dd7e81e8d87102d0768992695a2d1445e3dcdbd1e4_prof);

    }

    // line 26
    public function block_html_attributes($context, array $blocks = array())
    {
        $__internal_f88a3181852f4f1932adc00f23538d6f9eb68e4d680cc288f8b3153dc5645429 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f88a3181852f4f1932adc00f23538d6f9eb68e4d680cc288f8b3153dc5645429->enter($__internal_f88a3181852f4f1932adc00f23538d6f9eb68e4d680cc288f8b3153dc5645429_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "html_attributes"));

        $__internal_8d45b435e61dc4b044f8db7eaf74858b3665d21fa30474739b65cd90bac2e83e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d45b435e61dc4b044f8db7eaf74858b3665d21fa30474739b65cd90bac2e83e->enter($__internal_8d45b435e61dc4b044f8db7eaf74858b3665d21fa30474739b65cd90bac2e83e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "html_attributes"));

        echo "class=\"no-js\"";
        
        $__internal_8d45b435e61dc4b044f8db7eaf74858b3665d21fa30474739b65cd90bac2e83e->leave($__internal_8d45b435e61dc4b044f8db7eaf74858b3665d21fa30474739b65cd90bac2e83e_prof);

        
        $__internal_f88a3181852f4f1932adc00f23538d6f9eb68e4d680cc288f8b3153dc5645429->leave($__internal_f88a3181852f4f1932adc00f23538d6f9eb68e4d680cc288f8b3153dc5645429_prof);

    }

    // line 28
    public function block_meta_tags($context, array $blocks = array())
    {
        $__internal_b1549cef852d4f457fde48d800ad0e7209e596602d428bd28d8c283f7b795603 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1549cef852d4f457fde48d800ad0e7209e596602d428bd28d8c283f7b795603->enter($__internal_b1549cef852d4f457fde48d800ad0e7209e596602d428bd28d8c283f7b795603_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta_tags"));

        $__internal_715b6523cc1c3f3c9c26f522cdfcd6d43b353c69b23b9e3a3049af45a2b11f0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_715b6523cc1c3f3c9c26f522cdfcd6d43b353c69b23b9e3a3049af45a2b11f0e->enter($__internal_715b6523cc1c3f3c9c26f522cdfcd6d43b353c69b23b9e3a3049af45a2b11f0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta_tags"));

        // line 29
        echo "            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
            <meta charset=\"UTF-8\">
            <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        ";
        
        $__internal_715b6523cc1c3f3c9c26f522cdfcd6d43b353c69b23b9e3a3049af45a2b11f0e->leave($__internal_715b6523cc1c3f3c9c26f522cdfcd6d43b353c69b23b9e3a3049af45a2b11f0e_prof);

        
        $__internal_b1549cef852d4f457fde48d800ad0e7209e596602d428bd28d8c283f7b795603->leave($__internal_b1549cef852d4f457fde48d800ad0e7209e596602d428bd28d8c283f7b795603_prof);

    }

    // line 34
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f1f5532f4c6c16c67f4ab80eadc2a0136ab1902411814760e1b2486cbdf6a1a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1f5532f4c6c16c67f4ab80eadc2a0136ab1902411814760e1b2486cbdf6a1a7->enter($__internal_f1f5532f4c6c16c67f4ab80eadc2a0136ab1902411814760e1b2486cbdf6a1a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_45f59ee80ea92cce769c2141aa0a18160ab2b960d3705271614633194048f77b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45f59ee80ea92cce769c2141aa0a18160ab2b960d3705271614633194048f77b->enter($__internal_45f59ee80ea92cce769c2141aa0a18160ab2b960d3705271614633194048f77b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 35
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "stylesheets", 1 => array()), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["stylesheet"]) {
            // line 36
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($context["stylesheet"]), "html", null, true);
            echo "\">
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stylesheet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "        ";
        
        $__internal_45f59ee80ea92cce769c2141aa0a18160ab2b960d3705271614633194048f77b->leave($__internal_45f59ee80ea92cce769c2141aa0a18160ab2b960d3705271614633194048f77b_prof);

        
        $__internal_f1f5532f4c6c16c67f4ab80eadc2a0136ab1902411814760e1b2486cbdf6a1a7->leave($__internal_f1f5532f4c6c16c67f4ab80eadc2a0136ab1902411814760e1b2486cbdf6a1a7_prof);

    }

    // line 40
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_66c4e3c9f9e08d8c7ff2f24771afda64497a039896a5be6a3f1992d66a512547 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66c4e3c9f9e08d8c7ff2f24771afda64497a039896a5be6a3f1992d66a512547->enter($__internal_66c4e3c9f9e08d8c7ff2f24771afda64497a039896a5be6a3f1992d66a512547_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_a667b34fbe0ce69293f4db768f840020ccf714455d00746e295ffe91b069c16a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a667b34fbe0ce69293f4db768f840020ccf714455d00746e295ffe91b069c16a->enter($__internal_a667b34fbe0ce69293f4db768f840020ccf714455d00746e295ffe91b069c16a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 41
        echo "            ";
        $this->displayBlock('sonata_javascript_config', $context, $blocks);
        // line 61
        echo "
            ";
        // line 62
        $this->displayBlock('sonata_javascript_pool', $context, $blocks);
        // line 67
        echo "
            ";
        // line 68
        $context["locale"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array());
        // line 69
        echo "            ";
        // line 70
        echo "            ";
        if ((twig_slice($this->env, (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), 0, 2) != "en")) {
            // line 71
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/sonatacore/vendor/moment/locale/" . twig_replace_filter(twig_lower_filter($this->env,             // line 73
(isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale"))), array("_" => "-"))) . ".js")), "html", null, true);
            // line 75
            echo "\"></script>
            ";
        }
        // line 77
        echo "
            ";
        // line 79
        echo "            ";
        if ($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "use_select2"), "method")) {
            // line 80
            echo "                ";
            if (((isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")) == "pt")) {
                $context["locale"] = "pt_PT";
            }
            // line 81
            echo "
                ";
            // line 83
            echo "                ";
            if ((twig_slice($this->env, (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), 0, 2) != "en")) {
                // line 84
                echo "                    <script src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/sonatacore/vendor/select2/select2_locale_" . twig_replace_filter((isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), array("_" => "-"))) . ".js")), "html", null, true);
                echo "\"></script>
                ";
            }
            // line 86
            echo "            ";
        }
        // line 87
        echo "        ";
        
        $__internal_a667b34fbe0ce69293f4db768f840020ccf714455d00746e295ffe91b069c16a->leave($__internal_a667b34fbe0ce69293f4db768f840020ccf714455d00746e295ffe91b069c16a_prof);

        
        $__internal_66c4e3c9f9e08d8c7ff2f24771afda64497a039896a5be6a3f1992d66a512547->leave($__internal_66c4e3c9f9e08d8c7ff2f24771afda64497a039896a5be6a3f1992d66a512547_prof);

    }

    // line 41
    public function block_sonata_javascript_config($context, array $blocks = array())
    {
        $__internal_4f03c87f7b8efd9ecadba1ba1541a2412639c5a2b82adc39eb7cef720c03130a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f03c87f7b8efd9ecadba1ba1541a2412639c5a2b82adc39eb7cef720c03130a->enter($__internal_4f03c87f7b8efd9ecadba1ba1541a2412639c5a2b82adc39eb7cef720c03130a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_javascript_config"));

        $__internal_78a317dfd33c310505f76a842e44d73ea1302311efec87286c4f2869137e413a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78a317dfd33c310505f76a842e44d73ea1302311efec87286c4f2869137e413a->enter($__internal_78a317dfd33c310505f76a842e44d73ea1302311efec87286c4f2869137e413a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_javascript_config"));

        // line 42
        echo "                <script>
                    window.SONATA_CONFIG = {
                        CONFIRM_EXIT: ";
        // line 44
        if ($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "confirm_exit"), "method")) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                        USE_SELECT2: ";
        // line 45
        if ($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "use_select2"), "method")) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                        USE_ICHECK: ";
        // line 46
        if ($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "use_icheck"), "method")) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                        USE_STICKYFORMS: ";
        // line 47
        if ($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "use_stickyforms"), "method")) {
            echo "true";
        } else {
            echo "false";
        }
        // line 48
        echo "                    };
                    window.SONATA_TRANSLATIONS = {
                        CONFIRM_EXIT: '";
        // line 50
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("confirm_exit", array(), "SonataAdminBundle"), "js"), "html", null, true);
        echo "'
                    };

                    // http://getbootstrap.com/getting-started/#support-ie10-width
                    if (navigator.userAgent.match(/IEMobile\\/10\\.0/)) {
                        var msViewportStyle = document.createElement('style');
                        msViewportStyle.appendChild(document.createTextNode('@-ms-viewport{width:auto!important}'));
                        document.querySelector('head').appendChild(msViewportStyle);
                    }
                </script>
            ";
        
        $__internal_78a317dfd33c310505f76a842e44d73ea1302311efec87286c4f2869137e413a->leave($__internal_78a317dfd33c310505f76a842e44d73ea1302311efec87286c4f2869137e413a_prof);

        
        $__internal_4f03c87f7b8efd9ecadba1ba1541a2412639c5a2b82adc39eb7cef720c03130a->leave($__internal_4f03c87f7b8efd9ecadba1ba1541a2412639c5a2b82adc39eb7cef720c03130a_prof);

    }

    // line 62
    public function block_sonata_javascript_pool($context, array $blocks = array())
    {
        $__internal_b10af2ae5b667d3517d062e67ef1c23e6501bacc25ddc17447c06e3960419a22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b10af2ae5b667d3517d062e67ef1c23e6501bacc25ddc17447c06e3960419a22->enter($__internal_b10af2ae5b667d3517d062e67ef1c23e6501bacc25ddc17447c06e3960419a22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_javascript_pool"));

        $__internal_c89fc06a7126e676d5f439fd77c3b941425edd1b2c1d37e74b40fa7e38db4500 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c89fc06a7126e676d5f439fd77c3b941425edd1b2c1d37e74b40fa7e38db4500->enter($__internal_c89fc06a7126e676d5f439fd77c3b941425edd1b2c1d37e74b40fa7e38db4500_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_javascript_pool"));

        // line 63
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "javascripts", 1 => array()), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["javascript"]) {
            // line 64
            echo "                    <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($context["javascript"]), "html", null, true);
            echo "\"></script>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['javascript'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "            ";
        
        $__internal_c89fc06a7126e676d5f439fd77c3b941425edd1b2c1d37e74b40fa7e38db4500->leave($__internal_c89fc06a7126e676d5f439fd77c3b941425edd1b2c1d37e74b40fa7e38db4500_prof);

        
        $__internal_b10af2ae5b667d3517d062e67ef1c23e6501bacc25ddc17447c06e3960419a22->leave($__internal_b10af2ae5b667d3517d062e67ef1c23e6501bacc25ddc17447c06e3960419a22_prof);

    }

    // line 90
    public function block_sonata_head_title($context, array $blocks = array())
    {
        $__internal_9a7833f2eea61e75b6f9e5a4c66e9fc0ffc59c46fbdff47a5289b95a1273ad2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a7833f2eea61e75b6f9e5a4c66e9fc0ffc59c46fbdff47a5289b95a1273ad2e->enter($__internal_9a7833f2eea61e75b6f9e5a4c66e9fc0ffc59c46fbdff47a5289b95a1273ad2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_head_title"));

        $__internal_6200c9b7ea321850623e39e9713629e5f0b5388246519a7c5e17a88ecf96a5f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6200c9b7ea321850623e39e9713629e5f0b5388246519a7c5e17a88ecf96a5f1->enter($__internal_6200c9b7ea321850623e39e9713629e5f0b5388246519a7c5e17a88ecf96a5f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_head_title"));

        // line 91
        echo "            ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Admin", array(), "SonataAdminBundle"), "html", null, true);
        echo "

            ";
        // line 93
        if ( !twig_test_empty((isset($context["_title"]) ? $context["_title"] : $this->getContext($context, "_title")))) {
            // line 94
            echo "                ";
            echo (isset($context["_title"]) ? $context["_title"] : $this->getContext($context, "_title"));
            echo "
            ";
        } else {
            // line 96
            echo "                ";
            if (array_key_exists("action", $context)) {
                // line 97
                echo "                    -
                    ";
                // line 98
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["breadcrumbs_builder"]) ? $context["breadcrumbs_builder"] : $this->getContext($context, "breadcrumbs_builder")), "breadcrumbs", array(0 => (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), 1 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                    // line 99
                    echo "                        ";
                    if ( !$this->getAttribute($context["loop"], "first", array())) {
                        // line 100
                        echo "                            ";
                        if (($this->getAttribute($context["loop"], "index", array()) != 2)) {
                            // line 101
                            echo "                                &gt;
                            ";
                        }
                        // line 104
                        $context["translation_domain"] = $this->getAttribute($context["menu"], "extra", array(0 => "translation_domain", 1 => "messages"), "method");
                        // line 105
                        $context["label"] = $this->getAttribute($context["menu"], "label", array());
                        // line 106
                        if ( !((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) {
                            // line 107
                            $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), $this->getAttribute($context["menu"], "extra", array(0 => "translation_params", 1 => array()), "method"), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")));
                        }
                        // line 110
                        echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), "html", null, true);
                        echo "
                        ";
                    }
                    // line 112
                    echo "                    ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 113
                echo "                ";
            }
            // line 114
            echo "            ";
        }
        // line 115
        echo "        ";
        
        $__internal_6200c9b7ea321850623e39e9713629e5f0b5388246519a7c5e17a88ecf96a5f1->leave($__internal_6200c9b7ea321850623e39e9713629e5f0b5388246519a7c5e17a88ecf96a5f1_prof);

        
        $__internal_9a7833f2eea61e75b6f9e5a4c66e9fc0ffc59c46fbdff47a5289b95a1273ad2e->leave($__internal_9a7833f2eea61e75b6f9e5a4c66e9fc0ffc59c46fbdff47a5289b95a1273ad2e_prof);

    }

    // line 118
    public function block_body_attributes($context, array $blocks = array())
    {
        $__internal_18c6cf458c8d216d05e4b47bc12ee3ac55de39a1a251cd11c2411d0163f61b4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18c6cf458c8d216d05e4b47bc12ee3ac55de39a1a251cd11c2411d0163f61b4e->enter($__internal_18c6cf458c8d216d05e4b47bc12ee3ac55de39a1a251cd11c2411d0163f61b4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_attributes"));

        $__internal_90b57961b539623dac39f502da8e2b0dcfda9d896ee9d828c64490f89b37cd76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90b57961b539623dac39f502da8e2b0dcfda9d896ee9d828c64490f89b37cd76->enter($__internal_90b57961b539623dac39f502da8e2b0dcfda9d896ee9d828c64490f89b37cd76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_attributes"));

        echo "class=\"sonata-bc skin-black fixed\"";
        
        $__internal_90b57961b539623dac39f502da8e2b0dcfda9d896ee9d828c64490f89b37cd76->leave($__internal_90b57961b539623dac39f502da8e2b0dcfda9d896ee9d828c64490f89b37cd76_prof);

        
        $__internal_18c6cf458c8d216d05e4b47bc12ee3ac55de39a1a251cd11c2411d0163f61b4e->leave($__internal_18c6cf458c8d216d05e4b47bc12ee3ac55de39a1a251cd11c2411d0163f61b4e_prof);

    }

    // line 122
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_324e4d2c8f2f5a18d5d67f1a7a09c31ab2b48d0f8c8c7efde19ffdf48bd150bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_324e4d2c8f2f5a18d5d67f1a7a09c31ab2b48d0f8c8c7efde19ffdf48bd150bb->enter($__internal_324e4d2c8f2f5a18d5d67f1a7a09c31ab2b48d0f8c8c7efde19ffdf48bd150bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        $__internal_d429b99678820857555133c2e40f289f627d3d7c5e56f294066e5cd9c9ac1aba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d429b99678820857555133c2e40f289f627d3d7c5e56f294066e5cd9c9ac1aba->enter($__internal_d429b99678820857555133c2e40f289f627d3d7c5e56f294066e5cd9c9ac1aba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        // line 123
        echo "            <header class=\"main-header\">
                ";
        // line 124
        $this->displayBlock('sonata_header_noscript_warning', $context, $blocks);
        // line 131
        echo "                ";
        $this->displayBlock('logo', $context, $blocks);
        // line 143
        echo "                ";
        $this->displayBlock('sonata_nav', $context, $blocks);
        // line 219
        echo "            </header>
        ";
        
        $__internal_d429b99678820857555133c2e40f289f627d3d7c5e56f294066e5cd9c9ac1aba->leave($__internal_d429b99678820857555133c2e40f289f627d3d7c5e56f294066e5cd9c9ac1aba_prof);

        
        $__internal_324e4d2c8f2f5a18d5d67f1a7a09c31ab2b48d0f8c8c7efde19ffdf48bd150bb->leave($__internal_324e4d2c8f2f5a18d5d67f1a7a09c31ab2b48d0f8c8c7efde19ffdf48bd150bb_prof);

    }

    // line 124
    public function block_sonata_header_noscript_warning($context, array $blocks = array())
    {
        $__internal_f6b99139431685214bf06a8b27bb8c57edfe09e5c653920c468c5adde6d1f19d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6b99139431685214bf06a8b27bb8c57edfe09e5c653920c468c5adde6d1f19d->enter($__internal_f6b99139431685214bf06a8b27bb8c57edfe09e5c653920c468c5adde6d1f19d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header_noscript_warning"));

        $__internal_4d7e2667a807f3113e6037a4737f3c6a3bfe9e4596c9e13531bf99fe120def97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d7e2667a807f3113e6037a4737f3c6a3bfe9e4596c9e13531bf99fe120def97->enter($__internal_4d7e2667a807f3113e6037a4737f3c6a3bfe9e4596c9e13531bf99fe120def97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header_noscript_warning"));

        // line 125
        echo "                    <noscript>
                        <div class=\"noscript-warning\">
                            ";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("noscript_warning", array(), "SonataAdminBundle"), "html", null, true);
        echo "
                        </div>
                    </noscript>
                ";
        
        $__internal_4d7e2667a807f3113e6037a4737f3c6a3bfe9e4596c9e13531bf99fe120def97->leave($__internal_4d7e2667a807f3113e6037a4737f3c6a3bfe9e4596c9e13531bf99fe120def97_prof);

        
        $__internal_f6b99139431685214bf06a8b27bb8c57edfe09e5c653920c468c5adde6d1f19d->leave($__internal_f6b99139431685214bf06a8b27bb8c57edfe09e5c653920c468c5adde6d1f19d_prof);

    }

    // line 131
    public function block_logo($context, array $blocks = array())
    {
        $__internal_627ab1eee05699a9b0507219930519085b7817ec122e664649d0416a809be921 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_627ab1eee05699a9b0507219930519085b7817ec122e664649d0416a809be921->enter($__internal_627ab1eee05699a9b0507219930519085b7817ec122e664649d0416a809be921_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        $__internal_9f957de50386e75ca286c6e82ce8ef75e198192256e59da369896406ac03ac52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f957de50386e75ca286c6e82ce8ef75e198192256e59da369896406ac03ac52->enter($__internal_9f957de50386e75ca286c6e82ce8ef75e198192256e59da369896406ac03ac52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        // line 132
        echo "                    ";
        ob_start();
        // line 133
        echo "                        <a class=\"logo\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_admin_dashboard");
        echo "\">
                            ";
        // line 134
        if ((("single_image" == $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")) || ("both" == $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")))) {
            // line 135
            echo "                                <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "titlelogo", array())), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "title", array()), "html", null, true);
            echo "\">
                            ";
        }
        // line 137
        echo "                            ";
        if ((("single_text" == $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")) || ("both" == $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")))) {
            // line 138
            echo "                                <span>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "title", array()), "html", null, true);
            echo "</span>
                            ";
        }
        // line 140
        echo "                        </a>
                    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 142
        echo "                ";
        
        $__internal_9f957de50386e75ca286c6e82ce8ef75e198192256e59da369896406ac03ac52->leave($__internal_9f957de50386e75ca286c6e82ce8ef75e198192256e59da369896406ac03ac52_prof);

        
        $__internal_627ab1eee05699a9b0507219930519085b7817ec122e664649d0416a809be921->leave($__internal_627ab1eee05699a9b0507219930519085b7817ec122e664649d0416a809be921_prof);

    }

    // line 143
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_0617f30a2ee8c49141e98637b13dfb532d8c066a5ed7ea8ddc12e3ad12de9324 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0617f30a2ee8c49141e98637b13dfb532d8c066a5ed7ea8ddc12e3ad12de9324->enter($__internal_0617f30a2ee8c49141e98637b13dfb532d8c066a5ed7ea8ddc12e3ad12de9324_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        $__internal_b54a333317d42d61bdefdc7cc8f40035a1b8ff1eebb43703ce21ad4d2262a50a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b54a333317d42d61bdefdc7cc8f40035a1b8ff1eebb43703ce21ad4d2262a50a->enter($__internal_b54a333317d42d61bdefdc7cc8f40035a1b8ff1eebb43703ce21ad4d2262a50a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        // line 144
        echo "                    <nav class=\"navbar navbar-static-top\" role=\"navigation\">
                        <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                            <span class=\"sr-only\">Toggle navigation</span>
                        </a>

                        <div class=\"navbar-left\">
                            ";
        // line 150
        $this->displayBlock('sonata_breadcrumb', $context, $blocks);
        // line 189
        echo "                        </div>

                        ";
        // line 191
        $this->displayBlock('sonata_top_nav_menu', $context, $blocks);
        // line 217
        echo "                    </nav>
                ";
        
        $__internal_b54a333317d42d61bdefdc7cc8f40035a1b8ff1eebb43703ce21ad4d2262a50a->leave($__internal_b54a333317d42d61bdefdc7cc8f40035a1b8ff1eebb43703ce21ad4d2262a50a_prof);

        
        $__internal_0617f30a2ee8c49141e98637b13dfb532d8c066a5ed7ea8ddc12e3ad12de9324->leave($__internal_0617f30a2ee8c49141e98637b13dfb532d8c066a5ed7ea8ddc12e3ad12de9324_prof);

    }

    // line 150
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_7879284918dfd8a8d8a0efc424396b405f315a38ff56c194a9bb9a1a90af8fcc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7879284918dfd8a8d8a0efc424396b405f315a38ff56c194a9bb9a1a90af8fcc->enter($__internal_7879284918dfd8a8d8a0efc424396b405f315a38ff56c194a9bb9a1a90af8fcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        $__internal_5cd6a6efa177d142f847363847f026c4e2780f3f9eaa5603c4dd491ea3c15a3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cd6a6efa177d142f847363847f026c4e2780f3f9eaa5603c4dd491ea3c15a3e->enter($__internal_5cd6a6efa177d142f847363847f026c4e2780f3f9eaa5603c4dd491ea3c15a3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        // line 151
        echo "                                <div class=\"hidden-xs\">
                                    ";
        // line 152
        if (( !twig_test_empty((isset($context["_breadcrumb"]) ? $context["_breadcrumb"] : $this->getContext($context, "_breadcrumb"))) || array_key_exists("action", $context))) {
            // line 153
            echo "                                        <ol class=\"nav navbar-top-links breadcrumb\">
                                            ";
            // line 154
            if (twig_test_empty((isset($context["_breadcrumb"]) ? $context["_breadcrumb"] : $this->getContext($context, "_breadcrumb")))) {
                // line 155
                echo "                                                ";
                if (array_key_exists("action", $context)) {
                    // line 156
                    echo "                                                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["breadcrumbs_builder"]) ? $context["breadcrumbs_builder"] : $this->getContext($context, "breadcrumbs_builder")), "breadcrumbs", array(0 => (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), 1 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"));
                    $context['loop'] = array(
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    );
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                        // line 157
                        $context["translation_domain"] = $this->getAttribute($context["menu"], "extra", array(0 => "translation_domain", 1 => "messages"), "method");
                        // line 158
                        $context["label"] = $this->getAttribute($context["menu"], "label", array());
                        // line 159
                        if ( !((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) {
                            // line 160
                            $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), $this->getAttribute($context["menu"], "extra", array(0 => "translation_params", 1 => array()), "method"), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")));
                        }
                        // line 163
                        if ( !$this->getAttribute($context["loop"], "last", array())) {
                            // line 164
                            echo "                                                            <li>
                                                                ";
                            // line 165
                            if ( !twig_test_empty($this->getAttribute($context["menu"], "uri", array()))) {
                                // line 166
                                echo "                                                                    <a href=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "uri", array()), "html", null, true);
                                echo "\">
                                                                        ";
                                // line 167
                                if ($this->getAttribute($context["menu"], "extra", array(0 => "safe_label", 1 => true), "method")) {
                                    // line 168
                                    echo (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"));
                                } else {
                                    // line 170
                                    echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), "html", null, true);
                                }
                                // line 172
                                echo "                                                                    </a>
                                                                ";
                            } else {
                                // line 174
                                echo "                                                                    <span>";
                                echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), "html", null, true);
                                echo "</span>
                                                                ";
                            }
                            // line 176
                            echo "                                                            </li>
                                                        ";
                        } else {
                            // line 178
                            echo "                                                            <li class=\"active\"><span>";
                            echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), "html", null, true);
                            echo "</span></li>
                                                        ";
                        }
                        // line 180
                        echo "                                                    ";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 181
                    echo "                                                ";
                }
                // line 182
                echo "                                            ";
            } else {
                // line 183
                echo "                                                ";
                echo (isset($context["_breadcrumb"]) ? $context["_breadcrumb"] : $this->getContext($context, "_breadcrumb"));
                echo "
                                            ";
            }
            // line 185
            echo "                                        </ol>
                                    ";
        }
        // line 187
        echo "                                </div>
                            ";
        
        $__internal_5cd6a6efa177d142f847363847f026c4e2780f3f9eaa5603c4dd491ea3c15a3e->leave($__internal_5cd6a6efa177d142f847363847f026c4e2780f3f9eaa5603c4dd491ea3c15a3e_prof);

        
        $__internal_7879284918dfd8a8d8a0efc424396b405f315a38ff56c194a9bb9a1a90af8fcc->leave($__internal_7879284918dfd8a8d8a0efc424396b405f315a38ff56c194a9bb9a1a90af8fcc_prof);

    }

    // line 191
    public function block_sonata_top_nav_menu($context, array $blocks = array())
    {
        $__internal_92074f760dbf4beb92ff1cce187740e7f9f93dbe24557acc17a52beafae1054f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92074f760dbf4beb92ff1cce187740e7f9f93dbe24557acc17a52beafae1054f->enter($__internal_92074f760dbf4beb92ff1cce187740e7f9f93dbe24557acc17a52beafae1054f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu"));

        $__internal_ac82a28576f5100cb71a1e84f984195a9fa0a220ca051cc970d393928e20e263 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac82a28576f5100cb71a1e84f984195a9fa0a220ca051cc970d393928e20e263->enter($__internal_ac82a28576f5100cb71a1e84f984195a9fa0a220ca051cc970d393928e20e263_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu"));

        // line 192
        echo "                            ";
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SONATA_ADMIN"))) {
            // line 193
            echo "                                <div class=\"navbar-custom-menu\">
                                    <ul class=\"nav navbar-nav\">
                                        ";
            // line 195
            $this->displayBlock('sonata_top_nav_menu_add_block', $context, $blocks);
            // line 203
            echo "                                        ";
            $this->displayBlock('sonata_top_nav_menu_user_block', $context, $blocks);
            // line 213
            echo "                                    </ul>
                                </div>
                            ";
        }
        // line 216
        echo "                        ";
        
        $__internal_ac82a28576f5100cb71a1e84f984195a9fa0a220ca051cc970d393928e20e263->leave($__internal_ac82a28576f5100cb71a1e84f984195a9fa0a220ca051cc970d393928e20e263_prof);

        
        $__internal_92074f760dbf4beb92ff1cce187740e7f9f93dbe24557acc17a52beafae1054f->leave($__internal_92074f760dbf4beb92ff1cce187740e7f9f93dbe24557acc17a52beafae1054f_prof);

    }

    // line 195
    public function block_sonata_top_nav_menu_add_block($context, array $blocks = array())
    {
        $__internal_eabb2cb3a0e5e02f2988a7089533ef126a4597cd8110a62a753a8c5d23d5408d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eabb2cb3a0e5e02f2988a7089533ef126a4597cd8110a62a753a8c5d23d5408d->enter($__internal_eabb2cb3a0e5e02f2988a7089533ef126a4597cd8110a62a753a8c5d23d5408d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu_add_block"));

        $__internal_780ccd347e510951ac45f333893a3df5b634996fafce6bb9ce81fd2e685888a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_780ccd347e510951ac45f333893a3df5b634996fafce6bb9ce81fd2e685888a3->enter($__internal_780ccd347e510951ac45f333893a3df5b634996fafce6bb9ce81fd2e685888a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu_add_block"));

        // line 196
        echo "                                            <li class=\"dropdown\">
                                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                    <i class=\"fa fa-plus-square fa-fw\" aria-hidden=\"true\"></i> <i class=\"fa fa-caret-down\" aria-hidden=\"true\"></i>
                                                </a>
                                                ";
        // line 200
        $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "add_block"), "method"), "SonataAdminBundle::standard_layout.html.twig", 200)->display($context);
        // line 201
        echo "                                            </li>
                                        ";
        
        $__internal_780ccd347e510951ac45f333893a3df5b634996fafce6bb9ce81fd2e685888a3->leave($__internal_780ccd347e510951ac45f333893a3df5b634996fafce6bb9ce81fd2e685888a3_prof);

        
        $__internal_eabb2cb3a0e5e02f2988a7089533ef126a4597cd8110a62a753a8c5d23d5408d->leave($__internal_eabb2cb3a0e5e02f2988a7089533ef126a4597cd8110a62a753a8c5d23d5408d_prof);

    }

    // line 203
    public function block_sonata_top_nav_menu_user_block($context, array $blocks = array())
    {
        $__internal_9421280b357949d252cb99b77b9bf558cac30b3279db8a88f4c49e521b1b0ec7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9421280b357949d252cb99b77b9bf558cac30b3279db8a88f4c49e521b1b0ec7->enter($__internal_9421280b357949d252cb99b77b9bf558cac30b3279db8a88f4c49e521b1b0ec7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu_user_block"));

        $__internal_82d51df889820bc69cc535fefa00b12323b7c5ec2368dfd468cdb72a3cbb818a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82d51df889820bc69cc535fefa00b12323b7c5ec2368dfd468cdb72a3cbb818a->enter($__internal_82d51df889820bc69cc535fefa00b12323b7c5ec2368dfd468cdb72a3cbb818a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu_user_block"));

        // line 204
        echo "                                            <li class=\"dropdown user-menu\">
                                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                    <i class=\"fa fa-user fa-fw\" aria-hidden=\"true\"></i> <i class=\"fa fa-caret-down\" aria-hidden=\"true\"></i>
                                                </a>
                                                <ul class=\"dropdown-menu dropdown-user\">
                                                    ";
        // line 209
        $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "user_block"), "method"), "SonataAdminBundle::standard_layout.html.twig", 209)->display($context);
        // line 210
        echo "                                                </ul>
                                            </li>
                                        ";
        
        $__internal_82d51df889820bc69cc535fefa00b12323b7c5ec2368dfd468cdb72a3cbb818a->leave($__internal_82d51df889820bc69cc535fefa00b12323b7c5ec2368dfd468cdb72a3cbb818a_prof);

        
        $__internal_9421280b357949d252cb99b77b9bf558cac30b3279db8a88f4c49e521b1b0ec7->leave($__internal_9421280b357949d252cb99b77b9bf558cac30b3279db8a88f4c49e521b1b0ec7_prof);

    }

    // line 222
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_e31cc68c413acb32285eda86e6af3af2b09f8558e9ab33828935f7443cddcd74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e31cc68c413acb32285eda86e6af3af2b09f8558e9ab33828935f7443cddcd74->enter($__internal_e31cc68c413acb32285eda86e6af3af2b09f8558e9ab33828935f7443cddcd74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        $__internal_d048c8378cb166bfb7f2ed5073d5974e082ff4a6b40d53226a98d3089837fc54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d048c8378cb166bfb7f2ed5073d5974e082ff4a6b40d53226a98d3089837fc54->enter($__internal_d048c8378cb166bfb7f2ed5073d5974e082ff4a6b40d53226a98d3089837fc54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 223
        echo "            ";
        $this->displayBlock('sonata_left_side', $context, $blocks);
        // line 255
        echo "
            <div class=\"content-wrapper\">
                ";
        // line 257
        $this->displayBlock('sonata_page_content', $context, $blocks);
        // line 353
        echo "            </div>
        ";
        
        $__internal_d048c8378cb166bfb7f2ed5073d5974e082ff4a6b40d53226a98d3089837fc54->leave($__internal_d048c8378cb166bfb7f2ed5073d5974e082ff4a6b40d53226a98d3089837fc54_prof);

        
        $__internal_e31cc68c413acb32285eda86e6af3af2b09f8558e9ab33828935f7443cddcd74->leave($__internal_e31cc68c413acb32285eda86e6af3af2b09f8558e9ab33828935f7443cddcd74_prof);

    }

    // line 223
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_3c5b88944c9e9621969cb551c7afed0614d8e0077b797b04b85cc354241468ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c5b88944c9e9621969cb551c7afed0614d8e0077b797b04b85cc354241468ec->enter($__internal_3c5b88944c9e9621969cb551c7afed0614d8e0077b797b04b85cc354241468ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        $__internal_a05d699b7a89a59a0b7e652abd2add9245f6382edf5e059b6d19a3febecaa7b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a05d699b7a89a59a0b7e652abd2add9245f6382edf5e059b6d19a3febecaa7b5->enter($__internal_a05d699b7a89a59a0b7e652abd2add9245f6382edf5e059b6d19a3febecaa7b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        // line 224
        echo "                <aside class=\"main-sidebar\">
                    <section class=\"sidebar\">
                        ";
        // line 226
        $this->displayBlock('sonata_side_nav', $context, $blocks);
        // line 252
        echo "                    </section>
                </aside>
            ";
        
        $__internal_a05d699b7a89a59a0b7e652abd2add9245f6382edf5e059b6d19a3febecaa7b5->leave($__internal_a05d699b7a89a59a0b7e652abd2add9245f6382edf5e059b6d19a3febecaa7b5_prof);

        
        $__internal_3c5b88944c9e9621969cb551c7afed0614d8e0077b797b04b85cc354241468ec->leave($__internal_3c5b88944c9e9621969cb551c7afed0614d8e0077b797b04b85cc354241468ec_prof);

    }

    // line 226
    public function block_sonata_side_nav($context, array $blocks = array())
    {
        $__internal_8a6d6a5c29fb55ed9b89db1a72c721d2795f589e014e3d9c5e96d4676d973087 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a6d6a5c29fb55ed9b89db1a72c721d2795f589e014e3d9c5e96d4676d973087->enter($__internal_8a6d6a5c29fb55ed9b89db1a72c721d2795f589e014e3d9c5e96d4676d973087_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_side_nav"));

        $__internal_9d740bcf210f072078e8119f6dc6017e68f4d511f53137267a20fbc4ce804728 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d740bcf210f072078e8119f6dc6017e68f4d511f53137267a20fbc4ce804728->enter($__internal_9d740bcf210f072078e8119f6dc6017e68f4d511f53137267a20fbc4ce804728_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_side_nav"));

        // line 227
        echo "                            ";
        $this->displayBlock('sonata_sidebar_search', $context, $blocks);
        // line 239
        echo "
                            ";
        // line 240
        $this->displayBlock('side_bar_before_nav', $context, $blocks);
        // line 241
        echo "                            ";
        $this->displayBlock('side_bar_nav', $context, $blocks);
        // line 244
        echo "                            ";
        $this->displayBlock('side_bar_after_nav', $context, $blocks);
        // line 251
        echo "                        ";
        
        $__internal_9d740bcf210f072078e8119f6dc6017e68f4d511f53137267a20fbc4ce804728->leave($__internal_9d740bcf210f072078e8119f6dc6017e68f4d511f53137267a20fbc4ce804728_prof);

        
        $__internal_8a6d6a5c29fb55ed9b89db1a72c721d2795f589e014e3d9c5e96d4676d973087->leave($__internal_8a6d6a5c29fb55ed9b89db1a72c721d2795f589e014e3d9c5e96d4676d973087_prof);

    }

    // line 227
    public function block_sonata_sidebar_search($context, array $blocks = array())
    {
        $__internal_326b34de2d694d0a6182f79e6588b590f9696fb5d7a894dfa0493de2369575ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_326b34de2d694d0a6182f79e6588b590f9696fb5d7a894dfa0493de2369575ec->enter($__internal_326b34de2d694d0a6182f79e6588b590f9696fb5d7a894dfa0493de2369575ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_sidebar_search"));

        $__internal_39232a987923a5410e339e0b2ea8c9d1da909e42a5bea8ab3b6e8d32268dfdc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39232a987923a5410e339e0b2ea8c9d1da909e42a5bea8ab3b6e8d32268dfdc9->enter($__internal_39232a987923a5410e339e0b2ea8c9d1da909e42a5bea8ab3b6e8d32268dfdc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_sidebar_search"));

        // line 228
        echo "                                <form action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_admin_search");
        echo "\" method=\"GET\" class=\"sidebar-form\" role=\"search\">
                                    <div class=\"input-group custom-search-form\">
                                        <input type=\"text\" name=\"q\" value=\"";
        // line 230
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "q"), "method"), "html", null, true);
        echo "\" class=\"form-control\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("search_placeholder", array(), "SonataAdminBundle"), "html", null, true);
        echo "\">
                                        <span class=\"input-group-btn\">
                                            <button class=\"btn btn-flat\" type=\"submit\">
                                                <i class=\"fa fa-search\" aria-hidden=\"true\"></i>
                                            </button>
                                        </span>
                                    </div>
                                </form>
                            ";
        
        $__internal_39232a987923a5410e339e0b2ea8c9d1da909e42a5bea8ab3b6e8d32268dfdc9->leave($__internal_39232a987923a5410e339e0b2ea8c9d1da909e42a5bea8ab3b6e8d32268dfdc9_prof);

        
        $__internal_326b34de2d694d0a6182f79e6588b590f9696fb5d7a894dfa0493de2369575ec->leave($__internal_326b34de2d694d0a6182f79e6588b590f9696fb5d7a894dfa0493de2369575ec_prof);

    }

    // line 240
    public function block_side_bar_before_nav($context, array $blocks = array())
    {
        $__internal_a4c1f46137453a752b637e538154810075bcebe88b5de651f64a11b6f60401ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4c1f46137453a752b637e538154810075bcebe88b5de651f64a11b6f60401ea->enter($__internal_a4c1f46137453a752b637e538154810075bcebe88b5de651f64a11b6f60401ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_before_nav"));

        $__internal_6e5fe82312a474687d37e4831c99bb8f2a7020f740ad22bbb70183c32974bc70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e5fe82312a474687d37e4831c99bb8f2a7020f740ad22bbb70183c32974bc70->enter($__internal_6e5fe82312a474687d37e4831c99bb8f2a7020f740ad22bbb70183c32974bc70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_before_nav"));

        echo " ";
        
        $__internal_6e5fe82312a474687d37e4831c99bb8f2a7020f740ad22bbb70183c32974bc70->leave($__internal_6e5fe82312a474687d37e4831c99bb8f2a7020f740ad22bbb70183c32974bc70_prof);

        
        $__internal_a4c1f46137453a752b637e538154810075bcebe88b5de651f64a11b6f60401ea->leave($__internal_a4c1f46137453a752b637e538154810075bcebe88b5de651f64a11b6f60401ea_prof);

    }

    // line 241
    public function block_side_bar_nav($context, array $blocks = array())
    {
        $__internal_64d7ed5e9204d09b2203cdefdccbdc3f3a758a5c68d851f9e0e232746e61040b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64d7ed5e9204d09b2203cdefdccbdc3f3a758a5c68d851f9e0e232746e61040b->enter($__internal_64d7ed5e9204d09b2203cdefdccbdc3f3a758a5c68d851f9e0e232746e61040b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_nav"));

        $__internal_b658bd868dc5c1f424f4fc5cccc9fec2fcfa01dd950a853d3f76c38b72faf29c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b658bd868dc5c1f424f4fc5cccc9fec2fcfa01dd950a853d3f76c38b72faf29c->enter($__internal_b658bd868dc5c1f424f4fc5cccc9fec2fcfa01dd950a853d3f76c38b72faf29c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_nav"));

        // line 242
        echo "                                ";
        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render("sonata_admin_sidebar", array("template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "knp_menu_template"), "method")));
        echo "
                            ";
        
        $__internal_b658bd868dc5c1f424f4fc5cccc9fec2fcfa01dd950a853d3f76c38b72faf29c->leave($__internal_b658bd868dc5c1f424f4fc5cccc9fec2fcfa01dd950a853d3f76c38b72faf29c_prof);

        
        $__internal_64d7ed5e9204d09b2203cdefdccbdc3f3a758a5c68d851f9e0e232746e61040b->leave($__internal_64d7ed5e9204d09b2203cdefdccbdc3f3a758a5c68d851f9e0e232746e61040b_prof);

    }

    // line 244
    public function block_side_bar_after_nav($context, array $blocks = array())
    {
        $__internal_05d8351ba461fb9354ad3d19671914b7a51609cf1440ab645780141a01722a6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05d8351ba461fb9354ad3d19671914b7a51609cf1440ab645780141a01722a6e->enter($__internal_05d8351ba461fb9354ad3d19671914b7a51609cf1440ab645780141a01722a6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_after_nav"));

        $__internal_68109b37b52618ae26dffbd0b135593b74e8c9907959aba4465e9521b72ec2c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68109b37b52618ae26dffbd0b135593b74e8c9907959aba4465e9521b72ec2c4->enter($__internal_68109b37b52618ae26dffbd0b135593b74e8c9907959aba4465e9521b72ec2c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_after_nav"));

        // line 245
        echo "                                <p class=\"text-center small\" style=\"border-top: 1px solid #444444; padding-top: 10px\">
                                    ";
        // line 246
        $this->displayBlock('side_bar_after_nav_content', $context, $blocks);
        // line 249
        echo "                                </p>
                            ";
        
        $__internal_68109b37b52618ae26dffbd0b135593b74e8c9907959aba4465e9521b72ec2c4->leave($__internal_68109b37b52618ae26dffbd0b135593b74e8c9907959aba4465e9521b72ec2c4_prof);

        
        $__internal_05d8351ba461fb9354ad3d19671914b7a51609cf1440ab645780141a01722a6e->leave($__internal_05d8351ba461fb9354ad3d19671914b7a51609cf1440ab645780141a01722a6e_prof);

    }

    // line 246
    public function block_side_bar_after_nav_content($context, array $blocks = array())
    {
        $__internal_054c7dd1e08131f57ffb69c8573462b52feaf8a45aaa8677442d0604c7e9943b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_054c7dd1e08131f57ffb69c8573462b52feaf8a45aaa8677442d0604c7e9943b->enter($__internal_054c7dd1e08131f57ffb69c8573462b52feaf8a45aaa8677442d0604c7e9943b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_after_nav_content"));

        $__internal_eb6268a54901351702775acdb5ea231c2fd262ea3176316620fcefa96684f8ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb6268a54901351702775acdb5ea231c2fd262ea3176316620fcefa96684f8ae->enter($__internal_eb6268a54901351702775acdb5ea231c2fd262ea3176316620fcefa96684f8ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_after_nav_content"));

        // line 247
        echo "                                        <a href=\"https://sonata-project.org\" rel=\"noreferrer\" target=\"_blank\">sonata project</a>
                                    ";
        
        $__internal_eb6268a54901351702775acdb5ea231c2fd262ea3176316620fcefa96684f8ae->leave($__internal_eb6268a54901351702775acdb5ea231c2fd262ea3176316620fcefa96684f8ae_prof);

        
        $__internal_054c7dd1e08131f57ffb69c8573462b52feaf8a45aaa8677442d0604c7e9943b->leave($__internal_054c7dd1e08131f57ffb69c8573462b52feaf8a45aaa8677442d0604c7e9943b_prof);

    }

    // line 257
    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_13508fd4501623fe3d52b2021dbe9348799ae236cd2817aad974e061bf302372 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13508fd4501623fe3d52b2021dbe9348799ae236cd2817aad974e061bf302372->enter($__internal_13508fd4501623fe3d52b2021dbe9348799ae236cd2817aad974e061bf302372_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        $__internal_17aabae7073edf587e4cbb0ad678a60d09e37a138b8cc70b00ee1222cc3cde6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17aabae7073edf587e4cbb0ad678a60d09e37a138b8cc70b00ee1222cc3cde6d->enter($__internal_17aabae7073edf587e4cbb0ad678a60d09e37a138b8cc70b00ee1222cc3cde6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 258
        echo "                    <section class=\"content-header\">

                        ";
        // line 260
        $this->displayBlock('sonata_page_content_header', $context, $blocks);
        // line 314
        echo "                    </section>

                    <section class=\"content\">
                        ";
        // line 317
        $this->displayBlock('sonata_admin_content', $context, $blocks);
        // line 351
        echo "                    </section>
                ";
        
        $__internal_17aabae7073edf587e4cbb0ad678a60d09e37a138b8cc70b00ee1222cc3cde6d->leave($__internal_17aabae7073edf587e4cbb0ad678a60d09e37a138b8cc70b00ee1222cc3cde6d_prof);

        
        $__internal_13508fd4501623fe3d52b2021dbe9348799ae236cd2817aad974e061bf302372->leave($__internal_13508fd4501623fe3d52b2021dbe9348799ae236cd2817aad974e061bf302372_prof);

    }

    // line 260
    public function block_sonata_page_content_header($context, array $blocks = array())
    {
        $__internal_e01bcfd9df1a99aea20401043b54108ec298c1f3b4db5c13375ae5831883e110 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e01bcfd9df1a99aea20401043b54108ec298c1f3b4db5c13375ae5831883e110->enter($__internal_e01bcfd9df1a99aea20401043b54108ec298c1f3b4db5c13375ae5831883e110_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content_header"));

        $__internal_302cdbaefa6e4585e689b91089f133b9087dc822ed7ff44183b8092739818151 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_302cdbaefa6e4585e689b91089f133b9087dc822ed7ff44183b8092739818151->enter($__internal_302cdbaefa6e4585e689b91089f133b9087dc822ed7ff44183b8092739818151_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content_header"));

        // line 261
        echo "                            ";
        $this->displayBlock('sonata_page_content_nav', $context, $blocks);
        // line 313
        echo "                        ";
        
        $__internal_302cdbaefa6e4585e689b91089f133b9087dc822ed7ff44183b8092739818151->leave($__internal_302cdbaefa6e4585e689b91089f133b9087dc822ed7ff44183b8092739818151_prof);

        
        $__internal_e01bcfd9df1a99aea20401043b54108ec298c1f3b4db5c13375ae5831883e110->leave($__internal_e01bcfd9df1a99aea20401043b54108ec298c1f3b4db5c13375ae5831883e110_prof);

    }

    // line 261
    public function block_sonata_page_content_nav($context, array $blocks = array())
    {
        $__internal_8d17e16ee2022e5221ba366216a8fe564b51db6ba6cab6d87dc6b19f243bf5b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d17e16ee2022e5221ba366216a8fe564b51db6ba6cab6d87dc6b19f243bf5b4->enter($__internal_8d17e16ee2022e5221ba366216a8fe564b51db6ba6cab6d87dc6b19f243bf5b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content_nav"));

        $__internal_414950c4446575cd7ad18418ca0ad9bcd6982beb8c7045ee24c46ed4cac1b82f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_414950c4446575cd7ad18418ca0ad9bcd6982beb8c7045ee24c46ed4cac1b82f->enter($__internal_414950c4446575cd7ad18418ca0ad9bcd6982beb8c7045ee24c46ed4cac1b82f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content_nav"));

        // line 262
        echo "                                ";
        if ((( !twig_test_empty((isset($context["_tab_menu"]) ? $context["_tab_menu"] : $this->getContext($context, "_tab_menu"))) ||  !twig_test_empty((isset($context["_actions"]) ? $context["_actions"] : $this->getContext($context, "_actions")))) ||  !twig_test_empty((isset($context["_list_filters_actions"]) ? $context["_list_filters_actions"] : $this->getContext($context, "_list_filters_actions"))))) {
            // line 263
            echo "                                    <nav class=\"navbar navbar-default\" role=\"navigation\">
                                        <div class=\"container-fluid\">
                                            ";
            // line 265
            $this->displayBlock('tab_menu_navbar_header', $context, $blocks);
            // line 272
            echo "
                                            <div class=\"navbar-collapse\">
                                                ";
            // line 274
            if ( !twig_test_empty((isset($context["_tab_menu"]) ? $context["_tab_menu"] : $this->getContext($context, "_tab_menu")))) {
                // line 275
                echo "                                                    <div class=\"navbar-left\">
                                                        ";
                // line 276
                echo (isset($context["_tab_menu"]) ? $context["_tab_menu"] : $this->getContext($context, "_tab_menu"));
                echo "
                                                    </div>
                                                ";
            }
            // line 279
            echo "
                                                ";
            // line 280
            if ((((array_key_exists("admin", $context) && array_key_exists("action", $context)) && ((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")) == "list")) && (twig_length_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "listModes", array())) > 1))) {
                // line 281
                echo "                                                    <div class=\"nav navbar-right btn-group\">
                                                        ";
                // line 282
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "listModes", array()));
                foreach ($context['_seq'] as $context["mode"] => $context["settings"]) {
                    // line 283
                    echo "                                                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => twig_array_merge($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "all", array()), array("_list_mode" => $context["mode"]))), "method"), "html", null, true);
                    echo "\" class=\"btn btn-default navbar-btn btn-sm";
                    if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getListMode", array(), "method") == $context["mode"])) {
                        echo " active";
                    }
                    echo "\"><i class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["settings"], "class", array()), "html", null, true);
                    echo "\"></i></a>
                                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['mode'], $context['settings'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 285
                echo "                                                    </div>
                                                ";
            }
            // line 287
            echo "
                                                ";
            // line 288
            $this->displayBlock('sonata_admin_content_actions_wrappers', $context, $blocks);
            // line 304
            echo "
                                                ";
            // line 305
            if ( !twig_test_empty((isset($context["_list_filters_actions"]) ? $context["_list_filters_actions"] : $this->getContext($context, "_list_filters_actions")))) {
                // line 306
                echo "                                                    ";
                echo (isset($context["_list_filters_actions"]) ? $context["_list_filters_actions"] : $this->getContext($context, "_list_filters_actions"));
                echo "
                                                ";
            }
            // line 308
            echo "                                            </div>
                                        </div>
                                    </nav>
                                ";
        }
        // line 312
        echo "                            ";
        
        $__internal_414950c4446575cd7ad18418ca0ad9bcd6982beb8c7045ee24c46ed4cac1b82f->leave($__internal_414950c4446575cd7ad18418ca0ad9bcd6982beb8c7045ee24c46ed4cac1b82f_prof);

        
        $__internal_8d17e16ee2022e5221ba366216a8fe564b51db6ba6cab6d87dc6b19f243bf5b4->leave($__internal_8d17e16ee2022e5221ba366216a8fe564b51db6ba6cab6d87dc6b19f243bf5b4_prof);

    }

    // line 265
    public function block_tab_menu_navbar_header($context, array $blocks = array())
    {
        $__internal_09cc6031200906031f63a3d4d885789e0673967c25f7b88e78c2be23cffa9b54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09cc6031200906031f63a3d4d885789e0673967c25f7b88e78c2be23cffa9b54->enter($__internal_09cc6031200906031f63a3d4d885789e0673967c25f7b88e78c2be23cffa9b54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu_navbar_header"));

        $__internal_a04c81453d880c674dbd28cc687be36c23c95907b2681cf3d5f83143b1b90192 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a04c81453d880c674dbd28cc687be36c23c95907b2681cf3d5f83143b1b90192->enter($__internal_a04c81453d880c674dbd28cc687be36c23c95907b2681cf3d5f83143b1b90192_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu_navbar_header"));

        // line 266
        echo "                                                ";
        if ( !twig_test_empty((isset($context["_navbar_title"]) ? $context["_navbar_title"] : $this->getContext($context, "_navbar_title")))) {
            // line 267
            echo "                                                    <div class=\"navbar-header\">
                                                        <a class=\"navbar-brand\" href=\"#\">";
            // line 268
            echo (isset($context["_navbar_title"]) ? $context["_navbar_title"] : $this->getContext($context, "_navbar_title"));
            echo "</a>
                                                    </div>
                                                ";
        }
        // line 271
        echo "                                            ";
        
        $__internal_a04c81453d880c674dbd28cc687be36c23c95907b2681cf3d5f83143b1b90192->leave($__internal_a04c81453d880c674dbd28cc687be36c23c95907b2681cf3d5f83143b1b90192_prof);

        
        $__internal_09cc6031200906031f63a3d4d885789e0673967c25f7b88e78c2be23cffa9b54->leave($__internal_09cc6031200906031f63a3d4d885789e0673967c25f7b88e78c2be23cffa9b54_prof);

    }

    // line 288
    public function block_sonata_admin_content_actions_wrappers($context, array $blocks = array())
    {
        $__internal_448ca0ae4384cc97214289c1b9b31f3301e975a9098dd9770ee002d34dbdc78d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_448ca0ae4384cc97214289c1b9b31f3301e975a9098dd9770ee002d34dbdc78d->enter($__internal_448ca0ae4384cc97214289c1b9b31f3301e975a9098dd9770ee002d34dbdc78d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_content_actions_wrappers"));

        $__internal_b1afa0d9bc2a11921d6f40e816609b76f967bd3b51c1944dc9ebe05b496ad373 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1afa0d9bc2a11921d6f40e816609b76f967bd3b51c1944dc9ebe05b496ad373->enter($__internal_b1afa0d9bc2a11921d6f40e816609b76f967bd3b51c1944dc9ebe05b496ad373_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_content_actions_wrappers"));

        // line 289
        echo "                                                    ";
        if ( !twig_test_empty(twig_trim_filter(twig_replace_filter((isset($context["_actions"]) ? $context["_actions"] : $this->getContext($context, "_actions")), array("<li>" => "", "</li>" => ""))))) {
            // line 290
            echo "                                                        <ul class=\"nav navbar-nav navbar-right\">
                                                        ";
            // line 291
            if ((twig_length_filter($this->env, twig_split_filter($this->env, (isset($context["_actions"]) ? $context["_actions"] : $this->getContext($context, "_actions")), "</a>")) > 2)) {
                // line 292
                echo "                                                            <li class=\"dropdown sonata-actions\">
                                                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
                // line 293
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_actions", array(), "SonataAdminBundle"), "html", null, true);
                echo " <b class=\"caret\"></b></a>
                                                                <ul class=\"dropdown-menu\" role=\"menu\">
                                                                    ";
                // line 295
                echo (isset($context["_actions"]) ? $context["_actions"] : $this->getContext($context, "_actions"));
                echo "
                                                                </ul>
                                                            </li>
                                                        ";
            } else {
                // line 299
                echo "                                                            ";
                echo (isset($context["_actions"]) ? $context["_actions"] : $this->getContext($context, "_actions"));
                echo "
                                                        ";
            }
            // line 301
            echo "                                                        </ul>
                                                    ";
        }
        // line 303
        echo "                                                ";
        
        $__internal_b1afa0d9bc2a11921d6f40e816609b76f967bd3b51c1944dc9ebe05b496ad373->leave($__internal_b1afa0d9bc2a11921d6f40e816609b76f967bd3b51c1944dc9ebe05b496ad373_prof);

        
        $__internal_448ca0ae4384cc97214289c1b9b31f3301e975a9098dd9770ee002d34dbdc78d->leave($__internal_448ca0ae4384cc97214289c1b9b31f3301e975a9098dd9770ee002d34dbdc78d_prof);

    }

    // line 317
    public function block_sonata_admin_content($context, array $blocks = array())
    {
        $__internal_756c57ab3a0acf4b0a145f399bae258ff7e0ab695e586ca424e7b1f970ea1727 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_756c57ab3a0acf4b0a145f399bae258ff7e0ab695e586ca424e7b1f970ea1727->enter($__internal_756c57ab3a0acf4b0a145f399bae258ff7e0ab695e586ca424e7b1f970ea1727_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_content"));

        $__internal_d805549c48c9d8ef1c21e258952639af1e451ce922ccbeebc6cae6c1d885be67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d805549c48c9d8ef1c21e258952639af1e451ce922ccbeebc6cae6c1d885be67->enter($__internal_d805549c48c9d8ef1c21e258952639af1e451ce922ccbeebc6cae6c1d885be67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_content"));

        // line 318
        echo "
                            ";
        // line 319
        $this->displayBlock('notice', $context, $blocks);
        // line 322
        echo "
                            ";
        // line 323
        if ( !twig_test_empty((isset($context["_preview"]) ? $context["_preview"] : $this->getContext($context, "_preview")))) {
            // line 324
            echo "                                <div class=\"sonata-ba-preview\">";
            echo (isset($context["_preview"]) ? $context["_preview"] : $this->getContext($context, "_preview"));
            echo "</div>
                            ";
        }
        // line 326
        echo "
                            ";
        // line 327
        if ( !twig_test_empty((isset($context["_content"]) ? $context["_content"] : $this->getContext($context, "_content")))) {
            // line 328
            echo "                                <div class=\"sonata-ba-content\">";
            echo (isset($context["_content"]) ? $context["_content"] : $this->getContext($context, "_content"));
            echo "</div>
                            ";
        }
        // line 330
        echo "
                            ";
        // line 331
        if ( !twig_test_empty((isset($context["_show"]) ? $context["_show"] : $this->getContext($context, "_show")))) {
            // line 332
            echo "                                <div class=\"sonata-ba-show\">";
            echo (isset($context["_show"]) ? $context["_show"] : $this->getContext($context, "_show"));
            echo "</div>
                            ";
        }
        // line 334
        echo "
                            ";
        // line 335
        if ( !twig_test_empty((isset($context["_form"]) ? $context["_form"] : $this->getContext($context, "_form")))) {
            // line 336
            echo "                                <div class=\"sonata-ba-form\">";
            echo (isset($context["_form"]) ? $context["_form"] : $this->getContext($context, "_form"));
            echo "</div>
                            ";
        }
        // line 338
        echo "
                            ";
        // line 339
        if ( !twig_test_empty((isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters")))) {
            // line 340
            echo "                                <div class=\"row\">
                                    ";
            // line 341
            echo (isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters"));
            echo "
                                </div>
                            ";
        }
        // line 344
        echo "
                            ";
        // line 345
        if ( !twig_test_empty((isset($context["_list_table"]) ? $context["_list_table"] : $this->getContext($context, "_list_table")))) {
            // line 346
            echo "                                <div class=\"row\">
                                    ";
            // line 347
            echo (isset($context["_list_table"]) ? $context["_list_table"] : $this->getContext($context, "_list_table"));
            echo "
                                </div>
                            ";
        }
        // line 350
        echo "                        ";
        
        $__internal_d805549c48c9d8ef1c21e258952639af1e451ce922ccbeebc6cae6c1d885be67->leave($__internal_d805549c48c9d8ef1c21e258952639af1e451ce922ccbeebc6cae6c1d885be67_prof);

        
        $__internal_756c57ab3a0acf4b0a145f399bae258ff7e0ab695e586ca424e7b1f970ea1727->leave($__internal_756c57ab3a0acf4b0a145f399bae258ff7e0ab695e586ca424e7b1f970ea1727_prof);

    }

    // line 319
    public function block_notice($context, array $blocks = array())
    {
        $__internal_5d8c0a750de5ee8ca04f096dc2995b34dc1bc0f45fa9f4ac20a93ca9da7fc61e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d8c0a750de5ee8ca04f096dc2995b34dc1bc0f45fa9f4ac20a93ca9da7fc61e->enter($__internal_5d8c0a750de5ee8ca04f096dc2995b34dc1bc0f45fa9f4ac20a93ca9da7fc61e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "notice"));

        $__internal_fc4726d3d0330b6b495e596660a4e9ebd50c223e95c21618b9bf176ecf401c12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc4726d3d0330b6b495e596660a4e9ebd50c223e95c21618b9bf176ecf401c12->enter($__internal_fc4726d3d0330b6b495e596660a4e9ebd50c223e95c21618b9bf176ecf401c12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "notice"));

        // line 320
        echo "                                ";
        $this->loadTemplate("SonataCoreBundle:FlashMessage:render.html.twig", "SonataAdminBundle::standard_layout.html.twig", 320)->display($context);
        // line 321
        echo "                            ";
        
        $__internal_fc4726d3d0330b6b495e596660a4e9ebd50c223e95c21618b9bf176ecf401c12->leave($__internal_fc4726d3d0330b6b495e596660a4e9ebd50c223e95c21618b9bf176ecf401c12_prof);

        
        $__internal_5d8c0a750de5ee8ca04f096dc2995b34dc1bc0f45fa9f4ac20a93ca9da7fc61e->leave($__internal_5d8c0a750de5ee8ca04f096dc2995b34dc1bc0f45fa9f4ac20a93ca9da7fc61e_prof);

    }

    // line 358
    public function block_bootlint($context, array $blocks = array())
    {
        $__internal_f63164b67b5b0958959078dc0c79954e620c3a7fb6468bc22f63b224c1c06d7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f63164b67b5b0958959078dc0c79954e620c3a7fb6468bc22f63b224c1c06d7c->enter($__internal_f63164b67b5b0958959078dc0c79954e620c3a7fb6468bc22f63b224c1c06d7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bootlint"));

        $__internal_d5b47186f4d16783ad27afc47cd29cee3bd1b6536df777173a47e8412261df83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5b47186f4d16783ad27afc47cd29cee3bd1b6536df777173a47e8412261df83->enter($__internal_d5b47186f4d16783ad27afc47cd29cee3bd1b6536df777173a47e8412261df83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bootlint"));

        // line 359
        echo "            ";
        // line 360
        echo "            <script type=\"text/javascript\">
                javascript:(function(){var s=document.createElement(\"script\");s.onload=function(){bootlint.showLintReportForCurrentDocument([], {hasProblems: false, problemFree: false});};s.src=\"https://maxcdn.bootstrapcdn.com/bootlint/latest/bootlint.min.js\";document.body.appendChild(s)})();
            </script>
        ";
        
        $__internal_d5b47186f4d16783ad27afc47cd29cee3bd1b6536df777173a47e8412261df83->leave($__internal_d5b47186f4d16783ad27afc47cd29cee3bd1b6536df777173a47e8412261df83_prof);

        
        $__internal_f63164b67b5b0958959078dc0c79954e620c3a7fb6468bc22f63b224c1c06d7c->leave($__internal_f63164b67b5b0958959078dc0c79954e620c3a7fb6468bc22f63b224c1c06d7c_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle::standard_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1458 => 360,  1456 => 359,  1447 => 358,  1437 => 321,  1434 => 320,  1425 => 319,  1415 => 350,  1409 => 347,  1406 => 346,  1404 => 345,  1401 => 344,  1395 => 341,  1392 => 340,  1390 => 339,  1387 => 338,  1381 => 336,  1379 => 335,  1376 => 334,  1370 => 332,  1368 => 331,  1365 => 330,  1359 => 328,  1357 => 327,  1354 => 326,  1348 => 324,  1346 => 323,  1343 => 322,  1341 => 319,  1338 => 318,  1329 => 317,  1319 => 303,  1315 => 301,  1309 => 299,  1302 => 295,  1297 => 293,  1294 => 292,  1292 => 291,  1289 => 290,  1286 => 289,  1277 => 288,  1267 => 271,  1261 => 268,  1258 => 267,  1255 => 266,  1246 => 265,  1236 => 312,  1230 => 308,  1224 => 306,  1222 => 305,  1219 => 304,  1217 => 288,  1214 => 287,  1210 => 285,  1195 => 283,  1191 => 282,  1188 => 281,  1186 => 280,  1183 => 279,  1177 => 276,  1174 => 275,  1172 => 274,  1168 => 272,  1166 => 265,  1162 => 263,  1159 => 262,  1150 => 261,  1140 => 313,  1137 => 261,  1128 => 260,  1117 => 351,  1115 => 317,  1110 => 314,  1108 => 260,  1104 => 258,  1095 => 257,  1084 => 247,  1075 => 246,  1064 => 249,  1062 => 246,  1059 => 245,  1050 => 244,  1037 => 242,  1028 => 241,  1010 => 240,  989 => 230,  983 => 228,  974 => 227,  964 => 251,  961 => 244,  958 => 241,  956 => 240,  953 => 239,  950 => 227,  941 => 226,  929 => 252,  927 => 226,  923 => 224,  914 => 223,  903 => 353,  901 => 257,  897 => 255,  894 => 223,  885 => 222,  873 => 210,  871 => 209,  864 => 204,  855 => 203,  844 => 201,  842 => 200,  836 => 196,  827 => 195,  817 => 216,  812 => 213,  809 => 203,  807 => 195,  803 => 193,  800 => 192,  791 => 191,  780 => 187,  776 => 185,  770 => 183,  767 => 182,  764 => 181,  750 => 180,  744 => 178,  740 => 176,  734 => 174,  730 => 172,  727 => 170,  724 => 168,  722 => 167,  717 => 166,  715 => 165,  712 => 164,  710 => 163,  707 => 160,  705 => 159,  703 => 158,  701 => 157,  683 => 156,  680 => 155,  678 => 154,  675 => 153,  673 => 152,  670 => 151,  661 => 150,  650 => 217,  648 => 191,  644 => 189,  642 => 150,  634 => 144,  625 => 143,  615 => 142,  611 => 140,  605 => 138,  602 => 137,  594 => 135,  592 => 134,  587 => 133,  584 => 132,  575 => 131,  561 => 127,  557 => 125,  548 => 124,  537 => 219,  534 => 143,  531 => 131,  529 => 124,  526 => 123,  517 => 122,  499 => 118,  489 => 115,  486 => 114,  483 => 113,  469 => 112,  464 => 110,  461 => 107,  459 => 106,  457 => 105,  455 => 104,  451 => 101,  448 => 100,  445 => 99,  428 => 98,  425 => 97,  422 => 96,  416 => 94,  414 => 93,  408 => 91,  399 => 90,  389 => 66,  380 => 64,  375 => 63,  366 => 62,  345 => 50,  341 => 48,  335 => 47,  327 => 46,  319 => 45,  311 => 44,  307 => 42,  298 => 41,  288 => 87,  285 => 86,  279 => 84,  276 => 83,  273 => 81,  268 => 80,  265 => 79,  262 => 77,  258 => 75,  256 => 73,  254 => 71,  251 => 70,  249 => 69,  247 => 68,  244 => 67,  242 => 62,  239 => 61,  236 => 41,  227 => 40,  217 => 38,  208 => 36,  203 => 35,  194 => 34,  181 => 29,  172 => 28,  154 => 26,  141 => 365,  138 => 364,  135 => 358,  133 => 357,  129 => 355,  127 => 222,  124 => 221,  122 => 122,  115 => 118,  111 => 116,  109 => 90,  105 => 88,  103 => 40,  100 => 39,  98 => 34,  95 => 33,  93 => 28,  88 => 26,  84 => 24,  82 => 23,  80 => 22,  78 => 21,  76 => 20,  74 => 19,  72 => 18,  70 => 17,  68 => 16,  66 => 15,  64 => 14,  62 => 13,  60 => 12,  57 => 11,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% set _preview = block('preview') is defined ? block('preview')|trim : null %}
{% set _form = block('form') is defined ? block('form')|trim : null %}
{% set _show = block('show') is defined ? block('show')|trim : null %}
{% set _list_table = block('list_table') is defined ? block('list_table')|trim : null %}
{% set _list_filters = block('list_filters') is defined ? block('list_filters')|trim : null %}
{% set _tab_menu = block('tab_menu') is defined ? block('tab_menu')|trim : null %}
{% set _content = block('content') is defined ? block('content')|trim : null %}
{% set _title = block('title') is defined ? block('title')|trim : null %}
{% set _breadcrumb = block('breadcrumb') is defined ? block('breadcrumb')|trim : null %}
{% set _actions = block('actions') is defined ? block('actions')|trim : null %}
{% set _navbar_title = block('navbar_title') is defined ? block('navbar_title')|trim : null %}
{% set _list_filters_actions = block('list_filters_actions') is defined ? block('list_filters_actions')|trim : null %}

<!DOCTYPE html>
<html {% block html_attributes %}class=\"no-js\"{% endblock %}>
    <head>
        {% block meta_tags %}
            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
            <meta charset=\"UTF-8\">
            <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        {% endblock %}

        {% block stylesheets %}
            {% for stylesheet in sonata_admin.adminPool.getOption('stylesheets', []) %}
                <link rel=\"stylesheet\" href=\"{{ asset(stylesheet) }}\">
            {% endfor %}
        {% endblock %}

        {% block javascripts %}
            {% block sonata_javascript_config %}
                <script>
                    window.SONATA_CONFIG = {
                        CONFIRM_EXIT: {% if sonata_admin.adminPool.getOption('confirm_exit') %}true{% else %}false{% endif %},
                        USE_SELECT2: {% if sonata_admin.adminPool.getOption('use_select2') %}true{% else %}false{% endif %},
                        USE_ICHECK: {% if sonata_admin.adminPool.getOption('use_icheck') %}true{% else %}false{% endif %},
                        USE_STICKYFORMS: {% if sonata_admin.adminPool.getOption('use_stickyforms') %}true{% else %}false{% endif %}
                    };
                    window.SONATA_TRANSLATIONS = {
                        CONFIRM_EXIT: '{{ 'confirm_exit'|trans({}, 'SonataAdminBundle')|escape('js') }}'
                    };

                    // http://getbootstrap.com/getting-started/#support-ie10-width
                    if (navigator.userAgent.match(/IEMobile\\/10\\.0/)) {
                        var msViewportStyle = document.createElement('style');
                        msViewportStyle.appendChild(document.createTextNode('@-ms-viewport{width:auto!important}'));
                        document.querySelector('head').appendChild(msViewportStyle);
                    }
                </script>
            {% endblock %}

            {% block sonata_javascript_pool %}
                {% for javascript in sonata_admin.adminPool.getOption('javascripts', []) %}
                    <script src=\"{{ asset(javascript) }}\"></script>
                {% endfor %}
            {% endblock %}

            {% set locale = app.request.locale %}
            {# localize moment #}
            {% if locale[:2] != 'en' %}
                <script src=\"{{ asset(
                    'bundles/sonatacore/vendor/moment/locale/' ~
                    locale|lower|replace({'_':'-'}) ~
                    '.js'
                ) }}\"></script>
            {% endif %}

            {# localize select2 #}
            {% if sonata_admin.adminPool.getOption('use_select2') %}
                {% if locale == 'pt' %}{% set locale = 'pt_PT' %}{% endif %}

                {# omit default EN locale #}
                {% if locale[:2] != 'en' %}
                    <script src=\"{{ asset('bundles/sonatacore/vendor/select2/select2_locale_' ~ locale|replace({'_':'-'}) ~ '.js') }}\"></script>
                {% endif %}
            {% endif %}
        {% endblock %}

        <title>
        {% block sonata_head_title %}
            {{ 'Admin'|trans({}, 'SonataAdminBundle') }}

            {% if _title is not empty %}
                {{ _title|raw }}
            {% else %}
                {% if action is defined %}
                    -
                    {% for menu in breadcrumbs_builder.breadcrumbs(admin, action) %}
                        {% if not loop.first %}
                            {% if loop.index != 2 %}
                                &gt;
                            {% endif %}

                            {%- set translation_domain = menu.extra('translation_domain', 'messages') -%}
                            {%- set label = menu.label -%}
                            {%- if translation_domain is not same as(false) -%}
                                {%- set label = label|trans(menu.extra('translation_params', {}), translation_domain) -%}
                            {%- endif -%}

                            {{ label }}
                        {% endif %}
                    {% endfor %}
                {% endif %}
            {% endif %}
        {% endblock %}
        </title>
    </head>
    <body {% block body_attributes %}class=\"sonata-bc skin-black fixed\"{% endblock %}>

    <div class=\"wrapper\">

        {% block sonata_header %}
            <header class=\"main-header\">
                {% block sonata_header_noscript_warning %}
                    <noscript>
                        <div class=\"noscript-warning\">
                            {{ 'noscript_warning'|trans({}, 'SonataAdminBundle') }}
                        </div>
                    </noscript>
                {% endblock %}
                {% block logo %}
                    {% spaceless %}
                        <a class=\"logo\" href=\"{{ path('sonata_admin_dashboard') }}\">
                            {% if 'single_image' == sonata_admin.adminPool.getOption('title_mode') or 'both' == sonata_admin.adminPool.getOption('title_mode') %}
                                <img src=\"{{ asset(sonata_admin.adminPool.titlelogo) }}\" alt=\"{{ sonata_admin.adminPool.title }}\">
                            {% endif %}
                            {% if 'single_text' == sonata_admin.adminPool.getOption('title_mode') or 'both' == sonata_admin.adminPool.getOption('title_mode') %}
                                <span>{{ sonata_admin.adminPool.title }}</span>
                            {% endif %}
                        </a>
                    {% endspaceless %}
                {% endblock %}
                {% block sonata_nav %}
                    <nav class=\"navbar navbar-static-top\" role=\"navigation\">
                        <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                            <span class=\"sr-only\">Toggle navigation</span>
                        </a>

                        <div class=\"navbar-left\">
                            {% block sonata_breadcrumb %}
                                <div class=\"hidden-xs\">
                                    {% if _breadcrumb is not empty or action is defined %}
                                        <ol class=\"nav navbar-top-links breadcrumb\">
                                            {% if _breadcrumb is empty %}
                                                {% if action is defined %}
                                                    {% for menu in breadcrumbs_builder.breadcrumbs(admin, action) %}
                                                        {%- set translation_domain = menu.extra('translation_domain', 'messages') -%}
                                                        {%- set label = menu.label -%}
                                                        {%- if translation_domain is not same as(false) -%}
                                                            {%- set label = label|trans(menu.extra('translation_params', {}), translation_domain) -%}
                                                        {%- endif -%}

                                                        {% if not loop.last %}
                                                            <li>
                                                                {% if menu.uri is not empty %}
                                                                    <a href=\"{{ menu.uri }}\">
                                                                        {% if menu.extra('safe_label', true) %}
                                                                            {{- label|raw -}}
                                                                        {% else %}
                                                                            {{- label -}}
                                                                        {% endif %}
                                                                    </a>
                                                                {% else %}
                                                                    <span>{{ label }}</span>
                                                                {% endif %}
                                                            </li>
                                                        {% else %}
                                                            <li class=\"active\"><span>{{ label }}</span></li>
                                                        {% endif %}
                                                    {% endfor %}
                                                {% endif %}
                                            {% else %}
                                                {{ _breadcrumb|raw }}
                                            {% endif %}
                                        </ol>
                                    {% endif %}
                                </div>
                            {% endblock sonata_breadcrumb %}
                        </div>

                        {% block sonata_top_nav_menu %}
                            {% if app.user and is_granted('ROLE_SONATA_ADMIN') %}
                                <div class=\"navbar-custom-menu\">
                                    <ul class=\"nav navbar-nav\">
                                        {% block sonata_top_nav_menu_add_block %}
                                            <li class=\"dropdown\">
                                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                    <i class=\"fa fa-plus-square fa-fw\" aria-hidden=\"true\"></i> <i class=\"fa fa-caret-down\" aria-hidden=\"true\"></i>
                                                </a>
                                                {% include sonata_admin.adminPool.getTemplate('add_block') %}
                                            </li>
                                        {% endblock %}
                                        {% block sonata_top_nav_menu_user_block %}
                                            <li class=\"dropdown user-menu\">
                                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                    <i class=\"fa fa-user fa-fw\" aria-hidden=\"true\"></i> <i class=\"fa fa-caret-down\" aria-hidden=\"true\"></i>
                                                </a>
                                                <ul class=\"dropdown-menu dropdown-user\">
                                                    {% include sonata_admin.adminPool.getTemplate('user_block') %}
                                                </ul>
                                            </li>
                                        {% endblock %}
                                    </ul>
                                </div>
                            {% endif %}
                        {% endblock %}
                    </nav>
                {% endblock sonata_nav %}
            </header>
        {% endblock sonata_header %}

        {% block sonata_wrapper %}
            {% block sonata_left_side %}
                <aside class=\"main-sidebar\">
                    <section class=\"sidebar\">
                        {% block sonata_side_nav %}
                            {% block sonata_sidebar_search %}
                                <form action=\"{{ path('sonata_admin_search') }}\" method=\"GET\" class=\"sidebar-form\" role=\"search\">
                                    <div class=\"input-group custom-search-form\">
                                        <input type=\"text\" name=\"q\" value=\"{{ app.request.get('q') }}\" class=\"form-control\" placeholder=\"{{ 'search_placeholder'|trans({}, 'SonataAdminBundle') }}\">
                                        <span class=\"input-group-btn\">
                                            <button class=\"btn btn-flat\" type=\"submit\">
                                                <i class=\"fa fa-search\" aria-hidden=\"true\"></i>
                                            </button>
                                        </span>
                                    </div>
                                </form>
                            {% endblock sonata_sidebar_search %}

                            {% block side_bar_before_nav %} {% endblock %}
                            {% block side_bar_nav %}
                                {{ knp_menu_render('sonata_admin_sidebar', {template: sonata_admin.adminPool.getTemplate('knp_menu_template')}) }}
                            {% endblock side_bar_nav %}
                            {% block side_bar_after_nav %}
                                <p class=\"text-center small\" style=\"border-top: 1px solid #444444; padding-top: 10px\">
                                    {% block side_bar_after_nav_content %}
                                        <a href=\"https://sonata-project.org\" rel=\"noreferrer\" target=\"_blank\">sonata project</a>
                                    {% endblock %}
                                </p>
                            {% endblock %}
                        {% endblock sonata_side_nav %}
                    </section>
                </aside>
            {% endblock sonata_left_side %}

            <div class=\"content-wrapper\">
                {% block sonata_page_content %}
                    <section class=\"content-header\">

                        {% block sonata_page_content_header %}
                            {% block sonata_page_content_nav %}
                                {% if _tab_menu is not empty or _actions is not empty or _list_filters_actions is not empty %}
                                    <nav class=\"navbar navbar-default\" role=\"navigation\">
                                        <div class=\"container-fluid\">
                                            {% block tab_menu_navbar_header %}
                                                {% if _navbar_title is not empty %}
                                                    <div class=\"navbar-header\">
                                                        <a class=\"navbar-brand\" href=\"#\">{{ _navbar_title|raw }}</a>
                                                    </div>
                                                {% endif %}
                                            {% endblock %}

                                            <div class=\"navbar-collapse\">
                                                {% if _tab_menu is not empty %}
                                                    <div class=\"navbar-left\">
                                                        {{ _tab_menu|raw }}
                                                    </div>
                                                {% endif %}

                                                {% if admin is defined and action is defined and action == 'list' and admin.listModes|length > 1 %}
                                                    <div class=\"nav navbar-right btn-group\">
                                                        {% for mode, settings in admin.listModes %}
                                                            <a href=\"{{ admin.generateUrl('list', app.request.query.all|merge({_list_mode: mode})) }}\" class=\"btn btn-default navbar-btn btn-sm{% if admin.getListMode() == mode %} active{% endif %}\"><i class=\"{{ settings.class }}\"></i></a>
                                                        {% endfor %}
                                                    </div>
                                                {% endif %}

                                                {% block sonata_admin_content_actions_wrappers %}
                                                    {% if _actions|replace({ '<li>': '', '</li>': '' })|trim is not empty %}
                                                        <ul class=\"nav navbar-nav navbar-right\">
                                                        {% if _actions|split('</a>')|length > 2 %}
                                                            <li class=\"dropdown sonata-actions\">
                                                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">{{ 'link_actions'|trans({}, 'SonataAdminBundle') }} <b class=\"caret\"></b></a>
                                                                <ul class=\"dropdown-menu\" role=\"menu\">
                                                                    {{ _actions|raw }}
                                                                </ul>
                                                            </li>
                                                        {% else %}
                                                            {{ _actions|raw }}
                                                        {% endif %}
                                                        </ul>
                                                    {% endif %}
                                                {% endblock sonata_admin_content_actions_wrappers %}

                                                {% if _list_filters_actions is not empty %}
                                                    {{ _list_filters_actions|raw }}
                                                {% endif %}
                                            </div>
                                        </div>
                                    </nav>
                                {% endif %}
                            {% endblock sonata_page_content_nav %}
                        {% endblock sonata_page_content_header %}
                    </section>

                    <section class=\"content\">
                        {% block sonata_admin_content %}

                            {% block notice %}
                                {% include 'SonataCoreBundle:FlashMessage:render.html.twig' %}
                            {% endblock notice %}

                            {% if _preview is not empty %}
                                <div class=\"sonata-ba-preview\">{{ _preview|raw }}</div>
                            {% endif %}

                            {% if _content is not empty %}
                                <div class=\"sonata-ba-content\">{{ _content|raw }}</div>
                            {% endif %}

                            {% if _show is not empty %}
                                <div class=\"sonata-ba-show\">{{ _show|raw }}</div>
                            {% endif %}

                            {% if _form is not empty %}
                                <div class=\"sonata-ba-form\">{{ _form|raw }}</div>
                            {% endif %}

                            {% if _list_filters is not empty %}
                                <div class=\"row\">
                                    {{ _list_filters|raw }}
                                </div>
                            {% endif %}

                            {% if _list_table is not empty %}
                                <div class=\"row\">
                                    {{ _list_table|raw }}
                                </div>
                            {% endif %}
                        {% endblock sonata_admin_content %}
                    </section>
                {% endblock sonata_page_content %}
            </div>
        {% endblock sonata_wrapper %}
    </div>

    {% if sonata_admin.adminPool.getOption('use_bootlint') %}
        {% block bootlint %}
            {# Bootlint - https://github.com/twbs/bootlint#in-the-browser #}
            <script type=\"text/javascript\">
                javascript:(function(){var s=document.createElement(\"script\");s.onload=function(){bootlint.showLintReportForCurrentDocument([], {hasProblems: false, problemFree: false});};s.src=\"https://maxcdn.bootstrapcdn.com/bootlint/latest/bootlint.min.js\";document.body.appendChild(s)})();
            </script>
        {% endblock %}
    {% endif %}

    </body>
</html>
", "SonataAdminBundle::standard_layout.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\standard_layout.html.twig");
    }
}
