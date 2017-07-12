<?php

/* EasyAdminBundle:default:menu.html.twig */
class __TwigTemplate_5cef923c32cfa5503fe7f380918a424b11219b9d446a2c3dfc6bc2068c3f255b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'main_menu_before' => array($this, 'block_main_menu_before'),
            'main_menu' => array($this, 'block_main_menu'),
            'main_menu_after' => array($this, 'block_main_menu_after'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ea133799dcbb1da19f73f1f7440a6d1c0e7d35bbe9bae7d06e6d0fb8da3e9f05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea133799dcbb1da19f73f1f7440a6d1c0e7d35bbe9bae7d06e6d0fb8da3e9f05->enter($__internal_ea133799dcbb1da19f73f1f7440a6d1c0e7d35bbe9bae7d06e6d0fb8da3e9f05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:menu.html.twig"));

        $__internal_6838454d9e419b3a10a6817b1bafe76cfb046655e316ceea9adc788f15ad5590 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6838454d9e419b3a10a6817b1bafe76cfb046655e316ceea9adc788f15ad5590->enter($__internal_6838454d9e419b3a10a6817b1bafe76cfb046655e316ceea9adc788f15ad5590_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:menu.html.twig"));

        // line 28
        echo "
";
        // line 29
        $context["helper"] = $this;
        // line 30
        echo "
";
        // line 31
        $this->displayBlock('main_menu_before', $context, $blocks);
        // line 32
        echo "
<ul class=\"sidebar-menu\">
    ";
        // line 34
        $this->displayBlock('main_menu', $context, $blocks);
        // line 51
        echo "</ul>

";
        // line 53
        $this->displayBlock('main_menu_after', $context, $blocks);
        
        $__internal_ea133799dcbb1da19f73f1f7440a6d1c0e7d35bbe9bae7d06e6d0fb8da3e9f05->leave($__internal_ea133799dcbb1da19f73f1f7440a6d1c0e7d35bbe9bae7d06e6d0fb8da3e9f05_prof);

        
        $__internal_6838454d9e419b3a10a6817b1bafe76cfb046655e316ceea9adc788f15ad5590->leave($__internal_6838454d9e419b3a10a6817b1bafe76cfb046655e316ceea9adc788f15ad5590_prof);

    }

    // line 31
    public function block_main_menu_before($context, array $blocks = array())
    {
        $__internal_274ac01d318366ec949028ebc277175d05a9262f819623aa16ccda25ec0d5447 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_274ac01d318366ec949028ebc277175d05a9262f819623aa16ccda25ec0d5447->enter($__internal_274ac01d318366ec949028ebc277175d05a9262f819623aa16ccda25ec0d5447_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_before"));

        $__internal_6cd29d05a69916c72b059511e401fc0eae012fd8c78d7f35c22cc930e3bddaac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cd29d05a69916c72b059511e401fc0eae012fd8c78d7f35c22cc930e3bddaac->enter($__internal_6cd29d05a69916c72b059511e401fc0eae012fd8c78d7f35c22cc930e3bddaac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_before"));

        
        $__internal_6cd29d05a69916c72b059511e401fc0eae012fd8c78d7f35c22cc930e3bddaac->leave($__internal_6cd29d05a69916c72b059511e401fc0eae012fd8c78d7f35c22cc930e3bddaac_prof);

        
        $__internal_274ac01d318366ec949028ebc277175d05a9262f819623aa16ccda25ec0d5447->leave($__internal_274ac01d318366ec949028ebc277175d05a9262f819623aa16ccda25ec0d5447_prof);

    }

    // line 34
    public function block_main_menu($context, array $blocks = array())
    {
        $__internal_81d742bfa83a396372cf027d4caeeb0d972a3bc0b91668429cb4dc70ed7806e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81d742bfa83a396372cf027d4caeeb0d972a3bc0b91668429cb4dc70ed7806e2->enter($__internal_81d742bfa83a396372cf027d4caeeb0d972a3bc0b91668429cb4dc70ed7806e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu"));

        $__internal_b04e2535027d34d56e8b7fe89c265ed5bb7cc977196976168c33c6d4cb7836b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b04e2535027d34d56e8b7fe89c265ed5bb7cc977196976168c33c6d4cb7836b1->enter($__internal_b04e2535027d34d56e8b7fe89c265ed5bb7cc977196976168c33c6d4cb7836b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu"));

        // line 35
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.menu"));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 36
            echo "            <li class=\"";
            echo ((($this->getAttribute($context["item"], "type", array()) == "divider")) ? ("header") : (""));
            echo " ";
            echo (( !twig_test_empty($this->getAttribute($context["item"], "children", array()))) ? ("treeview") : (""));
            echo " ";
            echo ((((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "menuIndex"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "menuIndex"), "method"),  -1)) : ( -1)) == $this->getAttribute($context["loop"], "index0", array()))) ? ("active") : (""));
            echo " ";
            echo ((((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "submenuIndex"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "submenuIndex"), "method"),  -1)) : ( -1)) !=  -1)) ? ("submenu-active") : (""));
            echo "\">
                ";
            // line 37
            echo $context["helper"]->getrender_menu_item($context["item"], (($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "translation_domain", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "translation_domain", array()), "messages")) : ("messages")));
            echo "

                ";
            // line 39
            if ( !twig_test_empty((($this->getAttribute($context["item"], "children", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "children", array()), array())) : (array())))) {
                // line 40
                echo "                    <ul class=\"treeview-menu\">
                        ";
                // line 41
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "children", array()));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["subitem"]) {
                    // line 42
                    echo "                            <li class=\"";
                    echo ((($this->getAttribute($context["subitem"], "type", array()) == "divider")) ? ("header") : (""));
                    echo " ";
                    echo (((((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "menuIndex"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "menuIndex"), "method"),  -1)) : ( -1)) == $this->getAttribute($this->getAttribute($this->getAttribute($context["loop"], "parent", array()), "loop", array()), "index0", array())) && ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "submenuIndex"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "submenuIndex"), "method"),  -1)) : ( -1)) == $this->getAttribute($context["loop"], "index0", array())))) ? ("active") : (""));
                    echo "\">
                                ";
                    // line 43
                    echo $context["helper"]->getrender_menu_item($context["subitem"], (($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "translation_domain", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "translation_domain", array()), "messages")) : ("messages")));
                    echo "
                            </li>
                        ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subitem'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 46
                echo "                    </ul>
                ";
            }
            // line 48
            echo "            </li>
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "    ";
        
        $__internal_b04e2535027d34d56e8b7fe89c265ed5bb7cc977196976168c33c6d4cb7836b1->leave($__internal_b04e2535027d34d56e8b7fe89c265ed5bb7cc977196976168c33c6d4cb7836b1_prof);

        
        $__internal_81d742bfa83a396372cf027d4caeeb0d972a3bc0b91668429cb4dc70ed7806e2->leave($__internal_81d742bfa83a396372cf027d4caeeb0d972a3bc0b91668429cb4dc70ed7806e2_prof);

    }

    // line 53
    public function block_main_menu_after($context, array $blocks = array())
    {
        $__internal_fcfbfbe5793335f6f5df0d575e6d0998d5c532488b47a63297cce696ea141334 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcfbfbe5793335f6f5df0d575e6d0998d5c532488b47a63297cce696ea141334->enter($__internal_fcfbfbe5793335f6f5df0d575e6d0998d5c532488b47a63297cce696ea141334_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_after"));

        $__internal_f5f2f2fbeaab475ece4a324d834fe86a359b3eb151c838e9b5f5ef18506efe9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5f2f2fbeaab475ece4a324d834fe86a359b3eb151c838e9b5f5ef18506efe9e->enter($__internal_f5f2f2fbeaab475ece4a324d834fe86a359b3eb151c838e9b5f5ef18506efe9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_after"));

        
        $__internal_f5f2f2fbeaab475ece4a324d834fe86a359b3eb151c838e9b5f5ef18506efe9e->leave($__internal_f5f2f2fbeaab475ece4a324d834fe86a359b3eb151c838e9b5f5ef18506efe9e_prof);

        
        $__internal_fcfbfbe5793335f6f5df0d575e6d0998d5c532488b47a63297cce696ea141334->leave($__internal_fcfbfbe5793335f6f5df0d575e6d0998d5c532488b47a63297cce696ea141334_prof);

    }

    // line 1
    public function getrender_menu_item($__item__ = null, $__translation_domain__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "item" => $__item__,
            "translation_domain" => $__translation_domain__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_69712aa07bb37864e4434306317ffc127213d376a9964556aff276b0b8719d98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_69712aa07bb37864e4434306317ffc127213d376a9964556aff276b0b8719d98->enter($__internal_69712aa07bb37864e4434306317ffc127213d376a9964556aff276b0b8719d98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_menu_item"));

            $__internal_e9a91903e4d85a200cb77eb96f71956f00bfd07cf3298869610b3cf6d680fb45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_e9a91903e4d85a200cb77eb96f71956f00bfd07cf3298869610b3cf6d680fb45->enter($__internal_e9a91903e4d85a200cb77eb96f71956f00bfd07cf3298869610b3cf6d680fb45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_menu_item"));

            // line 2
            echo "    ";
            if (($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "type", array()) == "divider")) {
                // line 3
                echo "        ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "label", array()), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
                echo "
    ";
            } else {
                // line 5
                echo "        ";
                $context["menu_params"] = array("menuIndex" => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "menu_index", array()), "submenuIndex" => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "submenu_index", array()));
                // line 6
                echo "        ";
                $context["path"] = ((($this->getAttribute(                // line 7
(isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "type", array()) == "link")) ? ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "url", array())) : (((($this->getAttribute(                // line 8
(isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "type", array()) == "route")) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "route", array()), $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "params", array()))) : (((($this->getAttribute(                // line 9
(isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "type", array()) == "entity")) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin", twig_array_merge(twig_array_merge(array("entity" => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "entity", array()), "action" => "list"), (isset($context["menu_params"]) ? $context["menu_params"] : $this->getContext($context, "menu_params"))), $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "params", array())))) : (((($this->getAttribute(                // line 10
(isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "type", array()) == "empty")) ? ("#") : (""))))))));
                // line 12
                echo "
        ";
                // line 17
                echo "        ";
                if ((($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "type", array()) == "route") && (is_string($__internal_387a9c2a66cab1ee7b06aad7e67501c157ea27c96b0e7627b7e7ee67f667bb16 = (isset($context["path"]) ? $context["path"] : $this->getContext($context, "path"))) && is_string($__internal_f27750b04739da55326b92430594223e6d0033a3568dc30325d9a2b8669dd771 = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin")) && ('' === $__internal_f27750b04739da55326b92430594223e6d0033a3568dc30325d9a2b8669dd771 || 0 === strpos($__internal_387a9c2a66cab1ee7b06aad7e67501c157ea27c96b0e7627b7e7ee67f667bb16, $__internal_f27750b04739da55326b92430594223e6d0033a3568dc30325d9a2b8669dd771))))) {
                    // line 18
                    echo "            ";
                    $context["path"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "route", array()), twig_array_merge((isset($context["menu_params"]) ? $context["menu_params"] : $this->getContext($context, "menu_params")), $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "params", array())));
                    // line 19
                    echo "        ";
                }
                // line 20
                echo "
        <a href=\"";
                // line 21
                echo twig_escape_filter($this->env, (isset($context["path"]) ? $context["path"] : $this->getContext($context, "path")), "html", null, true);
                echo "\" ";
                if ((($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "target", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "target", array()), false)) : (false))) {
                    echo "target=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "target", array()), "html", null, true);
                    echo "\"";
                }
                echo ">
            ";
                // line 22
                if ( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "icon", array()))) {
                    echo "<i class=\"fa ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "icon", array()), "html", null, true);
                    echo "\"></i>";
                }
                // line 23
                echo "            <span>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "label", array()), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
                echo "</span>
            ";
                // line 24
                if ( !twig_test_empty((($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "children", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "children", array()), array())) : (array())))) {
                    echo "<i class=\"fa fa-angle-left pull-right\"></i>";
                }
                // line 25
                echo "        </a>
    ";
            }
            
            $__internal_e9a91903e4d85a200cb77eb96f71956f00bfd07cf3298869610b3cf6d680fb45->leave($__internal_e9a91903e4d85a200cb77eb96f71956f00bfd07cf3298869610b3cf6d680fb45_prof);

            
            $__internal_69712aa07bb37864e4434306317ffc127213d376a9964556aff276b0b8719d98->leave($__internal_69712aa07bb37864e4434306317ffc127213d376a9964556aff276b0b8719d98_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  288 => 25,  284 => 24,  279 => 23,  273 => 22,  263 => 21,  260 => 20,  257 => 19,  254 => 18,  251 => 17,  248 => 12,  246 => 10,  245 => 9,  244 => 8,  243 => 7,  241 => 6,  238 => 5,  232 => 3,  229 => 2,  210 => 1,  193 => 53,  183 => 50,  168 => 48,  164 => 46,  147 => 43,  140 => 42,  123 => 41,  120 => 40,  118 => 39,  113 => 37,  102 => 36,  84 => 35,  75 => 34,  58 => 31,  48 => 53,  44 => 51,  42 => 34,  38 => 32,  36 => 31,  33 => 30,  31 => 29,  28 => 28,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% macro render_menu_item(item, translation_domain) %}
    {% if item.type == 'divider' %}
        {{ item.label|trans(domain = translation_domain) }}
    {% else %}
        {% set menu_params = { menuIndex: item.menu_index, submenuIndex: item.submenu_index } %}
        {% set path =
            item.type == 'link' ? item.url :
            item.type == 'route' ? path(item.route, item.params) :
            item.type == 'entity' ? path('easyadmin', { entity: item.entity, action: 'list' }|merge(menu_params)|merge(item.params)) :
            item.type == 'empty' ? '#' : ''
        %}

        {# if the URL generated for the route belongs to the backend, regenerate
           the URL to include the menu_params to display the selected menu item
           (this is checked comparing the beginning of the route URL with the backend homepage URL)
        #}
        {% if item.type == 'route' and (path starts with path('easyadmin')) %}
            {% set path = path(item.route, menu_params|merge(item.params)) %}
        {% endif %}

        <a href=\"{{ path }}\" {% if item.target|default(false) %}target=\"{{ item.target }}\"{% endif %}>
            {% if item.icon is not empty %}<i class=\"fa {{ item.icon }}\"></i>{% endif %}
            <span>{{ item.label|trans(domain = translation_domain) }}</span>
            {% if item.children|default([]) is not empty %}<i class=\"fa fa-angle-left pull-right\"></i>{% endif %}
        </a>
    {% endif %}
{% endmacro %}

{% import _self as helper %}

{% block main_menu_before %}{% endblock %}

<ul class=\"sidebar-menu\">
    {% block main_menu %}
        {% for item in easyadmin_config('design.menu') %}
            <li class=\"{{ item.type == 'divider' ? 'header' }} {{ item.children is not empty ? 'treeview' }} {{ app.request.query.get('menuIndex')|default(-1) == loop.index0 ? 'active' }} {{ app.request.query.get('submenuIndex')|default(-1) != -1 ? 'submenu-active' }}\">
                {{ helper.render_menu_item(item, _entity_config.translation_domain|default('messages')) }}

                {% if item.children|default([]) is not empty %}
                    <ul class=\"treeview-menu\">
                        {% for subitem in item.children %}
                            <li class=\"{{ subitem.type == 'divider' ? 'header' }} {{ app.request.query.get('menuIndex')|default(-1) == loop.parent.loop.index0 and app.request.query.get('submenuIndex')|default(-1) == loop.index0 ? 'active' }}\">
                                {{ helper.render_menu_item(subitem, _entity_config.translation_domain|default('messages')) }}
                            </li>
                        {% endfor %}
                    </ul>
                {% endif %}
            </li>
        {% endfor %}
    {% endblock main_menu %}
</ul>

{% block main_menu_after %}{% endblock %}
", "EasyAdminBundle:default:menu.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\javiereguiluz\\easyadmin-bundle\\Resources\\views\\default\\menu.html.twig");
    }
}
