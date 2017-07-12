<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_266127f1a65f3567788015f1d5c7ab82a194789539636870c16a4e832dd23691 extends Twig_Template
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
        $__internal_0d674ccdb606bb74f01bc7d5a4e961552e6d6a0e62e76d6073ccbcc189c17f5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d674ccdb606bb74f01bc7d5a4e961552e6d6a0e62e76d6073ccbcc189c17f5f->enter($__internal_0d674ccdb606bb74f01bc7d5a4e961552e6d6a0e62e76d6073ccbcc189c17f5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_98bd34044a463696436afbface689dd70786152f89cfe1276e96f8a8de71168a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98bd34044a463696436afbface689dd70786152f89cfe1276e96f8a8de71168a->enter($__internal_98bd34044a463696436afbface689dd70786152f89cfe1276e96f8a8de71168a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_0d674ccdb606bb74f01bc7d5a4e961552e6d6a0e62e76d6073ccbcc189c17f5f->leave($__internal_0d674ccdb606bb74f01bc7d5a4e961552e6d6a0e62e76d6073ccbcc189c17f5f_prof);

        
        $__internal_98bd34044a463696436afbface689dd70786152f89cfe1276e96f8a8de71168a->leave($__internal_98bd34044a463696436afbface689dd70786152f89cfe1276e96f8a8de71168a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_compound.html.php");
    }
}
