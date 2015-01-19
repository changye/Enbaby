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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["series"]) ? $context["series"] : null), "DisplayName"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["series"]) ? $context["series"] : null), "DisplayName"), "html", null, true);
        echo "</h1>
";
    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        // line 13
        echo "\t<p><strong>专辑：</strong>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["series"]) ? $context["series"] : null), "DisplayName"), "html", null, true);
        echo "</p>
\t<img style=\"width:100%\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["libLoc"]) ? $context["libLoc"] : null), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["series"]) ? $context["series"] : null), "Snapshot"), "html", null, true);
        echo "\">
\t<p><strong>简介：</strong>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["series"]) ? $context["series"] : null), "Description"), "html", null, true);
        echo "</p>
\t<ul data-role=\"listview\" data-inset=\"true\">
\t\t<li data-role=\"divider\" data-theme=\"b\">书目</li>
\t\t";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["series"]) ? $context["series"] : null), "Books"));
        foreach ($context['_seq'] as $context["_key"] => $context["book"]) {
            // line 19
            echo "\t\t<li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_series_book", array("seriesId" => $this->getAttribute((isset($context["series"]) ? $context["series"] : null), "Id"), "subId" => $this->getAttribute((isset($context["book"]) ? $context["book"] : null), "Id"))), "html", null, true);
            echo "\" data-transition=\"slide\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["book"]) ? $context["book"] : null), "DisplayName"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["series"]) ? $context["series"] : null), "DisplayName"), "html", null, true);
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
        return array (  96 => 25,  77 => 19,  34 => 4,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  111 => 37,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  131 => 52,  119 => 42,  108 => 36,  102 => 32,  71 => 19,  67 => 15,  63 => 15,  59 => 14,  47 => 9,  87 => 25,  55 => 15,  94 => 28,  89 => 20,  85 => 25,  79 => 18,  75 => 17,  72 => 16,  68 => 14,  56 => 9,  50 => 10,  41 => 9,  28 => 3,  38 => 6,  21 => 2,  35 => 5,  24 => 4,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  123 => 47,  121 => 46,  117 => 44,  115 => 43,  105 => 40,  101 => 32,  91 => 27,  69 => 25,  66 => 15,  62 => 14,  49 => 19,  43 => 8,  31 => 3,  29 => 3,  26 => 6,  25 => 4,  19 => 1,  98 => 31,  93 => 24,  88 => 21,  78 => 21,  46 => 7,  44 => 12,  40 => 7,  32 => 4,  27 => 4,  22 => 2,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 33,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 18,  64 => 17,  60 => 13,  57 => 13,  54 => 12,  51 => 14,  48 => 9,  45 => 8,  42 => 7,  39 => 9,  36 => 5,  33 => 4,  30 => 7,);
    }
}
