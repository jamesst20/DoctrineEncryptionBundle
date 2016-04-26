<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_28576c62dc2dfac77caaa7f94fbb95113a50192a812d018766ce6b35d5740a4d extends Twig_Template
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
        $__internal_b540f9eaa195b86daa178f6b1661bf274add54160e9a4a0d0b6678633083a294 = $this->env->getExtension("native_profiler");
        $__internal_b540f9eaa195b86daa178f6b1661bf274add54160e9a4a0d0b6678633083a294->enter($__internal_b540f9eaa195b86daa178f6b1661bf274add54160e9a4a0d0b6678633083a294_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_b540f9eaa195b86daa178f6b1661bf274add54160e9a4a0d0b6678633083a294->leave($__internal_b540f9eaa195b86daa178f6b1661bf274add54160e9a4a0d0b6678633083a294_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
