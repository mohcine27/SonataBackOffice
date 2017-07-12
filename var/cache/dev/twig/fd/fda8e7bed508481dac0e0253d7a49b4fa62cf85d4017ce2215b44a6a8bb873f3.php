<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_8ae12a5f22f89002abf8d52dc8f3f7a74193df068e568acb1c6e8e45ffd8bcc6 extends Twig_Template
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
        $__internal_3549c38eb7dcb220d938a3b69d01d42d59173fa48c2a5e5f45fdaeaebec75360 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3549c38eb7dcb220d938a3b69d01d42d59173fa48c2a5e5f45fdaeaebec75360->enter($__internal_3549c38eb7dcb220d938a3b69d01d42d59173fa48c2a5e5f45fdaeaebec75360_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_8d7704b8da08fc4db0a88405bc5edd2c0fd3d12abef43c5df89068e3a93940f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d7704b8da08fc4db0a88405bc5edd2c0fd3d12abef43c5df89068e3a93940f4->enter($__internal_8d7704b8da08fc4db0a88405bc5edd2c0fd3d12abef43c5df89068e3a93940f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_3549c38eb7dcb220d938a3b69d01d42d59173fa48c2a5e5f45fdaeaebec75360->leave($__internal_3549c38eb7dcb220d938a3b69d01d42d59173fa48c2a5e5f45fdaeaebec75360_prof);

        
        $__internal_8d7704b8da08fc4db0a88405bc5edd2c0fd3d12abef43c5df89068e3a93940f4->leave($__internal_8d7704b8da08fc4db0a88405bc5edd2c0fd3d12abef43c5df89068e3a93940f4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
