<?php

/* AdminBundle:Default:uploads.html.twig */
class __TwigTemplate_5d4991424878b74fb9577d44ed93716bed03c7651c80bc684b3a14962d679ff2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminBundle:layouts:layouts.html.twig", "AdminBundle:Default:uploads.html.twig", 1);
        $this->blocks = [
            'body' => [$this, 'block_body'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "AdminBundle:layouts:layouts.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Default:uploads.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Default:uploads.html.twig"));

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
                        <h2><a href=\"javascript:void(0);\" class=\"btn btn-xs btn-link btn-toggle-fullwidth\"><i class=\"fa fa-arrow-left\"></i></a> New sharing</h2>
                        <ul class=\"breadcrumb\">
                            <li class=\"breadcrumb-item\"><a href=\"index.html\"><i class=\"icon-home\"></i></a></li>                            
                            <li class=\"breadcrumb-item\">Dashbord</li>
                            <li class=\"breadcrumb-item active\">New sharing</li>
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







     ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "flashbag", []), "get", [0 => "erreurfiles"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 39
            echo "            <div class=\"alert alert-danger\" role=\"alert\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\"><span aria-hidden=\"true\">x</span>
                    <span class=\"sr-only\">Close</span></button>
               ";
            // line 42
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "

                                <form action=\"";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("uploadsfilesadmin");
        echo "\" id=\"\" method=\"POST\" enctype=\"multipart/form-data\">
                                    <div class=\"row clearfix\">
                                        <div class=\"col-lg-12 col-md-12\">

                                        \t




<style type=\"text/css\" media=\"screen\">
  .input-file { 
  position:relative; 
  overflow:hidden;  
  padding:0;
  display:block;
  max-width:100%;
  cursor:pointer;
}

.input-file .btn { 
  white-space:nowrap; 
  display:inline-block;
  margin-right:1em;
  vertical-align:top;
}

.input-file .material-icons {
  float:left;
  font-size:16px; 
  line-height:inherit;
  margin-right:4px;
}

.input-file ins { 
  white-space:nowrap; 
  display: block;
  max-width:100%; 
  overflow:hidden; 
  text-overflow:ellipsis; 
  font-size:12px;
}

.input-file:after {
  content:\"\"; 
  display:block; clear:both; 
} 

.input-file input { 
  width:0.1px; 
  height:0.1px;
  opacity:0;
  overflow:hidden;
  position:absolute; 
  top:-100px;
  z-index:-1; 
}
</style>




                                           
                            <div class=\"form-group\">
                                    <input type=\"text\" class=\"form-control\"  id=\"signin-email\" name=\"title\" required=\"\" type=\"text\"
                                       placeholder=\"Title\">
                                </div>

     
     <br>


                            <div class=\"form-group\">
                                    <input type=\"file\" class=\"form-control\"  id=\"signin-email\" name=\"fichier\" required=\"\" type=\"text\"
                                       placeholder=\"Title\">
                                </div>



                                 <br>
 <div class=\"form-group\">

    <textarea  class=\"form-control\" required=\"\"   placeholder=\"Description\" name=\"description\"></textarea>
                                    
                                </div>



 <div class=\"progress\">  
       <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\">

        <span class=\"pourcentage\">
       </span></div>
      </div>

      <br>
<div class=\"succ\">
      

</div>
      <br>
                                    <button type=\"submit\" class=\"btn btn-primary\">Send</button> &nbsp;&nbsp;
                                    <button type=\"button\" class=\"btn btn-default\">Cancel</button>
                                </div>
                            </form>
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

    // line 166
    public function block_js($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        // line 167
        echo "

<script src=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/bundles/libscripts.bundle.js"), "html", null, true);
        echo "\"></script>    
<script src=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/bundles/vendorscripts.bundle.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/bundles/mainscripts.bundle.js"), "html", null, true);
        echo "\"></script>

  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
  <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js\"></script>

  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.js\"></script>    


<script src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dropzone/assets/js/dropzone.min.js"), "html", null, true);
        echo "\"></script>

  <!-- Main JS file -->
  <script src=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dropzone/assets/js/scripts.js"), "html", null, true);
        echo "\"></script>
<script>
\$(document).ready(function(){
 \$('#uploadImage').submit(function(event){

  if(\$('#uploadFile').val())
  {
   event.preventDefault();
   \$('#loader-icon').show();
   \$('#targetLayer').hide();
   \$(this).ajaxSubmit({
    target: '#targetLayer',
    beforeSubmit:function(){
     \$('.progress-bar').width('2%');
    },
    uploadProgress: function(event, position, total, percentageComplete)
    {

        console.log(percentageComplete);

        \$('.pourcentage').html(''+percentageComplete+'  %');
\$('.progress-bar').css({ \"width\": ''+percentageComplete+'%'});

if(percentageComplete==100){
              \$('.succ').append('<div class=\"alert alert-success\" > <strong>Documents sent successfully!</strong> </div>');

}
  
    },
    successSubmit:function(){
alert('cc');
    },
    resetForm: true
   });
  }
  return false;
 });
});
</script>



<script>
//Optional code to show the file names

\$('.fileInput').change(function() {
  var numfiles = \$(this)[0].files.length;
  var parent = \$(this).closest('.input-file');
  parent.find('ins').remove();
  for (i = 0; i < numfiles; i++) { 
    parent.append('<ins>' + \$(this)[0].files[i].name + '</ins>')
  }
});

</script>



<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css'>
<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js'></script>
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js'></script>


<script type=\"text/javascript\">

</script>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Default:uploads.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  275 => 183,  269 => 180,  258 => 172,  253 => 170,  249 => 169,  245 => 167,  236 => 166,  109 => 47,  105 => 45,  96 => 42,  91 => 39,  87 => 38,  50 => 3,  41 => 2,  11 => 1,);
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
                        <h2><a href=\"javascript:void(0);\" class=\"btn btn-xs btn-link btn-toggle-fullwidth\"><i class=\"fa fa-arrow-left\"></i></a> New sharing</h2>
                        <ul class=\"breadcrumb\">
                            <li class=\"breadcrumb-item\"><a href=\"index.html\"><i class=\"icon-home\"></i></a></li>                            
                            <li class=\"breadcrumb-item\">Dashbord</li>
                            <li class=\"breadcrumb-item active\">New sharing</li>
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







     {% for flashMessage in app.session.flashbag.get('erreurfiles') %}
            <div class=\"alert alert-danger\" role=\"alert\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\"><span aria-hidden=\"true\">x</span>
                    <span class=\"sr-only\">Close</span></button>
               {{ flashMessage }}
            </div>
        {% endfor %}


                                <form action=\"{{path('uploadsfilesadmin')}}\" id=\"\" method=\"POST\" enctype=\"multipart/form-data\">
                                    <div class=\"row clearfix\">
                                        <div class=\"col-lg-12 col-md-12\">

                                        \t




<style type=\"text/css\" media=\"screen\">
  .input-file { 
  position:relative; 
  overflow:hidden;  
  padding:0;
  display:block;
  max-width:100%;
  cursor:pointer;
}

.input-file .btn { 
  white-space:nowrap; 
  display:inline-block;
  margin-right:1em;
  vertical-align:top;
}

.input-file .material-icons {
  float:left;
  font-size:16px; 
  line-height:inherit;
  margin-right:4px;
}

.input-file ins { 
  white-space:nowrap; 
  display: block;
  max-width:100%; 
  overflow:hidden; 
  text-overflow:ellipsis; 
  font-size:12px;
}

.input-file:after {
  content:\"\"; 
  display:block; clear:both; 
} 

.input-file input { 
  width:0.1px; 
  height:0.1px;
  opacity:0;
  overflow:hidden;
  position:absolute; 
  top:-100px;
  z-index:-1; 
}
</style>




                                           
                            <div class=\"form-group\">
                                    <input type=\"text\" class=\"form-control\"  id=\"signin-email\" name=\"title\" required=\"\" type=\"text\"
                                       placeholder=\"Title\">
                                </div>

     
     <br>


                            <div class=\"form-group\">
                                    <input type=\"file\" class=\"form-control\"  id=\"signin-email\" name=\"fichier\" required=\"\" type=\"text\"
                                       placeholder=\"Title\">
                                </div>



                                 <br>
 <div class=\"form-group\">

    <textarea  class=\"form-control\" required=\"\"   placeholder=\"Description\" name=\"description\"></textarea>
                                    
                                </div>



 <div class=\"progress\">  
       <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\">

        <span class=\"pourcentage\">
       </span></div>
      </div>

      <br>
<div class=\"succ\">
      

</div>
      <br>
                                    <button type=\"submit\" class=\"btn btn-primary\">Send</button> &nbsp;&nbsp;
                                    <button type=\"button\" class=\"btn btn-default\">Cancel</button>
                                </div>
                            </form>
                            </div>
                        </div>
                      

                    </div>
                   

            </div>
        </div>
    </div>
</div>

\t{% endblock %}


                {% block js %}


<script src=\"{{asset('assets/bundles/libscripts.bundle.js')}}\"></script>    
<script src=\"{{asset('assets/bundles/vendorscripts.bundle.js')}}\"></script>

<script src=\"{{asset('assets/bundles/mainscripts.bundle.js')}}\"></script>

  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
  <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js\"></script>

  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.js\"></script>    


<script src=\"{{asset('dropzone/assets/js/dropzone.min.js')}}\"></script>

  <!-- Main JS file -->
  <script src=\"{{asset('dropzone/assets/js/scripts.js')}}\"></script>
<script>
\$(document).ready(function(){
 \$('#uploadImage').submit(function(event){

  if(\$('#uploadFile').val())
  {
   event.preventDefault();
   \$('#loader-icon').show();
   \$('#targetLayer').hide();
   \$(this).ajaxSubmit({
    target: '#targetLayer',
    beforeSubmit:function(){
     \$('.progress-bar').width('2%');
    },
    uploadProgress: function(event, position, total, percentageComplete)
    {

        console.log(percentageComplete);

        \$('.pourcentage').html(''+percentageComplete+'  %');
\$('.progress-bar').css({ \"width\": ''+percentageComplete+'%'});

if(percentageComplete==100){
              \$('.succ').append('<div class=\"alert alert-success\" > <strong>Documents sent successfully!</strong> </div>');

}
  
    },
    successSubmit:function(){
alert('cc');
    },
    resetForm: true
   });
  }
  return false;
 });
});
</script>



<script>
//Optional code to show the file names

\$('.fileInput').change(function() {
  var numfiles = \$(this)[0].files.length;
  var parent = \$(this).closest('.input-file');
  parent.find('ins').remove();
  for (i = 0; i < numfiles; i++) { 
    parent.append('<ins>' + \$(this)[0].files[i].name + '</ins>')
  }
});

</script>



<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css'>
<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js'></script>
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js'></script>


<script type=\"text/javascript\">

</script>
    {% endblock %}
", "AdminBundle:Default:uploads.html.twig", "C:\\wamp64\\www\\soumaya\\src\\AdminBundle/Resources/views/Default/uploads.html.twig");
    }
}
