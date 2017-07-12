<?php

/* SonataDoctrineORMAdminBundle:CRUD:edit_modal.html.twig */
class __TwigTemplate_6a21f948ddd19dda47c30f8f3927fa80d9743311d81ba67120f685641661939e extends Twig_Template
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
        $__internal_85dc929feffb4e0ab757d519fc44e797c8edd81877d363879c877f6ed22de633 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85dc929feffb4e0ab757d519fc44e797c8edd81877d363879c877f6ed22de633->enter($__internal_85dc929feffb4e0ab757d519fc44e797c8edd81877d363879c877f6ed22de633_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataDoctrineORMAdminBundle:CRUD:edit_modal.html.twig"));

        $__internal_836c2a909d56ed7d39b4fb6fee6a553086e732905169836b5c56b35b580f83e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_836c2a909d56ed7d39b4fb6fee6a553086e732905169836b5c56b35b580f83e9->enter($__internal_836c2a909d56ed7d39b4fb6fee6a553086e732905169836b5c56b35b580f83e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataDoctrineORMAdminBundle:CRUD:edit_modal.html.twig"));

        // line 11
        echo "
<div class=\"modal fade\" id=\"field_dialog_";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-lg\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h4 class=\"modal-title\"></h4>
            </div>
            <div class=\"modal-body\">
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_85dc929feffb4e0ab757d519fc44e797c8edd81877d363879c877f6ed22de633->leave($__internal_85dc929feffb4e0ab757d519fc44e797c8edd81877d363879c877f6ed22de633_prof);

        
        $__internal_836c2a909d56ed7d39b4fb6fee6a553086e732905169836b5c56b35b580f83e9->leave($__internal_836c2a909d56ed7d39b4fb6fee6a553086e732905169836b5c56b35b580f83e9_prof);

    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:edit_modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 12,  25 => 11,);
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

<div class=\"modal fade\" id=\"field_dialog_{{ id }}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-lg\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h4 class=\"modal-title\"></h4>
            </div>
            <div class=\"modal-body\">
            </div>
        </div>
    </div>
</div>
", "SonataDoctrineORMAdminBundle:CRUD:edit_modal.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\sonata-project\\doctrine-orm-admin-bundle\\Resources\\views\\CRUD\\edit_modal.html.twig");
    }
}
