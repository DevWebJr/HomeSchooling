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

/* learner/show.html.twig */
class __TwigTemplate_92e74688abaad191a338e460395a7b55781729ea023c00bc26435075b7656e04 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "learner/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "learner/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "learner/show.html.twig", 1);
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
    <a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("learner_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["learner"]) || array_key_exists("learner", $context) ? $context["learner"] : (function () { throw new RuntimeError('Variable "learner" does not exist.', 7, $this->source); })()), "id", [], "any", false, false, false, 7)]), "html", null, true);
        echo "\">Modifier</a>
</div>
<div class=\"block\">
    <div class=\"show_one_element\" ";
        // line 10
        if (twig_get_attribute($this->env, $this->source, (isset($context["learner"]) || array_key_exists("learner", $context) ? $context["learner"] : (function () { throw new RuntimeError('Variable "learner" does not exist.', 10, $this->source); })()), "gender", [], "any", false, false, false, 10)) {
            echo "id=\"boy\"";
        } else {
            echo "id=\"girl\"";
        }
        echo ">
        <div class=\"element\">";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["learner"]) || array_key_exists("learner", $context) ? $context["learner"] : (function () { throw new RuntimeError('Variable "learner" does not exist.', 11, $this->source); })()), "firstname", [], "any", false, false, false, 11), "html", null, true);
        echo "</div>
        <div class=\"element\">";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["learner"]) || array_key_exists("learner", $context) ? $context["learner"] : (function () { throw new RuntimeError('Variable "learner" does not exist.', 12, $this->source); })()), "lastName", [], "any", false, false, false, 12), "html", null, true);
        echo "</div>
        <div class=\"element\">";
        // line 13
        if (twig_get_attribute($this->env, $this->source, (isset($context["learner"]) || array_key_exists("learner", $context) ? $context["learner"] : (function () { throw new RuntimeError('Variable "learner" does not exist.', 13, $this->source); })()), "gender", [], "any", false, false, false, 13)) {
            echo "Garçon";
        } else {
            echo "Fille";
        }
        echo "</div>
        <div class=\"element\">";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["learner"]) || array_key_exists("learner", $context) ? $context["learner"] : (function () { throw new RuntimeError('Variable "learner" does not exist.', 14, $this->source); })()), "level", [], "any", false, false, false, 14), "grade", [], "any", false, false, false, 14), "html", null, true);
        echo " | ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["learner"]) || array_key_exists("learner", $context) ? $context["learner"] : (function () { throw new RuntimeError('Variable "learner" does not exist.', 14, $this->source); })()), "level", [], "any", false, false, false, 14), "schoolClass", [], "any", false, false, false, 14), "html", null, true);
        echo "</div>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["learner"]) || array_key_exists("learner", $context) ? $context["learner"] : (function () { throw new RuntimeError('Variable "learner" does not exist.', 15, $this->source); })()), "teacher", [], "any", false, false, false, 15));
        foreach ($context['_seq'] as $context["_key"] => $context["teacher"]) {
            // line 16
            echo "            <div class=\"element teacher\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["teacher"], "lastName", [], "any", false, false, false, 16), "html", null, true);
            echo "</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['teacher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "    </div>
</div>
<div class=\"center-link\">
    <a class=\"effect\" href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("learner_index");
        echo "\">Liste des apprenants</a>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "learner/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 21,  140 => 18,  131 => 16,  127 => 15,  121 => 14,  113 => 13,  109 => 12,  105 => 11,  97 => 10,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}{{learner.firstname}}{% endblock %}

{% block body %}
<div class=\"center-link\">
    <a href=\"{{ path('learner_edit', {'id': learner.id}) }}\">Modifier</a>
</div>
<div class=\"block\">
    <div class=\"show_one_element\" {% if learner.gender %}id=\"boy\"{% else %}id=\"girl\"{% endif %}>
        <div class=\"element\">{{learner.firstname}}</div>
        <div class=\"element\">{{learner.lastName}}</div>
        <div class=\"element\">{% if learner.gender %}Garçon{% else %}Fille{% endif %}</div>
        <div class=\"element\">{{learner.level.grade}} | {{learner.level.schoolClass}}</div>
        {% for teacher in learner.teacher %}
            <div class=\"element teacher\">{{teacher.lastName}}</div>
        {% endfor %}
    </div>
</div>
<div class=\"center-link\">
    <a class=\"effect\" href=\"{{path('learner_index')}}\">Liste des apprenants</a>
</div>
{% endblock %}", "learner/show.html.twig", "C:\\Users\\devwe\\OneDrive\\Documents\\LocalServer\\HomeSchooling\\templates\\learner\\show.html.twig");
    }
}
