<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_125ed55d24b1afd16037d35b45f1f331ee52826f0f221380ee78f14e07d2943d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@WebProfiler/Profiler/layout.html.twig");

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
    }

    // line 6
    public function block_menu($context, array $blocks = array())
    {
        // line 7
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAMAAABEpIrGAAABDlBMVEU/Pz////////////////////////////////////////////////////////////////////+qqqr///////////+kpKT///////////////////////////////////+Kior///////////+Ghob///////9kZGT///////////////////////9bW1v///9aWlpZWVn////t7e3////m5ub///9cXFxZWVn////////////////////KysrNzc3///9tbW1WVlZTU1NwcHCnp6dgYGCBgYGZmZl3d3dLS0tMTEyNjY2Tk5NJSUlFRUVERERZWVlCQkJVVVVAQEBCQkJUVFRVVVU/Pz9ERER+LwjMAAAAWHRSTlMAAQIDBQYHCAkLDQ4VFhscHyAiIiMlJjAyNDY3ODk9P0BAREpMTlBdXl9rb3BzdHl6gICChIyPlaOmqKuusLm6v8HFzM3X2tzd4ePn6Onq8vb5+vv9/f3+EYS6xwAAAQFJREFUeNrN0dlSwkAQBdAbA2FTQIIsAmJEA5qIiIoim8oibigI0vz/jygFZEwIw4sP3reeOtVTdRt/G6kwHBYkDvC/EL0HOCBGP4lzwN4UHJGRrMMClOmrzsDH/oYNKBLLc0gA4MwvZtUK6MELiIeDxagvgY4MIdIzxqIVfF6F4WvSSjBpZHyQW6tBO7clIHjRNwO9dDdP5UQWAc9BfWICalSZZzfgBCBsHndNQIEl4o5Wna0s6UYZROcSO3IwMVsZVX9Xfe0CAF7VN+414N7PB68aH7xdxm2+YEXVzmJuLANWVHLbBXvAivqnID0iGqU5IPU0/npMckD49LasyTDlG31Ah7wRFiUBAAAAAElFTkSuQmCC\" alt=\"Routing\"></span>
    <strong>Routing</strong>
</span>
";
    }

    // line 13
    public function block_panel($context, array $blocks = array())
    {
        // line 14
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => $this->getContext($context, "token"))));
        echo "
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1077 => 657,  1073 => 656,  1069 => 654,  1064 => 651,  1055 => 648,  1051 => 647,  1048 => 646,  1044 => 645,  1035 => 639,  1026 => 633,  1023 => 632,  1021 => 631,  1018 => 630,  1013 => 627,  1004 => 624,  1000 => 623,  997 => 622,  993 => 621,  984 => 615,  975 => 609,  972 => 608,  970 => 607,  967 => 606,  963 => 604,  959 => 602,  955 => 600,  947 => 597,  941 => 595,  937 => 593,  935 => 592,  930 => 590,  926 => 589,  923 => 588,  919 => 587,  911 => 581,  909 => 580,  905 => 579,  896 => 573,  893 => 572,  891 => 571,  888 => 570,  884 => 568,  880 => 566,  874 => 562,  870 => 560,  864 => 558,  862 => 557,  854 => 552,  848 => 548,  844 => 546,  838 => 544,  836 => 543,  830 => 539,  828 => 538,  824 => 537,  815 => 531,  812 => 530,  810 => 529,  807 => 528,  800 => 523,  796 => 521,  790 => 519,  788 => 518,  780 => 513,  774 => 509,  770 => 507,  764 => 505,  762 => 504,  754 => 499,  745 => 493,  742 => 492,  740 => 491,  737 => 490,  732 => 487,  724 => 484,  718 => 482,  705 => 480,  702 => 479,  698 => 477,  696 => 476,  692 => 474,  686 => 472,  682 => 470,  678 => 468,  676 => 467,  671 => 465,  668 => 464,  664 => 463,  655 => 457,  646 => 451,  642 => 449,  640 => 448,  636 => 446,  628 => 444,  626 => 443,  622 => 442,  616 => 440,  603 => 439,  591 => 436,  587 => 434,  578 => 432,  574 => 431,  565 => 430,  563 => 429,  559 => 427,  553 => 425,  551 => 424,  546 => 423,  542 => 421,  536 => 419,  534 => 418,  530 => 417,  527 => 416,  514 => 415,  297 => 200,  280 => 194,  276 => 193,  271 => 190,  251 => 182,  403 => 136,  391 => 133,  382 => 131,  377 => 129,  371 => 127,  359 => 123,  356 => 122,  347 => 119,  333 => 115,  328 => 113,  324 => 112,  313 => 110,  293 => 198,  281 => 98,  274 => 96,  249 => 181,  237 => 91,  234 => 90,  232 => 89,  210 => 77,  186 => 72,  180 => 70,  161 => 58,  155 => 55,  152 => 54,  462 => 202,  449 => 198,  446 => 197,  441 => 196,  439 => 195,  431 => 189,  429 => 188,  422 => 184,  415 => 180,  408 => 176,  401 => 135,  394 => 134,  380 => 160,  373 => 156,  361 => 146,  351 => 141,  348 => 140,  342 => 137,  338 => 116,  335 => 134,  329 => 131,  325 => 129,  323 => 128,  320 => 127,  315 => 111,  303 => 122,  300 => 121,  289 => 196,  286 => 112,  275 => 105,  270 => 102,  267 => 101,  262 => 188,  256 => 96,  248 => 94,  233 => 87,  226 => 84,  216 => 79,  213 => 78,  207 => 76,  200 => 72,  197 => 71,  194 => 70,  191 => 69,  181 => 65,  178 => 64,  172 => 68,  165 => 60,  153 => 56,  150 => 55,  81 => 23,  367 => 339,  353 => 121,  350 => 120,  308 => 109,  306 => 286,  20 => 1,  113 => 38,  104 => 31,  100 => 36,  97 => 41,  127 => 60,  110 => 22,  90 => 26,  76 => 27,  53 => 12,  65 => 11,  206 => 62,  185 => 66,  84 => 24,  134 => 47,  129 => 21,  124 => 18,  114 => 36,  70 => 19,  58 => 14,  77 => 20,  34 => 5,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 199,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 141,  409 => 132,  407 => 138,  402 => 130,  398 => 129,  393 => 126,  387 => 164,  384 => 121,  381 => 120,  379 => 119,  374 => 128,  368 => 126,  365 => 125,  362 => 124,  360 => 109,  355 => 143,  341 => 117,  337 => 103,  322 => 101,  314 => 99,  312 => 124,  309 => 97,  305 => 108,  298 => 120,  294 => 90,  285 => 100,  283 => 88,  278 => 106,  268 => 85,  264 => 84,  258 => 187,  252 => 80,  247 => 78,  241 => 90,  229 => 85,  220 => 81,  214 => 69,  177 => 69,  169 => 46,  140 => 55,  132 => 51,  128 => 42,  107 => 36,  61 => 15,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 80,  219 => 76,  217 => 75,  208 => 68,  204 => 75,  179 => 69,  159 => 57,  143 => 56,  135 => 46,  119 => 40,  102 => 33,  71 => 13,  67 => 18,  63 => 21,  59 => 11,  201 => 74,  196 => 56,  183 => 71,  171 => 61,  166 => 71,  163 => 62,  158 => 79,  156 => 58,  151 => 63,  142 => 59,  138 => 47,  136 => 56,  121 => 31,  117 => 37,  105 => 34,  91 => 25,  62 => 12,  49 => 14,  94 => 34,  89 => 30,  85 => 23,  75 => 18,  68 => 12,  56 => 11,  28 => 3,  87 => 32,  93 => 27,  88 => 24,  78 => 19,  46 => 13,  27 => 3,  21 => 2,  38 => 7,  26 => 6,  24 => 2,  44 => 9,  31 => 4,  25 => 35,  19 => 1,  79 => 21,  72 => 17,  69 => 16,  47 => 11,  40 => 8,  37 => 6,  22 => 2,  246 => 93,  157 => 56,  145 => 46,  139 => 63,  131 => 61,  123 => 42,  120 => 38,  115 => 43,  111 => 28,  108 => 33,  101 => 30,  98 => 34,  96 => 30,  83 => 31,  74 => 27,  66 => 25,  55 => 13,  52 => 12,  50 => 15,  43 => 9,  41 => 8,  35 => 6,  32 => 5,  29 => 3,  209 => 82,  203 => 73,  199 => 67,  193 => 55,  189 => 71,  187 => 84,  182 => 66,  176 => 63,  173 => 47,  168 => 61,  164 => 44,  162 => 59,  154 => 58,  149 => 51,  147 => 51,  144 => 47,  141 => 48,  133 => 45,  130 => 46,  125 => 41,  122 => 43,  116 => 39,  112 => 42,  109 => 34,  106 => 45,  103 => 32,  99 => 31,  95 => 27,  92 => 28,  86 => 28,  82 => 21,  80 => 29,  73 => 20,  64 => 13,  60 => 20,  57 => 39,  54 => 19,  51 => 13,  48 => 16,  45 => 10,  42 => 11,  39 => 10,  36 => 7,  33 => 4,  30 => 3,);
    }
}