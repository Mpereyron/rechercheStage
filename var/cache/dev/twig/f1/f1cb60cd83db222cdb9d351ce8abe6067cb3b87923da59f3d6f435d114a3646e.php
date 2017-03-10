<?php

/* base.html.twig */
class __TwigTemplate_420fcde905306a7291181b35e51fe5100ed3737801701ecac8dbbebd34cbb677 extends Twig_Template
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
        $__internal_2183592d5e97fec4e83bf9e03690d34e647e17afa9c8d08b2981bac5e1581a9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2183592d5e97fec4e83bf9e03690d34e647e17afa9c8d08b2981bac5e1581a9a->enter($__internal_2183592d5e97fec4e83bf9e03690d34e647e17afa9c8d08b2981bac5e1581a9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 11
        $this->displayBlock('body', $context, $blocks);
        // line 12
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 13
        echo "    </body>
</html>
";
        
        $__internal_2183592d5e97fec4e83bf9e03690d34e647e17afa9c8d08b2981bac5e1581a9a->leave($__internal_2183592d5e97fec4e83bf9e03690d34e647e17afa9c8d08b2981bac5e1581a9a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a5d2fb71961278df475f961212ea2e03bce78f2a0e0a17c8925d28dcaf504517 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5d2fb71961278df475f961212ea2e03bce78f2a0e0a17c8925d28dcaf504517->enter($__internal_a5d2fb71961278df475f961212ea2e03bce78f2a0e0a17c8925d28dcaf504517_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcomeee!";
        
        $__internal_a5d2fb71961278df475f961212ea2e03bce78f2a0e0a17c8925d28dcaf504517->leave($__internal_a5d2fb71961278df475f961212ea2e03bce78f2a0e0a17c8925d28dcaf504517_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_87c20fef88bb5acf38d3439d79ffb13d4a40e987d24b2b4d7f467b0e2f9e7b46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87c20fef88bb5acf38d3439d79ffb13d4a40e987d24b2b4d7f467b0e2f9e7b46->enter($__internal_87c20fef88bb5acf38d3439d79ffb13d4a40e987d24b2b4d7f467b0e2f9e7b46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_87c20fef88bb5acf38d3439d79ffb13d4a40e987d24b2b4d7f467b0e2f9e7b46->leave($__internal_87c20fef88bb5acf38d3439d79ffb13d4a40e987d24b2b4d7f467b0e2f9e7b46_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_cb6df6bc96d5ab48de58d27cdf5988ab4ff92ab6d2aeadf5f5d60bc3dd0bc528 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb6df6bc96d5ab48de58d27cdf5988ab4ff92ab6d2aeadf5f5d60bc3dd0bc528->enter($__internal_cb6df6bc96d5ab48de58d27cdf5988ab4ff92ab6d2aeadf5f5d60bc3dd0bc528_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_cb6df6bc96d5ab48de58d27cdf5988ab4ff92ab6d2aeadf5f5d60bc3dd0bc528->leave($__internal_cb6df6bc96d5ab48de58d27cdf5988ab4ff92ab6d2aeadf5f5d60bc3dd0bc528_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_319f7c1250f2fd065327caf6715448d5dabb69675efdb03bdc4bf46535878b3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319f7c1250f2fd065327caf6715448d5dabb69675efdb03bdc4bf46535878b3d->enter($__internal_319f7c1250f2fd065327caf6715448d5dabb69675efdb03bdc4bf46535878b3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319f7c1250f2fd065327caf6715448d5dabb69675efdb03bdc4bf46535878b3d->leave($__internal_319f7c1250f2fd065327caf6715448d5dabb69675efdb03bdc4bf46535878b3d_prof);

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
        return array (  94 => 12,  83 => 11,  72 => 6,  60 => 5,  51 => 13,  48 => 12,  46 => 11,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
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
        <title>{% block title %}Welcomeee!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>

        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\wamp64\\www\\PTUT\\rechercheStage\\app\\Resources\\views\\base.html.twig");
    }
}
