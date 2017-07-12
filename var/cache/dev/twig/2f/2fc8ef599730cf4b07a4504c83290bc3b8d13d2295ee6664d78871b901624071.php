<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_4d0f86f591eafc6694d1d606a88bc5b659c85bd34b42f02f635018cf62abe50e extends Twig_Template
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
        $__internal_ff2b098f7f0a17e68a99d57616d0cc0d2dba61e340e926998c84089f1a9dda7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff2b098f7f0a17e68a99d57616d0cc0d2dba61e340e926998c84089f1a9dda7d->enter($__internal_ff2b098f7f0a17e68a99d57616d0cc0d2dba61e340e926998c84089f1a9dda7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_eff3657b9a893247922b05cd638377daf7abe3424af86de2f5f4534495ca4065 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eff3657b9a893247922b05cd638377daf7abe3424af86de2f5f4534495ca4065->enter($__internal_eff3657b9a893247922b05cd638377daf7abe3424af86de2f5f4534495ca4065_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_ff2b098f7f0a17e68a99d57616d0cc0d2dba61e340e926998c84089f1a9dda7d->leave($__internal_ff2b098f7f0a17e68a99d57616d0cc0d2dba61e340e926998c84089f1a9dda7d_prof);

        
        $__internal_eff3657b9a893247922b05cd638377daf7abe3424af86de2f5f4534495ca4065->leave($__internal_eff3657b9a893247922b05cd638377daf7abe3424af86de2f5f4534495ca4065_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget_expanded.html.php");
    }
}
