<?php

/* default/base-index.html.twig */
class __TwigTemplate_9986e36f2ee280cb0857ce1c81fc65486ad67f648c05bce942bd27a832583475 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "default/base-index.html.twig", 1);
        $this->blocks = array(
            'keywords' => array($this, 'block_keywords'),
            'description' => array($this, 'block_description'),
            'full_content' => array($this, 'block_full_content'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c75a1a5ce7b120105a5b3edced3e72cd420345e105dd8a7da067ba977f346e53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c75a1a5ce7b120105a5b3edced3e72cd420345e105dd8a7da067ba977f346e53->enter($__internal_c75a1a5ce7b120105a5b3edced3e72cd420345e105dd8a7da067ba977f346e53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/base-index.html.twig"));

        // line 6
        $context["appDownload"] = (($this->env->getExtension('AppBundle\Twig\WebExtension')->isESCopyright() && $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("mobile.enabled", null)) && $this->env->getExtension('AppBundle\Twig\WebExtension')->isShowMobilePage());
        // line 7
        $context["bodyClass"] = ((($context["appDownload"] ?? $this->getContext($context, "appDownload"))) ? ("homepage has-app") : ("homepage"));
        // line 8
        $context["siteNav"] = "/";
        // line 10
        $context["_target_path"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        // line 12
        $context["isIndex"] = true;
        // line 13
        $context["consultDisplay"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c75a1a5ce7b120105a5b3edced3e72cd420345e105dd8a7da067ba977f346e53->leave($__internal_c75a1a5ce7b120105a5b3edced3e72cd420345e105dd8a7da067ba977f346e53_prof);

    }

    // line 3
    public function block_keywords($context, array $blocks = array())
    {
        $__internal_41a291f3befa2eb98784fe2c556397420226ea6006cfb5f669c25c8f3010ce55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41a291f3befa2eb98784fe2c556397420226ea6006cfb5f669c25c8f3010ce55->enter($__internal_41a291f3befa2eb98784fe2c556397420226ea6006cfb5f669c25c8f3010ce55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "keywords"));

        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.seo_keywords"), "html", null, true);
        
        $__internal_41a291f3befa2eb98784fe2c556397420226ea6006cfb5f669c25c8f3010ce55->leave($__internal_41a291f3befa2eb98784fe2c556397420226ea6006cfb5f669c25c8f3010ce55_prof);

    }

    // line 4
    public function block_description($context, array $blocks = array())
    {
        $__internal_55079be7757bdb6a820cd14dbdce885f6af8c750f4f12e4c5714181ebc84f404 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55079be7757bdb6a820cd14dbdce885f6af8c750f4f12e4c5714181ebc84f404->enter($__internal_55079be7757bdb6a820cd14dbdce885f6af8c750f4f12e4c5714181ebc84f404_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.seo_description"), "html", null, true);
        
        $__internal_55079be7757bdb6a820cd14dbdce885f6af8c750f4f12e4c5714181ebc84f404->leave($__internal_55079be7757bdb6a820cd14dbdce885f6af8c750f4f12e4c5714181ebc84f404_prof);

    }

    // line 15
    public function block_full_content($context, array $blocks = array())
    {
        $__internal_2e45a4cb3f2f6597133dcb2e7f39d870d8308c9cc62bed2cc43279238d0c588e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e45a4cb3f2f6597133dcb2e7f39d870d8308c9cc62bed2cc43279238d0c588e->enter($__internal_2e45a4cb3f2f6597133dcb2e7f39d870d8308c9cc62bed2cc43279238d0c588e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "full_content"));

        // line 16
        echo "  ";
        if (($context["appDownload"] ?? $this->getContext($context, "appDownload"))) {
            // line 17
            echo "    ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Default:appDownload"));
            echo "
  ";
        }
        // line 19
        echo "  ";
        $this->displayBlock('content', $context, $blocks);
        // line 20
        echo "  ";
        $this->loadTemplate("mobile/footer-tool-bar.html.twig", "default/base-index.html.twig", 20)->display(array_merge($context, array("mobile_tool_bar" => "index")));
        
        $__internal_2e45a4cb3f2f6597133dcb2e7f39d870d8308c9cc62bed2cc43279238d0c588e->leave($__internal_2e45a4cb3f2f6597133dcb2e7f39d870d8308c9cc62bed2cc43279238d0c588e_prof);

    }

    // line 19
    public function block_content($context, array $blocks = array())
    {
        $__internal_695f391dac0db9706b3dfc11aa6ea1d735629ecd2aa56a4cb0f864e1b84ab334 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_695f391dac0db9706b3dfc11aa6ea1d735629ecd2aa56a4cb0f864e1b84ab334->enter($__internal_695f391dac0db9706b3dfc11aa6ea1d735629ecd2aa56a4cb0f864e1b84ab334_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_695f391dac0db9706b3dfc11aa6ea1d735629ecd2aa56a4cb0f864e1b84ab334->leave($__internal_695f391dac0db9706b3dfc11aa6ea1d735629ecd2aa56a4cb0f864e1b84ab334_prof);

    }

    public function getTemplateName()
    {
        return "default/base-index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 19,  92 => 20,  89 => 19,  83 => 17,  80 => 16,  74 => 15,  62 => 4,  50 => 3,  43 => 1,  41 => 13,  39 => 12,  37 => 10,  35 => 8,  33 => 7,  31 => 6,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout.html.twig' %}

{% block keywords %}{{ setting('site.seo_keywords') }}{% endblock %}
{% block description %}{{ setting('site.seo_description') }}{% endblock %}

{% set appDownload = is_ES_copyright() and setting('mobile.enabled', null) and is_show_mobile_page() %}
{% set bodyClass = appDownload ? 'homepage has-app' : 'homepage' %}
{% set siteNav = '/' %}

{% set _target_path = path('homepage') %}

{% set isIndex = true %}
{% set consultDisplay = true %}

{% block full_content %}
  {% if appDownload  %}
    {{ render(controller('AppBundle:Default:appDownload')) }}
  {% endif %}
  {% block content %}{% endblock %}
  {% include 'mobile/footer-tool-bar.html.twig' with { mobile_tool_bar: 'index' } %}
{% endblock %}
", "default/base-index.html.twig", "/Users/Exx/Desktop/edusoho/app/Resources/views/default/base-index.html.twig");
    }
}
