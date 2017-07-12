<?php

/* EasyAdminBundle:default:field_association.html.twig */
class __TwigTemplate_c9d045ada045b863472792f96805510845c5b2f9b09b68aff23a7f8a481a2b00 extends Twig_Template
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
        $__internal_7652bbdeb42f70c7f740b2e77e2a2f2f716f7c259f2a3ee4a8c6ba90fcd9be5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7652bbdeb42f70c7f740b2e77e2a2f2f716f7c259f2a3ee4a8c6ba90fcd9be5f->enter($__internal_7652bbdeb42f70c7f740b2e77e2a2f2f716f7c259f2a3ee4a8c6ba90fcd9be5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_association.html.twig"));

        $__internal_764d67fd7051768bb2da1884d467a47d504354832c64ab49c6e7f787d007eb43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_764d67fd7051768bb2da1884d467a47d504354832c64ab49c6e7f787d007eb43->enter($__internal_764d67fd7051768bb2da1884d467a47d504354832c64ab49c6e7f787d007eb43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_association.html.twig"));

        // line 2
        if (twig_test_iterable((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 3
            echo "    ";
            if (("show" == (isset($context["view"]) ? $context["view"] : $this->getContext($context, "view")))) {
                // line 4
                echo "        ";
                if ((twig_length_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) > 0)) {
                    // line 5
                    echo "            <ul class=\"";
                    echo (((twig_length_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) < 2)) ? ("inline") : (""));
                    echo "\">
                ";
                    // line 6
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), 0, $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("show.max_results")));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 7
                        echo "                    <li>
                        ";
                        // line 8
                        if (array_key_exists("link_parameters", $context)) {
                            // line 9
                            echo "                            ";
                            $context["primary_key_value"] = $this->getAttribute($context["item"], $this->getAttribute((isset($context["link_parameters"]) ? $context["link_parameters"] : $this->getContext($context, "link_parameters")), "primary_key_name", array()));
                            // line 10
                            echo "                            <a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin", twig_array_merge((isset($context["link_parameters"]) ? $context["link_parameters"] : $this->getContext($context, "link_parameters")), array("id" => (isset($context["primary_key_value"]) ? $context["primary_key_value"] : $this->getContext($context, "primary_key_value")), "referer" => ""))), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
                            echo "</a>
                        ";
                        } else {
                            // line 12
                            echo "                            ";
                            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
                            echo "
                        ";
                        }
                        // line 14
                        echo "                    </li>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 16
                    echo "
                ";
                    // line 17
                    $context["_remaining_items"] = (twig_length_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) - $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("show.max_results"));
                    // line 18
                    echo "                ";
                    if (((isset($context["_remaining_items"]) ? $context["_remaining_items"] : $this->getContext($context, "_remaining_items")) > 0)) {
                        // line 19
                        echo "                    <li class=\"remaining-items\">(";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice("show.remaining_items", (isset($context["_remaining_items"]) ? $context["_remaining_items"] : $this->getContext($context, "_remaining_items")), array(), "EasyAdminBundle"), "html", null, true);
                        echo ")</li>
                ";
                    }
                    // line 21
                    echo "            </ul>
        ";
                } else {
                    // line 23
                    echo "            <div class=\"empty collection-empty\">
                ";
                    // line 24
                    echo twig_include($this->env, $context, $this->getAttribute($this->getAttribute((isset($context["entity_config"]) ? $context["entity_config"] : $this->getContext($context, "entity_config")), "templates", array()), "label_empty", array()));
                    echo "
            </div>
        ";
                }
                // line 27
                echo "    ";
            } elseif (("list" == (isset($context["view"]) ? $context["view"] : $this->getContext($context, "view")))) {
                // line 28
                echo "        <span class=\"badge\">";
                echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "html", null, true);
                echo "</span>
    ";
            }
        } elseif (        // line 31
array_key_exists("link_parameters", $context)) {
            // line 32
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin", twig_array_merge((isset($context["link_parameters"]) ? $context["link_parameters"] : $this->getContext($context, "link_parameters")), array("referer" => ""))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->truncateText($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "html", null, true);
            echo "</a>
";
        } else {
            // line 34
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->truncateText($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "html", null, true);
            echo "
";
        }
        
        $__internal_7652bbdeb42f70c7f740b2e77e2a2f2f716f7c259f2a3ee4a8c6ba90fcd9be5f->leave($__internal_7652bbdeb42f70c7f740b2e77e2a2f2f716f7c259f2a3ee4a8c6ba90fcd9be5f_prof);

        
        $__internal_764d67fd7051768bb2da1884d467a47d504354832c64ab49c6e7f787d007eb43->leave($__internal_764d67fd7051768bb2da1884d467a47d504354832c64ab49c6e7f787d007eb43_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_association.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 34,  109 => 32,  107 => 31,  101 => 28,  98 => 27,  92 => 24,  89 => 23,  85 => 21,  79 => 19,  76 => 18,  74 => 17,  71 => 16,  64 => 14,  58 => 12,  50 => 10,  47 => 9,  45 => 8,  42 => 7,  38 => 6,  33 => 5,  30 => 4,  27 => 3,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# a *-to-many collection of values #}
{% if value is iterable %}
    {% if 'show' == view %}
        {% if value|length > 0 %}
            <ul class=\"{{ value|length < 2 ? 'inline' }}\">
                {% for item in value|slice(0, easyadmin_config('show.max_results')) %}
                    <li>
                        {% if link_parameters is defined %}
                            {% set primary_key_value = attribute(item, link_parameters.primary_key_name) %}
                            <a href=\"{{ path('easyadmin', link_parameters|merge({ id: primary_key_value, referer: '' })) }}\">{{ item }}</a>
                        {% else %}
                            {{ item }}
                        {% endif %}
                    </li>
                {% endfor %}

                {% set _remaining_items = value|length - easyadmin_config('show.max_results') %}
                {% if _remaining_items > 0 %}
                    <li class=\"remaining-items\">({{ 'show.remaining_items'|transchoice(_remaining_items, {}, 'EasyAdminBundle') }})</li>
                {% endif %}
            </ul>
        {% else %}
            <div class=\"empty collection-empty\">
                {{ include(entity_config.templates.label_empty) }}
            </div>
        {% endif %}
    {% elseif 'list' == view %}
        <span class=\"badge\">{{ value|length }}</span>
    {% endif %}
{# a simple *-to-one value associated with an entity managed by this backend #}
{% elseif link_parameters is defined %}
    <a href=\"{{ path('easyadmin', link_parameters|merge({ referer: '' })) }}\">{{ value|easyadmin_truncate }}</a>
{% else %}
    {{ value|easyadmin_truncate }}
{% endif %}
", "EasyAdminBundle:default:field_association.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\javiereguiluz\\easyadmin-bundle\\Resources\\views\\default\\field_association.html.twig");
    }
}
