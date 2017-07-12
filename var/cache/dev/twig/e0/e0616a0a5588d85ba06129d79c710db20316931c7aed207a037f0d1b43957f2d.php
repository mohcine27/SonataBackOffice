<?php

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_6f0514e0b3d3a9915fe20cdca335308397fb785fec256a93ad9bd6901100ee86 extends Twig_Template
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
        $__internal_8e1814b88da74d7c6b79a472618b0e72eea156abf97c072598dec451d390b743 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e1814b88da74d7c6b79a472618b0e72eea156abf97c072598dec451d390b743->enter($__internal_8e1814b88da74d7c6b79a472618b0e72eea156abf97c072598dec451d390b743_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        $__internal_2bbfed57bb8059c19b9d6884579aafec1612b84b6f12aa526be4fb04098f63f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bbfed57bb8059c19b9d6884579aafec1612b84b6f12aa526be4fb04098f63f7->enter($__internal_2bbfed57bb8059c19b9d6884579aafec1612b84b6f12aa526be4fb04098f63f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_8e1814b88da74d7c6b79a472618b0e72eea156abf97c072598dec451d390b743->leave($__internal_8e1814b88da74d7c6b79a472618b0e72eea156abf97c072598dec451d390b743_prof);

        
        $__internal_2bbfed57bb8059c19b9d6884579aafec1612b84b6f12aa526be4fb04098f63f7->leave($__internal_2bbfed57bb8059c19b9d6884579aafec1612b84b6f12aa526be4fb04098f63f7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/range_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
", "@Framework/Form/range_widget.html.php", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\range_widget.html.php");
    }
}
