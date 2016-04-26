<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_d4f136b669f6a28a7f1eeeea4efac6d270147ff224eaf37679a55ef94caf505c extends Twig_Template
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
        $__internal_4af030d071cb79828260186b536fe185ebcd4781b25bd0fb8d636176ff5f9c6c = $this->env->getExtension("native_profiler");
        $__internal_4af030d071cb79828260186b536fe185ebcd4781b25bd0fb8d636176ff5f9c6c->enter($__internal_4af030d071cb79828260186b536fe185ebcd4781b25bd0fb8d636176ff5f9c6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_4af030d071cb79828260186b536fe185ebcd4781b25bd0fb8d636176ff5f9c6c->leave($__internal_4af030d071cb79828260186b536fe185ebcd4781b25bd0fb8d636176ff5f9c6c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
