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

/* blog/index.html.twig */
class __TwigTemplate_f9f009ab12233cadd601987ccf694af2e35b492a8f6324768f0db5080629b8ea extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "blog/index.html.twig", 1);
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

<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>
<nav class=\"navbar navbar-dark bg-dark navbar-expand-md bg-faded justify-content-center\" style=\"margin-left: 3em; margin-right: 3em\">
    <a href=\"/home\" class=\"navbar-brand d-flex w-50 mr-auto \">Logo</a>
    <div class=\"navbar-collapse collapse w-100\" id=\"collapsingNavbar3\">
        <ul class=\"navbar-nav w-100 justify-content-center\">
            <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"../salle\">ListeSalles</a>
            </li>
            <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"../blog\">Blog</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"../profil\">Mon Profil</a>
            </li>
        </ul>
        <ul class=\"nav navbar-nav ml-auto w-100 justify-content-end\">
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">Se déconnecter</a>
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
        echo "<main role=\"main\">
</main>
<div class=\"row mt-3 text-center\" style=\"background: #333333;\">          
        ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 35, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 36
            echo "        <div class=\"col col-md-4\">
          <div class=\"col-md-12 container rounded\" style=\"margin-bottom: 5%; height: 15em; background: #DDDDDD;\">
              <h2>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 38), "html", null, true);
            echo "</h2>
              <div>";
            // line 39
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "description", [], "any", false, false, false, 39), 0, 30), "html", null, true);
            echo "</div>
              <img src=";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "image", [], "any", false, false, false, 40), "html", null, true);
            echo " />
              <div class=\"btn-group\">
                <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 42)]), "html", null, true);
            echo "\" class=\"btn btn-outline-secondary\">Editer</a>
          </div>
        </div>           
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "blog/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 46,  144 => 42,  139 => 40,  135 => 39,  131 => 38,  127 => 36,  123 => 35,  118 => 32,  108 => 31,  92 => 25,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block navbar %} 

<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>
<nav class=\"navbar navbar-dark bg-dark navbar-expand-md bg-faded justify-content-center\" style=\"margin-left: 3em; margin-right: 3em\">
    <a href=\"/home\" class=\"navbar-brand d-flex w-50 mr-auto \">Logo</a>
    <div class=\"navbar-collapse collapse w-100\" id=\"collapsingNavbar3\">
        <ul class=\"navbar-nav w-100 justify-content-center\">
            <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"../salle\">ListeSalles</a>
            </li>
            <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"../blog\">Blog</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"../profil\">Mon Profil</a>
            </li>
        </ul>
        <ul class=\"nav navbar-nav ml-auto w-100 justify-content-end\">
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"{{ path('app_logout') }}\">Se déconnecter</a>
            </li>
        </ul>           
    </div>
</nav>
{% endblock  %} 
{% block body %}
<main role=\"main\">
</main>
<div class=\"row mt-3 text-center\" style=\"background: #333333;\">          
        {% for article in articles %}
        <div class=\"col col-md-4\">
          <div class=\"col-md-12 container rounded\" style=\"margin-bottom: 5%; height: 15em; background: #DDDDDD;\">
              <h2>{{ article.title }}</h2>
              <div>{{ article.description|slice(0,30)}}</div>
              <img src={{article.image}} />
              <div class=\"btn-group\">
                <a href=\"{{ path('article_edit', {\"id\":article.id}) }}\" class=\"btn btn-outline-secondary\">Editer</a>
          </div>
        </div>           
        {% endfor %}

</div>

{% endblock %}


", "blog/index.html.twig", "/Applications/MAMP/htdocs/projetL3S1/templates/blog/index.html.twig");
    }
}
