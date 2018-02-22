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
        $__internal_9b46c2f051f7b0cbe640d6c6ba154d038b5d9b14c5e33dffe6e3f8ccfe642a30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b46c2f051f7b0cbe640d6c6ba154d038b5d9b14c5e33dffe6e3f8ccfe642a30->enter($__internal_9b46c2f051f7b0cbe640d6c6ba154d038b5d9b14c5e33dffe6e3f8ccfe642a30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "register/register.html.php"));

        // line 1
        echo "<html>
<head>
<title>Register</title>
</head>
<body>
<form action=\"\" method=\"post\">
<label> Name : </label>
<input name=\"name \" id=\"name \" type=\"text\" />
<label> Login : </label>
<input name=\"username \" id=\"username \" type=\"text\" />
<label> Password : </label>
<input name=\"plainPassword\" id=\"plainPassword\" type=\"password\"  />

<input name=\"ok\" id=\"ok\" type=\"submit\" value=\"Register!\"/>
</form>
</body>

</html>";
        
        $__internal_9b46c2f051f7b0cbe640d6c6ba154d038b5d9b14c5e33dffe6e3f8ccfe642a30->leave($__internal_9b46c2f051f7b0cbe640d6c6ba154d038b5d9b14c5e33dffe6e3f8ccfe642a30_prof);

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
<form action=\"\" method=\"post\">
<label> Name : </label>
<input name=\"name \" id=\"name \" type=\"text\" />
<label> Login : </label>
<input name=\"username \" id=\"username \" type=\"text\" />
<label> Password : </label>
<input name=\"plainPassword\" id=\"plainPassword\" type=\"password\"  />

<input name=\"ok\" id=\"ok\" type=\"submit\" value=\"Register!\"/>
</form>
</body>

</html>", "register/register.html.php", "C:\\xampp\\htdocs\\codecole\\app\\Resources\\views\\register\\register.html.php");
    }
}
