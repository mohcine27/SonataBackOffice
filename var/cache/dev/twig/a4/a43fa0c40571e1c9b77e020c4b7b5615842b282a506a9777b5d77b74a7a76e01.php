<?php

/* AppBundle:Admin:users.html.twig */
class __TwigTemplate_b22bc58ba977c0f770215dce62212aad735cb5dee9d2114f0eec373491ddba62 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "AppBundle:Admin:users.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9473d98523b3780d454e1beaada5aec965decbdf9dfb1ecab8d34530d5b0072e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9473d98523b3780d454e1beaada5aec965decbdf9dfb1ecab8d34530d5b0072e->enter($__internal_9473d98523b3780d454e1beaada5aec965decbdf9dfb1ecab8d34530d5b0072e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Admin:users.html.twig"));

        $__internal_ebe007723054063e941b13b1262089bfd56034a634db39f56b5662f822ccfad3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebe007723054063e941b13b1262089bfd56034a634db39f56b5662f822ccfad3->enter($__internal_ebe007723054063e941b13b1262089bfd56034a634db39f56b5662f822ccfad3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Admin:users.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9473d98523b3780d454e1beaada5aec965decbdf9dfb1ecab8d34530d5b0072e->leave($__internal_9473d98523b3780d454e1beaada5aec965decbdf9dfb1ecab8d34530d5b0072e_prof);

        
        $__internal_ebe007723054063e941b13b1262089bfd56034a634db39f56b5662f822ccfad3->leave($__internal_ebe007723054063e941b13b1262089bfd56034a634db39f56b5662f822ccfad3_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_7a31c52cffc0a957c1dbbc7d7addf9fd218c4d44a53a7a3b14ccc13e05d49c5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a31c52cffc0a957c1dbbc7d7addf9fd218c4d44a53a7a3b14ccc13e05d49c5e->enter($__internal_7a31c52cffc0a957c1dbbc7d7addf9fd218c4d44a53a7a3b14ccc13e05d49c5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_42763ebcb7bc17594a1c97d20bc83b9a9fdb2534590e32c079e69b7ef8666af8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42763ebcb7bc17594a1c97d20bc83b9a9fdb2534590e32c079e69b7ef8666af8->enter($__internal_42763ebcb7bc17594a1c97d20bc83b9a9fdb2534590e32c079e69b7ef8666af8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " 
    <h1>Liste des users</h1>
\t";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 7
            echo "\t\t<li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()));
            echo "</li>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "
 ";
        
        $__internal_42763ebcb7bc17594a1c97d20bc83b9a9fdb2534590e32c079e69b7ef8666af8->leave($__internal_42763ebcb7bc17594a1c97d20bc83b9a9fdb2534590e32c079e69b7ef8666af8_prof);

        
        $__internal_7a31c52cffc0a957c1dbbc7d7addf9fd218c4d44a53a7a3b14ccc13e05d49c5e->leave($__internal_7a31c52cffc0a957c1dbbc7d7addf9fd218c4d44a53a7a3b14ccc13e05d49c5e_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Admin:users.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 9,  56 => 7,  52 => 6,  40 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source(" {% trans_default_domain 'FOSUserBundle' %}
 {% extends \"base.html.twig\" %} 

 {% block body %} 
    <h1>Liste des users</h1>
\t{% for user in users%}
\t\t<li>{{user.username|e}}</li>
\t{% endfor%}

 {% endblock body %} ", "AppBundle:Admin:users.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\src\\AppBundle\\Resources\\views\\Admin\\users.html.twig");
    }
}
