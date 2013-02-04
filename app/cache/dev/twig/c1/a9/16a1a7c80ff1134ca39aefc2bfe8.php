<?php

/* FDARestautixBundle:Restautix:layout.html.twig */
class __TwigTemplate_c1a916a1a7c80ff1134ca39aefc2bfe8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
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
    </head>
    <body>
        
        ";
        // line 9
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        
    </body>
    <footer>
        
        ";
        // line 15
        $this->displayBlock('footer', $context, $blocks);
        // line 17
        echo "        
    </footer>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Restautix";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "        ";
    }

    // line 15
    public function block_footer($context, array $blocks = array())
    {
        // line 16
        echo "        ";
    }

    public function getTemplateName()
    {
        return "FDARestautixBundle:Restautix:layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  67 => 16,  64 => 15,  60 => 10,  51 => 5,  45 => 17,  43 => 15,  35 => 9,  28 => 5,  22 => 1,  57 => 9,  54 => 13,  46 => 8,  40 => 6,  37 => 11,  30 => 3,);
    }
}
