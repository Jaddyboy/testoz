<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_231f63df4bd243f3850be75f3ddece3b7a697ab2e1fe638a08b2e3082452d6b9 extends Twig_Template
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
        $__internal_3fdd86ea9a5a8ff55dd2dd52459a3d85e64221ab2850e5f9ecc94389a2f56bf3 = $this->env->getExtension("native_profiler");
        $__internal_3fdd86ea9a5a8ff55dd2dd52459a3d85e64221ab2850e5f9ecc94389a2f56bf3->enter($__internal_3fdd86ea9a5a8ff55dd2dd52459a3d85e64221ab2850e5f9ecc94389a2f56bf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_3fdd86ea9a5a8ff55dd2dd52459a3d85e64221ab2850e5f9ecc94389a2f56bf3->leave($__internal_3fdd86ea9a5a8ff55dd2dd52459a3d85e64221ab2850e5f9ecc94389a2f56bf3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
