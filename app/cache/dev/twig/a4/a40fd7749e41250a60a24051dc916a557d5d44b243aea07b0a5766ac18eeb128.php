<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_3f0cb6f1cd41c24156a18e8f10e5c7118b807c582e7dc8d3f3fa7c358f4ba434 extends Twig_Template
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
        $__internal_7d0b881ca293e8afb2f0f7bfaaf71546e0f13a9de38f667859df4e5945cf2aaa = $this->env->getExtension("native_profiler");
        $__internal_7d0b881ca293e8afb2f0f7bfaaf71546e0f13a9de38f667859df4e5945cf2aaa->enter($__internal_7d0b881ca293e8afb2f0f7bfaaf71546e0f13a9de38f667859df4e5945cf2aaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_7d0b881ca293e8afb2f0f7bfaaf71546e0f13a9de38f667859df4e5945cf2aaa->leave($__internal_7d0b881ca293e8afb2f0f7bfaaf71546e0f13a9de38f667859df4e5945cf2aaa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
