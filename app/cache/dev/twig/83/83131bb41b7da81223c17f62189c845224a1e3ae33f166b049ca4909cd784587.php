<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_68e4bade7c684046ad669cdf4809e811e3b14f2eaaef435f0d8a4425ab76e171 extends Twig_Template
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
        $__internal_e6d49fdb3446f98c4bdebc1921a1ebb1c20c6e9545bbdafd126a2ab829b67e6b = $this->env->getExtension("native_profiler");
        $__internal_e6d49fdb3446f98c4bdebc1921a1ebb1c20c6e9545bbdafd126a2ab829b67e6b->enter($__internal_e6d49fdb3446f98c4bdebc1921a1ebb1c20c6e9545bbdafd126a2ab829b67e6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "TwigBundle:Exception:traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_e6d49fdb3446f98c4bdebc1921a1ebb1c20c6e9545bbdafd126a2ab829b67e6b->leave($__internal_e6d49fdb3446f98c4bdebc1921a1ebb1c20c6e9545bbdafd126a2ab829b67e6b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  28 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% if exception.trace|length %}*/
/* {% for trace in exception.trace %}*/
/* {% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}*/
/* */
/* {% endfor %}*/
/* {% endif %}*/
/* */
