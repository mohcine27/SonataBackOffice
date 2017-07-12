<?php

/* SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig */
class __TwigTemplate_ba6bca853879b14217ab4c18ff80d6a2bc6f78c082c9f4ae6d5b6b3ff6e0522e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Form:form_admin_fields.html.twig", "SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig", 12);
        $this->blocks = array(
            'sonata_admin_orm_one_to_one_widget' => array($this, 'block_sonata_admin_orm_one_to_one_widget'),
            'sonata_admin_orm_many_to_many_widget' => array($this, 'block_sonata_admin_orm_many_to_many_widget'),
            'sonata_admin_orm_many_to_one_widget' => array($this, 'block_sonata_admin_orm_many_to_one_widget'),
            'sonata_admin_orm_one_to_many_widget' => array($this, 'block_sonata_admin_orm_one_to_many_widget'),
            'sonata_type_model_widget' => array($this, 'block_sonata_type_model_widget'),
            'sonata_type_model_list_widget' => array($this, 'block_sonata_type_model_list_widget'),
            'sonata_type_admin_widget' => array($this, 'block_sonata_type_admin_widget'),
            'sonata_type_collection_widget' => array($this, 'block_sonata_type_collection_widget'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Form:form_admin_fields.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5773b3cae377fc69b51ec67eea4cc719b4873d918678476f15c88d562197032f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5773b3cae377fc69b51ec67eea4cc719b4873d918678476f15c88d562197032f->enter($__internal_5773b3cae377fc69b51ec67eea4cc719b4873d918678476f15c88d562197032f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig"));

        $__internal_48c8727baea32b72abe8b6bf743f8d2b5e2a2093eabc885a90b42814d01120cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48c8727baea32b72abe8b6bf743f8d2b5e2a2093eabc885a90b42814d01120cf->enter($__internal_48c8727baea32b72abe8b6bf743f8d2b5e2a2093eabc885a90b42814d01120cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5773b3cae377fc69b51ec67eea4cc719b4873d918678476f15c88d562197032f->leave($__internal_5773b3cae377fc69b51ec67eea4cc719b4873d918678476f15c88d562197032f_prof);

        
        $__internal_48c8727baea32b72abe8b6bf743f8d2b5e2a2093eabc885a90b42814d01120cf->leave($__internal_48c8727baea32b72abe8b6bf743f8d2b5e2a2093eabc885a90b42814d01120cf_prof);

    }

    // line 16
    public function block_sonata_admin_orm_one_to_one_widget($context, array $blocks = array())
    {
        $__internal_9e1275792a354b61f661870c07bf926d5e851c82dc782007476a041445d74fa6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e1275792a354b61f661870c07bf926d5e851c82dc782007476a041445d74fa6->enter($__internal_9e1275792a354b61f661870c07bf926d5e851c82dc782007476a041445d74fa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_orm_one_to_one_widget"));

        $__internal_915585f844f174b75c18f5837b507b538d0bbaf0e6f1dc929d336f58078c8a8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_915585f844f174b75c18f5837b507b538d0bbaf0e6f1dc929d336f58078c8a8c->enter($__internal_915585f844f174b75c18f5837b507b538d0bbaf0e6f1dc929d336f58078c8a8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_orm_one_to_one_widget"));

        // line 17
        echo "    ";
        $this->loadTemplate("SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_one.html.twig", "SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig", 17)->display($context);
        
        $__internal_915585f844f174b75c18f5837b507b538d0bbaf0e6f1dc929d336f58078c8a8c->leave($__internal_915585f844f174b75c18f5837b507b538d0bbaf0e6f1dc929d336f58078c8a8c_prof);

        
        $__internal_9e1275792a354b61f661870c07bf926d5e851c82dc782007476a041445d74fa6->leave($__internal_9e1275792a354b61f661870c07bf926d5e851c82dc782007476a041445d74fa6_prof);

    }

    // line 20
    public function block_sonata_admin_orm_many_to_many_widget($context, array $blocks = array())
    {
        $__internal_82543c69f9816832d6c996d5f943acb06160103a6e890ba63c5ca1bacc762290 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82543c69f9816832d6c996d5f943acb06160103a6e890ba63c5ca1bacc762290->enter($__internal_82543c69f9816832d6c996d5f943acb06160103a6e890ba63c5ca1bacc762290_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_orm_many_to_many_widget"));

        $__internal_c47a56b753b1ed40c3c5d8b02a3d72221c0fceef663a8e0123ced0c265bcddc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c47a56b753b1ed40c3c5d8b02a3d72221c0fceef663a8e0123ced0c265bcddc3->enter($__internal_c47a56b753b1ed40c3c5d8b02a3d72221c0fceef663a8e0123ced0c265bcddc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_orm_many_to_many_widget"));

        // line 21
        echo "    ";
        $this->loadTemplate("SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_to_many.html.twig", "SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig", 21)->display($context);
        
        $__internal_c47a56b753b1ed40c3c5d8b02a3d72221c0fceef663a8e0123ced0c265bcddc3->leave($__internal_c47a56b753b1ed40c3c5d8b02a3d72221c0fceef663a8e0123ced0c265bcddc3_prof);

        
        $__internal_82543c69f9816832d6c996d5f943acb06160103a6e890ba63c5ca1bacc762290->leave($__internal_82543c69f9816832d6c996d5f943acb06160103a6e890ba63c5ca1bacc762290_prof);

    }

    // line 24
    public function block_sonata_admin_orm_many_to_one_widget($context, array $blocks = array())
    {
        $__internal_7c10b18cfe99aa6e5e5b335b57e200ea6d5b37c0ea291126537342f54badcce1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c10b18cfe99aa6e5e5b335b57e200ea6d5b37c0ea291126537342f54badcce1->enter($__internal_7c10b18cfe99aa6e5e5b335b57e200ea6d5b37c0ea291126537342f54badcce1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_orm_many_to_one_widget"));

        $__internal_be71272dee5d6d9916a8bc5f0a06c7c7f8023bf04637e21ecb2e0bc36eba5fe1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be71272dee5d6d9916a8bc5f0a06c7c7f8023bf04637e21ecb2e0bc36eba5fe1->enter($__internal_be71272dee5d6d9916a8bc5f0a06c7c7f8023bf04637e21ecb2e0bc36eba5fe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_orm_many_to_one_widget"));

        // line 25
        echo "    ";
        $this->loadTemplate("SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_to_one.html.twig", "SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig", 25)->display($context);
        
        $__internal_be71272dee5d6d9916a8bc5f0a06c7c7f8023bf04637e21ecb2e0bc36eba5fe1->leave($__internal_be71272dee5d6d9916a8bc5f0a06c7c7f8023bf04637e21ecb2e0bc36eba5fe1_prof);

        
        $__internal_7c10b18cfe99aa6e5e5b335b57e200ea6d5b37c0ea291126537342f54badcce1->leave($__internal_7c10b18cfe99aa6e5e5b335b57e200ea6d5b37c0ea291126537342f54badcce1_prof);

    }

    // line 28
    public function block_sonata_admin_orm_one_to_many_widget($context, array $blocks = array())
    {
        $__internal_c7aaceb58c7ed454e1b84a613d4065ff0e27afa92773ce711d5a3abdd084f9a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7aaceb58c7ed454e1b84a613d4065ff0e27afa92773ce711d5a3abdd084f9a8->enter($__internal_c7aaceb58c7ed454e1b84a613d4065ff0e27afa92773ce711d5a3abdd084f9a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_orm_one_to_many_widget"));

        $__internal_a978b052d03882912907ae6fa16084d8d0fc9c1eb2e232367c3b40362b4e6388 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a978b052d03882912907ae6fa16084d8d0fc9c1eb2e232367c3b40362b4e6388->enter($__internal_a978b052d03882912907ae6fa16084d8d0fc9c1eb2e232367c3b40362b4e6388_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_orm_one_to_many_widget"));

        // line 29
        echo "    ";
        $this->loadTemplate("SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_many.html.twig", "SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig", 29)->display($context);
        
        $__internal_a978b052d03882912907ae6fa16084d8d0fc9c1eb2e232367c3b40362b4e6388->leave($__internal_a978b052d03882912907ae6fa16084d8d0fc9c1eb2e232367c3b40362b4e6388_prof);

        
        $__internal_c7aaceb58c7ed454e1b84a613d4065ff0e27afa92773ce711d5a3abdd084f9a8->leave($__internal_c7aaceb58c7ed454e1b84a613d4065ff0e27afa92773ce711d5a3abdd084f9a8_prof);

    }

    // line 32
    public function block_sonata_type_model_widget($context, array $blocks = array())
    {
        $__internal_cd121b3992b1ef0c974038069027de08a3b9d0700602e1cf42ffe60a5424d3fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd121b3992b1ef0c974038069027de08a3b9d0700602e1cf42ffe60a5424d3fc->enter($__internal_cd121b3992b1ef0c974038069027de08a3b9d0700602e1cf42ffe60a5424d3fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_model_widget"));

        $__internal_83cf686bb414e98b9da1daff8d810cfc0e4ee52dfed0fd3577ab1efc1be34f40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83cf686bb414e98b9da1daff8d810cfc0e4ee52dfed0fd3577ab1efc1be34f40->enter($__internal_83cf686bb414e98b9da1daff8d810cfc0e4ee52dfed0fd3577ab1efc1be34f40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_model_widget"));

        // line 33
        echo "    ";
        // line 37
        echo "
    ";
        // line 39
        echo "
    ";
        // line 40
        if (twig_test_empty($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()))) {
            // line 41
            echo "        ";
            $this->displayBlock("choice_widget", $context, $blocks);
            echo "
    ";
        } elseif (($this->getAttribute($this->getAttribute(        // line 42
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "mappingtype", array()) == twig_constant("Doctrine\\ORM\\Mapping\\ClassMetadataInfo::ONE_TO_ONE"))) {
            // line 43
            echo "        ";
            $this->displayBlock("sonata_admin_orm_one_to_one_widget", $context, $blocks);
            echo "
    ";
        } elseif (($this->getAttribute($this->getAttribute(        // line 44
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "mappingtype", array()) == twig_constant("Doctrine\\ORM\\Mapping\\ClassMetadataInfo::MANY_TO_ONE"))) {
            // line 45
            echo "        ";
            $this->displayBlock("sonata_admin_orm_many_to_one_widget", $context, $blocks);
            echo "
    ";
        } elseif (($this->getAttribute($this->getAttribute(        // line 46
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "mappingtype", array()) == twig_constant("Doctrine\\ORM\\Mapping\\ClassMetadataInfo::MANY_TO_MANY"))) {
            // line 47
            echo "        ";
            $this->displayBlock("sonata_admin_orm_many_to_many_widget", $context, $blocks);
            echo "
    ";
        } elseif (($this->getAttribute($this->getAttribute(        // line 48
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "mappingtype", array()) == twig_constant("Doctrine\\ORM\\Mapping\\ClassMetadataInfo::ONE_TO_MANY"))) {
            // line 49
            echo "        ";
            $this->displayBlock("sonata_admin_orm_one_to_many_widget", $context, $blocks);
            echo "
    ";
        } else {
            // line 51
            echo "        ";
            // line 52
            echo "        ";
            $this->displayBlock("choice_widget", $context, $blocks);
            echo "
    ";
        }
        
        $__internal_83cf686bb414e98b9da1daff8d810cfc0e4ee52dfed0fd3577ab1efc1be34f40->leave($__internal_83cf686bb414e98b9da1daff8d810cfc0e4ee52dfed0fd3577ab1efc1be34f40_prof);

        
        $__internal_cd121b3992b1ef0c974038069027de08a3b9d0700602e1cf42ffe60a5424d3fc->leave($__internal_cd121b3992b1ef0c974038069027de08a3b9d0700602e1cf42ffe60a5424d3fc_prof);

    }

    // line 56
    public function block_sonata_type_model_list_widget($context, array $blocks = array())
    {
        $__internal_ceae6d67617c1b053c594ed908fb39e76143ecc9ceb1561f5381b9602fa42e70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ceae6d67617c1b053c594ed908fb39e76143ecc9ceb1561f5381b9602fa42e70->enter($__internal_ceae6d67617c1b053c594ed908fb39e76143ecc9ceb1561f5381b9602fa42e70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_model_list_widget"));

        $__internal_bb52a9c9d9e7d38429ad9114fc1592d05a5448ea185f016ffdeb08c388954640 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb52a9c9d9e7d38429ad9114fc1592d05a5448ea185f016ffdeb08c388954640->enter($__internal_bb52a9c9d9e7d38429ad9114fc1592d05a5448ea185f016ffdeb08c388954640_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_model_list_widget"));

        // line 57
        echo "    <div id=\"field_container_";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" class=\"field-container\">
        <span id=\"field_widget_";
        // line 58
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" class=\"field-short-description\">
            ";
        // line 59
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "associationadmin", array()), "id", array(0 => $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "value", array())), "method")) {
            // line 60
            echo "                ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_admin_short_object_information", array("code" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 61
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "associationadmin", array()), "code", array()), "objectId" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 62
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "associationadmin", array()), "id", array(0 => $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "value", array())), "method"), "uniqid" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 63
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "associationadmin", array()), "uniqid", array()), "linkParameters" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 64
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "options", array()), "link_parameters", array()))));
            // line 65
            echo "
            ";
        } elseif (($this->getAttribute($this->getAttribute($this->getAttribute(        // line 66
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", array(), "any", false, true), "options", array(), "any", false, true), "placeholder", array(), "any", true, true) && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "options", array()), "placeholder", array()))) {
            // line 67
            echo "                <span class=\"inner-field-short-description\">
                    ";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "options", array()), "placeholder", array()), array(), "SonataAdminBundle"), "html", null, true);
            echo "
                </span>
            ";
        }
        // line 71
        echo "        </span>
        <span id=\"field_actions_";
        // line 72
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" class=\"field-actions\">
            <span class=\"btn-group\">
                ";
        // line 74
        if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "associationadmin", array()), "hasroute", array(0 => "list"), "method") && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "associationadmin", array()), "isGranted", array(0 => "LIST"), "method")) && (isset($context["btn_list"]) ? $context["btn_list"] : $this->getContext($context, "btn_list")))) {
            // line 75
            echo "                    <a  href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "associationadmin", array()), "generateUrl", array(0 => "list"), "method"), "html", null, true);
            echo "\"
                        onclick=\"return start_field_dialog_form_list_";
            // line 76
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "(this);\"
                        class=\"btn btn-info btn-sm sonata-ba-action\"
                        title=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["btn_list"]) ? $context["btn_list"] : $this->getContext($context, "btn_list")), array(), (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : $this->getContext($context, "btn_catalogue"))), "html", null, true);
            echo "\"
                            >
                        <i class=\"fa fa-list\"></i>
                        ";
            // line 81
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["btn_list"]) ? $context["btn_list"] : $this->getContext($context, "btn_list")), array(), (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : $this->getContext($context, "btn_catalogue"))), "html", null, true);
            echo "
                    </a>
                ";
        }
        // line 84
        echo "
                ";
        // line 85
        if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "associationadmin", array()), "hasroute", array(0 => "create"), "method") && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "associationadmin", array()), "isGranted", array(0 => "CREATE"), "method")) && (isset($context["btn_add"]) ? $context["btn_add"] : $this->getContext($context, "btn_add")))) {
            // line 86
            echo "                    <a  href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "associationadmin", array()), "generateUrl", array(0 => "create"), "method"), "html", null, true);
            echo "\"
                        onclick=\"return start_field_dialog_form_add_";
            // line 87
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "(this);\"
                        class=\"btn btn-success btn-sm sonata-ba-action\"
                        title=\"";
            // line 89
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["btn_add"]) ? $context["btn_add"] : $this->getContext($context, "btn_add")), array(), (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : $this->getContext($context, "btn_catalogue"))), "html", null, true);
            echo "\"
                            >
                        <i class=\"fa fa-plus-circle\"></i>
                        ";
            // line 92
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["btn_add"]) ? $context["btn_add"] : $this->getContext($context, "btn_add")), array(), (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : $this->getContext($context, "btn_catalogue"))), "html", null, true);
            echo "
                    </a>
                ";
        }
        // line 95
        echo "            </span>

            <span class=\"btn-group\">
                ";
        // line 98
        if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "associationadmin", array()), "hasRoute", array(0 => "delete"), "method") && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "associationadmin", array()), "isGranted", array(0 => "DELETE"), "method")) && (isset($context["btn_delete"]) ? $context["btn_delete"] : $this->getContext($context, "btn_delete")))) {
            // line 99
            echo "                    <a  href=\"\"
                        onclick=\"return remove_selected_element_";
            // line 100
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "(this);\"
                        class=\"btn btn-danger btn-sm sonata-ba-action\"
                        title=\"";
            // line 102
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["btn_delete"]) ? $context["btn_delete"] : $this->getContext($context, "btn_delete")), array(), (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : $this->getContext($context, "btn_catalogue"))), "html", null, true);
            echo "\"
                            >
                        <i class=\"fa fa-minus-circle\"></i>
                        ";
            // line 105
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["btn_delete"]) ? $context["btn_delete"] : $this->getContext($context, "btn_delete")), array(), (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : $this->getContext($context, "btn_catalogue"))), "html", null, true);
            echo "
                    </a>
                ";
        }
        // line 108
        echo "            </span>
        </span>

        <span style=\"display: none\" >
            ";
        // line 113
        echo "            ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget', array("required" => false));
        echo "
        </span>

        ";
        // line 116
        $this->displayBlock("sonata_help", $context, $blocks);
        echo "

        <div class=\"modal fade\" id=\"field_dialog_";
        // line 118
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog modal-lg\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                        <h4 class=\"modal-title\"></h4>
                    </div>
                    <div class=\"modal-body\">
                    </div>
                </div>
            </div>
        </div>
    </div>

    ";
        // line 132
        $this->loadTemplate("SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_association_script.html.twig", "SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig", 132)->display($context);
        
        $__internal_bb52a9c9d9e7d38429ad9114fc1592d05a5448ea185f016ffdeb08c388954640->leave($__internal_bb52a9c9d9e7d38429ad9114fc1592d05a5448ea185f016ffdeb08c388954640_prof);

        
        $__internal_ceae6d67617c1b053c594ed908fb39e76143ecc9ceb1561f5381b9602fa42e70->leave($__internal_ceae6d67617c1b053c594ed908fb39e76143ecc9ceb1561f5381b9602fa42e70_prof);

    }

    // line 135
    public function block_sonata_type_admin_widget($context, array $blocks = array())
    {
        $__internal_5fb1e47aa4e087b24fca0eb3ede338e69ad8680863dec4c9fed6f77ec1337d74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fb1e47aa4e087b24fca0eb3ede338e69ad8680863dec4c9fed6f77ec1337d74->enter($__internal_5fb1e47aa4e087b24fca0eb3ede338e69ad8680863dec4c9fed6f77ec1337d74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_admin_widget"));

        $__internal_a446d9058572ae999e3920ac10e28095209bdf8a46f61929b10bf8ae3335d100 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a446d9058572ae999e3920ac10e28095209bdf8a46f61929b10bf8ae3335d100->enter($__internal_a446d9058572ae999e3920ac10e28095209bdf8a46f61929b10bf8ae3335d100_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_admin_widget"));

        // line 136
        echo "    ";
        // line 137
        echo "    ";
        if (($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "mappingtype", array()) == twig_constant("Doctrine\\ORM\\Mapping\\ClassMetadataInfo::ONE_TO_ONE"))) {
            // line 138
            echo "        ";
            $this->displayBlock("sonata_admin_orm_one_to_one_widget", $context, $blocks);
            echo "
    ";
        } elseif (($this->getAttribute($this->getAttribute(        // line 139
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "mappingtype", array()) == twig_constant("Doctrine\\ORM\\Mapping\\ClassMetadataInfo::MANY_TO_ONE"))) {
            // line 140
            echo "        ";
            $this->displayBlock("sonata_admin_orm_many_to_one_widget", $context, $blocks);
            echo "
    ";
        } elseif (($this->getAttribute($this->getAttribute(        // line 141
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "mappingtype", array()) == twig_constant("Doctrine\\ORM\\Mapping\\ClassMetadataInfo::MANY_TO_MANY"))) {
            // line 142
            echo "        ";
            $this->displayBlock("sonata_admin_orm_many_to_many_widget", $context, $blocks);
            echo "
    ";
        } elseif (($this->getAttribute($this->getAttribute(        // line 143
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "mappingtype", array()) == twig_constant("Doctrine\\ORM\\Mapping\\ClassMetadataInfo::ONE_TO_MANY"))) {
            // line 144
            echo "        ";
            $this->displayBlock("sonata_admin_orm_one_to_many_widget", $context, $blocks);
            echo "
    ";
        } else {
            // line 146
            echo "        INVALID MODE : ";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "
    ";
        }
        
        $__internal_a446d9058572ae999e3920ac10e28095209bdf8a46f61929b10bf8ae3335d100->leave($__internal_a446d9058572ae999e3920ac10e28095209bdf8a46f61929b10bf8ae3335d100_prof);

        
        $__internal_5fb1e47aa4e087b24fca0eb3ede338e69ad8680863dec4c9fed6f77ec1337d74->leave($__internal_5fb1e47aa4e087b24fca0eb3ede338e69ad8680863dec4c9fed6f77ec1337d74_prof);

    }

    // line 150
    public function block_sonata_type_collection_widget($context, array $blocks = array())
    {
        $__internal_971ae6b80694d612a8f6bfb1937c7c11ed409077ad9499a2a6799b31e15cd3f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_971ae6b80694d612a8f6bfb1937c7c11ed409077ad9499a2a6799b31e15cd3f5->enter($__internal_971ae6b80694d612a8f6bfb1937c7c11ed409077ad9499a2a6799b31e15cd3f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_collection_widget"));

        $__internal_a0d366adf981192746f504a47a463811e45e2af40fe8c67204edbe38f775090b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0d366adf981192746f504a47a463811e45e2af40fe8c67204edbe38f775090b->enter($__internal_a0d366adf981192746f504a47a463811e45e2af40fe8c67204edbe38f775090b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_collection_widget"));

        // line 151
        echo "    ";
        if (($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "mappingtype", array()) == twig_constant("Doctrine\\ORM\\Mapping\\ClassMetadataInfo::ONE_TO_MANY"))) {
            // line 152
            echo "        ";
            $this->displayBlock("sonata_admin_orm_one_to_many_widget", $context, $blocks);
            echo "
    ";
        } elseif (($this->getAttribute($this->getAttribute(        // line 153
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "mappingtype", array()) == twig_constant("Doctrine\\ORM\\Mapping\\ClassMetadataInfo::MANY_TO_MANY"))) {
            // line 154
            echo "        ";
            $this->displayBlock("sonata_admin_orm_many_to_many_widget", $context, $blocks);
            echo "
    ";
        } else {
            // line 156
            echo "        INVALID MODE : ";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo " - type : sonata_type_collection - mapping : ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "mappingtype", array()), "html", null, true);
            echo "
    ";
        }
        
        $__internal_a0d366adf981192746f504a47a463811e45e2af40fe8c67204edbe38f775090b->leave($__internal_a0d366adf981192746f504a47a463811e45e2af40fe8c67204edbe38f775090b_prof);

        
        $__internal_971ae6b80694d612a8f6bfb1937c7c11ed409077ad9499a2a6799b31e15cd3f5->leave($__internal_971ae6b80694d612a8f6bfb1937c7c11ed409077ad9499a2a6799b31e15cd3f5_prof);

    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  448 => 156,  442 => 154,  440 => 153,  435 => 152,  432 => 151,  423 => 150,  409 => 146,  403 => 144,  401 => 143,  396 => 142,  394 => 141,  389 => 140,  387 => 139,  382 => 138,  379 => 137,  377 => 136,  368 => 135,  358 => 132,  341 => 118,  336 => 116,  329 => 113,  323 => 108,  317 => 105,  311 => 102,  306 => 100,  303 => 99,  301 => 98,  296 => 95,  290 => 92,  284 => 89,  279 => 87,  274 => 86,  272 => 85,  269 => 84,  263 => 81,  257 => 78,  252 => 76,  247 => 75,  245 => 74,  240 => 72,  237 => 71,  231 => 68,  228 => 67,  226 => 66,  223 => 65,  221 => 64,  220 => 63,  219 => 62,  218 => 61,  216 => 60,  214 => 59,  210 => 58,  205 => 57,  196 => 56,  182 => 52,  180 => 51,  174 => 49,  172 => 48,  167 => 47,  165 => 46,  160 => 45,  158 => 44,  153 => 43,  151 => 42,  146 => 41,  144 => 40,  141 => 39,  138 => 37,  136 => 33,  127 => 32,  116 => 29,  107 => 28,  96 => 25,  87 => 24,  76 => 21,  67 => 20,  56 => 17,  47 => 16,  11 => 12,);
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

{% extends 'SonataAdminBundle:Form:form_admin_fields.html.twig' %}


{# Custom Sonata Admin Extension #}
{% block sonata_admin_orm_one_to_one_widget %}
    {% include 'SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_one.html.twig' %}
{% endblock %}

{% block sonata_admin_orm_many_to_many_widget %}
    {% include 'SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_to_many.html.twig' %}
{% endblock %}

{% block sonata_admin_orm_many_to_one_widget %}
    {% include 'SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_to_one.html.twig' %}
{% endblock %}

{% block sonata_admin_orm_one_to_many_widget %}
    {% include 'SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_many.html.twig' %}
{% endblock %}

{% block sonata_type_model_widget %}
    {#
        This is not the best way to do if
        TODO : improve this part
    #}

    {#model {{ sonata_admin.field_description.mappingtype }}#}

    {% if sonata_admin.field_description is empty %}
        {{ block('choice_widget') }}
    {% elseif sonata_admin.field_description.mappingtype == constant('Doctrine\\\\ORM\\\\Mapping\\\\ClassMetadataInfo::ONE_TO_ONE') %}
        {{ block('sonata_admin_orm_one_to_one_widget') }}
    {% elseif sonata_admin.field_description.mappingtype == constant('Doctrine\\\\ORM\\\\Mapping\\\\ClassMetadataInfo::MANY_TO_ONE') %}
        {{ block('sonata_admin_orm_many_to_one_widget') }}
    {% elseif sonata_admin.field_description.mappingtype == constant('Doctrine\\\\ORM\\\\Mapping\\\\ClassMetadataInfo::MANY_TO_MANY') %}
        {{ block('sonata_admin_orm_many_to_many_widget') }}
    {% elseif sonata_admin.field_description.mappingtype == constant('Doctrine\\\\ORM\\\\Mapping\\\\ClassMetadataInfo::ONE_TO_MANY') %}
        {{ block('sonata_admin_orm_one_to_many_widget') }}
    {% else %}
        {#INVALID MODE : {{ id }}#}
        {{ block('choice_widget') }}
    {% endif %}
{% endblock %}

{% block sonata_type_model_list_widget %}
    <div id=\"field_container_{{ id }}\" class=\"field-container\">
        <span id=\"field_widget_{{ id }}\" class=\"field-short-description\">
            {% if sonata_admin.field_description.associationadmin.id(sonata_admin.value) %}
                {{ render(path('sonata_admin_short_object_information', {
                    'code':     sonata_admin.field_description.associationadmin.code,
                    'objectId': sonata_admin.field_description.associationadmin.id(sonata_admin.value),
                    'uniqid':   sonata_admin.field_description.associationadmin.uniqid,
                    'linkParameters': sonata_admin.field_description.options.link_parameters
                })) }}
            {% elseif sonata_admin.field_description.options.placeholder is defined and sonata_admin.field_description.options.placeholder %}
                <span class=\"inner-field-short-description\">
                    {{ sonata_admin.field_description.options.placeholder|trans({}, 'SonataAdminBundle') }}
                </span>
            {% endif %}
        </span>
        <span id=\"field_actions_{{ id }}\" class=\"field-actions\">
            <span class=\"btn-group\">
                {% if sonata_admin.field_description.associationadmin.hasroute('list') and sonata_admin.field_description.associationadmin.isGranted('LIST') and btn_list %}
                    <a  href=\"{{ sonata_admin.field_description.associationadmin.generateUrl('list') }}\"
                        onclick=\"return start_field_dialog_form_list_{{ id }}(this);\"
                        class=\"btn btn-info btn-sm sonata-ba-action\"
                        title=\"{{ btn_list|trans({}, btn_catalogue) }}\"
                            >
                        <i class=\"fa fa-list\"></i>
                        {{ btn_list|trans({}, btn_catalogue) }}
                    </a>
                {% endif %}

                {% if sonata_admin.field_description.associationadmin.hasroute('create') and sonata_admin.field_description.associationadmin.isGranted('CREATE') and btn_add %}
                    <a  href=\"{{ sonata_admin.field_description.associationadmin.generateUrl('create') }}\"
                        onclick=\"return start_field_dialog_form_add_{{ id }}(this);\"
                        class=\"btn btn-success btn-sm sonata-ba-action\"
                        title=\"{{ btn_add|trans({}, btn_catalogue) }}\"
                            >
                        <i class=\"fa fa-plus-circle\"></i>
                        {{ btn_add|trans({}, btn_catalogue) }}
                    </a>
                {% endif %}
            </span>

            <span class=\"btn-group\">
                {% if sonata_admin.field_description.associationadmin.hasRoute('delete') and sonata_admin.field_description.associationadmin.isGranted('DELETE') and btn_delete %}
                    <a  href=\"\"
                        onclick=\"return remove_selected_element_{{ id }}(this);\"
                        class=\"btn btn-danger btn-sm sonata-ba-action\"
                        title=\"{{ btn_delete|trans({}, btn_catalogue) }}\"
                            >
                        <i class=\"fa fa-minus-circle\"></i>
                        {{ btn_delete|trans({}, btn_catalogue) }}
                    </a>
                {% endif %}
            </span>
        </span>

        <span style=\"display: none\" >
            {# Hidden text input cannot be required, because browser will throw error \"An invalid form control with name='' is not focusable\"  #}
            {{ form_widget(form, {'required':false}) }}
        </span>

        {{ block('sonata_help') }}

        <div class=\"modal fade\" id=\"field_dialog_{{ id }}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog modal-lg\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                        <h4 class=\"modal-title\"></h4>
                    </div>
                    <div class=\"modal-body\">
                    </div>
                </div>
            </div>
        </div>
    </div>

    {% include 'SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_association_script.html.twig' %}
{% endblock %}

{% block sonata_type_admin_widget %}
    {#admin {{ sonata_admin.field_description.mappingtype }}#}
    {% if sonata_admin.field_description.mappingtype == constant('Doctrine\\\\ORM\\\\Mapping\\\\ClassMetadataInfo::ONE_TO_ONE') %}
        {{ block('sonata_admin_orm_one_to_one_widget') }}
    {% elseif sonata_admin.field_description.mappingtype == constant('Doctrine\\\\ORM\\\\Mapping\\\\ClassMetadataInfo::MANY_TO_ONE') %}
        {{ block('sonata_admin_orm_many_to_one_widget') }}
    {% elseif sonata_admin.field_description.mappingtype == constant('Doctrine\\\\ORM\\\\Mapping\\\\ClassMetadataInfo::MANY_TO_MANY') %}
        {{ block('sonata_admin_orm_many_to_many_widget') }}
    {% elseif sonata_admin.field_description.mappingtype == constant('Doctrine\\\\ORM\\\\Mapping\\\\ClassMetadataInfo::ONE_TO_MANY') %}
        {{ block('sonata_admin_orm_one_to_many_widget') }}
    {% else %}
        INVALID MODE : {{ id }}
    {% endif %}
{% endblock %}

{% block sonata_type_collection_widget %}
    {% if sonata_admin.field_description.mappingtype == constant('Doctrine\\\\ORM\\\\Mapping\\\\ClassMetadataInfo::ONE_TO_MANY') %}
        {{ block('sonata_admin_orm_one_to_many_widget') }}
    {% elseif sonata_admin.field_description.mappingtype == constant('Doctrine\\\\ORM\\\\Mapping\\\\ClassMetadataInfo::MANY_TO_MANY') %}
        {{ block('sonata_admin_orm_many_to_many_widget') }}
    {% else %}
        INVALID MODE : {{ id }} - type : sonata_type_collection - mapping : {{ sonata_admin.field_description.mappingtype }}
    {% endif %}
{% endblock %}
", "SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\sonata-project\\doctrine-orm-admin-bundle\\Resources\\views\\Form\\form_admin_fields.html.twig");
    }
}
