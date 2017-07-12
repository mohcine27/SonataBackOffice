<?php

/* SonataAdminBundle:Form:filter_admin_fields.html.twig */
class __TwigTemplate_e8d9ef0114e80a6fdad76cfb15254288af28ef0173c21056d48a0f744eea01ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("form_div_layout.html.twig", "SonataAdminBundle:Form:filter_admin_fields.html.twig", 12);
        $this->blocks = array(
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'sonata_type_model_autocomplete_widget' => array($this, 'block_sonata_type_model_autocomplete_widget'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_572eac9b2bfc725ef53a18610f5dfd9d723825f0ca3155329756c716e2114df2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_572eac9b2bfc725ef53a18610f5dfd9d723825f0ca3155329756c716e2114df2->enter($__internal_572eac9b2bfc725ef53a18610f5dfd9d723825f0ca3155329756c716e2114df2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Form:filter_admin_fields.html.twig"));

        $__internal_e82ccd80e38ede7a749e4989b79dff32b8268e4a200b7e141f14bce83f6c3259 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e82ccd80e38ede7a749e4989b79dff32b8268e4a200b7e141f14bce83f6c3259->enter($__internal_e82ccd80e38ede7a749e4989b79dff32b8268e4a200b7e141f14bce83f6c3259_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Form:filter_admin_fields.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_572eac9b2bfc725ef53a18610f5dfd9d723825f0ca3155329756c716e2114df2->leave($__internal_572eac9b2bfc725ef53a18610f5dfd9d723825f0ca3155329756c716e2114df2_prof);

        
        $__internal_e82ccd80e38ede7a749e4989b79dff32b8268e4a200b7e141f14bce83f6c3259->leave($__internal_e82ccd80e38ede7a749e4989b79dff32b8268e4a200b7e141f14bce83f6c3259_prof);

    }

    // line 18
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_ff98016d03289a6a3f13b8020d68f1dbf189763ae4aa8c45091dc5d820735c23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff98016d03289a6a3f13b8020d68f1dbf189763ae4aa8c45091dc5d820735c23->enter($__internal_ff98016d03289a6a3f13b8020d68f1dbf189763ae4aa8c45091dc5d820735c23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_590ba06a36c2722681d753d00ca6fac555a3c3d20c4b3a44b1d757ca6fe85e08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_590ba06a36c2722681d753d00ca6fac555a3c3d20c4b3a44b1d757ca6fe85e08->enter($__internal_590ba06a36c2722681d753d00ca6fac555a3c3d20c4b3a44b1d757ca6fe85e08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 19
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control")));
        // line 20
        echo "    ";
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        echo "
";
        
        $__internal_590ba06a36c2722681d753d00ca6fac555a3c3d20c4b3a44b1d757ca6fe85e08->leave($__internal_590ba06a36c2722681d753d00ca6fac555a3c3d20c4b3a44b1d757ca6fe85e08_prof);

        
        $__internal_ff98016d03289a6a3f13b8020d68f1dbf189763ae4aa8c45091dc5d820735c23->leave($__internal_ff98016d03289a6a3f13b8020d68f1dbf189763ae4aa8c45091dc5d820735c23_prof);

    }

    // line 23
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_3841ce7d6916dc6647f3838fbcf39608972d945c2b9f7a68ddebf84b2d295a4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3841ce7d6916dc6647f3838fbcf39608972d945c2b9f7a68ddebf84b2d295a4e->enter($__internal_3841ce7d6916dc6647f3838fbcf39608972d945c2b9f7a68ddebf84b2d295a4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_3261de346cdf11e3bcf1f28c52db293d5e099fbe3037906f2d230b2a6029aac5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3261de346cdf11e3bcf1f28c52db293d5e099fbe3037906f2d230b2a6029aac5->enter($__internal_3261de346cdf11e3bcf1f28c52db293d5e099fbe3037906f2d230b2a6029aac5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 24
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control")));
        // line 25
        echo "    ";
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        echo "
";
        
        $__internal_3261de346cdf11e3bcf1f28c52db293d5e099fbe3037906f2d230b2a6029aac5->leave($__internal_3261de346cdf11e3bcf1f28c52db293d5e099fbe3037906f2d230b2a6029aac5_prof);

        
        $__internal_3841ce7d6916dc6647f3838fbcf39608972d945c2b9f7a68ddebf84b2d295a4e->leave($__internal_3841ce7d6916dc6647f3838fbcf39608972d945c2b9f7a68ddebf84b2d295a4e_prof);

    }

    // line 28
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_c154f9c95757784cfeb2dd9e4ad72654e6488f445826322ca7f5c8c8a1234534 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c154f9c95757784cfeb2dd9e4ad72654e6488f445826322ca7f5c8c8a1234534->enter($__internal_c154f9c95757784cfeb2dd9e4ad72654e6488f445826322ca7f5c8c8a1234534_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_9f6b250419f0372a291c5556ed5e80669202ec43da827cc58adea21b8000442e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f6b250419f0372a291c5556ed5e80669202ec43da827cc58adea21b8000442e->enter($__internal_9f6b250419f0372a291c5556ed5e80669202ec43da827cc58adea21b8000442e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 29
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control")));
        // line 30
        echo "    ";
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        echo "
";
        
        $__internal_9f6b250419f0372a291c5556ed5e80669202ec43da827cc58adea21b8000442e->leave($__internal_9f6b250419f0372a291c5556ed5e80669202ec43da827cc58adea21b8000442e_prof);

        
        $__internal_c154f9c95757784cfeb2dd9e4ad72654e6488f445826322ca7f5c8c8a1234534->leave($__internal_c154f9c95757784cfeb2dd9e4ad72654e6488f445826322ca7f5c8c8a1234534_prof);

    }

    // line 33
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_5f47f5a42e57fc5bb888291fc44cd6e012b7ae1f97e210b7224cfb3f44350730 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f47f5a42e57fc5bb888291fc44cd6e012b7ae1f97e210b7224cfb3f44350730->enter($__internal_5f47f5a42e57fc5bb888291fc44cd6e012b7ae1f97e210b7224cfb3f44350730_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_036afb12486ab13e22f16ff4d537ee5a326d7d09f02e6051322c3a55881d5444 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_036afb12486ab13e22f16ff4d537ee5a326d7d09f02e6051322c3a55881d5444->enter($__internal_036afb12486ab13e22f16ff4d537ee5a326d7d09f02e6051322c3a55881d5444_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 34
        echo "    ";
        ob_start();
        // line 35
        echo "        ";
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : (""))));
        // line 36
        echo "        ";
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), "class", array()) . " ") . (((array_key_exists("widget_type", $context) && ((isset($context["widget_type"]) ? $context["widget_type"] : $this->getContext($context, "widget_type")) != ""))) ? ((((((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) ? ("checkbox") : ("radio")) . "-") . (isset($context["widget_type"]) ? $context["widget_type"] : $this->getContext($context, "widget_type")))) : ("")))));
        // line 37
        echo "        ";
        if ((isset($context["expanded"]) ? $context["expanded"] : $this->getContext($context, "expanded"))) {
            // line 38
            echo "            ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : (""))));
            // line 39
            echo "            <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
        ";
        }
        // line 41
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 42
            echo "            ";
            if ((array_key_exists("widget_type", $context) && ((isset($context["widget_type"]) ? $context["widget_type"] : $this->getContext($context, "widget_type")) != "inline"))) {
                // line 43
                echo "                <div class=\"";
                echo (((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) ? ("checkbox") : ("radio"));
                echo "\">
            ";
            }
            // line 45
            echo "            <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">
            ";
            // line 46
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("attr" => array("class" => (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_class", array()), "")) : ("")))));
            echo "
            ";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute($context["child"], "vars", array()), "label", array()), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
            echo "
            </label>
            ";
            // line 49
            if ((array_key_exists("widget_type", $context) && ((isset($context["widget_type"]) ? $context["widget_type"] : $this->getContext($context, "widget_type")) != "inline"))) {
                // line 50
                echo "                </div>
            ";
            }
            // line 52
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "        ";
        if (        $this->hasBlock("form_message", $context, $blocks)) {
            // line 54
            echo "            ";
            $this->displayBlock("form_message", $context, $blocks);
            echo "
        ";
        }
        // line 56
        echo "        ";
        if ((isset($context["expanded"]) ? $context["expanded"] : $this->getContext($context, "expanded"))) {
            // line 57
            echo "            </div>
        ";
        }
        // line 59
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_036afb12486ab13e22f16ff4d537ee5a326d7d09f02e6051322c3a55881d5444->leave($__internal_036afb12486ab13e22f16ff4d537ee5a326d7d09f02e6051322c3a55881d5444_prof);

        
        $__internal_5f47f5a42e57fc5bb888291fc44cd6e012b7ae1f97e210b7224cfb3f44350730->leave($__internal_5f47f5a42e57fc5bb888291fc44cd6e012b7ae1f97e210b7224cfb3f44350730_prof);

    }

    // line 62
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_46f57e71a5e335a4633fb9216cdc1844cc272d7e1118e694fa1ad0a3e23093a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46f57e71a5e335a4633fb9216cdc1844cc272d7e1118e694fa1ad0a3e23093a4->enter($__internal_46f57e71a5e335a4633fb9216cdc1844cc272d7e1118e694fa1ad0a3e23093a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_daae3ff14d6e91c2453c95156eac9f7505f71363a4ea8e2836de62bfc5d2b272 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_daae3ff14d6e91c2453c95156eac9f7505f71363a4ea8e2836de62bfc5d2b272->enter($__internal_daae3ff14d6e91c2453c95156eac9f7505f71363a4ea8e2836de62bfc5d2b272_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 63
        echo "    ";
        ob_start();
        // line 64
        echo "        ";
        if (( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false) && twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))))) {
            // line 65
            echo "            ";
            $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
            // line 66
            echo "        ";
        }
        // line 67
        echo "        ";
        if ((($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()) != null) && !twig_in_filter("choice", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()), "vars", array()), "block_prefixes", array())))) {
            // line 68
            echo "            <div class=\"checkbox\">
        ";
        }
        // line 70
        echo "
        ";
        // line 71
        if (((($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()) != null) && !twig_in_filter("choice", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()), "vars", array()), "block_prefixes", array()))) && array_key_exists("label_render", $context))) {
            // line 72
            echo "            <label class=\"";
            if ((array_key_exists("inline", $context) && (isset($context["inline"]) ? $context["inline"] : $this->getContext($context, "inline")))) {
                echo "checkbox-inline";
            }
            echo "\">
        ";
        }
        // line 74
        echo "
        <input type=\"checkbox\" ";
        // line 75
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) ? $context["checked"] : $this->getContext($context, "checked"))) {
            echo " checked=\"checked\"";
        }
        echo "/>
        ";
        // line 76
        if ((($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()) != null) && !twig_in_filter("choice", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()), "vars", array()), "block_prefixes", array())))) {
            // line 77
            echo "            ";
            if ((array_key_exists("label_render", $context) && twig_in_filter((isset($context["widget_checkbox_label"]) ? $context["widget_checkbox_label"] : $this->getContext($context, "widget_checkbox_label")), array(0 => "both", 1 => "widget")))) {
                // line 78
                echo "                ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
                echo "
                </label>
            ";
            }
            // line 81
            echo "        ";
        }
        // line 82
        echo "        ";
        if ((($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()) != null) && !twig_in_filter("choice", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()), "vars", array()), "block_prefixes", array())))) {
            // line 83
            echo "            </div>
            ";
            // line 84
            if (            $this->hasBlock("form_message", $context, $blocks)) {
                // line 85
                echo "                ";
                $this->displayBlock("form_message", $context, $blocks);
                echo "
            ";
            }
            // line 87
            echo "        ";
        }
        // line 88
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_daae3ff14d6e91c2453c95156eac9f7505f71363a4ea8e2836de62bfc5d2b272->leave($__internal_daae3ff14d6e91c2453c95156eac9f7505f71363a4ea8e2836de62bfc5d2b272_prof);

        
        $__internal_46f57e71a5e335a4633fb9216cdc1844cc272d7e1118e694fa1ad0a3e23093a4->leave($__internal_46f57e71a5e335a4633fb9216cdc1844cc272d7e1118e694fa1ad0a3e23093a4_prof);

    }

    // line 91
    public function block_sonata_type_model_autocomplete_widget($context, array $blocks = array())
    {
        $__internal_cacfc0c81ea1925c85e7bb2a99f3da6e8373db7258852c079bb8d179bb62eb95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cacfc0c81ea1925c85e7bb2a99f3da6e8373db7258852c079bb8d179bb62eb95->enter($__internal_cacfc0c81ea1925c85e7bb2a99f3da6e8373db7258852c079bb8d179bb62eb95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_model_autocomplete_widget"));

        $__internal_350d70bdcd1eb052434aeacb08d70d2c557fe8a2d57de9961a2fe1b46ff77db2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_350d70bdcd1eb052434aeacb08d70d2c557fe8a2d57de9961a2fe1b46ff77db2->enter($__internal_350d70bdcd1eb052434aeacb08d70d2c557fe8a2d57de9961a2fe1b46ff77db2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_model_autocomplete_widget"));

        // line 92
        echo "    ";
        $this->loadTemplate((isset($context["template"]) ? $context["template"] : $this->getContext($context, "template")), "SonataAdminBundle:Form:filter_admin_fields.html.twig", 92)->display($context);
        
        $__internal_350d70bdcd1eb052434aeacb08d70d2c557fe8a2d57de9961a2fe1b46ff77db2->leave($__internal_350d70bdcd1eb052434aeacb08d70d2c557fe8a2d57de9961a2fe1b46ff77db2_prof);

        
        $__internal_cacfc0c81ea1925c85e7bb2a99f3da6e8373db7258852c079bb8d179bb62eb95->leave($__internal_cacfc0c81ea1925c85e7bb2a99f3da6e8373db7258852c079bb8d179bb62eb95_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Form:filter_admin_fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  336 => 92,  327 => 91,  316 => 88,  313 => 87,  307 => 85,  305 => 84,  302 => 83,  299 => 82,  296 => 81,  289 => 78,  286 => 77,  284 => 76,  272 => 75,  269 => 74,  261 => 72,  259 => 71,  256 => 70,  252 => 68,  249 => 67,  246 => 66,  243 => 65,  240 => 64,  237 => 63,  228 => 62,  217 => 59,  213 => 57,  210 => 56,  204 => 54,  201 => 53,  195 => 52,  191 => 50,  189 => 49,  184 => 47,  180 => 46,  164 => 45,  158 => 43,  155 => 42,  150 => 41,  144 => 39,  141 => 38,  138 => 37,  135 => 36,  132 => 35,  129 => 34,  120 => 33,  107 => 30,  104 => 29,  95 => 28,  82 => 25,  79 => 24,  70 => 23,  57 => 20,  54 => 19,  45 => 18,  11 => 12,);
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

{% extends 'form_div_layout.html.twig' %}

{#
    Inspired from MopaBootstrapBundle: https://github.com/phiamo/MopaBootstrapBundle
#}

{% block choice_widget_collapsed %}
    {% set attr = attr|merge({'class': attr.class|default('') ~ ' form-control'}) %}
    {{ parent() }}
{% endblock choice_widget_collapsed %}

{% block textarea_widget %}
    {% set attr = attr|merge({'class': attr.class|default('') ~ ' form-control'}) %}
    {{ parent() }}
{% endblock textarea_widget %}

{% block form_widget_simple %}
    {% set attr = attr|merge({'class': attr.class|default('') ~ ' form-control'}) %}
    {{ parent() }}
{% endblock form_widget_simple %}

{% block choice_widget_expanded %}
    {% spaceless %}
        {% set label_attr = label_attr|merge({'class': (label_attr.class|default(''))}) %}
        {% set label_attr = label_attr|merge({'class': (label_attr.class ~ ' ' ~ (widget_type is defined and widget_type != '' ? (multiple ? 'checkbox' : 'radio') ~ '-' ~ widget_type : ''))}) %}
        {% if expanded %}
            {% set attr = attr|merge({'class': attr.class|default('')}) %}
            <div {{ block('widget_container_attributes') }}>
        {% endif %}
        {% for child in form %}
            {% if widget_type is defined and widget_type != 'inline' %}
                <div class=\"{{ multiple ? 'checkbox' : 'radio' }}\">
            {% endif %}
            <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{ form_widget(child, {'attr': {'class': attr.widget_class|default('')}}) }}
            {{ child.vars.label|trans({}, translation_domain) }}
            </label>
            {% if widget_type is defined and widget_type != 'inline' %}
                </div>
            {% endif %}
        {% endfor %}
        {% if block('form_message') is defined %}
            {{ block('form_message') }}
        {% endif %}
        {% if expanded %}
            </div>
        {% endif %}
    {% endspaceless %}
{% endblock choice_widget_expanded %}

{% block checkbox_widget %}
    {% spaceless %}
        {% if label is not same as(false) and label is empty %}
            {% set label = name|humanize %}
        {% endif %}
        {% if form.parent != null and 'choice' not in form.parent.vars.block_prefixes %}
            <div class=\"checkbox\">
        {% endif %}

        {% if form.parent != null and 'choice' not in form.parent.vars.block_prefixes and label_render is defined %}
            <label class=\"{% if inline is defined and inline %}checkbox-inline{% endif %}\">
        {% endif %}

        <input type=\"checkbox\" {{ block('widget_attributes') }}{% if value is defined %} value=\"{{ value }}\"{% endif %}{% if checked %} checked=\"checked\"{% endif %}/>
        {% if form.parent != null and 'choice' not in form.parent.vars.block_prefixes %}
            {% if label_render is defined and widget_checkbox_label in ['both', 'widget'] %}
                {{ label|trans({}, translation_domain) }}
                </label>
            {% endif %}
        {% endif %}
        {% if form.parent != null and 'choice' not in form.parent.vars.block_prefixes %}
            </div>
            {% if block('form_message') is defined %}
                {{ block('form_message') }}
            {% endif %}
        {% endif %}
    {% endspaceless %}
{% endblock checkbox_widget %}

{% block sonata_type_model_autocomplete_widget %}
    {% include template %}
{% endblock sonata_type_model_autocomplete_widget %}
", "SonataAdminBundle:Form:filter_admin_fields.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\Form\\filter_admin_fields.html.twig");
    }
}
