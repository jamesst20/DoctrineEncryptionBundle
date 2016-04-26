<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_4e930b76c0d1ddd4bd73b35a63afe0c1e59fe1adfbd35c081d142742f9ec75d5 extends Twig_Template
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
        $__internal_ab60e6ce8f5635fa4efa3a242d6fbbcd29ccbc0756c5f3e30a8f96e790f5b240 = $this->env->getExtension("native_profiler");
        $__internal_ab60e6ce8f5635fa4efa3a242d6fbbcd29ccbc0756c5f3e30a8f96e790f5b240->enter($__internal_ab60e6ce8f5635fa4efa3a242d6fbbcd29ccbc0756c5f3e30a8f96e790f5b240_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_ab60e6ce8f5635fa4efa3a242d6fbbcd29ccbc0756c5f3e30a8f96e790f5b240->leave($__internal_ab60e6ce8f5635fa4efa3a242d6fbbcd29ccbc0756c5f3e30a8f96e790f5b240_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
