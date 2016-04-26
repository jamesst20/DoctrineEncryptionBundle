<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_be322a581f6a0c42837775c26ac5ee6aaac1b4ed0aed3f853561cf26f4f744e9 extends Twig_Template
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
        $__internal_962b34f89f3267456881acb21357b5007038ae77e23f3e89b592af8cd20f36d3 = $this->env->getExtension("native_profiler");
        $__internal_962b34f89f3267456881acb21357b5007038ae77e23f3e89b592af8cd20f36d3->enter($__internal_962b34f89f3267456881acb21357b5007038ae77e23f3e89b592af8cd20f36d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_962b34f89f3267456881acb21357b5007038ae77e23f3e89b592af8cd20f36d3->leave($__internal_962b34f89f3267456881acb21357b5007038ae77e23f3e89b592af8cd20f36d3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
