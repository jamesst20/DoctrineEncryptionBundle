<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_dd7fc1a422f9a72e8de2e273afda58fee8308e6d2047962997150e3bf368acd5 extends Twig_Template
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
        $__internal_3124b09e9fc18c57fd963afc46d5c942d4cad76a25f6faf671101dda0be03408 = $this->env->getExtension("native_profiler");
        $__internal_3124b09e9fc18c57fd963afc46d5c942d4cad76a25f6faf671101dda0be03408->enter($__internal_3124b09e9fc18c57fd963afc46d5c942d4cad76a25f6faf671101dda0be03408_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_3124b09e9fc18c57fd963afc46d5c942d4cad76a25f6faf671101dda0be03408->leave($__internal_3124b09e9fc18c57fd963afc46d5c942d4cad76a25f6faf671101dda0be03408_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
