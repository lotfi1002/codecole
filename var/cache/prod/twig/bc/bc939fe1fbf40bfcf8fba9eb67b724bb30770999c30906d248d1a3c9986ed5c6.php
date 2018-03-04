<?php

/* login/login.html.twig */
class __TwigTemplate_6938718b642b860841ff97904a8f19759cdf7dcb991c8062ecafd58722f3046e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5542e3a0f5b2f5da402ce0a376792dcf43140a44c9bee496e2e08a54ddc8f597 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5542e3a0f5b2f5da402ce0a376792dcf43140a44c9bee496e2e08a54ddc8f597->enter($__internal_5542e3a0f5b2f5da402ce0a376792dcf43140a44c9bee496e2e08a54ddc8f597_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "login/login.html.twig"));

        // line 1
        echo "<!DOCTYPE html>

<html>
<head>
<title>Sign In</title>
</head>
<body>
    ";
        // line 9
        echo "    ";
        // line 10
        echo "
    ";
        // line 11
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 12
            echo "        <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 14
        echo "
    <form action=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login_check");
        echo "\" method=\"post\">
        <label for=\"username\">Username:</label>
        <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />

        <label for=\"password\">Password:</label>
        <input type=\"password\" id=\"password\" name=\"_password\" />

        ";
        // line 27
        echo "
        <button type=\"submit\">login</button>
    </form>

</body>

</html>";
        
        $__internal_5542e3a0f5b2f5da402ce0a376792dcf43140a44c9bee496e2e08a54ddc8f597->leave($__internal_5542e3a0f5b2f5da402ce0a376792dcf43140a44c9bee496e2e08a54ddc8f597_prof);

    }

    public function getTemplateName()
    {
        return "login/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 27,  52 => 17,  47 => 15,  44 => 14,  38 => 12,  36 => 11,  33 => 10,  31 => 9,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>

<html>
<head>
<title>Sign In</title>
</head>
<body>
    {# app/Resources/views/security/login.html.twig #}
    {# ... you will probably extend your base template, like base.html.twig #}

    {% if error %}
        <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
    {% endif %}

    <form action=\"{{ path('login_check') }}\" method=\"post\">
        <label for=\"username\">Username:</label>
        <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" />

        <label for=\"password\">Password:</label>
        <input type=\"password\" id=\"password\" name=\"_password\" />

        {#
            If you want to control the URL the user
            is redirected to on success (more details below)
            <input type=\"hidden\" name=\"_target_path\" value=\"/account\" />
        #}

        <button type=\"submit\">login</button>
    </form>

</body>

</html>", "login/login.html.twig", "C:\\xampp\\htdocs\\codecole\\app\\Resources\\views\\login\\login.html.twig");
    }
}
