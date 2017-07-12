<?php

/* AppBundle:Group:show.html.twig */
class __TwigTemplate_ab023ec7e6b202986511d3d0aa112e6cb9f4e3050a051e3325679471e928cd8c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AppBundle:Group:show.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_302fed243bda73d9e1a7be76f30905941d0ea79a38200d4a4ce01b65e59ed99b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_302fed243bda73d9e1a7be76f30905941d0ea79a38200d4a4ce01b65e59ed99b->enter($__internal_302fed243bda73d9e1a7be76f30905941d0ea79a38200d4a4ce01b65e59ed99b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Group:show.html.twig"));

        $__internal_110ac1def73c6979b16d26aa542eff9ffe3ec930d12fbf60d035f7676586b1df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_110ac1def73c6979b16d26aa542eff9ffe3ec930d12fbf60d035f7676586b1df->enter($__internal_110ac1def73c6979b16d26aa542eff9ffe3ec930d12fbf60d035f7676586b1df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_302fed243bda73d9e1a7be76f30905941d0ea79a38200d4a4ce01b65e59ed99b->leave($__internal_302fed243bda73d9e1a7be76f30905941d0ea79a38200d4a4ce01b65e59ed99b_prof);

        
        $__internal_110ac1def73c6979b16d26aa542eff9ffe3ec930d12fbf60d035f7676586b1df->leave($__internal_110ac1def73c6979b16d26aa542eff9ffe3ec930d12fbf60d035f7676586b1df_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_fce21a965b91a3fe82c66e3238c1a6905e3248ae8c9dd983cdd48b748bde3de8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fce21a965b91a3fe82c66e3238c1a6905e3248ae8c9dd983cdd48b748bde3de8->enter($__internal_fce21a965b91a3fe82c66e3238c1a6905e3248ae8c9dd983cdd48b748bde3de8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_95f44fd3a6adffc8aaf06bc614d2359a2e89a5c612c4053bef3cb007fe141e04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95f44fd3a6adffc8aaf06bc614d2359a2e89a5c612c4053bef3cb007fe141e04->enter($__internal_95f44fd3a6adffc8aaf06bc614d2359a2e89a5c612c4053bef3cb007fe141e04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_95f44fd3a6adffc8aaf06bc614d2359a2e89a5c612c4053bef3cb007fe141e04->leave($__internal_95f44fd3a6adffc8aaf06bc614d2359a2e89a5c612c4053bef3cb007fe141e04_prof);

        
        $__internal_fce21a965b91a3fe82c66e3238c1a6905e3248ae8c9dd983cdd48b748bde3de8->leave($__internal_fce21a965b91a3fe82c66e3238c1a6905e3248ae8c9dd983cdd48b748bde3de8_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c35c461dd3c7b6aea7891d85592f56baee46b1ab832c52c63df329d8e3cdaabf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c35c461dd3c7b6aea7891d85592f56baee46b1ab832c52c63df329d8e3cdaabf->enter($__internal_c35c461dd3c7b6aea7891d85592f56baee46b1ab832c52c63df329d8e3cdaabf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_66c9544ad1ca180e59a4157c2596f0bbfe6bcba30634fe68f25252825e6a214f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66c9544ad1ca180e59a4157c2596f0bbfe6bcba30634fe68f25252825e6a214f->enter($__internal_66c9544ad1ca180e59a4157c2596f0bbfe6bcba30634fe68f25252825e6a214f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "\t";
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "AppBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_66c9544ad1ca180e59a4157c2596f0bbfe6bcba30634fe68f25252825e6a214f->leave($__internal_66c9544ad1ca180e59a4157c2596f0bbfe6bcba30634fe68f25252825e6a214f_prof);

        
        $__internal_c35c461dd3c7b6aea7891d85592f56baee46b1ab832c52c63df329d8e3cdaabf->leave($__internal_c35c461dd3c7b6aea7891d85592f56baee46b1ab832c52c63df329d8e3cdaabf_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Group:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 4,  50 => 3,  41 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}
{% block body %}
{% block fos_user_content %}
\t{% include \"FOSUserBundle:Group:show_content.html.twig\" %}
{% endblock fos_user_content %}
{% endblock body %}", "AppBundle:Group:show.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\src\\AppBundle\\Resources\\views\\Group\\show.html.twig");
    }
}
