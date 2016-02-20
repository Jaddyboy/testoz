<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_b5391608fa86e55e4215832b098dc7eebb92a7998622fdf82c22d03a43cd1023 extends Twig_Template
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
        $__internal_0e810cd13ecaf2222b3154c7530562a71b1822e00c1acfa7f9f2292850950f39 = $this->env->getExtension("native_profiler");
        $__internal_0e810cd13ecaf2222b3154c7530562a71b1822e00c1acfa7f9f2292850950f39->enter($__internal_0e810cd13ecaf2222b3154c7530562a71b1822e00c1acfa7f9f2292850950f39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_0e810cd13ecaf2222b3154c7530562a71b1822e00c1acfa7f9f2292850950f39->leave($__internal_0e810cd13ecaf2222b3154c7530562a71b1822e00c1acfa7f9f2292850950f39_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
