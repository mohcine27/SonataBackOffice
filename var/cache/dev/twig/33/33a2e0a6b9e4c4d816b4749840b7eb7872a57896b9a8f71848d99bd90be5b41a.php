<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_46edd64876c4515f050201a334cba752affd830523a437c3998e4d752c688140 extends Twig_Template
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
        $__internal_daeaf872e0db092679c076033c75d5f9d32f7c8fbff072b8cf96861eeafa0c53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_daeaf872e0db092679c076033c75d5f9d32f7c8fbff072b8cf96861eeafa0c53->enter($__internal_daeaf872e0db092679c076033c75d5f9d32f7c8fbff072b8cf96861eeafa0c53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_dd4c0636b2e9b5294f291898f3e1cbe2fe1507ec8d97426bb878f9305f188ee9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd4c0636b2e9b5294f291898f3e1cbe2fe1507ec8d97426bb878f9305f188ee9->enter($__internal_dd4c0636b2e9b5294f291898f3e1cbe2fe1507ec8d97426bb878f9305f188ee9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_daeaf872e0db092679c076033c75d5f9d32f7c8fbff072b8cf96861eeafa0c53->leave($__internal_daeaf872e0db092679c076033c75d5f9d32f7c8fbff072b8cf96861eeafa0c53_prof);

        
        $__internal_dd4c0636b2e9b5294f291898f3e1cbe2fe1507ec8d97426bb878f9305f188ee9->leave($__internal_dd4c0636b2e9b5294f291898f3e1cbe2fe1507ec8d97426bb878f9305f188ee9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
