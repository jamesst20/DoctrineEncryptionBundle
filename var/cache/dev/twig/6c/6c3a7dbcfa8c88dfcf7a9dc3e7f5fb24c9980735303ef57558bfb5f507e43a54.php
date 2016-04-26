<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_fa51612b863bc4628ebe91e62bd51a03cb973d9ffaf470ac70014fddbf9d04f2 extends Twig_Template
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
        $__internal_8b4edcc3b7c313a929a5d4df6a30a8c21f3eda3152914ec9ca5852c091641227 = $this->env->getExtension("native_profiler");
        $__internal_8b4edcc3b7c313a929a5d4df6a30a8c21f3eda3152914ec9ca5852c091641227->enter($__internal_8b4edcc3b7c313a929a5d4df6a30a8c21f3eda3152914ec9ca5852c091641227_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_8b4edcc3b7c313a929a5d4df6a30a8c21f3eda3152914ec9ca5852c091641227->leave($__internal_8b4edcc3b7c313a929a5d4df6a30a8c21f3eda3152914ec9ca5852c091641227_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
