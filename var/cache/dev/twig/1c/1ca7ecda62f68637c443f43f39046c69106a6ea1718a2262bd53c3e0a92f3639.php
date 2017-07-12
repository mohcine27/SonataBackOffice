<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_dd034ba720663874dfab7e668027f1d7fd70e6eca3564d734a93e7376a11d116 extends Twig_Template
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
        $__internal_ec900f04a153a80bf6f626c648bcd9fa07c833b9594f1001df123a631f5095cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec900f04a153a80bf6f626c648bcd9fa07c833b9594f1001df123a631f5095cd->enter($__internal_ec900f04a153a80bf6f626c648bcd9fa07c833b9594f1001df123a631f5095cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_9cd425f772b43b9ac137f5d1f21d94721ad1e0eb2fcb2b45fda495356a2f5ff1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cd425f772b43b9ac137f5d1f21d94721ad1e0eb2fcb2b45fda495356a2f5ff1->enter($__internal_9cd425f772b43b9ac137f5d1f21d94721ad1e0eb2fcb2b45fda495356a2f5ff1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_ec900f04a153a80bf6f626c648bcd9fa07c833b9594f1001df123a631f5095cd->leave($__internal_ec900f04a153a80bf6f626c648bcd9fa07c833b9594f1001df123a631f5095cd_prof);

        
        $__internal_9cd425f772b43b9ac137f5d1f21d94721ad1e0eb2fcb2b45fda495356a2f5ff1->leave($__internal_9cd425f772b43b9ac137f5d1f21d94721ad1e0eb2fcb2b45fda495356a2f5ff1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_row.html.php");
    }
}
