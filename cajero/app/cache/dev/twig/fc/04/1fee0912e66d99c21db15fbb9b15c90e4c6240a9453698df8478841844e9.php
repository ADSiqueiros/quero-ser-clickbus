<?php

/* ClickbusCajeroBundle:Default:mostrarRetiro.html.twig */
class __TwigTemplate_fc041fee0912e66d99c21db15fbb9b15c90e4c6240a9453698df8478841844e9 extends Twig_Template
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
<form name=\"formRetirar\" action=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("clickbus_cajero_retirar");
        echo "\" method=\"POST\">

\t<table>
\t\t<tr>
\t\t\t<td>Cantidad a retirar: \$ </td>
\t\t\t<td><input type=\"text\" name=\"cantidad\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["cantidad"]) ? $context["cantidad"] : $this->getContext($context, "cantidad")), "html", null, true);
        echo "\"></td>

\t\t\t<td><input type=\"submit\" value=\"Retirar\"></td>
\t\t</tr>
\t</table>

</form>
<br/>
";
        // line 18
        if ((isset($context["resultado"]) ? $context["resultado"] : $this->getContext($context, "resultado"))) {
            // line 19
            $this->env->loadTemplate("ClickbusCajeroBundle:Default:resultadoRetiro.html.twig")->display(array_merge($context, array("retiro" => (isset($context["resultado"]) ? $context["resultado"] : $this->getContext($context, "resultado")))));
        }
        // line 21
        echo "
";
    }

    public function getTemplateName()
    {
        return "ClickbusCajeroBundle:Default:mostrarRetiro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 21,  63 => 19,  61 => 18,  50 => 10,  42 => 5,  39 => 4,  36 => 3,  11 => 1,);
    }
}
