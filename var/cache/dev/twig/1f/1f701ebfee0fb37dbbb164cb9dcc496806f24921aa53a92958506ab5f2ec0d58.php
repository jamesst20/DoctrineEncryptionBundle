<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_f8e52792900b1853f91812d0e6fc3ed3f3fdacded32d179bb362f89a9cf56384 extends Twig_Template
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
        $__internal_b3f820495a398a04a7e5e16ca1a270d8388abad7fcfc92594e7ee0e356ce845f = $this->env->getExtension("native_profiler");
        $__internal_b3f820495a398a04a7e5e16ca1a270d8388abad7fcfc92594e7ee0e356ce845f->enter($__internal_b3f820495a398a04a7e5e16ca1a270d8388abad7fcfc92594e7ee0e356ce845f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_b3f820495a398a04a7e5e16ca1a270d8388abad7fcfc92594e7ee0e356ce845f->leave($__internal_b3f820495a398a04a7e5e16ca1a270d8388abad7fcfc92594e7ee0e356ce845f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
