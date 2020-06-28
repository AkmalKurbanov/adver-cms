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

/* /opt/lampp/htdocs/queenKg/themes/quuenKg/pages/home.htm */
class __TwigTemplate_9dc561a3aabdc0270ced7b54592ae3c7965e94b6095f78a4dbf8ff95bb9e8de7 extends \Twig\Template
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
        echo "<div class=\"wrapper\">




  ";
        // line 6
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("layouts/main_slider"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 7
        echo "


  <div class=\"scroll__up\"><span class=\"icon-up-dir scroll__icon\"></span></div>
  

  ";
        // line 13
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("layouts/services"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 14
        echo "  ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("layouts/advantages"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 15
        echo "  ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("layouts/process"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 16
        echo "  ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("layouts/portfolio"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 17
        echo "  ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("layouts/partners"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 18
        echo "  
  
  
  
  
  <section class=\"technology darkbg\" id=\"technology\">
    <div class=\"container\">
      <div class=\"title\">
        <div class=\"title__rectangle\"></div>
        <div><span class=\"title__secondary\">Технологии</span> <span class=\"title__main\">Мы используем самые современные
          технологии</span>
        </div>
      </div>
      <div class=\"technology__group\">
        <ul class=\"technology__object\">
          <li class=\"technology__title\">Фронтенд</li>
          <ul class=\"technology__cards-group\">
            <li class=\"technology__card\"><img src=\"";
        // line 35
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/technology/js.png");
        echo "\"
              class=\"technology__img\" alt=\"#\"> <span class=\"technology__card-title\">JavaScript</span></li>
              <li class=\"technology__card\"><img src=\"";
        // line 37
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/technology/bt4.png");
        echo "\"
                class=\"technology__img\" alt=\"#\"> <span class=\"technology__card-title\">Bootstrap4</span></li>
            <li class=\"technology__card\"><img src=\"";
        // line 39
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/technology/react.png");
        echo "\"
              class=\"technology__img\" alt=\"#\"> <span class=\"technology__card-title\">ReactJS</span>
            </li>
            <li class=\"technology__card\"><img src=\"";
        // line 42
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/technology/vue.png");
        echo "\"
              class=\"technology__img\" alt=\"#\"> <span class=\"technology__card-title\">Vue</span></li>
              <li class=\"technology__card\"><img src=\"";
        // line 44
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/technology/babel.png");
        echo "\"
                class=\"technology__img\" alt=\"#\"> <span class=\"technology__card-title\">Babel</span>
              </li>
              <li class=\"technology__card\"><img src=\"";
        // line 47
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/technology/webpack.png");
        echo "\"
                class=\"technology__img\" alt=\"#\"> <span class=\"technology__card-title\">WebPack</span>
              </li>
            </ul>
          </ul>
          <ul class=\"technology__object\">
            <li class=\"technology__title\">Бэкенд</li>
            <ul class=\"technology__cards-group\">
              <li class=\"technology__card\"><img src=\"";
        // line 55
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/technology/php.png");
        echo "\"
                class=\"technology__img\" alt=\"#\"> <span class=\"technology__card-title\">PHP</span></li>
                <li class=\"technology__card\"><img src=\"";
        // line 57
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/technology/symfony.png");
        echo "\"
                  class=\"technology__img\" alt=\"#\"> <span class=\"technology__card-title\">Symfony</span>
                </li>
                <li class=\"technology__card\"><img src=\"";
        // line 60
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/technology/yii.png");
        echo "\"
                  class=\"technology__img\" alt=\"#\"> <span class=\"technology__card-title\">Yii</span></li>
                  <li class=\"technology__card\"><img src=\"";
        // line 62
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/technology/laravel.png");
        echo "\"
                    class=\"technology__img\" alt=\"#\"> <span class=\"technology__card-title\">Laravel</span>
                  </li>
                  <li class=\"technology__card\"><img src=\"";
        // line 65
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/technology/codeigniter.png");
        echo "\"
                    class=\"technology__img\" alt=\"#\"> <span class=\"technology__card-title\">Codeigniter</span></li>
                    <li class=\"technology__card\"><img src=\"";
        // line 67
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/technology/mysql.png");
        echo "\"
                      class=\"technology__img\" alt=\"#\"> <span class=\"technology__card-title\">MySQL</span>
                    </li>
                  </ul>
                </ul>
                <ul class=\"technology__object\">
                  <li class=\"technology__title\">Дизайн</li>
                  <ul class=\"technology__cards-group\">
                    <li class=\"technology__card\"><img src=\"";
        // line 75
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/technology/ps.png");
        echo "\"
                      class=\"technology__img\" alt=\"#\"> <span class=\"technology__card-title\">Photoshop</span>
                    </li>
                    <li class=\"technology__card\"><img src=\"";
        // line 78
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/technology/il.png");
        echo "\"
                      class=\"technology__img\" alt=\"#\"> <span class=\"technology__card-title\">Illustrator</span></li>
                      <li class=\"technology__card\"><img src=\"";
        // line 80
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/technology/xd.png");
        echo "\"
                        class=\"technology__img\" alt=\"#\"> <span class=\"technology__card-title\">XD</span></li>
                        <li class=\"technology__card\"><img src=\"";
        // line 82
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/technology/id.png");
        echo "\"
                          class=\"technology__img\" alt=\"#\"> <span class=\"technology__card-title\">InDesign</span>
                        </li>
                        <li class=\"technology__card mr\"><img src=\"";
        // line 85
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/technology/cd.png");
        echo "\"
                class=\"technology__img\" alt=\"#\"> <span class=\"technology__card-title\">CorelDraw</span></li>
                <li class=\"technology__card mr\"><img src=\"";
        // line 87
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/technology/scetch.png");
        echo "\"
                  class=\"technology__img\" alt=\"#\"> <span class=\"technology__card-title\">Scetch</span>
                </li>
              </ul>
            </ul>
            <ul class=\"technology__object\">
              <li class=\"technology__title\">Управление проектами</li>
          <ul class=\"technology__cards-group\">
            <li class=\"technology__card\"><img src=\"";
        // line 95
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/technology/slack.png");
        echo "\"
              class=\"technology__img\" alt=\"#\"> <span class=\"technology__card-title\">Slack</span>
            </li>
            <li class=\"technology__card\"><img src=\"";
        // line 98
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/technology/trello.png");
        echo "\"
              class=\"technology__img\" alt=\"#\"> <span class=\"technology__card-title\">Trello</span>
            </li>
            <li class=\"technology__card\"><img src=\"";
        // line 101
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/technology/skype.png");
        echo "\"
              class=\"technology__img\" alt=\"#\"> <span class=\"technology__card-title\">Skype</span>
            </li>
            <li class=\"technology__card\"><img src=\"";
        // line 104
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/technology/jira.png");
        echo "\"
              class=\"technology__img\" alt=\"#\"> <span class=\"technology__card-title\">Jira</span></li>
            </ul>
          </ul>
        </div>
    </div>
  </section>
  
  ";
        // line 112
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("layouts/reviews"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 113
        echo "
  
  
  <section class=\"contact darkbg\" id=\"contact\">
    <div class=\"container\">
      <div class=\"title\">
        <div class=\"title__rectangle\"></div>
        <div><span class=\"title__secondary\">Контакты</span> <span class=\"title__main\">Оставьте данные и мы свяжемся с
          Вами</span>
        </div>
      </div>
      <div class=\"contact__group\">
        <form data-request=\"genericForm::onFormSubmit\" class=\"contact__forms\">
          ";
        // line 126
        echo call_user_func_array($this->env->getFunction('form_token')->getCallable(), ["token"]);
        echo "
          <input type=\"text\" name=\"Имя\" placeholder=\"Ваше имя\" class=\"contact__form contact__form_input\" id=\"name\"
            required>
          <input type=\"text\" name=\"Телефон\" placeholder=\"Ваш номер\" class=\"contact__form contact__form_input\"
            id=\"number\" required>
          <input type=\"email\" name=\"Email\" placeholder=\"Ваш email\"
            class=\"contact__form contact__form_input contact__form_last\" id=\"email\" required>
          <textarea type=\"text\" name=\"Сообщение\" class=\"contact__form contact__form_message\"
            placeholder=\"Чем мы можем помочь?\" id=\"message\">

                    </textarea>
          <div id=\"genericForm_forms_flash\"></div>
          <button type=\"submit\" class=\"contact__button\" value=\"Submit\">Отправить</button>
        </form>
        <div class=\"contact__info\">
          <div class=\"contact__detail\">
            <div class=\"icon-placeholder contact__icon\"></div>
            <div class=\"contact__link contact__address\">";
        // line 143
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 143), "address", [], "any", false, false, false, 143), "html", null, true);
        echo "</div>
          </div>
          <div class=\"contact__detail\">
            <div class=\"icon-telephone contact__icon\"></div>
            <div><a href=\"tel:";
        // line 147
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 147), "first_phone", [], "any", false, false, false, 147), "html", null, true);
        echo "\" class=\"contact__link\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 147), "first_phone", [], "any", false, false, false, 147), "html", null, true);
        echo "</a>
              <a href=\"tel:";
        // line 148
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 148), "second_phone", [], "any", false, false, false, 148), "html", null, true);
        echo "\" class=\"contact__link\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 148), "second_phone", [], "any", false, false, false, 148), "html", null, true);
        echo "</a></div>
          </div>
          <div class=\"contact__detail\">
            <div class=\"icon-email contact__icon\"></div>
            <a href=\"mailto:";
        // line 152
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 152), "email", [], "any", false, false, false, 152), "html", null, true);
        echo "\" class=\"contact__link\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 152), "email", [], "any", false, false, false, 152), "html", null, true);
        echo "</a>
          </div>
        </div>
      </div>
    </div>
  </section>

</div>";
    }

    public function getTemplateName()
    {
        return "/opt/lampp/htdocs/queenKg/themes/quuenKg/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  303 => 152,  294 => 148,  288 => 147,  281 => 143,  261 => 126,  246 => 113,  242 => 112,  231 => 104,  225 => 101,  219 => 98,  213 => 95,  202 => 87,  197 => 85,  191 => 82,  186 => 80,  181 => 78,  175 => 75,  164 => 67,  159 => 65,  153 => 62,  148 => 60,  142 => 57,  137 => 55,  126 => 47,  120 => 44,  115 => 42,  109 => 39,  104 => 37,  99 => 35,  80 => 18,  75 => 17,  70 => 16,  65 => 15,  60 => 14,  56 => 13,  48 => 7,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"wrapper\">




  {% partial 'layouts/main_slider' %}



  <div class=\"scroll__up\"><span class=\"icon-up-dir scroll__icon\"></span></div>
  

  {% partial 'layouts/services' %}
  {% partial 'layouts/advantages' %}
  {% partial 'layouts/process' %}
  {% partial 'layouts/portfolio' %}
  {% partial 'layouts/partners' %}
  
  
  
  
  
  <section class=\"technology darkbg\" id=\"technology\">
    <div class=\"container\">
      <div class=\"title\">
        <div class=\"title__rectangle\"></div>
        <div><span class=\"title__secondary\">Технологии</span> <span class=\"title__main\">Мы используем самые современные
          технологии</span>
        </div>
      </div>
      <div class=\"technology__group\">
        <ul class=\"technology__object\">
          <li class=\"technology__title\">Фронтенд</li>
          <ul class=\"technology__cards-group\">
            <li class=\"technology__card\"><img src=\"{{ 'assets/images/technology/js.png'|theme }}\"
              class=\"technology__img\" alt=\"#\"> <span class=\"technology__card-title\">JavaScript</span></li>
              <li class=\"technology__card\"><img src=\"{{ 'assets/images/technology/bt4.png'|theme }}\"
                class=\"technology__img\" alt=\"#\"> <span class=\"technology__card-title\">Bootstrap4</span></li>
            <li class=\"technology__card\"><img src=\"{{ 'assets/images/technology/react.png'|theme }}\"
              class=\"technology__img\" alt=\"#\"> <span class=\"technology__card-title\">ReactJS</span>
            </li>
            <li class=\"technology__card\"><img src=\"{{ 'assets/images/technology/vue.png'|theme }}\"
              class=\"technology__img\" alt=\"#\"> <span class=\"technology__card-title\">Vue</span></li>
              <li class=\"technology__card\"><img src=\"{{ 'assets/images/technology/babel.png'|theme }}\"
                class=\"technology__img\" alt=\"#\"> <span class=\"technology__card-title\">Babel</span>
              </li>
              <li class=\"technology__card\"><img src=\"{{ 'assets/images/technology/webpack.png'|theme }}\"
                class=\"technology__img\" alt=\"#\"> <span class=\"technology__card-title\">WebPack</span>
              </li>
            </ul>
          </ul>
          <ul class=\"technology__object\">
            <li class=\"technology__title\">Бэкенд</li>
            <ul class=\"technology__cards-group\">
              <li class=\"technology__card\"><img src=\"{{ 'assets/images/technology/php.png'|theme }}\"
                class=\"technology__img\" alt=\"#\"> <span class=\"technology__card-title\">PHP</span></li>
                <li class=\"technology__card\"><img src=\"{{ 'assets/images/technology/symfony.png'|theme }}\"
                  class=\"technology__img\" alt=\"#\"> <span class=\"technology__card-title\">Symfony</span>
                </li>
                <li class=\"technology__card\"><img src=\"{{ 'assets/images/technology/yii.png'|theme }}\"
                  class=\"technology__img\" alt=\"#\"> <span class=\"technology__card-title\">Yii</span></li>
                  <li class=\"technology__card\"><img src=\"{{ 'assets/images/technology/laravel.png'|theme }}\"
                    class=\"technology__img\" alt=\"#\"> <span class=\"technology__card-title\">Laravel</span>
                  </li>
                  <li class=\"technology__card\"><img src=\"{{ 'assets/images/technology/codeigniter.png'|theme }}\"
                    class=\"technology__img\" alt=\"#\"> <span class=\"technology__card-title\">Codeigniter</span></li>
                    <li class=\"technology__card\"><img src=\"{{ 'assets/images/technology/mysql.png'|theme }}\"
                      class=\"technology__img\" alt=\"#\"> <span class=\"technology__card-title\">MySQL</span>
                    </li>
                  </ul>
                </ul>
                <ul class=\"technology__object\">
                  <li class=\"technology__title\">Дизайн</li>
                  <ul class=\"technology__cards-group\">
                    <li class=\"technology__card\"><img src=\"{{ 'assets/images/technology/ps.png'|theme }}\"
                      class=\"technology__img\" alt=\"#\"> <span class=\"technology__card-title\">Photoshop</span>
                    </li>
                    <li class=\"technology__card\"><img src=\"{{ 'assets/images/technology/il.png'|theme }}\"
                      class=\"technology__img\" alt=\"#\"> <span class=\"technology__card-title\">Illustrator</span></li>
                      <li class=\"technology__card\"><img src=\"{{ 'assets/images/technology/xd.png'|theme }}\"
                        class=\"technology__img\" alt=\"#\"> <span class=\"technology__card-title\">XD</span></li>
                        <li class=\"technology__card\"><img src=\"{{ 'assets/images/technology/id.png'|theme }}\"
                          class=\"technology__img\" alt=\"#\"> <span class=\"technology__card-title\">InDesign</span>
                        </li>
                        <li class=\"technology__card mr\"><img src=\"{{ 'assets/images/technology/cd.png'|theme }}\"
                class=\"technology__img\" alt=\"#\"> <span class=\"technology__card-title\">CorelDraw</span></li>
                <li class=\"technology__card mr\"><img src=\"{{ 'assets/images/technology/scetch.png'|theme }}\"
                  class=\"technology__img\" alt=\"#\"> <span class=\"technology__card-title\">Scetch</span>
                </li>
              </ul>
            </ul>
            <ul class=\"technology__object\">
              <li class=\"technology__title\">Управление проектами</li>
          <ul class=\"technology__cards-group\">
            <li class=\"technology__card\"><img src=\"{{ 'assets/images/technology/slack.png'|theme }}\"
              class=\"technology__img\" alt=\"#\"> <span class=\"technology__card-title\">Slack</span>
            </li>
            <li class=\"technology__card\"><img src=\"{{ 'assets/images/technology/trello.png'|theme }}\"
              class=\"technology__img\" alt=\"#\"> <span class=\"technology__card-title\">Trello</span>
            </li>
            <li class=\"technology__card\"><img src=\"{{ 'assets/images/technology/skype.png'|theme }}\"
              class=\"technology__img\" alt=\"#\"> <span class=\"technology__card-title\">Skype</span>
            </li>
            <li class=\"technology__card\"><img src=\"{{ 'assets/images/technology/jira.png'|theme }}\"
              class=\"technology__img\" alt=\"#\"> <span class=\"technology__card-title\">Jira</span></li>
            </ul>
          </ul>
        </div>
    </div>
  </section>
  
  {% partial 'layouts/reviews' %}

  
  
  <section class=\"contact darkbg\" id=\"contact\">
    <div class=\"container\">
      <div class=\"title\">
        <div class=\"title__rectangle\"></div>
        <div><span class=\"title__secondary\">Контакты</span> <span class=\"title__main\">Оставьте данные и мы свяжемся с
          Вами</span>
        </div>
      </div>
      <div class=\"contact__group\">
        <form data-request=\"genericForm::onFormSubmit\" class=\"contact__forms\">
          {{ form_token() }}
          <input type=\"text\" name=\"Имя\" placeholder=\"Ваше имя\" class=\"contact__form contact__form_input\" id=\"name\"
            required>
          <input type=\"text\" name=\"Телефон\" placeholder=\"Ваш номер\" class=\"contact__form contact__form_input\"
            id=\"number\" required>
          <input type=\"email\" name=\"Email\" placeholder=\"Ваш email\"
            class=\"contact__form contact__form_input contact__form_last\" id=\"email\" required>
          <textarea type=\"text\" name=\"Сообщение\" class=\"contact__form contact__form_message\"
            placeholder=\"Чем мы можем помочь?\" id=\"message\">

                    </textarea>
          <div id=\"genericForm_forms_flash\"></div>
          <button type=\"submit\" class=\"contact__button\" value=\"Submit\">Отправить</button>
        </form>
        <div class=\"contact__info\">
          <div class=\"contact__detail\">
            <div class=\"icon-placeholder contact__icon\"></div>
            <div class=\"contact__link contact__address\">{{ this.theme.address }}</div>
          </div>
          <div class=\"contact__detail\">
            <div class=\"icon-telephone contact__icon\"></div>
            <div><a href=\"tel:{{ this.theme.first_phone }}\" class=\"contact__link\">{{ this.theme.first_phone }}</a>
              <a href=\"tel:{{ this.theme.second_phone }}\" class=\"contact__link\">{{ this.theme.second_phone }}</a></div>
          </div>
          <div class=\"contact__detail\">
            <div class=\"icon-email contact__icon\"></div>
            <a href=\"mailto:{{ this.theme.email }}\" class=\"contact__link\">{{ this.theme.email }}</a>
          </div>
        </div>
      </div>
    </div>
  </section>

</div>", "/opt/lampp/htdocs/queenKg/themes/quuenKg/pages/home.htm", "");
    }
}
