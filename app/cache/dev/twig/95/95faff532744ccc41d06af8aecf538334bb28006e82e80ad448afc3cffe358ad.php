<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_eab3754e0169323c40e84dee21e85590b5e289a9f91fc3d107420efac8e18ca9 extends Twig_Template
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
        $__internal_7d8f8ec6000e40d4c305c87293d449a5b93ad4e846390eb8a6e6814487b65054 = $this->env->getExtension("native_profiler");
        $__internal_7d8f8ec6000e40d4c305c87293d449a5b93ad4e846390eb8a6e6814487b65054->enter($__internal_7d8f8ec6000e40d4c305c87293d449a5b93ad4e846390eb8a6e6814487b65054_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_7d8f8ec6000e40d4c305c87293d449a5b93ad4e846390eb8a6e6814487b65054->leave($__internal_7d8f8ec6000e40d4c305c87293d449a5b93ad4e846390eb8a6e6814487b65054_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
