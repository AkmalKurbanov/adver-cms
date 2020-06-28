<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* /opt/lampp/htdocs/queenKg/themes/quuenKg/partials/layouts/advantages.htm */
class __TwigTemplate_a149d65a218b387a7697622c9f880ca795ff3d0c9cf827eba0b14ccaf4d25da3 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<section class=\"advantages darkbg\" id=\"advantages\">
   <div class=\"container\">
     <div class=\"title\">
       <div class=\"title__rectangle\"></div>
       <div><span class=\"title__secondary\">Преимущества</span> <span class=\"title__main\">Мы знаем свои сильные
           стороны</span>
       </div>
     </div>
     <div class=\"advantages__group\">

       ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["advantages"] ?? null), "records", [], "any", false, false, false, 11));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 12
            echo "       <ul class=\"advantages__object\">
         <li class=\"advantages__icon\"><span class=\"";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 13), "html", null, true);
            echo "\"></span></li>
         <li class=\"advantages__title\">";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 14), "html", null, true);
            echo "</li>
         <li class=\"advantages__subtitle\">";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, false, 15), "html", null, true);
            echo "</li>
       </ul>
       ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "
     </div>
   </div>
 </section>";
    }

    public function getTemplateName()
    {
        return "/opt/lampp/htdocs/queenKg/themes/quuenKg/partials/layouts/advantages.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 18,  64 => 15,  60 => 14,  56 => 13,  53 => 12,  49 => 11,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"advantages darkbg\" id=\"advantages\">
   <div class=\"container\">
     <div class=\"title\">
       <div class=\"title__rectangle\"></div>
       <div><span class=\"title__secondary\">Преимущества</span> <span class=\"title__main\">Мы знаем свои сильные
           стороны</span>
       </div>
     </div>
     <div class=\"advantages__group\">

       {% for item in advantages.records %}
       <ul class=\"advantages__object\">
         <li class=\"advantages__icon\"><span class=\"{{item.icon}}\"></span></li>
         <li class=\"advantages__title\">{{item.title}}</li>
         <li class=\"advantages__subtitle\">{{item.description}}</li>
       </ul>
       {% endfor %}

     </div>
   </div>
 </section>", "/opt/lampp/htdocs/queenKg/themes/quuenKg/partials/layouts/advantages.htm", "");
    }
}
