<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_15bc5c24e886c5c7d0e14b30043832f5c78cb4fa308a2540f3d3ae95959b5266 extends Twig_Template
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
        $__internal_c82b0f6076563ff6fe6a92c361f855be7b143e5941f4d1a772b460fc084d0964 = $this->env->getExtension("native_profiler");
        $__internal_c82b0f6076563ff6fe6a92c361f855be7b143e5941f4d1a772b460fc084d0964->enter($__internal_c82b0f6076563ff6fe6a92c361f855be7b143e5941f4d1a772b460fc084d0964_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_c82b0f6076563ff6fe6a92c361f855be7b143e5941f4d1a772b460fc084d0964->leave($__internal_c82b0f6076563ff6fe6a92c361f855be7b143e5941f4d1a772b460fc084d0964_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
