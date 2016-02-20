<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_3eea4d34e1cfaac78cf631a0231edca47bfbd191420c2afa3e414423b4bdf62c extends Twig_Template
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
        $__internal_bfbe18c50627164575bcb53838678f9198d4b7e963b27fe3cf6dca43b9b2f56e = $this->env->getExtension("native_profiler");
        $__internal_bfbe18c50627164575bcb53838678f9198d4b7e963b27fe3cf6dca43b9b2f56e->enter($__internal_bfbe18c50627164575bcb53838678f9198d4b7e963b27fe3cf6dca43b9b2f56e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_bfbe18c50627164575bcb53838678f9198d4b7e963b27fe3cf6dca43b9b2f56e->leave($__internal_bfbe18c50627164575bcb53838678f9198d4b7e963b27fe3cf6dca43b9b2f56e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
