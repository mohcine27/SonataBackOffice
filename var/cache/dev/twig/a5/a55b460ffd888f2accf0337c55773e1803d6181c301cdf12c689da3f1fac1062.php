<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_3b577e66ef207bed1e3fd6cc473f45a5c5afc23aef03e9739020145294279257 extends Twig_Template
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
        $__internal_7dfb479176e515200e50c32789a485e8b1ab00331999c93d9ac93831a9cca1be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7dfb479176e515200e50c32789a485e8b1ab00331999c93d9ac93831a9cca1be->enter($__internal_7dfb479176e515200e50c32789a485e8b1ab00331999c93d9ac93831a9cca1be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_38ae12c4378da32468b55cf2430a21abc368cfc1a8536f1749e2eb158163a2af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38ae12c4378da32468b55cf2430a21abc368cfc1a8536f1749e2eb158163a2af->enter($__internal_38ae12c4378da32468b55cf2430a21abc368cfc1a8536f1749e2eb158163a2af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_7dfb479176e515200e50c32789a485e8b1ab00331999c93d9ac93831a9cca1be->leave($__internal_7dfb479176e515200e50c32789a485e8b1ab00331999c93d9ac93831a9cca1be_prof);

        
        $__internal_38ae12c4378da32468b55cf2430a21abc368cfc1a8536f1749e2eb158163a2af->leave($__internal_38ae12c4378da32468b55cf2430a21abc368cfc1a8536f1749e2eb158163a2af_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}
