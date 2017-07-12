<?php

/* EasyAdminBundle:default:list.html.twig */
class __TwigTemplate_6effd25c06c38527697ab092dd1826c63806252e01d769f4499f76971eb8cc61 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'body_class' => array($this, 'block_body_class'),
            'page_title' => array($this, 'block_page_title'),
            'content_header' => array($this, 'block_content_header'),
            'content_title_wrapper' => array($this, 'block_content_title_wrapper'),
            'global_actions' => array($this, 'block_global_actions'),
            'search_action' => array($this, 'block_search_action'),
            'search_form' => array($this, 'block_search_form'),
            'new_action' => array($this, 'block_new_action'),
            'main' => array($this, 'block_main'),
            'table_head' => array($this, 'block_table_head'),
            'table_body' => array($this, 'block_table_body'),
            'item_actions' => array($this, 'block_item_actions'),
            'paginator' => array($this, 'block_paginator'),
            'delete_form' => array($this, 'block_delete_form'),
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 5
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "templates", array()), "layout", array()), "EasyAdminBundle:default:list.html.twig", 5);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7137824e998de08e6ab52070d57a599bcd5716eb1b3a01604245fb8a2aa83ff1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7137824e998de08e6ab52070d57a599bcd5716eb1b3a01604245fb8a2aa83ff1->enter($__internal_7137824e998de08e6ab52070d57a599bcd5716eb1b3a01604245fb8a2aa83ff1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:list.html.twig"));

        $__internal_f296773b0c16f3f5e09dced8443da3d2faf49eb0f9d25697418d9bda0fbe0bb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f296773b0c16f3f5e09dced8443da3d2faf49eb0f9d25697418d9bda0fbe0bb0->enter($__internal_f296773b0c16f3f5e09dced8443da3d2faf49eb0f9d25697418d9bda0fbe0bb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:list.html.twig"));

        // line 1
        $context["_entity_config"] = $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 2
        $context["__internal_7e5b839da07bc88ca9161e0fb2793eec3a98bd3bcf674c43d137e24f79fc0276"] = $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "translation_domain", array());
        // line 3
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()), array(),         // line 2
(isset($context["__internal_7e5b839da07bc88ca9161e0fb2793eec3a98bd3bcf674c43d137e24f79fc0276"]) ? $context["__internal_7e5b839da07bc88ca9161e0fb2793eec3a98bd3bcf674c43d137e24f79fc0276"] : $this->getContext($context, "__internal_7e5b839da07bc88ca9161e0fb2793eec3a98bd3bcf674c43d137e24f79fc0276"))), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(        // line 3
(isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "label", array()), array(),         // line 2
(isset($context["__internal_7e5b839da07bc88ca9161e0fb2793eec3a98bd3bcf674c43d137e24f79fc0276"]) ? $context["__internal_7e5b839da07bc88ca9161e0fb2793eec3a98bd3bcf674c43d137e24f79fc0276"] : $this->getContext($context, "__internal_7e5b839da07bc88ca9161e0fb2793eec3a98bd3bcf674c43d137e24f79fc0276"))));
        // line 7
        $context["_request_parameters"] = twig_array_merge(((array_key_exists("_request_parameters", $context)) ? (_twig_default_filter((isset($context["_request_parameters"]) ? $context["_request_parameters"] : $this->getContext($context, "_request_parameters")), array())) : (array())), array("action" => $this->getAttribute($this->getAttribute(        // line 8
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "action"), "method"), "entity" => $this->getAttribute(        // line 9
(isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()), "menuIndex" => $this->getAttribute($this->getAttribute(        // line 10
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "menuIndex"), "method"), "submenuIndex" => $this->getAttribute($this->getAttribute(        // line 11
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "submenuIndex"), "method"), "sortField" => $this->getAttribute($this->getAttribute(        // line 12
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "sortField", 1 => ""), "method"), "sortDirection" => $this->getAttribute($this->getAttribute(        // line 13
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "sortDirection", 1 => "DESC"), "method"), "page" => $this->getAttribute($this->getAttribute(        // line 14
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "page", 1 => 1), "method")));
        // line 17
        if (("search" == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "action"), "method"))) {
            // line 18
            $context["_request_parameters"] = twig_array_merge((isset($context["_request_parameters"]) ? $context["_request_parameters"] : $this->getContext($context, "_request_parameters")), array("query" => (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "get", array(0 => "query"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "get", array(0 => "query"), "method"), "")) : (""))));
        }
        // line 21
        $context["_request_parameters"] = twig_array_merge((isset($context["_request_parameters"]) ? $context["_request_parameters"] : $this->getContext($context, "_request_parameters")), array("referer" => twig_urlencode_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin", (isset($context["_request_parameters"]) ? $context["_request_parameters"] : $this->getContext($context, "_request_parameters"))))));
        // line 26
        ob_start();
        // line 27
        ob_start();
        // line 28
        echo "    ";
        if (("search" == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "action"), "method"))) {
            // line 29
            echo "        ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice("search.page_title", $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "nbResults", array()), array(), "EasyAdminBundle");
            echo "
    ";
        } else {
            // line 31
            echo "        ";
            $context["_default_title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list.page_title", (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "EasyAdminBundle");
            // line 32
            echo "        ";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "list", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "list", array()), "title", array()), (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")),             // line 2
(isset($context["__internal_7e5b839da07bc88ca9161e0fb2793eec3a98bd3bcf674c43d137e24f79fc0276"]) ? $context["__internal_7e5b839da07bc88ca9161e0fb2793eec3a98bd3bcf674c43d137e24f79fc0276"] : $this->getContext($context, "__internal_7e5b839da07bc88ca9161e0fb2793eec3a98bd3bcf674c43d137e24f79fc0276")))) : (            // line 32
(isset($context["_default_title"]) ? $context["_default_title"] : $this->getContext($context, "_default_title")))), "html", null, true);
            echo "
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        $context["_content_title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 5
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7137824e998de08e6ab52070d57a599bcd5716eb1b3a01604245fb8a2aa83ff1->leave($__internal_7137824e998de08e6ab52070d57a599bcd5716eb1b3a01604245fb8a2aa83ff1_prof);

        
        $__internal_f296773b0c16f3f5e09dced8443da3d2faf49eb0f9d25697418d9bda0fbe0bb0->leave($__internal_f296773b0c16f3f5e09dced8443da3d2faf49eb0f9d25697418d9bda0fbe0bb0_prof);

    }

    // line 23
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_5d62eb45b6a2560e549e1be8221c9f9d23ea8297ba5657120ed8de0d504342ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d62eb45b6a2560e549e1be8221c9f9d23ea8297ba5657120ed8de0d504342ae->enter($__internal_5d62eb45b6a2560e549e1be8221c9f9d23ea8297ba5657120ed8de0d504342ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_e566850ea90a55dfd587207a0be70e0b5f5e5c98704858c5383e6373c0a9ee2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e566850ea90a55dfd587207a0be70e0b5f5e5c98704858c5383e6373c0a9ee2c->enter($__internal_e566850ea90a55dfd587207a0be70e0b5f5e5c98704858c5383e6373c0a9ee2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ("easyadmin-list-" . $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array())), "html", null, true);
        
        $__internal_e566850ea90a55dfd587207a0be70e0b5f5e5c98704858c5383e6373c0a9ee2c->leave($__internal_e566850ea90a55dfd587207a0be70e0b5f5e5c98704858c5383e6373c0a9ee2c_prof);

        
        $__internal_5d62eb45b6a2560e549e1be8221c9f9d23ea8297ba5657120ed8de0d504342ae->leave($__internal_5d62eb45b6a2560e549e1be8221c9f9d23ea8297ba5657120ed8de0d504342ae_prof);

    }

    // line 24
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_d37b453703a1331b127343354921d92fe94e81ed257cb8e00a3c226178bd459c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d37b453703a1331b127343354921d92fe94e81ed257cb8e00a3c226178bd459c->enter($__internal_d37b453703a1331b127343354921d92fe94e81ed257cb8e00a3c226178bd459c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_3fd3cd239a66c8d97d26faae56758986c3a87e91ee606e55cc33db7a5bb0cbe2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fd3cd239a66c8d97d26faae56758986c3a87e91ee606e55cc33db7a5bb0cbe2->enter($__internal_3fd3cd239a66c8d97d26faae56758986c3a87e91ee606e55cc33db7a5bb0cbe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("list list-" . twig_lower_filter($this->env, $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()))), "html", null, true);
        
        $__internal_3fd3cd239a66c8d97d26faae56758986c3a87e91ee606e55cc33db7a5bb0cbe2->leave($__internal_3fd3cd239a66c8d97d26faae56758986c3a87e91ee606e55cc33db7a5bb0cbe2_prof);

        
        $__internal_d37b453703a1331b127343354921d92fe94e81ed257cb8e00a3c226178bd459c->leave($__internal_d37b453703a1331b127343354921d92fe94e81ed257cb8e00a3c226178bd459c_prof);

    }

    // line 37
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_d1a43db1efb1490cbab51b98c3ffe596a76c01aec91ca15fc4cbd1fc465c62a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1a43db1efb1490cbab51b98c3ffe596a76c01aec91ca15fc4cbd1fc465c62a8->enter($__internal_d1a43db1efb1490cbab51b98c3ffe596a76c01aec91ca15fc4cbd1fc465c62a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_55e4f62607e98088787612b37a1909d0f1d7fdb29becf40044be87bd105c28c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55e4f62607e98088787612b37a1909d0f1d7fdb29becf40044be87bd105c28c9->enter($__internal_55e4f62607e98088787612b37a1909d0f1d7fdb29becf40044be87bd105c28c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo strip_tags((isset($context["_content_title"]) ? $context["_content_title"] : $this->getContext($context, "_content_title")));
        
        $__internal_55e4f62607e98088787612b37a1909d0f1d7fdb29becf40044be87bd105c28c9->leave($__internal_55e4f62607e98088787612b37a1909d0f1d7fdb29becf40044be87bd105c28c9_prof);

        
        $__internal_d1a43db1efb1490cbab51b98c3ffe596a76c01aec91ca15fc4cbd1fc465c62a8->leave($__internal_d1a43db1efb1490cbab51b98c3ffe596a76c01aec91ca15fc4cbd1fc465c62a8_prof);

    }

    // line 39
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_c3b9e3e2860dcd75ad779102576c03a37077a5b8bc4757dd97cb9a5f58c5c9ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3b9e3e2860dcd75ad779102576c03a37077a5b8bc4757dd97cb9a5f58c5c9ce->enter($__internal_c3b9e3e2860dcd75ad779102576c03a37077a5b8bc4757dd97cb9a5f58c5c9ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        $__internal_9114118ffc5dba009f889cd5e06ac1123fdebc9aea3bd76bf0a3686180335048 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9114118ffc5dba009f889cd5e06ac1123fdebc9aea3bd76bf0a3686180335048->enter($__internal_9114118ffc5dba009f889cd5e06ac1123fdebc9aea3bd76bf0a3686180335048_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        // line 40
        echo "    <div class=\"row\">
        <div class=\"col-sm-5\">
            ";
        // line 42
        $this->displayBlock('content_title_wrapper', $context, $blocks);
        // line 45
        echo "        </div>

        <div class=\"col-sm-7\">
            <div class=\"global-actions\">
                ";
        // line 49
        $this->displayBlock('global_actions', $context, $blocks);
        // line 90
        echo "            </div>
        </div>
    </div>
";
        
        $__internal_9114118ffc5dba009f889cd5e06ac1123fdebc9aea3bd76bf0a3686180335048->leave($__internal_9114118ffc5dba009f889cd5e06ac1123fdebc9aea3bd76bf0a3686180335048_prof);

        
        $__internal_c3b9e3e2860dcd75ad779102576c03a37077a5b8bc4757dd97cb9a5f58c5c9ce->leave($__internal_c3b9e3e2860dcd75ad779102576c03a37077a5b8bc4757dd97cb9a5f58c5c9ce_prof);

    }

    // line 42
    public function block_content_title_wrapper($context, array $blocks = array())
    {
        $__internal_eec683a1621014727cb76394b91409810bc20262354711d67e71cd702112c8a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eec683a1621014727cb76394b91409810bc20262354711d67e71cd702112c8a0->enter($__internal_eec683a1621014727cb76394b91409810bc20262354711d67e71cd702112c8a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title_wrapper"));

        $__internal_790ffb3d43f5ce08ebce2174beb64f0189fd3983aea5e5a3edbe6e2a1608d814 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_790ffb3d43f5ce08ebce2174beb64f0189fd3983aea5e5a3edbe6e2a1608d814->enter($__internal_790ffb3d43f5ce08ebce2174beb64f0189fd3983aea5e5a3edbe6e2a1608d814_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title_wrapper"));

        // line 43
        echo "                <h1 class=\"title\">";
        echo twig_escape_filter($this->env, (isset($context["_content_title"]) ? $context["_content_title"] : $this->getContext($context, "_content_title")), "html", null, true);
        echo "</h1>
            ";
        
        $__internal_790ffb3d43f5ce08ebce2174beb64f0189fd3983aea5e5a3edbe6e2a1608d814->leave($__internal_790ffb3d43f5ce08ebce2174beb64f0189fd3983aea5e5a3edbe6e2a1608d814_prof);

        
        $__internal_eec683a1621014727cb76394b91409810bc20262354711d67e71cd702112c8a0->leave($__internal_eec683a1621014727cb76394b91409810bc20262354711d67e71cd702112c8a0_prof);

    }

    // line 49
    public function block_global_actions($context, array $blocks = array())
    {
        $__internal_536771a443305e646f2052cefe877b4225a781d9d9f1a86133d385e1febb8505 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_536771a443305e646f2052cefe877b4225a781d9d9f1a86133d385e1febb8505->enter($__internal_536771a443305e646f2052cefe877b4225a781d9d9f1a86133d385e1febb8505_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "global_actions"));

        $__internal_4c955356bf73c3e79f4e6007580c53b7dca0de54f2d34cf0a38b1b44bc62ce65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c955356bf73c3e79f4e6007580c53b7dca0de54f2d34cf0a38b1b44bc62ce65->enter($__internal_4c955356bf73c3e79f4e6007580c53b7dca0de54f2d34cf0a38b1b44bc62ce65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "global_actions"));

        // line 50
        echo "                    ";
        if ($this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->isActionEnabled("list", "search", $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()))) {
            // line 51
            echo "                        ";
            $context["_action"] = $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getActionConfiguration("list", "search", $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()));
            // line 52
            echo "
                        ";
            // line 53
            $this->displayBlock('search_action', $context, $blocks);
            // line 76
            echo "                    ";
        }
        // line 77
        echo "
                    ";
        // line 78
        if ($this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->isActionEnabled("list", "new", $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()))) {
            // line 79
            echo "                        ";
            $context["_action"] = $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getActionConfiguration("list", "new", $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()));
            // line 80
            echo "                        ";
            $this->displayBlock('new_action', $context, $blocks);
            // line 88
            echo "                    ";
        }
        // line 89
        echo "                ";
        
        $__internal_4c955356bf73c3e79f4e6007580c53b7dca0de54f2d34cf0a38b1b44bc62ce65->leave($__internal_4c955356bf73c3e79f4e6007580c53b7dca0de54f2d34cf0a38b1b44bc62ce65_prof);

        
        $__internal_536771a443305e646f2052cefe877b4225a781d9d9f1a86133d385e1febb8505->leave($__internal_536771a443305e646f2052cefe877b4225a781d9d9f1a86133d385e1febb8505_prof);

    }

    // line 53
    public function block_search_action($context, array $blocks = array())
    {
        $__internal_aeec4d3e6e064ebf23dd58b7a778de4457679788c7f38b677190039c15e5aeef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aeec4d3e6e064ebf23dd58b7a778de4457679788c7f38b677190039c15e5aeef->enter($__internal_aeec4d3e6e064ebf23dd58b7a778de4457679788c7f38b677190039c15e5aeef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_action"));

        $__internal_e17232417e637eba16aff695816ea94739b25f279f358f9f1b4f6db36b6aa171 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e17232417e637eba16aff695816ea94739b25f279f358f9f1b4f6db36b6aa171->enter($__internal_e17232417e637eba16aff695816ea94739b25f279f358f9f1b4f6db36b6aa171_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_action"));

        // line 54
        echo "                            <div class=\"form-action ";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["_action"]) ? $context["_action"] : null), "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["_action"]) ? $context["_action"] : null), "css_class", array()), "")) : ("")), "html", null, true);
        echo "\">
                                <form method=\"get\" action=\"";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin");
        echo "\">
                                    ";
        // line 56
        $this->displayBlock('search_form', $context, $blocks);
        // line 73
        echo "                                </form>
                            </div>
                        ";
        
        $__internal_e17232417e637eba16aff695816ea94739b25f279f358f9f1b4f6db36b6aa171->leave($__internal_e17232417e637eba16aff695816ea94739b25f279f358f9f1b4f6db36b6aa171_prof);

        
        $__internal_aeec4d3e6e064ebf23dd58b7a778de4457679788c7f38b677190039c15e5aeef->leave($__internal_aeec4d3e6e064ebf23dd58b7a778de4457679788c7f38b677190039c15e5aeef_prof);

    }

    // line 56
    public function block_search_form($context, array $blocks = array())
    {
        $__internal_b2ed0357de74450e9b222c46177f7a0b7616e0931103e04389f89488b750dbfb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2ed0357de74450e9b222c46177f7a0b7616e0931103e04389f89488b750dbfb->enter($__internal_b2ed0357de74450e9b222c46177f7a0b7616e0931103e04389f89488b750dbfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_form"));

        $__internal_2c899d5182b1671f806c1d8fc0106ab11a4d0196de0bfe1aaa3d27355971888e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c899d5182b1671f806c1d8fc0106ab11a4d0196de0bfe1aaa3d27355971888e->enter($__internal_2c899d5182b1671f806c1d8fc0106ab11a4d0196de0bfe1aaa3d27355971888e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_form"));

        // line 57
        echo "                                        <input type=\"hidden\" name=\"action\" value=\"search\">
                                        <input type=\"hidden\" name=\"entity\" value=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_request_parameters"]) ? $context["_request_parameters"] : $this->getContext($context, "_request_parameters")), "entity", array()), "html", null, true);
        echo "\">
                                        <input type=\"hidden\" name=\"sortField\" value=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_request_parameters"]) ? $context["_request_parameters"] : $this->getContext($context, "_request_parameters")), "sortField", array()), "html", null, true);
        echo "\">
                                        <input type=\"hidden\" name=\"sortDirection\" value=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_request_parameters"]) ? $context["_request_parameters"] : $this->getContext($context, "_request_parameters")), "sortDirection", array()), "html", null, true);
        echo "\">
                                        <input type=\"hidden\" name=\"menuIndex\" value=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_request_parameters"]) ? $context["_request_parameters"] : $this->getContext($context, "_request_parameters")), "menuIndex", array()), "html", null, true);
        echo "\">
                                        <input type=\"hidden\" name=\"submenuIndex\" value=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_request_parameters"]) ? $context["_request_parameters"] : $this->getContext($context, "_request_parameters")), "submenuIndex", array()), "html", null, true);
        echo "\">
                                        <div class=\"input-group\">
                                            <input class=\"form-control\" type=\"search\" name=\"query\" value=\"";
        // line 64
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "get", array(0 => "query"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "get", array(0 => "query"), "method"), "")) : ("")), "html", null, true);
        echo "\">
                                            <span class=\"input-group-btn\">
                                                <button class=\"btn\" type=\"submit\" formtarget=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_action"]) ? $context["_action"] : $this->getContext($context, "_action")), "target", array()), "html", null, true);
        echo "\">
                                                    <i class=\"fa fa-search\"></i>
                                                    <span class=\"hidden-xs hidden-sm\">";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute((isset($context["_action"]) ? $context["_action"] : null), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["_action"]) ? $context["_action"] : null), "label", array()), "action.search")) : ("action.search")), (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")),         // line 2
(isset($context["__internal_7e5b839da07bc88ca9161e0fb2793eec3a98bd3bcf674c43d137e24f79fc0276"]) ? $context["__internal_7e5b839da07bc88ca9161e0fb2793eec3a98bd3bcf674c43d137e24f79fc0276"] : $this->getContext($context, "__internal_7e5b839da07bc88ca9161e0fb2793eec3a98bd3bcf674c43d137e24f79fc0276"))), "html", null, true);
        // line 68
        echo "</span>
                                                </button>
                                            </span>
                                        </div>
                                    ";
        
        $__internal_2c899d5182b1671f806c1d8fc0106ab11a4d0196de0bfe1aaa3d27355971888e->leave($__internal_2c899d5182b1671f806c1d8fc0106ab11a4d0196de0bfe1aaa3d27355971888e_prof);

        
        $__internal_b2ed0357de74450e9b222c46177f7a0b7616e0931103e04389f89488b750dbfb->leave($__internal_b2ed0357de74450e9b222c46177f7a0b7616e0931103e04389f89488b750dbfb_prof);

    }

    // line 80
    public function block_new_action($context, array $blocks = array())
    {
        $__internal_fbd85a6d71f1cd7a461d6bf2a96f4c8f14c52ad87f42c6fe1ef3502d31731641 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbd85a6d71f1cd7a461d6bf2a96f4c8f14c52ad87f42c6fe1ef3502d31731641->enter($__internal_fbd85a6d71f1cd7a461d6bf2a96f4c8f14c52ad87f42c6fe1ef3502d31731641_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "new_action"));

        $__internal_1be78f93a34adacc34f45a7e0010134a7a2c766515904617b07c389a137c1bd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1be78f93a34adacc34f45a7e0010134a7a2c766515904617b07c389a137c1bd8->enter($__internal_1be78f93a34adacc34f45a7e0010134a7a2c766515904617b07c389a137c1bd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "new_action"));

        // line 81
        echo "                            <div class=\"button-action\">
                                <a class=\"";
        // line 82
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["_action"]) ? $context["_action"] : null), "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["_action"]) ? $context["_action"] : null), "css_class", array()), "")) : ("")), "html", null, true);
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin", twig_array_merge((isset($context["_request_parameters"]) ? $context["_request_parameters"] : $this->getContext($context, "_request_parameters")), array("action" => $this->getAttribute((isset($context["_action"]) ? $context["_action"] : $this->getContext($context, "_action")), "name", array())))), "html", null, true);
        echo "\" target=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_action"]) ? $context["_action"] : $this->getContext($context, "_action")), "target", array()), "html", null, true);
        echo "\">
                                    ";
        // line 83
        if ($this->getAttribute((isset($context["_action"]) ? $context["_action"] : $this->getContext($context, "_action")), "icon", array())) {
            echo "<i class=\"fa fa-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_action"]) ? $context["_action"] : $this->getContext($context, "_action")), "icon", array()), "html", null, true);
            echo "\"></i>";
        }
        // line 84
        echo "                                    ";
        echo twig_escape_filter($this->env, ((($this->getAttribute((isset($context["_action"]) ? $context["_action"] : null), "label", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["_action"]) ? $context["_action"] : $this->getContext($context, "_action")), "label", array())))) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["_action"]) ? $context["_action"] : $this->getContext($context, "_action")), "label", array()), (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")),         // line 2
(isset($context["__internal_7e5b839da07bc88ca9161e0fb2793eec3a98bd3bcf674c43d137e24f79fc0276"]) ? $context["__internal_7e5b839da07bc88ca9161e0fb2793eec3a98bd3bcf674c43d137e24f79fc0276"] : $this->getContext($context, "__internal_7e5b839da07bc88ca9161e0fb2793eec3a98bd3bcf674c43d137e24f79fc0276")))) : ("")), "html", null, true);
        // line 84
        echo "
                                </a>
                            </div>
                        ";
        
        $__internal_1be78f93a34adacc34f45a7e0010134a7a2c766515904617b07c389a137c1bd8->leave($__internal_1be78f93a34adacc34f45a7e0010134a7a2c766515904617b07c389a137c1bd8_prof);

        
        $__internal_fbd85a6d71f1cd7a461d6bf2a96f4c8f14c52ad87f42c6fe1ef3502d31731641->leave($__internal_fbd85a6d71f1cd7a461d6bf2a96f4c8f14c52ad87f42c6fe1ef3502d31731641_prof);

    }

    // line 95
    public function block_main($context, array $blocks = array())
    {
        $__internal_23cfe68ff321e6a3979fc4133a72e23a01780f936956e09760809c728181be49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23cfe68ff321e6a3979fc4133a72e23a01780f936956e09760809c728181be49->enter($__internal_23cfe68ff321e6a3979fc4133a72e23a01780f936956e09760809c728181be49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_e4cb82542eb6345334d31df0bc1ffd471ce9120f46a37b050fa934274201b691 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4cb82542eb6345334d31df0bc1ffd471ce9120f46a37b050fa934274201b691->enter($__internal_e4cb82542eb6345334d31df0bc1ffd471ce9120f46a37b050fa934274201b691_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 96
        echo "    ";
        $context["_list_item_actions"] = $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getActionsForItem("list", $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()));
        // line 97
        echo "
    <div class=\"table-responsive\">
    <table class=\"table\">
        <thead>
        ";
        // line 101
        $this->displayBlock('table_head', $context, $blocks);
        // line 128
        echo "        </thead>

        <tbody>
        ";
        // line 131
        $this->displayBlock('table_body', $context, $blocks);
        // line 168
        echo "        </tbody>
    </table>
    </div>

    ";
        // line 172
        $this->displayBlock('paginator', $context, $blocks);
        // line 175
        echo "
    ";
        // line 176
        $this->displayBlock('delete_form', $context, $blocks);
        
        $__internal_e4cb82542eb6345334d31df0bc1ffd471ce9120f46a37b050fa934274201b691->leave($__internal_e4cb82542eb6345334d31df0bc1ffd471ce9120f46a37b050fa934274201b691_prof);

        
        $__internal_23cfe68ff321e6a3979fc4133a72e23a01780f936956e09760809c728181be49->leave($__internal_23cfe68ff321e6a3979fc4133a72e23a01780f936956e09760809c728181be49_prof);

    }

    // line 101
    public function block_table_head($context, array $blocks = array())
    {
        $__internal_8a630592fb2c8b3dbf2cbdfbf85a74c1ebbd65f25800364312fbb43927565640 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a630592fb2c8b3dbf2cbdfbf85a74c1ebbd65f25800364312fbb43927565640->enter($__internal_8a630592fb2c8b3dbf2cbdfbf85a74c1ebbd65f25800364312fbb43927565640_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_head"));

        $__internal_2fd2ea6bebabe346930b101022c603c2eed6fc5fc572b7fb70fbb3e5e6864fe2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fd2ea6bebabe346930b101022c603c2eed6fc5fc572b7fb70fbb3e5e6864fe2->enter($__internal_2fd2ea6bebabe346930b101022c603c2eed6fc5fc572b7fb70fbb3e5e6864fe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_head"));

        // line 102
        echo "            <tr>
                ";
        // line 103
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fields"]) ? $context["fields"] : $this->getContext($context, "fields")));
        foreach ($context['_seq'] as $context["field"] => $context["metadata"]) {
            // line 104
            echo "                    ";
            $context["isSortingField"] = ($this->getAttribute($context["metadata"], "property", array()) == twig_first($this->env, twig_split_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "sortField"), "method"), ".")));
            // line 105
            echo "                    ";
            $context["nextSortDirection"] = (((isset($context["isSortingField"]) ? $context["isSortingField"] : $this->getContext($context, "isSortingField"))) ? (((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "sortDirection"), "method") == "DESC")) ? ("ASC") : ("DESC"))) : ("DESC"));
            // line 106
            echo "                    ";
            $context["_column_label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute($context["metadata"], "label", array())) ? ($this->getAttribute($context["metadata"], "label", array())) : ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize($context["field"]))), (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")),             // line 2
(isset($context["__internal_7e5b839da07bc88ca9161e0fb2793eec3a98bd3bcf674c43d137e24f79fc0276"]) ? $context["__internal_7e5b839da07bc88ca9161e0fb2793eec3a98bd3bcf674c43d137e24f79fc0276"] : $this->getContext($context, "__internal_7e5b839da07bc88ca9161e0fb2793eec3a98bd3bcf674c43d137e24f79fc0276")));
            // line 107
            echo "                    ";
            $context["_column_icon"] = (((isset($context["isSortingField"]) ? $context["isSortingField"] : $this->getContext($context, "isSortingField"))) ? (((((isset($context["nextSortDirection"]) ? $context["nextSortDirection"] : $this->getContext($context, "nextSortDirection")) == "DESC")) ? ("fa-caret-up") : ("fa-caret-down"))) : ("fa-sort"));
            // line 108
            echo "
                    <th data-property-name=\"";
            // line 109
            echo twig_escape_filter($this->env, $this->getAttribute($context["metadata"], "property", array()), "html", null, true);
            echo "\" class=\"";
            echo (((isset($context["isSortingField"]) ? $context["isSortingField"] : $this->getContext($context, "isSortingField"))) ? ("sorted") : (""));
            echo " ";
            echo (($this->getAttribute($context["metadata"], "virtual", array())) ? ("virtual") : (""));
            echo " ";
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($context["metadata"], "dataType", array())), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["metadata"], "css_class", array()), "html", null, true);
            echo "\">
                        ";
            // line 110
            if ($this->getAttribute($context["metadata"], "sortable", array())) {
                // line 111
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin", twig_array_merge((isset($context["_request_parameters"]) ? $context["_request_parameters"] : $this->getContext($context, "_request_parameters")), array("sortField" => $this->getAttribute($context["metadata"], "property", array()), "sortDirection" => (isset($context["nextSortDirection"]) ? $context["nextSortDirection"] : $this->getContext($context, "nextSortDirection"))))), "html", null, true);
                echo "\">
                                <i class=\"fa ";
                // line 112
                echo twig_escape_filter($this->env, (isset($context["_column_icon"]) ? $context["_column_icon"] : $this->getContext($context, "_column_icon")), "html", null, true);
                echo "\"></i>
                                ";
                // line 113
                echo (isset($context["_column_label"]) ? $context["_column_label"] : $this->getContext($context, "_column_label"));
                echo "
                            </a>
                        ";
            } else {
                // line 116
                echo "                            <span>";
                echo (isset($context["_column_label"]) ? $context["_column_label"] : $this->getContext($context, "_column_label"));
                echo "</span>
                        ";
            }
            // line 118
            echo "                    </th>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['field'], $context['metadata'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        echo "
                ";
        // line 121
        if ((twig_length_filter($this->env, (isset($context["_list_item_actions"]) ? $context["_list_item_actions"] : $this->getContext($context, "_list_item_actions"))) > 0)) {
            // line 122
            echo "                    <th>
                        <span>";
            // line 123
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list.row_actions", (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "EasyAdminBundle"), "html", null, true);
            echo "</span>
                    </th>
                ";
        }
        // line 126
        echo "            </tr>
        ";
        
        $__internal_2fd2ea6bebabe346930b101022c603c2eed6fc5fc572b7fb70fbb3e5e6864fe2->leave($__internal_2fd2ea6bebabe346930b101022c603c2eed6fc5fc572b7fb70fbb3e5e6864fe2_prof);

        
        $__internal_8a630592fb2c8b3dbf2cbdfbf85a74c1ebbd65f25800364312fbb43927565640->leave($__internal_8a630592fb2c8b3dbf2cbdfbf85a74c1ebbd65f25800364312fbb43927565640_prof);

    }

    // line 131
    public function block_table_body($context, array $blocks = array())
    {
        $__internal_d1774000b5110dc34e0c208c897c6e96226e8b7271ba292f4c1ccadc484a7141 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1774000b5110dc34e0c208c897c6e96226e8b7271ba292f4c1ccadc484a7141->enter($__internal_d1774000b5110dc34e0c208c897c6e96226e8b7271ba292f4c1ccadc484a7141_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_body"));

        $__internal_a5ba86d6f5a3b5eebedf3154f91fa7c029662aee61ecb8fe843310f07cd21ef6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5ba86d6f5a3b5eebedf3154f91fa7c029662aee61ecb8fe843310f07cd21ef6->enter($__internal_a5ba86d6f5a3b5eebedf3154f91fa7c029662aee61ecb8fe843310f07cd21ef6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_body"));

        // line 132
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "currentPageResults", array()));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 133
            echo "                ";
            // line 134
            echo "                ";
            $context["_item_id"] = ("" . $this->getAttribute($context["item"], $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "primary_key_field_name", array())));
            // line 135
            echo "                <tr data-id=\"";
            echo twig_escape_filter($this->env, (isset($context["_item_id"]) ? $context["_item_id"] : $this->getContext($context, "_item_id")), "html", null, true);
            echo "\">
                    ";
            // line 136
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["fields"]) ? $context["fields"] : $this->getContext($context, "fields")));
            foreach ($context['_seq'] as $context["field"] => $context["metadata"]) {
                // line 137
                echo "                        ";
                $context["isSortingField"] = ($this->getAttribute($context["metadata"], "property", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "sortField"), "method"));
                // line 138
                echo "                        ";
                $context["_column_label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute($context["metadata"], "label", array())) ? ($this->getAttribute($context["metadata"], "label", array())) : ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize($context["field"]))), (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")),                 // line 2
(isset($context["__internal_7e5b839da07bc88ca9161e0fb2793eec3a98bd3bcf674c43d137e24f79fc0276"]) ? $context["__internal_7e5b839da07bc88ca9161e0fb2793eec3a98bd3bcf674c43d137e24f79fc0276"] : $this->getContext($context, "__internal_7e5b839da07bc88ca9161e0fb2793eec3a98bd3bcf674c43d137e24f79fc0276")));
                // line 139
                echo "
                        <td data-label=\"";
                // line 140
                echo twig_escape_filter($this->env, (isset($context["_column_label"]) ? $context["_column_label"] : $this->getContext($context, "_column_label")), "html", null, true);
                echo "\" class=\"";
                echo (((isset($context["isSortingField"]) ? $context["isSortingField"] : $this->getContext($context, "isSortingField"))) ? ("sorted") : (""));
                echo " ";
                echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($context["metadata"], "dataType", array())), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["metadata"], "css_class", array()), "html", null, true);
                echo "\">
                            ";
                // line 141
                echo $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->renderEntityField($this->env, "list", $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()), $context["item"], $context["metadata"]);
                echo "
                        </td>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['field'], $context['metadata'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 144
            echo "
                    ";
            // line 145
            if ((twig_length_filter($this->env, (isset($context["_list_item_actions"]) ? $context["_list_item_actions"] : $this->getContext($context, "_list_item_actions"))) > 0)) {
                // line 146
                echo "                        ";
                $context["_column_label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list.row_actions", (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "EasyAdminBundle");
                // line 147
                echo "                        <td data-label=\"";
                echo twig_escape_filter($this->env, (isset($context["_column_label"]) ? $context["_column_label"] : $this->getContext($context, "_column_label")), "html", null, true);
                echo "\" class=\"actions\">
                        ";
                // line 148
                $this->displayBlock('item_actions', $context, $blocks);
                // line 157
                echo "                        </td>
                    ";
            }
            // line 159
            echo "                </tr>
            ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 161
            echo "                <tr>
                    <td class=\"no-results\" colspan=\"";
            // line 162
            echo twig_escape_filter($this->env, (((twig_length_filter($this->env, (isset($context["_list_item_actions"]) ? $context["_list_item_actions"] : $this->getContext($context, "_list_item_actions"))) > 0)) ? ((twig_length_filter($this->env, (isset($context["fields"]) ? $context["fields"] : $this->getContext($context, "fields"))) + 1)) : (twig_length_filter($this->env, (isset($context["fields"]) ? $context["fields"] : $this->getContext($context, "fields"))))), "html", null, true);
            echo "\">
                        ";
            // line 163
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("search.no_results", (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "EasyAdminBundle"), "html", null, true);
            echo "
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 167
        echo "        ";
        
        $__internal_a5ba86d6f5a3b5eebedf3154f91fa7c029662aee61ecb8fe843310f07cd21ef6->leave($__internal_a5ba86d6f5a3b5eebedf3154f91fa7c029662aee61ecb8fe843310f07cd21ef6_prof);

        
        $__internal_d1774000b5110dc34e0c208c897c6e96226e8b7271ba292f4c1ccadc484a7141->leave($__internal_d1774000b5110dc34e0c208c897c6e96226e8b7271ba292f4c1ccadc484a7141_prof);

    }

    // line 148
    public function block_item_actions($context, array $blocks = array())
    {
        $__internal_ecc3e587f55e124a31cac63fbcd6ba8f2fa51988d5ecb0c76a8585f540fe4b5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecc3e587f55e124a31cac63fbcd6ba8f2fa51988d5ecb0c76a8585f540fe4b5d->enter($__internal_ecc3e587f55e124a31cac63fbcd6ba8f2fa51988d5ecb0c76a8585f540fe4b5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item_actions"));

        $__internal_a7dc32a6a61b74de911256417275a39cf25ca6e13728e7aad4c163289640bd66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7dc32a6a61b74de911256417275a39cf25ca6e13728e7aad4c163289640bd66->enter($__internal_a7dc32a6a61b74de911256417275a39cf25ca6e13728e7aad4c163289640bd66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item_actions"));

        // line 149
        echo "                            ";
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_actions.html.twig", array("actions" =>         // line 150
(isset($context["_list_item_actions"]) ? $context["_list_item_actions"] : $this->getContext($context, "_list_item_actions")), "request_parameters" =>         // line 151
(isset($context["_request_parameters"]) ? $context["_request_parameters"] : $this->getContext($context, "_request_parameters")), "translation_domain" => $this->getAttribute(        // line 152
(isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "translation_domain", array()), "trans_parameters" =>         // line 153
(isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "item_id" =>         // line 154
(isset($context["_item_id"]) ? $context["_item_id"] : $this->getContext($context, "_item_id"))), false);
        // line 155
        echo "
                        ";
        
        $__internal_a7dc32a6a61b74de911256417275a39cf25ca6e13728e7aad4c163289640bd66->leave($__internal_a7dc32a6a61b74de911256417275a39cf25ca6e13728e7aad4c163289640bd66_prof);

        
        $__internal_ecc3e587f55e124a31cac63fbcd6ba8f2fa51988d5ecb0c76a8585f540fe4b5d->leave($__internal_ecc3e587f55e124a31cac63fbcd6ba8f2fa51988d5ecb0c76a8585f540fe4b5d_prof);

    }

    // line 172
    public function block_paginator($context, array $blocks = array())
    {
        $__internal_e37f14ac27972b029a8b384065a404b7f4b8052418c247bf792d8aa2e20bcfed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e37f14ac27972b029a8b384065a404b7f4b8052418c247bf792d8aa2e20bcfed->enter($__internal_e37f14ac27972b029a8b384065a404b7f4b8052418c247bf792d8aa2e20bcfed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "paginator"));

        $__internal_538e1f815529d828995f9a5d788be44b5dbb8d5fed443f54858c85398f6125bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_538e1f815529d828995f9a5d788be44b5dbb8d5fed443f54858c85398f6125bc->enter($__internal_538e1f815529d828995f9a5d788be44b5dbb8d5fed443f54858c85398f6125bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "paginator"));

        // line 173
        echo "        ";
        echo twig_include($this->env, $context, $this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "templates", array()), "paginator", array()));
        echo "
    ";
        
        $__internal_538e1f815529d828995f9a5d788be44b5dbb8d5fed443f54858c85398f6125bc->leave($__internal_538e1f815529d828995f9a5d788be44b5dbb8d5fed443f54858c85398f6125bc_prof);

        
        $__internal_e37f14ac27972b029a8b384065a404b7f4b8052418c247bf792d8aa2e20bcfed->leave($__internal_e37f14ac27972b029a8b384065a404b7f4b8052418c247bf792d8aa2e20bcfed_prof);

    }

    // line 176
    public function block_delete_form($context, array $blocks = array())
    {
        $__internal_6956816a95c40840719bb64edc06d3cea3aef67afe8fe37cf0c5e58a2a6ce012 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6956816a95c40840719bb64edc06d3cea3aef67afe8fe37cf0c5e58a2a6ce012->enter($__internal_6956816a95c40840719bb64edc06d3cea3aef67afe8fe37cf0c5e58a2a6ce012_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

        $__internal_723490b0708588354b90baef06b2fd967f182a1fb9eb1dd77649a0335a4b754c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_723490b0708588354b90baef06b2fd967f182a1fb9eb1dd77649a0335a4b754c->enter($__internal_723490b0708588354b90baef06b2fd967f182a1fb9eb1dd77649a0335a4b754c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

        // line 177
        echo "        ";
        $context["referer"] = ((((($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "currentPage", array()) == $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "nbPages", array())) && (1 != $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "currentPage", array()))) && (1 == $this->getAttribute($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "currentPageResults", array()), "count", array())))) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin", twig_array_merge($this->getAttribute($this->getAttribute(        // line 178
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), array("page" => ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "page"), "method") - 1))))) : ($this->getAttribute($this->getAttribute(        // line 179
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "requestUri", array())));
        // line 181
        echo "
        ";
        // line 182
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_delete_form.html.twig", array("view" => "list", "referer" => twig_urlencode_filter(        // line 184
(isset($context["referer"]) ? $context["referer"] : $this->getContext($context, "referer"))), "delete_form" =>         // line 185
(isset($context["delete_form_template"]) ? $context["delete_form_template"] : $this->getContext($context, "delete_form_template")), "_translation_domain" => $this->getAttribute(        // line 186
(isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "translation_domain", array()), "_trans_parameters" =>         // line 187
(isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "_entity_config" =>         // line 188
(isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config"))), false);
        // line 189
        echo "
    ";
        
        $__internal_723490b0708588354b90baef06b2fd967f182a1fb9eb1dd77649a0335a4b754c->leave($__internal_723490b0708588354b90baef06b2fd967f182a1fb9eb1dd77649a0335a4b754c_prof);

        
        $__internal_6956816a95c40840719bb64edc06d3cea3aef67afe8fe37cf0c5e58a2a6ce012->leave($__internal_6956816a95c40840719bb64edc06d3cea3aef67afe8fe37cf0c5e58a2a6ce012_prof);

    }

    // line 193
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_53b7ae8741f2b987af36d2107bfd2e20a17f1d4db3b09edf84e5d8aaf677bf6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53b7ae8741f2b987af36d2107bfd2e20a17f1d4db3b09edf84e5d8aaf677bf6f->enter($__internal_53b7ae8741f2b987af36d2107bfd2e20a17f1d4db3b09edf84e5d8aaf677bf6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_24b1abc06c699f7d3f8b7299167115c065a0356f6fb9d6cd878c4775a9fc0164 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24b1abc06c699f7d3f8b7299167115c065a0356f6fb9d6cd878c4775a9fc0164->enter($__internal_24b1abc06c699f7d3f8b7299167115c065a0356f6fb9d6cd878c4775a9fc0164_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        // line 194
        echo "    ";
        $this->displayParentBlock("body_javascript", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function() {
            \$('#main').find('table .toggle input[type=\"checkbox\"]').change(function() {
                var toggle = \$(this);
                var newValue = toggle.prop('checked');
                var oldValue = !newValue;

                var columnIndex = \$(this).closest('td').index() + 1;
                var propertyName = \$('table th.toggle:nth-child(' + columnIndex + ')').data('property-name');

                var toggleUrl = \"";
        // line 206
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin", array("action" => "edit", "entity" => $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()), "view" => "list"));
        echo "\"
                              + \"&id=\" + \$(this).closest('tr').data('id')
                              + \"&property=\" + propertyName
                              + \"&newValue=\" + newValue.toString();

                var toggleRequest = \$.ajax({ type: \"GET\", url: toggleUrl, data: {} });

                toggleRequest.done(function(result) {});

                toggleRequest.fail(function() {
                    // in case of error, restore the original value and disable the toggle
                    toggle.bootstrapToggle(oldValue == true ? 'on' : 'off');
                    toggle.bootstrapToggle('disable');
                });
            });

            \$('.action-delete').on('click', function(e) {
                e.preventDefault();
                var id = \$(this).parents('tr').first().data('id');

                \$('#modal-delete').modal({ backdrop: true, keyboard: true })
                    .off('click', '#modal-delete-button')
                    .on('click', '#modal-delete-button', function () {
                        var deleteForm = \$('#delete-form');
                        deleteForm.attr('action', deleteForm.attr('action').replace('__id__', id));
                        deleteForm.trigger('submit');
                    });
            });
        });
    </script>

    ";
        // line 237
        if (("search" == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "action"), "method"))) {
            // line 238
            echo "        <script type=\"text/javascript\">
            var _search_query = \"";
            // line 239
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "get", array(0 => "query"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "get", array(0 => "query"), "method"), "")) : ("")), "js"), "html", null, true);
            echo "\";
            // the original query is prepended to allow matching exact phrases in addition to single words
            \$('#main').find('table tbody').highlight(\$.merge([_search_query], _search_query.split(' ')));
        </script>
    ";
        }
        
        $__internal_24b1abc06c699f7d3f8b7299167115c065a0356f6fb9d6cd878c4775a9fc0164->leave($__internal_24b1abc06c699f7d3f8b7299167115c065a0356f6fb9d6cd878c4775a9fc0164_prof);

        
        $__internal_53b7ae8741f2b987af36d2107bfd2e20a17f1d4db3b09edf84e5d8aaf677bf6f->leave($__internal_53b7ae8741f2b987af36d2107bfd2e20a17f1d4db3b09edf84e5d8aaf677bf6f_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  827 => 239,  824 => 238,  822 => 237,  788 => 206,  772 => 194,  763 => 193,  752 => 189,  750 => 188,  749 => 187,  748 => 186,  747 => 185,  746 => 184,  745 => 182,  742 => 181,  740 => 179,  739 => 178,  737 => 177,  728 => 176,  715 => 173,  706 => 172,  695 => 155,  693 => 154,  692 => 153,  691 => 152,  690 => 151,  689 => 150,  687 => 149,  678 => 148,  668 => 167,  658 => 163,  654 => 162,  651 => 161,  637 => 159,  633 => 157,  631 => 148,  626 => 147,  623 => 146,  621 => 145,  618 => 144,  609 => 141,  599 => 140,  596 => 139,  594 => 2,  592 => 138,  589 => 137,  585 => 136,  580 => 135,  577 => 134,  575 => 133,  556 => 132,  547 => 131,  536 => 126,  530 => 123,  527 => 122,  525 => 121,  522 => 120,  515 => 118,  509 => 116,  503 => 113,  499 => 112,  494 => 111,  492 => 110,  480 => 109,  477 => 108,  474 => 107,  472 => 2,  470 => 106,  467 => 105,  464 => 104,  460 => 103,  457 => 102,  448 => 101,  438 => 176,  435 => 175,  433 => 172,  427 => 168,  425 => 131,  420 => 128,  418 => 101,  412 => 97,  409 => 96,  400 => 95,  387 => 84,  385 => 2,  383 => 84,  377 => 83,  369 => 82,  366 => 81,  357 => 80,  343 => 68,  341 => 2,  340 => 68,  335 => 66,  330 => 64,  325 => 62,  321 => 61,  317 => 60,  313 => 59,  309 => 58,  306 => 57,  297 => 56,  285 => 73,  283 => 56,  279 => 55,  274 => 54,  265 => 53,  255 => 89,  252 => 88,  249 => 80,  246 => 79,  244 => 78,  241 => 77,  238 => 76,  236 => 53,  233 => 52,  230 => 51,  227 => 50,  218 => 49,  205 => 43,  196 => 42,  183 => 90,  181 => 49,  175 => 45,  173 => 42,  169 => 40,  160 => 39,  142 => 37,  124 => 24,  106 => 23,  96 => 5,  89 => 32,  88 => 2,  86 => 32,  83 => 31,  77 => 29,  74 => 28,  72 => 27,  70 => 26,  68 => 21,  65 => 18,  63 => 17,  61 => 14,  60 => 13,  59 => 12,  58 => 11,  57 => 10,  56 => 9,  55 => 8,  54 => 7,  52 => 2,  51 => 3,  50 => 2,  49 => 3,  47 => 2,  45 => 1,  33 => 5,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set _entity_config = easyadmin_entity(app.request.query.get('entity')) %}
{% trans_default_domain _entity_config.translation_domain %}
{% set _trans_parameters = { '%entity_name%': _entity_config.name|trans, '%entity_label%': _entity_config.label|trans } %}

{% extends _entity_config.templates.layout %}

{% set _request_parameters = _request_parameters|default({})|merge({
    action: app.request.get('action'),
    entity: _entity_config.name,
    menuIndex: app.request.get('menuIndex'),
    submenuIndex: app.request.get('submenuIndex'),
    sortField: app.request.get('sortField', ''),
    sortDirection: app.request.get('sortDirection', 'DESC'),
    page: app.request.get('page', 1)
}) %}

{% if 'search' == app.request.get('action') %}
    {% set _request_parameters = _request_parameters|merge({ query: app.request.get('query')|default('') }) %}
{% endif %}

{% set _request_parameters = _request_parameters|merge({ referer: path('easyadmin', _request_parameters)|url_encode }) %}

{% block body_id 'easyadmin-list-' ~ _entity_config.name %}
{% block body_class 'list list-' ~ _entity_config.name|lower %}

{% set _content_title %}
{% spaceless %}
    {% if 'search' == app.request.get('action') %}
        {{ 'search.page_title'|transchoice(paginator.nbResults, {}, 'EasyAdminBundle')|raw }}
    {% else %}
        {% set _default_title = 'list.page_title'|trans(_trans_parameters, 'EasyAdminBundle') %}
        {{ _entity_config.list.title is defined ? _entity_config.list.title|trans(_trans_parameters) : _default_title }}
    {% endif %}
{% endspaceless %}
{% endset %}

{% block page_title %}{{ _content_title|striptags|raw }}{% endblock %}

{% block content_header %}
    <div class=\"row\">
        <div class=\"col-sm-5\">
            {% block content_title_wrapper %}
                <h1 class=\"title\">{{ _content_title }}</h1>
            {% endblock %}
        </div>

        <div class=\"col-sm-7\">
            <div class=\"global-actions\">
                {% block global_actions %}
                    {% if easyadmin_action_is_enabled_for_list_view('search', _entity_config.name) %}
                        {% set _action = easyadmin_get_action_for_list_view('search', _entity_config.name) %}

                        {% block search_action %}
                            <div class=\"form-action {{ _action.css_class|default('') }}\">
                                <form method=\"get\" action=\"{{ path('easyadmin') }}\">
                                    {% block search_form %}
                                        <input type=\"hidden\" name=\"action\" value=\"search\">
                                        <input type=\"hidden\" name=\"entity\" value=\"{{ _request_parameters.entity }}\">
                                        <input type=\"hidden\" name=\"sortField\" value=\"{{ _request_parameters.sortField }}\">
                                        <input type=\"hidden\" name=\"sortDirection\" value=\"{{ _request_parameters.sortDirection }}\">
                                        <input type=\"hidden\" name=\"menuIndex\" value=\"{{ _request_parameters.menuIndex }}\">
                                        <input type=\"hidden\" name=\"submenuIndex\" value=\"{{ _request_parameters.submenuIndex }}\">
                                        <div class=\"input-group\">
                                            <input class=\"form-control\" type=\"search\" name=\"query\" value=\"{{ app.request.get('query')|default('') }}\">
                                            <span class=\"input-group-btn\">
                                                <button class=\"btn\" type=\"submit\" formtarget=\"{{ _action.target }}\">
                                                    <i class=\"fa fa-search\"></i>
                                                    <span class=\"hidden-xs hidden-sm\">{{ _action.label|default('action.search')|trans(_trans_parameters) }}</span>
                                                </button>
                                            </span>
                                        </div>
                                    {% endblock %}
                                </form>
                            </div>
                        {% endblock search_action %}
                    {% endif %}

                    {% if easyadmin_action_is_enabled_for_list_view('new', _entity_config.name) %}
                        {% set _action = easyadmin_get_action_for_list_view('new', _entity_config.name) %}
                        {% block new_action %}
                            <div class=\"button-action\">
                                <a class=\"{{ _action.css_class|default('') }}\" href=\"{{ path('easyadmin', _request_parameters|merge({ action: _action.name })) }}\" target=\"{{ _action.target }}\">
                                    {% if _action.icon %}<i class=\"fa fa-{{ _action.icon }}\"></i>{% endif %}
                                    {{ _action.label is defined and not _action.label is empty ? _action.label|trans(_trans_parameters) }}
                                </a>
                            </div>
                        {% endblock new_action %}
                    {% endif %}
                {% endblock global_actions %}
            </div>
        </div>
    </div>
{% endblock content_header %}

{% block main %}
    {% set _list_item_actions = easyadmin_get_actions_for_list_item(_entity_config.name) %}

    <div class=\"table-responsive\">
    <table class=\"table\">
        <thead>
        {% block table_head %}
            <tr>
                {% for field, metadata in fields %}
                    {% set isSortingField = metadata.property == app.request.get('sortField')|split('.')|first %}
                    {% set nextSortDirection = isSortingField ? (app.request.get('sortDirection') == 'DESC' ? 'ASC' : 'DESC') : 'DESC' %}
                    {% set _column_label = (metadata.label ?: field|humanize)|trans(_trans_parameters) %}
                    {% set _column_icon = isSortingField ? (nextSortDirection == 'DESC' ? 'fa-caret-up' : 'fa-caret-down') : 'fa-sort' %}

                    <th data-property-name=\"{{ metadata.property }}\" class=\"{{ isSortingField ? 'sorted' }} {{ metadata.virtual ? 'virtual' }} {{ metadata.dataType|lower }} {{ metadata.css_class }}\">
                        {% if metadata.sortable %}
                            <a href=\"{{ path('easyadmin', _request_parameters|merge({ sortField: metadata.property, sortDirection: nextSortDirection })) }}\">
                                <i class=\"fa {{ _column_icon }}\"></i>
                                {{ _column_label|raw }}
                            </a>
                        {% else %}
                            <span>{{ _column_label|raw }}</span>
                        {% endif %}
                    </th>
                {% endfor %}

                {% if _list_item_actions|length > 0 %}
                    <th>
                        <span>{{ 'list.row_actions'|trans(_trans_parameters, 'EasyAdminBundle') }}</span>
                    </th>
                {% endif %}
            </tr>
        {% endblock table_head %}
        </thead>

        <tbody>
        {% block table_body %}
            {% for item in paginator.currentPageResults %}
                {# the empty string concatenation is needed when the primary key is an object (e.g. an Uuid object) #}
                {% set _item_id = '' ~ attribute(item, _entity_config.primary_key_field_name) %}
                <tr data-id=\"{{ _item_id }}\">
                    {% for field, metadata in fields %}
                        {% set isSortingField = metadata.property == app.request.get('sortField') %}
                        {% set _column_label =  (metadata.label ?: field|humanize)|trans(_trans_parameters)  %}

                        <td data-label=\"{{ _column_label }}\" class=\"{{ isSortingField ? 'sorted' }} {{ metadata.dataType|lower }} {{ metadata.css_class }}\">
                            {{ easyadmin_render_field_for_list_view(_entity_config.name, item, metadata) }}
                        </td>
                    {% endfor %}

                    {% if _list_item_actions|length > 0 %}
                        {% set _column_label =  'list.row_actions'|trans(_trans_parameters, 'EasyAdminBundle') %}
                        <td data-label=\"{{ _column_label }}\" class=\"actions\">
                        {% block item_actions %}
                            {{ include('@EasyAdmin/default/includes/_actions.html.twig', {
                                actions: _list_item_actions,
                                request_parameters: _request_parameters,
                                translation_domain: _entity_config.translation_domain,
                                trans_parameters: _trans_parameters,
                                item_id: _item_id
                            }, with_context = false) }}
                        {% endblock item_actions %}
                        </td>
                    {% endif %}
                </tr>
            {% else %}
                <tr>
                    <td class=\"no-results\" colspan=\"{{ _list_item_actions|length > 0 ? fields|length + 1 : fields|length }}\">
                        {{ 'search.no_results'|trans(_trans_parameters, 'EasyAdminBundle') }}
                    </td>
                </tr>
            {% endfor %}
        {% endblock table_body %}
        </tbody>
    </table>
    </div>

    {% block paginator %}
        {{ include(_entity_config.templates.paginator) }}
    {% endblock paginator %}

    {% block delete_form %}
        {% set referer = paginator.currentPage == paginator.nbPages and 1 != paginator.currentPage and 1 == paginator.currentPageResults.count
            ? path('easyadmin', app.request.query|merge({ page: app.request.query.get('page') - 1 }))
            : app.request.requestUri
        %}

        {{ include('@EasyAdmin/default/includes/_delete_form.html.twig', {
            view: 'list',
            referer: referer|url_encode,
            delete_form: delete_form_template,
            _translation_domain: _entity_config.translation_domain,
            _trans_parameters: _trans_parameters,
            _entity_config: _entity_config,
        }, with_context = false) }}
    {% endblock delete_form %}
{% endblock main %}

{% block body_javascript %}
    {{ parent() }}

    <script type=\"text/javascript\">
        \$(function() {
            \$('#main').find('table .toggle input[type=\"checkbox\"]').change(function() {
                var toggle = \$(this);
                var newValue = toggle.prop('checked');
                var oldValue = !newValue;

                var columnIndex = \$(this).closest('td').index() + 1;
                var propertyName = \$('table th.toggle:nth-child(' + columnIndex + ')').data('property-name');

                var toggleUrl = \"{{ path('easyadmin', { action: 'edit', entity: _entity_config.name, view: 'list' })|raw }}\"
                              + \"&id=\" + \$(this).closest('tr').data('id')
                              + \"&property=\" + propertyName
                              + \"&newValue=\" + newValue.toString();

                var toggleRequest = \$.ajax({ type: \"GET\", url: toggleUrl, data: {} });

                toggleRequest.done(function(result) {});

                toggleRequest.fail(function() {
                    // in case of error, restore the original value and disable the toggle
                    toggle.bootstrapToggle(oldValue == true ? 'on' : 'off');
                    toggle.bootstrapToggle('disable');
                });
            });

            \$('.action-delete').on('click', function(e) {
                e.preventDefault();
                var id = \$(this).parents('tr').first().data('id');

                \$('#modal-delete').modal({ backdrop: true, keyboard: true })
                    .off('click', '#modal-delete-button')
                    .on('click', '#modal-delete-button', function () {
                        var deleteForm = \$('#delete-form');
                        deleteForm.attr('action', deleteForm.attr('action').replace('__id__', id));
                        deleteForm.trigger('submit');
                    });
            });
        });
    </script>

    {% if 'search' == app.request.get('action') %}
        <script type=\"text/javascript\">
            var _search_query = \"{{ app.request.get('query')|default('')|e('js') }}\";
            // the original query is prepended to allow matching exact phrases in addition to single words
            \$('#main').find('table tbody').highlight(\$.merge([_search_query], _search_query.split(' ')));
        </script>
    {% endif %}
{% endblock %}
", "EasyAdminBundle:default:list.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\javiereguiluz\\easyadmin-bundle\\Resources\\views\\default\\list.html.twig");
    }
}
