<?php

/* knp_menu.html.twig */
class __TwigTemplate_fd8c9d8048470500b69fd22e9cc537fb5977f5553d321e647160b9094857ecc5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("knp_menu_base.html.twig", "knp_menu.html.twig", 1);
        $this->blocks = array(
            'compressed_root' => array($this, 'block_compressed_root'),
            'root' => array($this, 'block_root'),
            'list' => array($this, 'block_list'),
            'children' => array($this, 'block_children'),
            'item' => array($this, 'block_item'),
            'linkElement' => array($this, 'block_linkElement'),
            'spanElement' => array($this, 'block_spanElement'),
            'label' => array($this, 'block_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_47acc7472ae16dbcacb372ac0d98cf7d17d8db325ab4d1cb07e3073da066c730 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47acc7472ae16dbcacb372ac0d98cf7d17d8db325ab4d1cb07e3073da066c730->enter($__internal_47acc7472ae16dbcacb372ac0d98cf7d17d8db325ab4d1cb07e3073da066c730_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu.html.twig"));

        $__internal_ab94af5a65b7de1020eade17fc76e1f7e794458fb4e64c6823b765dffeb4c1bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab94af5a65b7de1020eade17fc76e1f7e794458fb4e64c6823b765dffeb4c1bc->enter($__internal_ab94af5a65b7de1020eade17fc76e1f7e794458fb4e64c6823b765dffeb4c1bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_47acc7472ae16dbcacb372ac0d98cf7d17d8db325ab4d1cb07e3073da066c730->leave($__internal_47acc7472ae16dbcacb372ac0d98cf7d17d8db325ab4d1cb07e3073da066c730_prof);

        
        $__internal_ab94af5a65b7de1020eade17fc76e1f7e794458fb4e64c6823b765dffeb4c1bc->leave($__internal_ab94af5a65b7de1020eade17fc76e1f7e794458fb4e64c6823b765dffeb4c1bc_prof);

    }

    // line 11
    public function block_compressed_root($context, array $blocks = array())
    {
        $__internal_41396b47378d99f172a111b7398fd52b806b1c695fc12c1b506ca6da099fec05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41396b47378d99f172a111b7398fd52b806b1c695fc12c1b506ca6da099fec05->enter($__internal_41396b47378d99f172a111b7398fd52b806b1c695fc12c1b506ca6da099fec05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "compressed_root"));

        $__internal_48259683fb45596423945d683e3dfe37020c6968dd4b5b5687b7a966b5244744 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48259683fb45596423945d683e3dfe37020c6968dd4b5b5687b7a966b5244744->enter($__internal_48259683fb45596423945d683e3dfe37020c6968dd4b5b5687b7a966b5244744_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "compressed_root"));

        // line 12
        ob_start();
        // line 13
        $this->displayBlock("root", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_48259683fb45596423945d683e3dfe37020c6968dd4b5b5687b7a966b5244744->leave($__internal_48259683fb45596423945d683e3dfe37020c6968dd4b5b5687b7a966b5244744_prof);

        
        $__internal_41396b47378d99f172a111b7398fd52b806b1c695fc12c1b506ca6da099fec05->leave($__internal_41396b47378d99f172a111b7398fd52b806b1c695fc12c1b506ca6da099fec05_prof);

    }

    // line 17
    public function block_root($context, array $blocks = array())
    {
        $__internal_c8ec5c3e4425bfe42736182d87003d0c83e1470f3f8bbe7455eb3f1eebd292ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8ec5c3e4425bfe42736182d87003d0c83e1470f3f8bbe7455eb3f1eebd292ef->enter($__internal_c8ec5c3e4425bfe42736182d87003d0c83e1470f3f8bbe7455eb3f1eebd292ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "root"));

        $__internal_ba6b24e6baeece92a2d586fe6f3eca870b49dd42c89f65c6876fa06bc2f42e05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba6b24e6baeece92a2d586fe6f3eca870b49dd42c89f65c6876fa06bc2f42e05->enter($__internal_ba6b24e6baeece92a2d586fe6f3eca870b49dd42c89f65c6876fa06bc2f42e05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "root"));

        // line 18
        $context["listAttributes"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttributes", array());
        // line 19
        $this->displayBlock("list", $context, $blocks);
        
        $__internal_ba6b24e6baeece92a2d586fe6f3eca870b49dd42c89f65c6876fa06bc2f42e05->leave($__internal_ba6b24e6baeece92a2d586fe6f3eca870b49dd42c89f65c6876fa06bc2f42e05_prof);

        
        $__internal_c8ec5c3e4425bfe42736182d87003d0c83e1470f3f8bbe7455eb3f1eebd292ef->leave($__internal_c8ec5c3e4425bfe42736182d87003d0c83e1470f3f8bbe7455eb3f1eebd292ef_prof);

    }

    // line 22
    public function block_list($context, array $blocks = array())
    {
        $__internal_1674062c722e37dd649c8c2abee5f98c6bede746338f31c0a4db907cef93a015 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1674062c722e37dd649c8c2abee5f98c6bede746338f31c0a4db907cef93a015->enter($__internal_1674062c722e37dd649c8c2abee5f98c6bede746338f31c0a4db907cef93a015_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        $__internal_a2c07a63fb96f9b3e58798aa9d9e08366cce878a8eb225787bd225d3cc93f60f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2c07a63fb96f9b3e58798aa9d9e08366cce878a8eb225787bd225d3cc93f60f->enter($__internal_a2c07a63fb96f9b3e58798aa9d9e08366cce878a8eb225787bd225d3cc93f60f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        // line 23
        if ((($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "hasChildren", array()) &&  !($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "depth", array()) === 0)) && $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "displayChildren", array()))) {
            // line 24
            echo "    ";
            $context["knp_menu"] = $this;
            // line 25
            echo "    <ul";
            echo $context["knp_menu"]->getattributes((isset($context["listAttributes"]) ? $context["listAttributes"] : $this->getContext($context, "listAttributes")));
            echo ">
        ";
            // line 26
            $this->displayBlock("children", $context, $blocks);
            echo "
    </ul>
";
        }
        
        $__internal_a2c07a63fb96f9b3e58798aa9d9e08366cce878a8eb225787bd225d3cc93f60f->leave($__internal_a2c07a63fb96f9b3e58798aa9d9e08366cce878a8eb225787bd225d3cc93f60f_prof);

        
        $__internal_1674062c722e37dd649c8c2abee5f98c6bede746338f31c0a4db907cef93a015->leave($__internal_1674062c722e37dd649c8c2abee5f98c6bede746338f31c0a4db907cef93a015_prof);

    }

    // line 31
    public function block_children($context, array $blocks = array())
    {
        $__internal_2a0ea5a3f9209cf35c9bd447732fd994d8abddfe3899ec7a9252f131c8e2dc7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a0ea5a3f9209cf35c9bd447732fd994d8abddfe3899ec7a9252f131c8e2dc7d->enter($__internal_2a0ea5a3f9209cf35c9bd447732fd994d8abddfe3899ec7a9252f131c8e2dc7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "children"));

        $__internal_fa4ba3a18a2ecb5d53931b612fbf5960730324df4abb0146fc6f4c9dec96dfa3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa4ba3a18a2ecb5d53931b612fbf5960730324df4abb0146fc6f4c9dec96dfa3->enter($__internal_fa4ba3a18a2ecb5d53931b612fbf5960730324df4abb0146fc6f4c9dec96dfa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "children"));

        // line 33
        $context["currentOptions"] = (isset($context["options"]) ? $context["options"] : $this->getContext($context, "options"));
        // line 34
        $context["currentItem"] = (isset($context["item"]) ? $context["item"] : $this->getContext($context, "item"));
        // line 36
        if ( !(null === $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "depth", array()))) {
            // line 37
            $context["options"] = twig_array_merge((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), array("depth" => ($this->getAttribute((isset($context["currentOptions"]) ? $context["currentOptions"] : $this->getContext($context, "currentOptions")), "depth", array()) - 1)));
        }
        // line 40
        if (( !(null === $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "matchingDepth", array())) && ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "matchingDepth", array()) > 0))) {
            // line 41
            $context["options"] = twig_array_merge((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), array("matchingDepth" => ($this->getAttribute((isset($context["currentOptions"]) ? $context["currentOptions"] : $this->getContext($context, "currentOptions")), "matchingDepth", array()) - 1)));
        }
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["currentItem"]) ? $context["currentItem"] : $this->getContext($context, "currentItem")), "children", array()));
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
            // line 44
            echo "    ";
            $this->displayBlock("item", $context, $blocks);
            echo "
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
        // line 47
        $context["item"] = (isset($context["currentItem"]) ? $context["currentItem"] : $this->getContext($context, "currentItem"));
        // line 48
        $context["options"] = (isset($context["currentOptions"]) ? $context["currentOptions"] : $this->getContext($context, "currentOptions"));
        
        $__internal_fa4ba3a18a2ecb5d53931b612fbf5960730324df4abb0146fc6f4c9dec96dfa3->leave($__internal_fa4ba3a18a2ecb5d53931b612fbf5960730324df4abb0146fc6f4c9dec96dfa3_prof);

        
        $__internal_2a0ea5a3f9209cf35c9bd447732fd994d8abddfe3899ec7a9252f131c8e2dc7d->leave($__internal_2a0ea5a3f9209cf35c9bd447732fd994d8abddfe3899ec7a9252f131c8e2dc7d_prof);

    }

    // line 51
    public function block_item($context, array $blocks = array())
    {
        $__internal_105ef1191a5994f1aec9f546da9b20b2584b589c6c829d804e5b5577a9385aad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_105ef1191a5994f1aec9f546da9b20b2584b589c6c829d804e5b5577a9385aad->enter($__internal_105ef1191a5994f1aec9f546da9b20b2584b589c6c829d804e5b5577a9385aad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        $__internal_8d1bfed5ac5c35f4e1c837570ad92150fb78d3f4067e1fae134c54dfecef10fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d1bfed5ac5c35f4e1c837570ad92150fb78d3f4067e1fae134c54dfecef10fb->enter($__internal_8d1bfed5ac5c35f4e1c837570ad92150fb78d3f4067e1fae134c54dfecef10fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        // line 52
        if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "displayed", array())) {
            // line 54
            $context["classes"] = (( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attribute", array(0 => "class"), "method"))) ? (array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attribute", array(0 => "class"), "method"))) : (array()));
            // line 55
            if ($this->getAttribute((isset($context["matcher"]) ? $context["matcher"] : $this->getContext($context, "matcher")), "isCurrent", array(0 => (isset($context["item"]) ? $context["item"] : $this->getContext($context, "item"))), "method")) {
                // line 56
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "currentClass", array())));
            } elseif ($this->getAttribute(            // line 57
(isset($context["matcher"]) ? $context["matcher"] : $this->getContext($context, "matcher")), "isAncestor", array(0 => (isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), 1 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "matchingDepth", array())), "method")) {
                // line 58
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "ancestorClass", array())));
            }
            // line 60
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "actsLikeFirst", array())) {
                // line 61
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "firstClass", array())));
            }
            // line 63
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "actsLikeLast", array())) {
                // line 64
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "lastClass", array())));
            }
            // line 66
            echo "
    ";
            // line 68
            echo "    ";
            if (($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "hasChildren", array()) &&  !($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "depth", array()) === 0))) {
                // line 69
                echo "        ";
                if (( !twig_test_empty($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "branch_class", array())) && $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "displayChildren", array()))) {
                    // line 70
                    $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "branch_class", array())));
                    // line 71
                    echo "        ";
                }
                // line 72
                echo "    ";
            } elseif ( !twig_test_empty($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "leaf_class", array()))) {
                // line 73
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "leaf_class", array())));
            }
            // line 76
            $context["attributes"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attributes", array());
            // line 77
            if ( !twig_test_empty((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")))) {
                // line 78
                $context["attributes"] = twig_array_merge((isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")), array("class" => twig_join_filter((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), " ")));
            }
            // line 81
            echo "    ";
            $context["knp_menu"] = $this;
            // line 82
            echo "    <li";
            echo $context["knp_menu"]->getattributes((isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")));
            echo ">";
            // line 83
            if (( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "uri", array())) && ( !$this->getAttribute((isset($context["matcher"]) ? $context["matcher"] : $this->getContext($context, "matcher")), "isCurrent", array(0 => (isset($context["item"]) ? $context["item"] : $this->getContext($context, "item"))), "method") || $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "currentAsLink", array())))) {
                // line 84
                echo "        ";
                $this->displayBlock("linkElement", $context, $blocks);
            } else {
                // line 86
                echo "        ";
                $this->displayBlock("spanElement", $context, $blocks);
            }
            // line 89
            $context["childrenClasses"] = (( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method"))) ? (array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method"))) : (array()));
            // line 90
            $context["childrenClasses"] = twig_array_merge((isset($context["childrenClasses"]) ? $context["childrenClasses"] : $this->getContext($context, "childrenClasses")), array(0 => ("menu_level_" . $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "level", array()))));
            // line 91
            $context["listAttributes"] = twig_array_merge($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttributes", array()), array("class" => twig_join_filter((isset($context["childrenClasses"]) ? $context["childrenClasses"] : $this->getContext($context, "childrenClasses")), " ")));
            // line 92
            echo "        ";
            $this->displayBlock("list", $context, $blocks);
            echo "
    </li>
";
        }
        
        $__internal_8d1bfed5ac5c35f4e1c837570ad92150fb78d3f4067e1fae134c54dfecef10fb->leave($__internal_8d1bfed5ac5c35f4e1c837570ad92150fb78d3f4067e1fae134c54dfecef10fb_prof);

        
        $__internal_105ef1191a5994f1aec9f546da9b20b2584b589c6c829d804e5b5577a9385aad->leave($__internal_105ef1191a5994f1aec9f546da9b20b2584b589c6c829d804e5b5577a9385aad_prof);

    }

    // line 97
    public function block_linkElement($context, array $blocks = array())
    {
        $__internal_5cfa5f71a0712c4cdf55d1bc02191c9dc938870f65d7356b31234ba4e1094b62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cfa5f71a0712c4cdf55d1bc02191c9dc938870f65d7356b31234ba4e1094b62->enter($__internal_5cfa5f71a0712c4cdf55d1bc02191c9dc938870f65d7356b31234ba4e1094b62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        $__internal_e9451858bde355d0817329739b0b2847b0da585bbe32f2fe48b93315acd5b760 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9451858bde355d0817329739b0b2847b0da585bbe32f2fe48b93315acd5b760->enter($__internal_e9451858bde355d0817329739b0b2847b0da585bbe32f2fe48b93315acd5b760_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        $context["knp_menu"] = $this;
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "uri", array()), "html", null, true);
        echo "\"";
        echo $context["knp_menu"]->getattributes($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "linkAttributes", array()));
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</a>";
        
        $__internal_e9451858bde355d0817329739b0b2847b0da585bbe32f2fe48b93315acd5b760->leave($__internal_e9451858bde355d0817329739b0b2847b0da585bbe32f2fe48b93315acd5b760_prof);

        
        $__internal_5cfa5f71a0712c4cdf55d1bc02191c9dc938870f65d7356b31234ba4e1094b62->leave($__internal_5cfa5f71a0712c4cdf55d1bc02191c9dc938870f65d7356b31234ba4e1094b62_prof);

    }

    // line 99
    public function block_spanElement($context, array $blocks = array())
    {
        $__internal_f7bd1d9e524dd724a80dfe0c44e78fb6ef01fd3da34f1a5bdee2b64e47777351 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7bd1d9e524dd724a80dfe0c44e78fb6ef01fd3da34f1a5bdee2b64e47777351->enter($__internal_f7bd1d9e524dd724a80dfe0c44e78fb6ef01fd3da34f1a5bdee2b64e47777351_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        $__internal_27e1b8dd99d7a328aa4cc2192ae1756fd8bd0ce9300929bb2b57ccf446466351 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27e1b8dd99d7a328aa4cc2192ae1756fd8bd0ce9300929bb2b57ccf446466351->enter($__internal_27e1b8dd99d7a328aa4cc2192ae1756fd8bd0ce9300929bb2b57ccf446466351_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        $context["knp_menu"] = $this;
        echo "<span";
        echo $context["knp_menu"]->getattributes($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "labelAttributes", array()));
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</span>";
        
        $__internal_27e1b8dd99d7a328aa4cc2192ae1756fd8bd0ce9300929bb2b57ccf446466351->leave($__internal_27e1b8dd99d7a328aa4cc2192ae1756fd8bd0ce9300929bb2b57ccf446466351_prof);

        
        $__internal_f7bd1d9e524dd724a80dfe0c44e78fb6ef01fd3da34f1a5bdee2b64e47777351->leave($__internal_f7bd1d9e524dd724a80dfe0c44e78fb6ef01fd3da34f1a5bdee2b64e47777351_prof);

    }

    // line 101
    public function block_label($context, array $blocks = array())
    {
        $__internal_a28759c15cc5f374d5bbdddba4e80798602acbfc3f9565b1d44b55ed08e44725 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a28759c15cc5f374d5bbdddba4e80798602acbfc3f9565b1d44b55ed08e44725->enter($__internal_a28759c15cc5f374d5bbdddba4e80798602acbfc3f9565b1d44b55ed08e44725_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        $__internal_072e7bb2a741c2d40969c68b2cbbeaf6cceeca3c0cb5ecb802afb467e52396db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_072e7bb2a741c2d40969c68b2cbbeaf6cceeca3c0cb5ecb802afb467e52396db->enter($__internal_072e7bb2a741c2d40969c68b2cbbeaf6cceeca3c0cb5ecb802afb467e52396db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        if (($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "allow_safe_labels", array()) && $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "getExtra", array(0 => "safe_label", 1 => false), "method"))) {
            echo $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "label", array());
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "label", array()), "html", null, true);
        }
        
        $__internal_072e7bb2a741c2d40969c68b2cbbeaf6cceeca3c0cb5ecb802afb467e52396db->leave($__internal_072e7bb2a741c2d40969c68b2cbbeaf6cceeca3c0cb5ecb802afb467e52396db_prof);

        
        $__internal_a28759c15cc5f374d5bbdddba4e80798602acbfc3f9565b1d44b55ed08e44725->leave($__internal_a28759c15cc5f374d5bbdddba4e80798602acbfc3f9565b1d44b55ed08e44725_prof);

    }

    // line 3
    public function getattributes($__attributes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_13d1d57bbe7685d06120e450b0187922d9866f395c8928a68f669f024e5ab239 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_13d1d57bbe7685d06120e450b0187922d9866f395c8928a68f669f024e5ab239->enter($__internal_13d1d57bbe7685d06120e450b0187922d9866f395c8928a68f669f024e5ab239_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "attributes"));

            $__internal_3c7526e840eac90a01f22bc137ff673f919303fb67a9f71219e9b39aa38d5c2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_3c7526e840eac90a01f22bc137ff673f919303fb67a9f71219e9b39aa38d5c2c->enter($__internal_3c7526e840eac90a01f22bc137ff673f919303fb67a9f71219e9b39aa38d5c2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "attributes"));

            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")));
            foreach ($context['_seq'] as $context["name"] => $context["value"]) {
                // line 5
                if (( !(null === $context["value"]) &&  !($context["value"] === false))) {
                    // line 6
                    echo sprintf(" %s=\"%s\"", $context["name"], ((($context["value"] === true)) ? (twig_escape_filter($this->env, $context["name"])) : (twig_escape_filter($this->env, $context["value"]))));
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
            $__internal_3c7526e840eac90a01f22bc137ff673f919303fb67a9f71219e9b39aa38d5c2c->leave($__internal_3c7526e840eac90a01f22bc137ff673f919303fb67a9f71219e9b39aa38d5c2c_prof);

            
            $__internal_13d1d57bbe7685d06120e450b0187922d9866f395c8928a68f669f024e5ab239->leave($__internal_13d1d57bbe7685d06120e450b0187922d9866f395c8928a68f669f024e5ab239_prof);

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
        return "knp_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  385 => 6,  383 => 5,  379 => 4,  361 => 3,  339 => 101,  316 => 99,  291 => 97,  276 => 92,  274 => 91,  272 => 90,  270 => 89,  266 => 86,  262 => 84,  260 => 83,  256 => 82,  253 => 81,  250 => 78,  248 => 77,  246 => 76,  243 => 73,  240 => 72,  237 => 71,  235 => 70,  232 => 69,  229 => 68,  226 => 66,  223 => 64,  221 => 63,  218 => 61,  216 => 60,  213 => 58,  211 => 57,  209 => 56,  207 => 55,  205 => 54,  203 => 52,  194 => 51,  184 => 48,  182 => 47,  165 => 44,  148 => 43,  145 => 41,  143 => 40,  140 => 37,  138 => 36,  136 => 34,  134 => 33,  125 => 31,  111 => 26,  106 => 25,  103 => 24,  101 => 23,  92 => 22,  82 => 19,  80 => 18,  71 => 17,  58 => 13,  56 => 12,  47 => 11,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'knp_menu_base.html.twig' %}

{% macro attributes(attributes) %}
{% for name, value in attributes %}
    {%- if value is not none and value is not same as(false) -%}
        {{- ' %s=\"%s\"'|format(name, value is same as(true) ? name|e : value|e)|raw -}}
    {%- endif -%}
{%- endfor -%}
{% endmacro %}

{% block compressed_root %}
{% spaceless %}
{{ block('root') }}
{% endspaceless %}
{% endblock %}

{% block root %}
{% set listAttributes = item.childrenAttributes %}
{{ block('list') -}}
{% endblock %}

{% block list %}
{% if item.hasChildren and options.depth is not same as(0) and item.displayChildren %}
    {% import _self as knp_menu %}
    <ul{{ knp_menu.attributes(listAttributes) }}>
        {{ block('children') }}
    </ul>
{% endif %}
{% endblock %}

{% block children %}
{# save current variables #}
{% set currentOptions = options %}
{% set currentItem = item %}
{# update the depth for children #}
{% if options.depth is not none %}
{% set options = options|merge({'depth': currentOptions.depth - 1}) %}
{% endif %}
{# update the matchingDepth for children #}
{% if options.matchingDepth is not none and options.matchingDepth > 0 %}
{% set options = options|merge({'matchingDepth': currentOptions.matchingDepth - 1}) %}
{% endif %}
{% for item in currentItem.children %}
    {{ block('item') }}
{% endfor %}
{# restore current variables #}
{% set item = currentItem %}
{% set options = currentOptions %}
{% endblock %}

{% block item %}
{% if item.displayed %}
{# building the class of the item #}
    {%- set classes = item.attribute('class') is not empty ? [item.attribute('class')] : [] %}
    {%- if matcher.isCurrent(item) %}
        {%- set classes = classes|merge([options.currentClass]) %}
    {%- elseif matcher.isAncestor(item, options.matchingDepth) %}
        {%- set classes = classes|merge([options.ancestorClass]) %}
    {%- endif %}
    {%- if item.actsLikeFirst %}
        {%- set classes = classes|merge([options.firstClass]) %}
    {%- endif %}
    {%- if item.actsLikeLast %}
        {%- set classes = classes|merge([options.lastClass]) %}
    {%- endif %}

    {# Mark item as \"leaf\" (no children) or as \"branch\" (has children that are displayed) #}
    {% if item.hasChildren and options.depth is not same as(0) %}
        {% if options.branch_class is not empty and item.displayChildren %}
            {%- set classes = classes|merge([options.branch_class]) %}
        {% endif %}
    {% elseif options.leaf_class is not empty %}
        {%- set classes = classes|merge([options.leaf_class]) %}
    {%- endif %}

    {%- set attributes = item.attributes %}
    {%- if classes is not empty %}
        {%- set attributes = attributes|merge({'class': classes|join(' ')}) %}
    {%- endif %}
{# displaying the item #}
    {% import _self as knp_menu %}
    <li{{ knp_menu.attributes(attributes) }}>
        {%- if item.uri is not empty and (not matcher.isCurrent(item) or options.currentAsLink) %}
        {{ block('linkElement') }}
        {%- else %}
        {{ block('spanElement') }}
        {%- endif %}
{# render the list of children#}
        {%- set childrenClasses = item.childrenAttribute('class') is not empty ? [item.childrenAttribute('class')] : [] %}
        {%- set childrenClasses = childrenClasses|merge(['menu_level_' ~ item.level]) %}
        {%- set listAttributes = item.childrenAttributes|merge({'class': childrenClasses|join(' ') }) %}
        {{ block('list') }}
    </li>
{% endif %}
{% endblock %}

{% block linkElement %}{% import _self as knp_menu %}<a href=\"{{ item.uri }}\"{{ knp_menu.attributes(item.linkAttributes) }}>{{ block('label') }}</a>{% endblock %}

{% block spanElement %}{% import _self as knp_menu %}<span{{ knp_menu.attributes(item.labelAttributes) }}>{{ block('label') }}</span>{% endblock %}

{% block label %}{% if options.allow_safe_labels and item.getExtra('safe_label', false) %}{{ item.label|raw }}{% else %}{{ item.label }}{% endif %}{% endblock %}
", "knp_menu.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\knplabs\\knp-menu\\src\\Knp\\Menu\\Resources\\views\\knp_menu.html.twig");
    }
}
