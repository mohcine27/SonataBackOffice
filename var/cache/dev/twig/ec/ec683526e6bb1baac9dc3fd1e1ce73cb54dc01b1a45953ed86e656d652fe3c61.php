<?php

/* SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_many_sortable_script_tabs.html.twig */
class __TwigTemplate_41cd75c79da6e9ebcd3a8076b9f7650878edae72b34fb87c0d0849e6c1996a00 extends Twig_Template
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
        $__internal_a97afae5b21bfd17cd2df3b55cb84838269a6563ef36d597130735f29b25499b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a97afae5b21bfd17cd2df3b55cb84838269a6563ef36d597130735f29b25499b->enter($__internal_a97afae5b21bfd17cd2df3b55cb84838269a6563ef36d597130735f29b25499b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_many_sortable_script_tabs.html.twig"));

        $__internal_989b5cf7a74d402ea53b92e09ce361391a3bb24210d048b0dc888006971e85e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_989b5cf7a74d402ea53b92e09ce361391a3bb24210d048b0dc888006971e85e0->enter($__internal_989b5cf7a74d402ea53b92e09ce361391a3bb24210d048b0dc888006971e85e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_many_sortable_script_tabs.html.twig"));

        // line 11
        echo "<script type=\"text/javascript\">
    jQuery('div#field_container_";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo " .sonata-ba-tabs').sortable({
        axis: 'y',
        opacity: 0.6,
        items: '> div',
        stop: apply_position_value_";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "
    });

    function apply_position_value_";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "() {
        // update the input value position
        jQuery('div#field_container_";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo " .sonata-ba-tabs .sonata-ba-field-";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "options", array()), "sortable", array()), "html", null, true);
        echo "').each(function(index, element) {
            // remove the sortable handler and put it back
            var parent = jQuery(element).closest('.nav-tabs-custom');
            var tabs = parent.find('> .nav-tabs');
            jQuery('.sonata-ba-sortable-handler', tabs).remove();
            \$('<li class=\"sonata-ba-sortable-handler pull-right\"></li>')
                    .prepend('<span class=\"ui-icon ui-icon-grip-solid-horizontal\"></span>')
                    .appendTo(tabs);
            jQuery('input', element).hide();
        });

        jQuery('div#field_container_";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo " .sonata-ba-tabs .sonata-ba-field-";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "options", array()), "sortable", array()), "html", null, true);
        echo " input').each(function(index, value) {
            jQuery(value).val(index + 1);
        });
    }

    // refresh the sortable option when a new element is added
    jQuery('#sonata-ba-field-container-";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "').bind('sonata.add_element', function() {
        apply_position_value_";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "();
        jQuery('div#field_container_";
        // line 40
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo " .sonata-ba-tabs').sortable('refresh');
    });

    apply_position_value_";
        // line 43
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "();
</script>
";
        
        $__internal_a97afae5b21bfd17cd2df3b55cb84838269a6563ef36d597130735f29b25499b->leave($__internal_a97afae5b21bfd17cd2df3b55cb84838269a6563ef36d597130735f29b25499b_prof);

        
        $__internal_989b5cf7a74d402ea53b92e09ce361391a3bb24210d048b0dc888006971e85e0->leave($__internal_989b5cf7a74d402ea53b92e09ce361391a3bb24210d048b0dc888006971e85e0_prof);

    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_many_sortable_script_tabs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 43,  85 => 40,  81 => 39,  77 => 38,  64 => 32,  46 => 21,  41 => 19,  35 => 16,  28 => 12,  25 => 11,);
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
<script type=\"text/javascript\">
    jQuery('div#field_container_{{ id }} .sonata-ba-tabs').sortable({
        axis: 'y',
        opacity: 0.6,
        items: '> div',
        stop: apply_position_value_{{ id }}
    });

    function apply_position_value_{{ id }}() {
        // update the input value position
        jQuery('div#field_container_{{ id }} .sonata-ba-tabs .sonata-ba-field-{{ id }}-{{ sonata_admin.field_description.options.sortable }}').each(function(index, element) {
            // remove the sortable handler and put it back
            var parent = jQuery(element).closest('.nav-tabs-custom');
            var tabs = parent.find('> .nav-tabs');
            jQuery('.sonata-ba-sortable-handler', tabs).remove();
            \$('<li class=\"sonata-ba-sortable-handler pull-right\"></li>')
                    .prepend('<span class=\"ui-icon ui-icon-grip-solid-horizontal\"></span>')
                    .appendTo(tabs);
            jQuery('input', element).hide();
        });

        jQuery('div#field_container_{{ id }} .sonata-ba-tabs .sonata-ba-field-{{ id }}-{{ sonata_admin.field_description.options.sortable }} input').each(function(index, value) {
            jQuery(value).val(index + 1);
        });
    }

    // refresh the sortable option when a new element is added
    jQuery('#sonata-ba-field-container-{{ id }}').bind('sonata.add_element', function() {
        apply_position_value_{{ id }}();
        jQuery('div#field_container_{{ id }} .sonata-ba-tabs').sortable('refresh');
    });

    apply_position_value_{{ id }}();
</script>
", "SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_many_sortable_script_tabs.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\sonata-project\\doctrine-orm-admin-bundle\\Resources\\views\\CRUD\\edit_orm_one_to_many_sortable_script_tabs.html.twig");
    }
}
