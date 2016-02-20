<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_cb5aa77dfde66f1ee88049e5e7340c591b57bc2f364a03ec8bb2002fee2d8458 extends Twig_Template
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
        $__internal_59316f78775571d938f4e1ac1e47a4fa6ac77c5659750b4441c42f3bb1f1d588 = $this->env->getExtension("native_profiler");
        $__internal_59316f78775571d938f4e1ac1e47a4fa6ac77c5659750b4441c42f3bb1f1d588->enter($__internal_59316f78775571d938f4e1ac1e47a4fa6ac77c5659750b4441c42f3bb1f1d588_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_59316f78775571d938f4e1ac1e47a4fa6ac77c5659750b4441c42f3bb1f1d588->leave($__internal_59316f78775571d938f4e1ac1e47a4fa6ac77c5659750b4441c42f3bb1f1d588_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
