<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_bf2fe81578c6d28aaef646d1ff8150d3b04e86cc12e1ac4e923da72cf75e35be extends Twig_Template
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
        $__internal_b4fcf7ae98b399567a6497b00da2f84c5afae55c0a66f6d6859d7e28ec9ddbc9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4fcf7ae98b399567a6497b00da2f84c5afae55c0a66f6d6859d7e28ec9ddbc9->enter($__internal_b4fcf7ae98b399567a6497b00da2f84c5afae55c0a66f6d6859d7e28ec9ddbc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_18ab56e50b0c2ace8909c76dbb48cbe1a3423cb5b3ef537a3d0355d1dec668d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18ab56e50b0c2ace8909c76dbb48cbe1a3423cb5b3ef537a3d0355d1dec668d8->enter($__internal_18ab56e50b0c2ace8909c76dbb48cbe1a3423cb5b3ef537a3d0355d1dec668d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_b4fcf7ae98b399567a6497b00da2f84c5afae55c0a66f6d6859d7e28ec9ddbc9->leave($__internal_b4fcf7ae98b399567a6497b00da2f84c5afae55c0a66f6d6859d7e28ec9ddbc9_prof);

        
        $__internal_18ab56e50b0c2ace8909c76dbb48cbe1a3423cb5b3ef537a3d0355d1dec668d8->leave($__internal_18ab56e50b0c2ace8909c76dbb48cbe1a3423cb5b3ef537a3d0355d1dec668d8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_row.html.php");
    }
}
