<?php

/* AppBundle:Group:show_content.html.twig */
class __TwigTemplate_29345e1a66f3b11b3c990e777b2e8f86dbe28c1ebeb9b2fc39cf808acfe3cd55 extends Twig_Template
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
        $__internal_3ab626f95268edbb5390dc2ef37a5d6eb78817ac5b47fcd33c3f5acc05d9afb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ab626f95268edbb5390dc2ef37a5d6eb78817ac5b47fcd33c3f5acc05d9afb8->enter($__internal_3ab626f95268edbb5390dc2ef37a5d6eb78817ac5b47fcd33c3f5acc05d9afb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Group:show_content.html.twig"));

        $__internal_a1d8ba7a5554e987d1ef3e0c28ea6d417786b270cb9a428cfdf02e4eeb411b24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1d8ba7a5554e987d1ef3e0c28ea6d417786b270cb9a428cfdf02e4eeb411b24->enter($__internal_a1d8ba7a5554e987d1ef3e0c28ea6d417786b270cb9a428cfdf02e4eeb411b24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Group:show_content.html.twig"));

        // line 1
        echo "<div class=\"fos_user_group_show\">
    <p>";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
\t<a href=\"";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
        echo "\">Retour au profile</a>
</div>
";
        
        $__internal_3ab626f95268edbb5390dc2ef37a5d6eb78817ac5b47fcd33c3f5acc05d9afb8->leave($__internal_3ab626f95268edbb5390dc2ef37a5d6eb78817ac5b47fcd33c3f5acc05d9afb8_prof);

        
        $__internal_a1d8ba7a5554e987d1ef3e0c28ea6d417786b270cb9a428cfdf02e4eeb411b24->leave($__internal_a1d8ba7a5554e987d1ef3e0c28ea6d417786b270cb9a428cfdf02e4eeb411b24_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"fos_user_group_show\">
    <p>{{ 'group.show.name'|trans([], 'FOSUserBundle') }}: {{ group.getName() }}</p>
\t<a href=\"{{ path('fos_user_profile_show') }}\">Retour au profile</a>
</div>
", "AppBundle:Group:show_content.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\src\\AppBundle\\Resources\\views\\Group\\show_content.html.twig");
    }
}
