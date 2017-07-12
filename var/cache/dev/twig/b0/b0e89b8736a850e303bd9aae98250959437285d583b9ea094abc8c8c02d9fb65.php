<?php

/* SonataCoreBundle:Form:colorpicker.html.twig */
class __TwigTemplate_b02514a23b34ae9527a497167e7d00dd31cf930a11735ca2566c7ff072a49874 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sonata_type_color_selector_widget' => array($this, 'block_sonata_type_color_selector_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ad79aac28a5a6da7c6f11716ea093e4676bc245fd90a20eedcd9921943328790 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad79aac28a5a6da7c6f11716ea093e4676bc245fd90a20eedcd9921943328790->enter($__internal_ad79aac28a5a6da7c6f11716ea093e4676bc245fd90a20eedcd9921943328790_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataCoreBundle:Form:colorpicker.html.twig"));

        $__internal_a726461c33f018c3a9ac8605932aa50e7fbba62d8a915ea1dc13d9f70b637174 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a726461c33f018c3a9ac8605932aa50e7fbba62d8a915ea1dc13d9f70b637174->enter($__internal_a726461c33f018c3a9ac8605932aa50e7fbba62d8a915ea1dc13d9f70b637174_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataCoreBundle:Form:colorpicker.html.twig"));

        // line 11
        $this->displayBlock('sonata_type_color_selector_widget', $context, $blocks);
        
        $__internal_ad79aac28a5a6da7c6f11716ea093e4676bc245fd90a20eedcd9921943328790->leave($__internal_ad79aac28a5a6da7c6f11716ea093e4676bc245fd90a20eedcd9921943328790_prof);

        
        $__internal_a726461c33f018c3a9ac8605932aa50e7fbba62d8a915ea1dc13d9f70b637174->leave($__internal_a726461c33f018c3a9ac8605932aa50e7fbba62d8a915ea1dc13d9f70b637174_prof);

    }

    public function block_sonata_type_color_selector_widget($context, array $blocks = array())
    {
        $__internal_2c4ffa8672ed47abb82b574409d4333f3b9f56d28d1f7f7d48d700300aed087c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c4ffa8672ed47abb82b574409d4333f3b9f56d28d1f7f7d48d700300aed087c->enter($__internal_2c4ffa8672ed47abb82b574409d4333f3b9f56d28d1f7f7d48d700300aed087c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_color_selector_widget"));

        $__internal_48fa1734cc80b623b4275e31418aa526d68604b6b671184704e6ac2b86aab4da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48fa1734cc80b623b4275e31418aa526d68604b6b671184704e6ac2b86aab4da->enter($__internal_48fa1734cc80b623b4275e31418aa526d68604b6b671184704e6ac2b86aab4da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_color_selector_widget"));

        // line 12
        echo "    ";
        $this->displayBlock("choice_widget", $context, $blocks);
        echo "
    ";
        // line 13
        ob_start();
        // line 14
        echo "        <script type=\"text/javascript\">
            jQuery(function (\$) {
                var select2FormatColorSelect = function format(state) {
                    if (!state.id || state.disabled) {
                        return state.text;
                    }

                    return ' <i class=\"fa fa-square\" style=\"color: '+ state.id +'\"></i> ' + state.text;
                };

                \$('#";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "').select2({
                    formatResult:    select2FormatColorSelect,
                    formatSelection: select2FormatColorSelect,
                    width:           '100%',
                    escapeMarkup:    function(m) { return m; }
                });
            });
        </script>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_48fa1734cc80b623b4275e31418aa526d68604b6b671184704e6ac2b86aab4da->leave($__internal_48fa1734cc80b623b4275e31418aa526d68604b6b671184704e6ac2b86aab4da_prof);

        
        $__internal_2c4ffa8672ed47abb82b574409d4333f3b9f56d28d1f7f7d48d700300aed087c->leave($__internal_2c4ffa8672ed47abb82b574409d4333f3b9f56d28d1f7f7d48d700300aed087c_prof);

    }

    public function getTemplateName()
    {
        return "SonataCoreBundle:Form:colorpicker.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  63 => 24,  51 => 14,  49 => 13,  44 => 12,  26 => 11,);
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
{% block sonata_type_color_selector_widget %}
    {{ block('choice_widget') }}
    {% spaceless %}
        <script type=\"text/javascript\">
            jQuery(function (\$) {
                var select2FormatColorSelect = function format(state) {
                    if (!state.id || state.disabled) {
                        return state.text;
                    }

                    return ' <i class=\"fa fa-square\" style=\"color: '+ state.id +'\"></i> ' + state.text;
                };

                \$('#{{ id }}').select2({
                    formatResult:    select2FormatColorSelect,
                    formatSelection: select2FormatColorSelect,
                    width:           '100%',
                    escapeMarkup:    function(m) { return m; }
                });
            });
        </script>
    {% endspaceless %}
{% endblock sonata_type_color_selector_widget %}
", "SonataCoreBundle:Form:colorpicker.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\sonata-project\\core-bundle\\Resources\\views\\Form\\colorpicker.html.twig");
    }
}
