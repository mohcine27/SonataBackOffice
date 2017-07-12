<?php

/* EasyAdminBundle:default:label_inaccessible.html.twig */
class __TwigTemplate_2eaf7afd9383cab53f9a767b50c79d3ba9f1a9c598432c18a9002d5c7109de24 extends Twig_Template
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
        $__internal_ad5a8736e6b73661ef6e0a21b7def5aea850c4d742c8b77896504df3dcad4a28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad5a8736e6b73661ef6e0a21b7def5aea850c4d742c8b77896504df3dcad4a28->enter($__internal_ad5a8736e6b73661ef6e0a21b7def5aea850c4d742c8b77896504df3dcad4a28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:label_inaccessible.html.twig"));

        $__internal_6e1748703cbf94b1e4f851fdc04a01d095931fd187850204c4d6f700baccef7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e1748703cbf94b1e4f851fdc04a01d095931fd187850204c4d6f700baccef7b->enter($__internal_6e1748703cbf94b1e4f851fdc04a01d095931fd187850204c4d6f700baccef7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:label_inaccessible.html.twig"));

        // line 2
        echo "
<span class=\"label label-danger\" title=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.inaccessible.explanation", array(), "EasyAdminBundle"), "html", null, true);
        echo "\">
    ";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.inaccessible", array(), "EasyAdminBundle"), "html", null, true);
        echo "
</span>
";
        
        $__internal_ad5a8736e6b73661ef6e0a21b7def5aea850c4d742c8b77896504df3dcad4a28->leave($__internal_ad5a8736e6b73661ef6e0a21b7def5aea850c4d742c8b77896504df3dcad4a28_prof);

        
        $__internal_6e1748703cbf94b1e4f851fdc04a01d095931fd187850204c4d6f700baccef7b->leave($__internal_6e1748703cbf94b1e4f851fdc04a01d095931fd187850204c4d6f700baccef7b_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:label_inaccessible.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 4,  28 => 3,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'EasyAdminBundle' %}

<span class=\"label label-danger\" title=\"{{ 'label.inaccessible.explanation'|trans }}\">
    {{ 'label.inaccessible'|trans }}
</span>
", "EasyAdminBundle:default:label_inaccessible.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\javiereguiluz\\easyadmin-bundle\\Resources\\views\\default\\label_inaccessible.html.twig");
    }
}
