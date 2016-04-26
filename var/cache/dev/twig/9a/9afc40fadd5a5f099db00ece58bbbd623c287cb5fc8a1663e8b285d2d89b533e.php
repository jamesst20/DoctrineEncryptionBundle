<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_b57ae220dbd2e1ba018422711988a470991e7527cc659474dd21bfe32b9728aa extends Twig_Template
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
        $__internal_ac8626f4689176d50309360c2f29a1640972108dbc546d999b8d182e8391d54a = $this->env->getExtension("native_profiler");
        $__internal_ac8626f4689176d50309360c2f29a1640972108dbc546d999b8d182e8391d54a->enter($__internal_ac8626f4689176d50309360c2f29a1640972108dbc546d999b8d182e8391d54a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_ac8626f4689176d50309360c2f29a1640972108dbc546d999b8d182e8391d54a->leave($__internal_ac8626f4689176d50309360c2f29a1640972108dbc546d999b8d182e8391d54a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
