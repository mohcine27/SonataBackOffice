<?php

/* EasyAdminBundle:default:field_tel.html.twig */
class __TwigTemplate_b762656946aac955c2e23e735725437bab2e0bc16987cb67ea74e7b8dbd43237 extends Twig_Template
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
        $__internal_f6bd0a74b7ff20cafc831f9c20fab3ec5bea3da15141171e51c280954d5e2e6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6bd0a74b7ff20cafc831f9c20fab3ec5bea3da15141171e51c280954d5e2e6f->enter($__internal_f6bd0a74b7ff20cafc831f9c20fab3ec5bea3da15141171e51c280954d5e2e6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_tel.html.twig"));

        $__internal_f28251b9c6fe46e3351276eb68b38ab0c44d107db2b1cd31e328600579385ca0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f28251b9c6fe46e3351276eb68b38ab0c44d107db2b1cd31e328600579385ca0->enter($__internal_f28251b9c6fe46e3351276eb68b38ab0c44d107db2b1cd31e328600579385ca0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_tel.html.twig"));

        // line 1
        echo "<a href=\"tel:";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "</a>
";
        
        $__internal_f6bd0a74b7ff20cafc831f9c20fab3ec5bea3da15141171e51c280954d5e2e6f->leave($__internal_f6bd0a74b7ff20cafc831f9c20fab3ec5bea3da15141171e51c280954d5e2e6f_prof);

        
        $__internal_f28251b9c6fe46e3351276eb68b38ab0c44d107db2b1cd31e328600579385ca0->leave($__internal_f28251b9c6fe46e3351276eb68b38ab0c44d107db2b1cd31e328600579385ca0_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_tel.html.twig";
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
        return new Twig_Source("<a href=\"tel:{{ value }}\">{{ value }}</a>
", "EasyAdminBundle:default:field_tel.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\javiereguiluz\\easyadmin-bundle\\Resources\\views\\default\\field_tel.html.twig");
    }
}
