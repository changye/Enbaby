<?php

/* WebProfilerBundle:Collector:logger.html.twig */
class __TwigTemplate_010a0751fb29bacbde493046a61585aaa56754ef0e086bc6e870e563117e0c87 extends Twig_Template
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
        // line 3
        $context["logger"] = $this;
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_toolbar($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        if ((($this->getAttribute($this->getContext($context, "collector"), "counterrors") || $this->getAttribute($this->getContext($context, "collector"), "countdeprecations")) || $this->getAttribute($this->getContext($context, "collector"), "countscreams"))) {
            // line 7
            echo "        ";
            ob_start();
            // line 8
            echo "            <img width=\"15\" height=\"28\" alt=\"Logs\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAcCAYAAABoMT8aAAAA4klEQVQ4y2P4//8/AyWYYXgYwOPp6Xnc3t7+P7EYpB6k7+zZs2ADNEjRjIwDAgKWgAywIUfz8+fPVzg7O/8AGeCATQEQnAfi/SAah/wcV1dXvAYUgORANA75ehcXl+/4DHAABRIe+ZrhbgAhTHsDiEgHBA0glA6GfSDiw5mZma+A+sphBlhVVFQ88vHx+Xfu3Ll7QP5haOjjwtuAuGHv3r3NIMNABqh8+/atsaur666vr+9XUlwSHx//AGQANxCbAnEWyGQicRMQ9wBxIQM0qjiBWAFqkB00/glhayBWHwb1AgB38EJsUtxtWwAAAABJRU5ErkJggg==\" />
            ";
            // line 9
            if ($this->getAttribute($this->getContext($context, "collector"), "counterrors")) {
                // line 10
                echo "                ";
                $context["status_color"] = "red";
                // line 11
                echo "            ";
            } elseif ($this->getAttribute($this->getContext($context, "collector"), "countdeprecations")) {
                // line 12
                echo "                ";
                $context["status_color"] = "yellow";
                // line 13
                echo "            ";
            }
            // line 14
            echo "            ";
            $context["error_count"] = (($this->getAttribute($this->getContext($context, "collector"), "counterrors") + $this->getAttribute($this->getContext($context, "collector"), "countdeprecations")) + $this->getAttribute($this->getContext($context, "collector"), "countscreams"));
            // line 15
            echo "            <span class=\"sf-toolbar-status";
            if (array_key_exists("status_color", $context)) {
                echo " sf-toolbar-status-";
                echo twig_escape_filter($this->env, $this->getContext($context, "status_color"), "html", null, true);
            }
            echo "\">";
            echo twig_escape_filter($this->env, $this->getContext($context, "error_count"), "html", null, true);
            echo "</span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 17
            echo "        ";
            ob_start();
            // line 18
            echo "            ";
            if ($this->getAttribute($this->getContext($context, "collector"), "counterrors")) {
                // line 19
                echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Errors</b>
                    <span class=\"sf-toolbar-status sf-toolbar-status-red\">";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "collector"), "counterrors"), "html", null, true);
                echo "</span>
                </div>
            ";
            }
            // line 24
            echo "            ";
            if ($this->getAttribute($this->getContext($context, "collector"), "countdeprecations")) {
                // line 25
                echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Deprecated Calls</b>
                    <span class=\"sf-toolbar-status sf-toolbar-status-yellow\">";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "collector"), "countdeprecations"), "html", null, true);
                echo "</span>
                </div>
            ";
            }
            // line 30
            echo "            ";
            if ($this->getAttribute($this->getContext($context, "collector"), "countscreams")) {
                // line 31
                echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Silenced Errors</b>
                    <span class=\"sf-toolbar-status sf-toolbar-status\">";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "collector"), "countscreams"), "html", null, true);
                echo "</span>
                </div>
            ";
            }
            // line 36
            echo "        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 37
            echo "        ";
            $this->env->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig")->display(array_merge($context, array("link" => $this->getContext($context, "profiler_url"))));
            // line 38
            echo "    ";
        }
    }

    // line 41
    public function block_menu($context, array $blocks = array())
    {
        // line 42
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAgCAYAAAAMq2gFAAABjElEQVRIx2MIDw+vd3R0/GFvb/+fGtjFxeVJSUmJ1f///5nv37/PAMMMzs7OVLMEhoODgy/k5+cHJCYmagAtZAJbRG1L0DEwxCYALeOgiUXbt2+/X1NT8xTEdnd3/wi0SI4mFgHBDCBeCLXoF5BtwkCEpvNAvB8JnydCTwgQR0It+g1kWxNjUQEQOyDhAiL0gNUiWWRDjEUOyMkUZsCoRaMWjVpEvEVkFkGjFmEUqgc+fvx4hVYWIReqzi9evKileaoDslnu3LkTNLQtGk3edLPIycnpL9Bge5pb1NXVdQNosDmGRcAm7F+QgKur6783b95cBQoeRGv1kII3QPOdAoZF8+fPP4PUqnx55syZVKCEI1rLh1hsAbWEZ8aMGaUoFoFcMG3atKdIjfSPISEhawICAlaQgwMDA1f6+/sfB5rzE2Sej4/PD3C7DkjoAHHVoUOHLpSVlX3w8vL6Sa34Alr6Z8WKFaCoMARZxAHEoFZ/HBD3A/FyIF4BxMvIxCC964F4G6hZDMTxQCwJAGWE8pur5kFDAAAAAElFTkSuQmCC\" alt=\"Logger\"></span>
    <strong>Logs</strong>
    ";
        // line 45
        if ((($this->getAttribute($this->getContext($context, "collector"), "counterrors") || $this->getAttribute($this->getContext($context, "collector"), "countdeprecations")) || $this->getAttribute($this->getContext($context, "collector"), "countscreams"))) {
            // line 46
            echo "        ";
            $context["error_count"] = (($this->getAttribute($this->getContext($context, "collector"), "counterrors") + $this->getAttribute($this->getContext($context, "collector"), "countdeprecations")) + $this->getAttribute($this->getContext($context, "collector"), "countscreams"));
            // line 47
            echo "        <span class=\"count\">
            <span>";
            // line 48
            echo twig_escape_filter($this->env, $this->getContext($context, "error_count"), "html", null, true);
            echo "</span>
        </span>
    ";
        }
        // line 51
        echo "</span>
";
    }

    // line 54
    public function block_panel($context, array $blocks = array())
    {
        // line 55
        echo "    <h2>Logs</h2>

    ";
        // line 57
        $context["priority"] = $this->getAttribute($this->getAttribute($this->getContext($context, "request"), "query"), "get", array(0 => "priority", 1 => 0), "method");
        // line 58
        echo "
    <table>
        <tr>
            <th>Filter</th>
            <td>
                <form id=\"priority-form\" action=\"\" method=\"get\" style=\"display: inline\">
                    <input type=\"hidden\" name=\"panel\" value=\"logger\">
                    <label for=\"priority\">Min. Priority</label>
                    <select id=\"priority\" name=\"priority\" onchange=\"document.getElementById('priority-form').submit(); \">
                        ";
        // line 68
        echo "                        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "collector"), "priorities"));
        foreach ($context['_seq'] as $context["value"] => $context["level"]) {
            // line 69
            echo "                            ";
            if (((!$this->getContext($context, "priority")) && ($this->getContext($context, "value") > 100))) {
                // line 70
                echo "                                ";
                $context["priority"] = $this->getContext($context, "value");
                // line 71
                echo "                            ";
            }
            // line 72
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "value"), "html", null, true);
            echo "\"";
            echo ((($this->getContext($context, "value") == $this->getContext($context, "priority"))) ? (" selected") : (""));
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "level"), "name"), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "level"), "count"), "html", null, true);
            echo ")</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['value'], $context['level'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "                        ";
        if ($this->getAttribute($this->getContext($context, "collector"), "countdeprecations")) {
            // line 75
            echo "                            ";
            if ((!$this->getContext($context, "priority"))) {
                // line 76
                echo "                                ";
                $context["priority"] = "-100";
                // line 77
                echo "                            ";
            }
            // line 78
            echo "                            <option value=\"-100\"";
            echo ((("-100" == $this->getContext($context, "priority"))) ? (" selected") : (""));
            echo ">DEPRECATION only (";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "collector"), "countdeprecations"), "html", null, true);
            echo ")</option>
                        ";
        }
        // line 80
        echo "                    </select>
                    <noscript>
                        <input type=\"submit\" value=\"refresh\">
                    </noscript>
                </form>
            </td>
        </tr>
    </table>

    ";
        // line 89
        if ($this->getAttribute($this->getContext($context, "collector"), "logs")) {
            // line 90
            echo "        <ul class=\"alt\">
            ";
            // line 91
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "collector"), "logs"));
            $context['_iterated'] = false;
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
                if (((($this->getContext($context, "priority") >= 0) && ($this->getAttribute($this->getContext($context, "log"), "priority") >= $this->getContext($context, "priority"))) || (($this->getContext($context, "priority") < 0) && ((($this->getAttribute($this->getAttribute($this->getContext($context, "log", true), "context", array(), "any", false, true), "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getContext($context, "log", true), "context", array(), "any", false, true), "type"), 0)) : (0)) == $this->getContext($context, "priority"))))) {
                    // line 92
                    echo "                <li class=\"";
                    echo twig_escape_filter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), $this->getAttribute($this->getContext($context, "loop"), "index")), "html", null, true);
                    if (($this->getAttribute($this->getContext($context, "log"), "priority") >= 400)) {
                        echo " error";
                    } elseif (($this->getAttribute($this->getContext($context, "log"), "priority") >= 300)) {
                        echo " warning";
                    }
                    if ($this->getAttribute($this->getAttribute($this->getContext($context, "log", true), "context", array(), "any", false, true), "scream", array(), "any", true, true)) {
                        echo " scream";
                    }
                    echo "\">
                    ";
                    // line 93
                    echo $context["logger"]->getdisplay_message($this->getAttribute($this->getContext($context, "loop"), "index"), $this->getContext($context, "log"));
                    echo "
                </li>
            ";
                    $context['_iterated'] = true;
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                }
            }
            if (!$context['_iterated']) {
                // line 96
                echo "                <li><em>No logs available for this priority.</em></li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 98
            echo "        </ul>
    ";
        } else {
            // line 100
            echo "        <p>
            <em>No logs available.</em>
        </p>
    ";
        }
    }

    // line 107
    public function getdisplay_message($_log_index = null, $_log = null)
    {
        $context = $this->env->mergeGlobals(array(
            "log_index" => $_log_index,
            "log" => $_log,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 108
            echo "    ";
            if ((twig_constant("Symfony\\Component\\HttpKernel\\Debug\\ErrorHandler::TYPE_DEPRECATION") == (($this->getAttribute($this->getAttribute($this->getContext($context, "log", true), "context", array(), "any", false, true), "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getContext($context, "log", true), "context", array(), "any", false, true), "type"), 0)) : (0)))) {
                // line 109
                echo "        DEPRECATION -  ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "log"), "message"), "html", null, true);
                echo "
        ";
                // line 110
                $context["id"] = ("sf-call-stack-" . $this->getContext($context, "log_index"));
                // line 111
                echo "        <a href=\"#\" onclick=\"Sfjs.toggle('";
                echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
                echo "', document.getElementById('";
                echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
                echo "-on'), document.getElementById('";
                echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
                echo "-off')); return false;\">
            <img class=\"toggle\" id=\"";
                // line 112
                echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
                echo "-off\" alt=\"-\" src=\"data:image/gif;base64,R0lGODlhEgASAMQSANft94TG57Hb8GS44ez1+mC24IvK6ePx+Wa44dXs92+942e54o3L6W2844/M6dnu+P/+/l614P///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAABIALAAAAAASABIAQAVCoCQBTBOd6Kk4gJhGBCTPxysJb44K0qD/ER/wlxjmisZkMqBEBW5NHrMZmVKvv9hMVsO+hE0EoNAstEYGxG9heIhCADs=\" style=\"display:none\">
            <img class=\"toggle\" id=\"";
                // line 113
                echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
                echo "-on\" alt=\"+\" src=\"data:image/gif;base64,R0lGODlhEgASAMQTANft99/v+Ga44bHb8ITG52S44dXs9+z1+uPx+YvK6WC24G+944/M6W28443L6dnu+Ge54v/+/l614P///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAABMALAAAAAASABIAQAVS4DQBTiOd6LkwgJgeUSzHSDoNaZ4PU6FLgYBA5/vFID/DbylRGiNIZu74I0h1hNsVxbNuUV4d9SsZM2EzWe1qThVzwWFOAFCQFa1RQq6DJB4iIQA7\" style=\"display:inline\">
        </a>
        ";
                // line 115
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getContext($context, "log"), "context"), "stack"));
                foreach ($context['_seq'] as $context["index"] => $context["call"]) {
                    if (($this->getContext($context, "index") > 1)) {
                        // line 116
                        echo "            ";
                        if (($this->getContext($context, "index") == 2)) {
                            // line 117
                            echo "                <ul class=\"sf-call-stack\" id=\"";
                            echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
                            echo "\" style=\"display: none\">
            ";
                        }
                        // line 119
                        echo "            ";
                        if ($this->getAttribute($this->getContext($context, "call", true), "class", array(), "any", true, true)) {
                            // line 120
                            echo "                ";
                            $context["from"] = (($this->env->getExtension('code')->abbrClass($this->getAttribute($this->getContext($context, "call"), "class")) . "::") . $this->env->getExtension('code')->abbrMethod($this->getAttribute($this->getContext($context, "call"), "function")));
                            // line 121
                            echo "            ";
                        } elseif ($this->getAttribute($this->getContext($context, "call", true), "function", array(), "any", true, true)) {
                            // line 122
                            echo "                ";
                            $context["from"] = $this->env->getExtension('code')->abbrMethod($this->getAttribute($this->getContext($context, "call"), "function"));
                            // line 123
                            echo "            ";
                        } elseif ($this->getAttribute($this->getContext($context, "call", true), "file", array(), "any", true, true)) {
                            // line 124
                            echo "                ";
                            $context["from"] = $this->getAttribute($this->getContext($context, "call"), "file");
                            // line 125
                            echo "            ";
                        } else {
                            // line 126
                            echo "                ";
                            $context["from"] = "-";
                            // line 127
                            echo "            ";
                        }
                        // line 128
                        echo "
            <li>Called from ";
                        // line 129
                        echo ((($this->getAttribute($this->getContext($context, "call", true), "file", array(), "any", true, true) && $this->getAttribute($this->getContext($context, "call", true), "line", array(), "any", true, true))) ? ($this->env->getExtension('code')->formatFile($this->getAttribute($this->getContext($context, "call"), "file"), $this->getAttribute($this->getContext($context, "call"), "line"), $this->getContext($context, "from"))) : ($this->getContext($context, "from")));
                        echo "</li>

            ";
                        // line 131
                        echo ((($this->getContext($context, "index") == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "log"), "context"), "stack")) - 1))) ? ("</ul>") : (""));
                        echo "
        ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['index'], $context['call'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 133
                echo "    ";
            } else {
                // line 134
                echo "        ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "log"), "priorityName"), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "log"), "message"), "html", null, true);
                echo "
        ";
                // line 135
                if (($this->getAttribute($this->getContext($context, "log", true), "context", array(), "any", true, true) && (!twig_test_empty($this->getAttribute($this->getContext($context, "log"), "context"))))) {
                    // line 136
                    echo "            <br />
            <small>
                <strong>Context</strong>: ";
                    // line 138
                    echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute($this->getContext($context, "log"), "context"), (64 | 256)), "html", null, true);
                    echo "
            </small>
        ";
                }
                // line 141
                echo "    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:logger.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  403 => 136,  391 => 133,  382 => 131,  377 => 129,  371 => 127,  359 => 123,  356 => 122,  347 => 119,  333 => 115,  328 => 113,  324 => 112,  313 => 110,  293 => 107,  281 => 98,  274 => 96,  249 => 92,  237 => 91,  234 => 90,  232 => 89,  210 => 77,  186 => 72,  180 => 70,  161 => 58,  155 => 55,  152 => 54,  462 => 202,  449 => 198,  446 => 197,  441 => 196,  439 => 195,  431 => 189,  429 => 188,  422 => 184,  415 => 180,  408 => 176,  401 => 135,  394 => 134,  380 => 160,  373 => 156,  361 => 146,  351 => 141,  348 => 140,  342 => 137,  338 => 116,  335 => 134,  329 => 131,  325 => 129,  323 => 128,  320 => 127,  315 => 111,  303 => 122,  300 => 121,  289 => 113,  286 => 112,  275 => 105,  270 => 102,  267 => 101,  262 => 93,  256 => 96,  248 => 94,  233 => 87,  226 => 84,  216 => 79,  213 => 78,  207 => 76,  200 => 72,  197 => 71,  194 => 70,  191 => 69,  181 => 65,  178 => 64,  172 => 68,  165 => 60,  153 => 56,  150 => 55,  81 => 23,  367 => 339,  353 => 121,  350 => 120,  308 => 109,  306 => 286,  20 => 1,  113 => 38,  104 => 31,  100 => 36,  97 => 41,  127 => 60,  110 => 22,  90 => 27,  76 => 27,  53 => 12,  65 => 11,  206 => 62,  185 => 66,  84 => 24,  134 => 47,  129 => 21,  124 => 18,  114 => 36,  70 => 19,  58 => 14,  77 => 25,  34 => 5,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 199,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 141,  409 => 132,  407 => 138,  402 => 130,  398 => 129,  393 => 126,  387 => 164,  384 => 121,  381 => 120,  379 => 119,  374 => 128,  368 => 126,  365 => 125,  362 => 124,  360 => 109,  355 => 143,  341 => 117,  337 => 103,  322 => 101,  314 => 99,  312 => 124,  309 => 97,  305 => 108,  298 => 120,  294 => 90,  285 => 100,  283 => 88,  278 => 106,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 90,  229 => 85,  220 => 81,  214 => 69,  177 => 69,  169 => 46,  140 => 55,  132 => 51,  128 => 42,  107 => 36,  61 => 15,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 80,  219 => 76,  217 => 75,  208 => 68,  204 => 75,  179 => 69,  159 => 57,  143 => 56,  135 => 46,  119 => 40,  102 => 33,  71 => 13,  67 => 18,  63 => 21,  59 => 16,  201 => 74,  196 => 56,  183 => 71,  171 => 61,  166 => 71,  163 => 62,  158 => 79,  156 => 58,  151 => 63,  142 => 59,  138 => 47,  136 => 56,  121 => 31,  117 => 37,  105 => 34,  91 => 25,  62 => 24,  49 => 11,  94 => 34,  89 => 30,  85 => 23,  75 => 18,  68 => 12,  56 => 11,  28 => 3,  87 => 32,  93 => 38,  88 => 24,  78 => 19,  46 => 10,  27 => 3,  21 => 2,  38 => 7,  26 => 6,  24 => 2,  44 => 9,  31 => 4,  25 => 35,  19 => 1,  79 => 29,  72 => 17,  69 => 26,  47 => 11,  40 => 8,  37 => 6,  22 => 2,  246 => 93,  157 => 56,  145 => 46,  139 => 63,  131 => 61,  123 => 42,  120 => 38,  115 => 43,  111 => 28,  108 => 33,  101 => 30,  98 => 34,  96 => 30,  83 => 31,  74 => 27,  66 => 25,  55 => 13,  52 => 12,  50 => 15,  43 => 9,  41 => 8,  35 => 6,  32 => 5,  29 => 3,  209 => 82,  203 => 73,  199 => 67,  193 => 55,  189 => 71,  187 => 84,  182 => 66,  176 => 63,  173 => 47,  168 => 61,  164 => 44,  162 => 59,  154 => 58,  149 => 51,  147 => 51,  144 => 47,  141 => 48,  133 => 45,  130 => 46,  125 => 41,  122 => 43,  116 => 39,  112 => 42,  109 => 34,  106 => 45,  103 => 32,  99 => 31,  95 => 27,  92 => 28,  86 => 28,  82 => 21,  80 => 29,  73 => 20,  64 => 17,  60 => 20,  57 => 39,  54 => 19,  51 => 13,  48 => 16,  45 => 10,  42 => 11,  39 => 10,  36 => 7,  33 => 4,  30 => 3,);
    }
}
