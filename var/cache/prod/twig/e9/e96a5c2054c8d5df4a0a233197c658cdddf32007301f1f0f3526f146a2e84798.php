<?php

/* register/register.html.php */
class __TwigTemplate_f9dfb5e1648e6cbeee0bc1c51799c0ccc33020c9ebfb9e4e2164ac945b22062f extends Twig_Template
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
        $__internal_56e4971957322e14a5fc9cd058244ae30575bc7e6bf4eaa0679ed69e6792d4f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56e4971957322e14a5fc9cd058244ae30575bc7e6bf4eaa0679ed69e6792d4f6->enter($__internal_56e4971957322e14a5fc9cd058244ae30575bc7e6bf4eaa0679ed69e6792d4f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "register/register.html.php"));

        // line 1
        echo "<html>
<head>
<title>Register</title>
</head>
<body>
<form action=\"user/saveuser\" method=\"post\">
<label> Name : </label>
<input name=\"name\" id=\"name\" type=\"text\" /> </br>
<label> Email : </label>
<input name=\"email\" id=\"email\" type=\"text\" /></br>
<label> Login : </label>
<input name=\"username\" id=\"username\" type=\"text\" /></br>
<label> Password : </label>
<input name=\"plainPassword\" id=\"plainPassword\" type=\"password\"  /></br>

<input name=\"ok\" id=\"ok\" type=\"submit\" value=\"Register!\"/>
</form>
</body>

</html>";
        
        $__internal_56e4971957322e14a5fc9cd058244ae30575bc7e6bf4eaa0679ed69e6792d4f6->leave($__internal_56e4971957322e14a5fc9cd058244ae30575bc7e6bf4eaa0679ed69e6792d4f6_prof);

    }

    public function getTemplateName()
    {
        return "register/register.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html>
<head>
<title>Register</title>
</head>
<body>
<form action=\"user/saveuser\" method=\"post\">
<label> Name : </label>
<input name=\"name\" id=\"name\" type=\"text\" /> </br>
<label> Email : </label>
<input name=\"email\" id=\"email\" type=\"text\" /></br>
<label> Login : </label>
<input name=\"username\" id=\"username\" type=\"text\" /></br>
<label> Password : </label>
<input name=\"plainPassword\" id=\"plainPassword\" type=\"password\"  /></br>

<input name=\"ok\" id=\"ok\" type=\"submit\" value=\"Register!\"/>
</form>
</body>

</html>", "register/register.html.php", "C:\\xampp\\htdocs\\codecole\\app\\Resources\\views\\register\\register.html.php");
    }
}
