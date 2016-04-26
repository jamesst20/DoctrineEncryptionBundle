<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_387b7db5045c17dc1278a8ab2cbb1dbd5ac5285f9cb7d0352a9521e0fd90faca extends Twig_Template
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
        $__internal_a8194091be2c36ce43ce7acaf9fbbc22a424c5c650fceb5eb402386bc2a97dd2 = $this->env->getExtension("native_profiler");
        $__internal_a8194091be2c36ce43ce7acaf9fbbc22a424c5c650fceb5eb402386bc2a97dd2->enter($__internal_a8194091be2c36ce43ce7acaf9fbbc22a424c5c650fceb5eb402386bc2a97dd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_a8194091be2c36ce43ce7acaf9fbbc22a424c5c650fceb5eb402386bc2a97dd2->leave($__internal_a8194091be2c36ce43ce7acaf9fbbc22a424c5c650fceb5eb402386bc2a97dd2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
