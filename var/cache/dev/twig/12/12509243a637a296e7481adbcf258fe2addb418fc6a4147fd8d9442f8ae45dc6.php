<?php

/* knp_menu_base.html.twig */
class __TwigTemplate_a4098912bb47c401f3a38fe8f9a0ceda82f744a8a27e7ef72d6947695101b708 extends Twig_Template
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
        $__internal_353d7b8fbbc8998bf7efaac3c5d91a7b84e2ab3d4f4b03aa1a0b262104165c7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_353d7b8fbbc8998bf7efaac3c5d91a7b84e2ab3d4f4b03aa1a0b262104165c7c->enter($__internal_353d7b8fbbc8998bf7efaac3c5d91a7b84e2ab3d4f4b03aa1a0b262104165c7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        $__internal_60e3d97336d6e1de5d3521cc0ea4bedb18cf25ce8a8df027100b2904d8df409b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60e3d97336d6e1de5d3521cc0ea4bedb18cf25ce8a8df027100b2904d8df409b->enter($__internal_60e3d97336d6e1de5d3521cc0ea4bedb18cf25ce8a8df027100b2904d8df409b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        // line 1
        if ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "compressed", array())) {
            $this->displayBlock("compressed_root", $context, $blocks);
        } else {
            $this->displayBlock("root", $context, $blocks);
        }
        
        $__internal_353d7b8fbbc8998bf7efaac3c5d91a7b84e2ab3d4f4b03aa1a0b262104165c7c->leave($__internal_353d7b8fbbc8998bf7efaac3c5d91a7b84e2ab3d4f4b03aa1a0b262104165c7c_prof);

        
        $__internal_60e3d97336d6e1de5d3521cc0ea4bedb18cf25ce8a8df027100b2904d8df409b->leave($__internal_60e3d97336d6e1de5d3521cc0ea4bedb18cf25ce8a8df027100b2904d8df409b_prof);

    }

    public function getTemplateName()
    {
        return "knp_menu_base.html.twig";
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
        return new Twig_Source("{% if options.compressed %}{{ block('compressed_root') }}{% else %}{{ block('root') }}{% endif %}
", "knp_menu_base.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\knplabs\\knp-menu\\src\\Knp\\Menu\\Resources\\views\\knp_menu_base.html.twig");
    }
}
