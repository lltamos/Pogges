<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c59cc98d0b9d42c507a45a45da7aa959fa8ab7562ce93d97dda89486e52ba84a extends Twig_Template
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
        $__internal_2f80135c6161e8fc85df93edb705e23b00bdd393d01980ff6970fddd065f4dc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f80135c6161e8fc85df93edb705e23b00bdd393d01980ff6970fddd065f4dc1->enter($__internal_2f80135c6161e8fc85df93edb705e23b00bdd393d01980ff6970fddd065f4dc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f80135c6161e8fc85df93edb705e23b00bdd393d01980ff6970fddd065f4dc1->leave($__internal_2f80135c6161e8fc85df93edb705e23b00bdd393d01980ff6970fddd065f4dc1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_cc31a9ebb539fcf4538a59e5eb74f974590aca86720514318e7f63e87978af2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc31a9ebb539fcf4538a59e5eb74f974590aca86720514318e7f63e87978af2d->enter($__internal_cc31a9ebb539fcf4538a59e5eb74f974590aca86720514318e7f63e87978af2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_cc31a9ebb539fcf4538a59e5eb74f974590aca86720514318e7f63e87978af2d->leave($__internal_cc31a9ebb539fcf4538a59e5eb74f974590aca86720514318e7f63e87978af2d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5161bd455212061cc2e5d5ba52e50903f4b05d3efaae2f5fd59195dac3afca1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5161bd455212061cc2e5d5ba52e50903f4b05d3efaae2f5fd59195dac3afca1d->enter($__internal_5161bd455212061cc2e5d5ba52e50903f4b05d3efaae2f5fd59195dac3afca1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5161bd455212061cc2e5d5ba52e50903f4b05d3efaae2f5fd59195dac3afca1d->leave($__internal_5161bd455212061cc2e5d5ba52e50903f4b05d3efaae2f5fd59195dac3afca1d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8a8176391def50604fb6d799f70c8deb222c285ddabc03b37be42d7408bac100 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a8176391def50604fb6d799f70c8deb222c285ddabc03b37be42d7408bac100->enter($__internal_8a8176391def50604fb6d799f70c8deb222c285ddabc03b37be42d7408bac100_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_8a8176391def50604fb6d799f70c8deb222c285ddabc03b37be42d7408bac100->leave($__internal_8a8176391def50604fb6d799f70c8deb222c285ddabc03b37be42d7408bac100_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/Users/Exx/Desktop/edusoho/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
