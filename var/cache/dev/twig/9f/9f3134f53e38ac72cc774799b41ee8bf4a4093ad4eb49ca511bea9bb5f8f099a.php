<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_af800fd9b9d6a4a69e94c20bfbdcfdae7ecf28e2c45ad2e87340ae0a0acc568c extends Twig_Template
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
        $__internal_2d5d46270289d57fb7212a7e62a5a036a71a489a517f4c8babfaee2d6b8a7cb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d5d46270289d57fb7212a7e62a5a036a71a489a517f4c8babfaee2d6b8a7cb6->enter($__internal_2d5d46270289d57fb7212a7e62a5a036a71a489a517f4c8babfaee2d6b8a7cb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_62b87c1afa5563114c64255dc503ed5941ad4ac52d772687215abea84e634681 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62b87c1afa5563114c64255dc503ed5941ad4ac52d772687215abea84e634681->enter($__internal_62b87c1afa5563114c64255dc503ed5941ad4ac52d772687215abea84e634681_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_2d5d46270289d57fb7212a7e62a5a036a71a489a517f4c8babfaee2d6b8a7cb6->leave($__internal_2d5d46270289d57fb7212a7e62a5a036a71a489a517f4c8babfaee2d6b8a7cb6_prof);

        
        $__internal_62b87c1afa5563114c64255dc503ed5941ad4ac52d772687215abea84e634681->leave($__internal_62b87c1afa5563114c64255dc503ed5941ad4ac52d772687215abea84e634681_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}
