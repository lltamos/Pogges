<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_1566f6724c7a413d24f1ee19535f1fc6cf2266458db3491270f14dfa52697ff8 extends Twig_Template
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
        $__internal_11dbd96ecd9a27ba6dd24f33e07472cbb6430de1e584abfdb19a0fda75aadf94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11dbd96ecd9a27ba6dd24f33e07472cbb6430de1e584abfdb19a0fda75aadf94->enter($__internal_11dbd96ecd9a27ba6dd24f33e07472cbb6430de1e584abfdb19a0fda75aadf94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_11dbd96ecd9a27ba6dd24f33e07472cbb6430de1e584abfdb19a0fda75aadf94->leave($__internal_11dbd96ecd9a27ba6dd24f33e07472cbb6430de1e584abfdb19a0fda75aadf94_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_cb6a42b175ba9645b2d21c94954e6d8fe8b0c3701dbf0408a674ad91f09916bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb6a42b175ba9645b2d21c94954e6d8fe8b0c3701dbf0408a674ad91f09916bf->enter($__internal_cb6a42b175ba9645b2d21c94954e6d8fe8b0c3701dbf0408a674ad91f09916bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_cb6a42b175ba9645b2d21c94954e6d8fe8b0c3701dbf0408a674ad91f09916bf->leave($__internal_cb6a42b175ba9645b2d21c94954e6d8fe8b0c3701dbf0408a674ad91f09916bf_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_41bf3d2b6b5d10a4ef74a0aea1aed85e47a77cf6061253fedc24da6430be825f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41bf3d2b6b5d10a4ef74a0aea1aed85e47a77cf6061253fedc24da6430be825f->enter($__internal_41bf3d2b6b5d10a4ef74a0aea1aed85e47a77cf6061253fedc24da6430be825f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_41bf3d2b6b5d10a4ef74a0aea1aed85e47a77cf6061253fedc24da6430be825f->leave($__internal_41bf3d2b6b5d10a4ef74a0aea1aed85e47a77cf6061253fedc24da6430be825f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_356b36ef9e7f7f02ffe513cc7d1c6eaee6baf38a3ad32a674129d2fbe9b52566 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_356b36ef9e7f7f02ffe513cc7d1c6eaee6baf38a3ad32a674129d2fbe9b52566->enter($__internal_356b36ef9e7f7f02ffe513cc7d1c6eaee6baf38a3ad32a674129d2fbe9b52566_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_356b36ef9e7f7f02ffe513cc7d1c6eaee6baf38a3ad32a674129d2fbe9b52566->leave($__internal_356b36ef9e7f7f02ffe513cc7d1c6eaee6baf38a3ad32a674129d2fbe9b52566_prof);

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
", "@Twig/Exception/exception_full.html.twig", "/Users/Exx/Desktop/edusoho/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
