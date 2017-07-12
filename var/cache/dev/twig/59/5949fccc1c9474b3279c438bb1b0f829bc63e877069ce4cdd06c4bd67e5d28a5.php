<?php

/* @EasyAdmin/form/bootstrap_3_layout.html.twig */
class __TwigTemplate_3d6e3434ccd23eaf2dd9242222f6d4e97acc978ac962a86afc166179bd1661d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "@EasyAdmin/form/bootstrap_3_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_start' => array($this, 'block_form_start'),
                'form_widget' => array($this, 'block_form_widget'),
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'button_widget' => array($this, 'block_button_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'form_label' => array($this, 'block_form_label'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'collection_row' => array($this, 'block_collection_row'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
                'form_widget_compound' => array($this, 'block_form_widget_compound'),
                'empty_collection' => array($this, 'block_empty_collection'),
                'vich_file_row' => array($this, 'block_vich_file_row'),
                'vich_file_widget' => array($this, 'block_vich_file_widget'),
                'vich_image_row' => array($this, 'block_vich_image_row'),
                'vich_image_widget' => array($this, 'block_vich_image_widget'),
                'easyadmin_widget' => array($this, 'block_easyadmin_widget'),
                'item_actions' => array($this, 'block_item_actions'),
                'easyadmin_autocomplete_widget' => array($this, 'block_easyadmin_autocomplete_widget'),
                'easyadmin_autocomplete_inner_label' => array($this, 'block_easyadmin_autocomplete_inner_label'),
                'easyadmin_divider_row' => array($this, 'block_easyadmin_divider_row'),
                'easyadmin_section_row' => array($this, 'block_easyadmin_section_row'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0cba8a0ee7e32bde87e332fe66266095a9eb6b2ecacdcfc2fd47a5a7fbf1be15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cba8a0ee7e32bde87e332fe66266095a9eb6b2ecacdcfc2fd47a5a7fbf1be15->enter($__internal_0cba8a0ee7e32bde87e332fe66266095a9eb6b2ecacdcfc2fd47a5a7fbf1be15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/form/bootstrap_3_layout.html.twig"));

        $__internal_53a0b0cd6640011e446abbeb8c167452fe0646b3c2725bae353a077d576d10d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53a0b0cd6640011e446abbeb8c167452fe0646b3c2725bae353a077d576d10d0->enter($__internal_53a0b0cd6640011e446abbeb8c167452fe0646b3c2725bae353a077d576d10d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/form/bootstrap_3_layout.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_start', $context, $blocks);
        // line 19
        echo "
";
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('form_widget', $context, $blocks);
        // line 49
        echo "
";
        // line 50
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 56
        echo "
";
        // line 57
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 61
        echo "
";
        // line 62
        $this->displayBlock('button_widget', $context, $blocks);
        // line 66
        echo "
";
        // line 67
        $this->displayBlock('money_widget', $context, $blocks);
        // line 79
        echo "
";
        // line 80
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 86
        echo "
";
        // line 87
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 100
        echo "
";
        // line 101
        $this->displayBlock('date_widget', $context, $blocks);
        // line 119
        echo "
";
        // line 120
        $this->displayBlock('time_widget', $context, $blocks);
        // line 134
        echo "
";
        // line 135
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 162
        echo "
";
        // line 163
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 182
        echo "
";
        // line 183
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 193
        echo "
";
        // line 194
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 204
        echo "
";
        // line 206
        echo "
";
        // line 207
        $this->displayBlock('form_label', $context, $blocks);
        // line 211
        echo "
";
        // line 212
        $this->displayBlock('choice_label', $context, $blocks);
        // line 217
        echo "
";
        // line 218
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 221
        echo "
";
        // line 222
        $this->displayBlock('radio_label', $context, $blocks);
        // line 225
        echo "
";
        // line 226
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 244
        echo "
";
        // line 246
        echo "
";
        // line 247
        $this->displayBlock('form_row', $context, $blocks);
        // line 270
        echo "
";
        // line 271
        $this->displayBlock('collection_row', $context, $blocks);
        // line 306
        echo "
";
        // line 307
        $this->displayBlock('button_row', $context, $blocks);
        // line 312
        echo "
";
        // line 313
        $this->displayBlock('choice_row', $context, $blocks);
        // line 317
        echo "
";
        // line 318
        $this->displayBlock('date_row', $context, $blocks);
        // line 322
        echo "
";
        // line 323
        $this->displayBlock('time_row', $context, $blocks);
        // line 327
        echo "
";
        // line 328
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 332
        echo "
";
        // line 333
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 339
        echo "
";
        // line 340
        $this->displayBlock('radio_row', $context, $blocks);
        // line 346
        echo "
";
        // line 348
        $this->displayBlock('form_errors', $context, $blocks);
        // line 366
        $this->displayBlock('form_widget_compound', $context, $blocks);
        // line 377
        $this->displayBlock('empty_collection', $context, $blocks);
        // line 382
        echo "
";
        // line 383
        $this->displayBlock('vich_file_row', $context, $blocks);
        // line 387
        echo "
";
        // line 388
        $this->displayBlock('vich_file_widget', $context, $blocks);
        // line 409
        echo "
";
        // line 410
        $this->displayBlock('vich_image_row', $context, $blocks);
        // line 414
        echo "
";
        // line 415
        $this->displayBlock('vich_image_widget', $context, $blocks);
        // line 437
        echo "
";
        // line 439
        $this->displayBlock('easyadmin_widget', $context, $blocks);
        // line 521
        echo "
";
        // line 523
        $this->displayBlock('easyadmin_autocomplete_widget', $context, $blocks);
        // line 534
        echo "
";
        // line 535
        $this->displayBlock('easyadmin_autocomplete_inner_label', $context, $blocks);
        // line 539
        echo "
";
        // line 541
        $this->displayBlock('easyadmin_divider_row', $context, $blocks);
        // line 546
        echo "
";
        // line 548
        $this->displayBlock('easyadmin_section_row', $context, $blocks);
        
        $__internal_0cba8a0ee7e32bde87e332fe66266095a9eb6b2ecacdcfc2fd47a5a7fbf1be15->leave($__internal_0cba8a0ee7e32bde87e332fe66266095a9eb6b2ecacdcfc2fd47a5a7fbf1be15_prof);

        
        $__internal_53a0b0cd6640011e446abbeb8c167452fe0646b3c2725bae353a077d576d10d0->leave($__internal_53a0b0cd6640011e446abbeb8c167452fe0646b3c2725bae353a077d576d10d0_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_15bd631472fd03c8cf5bd7739bc508f9a216aaceb59d0aeb28f09b16c338d1b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15bd631472fd03c8cf5bd7739bc508f9a216aaceb59d0aeb28f09b16c338d1b3->enter($__internal_15bd631472fd03c8cf5bd7739bc508f9a216aaceb59d0aeb28f09b16c338d1b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_fb4fef1dd7e0c4f481230fd389c90caa7f7a66975c8edb6152b90a245f907695 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb4fef1dd7e0c4f481230fd389c90caa7f7a66975c8edb6152b90a245f907695->enter($__internal_fb4fef1dd7e0c4f481230fd389c90caa7f7a66975c8edb6152b90a245f907695_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        if (("easyadmin" == twig_first($this->env, twig_slice($this->env, (isset($context["block_prefixes"]) ? $context["block_prefixes"] : $this->getContext($context, "block_prefixes")),  -2)))) {
            // line 5
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_join_filter(array(0 => (((((            // line 7
array_key_exists("_easyadmin_form_type", $context)) ? (_twig_default_filter((isset($context["_easyadmin_form_type"]) ? $context["_easyadmin_form_type"] : $this->getContext($context, "_easyadmin_form_type")), "")) : ("")) == "horizontal")) ? ("form-horizontal") : ("form-vertical")), 1 => (($this->getAttribute(            // line 8
(isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")), 2 => ($this->getAttribute(            // line 9
(isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "view", array()) . "-form")), " "), "data-view" => $this->getAttribute(            // line 11
(isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "view", array()), "data-entity" => $this->getAttribute($this->getAttribute(            // line 12
(isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "name", array()), "data-entity-id" => $this->getAttribute(            // line 13
(isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), $this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "primary_key_field_name", array()))));
            // line 15
            echo "    ";
        }
        // line 17
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_fb4fef1dd7e0c4f481230fd389c90caa7f7a66975c8edb6152b90a245f907695->leave($__internal_fb4fef1dd7e0c4f481230fd389c90caa7f7a66975c8edb6152b90a245f907695_prof);

        
        $__internal_15bd631472fd03c8cf5bd7739bc508f9a216aaceb59d0aeb28f09b16c338d1b3->leave($__internal_15bd631472fd03c8cf5bd7739bc508f9a216aaceb59d0aeb28f09b16c338d1b3_prof);

    }

    // line 22
    public function block_form_widget($context, array $blocks = array())
    {
        $__internal_04004c3ef7bad00821c3371f735cae3bd8953c65876c3f782b47a4c2d57f3939 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04004c3ef7bad00821c3371f735cae3bd8953c65876c3f782b47a4c2d57f3939->enter($__internal_04004c3ef7bad00821c3371f735cae3bd8953c65876c3f782b47a4c2d57f3939_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        $__internal_8f39f3a811e668e81380aafcd8db69b4a78fd1d053ebf11df080386bf5fdd19d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f39f3a811e668e81380aafcd8db69b4a78fd1d053ebf11df080386bf5fdd19d->enter($__internal_8f39f3a811e668e81380aafcd8db69b4a78fd1d053ebf11df080386bf5fdd19d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        // line 23
        $this->displayParentBlock("form_widget", $context, $blocks);
        // line 25
        if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "allow_delete", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "allow_delete", array()), false)) : (false))) {
            // line 26
            echo "        ";
            ob_start();
            // line 27
            echo "            \$(function() {
            if (event.preventDefault) event.preventDefault(); else event.returnValue = false;

            var containerDiv = \$('#";
            // line 30
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "').parents('.form-group:first');
            var parentDiv = containerDiv.parents('[data-prototype]:first');
            containerDiv.remove();
            parentDiv.trigger('easyadmin.collection.item-deleted');

            if (0 == parentDiv.children().length && 'undefined' !== parentDiv.attr('data-empty-collection')) {
                \$(parentDiv.attr('data-empty-collection')).insertBefore(parentDiv);
            }
            });
        ";
            $context["remove_item_javascript"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 40
            echo "
        <div class=\"text-right field-collection-item-action\">
            <a href=\"#\" onclick=\"";
            // line 42
            echo (isset($context["remove_item_javascript"]) ? $context["remove_item_javascript"] : $this->getContext($context, "remove_item_javascript"));
            echo "\" class=\"text-danger\">
                <i class=\"fa fa-remove\"></i>
                ";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action.remove_item", array(), "EasyAdminBundle"), "html", null, true);
            echo "
            </a>
        </div>
    ";
        }
        
        $__internal_8f39f3a811e668e81380aafcd8db69b4a78fd1d053ebf11df080386bf5fdd19d->leave($__internal_8f39f3a811e668e81380aafcd8db69b4a78fd1d053ebf11df080386bf5fdd19d_prof);

        
        $__internal_04004c3ef7bad00821c3371f735cae3bd8953c65876c3f782b47a4c2d57f3939->leave($__internal_04004c3ef7bad00821c3371f735cae3bd8953c65876c3f782b47a4c2d57f3939_prof);

    }

    // line 50
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_b41dfc9080a61f106fe4b16455eb84eb88c83bba54e30f7f000c141aa60d7b1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b41dfc9080a61f106fe4b16455eb84eb88c83bba54e30f7f000c141aa60d7b1a->enter($__internal_b41dfc9080a61f106fe4b16455eb84eb88c83bba54e30f7f000c141aa60d7b1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_1e3d4a392afc9074186d2e4214e39a8f99071ccd7cb445013eef5164425b454c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e3d4a392afc9074186d2e4214e39a8f99071ccd7cb445013eef5164425b454c->enter($__internal_1e3d4a392afc9074186d2e4214e39a8f99071ccd7cb445013eef5164425b454c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 51
        if (( !array_key_exists("type", $context) || !twig_in_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 52
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 54
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_1e3d4a392afc9074186d2e4214e39a8f99071ccd7cb445013eef5164425b454c->leave($__internal_1e3d4a392afc9074186d2e4214e39a8f99071ccd7cb445013eef5164425b454c_prof);

        
        $__internal_b41dfc9080a61f106fe4b16455eb84eb88c83bba54e30f7f000c141aa60d7b1a->leave($__internal_b41dfc9080a61f106fe4b16455eb84eb88c83bba54e30f7f000c141aa60d7b1a_prof);

    }

    // line 57
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_02d2ed5906b0a6ecd4895ae0f2fe5897c7fb312965bf7a2186a1107bf0a2b6f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02d2ed5906b0a6ecd4895ae0f2fe5897c7fb312965bf7a2186a1107bf0a2b6f3->enter($__internal_02d2ed5906b0a6ecd4895ae0f2fe5897c7fb312965bf7a2186a1107bf0a2b6f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_4fae481279c049d11ebd3b3be3928ceb1ac8b4ecf236264cc4eda1c95f152d68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fae481279c049d11ebd3b3be3928ceb1ac8b4ecf236264cc4eda1c95f152d68->enter($__internal_4fae481279c049d11ebd3b3be3928ceb1ac8b4ecf236264cc4eda1c95f152d68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 58
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 59
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_4fae481279c049d11ebd3b3be3928ceb1ac8b4ecf236264cc4eda1c95f152d68->leave($__internal_4fae481279c049d11ebd3b3be3928ceb1ac8b4ecf236264cc4eda1c95f152d68_prof);

        
        $__internal_02d2ed5906b0a6ecd4895ae0f2fe5897c7fb312965bf7a2186a1107bf0a2b6f3->leave($__internal_02d2ed5906b0a6ecd4895ae0f2fe5897c7fb312965bf7a2186a1107bf0a2b6f3_prof);

    }

    // line 62
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_14a251fa5f48225c17e24aeb61f4c406167e12974144b04aedf25e303904b2d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14a251fa5f48225c17e24aeb61f4c406167e12974144b04aedf25e303904b2d1->enter($__internal_14a251fa5f48225c17e24aeb61f4c406167e12974144b04aedf25e303904b2d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_8a0f6609169fc76ab3718e68221f1e7dce1d42f7ec9011d352786c3b214b27cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a0f6609169fc76ab3718e68221f1e7dce1d42f7ec9011d352786c3b214b27cf->enter($__internal_8a0f6609169fc76ab3718e68221f1e7dce1d42f7ec9011d352786c3b214b27cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 63
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 64
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_8a0f6609169fc76ab3718e68221f1e7dce1d42f7ec9011d352786c3b214b27cf->leave($__internal_8a0f6609169fc76ab3718e68221f1e7dce1d42f7ec9011d352786c3b214b27cf_prof);

        
        $__internal_14a251fa5f48225c17e24aeb61f4c406167e12974144b04aedf25e303904b2d1->leave($__internal_14a251fa5f48225c17e24aeb61f4c406167e12974144b04aedf25e303904b2d1_prof);

    }

    // line 67
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_45836db5cbe9908ab2fed7f73f6a7f9bb7fd66a9ddc870471df828d6c9d978d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45836db5cbe9908ab2fed7f73f6a7f9bb7fd66a9ddc870471df828d6c9d978d8->enter($__internal_45836db5cbe9908ab2fed7f73f6a7f9bb7fd66a9ddc870471df828d6c9d978d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_cc82688f35c0488ecc113b822d3908a486ed4543f59f2c467046f274291290b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc82688f35c0488ecc113b822d3908a486ed4543f59f2c467046f274291290b2->enter($__internal_cc82688f35c0488ecc113b822d3908a486ed4543f59f2c467046f274291290b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 68
        echo "<div class=\"input-group\">
        ";
        // line 69
        $context["prepend"] = ("{{" == twig_slice($this->env, (isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), 0, 2));
        // line 70
        echo "        ";
        if ( !(isset($context["prepend"]) ? $context["prepend"] : $this->getContext($context, "prepend"))) {
            // line 71
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 73
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 74
        if ((isset($context["prepend"]) ? $context["prepend"] : $this->getContext($context, "prepend"))) {
            // line 75
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 77
        echo "    </div>";
        
        $__internal_cc82688f35c0488ecc113b822d3908a486ed4543f59f2c467046f274291290b2->leave($__internal_cc82688f35c0488ecc113b822d3908a486ed4543f59f2c467046f274291290b2_prof);

        
        $__internal_45836db5cbe9908ab2fed7f73f6a7f9bb7fd66a9ddc870471df828d6c9d978d8->leave($__internal_45836db5cbe9908ab2fed7f73f6a7f9bb7fd66a9ddc870471df828d6c9d978d8_prof);

    }

    // line 80
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_3d8738d828a6de44f853252e5c1396485e5f47b7b381633265497e251f783a97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d8738d828a6de44f853252e5c1396485e5f47b7b381633265497e251f783a97->enter($__internal_3d8738d828a6de44f853252e5c1396485e5f47b7b381633265497e251f783a97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_260f4973f335900ea081afc8d84ca38f8214d20c1f30ad24d82029a96bcaa719 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_260f4973f335900ea081afc8d84ca38f8214d20c1f30ad24d82029a96bcaa719->enter($__internal_260f4973f335900ea081afc8d84ca38f8214d20c1f30ad24d82029a96bcaa719_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 81
        echo "<div class=\"input-group\">";
        // line 82
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 83
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_260f4973f335900ea081afc8d84ca38f8214d20c1f30ad24d82029a96bcaa719->leave($__internal_260f4973f335900ea081afc8d84ca38f8214d20c1f30ad24d82029a96bcaa719_prof);

        
        $__internal_3d8738d828a6de44f853252e5c1396485e5f47b7b381633265497e251f783a97->leave($__internal_3d8738d828a6de44f853252e5c1396485e5f47b7b381633265497e251f783a97_prof);

    }

    // line 87
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_5231a53b70b1710690109cf0a04dd26957e10f352d2d2e00201efb49a1e65b8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5231a53b70b1710690109cf0a04dd26957e10f352d2d2e00201efb49a1e65b8b->enter($__internal_5231a53b70b1710690109cf0a04dd26957e10f352d2d2e00201efb49a1e65b8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_1295ed06e59451a53a1104abad6587c98e74c43798e3dc03d2de111e58001fd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1295ed06e59451a53a1104abad6587c98e74c43798e3dc03d2de111e58001fd8->enter($__internal_1295ed06e59451a53a1104abad6587c98e74c43798e3dc03d2de111e58001fd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 88
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 89
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 91
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 92
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 93
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'errors');
            // line 94
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'errors');
            // line 95
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            // line 96
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            // line 97
            echo "</div>";
        }
        
        $__internal_1295ed06e59451a53a1104abad6587c98e74c43798e3dc03d2de111e58001fd8->leave($__internal_1295ed06e59451a53a1104abad6587c98e74c43798e3dc03d2de111e58001fd8_prof);

        
        $__internal_5231a53b70b1710690109cf0a04dd26957e10f352d2d2e00201efb49a1e65b8b->leave($__internal_5231a53b70b1710690109cf0a04dd26957e10f352d2d2e00201efb49a1e65b8b_prof);

    }

    // line 101
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_870424dc43f5715fef230d8c4bc0406f1bd3dc9f5b0edcd9c7afbe8f2df47d73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_870424dc43f5715fef230d8c4bc0406f1bd3dc9f5b0edcd9c7afbe8f2df47d73->enter($__internal_870424dc43f5715fef230d8c4bc0406f1bd3dc9f5b0edcd9c7afbe8f2df47d73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_0d1693edb4acf364512d5f8f00fe7f01472e577d5495ce9d00b29c4b117505bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d1693edb4acf364512d5f8f00fe7f01472e577d5495ce9d00b29c4b117505bd->enter($__internal_0d1693edb4acf364512d5f8f00fe7f01472e577d5495ce9d00b29c4b117505bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 102
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 103
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 105
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 106
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime")))) {
                // line 107
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 109
            echo twig_replace_filter((isset($context["date_pattern"]) ? $context["date_pattern"] : $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 110
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 111
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 112
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 114
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime")))) {
                // line 115
                echo "</div>";
            }
        }
        
        $__internal_0d1693edb4acf364512d5f8f00fe7f01472e577d5495ce9d00b29c4b117505bd->leave($__internal_0d1693edb4acf364512d5f8f00fe7f01472e577d5495ce9d00b29c4b117505bd_prof);

        
        $__internal_870424dc43f5715fef230d8c4bc0406f1bd3dc9f5b0edcd9c7afbe8f2df47d73->leave($__internal_870424dc43f5715fef230d8c4bc0406f1bd3dc9f5b0edcd9c7afbe8f2df47d73_prof);

    }

    // line 120
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_9b66a9fbd81c4b75ca80840530c9491ead2ad941be9e14b633d590332271821b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b66a9fbd81c4b75ca80840530c9491ead2ad941be9e14b633d590332271821b->enter($__internal_9b66a9fbd81c4b75ca80840530c9491ead2ad941be9e14b633d590332271821b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_d5e3343e69952b001ad49321d28e3f2f9b971942da5d4c5fdba0b1388bb1a68e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5e3343e69952b001ad49321d28e3f2f9b971942da5d4c5fdba0b1388bb1a68e->enter($__internal_d5e3343e69952b001ad49321d28e3f2f9b971942da5d4c5fdba0b1388bb1a68e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 121
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 122
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 124
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 125
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime"))))) {
                // line 126
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 128
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hour", array()), 'widget');
            echo ":";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minute", array()), 'widget');
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "second", array()), 'widget');
            }
            // line 129
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime"))))) {
                // line 130
                echo "</div>";
            }
        }
        
        $__internal_d5e3343e69952b001ad49321d28e3f2f9b971942da5d4c5fdba0b1388bb1a68e->leave($__internal_d5e3343e69952b001ad49321d28e3f2f9b971942da5d4c5fdba0b1388bb1a68e_prof);

        
        $__internal_9b66a9fbd81c4b75ca80840530c9491ead2ad941be9e14b633d590332271821b->leave($__internal_9b66a9fbd81c4b75ca80840530c9491ead2ad941be9e14b633d590332271821b_prof);

    }

    // line 135
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_f8f4e164594ee35712b2099cf140c36e0fcef14481c377b4b3d533de668a0ebb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8f4e164594ee35712b2099cf140c36e0fcef14481c377b4b3d533de668a0ebb->enter($__internal_f8f4e164594ee35712b2099cf140c36e0fcef14481c377b4b3d533de668a0ebb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_0f02ebfaf3b22202434244fe1da392367352c575754d6a2b39fef638c832c816 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f02ebfaf3b22202434244fe1da392367352c575754d6a2b39fef638c832c816->enter($__internal_0f02ebfaf3b22202434244fe1da392367352c575754d6a2b39fef638c832c816_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 136
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 137
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        // line 138
        if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "allow_delete", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "allow_delete", array()), false)) : (false))) {
            // line 139
            echo "        ";
            ob_start();
            // line 140
            echo "            \$(function() {
            if (event.preventDefault) event.preventDefault(); else event.returnValue = false;

            var containerDiv = \$('#";
            // line 143
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "').parents('.form-group:first');
            var parentDiv = containerDiv.parents('[data-prototype]:first');
            containerDiv.remove();
            parentDiv.trigger('easyadmin.collection.item-deleted');

            if (0 == parentDiv.children().length && 'undefined' !== parentDiv.attr('data-empty-collection')) {
            \$(parentDiv.attr('data-empty-collection')).insertBefore(parentDiv);
            }
            });
        ";
            $context["remove_item_javascript"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 153
            echo "
        <div class=\"text-right field-collection-item-action\">
            <a href=\"#\" onclick=\"";
            // line 155
            echo (isset($context["remove_item_javascript"]) ? $context["remove_item_javascript"] : $this->getContext($context, "remove_item_javascript"));
            echo "\" class=\"text-danger\">
                <i class=\"fa fa-remove\"></i>
                ";
            // line 157
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action.remove_item", array(), "EasyAdminBundle"), "html", null, true);
            echo "
            </a>
        </div>
    ";
        }
        
        $__internal_0f02ebfaf3b22202434244fe1da392367352c575754d6a2b39fef638c832c816->leave($__internal_0f02ebfaf3b22202434244fe1da392367352c575754d6a2b39fef638c832c816_prof);

        
        $__internal_f8f4e164594ee35712b2099cf140c36e0fcef14481c377b4b3d533de668a0ebb->leave($__internal_f8f4e164594ee35712b2099cf140c36e0fcef14481c377b4b3d533de668a0ebb_prof);

    }

    // line 163
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_2204a115f6202ef3adec87e049908a72eb38f20c39b089e5ea2736d492f7840d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2204a115f6202ef3adec87e049908a72eb38f20c39b089e5ea2736d492f7840d->enter($__internal_2204a115f6202ef3adec87e049908a72eb38f20c39b089e5ea2736d492f7840d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_609b8fb5e674f12018f38668ece9a4e0fb105ce16abde76703056f7222905dd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_609b8fb5e674f12018f38668ece9a4e0fb105ce16abde76703056f7222905dd9->enter($__internal_609b8fb5e674f12018f38668ece9a4e0fb105ce16abde76703056f7222905dd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 164
        if (twig_in_filter("-inline", (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) {
            // line 165
            echo "<div class=\"control-group\">";
            // line 166
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 167
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 168
(isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : (""))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 171
            echo "</div>";
        } else {
            // line 173
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 174
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 175
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 176
(isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : (""))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 179
            echo "</div>";
        }
        
        $__internal_609b8fb5e674f12018f38668ece9a4e0fb105ce16abde76703056f7222905dd9->leave($__internal_609b8fb5e674f12018f38668ece9a4e0fb105ce16abde76703056f7222905dd9_prof);

        
        $__internal_2204a115f6202ef3adec87e049908a72eb38f20c39b089e5ea2736d492f7840d->leave($__internal_2204a115f6202ef3adec87e049908a72eb38f20c39b089e5ea2736d492f7840d_prof);

    }

    // line 183
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_48007d8fba00f42e862f8acc7344f1cd20d565b2a9f22ecc97fb24fac3c302b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48007d8fba00f42e862f8acc7344f1cd20d565b2a9f22ecc97fb24fac3c302b0->enter($__internal_48007d8fba00f42e862f8acc7344f1cd20d565b2a9f22ecc97fb24fac3c302b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_f1c5dc6141350d80d16a895061f81a38a547d8606157bf352638d829246fc97f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1c5dc6141350d80d16a895061f81a38a547d8606157bf352638d829246fc97f->enter($__internal_f1c5dc6141350d80d16a895061f81a38a547d8606157bf352638d829246fc97f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 184
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")), (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) : ((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : (""))));
        // line 185
        if (twig_in_filter("checkbox-inline", (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")))) {
            // line 186
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 188
            echo "<div class=\"checkbox\">";
            // line 189
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 190
            echo "</div>";
        }
        
        $__internal_f1c5dc6141350d80d16a895061f81a38a547d8606157bf352638d829246fc97f->leave($__internal_f1c5dc6141350d80d16a895061f81a38a547d8606157bf352638d829246fc97f_prof);

        
        $__internal_48007d8fba00f42e862f8acc7344f1cd20d565b2a9f22ecc97fb24fac3c302b0->leave($__internal_48007d8fba00f42e862f8acc7344f1cd20d565b2a9f22ecc97fb24fac3c302b0_prof);

    }

    // line 194
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_209ff27ebdcd5542da58ce9bb9b3641ca61cf00d0fe0673295890c4c11a609c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_209ff27ebdcd5542da58ce9bb9b3641ca61cf00d0fe0673295890c4c11a609c1->enter($__internal_209ff27ebdcd5542da58ce9bb9b3641ca61cf00d0fe0673295890c4c11a609c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_bb3665acd4cff75bb187fa3932fcb5230affe9df5ea0b5e01460c48d749182cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb3665acd4cff75bb187fa3932fcb5230affe9df5ea0b5e01460c48d749182cd->enter($__internal_bb3665acd4cff75bb187fa3932fcb5230affe9df5ea0b5e01460c48d749182cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 195
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")), (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) : ((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : (""))));
        // line 196
        if (twig_in_filter("radio-inline", (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")))) {
            // line 197
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 199
            echo "<div class=\"radio\">";
            // line 200
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 201
            echo "</div>";
        }
        
        $__internal_bb3665acd4cff75bb187fa3932fcb5230affe9df5ea0b5e01460c48d749182cd->leave($__internal_bb3665acd4cff75bb187fa3932fcb5230affe9df5ea0b5e01460c48d749182cd_prof);

        
        $__internal_209ff27ebdcd5542da58ce9bb9b3641ca61cf00d0fe0673295890c4c11a609c1->leave($__internal_209ff27ebdcd5542da58ce9bb9b3641ca61cf00d0fe0673295890c4c11a609c1_prof);

    }

    // line 207
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_9edf787c74de10597e6ede7ab3bfbbccd177d09f93d40349c345ea03bd4df8b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9edf787c74de10597e6ede7ab3bfbbccd177d09f93d40349c345ea03bd4df8b6->enter($__internal_9edf787c74de10597e6ede7ab3bfbbccd177d09f93d40349c345ea03bd4df8b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_a15bf1234d2a90d8d54e5a399da6245896f2f1670663176883f93c7eb8ba2150 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a15bf1234d2a90d8d54e5a399da6245896f2f1670663176883f93c7eb8ba2150->enter($__internal_a15bf1234d2a90d8d54e5a399da6245896f2f1670663176883f93c7eb8ba2150_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 208
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " control-label"))));
        // line 209
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_a15bf1234d2a90d8d54e5a399da6245896f2f1670663176883f93c7eb8ba2150->leave($__internal_a15bf1234d2a90d8d54e5a399da6245896f2f1670663176883f93c7eb8ba2150_prof);

        
        $__internal_9edf787c74de10597e6ede7ab3bfbbccd177d09f93d40349c345ea03bd4df8b6->leave($__internal_9edf787c74de10597e6ede7ab3bfbbccd177d09f93d40349c345ea03bd4df8b6_prof);

    }

    // line 212
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_33ae7b8986c7fb05f4cb9eb8a3724d18e8eb6168b307fb4a276df4b459cd5eb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33ae7b8986c7fb05f4cb9eb8a3724d18e8eb6168b307fb4a276df4b459cd5eb5->enter($__internal_33ae7b8986c7fb05f4cb9eb8a3724d18e8eb6168b307fb4a276df4b459cd5eb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_e65df0dcae8d65a58589dc2776a872a8d5a6a9e54662c8441c59c813a8b5c380 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e65df0dcae8d65a58589dc2776a872a8d5a6a9e54662c8441c59c813a8b5c380->enter($__internal_e65df0dcae8d65a58589dc2776a872a8d5a6a9e54662c8441c59c813a8b5c380_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 214
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 215
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_e65df0dcae8d65a58589dc2776a872a8d5a6a9e54662c8441c59c813a8b5c380->leave($__internal_e65df0dcae8d65a58589dc2776a872a8d5a6a9e54662c8441c59c813a8b5c380_prof);

        
        $__internal_33ae7b8986c7fb05f4cb9eb8a3724d18e8eb6168b307fb4a276df4b459cd5eb5->leave($__internal_33ae7b8986c7fb05f4cb9eb8a3724d18e8eb6168b307fb4a276df4b459cd5eb5_prof);

    }

    // line 218
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_b6228d113330a98968b4b1e0ec72e84a68a7a22f2abd35becc145f834b8a2550 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6228d113330a98968b4b1e0ec72e84a68a7a22f2abd35becc145f834b8a2550->enter($__internal_b6228d113330a98968b4b1e0ec72e84a68a7a22f2abd35becc145f834b8a2550_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_8966b31becc1efc89422929cf2817fc5c742727117980c9db9b0641a860a5eb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8966b31becc1efc89422929cf2817fc5c742727117980c9db9b0641a860a5eb5->enter($__internal_8966b31becc1efc89422929cf2817fc5c742727117980c9db9b0641a860a5eb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 219
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_8966b31becc1efc89422929cf2817fc5c742727117980c9db9b0641a860a5eb5->leave($__internal_8966b31becc1efc89422929cf2817fc5c742727117980c9db9b0641a860a5eb5_prof);

        
        $__internal_b6228d113330a98968b4b1e0ec72e84a68a7a22f2abd35becc145f834b8a2550->leave($__internal_b6228d113330a98968b4b1e0ec72e84a68a7a22f2abd35becc145f834b8a2550_prof);

    }

    // line 222
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_bb9ffbdf57f6fc3c00b4a68c6ac63d72edb098bef49cdcfcc6aeabfe098e95a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb9ffbdf57f6fc3c00b4a68c6ac63d72edb098bef49cdcfcc6aeabfe098e95a2->enter($__internal_bb9ffbdf57f6fc3c00b4a68c6ac63d72edb098bef49cdcfcc6aeabfe098e95a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_042cee28825c182283761dd3785fbd38a812df1be8d30bc1b4cd8dc580fabab3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_042cee28825c182283761dd3785fbd38a812df1be8d30bc1b4cd8dc580fabab3->enter($__internal_042cee28825c182283761dd3785fbd38a812df1be8d30bc1b4cd8dc580fabab3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 223
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_042cee28825c182283761dd3785fbd38a812df1be8d30bc1b4cd8dc580fabab3->leave($__internal_042cee28825c182283761dd3785fbd38a812df1be8d30bc1b4cd8dc580fabab3_prof);

        
        $__internal_bb9ffbdf57f6fc3c00b4a68c6ac63d72edb098bef49cdcfcc6aeabfe098e95a2->leave($__internal_bb9ffbdf57f6fc3c00b4a68c6ac63d72edb098bef49cdcfcc6aeabfe098e95a2_prof);

    }

    // line 226
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_7dfc9c6ee63935223526da1f1d8ae706248356e703761c183c9575641dd64e47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7dfc9c6ee63935223526da1f1d8ae706248356e703761c183c9575641dd64e47->enter($__internal_7dfc9c6ee63935223526da1f1d8ae706248356e703761c183c9575641dd64e47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_ff4fe24275615208f35d1229166ff2a200751dda59db4b4860c81039dd5276a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff4fe24275615208f35d1229166ff2a200751dda59db4b4860c81039dd5276a3->enter($__internal_ff4fe24275615208f35d1229166ff2a200751dda59db4b4860c81039dd5276a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 227
        echo "    ";
        // line 228
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 229
            echo "        ";
            if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
                // line 230
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " required"))));
                // line 231
                echo "        ";
            }
            // line 232
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 233
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " ") . (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class"))))));
                // line 234
                echo "        ";
            }
            // line 235
            echo "        ";
            if (( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false) && twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))))) {
                // line 236
                echo "            ";
                $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
                // line 237
                echo "        ";
            }
            // line 238
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
            // line 239
            echo (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget"));
            // line 240
            echo twig_escape_filter($this->env, (( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), $this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "translation_domain", array()))) : ("")), "html", null, true);
            // line 241
            echo "</label>
    ";
        }
        
        $__internal_ff4fe24275615208f35d1229166ff2a200751dda59db4b4860c81039dd5276a3->leave($__internal_ff4fe24275615208f35d1229166ff2a200751dda59db4b4860c81039dd5276a3_prof);

        
        $__internal_7dfc9c6ee63935223526da1f1d8ae706248356e703761c183c9575641dd64e47->leave($__internal_7dfc9c6ee63935223526da1f1d8ae706248356e703761c183c9575641dd64e47_prof);

    }

    // line 247
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_7dda31eb8988719e662ffbe4d9f8926b79eb4c31e31df386eae49cdf2d09fe6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7dda31eb8988719e662ffbe4d9f8926b79eb4c31e31df386eae49cdf2d09fe6b->enter($__internal_7dda31eb8988719e662ffbe4d9f8926b79eb4c31e31df386eae49cdf2d09fe6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_c6e9259a7cde33b00060244a1435c6c9a7738e567a11c623a90543b8abf463c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6e9259a7cde33b00060244a1435c6c9a7738e567a11c623a90543b8abf463c1->enter($__internal_c6e9259a7cde33b00060244a1435c6c9a7738e567a11c623a90543b8abf463c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 248
        $context["_field_type"] = (($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "fieldType", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "fieldType", array()), "default")) : ("default"));
        // line 249
        echo "    <div class=\"form-group ";
        if ((( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) ? $context["force_error"] : $this->getContext($context, "force_error")), false)) : (false))) &&  !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid")))) {
            echo "has-error";
        }
        echo " field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, (isset($context["block_prefixes"]) ? $context["block_prefixes"] : $this->getContext($context, "block_prefixes")),  -2)), "html", null, true);
        echo "\">
        ";
        // line 250
        $context["_field_label"] = (($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "label", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "label", array(), "array"), null)) : (null));
        // line 251
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("translation_domain" => $this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "translation_domain", array())) + (twig_test_empty($_label_ = (isset($context["_field_label"]) ? $context["_field_label"] : $this->getContext($context, "_field_label"))) ? array() : array("label" => $_label_)));
        // line 252
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 254
        if ((twig_in_filter((isset($context["_field_type"]) ? $context["_field_type"] : $this->getContext($context, "_field_type")), array(0 => "datetime", 1 => "date", 2 => "time", 3 => "birthday")) && (($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "nullable", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "nullable", array()), false)) : (false)))) {
            // line 255
            echo "            <div class=\"nullable-control\">
                <label>
                    <input type=\"checkbox\" ";
            // line 257
            if ((null === (isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")))) {
                echo "checked=\"checked\"";
            }
            echo ">
                    ";
            // line 258
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.nullable_field", array(), "EasyAdminBundle"), "html", null, true);
            echo "
                </label>
            </div>
        ";
        }
        // line 263
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 265
        if (((($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "help", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "help", array()), "")) : ("")) != "")) {
            // line 266
            echo "            <span class=\"help-block\"><i class=\"fa fa-info-circle\"></i> ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "field", array()), "help", array()), array(), $this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "translation_domain", array()));
            echo "</span>
        ";
        }
        // line 268
        echo "    </div>";
        
        $__internal_c6e9259a7cde33b00060244a1435c6c9a7738e567a11c623a90543b8abf463c1->leave($__internal_c6e9259a7cde33b00060244a1435c6c9a7738e567a11c623a90543b8abf463c1_prof);

        
        $__internal_7dda31eb8988719e662ffbe4d9f8926b79eb4c31e31df386eae49cdf2d09fe6b->leave($__internal_7dda31eb8988719e662ffbe4d9f8926b79eb4c31e31df386eae49cdf2d09fe6b_prof);

    }

    // line 271
    public function block_collection_row($context, array $blocks = array())
    {
        $__internal_0e77ec9bfc2b2f5ee3b2c3b6b1fc92f70de021dca8e77618936a012f5984273d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e77ec9bfc2b2f5ee3b2c3b6b1fc92f70de021dca8e77618936a012f5984273d->enter($__internal_0e77ec9bfc2b2f5ee3b2c3b6b1fc92f70de021dca8e77618936a012f5984273d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_row"));

        $__internal_c4e574dc0f3a116cdd7966d19d06bc5d22c1ff24078ecc23ea5f4d3289a50883 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4e574dc0f3a116cdd7966d19d06bc5d22c1ff24078ecc23ea5f4d3289a50883->enter($__internal_c4e574dc0f3a116cdd7966d19d06bc5d22c1ff24078ecc23ea5f4d3289a50883_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_row"));

        // line 272
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "

    ";
        // line 274
        if (((array_key_exists("allow_add", $context)) ? (_twig_default_filter((isset($context["allow_add"]) ? $context["allow_add"] : $this->getContext($context, "allow_add")), false)) : (false))) {
            // line 275
            echo "        ";
            ob_start();
            // line 276
            echo "            \$(function() {
                if (event.preventDefault) event.preventDefault(); else event.returnValue = false;

                var collection = \$('#";
            // line 279
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "');
                // Use a counter to avoid having the same index more than once
                var numItems = collection.data('count') || collection.children('div.form-group').length;

                collection.prev('.collection-empty').remove();

                var newItem = collection.attr('data-prototype')
                    .replace(/\\>__name__label__\\</g, '>' + numItems + '<')
                    .replace(/_";
            // line 287
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "___name__/g, '_";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "_' + numItems)
                    .replace(/";
            // line 288
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "\\]\\[__name__\\]/g, '";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "][' + numItems + ']')
                ;

                // Increment the counter and store it in the collection
                collection.data('count', ++numItems);

                collection.append(newItem).trigger('easyadmin.collection.item-added');
            });
        ";
            $context["js_add_item"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 297
            echo "
        <div class=\"text-right field-collection-action\">
            <a href=\"#\" onclick=\"";
            // line 299
            echo (isset($context["js_add_item"]) ? $context["js_add_item"] : $this->getContext($context, "js_add_item"));
            echo "\" class=\"text-primary\">
                <i class=\"fa fa-plus-square\"></i>
                ";
            // line 301
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((((twig_length_filter($this->env, (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form"))) == 0)) ? ("action.add_new_item") : ("action.add_another_item")), array(), "EasyAdminBundle"), "html", null, true);
            echo "
            </a>
        </div>
    ";
        }
        
        $__internal_c4e574dc0f3a116cdd7966d19d06bc5d22c1ff24078ecc23ea5f4d3289a50883->leave($__internal_c4e574dc0f3a116cdd7966d19d06bc5d22c1ff24078ecc23ea5f4d3289a50883_prof);

        
        $__internal_0e77ec9bfc2b2f5ee3b2c3b6b1fc92f70de021dca8e77618936a012f5984273d->leave($__internal_0e77ec9bfc2b2f5ee3b2c3b6b1fc92f70de021dca8e77618936a012f5984273d_prof);

    }

    // line 307
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_fe2b6a9d7042ddfdedb9ada990bdee31fec3497b9afc3665d22bbf70464bd344 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe2b6a9d7042ddfdedb9ada990bdee31fec3497b9afc3665d22bbf70464bd344->enter($__internal_fe2b6a9d7042ddfdedb9ada990bdee31fec3497b9afc3665d22bbf70464bd344_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_a66ec643de0e31f3e6d0994ee975570993af032e2723cf810ab059a22162cf23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a66ec643de0e31f3e6d0994ee975570993af032e2723cf810ab059a22162cf23->enter($__internal_a66ec643de0e31f3e6d0994ee975570993af032e2723cf810ab059a22162cf23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 308
        echo "<div class=\"form-group field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, (isset($context["block_prefixes"]) ? $context["block_prefixes"] : $this->getContext($context, "block_prefixes")),  -2)), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "css_class", array()), "")) : ("")), "html", null, true);
        echo "\">";
        // line 309
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 310
        echo "</div>";
        
        $__internal_a66ec643de0e31f3e6d0994ee975570993af032e2723cf810ab059a22162cf23->leave($__internal_a66ec643de0e31f3e6d0994ee975570993af032e2723cf810ab059a22162cf23_prof);

        
        $__internal_fe2b6a9d7042ddfdedb9ada990bdee31fec3497b9afc3665d22bbf70464bd344->leave($__internal_fe2b6a9d7042ddfdedb9ada990bdee31fec3497b9afc3665d22bbf70464bd344_prof);

    }

    // line 313
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_e53fd562d61a0f72ce86cab6f09622ef5f6761f2e72cc70a95de667cc08d2ab2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e53fd562d61a0f72ce86cab6f09622ef5f6761f2e72cc70a95de667cc08d2ab2->enter($__internal_e53fd562d61a0f72ce86cab6f09622ef5f6761f2e72cc70a95de667cc08d2ab2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_db2f7c39402f3f45c319a40533bf0be4400b544c85e2da2ecd8d54e8e0dd278e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db2f7c39402f3f45c319a40533bf0be4400b544c85e2da2ecd8d54e8e0dd278e->enter($__internal_db2f7c39402f3f45c319a40533bf0be4400b544c85e2da2ecd8d54e8e0dd278e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 314
        $context["force_error"] = true;
        // line 315
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_db2f7c39402f3f45c319a40533bf0be4400b544c85e2da2ecd8d54e8e0dd278e->leave($__internal_db2f7c39402f3f45c319a40533bf0be4400b544c85e2da2ecd8d54e8e0dd278e_prof);

        
        $__internal_e53fd562d61a0f72ce86cab6f09622ef5f6761f2e72cc70a95de667cc08d2ab2->leave($__internal_e53fd562d61a0f72ce86cab6f09622ef5f6761f2e72cc70a95de667cc08d2ab2_prof);

    }

    // line 318
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_6d91aeb6010655772121fb4916a49e1fec9fc506d55c64161157f7e431e4e138 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d91aeb6010655772121fb4916a49e1fec9fc506d55c64161157f7e431e4e138->enter($__internal_6d91aeb6010655772121fb4916a49e1fec9fc506d55c64161157f7e431e4e138_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_64af3933ae590aed9de284ca1dc364271f045cd66fdf853d90ae917fb7ea48ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64af3933ae590aed9de284ca1dc364271f045cd66fdf853d90ae917fb7ea48ec->enter($__internal_64af3933ae590aed9de284ca1dc364271f045cd66fdf853d90ae917fb7ea48ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 319
        $context["force_error"] = true;
        // line 320
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_64af3933ae590aed9de284ca1dc364271f045cd66fdf853d90ae917fb7ea48ec->leave($__internal_64af3933ae590aed9de284ca1dc364271f045cd66fdf853d90ae917fb7ea48ec_prof);

        
        $__internal_6d91aeb6010655772121fb4916a49e1fec9fc506d55c64161157f7e431e4e138->leave($__internal_6d91aeb6010655772121fb4916a49e1fec9fc506d55c64161157f7e431e4e138_prof);

    }

    // line 323
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_8c68378fc9573b5a304beb500ec57e32b9b83a1c490832c21ff466e223356910 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c68378fc9573b5a304beb500ec57e32b9b83a1c490832c21ff466e223356910->enter($__internal_8c68378fc9573b5a304beb500ec57e32b9b83a1c490832c21ff466e223356910_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_37984aead8c6d1e7daf0bc0d755cb1d0e1f9bac9eff35e6e78fa4e9a0b1f9f74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37984aead8c6d1e7daf0bc0d755cb1d0e1f9bac9eff35e6e78fa4e9a0b1f9f74->enter($__internal_37984aead8c6d1e7daf0bc0d755cb1d0e1f9bac9eff35e6e78fa4e9a0b1f9f74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 324
        $context["force_error"] = true;
        // line 325
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_37984aead8c6d1e7daf0bc0d755cb1d0e1f9bac9eff35e6e78fa4e9a0b1f9f74->leave($__internal_37984aead8c6d1e7daf0bc0d755cb1d0e1f9bac9eff35e6e78fa4e9a0b1f9f74_prof);

        
        $__internal_8c68378fc9573b5a304beb500ec57e32b9b83a1c490832c21ff466e223356910->leave($__internal_8c68378fc9573b5a304beb500ec57e32b9b83a1c490832c21ff466e223356910_prof);

    }

    // line 328
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_2429cb2b1483a79c7083f53bcff26e1aa1769cd1682dc5fb307effe9969eace1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2429cb2b1483a79c7083f53bcff26e1aa1769cd1682dc5fb307effe9969eace1->enter($__internal_2429cb2b1483a79c7083f53bcff26e1aa1769cd1682dc5fb307effe9969eace1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_ba7f0a1215018e55cd4697d64f718f512044f949a72828bdef3a952de82d3b04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba7f0a1215018e55cd4697d64f718f512044f949a72828bdef3a952de82d3b04->enter($__internal_ba7f0a1215018e55cd4697d64f718f512044f949a72828bdef3a952de82d3b04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 329
        $context["force_error"] = true;
        // line 330
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_ba7f0a1215018e55cd4697d64f718f512044f949a72828bdef3a952de82d3b04->leave($__internal_ba7f0a1215018e55cd4697d64f718f512044f949a72828bdef3a952de82d3b04_prof);

        
        $__internal_2429cb2b1483a79c7083f53bcff26e1aa1769cd1682dc5fb307effe9969eace1->leave($__internal_2429cb2b1483a79c7083f53bcff26e1aa1769cd1682dc5fb307effe9969eace1_prof);

    }

    // line 333
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_416f70e0ba8baaa5598b8649f47c22fb1ffaf49eb68d5dbd083bc09413cf015d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_416f70e0ba8baaa5598b8649f47c22fb1ffaf49eb68d5dbd083bc09413cf015d->enter($__internal_416f70e0ba8baaa5598b8649f47c22fb1ffaf49eb68d5dbd083bc09413cf015d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_53996aaba80a7cf37715b34d1573ccbad59c57fc127c93b2192aae35416392bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53996aaba80a7cf37715b34d1573ccbad59c57fc127c93b2192aae35416392bc->enter($__internal_53996aaba80a7cf37715b34d1573ccbad59c57fc127c93b2192aae35416392bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 334
        echo "<div class=\"form-group ";
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            echo "has-error";
        }
        echo " field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, (isset($context["block_prefixes"]) ? $context["block_prefixes"] : $this->getContext($context, "block_prefixes")),  -2)), "html", null, true);
        echo "\">";
        // line 335
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 336
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 337
        echo "</div>";
        
        $__internal_53996aaba80a7cf37715b34d1573ccbad59c57fc127c93b2192aae35416392bc->leave($__internal_53996aaba80a7cf37715b34d1573ccbad59c57fc127c93b2192aae35416392bc_prof);

        
        $__internal_416f70e0ba8baaa5598b8649f47c22fb1ffaf49eb68d5dbd083bc09413cf015d->leave($__internal_416f70e0ba8baaa5598b8649f47c22fb1ffaf49eb68d5dbd083bc09413cf015d_prof);

    }

    // line 340
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_2b715da849859b9e9fa3d499677963f882dcabc2251bb7907d168acaa8744db5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b715da849859b9e9fa3d499677963f882dcabc2251bb7907d168acaa8744db5->enter($__internal_2b715da849859b9e9fa3d499677963f882dcabc2251bb7907d168acaa8744db5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_dd13f825de111cf130e645ddc87b694089af621837d78935c40e427caf66714a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd13f825de111cf130e645ddc87b694089af621837d78935c40e427caf66714a->enter($__internal_dd13f825de111cf130e645ddc87b694089af621837d78935c40e427caf66714a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 341
        echo "<div class=\"form-group ";
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            echo "has-error";
        }
        echo " field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, (isset($context["block_prefixes"]) ? $context["block_prefixes"] : $this->getContext($context, "block_prefixes")),  -2)), "html", null, true);
        echo "\">";
        // line 342
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 343
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 344
        echo "</div>";
        
        $__internal_dd13f825de111cf130e645ddc87b694089af621837d78935c40e427caf66714a->leave($__internal_dd13f825de111cf130e645ddc87b694089af621837d78935c40e427caf66714a_prof);

        
        $__internal_2b715da849859b9e9fa3d499677963f882dcabc2251bb7907d168acaa8744db5->leave($__internal_2b715da849859b9e9fa3d499677963f882dcabc2251bb7907d168acaa8744db5_prof);

    }

    // line 348
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_524fcc99857bd05452c786ba637df83316777776b466dcc824ebf7d13a783a94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_524fcc99857bd05452c786ba637df83316777776b466dcc824ebf7d13a783a94->enter($__internal_524fcc99857bd05452c786ba637df83316777776b466dcc824ebf7d13a783a94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_b5e0fb7421a9a7d039d2d60a648559a4bc32e049c725ea693f21112f6d10355a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5e0fb7421a9a7d039d2d60a648559a4bc32e049c725ea693f21112f6d10355a->enter($__internal_b5e0fb7421a9a7d039d2d60a648559a4bc32e049c725ea693f21112f6d10355a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 349
        echo "    ";
        $context["error_count"] = twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
        // line 350
        echo "    ";
        if (((isset($context["error_count"]) ? $context["error_count"] : $this->getContext($context, "error_count")) >= 1)) {
            // line 351
            echo "        <div class=\"error-block\">
            <span class=\"label label-danger\">";
            // line 352
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice("errors", (isset($context["error_count"]) ? $context["error_count"] : $this->getContext($context, "error_count")), array(), "EasyAdminBundle"), "html", null, true);
            echo "</span>
            ";
            // line 353
            if (((isset($context["error_count"]) ? $context["error_count"] : $this->getContext($context, "error_count")) == 1)) {
                // line 354
                echo "                ";
                echo twig_escape_filter($this->env, $this->getAttribute(twig_first($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))), "message", array()), "html", null, true);
                echo "
            ";
            } else {
                // line 356
                echo "                <ul>
                    ";
                // line 357
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 358
                    echo "                        <li>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                    echo "</li>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 360
                echo "                </ul>
            ";
            }
            // line 362
            echo "        </div>
    ";
        }
        
        $__internal_b5e0fb7421a9a7d039d2d60a648559a4bc32e049c725ea693f21112f6d10355a->leave($__internal_b5e0fb7421a9a7d039d2d60a648559a4bc32e049c725ea693f21112f6d10355a_prof);

        
        $__internal_524fcc99857bd05452c786ba637df83316777776b466dcc824ebf7d13a783a94->leave($__internal_524fcc99857bd05452c786ba637df83316777776b466dcc824ebf7d13a783a94_prof);

    }

    // line 366
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_a57743f238d75dc0fdb13844f8531ed12d6999e9186b0a01d780f6e1f55eb3d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a57743f238d75dc0fdb13844f8531ed12d6999e9186b0a01d780f6e1f55eb3d6->enter($__internal_a57743f238d75dc0fdb13844f8531ed12d6999e9186b0a01d780f6e1f55eb3d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_e5efe9e30d45c1d6d103863eb405e18f11392f4679d3e6fb83b922d3ea9a0fb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5efe9e30d45c1d6d103863eb405e18f11392f4679d3e6fb83b922d3ea9a0fb8->enter($__internal_e5efe9e30d45c1d6d103863eb405e18f11392f4679d3e6fb83b922d3ea9a0fb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 367
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 368
            echo "        ";
            $this->displayBlock("empty_collection", $context, $blocks);
            echo "
    ";
        }
        // line 370
        echo "    ";
        if ((twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) || $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array(), "any", false, true), "prototype", array(), "any", true, true))) {
            // line 371
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("data-empty-collection" =>             $this->renderBlock("empty_collection", $context, $blocks)));
            // line 372
            echo "    ";
        }
        // line 373
        echo "
    ";
        // line 374
        $this->displayParentBlock("form_widget_compound", $context, $blocks);
        
        $__internal_e5efe9e30d45c1d6d103863eb405e18f11392f4679d3e6fb83b922d3ea9a0fb8->leave($__internal_e5efe9e30d45c1d6d103863eb405e18f11392f4679d3e6fb83b922d3ea9a0fb8_prof);

        
        $__internal_a57743f238d75dc0fdb13844f8531ed12d6999e9186b0a01d780f6e1f55eb3d6->leave($__internal_a57743f238d75dc0fdb13844f8531ed12d6999e9186b0a01d780f6e1f55eb3d6_prof);

    }

    // line 377
    public function block_empty_collection($context, array $blocks = array())
    {
        $__internal_7a498a6223216616b38781f795ae3df0b67afdbfdaec3fe3e30d5a790a42ccd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a498a6223216616b38781f795ae3df0b67afdbfdaec3fe3e30d5a790a42ccd5->enter($__internal_7a498a6223216616b38781f795ae3df0b67afdbfdaec3fe3e30d5a790a42ccd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "empty_collection"));

        $__internal_c283491b0aa3ddddf870a0b90978b5a144ceac2a6d8e73107a6b4ada3a7bf8a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c283491b0aa3ddddf870a0b90978b5a144ceac2a6d8e73107a6b4ada3a7bf8a7->enter($__internal_c283491b0aa3ddddf870a0b90978b5a144ceac2a6d8e73107a6b4ada3a7bf8a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "empty_collection"));

        // line 378
        echo "    <div class=\"empty collection-empty\">
        ";
        // line 379
        echo twig_include($this->env, $context, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "templates", array()), "label_empty", array()));
        echo "
    </div>
";
        
        $__internal_c283491b0aa3ddddf870a0b90978b5a144ceac2a6d8e73107a6b4ada3a7bf8a7->leave($__internal_c283491b0aa3ddddf870a0b90978b5a144ceac2a6d8e73107a6b4ada3a7bf8a7_prof);

        
        $__internal_7a498a6223216616b38781f795ae3df0b67afdbfdaec3fe3e30d5a790a42ccd5->leave($__internal_7a498a6223216616b38781f795ae3df0b67afdbfdaec3fe3e30d5a790a42ccd5_prof);

    }

    // line 383
    public function block_vich_file_row($context, array $blocks = array())
    {
        $__internal_103e62691aafe8d6a26fb29d2e68b78af3de377facfbbb6393f0e99afd80e029 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_103e62691aafe8d6a26fb29d2e68b78af3de377facfbbb6393f0e99afd80e029->enter($__internal_103e62691aafe8d6a26fb29d2e68b78af3de377facfbbb6393f0e99afd80e029_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_row"));

        $__internal_d84cf9061087d0917579f2eed52104113d0bafa27692859d5f7800074ba03361 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d84cf9061087d0917579f2eed52104113d0bafa27692859d5f7800074ba03361->enter($__internal_d84cf9061087d0917579f2eed52104113d0bafa27692859d5f7800074ba03361_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_row"));

        // line 384
        echo "    ";
        $context["force_error"] = true;
        // line 385
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "
";
        
        $__internal_d84cf9061087d0917579f2eed52104113d0bafa27692859d5f7800074ba03361->leave($__internal_d84cf9061087d0917579f2eed52104113d0bafa27692859d5f7800074ba03361_prof);

        
        $__internal_103e62691aafe8d6a26fb29d2e68b78af3de377facfbbb6393f0e99afd80e029->leave($__internal_103e62691aafe8d6a26fb29d2e68b78af3de377facfbbb6393f0e99afd80e029_prof);

    }

    // line 388
    public function block_vich_file_widget($context, array $blocks = array())
    {
        $__internal_34c9e68565b38617e31c894cd0bd006a0e451c55ee4e13134eb019973f030f68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34c9e68565b38617e31c894cd0bd006a0e451c55ee4e13134eb019973f030f68->enter($__internal_34c9e68565b38617e31c894cd0bd006a0e451c55ee4e13134eb019973f030f68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

        $__internal_911a6d9f776914063108f1e4c45790e305ebf9fc25b70acfeae4e7b096fca26b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_911a6d9f776914063108f1e4c45790e305ebf9fc25b70acfeae4e7b096fca26b->enter($__internal_911a6d9f776914063108f1e4c45790e305ebf9fc25b70acfeae4e7b096fca26b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

        // line 389
        ob_start();
        // line 390
        echo "    <div class=\"easyadmin-vich-file\">
        ";
        // line 391
        if ( !twig_test_empty(((array_key_exists("download_uri", $context)) ? (_twig_default_filter((isset($context["download_uri"]) ? $context["download_uri"] : $this->getContext($context, "download_uri")), "")) : ("")))) {
            // line 392
            echo "            ";
            $context["download_title"] = ((twig_last($this->env, twig_split_filter($this->env, (isset($context["download_uri"]) ? $context["download_uri"] : $this->getContext($context, "download_uri")), "/"))) ? (twig_last($this->env, twig_split_filter($this->env, (isset($context["download_uri"]) ? $context["download_uri"] : $this->getContext($context, "download_uri")), "/"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("download", array(), "VichUploaderBundle")));
            // line 393
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((isset($context["download_uri"]) ? $context["download_uri"] : $this->getContext($context, "download_uri"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["download_title"]) ? $context["download_title"] : $this->getContext($context, "download_title")), "html", null, true);
            echo "</a>
        ";
        }
        // line 395
        echo "
        <div class=\"row\">
            ";
        // line 397
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "delete", array(), "any", true, true)) {
            // line 398
            echo "            <div class=\"col-sm-3 col-md-2\">
                ";
            // line 399
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delete", array()), 'row', array("label" => "action.delete"));
            echo "
            </div>
            ";
        }
        // line 402
        echo "            <div class=\"";
        echo (($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "delete", array(), "any", true, true)) ? ("col-sm-9 col-md-10") : ("col-sm-12"));
        echo "\">
                ";
        // line 403
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'widget');
        echo "
            </div>
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_911a6d9f776914063108f1e4c45790e305ebf9fc25b70acfeae4e7b096fca26b->leave($__internal_911a6d9f776914063108f1e4c45790e305ebf9fc25b70acfeae4e7b096fca26b_prof);

        
        $__internal_34c9e68565b38617e31c894cd0bd006a0e451c55ee4e13134eb019973f030f68->leave($__internal_34c9e68565b38617e31c894cd0bd006a0e451c55ee4e13134eb019973f030f68_prof);

    }

    // line 410
    public function block_vich_image_row($context, array $blocks = array())
    {
        $__internal_bd3eac52bc7ac4eddc9a6b7e675fda6e43da33e1f88f21144a1831f6ba422e6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd3eac52bc7ac4eddc9a6b7e675fda6e43da33e1f88f21144a1831f6ba422e6d->enter($__internal_bd3eac52bc7ac4eddc9a6b7e675fda6e43da33e1f88f21144a1831f6ba422e6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_row"));

        $__internal_c6d53789ec00fec2e49a7a0d3c8c6a28a2e9b69a23849f3dbe41e31ef3c13e70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6d53789ec00fec2e49a7a0d3c8c6a28a2e9b69a23849f3dbe41e31ef3c13e70->enter($__internal_c6d53789ec00fec2e49a7a0d3c8c6a28a2e9b69a23849f3dbe41e31ef3c13e70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_row"));

        // line 411
        echo "    ";
        $context["force_error"] = true;
        // line 412
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "
";
        
        $__internal_c6d53789ec00fec2e49a7a0d3c8c6a28a2e9b69a23849f3dbe41e31ef3c13e70->leave($__internal_c6d53789ec00fec2e49a7a0d3c8c6a28a2e9b69a23849f3dbe41e31ef3c13e70_prof);

        
        $__internal_bd3eac52bc7ac4eddc9a6b7e675fda6e43da33e1f88f21144a1831f6ba422e6d->leave($__internal_bd3eac52bc7ac4eddc9a6b7e675fda6e43da33e1f88f21144a1831f6ba422e6d_prof);

    }

    // line 415
    public function block_vich_image_widget($context, array $blocks = array())
    {
        $__internal_a8b34b82cce756d11c54c26d6bc1829e65fbe768394e692ad8303b63b716f58c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8b34b82cce756d11c54c26d6bc1829e65fbe768394e692ad8303b63b716f58c->enter($__internal_a8b34b82cce756d11c54c26d6bc1829e65fbe768394e692ad8303b63b716f58c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

        $__internal_844d529e86863c689df9ca1595134f731a304a6e8763dc3ab1cb978495fda330 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_844d529e86863c689df9ca1595134f731a304a6e8763dc3ab1cb978495fda330->enter($__internal_844d529e86863c689df9ca1595134f731a304a6e8763dc3ab1cb978495fda330_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

        // line 416
        ob_start();
        // line 417
        echo "    <div class=\"easyadmin-vich-image\">
        ";
        // line 418
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'widget');
        echo "
        ";
        // line 419
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "delete", array(), "any", true, true)) {
            // line 420
            echo "            ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delete", array()), 'row', array("label" => "action.delete"));
            echo "
        ";
        }
        // line 422
        echo "
        ";
        // line 423
        if ( !twig_test_empty(((array_key_exists("download_uri", $context)) ? (_twig_default_filter((isset($context["download_uri"]) ? $context["download_uri"] : $this->getContext($context, "download_uri")), "")) : ("")))) {
            // line 424
            echo "            ";
            $context["_lightbox_id"] = ("easyadmin-lightbox-" . (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")));
            // line 425
            echo "
            <a href=\"#\" class=\"easyadmin-thumbnail\" data-featherlight=\"#";
            // line 426
            echo twig_escape_filter($this->env, (isset($context["_lightbox_id"]) ? $context["_lightbox_id"] : $this->getContext($context, "_lightbox_id")), "html", null, true);
            echo "\" data-featherlight-close-on-click=\"anywhere\">
                <img src=\"";
            // line 427
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((isset($context["download_uri"]) ? $context["download_uri"] : $this->getContext($context, "download_uri"))), "html", null, true);
            echo "\">
            </a>

            <div id=\"";
            // line 430
            echo twig_escape_filter($this->env, (isset($context["_lightbox_id"]) ? $context["_lightbox_id"] : $this->getContext($context, "_lightbox_id")), "html", null, true);
            echo "\" class=\"easyadmin-lightbox\">
                <img src=\"";
            // line 431
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((isset($context["download_uri"]) ? $context["download_uri"] : $this->getContext($context, "download_uri"))), "html", null, true);
            echo "\">
            </div>
        ";
        }
        // line 434
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_844d529e86863c689df9ca1595134f731a304a6e8763dc3ab1cb978495fda330->leave($__internal_844d529e86863c689df9ca1595134f731a304a6e8763dc3ab1cb978495fda330_prof);

        
        $__internal_a8b34b82cce756d11c54c26d6bc1829e65fbe768394e692ad8303b63b716f58c->leave($__internal_a8b34b82cce756d11c54c26d6bc1829e65fbe768394e692ad8303b63b716f58c_prof);

    }

    // line 439
    public function block_easyadmin_widget($context, array $blocks = array())
    {
        $__internal_6ab302b26ec2fef2d9e6764852594b6db06320b6779dc03e515809faf0c552ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ab302b26ec2fef2d9e6764852594b6db06320b6779dc03e515809faf0c552ae->enter($__internal_6ab302b26ec2fef2d9e6764852594b6db06320b6779dc03e515809faf0c552ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_widget"));

        $__internal_8539431b989fb015b5d8039309015a40248828901c4095cd737002358ea377f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8539431b989fb015b5d8039309015a40248828901c4095cd737002358ea377f6->enter($__internal_8539431b989fb015b5d8039309015a40248828901c4095cd737002358ea377f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_widget"));

        // line 440
        echo "    ";
        $context["_translation_domain"] = $this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "translation_domain", array());
        // line 441
        echo "    ";
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "name", array())), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "label", array())));
        // line 442
        echo "
    ";
        // line 443
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "errors", array())) > 0)) {
            // line 444
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            echo "
    ";
        }
        // line 446
        echo "
    <input type=\"hidden\" name=\"referer\" value=\"";
        // line 447
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "referer", 1 => ""), "method"), "html", null, true);
        echo "\"/>

    <div class=\"row\">
        ";
        // line 450
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["easyadmin_form_groups"]) ? $context["easyadmin_form_groups"] : $this->getContext($context, "easyadmin_form_groups")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["group_name"] => $context["group_config"]) {
            // line 451
            echo "            <div class=\"field-group col-xs-12 ";
            echo twig_escape_filter($this->env, (($this->getAttribute($context["group_config"], "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["group_config"], "css_class", array()), "")) : ("")), "html", null, true);
            echo "\">
                <div class=\"box box-default\">
                    ";
            // line 453
            if (((($this->getAttribute($context["group_config"], "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["group_config"], "label", array()), false)) : (false)) || (($this->getAttribute($context["group_config"], "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["group_config"], "icon", array()), false)) : (false)))) {
                // line 454
                echo "                        <div class=\"box-header with-border\">
                            <h3 class=\"box-title\">
                                ";
                // line 456
                if ((($this->getAttribute($context["group_config"], "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["group_config"], "icon", array()), false)) : (false))) {
                    // line 457
                    echo "                                    <i class=\"fa fa-";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["group_config"], "icon", array()), "html", null, true);
                    echo "\"></i>
                                ";
                }
                // line 459
                echo "                                ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["group_config"], "label", array()), array(), (isset($context["_translation_domain"]) ? $context["_translation_domain"] : $this->getContext($context, "_translation_domain")));
                echo "
                            </h3>
                        </div>
                    ";
            }
            // line 463
            echo "
                    <div class=\"box-body\">
                        ";
            // line 465
            if ((($this->getAttribute($context["group_config"], "help", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["group_config"], "help", array()), false)) : (false))) {
                // line 466
                echo "                            <p class=\"help-block\">";
                echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["group_config"], "help", array()), array(), (isset($context["_translation_domain"]) ? $context["_translation_domain"] : $this->getContext($context, "_translation_domain"))), "html", null, true));
                echo "</p>
                        ";
            }
            // line 468
            echo "
                        <div class=\"row\">
                            ";
            // line 470
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                if ((!twig_in_filter("hidden", $this->getAttribute($this->getAttribute($context["field"], "vars", array()), "block_prefixes", array())) && ($this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "vars", array()), "easyadmin", array()), "form_group", array()) == $context["group_name"]))) {
                    // line 471
                    echo "                                <div class=\"col-xs-12 ";
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "vars", array(), "any", false, true), "easyadmin", array(), "any", false, true), "field", array(), "any", false, true), "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "vars", array(), "any", false, true), "easyadmin", array(), "any", false, true), "field", array(), "any", false, true), "css_class", array()), "")) : ("")), "html", null, true);
                    echo "\">
                                    ";
                    // line 472
                    echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["field"], 'row');
                    echo "
                                </div>
                            ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 475
            echo "                        </div>
                    </div>
                </div>
            </div>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 480
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                if (!twig_in_filter("hidden", $this->getAttribute($this->getAttribute($context["field"], "vars", array()), "block_prefixes", array()))) {
                    // line 481
                    echo "                <div class=\"col-xs-12 ";
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "vars", array(), "any", false, true), "easyadmin", array(), "any", false, true), "field", array(), "any", false, true), "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "vars", array(), "any", false, true), "easyadmin", array(), "any", false, true), "field", array(), "any", false, true), "css_class", array()), "")) : ("")), "html", null, true);
                    echo "\">
                    ";
                    // line 482
                    echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["field"], 'row');
                    echo "
                </div>
            ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 485
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['group_name'], $context['group_config'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 486
        echo "    </div>

    <div class=\"row\">
        <div class=\"col-xs-12 form-actions\">
            <div class=\"form-group\">
                <div id=\"form-actions-row\">
                    ";
        // line 492
        $this->displayBlock('item_actions', $context, $blocks);
        // line 516
        echo "                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_8539431b989fb015b5d8039309015a40248828901c4095cd737002358ea377f6->leave($__internal_8539431b989fb015b5d8039309015a40248828901c4095cd737002358ea377f6_prof);

        
        $__internal_6ab302b26ec2fef2d9e6764852594b6db06320b6779dc03e515809faf0c552ae->leave($__internal_6ab302b26ec2fef2d9e6764852594b6db06320b6779dc03e515809faf0c552ae_prof);

    }

    // line 492
    public function block_item_actions($context, array $blocks = array())
    {
        $__internal_5a21111a93a543433df6f56de99993719ac9fa54b8ecab84d1e11608e8982371 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a21111a93a543433df6f56de99993719ac9fa54b8ecab84d1e11608e8982371->enter($__internal_5a21111a93a543433df6f56de99993719ac9fa54b8ecab84d1e11608e8982371_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item_actions"));

        $__internal_7846185ccb1bb9203b1ab3c85fd170e1cc861d94f53f5ec630bb547279867437 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7846185ccb1bb9203b1ab3c85fd170e1cc861d94f53f5ec630bb547279867437->enter($__internal_7846185ccb1bb9203b1ab3c85fd170e1cc861d94f53f5ec630bb547279867437_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item_actions"));

        // line 493
        echo "                        ";
        // line 494
        echo "                        <button type=\"submit\" class=\"btn btn-primary action-save\">
                            <i class=\"fa fa-save\"></i> ";
        // line 495
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action.save", (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), (isset($context["_translation_domain"]) ? $context["_translation_domain"] : $this->getContext($context, "_translation_domain"))), "html", null, true);
        echo "
                        </button>

                        ";
        // line 498
        $context["_entity_actions"] = ((($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "view", array()) == "new")) ? ($this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getActionsForItem("new", $this->getAttribute($this->getAttribute(        // line 499
(isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "name", array()))) : ($this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getActionsForItem("edit", $this->getAttribute($this->getAttribute(        // line 500
(isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "name", array()))));
        // line 501
        echo "
                        ";
        // line 502
        $context["_entity_id"] = ((($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "view", array()) == "new")) ? (null) : ($this->getAttribute($this->getAttribute(        // line 504
(isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "item", array()), $this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "primary_key_field_name", array()))));
        // line 505
        echo "
                        ";
        // line 506
        $context["_request_parameters"] = array("entity" => $this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "name", array()), "referer" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "referer"), "method"));
        // line 507
        echo "
                        ";
        // line 508
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_actions.html.twig", array("actions" =>         // line 509
(isset($context["_entity_actions"]) ? $context["_entity_actions"] : $this->getContext($context, "_entity_actions")), "request_parameters" =>         // line 510
(isset($context["_request_parameters"]) ? $context["_request_parameters"] : $this->getContext($context, "_request_parameters")), "translation_domain" =>         // line 511
(isset($context["_translation_domain"]) ? $context["_translation_domain"] : $this->getContext($context, "_translation_domain")), "trans_parameters" =>         // line 512
(isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "item_id" =>         // line 513
(isset($context["_entity_id"]) ? $context["_entity_id"] : $this->getContext($context, "_entity_id"))), false);
        // line 514
        echo "
                    ";
        
        $__internal_7846185ccb1bb9203b1ab3c85fd170e1cc861d94f53f5ec630bb547279867437->leave($__internal_7846185ccb1bb9203b1ab3c85fd170e1cc861d94f53f5ec630bb547279867437_prof);

        
        $__internal_5a21111a93a543433df6f56de99993719ac9fa54b8ecab84d1e11608e8982371->leave($__internal_5a21111a93a543433df6f56de99993719ac9fa54b8ecab84d1e11608e8982371_prof);

    }

    // line 523
    public function block_easyadmin_autocomplete_widget($context, array $blocks = array())
    {
        $__internal_66c7e3f5438f1ac5941b8fec08a0113373bca917a40feaa43a8cc200b8182352 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66c7e3f5438f1ac5941b8fec08a0113373bca917a40feaa43a8cc200b8182352->enter($__internal_66c7e3f5438f1ac5941b8fec08a0113373bca917a40feaa43a8cc200b8182352_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_autocomplete_widget"));

        $__internal_68e22e1b61ca66a127c38a892b7a4cd822ede8cad502c011d97da76da38c1dee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68e22e1b61ca66a127c38a892b7a4cd822ede8cad502c011d97da76da38c1dee->enter($__internal_68e22e1b61ca66a127c38a892b7a4cd822ede8cad502c011d97da76da38c1dee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_autocomplete_widget"));

        // line 524
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "autocomplete", array()), 'widget', array("attr" => twig_array_merge(        // line 525
(isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("data-easyadmin-autocomplete-max-results" => $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("show.max_results"), "data-easyadmin-autocomplete-url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin", array("action" => "autocomplete", "entity" =>         // line 529
(isset($context["autocomplete_entity_name"]) ? $context["autocomplete_entity_name"] : $this->getContext($context, "autocomplete_entity_name"))))))));
        // line 532
        echo "
";
        
        $__internal_68e22e1b61ca66a127c38a892b7a4cd822ede8cad502c011d97da76da38c1dee->leave($__internal_68e22e1b61ca66a127c38a892b7a4cd822ede8cad502c011d97da76da38c1dee_prof);

        
        $__internal_66c7e3f5438f1ac5941b8fec08a0113373bca917a40feaa43a8cc200b8182352->leave($__internal_66c7e3f5438f1ac5941b8fec08a0113373bca917a40feaa43a8cc200b8182352_prof);

    }

    // line 535
    public function block_easyadmin_autocomplete_inner_label($context, array $blocks = array())
    {
        $__internal_930e43846acb95b40b3b5ea314f0c7c77b88f6c014ed2a7fa20e0484f5bc7324 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_930e43846acb95b40b3b5ea314f0c7c77b88f6c014ed2a7fa20e0484f5bc7324->enter($__internal_930e43846acb95b40b3b5ea314f0c7c77b88f6c014ed2a7fa20e0484f5bc7324_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_autocomplete_inner_label"));

        $__internal_3889cda90b0aabf92bc8838390500d0b8545d4dd4cf96e285840915bcd02ea02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3889cda90b0aabf92bc8838390500d0b8545d4dd4cf96e285840915bcd02ea02->enter($__internal_3889cda90b0aabf92bc8838390500d0b8545d4dd4cf96e285840915bcd02ea02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_autocomplete_inner_label"));

        // line 536
        echo "    ";
        $context["name"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()), "vars", array()), "name", array());
        // line 537
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_3889cda90b0aabf92bc8838390500d0b8545d4dd4cf96e285840915bcd02ea02->leave($__internal_3889cda90b0aabf92bc8838390500d0b8545d4dd4cf96e285840915bcd02ea02_prof);

        
        $__internal_930e43846acb95b40b3b5ea314f0c7c77b88f6c014ed2a7fa20e0484f5bc7324->leave($__internal_930e43846acb95b40b3b5ea314f0c7c77b88f6c014ed2a7fa20e0484f5bc7324_prof);

    }

    // line 541
    public function block_easyadmin_divider_row($context, array $blocks = array())
    {
        $__internal_f5f3faf5f96f57ff77bf1b56a71bd8c1b69ac94d7ffb5ae2baac1f12e8a65fb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5f3faf5f96f57ff77bf1b56a71bd8c1b69ac94d7ffb5ae2baac1f12e8a65fb2->enter($__internal_f5f3faf5f96f57ff77bf1b56a71bd8c1b69ac94d7ffb5ae2baac1f12e8a65fb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_divider_row"));

        $__internal_c5e26580d1a45daa02666fbb798c859d0cf097bf6d8a70b599a507b5ade2a758 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5e26580d1a45daa02666fbb798c859d0cf097bf6d8a70b599a507b5ade2a758->enter($__internal_c5e26580d1a45daa02666fbb798c859d0cf097bf6d8a70b599a507b5ade2a758_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_divider_row"));

        // line 542
        echo "    <div class=\"field-divider\">
        <hr>
    </div>
";
        
        $__internal_c5e26580d1a45daa02666fbb798c859d0cf097bf6d8a70b599a507b5ade2a758->leave($__internal_c5e26580d1a45daa02666fbb798c859d0cf097bf6d8a70b599a507b5ade2a758_prof);

        
        $__internal_f5f3faf5f96f57ff77bf1b56a71bd8c1b69ac94d7ffb5ae2baac1f12e8a65fb2->leave($__internal_f5f3faf5f96f57ff77bf1b56a71bd8c1b69ac94d7ffb5ae2baac1f12e8a65fb2_prof);

    }

    // line 548
    public function block_easyadmin_section_row($context, array $blocks = array())
    {
        $__internal_e7ea4d30fd14c6fb2d3577c04a7c2299718f657ef1c346580ff7104d44693eb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7ea4d30fd14c6fb2d3577c04a7c2299718f657ef1c346580ff7104d44693eb1->enter($__internal_e7ea4d30fd14c6fb2d3577c04a7c2299718f657ef1c346580ff7104d44693eb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_section_row"));

        $__internal_33f1cf6d36aa1f52e7d880b8cf1f06f25c8ca3cb53a4d8a0a0cfb52e3c49f08a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33f1cf6d36aa1f52e7d880b8cf1f06f25c8ca3cb53a4d8a0a0cfb52e3c49f08a->enter($__internal_33f1cf6d36aa1f52e7d880b8cf1f06f25c8ca3cb53a4d8a0a0cfb52e3c49f08a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_section_row"));

        // line 549
        echo "    ";
        $context["_translation_domain"] = $this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "translation_domain", array());
        // line 550
        echo "    <div class=\"field-section ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "css_class", array()), "")) : ("")), "html", null, true);
        echo "\">
        ";
        // line 551
        if (((($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "label", array()), false)) : (false)) || (($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "icon", array()), false)) : (false)))) {
            // line 552
            echo "            <h2>
                ";
            // line 553
            if ((($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "icon", array()), false)) : (false))) {
                echo "<i class=\"fa fa-";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "field", array()), "icon", array()), "html", null, true);
                echo "\"></i>";
            }
            // line 554
            echo "                ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "label", array()), "")) : ("")), array(), (isset($context["_translation_domain"]) ? $context["_translation_domain"] : $this->getContext($context, "_translation_domain")));
            echo "
            </h2>
        ";
        }
        // line 557
        echo "
        ";
        // line 558
        if ((($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "help", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "help", array()), false)) : (false))) {
            // line 559
            echo "            <p class=\"help-block\">";
            echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "field", array()), "help", array()), array(), (isset($context["_translation_domain"]) ? $context["_translation_domain"] : $this->getContext($context, "_translation_domain"))), "html", null, true));
            echo "</p>
        ";
        }
        // line 561
        echo "    </div>
";
        
        $__internal_33f1cf6d36aa1f52e7d880b8cf1f06f25c8ca3cb53a4d8a0a0cfb52e3c49f08a->leave($__internal_33f1cf6d36aa1f52e7d880b8cf1f06f25c8ca3cb53a4d8a0a0cfb52e3c49f08a_prof);

        
        $__internal_e7ea4d30fd14c6fb2d3577c04a7c2299718f657ef1c346580ff7104d44693eb1->leave($__internal_e7ea4d30fd14c6fb2d3577c04a7c2299718f657ef1c346580ff7104d44693eb1_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/form/bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1928 => 561,  1922 => 559,  1920 => 558,  1917 => 557,  1910 => 554,  1904 => 553,  1901 => 552,  1899 => 551,  1894 => 550,  1891 => 549,  1882 => 548,  1869 => 542,  1860 => 541,  1850 => 537,  1847 => 536,  1838 => 535,  1827 => 532,  1825 => 529,  1824 => 525,  1822 => 524,  1813 => 523,  1802 => 514,  1800 => 513,  1799 => 512,  1798 => 511,  1797 => 510,  1796 => 509,  1795 => 508,  1792 => 507,  1790 => 506,  1787 => 505,  1785 => 504,  1784 => 502,  1781 => 501,  1779 => 500,  1778 => 499,  1777 => 498,  1771 => 495,  1768 => 494,  1766 => 493,  1757 => 492,  1743 => 516,  1741 => 492,  1733 => 486,  1727 => 485,  1717 => 482,  1712 => 481,  1706 => 480,  1697 => 475,  1687 => 472,  1682 => 471,  1677 => 470,  1673 => 468,  1667 => 466,  1665 => 465,  1661 => 463,  1653 => 459,  1647 => 457,  1645 => 456,  1641 => 454,  1639 => 453,  1633 => 451,  1628 => 450,  1622 => 447,  1619 => 446,  1613 => 444,  1611 => 443,  1608 => 442,  1605 => 441,  1602 => 440,  1593 => 439,  1581 => 434,  1575 => 431,  1571 => 430,  1565 => 427,  1561 => 426,  1558 => 425,  1555 => 424,  1553 => 423,  1550 => 422,  1544 => 420,  1542 => 419,  1538 => 418,  1535 => 417,  1533 => 416,  1524 => 415,  1511 => 412,  1508 => 411,  1499 => 410,  1483 => 403,  1478 => 402,  1472 => 399,  1469 => 398,  1467 => 397,  1463 => 395,  1455 => 393,  1452 => 392,  1450 => 391,  1447 => 390,  1445 => 389,  1436 => 388,  1423 => 385,  1420 => 384,  1411 => 383,  1398 => 379,  1395 => 378,  1386 => 377,  1376 => 374,  1373 => 373,  1370 => 372,  1367 => 371,  1364 => 370,  1358 => 368,  1356 => 367,  1347 => 366,  1335 => 362,  1331 => 360,  1322 => 358,  1318 => 357,  1315 => 356,  1309 => 354,  1307 => 353,  1303 => 352,  1300 => 351,  1297 => 350,  1294 => 349,  1285 => 348,  1275 => 344,  1273 => 343,  1271 => 342,  1263 => 341,  1254 => 340,  1244 => 337,  1242 => 336,  1240 => 335,  1232 => 334,  1223 => 333,  1213 => 330,  1211 => 329,  1202 => 328,  1192 => 325,  1190 => 324,  1181 => 323,  1171 => 320,  1169 => 319,  1160 => 318,  1150 => 315,  1148 => 314,  1139 => 313,  1129 => 310,  1127 => 309,  1121 => 308,  1112 => 307,  1097 => 301,  1092 => 299,  1088 => 297,  1074 => 288,  1068 => 287,  1057 => 279,  1052 => 276,  1049 => 275,  1047 => 274,  1041 => 272,  1032 => 271,  1022 => 268,  1016 => 266,  1014 => 265,  1012 => 263,  1005 => 258,  999 => 257,  995 => 255,  993 => 254,  991 => 252,  989 => 251,  987 => 250,  978 => 249,  976 => 248,  967 => 247,  955 => 241,  953 => 240,  951 => 239,  936 => 238,  933 => 237,  930 => 236,  927 => 235,  924 => 234,  921 => 233,  918 => 232,  915 => 231,  912 => 230,  909 => 229,  906 => 228,  904 => 227,  895 => 226,  885 => 223,  876 => 222,  866 => 219,  857 => 218,  847 => 215,  845 => 214,  836 => 212,  826 => 209,  824 => 208,  815 => 207,  804 => 201,  802 => 200,  800 => 199,  797 => 197,  795 => 196,  793 => 195,  784 => 194,  773 => 190,  771 => 189,  769 => 188,  766 => 186,  764 => 185,  762 => 184,  753 => 183,  742 => 179,  736 => 176,  735 => 175,  731 => 174,  727 => 173,  724 => 171,  718 => 168,  717 => 167,  713 => 166,  711 => 165,  709 => 164,  700 => 163,  685 => 157,  680 => 155,  676 => 153,  663 => 143,  658 => 140,  655 => 139,  653 => 138,  651 => 137,  649 => 136,  640 => 135,  628 => 130,  625 => 129,  617 => 128,  612 => 126,  610 => 125,  608 => 124,  605 => 122,  603 => 121,  594 => 120,  582 => 115,  580 => 114,  578 => 112,  577 => 111,  576 => 110,  575 => 109,  570 => 107,  568 => 106,  566 => 105,  563 => 103,  561 => 102,  552 => 101,  541 => 97,  539 => 96,  537 => 95,  535 => 94,  533 => 93,  529 => 92,  527 => 91,  524 => 89,  522 => 88,  513 => 87,  502 => 83,  500 => 82,  498 => 81,  489 => 80,  479 => 77,  473 => 75,  471 => 74,  469 => 73,  463 => 71,  460 => 70,  458 => 69,  455 => 68,  446 => 67,  436 => 64,  434 => 63,  425 => 62,  415 => 59,  413 => 58,  404 => 57,  394 => 54,  391 => 52,  389 => 51,  380 => 50,  365 => 44,  360 => 42,  356 => 40,  343 => 30,  338 => 27,  335 => 26,  333 => 25,  331 => 23,  322 => 22,  312 => 17,  309 => 15,  307 => 13,  306 => 12,  305 => 11,  304 => 9,  303 => 8,  302 => 7,  300 => 5,  298 => 4,  289 => 3,  279 => 548,  276 => 546,  274 => 541,  271 => 539,  269 => 535,  266 => 534,  264 => 523,  261 => 521,  259 => 439,  256 => 437,  254 => 415,  251 => 414,  249 => 410,  246 => 409,  244 => 388,  241 => 387,  239 => 383,  236 => 382,  234 => 377,  232 => 366,  230 => 348,  227 => 346,  225 => 340,  222 => 339,  220 => 333,  217 => 332,  215 => 328,  212 => 327,  210 => 323,  207 => 322,  205 => 318,  202 => 317,  200 => 313,  197 => 312,  195 => 307,  192 => 306,  190 => 271,  187 => 270,  185 => 247,  182 => 246,  179 => 244,  177 => 226,  174 => 225,  172 => 222,  169 => 221,  167 => 218,  164 => 217,  162 => 212,  159 => 211,  157 => 207,  154 => 206,  151 => 204,  149 => 194,  146 => 193,  144 => 183,  141 => 182,  139 => 163,  136 => 162,  134 => 135,  131 => 134,  129 => 120,  126 => 119,  124 => 101,  121 => 100,  119 => 87,  116 => 86,  114 => 80,  111 => 79,  109 => 67,  106 => 66,  104 => 62,  101 => 61,  99 => 57,  96 => 56,  94 => 50,  91 => 49,  89 => 22,  86 => 21,  83 => 19,  81 => 3,  78 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use 'form_div_layout.html.twig' %}

{% block form_start -%}
    {% if 'easyadmin' == block_prefixes|slice(-2)|first %}
        {% set attr = attr|merge({
            'class': [
                _easyadmin_form_type|default('') == 'horizontal' ? 'form-horizontal' : 'form-vertical',
                attr.class|default(''),
                easyadmin.view ~ '-form'
            ]|join(' '),
            'data-view': easyadmin.view,
            'data-entity': easyadmin.entity.name,
            'data-entity-id': attribute(value, easyadmin.entity.primary_key_field_name),
        }) %}
    {% endif %}

    {{- parent() -}}
{%- endblock form_start %}

{# Widgets #}

{% block form_widget %}
    {{- parent() -}}

    {% if form.parent.vars.allow_delete|default(false) %}
        {% set remove_item_javascript %}
            \$(function() {
            if (event.preventDefault) event.preventDefault(); else event.returnValue = false;

            var containerDiv = \$('#{{ id }}').parents('.form-group:first');
            var parentDiv = containerDiv.parents('[data-prototype]:first');
            containerDiv.remove();
            parentDiv.trigger('easyadmin.collection.item-deleted');

            if (0 == parentDiv.children().length && 'undefined' !== parentDiv.attr('data-empty-collection')) {
                \$(parentDiv.attr('data-empty-collection')).insertBefore(parentDiv);
            }
            });
        {% endset %}

        <div class=\"text-right field-collection-item-action\">
            <a href=\"#\" onclick=\"{{ remove_item_javascript|raw }}\" class=\"text-danger\">
                <i class=\"fa fa-remove\"></i>
                {{ 'action.remove_item'|trans({}, 'EasyAdminBundle') }}
            </a>
        </div>
    {% endif %}
{% endblock form_widget %}

{% block form_widget_simple -%}
    {% if type is not defined or type not in ['file', 'hidden'] %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block money_widget -%}
    <div class=\"input-group\">
        {% set prepend = '{{' == money_pattern[0:2] %}
        {% if not prepend %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
        {{- block('form_widget_simple') -}}
        {% if prepend %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
    </div>
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"input-group\">
        {{- block('form_widget_simple') -}}
        <span class=\"input-group-addon\">%</span>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date, { datetime: true } ) -}}
            {{- form_widget(form.time, { datetime: true } ) -}}
        </div>
    {%- endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or not datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif %}
            {{- date_pattern|replace({
                '{{ year }}': form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}': form_widget(form.day),
            })|raw -}}
        {% if datetime is not defined or not datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or false == datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif -%}
        {{- form_widget(form.hour) }}:{{ form_widget(form.minute) }}{% if with_seconds %}:{{ form_widget(form.second) }}{% endif %}
        {% if datetime is not defined or false == datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock time_widget %}

{% block choice_widget_collapsed -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
    {% if form.parent.vars.allow_delete|default(false) %}
        {% set remove_item_javascript %}
            \$(function() {
            if (event.preventDefault) event.preventDefault(); else event.returnValue = false;

            var containerDiv = \$('#{{ id }}').parents('.form-group:first');
            var parentDiv = containerDiv.parents('[data-prototype]:first');
            containerDiv.remove();
            parentDiv.trigger('easyadmin.collection.item-deleted');

            if (0 == parentDiv.children().length && 'undefined' !== parentDiv.attr('data-empty-collection')) {
            \$(parentDiv.attr('data-empty-collection')).insertBefore(parentDiv);
            }
            });
        {% endset %}

        <div class=\"text-right field-collection-item-action\">
            <a href=\"#\" onclick=\"{{ remove_item_javascript|raw }}\" class=\"text-danger\">
                <i class=\"fa fa-remove\"></i>
                {{ 'action.remove_item'|trans({}, 'EasyAdminBundle') }}
            </a>
        </div>
    {% endif %}
{%- endblock %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') -%}
        <div class=\"control-group\">
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                }) -}}
            {% endfor -%}
        </div>
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                }) -}}
            {% endfor -%}
        </div>
    {%- endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"checkbox\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'radio-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"radio\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' control-label')|trim}) -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
    {{- block('form_label') -}}
{% endblock %}

{% block checkbox_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label %}
    {# Do no display the label if widget is not defined in order to prevent double label rendering #}
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
            {{- label is not same as(false) ? label|trans({}, easyadmin.entity.translation_domain) -}}
        </label>
    {% endif %}
{% endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    {% set _field_type = easyadmin.field.fieldType|default('default') %}
    <div class=\"form-group {% if (not compound or force_error|default(false)) and not valid %}has-error{% endif %} field-{{ block_prefixes|slice(-2)|first }}\">
        {% set _field_label = easyadmin.field['label']|default(null) %}
        {{- form_label(form, _field_label, { translation_domain: easyadmin.entity.translation_domain }) -}}
        {{- form_widget(form) -}}

        {% if _field_type in ['datetime', 'date', 'time', 'birthday'] and easyadmin.field.nullable|default(false) %}
            <div class=\"nullable-control\">
                <label>
                    <input type=\"checkbox\" {% if data is null %}checked=\"checked\"{% endif %}>
                    {{ 'label.nullable_field'|trans({}, 'EasyAdminBundle')}}
                </label>
            </div>
        {% endif %}

        {{- form_errors(form) -}}

        {% if easyadmin.field.help|default('') != '' %}
            <span class=\"help-block\"><i class=\"fa fa-info-circle\"></i> {{ easyadmin.field.help|trans(domain = easyadmin.entity.translation_domain)|raw }}</span>
        {% endif %}
    </div>
{%- endblock form_row %}

{% block collection_row %}
    {{ block('form_row') }}

    {% if allow_add|default(false) %}
        {% set js_add_item %}
            \$(function() {
                if (event.preventDefault) event.preventDefault(); else event.returnValue = false;

                var collection = \$('#{{ id }}');
                // Use a counter to avoid having the same index more than once
                var numItems = collection.data('count') || collection.children('div.form-group').length;

                collection.prev('.collection-empty').remove();

                var newItem = collection.attr('data-prototype')
                    .replace(/\\>__name__label__\\</g, '>' + numItems + '<')
                    .replace(/_{{ name }}___name__/g, '_{{ name }}_' + numItems)
                    .replace(/{{ name }}\\]\\[__name__\\]/g, '{{ name }}][' + numItems + ']')
                ;

                // Increment the counter and store it in the collection
                collection.data('count', ++numItems);

                collection.append(newItem).trigger('easyadmin.collection.item-added');
            });
        {% endset %}

        <div class=\"text-right field-collection-action\">
            <a href=\"#\" onclick=\"{{ js_add_item|raw }}\" class=\"text-primary\">
                <i class=\"fa fa-plus-square\"></i>
                {{ (form|length == 0 ? 'action.add_new_item' : 'action.add_another_item')|trans({}, 'EasyAdminBundle') }}
            </a>
        </div>
    {% endif %}
{% endblock collection_row %}

{% block button_row -%}
    <div class=\"form-group field-{{ block_prefixes|slice(-2)|first }} {{ easyadmin.field.css_class|default('') }}\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"form-group {% if not valid %}has-error{% endif %} field-{{ block_prefixes|slice(-2)|first }}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"form-group {% if not valid %}has-error{% endif %} field-{{ block_prefixes|slice(-2)|first }}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock radio_row %}

{# Errors #}
{% block form_errors %}
    {% set error_count = errors|length %}
    {% if error_count >= 1 %}
        <div class=\"error-block\">
            <span class=\"label label-danger\">{{ 'errors'|transchoice(error_count, {}, 'EasyAdminBundle') }}</span>
            {% if error_count == 1 %}
                {{ errors|first.message }}
            {% else %}
                <ul>
                    {% for error in errors %}
                        <li>{{ error.message }}</li>
                    {% endfor %}
                </ul>
            {% endif %}
        </div>
    {% endif %}
{% endblock form_errors %}

{%- block form_widget_compound -%}
    {% if value is empty %}
        {{ block('empty_collection') }}
    {% endif %}
    {% if value is empty or form.vars.prototype is defined %}
        {% set attr = attr|merge({'data-empty-collection': block('empty_collection') }) %}
    {% endif %}

    {{ parent() }}
{%- endblock form_widget_compound -%}

{% block empty_collection %}
    <div class=\"empty collection-empty\">
        {{ include(easyadmin.entity.templates.label_empty) }}
    </div>
{% endblock empty_collection %}

{% block vich_file_row %}
    {% set force_error = true %}
    {{ block('form_row') }}
{% endblock %}

{% block vich_file_widget %}
{% spaceless %}
    <div class=\"easyadmin-vich-file\">
        {% if download_uri|default('') is not empty %}
            {% set download_title = download_uri|split('/')|last ?: 'download'|trans({}, 'VichUploaderBundle') %}
            <a href=\"{{ asset(download_uri) }}\">{{ download_title }}</a>
        {% endif %}

        <div class=\"row\">
            {% if form.delete is defined %}
            <div class=\"col-sm-3 col-md-2\">
                {{ form_row(form.delete, { label: 'action.delete' }) }}
            </div>
            {% endif %}
            <div class=\"{{ form.delete is defined ? 'col-sm-9 col-md-10' : 'col-sm-12' }}\">
                {{ form_widget(form.file) }}
            </div>
        </div>
    </div>
{% endspaceless %}
{% endblock %}

{% block vich_image_row %}
    {% set force_error = true %}
    {{ block('form_row') }}
{% endblock %}

{% block vich_image_widget %}
{% spaceless %}
    <div class=\"easyadmin-vich-image\">
        {{ form_widget(form.file) }}
        {% if form.delete is defined %}
            {{ form_row(form.delete, { label: 'action.delete' }) }}
        {% endif %}

        {% if download_uri|default('') is not empty %}
            {% set _lightbox_id = 'easyadmin-lightbox-' ~ id %}

            <a href=\"#\" class=\"easyadmin-thumbnail\" data-featherlight=\"#{{ _lightbox_id }}\" data-featherlight-close-on-click=\"anywhere\">
                <img src=\"{{ asset(download_uri) }}\">
            </a>

            <div id=\"{{ _lightbox_id }}\" class=\"easyadmin-lightbox\">
                <img src=\"{{ asset(download_uri) }}\">
            </div>
        {% endif %}
    </div>
{% endspaceless %}
{% endblock %}

{# EasyAdmin form type #}
{% block easyadmin_widget %}
    {% set _translation_domain = easyadmin.entity.translation_domain %}
    {% set _trans_parameters = { '%entity_name%':  easyadmin.entity.name|trans, '%entity_label%': easyadmin.entity.label|trans } %}

    {% if form.vars.errors|length > 0 %}
        {{ form_errors(form) }}
    {% endif %}

    <input type=\"hidden\" name=\"referer\" value=\"{{ app.request.query.get('referer', '') }}\"/>

    <div class=\"row\">
        {% for group_name, group_config in easyadmin_form_groups %}
            <div class=\"field-group col-xs-12 {{ group_config.css_class|default('') }}\">
                <div class=\"box box-default\">
                    {% if group_config.label|default(false) or group_config.icon|default(false) %}
                        <div class=\"box-header with-border\">
                            <h3 class=\"box-title\">
                                {% if group_config.icon|default(false) %}
                                    <i class=\"fa fa-{{ group_config.icon }}\"></i>
                                {% endif %}
                                {{ group_config.label|trans(domain = _translation_domain)|raw }}
                            </h3>
                        </div>
                    {% endif %}

                    <div class=\"box-body\">
                        {% if group_config.help|default(false) %}
                            <p class=\"help-block\">{{ group_config.help|trans(domain = _translation_domain)|nl2br|raw }}</p>
                        {% endif %}

                        <div class=\"row\">
                            {% for field in form.children if 'hidden' not in field.vars.block_prefixes and field.vars.easyadmin.form_group == group_name %}
                                <div class=\"col-xs-12 {{ field.vars.easyadmin.field.css_class|default('') }}\">
                                    {{ form_row(field) }}
                                </div>
                            {% endfor %}
                        </div>
                    </div>
                </div>
            </div>
        {% else %}
            {% for field in form.children if 'hidden' not in field.vars.block_prefixes %}
                <div class=\"col-xs-12 {{ field.vars.easyadmin.field.css_class|default('') }}\">
                    {{ form_row(field) }}
                </div>
            {% endfor %}
        {% endfor %}
    </div>

    <div class=\"row\">
        <div class=\"col-xs-12 form-actions\">
            <div class=\"form-group\">
                <div id=\"form-actions-row\">
                    {% block item_actions %}
                        {# the 'save' action is hardcoded for the 'edit' and 'new' views #}
                        <button type=\"submit\" class=\"btn btn-primary action-save\">
                            <i class=\"fa fa-save\"></i> {{ 'action.save'|trans(_trans_parameters, _translation_domain) }}
                        </button>

                        {% set _entity_actions = (easyadmin.view == 'new')
                            ? easyadmin_get_actions_for_new_item(easyadmin.entity.name)
                            : easyadmin_get_actions_for_edit_item(easyadmin.entity.name) %}

                        {% set _entity_id = (easyadmin.view == 'new')
                            ? null
                            : attribute(easyadmin.item, easyadmin.entity.primary_key_field_name) %}

                        {% set _request_parameters = { entity: easyadmin.entity.name, referer: app.request.query.get('referer') } %}

                        {{ include('@EasyAdmin/default/includes/_actions.html.twig', {
                            actions: _entity_actions,
                            request_parameters: _request_parameters,
                            translation_domain: _translation_domain,
                            trans_parameters: _trans_parameters,
                            item_id: _entity_id
                        }, with_context = false) }}
                    {% endblock item_actions %}
                </div>
            </div>
        </div>
    </div>
{% endblock easyadmin_widget %}

{# EasyAdminAutocomplete form type #}
{% block easyadmin_autocomplete_widget %}
    {{ form_widget(form.autocomplete, {
        attr: attr|merge({
            'data-easyadmin-autocomplete-max-results': easyadmin_config('show.max_results'),
            'data-easyadmin-autocomplete-url' : path('easyadmin', {
                action: 'autocomplete',
                entity: autocomplete_entity_name,
            })|raw })
        })
    }}
{% endblock easyadmin_autocomplete_widget %}

{% block easyadmin_autocomplete_inner_label %}
    {% set name = form.parent.vars.name %}
    {{- block('form_label') -}}
{% endblock easyadmin_autocomplete_inner_label %}

{# EasyAdminDivider form type #}
{% block easyadmin_divider_row %}
    <div class=\"field-divider\">
        <hr>
    </div>
{% endblock easyadmin_divider_row %}

{# EasyAdminSection form type #}
{% block easyadmin_section_row %}
    {% set _translation_domain = easyadmin.entity.translation_domain %}
    <div class=\"field-section {{ easyadmin.field.css_class|default('') }}\">
        {% if easyadmin.field.label|default(false) or easyadmin.field.icon|default(false) %}
            <h2>
                {% if easyadmin.field.icon|default(false) %}<i class=\"fa fa-{{ easyadmin.field.icon }}\"></i>{% endif %}
                {{ easyadmin.field.label|default('')|trans(domain = _translation_domain)|raw }}
            </h2>
        {% endif %}

        {% if easyadmin.field.help|default(false) %}
            <p class=\"help-block\">{{ easyadmin.field.help|trans(domain = _translation_domain)|nl2br|raw }}</p>
        {% endif %}
    </div>
{% endblock easyadmin_section_row %}
", "@EasyAdmin/form/bootstrap_3_layout.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\javiereguiluz\\easyadmin-bundle\\Resources\\views\\form\\bootstrap_3_layout.html.twig");
    }
}
