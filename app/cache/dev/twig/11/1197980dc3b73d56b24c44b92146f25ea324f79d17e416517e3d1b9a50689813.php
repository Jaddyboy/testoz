<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_a93e02321b253eaebaefb505cebff1f8f7389a922bbf5b7d8c2ed7ac38c4536c extends Twig_Template
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
        $__internal_7ff6718d185ce2d220ae9c476b8d805c9f366f3fdb02dbe932e4749e5395a216 = $this->env->getExtension("native_profiler");
        $__internal_7ff6718d185ce2d220ae9c476b8d805c9f366f3fdb02dbe932e4749e5395a216->enter($__internal_7ff6718d185ce2d220ae9c476b8d805c9f366f3fdb02dbe932e4749e5395a216_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_7ff6718d185ce2d220ae9c476b8d805c9f366f3fdb02dbe932e4749e5395a216->leave($__internal_7ff6718d185ce2d220ae9c476b8d805c9f366f3fdb02dbe932e4749e5395a216_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
