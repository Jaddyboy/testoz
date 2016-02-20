<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_649f9d87ba76b7248cec18c948f4b130fc3adc29b8575eed9db4e261d8c9a0ba extends Twig_Template
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
        $__internal_30ab5f127d839ab4602feb48175e20b8bc941dee9cd002209cfaef3aa93853ab = $this->env->getExtension("native_profiler");
        $__internal_30ab5f127d839ab4602feb48175e20b8bc941dee9cd002209cfaef3aa93853ab->enter($__internal_30ab5f127d839ab4602feb48175e20b8bc941dee9cd002209cfaef3aa93853ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_30ab5f127d839ab4602feb48175e20b8bc941dee9cd002209cfaef3aa93853ab->leave($__internal_30ab5f127d839ab4602feb48175e20b8bc941dee9cd002209cfaef3aa93853ab_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
