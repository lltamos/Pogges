<?php

/* default/header/logo.html.twig */
class __TwigTemplate_20020a71f1d93a237db147e3d4edca8bd2046535ca0b2ddf767b621b3fae3e1f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_719a33b8f9efcffbfe0dd792e542a473e32ea96af30d158e4ab69cc487369d77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_719a33b8f9efcffbfe0dd792e542a473e32ea96af30d158e4ab69cc487369d77->enter($__internal_719a33b8f9efcffbfe0dd792e542a473e32ea96af30d158e4ab69cc487369d77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/header/logo.html.twig"));

        // line 1
        echo "<div class=\"navbar-header\">
  <div class=\"visible-xs  navbar-mobile\">
    <a href=\"javascript:;\" class=\"navbar-more js-navbar-more\">
      <i class=\"es-icon es-icon-menu\"></i>
    </a>
    <div class=\"html-mask\"></div>
    <div class=\"nav-mobile\">
      <form class=\"navbar-form\" action=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("search");
        echo "\" method=\"get\">
        <div class=\"form-group\">
          <input class=\"form-control\" placeholder=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.header.search"), "html", null, true);
        echo "\" name=\"q\">
          <button class=\"button es-icon es-icon-search\"></button>
        </div>
      </form>

      <ul class=\"nav navbar-nav\">
        ";
        // line 16
        $this->loadTemplate("default/top-navigation.html.twig", "default/header/logo.html.twig", 16)->display(array_merge($context, array("navigations" => ($context["navigations"] ?? $this->getContext($context, "navigations")), "siteNav" => ((array_key_exists("siteNav", $context)) ? (_twig_default_filter(($context["siteNav"] ?? $this->getContext($context, "siteNav")), null)) : (null)), "isMobile" => true)));
        // line 17
        echo "      </ul>
    </div>
  </div>
  ";
        // line 20
        if (($context["mobile"] ?? $this->getContext($context, "mobile"))) {
            // line 21
            echo "    <div class=\"M_header-back js-back\">
      <a><i class=\"es-icon es-icon-chevronleft\"></i></a>
    </div>
  ";
        }
        // line 25
        echo "  <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\" class=\"navbar-brand\">
    ";
        // line 26
        if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.logo")) {
            // line 27
            echo "      <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getFpath(("../" . $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.logo")), ""), "html", null, true);
            echo "\">
    ";
        } else {
            // line 29
            echo "      ";
            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.name", "EDUSOHO"), "html", null, true);
            echo "
    ";
        }
        // line 31
        echo "  </a>
</div>";
        
        $__internal_719a33b8f9efcffbfe0dd792e542a473e32ea96af30d158e4ab69cc487369d77->leave($__internal_719a33b8f9efcffbfe0dd792e542a473e32ea96af30d158e4ab69cc487369d77_prof);

    }

    public function getTemplateName()
    {
        return "default/header/logo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 31,  73 => 29,  67 => 27,  65 => 26,  60 => 25,  54 => 21,  52 => 20,  47 => 17,  45 => 16,  36 => 10,  31 => 8,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"navbar-header\">
  <div class=\"visible-xs  navbar-mobile\">
    <a href=\"javascript:;\" class=\"navbar-more js-navbar-more\">
      <i class=\"es-icon es-icon-menu\"></i>
    </a>
    <div class=\"html-mask\"></div>
    <div class=\"nav-mobile\">
      <form class=\"navbar-form\" action=\"{{ path('search') }}\" method=\"get\">
        <div class=\"form-group\">
          <input class=\"form-control\" placeholder=\"{{'homepage.header.search'|trans}}\" name=\"q\">
          <button class=\"button es-icon es-icon-search\"></button>
        </div>
      </form>

      <ul class=\"nav navbar-nav\">
        {% include 'default/top-navigation.html.twig' with {navigations: navigations,siteNav: siteNav|default(null), isMobile: true} %}
      </ul>
    </div>
  </div>
  {% if mobile %}
    <div class=\"M_header-back js-back\">
      <a><i class=\"es-icon es-icon-chevronleft\"></i></a>
    </div>
  {% endif %}
  <a href=\"{{ path('homepage') }}\" class=\"navbar-brand\">
    {% if setting('site.logo') %}
      <img src=\"{{ filepath('../' ~ setting('site.logo'),'') }}\">
    {% else %}
      {{ setting('site.name', 'EDUSOHO') }}
    {% endif %}
  </a>
</div>", "default/header/logo.html.twig", "/Users/Exx/Desktop/edusoho/app/Resources/views/default/header/logo.html.twig");
    }
}
