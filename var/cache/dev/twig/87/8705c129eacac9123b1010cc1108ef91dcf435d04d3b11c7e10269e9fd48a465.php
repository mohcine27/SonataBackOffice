<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_ea7e2b0a1de5584f5eaae165254ec2cc258b1bd6670166611fc1aab99cb09b8b extends Twig_Template
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
        $__internal_b11195908e28dbe741fa06d8478fb20b3bd286f71b7ed028c9e54053efa924e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b11195908e28dbe741fa06d8478fb20b3bd286f71b7ed028c9e54053efa924e2->enter($__internal_b11195908e28dbe741fa06d8478fb20b3bd286f71b7ed028c9e54053efa924e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_e7fd3d987808b480c1ece4dbc06a989e7e8e5559748092fb46d0e2b08ae36ca6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7fd3d987808b480c1ece4dbc06a989e7e8e5559748092fb46d0e2b08ae36ca6->enter($__internal_e7fd3d987808b480c1ece4dbc06a989e7e8e5559748092fb46d0e2b08ae36ca6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_b11195908e28dbe741fa06d8478fb20b3bd286f71b7ed028c9e54053efa924e2->leave($__internal_b11195908e28dbe741fa06d8478fb20b3bd286f71b7ed028c9e54053efa924e2_prof);

        
        $__internal_e7fd3d987808b480c1ece4dbc06a989e7e8e5559748092fb46d0e2b08ae36ca6->leave($__internal_e7fd3d987808b480c1ece4dbc06a989e7e8e5559748092fb46d0e2b08ae36ca6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\datetime_widget.html.php");
    }
}
