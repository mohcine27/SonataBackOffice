<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_a94e3a423f0914908f68e7d4debd133a7a952d30f8befa079f5c8489e058ebcf extends Twig_Template
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
        $__internal_a311602d796378c454ecd719bfd36c51e9230978a95a4f21d1d4ce5ab165ab40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a311602d796378c454ecd719bfd36c51e9230978a95a4f21d1d4ce5ab165ab40->enter($__internal_a311602d796378c454ecd719bfd36c51e9230978a95a4f21d1d4ce5ab165ab40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_89c536699a819d398eb75b835e2a5577082b05d176e95638c7f4153de1642742 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89c536699a819d398eb75b835e2a5577082b05d176e95638c7f4153de1642742->enter($__internal_89c536699a819d398eb75b835e2a5577082b05d176e95638c7f4153de1642742_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_a311602d796378c454ecd719bfd36c51e9230978a95a4f21d1d4ce5ab165ab40->leave($__internal_a311602d796378c454ecd719bfd36c51e9230978a95a4f21d1d4ce5ab165ab40_prof);

        
        $__internal_89c536699a819d398eb75b835e2a5577082b05d176e95638c7f4153de1642742->leave($__internal_89c536699a819d398eb75b835e2a5577082b05d176e95638c7f4153de1642742_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_errors.html.php");
    }
}
