<?php

/* FDARestautixBundle:Restautix:byebye.html.twig */
class __TwigTemplate_128c9449d653c79779bde17155482b1b extends Twig_Template
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
<html>
    <head>
        <title>Bievenue sur la page de Restautix, l'application pour gérer vos repas entre collègues :-)</title>
    </head>
    <body>
        <h1>Bye bye ";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["nom"]) ? $context["nom"] : $this->getContext($context, "nom")), "html", null, true);
        echo " !</h1>
        
        <p>
            Ceci n'est pas la fin ^^
        </p>
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "FDARestautixBundle:Restautix:byebye.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 7,  19 => 1,);
    }
}
