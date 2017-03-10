<?php

/* etudiant.html.twig */
class __TwigTemplate_a82be5a0fc5939aa685a7bf6989fbfd68b918f35c93f626f7134e71d0a80a406 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::base.html.twig", "etudiant.html.twig", 3);
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
        $__internal_99354a035a08170801f0d042de1629190e4d09451f2bec81d64df8d4add3393c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99354a035a08170801f0d042de1629190e4d09451f2bec81d64df8d4add3393c->enter($__internal_99354a035a08170801f0d042de1629190e4d09451f2bec81d64df8d4add3393c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "etudiant.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_99354a035a08170801f0d042de1629190e4d09451f2bec81d64df8d4add3393c->leave($__internal_99354a035a08170801f0d042de1629190e4d09451f2bec81d64df8d4add3393c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b4ff7d314e46e1fd71becbbdddf222122c7877181d84236e614f699e3987028b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4ff7d314e46e1fd71becbbdddf222122c7877181d84236e614f699e3987028b->enter($__internal_b4ff7d314e46e1fd71becbbdddf222122c7877181d84236e614f699e3987028b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "

    <div class=\"col-md-6\">
        ";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["etudiantForm"] ?? $this->getContext($context, "etudiantForm")), 'form_start');
        echo "
        <div class=\"form-group\">
            <table>
                <tr>
                    <td>
                        ";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["etudiantForm"] ?? $this->getContext($context, "etudiantForm")), "name", array()), 'row', array("label" => "Nom ", "value" => $this->getAttribute(($context["etudiant"] ?? $this->getContext($context, "etudiant")), "nom", array())));
        echo "
                    </td>
                </tr>
                <tr>
                    <td>
                        ";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["etudiantForm"] ?? $this->getContext($context, "etudiantForm")), "firstName", array()), 'row', array("label" => "Prenom ", "value" => $this->getAttribute(($context["etudiant"] ?? $this->getContext($context, "etudiant")), "prenom", array())));
        echo "
                    </td>
                </tr>
                <tr>
                    <td>
                        ";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["etudiantForm"] ?? $this->getContext($context, "etudiantForm")), "email", array()), 'row', array("label" => "Email ", "value" => $this->getAttribute(($context["etudiant"] ?? $this->getContext($context, "etudiant")), "email", array())));
        echo "
                    </td>
                </tr>
                <tr>
                    <td>
                        ";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["etudiantForm"] ?? $this->getContext($context, "etudiantForm")), "CV", array()), 'row', array("label" => "CV "));
        echo "
                    </td>
                </tr>
                <tr>
                    <td>
                      ";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["etudiantForm"] ?? $this->getContext($context, "etudiantForm")), "btnModif", array()), 'row', array("label" => "Valider "));
        echo "
                        ";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["etudiantForm"] ?? $this->getContext($context, "etudiantForm")), "_token", array()), 'widget');
        echo "
                    </td>
                </tr>
            </table>

        </div>
        <div class=\"form-group\">

        </div>
    </div>
";
        
        $__internal_b4ff7d314e46e1fd71becbbdddf222122c7877181d84236e614f699e3987028b->leave($__internal_b4ff7d314e46e1fd71becbbdddf222122c7877181d84236e614f699e3987028b_prof);

    }

    public function getTemplateName()
    {
        return "etudiant.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 35,  85 => 34,  77 => 29,  69 => 24,  61 => 19,  53 => 14,  45 => 9,  40 => 6,  34 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("

{% extends '::base.html.twig' %}

{% block body %}


    <div class=\"col-md-6\">
        {{ form_start(etudiantForm) }}
        <div class=\"form-group\">
            <table>
                <tr>
                    <td>
                        {{ form_row(etudiantForm.name, {'label': 'Nom ', 'value': etudiant.nom }) }}
                    </td>
                </tr>
                <tr>
                    <td>
                        {{ form_row(etudiantForm.firstName, {'label': 'Prenom ', 'value': etudiant.prenom }) }}
                    </td>
                </tr>
                <tr>
                    <td>
                        {{ form_row(etudiantForm.email, {'label': 'Email ', 'value': etudiant.email }) }}
                    </td>
                </tr>
                <tr>
                    <td>
                        {{ form_row(etudiantForm.CV, {'label': 'CV '}) }}
                    </td>
                </tr>
                <tr>
                    <td>
                      {{ form_row(etudiantForm.btnModif, {'label': 'Valider '}) }}
                        {{ form_widget(etudiantForm._token) }}
                    </td>
                </tr>
            </table>

        </div>
        <div class=\"form-group\">

        </div>
    </div>
{% endblock %}", "etudiant.html.twig", "C:\\wamp64\\www\\PTUT\\rechercheStage\\app\\Resources\\views\\etudiant.html.twig");
    }
}
