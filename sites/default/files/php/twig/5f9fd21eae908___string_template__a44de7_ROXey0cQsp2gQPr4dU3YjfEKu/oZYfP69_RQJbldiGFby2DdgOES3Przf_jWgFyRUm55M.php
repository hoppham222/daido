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

/* __string_template__a44de72de67bf6f5bfc8fce405636e403e27aa0587d450502b154386d2cb9d60 */
class __TwigTemplate_866ac9d84207db957e57bbb1dc3a3abd2ec6b89f8d2ab33dd0676ccd0bd7ebce extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 3];
        $filters = ["escape" => 2, "length" => 3];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'length'],
                []
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
        // line 1
        echo "<div class=\"icon1\"><i class=\"far fa-eye\"></i></div>
<div class=\"totalcount\">";
        // line 2
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["totalcount"] ?? null)), "html", null, true));
        echo "</div>
";
        // line 3
        if ((twig_length_filter($this->env, ($context["comment_count"] ?? null)) == 0)) {
            // line 4
            echo "    <div class=\"comment-lengh comment-null\"><a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["view_node"] ?? null)), "html", null, true));
            echo "\"> Write a comment </a></div>
";
        } else {
            // line 6
            echo "<div class=\"comment-lengh \"><a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["view_node"] ?? null)), "html", null, true));
            echo "\"><i class=\"far fa-comment-alt\"></i>  ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["comment_count"] ?? null)), "html", null, true));
            echo "  </a></div>
";
        }
        // line 8
        echo "<div class=\"icon2\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["link_flag"] ?? null)), "html", null, true));
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "__string_template__a44de72de67bf6f5bfc8fce405636e403e27aa0587d450502b154386d2cb9d60";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 8,  70 => 6,  64 => 4,  62 => 3,  58 => 2,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{# inline_template_start #}<div class=\"icon1\"><i class=\"far fa-eye\"></i></div>
<div class=\"totalcount\">{{ totalcount }}</div>
{% if comment_count|length == 0 %}
    <div class=\"comment-lengh comment-null\"><a href=\"{{ view_node }}\"> Write a comment </a></div>
{% else %}
<div class=\"comment-lengh \"><a href=\"{{ view_node }}\"><i class=\"far fa-comment-alt\"></i>  {{ comment_count }}  </a></div>
{% endif %}
<div class=\"icon2\">{{ link_flag }}</div>
", "__string_template__a44de72de67bf6f5bfc8fce405636e403e27aa0587d450502b154386d2cb9d60", "");
    }
}
