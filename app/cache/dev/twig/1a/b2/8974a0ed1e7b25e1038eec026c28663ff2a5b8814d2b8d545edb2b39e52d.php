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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "DisplayName"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_series", array("seriesId" => $this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "SeriesId"))), "html", null, true);
        echo "\" class=\"ui-icon-arrow-l ui-btn ui-shadow ui-nodisc-icon  ui-btn-inline ui-btn-icon-left\"  data-transition=\"slide\" data-direction=\"reverse\">专辑</a>
<h1>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "DisplayName"), "html", null, true);
        echo "</h1>
<a href=\"#declarePage\" class=\"ui-icon-info ui-btn ui-shadow ui-nodisc-icon  ui-btn-inline ui-btn-b ui-btn-icon-notext  \" data-rel=\"dialog\" data-iconshadow=\"false\" data-transition=\"flip\" data-iconpos=\"notext\">申明</a>
";
    }

    // line 20
    public function block_content($context, array $blocks = array())
    {
        // line 21
        echo "<img style=\"width:100%;\"src=\"";
        echo twig_escape_filter($this->env, (isset($context["libLoc"]) ? $context["libLoc"] : $this->getContext($context, "libLoc")), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "Snapshot"), "html", null, true);
        echo "\" alt=\"Snapshot\" >
<p><strong>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "DisplayName"), "html", null, true);
        echo "</strong></p>
<p> <small>作者: </small><em>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "Author"), "html", null, true);
        echo "</em></p>
<p>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "Description"), "html", null, true);
        echo "</p>

<div data-role=\"collapsible-set\">
";
        // line 27
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "Pages"));
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
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index0"), "html", null, true);
            echo "\"  data-role=\"collapsible\"  class=\"page\" data-collapsed-icon=\"arrow-r\" data-expanded-icon=\"arrow-d\" >
      <h1 class=\"pagetitle\">";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "DisplayName"), "html", null, true);
            echo "</h1>
      <div>
       ";
            // line 31
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "Content"));
            foreach ($context['_seq'] as $context["_key"] => $context["para"]) {
                // line 32
                echo "         <p>";
                echo twig_escape_filter($this->env, (isset($context["para"]) ? $context["para"] : $this->getContext($context, "para")), "html", null, true);
                echo "<p>
       ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['para'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "       <audio class=\"audios\" played=\"false\" preload=\"none\"  presrc=\"";
            echo twig_escape_filter($this->env, (isset($context["libLoc"]) ? $context["libLoc"] : $this->getContext($context, "libLoc")), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "Audio"), 0, array(), "array"), "File"), "html", null, true);
            echo "\" id=\"page";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index0"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "DisplayName"), "html", null, true);
        echo "》全文阅读</a>
\t<audio id=\"bookaudio\">
      \t";
        // line 46
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "Audio"));
        foreach ($context['_seq'] as $context["_key"] => $context["audio"]) {
            // line 47
            echo "        \t<source src=\"";
            echo twig_escape_filter($this->env, (isset($context["libLoc"]) ? $context["libLoc"] : $this->getContext($context, "libLoc")), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["audio"]) ? $context["audio"] : $this->getContext($context, "audio")), "File"), "html", null, true);
            echo "\" type=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["audio"]) ? $context["audio"] : $this->getContext($context, "audio")), "Type"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "DisplayName"), "html", null, true);
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
        return array (  206 => 62,  185 => 49,  84 => 23,  134 => 34,  129 => 21,  124 => 18,  114 => 10,  70 => 24,  58 => 18,  77 => 28,  34 => 3,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 46,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 41,  143 => 56,  135 => 53,  119 => 13,  102 => 32,  71 => 20,  67 => 15,  63 => 15,  59 => 15,  87 => 25,  94 => 27,  89 => 20,  85 => 25,  75 => 17,  68 => 14,  56 => 14,  28 => 3,  38 => 6,  21 => 2,  24 => 4,  201 => 92,  196 => 56,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 31,  117 => 44,  105 => 40,  91 => 27,  62 => 14,  49 => 19,  31 => 3,  26 => 6,  25 => 4,  19 => 1,  93 => 24,  88 => 24,  78 => 21,  46 => 7,  44 => 10,  27 => 1,  79 => 29,  72 => 25,  69 => 25,  47 => 9,  40 => 7,  37 => 4,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 28,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 28,  108 => 7,  101 => 32,  98 => 31,  96 => 25,  83 => 25,  74 => 21,  66 => 22,  55 => 15,  52 => 14,  50 => 13,  43 => 7,  41 => 9,  35 => 7,  32 => 4,  29 => 3,  209 => 82,  203 => 61,  199 => 67,  193 => 55,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 47,  168 => 72,  164 => 44,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 47,  141 => 48,  133 => 55,  130 => 41,  125 => 32,  122 => 43,  116 => 29,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 47,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 22,  73 => 18,  64 => 16,  60 => 6,  57 => 13,  54 => 12,  51 => 11,  48 => 10,  45 => 17,  42 => 7,  39 => 8,  36 => 5,  33 => 4,  30 => 7,);
    }
}
