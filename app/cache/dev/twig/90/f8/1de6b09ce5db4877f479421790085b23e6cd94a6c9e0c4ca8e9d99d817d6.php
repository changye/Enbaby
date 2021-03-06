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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["series"]) ? $context["series"] : $this->getContext($context, "series")));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 9
            echo "\t\t<li data-icon=\"audio\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_series", array("seriesId" => $this->getAttribute((isset($context["s"]) ? $context["s"] : $this->getContext($context, "s")), "Id"))), "html", null, true);
            echo "\" data-transition=\"slide\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["s"]) ? $context["s"] : $this->getContext($context, "s")), "DisplayName"), "html", null, true);
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
        return array (  65 => 13,  206 => 62,  185 => 49,  84 => 23,  134 => 34,  129 => 21,  124 => 18,  114 => 10,  70 => 24,  58 => 18,  77 => 28,  34 => 3,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 46,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 41,  143 => 56,  135 => 53,  119 => 13,  102 => 32,  71 => 20,  67 => 15,  63 => 15,  59 => 15,  87 => 25,  94 => 27,  89 => 20,  85 => 25,  75 => 17,  68 => 14,  56 => 14,  28 => 3,  38 => 5,  21 => 2,  24 => 4,  201 => 92,  196 => 56,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 31,  117 => 44,  105 => 40,  91 => 27,  62 => 14,  49 => 9,  31 => 3,  26 => 6,  25 => 4,  19 => 1,  93 => 24,  88 => 24,  78 => 21,  46 => 7,  44 => 10,  27 => 1,  79 => 29,  72 => 25,  69 => 25,  47 => 9,  40 => 7,  37 => 4,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 28,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 28,  108 => 7,  101 => 32,  98 => 31,  96 => 25,  83 => 25,  74 => 21,  66 => 22,  55 => 15,  52 => 14,  50 => 13,  43 => 7,  41 => 6,  35 => 7,  32 => 4,  29 => 3,  209 => 82,  203 => 61,  199 => 67,  193 => 55,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 47,  168 => 72,  164 => 44,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 47,  141 => 48,  133 => 55,  130 => 41,  125 => 32,  122 => 43,  116 => 29,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 47,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 22,  73 => 18,  64 => 16,  60 => 11,  57 => 13,  54 => 12,  51 => 11,  48 => 10,  45 => 8,  42 => 7,  39 => 8,  36 => 5,  33 => 3,  30 => 2,);
    }
}
