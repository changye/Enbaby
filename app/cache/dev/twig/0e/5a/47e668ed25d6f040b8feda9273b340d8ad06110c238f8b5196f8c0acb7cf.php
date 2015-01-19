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
        return array (  134 => 24,  129 => 21,  124 => 18,  114 => 10,  70 => 24,  58 => 18,  77 => 28,  34 => 4,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 13,  102 => 32,  71 => 19,  67 => 15,  63 => 15,  59 => 14,  87 => 25,  94 => 28,  89 => 20,  85 => 25,  75 => 17,  68 => 14,  56 => 9,  28 => 3,  38 => 6,  21 => 2,  24 => 4,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 14,  49 => 19,  31 => 3,  26 => 6,  25 => 4,  19 => 1,  93 => 24,  88 => 21,  78 => 21,  46 => 7,  44 => 10,  27 => 1,  79 => 29,  72 => 25,  69 => 25,  47 => 9,  40 => 7,  37 => 10,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 28,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 7,  101 => 32,  98 => 31,  96 => 25,  83 => 25,  74 => 14,  66 => 22,  55 => 15,  52 => 14,  50 => 13,  43 => 8,  41 => 9,  35 => 7,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 47,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 47,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 18,  64 => 21,  60 => 6,  57 => 13,  54 => 12,  51 => 14,  48 => 9,  45 => 17,  42 => 7,  39 => 8,  36 => 5,  33 => 4,  30 => 7,);
    }
}
