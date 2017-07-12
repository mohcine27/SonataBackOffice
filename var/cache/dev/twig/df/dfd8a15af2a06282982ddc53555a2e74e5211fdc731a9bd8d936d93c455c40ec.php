<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_91724a27171617fd863142d192de641ecea6065aaed55498ce9fd13594453874 extends Twig_Template
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
        $__internal_83f2164377bb96131e8ecde6339ba5322076804f9e1f6644d323cfab6cd856ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83f2164377bb96131e8ecde6339ba5322076804f9e1f6644d323cfab6cd856ed->enter($__internal_83f2164377bb96131e8ecde6339ba5322076804f9e1f6644d323cfab6cd856ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_d4d5ac37a050155e261b77f4607dfe1eb7d1b817035796456cbab5f5c01be6db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4d5ac37a050155e261b77f4607dfe1eb7d1b817035796456cbab5f5c01be6db->enter($__internal_d4d5ac37a050155e261b77f4607dfe1eb7d1b817035796456cbab5f5c01be6db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_83f2164377bb96131e8ecde6339ba5322076804f9e1f6644d323cfab6cd856ed->leave($__internal_83f2164377bb96131e8ecde6339ba5322076804f9e1f6644d323cfab6cd856ed_prof);

        
        $__internal_d4d5ac37a050155e261b77f4607dfe1eb7d1b817035796456cbab5f5c01be6db->leave($__internal_d4d5ac37a050155e261b77f4607dfe1eb7d1b817035796456cbab5f5c01be6db_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\collection_widget.html.php");
    }
}
