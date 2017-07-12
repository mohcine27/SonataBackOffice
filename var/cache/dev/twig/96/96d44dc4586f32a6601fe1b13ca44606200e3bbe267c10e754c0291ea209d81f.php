<?php

/* EasyAdminBundle:default:paginator.html.twig */
class __TwigTemplate_d3ba23b0ff33725d57942773f4b5df131155359013a76052af1b8646cd139bd9 extends Twig_Template
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
        $__internal_f694e6f32bc2702be5223457354b005947dd27f56fc896b8dcbff83f9d7822e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f694e6f32bc2702be5223457354b005947dd27f56fc896b8dcbff83f9d7822e0->enter($__internal_f694e6f32bc2702be5223457354b005947dd27f56fc896b8dcbff83f9d7822e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:paginator.html.twig"));

        $__internal_887042b3d14457c55658dbc34fb8a75acaa2bb9ca1d62a66fe7380c441d64abe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_887042b3d14457c55658dbc34fb8a75acaa2bb9ca1d62a66fe7380c441d64abe->enter($__internal_887042b3d14457c55658dbc34fb8a75acaa2bb9ca1d62a66fe7380c441d64abe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:paginator.html.twig"));

        // line 2
        echo "
";
        // line 3
        $context["_paginator_request_parameters"] = twig_array_merge((isset($context["_request_parameters"]) ? $context["_request_parameters"] : $this->getContext($context, "_request_parameters")), array("referer" => null));
        // line 4
        echo "
";
        // line 5
        if ($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "haveToPaginate", array())) {
            // line 6
            echo "    <div class=\"list-pagination\">
        <div class=\"row\">
            <div class=\"col-sm-3 hidden-xs\" class=\"list-pagination-counter\">
                ";
            // line 9
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("paginator.counter", array("%start%" => $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "currentPageOffsetStart", array()), "%end%" => $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "currentPageOffsetEnd", array()), "%results%" => $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "nbResults", array())), "EasyAdminBundle");
            echo "
            </div>

            <div class=\"col-xs-12 col-sm-9\">
                <ul class=\"pagination list-pagination-paginator ";
            // line 13
            echo (((1 == $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "currentPage", array()))) ? ("first-page") : (""));
            echo " ";
            echo (($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "hasNextPage", array())) ? ("") : ("last-page"));
            echo "\">
                    ";
            // line 14
            if ((1 == $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "currentPage", array()))) {
                // line 15
                echo "                        <li class=\"disabled\">
                            <span>
                                <i class=\"fa fa-angle-double-left\"></i> ";
                // line 17
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("paginator.first", array(), "EasyAdminBundle"), "html", null, true);
                echo "
                            </span>
                        </li>
                    ";
            } else {
                // line 21
                echo "                        <li>
                            <a href=\"";
                // line 22
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin", twig_array_merge((isset($context["_paginator_request_parameters"]) ? $context["_paginator_request_parameters"] : $this->getContext($context, "_paginator_request_parameters")), array("page" => 1))), "html", null, true);
                echo "\">
                                <i class=\"fa fa-angle-double-left\"></i> ";
                // line 23
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("paginator.first", array(), "EasyAdminBundle"), "html", null, true);
                echo "
                            </a>
                        </li>
                    ";
            }
            // line 27
            echo "
                    ";
            // line 28
            if ($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "hasPreviousPage", array())) {
                // line 29
                echo "                        <li>
                            <a href=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin", twig_array_merge((isset($context["_paginator_request_parameters"]) ? $context["_paginator_request_parameters"] : $this->getContext($context, "_paginator_request_parameters")), array("page" => $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "previousPage", array())))), "html", null, true);
                echo "\">
                                <i class=\"fa fa-angle-left\"></i> ";
                // line 31
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("paginator.previous", array(), "EasyAdminBundle"), "html", null, true);
                echo "
                            </a>
                        </li>
                    ";
            } else {
                // line 35
                echo "                        <li class=\"disabled\">
                            <span>
                                <i class=\"fa fa-angle-left\"></i> ";
                // line 37
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("paginator.previous", array(), "EasyAdminBundle"), "html", null, true);
                echo "
                            </span>
                        </li>
                    ";
            }
            // line 41
            echo "
                    ";
            // line 42
            if ($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "hasNextPage", array())) {
                // line 43
                echo "                        <li>
                            <a href=\"";
                // line 44
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin", twig_array_merge((isset($context["_paginator_request_parameters"]) ? $context["_paginator_request_parameters"] : $this->getContext($context, "_paginator_request_parameters")), array("page" => $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "nextPage", array())))), "html", null, true);
                echo "\">
                                ";
                // line 45
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("paginator.next", array(), "EasyAdminBundle"), "html", null, true);
                echo " <i class=\"fa fa-angle-right\"></i>
                            </a>
                        </li>
                    ";
            } else {
                // line 49
                echo "                        <li class=\"disabled\">
                            <span>
                                ";
                // line 51
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("paginator.next", array(), "EasyAdminBundle"), "html", null, true);
                echo " <i class=\"fa fa-angle-right\"></i>
                            </span>
                        </li>
                    ";
            }
            // line 55
            echo "
                    ";
            // line 56
            if (($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "currentPage", array()) < $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "nbPages", array()))) {
                // line 57
                echo "                        <li>
                            <a href=\"";
                // line 58
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin", twig_array_merge((isset($context["_paginator_request_parameters"]) ? $context["_paginator_request_parameters"] : $this->getContext($context, "_paginator_request_parameters")), array("page" => $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "nbPages", array())))), "html", null, true);
                echo "\">
                                ";
                // line 59
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("paginator.last", array(), "EasyAdminBundle"), "html", null, true);
                echo " <i class=\"fa fa-angle-double-right\"></i>
                            </a>
                        </li>
                    ";
            } else {
                // line 63
                echo "                        <li class=\"disabled\">
                            <span>
                                ";
                // line 65
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("paginator.last", array(), "EasyAdminBundle"), "html", null, true);
                echo " <i class=\"fa fa-angle-double-right\"></i>
                            </span>
                        </li>
                    ";
            }
            // line 69
            echo "                </ul>
            </div>
        </div>
    </div>
";
        }
        
        $__internal_f694e6f32bc2702be5223457354b005947dd27f56fc896b8dcbff83f9d7822e0->leave($__internal_f694e6f32bc2702be5223457354b005947dd27f56fc896b8dcbff83f9d7822e0_prof);

        
        $__internal_887042b3d14457c55658dbc34fb8a75acaa2bb9ca1d62a66fe7380c441d64abe->leave($__internal_887042b3d14457c55658dbc34fb8a75acaa2bb9ca1d62a66fe7380c441d64abe_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:paginator.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 69,  163 => 65,  159 => 63,  152 => 59,  148 => 58,  145 => 57,  143 => 56,  140 => 55,  133 => 51,  129 => 49,  122 => 45,  118 => 44,  115 => 43,  113 => 42,  110 => 41,  103 => 37,  99 => 35,  92 => 31,  88 => 30,  85 => 29,  83 => 28,  80 => 27,  73 => 23,  69 => 22,  66 => 21,  59 => 17,  55 => 15,  53 => 14,  47 => 13,  40 => 9,  35 => 6,  33 => 5,  30 => 4,  28 => 3,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'EasyAdminBundle' %}

{% set _paginator_request_parameters = _request_parameters|merge({'referer': null}) %}

{% if paginator.haveToPaginate %}
    <div class=\"list-pagination\">
        <div class=\"row\">
            <div class=\"col-sm-3 hidden-xs\" class=\"list-pagination-counter\">
                {{ 'paginator.counter'|trans({ '%start%': paginator.currentPageOffsetStart, '%end%': paginator.currentPageOffsetEnd, '%results%': paginator.nbResults})|raw }}
            </div>

            <div class=\"col-xs-12 col-sm-9\">
                <ul class=\"pagination list-pagination-paginator {{ 1 == paginator.currentPage ? 'first-page' : '' }} {{ paginator.hasNextPage ? '' : 'last-page' }}\">
                    {% if 1 == paginator.currentPage %}
                        <li class=\"disabled\">
                            <span>
                                <i class=\"fa fa-angle-double-left\"></i> {{ 'paginator.first'|trans }}
                            </span>
                        </li>
                    {% else %}
                        <li>
                            <a href=\"{{ path('easyadmin', _paginator_request_parameters|merge({ page: 1 }) ) }}\">
                                <i class=\"fa fa-angle-double-left\"></i> {{ 'paginator.first'|trans }}
                            </a>
                        </li>
                    {% endif %}

                    {% if paginator.hasPreviousPage %}
                        <li>
                            <a href=\"{{ path('easyadmin', _paginator_request_parameters|merge({ page: paginator.previousPage }) ) }}\">
                                <i class=\"fa fa-angle-left\"></i> {{ 'paginator.previous'|trans }}
                            </a>
                        </li>
                    {% else %}
                        <li class=\"disabled\">
                            <span>
                                <i class=\"fa fa-angle-left\"></i> {{ 'paginator.previous'|trans }}
                            </span>
                        </li>
                    {% endif %}

                    {% if paginator.hasNextPage %}
                        <li>
                            <a href=\"{{ path('easyadmin', _paginator_request_parameters|merge({ page: paginator.nextPage }) ) }}\">
                                {{ 'paginator.next'|trans }} <i class=\"fa fa-angle-right\"></i>
                            </a>
                        </li>
                    {% else %}
                        <li class=\"disabled\">
                            <span>
                                {{ 'paginator.next'|trans }} <i class=\"fa fa-angle-right\"></i>
                            </span>
                        </li>
                    {% endif %}

                    {% if paginator.currentPage < paginator.nbPages %}
                        <li>
                            <a href=\"{{ path('easyadmin', _paginator_request_parameters|merge({ page: paginator.nbPages }) ) }}\">
                                {{ 'paginator.last'|trans }} <i class=\"fa fa-angle-double-right\"></i>
                            </a>
                        </li>
                    {% else %}
                        <li class=\"disabled\">
                            <span>
                                {{ 'paginator.last'|trans }} <i class=\"fa fa-angle-double-right\"></i>
                            </span>
                        </li>
                    {% endif %}
                </ul>
            </div>
        </div>
    </div>
{% endif %}
", "EasyAdminBundle:default:paginator.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\javiereguiluz\\easyadmin-bundle\\Resources\\views\\default\\paginator.html.twig");
    }
}
