<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_e8341e120449cbe44e3eb9f53d2b71075d57e67d11482818d356b708c7a68c78 extends Twig_Template
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
        $__internal_d0956aa355ba4ef425192fea03b29c1f8863c76a9a651602345e46111319306c = $this->env->getExtension("native_profiler");
        $__internal_d0956aa355ba4ef425192fea03b29c1f8863c76a9a651602345e46111319306c->enter($__internal_d0956aa355ba4ef425192fea03b29c1f8863c76a9a651602345e46111319306c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_d0956aa355ba4ef425192fea03b29c1f8863c76a9a651602345e46111319306c->leave($__internal_d0956aa355ba4ef425192fea03b29c1f8863c76a9a651602345e46111319306c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
