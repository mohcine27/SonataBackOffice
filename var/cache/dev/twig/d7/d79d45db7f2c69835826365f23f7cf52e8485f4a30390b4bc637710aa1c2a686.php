<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_171d5c4d27bbd8598ac2e5aeddd330621b911632c1c379866ed9be1fb25d871c extends Twig_Template
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
        $__internal_35c2265769c5882c8935629686f7b344f8d398b57f43949e62d6571642fc02f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35c2265769c5882c8935629686f7b344f8d398b57f43949e62d6571642fc02f7->enter($__internal_35c2265769c5882c8935629686f7b344f8d398b57f43949e62d6571642fc02f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_c7f9642e8e5dab0ca21e7b749bdd1891948d914e616d8903e56769cce0bb1c7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7f9642e8e5dab0ca21e7b749bdd1891948d914e616d8903e56769cce0bb1c7a->enter($__internal_c7f9642e8e5dab0ca21e7b749bdd1891948d914e616d8903e56769cce0bb1c7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_35c2265769c5882c8935629686f7b344f8d398b57f43949e62d6571642fc02f7->leave($__internal_35c2265769c5882c8935629686f7b344f8d398b57f43949e62d6571642fc02f7_prof);

        
        $__internal_c7f9642e8e5dab0ca21e7b749bdd1891948d914e616d8903e56769cce0bb1c7a->leave($__internal_c7f9642e8e5dab0ca21e7b749bdd1891948d914e616d8903e56769cce0bb1c7a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rest.html.php");
    }
}
