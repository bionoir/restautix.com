<?php

/* FDARestautixBundle:Restautix:accueil.html.twig */
class __TwigTemplate_67ea9d45cd42b593eecfcc07a251d259 extends Twig_Template
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
        echo "Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 5
    public function block_fdarestautix_body($context, array $blocks = array())
    {
        // line 6
        echo "    <h2>Liste des événements</h2>
 
    <ul>
        ";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["eventsList"]) ? $context["eventsList"] : $this->getContext($context, "eventsList")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 10
            echo "        <li>
            <a href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("restautix_readEvent", array("id" => $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "titre"), "html", null, true);
            echo "</a>
            par ";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "auteur"), "html", null, true);
            echo ",
            le ";
            // line 13
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "date"), "d/m/Y"), "html", null, true);
            echo "
        </li>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 16
            echo "        <li>Pas (encore !) d'événements</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 18
        echo "    </ul>
";
    }

    public function getTemplateName()
    {
        return "FDARestautixBundle:Restautix:accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 18,  70 => 16,  62 => 13,  58 => 12,  52 => 11,  49 => 10,  44 => 9,  39 => 6,  36 => 5,  29 => 3,);
    }
}
