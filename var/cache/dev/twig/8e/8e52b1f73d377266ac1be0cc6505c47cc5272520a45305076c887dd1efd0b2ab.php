<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_8bf04ea4631bab5f44f9e48f51be5d5171fd604390c9197a0e9537e734efd9c3 extends Twig_Template
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
        $__internal_caeb0498ae32c8a7dd8ff5f41e3d4d2916636cabfb6014de040e9815fce4c41e = $this->env->getExtension("native_profiler");
        $__internal_caeb0498ae32c8a7dd8ff5f41e3d4d2916636cabfb6014de040e9815fce4c41e->enter($__internal_caeb0498ae32c8a7dd8ff5f41e3d4d2916636cabfb6014de040e9815fce4c41e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_caeb0498ae32c8a7dd8ff5f41e3d4d2916636cabfb6014de040e9815fce4c41e->leave($__internal_caeb0498ae32c8a7dd8ff5f41e3d4d2916636cabfb6014de040e9815fce4c41e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
