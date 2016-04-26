<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_c1093b6dd241b87fb3cf55718dd4351d8759b73375afcb766c34002e38ebdbcb extends Twig_Template
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
        $__internal_0914c89304b8f892b7467c6466d6167c4bcbcfeea95ac23c83c52c5fcf32e991 = $this->env->getExtension("native_profiler");
        $__internal_0914c89304b8f892b7467c6466d6167c4bcbcfeea95ac23c83c52c5fcf32e991->enter($__internal_0914c89304b8f892b7467c6466d6167c4bcbcfeea95ac23c83c52c5fcf32e991_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_0914c89304b8f892b7467c6466d6167c4bcbcfeea95ac23c83c52c5fcf32e991->leave($__internal_0914c89304b8f892b7467c6466d6167c4bcbcfeea95ac23c83c52c5fcf32e991_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
