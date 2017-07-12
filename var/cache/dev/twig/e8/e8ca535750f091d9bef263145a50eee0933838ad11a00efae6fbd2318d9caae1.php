<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_a19dd3dc431d186c890696919a8bea943f00f2899cb6244660b2c2cae76229d1 extends Twig_Template
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
        $__internal_394319e397348653736e47636554ee5a44d37167a9647467bab9b9f279e24790 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_394319e397348653736e47636554ee5a44d37167a9647467bab9b9f279e24790->enter($__internal_394319e397348653736e47636554ee5a44d37167a9647467bab9b9f279e24790_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_b74e610c564ad828e23803a4b9508316559f3419c77fe715bb3bf8f8369e2c39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b74e610c564ad828e23803a4b9508316559f3419c77fe715bb3bf8f8369e2c39->enter($__internal_b74e610c564ad828e23803a4b9508316559f3419c77fe715bb3bf8f8369e2c39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_394319e397348653736e47636554ee5a44d37167a9647467bab9b9f279e24790->leave($__internal_394319e397348653736e47636554ee5a44d37167a9647467bab9b9f279e24790_prof);

        
        $__internal_b74e610c564ad828e23803a4b9508316559f3419c77fe715bb3bf8f8369e2c39->leave($__internal_b74e610c564ad828e23803a4b9508316559f3419c77fe715bb3bf8f8369e2c39_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\radio_widget.html.php");
    }
}
