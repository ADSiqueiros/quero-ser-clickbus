<?php

/* ClickbusCajeroBundle:Default:index.html.twig */
class __TwigTemplate_b0c3f543bc8854d664ad85fdae33f2c83c32fadaddd43bfdf7ea1fae83d95a56 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'contenido' => array($this, 'block_contenido'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        // line 4
        echo "
\t<h2>Retiro de Efectivo</h2>
\t<h3> Fecha: ";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["fecha"]) ? $context["fecha"] : $this->getContext($context, "fecha")), "html", null, true);
        echo "  </h3>
\t";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["mensaje"]) ? $context["mensaje"] : $this->getContext($context, "mensaje")), "html", null, true);
        echo "

";
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
        return array (  47 => 7,  43 => 6,  39 => 4,  36 => 3,  11 => 1,);
    }
}
