<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_99944ce80a235b0db1698cd30302474fae7b40d1ba87d8a93cab56b9cf168650 extends Twig_Template
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
        $__internal_044c0fce8347222814a56f9a4b820d849b661d483396491c3afc3c0eb1e3f07c = $this->env->getExtension("native_profiler");
        $__internal_044c0fce8347222814a56f9a4b820d849b661d483396491c3afc3c0eb1e3f07c->enter($__internal_044c0fce8347222814a56f9a4b820d849b661d483396491c3afc3c0eb1e3f07c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_044c0fce8347222814a56f9a4b820d849b661d483396491c3afc3c0eb1e3f07c->leave($__internal_044c0fce8347222814a56f9a4b820d849b661d483396491c3afc3c0eb1e3f07c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
