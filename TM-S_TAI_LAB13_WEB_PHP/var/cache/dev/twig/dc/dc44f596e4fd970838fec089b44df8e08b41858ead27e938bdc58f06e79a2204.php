<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_7d1631b94bdcb77b48b35a339fb6b24a95787ed51a587aedb425b66af3001757 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a98a6ceb53d333c8c015a70565e110a93ca36093bae189e4297b5ebb97da8dc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a98a6ceb53d333c8c015a70565e110a93ca36093bae189e4297b5ebb97da8dc1->enter($__internal_a98a6ceb53d333c8c015a70565e110a93ca36093bae189e4297b5ebb97da8dc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a98a6ceb53d333c8c015a70565e110a93ca36093bae189e4297b5ebb97da8dc1->leave($__internal_a98a6ceb53d333c8c015a70565e110a93ca36093bae189e4297b5ebb97da8dc1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c9dc717bedc88ace5749447f3ec68f6cab54d6a22a73437d9ff8935d7a1f887c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9dc717bedc88ace5749447f3ec68f6cab54d6a22a73437d9ff8935d7a1f887c->enter($__internal_c9dc717bedc88ace5749447f3ec68f6cab54d6a22a73437d9ff8935d7a1f887c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c9dc717bedc88ace5749447f3ec68f6cab54d6a22a73437d9ff8935d7a1f887c->leave($__internal_c9dc717bedc88ace5749447f3ec68f6cab54d6a22a73437d9ff8935d7a1f887c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b4ba518acc0a64ac27802ca4fb4614f1d4afe1eb2abf197c99f33b0a01441156 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4ba518acc0a64ac27802ca4fb4614f1d4afe1eb2abf197c99f33b0a01441156->enter($__internal_b4ba518acc0a64ac27802ca4fb4614f1d4afe1eb2abf197c99f33b0a01441156_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b4ba518acc0a64ac27802ca4fb4614f1d4afe1eb2abf197c99f33b0a01441156->leave($__internal_b4ba518acc0a64ac27802ca4fb4614f1d4afe1eb2abf197c99f33b0a01441156_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_72a0c39a37fdb2d2ca6fb74065d6dc1c9d85de0aca4f50202a87c23b2c8e42e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72a0c39a37fdb2d2ca6fb74065d6dc1c9d85de0aca4f50202a87c23b2c8e42e2->enter($__internal_72a0c39a37fdb2d2ca6fb74065d6dc1c9d85de0aca4f50202a87c23b2c8e42e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_72a0c39a37fdb2d2ca6fb74065d6dc1c9d85de0aca4f50202a87c23b2c8e42e2->leave($__internal_72a0c39a37fdb2d2ca6fb74065d6dc1c9d85de0aca4f50202a87c23b2c8e42e2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\xampp\\htdocs\\TM-S_TAI_LAB13_WEB_PHP[2017-01][DEV]\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
