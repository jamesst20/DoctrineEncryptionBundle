<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_1046d33d467a3160fe054184b97819d76cc2afb18d1cc4768e6b7fb8ac15adb3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e1e86ec42a6a4d1891202930fdc84c846c9c05d0c60913d9cf3094ea7423ae0c = $this->env->getExtension("native_profiler");
        $__internal_e1e86ec42a6a4d1891202930fdc84c846c9c05d0c60913d9cf3094ea7423ae0c->enter($__internal_e1e86ec42a6a4d1891202930fdc84c846c9c05d0c60913d9cf3094ea7423ae0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e1e86ec42a6a4d1891202930fdc84c846c9c05d0c60913d9cf3094ea7423ae0c->leave($__internal_e1e86ec42a6a4d1891202930fdc84c846c9c05d0c60913d9cf3094ea7423ae0c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_00bace3add59363eee1e3632ce3cc1df76d120e29b1a718b4fb443935253bace = $this->env->getExtension("native_profiler");
        $__internal_00bace3add59363eee1e3632ce3cc1df76d120e29b1a718b4fb443935253bace->enter($__internal_00bace3add59363eee1e3632ce3cc1df76d120e29b1a718b4fb443935253bace_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_00bace3add59363eee1e3632ce3cc1df76d120e29b1a718b4fb443935253bace->leave($__internal_00bace3add59363eee1e3632ce3cc1df76d120e29b1a718b4fb443935253bace_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_bca6badad02153894d80bfaa9ae9aeafe8e0997eb82909705e3485186b5c511b = $this->env->getExtension("native_profiler");
        $__internal_bca6badad02153894d80bfaa9ae9aeafe8e0997eb82909705e3485186b5c511b->enter($__internal_bca6badad02153894d80bfaa9ae9aeafe8e0997eb82909705e3485186b5c511b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_bca6badad02153894d80bfaa9ae9aeafe8e0997eb82909705e3485186b5c511b->leave($__internal_bca6badad02153894d80bfaa9ae9aeafe8e0997eb82909705e3485186b5c511b_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
