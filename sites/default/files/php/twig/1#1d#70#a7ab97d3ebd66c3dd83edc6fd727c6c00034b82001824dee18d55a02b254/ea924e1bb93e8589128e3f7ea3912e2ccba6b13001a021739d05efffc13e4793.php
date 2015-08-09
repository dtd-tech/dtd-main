<?php

/* {# inline_template_start #}{{ error }} {{ description }} */
class __TwigTemplate_1d70a7ab97d3ebd66c3dd83edc6fd727c6c00034b82001824dee18d55a02b254 extends Twig_Template
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
        // line 1
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["error"]) ? $context["error"] : null), "html", null, true);
        echo " ";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["description"]) ? $context["description"] : null), "html", null, true);
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}{{ error }} {{ description }}";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
