<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_95269c16e9e5c3c7e4ae4fd47098ca40e7015ee1654ba6186c2b161bebe5899f extends Twig_Template
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
        $__internal_0b708ad6b224d6b322d852221bf78a9af7c9db105d4fc8ede26b64c981e9019a = $this->env->getExtension("native_profiler");
        $__internal_0b708ad6b224d6b322d852221bf78a9af7c9db105d4fc8ede26b64c981e9019a->enter($__internal_0b708ad6b224d6b322d852221bf78a9af7c9db105d4fc8ede26b64c981e9019a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_0b708ad6b224d6b322d852221bf78a9af7c9db105d4fc8ede26b64c981e9019a->leave($__internal_0b708ad6b224d6b322d852221bf78a9af7c9db105d4fc8ede26b64c981e9019a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
