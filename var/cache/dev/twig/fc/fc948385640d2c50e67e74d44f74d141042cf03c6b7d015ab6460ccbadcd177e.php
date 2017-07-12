<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_78a4969c362cc6a67d2236c36545cc9e5c747764d8c63d7697ccf65774becbdb extends Twig_Template
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
        $__internal_7b778fde6aec59f87077dbf1642da825a52bd97b2d8b317ca7c1dda26075c3dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b778fde6aec59f87077dbf1642da825a52bd97b2d8b317ca7c1dda26075c3dc->enter($__internal_7b778fde6aec59f87077dbf1642da825a52bd97b2d8b317ca7c1dda26075c3dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_185d2f5992b3cef2f7bd52313a44ea5a9cf81476531466b5f955d2ffc3da2b5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_185d2f5992b3cef2f7bd52313a44ea5a9cf81476531466b5f955d2ffc3da2b5d->enter($__internal_185d2f5992b3cef2f7bd52313a44ea5a9cf81476531466b5f955d2ffc3da2b5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_7b778fde6aec59f87077dbf1642da825a52bd97b2d8b317ca7c1dda26075c3dc->leave($__internal_7b778fde6aec59f87077dbf1642da825a52bd97b2d8b317ca7c1dda26075c3dc_prof);

        
        $__internal_185d2f5992b3cef2f7bd52313a44ea5a9cf81476531466b5f955d2ffc3da2b5d->leave($__internal_185d2f5992b3cef2f7bd52313a44ea5a9cf81476531466b5f955d2ffc3da2b5d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget.html.php");
    }
}
