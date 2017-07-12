<?php

/* SonataBlockBundle:Block:block_core_menu.html.twig */
class __TwigTemplate_ec19f011b13f0249671ee149aab07e933bfecf064fd1519f1741a4d0e2694bf9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_menu.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d27d72e7153c2d797575ed74f1fc205e5d2ad6c762f7ae1263a9c64d11647621 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d27d72e7153c2d797575ed74f1fc205e5d2ad6c762f7ae1263a9c64d11647621->enter($__internal_d27d72e7153c2d797575ed74f1fc205e5d2ad6c762f7ae1263a9c64d11647621_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_menu.html.twig"));

        $__internal_5b5317804fbd0e6fa3e38b3186d904cc1a855234a7a44c14858caadd297b4d96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b5317804fbd0e6fa3e38b3186d904cc1a855234a7a44c14858caadd297b4d96->enter($__internal_5b5317804fbd0e6fa3e38b3186d904cc1a855234a7a44c14858caadd297b4d96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_menu.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d27d72e7153c2d797575ed74f1fc205e5d2ad6c762f7ae1263a9c64d11647621->leave($__internal_d27d72e7153c2d797575ed74f1fc205e5d2ad6c762f7ae1263a9c64d11647621_prof);

        
        $__internal_5b5317804fbd0e6fa3e38b3186d904cc1a855234a7a44c14858caadd297b4d96->leave($__internal_5b5317804fbd0e6fa3e38b3186d904cc1a855234a7a44c14858caadd297b4d96_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_493d4b3863800dd5da29cb2f1caefafaf6d4b554ce9169eef32a0886021d265a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_493d4b3863800dd5da29cb2f1caefafaf6d4b554ce9169eef32a0886021d265a->enter($__internal_493d4b3863800dd5da29cb2f1caefafaf6d4b554ce9169eef32a0886021d265a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_4772c7a83b685649d62f34b7ba058ec2f3c134079a21c7a3ce521a5507f95407 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4772c7a83b685649d62f34b7ba058ec2f3c134079a21c7a3ce521a5507f95407->enter($__internal_4772c7a83b685649d62f34b7ba058ec2f3c134079a21c7a3ce521a5507f95407_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), (isset($context["menu_options"]) ? $context["menu_options"] : $this->getContext($context, "menu_options")));
        echo "
";
        
        $__internal_4772c7a83b685649d62f34b7ba058ec2f3c134079a21c7a3ce521a5507f95407->leave($__internal_4772c7a83b685649d62f34b7ba058ec2f3c134079a21c7a3ce521a5507f95407_prof);

        
        $__internal_493d4b3863800dd5da29cb2f1caefafaf6d4b554ce9169eef32a0886021d265a->leave($__internal_493d4b3863800dd5da29cb2f1caefafaf6d4b554ce9169eef32a0886021d265a_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 15,  39 => 14,  18 => 12,);
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

{% extends sonata_block.templates.block_base %}

{% block block %}
    {{ knp_menu_render(menu, menu_options) }}
{% endblock %}
", "SonataBlockBundle:Block:block_core_menu.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\sonata-project\\block-bundle\\Resources\\views\\Block\\block_core_menu.html.twig");
    }
}
