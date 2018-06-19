<?php

/* register/register.html.php */
class __TwigTemplate_34c5bb6af57ed0f67ce71354ccdc574b34bbc4ea823d3cec9e4b05b3324e8c51 extends Twig_Template
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
        $__internal_5ad547ccff6bc9878b86e850ea36944692bb5aba1e8a46f9000db59629f47357 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ad547ccff6bc9878b86e850ea36944692bb5aba1e8a46f9000db59629f47357->enter($__internal_5ad547ccff6bc9878b86e850ea36944692bb5aba1e8a46f9000db59629f47357_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "register/register.html.php"));

        $__internal_badb14cd1e4d2ed3c112619ac8a2d67fc6d97aec932e392689ec99ab30bfac14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_badb14cd1e4d2ed3c112619ac8a2d67fc6d97aec932e392689ec99ab30bfac14->enter($__internal_badb14cd1e4d2ed3c112619ac8a2d67fc6d97aec932e392689ec99ab30bfac14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "register/register.html.php"));

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
        
        $__internal_5ad547ccff6bc9878b86e850ea36944692bb5aba1e8a46f9000db59629f47357->leave($__internal_5ad547ccff6bc9878b86e850ea36944692bb5aba1e8a46f9000db59629f47357_prof);

        
        $__internal_badb14cd1e4d2ed3c112619ac8a2d67fc6d97aec932e392689ec99ab30bfac14->leave($__internal_badb14cd1e4d2ed3c112619ac8a2d67fc6d97aec932e392689ec99ab30bfac14_prof);

    }

    public function getTemplateName()
    {
        return "register/register.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
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
