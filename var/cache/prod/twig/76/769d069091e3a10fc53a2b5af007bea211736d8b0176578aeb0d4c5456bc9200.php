<?php

/* register/register.html.php */
class __TwigTemplate_b0897a69f03d90228609c3e7c89f44c436c1c147cfa88bb5c15b3b8f1c39b4c8 extends Twig_Template
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
        $__internal_c98afcec7eb7d1a1faa951efe43c1b52e103c0fb81a45caa6e11bb97bce7ffa3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c98afcec7eb7d1a1faa951efe43c1b52e103c0fb81a45caa6e11bb97bce7ffa3->enter($__internal_c98afcec7eb7d1a1faa951efe43c1b52e103c0fb81a45caa6e11bb97bce7ffa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "register/register.html.php"));

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
        
        $__internal_c98afcec7eb7d1a1faa951efe43c1b52e103c0fb81a45caa6e11bb97bce7ffa3->leave($__internal_c98afcec7eb7d1a1faa951efe43c1b52e103c0fb81a45caa6e11bb97bce7ffa3_prof);

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
