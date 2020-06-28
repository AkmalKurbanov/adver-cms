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

/* /opt/lampp/htdocs/queenKg/themes/quuenKg/partials/layouts/reviews.htm */
class __TwigTemplate_4e4765c2c2f383c3634bf9864fcad2f4a0889e3b95e33072248b9c6283bb927d extends \Twig\Template
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
        echo "<section class=\"reviews lightbg\" id=\"reviews\">
    <div class=\"container\">
      <div class=\"title\">
        <div class=\"title__rectangle\"></div>
        <div><span class=\"title__secondary\">Отзывы</span> <span class=\"title__main\">Наши клиенты о нас</span>
        </div>
      </div>
      <div class=\"reviews__group\">
        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["reviews"] ?? null), "records", [], "any", false, false, false, 9));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 10
            echo "        <section class=\"reviews__object\">
          <span class=\"reviews__icon icon-left-quote\"></span>
          <div class=\"reviews__review\">
            <div class=\"reviews__img\" style=\"background-image: url('";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "reviewer", [], "any", false, false, false, 13), "path", [], "any", false, false, false, 13), "html", null, true);
            echo "');\"></div>
            <div class=\"reviews__person\"><span class=\"reviews__name\">";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 14), "html", null, true);
            echo "</span> <span
                class=\"reviews__text\">";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "text", [], "any", false, false, false, 15), "html", null, true);
            echo "</span>
            </div>
          </div>
        </section>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "      </div>
    </div>
  </section>";
    }

    public function getTemplateName()
    {
        return "/opt/lampp/htdocs/queenKg/themes/quuenKg/partials/layouts/reviews.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 20,  64 => 15,  60 => 14,  56 => 13,  51 => 10,  47 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"reviews lightbg\" id=\"reviews\">
    <div class=\"container\">
      <div class=\"title\">
        <div class=\"title__rectangle\"></div>
        <div><span class=\"title__secondary\">Отзывы</span> <span class=\"title__main\">Наши клиенты о нас</span>
        </div>
      </div>
      <div class=\"reviews__group\">
        {% for item in reviews.records %}
        <section class=\"reviews__object\">
          <span class=\"reviews__icon icon-left-quote\"></span>
          <div class=\"reviews__review\">
            <div class=\"reviews__img\" style=\"background-image: url('{{item.reviewer.path}}');\"></div>
            <div class=\"reviews__person\"><span class=\"reviews__name\">{{item.name}}</span> <span
                class=\"reviews__text\">{{item.text}}</span>
            </div>
          </div>
        </section>
        {% endfor %}
      </div>
    </div>
  </section>", "/opt/lampp/htdocs/queenKg/themes/quuenKg/partials/layouts/reviews.htm", "");
    }
}
