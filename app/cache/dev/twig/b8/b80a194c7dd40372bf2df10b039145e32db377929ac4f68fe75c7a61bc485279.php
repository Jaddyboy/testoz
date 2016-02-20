<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_5e3bcecac7cd98a71fc29a7f3584ccbde86a2db26ab16a8fb85fb7ec8a3789ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_b5e9de0359c3e007ec397a1efa5bf80d6c265e81993b985e5fa0d29d7cb68519 = $this->env->getExtension("native_profiler");
        $__internal_b5e9de0359c3e007ec397a1efa5bf80d6c265e81993b985e5fa0d29d7cb68519->enter($__internal_b5e9de0359c3e007ec397a1efa5bf80d6c265e81993b985e5fa0d29d7cb68519_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b5e9de0359c3e007ec397a1efa5bf80d6c265e81993b985e5fa0d29d7cb68519->leave($__internal_b5e9de0359c3e007ec397a1efa5bf80d6c265e81993b985e5fa0d29d7cb68519_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b1ae36a448790d2c5e8d6e1c8fd2699b2c3438fdd40def14154ec1704d046f52 = $this->env->getExtension("native_profiler");
        $__internal_b1ae36a448790d2c5e8d6e1c8fd2699b2c3438fdd40def14154ec1704d046f52->enter($__internal_b1ae36a448790d2c5e8d6e1c8fd2699b2c3438fdd40def14154ec1704d046f52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_b1ae36a448790d2c5e8d6e1c8fd2699b2c3438fdd40def14154ec1704d046f52->leave($__internal_b1ae36a448790d2c5e8d6e1c8fd2699b2c3438fdd40def14154ec1704d046f52_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_51e6e6d1c6e351346f1155e8c31490b650f23006c80e2d6a55d6444d1cbdfa52 = $this->env->getExtension("native_profiler");
        $__internal_51e6e6d1c6e351346f1155e8c31490b650f23006c80e2d6a55d6444d1cbdfa52->enter($__internal_51e6e6d1c6e351346f1155e8c31490b650f23006c80e2d6a55d6444d1cbdfa52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_51e6e6d1c6e351346f1155e8c31490b650f23006c80e2d6a55d6444d1cbdfa52->leave($__internal_51e6e6d1c6e351346f1155e8c31490b650f23006c80e2d6a55d6444d1cbdfa52_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6e7a15866a65ad30ce4e392ccb966eeb9c1e53c2b89f37e09892cda0f5ddd5ba = $this->env->getExtension("native_profiler");
        $__internal_6e7a15866a65ad30ce4e392ccb966eeb9c1e53c2b89f37e09892cda0f5ddd5ba->enter($__internal_6e7a15866a65ad30ce4e392ccb966eeb9c1e53c2b89f37e09892cda0f5ddd5ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_6e7a15866a65ad30ce4e392ccb966eeb9c1e53c2b89f37e09892cda0f5ddd5ba->leave($__internal_6e7a15866a65ad30ce4e392ccb966eeb9c1e53c2b89f37e09892cda0f5ddd5ba_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
