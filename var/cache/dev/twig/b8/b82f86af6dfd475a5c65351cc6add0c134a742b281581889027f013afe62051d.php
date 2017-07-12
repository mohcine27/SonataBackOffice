<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_4704c66f00e71baa51b8175eef3140be74513c5bb4005893516682f1171f149f extends Twig_Template
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
        $__internal_374884abd0d4c54e14ef0baef22ae27a7a665b8f72aef9955844bb20666ca12c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_374884abd0d4c54e14ef0baef22ae27a7a665b8f72aef9955844bb20666ca12c->enter($__internal_374884abd0d4c54e14ef0baef22ae27a7a665b8f72aef9955844bb20666ca12c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_fdf32400ed09d630ea3579fa10797fe4ba6d043bdccc8bdc8803e91e34411740 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdf32400ed09d630ea3579fa10797fe4ba6d043bdccc8bdc8803e91e34411740->enter($__internal_fdf32400ed09d630ea3579fa10797fe4ba6d043bdccc8bdc8803e91e34411740_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_374884abd0d4c54e14ef0baef22ae27a7a665b8f72aef9955844bb20666ca12c->leave($__internal_374884abd0d4c54e14ef0baef22ae27a7a665b8f72aef9955844bb20666ca12c_prof);

        
        $__internal_fdf32400ed09d630ea3579fa10797fe4ba6d043bdccc8bdc8803e91e34411740->leave($__internal_fdf32400ed09d630ea3579fa10797fe4ba6d043bdccc8bdc8803e91e34411740_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_end.html.php");
    }
}
