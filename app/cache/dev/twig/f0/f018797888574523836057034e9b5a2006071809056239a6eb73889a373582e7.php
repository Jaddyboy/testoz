<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_cc2f250832b2402f50fcffda44b5248aab8d6e11313b42e2a34c70f54117da4c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_10925f0d6092d041ceadfb44173ff7d2420b6d02d1b0803cac881a3b708bfbe8 = $this->env->getExtension("native_profiler");
        $__internal_10925f0d6092d041ceadfb44173ff7d2420b6d02d1b0803cac881a3b708bfbe8->enter($__internal_10925f0d6092d041ceadfb44173ff7d2420b6d02d1b0803cac881a3b708bfbe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_10925f0d6092d041ceadfb44173ff7d2420b6d02d1b0803cac881a3b708bfbe8->leave($__internal_10925f0d6092d041ceadfb44173ff7d2420b6d02d1b0803cac881a3b708bfbe8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a82e9c9c1544effb44d8fbdb730a47a456f146d5f1c4518fd1016e04d37c551a = $this->env->getExtension("native_profiler");
        $__internal_a82e9c9c1544effb44d8fbdb730a47a456f146d5f1c4518fd1016e04d37c551a->enter($__internal_a82e9c9c1544effb44d8fbdb730a47a456f146d5f1c4518fd1016e04d37c551a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_a82e9c9c1544effb44d8fbdb730a47a456f146d5f1c4518fd1016e04d37c551a->leave($__internal_a82e9c9c1544effb44d8fbdb730a47a456f146d5f1c4518fd1016e04d37c551a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_00185db0773bd2f08b23c61a59b87a56b77170543028be6be3c72cd718c88548 = $this->env->getExtension("native_profiler");
        $__internal_00185db0773bd2f08b23c61a59b87a56b77170543028be6be3c72cd718c88548->enter($__internal_00185db0773bd2f08b23c61a59b87a56b77170543028be6be3c72cd718c88548_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_00185db0773bd2f08b23c61a59b87a56b77170543028be6be3c72cd718c88548->leave($__internal_00185db0773bd2f08b23c61a59b87a56b77170543028be6be3c72cd718c88548_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
