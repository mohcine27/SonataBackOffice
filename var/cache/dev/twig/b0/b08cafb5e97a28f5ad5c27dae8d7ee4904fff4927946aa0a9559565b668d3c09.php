<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_011cd6cd3d9d649660354859d568e7412d3ca0a57681ef66b94a5992f054fba7 extends Twig_Template
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
        $__internal_d0594b372a0b0fcb6f9c2bbd8ccf21406340c0864c5f26111e501cd6d3344880 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0594b372a0b0fcb6f9c2bbd8ccf21406340c0864c5f26111e501cd6d3344880->enter($__internal_d0594b372a0b0fcb6f9c2bbd8ccf21406340c0864c5f26111e501cd6d3344880_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_c13f6b209a1bf1501c160cd971a37928d1f7687a3b59429c0439fa1752c6bdac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c13f6b209a1bf1501c160cd971a37928d1f7687a3b59429c0439fa1752c6bdac->enter($__internal_c13f6b209a1bf1501c160cd971a37928d1f7687a3b59429c0439fa1752c6bdac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_d0594b372a0b0fcb6f9c2bbd8ccf21406340c0864c5f26111e501cd6d3344880->leave($__internal_d0594b372a0b0fcb6f9c2bbd8ccf21406340c0864c5f26111e501cd6d3344880_prof);

        
        $__internal_c13f6b209a1bf1501c160cd971a37928d1f7687a3b59429c0439fa1752c6bdac->leave($__internal_c13f6b209a1bf1501c160cd971a37928d1f7687a3b59429c0439fa1752c6bdac_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\money_widget.html.php");
    }
}
