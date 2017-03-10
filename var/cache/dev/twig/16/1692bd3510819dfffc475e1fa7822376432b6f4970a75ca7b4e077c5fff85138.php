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
        $__internal_199034c039c7ca4a7a2b821929858e33dc4d2def9011c01ee15d2bedd8b6a1fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_199034c039c7ca4a7a2b821929858e33dc4d2def9011c01ee15d2bedd8b6a1fa->enter($__internal_199034c039c7ca4a7a2b821929858e33dc4d2def9011c01ee15d2bedd8b6a1fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_199034c039c7ca4a7a2b821929858e33dc4d2def9011c01ee15d2bedd8b6a1fa->leave($__internal_199034c039c7ca4a7a2b821929858e33dc4d2def9011c01ee15d2bedd8b6a1fa_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9df05d27a4d8f053a3cab64c3bbdc109ebc1811b01771768b27aeea01849fc11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9df05d27a4d8f053a3cab64c3bbdc109ebc1811b01771768b27aeea01849fc11->enter($__internal_9df05d27a4d8f053a3cab64c3bbdc109ebc1811b01771768b27aeea01849fc11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_9df05d27a4d8f053a3cab64c3bbdc109ebc1811b01771768b27aeea01849fc11->leave($__internal_9df05d27a4d8f053a3cab64c3bbdc109ebc1811b01771768b27aeea01849fc11_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_87ff9c77e6dba1bb34fb4831d3da385c3583f70692010b5405b62225ce3bfb01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87ff9c77e6dba1bb34fb4831d3da385c3583f70692010b5405b62225ce3bfb01->enter($__internal_87ff9c77e6dba1bb34fb4831d3da385c3583f70692010b5405b62225ce3bfb01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_87ff9c77e6dba1bb34fb4831d3da385c3583f70692010b5405b62225ce3bfb01->leave($__internal_87ff9c77e6dba1bb34fb4831d3da385c3583f70692010b5405b62225ce3bfb01_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e6a6d5f9641c7b6cc32ae2ce32ee6280bc07f89d0a30010224d847043d6ccf0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6a6d5f9641c7b6cc32ae2ce32ee6280bc07f89d0a30010224d847043d6ccf0b->enter($__internal_e6a6d5f9641c7b6cc32ae2ce32ee6280bc07f89d0a30010224d847043d6ccf0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_e6a6d5f9641c7b6cc32ae2ce32ee6280bc07f89d0a30010224d847043d6ccf0b->leave($__internal_e6a6d5f9641c7b6cc32ae2ce32ee6280bc07f89d0a30010224d847043d6ccf0b_prof);

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
