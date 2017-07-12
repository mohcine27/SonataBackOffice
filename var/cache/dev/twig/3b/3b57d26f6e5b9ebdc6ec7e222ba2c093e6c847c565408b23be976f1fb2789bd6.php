<?php

/* EasyAdminBundle:default:field_image.html.twig */
class __TwigTemplate_0668a3356e6c60ab3a33d5430d21bdf38148e677b71f292f2d031971ce0c43d6 extends Twig_Template
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
        $__internal_b69ed0db13a31a72b39da2d6679338d26d15fd8017cbdba3d38588bddbfe4fd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b69ed0db13a31a72b39da2d6679338d26d15fd8017cbdba3d38588bddbfe4fd5->enter($__internal_b69ed0db13a31a72b39da2d6679338d26d15fd8017cbdba3d38588bddbfe4fd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_image.html.twig"));

        $__internal_de5695b137495cedb58ae9ce49ba6404ea790863ca1062b2e9bc3dcbec24e491 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de5695b137495cedb58ae9ce49ba6404ea790863ca1062b2e9bc3dcbec24e491->enter($__internal_de5695b137495cedb58ae9ce49ba6404ea790863ca1062b2e9bc3dcbec24e491_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_image.html.twig"));

        // line 1
        echo "<a href=\"#\" class=\"easyadmin-thumbnail\" data-featherlight=\"#easyadmin-lightbox-";
        echo twig_escape_filter($this->env, (isset($context["uuid"]) ? $context["uuid"] : $this->getContext($context, "uuid")), "html", null, true);
        echo "\" data-featherlight-close-on-click=\"anywhere\">
    <img src=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "html", null, true);
        echo "\">
</a>

<div id=\"easyadmin-lightbox-";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["uuid"]) ? $context["uuid"] : $this->getContext($context, "uuid")), "html", null, true);
        echo "\" class=\"easyadmin-lightbox\">
    <img src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "html", null, true);
        echo "\">
</div>
";
        
        $__internal_b69ed0db13a31a72b39da2d6679338d26d15fd8017cbdba3d38588bddbfe4fd5->leave($__internal_b69ed0db13a31a72b39da2d6679338d26d15fd8017cbdba3d38588bddbfe4fd5_prof);

        
        $__internal_de5695b137495cedb58ae9ce49ba6404ea790863ca1062b2e9bc3dcbec24e491->leave($__internal_de5695b137495cedb58ae9ce49ba6404ea790863ca1062b2e9bc3dcbec24e491_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  36 => 5,  30 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<a href=\"#\" class=\"easyadmin-thumbnail\" data-featherlight=\"#easyadmin-lightbox-{{ uuid }}\" data-featherlight-close-on-click=\"anywhere\">
    <img src=\"{{ asset(value) }}\">
</a>

<div id=\"easyadmin-lightbox-{{ uuid }}\" class=\"easyadmin-lightbox\">
    <img src=\"{{ asset(value) }}\">
</div>
", "EasyAdminBundle:default:field_image.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\javiereguiluz\\easyadmin-bundle\\Resources\\views\\default\\field_image.html.twig");
    }
}
