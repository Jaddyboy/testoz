<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_055464b48ab6626d254bd4e8b124cbf2c3860f1a1639e14c4dfb5fff376ace2a extends Twig_Template
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
        $__internal_6738b9a429df7ac4780d4b6eb66d538039413a59de17f5462771843a09eb3e83 = $this->env->getExtension("native_profiler");
        $__internal_6738b9a429df7ac4780d4b6eb66d538039413a59de17f5462771843a09eb3e83->enter($__internal_6738b9a429df7ac4780d4b6eb66d538039413a59de17f5462771843a09eb3e83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_6738b9a429df7ac4780d4b6eb66d538039413a59de17f5462771843a09eb3e83->leave($__internal_6738b9a429df7ac4780d4b6eb66d538039413a59de17f5462771843a09eb3e83_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
