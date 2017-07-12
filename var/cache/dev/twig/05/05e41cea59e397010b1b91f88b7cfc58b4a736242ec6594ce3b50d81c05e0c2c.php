<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_b1bafa2ebaf2eff635d129062a37b2727eca11671b22c13d168eb38008bbb143 extends Twig_Template
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
        $__internal_b36e5cb031adf073994f282a3c725f637065826cba100a05005ba37fe54928c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b36e5cb031adf073994f282a3c725f637065826cba100a05005ba37fe54928c0->enter($__internal_b36e5cb031adf073994f282a3c725f637065826cba100a05005ba37fe54928c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_77cd6d0eacf8b8587a2a8c519e21be16cf09a0745e0495deff979253e21b8dae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77cd6d0eacf8b8587a2a8c519e21be16cf09a0745e0495deff979253e21b8dae->enter($__internal_77cd6d0eacf8b8587a2a8c519e21be16cf09a0745e0495deff979253e21b8dae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_b36e5cb031adf073994f282a3c725f637065826cba100a05005ba37fe54928c0->leave($__internal_b36e5cb031adf073994f282a3c725f637065826cba100a05005ba37fe54928c0_prof);

        
        $__internal_77cd6d0eacf8b8587a2a8c519e21be16cf09a0745e0495deff979253e21b8dae->leave($__internal_77cd6d0eacf8b8587a2a8c519e21be16cf09a0745e0495deff979253e21b8dae_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\checkbox_widget.html.php");
    }
}
