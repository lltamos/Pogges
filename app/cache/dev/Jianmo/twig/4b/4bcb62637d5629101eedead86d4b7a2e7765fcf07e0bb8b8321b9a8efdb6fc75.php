<?php

/* css_loader.html.twig */
class __TwigTemplate_fd18949b951e707f76dd149cb3d321133df3a2254b0db7be271e5f473fd137c1 extends Twig_Template
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
        $__internal_1ad1972ab47820751ce6194fdd70dc77ab4002a573c3afc103746da48b4de81e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ad1972ab47820751ce6194fdd70dc77ab4002a573c3afc103746da48b4de81e->enter($__internal_1ad1972ab47820751ce6194fdd70dc77ab4002a573c3afc103746da48b4de81e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "css_loader.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->css());
        foreach ($context['_seq'] as $context["_key"] => $context["path"]) {
            // line 2
            echo "  ";
            if ((is_string($__internal_2a1a45ab310b15c627cca0501749fc1fca23330d8d109ee9825340082f1b2312 = $context["path"]) && is_string($__internal_eae72c0dc9e0476745b5400385c8787bc1d864dbf1cb874c1e22c8083e5dcd4a = "http://") && ('' === $__internal_eae72c0dc9e0476745b5400385c8787bc1d864dbf1cb874c1e22c8083e5dcd4a || 0 === strpos($__internal_2a1a45ab310b15c627cca0501749fc1fca23330d8d109ee9825340082f1b2312, $__internal_eae72c0dc9e0476745b5400385c8787bc1d864dbf1cb874c1e22c8083e5dcd4a)))) {
                // line 3
                echo "    <link href=\"";
                echo twig_escape_filter($this->env, $context["path"], "html", null, true);
                echo "\" rel=\"stylesheet\" />
  ";
            } else {
                // line 5
                echo "    <link href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("static-dist/" . $context["path"])), "html", null, true);
                echo "\" rel=\"stylesheet\" />
  ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['path'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_1ad1972ab47820751ce6194fdd70dc77ab4002a573c3afc103746da48b4de81e->leave($__internal_1ad1972ab47820751ce6194fdd70dc77ab4002a573c3afc103746da48b4de81e_prof);

    }

    public function getTemplateName()
    {
        return "css_loader.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 5,  29 => 3,  26 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for path in css() %}
  {% if path starts with 'http://' %}
    <link href=\"{{ path }}\" rel=\"stylesheet\" />
  {% else %}
    <link href=\"{{ asset('static-dist/' ~ path) }}\" rel=\"stylesheet\" />
  {% endif %}
{% endfor %}", "css_loader.html.twig", "/Users/Exx/Desktop/edusoho/app/Resources/views/css_loader.html.twig");
    }
}
