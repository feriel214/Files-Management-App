<?php

/* AppBundle:Login:insciption.html.twig */
class __TwigTemplate_ffca101eb0bd64be4be0c86ef4e359032be233efe607aa73037405c341f4e6fa extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Login:insciption.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Login:insciption.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"en\">


<!-- Mirrored from www.wrraptheme.com/templates/lucid/hospital/light/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Mar 2019 14:44:42 GMT -->
<head>
<title>Interface inscription</title>
<meta charset=\"utf-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=Edge\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0\">
<meta name=\"description\" content=\"Lucid Bootstrap 4.1.1 Admin Template\">
<meta name=\"author\" content=\"WrapTheme, design by: ThemeMakker.com\">

<link rel=\"icon\" href=\"favicon.ico\" type=\"image/x-icon\">
<!-- VENDOR CSS -->
<link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendor/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.min.css"), "html", null, true);
        echo "\">

<!-- MAIN CSS -->
<link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/main.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/color_skins.css"), "html", null, true);
        echo "\">
</head>
<style type=\"text/css\" media=\"screen\">
\t.auth-main::before {
    content: '';
    position: absolute;
    left: 0;
    top: 0;
    width: 400px;
    height: 100%;
    z-index: -1;
    background: #191f28 !important;
}
</style>

<body class=\"theme-cyan\">
\t<!-- WRAPPER -->
\t<div id=\"wrapper\">
\t\t<div class=\"vertical-align-wrap\">
\t\t\t<div class=\"vertical-align-middle auth-main\" >
\t\t\t\t<div class=\"auth-box\">
                    <div class=\"top\">
                       ";
        // line 45
        echo "                    </div>
\t\t\t\t\t<div class=\"card\">
                        <div class=\"header\">
                            <p class=\"lead\">Create an account</p>
                        </div>
                        <div class=\"body\">

                            ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "flashbag", []), "get", [0 => "adddoctor"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 53
            echo "            <div class=\"alert alert-success\" role=\"alert\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\"><span aria-hidden=\"true\">x</span>
                    <span class=\"sr-only\">Close</span></button>
               ";
            // line 56
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "


                            ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "flashbag", []), "get", [0 => "erraddarchi"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 63
            echo "            <div class=\"alert alert-danger\" role=\"alert\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\"><span aria-hidden=\"true\">x</span>
                    <span class=\"sr-only\">Close</span></button>
               ";
            // line 66
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "


                            <form class=\"form-auth-small\" action=\"";
        // line 72
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adddoctor");
        echo "\" method=\"post\">

                            \t  <div class=\"form-group\">
                                    <input required=\"\" type=\"text\" class=\"form-control\" id=\"signin-email\" name=\"name\" type=\"text\"
                                       placeholder=\"Name\">
                                </div>

                              <div class=\"form-group\">
                                    <label for=\"signin-email\" class=\"control-label sr-only\">Email</label>
                                    <input required=\"\" type=\"email\" class=\"form-control\" id=\"signin-email\" name=\"email\" type=\"text\"
                                       placeholder=\"Email\">
                                </div>


                                  <div class=\"form-group\">
                                    <input required=\"\" type=\"text\" class=\"form-control\" id=\"signin-email\" name=\"phone\" type=\"text\"
                                       placeholder=\"Phone\">
                                </div>
  <div class=\"form-group\">
                                                <div class=\"input-group\">
                                                    <div class=\"input-group-prepend\">
                                                        <span class=\"input-group-text\"><i class=\"icon-calendar\"></i></span>
                                                    </div>
                                                    <input required=\"\" name=\"birthdate\" data-provide=\"datepicker\" data-date-autoclose=\"true\" class=\"form-control\" placeholder=\"Birthdate\">
                                                </div>
                                            </div>

                                  <div class=\"form-group\">
            <select required=\"\" class=\"form-control\" name=\"pays\">
         <option value=\"\">-- Select Country --</option>

         ";
        // line 103
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pays"] ?? $this->getContext($context, "pays")));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 104
            echo "


        <option  value=\"";
            // line 107
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "nomFrFr", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "nomFrFr", []), "html", null, true);
            echo "</option>
                                                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        echo "                                                </select>
                                            </div>


                                   <div class=\"form-group\">
                                    <input required=\"\" type=\"text\" class=\"form-control\" id=\"signin-email\" name=\"country\" type=\"text\"
                                       placeholder=\"Country\">
                                </div>

<div class=\"form-group\">
                                    <input required=\"\" type=\"text\" class=\"form-control\" id=\"signin-email\" name=\"address\" type=\"text\"
                                       placeholder=\"Address\">
                                </div>


                                <div class=\"form-group\">
                                    <label for=\"signin-email\" class=\"control-label sr-only\">Login</label>
                                    <input required=\"\" type=\"text\" class=\"form-control\" id=\"signin-email\" name=\"username\" type=\"text\"
                                       placeholder=\"Login\">
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"signin-password\" class=\"control-label sr-only\">Password</label>
                                    <input required=\"\" type=\"password\" class=\"form-control\" name=\"password\" id=\"signin-password\" value=\"\" placeholder=\"Password\">
                                </div>
                               
                                <button type=\"submit\" class=\"btn btn-primary btn-lg btn-block\">Register</button>
                                <div class=\"bottom\">
                                    <span class=\"helper-text m-b-10\"><i class=\"fa fa-lock\"></i> <a href=\"#\">Forgot password?</a></span>
                                    <span>Already have an account? <a href=\"";
        // line 137
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logindocteur");
        echo "\">Login</a></span>
                                </div>
                            </form>
                        </div>
                    </div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- END WRAPPER -->
    <script src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/bundles/libscripts.bundle.js"), "html", null, true);
        echo "\"></script>    
<script src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/bundles/vendorscripts.bundle.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/bundles/mainscripts.bundle.js"), "html", null, true);
        echo "\"></script>


<script src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"), "html", null, true);
        echo "\"></script>
</body>

<!-- Mirrored from www.wrraptheme.com/templates/lucid/hospital/light/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Mar 2019 14:44:42 GMT -->
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Login:insciption.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  251 => 153,  245 => 150,  240 => 148,  236 => 147,  223 => 137,  193 => 109,  183 => 107,  178 => 104,  174 => 103,  140 => 72,  135 => 69,  126 => 66,  121 => 63,  117 => 62,  112 => 59,  103 => 56,  98 => 53,  94 => 52,  85 => 45,  60 => 22,  56 => 21,  50 => 18,  46 => 17,  42 => 16,  25 => 1,);
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
<html lang=\"en\">


<!-- Mirrored from www.wrraptheme.com/templates/lucid/hospital/light/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Mar 2019 14:44:42 GMT -->
<head>
<title>Interface inscription</title>
<meta charset=\"utf-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=Edge\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0\">
<meta name=\"description\" content=\"Lucid Bootstrap 4.1.1 Admin Template\">
<meta name=\"author\" content=\"WrapTheme, design by: ThemeMakker.com\">

<link rel=\"icon\" href=\"favicon.ico\" type=\"image/x-icon\">
<!-- VENDOR CSS -->
<link rel=\"stylesheet\" href=\"{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}\">
<link rel=\"stylesheet\" href=\"{{asset('assets/vendor/font-awesome/css/font-awesome.min.css')}}\">
<link rel=\"stylesheet\" href=\"{{asset('assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.min.css')}}\">

<!-- MAIN CSS -->
<link rel=\"stylesheet\" href=\"{{asset('assets/css/main.css')}}\">
<link rel=\"stylesheet\" href=\"{{asset('assets/css/color_skins.css')}}\">
</head>
<style type=\"text/css\" media=\"screen\">
\t.auth-main::before {
    content: '';
    position: absolute;
    left: 0;
    top: 0;
    width: 400px;
    height: 100%;
    z-index: -1;
    background: #191f28 !important;
}
</style>

<body class=\"theme-cyan\">
\t<!-- WRAPPER -->
\t<div id=\"wrapper\">
\t\t<div class=\"vertical-align-wrap\">
\t\t\t<div class=\"vertical-align-middle auth-main\" >
\t\t\t\t<div class=\"auth-box\">
                    <div class=\"top\">
                       {#  <img src=\"http://www.wrraptheme.com/templates/lucid/hospital/assets/images/logo-white.svg\" alt=\"Lucid\"> #}
                    </div>
\t\t\t\t\t<div class=\"card\">
                        <div class=\"header\">
                            <p class=\"lead\">Create an account</p>
                        </div>
                        <div class=\"body\">

                            {% for flashMessage in app.session.flashbag.get('adddoctor') %}
            <div class=\"alert alert-success\" role=\"alert\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\"><span aria-hidden=\"true\">x</span>
                    <span class=\"sr-only\">Close</span></button>
               {{ flashMessage }}
            </div>
        {% endfor %}



                            {% for flashMessage in app.session.flashbag.get('erraddarchi') %}
            <div class=\"alert alert-danger\" role=\"alert\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\"><span aria-hidden=\"true\">x</span>
                    <span class=\"sr-only\">Close</span></button>
               {{ flashMessage }}
            </div>
        {% endfor %}



                            <form class=\"form-auth-small\" action=\"{{path('adddoctor')}}\" method=\"post\">

                            \t  <div class=\"form-group\">
                                    <input required=\"\" type=\"text\" class=\"form-control\" id=\"signin-email\" name=\"name\" type=\"text\"
                                       placeholder=\"Name\">
                                </div>

                              <div class=\"form-group\">
                                    <label for=\"signin-email\" class=\"control-label sr-only\">Email</label>
                                    <input required=\"\" type=\"email\" class=\"form-control\" id=\"signin-email\" name=\"email\" type=\"text\"
                                       placeholder=\"Email\">
                                </div>


                                  <div class=\"form-group\">
                                    <input required=\"\" type=\"text\" class=\"form-control\" id=\"signin-email\" name=\"phone\" type=\"text\"
                                       placeholder=\"Phone\">
                                </div>
  <div class=\"form-group\">
                                                <div class=\"input-group\">
                                                    <div class=\"input-group-prepend\">
                                                        <span class=\"input-group-text\"><i class=\"icon-calendar\"></i></span>
                                                    </div>
                                                    <input required=\"\" name=\"birthdate\" data-provide=\"datepicker\" data-date-autoclose=\"true\" class=\"form-control\" placeholder=\"Birthdate\">
                                                </div>
                                            </div>

                                  <div class=\"form-group\">
            <select required=\"\" class=\"form-control\" name=\"pays\">
         <option value=\"\">-- Select Country --</option>

         {% for p in pays %}



        <option  value=\"{{p.nomFrFr}}\">{{p.nomFrFr}}</option>
                                                  {% endfor %}
                                                </select>
                                            </div>


                                   <div class=\"form-group\">
                                    <input required=\"\" type=\"text\" class=\"form-control\" id=\"signin-email\" name=\"country\" type=\"text\"
                                       placeholder=\"Country\">
                                </div>

<div class=\"form-group\">
                                    <input required=\"\" type=\"text\" class=\"form-control\" id=\"signin-email\" name=\"address\" type=\"text\"
                                       placeholder=\"Address\">
                                </div>


                                <div class=\"form-group\">
                                    <label for=\"signin-email\" class=\"control-label sr-only\">Login</label>
                                    <input required=\"\" type=\"text\" class=\"form-control\" id=\"signin-email\" name=\"username\" type=\"text\"
                                       placeholder=\"Login\">
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"signin-password\" class=\"control-label sr-only\">Password</label>
                                    <input required=\"\" type=\"password\" class=\"form-control\" name=\"password\" id=\"signin-password\" value=\"\" placeholder=\"Password\">
                                </div>
                               
                                <button type=\"submit\" class=\"btn btn-primary btn-lg btn-block\">Register</button>
                                <div class=\"bottom\">
                                    <span class=\"helper-text m-b-10\"><i class=\"fa fa-lock\"></i> <a href=\"#\">Forgot password?</a></span>
                                    <span>Already have an account? <a href=\"{{path('logindocteur')}}\">Login</a></span>
                                </div>
                            </form>
                        </div>
                    </div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- END WRAPPER -->
    <script src=\"{{asset('assets/bundles/libscripts.bundle.js')}}\"></script>    
<script src=\"{{asset('assets/bundles/vendorscripts.bundle.js')}}\"></script>

<script src=\"{{asset('assets/bundles/mainscripts.bundle.js')}}\"></script>


<script src=\"{{asset('assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}\"></script>
</body>

<!-- Mirrored from www.wrraptheme.com/templates/lucid/hospital/light/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Mar 2019 14:44:42 GMT -->
</html>
", "AppBundle:Login:insciption.html.twig", "C:\\wamp64\\www\\soumaya\\src\\AppBundle/Resources/views/Login/insciption.html.twig");
    }
}
