<?php

/* ::layout.html.twig */
class __TwigTemplate_89498810be5e6fe1d7d1da8f04e2256d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "    </head>
    
    <body>
        
        <div class=\"container\">
            <div id=\"header\" class=\"hero-unit\">
                <h1>Mon Projet Symfony2</h1>
                <p>Ce projet est propulsé par Symfony2, et construit grâce au tutoriel du siteduzero.</p>
                <p><a class=\"btn btn-primary btn-large\" href=\"http://www.siteduzero.com/tutoriel-3-517569-symfony2.html\">
                    Lire le tutoriel »
                </a></p>
            </div>

            <div class=\"row\">
                <div id=\"menu\" class=\"span3\">
                <h3>Le blog</h3>
                <ul class=\"nav nav-pills nav-stacked\">
                    <li><a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("restautix_welcome"), "html", null, true);
        echo "\">Accueil Restautix</a></li>
                    <li><a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("restautix_addEvent"), "html", null, true);
        echo "\">Ajouter un événement</a></li>
                </ul>

                ";
        // line 31
        echo $this->env->getExtension('actions')->renderAction("FDARestautixBundle:Restautix:menu", array("nombre" => 3), array());
        // line 32
        echo "                
                </div>
                <div id=\"content\" class=\"span9\">
                    ";
        // line 35
        $this->displayBlock('body', $context, $blocks);
        // line 37
        echo "                </div>
            </div>

            <hr>

            <footer>
                <p>Responsable du site : ";
        // line 43
        echo twig_escape_filter($this->env, (isset($context["webmaster"]) ? $context["webmaster"] : $this->getContext($context, "webmaster")), "html", null, true);
        echo "  © 2013 and beyond.</p>
            </footer>
        </div>

        ";
        // line 47
        $this->displayBlock('javascripts', $context, $blocks);
        // line 52
        echo "        
    </body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Restautix";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        ";
    }

    // line 35
    public function block_body($context, array $blocks = array())
    {
        // line 36
        echo "                    ";
    }

    // line 47
    public function block_javascripts($context, array $blocks = array())
    {
        // line 48
        echo "            ";
        // line 49
        echo "            <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
        ";
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 50,  125 => 49,  123 => 48,  120 => 47,  116 => 36,  113 => 35,  106 => 8,  103 => 7,  97 => 5,  91 => 52,  89 => 47,  82 => 43,  74 => 37,  72 => 35,  36 => 10,  34 => 7,  23 => 1,  67 => 32,  64 => 16,  59 => 28,  56 => 16,  48 => 10,  45 => 9,  40 => 6,  37 => 5,  30 => 3,  80 => 20,  73 => 18,  65 => 31,  61 => 14,  55 => 27,  52 => 12,  47 => 11,  42 => 7,  39 => 7,  32 => 4,  29 => 5,);
    }
}
