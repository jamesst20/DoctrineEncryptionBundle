<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_8614a024786bb9603f79497de95c138fc9ad769230b74cf4de823956da76fcc8 extends Twig_Template
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
        $__internal_7f1a9d4af2d29cb25b1945101fae531433fdef95ec74833f7009defaf7ba0edc = $this->env->getExtension("native_profiler");
        $__internal_7f1a9d4af2d29cb25b1945101fae531433fdef95ec74833f7009defaf7ba0edc->enter($__internal_7f1a9d4af2d29cb25b1945101fae531433fdef95ec74833f7009defaf7ba0edc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_7f1a9d4af2d29cb25b1945101fae531433fdef95ec74833f7009defaf7ba0edc->leave($__internal_7f1a9d4af2d29cb25b1945101fae531433fdef95ec74833f7009defaf7ba0edc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
