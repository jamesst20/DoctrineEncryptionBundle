<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_2d7793b8f7d86198bf37db37b0e00c3c682d2efb2fa91a94159acef89178bc77 extends Twig_Template
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
        $__internal_fc980185c3613aa29b6a60a0877ba1c5de5fa9ae08b3f389e5086f81c9e2204f = $this->env->getExtension("native_profiler");
        $__internal_fc980185c3613aa29b6a60a0877ba1c5de5fa9ae08b3f389e5086f81c9e2204f->enter($__internal_fc980185c3613aa29b6a60a0877ba1c5de5fa9ae08b3f389e5086f81c9e2204f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_fc980185c3613aa29b6a60a0877ba1c5de5fa9ae08b3f389e5086f81c9e2204f->leave($__internal_fc980185c3613aa29b6a60a0877ba1c5de5fa9ae08b3f389e5086f81c9e2204f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
