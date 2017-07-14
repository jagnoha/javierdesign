<?php

/* @stem_theme/layout/header.html.twig */
class __TwigTemplate_4a96d400693c1ac8fddf86de928a16a20a2a4dbdbdfff6c0b1c0bca699b7c807 extends Twig_Template
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
        $tags = array("if" => 3);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
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

        // line 2
        echo "
";
        // line 3
        if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_top_left", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_top_right", array()))) {
            // line 4
            echo "<div id=\"header-top\" class=\"header-top\">
  <div class=\"container\">
    <div class=\"row\">
      ";
            // line 7
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_top_left", array())) {
                // line 8
                echo "\t  <div class=\"col-sm-6 header-top-left\">
\t\t\t";
                // line 9
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_top_left", array()), "html", null, true));
                echo "
      </div>
\t  ";
            }
            // line 12
            echo "\t  ";
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_top_right", array())) {
                // line 13
                echo "      <div class=\"col-sm-6 header-top-right\">
\t\t\t";
                // line 14
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_top_right", array()), "html", null, true));
                echo "
      </div>
\t  ";
            }
            // line 17
            echo "    </div>
  </div>
</div>
";
        }
        // line 21
        echo "
";
        // line 22
        if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "search", array()))) {
            // line 23
            echo "<header id=\"header\" class=\"header main-header\">
<!-- Header and Navbar -->
  <div class=\"navbar navbar-default\">
    <div class=\"container\">
      <div class=\"row\">
      <div class=\"navbar-header col-md-3 nav-head-wrap header-brand\">
        <button type=\"button\" class=\"navbar-toggle\">
          <span class=\"sr-only\">Toggle navigation</span>
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
        </button>
        ";
            // line 35
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array())) {
                // line 36
                echo "\t\t<div class=\"header-container\">
          ";
                // line 37
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true));
                echo "
        </div>
\t\t";
            }
            // line 40
            echo "
      </div>
      <!-- Navigation -->
      <div id=\"nav-menu-wrap\" class=\"col-md-9 nav-menu-wrap\">
\t  <div class=\"container-wrap\">
\t  <div class=\"nav-region\">
        ";
            // line 46
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "primary_menu", array())) {
                // line 47
                echo "          ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "primary_menu", array()), "html", null, true));
                echo "\t\t  
        ";
            }
            // line 49
            echo "\t\t";
            if ((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "search", array()) || (isset($context["sidenav"]) ? $context["sidenav"] : null)) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "shopping_cart", array()))) {
                // line 50
                echo "\t\t<div class=\"header-element\">
\t\t\t";
                // line 51
                if ((isset($context["header_social_icon"]) ? $context["header_social_icon"] : null)) {
                    // line 52
                    echo "\t\t\t<div class=\"header-element-item header-element-social\">
\t\t\t\t<button type=\"button\" class=\"header-element-icon social-icon\" data-toggle=\"modal\" data-target=\"#social-modal\"><i class=\"fa fa-share-alt\"></i></button>
\t\t\t</div>
\t\t\t";
                }
                // line 56
                echo "\t\t\t
\t\t\t";
                // line 57
                if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "search", array())) {
                    // line 58
                    echo "\t\t\t\t<div class=\"header-element-item header-element-search\">
\t\t\t\t<div id=\"search\">
\t\t\t\t<span class=\"header-element-icon search-icon search-trigger\"><i class=\"fa fa-search\"></i></span>
\t\t\t\t<div class=\"search-bar\">
\t\t\t\t<div class=\"search-wrap\">";
                    // line 62
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "search", array()), "html", null, true));
                    echo "</div>
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
                }
                // line 67
                echo "
\t\t</div>
\t\t";
            }
            // line 69
            echo "\t\t
      </div>
\t  </div>
\t  </div>
      <!-- End Navigation -->
        </div>
    </div>
  </div>
 <!--End Header & Navbar -->
</header>
";
        }
        // line 80
        echo "</div>
<!--End Header Wrap -->";
    }

    public function getTemplateName()
    {
        return "@stem_theme/layout/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 80,  166 => 69,  161 => 67,  153 => 62,  147 => 58,  145 => 57,  142 => 56,  136 => 52,  134 => 51,  131 => 50,  128 => 49,  122 => 47,  120 => 46,  112 => 40,  106 => 37,  103 => 36,  101 => 35,  87 => 23,  85 => 22,  82 => 21,  76 => 17,  70 => 14,  67 => 13,  64 => 12,  58 => 9,  55 => 8,  53 => 7,  48 => 4,  46 => 3,  43 => 2,);
    }

    public function getSource()
    {
        return "{# @stem_theme theme header #}

{% if page.header_top_left or page.header_top_right %}
<div id=\"header-top\" class=\"header-top\">
  <div class=\"container\">
    <div class=\"row\">
      {% if page.header_top_left %}
\t  <div class=\"col-sm-6 header-top-left\">
\t\t\t{{ page.header_top_left }}
      </div>
\t  {% endif %}
\t  {% if page.header_top_right %}
      <div class=\"col-sm-6 header-top-right\">
\t\t\t{{ page.header_top_right }}
      </div>
\t  {% endif %}
    </div>
  </div>
</div>
{% endif %}

{% if page.header or page.search %}
<header id=\"header\" class=\"header main-header\">
<!-- Header and Navbar -->
  <div class=\"navbar navbar-default\">
    <div class=\"container\">
      <div class=\"row\">
      <div class=\"navbar-header col-md-3 nav-head-wrap header-brand\">
        <button type=\"button\" class=\"navbar-toggle\">
          <span class=\"sr-only\">Toggle navigation</span>
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
        </button>
        {% if page.header %}
\t\t<div class=\"header-container\">
          {{ page.header }}
        </div>
\t\t{% endif %}

      </div>
      <!-- Navigation -->
      <div id=\"nav-menu-wrap\" class=\"col-md-9 nav-menu-wrap\">
\t  <div class=\"container-wrap\">
\t  <div class=\"nav-region\">
        {% if page.primary_menu %}
          {{ page.primary_menu }}\t\t  
        {% endif %}
\t\t{% if page.search or sidenav or page.shopping_cart %}
\t\t<div class=\"header-element\">
\t\t\t{% if header_social_icon %}
\t\t\t<div class=\"header-element-item header-element-social\">
\t\t\t\t<button type=\"button\" class=\"header-element-icon social-icon\" data-toggle=\"modal\" data-target=\"#social-modal\"><i class=\"fa fa-share-alt\"></i></button>
\t\t\t</div>
\t\t\t{% endif %}
\t\t\t
\t\t\t{% if page.search %}
\t\t\t\t<div class=\"header-element-item header-element-search\">
\t\t\t\t<div id=\"search\">
\t\t\t\t<span class=\"header-element-icon search-icon search-trigger\"><i class=\"fa fa-search\"></i></span>
\t\t\t\t<div class=\"search-bar\">
\t\t\t\t<div class=\"search-wrap\">{{ page.search }}</div>
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t{% endif %}

\t\t</div>
\t\t{% endif %}\t\t
      </div>
\t  </div>
\t  </div>
      <!-- End Navigation -->
        </div>
    </div>
  </div>
 <!--End Header & Navbar -->
</header>
{% endif %}
</div>
<!--End Header Wrap -->";
    }
}
