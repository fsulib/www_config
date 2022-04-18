<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/custom/fsu_strata/templates/page.html.twig */
class __TwigTemplate_35ccdef4195ef1b3d43262b96295dae4f205974daab749bed0caa9c1df365644 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'navbar' => [$this, 'block_navbar'],
            'main' => [$this, 'block_main'],
            'fullheader' => [$this, 'block_fullheader'],
            'header' => [$this, 'block_header'],
            'slideshow' => [$this, 'block_slideshow'],
            'sidebar_first' => [$this, 'block_sidebar_first'],
            'highlighted' => [$this, 'block_highlighted'],
            'breadcrumb' => [$this, 'block_breadcrumb'],
            'action_links' => [$this, 'block_action_links'],
            'help' => [$this, 'block_help'],
            'content' => [$this, 'block_content'],
            'sidebar_second' => [$this, 'block_sidebar_second'],
            'fullcontent' => [$this, 'block_fullcontent'],
            'advancedcontent' => [$this, 'block_advancedcontent'],
            'footer' => [$this, 'block_footer'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 66
        $context["mapused"] = "";
        // line 67
        $context["emptytext"] = "";
        // line 68
        $context["firstsidebar_rendered"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 68), 68, $this->source));
        // line 69
        $context["secondsidebar_rendered"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 69), 69, $this->source));
        // line 70
        $context["container"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 70), "fluid_container", [], "any", false, false, true, 70)) ? ("container-fluid") : ("container"));
        // line 72
        echo "    ";
        $this->displayBlock('navbar', $context, $blocks);
        // line 228
        echo "
";
        // line 230
        $this->displayBlock('main', $context, $blocks);
        // line 350
        echo "<!-- Start advanced content region test -->


";
        // line 353
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "advancedcontent", [], "any", false, false, true, 353)) {
            // line 354
            echo "    ";
            $this->displayBlock('advancedcontent', $context, $blocks);
        }
        // line 360
        echo "<!-- end full bottom region -->


";
        // line 363
        $this->displayBlock('footer', $context, $blocks);
    }

    // line 72
    public function block_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 73
        echo "        ";
        $context["navbar_classes"] = [0 => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 74
($context["theme"] ?? null), "settings", [], "any", false, false, true, 74), "navbar_inverse", [], "any", false, false, true, 74)) ? ("navbar-inverse") : ("navbar-default")), 1 => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 75
($context["theme"] ?? null), "settings", [], "any", false, false, true, 75), "navbar_position", [], "any", false, false, true, 75)) ? (("navbar-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 75), "navbar_position", [], "any", false, false, true, 75), 75, $this->source)))) : (($context["container"] ?? null)))];
        // line 77
        echo "        <header id=\"fsu-header\" role=\"banner\">
          <div class=\"s3-k\"><a href=\"#content\" class=\"sr-only sr-only-focusable btn btn-tab skiplink-text\">Skip to main content</a></div>
            <div ";
        // line 79
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["navbar_attributes"] ?? null), "addClass", [0 => ($context["navbar_classes"] ?? null)], "method", false, false, true, 79), 79, $this->source), "html", null, true);
        echo " id=\"navbar\">
                <div id=\"fsu-global\" class=\"";
        // line 80
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["colortwo"] ?? null), 80, $this->source), "html", null, true);
        echo " s3-scored s3-plain-top s3-p-2\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div id=\"fsu-home\" class=\"col-xs-7 col-sm-5\"><p><a href=\"https://www.fsu.edu/\">FSU</a>
                                    &nbsp;|&nbsp; <a href=\"https://www.lib.fsu.edu\">FSU Libraries</a></p></div>
                            <div id=\"fsu-top\" class=\"col-xs-7 col-sm-8 hidden small text-uppercase\"><p><a
                                            href=\"https://fsu.edu\">FSU</a> | <a href=\"/\">";
        // line 86
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null), 86, $this->source), "html", null, true);
        echo "</a></p></div>
                            <div id=\"fsu-nav-utility\" class=\"col-xs-5 col-sm-5 col-sm-offset-2\">
                                <nav class=\"fsu-nav-utility\">
                                    <ul class=\"nav navbar-nav navbar-right\">
                                      <li><a href=\"/hours\" title=\"Library Hours\"><span class=\"fa fa-clock\"></span><span class=\"hidden\">Library Hours</span></a>
                                      </li>

                                        <li><a data-toggle=\"collapse\" data-parent=\".fsu-utilities\" href=\"#fsu-search\"
                                               aria-expanded=\"false\" aria-controls=\"fsu-search\" title=\"Search\"><span class=\"fa fa-search\"></span><span class=\"hidden\">Search FSU</span></a>
                                        </li>
                                      <li><a data-toggle=\"collapse\" data-parent=\".fsu-utilities\"
                                             href=\"#fsu-global-nav\" aria-expanded=\"false\"
                                             aria-controls=\"fsu-global-nav\" title=\"FSU Sites\"><span class=\"fa fa-bars\"></span><span
                                            class=\"hidden\">Navigation</span></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div><!-- fsu-global -->

                <div id=\"fsu-utility\" class=\"";
        // line 107
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["colortwo"] ?? null), 107, $this->source), "html", null, true);
        echo " fsu-utilities\">
                    <div id=\"fsu-search\" class=\"collapse\" aria-expanded=\"false\">
                        <div class=\"container\">
                            <div class=\"s3-m-8\">
                                <div class=\"row\">
                                    <div class=\"col-md-5 col-md-offset-7\">
                                        <div class=\"row\">
                                            <div class=\"col-sm-12 small text-right\">
                                                <form class=\"headerSearchForm\" method=\"get\"
                                                      onsubmit=\"return FSU_search(type.value, FSU_URLEncode(keywords.value));\"
                                                      action=\"\">
                                                    <select name=\"type\" title=\"Select Search Type\"
                                                            class=\"headerSearchSelect s3-m-3\" style=\"height:27px\">
                                                        <option selected=\"selected\" value=\"SITE\">This Site</option>
                                                        <option value=\"GOOGLE\">FSU Sites</option>
                                                        <!--<option value=\"PHFST\">Student Directory</option> -->
                                                        <option value=\"PHF\">Faculty &amp; Staff Directory</option>
                                                        <option value=\"DEPT\">Departments &amp; Services</option>
                                                    </select>
                                                    <br class=\"visible-sm\"/>
                                                    <input type=\"text\" name=\"keywords\" value=\"\" title=\"Search Input Box\"
                                                           size=\"20\" class=\"headerSearchBox\"/>
                                                    <input type=\"submit\" name=\"fsuSearch\" value=\"Search\"
                                                           title=\"Submit Search\"
                                                           class=\"headerSearchBtn btn btn-sm btn-success s3-m-3\"/>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- fsu-search -->

                    <div id=\"fsu-global-nav\" class=\"collapse\" aria-expanded=\"false\">
                        <div class=\"container text-center small\">
                            <div class=\"clearfix s3-p-5\"></div>
                            <div class=\"row s3-m-10 s3-m-t0\">
                                <div class=\"col-xs-12\">
                                    <div class=\"row ";
        // line 146
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color"] ?? null), 146, $this->source), "html", null, true);
        echo "\">
                                        <div class=\"col-xs-6 visible-xs col-sm-12 text-left\">
                                            <nav class=\"fsu-nav-global\">

                                                <div class=\"navbar-topnav\">
                                                    ";
        // line 151
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\fsu_twig_filter\Twig\RenderRegion']->render_fsu_region("navigation_collapsible"));
        echo "
                                                </div>

                                            </nav>
                                        </div>
                                        <div class=\"col-xs-6 col-sm-12 fsu-global-menu\">
                                            <nav class=\"fsu-nav-global text-uppercase\">

                                                <ul class=\"nav navbar-nav\">
                                                    <li><a href=\"/find-and-borrow\">Find & Borrow</a></li>
                                                    <li><a href=\"/research-and-publish\">Research & Publish</a></li>
                                                    <li><a href=\"/teaching-and-learning\">Teaching & Learning</a></li>
                                                    <li><a href=\"/visit\">Visit Us</a></li>
                                                    <li><a href=\"/about\">About Us</a></li>
                                                    <li><a href=\"/help\">Help & Support</a></li>
                                                </ul>

                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- fsu-global-nav -->
                </div><!-- .fsu-utilities -->

                <div id=\"fsu-masthead\" class=\"";
        // line 177
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["colorhead"] ?? null), 177, $this->source), "html", null, true);
        echo " s3-scored\">
                    <div class=\"container\">
                        <div class=\"row hidden-xs\">
                            <div class=\"col-xs-12\">
                                <a href=\"http://www.fsu.edu/\"><img
                                            src=\"/themes/custom/fsu_strata/strata-";
        // line 182
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["strataversion"] ?? null), 182, $this->source), "html", null, true);
        echo "/_/s3/img/fsu-seals/";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["logoselection"] ?? null), 182, $this->source), "html", null, true);
        echo ".png\"
                                            alt=\"Florida State University Seal\" id=\"fsu-seal\"></a>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-xs-12\">
                                <h1 id=\"fsu-title\"><a href=\"/\">";
        // line 188
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null), 188, $this->source), "html", null, true);
        echo "</a></h1>
                                <p id=\"fsu-subheading\">";
        // line 189
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_slogan"] ?? null), 189, $this->source), "html", null, true);
        echo "</p>
                            </div>
                        </div>
                    </div>
                </div><!-- fsu-masthead -->

                <div class=\"hidden-xs\">
                    <div id=\"fsu-nav-primary\" class=\"";
        // line 196
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["colornav"] ?? null), 196, $this->source), "html", null, true);
        echo " s3-scored s3-b-b0\">
                        <div class=\"navbar text-center\" role=\"navigation\">

                            <div class=\"navbar-header\">
                                ";
        // line 200
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 200), 200, $this->source), "html", null, true);
        echo "
                                ";
        // line 202
        echo "                                ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 202)) {
            // line 203
            echo "                                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\"
                                            data-target=\".navbar-collapse\">
                                        <span class=\"sr-only\">";
            // line 205
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Toggle navigation"));
            echo "</span>
                                        <span class=\"icon-bar\"></span>
                                        <span class=\"icon-bar\"></span>
                                        <span class=\"icon-bar\"></span>
                                    </button>
                                ";
        }
        // line 211
        echo "                            </div>

                            ";
        // line 214
        echo "
                            <div class=\"navbar-collapse collapse\">
                                ";
        // line 216
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\fsu_twig_filter\Twig\RenderRegion']->render_fsu_region("navigation_collapsible"));
        echo "
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!-- /TODO -->

        </header>
    ";
    }

    // line 230
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 231
        echo "    <div role=\"main\" id=\"content\" class=\"main-container ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 231, $this->source), "html", null, true);
        echo " js-quickedit-main-content ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["colorbody"] ?? null), 231, $this->source), "html", null, true);
        echo "\">
        <!-- Start full top region -->
        ";
        // line 233
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "fullheader", [], "any", false, false, true, 233)) {
            // line 234
            echo "            ";
            $this->displayBlock('fullheader', $context, $blocks);
            // line 241
            echo "        ";
        }
        // line 242
        echo "        <!-- end full top region -->
        <div class=\"container\">
            <!-- removing col-xl-12 <div class=\"row col-xl-12\"><!-- was s3-m-10 -->
            <div class=\"row\"><!-- was s3-m-10 -->
                <div class=\"s3-w s3-scored\">
                    ";
        // line 248
        echo "                    ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 248)) {
            // line 249
            echo "                        ";
            $this->displayBlock('header', $context, $blocks);
            // line 254
            echo "                    ";
        }
        // line 255
        echo "                    ";
        // line 256
        echo "                    ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshow", [], "any", false, false, true, 256)) {
            // line 257
            echo "                        ";
            $this->displayBlock('slideshow', $context, $blocks);
            // line 262
            echo "                    ";
        }
        // line 263
        echo "                    ";
        // line 264
        echo "                    ";
        if ( !twig_test_empty(($context["firstsidebar_rendered"] ?? null))) {
            // line 265
            echo "                        ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 265)) {
                // line 266
                echo "                            ";
                $this->displayBlock('sidebar_first', $context, $blocks);
                // line 271
                echo "                        ";
            }
            // line 272
            echo "                    ";
        }
        // line 273
        echo "

                    ";
        // line 276
        echo "                    ";
        $context["content_classes"] = [0 => ((( !twig_test_empty(        // line 277
($context["firstsidebar_rendered"] ?? null)) &&  !twig_test_empty(($context["secondsidebar_rendered"] ?? null)))) ? ("col-sm-6") : ("")), 1 => ((( !twig_test_empty(        // line 278
($context["firstsidebar_rendered"] ?? null)) && twig_test_empty(($context["secondsidebar_rendered"] ?? null)))) ? ("col-sm-9") : ("")), 2 => (((twig_test_empty(        // line 279
($context["firstsidebar_rendered"] ?? null)) &&  !twig_test_empty(($context["secondsidebar_rendered"] ?? null)))) ? ("col-sm-9") : ("")), 3 => (((twig_test_empty(        // line 280
($context["firstsidebar_rendered"] ?? null)) && twig_test_empty(($context["secondsidebar_rendered"] ?? null)))) ? ("col-sm-12") : (""))];
        // line 282
        echo "                    <section";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => ($context["content_classes"] ?? null)], "method", false, false, true, 282), 282, $this->source), "html", null, true);
        echo ">

                        ";
        // line 285
        echo "                        ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 285)) {
            // line 286
            echo "                            ";
            $this->displayBlock('highlighted', $context, $blocks);
            // line 289
            echo "                        ";
        }
        // line 290
        echo "
                        ";
        // line 292
        echo "                        ";
        if (($context["breadcrumb"] ?? null)) {
            // line 293
            echo "                            ";
            $this->displayBlock('breadcrumb', $context, $blocks);
            // line 296
            echo "                        ";
        }
        // line 297
        echo "
                        ";
        // line 299
        echo "                        ";
        if (($context["action_links"] ?? null)) {
            // line 300
            echo "                            ";
            $this->displayBlock('action_links', $context, $blocks);
            // line 303
            echo "                        ";
        }
        // line 304
        echo "
                        ";
        // line 306
        echo "                        ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 306)) {
            // line 307
            echo "                            ";
            $this->displayBlock('help', $context, $blocks);
            // line 310
            echo "                        ";
        }
        // line 311
        echo "
                        ";
        // line 313
        echo "                        ";
        $this->displayBlock('content', $context, $blocks);
        // line 317
        echo "                    </section>

                    ";
        // line 320
        echo "                    ";
        if ( !twig_test_empty(($context["secondsidebar_rendered"] ?? null))) {
            // line 321
            echo "                        ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 321)) {
                // line 322
                echo "                            ";
                $this->displayBlock('sidebar_second', $context, $blocks);
                // line 327
                echo "                        ";
            }
            // line 328
            echo "                    ";
        }
        // line 329
        echo "
                </div>
            </div>
        </div>
        <!-- Start full bottom region -->
        ";
        // line 334
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "fullcontent", [], "any", false, false, true, 334)) {
            // line 335
            echo "            ";
            $this->displayBlock('fullcontent', $context, $blocks);
            // line 346
            echo "        ";
        }
        // line 347
        echo "        <!-- end full bottom region -->
    </div>
";
    }

    // line 234
    public function block_fullheader($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 235
        echo "                <div class=\"container-fluid s3-m-0 full-top-region\">
                    <div class=\"row\">
                        ";
        // line 237
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "fullheader", [], "any", false, false, true, 237), 237, $this->source), "html", null, true);
        echo "
                    </div>
                </div>
            ";
    }

    // line 249
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 250
        echo "                            <div class=\"col-sm-12\" role=\"heading\">
                                ";
        // line 251
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 251), 251, $this->source), "html", null, true);
        echo "
                            </div>
                        ";
    }

    // line 257
    public function block_slideshow($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 258
        echo "                            <div class=\"col-sm-12\" role=\"slideshow\">
                                ";
        // line 259
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshow", [], "any", false, false, true, 259), 259, $this->source), "html", null, true);
        echo "
                            </div>
                        ";
    }

    // line 266
    public function block_sidebar_first($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 267
        echo "                                <aside class=\"col-sm-3\" role=\"complementary\">
                                    ";
        // line 268
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 268), 268, $this->source), "html", null, true);
        echo "
                                </aside>
                            ";
    }

    // line 286
    public function block_highlighted($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 287
        echo "                                <div class=\"highlighted\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 287), 287, $this->source), "html", null, true);
        echo "</div>
                            ";
    }

    // line 293
    public function block_breadcrumb($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 294
        echo "                                ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["breadcrumb"] ?? null), 294, $this->source), "html", null, true);
        echo "
                            ";
    }

    // line 300
    public function block_action_links($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 301
        echo "                                <ul class=\"action-links\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["action_links"] ?? null), 301, $this->source), "html", null, true);
        echo "</ul>
                            ";
    }

    // line 307
    public function block_help($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 308
        echo "                                ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 308), 308, $this->source), "html", null, true);
        echo "
                            ";
    }

    // line 313
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 314
        echo "                            <a id=\"main-content\"></a>
                            ";
        // line 315
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 315), 315, $this->source), "html", null, true);
        echo "
                        ";
    }

    // line 322
    public function block_sidebar_second($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 323
        echo "                                <aside class=\"col-sm-3\" role=\"complementary\">
                                    ";
        // line 324
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 324), 324, $this->source), "html", null, true);
        echo "
                                </aside>
                            ";
    }

    // line 335
    public function block_fullcontent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 336
        echo "                <div class=\"s3 ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["colorfullwidth"] ?? null), 336, $this->source), "html", null, true);
        echo " s3-scored full-bottom-region\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-sm-12\">
                                ";
        // line 340
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "fullcontent", [], "any", false, false, true, 340), 340, $this->source), "html", null, true);
        echo "
                            </div>
                        </div>
                    </div><!-- .container -->
                </div>
            ";
    }

    // line 354
    public function block_advancedcontent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 355
        echo "        <div class=\"full-advanced-region\">
            ";
        // line 356
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "advancedcontent", [], "any", false, false, true, 356), 356, $this->source), "html", null, true);
        echo "
        </div>
    ";
    }

    // line 363
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 364
        echo "    <footer id=\"fsu-footer\" class=\"small footer ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 364, $this->source), "html", null, true);
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["colortwo"] ?? null), 364, $this->source), "html", null, true);
        echo "\" role=\"contentinfo\">
        ";
        // line 365
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 365)) {
            // line 366
            echo "            <div class=\"container\">
                <div class=\"row s3-m-10\">
                    ";
            // line 368
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 368), 368, $this->source), "html", null, true);
            echo "
                </div>
            </div>
        ";
        }
        // line 372
        echo "        <div class=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["colortwo"] ?? null), 372, $this->source), "html", null, true);
        echo "\">
            <div class=\"container\">
                <div class=\"row s3-m-10\">
                    <!-- new variable area TODO -->
                    ";
        // line 377
        echo "                    ";
        if (((twig_test_empty(($context["footertextone"] ?? null)) || twig_test_empty(        // line 378
($context["footertexttwo"] ?? null))) || ((twig_test_empty(        // line 379
($context["maptext"] ?? null)) &&  !twig_test_empty(        // line 380
($context["googlemap"] ?? null))) && twig_test_empty(($context["twitterfeed"] ?? null))))) {
            // line 381
            echo "                        ";
            $context["emptytext"] = "1";
            // line 382
            echo "                    ";
        }
        // line 383
        echo "                    ";
        if ((((((((((((((((((( !twig_test_empty(($context["twitterfeed"] ?? null)) ||  !twig_test_empty(        // line 384
($context["locationname"] ?? null))) ||  !twig_test_empty(        // line 385
($context["locationaddress"] ?? null))) ||  !twig_test_empty(        // line 386
($context["locationcity"] ?? null))) ||  !twig_test_empty(        // line 387
($context["locationstate"] ?? null))) ||  !twig_test_empty(        // line 388
($context["locationpostalcode"] ?? null))) ||  !twig_test_empty(        // line 389
($context["locationlat"] ?? null))) ||  !twig_test_empty(        // line 390
($context["locationlon"] ?? null))) ||  !twig_test_empty(        // line 391
($context["footertextone"] ?? null))) ||  !twig_test_empty(        // line 392
($context["footertexttwo"] ?? null))) ||  !twig_test_empty(        // line 393
($context["maptext"] ?? null))) ||  !twig_test_empty(        // line 394
($context["twitterfeed"] ?? null))) ||  !twig_test_empty(        // line 395
($context["instagram"] ?? null))) ||  !twig_test_empty(        // line 396
($context["twitter"] ?? null))) ||  !twig_test_empty(        // line 397
($context["facebook"] ?? null))) ||  !twig_test_empty(        // line 398
($context["youtube"] ?? null))) ||  !twig_test_empty(        // line 399
($context["linkedin"] ?? null))) ||  !twig_test_empty(        // line 400
($context["googlemap"] ?? null))) ||  !twig_test_empty(        // line 401
($context["maplocation"] ?? null)))) {
            // line 402
            echo "
                        <div class=\"col-xs-12 footer-details\">
                            ";
            // line 405
            echo "                            <div class=\"row\">
                                <div class=\"col-xs-12 col-md-12 footer-small-area\">
                                    ";
            // line 408
            echo "                                    ";
            if ((((( !twig_test_empty(($context["maplocation"] ?? null)) &&  !twig_test_empty(($context["twitter"] ?? null))) &&  !twig_test_empty(($context["footertextone"] ?? null))) &&  !twig_test_empty(($context["footertexttwo"] ?? null))) &&  !twig_test_empty(($context["maptext"] ?? null)))) {
                // line 409
                echo "                                        <div class=\"col-xs-3 col-md-3\"><!-- maptext-footertextone-footertexttwo -->
                                            ";
                // line 410
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["footertextone"] ?? null), 410, $this->source));
                echo "
                                        </div>
                                        <div class=\"col-xs-3 col-md-3\">
                                            ";
                // line 413
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["footertexttwo"] ?? null), 413, $this->source));
                echo "
                                        </div>
                                        <div class=\"col-xs-6 col-md-6\">
                                            ";
                // line 416
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["maptext"] ?? null), 416, $this->source));
                echo "
                                        </div>
                                    ";
            }
            // line 419
            echo "                                    ";
            // line 420
            echo "                                    ";
            // line 421
            echo "                                    ";
            if ((((( !twig_test_empty(($context["maplocation"] ?? null)) && twig_test_empty(($context["twitter"] ?? null))) &&  !twig_test_empty(($context["footertextone"] ?? null))) &&  !twig_test_empty(($context["footertexttwo"] ?? null))) &&  !twig_test_empty(($context["maptext"] ?? null)))) {
                // line 422
                echo "                                        <div class=\"col-xs-3 col-md-3\">
                                            <!-- smallmap-footertextone-footertexttwo-maptext -->
                                            ";
                // line 424
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["footertextone"] ?? null), 424, $this->source));
                echo "
                                        </div>
                                        <div class=\"col-xs-3 col-md-3\">
                                            ";
                // line 427
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["footertexttwo"] ?? null), 427, $this->source));
                echo "
                                        </div>
                                        <div class=\"col-xs-3 col-md-3\">
                                            ";
                // line 430
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["googlemapsmall"] ?? null), 430, $this->source));
                echo "
                                        </div>
                                        <div class=\"col-xs-3 col-md-3\">
                                            ";
                // line 433
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["maptext"] ?? null), 433, $this->source));
                echo "
                                            ";
                // line 434
                $context["mapused"] = "1";
                // line 435
                echo "                                        </div>
                                    ";
            }
            // line 437
            echo "                                    ";
            // line 438
            echo "
                                    ";
            // line 440
            echo "                                    ";
            if ((((( !twig_test_empty(($context["maplocation"] ?? null)) && twig_test_empty(($context["twitter"] ?? null))) &&  !twig_test_empty(($context["footertextone"] ?? null))) &&  !twig_test_empty(($context["footertexttwo"] ?? null))) && twig_test_empty(($context["maptext"] ?? null)))) {
                // line 441
                echo "                                        <div class=\"col-xs-4 col-md-4\">
                                            <!-- smallmap-footertextone-footertexttwo-maptext-nosocial -->
                                            ";
                // line 443
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["footertextone"] ?? null), 443, $this->source));
                echo "
                                        </div>
                                        <div class=\"col-xs-4 col-md-4\">
                                            ";
                // line 446
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["footertexttwo"] ?? null), 446, $this->source));
                echo " ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["maptext"] ?? null), 446, $this->source));
                echo "
                                        </div>
                                        <div class=\"col-xs-4 col-md-4\">
                                            ";
                // line 449
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["googlemapsmall"] ?? null), 449, $this->source));
                echo "
                                            ";
                // line 450
                $context["mapused"] = "1";
                // line 451
                echo "                                        </div>
                                    ";
            }
            // line 453
            echo "                                    ";
            // line 454
            echo "                                    ";
            // line 455
            echo "                                    ";
            // line 456
            echo "                                    ";
            if ((((( !twig_test_empty(($context["maplocation"] ?? null)) && twig_test_empty(($context["twitter"] ?? null))) && twig_test_empty(($context["footertextone"] ?? null))) && twig_test_empty(($context["footertexttwo"] ?? null))) && twig_test_empty(($context["maptext"] ?? null)))) {
                // line 457
                echo "                                        <div class=\"col-xs-6 col-md-6\"> <!-- map and not text -->
                                        </div>
                                        <div class=\"col-xs-6 col-md-6\">
                                            ";
                // line 462
                echo "                                        </div>
                                    ";
            }
            // line 464
            echo "                                    ";
            // line 465
            echo "                                    ";
            if ((((( !twig_test_empty(($context["maplocation"] ?? null)) && twig_test_empty(($context["twitter"] ?? null))) &&  !twig_test_empty(($context["footertextone"] ?? null))) && twig_test_empty(($context["footertexttwo"] ?? null))) && twig_test_empty(($context["maptext"] ?? null)))) {
                // line 466
                echo "                                        <div class=\"col-xs-6 col-md-6\"><!-- map and footer text one -->
                                            ";
                // line 467
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["footertextone"] ?? null), 467, $this->source));
                echo "
                                        </div>
                                        <div class=\"col-xs-6 col-md-6\">
                                            ";
                // line 470
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["googlemapsmall"] ?? null), 470, $this->source));
                echo "
                                            ";
                // line 471
                $context["mapused"] = "1";
                // line 472
                echo "                                        </div>
                                    ";
            }
            // line 474
            echo "                                    ";
            // line 475
            echo "
                                    ";
            // line 477
            echo "                                    ";
            if ((((twig_test_empty(($context["maplocation"] ?? null)) &&  !twig_test_empty(($context["footertextone"] ?? null))) &&  !twig_test_empty(($context["footertexttwo"] ?? null))) &&  !twig_test_empty(($context["maptext"] ?? null)))) {
                // line 478
                echo "                                        <div class=\"col-xs-4 col-md-4\"><!-- footertextone-footertexttwo-maptext -->
                                            ";
                // line 479
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["footertextone"] ?? null), 479, $this->source));
                echo "
                                        </div>
                                        <div class=\"col-xs-4 col-md-4\">
                                            ";
                // line 482
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["footertexttwo"] ?? null), 482, $this->source));
                echo "
                                        </div>
                                        <div class=\"col-xs-4 col-md-4\">
                                            ";
                // line 485
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["maptext"] ?? null), 485, $this->source));
                echo "
                                        </div>
                                    ";
            }
            // line 488
            echo "                                    ";
            // line 489
            echo "
                                    ";
            // line 491
            echo "                                    ";
            if ((((twig_test_empty(($context["maplocation"] ?? null)) &&  !twig_test_empty(($context["footertextone"] ?? null))) &&  !twig_test_empty(($context["footertexttwo"] ?? null))) && twig_test_empty(($context["maptext"] ?? null)))) {
                // line 492
                echo "                                        <div class=\"col-xs-6 col-md-6\"><!-- footertextone-footertexttwo -->
                                            ";
                // line 493
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["footertextone"] ?? null), 493, $this->source));
                echo "
                                        </div>
                                        <div class=\"col-xs-6 col-md-6\">
                                            ";
                // line 496
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["footertexttwo"] ?? null), 496, $this->source));
                echo "
                                        </div>
                                    ";
            }
            // line 499
            echo "                                    ";
            // line 500
            echo "
                                    ";
            // line 502
            echo "                                    ";
            if ((((twig_test_empty(($context["maplocation"] ?? null)) &&  !twig_test_empty(($context["footertextone"] ?? null))) && twig_test_empty(($context["footertexttwo"] ?? null))) && twig_test_empty(($context["maptext"] ?? null)))) {
                // line 503
                echo "                                        <div class=\"col-xs-12 col-md-12\"><!-- footertextone -->
                                            ";
                // line 504
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["footertextone"] ?? null), 504, $this->source));
                echo "
                                        </div>

                                    ";
            }
            // line 508
            echo "                                    ";
            // line 509
            echo "
                                </div>
                            </div>
                            ";
            // line 513
            echo "                            ";
            // line 514
            echo "                            ";
            // line 515
            echo "                            ";
            if (( !twig_test_empty(($context["maplocation"] ?? null)) &&  !twig_test_empty(($context["twitterfeed"] ?? null)))) {
                // line 516
                echo "                                <div class=\"row\">
                                    ";
                // line 524
                echo "
                                    ";
                // line 526
                echo "                                    ";
                if ((((( !twig_test_empty(($context["maplocation"] ?? null)) && twig_test_empty(($context["twitter"] ?? null))) && twig_test_empty(($context["footertextone"] ?? null))) && twig_test_empty(($context["footertexttwo"] ?? null))) && twig_test_empty(($context["maptext"] ?? null)))) {
                    // line 527
                    echo "                                        <div class=\"col-md-6 footer-map-large\">
                                            ";
                    // line 528
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["googlemap"] ?? null), 528, $this->source));
                    echo "
                                            ";
                    // line 529
                    $context["mapused"] = "1";
                    // line 530
                    echo "                                        </div>

                                    ";
                }
                // line 533
                echo "                                    ";
                // line 534
                echo "

                                    <div class=\"col-xs-12 col-md-6 social-stream facebook\">
                                        ";
                // line 537
                if ( !twig_test_empty(($context["twitterfeed"] ?? null))) {
                    // line 538
                    echo "                                            ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["twitterfeed"] ?? null), 538, $this->source));
                    echo "
                                        ";
                }
                // line 540
                echo "                                    </div>
                                </div>
                            ";
            }
            // line 543
            echo "
                            ";
            // line 545
            echo "                            ";
            if ((twig_test_empty(($context["maplocation"] ?? null)) &&  !twig_test_empty(($context["twitterfeed"] ?? null)))) {
                // line 546
                echo "                                <div class=\"row\">
                                    <div class=\"col-xs-12 col-md-12 social-stream\"><!-- no map-social only -->
                                        ";
                // line 548
                if ( !twig_test_empty(($context["twitterfeed"] ?? null))) {
                    // line 549
                    echo "                                            ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["twitterfeed"] ?? null), 549, $this->source));
                    echo "
                                        ";
                }
                // line 551
                echo "                                    </div>
                                </div>
                            ";
            }
            // line 554
            echo "
                            ";
            // line 556
            echo "                            ";
            if (((((( !twig_test_empty(($context["maplocation"] ?? null)) && twig_test_empty(($context["twitterfeed"] ?? null))) && twig_test_empty(($context["footertextone"] ?? null))) && twig_test_empty(($context["footertexttwo"] ?? null))) && twig_test_empty(($context["maptext"] ?? null))) && twig_test_empty(($context["mapused"] ?? null)))) {
                // line 557
                echo "                                <div class=\"row\">
                                    <div class=\"col-xs-12 col-md-12 social-stream\"><!-- everything empty but map -->
                                        ";
                // line 559
                if (( !twig_test_empty(($context["maplocation"] ?? null)) &&  !twig_test_empty(($context["googlemap"] ?? null)))) {
                    // line 560
                    echo "                                            ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["googlemap"] ?? null), 560, $this->source));
                    echo "
                                        ";
                }
                // line 562
                echo "                                    </div>
                                </div>
                            ";
            }
            // line 565
            echo "
                            ";
            // line 567
            echo "                        </div>
                        ";
            // line 569
            echo "
                        ";
            // line 571
            echo "                        ";
            // line 604
            echo "                        ";
            // line 605
            echo "

                    ";
        }
        // line 608
        echo "                    <!-- end new variables -->

                    <div class=\"col-xs-12\">
                        <div class=\"row\">

                            <div class=\"col-xs-6 col-sm-3\">
                                ";
        // line 614
        if (twig_test_empty(($context["overrideaddress"] ?? null))) {
            // line 615
            echo "                                    <p>&copy; Florida State University
                                        <!-- <br>600 W. College Avenue -->
                                        <br>Tallahassee, FL 32306</p>
                                ";
        } else {
            // line 619
            echo "                                    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["overrideaddress"] ?? null), 619, $this->source));
            echo "
                                ";
        }
        // line 621
        echo "                            </div>

                            <div class=\"col-xs-6 col-sm-3\">
                                <p><a href=\"https://directory.fsu.edu/\" target=\"_blank\">FSU Directory Assistance</a>
\t\t\t\t\t\t\t\t\t<br><a href=\"http://fsu.edu/misc/comments.html\" target=\"_blank\">Questions or Comments</a>
                            </div>

                            <div class=\"clearfix visible-xs\"></div>

                            <div class=\"col-xs-6 col-sm-3\">
                                <p><a href=\"http://fsu.edu/misc/policy.html\" target=\"_blank\">Privacy Policy</a>
                                    <br><a href=\"http://fsu.edu/misc/copyright.html\" target=\"_blank\">Copyright</a></p>
                            </div>

                            <div class=\"col-xs-6 col-sm-3 s3-txt-md-r s3-txt-lg-r\">
                              ";
        // line 636
        if ((($context["strataversion"] ?? null) == "3.3.9")) {
            // line 637
            echo "                                <nav aria-label=\"Social Media\" class=\"nav-icons branded\">
                                  ";
            // line 638
            if (twig_test_empty(($context["facebook"] ?? null))) {
                // line 639
                echo "                                    ";
                $context["facebook"] = "https://www.facebook.com/floridastate";
                // line 640
                echo "                                  ";
            }
            // line 641
            echo "                                  ";
            if (twig_test_empty(($context["instagram"] ?? null))) {
                // line 642
                echo "                                    ";
                $context["instagram"] = "https://instagram.com/floridastateuniversity/";
                // line 643
                echo "                                  ";
            }
            // line 644
            echo "                                  ";
            if (twig_test_empty(($context["twitter"] ?? null))) {
                // line 645
                echo "                                    ";
                $context["twitter"] = "https://twitter.com/floridastate";
                // line 646
                echo "                                  ";
            }
            // line 647
            echo "                                  ";
            if (twig_test_empty(($context["youtube"] ?? null))) {
                // line 648
                echo "                                    ";
                $context["youtube"] = "https://www.youtube.com/FloridaState";
                // line 649
                echo "                                  ";
            }
            // line 650
            echo "                                  ";
            if (twig_test_empty(($context["linkedin"] ?? null))) {
                // line 651
                echo "                                    ";
                $context["linkedin"] = "https://www.linkedin.com/edu/school?id=18100";
                // line 652
                echo "                                  ";
            }
            // line 653
            echo "                                  <ul class=\"menu clearfix\">
                                    <li><a href=\"";
            // line 654
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook"] ?? null), 654, $this->source), "html", null, true);
            echo "\" title=\"Like Florida State on Facebook\"
                                           target=\"_blank\"><span class=\"fab fa-facebook\"></span><span class=\"hidden\">Facebook</span></a>
                                    </li>
                                    <li><a href=\"";
            // line 657
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["instagram"] ?? null), 657, $this->source), "html", null, true);
            echo "\" title=\"Follow Florida State on Instagram\"
                                           target=\"_blank\"><span class=\"fab fa-instagram\"></span><span class=\"hidden\">Instagram</span></a>
                                    </li>
                                    <li><a href=\"";
            // line 660
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter"] ?? null), 660, $this->source), "html", null, true);
            echo "\" title=\"Follow Florida State on Twitter\"
                                           target=\"_blank\"><span class=\"fab fa-twitter\"></span><span
                                          class=\"hidden\">Twitter</span></a></li>
                                    <li><a href=\"";
            // line 663
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["youtube"] ?? null), 663, $this->source), "html", null, true);
            echo "\" title=\"Follow Florida State on Youtube\"
                                           target=\"_blank\"><span class=\"fab fa-youtube\"></span><span
                                          class=\"hidden\">YouTube</span></a></li>
                                    <li><a href=\"";
            // line 666
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkedin"] ?? null), 666, $this->source), "html", null, true);
            echo "\" title=\"Connect with Florida State on LinkedIn\"
                                           target=\"_blank\"><span class=\"fab fa-linkedin\"></span><span class=\"hidden\">LinkedIn</span></a>
                                    </li>
                                    <li><a href=\"https://www.fsu.edu/socialmedia/\" title=\"FSU Social Media\"><span class=\"fas fa-plus\"></span><span class=\"hidden\">More FSU Social Media</span></a>
                                    </li>
                                  </ul>
                                </nav>
                              ";
        } else {
            // line 674
            echo "                                <nav class=\"nav-social nav-icons\">
                                    ";
            // line 675
            if (twig_test_empty(($context["facebook"] ?? null))) {
                // line 676
                echo "                                        ";
                $context["facebook"] = "https://www.facebook.com/FSULibraries";
                // line 677
                echo "                                    ";
            }
            // line 678
            echo "                                    ";
            if (twig_test_empty(($context["instagram"] ?? null))) {
                // line 679
                echo "                                        ";
                $context["instagram"] = "https://instagram.com/fsulibraries/";
                // line 680
                echo "                                    ";
            }
            // line 681
            echo "                                    ";
            if (twig_test_empty(($context["twitter"] ?? null))) {
                // line 682
                echo "                                        ";
                $context["twitter"] = "https://twitter.com/fsulibraries";
                // line 683
                echo "                                    ";
            }
            // line 684
            echo "                                    ";
            if (twig_test_empty(($context["youtube"] ?? null))) {
                // line 685
                echo "                                        ";
                $context["youtube"] = "https://www.youtube.com/fsulibraries";
                // line 686
                echo "                                    ";
            }
            // line 687
            echo "                                    ";
            if (twig_test_empty(($context["linkedin"] ?? null))) {
                // line 688
                echo "                                        ";
                $context["linkedin"] = "https://www.linkedin.com/edu/school?id=18100";
                // line 689
                echo "                                    ";
            }
            // line 690
            echo "                                    ";
            if (twig_test_empty(($context["flickr"] ?? null))) {
                // line 691
                echo "                                        ";
                $context["flickr"] = "https://www.flickr.com/photos/fsulib";
                // line 692
                echo "                                    ";
            }
            // line 693
            echo "                                    ";
            if (twig_test_empty(($context["pinterest"] ?? null))) {
                // line 694
                echo "                                        ";
                $context["pinterest"] = "https://www.pinterest.com/fsulibraries";
                // line 695
                echo "                                    ";
            }
            // line 696
            echo "                                    ";
            if (twig_test_empty(($context["blog"] ?? null))) {
                // line 697
                echo "                                        ";
                $context["blog"] = "https://fsulib.wordpress.com";
                // line 698
                echo "                                    ";
            }
            // line 699
            echo "                                    <ul class=\"menu clearfix\">
                                        <li><a href=\"";
            // line 700
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook"] ?? null), 700, $this->source), "html", null, true);
            echo "\" title=\"Like Florida State on Facebook\"
                                               target=\"_blank\"><span class=\"fa fa-facebook\"></span><span class=\"hidden\">Facebook</span></a>
                                        </li>
                                        <li><a href=\"";
            // line 703
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["instagram"] ?? null), 703, $this->source), "html", null, true);
            echo "\" title=\"Follow Florida State on Instagram\"
                                               target=\"_blank\"><span class=\"fa fa-instagram\"></span><span class=\"hidden\">Instagram</span></a>
                                        </li>
                                        <li><a href=\"";
            // line 706
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter"] ?? null), 706, $this->source), "html", null, true);
            echo "\" title=\"Follow Florida State on Twitter\"
                                               target=\"_blank\"><span class=\"fa fa-twitter\"></span><span
                                                        class=\"hidden\">Twitter</span></a></li>
                                        <li><a href=\"";
            // line 709
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["youtube"] ?? null), 709, $this->source), "html", null, true);
            echo "\" title=\"Follow Florida State on Youtube\"
                                               target=\"_blank\"><span class=\"fa fa-youtube\"></span><span
                                                        class=\"hidden\">YouTube</span></a></li>
                                        <li><a href=\"";
            // line 712
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["flickr"] ?? null), 712, $this->source), "html", null, true);
            echo "\" title=\"Connect with Florida State on Flickr\"
                                               target=\"_blank\"><span class=\"fa fa-flickr\"></span><span class=\"hidden\">Flickr</span></a>
                                        </li>
                                        <li><a href=\"";
            // line 715
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pinterest"] ?? null), 715, $this->source), "html", null, true);
            echo "\" title=\"Connect with Florida State on Pinterest\"
                                               target=\"_blank\"><span class=\"fa fa-pinterest\"></span><span class=\"hidden\">Pinterest</span></a>
                                        </li>
                                        <li><a href=\"";
            // line 718
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["blog"] ?? null), 718, $this->source), "html", null, true);
            echo "\" title=\"Connect with Florida State on our blog\"
                                               target=\"_blank\"><span class=\"fa fa-rss\"></span><span class=\"hidden\">Blog</span></a>
                                        </li>
                                    </ul>
                                </nav>
                              ";
        }
        // line 724
        echo "                            </div>

                        </div>
                    </div>

                </div>
            </div>
            <div class=\"clearfix\"></div>
        </div>
    </footer>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/fsu_strata/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1295 => 724,  1286 => 718,  1280 => 715,  1274 => 712,  1268 => 709,  1262 => 706,  1256 => 703,  1250 => 700,  1247 => 699,  1244 => 698,  1241 => 697,  1238 => 696,  1235 => 695,  1232 => 694,  1229 => 693,  1226 => 692,  1223 => 691,  1220 => 690,  1217 => 689,  1214 => 688,  1211 => 687,  1208 => 686,  1205 => 685,  1202 => 684,  1199 => 683,  1196 => 682,  1193 => 681,  1190 => 680,  1187 => 679,  1184 => 678,  1181 => 677,  1178 => 676,  1176 => 675,  1173 => 674,  1162 => 666,  1156 => 663,  1150 => 660,  1144 => 657,  1138 => 654,  1135 => 653,  1132 => 652,  1129 => 651,  1126 => 650,  1123 => 649,  1120 => 648,  1117 => 647,  1114 => 646,  1111 => 645,  1108 => 644,  1105 => 643,  1102 => 642,  1099 => 641,  1096 => 640,  1093 => 639,  1091 => 638,  1088 => 637,  1086 => 636,  1069 => 621,  1063 => 619,  1057 => 615,  1055 => 614,  1047 => 608,  1042 => 605,  1040 => 604,  1038 => 571,  1035 => 569,  1032 => 567,  1029 => 565,  1024 => 562,  1018 => 560,  1016 => 559,  1012 => 557,  1009 => 556,  1006 => 554,  1001 => 551,  995 => 549,  993 => 548,  989 => 546,  986 => 545,  983 => 543,  978 => 540,  972 => 538,  970 => 537,  965 => 534,  963 => 533,  958 => 530,  956 => 529,  952 => 528,  949 => 527,  946 => 526,  943 => 524,  940 => 516,  937 => 515,  935 => 514,  933 => 513,  928 => 509,  926 => 508,  919 => 504,  916 => 503,  913 => 502,  910 => 500,  908 => 499,  902 => 496,  896 => 493,  893 => 492,  890 => 491,  887 => 489,  885 => 488,  879 => 485,  873 => 482,  867 => 479,  864 => 478,  861 => 477,  858 => 475,  856 => 474,  852 => 472,  850 => 471,  846 => 470,  840 => 467,  837 => 466,  834 => 465,  832 => 464,  828 => 462,  823 => 457,  820 => 456,  818 => 455,  816 => 454,  814 => 453,  810 => 451,  808 => 450,  804 => 449,  796 => 446,  790 => 443,  786 => 441,  783 => 440,  780 => 438,  778 => 437,  774 => 435,  772 => 434,  768 => 433,  762 => 430,  756 => 427,  750 => 424,  746 => 422,  743 => 421,  741 => 420,  739 => 419,  733 => 416,  727 => 413,  721 => 410,  718 => 409,  715 => 408,  711 => 405,  707 => 402,  705 => 401,  704 => 400,  703 => 399,  702 => 398,  701 => 397,  700 => 396,  699 => 395,  698 => 394,  697 => 393,  696 => 392,  695 => 391,  694 => 390,  693 => 389,  692 => 388,  691 => 387,  690 => 386,  689 => 385,  688 => 384,  686 => 383,  683 => 382,  680 => 381,  678 => 380,  677 => 379,  676 => 378,  674 => 377,  666 => 372,  659 => 368,  655 => 366,  653 => 365,  646 => 364,  642 => 363,  635 => 356,  632 => 355,  628 => 354,  618 => 340,  610 => 336,  606 => 335,  599 => 324,  596 => 323,  592 => 322,  586 => 315,  583 => 314,  579 => 313,  572 => 308,  568 => 307,  561 => 301,  557 => 300,  550 => 294,  546 => 293,  539 => 287,  535 => 286,  528 => 268,  525 => 267,  521 => 266,  514 => 259,  511 => 258,  507 => 257,  500 => 251,  497 => 250,  493 => 249,  485 => 237,  481 => 235,  477 => 234,  471 => 347,  468 => 346,  465 => 335,  463 => 334,  456 => 329,  453 => 328,  450 => 327,  447 => 322,  444 => 321,  441 => 320,  437 => 317,  434 => 313,  431 => 311,  428 => 310,  425 => 307,  422 => 306,  419 => 304,  416 => 303,  413 => 300,  410 => 299,  407 => 297,  404 => 296,  401 => 293,  398 => 292,  395 => 290,  392 => 289,  389 => 286,  386 => 285,  380 => 282,  378 => 280,  377 => 279,  376 => 278,  375 => 277,  373 => 276,  369 => 273,  366 => 272,  363 => 271,  360 => 266,  357 => 265,  354 => 264,  352 => 263,  349 => 262,  346 => 257,  343 => 256,  341 => 255,  338 => 254,  335 => 249,  332 => 248,  325 => 242,  322 => 241,  319 => 234,  317 => 233,  309 => 231,  305 => 230,  289 => 216,  285 => 214,  281 => 211,  272 => 205,  268 => 203,  265 => 202,  261 => 200,  254 => 196,  244 => 189,  240 => 188,  229 => 182,  221 => 177,  192 => 151,  184 => 146,  142 => 107,  118 => 86,  109 => 80,  105 => 79,  101 => 77,  99 => 75,  98 => 74,  96 => 73,  92 => 72,  88 => 363,  83 => 360,  79 => 354,  77 => 353,  72 => 350,  70 => 230,  67 => 228,  64 => 72,  62 => 70,  60 => 69,  58 => 68,  56 => 67,  54 => 66,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/fsu_strata/templates/page.html.twig", "/var/sites/www/web/themes/custom/fsu_strata/templates/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 66, "block" => 72, "if" => 353);
        static $filters = array("clean_class" => 75, "escape" => 79, "t" => 205, "raw" => 410);
        static $functions = array("render_var" => 68, "render_fsu_region" => 151);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'if'],
                ['clean_class', 'escape', 't', 'raw'],
                ['render_var', 'render_fsu_region']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
