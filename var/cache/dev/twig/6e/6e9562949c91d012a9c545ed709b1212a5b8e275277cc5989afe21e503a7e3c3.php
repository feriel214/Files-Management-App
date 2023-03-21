<?php

/* ClientBundle:Default:index.html.twig */
class __TwigTemplate_6d2047ec0bc9787f630720b28688819fcfc488a014d928d8b00bd697e24dbfbf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ClientBundle:layouts:layouts.html.twig", "ClientBundle:Default:index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ClientBundle:Default:index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ClientBundle:Default:index.html.twig"));

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
        echo "\t<div id=\"main-content\">
\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"block-header\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-6 col-md-8 col-sm-12\">
\t\t\t\t\t\t<h2>
\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"btn btn-xs btn-link btn-toggle-fullwidth\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-arrow-left\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\tBasic Information</h2>
\t\t\t\t\t\t<ul class=\"breadcrumb\">
\t\t\t\t\t\t\t<li class=\"breadcrumb-item\">
\t\t\t\t\t\t\t\t<a href=\"index.html\">
\t\t\t\t\t\t\t\t\t<i class=\"icon-home\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"breadcrumb-item\">Dashbord</li>
\t\t\t\t\t\t\t<li class=\"breadcrumb-item active\">Basic Information</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-6 col-md-4 col-sm-12 text-right\"></div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div
\t\t\t\tclass=\"row clearfix\">


\t\t\t\t<!-- toastr init js-->
\t\t\t\t";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "flashbag", []), "get", [0 => "modifiercompte"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 33
            echo "\t\t\t\t\t<div class=\"alert alert-success\">

\t\t\t\t\t\t";
            // line 35
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "

\t\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "

\t\t\t\t<div class=\"col-lg-12 col-md-12\">

\t\t\t\t\t<div class=\"tab-content padding-0\">

\t\t\t\t\t\t<div class=\"tab-pane active\" id=\"Basic\">
\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t<div class=\"body\">
\t\t\t\t\t\t\t\t\t<form action=\"";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modifclient");
        echo "\" method=\"POST\" enctype=\"multipart/form-data\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row clearfix\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-12 col-md-12\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"fancy-radio\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input name=\"gender2\" value=\"male\" type=\"radio\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i></i>Male</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"fancy-radio\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input name=\"gender2\" value=\"female\" type=\"radio\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i></i>Female</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" value=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "name", []), "html", null, true);
        echo "\" id=\"signin-email\" name=\"name\" type=\"text\" placeholder=\"Name\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"signin-email\" class=\"control-label sr-only\">Email</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"email\" value=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", []), "html", null, true);
        echo "\" class=\"form-control\" id=\"signin-email\" name=\"email\" type=\"text\" placeholder=\"Email\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" value=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "phone", []), "html", null, true);
        echo "\" id=\"signin-email\" name=\"phone\" type=\"text\" placeholder=\"Phone\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"pays\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">-- Select Country --</option>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 84
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pays"] ?? $this->getContext($context, "pays")));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 85
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 86
            if (($this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "pays", []) == $this->getAttribute($context["p"], "nomFrFr", []))) {
                // line 87
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 88
                $context["ch"] = "selected";
                // line 89
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 91
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 92
                $context["ch"] = "";
                // line 93
                echo "

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 96
            echo "

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option ";
            // line 98
            echo twig_escape_filter($this->env, ($context["ch"] ?? $this->getContext($context, "ch")), "html", null, true);
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "nomFrFr", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "nomFrFr", []), "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" value=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "country", []), "html", null, true);
        echo "\" id=\"signin-email\" name=\"country\" type=\"text\" placeholder=\"country\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" value=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "address", []), "html", null, true);
        echo "\" id=\"signin-email\" name=\"address\" type=\"text\" placeholder=\"Address\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-calendar\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input value=\"";
        // line 121
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "birthdate", []), "m/d/Y"), "html", null, true);
        echo "\" data-provide=\"datepicker\" data-date-autoclose=\"true\" class=\"form-control\" placeholder=\"Birthdate\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group \">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\">Upload Photo</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"custom-file\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"file\" name=\"photo\" class=\"custom-file-input\" id=\"inputGroupFile01\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"custom-file-label\" for=\"inputGroupFile01\">Choose photo</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea placeholder=\"Description\" class=\"form-control\" name=\"description\">";
        // line 138
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "description", []), "html", null, true);
        echo "</textarea>

\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<br><br>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Update</button>
\t\t\t\t\t\t\t\t\t\t&nbsp;&nbsp;
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\">Cancel</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"Account\">
\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t<div class=\"body\">
\t\t\t\t\t\t\t\t\t<div class=\"row clearfix\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-12 col-md-12\">
\t\t\t\t\t\t\t\t\t\t\t<h6>Account Data</h6>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" value=\"ChandlerBing\" disabled=\"\" placeholder=\"Username\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" value=\"Chandler.info@yourdomain.com\" placeholder=\"Email\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Phone Number\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-12 col-md-12\">
\t\t\t\t\t\t\t\t\t\t\t<h6>Change Password</h6>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" placeholder=\"Current Password\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" placeholder=\"New Password\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" placeholder=\"Confirm New Password\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary\">Update</button>
\t\t\t\t\t\t\t\t\t&nbsp;&nbsp;
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-default\">Cancel</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"General\">
\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t<div class=\"body\">
\t\t\t\t\t\t\t\t\t<h6>General Information</h6>
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-12 col-md-12\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Phone Number\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<option>--Select Language</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"en_US\" lang=\"en\">English (United States)</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"ar\" lang=\"ar\">العربية</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"ary\" lang=\"ar\">العربية المغربية</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"az\" lang=\"az\">Azərbaycan dili</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"azb\" lang=\"az\">گؤنئی آذربایجان</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"bel\" lang=\"be\">Беларуская мова</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"bg_BG\" lang=\"bg\">Български</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"bn_BD\" lang=\"bn\">বাংলা</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"bs_BA\" lang=\"bs\">Bosanski</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"ca\" lang=\"ca\">Català</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"ceb\" lang=\"ceb\">Cebuano</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"cs_CZ\" lang=\"cs\">Čeština‎</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"cy\" lang=\"cy\">Cymraeg</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"da_DK\" lang=\"da\">Dansk</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"de_CH_informal\" lang=\"de\">Deutsch (Schweiz, Du)</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"de_CH\" lang=\"de\">Deutsch (Schweiz)</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"de_DE\" lang=\"de\">Deutsch</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"de_DE_formal\" lang=\"de\">Deutsch (Sie)</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"el\" lang=\"el\">Ελληνικά</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"en_GB\" lang=\"en\">English (UK)</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"en_AU\" lang=\"en\">English (Australia)</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"en_ZA\" lang=\"en\">English (South Africa)</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"en_NZ\" lang=\"en\">English (New Zealand)</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"en_CA\" lang=\"en\">English (Canada)</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"eo\" lang=\"eo\">Esperanto</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"es_CL\" lang=\"es\">Español de Chile</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"es_MX\" lang=\"es\">Español de México</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"es_GT\" lang=\"es\">Español de Guatemala</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"es_AR\" lang=\"es\">Español de Argentina</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"es_ES\" lang=\"es\">Español</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"es_PE\" lang=\"es\">Español de Perú</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"es_CO\" lang=\"es\">Español de Colombia</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"es_VE\" lang=\"es\">Español de Venezuela</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"et\" lang=\"et\">Eesti</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"eu\" lang=\"eu\">Euskara</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"fa_IR\" lang=\"fa\">فارسی</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"fi\" lang=\"fi\">Suomi</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"fr_FR\" lang=\"fr\">Français</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"fr_CA\" lang=\"fr\">Français du Canada</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"fr_BE\" lang=\"fr\">Français de Belgique</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"gd\" lang=\"gd\">Gàidhlig</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"gl_ES\" lang=\"gl\">Galego</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"haz\" lang=\"haz\">هزاره گی</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"he_IL\" lang=\"he\">עִבְרִית</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"hi_IN\" lang=\"hi\">हिन्दी</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"hr\" lang=\"hr\">Hrvatski</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"hu_HU\" lang=\"hu\">Magyar</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"hy\" lang=\"hy\">Հայերեն</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"id_ID\" lang=\"id\">Bahasa Indonesia</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"is_IS\" lang=\"is\">Íslenska</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"it_IT\" lang=\"it\">Italiano</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"ja\" lang=\"ja\">日本語</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"ka_GE\" lang=\"ka\">ქართული</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"ko_KR\" lang=\"ko\">한국어</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"lt_LT\" lang=\"lt\">Lietuvių kalba</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"mk_MK\" lang=\"mk\">Македонски јазик</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"mr\" lang=\"mr\">मराठी</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"ms_MY\" lang=\"ms\">Bahasa Melayu</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"my_MM\" lang=\"my\">ဗမာစာ</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"nb_NO\" lang=\"nb\">Norsk bokmål</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"nl_NL\" lang=\"nl\">Nederlands</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"nl_NL_formal\" lang=\"nl\">Nederlands (Formeel)</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"nn_NO\" lang=\"nn\">Norsk nynorsk</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"oci\" lang=\"oc\">Occitan</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"pl_PL\" lang=\"pl\">Polski</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"ps\" lang=\"ps\">پښتو</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"pt_BR\" lang=\"pt\">Português do Brasil</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"pt_PT\" lang=\"pt\">Português</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"ro_RO\" lang=\"ro\">Română</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"ru_RU\" lang=\"ru\">Русский</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"sk_SK\" lang=\"sk\">Slovenčina</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"sl_SI\" lang=\"sl\">Slovenščina</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"sq\" lang=\"sq\">Shqip</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"sr_RS\" lang=\"sr\">Српски језик</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"sv_SE\" lang=\"sv\">Svenska</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"th\" lang=\"th\">ไทย</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"tl\" lang=\"tl\">Tagalog</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"tr_TR\" lang=\"tr\">Türkçe</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"ug_CN\" lang=\"ug\">Uyƣurqə</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"uk\" lang=\"uk\">Українська</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"vi\" lang=\"vi\">Tiếng Việt</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"zh_CN\" lang=\"zh\">简体中文</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"zh_TW\" lang=\"zh\">繁體中文</option>
\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<option>--TimeZone--</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<optgroup label=\"Africa\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Abidjan\">Abidjan</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Accra\">Accra</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Addis_Ababa\">Addis Ababa</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Algiers\">Algiers</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Asmara\">Asmara</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Bamako\">Bamako</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Bangui\">Bangui</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Banjul\">Banjul</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Bissau\">Bissau</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Blantyre\">Blantyre</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Brazzaville\">Brazzaville</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Bujumbura\">Bujumbura</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Cairo\">Cairo</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Casablanca\">Casablanca</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Ceuta\">Ceuta</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Conakry\">Conakry</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Dakar\">Dakar</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Dar_es_Salaam\">Dar es Salaam</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Djibouti\">Djibouti</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Douala\">Douala</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/El_Aaiun\">El Aaiun</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Freetown\">Freetown</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Gaborone\">Gaborone</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Harare\">Harare</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Johannesburg\">Johannesburg</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Juba\">Juba</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Kampala\">Kampala</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Khartoum\">Khartoum</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Kigali\">Kigali</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Kinshasa\">Kinshasa</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Lagos\">Lagos</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Libreville\">Libreville</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Lome\">Lome</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Luanda\">Luanda</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Lubumbashi\">Lubumbashi</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Lusaka\">Lusaka</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Malabo\">Malabo</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Maputo\">Maputo</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Maseru\">Maseru</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Mbabane\">Mbabane</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Mogadishu\">Mogadishu</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Monrovia\">Monrovia</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Nairobi\">Nairobi</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Ndjamena\">Ndjamena</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Niamey\">Niamey</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Nouakchott\">Nouakchott</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Ouagadougou\">Ouagadougou</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Porto-Novo\">Porto-Novo</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Sao_Tome\">Sao Tome</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Tripoli\">Tripoli</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Tunis\">Tunis</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Windhoek\">Windhoek</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t\t\t\t\t\t<optgroup label=\"America\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Adak\">Adak</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Anchorage\">Anchorage</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Anguilla\">Anguilla</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Antigua\">Antigua</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Araguaina\">Araguaina</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Argentina/Buenos_Aires\">Argentina - Buenos Aires</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Argentina/Catamarca\">Argentina - Catamarca</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Argentina/Cordoba\">Argentina - Cordoba</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Argentina/Jujuy\">Argentina - Jujuy</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Argentina/La_Rioja\">Argentina - La Rioja</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Argentina/Mendoza\">Argentina - Mendoza</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Argentina/Rio_Gallegos\">Argentina - Rio Gallegos</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Argentina/Salta\">Argentina - Salta</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Argentina/San_Juan\">Argentina - San Juan</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Argentina/San_Luis\">Argentina - San Luis</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Argentina/Tucuman\">Argentina - Tucuman</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Argentina/Ushuaia\">Argentina - Ushuaia</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Aruba\">Aruba</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Asuncion\">Asuncion</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Atikokan\">Atikokan</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Bahia\">Bahia</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Bahia_Banderas\">Bahia Banderas</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Barbados\">Barbados</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Belem\">Belem</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Belize\">Belize</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Blanc-Sablon\">Blanc-Sablon</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Boa_Vista\">Boa Vista</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Bogota\">Bogota</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Boise\">Boise</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Cambridge_Bay\">Cambridge Bay</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Campo_Grande\">Campo Grande</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Cancun\">Cancun</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Caracas\">Caracas</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Cayenne\">Cayenne</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Cayman\">Cayman</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Chicago\">Chicago</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Chihuahua\">Chihuahua</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Costa_Rica\">Costa Rica</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Creston\">Creston</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Cuiaba\">Cuiaba</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Curacao\">Curacao</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Danmarkshavn\">Danmarkshavn</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Dawson\">Dawson</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Dawson_Creek\">Dawson Creek</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Denver\">Denver</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Detroit\">Detroit</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Dominica\">Dominica</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Edmonton\">Edmonton</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Eirunepe\">Eirunepe</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/El_Salvador\">El Salvador</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Fortaleza\">Fortaleza</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Glace_Bay\">Glace Bay</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Godthab\">Godthab</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Goose_Bay\">Goose Bay</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Grand_Turk\">Grand Turk</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Grenada\">Grenada</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Guadeloupe\">Guadeloupe</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Guatemala\">Guatemala</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Guayaquil\">Guayaquil</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Guyana\">Guyana</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Halifax\">Halifax</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Havana\">Havana</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Hermosillo\">Hermosillo</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Indiana/Indianapolis\">Indiana - Indianapolis</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Indiana/Knox\">Indiana - Knox</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Indiana/Marengo\">Indiana - Marengo</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Indiana/Petersburg\">Indiana - Petersburg</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Indiana/Tell_City\">Indiana - Tell City</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Indiana/Vevay\">Indiana - Vevay</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Indiana/Vincennes\">Indiana - Vincennes</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Indiana/Winamac\">Indiana - Winamac</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Inuvik\">Inuvik</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Iqaluit\">Iqaluit</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Jamaica\">Jamaica</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Juneau\">Juneau</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Kentucky/Louisville\">Kentucky - Louisville</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Kentucky/Monticello\">Kentucky - Monticello</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Kralendijk\">Kralendijk</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/La_Paz\">La Paz</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Lima\">Lima</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Los_Angeles\">Los Angeles</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Lower_Princes\">Lower Princes</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Maceio\">Maceio</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Managua\">Managua</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Manaus\">Manaus</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Marigot\">Marigot</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Martinique\">Martinique</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Matamoros\">Matamoros</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Mazatlan\">Mazatlan</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Menominee\">Menominee</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Merida\">Merida</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Metlakatla\">Metlakatla</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Mexico_City\">Mexico City</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Miquelon\">Miquelon</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Moncton\">Moncton</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Monterrey\">Monterrey</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Montevideo\">Montevideo</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Montserrat\">Montserrat</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Nassau\">Nassau</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/New_York\">New York</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Nipigon\">Nipigon</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Nome\">Nome</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Noronha\">Noronha</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/North_Dakota/Beulah\">North Dakota - Beulah</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/North_Dakota/Center\">North Dakota - Center</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/North_Dakota/New_Salem\">North Dakota - New Salem</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Ojinaga\">Ojinaga</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Panama\">Panama</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Pangnirtung\">Pangnirtung</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Paramaribo\">Paramaribo</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Phoenix\">Phoenix</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Port-au-Prince\">Port-au-Prince</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Port_of_Spain\">Port of Spain</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Porto_Velho\">Porto Velho</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Puerto_Rico\">Puerto Rico</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Rainy_River\">Rainy River</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Rankin_Inlet\">Rankin Inlet</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Recife\">Recife</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Regina\">Regina</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Resolute\">Resolute</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Rio_Branco\">Rio Branco</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Santa_Isabel\">Santa Isabel</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Santarem\">Santarem</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Santiago\">Santiago</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Santo_Domingo\">Santo Domingo</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Sao_Paulo\">Sao Paulo</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Scoresbysund\">Scoresbysund</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Sitka\">Sitka</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/St_Barthelemy\">St Barthelemy</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/St_Johns\">St Johns</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/St_Kitts\">St Kitts</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/St_Lucia\">St Lucia</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/St_Bing\">St Bing</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/St_Vincent\">St Vincent</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Swift_Current\">Swift Current</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Tegucigalpa\">Tegucigalpa</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Thule\">Thule</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Thunder_Bay\">Thunder Bay</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Tijuana\">Tijuana</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Toronto\">Toronto</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Tortola\">Tortola</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Vancouver\">Vancouver</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Whitehorse\">Whitehorse</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Winnipeg\">Winnipeg</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Yakutat\">Yakutat</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Yellowknife\">Yellowknife</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t\t\t\t\t\t<optgroup label=\"Antarctica\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Antarctica/Casey\">Casey</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Antarctica/Davis\">Davis</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Antarctica/DumontDUrville\">DumontDUrville</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Antarctica/Macquarie\">Macquarie</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Antarctica/Mawson\">Mawson</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Antarctica/McMurdo\">McMurdo</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Antarctica/Palmer\">Palmer</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Antarctica/Rothera\">Rothera</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Antarctica/Syowa\">Syowa</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Antarctica/Troll\">Troll</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Antarctica/Vostok\">Vostok</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t\t\t\t\t\t<optgroup label=\"Arctic\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Arctic/Longyearbyen\">Longyearbyen</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t\t\t\t\t\t<optgroup label=\"Asia\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Aden\">Aden</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Almaty\">Almaty</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Amman\">Amman</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Anadyr\">Anadyr</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Aqtau\">Aqtau</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Aqtobe\">Aqtobe</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Ashgabat\">Ashgabat</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Baghdad\">Baghdad</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Bahrain\">Bahrain</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Baku\">Baku</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Bangkok\">Bangkok</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Beirut\">Beirut</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Bishkek\">Bishkek</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Brunei\">Brunei</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Chita\">Chita</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Choibalsan\">Choibalsan</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Colombo\">Colombo</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Damascus\">Damascus</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Dhaka\">Dhaka</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Dili\">Dili</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Dubai\">Dubai</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Dushanbe\">Dushanbe</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Gaza\">Gaza</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Hebron\">Hebron</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Ho_Chi_Minh\">Ho Chi Minh</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Hong_Kong\">Hong Kong</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Hovd\">Hovd</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Irkutsk\">Irkutsk</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Jakarta\">Jakarta</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Jayapura\">Jayapura</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Jerusalem\">Jerusalem</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Kabul\">Kabul</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Kamchatka\">Kamchatka</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Karachi\">Karachi</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Kathmandu\">Kathmandu</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Khandyga\">Khandyga</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Kolkata\">Kolkata</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Krasnoyarsk\">Krasnoyarsk</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Kuala_Lumpur\">Kuala Lumpur</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Kuching\">Kuching</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Kuwait\">Kuwait</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Macau\">Macau</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Magadan\">Magadan</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Makassar\">Makassar</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Manila\">Manila</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Muscat\">Muscat</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Nicosia\">Nicosia</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Novokuznetsk\">Novokuznetsk</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Novosibirsk\">Novosibirsk</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Omsk\">Omsk</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Oral\">Oral</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Phnom_Penh\">Phnom Penh</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Pontianak\">Pontianak</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Pyongyang\">Pyongyang</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Qatar\">Qatar</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Qyzylorda\">Qyzylorda</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Rangoon\">Rangoon</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Riyadh\">Riyadh</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Sakhalin\">Sakhalin</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Samarkand\">Samarkand</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Seoul\">Seoul</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Shanghai\">Shanghai</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Singapore\">Singapore</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Srednekolymsk\">Srednekolymsk</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Taipei\">Taipei</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Tashkent\">Tashkent</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Tbilisi\">Tbilisi</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Tehran\">Tehran</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Thimphu\">Thimphu</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Tokyo\">Tokyo</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Ulaanbaatar\">Ulaanbaatar</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Urumqi\">Urumqi</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Ust-Nera\">Ust-Nera</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Vientiane\">Vientiane</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Vladivostok\">Vladivostok</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Yakutsk\">Yakutsk</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Yekaterinburg\">Yekaterinburg</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Yerevan\">Yerevan</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t\t\t\t\t\t<optgroup label=\"Atlantic\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Atlantic/Azores\">Azores</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Atlantic/Bermuda\">Bermuda</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Atlantic/Canary\">Canary</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Atlantic/Cape_Verde\">Cape Verde</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Atlantic/Faroe\">Faroe</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Atlantic/Madeira\">Madeira</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Atlantic/Reykjavik\">Reykjavik</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Atlantic/South_Georgia\">South Georgia</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Atlantic/Stanley\">Stanley</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Atlantic/St_Helena\">St Helena</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t\t\t\t\t\t<optgroup label=\"Australia\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Australia/Adelaide\">Adelaide</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Australia/Brisbane\">Brisbane</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Australia/Broken_Hill\">Broken Hill</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Australia/Currie\">Currie</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Australia/Darwin\">Darwin</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Australia/Eucla\">Eucla</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Australia/Hobart\">Hobart</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Australia/Lindeman\">Lindeman</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Australia/Lord_Howe\">Lord Howe</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Australia/Melbourne\">Melbourne</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Australia/Perth\">Perth</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Australia/Sydney\">Sydney</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t\t\t\t\t\t<optgroup label=\"Europe\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Amsterdam\">Amsterdam</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Andorra\">Andorra</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Athens\">Athens</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Belgrade\">Belgrade</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Berlin\">Berlin</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Bratislava\">Bratislava</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Brussels\">Brussels</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Bucharest\">Bucharest</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Budapest\">Budapest</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Busingen\">Busingen</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Chisinau\">Chisinau</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Copenhagen\">Copenhagen</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Dublin\">Dublin</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Gibraltar\">Gibraltar</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Guernsey\">Guernsey</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Helsinki\">Helsinki</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Isle_of_Man\">Isle of Man</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Istanbul\">Istanbul</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Jersey\">Jersey</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Kaliningrad\">Kaliningrad</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Kiev\">Kiev</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Lisbon\">Lisbon</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Ljubljana\">Ljubljana</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/London\">London</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Luxembourg\">Luxembourg</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Madrid\">Madrid</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Malta\">Malta</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Mariehamn\">Mariehamn</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Minsk\">Minsk</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Monaco\">Monaco</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Moscow\">Moscow</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Oslo\">Oslo</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Paris\">Paris</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Podgorica\">Podgorica</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Prague\">Prague</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Riga\">Riga</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Rome\">Rome</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Samara\">Samara</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/San_Marino\">San Marino</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Sarajevo\">Sarajevo</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Simferopol\">Simferopol</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Skopje\">Skopje</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Sofia\">Sofia</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Stockholm\">Stockholm</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Tallinn\">Tallinn</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Tirane\">Tirane</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Uzhgorod\">Uzhgorod</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Vaduz\">Vaduz</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Vatican\">Vatican</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Vienna\">Vienna</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Vilnius\">Vilnius</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Volgograd\">Volgograd</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Warsaw\">Warsaw</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Zagreb\">Zagreb</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Zaporozhye\">Zaporozhye</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Zurich\">Zurich</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t\t\t\t\t\t<optgroup label=\"Indian\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Indian/Antananarivo\">Antananarivo</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Indian/Chagos\">Chagos</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Indian/Christmas\">Christmas</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Indian/Cocos\">Cocos</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Indian/Comoro\">Comoro</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Indian/Kerguelen\">Kerguelen</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Indian/Mahe\">Mahe</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Indian/Maldives\">Maldives</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Indian/Mauritius\">Mauritius</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Indian/Mayotte\">Mayotte</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Indian/Reunion\">Reunion</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t\t\t\t\t\t<optgroup label=\"Pacific\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Apia\">Apia</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Auckland\">Auckland</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Chatham\">Chatham</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Chuuk\">Chuuk</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Easter\">Easter</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Efate\">Efate</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Enderbury\">Enderbury</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Fakaofo\">Fakaofo</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Fiji\">Fiji</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Funafuti\">Funafuti</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Galapagos\">Galapagos</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Gambier\">Gambier</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Guadalcanal\">Guadalcanal</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Guam\">Guam</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Honolulu\">Honolulu</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Johnston\">Johnston</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Kiritimati\">Kiritimati</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Kosrae\">Kosrae</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Kwajalein\">Kwajalein</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Majuro\">Majuro</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Marquesas\">Marquesas</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Midway\">Midway</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Nauru\">Nauru</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Niue\">Niue</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Norfolk\">Norfolk</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Noumea\">Noumea</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Pago_Pago\">Pago Pago</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Palau\">Palau</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Pitcairn\">Pitcairn</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Pohnpei\">Pohnpei</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Port_Moresby\">Port Moresby</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Rarotonga\">Rarotonga</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Saipan\">Saipan</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Tahiti\">Tahiti</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Tarawa\">Tarawa</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Tongatapu\">Tongatapu</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Wake\">Wake</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Wallis\">Wallis</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t\t\t\t\t\t<optgroup label=\"UTC\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"UTC\">UTC</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t\t\t\t\t\t<optgroup label=\"Manual Offsets\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"UTC-12\">UTC-12</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"UTC-11.5\">UTC-11:30</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"UTC-11\">UTC-11</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"UTC-10.5\">UTC-10:30</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"UTC-10\">UTC-10</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"UTC-9.5\">UTC-9:30</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"UTC-9\">UTC-9</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"UTC-8.5\">UTC-8:30</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"UTC-8\">UTC-8</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"UTC-7.5\">UTC-7:30</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"UTC-7\">UTC-7</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"UTC-6.5\">UTC-6:30</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"UTC-6\">UTC-6</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"UTC-5.5\">UTC-5:30</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option selected=\"selected\" value=\"UTC-5\">UTC-5</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"UTC-4.5\">UTC-4:30</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"UTC-4\">UTC-4</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"UTC-3.5\">UTC-3:30</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"UTC-3\">UTC-3</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"UTC-2.5\">UTC-2:30</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"UTC-2\">UTC-2</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"UTC-1.5\">UTC-1:30</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"UTC-1\">UTC-1</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"UTC-0.5\">UTC-0:30</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"UTC+0\">UTC+0</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"UTC+0.5\">UTC+0:30</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"UTC+1\">UTC+1</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"UTC+1.5\">UTC+1:30</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"UTC+2\">UTC+2</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"UTC+2.5\">UTC+2:30</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"UTC+3\">UTC+3</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"UTC+3.5\">UTC+3:30</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"UTC+4\">UTC+4</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"UTC+4.5\">UTC+4:30</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"UTC+5\">UTC+5</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"UTC+5.5\">UTC+5:30</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"UTC+5.75\">UTC+5:45</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"UTC+6\">UTC+6</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"UTC+6.5\">UTC+6:30</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"UTC+7\">UTC+7</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"UTC+7.5\">UTC+7:30</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"UTC+8\">UTC+8</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"UTC+8.5\">UTC+8:30</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"UTC+8.75\">UTC+8:45</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"UTC+9\">UTC+9</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"UTC+9.5\">UTC+9:30</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"UTC+10\">UTC+10</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"UTC+10.5\">UTC+10:30</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"UTC+11\">UTC+11</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"UTC+11.5\">UTC+11:30</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"UTC+12\">UTC+12</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"UTC+12.75\">UTC+12:45</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"UTC+13\">UTC+13</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"UTC+13.75\">UTC+13:45</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"UTC+14\">UTC+14</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label>Date Format</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fancy-radio\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label><input name=\"dateFormat\" value=\"\" type=\"radio\"><span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i></i>May 18, 2018</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</label>&nbsp;&nbsp;
\t\t\t\t\t\t\t\t\t\t\t\t\t<label><input name=\"dateFormat\" value=\"\" type=\"radio\"><span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i></i>2018, May, 18</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</label>&nbsp;&nbsp;
\t\t\t\t\t\t\t\t\t\t\t\t\t<label><input name=\"dateFormat\" value=\"\" type=\"radio\" checked=\"\"><span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i></i>2018-03-10</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</label>&nbsp;&nbsp;
\t\t\t\t\t\t\t\t\t\t\t\t\t<label><input name=\"dateFormat\" value=\"\" type=\"radio\"><span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i></i>02/09/2018</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</label>&nbsp;&nbsp;
\t\t\t\t\t\t\t\t\t\t\t\t\t<label><input name=\"dateFormat\" value=\"\" type=\"radio\"><span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i></i>10/05/2018</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-12 col-md-12\">
\t\t\t\t\t\t\t\t\t\t\t<h6>Email from Lucid</h6>
\t\t\t\t\t\t\t\t\t\t\t<p>I'd like to receive the following emails:</p>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-unstyled list-email-received\">
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"fancy-checkbox\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" checked=\"\"><span>Weekly account summary</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"fancy-checkbox\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\"><span>Campaign reports</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"fancy-checkbox\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" checked=\"\"><span>Promotional news such as offers or discounts</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"fancy-checkbox\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" checked=\"\"><span>Tips for campaign setup, growth and client success stories</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary\">Update</button>
\t\t\t\t\t\t\t\t\t&nbsp;&nbsp;
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-default\">Cancel</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>


\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "ClientBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  250 => 138,  230 => 121,  216 => 110,  208 => 105,  201 => 100,  189 => 98,  185 => 96,  180 => 93,  178 => 92,  175 => 91,  171 => 89,  169 => 88,  166 => 87,  164 => 86,  161 => 85,  157 => 84,  148 => 78,  140 => 73,  132 => 68,  109 => 48,  98 => 39,  88 => 35,  84 => 33,  80 => 32,  49 => 3,  40 => 2,  11 => 1,);
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
\t\t\t\t\t\t\tBasic Information</h2>
\t\t\t\t\t\t<ul class=\"breadcrumb\">
\t\t\t\t\t\t\t<li class=\"breadcrumb-item\">
\t\t\t\t\t\t\t\t<a href=\"index.html\">
\t\t\t\t\t\t\t\t\t<i class=\"icon-home\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"breadcrumb-item\">Dashbord</li>
\t\t\t\t\t\t\t<li class=\"breadcrumb-item active\">Basic Information</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-6 col-md-4 col-sm-12 text-right\"></div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div
\t\t\t\tclass=\"row clearfix\">


\t\t\t\t<!-- toastr init js-->
\t\t\t\t{% for flashMessage in app.session.flashbag.get('modifiercompte') %}
\t\t\t\t\t<div class=\"alert alert-success\">

\t\t\t\t\t\t{{ flashMessage }}

\t\t\t\t\t</div>
\t\t\t\t{% endfor %}


\t\t\t\t<div class=\"col-lg-12 col-md-12\">

\t\t\t\t\t<div class=\"tab-content padding-0\">

\t\t\t\t\t\t<div class=\"tab-pane active\" id=\"Basic\">
\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t<div class=\"body\">
\t\t\t\t\t\t\t\t\t<form action=\"{{path('modifclient')}}\" method=\"POST\" enctype=\"multipart/form-data\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row clearfix\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-12 col-md-12\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"fancy-radio\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input name=\"gender2\" value=\"male\" type=\"radio\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i></i>Male</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"fancy-radio\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input name=\"gender2\" value=\"female\" type=\"radio\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i></i>Female</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" value=\"{{user.name}}\" id=\"signin-email\" name=\"name\" type=\"text\" placeholder=\"Name\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"signin-email\" class=\"control-label sr-only\">Email</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"email\" value=\"{{user.email}}\" class=\"form-control\" id=\"signin-email\" name=\"email\" type=\"text\" placeholder=\"Email\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" value=\"{{user.phone}}\" id=\"signin-email\" name=\"phone\" type=\"text\" placeholder=\"Phone\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"pays\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">-- Select Country --</option>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% for p in pays %}

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if user.pays==p.nomFrFr %}

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% set ch=\"selected\" %}

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% else %}

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% set ch=\"\" %}


\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}


\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option {{ch}} value=\"{{p.nomFrFr}}\">{{p.nomFrFr}}</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" value=\"{{user.country}}\" id=\"signin-email\" name=\"country\" type=\"text\" placeholder=\"country\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" value=\"{{user.address}}\" id=\"signin-email\" name=\"address\" type=\"text\" placeholder=\"Address\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-calendar\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input value=\"{{ user.birthdate|date(\"m/d/Y\") }}\" data-provide=\"datepicker\" data-date-autoclose=\"true\" class=\"form-control\" placeholder=\"Birthdate\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group \">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\">Upload Photo</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"custom-file\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"file\" name=\"photo\" class=\"custom-file-input\" id=\"inputGroupFile01\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"custom-file-label\" for=\"inputGroupFile01\">Choose photo</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea placeholder=\"Description\" class=\"form-control\" name=\"description\">{{user.description}}</textarea>

\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<br><br>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Update</button>
\t\t\t\t\t\t\t\t\t\t&nbsp;&nbsp;
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\">Cancel</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"Account\">
\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t<div class=\"body\">
\t\t\t\t\t\t\t\t\t<div class=\"row clearfix\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-12 col-md-12\">
\t\t\t\t\t\t\t\t\t\t\t<h6>Account Data</h6>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" value=\"ChandlerBing\" disabled=\"\" placeholder=\"Username\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" value=\"Chandler.info@yourdomain.com\" placeholder=\"Email\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Phone Number\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-12 col-md-12\">
\t\t\t\t\t\t\t\t\t\t\t<h6>Change Password</h6>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" placeholder=\"Current Password\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" placeholder=\"New Password\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" placeholder=\"Confirm New Password\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary\">Update</button>
\t\t\t\t\t\t\t\t\t&nbsp;&nbsp;
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-default\">Cancel</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"General\">
\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t<div class=\"body\">
\t\t\t\t\t\t\t\t\t<h6>General Information</h6>
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-12 col-md-12\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Phone Number\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<option>--Select Language</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"en_US\" lang=\"en\">English (United States)</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"ar\" lang=\"ar\">العربية</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"ary\" lang=\"ar\">العربية المغربية</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"az\" lang=\"az\">Azərbaycan dili</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"azb\" lang=\"az\">گؤنئی آذربایجان</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"bel\" lang=\"be\">Беларуская мова</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"bg_BG\" lang=\"bg\">Български</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"bn_BD\" lang=\"bn\">বাংলা</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"bs_BA\" lang=\"bs\">Bosanski</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"ca\" lang=\"ca\">Català</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"ceb\" lang=\"ceb\">Cebuano</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"cs_CZ\" lang=\"cs\">Čeština‎</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"cy\" lang=\"cy\">Cymraeg</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"da_DK\" lang=\"da\">Dansk</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"de_CH_informal\" lang=\"de\">Deutsch (Schweiz, Du)</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"de_CH\" lang=\"de\">Deutsch (Schweiz)</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"de_DE\" lang=\"de\">Deutsch</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"de_DE_formal\" lang=\"de\">Deutsch (Sie)</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"el\" lang=\"el\">Ελληνικά</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"en_GB\" lang=\"en\">English (UK)</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"en_AU\" lang=\"en\">English (Australia)</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"en_ZA\" lang=\"en\">English (South Africa)</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"en_NZ\" lang=\"en\">English (New Zealand)</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"en_CA\" lang=\"en\">English (Canada)</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"eo\" lang=\"eo\">Esperanto</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"es_CL\" lang=\"es\">Español de Chile</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"es_MX\" lang=\"es\">Español de México</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"es_GT\" lang=\"es\">Español de Guatemala</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"es_AR\" lang=\"es\">Español de Argentina</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"es_ES\" lang=\"es\">Español</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"es_PE\" lang=\"es\">Español de Perú</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"es_CO\" lang=\"es\">Español de Colombia</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"es_VE\" lang=\"es\">Español de Venezuela</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"et\" lang=\"et\">Eesti</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"eu\" lang=\"eu\">Euskara</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"fa_IR\" lang=\"fa\">فارسی</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"fi\" lang=\"fi\">Suomi</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"fr_FR\" lang=\"fr\">Français</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"fr_CA\" lang=\"fr\">Français du Canada</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"fr_BE\" lang=\"fr\">Français de Belgique</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"gd\" lang=\"gd\">Gàidhlig</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"gl_ES\" lang=\"gl\">Galego</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"haz\" lang=\"haz\">هزاره گی</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"he_IL\" lang=\"he\">עִבְרִית</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"hi_IN\" lang=\"hi\">हिन्दी</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"hr\" lang=\"hr\">Hrvatski</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"hu_HU\" lang=\"hu\">Magyar</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"hy\" lang=\"hy\">Հայերեն</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"id_ID\" lang=\"id\">Bahasa Indonesia</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"is_IS\" lang=\"is\">Íslenska</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"it_IT\" lang=\"it\">Italiano</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"ja\" lang=\"ja\">日本語</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"ka_GE\" lang=\"ka\">ქართული</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"ko_KR\" lang=\"ko\">한국어</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"lt_LT\" lang=\"lt\">Lietuvių kalba</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"mk_MK\" lang=\"mk\">Македонски јазик</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"mr\" lang=\"mr\">मराठी</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"ms_MY\" lang=\"ms\">Bahasa Melayu</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"my_MM\" lang=\"my\">ဗမာစာ</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"nb_NO\" lang=\"nb\">Norsk bokmål</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"nl_NL\" lang=\"nl\">Nederlands</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"nl_NL_formal\" lang=\"nl\">Nederlands (Formeel)</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"nn_NO\" lang=\"nn\">Norsk nynorsk</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"oci\" lang=\"oc\">Occitan</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"pl_PL\" lang=\"pl\">Polski</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"ps\" lang=\"ps\">پښتو</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"pt_BR\" lang=\"pt\">Português do Brasil</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"pt_PT\" lang=\"pt\">Português</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"ro_RO\" lang=\"ro\">Română</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"ru_RU\" lang=\"ru\">Русский</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"sk_SK\" lang=\"sk\">Slovenčina</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"sl_SI\" lang=\"sl\">Slovenščina</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"sq\" lang=\"sq\">Shqip</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"sr_RS\" lang=\"sr\">Српски језик</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"sv_SE\" lang=\"sv\">Svenska</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"th\" lang=\"th\">ไทย</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"tl\" lang=\"tl\">Tagalog</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"tr_TR\" lang=\"tr\">Türkçe</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"ug_CN\" lang=\"ug\">Uyƣurqə</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"uk\" lang=\"uk\">Українська</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"vi\" lang=\"vi\">Tiếng Việt</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"zh_CN\" lang=\"zh\">简体中文</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"zh_TW\" lang=\"zh\">繁體中文</option>
\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<option>--TimeZone--</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<optgroup label=\"Africa\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Abidjan\">Abidjan</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Accra\">Accra</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Addis_Ababa\">Addis Ababa</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Algiers\">Algiers</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Asmara\">Asmara</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Bamako\">Bamako</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Bangui\">Bangui</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Banjul\">Banjul</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Bissau\">Bissau</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Blantyre\">Blantyre</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Brazzaville\">Brazzaville</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Bujumbura\">Bujumbura</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Cairo\">Cairo</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Casablanca\">Casablanca</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Ceuta\">Ceuta</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Conakry\">Conakry</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Dakar\">Dakar</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Dar_es_Salaam\">Dar es Salaam</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Djibouti\">Djibouti</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Douala\">Douala</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/El_Aaiun\">El Aaiun</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Freetown\">Freetown</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Gaborone\">Gaborone</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Harare\">Harare</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Johannesburg\">Johannesburg</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Juba\">Juba</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Kampala\">Kampala</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Khartoum\">Khartoum</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Kigali\">Kigali</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Kinshasa\">Kinshasa</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Lagos\">Lagos</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Libreville\">Libreville</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Lome\">Lome</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Luanda\">Luanda</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Lubumbashi\">Lubumbashi</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Lusaka\">Lusaka</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Malabo\">Malabo</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Maputo\">Maputo</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Maseru\">Maseru</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Mbabane\">Mbabane</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Mogadishu\">Mogadishu</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Monrovia\">Monrovia</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Nairobi\">Nairobi</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Ndjamena\">Ndjamena</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Niamey\">Niamey</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Nouakchott\">Nouakchott</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Ouagadougou\">Ouagadougou</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Porto-Novo\">Porto-Novo</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Sao_Tome\">Sao Tome</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Tripoli\">Tripoli</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Tunis\">Tunis</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Windhoek\">Windhoek</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t\t\t\t\t\t<optgroup label=\"America\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Adak\">Adak</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Anchorage\">Anchorage</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Anguilla\">Anguilla</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Antigua\">Antigua</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Araguaina\">Araguaina</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Argentina/Buenos_Aires\">Argentina - Buenos Aires</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Argentina/Catamarca\">Argentina - Catamarca</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Argentina/Cordoba\">Argentina - Cordoba</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Argentina/Jujuy\">Argentina - Jujuy</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Argentina/La_Rioja\">Argentina - La Rioja</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Argentina/Mendoza\">Argentina - Mendoza</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Argentina/Rio_Gallegos\">Argentina - Rio Gallegos</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Argentina/Salta\">Argentina - Salta</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Argentina/San_Juan\">Argentina - San Juan</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Argentina/San_Luis\">Argentina - San Luis</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Argentina/Tucuman\">Argentina - Tucuman</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Argentina/Ushuaia\">Argentina - Ushuaia</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Aruba\">Aruba</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Asuncion\">Asuncion</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Atikokan\">Atikokan</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Bahia\">Bahia</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Bahia_Banderas\">Bahia Banderas</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Barbados\">Barbados</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Belem\">Belem</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Belize\">Belize</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Blanc-Sablon\">Blanc-Sablon</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Boa_Vista\">Boa Vista</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Bogota\">Bogota</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Boise\">Boise</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Cambridge_Bay\">Cambridge Bay</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Campo_Grande\">Campo Grande</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Cancun\">Cancun</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Caracas\">Caracas</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Cayenne\">Cayenne</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Cayman\">Cayman</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Chicago\">Chicago</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Chihuahua\">Chihuahua</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Costa_Rica\">Costa Rica</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Creston\">Creston</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Cuiaba\">Cuiaba</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Curacao\">Curacao</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Danmarkshavn\">Danmarkshavn</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Dawson\">Dawson</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Dawson_Creek\">Dawson Creek</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Denver\">Denver</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Detroit\">Detroit</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Dominica\">Dominica</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Edmonton\">Edmonton</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Eirunepe\">Eirunepe</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/El_Salvador\">El Salvador</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Fortaleza\">Fortaleza</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Glace_Bay\">Glace Bay</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Godthab\">Godthab</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Goose_Bay\">Goose Bay</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Grand_Turk\">Grand Turk</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Grenada\">Grenada</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Guadeloupe\">Guadeloupe</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Guatemala\">Guatemala</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Guayaquil\">Guayaquil</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Guyana\">Guyana</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Halifax\">Halifax</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Havana\">Havana</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Hermosillo\">Hermosillo</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Indiana/Indianapolis\">Indiana - Indianapolis</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Indiana/Knox\">Indiana - Knox</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Indiana/Marengo\">Indiana - Marengo</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Indiana/Petersburg\">Indiana - Petersburg</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Indiana/Tell_City\">Indiana - Tell City</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Indiana/Vevay\">Indiana - Vevay</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Indiana/Vincennes\">Indiana - Vincennes</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Indiana/Winamac\">Indiana - Winamac</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Inuvik\">Inuvik</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Iqaluit\">Iqaluit</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Jamaica\">Jamaica</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Juneau\">Juneau</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Kentucky/Louisville\">Kentucky - Louisville</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Kentucky/Monticello\">Kentucky - Monticello</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Kralendijk\">Kralendijk</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/La_Paz\">La Paz</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Lima\">Lima</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Los_Angeles\">Los Angeles</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Lower_Princes\">Lower Princes</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Maceio\">Maceio</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Managua\">Managua</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Manaus\">Manaus</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Marigot\">Marigot</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Martinique\">Martinique</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Matamoros\">Matamoros</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Mazatlan\">Mazatlan</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Menominee\">Menominee</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Merida\">Merida</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Metlakatla\">Metlakatla</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Mexico_City\">Mexico City</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Miquelon\">Miquelon</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Moncton\">Moncton</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Monterrey\">Monterrey</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Montevideo\">Montevideo</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Montserrat\">Montserrat</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Nassau\">Nassau</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/New_York\">New York</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Nipigon\">Nipigon</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Nome\">Nome</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Noronha\">Noronha</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/North_Dakota/Beulah\">North Dakota - Beulah</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/North_Dakota/Center\">North Dakota - Center</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/North_Dakota/New_Salem\">North Dakota - New Salem</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Ojinaga\">Ojinaga</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Panama\">Panama</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Pangnirtung\">Pangnirtung</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Paramaribo\">Paramaribo</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Phoenix\">Phoenix</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Port-au-Prince\">Port-au-Prince</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Port_of_Spain\">Port of Spain</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Porto_Velho\">Porto Velho</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Puerto_Rico\">Puerto Rico</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Rainy_River\">Rainy River</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Rankin_Inlet\">Rankin Inlet</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Recife\">Recife</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Regina\">Regina</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Resolute\">Resolute</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Rio_Branco\">Rio Branco</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Santa_Isabel\">Santa Isabel</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Santarem\">Santarem</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Santiago\">Santiago</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Santo_Domingo\">Santo Domingo</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Sao_Paulo\">Sao Paulo</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Scoresbysund\">Scoresbysund</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Sitka\">Sitka</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/St_Barthelemy\">St Barthelemy</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/St_Johns\">St Johns</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/St_Kitts\">St Kitts</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/St_Lucia\">St Lucia</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/St_Bing\">St Bing</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/St_Vincent\">St Vincent</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Swift_Current\">Swift Current</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Tegucigalpa\">Tegucigalpa</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Thule\">Thule</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Thunder_Bay\">Thunder Bay</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Tijuana\">Tijuana</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Toronto\">Toronto</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Tortola\">Tortola</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Vancouver\">Vancouver</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Whitehorse\">Whitehorse</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Winnipeg\">Winnipeg</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Yakutat\">Yakutat</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Yellowknife\">Yellowknife</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t\t\t\t\t\t<optgroup label=\"Antarctica\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Antarctica/Casey\">Casey</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Antarctica/Davis\">Davis</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Antarctica/DumontDUrville\">DumontDUrville</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Antarctica/Macquarie\">Macquarie</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Antarctica/Mawson\">Mawson</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Antarctica/McMurdo\">McMurdo</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Antarctica/Palmer\">Palmer</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Antarctica/Rothera\">Rothera</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Antarctica/Syowa\">Syowa</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Antarctica/Troll\">Troll</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Antarctica/Vostok\">Vostok</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t\t\t\t\t\t<optgroup label=\"Arctic\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Arctic/Longyearbyen\">Longyearbyen</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t\t\t\t\t\t<optgroup label=\"Asia\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Aden\">Aden</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Almaty\">Almaty</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Amman\">Amman</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Anadyr\">Anadyr</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Aqtau\">Aqtau</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Aqtobe\">Aqtobe</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Ashgabat\">Ashgabat</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Baghdad\">Baghdad</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Bahrain\">Bahrain</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Baku\">Baku</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Bangkok\">Bangkok</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Beirut\">Beirut</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Bishkek\">Bishkek</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Brunei\">Brunei</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Chita\">Chita</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Choibalsan\">Choibalsan</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Colombo\">Colombo</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Damascus\">Damascus</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Dhaka\">Dhaka</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Dili\">Dili</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Dubai\">Dubai</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Dushanbe\">Dushanbe</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Gaza\">Gaza</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Hebron\">Hebron</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Ho_Chi_Minh\">Ho Chi Minh</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Hong_Kong\">Hong Kong</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Hovd\">Hovd</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Irkutsk\">Irkutsk</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Jakarta\">Jakarta</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Jayapura\">Jayapura</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Jerusalem\">Jerusalem</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Kabul\">Kabul</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Kamchatka\">Kamchatka</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Karachi\">Karachi</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Kathmandu\">Kathmandu</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Khandyga\">Khandyga</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Kolkata\">Kolkata</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Krasnoyarsk\">Krasnoyarsk</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Kuala_Lumpur\">Kuala Lumpur</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Kuching\">Kuching</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Kuwait\">Kuwait</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Macau\">Macau</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Magadan\">Magadan</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Makassar\">Makassar</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Manila\">Manila</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Muscat\">Muscat</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Nicosia\">Nicosia</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Novokuznetsk\">Novokuznetsk</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Novosibirsk\">Novosibirsk</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Omsk\">Omsk</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Oral\">Oral</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Phnom_Penh\">Phnom Penh</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Pontianak\">Pontianak</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Pyongyang\">Pyongyang</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Qatar\">Qatar</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Qyzylorda\">Qyzylorda</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Rangoon\">Rangoon</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Riyadh\">Riyadh</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Sakhalin\">Sakhalin</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Samarkand\">Samarkand</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Seoul\">Seoul</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Shanghai\">Shanghai</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Singapore\">Singapore</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Srednekolymsk\">Srednekolymsk</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Taipei\">Taipei</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Tashkent\">Tashkent</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Tbilisi\">Tbilisi</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Tehran\">Tehran</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Thimphu\">Thimphu</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Tokyo\">Tokyo</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Ulaanbaatar\">Ulaanbaatar</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Urumqi\">Urumqi</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Ust-Nera\">Ust-Nera</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Vientiane\">Vientiane</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Vladivostok\">Vladivostok</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Yakutsk\">Yakutsk</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Yekaterinburg\">Yekaterinburg</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Yerevan\">Yerevan</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t\t\t\t\t\t<optgroup label=\"Atlantic\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Atlantic/Azores\">Azores</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Atlantic/Bermuda\">Bermuda</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Atlantic/Canary\">Canary</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Atlantic/Cape_Verde\">Cape Verde</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Atlantic/Faroe\">Faroe</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Atlantic/Madeira\">Madeira</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Atlantic/Reykjavik\">Reykjavik</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Atlantic/South_Georgia\">South Georgia</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Atlantic/Stanley\">Stanley</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Atlantic/St_Helena\">St Helena</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t\t\t\t\t\t<optgroup label=\"Australia\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Australia/Adelaide\">Adelaide</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Australia/Brisbane\">Brisbane</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Australia/Broken_Hill\">Broken Hill</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Australia/Currie\">Currie</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Australia/Darwin\">Darwin</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Australia/Eucla\">Eucla</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Australia/Hobart\">Hobart</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Australia/Lindeman\">Lindeman</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Australia/Lord_Howe\">Lord Howe</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Australia/Melbourne\">Melbourne</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Australia/Perth\">Perth</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Australia/Sydney\">Sydney</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t\t\t\t\t\t<optgroup label=\"Europe\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Amsterdam\">Amsterdam</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Andorra\">Andorra</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Athens\">Athens</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Belgrade\">Belgrade</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Berlin\">Berlin</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Bratislava\">Bratislava</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Brussels\">Brussels</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Bucharest\">Bucharest</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Budapest\">Budapest</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Busingen\">Busingen</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Chisinau\">Chisinau</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Copenhagen\">Copenhagen</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Dublin\">Dublin</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Gibraltar\">Gibraltar</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Guernsey\">Guernsey</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Helsinki\">Helsinki</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Isle_of_Man\">Isle of Man</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Istanbul\">Istanbul</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Jersey\">Jersey</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Kaliningrad\">Kaliningrad</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Kiev\">Kiev</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Lisbon\">Lisbon</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Ljubljana\">Ljubljana</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/London\">London</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Luxembourg\">Luxembourg</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Madrid\">Madrid</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Malta\">Malta</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Mariehamn\">Mariehamn</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Minsk\">Minsk</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Monaco\">Monaco</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Moscow\">Moscow</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Oslo\">Oslo</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Paris\">Paris</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Podgorica\">Podgorica</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Prague\">Prague</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Riga\">Riga</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Rome\">Rome</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Samara\">Samara</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/San_Marino\">San Marino</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Sarajevo\">Sarajevo</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Simferopol\">Simferopol</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Skopje\">Skopje</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Sofia\">Sofia</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Stockholm\">Stockholm</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Tallinn\">Tallinn</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Tirane\">Tirane</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Uzhgorod\">Uzhgorod</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Vaduz\">Vaduz</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Vatican\">Vatican</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Vienna\">Vienna</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Vilnius\">Vilnius</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Volgograd\">Volgograd</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Warsaw\">Warsaw</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Zagreb\">Zagreb</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Zaporozhye\">Zaporozhye</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Zurich\">Zurich</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t\t\t\t\t\t<optgroup label=\"Indian\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Indian/Antananarivo\">Antananarivo</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Indian/Chagos\">Chagos</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Indian/Christmas\">Christmas</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Indian/Cocos\">Cocos</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Indian/Comoro\">Comoro</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Indian/Kerguelen\">Kerguelen</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Indian/Mahe\">Mahe</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Indian/Maldives\">Maldives</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Indian/Mauritius\">Mauritius</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Indian/Mayotte\">Mayotte</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Indian/Reunion\">Reunion</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t\t\t\t\t\t<optgroup label=\"Pacific\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Apia\">Apia</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Auckland\">Auckland</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Chatham\">Chatham</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Chuuk\">Chuuk</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Easter\">Easter</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Efate\">Efate</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Enderbury\">Enderbury</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Fakaofo\">Fakaofo</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Fiji\">Fiji</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Funafuti\">Funafuti</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Galapagos\">Galapagos</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Gambier\">Gambier</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Guadalcanal\">Guadalcanal</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Guam\">Guam</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Honolulu\">Honolulu</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Johnston\">Johnston</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Kiritimati\">Kiritimati</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Kosrae\">Kosrae</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Kwajalein\">Kwajalein</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Majuro\">Majuro</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Marquesas\">Marquesas</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Midway\">Midway</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Nauru\">Nauru</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Niue\">Niue</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Norfolk\">Norfolk</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Noumea\">Noumea</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Pago_Pago\">Pago Pago</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Palau\">Palau</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Pitcairn\">Pitcairn</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Pohnpei\">Pohnpei</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Port_Moresby\">Port Moresby</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Rarotonga\">Rarotonga</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Saipan\">Saipan</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Tahiti\">Tahiti</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Tarawa\">Tarawa</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Tongatapu\">Tongatapu</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Wake\">Wake</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Wallis\">Wallis</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t\t\t\t\t\t<optgroup label=\"UTC\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"UTC\">UTC</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t\t\t\t\t\t<optgroup label=\"Manual Offsets\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"UTC-12\">UTC-12</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"UTC-11.5\">UTC-11:30</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"UTC-11\">UTC-11</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"UTC-10.5\">UTC-10:30</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"UTC-10\">UTC-10</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"UTC-9.5\">UTC-9:30</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"UTC-9\">UTC-9</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"UTC-8.5\">UTC-8:30</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"UTC-8\">UTC-8</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"UTC-7.5\">UTC-7:30</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"UTC-7\">UTC-7</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"UTC-6.5\">UTC-6:30</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"UTC-6\">UTC-6</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"UTC-5.5\">UTC-5:30</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option selected=\"selected\" value=\"UTC-5\">UTC-5</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"UTC-4.5\">UTC-4:30</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"UTC-4\">UTC-4</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"UTC-3.5\">UTC-3:30</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"UTC-3\">UTC-3</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"UTC-2.5\">UTC-2:30</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"UTC-2\">UTC-2</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"UTC-1.5\">UTC-1:30</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"UTC-1\">UTC-1</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"UTC-0.5\">UTC-0:30</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"UTC+0\">UTC+0</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"UTC+0.5\">UTC+0:30</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"UTC+1\">UTC+1</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"UTC+1.5\">UTC+1:30</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"UTC+2\">UTC+2</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"UTC+2.5\">UTC+2:30</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"UTC+3\">UTC+3</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"UTC+3.5\">UTC+3:30</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"UTC+4\">UTC+4</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"UTC+4.5\">UTC+4:30</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"UTC+5\">UTC+5</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"UTC+5.5\">UTC+5:30</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"UTC+5.75\">UTC+5:45</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"UTC+6\">UTC+6</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"UTC+6.5\">UTC+6:30</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"UTC+7\">UTC+7</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"UTC+7.5\">UTC+7:30</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"UTC+8\">UTC+8</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"UTC+8.5\">UTC+8:30</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"UTC+8.75\">UTC+8:45</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"UTC+9\">UTC+9</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"UTC+9.5\">UTC+9:30</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"UTC+10\">UTC+10</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"UTC+10.5\">UTC+10:30</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"UTC+11\">UTC+11</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"UTC+11.5\">UTC+11:30</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"UTC+12\">UTC+12</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"UTC+12.75\">UTC+12:45</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"UTC+13\">UTC+13</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"UTC+13.75\">UTC+13:45</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"UTC+14\">UTC+14</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label>Date Format</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fancy-radio\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label><input name=\"dateFormat\" value=\"\" type=\"radio\"><span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i></i>May 18, 2018</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</label>&nbsp;&nbsp;
\t\t\t\t\t\t\t\t\t\t\t\t\t<label><input name=\"dateFormat\" value=\"\" type=\"radio\"><span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i></i>2018, May, 18</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</label>&nbsp;&nbsp;
\t\t\t\t\t\t\t\t\t\t\t\t\t<label><input name=\"dateFormat\" value=\"\" type=\"radio\" checked=\"\"><span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i></i>2018-03-10</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</label>&nbsp;&nbsp;
\t\t\t\t\t\t\t\t\t\t\t\t\t<label><input name=\"dateFormat\" value=\"\" type=\"radio\"><span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i></i>02/09/2018</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</label>&nbsp;&nbsp;
\t\t\t\t\t\t\t\t\t\t\t\t\t<label><input name=\"dateFormat\" value=\"\" type=\"radio\"><span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i></i>10/05/2018</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-12 col-md-12\">
\t\t\t\t\t\t\t\t\t\t\t<h6>Email from Lucid</h6>
\t\t\t\t\t\t\t\t\t\t\t<p>I'd like to receive the following emails:</p>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-unstyled list-email-received\">
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"fancy-checkbox\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" checked=\"\"><span>Weekly account summary</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"fancy-checkbox\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\"><span>Campaign reports</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"fancy-checkbox\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" checked=\"\"><span>Promotional news such as offers or discounts</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"fancy-checkbox\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" checked=\"\"><span>Tips for campaign setup, growth and client success stories</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary\">Update</button>
\t\t\t\t\t\t\t\t\t&nbsp;&nbsp;
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-default\">Cancel</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>


\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

{% endblock %}
", "ClientBundle:Default:index.html.twig", "C:\\laragon\\www\\myapp\\src\\ClientBundle/Resources/views/Default/index.html.twig");
    }
}
