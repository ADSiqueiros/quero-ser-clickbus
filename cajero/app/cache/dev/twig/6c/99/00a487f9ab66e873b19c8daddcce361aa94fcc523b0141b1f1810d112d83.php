<?php

/* ClickbusCajeroBundle:Default:resultadoRetiro.html.twig */
class __TwigTemplate_6c9900a487f9ab66e873b19c8daddcce361aa94fcc523b0141b1f1810d112d83 extends Twig_Template
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
        echo "<table id='resultados'>
\t<tr>
\t\t<th>Denominación</th>
\t\t<th>Cantidad</th>
\t</tr>
\t\t";
        // line 6
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["retiro"]) ? $context["retiro"] : $this->getContext($context, "retiro")));
        foreach ($context['_seq'] as $context["_key"] => $context["elem"]) {
            // line 7
            echo "\t<tr>
\t\t<td>";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["elem"], "denominacion", array()), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["elem"], "cantidad", array()), "html", null, true);
            echo "</td>
\t</tr>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['elem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "</table>";
    }

    public function getTemplateName()
    {
        return "ClickbusCajeroBundle:Default:resultadoRetiro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 12,  37 => 9,  33 => 8,  30 => 7,  26 => 6,  19 => 1,);
    }
}
