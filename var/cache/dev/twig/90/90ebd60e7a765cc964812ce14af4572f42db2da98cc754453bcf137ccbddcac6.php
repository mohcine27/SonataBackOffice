<?php

/* SonataAdminBundle:Form:form_admin_fields.html.twig */
class __TwigTemplate_cff591bd2f0c7a970a352016caae808f12be50d05319a16e43bd5c8e7de36ebc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("form_div_layout.html.twig", "SonataAdminBundle:Form:form_admin_fields.html.twig", 12);
        $this->blocks = array(
            'form_errors' => array($this, 'block_form_errors'),
            'sonata_help' => array($this, 'block_sonata_help'),
            'form_widget' => array($this, 'block_form_widget'),
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'money_widget' => array($this, 'block_money_widget'),
            'percent_widget' => array($this, 'block_percent_widget'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'radio_widget' => array($this, 'block_radio_widget'),
            'form_label' => array($this, 'block_form_label'),
            'checkbox_label' => array($this, 'block_checkbox_label'),
            'radio_label' => array($this, 'block_radio_label'),
            'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'date_widget' => array($this, 'block_date_widget'),
            'time_widget' => array($this, 'block_time_widget'),
            'datetime_widget' => array($this, 'block_datetime_widget'),
            'form_row' => array($this, 'block_form_row'),
            'checkbox_row' => array($this, 'block_checkbox_row'),
            'radio_row' => array($this, 'block_radio_row'),
            'sonata_type_native_collection_widget_row' => array($this, 'block_sonata_type_native_collection_widget_row'),
            'sonata_type_native_collection_widget' => array($this, 'block_sonata_type_native_collection_widget'),
            'sonata_type_immutable_array_widget' => array($this, 'block_sonata_type_immutable_array_widget'),
            'sonata_type_immutable_array_widget_row' => array($this, 'block_sonata_type_immutable_array_widget_row'),
            'sonata_type_model_autocomplete_widget' => array($this, 'block_sonata_type_model_autocomplete_widget'),
            'sonata_type_choice_field_mask_widget' => array($this, 'block_sonata_type_choice_field_mask_widget'),
            'sonata_type_choice_multiple_sortable' => array($this, 'block_sonata_type_choice_multiple_sortable'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d706c7d625616852c9d0d896ef1173f3226941258095a6640e0f5f5028ee2c80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d706c7d625616852c9d0d896ef1173f3226941258095a6640e0f5f5028ee2c80->enter($__internal_d706c7d625616852c9d0d896ef1173f3226941258095a6640e0f5f5028ee2c80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Form:form_admin_fields.html.twig"));

        $__internal_87fbe9a319a162fa27650fb2de7d4afd1cca49b9e3804db6305007002bf7ce07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87fbe9a319a162fa27650fb2de7d4afd1cca49b9e3804db6305007002bf7ce07->enter($__internal_87fbe9a319a162fa27650fb2de7d4afd1cca49b9e3804db6305007002bf7ce07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Form:form_admin_fields.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d706c7d625616852c9d0d896ef1173f3226941258095a6640e0f5f5028ee2c80->leave($__internal_d706c7d625616852c9d0d896ef1173f3226941258095a6640e0f5f5028ee2c80_prof);

        
        $__internal_87fbe9a319a162fa27650fb2de7d4afd1cca49b9e3804db6305007002bf7ce07->leave($__internal_87fbe9a319a162fa27650fb2de7d4afd1cca49b9e3804db6305007002bf7ce07_prof);

    }

    // line 14
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_d32ea82ebbf11c142d03bcdad9c74db5c0e5ed5c1b39c0a86cc1cdbdafbd6748 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d32ea82ebbf11c142d03bcdad9c74db5c0e5ed5c1b39c0a86cc1cdbdafbd6748->enter($__internal_d32ea82ebbf11c142d03bcdad9c74db5c0e5ed5c1b39c0a86cc1cdbdafbd6748_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_327f1993f83cfc8756c5c2b74151c53326d04ec45e02ef9bd8184fe25217b793 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_327f1993f83cfc8756c5c2b74151c53326d04ec45e02ef9bd8184fe25217b793->enter($__internal_327f1993f83cfc8756c5c2b74151c53326d04ec45e02ef9bd8184fe25217b793_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 15
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 16
            echo "        ";
            if ( !$this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array())) {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 17
            echo "            <ul class=\"list-unstyled\">
                ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 19
                echo "                    <li><i class=\"fa fa-exclamation-circle\" aria-hidden=\"true\"></i> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "            </ul>
        ";
            // line 22
            if ( !$this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array())) {
                echo "</div>";
            }
            // line 23
            echo "    ";
        }
        
        $__internal_327f1993f83cfc8756c5c2b74151c53326d04ec45e02ef9bd8184fe25217b793->leave($__internal_327f1993f83cfc8756c5c2b74151c53326d04ec45e02ef9bd8184fe25217b793_prof);

        
        $__internal_d32ea82ebbf11c142d03bcdad9c74db5c0e5ed5c1b39c0a86cc1cdbdafbd6748->leave($__internal_d32ea82ebbf11c142d03bcdad9c74db5c0e5ed5c1b39c0a86cc1cdbdafbd6748_prof);

    }

    // line 26
    public function block_sonata_help($context, array $blocks = array())
    {
        $__internal_0e955b9d35296a51b531d2053f8d4fa0aa6db26cd13900696e8a286d8256bc46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e955b9d35296a51b531d2053f8d4fa0aa6db26cd13900696e8a286d8256bc46->enter($__internal_0e955b9d35296a51b531d2053f8d4fa0aa6db26cd13900696e8a286d8256bc46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_help"));

        $__internal_faf13c7484320532f62fc0bb4fa7524e06e5da78be6871d6c8007a8fbfce0ca5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_faf13c7484320532f62fc0bb4fa7524e06e5da78be6871d6c8007a8fbfce0ca5->enter($__internal_faf13c7484320532f62fc0bb4fa7524e06e5da78be6871d6c8007a8fbfce0ca5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_help"));

        // line 27
        ob_start();
        // line 28
        if ((array_key_exists("sonata_help", $context) && (isset($context["sonata_help"]) ? $context["sonata_help"] : $this->getContext($context, "sonata_help")))) {
            // line 29
            echo "    <span class=\"help-block sonata-ba-field-widget-help\">";
            echo (isset($context["sonata_help"]) ? $context["sonata_help"] : $this->getContext($context, "sonata_help"));
            echo "</span>
";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_faf13c7484320532f62fc0bb4fa7524e06e5da78be6871d6c8007a8fbfce0ca5->leave($__internal_faf13c7484320532f62fc0bb4fa7524e06e5da78be6871d6c8007a8fbfce0ca5_prof);

        
        $__internal_0e955b9d35296a51b531d2053f8d4fa0aa6db26cd13900696e8a286d8256bc46->leave($__internal_0e955b9d35296a51b531d2053f8d4fa0aa6db26cd13900696e8a286d8256bc46_prof);

    }

    // line 34
    public function block_form_widget($context, array $blocks = array())
    {
        $__internal_26961a65fdb394aee2f8490dd974ba33d606fa79ec7d77929d5fd51f4488fbc6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26961a65fdb394aee2f8490dd974ba33d606fa79ec7d77929d5fd51f4488fbc6->enter($__internal_26961a65fdb394aee2f8490dd974ba33d606fa79ec7d77929d5fd51f4488fbc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        $__internal_28654b6312d589c360689e4ae1db6f5d7a9d7057055afd3f422837438c857554 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28654b6312d589c360689e4ae1db6f5d7a9d7057055afd3f422837438c857554->enter($__internal_28654b6312d589c360689e4ae1db6f5d7a9d7057055afd3f422837438c857554_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        // line 35
        $this->displayParentBlock("form_widget", $context, $blocks);
        echo "
    ";
        // line 36
        $this->displayBlock("sonata_help", $context, $blocks);
        
        $__internal_28654b6312d589c360689e4ae1db6f5d7a9d7057055afd3f422837438c857554->leave($__internal_28654b6312d589c360689e4ae1db6f5d7a9d7057055afd3f422837438c857554_prof);

        
        $__internal_26961a65fdb394aee2f8490dd974ba33d606fa79ec7d77929d5fd51f4488fbc6->leave($__internal_26961a65fdb394aee2f8490dd974ba33d606fa79ec7d77929d5fd51f4488fbc6_prof);

    }

    // line 39
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_579de8887267cb79c0aba9bf4c6f01e2f7c1fe16e2b5705da2003de4f4c73102 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_579de8887267cb79c0aba9bf4c6f01e2f7c1fe16e2b5705da2003de4f4c73102->enter($__internal_579de8887267cb79c0aba9bf4c6f01e2f7c1fe16e2b5705da2003de4f4c73102_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_a0d1cdc5087f6180658a0623f0a0a8b12859dc68cf6cdff2651cd1f2f178e928 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0d1cdc5087f6180658a0623f0a0a8b12859dc68cf6cdff2651cd1f2f178e928->enter($__internal_a0d1cdc5087f6180658a0623f0a0a8b12859dc68cf6cdff2651cd1f2f178e928_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 40
        echo "    ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 41
        echo "    ";
        if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) != "file")) {
            // line 42
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control")));
            // line 43
            echo "    ";
        }
        // line 44
        echo "    ";
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        echo "
";
        
        $__internal_a0d1cdc5087f6180658a0623f0a0a8b12859dc68cf6cdff2651cd1f2f178e928->leave($__internal_a0d1cdc5087f6180658a0623f0a0a8b12859dc68cf6cdff2651cd1f2f178e928_prof);

        
        $__internal_579de8887267cb79c0aba9bf4c6f01e2f7c1fe16e2b5705da2003de4f4c73102->leave($__internal_579de8887267cb79c0aba9bf4c6f01e2f7c1fe16e2b5705da2003de4f4c73102_prof);

    }

    // line 47
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_dbc8c34e83890c3e2a8b01b824bcdab4ba0e408efd14dad34f376ef8ad62c252 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbc8c34e83890c3e2a8b01b824bcdab4ba0e408efd14dad34f376ef8ad62c252->enter($__internal_dbc8c34e83890c3e2a8b01b824bcdab4ba0e408efd14dad34f376ef8ad62c252_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_3fdb7c077466e08bc9730c04955d916a0dc2476966d6338489a19a93eb66839e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fdb7c077466e08bc9730c04955d916a0dc2476966d6338489a19a93eb66839e->enter($__internal_3fdb7c077466e08bc9730c04955d916a0dc2476966d6338489a19a93eb66839e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 48
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control")));
        // line 49
        echo "    ";
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        echo "
";
        
        $__internal_3fdb7c077466e08bc9730c04955d916a0dc2476966d6338489a19a93eb66839e->leave($__internal_3fdb7c077466e08bc9730c04955d916a0dc2476966d6338489a19a93eb66839e_prof);

        
        $__internal_dbc8c34e83890c3e2a8b01b824bcdab4ba0e408efd14dad34f376ef8ad62c252->leave($__internal_dbc8c34e83890c3e2a8b01b824bcdab4ba0e408efd14dad34f376ef8ad62c252_prof);

    }

    // line 52
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_b686998b58a15de27c3340f18575a0d07019188e59f4133934d7968a783aed1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b686998b58a15de27c3340f18575a0d07019188e59f4133934d7968a783aed1c->enter($__internal_b686998b58a15de27c3340f18575a0d07019188e59f4133934d7968a783aed1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_c51e59c8843571abe91bf0499c8dd23e05c4defdac8890d20cf512d8e559414b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c51e59c8843571abe91bf0499c8dd23e05c4defdac8890d20cf512d8e559414b->enter($__internal_c51e59c8843571abe91bf0499c8dd23e05c4defdac8890d20cf512d8e559414b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 53
        if (((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")) == "{{ widget }}")) {
            // line 54
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 56
            echo "        ";
            $context["currencySymbol"] = twig_trim_filter(twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")));
            // line 57
            echo "        ";
            if (preg_match("/^{{ widget }}/", (isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")))) {
                // line 58
                echo "            <div class=\"input-group\">";
                // line 59
                $this->displayBlock("form_widget_simple", $context, $blocks);
                // line 60
                echo "<span class=\"input-group-addon\">";
                echo twig_escape_filter($this->env, (isset($context["currencySymbol"]) ? $context["currencySymbol"] : $this->getContext($context, "currencySymbol")), "html", null, true);
                echo "</span>
            </div>
        ";
            } elseif (preg_match("/{{ widget }}\$/",             // line 62
(isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")))) {
                // line 63
                echo "            <div class=\"input-group\">
                <span class=\"input-group-addon\">";
                // line 64
                echo twig_escape_filter($this->env, (isset($context["currencySymbol"]) ? $context["currencySymbol"] : $this->getContext($context, "currencySymbol")), "html", null, true);
                echo "</span>";
                // line 65
                $this->displayBlock("form_widget_simple", $context, $blocks);
                // line 66
                echo "</div>
        ";
            }
            // line 68
            echo "    ";
        }
        
        $__internal_c51e59c8843571abe91bf0499c8dd23e05c4defdac8890d20cf512d8e559414b->leave($__internal_c51e59c8843571abe91bf0499c8dd23e05c4defdac8890d20cf512d8e559414b_prof);

        
        $__internal_b686998b58a15de27c3340f18575a0d07019188e59f4133934d7968a783aed1c->leave($__internal_b686998b58a15de27c3340f18575a0d07019188e59f4133934d7968a783aed1c_prof);

    }

    // line 71
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_714781306497a4a08d1d37c4065f67afe2807e2b7598cd196cd530322aec2142 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_714781306497a4a08d1d37c4065f67afe2807e2b7598cd196cd530322aec2142->enter($__internal_714781306497a4a08d1d37c4065f67afe2807e2b7598cd196cd530322aec2142_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_59f3a453ae86ac52e093a10c6581b042624fbe3bf4e4570870bd08b061883ee8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59f3a453ae86ac52e093a10c6581b042624fbe3bf4e4570870bd08b061883ee8->enter($__internal_59f3a453ae86ac52e093a10c6581b042624fbe3bf4e4570870bd08b061883ee8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 72
        echo "    ";
        ob_start();
        // line 73
        echo "        ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 74
        echo "        <div class=\"input-group\">
            ";
        // line 75
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
            <span class=\"input-group-addon\">%</span>
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_59f3a453ae86ac52e093a10c6581b042624fbe3bf4e4570870bd08b061883ee8->leave($__internal_59f3a453ae86ac52e093a10c6581b042624fbe3bf4e4570870bd08b061883ee8_prof);

        
        $__internal_714781306497a4a08d1d37c4065f67afe2807e2b7598cd196cd530322aec2142->leave($__internal_714781306497a4a08d1d37c4065f67afe2807e2b7598cd196cd530322aec2142_prof);

    }

    // line 81
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_2bc62ce365304bd1321672dbc5d3c03ae21e89f935f72e8f830340df5192d498 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bc62ce365304bd1321672dbc5d3c03ae21e89f935f72e8f830340df5192d498->enter($__internal_2bc62ce365304bd1321672dbc5d3c03ae21e89f935f72e8f830340df5192d498_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_baf19a3aba44fff90fd3258e1375763075834cf117d07a768b01edf99ce08dcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_baf19a3aba44fff90fd3258e1375763075834cf117d07a768b01edf99ce08dcb->enter($__internal_baf19a3aba44fff90fd3258e1375763075834cf117d07a768b01edf99ce08dcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 82
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")), "")) : (""));
        // line 83
        if (twig_in_filter("checkbox-inline", (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")))) {
            // line 84
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 86
            echo "<div class=\"checkbox\">";
            // line 87
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 88
            echo "</div>";
        }
        
        $__internal_baf19a3aba44fff90fd3258e1375763075834cf117d07a768b01edf99ce08dcb->leave($__internal_baf19a3aba44fff90fd3258e1375763075834cf117d07a768b01edf99ce08dcb_prof);

        
        $__internal_2bc62ce365304bd1321672dbc5d3c03ae21e89f935f72e8f830340df5192d498->leave($__internal_2bc62ce365304bd1321672dbc5d3c03ae21e89f935f72e8f830340df5192d498_prof);

    }

    // line 92
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_47eef99eb55da729247a7e95a43b29f6c3699b0c645fddaff7bf52248d081108 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47eef99eb55da729247a7e95a43b29f6c3699b0c645fddaff7bf52248d081108->enter($__internal_47eef99eb55da729247a7e95a43b29f6c3699b0c645fddaff7bf52248d081108_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_62bcf95b03b76f07e02876ef71155438c9b568ab28d07e85495c41448de0f830 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62bcf95b03b76f07e02876ef71155438c9b568ab28d07e85495c41448de0f830->enter($__internal_62bcf95b03b76f07e02876ef71155438c9b568ab28d07e85495c41448de0f830_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 93
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")), "")) : (""));
        // line 94
        if (twig_in_filter("radio-inline", (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")))) {
            // line 95
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 97
            echo "<div class=\"radio\">";
            // line 98
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 99
            echo "</div>";
        }
        
        $__internal_62bcf95b03b76f07e02876ef71155438c9b568ab28d07e85495c41448de0f830->leave($__internal_62bcf95b03b76f07e02876ef71155438c9b568ab28d07e85495c41448de0f830_prof);

        
        $__internal_47eef99eb55da729247a7e95a43b29f6c3699b0c645fddaff7bf52248d081108->leave($__internal_47eef99eb55da729247a7e95a43b29f6c3699b0c645fddaff7bf52248d081108_prof);

    }

    // line 104
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_646ef0fe6127f33e9952ca81b1e43ea2364e0948fafa6dd9616568d32bdd350b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_646ef0fe6127f33e9952ca81b1e43ea2364e0948fafa6dd9616568d32bdd350b->enter($__internal_646ef0fe6127f33e9952ca81b1e43ea2364e0948fafa6dd9616568d32bdd350b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_4bd4eca3fe0fdfe135fb165000843e8fc5ce05d52bb9c54c0c42299c19d29343 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bd4eca3fe0fdfe135fb165000843e8fc5ce05d52bb9c54c0c42299c19d29343->enter($__internal_4bd4eca3fe0fdfe135fb165000843e8fc5ce05d52bb9c54c0c42299c19d29343_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 105
        ob_start();
        // line 106
        echo "    ";
        if (( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false) && ($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "options", array()), "form_type", array(), "array") == "horizontal"))) {
            // line 107
            echo "        ";
            $context["label_class"] = "col-sm-3";
            // line 108
            echo "    ";
        }
        // line 109
        echo "
    ";
        // line 110
        $context["label_class"] = (((array_key_exists("label_class", $context)) ? (_twig_default_filter((isset($context["label_class"]) ? $context["label_class"] : $this->getContext($context, "label_class")), "")) : ("")) . " control-label");
        // line 111
        echo "
    ";
        // line 112
        if ( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) {
            // line 113
            echo "        ";
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => ((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . (isset($context["label_class"]) ? $context["label_class"] : $this->getContext($context, "label_class")))));
            // line 114
            echo "
        ";
            // line 115
            if ( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound"))) {
                // line 116
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("for" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
                // line 117
                echo "        ";
            }
            // line 118
            echo "        ";
            if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
                // line 119
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " required"))));
                // line 120
                echo "        ";
            }
            // line 121
            echo "
        ";
            // line 122
            if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
                // line 123
                if ((array_key_exists("label_format", $context) &&  !twig_test_empty((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format"))))) {
                    // line 124
                    $context["label"] = twig_replace_filter((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")), array("%name%" =>                     // line 125
(isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "%id%" =>                     // line 126
(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
                } else {
                    // line 129
                    $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
                }
            }
            // line 132
            echo "
        <label";
            // line 133
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
            // line 134
            if (((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) {
                // line 135
                echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), "html", null, true);
            } elseif ( !$this->getAttribute(            // line 136
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin", array())) {
                // line 137
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
            } else {
                // line 139
                echo "                ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "translationDomain", array())) ? ($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "translationDomain", array())) : ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationDomain", array())))), "html", null, true);
                echo "
            ";
            }
            // line 141
            echo "        </label>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_4bd4eca3fe0fdfe135fb165000843e8fc5ce05d52bb9c54c0c42299c19d29343->leave($__internal_4bd4eca3fe0fdfe135fb165000843e8fc5ce05d52bb9c54c0c42299c19d29343_prof);

        
        $__internal_646ef0fe6127f33e9952ca81b1e43ea2364e0948fafa6dd9616568d32bdd350b->leave($__internal_646ef0fe6127f33e9952ca81b1e43ea2364e0948fafa6dd9616568d32bdd350b_prof);

    }

    // line 146
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_27cce2f40acd56e06d94d52d7a743cf0317c9fc60218d3c2fd0c4c0fb0d3df07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27cce2f40acd56e06d94d52d7a743cf0317c9fc60218d3c2fd0c4c0fb0d3df07->enter($__internal_27cce2f40acd56e06d94d52d7a743cf0317c9fc60218d3c2fd0c4c0fb0d3df07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_4cd16e004501ba2129274a12416ec6bc4f6de6e7637a88642d79a0369942f451 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cd16e004501ba2129274a12416ec6bc4f6de6e7637a88642d79a0369942f451->enter($__internal_4cd16e004501ba2129274a12416ec6bc4f6de6e7637a88642d79a0369942f451_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 147
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_4cd16e004501ba2129274a12416ec6bc4f6de6e7637a88642d79a0369942f451->leave($__internal_4cd16e004501ba2129274a12416ec6bc4f6de6e7637a88642d79a0369942f451_prof);

        
        $__internal_27cce2f40acd56e06d94d52d7a743cf0317c9fc60218d3c2fd0c4c0fb0d3df07->leave($__internal_27cce2f40acd56e06d94d52d7a743cf0317c9fc60218d3c2fd0c4c0fb0d3df07_prof);

    }

    // line 150
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_f62d2d03b66e4eb71a1cbd1180f75ce88daa9aa4bbacacbef870a8f78817bd3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f62d2d03b66e4eb71a1cbd1180f75ce88daa9aa4bbacacbef870a8f78817bd3c->enter($__internal_f62d2d03b66e4eb71a1cbd1180f75ce88daa9aa4bbacacbef870a8f78817bd3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_ad64b4fd2610d4d09cbc7d63fb5e9d9317871f3e5d5de24895326f500b08ae76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad64b4fd2610d4d09cbc7d63fb5e9d9317871f3e5d5de24895326f500b08ae76->enter($__internal_ad64b4fd2610d4d09cbc7d63fb5e9d9317871f3e5d5de24895326f500b08ae76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 151
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_ad64b4fd2610d4d09cbc7d63fb5e9d9317871f3e5d5de24895326f500b08ae76->leave($__internal_ad64b4fd2610d4d09cbc7d63fb5e9d9317871f3e5d5de24895326f500b08ae76_prof);

        
        $__internal_f62d2d03b66e4eb71a1cbd1180f75ce88daa9aa4bbacacbef870a8f78817bd3c->leave($__internal_f62d2d03b66e4eb71a1cbd1180f75ce88daa9aa4bbacacbef870a8f78817bd3c_prof);

    }

    // line 154
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_b06b9a2dfebd71d87cd99125b6460d701e323c7d71624931129a99e64e9e7e36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b06b9a2dfebd71d87cd99125b6460d701e323c7d71624931129a99e64e9e7e36->enter($__internal_b06b9a2dfebd71d87cd99125b6460d701e323c7d71624931129a99e64e9e7e36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_f4bbe40151f5591f1bcbbc39d52d4af07aa71b172973e3df05607ba116cd39a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4bbe40151f5591f1bcbbc39d52d4af07aa71b172973e3df05607ba116cd39a2->enter($__internal_f4bbe40151f5591f1bcbbc39d52d4af07aa71b172973e3df05607ba116cd39a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 155
        echo "    ";
        if ($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin", array())) {
            // line 156
            echo "        ";
            $context["translation_domain"] = $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "translationDomain", array());
            // line 157
            echo "    ";
        }
        // line 158
        echo "    ";
        // line 159
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 160
            echo "        ";
            if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
                // line 161
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " required"))));
                // line 162
                echo "        ";
            }
            // line 163
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 164
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " ") . (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class"))))));
                // line 165
                echo "        ";
            }
            // line 166
            echo "        ";
            if (( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false) && twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))))) {
                // line 167
                echo "            ";
                $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
                // line 168
                echo "        ";
            }
            // line 169
            echo "        <label";
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
            echo ">";
            // line 170
            echo (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget"));
            // line 171
            if ( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) {
                // line 172
                echo "<span class=\"control-label__text\">";
                // line 173
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
                // line 174
                echo "</span>";
            }
            // line 176
            echo "</label>
    ";
        }
        
        $__internal_f4bbe40151f5591f1bcbbc39d52d4af07aa71b172973e3df05607ba116cd39a2->leave($__internal_f4bbe40151f5591f1bcbbc39d52d4af07aa71b172973e3df05607ba116cd39a2_prof);

        
        $__internal_b06b9a2dfebd71d87cd99125b6460d701e323c7d71624931129a99e64e9e7e36->leave($__internal_b06b9a2dfebd71d87cd99125b6460d701e323c7d71624931129a99e64e9e7e36_prof);

    }

    // line 180
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_4b14ddc84bfb75c93806324e87ef97c562fefaa53bba2915e06dfb6faa813ddb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b14ddc84bfb75c93806324e87ef97c562fefaa53bba2915e06dfb6faa813ddb->enter($__internal_4b14ddc84bfb75c93806324e87ef97c562fefaa53bba2915e06dfb6faa813ddb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_af875f86ae34807215457588abd5075ff9e2e3f56ac1b0ff55e430909d98f302 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af875f86ae34807215457588abd5075ff9e2e3f56ac1b0ff55e430909d98f302->enter($__internal_af875f86ae34807215457588abd5075ff9e2e3f56ac1b0ff55e430909d98f302_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 181
        ob_start();
        // line 182
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " list-unstyled")));
        // line 183
        echo "    <ul ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
    ";
        // line 184
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 185
            echo "        <li>
            ";
            // line 186
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("horizontal" => false, "horizontal_input_wrapper_class" => ""));
            echo " ";
            // line 187
            echo "        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 189
        echo "    </ul>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_af875f86ae34807215457588abd5075ff9e2e3f56ac1b0ff55e430909d98f302->leave($__internal_af875f86ae34807215457588abd5075ff9e2e3f56ac1b0ff55e430909d98f302_prof);

        
        $__internal_4b14ddc84bfb75c93806324e87ef97c562fefaa53bba2915e06dfb6faa813ddb->leave($__internal_4b14ddc84bfb75c93806324e87ef97c562fefaa53bba2915e06dfb6faa813ddb_prof);

    }

    // line 193
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_c3a5b350865e70b7c275619e31a04e54d4dda857b1a2d30d2d7042dfb41a1b53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3a5b350865e70b7c275619e31a04e54d4dda857b1a2d30d2d7042dfb41a1b53->enter($__internal_c3a5b350865e70b7c275619e31a04e54d4dda857b1a2d30d2d7042dfb41a1b53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_14f339a01b4dca1c8cbd7e185cceedeae4faf96a74122a3279d2a1e63c8552f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14f339a01b4dca1c8cbd7e185cceedeae4faf96a74122a3279d2a1e63c8552f5->enter($__internal_14f339a01b4dca1c8cbd7e185cceedeae4faf96a74122a3279d2a1e63c8552f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 194
        ob_start();
        // line 195
        echo "    ";
        if ((((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required")) && array_key_exists("placeholder", $context)) && (null === (isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder"))))) {
            // line 196
            echo "        ";
            $context["required"] = false;
            // line 197
            echo "    ";
        } elseif (((((((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required")) && array_key_exists("empty_value", $context)) && array_key_exists("empty_value_in_choices", $context)) && (null === (isset($context["empty_value"]) ? $context["empty_value"] : $this->getContext($context, "empty_value")))) &&  !(isset($context["empty_value_in_choices"]) ? $context["empty_value_in_choices"] : $this->getContext($context, "empty_value_in_choices"))) &&  !(isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple")))) {
            // line 198
            echo "        ";
            $context["required"] = false;
            // line 199
            echo "    ";
        }
        // line 200
        echo "
    ";
        // line 201
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control")));
        // line 202
        echo "    ";
        if (((array_key_exists("sortable", $context) && (isset($context["sortable"]) ? $context["sortable"] : $this->getContext($context, "sortable"))) && (isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple")))) {
            // line 203
            echo "        ";
            $this->displayBlock("sonata_type_choice_multiple_sortable", $context, $blocks);
            echo "
    ";
        } else {
            // line 205
            echo "        <select ";
            $this->displayBlock("widget_attributes", $context, $blocks);
            if ((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) {
                echo " multiple=\"multiple\"";
            }
            echo " >
            ";
            // line 206
            if ((array_key_exists("empty_value", $context) &&  !(null === (isset($context["empty_value"]) ? $context["empty_value"] : $this->getContext($context, "empty_value"))))) {
                // line 207
                echo "                <option value=\"\"";
                if (((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required")) && twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))))) {
                    echo " selected=\"selected\"";
                }
                echo ">
                    ";
                // line 208
                if ( !$this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin", array())) {
                    // line 209
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["empty_value"]) ? $context["empty_value"] : $this->getContext($context, "empty_value")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
                } else {
                    // line 211
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["empty_value"]) ? $context["empty_value"] : $this->getContext($context, "empty_value")), array(), $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "translationDomain", array())), "html", null, true);
                }
                // line 213
                echo "                </option>
            ";
            } elseif ((            // line 214
array_key_exists("placeholder", $context) &&  !(null === (isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder"))))) {
                // line 215
                echo "                <option value=\"\"";
                if (((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required")) && twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))))) {
                    echo " selected=\"selected\"";
                }
                echo ">
                    ";
                // line 216
                if ( !$this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin", array())) {
                    // line 217
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
                } else {
                    // line 219
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")), array(), $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "translationDomain", array())), "html", null, true);
                }
                // line 221
                echo "                </option>
            ";
            }
            // line 223
            echo "            ";
            if ((twig_length_filter($this->env, (isset($context["preferred_choices"]) ? $context["preferred_choices"] : $this->getContext($context, "preferred_choices"))) > 0)) {
                // line 224
                echo "                ";
                $context["options"] = (isset($context["preferred_choices"]) ? $context["preferred_choices"] : $this->getContext($context, "preferred_choices"));
                // line 225
                echo "                ";
                $this->displayBlock("choice_widget_options", $context, $blocks);
                echo "
                ";
                // line 226
                if ((twig_length_filter($this->env, (isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices"))) > 0)) {
                    // line 227
                    echo "                    <option disabled=\"disabled\">";
                    echo twig_escape_filter($this->env, (isset($context["separator"]) ? $context["separator"] : $this->getContext($context, "separator")), "html", null, true);
                    echo "</option>
                ";
                }
                // line 229
                echo "            ";
            }
            // line 230
            echo "            ";
            $context["options"] = (isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices"));
            // line 231
            echo "            ";
            $this->displayBlock("choice_widget_options", $context, $blocks);
            echo "
        </select>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_14f339a01b4dca1c8cbd7e185cceedeae4faf96a74122a3279d2a1e63c8552f5->leave($__internal_14f339a01b4dca1c8cbd7e185cceedeae4faf96a74122a3279d2a1e63c8552f5_prof);

        
        $__internal_c3a5b350865e70b7c275619e31a04e54d4dda857b1a2d30d2d7042dfb41a1b53->leave($__internal_c3a5b350865e70b7c275619e31a04e54d4dda857b1a2d30d2d7042dfb41a1b53_prof);

    }

    // line 237
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_fef9ee5a173dc86198c92c47941a25a6f31009e214d47ca20c8b93f286f25227 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fef9ee5a173dc86198c92c47941a25a6f31009e214d47ca20c8b93f286f25227->enter($__internal_fef9ee5a173dc86198c92c47941a25a6f31009e214d47ca20c8b93f286f25227_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_2ae97808456bada3f85d4c09128e152b1da03c4387ec676c65862e1e105b17bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ae97808456bada3f85d4c09128e152b1da03c4387ec676c65862e1e105b17bf->enter($__internal_2ae97808456bada3f85d4c09128e152b1da03c4387ec676c65862e1e105b17bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 238
        ob_start();
        // line 239
        echo "    ";
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 240
            echo "        ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
    ";
        } else {
            // line 242
            echo "        ";
            if (( !array_key_exists("row", $context) || ((isset($context["row"]) ? $context["row"] : $this->getContext($context, "row")) == true))) {
                // line 243
                echo "            ";
                $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " row")));
                // line 244
                echo "        ";
            }
            // line 245
            echo "        ";
            $context["input_wrapper_class"] = ((array_key_exists("input_wrapper_class", $context)) ? (_twig_default_filter((isset($context["input_wrapper_class"]) ? $context["input_wrapper_class"] : $this->getContext($context, "input_wrapper_class")), "col-sm-4")) : ("col-sm-4"));
            // line 246
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 247
            echo twig_replace_filter((isset($context["date_pattern"]) ? $context["date_pattern"] : $this->getContext($context, "date_pattern")), array("{{ year }}" => (((("<div class=\"" .             // line 248
(isset($context["input_wrapper_class"]) ? $context["input_wrapper_class"] : $this->getContext($context, "input_wrapper_class"))) . "\">") . $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year", array()), 'widget')) . "</div>"), "{{ month }}" => (((("<div class=\"" .             // line 249
(isset($context["input_wrapper_class"]) ? $context["input_wrapper_class"] : $this->getContext($context, "input_wrapper_class"))) . "\">") . $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "month", array()), 'widget')) . "</div>"), "{{ day }}" => (((("<div class=\"" .             // line 250
(isset($context["input_wrapper_class"]) ? $context["input_wrapper_class"] : $this->getContext($context, "input_wrapper_class"))) . "\">") . $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "day", array()), 'widget')) . "</div>")));
            // line 251
            echo "
        </div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_2ae97808456bada3f85d4c09128e152b1da03c4387ec676c65862e1e105b17bf->leave($__internal_2ae97808456bada3f85d4c09128e152b1da03c4387ec676c65862e1e105b17bf_prof);

        
        $__internal_fef9ee5a173dc86198c92c47941a25a6f31009e214d47ca20c8b93f286f25227->leave($__internal_fef9ee5a173dc86198c92c47941a25a6f31009e214d47ca20c8b93f286f25227_prof);

    }

    // line 257
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_0db39f5474455ba98d92862efc4894bbfd2186eb5b5c2fb10078a3771df594a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0db39f5474455ba98d92862efc4894bbfd2186eb5b5c2fb10078a3771df594a4->enter($__internal_0db39f5474455ba98d92862efc4894bbfd2186eb5b5c2fb10078a3771df594a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_82b232999bc4853a0711606debfdd0ecb773cfaf771b68febc96d11bd1be209f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82b232999bc4853a0711606debfdd0ecb773cfaf771b68febc96d11bd1be209f->enter($__internal_82b232999bc4853a0711606debfdd0ecb773cfaf771b68febc96d11bd1be209f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 258
        ob_start();
        // line 259
        echo "    ";
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 260
            echo "        ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
    ";
        } else {
            // line 262
            echo "        ";
            if (( !array_key_exists("row", $context) || ((isset($context["row"]) ? $context["row"] : $this->getContext($context, "row")) == true))) {
                // line 263
                echo "            ";
                $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " row")));
                // line 264
                echo "        ";
            }
            // line 265
            echo "        ";
            $context["input_wrapper_class"] = ((array_key_exists("input_wrapper_class", $context)) ? (_twig_default_filter((isset($context["input_wrapper_class"]) ? $context["input_wrapper_class"] : $this->getContext($context, "input_wrapper_class")), "col-sm-6")) : ("col-sm-6"));
            // line 266
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            <div class=\"";
            // line 267
            echo twig_escape_filter($this->env, (isset($context["input_wrapper_class"]) ? $context["input_wrapper_class"] : $this->getContext($context, "input_wrapper_class")), "html", null, true);
            echo "\">
                ";
            // line 268
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hour", array()), 'widget');
            echo "
            </div>
            ";
            // line 270
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : $this->getContext($context, "with_minutes"))) {
                // line 271
                echo "                <div class=\"";
                echo twig_escape_filter($this->env, (isset($context["input_wrapper_class"]) ? $context["input_wrapper_class"] : $this->getContext($context, "input_wrapper_class")), "html", null, true);
                echo "\">
                    ";
                // line 272
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minute", array()), 'widget');
                echo "
                </div>
            ";
            }
            // line 275
            echo "            ";
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                // line 276
                echo "                <div class=\"";
                echo twig_escape_filter($this->env, (isset($context["input_wrapper_class"]) ? $context["input_wrapper_class"] : $this->getContext($context, "input_wrapper_class")), "html", null, true);
                echo "\">
                    ";
                // line 277
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "second", array()), 'widget');
                echo "
                </div>
            ";
            }
            // line 280
            echo "        </div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_82b232999bc4853a0711606debfdd0ecb773cfaf771b68febc96d11bd1be209f->leave($__internal_82b232999bc4853a0711606debfdd0ecb773cfaf771b68febc96d11bd1be209f_prof);

        
        $__internal_0db39f5474455ba98d92862efc4894bbfd2186eb5b5c2fb10078a3771df594a4->leave($__internal_0db39f5474455ba98d92862efc4894bbfd2186eb5b5c2fb10078a3771df594a4_prof);

    }

    // line 285
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_0aca58f9655305e1144177711a735925fd697a15777ac87cb550cbabb65a7935 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0aca58f9655305e1144177711a735925fd697a15777ac87cb550cbabb65a7935->enter($__internal_0aca58f9655305e1144177711a735925fd697a15777ac87cb550cbabb65a7935_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_8b58efd54471531eccfa72b533069bde2ddffa64c88aad9e8c43217c17ef0fa0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b58efd54471531eccfa72b533069bde2ddffa64c88aad9e8c43217c17ef0fa0->enter($__internal_8b58efd54471531eccfa72b533069bde2ddffa64c88aad9e8c43217c17ef0fa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 286
        ob_start();
        // line 287
        echo "    ";
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 288
            echo "        ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
    ";
        } else {
            // line 290
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " row")));
            // line 291
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 292
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'errors');
            echo "
            ";
            // line 293
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'errors');
            echo "

            ";
            // line 295
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), "vars", array()), "widget", array()) == "single_text")) {
                // line 296
                echo "                <div class=\"col-sm-2\">
                    ";
                // line 297
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget');
                echo "
                </div>
            ";
            } else {
                // line 300
                echo "                ";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget', array("row" => false, "input_wrapper_class" => "col-sm-2"));
                echo "
            ";
            }
            // line 302
            echo "
            ";
            // line 303
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), "vars", array()), "widget", array()) == "single_text")) {
                // line 304
                echo "                <div class=\"col-sm-2\">
                    ";
                // line 305
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'widget');
                echo "
                </div>
            ";
            } else {
                // line 308
                echo "                ";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'widget', array("row" => false, "input_wrapper_class" => "col-sm-2"));
                echo "
            ";
            }
            // line 310
            echo "        </div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_8b58efd54471531eccfa72b533069bde2ddffa64c88aad9e8c43217c17ef0fa0->leave($__internal_8b58efd54471531eccfa72b533069bde2ddffa64c88aad9e8c43217c17ef0fa0_prof);

        
        $__internal_0aca58f9655305e1144177711a735925fd697a15777ac87cb550cbabb65a7935->leave($__internal_0aca58f9655305e1144177711a735925fd697a15777ac87cb550cbabb65a7935_prof);

    }

    // line 315
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_009bcba88c084afeb9e802ecd9357998c59fdbb7159827c7a938a22d86693a0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_009bcba88c084afeb9e802ecd9357998c59fdbb7159827c7a938a22d86693a0d->enter($__internal_009bcba88c084afeb9e802ecd9357998c59fdbb7159827c7a938a22d86693a0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_22de19a115248a702d47a99da88675ab36b3af50688552433f66e952ca7c1729 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22de19a115248a702d47a99da88675ab36b3af50688552433f66e952ca7c1729->enter($__internal_22de19a115248a702d47a99da88675ab36b3af50688552433f66e952ca7c1729_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 316
        echo "    ";
        $context["show_label"] = ((array_key_exists("show_label", $context)) ? (_twig_default_filter((isset($context["show_label"]) ? $context["show_label"] : $this->getContext($context, "show_label")), true)) : (true));
        // line 317
        echo "    <div class=\"form-group";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            echo " has-error";
        }
        echo "\" id=\"sonata-ba-field-container-";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\">
        ";
        // line 318
        if ($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", array(), "any", false, true), "options", array(), "any", true, true)) {
            // line 319
            echo "            ";
            $context["label"] = (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", array(), "any", false, true), "options", array(), "any", false, true), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", array(), "any", false, true), "options", array(), "any", false, true), "name", array()), (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) : ((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))));
            // line 320
            echo "        ";
        }
        // line 321
        echo "
        ";
        // line 322
        $context["div_class"] = "sonata-ba-field";
        // line 323
        echo "
        ";
        // line 324
        if (((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) {
            // line 325
            echo "            ";
            $context["div_class"] = ((isset($context["div_class"]) ? $context["div_class"] : $this->getContext($context, "div_class")) . " sonata-collection-row-without-label");
            // line 326
            echo "        ";
        }
        // line 327
        echo "
        ";
        // line 328
        if ((array_key_exists("sonata_admin", $context) && ($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "options", array()), "form_type", array(), "array") == "horizontal"))) {
            // line 329
            echo "            ";
            // line 330
            echo "            ";
            if ((((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false) || $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array(), "any", false, true), "checked", array(), "any", true, true))) {
                // line 331
                echo "                ";
                if (twig_in_filter("collection", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()), "vars", array()), "block_prefixes", array()))) {
                    // line 332
                    echo "                    ";
                    $context["div_class"] = ((isset($context["div_class"]) ? $context["div_class"] : $this->getContext($context, "div_class")) . " col-sm-12");
                    // line 333
                    echo "                ";
                } else {
                    // line 334
                    echo "                    ";
                    $context["div_class"] = ((isset($context["div_class"]) ? $context["div_class"] : $this->getContext($context, "div_class")) . " col-sm-9 col-sm-offset-3");
                    // line 335
                    echo "                ";
                }
                // line 336
                echo "            ";
            } else {
                // line 337
                echo "                ";
                $context["div_class"] = ((isset($context["div_class"]) ? $context["div_class"] : $this->getContext($context, "div_class")) . " col-sm-9");
                // line 338
                echo "            ";
            }
            // line 339
            echo "        ";
        }
        // line 340
        echo "
        ";
        // line 341
        if ((isset($context["show_label"]) ? $context["show_label"] : $this->getContext($context, "show_label"))) {
            // line 342
            echo "            ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
            echo "
        ";
        }
        // line 344
        echo "
        ";
        // line 345
        if ((array_key_exists("sonata_admin", $context) && (isset($context["sonata_admin_enabled"]) ? $context["sonata_admin_enabled"] : $this->getContext($context, "sonata_admin_enabled")))) {
            // line 346
            echo "            ";
            $context["div_class"] = (((((isset($context["div_class"]) ? $context["div_class"] : $this->getContext($context, "div_class")) . " sonata-ba-field-") . $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "edit", array())) . "-") . $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "inline", array()));
            // line 347
            echo "        ";
        }
        // line 348
        echo "
        ";
        // line 349
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 350
            echo "            ";
            $context["div_class"] = ((isset($context["div_class"]) ? $context["div_class"] : $this->getContext($context, "div_class")) . " sonata-ba-field-error");
            // line 351
            echo "        ";
        }
        // line 352
        echo "
        <div class=\"";
        // line 353
        echo twig_escape_filter($this->env, (isset($context["div_class"]) ? $context["div_class"] : $this->getContext($context, "div_class")), "html", null, true);
        echo "\">
            ";
        // line 354
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget', array("horizontal" => false, "horizontal_input_wrapper_class" => ""));
        echo " ";
        // line 355
        echo "
            ";
        // line 356
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 357
            echo "                <div class=\"help-block sonata-ba-field-error-messages\">
                    ";
            // line 358
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            echo "
                </div>
            ";
        }
        // line 361
        echo "
            ";
        // line 362
        if (((array_key_exists("sonata_admin", $context) && (isset($context["sonata_admin_enabled"]) ? $context["sonata_admin_enabled"] : $this->getContext($context, "sonata_admin_enabled"))) && (($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", array(), "any", false, true), "help", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", array(), "any", false, true), "help", array()), false)) : (false)))) {
            // line 363
            echo "                <span class=\"help-block sonata-ba-field-help\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "help", array()), array(), (($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "translationDomain", array())) ? ($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "translationDomain", array())) : ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationDomain", array()))));
            echo "</span>
            ";
        }
        // line 365
        echo "        </div>
    </div>
";
        
        $__internal_22de19a115248a702d47a99da88675ab36b3af50688552433f66e952ca7c1729->leave($__internal_22de19a115248a702d47a99da88675ab36b3af50688552433f66e952ca7c1729_prof);

        
        $__internal_009bcba88c084afeb9e802ecd9357998c59fdbb7159827c7a938a22d86693a0d->leave($__internal_009bcba88c084afeb9e802ecd9357998c59fdbb7159827c7a938a22d86693a0d_prof);

    }

    // line 369
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_6ebcaf757a4ad1b66584bc59da7de7441007e62ac2675ac8b14ff9faa1743afc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ebcaf757a4ad1b66584bc59da7de7441007e62ac2675ac8b14ff9faa1743afc->enter($__internal_6ebcaf757a4ad1b66584bc59da7de7441007e62ac2675ac8b14ff9faa1743afc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_8a3b62d546881bb0e14cb19fa3f11c0660435d4d676c3f1f550f8b04e24e749e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a3b62d546881bb0e14cb19fa3f11c0660435d4d676c3f1f550f8b04e24e749e->enter($__internal_8a3b62d546881bb0e14cb19fa3f11c0660435d4d676c3f1f550f8b04e24e749e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 370
        $context["show_label"] = false;
        // line 371
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_8a3b62d546881bb0e14cb19fa3f11c0660435d4d676c3f1f550f8b04e24e749e->leave($__internal_8a3b62d546881bb0e14cb19fa3f11c0660435d4d676c3f1f550f8b04e24e749e_prof);

        
        $__internal_6ebcaf757a4ad1b66584bc59da7de7441007e62ac2675ac8b14ff9faa1743afc->leave($__internal_6ebcaf757a4ad1b66584bc59da7de7441007e62ac2675ac8b14ff9faa1743afc_prof);

    }

    // line 374
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_f38a070682669883d4551297cb03ec632b192700e7759393b21cdfa730ce4745 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f38a070682669883d4551297cb03ec632b192700e7759393b21cdfa730ce4745->enter($__internal_f38a070682669883d4551297cb03ec632b192700e7759393b21cdfa730ce4745_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_97f11886f82db6491f955587ca69d384feb3e8d538c520ffcec405d8fe2982c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97f11886f82db6491f955587ca69d384feb3e8d538c520ffcec405d8fe2982c7->enter($__internal_97f11886f82db6491f955587ca69d384feb3e8d538c520ffcec405d8fe2982c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 375
        $context["show_label"] = false;
        // line 376
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_97f11886f82db6491f955587ca69d384feb3e8d538c520ffcec405d8fe2982c7->leave($__internal_97f11886f82db6491f955587ca69d384feb3e8d538c520ffcec405d8fe2982c7_prof);

        
        $__internal_f38a070682669883d4551297cb03ec632b192700e7759393b21cdfa730ce4745->leave($__internal_f38a070682669883d4551297cb03ec632b192700e7759393b21cdfa730ce4745_prof);

    }

    // line 379
    public function block_sonata_type_native_collection_widget_row($context, array $blocks = array())
    {
        $__internal_67d6c5cd620be10242fb0f3bec032e3c462ffb7b6082c7b881255b0d64fa4f6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67d6c5cd620be10242fb0f3bec032e3c462ffb7b6082c7b881255b0d64fa4f6f->enter($__internal_67d6c5cd620be10242fb0f3bec032e3c462ffb7b6082c7b881255b0d64fa4f6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_native_collection_widget_row"));

        $__internal_fdc153dcd9b5238d99e26348eb2bc1879a1192df0c3019fc6305fa644597cf00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdc153dcd9b5238d99e26348eb2bc1879a1192df0c3019fc6305fa644597cf00->enter($__internal_fdc153dcd9b5238d99e26348eb2bc1879a1192df0c3019fc6305fa644597cf00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_native_collection_widget_row"));

        // line 380
        ob_start();
        // line 381
        echo "    <div class=\"sonata-collection-row\">
        ";
        // line 382
        if ((isset($context["allow_delete"]) ? $context["allow_delete"] : $this->getContext($context, "allow_delete"))) {
            // line 383
            echo "            <div class=\"row\">
                <div class=\"col-xs-1\">
                    <a href=\"#\" class=\"btn btn-link sonata-collection-delete\">
                        <i class=\"fa fa-minus-circle\" aria-hidden=\"true\"></i>
                    </a>
                </div>
                <div class=\"col-xs-11\">
        ";
        }
        // line 391
        echo "            ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), 'row', array("label" => false));
        echo "
        ";
        // line 392
        if ((isset($context["allow_delete"]) ? $context["allow_delete"] : $this->getContext($context, "allow_delete"))) {
            // line 393
            echo "                </div>
            </div>
        ";
        }
        // line 396
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_fdc153dcd9b5238d99e26348eb2bc1879a1192df0c3019fc6305fa644597cf00->leave($__internal_fdc153dcd9b5238d99e26348eb2bc1879a1192df0c3019fc6305fa644597cf00_prof);

        
        $__internal_67d6c5cd620be10242fb0f3bec032e3c462ffb7b6082c7b881255b0d64fa4f6f->leave($__internal_67d6c5cd620be10242fb0f3bec032e3c462ffb7b6082c7b881255b0d64fa4f6f_prof);

    }

    // line 400
    public function block_sonata_type_native_collection_widget($context, array $blocks = array())
    {
        $__internal_ffc7f97d365b7eb4addacbdb2b6ce3b96f09d3dcda81d5cfde3a9ec9c42a9fb3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffc7f97d365b7eb4addacbdb2b6ce3b96f09d3dcda81d5cfde3a9ec9c42a9fb3->enter($__internal_ffc7f97d365b7eb4addacbdb2b6ce3b96f09d3dcda81d5cfde3a9ec9c42a9fb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_native_collection_widget"));

        $__internal_9594c2ee4152c49200f527e55c6fd87e09de943a41e6da0edcd9f7c7868bac16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9594c2ee4152c49200f527e55c6fd87e09de943a41e6da0edcd9f7c7868bac16->enter($__internal_9594c2ee4152c49200f527e55c6fd87e09de943a41e6da0edcd9f7c7868bac16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_native_collection_widget"));

        // line 401
        ob_start();
        // line 402
        echo "    ";
        if (array_key_exists("prototype", $context)) {
            // line 403
            echo "        ";
            $context["child"] = (isset($context["prototype"]) ? $context["prototype"] : $this->getContext($context, "prototype"));
            // line 404
            echo "        ";
            $context["allow_delete_backup"] = (isset($context["allow_delete"]) ? $context["allow_delete"] : $this->getContext($context, "allow_delete"));
            // line 405
            echo "        ";
            $context["allow_delete"] = true;
            // line 406
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("data-prototype" =>             $this->renderBlock("sonata_type_native_collection_widget_row", $context, $blocks), "data-prototype-name" => $this->getAttribute($this->getAttribute((isset($context["prototype"]) ? $context["prototype"] : $this->getContext($context, "prototype")), "vars", array()), "name", array()), "class" => (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : (""))));
            // line 407
            echo "        ";
            $context["allow_delete"] = (isset($context["allow_delete_backup"]) ? $context["allow_delete_backup"] : $this->getContext($context, "allow_delete_backup"));
            // line 408
            echo "    ";
        }
        // line 409
        echo "    <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
        ";
        // line 410
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        ";
        // line 411
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 412
            echo "            ";
            $this->displayBlock("sonata_type_native_collection_widget_row", $context, $blocks);
            echo "
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 414
        echo "        ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
        ";
        // line 415
        if ((isset($context["allow_add"]) ? $context["allow_add"] : $this->getContext($context, "allow_add"))) {
            // line 416
            echo "            <div><a href=\"#\" class=\"btn btn-link sonata-collection-add\"><i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i></a></div>
        ";
        }
        // line 418
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_9594c2ee4152c49200f527e55c6fd87e09de943a41e6da0edcd9f7c7868bac16->leave($__internal_9594c2ee4152c49200f527e55c6fd87e09de943a41e6da0edcd9f7c7868bac16_prof);

        
        $__internal_ffc7f97d365b7eb4addacbdb2b6ce3b96f09d3dcda81d5cfde3a9ec9c42a9fb3->leave($__internal_ffc7f97d365b7eb4addacbdb2b6ce3b96f09d3dcda81d5cfde3a9ec9c42a9fb3_prof);

    }

    // line 422
    public function block_sonata_type_immutable_array_widget($context, array $blocks = array())
    {
        $__internal_2f8c37be84d6cb3e2ccbdbdd21872fcf91fdb695a8129a2685801ff5f592e382 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f8c37be84d6cb3e2ccbdbdd21872fcf91fdb695a8129a2685801ff5f592e382->enter($__internal_2f8c37be84d6cb3e2ccbdbdd21872fcf91fdb695a8129a2685801ff5f592e382_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_immutable_array_widget"));

        $__internal_22bb6407ecda3afa3fada41e3ad0cd5a8e66f3b251781bfe9502467b74af7672 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22bb6407ecda3afa3fada41e3ad0cd5a8e66f3b251781bfe9502467b74af7672->enter($__internal_22bb6407ecda3afa3fada41e3ad0cd5a8e66f3b251781bfe9502467b74af7672_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_immutable_array_widget"));

        // line 423
        echo "    ";
        ob_start();
        // line 424
        echo "        <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
            ";
        // line 425
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

            ";
        // line 427
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
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
        foreach ($context['_seq'] as $context["key"] => $context["child"]) {
            // line 428
            echo "                ";
            $this->displayBlock("sonata_type_immutable_array_widget_row", $context, $blocks);
            echo "
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
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 430
        echo "
            ";
        // line 431
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_22bb6407ecda3afa3fada41e3ad0cd5a8e66f3b251781bfe9502467b74af7672->leave($__internal_22bb6407ecda3afa3fada41e3ad0cd5a8e66f3b251781bfe9502467b74af7672_prof);

        
        $__internal_2f8c37be84d6cb3e2ccbdbdd21872fcf91fdb695a8129a2685801ff5f592e382->leave($__internal_2f8c37be84d6cb3e2ccbdbdd21872fcf91fdb695a8129a2685801ff5f592e382_prof);

    }

    // line 436
    public function block_sonata_type_immutable_array_widget_row($context, array $blocks = array())
    {
        $__internal_0e1f06661f6ea1827d44f14933e72eaf3bbeb490de74cb973eac1e0ffc634f55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e1f06661f6ea1827d44f14933e72eaf3bbeb490de74cb973eac1e0ffc634f55->enter($__internal_0e1f06661f6ea1827d44f14933e72eaf3bbeb490de74cb973eac1e0ffc634f55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_immutable_array_widget_row"));

        $__internal_6267b6de3beab009adfb61c1427d73db08cbea6a434239174d8efb7440be3f5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6267b6de3beab009adfb61c1427d73db08cbea6a434239174d8efb7440be3f5b->enter($__internal_6267b6de3beab009adfb61c1427d73db08cbea6a434239174d8efb7440be3f5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_immutable_array_widget_row"));

        // line 437
        echo "    ";
        ob_start();
        // line 438
        echo "        <div class=\"form-group";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "vars", array()), "errors", array())) > 0)) {
            echo " error";
        }
        echo "\" id=\"sonata-ba-field-container-";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
        echo "\">

            ";
        // line 440
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), 'label');
        echo "

            ";
        // line 442
        $context["div_class"] = "";
        // line 443
        echo "            ";
        if (($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "options", array()), "form_type", array(), "array") == "horizontal")) {
            // line 444
            echo "                ";
            $context["div_class"] = "col-sm-9";
            // line 445
            echo "            ";
        }
        // line 446
        echo "
            <div class=\"";
        // line 447
        echo twig_escape_filter($this->env, (isset($context["div_class"]) ? $context["div_class"] : $this->getContext($context, "div_class")), "html", null, true);
        echo " sonata-ba-field sonata-ba-field-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "edit", array()), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "inline", array()), "html", null, true);
        echo " ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "vars", array()), "errors", array())) > 0)) {
            echo "sonata-ba-field-error";
        }
        echo "\">
                ";
        // line 448
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), 'widget', array("horizontal" => false, "horizontal_input_wrapper_class" => ""));
        echo " ";
        // line 449
        echo "            </div>

            ";
        // line 451
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "vars", array()), "errors", array())) > 0)) {
            // line 452
            echo "                <div class=\"help-block sonata-ba-field-error-messages\">
                    ";
            // line 453
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), 'errors');
            echo "
                </div>
            ";
        }
        // line 456
        echo "        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_6267b6de3beab009adfb61c1427d73db08cbea6a434239174d8efb7440be3f5b->leave($__internal_6267b6de3beab009adfb61c1427d73db08cbea6a434239174d8efb7440be3f5b_prof);

        
        $__internal_0e1f06661f6ea1827d44f14933e72eaf3bbeb490de74cb973eac1e0ffc634f55->leave($__internal_0e1f06661f6ea1827d44f14933e72eaf3bbeb490de74cb973eac1e0ffc634f55_prof);

    }

    // line 460
    public function block_sonata_type_model_autocomplete_widget($context, array $blocks = array())
    {
        $__internal_151309ed18d5bccd8978db7ebb55777f35d58869d01bf7e4614c8d4a2ec30f8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_151309ed18d5bccd8978db7ebb55777f35d58869d01bf7e4614c8d4a2ec30f8c->enter($__internal_151309ed18d5bccd8978db7ebb55777f35d58869d01bf7e4614c8d4a2ec30f8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_model_autocomplete_widget"));

        $__internal_a09c20e2d3dca08574ddc54f60240be808f5bb01eaadb593a6c3e62ed33c5b58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a09c20e2d3dca08574ddc54f60240be808f5bb01eaadb593a6c3e62ed33c5b58->enter($__internal_a09c20e2d3dca08574ddc54f60240be808f5bb01eaadb593a6c3e62ed33c5b58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_model_autocomplete_widget"));

        // line 461
        echo "    ";
        $this->loadTemplate((isset($context["template"]) ? $context["template"] : $this->getContext($context, "template")), "SonataAdminBundle:Form:form_admin_fields.html.twig", 461)->display($context);
        
        $__internal_a09c20e2d3dca08574ddc54f60240be808f5bb01eaadb593a6c3e62ed33c5b58->leave($__internal_a09c20e2d3dca08574ddc54f60240be808f5bb01eaadb593a6c3e62ed33c5b58_prof);

        
        $__internal_151309ed18d5bccd8978db7ebb55777f35d58869d01bf7e4614c8d4a2ec30f8c->leave($__internal_151309ed18d5bccd8978db7ebb55777f35d58869d01bf7e4614c8d4a2ec30f8c_prof);

    }

    // line 464
    public function block_sonata_type_choice_field_mask_widget($context, array $blocks = array())
    {
        $__internal_aa5b1134d64910284382c707d6740d1d6188374cf86f1ffb1ebed8a9c0e43c60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa5b1134d64910284382c707d6740d1d6188374cf86f1ffb1ebed8a9c0e43c60->enter($__internal_aa5b1134d64910284382c707d6740d1d6188374cf86f1ffb1ebed8a9c0e43c60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_choice_field_mask_widget"));

        $__internal_71c9be70308d5699df1d78212a4146a9e5b184a64545a5892f8f45d672ee728b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71c9be70308d5699df1d78212a4146a9e5b184a64545a5892f8f45d672ee728b->enter($__internal_71c9be70308d5699df1d78212a4146a9e5b184a64545a5892f8f45d672ee728b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_choice_field_mask_widget"));

        // line 465
        echo "    ";
        $this->displayBlock("choice_widget", $context, $blocks);
        echo "
    ";
        // line 466
        $context["main_form_name"] = twig_slice($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), 0, (twig_length_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))) - twig_length_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")))));
        // line 467
        echo "    <script>
        jQuery(document).ready(function() {
            var allFields = ";
        // line 469
        echo twig_jsonencode_filter((isset($context["all_fields"]) ? $context["all_fields"] : $this->getContext($context, "all_fields")));
        echo ";
            var map = ";
        // line 470
        echo twig_jsonencode_filter((isset($context["map"]) ? $context["map"] : $this->getContext($context, "map")));
        echo ";

            var showMaskChoiceEl = jQuery('#";
        // line 472
        echo twig_escape_filter($this->env, (isset($context["main_form_name"]) ? $context["main_form_name"] : $this->getContext($context, "main_form_name")), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "');

            showMaskChoiceEl.on('change', function () {
                choice_field_mask_show(jQuery(this).val());
            });

            function choice_field_mask_show(val)
            {
                var controlGroupIdFunc = function (field) {
                    return '#sonata-ba-field-container-";
        // line 481
        echo twig_escape_filter($this->env, (isset($context["main_form_name"]) ? $context["main_form_name"] : $this->getContext($context, "main_form_name")), "html", null, true);
        echo "' + field;

                };
                if (map[val] == undefined) {
                    jQuery.each(allFields, function (i, field) {
                        jQuery(controlGroupIdFunc(field)).hide();
                    });
                    return;
                }

                jQuery.each(allFields, function (i, field) {
                    jQuery(controlGroupIdFunc(field)).hide();
                });
                jQuery.each(map[val], function (i, field) {
                    jQuery(controlGroupIdFunc(field)).show();
                });
            }
            choice_field_mask_show(showMaskChoiceEl.val());
        });

    </script>
";
        
        $__internal_71c9be70308d5699df1d78212a4146a9e5b184a64545a5892f8f45d672ee728b->leave($__internal_71c9be70308d5699df1d78212a4146a9e5b184a64545a5892f8f45d672ee728b_prof);

        
        $__internal_aa5b1134d64910284382c707d6740d1d6188374cf86f1ffb1ebed8a9c0e43c60->leave($__internal_aa5b1134d64910284382c707d6740d1d6188374cf86f1ffb1ebed8a9c0e43c60_prof);

    }

    // line 504
    public function block_sonata_type_choice_multiple_sortable($context, array $blocks = array())
    {
        $__internal_4d96bc2d41d8528adae2022e676a5cda34bc0a2d056cb7962815c01bc47a5be4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d96bc2d41d8528adae2022e676a5cda34bc0a2d056cb7962815c01bc47a5be4->enter($__internal_4d96bc2d41d8528adae2022e676a5cda34bc0a2d056cb7962815c01bc47a5be4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_choice_multiple_sortable"));

        $__internal_55240680373b0f0e495aa64429928145c44e08d82fcd11caa65df62183d439dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55240680373b0f0e495aa64429928145c44e08d82fcd11caa65df62183d439dd->enter($__internal_55240680373b0f0e495aa64429928145c44e08d82fcd11caa65df62183d439dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_choice_multiple_sortable"));

        // line 505
        echo "    <input type=\"hidden\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["full_name"]) ? $context["full_name"] : $this->getContext($context, "full_name")), "html", null, true);
        echo "\" id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_join_filter((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), ","), "html", null, true);
        echo "\" />

    <script>
        jQuery(document).ready(function() {
            Admin.setup_sortable_select2(jQuery('#";
        // line 509
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "'), ";
        echo twig_jsonencode_filter($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "choices", array()));
        echo ");
        });
    </script>
";
        
        $__internal_55240680373b0f0e495aa64429928145c44e08d82fcd11caa65df62183d439dd->leave($__internal_55240680373b0f0e495aa64429928145c44e08d82fcd11caa65df62183d439dd_prof);

        
        $__internal_4d96bc2d41d8528adae2022e676a5cda34bc0a2d056cb7962815c01bc47a5be4->leave($__internal_4d96bc2d41d8528adae2022e676a5cda34bc0a2d056cb7962815c01bc47a5be4_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Form:form_admin_fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1652 => 509,  1640 => 505,  1631 => 504,  1599 => 481,  1586 => 472,  1581 => 470,  1577 => 469,  1573 => 467,  1571 => 466,  1566 => 465,  1557 => 464,  1546 => 461,  1537 => 460,  1525 => 456,  1519 => 453,  1516 => 452,  1514 => 451,  1510 => 449,  1507 => 448,  1495 => 447,  1492 => 446,  1489 => 445,  1486 => 444,  1483 => 443,  1481 => 442,  1476 => 440,  1464 => 438,  1461 => 437,  1452 => 436,  1438 => 431,  1435 => 430,  1418 => 428,  1401 => 427,  1396 => 425,  1391 => 424,  1388 => 423,  1379 => 422,  1367 => 418,  1363 => 416,  1361 => 415,  1356 => 414,  1339 => 412,  1322 => 411,  1318 => 410,  1313 => 409,  1310 => 408,  1307 => 407,  1304 => 406,  1301 => 405,  1298 => 404,  1295 => 403,  1292 => 402,  1290 => 401,  1281 => 400,  1269 => 396,  1264 => 393,  1262 => 392,  1257 => 391,  1247 => 383,  1245 => 382,  1242 => 381,  1240 => 380,  1231 => 379,  1220 => 376,  1218 => 375,  1209 => 374,  1198 => 371,  1196 => 370,  1187 => 369,  1175 => 365,  1169 => 363,  1167 => 362,  1164 => 361,  1158 => 358,  1155 => 357,  1153 => 356,  1150 => 355,  1147 => 354,  1143 => 353,  1140 => 352,  1137 => 351,  1134 => 350,  1132 => 349,  1129 => 348,  1126 => 347,  1123 => 346,  1121 => 345,  1118 => 344,  1112 => 342,  1110 => 341,  1107 => 340,  1104 => 339,  1101 => 338,  1098 => 337,  1095 => 336,  1092 => 335,  1089 => 334,  1086 => 333,  1083 => 332,  1080 => 331,  1077 => 330,  1075 => 329,  1073 => 328,  1070 => 327,  1067 => 326,  1064 => 325,  1062 => 324,  1059 => 323,  1057 => 322,  1054 => 321,  1051 => 320,  1048 => 319,  1046 => 318,  1037 => 317,  1034 => 316,  1025 => 315,  1012 => 310,  1006 => 308,  1000 => 305,  997 => 304,  995 => 303,  992 => 302,  986 => 300,  980 => 297,  977 => 296,  975 => 295,  970 => 293,  966 => 292,  961 => 291,  958 => 290,  952 => 288,  949 => 287,  947 => 286,  938 => 285,  925 => 280,  919 => 277,  914 => 276,  911 => 275,  905 => 272,  900 => 271,  898 => 270,  893 => 268,  889 => 267,  884 => 266,  881 => 265,  878 => 264,  875 => 263,  872 => 262,  866 => 260,  863 => 259,  861 => 258,  852 => 257,  838 => 251,  836 => 250,  835 => 249,  834 => 248,  833 => 247,  828 => 246,  825 => 245,  822 => 244,  819 => 243,  816 => 242,  810 => 240,  807 => 239,  805 => 238,  796 => 237,  780 => 231,  777 => 230,  774 => 229,  768 => 227,  766 => 226,  761 => 225,  758 => 224,  755 => 223,  751 => 221,  748 => 219,  745 => 217,  743 => 216,  736 => 215,  734 => 214,  731 => 213,  728 => 211,  725 => 209,  723 => 208,  716 => 207,  714 => 206,  706 => 205,  700 => 203,  697 => 202,  695 => 201,  692 => 200,  689 => 199,  686 => 198,  683 => 197,  680 => 196,  677 => 195,  675 => 194,  666 => 193,  654 => 189,  647 => 187,  644 => 186,  641 => 185,  637 => 184,  632 => 183,  629 => 182,  627 => 181,  618 => 180,  606 => 176,  603 => 174,  601 => 173,  599 => 172,  597 => 171,  595 => 170,  580 => 169,  577 => 168,  574 => 167,  571 => 166,  568 => 165,  565 => 164,  562 => 163,  559 => 162,  556 => 161,  553 => 160,  550 => 159,  548 => 158,  545 => 157,  542 => 156,  539 => 155,  530 => 154,  520 => 151,  511 => 150,  501 => 147,  492 => 146,  479 => 141,  473 => 139,  470 => 137,  468 => 136,  466 => 135,  464 => 134,  449 => 133,  446 => 132,  442 => 129,  439 => 126,  438 => 125,  437 => 124,  435 => 123,  433 => 122,  430 => 121,  427 => 120,  424 => 119,  421 => 118,  418 => 117,  415 => 116,  413 => 115,  410 => 114,  407 => 113,  405 => 112,  402 => 111,  400 => 110,  397 => 109,  394 => 108,  391 => 107,  388 => 106,  386 => 105,  377 => 104,  366 => 99,  364 => 98,  362 => 97,  359 => 95,  357 => 94,  355 => 93,  346 => 92,  335 => 88,  333 => 87,  331 => 86,  328 => 84,  326 => 83,  324 => 82,  315 => 81,  300 => 75,  297 => 74,  294 => 73,  291 => 72,  282 => 71,  271 => 68,  267 => 66,  265 => 65,  262 => 64,  259 => 63,  257 => 62,  251 => 60,  249 => 59,  247 => 58,  244 => 57,  241 => 56,  238 => 54,  236 => 53,  227 => 52,  214 => 49,  211 => 48,  202 => 47,  189 => 44,  186 => 43,  183 => 42,  180 => 41,  177 => 40,  168 => 39,  158 => 36,  154 => 35,  145 => 34,  130 => 29,  128 => 28,  126 => 27,  117 => 26,  106 => 23,  102 => 22,  99 => 21,  90 => 19,  86 => 18,  83 => 17,  78 => 16,  76 => 15,  67 => 14,  11 => 12,);
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

{% block form_errors -%}
    {% if errors|length > 0 %}
        {% if not form.parent %}<div class=\"alert alert-danger\">{% endif %}
            <ul class=\"list-unstyled\">
                {% for error in errors %}
                    <li><i class=\"fa fa-exclamation-circle\" aria-hidden=\"true\"></i> {{ error.message }}</li>
                {% endfor %}
            </ul>
        {% if not form.parent %}</div>{% endif %}
    {% endif %}
{%- endblock form_errors %}

{% block sonata_help %}
{% spaceless %}
{% if sonata_help is defined and sonata_help %}
    <span class=\"help-block sonata-ba-field-widget-help\">{{ sonata_help|raw }}</span>
{% endif %}
{% endspaceless %}
{% endblock %}

{% block form_widget -%}
    {{ parent() }}
    {{ block('sonata_help') }}
{%- endblock form_widget %}

{% block form_widget_simple %}
    {% set type = type|default('text') %}
    {% if type != 'file' %}
        {% set attr = attr|merge({'class': attr.class|default('') ~ ' form-control'}) %}
    {% endif %}
    {{ parent() }}
{% endblock form_widget_simple %}

{% block textarea_widget %}
    {% set attr = attr|merge({'class': attr.class|default('') ~ ' form-control'}) %}
    {{ parent() }}
{% endblock textarea_widget %}

{% block money_widget -%}
    {% if money_pattern == '{{ widget }}' %}
        {{- block('form_widget_simple') -}}
    {% else %}
        {% set currencySymbol = money_pattern|replace({'{{ widget }}': ''})|trim %}
        {% if money_pattern matches '/^{{ widget }}/' %}
            <div class=\"input-group\">
                {{- block('form_widget_simple') -}}
                <span class=\"input-group-addon\">{{ currencySymbol }}</span>
            </div>
        {% elseif money_pattern matches '/{{ widget }}\$/' %}
            <div class=\"input-group\">
                <span class=\"input-group-addon\">{{ currencySymbol }}</span>
                {{- block('form_widget_simple') -}}
            </div>
        {% endif %}
    {% endif %}
{%- endblock money_widget %}

{% block percent_widget %}
    {% spaceless %}
        {% set type = type|default('text') %}
        <div class=\"input-group\">
            {{ block('form_widget_simple') }}
            <span class=\"input-group-addon\">%</span>
        </div>
    {% endspaceless %}
{% endblock percent_widget %}

{% block checkbox_widget -%}
    {% set parent_label_class = parent_label_class|default('') -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"checkbox\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default('') -%}
    {% if 'radio-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"radio\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock radio_widget %}

{# Labels #}
{% block form_label %}
{% spaceless %}
    {% if label is not same as(false) and sonata_admin.options['form_type'] == 'horizontal' %}
        {% set label_class = 'col-sm-3' %}
    {% endif %}

    {% set label_class = label_class|default('') ~ ' control-label' %}

    {% if label is not same as(false) %}
        {% set label_attr = label_attr|merge({'class': label_attr.class|default('') ~ label_class }) %}

        {% if not compound %}
            {% set label_attr = label_attr|merge({'for': id}) %}
        {% endif %}
        {% if required %}
            {% set label_attr = label_attr|merge({'class': (label_attr.class|default('') ~ ' required')|trim}) %}
        {% endif %}

        {% if label is empty %}
            {%- if label_format is defined and label_format is not empty -%}
                {% set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {% endif %}

        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {% if translation_domain is same as(false) %}
                {{- label -}}
            {% elseif not sonata_admin.admin %}
                {{- label|trans({}, translation_domain) -}}
            {% else %}
                {{ label|trans({}, sonata_admin.field_description.translationDomain ?: admin.translationDomain) }}
            {% endif %}
        </label>
    {% endif %}
{% endspaceless %}
{% endblock form_label %}

{% block checkbox_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label %}
    {% if sonata_admin.admin %}
        {% set translation_domain = sonata_admin.field_description.translationDomain %}
    {% endif %}
    {# Do not display the label if widget is not defined in order to prevent double label rendering #}
    {% if widget is defined %}
        {% if required %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
        {% endif %}
        {% if parent_label_class is defined %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) %}
        {% endif %}
        {% if label is not same as(false) and label is empty %}
            {% set label = name|humanize %}
        {% endif %}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw -}}
            {%- if label is not same as(false) -%}
                <span class=\"control-label__text\">
                    {{- label|trans({}, translation_domain) -}}
                </span>
            {%- endif -%}
        </label>
    {% endif %}
{% endblock checkbox_radio_label %}

{% block choice_widget_expanded %}
{% spaceless %}
    {% set attr = attr|merge({'class': attr.class|default('') ~ ' list-unstyled'}) %}
    <ul {{ block('widget_container_attributes') }}>
    {% for child in form %}
        <li>
            {{ form_widget(child, {'horizontal': false, 'horizontal_input_wrapper_class': ''}) }} {# {'horizontal': false, 'horizontal_input_wrapper_class': ''} needed to avoid MopaBootstrapBundle messing with the DOM #}
        </li>
    {% endfor %}
    </ul>
{% endspaceless %}
{% endblock choice_widget_expanded %}

{% block choice_widget_collapsed %}
{% spaceless %}
    {% if required and placeholder is defined and placeholder is none %}
        {% set required = false %}
    {% elseif required and empty_value is defined and empty_value_in_choices is defined and empty_value is none and not empty_value_in_choices and not multiple %}
        {% set required = false %}
    {% endif %}

    {% set attr = attr|merge({'class': attr.class|default('') ~ ' form-control'}) %}
    {% if (sortable is defined) and sortable and multiple %}
        {{ block('sonata_type_choice_multiple_sortable') }}
    {% else %}
        <select {{ block('widget_attributes') }}{% if multiple %} multiple=\"multiple\"{% endif %} >
            {% if empty_value is defined and empty_value is not none %}
                <option value=\"\"{% if required and value is empty %} selected=\"selected\"{% endif %}>
                    {% if not sonata_admin.admin %}
                        {{- empty_value|trans({}, translation_domain) -}}
                    {% else %}
                        {{- empty_value|trans({}, sonata_admin.field_description.translationDomain) -}}
                    {% endif%}
                </option>
            {% elseif placeholder is defined and placeholder is not none %}
                <option value=\"\"{% if required and value is empty %} selected=\"selected\"{% endif %}>
                    {% if not sonata_admin.admin %}
                        {{- placeholder|trans({}, translation_domain) -}}
                    {% else %}
                        {{- placeholder|trans({}, sonata_admin.field_description.translationDomain) -}}
                    {% endif%}
                </option>
            {% endif %}
            {% if preferred_choices|length > 0 %}
                {% set options = preferred_choices %}
                {{ block('choice_widget_options') }}
                {% if choices|length > 0 %}
                    <option disabled=\"disabled\">{{ separator }}</option>
                {% endif %}
            {% endif %}
            {% set options = choices %}
            {{ block('choice_widget_options') }}
        </select>
    {% endif %}
{% endspaceless %}
{% endblock choice_widget_collapsed %}

{% block date_widget %}
{% spaceless %}
    {% if widget == 'single_text' %}
        {{ block('form_widget_simple') }}
    {% else %}
        {% if row is not defined or row == true %}
            {% set attr = attr|merge({'class': attr.class|default('') ~ ' row' }) %}
        {% endif %}
        {% set input_wrapper_class = input_wrapper_class|default('col-sm-4') %}
        <div {{ block('widget_container_attributes') }}>
            {{ date_pattern|replace({
                '{{ year }}':  '<div class=\"'~ input_wrapper_class ~ '\">' ~ form_widget(form.year) ~ '</div>',
                '{{ month }}': '<div class=\"'~ input_wrapper_class ~ '\">' ~ form_widget(form.month) ~ '</div>',
                '{{ day }}':   '<div class=\"'~ input_wrapper_class ~ '\">' ~ form_widget(form.day) ~ '</div>',
            })|raw }}
        </div>
    {% endif %}
{% endspaceless %}
{% endblock date_widget %}

{% block time_widget %}
{% spaceless %}
    {% if widget == 'single_text' %}
        {{ block('form_widget_simple') }}
    {% else %}
        {% if row is not defined or row == true %}
            {% set attr = attr|merge({'class': attr.class|default('') ~ ' row' }) %}
        {% endif %}
        {% set input_wrapper_class = input_wrapper_class|default('col-sm-6') %}
        <div {{ block('widget_container_attributes') }}>
            <div class=\"{{ input_wrapper_class }}\">
                {{ form_widget(form.hour) }}
            </div>
            {% if with_minutes %}
                <div class=\"{{ input_wrapper_class }}\">
                    {{ form_widget(form.minute) }}
                </div>
            {% endif %}
            {% if with_seconds %}
                <div class=\"{{ input_wrapper_class }}\">
                    {{ form_widget(form.second) }}
                </div>
            {% endif %}
        </div>
    {% endif %}
{% endspaceless %}
{% endblock time_widget %}

{% block datetime_widget %}
{% spaceless %}
    {% if widget == 'single_text' %}
        {{ block('form_widget_simple') }}
    {% else %}
        {% set attr = attr|merge({'class': attr.class|default('') ~ ' row' }) %}
        <div {{ block('widget_container_attributes') }}>
            {{ form_errors(form.date) }}
            {{ form_errors(form.time) }}

            {% if form.date.vars.widget == 'single_text' %}
                <div class=\"col-sm-2\">
                    {{ form_widget(form.date) }}
                </div>
            {% else %}
                {{ form_widget(form.date, {'row': false, 'input_wrapper_class': 'col-sm-2'}) }}
            {% endif %}

            {% if form.time.vars.widget == 'single_text' %}
                <div class=\"col-sm-2\">
                    {{ form_widget(form.time) }}
                </div>
            {% else %}
                {{ form_widget(form.time, {'row': false, 'input_wrapper_class': 'col-sm-2'}) }}
            {% endif %}
        </div>
    {% endif %}
{% endspaceless %}
{% endblock datetime_widget %}

{% block form_row %}
    {% set show_label = show_label|default(true) %}
    <div class=\"form-group{% if errors|length > 0 %} has-error{% endif %}\" id=\"sonata-ba-field-container-{{ id }}\">
        {% if sonata_admin.field_description.options is defined %}
            {% set label = sonata_admin.field_description.options.name|default(label)  %}
        {% endif %}

        {% set div_class = 'sonata-ba-field' %}

        {% if label is same as(false) %}
            {% set div_class = div_class ~ ' sonata-collection-row-without-label' %}
        {% endif %}

        {% if sonata_admin is defined and sonata_admin.options['form_type'] == 'horizontal' %}
            {# Add an offset if no label or is a checkbox/radio #}
            {% if label is same as(false) or form.vars.checked is defined %}
                {% if 'collection' in form.parent.vars.block_prefixes %}
                    {% set div_class = div_class ~ ' col-sm-12' %}
                {% else %}
                    {% set div_class = div_class ~ ' col-sm-9 col-sm-offset-3' %}
                {% endif %}
            {% else %}
                {% set div_class = div_class ~ ' col-sm-9' %}
            {% endif %}
        {% endif %}

        {% if show_label %}
            {{ form_label(form, label|default(null)) }}
        {% endif %}

        {% if sonata_admin is defined and sonata_admin_enabled %}
            {% set div_class = div_class ~ ' sonata-ba-field-' ~ sonata_admin.edit ~ '-' ~ sonata_admin.inline %}
        {% endif %}

        {% if errors|length > 0 %}
            {% set div_class = div_class ~ ' sonata-ba-field-error' %}
        {% endif %}

        <div class=\"{{ div_class }}\">
            {{ form_widget(form, {'horizontal': false, 'horizontal_input_wrapper_class': ''}) }} {# {'horizontal': false, 'horizontal_input_wrapper_class': ''} needed to avoid MopaBootstrapBundle messing with the DOM #}

            {% if errors|length > 0 %}
                <div class=\"help-block sonata-ba-field-error-messages\">
                    {{ form_errors(form) }}
                </div>
            {% endif %}

            {% if sonata_admin is defined and sonata_admin_enabled and sonata_admin.field_description.help|default(false) %}
                <span class=\"help-block sonata-ba-field-help\">{{ sonata_admin.field_description.help|trans({}, sonata_admin.field_description.translationDomain ?: admin.translationDomain)|raw }}</span>
            {% endif %}
        </div>
    </div>
{% endblock form_row %}

{% block checkbox_row -%}
    {% set show_label = false %}
    {{ block('form_row') }}
{%- endblock checkbox_row %}

{% block radio_row -%}
    {% set show_label = false %}
    {{ block('form_row') }}
{%- endblock radio_row %}

{% block sonata_type_native_collection_widget_row %}
{% spaceless %}
    <div class=\"sonata-collection-row\">
        {% if allow_delete %}
            <div class=\"row\">
                <div class=\"col-xs-1\">
                    <a href=\"#\" class=\"btn btn-link sonata-collection-delete\">
                        <i class=\"fa fa-minus-circle\" aria-hidden=\"true\"></i>
                    </a>
                </div>
                <div class=\"col-xs-11\">
        {% endif %}
            {{ form_row(child, { label: false }) }}
        {% if allow_delete %}
                </div>
            </div>
        {% endif %}
    </div>
{% endspaceless %}
{% endblock sonata_type_native_collection_widget_row %}

{% block sonata_type_native_collection_widget %}
{% spaceless %}
    {% if prototype is defined %}
        {% set child = prototype %}
        {% set allow_delete_backup = allow_delete %}
        {% set allow_delete = true %}
        {% set attr = attr|merge({'data-prototype': block('sonata_type_native_collection_widget_row'), 'data-prototype-name': prototype.vars.name, 'class': attr.class|default('') }) %}
        {% set allow_delete = allow_delete_backup %}
    {% endif %}
    <div {{ block('widget_container_attributes') }}>
        {{ form_errors(form) }}
        {% for child in form %}
            {{ block('sonata_type_native_collection_widget_row') }}
        {% endfor %}
        {{ form_rest(form) }}
        {% if allow_add %}
            <div><a href=\"#\" class=\"btn btn-link sonata-collection-add\"><i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i></a></div>
        {% endif %}
    </div>
{% endspaceless %}
{% endblock sonata_type_native_collection_widget %}

{% block sonata_type_immutable_array_widget %}
    {% spaceless %}
        <div {{ block('widget_container_attributes') }}>
            {{ form_errors(form) }}

            {% for key, child in form %}
                {{ block('sonata_type_immutable_array_widget_row') }}
            {% endfor %}

            {{ form_rest(form) }}
        </div>
    {% endspaceless %}
{% endblock sonata_type_immutable_array_widget %}

{% block sonata_type_immutable_array_widget_row %}
    {% spaceless %}
        <div class=\"form-group{% if child.vars.errors|length > 0%} error{%endif%}\" id=\"sonata-ba-field-container-{{ id }}-{{ key }}\">

            {{ form_label(child) }}

            {% set div_class = \"\" %}
            {% if sonata_admin.options['form_type'] == 'horizontal' %}
                {% set div_class = 'col-sm-9' %}
            {% endif%}

            <div class=\"{{ div_class }} sonata-ba-field sonata-ba-field-{{ sonata_admin.edit }}-{{ sonata_admin.inline }} {% if child.vars.errors|length > 0 %}sonata-ba-field-error{% endif %}\">
                {{ form_widget(child, {'horizontal': false, 'horizontal_input_wrapper_class': ''}) }} {# {'horizontal': false, 'horizontal_input_wrapper_class': ''} needed to avoid MopaBootstrapBundle messing with the DOM #}
            </div>

            {% if child.vars.errors|length > 0 %}
                <div class=\"help-block sonata-ba-field-error-messages\">
                    {{ form_errors(child) }}
                </div>
            {% endif %}
        </div>
    {% endspaceless %}
{% endblock %}

{% block sonata_type_model_autocomplete_widget %}
    {% include template %}
{% endblock sonata_type_model_autocomplete_widget %}

{% block sonata_type_choice_field_mask_widget %}
    {{ block('choice_widget') }}
    {% set main_form_name = id|slice(0, id|length - name|length) %}
    <script>
        jQuery(document).ready(function() {
            var allFields = {{ all_fields|json_encode|raw }};
            var map = {{ map|json_encode|raw }};

            var showMaskChoiceEl = jQuery('#{{ main_form_name }}{{ name }}');

            showMaskChoiceEl.on('change', function () {
                choice_field_mask_show(jQuery(this).val());
            });

            function choice_field_mask_show(val)
            {
                var controlGroupIdFunc = function (field) {
                    return '#sonata-ba-field-container-{{ main_form_name }}' + field;

                };
                if (map[val] == undefined) {
                    jQuery.each(allFields, function (i, field) {
                        jQuery(controlGroupIdFunc(field)).hide();
                    });
                    return;
                }

                jQuery.each(allFields, function (i, field) {
                    jQuery(controlGroupIdFunc(field)).hide();
                });
                jQuery.each(map[val], function (i, field) {
                    jQuery(controlGroupIdFunc(field)).show();
                });
            }
            choice_field_mask_show(showMaskChoiceEl.val());
        });

    </script>
{% endblock %}

{%  block sonata_type_choice_multiple_sortable %}
    <input type=\"hidden\" name=\"{{ full_name }}\" id=\"{{ id }}\" value=\"{{ value|join(',') }}\" />

    <script>
        jQuery(document).ready(function() {
            Admin.setup_sortable_select2(jQuery('#{{ id }}'), {{ form.vars.choices|json_encode|raw }});
        });
    </script>
{% endblock %}
", "SonataAdminBundle:Form:form_admin_fields.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\Form\\form_admin_fields.html.twig");
    }
}
