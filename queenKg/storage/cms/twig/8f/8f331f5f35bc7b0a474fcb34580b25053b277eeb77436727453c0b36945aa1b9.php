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

/* /opt/lampp/htdocs/queenKg/themes/quuenKg/partials/layouts/portfolio.htm */
class __TwigTemplate_00e734baa4f59831ad853ae8e1ab9f7bbf275764e6e80d82ae29654430ce9ca9 extends \Twig\Template
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
        echo "<section class=\"portfolio darkbg\" id=\"portfolio\">
   <div class=\"container\">
     <div class=\"title\">
       <div class=\"title__rectangle\"></div>
       <div><span class=\"title__secondary\">Портфолио</span> <span class=\"title__main\">Наши работы скажут за нас</span>
       </div>
     </div>
     <div class=\"portfolio__slider\">
       <div class=\"slider__portfolio\">

         <div class=\"portfolio__group\">

           ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["portfolio"] ?? null), "records", [], "any", false, false, false, 13));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 14
            echo "           <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 14), "html", null, true);
            echo "\" class=\"portfolio__link\" target=\"_blank\" style=\"background-size: cover; background-position: center center;background-repeat: no-repeat; background-image:
              url('";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 15), "path", [], "any", false, false, false, 15), "html", null, true);
            echo "');\">
             <div class=\"portfolio__darker\"></div>
           </a>
           ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "
         </div>

       </div>
       <a href=\"#contact\" class=\"portfolio__button\">Связаться</a>
     </div>
   </div>
 </section>";
    }

    public function getTemplateName()
    {
        return "/opt/lampp/htdocs/queenKg/themes/quuenKg/partials/layouts/portfolio.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 19,  60 => 15,  55 => 14,  51 => 13,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"portfolio darkbg\" id=\"portfolio\">
   <div class=\"container\">
     <div class=\"title\">
       <div class=\"title__rectangle\"></div>
       <div><span class=\"title__secondary\">Портфолио</span> <span class=\"title__main\">Наши работы скажут за нас</span>
       </div>
     </div>
     <div class=\"portfolio__slider\">
       <div class=\"slider__portfolio\">

         <div class=\"portfolio__group\">

           {% for item in portfolio.records %}
           <a href=\"{{item.url}}\" class=\"portfolio__link\" target=\"_blank\" style=\"background-size: cover; background-position: center center;background-repeat: no-repeat; background-image:
              url('{{item.image.path}}');\">
             <div class=\"portfolio__darker\"></div>
           </a>
           {% endfor %}

         </div>

       </div>
       <a href=\"#contact\" class=\"portfolio__button\">Связаться</a>
     </div>
   </div>
 </section>", "/opt/lampp/htdocs/queenKg/themes/quuenKg/partials/layouts/portfolio.htm", "");
    }
}
