<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_f25a7b1719f882d337cba006a9756fec9e9e806f49d8db81aab553d1bf88d757 extends Twig_Template
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
        $__internal_719520a9178e81a3baea2b1f0a3da77ae84525d4ca279fd616a2e25d5e0ec5af = $this->env->getExtension("native_profiler");
        $__internal_719520a9178e81a3baea2b1f0a3da77ae84525d4ca279fd616a2e25d5e0ec5af->enter($__internal_719520a9178e81a3baea2b1f0a3da77ae84525d4ca279fd616a2e25d5e0ec5af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_719520a9178e81a3baea2b1f0a3da77ae84525d4ca279fd616a2e25d5e0ec5af->leave($__internal_719520a9178e81a3baea2b1f0a3da77ae84525d4ca279fd616a2e25d5e0ec5af_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
