<?php

/* themes/paxton/templates/page.html.twig */
class __TwigTemplate_948e1b96a5186aa47d001d73c07812d5e57ecd9f393de4d5587e81ba6b664679 extends Twig_Template
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
        $tags = array("if" => 77, "for" => 114);
        $filters = array("raw" => 115, "t" => 272);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'for'),
                array('raw', 't'),
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

        // line 60
        echo "

<!--start: Header and Navbar -->

<nav class=\"navbar navbar-default\" role=\"navigation\">
  <!--start: Container -->
  <div class=\"container\">
    <div class=\"row\">
     <!--- Start : Header -->
    <!-- Sitename and toggle get grouped for better mobile display -->
    <div class=\"navbar-header col-md-3\">
      <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#main-navigation\">
        <span class=\"sr-only\">Toggle navigation</span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
      </button>
      ";
        // line 77
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array())) {
            // line 78
            echo "        ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true));
            echo "
      ";
        }
        // line 80
        echo "    </div>
    <!--- End :Header -->

    <!--- Start: Navigation -->
    <div class=\"col-md-9\">
    ";
        // line 85
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "primary_menu", array())) {
            // line 86
            echo "      ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "primary_menu", array()), "html", null, true));
            echo "
    ";
        }
        // line 88
        echo "    <!---End: Navigation -->
    </div>
    </div>
  </div>
  <!--/.container-->
</nav>
<!--end: Header and Navbar -->

<!--- Start: Page Title -->
";
        // line 97
        if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "page_title", array()) &&  !(isset($context["is_front"]) ? $context["is_front"] : null))) {
            // line 98
            echo "
  <div id=\"page-title\">
    <div id=\"page-title-inner\">
      <!-- start: Container -->
      <div class=\"container\">
        ";
            // line 103
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "page_title", array()), "html", null, true));
            echo "
      </div>
    </div>
  </div>
";
        }
        // line 108
        echo "<!--- End:Page Title -->

<!-- start: Slider -->
";
        // line 111
        if ((isset($context["is_front"]) ? $context["is_front"] : null)) {
            // line 112
            echo "  <div class=\"slider-wrapper\">
    <div id=\"da-slider\" class=\"da-slider\">
      ";
            // line 114
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["slider_content"]) ? $context["slider_content"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["slider_contents"]) {
                // line 115
                echo "        ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($context["slider_contents"]));
                echo "
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slider_contents'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 117
            echo "      <nav class=\"da-arrows\">
        <span class=\"da-arrows-prev\"></span>
        <span class=\"da-arrows-next\"></span>
      </nav>
    </div>
  </div>
";
        }
        // line 124
        echo "<!-- end: Slider -->

<!--- Start:layout -->
<div id=\"wrapper\">
  <!-- start: Container -->
  <div class=\"container\">
    <!---Start:highlighted -->
      ";
        // line 131
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array())) {
            // line 132
            echo "        <div class=\"jumbotron\">
          ";
            // line 133
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array()), "html", null, true));
            echo "
        </div>
      ";
        }
        // line 136
        echo "    <!---End:highlighted -->

    <!---Start:content top -->
      ";
        // line 139
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_top", array())) {
            // line 140
            echo "        <div class=\"row\">
          ";
            // line 141
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_top", array()), "html", null, true));
            echo "
        </div>
      ";
        }
        // line 144
        echo "    <!---End:Content top -->
    <!-- start: Row -->
    <!--start:content -->
    <div class=\"row layout\">
      <!-- Start:Left SideBar -->
      ";
        // line 149
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
            // line 150
            echo "        <div class=\"sidebar\" >
          <div class = ";
            // line 151
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["sidebarfirst"]) ? $context["sidebarfirst"] : null), "html", null, true));
            echo " >
            ";
            // line 152
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()), "html", null, true));
            echo "
          </div>
        </div>
      ";
        }
        // line 156
        echo "      <!-- End:Right SideBar -->

      <!-- Start:content -->
      ";
        // line 159
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array())) {
            // line 160
            echo "        <div class = \" content_layout \">
          <div class= ";
            // line 161
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["contentlayout"]) ? $context["contentlayout"] : null), "html", null, true));
            echo ">
            ";
            // line 162
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "breadcrumb", array()), "html", null, true));
            echo "
            ";
            // line 163
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
            echo "
          </div>
        </div>
      ";
        }
        // line 167
        echo "      <!-- End:content -->

      <!-- Start:Right SideBar -->
      ";
        // line 170
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())) {
            // line 171
            echo "        <div class=\"sidebar\">
          <div class=";
            // line 172
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["sidebarsecond"]) ? $context["sidebarsecond"] : null), "html", null, true));
            echo ">
            ";
            // line 173
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()), "html", null, true));
            echo "
          </div>
        </div>
      ";
        }
        // line 177
        echo "      <!-- End:Right SideBar -->
    </div>
    <!---End:Content -->
    <!---Start:content bottom -->
    ";
        // line 181
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_bottom", array())) {
            // line 182
            echo "      <div class=\"row\">
        ";
            // line 183
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_bottom", array()), "html", null, true));
            echo "
      </div>
    ";
        }
        // line 186
        echo "    <!-- End:Content Bottom -->
  </div>
</div>
<!--- End:layout -->

<!-- start: Footer Menu -->
";
        // line 192
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_menu", array())) {
            // line 193
            echo "  <div id=\"footer-menu\" class=\"hidden-sm hidden-xs\">
    <!-- start: Container -->
    <div class=\"container\">
      <!-- start: Row -->
      <div class=\"row\">
        <!-- start: Footer Menu Logo -->
        <div class=\"col-sm-2\">
          <div id=\"footer-menu-logo\">
            <a class=\"brand\" href=";
            // line 201
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["front_page"]) ? $context["front_page"] : null), "html", null, true));
            echo " > ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_name"]) ? $context["site_name"] : null), "html", null, true));
            echo ". </a>
          </div>
        </div>
        <!-- end: Footer Menu Logo -->
        <!-- start: Footer Menu Links-->
        <div class=\"col-sm-9\">
          <div id=\"footer-menu-links\">
            ";
            // line 208
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_menu", array()), "html", null, true));
            echo "
          </div>
        </div>
        <!-- end: Footer Menu Links-->
        <!-- start: Footer Menu Back To Top -->
        <div class=\"col-sm-1\">
          <div id=\"footer-menu-back-to-top\">
            <a href=\"#\"></a>
          </div>
        </div>
        <!-- end: Footer Menu Back To Top -->
      </div>
      <!-- end: Row -->
    </div>
    <!-- end: Container  -->
  </div>
";
        }
        // line 225
        echo "  <!-- end: Footer Menu -->

<!-- start: Footer -->
";
        // line 228
        if ((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_second", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_third", array()))) {
            // line 229
            echo "  <div id=\"footer\">
    <!-- start: Container -->
    <div class=\"container\">
      <!-- start: Row -->
      <div class=\"row\">
        <!--- Start:Footer First Region -->
        <div class = ";
            // line 235
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["footer_class"]) ? $context["footer_class"] : null), "html", null, true));
            echo ">
          ";
            // line 236
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array())) {
                // line 237
                echo "            ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array()), "html", null, true));
                echo "
          ";
            }
            // line 239
            echo "        </div>
        <!--- End :Footer First Region -->
        <!--- Start:Footer Second Region -->
        <div class = ";
            // line 242
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["footer_class"]) ? $context["footer_class"] : null), "html", null, true));
            echo ">
          ";
            // line 243
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_second", array())) {
                // line 244
                echo "            ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_second", array()), "html", null, true));
                echo "
          ";
            }
            // line 246
            echo "        </div>
        <!--- End:Footer Second Region -->
        <!--- Start:Footer third Region -->
        <div class = ";
            // line 249
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["footer_third_class"]) ? $context["footer_third_class"] : null), "html", null, true));
            echo ">
          ";
            // line 250
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_third", array())) {
                // line 251
                echo "            ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_third", array()), "html", null, true));
                echo "
          ";
            }
            // line 253
            echo "        </div>
        <!--- End:Footer Third Region -->
      </div>
    </div>
  </div>

";
        }
        // line 260
        echo "
<!---End :Footer -->

<!--- Start:Footer Botoom -->
<div id=\"copyright\">
  <!-- start: Container -->
  <div class=\"container\">
    <div class=\"col-sm-12\">
      ";
        // line 268
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_bottom", array())) {
            // line 269
            echo "\t";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_bottom", array()), "html", null, true));
            echo "
      ";
        }
        // line 271
        echo "      <div class=\"clearfix\"></div>
      <div class=\"credited pull-left\"><p class=\"text-center\">";
        // line 272
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Paxton ported to drupal by")));
        echo " <a href=\"http://dropthemes.in\" target=\"_blank\">DropThemes.in</a></p></div>
      ";
        // line 273
        if ((isset($context["show_social_icons"]) ? $context["show_social_icons"] : null)) {
            // line 274
            echo "\t<div class=\"social pull-right\">
\t  <a href=\"";
            // line 275
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["facebook_url"]) ? $context["facebook_url"] : null), "html", null, true));
            echo "\"  class=\"bblue\" target=\"_blank\" ><i class=\"fa fa-facebook\"></i></a>
\t  <a href=\"";
            // line 276
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["google_plus_url"]) ? $context["google_plus_url"] : null), "html", null, true));
            echo "\"  class=\"borange\" target=\"_blank\" ><i class=\"fa fa-google-plus\"></i></a>
\t  <a href=\"";
            // line 277
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["twitter_url"]) ? $context["twitter_url"] : null), "html", null, true));
            echo "\" class=\"blightblue\" target=\"_blank\" ><i class=\"fa fa-twitter\"></i></a>
\t  <a href=\"";
            // line 278
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["linkedin_url"]) ? $context["linkedin_url"] : null), "html", null, true));
            echo "\" class=\"bviolet\" target=\"_blank\"><i class=\"fa fa-linkedin\"></i></a>
\t  <a href=\"";
            // line 279
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["pinterest_url"]) ? $context["pinterest_url"] : null), "html", null, true));
            echo "\" class=\"bred\" target=\"_blank\" ><i class=\"fa fa-pinterest\"></i></a>
\t  <a href=\"";
            // line 280
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["rss_url"]) ? $context["rss_url"] : null), "html", null, true));
            echo "\" class=\"borange\" target=\"_blank\" ><i class=\"fa fa-rss\"></i></a>
\t</div>
      ";
        }
        // line 283
        echo "    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/paxton/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  446 => 283,  440 => 280,  436 => 279,  432 => 278,  428 => 277,  424 => 276,  420 => 275,  417 => 274,  415 => 273,  411 => 272,  408 => 271,  402 => 269,  400 => 268,  390 => 260,  381 => 253,  375 => 251,  373 => 250,  369 => 249,  364 => 246,  358 => 244,  356 => 243,  352 => 242,  347 => 239,  341 => 237,  339 => 236,  335 => 235,  327 => 229,  325 => 228,  320 => 225,  300 => 208,  288 => 201,  278 => 193,  276 => 192,  268 => 186,  262 => 183,  259 => 182,  257 => 181,  251 => 177,  244 => 173,  240 => 172,  237 => 171,  235 => 170,  230 => 167,  223 => 163,  219 => 162,  215 => 161,  212 => 160,  210 => 159,  205 => 156,  198 => 152,  194 => 151,  191 => 150,  189 => 149,  182 => 144,  176 => 141,  173 => 140,  171 => 139,  166 => 136,  160 => 133,  157 => 132,  155 => 131,  146 => 124,  137 => 117,  128 => 115,  124 => 114,  120 => 112,  118 => 111,  113 => 108,  105 => 103,  98 => 98,  96 => 97,  85 => 88,  79 => 86,  77 => 85,  70 => 80,  64 => 78,  62 => 77,  43 => 60,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Default theme implementation to display a single page.
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
 * - logo: The url of the logo image, as defined in theme settings.
 * - site_name: The name of the site. This is empty when displaying the site
 *   name has been disabled in the theme settings.
 * - site_slogan: The slogan of the site. This is empty when displaying the site
 *   slogan has been disabled in theme settings.
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
 * - page.navigation: Items for the Navigation region.
 * - page.page_title: Used by Current page Title.
 * - page.banner: Items for the banner region.
 * - page.highlighted: Items for the highlighted top  region.
 * - page.content_top: The main content top of the current page.
 * - page.help: Item for the help region.
 * - page.breadcrumb: Item for the Breadcrumb region.
 * - page.content: The main content of the current page.
 * - page.sidebar_first: Items for the first sidebar.
 * - page.sidebar_second: Items for the second sidebar.
 * - page.content_bottom: Items for the bottom in content region.
 * - page.footer_top: Items for the footer top region.
 * - page.footer_first: Items for the footer first region.
 * - page.footer_second: Items for the footer Second region.
 * - page.footer_third: Items for the footer third region.
 * - page.footer_bottom: Items for the footer bottom region.
 *
 * @see template_preprocess_page()
 * @see html.html.twig
 *
 * @ingroup themeable
 */
#}


<!--start: Header and Navbar -->

<nav class=\"navbar navbar-default\" role=\"navigation\">
  <!--start: Container -->
  <div class=\"container\">
    <div class=\"row\">
     <!--- Start : Header -->
    <!-- Sitename and toggle get grouped for better mobile display -->
    <div class=\"navbar-header col-md-3\">
      <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#main-navigation\">
        <span class=\"sr-only\">Toggle navigation</span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
      </button>
      {% if page.header %}
        {{ page.header }}
      {% endif %}
    </div>
    <!--- End :Header -->

    <!--- Start: Navigation -->
    <div class=\"col-md-9\">
    {% if page.primary_menu %}
      {{ page.primary_menu }}
    {% endif %}
    <!---End: Navigation -->
    </div>
    </div>
  </div>
  <!--/.container-->
</nav>
<!--end: Header and Navbar -->

<!--- Start: Page Title -->
{%  if page.page_title and  not is_front %}

  <div id=\"page-title\">
    <div id=\"page-title-inner\">
      <!-- start: Container -->
      <div class=\"container\">
        {{ page.page_title }}
      </div>
    </div>
  </div>
{% endif %}
<!--- End:Page Title -->

<!-- start: Slider -->
{% if is_front %}
  <div class=\"slider-wrapper\">
    <div id=\"da-slider\" class=\"da-slider\">
      {% for slider_contents in slider_content %}
        {{ slider_contents | raw }}
      {% endfor %}
      <nav class=\"da-arrows\">
        <span class=\"da-arrows-prev\"></span>
        <span class=\"da-arrows-next\"></span>
      </nav>
    </div>
  </div>
{% endif %}
<!-- end: Slider -->

<!--- Start:layout -->
<div id=\"wrapper\">
  <!-- start: Container -->
  <div class=\"container\">
    <!---Start:highlighted -->
      {% if page.highlighted %}
        <div class=\"jumbotron\">
          {{ page.highlighted }}
        </div>
      {% endif %}
    <!---End:highlighted -->

    <!---Start:content top -->
      {% if page.content_top %}
        <div class=\"row\">
          {{ page.content_top }}
        </div>
      {% endif %}
    <!---End:Content top -->
    <!-- start: Row -->
    <!--start:content -->
    <div class=\"row layout\">
      <!-- Start:Left SideBar -->
      {% if page.sidebar_first %}
        <div class=\"sidebar\" >
          <div class = {{  sidebarfirst }} >
            {{ page.sidebar_first }}
          </div>
        </div>
      {% endif %}
      <!-- End:Right SideBar -->

      <!-- Start:content -->
      {% if page.content %}
        <div class = \" content_layout \">
          <div class= {{ contentlayout }}>
            {{ page.breadcrumb }}
            {{ page.content }}
          </div>
        </div>
      {% endif %}
      <!-- End:content -->

      <!-- Start:Right SideBar -->
      {% if page.sidebar_second %}
        <div class=\"sidebar\">
          <div class={{  sidebarsecond }}>
            {{ page.sidebar_second }}
          </div>
        </div>
      {% endif %}
      <!-- End:Right SideBar -->
    </div>
    <!---End:Content -->
    <!---Start:content bottom -->
    {% if page.content_bottom %}
      <div class=\"row\">
        {{ page.content_bottom }}
      </div>
    {% endif %}
    <!-- End:Content Bottom -->
  </div>
</div>
<!--- End:layout -->

<!-- start: Footer Menu -->
{% if page.footer_menu %}
  <div id=\"footer-menu\" class=\"hidden-sm hidden-xs\">
    <!-- start: Container -->
    <div class=\"container\">
      <!-- start: Row -->
      <div class=\"row\">
        <!-- start: Footer Menu Logo -->
        <div class=\"col-sm-2\">
          <div id=\"footer-menu-logo\">
            <a class=\"brand\" href={{ front_page }} > {{ site_name }}. </a>
          </div>
        </div>
        <!-- end: Footer Menu Logo -->
        <!-- start: Footer Menu Links-->
        <div class=\"col-sm-9\">
          <div id=\"footer-menu-links\">
            {{ page.footer_menu }}
          </div>
        </div>
        <!-- end: Footer Menu Links-->
        <!-- start: Footer Menu Back To Top -->
        <div class=\"col-sm-1\">
          <div id=\"footer-menu-back-to-top\">
            <a href=\"#\"></a>
          </div>
        </div>
        <!-- end: Footer Menu Back To Top -->
      </div>
      <!-- end: Row -->
    </div>
    <!-- end: Container  -->
  </div>
{% endif %}
  <!-- end: Footer Menu -->

<!-- start: Footer -->
{% if page.footer_first or page.footer_second or page.footer_third %}
  <div id=\"footer\">
    <!-- start: Container -->
    <div class=\"container\">
      <!-- start: Row -->
      <div class=\"row\">
        <!--- Start:Footer First Region -->
        <div class = {{ footer_class }}>
          {% if page.footer_first %}
            {{ page.footer_first }}
          {% endif %}
        </div>
        <!--- End :Footer First Region -->
        <!--- Start:Footer Second Region -->
        <div class = {{ footer_class }}>
          {% if page.footer_second %}
            {{ page.footer_second }}
          {% endif %}
        </div>
        <!--- End:Footer Second Region -->
        <!--- Start:Footer third Region -->
        <div class = {{ footer_third_class }}>
          {% if page.footer_third %}
            {{ page.footer_third }}
          {% endif %}
        </div>
        <!--- End:Footer Third Region -->
      </div>
    </div>
  </div>

{% endif %}

<!---End :Footer -->

<!--- Start:Footer Botoom -->
<div id=\"copyright\">
  <!-- start: Container -->
  <div class=\"container\">
    <div class=\"col-sm-12\">
      {% if page.footer_bottom %}
\t{{ page.footer_bottom }}
      {% endif %}
      <div class=\"clearfix\"></div>
      <div class=\"credited pull-left\"><p class=\"text-center\">{{ 'Paxton ported to drupal by'|t }} <a href=\"http://dropthemes.in\" target=\"_blank\">DropThemes.in</a></p></div>
      {% if show_social_icons %}
\t<div class=\"social pull-right\">
\t  <a href=\"{{ facebook_url }}\"  class=\"bblue\" target=\"_blank\" ><i class=\"fa fa-facebook\"></i></a>
\t  <a href=\"{{ google_plus_url }}\"  class=\"borange\" target=\"_blank\" ><i class=\"fa fa-google-plus\"></i></a>
\t  <a href=\"{{ twitter_url }}\" class=\"blightblue\" target=\"_blank\" ><i class=\"fa fa-twitter\"></i></a>
\t  <a href=\"{{ linkedin_url }}\" class=\"bviolet\" target=\"_blank\"><i class=\"fa fa-linkedin\"></i></a>
\t  <a href=\"{{ pinterest_url }}\" class=\"bred\" target=\"_blank\" ><i class=\"fa fa-pinterest\"></i></a>
\t  <a href=\"{{ rss_url }}\" class=\"borange\" target=\"_blank\" ><i class=\"fa fa-rss\"></i></a>
\t</div>
      {% endif %}
    </div>
  </div>
</div>
";
    }
}
