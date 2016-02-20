<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_ac44ec7c496f3e2aa2ada358c8ebdabca8aceed38074d5c9937846956928bb27 extends Twig_Template
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
        $__internal_68a90a341fb157d580b4347f1a9146998f1231b0877d497a5eb80775b751e0ff = $this->env->getExtension("native_profiler");
        $__internal_68a90a341fb157d580b4347f1a9146998f1231b0877d497a5eb80775b751e0ff->enter($__internal_68a90a341fb157d580b4347f1a9146998f1231b0877d497a5eb80775b751e0ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_68a90a341fb157d580b4347f1a9146998f1231b0877d497a5eb80775b751e0ff->leave($__internal_68a90a341fb157d580b4347f1a9146998f1231b0877d497a5eb80775b751e0ff_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
