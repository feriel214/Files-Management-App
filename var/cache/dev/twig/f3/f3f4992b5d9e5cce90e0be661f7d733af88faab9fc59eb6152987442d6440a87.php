<?php

/* ClientBundle:Default:myfiles.html.twig */
class __TwigTemplate_6c0b21ff87200afaac6fece06bf3baba2d7a1c73d21a365a991954e671f14c19 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ClientBundle:layouts:layouts.html.twig", "ClientBundle:Default:myfiles.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ClientBundle:Default:myfiles.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ClientBundle:Default:myfiles.html.twig"));

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
                        <h2><a href=\"javascript:void(0);\" class=\"btn btn-xs btn-link btn-toggle-fullwidth\"><i class=\"fa fa-arrow-left\"></i></a> My files</h2>
                        <ul class=\"breadcrumb\">
                            <li class=\"breadcrumb-item\"><a href=\"index.html\"><i class=\"icon-home\"></i></a></li>                            
                            <li class=\"breadcrumb-item\">Dashbord</li>
                            <li class=\"breadcrumb-item active\"> My files</li>
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
                            <h2>My files
                             </h2>                            
                        </div>
                        <div class=\"body\">

                             ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "flashbag", []), "get", [0 => "addfile"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 40
            echo "            <div class=\"alert alert-success\" role=\"alert\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\"><span aria-hidden=\"true\">x</span>
                    <span class=\"sr-only\">Close</span></button>
               ";
            // line 43
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "


                             ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "flashbag", []), "get", [0 => "delete"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 50
            echo "            <div class=\"alert alert-success\" role=\"alert\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\"><span aria-hidden=\"true\">x</span>
                    <span class=\"sr-only\">Close</span></button>
               ";
            // line 53
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "                            <div class=\"table-responsive\">
                                <table class=\"table table-hover js-basic-example dataTable table-custom\">
                                    <thead class=\"thead-dark\">
                                        <tr>
                                            <th>Id</th>
                                            <th>Title</th>
                                            <th>Description</th>
                                             <th>Date</th>
                                             <th>Files</th>
                                             <th>Delete</th>
                                          
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Id</th>
                                            <th>Title</th>
                                          <th>Description</th>  
                                             <th>Date</th>
                                             <th>files</th>
                                              <th>Delete</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        ";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["echnages"] ?? $this->getContext($context, "echnages")));
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 81
            echo "                                        <tr>




                                         <td>";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "id", []), "html", null, true);
            echo "</td>
                              <td>";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "titre", []), "html", null, true);
            echo "</td>
                              <td>";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "description", []), "html", null, true);
            echo "</td>

                               <td>";
            // line 90
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["e"], "createdat", []), "d-m-Y h:i"), "html", null, true);
            echo "</td>
                
                              <td><a target=\"_blank\" href=\"";
            // line 92
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "file", []), "html", null, true);
            echo "\">File</a> </td>   


                             <td><a  data-toggle=\"modal\" data-target=\"#delete-close-modal";
            // line 95
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "id", []), "html", null, true);
            echo "\"><i class=\"fa fa-trash\"></i></a>





                                <div id=\"delete-close-modal";
            // line 101
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "id", []), "html", null, true);
            echo "\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\" style=\"display: none;\">
                                    <form action=\"";
            // line 102
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deletefiles");
            echo "\" method=\"POST\">



                                        <div class=\"modal-dialog\">
                                            <div class=\"modal-content\">
                                                <div class=\"modal-header\">
                                                    <h4 class=\"modal-title\">

                                                        Delete file ?
                                                    </h4>
                                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
                                                </div>
                                                <div class=\"\">

                                                    <input type=\"hidden\" name=\"id\" value=\"";
            // line 117
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "id", []), "html", null, true);
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
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 143
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
        return "ClientBundle:Default:myfiles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  253 => 143,  221 => 117,  203 => 102,  199 => 101,  190 => 95,  183 => 92,  178 => 90,  173 => 88,  169 => 87,  165 => 86,  158 => 81,  154 => 80,  128 => 56,  119 => 53,  114 => 50,  110 => 49,  105 => 46,  96 => 43,  91 => 40,  87 => 39,  49 => 3,  40 => 2,  11 => 1,);
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


    <div id=\"main-content\">
        <div class=\"container-fluid\">
            <div class=\"block-header\">
                <div class=\"row\">
                    <div class=\"col-lg-6 col-md-8 col-sm-12\">
                        <h2><a href=\"javascript:void(0);\" class=\"btn btn-xs btn-link btn-toggle-fullwidth\"><i class=\"fa fa-arrow-left\"></i></a> My files</h2>
                        <ul class=\"breadcrumb\">
                            <li class=\"breadcrumb-item\"><a href=\"index.html\"><i class=\"icon-home\"></i></a></li>                            
                            <li class=\"breadcrumb-item\">Dashbord</li>
                            <li class=\"breadcrumb-item active\"> My files</li>
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
                            <h2>My files
                             </h2>                            
                        </div>
                        <div class=\"body\">

                             {% for flashMessage in app.session.flashbag.get('addfile') %}
            <div class=\"alert alert-success\" role=\"alert\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\"><span aria-hidden=\"true\">x</span>
                    <span class=\"sr-only\">Close</span></button>
               {{ flashMessage }}
            </div>
        {% endfor %}



                             {% for flashMessage in app.session.flashbag.get('delete') %}
            <div class=\"alert alert-success\" role=\"alert\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\"><span aria-hidden=\"true\">x</span>
                    <span class=\"sr-only\">Close</span></button>
               {{ flashMessage }}
            </div>
        {% endfor %}
                            <div class=\"table-responsive\">
                                <table class=\"table table-hover js-basic-example dataTable table-custom\">
                                    <thead class=\"thead-dark\">
                                        <tr>
                                            <th>Id</th>
                                            <th>Title</th>
                                            <th>Description</th>
                                             <th>Date</th>
                                             <th>Files</th>
                                             <th>Delete</th>
                                          
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Id</th>
                                            <th>Title</th>
                                          <th>Description</th>  
                                             <th>Date</th>
                                             <th>files</th>
                                              <th>Delete</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        {% for e in echnages %}
                                        <tr>




                                         <td>{{e.id}}</td>
                              <td>{{e.titre}}</td>
                              <td>{{e.description}}</td>

                               <td>{{ e.createdat|date(\"d-m-Y h:i\") }}</td>
                
                              <td><a target=\"_blank\" href=\"{{asset('uploads/')}}{{e.file}}\">File</a> </td>   


                             <td><a  data-toggle=\"modal\" data-target=\"#delete-close-modal{{e.id}}\"><i class=\"fa fa-trash\"></i></a>





                                <div id=\"delete-close-modal{{e.id}}\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\" style=\"display: none;\">
                                    <form action=\"{{path('deletefiles')}}\" method=\"POST\">



                                        <div class=\"modal-dialog\">
                                            <div class=\"modal-content\">
                                                <div class=\"modal-header\">
                                                    <h4 class=\"modal-title\">

                                                        Delete file ?
                                                    </h4>
                                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
                                                </div>
                                                <div class=\"\">

                                                    <input type=\"hidden\" name=\"id\" value=\"{{e.id}}\">

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
", "ClientBundle:Default:myfiles.html.twig", "C:\\wamp64\\www\\soumaya\\src\\ClientBundle/Resources/views/Default/myfiles.html.twig");
    }
}
