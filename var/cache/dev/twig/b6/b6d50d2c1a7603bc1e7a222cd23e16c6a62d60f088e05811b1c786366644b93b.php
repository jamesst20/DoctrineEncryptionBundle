<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_e165be6f9cf3e702fa2e728b502da118da6c088e0939cac672cf71c0b8100ff3 extends Twig_Template
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
        $__internal_e9bf745382474c5f733330b72b17c46ba766aaef58f2f228135f201d5512a8a7 = $this->env->getExtension("native_profiler");
        $__internal_e9bf745382474c5f733330b72b17c46ba766aaef58f2f228135f201d5512a8a7->enter($__internal_e9bf745382474c5f733330b72b17c46ba766aaef58f2f228135f201d5512a8a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_e9bf745382474c5f733330b72b17c46ba766aaef58f2f228135f201d5512a8a7->leave($__internal_e9bf745382474c5f733330b72b17c46ba766aaef58f2f228135f201d5512a8a7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
