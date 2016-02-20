<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_75ada64c1cc3c678aee5e5c76731435d29c86077ef7c72c43ae1abc428167668 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_97d77f218fadd1dc6e3748fe92365d24df794b0b7745f2fcdfaa270c61e7003c = $this->env->getExtension("native_profiler");
        $__internal_97d77f218fadd1dc6e3748fe92365d24df794b0b7745f2fcdfaa270c61e7003c->enter($__internal_97d77f218fadd1dc6e3748fe92365d24df794b0b7745f2fcdfaa270c61e7003c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_97d77f218fadd1dc6e3748fe92365d24df794b0b7745f2fcdfaa270c61e7003c->leave($__internal_97d77f218fadd1dc6e3748fe92365d24df794b0b7745f2fcdfaa270c61e7003c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f29cfcba0641beb9622fbed729ff0d8ee7d36ac4fd3265c937d8002d1b1f430a = $this->env->getExtension("native_profiler");
        $__internal_f29cfcba0641beb9622fbed729ff0d8ee7d36ac4fd3265c937d8002d1b1f430a->enter($__internal_f29cfcba0641beb9622fbed729ff0d8ee7d36ac4fd3265c937d8002d1b1f430a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f29cfcba0641beb9622fbed729ff0d8ee7d36ac4fd3265c937d8002d1b1f430a->leave($__internal_f29cfcba0641beb9622fbed729ff0d8ee7d36ac4fd3265c937d8002d1b1f430a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6eb50af323244574cddae6bd455457cb93452891c5e9fe9325a2128b350dd3aa = $this->env->getExtension("native_profiler");
        $__internal_6eb50af323244574cddae6bd455457cb93452891c5e9fe9325a2128b350dd3aa->enter($__internal_6eb50af323244574cddae6bd455457cb93452891c5e9fe9325a2128b350dd3aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_6eb50af323244574cddae6bd455457cb93452891c5e9fe9325a2128b350dd3aa->leave($__internal_6eb50af323244574cddae6bd455457cb93452891c5e9fe9325a2128b350dd3aa_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_849ecd4684d337b2d43192efa16edd904ae6b85c7ec6f7ba20d2f938472e1f8d = $this->env->getExtension("native_profiler");
        $__internal_849ecd4684d337b2d43192efa16edd904ae6b85c7ec6f7ba20d2f938472e1f8d->enter($__internal_849ecd4684d337b2d43192efa16edd904ae6b85c7ec6f7ba20d2f938472e1f8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_849ecd4684d337b2d43192efa16edd904ae6b85c7ec6f7ba20d2f938472e1f8d->leave($__internal_849ecd4684d337b2d43192efa16edd904ae6b85c7ec6f7ba20d2f938472e1f8d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
