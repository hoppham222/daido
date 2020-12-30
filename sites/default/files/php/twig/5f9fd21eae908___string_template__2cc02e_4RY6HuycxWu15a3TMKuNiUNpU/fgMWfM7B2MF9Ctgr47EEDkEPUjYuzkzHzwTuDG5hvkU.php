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

/* __string_template__2cc02e548bde4fdddfa265f6f44db5f5807d3a9c3f16ea42fbe3918b55c52b1d */
class __TwigTemplate_29ac2a0793b380ffd2b61648d491dab33a8d7d86b17a57a445abb7952e86eb6c extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 31];
        $filters = ["escape" => 2, "length" => 31];
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
        echo "<div class= 'new-item__img'>
    ";
        // line 2
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_image"] ?? null)), "html", null, true));
        echo "
</div>
<div class= 'new-item__info'>
    <div class= 'new-item__header'>
        <div class= 'new-item__header__logo'><a href='#'><img src=\"/sites/all/themes/giaidieu/images/icon-logo.png\"></a></div>
        <div class= 'new-item__header__mid'>
            <div class= 'new-item__header__name'>
                <div class= 'new-item__header__name-author'><a href='#'>Đại Đô Corporation</a></div>
                <div class= 'new-item__header__icon-author'><a href='#'></a></div>
            </div>
            <div class= 'new-item__header__time'>
                ";
        // line 13
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["created"] ?? null)), "html", null, true));
        echo " 
                <div class='new-item__header__dot'></div> 
                ";
        // line 15
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["created_1"] ?? null)), "html", null, true));
        echo "
            </div>
        </div>
        <div class= 'new-item__header__share'>
            <div class= 'new-item__header__share-post'>
                <div class= 'new-item__header__share-post__icon'></div>
                <div class= 'new-item__header__share-post__text'>Share Post</div>
            </div>
        </div>
    </div>
    <div class= 'new-item__content'>
        <div class= 'new-item__title'>";
        // line 26
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true));
        echo "</div>
        <div class= 'new-item__body'>";
        // line 27
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["body"] ?? null)), "html", null, true));
        echo "</div>
    </div>
    <div class= 'new-item__bottom'>
        <div class= 'new-item__view'>";
        // line 30
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["totalcount"] ?? null)), "html", null, true));
        echo "</div>
        ";
        // line 31
        if ((twig_length_filter($this->env, ($context["comment_count"] ?? null)) == 0)) {
            // line 32
            echo "    <div class=\"new-item__comment\"><a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["view_node"] ?? null)), "html", null, true));
            echo "\"> Write a comment </a></div>
";
        } else {
            // line 34
            echo "<div class=\"new-item__comment\"><a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["view_node"] ?? null)), "html", null, true));
            echo "\"><i class=\"far fa-comment-alt\"></i>  
<div class=\"new-item__comment-count\"> ";
            // line 35
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["comment_count"] ?? null)), "html", null, true));
            echo " </div>  </a></div>
";
        }
        // line 37
        echo "        <div class= 'new-item__heart'>
            ";
        // line 38
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["link_flag"] ?? null)), "html", null, true));
        echo "
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__2cc02e548bde4fdddfa265f6f44db5f5807d3a9c3f16ea42fbe3918b55c52b1d";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 38,  123 => 37,  118 => 35,  113 => 34,  107 => 32,  105 => 31,  101 => 30,  95 => 27,  91 => 26,  77 => 15,  72 => 13,  58 => 2,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{# inline_template_start #}<div class= 'new-item__img'>
    {{ field_image }}
</div>
<div class= 'new-item__info'>
    <div class= 'new-item__header'>
        <div class= 'new-item__header__logo'><a href='#'><img src=\"/sites/all/themes/giaidieu/images/icon-logo.png\"></a></div>
        <div class= 'new-item__header__mid'>
            <div class= 'new-item__header__name'>
                <div class= 'new-item__header__name-author'><a href='#'>Đại Đô Corporation</a></div>
                <div class= 'new-item__header__icon-author'><a href='#'></a></div>
            </div>
            <div class= 'new-item__header__time'>
                {{ created }} 
                <div class='new-item__header__dot'></div> 
                {{ created_1 }}
            </div>
        </div>
        <div class= 'new-item__header__share'>
            <div class= 'new-item__header__share-post'>
                <div class= 'new-item__header__share-post__icon'></div>
                <div class= 'new-item__header__share-post__text'>Share Post</div>
            </div>
        </div>
    </div>
    <div class= 'new-item__content'>
        <div class= 'new-item__title'>{{ title }}</div>
        <div class= 'new-item__body'>{{ body }}</div>
    </div>
    <div class= 'new-item__bottom'>
        <div class= 'new-item__view'>{{ totalcount }}</div>
        {% if comment_count|length == 0 %}
    <div class=\"new-item__comment\"><a href=\"{{ view_node }}\"> Write a comment </a></div>
{% else %}
<div class=\"new-item__comment\"><a href=\"{{ view_node }}\"><i class=\"far fa-comment-alt\"></i>  
<div class=\"new-item__comment-count\"> {{ comment_count }} </div>  </a></div>
{% endif %}
        <div class= 'new-item__heart'>
            {{ link_flag }}
        </div>
    </div>
</div>", "__string_template__2cc02e548bde4fdddfa265f6f44db5f5807d3a9c3f16ea42fbe3918b55c52b1d", "");
    }
}
