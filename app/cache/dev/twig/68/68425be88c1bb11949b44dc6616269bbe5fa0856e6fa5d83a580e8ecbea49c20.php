<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_e5cac8bcc318a56187cd8aff074c976858a56f71a4af2c94814f56c1b4e47450 extends Twig_Template
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
        $__internal_9a16bafb5d30118d5988dbc378c0e3f7117c448a239e2e0067926fffeed315fc = $this->env->getExtension("native_profiler");
        $__internal_9a16bafb5d30118d5988dbc378c0e3f7117c448a239e2e0067926fffeed315fc->enter($__internal_9a16bafb5d30118d5988dbc378c0e3f7117c448a239e2e0067926fffeed315fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_9a16bafb5d30118d5988dbc378c0e3f7117c448a239e2e0067926fffeed315fc->leave($__internal_9a16bafb5d30118d5988dbc378c0e3f7117c448a239e2e0067926fffeed315fc_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
