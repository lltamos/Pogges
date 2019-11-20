<?php

/* default/header/part/user-avatar.html.twig */
class __TwigTemplate_6e50cfcd98d790ad59128123ea1054ee5811ca8db4412e23bbb92da66bae4196 extends Twig_Template
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
        $__internal_7520fd704985348c6be4bd23d78fa031b8fc553537d789cf016af49b67895aa4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7520fd704985348c6be4bd23d78fa031b8fc553537d789cf016af49b67895aa4->enter($__internal_7520fd704985348c6be4bd23d78fa031b8fc553537d789cf016af49b67895aa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/header/part/user-avatar.html.twig"));

        // line 1
        echo "<li class=\"user-avatar-li cd-dropdown cd-ml24\"  data-toggle=\"cd-dropdown\">
  <a class=\"user-avatar-toggle\" href=\"javascript:;\">
    <img class=\"cd-avatar cd-avatar-xs\" src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getFpath($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "smallAvatar", array()), "avatar.png"), "html", null, true);
        echo "\">
  </a>
  <div class=\"dropdown-menu user-dropdown hidden-sm hidden-xs hidden-md js-user-nav-dropdown\">
    <div class=\"user-dropdown-info cd-mb24\">
      <a class=\"user-dropdown-info__avatar cd-mr24\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
        echo "\">
        <img class=\"cd-avatar\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getFpath($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "largeAvatar", array()), "avatar.png"), "html", null, true);
        echo "\">
      </a>
      <div class=\"user-dropdown-profile\">
        <div class=\"user-dropdown-profile__nickname\">
          <span>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "nickname", array()), "html", null, true);
        echo "</span>";
        echo $this->env->getExtension('Codeages\PluginBundle\Twig\SlotExtension')->slot("header.user.logo", array("user" => $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())));
        echo "
        </div>
        ";
        // line 14
        echo $this->env->getExtension('Codeages\PluginBundle\Twig\SlotExtension')->slot("header.user.info", array("user" => $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())));
        echo "
      </div>
    </div>
    <div class=\"user-dropdown__link cd-mb24\">
      <a class=\"cd-link-minor\" href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_orders");
        echo "\"><i class=\"cd-icon cd-icon-payment\"></i>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.header.account_menu"), "html", null, true);
        echo "</a>
      <a class=\"cd-link-minor\" href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("settings");
        echo "\"><i class=\"es-icon es-icon-setting\"></i>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.header.settings_menu"), "html", null, true);
        echo "</a>
    </div>
    <div class=\"user-dropdown__logout\"><a class=\"cd-link-minor\" href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.header.logout"), "html", null, true);
        echo "</a></div>
  </div>
  <ul class=\"dropdown-menu hidden-lg\" role=\"menu\">
    <div class=\"dropdown-header\"><a class=\"cd-link-minor\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "nickname", array()), "html", null, true);
        echo "</a></div>
    <li><a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_orders");
        echo "\"><i class=\"es-icon es-icon-accountwallet\"></i>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.header.account_menu"), "html", null, true);
        echo "</a></li>
    <li><a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("settings");
        echo "\"><i class=\"es-icon es-icon-setting\"></i>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.header.settings_menu"), "html", null, true);
        echo "</a></li>
    ";
        // line 27
        if ($this->env->getExtension('AppBundle\Twig\PermissionExtension')->hasPermission("admin")) {
            echo "<li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin");
            echo "\"><i class=\"es-icon es-icon-dashboard\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.header.admin_menu"), "html", null, true);
            echo "</a></li>
    ";
        }
        // line 29
        echo "    ";
        if (twig_in_filter("ROLE_TEACHER", $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "roles", array()))) {
            echo "<li class=\"user-nav-li-my\"><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my");
            echo "\"><i class=\"es-icon es-icon-event\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.header.my_teaching_menu"), "html", null, true);
            echo "</a></li>
    ";
        }
        // line 31
        echo "    <li class=\"user-nav-li-my\">
      <a href=\"";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_courses_learning");
        echo "\">
        <i class=\"es-icon es-icon-book\"></i>";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.header.my_learning_menu"), "html", null, true);
        echo "
      </a>
    </li>
    ";
        // line 36
        echo $this->env->getExtension('Codeages\PluginBundle\Twig\SlotExtension')->slot("user.nav.menu.extension", array("mobile" => ($context["mobile"] ?? $this->getContext($context, "mobile"))));
        echo "
    <li class=\"hidden-md\"><a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("notification");
        echo "\"><span class=\"pull-right num\">";
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "newNotificationNum", array()) > 0)) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "newNotificationNum", array()), "html", null, true);
        }
        echo "</span><i class=\"es-icon es-icon-notificationson\"></i>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.header.notice"), "html", null, true);
        echo "</a></li>
    <li class=\"hidden-md\"><a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("message");
        echo "\"><span class=\"pull-right num\">";
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "newMessageNum", array()) > 0)) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "newMessageNum", array()), "html", null, true);
        }
        echo "</span><i class=\"es-icon es-icon-mail\"></i>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.header.message"), "html", null, true);
        echo "</a></li>
    ";
        // line 39
        if (($context["mobile"] ?? $this->getContext($context, "mobile"))) {
            // line 40
            echo "      <li class=\"mobile-switch js-switch-pc visible-xs\"><a href=\"javascript:;\">
        <i class=\"es-icon es-icon-qiehuan\"></i>";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.header.switch_pc"), "html", null, true);
            echo "</a></li>
    ";
        } elseif (($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("wap.version") == 1)) {
            // line 43
            echo "      <li class=\"mobile-switch js-switch-mobile visible-xs\"><a href=\"javascript:;\">
        <i class=\"es-icon es-icon-qiehuan\"></i>";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.header.switch_mobile"), "html", null, true);
            echo "</a>
      </li>
    ";
        }
        // line 47
        echo "    ";
        if ((($context["show_switch_locale"] ?? $this->getContext($context, "show_switch_locale")) == 1)) {
            // line 48
            echo "      ";
            $this->loadTemplate("default/switch-language.html.twig", "default/header/part/user-avatar.html.twig", 48)->display(array_merge($context, array("langClass" => "text-center user-nav-li-logout")));
            // line 49
            echo "    ";
        }
        // line 50
        echo "    <li class=\"user-nav-li-logout\"><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
        echo "\"><i class=\"es-icon es-icon-power\"></i>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.header.logout"), "html", null, true);
        echo "</a></li>
  </ul>
</li>";
        
        $__internal_7520fd704985348c6be4bd23d78fa031b8fc553537d789cf016af49b67895aa4->leave($__internal_7520fd704985348c6be4bd23d78fa031b8fc553537d789cf016af49b67895aa4_prof);

    }

    public function getTemplateName()
    {
        return "default/header/part/user-avatar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 50,  178 => 49,  175 => 48,  172 => 47,  166 => 44,  163 => 43,  158 => 41,  155 => 40,  153 => 39,  143 => 38,  133 => 37,  129 => 36,  123 => 33,  119 => 32,  116 => 31,  106 => 29,  97 => 27,  91 => 26,  85 => 25,  79 => 24,  71 => 21,  64 => 19,  58 => 18,  51 => 14,  44 => 12,  37 => 8,  33 => 7,  26 => 3,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<li class=\"user-avatar-li cd-dropdown cd-ml24\"  data-toggle=\"cd-dropdown\">
  <a class=\"user-avatar-toggle\" href=\"javascript:;\">
    <img class=\"cd-avatar cd-avatar-xs\" src=\"{{ filepath(app.user.smallAvatar, 'avatar.png') }}\">
  </a>
  <div class=\"dropdown-menu user-dropdown hidden-sm hidden-xs hidden-md js-user-nav-dropdown\">
    <div class=\"user-dropdown-info cd-mb24\">
      <a class=\"user-dropdown-info__avatar cd-mr24\" href=\"{{ path('user_show', {id:app.user.id}) }}\">
        <img class=\"cd-avatar\" src=\"{{ filepath(app.user.largeAvatar, 'avatar.png') }}\">
      </a>
      <div class=\"user-dropdown-profile\">
        <div class=\"user-dropdown-profile__nickname\">
          <span>{{ app.user.nickname }}</span>{{ slot('header.user.logo', {user: app.user}) }}
        </div>
        {{ slot('header.user.info', {user: app.user}) }}
      </div>
    </div>
    <div class=\"user-dropdown__link cd-mb24\">
      <a class=\"cd-link-minor\" href=\"{{ path('my_orders') }}\"><i class=\"cd-icon cd-icon-payment\"></i>{{ 'homepage.header.account_menu'|trans }}</a>
      <a class=\"cd-link-minor\" href=\"{{ path('settings') }}\"><i class=\"es-icon es-icon-setting\"></i>{{ 'homepage.header.settings_menu'|trans }}</a>
    </div>
    <div class=\"user-dropdown__logout\"><a class=\"cd-link-minor\" href=\"{{ path('logout') }}\">{{ 'homepage.header.logout'|trans }}</a></div>
  </div>
  <ul class=\"dropdown-menu hidden-lg\" role=\"menu\">
    <div class=\"dropdown-header\"><a class=\"cd-link-minor\" href=\"{{ path('user_show', {id:app.user.id}) }}\">{{ app.user.nickname }}</a></div>
    <li><a href=\"{{path('my_orders')}}\"><i class=\"es-icon es-icon-accountwallet\"></i>{{'homepage.header.account_menu'|trans}}</a></li>
    <li><a href=\"{{ path('settings') }}\"><i class=\"es-icon es-icon-setting\"></i>{{'homepage.header.settings_menu'|trans}}</a></li>
    {% if has_permission('admin') %}<li><a href=\"{{ path('admin') }}\"><i class=\"es-icon es-icon-dashboard\"></i>{{'homepage.header.admin_menu'|trans}}</a></li>
    {% endif %}
    {% if 'ROLE_TEACHER' in app.user.roles %}<li class=\"user-nav-li-my\"><a href=\"{{ path('my') }}\"><i class=\"es-icon es-icon-event\"></i>{{'homepage.header.my_teaching_menu'|trans}}</a></li>
    {% endif %}
    <li class=\"user-nav-li-my\">
      <a href=\"{{ path('my_courses_learning') }}\">
        <i class=\"es-icon es-icon-book\"></i>{{'homepage.header.my_learning_menu'|trans}}
      </a>
    </li>
    {{ slot('user.nav.menu.extension', {mobile: mobile}) }}
    <li class=\"hidden-md\"><a href=\"{{ path('notification') }}\"><span class=\"pull-right num\">{% if app.user.newNotificationNum > 0 %}{{ app.user.newNotificationNum }}{% endif %}</span><i class=\"es-icon es-icon-notificationson\"></i>{{'homepage.header.notice'|trans}}</a></li>
    <li class=\"hidden-md\"><a href=\"{{ path('message') }}\"><span class=\"pull-right num\">{% if app.user.newMessageNum > 0 %}{{ app.user.newMessageNum }}{% endif %}</span><i class=\"es-icon es-icon-mail\"></i>{{'homepage.header.message'|trans}}</a></li>
    {% if mobile %}
      <li class=\"mobile-switch js-switch-pc visible-xs\"><a href=\"javascript:;\">
        <i class=\"es-icon es-icon-qiehuan\"></i>{{'homepage.header.switch_pc'|trans}}</a></li>
    {% elseif setting('wap.version') == 1  %}
      <li class=\"mobile-switch js-switch-mobile visible-xs\"><a href=\"javascript:;\">
        <i class=\"es-icon es-icon-qiehuan\"></i>{{'homepage.header.switch_mobile'|trans}}</a>
      </li>
    {% endif %}
    {% if show_switch_locale == 1 %}
      {% include 'default/switch-language.html.twig' with { langClass: 'text-center user-nav-li-logout' } %}
    {% endif %}
    <li class=\"user-nav-li-logout\"><a href=\"{{ path('logout') }}\"><i class=\"es-icon es-icon-power\"></i>{{'homepage.header.logout'|trans}}</a></li>
  </ul>
</li>", "default/header/part/user-avatar.html.twig", "/Users/Exx/Desktop/edusoho/app/Resources/views/default/header/part/user-avatar.html.twig");
    }
}
