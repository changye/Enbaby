<?php

/* ::base.html.twig */
class __TwigTemplate_ba84bdb6253838c1da72af71c24ffa2e425abc8a3ad498e219bfb36f1fcf5bf3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 5,  23 => 1,  65 => 13,  206 => 62,  185 => 49,  84 => 23,  74 => 21,  37 => 4,  139 => 28,  134 => 34,  129 => 21,  124 => 18,  114 => 10,  70 => 24,  58 => 18,  52 => 14,  96 => 25,  77 => 28,  34 => 3,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 46,  140 => 55,  132 => 51,  128 => 49,  111 => 28,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 41,  143 => 56,  135 => 53,  131 => 52,  119 => 13,  108 => 7,  102 => 32,  71 => 20,  67 => 15,  63 => 15,  59 => 6,  47 => 12,  87 => 25,  55 => 15,  94 => 27,  89 => 20,  85 => 25,  79 => 29,  75 => 17,  72 => 25,  68 => 14,  56 => 14,  50 => 13,  41 => 6,  28 => 3,  38 => 5,  21 => 2,  35 => 7,  24 => 4,  201 => 92,  196 => 56,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  123 => 47,  121 => 31,  117 => 44,  115 => 43,  105 => 40,  101 => 32,  91 => 27,  69 => 11,  66 => 22,  62 => 14,  49 => 9,  43 => 7,  31 => 3,  29 => 5,  26 => 6,  25 => 4,  19 => 1,  98 => 31,  93 => 24,  88 => 24,  78 => 21,  46 => 7,  44 => 11,  40 => 7,  32 => 4,  27 => 1,  22 => 2,  209 => 82,  203 => 61,  199 => 67,  193 => 55,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 47,  168 => 72,  164 => 44,  162 => 59,  154 => 58,  149 => 51,  147 => 58,  144 => 47,  141 => 48,  133 => 55,  130 => 41,  125 => 32,  122 => 43,  116 => 29,  112 => 42,  109 => 34,  106 => 33,  103 => 32,  99 => 47,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 22,  73 => 18,  64 => 10,  60 => 11,  57 => 13,  54 => 12,  51 => 11,  48 => 10,  45 => 8,  42 => 10,  39 => 8,  36 => 5,  33 => 6,  30 => 2,);
    }
}
