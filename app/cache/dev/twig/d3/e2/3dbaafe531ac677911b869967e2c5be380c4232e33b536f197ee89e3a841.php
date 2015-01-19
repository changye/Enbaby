<?php

/* WebProfilerBundle:Profiler:toolbar_item.html.twig */
class __TwigTemplate_d3e23dbaafe531ac677911b869967e2c5be380c4232e33b536f197ee89e3a841 extends Twig_Template
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
        if ($this->getContext($context, "link")) {
            // line 2
            echo "    ";
            ob_start();
            // line 3
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => $this->getContext($context, "token"), "panel" => $this->getContext($context, "name"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getContext($context, "icon"), "html", null, true);
            echo "</a>
    ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        }
        // line 6
        echo "<div class=\"sf-toolbar-block\">
     <div class=\"sf-toolbar-icon\">";
        // line 7
        echo twig_escape_filter($this->env, ((array_key_exists("icon", $context)) ? (_twig_default_filter($this->getContext($context, "icon"), "")) : ("")), "html", null, true);
        echo "</div>
     <div class=\"sf-toolbar-info\">";
        // line 8
        echo twig_escape_filter($this->env, ((array_key_exists("text", $context)) ? (_twig_default_filter($this->getContext($context, "text"), "")) : ("")), "html", null, true);
        echo "</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 40,  104 => 37,  100 => 36,  97 => 41,  127 => 60,  110 => 22,  90 => 37,  76 => 28,  53 => 17,  65 => 22,  206 => 62,  185 => 49,  84 => 29,  134 => 34,  129 => 21,  124 => 18,  114 => 10,  70 => 24,  58 => 17,  77 => 25,  34 => 3,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 46,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 23,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 41,  143 => 56,  135 => 62,  119 => 13,  102 => 17,  71 => 20,  67 => 15,  63 => 19,  59 => 22,  201 => 92,  196 => 56,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 79,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 31,  117 => 19,  105 => 18,  91 => 34,  62 => 21,  49 => 13,  94 => 34,  89 => 20,  85 => 32,  75 => 17,  68 => 14,  56 => 11,  28 => 6,  87 => 33,  93 => 38,  88 => 31,  78 => 26,  46 => 12,  27 => 7,  21 => 2,  38 => 6,  26 => 9,  24 => 3,  44 => 10,  31 => 8,  25 => 35,  19 => 1,  79 => 29,  72 => 27,  69 => 26,  47 => 15,  40 => 8,  37 => 5,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 63,  131 => 61,  123 => 59,  120 => 20,  115 => 43,  111 => 28,  108 => 47,  101 => 43,  98 => 31,  96 => 35,  83 => 35,  74 => 27,  66 => 22,  55 => 15,  52 => 14,  50 => 16,  43 => 11,  41 => 10,  35 => 5,  32 => 7,  29 => 3,  209 => 82,  203 => 61,  199 => 67,  193 => 55,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 47,  168 => 72,  164 => 44,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 47,  141 => 48,  133 => 55,  130 => 41,  125 => 32,  122 => 43,  116 => 29,  112 => 42,  109 => 34,  106 => 45,  103 => 32,  99 => 47,  95 => 39,  92 => 21,  86 => 28,  82 => 28,  80 => 29,  73 => 23,  64 => 24,  60 => 20,  57 => 19,  54 => 12,  51 => 11,  48 => 16,  45 => 14,  42 => 8,  39 => 8,  36 => 7,  33 => 6,  30 => 7,);
    }
}
