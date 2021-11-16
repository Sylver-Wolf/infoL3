<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* home/index.html.twig */
class __TwigTemplate_96d440acc7bd27119060da20636bf326aa6f422b2fa46529b447751da140a5f6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'navbar' => [$this, 'block_navbar'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        echo " 
    ";
        // line 4
        $this->displayParentBlock("navbar", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "
<main role=\"main\">


    </main>

<div class=\"text-center\">
  <a href=\"../salle\"><button type=\"button\" class=\"btn btn-outline col-md-2 \" style=\"border-color: #DDDDDD; color: #DDDDDD;margin-top: 2em ;margin-bottom: 2em\"> Jouer</button>
  </a>
</div>


<div class=\"row mt-3 text-center\" style=\"background: #333333; margin-left: 3em; margin-right: 3em;\">
        <div class=\"col col-md-4\">
          <div class=\"col-md-12 container rounded-top\" style=\"height: 15em; background: #DDDDDD;rounded-top;\">
            image article n
          </div>
        </div>
        <div class=\"col col-md-4\">
          <div class=\"col-md-12 container rounded-top\" style=\"height: 15em; background: #DDDDDD; rounded-top;\">
            image article n-1
          </div>
        </div>
        <div class=\"col col-md-4\">
          <div class=\"col-md-12 container rounded-top\" style=\"height: 15em; background: #DDDDDD;rounded-top;\">
            image article n-2 
          </div>
        </div> 
        <div class=\"col col-md-4\">
          <div class=\"col-md-12 container rounded-bottom\" style=\"height: 2em; background: #DDDDDD;\">
            lien article n
          </div>
        </div>
        <div class=\"col col-md-4\">
          <div class=\"col-md-12 container rounded-bottom\" style=\"height: 2em; background: #DDDDDD;\">
            lien article n-1
          </div>
        </div>
        <div class=\"col col-md-4\">
          <div class=\"col-md-12 container rounded-bottom\" style=\"height: 2em; background: #DDDDDD;\">
            lien article n-2 
          </div>
        </div>
</div>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 9,  83 => 8,  71 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block navbar %} 
    {{ parent() }}
{% endblock  %} 


{% block body %}

<main role=\"main\">


    </main>

<div class=\"text-center\">
  <a href=\"../salle\"><button type=\"button\" class=\"btn btn-outline col-md-2 \" style=\"border-color: #DDDDDD; color: #DDDDDD;margin-top: 2em ;margin-bottom: 2em\"> Jouer</button>
  </a>
</div>


<div class=\"row mt-3 text-center\" style=\"background: #333333; margin-left: 3em; margin-right: 3em;\">
        <div class=\"col col-md-4\">
          <div class=\"col-md-12 container rounded-top\" style=\"height: 15em; background: #DDDDDD;rounded-top;\">
            image article n
          </div>
        </div>
        <div class=\"col col-md-4\">
          <div class=\"col-md-12 container rounded-top\" style=\"height: 15em; background: #DDDDDD; rounded-top;\">
            image article n-1
          </div>
        </div>
        <div class=\"col col-md-4\">
          <div class=\"col-md-12 container rounded-top\" style=\"height: 15em; background: #DDDDDD;rounded-top;\">
            image article n-2 
          </div>
        </div> 
        <div class=\"col col-md-4\">
          <div class=\"col-md-12 container rounded-bottom\" style=\"height: 2em; background: #DDDDDD;\">
            lien article n
          </div>
        </div>
        <div class=\"col col-md-4\">
          <div class=\"col-md-12 container rounded-bottom\" style=\"height: 2em; background: #DDDDDD;\">
            lien article n-1
          </div>
        </div>
        <div class=\"col col-md-4\">
          <div class=\"col-md-12 container rounded-bottom\" style=\"height: 2em; background: #DDDDDD;\">
            lien article n-2 
          </div>
        </div>
</div>



{% endblock %}
", "home/index.html.twig", "/Applications/MAMP/htdocs/projetL3S1/templates/home/index.html.twig");
    }
}
