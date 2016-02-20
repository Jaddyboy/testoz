<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_303a8e3d70e42157bf999296dd24beefc4c6acb71bd89a5613ffc56bbbbe2aa9 extends Twig_Template
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
        $__internal_273e8f966fc44bcef605dd9ef0e1f2c8b75afed7dcda0fc0b43a9be4779a3646 = $this->env->getExtension("native_profiler");
        $__internal_273e8f966fc44bcef605dd9ef0e1f2c8b75afed7dcda0fc0b43a9be4779a3646->enter($__internal_273e8f966fc44bcef605dd9ef0e1f2c8b75afed7dcda0fc0b43a9be4779a3646_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_273e8f966fc44bcef605dd9ef0e1f2c8b75afed7dcda0fc0b43a9be4779a3646->leave($__internal_273e8f966fc44bcef605dd9ef0e1f2c8b75afed7dcda0fc0b43a9be4779a3646_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
