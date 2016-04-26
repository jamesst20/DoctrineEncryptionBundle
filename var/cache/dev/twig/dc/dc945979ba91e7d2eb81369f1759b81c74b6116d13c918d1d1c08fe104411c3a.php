<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_16199e56fa69f220cf2fac04b96c03f41ac289b45cbbb9b7e27fcb33bc70894c extends Twig_Template
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
        $__internal_d28d6d25cc40f55f9377e27ca1a33b91c736b4c9beb2b0d150a572b769268283 = $this->env->getExtension("native_profiler");
        $__internal_d28d6d25cc40f55f9377e27ca1a33b91c736b4c9beb2b0d150a572b769268283->enter($__internal_d28d6d25cc40f55f9377e27ca1a33b91c736b4c9beb2b0d150a572b769268283_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_d28d6d25cc40f55f9377e27ca1a33b91c736b4c9beb2b0d150a572b769268283->leave($__internal_d28d6d25cc40f55f9377e27ca1a33b91c736b4c9beb2b0d150a572b769268283_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
