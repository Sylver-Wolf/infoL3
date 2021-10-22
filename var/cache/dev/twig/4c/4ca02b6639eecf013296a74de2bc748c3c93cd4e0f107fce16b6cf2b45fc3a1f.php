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

/* visiteur/index.html.twig */
class __TwigTemplate_23a2f9e3c72ef0c247748445be83da98608c96f6d51ab21b80d3da19eb59608d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "visiteur/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "visiteur/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "visiteur/index.html.twig", 1);
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
<nav class=\"navbar navbar-dark bg-dark navbar-expand-md bg-faded justify-content-center\" style=\"margin-left: 3em; margin-right: 3em\">
    <a href=\"/home\" class=\"navbar-brand d-flex w-50 mr-auto \">Logo</a>
    <div class=\"navbar-collapse collapse w-100\" id=\"collapsingNavbar3\">
        <ul class=\"navbar-nav w-100 justify-content-center\">
            <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"https://127.0.0.1:8000/listesalles\">ListeSalles</a>
            </li>
            <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"#\">Blog</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">Mon Profil</a>
            </li>
        </ul>
        <ul class=\"nav navbar-nav ml-auto w-100 justify-content-end\">
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"https://127.0.0.1:8000/login\">Se connecter</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"https://127.0.0.1:8000/register\">S'inscrire</a>
            </li>
        </ul>           
    </div>
</nav>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 31
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 32
        echo "<div class=\"text-center\">
  <a href=\"https://127.0.0.1:8000/login\"><button type=\"button\" class=\"btn btn-outline col-md-2 \" style=\"border-color: #DDDDDD; color: #DDDDDD;margin-top: 2em ;margin-bottom: 2em\">Se connecter pour Jouer</button>
</div>


<div class=\"row mt-3 text-center\" style=\"background: #292929; margin-left: 3em; margin-right: 3em;\">
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
        return "visiteur/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 32,  103 => 31,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block navbar %} 
<nav class=\"navbar navbar-dark bg-dark navbar-expand-md bg-faded justify-content-center\" style=\"margin-left: 3em; margin-right: 3em\">
    <a href=\"/home\" class=\"navbar-brand d-flex w-50 mr-auto \">Logo</a>
    <div class=\"navbar-collapse collapse w-100\" id=\"collapsingNavbar3\">
        <ul class=\"navbar-nav w-100 justify-content-center\">
            <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"https://127.0.0.1:8000/listesalles\">ListeSalles</a>
            </li>
            <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"#\">Blog</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">Mon Profil</a>
            </li>
        </ul>
        <ul class=\"nav navbar-nav ml-auto w-100 justify-content-end\">
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"https://127.0.0.1:8000/login\">Se connecter</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"https://127.0.0.1:8000/register\">S'inscrire</a>
            </li>
        </ul>           
    </div>
</nav>
{% endblock  %} 


{% block body %}
<div class=\"text-center\">
  <a href=\"https://127.0.0.1:8000/login\"><button type=\"button\" class=\"btn btn-outline col-md-2 \" style=\"border-color: #DDDDDD; color: #DDDDDD;margin-top: 2em ;margin-bottom: 2em\">Se connecter pour Jouer</button>
</div>


<div class=\"row mt-3 text-center\" style=\"background: #292929; margin-left: 3em; margin-right: 3em;\">
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
", "visiteur/index.html.twig", "/Applications/MAMP/htdocs/projetL3S1/templates/visiteur/index.html.twig");
    }
}
