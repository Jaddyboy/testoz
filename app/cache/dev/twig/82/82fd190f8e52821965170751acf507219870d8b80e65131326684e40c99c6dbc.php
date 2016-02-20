<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_c99c7a7a73c9fd57a894166214ddefac9e0985d2640b9e558bd6afc9f7c3447c extends Twig_Template
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
        $__internal_fb411bc95a355f6db06f9eb3f55918527e714c76b8ef78e3e85bbdf28915ea1a = $this->env->getExtension("native_profiler");
        $__internal_fb411bc95a355f6db06f9eb3f55918527e714c76b8ef78e3e85bbdf28915ea1a->enter($__internal_fb411bc95a355f6db06f9eb3f55918527e714c76b8ef78e3e85bbdf28915ea1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_fb411bc95a355f6db06f9eb3f55918527e714c76b8ef78e3e85bbdf28915ea1a->leave($__internal_fb411bc95a355f6db06f9eb3f55918527e714c76b8ef78e3e85bbdf28915ea1a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
