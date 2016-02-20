<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_b314d87d349a12bff7165cb5ae076616ba533231ca7e3bcbb19fff79872766ef extends Twig_Template
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
        $__internal_0b35ae0e5488e9f9ebe6813738a32fe892e95ec3dca488bb4440495fb7c643af = $this->env->getExtension("native_profiler");
        $__internal_0b35ae0e5488e9f9ebe6813738a32fe892e95ec3dca488bb4440495fb7c643af->enter($__internal_0b35ae0e5488e9f9ebe6813738a32fe892e95ec3dca488bb4440495fb7c643af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_0b35ae0e5488e9f9ebe6813738a32fe892e95ec3dca488bb4440495fb7c643af->leave($__internal_0b35ae0e5488e9f9ebe6813738a32fe892e95ec3dca488bb4440495fb7c643af_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
