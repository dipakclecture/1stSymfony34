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

/* friend/friend.html.twig */
class __TwigTemplate_e3bfa0647bd159ad026447eaaea300e150ae339203c5ae0c2f03ae87e43eb519 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "friend/friend.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "friend/friend.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "friend/friend.html.twig", 1);
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
                    <div class=\"panel-heading\">Friend List</div>
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
                            ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["friendList"] ?? $this->getContext($context, "friendList")));
            foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
                // line 16
                echo "                            ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context, $context["key"]);
                echo "
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "                        </table>
                    ";
        }
        // line 41
        echo "                </div>
                ";
        // line 42
        if (($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []) == null)) {
            // line 43
            echo "                    <a href=\"/login\" class=\"btn btn-info\"> You need to login to see the list  >></a>
                    <a href=\"/register\" class=\"btn btn-info\"> Register an account  >></a>
                ";
        }
        // line 46
        echo "            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "friend/friend.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 46,  99 => 43,  97 => 42,  94 => 41,  90 => 39,  81 => 16,  77 => 15,  69 => 9,  67 => 8,  60 => 3,  51 => 2,  29 => 1,);
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
                    <div class=\"panel-heading\">Friend List</div>
                    {% if app.user != null %}
                        <table class=\"table\">
                            <tr>
                                <a href=\"/friendlist/1\" class=\"btn btn-info\">Show Friends</a>
                                <a href=\"/friendlist/0\" class=\"btn btn-info\">Show Friend Requests</a>
                                <a href=\"/friendlist/-1\" class=\"btn btn-info\"> Rejected Friend</a>
                            </tr>
                            {% for key in friendList %}
                            {{ dump(key) }}
                            {% endfor %}
{#                            <tr>#}
{#                                <td><strong>ID:</strong></td><td>{{ app.user.id }}</td>#}
{#                            </tr>#}
{#                            <tr>#}
{#                                <td><strong>NAME:</strong></td><td>{{ app.user.name }}</td>#}
{#                            </tr>#}
{#                            <tr>#}
{#                                <td><strong>EMAIL:</strong></td><td>{{ app.user.email }}</td>#}
{#                            </tr>#}
{#                            <tr>#}
{#                                <td><strong>AGE:</strong></td><td>{% if profileDetails != null %}{{ profileDetails.age }} {% else %} <a href=\"/addprofile/{{ app.user.id }}\">Add Details</a> {% endif %}</td>#}
{#                            </tr>#}
{#                            <tr>#}
{#                                <td><strong>GENDER:</strong></td><td>{% if profileDetails != null %}{{ profileDetails.gender }} {% else %} <a href=\"/addprofile/{{ app.user.id }}\">Add Details</a> {% endif %}</td>#}
{#                            </tr>#}
{#                            <tr>#}
{#                                <td><strong>CREATIONTIME:</strong></td><td>{{ app.user.created | date(\"d/m/Y H:i:s A\") }}</td>#}
{#                            </tr>#}
{#                            <tr>#}
{#                                <td><strong>UPDATIONTIME:</strong></td><td>{% if app.user.updated != null %} {{ app.user.updated | date(\"d/m/Y H:i:s A\") }}{% endif %} {% if app.user.updated == null %} NA {% endif %}</td>#}
{#                            </tr>#}
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
{% endblock %}", "friend/friend.html.twig", "/home/lap022/code/social/app/Resources/views/friend/friend.html.twig");
    }
}
