<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_e59295a1164c5ee24d7948de77e5a87d4440edcb5c2b04e097bcaac0d329511d extends Twig_Template
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
        $__internal_44da5f1630797d2941da7f1289c9ea88379d4a704405e1c7045aff4d40f9b706 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44da5f1630797d2941da7f1289c9ea88379d4a704405e1c7045aff4d40f9b706->enter($__internal_44da5f1630797d2941da7f1289c9ea88379d4a704405e1c7045aff4d40f9b706_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_420b1d0021839db9242ec12f804396f561fd35579f519a8f83f53d85db42d6f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_420b1d0021839db9242ec12f804396f561fd35579f519a8f83f53d85db42d6f7->enter($__internal_420b1d0021839db9242ec12f804396f561fd35579f519a8f83f53d85db42d6f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_44da5f1630797d2941da7f1289c9ea88379d4a704405e1c7045aff4d40f9b706->leave($__internal_44da5f1630797d2941da7f1289c9ea88379d4a704405e1c7045aff4d40f9b706_prof);

        
        $__internal_420b1d0021839db9242ec12f804396f561fd35579f519a8f83f53d85db42d6f7->leave($__internal_420b1d0021839db9242ec12f804396f561fd35579f519a8f83f53d85db42d6f7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_widget_compound.html.php");
    }
}
