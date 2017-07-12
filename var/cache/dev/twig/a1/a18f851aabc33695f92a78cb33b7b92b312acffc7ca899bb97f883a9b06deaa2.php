<?php

/* EasyAdminBundle:default:edit.html.twig */
class __TwigTemplate_aa21e3564ac2e0224dd11889e3570b034dba819845a20eea4bdc69f9fc12d4f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'body_class' => array($this, 'block_body_class'),
            'content_title' => array($this, 'block_content_title'),
            'main' => array($this, 'block_main'),
            'entity_form' => array($this, 'block_entity_form'),
            'delete_form' => array($this, 'block_delete_form'),
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 8
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "templates", array()), "layout", array()), "EasyAdminBundle:default:edit.html.twig", 8);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d27de9e2b4f04bb55fdf9e04f06145db6d5fdbb7cc07ff8f5cd3e7d9c7d1d099 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d27de9e2b4f04bb55fdf9e04f06145db6d5fdbb7cc07ff8f5cd3e7d9c7d1d099->enter($__internal_d27de9e2b4f04bb55fdf9e04f06145db6d5fdbb7cc07ff8f5cd3e7d9c7d1d099_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:edit.html.twig"));

        $__internal_601cb1e92ce80423950bacafefdf0e72ca4bd2b39aa1de3953a94f66b164a9a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_601cb1e92ce80423950bacafefdf0e72ca4bd2b39aa1de3953a94f66b164a9a1->enter($__internal_601cb1e92ce80423950bacafefdf0e72ca4bd2b39aa1de3953a94f66b164a9a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:edit.html.twig"));

        // line 1
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.form_theme"));
        // line 3
        $context["_entity_config"] = $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 4
        $context["_entity_id"] = $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "primary_key_field_name", array()));
        // line 5
        $context["__internal_906835d1f19138da2cefb1066e10e85123a1ce0b08ea5c72b4d1001248bb8c19"] = $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "translation_domain", array());
        // line 6
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()), array(),         // line 5
(isset($context["__internal_906835d1f19138da2cefb1066e10e85123a1ce0b08ea5c72b4d1001248bb8c19"]) ? $context["__internal_906835d1f19138da2cefb1066e10e85123a1ce0b08ea5c72b4d1001248bb8c19"] : $this->getContext($context, "__internal_906835d1f19138da2cefb1066e10e85123a1ce0b08ea5c72b4d1001248bb8c19"))), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(        // line 6
(isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "label", array()), array(),         // line 5
(isset($context["__internal_906835d1f19138da2cefb1066e10e85123a1ce0b08ea5c72b4d1001248bb8c19"]) ? $context["__internal_906835d1f19138da2cefb1066e10e85123a1ce0b08ea5c72b4d1001248bb8c19"] : $this->getContext($context, "__internal_906835d1f19138da2cefb1066e10e85123a1ce0b08ea5c72b4d1001248bb8c19"))), "%entity_id%" =>         // line 6
(isset($context["_entity_id"]) ? $context["_entity_id"] : $this->getContext($context, "_entity_id")));
        // line 8
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d27de9e2b4f04bb55fdf9e04f06145db6d5fdbb7cc07ff8f5cd3e7d9c7d1d099->leave($__internal_d27de9e2b4f04bb55fdf9e04f06145db6d5fdbb7cc07ff8f5cd3e7d9c7d1d099_prof);

        
        $__internal_601cb1e92ce80423950bacafefdf0e72ca4bd2b39aa1de3953a94f66b164a9a1->leave($__internal_601cb1e92ce80423950bacafefdf0e72ca4bd2b39aa1de3953a94f66b164a9a1_prof);

    }

    // line 10
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_ec8d4c59b0abcac475f80aeaa68960e00cef502a40ff071cd97ec6c253de3616 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec8d4c59b0abcac475f80aeaa68960e00cef502a40ff071cd97ec6c253de3616->enter($__internal_ec8d4c59b0abcac475f80aeaa68960e00cef502a40ff071cd97ec6c253de3616_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_825885fcaa59ec74a2afb96c74bdf9b8595ab81851ca5b2bb3b240c35c996f59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_825885fcaa59ec74a2afb96c74bdf9b8595ab81851ca5b2bb3b240c35c996f59->enter($__internal_825885fcaa59ec74a2afb96c74bdf9b8595ab81851ca5b2bb3b240c35c996f59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ((("easyadmin-edit-" . $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array())) . "-") . (isset($context["_entity_id"]) ? $context["_entity_id"] : $this->getContext($context, "_entity_id"))), "html", null, true);
        
        $__internal_825885fcaa59ec74a2afb96c74bdf9b8595ab81851ca5b2bb3b240c35c996f59->leave($__internal_825885fcaa59ec74a2afb96c74bdf9b8595ab81851ca5b2bb3b240c35c996f59_prof);

        
        $__internal_ec8d4c59b0abcac475f80aeaa68960e00cef502a40ff071cd97ec6c253de3616->leave($__internal_ec8d4c59b0abcac475f80aeaa68960e00cef502a40ff071cd97ec6c253de3616_prof);

    }

    // line 11
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_5ed292eddb6ac9266729401cef7c11e98d69999bcb3510b0db7fe26e0083a3c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ed292eddb6ac9266729401cef7c11e98d69999bcb3510b0db7fe26e0083a3c3->enter($__internal_5ed292eddb6ac9266729401cef7c11e98d69999bcb3510b0db7fe26e0083a3c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_82b20a926d20909de2e9f560e5af3b1a173aeb6bff2e2ccf903dd02b1fe698f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82b20a926d20909de2e9f560e5af3b1a173aeb6bff2e2ccf903dd02b1fe698f1->enter($__internal_82b20a926d20909de2e9f560e5af3b1a173aeb6bff2e2ccf903dd02b1fe698f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("edit edit-" . twig_lower_filter($this->env, $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()))), "html", null, true);
        
        $__internal_82b20a926d20909de2e9f560e5af3b1a173aeb6bff2e2ccf903dd02b1fe698f1->leave($__internal_82b20a926d20909de2e9f560e5af3b1a173aeb6bff2e2ccf903dd02b1fe698f1_prof);

        
        $__internal_5ed292eddb6ac9266729401cef7c11e98d69999bcb3510b0db7fe26e0083a3c3->leave($__internal_5ed292eddb6ac9266729401cef7c11e98d69999bcb3510b0db7fe26e0083a3c3_prof);

    }

    // line 13
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_2f131c35a6d8454f45d8fbb1b7eeac3b73a22b011f6ac4d7afdee001680a0f66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f131c35a6d8454f45d8fbb1b7eeac3b73a22b011f6ac4d7afdee001680a0f66->enter($__internal_2f131c35a6d8454f45d8fbb1b7eeac3b73a22b011f6ac4d7afdee001680a0f66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_7823bf5c4d6d50779eec6cec5595ef612b5f8e548db9c268723f8180aace5192 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7823bf5c4d6d50779eec6cec5595ef612b5f8e548db9c268723f8180aace5192->enter($__internal_7823bf5c4d6d50779eec6cec5595ef612b5f8e548db9c268723f8180aace5192_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 14
        ob_start();
        // line 15
        echo "    ";
        $context["_default_title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("edit.page_title", (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "EasyAdminBundle");
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "edit", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "edit", array()), "title", array()), (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")),         // line 5
(isset($context["__internal_906835d1f19138da2cefb1066e10e85123a1ce0b08ea5c72b4d1001248bb8c19"]) ? $context["__internal_906835d1f19138da2cefb1066e10e85123a1ce0b08ea5c72b4d1001248bb8c19"] : $this->getContext($context, "__internal_906835d1f19138da2cefb1066e10e85123a1ce0b08ea5c72b4d1001248bb8c19")))) : (        // line 16
(isset($context["_default_title"]) ? $context["_default_title"] : $this->getContext($context, "_default_title")))), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_7823bf5c4d6d50779eec6cec5595ef612b5f8e548db9c268723f8180aace5192->leave($__internal_7823bf5c4d6d50779eec6cec5595ef612b5f8e548db9c268723f8180aace5192_prof);

        
        $__internal_2f131c35a6d8454f45d8fbb1b7eeac3b73a22b011f6ac4d7afdee001680a0f66->leave($__internal_2f131c35a6d8454f45d8fbb1b7eeac3b73a22b011f6ac4d7afdee001680a0f66_prof);

    }

    // line 20
    public function block_main($context, array $blocks = array())
    {
        $__internal_f1c38cab88bf1dae0209353bd4cb6ca7a245cb70768b1357884fb8b4fbd203b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1c38cab88bf1dae0209353bd4cb6ca7a245cb70768b1357884fb8b4fbd203b9->enter($__internal_f1c38cab88bf1dae0209353bd4cb6ca7a245cb70768b1357884fb8b4fbd203b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_0d970cda0510e1f7f6dc43cbe162780af2c3c9c0e7685645ca68c3e94029519f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d970cda0510e1f7f6dc43cbe162780af2c3c9c0e7685645ca68c3e94029519f->enter($__internal_0d970cda0510e1f7f6dc43cbe162780af2c3c9c0e7685645ca68c3e94029519f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 21
        echo "    ";
        $this->displayBlock('entity_form', $context, $blocks);
        // line 24
        echo "
    ";
        // line 25
        $this->displayBlock('delete_form', $context, $blocks);
        
        $__internal_0d970cda0510e1f7f6dc43cbe162780af2c3c9c0e7685645ca68c3e94029519f->leave($__internal_0d970cda0510e1f7f6dc43cbe162780af2c3c9c0e7685645ca68c3e94029519f_prof);

        
        $__internal_f1c38cab88bf1dae0209353bd4cb6ca7a245cb70768b1357884fb8b4fbd203b9->leave($__internal_f1c38cab88bf1dae0209353bd4cb6ca7a245cb70768b1357884fb8b4fbd203b9_prof);

    }

    // line 21
    public function block_entity_form($context, array $blocks = array())
    {
        $__internal_a5c91d28235b0c4b0afd25acfdfb14016d6b3ed508c32a604fb846706100d4e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5c91d28235b0c4b0afd25acfdfb14016d6b3ed508c32a604fb846706100d4e2->enter($__internal_a5c91d28235b0c4b0afd25acfdfb14016d6b3ed508c32a604fb846706100d4e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        $__internal_cbaf39c38260274160855e74e1c755d440013227571544882e380824fe8353d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbaf39c38260274160855e74e1c755d440013227571544882e380824fe8353d6->enter($__internal_cbaf39c38260274160855e74e1c755d440013227571544882e380824fe8353d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        // line 22
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
    ";
        
        $__internal_cbaf39c38260274160855e74e1c755d440013227571544882e380824fe8353d6->leave($__internal_cbaf39c38260274160855e74e1c755d440013227571544882e380824fe8353d6_prof);

        
        $__internal_a5c91d28235b0c4b0afd25acfdfb14016d6b3ed508c32a604fb846706100d4e2->leave($__internal_a5c91d28235b0c4b0afd25acfdfb14016d6b3ed508c32a604fb846706100d4e2_prof);

    }

    // line 25
    public function block_delete_form($context, array $blocks = array())
    {
        $__internal_7e3b9ece8b76f603fd381f42bd8742d83013b082d83cb6b983c81226412b5860 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e3b9ece8b76f603fd381f42bd8742d83013b082d83cb6b983c81226412b5860->enter($__internal_7e3b9ece8b76f603fd381f42bd8742d83013b082d83cb6b983c81226412b5860_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

        $__internal_88381cd5ff671a79c4733432c90e56775fbad27eee41edff75f9df37b474c761 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88381cd5ff671a79c4733432c90e56775fbad27eee41edff75f9df37b474c761->enter($__internal_88381cd5ff671a79c4733432c90e56775fbad27eee41edff75f9df37b474c761_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

        // line 26
        echo "        ";
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_delete_form.html.twig", array("view" => "edit", "referer" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 28
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "referer", 1 => ""), "method"), "delete_form" =>         // line 29
(isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), "_translation_domain" => $this->getAttribute(        // line 30
(isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "translation_domain", array()), "_trans_parameters" =>         // line 31
(isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "_entity_config" =>         // line 32
(isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config"))), false);
        // line 33
        echo "
    ";
        
        $__internal_88381cd5ff671a79c4733432c90e56775fbad27eee41edff75f9df37b474c761->leave($__internal_88381cd5ff671a79c4733432c90e56775fbad27eee41edff75f9df37b474c761_prof);

        
        $__internal_7e3b9ece8b76f603fd381f42bd8742d83013b082d83cb6b983c81226412b5860->leave($__internal_7e3b9ece8b76f603fd381f42bd8742d83013b082d83cb6b983c81226412b5860_prof);

    }

    // line 37
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_593b86c95ab945d42c93ad2d930ba0a1b7cb5d5b6c2c24d1b29179f016e9537a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_593b86c95ab945d42c93ad2d930ba0a1b7cb5d5b6c2c24d1b29179f016e9537a->enter($__internal_593b86c95ab945d42c93ad2d930ba0a1b7cb5d5b6c2c24d1b29179f016e9537a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_fb92df75ad61ddbc0f12d878013bcdbef18be937534e561d8c568f99832cd092 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb92df75ad61ddbc0f12d878013bcdbef18be937534e561d8c568f99832cd092->enter($__internal_fb92df75ad61ddbc0f12d878013bcdbef18be937534e561d8c568f99832cd092_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        // line 38
        echo "    ";
        $this->displayParentBlock("body_javascript", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function() {
            \$('.edit-form').areYouSure({ 'message': '";
        // line 42
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.are_you_sure", array(), "EasyAdminBundle"), "js"), "html", null, true);
        echo "' });

            \$('.form-actions').easyAdminSticky();

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
        // line 58
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_select2_widget.html.twig");
        echo "
";
        
        $__internal_fb92df75ad61ddbc0f12d878013bcdbef18be937534e561d8c568f99832cd092->leave($__internal_fb92df75ad61ddbc0f12d878013bcdbef18be937534e561d8c568f99832cd092_prof);

        
        $__internal_593b86c95ab945d42c93ad2d930ba0a1b7cb5d5b6c2c24d1b29179f016e9537a->leave($__internal_593b86c95ab945d42c93ad2d930ba0a1b7cb5d5b6c2c24d1b29179f016e9537a_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 58,  218 => 42,  210 => 38,  201 => 37,  190 => 33,  188 => 32,  187 => 31,  186 => 30,  185 => 29,  184 => 28,  182 => 26,  173 => 25,  160 => 22,  151 => 21,  141 => 25,  138 => 24,  135 => 21,  126 => 20,  113 => 16,  112 => 5,  110 => 16,  107 => 15,  105 => 14,  96 => 13,  78 => 11,  60 => 10,  50 => 8,  48 => 6,  47 => 5,  46 => 6,  45 => 5,  44 => 6,  42 => 5,  40 => 4,  38 => 3,  36 => 1,  24 => 8,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% form_theme form with easyadmin_config('design.form_theme') %}

{% set _entity_config = easyadmin_entity(app.request.query.get('entity')) %}
{% set _entity_id = attribute(entity, _entity_config.primary_key_field_name) %}
{% trans_default_domain _entity_config.translation_domain %}
{% set _trans_parameters = { '%entity_name%': _entity_config.name|trans, '%entity_label%': _entity_config.label|trans, '%entity_id%': _entity_id } %}

{% extends _entity_config.templates.layout %}

{% block body_id 'easyadmin-edit-' ~ _entity_config.name ~ '-' ~ _entity_id %}
{% block body_class 'edit edit-' ~ _entity_config.name|lower %}

{% block content_title %}
{% spaceless %}
    {% set _default_title = 'edit.page_title'|trans(_trans_parameters, 'EasyAdminBundle') %}
    {{ _entity_config.edit.title is defined ? _entity_config.edit.title|trans(_trans_parameters) : _default_title }}
{% endspaceless %}
{% endblock %}

{% block main %}
    {% block entity_form %}
        {{ form(form) }}
    {% endblock entity_form %}

    {% block delete_form %}
        {{ include('@EasyAdmin/default/includes/_delete_form.html.twig', {
            view: 'edit',
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
            \$('.edit-form').areYouSure({ 'message': '{{ 'form.are_you_sure'|trans({}, 'EasyAdminBundle')|e('js') }}' });

            \$('.form-actions').easyAdminSticky();

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

    {{ include('@EasyAdmin/default/includes/_select2_widget.html.twig') }}
{% endblock %}
", "EasyAdminBundle:default:edit.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\javiereguiluz\\easyadmin-bundle\\Resources\\views\\default\\edit.html.twig");
    }
}
