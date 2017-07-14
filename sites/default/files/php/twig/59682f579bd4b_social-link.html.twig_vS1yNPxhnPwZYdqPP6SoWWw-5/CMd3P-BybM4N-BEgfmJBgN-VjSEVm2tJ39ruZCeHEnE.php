<?php

/* @stem_theme/layout/social-link.html.twig */
class __TwigTemplate_f9e20028932a183a517e2cd6c4773bb4676471b0c2d8be988a954ed29b544a4f extends Twig_Template
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
        $tags = array("if" => 2);
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

        // line 1
        echo "\t<ul>
\t\t";
        // line 2
        if ((isset($context["facebook_url"]) ? $context["facebook_url"] : null)) {
            // line 3
            echo "\t\t<li><a href=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["facebook_url"]) ? $context["facebook_url"] : null), "html", null, true));
            echo "\" class=\"facebook\" target=\"_blank\" ><i class=\"fa fa-facebook\"></i></a></li>
\t\t";
        }
        // line 5
        echo "\t\t";
        if ((isset($context["google_plus_url"]) ? $context["google_plus_url"] : null)) {
            // line 6
            echo "\t\t<li><a href=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["google_plus_url"]) ? $context["google_plus_url"] : null), "html", null, true));
            echo "\" class=\"google-plus\" target=\"_blank\" ><i class=\"fa fa-google-plus\"></i></a></li>
\t\t";
        }
        // line 8
        echo "\t\t";
        if ((isset($context["twitter_url"]) ? $context["twitter_url"] : null)) {
            // line 9
            echo "\t\t<li><a href=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["twitter_url"]) ? $context["twitter_url"] : null), "html", null, true));
            echo "\" class=\"twitter\" target=\"_blank\" ><i class=\"fa fa-twitter\"></i></a></li>
\t\t";
        }
        // line 11
        echo "\t\t";
        if ((isset($context["linkedin_url"]) ? $context["linkedin_url"] : null)) {
            // line 12
            echo "\t\t<li><a href=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["linkedin_url"]) ? $context["linkedin_url"] : null), "html", null, true));
            echo "\" class=\"linkedin\" target=\"_blank\"><i class=\"fa fa-linkedin\"></i></a></li>
\t\t";
        }
        // line 14
        echo "\t\t";
        if ((isset($context["instagram_url"]) ? $context["instagram_url"] : null)) {
            // line 15
            echo "\t\t<li><a href=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["instagram_url"]) ? $context["instagram_url"] : null), "html", null, true));
            echo "\" class=\"instagram\" target=\"_blank\" ><i class=\"fa fa-instagram\"></i></a></li>
\t\t";
        }
        // line 17
        echo "\t\t";
        if ((isset($context["pinterest_url"]) ? $context["pinterest_url"] : null)) {
            // line 18
            echo "\t\t<li><a href=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["pinterest_url"]) ? $context["pinterest_url"] : null), "html", null, true));
            echo "\" class=\"pinterest\" target=\"_blank\" ><i class=\"fa fa-pinterest\"></i></a></li>
\t\t";
        }
        // line 20
        echo "\t\t";
        if ((isset($context["youtube_url"]) ? $context["youtube_url"] : null)) {
            // line 21
            echo "\t\t<li><a href=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["youtube_url"]) ? $context["youtube_url"] : null), "html", null, true));
            echo "\" class=\"youtube\" target=\"_blank\" ><i class=\"fa fa-youtube-play\"></i></a></li>
\t\t";
        }
        // line 23
        echo "\t\t";
        if ((isset($context["vimeo_url"]) ? $context["vimeo_url"] : null)) {
            // line 24
            echo "\t\t<li><a href=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["vimeo_url"]) ? $context["vimeo_url"] : null), "html", null, true));
            echo "\" class=\"vimeo\" target=\"_blank\" ><i class=\"fa fa-vimeo-square\"></i></a></li>
\t\t";
        }
        // line 26
        echo "\t\t";
        if ((isset($context["dribbble_url"]) ? $context["dribbble_url"] : null)) {
            // line 27
            echo "\t\t<li><a href=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["dribbble_url"]) ? $context["dribbble_url"] : null), "html", null, true));
            echo "\" class=\"dribbble\" target=\"_blank\" ><i class=\"fa fa-dribbble\"></i></a></li>
\t\t";
        }
        // line 29
        echo "\t\t";
        if ((isset($context["rss_url"]) ? $context["rss_url"] : null)) {
            // line 30
            echo "\t\t<li><a href=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["rss_url"]) ? $context["rss_url"] : null), "html", null, true));
            echo "\" class=\"rss\" target=\"_blank\" ><i class=\"fa fa-rss\"></i></a></li>
\t\t";
        }
        // line 32
        echo "\t</ul>
";
    }

    public function getTemplateName()
    {
        return "@stem_theme/layout/social-link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 32,  129 => 30,  126 => 29,  120 => 27,  117 => 26,  111 => 24,  108 => 23,  102 => 21,  99 => 20,  93 => 18,  90 => 17,  84 => 15,  81 => 14,  75 => 12,  72 => 11,  66 => 9,  63 => 8,  57 => 6,  54 => 5,  48 => 3,  46 => 2,  43 => 1,);
    }

    public function getSource()
    {
        return "\t<ul>
\t\t{% if facebook_url %}
\t\t<li><a href=\"{{ facebook_url }}\" class=\"facebook\" target=\"_blank\" ><i class=\"fa fa-facebook\"></i></a></li>
\t\t{% endif %}
\t\t{% if google_plus_url %}
\t\t<li><a href=\"{{ google_plus_url }}\" class=\"google-plus\" target=\"_blank\" ><i class=\"fa fa-google-plus\"></i></a></li>
\t\t{% endif %}
\t\t{% if twitter_url %}
\t\t<li><a href=\"{{ twitter_url }}\" class=\"twitter\" target=\"_blank\" ><i class=\"fa fa-twitter\"></i></a></li>
\t\t{% endif %}
\t\t{% if linkedin_url %}
\t\t<li><a href=\"{{ linkedin_url }}\" class=\"linkedin\" target=\"_blank\"><i class=\"fa fa-linkedin\"></i></a></li>
\t\t{% endif %}
\t\t{% if instagram_url %}
\t\t<li><a href=\"{{ instagram_url }}\" class=\"instagram\" target=\"_blank\" ><i class=\"fa fa-instagram\"></i></a></li>
\t\t{% endif %}
\t\t{% if pinterest_url %}
\t\t<li><a href=\"{{ pinterest_url }}\" class=\"pinterest\" target=\"_blank\" ><i class=\"fa fa-pinterest\"></i></a></li>
\t\t{% endif %}
\t\t{% if youtube_url %}
\t\t<li><a href=\"{{ youtube_url }}\" class=\"youtube\" target=\"_blank\" ><i class=\"fa fa-youtube-play\"></i></a></li>
\t\t{% endif %}
\t\t{% if vimeo_url %}
\t\t<li><a href=\"{{ vimeo_url }}\" class=\"vimeo\" target=\"_blank\" ><i class=\"fa fa-vimeo-square\"></i></a></li>
\t\t{% endif %}
\t\t{% if dribbble_url %}
\t\t<li><a href=\"{{ dribbble_url }}\" class=\"dribbble\" target=\"_blank\" ><i class=\"fa fa-dribbble\"></i></a></li>
\t\t{% endif %}
\t\t{% if rss_url %}
\t\t<li><a href=\"{{ rss_url }}\" class=\"rss\" target=\"_blank\" ><i class=\"fa fa-rss\"></i></a></li>
\t\t{% endif %}
\t</ul>
";
    }
}
