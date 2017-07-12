<?php

/* EasyAdminBundle:default:field_raw.html.twig */
class __TwigTemplate_9cbaa98e2442ea955feac90484dff27ec55240ee1dcc5536389d54daa972d0cf extends Twig_Template
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
        $__internal_bb68d441bda6b18b22a2eaa16431a3b9d8b486d12f7dab0a9ded209f273e6517 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb68d441bda6b18b22a2eaa16431a3b9d8b486d12f7dab0a9ded209f273e6517->enter($__internal_bb68d441bda6b18b22a2eaa16431a3b9d8b486d12f7dab0a9ded209f273e6517_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_raw.html.twig"));

        $__internal_4ba6744546f3c8f79093e7c95320c34f2a7d0f79aac1ba316e0794ff6e885873 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ba6744546f3c8f79093e7c95320c34f2a7d0f79aac1ba316e0794ff6e885873->enter($__internal_4ba6744546f3c8f79093e7c95320c34f2a7d0f79aac1ba316e0794ff6e885873_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_raw.html.twig"));

        // line 1
        echo (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"));
        echo "
";
        
        $__internal_bb68d441bda6b18b22a2eaa16431a3b9d8b486d12f7dab0a9ded209f273e6517->leave($__internal_bb68d441bda6b18b22a2eaa16431a3b9d8b486d12f7dab0a9ded209f273e6517_prof);

        
        $__internal_4ba6744546f3c8f79093e7c95320c34f2a7d0f79aac1ba316e0794ff6e885873->leave($__internal_4ba6744546f3c8f79093e7c95320c34f2a7d0f79aac1ba316e0794ff6e885873_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_raw.html.twig";
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
        return new Twig_Source("{{ value|raw }}
", "EasyAdminBundle:default:field_raw.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\javiereguiluz\\easyadmin-bundle\\Resources\\views\\default\\field_raw.html.twig");
    }
}
