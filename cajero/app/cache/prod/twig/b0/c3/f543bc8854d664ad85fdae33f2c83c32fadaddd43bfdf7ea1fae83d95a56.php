<?php

/* ClickbusCajeroBundle:Default:index.html.twig */
class __TwigTemplate_b0c3f543bc8854d664ad85fdae33f2c83c32fadaddd43bfdf7ea1fae83d95a56 extends Twig_Template
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
        echo "<h1>Inicio</h1>
<h3> Fecha: ";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["fecha"]) ? $context["fecha"] : null), "html", null, true);
        echo "  </h3>
";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["mensaje"]) ? $context["mensaje"] : null), "html", null, true);
    }

    public function getTemplateName()
    {
        return "ClickbusCajeroBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 2,  19 => 1,);
    }
}
