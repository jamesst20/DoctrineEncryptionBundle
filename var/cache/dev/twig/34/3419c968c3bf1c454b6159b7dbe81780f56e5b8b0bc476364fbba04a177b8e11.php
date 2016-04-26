<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_2a808cd0c087d3b826bed174e589e7ce989af883bec582c2bec72e0c7efd1807 extends Twig_Template
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
        $__internal_f48b08062891652ac2a5d8ff654ea2a8816c703182a61595b58e02d134dc6289 = $this->env->getExtension("native_profiler");
        $__internal_f48b08062891652ac2a5d8ff654ea2a8816c703182a61595b58e02d134dc6289->enter($__internal_f48b08062891652ac2a5d8ff654ea2a8816c703182a61595b58e02d134dc6289_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_f48b08062891652ac2a5d8ff654ea2a8816c703182a61595b58e02d134dc6289->leave($__internal_f48b08062891652ac2a5d8ff654ea2a8816c703182a61595b58e02d134dc6289_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
