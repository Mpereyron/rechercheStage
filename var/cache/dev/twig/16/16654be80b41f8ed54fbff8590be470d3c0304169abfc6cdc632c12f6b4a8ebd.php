<?php

/* ::base.html.twig */
class __TwigTemplate_9ed36ebaecc8ef5ebb62327c393bc7e2a035f995e9e2b8c57ebc12d1b03f0f36 extends Twig_Template
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
        $__internal_7a882f6bed778df057f66ab3a6022bd098363485241bdc60fd1698df5899a443 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a882f6bed778df057f66ab3a6022bd098363485241bdc60fd1698df5899a443->enter($__internal_7a882f6bed778df057f66ab3a6022bd098363485241bdc60fd1698df5899a443_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_7a882f6bed778df057f66ab3a6022bd098363485241bdc60fd1698df5899a443->leave($__internal_7a882f6bed778df057f66ab3a6022bd098363485241bdc60fd1698df5899a443_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ec5a54af136a56a589d9f0a2ce800dbd639e27afcee3613939ae6ce88c12532c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec5a54af136a56a589d9f0a2ce800dbd639e27afcee3613939ae6ce88c12532c->enter($__internal_ec5a54af136a56a589d9f0a2ce800dbd639e27afcee3613939ae6ce88c12532c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcomeee!";
        
        $__internal_ec5a54af136a56a589d9f0a2ce800dbd639e27afcee3613939ae6ce88c12532c->leave($__internal_ec5a54af136a56a589d9f0a2ce800dbd639e27afcee3613939ae6ce88c12532c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8cded6e0a1a1aff473bf20cd0cb6a91b5e8de37b707ec19fa6132bdf9fe448c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cded6e0a1a1aff473bf20cd0cb6a91b5e8de37b707ec19fa6132bdf9fe448c7->enter($__internal_8cded6e0a1a1aff473bf20cd0cb6a91b5e8de37b707ec19fa6132bdf9fe448c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_8cded6e0a1a1aff473bf20cd0cb6a91b5e8de37b707ec19fa6132bdf9fe448c7->leave($__internal_8cded6e0a1a1aff473bf20cd0cb6a91b5e8de37b707ec19fa6132bdf9fe448c7_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_858f925f7cb0f7b4fc933d115a6f9a6a6c1d098a60ad777560b9132a1bf535d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_858f925f7cb0f7b4fc933d115a6f9a6a6c1d098a60ad777560b9132a1bf535d8->enter($__internal_858f925f7cb0f7b4fc933d115a6f9a6a6c1d098a60ad777560b9132a1bf535d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_858f925f7cb0f7b4fc933d115a6f9a6a6c1d098a60ad777560b9132a1bf535d8->leave($__internal_858f925f7cb0f7b4fc933d115a6f9a6a6c1d098a60ad777560b9132a1bf535d8_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_860fb12112c2110df12cfb2191301e0f06ed94138841e7423705d407b243230e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_860fb12112c2110df12cfb2191301e0f06ed94138841e7423705d407b243230e->enter($__internal_860fb12112c2110df12cfb2191301e0f06ed94138841e7423705d407b243230e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_860fb12112c2110df12cfb2191301e0f06ed94138841e7423705d407b243230e->leave($__internal_860fb12112c2110df12cfb2191301e0f06ed94138841e7423705d407b243230e_prof);

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
", "::base.html.twig", "C:\\wamp64\\www\\PTUT\\rechercheStage\\app/Resources\\views/base.html.twig");
    }
}
