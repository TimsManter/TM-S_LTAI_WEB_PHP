<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_3fca786f6df584252b098944979bd04eecfe31b7b224104568148498c973aae9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_541f83dfc875f280fc34d9e79c6173deec9461d3aa419ca58a9bf98ac1f5ef16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_541f83dfc875f280fc34d9e79c6173deec9461d3aa419ca58a9bf98ac1f5ef16->enter($__internal_541f83dfc875f280fc34d9e79c6173deec9461d3aa419ca58a9bf98ac1f5ef16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_541f83dfc875f280fc34d9e79c6173deec9461d3aa419ca58a9bf98ac1f5ef16->leave($__internal_541f83dfc875f280fc34d9e79c6173deec9461d3aa419ca58a9bf98ac1f5ef16_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_eb9080b18340580ed5ca4dcb2731d20b21f9a4dea80a4736ddb2cc276f504a23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb9080b18340580ed5ca4dcb2731d20b21f9a4dea80a4736ddb2cc276f504a23->enter($__internal_eb9080b18340580ed5ca4dcb2731d20b21f9a4dea80a4736ddb2cc276f504a23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        
        $__internal_eb9080b18340580ed5ca4dcb2731d20b21f9a4dea80a4736ddb2cc276f504a23->leave($__internal_eb9080b18340580ed5ca4dcb2731d20b21f9a4dea80a4736ddb2cc276f504a23_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c75f82669973cd21f12e82b5acef49ddea798afbb129808981797bf30f975831 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c75f82669973cd21f12e82b5acef49ddea798afbb129808981797bf30f975831->enter($__internal_c75f82669973cd21f12e82b5acef49ddea798afbb129808981797bf30f975831_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c75f82669973cd21f12e82b5acef49ddea798afbb129808981797bf30f975831->leave($__internal_c75f82669973cd21f12e82b5acef49ddea798afbb129808981797bf30f975831_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_34635d14714e5d8d2b09151d9bb995698d6779b60c76b53b2207e5ead811f241 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34635d14714e5d8d2b09151d9bb995698d6779b60c76b53b2207e5ead811f241->enter($__internal_34635d14714e5d8d2b09151d9bb995698d6779b60c76b53b2207e5ead811f241_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_34635d14714e5d8d2b09151d9bb995698d6779b60c76b53b2207e5ead811f241->leave($__internal_34635d14714e5d8d2b09151d9bb995698d6779b60c76b53b2207e5ead811f241_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\TM-S_TAI_LAB13_WEB_PHP[2017-01][DEV]\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
