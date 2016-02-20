<?php

/* ::base.html.twig */
class __TwigTemplate_fb8687022f262f72a0d1466143ee425ec04f923dd463590a180d7dd975690c1b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cf0f0549b1fa1cc0e72fef0c6eba1f345b4edde254545609d0df71d497869c49 = $this->env->getExtension("native_profiler");
        $__internal_cf0f0549b1fa1cc0e72fef0c6eba1f345b4edde254545609d0df71d497869c49->enter($__internal_cf0f0549b1fa1cc0e72fef0c6eba1f345b4edde254545609d0df71d497869c49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_cf0f0549b1fa1cc0e72fef0c6eba1f345b4edde254545609d0df71d497869c49->leave($__internal_cf0f0549b1fa1cc0e72fef0c6eba1f345b4edde254545609d0df71d497869c49_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_97011a6805a62289ec5a30be3e6ba4924fbd6fd0161edbe780e7b75e53749867 = $this->env->getExtension("native_profiler");
        $__internal_97011a6805a62289ec5a30be3e6ba4924fbd6fd0161edbe780e7b75e53749867->enter($__internal_97011a6805a62289ec5a30be3e6ba4924fbd6fd0161edbe780e7b75e53749867_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_97011a6805a62289ec5a30be3e6ba4924fbd6fd0161edbe780e7b75e53749867->leave($__internal_97011a6805a62289ec5a30be3e6ba4924fbd6fd0161edbe780e7b75e53749867_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_50a4ae4a1defea91f01be8bb76f5d15bab2a6ee6a22c67a4acae563396609760 = $this->env->getExtension("native_profiler");
        $__internal_50a4ae4a1defea91f01be8bb76f5d15bab2a6ee6a22c67a4acae563396609760->enter($__internal_50a4ae4a1defea91f01be8bb76f5d15bab2a6ee6a22c67a4acae563396609760_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_50a4ae4a1defea91f01be8bb76f5d15bab2a6ee6a22c67a4acae563396609760->leave($__internal_50a4ae4a1defea91f01be8bb76f5d15bab2a6ee6a22c67a4acae563396609760_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_7c8a17ee2428c84276abe9f3374f0691fe8c7043e2b59a4d781e037548c465e1 = $this->env->getExtension("native_profiler");
        $__internal_7c8a17ee2428c84276abe9f3374f0691fe8c7043e2b59a4d781e037548c465e1->enter($__internal_7c8a17ee2428c84276abe9f3374f0691fe8c7043e2b59a4d781e037548c465e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7c8a17ee2428c84276abe9f3374f0691fe8c7043e2b59a4d781e037548c465e1->leave($__internal_7c8a17ee2428c84276abe9f3374f0691fe8c7043e2b59a4d781e037548c465e1_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4889c631abf00c1741ba1ac51019ca6db51020b8f9481367ea95887bb3263a8b = $this->env->getExtension("native_profiler");
        $__internal_4889c631abf00c1741ba1ac51019ca6db51020b8f9481367ea95887bb3263a8b->enter($__internal_4889c631abf00c1741ba1ac51019ca6db51020b8f9481367ea95887bb3263a8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_4889c631abf00c1741ba1ac51019ca6db51020b8f9481367ea95887bb3263a8b->leave($__internal_4889c631abf00c1741ba1ac51019ca6db51020b8f9481367ea95887bb3263a8b_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
