<?php

/* EasyAdminBundle:default:label_null.html.twig */
class __TwigTemplate_751d6a7635765fd44e16c07853101fcd23f63d34f34cec9ad5ea5a92df14d0eb extends Twig_Template
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
        $__internal_fe9c049f75b7953b86684a3c1be48af19272bd0d5e158cf5277e609550789f89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe9c049f75b7953b86684a3c1be48af19272bd0d5e158cf5277e609550789f89->enter($__internal_fe9c049f75b7953b86684a3c1be48af19272bd0d5e158cf5277e609550789f89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:label_null.html.twig"));

        $__internal_5eecddf2ad746614a47b9483e740d194ca88d935147300c0a4d412e4e394d5d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5eecddf2ad746614a47b9483e740d194ca88d935147300c0a4d412e4e394d5d3->enter($__internal_5eecddf2ad746614a47b9483e740d194ca88d935147300c0a4d412e4e394d5d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:label_null.html.twig"));

        // line 1
        echo "<span class=\"label\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.null", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
";
        
        $__internal_fe9c049f75b7953b86684a3c1be48af19272bd0d5e158cf5277e609550789f89->leave($__internal_fe9c049f75b7953b86684a3c1be48af19272bd0d5e158cf5277e609550789f89_prof);

        
        $__internal_5eecddf2ad746614a47b9483e740d194ca88d935147300c0a4d412e4e394d5d3->leave($__internal_5eecddf2ad746614a47b9483e740d194ca88d935147300c0a4d412e4e394d5d3_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:label_null.html.twig";
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
        return new Twig_Source("<span class=\"label\">{{ 'label.null'|trans(domain = 'EasyAdminBundle') }}</span>
", "EasyAdminBundle:default:label_null.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\javiereguiluz\\easyadmin-bundle\\Resources\\views\\default\\label_null.html.twig");
    }
}
