<?php

/* EasyAdminBundle:default/includes:_delete_form.html.twig */
class __TwigTemplate_35d83d307f5af0a7f117495955c42d88eb26b969d642cd0949d6eacd91ea2f6f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a9156dada5b2f65b8dc75983fc82f53e24f550b5bcea9e8d2b94a34a607eac05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9156dada5b2f65b8dc75983fc82f53e24f550b5bcea9e8d2b94a34a607eac05->enter($__internal_a9156dada5b2f65b8dc75983fc82f53e24f550b5bcea9e8d2b94a34a607eac05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default/includes:_delete_form.html.twig"));

        $__internal_f3a4fcef250818b7ccf75fb0d5fa065110560f82c4cd930537a6c0b19912f4fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3a4fcef250818b7ccf75fb0d5fa065110560f82c4cd930537a6c0b19912f4fc->enter($__internal_f3a4fcef250818b7ccf75fb0d5fa065110560f82c4cd930537a6c0b19912f4fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default/includes:_delete_form.html.twig"));

        // line 1
        echo         // line 2
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form', array("action" => (($this->getAttribute($this->getAttribute(        // line 3
(isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), "vars", array()), "action", array()) . "&referer=") . (isset($context["referer"]) ? $context["referer"] : $this->getContext($context, "referer"))), "method" => "DELETE", "attr" => array("id" => "delete-form", "style" => "display: none")));
        // line 7
        echo "

<div id=\"modal-delete\" class=\"modal fade\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-body\">
                <h4>";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("delete_modal.title", (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "EasyAdminBundle"), "html", null, true);
        echo "</h4>
                <p>";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("delete_modal.content", (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "EasyAdminBundle"), "html", null, true);
        echo "</p>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" data-dismiss=\"modal\" class=\"btn\">
                    ";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action.cancel", (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), (isset($context["_translation_domain"]) ? $context["_translation_domain"] : $this->getContext($context, "_translation_domain"))), "html", null, true);
        echo "
                </button>

                ";
        // line 21
        if ($this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->isActionEnabled((isset($context["view"]) ? $context["view"] : $this->getContext($context, "view")), "delete", $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()))) {
            // line 22
            echo "                    ";
            $context["_delete_action"] = $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getActionConfiguration((isset($context["view"]) ? $context["view"] : $this->getContext($context, "view")), "delete", $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()));
            // line 23
            echo "                    <button type=\"button\" data-dismiss=\"modal\" class=\"btn btn-danger\" id=\"modal-delete-button\" formtarget=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_delete_action"]) ? $context["_delete_action"] : $this->getContext($context, "_delete_action")), "target", array()), "html", null, true);
            echo "\">
                        ";
            // line 24
            if ($this->getAttribute((isset($context["_delete_action"]) ? $context["_delete_action"] : $this->getContext($context, "_delete_action")), "icon", array())) {
                echo "<i class=\"fa fa-";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_delete_action"]) ? $context["_delete_action"] : $this->getContext($context, "_delete_action")), "icon", array()), "html", null, true);
                echo "\"></i>";
            }
            // line 25
            echo "                        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("delete_modal.action", (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "EasyAdminBundle"), "html", null, true);
            echo "
                    </button>
                ";
        }
        // line 28
        echo "            </div>
        </div>
    </div>
</div>
";
        
        $__internal_a9156dada5b2f65b8dc75983fc82f53e24f550b5bcea9e8d2b94a34a607eac05->leave($__internal_a9156dada5b2f65b8dc75983fc82f53e24f550b5bcea9e8d2b94a34a607eac05_prof);

        
        $__internal_f3a4fcef250818b7ccf75fb0d5fa065110560f82c4cd930537a6c0b19912f4fc->leave($__internal_f3a4fcef250818b7ccf75fb0d5fa065110560f82c4cd930537a6c0b19912f4fc_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default/includes:_delete_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 28,  70 => 25,  64 => 24,  59 => 23,  56 => 22,  54 => 21,  48 => 18,  41 => 14,  37 => 13,  29 => 7,  27 => 3,  26 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{
    form(delete_form, {
        action: delete_form.vars.action ~ '&referer=' ~ referer,
        method: 'DELETE',
        attr: { id: 'delete-form', style: 'display: none' }
    })
}}

<div id=\"modal-delete\" class=\"modal fade\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-body\">
                <h4>{{ 'delete_modal.title'|trans(_trans_parameters, 'EasyAdminBundle') }}</h4>
                <p>{{ 'delete_modal.content'|trans(_trans_parameters, 'EasyAdminBundle') }}</p>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" data-dismiss=\"modal\" class=\"btn\">
                    {{ 'action.cancel'|trans(_trans_parameters, _translation_domain) }}
                </button>

                {% if easyadmin_action_is_enabled(view, 'delete', _entity_config.name) %}
                    {% set _delete_action = easyadmin_get_action(view, 'delete', _entity_config.name) %}
                    <button type=\"button\" data-dismiss=\"modal\" class=\"btn btn-danger\" id=\"modal-delete-button\" formtarget=\"{{ _delete_action.target }}\">
                        {% if _delete_action.icon %}<i class=\"fa fa-{{ _delete_action.icon }}\"></i>{% endif %}
                        {{ 'delete_modal.action'|trans(_trans_parameters, 'EasyAdminBundle') }}
                    </button>
                {% endif %}
            </div>
        </div>
    </div>
</div>
", "EasyAdminBundle:default/includes:_delete_form.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\javiereguiluz\\easyadmin-bundle\\Resources\\views\\default\\includes\\_delete_form.html.twig");
    }
}
