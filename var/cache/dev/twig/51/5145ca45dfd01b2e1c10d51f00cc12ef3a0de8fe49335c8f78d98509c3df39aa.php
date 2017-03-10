<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_eeb27594c301ce19fa3429c821aa2e947a46ae6d3a8322c81ebf1416d7be98b2 extends Twig_Template
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
        $__internal_db175b72b83186fe1ebbd1b28a5011e228ca95d458fcb44dcdfd526292cca1f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db175b72b83186fe1ebbd1b28a5011e228ca95d458fcb44dcdfd526292cca1f0->enter($__internal_db175b72b83186fe1ebbd1b28a5011e228ca95d458fcb44dcdfd526292cca1f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db175b72b83186fe1ebbd1b28a5011e228ca95d458fcb44dcdfd526292cca1f0->leave($__internal_db175b72b83186fe1ebbd1b28a5011e228ca95d458fcb44dcdfd526292cca1f0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_14325784d7414ce40ee2487857efa0a02290f04de747ce1e9c412be2756aec6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14325784d7414ce40ee2487857efa0a02290f04de747ce1e9c412be2756aec6f->enter($__internal_14325784d7414ce40ee2487857efa0a02290f04de747ce1e9c412be2756aec6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_14325784d7414ce40ee2487857efa0a02290f04de747ce1e9c412be2756aec6f->leave($__internal_14325784d7414ce40ee2487857efa0a02290f04de747ce1e9c412be2756aec6f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9673fe55d5a00a759d431f75edb52642a53f62533fad656fba0d2e0b1d48e8af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9673fe55d5a00a759d431f75edb52642a53f62533fad656fba0d2e0b1d48e8af->enter($__internal_9673fe55d5a00a759d431f75edb52642a53f62533fad656fba0d2e0b1d48e8af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9673fe55d5a00a759d431f75edb52642a53f62533fad656fba0d2e0b1d48e8af->leave($__internal_9673fe55d5a00a759d431f75edb52642a53f62533fad656fba0d2e0b1d48e8af_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_75bbde40ee8151f7a7ac48f5d75552854c34aca37a5cf586483efd564318f227 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75bbde40ee8151f7a7ac48f5d75552854c34aca37a5cf586483efd564318f227->enter($__internal_75bbde40ee8151f7a7ac48f5d75552854c34aca37a5cf586483efd564318f227_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_75bbde40ee8151f7a7ac48f5d75552854c34aca37a5cf586483efd564318f227->leave($__internal_75bbde40ee8151f7a7ac48f5d75552854c34aca37a5cf586483efd564318f227_prof);

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
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\PTUT\\rechercheStage\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
