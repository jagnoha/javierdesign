<?php

/* themes/stem_theme/templates/user/user.html.twig */
class __TwigTemplate_5d3f463017a550fc87a1fa59434ddf85fbbbd76e5c8c3c92f0c73179446fe032 extends Twig_Template
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
        $tags = array("if" => 21);
        $filters = array("without" => 33);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array('without'),
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

        // line 19
        echo "<div";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => "profile"), "method"), "html", null, true));
        echo ">

  ";
        // line 21
        if (((isset($context["content"]) ? $context["content"] : null) && (((isset($context["view_mode"]) ? $context["view_mode"] : null) == "default") || ((isset($context["view_mode"]) ? $context["view_mode"] : null) == "full")))) {
            // line 22
            echo "    <div class=\"user-header\">
      <div class=\"inner\">
        <div class=\"row\">
          <div class=\"col-md-4\">
              <div class=\"user-profile-picture\">
                ";
            // line 27
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "user_picture", array()), "html", null, true));
            echo "
              </div>
          </div>
          <div class=\"col-md-8\">
\t\t    <h2 class=\"user-name\">";
            // line 31
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_name", array()), "html", null, true));
            echo " @";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true));
            echo "</h2>
\t\t\t<div class=\"user-content\">
            ";
            // line 33
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_without((isset($context["content"]) ? $context["content"] : null), "user_picture", "field_name", "field_facebook", "field_twitter", "field_linkedin", "field_youtube"), "html", null, true));
            echo "
\t\t\t
                ";
            // line 35
            if (((($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_facebook", array()) || $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_twitter", array())) || $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_linkedin", array())) || $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_youtube", array()))) {
                // line 36
                echo "                  <div class=\"team-social user-social-links\">
                    <a href=\"";
                // line 37
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_facebook", array()), 0, array()), "#url", array(), "array"), "html", null, true));
                echo "\"><i class=\"fa fa-facebook\"></i></a>
\t\t\t\t\t<a href=\"";
                // line 38
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_twitter", array()), 0, array()), "#url", array(), "array"), "html", null, true));
                echo "\"><i class=\"fa fa-twitter\"></i></a>
\t\t\t\t\t<a href=\"";
                // line 39
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_linkedin", array()), 0, array()), "#url", array(), "array"), "html", null, true));
                echo "\"><i class=\"fa fa-linkedin\"></i></a>
\t\t\t\t\t<a href=\"";
                // line 40
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_youtube", array()), 0, array()), "#url", array(), "array"), "html", null, true));
                echo "\"><i class=\"fa fa-youtube\"></i></a>
                  </div>
                ";
            }
            // line 43
            echo "          </div>
\t\t  </div>
        </div>
      </div>

    </div>

  ";
        } else {
            // line 51
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true));
        }
        // line 53
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "themes/stem_theme/templates/user/user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 53,  110 => 51,  100 => 43,  94 => 40,  90 => 39,  86 => 38,  82 => 37,  79 => 36,  77 => 35,  72 => 33,  65 => 31,  58 => 27,  51 => 22,  49 => 21,  43 => 19,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Theme override to present all user data.
 *
 * This template is used when viewing a registered user's page,
 * e.g., example.com/user/123. 123 being the user's ID.
 *
 * Available variables:
 * - content: A list of content items. Use 'content' to print all content, or
 *   print a subset such as 'content.field_example'. Fields attached to a user
 *   such as 'user_picture' are available as 'content.user_picture'.
 * - attributes: HTML attributes for the container element.
 * - user: A Drupal User entity.
 *
 * @see template_preprocess_user()
 */
#}
<div{{ attributes.addClass('profile') }}>

  {% if content and (view_mode == 'default' or view_mode == 'full') %}
    <div class=\"user-header\">
      <div class=\"inner\">
        <div class=\"row\">
          <div class=\"col-md-4\">
              <div class=\"user-profile-picture\">
                {{ content.user_picture }}
              </div>
          </div>
          <div class=\"col-md-8\">
\t\t    <h2 class=\"user-name\">{{ content.field_name }} @{{ name }}</h2>
\t\t\t<div class=\"user-content\">
            {{ content|without('user_picture', 'field_name', 'field_facebook', 'field_twitter', 'field_linkedin', 'field_youtube') }}
\t\t\t
                {% if content.field_facebook or content.field_twitter or content.field_linkedin or content.field_youtube %}
                  <div class=\"team-social user-social-links\">
                    <a href=\"{{ content.field_facebook.0['#url'] }}\"><i class=\"fa fa-facebook\"></i></a>
\t\t\t\t\t<a href=\"{{ content.field_twitter.0['#url'] }}\"><i class=\"fa fa-twitter\"></i></a>
\t\t\t\t\t<a href=\"{{ content.field_linkedin.0['#url'] }}\"><i class=\"fa fa-linkedin\"></i></a>
\t\t\t\t\t<a href=\"{{ content.field_youtube.0['#url'] }}\"><i class=\"fa fa-youtube\"></i></a>
                  </div>
                {% endif %}
          </div>
\t\t  </div>
        </div>
      </div>

    </div>

  {% else %}
    {{- content -}}
  {% endif %}
</div>
";
    }
}
