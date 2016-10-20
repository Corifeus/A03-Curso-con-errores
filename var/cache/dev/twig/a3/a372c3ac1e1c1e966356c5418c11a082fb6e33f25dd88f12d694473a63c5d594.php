<?php

/* PacoLocoBundle:Default:msgTexto.html.twig */
class __TwigTemplate_52739e16a26e1437b1bdd90f80211516325dffc259ea6c59dff083e17fe38182 extends Twig_Template
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
        $__internal_4bd3a4e4c3934a4fc80a020899277faaa2e889b2c06c1b778b717a8b2ee6594d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bd3a4e4c3934a4fc80a020899277faaa2e889b2c06c1b778b717a8b2ee6594d->enter($__internal_4bd3a4e4c3934a4fc80a020899277faaa2e889b2c06c1b778b717a8b2ee6594d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PacoLocoBundle:Default:msgTexto.html.twig"));

        // line 1
        echo "El mensaje es
<br>
";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["texto"]) ? $context["texto"] : $this->getContext($context, "texto")), "html", null, true);
        echo "
";
        
        $__internal_4bd3a4e4c3934a4fc80a020899277faaa2e889b2c06c1b778b717a8b2ee6594d->leave($__internal_4bd3a4e4c3934a4fc80a020899277faaa2e889b2c06c1b778b717a8b2ee6594d_prof);

    }

    public function getTemplateName()
    {
        return "PacoLocoBundle:Default:msgTexto.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }

    public function getSource()
    {
        return "El mensaje es
<br>
{{texto}}
";
    }
}
