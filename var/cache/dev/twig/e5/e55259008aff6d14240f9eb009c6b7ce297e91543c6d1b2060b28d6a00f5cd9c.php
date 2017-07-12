<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_5a8cc873a81084946898c26dc9852ead171c7504327ead77ff349457709063dd extends Twig_Template
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
        $__internal_6bdbbc6a3c19c01c33ca9fb7452f012cfec0cc6a4e79ee100b2898c32e20a23c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6bdbbc6a3c19c01c33ca9fb7452f012cfec0cc6a4e79ee100b2898c32e20a23c->enter($__internal_6bdbbc6a3c19c01c33ca9fb7452f012cfec0cc6a4e79ee100b2898c32e20a23c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_8251841705e0237f8c6b7879b5d6715b189d54f9b9ae8cbb2bccc76a55d2ae27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8251841705e0237f8c6b7879b5d6715b189d54f9b9ae8cbb2bccc76a55d2ae27->enter($__internal_8251841705e0237f8c6b7879b5d6715b189d54f9b9ae8cbb2bccc76a55d2ae27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_6bdbbc6a3c19c01c33ca9fb7452f012cfec0cc6a4e79ee100b2898c32e20a23c->leave($__internal_6bdbbc6a3c19c01c33ca9fb7452f012cfec0cc6a4e79ee100b2898c32e20a23c_prof);

        
        $__internal_8251841705e0237f8c6b7879b5d6715b189d54f9b9ae8cbb2bccc76a55d2ae27->leave($__internal_8251841705e0237f8c6b7879b5d6715b189d54f9b9ae8cbb2bccc76a55d2ae27_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}
