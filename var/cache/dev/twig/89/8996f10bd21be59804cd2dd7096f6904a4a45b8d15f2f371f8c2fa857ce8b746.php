<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_911793fc9e62bb57836a8d2cd375f193d0e31e0293c5880a3bad9e57b1362e86 extends Twig_Template
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
        $__internal_2dbe971382dc93f12ee8bc8853f08f5fd6ecee704096e6377024c4e32a013887 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2dbe971382dc93f12ee8bc8853f08f5fd6ecee704096e6377024c4e32a013887->enter($__internal_2dbe971382dc93f12ee8bc8853f08f5fd6ecee704096e6377024c4e32a013887_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_66725e494ffb3d210de48ac5c71597e3f708af30bcfd07eaba055645492f1e7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66725e494ffb3d210de48ac5c71597e3f708af30bcfd07eaba055645492f1e7a->enter($__internal_66725e494ffb3d210de48ac5c71597e3f708af30bcfd07eaba055645492f1e7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_2dbe971382dc93f12ee8bc8853f08f5fd6ecee704096e6377024c4e32a013887->leave($__internal_2dbe971382dc93f12ee8bc8853f08f5fd6ecee704096e6377024c4e32a013887_prof);

        
        $__internal_66725e494ffb3d210de48ac5c71597e3f708af30bcfd07eaba055645492f1e7a->leave($__internal_66725e494ffb3d210de48ac5c71597e3f708af30bcfd07eaba055645492f1e7a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\percent_widget.html.php");
    }
}
