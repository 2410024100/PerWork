<?php

/* doc.html */
class __TwigTemplate_5e1a56fced086f438bc7d002e66abc3f832df26c2720f34d4f10d38c301ba736 extends Twig_Template
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
        // line 1
        echo "<!DOCTYPE html>
<!--[if IE 8]> <html lang=\"en\" class=\"ie8\"> <![endif]-->
<!--[if IE 9]> <html lang=\"en\" class=\"ie9\"> <![endif]-->
<!--[if !IE]><!--> <html lang=\"en\"> <!--<![endif]-->
<head>
    <title>PerMVC Introduction</title>

    <!-- Meta -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <!-- Favicon -->
    <link rel=\"shortcut icon\" href=\"../favicon.ico\">

    <!-- CSS Global Compulsory -->
    <link rel=\"stylesheet\" href=\"../public/plugins/bootstrap/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"../public/css/docs.css\">
    <link rel=\"stylesheet\" href=\"../public/plugins/prism/prism.css\">

    <!-- CSS Implementing Plugins -->
    <link rel=\"stylesheet\" href=\"../public/plugins/line-icons/line-icons.css\">
    <link rel=\"stylesheet\" href=\"../public/plugins/font-awesome/css/font-awesome.min.css\">
</head>

<body>
<!-- Sidebar -->
<div class=\"page-wrap\">
    <div class=\"aside\" id=\"sidebar\">
        <h1>PerMVC</h1>
        <p>Documentation v1.0</p>
        <hr>
        <ul class=\"list-unstyled\">
            <li><a href=\"#scroll_overview\">Brief Introduction</a></li>
            <li><a href=\"#scroll_main\">Main Function</a></li>
            <li><a href=\"#scroll_misc\">Route</a></li>
            <li><a href=\"#scroll_nav\">Model</a></li>
            <li><a href=\"#scroll_theme\">Views</a></li>
            <li><a href=\"#scroll_css\">Excerption</a></li>
            <li><a href=\"#scroll_js\">Log</a></li>
            <li><a href=\"#scroll_changelog\">Composer</a></li>
        </ul>
    </div>
</div>
<!-- End Sidebar -->

<div class=\"content\">
    <div class=\"container-full\">
\t<div class=\"row\">
        <div class=\"col-lg-12\">
            <!--/overview -->
          \t  <div id=\"scroll_overview\" class=\"margin-bottom-60\">
                  <h2>Brief Introduction</h2>
                  <hr>
                  <p>It has been a long time for me to build a framework by myself,since that  i started.</p>
                  <p>Named this project PerMVC(means personal MVC),haha~ you konw.</p>
                  <p>Below is the struction</p>
                  <h3><i class=\"fa fa-folder fa-2x color-blue\"></i> PerMVC</h3>
                  <ul class=\"list-unstyled css-files\">
                      <li>----<i class=\"fa fa-folder\"></i> <strong>app:</strong>
                        <ul class=\"list-unstyled css-files margin-left-50\">
                            <li>----<i class=\"fa fa-folder\"></i> <strong>ctrl:</strong>controller放置文件夹</li>
                            <li>----<i class=\"fa fa-folder\"></i> <strong>views:</strong>View页面放置文件夹</li>
                        </ul>
                      </li>
                      <li>----<i class=\"fa fa-folder\"></i> <strong>core</strong>
                            <ul class=\"list-unstyled css-files margin-left-50\">
                                <li>----<i class=\"fa fa-folder\"></i> <strong>common:</strong>公共函数库</li>
                                <li>----<i class=\"fa fa-folder\"></i> <strong>lib:</strong>框架基础类库</li>
                                <li>---- &nbsp;<code>coreZ.php</code>核心文件</li>
                            </ul>
                      </li>
                      <li>----<i class=\"fa fa-folder\"></i> <strong>public:</strong>
                            <ul class=\"list-unstyled css-files margin-left-50\">
                                <li>----<i class=\"fa fa-folder\"></i> <strong>css:</strong>样式文件放置</li>
                                <li>----<i class=\"fa fa-folder\"></i> <strong>imgs:</strong>图片放置</li>
                                <li>----<i class=\"fa fa-folder\"></i> <strong>js:</strong>javascript文件放置</li>
                                <li>----<i class=\"fa fa-folder\"></i> <strong>plugins:</strong>第三方插件</li>
                            </ul>
                      </li>
                      <li>----<i class=\"fa fa-folder\"></i> <strong>temp:</strong> 缓存文件夹</li>
                      <li>----<i class=\"fa fa-folder\"></i> <strong>vendor:</strong>composer加载类库放置文件</li>
                      <li>---- &nbsp;<code>.htaccess</code></li>
                      <li>---- &nbsp;<code>composer.json</code></li>
                      <li>---- &nbsp;<code>composer.lock</code></li>
                      <li>---- &nbsp;<code>favicon.ico</code></li>
                      <li>---- &nbsp;<code>index.php</code></li>
                  </ul>
                  <div class=\"margin-bottom-30\"></div>
            </div>
            <!--/overview-->

            <!-- /main function -->
            <div id=\"scroll_main\" class=\"margin-bottom-70\">
                <h2>Main Function <a href=\"#top\">top <i class=\"fa fa-angle-up\"></i></a></h2>
                <hr>
                <h3> Function Lists</h3>
                <br>
                <ul class=\"margin-bottom-40\">
                  <li>function1</li>
                  <li>function2</li>
                  <li>function3</li>
                  <li>function4</li>
                  <li>function5</li>
                  <li>function6</li>
                  <li>function7</li>
                </ul>
                <br>
            </div>
            <!-- /main function -->

            <!-- /route -->
            <div id=\"scroll_misc\" class=\"margin-bottom-60\">
                <h2>Route</h2>
                <hr>
                <p>此处为路由描述段落</p>
            </div>
            <!-- /route -->

\t\t      \t<!--/model -->
            <div id=\"scroll_nav\" class=\"margin-bottom-70\">
                <h2>Model</h2>
                <hr>
                <p>此处为模型描述段落</p>
            </div>
            <!--/model -->
            <div class=\"clearfix margin-bottom-50\"></div>

             <!--/view-->
            <div id=\"scroll_theme\" class=\"theme\">
                <h2>Views</h2>
                <hr>
                <p>view描述段落</p>
                <div class=\"clearfix margin-bottom-40\"></div>
             <div class=\"clearfix margin-bottom-60\"></div>
            </div>
              <!--/view-->

            <div class=\"clearfix margin-bottom-60\"></div>

            <!-- /Exception -->
            <div id=\"scroll_css\" class=\"margin-bottom-40\">
                <h2>Excerption</h2>
                <hr>
                <p>异常捕获</p>
            <div class=\"clearfix margin-bottom-50\"></div>
            </div>
            <!-- /Exception -->

            <!-- /Log -->
            <div id=\"scroll_js\" class=\"table-credits margin-bottom-70\">
                <h2>Log</h2>
                <hr>
                <p>All plugins are located in <code>assets/plugins/..</code></p>
            </div>
            <div class=\"margin-bottom-40\"></div>
            <!-- /Log -->

\t\t       \t<!--/exception-->
            <div id=\"scroll_changelog\" class=\"changelog margin-bottom-70\">
                <h2>Composer<a href=\"#top\">top <i class=\"fa fa-angle-up\"></i></a></h2>
                <hr>
                <p>composer使用<code>assets/plugins/..</code></p>
            </div>
          \t<!--/exception-->
\t\t\t<!-- Documentation -->
            <div id=\"scroll_end\">
                <h2>End of Documentation <a href=\"#top\">top <i class=\"fa fa-angle-up\"></i></a></h2>
                <hr>
                <p>With much love <i class=\"fa fa-heart color-red\"></i> <strong>zhht_you</strong></p>
            </div><!--/end-->
            <!-- End of Documentation -->
        </div><!--/content-->

    </div><!--/row-->
</div><!--/container-->
</div>

<!-- JS Global Compulsory -->
<script type=\"text/javascript\" src=\"../public/plugins/jquery-1.10.2.min.js\"></script>
<script type=\"text/javascript\" src=\"../public/plugins/jquery-migrate-1.2.1.min.js\"></script>
<script type=\"text/javascript\" src=\"../public/plugins/bootstrap/js/bootstrap.min.js\"></script>

<!-- JS Implementing Plugins -->
<script type=\"text/javascript\" src=\"../public/plugins/back-to-top.js\"></script>
<script type=\"text/javascript\" src=\"../public/plugins/prism/prism.js\"></script>
<script type=\"text/javascript\" src=\"../public/plugins/smoothScroll.js\"></script>

<script>
    \$(function() {
      \$('a[href*=#scroll_]:not([href=#scroll_])').click(function() {
        if (location.pathname.replace(/^\\//,'') == this.pathname.replace(/^\\//,'') && location.hostname == this.hostname) {

          var target = \$(this.hash);
          target = target.length ? target : \$('[name=' + this.hash.slice(1) +']');
          if (target.length) {
            \$('html,body').animate({
              scrollTop: target.offset().top
            }, 1000);
            return false;
          }
        }
      });
    });
</script>

<!--[if lt IE 9]>
    <script src=\"../assets/js/respond.js\"></script>
<![endif]-->

</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "doc.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<!--[if IE 8]> <html lang=\"en\" class=\"ie8\"> <![endif]-->
<!--[if IE 9]> <html lang=\"en\" class=\"ie9\"> <![endif]-->
<!--[if !IE]><!--> <html lang=\"en\"> <!--<![endif]-->
<head>
    <title>PerMVC Introduction</title>

    <!-- Meta -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <!-- Favicon -->
    <link rel=\"shortcut icon\" href=\"../favicon.ico\">

    <!-- CSS Global Compulsory -->
    <link rel=\"stylesheet\" href=\"../public/plugins/bootstrap/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"../public/css/docs.css\">
    <link rel=\"stylesheet\" href=\"../public/plugins/prism/prism.css\">

    <!-- CSS Implementing Plugins -->
    <link rel=\"stylesheet\" href=\"../public/plugins/line-icons/line-icons.css\">
    <link rel=\"stylesheet\" href=\"../public/plugins/font-awesome/css/font-awesome.min.css\">
</head>

<body>
<!-- Sidebar -->
<div class=\"page-wrap\">
    <div class=\"aside\" id=\"sidebar\">
        <h1>PerMVC</h1>
        <p>Documentation v1.0</p>
        <hr>
        <ul class=\"list-unstyled\">
            <li><a href=\"#scroll_overview\">Brief Introduction</a></li>
            <li><a href=\"#scroll_main\">Main Function</a></li>
            <li><a href=\"#scroll_misc\">Route</a></li>
            <li><a href=\"#scroll_nav\">Model</a></li>
            <li><a href=\"#scroll_theme\">Views</a></li>
            <li><a href=\"#scroll_css\">Excerption</a></li>
            <li><a href=\"#scroll_js\">Log</a></li>
            <li><a href=\"#scroll_changelog\">Composer</a></li>
        </ul>
    </div>
</div>
<!-- End Sidebar -->

<div class=\"content\">
    <div class=\"container-full\">
\t<div class=\"row\">
        <div class=\"col-lg-12\">
            <!--/overview -->
          \t  <div id=\"scroll_overview\" class=\"margin-bottom-60\">
                  <h2>Brief Introduction</h2>
                  <hr>
                  <p>It has been a long time for me to build a framework by myself,since that  i started.</p>
                  <p>Named this project PerMVC(means personal MVC),haha~ you konw.</p>
                  <p>Below is the struction</p>
                  <h3><i class=\"fa fa-folder fa-2x color-blue\"></i> PerMVC</h3>
                  <ul class=\"list-unstyled css-files\">
                      <li>----<i class=\"fa fa-folder\"></i> <strong>app:</strong>
                        <ul class=\"list-unstyled css-files margin-left-50\">
                            <li>----<i class=\"fa fa-folder\"></i> <strong>ctrl:</strong>controller放置文件夹</li>
                            <li>----<i class=\"fa fa-folder\"></i> <strong>views:</strong>View页面放置文件夹</li>
                        </ul>
                      </li>
                      <li>----<i class=\"fa fa-folder\"></i> <strong>core</strong>
                            <ul class=\"list-unstyled css-files margin-left-50\">
                                <li>----<i class=\"fa fa-folder\"></i> <strong>common:</strong>公共函数库</li>
                                <li>----<i class=\"fa fa-folder\"></i> <strong>lib:</strong>框架基础类库</li>
                                <li>---- &nbsp;<code>coreZ.php</code>核心文件</li>
                            </ul>
                      </li>
                      <li>----<i class=\"fa fa-folder\"></i> <strong>public:</strong>
                            <ul class=\"list-unstyled css-files margin-left-50\">
                                <li>----<i class=\"fa fa-folder\"></i> <strong>css:</strong>样式文件放置</li>
                                <li>----<i class=\"fa fa-folder\"></i> <strong>imgs:</strong>图片放置</li>
                                <li>----<i class=\"fa fa-folder\"></i> <strong>js:</strong>javascript文件放置</li>
                                <li>----<i class=\"fa fa-folder\"></i> <strong>plugins:</strong>第三方插件</li>
                            </ul>
                      </li>
                      <li>----<i class=\"fa fa-folder\"></i> <strong>temp:</strong> 缓存文件夹</li>
                      <li>----<i class=\"fa fa-folder\"></i> <strong>vendor:</strong>composer加载类库放置文件</li>
                      <li>---- &nbsp;<code>.htaccess</code></li>
                      <li>---- &nbsp;<code>composer.json</code></li>
                      <li>---- &nbsp;<code>composer.lock</code></li>
                      <li>---- &nbsp;<code>favicon.ico</code></li>
                      <li>---- &nbsp;<code>index.php</code></li>
                  </ul>
                  <div class=\"margin-bottom-30\"></div>
            </div>
            <!--/overview-->

            <!-- /main function -->
            <div id=\"scroll_main\" class=\"margin-bottom-70\">
                <h2>Main Function <a href=\"#top\">top <i class=\"fa fa-angle-up\"></i></a></h2>
                <hr>
                <h3> Function Lists</h3>
                <br>
                <ul class=\"margin-bottom-40\">
                  <li>function1</li>
                  <li>function2</li>
                  <li>function3</li>
                  <li>function4</li>
                  <li>function5</li>
                  <li>function6</li>
                  <li>function7</li>
                </ul>
                <br>
            </div>
            <!-- /main function -->

            <!-- /route -->
            <div id=\"scroll_misc\" class=\"margin-bottom-60\">
                <h2>Route</h2>
                <hr>
                <p>此处为路由描述段落</p>
            </div>
            <!-- /route -->

\t\t      \t<!--/model -->
            <div id=\"scroll_nav\" class=\"margin-bottom-70\">
                <h2>Model</h2>
                <hr>
                <p>此处为模型描述段落</p>
            </div>
            <!--/model -->
            <div class=\"clearfix margin-bottom-50\"></div>

             <!--/view-->
            <div id=\"scroll_theme\" class=\"theme\">
                <h2>Views</h2>
                <hr>
                <p>view描述段落</p>
                <div class=\"clearfix margin-bottom-40\"></div>
             <div class=\"clearfix margin-bottom-60\"></div>
            </div>
              <!--/view-->

            <div class=\"clearfix margin-bottom-60\"></div>

            <!-- /Exception -->
            <div id=\"scroll_css\" class=\"margin-bottom-40\">
                <h2>Excerption</h2>
                <hr>
                <p>异常捕获</p>
            <div class=\"clearfix margin-bottom-50\"></div>
            </div>
            <!-- /Exception -->

            <!-- /Log -->
            <div id=\"scroll_js\" class=\"table-credits margin-bottom-70\">
                <h2>Log</h2>
                <hr>
                <p>All plugins are located in <code>assets/plugins/..</code></p>
            </div>
            <div class=\"margin-bottom-40\"></div>
            <!-- /Log -->

\t\t       \t<!--/exception-->
            <div id=\"scroll_changelog\" class=\"changelog margin-bottom-70\">
                <h2>Composer<a href=\"#top\">top <i class=\"fa fa-angle-up\"></i></a></h2>
                <hr>
                <p>composer使用<code>assets/plugins/..</code></p>
            </div>
          \t<!--/exception-->
\t\t\t<!-- Documentation -->
            <div id=\"scroll_end\">
                <h2>End of Documentation <a href=\"#top\">top <i class=\"fa fa-angle-up\"></i></a></h2>
                <hr>
                <p>With much love <i class=\"fa fa-heart color-red\"></i> <strong>zhht_you</strong></p>
            </div><!--/end-->
            <!-- End of Documentation -->
        </div><!--/content-->

    </div><!--/row-->
</div><!--/container-->
</div>

<!-- JS Global Compulsory -->
<script type=\"text/javascript\" src=\"../public/plugins/jquery-1.10.2.min.js\"></script>
<script type=\"text/javascript\" src=\"../public/plugins/jquery-migrate-1.2.1.min.js\"></script>
<script type=\"text/javascript\" src=\"../public/plugins/bootstrap/js/bootstrap.min.js\"></script>

<!-- JS Implementing Plugins -->
<script type=\"text/javascript\" src=\"../public/plugins/back-to-top.js\"></script>
<script type=\"text/javascript\" src=\"../public/plugins/prism/prism.js\"></script>
<script type=\"text/javascript\" src=\"../public/plugins/smoothScroll.js\"></script>

<script>
    \$(function() {
      \$('a[href*=#scroll_]:not([href=#scroll_])').click(function() {
        if (location.pathname.replace(/^\\//,'') == this.pathname.replace(/^\\//,'') && location.hostname == this.hostname) {

          var target = \$(this.hash);
          target = target.length ? target : \$('[name=' + this.hash.slice(1) +']');
          if (target.length) {
            \$('html,body').animate({
              scrollTop: target.offset().top
            }, 1000);
            return false;
          }
        }
      });
    });
</script>

<!--[if lt IE 9]>
    <script src=\"../assets/js/respond.js\"></script>
<![endif]-->

</body>
</html>
", "doc.html", "D:\\xampp2\\htdocs\\PerMVC\\app\\views\\doc.html");
    }
}
