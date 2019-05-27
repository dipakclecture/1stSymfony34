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

/* post/all.html.twig */
class __TwigTemplate_48013f4b2e5e3abc8686ded5f7934bb95424f561f2a2e5ec053dfd6c381140d7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "post/all.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "post/all.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "post/all.html.twig", 1);
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
                    <div class=\"panel-heading\">All Post Details</div>
                    ";
        // line 8
        if (($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []) != null)) {
            // line 9
            echo "                        <table class=\"table\">
                            <tr>
                                <th>Post Name</th>
                                <th>Post</th>
                                <th>Post By</th>
                                <th>Published On</th>
                                <th>Likes</th>
                            </tr>

                            ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["allPost"] ?? $this->getContext($context, "allPost")));
            foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
                // line 19
                echo "                                <tr>
                                    <td>";
                // line 20
                echo twig_escape_filter($this->env, $this->getAttribute($context["key"], "postname", []), "html", null, true);
                echo "</td>
                                    <td>";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute($context["key"], "post", []), "html", null, true);
                echo "</td>
                                    <td><a href=\"/profile_details/";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["key"], "Postby", []), "id", []), "html", null, true);
                echo "\" >";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["key"], "Postby", []), "name", []), "html", null, true);
                echo " | ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["key"], "Postby", []), "email", []), "html", null, true);
                echo "</a> </td>
                                    <td>";
                // line 23
                if (($this->getAttribute($context["key"], "created", []) != null)) {
                    echo " ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["key"], "created", []), "d/m/Y H:i:s A"), "html", null, true);
                } else {
                    echo "  NA ";
                }
                echo "</td>
                                    <td>";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute($context["key"], "like", []), "html", null, true);
                echo "<a href=\"/allpost/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["key"], "id", []), "html", null, true);
                echo "\">Like It</a></td>
                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "
                        </table>
                    ";
        }
        // line 30
        echo "                </div>
                ";
        // line 31
        if (($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []) == null)) {
            // line 32
            echo "                    <a href=\"/login\" class=\"btn btn-info\"> You need to login to see the list  >></a>
                    <a href=\"/register\" class=\"btn btn-info\"> Register an account  >></a>
                ";
        }
        // line 35
        echo "            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "post/all.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 35,  133 => 32,  131 => 31,  128 => 30,  123 => 27,  112 => 24,  103 => 23,  95 => 22,  91 => 21,  87 => 20,  84 => 19,  80 => 18,  69 => 9,  67 => 8,  60 => 3,  51 => 2,  29 => 1,);
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
                    <div class=\"panel-heading\">All Post Details</div>
                    {% if app.user != null %}
                        <table class=\"table\">
                            <tr>
                                <th>Post Name</th>
                                <th>Post</th>
                                <th>Post By</th>
                                <th>Published On</th>
                                <th>Likes</th>
                            </tr>

                            {% for key in allPost %}
                                <tr>
                                    <td>{{ key.postname }}</td>
                                    <td>{{ key.post }}</td>
                                    <td><a href=\"/profile_details/{{ key.Postby.id }}\" >{{ key.Postby.name }} | {{ key.Postby.email }}</a> </td>
                                    <td>{% if key.created != null %} {{ key.created | date(\"d/m/Y H:i:s A\") }}{% else %}  NA {% endif %}</td>
                                    <td>{{ key.like }}<a href=\"/allpost/{{ key.id }}\">Like It</a></td>
                                </tr>
                            {% endfor %}

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
{% endblock %}", "post/all.html.twig", "/home/lap022/code/social/app/Resources/views/post/all.html.twig");
    }
}
