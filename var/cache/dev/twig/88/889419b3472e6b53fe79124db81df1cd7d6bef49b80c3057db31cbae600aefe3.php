<?php

/* AdminBundle:Default:clients.html.twig */
class __TwigTemplate_10e6b0ddc84fbb7265e5cccf767406f5dc203530dd31e052844135b78bf8b835 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminBundle:layouts:layouts.html.twig", "AdminBundle:Default:clients.html.twig", 1);
        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "AdminBundle:layouts:layouts.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Default:clients.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Default:clients.html.twig"));

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

    <div id=\"main-content\">
        <div class=\"container-fluid\">
            <div class=\"block-header\">
                <div class=\"row\">
                    <div class=\"col-lg-6 col-md-8 col-sm-12\">
                        <h2><a href=\"javascript:void(0);\" class=\"btn btn-xs btn-link btn-toggle-fullwidth\"><i class=\"fa fa-arrow-left\"></i></a> List of clients</h2>
                        <ul class=\"breadcrumb\">
                            <li class=\"breadcrumb-item\"><a href=\"index.html\"><i class=\"icon-home\"></i></a></li>                            
                            <li class=\"breadcrumb-item\">Dashbord</li>
                            <li class=\"breadcrumb-item active\">List of clients</li>
                        </ul>
                    </div>            
                    <div class=\"col-lg-6 col-md-4 col-sm-12 text-right\">
                       
                    </div>
                </div>
            </div>

            <div class=\"row clearfix\">
            \t                                        <div class=\"col-lg-12 col-md-12\">

<div class=\"tab-content padding-0\">

                        <div class=\"tab-pane active\" id=\"Basic\">
                            <div class=\"card\">
                                <div class=\"body\">
                               <div class=\"col-lg-12\">
                    <div class=\"card\">
                        <div class=\"header\">
                            <h2>List of clients
                             </h2>                            
                        </div>
                        <div class=\"body\">
                            <div class=\"table-responsive\">



                             ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "flashbag", []), "get", [0 => "delete"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 43
            echo "            <div class=\"alert alert-success\" role=\"alert\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\"><span aria-hidden=\"true\">x</span>
                    <span class=\"sr-only\">Close</span></button>
               ";
            // line 46
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "                                <table class=\"table table-hover js-basic-example dataTable table-custom\">
                                    <thead class=\"thead-dark\">
                                        <tr>
                                            <th>Photo</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>

                                             <th>Statut</th>
                                             <th>Delete</th>

                                          
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Photo</th>
                                           <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>

                                            <th>Statut</th>
                                                                                 <th>Delete</th>
        
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        ";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["clients"] ?? $this->getContext($context, "clients")));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 77
            if (($this->getAttribute($context["c"], "username", []) != "admin")) {
                // line 78
                echo "
                                        <tr>

                                            <td>




";
                // line 86
                if (($this->getAttribute($context["c"], "photo", []) != null)) {
                    // line 87
                    echo "
                <img width=\"80\" src=\"";
                    // line 88
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/clients/"), "html", null, true);
                    echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "photo", []), "html", null, true);
                    echo "\" class=\"rounded-circle user-photo\" alt=\"User Profile Picture\">

";
                } else {
                    // line 91
                    echo "


      <img width=\"80\" src=\"https://img.favpng.com/25/7/23/computer-icons-user-profile-avatar-image-png-favpng-LFqDyLRhe3PBXM0sx2LufsGFU.jpg\" class=\"rounded-circle user-photo\" alt=\"User Profile Picture\">

   ";
                }
                // line 96
                echo " 



                                            </td>
                                            <td>";
                // line 101
                echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "name", []), "html", null, true);
                echo "</td>
                                            <td>";
                // line 102
                echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "email", []), "html", null, true);
                echo "</td>
                                            <td>";
                // line 103
                echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "phone", []), "html", null, true);
                echo "</td>
 <td>


";
                // line 107
                if (($this->getAttribute($context["c"], "enabled", []) == 1)) {
                    // line 108
                    echo "

Activate <a class=\"btn btn-danger\" href=\"";
                    // line 110
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("desactiveruser", ["id" => $this->getAttribute($context["c"], "id", [])]), "html", null, true);
                    echo "\">Enabled</a>

";
                } else {
                    // line 113
                    echo "
Enabled  <a class=\"btn btn-success\" href=\"";
                    // line 114
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("activeruser", ["id" => $this->getAttribute($context["c"], "id", [])]), "html", null, true);
                    echo "\">Enabled</a>

";
                }
                // line 117
                echo "




</td>
                                               <td><a  data-toggle=\"modal\" data-target=\"#delete-close-modal";
                // line 123
                echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "id", []), "html", null, true);
                echo "\"><i class=\"fa fa-trash\"></i></a>





                                <div id=\"delete-close-modal";
                // line 129
                echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "id", []), "html", null, true);
                echo "\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\" style=\"display: none;\">
                                    <form action=\"";
                // line 130
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deleteuseradmin");
                echo "\" method=\"POST\">



                                        <div class=\"modal-dialog\">
                                            <div class=\"modal-content\">
                                                <div class=\"modal-header\">
                                                    <h4 class=\"modal-title\">

                                                        Delete user ?
                                                    </h4>
                                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
                                                </div>
                                                <div class=\"\">

                                                    <input type=\"hidden\" name=\"id\" value=\"";
                // line 145
                echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "id", []), "html", null, true);
                echo "\">

                                                    <div class=\"modal-footer\">
                                                        <button type=\"button\" class=\"btn btn-secondary waves-effect\" data-dismiss=\"modal\">Non</button>
                                                        <button type=\"submit\" class=\"btn btn-info waves-effect waves-light\">Oui</button>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>

                                    </form>
                                </div><!-- /.modal -->








                            </td>      

                                           
                                        </tr>

                                        ";
            }
            // line 173
            echo "                                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 174
        echo "                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                            </div>
                        </div>
                       
                       

                    </div>
                   

            </div>
        </div>
    </div>
</div>

\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Default:clients.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  292 => 174,  286 => 173,  255 => 145,  237 => 130,  233 => 129,  224 => 123,  216 => 117,  210 => 114,  207 => 113,  201 => 110,  197 => 108,  195 => 107,  188 => 103,  184 => 102,  180 => 101,  173 => 96,  165 => 91,  158 => 88,  155 => 87,  153 => 86,  143 => 78,  141 => 77,  137 => 76,  108 => 49,  99 => 46,  94 => 43,  90 => 42,  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends ('AdminBundle:layouts:layouts.html.twig') %}
{% block body %}


    <div id=\"main-content\">
        <div class=\"container-fluid\">
            <div class=\"block-header\">
                <div class=\"row\">
                    <div class=\"col-lg-6 col-md-8 col-sm-12\">
                        <h2><a href=\"javascript:void(0);\" class=\"btn btn-xs btn-link btn-toggle-fullwidth\"><i class=\"fa fa-arrow-left\"></i></a> List of clients</h2>
                        <ul class=\"breadcrumb\">
                            <li class=\"breadcrumb-item\"><a href=\"index.html\"><i class=\"icon-home\"></i></a></li>                            
                            <li class=\"breadcrumb-item\">Dashbord</li>
                            <li class=\"breadcrumb-item active\">List of clients</li>
                        </ul>
                    </div>            
                    <div class=\"col-lg-6 col-md-4 col-sm-12 text-right\">
                       
                    </div>
                </div>
            </div>

            <div class=\"row clearfix\">
            \t                                        <div class=\"col-lg-12 col-md-12\">

<div class=\"tab-content padding-0\">

                        <div class=\"tab-pane active\" id=\"Basic\">
                            <div class=\"card\">
                                <div class=\"body\">
                               <div class=\"col-lg-12\">
                    <div class=\"card\">
                        <div class=\"header\">
                            <h2>List of clients
                             </h2>                            
                        </div>
                        <div class=\"body\">
                            <div class=\"table-responsive\">



                             {% for flashMessage in app.session.flashbag.get('delete') %}
            <div class=\"alert alert-success\" role=\"alert\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\"><span aria-hidden=\"true\">x</span>
                    <span class=\"sr-only\">Close</span></button>
               {{ flashMessage }}
            </div>
        {% endfor %}
                                <table class=\"table table-hover js-basic-example dataTable table-custom\">
                                    <thead class=\"thead-dark\">
                                        <tr>
                                            <th>Photo</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>

                                             <th>Statut</th>
                                             <th>Delete</th>

                                          
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Photo</th>
                                           <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>

                                            <th>Statut</th>
                                                                                 <th>Delete</th>
        
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        {% for c in clients %}
{% if c.username != \"admin\" %}

                                        <tr>

                                            <td>




{% if c.photo != null %}

                <img width=\"80\" src=\"{{asset('uploads/clients/')}}{{c.photo}}\" class=\"rounded-circle user-photo\" alt=\"User Profile Picture\">

{% else %}



      <img width=\"80\" src=\"https://img.favpng.com/25/7/23/computer-icons-user-profile-avatar-image-png-favpng-LFqDyLRhe3PBXM0sx2LufsGFU.jpg\" class=\"rounded-circle user-photo\" alt=\"User Profile Picture\">

   {% endif %} 



                                            </td>
                                            <td>{{c.name}}</td>
                                            <td>{{c.email}}</td>
                                            <td>{{c.phone}}</td>
 <td>


{% if c.enabled == 1 %}


Activate <a class=\"btn btn-danger\" href=\"{{ path('desactiveruser', { 'id': c.id }) }}\">Enabled</a>

{% else %}

Enabled  <a class=\"btn btn-success\" href=\"{{ path('activeruser', { 'id': c.id }) }}\">Enabled</a>

{% endif %}





</td>
                                               <td><a  data-toggle=\"modal\" data-target=\"#delete-close-modal{{c.id}}\"><i class=\"fa fa-trash\"></i></a>





                                <div id=\"delete-close-modal{{c.id}}\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\" style=\"display: none;\">
                                    <form action=\"{{path('deleteuseradmin')}}\" method=\"POST\">



                                        <div class=\"modal-dialog\">
                                            <div class=\"modal-content\">
                                                <div class=\"modal-header\">
                                                    <h4 class=\"modal-title\">

                                                        Delete user ?
                                                    </h4>
                                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
                                                </div>
                                                <div class=\"\">

                                                    <input type=\"hidden\" name=\"id\" value=\"{{c.id}}\">

                                                    <div class=\"modal-footer\">
                                                        <button type=\"button\" class=\"btn btn-secondary waves-effect\" data-dismiss=\"modal\">Non</button>
                                                        <button type=\"submit\" class=\"btn btn-info waves-effect waves-light\">Oui</button>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>

                                    </form>
                                </div><!-- /.modal -->








                            </td>      

                                           
                                        </tr>

                                        {% endif %}
                                      {% endfor %}
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                            </div>
                        </div>
                       
                       

                    </div>
                   

            </div>
        </div>
    </div>
</div>

\t{% endblock %}
", "AdminBundle:Default:clients.html.twig", "C:\\wamp64\\www\\soumaya\\src\\AdminBundle/Resources/views/Default/clients.html.twig");
    }
}
