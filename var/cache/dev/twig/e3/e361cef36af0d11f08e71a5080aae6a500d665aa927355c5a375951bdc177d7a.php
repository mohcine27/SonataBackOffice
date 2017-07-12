<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_1e0fd0b0b6365ea80821e98d2f713cef22ac95f013a38b1cf03e458d74db500c extends Twig_Template
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
        $__internal_353de09983556bf4f5712f1527bbaf6a385a2ae9cdb07b35bddb19ff71fc68e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_353de09983556bf4f5712f1527bbaf6a385a2ae9cdb07b35bddb19ff71fc68e1->enter($__internal_353de09983556bf4f5712f1527bbaf6a385a2ae9cdb07b35bddb19ff71fc68e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_71d86b002649aa69110c1fabd8943f2f75916d5c958046217fdedcd26ab6fef1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71d86b002649aa69110c1fabd8943f2f75916d5c958046217fdedcd26ab6fef1->enter($__internal_71d86b002649aa69110c1fabd8943f2f75916d5c958046217fdedcd26ab6fef1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_353de09983556bf4f5712f1527bbaf6a385a2ae9cdb07b35bddb19ff71fc68e1->leave($__internal_353de09983556bf4f5712f1527bbaf6a385a2ae9cdb07b35bddb19ff71fc68e1_prof);

        
        $__internal_71d86b002649aa69110c1fabd8943f2f75916d5c958046217fdedcd26ab6fef1->leave($__internal_71d86b002649aa69110c1fabd8943f2f75916d5c958046217fdedcd26ab6fef1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_attributes.html.php");
    }
}
