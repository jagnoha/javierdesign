<?php

/* @stem_theme/layout/footer.html.twig */
class __TwigTemplate_9793ddba073e838f1c3cee3f91f89d742a67d2ed91b96f73f882eb9333f8185e extends Twig_Template
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
        $tags = array("if" => 5, "include" => 63);
        $filters = array("t" => 54);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'include'),
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

        // line 2
        echo "<div id=\"footer\" class=\"footer ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["footer_style"]) ? $context["footer_style"] : null), "html", null, true));
        echo " ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["footer_theme"]) ? $context["footer_theme"] : null), "html", null, true));
        echo "\">

\t<!-- start: Footer -->
\t";
        // line 5
        if (((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_second", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_third", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_forth", array()))) {
            // line 6
            echo "\t  <div class=\"footer-widget\">
\t\t<div class=\"container\">
\t\t\t";
            // line 8
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array())) {
                // line 9
                echo "\t\t\t<!-- Start Footer First Region -->
\t\t\t<div class=\"";
                // line 10
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["footer_class"]) ? $context["footer_class"] : null), "html", null, true));
                echo " footer-widget-section\">
\t\t\t\t";
                // line 11
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array()), "html", null, true));
                echo "
\t\t\t</div>
\t\t\t<!-- End Footer First Region -->
\t\t\t";
            }
            // line 15
            echo "
\t\t\t";
            // line 16
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_second", array())) {
                // line 17
                echo "\t\t\t<!-- Start Footer Second Region -->
\t\t\t<div class=\"";
                // line 18
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["footer_class"]) ? $context["footer_class"] : null), "html", null, true));
                echo " footer-widget-section\">
\t\t\t\t";
                // line 19
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_second", array()), "html", null, true));
                echo "
\t\t\t</div>
\t\t\t<!-- End Footer Second Region -->
\t\t\t";
            }
            // line 23
            echo "
\t\t\t";
            // line 24
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_third", array())) {
                // line 25
                echo "\t\t\t<!-- Start Footer Third Region -->
\t\t\t<div class=\"";
                // line 26
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["footer_class"]) ? $context["footer_class"] : null), "html", null, true));
                echo " footer-widget-section\">
\t\t\t\t";
                // line 27
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_third", array()), "html", null, true));
                echo "
\t\t\t</div>
\t\t\t<!-- End Footer Third Region -->
\t\t\t";
            }
            // line 31
            echo "\t\t\t
\t\t\t";
            // line 32
            if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_forth", array()) || (isset($context["footer_social_icon"]) ? $context["footer_social_icon"] : null))) {
                // line 33
                echo "\t\t\t<!-- Start Footer Forth Region -->
\t\t\t<div class=\"";
                // line 34
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["footer_class"]) ? $context["footer_class"] : null), "html", null, true));
                echo " footer-widget-section\">
\t\t\t\t";
                // line 35
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_forth", array()), "html", null, true));
                echo "
\t\t\t</div>
\t\t\t<!-- End Footer Forth Region -->
\t\t\t";
            }
            // line 39
            echo "\t\t</div>
\t  </div>
\t";
        }
        // line 42
        echo "\t<!--End Footer -->

\t<div class=\"footer-bottom\">
";
        // line 45
        if (((isset($context["footer_style"]) ? $context["footer_style"] : null) == "footer1")) {
            // line 46
            echo "
\t  <div class=\"container\">
\t\t<div class=\"row\">
\t\t
\t\t";
            // line 50
            if ((isset($context["copyright_text"]) ? $context["copyright_text"] : null)) {
                // line 51
                echo "\t\t  <!-- Copyright -->
\t\t  <div class=\"col-md-6 col-sm-6 col-xs-12 text-left\">
\t\t\t<div class=\"copyright\">
\t\t\t";
                // line 54
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Copyright ©")));
                echo " ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["copyright_date"]) ? $context["copyright_date"] : null), "html", null, true));
                echo " ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_name"]) ? $context["site_name"] : null), "html", null, true));
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("· All rights reserved")));
                echo "
\t\t\t</div>
\t\t  </div>
\t\t  <!-- End Copyright -->

\t\t  <div class=\"col-md-6 col-sm-6 col-xs-12 text-right\">
\t\t\t";
                // line 60
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()), "html", null, true));
                echo "
\t\t\t\t";
                // line 61
                if ((isset($context["footer_social_icon"]) ? $context["footer_social_icon"] : null)) {
                    // line 62
                    echo "\t\t\t\t  <div class=\"social-media ";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["footer_social_style"]) ? $context["footer_social_style"] : null), "html", null, true));
                    echo " ";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["footer_social_shape"]) ? $context["footer_social_shape"] : null), "html", null, true));
                    echo "\">
\t\t\t\t  ";
                    // line 63
                    $this->loadTemplate("@stem_theme/layout/social-link.html.twig", "@stem_theme/layout/footer.html.twig", 63)->display($context);
                    // line 64
                    echo "\t\t\t\t  </div>
\t\t\t\t";
                }
                // line 66
                echo "\t\t  </div>
\t\t";
            } else {
                // line 68
                echo "\t\t
\t\t  <div class=\"col-md-12\">
\t\t\t";
                // line 70
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()), "html", null, true));
                echo "
\t\t\t
\t\t\t";
                // line 72
                if ((isset($context["footer_social_icon"]) ? $context["footer_social_icon"] : null)) {
                    // line 73
                    echo "\t\t\t\t<div class=\"social-media ";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["footer_social_style"]) ? $context["footer_social_style"] : null), "html", null, true));
                    echo " ";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["footer_social_shape"]) ? $context["footer_social_shape"] : null), "html", null, true));
                    echo "\">
\t\t\t\t ";
                    // line 74
                    $this->loadTemplate("@stem_theme/layout/social-link.html.twig", "@stem_theme/layout/footer.html.twig", 74)->display($context);
                    // line 75
                    echo "\t\t\t\t</div>
\t\t\t";
                }
                // line 77
                echo "\t\t  </div>\t
\t\t
\t\t";
            }
            // line 80
            echo "\t\t</div>
\t  </div>

";
        } elseif ((        // line 83
(isset($context["footer_style"]) ? $context["footer_style"] : null) == "footer2")) {
            // line 84
            echo "
\t<div class=\"text-center\">
\t";
            // line 86
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()), "html", null, true));
            echo "
\t</div>

    ";
            // line 89
            if ((isset($context["footer_social_icon"]) ? $context["footer_social_icon"] : null)) {
                // line 90
                echo "\t\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t<div class=\"col-sm-12\">
            <div class=\"social-media\">
\t\t    ";
                // line 94
                $this->loadTemplate("@stem_theme/layout/social-link.html.twig", "@stem_theme/layout/footer.html.twig", 94)->display($context);
                // line 95
                echo "\t\t    </div>
\t\t</div>
\t\t</div>
\t\t</div>
    ";
            }
            // line 100
            echo "\t
\t";
            // line 101
            if ((isset($context["copyright_text"]) ? $context["copyright_text"] : null)) {
                // line 102
                echo "      <!-- Copyright -->
\t\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t<div class=\"col-sm-12\">
\t\t<div class=\"copyright\">
\t\t\t<p class=\"credit-link\">";
                // line 107
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Copyright ©")));
                echo " ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["copyright_date"]) ? $context["copyright_date"] : null), "html", null, true));
                echo " ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_name"]) ? $context["site_name"] : null), "html", null, true));
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("· All rights reserved")));
                echo "</p>      
\t\t</div>
\t\t</div>
\t\t</div>
\t\t</div>
      <!-- End Copyright -->\t
\t  ";
            }
            // line 114
            echo "\t  
";
        }
        // line 116
        echo "\t</div>

";
        // line 118
        if ((isset($context["scrolltop"]) ? $context["scrolltop"] : null)) {
            // line 119
            echo "\t<div class=\"back-to-top\"><span class=\"glyphicon glyphicon-chevron-up\"></span></div>
";
        }
        // line 121
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "@stem_theme/layout/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  297 => 121,  293 => 119,  291 => 118,  287 => 116,  283 => 114,  268 => 107,  261 => 102,  259 => 101,  256 => 100,  249 => 95,  247 => 94,  241 => 90,  239 => 89,  233 => 86,  229 => 84,  227 => 83,  222 => 80,  217 => 77,  213 => 75,  211 => 74,  204 => 73,  202 => 72,  197 => 70,  193 => 68,  189 => 66,  185 => 64,  183 => 63,  176 => 62,  174 => 61,  170 => 60,  156 => 54,  151 => 51,  149 => 50,  143 => 46,  141 => 45,  136 => 42,  131 => 39,  124 => 35,  120 => 34,  117 => 33,  115 => 32,  112 => 31,  105 => 27,  101 => 26,  98 => 25,  96 => 24,  93 => 23,  86 => 19,  82 => 18,  79 => 17,  77 => 16,  74 => 15,  67 => 11,  63 => 10,  60 => 9,  58 => 8,  54 => 6,  52 => 5,  43 => 2,);
    }

    public function getSource()
    {
        return "{# @file stem_theme footer #}
<div id=\"footer\" class=\"footer {{ footer_style }} {{ footer_theme }}\">

\t<!-- start: Footer -->
\t{% if page.footer_first or page.footer_second or page.footer_third or page.footer_forth %}
\t  <div class=\"footer-widget\">
\t\t<div class=\"container\">
\t\t\t{% if page.footer_first %}
\t\t\t<!-- Start Footer First Region -->
\t\t\t<div class=\"{{ footer_class }} footer-widget-section\">
\t\t\t\t{{ page.footer_first }}
\t\t\t</div>
\t\t\t<!-- End Footer First Region -->
\t\t\t{% endif %}

\t\t\t{% if page.footer_second %}
\t\t\t<!-- Start Footer Second Region -->
\t\t\t<div class=\"{{ footer_class }} footer-widget-section\">
\t\t\t\t{{ page.footer_second }}
\t\t\t</div>
\t\t\t<!-- End Footer Second Region -->
\t\t\t{% endif %}

\t\t\t{% if page.footer_third %}
\t\t\t<!-- Start Footer Third Region -->
\t\t\t<div class=\"{{ footer_class }} footer-widget-section\">
\t\t\t\t{{ page.footer_third }}
\t\t\t</div>
\t\t\t<!-- End Footer Third Region -->
\t\t\t{% endif %}
\t\t\t
\t\t\t{% if page.footer_forth or footer_social_icon %}
\t\t\t<!-- Start Footer Forth Region -->
\t\t\t<div class=\"{{ footer_class }} footer-widget-section\">
\t\t\t\t{{ page.footer_forth }}
\t\t\t</div>
\t\t\t<!-- End Footer Forth Region -->
\t\t\t{% endif %}
\t\t</div>
\t  </div>
\t{% endif %}
\t<!--End Footer -->

\t<div class=\"footer-bottom\">
{% if footer_style == 'footer1' %}

\t  <div class=\"container\">
\t\t<div class=\"row\">
\t\t
\t\t{% if copyright_text %}
\t\t  <!-- Copyright -->
\t\t  <div class=\"col-md-6 col-sm-6 col-xs-12 text-left\">
\t\t\t<div class=\"copyright\">
\t\t\t{{ 'Copyright ©' | t }} {{ copyright_date }} {{ site_name }}{{ '· All rights reserved' | t }}
\t\t\t</div>
\t\t  </div>
\t\t  <!-- End Copyright -->

\t\t  <div class=\"col-md-6 col-sm-6 col-xs-12 text-right\">
\t\t\t{{ page.footer }}
\t\t\t\t{% if footer_social_icon %}
\t\t\t\t  <div class=\"social-media {{ footer_social_style }} {{ footer_social_shape }}\">
\t\t\t\t  {% include '@stem_theme/layout/social-link.html.twig' %}
\t\t\t\t  </div>
\t\t\t\t{% endif %}
\t\t  </div>
\t\t{% else %}
\t\t
\t\t  <div class=\"col-md-12\">
\t\t\t{{ page.footer }}
\t\t\t
\t\t\t{% if footer_social_icon %}
\t\t\t\t<div class=\"social-media {{ footer_social_style }} {{ footer_social_shape }}\">
\t\t\t\t {% include '@stem_theme/layout/social-link.html.twig' %}
\t\t\t\t</div>
\t\t\t{% endif %}
\t\t  </div>\t
\t\t
\t\t{% endif %}
\t\t</div>
\t  </div>

{% elseif footer_style == 'footer2' %}

\t<div class=\"text-center\">
\t{{ page.footer }}
\t</div>

    {% if footer_social_icon %}
\t\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t<div class=\"col-sm-12\">
            <div class=\"social-media\">
\t\t    {% include '@stem_theme/layout/social-link.html.twig' %}
\t\t    </div>
\t\t</div>
\t\t</div>
\t\t</div>
    {% endif %}
\t
\t{% if copyright_text %}
      <!-- Copyright -->
\t\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t<div class=\"col-sm-12\">
\t\t<div class=\"copyright\">
\t\t\t<p class=\"credit-link\">{{ 'Copyright ©' | t }} {{ copyright_date }} {{ site_name }}{{ '· All rights reserved' | t }}</p>      
\t\t</div>
\t\t</div>
\t\t</div>
\t\t</div>
      <!-- End Copyright -->\t
\t  {% endif %}
\t  
{% endif %}
\t</div>

{% if scrolltop %}
\t<div class=\"back-to-top\"><span class=\"glyphicon glyphicon-chevron-up\"></span></div>
{% endif %}
</div>";
    }
}
