<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_7f22c39ddfaa1b3a26720262b66e3c03dfd25aedb8a7acd6e218d6271ff5cb58 extends Twig_Template
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
        $__internal_c380d6c0932fe7106a5733cc2f7d71b3904ed629f70384b84951e2dc2d3ec52e = $this->env->getExtension("native_profiler");
        $__internal_c380d6c0932fe7106a5733cc2f7d71b3904ed629f70384b84951e2dc2d3ec52e->enter($__internal_c380d6c0932fe7106a5733cc2f7d71b3904ed629f70384b84951e2dc2d3ec52e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_c380d6c0932fe7106a5733cc2f7d71b3904ed629f70384b84951e2dc2d3ec52e->leave($__internal_c380d6c0932fe7106a5733cc2f7d71b3904ed629f70384b84951e2dc2d3ec52e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
