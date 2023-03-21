<?php

/* AppBundle:Login:index.html.twig */
class __TwigTemplate_d1f5661aeb24f3ad5c7ad4618181a27b9a2643cce81e26fb63cedb0826e7e781 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Login:index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Login:index.html.twig"));

        // line 1
        echo "<!doctype html>
<html
\tlang=\"en\">


\t<!-- Mirrored from www.wrraptheme.com/templates/lucid/hospital/light/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Mar 2019 14:44:42 GMT -->
\t<head>
\t\t<title>Interface insciption</title>
\t\t<meta charset=\"utf-8\">
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=Edge\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0\">
\t\t<meta name=\"description\" content=\"Lucid Bootstrap 4.1.1 Admin Template\">
\t\t<meta name=\"author\" content=\"WrapTheme, design by: ThemeMakker.com\">

\t\t<link
\t\trel=\"icon\" href=\"favicon.ico\" type=\"image/x-icon\">
\t\t<!-- VENDOR CSS -->
\t\t<link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
\t\t<link
\t\trel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendor/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\">

\t\t<!-- MAIN CSS -->
\t\t<link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/main.css"), "html", null, true);
        echo "\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/color_skins.css"), "html", null, true);
        echo "\">
\t</head>
\t<style type=\"text/css\" media=\"screen\">
\t\t.auth-main::before {
\t\t\tcontent: '';
\t\t\tposition: absolute;
\t\t\tleft: 0;
\t\t\ttop: 0;
\t\t\twidth: 400px;
\t\t\theight: 100%;
\t\t\tz-index: -1;
\t\t\tbackground: #191f28 !important;
\t\t}

\t\tbody {
\t\t\tbackground-color: #ffffff !important;


\t\t}

\t\t.btn-primary {
\t\t\tcolor: #fff;
\t\t\tbackground-color: #131760;
\t\t\tborder-color: #131761;

\t\t}
\t</style>

\t<body
\t\tclass=\"theme-cyan\">
\t\t<!-- WRAPPER -->
\t\t<div id=\"wrapper\">
\t\t\t<div class=\"vertical-align-wrap\">
\t\t\t\t<div class=\"\">
\t\t\t\t\t<div class=\"auth-boxss\">
\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"top\">";
        // line 61
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card\">

\t\t\t\t\t\t\t<div class=\"body\">
\t\t\t\t\t\t\t\t<div class=\"row\">

\t\t\t\t\t\t\t\t\t<div class=\"col-lg-4\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t\t\t\t\t\t<br><br>
\t\t\t\t\t\t\t\t\t\t<br><br>

\t\t\t\t\t\t\t\t\t\t<center><img width=\"200\" src=\"https://femmesetrealites.com.tn/fr/wp-content/uploads/2017/04/poste-680x400.jpg\"></center>
\t\t\t\t\t\t\t\t\t\t<br><br>
\t\t\t\t\t\t\t\t\t\t<form class=\"form-auth-small\" action=\"";
        // line 74
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">


\t\t\t\t\t\t\t\t\t\t\t";
        // line 77
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 78
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"alert alert-danger\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div>";
            // line 80
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageKey", []), $this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageData", []), "security"), "html", null, true);
            echo "</div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 84
        echo "
\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"go_to\" value=\"redirectlogin\"/>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"back_to\" value=\"logindocteur\"/>

\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"/>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"signin-email\" class=\"control-label sr-only\">Login</label>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"signin-email\" name=\"_username\" type=\"text\" value=\"";
        // line 92
        echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
        echo "\" placeholder=\"Login\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"signin-password\" class=\"control-label sr-only\">Password</label>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" name=\"_password\" id=\"signin-password\" value=\"\" placeholder=\"Password\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"fancy-checkbox element-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Remember me</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary btn-lg btn-block\">LOGIN</button>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"bottom\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"helper-text m-b-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-lock\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Forgot password?</a>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span>Don't have an account?
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 111
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("insciption");
        echo "\">Register</a>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</form>


\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"col-lg-4\"><br><br><br>


\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- END WRAPPER -->
\t\t</body>
\t\t<!-- Mirrored from www.wrraptheme.com/templates/lucid/hospital/light/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Mar 2019 14:44:42 GMT -->
\t</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Login:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 111,  145 => 92,  138 => 88,  132 => 84,  125 => 80,  121 => 78,  119 => 77,  113 => 74,  98 => 61,  59 => 24,  55 => 23,  49 => 20,  44 => 18,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!doctype html>
<html
\tlang=\"en\">


\t<!-- Mirrored from www.wrraptheme.com/templates/lucid/hospital/light/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Mar 2019 14:44:42 GMT -->
\t<head>
\t\t<title>Interface insciption</title>
\t\t<meta charset=\"utf-8\">
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=Edge\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0\">
\t\t<meta name=\"description\" content=\"Lucid Bootstrap 4.1.1 Admin Template\">
\t\t<meta name=\"author\" content=\"WrapTheme, design by: ThemeMakker.com\">

\t\t<link
\t\trel=\"icon\" href=\"favicon.ico\" type=\"image/x-icon\">
\t\t<!-- VENDOR CSS -->
\t\t<link rel=\"stylesheet\" href=\"{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}\">
\t\t<link
\t\trel=\"stylesheet\" href=\"{{asset('assets/vendor/font-awesome/css/font-awesome.min.css')}}\">

\t\t<!-- MAIN CSS -->
\t\t<link rel=\"stylesheet\" href=\"{{asset('assets/css/main.css')}}\">
\t\t<link rel=\"stylesheet\" href=\"{{asset('assets/css/color_skins.css')}}\">
\t</head>
\t<style type=\"text/css\" media=\"screen\">
\t\t.auth-main::before {
\t\t\tcontent: '';
\t\t\tposition: absolute;
\t\t\tleft: 0;
\t\t\ttop: 0;
\t\t\twidth: 400px;
\t\t\theight: 100%;
\t\t\tz-index: -1;
\t\t\tbackground: #191f28 !important;
\t\t}

\t\tbody {
\t\t\tbackground-color: #ffffff !important;


\t\t}

\t\t.btn-primary {
\t\t\tcolor: #fff;
\t\t\tbackground-color: #131760;
\t\t\tborder-color: #131761;

\t\t}
\t</style>

\t<body
\t\tclass=\"theme-cyan\">
\t\t<!-- WRAPPER -->
\t\t<div id=\"wrapper\">
\t\t\t<div class=\"vertical-align-wrap\">
\t\t\t\t<div class=\"\">
\t\t\t\t\t<div class=\"auth-boxss\">
\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"top\">{#  <img src=\"https://www.ilae.org/img/logo.gif\" alt=\"Lucid\"> #}
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card\">

\t\t\t\t\t\t\t<div class=\"body\">
\t\t\t\t\t\t\t\t<div class=\"row\">

\t\t\t\t\t\t\t\t\t<div class=\"col-lg-4\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t\t\t\t\t\t<br><br>
\t\t\t\t\t\t\t\t\t\t<br><br>

\t\t\t\t\t\t\t\t\t\t<center><img width=\"200\" src=\"https://femmesetrealites.com.tn/fr/wp-content/uploads/2017/04/poste-680x400.jpg\"></center>
\t\t\t\t\t\t\t\t\t\t<br><br>
\t\t\t\t\t\t\t\t\t\t<form class=\"form-auth-small\" action=\"{{path('fos_user_security_check')}}\" method=\"post\">


\t\t\t\t\t\t\t\t\t\t\t{% if error %}
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"alert alert-danger\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"go_to\" value=\"redirectlogin\"/>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"back_to\" value=\"logindocteur\"/>

\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\"/>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"signin-email\" class=\"control-label sr-only\">Login</label>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"signin-email\" name=\"_username\" type=\"text\" value=\"{{ last_username }}\" placeholder=\"Login\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"signin-password\" class=\"control-label sr-only\">Password</label>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" name=\"_password\" id=\"signin-password\" value=\"\" placeholder=\"Password\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"fancy-checkbox element-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Remember me</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary btn-lg btn-block\">LOGIN</button>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"bottom\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"helper-text m-b-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-lock\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Forgot password?</a>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span>Don't have an account?
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{path('insciption')}}\">Register</a>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</form>


\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"col-lg-4\"><br><br><br>


\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- END WRAPPER -->
\t\t</body>
\t\t<!-- Mirrored from www.wrraptheme.com/templates/lucid/hospital/light/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Mar 2019 14:44:42 GMT -->
\t</body>
</html>
", "AppBundle:Login:index.html.twig", "C:\\laragon\\www\\myapp\\src\\AppBundle/Resources/views/Login/index.html.twig");
    }
}
