<?php

/* EasyAdminBundle:default:field_text.html.twig */
class __TwigTemplate_72f953e6e99cab36d9e4a6218461e0739339ae2aac34611c1479f4d0f2b75fb4 extends Twig_Template
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
        $__internal_218774a430d85bc651491cad9433cb4c3cfc195c093ae5b545fceb521cd74067 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_218774a430d85bc651491cad9433cb4c3cfc195c093ae5b545fceb521cd74067->enter($__internal_218774a430d85bc651491cad9433cb4c3cfc195c093ae5b545fceb521cd74067_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_text.html.twig"));

        $__internal_2e0d955bbb6fbe9236129247f7c1620e32d0c09dc44cfc0195dfd967ee837f90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e0d955bbb6fbe9236129247f7c1620e32d0c09dc44cfc0195dfd967ee837f90->enter($__internal_2e0d955bbb6fbe9236129247f7c1620e32d0c09dc44cfc0195dfd967ee837f90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_text.html.twig"));

        // line 1
        if (((isset($context["view"]) ? $context["view"] : $this->getContext($context, "view")) == "show")) {
            // line 2
            echo "    ";
            echo nl2br(twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true));
            echo "
";
        } else {
            // line 4
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->truncateText($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "html", null, true);
            echo "
";
        }
        
        $__internal_218774a430d85bc651491cad9433cb4c3cfc195c093ae5b545fceb521cd74067->leave($__internal_218774a430d85bc651491cad9433cb4c3cfc195c093ae5b545fceb521cd74067_prof);

        
        $__internal_2e0d955bbb6fbe9236129247f7c1620e32d0c09dc44cfc0195dfd967ee837f90->leave($__internal_2e0d955bbb6fbe9236129247f7c1620e32d0c09dc44cfc0195dfd967ee837f90_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_text.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  27 => 2,  25 => 1,);
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
    {{ value|nl2br }}
{% else %}
    {{ value|easyadmin_truncate }}
{% endif %}
", "EasyAdminBundle:default:field_text.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\javiereguiluz\\easyadmin-bundle\\Resources\\views\\default\\field_text.html.twig");
    }
}
