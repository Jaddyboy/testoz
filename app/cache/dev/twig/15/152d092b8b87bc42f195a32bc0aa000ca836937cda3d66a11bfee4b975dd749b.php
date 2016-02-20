<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_fa04424dd2e27b95c85562fc6f0c246768b667ea9e95722190c66068c0a19ec0 extends Twig_Template
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
        $__internal_df5ba1576b61017b25be322a5321d25402d6ac307b5edce3141a52da8816bf01 = $this->env->getExtension("native_profiler");
        $__internal_df5ba1576b61017b25be322a5321d25402d6ac307b5edce3141a52da8816bf01->enter($__internal_df5ba1576b61017b25be322a5321d25402d6ac307b5edce3141a52da8816bf01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_df5ba1576b61017b25be322a5321d25402d6ac307b5edce3141a52da8816bf01->leave($__internal_df5ba1576b61017b25be322a5321d25402d6ac307b5edce3141a52da8816bf01_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
