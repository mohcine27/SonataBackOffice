<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_99bbe68434e8e3e59ab1835744f0d7696ea2f3b5d974a4d98ff3435c72fbe6ca extends Twig_Template
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
        $__internal_df13d7c266252d91f81d9a68d8d371861dffcc74947e4b883a116acbfd268107 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df13d7c266252d91f81d9a68d8d371861dffcc74947e4b883a116acbfd268107->enter($__internal_df13d7c266252d91f81d9a68d8d371861dffcc74947e4b883a116acbfd268107_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_964edc4ba1b3e0ef7bed419b7ff6fdf6801d1f6ce0e17941a1ddb1d098481d20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_964edc4ba1b3e0ef7bed419b7ff6fdf6801d1f6ce0e17941a1ddb1d098481d20->enter($__internal_964edc4ba1b3e0ef7bed419b7ff6fdf6801d1f6ce0e17941a1ddb1d098481d20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_df13d7c266252d91f81d9a68d8d371861dffcc74947e4b883a116acbfd268107->leave($__internal_df13d7c266252d91f81d9a68d8d371861dffcc74947e4b883a116acbfd268107_prof);

        
        $__internal_964edc4ba1b3e0ef7bed419b7ff6fdf6801d1f6ce0e17941a1ddb1d098481d20->leave($__internal_964edc4ba1b3e0ef7bed419b7ff6fdf6801d1f6ce0e17941a1ddb1d098481d20_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
