<?php

/* EasyAdminBundle:form:bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_5076e7368b364823d5d22bd162b3d07489e5883d31b4c6ae88361cf41dfa25cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("@EasyAdmin/form/bootstrap_3_layout.html.twig", "EasyAdminBundle:form:bootstrap_3_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."@EasyAdmin/form/bootstrap_3_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_start' => array($this, 'block_form_start'),
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_row' => array($this, 'block_form_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'checkbox_radio_row' => array($this, 'block_checkbox_radio_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'reset_row' => array($this, 'block_reset_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c1b0157ca52670d85d695f25b4a6de1104376c1f6e16c7fe217f8af922a20dd6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1b0157ca52670d85d695f25b4a6de1104376c1f6e16c7fe217f8af922a20dd6->enter($__internal_c1b0157ca52670d85d695f25b4a6de1104376c1f6e16c7fe217f8af922a20dd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:form:bootstrap_3_horizontal_layout.html.twig"));

        $__internal_b5141c9a7c9a2ae48083b52a6fc4ab3be4f6ea4440a36e6af16bd081cb0b9907 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5141c9a7c9a2ae48083b52a6fc4ab3be4f6ea4440a36e6af16bd081cb0b9907->enter($__internal_b5141c9a7c9a2ae48083b52a6fc4ab3be4f6ea4440a36e6af16bd081cb0b9907_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:form:bootstrap_3_horizontal_layout.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_start', $context, $blocks);
        // line 7
        echo "
";
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('form_label', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 22
        echo "
";
        // line 24
        echo "
";
        // line 25
        $this->displayBlock('form_row', $context, $blocks);
        // line 52
        echo "
";
        // line 53
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 56
        echo "
";
        // line 57
        $this->displayBlock('radio_row', $context, $blocks);
        // line 60
        echo "
";
        // line 61
        $this->displayBlock('checkbox_radio_row', $context, $blocks);
        // line 72
        echo "
";
        // line 73
        $this->displayBlock('submit_row', $context, $blocks);
        // line 83
        echo "
";
        // line 84
        $this->displayBlock('reset_row', $context, $blocks);
        // line 94
        echo "
";
        // line 95
        $this->displayBlock('form_group_class', $context, $blocks);
        
        $__internal_c1b0157ca52670d85d695f25b4a6de1104376c1f6e16c7fe217f8af922a20dd6->leave($__internal_c1b0157ca52670d85d695f25b4a6de1104376c1f6e16c7fe217f8af922a20dd6_prof);

        
        $__internal_b5141c9a7c9a2ae48083b52a6fc4ab3be4f6ea4440a36e6af16bd081cb0b9907->leave($__internal_b5141c9a7c9a2ae48083b52a6fc4ab3be4f6ea4440a36e6af16bd081cb0b9907_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_884847f5a84ba9c9fc78a04fc3d311a5d6931ede4dcf4d93ea1cbb5d9d0b9de5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_884847f5a84ba9c9fc78a04fc3d311a5d6931ede4dcf4d93ea1cbb5d9d0b9de5->enter($__internal_884847f5a84ba9c9fc78a04fc3d311a5d6931ede4dcf4d93ea1cbb5d9d0b9de5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_973e06a0d585892f369002a620e5b8b54c6c0c1a513cca0f41eaaeda0912546b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_973e06a0d585892f369002a620e5b8b54c6c0c1a513cca0f41eaaeda0912546b->enter($__internal_973e06a0d585892f369002a620e5b8b54c6c0c1a513cca0f41eaaeda0912546b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["_easyadmin_form_type"] = "horizontal";
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_973e06a0d585892f369002a620e5b8b54c6c0c1a513cca0f41eaaeda0912546b->leave($__internal_973e06a0d585892f369002a620e5b8b54c6c0c1a513cca0f41eaaeda0912546b_prof);

        
        $__internal_884847f5a84ba9c9fc78a04fc3d311a5d6931ede4dcf4d93ea1cbb5d9d0b9de5->leave($__internal_884847f5a84ba9c9fc78a04fc3d311a5d6931ede4dcf4d93ea1cbb5d9d0b9de5_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_5f40fa668a740044ac22f226a492a33edafcfa4144ed0b87d0a0d0e4e3012b45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f40fa668a740044ac22f226a492a33edafcfa4144ed0b87d0a0d0e4e3012b45->enter($__internal_5f40fa668a740044ac22f226a492a33edafcfa4144ed0b87d0a0d0e4e3012b45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_d37dc3de8459f13f90512088dfd3486a2612a654a75b9a5cfc9840a522f7e93f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d37dc3de8459f13f90512088dfd3486a2612a654a75b9a5cfc9840a522f7e93f->enter($__internal_d37dc3de8459f13f90512088dfd3486a2612a654a75b9a5cfc9840a522f7e93f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 11
        ob_start();
        // line 12
        echo "    ";
        if (((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) {
            // line 13
            echo "        <div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>
    ";
        } else {
            // line 15
            echo "        ";
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 16
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_d37dc3de8459f13f90512088dfd3486a2612a654a75b9a5cfc9840a522f7e93f->leave($__internal_d37dc3de8459f13f90512088dfd3486a2612a654a75b9a5cfc9840a522f7e93f_prof);

        
        $__internal_5f40fa668a740044ac22f226a492a33edafcfa4144ed0b87d0a0d0e4e3012b45->leave($__internal_5f40fa668a740044ac22f226a492a33edafcfa4144ed0b87d0a0d0e4e3012b45_prof);

    }

    // line 21
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_7a527eab60a519796fea26b13e6a36e481fb85b1de3d1ea366db1d6776edb8d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a527eab60a519796fea26b13e6a36e481fb85b1de3d1ea366db1d6776edb8d2->enter($__internal_7a527eab60a519796fea26b13e6a36e481fb85b1de3d1ea366db1d6776edb8d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_2b15395321a528f18516e7ce99463b82b8e787ef7fdfca33cc9720f41b5817cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b15395321a528f18516e7ce99463b82b8e787ef7fdfca33cc9720f41b5817cc->enter($__internal_2b15395321a528f18516e7ce99463b82b8e787ef7fdfca33cc9720f41b5817cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        echo "col-sm-2";
        
        $__internal_2b15395321a528f18516e7ce99463b82b8e787ef7fdfca33cc9720f41b5817cc->leave($__internal_2b15395321a528f18516e7ce99463b82b8e787ef7fdfca33cc9720f41b5817cc_prof);

        
        $__internal_7a527eab60a519796fea26b13e6a36e481fb85b1de3d1ea366db1d6776edb8d2->leave($__internal_7a527eab60a519796fea26b13e6a36e481fb85b1de3d1ea366db1d6776edb8d2_prof);

    }

    // line 25
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_6a7411fa3de3c5259e29be0f5179919e07605ecfdf7cdf1085c3fd5134bbe303 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a7411fa3de3c5259e29be0f5179919e07605ecfdf7cdf1085c3fd5134bbe303->enter($__internal_6a7411fa3de3c5259e29be0f5179919e07605ecfdf7cdf1085c3fd5134bbe303_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_65e693ed06033a6e4f8026776885c56fb8ee16d7876be06d78756ad3e43b0acf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65e693ed06033a6e4f8026776885c56fb8ee16d7876be06d78756ad3e43b0acf->enter($__internal_65e693ed06033a6e4f8026776885c56fb8ee16d7876be06d78756ad3e43b0acf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 26
        ob_start();
        // line 27
        echo "    ";
        $context["_field_type"] = (($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "fieldType", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "fieldType", array()), "default")) : ("default"));
        // line 28
        echo "    <div class=\"form-group ";
        if ((( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) ? $context["force_error"] : $this->getContext($context, "force_error")), false)) : (false))) &&  !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid")))) {
            echo "has-error";
        }
        echo " field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, (isset($context["block_prefixes"]) ? $context["block_prefixes"] : $this->getContext($context, "block_prefixes")),  -2)), "html", null, true);
        echo "\">
        ";
        // line 29
        $context["_field_label"] = (($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "label", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "label", array(), "array"), null)) : (null));
        // line 30
        echo "        ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("translation_domain" => $this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "translation_domain", array())) + (twig_test_empty($_label_ = (isset($context["_field_label"]) ? $context["_field_label"] : $this->getContext($context, "_field_label"))) ? array() : array("label" => $_label_)));
        echo "
        <div class=\"";
        // line 31
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "

            ";
        // line 34
        if ((twig_in_filter((isset($context["_field_type"]) ? $context["_field_type"] : $this->getContext($context, "_field_type")), array(0 => "datetime", 1 => "date", 2 => "time", 3 => "birthday")) && (($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "nullable", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "nullable", array()), false)) : (false)))) {
            // line 35
            echo "                <div class=\"nullable-control\">
                    <label>
                        <input type=\"checkbox\" ";
            // line 37
            if ((null === (isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")))) {
                echo "checked=\"checked\"";
            }
            echo ">
                        ";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.nullable_field", array(), "EasyAdminBundle"), "html", null, true);
            echo "
                    </label>
                </div>
            ";
        }
        // line 42
        echo "
            ";
        // line 43
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

            ";
        // line 45
        if (((($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "help", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "help", array()), "")) : ("")) != "")) {
            // line 46
            echo "                <span class=\"help-block\"><i class=\"fa fa-info-circle\"></i> ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "field", array()), "help", array()), array(), $this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "translation_domain", array()));
            echo "</span>
            ";
        }
        // line 48
        echo "        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_65e693ed06033a6e4f8026776885c56fb8ee16d7876be06d78756ad3e43b0acf->leave($__internal_65e693ed06033a6e4f8026776885c56fb8ee16d7876be06d78756ad3e43b0acf_prof);

        
        $__internal_6a7411fa3de3c5259e29be0f5179919e07605ecfdf7cdf1085c3fd5134bbe303->leave($__internal_6a7411fa3de3c5259e29be0f5179919e07605ecfdf7cdf1085c3fd5134bbe303_prof);

    }

    // line 53
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_a50fd3462b91d10e68626e32f816e3f20af1d9dfbc3770bb1dd30311f4507279 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a50fd3462b91d10e68626e32f816e3f20af1d9dfbc3770bb1dd30311f4507279->enter($__internal_a50fd3462b91d10e68626e32f816e3f20af1d9dfbc3770bb1dd30311f4507279_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_d48fc67cc8af3b7cb3862cd6019af01d380832b34ee128c93bb8b71a6507e0ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d48fc67cc8af3b7cb3862cd6019af01d380832b34ee128c93bb8b71a6507e0ea->enter($__internal_d48fc67cc8af3b7cb3862cd6019af01d380832b34ee128c93bb8b71a6507e0ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 54
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_d48fc67cc8af3b7cb3862cd6019af01d380832b34ee128c93bb8b71a6507e0ea->leave($__internal_d48fc67cc8af3b7cb3862cd6019af01d380832b34ee128c93bb8b71a6507e0ea_prof);

        
        $__internal_a50fd3462b91d10e68626e32f816e3f20af1d9dfbc3770bb1dd30311f4507279->leave($__internal_a50fd3462b91d10e68626e32f816e3f20af1d9dfbc3770bb1dd30311f4507279_prof);

    }

    // line 57
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_74e6f326edf8eb080489733f570fd880f0f156e7bc8c80d9ae37fa7a3ee67611 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74e6f326edf8eb080489733f570fd880f0f156e7bc8c80d9ae37fa7a3ee67611->enter($__internal_74e6f326edf8eb080489733f570fd880f0f156e7bc8c80d9ae37fa7a3ee67611_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_7d35ec0497cb40b3dbf31d2eef137ef7a8138a9fe3d0fe32d799d95de533fd0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d35ec0497cb40b3dbf31d2eef137ef7a8138a9fe3d0fe32d799d95de533fd0b->enter($__internal_7d35ec0497cb40b3dbf31d2eef137ef7a8138a9fe3d0fe32d799d95de533fd0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 58
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_7d35ec0497cb40b3dbf31d2eef137ef7a8138a9fe3d0fe32d799d95de533fd0b->leave($__internal_7d35ec0497cb40b3dbf31d2eef137ef7a8138a9fe3d0fe32d799d95de533fd0b_prof);

        
        $__internal_74e6f326edf8eb080489733f570fd880f0f156e7bc8c80d9ae37fa7a3ee67611->leave($__internal_74e6f326edf8eb080489733f570fd880f0f156e7bc8c80d9ae37fa7a3ee67611_prof);

    }

    // line 61
    public function block_checkbox_radio_row($context, array $blocks = array())
    {
        $__internal_fc5cf4e7915e46b0452b322278f861347bb6e43ae52f3fc21953dd67236cafc3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc5cf4e7915e46b0452b322278f861347bb6e43ae52f3fc21953dd67236cafc3->enter($__internal_fc5cf4e7915e46b0452b322278f861347bb6e43ae52f3fc21953dd67236cafc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        $__internal_d21dbb05eb4a0881700d2af87ebc6bbf8f3d20b8b6bc517d6aadf944029dd9cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d21dbb05eb4a0881700d2af87ebc6bbf8f3d20b8b6bc517d6aadf944029dd9cd->enter($__internal_d21dbb05eb4a0881700d2af87ebc6bbf8f3d20b8b6bc517d6aadf944029dd9cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        // line 62
        ob_start();
        // line 63
        echo "    <div class=\"form-group ";
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            echo "has-error";
        }
        echo " field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, (isset($context["block_prefixes"]) ? $context["block_prefixes"] : $this->getContext($context, "block_prefixes")),  -2)), "html", null, true);
        echo "\">
        <div class=\"";
        // line 64
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 65
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 66
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 67
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_d21dbb05eb4a0881700d2af87ebc6bbf8f3d20b8b6bc517d6aadf944029dd9cd->leave($__internal_d21dbb05eb4a0881700d2af87ebc6bbf8f3d20b8b6bc517d6aadf944029dd9cd_prof);

        
        $__internal_fc5cf4e7915e46b0452b322278f861347bb6e43ae52f3fc21953dd67236cafc3->leave($__internal_fc5cf4e7915e46b0452b322278f861347bb6e43ae52f3fc21953dd67236cafc3_prof);

    }

    // line 73
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_ddff3d7cf60ac7745f1573036c474c9792129a98fa1e09f449ded1263abe7901 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddff3d7cf60ac7745f1573036c474c9792129a98fa1e09f449ded1263abe7901->enter($__internal_ddff3d7cf60ac7745f1573036c474c9792129a98fa1e09f449ded1263abe7901_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_d3ac506d2f5912bbae1ae66205efdea11ec6c728b52d84cc2c81c4cfb14a7bd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3ac506d2f5912bbae1ae66205efdea11ec6c728b52d84cc2c81c4cfb14a7bd9->enter($__internal_d3ac506d2f5912bbae1ae66205efdea11ec6c728b52d84cc2c81c4cfb14a7bd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 74
        ob_start();
        // line 75
        echo "    <div class=\"form-group field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, (isset($context["block_prefixes"]) ? $context["block_prefixes"] : $this->getContext($context, "block_prefixes")),  -2)), "html", null, true);
        echo "\">
        <div class=\"";
        // line 76
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 77
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 78
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_d3ac506d2f5912bbae1ae66205efdea11ec6c728b52d84cc2c81c4cfb14a7bd9->leave($__internal_d3ac506d2f5912bbae1ae66205efdea11ec6c728b52d84cc2c81c4cfb14a7bd9_prof);

        
        $__internal_ddff3d7cf60ac7745f1573036c474c9792129a98fa1e09f449ded1263abe7901->leave($__internal_ddff3d7cf60ac7745f1573036c474c9792129a98fa1e09f449ded1263abe7901_prof);

    }

    // line 84
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_9379dfadd1fb264046e53de6ce0be15b4cdd6de2ec9c6a1ed83aa74f01b3a1da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9379dfadd1fb264046e53de6ce0be15b4cdd6de2ec9c6a1ed83aa74f01b3a1da->enter($__internal_9379dfadd1fb264046e53de6ce0be15b4cdd6de2ec9c6a1ed83aa74f01b3a1da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_4c21baf27cf822e0eaf12c8aeefc9583b16813c883afec9b1b19273f1d79de7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c21baf27cf822e0eaf12c8aeefc9583b16813c883afec9b1b19273f1d79de7c->enter($__internal_4c21baf27cf822e0eaf12c8aeefc9583b16813c883afec9b1b19273f1d79de7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 85
        ob_start();
        // line 86
        echo "    <div class=\"form-group\">
        <div class=\"";
        // line 87
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 88
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 89
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_4c21baf27cf822e0eaf12c8aeefc9583b16813c883afec9b1b19273f1d79de7c->leave($__internal_4c21baf27cf822e0eaf12c8aeefc9583b16813c883afec9b1b19273f1d79de7c_prof);

        
        $__internal_9379dfadd1fb264046e53de6ce0be15b4cdd6de2ec9c6a1ed83aa74f01b3a1da->leave($__internal_9379dfadd1fb264046e53de6ce0be15b4cdd6de2ec9c6a1ed83aa74f01b3a1da_prof);

    }

    // line 95
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_114bd4e1ca9ca45d2c8500b6a6693c32b4ada478889a031c9359629b9aceed05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_114bd4e1ca9ca45d2c8500b6a6693c32b4ada478889a031c9359629b9aceed05->enter($__internal_114bd4e1ca9ca45d2c8500b6a6693c32b4ada478889a031c9359629b9aceed05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_ac6acc4853c7a8d543d4b488165dc820f1b6a71a7c8b5c01ddd4e8ce60af9e99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac6acc4853c7a8d543d4b488165dc820f1b6a71a7c8b5c01ddd4e8ce60af9e99->enter($__internal_ac6acc4853c7a8d543d4b488165dc820f1b6a71a7c8b5c01ddd4e8ce60af9e99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        echo "col-sm-10";
        
        $__internal_ac6acc4853c7a8d543d4b488165dc820f1b6a71a7c8b5c01ddd4e8ce60af9e99->leave($__internal_ac6acc4853c7a8d543d4b488165dc820f1b6a71a7c8b5c01ddd4e8ce60af9e99_prof);

        
        $__internal_114bd4e1ca9ca45d2c8500b6a6693c32b4ada478889a031c9359629b9aceed05->leave($__internal_114bd4e1ca9ca45d2c8500b6a6693c32b4ada478889a031c9359629b9aceed05_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:form:bootstrap_3_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  433 => 95,  418 => 89,  414 => 88,  410 => 87,  407 => 86,  405 => 85,  396 => 84,  381 => 78,  377 => 77,  373 => 76,  368 => 75,  366 => 74,  357 => 73,  342 => 67,  338 => 66,  334 => 65,  330 => 64,  321 => 63,  319 => 62,  310 => 61,  300 => 58,  291 => 57,  281 => 54,  272 => 53,  259 => 48,  253 => 46,  251 => 45,  246 => 43,  243 => 42,  236 => 38,  230 => 37,  226 => 35,  224 => 34,  219 => 32,  215 => 31,  210 => 30,  208 => 29,  199 => 28,  196 => 27,  194 => 26,  185 => 25,  167 => 21,  155 => 16,  152 => 15,  146 => 13,  143 => 12,  141 => 11,  132 => 10,  122 => 5,  120 => 4,  111 => 3,  101 => 95,  98 => 94,  96 => 84,  93 => 83,  91 => 73,  88 => 72,  86 => 61,  83 => 60,  81 => 57,  78 => 56,  76 => 53,  73 => 52,  71 => 25,  68 => 24,  65 => 22,  63 => 21,  60 => 20,  58 => 10,  55 => 9,  52 => 7,  50 => 3,  47 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"@EasyAdmin/form/bootstrap_3_layout.html.twig\" %}

{% block form_start -%}
    {% set _easyadmin_form_type = 'horizontal' %}
    {{- parent() -}}
{%- endblock form_start %}

{# Labels #}

{% block form_label -%}
{% spaceless %}
    {% if label is same as(false) %}
        <div class=\"{{ block('form_label_class') }}\"></div>
    {% else %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) %}
        {{- parent() -}}
    {% endif %}
{% endspaceless %}
{%- endblock form_label %}

{% block form_label_class 'col-sm-2' %}

{# Rows #}

{% block form_row -%}
{% spaceless %}
    {% set _field_type = easyadmin.field.fieldType|default('default') %}
    <div class=\"form-group {% if (not compound or force_error|default(false)) and not valid %}has-error{% endif %} field-{{ block_prefixes|slice(-2)|first }}\">
        {% set _field_label = easyadmin.field['label']|default(null) %}
        {{ form_label(form, _field_label, { translation_domain: easyadmin.entity.translation_domain }) }}
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}

            {% if _field_type in ['datetime', 'date', 'time', 'birthday'] and easyadmin.field.nullable|default(false) %}
                <div class=\"nullable-control\">
                    <label>
                        <input type=\"checkbox\" {% if data is null %}checked=\"checked\"{% endif %}>
                        {{ 'label.nullable_field'|trans({}, 'EasyAdminBundle')}}
                    </label>
                </div>
            {% endif %}

            {{ form_errors(form) }}

            {% if easyadmin.field.help|default('') != '' %}
                <span class=\"help-block\"><i class=\"fa fa-info-circle\"></i> {{ easyadmin.field.help|trans(domain = easyadmin.entity.translation_domain)|raw }}</span>
            {% endif %}
        </div>
    </div>
{% endspaceless %}
{%- endblock form_row %}

{% block checkbox_row -%}
    {{- block('checkbox_radio_row') -}}
{%- endblock checkbox_row %}

{% block radio_row -%}
    {{- block('checkbox_radio_row') -}}
{%- endblock radio_row %}

{% block checkbox_radio_row -%}
{% spaceless %}
    <div class=\"form-group {% if not valid %}has-error{% endif %} field-{{ block_prefixes|slice(-2)|first }}\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{% endspaceless %}
{%- endblock checkbox_radio_row %}

{% block submit_row -%}
{% spaceless %}
    <div class=\"form-group field-{{ block_prefixes|slice(-2)|first }}\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
        </div>
    </div>
{% endspaceless %}
{% endblock submit_row %}

{% block reset_row -%}
{% spaceless %}
    <div class=\"form-group\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
        </div>
    </div>
{% endspaceless %}
{% endblock reset_row %}

{% block form_group_class 'col-sm-10' %}
", "EasyAdminBundle:form:bootstrap_3_horizontal_layout.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\javiereguiluz\\easyadmin-bundle\\Resources\\views\\form\\bootstrap_3_horizontal_layout.html.twig");
    }
}
