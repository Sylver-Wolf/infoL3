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

/* salle/index.html.twig */
class __TwigTemplate_8634a825999dc268442475ab4d44c01f7af9ce30150fd42573ca8e89853ff17d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "salle/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "salle/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "salle/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Quizz : Listes des salles";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        // line 6
        echo "    ";
        $this->displayParentBlock("navbar", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"text-center\">
  <button type=\"button\" href=\"https://google.com\" class=\"btn btn-outline col-md-2 \" style=\"border-color: #DDDDDD; color: #DDDDDD;margin-top: 2em ;margin-bottom: 2em\"> Tutoriel</button>
</div>
<div class=\"text-center\">
  <a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("creer_salle_new");
        echo "\"><button type=\"button\"class=\"btn btn-outline col-md-2 \" style=\"border-color: #DDDDDD; color: #DDDDDD;margin-top: 2em ;margin-bottom: 2em\"> Créer une salle</button>
  </a>
</div>

<div class=\"container text-center rounded\" style=\"background: #AAAAAA; margin-left: 3%; margin-right: 3%\" >
  <div class=\"row\" style=\"margin-bottom: 0.5%; padding-bottom: 0.5%; padding-top: 0.5%;\">
    <div class=\"col\">
      Numéro de salle
    </div>
    <div class=\"col\">
      Thème
    </div>
    <div class=\"col\">
      Difficulté
    </div>
    <div class=\"col\">
      Rejoindre la partie
    </div>
  </div>
</div>

";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["salles"]) || array_key_exists("salles", $context) ? $context["salles"] : (function () { throw new RuntimeError('Variable "salles" does not exist.', 35, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["salle"]) {
            // line 36
            echo "<div class=\"container text-center rounded\" style=\"background: #DDDDDD; margin-left: 3%; margin-right: 3%\" >
  <div class=\"row\" style=\"margin-bottom: 0.5%; padding-bottom: 0.5%; padding-top: 0.5%;\">
    <div class=\"col\">
      ";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["salle"], "id", [], "any", false, false, false, 39), "html", null, true);
            echo "
    </div>
    <div class=\"col\">
      ";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["salle"], "theme", [], "any", false, false, false, 42), "html", null, true);
            echo "
    </div>
    <div class=\"col\">
      ";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["salle"], "difficulte", [], "any", false, false, false, 45), "html", null, true);
            echo "
    </div>
    <div class=\"col\">
      Rejoindre la partie
    </div>
  </div>
</div>

<div class=\"row mt-3 text-center\" style=\"background: #333333; margin-left: 3em; margin-right: 3em;\">
        <div class=\"col col-md-3\">
          <div class=\"col-md-12 container rounded-top\" style=\"height: 15em; background: #DDDDDD;rounded-top;\">
            image article n
          </div>
        </div>
        <div class=\"col col-md-3\">
          <div class=\"col-md-12 container rounded-top\" style=\"height: 15em; background: #DDDDDD; rounded-top;\">
            image article n-1
          </div>
        </div>
        <div class=\"col col-md-3\">
          <div class=\"col-md-12 container rounded-top\" style=\"height: 15em; background: #DDDDDD;rounded-top;\">
            image article n-2 
          </div>
        </div> 
        <div class=\"col col-md-3\">
          <div class=\"col-md-12 container rounded-bottom\" style=\"height: 2em; background: #DDDDDD;\">
            lien article n
          </div>
        </div>
        <div class=\"col col-md-3\">
          <div class=\"col-md-12 container rounded-bottom\" style=\"height: 2em; background: #DDDDDD;\">
            lien article n-1
          </div>
        </div>
        <div class=\"col col-md-3\">
          <div class=\"col-md-12 container rounded-bottom\" style=\"height: 2em; background: #DDDDDD;\">
            lien article n-2 
          </div>
        </div>
        <div class=\"col col-md-3\">
          <div class=\"col-md-12 container rounded-bottom\" style=\"height: 2em; background: #DDDDDD;\">
            lien article n-1regfsd
          </div>
        </div>
        <div class=\"col col-md-3\">
          <div class=\"col-md-12 container rounded-bottom\" style=\"height: 2em; background: #DDDDDD;\">
            lien article n-2 bv
          </div>
        </div>
</div>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['salle'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "salle/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 97,  163 => 45,  157 => 42,  151 => 39,  146 => 36,  142 => 35,  118 => 14,  112 => 10,  102 => 9,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Quizz : Listes des salles{% endblock %}

{% block navbar %}
    {{ parent() }}
{% endblock  %} 

{% block body %}
<div class=\"text-center\">
  <button type=\"button\" href=\"https://google.com\" class=\"btn btn-outline col-md-2 \" style=\"border-color: #DDDDDD; color: #DDDDDD;margin-top: 2em ;margin-bottom: 2em\"> Tutoriel</button>
</div>
<div class=\"text-center\">
  <a href=\"{{ path('creer_salle_new') }}\"><button type=\"button\"class=\"btn btn-outline col-md-2 \" style=\"border-color: #DDDDDD; color: #DDDDDD;margin-top: 2em ;margin-bottom: 2em\"> Créer une salle</button>
  </a>
</div>

<div class=\"container text-center rounded\" style=\"background: #AAAAAA; margin-left: 3%; margin-right: 3%\" >
  <div class=\"row\" style=\"margin-bottom: 0.5%; padding-bottom: 0.5%; padding-top: 0.5%;\">
    <div class=\"col\">
      Numéro de salle
    </div>
    <div class=\"col\">
      Thème
    </div>
    <div class=\"col\">
      Difficulté
    </div>
    <div class=\"col\">
      Rejoindre la partie
    </div>
  </div>
</div>

{% for salle in salles %}
<div class=\"container text-center rounded\" style=\"background: #DDDDDD; margin-left: 3%; margin-right: 3%\" >
  <div class=\"row\" style=\"margin-bottom: 0.5%; padding-bottom: 0.5%; padding-top: 0.5%;\">
    <div class=\"col\">
      {{ salle.id }}
    </div>
    <div class=\"col\">
      {{ salle.theme }}
    </div>
    <div class=\"col\">
      {{ salle.difficulte }}
    </div>
    <div class=\"col\">
      Rejoindre la partie
    </div>
  </div>
</div>

<div class=\"row mt-3 text-center\" style=\"background: #333333; margin-left: 3em; margin-right: 3em;\">
        <div class=\"col col-md-3\">
          <div class=\"col-md-12 container rounded-top\" style=\"height: 15em; background: #DDDDDD;rounded-top;\">
            image article n
          </div>
        </div>
        <div class=\"col col-md-3\">
          <div class=\"col-md-12 container rounded-top\" style=\"height: 15em; background: #DDDDDD; rounded-top;\">
            image article n-1
          </div>
        </div>
        <div class=\"col col-md-3\">
          <div class=\"col-md-12 container rounded-top\" style=\"height: 15em; background: #DDDDDD;rounded-top;\">
            image article n-2 
          </div>
        </div> 
        <div class=\"col col-md-3\">
          <div class=\"col-md-12 container rounded-bottom\" style=\"height: 2em; background: #DDDDDD;\">
            lien article n
          </div>
        </div>
        <div class=\"col col-md-3\">
          <div class=\"col-md-12 container rounded-bottom\" style=\"height: 2em; background: #DDDDDD;\">
            lien article n-1
          </div>
        </div>
        <div class=\"col col-md-3\">
          <div class=\"col-md-12 container rounded-bottom\" style=\"height: 2em; background: #DDDDDD;\">
            lien article n-2 
          </div>
        </div>
        <div class=\"col col-md-3\">
          <div class=\"col-md-12 container rounded-bottom\" style=\"height: 2em; background: #DDDDDD;\">
            lien article n-1regfsd
          </div>
        </div>
        <div class=\"col col-md-3\">
          <div class=\"col-md-12 container rounded-bottom\" style=\"height: 2em; background: #DDDDDD;\">
            lien article n-2 bv
          </div>
        </div>
</div>

{% endfor %}

{% endblock %}
", "salle/index.html.twig", "/Applications/MAMP/htdocs/projetL3S1/templates/salle/index.html.twig");
    }
}
