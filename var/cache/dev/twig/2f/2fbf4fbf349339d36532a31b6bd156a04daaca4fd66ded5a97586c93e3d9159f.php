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

/* pages/learners/show_one_learner.html.twig */
class __TwigTemplate_b1d3cca839f84b67ecdde9c77249adb5a1a36d3cee5781bad50952ac7de583dc extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/learners/show_one_learner.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/learners/show_one_learner.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/learners/show_one_learner.html.twig", 1);
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

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["learner"]) || array_key_exists("learner", $context) ? $context["learner"] : (function () { throw new RuntimeError('Variable "learner" does not exist.', 3, $this->source); })()), "firstname", [], "any", false, false, false, 3), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"center-link\">
    <!-- <a id=\"before\" href=\"javascript:history.back(-1)\">Page Précédente</a> -->
    <a class=\"effect\" href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("learners");
        echo "\">Les apprenants</a>
</div>
<div class=\"vertical-space\"></div>
<div class=\"show_one_element\" ";
        // line 11
        if (twig_get_attribute($this->env, $this->source, (isset($context["learner"]) || array_key_exists("learner", $context) ? $context["learner"] : (function () { throw new RuntimeError('Variable "learner" does not exist.', 11, $this->source); })()), "gender", [], "any", false, false, false, 11)) {
            echo "id=\"boy\"";
        } else {
            echo "id=\"girl\"";
        }
        echo ">
        <div class=\"element\">";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["learner"]) || array_key_exists("learner", $context) ? $context["learner"] : (function () { throw new RuntimeError('Variable "learner" does not exist.', 12, $this->source); })()), "firstname", [], "any", false, false, false, 12), "html", null, true);
        echo "</div>
        <div class=\"element\">";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["learner"]) || array_key_exists("learner", $context) ? $context["learner"] : (function () { throw new RuntimeError('Variable "learner" does not exist.', 13, $this->source); })()), "lastName", [], "any", false, false, false, 13), "html", null, true);
        echo "</div>
        <div class=\"element\">";
        // line 14
        if (twig_get_attribute($this->env, $this->source, (isset($context["learner"]) || array_key_exists("learner", $context) ? $context["learner"] : (function () { throw new RuntimeError('Variable "learner" does not exist.', 14, $this->source); })()), "gender", [], "any", false, false, false, 14)) {
            echo "Garçon";
        } else {
            echo "Fille";
        }
        echo "</div>
        <div class=\"element\">";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["learner"]) || array_key_exists("learner", $context) ? $context["learner"] : (function () { throw new RuntimeError('Variable "learner" does not exist.', 15, $this->source); })()), "level", [], "any", false, false, false, 15), "grade", [], "any", false, false, false, 15), "html", null, true);
        echo " | ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["learner"]) || array_key_exists("learner", $context) ? $context["learner"] : (function () { throw new RuntimeError('Variable "learner" does not exist.', 15, $this->source); })()), "level", [], "any", false, false, false, 15), "schoolClass", [], "any", false, false, false, 15), "html", null, true);
        echo "</div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "pages/learners/show_one_learner.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 15,  114 => 14,  110 => 13,  106 => 12,  98 => 11,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}{{learner.firstname}}{% endblock %}

{% block body %}
<div class=\"center-link\">
    <!-- <a id=\"before\" href=\"javascript:history.back(-1)\">Page Précédente</a> -->
    <a class=\"effect\" href=\"{{path('learners')}}\">Les apprenants</a>
</div>
<div class=\"vertical-space\"></div>
<div class=\"show_one_element\" {% if learner.gender %}id=\"boy\"{% else %}id=\"girl\"{% endif %}>
        <div class=\"element\">{{learner.firstname}}</div>
        <div class=\"element\">{{learner.lastName}}</div>
        <div class=\"element\">{% if learner.gender %}Garçon{% else %}Fille{% endif %}</div>
        <div class=\"element\">{{learner.level.grade}} | {{learner.level.schoolClass}}</div>
    </div>
{% endblock %}", "pages/learners/show_one_learner.html.twig", "C:\\Users\\devwe\\OneDrive\\Documents\\LocalServer\\HomeSchooling\\templates\\pages\\learners\\show_one_learner.html.twig");
    }
}
