<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_53c701c051d2d34bc2baa09378e279b5c77392c6a0a8eab0c24862c04a402467 extends Twig_Template
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
        $__internal_2fa2c8061d1d58e5eef4904780dd1060841ad62cf4d8f71d88b6a5a7701e1497 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fa2c8061d1d58e5eef4904780dd1060841ad62cf4d8f71d88b6a5a7701e1497->enter($__internal_2fa2c8061d1d58e5eef4904780dd1060841ad62cf4d8f71d88b6a5a7701e1497_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_6288667586b6280612704ece7c874cec082eb433f6ab4db2de29f003ecff27e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6288667586b6280612704ece7c874cec082eb433f6ab4db2de29f003ecff27e5->enter($__internal_6288667586b6280612704ece7c874cec082eb433f6ab4db2de29f003ecff27e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_2fa2c8061d1d58e5eef4904780dd1060841ad62cf4d8f71d88b6a5a7701e1497->leave($__internal_2fa2c8061d1d58e5eef4904780dd1060841ad62cf4d8f71d88b6a5a7701e1497_prof);

        
        $__internal_6288667586b6280612704ece7c874cec082eb433f6ab4db2de29f003ecff27e5->leave($__internal_6288667586b6280612704ece7c874cec082eb433f6ab4db2de29f003ecff27e5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\hidden_row.html.php");
    }
}
