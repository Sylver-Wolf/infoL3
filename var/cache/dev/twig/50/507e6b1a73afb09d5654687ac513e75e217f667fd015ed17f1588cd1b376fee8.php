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

/* profil/index.html.twig */
class __TwigTemplate_394f3b944623b2d577a2a819cfa2cd263622b8c3d7e10dbfdb6df410a808ea8f extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profil/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profil/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "profil/index.html.twig", 1);
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
<div class=\"row mt-3 text-center\" style=\"background: #333333; margin-left: 3em; margin-right: 3em;\">
        <div class=\"col col-md-6\">
          <div class=\"col-md-12 container rounded-top\" style=\"background: #DDDDDD;rounded-top;\">
            image article n
          </div>
        </div>
        <div class=\"col col-md-6\">
          <div class=\"col-md-12 container rounded-top\" style=\"background: #DDDDDD; rounded-top;\">
            image article n-1
          </div>
        </div>
        <div class=\"col col-md-6\">
          <div class=\"col-md-12 container rounded-bottom\" style=\"background: #DDDDDD;\">
            lien article n
          </div>
        </div>
        <div class=\"col col-md-6\">
          <div class=\"col-md-12 container rounded-bottom\" style=\"background: #DDDDDD;\">
            lien article n-1
          </div>
        </div>
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "profil/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}

<div class=\"row mt-3 text-center\" style=\"background: #333333; margin-left: 3em; margin-right: 3em;\">
        <div class=\"col col-md-6\">
          <div class=\"col-md-12 container rounded-top\" style=\"background: #DDDDDD;rounded-top;\">
            image article n
          </div>
        </div>
        <div class=\"col col-md-6\">
          <div class=\"col-md-12 container rounded-top\" style=\"background: #DDDDDD; rounded-top;\">
            image article n-1
          </div>
        </div>
        <div class=\"col col-md-6\">
          <div class=\"col-md-12 container rounded-bottom\" style=\"background: #DDDDDD;\">
            lien article n
          </div>
        </div>
        <div class=\"col col-md-6\">
          <div class=\"col-md-12 container rounded-bottom\" style=\"background: #DDDDDD;\">
            lien article n-1
          </div>
        </div>
</div>

{% endblock %}
", "profil/index.html.twig", "C:\\wamp64\\www\\infoL3\\templates\\profil\\index.html.twig");
    }
}
