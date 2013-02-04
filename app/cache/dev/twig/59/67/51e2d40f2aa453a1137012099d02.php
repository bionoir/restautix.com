<?php

/* FDARestautixBundle:Restautix:menu.html.twig */
class __TwigTemplate_596751e2d40f2aa453a1137012099d02 extends Twig_Template
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
        echo "<h3>Derniers événements</h3>
<ul class=\"nav nav-pills nav-stacked\">
  ";
        // line 3
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["eventsList"]) ? $context["eventsList"] : $this->getContext($context, "eventsList")));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 4
            echo "    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("restautix_readEvent", array("id" => $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "titre"), "html", null, true);
            echo "</a></li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 6
        echo "</ul>
</ul>";
    }

    public function getTemplateName()
    {
        return "FDARestautixBundle:Restautix:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 6,  27 => 4,  23 => 3,  19 => 1,  77 => 18,  70 => 16,  62 => 13,  58 => 12,  52 => 11,  49 => 10,  44 => 9,  39 => 6,  36 => 5,  29 => 3,);
    }
}
