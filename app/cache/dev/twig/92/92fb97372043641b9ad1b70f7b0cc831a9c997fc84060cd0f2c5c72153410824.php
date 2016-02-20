<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_3d630fd225c25ae6153314fea28063058eb6083ea6838f9dce9f5b8109ff469b extends Twig_Template
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
        $__internal_c677feb291827055576090a2a2fb151080ded425e30016875e85d590fedca13d = $this->env->getExtension("native_profiler");
        $__internal_c677feb291827055576090a2a2fb151080ded425e30016875e85d590fedca13d->enter($__internal_c677feb291827055576090a2a2fb151080ded425e30016875e85d590fedca13d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_c677feb291827055576090a2a2fb151080ded425e30016875e85d590fedca13d->leave($__internal_c677feb291827055576090a2a2fb151080ded425e30016875e85d590fedca13d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
