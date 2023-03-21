<?php

/* AppBundle:Login:getname.html.twig */
class __TwigTemplate_0c7b3ce5f5978458b198605a190014e270c91e832c017e40bee67ebdc8741b71 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Login:getname.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Login:getname.html.twig"));

        // line 1
        echo "<div class=\"user-account\">

<br>

";
        // line 5
        if (($this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "photo", []) != null)) {
            // line 6
            echo "
                <img style=\"width:150px\" src=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/clients/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "photo", []), "html", null, true);
            echo "\" class=\" user-photo\" alt=\"User Profile Picture\">

";
        } else {
            // line 10
            echo "


      <img src=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("user.jpg"), "html", null, true);
            echo "\" class=\"rounded-circle user-photo\" alt=\"User Profile Picture\">

   ";
        }
        // line 15
        echo " 



                <div class=\"dropdown\"  style=\"color:white;\" >
                    <span style=\"color:white\">Welcome,</span>
                    <a hr ef=\"javascript:void(0);\" class=\"dropdown-toggle user-name\" data-toggle=\"dropdown\"><strong> ";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "name", []), "html", null, true);
        echo "</strong></a>
                    <ul class=\"dropdown-menu dropdown-menu-right account\">
                       
                        <li><a href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\"><i class=\"icon-power\"></i>Logout</a></li>
                    </ul>
                </div>
                <hr>
                
            </div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Login:getname.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 24,  62 => 21,  54 => 15,  48 => 13,  43 => 10,  36 => 7,  33 => 6,  31 => 5,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"user-account\">

<br>

{% if user.photo != null %}

                <img style=\"width:150px\" src=\"{{asset('uploads/clients/')}}{{user.photo}}\" class=\" user-photo\" alt=\"User Profile Picture\">

{% else %}



      <img src=\"{{asset('user.jpg')}}\" class=\"rounded-circle user-photo\" alt=\"User Profile Picture\">

   {% endif %} 



                <div class=\"dropdown\"  style=\"color:white;\" >
                    <span style=\"color:white\">Welcome,</span>
                    <a hr ef=\"javascript:void(0);\" class=\"dropdown-toggle user-name\" data-toggle=\"dropdown\"><strong> {{user.name}}</strong></a>
                    <ul class=\"dropdown-menu dropdown-menu-right account\">
                       
                        <li><a href=\"{{path('fos_user_security_logout')}}\"><i class=\"icon-power\"></i>Logout</a></li>
                    </ul>
                </div>
                <hr>
                
            </div>", "AppBundle:Login:getname.html.twig", "C:\\wamp64\\www\\soumaya\\src\\AppBundle/Resources/views/Login/getname.html.twig");
    }
}
