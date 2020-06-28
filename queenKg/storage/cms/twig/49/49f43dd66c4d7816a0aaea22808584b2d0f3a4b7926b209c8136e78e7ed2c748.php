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

/* /opt/lampp/htdocs/queenKg/themes/quuenKg/partials/layouts/partners.htm */
class __TwigTemplate_b004e01ac4a47457894786cf0afd853e7f361f922f1040e0c682908e52d2482b extends \Twig\Template
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
        echo "<section class=\"partners lightbg\" id=\"partners\">
    <div class=\"container\">
      <div class=\"title\">
        <div class=\"title__rectangle\"></div>
        <div><span class=\"title__secondary\">Клиенты</span> <span class=\"title__main\">Нам доверяют:</span></div>
      </div>
      <div class=\"owl-carousel slider__partners partners__group\">


        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["customers"] ?? null), "records", [], "any", false, false, false, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 11
            echo "        <img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "customer", [], "any", false, false, false, 11), "path", [], "any", false, false, false, 11), "html", null, true);
            echo "\" alt=\"\" class=\"partners__img\">
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "

      </div>
  </section>";
    }

    public function getTemplateName()
    {
        return "/opt/lampp/htdocs/queenKg/themes/quuenKg/partials/layouts/partners.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 13,  52 => 11,  48 => 10,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"partners lightbg\" id=\"partners\">
    <div class=\"container\">
      <div class=\"title\">
        <div class=\"title__rectangle\"></div>
        <div><span class=\"title__secondary\">Клиенты</span> <span class=\"title__main\">Нам доверяют:</span></div>
      </div>
      <div class=\"owl-carousel slider__partners partners__group\">


        {% for item in customers.records %}
        <img src=\"{{item.customer.path}}\" alt=\"\" class=\"partners__img\">
        {% endfor %}


      </div>
  </section>", "/opt/lampp/htdocs/queenKg/themes/quuenKg/partials/layouts/partners.htm", "");
    }
}
