<?php

/* open-course/widget/open-course-grid.html.twig */
class __TwigTemplate_439daeb3f6ce091681cf1a01c44ce0548e4f5a05efbd37d9b97c101244f7f0ce extends Twig_Template
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
        $__internal_dcde42d0147765791a15e5ce791eca8199ce3d79e93f54de523f2fa2b8a79715 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcde42d0147765791a15e5ce791eca8199ce3d79e93f54de523f2fa2b8a79715->enter($__internal_dcde42d0147765791a15e5ce791eca8199ce3d79e93f54de523f2fa2b8a79715_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "open-course/widget/open-course-grid.html.twig"));

        // line 1
        echo "<div class=\"course-item\">
  <div class=\"course-img\">
    <a href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("open_course_show", array("courseId" => $this->getAttribute(($context["course"] ?? $this->getContext($context, "course")), "id", array()))), "html", null, true);
        echo "\" target=\"_blank\" target=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["course"] ?? $this->getContext($context, "course")), "title", array()), "html", null, true);
        echo "\">
      ";
        // line 4
        if (($this->getAttribute(($context["course"] ?? $this->getContext($context, "course")), "type", array()) == "liveOpen")) {
            // line 5
            echo "        <span class=\"tags\">
          <span class=\"tag-open-live\"></span>
        </span>
      ";
        }
        // line 9
        echo "      ";
        echo $this->env->getExtension('AppBundle\Twig\WebExtension')->makeLazyImg($this->env->getExtension('AppBundle\Twig\WebExtension')->getFpath($this->getAttribute(($context["course"] ?? $this->getContext($context, "course")), "largePicture", array()), "course.png"), "img-responsive", $this->getAttribute(($context["course"] ?? $this->getContext($context, "course")), "title", array()));
        echo "
    </a>
    ";
        // line 11
        $context["lessons"] = $this->env->getExtension('AppBundle\Twig\DataExtension')->getData("OpenCourseLessons", array("courseId" => $this->getAttribute(($context["course"] ?? $this->getContext($context, "course")), "id", array()), "count" => 1));
        // line 12
        echo "    ";
        if (($this->getAttribute(($context["course"] ?? $this->getContext($context, "course")), "type", array()) == "liveOpen")) {
            // line 13
            echo "      <div class=\"open-starttime\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("open_course.live", array("%live%" => twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute(($context["lessons"] ?? $this->getContext($context, "lessons")), 0, array(), "array"), "startTime", array()), "Y-m-d H:i"))), "html", null, true);
            echo "</div>
    ";
        }
        // line 15
        echo "  </div>
  <div class=\"course-info\">
    <div class=\"title\">
      ";
        // line 18
        if (($this->getAttribute(($context["course"] ?? $this->getContext($context, "course")), "type", array()) == "liveOpen")) {
            // line 19
            echo "        ";
            if (((twig_date_format_filter($this->env, "now", "U") >= $this->getAttribute($this->getAttribute(($context["lessons"] ?? $this->getContext($context, "lessons")), 0, array(), "array"), "startTime", array())) && (twig_date_format_filter($this->env, "now", "U") <= $this->getAttribute($this->getAttribute(($context["lessons"] ?? $this->getContext($context, "lessons")), 0, array(), "array"), "endTime", array())))) {
                // line 20
                echo "          <span class=\"label label-primary mrm\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("open_course.status.live"), "html", null, true);
                echo "</span>
        ";
            } elseif ((twig_date_format_filter($this->env, "now", "U") < $this->getAttribute($this->getAttribute(            // line 21
($context["lessons"] ?? $this->getContext($context, "lessons")), 0, array(), "array"), "startTime", array()))) {
                // line 22
                echo "          <span class=\"label label-warning mrm\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("open_course.status.living"), "html", null, true);
                echo "</span>
        ";
            }
            // line 24
            echo "      ";
        }
        // line 25
        echo "      <a class=\"link-dark\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("open_course_show", array("courseId" => $this->getAttribute(($context["course"] ?? $this->getContext($context, "course")), "id", array()))), "html", null, true);
        echo "\" target=\"_blank\" title=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["course"] ?? $this->getContext($context, "course")), "title", array()), "html", null, true);
        echo "\">
        ";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["course"] ?? $this->getContext($context, "course")), "title", array()), "html", null, true);
        echo "
      </a>
    </div>
    <div class=\"metas clearfix\">
      <span class=\"num\"><i class=\"es-icon es-icon-removeredeye\"></i>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute(($context["course"] ?? $this->getContext($context, "course")), "hitNum", array()), "html", null, true);
        echo "</span>
      ";
        // line 31
        if (($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("openCourse.show_comment", "1") == 1)) {
            // line 32
            echo "        <span class=\"comment\"><i class=\"es-icon es-icon-textsms\"></i>";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["course"] ?? $this->getContext($context, "course")), "postNum", array()), "html", null, true);
            echo "</span>
      ";
        }
        // line 34
        echo "    </div>
  </div>
</div>";
        
        $__internal_dcde42d0147765791a15e5ce791eca8199ce3d79e93f54de523f2fa2b8a79715->leave($__internal_dcde42d0147765791a15e5ce791eca8199ce3d79e93f54de523f2fa2b8a79715_prof);

    }

    public function getTemplateName()
    {
        return "open-course/widget/open-course-grid.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 34,  103 => 32,  101 => 31,  97 => 30,  90 => 26,  83 => 25,  80 => 24,  74 => 22,  72 => 21,  67 => 20,  64 => 19,  62 => 18,  57 => 15,  51 => 13,  48 => 12,  46 => 11,  40 => 9,  34 => 5,  32 => 4,  26 => 3,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"course-item\">
  <div class=\"course-img\">
    <a href=\"{{ path('open_course_show', {courseId:course.id}) }}\" target=\"_blank\" target=\"{{ course.title }}\">
      {% if course.type == 'liveOpen' %}
        <span class=\"tags\">
          <span class=\"tag-open-live\"></span>
        </span>
      {% endif %}
      {{ lazy_img(filepath(course.largePicture, 'course.png'), 'img-responsive', course.title) }}
    </a>
    {% set lessons = data('OpenCourseLessons',{courseId:course.id,count:1}) %}
    {% if course.type == 'liveOpen' %}
      <div class=\"open-starttime\">{{'open_course.live'|trans({'%live%' : lessons[0].startTime|date('Y-m-d H:i') })}}</div>
    {% endif %}
  </div>
  <div class=\"course-info\">
    <div class=\"title\">
      {% if course.type == 'liveOpen' %}
        {% if \"now\"|date(\"U\") >= lessons[0].startTime and \"now\"|date(\"U\") <= lessons[0].endTime %}
          <span class=\"label label-primary mrm\">{{'open_course.status.live'|trans}}</span>
        {% elseif \"now\"|date(\"U\") < lessons[0].startTime %}
          <span class=\"label label-warning mrm\">{{'open_course.status.living'|trans}}</span>
        {% endif %}
      {% endif %}
      <a class=\"link-dark\" href=\"{{ path('open_course_show', {courseId:course.id}) }}\" target=\"_blank\" title=\"{{ course.title }}\">
        {{ course.title }}
      </a>
    </div>
    <div class=\"metas clearfix\">
      <span class=\"num\"><i class=\"es-icon es-icon-removeredeye\"></i>{{ course.hitNum }}</span>
      {% if setting('openCourse.show_comment', '1') == 1 %}
        <span class=\"comment\"><i class=\"es-icon es-icon-textsms\"></i>{{ course.postNum }}</span>
      {% endif %}
    </div>
  </div>
</div>", "open-course/widget/open-course-grid.html.twig", "/Users/Exx/Desktop/edusoho/app/Resources/views/open-course/widget/open-course-grid.html.twig");
    }
}
