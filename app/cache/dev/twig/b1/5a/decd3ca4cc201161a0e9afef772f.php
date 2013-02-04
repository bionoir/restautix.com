<?php

/* FDARestautixBundle::layout.html.twig */
class __TwigTemplate_b15adecd3ca4cc201161a0e9afef772f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'fdarestautix_body' => array($this, 'block_fdarestautix_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Webpage ";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        // line 7
        echo "    
    ";
        // line 9
        echo "    <h1>
        Bienvenue ";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["nom"]) ? $context["nom"] : $this->getContext($context, "nom")), "html", null, true);
        echo " !
        Ce site vous permettra d'organiser des repas en quelques clics.
    </h1>
    
    <hr>
    ";
        // line 16
        echo "    ";
        $this->displayBlock('fdarestautix_body', $context, $blocks);
        // line 18
        echo "    
";
    }

    // line 16
    public function block_fdarestautix_body($context, array $blocks = array())
    {
        // line 17
        echo "    ";
    }

    public function getTemplateName()
    {
        return "FDARestautixBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 17,  64 => 16,  59 => 18,  56 => 16,  48 => 10,  45 => 9,  40 => 6,  37 => 5,  30 => 3,  80 => 20,  73 => 18,  65 => 15,  61 => 14,  55 => 13,  52 => 12,  47 => 11,  42 => 7,  39 => 7,  32 => 4,  29 => 3,);
    }
}
