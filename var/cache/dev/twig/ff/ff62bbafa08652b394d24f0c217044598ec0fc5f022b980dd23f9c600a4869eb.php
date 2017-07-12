<?php

/* SonataAdminBundle:CRUD:base_show.html.twig */
class __TwigTemplate_fbafdd092cde4b379a2926ba9c06ecf60f42b60046fc39b1a7b3ea832d79550b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'navbar_title' => array($this, 'block_navbar_title'),
            'actions' => array($this, 'block_actions'),
            'tab_menu' => array($this, 'block_tab_menu'),
            'show' => array($this, 'block_show'),
            'show_groups' => array($this, 'block_show_groups'),
            'field_row' => array($this, 'block_field_row'),
            'show_title' => array($this, 'block_show_title'),
            'show_field' => array($this, 'block_show_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:base_show.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_69a9ff47257e48385100a9fc5df03653df3a94e0168b2b6e2f45e2e8732e5a9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69a9ff47257e48385100a9fc5df03653df3a94e0168b2b6e2f45e2e8732e5a9c->enter($__internal_69a9ff47257e48385100a9fc5df03653df3a94e0168b2b6e2f45e2e8732e5a9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show.html.twig"));

        $__internal_46ac86c8985c3499c4eddb4c9508c4ebd0723f580f8df9e9a82a152b739d3470 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46ac86c8985c3499c4eddb4c9508c4ebd0723f580f8df9e9a82a152b739d3470->enter($__internal_46ac86c8985c3499c4eddb4c9508c4ebd0723f580f8df9e9a82a152b739d3470_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_69a9ff47257e48385100a9fc5df03653df3a94e0168b2b6e2f45e2e8732e5a9c->leave($__internal_69a9ff47257e48385100a9fc5df03653df3a94e0168b2b6e2f45e2e8732e5a9c_prof);

        
        $__internal_46ac86c8985c3499c4eddb4c9508c4ebd0723f580f8df9e9a82a152b739d3470->leave($__internal_46ac86c8985c3499c4eddb4c9508c4ebd0723f580f8df9e9a82a152b739d3470_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_e5ec840fd0b50e130447e922250dbddd042ff180ee6151ada42140f17fe9d8d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5ec840fd0b50e130447e922250dbddd042ff180ee6151ada42140f17fe9d8d4->enter($__internal_e5ec840fd0b50e130447e922250dbddd042ff180ee6151ada42140f17fe9d8d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b16b48f797c777aba7fab97382bd1fb848dd2583a6e75561ad6d96dac0936246 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b16b48f797c777aba7fab97382bd1fb848dd2583a6e75561ad6d96dac0936246->enter($__internal_b16b48f797c777aba7fab97382bd1fb848dd2583a6e75561ad6d96dac0936246_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 15
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_show", array("%name%" => twig_truncate_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "toString", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), 15)), "SonataAdminBundle"), "html", null, true);
        echo "
";
        
        $__internal_b16b48f797c777aba7fab97382bd1fb848dd2583a6e75561ad6d96dac0936246->leave($__internal_b16b48f797c777aba7fab97382bd1fb848dd2583a6e75561ad6d96dac0936246_prof);

        
        $__internal_e5ec840fd0b50e130447e922250dbddd042ff180ee6151ada42140f17fe9d8d4->leave($__internal_e5ec840fd0b50e130447e922250dbddd042ff180ee6151ada42140f17fe9d8d4_prof);

    }

    // line 18
    public function block_navbar_title($context, array $blocks = array())
    {
        $__internal_ae369a6ac5269842738f3af200e4e4d510799eb38307a17e28d4b68eff43e06b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae369a6ac5269842738f3af200e4e4d510799eb38307a17e28d4b68eff43e06b->enter($__internal_ae369a6ac5269842738f3af200e4e4d510799eb38307a17e28d4b68eff43e06b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_title"));

        $__internal_451951aebd4f2ce71e25299c46c64bb7c1f6ad62c6953cc0c48ce442ee22a471 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_451951aebd4f2ce71e25299c46c64bb7c1f6ad62c6953cc0c48ce442ee22a471->enter($__internal_451951aebd4f2ce71e25299c46c64bb7c1f6ad62c6953cc0c48ce442ee22a471_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_title"));

        // line 19
        echo "    ";
        $this->displayBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_451951aebd4f2ce71e25299c46c64bb7c1f6ad62c6953cc0c48ce442ee22a471->leave($__internal_451951aebd4f2ce71e25299c46c64bb7c1f6ad62c6953cc0c48ce442ee22a471_prof);

        
        $__internal_ae369a6ac5269842738f3af200e4e4d510799eb38307a17e28d4b68eff43e06b->leave($__internal_ae369a6ac5269842738f3af200e4e4d510799eb38307a17e28d4b68eff43e06b_prof);

    }

    // line 22
    public function block_actions($context, array $blocks = array())
    {
        $__internal_fbfac1f4775fb8d62f87636e2477dde7dd4498a37ff3f86fe73abf13d32a4d9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbfac1f4775fb8d62f87636e2477dde7dd4498a37ff3f86fe73abf13d32a4d9f->enter($__internal_fbfac1f4775fb8d62f87636e2477dde7dd4498a37ff3f86fe73abf13d32a4d9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        $__internal_8a06021ade33da4808c139404a3957fef8f2fc89f6059d7d58daaa78e18c5e20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a06021ade33da4808c139404a3957fef8f2fc89f6059d7d58daaa78e18c5e20->enter($__internal_8a06021ade33da4808c139404a3957fef8f2fc89f6059d7d58daaa78e18c5e20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 23
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_show.html.twig", 23)->display($context);
        
        $__internal_8a06021ade33da4808c139404a3957fef8f2fc89f6059d7d58daaa78e18c5e20->leave($__internal_8a06021ade33da4808c139404a3957fef8f2fc89f6059d7d58daaa78e18c5e20_prof);

        
        $__internal_fbfac1f4775fb8d62f87636e2477dde7dd4498a37ff3f86fe73abf13d32a4d9f->leave($__internal_fbfac1f4775fb8d62f87636e2477dde7dd4498a37ff3f86fe73abf13d32a4d9f_prof);

    }

    // line 26
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_1dc055c2ffe641116d2aba8e1a52910ccc0bc2e6f33b7929f8129772e1691282 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1dc055c2ffe641116d2aba8e1a52910ccc0bc2e6f33b7929f8129772e1691282->enter($__internal_1dc055c2ffe641116d2aba8e1a52910ccc0bc2e6f33b7929f8129772e1691282_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        $__internal_7f42975c12016ff03a40d54749c9929cc7a083850ab9710608b7fdabc88db6b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f42975c12016ff03a40d54749c9929cc7a083850ab9710608b7fdabc88db6b9->enter($__internal_7f42975c12016ff03a40d54749c9929cc7a083850ab9710608b7fdabc88db6b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        // line 27
        echo "    ";
        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute(        // line 29
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
        // line 30
        echo "
";
        
        $__internal_7f42975c12016ff03a40d54749c9929cc7a083850ab9710608b7fdabc88db6b9->leave($__internal_7f42975c12016ff03a40d54749c9929cc7a083850ab9710608b7fdabc88db6b9_prof);

        
        $__internal_1dc055c2ffe641116d2aba8e1a52910ccc0bc2e6f33b7929f8129772e1691282->leave($__internal_1dc055c2ffe641116d2aba8e1a52910ccc0bc2e6f33b7929f8129772e1691282_prof);

    }

    // line 33
    public function block_show($context, array $blocks = array())
    {
        $__internal_2f04c777bffdbaa1efdfc66cc4fb9d31f31c8945947227ee0c5fe4871a0da64c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f04c777bffdbaa1efdfc66cc4fb9d31f31c8945947227ee0c5fe4871a0da64c->enter($__internal_2f04c777bffdbaa1efdfc66cc4fb9d31f31c8945947227ee0c5fe4871a0da64c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show"));

        $__internal_89710ddca8a38981fb3222a25c599044ef226fc9f146fb139e78dd11a96e0bf0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89710ddca8a38981fb3222a25c599044ef226fc9f146fb139e78dd11a96e0bf0->enter($__internal_89710ddca8a38981fb3222a25c599044ef226fc9f146fb139e78dd11a96e0bf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show"));

        // line 34
        echo "    <div class=\"sonata-ba-view\">

        ";
        // line 36
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.show.top", array("admin" => (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "object" => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")))));
        echo "

        ";
        // line 38
        $context["has_tab"] = (((twig_length_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "showtabs", array())) == 1) && ($this->getAttribute(twig_get_array_keys_filter($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "showtabs", array())), 0, array(), "array") != "default")) || (twig_length_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "showtabs", array())) > 1));
        // line 39
        echo "
        ";
        // line 40
        if ((isset($context["has_tab"]) ? $context["has_tab"] : $this->getContext($context, "has_tab"))) {
            // line 41
            echo "            <div class=\"nav-tabs-custom\">
                <ul class=\"nav nav-tabs\" role=\"tablist\">
                    ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "showtabs", array()));
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
            foreach ($context['_seq'] as $context["name"] => $context["show_tab"]) {
                // line 44
                echo "                        <li";
                if ($this->getAttribute($context["loop"], "first", array())) {
                    echo " class=\"active\"";
                }
                echo ">
                            <a href=\"#tab_";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" data-toggle=\"tab\">
                                <i class=\"fa fa-exclamation-circle has-errors hide\" aria-hidden=\"true\"></i>
                                ";
                // line 47
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["show_tab"], "label", array()), array(), (($this->getAttribute($context["show_tab"], "translation_domain", array())) ? ($this->getAttribute($context["show_tab"], "translation_domain", array())) : ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationDomain", array())))), "html", null, true);
                echo "
                            </a>
                        </li>
                    ";
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
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['show_tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "                </ul>

                <div class=\"tab-content\">
                    ";
            // line 54
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "showtabs", array()));
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
            foreach ($context['_seq'] as $context["code"] => $context["show_tab"]) {
                // line 55
                echo "                        <div
                                class=\"tab-pane fade";
                // line 56
                if ($this->getAttribute($context["loop"], "first", array())) {
                    echo " in active";
                }
                echo "\"
                                id=\"tab_";
                // line 57
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\"
                        >
                            <div class=\"box-body  container-fluid\">
                                <div class=\"sonata-ba-collapsed-fields\">
                                    ";
                // line 61
                if (($this->getAttribute($context["show_tab"], "description", array()) != false)) {
                    // line 62
                    echo "                                        <p>";
                    echo $this->getAttribute($context["show_tab"], "description", array());
                    echo "</p>
                                    ";
                }
                // line 64
                echo "
                                    ";
                // line 65
                $context["groups"] = $this->getAttribute($context["show_tab"], "groups", array());
                // line 66
                echo "                                    ";
                $this->displayBlock("show_groups", $context, $blocks);
                echo "
                                </div>
                            </div>
                        </div>
                    ";
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
            unset($context['_seq'], $context['_iterated'], $context['code'], $context['show_tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            echo "                </div>
            </div>
        ";
        } elseif (twig_test_iterable($this->getAttribute(        // line 73
(isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "showtabs", array()))) {
            // line 74
            echo "            ";
            $context["groups"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "showtabs", array()), "default", array()), "groups", array());
            // line 75
            echo "            ";
            $this->displayBlock("show_groups", $context, $blocks);
            echo "
        ";
        }
        // line 77
        echo "
    </div>

    ";
        // line 80
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.show.bottom", array("admin" => (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "object" => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")))));
        echo "
";
        
        $__internal_89710ddca8a38981fb3222a25c599044ef226fc9f146fb139e78dd11a96e0bf0->leave($__internal_89710ddca8a38981fb3222a25c599044ef226fc9f146fb139e78dd11a96e0bf0_prof);

        
        $__internal_2f04c777bffdbaa1efdfc66cc4fb9d31f31c8945947227ee0c5fe4871a0da64c->leave($__internal_2f04c777bffdbaa1efdfc66cc4fb9d31f31c8945947227ee0c5fe4871a0da64c_prof);

    }

    // line 83
    public function block_show_groups($context, array $blocks = array())
    {
        $__internal_3081e76db6dcce88a97bbc2cf7a7a762c1dff1f6e2bc64be084132ca792d5bbe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3081e76db6dcce88a97bbc2cf7a7a762c1dff1f6e2bc64be084132ca792d5bbe->enter($__internal_3081e76db6dcce88a97bbc2cf7a7a762c1dff1f6e2bc64be084132ca792d5bbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_groups"));

        $__internal_e1a5f21f57ca2aee0131883b716d85593d43d3caf71e565f89ce1d54aaec99e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1a5f21f57ca2aee0131883b716d85593d43d3caf71e565f89ce1d54aaec99e5->enter($__internal_e1a5f21f57ca2aee0131883b716d85593d43d3caf71e565f89ce1d54aaec99e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_groups"));

        // line 84
        echo "    <div class=\"row\">
        ";
        // line 85
        $this->displayBlock('field_row', $context, $blocks);
        // line 117
        echo "
    </div>
";
        
        $__internal_e1a5f21f57ca2aee0131883b716d85593d43d3caf71e565f89ce1d54aaec99e5->leave($__internal_e1a5f21f57ca2aee0131883b716d85593d43d3caf71e565f89ce1d54aaec99e5_prof);

        
        $__internal_3081e76db6dcce88a97bbc2cf7a7a762c1dff1f6e2bc64be084132ca792d5bbe->leave($__internal_3081e76db6dcce88a97bbc2cf7a7a762c1dff1f6e2bc64be084132ca792d5bbe_prof);

    }

    // line 85
    public function block_field_row($context, array $blocks = array())
    {
        $__internal_4fdf32980d0701b2b227dd2b2a95996784031c03faf94779c926d17d92ba5c01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fdf32980d0701b2b227dd2b2a95996784031c03faf94779c926d17d92ba5c01->enter($__internal_4fdf32980d0701b2b227dd2b2a95996784031c03faf94779c926d17d92ba5c01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_row"));

        $__internal_9859a26be2e09b64542590bd502af70a7aed6f3a5e57152e56c674810fb968db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9859a26be2e09b64542590bd502af70a7aed6f3a5e57152e56c674810fb968db->enter($__internal_9859a26be2e09b64542590bd502af70a7aed6f3a5e57152e56c674810fb968db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_row"));

        // line 86
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) ? $context["groups"] : $this->getContext($context, "groups")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["code"]) {
            // line 87
            echo "                ";
            $context["show_group"] = $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "showgroups", array()), $context["code"], array(), "array");
            // line 88
            echo "
                <div class=\"";
            // line 89
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["show_group"]) ? $context["show_group"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["show_group"]) ? $context["show_group"] : null), "class", array()), "col-md-12")) : ("col-md-12")), "html", null, true);
            echo " ";
            echo ((((array_key_exists("no_padding", $context)) ? (_twig_default_filter((isset($context["no_padding"]) ? $context["no_padding"] : $this->getContext($context, "no_padding")), false)) : (false))) ? ("nopadding") : (""));
            echo "\">
                    <div class=\"";
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["show_group"]) ? $context["show_group"] : $this->getContext($context, "show_group")), "box_class", array()), "html", null, true);
            echo "\">
                        <div class=\"box-header\">
                            <h4 class=\"box-title\">
                                ";
            // line 93
            $this->displayBlock('show_title', $context, $blocks);
            // line 96
            echo "                            </h4>
                        </div>
                        <div class=\"box-body table-responsive no-padding\">
                            <table class=\"table\">
                                <tbody>
                                ";
            // line 101
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["show_group"]) ? $context["show_group"] : $this->getContext($context, "show_group")), "fields", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["field_name"]) {
                // line 102
                echo "                                    ";
                $this->displayBlock('show_field', $context, $blocks);
                // line 109
                echo "                                ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 110
            echo "                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['code'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 116
        echo "        ";
        
        $__internal_9859a26be2e09b64542590bd502af70a7aed6f3a5e57152e56c674810fb968db->leave($__internal_9859a26be2e09b64542590bd502af70a7aed6f3a5e57152e56c674810fb968db_prof);

        
        $__internal_4fdf32980d0701b2b227dd2b2a95996784031c03faf94779c926d17d92ba5c01->leave($__internal_4fdf32980d0701b2b227dd2b2a95996784031c03faf94779c926d17d92ba5c01_prof);

    }

    // line 93
    public function block_show_title($context, array $blocks = array())
    {
        $__internal_4bcb6e96747a09a4d3fe77079dd27a9ea2be581de69b65a9be36a10ef148c9df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bcb6e96747a09a4d3fe77079dd27a9ea2be581de69b65a9be36a10ef148c9df->enter($__internal_4bcb6e96747a09a4d3fe77079dd27a9ea2be581de69b65a9be36a10ef148c9df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_title"));

        $__internal_e0af68ed8e604bc79b63c232c305e692861dcafa0af7a163608e32e4f5c1e59c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0af68ed8e604bc79b63c232c305e692861dcafa0af7a163608e32e4f5c1e59c->enter($__internal_e0af68ed8e604bc79b63c232c305e692861dcafa0af7a163608e32e4f5c1e59c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_title"));

        // line 94
        echo "                                    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["show_group"]) ? $context["show_group"] : $this->getContext($context, "show_group")), "label", array()), array(), (($this->getAttribute((isset($context["show_group"]) ? $context["show_group"] : null), "translation_domain", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["show_group"]) ? $context["show_group"] : null), "translation_domain", array()), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationDomain", array()))) : ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationDomain", array())))), "html", null, true);
        echo "
                                ";
        
        $__internal_e0af68ed8e604bc79b63c232c305e692861dcafa0af7a163608e32e4f5c1e59c->leave($__internal_e0af68ed8e604bc79b63c232c305e692861dcafa0af7a163608e32e4f5c1e59c_prof);

        
        $__internal_4bcb6e96747a09a4d3fe77079dd27a9ea2be581de69b65a9be36a10ef148c9df->leave($__internal_4bcb6e96747a09a4d3fe77079dd27a9ea2be581de69b65a9be36a10ef148c9df_prof);

    }

    // line 102
    public function block_show_field($context, array $blocks = array())
    {
        $__internal_6d2bf0e1fbeec0fbd0db69945893f1699be6cc8a2cd9f043934dd72cdcc55e24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d2bf0e1fbeec0fbd0db69945893f1699be6cc8a2cd9f043934dd72cdcc55e24->enter($__internal_6d2bf0e1fbeec0fbd0db69945893f1699be6cc8a2cd9f043934dd72cdcc55e24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_field"));

        $__internal_41af597829456f2da48ff63f16ed2f52bacff8c1bc308500f2819a91abf1142c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41af597829456f2da48ff63f16ed2f52bacff8c1bc308500f2819a91abf1142c->enter($__internal_41af597829456f2da48ff63f16ed2f52bacff8c1bc308500f2819a91abf1142c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_field"));

        // line 103
        echo "                                        <tr class=\"sonata-ba-view-container\">
                                            ";
        // line 104
        if ($this->getAttribute((isset($context["elements"]) ? $context["elements"] : null), (isset($context["field_name"]) ? $context["field_name"] : $this->getContext($context, "field_name")), array(), "array", true, true)) {
            // line 105
            echo "                                                ";
            echo $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderViewElement($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), (isset($context["field_name"]) ? $context["field_name"] : $this->getContext($context, "field_name")), array(), "array"), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
            echo "
                                            ";
        }
        // line 107
        echo "                                        </tr>
                                    ";
        
        $__internal_41af597829456f2da48ff63f16ed2f52bacff8c1bc308500f2819a91abf1142c->leave($__internal_41af597829456f2da48ff63f16ed2f52bacff8c1bc308500f2819a91abf1142c_prof);

        
        $__internal_6d2bf0e1fbeec0fbd0db69945893f1699be6cc8a2cd9f043934dd72cdcc55e24->leave($__internal_6d2bf0e1fbeec0fbd0db69945893f1699be6cc8a2cd9f043934dd72cdcc55e24_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  502 => 107,  496 => 105,  494 => 104,  491 => 103,  482 => 102,  469 => 94,  460 => 93,  450 => 116,  431 => 110,  417 => 109,  414 => 102,  397 => 101,  390 => 96,  388 => 93,  382 => 90,  376 => 89,  373 => 88,  370 => 87,  352 => 86,  343 => 85,  331 => 117,  329 => 85,  326 => 84,  317 => 83,  305 => 80,  300 => 77,  294 => 75,  291 => 74,  289 => 73,  285 => 71,  265 => 66,  263 => 65,  260 => 64,  254 => 62,  252 => 61,  243 => 57,  237 => 56,  234 => 55,  217 => 54,  212 => 51,  194 => 47,  187 => 45,  180 => 44,  163 => 43,  159 => 41,  157 => 40,  154 => 39,  152 => 38,  147 => 36,  143 => 34,  134 => 33,  123 => 30,  121 => 29,  119 => 27,  110 => 26,  100 => 23,  91 => 22,  78 => 19,  69 => 18,  56 => 15,  47 => 14,  26 => 12,);
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

{% extends base_template %}

{% block title %}
    {{ \"title_show\"|trans({'%name%': admin.toString(object)|truncate(15) }, 'SonataAdminBundle') }}
{% endblock %}

{% block navbar_title %}
    {{ block('title') }}
{% endblock %}

{%- block actions -%}
    {% include 'SonataAdminBundle:CRUD:action_buttons.html.twig' %}
{%- endblock -%}

{% block tab_menu %}
    {{ knp_menu_render(admin.sidemenu(action), {
        'currentClass' : 'active',
        'template': sonata_admin.adminPool.getTemplate('tab_menu_template')
    }, 'twig') }}
{% endblock %}

{% block show %}
    <div class=\"sonata-ba-view\">

        {{ sonata_block_render_event('sonata.admin.show.top', { 'admin': admin, 'object': object }) }}

        {% set has_tab = (admin.showtabs|length == 1 and admin.showtabs|keys[0] != 'default') or admin.showtabs|length > 1 %}

        {% if has_tab %}
            <div class=\"nav-tabs-custom\">
                <ul class=\"nav nav-tabs\" role=\"tablist\">
                    {% for name, show_tab in admin.showtabs %}
                        <li{% if loop.first %} class=\"active\"{% endif %}>
                            <a href=\"#tab_{{ admin.uniqid }}_{{ loop.index }}\" data-toggle=\"tab\">
                                <i class=\"fa fa-exclamation-circle has-errors hide\" aria-hidden=\"true\"></i>
                                {{ show_tab.label|trans({}, show_tab.translation_domain ?: admin.translationDomain) }}
                            </a>
                        </li>
                    {% endfor %}
                </ul>

                <div class=\"tab-content\">
                    {% for code, show_tab in admin.showtabs %}
                        <div
                                class=\"tab-pane fade{% if loop.first %} in active{% endif %}\"
                                id=\"tab_{{ admin.uniqid }}_{{ loop.index }}\"
                        >
                            <div class=\"box-body  container-fluid\">
                                <div class=\"sonata-ba-collapsed-fields\">
                                    {% if show_tab.description != false %}
                                        <p>{{ show_tab.description|raw }}</p>
                                    {% endif %}

                                    {% set groups = show_tab.groups %}
                                    {{ block('show_groups') }}
                                </div>
                            </div>
                        </div>
                    {% endfor %}
                </div>
            </div>
        {% elseif admin.showtabs is iterable %}
            {% set groups = admin.showtabs.default.groups %}
            {{ block('show_groups') }}
        {% endif %}

    </div>

    {{ sonata_block_render_event('sonata.admin.show.bottom', { 'admin': admin, 'object': object }) }}
{% endblock %}

{% block show_groups %}
    <div class=\"row\">
        {% block field_row %}
            {% for code in groups %}
                {% set show_group = admin.showgroups[code] %}

                <div class=\"{{ show_group.class|default('col-md-12') }} {{ no_padding|default(false) ? 'nopadding' }}\">
                    <div class=\"{{ show_group.box_class }}\">
                        <div class=\"box-header\">
                            <h4 class=\"box-title\">
                                {% block show_title %}
                                    {{ show_group.label|trans({}, show_group.translation_domain|default(admin.translationDomain)) }}
                                {% endblock %}
                            </h4>
                        </div>
                        <div class=\"box-body table-responsive no-padding\">
                            <table class=\"table\">
                                <tbody>
                                {% for field_name in show_group.fields %}
                                    {% block show_field %}
                                        <tr class=\"sonata-ba-view-container\">
                                            {% if elements[field_name] is defined %}
                                                {{ elements[field_name]|render_view_element(object)}}
                                            {% endif %}
                                        </tr>
                                    {% endblock %}
                                {% endfor %}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            {% endfor %}
        {% endblock %}

    </div>
{% endblock %}
", "SonataAdminBundle:CRUD:base_show.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\base_show.html.twig");
    }
}
