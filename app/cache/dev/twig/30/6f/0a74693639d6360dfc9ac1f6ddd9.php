<?php

/* FDARestautixBundle:Restautix:addEvent.html.twig */
class __TwigTemplate_306f0a74693639d6360dfc9ac1f6ddd9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FDARestautixBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FDARestautixBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Ajouter événement";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
    <h2>Ajouter un événement</h2>
    
    ";
        // line 9
        $this->env->loadTemplate("FDARestautixBundle:Restautix:formEvent.html.twig")->display($context);
        // line 10
        echo "    
    <p>
        Attention : l'événement sera ajouté directement sur la page
        d'accueil après validation du formulaire.
    </p>
";
    }

    public function getTemplateName()
    {
        return "FDARestautixBundle:Restautix:addEvent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 10,  44 => 9,  39 => 6,  36 => 5,  29 => 3,);
    }
}
