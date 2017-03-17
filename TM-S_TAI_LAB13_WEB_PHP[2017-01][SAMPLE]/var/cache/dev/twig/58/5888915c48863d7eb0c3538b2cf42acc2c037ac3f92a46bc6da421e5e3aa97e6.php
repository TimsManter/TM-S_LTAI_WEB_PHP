<?php

/* default/index.html.twig */
class __TwigTemplate_0ffaeaf89dadeb5f5983b41108df2734544cb535e4df2481f45f9d7f8072dafd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f8ac06317652d6aba2d9011f0411c23d68576363c4382bb1bc2026cc9cb77705 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8ac06317652d6aba2d9011f0411c23d68576363c4382bb1bc2026cc9cb77705->enter($__internal_f8ac06317652d6aba2d9011f0411c23d68576363c4382bb1bc2026cc9cb77705_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f8ac06317652d6aba2d9011f0411c23d68576363c4382bb1bc2026cc9cb77705->leave($__internal_f8ac06317652d6aba2d9011f0411c23d68576363c4382bb1bc2026cc9cb77705_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_15d3744073a1597f9ba61e789126215a45b6160e212419b67107c016c830663c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15d3744073a1597f9ba61e789126215a45b6160e212419b67107c016c830663c->enter($__internal_15d3744073a1597f9ba61e789126215a45b6160e212419b67107c016c830663c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "default/index.html.twig"));

        // line 3
        echo "<h2>Języki programowania</h2>
<ul>
";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["jezyk"]) {
            // line 6
            echo "<li>
";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["jezyk"], "caption", array()), "html", null, true);
            echo "
</li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['jezyk'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "</ul>
";
        
        $__internal_15d3744073a1597f9ba61e789126215a45b6160e212419b67107c016c830663c->leave($__internal_15d3744073a1597f9ba61e789126215a45b6160e212419b67107c016c830663c_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 10,  51 => 7,  48 => 6,  44 => 5,  40 => 3,  34 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}
{% block body %}
<h2>Języki programowania</h2>
<ul>
{% for jezyk in entities %}
<li>
{{jezyk.caption}}
</li>
{% endfor %}
</ul>
{% endblock %}", "default/index.html.twig", "C:\\xampp\\htdocs\\TM-S_TAI_LAB13_WEB_PHP[2017-01][DEV]\\app\\Resources\\views\\default\\index.html.twig");
    }
}
