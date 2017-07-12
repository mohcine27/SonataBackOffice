<?php

/* EasyAdminBundle:default:show.html.twig */
class __TwigTemplate_732125af602f686d3703d5e6215c072a9d0e2c529d2007f0027b16cd0974f9e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'body_class' => array($this, 'block_body_class'),
            'content_title' => array($this, 'block_content_title'),
            'main' => array($this, 'block_main'),
            'item_actions' => array($this, 'block_item_actions'),
            'delete_form' => array($this, 'block_delete_form'),
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 7
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "templates", array()), "layout", array()), "EasyAdminBundle:default:show.html.twig", 7);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_940783c37fd90d5765cbb5af0ced1c260740d17401f4088f42febc0370abf38a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_940783c37fd90d5765cbb5af0ced1c260740d17401f4088f42febc0370abf38a->enter($__internal_940783c37fd90d5765cbb5af0ced1c260740d17401f4088f42febc0370abf38a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:show.html.twig"));

        $__internal_f5c3cca724ba808a778e01209eec0bbef0aef563f6d2a6262d71f99f997179bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5c3cca724ba808a778e01209eec0bbef0aef563f6d2a6262d71f99f997179bf->enter($__internal_f5c3cca724ba808a778e01209eec0bbef0aef563f6d2a6262d71f99f997179bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:show.html.twig"));

        // line 1
        $context["_entity_config"] = $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 3
        $context["_entity_id"] = ("" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "primary_key_field_name", array())));
        // line 4
        $context["__internal_f69059ab6b14d4c1b7501fe4df44586bac11dd74c424ddcfa28d677c3b6553d5"] = $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "translation_domain", array());
        // line 5
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()), array(),         // line 4
(isset($context["__internal_f69059ab6b14d4c1b7501fe4df44586bac11dd74c424ddcfa28d677c3b6553d5"]) ? $context["__internal_f69059ab6b14d4c1b7501fe4df44586bac11dd74c424ddcfa28d677c3b6553d5"] : $this->getContext($context, "__internal_f69059ab6b14d4c1b7501fe4df44586bac11dd74c424ddcfa28d677c3b6553d5"))), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(        // line 5
(isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "label", array()), array(),         // line 4
(isset($context["__internal_f69059ab6b14d4c1b7501fe4df44586bac11dd74c424ddcfa28d677c3b6553d5"]) ? $context["__internal_f69059ab6b14d4c1b7501fe4df44586bac11dd74c424ddcfa28d677c3b6553d5"] : $this->getContext($context, "__internal_f69059ab6b14d4c1b7501fe4df44586bac11dd74c424ddcfa28d677c3b6553d5"))), "%entity_id%" =>         // line 5
(isset($context["_entity_id"]) ? $context["_entity_id"] : $this->getContext($context, "_entity_id")));
        // line 7
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_940783c37fd90d5765cbb5af0ced1c260740d17401f4088f42febc0370abf38a->leave($__internal_940783c37fd90d5765cbb5af0ced1c260740d17401f4088f42febc0370abf38a_prof);

        
        $__internal_f5c3cca724ba808a778e01209eec0bbef0aef563f6d2a6262d71f99f997179bf->leave($__internal_f5c3cca724ba808a778e01209eec0bbef0aef563f6d2a6262d71f99f997179bf_prof);

    }

    // line 9
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_2c412b64c58be393f5d08bb82e07459b4ba47f8f39921a97d77e98b3f5a5af42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c412b64c58be393f5d08bb82e07459b4ba47f8f39921a97d77e98b3f5a5af42->enter($__internal_2c412b64c58be393f5d08bb82e07459b4ba47f8f39921a97d77e98b3f5a5af42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_df5f08f4b8e2e62f68c2a4880af7baa55a58da6ffae05a2e25096fce8b194f6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df5f08f4b8e2e62f68c2a4880af7baa55a58da6ffae05a2e25096fce8b194f6e->enter($__internal_df5f08f4b8e2e62f68c2a4880af7baa55a58da6ffae05a2e25096fce8b194f6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ((("easyadmin-show-" . $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array())) . "-") . (isset($context["_entity_id"]) ? $context["_entity_id"] : $this->getContext($context, "_entity_id"))), "html", null, true);
        
        $__internal_df5f08f4b8e2e62f68c2a4880af7baa55a58da6ffae05a2e25096fce8b194f6e->leave($__internal_df5f08f4b8e2e62f68c2a4880af7baa55a58da6ffae05a2e25096fce8b194f6e_prof);

        
        $__internal_2c412b64c58be393f5d08bb82e07459b4ba47f8f39921a97d77e98b3f5a5af42->leave($__internal_2c412b64c58be393f5d08bb82e07459b4ba47f8f39921a97d77e98b3f5a5af42_prof);

    }

    // line 10
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_f8a1b0f4a156fec75e3245156d97dca710eee6daecdafc3b57e64427d39f89e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8a1b0f4a156fec75e3245156d97dca710eee6daecdafc3b57e64427d39f89e3->enter($__internal_f8a1b0f4a156fec75e3245156d97dca710eee6daecdafc3b57e64427d39f89e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_560bf0f25be2ee8080b673f2f22c71fca8140e2df4e7e222532b93236c53590b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_560bf0f25be2ee8080b673f2f22c71fca8140e2df4e7e222532b93236c53590b->enter($__internal_560bf0f25be2ee8080b673f2f22c71fca8140e2df4e7e222532b93236c53590b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("show show-" . twig_lower_filter($this->env, $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()))), "html", null, true);
        
        $__internal_560bf0f25be2ee8080b673f2f22c71fca8140e2df4e7e222532b93236c53590b->leave($__internal_560bf0f25be2ee8080b673f2f22c71fca8140e2df4e7e222532b93236c53590b_prof);

        
        $__internal_f8a1b0f4a156fec75e3245156d97dca710eee6daecdafc3b57e64427d39f89e3->leave($__internal_f8a1b0f4a156fec75e3245156d97dca710eee6daecdafc3b57e64427d39f89e3_prof);

    }

    // line 12
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_cd2502733b908bc07c92f7c5a09f7c054814a8801c450ec174489744d19d54a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd2502733b908bc07c92f7c5a09f7c054814a8801c450ec174489744d19d54a8->enter($__internal_cd2502733b908bc07c92f7c5a09f7c054814a8801c450ec174489744d19d54a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_df24514c9ac2ffcfb1b7255d6cc0dde1e0f30f9dc06ea6409b79583e2d82e962 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df24514c9ac2ffcfb1b7255d6cc0dde1e0f30f9dc06ea6409b79583e2d82e962->enter($__internal_df24514c9ac2ffcfb1b7255d6cc0dde1e0f30f9dc06ea6409b79583e2d82e962_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 13
        ob_start();
        // line 14
        echo "    ";
        $context["_default_title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("show.page_title", (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "EasyAdminBundle");
        // line 15
        echo "    ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "show", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "show", array()), "title", array()), (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")),         // line 4
(isset($context["__internal_f69059ab6b14d4c1b7501fe4df44586bac11dd74c424ddcfa28d677c3b6553d5"]) ? $context["__internal_f69059ab6b14d4c1b7501fe4df44586bac11dd74c424ddcfa28d677c3b6553d5"] : $this->getContext($context, "__internal_f69059ab6b14d4c1b7501fe4df44586bac11dd74c424ddcfa28d677c3b6553d5")))) : (        // line 15
(isset($context["_default_title"]) ? $context["_default_title"] : $this->getContext($context, "_default_title")))), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_df24514c9ac2ffcfb1b7255d6cc0dde1e0f30f9dc06ea6409b79583e2d82e962->leave($__internal_df24514c9ac2ffcfb1b7255d6cc0dde1e0f30f9dc06ea6409b79583e2d82e962_prof);

        
        $__internal_cd2502733b908bc07c92f7c5a09f7c054814a8801c450ec174489744d19d54a8->leave($__internal_cd2502733b908bc07c92f7c5a09f7c054814a8801c450ec174489744d19d54a8_prof);

    }

    // line 19
    public function block_main($context, array $blocks = array())
    {
        $__internal_577ef32ea4355e7cda37e4b47331af4ebe6ff22586240d5ab94aa164e5090912 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_577ef32ea4355e7cda37e4b47331af4ebe6ff22586240d5ab94aa164e5090912->enter($__internal_577ef32ea4355e7cda37e4b47331af4ebe6ff22586240d5ab94aa164e5090912_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_eebb0ed0f2564fd982dc1c680b1e32327d01733892e86a4b89e1471b65eb0373 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eebb0ed0f2564fd982dc1c680b1e32327d01733892e86a4b89e1471b65eb0373->enter($__internal_eebb0ed0f2564fd982dc1c680b1e32327d01733892e86a4b89e1471b65eb0373_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 20
        echo "    <div class=\"form-horizontal\">
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fields"]) ? $context["fields"] : $this->getContext($context, "fields")));
        foreach ($context['_seq'] as $context["field"] => $context["metadata"]) {
            // line 22
            echo "            <div class=\"form-group field-";
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, (($this->getAttribute($context["metadata"], "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["metadata"], "type", array()), "default")) : ("default"))), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (($this->getAttribute($context["metadata"], "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["metadata"], "css_class", array()), "")) : ("")), "html", null, true);
            echo "\">
                <label class=\"col-sm-2 control-label\">
                    ";
            // line 24
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute($context["metadata"], "label", array())) ? ($this->getAttribute($context["metadata"], "label", array())) : ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize($context["field"]))), (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")),             // line 4
(isset($context["__internal_f69059ab6b14d4c1b7501fe4df44586bac11dd74c424ddcfa28d677c3b6553d5"]) ? $context["__internal_f69059ab6b14d4c1b7501fe4df44586bac11dd74c424ddcfa28d677c3b6553d5"] : $this->getContext($context, "__internal_f69059ab6b14d4c1b7501fe4df44586bac11dd74c424ddcfa28d677c3b6553d5")));
            // line 24
            echo "
                </label>
                <div class=\"col-sm-10\">
                    <div class=\"form-control\">
                        ";
            // line 28
            echo $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->renderEntityField($this->env, "show", $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()), (isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), $context["metadata"]);
            echo "
                    </div>

                    ";
            // line 31
            if (((($this->getAttribute($context["metadata"], "help", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["metadata"], "help", array()), "")) : ("")) != "")) {
                // line 32
                echo "                        <span class=\"help-block\"><i class=\"fa fa-info-circle\"></i> ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["metadata"], "help", array()), array(),                 // line 4
(isset($context["__internal_f69059ab6b14d4c1b7501fe4df44586bac11dd74c424ddcfa28d677c3b6553d5"]) ? $context["__internal_f69059ab6b14d4c1b7501fe4df44586bac11dd74c424ddcfa28d677c3b6553d5"] : $this->getContext($context, "__internal_f69059ab6b14d4c1b7501fe4df44586bac11dd74c424ddcfa28d677c3b6553d5")));
                // line 32
                echo "</span>
                    ";
            }
            // line 34
            echo "                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['field'], $context['metadata'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "
        <div class=\"form-group form-actions\">
            <div class=\"col-sm-10 col-sm-offset-2\">
            ";
        // line 40
        $this->displayBlock('item_actions', $context, $blocks);
        // line 52
        echo "            </div>
        </div>
    </div>

    ";
        // line 56
        $this->displayBlock('delete_form', $context, $blocks);
        
        $__internal_eebb0ed0f2564fd982dc1c680b1e32327d01733892e86a4b89e1471b65eb0373->leave($__internal_eebb0ed0f2564fd982dc1c680b1e32327d01733892e86a4b89e1471b65eb0373_prof);

        
        $__internal_577ef32ea4355e7cda37e4b47331af4ebe6ff22586240d5ab94aa164e5090912->leave($__internal_577ef32ea4355e7cda37e4b47331af4ebe6ff22586240d5ab94aa164e5090912_prof);

    }

    // line 40
    public function block_item_actions($context, array $blocks = array())
    {
        $__internal_95697d82723005699be170b29a91bad4f8256d6b255da119c98c763ca63d7262 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95697d82723005699be170b29a91bad4f8256d6b255da119c98c763ca63d7262->enter($__internal_95697d82723005699be170b29a91bad4f8256d6b255da119c98c763ca63d7262_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item_actions"));

        $__internal_4244401ed14dc51ba61d2feede9f627cbb97cad50314daf0ba3bd5d2bdb2c111 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4244401ed14dc51ba61d2feede9f627cbb97cad50314daf0ba3bd5d2bdb2c111->enter($__internal_4244401ed14dc51ba61d2feede9f627cbb97cad50314daf0ba3bd5d2bdb2c111_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item_actions"));

        // line 41
        echo "                ";
        $context["_show_actions"] = $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getActionsForItem("show", $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()));
        // line 42
        echo "                ";
        $context["_request_parameters"] = array("entity" => $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()), "referer" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "referer"), "method"));
        // line 43
        echo "
                ";
        // line 44
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_actions.html.twig", array("actions" =>         // line 45
(isset($context["_show_actions"]) ? $context["_show_actions"] : $this->getContext($context, "_show_actions")), "request_parameters" =>         // line 46
(isset($context["_request_parameters"]) ? $context["_request_parameters"] : $this->getContext($context, "_request_parameters")), "translation_domain" => $this->getAttribute(        // line 47
(isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "translation_domain", array()), "trans_parameters" =>         // line 48
(isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "item_id" =>         // line 49
(isset($context["_entity_id"]) ? $context["_entity_id"] : $this->getContext($context, "_entity_id"))), false);
        // line 50
        echo "
            ";
        
        $__internal_4244401ed14dc51ba61d2feede9f627cbb97cad50314daf0ba3bd5d2bdb2c111->leave($__internal_4244401ed14dc51ba61d2feede9f627cbb97cad50314daf0ba3bd5d2bdb2c111_prof);

        
        $__internal_95697d82723005699be170b29a91bad4f8256d6b255da119c98c763ca63d7262->leave($__internal_95697d82723005699be170b29a91bad4f8256d6b255da119c98c763ca63d7262_prof);

    }

    // line 56
    public function block_delete_form($context, array $blocks = array())
    {
        $__internal_8f0b4d8cfef6d150b037f9016efd79186caaaeeb68eafb47294b67d4893677ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f0b4d8cfef6d150b037f9016efd79186caaaeeb68eafb47294b67d4893677ba->enter($__internal_8f0b4d8cfef6d150b037f9016efd79186caaaeeb68eafb47294b67d4893677ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

        $__internal_2d0b9788e16da0d81e2eab29bef0a389d139c3859f3595ee2ad10612835ea75d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d0b9788e16da0d81e2eab29bef0a389d139c3859f3595ee2ad10612835ea75d->enter($__internal_2d0b9788e16da0d81e2eab29bef0a389d139c3859f3595ee2ad10612835ea75d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

        // line 57
        echo "        ";
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_delete_form.html.twig", array("view" => "show", "referer" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 59
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "referer", 1 => ""), "method"), "delete_form" =>         // line 60
(isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), "_translation_domain" => $this->getAttribute(        // line 61
(isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "translation_domain", array()), "_trans_parameters" =>         // line 62
(isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "_entity_config" =>         // line 63
(isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config"))), false);
        // line 64
        echo "
    ";
        
        $__internal_2d0b9788e16da0d81e2eab29bef0a389d139c3859f3595ee2ad10612835ea75d->leave($__internal_2d0b9788e16da0d81e2eab29bef0a389d139c3859f3595ee2ad10612835ea75d_prof);

        
        $__internal_8f0b4d8cfef6d150b037f9016efd79186caaaeeb68eafb47294b67d4893677ba->leave($__internal_8f0b4d8cfef6d150b037f9016efd79186caaaeeb68eafb47294b67d4893677ba_prof);

    }

    // line 68
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_f76cf848aabc9997511ff2cee4f33fa9d9d97ff2fb221a3b2628aefe9f78622f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f76cf848aabc9997511ff2cee4f33fa9d9d97ff2fb221a3b2628aefe9f78622f->enter($__internal_f76cf848aabc9997511ff2cee4f33fa9d9d97ff2fb221a3b2628aefe9f78622f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_51b980a57aaf6030f72134c0375255a53b1e0f6fbb3b8653d2cc15c55e0f4dcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51b980a57aaf6030f72134c0375255a53b1e0f6fbb3b8653d2cc15c55e0f4dcc->enter($__internal_51b980a57aaf6030f72134c0375255a53b1e0f6fbb3b8653d2cc15c55e0f4dcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        // line 69
        echo "    ";
        $this->displayParentBlock("body_javascript", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function() {
            \$('a.action-delete').on('click', function(e) {
                e.preventDefault();

                \$('#modal-delete').modal({ backdrop: true, keyboard: true })
                    .off('click', '#modal-delete-button')
                    .on('click', '#modal-delete-button', function () {
                        \$('#delete-form').trigger('submit');
                    });
            });
        });
    </script>
";
        
        $__internal_51b980a57aaf6030f72134c0375255a53b1e0f6fbb3b8653d2cc15c55e0f4dcc->leave($__internal_51b980a57aaf6030f72134c0375255a53b1e0f6fbb3b8653d2cc15c55e0f4dcc_prof);

        
        $__internal_f76cf848aabc9997511ff2cee4f33fa9d9d97ff2fb221a3b2628aefe9f78622f->leave($__internal_f76cf848aabc9997511ff2cee4f33fa9d9d97ff2fb221a3b2628aefe9f78622f_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  277 => 69,  268 => 68,  257 => 64,  255 => 63,  254 => 62,  253 => 61,  252 => 60,  251 => 59,  249 => 57,  240 => 56,  229 => 50,  227 => 49,  226 => 48,  225 => 47,  224 => 46,  223 => 45,  222 => 44,  219 => 43,  216 => 42,  213 => 41,  204 => 40,  194 => 56,  188 => 52,  186 => 40,  181 => 37,  173 => 34,  169 => 32,  167 => 4,  165 => 32,  163 => 31,  157 => 28,  151 => 24,  149 => 4,  148 => 24,  140 => 22,  136 => 21,  133 => 20,  124 => 19,  111 => 15,  110 => 4,  108 => 15,  105 => 14,  103 => 13,  94 => 12,  76 => 10,  58 => 9,  48 => 7,  46 => 5,  45 => 4,  44 => 5,  43 => 4,  42 => 5,  40 => 4,  38 => 3,  36 => 1,  24 => 7,);
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
{# the empty string concatenation is needed when the primary key is an object (e.g. an Uuid object) #}
{% set _entity_id = '' ~ attribute(entity, _entity_config.primary_key_field_name) %}
{% trans_default_domain _entity_config.translation_domain %}
{% set _trans_parameters = { '%entity_name%': _entity_config.name|trans, '%entity_label%': _entity_config.label|trans, '%entity_id%': _entity_id } %}

{% extends _entity_config.templates.layout %}

{% block body_id 'easyadmin-show-' ~ _entity_config.name ~ '-' ~ _entity_id %}
{% block body_class 'show show-' ~ _entity_config.name|lower %}

{% block content_title %}
{% spaceless %}
    {% set _default_title = 'show.page_title'|trans(_trans_parameters, 'EasyAdminBundle') %}
    {{ _entity_config.show.title is defined ? _entity_config.show.title|trans(_trans_parameters) : _default_title }}
{% endspaceless %}
{% endblock %}

{% block main %}
    <div class=\"form-horizontal\">
        {% for field, metadata in fields %}
            <div class=\"form-group field-{{ metadata.type|default('default')|lower }} {{ metadata.css_class|default('') }}\">
                <label class=\"col-sm-2 control-label\">
                    {{ (metadata.label ?: field|humanize)|trans(_trans_parameters)|raw }}
                </label>
                <div class=\"col-sm-10\">
                    <div class=\"form-control\">
                        {{ easyadmin_render_field_for_show_view(_entity_config.name, entity, metadata) }}
                    </div>

                    {% if metadata.help|default('') != '' %}
                        <span class=\"help-block\"><i class=\"fa fa-info-circle\"></i> {{ metadata.help|trans|raw }}</span>
                    {% endif %}
                </div>
            </div>
        {% endfor %}

        <div class=\"form-group form-actions\">
            <div class=\"col-sm-10 col-sm-offset-2\">
            {% block item_actions %}
                {% set _show_actions = easyadmin_get_actions_for_show_item(_entity_config.name) %}
                {% set _request_parameters = { entity: _entity_config.name, referer: app.request.query.get('referer') } %}

                {{ include('@EasyAdmin/default/includes/_actions.html.twig', {
                    actions: _show_actions,
                    request_parameters: _request_parameters,
                    translation_domain: _entity_config.translation_domain,
                    trans_parameters: _trans_parameters,
                    item_id: _entity_id
                }, with_context = false) }}
            {% endblock item_actions %}
            </div>
        </div>
    </div>

    {% block delete_form %}
        {{ include('@EasyAdmin/default/includes/_delete_form.html.twig', {
            view: 'show',
            referer: app.request.query.get('referer', ''),
            delete_form: delete_form,
            _translation_domain: _entity_config.translation_domain,
            _trans_parameters: _trans_parameters,
            _entity_config: _entity_config,
        }, with_context = false) }}
    {% endblock delete_form %}
{% endblock %}

{% block body_javascript %}
    {{ parent() }}

    <script type=\"text/javascript\">
        \$(function() {
            \$('a.action-delete').on('click', function(e) {
                e.preventDefault();

                \$('#modal-delete').modal({ backdrop: true, keyboard: true })
                    .off('click', '#modal-delete-button')
                    .on('click', '#modal-delete-button', function () {
                        \$('#delete-form').trigger('submit');
                    });
            });
        });
    </script>
{% endblock %}
", "EasyAdminBundle:default:show.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\javiereguiluz\\easyadmin-bundle\\Resources\\views\\default\\show.html.twig");
    }
}
