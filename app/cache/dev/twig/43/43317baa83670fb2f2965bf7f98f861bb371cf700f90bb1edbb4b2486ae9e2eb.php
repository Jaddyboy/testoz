<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_5651d279f9544cb4b747d1729b9f5ebd8c9c579555d68fe8ef1e6086f4b6cc4d extends Twig_Template
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
        $__internal_486fc8aa22ff75d8b6eedd0524ce0003b18c4cf4a43e410680f32ad5bcab9f81 = $this->env->getExtension("native_profiler");
        $__internal_486fc8aa22ff75d8b6eedd0524ce0003b18c4cf4a43e410680f32ad5bcab9f81->enter($__internal_486fc8aa22ff75d8b6eedd0524ce0003b18c4cf4a43e410680f32ad5bcab9f81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_486fc8aa22ff75d8b6eedd0524ce0003b18c4cf4a43e410680f32ad5bcab9f81->leave($__internal_486fc8aa22ff75d8b6eedd0524ce0003b18c4cf4a43e410680f32ad5bcab9f81_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
