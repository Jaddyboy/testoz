<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_6b6c10c651bd9c8ae331851624188d5fd26469569f75a29694208d787e6a963d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8a381bd4d894ba92af73adb89750a0e565f4aa16b40752c34b88b785407b2efe = $this->env->getExtension("native_profiler");
        $__internal_8a381bd4d894ba92af73adb89750a0e565f4aa16b40752c34b88b785407b2efe->enter($__internal_8a381bd4d894ba92af73adb89750a0e565f4aa16b40752c34b88b785407b2efe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8a381bd4d894ba92af73adb89750a0e565f4aa16b40752c34b88b785407b2efe->leave($__internal_8a381bd4d894ba92af73adb89750a0e565f4aa16b40752c34b88b785407b2efe_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ad8c5f0de43a772b4965bc552bd4b0dba9525ee5910b345864f95a079f52ff13 = $this->env->getExtension("native_profiler");
        $__internal_ad8c5f0de43a772b4965bc552bd4b0dba9525ee5910b345864f95a079f52ff13->enter($__internal_ad8c5f0de43a772b4965bc552bd4b0dba9525ee5910b345864f95a079f52ff13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ad8c5f0de43a772b4965bc552bd4b0dba9525ee5910b345864f95a079f52ff13->leave($__internal_ad8c5f0de43a772b4965bc552bd4b0dba9525ee5910b345864f95a079f52ff13_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f01c34b8707241c06a055fd904859ebbb18291451f9230766fa005b56042e6bf = $this->env->getExtension("native_profiler");
        $__internal_f01c34b8707241c06a055fd904859ebbb18291451f9230766fa005b56042e6bf->enter($__internal_f01c34b8707241c06a055fd904859ebbb18291451f9230766fa005b56042e6bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f01c34b8707241c06a055fd904859ebbb18291451f9230766fa005b56042e6bf->leave($__internal_f01c34b8707241c06a055fd904859ebbb18291451f9230766fa005b56042e6bf_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e685b6d03285856b7d7799b885a59bfb5d121becdef1a5a11c62855e70b6487b = $this->env->getExtension("native_profiler");
        $__internal_e685b6d03285856b7d7799b885a59bfb5d121becdef1a5a11c62855e70b6487b->enter($__internal_e685b6d03285856b7d7799b885a59bfb5d121becdef1a5a11c62855e70b6487b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e685b6d03285856b7d7799b885a59bfb5d121becdef1a5a11c62855e70b6487b->leave($__internal_e685b6d03285856b7d7799b885a59bfb5d121becdef1a5a11c62855e70b6487b_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
