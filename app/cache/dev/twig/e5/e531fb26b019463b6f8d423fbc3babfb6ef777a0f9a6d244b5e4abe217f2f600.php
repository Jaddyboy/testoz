<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_599b1947e0a9768a068c4185a49a9e0f48a133d5455d2009a6f442562ede99d7 extends Twig_Template
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
        $__internal_e0bf493daba270f355322e77819b4f260f613cbf810589a5c76ce9134dd5dcfa = $this->env->getExtension("native_profiler");
        $__internal_e0bf493daba270f355322e77819b4f260f613cbf810589a5c76ce9134dd5dcfa->enter($__internal_e0bf493daba270f355322e77819b4f260f613cbf810589a5c76ce9134dd5dcfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_e0bf493daba270f355322e77819b4f260f613cbf810589a5c76ce9134dd5dcfa->leave($__internal_e0bf493daba270f355322e77819b4f260f613cbf810589a5c76ce9134dd5dcfa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
