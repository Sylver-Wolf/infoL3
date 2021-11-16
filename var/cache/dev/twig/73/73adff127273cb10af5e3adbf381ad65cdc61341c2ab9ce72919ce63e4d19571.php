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

/* liste_salles/index.html.twig */
class __TwigTemplate_761dafe7aac8afa91116e1c37d043d2541bbfae0248eb96bd17f5ee23084ad6b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "liste_salles/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "liste_salles/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "liste_salles/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello ListeSallesController!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 22
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 23
        echo "<div class=\"text-center\">
  <button type=\"button\" href=\"https://google.com\" class=\"btn btn-outline col-md-2 \" style=\"border-color: #DDDDDD; color: #DDDDDD;margin-top: 2em ;margin-bottom: 2em\"> Tutoriel</button>
</div>


<div class=\"container text-center rounded\" style=\"background: #BBBBBB;\" >
  <div class=\"row\" style=\"margin-bottom: 1.5%;\">
    <div class=\"col\">
      Numéro de la Salle
    </div>
    <div class=\"col\">
      Thème
    </div>
    <div class=\"col\">
      Difficulté
    </div>
    <div class=\"col\">
      Nombre de joueurs dans la Salle
    </div>
    <div class=\"col\">
      Rejoindre la partie
    </div>
  </div>
</div>

<div class=\"container text-center\" style=\"background: #DDDDDD;\">
  <div class=\"row\">
    <div class=\"col\">
     salle
    </div>
    <div class=\"col\">
      thème
    </div>
    <div class=\"col\">
      Difficulté
    </div>
    <div class=\"col\">
      Nombre de joueurs dans la Salle
    </div>
    <div class=\"col\">
      Rejoindre la partie
    </div>
  </div>
  <div class=\"row\">
    <div class=\"col\">
     salle
    </div>
    <div class=\"col\">
      thème
    </div>
    <div class=\"col\">
      Difficulté
    </div>
    <div class=\"col\">
      Nombre de joueurs dans la Salle
    </div>
    <div class=\"col\">
      Rejoindre la partie
    </div>
  </div>
  <div class=\"row\">
    <div class=\"col\">
     salle
    </div>
    <div class=\"col\">
      thème
    </div>
    <div class=\"col\">
      Difficulté
    </div>
    <div class=\"col\">
      Nombre de joueurs dans la Salle
    </div>
    <div class=\"col\">
      Rejoindre la partie
    </div>
  </div>
  <div class=\"row\">
    <div class=\"col\">
     salle
    </div>
    <div class=\"col\">
      thème
    </div>
    <div class=\"col\">
      Difficulté
    </div>
    <div class=\"col\">
      Nombre de joueurs dans la Salle
    </div>
    <div class=\"col\">
      Rejoindre la partie
    </div>
  </div>
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "liste_salles/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 23,  78 => 22,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Hello ListeSallesController!{% endblock %}

{#% block body %}
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<div class=\"example-wrapper\">
    <h1>Hello {{ controller_name }}! ✅</h1>

    This friendly message is coming from:
    <ul>
        <li>Your controller at <code><a href=\"{{ '/Applications/MAMP/htdocs/projetL3S1/src/Controller/ListeSallesController.php'|file_link(0) }}\">src/Controller/ListeSallesController.php</a></code></li>
        <li>Your template at <code><a href=\"{{ '/Applications/MAMP/htdocs/projetL3S1/templates/liste_salles/index.html.twig'|file_link(0) }}\">templates/liste_salles/index.html.twig</a></code></li>
    </ul>
</div>
{% endblock %#}


{% block body %}
<div class=\"text-center\">
  <button type=\"button\" href=\"https://google.com\" class=\"btn btn-outline col-md-2 \" style=\"border-color: #DDDDDD; color: #DDDDDD;margin-top: 2em ;margin-bottom: 2em\"> Tutoriel</button>
</div>


<div class=\"container text-center rounded\" style=\"background: #BBBBBB;\" >
  <div class=\"row\" style=\"margin-bottom: 1.5%;\">
    <div class=\"col\">
      Numéro de la Salle
    </div>
    <div class=\"col\">
      Thème
    </div>
    <div class=\"col\">
      Difficulté
    </div>
    <div class=\"col\">
      Nombre de joueurs dans la Salle
    </div>
    <div class=\"col\">
      Rejoindre la partie
    </div>
  </div>
</div>

<div class=\"container text-center\" style=\"background: #DDDDDD;\">
  <div class=\"row\">
    <div class=\"col\">
     salle
    </div>
    <div class=\"col\">
      thème
    </div>
    <div class=\"col\">
      Difficulté
    </div>
    <div class=\"col\">
      Nombre de joueurs dans la Salle
    </div>
    <div class=\"col\">
      Rejoindre la partie
    </div>
  </div>
  <div class=\"row\">
    <div class=\"col\">
     salle
    </div>
    <div class=\"col\">
      thème
    </div>
    <div class=\"col\">
      Difficulté
    </div>
    <div class=\"col\">
      Nombre de joueurs dans la Salle
    </div>
    <div class=\"col\">
      Rejoindre la partie
    </div>
  </div>
  <div class=\"row\">
    <div class=\"col\">
     salle
    </div>
    <div class=\"col\">
      thème
    </div>
    <div class=\"col\">
      Difficulté
    </div>
    <div class=\"col\">
      Nombre de joueurs dans la Salle
    </div>
    <div class=\"col\">
      Rejoindre la partie
    </div>
  </div>
  <div class=\"row\">
    <div class=\"col\">
     salle
    </div>
    <div class=\"col\">
      thème
    </div>
    <div class=\"col\">
      Difficulté
    </div>
    <div class=\"col\">
      Nombre de joueurs dans la Salle
    </div>
    <div class=\"col\">
      Rejoindre la partie
    </div>
  </div>
</div>

{% endblock %}
", "liste_salles/index.html.twig", "C:\\wamp64\\www\\infoL3\\templates\\liste_salles\\index.html.twig");
    }
}
