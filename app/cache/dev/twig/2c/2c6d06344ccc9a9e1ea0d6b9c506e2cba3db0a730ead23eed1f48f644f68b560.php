<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_145d902c23e3afb9bd88f7dd3eb5a183d67931565c93e32461caaa06d963dc10 extends Twig_Template
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
        $__internal_9091d008e84131eb76ceb497ba9faf057f0f1860064733a8fde09dd26536b056 = $this->env->getExtension("native_profiler");
        $__internal_9091d008e84131eb76ceb497ba9faf057f0f1860064733a8fde09dd26536b056->enter($__internal_9091d008e84131eb76ceb497ba9faf057f0f1860064733a8fde09dd26536b056_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_9091d008e84131eb76ceb497ba9faf057f0f1860064733a8fde09dd26536b056->leave($__internal_9091d008e84131eb76ceb497ba9faf057f0f1860064733a8fde09dd26536b056_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
