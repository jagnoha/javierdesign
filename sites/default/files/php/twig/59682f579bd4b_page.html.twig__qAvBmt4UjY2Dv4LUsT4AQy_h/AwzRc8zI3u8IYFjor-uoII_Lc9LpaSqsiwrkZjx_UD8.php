<?php

/* themes/stem_theme/templates/layout/page.html.twig */
class __TwigTemplate_7d7d6495337adea43596324071cd73d5f9277c62c7f3a366304b858e4a5b4a56 extends Twig_Template
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
        $tags = array("include" => 50, "if" => 53);
        $filters = array("render" => 81);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('include', 'if'),
                array('render'),
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

        // line 46
        echo "<div id=\"wrapper\" class=\"wrapper\">
<div id=\"page\" class=\"";
        // line 47
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["header_theme"]) ? $context["header_theme"] : null), "html", null, true));
        echo " wide-layout\">
<div id=\"content-wrap\" class=\"clearfix\"> 
\t<!-- Header -->
\t";
        // line 50
        $this->loadTemplate("@stem_theme/layout/header.html.twig", "themes/stem_theme/templates/layout/page.html.twig", 50)->display($context);
        // line 51
        echo "\t<!-- End Header -->
\t
\t";
        // line 53
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "slider", array())) {
            // line 54
            echo "\t<!-- Slider -->
\t<div id=\"slider\" class=\"clearfix\">        
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t";
            // line 58
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "slider", array()), "html", null, true));
            echo "
\t\t\t</div>
\t\t</div>  
\t</div>
\t<!-- End Slider -->
\t";
        }
        // line 64
        echo "
";
        // line 65
        if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "page_title", array()) &&  !(isset($context["is_front"]) ? $context["is_front"] : null))) {
            // line 66
            echo "<!-- Page Title -->
  <div id=\"page-title\" class=\"page-title title-parallax title-left title-large\">
      <div class=\"container\">
        ";
            // line 69
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "page_title", array()), "html", null, true));
            echo "\t
\t\t";
            // line 70
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "breadcrumb", array()), "html", null, true));
            echo "
      </div>
  </div>
  <!-- End Page Title -->
";
        }
        // line 75
        echo "
";
        // line 76
        if ((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()))) {
            // line 77
            echo "<!-- layout -->
<div id=\"page-wrapper\">
  <div class=\"container\">\t
    <div class=\"row layout\">
      ";
            // line 81
            if ($this->env->getExtension('drupal_core')->renderVar($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()))) {
                // line 82
                echo "\t  <!--- Start Left SideBar -->
        <div class=\"sidebar\" >
          <div class = ";
                // line 84
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["sidebarfirst"]) ? $context["sidebarfirst"] : null), "html", null, true));
                echo " >
            ";
                // line 85
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()), "html", null, true));
                echo "
          </div>
        </div>
      <!---End Right SideBar -->
\t  ";
            }
            // line 90
            echo "
      ";
            // line 91
            if ($this->env->getExtension('drupal_core')->renderVar($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()))) {
                // line 92
                echo "\t  <!--- Start content -->
        <div class=\"content_layout\">
          <div class=";
                // line 94
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["contentlayout"]) ? $context["contentlayout"] : null), "html", null, true));
                echo ">
            ";
                // line 95
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
                echo "
          </div>
        </div>
      <!---End content -->
\t  ";
            }
            // line 100
            echo "
      ";
            // line 101
            if ($this->env->getExtension('drupal_core')->renderVar($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()))) {
                // line 102
                echo "\t  <!--- Start Right SideBar -->
        <div class=\"sidebar\">
          <div class=";
                // line 104
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["sidebarsecond"]) ? $context["sidebarsecond"] : null), "html", null, true));
                echo ">
            ";
                // line 105
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()), "html", null, true));
                echo "
          </div>
        </div>
      <!---End Right SideBar -->
\t  ";
            }
            // line 110
            echo "    </div>
  </div>
</div>
<!-- End layout -->
";
        }
        // line 115
        echo "
";
        // line 116
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_wide", array())) {
            // line 117
            echo "<!-- Start content wide -->
<div id=\"content_wide\" class=\"content-wide\">        
    ";
            // line 119
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_wide", array()), "html", null, true));
            echo "
</div>
<!-- End content wide -->
";
        }
        // line 123
        echo "</div>

";
        // line 125
        $this->loadTemplate("@stem_theme/layout/footer.html.twig", "themes/stem_theme/templates/layout/page.html.twig", 125)->display($context);
        // line 126
        echo "
</div>
</div>
";
        // line 129
        if ((isset($context["preloader"]) ? $context["preloader"] : null)) {
            // line 130
            echo "<div class=\"preloader\">
    <div class=\"preloader_image\"></div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/stem_theme/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 130,  202 => 129,  197 => 126,  195 => 125,  191 => 123,  184 => 119,  180 => 117,  178 => 116,  175 => 115,  168 => 110,  160 => 105,  156 => 104,  152 => 102,  150 => 101,  147 => 100,  139 => 95,  135 => 94,  131 => 92,  129 => 91,  126 => 90,  118 => 85,  114 => 84,  110 => 82,  108 => 81,  102 => 77,  100 => 76,  97 => 75,  89 => 70,  85 => 69,  80 => 66,  78 => 65,  75 => 64,  66 => 58,  60 => 54,  58 => 53,  54 => 51,  52 => 50,  46 => 47,  43 => 46,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Theme override to display a single page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.html.twig template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - base_path: The base URL path of the Drupal installation. Will usually be
 *   \"/\" unless you have installed Drupal in a sub-directory.
 * - is_front: A flag indicating if the current page is the front page.
 * - logged_in: A flag indicating if the user is registered and signed in.
 * - is_admin: A flag indicating if the user has permission to access
 *   administration pages.
 *
 * Site identity:
 * - front_page: The URL of the front page. Use this instead of base_path when
 *   linking to the front page. This includes the language domain or prefix.
 *
 * Page content (in order of occurrence in the default page.html.twig):
 * - messages: Status and error messages. Should be displayed prominently.
 * - node: Fully loaded node, if there is an automatically-loaded node
 *   associated with the page and the node ID is the second argument in the
 *   page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - page.header: Items for the header region.
 * - page.primary_menu: Items for the primary menu region.
 * - page.secondary_menu: Items for the secondary menu region.
 * - page.highlighted: Items for the highlighted content region.
 * - page.help: Dynamic help text, mostly for admin pages.
 * - page.content: The main content of the current page.
 * - page.sidebar_first: Items for the first sidebar.
 * - page.sidebar_second: Items for the second sidebar.
 * - page.footer: Items for the footer region.
 * - page.breadcrumb: Items for the breadcrumb region.
 *
 * @see template_preprocess_page()
 * @see html.html.twig
 */
#}
<div id=\"wrapper\" class=\"wrapper\">
<div id=\"page\" class=\"{{ header_theme }} wide-layout\">
<div id=\"content-wrap\" class=\"clearfix\"> 
\t<!-- Header -->
\t{% include '@stem_theme/layout/header.html.twig' %}
\t<!-- End Header -->
\t
\t{% if page.slider %}
\t<!-- Slider -->
\t<div id=\"slider\" class=\"clearfix\">        
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t{{ page.slider }}
\t\t\t</div>
\t\t</div>  
\t</div>
\t<!-- End Slider -->
\t{% endif %}

{%  if page.page_title and not is_front %}
<!-- Page Title -->
  <div id=\"page-title\" class=\"page-title title-parallax title-left title-large\">
      <div class=\"container\">
        {{ page.page_title }}\t
\t\t{{ page.breadcrumb }}
      </div>
  </div>
  <!-- End Page Title -->
{% endif %}

{% if page.content or page.sidebar_first or page.sidebar_second %}
<!-- layout -->
<div id=\"page-wrapper\">
  <div class=\"container\">\t
    <div class=\"row layout\">
      {% if page.sidebar_first | render %}
\t  <!--- Start Left SideBar -->
        <div class=\"sidebar\" >
          <div class = {{sidebarfirst}} >
            {{ page.sidebar_first }}
          </div>
        </div>
      <!---End Right SideBar -->
\t  {% endif %}

      {% if page.content | render %}
\t  <!--- Start content -->
        <div class=\"content_layout\">
          <div class={{contentlayout}}>
            {{ page.content }}
          </div>
        </div>
      <!---End content -->
\t  {% endif %}

      {% if page.sidebar_second | render %}
\t  <!--- Start Right SideBar -->
        <div class=\"sidebar\">
          <div class={{sidebarsecond}}>
            {{ page.sidebar_second }}
          </div>
        </div>
      <!---End Right SideBar -->
\t  {% endif %}
    </div>
  </div>
</div>
<!-- End layout -->
{% endif %}

{% if page.content_wide %}
<!-- Start content wide -->
<div id=\"content_wide\" class=\"content-wide\">        
    {{ page.content_wide }}
</div>
<!-- End content wide -->
{% endif %}
</div>

{% include '@stem_theme/layout/footer.html.twig' %}

</div>
</div>
{% if preloader %}
<div class=\"preloader\">
    <div class=\"preloader_image\"></div>
</div>
{% endif %}";
    }
}
