<?php

/* AppBundle:Group:list_content.html.twig */
class __TwigTemplate_87215e462f26c60a23d2ba79e382c034f8fdce1675ba0c1fee8811e5c83bc67c extends Twig_Template
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
        $__internal_ab7d4416f0fe123ff82bc95a7b7fcc797ba407120bf8c2d8eb7cb8776b2bc72b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab7d4416f0fe123ff82bc95a7b7fcc797ba407120bf8c2d8eb7cb8776b2bc72b->enter($__internal_ab7d4416f0fe123ff82bc95a7b7fcc797ba407120bf8c2d8eb7cb8776b2bc72b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Group:list_content.html.twig"));

        $__internal_7d652f77284db08404a47bc27c532687bcfa834a47b48aec54d25f6508ddded7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d652f77284db08404a47bc27c532687bcfa834a47b48aec54d25f6508ddded7->enter($__internal_7d652f77284db08404a47bc27c532687bcfa834a47b48aec54d25f6508ddded7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Group:list_content.html.twig"));

        // line 1
        echo "<div class=\"fos_user_group_list\">
    <ul>
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) ? $context["groups"] : $this->getContext($context, "groups")));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 4
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_group_show", array("groupname" => $this->getAttribute($context["group"], "getName", array(), "method"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "getName", array(), "method"), "html", null, true);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "    </ul>
</div>
";
        
        $__internal_ab7d4416f0fe123ff82bc95a7b7fcc797ba407120bf8c2d8eb7cb8776b2bc72b->leave($__internal_ab7d4416f0fe123ff82bc95a7b7fcc797ba407120bf8c2d8eb7cb8776b2bc72b_prof);

        
        $__internal_7d652f77284db08404a47bc27c532687bcfa834a47b48aec54d25f6508ddded7->leave($__internal_7d652f77284db08404a47bc27c532687bcfa834a47b48aec54d25f6508ddded7_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Group:list_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 6,  33 => 4,  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"fos_user_group_list\">
    <ul>
    {% for group in groups %}
        <li><a href=\"{{ path('fos_user_group_show', {'groupname': group.getName()} ) }}\">{{ group.getName() }}</a></li>
    {% endfor %}
    </ul>
</div>
", "AppBundle:Group:list_content.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\src\\AppBundle\\Resources\\views\\Group\\list_content.html.twig");
    }
}
