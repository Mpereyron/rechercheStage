<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_1173e97ff23368d9f896bb3417fe8babfad9712ba4cfdbc193be994d7ab44182 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_177ca25743d3ba95a9a680a084df6aa8f1ce7880f98e6f4ff056e884680d549a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_177ca25743d3ba95a9a680a084df6aa8f1ce7880f98e6f4ff056e884680d549a->enter($__internal_177ca25743d3ba95a9a680a084df6aa8f1ce7880f98e6f4ff056e884680d549a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_177ca25743d3ba95a9a680a084df6aa8f1ce7880f98e6f4ff056e884680d549a->leave($__internal_177ca25743d3ba95a9a680a084df6aa8f1ce7880f98e6f4ff056e884680d549a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c380ac9201907d467644244e4cb3a42c166374629eb2abb5b44fc94cc417b733 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c380ac9201907d467644244e4cb3a42c166374629eb2abb5b44fc94cc417b733->enter($__internal_c380ac9201907d467644244e4cb3a42c166374629eb2abb5b44fc94cc417b733_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_c380ac9201907d467644244e4cb3a42c166374629eb2abb5b44fc94cc417b733->leave($__internal_c380ac9201907d467644244e4cb3a42c166374629eb2abb5b44fc94cc417b733_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "C:\\wamp64\\www\\PTUT\\rechercheStage\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Security\\login.html.twig");
    }
}
