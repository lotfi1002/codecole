<?php

/* login/login.html.php */
class __TwigTemplate_3dd65991d33e1eda6c230892f9aeecaad6e588d485edf96f1ebf39ce876d9209 extends Twig_Template
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
        $__internal_1d9f4793e87f863a36e27ecd92547a9c3d2d1abcc8c5572052f35c60dcc17872 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d9f4793e87f863a36e27ecd92547a9c3d2d1abcc8c5572052f35c60dcc17872->enter($__internal_1d9f4793e87f863a36e27ecd92547a9c3d2d1abcc8c5572052f35c60dcc17872_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "login/login.html.php"));

        // line 1
        echo "<html>
<head>
<title>Sign In</title>
</head>
<body>
<form action=\"\" method=\"post\">
<label> Login : </label>
<input name=\"username\" id=\"username \" type=\"text\" /></br>
<label> Password : </label>
<input name=\"plainPassword\" id=\"plainPassword\" type=\"password\"  /></br>

<input name=\"ok\" id=\"ok\" type=\"submit\" value=\"Login!\"/>
</form>
</body>

</html>";
        
        $__internal_1d9f4793e87f863a36e27ecd92547a9c3d2d1abcc8c5572052f35c60dcc17872->leave($__internal_1d9f4793e87f863a36e27ecd92547a9c3d2d1abcc8c5572052f35c60dcc17872_prof);

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
<form action=\"\" method=\"post\">
<label> Login : </label>
<input name=\"username\" id=\"username \" type=\"text\" /></br>
<label> Password : </label>
<input name=\"plainPassword\" id=\"plainPassword\" type=\"password\"  /></br>

<input name=\"ok\" id=\"ok\" type=\"submit\" value=\"Login!\"/>
</form>
</body>

</html>", "login/login.html.php", "C:\\xampp\\htdocs\\codecole\\app\\Resources\\views\\login\\login.html.php");
    }
}
