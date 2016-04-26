<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_273ab3b3c7b88beb1aa19dac44facf306e0916e146c6b7630dc47a6fad256ac1 extends Twig_Template
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
        $__internal_de8da2e76cea5f066c2d5dd7f00ab947153921f0566bb753e40ec257a97bcd99 = $this->env->getExtension("native_profiler");
        $__internal_de8da2e76cea5f066c2d5dd7f00ab947153921f0566bb753e40ec257a97bcd99->enter($__internal_de8da2e76cea5f066c2d5dd7f00ab947153921f0566bb753e40ec257a97bcd99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_de8da2e76cea5f066c2d5dd7f00ab947153921f0566bb753e40ec257a97bcd99->leave($__internal_de8da2e76cea5f066c2d5dd7f00ab947153921f0566bb753e40ec257a97bcd99_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
