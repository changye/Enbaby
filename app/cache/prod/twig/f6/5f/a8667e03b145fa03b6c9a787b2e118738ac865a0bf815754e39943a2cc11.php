<?php

/* EnbabyAudioLibBundle:Default:series.html.twig */
class __TwigTemplate_f65fa8667e03b145fa03b6c9a787b2e118738ac865a0bf815754e39943a2cc11 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::mobile.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        if (isset($context["series"])) { $_series_ = $context["series"]; } else { $_series_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_series_, "DisplayName"), "html", null, true);
        echo "
";
    }

    // line 7
    public function block_header($context, array $blocks = array())
    {
        // line 8
        echo "<a href=\"";
        echo $this->env->getExtension('routing')->getPath("_index");
        echo "\" class=\"ui-icon-home ui-btn ui-shadow ui-nodisc-icon  ui-btn-inline ui-btn-icon-left\" data-transition=\"slide\" data-direction=\"reverse\">首页</a>
<h1>专辑：";
        // line 9
        if (isset($context["series"])) { $_series_ = $context["series"]; } else { $_series_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_series_, "DisplayName"), "html", null, true);
        echo "</h1>
";
    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        // line 13
        echo "\t<p><strong>专辑：</strong>";
        if (isset($context["series"])) { $_series_ = $context["series"]; } else { $_series_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_series_, "DisplayName"), "html", null, true);
        echo "</p>
\t<img style=\"width:100%\" src=\"";
        // line 14
        if (isset($context["libLoc"])) { $_libLoc_ = $context["libLoc"]; } else { $_libLoc_ = null; }
        echo twig_escape_filter($this->env, $_libLoc_, "html", null, true);
        if (isset($context["series"])) { $_series_ = $context["series"]; } else { $_series_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_series_, "Snapshot"), "html", null, true);
        echo "\">
\t<p><strong>简介：</strong>";
        // line 15
        if (isset($context["series"])) { $_series_ = $context["series"]; } else { $_series_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_series_, "Description"), "html", null, true);
        echo "</p>
\t<ul data-role=\"listview\" data-inset=\"true\">
\t\t<li data-role=\"divider\" data-theme=\"b\">书目</li>
\t\t";
        // line 18
        if (isset($context["series"])) { $_series_ = $context["series"]; } else { $_series_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_series_, "Books"));
        foreach ($context['_seq'] as $context["_key"] => $context["book"]) {
            // line 19
            echo "\t\t<li><a href=\"";
            if (isset($context["series"])) { $_series_ = $context["series"]; } else { $_series_ = null; }
            if (isset($context["book"])) { $_book_ = $context["book"]; } else { $_book_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_series_book", array("seriesId" => $this->getAttribute($_series_, "Id"), "subId" => $this->getAttribute($_book_, "Id"))), "html", null, true);
            echo "\" data-transition=\"slide\">";
            if (isset($context["book"])) { $_book_ = $context["book"]; } else { $_book_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_book_, "DisplayName"), "html", null, true);
            echo "</a></li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['book'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "\t</ul>
";
    }

    // line 24
    public function block_footer($context, array $blocks = array())
    {
        // line 25
        echo "<h1>";
        if (isset($context["series"])) { $_series_ = $context["series"]; } else { $_series_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_series_, "DisplayName"), "html", null, true);
        echo "</h1>
";
    }

    public function getTemplateName()
    {
        return "EnbabyAudioLibBundle:Default:series.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 24,  79 => 18,  54 => 14,  31 => 3,  549 => 162,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 143,  483 => 142,  473 => 134,  469 => 132,  466 => 131,  460 => 130,  455 => 129,  450 => 126,  444 => 122,  441 => 121,  437 => 120,  434 => 119,  429 => 116,  423 => 112,  420 => 111,  416 => 110,  413 => 109,  408 => 106,  394 => 105,  390 => 103,  375 => 101,  365 => 99,  362 => 98,  359 => 97,  355 => 95,  348 => 91,  344 => 90,  330 => 89,  327 => 88,  321 => 86,  307 => 85,  302 => 84,  295 => 81,  287 => 80,  279 => 78,  256 => 73,  251 => 71,  239 => 69,  231 => 68,  219 => 67,  201 => 66,  143 => 49,  138 => 44,  134 => 43,  131 => 42,  122 => 37,  117 => 36,  108 => 31,  102 => 28,  92 => 25,  84 => 19,  72 => 15,  69 => 17,  51 => 13,  48 => 7,  35 => 5,  29 => 3,  312 => 96,  308 => 94,  293 => 92,  285 => 90,  281 => 88,  277 => 86,  274 => 85,  271 => 77,  264 => 74,  261 => 81,  257 => 79,  253 => 77,  249 => 76,  247 => 70,  237 => 73,  204 => 69,  198 => 65,  194 => 64,  150 => 54,  147 => 51,  127 => 41,  112 => 32,  96 => 25,  76 => 19,  71 => 17,  227 => 92,  224 => 91,  221 => 90,  207 => 70,  197 => 74,  195 => 65,  192 => 72,  189 => 61,  186 => 60,  181 => 67,  178 => 61,  173 => 58,  162 => 58,  158 => 56,  155 => 55,  152 => 55,  142 => 52,  136 => 44,  133 => 43,  130 => 42,  120 => 40,  105 => 31,  75 => 24,  53 => 19,  114 => 22,  109 => 31,  106 => 25,  101 => 19,  85 => 22,  77 => 12,  67 => 15,  28 => 4,  110 => 20,  100 => 27,  89 => 16,  65 => 14,  63 => 13,  58 => 10,  34 => 4,  98 => 21,  88 => 17,  80 => 15,  78 => 25,  46 => 12,  44 => 8,  60 => 21,  40 => 6,  27 => 3,  39 => 7,  36 => 7,  32 => 4,  55 => 15,  43 => 7,  26 => 6,  24 => 4,  22 => 2,  57 => 11,  50 => 7,  47 => 7,  38 => 6,  25 => 5,  19 => 1,  232 => 72,  226 => 71,  222 => 76,  215 => 73,  211 => 84,  208 => 70,  202 => 68,  196 => 64,  193 => 63,  187 => 62,  183 => 62,  180 => 59,  171 => 54,  166 => 51,  163 => 50,  160 => 49,  157 => 48,  149 => 42,  146 => 41,  140 => 46,  137 => 37,  129 => 36,  124 => 35,  121 => 24,  118 => 36,  115 => 39,  111 => 32,  107 => 28,  104 => 28,  97 => 24,  93 => 18,  90 => 21,  81 => 14,  70 => 23,  66 => 13,  62 => 11,  59 => 13,  56 => 12,  52 => 10,  49 => 9,  45 => 6,  41 => 7,  37 => 5,  33 => 4,  30 => 3,);
    }
}
