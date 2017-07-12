<?php

/* SonataAdminBundle:CRUD:edit_file.html.twig */
class __TwigTemplate_40f0d868aedd27f5093f54f0088403cbf8f5d7daae5b00a8896be3182fb050ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_file.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f2ae4206721756d82046297aae665389cf11dacfb99680a865f48fd474e36c7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2ae4206721756d82046297aae665389cf11dacfb99680a865f48fd474e36c7a->enter($__internal_f2ae4206721756d82046297aae665389cf11dacfb99680a865f48fd474e36c7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_file.html.twig"));

        $__internal_2e316329974faf25e55fc6eb0355ed9f579a58770dfff000298b7e7d31746518 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e316329974faf25e55fc6eb0355ed9f579a58770dfff000298b7e7d31746518->enter($__internal_2e316329974faf25e55fc6eb0355ed9f579a58770dfff000298b7e7d31746518_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_file.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f2ae4206721756d82046297aae665389cf11dacfb99680a865f48fd474e36c7a->leave($__internal_f2ae4206721756d82046297aae665389cf11dacfb99680a865f48fd474e36c7a_prof);

        
        $__internal_2e316329974faf25e55fc6eb0355ed9f579a58770dfff000298b7e7d31746518->leave($__internal_2e316329974faf25e55fc6eb0355ed9f579a58770dfff000298b7e7d31746518_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_08d5042b22c7e99a3265fb9ab16d38c218403c57d78a3a0b4a3d5d1d5c3518dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08d5042b22c7e99a3265fb9ab16d38c218403c57d78a3a0b4a3d5d1d5c3518dd->enter($__internal_08d5042b22c7e99a3265fb9ab16d38c218403c57d78a3a0b4a3d5d1d5c3518dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_65a02255057b737d9ba15493faea988ab10bd18bd7cbef4abfd5f89079e7a9b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65a02255057b737d9ba15493faea988ab10bd18bd7cbef4abfd5f89079e7a9b8->enter($__internal_65a02255057b737d9ba15493faea988ab10bd18bd7cbef4abfd5f89079e7a9b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_65a02255057b737d9ba15493faea988ab10bd18bd7cbef4abfd5f89079e7a9b8->leave($__internal_65a02255057b737d9ba15493faea988ab10bd18bd7cbef4abfd5f89079e7a9b8_prof);

        
        $__internal_08d5042b22c7e99a3265fb9ab16d38c218403c57d78a3a0b4a3d5d1d5c3518dd->leave($__internal_08d5042b22c7e99a3265fb9ab16d38c218403c57d78a3a0b4a3d5d1d5c3518dd_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_file.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 14,  18 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends base_template %}

{% block field %}{{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}{% endblock %}
", "SonataAdminBundle:CRUD:edit_file.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\edit_file.html.twig");
    }
}
