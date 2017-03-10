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
        $__internal_c56df8fb1348bc95cc66d7b323d79d2613ff4010a91f21ee8c0d60387196f1b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c56df8fb1348bc95cc66d7b323d79d2613ff4010a91f21ee8c0d60387196f1b1->enter($__internal_c56df8fb1348bc95cc66d7b323d79d2613ff4010a91f21ee8c0d60387196f1b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c56df8fb1348bc95cc66d7b323d79d2613ff4010a91f21ee8c0d60387196f1b1->leave($__internal_c56df8fb1348bc95cc66d7b323d79d2613ff4010a91f21ee8c0d60387196f1b1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f06eef1614c0d0d7f99795f0c730819ef432b115b37ba55e618eb795d2e4f165 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f06eef1614c0d0d7f99795f0c730819ef432b115b37ba55e618eb795d2e4f165->enter($__internal_f06eef1614c0d0d7f99795f0c730819ef432b115b37ba55e618eb795d2e4f165_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f06eef1614c0d0d7f99795f0c730819ef432b115b37ba55e618eb795d2e4f165->leave($__internal_f06eef1614c0d0d7f99795f0c730819ef432b115b37ba55e618eb795d2e4f165_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_88038dc4ebd4ce037cb0db247c777e174c38ba7008861b158972f85cf56e9d19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88038dc4ebd4ce037cb0db247c777e174c38ba7008861b158972f85cf56e9d19->enter($__internal_88038dc4ebd4ce037cb0db247c777e174c38ba7008861b158972f85cf56e9d19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_88038dc4ebd4ce037cb0db247c777e174c38ba7008861b158972f85cf56e9d19->leave($__internal_88038dc4ebd4ce037cb0db247c777e174c38ba7008861b158972f85cf56e9d19_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cba7bb6afb2a8065242624f733f3fff211609061baede834d8243650e4874f0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cba7bb6afb2a8065242624f733f3fff211609061baede834d8243650e4874f0b->enter($__internal_cba7bb6afb2a8065242624f733f3fff211609061baede834d8243650e4874f0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_cba7bb6afb2a8065242624f733f3fff211609061baede834d8243650e4874f0b->leave($__internal_cba7bb6afb2a8065242624f733f3fff211609061baede834d8243650e4874f0b_prof);

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
