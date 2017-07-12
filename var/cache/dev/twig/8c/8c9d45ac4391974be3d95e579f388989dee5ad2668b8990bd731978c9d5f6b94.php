<?php

/* SonataBlockBundle:Block:block_container.html.twig */
class __TwigTemplate_ea6ab5e8b6fd4aacf7106cfb7438e2e9fdd8368142ecf4b5a0684e5c680eeb51 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block_class' => array($this, 'block_block_class'),
            'block_role' => array($this, 'block_block_role'),
            'block' => array($this, 'block_block'),
            'block_child_render' => array($this, 'block_block_child_render'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_container.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_10c623832a79a2d03cf1d7428c3190c84421b9c216b92eceafd19cd314f9bb97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10c623832a79a2d03cf1d7428c3190c84421b9c216b92eceafd19cd314f9bb97->enter($__internal_10c623832a79a2d03cf1d7428c3190c84421b9c216b92eceafd19cd314f9bb97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_container.html.twig"));

        $__internal_27aa09c7cd0309289a5d8bae517d1cc0491e2c6fb33372a6f48d9ad44cad9f96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27aa09c7cd0309289a5d8bae517d1cc0491e2c6fb33372a6f48d9ad44cad9f96->enter($__internal_27aa09c7cd0309289a5d8bae517d1cc0491e2c6fb33372a6f48d9ad44cad9f96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_container.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_10c623832a79a2d03cf1d7428c3190c84421b9c216b92eceafd19cd314f9bb97->leave($__internal_10c623832a79a2d03cf1d7428c3190c84421b9c216b92eceafd19cd314f9bb97_prof);

        
        $__internal_27aa09c7cd0309289a5d8bae517d1cc0491e2c6fb33372a6f48d9ad44cad9f96->leave($__internal_27aa09c7cd0309289a5d8bae517d1cc0491e2c6fb33372a6f48d9ad44cad9f96_prof);

    }

    // line 15
    public function block_block_class($context, array $blocks = array())
    {
        $__internal_98f9b95f20b7ad8b51f1ac86f59381324068f63afe6893ed1a37b03e4b18a736 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98f9b95f20b7ad8b51f1ac86f59381324068f63afe6893ed1a37b03e4b18a736->enter($__internal_98f9b95f20b7ad8b51f1ac86f59381324068f63afe6893ed1a37b03e4b18a736_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_class"));

        $__internal_23e719492f8860a9b2c6e4fd741d2465c04d535b01de1138b31c99c256ef0267 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23e719492f8860a9b2c6e4fd741d2465c04d535b01de1138b31c99c256ef0267->enter($__internal_23e719492f8860a9b2c6e4fd741d2465c04d535b01de1138b31c99c256ef0267_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_class"));

        echo " cms-container";
        if ( !$this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "hasParent", array(), "method")) {
            echo " cms-container-root";
        }
        if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "class", array())) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "class", array()), "html", null, true);
        }
        
        $__internal_23e719492f8860a9b2c6e4fd741d2465c04d535b01de1138b31c99c256ef0267->leave($__internal_23e719492f8860a9b2c6e4fd741d2465c04d535b01de1138b31c99c256ef0267_prof);

        
        $__internal_98f9b95f20b7ad8b51f1ac86f59381324068f63afe6893ed1a37b03e4b18a736->leave($__internal_98f9b95f20b7ad8b51f1ac86f59381324068f63afe6893ed1a37b03e4b18a736_prof);

    }

    // line 18
    public function block_block_role($context, array $blocks = array())
    {
        $__internal_82f3778bee1bbfa6b419e1937a29f2abd143dc47c24416f499da4d1e2e482f74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82f3778bee1bbfa6b419e1937a29f2abd143dc47c24416f499da4d1e2e482f74->enter($__internal_82f3778bee1bbfa6b419e1937a29f2abd143dc47c24416f499da4d1e2e482f74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_role"));

        $__internal_dd938cb5fa302267ad9c0c01c57c3ef9529de3a96ace39bc509ddad113e7e042 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd938cb5fa302267ad9c0c01c57c3ef9529de3a96ace39bc509ddad113e7e042->enter($__internal_dd938cb5fa302267ad9c0c01c57c3ef9529de3a96ace39bc509ddad113e7e042_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_role"));

        echo "container";
        
        $__internal_dd938cb5fa302267ad9c0c01c57c3ef9529de3a96ace39bc509ddad113e7e042->leave($__internal_dd938cb5fa302267ad9c0c01c57c3ef9529de3a96ace39bc509ddad113e7e042_prof);

        
        $__internal_82f3778bee1bbfa6b419e1937a29f2abd143dc47c24416f499da4d1e2e482f74->leave($__internal_82f3778bee1bbfa6b419e1937a29f2abd143dc47c24416f499da4d1e2e482f74_prof);

    }

    // line 21
    public function block_block($context, array $blocks = array())
    {
        $__internal_e6157390d6c53474f485e6b3293c434c6964f9ba152640afc1be4b32e1be05ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6157390d6c53474f485e6b3293c434c6964f9ba152640afc1be4b32e1be05ee->enter($__internal_e6157390d6c53474f485e6b3293c434c6964f9ba152640afc1be4b32e1be05ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_d975f64e80459f0ab7c545951edc08fae50d5b87db045d5e9967813857e5a6d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d975f64e80459f0ab7c545951edc08fae50d5b87db045d5e9967813857e5a6d8->enter($__internal_d975f64e80459f0ab7c545951edc08fae50d5b87db045d5e9967813857e5a6d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 22
        echo "    ";
        if ((isset($context["decorator"]) ? $context["decorator"] : $this->getContext($context, "decorator"))) {
            echo $this->getAttribute((isset($context["decorator"]) ? $context["decorator"] : $this->getContext($context, "decorator")), "pre", array());
        }
        // line 23
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "children", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 24
            echo "        ";
            $this->displayBlock('block_child_render', $context, $blocks);
            // line 27
            echo "    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "    ";
        if ((isset($context["decorator"]) ? $context["decorator"] : $this->getContext($context, "decorator"))) {
            echo $this->getAttribute((isset($context["decorator"]) ? $context["decorator"] : $this->getContext($context, "decorator")), "post", array());
        }
        
        $__internal_d975f64e80459f0ab7c545951edc08fae50d5b87db045d5e9967813857e5a6d8->leave($__internal_d975f64e80459f0ab7c545951edc08fae50d5b87db045d5e9967813857e5a6d8_prof);

        
        $__internal_e6157390d6c53474f485e6b3293c434c6964f9ba152640afc1be4b32e1be05ee->leave($__internal_e6157390d6c53474f485e6b3293c434c6964f9ba152640afc1be4b32e1be05ee_prof);

    }

    // line 24
    public function block_block_child_render($context, array $blocks = array())
    {
        $__internal_00faf31c93f20e01f560370a7dd78785617973d64bb13ad5db9000eb891004df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00faf31c93f20e01f560370a7dd78785617973d64bb13ad5db9000eb891004df->enter($__internal_00faf31c93f20e01f560370a7dd78785617973d64bb13ad5db9000eb891004df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_child_render"));

        $__internal_5a2a2d70d213dc07b4dc48ccde0b25f06122294aa5b4ebb08e653d4fa3785f4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a2a2d70d213dc07b4dc48ccde0b25f06122294aa5b4ebb08e653d4fa3785f4b->enter($__internal_5a2a2d70d213dc07b4dc48ccde0b25f06122294aa5b4ebb08e653d4fa3785f4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_child_render"));

        // line 25
        echo "            ";
        echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child"))));
        echo "
        ";
        
        $__internal_5a2a2d70d213dc07b4dc48ccde0b25f06122294aa5b4ebb08e653d4fa3785f4b->leave($__internal_5a2a2d70d213dc07b4dc48ccde0b25f06122294aa5b4ebb08e653d4fa3785f4b_prof);

        
        $__internal_00faf31c93f20e01f560370a7dd78785617973d64bb13ad5db9000eb891004df->leave($__internal_00faf31c93f20e01f560370a7dd78785617973d64bb13ad5db9000eb891004df_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_container.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 25,  147 => 24,  134 => 28,  120 => 27,  117 => 24,  99 => 23,  94 => 22,  85 => 21,  67 => 18,  42 => 15,  21 => 12,);
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

{% extends sonata_block.templates.block_base %}

{# block classes are prepended with a container class #}
{% block block_class %} cms-container{% if not block.hasParent() %} cms-container-root{%endif%}{% if settings.class %} {{ settings.class }}{% endif %}{% endblock %}

{# identify a block role used by the page editor #}
{% block block_role %}container{% endblock %}

{# render container block #}
{% block block %}
    {% if decorator %}{{ decorator.pre|raw }}{% endif %}
    {% for child in block.children %}
        {% block block_child_render %}
            {{ sonata_block_render(child) }}
        {% endblock %}
    {% endfor %}
    {% if decorator %}{{ decorator.post|raw }}{% endif %}
{% endblock %}
", "SonataBlockBundle:Block:block_container.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\sonata-project\\block-bundle\\Resources\\views\\Block\\block_container.html.twig");
    }
}
