<?php

/* SonataAdminBundle:CRUD:base_list.html.twig */
class __TwigTemplate_98008bee0428b5ff1fb646f62f71888fee9f9b80c3466311c9f8b76e7e219866 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'tab_menu' => array($this, 'block_tab_menu'),
            'title' => array($this, 'block_title'),
            'navbar_title' => array($this, 'block_navbar_title'),
            'list_table' => array($this, 'block_list_table'),
            'list_header' => array($this, 'block_list_header'),
            'table_header' => array($this, 'block_table_header'),
            'table_body' => array($this, 'block_table_body'),
            'table_footer' => array($this, 'block_table_footer'),
            'no_result_content' => array($this, 'block_no_result_content'),
            'list_footer' => array($this, 'block_list_footer'),
            'batch' => array($this, 'block_batch'),
            'batch_javascript' => array($this, 'block_batch_javascript'),
            'batch_actions' => array($this, 'block_batch_actions'),
            'pager_results' => array($this, 'block_pager_results'),
            'pager_links' => array($this, 'block_pager_links'),
            'list_filters_actions' => array($this, 'block_list_filters_actions'),
            'list_filters' => array($this, 'block_list_filters'),
            'sonata_list_filter_group_class' => array($this, 'block_sonata_list_filter_group_class'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:base_list.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f4c0a0066df06086106af97d7ff775eaae0c97e43e26ca0076b469e461961f66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4c0a0066df06086106af97d7ff775eaae0c97e43e26ca0076b469e461961f66->enter($__internal_f4c0a0066df06086106af97d7ff775eaae0c97e43e26ca0076b469e461961f66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_list.html.twig"));

        $__internal_1dcd9f07221a929a6ef44c3220814e402fadfa88d94e4ca1d0c2cbbf209d9deb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1dcd9f07221a929a6ef44c3220814e402fadfa88d94e4ca1d0c2cbbf209d9deb->enter($__internal_1dcd9f07221a929a6ef44c3220814e402fadfa88d94e4ca1d0c2cbbf209d9deb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_list.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f4c0a0066df06086106af97d7ff775eaae0c97e43e26ca0076b469e461961f66->leave($__internal_f4c0a0066df06086106af97d7ff775eaae0c97e43e26ca0076b469e461961f66_prof);

        
        $__internal_1dcd9f07221a929a6ef44c3220814e402fadfa88d94e4ca1d0c2cbbf209d9deb->leave($__internal_1dcd9f07221a929a6ef44c3220814e402fadfa88d94e4ca1d0c2cbbf209d9deb_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_7e4f08667bf644e95491327eb4ff38546d45d3d6d28a997df9cff6e0951ae305 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e4f08667bf644e95491327eb4ff38546d45d3d6d28a997df9cff6e0951ae305->enter($__internal_7e4f08667bf644e95491327eb4ff38546d45d3d6d28a997df9cff6e0951ae305_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        $__internal_413432852af8f61758ba5cae98e8d619c76c9fb9ed8cbe1bdbd0303a32b840ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_413432852af8f61758ba5cae98e8d619c76c9fb9ed8cbe1bdbd0303a32b840ee->enter($__internal_413432852af8f61758ba5cae98e8d619c76c9fb9ed8cbe1bdbd0303a32b840ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_list.html.twig", 15)->display($context);
        
        $__internal_413432852af8f61758ba5cae98e8d619c76c9fb9ed8cbe1bdbd0303a32b840ee->leave($__internal_413432852af8f61758ba5cae98e8d619c76c9fb9ed8cbe1bdbd0303a32b840ee_prof);

        
        $__internal_7e4f08667bf644e95491327eb4ff38546d45d3d6d28a997df9cff6e0951ae305->leave($__internal_7e4f08667bf644e95491327eb4ff38546d45d3d6d28a997df9cff6e0951ae305_prof);

    }

    // line 18
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_67e102d92f75aa6659209f5be92e50d61fa39e04b2d828f885b03eba186ccc60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67e102d92f75aa6659209f5be92e50d61fa39e04b2d828f885b03eba186ccc60->enter($__internal_67e102d92f75aa6659209f5be92e50d61fa39e04b2d828f885b03eba186ccc60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        $__internal_f3a6c553ee90588b665566764a5842bb8f5fb99dd52b22d78f42e26f900060de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3a6c553ee90588b665566764a5842bb8f5fb99dd52b22d78f42e26f900060de->enter($__internal_f3a6c553ee90588b665566764a5842bb8f5fb99dd52b22d78f42e26f900060de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
        
        $__internal_f3a6c553ee90588b665566764a5842bb8f5fb99dd52b22d78f42e26f900060de->leave($__internal_f3a6c553ee90588b665566764a5842bb8f5fb99dd52b22d78f42e26f900060de_prof);

        
        $__internal_67e102d92f75aa6659209f5be92e50d61fa39e04b2d828f885b03eba186ccc60->leave($__internal_67e102d92f75aa6659209f5be92e50d61fa39e04b2d828f885b03eba186ccc60_prof);

    }

    // line 20
    public function block_title($context, array $blocks = array())
    {
        $__internal_3445498df1cd05949f61f789074f9c66d0ac6d0c1f9c9a3757da24f7b9127b8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3445498df1cd05949f61f789074f9c66d0ac6d0c1f9c9a3757da24f7b9127b8d->enter($__internal_3445498df1cd05949f61f789074f9c66d0ac6d0c1f9c9a3757da24f7b9127b8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ebe1234f75edaecba8c939c82e0f27527d2071fadcf5b16e34e08f5da168e2e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebe1234f75edaecba8c939c82e0f27527d2071fadcf5b16e34e08f5da168e2e1->enter($__internal_ebe1234f75edaecba8c939c82e0f27527d2071fadcf5b16e34e08f5da168e2e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 21
        echo "    ";
        // line 25
        echo "
    ";
        // line 26
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isChild", array()) && $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "parent", array()), "subject", array()))) {
            // line 27
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_edit", array("%name%" => twig_truncate_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "parent", array()), "toString", array(0 => $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "parent", array()), "subject", array())), "method"), 15)), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        }
        
        $__internal_ebe1234f75edaecba8c939c82e0f27527d2071fadcf5b16e34e08f5da168e2e1->leave($__internal_ebe1234f75edaecba8c939c82e0f27527d2071fadcf5b16e34e08f5da168e2e1_prof);

        
        $__internal_3445498df1cd05949f61f789074f9c66d0ac6d0c1f9c9a3757da24f7b9127b8d->leave($__internal_3445498df1cd05949f61f789074f9c66d0ac6d0c1f9c9a3757da24f7b9127b8d_prof);

    }

    // line 31
    public function block_navbar_title($context, array $blocks = array())
    {
        $__internal_296ce3c55a4c2888715979dbb3af0f97e0855dfb156daa8d6e5fe2b945d4810c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_296ce3c55a4c2888715979dbb3af0f97e0855dfb156daa8d6e5fe2b945d4810c->enter($__internal_296ce3c55a4c2888715979dbb3af0f97e0855dfb156daa8d6e5fe2b945d4810c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_title"));

        $__internal_ca18b76f049230e6759878f487101743d372e69707e73a8a06e1e9b9238900bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca18b76f049230e6759878f487101743d372e69707e73a8a06e1e9b9238900bf->enter($__internal_ca18b76f049230e6759878f487101743d372e69707e73a8a06e1e9b9238900bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_title"));

        // line 32
        echo "    ";
        $this->displayBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_ca18b76f049230e6759878f487101743d372e69707e73a8a06e1e9b9238900bf->leave($__internal_ca18b76f049230e6759878f487101743d372e69707e73a8a06e1e9b9238900bf_prof);

        
        $__internal_296ce3c55a4c2888715979dbb3af0f97e0855dfb156daa8d6e5fe2b945d4810c->leave($__internal_296ce3c55a4c2888715979dbb3af0f97e0855dfb156daa8d6e5fe2b945d4810c_prof);

    }

    // line 35
    public function block_list_table($context, array $blocks = array())
    {
        $__internal_f05217bbbbef833f162338b46c6551239e9861fd5b6b46ae49ff60f04f4cc3a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f05217bbbbef833f162338b46c6551239e9861fd5b6b46ae49ff60f04f4cc3a8->enter($__internal_f05217bbbbef833f162338b46c6551239e9861fd5b6b46ae49ff60f04f4cc3a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_table"));

        $__internal_fb3a63fc6712df8998cbfc339feb871a0688aa237b6b40dbea9e9f2a745090d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb3a63fc6712df8998cbfc339feb871a0688aa237b6b40dbea9e9f2a745090d1->enter($__internal_fb3a63fc6712df8998cbfc339feb871a0688aa237b6b40dbea9e9f2a745090d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_table"));

        // line 36
        echo "    <div class=\"col-xs-12 col-md-12\">
        ";
        // line 37
        $context["batchactions"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "batchactions", array());
        // line 38
        echo "        ";
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "batch"), "method") && twig_length_filter($this->env, (isset($context["batchactions"]) ? $context["batchactions"] : $this->getContext($context, "batchactions"))))) {
            // line 39
            echo "            <form action=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "batch", 1 => array("filter" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "filterParameters", array()))), "method"), "html", null, true);
            echo "\" method=\"POST\" >
            <input type=\"hidden\" name=\"_sonata_csrf_token\" value=\"";
            // line 40
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
            echo "\">
        ";
        }
        // line 42
        echo "
        ";
        // line 44
        echo "        <div class=\"box box-primary\" ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "lastPage", array()) == 1)) {
            echo "style=\"margin-bottom: 100px;\"";
        }
        echo ">
            <div class=\"box-body ";
        // line 45
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "results", array())) > 0)) {
            echo "table-responsive no-padding";
        }
        echo "\">
                ";
        // line 46
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.list.table.top", array("admin" => (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")))));
        echo "

                ";
        // line 48
        $this->displayBlock('list_header', $context, $blocks);
        // line 49
        echo "
                ";
        // line 50
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "results", array())) > 0)) {
            // line 51
            echo "                    <table class=\"table table-bordered table-striped sonata-ba-list\">
                        ";
            // line 52
            $this->displayBlock('table_header', $context, $blocks);
            // line 88
            echo "
                        ";
            // line 89
            $this->displayBlock('table_body', $context, $blocks);
            // line 94
            echo "
                        ";
            // line 95
            $this->displayBlock('table_footer', $context, $blocks);
            // line 97
            echo "                    </table>
                ";
        } else {
            // line 99
            echo "                    ";
            $this->displayBlock('no_result_content', $context, $blocks);
            // line 117
            echo "                ";
        }
        // line 118
        echo "
                ";
        // line 119
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.list.table.bottom", array("admin" => (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")))));
        echo "
            </div>
            ";
        // line 121
        $this->displayBlock('list_footer', $context, $blocks);
        // line 221
        echo "        </div>
        ";
        // line 222
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "batch"), "method") && twig_length_filter($this->env, (isset($context["batchactions"]) ? $context["batchactions"] : $this->getContext($context, "batchactions"))))) {
            // line 223
            echo "            </form>
        ";
        }
        // line 225
        echo "    </div>
";
        
        $__internal_fb3a63fc6712df8998cbfc339feb871a0688aa237b6b40dbea9e9f2a745090d1->leave($__internal_fb3a63fc6712df8998cbfc339feb871a0688aa237b6b40dbea9e9f2a745090d1_prof);

        
        $__internal_f05217bbbbef833f162338b46c6551239e9861fd5b6b46ae49ff60f04f4cc3a8->leave($__internal_f05217bbbbef833f162338b46c6551239e9861fd5b6b46ae49ff60f04f4cc3a8_prof);

    }

    // line 48
    public function block_list_header($context, array $blocks = array())
    {
        $__internal_f78434479b34339f8db56d66dec8250b5a4f7e1d3b2df37d6fd492cb1adfef88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f78434479b34339f8db56d66dec8250b5a4f7e1d3b2df37d6fd492cb1adfef88->enter($__internal_f78434479b34339f8db56d66dec8250b5a4f7e1d3b2df37d6fd492cb1adfef88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_header"));

        $__internal_3d22da1ec33570c89b0a6a40f2760c1ef1482b68cdb634b54e6bf91e00a964d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d22da1ec33570c89b0a6a40f2760c1ef1482b68cdb634b54e6bf91e00a964d1->enter($__internal_3d22da1ec33570c89b0a6a40f2760c1ef1482b68cdb634b54e6bf91e00a964d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_header"));

        
        $__internal_3d22da1ec33570c89b0a6a40f2760c1ef1482b68cdb634b54e6bf91e00a964d1->leave($__internal_3d22da1ec33570c89b0a6a40f2760c1ef1482b68cdb634b54e6bf91e00a964d1_prof);

        
        $__internal_f78434479b34339f8db56d66dec8250b5a4f7e1d3b2df37d6fd492cb1adfef88->leave($__internal_f78434479b34339f8db56d66dec8250b5a4f7e1d3b2df37d6fd492cb1adfef88_prof);

    }

    // line 52
    public function block_table_header($context, array $blocks = array())
    {
        $__internal_b704a4802cda1d5542176e9792816a42366a9eb751c998e9c0fc5f8f14b82a00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b704a4802cda1d5542176e9792816a42366a9eb751c998e9c0fc5f8f14b82a00->enter($__internal_b704a4802cda1d5542176e9792816a42366a9eb751c998e9c0fc5f8f14b82a00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_header"));

        $__internal_c3daeafe16a6a9d5a6001cbd20f2d49da0164440278bb17d363b9b72fbabf547 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3daeafe16a6a9d5a6001cbd20f2d49da0164440278bb17d363b9b72fbabf547->enter($__internal_c3daeafe16a6a9d5a6001cbd20f2d49da0164440278bb17d363b9b72fbabf547_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_header"));

        // line 53
        echo "                            <thead>
                                <tr class=\"sonata-ba-list-field-header\">
                                    ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "list", array()), "elements", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["field_description"]) {
            // line 56
            echo "                                        ";
            if ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "batch"), "method") && ($this->getAttribute($context["field_description"], "getOption", array(0 => "code"), "method") == "_batch")) && (twig_length_filter($this->env, (isset($context["batchactions"]) ? $context["batchactions"] : $this->getContext($context, "batchactions"))) > 0))) {
                // line 57
                echo "                                            <th class=\"sonata-ba-list-field-header sonata-ba-list-field-header-batch\">
                                              <input type=\"checkbox\" id=\"list_batch_checkbox\">
                                            </th>
                                        ";
            } elseif (($this->getAttribute(            // line 60
$context["field_description"], "getOption", array(0 => "code"), "method") == "_select")) {
                // line 61
                echo "                                            <th class=\"sonata-ba-list-field-header sonata-ba-list-field-header-select\"></th>
                                        ";
            } elseif ((($this->getAttribute(            // line 62
$context["field_description"], "name", array()) == "_action") && $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "isXmlHttpRequest", array()))) {
                // line 63
                echo "                                            ";
                // line 64
                echo "                                        ";
            } elseif ((($this->getAttribute($context["field_description"], "getOption", array(0 => "ajax_hidden"), "method") == true) && $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "isXmlHttpRequest", array()))) {
                // line 65
                echo "                                            ";
                // line 66
                echo "                                        ";
            } else {
                // line 67
                echo "                                            ";
                $context["sortable"] = false;
                // line 68
                echo "                                            ";
                if (($this->getAttribute($this->getAttribute($context["field_description"], "options", array(), "any", false, true), "sortable", array(), "any", true, true) && $this->getAttribute($this->getAttribute($context["field_description"], "options", array()), "sortable", array()))) {
                    // line 69
                    echo "                                                ";
                    $context["sortable"] = true;
                    // line 70
                    echo "                                                ";
                    $context["sort_parameters"] = $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "modelmanager", array()), "sortparameters", array(0 => $context["field_description"], 1 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array())), "method");
                    // line 71
                    echo "                                                ";
                    $context["current"] = (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "values", array()), "_sort_by", array()) == $context["field_description"]) || ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "values", array()), "_sort_by", array()), "fieldName", array()) == $this->getAttribute($this->getAttribute((isset($context["sort_parameters"]) ? $context["sort_parameters"] : $this->getContext($context, "sort_parameters")), "filter", array()), "_sort_by", array())));
                    // line 72
                    echo "                                                ";
                    $context["sort_active_class"] = (((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current"))) ? ("sonata-ba-list-field-order-active") : (""));
                    // line 73
                    echo "                                                ";
                    $context["sort_by"] = (((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current"))) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "values", array()), "_sort_order", array())) : ($this->getAttribute($this->getAttribute($context["field_description"], "options", array()), "_sort_order", array())));
                    // line 74
                    echo "                                            ";
                }
                // line 75
                echo "
                                            ";
                // line 76
                ob_start();
                // line 77
                echo "                                                <th class=\"sonata-ba-list-field-header-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["field_description"], "type", array()), "html", null, true);
                echo " ";
                if ((isset($context["sortable"]) ? $context["sortable"] : $this->getContext($context, "sortable"))) {
                    echo " sonata-ba-list-field-header-order-";
                    echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["sort_by"]) ? $context["sort_by"] : $this->getContext($context, "sort_by"))), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, (isset($context["sort_active_class"]) ? $context["sort_active_class"] : $this->getContext($context, "sort_active_class")), "html", null, true);
                }
                if ($this->getAttribute($this->getAttribute($context["field_description"], "options", array(), "any", false, true), "header_class", array(), "any", true, true)) {
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["field_description"], "options", array()), "header_class", array()), "html", null, true);
                }
                echo "\"";
                if ($this->getAttribute($this->getAttribute($context["field_description"], "options", array(), "any", false, true), "header_style", array(), "any", true, true)) {
                    echo " style=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["field_description"], "options", array()), "header_style", array()), "html", null, true);
                    echo "\"";
                }
                echo ">
                                                    ";
                // line 78
                if ((isset($context["sortable"]) ? $context["sortable"] : $this->getContext($context, "sortable"))) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => (isset($context["sort_parameters"]) ? $context["sort_parameters"] : $this->getContext($context, "sort_parameters"))), "method"), "html", null, true);
                    echo "\">";
                }
                // line 79
                echo "                                                    ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["field_description"], "label", array()), array(), $this->getAttribute($context["field_description"], "translationDomain", array())), "html", null, true);
                echo "
                                                    ";
                // line 80
                if ((isset($context["sortable"]) ? $context["sortable"] : $this->getContext($context, "sortable"))) {
                    echo "</a>";
                }
                // line 81
                echo "                                                </th>
                                            ";
                echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
                // line 83
                echo "                                        ";
            }
            // line 84
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_description'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "                                </tr>
                            </thead>
                        ";
        
        $__internal_c3daeafe16a6a9d5a6001cbd20f2d49da0164440278bb17d363b9b72fbabf547->leave($__internal_c3daeafe16a6a9d5a6001cbd20f2d49da0164440278bb17d363b9b72fbabf547_prof);

        
        $__internal_b704a4802cda1d5542176e9792816a42366a9eb751c998e9c0fc5f8f14b82a00->leave($__internal_b704a4802cda1d5542176e9792816a42366a9eb751c998e9c0fc5f8f14b82a00_prof);

    }

    // line 89
    public function block_table_body($context, array $blocks = array())
    {
        $__internal_9cc5f7bc395b603f2f8e44c8a18a3318d1d4dd2fb45bd3013736bc38fe0fdbbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cc5f7bc395b603f2f8e44c8a18a3318d1d4dd2fb45bd3013736bc38fe0fdbbc->enter($__internal_9cc5f7bc395b603f2f8e44c8a18a3318d1d4dd2fb45bd3013736bc38fe0fdbbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_body"));

        $__internal_fd96354b294601cd4f259f76ef75bf424206392317d7471b00190114598a09ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd96354b294601cd4f259f76ef75bf424206392317d7471b00190114598a09ee->enter($__internal_fd96354b294601cd4f259f76ef75bf424206392317d7471b00190114598a09ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_body"));

        // line 90
        echo "                            <tbody>
                                ";
        // line 91
        $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => ("outer_list_rows_" . $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getListMode", array(), "method"))), "method"), "SonataAdminBundle:CRUD:base_list.html.twig", 91)->display($context);
        // line 92
        echo "                            </tbody>
                        ";
        
        $__internal_fd96354b294601cd4f259f76ef75bf424206392317d7471b00190114598a09ee->leave($__internal_fd96354b294601cd4f259f76ef75bf424206392317d7471b00190114598a09ee_prof);

        
        $__internal_9cc5f7bc395b603f2f8e44c8a18a3318d1d4dd2fb45bd3013736bc38fe0fdbbc->leave($__internal_9cc5f7bc395b603f2f8e44c8a18a3318d1d4dd2fb45bd3013736bc38fe0fdbbc_prof);

    }

    // line 95
    public function block_table_footer($context, array $blocks = array())
    {
        $__internal_1f15edfd7f49079600d486c33b27199ceea3c433d9acc254f5d63c5c0669e4c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f15edfd7f49079600d486c33b27199ceea3c433d9acc254f5d63c5c0669e4c0->enter($__internal_1f15edfd7f49079600d486c33b27199ceea3c433d9acc254f5d63c5c0669e4c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_footer"));

        $__internal_08996c8e34dd48e40d4a8a7847fea7fdb2df9da90fbfcd3eed8413ccfc0247d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08996c8e34dd48e40d4a8a7847fea7fdb2df9da90fbfcd3eed8413ccfc0247d7->enter($__internal_08996c8e34dd48e40d4a8a7847fea7fdb2df9da90fbfcd3eed8413ccfc0247d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_footer"));

        // line 96
        echo "                        ";
        
        $__internal_08996c8e34dd48e40d4a8a7847fea7fdb2df9da90fbfcd3eed8413ccfc0247d7->leave($__internal_08996c8e34dd48e40d4a8a7847fea7fdb2df9da90fbfcd3eed8413ccfc0247d7_prof);

        
        $__internal_1f15edfd7f49079600d486c33b27199ceea3c433d9acc254f5d63c5c0669e4c0->leave($__internal_1f15edfd7f49079600d486c33b27199ceea3c433d9acc254f5d63c5c0669e4c0_prof);

    }

    // line 99
    public function block_no_result_content($context, array $blocks = array())
    {
        $__internal_b79d448c240df5f4afc69b8841fdaa7d542ffed0f2feaf1bdf9fee6e41f1a553 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b79d448c240df5f4afc69b8841fdaa7d542ffed0f2feaf1bdf9fee6e41f1a553->enter($__internal_b79d448c240df5f4afc69b8841fdaa7d542ffed0f2feaf1bdf9fee6e41f1a553_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "no_result_content"));

        $__internal_98c54bb25c66eb82c2cf5606525ceabf3931e7c1da0e1cc7fd49e6a6df85cc3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98c54bb25c66eb82c2cf5606525ceabf3931e7c1da0e1cc7fd49e6a6df85cc3a->enter($__internal_98c54bb25c66eb82c2cf5606525ceabf3931e7c1da0e1cc7fd49e6a6df85cc3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "no_result_content"));

        // line 100
        echo "                        <div class=\"info-box\">
                            <span class=\"info-box-icon bg-aqua\"><i class=\"fa fa-arrow-circle-right\" aria-hidden=\"true\"></i></span>
                            <div class=\"info-box-content\">
                                <span class=\"info-box-text\">";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("no_result", array(), "SonataAdminBundle"), "html", null, true);
        echo "</span>
                                <div class=\"progress\">
                                    <div class=\"progress-bar\" style=\"width: 0%\"></div>
                                </div>
                                <span class=\"progress-description\">
                                    ";
        // line 108
        if ( !$this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "xmlHttpRequest", array())) {
            // line 109
            echo "                                    <ul class=\"list-unstyled\">
                                        ";
            // line 110
            $this->loadTemplate("SonataAdminBundle:Button:create_button.html.twig", "SonataAdminBundle:CRUD:base_list.html.twig", 110)->display($context);
            // line 111
            echo "                                    </ul>
                                    ";
        }
        // line 113
        echo "                                </span>
                            </div><!-- /.info-box-content -->
                        </div>
                    ";
        
        $__internal_98c54bb25c66eb82c2cf5606525ceabf3931e7c1da0e1cc7fd49e6a6df85cc3a->leave($__internal_98c54bb25c66eb82c2cf5606525ceabf3931e7c1da0e1cc7fd49e6a6df85cc3a_prof);

        
        $__internal_b79d448c240df5f4afc69b8841fdaa7d542ffed0f2feaf1bdf9fee6e41f1a553->leave($__internal_b79d448c240df5f4afc69b8841fdaa7d542ffed0f2feaf1bdf9fee6e41f1a553_prof);

    }

    // line 121
    public function block_list_footer($context, array $blocks = array())
    {
        $__internal_80ebe60ddcdf4f7b83944a2e3f7939cb99a0245985b8662bb76a5431e6f4bd9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80ebe60ddcdf4f7b83944a2e3f7939cb99a0245985b8662bb76a5431e6f4bd9a->enter($__internal_80ebe60ddcdf4f7b83944a2e3f7939cb99a0245985b8662bb76a5431e6f4bd9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_footer"));

        $__internal_8d9daa2e9e07db1bc962b7ae55b5ff7a8fbb2940d228096f8318b5a378b02ab2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d9daa2e9e07db1bc962b7ae55b5ff7a8fbb2940d228096f8318b5a378b02ab2->enter($__internal_8d9daa2e9e07db1bc962b7ae55b5ff7a8fbb2940d228096f8318b5a378b02ab2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_footer"));

        // line 122
        echo "                ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "results", array())) > 0)) {
            // line 123
            echo "                    <div class=\"box-footer\">
                        <div class=\"form-inline clearfix\">
                            ";
            // line 125
            if ( !$this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "isXmlHttpRequest", array())) {
                // line 126
                echo "                                <div class=\"pull-left\">
                                    ";
                // line 127
                if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "batch"), "method") && (twig_length_filter($this->env, (isset($context["batchactions"]) ? $context["batchactions"] : $this->getContext($context, "batchactions"))) > 0))) {
                    // line 128
                    echo "                                        ";
                    $this->displayBlock('batch', $context, $blocks);
                    // line 175
                    echo "                                    ";
                }
                // line 176
                echo "                                </div>


                                ";
                // line 180
                echo "                                ";
                $context["export_formats"] = ((array_key_exists("export_formats", $context)) ? (_twig_default_filter((isset($context["export_formats"]) ? $context["export_formats"] : $this->getContext($context, "export_formats")), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "exportFormats", array()))) : ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "exportFormats", array())));
                // line 181
                echo "
                                <div class=\"pull-right\">
                                    ";
                // line 183
                if ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "export"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasAccess", array(0 => "export"), "method")) && twig_length_filter($this->env, (isset($context["export_formats"]) ? $context["export_formats"] : $this->getContext($context, "export_formats"))))) {
                    // line 184
                    echo "                                        <div class=\"btn-group\">
                                            <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
                                                <i class=\"fa fa-share-square-o\" aria-hidden=\"true\"></i>
                                                ";
                    // line 187
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label_export_download", array(), "SonataAdminBundle"), "html", null, true);
                    echo "
                                                <span class=\"caret\"></span>
                                            </button>
                                            <ul class=\"dropdown-menu\">
                                                ";
                    // line 191
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["export_formats"]) ? $context["export_formats"] : $this->getContext($context, "export_formats")));
                    foreach ($context['_seq'] as $context["_key"] => $context["format"]) {
                        // line 192
                        echo "                                                <li>
                                                    <a href=\"";
                        // line 193
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "export", 1 => ($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "modelmanager", array()), "paginationparameters", array(0 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), 1 => 0), "method") + array("format" => $context["format"]))), "method"), "html", null, true);
                        echo "\">
                                                        <i class=\"fa fa-arrow-circle-o-down\" aria-hidden=\"true\"></i>
                                                        ";
                        // line 195
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(("export_format_" . $context["format"]), array(), "SonataAdminBundle"), "html", null, true);
                        echo "
                                                    </a>
                                                <li>
                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['format'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 199
                    echo "                                            </ul>
                                        </div>

                                        &nbsp;-&nbsp;
                                    ";
                }
                // line 204
                echo "
                                    ";
                // line 205
                $this->displayBlock('pager_results', $context, $blocks);
                // line 208
                echo "                                </div>
                            ";
            }
            // line 210
            echo "                        </div>

                        ";
            // line 212
            $this->displayBlock('pager_links', $context, $blocks);
            // line 218
            echo "                    </div>
                ";
        }
        // line 220
        echo "            ";
        
        $__internal_8d9daa2e9e07db1bc962b7ae55b5ff7a8fbb2940d228096f8318b5a378b02ab2->leave($__internal_8d9daa2e9e07db1bc962b7ae55b5ff7a8fbb2940d228096f8318b5a378b02ab2_prof);

        
        $__internal_80ebe60ddcdf4f7b83944a2e3f7939cb99a0245985b8662bb76a5431e6f4bd9a->leave($__internal_80ebe60ddcdf4f7b83944a2e3f7939cb99a0245985b8662bb76a5431e6f4bd9a_prof);

    }

    // line 128
    public function block_batch($context, array $blocks = array())
    {
        $__internal_a8b29ce013817b36d99cc45460ad13cf08474fc05cb6d6f94f652529582eab52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8b29ce013817b36d99cc45460ad13cf08474fc05cb6d6f94f652529582eab52->enter($__internal_a8b29ce013817b36d99cc45460ad13cf08474fc05cb6d6f94f652529582eab52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "batch"));

        $__internal_1db18631c06d679acaf930900971638a711b7e349fda9b9b01f4c5cf1d1cd8be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1db18631c06d679acaf930900971638a711b7e349fda9b9b01f4c5cf1d1cd8be->enter($__internal_1db18631c06d679acaf930900971638a711b7e349fda9b9b01f4c5cf1d1cd8be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "batch"));

        // line 129
        echo "                                            <script>
                                                ";
        // line 130
        $this->displayBlock('batch_javascript', $context, $blocks);
        // line 157
        echo "                                            </script>

                                        ";
        // line 159
        $this->displayBlock('batch_actions', $context, $blocks);
        // line 172
        echo "
                                            <input type=\"submit\" class=\"btn btn-small btn-primary\" value=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_batch", array(), "SonataAdminBundle"), "html", null, true);
        echo "\">
                                        ";
        
        $__internal_1db18631c06d679acaf930900971638a711b7e349fda9b9b01f4c5cf1d1cd8be->leave($__internal_1db18631c06d679acaf930900971638a711b7e349fda9b9b01f4c5cf1d1cd8be_prof);

        
        $__internal_a8b29ce013817b36d99cc45460ad13cf08474fc05cb6d6f94f652529582eab52->leave($__internal_a8b29ce013817b36d99cc45460ad13cf08474fc05cb6d6f94f652529582eab52_prof);

    }

    // line 130
    public function block_batch_javascript($context, array $blocks = array())
    {
        $__internal_e865bbd5cf049507dec6c6c032dbd855f4f4d18de4307968ad887bcc1e6c8347 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e865bbd5cf049507dec6c6c032dbd855f4f4d18de4307968ad887bcc1e6c8347->enter($__internal_e865bbd5cf049507dec6c6c032dbd855f4f4d18de4307968ad887bcc1e6c8347_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "batch_javascript"));

        $__internal_ab368bf513fc9e1dc9d94ce94fcf059c17f1d3630bf1a03fc1a980bc052df4cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab368bf513fc9e1dc9d94ce94fcf059c17f1d3630bf1a03fc1a980bc052df4cd->enter($__internal_ab368bf513fc9e1dc9d94ce94fcf059c17f1d3630bf1a03fc1a980bc052df4cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "batch_javascript"));

        // line 131
        echo "                                                    jQuery(document).ready(function (\$) {
                                                        // Toggle individual checkboxes when the batch checkbox is changed
                                                        \$('#list_batch_checkbox').on('ifChanged change', function () {
                                                            var checkboxes = \$(this)
                                                                .closest('table')
                                                                .find('td.sonata-ba-list-field-batch input[type=\"checkbox\"], div.sonata-ba-list-field-batch input[type=\"checkbox\"]')
                                                            ;
                                                            if (window.SONATA_CONFIG.USE_ICHECK) {
                                                                checkboxes.iCheck(\$(this).is(':checked') ? 'check' : 'uncheck');
                                                            } else {
                                                                checkboxes.prop('checked', this.checked);
                                                            }
                                                        });

                                                        // Add a CSS class to rows when they are selected
                                                        \$('td.sonata-ba-list-field-batch input[type=\"checkbox\"], div.sonata-ba-list-field-batch input[type=\"checkbox\"]')
                                                            .on('ifChanged change', function () {
                                                                \$(this)
                                                                    .closest('tr, div.sonata-ba-list-field-batch')
                                                                    .toggleClass('sonata-ba-list-row-selected', \$(this).is(':checked'))
                                                                ;
                                                            })
                                                            .trigger('ifChanged')
                                                        ;
                                                    });
                                                ";
        
        $__internal_ab368bf513fc9e1dc9d94ce94fcf059c17f1d3630bf1a03fc1a980bc052df4cd->leave($__internal_ab368bf513fc9e1dc9d94ce94fcf059c17f1d3630bf1a03fc1a980bc052df4cd_prof);

        
        $__internal_e865bbd5cf049507dec6c6c032dbd855f4f4d18de4307968ad887bcc1e6c8347->leave($__internal_e865bbd5cf049507dec6c6c032dbd855f4f4d18de4307968ad887bcc1e6c8347_prof);

    }

    // line 159
    public function block_batch_actions($context, array $blocks = array())
    {
        $__internal_ad40f4cc28750ab3eae072e0f26b88876542f7ecc220911e4023ed2e2980c6b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad40f4cc28750ab3eae072e0f26b88876542f7ecc220911e4023ed2e2980c6b9->enter($__internal_ad40f4cc28750ab3eae072e0f26b88876542f7ecc220911e4023ed2e2980c6b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "batch_actions"));

        $__internal_53167ea1036bb972ececa20c888077a59ef85f199dd2da5550f0e69e9b80875f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53167ea1036bb972ececa20c888077a59ef85f199dd2da5550f0e69e9b80875f->enter($__internal_53167ea1036bb972ececa20c888077a59ef85f199dd2da5550f0e69e9b80875f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "batch_actions"));

        // line 160
        echo "                                            <label class=\"checkbox\" for=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
        echo "_all_elements\">
                                                <input type=\"checkbox\" name=\"all_elements\" id=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
        echo "_all_elements\">
                                                ";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("all_elements", array(), "SonataAdminBundle"), "html", null, true);
        echo "
                                                (";
        // line 163
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "nbresults", array()), "html", null, true);
        echo ")
                                            </label>

                                            <select name=\"action\" style=\"width: auto; height: auto\" class=\"form-control\">
                                                ";
        // line 167
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["batchactions"]) ? $context["batchactions"] : $this->getContext($context, "batchactions")));
        foreach ($context['_seq'] as $context["action"] => $context["options"]) {
            // line 168
            echo "                                                    <option value=\"";
            echo twig_escape_filter($this->env, $context["action"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["options"], "label", array()), array(), (($this->getAttribute($context["options"], "translation_domain", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["options"], "translation_domain", array()), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationDomain", array()))) : ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationDomain", array())))), "html", null, true);
            echo "</option>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['action'], $context['options'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 170
        echo "                                            </select>
                                        ";
        
        $__internal_53167ea1036bb972ececa20c888077a59ef85f199dd2da5550f0e69e9b80875f->leave($__internal_53167ea1036bb972ececa20c888077a59ef85f199dd2da5550f0e69e9b80875f_prof);

        
        $__internal_ad40f4cc28750ab3eae072e0f26b88876542f7ecc220911e4023ed2e2980c6b9->leave($__internal_ad40f4cc28750ab3eae072e0f26b88876542f7ecc220911e4023ed2e2980c6b9_prof);

    }

    // line 205
    public function block_pager_results($context, array $blocks = array())
    {
        $__internal_7e486b5f72c40039c7907ed73e982ca50330e11bbbacc987cb0cfb39adb1dee2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e486b5f72c40039c7907ed73e982ca50330e11bbbacc987cb0cfb39adb1dee2->enter($__internal_7e486b5f72c40039c7907ed73e982ca50330e11bbbacc987cb0cfb39adb1dee2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pager_results"));

        $__internal_4880d017f16e24f5d4a9d7817639a7b8f85504d25c71297fd483dfd5bcee571f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4880d017f16e24f5d4a9d7817639a7b8f85504d25c71297fd483dfd5bcee571f->enter($__internal_4880d017f16e24f5d4a9d7817639a7b8f85504d25c71297fd483dfd5bcee571f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pager_results"));

        // line 206
        echo "                                        ";
        $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "pager_results"), "method"), "SonataAdminBundle:CRUD:base_list.html.twig", 206)->display($context);
        // line 207
        echo "                                    ";
        
        $__internal_4880d017f16e24f5d4a9d7817639a7b8f85504d25c71297fd483dfd5bcee571f->leave($__internal_4880d017f16e24f5d4a9d7817639a7b8f85504d25c71297fd483dfd5bcee571f_prof);

        
        $__internal_7e486b5f72c40039c7907ed73e982ca50330e11bbbacc987cb0cfb39adb1dee2->leave($__internal_7e486b5f72c40039c7907ed73e982ca50330e11bbbacc987cb0cfb39adb1dee2_prof);

    }

    // line 212
    public function block_pager_links($context, array $blocks = array())
    {
        $__internal_8485f94b147f4be60139c9c83585d2a76b478ebd7ba3dbaac9c71ac89cf1f5ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8485f94b147f4be60139c9c83585d2a76b478ebd7ba3dbaac9c71ac89cf1f5ea->enter($__internal_8485f94b147f4be60139c9c83585d2a76b478ebd7ba3dbaac9c71ac89cf1f5ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pager_links"));

        $__internal_8428d75906cb656374933a9f6bb285e0c6663a3c56ca9b9d7b4821e84d95518f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8428d75906cb656374933a9f6bb285e0c6663a3c56ca9b9d7b4821e84d95518f->enter($__internal_8428d75906cb656374933a9f6bb285e0c6663a3c56ca9b9d7b4821e84d95518f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pager_links"));

        // line 213
        echo "                            ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "haveToPaginate", array(), "method")) {
            // line 214
            echo "                                <hr/>
                                ";
            // line 215
            $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "pager_links"), "method"), "SonataAdminBundle:CRUD:base_list.html.twig", 215)->display($context);
            // line 216
            echo "                            ";
        }
        // line 217
        echo "                        ";
        
        $__internal_8428d75906cb656374933a9f6bb285e0c6663a3c56ca9b9d7b4821e84d95518f->leave($__internal_8428d75906cb656374933a9f6bb285e0c6663a3c56ca9b9d7b4821e84d95518f_prof);

        
        $__internal_8485f94b147f4be60139c9c83585d2a76b478ebd7ba3dbaac9c71ac89cf1f5ea->leave($__internal_8485f94b147f4be60139c9c83585d2a76b478ebd7ba3dbaac9c71ac89cf1f5ea_prof);

    }

    // line 228
    public function block_list_filters_actions($context, array $blocks = array())
    {
        $__internal_d7c2eb938dda6adcdf8c628de8b78d392512944665eb0e376d52adb5b7c24252 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7c2eb938dda6adcdf8c628de8b78d392512944665eb0e376d52adb5b7c24252->enter($__internal_d7c2eb938dda6adcdf8c628de8b78d392512944665eb0e376d52adb5b7c24252_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_filters_actions"));

        $__internal_01b5571cc7ccae5dc39f75cd13c11ad3bb1868786dabcb53f38e3de7b0a31a98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01b5571cc7ccae5dc39f75cd13c11ad3bb1868786dabcb53f38e3de7b0a31a98->enter($__internal_01b5571cc7ccae5dc39f75cd13c11ad3bb1868786dabcb53f38e3de7b0a31a98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_filters_actions"));

        // line 229
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "filters", array()))) {
            // line 230
            echo "        <ul class=\"nav navbar-nav navbar-right\">

            <li class=\"dropdown sonata-actions\">
                <a href=\"#\" class=\"dropdown-toggle sonata-ba-action\" data-toggle=\"dropdown\">
                    <i class=\"fa fa-filter\" aria-hidden=\"true\"></i>
                    ";
            // line 235
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_filters", array(), "SonataAdminBundle"), "html", null, true);
            echo " <b class=\"caret\"></b>
                </a>

                <ul class=\"dropdown-menu\" role=\"menu\">
                    ";
            // line 239
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "filters", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                if ((($this->getAttribute($this->getAttribute($context["filter"], "options", array()), "show_filter", array(), "array") === true) || (null === $this->getAttribute($this->getAttribute($context["filter"], "options", array()), "show_filter", array(), "array")))) {
                    // line 240
                    echo "                        ";
                    $context["filterActive"] = (($this->getAttribute($context["filter"], "isActive", array(), "method") || $this->getAttribute($this->getAttribute($context["filter"], "options", array()), "show_filter", array(), "array")) &&  !$this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isDefaultFilter", array(0 => $this->getAttribute($context["filter"], "formName", array())), "method"));
                    // line 241
                    echo "                        <li>
                            <a href=\"#\" class=\"sonata-toggle-filter sonata-ba-action\" filter-target=\"filter-";
                    // line 242
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["filter"], "name", array()), "html", null, true);
                    echo "\" filter-container=\"filter-container-";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid", array(), "method"), "html", null, true);
                    echo "\">
                                <i class=\"fa ";
                    // line 243
                    echo ((($this->getAttribute($context["filter"], "isActive", array(), "method") || $this->getAttribute($this->getAttribute($context["filter"], "options", array()), "show_filter", array(), "array"))) ? ("fa-check-square-o") : ("fa-square-o"));
                    echo "\"></i>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["filter"], "label", array()), array(), (($this->getAttribute($context["filter"], "translationDomain", array())) ? ($this->getAttribute($context["filter"], "translationDomain", array())) : ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationDomain", array())))), "html", null, true);
                    echo "
                            </a>
                        </li>
                    ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 247
            echo "                </ul>
            </li>
        </ul>
    ";
        }
        
        $__internal_01b5571cc7ccae5dc39f75cd13c11ad3bb1868786dabcb53f38e3de7b0a31a98->leave($__internal_01b5571cc7ccae5dc39f75cd13c11ad3bb1868786dabcb53f38e3de7b0a31a98_prof);

        
        $__internal_d7c2eb938dda6adcdf8c628de8b78d392512944665eb0e376d52adb5b7c24252->leave($__internal_d7c2eb938dda6adcdf8c628de8b78d392512944665eb0e376d52adb5b7c24252_prof);

    }

    // line 253
    public function block_list_filters($context, array $blocks = array())
    {
        $__internal_30820bb87c1b4ca0d710df66e05940d5c8be31097a939fa627f1a4b4e43b459c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30820bb87c1b4ca0d710df66e05940d5c8be31097a939fa627f1a4b4e43b459c->enter($__internal_30820bb87c1b4ca0d710df66e05940d5c8be31097a939fa627f1a4b4e43b459c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_filters"));

        $__internal_3dfa3ce2857e8202898b30910e86543191d91666fc836e81a30358f5fe5cbaeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3dfa3ce2857e8202898b30910e86543191d91666fc836e81a30358f5fe5cbaeb->enter($__internal_3dfa3ce2857e8202898b30910e86543191d91666fc836e81a30358f5fe5cbaeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_filters"));

        // line 254
        echo "    ";
        if ($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "filters", array())) {
            // line 255
            echo "        ";
            $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "filter"), "method")));
            // line 256
            echo "
        <div class=\"col-xs-12 col-md-12 sonata-filters-box\" style=\"display: ";
            // line 257
            echo (($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "hasDisplayableFilters", array())) ? ("block") : ("none"));
            echo "\" id=\"filter-container-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid", array(), "method"), "html", null, true);
            echo "\">
            <div class=\"box box-primary\" >
                <div class=\"box-body\">
                    <form class=\"sonata-filter-form form-horizontal ";
            // line 260
            echo ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isChild", array()) && (1 == twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "filters", array()))))) ? ("hide") : (""));
            echo "\" action=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list"), "method"), "html", null, true);
            echo "\" method=\"GET\" role=\"form\">
                        ";
            // line 261
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            echo "

                        <div class=\"row\">
                            <div class=\"col-sm-9\">
                                ";
            // line 265
            $context["withAdvancedFilter"] = false;
            // line 266
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "filters", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                // line 267
                echo "                                    ";
                $context["filterActive"] = ((($this->getAttribute($context["filter"], "isActive", array(), "method") && (null === $this->getAttribute($this->getAttribute($context["filter"], "options", array()), "show_filter", array(), "array"))) || ($this->getAttribute($this->getAttribute($context["filter"], "options", array()), "show_filter", array(), "array") === true)) &&  !$this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isDefaultFilter", array(0 => $this->getAttribute($context["filter"], "formName", array())), "method"));
                // line 268
                echo "                                    ";
                $context["filterVisible"] = (($this->getAttribute($this->getAttribute($context["filter"], "options", array()), "show_filter", array(), "array") === true) || (null === $this->getAttribute($this->getAttribute($context["filter"], "options", array()), "show_filter", array(), "array")));
                // line 269
                echo "                                    <div class=\"form-group ";
                $this->displayBlock('sonata_list_filter_group_class', $context, $blocks);
                echo "\" id=\"filter-";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["filter"], "name", array()), "html", null, true);
                echo "\" sonata-filter=\"";
                echo (((isset($context["filterVisible"]) ? $context["filterVisible"] : $this->getContext($context, "filterVisible"))) ? ("true") : ("false"));
                echo "\" style=\"display: ";
                if ((isset($context["filterActive"]) ? $context["filterActive"] : $this->getContext($context, "filterActive"))) {
                    echo "block";
                } else {
                    echo "none";
                }
                echo "\">
                                        ";
                // line 270
                if ( !($this->getAttribute($context["filter"], "label", array()) === false)) {
                    // line 271
                    echo "                                            <label for=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()), $this->getAttribute($context["filter"], "formName", array()), array(), "array"), "children", array()), "value", array(), "array"), "vars", array()), "id", array()), "html", null, true);
                    echo "\" class=\"col-sm-3 control-label\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["filter"], "label", array()), array(), (($this->getAttribute($context["filter"], "translationDomain", array())) ? ($this->getAttribute($context["filter"], "translationDomain", array())) : ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationDomain", array())))), "html", null, true);
                    echo "</label>
                                        ";
                }
                // line 273
                echo "                                        ";
                $context["attr"] = (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children", array(), "any", false, true), $this->getAttribute($context["filter"], "formName", array()), array(), "array", false, true), "children", array(), "any", false, true), "type", array(), "array", false, true), "vars", array(), "any", false, true), "attr", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children", array(), "any", false, true), $this->getAttribute($context["filter"], "formName", array()), array(), "array", false, true), "children", array(), "any", false, true), "type", array(), "array", false, true), "vars", array(), "any", false, true), "attr", array()), array())) : (array()));
                // line 274
                echo "
                                        <div class=\"col-sm-4 advanced-filter\">
                                            ";
                // line 276
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()), $this->getAttribute($context["filter"], "formName", array()), array(), "array"), "children", array()), "type", array(), "array"), 'widget', array("attr" => (isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr"))));
                echo "
                                        </div>

                                        <div class=\"col-sm-4\">
                                            ";
                // line 280
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()), $this->getAttribute($context["filter"], "formName", array()), array(), "array"), "children", array()), "value", array(), "array"), 'widget');
                echo "
                                        </div>

                                        <div class=\"col-sm-1\">
                                            <label class=\"control-label\">
                                                <a href=\"#\" class=\"sonata-toggle-filter sonata-ba-action\" filter-target=\"filter-";
                // line 285
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["filter"], "name", array()), "html", null, true);
                echo "\" filter-container=\"filter-container-";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid", array(), "method"), "html", null, true);
                echo "\">
                                                    <i class=\"fa fa-minus-circle\" aria-hidden=\"true\"></i>
                                                </a>
                                            </label>
                                        </div>
                                    </div>

                                    ";
                // line 292
                if ($this->getAttribute($this->getAttribute($context["filter"], "options", array()), "advanced_filter", array(), "array")) {
                    // line 293
                    echo "                                        ";
                    $context["withAdvancedFilter"] = true;
                    // line 294
                    echo "                                    ";
                }
                // line 295
                echo "                                ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 296
            echo "                            </div>
                            <div class=\"col-sm-3 text-center\">
                                <input type=\"hidden\" name=\"filter[_page]\" id=\"filter__page\" value=\"1\">

                                ";
            // line 300
            $context["foo"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()), "_page", array(), "array"), "setRendered", array(), "method");
            // line 301
            echo "                                ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
            echo "

                                <div class=\"form-group\">
                                    <button type=\"submit\" class=\"btn btn-primary\">
                                        <i class=\"fa fa-filter\" aria-hidden=\"true\"></i> ";
            // line 305
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_filter", array(), "SonataAdminBundle"), "html", null, true);
            echo "
                                    </button>

                                    <a class=\"btn btn-default\" href=\"";
            // line 308
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => array("filters" => "reset")), "method"), "html", null, true);
            echo "\">
                                        ";
            // line 309
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_reset_filter", array(), "SonataAdminBundle"), "html", null, true);
            echo "
                                    </a>
                                </div>

                                ";
            // line 313
            if ((isset($context["withAdvancedFilter"]) ? $context["withAdvancedFilter"] : $this->getContext($context, "withAdvancedFilter"))) {
                // line 314
                echo "                                    <div class=\"form-group\">
                                        <a href=\"#\" data-toggle=\"advanced-filter\">
                                            <i class=\"fa fa-cogs\" aria-hidden=\"true\"></i>
                                            ";
                // line 317
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_advanced_filters", array(), "SonataAdminBundle"), "html", null, true);
                echo "
                                        </a>
                                    </div>
                                ";
            }
            // line 321
            echo "                            </div>
                        </div>

                        ";
            // line 324
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "persistentParameters", array()));
            foreach ($context['_seq'] as $context["paramKey"] => $context["paramValue"]) {
                // line 325
                echo "                            <input type=\"hidden\" name=\"";
                echo twig_escape_filter($this->env, $context["paramKey"], "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, $context["paramValue"], "html", null, true);
                echo "\">
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['paramKey'], $context['paramValue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 327
            echo "                    </form>
                </div>
            </div>
        </div>
    ";
        }
        
        $__internal_3dfa3ce2857e8202898b30910e86543191d91666fc836e81a30358f5fe5cbaeb->leave($__internal_3dfa3ce2857e8202898b30910e86543191d91666fc836e81a30358f5fe5cbaeb_prof);

        
        $__internal_30820bb87c1b4ca0d710df66e05940d5c8be31097a939fa627f1a4b4e43b459c->leave($__internal_30820bb87c1b4ca0d710df66e05940d5c8be31097a939fa627f1a4b4e43b459c_prof);

    }

    // line 269
    public function block_sonata_list_filter_group_class($context, array $blocks = array())
    {
        $__internal_51a9017fb6d00127908e0e97f3a12212d5b05685f17b9d666a4a939c31227403 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51a9017fb6d00127908e0e97f3a12212d5b05685f17b9d666a4a939c31227403->enter($__internal_51a9017fb6d00127908e0e97f3a12212d5b05685f17b9d666a4a939c31227403_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_list_filter_group_class"));

        $__internal_dff0f84b0201c0250b423dad0364d7ce0a9f6623eccd13c8101d34a1f064e0b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dff0f84b0201c0250b423dad0364d7ce0a9f6623eccd13c8101d34a1f064e0b8->enter($__internal_dff0f84b0201c0250b423dad0364d7ce0a9f6623eccd13c8101d34a1f064e0b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_list_filter_group_class"));

        
        $__internal_dff0f84b0201c0250b423dad0364d7ce0a9f6623eccd13c8101d34a1f064e0b8->leave($__internal_dff0f84b0201c0250b423dad0364d7ce0a9f6623eccd13c8101d34a1f064e0b8_prof);

        
        $__internal_51a9017fb6d00127908e0e97f3a12212d5b05685f17b9d666a4a939c31227403->leave($__internal_51a9017fb6d00127908e0e97f3a12212d5b05685f17b9d666a4a939c31227403_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1098 => 269,  1083 => 327,  1072 => 325,  1068 => 324,  1063 => 321,  1056 => 317,  1051 => 314,  1049 => 313,  1042 => 309,  1038 => 308,  1032 => 305,  1024 => 301,  1022 => 300,  1016 => 296,  1002 => 295,  999 => 294,  996 => 293,  994 => 292,  980 => 285,  972 => 280,  965 => 276,  961 => 274,  958 => 273,  950 => 271,  948 => 270,  931 => 269,  928 => 268,  925 => 267,  907 => 266,  905 => 265,  898 => 261,  892 => 260,  884 => 257,  881 => 256,  878 => 255,  875 => 254,  866 => 253,  852 => 247,  839 => 243,  831 => 242,  828 => 241,  825 => 240,  820 => 239,  813 => 235,  806 => 230,  804 => 229,  795 => 228,  785 => 217,  782 => 216,  780 => 215,  777 => 214,  774 => 213,  765 => 212,  755 => 207,  752 => 206,  743 => 205,  732 => 170,  721 => 168,  717 => 167,  710 => 163,  706 => 162,  702 => 161,  697 => 160,  688 => 159,  653 => 131,  644 => 130,  632 => 173,  629 => 172,  627 => 159,  623 => 157,  621 => 130,  618 => 129,  609 => 128,  599 => 220,  595 => 218,  593 => 212,  589 => 210,  585 => 208,  583 => 205,  580 => 204,  573 => 199,  563 => 195,  558 => 193,  555 => 192,  551 => 191,  544 => 187,  539 => 184,  537 => 183,  533 => 181,  530 => 180,  525 => 176,  522 => 175,  519 => 128,  517 => 127,  514 => 126,  512 => 125,  508 => 123,  505 => 122,  496 => 121,  483 => 113,  479 => 111,  477 => 110,  474 => 109,  472 => 108,  464 => 103,  459 => 100,  450 => 99,  440 => 96,  431 => 95,  420 => 92,  418 => 91,  415 => 90,  406 => 89,  394 => 85,  388 => 84,  385 => 83,  381 => 81,  377 => 80,  372 => 79,  366 => 78,  344 => 77,  342 => 76,  339 => 75,  336 => 74,  333 => 73,  330 => 72,  327 => 71,  324 => 70,  321 => 69,  318 => 68,  315 => 67,  312 => 66,  310 => 65,  307 => 64,  305 => 63,  303 => 62,  300 => 61,  298 => 60,  293 => 57,  290 => 56,  286 => 55,  282 => 53,  273 => 52,  256 => 48,  245 => 225,  241 => 223,  239 => 222,  236 => 221,  234 => 121,  229 => 119,  226 => 118,  223 => 117,  220 => 99,  216 => 97,  214 => 95,  211 => 94,  209 => 89,  206 => 88,  204 => 52,  201 => 51,  199 => 50,  196 => 49,  194 => 48,  189 => 46,  183 => 45,  176 => 44,  173 => 42,  168 => 40,  163 => 39,  160 => 38,  158 => 37,  155 => 36,  146 => 35,  133 => 32,  124 => 31,  110 => 27,  108 => 26,  105 => 25,  103 => 21,  94 => 20,  76 => 18,  66 => 15,  57 => 14,  36 => 12,);
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

{% extends base_template %}

{%- block actions -%}
    {% include 'SonataAdminBundle:CRUD:action_buttons.html.twig' %}
{%- endblock -%}

{% block tab_menu %}{{ knp_menu_render(admin.sidemenu(action), {'currentClass' : 'active', 'template': sonata_admin.adminPool.getTemplate('tab_menu_template')}, 'twig') }}{% endblock %}

{% block title %}
    {#
        The list template can be used in nested mode,
        so we define the title corresponding to the parent's admin.
    #}

    {% if admin.isChild and admin.parent.subject %}
        {{ \"title_edit\"|trans({'%name%': admin.parent.toString(admin.parent.subject)|truncate(15) }, 'SonataAdminBundle') }}
    {% endif %}
{% endblock %}

{% block navbar_title %}
    {{ block('title') }}
{% endblock %}

{% block list_table %}
    <div class=\"col-xs-12 col-md-12\">
        {% set batchactions = admin.batchactions %}
        {% if admin.hasRoute('batch') and batchactions|length %}
            <form action=\"{{ admin.generateUrl('batch', {'filter': admin.filterParameters}) }}\" method=\"POST\" >
            <input type=\"hidden\" name=\"_sonata_csrf_token\" value=\"{{ csrf_token }}\">
        {% endif %}

        {# Add a margin if no pager to prevent dropdown cropping on window #}
        <div class=\"box box-primary\" {% if admin.datagrid.pager.lastPage == 1 %}style=\"margin-bottom: 100px;\"{% endif %}>
            <div class=\"box-body {% if admin.datagrid.results|length > 0 %}table-responsive no-padding{% endif %}\">
                {{ sonata_block_render_event('sonata.admin.list.table.top', { 'admin': admin }) }}

                {% block list_header %}{% endblock %}

                {% if admin.datagrid.results|length > 0 %}
                    <table class=\"table table-bordered table-striped sonata-ba-list\">
                        {% block table_header %}
                            <thead>
                                <tr class=\"sonata-ba-list-field-header\">
                                    {% for field_description in admin.list.elements %}
                                        {% if admin.hasRoute('batch') and field_description.getOption('code') == '_batch' and batchactions|length > 0 %}
                                            <th class=\"sonata-ba-list-field-header sonata-ba-list-field-header-batch\">
                                              <input type=\"checkbox\" id=\"list_batch_checkbox\">
                                            </th>
                                        {% elseif field_description.getOption('code') == '_select' %}
                                            <th class=\"sonata-ba-list-field-header sonata-ba-list-field-header-select\"></th>
                                        {% elseif field_description.name == '_action' and app.request.isXmlHttpRequest %}
                                            {# Action buttons disabled in ajax view! #}
                                        {% elseif field_description.getOption('ajax_hidden') == true and app.request.isXmlHttpRequest %}
                                            {# Disable fields with 'ajax_hidden' option set to true #}
                                        {% else %}
                                            {% set sortable = false %}
                                            {% if field_description.options.sortable is defined and field_description.options.sortable %}
                                                {% set sortable             = true %}
                                                {% set sort_parameters      = admin.modelmanager.sortparameters(field_description, admin.datagrid) %}
                                                {% set current              = admin.datagrid.values._sort_by == field_description or admin.datagrid.values._sort_by.fieldName == sort_parameters.filter._sort_by %}
                                                {% set sort_active_class    = current ? 'sonata-ba-list-field-order-active' : '' %}
                                                {% set sort_by              = current ? admin.datagrid.values._sort_order : field_description.options._sort_order %}
                                            {% endif %}

                                            {% spaceless %}
                                                <th class=\"sonata-ba-list-field-header-{{ field_description.type}} {% if sortable %} sonata-ba-list-field-header-order-{{ sort_by|lower }} {{ sort_active_class }}{% endif %}{% if field_description.options.header_class is defined %} {{ field_description.options.header_class }}{% endif %}\"{% if field_description.options.header_style is defined %} style=\"{{ field_description.options.header_style }}\"{% endif %}>
                                                    {% if sortable %}<a href=\"{{ admin.generateUrl('list', sort_parameters) }}\">{% endif %}
                                                    {{ field_description.label|trans({}, field_description.translationDomain) }}
                                                    {% if sortable %}</a>{% endif %}
                                                </th>
                                            {% endspaceless %}
                                        {% endif %}
                                    {% endfor %}
                                </tr>
                            </thead>
                        {% endblock %}

                        {% block table_body %}
                            <tbody>
                                {% include admin.getTemplate('outer_list_rows_' ~ admin.getListMode()) %}
                            </tbody>
                        {% endblock %}

                        {% block table_footer %}
                        {% endblock %}
                    </table>
                {% else %}
                    {% block no_result_content %}
                        <div class=\"info-box\">
                            <span class=\"info-box-icon bg-aqua\"><i class=\"fa fa-arrow-circle-right\" aria-hidden=\"true\"></i></span>
                            <div class=\"info-box-content\">
                                <span class=\"info-box-text\">{{ 'no_result'|trans({}, 'SonataAdminBundle') }}</span>
                                <div class=\"progress\">
                                    <div class=\"progress-bar\" style=\"width: 0%\"></div>
                                </div>
                                <span class=\"progress-description\">
                                    {% if not app.request.xmlHttpRequest %}
                                    <ul class=\"list-unstyled\">
                                        {% include 'SonataAdminBundle:Button:create_button.html.twig' %}
                                    </ul>
                                    {% endif %}
                                </span>
                            </div><!-- /.info-box-content -->
                        </div>
                    {% endblock %}
                {% endif %}

                {{ sonata_block_render_event('sonata.admin.list.table.bottom', { 'admin': admin }) }}
            </div>
            {% block list_footer %}
                {% if admin.datagrid.results|length > 0 %}
                    <div class=\"box-footer\">
                        <div class=\"form-inline clearfix\">
                            {% if not app.request.isXmlHttpRequest %}
                                <div class=\"pull-left\">
                                    {% if admin.hasRoute('batch') and batchactions|length > 0  %}
                                        {% block batch %}
                                            <script>
                                                {% block batch_javascript %}
                                                    jQuery(document).ready(function (\$) {
                                                        // Toggle individual checkboxes when the batch checkbox is changed
                                                        \$('#list_batch_checkbox').on('ifChanged change', function () {
                                                            var checkboxes = \$(this)
                                                                .closest('table')
                                                                .find('td.sonata-ba-list-field-batch input[type=\"checkbox\"], div.sonata-ba-list-field-batch input[type=\"checkbox\"]')
                                                            ;
                                                            if (window.SONATA_CONFIG.USE_ICHECK) {
                                                                checkboxes.iCheck(\$(this).is(':checked') ? 'check' : 'uncheck');
                                                            } else {
                                                                checkboxes.prop('checked', this.checked);
                                                            }
                                                        });

                                                        // Add a CSS class to rows when they are selected
                                                        \$('td.sonata-ba-list-field-batch input[type=\"checkbox\"], div.sonata-ba-list-field-batch input[type=\"checkbox\"]')
                                                            .on('ifChanged change', function () {
                                                                \$(this)
                                                                    .closest('tr, div.sonata-ba-list-field-batch')
                                                                    .toggleClass('sonata-ba-list-row-selected', \$(this).is(':checked'))
                                                                ;
                                                            })
                                                            .trigger('ifChanged')
                                                        ;
                                                    });
                                                {% endblock %}
                                            </script>

                                        {% block batch_actions %}
                                            <label class=\"checkbox\" for=\"{{ admin.uniqid }}_all_elements\">
                                                <input type=\"checkbox\" name=\"all_elements\" id=\"{{ admin.uniqid }}_all_elements\">
                                                {{ 'all_elements'|trans({}, 'SonataAdminBundle') }}
                                                ({{ admin.datagrid.pager.nbresults }})
                                            </label>

                                            <select name=\"action\" style=\"width: auto; height: auto\" class=\"form-control\">
                                                {% for action, options in batchactions %}
                                                    <option value=\"{{ action }}\">{{ options.label|trans({}, options.translation_domain|default(admin.translationDomain)) }}</option>
                                                {% endfor %}
                                            </select>
                                        {% endblock %}

                                            <input type=\"submit\" class=\"btn btn-small btn-primary\" value=\"{{ 'btn_batch'|trans({}, 'SonataAdminBundle') }}\">
                                        {% endblock %}
                                    {% endif %}
                                </div>


                                {# NEXT_MAJOR : remove this assignment #}
                                {% set export_formats = export_formats|default(admin.exportFormats) %}

                                <div class=\"pull-right\">
                                    {% if admin.hasRoute('export') and admin.hasAccess('export') and export_formats|length %}
                                        <div class=\"btn-group\">
                                            <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
                                                <i class=\"fa fa-share-square-o\" aria-hidden=\"true\"></i>
                                                {{ \"label_export_download\"|trans({}, \"SonataAdminBundle\") }}
                                                <span class=\"caret\"></span>
                                            </button>
                                            <ul class=\"dropdown-menu\">
                                                {% for format in export_formats %}
                                                <li>
                                                    <a href=\"{{ admin.generateUrl('export', admin.modelmanager.paginationparameters(admin.datagrid, 0) + {'format' : format}) }}\">
                                                        <i class=\"fa fa-arrow-circle-o-down\" aria-hidden=\"true\"></i>
                                                        {{ (\"export_format_\" ~ format)|trans({}, 'SonataAdminBundle') }}
                                                    </a>
                                                <li>
                                                {% endfor %}
                                            </ul>
                                        </div>

                                        &nbsp;-&nbsp;
                                    {% endif %}

                                    {% block pager_results %}
                                        {% include admin.getTemplate('pager_results') %}
                                    {% endblock %}
                                </div>
                            {% endif %}
                        </div>

                        {% block pager_links %}
                            {% if admin.datagrid.pager.haveToPaginate() %}
                                <hr/>
                                {% include admin.getTemplate('pager_links') %}
                            {% endif %}
                        {% endblock %}
                    </div>
                {% endif %}
            {% endblock %}
        </div>
        {% if admin.hasRoute('batch') and batchactions|length %}
            </form>
        {% endif %}
    </div>
{% endblock %}

{% block list_filters_actions %}
    {%- if admin.datagrid.filters|length %}
        <ul class=\"nav navbar-nav navbar-right\">

            <li class=\"dropdown sonata-actions\">
                <a href=\"#\" class=\"dropdown-toggle sonata-ba-action\" data-toggle=\"dropdown\">
                    <i class=\"fa fa-filter\" aria-hidden=\"true\"></i>
                    {{ 'link_filters'|trans({}, 'SonataAdminBundle') }} <b class=\"caret\"></b>
                </a>

                <ul class=\"dropdown-menu\" role=\"menu\">
                    {% for filter in admin.datagrid.filters if (filter.options['show_filter'] is same as(true) or filter.options['show_filter'] is null) %}
                        {% set filterActive = ((filter.isActive() or filter.options['show_filter']) and not admin.isDefaultFilter(filter.formName)) %}
                        <li>
                            <a href=\"#\" class=\"sonata-toggle-filter sonata-ba-action\" filter-target=\"filter-{{ admin.uniqid }}-{{ filter.name }}\" filter-container=\"filter-container-{{ admin.uniqid() }}\">
                                <i class=\"fa {{ (filter.isActive() or filter.options['show_filter']) ? 'fa-check-square-o' : 'fa-square-o' }}\"></i>{{ filter.label|trans({}, filter.translationDomain ?: admin.translationDomain) }}
                            </a>
                        </li>
                    {% endfor %}
                </ul>
            </li>
        </ul>
    {% endif -%}
{% endblock %}

{% block list_filters %}
    {% if admin.datagrid.filters %}
        {% form_theme form admin.getTemplate('filter') %}

        <div class=\"col-xs-12 col-md-12 sonata-filters-box\" style=\"display: {{ admin.datagrid.hasDisplayableFilters ? 'block' : 'none' }}\" id=\"filter-container-{{ admin.uniqid() }}\">
            <div class=\"box box-primary\" >
                <div class=\"box-body\">
                    <form class=\"sonata-filter-form form-horizontal {{ admin.isChild and 1 == admin.datagrid.filters|length ? 'hide' : '' }}\" action=\"{{ admin.generateUrl('list') }}\" method=\"GET\" role=\"form\">
                        {{ form_errors(form) }}

                        <div class=\"row\">
                            <div class=\"col-sm-9\">
                                {% set withAdvancedFilter = false %}
                                {% for filter in admin.datagrid.filters %}
                                    {% set filterActive = ((filter.isActive() and filter.options['show_filter'] is null) or (filter.options['show_filter'] is same as(true))) and not admin.isDefaultFilter(filter.formName) %}
                                    {% set filterVisible = filter.options['show_filter'] is same as(true) or filter.options['show_filter'] is null %}
                                    <div class=\"form-group {% block sonata_list_filter_group_class %}{% endblock %}\" id=\"filter-{{ admin.uniqid }}-{{ filter.name }}\" sonata-filter=\"{{ filterVisible ? 'true' : 'false' }}\" style=\"display: {% if filterActive %}block{% else %}none{% endif %}\">
                                        {% if filter.label is not same as(false) %}
                                            <label for=\"{{ form.children[filter.formName].children['value'].vars.id }}\" class=\"col-sm-3 control-label\">{{ filter.label|trans({}, filter.translationDomain ?: admin.translationDomain) }}</label>
                                        {% endif %}
                                        {% set attr = form.children[filter.formName].children['type'].vars.attr|default({}) %}

                                        <div class=\"col-sm-4 advanced-filter\">
                                            {{ form_widget(form.children[filter.formName].children['type'], {'attr':  attr}) }}
                                        </div>

                                        <div class=\"col-sm-4\">
                                            {{ form_widget(form.children[filter.formName].children['value']) }}
                                        </div>

                                        <div class=\"col-sm-1\">
                                            <label class=\"control-label\">
                                                <a href=\"#\" class=\"sonata-toggle-filter sonata-ba-action\" filter-target=\"filter-{{ admin.uniqid }}-{{ filter.name }}\" filter-container=\"filter-container-{{ admin.uniqid() }}\">
                                                    <i class=\"fa fa-minus-circle\" aria-hidden=\"true\"></i>
                                                </a>
                                            </label>
                                        </div>
                                    </div>

                                    {% if filter.options['advanced_filter'] %}
                                        {% set withAdvancedFilter = true %}
                                    {% endif %}
                                {% endfor %}
                            </div>
                            <div class=\"col-sm-3 text-center\">
                                <input type=\"hidden\" name=\"filter[_page]\" id=\"filter__page\" value=\"1\">

                                {% set foo = form.children['_page'].setRendered() %}
                                {{ form_rest(form) }}

                                <div class=\"form-group\">
                                    <button type=\"submit\" class=\"btn btn-primary\">
                                        <i class=\"fa fa-filter\" aria-hidden=\"true\"></i> {{ 'btn_filter'|trans({}, 'SonataAdminBundle') }}
                                    </button>

                                    <a class=\"btn btn-default\" href=\"{{ admin.generateUrl('list', {filters: 'reset'}) }}\">
                                        {{ 'link_reset_filter'|trans({}, 'SonataAdminBundle') }}
                                    </a>
                                </div>

                                {% if withAdvancedFilter %}
                                    <div class=\"form-group\">
                                        <a href=\"#\" data-toggle=\"advanced-filter\">
                                            <i class=\"fa fa-cogs\" aria-hidden=\"true\"></i>
                                            {{ 'btn_advanced_filters'|trans({}, 'SonataAdminBundle') }}
                                        </a>
                                    </div>
                                {% endif %}
                            </div>
                        </div>

                        {% for paramKey, paramValue in admin.persistentParameters %}
                            <input type=\"hidden\" name=\"{{ paramKey }}\" value=\"{{ paramValue }}\">
                        {% endfor %}
                    </form>
                </div>
            </div>
        </div>
    {% endif %}
{% endblock %}
", "SonataAdminBundle:CRUD:base_list.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\base_list.html.twig");
    }
}
