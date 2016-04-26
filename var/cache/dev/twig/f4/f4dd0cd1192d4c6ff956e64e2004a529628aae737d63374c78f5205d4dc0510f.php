<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_c12698027512cb38b6db1bfd64a0c4aefd748e2de2b986f6a1385a20d694ef77 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_b9c3efd6b4ae725a3b01885cad901fc37ce021bd88e87cf339977181b6e0ef74 = $this->env->getExtension("native_profiler");
        $__internal_b9c3efd6b4ae725a3b01885cad901fc37ce021bd88e87cf339977181b6e0ef74->enter($__internal_b9c3efd6b4ae725a3b01885cad901fc37ce021bd88e87cf339977181b6e0ef74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b9c3efd6b4ae725a3b01885cad901fc37ce021bd88e87cf339977181b6e0ef74->leave($__internal_b9c3efd6b4ae725a3b01885cad901fc37ce021bd88e87cf339977181b6e0ef74_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_67b81a0072acdf28189243bb964299932e1d1a5f70547fb3b5ae583352d9bf86 = $this->env->getExtension("native_profiler");
        $__internal_67b81a0072acdf28189243bb964299932e1d1a5f70547fb3b5ae583352d9bf86->enter($__internal_67b81a0072acdf28189243bb964299932e1d1a5f70547fb3b5ae583352d9bf86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_67b81a0072acdf28189243bb964299932e1d1a5f70547fb3b5ae583352d9bf86->leave($__internal_67b81a0072acdf28189243bb964299932e1d1a5f70547fb3b5ae583352d9bf86_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3d2a73b406da225b5a9bdc05972ef14fc640c5a4e92991d0cabecba65d3dbe99 = $this->env->getExtension("native_profiler");
        $__internal_3d2a73b406da225b5a9bdc05972ef14fc640c5a4e92991d0cabecba65d3dbe99->enter($__internal_3d2a73b406da225b5a9bdc05972ef14fc640c5a4e92991d0cabecba65d3dbe99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3d2a73b406da225b5a9bdc05972ef14fc640c5a4e92991d0cabecba65d3dbe99->leave($__internal_3d2a73b406da225b5a9bdc05972ef14fc640c5a4e92991d0cabecba65d3dbe99_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c8ed4ee21ed290facb8f2742eaa803eec2969930885f65c369a7ce5cf0855d45 = $this->env->getExtension("native_profiler");
        $__internal_c8ed4ee21ed290facb8f2742eaa803eec2969930885f65c369a7ce5cf0855d45->enter($__internal_c8ed4ee21ed290facb8f2742eaa803eec2969930885f65c369a7ce5cf0855d45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_c8ed4ee21ed290facb8f2742eaa803eec2969930885f65c369a7ce5cf0855d45->leave($__internal_c8ed4ee21ed290facb8f2742eaa803eec2969930885f65c369a7ce5cf0855d45_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
