<?php

/* SonataAdminBundle:CRUD:dashboard__action.html.twig */
class __TwigTemplate_af84c12c509d1986b223b44dc816869fa2655faf78621cefb3880d73982a5dd8 extends Twig_Template
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
        $__internal_218b22dc9030d90d05ff8f76aa48c0019355b88487aca930cbde355e351bbdb9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_218b22dc9030d90d05ff8f76aa48c0019355b88487aca930cbde355e351bbdb9->enter($__internal_218b22dc9030d90d05ff8f76aa48c0019355b88487aca930cbde355e351bbdb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:dashboard__action.html.twig"));

        $__internal_c9ce2cbf82ce0c3244ecce08ffa4e55019802103d1273caf0edbe699b696d380 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9ce2cbf82ce0c3244ecce08ffa4e55019802103d1273caf0edbe699b696d380->enter($__internal_c9ce2cbf82ce0c3244ecce08ffa4e55019802103d1273caf0edbe699b696d380_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:dashboard__action.html.twig"));

        // line 1
        echo "<a class=\"btn btn-link btn-flat\" href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "url", array()), "html", null, true);
        echo "\">
    <i class=\"fa fa-";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "icon", array()), "html", null, true);
        echo "\" aria-hidden=\"true\"></i>
    ";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "label", array()), array(), (($this->getAttribute((isset($context["action"]) ? $context["action"] : null), "translation_domain", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["action"]) ? $context["action"] : null), "translation_domain", array()), "SonataAdminBundle")) : ("SonataAdminBundle"))), "html", null, true);
        echo "
</a>
";
        
        $__internal_218b22dc9030d90d05ff8f76aa48c0019355b88487aca930cbde355e351bbdb9->leave($__internal_218b22dc9030d90d05ff8f76aa48c0019355b88487aca930cbde355e351bbdb9_prof);

        
        $__internal_c9ce2cbf82ce0c3244ecce08ffa4e55019802103d1273caf0edbe699b696d380->leave($__internal_c9ce2cbf82ce0c3244ecce08ffa4e55019802103d1273caf0edbe699b696d380_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:dashboard__action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 3,  30 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<a class=\"btn btn-link btn-flat\" href=\"{{ action.url }}\">
    <i class=\"fa fa-{{ action.icon }}\" aria-hidden=\"true\"></i>
    {{ action.label|trans({}, action.translation_domain|default('SonataAdminBundle')) }}
</a>
", "SonataAdminBundle:CRUD:dashboard__action.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\dashboard__action.html.twig");
    }
}
