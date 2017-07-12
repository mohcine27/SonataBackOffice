<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_d458341826959431641d42458d92513d231267669a0081e553a4a4fcb1dd39f1 extends Twig_Template
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
        $__internal_658835b5843d3c20475bd639a418280da04df8bc5c7ba7caed0957e47f4c5e45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_658835b5843d3c20475bd639a418280da04df8bc5c7ba7caed0957e47f4c5e45->enter($__internal_658835b5843d3c20475bd639a418280da04df8bc5c7ba7caed0957e47f4c5e45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_569929b7196db5c52eaa81951975587e11d64451fc9c180956194406b93715cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_569929b7196db5c52eaa81951975587e11d64451fc9c180956194406b93715cd->enter($__internal_569929b7196db5c52eaa81951975587e11d64451fc9c180956194406b93715cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_658835b5843d3c20475bd639a418280da04df8bc5c7ba7caed0957e47f4c5e45->leave($__internal_658835b5843d3c20475bd639a418280da04df8bc5c7ba7caed0957e47f4c5e45_prof);

        
        $__internal_569929b7196db5c52eaa81951975587e11d64451fc9c180956194406b93715cd->leave($__internal_569929b7196db5c52eaa81951975587e11d64451fc9c180956194406b93715cd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_attributes.html.php");
    }
}
