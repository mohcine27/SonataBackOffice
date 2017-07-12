<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_62780b0b9448eb430e9513aff14328ecb5eddf046fa9078016661d64bfbb9c04 extends Twig_Template
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
        $__internal_b9d37b8f1e0ff3a3564ea90fcc75bb445470568e6b2f0d53507a8d88fe6371c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9d37b8f1e0ff3a3564ea90fcc75bb445470568e6b2f0d53507a8d88fe6371c0->enter($__internal_b9d37b8f1e0ff3a3564ea90fcc75bb445470568e6b2f0d53507a8d88fe6371c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_a2cb701c7cdc3afcda293eaa326fb9a3d1ccfd0480c140f9018f87982ba35688 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2cb701c7cdc3afcda293eaa326fb9a3d1ccfd0480c140f9018f87982ba35688->enter($__internal_a2cb701c7cdc3afcda293eaa326fb9a3d1ccfd0480c140f9018f87982ba35688_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_b9d37b8f1e0ff3a3564ea90fcc75bb445470568e6b2f0d53507a8d88fe6371c0->leave($__internal_b9d37b8f1e0ff3a3564ea90fcc75bb445470568e6b2f0d53507a8d88fe6371c0_prof);

        
        $__internal_a2cb701c7cdc3afcda293eaa326fb9a3d1ccfd0480c140f9018f87982ba35688->leave($__internal_a2cb701c7cdc3afcda293eaa326fb9a3d1ccfd0480c140f9018f87982ba35688_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
