<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_84aee778ae875e25eb447ed4845138af2b0d3e2be7a934b335e3842f317e85bf extends Twig_Template
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
        $__internal_ecd7aa4d287ec209a637fe23903a11cdb481e88a81f469817faf4c0dd63ef003 = $this->env->getExtension("native_profiler");
        $__internal_ecd7aa4d287ec209a637fe23903a11cdb481e88a81f469817faf4c0dd63ef003->enter($__internal_ecd7aa4d287ec209a637fe23903a11cdb481e88a81f469817faf4c0dd63ef003_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_ecd7aa4d287ec209a637fe23903a11cdb481e88a81f469817faf4c0dd63ef003->leave($__internal_ecd7aa4d287ec209a637fe23903a11cdb481e88a81f469817faf4c0dd63ef003_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
