<?php

/* overall/head.twig */
class __TwigTemplate_728613a039068457d0907afdf93347773c48c7ba087cc23eb0d4afbbdecf375a extends Twig_Template
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
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"es\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"icon\" href=\"http://localhost/Horizon/Styles/images/favicon.ico\">
    <title>Horizon</title>
    <!-- Bootstrap core CSS -->
    <link rel=\"stylesheet\" href=\"/../Styles/vendor/bootstrap/bootstrap.min.css\" media=\"screen\" />
    <link rel=\"stylesheet\" href=\"/../Styles/vendor/css/datepicker.css\" media=\"screen\" />
    <!-- Custom styles -->
    <link rel=\"stylesheet\" href=\"/../Styles/css/styles.css\" media=\"screen\" />
    ";
        // line 16
        if ((array_key_exists("controller", $context) && (($context["controller"] ?? null) == "login"))) {
            // line 17
            echo "    <link rel=\"stylesheet\" href=\"/../Styles/css/login.css\" media=\"screen\" />
    ";
        }
        // line 19
        echo "    <!--core first + styles last-->
    <link href=\"/../Styles/vendor/fontawesome/css/fontawesome-all.css\" rel=\"stylesheet\" />
  </head>";
    }

    public function getTemplateName()
    {
        return "overall/head.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 19,  38 => 17,  36 => 16,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "overall/head.twig", "C:\\xampp\\htdocs\\Horizon\\App\\Templates\\overall\\head.twig");
    }
}
