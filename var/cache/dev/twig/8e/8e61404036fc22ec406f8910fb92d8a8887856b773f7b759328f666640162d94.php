<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_fb43cfe35bdba2778566ea4dafd3b2e812ed7d9a21d59674350cb5fbea8123d2 extends Twig_Template
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
        $__internal_4c97bffdffd0d094000c85ee265b7d39bb4cb903c099653b55da4ef602d2d362 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c97bffdffd0d094000c85ee265b7d39bb4cb903c099653b55da4ef602d2d362->enter($__internal_4c97bffdffd0d094000c85ee265b7d39bb4cb903c099653b55da4ef602d2d362_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_d43fa197ff24e1c238e0b87d523859923d5bedbbe01174b93be3f71b145fee2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d43fa197ff24e1c238e0b87d523859923d5bedbbe01174b93be3f71b145fee2b->enter($__internal_d43fa197ff24e1c238e0b87d523859923d5bedbbe01174b93be3f71b145fee2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_4c97bffdffd0d094000c85ee265b7d39bb4cb903c099653b55da4ef602d2d362->leave($__internal_4c97bffdffd0d094000c85ee265b7d39bb4cb903c099653b55da4ef602d2d362_prof);

        
        $__internal_d43fa197ff24e1c238e0b87d523859923d5bedbbe01174b93be3f71b145fee2b->leave($__internal_d43fa197ff24e1c238e0b87d523859923d5bedbbe01174b93be3f71b145fee2b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form.html.php");
    }
}
