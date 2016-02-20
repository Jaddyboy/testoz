<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_df82c3771ec3be573167afbd20f6f325b225f1eed0f3c83ed6d9d715740a99d5 extends Twig_Template
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
        $__internal_76a20f506a4784495b788df86b53db3d6373337264e92c8faba0f3bbebb29ad2 = $this->env->getExtension("native_profiler");
        $__internal_76a20f506a4784495b788df86b53db3d6373337264e92c8faba0f3bbebb29ad2->enter($__internal_76a20f506a4784495b788df86b53db3d6373337264e92c8faba0f3bbebb29ad2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_76a20f506a4784495b788df86b53db3d6373337264e92c8faba0f3bbebb29ad2->leave($__internal_76a20f506a4784495b788df86b53db3d6373337264e92c8faba0f3bbebb29ad2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
