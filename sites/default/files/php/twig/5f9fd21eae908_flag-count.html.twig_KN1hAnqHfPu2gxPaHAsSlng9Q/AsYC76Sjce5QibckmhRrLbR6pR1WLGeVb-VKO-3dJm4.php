<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* sites/all/themes/giaidieu/templates/flag-count.html.twig */
class __TwigTemplate_823577f25710784053d3a3eff70e39e6a1b9e57387f650c061057685a36cb288 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["spaceless" => 14, "if" => 19, "set" => 20];
        $filters = ["escape" => 16, "clean_class" => 29, "join" => 41];
        $functions = ["attach_library" => 16, "flagcount" => 36];

        try {
            $this->sandbox->checkSecurity(
                ['spaceless', 'if', 'set'],
                ['escape', 'clean_class', 'join'],
                ['attach_library', 'flagcount']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 14
        ob_start();
        // line 16
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("flag/flag.link"), "html", null, true));
        echo "

";
        // line 19
        if ((($context["action"] ?? null) == "unflag")) {
            // line 20
            echo "    ";
            $context["action_class"] = "action-unflag";
        } else {
            // line 22
            echo "    ";
            $context["action_class"] = "action-flag";
        }
        // line 24
        echo "
";
        // line 27
        $context["classes"] = [0 => "flag", 1 => ("flag-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(        // line 29
($context["flag"] ?? null), "id", [], "method")))), 2 => ((("js-flag-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(        // line 30
($context["flag"] ?? null), "id", [], "method")))) . "-") . $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["flaggable"] ?? null), "id", [], "method"))), 3 =>         // line 31
($context["action_class"] ?? null)];
        // line 34
        echo "
";
        // line 36
        $context["count"] = (("" . $this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->count($this->sandbox->ensureToStringAllowed(($context["flag"] ?? null)), $this->sandbox->ensureToStringAllowed(($context["flaggable"] ?? null)))) . "");
        // line 37
        echo "
";
        // line 39
        $context["attributes"] = $this->getAttribute(($context["attributes"] ?? null), "setAttribute", [0 => "rel", 1 => "nofollow"], "method");
        // line 40
        echo "
<div class=\"";
        // line 41
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, twig_join_filter($this->sandbox->ensureToStringAllowed(($context["classes"] ?? null)), " "), "html", null, true));
        echo "\">
  <div class= 'new-item__number-heart'>
      ";
        // line 43
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["count"] ?? null)), "html", null, true));
        echo "
  </div>
  <div class= 'new-item__icon-heart'>
  ";
        // line 47
        echo "  
  <a";
        // line 48
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null)), "html", null, true));
        echo "> 
    <i class=\"far fa-heart icon-heart-unflag\"></i>
    <i class=\"fas fa-heart icon-heart-flag\"></i>
    <div class= 'new-item__heart-circle'></div>
    <div class= 'new-item__heart-left-top'></div>
    <div class= 'new-item__heart-left-bot'></div>
    <div class= 'new-item__heart-right-top'></div>
    <div class= 'new-item__heart-right-bot'></div> 
  </a>
  </div>
</div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "sites/all/themes/giaidieu/templates/flag-count.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 48,  104 => 47,  98 => 43,  93 => 41,  90 => 40,  88 => 39,  85 => 37,  83 => 36,  80 => 34,  78 => 31,  77 => 30,  76 => 29,  75 => 27,  72 => 24,  68 => 22,  64 => 20,  62 => 19,  57 => 16,  55 => 14,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Overriding base flag link template
 *
 * Available variables:
 * - attributes: HTML attributes for the link element.
 * - title: The flag link title.
 * - action: 'flag' or 'unflag'
 * - flag: The flag object.
 * - flaggable: The flaggable entity.
 */
#}
{% spaceless %}
{# Attach the flag CSS library.#}
{{ attach_library('flag/flag.link') }}

{# Depending on the flag action, set the appropriate action class. #}
{% if action == 'unflag' %}
    {% set action_class = 'action-unflag' %}
{% else %}
    {% set action_class = 'action-flag' %}
{% endif %}

{# Set the remaining Flag CSS classes. #}
{%
  set classes = [
    'flag',
    'flag-' ~ flag.id()|clean_class,
    'js-flag-' ~ flag.id()|clean_class ~ '-' ~ flaggable.id(),
    action_class
  ]
%}

{# Attach flag count. #}
{% set count = '' ~ flagcount(flag, flaggable) ~ '' %}

{# Set nofollow to prevent search bots from crawling anonymous flag links #}
{% set attributes = attributes.setAttribute('rel', 'nofollow') %}

<div class=\"{{classes|join(' ')}}\">
  <div class= 'new-item__number-heart'>
      {{ count }}
  </div>
  <div class= 'new-item__icon-heart'>
  {# {{ title }} #}
  
  <a{{ attributes }}> 
    <i class=\"far fa-heart icon-heart-unflag\"></i>
    <i class=\"fas fa-heart icon-heart-flag\"></i>
    <div class= 'new-item__heart-circle'></div>
    <div class= 'new-item__heart-left-top'></div>
    <div class= 'new-item__heart-left-bot'></div>
    <div class= 'new-item__heart-right-top'></div>
    <div class= 'new-item__heart-right-bot'></div> 
  </a>
  </div>
</div>
{% endspaceless %}
", "sites/all/themes/giaidieu/templates/flag-count.html.twig", "/home/daido/public_html/sites/all/themes/giaidieu/templates/flag-count.html.twig");
    }
}
