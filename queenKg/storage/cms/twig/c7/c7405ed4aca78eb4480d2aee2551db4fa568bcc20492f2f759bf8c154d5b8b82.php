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

/* /opt/lampp/htdocs/queenKg/themes/quuenKg/partials/layouts/services.htm */
class __TwigTemplate_0534720111e884cef37cc5a9f5e5567a26a96f92565039494fea652c84d8ba8a extends \Twig\Template
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
        echo "<section class=\"services lightbg\" id=\"services\">
  <div class=\"container\">
    <div class=\"title\">
      <div class=\"title__rectangle\"></div>
      <div><span class=\"title__secondary\">Наши услуги</span> <span class=\"title__main\">Профессиональный сервис от
          нашей команды</span>
      </div>
    </div>
    <div class=\"services__group\">

      ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "records", [], "any", false, false, false, 11));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 12
            echo "      <section class=\"services__object\"><span class=\"services__title\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 12), "html", null, true);
            echo "</span>
        <ul>
          ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, false, 14));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 15
                echo "          <li class=\"services__subtitle\">
            <span class=\"services__rectangle\"></span>
            <span>";
                // line 17
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 17), "html", null, true);
                echo " </span>
          </li>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "        </ul>
      </section>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "
    </div>
  </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/opt/lampp/htdocs/queenKg/themes/quuenKg/partials/layouts/services.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 23,  76 => 20,  67 => 17,  63 => 15,  59 => 14,  53 => 12,  49 => 11,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"services lightbg\" id=\"services\">
  <div class=\"container\">
    <div class=\"title\">
      <div class=\"title__rectangle\"></div>
      <div><span class=\"title__secondary\">Наши услуги</span> <span class=\"title__main\">Профессиональный сервис от
          нашей команды</span>
      </div>
    </div>
    <div class=\"services__group\">

      {% for item in services.records %}
      <section class=\"services__object\"><span class=\"services__title\">{{item.title}}</span>
        <ul>
          {% for item in item.items %}
          <li class=\"services__subtitle\">
            <span class=\"services__rectangle\"></span>
            <span>{{item.title}} </span>
          </li>
          {% endfor %}
        </ul>
      </section>
      {% endfor %}

    </div>
  </div>
</section>", "/opt/lampp/htdocs/queenKg/themes/quuenKg/partials/layouts/services.htm", "");
    }
}
