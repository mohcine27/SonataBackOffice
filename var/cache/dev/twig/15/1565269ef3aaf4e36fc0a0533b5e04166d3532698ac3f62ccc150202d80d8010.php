<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_9d72cf872d5491f9655ecf105b5b8209ab08c075374ddd63822de2f5fd83f6f7 extends Twig_Template
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
        $__internal_0d27916be9fa02627ad363aaf9764cfbc3d4ef1c334f2b4ff23e6c9710e72051 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d27916be9fa02627ad363aaf9764cfbc3d4ef1c334f2b4ff23e6c9710e72051->enter($__internal_0d27916be9fa02627ad363aaf9764cfbc3d4ef1c334f2b4ff23e6c9710e72051_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_7b0cd3360e9044f34e7072d826135d76d1b6a28ec1f511fec0a1a31ad8774243 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b0cd3360e9044f34e7072d826135d76d1b6a28ec1f511fec0a1a31ad8774243->enter($__internal_7b0cd3360e9044f34e7072d826135d76d1b6a28ec1f511fec0a1a31ad8774243_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_0d27916be9fa02627ad363aaf9764cfbc3d4ef1c334f2b4ff23e6c9710e72051->leave($__internal_0d27916be9fa02627ad363aaf9764cfbc3d4ef1c334f2b4ff23e6c9710e72051_prof);

        
        $__internal_7b0cd3360e9044f34e7072d826135d76d1b6a28ec1f511fec0a1a31ad8774243->leave($__internal_7b0cd3360e9044f34e7072d826135d76d1b6a28ec1f511fec0a1a31ad8774243_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\widget_container_attributes.html.php");
    }
}
