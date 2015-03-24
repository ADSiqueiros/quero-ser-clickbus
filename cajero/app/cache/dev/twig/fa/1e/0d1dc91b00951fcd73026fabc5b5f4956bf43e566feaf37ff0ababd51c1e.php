<?php

/* ::layout.html.twig */
class __TwigTemplate_fa1e0d1dc91b00951fcd73026fabc5b5f4956bf43e566feaf37ff0ababd51c1e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'contenido' => array($this, 'block_contenido'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo " <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/clickbuscajero/css/estilos.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "<div id=\"cabecera\">
  <h1>Cajero Automático ClickBus</h1>
</div>

<div id=\"Menu\">
<hr/>
  <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("clickbus_cajero_retirar");
        echo "\">Retiro de Efectivo</a> |
  <a href=\"#\">Consultar saldo</a> |
  <a href=\"#\">Cancelar operación</a>
  <img id=\"logo\" src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/clickbuscajero/images/clickbus_logo.jpg"), "html", null, true);
        echo "\" />
</div>
<hr/>

<div id=\"contenido\">
";
        // line 22
        $this->displayBlock('contenido', $context, $blocks);
        // line 25
        echo "</div>

<div id=\"pie\">
<hr/>
<div align=\"center\"></div>
</div>

";
    }

    // line 22
    public function block_contenido($context, array $blocks = array())
    {
        // line 23
        echo "
";
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 23,  86 => 22,  75 => 25,  73 => 22,  65 => 17,  59 => 14,  51 => 8,  48 => 7,  41 => 4,  38 => 3,  11 => 1,);
    }
}
