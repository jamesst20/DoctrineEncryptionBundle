<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_cfa8a7997970f1452c069c95d043014880cf6f567bb41beaa5cdc2704eb0ebb6 extends Twig_Template
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
        $__internal_402ce217fc77d2ba85a0dbb81a18ebe312dd2423d89865c46da2514c5bd2139c = $this->env->getExtension("native_profiler");
        $__internal_402ce217fc77d2ba85a0dbb81a18ebe312dd2423d89865c46da2514c5bd2139c->enter($__internal_402ce217fc77d2ba85a0dbb81a18ebe312dd2423d89865c46da2514c5bd2139c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_402ce217fc77d2ba85a0dbb81a18ebe312dd2423d89865c46da2514c5bd2139c->leave($__internal_402ce217fc77d2ba85a0dbb81a18ebe312dd2423d89865c46da2514c5bd2139c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
