<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_26db775e02020fafaa6df2765b0f98417634b5871d912eae74f52e74d3961d25 extends Twig_Template
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
        $__internal_77008847eee5bc7c6b52eb06665295e9beed6df6e5757750ef27a2d3358b4d5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77008847eee5bc7c6b52eb06665295e9beed6df6e5757750ef27a2d3358b4d5a->enter($__internal_77008847eee5bc7c6b52eb06665295e9beed6df6e5757750ef27a2d3358b4d5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_77008847eee5bc7c6b52eb06665295e9beed6df6e5757750ef27a2d3358b4d5a->leave($__internal_77008847eee5bc7c6b52eb06665295e9beed6df6e5757750ef27a2d3358b4d5a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4c9b80ea4f0cabe6a4bea016cc645ec7e3e0ea1759cb15e7867d61daad40a2d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c9b80ea4f0cabe6a4bea016cc645ec7e3e0ea1759cb15e7867d61daad40a2d5->enter($__internal_4c9b80ea4f0cabe6a4bea016cc645ec7e3e0ea1759cb15e7867d61daad40a2d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_4c9b80ea4f0cabe6a4bea016cc645ec7e3e0ea1759cb15e7867d61daad40a2d5->leave($__internal_4c9b80ea4f0cabe6a4bea016cc645ec7e3e0ea1759cb15e7867d61daad40a2d5_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b451503ab9c08502f95af032b6d14f58617b6851e32289c4fec9d2e595382a91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b451503ab9c08502f95af032b6d14f58617b6851e32289c4fec9d2e595382a91->enter($__internal_b451503ab9c08502f95af032b6d14f58617b6851e32289c4fec9d2e595382a91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b451503ab9c08502f95af032b6d14f58617b6851e32289c4fec9d2e595382a91->leave($__internal_b451503ab9c08502f95af032b6d14f58617b6851e32289c4fec9d2e595382a91_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f44cfd939b743b44583241cefc9ef799a793b7d6a02ff06a50336e1a60bbba4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f44cfd939b743b44583241cefc9ef799a793b7d6a02ff06a50336e1a60bbba4f->enter($__internal_f44cfd939b743b44583241cefc9ef799a793b7d6a02ff06a50336e1a60bbba4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_f44cfd939b743b44583241cefc9ef799a793b7d6a02ff06a50336e1a60bbba4f->leave($__internal_f44cfd939b743b44583241cefc9ef799a793b7d6a02ff06a50336e1a60bbba4f_prof);

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
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp64\\www\\PTUT\\rechercheStage\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
