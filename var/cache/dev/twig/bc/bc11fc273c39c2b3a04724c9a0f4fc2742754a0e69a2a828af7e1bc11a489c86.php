<?php

/* SonataAdminBundle:CRUD:base_edit_form.html.twig */
class __TwigTemplate_423151cfa29a9e7fabefbb274b400ce768ed7179dc60459fb856e88014354555 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form' => array($this, 'block_form'),
            'sonata_form_action_url' => array($this, 'block_sonata_form_action_url'),
            'sonata_form_attributes' => array($this, 'block_sonata_form_attributes'),
            'sonata_pre_fieldsets' => array($this, 'block_sonata_pre_fieldsets'),
            'sonata_tab_content' => array($this, 'block_sonata_tab_content'),
            'sonata_post_fieldsets' => array($this, 'block_sonata_post_fieldsets'),
            'formactions' => array($this, 'block_formactions'),
            'sonata_form_actions' => array($this, 'block_sonata_form_actions'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_af2e6bf692c2d7f11aac05ba8b9851db9bac6b9486ace2b453185ac3df10a58b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af2e6bf692c2d7f11aac05ba8b9851db9bac6b9486ace2b453185ac3df10a58b->enter($__internal_af2e6bf692c2d7f11aac05ba8b9851db9bac6b9486ace2b453185ac3df10a58b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_edit_form.html.twig"));

        $__internal_5e454280db96ca705f01e914702cb485dee1995d7b41c5eaa01d32754ca41a1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e454280db96ca705f01e914702cb485dee1995d7b41c5eaa01d32754ca41a1f->enter($__internal_5e454280db96ca705f01e914702cb485dee1995d7b41c5eaa01d32754ca41a1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_edit_form.html.twig"));

        // line 1
        $this->displayBlock('form', $context, $blocks);
        
        $__internal_af2e6bf692c2d7f11aac05ba8b9851db9bac6b9486ace2b453185ac3df10a58b->leave($__internal_af2e6bf692c2d7f11aac05ba8b9851db9bac6b9486ace2b453185ac3df10a58b_prof);

        
        $__internal_5e454280db96ca705f01e914702cb485dee1995d7b41c5eaa01d32754ca41a1f->leave($__internal_5e454280db96ca705f01e914702cb485dee1995d7b41c5eaa01d32754ca41a1f_prof);

    }

    public function block_form($context, array $blocks = array())
    {
        $__internal_f9f711c8d2c3a4eaf339fa0f5828aaa71a424c0b69d1ab2c5939f5febb014dc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9f711c8d2c3a4eaf339fa0f5828aaa71a424c0b69d1ab2c5939f5febb014dc8->enter($__internal_f9f711c8d2c3a4eaf339fa0f5828aaa71a424c0b69d1ab2c5939f5febb014dc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_7eaa9cfca74f0c155cc85302e8a8cdb3053ba587888a3bd4d2aff98c49372bc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7eaa9cfca74f0c155cc85302e8a8cdb3053ba587888a3bd4d2aff98c49372bc2->enter($__internal_7eaa9cfca74f0c155cc85302e8a8cdb3053ba587888a3bd4d2aff98c49372bc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 2
        echo "    ";
        $context["form_helper"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit_form_macro.html.twig", "SonataAdminBundle:CRUD:base_edit_form.html.twig", 2);
        // line 3
        echo "    ";
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.edit.form.top", array("admin" => (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "object" => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")))));
        echo "

    ";
        // line 5
        $context["url"] = (( !(null === $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"))) ? ("edit") : ("create"));
        // line 6
        echo "
    ";
        // line 7
        if ( !$this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url"))), "method")) {
            // line 8
            echo "        <div>
            ";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form_not_available", array(), "SonataAdminBundle"), "html", null, true);
            echo "
        </div>
    ";
        } else {
            // line 12
            echo "        <form
              ";
            // line 13
            if (($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "form_type"), "method") == "horizontal")) {
                echo "class=\"form-horizontal\"";
            }
            // line 14
            echo "              role=\"form\"
              action=\"";
            // line 15
            $this->displayBlock('sonata_form_action_url', $context, $blocks);
            echo "\"
              ";
            // line 16
            if ($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "multipart", array())) {
                echo " enctype=\"multipart/form-data\"";
            }
            // line 17
            echo "              method=\"POST\"
              ";
            // line 18
            if ( !$this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "html5_validate"), "method")) {
                echo "novalidate=\"novalidate\"";
            }
            // line 19
            echo "              ";
            $this->displayBlock('sonata_form_attributes', $context, $blocks);
            // line 20
            echo "              >

            ";
            // line 22
            echo twig_include($this->env, $context, "SonataAdminBundle:Helper:render_form_dismissable_errors.html.twig");
            echo "

            ";
            // line 24
            $this->displayBlock('sonata_pre_fieldsets', $context, $blocks);
            // line 27
            echo "
            ";
            // line 28
            $this->displayBlock('sonata_tab_content', $context, $blocks);
            // line 60
            echo "
            ";
            // line 61
            $this->displayBlock('sonata_post_fieldsets', $context, $blocks);
            // line 64
            echo "
            ";
            // line 65
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
            echo "

            ";
            // line 67
            $this->displayBlock('formactions', $context, $blocks);
            // line 111
            echo "        </form>
    ";
        }
        // line 113
        echo "
    ";
        // line 114
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.edit.form.bottom", array("admin" => (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "object" => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")))));
        echo "

";
        
        $__internal_7eaa9cfca74f0c155cc85302e8a8cdb3053ba587888a3bd4d2aff98c49372bc2->leave($__internal_7eaa9cfca74f0c155cc85302e8a8cdb3053ba587888a3bd4d2aff98c49372bc2_prof);

        
        $__internal_f9f711c8d2c3a4eaf339fa0f5828aaa71a424c0b69d1ab2c5939f5febb014dc8->leave($__internal_f9f711c8d2c3a4eaf339fa0f5828aaa71a424c0b69d1ab2c5939f5febb014dc8_prof);

    }

    // line 15
    public function block_sonata_form_action_url($context, array $blocks = array())
    {
        $__internal_db4d431213aeda57b34323b3d4c3b40586d2b0375f7010a4005573c3eef08c44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db4d431213aeda57b34323b3d4c3b40586d2b0375f7010a4005573c3eef08c44->enter($__internal_db4d431213aeda57b34323b3d4c3b40586d2b0375f7010a4005573c3eef08c44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_form_action_url"));

        $__internal_61e4d8bbff4307a645f0296a5bbd7b414206059d5ae1a28d8e58c01ab4c4e140 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61e4d8bbff4307a645f0296a5bbd7b414206059d5ae1a28d8e58c01ab4c4e140->enter($__internal_61e4d8bbff4307a645f0296a5bbd7b414206059d5ae1a28d8e58c01ab4c4e140_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_form_action_url"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), 1 => array("id" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "uniqid" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid", array()), "subclass" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "subclass"), "method"))), "method"), "html", null, true);
        
        $__internal_61e4d8bbff4307a645f0296a5bbd7b414206059d5ae1a28d8e58c01ab4c4e140->leave($__internal_61e4d8bbff4307a645f0296a5bbd7b414206059d5ae1a28d8e58c01ab4c4e140_prof);

        
        $__internal_db4d431213aeda57b34323b3d4c3b40586d2b0375f7010a4005573c3eef08c44->leave($__internal_db4d431213aeda57b34323b3d4c3b40586d2b0375f7010a4005573c3eef08c44_prof);

    }

    // line 19
    public function block_sonata_form_attributes($context, array $blocks = array())
    {
        $__internal_2194ba38f687840885639a64e8181dccddb1ef25ef447676519787ed9a2c8384 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2194ba38f687840885639a64e8181dccddb1ef25ef447676519787ed9a2c8384->enter($__internal_2194ba38f687840885639a64e8181dccddb1ef25ef447676519787ed9a2c8384_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_form_attributes"));

        $__internal_3de69bc6b7772ef28400fabbd1022e318efd4d1b8a98315256ee43cacde63f48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3de69bc6b7772ef28400fabbd1022e318efd4d1b8a98315256ee43cacde63f48->enter($__internal_3de69bc6b7772ef28400fabbd1022e318efd4d1b8a98315256ee43cacde63f48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_form_attributes"));

        
        $__internal_3de69bc6b7772ef28400fabbd1022e318efd4d1b8a98315256ee43cacde63f48->leave($__internal_3de69bc6b7772ef28400fabbd1022e318efd4d1b8a98315256ee43cacde63f48_prof);

        
        $__internal_2194ba38f687840885639a64e8181dccddb1ef25ef447676519787ed9a2c8384->leave($__internal_2194ba38f687840885639a64e8181dccddb1ef25ef447676519787ed9a2c8384_prof);

    }

    // line 24
    public function block_sonata_pre_fieldsets($context, array $blocks = array())
    {
        $__internal_97f5bde3a838fe88cf4e9f7a369dcdcad045914140637d2e9a7dd2fb22166cbe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97f5bde3a838fe88cf4e9f7a369dcdcad045914140637d2e9a7dd2fb22166cbe->enter($__internal_97f5bde3a838fe88cf4e9f7a369dcdcad045914140637d2e9a7dd2fb22166cbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_pre_fieldsets"));

        $__internal_efb51814fb6a05ec4ff12501c23e3d899cd22cb1c4d765c0b30582eb3fb4aea4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efb51814fb6a05ec4ff12501c23e3d899cd22cb1c4d765c0b30582eb3fb4aea4->enter($__internal_efb51814fb6a05ec4ff12501c23e3d899cd22cb1c4d765c0b30582eb3fb4aea4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_pre_fieldsets"));

        // line 25
        echo "                <div class=\"row\">
            ";
        
        $__internal_efb51814fb6a05ec4ff12501c23e3d899cd22cb1c4d765c0b30582eb3fb4aea4->leave($__internal_efb51814fb6a05ec4ff12501c23e3d899cd22cb1c4d765c0b30582eb3fb4aea4_prof);

        
        $__internal_97f5bde3a838fe88cf4e9f7a369dcdcad045914140637d2e9a7dd2fb22166cbe->leave($__internal_97f5bde3a838fe88cf4e9f7a369dcdcad045914140637d2e9a7dd2fb22166cbe_prof);

    }

    // line 28
    public function block_sonata_tab_content($context, array $blocks = array())
    {
        $__internal_74984bd80c566a41ce5d6578f839aa95d436f3a2dbb3423c114046b1b448cca7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74984bd80c566a41ce5d6578f839aa95d436f3a2dbb3423c114046b1b448cca7->enter($__internal_74984bd80c566a41ce5d6578f839aa95d436f3a2dbb3423c114046b1b448cca7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_tab_content"));

        $__internal_7ef0fd7b94daf4a527517e2236049a90c8e8b413f2b0ba6a251aab455ec91b86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ef0fd7b94daf4a527517e2236049a90c8e8b413f2b0ba6a251aab455ec91b86->enter($__internal_7ef0fd7b94daf4a527517e2236049a90c8e8b413f2b0ba6a251aab455ec91b86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_tab_content"));

        // line 29
        echo "                ";
        $context["has_tab"] = (((twig_length_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "formtabs", array())) == 1) && ($this->getAttribute(twig_get_array_keys_filter($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "formtabs", array())), 0, array(), "array") != "default")) || (twig_length_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "formtabs", array())) > 1));
        // line 30
        echo "
                <div class=\"col-md-12\">
                    ";
        // line 32
        if ((isset($context["has_tab"]) ? $context["has_tab"] : $this->getContext($context, "has_tab"))) {
            // line 33
            echo "                        <div class=\"nav-tabs-custom\">
                            <ul class=\"nav nav-tabs\" role=\"tablist\">
                                ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "formtabs", array()));
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
            foreach ($context['_seq'] as $context["name"] => $context["form_tab"]) {
                // line 36
                echo "                                    <li";
                if (($this->getAttribute($context["loop"], "index", array()) == 1)) {
                    echo " class=\"active\"";
                }
                echo "><a href=\"#tab_";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" data-toggle=\"tab\"><i class=\"fa fa-exclamation-circle has-errors hide\" aria-hidden=\"true\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["form_tab"], "label", array()), array(), (($this->getAttribute($context["form_tab"], "translation_domain", array())) ? ($this->getAttribute($context["form_tab"], "translation_domain", array())) : ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationDomain", array())))), "html", null, true);
                echo "</a></li>
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
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['form_tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "                            </ul>
                            <div class=\"tab-content\">
                                ";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "formtabs", array()));
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
            foreach ($context['_seq'] as $context["code"] => $context["form_tab"]) {
                // line 41
                echo "                                    <div class=\"tab-pane fade";
                if ($this->getAttribute($context["loop"], "first", array())) {
                    echo " in active";
                }
                echo "\" id=\"tab_";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\">
                                        <div class=\"box-body  container-fluid\">
                                            <div class=\"sonata-ba-collapsed-fields\">
                                                ";
                // line 44
                if (($this->getAttribute($context["form_tab"], "description", array()) != false)) {
                    // line 45
                    echo "                                                    <p>";
                    echo $this->getAttribute($context["form_tab"], "description", array());
                    echo "</p>
                                                ";
                }
                // line 47
                echo "
                                                ";
                // line 48
                echo $context["form_helper"]->getrender_groups((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), $this->getAttribute($context["form_tab"], "groups", array(), "array"), (isset($context["has_tab"]) ? $context["has_tab"] : $this->getContext($context, "has_tab")));
                echo "
                                            </div>
                                        </div>
                                    </div>
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
            unset($context['_seq'], $context['_iterated'], $context['code'], $context['form_tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "                            </div>
                        </div>
                    ";
        } else {
            // line 56
            echo "                        ";
            echo $context["form_helper"]->getrender_groups((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "formtabs", array()), "default", array(), "array"), "groups", array()), (isset($context["has_tab"]) ? $context["has_tab"] : $this->getContext($context, "has_tab")));
            echo "
                    ";
        }
        // line 58
        echo "                </div>
            ";
        
        $__internal_7ef0fd7b94daf4a527517e2236049a90c8e8b413f2b0ba6a251aab455ec91b86->leave($__internal_7ef0fd7b94daf4a527517e2236049a90c8e8b413f2b0ba6a251aab455ec91b86_prof);

        
        $__internal_74984bd80c566a41ce5d6578f839aa95d436f3a2dbb3423c114046b1b448cca7->leave($__internal_74984bd80c566a41ce5d6578f839aa95d436f3a2dbb3423c114046b1b448cca7_prof);

    }

    // line 61
    public function block_sonata_post_fieldsets($context, array $blocks = array())
    {
        $__internal_e28822b3a8fe0a16fab1fd289dc1257275ee1ee1201136f64ffd34a8b862e197 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e28822b3a8fe0a16fab1fd289dc1257275ee1ee1201136f64ffd34a8b862e197->enter($__internal_e28822b3a8fe0a16fab1fd289dc1257275ee1ee1201136f64ffd34a8b862e197_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_post_fieldsets"));

        $__internal_f59b3bf4dea63669710b0d043013e420759f8414060c2d0e2db54c78133a20f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f59b3bf4dea63669710b0d043013e420759f8414060c2d0e2db54c78133a20f9->enter($__internal_f59b3bf4dea63669710b0d043013e420759f8414060c2d0e2db54c78133a20f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_post_fieldsets"));

        // line 62
        echo "                </div>
            ";
        
        $__internal_f59b3bf4dea63669710b0d043013e420759f8414060c2d0e2db54c78133a20f9->leave($__internal_f59b3bf4dea63669710b0d043013e420759f8414060c2d0e2db54c78133a20f9_prof);

        
        $__internal_e28822b3a8fe0a16fab1fd289dc1257275ee1ee1201136f64ffd34a8b862e197->leave($__internal_e28822b3a8fe0a16fab1fd289dc1257275ee1ee1201136f64ffd34a8b862e197_prof);

    }

    // line 67
    public function block_formactions($context, array $blocks = array())
    {
        $__internal_889c928080b998f59df110fbe8f63a07b0ae3bde980c4da3960d8ca06f99cc41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_889c928080b998f59df110fbe8f63a07b0ae3bde980c4da3960d8ca06f99cc41->enter($__internal_889c928080b998f59df110fbe8f63a07b0ae3bde980c4da3960d8ca06f99cc41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formactions"));

        $__internal_5a0c2db16066795e51a3d7451e89b6ab4f2951388fde4dfddba6acbfc07bebfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a0c2db16066795e51a3d7451e89b6ab4f2951388fde4dfddba6acbfc07bebfa->enter($__internal_5a0c2db16066795e51a3d7451e89b6ab4f2951388fde4dfddba6acbfc07bebfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formactions"));

        // line 68
        echo "                <div class=\"sonata-ba-form-actions well well-small form-actions\">
                ";
        // line 69
        $this->displayBlock('sonata_form_actions', $context, $blocks);
        // line 109
        echo "                </div>
            ";
        
        $__internal_5a0c2db16066795e51a3d7451e89b6ab4f2951388fde4dfddba6acbfc07bebfa->leave($__internal_5a0c2db16066795e51a3d7451e89b6ab4f2951388fde4dfddba6acbfc07bebfa_prof);

        
        $__internal_889c928080b998f59df110fbe8f63a07b0ae3bde980c4da3960d8ca06f99cc41->leave($__internal_889c928080b998f59df110fbe8f63a07b0ae3bde980c4da3960d8ca06f99cc41_prof);

    }

    // line 69
    public function block_sonata_form_actions($context, array $blocks = array())
    {
        $__internal_ac6654d74739dc570d9eabf340c323418a592b6a6d47966ed1a43dc9741f3cc5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac6654d74739dc570d9eabf340c323418a592b6a6d47966ed1a43dc9741f3cc5->enter($__internal_ac6654d74739dc570d9eabf340c323418a592b6a6d47966ed1a43dc9741f3cc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_form_actions"));

        $__internal_05fd4bd56c19679dc784ab36780b6381f3f3531d14ca9204705d044bcc6f64b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05fd4bd56c19679dc784ab36780b6381f3f3531d14ca9204705d044bcc6f64b4->enter($__internal_05fd4bd56c19679dc784ab36780b6381f3f3531d14ca9204705d044bcc6f64b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_form_actions"));

        // line 70
        echo "                    ";
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "isxmlhttprequest", array())) {
            // line 71
            echo "                        ";
            if ( !(null === $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"))) {
                // line 72
                echo "                            <button type=\"submit\" class=\"btn btn-success\" name=\"btn_update\"><i class=\"fa fa-save\" aria-hidden=\"true\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_update", array(), "SonataAdminBundle"), "html", null, true);
                echo "</button>
                        ";
            } else {
                // line 74
                echo "                            <button type=\"submit\" class=\"btn btn-success\" name=\"btn_create\"><i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_create", array(), "SonataAdminBundle"), "html", null, true);
                echo "</button>
                        ";
            }
            // line 76
            echo "                    ";
        } else {
            // line 77
            echo "                        ";
            if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "supportsPreviewMode", array())) {
                // line 78
                echo "                            <button class=\"btn btn-info persist-preview\" name=\"btn_preview\" type=\"submit\">
                                <i class=\"fa fa-eye\" aria-hidden=\"true\"></i>
                                ";
                // line 80
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_preview", array(), "SonataAdminBundle"), "html", null, true);
                echo "
                            </button>
                        ";
            }
            // line 83
            echo "                        ";
            if ( !(null === $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"))) {
                // line 84
                echo "                            <button type=\"submit\" class=\"btn btn-success\" name=\"btn_update_and_edit\"><i class=\"fa fa-save\" aria-hidden=\"true\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_update_and_edit_again", array(), "SonataAdminBundle"), "html", null, true);
                echo "</button>

                            ";
                // line 86
                if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "list"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasAccess", array(0 => "list"), "method"))) {
                    // line 87
                    echo "                                <button type=\"submit\" class=\"btn btn-success\" name=\"btn_update_and_list\"><i class=\"fa fa-save\"></i> <i class=\"fa fa-list\" aria-hidden=\"true\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_update_and_return_to_list", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</button>
                            ";
                }
                // line 89
                echo "
                            ";
                // line 90
                if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "delete"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasAccess", array(0 => "delete", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"))) {
                    // line 91
                    echo "                                ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("delete_or", array(), "SonataAdminBundle"), "html", null, true);
                    echo "
                                <a class=\"btn btn-danger\" href=\"";
                    // line 92
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "delete", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
                    echo "\"><i class=\"fa fa-minus-circle\" aria-hidden=\"true\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_delete", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</a>
                            ";
                }
                // line 94
                echo "
                            ";
                // line 95
                if ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isAclEnabled", array(), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "acl"), "method")) && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasAccess", array(0 => "acl", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"))) {
                    // line 96
                    echo "                                <a class=\"btn btn-info\" href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "acl", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
                    echo "\"><i class=\"fa fa-users\" aria-hidden=\"true\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_edit_acl", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</a>
                            ";
                }
                // line 98
                echo "                        ";
            } else {
                // line 99
                echo "                            ";
                if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasroute", array(0 => "edit"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasAccess", array(0 => "edit"), "method"))) {
                    // line 100
                    echo "                                <button class=\"btn btn-success\" type=\"submit\" name=\"btn_create_and_edit\"><i class=\"fa fa-save\" aria-hidden=\"true\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_create_and_edit_again", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</button>
                            ";
                }
                // line 102
                echo "                            ";
                if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasroute", array(0 => "list"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasAccess", array(0 => "list"), "method"))) {
                    // line 103
                    echo "                                <button type=\"submit\" class=\"btn btn-success\" name=\"btn_create_and_list\"><i class=\"fa fa-save\"></i> <i class=\"fa fa-list\" aria-hidden=\"true\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_create_and_return_to_list", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</button>
                            ";
                }
                // line 105
                echo "                            <button class=\"btn btn-success\" type=\"submit\" name=\"btn_create_and_create\"><i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_create_and_create_a_new_one", array(), "SonataAdminBundle"), "html", null, true);
                echo "</button>
                        ";
            }
            // line 107
            echo "                    ";
        }
        // line 108
        echo "                ";
        
        $__internal_05fd4bd56c19679dc784ab36780b6381f3f3531d14ca9204705d044bcc6f64b4->leave($__internal_05fd4bd56c19679dc784ab36780b6381f3f3531d14ca9204705d044bcc6f64b4_prof);

        
        $__internal_ac6654d74739dc570d9eabf340c323418a592b6a6d47966ed1a43dc9741f3cc5->leave($__internal_ac6654d74739dc570d9eabf340c323418a592b6a6d47966ed1a43dc9741f3cc5_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_edit_form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  525 => 108,  522 => 107,  516 => 105,  510 => 103,  507 => 102,  501 => 100,  498 => 99,  495 => 98,  487 => 96,  485 => 95,  482 => 94,  475 => 92,  470 => 91,  468 => 90,  465 => 89,  459 => 87,  457 => 86,  451 => 84,  448 => 83,  442 => 80,  438 => 78,  435 => 77,  432 => 76,  426 => 74,  420 => 72,  417 => 71,  414 => 70,  405 => 69,  394 => 109,  392 => 69,  389 => 68,  380 => 67,  369 => 62,  360 => 61,  349 => 58,  343 => 56,  338 => 53,  319 => 48,  316 => 47,  310 => 45,  308 => 44,  295 => 41,  278 => 40,  274 => 38,  249 => 36,  232 => 35,  228 => 33,  226 => 32,  222 => 30,  219 => 29,  210 => 28,  199 => 25,  190 => 24,  173 => 19,  155 => 15,  142 => 114,  139 => 113,  135 => 111,  133 => 67,  128 => 65,  125 => 64,  123 => 61,  120 => 60,  118 => 28,  115 => 27,  113 => 24,  108 => 22,  104 => 20,  101 => 19,  97 => 18,  94 => 17,  90 => 16,  86 => 15,  83 => 14,  79 => 13,  76 => 12,  70 => 9,  67 => 8,  65 => 7,  62 => 6,  60 => 5,  54 => 3,  51 => 2,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block form %}
    {% import \"SonataAdminBundle:CRUD:base_edit_form_macro.html.twig\" as form_helper %}
    {{ sonata_block_render_event('sonata.admin.edit.form.top', { 'admin': admin, 'object': object }) }}

    {% set url = admin.id(object) is not null ? 'edit' : 'create' %}

    {% if not admin.hasRoute(url)%}
        <div>
            {{ \"form_not_available\"|trans({}, \"SonataAdminBundle\") }}
        </div>
    {% else %}
        <form
              {% if sonata_admin.adminPool.getOption('form_type') == 'horizontal' %}class=\"form-horizontal\"{% endif %}
              role=\"form\"
              action=\"{% block sonata_form_action_url %}{{ admin.generateUrl(url, {'id': admin.id(object), 'uniqid': admin.uniqid, 'subclass': app.request.get('subclass')}) }}{% endblock %}\"
              {% if form.vars.multipart %} enctype=\"multipart/form-data\"{% endif %}
              method=\"POST\"
              {% if not sonata_admin.adminPool.getOption('html5_validate') %}novalidate=\"novalidate\"{% endif %}
              {% block sonata_form_attributes %}{% endblock %}
              >

            {{ include('SonataAdminBundle:Helper:render_form_dismissable_errors.html.twig') }}

            {% block sonata_pre_fieldsets %}
                <div class=\"row\">
            {% endblock %}

            {% block sonata_tab_content %}
                {% set has_tab = ((admin.formtabs|length == 1 and admin.formtabs|keys[0] != 'default') or admin.formtabs|length > 1 ) %}

                <div class=\"col-md-12\">
                    {% if has_tab %}
                        <div class=\"nav-tabs-custom\">
                            <ul class=\"nav nav-tabs\" role=\"tablist\">
                                {% for name, form_tab in admin.formtabs %}
                                    <li{% if loop.index == 1 %} class=\"active\"{% endif %}><a href=\"#tab_{{ admin.uniqid }}_{{ loop.index }}\" data-toggle=\"tab\"><i class=\"fa fa-exclamation-circle has-errors hide\" aria-hidden=\"true\"></i> {{ form_tab.label|trans({}, form_tab.translation_domain ?: admin.translationDomain) }}</a></li>
                                {% endfor %}
                            </ul>
                            <div class=\"tab-content\">
                                {% for code, form_tab in admin.formtabs %}
                                    <div class=\"tab-pane fade{% if loop.first %} in active{% endif %}\" id=\"tab_{{ admin.uniqid }}_{{ loop.index }}\">
                                        <div class=\"box-body  container-fluid\">
                                            <div class=\"sonata-ba-collapsed-fields\">
                                                {% if form_tab.description != false %}
                                                    <p>{{ form_tab.description|raw }}</p>
                                                {% endif %}

                                                {{ form_helper.render_groups(admin, form, form_tab['groups'], has_tab) }}
                                            </div>
                                        </div>
                                    </div>
                                {% endfor %}
                            </div>
                        </div>
                    {% else %}
                        {{ form_helper.render_groups(admin, form, admin.formtabs['default'].groups, has_tab) }}
                    {% endif %}
                </div>
            {% endblock %}

            {% block sonata_post_fieldsets %}
                </div>
            {% endblock %}

            {{ form_rest(form) }}

            {% block formactions %}
                <div class=\"sonata-ba-form-actions well well-small form-actions\">
                {% block sonata_form_actions %}
                    {% if app.request.isxmlhttprequest %}
                        {% if admin.id(object) is not null %}
                            <button type=\"submit\" class=\"btn btn-success\" name=\"btn_update\"><i class=\"fa fa-save\" aria-hidden=\"true\"></i> {{ 'btn_update'|trans({}, 'SonataAdminBundle') }}</button>
                        {% else %}
                            <button type=\"submit\" class=\"btn btn-success\" name=\"btn_create\"><i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i> {{ 'btn_create'|trans({}, 'SonataAdminBundle') }}</button>
                        {% endif %}
                    {% else %}
                        {% if admin.supportsPreviewMode %}
                            <button class=\"btn btn-info persist-preview\" name=\"btn_preview\" type=\"submit\">
                                <i class=\"fa fa-eye\" aria-hidden=\"true\"></i>
                                {{ 'btn_preview'|trans({}, 'SonataAdminBundle') }}
                            </button>
                        {% endif %}
                        {% if admin.id(object) is not null %}
                            <button type=\"submit\" class=\"btn btn-success\" name=\"btn_update_and_edit\"><i class=\"fa fa-save\" aria-hidden=\"true\"></i> {{ 'btn_update_and_edit_again'|trans({}, 'SonataAdminBundle') }}</button>

                            {% if admin.hasRoute('list') and admin.hasAccess('list') %}
                                <button type=\"submit\" class=\"btn btn-success\" name=\"btn_update_and_list\"><i class=\"fa fa-save\"></i> <i class=\"fa fa-list\" aria-hidden=\"true\"></i> {{ 'btn_update_and_return_to_list'|trans({}, 'SonataAdminBundle') }}</button>
                            {% endif %}

                            {% if admin.hasRoute('delete') and admin.hasAccess('delete', object) %}
                                {{ 'delete_or'|trans({}, 'SonataAdminBundle') }}
                                <a class=\"btn btn-danger\" href=\"{{ admin.generateObjectUrl('delete', object) }}\"><i class=\"fa fa-minus-circle\" aria-hidden=\"true\"></i> {{ 'link_delete'|trans({}, 'SonataAdminBundle') }}</a>
                            {% endif %}

                            {% if admin.isAclEnabled() and admin.hasRoute('acl') and admin.hasAccess('acl', object) %}
                                <a class=\"btn btn-info\" href=\"{{ admin.generateObjectUrl('acl', object) }}\"><i class=\"fa fa-users\" aria-hidden=\"true\"></i> {{ 'link_edit_acl'|trans({}, 'SonataAdminBundle') }}</a>
                            {% endif %}
                        {% else %}
                            {% if admin.hasroute('edit') and admin.hasAccess('edit') %}
                                <button class=\"btn btn-success\" type=\"submit\" name=\"btn_create_and_edit\"><i class=\"fa fa-save\" aria-hidden=\"true\"></i> {{ 'btn_create_and_edit_again'|trans({}, 'SonataAdminBundle') }}</button>
                            {% endif %}
                            {% if admin.hasroute('list') and admin.hasAccess('list') %}
                                <button type=\"submit\" class=\"btn btn-success\" name=\"btn_create_and_list\"><i class=\"fa fa-save\"></i> <i class=\"fa fa-list\" aria-hidden=\"true\"></i> {{ 'btn_create_and_return_to_list'|trans({}, 'SonataAdminBundle') }}</button>
                            {% endif %}
                            <button class=\"btn btn-success\" type=\"submit\" name=\"btn_create_and_create\"><i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i> {{ 'btn_create_and_create_a_new_one'|trans({}, 'SonataAdminBundle') }}</button>
                        {% endif %}
                    {% endif %}
                {% endblock %}
                </div>
            {% endblock formactions %}
        </form>
    {% endif%}

    {{ sonata_block_render_event('sonata.admin.edit.form.bottom', { 'admin': admin, 'object': object }) }}

{% endblock %}
", "SonataAdminBundle:CRUD:base_edit_form.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\base_edit_form.html.twig");
    }
}
