<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_9180d9cb7aee94026027495518b2590ba72cfd2f9ea35e2a993ae74ceb1aa7aa extends Twig_Template
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
        $__internal_184af7b31c027b715a8a285fc02bd1d81bd2b4de657053e9ac1ab2d2afc10345 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_184af7b31c027b715a8a285fc02bd1d81bd2b4de657053e9ac1ab2d2afc10345->enter($__internal_184af7b31c027b715a8a285fc02bd1d81bd2b4de657053e9ac1ab2d2afc10345_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_1e82bfc5c6a6e85e866bab0e3efc438faafb8db961b05860cac065fae50bf641 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e82bfc5c6a6e85e866bab0e3efc438faafb8db961b05860cac065fae50bf641->enter($__internal_1e82bfc5c6a6e85e866bab0e3efc438faafb8db961b05860cac065fae50bf641_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_184af7b31c027b715a8a285fc02bd1d81bd2b4de657053e9ac1ab2d2afc10345->leave($__internal_184af7b31c027b715a8a285fc02bd1d81bd2b4de657053e9ac1ab2d2afc10345_prof);

        
        $__internal_1e82bfc5c6a6e85e866bab0e3efc438faafb8db961b05860cac065fae50bf641->leave($__internal_1e82bfc5c6a6e85e866bab0e3efc438faafb8db961b05860cac065fae50bf641_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}
