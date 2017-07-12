<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_060aa1475d38d1984a4682a4e4f9886d147202fee587ab980c09156120c02c9c extends Twig_Template
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
        $__internal_c7964e8d4998433ddcc9e31aa6b8db5d6c3a25b4a09948aa09dea4f9bc565466 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7964e8d4998433ddcc9e31aa6b8db5d6c3a25b4a09948aa09dea4f9bc565466->enter($__internal_c7964e8d4998433ddcc9e31aa6b8db5d6c3a25b4a09948aa09dea4f9bc565466_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_c0c9556575d5e92bd266845a754c2a1cf2a1a99fd9b2e16d149ccf9d14025ae9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0c9556575d5e92bd266845a754c2a1cf2a1a99fd9b2e16d149ccf9d14025ae9->enter($__internal_c0c9556575d5e92bd266845a754c2a1cf2a1a99fd9b2e16d149ccf9d14025ae9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_c7964e8d4998433ddcc9e31aa6b8db5d6c3a25b4a09948aa09dea4f9bc565466->leave($__internal_c7964e8d4998433ddcc9e31aa6b8db5d6c3a25b4a09948aa09dea4f9bc565466_prof);

        
        $__internal_c0c9556575d5e92bd266845a754c2a1cf2a1a99fd9b2e16d149ccf9d14025ae9->leave($__internal_c0c9556575d5e92bd266845a754c2a1cf2a1a99fd9b2e16d149ccf9d14025ae9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_simple.html.php");
    }
}
