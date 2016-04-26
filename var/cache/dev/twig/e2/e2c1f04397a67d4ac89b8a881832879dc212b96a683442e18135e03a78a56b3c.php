<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_144a775455a6b013f5d190220411032fa063076f12f12d118f27333df8139612 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dd639e23bac58ab74345bc21e11a50fb1730e255d9915f858e3230d293791656 = $this->env->getExtension("native_profiler");
        $__internal_dd639e23bac58ab74345bc21e11a50fb1730e255d9915f858e3230d293791656->enter($__internal_dd639e23bac58ab74345bc21e11a50fb1730e255d9915f858e3230d293791656_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_dd639e23bac58ab74345bc21e11a50fb1730e255d9915f858e3230d293791656->leave($__internal_dd639e23bac58ab74345bc21e11a50fb1730e255d9915f858e3230d293791656_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_d89f9b6e82cded22aeb29ef86da9a09e111a594143616e7d4f1563c413dad55b = $this->env->getExtension("native_profiler");
        $__internal_d89f9b6e82cded22aeb29ef86da9a09e111a594143616e7d4f1563c413dad55b->enter($__internal_d89f9b6e82cded22aeb29ef86da9a09e111a594143616e7d4f1563c413dad55b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_d89f9b6e82cded22aeb29ef86da9a09e111a594143616e7d4f1563c413dad55b->leave($__internal_d89f9b6e82cded22aeb29ef86da9a09e111a594143616e7d4f1563c413dad55b_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
