<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_ce37a2d5cd7c8c82f2337e5fab3570cac3571266358275414081eb365f6db3e1 extends Twig_Template
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
        $__internal_171881bf82e99217615c7b1ab2f1eaefb765b59d4dba446ef1079086f05857c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_171881bf82e99217615c7b1ab2f1eaefb765b59d4dba446ef1079086f05857c4->enter($__internal_171881bf82e99217615c7b1ab2f1eaefb765b59d4dba446ef1079086f05857c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_0997f2fbb7fd532c49afd6c4a7e28b277bb368b4ce29fd6382dcdd59ff294788 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0997f2fbb7fd532c49afd6c4a7e28b277bb368b4ce29fd6382dcdd59ff294788->enter($__internal_0997f2fbb7fd532c49afd6c4a7e28b277bb368b4ce29fd6382dcdd59ff294788_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_171881bf82e99217615c7b1ab2f1eaefb765b59d4dba446ef1079086f05857c4->leave($__internal_171881bf82e99217615c7b1ab2f1eaefb765b59d4dba446ef1079086f05857c4_prof);

        
        $__internal_0997f2fbb7fd532c49afd6c4a7e28b277bb368b4ce29fd6382dcdd59ff294788->leave($__internal_0997f2fbb7fd532c49afd6c4a7e28b277bb368b4ce29fd6382dcdd59ff294788_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_widget.html.php");
    }
}
