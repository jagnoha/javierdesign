<?php

/* core/modules/layout_discovery/layouts/twocol_bricks/layout--twocol-bricks.html.twig */
class __TwigTemplate_4a0d737aeaa0051e4aea2a2145307f1a65d68ae9726b7bb776aa79aa54993dc0 extends Twig_Template
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
        $tags = array("set" => 17, "if" => 22);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if'),
                array(),
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

        // line 17
        $context["classes"] = array(0 => "layout", 1 => "layout--twocol-bricks");
        // line 22
        if ((isset($context["content"]) ? $context["content"] : null)) {
            // line 23
            echo "  <div";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
            echo ">
    ";
            // line 24
            if ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "top", array())) {
                // line 25
                echo "      <div class=\"layout__region layout__region--top\">
        ";
                // line 26
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "top", array()), "html", null, true));
                echo "
      </div>
    ";
            }
            // line 29
            echo "
    ";
            // line 30
            if ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "first_above", array())) {
                // line 31
                echo "      <div class=\"layout__region layout__region--first-above\">
        ";
                // line 32
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "first_above", array()), "html", null, true));
                echo "
      </div>
    ";
            }
            // line 35
            echo "
    ";
            // line 36
            if ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "second_above", array())) {
                // line 37
                echo "      <div class=\"layout__region layout__region--second-above\">
        ";
                // line 38
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "second_above", array()), "html", null, true));
                echo "
      </div>
    ";
            }
            // line 41
            echo "
    ";
            // line 42
            if ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "middle", array())) {
                // line 43
                echo "      <div class=\"layout__region layout__region--middle\">
        ";
                // line 44
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "middle", array()), "html", null, true));
                echo "
      </div>
    ";
            }
            // line 47
            echo "
    ";
            // line 48
            if ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "first_below", array())) {
                // line 49
                echo "      <div class=\"layout__region layout__region--first-below\">
        ";
                // line 50
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "first_below", array()), "html", null, true));
                echo "
      </div>
    ";
            }
            // line 53
            echo "
    ";
            // line 54
            if ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "second_below", array())) {
                // line 55
                echo "      <div class=\"layout__region layout__region--second-below\">
        ";
                // line 56
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "second_below", array()), "html", null, true));
                echo "
      </div>
    ";
            }
            // line 59
            echo "
    ";
            // line 60
            if ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "bottom", array())) {
                // line 61
                echo "      <div class=\"layout__region layout__region--bottom\">
        ";
                // line 62
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "bottom", array()), "html", null, true));
                echo "
      </div>
    ";
            }
            // line 65
            echo "  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "core/modules/layout_discovery/layouts/twocol_bricks/layout--twocol-bricks.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 65,  141 => 62,  138 => 61,  136 => 60,  133 => 59,  127 => 56,  124 => 55,  122 => 54,  119 => 53,  113 => 50,  110 => 49,  108 => 48,  105 => 47,  99 => 44,  96 => 43,  94 => 42,  91 => 41,  85 => 38,  82 => 37,  80 => 36,  77 => 35,  71 => 32,  68 => 31,  66 => 30,  63 => 29,  57 => 26,  54 => 25,  52 => 24,  47 => 23,  45 => 22,  43 => 17,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Default theme implementation for a two column layout.
 *
 * This template provides a two column display layout with full width areas at
 * the top, bottom and in the middle.
 *
 * Available variables:
 * - content: The content for this layout.
 * - attributes: HTML attributes for the layout <div>.
 *
 * @ingroup themeable
 */
#}
{%
  set classes = [
    'layout',
    'layout--twocol-bricks',
  ]
%}
{% if content %}
  <div{{ attributes.addClass(classes) }}>
    {% if content.top %}
      <div class=\"layout__region layout__region--top\">
        {{ content.top }}
      </div>
    {% endif %}

    {% if content.first_above %}
      <div class=\"layout__region layout__region--first-above\">
        {{ content.first_above }}
      </div>
    {% endif %}

    {% if content.second_above %}
      <div class=\"layout__region layout__region--second-above\">
        {{ content.second_above }}
      </div>
    {% endif %}

    {% if content.middle %}
      <div class=\"layout__region layout__region--middle\">
        {{ content.middle }}
      </div>
    {% endif %}

    {% if content.first_below %}
      <div class=\"layout__region layout__region--first-below\">
        {{ content.first_below }}
      </div>
    {% endif %}

    {% if content.second_below %}
      <div class=\"layout__region layout__region--second-below\">
        {{ content.second_below }}
      </div>
    {% endif %}

    {% if content.bottom %}
      <div class=\"layout__region layout__region--bottom\">
        {{ content.bottom }}
      </div>
    {% endif %}
  </div>
{% endif %}
";
    }
}
