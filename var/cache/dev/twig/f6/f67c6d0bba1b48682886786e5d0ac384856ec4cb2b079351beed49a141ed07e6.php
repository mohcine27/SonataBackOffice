<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_a6ee92bce28e4964ee3bc7ff09079e2f53dde1356d4f2dbc0d034e6e6a311125 extends Twig_Template
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
        $__internal_76ad1f065f4b14b3c17735b993e591b7dbebfc66b09748bd30b55e10a841ae21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76ad1f065f4b14b3c17735b993e591b7dbebfc66b09748bd30b55e10a841ae21->enter($__internal_76ad1f065f4b14b3c17735b993e591b7dbebfc66b09748bd30b55e10a841ae21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_d9f3213b85084016e346e5ad0604c1ffeb73b7123aa6d0991e0751869d1d8156 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9f3213b85084016e346e5ad0604c1ffeb73b7123aa6d0991e0751869d1d8156->enter($__internal_d9f3213b85084016e346e5ad0604c1ffeb73b7123aa6d0991e0751869d1d8156_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_76ad1f065f4b14b3c17735b993e591b7dbebfc66b09748bd30b55e10a841ae21->leave($__internal_76ad1f065f4b14b3c17735b993e591b7dbebfc66b09748bd30b55e10a841ae21_prof);

        
        $__internal_d9f3213b85084016e346e5ad0604c1ffeb73b7123aa6d0991e0751869d1d8156->leave($__internal_d9f3213b85084016e346e5ad0604c1ffeb73b7123aa6d0991e0751869d1d8156_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\widget_attributes.html.php");
    }
}
