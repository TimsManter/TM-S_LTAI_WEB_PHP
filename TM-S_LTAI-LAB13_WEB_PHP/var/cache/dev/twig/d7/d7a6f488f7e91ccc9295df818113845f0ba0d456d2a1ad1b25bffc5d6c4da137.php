<?php

/* base.html.twig */
class __TwigTemplate_e6fbed8ff5a377c2d94f14bd64c766cee3c380edc4c4b28e17c8f2a70783bcfd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9f742758d6c8c60d9769b7880d79bc39ecd725c2efb8c5c806ef030be5aacf83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f742758d6c8c60d9769b7880d79bc39ecd725c2efb8c5c806ef030be5aacf83->enter($__internal_9f742758d6c8c60d9769b7880d79bc39ecd725c2efb8c5c806ef030be5aacf83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_9f742758d6c8c60d9769b7880d79bc39ecd725c2efb8c5c806ef030be5aacf83->leave($__internal_9f742758d6c8c60d9769b7880d79bc39ecd725c2efb8c5c806ef030be5aacf83_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_eeb0463ccdc3662715afffe98eb926c8d3ab3e6b371be9688ef473781a15f319 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eeb0463ccdc3662715afffe98eb926c8d3ab3e6b371be9688ef473781a15f319->enter($__internal_eeb0463ccdc3662715afffe98eb926c8d3ab3e6b371be9688ef473781a15f319_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        echo "Welcome!";
        
        $__internal_eeb0463ccdc3662715afffe98eb926c8d3ab3e6b371be9688ef473781a15f319->leave($__internal_eeb0463ccdc3662715afffe98eb926c8d3ab3e6b371be9688ef473781a15f319_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_59616b69f2d26e3a3e79618708d02bc61b3ea1a2c67c3bb0c744f24f0e0ec3fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59616b69f2d26e3a3e79618708d02bc61b3ea1a2c67c3bb0c744f24f0e0ec3fc->enter($__internal_59616b69f2d26e3a3e79618708d02bc61b3ea1a2c67c3bb0c744f24f0e0ec3fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_59616b69f2d26e3a3e79618708d02bc61b3ea1a2c67c3bb0c744f24f0e0ec3fc->leave($__internal_59616b69f2d26e3a3e79618708d02bc61b3ea1a2c67c3bb0c744f24f0e0ec3fc_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_e84e17fbe6f92ba991e044f8bc910a6b7ca5f91b86f3dbb21e33b3ab8c60332e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e84e17fbe6f92ba991e044f8bc910a6b7ca5f91b86f3dbb21e33b3ab8c60332e->enter($__internal_e84e17fbe6f92ba991e044f8bc910a6b7ca5f91b86f3dbb21e33b3ab8c60332e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_e84e17fbe6f92ba991e044f8bc910a6b7ca5f91b86f3dbb21e33b3ab8c60332e->leave($__internal_e84e17fbe6f92ba991e044f8bc910a6b7ca5f91b86f3dbb21e33b3ab8c60332e_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5db983ef71efb7fa0542551dbe50c597c79cdc4d61b205bd208155702d36b6c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5db983ef71efb7fa0542551dbe50c597c79cdc4d61b205bd208155702d36b6c9->enter($__internal_5db983ef71efb7fa0542551dbe50c597c79cdc4d61b205bd208155702d36b6c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_5db983ef71efb7fa0542551dbe50c597c79cdc4d61b205bd208155702d36b6c9->leave($__internal_5db983ef71efb7fa0542551dbe50c597c79cdc4d61b205bd208155702d36b6c9_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\xampp\\htdocs\\TM-S_TAI_LAB13_WEB_PHP[2017-01][DEV]\\app\\Resources\\views\\base.html.twig");
    }
}
