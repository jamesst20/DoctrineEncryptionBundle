<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_bd4feef2020de0a881519e69578b5f4b80ddcdead29f47dd7d7b6c38b9d5dee1 extends Twig_Template
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
        $__internal_4b825c82324980dbd3ae79bef265169e102151959d427f9e0be742c36bf4ea74 = $this->env->getExtension("native_profiler");
        $__internal_4b825c82324980dbd3ae79bef265169e102151959d427f9e0be742c36bf4ea74->enter($__internal_4b825c82324980dbd3ae79bef265169e102151959d427f9e0be742c36bf4ea74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_4b825c82324980dbd3ae79bef265169e102151959d427f9e0be742c36bf4ea74->leave($__internal_4b825c82324980dbd3ae79bef265169e102151959d427f9e0be742c36bf4ea74_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
