<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_9a31854e0828f426474c7e0c42c5be27f6a0f970e83cbe727b4031274b6741dd extends Twig_Template
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
        $__internal_7c5aaee1eb9caf7e150049ff195fb2e983e8800b2a70da7de7b7ea62f90f05da = $this->env->getExtension("native_profiler");
        $__internal_7c5aaee1eb9caf7e150049ff195fb2e983e8800b2a70da7de7b7ea62f90f05da->enter($__internal_7c5aaee1eb9caf7e150049ff195fb2e983e8800b2a70da7de7b7ea62f90f05da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_7c5aaee1eb9caf7e150049ff195fb2e983e8800b2a70da7de7b7ea62f90f05da->leave($__internal_7c5aaee1eb9caf7e150049ff195fb2e983e8800b2a70da7de7b7ea62f90f05da_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
