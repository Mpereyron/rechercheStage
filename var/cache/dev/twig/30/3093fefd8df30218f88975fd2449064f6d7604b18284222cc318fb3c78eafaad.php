<?php

/* base.html.twig */
class __TwigTemplate_99096e3dfab57a8e8d418e83058b770559972e6efd1479a09553502de22a5b35 extends Twig_Template
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
        $__internal_0642375f7b9c39395404ecb0b53e8eb468243948ece221914de8287c645873ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0642375f7b9c39395404ecb0b53e8eb468243948ece221914de8287c645873ea->enter($__internal_0642375f7b9c39395404ecb0b53e8eb468243948ece221914de8287c645873ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_0642375f7b9c39395404ecb0b53e8eb468243948ece221914de8287c645873ea->leave($__internal_0642375f7b9c39395404ecb0b53e8eb468243948ece221914de8287c645873ea_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c124f126afbfcdfb51ee6260b57371cd0865761f8fd9533a8d2c8af09c6b01cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c124f126afbfcdfb51ee6260b57371cd0865761f8fd9533a8d2c8af09c6b01cd->enter($__internal_c124f126afbfcdfb51ee6260b57371cd0865761f8fd9533a8d2c8af09c6b01cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcomeee!";
        
        $__internal_c124f126afbfcdfb51ee6260b57371cd0865761f8fd9533a8d2c8af09c6b01cd->leave($__internal_c124f126afbfcdfb51ee6260b57371cd0865761f8fd9533a8d2c8af09c6b01cd_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6e4ee9aadd694d07eeff8ab3ec96762c3d077e1910defd4dc3c8f6f23c654004 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e4ee9aadd694d07eeff8ab3ec96762c3d077e1910defd4dc3c8f6f23c654004->enter($__internal_6e4ee9aadd694d07eeff8ab3ec96762c3d077e1910defd4dc3c8f6f23c654004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6e4ee9aadd694d07eeff8ab3ec96762c3d077e1910defd4dc3c8f6f23c654004->leave($__internal_6e4ee9aadd694d07eeff8ab3ec96762c3d077e1910defd4dc3c8f6f23c654004_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_77f670c15d6b19be3e124bed292bd1bd595811a46834ae2b16f3e0e80fdf281d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77f670c15d6b19be3e124bed292bd1bd595811a46834ae2b16f3e0e80fdf281d->enter($__internal_77f670c15d6b19be3e124bed292bd1bd595811a46834ae2b16f3e0e80fdf281d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_77f670c15d6b19be3e124bed292bd1bd595811a46834ae2b16f3e0e80fdf281d->leave($__internal_77f670c15d6b19be3e124bed292bd1bd595811a46834ae2b16f3e0e80fdf281d_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6c520a95a3a76bbc11516d5f63caf673ae26d5ad6dcbf2535b333e83e9cabdb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c520a95a3a76bbc11516d5f63caf673ae26d5ad6dcbf2535b333e83e9cabdb6->enter($__internal_6c520a95a3a76bbc11516d5f63caf673ae26d5ad6dcbf2535b333e83e9cabdb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6c520a95a3a76bbc11516d5f63caf673ae26d5ad6dcbf2535b333e83e9cabdb6->leave($__internal_6c520a95a3a76bbc11516d5f63caf673ae26d5ad6dcbf2535b333e83e9cabdb6_prof);

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
        <title>{% block title %}Welcomeee!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/home/ubuntu/rechercheStage/rechercheStage/app/Resources/views/base.html.twig");
    }
}
