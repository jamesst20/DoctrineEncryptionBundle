<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_b899f83db0cc5c94bec278b8b2647388cb7107d118b8816ad71d93425558839f extends Twig_Template
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
        $__internal_62fa2a45c31061c2b9aeb7eff76301447655b29bcfaa397bc7cdb6b276403e5e = $this->env->getExtension("native_profiler");
        $__internal_62fa2a45c31061c2b9aeb7eff76301447655b29bcfaa397bc7cdb6b276403e5e->enter($__internal_62fa2a45c31061c2b9aeb7eff76301447655b29bcfaa397bc7cdb6b276403e5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_62fa2a45c31061c2b9aeb7eff76301447655b29bcfaa397bc7cdb6b276403e5e->leave($__internal_62fa2a45c31061c2b9aeb7eff76301447655b29bcfaa397bc7cdb6b276403e5e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
