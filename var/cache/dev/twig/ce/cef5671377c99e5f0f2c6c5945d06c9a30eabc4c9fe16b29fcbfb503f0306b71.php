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
class __TwigTemplate_90ed7f0541aa457965f9c77ec399dc915844f18f06dbee8701b427c79362aeec extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
<main role=\"main\">


    </main>

<div class=\"text-center\">
  <a href=";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("liste_salles");
        echo "><button type=\"button\" class=\"btn btn-outline col-md-2 \" style=\"border-color: #DDDDDD; color: #DDDDDD;margin-top: 2em ;margin-bottom: 2em\"> Jouer</button>
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
        return array (  77 => 10,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}

<main role=\"main\">


    </main>

<div class=\"text-center\">
  <a href={{path('liste_salles')}}><button type=\"button\" class=\"btn btn-outline col-md-2 \" style=\"border-color: #DDDDDD; color: #DDDDDD;margin-top: 2em ;margin-bottom: 2em\"> Jouer</button>
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
", "home/index.html.twig", "C:\\wamp64\\www\\infoL3\\templates\\home\\index.html.twig");
    }
}
