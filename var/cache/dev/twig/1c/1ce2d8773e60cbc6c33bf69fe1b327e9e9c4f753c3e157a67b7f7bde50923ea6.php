<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_6c76ecf1841ddbc145cd285d1ea2276c51abbf176f870c5fa72070c0c05e3225 extends Twig_Template
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
        $__internal_3c23a1aa42b47c183a73839c115fcfed822dbc006bdc3763b9ce5ef025ef2f6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c23a1aa42b47c183a73839c115fcfed822dbc006bdc3763b9ce5ef025ef2f6b->enter($__internal_3c23a1aa42b47c183a73839c115fcfed822dbc006bdc3763b9ce5ef025ef2f6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_8968f79bf4639ca09bfed9ee9ba45e120e4cf1a16b6470840d86a1870b7db88e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8968f79bf4639ca09bfed9ee9ba45e120e4cf1a16b6470840d86a1870b7db88e->enter($__internal_8968f79bf4639ca09bfed9ee9ba45e120e4cf1a16b6470840d86a1870b7db88e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_3c23a1aa42b47c183a73839c115fcfed822dbc006bdc3763b9ce5ef025ef2f6b->leave($__internal_3c23a1aa42b47c183a73839c115fcfed822dbc006bdc3763b9ce5ef025ef2f6b_prof);

        
        $__internal_8968f79bf4639ca09bfed9ee9ba45e120e4cf1a16b6470840d86a1870b7db88e->leave($__internal_8968f79bf4639ca09bfed9ee9ba45e120e4cf1a16b6470840d86a1870b7db88e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}
