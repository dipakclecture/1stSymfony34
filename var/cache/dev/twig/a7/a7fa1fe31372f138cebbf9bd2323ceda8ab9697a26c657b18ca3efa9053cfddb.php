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

/* post/my.html.twig */
class __TwigTemplate_361033537ff163b050865d072b658c7b6b761586ddcbe7fe1cf2406323917724 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "post/my.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "post/my.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "post/my.html.twig", 1);
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
                    <div class=\"panel-heading\">My Post Details</div>
                    ";
        // line 8
        if (($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []) != null)) {
            // line 9
            echo "                        <table class=\"table\">
                            <tr><a href=\"/addpost/\">Add Post</a>

                            </tr>
                            <tr>
                                <th>Post Name</th>
                                <th>Post</th>
                                <th>Published On</th>
                                <th>Likes</th>
                            </tr>

                            ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["myPost"] ?? $this->getContext($context, "myPost")));
            foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
                // line 21
                echo "                                <tr>
                                    <td>";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute($context["key"], "postname", []), "html", null, true);
                echo "</td>
                                    <td>";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute($context["key"], "post", []), "html", null, true);
                echo "</td>
                                    <td>";
                // line 24
                if (($this->getAttribute($context["key"], "created", []) != null)) {
                    echo " ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["key"], "created", []), "d/m/Y H:i:s A"), "html", null, true);
                } else {
                    echo "  NA ";
                }
                echo "</td>
                                    <td>";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($context["key"], "like", []), "html", null, true);
                echo "</td>
                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "
                        </table>
                    ";
        }
        // line 31
        echo "                </div>
                ";
        // line 32
        if (($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []) == null)) {
            // line 33
            echo "                    <a href=\"/login\" class=\"btn btn-info\"> You need to login to see the list  >></a>
                    <a href=\"/register\" class=\"btn btn-info\"> Register an account  >></a>
                ";
        }
        // line 36
        echo "            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "post/my.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 36,  125 => 33,  123 => 32,  120 => 31,  115 => 28,  106 => 25,  97 => 24,  93 => 23,  89 => 22,  86 => 21,  82 => 20,  69 => 9,  67 => 8,  60 => 3,  51 => 2,  29 => 1,);
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
                    <div class=\"panel-heading\">My Post Details</div>
                    {% if app.user != null %}
                        <table class=\"table\">
                            <tr><a href=\"/addpost/\">Add Post</a>

                            </tr>
                            <tr>
                                <th>Post Name</th>
                                <th>Post</th>
                                <th>Published On</th>
                                <th>Likes</th>
                            </tr>

                            {% for key in myPost %}
                                <tr>
                                    <td>{{ key.postname }}</td>
                                    <td>{{ key.post }}</td>
                                    <td>{% if key.created != null %} {{ key.created | date(\"d/m/Y H:i:s A\") }}{% else %}  NA {% endif %}</td>
                                    <td>{{ key.like }}</td>
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
{% endblock %}", "post/my.html.twig", "/home/lap022/code/social/app/Resources/views/post/my.html.twig");
    }
}
