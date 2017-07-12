<?php

/* AppBundle:Registration:register_content.html.twig */
class __TwigTemplate_370cc830693b028a0898a08c061a1dd37c5fba4b996120e9b520ada154e4edb2 extends Twig_Template
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
        $__internal_0576691a9aecdebf9f6d0301a6be6cc16c780ffeeccdf1fb259488fbb6c6ed60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0576691a9aecdebf9f6d0301a6be6cc16c780ffeeccdf1fb259488fbb6c6ed60->enter($__internal_0576691a9aecdebf9f6d0301a6be6cc16c780ffeeccdf1fb259488fbb6c6ed60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Registration:register_content.html.twig"));

        $__internal_10cbba1cadb535d79eb8db49566c9f46ca53f59489b54416c09d44f2b2fd9fff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10cbba1cadb535d79eb8db49566c9f46ca53f59489b54416c09d44f2b2fd9fff->enter($__internal_10cbba1cadb535d79eb8db49566c9f46ca53f59489b54416c09d44f2b2fd9fff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Registration:register_content.html.twig"));

        // line 2
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"), "html", null, true);
        echo "\"> 
<script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>

";
        // line 5
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "POST", "attr" => array("class" => "form-horizontal")));
        echo "
  
  <div class=\"form-group\">
      ";
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Login"));
        echo "
   <div class=\"col-sm-4\">
      ";
        // line 11
        echo "      ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
    ";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'errors');
        echo "
  </div>
  
  <div class=\"form-group\">
      ";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Email"));
        echo "
   <div class=\"col-sm-4\">
      ";
        // line 20
        echo "      ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
    ";
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "
  </div>
  
    <div class=\"form-group\">
\t";
        // line 26
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'label', array("label" => "Nom", "label_attr" => array("class" => "col-sm-2 control-label")));
        echo "
   <div class=\"col-sm-4\">
      ";
        // line 28
        echo "      
      ";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
    ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'errors');
        echo "
  </div>
  
 <div class=\"form-group\"> 
\t";
        // line 35
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "roles", array()), 'label', array("label" => "Rôles", "label_attr" => array("class" => "col-sm-2 control-label")));
        echo "
\t<div class=\"checkbox-inline\">
      ";
        // line 37
        echo "       
       ";
        // line 38
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "roles", array()), 'widget', array("attr" => array("class" => "col-sm-2 control-label")));
        echo " 
    </div>
   ";
        // line 40
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "roles", array()), 'errors');
        echo " 
  </div> 
  
   <div class=\"form-group\"> 
\t";
        // line 44
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "groups", array()), 'label', array("label" => "Groupes", "label_attr" => array("class" => "col-sm-2 control-label")));
        echo "
\t<div class=\"checkbox-inline\">
      ";
        // line 46
        echo "       
       ";
        // line 47
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "groups", array()), 'widget', array("attr" => array("class" => "col-lg control-label")));
        echo " 
    </div>
   ";
        // line 49
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "groups", array()), 'errors');
        echo " 
  </div> 
  
  ";
        // line 53
        echo "  <div class=\"form-group\">
      ";
        // line 54
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Mot de passe"));
        echo "
   <div class=\"col-sm-4\">
      ";
        // line 57
        echo "      ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
    ";
        // line 59
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'errors');
        echo "
  </div>
  
  <div class=\"form-group\">
      ";
        // line 63
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Confirmation mot de passe"));
        echo "
   <div class=\"col-sm-4\">
      ";
        // line 66
        echo "      ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
    ";
        // line 68
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'errors');
        echo "
  </div>

  
  <div class=\"col-sm-4\">
    <button class=\"btn btn-primary\" type=\"submit\" name=\"action\">
      ";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "
    </button>
  </div>
";
        // line 77
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_0576691a9aecdebf9f6d0301a6be6cc16c780ffeeccdf1fb259488fbb6c6ed60->leave($__internal_0576691a9aecdebf9f6d0301a6be6cc16c780ffeeccdf1fb259488fbb6c6ed60_prof);

        
        $__internal_10cbba1cadb535d79eb8db49566c9f46ca53f59489b54416c09d44f2b2fd9fff->leave($__internal_10cbba1cadb535d79eb8db49566c9f46ca53f59489b54416c09d44f2b2fd9fff_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 77,  174 => 74,  165 => 68,  159 => 66,  154 => 63,  147 => 59,  141 => 57,  136 => 54,  133 => 53,  127 => 49,  122 => 47,  119 => 46,  114 => 44,  107 => 40,  102 => 38,  99 => 37,  94 => 35,  87 => 31,  82 => 29,  79 => 28,  74 => 26,  67 => 22,  61 => 20,  56 => 17,  49 => 13,  43 => 11,  38 => 8,  32 => 5,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
<link rel=\"stylesheet\" href=\"{{ asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css') }}\"> 
<script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>

{{form_start(form, {'method': 'POST', 'attr':{'class': 'form-horizontal'}})}}
  
  <div class=\"form-group\">
      {{ form_label(form.username,\"Login\", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}
   <div class=\"col-sm-4\">
      {# Génération de l'input. #}
      {{ form_widget(form.username, {'attr': {'class': 'form-control'}}) }}
    </div>
    {{ form_errors(form.username) }}
  </div>
  
  <div class=\"form-group\">
      {{ form_label(form.email,\"Email\", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}
   <div class=\"col-sm-4\">
      {# Génération de l'input. #}
      {{ form_widget(form.email, {'attr': {'class': 'form-control'}}) }}
    </div>
    {{ form_errors(form.email) }}
  </div>
  
    <div class=\"form-group\">
\t{{ form_label(form.name, null,{'label':'Nom', 'label_attr':{'class': 'col-sm-2 control-label'}})}}
   <div class=\"col-sm-4\">
      {# Génération de l'input. #}      
      {{ form_widget(form.name, {'attr': {'class': 'form-control'}}) }}
    </div>
    {{ form_errors(form.name) }}
  </div>
  
 <div class=\"form-group\"> 
\t{{ form_label(form.roles, null,{'label':'Rôles', 'label_attr':{'class': 'col-sm-2 control-label'}})}}
\t<div class=\"checkbox-inline\">
      {# {# Génération de l'input. #}       
       {{ form_widget(form.roles, {'attr':{'class': 'col-sm-2 control-label'}})}} 
    </div>
   {{ form_errors(form.roles) }} 
  </div> 
  
   <div class=\"form-group\"> 
\t{{ form_label(form.groups, null,{'label':'Groupes', 'label_attr':{'class': 'col-sm-2 control-label'}})}}
\t<div class=\"checkbox-inline\">
      {# {# Génération de l'input. #}       
       {{ form_widget(form.groups, {'attr':{'class': 'col-lg control-label'}})}} 
    </div>
   {{ form_errors(form.groups) }} 
  </div> 
  
  {# {{form_row(form.roles)}} #}
  <div class=\"form-group\">
      {{ form_label(form.plainPassword.first,\"Mot de passe\", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}
   <div class=\"col-sm-4\">
      {# Génération de l'input. #}
      {{ form_widget(form.plainPassword.first, {'attr': {'class': 'form-control'}}) }}
    </div>
    {{ form_errors(form.plainPassword.first) }}
  </div>
  
  <div class=\"form-group\">
      {{ form_label(form.plainPassword.second,\"Confirmation mot de passe\", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}
   <div class=\"col-sm-4\">
      {# Génération de l'input. #}
      {{ form_widget(form.plainPassword.second, {'attr': {'class': 'form-control'}}) }}
    </div>
    {{ form_errors(form.plainPassword.second) }}
  </div>

  
  <div class=\"col-sm-4\">
    <button class=\"btn btn-primary\" type=\"submit\" name=\"action\">
      {{ 'registration.submit'|trans }}
    </button>
  </div>
{{ form_end(form) }}
", "AppBundle:Registration:register_content.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\src\\AppBundle\\Resources\\views\\Registration\\register_content.html.twig");
    }
}
