<?php

/* FDARestautixBundle:Restautix:modifyEvent.html.twig */
class __TwigTemplate_120d1aeeccbba1ffc1c66bf41cbdbef0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FDARestautixBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'fdarestautix_body' => array($this, 'block_fdarestautix_body'),
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
        echo "Modifier un événement - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 5
    public function block_fdarestautix_body($context, array $blocks = array())
    {
        // line 6
        echo "
    <h2>Modifier un événement</h2>
    
    ";
        // line 9
        $this->env->loadTemplate("FDARestautixBundle:Restautix:formEvent.html.twig")->display($context);
        // line 10
        echo "    
    <p>
        Vous éditez un événement déjà existant.
    </p>
    
    <p>
    <a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("restautix_readEvent", array("id" => $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "id"))), "html", null, true);
        echo "\" class=\"btn\">
      <i class=\"icon-chevron-left\"></i>
      Retour à l'événement
    </a>
  </p>
";
    }

    public function getTemplateName()
    {
        return "FDARestautixBundle:Restautix:modifyEvent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 16,  46 => 10,  44 => 9,  39 => 6,  36 => 5,  29 => 3,);
    }
}
