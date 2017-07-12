<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_6c95edd5f5e43dc85f08f439b724f7f3ab617a9b3091a0a4262da7cb0d26f6ae extends Twig_Template
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
        $__internal_1674c28ad7db23dde8cb12da314f5c1e640af9a6348c1565b2c2b674b6bd0d05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1674c28ad7db23dde8cb12da314f5c1e640af9a6348c1565b2c2b674b6bd0d05->enter($__internal_1674c28ad7db23dde8cb12da314f5c1e640af9a6348c1565b2c2b674b6bd0d05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_0704926b00220c8a8111859f58e9c12d96cb6325b427a0ec05722dfffb0336e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0704926b00220c8a8111859f58e9c12d96cb6325b427a0ec05722dfffb0336e0->enter($__internal_0704926b00220c8a8111859f58e9c12d96cb6325b427a0ec05722dfffb0336e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_1674c28ad7db23dde8cb12da314f5c1e640af9a6348c1565b2c2b674b6bd0d05->leave($__internal_1674c28ad7db23dde8cb12da314f5c1e640af9a6348c1565b2c2b674b6bd0d05_prof);

        
        $__internal_0704926b00220c8a8111859f58e9c12d96cb6325b427a0ec05722dfffb0336e0->leave($__internal_0704926b00220c8a8111859f58e9c12d96cb6325b427a0ec05722dfffb0336e0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
