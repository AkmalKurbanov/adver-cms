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

/* /opt/lampp/htdocs/queenKg/themes/quuenKg/layouts/default.htm */
class __TwigTemplate_0173a76b09d63d411638fcd274e45a5e424534b5b11e1b70b55de83e0dbaa698 extends \Twig\Template
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
        echo "<!doctype html>
<html lang=\"en-ru\">

<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width,user-scalable=no,initial-scale=1,maximum-scale=1,minimum-scale=1\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>Queen digital</title>
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/styles/main.css");
        echo "\">
    <script src=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/scripts/modernizr.js");
        echo "\"></script>
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/favicon.ico");
        echo "\">
    ";
        // line 12
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 13
        echo "</head>

<body>
    <!--[if IE]><p class=\"browserupgrade\">You are using an <strong>outdated</strong> browser. Please <a
        href=\"http://browsehappy.com/\">upgrade your browser</a> to improve your experience.</p><![endif]-->

    <!-- Header -->

    ";
        // line 21
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("layouts/header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 22
        echo "    
    
    <!-- Content -->
    
    ";
        // line 26
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 27
        echo "    
    
    <!-- Footer -->
    
    ";
        // line 31
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("layouts/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 32
        echo "

    <script src=\"";
        // line 34
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/scripts/vendor.js");
        echo "\"></script>
    <script src=\"";
        // line 35
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/scripts/main.js");
        echo "\"></script>
    ";
        // line 36
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="' . Request::getBasePath() .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
        unset($_minify);
        // line 37
        echo "    ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 38
        echo "
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "/opt/lampp/htdocs/queenKg/themes/quuenKg/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 38,  117 => 37,  106 => 36,  102 => 35,  98 => 34,  94 => 32,  90 => 31,  84 => 27,  82 => 26,  76 => 22,  72 => 21,  62 => 13,  59 => 12,  55 => 11,  51 => 10,  47 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"en-ru\">

<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width,user-scalable=no,initial-scale=1,maximum-scale=1,minimum-scale=1\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>Queen digital</title>
    <link rel=\"stylesheet\" href=\"{{ 'assets/styles/main.css'|theme }}\">
    <script src=\"{{ 'assets/scripts/modernizr.js'|theme }}\"></script>
    <link rel=\"icon\" type=\"image/png\" href=\"{{ 'assets/favicon.ico'|theme }}\">
    {% styles %}
</head>

<body>
    <!--[if IE]><p class=\"browserupgrade\">You are using an <strong>outdated</strong> browser. Please <a
        href=\"http://browsehappy.com/\">upgrade your browser</a> to improve your experience.</p><![endif]-->

    <!-- Header -->

    {% partial 'layouts/header' %}
    
    
    <!-- Content -->
    
    {% page %}
    
    
    <!-- Footer -->
    
    {% partial 'layouts/footer' %}


    <script src=\"{{ 'assets/scripts/vendor.js'|theme }}\"></script>
    <script src=\"{{ 'assets/scripts/main.js'|theme }}\"></script>
    {% framework extras %}
    {% scripts %}

</body>

</html>", "/opt/lampp/htdocs/queenKg/themes/quuenKg/layouts/default.htm", "");
    }
}
