<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_bc00a9a0fae7281fdcb828fffd5def8db2064180b5d9259898741852cda5be6b extends Twig_Template
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
        $__internal_88cb802dff8906f09ec21605eeeba8bec42ff3dfd2214d8d28fb69a27b4f93cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88cb802dff8906f09ec21605eeeba8bec42ff3dfd2214d8d28fb69a27b4f93cd->enter($__internal_88cb802dff8906f09ec21605eeeba8bec42ff3dfd2214d8d28fb69a27b4f93cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_2b91c4a7dc7e4408de04942b1972dae6dafb52ff67c13d72b8f3e746339c4b16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b91c4a7dc7e4408de04942b1972dae6dafb52ff67c13d72b8f3e746339c4b16->enter($__internal_2b91c4a7dc7e4408de04942b1972dae6dafb52ff67c13d72b8f3e746339c4b16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_88cb802dff8906f09ec21605eeeba8bec42ff3dfd2214d8d28fb69a27b4f93cd->leave($__internal_88cb802dff8906f09ec21605eeeba8bec42ff3dfd2214d8d28fb69a27b4f93cd_prof);

        
        $__internal_2b91c4a7dc7e4408de04942b1972dae6dafb52ff67c13d72b8f3e746339c4b16->leave($__internal_2b91c4a7dc7e4408de04942b1972dae6dafb52ff67c13d72b8f3e746339c4b16_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
