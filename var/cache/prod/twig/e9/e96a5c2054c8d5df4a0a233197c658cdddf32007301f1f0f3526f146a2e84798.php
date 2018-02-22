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
        $__internal_2e63504296a61b564d6ab60019fdfd9b71f9f25a971d19cd44bb7d31f90ea4dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e63504296a61b564d6ab60019fdfd9b71f9f25a971d19cd44bb7d31f90ea4dc->enter($__internal_2e63504296a61b564d6ab60019fdfd9b71f9f25a971d19cd44bb7d31f90ea4dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "register/register.html.php"));

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
        
        $__internal_2e63504296a61b564d6ab60019fdfd9b71f9f25a971d19cd44bb7d31f90ea4dc->leave($__internal_2e63504296a61b564d6ab60019fdfd9b71f9f25a971d19cd44bb7d31f90ea4dc_prof);

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
