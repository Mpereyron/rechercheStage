<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_d3f6795591526eacf2a3ec7dd5eed443c164ab32d540346c713a53f42b4c9086 extends Twig_Template
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
        $__internal_6cdcfc6470560ebc976dbc53186273532e28692df0b3106316774909f19a9fab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cdcfc6470560ebc976dbc53186273532e28692df0b3106316774909f19a9fab->enter($__internal_6cdcfc6470560ebc976dbc53186273532e28692df0b3106316774909f19a9fab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6cdcfc6470560ebc976dbc53186273532e28692df0b3106316774909f19a9fab->leave($__internal_6cdcfc6470560ebc976dbc53186273532e28692df0b3106316774909f19a9fab_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_cc5afbe2c5ad90739736f6e84ed4997b9b66f2a09fd12792e1134d1cad40a454 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc5afbe2c5ad90739736f6e84ed4997b9b66f2a09fd12792e1134d1cad40a454->enter($__internal_cc5afbe2c5ad90739736f6e84ed4997b9b66f2a09fd12792e1134d1cad40a454_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_cc5afbe2c5ad90739736f6e84ed4997b9b66f2a09fd12792e1134d1cad40a454->leave($__internal_cc5afbe2c5ad90739736f6e84ed4997b9b66f2a09fd12792e1134d1cad40a454_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a63679dd600471487b16c40353d16ccef6ff1d7b1b0ee56025b762b55494fc91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a63679dd600471487b16c40353d16ccef6ff1d7b1b0ee56025b762b55494fc91->enter($__internal_a63679dd600471487b16c40353d16ccef6ff1d7b1b0ee56025b762b55494fc91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a63679dd600471487b16c40353d16ccef6ff1d7b1b0ee56025b762b55494fc91->leave($__internal_a63679dd600471487b16c40353d16ccef6ff1d7b1b0ee56025b762b55494fc91_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_451ad894fe1e919ee1164b269e7fcb90de259fabecf8ee4424f0c432756e615f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_451ad894fe1e919ee1164b269e7fcb90de259fabecf8ee4424f0c432756e615f->enter($__internal_451ad894fe1e919ee1164b269e7fcb90de259fabecf8ee4424f0c432756e615f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_451ad894fe1e919ee1164b269e7fcb90de259fabecf8ee4424f0c432756e615f->leave($__internal_451ad894fe1e919ee1164b269e7fcb90de259fabecf8ee4424f0c432756e615f_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/home/ubuntu/rechercheStage/rechercheStage/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
