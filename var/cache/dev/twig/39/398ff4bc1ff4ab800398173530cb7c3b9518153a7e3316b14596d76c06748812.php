<?php

/* EasyAdminBundle:default:label_empty.html.twig */
class __TwigTemplate_8f8fe96c6fdfbd80728317efcd781711d19039dc08329fba531d3105e2a473b1 extends Twig_Template
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
        $__internal_e448acd9b54eacc213b1291622d0c142add08ee915da19fc157574d8ab412ad8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e448acd9b54eacc213b1291622d0c142add08ee915da19fc157574d8ab412ad8->enter($__internal_e448acd9b54eacc213b1291622d0c142add08ee915da19fc157574d8ab412ad8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:label_empty.html.twig"));

        $__internal_70907d2013db4a7f5ae734933bcd6e4e26ca0bb960467301973d425d46d719da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70907d2013db4a7f5ae734933bcd6e4e26ca0bb960467301973d425d46d719da->enter($__internal_70907d2013db4a7f5ae734933bcd6e4e26ca0bb960467301973d425d46d719da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:label_empty.html.twig"));

        // line 1
        echo "<span class=\"label label-empty\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.empty", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
";
        
        $__internal_e448acd9b54eacc213b1291622d0c142add08ee915da19fc157574d8ab412ad8->leave($__internal_e448acd9b54eacc213b1291622d0c142add08ee915da19fc157574d8ab412ad8_prof);

        
        $__internal_70907d2013db4a7f5ae734933bcd6e4e26ca0bb960467301973d425d46d719da->leave($__internal_70907d2013db4a7f5ae734933bcd6e4e26ca0bb960467301973d425d46d719da_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:label_empty.html.twig";
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
        return new Twig_Source("<span class=\"label label-empty\">{{ 'label.empty'|trans(domain = 'EasyAdminBundle') }}</span>
", "EasyAdminBundle:default:label_empty.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\javiereguiluz\\easyadmin-bundle\\Resources\\views\\default\\label_empty.html.twig");
    }
}
