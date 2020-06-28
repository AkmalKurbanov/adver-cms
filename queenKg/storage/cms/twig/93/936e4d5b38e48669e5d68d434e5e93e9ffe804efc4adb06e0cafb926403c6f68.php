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

/* /opt/lampp/htdocs/queenKg/themes/quuenKg/partials/layouts/main_menu.htm */
class __TwigTemplate_dc680bc9356a8ef355864e5d24e2dc76ad3eeb8c272e62b6e7893551e65cca5a extends \Twig\Template
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
        $context["items"] = twig_get_attribute($this->env, $this->source, ($context["staticMenu"] ?? null), "menuItems", [], "method", false, false, false, 1);
        // line 2
        echo "

<ul class=\"header__menu\">
     ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 6
            echo "      <li class=\"header__list\"><a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 6), "html", null, true);
            echo "\" class=\"header__link\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 6), "html", null, true);
            echo "</a></li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "
  <!-- <li class=\"header__list\"><a href=\"#\" class=\"header__link header__language\"><img
        src=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/banner/flag.png");
        echo "\" alt=\"#\" class=\"header__flag\"> <span
        class=\"header__country\">EN</span></a></li> -->
</ul>";
    }

    public function getTemplateName()
    {
        return "/opt/lampp/htdocs/queenKg/themes/quuenKg/partials/layouts/main_menu.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 10,  59 => 8,  48 => 6,  44 => 5,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set items = staticMenu.menuItems() %}


<ul class=\"header__menu\">
     {% for item in items %}
      <li class=\"header__list\"><a href=\"{{ item.url }}\" class=\"header__link\">{{ item.title }}</a></li>
      {% endfor %}

  <!-- <li class=\"header__list\"><a href=\"#\" class=\"header__link header__language\"><img
        src=\"{{ 'assets/images/banner/flag.png'|theme }}\" alt=\"#\" class=\"header__flag\"> <span
        class=\"header__country\">EN</span></a></li> -->
</ul>", "/opt/lampp/htdocs/queenKg/themes/quuenKg/partials/layouts/main_menu.htm", "");
    }
}
