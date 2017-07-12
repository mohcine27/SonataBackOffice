<?php

/* SonataAdminBundle:Pager:base_results.html.twig */
class __TwigTemplate_d1a02709f52e3bcd88443d163db0513489444e68865fc02bc89901dfd8637bb6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'num_pages' => array($this, 'block_num_pages'),
            'num_results' => array($this, 'block_num_results'),
            'max_per_page' => array($this, 'block_max_per_page'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c2b20454355ed0984fcd4d45d2d1129775e7b070be64a3ea65736549803cc228 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2b20454355ed0984fcd4d45d2d1129775e7b070be64a3ea65736549803cc228->enter($__internal_c2b20454355ed0984fcd4d45d2d1129775e7b070be64a3ea65736549803cc228_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:base_results.html.twig"));

        $__internal_5f777547e6438e887f38a19bd200b4e9b45a9e29ec09c1798d19aafe6ef1f613 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f777547e6438e887f38a19bd200b4e9b45a9e29ec09c1798d19aafe6ef1f613->enter($__internal_5f777547e6438e887f38a19bd200b4e9b45a9e29ec09c1798d19aafe6ef1f613_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:base_results.html.twig"));

        // line 11
        echo "
";
        // line 12
        $this->displayBlock('num_pages', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('num_results', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('max_per_page', $context, $blocks);
        
        $__internal_c2b20454355ed0984fcd4d45d2d1129775e7b070be64a3ea65736549803cc228->leave($__internal_c2b20454355ed0984fcd4d45d2d1129775e7b070be64a3ea65736549803cc228_prof);

        
        $__internal_5f777547e6438e887f38a19bd200b4e9b45a9e29ec09c1798d19aafe6ef1f613->leave($__internal_5f777547e6438e887f38a19bd200b4e9b45a9e29ec09c1798d19aafe6ef1f613_prof);

    }

    // line 12
    public function block_num_pages($context, array $blocks = array())
    {
        $__internal_74c71c7ef66c2db3365ed47f6a842ceb7386b44c79aca7e5e4471661accd5b36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74c71c7ef66c2db3365ed47f6a842ceb7386b44c79aca7e5e4471661accd5b36->enter($__internal_74c71c7ef66c2db3365ed47f6a842ceb7386b44c79aca7e5e4471661accd5b36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_pages"));

        $__internal_3cd15e0b1d1c4eb98817becc53a7fb610edc9841faf9bc2a2bfeb9d144d2fee1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cd15e0b1d1c4eb98817becc53a7fb610edc9841faf9bc2a2bfeb9d144d2fee1->enter($__internal_3cd15e0b1d1c4eb98817becc53a7fb610edc9841faf9bc2a2bfeb9d144d2fee1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_pages"));

        // line 13
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "page", array()), "html", null, true);
        echo " / ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "lastpage", array()), "html", null, true);
        echo "
    &nbsp;-&nbsp;
";
        
        $__internal_3cd15e0b1d1c4eb98817becc53a7fb610edc9841faf9bc2a2bfeb9d144d2fee1->leave($__internal_3cd15e0b1d1c4eb98817becc53a7fb610edc9841faf9bc2a2bfeb9d144d2fee1_prof);

        
        $__internal_74c71c7ef66c2db3365ed47f6a842ceb7386b44c79aca7e5e4471661accd5b36->leave($__internal_74c71c7ef66c2db3365ed47f6a842ceb7386b44c79aca7e5e4471661accd5b36_prof);

    }

    // line 17
    public function block_num_results($context, array $blocks = array())
    {
        $__internal_5ac02d75a43eac8635e2fcc0d3b2a10630d3a07d5bbc0cc32d03b80f2dda85e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ac02d75a43eac8635e2fcc0d3b2a10630d3a07d5bbc0cc32d03b80f2dda85e6->enter($__internal_5ac02d75a43eac8635e2fcc0d3b2a10630d3a07d5bbc0cc32d03b80f2dda85e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_results"));

        $__internal_fdc11961041319f2d0d67ebbc7fb0d5f04032e8932983c12d7e7555c10ef2814 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdc11961041319f2d0d67ebbc7fb0d5f04032e8932983c12d7e7555c10ef2814->enter($__internal_fdc11961041319f2d0d67ebbc7fb0d5f04032e8932983c12d7e7555c10ef2814_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_results"));

        // line 18
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->transChoice("list_results_count", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "nbresults", array()), array("%count%" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "nbresults", array())), "SonataAdminBundle");
        // line 19
        echo "    &nbsp;-&nbsp;
";
        
        $__internal_fdc11961041319f2d0d67ebbc7fb0d5f04032e8932983c12d7e7555c10ef2814->leave($__internal_fdc11961041319f2d0d67ebbc7fb0d5f04032e8932983c12d7e7555c10ef2814_prof);

        
        $__internal_5ac02d75a43eac8635e2fcc0d3b2a10630d3a07d5bbc0cc32d03b80f2dda85e6->leave($__internal_5ac02d75a43eac8635e2fcc0d3b2a10630d3a07d5bbc0cc32d03b80f2dda85e6_prof);

    }

    // line 22
    public function block_max_per_page($context, array $blocks = array())
    {
        $__internal_380677e9e8d5692ca853542d6de7333c9bc8a1a722412f09592c35df4d4a1f78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_380677e9e8d5692ca853542d6de7333c9bc8a1a722412f09592c35df4d4a1f78->enter($__internal_380677e9e8d5692ca853542d6de7333c9bc8a1a722412f09592c35df4d4a1f78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "max_per_page"));

        $__internal_cbcc99e9f3d6524cb44412a89147554c5b3b4a86e2220d00263173faa8b8d3ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbcc99e9f3d6524cb44412a89147554c5b3b4a86e2220d00263173faa8b8d3ae->enter($__internal_cbcc99e9f3d6524cb44412a89147554c5b3b4a86e2220d00263173faa8b8d3ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "max_per_page"));

        // line 23
        echo "    <label class=\"control-label\" for=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
        echo "_per_page\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("label_per_page", array(), "SonataAdminBundle");
        echo "</label>
    <select class=\"per-page small form-control\" id=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
        echo "_per_page\" style=\"width: auto\">
        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getperpageoptions", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["per_page"]) {
            // line 26
            echo "            <option ";
            if (($context["per_page"] == $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "maxperpage", array()))) {
                echo "selected=\"selected\"";
            }
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => array("filter" => twig_array_merge($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "values", array()), array("_page" => 1, "_per_page" => $context["per_page"])))), "method"), "html", null, true);
            echo "\">";
            // line 27
            echo twig_escape_filter($this->env, $context["per_page"], "html", null, true);
            // line 28
            echo "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['per_page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "    </select>
";
        
        $__internal_cbcc99e9f3d6524cb44412a89147554c5b3b4a86e2220d00263173faa8b8d3ae->leave($__internal_cbcc99e9f3d6524cb44412a89147554c5b3b4a86e2220d00263173faa8b8d3ae_prof);

        
        $__internal_380677e9e8d5692ca853542d6de7333c9bc8a1a722412f09592c35df4d4a1f78->leave($__internal_380677e9e8d5692ca853542d6de7333c9bc8a1a722412f09592c35df4d4a1f78_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:base_results.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  140 => 30,  133 => 28,  131 => 27,  123 => 26,  119 => 25,  115 => 24,  108 => 23,  99 => 22,  88 => 19,  85 => 18,  76 => 17,  60 => 13,  51 => 12,  41 => 22,  38 => 21,  36 => 17,  33 => 16,  31 => 12,  28 => 11,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% block num_pages %}
    {{ admin.datagrid.pager.page }} / {{ admin.datagrid.pager.lastpage }}
    &nbsp;-&nbsp;
{% endblock %}

{% block num_results %}
    {% transchoice admin.datagrid.pager.nbresults with {'%count%': admin.datagrid.pager.nbresults} from 'SonataAdminBundle' %}list_results_count{% endtranschoice %}
    &nbsp;-&nbsp;
{% endblock %}

{% block max_per_page %}
    <label class=\"control-label\" for=\"{{ admin.uniqid }}_per_page\">{% trans from 'SonataAdminBundle' %}label_per_page{% endtrans %}</label>
    <select class=\"per-page small form-control\" id=\"{{ admin.uniqid }}_per_page\" style=\"width: auto\">
        {% for per_page in admin.getperpageoptions %}
            <option {% if per_page == admin.datagrid.pager.maxperpage %}selected=\"selected\"{% endif %} value=\"{{ admin.generateUrl('list', {'filter': admin.datagrid.values|merge({'_page': 1, '_per_page': per_page})}) }}\">
                {{- per_page -}}
            </option>
        {% endfor %}
    </select>
{% endblock %}
", "SonataAdminBundle:Pager:base_results.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\Pager\\base_results.html.twig");
    }
}
