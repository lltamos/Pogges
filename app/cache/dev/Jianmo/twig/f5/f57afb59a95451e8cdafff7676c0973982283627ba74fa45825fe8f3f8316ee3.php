<?php

/* course/widgets/course-set-price.html.twig */
class __TwigTemplate_67a902f0e77541050e15929bc0ad2ad6b0582c33b5d6f5c74cb6bfbd71d5986d extends Twig_Template
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
        $__internal_2ea6d0626a29f3b9b7e91821912d47c737664a5c240d654c5a9f1c4647426898 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ea6d0626a29f3b9b7e91821912d47c737664a5c240d654c5a9f1c4647426898->enter($__internal_2ea6d0626a29f3b9b7e91821912d47c737664a5c240d654c5a9f1c4647426898_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "course/widgets/course-set-price.html.twig"));

        // line 1
        $context["courseSet"] = $this->env->getExtension('AppBundle\Twig\WebExtension')->wrap(($context["courseSet"] ?? $this->getContext($context, "courseSet")), "courseSet.price");
        // line 2
        echo "
<span class=\"course-price-widget\">
      <span class=\"
            ";
        // line 5
        if (($this->getAttribute(($context["courseSet"] ?? $this->getContext($context, "courseSet")), "maxCoursePrice", array()) == 0)) {
            // line 6
            echo "                  free
            ";
        } else {
            // line 8
            echo "                  price
            ";
        }
        // line 9
        echo "\">
          ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["courseSet"] ?? $this->getContext($context, "courseSet")), "priceWrapper", array()), "priceText", array()), "html", null, true);
        echo "
      </span>
</span>";
        
        $__internal_2ea6d0626a29f3b9b7e91821912d47c737664a5c240d654c5a9f1c4647426898->leave($__internal_2ea6d0626a29f3b9b7e91821912d47c737664a5c240d654c5a9f1c4647426898_prof);

    }

    public function getTemplateName()
    {
        return "course/widgets/course-set-price.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 10,  39 => 9,  35 => 8,  31 => 6,  29 => 5,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set courseSet = courseSet|wrap('courseSet.price') %}

<span class=\"course-price-widget\">
      <span class=\"
            {% if courseSet.maxCoursePrice == 0 %}
                  free
            {% else %}
                  price
            {% endif %}\">
          {{ courseSet.priceWrapper.priceText }}
      </span>
</span>", "course/widgets/course-set-price.html.twig", "/Users/Exx/Desktop/edusoho/app/Resources/views/course/widgets/course-set-price.html.twig");
    }
}
