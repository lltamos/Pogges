<?php

/* default/open-course.html.twig */
class __TwigTemplate_951b065df45df6ab1de5f164cbc71558f0a3a1c585c26830cdb342b8e3b66e66 extends Twig_Template
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
        $__internal_509f804eb4cadb9e8ae852601e109b79cf0ad993214ddb13f35ba2d31a6e1a15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_509f804eb4cadb9e8ae852601e109b79cf0ad993214ddb13f35ba2d31a6e1a15->enter($__internal_509f804eb4cadb9e8ae852601e109b79cf0ad993214ddb13f35ba2d31a6e1a15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/open-course.html.twig"));

        // line 1
        echo "<section class=\"course-list-section open-course-list-section ";
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["config"] ?? null), "background", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["config"] ?? null), "background", array()), "")) : ("")), "html", null, true);
        echo "\" id=\"open-course-list-section\">
  ";
        // line 2
        $context["web_macro"] = $this->loadTemplate("macro.html.twig", "default/open-course.html.twig", 2);
        // line 3
        echo "
  ";
        // line 4
        $context["count"] = (($this->getAttribute(($context["config"] ?? null), "count", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["config"] ?? null), "count", array()), 12)) : (12));
        // line 5
        echo "  ";
        $context["orderBy"] = (($this->getAttribute(($context["config"] ?? null), "orderBy", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["config"] ?? null), "orderBy", array()), "latest")) : ("latest"));
        // line 6
        echo "  ";
        $context["courses"] = $this->env->getExtension('AppBundle\Twig\DataExtension')->getData("OpenCourses", array("count" => ($context["count"] ?? $this->getContext($context, "count")), "orderBy" => ($context["orderBy"] ?? $this->getContext($context, "orderBy"))));
        // line 7
        echo "
  <div class=\"container\">
    <div class=\"text-line\">
      <h5><span>";
        // line 10
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["config"] ?? null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["config"] ?? null), "title", array()), (($this->getAttribute(($context["config"] ?? null), "defaultTitle", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["config"] ?? null), "defaultTitle", array()), "")) : ("")))) : ((($this->getAttribute(($context["config"] ?? null), "defaultTitle", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["config"] ?? null), "defaultTitle", array()), "")) : ("")))), "html", null, true);
        echo "</span><div class=\"line\"></div></h5>
      <div class=\"subtitle\">";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute(($context["config"] ?? null), "subTitle", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["config"] ?? null), "subTitle", array()), "homepage.open_course.tips")) : ("homepage.open_course.tips"))), "html", null, true);
        echo "</div>
    </div>

    <div class=\"course-list\">
      <div class=\"row\">
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["courses"] ?? $this->getContext($context, "courses")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
            // line 17
            echo "          <div class=\"col-lg-3 col-md-4 col-xs-6\">
            ";
            // line 18
            $this->loadTemplate("open-course/widget/open-course-grid.html.twig", "default/open-course.html.twig", 18)->display($context);
            // line 19
            echo "          </div>
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "      </div>
    </div>
    <div class=\"section-more-btn\">
      <a href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("open_course_explore");
        echo "\" class=\"btn btn-default btn-lg\">
        ";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.open_course.more"), "html", null, true);
        echo " <i class=\"mrs-o es-icon es-icon-chevronright\"></i>
      </a>
    </div>
  </div>
</section>
";
        
        $__internal_509f804eb4cadb9e8ae852601e109b79cf0ad993214ddb13f35ba2d31a6e1a15->leave($__internal_509f804eb4cadb9e8ae852601e109b79cf0ad993214ddb13f35ba2d31a6e1a15_prof);

    }

    public function getTemplateName()
    {
        return "default/open-course.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 25,  99 => 24,  94 => 21,  79 => 19,  77 => 18,  74 => 17,  57 => 16,  49 => 11,  45 => 10,  40 => 7,  37 => 6,  34 => 5,  32 => 4,  29 => 3,  27 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section class=\"course-list-section open-course-list-section {{config.background|default(\"\")}}\" id=\"open-course-list-section\">
  {% import \"macro.html.twig\" as web_macro %}

  {% set count = config.count|default(12) %}
  {% set orderBy = config.orderBy|default('latest')%}
  {% set courses = data('OpenCourses',{'count':count, 'orderBy':orderBy}) %}

  <div class=\"container\">
    <div class=\"text-line\">
      <h5><span>{{ config.title|default(config.defaultTitle|default('')) }}</span><div class=\"line\"></div></h5>
      <div class=\"subtitle\">{{ config.subTitle|default('homepage.open_course.tips')|trans }}</div>
    </div>

    <div class=\"course-list\">
      <div class=\"row\">
        {% for course in courses %}
          <div class=\"col-lg-3 col-md-4 col-xs-6\">
            {% include 'open-course/widget/open-course-grid.html.twig' %}
          </div>
        {% endfor %}
      </div>
    </div>
    <div class=\"section-more-btn\">
      <a href=\"{{ path('open_course_explore') }}\" class=\"btn btn-default btn-lg\">
        {{'homepage.open_course.more'|trans}} <i class=\"mrs-o es-icon es-icon-chevronright\"></i>
      </a>
    </div>
  </div>
</section>
", "default/open-course.html.twig", "/Users/Exx/Desktop/edusoho/app/Resources/views/default/open-course.html.twig");
    }
}
