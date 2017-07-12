<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_3a72d3ad401fa657a255701c2c474005d1d5bece92f3e1dc8a7c7137fb19a3e4 extends Twig_Template
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
        $__internal_09dbb505366bd2e95854417127a50d4751d550dfb23ef13522284932bd85528a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09dbb505366bd2e95854417127a50d4751d550dfb23ef13522284932bd85528a->enter($__internal_09dbb505366bd2e95854417127a50d4751d550dfb23ef13522284932bd85528a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_c481a1a503900449ef6492d1cfbee4b4db8f1e7c52d31e10faaa6c6077a39b05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c481a1a503900449ef6492d1cfbee4b4db8f1e7c52d31e10faaa6c6077a39b05->enter($__internal_c481a1a503900449ef6492d1cfbee4b4db8f1e7c52d31e10faaa6c6077a39b05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_09dbb505366bd2e95854417127a50d4751d550dfb23ef13522284932bd85528a->leave($__internal_09dbb505366bd2e95854417127a50d4751d550dfb23ef13522284932bd85528a_prof);

        
        $__internal_c481a1a503900449ef6492d1cfbee4b4db8f1e7c52d31e10faaa6c6077a39b05->leave($__internal_c481a1a503900449ef6492d1cfbee4b4db8f1e7c52d31e10faaa6c6077a39b05_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
