<?php

/* EasyAdminBundle:default:field_object.html.twig */
class __TwigTemplate_6a15a7a4f714468a915345914463b86c0d0152e0aa4a97b312cad2e39d892fbc extends Twig_Template
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
        $__internal_fbb2a41498dfebba823616e767d5cad83d519945311fa965f0c7d953f5b96598 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbb2a41498dfebba823616e767d5cad83d519945311fa965f0c7d953f5b96598->enter($__internal_fbb2a41498dfebba823616e767d5cad83d519945311fa965f0c7d953f5b96598_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_object.html.twig"));

        $__internal_f36e2b78f0463d4f00780632e10e6f3049369cc09a29250b4634cbe58f99dd6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f36e2b78f0463d4f00780632e10e6f3049369cc09a29250b4634cbe58f99dd6b->enter($__internal_f36e2b78f0463d4f00780632e10e6f3049369cc09a29250b4634cbe58f99dd6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_object.html.twig"));

        // line 1
        echo "<span class=\"label\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.object", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
";
        
        $__internal_fbb2a41498dfebba823616e767d5cad83d519945311fa965f0c7d953f5b96598->leave($__internal_fbb2a41498dfebba823616e767d5cad83d519945311fa965f0c7d953f5b96598_prof);

        
        $__internal_f36e2b78f0463d4f00780632e10e6f3049369cc09a29250b4634cbe58f99dd6b->leave($__internal_f36e2b78f0463d4f00780632e10e6f3049369cc09a29250b4634cbe58f99dd6b_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_object.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<span class=\"label\">{{ 'label.object'|trans(domain = 'EasyAdminBundle') }}</span>
", "EasyAdminBundle:default:field_object.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\javiereguiluz\\easyadmin-bundle\\Resources\\views\\default\\field_object.html.twig");
    }
}
