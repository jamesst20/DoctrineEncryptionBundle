<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_7d61d6d2d8bdfe63f58a34182fd1e76d4391bebc861b499a87292aface85510c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6b3a745289f86e7af937756aedb33b2715f1e0aa04f548c5c9e82a5bd3229899 = $this->env->getExtension("native_profiler");
        $__internal_6b3a745289f86e7af937756aedb33b2715f1e0aa04f548c5c9e82a5bd3229899->enter($__internal_6b3a745289f86e7af937756aedb33b2715f1e0aa04f548c5c9e82a5bd3229899_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6b3a745289f86e7af937756aedb33b2715f1e0aa04f548c5c9e82a5bd3229899->leave($__internal_6b3a745289f86e7af937756aedb33b2715f1e0aa04f548c5c9e82a5bd3229899_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c2fd9fb7e81a0381a5e47066560560bb0b4f223bc2d0079db0e38e52ed395c51 = $this->env->getExtension("native_profiler");
        $__internal_c2fd9fb7e81a0381a5e47066560560bb0b4f223bc2d0079db0e38e52ed395c51->enter($__internal_c2fd9fb7e81a0381a5e47066560560bb0b4f223bc2d0079db0e38e52ed395c51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_c2fd9fb7e81a0381a5e47066560560bb0b4f223bc2d0079db0e38e52ed395c51->leave($__internal_c2fd9fb7e81a0381a5e47066560560bb0b4f223bc2d0079db0e38e52ed395c51_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_295e218410e4398d1f80b4d64e32056ffcc4706f3c011628c5d217b178454cde = $this->env->getExtension("native_profiler");
        $__internal_295e218410e4398d1f80b4d64e32056ffcc4706f3c011628c5d217b178454cde->enter($__internal_295e218410e4398d1f80b4d64e32056ffcc4706f3c011628c5d217b178454cde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_295e218410e4398d1f80b4d64e32056ffcc4706f3c011628c5d217b178454cde->leave($__internal_295e218410e4398d1f80b4d64e32056ffcc4706f3c011628c5d217b178454cde_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_20e1e7e6213162edbda4d62c082f123b051d161b470857aab6312f332c38b2c8 = $this->env->getExtension("native_profiler");
        $__internal_20e1e7e6213162edbda4d62c082f123b051d161b470857aab6312f332c38b2c8->enter($__internal_20e1e7e6213162edbda4d62c082f123b051d161b470857aab6312f332c38b2c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_20e1e7e6213162edbda4d62c082f123b051d161b470857aab6312f332c38b2c8->leave($__internal_20e1e7e6213162edbda4d62c082f123b051d161b470857aab6312f332c38b2c8_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
