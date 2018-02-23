<?php

/* login/login.html.php */
class __TwigTemplate_c0b2343c51615123dc0c149b4262ce9551dfdb169d12c468420adb852437e7a7 extends Twig_Template
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
        $__internal_b06c38b641021b7ddc93db818a22705db9425b58c1d72f74fdb3345e4fb3fc4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b06c38b641021b7ddc93db818a22705db9425b58c1d72f74fdb3345e4fb3fc4a->enter($__internal_b06c38b641021b7ddc93db818a22705db9425b58c1d72f74fdb3345e4fb3fc4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "login/login.html.php"));

        // line 1
        echo "<html>
<head>
<title>Sign In</title>
</head>
<body>
<form action=\"login_check\" method=\"post\">
<label> Login : </label>
<input name=\"_username\" id=\"username \" type=\"text\" value=\"<?php print( \$lastUsername) ; ?>\"/></br>
<label> Password : </label>
<input name=\"_password\" id=\"password\" type=\"password\"  /></br>

<input name=\"ok\" id=\"ok\" type=\"submit\" value=\"Login!\"/>
</form>
</body>
<?php print_r( \$error) ; ?>
</html>";
        
        $__internal_b06c38b641021b7ddc93db818a22705db9425b58c1d72f74fdb3345e4fb3fc4a->leave($__internal_b06c38b641021b7ddc93db818a22705db9425b58c1d72f74fdb3345e4fb3fc4a_prof);

    }

    public function getTemplateName()
    {
        return "login/login.html.php";
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
<title>Sign In</title>
</head>
<body>
<form action=\"login_check\" method=\"post\">
<label> Login : </label>
<input name=\"_username\" id=\"username \" type=\"text\" value=\"<?php print( \$lastUsername) ; ?>\"/></br>
<label> Password : </label>
<input name=\"_password\" id=\"password\" type=\"password\"  /></br>

<input name=\"ok\" id=\"ok\" type=\"submit\" value=\"Login!\"/>
</form>
</body>
<?php print_r( \$error) ; ?>
</html>", "login/login.html.php", "C:\\xampp\\htdocs\\codecole\\app\\Resources\\views\\login\\login.html.php");
    }
}
