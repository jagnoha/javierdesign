<?php

/* themes/paxton/templates/menu--main.html.twig */
class __TwigTemplate_f0717a0ed56900f1ff0fc89366398a279cb163477845bbe60a45abe98d615698 extends Twig_Template
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
        $tags = array("for" => 16, "if" => 20);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('for', 'if'),
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

        // line 10
        echo "
";
        // line 12
        echo "
<div class=\"collapse navbar-collapse\" id=\"main-navigation\">
\t<ul class=\"nav navbar-right navbar-nav\">

\t\t";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 17
            echo "
\t\t\t";
            // line 19
            echo "
\t\t\t";
            // line 20
            if ($this->getAttribute($context["item"], "below", array())) {
                // line 21
                echo "
\t\t\t\t<li  ";
                // line 22
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "attributes", array()), "html", null, true));
                echo " >
\t\t\t\t\t<a href=\"";
                // line 23
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "url", array()), "html", null, true));
                echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" > ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true));
                echo " <b class=\"caret\"></b> </a>

\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t";
                // line 27
                echo "
\t\t\t\t\t\t";
                // line 28
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "below", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 29
                    echo "
\t\t\t\t\t\t\t<li ><a href=\"";
                    // line 30
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "url", array()), "html", null, true));
                    echo "\" ";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "attributes", array()), "html", null, true));
                    echo " > ";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true));
                    echo " </a></li>

\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 33
                echo "\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t";
                // line 36
                echo "
\t\t\t";
            } else {
                // line 38
                echo "
\t\t\t\t";
                // line 40
                echo "
\t\t\t\t<li ";
                // line 41
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "attributes", array()), "html", null, true));
                echo " ><a  href=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "url", array()), "html", null, true));
                echo "\"  ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "attributes", array()), "html", null, true));
                echo " > ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true));
                echo "</a></li>

\t\t\t";
            }
            // line 44
            echo "
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "
\t</ul>
</div>

";
    }

    public function getTemplateName()
    {
        return "themes/paxton/templates/menu--main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 46,  128 => 44,  116 => 41,  113 => 40,  110 => 38,  106 => 36,  102 => 33,  89 => 30,  86 => 29,  82 => 28,  79 => 27,  71 => 23,  67 => 22,  64 => 21,  62 => 20,  59 => 19,  56 => 17,  52 => 16,  46 => 12,  43 => 10,);
    }

    public function getSource()
    {
        return "{#  https://api.drupal.org/api/drupal/core!modules!system!templates!menu.html.twig/8
    menu_name: The machine name of the menu.
    items: A nested list of menu items. Each menu item contains:
      attributes: HTML attributes for the menu item.
      below: The menu item child items.
      title: The menu link title.
      url: The menu link url, instance of \\Drupal\\Core\\Url
      localized_options: Menu link localized options.
#}

{# All menu and submenu items #}

<div class=\"collapse navbar-collapse\" id=\"main-navigation\">
\t<ul class=\"nav navbar-right navbar-nav\">

\t\t{% for item in items %}

\t\t\t{# Menu with submenu #}

\t\t\t{% if item.below %}

\t\t\t\t<li  {{ item.attributes }} >
\t\t\t\t\t<a href=\"{{ item.url }}\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" > {{ item.title }} <b class=\"caret\"></b> </a>

\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t{# Menu -> Submenu #}

\t\t\t\t\t\t{% for item in item.below %}

\t\t\t\t\t\t\t<li ><a href=\"{{ item.url }}\" {{ item.attributes }} > {{ item.title }} </a></li>

\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t{# Menu without submenu #}

\t\t\t{% else %}

\t\t\t\t{# Menu - Link #}

\t\t\t\t<li {{ item.attributes }} ><a  href=\"{{ item.url }}\"  {{ item.attributes }} > {{ item.title }}</a></li>

\t\t\t{% endif %}

\t\t{% endfor %}

\t</ul>
</div>

";
    }
}
