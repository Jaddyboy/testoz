<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_8127085c9e409a49512b360d581431fce890536f966a26450a1cc8e9e19bfad2 extends Twig_Template
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
        $__internal_d00a2d0ea8f46d110fb32d9d2525f9cd5c02826454f97cdef6319ebbd4864445 = $this->env->getExtension("native_profiler");
        $__internal_d00a2d0ea8f46d110fb32d9d2525f9cd5c02826454f97cdef6319ebbd4864445->enter($__internal_d00a2d0ea8f46d110fb32d9d2525f9cd5c02826454f97cdef6319ebbd4864445_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_d00a2d0ea8f46d110fb32d9d2525f9cd5c02826454f97cdef6319ebbd4864445->leave($__internal_d00a2d0ea8f46d110fb32d9d2525f9cd5c02826454f97cdef6319ebbd4864445_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
