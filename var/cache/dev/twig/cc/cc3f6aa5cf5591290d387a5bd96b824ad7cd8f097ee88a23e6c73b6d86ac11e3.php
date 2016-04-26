<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_52fb2f1709a0d8fdbcd162ba0bc7116a10734ee8416c823e3b682f399a946281 extends Twig_Template
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
        $__internal_3c8a6a9123e5b35aa54b52a0423371e041008f61072dfacc925db733cb209145 = $this->env->getExtension("native_profiler");
        $__internal_3c8a6a9123e5b35aa54b52a0423371e041008f61072dfacc925db733cb209145->enter($__internal_3c8a6a9123e5b35aa54b52a0423371e041008f61072dfacc925db733cb209145_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_3c8a6a9123e5b35aa54b52a0423371e041008f61072dfacc925db733cb209145->leave($__internal_3c8a6a9123e5b35aa54b52a0423371e041008f61072dfacc925db733cb209145_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
