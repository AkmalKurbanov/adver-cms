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

/* /opt/lampp/htdocs/queenKg/themes/quuenKg/partials/layouts/process.htm */
class __TwigTemplate_ef62e1f973f45a1bedfbbdf545f11ba123e3b1d09c779ec2db3c3945e320692b extends \Twig\Template
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
        echo "<section class=\"process lightbg\" id=\"process\">
    <div class=\"container\">
      <div class=\"title\">
        <div class=\"title__rectangle\"></div>
        <div><span class=\"title__secondary\">Процесс</span> <span class=\"title__main\">Процесс создания проекта</span>
        </div>
      </div>
      <section class=\"process__group\">

        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["processes"] ?? null), "records", [], "any", false, false, false, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 11
            echo "        <ul class=\"process__object\">
          <li class=\"process__number\">";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "order", [], "any", false, false, false, 12), "html", null, true);
            echo "</li>
          <li class=\"process__icon\"><span class=\"";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 13), "html", null, true);
            echo "\"></span></li>
          <li class=\"process__title\">";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 14), "html", null, true);
            echo "</li>
          <li class=\"process__subtitle\">";
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
        echo "      </section>
    </div>
  </section>";
    }

    public function getTemplateName()
    {
        return "/opt/lampp/htdocs/queenKg/themes/quuenKg/partials/layouts/process.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 18,  67 => 15,  63 => 14,  59 => 13,  55 => 12,  52 => 11,  48 => 10,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"process lightbg\" id=\"process\">
    <div class=\"container\">
      <div class=\"title\">
        <div class=\"title__rectangle\"></div>
        <div><span class=\"title__secondary\">Процесс</span> <span class=\"title__main\">Процесс создания проекта</span>
        </div>
      </div>
      <section class=\"process__group\">

        {% for item in processes.records %}
        <ul class=\"process__object\">
          <li class=\"process__number\">{{item.order}}</li>
          <li class=\"process__icon\"><span class=\"{{item.icon}}\"></span></li>
          <li class=\"process__title\">{{item.title}}</li>
          <li class=\"process__subtitle\">{{item.description}}</li>
        </ul>
        {% endfor %}
      </section>
    </div>
  </section>", "/opt/lampp/htdocs/queenKg/themes/quuenKg/partials/layouts/process.htm", "");
    }
}
