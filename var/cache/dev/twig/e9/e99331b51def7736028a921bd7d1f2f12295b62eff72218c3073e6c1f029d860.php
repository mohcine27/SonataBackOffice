<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_da6525bfcecff124837164a3888705d482634dd4a76dd64713392fbab34b6bf9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1009dd2367a9b0c4858ff27c3ff3af5d1f8cd4a792883cb0955567a8c0be6f93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1009dd2367a9b0c4858ff27c3ff3af5d1f8cd4a792883cb0955567a8c0be6f93->enter($__internal_1009dd2367a9b0c4858ff27c3ff3af5d1f8cd4a792883cb0955567a8c0be6f93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_b4bbed99252e631f5230c7cf04055f4691ce02b273b78b5ebd44a889044f44da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4bbed99252e631f5230c7cf04055f4691ce02b273b78b5ebd44a889044f44da->enter($__internal_b4bbed99252e631f5230c7cf04055f4691ce02b273b78b5ebd44a889044f44da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1009dd2367a9b0c4858ff27c3ff3af5d1f8cd4a792883cb0955567a8c0be6f93->leave($__internal_1009dd2367a9b0c4858ff27c3ff3af5d1f8cd4a792883cb0955567a8c0be6f93_prof);

        
        $__internal_b4bbed99252e631f5230c7cf04055f4691ce02b273b78b5ebd44a889044f44da->leave($__internal_b4bbed99252e631f5230c7cf04055f4691ce02b273b78b5ebd44a889044f44da_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4ecf54cd94986adb8144abbd91aef61cb53f45e9d73ce341acf32806637cb778 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ecf54cd94986adb8144abbd91aef61cb53f45e9d73ce341acf32806637cb778->enter($__internal_4ecf54cd94986adb8144abbd91aef61cb53f45e9d73ce341acf32806637cb778_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5f448b468c52ed2bdffdf2161ac277c0177cdbd71d2f1283a960088a139b3adf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f448b468c52ed2bdffdf2161ac277c0177cdbd71d2f1283a960088a139b3adf->enter($__internal_5f448b468c52ed2bdffdf2161ac277c0177cdbd71d2f1283a960088a139b3adf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_5f448b468c52ed2bdffdf2161ac277c0177cdbd71d2f1283a960088a139b3adf->leave($__internal_5f448b468c52ed2bdffdf2161ac277c0177cdbd71d2f1283a960088a139b3adf_prof);

        
        $__internal_4ecf54cd94986adb8144abbd91aef61cb53f45e9d73ce341acf32806637cb778->leave($__internal_4ecf54cd94986adb8144abbd91aef61cb53f45e9d73ce341acf32806637cb778_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_145525e3085dfe1eb18ba693544a98edb279a233f2965f16b70dd4705e4c4483 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_145525e3085dfe1eb18ba693544a98edb279a233f2965f16b70dd4705e4c4483->enter($__internal_145525e3085dfe1eb18ba693544a98edb279a233f2965f16b70dd4705e4c4483_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_26a80a7a0aa9853189ce953cb11c74959089740bfdcd78b530685f8b6e7a75a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26a80a7a0aa9853189ce953cb11c74959089740bfdcd78b530685f8b6e7a75a1->enter($__internal_26a80a7a0aa9853189ce953cb11c74959089740bfdcd78b530685f8b6e7a75a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_26a80a7a0aa9853189ce953cb11c74959089740bfdcd78b530685f8b6e7a75a1->leave($__internal_26a80a7a0aa9853189ce953cb11c74959089740bfdcd78b530685f8b6e7a75a1_prof);

        
        $__internal_145525e3085dfe1eb18ba693544a98edb279a233f2965f16b70dd4705e4c4483->leave($__internal_145525e3085dfe1eb18ba693544a98edb279a233f2965f16b70dd4705e4c4483_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_076e8ec5dd9d794045849494898d76a2ecb0f9fe22ded613f2d874ea89a53ddd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_076e8ec5dd9d794045849494898d76a2ecb0f9fe22ded613f2d874ea89a53ddd->enter($__internal_076e8ec5dd9d794045849494898d76a2ecb0f9fe22ded613f2d874ea89a53ddd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a955d438d9a2d32f0e1e73eea45cb6f615e539c83bab094af103fbdbcf16b799 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a955d438d9a2d32f0e1e73eea45cb6f615e539c83bab094af103fbdbcf16b799->enter($__internal_a955d438d9a2d32f0e1e73eea45cb6f615e539c83bab094af103fbdbcf16b799_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_a955d438d9a2d32f0e1e73eea45cb6f615e539c83bab094af103fbdbcf16b799->leave($__internal_a955d438d9a2d32f0e1e73eea45cb6f615e539c83bab094af103fbdbcf16b799_prof);

        
        $__internal_076e8ec5dd9d794045849494898d76a2ecb0f9fe22ded613f2d874ea89a53ddd->leave($__internal_076e8ec5dd9d794045849494898d76a2ecb0f9fe22ded613f2d874ea89a53ddd_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
