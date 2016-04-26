<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_5c71b804a98ddfb095fba1ea9dde50434c5aa288d4a9174c20f8dfc6b81d0ddc extends Twig_Template
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
        $__internal_202f9ad5b6400d02cd2b5145224f7a628607398f8474f857ae021723f63dd844 = $this->env->getExtension("native_profiler");
        $__internal_202f9ad5b6400d02cd2b5145224f7a628607398f8474f857ae021723f63dd844->enter($__internal_202f9ad5b6400d02cd2b5145224f7a628607398f8474f857ae021723f63dd844_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_202f9ad5b6400d02cd2b5145224f7a628607398f8474f857ae021723f63dd844->leave($__internal_202f9ad5b6400d02cd2b5145224f7a628607398f8474f857ae021723f63dd844_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
