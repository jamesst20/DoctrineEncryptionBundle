<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_ac9951f77b994466431a68016bc67f21f509b105e78ea0f9ac7ddd55c4c73464 extends Twig_Template
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
        $__internal_c701081e39a361af0e3c2924c3b8c614fb6a81949c0f2ef4bbc17b113992c2f7 = $this->env->getExtension("native_profiler");
        $__internal_c701081e39a361af0e3c2924c3b8c614fb6a81949c0f2ef4bbc17b113992c2f7->enter($__internal_c701081e39a361af0e3c2924c3b8c614fb6a81949c0f2ef4bbc17b113992c2f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_c701081e39a361af0e3c2924c3b8c614fb6a81949c0f2ef4bbc17b113992c2f7->leave($__internal_c701081e39a361af0e3c2924c3b8c614fb6a81949c0f2ef4bbc17b113992c2f7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
