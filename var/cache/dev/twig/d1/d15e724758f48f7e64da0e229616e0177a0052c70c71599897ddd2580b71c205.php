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

/* profile/profile_details.html.twig */
class __TwigTemplate_4bf54426ea68a1cb975a52b7bc0e47bf44e9950a0c80e387e4f22e2cb8fde603 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/profile_details.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/profile_details.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "profile/profile_details.html.twig", 1);
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
                    <div class=\"panel-heading\">";
        // line 7
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "id", []) != $this->getAttribute($this->getAttribute(($context["profileDetails"] ?? $this->getContext($context, "profileDetails")), "forId", []), "id", []))) {
            echo " Profile Details of ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["profileDetails"] ?? $this->getContext($context, "profileDetails")), "forId", []), "name", []), "html", null, true);
            echo " ";
        } else {
            echo " Your profile details";
        }
        echo "</div>
                    ";
        // line 8
        if (($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []) != null)) {
            // line 9
            echo "                        <table class=\"table\">
                            <tr>
                                <td><strong>ID:</strong></td><td>";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["profileDetails"] ?? $this->getContext($context, "profileDetails")), "forId", []), "id", []), "html", null, true);
            echo "</td>
                            </tr>
                            <tr>
                                <td><strong>NAME:</strong></td><td>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["profileDetails"] ?? $this->getContext($context, "profileDetails")), "forId", []), "name", []), "html", null, true);
            echo "</td>
                            </tr>
                            <tr>
                                <td><strong>EMAIL:</strong></td><td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["profileDetails"] ?? $this->getContext($context, "profileDetails")), "forId", []), "email", []), "html", null, true);
            echo "</td>
                            </tr>
                            <tr>
                                <td><strong>AGE:</strong></td><td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute(($context["profileDetails"] ?? $this->getContext($context, "profileDetails")), "age", []), "html", null, true);
            echo "</td>
                            </tr>
                            <tr>
                                <td><strong>GENDER:</strong></td><td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute(($context["profileDetails"] ?? $this->getContext($context, "profileDetails")), "gender", []), "html", null, true);
            echo "</td>
                            </tr>
                            <tr>
                                <td><strong>CREATIONTIME:</strong></td><td>";
            // line 26
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute(($context["profileDetails"] ?? $this->getContext($context, "profileDetails")), "forId", []), "created", []), "d/m/Y H:i:s A"), "html", null, true);
            echo "</td>
                            </tr>
                            <tr>
                                <td><strong>UPDATIONTIME:</strong></td>
                                <td>";
            // line 30
            if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "updated", []) != null)) {
                echo " ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute(($context["profileDetails"] ?? $this->getContext($context, "profileDetails")), "forId", []), "updated", []), "d/m/Y H:i:s A"), "html", null, true);
            } else {
                echo "  NA ";
            }
            echo "</td>
                            </tr>
                            ";
            // line 32
            if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "id", []) != $this->getAttribute($this->getAttribute(($context["profileDetails"] ?? $this->getContext($context, "profileDetails")), "forId", []), "id", []))) {
                // line 33
                echo "                            <tr><a href=\"/friendrequest/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["profileDetails"] ?? $this->getContext($context, "profileDetails")), "forId", []), "id", []), "html", null, true);
                echo "\">Send Friend Request</a></tr>
                            ";
            }
            // line 35
            echo "                            </table>
                </div>
                ";
        } else {
            // line 38
            echo "                    <a href=\"/login\" class=\"btn btn-info\"> You need to login to see the list  >></a>
                    <a href=\"/register\" class=\"btn btn-info\"> Register an account  >></a>
                ";
        }
        // line 41
        echo "            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "profile/profile_details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 41,  142 => 38,  137 => 35,  131 => 33,  129 => 32,  119 => 30,  112 => 26,  106 => 23,  100 => 20,  94 => 17,  88 => 14,  82 => 11,  78 => 9,  76 => 8,  66 => 7,  60 => 3,  51 => 2,  29 => 1,);
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
                    <div class=\"panel-heading\">{% if app.user.id != profileDetails.forId.id %} Profile Details of {{ profileDetails.forId.name }} {% else %} Your profile details{% endif %}</div>
                    {% if app.user != null %}
                        <table class=\"table\">
                            <tr>
                                <td><strong>ID:</strong></td><td>{{ profileDetails.forId.id }}</td>
                            </tr>
                            <tr>
                                <td><strong>NAME:</strong></td><td>{{ profileDetails.forId.name }}</td>
                            </tr>
                            <tr>
                                <td><strong>EMAIL:</strong></td><td>{{ profileDetails.forId.email }}</td>
                            </tr>
                            <tr>
                                <td><strong>AGE:</strong></td><td>{{ profileDetails.age }}</td>
                            </tr>
                            <tr>
                                <td><strong>GENDER:</strong></td><td>{{ profileDetails.gender }}</td>
                            </tr>
                            <tr>
                                <td><strong>CREATIONTIME:</strong></td><td>{{ profileDetails.forId.created | date(\"d/m/Y H:i:s A\") }}</td>
                            </tr>
                            <tr>
                                <td><strong>UPDATIONTIME:</strong></td>
                                <td>{% if app.user.updated != null %} {{ profileDetails.forId.updated | date(\"d/m/Y H:i:s A\") }}{% else %}  NA {% endif %}</td>
                            </tr>
                            {% if app.user.id != profileDetails.forId.id %}
                            <tr><a href=\"/friendrequest/{{ profileDetails.forId.id }}\">Send Friend Request</a></tr>
                            {% endif %}
                            </table>
                </div>
                {% else %}
                    <a href=\"/login\" class=\"btn btn-info\"> You need to login to see the list  >></a>
                    <a href=\"/register\" class=\"btn btn-info\"> Register an account  >></a>
                {% endif %}
            </div>
        </div>
    </div>
{% endblock %}", "profile/profile_details.html.twig", "/home/lap022/code/social/app/Resources/views/profile/profile_details.html.twig");
    }
}
