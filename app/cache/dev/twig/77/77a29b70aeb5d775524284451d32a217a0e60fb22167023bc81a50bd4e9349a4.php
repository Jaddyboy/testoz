<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_19c2976a6c7602b14433c90bfd41a2bc5b47adb945373603a714a8dca85a9b2e extends Twig_Template
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
        $__internal_2c6392c409605facfe30db526a900e4881adabdca0cdc53b8c9ab2aefb40dd31 = $this->env->getExtension("native_profiler");
        $__internal_2c6392c409605facfe30db526a900e4881adabdca0cdc53b8c9ab2aefb40dd31->enter($__internal_2c6392c409605facfe30db526a900e4881adabdca0cdc53b8c9ab2aefb40dd31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_2c6392c409605facfe30db526a900e4881adabdca0cdc53b8c9ab2aefb40dd31->leave($__internal_2c6392c409605facfe30db526a900e4881adabdca0cdc53b8c9ab2aefb40dd31_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
