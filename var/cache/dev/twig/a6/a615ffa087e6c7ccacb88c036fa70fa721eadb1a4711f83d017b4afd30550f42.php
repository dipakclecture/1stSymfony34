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

/* auth/login.html.twig */
class __TwigTemplate_e2beb5cb056105740ee33717fd9404cdb793bdd74199ece9eddceb2351beb531 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "auth/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "auth/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "auth/login.html.twig", 1);
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
        echo "    <div class=\"row\">
      <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-8 col-md-offset-2\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">Login</div>
                    <div class=\"panel-body\">
                        <form class=\"form-horizontal\" role=\"form\" method=\"POST\" action=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("security_login_check");
        echo "\">
                            ";
        // line 11
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 12
            echo "                                <div class=\"alert alert-danger\">
                                    ";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageKey", []), $this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageData", [])), "html", null, true);
            echo "
                                </div>
                            ";
        }
        // line 16
        echo "                            <div class=\"form-group\">
                                <label for=\"email\" class=\"col-md-4 control-label\">E-Mail Address</label>
                                <div class=\"col-md-6\">
                                    <input id=\"email\" type=\"email\" class=\"form-control\" name=\"_email\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
        echo "\">
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label for=\"password\" class=\"col-md-4 control-label\">Password</label>
                                <div class=\"col-md-6\">
                                    <input id=\"password\" type=\"password\" class=\"form-control\" name=\"_password\">
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <div class=\"col-md-6 col-md-offset-4\">
                                    <button type=\"submit\" class=\"btn btn-primary\">
                                        <i class=\"fa fa-btn fa-sign-in\"></i> Login
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "auth/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 19,  84 => 16,  78 => 13,  75 => 12,  73 => 11,  69 => 10,  60 => 3,  51 => 2,  29 => 1,);
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
    <div class=\"row\">
      <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-8 col-md-offset-2\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">Login</div>
                    <div class=\"panel-body\">
                        <form class=\"form-horizontal\" role=\"form\" method=\"POST\" action=\"{{ path('security_login_check') }}\">
                            {% if error %}
                                <div class=\"alert alert-danger\">
                                    {{ error.messageKey|trans(error.messageData) }}
                                </div>
                            {% endif %}
                            <div class=\"form-group\">
                                <label for=\"email\" class=\"col-md-4 control-label\">E-Mail Address</label>
                                <div class=\"col-md-6\">
                                    <input id=\"email\" type=\"email\" class=\"form-control\" name=\"_email\" value=\"{{ last_username }}\">
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label for=\"password\" class=\"col-md-4 control-label\">Password</label>
                                <div class=\"col-md-6\">
                                    <input id=\"password\" type=\"password\" class=\"form-control\" name=\"_password\">
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <div class=\"col-md-6 col-md-offset-4\">
                                    <button type=\"submit\" class=\"btn btn-primary\">
                                        <i class=\"fa fa-btn fa-sign-in\"></i> Login
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "auth/login.html.twig", "/home/lap022/code/social/app/Resources/views/auth/login.html.twig");
    }
}
