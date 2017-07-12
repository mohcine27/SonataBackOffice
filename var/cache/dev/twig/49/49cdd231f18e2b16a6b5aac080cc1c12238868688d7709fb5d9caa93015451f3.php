<?php

/* EasyAdminBundle:default:field_url.html.twig */
class __TwigTemplate_033f225500f53c15c383f138efadc81a3f2ea378790ddc1aea3d15e7d1d4e9b7 extends Twig_Template
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
        $__internal_521935194e76bc80b530551a7d869e730144494a1c9bca7eac3b9f0b637d9ef7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_521935194e76bc80b530551a7d869e730144494a1c9bca7eac3b9f0b637d9ef7->enter($__internal_521935194e76bc80b530551a7d869e730144494a1c9bca7eac3b9f0b637d9ef7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_url.html.twig"));

        $__internal_e8febbecf9fcb73947aa8190c00d5c9742ced3f00da77fd39b3d095337b933f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8febbecf9fcb73947aa8190c00d5c9742ced3f00da77fd39b3d095337b933f7->enter($__internal_e8febbecf9fcb73947aa8190c00d5c9742ced3f00da77fd39b3d095337b933f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_url.html.twig"));

        // line 1
        if (((isset($context["view"]) ? $context["view"] : $this->getContext($context, "view")) == "show")) {
            // line 2
            echo "    <a target=\"_blank\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "</a>
";
        } else {
            // line 4
            echo "    <a target=\"_blank\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->truncateText($this->env, twig_replace_filter((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), array("https://" => "", "http://" => ""))), "html", null, true);
            echo "</a>
";
        }
        
        $__internal_521935194e76bc80b530551a7d869e730144494a1c9bca7eac3b9f0b637d9ef7->leave($__internal_521935194e76bc80b530551a7d869e730144494a1c9bca7eac3b9f0b637d9ef7_prof);

        
        $__internal_e8febbecf9fcb73947aa8190c00d5c9742ced3f00da77fd39b3d095337b933f7->leave($__internal_e8febbecf9fcb73947aa8190c00d5c9742ced3f00da77fd39b3d095337b933f7_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_url.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 4,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if view == 'show' %}
    <a target=\"_blank\" href=\"{{ value }}\">{{ value }}</a>
{% else %}
    <a target=\"_blank\" href=\"{{ value }}\">{{ value|replace({ 'https://': '', 'http://': '' })|easyadmin_truncate }}</a>
{% endif %}
", "EasyAdminBundle:default:field_url.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\javiereguiluz\\easyadmin-bundle\\Resources\\views\\default\\field_url.html.twig");
    }
}
