<?php

/* ClientBundle:Default:compte.html.twig */
class __TwigTemplate_721e8b9aa5abdf1a65d4d72d1e629ce7a132a07e469e743c87b99a92abf208b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ClientBundle:layouts:layouts.html.twig", "ClientBundle:Default:compte.html.twig", 1);
        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "ClientBundle:layouts:layouts.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ClientBundle:Default:compte.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ClientBundle:Default:compte.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "

\t<div id=\"main-content\">
\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"block-header\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-6 col-md-8 col-sm-12\">
\t\t\t\t\t\t<h2>
\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"btn btn-xs btn-link btn-toggle-fullwidth\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-arrow-left\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\tAcount</h2>
\t\t\t\t\t\t<ul class=\"breadcrumb\">
\t\t\t\t\t\t\t<li class=\"breadcrumb-item\">
\t\t\t\t\t\t\t\t<a href=\"index.html\">
\t\t\t\t\t\t\t\t\t<i class=\"icon-home\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"breadcrumb-item\">Dashbord</li>
\t\t\t\t\t\t\t<li class=\"breadcrumb-item active\">Acount</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-6 col-md-4 col-sm-12 text-right\"></div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"row clearfix\">
\t\t\t\t<div class=\"col-lg-12 col-md-12\">

\t\t\t\t\t<div class=\"tab-content padding-0\">

\t\t\t\t\t\t<div class=\"tab-pane active\" id=\"Basic\">
\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t<div class=\"body\">
\t\t\t\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"header\">
\t\t\t\t\t\t\t\t\t\t\t\t<h2>Change password
\t\t\t\t\t\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"body\">


\t\t\t\t\t\t\t\t\t\t\t\t<style type=\"text/css\">

\t\t\t\t\t\t\t\t\t\t\t\t\t.flash-success {
\t\t\t\t\t\t\t\t\t\t\t\t\t\tbackground: #4ea94e;
\t\t\t\t\t\t\t\t\t\t\t\t\t\tpadding: 10px;
\t\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t</style>

\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 54
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "hasPreviousSession", [])) {
            // line 55
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "flashbag", []), "all", [], "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 56
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 57
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 58
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 61
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 63
        echo "

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 66
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', ["action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_change_password"), "attr" => ["class" => "fos_user_change_password"]]);
        echo "


\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "


\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn green\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tValidate
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 79
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>


\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "ClientBundle:Default:compte.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 79,  148 => 69,  142 => 66,  137 => 63,  134 => 62,  128 => 61,  119 => 58,  114 => 57,  109 => 56,  104 => 55,  102 => 54,  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends ('ClientBundle:layouts:layouts.html.twig') %}
{% block body %}


\t<div id=\"main-content\">
\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"block-header\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-6 col-md-8 col-sm-12\">
\t\t\t\t\t\t<h2>
\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"btn btn-xs btn-link btn-toggle-fullwidth\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-arrow-left\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\tAcount</h2>
\t\t\t\t\t\t<ul class=\"breadcrumb\">
\t\t\t\t\t\t\t<li class=\"breadcrumb-item\">
\t\t\t\t\t\t\t\t<a href=\"index.html\">
\t\t\t\t\t\t\t\t\t<i class=\"icon-home\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"breadcrumb-item\">Dashbord</li>
\t\t\t\t\t\t\t<li class=\"breadcrumb-item active\">Acount</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-6 col-md-4 col-sm-12 text-right\"></div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"row clearfix\">
\t\t\t\t<div class=\"col-lg-12 col-md-12\">

\t\t\t\t\t<div class=\"tab-content padding-0\">

\t\t\t\t\t\t<div class=\"tab-pane active\" id=\"Basic\">
\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t<div class=\"body\">
\t\t\t\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"header\">
\t\t\t\t\t\t\t\t\t\t\t\t<h2>Change password
\t\t\t\t\t\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"body\">


\t\t\t\t\t\t\t\t\t\t\t\t<style type=\"text/css\">

\t\t\t\t\t\t\t\t\t\t\t\t\t.flash-success {
\t\t\t\t\t\t\t\t\t\t\t\t\t\tbackground: #4ea94e;
\t\t\t\t\t\t\t\t\t\t\t\t\t\tpadding: 10px;
\t\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t</style>

\t\t\t\t\t\t\t\t\t\t\t\t{% if app.request.hasPreviousSession %}
\t\t\t\t\t\t\t\t\t\t\t\t\t{% for type, messages in app.session.flashbag.all() %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% for message in messages %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flash-{{ type }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ message }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}


\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_start(form, { 'action': path('fos_user_change_password'), 'attr': { 'class': 'fos_user_change_password' } }) }}


\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(form) }}


\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn green\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tValidate
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_end(form) }}
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>


\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t{% endblock %}
", "ClientBundle:Default:compte.html.twig", "C:\\laragon\\www\\myapp\\src\\ClientBundle/Resources/views/Default/compte.html.twig");
    }
}
