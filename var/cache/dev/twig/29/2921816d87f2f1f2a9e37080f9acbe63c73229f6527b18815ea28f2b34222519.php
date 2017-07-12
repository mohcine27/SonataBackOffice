<?php

/* SonataAdminBundle:Core:create_button.html.twig */
class __TwigTemplate_0152e713b2bb5f03a09ff8960635fe5f36e9122df32824206f686cba8d7bba44 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 15
        $this->parent = $this->loadTemplate("SonataAdminBundle:Button:create_button.html.twig", "SonataAdminBundle:Core:create_button.html.twig", 15);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Button:create_button.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d807e54c49fd552033813477b5ab2bd5ed4df0a5ffa357d6b3aee19a94c84606 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d807e54c49fd552033813477b5ab2bd5ed4df0a5ffa357d6b3aee19a94c84606->enter($__internal_d807e54c49fd552033813477b5ab2bd5ed4df0a5ffa357d6b3aee19a94c84606_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:create_button.html.twig"));

        $__internal_27ce61c9a25861ad270013cce6a0b58a4ee19cd2b97f3b09e4c3923b2bde63d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27ce61c9a25861ad270013cce6a0b58a4ee19cd2b97f3b09e4c3923b2bde63d3->enter($__internal_27ce61c9a25861ad270013cce6a0b58a4ee19cd2b97f3b09e4c3923b2bde63d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:create_button.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d807e54c49fd552033813477b5ab2bd5ed4df0a5ffa357d6b3aee19a94c84606->leave($__internal_d807e54c49fd552033813477b5ab2bd5ed4df0a5ffa357d6b3aee19a94c84606_prof);

        
        $__internal_27ce61c9a25861ad270013cce6a0b58a4ee19cd2b97f3b09e4c3923b2bde63d3->leave($__internal_27ce61c9a25861ad270013cce6a0b58a4ee19cd2b97f3b09e4c3923b2bde63d3_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:create_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 15,);
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

{# DEPRECATED #}
{# This file is kept here for backward compatibility - Rather use SonataAdminBundle:Button:create_button.html.twig #}

{% extends 'SonataAdminBundle:Button:create_button.html.twig' %}
", "SonataAdminBundle:Core:create_button.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\Core\\create_button.html.twig");
    }
}
