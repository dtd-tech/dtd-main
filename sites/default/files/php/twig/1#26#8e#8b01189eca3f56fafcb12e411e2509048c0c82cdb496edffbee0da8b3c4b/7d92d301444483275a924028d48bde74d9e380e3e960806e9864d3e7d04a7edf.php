<?php

/* core/themes/classy/templates/form/confirm-form.html.twig */
class __TwigTemplate_268e8b01189eca3f56fafcb12e411e2509048c0c82cdb496edffbee0da8b3c4b extends Twig_Template
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
        // line 13
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["form"]) ? $context["form"] : null), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/form/confirm-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 13,);
    }
}
