<?php

/* SJExampleBundle:Default:index.html.twig */
class __TwigTemplate_c37e18fb6cb7cc875c0b6c15d1182e7a6515cde934752c2922c049b0af7067df extends Twig_Template
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
        $__internal_4f3507f39da3aafdcaed3fb1c57e3d8417b58c5f6f99286c6cb9c0ebbb528b94 = $this->env->getExtension("native_profiler");
        $__internal_4f3507f39da3aafdcaed3fb1c57e3d8417b58c5f6f99286c6cb9c0ebbb528b94->enter($__internal_4f3507f39da3aafdcaed3fb1c57e3d8417b58c5f6f99286c6cb9c0ebbb528b94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SJExampleBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!

<table>
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 5
            echo "        <tr><td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "firstName", array()), "html", null, true);
            echo "</td></tr>
        <tr><td>";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "lastName", array()), "html", null, true);
            echo "</td></tr>
        <tr><td>";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "description", array()), "html", null, true);
            echo "</td></tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "</table>";
        
        $__internal_4f3507f39da3aafdcaed3fb1c57e3d8417b58c5f6f99286c6cb9c0ebbb528b94->leave($__internal_4f3507f39da3aafdcaed3fb1c57e3d8417b58c5f6f99286c6cb9c0ebbb528b94_prof);

    }

    public function getTemplateName()
    {
        return "SJExampleBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 9,  40 => 7,  36 => 6,  31 => 5,  27 => 4,  22 => 1,);
    }
}
/* Hello World!*/
/* */
/* <table>*/
/*     {% for entity in entities %}*/
/*         <tr><td>{{ entity.firstName }}</td></tr>*/
/*         <tr><td>{{ entity.lastName }}</td></tr>*/
/*         <tr><td>{{ entity.description }}</td></tr>*/
/*     {% endfor %}*/
/* </table>*/
