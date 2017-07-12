<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_0d184dd869ce7910db8e2e37b19f0af731501f20aee72ac14b3986fe3ed131dc extends Twig_Template
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
        $__internal_c56f81e59693e3d4e3fa49fedc778f3e6217229906d9789b02841161cc6dc72b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c56f81e59693e3d4e3fa49fedc778f3e6217229906d9789b02841161cc6dc72b->enter($__internal_c56f81e59693e3d4e3fa49fedc778f3e6217229906d9789b02841161cc6dc72b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_2d1a5e9d11537659f249a74563c69a88118d3cb1c020c6da0808e53e2060afec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d1a5e9d11537659f249a74563c69a88118d3cb1c020c6da0808e53e2060afec->enter($__internal_2d1a5e9d11537659f249a74563c69a88118d3cb1c020c6da0808e53e2060afec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_c56f81e59693e3d4e3fa49fedc778f3e6217229906d9789b02841161cc6dc72b->leave($__internal_c56f81e59693e3d4e3fa49fedc778f3e6217229906d9789b02841161cc6dc72b_prof);

        
        $__internal_2d1a5e9d11537659f249a74563c69a88118d3cb1c020c6da0808e53e2060afec->leave($__internal_2d1a5e9d11537659f249a74563c69a88118d3cb1c020c6da0808e53e2060afec_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\repeated_row.html.php");
    }
}
