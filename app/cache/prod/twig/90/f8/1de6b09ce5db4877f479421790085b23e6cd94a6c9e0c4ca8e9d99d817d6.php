<?php

/* EnbabyAudioLibBundle:Default:index.html.twig */
class __TwigTemplate_90f81de6b09ce5db4877f479421790085b23e6cd94a6c9e0c4ca8e9d99d817d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::mobile.html.twig");

        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::mobile.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_header($context, array $blocks = array())
    {
        // line 3
        echo "<h1>英贝网</h1>
";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "\t<ul data-role=\"listview\" data-inset=\"true\" data-filter=\"true\" data-filter-placeholder=\"搜索专辑\">
\t\t<li data-role=\"divider\" data-theme=\"b\">专辑</li>
\t\t";
        // line 8
        if (isset($context["series"])) { $_series_ = $context["series"]; } else { $_series_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_series_);
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 9
            echo "\t\t<li data-icon=\"audio\"><a href=\"";
            if (isset($context["s"])) { $_s_ = $context["s"]; } else { $_s_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_series", array("seriesId" => $this->getAttribute($_s_, "Id"))), "html", null, true);
            echo "\" data-transition=\"slide\">";
            if (isset($context["s"])) { $_s_ = $context["s"]; } else { $_s_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_s_, "DisplayName"), "html", null, true);
            echo "</a></li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "\t</ul>
";
    }

    // line 13
    public function block_footer($context, array $blocks = array())
    {
        // line 14
        echo "<h1>英贝网</h1>
";
    }

    public function getTemplateName()
    {
        return "EnbabyAudioLibBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 13,  228 => 62,  225 => 61,  217 => 56,  214 => 55,  206 => 49,  191 => 47,  175 => 41,  132 => 31,  126 => 29,  95 => 24,  74 => 20,  144 => 47,  139 => 28,  119 => 13,  99 => 47,  64 => 21,  103 => 24,  79 => 29,  54 => 14,  31 => 3,  549 => 162,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 143,  483 => 142,  473 => 134,  469 => 132,  466 => 131,  460 => 130,  455 => 129,  450 => 126,  444 => 122,  441 => 121,  437 => 120,  434 => 119,  429 => 116,  423 => 112,  420 => 111,  416 => 110,  413 => 109,  408 => 106,  394 => 105,  390 => 103,  375 => 101,  365 => 99,  362 => 98,  359 => 97,  355 => 95,  348 => 91,  344 => 90,  330 => 89,  327 => 88,  321 => 86,  307 => 85,  302 => 84,  295 => 81,  287 => 80,  279 => 78,  256 => 73,  251 => 71,  239 => 69,  231 => 68,  219 => 67,  201 => 66,  143 => 49,  138 => 44,  134 => 24,  131 => 42,  122 => 37,  117 => 36,  108 => 7,  102 => 27,  92 => 25,  84 => 19,  72 => 25,  69 => 17,  51 => 13,  48 => 7,  35 => 7,  29 => 3,  312 => 96,  308 => 94,  293 => 92,  285 => 90,  281 => 88,  277 => 86,  274 => 85,  271 => 77,  264 => 74,  261 => 81,  257 => 79,  253 => 77,  249 => 76,  247 => 70,  237 => 73,  204 => 69,  198 => 65,  194 => 64,  150 => 54,  147 => 34,  127 => 41,  112 => 32,  96 => 25,  76 => 19,  71 => 14,  227 => 92,  224 => 91,  221 => 90,  207 => 70,  197 => 74,  195 => 65,  192 => 72,  189 => 61,  186 => 46,  181 => 67,  178 => 61,  173 => 58,  162 => 58,  158 => 56,  155 => 55,  152 => 55,  142 => 52,  136 => 44,  133 => 43,  130 => 42,  120 => 28,  105 => 31,  75 => 24,  53 => 19,  114 => 10,  109 => 31,  106 => 25,  101 => 19,  85 => 22,  77 => 21,  67 => 15,  28 => 4,  110 => 20,  100 => 27,  89 => 16,  65 => 14,  63 => 11,  58 => 18,  34 => 3,  98 => 21,  88 => 17,  80 => 15,  78 => 25,  46 => 12,  44 => 7,  60 => 15,  40 => 6,  27 => 1,  39 => 8,  36 => 7,  32 => 4,  55 => 15,  43 => 7,  26 => 6,  24 => 4,  22 => 2,  57 => 14,  50 => 9,  47 => 7,  38 => 5,  25 => 5,  19 => 1,  232 => 72,  226 => 71,  222 => 76,  215 => 73,  211 => 84,  208 => 70,  202 => 68,  196 => 64,  193 => 63,  187 => 62,  183 => 62,  180 => 44,  171 => 54,  166 => 51,  163 => 50,  160 => 49,  157 => 48,  149 => 42,  146 => 41,  140 => 46,  137 => 32,  129 => 21,  124 => 18,  121 => 24,  118 => 36,  115 => 39,  111 => 32,  107 => 28,  104 => 28,  97 => 24,  93 => 18,  90 => 23,  81 => 14,  70 => 24,  66 => 16,  62 => 11,  59 => 13,  56 => 12,  52 => 11,  49 => 10,  45 => 8,  41 => 6,  37 => 4,  33 => 3,  30 => 2,);
    }
}
