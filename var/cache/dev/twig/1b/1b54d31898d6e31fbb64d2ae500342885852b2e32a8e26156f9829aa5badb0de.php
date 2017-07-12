<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_9e00157b89f4d68db0e89d24582a8740047c02c171a9d1921a51deaa8722c6f1 extends Twig_Template
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
        $__internal_a616cbc72efb90013d87b2e0b3922f744b501e5b890b85f88e6a4f081c67c12c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a616cbc72efb90013d87b2e0b3922f744b501e5b890b85f88e6a4f081c67c12c->enter($__internal_a616cbc72efb90013d87b2e0b3922f744b501e5b890b85f88e6a4f081c67c12c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_aa9a55ede4162ffe87e089b1ee9685bcc2fe0c2ea398945ccf1aaa5797eb19b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa9a55ede4162ffe87e089b1ee9685bcc2fe0c2ea398945ccf1aaa5797eb19b7->enter($__internal_aa9a55ede4162ffe87e089b1ee9685bcc2fe0c2ea398945ccf1aaa5797eb19b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_a616cbc72efb90013d87b2e0b3922f744b501e5b890b85f88e6a4f081c67c12c->leave($__internal_a616cbc72efb90013d87b2e0b3922f744b501e5b890b85f88e6a4f081c67c12c_prof);

        
        $__internal_aa9a55ede4162ffe87e089b1ee9685bcc2fe0c2ea398945ccf1aaa5797eb19b7->leave($__internal_aa9a55ede4162ffe87e089b1ee9685bcc2fe0c2ea398945ccf1aaa5797eb19b7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}
