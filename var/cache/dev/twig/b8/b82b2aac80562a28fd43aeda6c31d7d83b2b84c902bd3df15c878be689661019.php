<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_ca3cb31c17c51d14dfe3741bf5e6b9fab3fe6e906ea6626f2a8ed49c06f7870e extends Twig_Template
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
        $__internal_69ae4188ac1ca7112c0c2b838e6e60086efbec2ad3ee1a0d4ff59a47226e0570 = $this->env->getExtension("native_profiler");
        $__internal_69ae4188ac1ca7112c0c2b838e6e60086efbec2ad3ee1a0d4ff59a47226e0570->enter($__internal_69ae4188ac1ca7112c0c2b838e6e60086efbec2ad3ee1a0d4ff59a47226e0570_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_69ae4188ac1ca7112c0c2b838e6e60086efbec2ad3ee1a0d4ff59a47226e0570->leave($__internal_69ae4188ac1ca7112c0c2b838e6e60086efbec2ad3ee1a0d4ff59a47226e0570_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
