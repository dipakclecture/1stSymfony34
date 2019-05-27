<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* profile/profile.html.twig */
class __TwigTemplate_a997f5b19f499118f4c0565ed90c7f22164f3f957a56d98e35f5e17b7293423d extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/profile.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/profile.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "profile/profile.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-10 col-md-offset-1\">
                <div class=\"panel panel-success\">
                    <div class=\"panel-heading\">My Profile Details</div>
                    ";
        // line 8
        if (($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []) != null)) {
            // line 9
            echo "                        <table class=\"table\">
                            <tr>
                                <a href=\"/friendlist/1\" class=\"btn btn-info\">Show Friends</a>
                                <a href=\"/friendlist/0\" class=\"btn btn-info\">Show Friend Requests</a>
                                <a href=\"/friendlist/-1\" class=\"btn btn-info\"> Rejected Friend</a>
                            </tr>
                            <tr>
                                <td><strong>ID:</strong></td><td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "id", []), "html", null, true);
            echo "</td>
                            </tr>
                            <tr>
                                <td><strong>NAME:</strong></td><td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "name", []), "html", null, true);
            echo "</td>
                            </tr>
                            <tr>
                                <td><strong>EMAIL:</strong></td><td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "email", []), "html", null, true);
            echo "</td>
                            </tr>
                            <tr>
                                <td><strong>AGE:</strong></td><td>";
            // line 25
            if ((($context["profileDetails"] ?? $this->getContext($context, "profileDetails")) != null)) {
                echo twig_escape_filter($this->env, $this->getAttribute(($context["profileDetails"] ?? $this->getContext($context, "profileDetails")), "age", []), "html", null, true);
                echo " ";
            } else {
                echo " <a href=\"/addprofile/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "id", []), "html", null, true);
                echo "\">Add Details</a> ";
            }
            echo "</td>
                            </tr>
                            <tr>
                                <td><strong>GENDER:</strong></td><td>";
            // line 28
            if ((($context["profileDetails"] ?? $this->getContext($context, "profileDetails")) != null)) {
                echo twig_escape_filter($this->env, $this->getAttribute(($context["profileDetails"] ?? $this->getContext($context, "profileDetails")), "gender", []), "html", null, true);
                echo " ";
            } else {
                echo " <a href=\"/addprofile/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "id", []), "html", null, true);
                echo "\">Add Details</a> ";
            }
            echo "</td>
                            </tr>
                            <tr>
                                <td><strong>CREATIONTIME:</strong></td><td>";
            // line 31
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "created", []), "d/m/Y H:i:s A"), "html", null, true);
            echo "</td>
                            </tr>
                            <tr>
                                <td><strong>UPDATIONTIME:</strong></td><td>";
            // line 34
            if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "updated", []) != null)) {
                echo " ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "updated", []), "d/m/Y H:i:s A"), "html", null, true);
            }
            echo " ";
            if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "updated", []) == null)) {
                echo " NA ";
            }
            echo "</td>
                            </tr>
                        </table>
                    ";
        }
        // line 38
        echo "                </div>
                ";
        // line 39
        if (($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []) == null)) {
            // line 40
            echo "                    <a href=\"/login\" class=\"btn btn-info\"> You need to login to see the list  >></a>
                    <a href=\"/register\" class=\"btn btn-info\"> Register an account  >></a>
                ";
        }
        // line 43
        echo "            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "profile/profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 43,  147 => 40,  145 => 39,  142 => 38,  128 => 34,  122 => 31,  109 => 28,  96 => 25,  90 => 22,  84 => 19,  78 => 16,  69 => 9,  67 => 8,  60 => 3,  51 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-10 col-md-offset-1\">
                <div class=\"panel panel-success\">
                    <div class=\"panel-heading\">My Profile Details</div>
                    {% if app.user != null %}
                        <table class=\"table\">
                            <tr>
                                <a href=\"/friendlist/1\" class=\"btn btn-info\">Show Friends</a>
                                <a href=\"/friendlist/0\" class=\"btn btn-info\">Show Friend Requests</a>
                                <a href=\"/friendlist/-1\" class=\"btn btn-info\"> Rejected Friend</a>
                            </tr>
                            <tr>
                                <td><strong>ID:</strong></td><td>{{ app.user.id }}</td>
                            </tr>
                            <tr>
                                <td><strong>NAME:</strong></td><td>{{ app.user.name }}</td>
                            </tr>
                            <tr>
                                <td><strong>EMAIL:</strong></td><td>{{ app.user.email }}</td>
                            </tr>
                            <tr>
                                <td><strong>AGE:</strong></td><td>{% if profileDetails != null %}{{ profileDetails.age }} {% else %} <a href=\"/addprofile/{{ app.user.id }}\">Add Details</a> {% endif %}</td>
                            </tr>
                            <tr>
                                <td><strong>GENDER:</strong></td><td>{% if profileDetails != null %}{{ profileDetails.gender }} {% else %} <a href=\"/addprofile/{{ app.user.id }}\">Add Details</a> {% endif %}</td>
                            </tr>
                            <tr>
                                <td><strong>CREATIONTIME:</strong></td><td>{{ app.user.created | date(\"d/m/Y H:i:s A\") }}</td>
                            </tr>
                            <tr>
                                <td><strong>UPDATIONTIME:</strong></td><td>{% if app.user.updated != null %} {{ app.user.updated | date(\"d/m/Y H:i:s A\") }}{% endif %} {% if app.user.updated == null %} NA {% endif %}</td>
                            </tr>
                        </table>
                    {% endif %}
                </div>
                {% if app.user == null %}
                    <a href=\"/login\" class=\"btn btn-info\"> You need to login to see the list  >></a>
                    <a href=\"/register\" class=\"btn btn-info\"> Register an account  >></a>
                {% endif %}
            </div>
        </div>
    </div>
{% endblock %}", "profile/profile.html.twig", "/home/lap022/code/social/app/Resources/views/profile/profile.html.twig");
    }
}
