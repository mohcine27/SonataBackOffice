<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_354c4c4ce6dd8cc90f7d9cfa298433c6b19ee5ccbacc9c62a24e22c04f90d701 extends Twig_Template
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
        $__internal_d83954a7ecde7c7e9f9aa691b49cc8d98000944cee0153d459ef7b1a8dba4848 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d83954a7ecde7c7e9f9aa691b49cc8d98000944cee0153d459ef7b1a8dba4848->enter($__internal_d83954a7ecde7c7e9f9aa691b49cc8d98000944cee0153d459ef7b1a8dba4848_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_26a03be1b2b6ba77c9fa9b540ca79dff624acd4f5776f806beacd3100ed5125a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26a03be1b2b6ba77c9fa9b540ca79dff624acd4f5776f806beacd3100ed5125a->enter($__internal_26a03be1b2b6ba77c9fa9b540ca79dff624acd4f5776f806beacd3100ed5125a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_d83954a7ecde7c7e9f9aa691b49cc8d98000944cee0153d459ef7b1a8dba4848->leave($__internal_d83954a7ecde7c7e9f9aa691b49cc8d98000944cee0153d459ef7b1a8dba4848_prof);

        
        $__internal_26a03be1b2b6ba77c9fa9b540ca79dff624acd4f5776f806beacd3100ed5125a->leave($__internal_26a03be1b2b6ba77c9fa9b540ca79dff624acd4f5776f806beacd3100ed5125a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\button_row.html.php");
    }
}
