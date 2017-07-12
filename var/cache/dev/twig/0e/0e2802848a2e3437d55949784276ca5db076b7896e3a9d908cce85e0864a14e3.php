<?php

/* FOSUserBundle:ChangePassword:change_password_content.html.twig */
class __TwigTemplate_e94d7e4cbfdafe53a67b678914a5048e5609d0ac4124a637e56541139b9cb54a extends Twig_Template
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
        $__internal_844ae6d558585df904f4d7964ffa67c40141c01d7ea036d02fcc67414a783395 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_844ae6d558585df904f4d7964ffa67c40141c01d7ea036d02fcc67414a783395->enter($__internal_844ae6d558585df904f4d7964ffa67c40141c01d7ea036d02fcc67414a783395_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password_content.html.twig"));

        $__internal_d9b5516c2f6bd78f553ddac43f5ad3475a7fc2f10d3cd39d91425f6aac51c9ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9b5516c2f6bd78f553ddac43f5ad3475a7fc2f10d3cd39d91425f6aac51c9ec->enter($__internal_d9b5516c2f6bd78f553ddac43f5ad3475a7fc2f10d3cd39d91425f6aac51c9ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_change_password"), "attr" => array("class" => "fos_user_change_password")));
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("change_password.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_844ae6d558585df904f4d7964ffa67c40141c01d7ea036d02fcc67414a783395->leave($__internal_844ae6d558585df904f4d7964ffa67c40141c01d7ea036d02fcc67414a783395_prof);

        
        $__internal_d9b5516c2f6bd78f553ddac43f5ad3475a7fc2f10d3cd39d91425f6aac51c9ec->leave($__internal_d9b5516c2f6bd78f553ddac43f5ad3475a7fc2f10d3cd39d91425f6aac51c9ec_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  37 => 6,  32 => 4,  28 => 3,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

{{ form_start(form, { 'action': path('fos_user_change_password'), 'attr': { 'class': 'fos_user_change_password' } }) }}
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'change_password.submit'|trans }}\" />
    </div>
{{ form_end(form) }}
", "FOSUserBundle:ChangePassword:change_password_content.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\ChangePassword\\change_password_content.html.twig");
    }
}
