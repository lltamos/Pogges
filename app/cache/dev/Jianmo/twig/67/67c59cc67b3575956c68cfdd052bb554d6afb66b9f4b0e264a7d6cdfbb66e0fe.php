<?php

/* layout.html.twig */
class __TwigTemplate_287b8eaae6491481bad627664bfca6557b42a59f4cc3591e0bf3d2ba8e75de92 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'meta' => array($this, 'block_meta'),
            'keywords' => array($this, 'block_keywords'),
            'description' => array($this, 'block_description'),
            'format_detection' => array($this, 'block_format_detection'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'head_scripts' => array($this, 'block_head_scripts'),
            'bodyClass' => array($this, 'block_bodyClass'),
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
            'full_content' => array($this, 'block_full_content'),
            'top_content' => array($this, 'block_top_content'),
            'content' => array($this, 'block_content'),
            'bottom_content' => array($this, 'block_bottom_content'),
            'footer' => array($this, 'block_footer'),
            'footer_mobile' => array($this, 'block_footer_mobile'),
            'bottom' => array($this, 'block_bottom'),
            'esBar' => array($this, 'block_esBar'),
            'wechatInform' => array($this, 'block_wechatInform'),
            'floatConsult' => array($this, 'block_floatConsult'),
            'footer_script' => array($this, 'block_footer_script'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_52b3592f046ec8780d8b51f4dc1d42ca327ba071678ebfb9332c311899217793 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52b3592f046ec8780d8b51f4dc1d42ca327ba071678ebfb9332c311899217793->enter($__internal_52b3592f046ec8780d8b51f4dc1d42ca327ba071678ebfb9332c311899217793_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        // line 1
        $context["web_macro"] = $this->loadTemplate("macro.html.twig", "layout.html.twig", 1);
        // line 2
        echo "<!DOCTYPE html>
<!--[if lt IE 7]>
<html class=\"lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]>
<html class=\"lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]>
<html class=\"lt-ie9\"> <![endif]-->
<!--[if gt IE 8]><!-->
<html> <!--<![endif]-->

";
        // line 12
        $context["lang"] = $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "getLocale", array(), "method");
        // line 13
        $context["mobile"] = $this->env->getExtension('AppBundle\Twig\WebExtension')->isShowMobilePage();
        // line 14
        echo "
";
        // line 15
        $context["currentTheme"] = $this->env->getExtension('AppBundle\Twig\ThemeExtension')->getCurrentTheme();
        // line 16
        $context["themeConfig"] = (((($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array(), "any", false, true), "get", array(0 => "themeEditing"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array(), "any", false, true), "get", array(0 => "themeEditing"), "method"), false)) : (false))) ? ($this->getAttribute(($context["currentTheme"] ?? $this->getContext($context, "currentTheme")), "config", array())) : ($this->getAttribute(($context["currentTheme"] ?? $this->getContext($context, "currentTheme")), "confirmConfig", array())));
        // line 17
        $context["maincolor"] = (($this->getAttribute(($context["themeConfig"] ?? null), "maincolor", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["themeConfig"] ?? null), "maincolor", array()), "default")) : ("default"));
        // line 18
        $context["navigationcolor"] = (($this->getAttribute(($context["themeConfig"] ?? null), "navigationcolor", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["themeConfig"] ?? null), "navigationcolor", array()), "default")) : ("default"));
        // line 19
        echo "
<html lang=\"";
        // line 20
        echo twig_escape_filter($this->env, ($context["lang"] ?? $this->getContext($context, "lang")), "html", null, true);
        echo "\" class=\"";
        if ((($context["lang"] ?? $this->getContext($context, "lang")) == "en")) {
            echo "es-en";
        }
        echo "\">
<head>
  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,Chrome=1\">
  <meta name=\"renderer\" content=\"webkit\">
  <meta name=\"viewport\"
    content=\"width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no\">
  <title>";
        // line 28
        $this->displayBlock('title', $context, $blocks);
        // line 31
        echo "</title>
  ";
        // line 32
        $this->displayBlock('meta', $context, $blocks);
        // line 44
        echo "

  ";
        // line 46
        echo $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("login_bind.verify_code", "");
        echo "
  ";
        // line 47
        if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.favicon")) {
            // line 48
            echo "    <link rel=\"icon\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.favicon")), "html", null, true);
            echo "\" type=\"image/x-icon\"/>
    <link rel=\"shortcut icon\" href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.favicon")), "html", null, true);
            echo "\" type=\"image/x-icon\" media=\"screen\"/>
  ";
        }
        // line 51
        echo "
  <!--[if lt IE 9]>
  <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static-dist/libs/html5shiv.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static-dist/es5-shim/es5-shim.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static-dist/es5-shim/es5-sham.js"), "html", null, true);
        echo "\"></script>
  <![endif]-->

  ";
        // line 58
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 62
        echo "
  ";
        // line 63
        $this->displayBlock('head_scripts', $context, $blocks);
        // line 64
        echo "</head>
<body class=\"";
        // line 65
        $this->displayBlock('bodyClass', $context, $blocks);
        echo "\">
<!--[if lt IE 9]>
<script src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static-dist/libs/fix-ie.js"), "html", null, true);
        echo "\"></script>
";
        // line 68
        $this->loadTemplate("default/ie8-alert.html.twig", "layout.html.twig", 68)->display($context);
        // line 69
        echo "<![endif]-->

";
        // line 71
        $this->displayBlock('body', $context, $blocks);
        // line 139
        echo "
";
        // line 140
        $this->displayBlock('footer_script', $context, $blocks);
        // line 144
        echo "
";
        // line 145
        if (((($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("auth.register_mode") == "mobile") && (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "isLogin", array(), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "isLogin", array(), "method"), false)) : (false))) && twig_test_empty($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "verifiedMobile", array())))) {
            // line 146
            echo "  <div id=\"mobile-bind-modal\" class=\"modal\" >
    ";
            // line 147
            $this->loadTemplate("mobile-bind-modal.html.twig", "layout.html.twig", 147)->display($context);
            // line 148
            echo "  </div>
";
        }
        // line 150
        echo "
</body>
</html>";
        
        $__internal_52b3592f046ec8780d8b51f4dc1d42ca327ba071678ebfb9332c311899217793->leave($__internal_52b3592f046ec8780d8b51f4dc1d42ca327ba071678ebfb9332c311899217793_prof);

    }

    // line 28
    public function block_title($context, array $blocks = array())
    {
        $__internal_8fb178520193e1ae0eeffdf89a1a562f8b665605dc7893d7fe4b6f6878e0f0a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fb178520193e1ae0eeffdf89a1a562f8b665605dc7893d7fe4b6f6878e0f0a7->enter($__internal_8fb178520193e1ae0eeffdf89a1a562f8b665605dc7893d7fe4b6f6878e0f0a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.name", "EduSoho"), "html", null, true);
        if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.slogan")) {
            echo " - ";
            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.slogan"), "html", null, true);
        }
        if ((($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("copyright.owned", "0") != "1") || (_twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("copyright.thirdCopyright"), 0) == 2))) {
            echo " - Powered By EduSoho";
        }
        
        $__internal_8fb178520193e1ae0eeffdf89a1a562f8b665605dc7893d7fe4b6f6878e0f0a7->leave($__internal_8fb178520193e1ae0eeffdf89a1a562f8b665605dc7893d7fe4b6f6878e0f0a7_prof);

    }

    // line 32
    public function block_meta($context, array $blocks = array())
    {
        $__internal_877285ebf8cbb00ca29064f6c76cdb077e100d62af8783514eae701bfe558561 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_877285ebf8cbb00ca29064f6c76cdb077e100d62af8783514eae701bfe558561->enter($__internal_877285ebf8cbb00ca29064f6c76cdb077e100d62af8783514eae701bfe558561_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta"));

        // line 33
        echo "    <meta name=\"keywords\"
          content=\"
";
        // line 35
        ob_start();
        $this->displayBlock('keywords', $context, $blocks);
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        echo "\"/>
    <meta name=\"description\"
          content=\"";
        // line 37
        ob_start();
        $this->displayBlock('description', $context, $blocks);
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        echo "\"/>
    <meta name=\"format-detection\"
          content=\"";
        // line 39
        ob_start();
        $this->displayBlock('format_detection', $context, $blocks);
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        echo "\"/>
    <meta content=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
        echo "\" name=\"csrf-token\"/>
    <meta content=\"";
        // line 41
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "isLogin", array(), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "isLogin", array(), "method"), 0)) : (0)), "html", null, true);
        echo "\" name=\"is-login\"/>
    <meta content=\"";
        // line 42
        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->isWechatLoginBind(), 0), "html", null, true);
        echo "\" name=\"wechat_login_bind\"/>
  ";
        
        $__internal_877285ebf8cbb00ca29064f6c76cdb077e100d62af8783514eae701bfe558561->leave($__internal_877285ebf8cbb00ca29064f6c76cdb077e100d62af8783514eae701bfe558561_prof);

    }

    // line 35
    public function block_keywords($context, array $blocks = array())
    {
        $__internal_dbb7fb49df16a161ad3ac958b6f5d75ef4425fc0b1e9b9402b3f8ed811c0b447 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbb7fb49df16a161ad3ac958b6f5d75ef4425fc0b1e9b9402b3f8ed811c0b447->enter($__internal_dbb7fb49df16a161ad3ac958b6f5d75ef4425fc0b1e9b9402b3f8ed811c0b447_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "keywords"));

        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.seo_keywords"), "html", null, true);
        
        $__internal_dbb7fb49df16a161ad3ac958b6f5d75ef4425fc0b1e9b9402b3f8ed811c0b447->leave($__internal_dbb7fb49df16a161ad3ac958b6f5d75ef4425fc0b1e9b9402b3f8ed811c0b447_prof);

    }

    // line 37
    public function block_description($context, array $blocks = array())
    {
        $__internal_49427d18c22b42a73a4a9fbdb55a5dd30e672bf754089ae53e838a39c2d35ee0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49427d18c22b42a73a4a9fbdb55a5dd30e672bf754089ae53e838a39c2d35ee0->enter($__internal_49427d18c22b42a73a4a9fbdb55a5dd30e672bf754089ae53e838a39c2d35ee0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.seo_description"), "html", null, true);
        
        $__internal_49427d18c22b42a73a4a9fbdb55a5dd30e672bf754089ae53e838a39c2d35ee0->leave($__internal_49427d18c22b42a73a4a9fbdb55a5dd30e672bf754089ae53e838a39c2d35ee0_prof);

    }

    // line 39
    public function block_format_detection($context, array $blocks = array())
    {
        $__internal_3e2c3162da450ea851891508c5b4b6298d375d99ac0eb78267aa744717ff55de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e2c3162da450ea851891508c5b4b6298d375d99ac0eb78267aa744717ff55de->enter($__internal_3e2c3162da450ea851891508c5b4b6298d375d99ac0eb78267aa744717ff55de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "format_detection"));

        
        $__internal_3e2c3162da450ea851891508c5b4b6298d375d99ac0eb78267aa744717ff55de->leave($__internal_3e2c3162da450ea851891508c5b4b6298d375d99ac0eb78267aa744717ff55de_prof);

    }

    // line 58
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9b98549d1f0a0784d0f0df2843a424fddfd9cb797de89e9265155c64ee6364e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b98549d1f0a0784d0f0df2843a424fddfd9cb797de89e9265155c64ee6364e1->enter($__internal_9b98549d1f0a0784d0f0df2843a424fddfd9cb797de89e9265155c64ee6364e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 59
        echo "    ";
        $this->loadTemplate("css_loader.html.twig", "layout.html.twig", 59)->display($context);
        // line 60
        echo "    ";
        $this->loadTemplate("default/stylesheet-webpack.html.twig", "layout.html.twig", 60)->display($context);
        // line 61
        echo "  ";
        
        $__internal_9b98549d1f0a0784d0f0df2843a424fddfd9cb797de89e9265155c64ee6364e1->leave($__internal_9b98549d1f0a0784d0f0df2843a424fddfd9cb797de89e9265155c64ee6364e1_prof);

    }

    // line 63
    public function block_head_scripts($context, array $blocks = array())
    {
        $__internal_0597834465b7ff511484f78a1add444f4a80c1a8998577d4f41590996e66beff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0597834465b7ff511484f78a1add444f4a80c1a8998577d4f41590996e66beff->enter($__internal_0597834465b7ff511484f78a1add444f4a80c1a8998577d4f41590996e66beff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_scripts"));

        
        $__internal_0597834465b7ff511484f78a1add444f4a80c1a8998577d4f41590996e66beff->leave($__internal_0597834465b7ff511484f78a1add444f4a80c1a8998577d4f41590996e66beff_prof);

    }

    // line 65
    public function block_bodyClass($context, array $blocks = array())
    {
        $__internal_d651ad1312182b1babf2c907a2409d60420fadf11f25be8154c50cccee281fe0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d651ad1312182b1babf2c907a2409d60420fadf11f25be8154c50cccee281fe0->enter($__internal_d651ad1312182b1babf2c907a2409d60420fadf11f25be8154c50cccee281fe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyClass"));

        echo twig_escape_filter($this->env, ("es-main-" . ($context["maincolor"] ?? $this->getContext($context, "maincolor"))), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ("es-nav-" . ($context["navigationcolor"] ?? $this->getContext($context, "navigationcolor"))), "html", null, true);
        echo " ";
        if (((array_key_exists("bodyClass", $context)) ? (_twig_default_filter(($context["bodyClass"] ?? $this->getContext($context, "bodyClass")), "")) : (""))) {
            echo twig_escape_filter($this->env, ($context["bodyClass"] ?? $this->getContext($context, "bodyClass")), "html", null, true);
        }
        
        $__internal_d651ad1312182b1babf2c907a2409d60420fadf11f25be8154c50cccee281fe0->leave($__internal_d651ad1312182b1babf2c907a2409d60420fadf11f25be8154c50cccee281fe0_prof);

    }

    // line 71
    public function block_body($context, array $blocks = array())
    {
        $__internal_32ff601613aed679e10a4df815c22724b785ea495555b25e3c5ed88c714d3d2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32ff601613aed679e10a4df815c22724b785ea495555b25e3c5ed88c714d3d2a->enter($__internal_32ff601613aed679e10a4df815c22724b785ea495555b25e3c5ed88c714d3d2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 72
        echo "  <div class=\"es-wrap\">
    ";
        // line 73
        $this->displayBlock('header', $context, $blocks);
        // line 78
        echo "
    ";
        // line 79
        $this->displayBlock('full_content', $context, $blocks);
        // line 88
        echo "
    ";
        // line 89
        $this->displayBlock('footer', $context, $blocks);
        // line 92
        echo "
    ";
        // line 93
        $this->displayBlock('footer_mobile', $context, $blocks);
        // line 95
        echo "
    ";
        // line 96
        $this->displayBlock('bottom', $context, $blocks);
        // line 97
        echo "  </div>

  ";
        // line 99
        $this->displayBlock('esBar', $context, $blocks);
        // line 104
        echo "
  ";
        // line 105
        $this->displayBlock('wechatInform', $context, $blocks);
        // line 112
        echo "
  ";
        // line 113
        $this->displayBlock('floatConsult', $context, $blocks);
        // line 126
        echo "
  <div id=\"login-modal\" class=\"modal\" data-url=\"";
        // line 127
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login_ajax");
        echo "\"></div>
  <div id=\"modal\" class=\"modal\"></div>
  <div id=\"attachment-modal\" class=\"modal\"></div>

  ";
        // line 131
        $context["reward_notify"] = $this->env->getExtension('AppBundle\Twig\WebExtension')->popRewardPointNotify();
        // line 132
        echo "  ";
        if (($context["reward_notify"] ?? $this->getContext($context, "reward_notify"))) {
            // line 133
            echo "    <div class=\"hidden\" id=\"rewardPointNotify\">
      ";
            // line 134
            echo twig_escape_filter($this->env, ($context["reward_notify"] ?? $this->getContext($context, "reward_notify")), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 137
        echo "
";
        
        $__internal_32ff601613aed679e10a4df815c22724b785ea495555b25e3c5ed88c714d3d2a->leave($__internal_32ff601613aed679e10a4df815c22724b785ea495555b25e3c5ed88c714d3d2a_prof);

    }

    // line 73
    public function block_header($context, array $blocks = array())
    {
        $__internal_d23bf9cb45d9f57d1a089d7a0d7a7d473eaa0a408bf7a4a1b651a75057b9d99d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d23bf9cb45d9f57d1a089d7a0d7a7d473eaa0a408bf7a4a1b651a75057b9d99d->enter($__internal_d23bf9cb45d9f57d1a089d7a0d7a7d473eaa0a408bf7a4a1b651a75057b9d99d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 74
        echo "      ";
        $this->loadTemplate("site-hint.html.twig", "layout.html.twig", 74)->display($context);
        // line 75
        echo "      ";
        $this->loadTemplate("default/header.html.twig", "layout.html.twig", 75)->display($context);
        // line 76
        echo "      ";
        $this->loadTemplate("default/exception.html.twig", "layout.html.twig", 76)->display($context);
        // line 77
        echo "    ";
        
        $__internal_d23bf9cb45d9f57d1a089d7a0d7a7d473eaa0a408bf7a4a1b651a75057b9d99d->leave($__internal_d23bf9cb45d9f57d1a089d7a0d7a7d473eaa0a408bf7a4a1b651a75057b9d99d_prof);

    }

    // line 79
    public function block_full_content($context, array $blocks = array())
    {
        $__internal_ea04972ec03d6c0fd287861b3074a2f631c8420b4abb0943291f7b3c734aaef8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea04972ec03d6c0fd287861b3074a2f631c8420b4abb0943291f7b3c734aaef8->enter($__internal_ea04972ec03d6c0fd287861b3074a2f631c8420b4abb0943291f7b3c734aaef8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "full_content"));

        // line 80
        echo "      ";
        $this->displayBlock('top_content', $context, $blocks);
        // line 81
        echo "
      <div id=\"content-container\" class=\"container\">
        ";
        // line 83
        $this->displayBlock('content', $context, $blocks);
        // line 84
        echo "      </div>

      ";
        // line 86
        $this->displayBlock('bottom_content', $context, $blocks);
        // line 87
        echo "    ";
        
        $__internal_ea04972ec03d6c0fd287861b3074a2f631c8420b4abb0943291f7b3c734aaef8->leave($__internal_ea04972ec03d6c0fd287861b3074a2f631c8420b4abb0943291f7b3c734aaef8_prof);

    }

    // line 80
    public function block_top_content($context, array $blocks = array())
    {
        $__internal_c567c2ad7e39be28ed04c7f1581925e14c4a2331d1cc3765c7ad00f19f94bf5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c567c2ad7e39be28ed04c7f1581925e14c4a2331d1cc3765c7ad00f19f94bf5a->enter($__internal_c567c2ad7e39be28ed04c7f1581925e14c4a2331d1cc3765c7ad00f19f94bf5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "top_content"));

        
        $__internal_c567c2ad7e39be28ed04c7f1581925e14c4a2331d1cc3765c7ad00f19f94bf5a->leave($__internal_c567c2ad7e39be28ed04c7f1581925e14c4a2331d1cc3765c7ad00f19f94bf5a_prof);

    }

    // line 83
    public function block_content($context, array $blocks = array())
    {
        $__internal_b585b173878522ac89ef91e3c0764e945bf02d81a5408dc2b33356f689e29029 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b585b173878522ac89ef91e3c0764e945bf02d81a5408dc2b33356f689e29029->enter($__internal_b585b173878522ac89ef91e3c0764e945bf02d81a5408dc2b33356f689e29029_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_b585b173878522ac89ef91e3c0764e945bf02d81a5408dc2b33356f689e29029->leave($__internal_b585b173878522ac89ef91e3c0764e945bf02d81a5408dc2b33356f689e29029_prof);

    }

    // line 86
    public function block_bottom_content($context, array $blocks = array())
    {
        $__internal_2fad3b37da5bb050eb09b39b49c9be19d7be1e38e6a12324408dee88aa898f15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fad3b37da5bb050eb09b39b49c9be19d7be1e38e6a12324408dee88aa898f15->enter($__internal_2fad3b37da5bb050eb09b39b49c9be19d7be1e38e6a12324408dee88aa898f15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bottom_content"));

        
        $__internal_2fad3b37da5bb050eb09b39b49c9be19d7be1e38e6a12324408dee88aa898f15->leave($__internal_2fad3b37da5bb050eb09b39b49c9be19d7be1e38e6a12324408dee88aa898f15_prof);

    }

    // line 89
    public function block_footer($context, array $blocks = array())
    {
        $__internal_8b70128c303fcba636bb2fa3f6ba0779f31d3d3a0fbeaa63c38faf24c88fc8c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b70128c303fcba636bb2fa3f6ba0779f31d3d3a0fbeaa63c38faf24c88fc8c0->enter($__internal_8b70128c303fcba636bb2fa3f6ba0779f31d3d3a0fbeaa63c38faf24c88fc8c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 90
        echo "      ";
        $this->loadTemplate("default/footer.html.twig", "layout.html.twig", 90)->display($context);
        // line 91
        echo "    ";
        
        $__internal_8b70128c303fcba636bb2fa3f6ba0779f31d3d3a0fbeaa63c38faf24c88fc8c0->leave($__internal_8b70128c303fcba636bb2fa3f6ba0779f31d3d3a0fbeaa63c38faf24c88fc8c0_prof);

    }

    // line 93
    public function block_footer_mobile($context, array $blocks = array())
    {
        $__internal_a93779e14faa1ba5ec3106b624aeb7dd97019d485750fd766b8f2cd4e3a8d884 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a93779e14faa1ba5ec3106b624aeb7dd97019d485750fd766b8f2cd4e3a8d884->enter($__internal_a93779e14faa1ba5ec3106b624aeb7dd97019d485750fd766b8f2cd4e3a8d884_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer_mobile"));

        // line 94
        echo "    ";
        
        $__internal_a93779e14faa1ba5ec3106b624aeb7dd97019d485750fd766b8f2cd4e3a8d884->leave($__internal_a93779e14faa1ba5ec3106b624aeb7dd97019d485750fd766b8f2cd4e3a8d884_prof);

    }

    // line 96
    public function block_bottom($context, array $blocks = array())
    {
        $__internal_86a2b09bd83932404863eb2a12cbaedea42db700f4f3a7a8f39d70918a591b61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86a2b09bd83932404863eb2a12cbaedea42db700f4f3a7a8f39d70918a591b61->enter($__internal_86a2b09bd83932404863eb2a12cbaedea42db700f4f3a7a8f39d70918a591b61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bottom"));

        
        $__internal_86a2b09bd83932404863eb2a12cbaedea42db700f4f3a7a8f39d70918a591b61->leave($__internal_86a2b09bd83932404863eb2a12cbaedea42db700f4f3a7a8f39d70918a591b61_prof);

    }

    // line 99
    public function block_esBar($context, array $blocks = array())
    {
        $__internal_b303006db0dbd0c161c0422583db8a6317513c9e7b1a6b0179e2ef5453de547d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b303006db0dbd0c161c0422583db8a6317513c9e7b1a6b0179e2ef5453de547d->enter($__internal_b303006db0dbd0c161c0422583db8a6317513c9e7b1a6b0179e2ef5453de547d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "esBar"));

        // line 100
        echo "    ";
        if (($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("esBar.enabled", 0) && (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "isLogin", array(), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "isLogin", array(), "method"), false)) : (false)))) {
            // line 101
            echo "      ";
            $this->loadTemplate("es-bar/index.html.twig", "layout.html.twig", 101)->display($context);
            // line 102
            echo "    ";
        }
        // line 103
        echo "  ";
        
        $__internal_b303006db0dbd0c161c0422583db8a6317513c9e7b1a6b0179e2ef5453de547d->leave($__internal_b303006db0dbd0c161c0422583db8a6317513c9e7b1a6b0179e2ef5453de547d_prof);

    }

    // line 105
    public function block_wechatInform($context, array $blocks = array())
    {
        $__internal_5dbfaa8b1e976ec90fa981a61b9f84f3bb32784e2c5467f5f9d35c57efcdf89c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dbfaa8b1e976ec90fa981a61b9f84f3bb32784e2c5467f5f9d35c57efcdf89c->enter($__internal_5dbfaa8b1e976ec90fa981a61b9f84f3bb32784e2c5467f5f9d35c57efcdf89c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wechatInform"));

        // line 106
        echo "    ";
        if ((((array_key_exists("siteNav", $context)) ? (_twig_default_filter(($context["siteNav"] ?? $this->getContext($context, "siteNav")))) : ("")) == "/")) {
            // line 107
            echo "      ";
            if (((($this->env->getExtension('AppBundle\Twig\WebExtension')->isMobileClient() == false) || ($this->env->getExtension('AppBundle\Twig\WebExtension')->isMobileClient() && preg_match("/MicroMessenger/", $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "headers", array()), "get", array(0 => "User-Agent"), "method")))) && (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "isLogin", array(), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "isLogin", array(), "method"), false)) : (false)))) {
                // line 108
                echo "        ";
                $this->loadTemplate("wechat-inform.html.twig", "layout.html.twig", 108)->display($context);
                // line 109
                echo "      ";
            }
            // line 110
            echo "    ";
        }
        // line 111
        echo "  ";
        
        $__internal_5dbfaa8b1e976ec90fa981a61b9f84f3bb32784e2c5467f5f9d35c57efcdf89c->leave($__internal_5dbfaa8b1e976ec90fa981a61b9f84f3bb32784e2c5467f5f9d35c57efcdf89c_prof);

    }

    // line 113
    public function block_floatConsult($context, array $blocks = array())
    {
        $__internal_f0aac421a3a476eb72b1e5ba4350e0177c1b423964af7ef413a47f8d82d2e3dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0aac421a3a476eb72b1e5ba4350e0177c1b423964af7ef413a47f8d82d2e3dc->enter($__internal_f0aac421a3a476eb72b1e5ba4350e0177c1b423964af7ef413a47f8d82d2e3dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "floatConsult"));

        // line 114
        echo "  
    ";
        // line 115
        $context["cloudConsultPath"] = $this->env->getExtension('AppBundle\Twig\DataExtension')->getCloudConsultPath();
        // line 116
        echo "    ";
        if (((array_key_exists("cloudConsultPath", $context)) ? (_twig_default_filter(($context["cloudConsultPath"] ?? $this->getContext($context, "cloudConsultPath")))) : (""))) {
            // line 117
            echo "      ";
            echo ($context["cloudConsultPath"] ?? $this->getContext($context, "cloudConsultPath"));
            echo "
    ";
        }
        // line 119
        echo "
    ";
        // line 120
        if (($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("consult.enabled", 0) && (((array_key_exists("consultDisplay", $context)) ? (_twig_default_filter(($context["consultDisplay"] ?? $this->getContext($context, "consultDisplay")), false)) : (false)) || (((array_key_exists("siteNav", $context)) ? (_twig_default_filter(($context["siteNav"] ?? $this->getContext($context, "siteNav")))) : ("")) == "/")))) {
            // line 121
            echo "      ";
            if ( !$this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("esBar.enabled", 0)) {
                // line 122
                echo "        ";
                $this->loadTemplate("float-consult.html.twig", "layout.html.twig", 122)->display($context);
                // line 123
                echo "      ";
            }
            // line 124
            echo "    ";
        }
        // line 125
        echo "  ";
        
        $__internal_f0aac421a3a476eb72b1e5ba4350e0177c1b423964af7ef413a47f8d82d2e3dc->leave($__internal_f0aac421a3a476eb72b1e5ba4350e0177c1b423964af7ef413a47f8d82d2e3dc_prof);

    }

    // line 140
    public function block_footer_script($context, array $blocks = array())
    {
        $__internal_04027475e27bee31de0b341b74bd2463b72a538d7f130cfc743f9281819e85f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04027475e27bee31de0b341b74bd2463b72a538d7f130cfc743f9281819e85f2->enter($__internal_04027475e27bee31de0b341b74bd2463b72a538d7f130cfc743f9281819e85f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer_script"));

        // line 141
        echo "  ";
        $this->loadTemplate("default/script-webpack.html.twig", "layout.html.twig", 141)->display($context);
        // line 142
        echo "  ";
        $this->loadTemplate("script_boot.html.twig", "layout.html.twig", 142)->display($context);
        
        $__internal_04027475e27bee31de0b341b74bd2463b72a538d7f130cfc743f9281819e85f2->leave($__internal_04027475e27bee31de0b341b74bd2463b72a538d7f130cfc743f9281819e85f2_prof);

    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  644 => 142,  641 => 141,  635 => 140,  628 => 125,  625 => 124,  622 => 123,  619 => 122,  616 => 121,  614 => 120,  611 => 119,  605 => 117,  602 => 116,  600 => 115,  597 => 114,  591 => 113,  584 => 111,  581 => 110,  578 => 109,  575 => 108,  572 => 107,  569 => 106,  563 => 105,  556 => 103,  553 => 102,  550 => 101,  547 => 100,  541 => 99,  530 => 96,  523 => 94,  517 => 93,  510 => 91,  507 => 90,  501 => 89,  490 => 86,  479 => 83,  468 => 80,  461 => 87,  459 => 86,  455 => 84,  453 => 83,  449 => 81,  446 => 80,  440 => 79,  433 => 77,  430 => 76,  427 => 75,  424 => 74,  418 => 73,  410 => 137,  404 => 134,  401 => 133,  398 => 132,  396 => 131,  389 => 127,  386 => 126,  384 => 113,  381 => 112,  379 => 105,  376 => 104,  374 => 99,  370 => 97,  368 => 96,  365 => 95,  363 => 93,  360 => 92,  358 => 89,  355 => 88,  353 => 79,  350 => 78,  348 => 73,  345 => 72,  339 => 71,  321 => 65,  310 => 63,  303 => 61,  300 => 60,  297 => 59,  291 => 58,  280 => 39,  268 => 37,  256 => 35,  247 => 42,  243 => 41,  239 => 40,  233 => 39,  226 => 37,  219 => 35,  215 => 33,  209 => 32,  195 => 29,  189 => 28,  180 => 150,  176 => 148,  174 => 147,  171 => 146,  169 => 145,  166 => 144,  164 => 140,  161 => 139,  159 => 71,  155 => 69,  153 => 68,  149 => 67,  144 => 65,  141 => 64,  139 => 63,  136 => 62,  134 => 58,  128 => 55,  124 => 54,  120 => 53,  116 => 51,  111 => 49,  106 => 48,  104 => 47,  100 => 46,  96 => 44,  94 => 32,  91 => 31,  89 => 28,  75 => 20,  72 => 19,  70 => 18,  68 => 17,  66 => 16,  64 => 15,  61 => 14,  59 => 13,  57 => 12,  45 => 2,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import \"macro.html.twig\" as web_macro %}
<!DOCTYPE html>
<!--[if lt IE 7]>
<html class=\"lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]>
<html class=\"lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]>
<html class=\"lt-ie9\"> <![endif]-->
<!--[if gt IE 8]><!-->
<html> <!--<![endif]-->

{% set lang = app.request.getLocale() %}
{% set mobile = is_show_mobile_page() %}

{% set currentTheme = current_theme() %}
{% set themeConfig = app.request.get('themeEditing')|default(false) ? currentTheme.config  : currentTheme.confirmConfig %}
{% set maincolor = themeConfig.maincolor|default('default') %}
{% set navigationcolor = themeConfig.navigationcolor|default('default') %}

<html lang=\"{{ lang }}\" class=\"{% if lang == 'en' %}es-en{% endif %}\">
<head>
  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,Chrome=1\">
  <meta name=\"renderer\" content=\"webkit\">
  <meta name=\"viewport\"
    content=\"width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no\">
  <title>
    {%- block title -%}
      {{ setting('site.name', 'EduSoho') }}{% if setting('site.slogan') %} - {{ setting('site.slogan') }}{% endif %}{% if  setting('copyright.owned','0') != '1' or setting('copyright.thirdCopyright')|default(0) == 2 %} - Powered By EduSoho{% endif %}
    {%- endblock -%}
  </title>
  {% block meta %}
    <meta name=\"keywords\"
          content=\"
{% spaceless %}{% block keywords %}{{ setting('site.seo_keywords') }}{% endblock %}{% endspaceless %}\"/>
    <meta name=\"description\"
          content=\"{% spaceless %}{% block description %}{{ setting('site.seo_description') }}{% endblock %}{% endspaceless %}\"/>
    <meta name=\"format-detection\"
          content=\"{% spaceless %}{% block format_detection %}{% endblock %}{% endspaceless %}\"/>
    <meta content=\"{{ csrf_token('site') }}\" name=\"csrf-token\"/>
    <meta content=\"{{ app.user.isLogin()|default(0) }}\" name=\"is-login\"/>
    <meta content=\"{{ wechat_login_bind_enabled()|default(0) }}\" name=\"wechat_login_bind\"/>
  {% endblock %}


  {{ setting('login_bind.verify_code', '')|raw }}
  {% if setting('site.favicon') %}
    <link rel=\"icon\" href=\"{{ asset(setting('site.favicon')) }}\" type=\"image/x-icon\"/>
    <link rel=\"shortcut icon\" href=\"{{ asset(setting('site.favicon')) }}\" type=\"image/x-icon\" media=\"screen\"/>
  {% endif %}

  <!--[if lt IE 9]>
  <script src=\"{{ asset('static-dist/libs/html5shiv.js') }}\"></script>
  <script src=\"{{ asset('static-dist/es5-shim/es5-shim.js') }}\"></script>
  <script src=\"{{ asset('static-dist/es5-shim/es5-sham.js') }}\"></script>
  <![endif]-->

  {% block stylesheets %}
    {% include 'css_loader.html.twig' %}
    {% include 'default/stylesheet-webpack.html.twig' %}
  {% endblock %}

  {% block head_scripts %}{% endblock %}
</head>
<body class=\"{% block bodyClass %}{{ 'es-main-' ~ maincolor }} {{ 'es-nav-' ~ navigationcolor }} {% if bodyClass|default('') %}{{ bodyClass }}{% endif %}{% endblock %}\">
<!--[if lt IE 9]>
<script src=\"{{ asset('static-dist/libs/fix-ie.js') }}\"></script>
{% include 'default/ie8-alert.html.twig' %}
<![endif]-->

{% block body %}
  <div class=\"es-wrap\">
    {% block header %}
      {% include 'site-hint.html.twig' %}
      {% include 'default/header.html.twig' %}
      {% include 'default/exception.html.twig' %}
    {% endblock %}

    {% block full_content %}
      {% block top_content %}{% endblock %}

      <div id=\"content-container\" class=\"container\">
        {% block content %}{% endblock %}
      </div>

      {% block bottom_content %}{% endblock %}
    {% endblock %}

    {% block footer %}
      {% include 'default/footer.html.twig' %}
    {% endblock %}

    {% block footer_mobile %}
    {% endblock %}

    {% block bottom %}{% endblock %}
  </div>

  {% block esBar %}
    {% if setting('esBar.enabled', 0) and app.user.isLogin()|default(false) %}
      {% include 'es-bar/index.html.twig' %}
    {% endif %}
  {% endblock %}

  {% block wechatInform %}
    {% if (siteNav|default() == '/') %}
      {% if (is_mobile_client() == false or (is_mobile_client() and (app.request.headers.get('User-Agent') matches '/MicroMessenger/'))) and app.user.isLogin()|default(false) %}
        {% include 'wechat-inform.html.twig' %}
      {% endif %}
    {% endif %}
  {% endblock %}

  {% block floatConsult %}
  
    {% set cloudConsultPath = cloudConsultPath() %}
    {% if cloudConsultPath|default() %}
      {{ cloudConsultPath | raw }}
    {% endif %}

    {% if setting('consult.enabled', 0) and (consultDisplay|default(false) or siteNav|default() == '/' ) %}
      {% if not setting('esBar.enabled',0) %}
        {% include 'float-consult.html.twig' %}
      {% endif %}
    {% endif %}
  {% endblock %}

  <div id=\"login-modal\" class=\"modal\" data-url=\"{{ path('login_ajax') }}\"></div>
  <div id=\"modal\" class=\"modal\"></div>
  <div id=\"attachment-modal\" class=\"modal\"></div>

  {% set reward_notify = pop_reward_point_notify() %}
  {% if reward_notify %}
    <div class=\"hidden\" id=\"rewardPointNotify\">
      {{ reward_notify }}
    </div>
  {% endif %}

{% endblock %}

{% block footer_script %}
  {% include 'default/script-webpack.html.twig' %}
  {% include 'script_boot.html.twig' %}
{% endblock %}

{% if setting('auth.register_mode') == 'mobile' and app.user.isLogin()|default(false) and app.user.verifiedMobile is empty  %}
  <div id=\"mobile-bind-modal\" class=\"modal\" >
    {% include 'mobile-bind-modal.html.twig' %}
  </div>
{% endif %}

</body>
</html>", "layout.html.twig", "/Users/Exx/Desktop/edusoho/app/Resources/views/layout.html.twig");
    }
}
