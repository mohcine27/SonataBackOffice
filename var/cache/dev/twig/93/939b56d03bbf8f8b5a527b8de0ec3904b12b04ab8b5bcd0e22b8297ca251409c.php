<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_d681e7f147ae3c7ea77a7bee283c65b76cf33188f7fd19f79c13477dabca67da extends Twig_Template
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
        $__internal_ec944f73efddeadfc4512c945ee966ffdf3a87efed6a7d18cf418eb08c939301 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec944f73efddeadfc4512c945ee966ffdf3a87efed6a7d18cf418eb08c939301->enter($__internal_ec944f73efddeadfc4512c945ee966ffdf3a87efed6a7d18cf418eb08c939301_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_169079088b888358324fec4ced5e751ce91f3efc375ba64184e897ab5207d789 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_169079088b888358324fec4ced5e751ce91f3efc375ba64184e897ab5207d789->enter($__internal_169079088b888358324fec4ced5e751ce91f3efc375ba64184e897ab5207d789_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_ec944f73efddeadfc4512c945ee966ffdf3a87efed6a7d18cf418eb08c939301->leave($__internal_ec944f73efddeadfc4512c945ee966ffdf3a87efed6a7d18cf418eb08c939301_prof);

        
        $__internal_169079088b888358324fec4ced5e751ce91f3efc375ba64184e897ab5207d789->leave($__internal_169079088b888358324fec4ced5e751ce91f3efc375ba64184e897ab5207d789_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\number_widget.html.php");
    }
}
