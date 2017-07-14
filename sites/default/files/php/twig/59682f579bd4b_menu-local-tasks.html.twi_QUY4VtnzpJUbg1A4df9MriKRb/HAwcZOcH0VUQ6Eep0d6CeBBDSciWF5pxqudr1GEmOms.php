<?php

/* themes/stem_theme/templates/navigation/menu-local-tasks.html.twig */
class __TwigTemplate_6b6d3e743fc5acceef0e13f63732944677c19c57cb2b49ac5f4a2d1282c496d1 extends Twig_Template
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
        $tags = array("if" => 12);
        $filters = array("t" => 13);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array('t'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 7
        echo "
<div class=\"task-bar alert alert-dismissable clearfix\">
\t<div class=\"clearfix\">
        <div class=\"col-md-12\">
\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
\t\t";
        // line 12
        if ((isset($context["primary"]) ? $context["primary"] : null)) {
            // line 13
            echo "\t\t  <h2 class=\"visually-hidden\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Primary tabs")));
            echo "</h2>
\t\t  <ul class=\"tabs primary\">";
            // line 14
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["primary"]) ? $context["primary"] : null), "html", null, true));
            echo "</ul>
\t\t";
        }
        // line 16
        echo "\t\t";
        if ((isset($context["secondary"]) ? $context["secondary"] : null)) {
            // line 17
            echo "\t\t  <h2 class=\"visually-hidden\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Secondary tabs")));
            echo "</h2>
\t\t  <ul class=\"tabs secondary\">";
            // line 18
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["secondary"]) ? $context["secondary"] : null), "html", null, true));
            echo "</ul>
\t\t";
        }
        // line 20
        echo "        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "themes/stem_theme/templates/navigation/menu-local-tasks.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 20,  70 => 18,  65 => 17,  62 => 16,  57 => 14,  52 => 13,  50 => 12,  43 => 7,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Theme override to display primary and secondary local tasks.
 */
#}

<div class=\"task-bar alert alert-dismissable clearfix\">
\t<div class=\"clearfix\">
        <div class=\"col-md-12\">
\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
\t\t{% if primary %}
\t\t  <h2 class=\"visually-hidden\">{{ 'Primary tabs'|t }}</h2>
\t\t  <ul class=\"tabs primary\">{{ primary }}</ul>
\t\t{% endif %}
\t\t{% if secondary %}
\t\t  <h2 class=\"visually-hidden\">{{ 'Secondary tabs'|t }}</h2>
\t\t  <ul class=\"tabs secondary\">{{ secondary }}</ul>
\t\t{% endif %}
        </div>
    </div>
</div>";
    }
}
