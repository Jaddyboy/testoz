<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_8e2c9e983c9a2122a59f6a0bc91e92e8e921fca21cf2a571ce3fc111b1ce5e9d extends Twig_Template
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
        $__internal_bb7e7d3ffb0a78cd89b7569ab8a55c1d919e5c07ff9950648562f9a273475f23 = $this->env->getExtension("native_profiler");
        $__internal_bb7e7d3ffb0a78cd89b7569ab8a55c1d919e5c07ff9950648562f9a273475f23->enter($__internal_bb7e7d3ffb0a78cd89b7569ab8a55c1d919e5c07ff9950648562f9a273475f23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_bb7e7d3ffb0a78cd89b7569ab8a55c1d919e5c07ff9950648562f9a273475f23->leave($__internal_bb7e7d3ffb0a78cd89b7569ab8a55c1d919e5c07ff9950648562f9a273475f23_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
