<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_ef4443576a31a63377498ed2dcb02cc5b9afb0165ea59afd49294755bb153dfc extends Twig_Template
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
        $__internal_74476351d5fb5df37a7fc3861a5d10410c6f90bed53834c077773de3f340c255 = $this->env->getExtension("native_profiler");
        $__internal_74476351d5fb5df37a7fc3861a5d10410c6f90bed53834c077773de3f340c255->enter($__internal_74476351d5fb5df37a7fc3861a5d10410c6f90bed53834c077773de3f340c255_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_74476351d5fb5df37a7fc3861a5d10410c6f90bed53834c077773de3f340c255->leave($__internal_74476351d5fb5df37a7fc3861a5d10410c6f90bed53834c077773de3f340c255_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
