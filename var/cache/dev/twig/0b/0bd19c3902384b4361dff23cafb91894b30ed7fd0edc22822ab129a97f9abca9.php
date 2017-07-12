<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_f29994d46d2d9ba406821f339fb311acdb20e75f256069a0e645e09717d25d7e extends Twig_Template
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
        $__internal_d51f7db3b7b108f896606188608dcab7857922382e119b47938366df114df093 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d51f7db3b7b108f896606188608dcab7857922382e119b47938366df114df093->enter($__internal_d51f7db3b7b108f896606188608dcab7857922382e119b47938366df114df093_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_3f0a3cf5b3aa07fa599fa45c6944fbcb6131c05cd6ed69383c699734cbdce959 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f0a3cf5b3aa07fa599fa45c6944fbcb6131c05cd6ed69383c699734cbdce959->enter($__internal_3f0a3cf5b3aa07fa599fa45c6944fbcb6131c05cd6ed69383c699734cbdce959_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_d51f7db3b7b108f896606188608dcab7857922382e119b47938366df114df093->leave($__internal_d51f7db3b7b108f896606188608dcab7857922382e119b47938366df114df093_prof);

        
        $__internal_3f0a3cf5b3aa07fa599fa45c6944fbcb6131c05cd6ed69383c699734cbdce959->leave($__internal_3f0a3cf5b3aa07fa599fa45c6944fbcb6131c05cd6ed69383c699734cbdce959_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
