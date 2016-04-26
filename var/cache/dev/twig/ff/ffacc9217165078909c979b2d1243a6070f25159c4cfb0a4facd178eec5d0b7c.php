<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_96fe0410f3c80d07cbac2bf77b062c4facf73c9bd4bf7d23eb4e8f0e757dc196 extends Twig_Template
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
        $__internal_06361a6d0111b636e3786be53a54afa7ee0125d1bc21d500cdc2bfe6703fa044 = $this->env->getExtension("native_profiler");
        $__internal_06361a6d0111b636e3786be53a54afa7ee0125d1bc21d500cdc2bfe6703fa044->enter($__internal_06361a6d0111b636e3786be53a54afa7ee0125d1bc21d500cdc2bfe6703fa044_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_06361a6d0111b636e3786be53a54afa7ee0125d1bc21d500cdc2bfe6703fa044->leave($__internal_06361a6d0111b636e3786be53a54afa7ee0125d1bc21d500cdc2bfe6703fa044_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
