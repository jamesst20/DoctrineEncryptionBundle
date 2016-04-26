<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_0f681c62d5d47cf4851230ecc651c1367634ccae1896054970b8caa2ef3ec8fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_dbdb5a51dfd039c0922f80dc72982941a83ddb92d9324b33b8770c5bd9a4905b = $this->env->getExtension("native_profiler");
        $__internal_dbdb5a51dfd039c0922f80dc72982941a83ddb92d9324b33b8770c5bd9a4905b->enter($__internal_dbdb5a51dfd039c0922f80dc72982941a83ddb92d9324b33b8770c5bd9a4905b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dbdb5a51dfd039c0922f80dc72982941a83ddb92d9324b33b8770c5bd9a4905b->leave($__internal_dbdb5a51dfd039c0922f80dc72982941a83ddb92d9324b33b8770c5bd9a4905b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6e1d8ff9561c2e8d43035abfab94174dcb4125bcd1a791b61d47fd5e6e721ac1 = $this->env->getExtension("native_profiler");
        $__internal_6e1d8ff9561c2e8d43035abfab94174dcb4125bcd1a791b61d47fd5e6e721ac1->enter($__internal_6e1d8ff9561c2e8d43035abfab94174dcb4125bcd1a791b61d47fd5e6e721ac1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6e1d8ff9561c2e8d43035abfab94174dcb4125bcd1a791b61d47fd5e6e721ac1->leave($__internal_6e1d8ff9561c2e8d43035abfab94174dcb4125bcd1a791b61d47fd5e6e721ac1_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_82ffb13af6f017bba075c6b76c89885d7545ac005d47adc0086351fef0fd466a = $this->env->getExtension("native_profiler");
        $__internal_82ffb13af6f017bba075c6b76c89885d7545ac005d47adc0086351fef0fd466a->enter($__internal_82ffb13af6f017bba075c6b76c89885d7545ac005d47adc0086351fef0fd466a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_82ffb13af6f017bba075c6b76c89885d7545ac005d47adc0086351fef0fd466a->leave($__internal_82ffb13af6f017bba075c6b76c89885d7545ac005d47adc0086351fef0fd466a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4b4d825db1622da25e43a44615079aff292068aaeb7edd2a46adc2d8f78d9f46 = $this->env->getExtension("native_profiler");
        $__internal_4b4d825db1622da25e43a44615079aff292068aaeb7edd2a46adc2d8f78d9f46->enter($__internal_4b4d825db1622da25e43a44615079aff292068aaeb7edd2a46adc2d8f78d9f46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4b4d825db1622da25e43a44615079aff292068aaeb7edd2a46adc2d8f78d9f46->leave($__internal_4b4d825db1622da25e43a44615079aff292068aaeb7edd2a46adc2d8f78d9f46_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
