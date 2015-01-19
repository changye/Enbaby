<?php

/* EnbabyAudioLibBundle:Default:book.html.twig */
class __TwigTemplate_1ab28974a0ed1e7b25e1038eec026c28663ff2a5b8814d2b8d545edb2b39e52d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::mobile.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'javascript' => array($this, 'block_javascript'),
            'mobilePagejavascript' => array($this, 'block_mobilePagejavascript'),
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'footerjavascript' => array($this, 'block_footerjavascript'),
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
        if (isset($context["book"])) { $_book_ = $context["book"]; } else { $_book_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_book_, "DisplayName"), "html", null, true);
        echo "
";
    }

    // line 7
    public function block_javascript($context, array $blocks = array())
    {
    }

    // line 10
    public function block_mobilePagejavascript($context, array $blocks = array())
    {
        // line 11
        echo "\t<script src=\"/js/PlayAudio.js\"></script>
";
    }

    // line 14
    public function block_header($context, array $blocks = array())
    {
        // line 15
        echo "<a href=\"";
        if (isset($context["book"])) { $_book_ = $context["book"]; } else { $_book_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_series", array("seriesId" => $this->getAttribute($_book_, "SeriesId"))), "html", null, true);
        echo "\" class=\"ui-icon-arrow-l ui-btn ui-shadow ui-nodisc-icon  ui-btn-inline ui-btn-icon-left\"  data-transition=\"slide\" data-direction=\"reverse\">专辑</a>
<h1>";
        // line 16
        if (isset($context["book"])) { $_book_ = $context["book"]; } else { $_book_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_book_, "DisplayName"), "html", null, true);
        echo "</h1>
<a href=\"#declarePage\" class=\"ui-icon-info ui-btn ui-shadow ui-nodisc-icon  ui-btn-inline ui-btn-b ui-btn-icon-notext  \" data-rel=\"dialog\" data-iconshadow=\"false\" data-transition=\"flip\" data-iconpos=\"notext\">申明</a>
";
    }

    // line 20
    public function block_content($context, array $blocks = array())
    {
        // line 21
        echo "<img style=\"width:100%;\"src=\"";
        if (isset($context["libLoc"])) { $_libLoc_ = $context["libLoc"]; } else { $_libLoc_ = null; }
        echo twig_escape_filter($this->env, $_libLoc_, "html", null, true);
        if (isset($context["book"])) { $_book_ = $context["book"]; } else { $_book_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_book_, "Snapshot"), "html", null, true);
        echo "\" alt=\"Snapshot\" >
<p><strong>";
        // line 22
        if (isset($context["book"])) { $_book_ = $context["book"]; } else { $_book_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_book_, "DisplayName"), "html", null, true);
        echo "</strong></p>
<p> <small>作者: </small><em>";
        // line 23
        if (isset($context["book"])) { $_book_ = $context["book"]; } else { $_book_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_book_, "Author"), "html", null, true);
        echo "</em></p>
<p>";
        // line 24
        if (isset($context["book"])) { $_book_ = $context["book"]; } else { $_book_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_book_, "Description"), "html", null, true);
        echo "</p>

<div data-role=\"collapsible-set\">
";
        // line 27
        if (isset($context["book"])) { $_book_ = $context["book"]; } else { $_book_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_book_, "Pages"));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 28
            echo "\t<div data-page=\"page";
            if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_loop_, "index0"), "html", null, true);
            echo "\"  data-role=\"collapsible\"  class=\"page\" data-collapsed-icon=\"arrow-r\" data-expanded-icon=\"arrow-d\" >
      <h1 class=\"pagetitle\">";
            // line 29
            if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_page_, "DisplayName"), "html", null, true);
            echo "</h1>
      <div>
       ";
            // line 31
            if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_page_, "Content"));
            foreach ($context['_seq'] as $context["_key"] => $context["para"]) {
                // line 32
                echo "         <p>";
                if (isset($context["para"])) { $_para_ = $context["para"]; } else { $_para_ = null; }
                echo twig_escape_filter($this->env, $_para_, "html", null, true);
                echo "<p>
       ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['para'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "       <audio class=\"audios\" played=\"false\" preload=\"none\"  presrc=\"";
            if (isset($context["libLoc"])) { $_libLoc_ = $context["libLoc"]; } else { $_libLoc_ = null; }
            echo twig_escape_filter($this->env, $_libLoc_, "html", null, true);
            if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_page_, "Audio"), 0, array(), "array"), "File"), "html", null, true);
            echo "\" id=\"page";
            if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_loop_, "index0"), "html", null, true);
            echo "\">
        \tYour browser does not support the audio.
       </audio>
      </div>
\t</div>

";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "</div>
<!--
<div>
\t<a id=\"playbookaudio\" data-role=\"button\">《";
        // line 44
        if (isset($context["book"])) { $_book_ = $context["book"]; } else { $_book_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_book_, "DisplayName"), "html", null, true);
        echo "》全文阅读</a>
\t<audio id=\"bookaudio\">
      \t";
        // line 46
        if (isset($context["book"])) { $_book_ = $context["book"]; } else { $_book_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_book_, "Audio"));
        foreach ($context['_seq'] as $context["_key"] => $context["audio"]) {
            // line 47
            echo "        \t<source src=\"";
            if (isset($context["libLoc"])) { $_libLoc_ = $context["libLoc"]; } else { $_libLoc_ = null; }
            echo twig_escape_filter($this->env, $_libLoc_, "html", null, true);
            if (isset($context["audio"])) { $_audio_ = $context["audio"]; } else { $_audio_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_audio_, "File"), "html", null, true);
            echo "\" type=\"";
            if (isset($context["audio"])) { $_audio_ = $context["audio"]; } else { $_audio_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_audio_, "Type"), "html", null, true);
            echo "\">
        \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['audio'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "        \tYour browser does not support the audio.
   </audio>
</div>
-->
";
    }

    // line 55
    public function block_footer($context, array $blocks = array())
    {
        // line 56
        echo "<h1>";
        if (isset($context["book"])) { $_book_ = $context["book"]; } else { $_book_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_book_, "DisplayName"), "html", null, true);
        echo "</h1>
";
    }

    // line 61
    public function block_footerjavascript($context, array $blocks = array())
    {
        // line 62
        echo "\t\t\t
";
    }

    public function getTemplateName()
    {
        return "EnbabyAudioLibBundle:Default:book.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 62,  225 => 61,  217 => 56,  214 => 55,  206 => 49,  191 => 47,  175 => 41,  132 => 31,  126 => 29,  95 => 24,  74 => 20,  144 => 47,  139 => 28,  119 => 13,  99 => 47,  64 => 21,  103 => 24,  79 => 29,  54 => 14,  31 => 3,  549 => 162,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 143,  483 => 142,  473 => 134,  469 => 132,  466 => 131,  460 => 130,  455 => 129,  450 => 126,  444 => 122,  441 => 121,  437 => 120,  434 => 119,  429 => 116,  423 => 112,  420 => 111,  416 => 110,  413 => 109,  408 => 106,  394 => 105,  390 => 103,  375 => 101,  365 => 99,  362 => 98,  359 => 97,  355 => 95,  348 => 91,  344 => 90,  330 => 89,  327 => 88,  321 => 86,  307 => 85,  302 => 84,  295 => 81,  287 => 80,  279 => 78,  256 => 73,  251 => 71,  239 => 69,  231 => 68,  219 => 67,  201 => 66,  143 => 49,  138 => 44,  134 => 24,  131 => 42,  122 => 37,  117 => 36,  108 => 7,  102 => 27,  92 => 25,  84 => 19,  72 => 25,  69 => 17,  51 => 13,  48 => 7,  35 => 7,  29 => 3,  312 => 96,  308 => 94,  293 => 92,  285 => 90,  281 => 88,  277 => 86,  274 => 85,  271 => 77,  264 => 74,  261 => 81,  257 => 79,  253 => 77,  249 => 76,  247 => 70,  237 => 73,  204 => 69,  198 => 65,  194 => 64,  150 => 54,  147 => 34,  127 => 41,  112 => 32,  96 => 25,  76 => 19,  71 => 17,  227 => 92,  224 => 91,  221 => 90,  207 => 70,  197 => 74,  195 => 65,  192 => 72,  189 => 61,  186 => 46,  181 => 67,  178 => 61,  173 => 58,  162 => 58,  158 => 56,  155 => 55,  152 => 55,  142 => 52,  136 => 44,  133 => 43,  130 => 42,  120 => 28,  105 => 31,  75 => 24,  53 => 19,  114 => 10,  109 => 31,  106 => 25,  101 => 19,  85 => 22,  77 => 21,  67 => 15,  28 => 4,  110 => 20,  100 => 27,  89 => 16,  65 => 14,  63 => 13,  58 => 18,  34 => 3,  98 => 21,  88 => 17,  80 => 15,  78 => 25,  46 => 12,  44 => 7,  60 => 15,  40 => 6,  27 => 1,  39 => 8,  36 => 7,  32 => 4,  55 => 15,  43 => 7,  26 => 6,  24 => 4,  22 => 2,  57 => 14,  50 => 13,  47 => 7,  38 => 6,  25 => 5,  19 => 1,  232 => 72,  226 => 71,  222 => 76,  215 => 73,  211 => 84,  208 => 70,  202 => 68,  196 => 64,  193 => 63,  187 => 62,  183 => 62,  180 => 44,  171 => 54,  166 => 51,  163 => 50,  160 => 49,  157 => 48,  149 => 42,  146 => 41,  140 => 46,  137 => 32,  129 => 21,  124 => 18,  121 => 24,  118 => 36,  115 => 39,  111 => 32,  107 => 28,  104 => 28,  97 => 24,  93 => 18,  90 => 23,  81 => 14,  70 => 24,  66 => 16,  62 => 11,  59 => 13,  56 => 12,  52 => 11,  49 => 10,  45 => 6,  41 => 7,  37 => 4,  33 => 4,  30 => 3,);
    }
}
