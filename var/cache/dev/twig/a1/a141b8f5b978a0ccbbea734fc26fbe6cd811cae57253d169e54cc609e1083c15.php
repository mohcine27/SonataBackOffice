<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_c5db553c4baedba4ab2bc64e3968dc4e9d490ab469f24d03a46870f6224a4930 extends Twig_Template
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
        $__internal_ddfb094cf2d735a86347054f43979c676df1e38701d340f0a246e01ebae309a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddfb094cf2d735a86347054f43979c676df1e38701d340f0a246e01ebae309a2->enter($__internal_ddfb094cf2d735a86347054f43979c676df1e38701d340f0a246e01ebae309a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_1c62f4f46e9b7da6791521d5fe0820b942616099edd859ca89f108f17ea30da7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c62f4f46e9b7da6791521d5fe0820b942616099edd859ca89f108f17ea30da7->enter($__internal_1c62f4f46e9b7da6791521d5fe0820b942616099edd859ca89f108f17ea30da7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_ddfb094cf2d735a86347054f43979c676df1e38701d340f0a246e01ebae309a2->leave($__internal_ddfb094cf2d735a86347054f43979c676df1e38701d340f0a246e01ebae309a2_prof);

        
        $__internal_1c62f4f46e9b7da6791521d5fe0820b942616099edd859ca89f108f17ea30da7->leave($__internal_1c62f4f46e9b7da6791521d5fe0820b942616099edd859ca89f108f17ea30da7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
