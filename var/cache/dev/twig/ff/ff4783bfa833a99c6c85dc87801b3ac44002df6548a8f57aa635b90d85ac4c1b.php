<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_3d09100e6a3fefb5cb22ae1cac8c8323df7616cbd82e1ccd0b15714471e79e51 extends Twig_Template
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
        $__internal_b66dcb470cf381051c03887d092da75304f724411e32683c4c37991cac8874c7 = $this->env->getExtension("native_profiler");
        $__internal_b66dcb470cf381051c03887d092da75304f724411e32683c4c37991cac8874c7->enter($__internal_b66dcb470cf381051c03887d092da75304f724411e32683c4c37991cac8874c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_b66dcb470cf381051c03887d092da75304f724411e32683c4c37991cac8874c7->leave($__internal_b66dcb470cf381051c03887d092da75304f724411e32683c4c37991cac8874c7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
