<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_9399c012d7ecc4220239aa42ef8f24df45457a300884d618d063f7d0379aa308 extends Twig_Template
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
        $__internal_4dc6faef0bf38a02dff65815700846182f01ac8c222ec4af94cbfc94f5546429 = $this->env->getExtension("native_profiler");
        $__internal_4dc6faef0bf38a02dff65815700846182f01ac8c222ec4af94cbfc94f5546429->enter($__internal_4dc6faef0bf38a02dff65815700846182f01ac8c222ec4af94cbfc94f5546429_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_4dc6faef0bf38a02dff65815700846182f01ac8c222ec4af94cbfc94f5546429->leave($__internal_4dc6faef0bf38a02dff65815700846182f01ac8c222ec4af94cbfc94f5546429_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
