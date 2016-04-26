<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_737f70e7280f79c9eb76a196fabdcda78ac08475cbabb50a19088948ea3ba9fa extends Twig_Template
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
        $__internal_35cfc3946c124655b20b4cb1b6d72554b32de6a02e15643f67b390539f369d1a = $this->env->getExtension("native_profiler");
        $__internal_35cfc3946c124655b20b4cb1b6d72554b32de6a02e15643f67b390539f369d1a->enter($__internal_35cfc3946c124655b20b4cb1b6d72554b32de6a02e15643f67b390539f369d1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_35cfc3946c124655b20b4cb1b6d72554b32de6a02e15643f67b390539f369d1a->leave($__internal_35cfc3946c124655b20b4cb1b6d72554b32de6a02e15643f67b390539f369d1a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
