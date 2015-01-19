<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_080b08320226ef5806af9ea56b979b0568c58a337fb40eeee2db9025025714ff extends Twig_Template
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
        echo "/*
";
        // line 2
        if (isset($context["exception"])) { $_exception_ = $context["exception"]; } else { $_exception_ = null; }
        $this->env->loadTemplate("TwigBundle:Exception:exception.txt.twig")->display(array_merge($context, array("exception" => $_exception_)));
        // line 3
        echo "*/
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 20,  100 => 19,  89 => 16,  65 => 14,  63 => 13,  58 => 12,  34 => 5,  98 => 40,  88 => 6,  80 => 15,  78 => 40,  46 => 9,  44 => 9,  60 => 12,  40 => 7,  27 => 3,  39 => 7,  36 => 7,  32 => 3,  55 => 15,  43 => 8,  26 => 4,  24 => 4,  22 => 2,  57 => 11,  50 => 7,  47 => 6,  38 => 13,  25 => 3,  19 => 1,  232 => 82,  226 => 78,  222 => 76,  215 => 73,  211 => 71,  208 => 70,  202 => 68,  196 => 64,  193 => 63,  187 => 62,  183 => 60,  180 => 59,  171 => 54,  166 => 51,  163 => 50,  160 => 49,  157 => 48,  149 => 42,  146 => 41,  140 => 38,  137 => 37,  129 => 36,  124 => 35,  121 => 34,  118 => 33,  115 => 32,  111 => 30,  107 => 28,  104 => 27,  97 => 24,  93 => 9,  90 => 21,  81 => 19,  70 => 15,  66 => 13,  62 => 16,  59 => 11,  56 => 10,  52 => 6,  49 => 5,  45 => 7,  41 => 8,  37 => 4,  33 => 5,  30 => 4,);
    }
}
