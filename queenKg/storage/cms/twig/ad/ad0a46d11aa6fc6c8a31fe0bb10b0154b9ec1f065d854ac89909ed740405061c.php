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

/* /opt/lampp/htdocs/queenKg/themes/quuenKg/partials/layouts/main_slider.htm */
class __TwigTemplate_223e47346c5730603069849a58905452b07f8b72d3e7e60a0e937a50b51d3294 extends \Twig\Template
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
        echo "<section class=\"banner\" id=\"banner\">
    <div class=\"container\">
      <div class=\"banner__slider\">
        <div class=\"owl-carousel slider-1 owl-theme banner__position\">
          ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["mainslider"] ?? null), "records", [], "any", false, false, false, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 6
            echo "          <h1 class=\"banner__title\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 6), "html", null, true);
            echo "</h1>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </div>
      </div>
    </div>
  </section>";
    }

    public function getTemplateName()
    {
        return "/opt/lampp/htdocs/queenKg/themes/quuenKg/partials/layouts/main_slider.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  47 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"banner\" id=\"banner\">
    <div class=\"container\">
      <div class=\"banner__slider\">
        <div class=\"owl-carousel slider-1 owl-theme banner__position\">
          {% for item in mainslider.records %}
          <h1 class=\"banner__title\">{{item.title}}</h1>
          {% endfor %}
        </div>
      </div>
    </div>
  </section>", "/opt/lampp/htdocs/queenKg/themes/quuenKg/partials/layouts/main_slider.htm", "");
    }
}
