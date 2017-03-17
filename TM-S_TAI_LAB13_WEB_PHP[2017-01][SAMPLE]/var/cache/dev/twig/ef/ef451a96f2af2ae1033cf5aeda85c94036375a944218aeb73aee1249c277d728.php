<?php

/* ::base.html.twig */
class __TwigTemplate_795c76ae314a65e774ca4fa4d1243ac2f170a4929df64d1b50c6e5546c2dbb8b extends Twig_Template
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
        $__internal_c22a7bf704ff7d417f8e50ff7015f0c76436183cf9231ce4407b3d4c2f43b352 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c22a7bf704ff7d417f8e50ff7015f0c76436183cf9231ce4407b3d4c2f43b352->enter($__internal_c22a7bf704ff7d417f8e50ff7015f0c76436183cf9231ce4407b3d4c2f43b352_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_c22a7bf704ff7d417f8e50ff7015f0c76436183cf9231ce4407b3d4c2f43b352->leave($__internal_c22a7bf704ff7d417f8e50ff7015f0c76436183cf9231ce4407b3d4c2f43b352_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f5833b9c1249db954b137e23f4a2e0290e82f4a7e0548e1018717f4a22a27a12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5833b9c1249db954b137e23f4a2e0290e82f4a7e0548e1018717f4a22a27a12->enter($__internal_f5833b9c1249db954b137e23f4a2e0290e82f4a7e0548e1018717f4a22a27a12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::base.html.twig"));

        echo "Welcome!";
        
        $__internal_f5833b9c1249db954b137e23f4a2e0290e82f4a7e0548e1018717f4a22a27a12->leave($__internal_f5833b9c1249db954b137e23f4a2e0290e82f4a7e0548e1018717f4a22a27a12_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a84389a5f04ecc02d41fea5fb6b421b9e5c9f7d142c8898b0e91e32e2598c915 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a84389a5f04ecc02d41fea5fb6b421b9e5c9f7d142c8898b0e91e32e2598c915->enter($__internal_a84389a5f04ecc02d41fea5fb6b421b9e5c9f7d142c8898b0e91e32e2598c915_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::base.html.twig"));

        
        $__internal_a84389a5f04ecc02d41fea5fb6b421b9e5c9f7d142c8898b0e91e32e2598c915->leave($__internal_a84389a5f04ecc02d41fea5fb6b421b9e5c9f7d142c8898b0e91e32e2598c915_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_213d9ab1bb4c1c79afb8ca1846c8dbda16a9aa08c48abbfc68ae6910ffa15e0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_213d9ab1bb4c1c79afb8ca1846c8dbda16a9aa08c48abbfc68ae6910ffa15e0a->enter($__internal_213d9ab1bb4c1c79afb8ca1846c8dbda16a9aa08c48abbfc68ae6910ffa15e0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::base.html.twig"));

        
        $__internal_213d9ab1bb4c1c79afb8ca1846c8dbda16a9aa08c48abbfc68ae6910ffa15e0a->leave($__internal_213d9ab1bb4c1c79afb8ca1846c8dbda16a9aa08c48abbfc68ae6910ffa15e0a_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8a02bcaf8afaddd6f47774abcfad6ad0acda2744a2609f3adc172eb84e46e771 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a02bcaf8afaddd6f47774abcfad6ad0acda2744a2609f3adc172eb84e46e771->enter($__internal_8a02bcaf8afaddd6f47774abcfad6ad0acda2744a2609f3adc172eb84e46e771_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::base.html.twig"));

        
        $__internal_8a02bcaf8afaddd6f47774abcfad6ad0acda2744a2609f3adc172eb84e46e771->leave($__internal_8a02bcaf8afaddd6f47774abcfad6ad0acda2744a2609f3adc172eb84e46e771_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
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
", "::base.html.twig", "C:\\xampp\\htdocs\\TM-S_TAI_LAB13_WEB_PHP[2017-01][DEV]\\app/Resources\\views/base.html.twig");
    }
}
