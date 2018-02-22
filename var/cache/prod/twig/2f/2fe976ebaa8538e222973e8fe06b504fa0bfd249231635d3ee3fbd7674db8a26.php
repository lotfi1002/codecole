<?php

/* login/login.php */
class __TwigTemplate_b12b6a3a0199872ff7d3b319b94ce96b1dcc971479ece779f0ce37c089b29b55 extends Twig_Template
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
        $__internal_5f4221c64b1cd4869a867bc5aea724f54c56cb5d0b3152d82cc387c5d8bcadc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f4221c64b1cd4869a867bc5aea724f54c56cb5d0b3152d82cc387c5d8bcadc7->enter($__internal_5f4221c64b1cd4869a867bc5aea724f54c56cb5d0b3152d82cc387c5d8bcadc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "login/login.php"));

        // line 1
        echo "<?php print_r( \$error) ; ?>
<html>
<head>
<title>Sign In</title>
</head>
<body>
<form action=\"login_check\" method=\"post\">
<label> Login : </label>
<input name=\"_username\" id=\"username \" type=\"text\" value=\"<?php echo \$lastUsername  ; ?>\"/></br>
<label> Password : </label>
<input name=\"_password\" id=\"password\" type=\"password\"  /></br>

<input name=\"ok\" id=\"ok\" type=\"submit\" value=\"Login!\"/>
</form>
</body>

</html>";
        
        $__internal_5f4221c64b1cd4869a867bc5aea724f54c56cb5d0b3152d82cc387c5d8bcadc7->leave($__internal_5f4221c64b1cd4869a867bc5aea724f54c56cb5d0b3152d82cc387c5d8bcadc7_prof);

    }

    public function getTemplateName()
    {
        return "login/login.php";
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
        return new Twig_Source("<?php print_r( \$error) ; ?>
<html>
<head>
<title>Sign In</title>
</head>
<body>
<form action=\"login_check\" method=\"post\">
<label> Login : </label>
<input name=\"_username\" id=\"username \" type=\"text\" value=\"<?php echo \$lastUsername  ; ?>\"/></br>
<label> Password : </label>
<input name=\"_password\" id=\"password\" type=\"password\"  /></br>

<input name=\"ok\" id=\"ok\" type=\"submit\" value=\"Login!\"/>
</form>
</body>

</html>", "login/login.php", "C:\\xampp\\htdocs\\codecole\\app\\Resources\\views\\login\\login.php");
    }
}
