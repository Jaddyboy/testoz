<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_84a757847b0444e04a37ba6e3ae36cd838ebe7bc77fac4c7d39e43e452589524 extends Twig_Template
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
        $__internal_0f5cb14a3ae27530e62f9b923c8f24490103296b1764b8d7f5d38c0930bb2503 = $this->env->getExtension("native_profiler");
        $__internal_0f5cb14a3ae27530e62f9b923c8f24490103296b1764b8d7f5d38c0930bb2503->enter($__internal_0f5cb14a3ae27530e62f9b923c8f24490103296b1764b8d7f5d38c0930bb2503_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_0f5cb14a3ae27530e62f9b923c8f24490103296b1764b8d7f5d38c0930bb2503->leave($__internal_0f5cb14a3ae27530e62f9b923c8f24490103296b1764b8d7f5d38c0930bb2503_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
