<?php

/* core/themes/classy/templates/content/mark.html.twig */
class __TwigTemplate_853b0a2bbc02a59150c4e0114647f6d56ef0c19f9bf3af3506331f93ee77ba9a extends Twig_Template
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
        // line 14
        if ((isset($context["logged_in"]) ? $context["logged_in"] : null)) {
            // line 15
            echo "  ";
            if (((isset($context["status"]) ? $context["status"] : null) === constant("MARK_NEW"))) {
                // line 16
                echo "    <span class=\"marker\">";
                echo $this->env->getExtension('drupal_core')->renderVar(t("new"));
                echo "</span>
  ";
            } elseif ((            // line 17
(isset($context["status"]) ? $context["status"] : null) === constant("MARK_UPDATED"))) {
                // line 18
                echo "    <span class=\"marker\">";
                echo $this->env->getExtension('drupal_core')->renderVar(t("updated"));
                echo "</span>
  ";
            }
        }
    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/content/mark.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 18,  29 => 17,  24 => 16,  21 => 15,  19 => 14,);
    }
}
