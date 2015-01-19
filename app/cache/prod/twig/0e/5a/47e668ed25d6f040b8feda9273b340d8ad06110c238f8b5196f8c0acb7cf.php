<?php

/* ::mobile.html.twig */
class __TwigTemplate_0e5a47e668ed25d6f040b8feda9273b340d8ad06110c238f8b5196f8c0acb7cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'javascript' => array($this, 'block_javascript'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'mobilePagejavascript' => array($this, 'block_mobilePagejavascript'),
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'footerjavascript' => array($this, 'block_footerjavascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
\t\t<meta http-equiv=\"content-type\" content=\"text/html; charset=UTF-8\" />
\t\t<meta name=\"viewport\" content=\"width=device-width,initial-scale=1.0,user-scalable=no\"/>
\t\t<meta name=\"application-name\" content=\"EnBaby\"/>
      <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title> 
      <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
      <script src=\"http://libs.baidu.com/jquery/2.0.3/jquery.min.js\"></script>
\t\t";
        // line 10
        $this->displayBlock('javascript', $context, $blocks);
        echo "  
\t\t<script src=\"/js/jquery.mobile-1.4.2.min.js\"></script>
\t\t<link rel=\"stylesheet\" href=\"/js/jquery.mobile-1.4.2.min.css\">
\t\t";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "\t\t
    </head>
    <body>
\t\t<div data-role=\"page\"  id=\"mobilePage\">
\t\t\t";
        // line 18
        $this->displayBlock('mobilePagejavascript', $context, $blocks);
        echo " 
\t\t\t
\t\t\t<div data-role=\"header\" data-theme=\"b\">
\t\t\t\t";
        // line 21
        $this->displayBlock('header', $context, $blocks);
        // line 22
        echo "\t\t\t</div>
\t\t\t<div data-role=\"content\">
\t\t\t\t";
        // line 24
        $this->displayBlock('content', $context, $blocks);
        // line 25
        echo "\t\t\t</div>

\t\t\t<div data-role=\"footer\" data-theme=\"b\">
\t\t\t\t";
        // line 28
        $this->displayBlock('footer', $context, $blocks);
        // line 29
        echo "\t\t\t</div>
\t\t</div> 
\t\t
\t\t<div data-role=\"page\" id=\"declarePage\" >
\t\t\t<div data-role=\"header\" data-theme=\"b\">
\t\t\t\t<h1>申明</h1>
\t\t\t</div>
\t\t\t<div data-role=\"content\">
\t\t\t\t<p>本站所使用音频均来源于网络搜索及网友上传,仅供学习外语之用，禁止用作任何商业盈利行为</p>
\t\t\t\t<p>本站音频仅为配合外语教学使用，为配合阅读，请您购买正版书籍。</p>
\t\t\t\t<p>如您认为本站页面信息侵犯了您的权益，请附上版权证明邮件告知，在收到邮件后24小时内删除</p>
\t\t\t\t<p>我们的邮箱:service@enbaby.net</p>
\t\t\t</div>

\t\t\t<div data-role=\"footer\">
\t\t\t\t
\t\t\t</div>
\t\t</div>  \t\t
\t\t";
        // line 47
        $this->displayBlock('footerjavascript', $context, $blocks);
        echo "  
\t\t<script src=\"http://s11.cnzz.com/z_stat.php?id=1000502422&web_id=1000502422\" language=\"JavaScript\"></script>
    </body>
</html>
";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 10
    public function block_javascript($context, array $blocks = array())
    {
    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 18
    public function block_mobilePagejavascript($context, array $blocks = array())
    {
    }

    // line 21
    public function block_header($context, array $blocks = array())
    {
    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
    }

    // line 28
    public function block_footer($context, array $blocks = array())
    {
    }

    // line 47
    public function block_footerjavascript($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::mobile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 47,  139 => 28,  119 => 13,  99 => 47,  64 => 21,  103 => 24,  79 => 29,  54 => 14,  31 => 3,  549 => 162,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 143,  483 => 142,  473 => 134,  469 => 132,  466 => 131,  460 => 130,  455 => 129,  450 => 126,  444 => 122,  441 => 121,  437 => 120,  434 => 119,  429 => 116,  423 => 112,  420 => 111,  416 => 110,  413 => 109,  408 => 106,  394 => 105,  390 => 103,  375 => 101,  365 => 99,  362 => 98,  359 => 97,  355 => 95,  348 => 91,  344 => 90,  330 => 89,  327 => 88,  321 => 86,  307 => 85,  302 => 84,  295 => 81,  287 => 80,  279 => 78,  256 => 73,  251 => 71,  239 => 69,  231 => 68,  219 => 67,  201 => 66,  143 => 49,  138 => 44,  134 => 24,  131 => 42,  122 => 37,  117 => 36,  108 => 7,  102 => 28,  92 => 25,  84 => 19,  72 => 25,  69 => 17,  51 => 13,  48 => 7,  35 => 7,  29 => 3,  312 => 96,  308 => 94,  293 => 92,  285 => 90,  281 => 88,  277 => 86,  274 => 85,  271 => 77,  264 => 74,  261 => 81,  257 => 79,  253 => 77,  249 => 76,  247 => 70,  237 => 73,  204 => 69,  198 => 65,  194 => 64,  150 => 54,  147 => 51,  127 => 41,  112 => 32,  96 => 25,  76 => 19,  71 => 17,  227 => 92,  224 => 91,  221 => 90,  207 => 70,  197 => 74,  195 => 65,  192 => 72,  189 => 61,  186 => 60,  181 => 67,  178 => 61,  173 => 58,  162 => 58,  158 => 56,  155 => 55,  152 => 55,  142 => 52,  136 => 44,  133 => 43,  130 => 42,  120 => 40,  105 => 31,  75 => 24,  53 => 19,  114 => 10,  109 => 31,  106 => 25,  101 => 19,  85 => 22,  77 => 28,  67 => 15,  28 => 4,  110 => 20,  100 => 27,  89 => 16,  65 => 14,  63 => 13,  58 => 18,  34 => 4,  98 => 21,  88 => 17,  80 => 15,  78 => 25,  46 => 12,  44 => 10,  60 => 21,  40 => 6,  27 => 1,  39 => 8,  36 => 7,  32 => 4,  55 => 15,  43 => 7,  26 => 6,  24 => 4,  22 => 2,  57 => 11,  50 => 13,  47 => 7,  38 => 6,  25 => 5,  19 => 1,  232 => 72,  226 => 71,  222 => 76,  215 => 73,  211 => 84,  208 => 70,  202 => 68,  196 => 64,  193 => 63,  187 => 62,  183 => 62,  180 => 59,  171 => 54,  166 => 51,  163 => 50,  160 => 49,  157 => 48,  149 => 42,  146 => 41,  140 => 46,  137 => 37,  129 => 21,  124 => 18,  121 => 24,  118 => 36,  115 => 39,  111 => 32,  107 => 28,  104 => 28,  97 => 24,  93 => 18,  90 => 21,  81 => 14,  70 => 24,  66 => 22,  62 => 11,  59 => 13,  56 => 12,  52 => 14,  49 => 9,  45 => 6,  41 => 7,  37 => 5,  33 => 4,  30 => 3,);
    }
}
