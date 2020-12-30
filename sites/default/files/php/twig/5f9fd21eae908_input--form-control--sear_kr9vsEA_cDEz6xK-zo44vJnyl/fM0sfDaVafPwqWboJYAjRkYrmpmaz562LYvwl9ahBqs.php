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

/* sites/all/themes/giaidieu/templates/input--form-control--search.html.twig */
class __TwigTemplate_2bd5d6aff564b673185d64ae987012d40281e673f80053e49203e726e5e3bd23 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'input' => [$this, 'block_input'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["spaceless" => 24, "set" => 27];
        $filters = ["escape" => 32];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['spaceless', 'set'],
                ['escape'],
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

    protected function doGetParent(array $context)
    {
        // line 1
        return "input.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 24
        ob_start();
        // line 27
        $context["classes"] = [0 => "form-control"];
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 1
        $this->parent = $this->loadTemplate("input.html.twig", "sites/all/themes/giaidieu/templates/input--form-control--search.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 31
    public function block_input($context, array $blocks = [])
    {
        // line 32
        echo "        <input";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true));
        echo " />
        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"19\" viewBox=\"0 0 19 19\" role=\"img\" class=\"icon-search blog-desktop-header-search-icon-fill\"><path d=\"M12.8617648,11.8617648 L15.8633394,14.8633394 C15.9414442,14.9414442 15.9414442,15.0680772 15.8633394,15.1461821 L15.1461821,15.8633394 C15.0680772,15.9414442 14.9414442,15.9414442 14.8633394,15.8633394 L11.8617648,12.8617648 C10.9329713,13.578444 9.76865182,14.0047607 8.50476074,14.0047607 C5.46719462,14.0047607 3.00476074,11.5423269 3.00476074,8.50476074 C3.00476074,5.46719462 5.46719462,3.00476074 8.50476074,3.00476074 C11.5423269,3.00476074 14.0047607,5.46719462 14.0047607,8.50476074 C14.0047607,9.76865182 13.578444,10.9329713 12.8617648,11.8617648 Z M8.5,13 C10.9852814,13 13,10.9852814 13,8.5 C13,6.01471863 10.9852814,4 8.5,4 C6.01471863,4 4,6.01471863 4,8.5 C4,10.9852814 6.01471863,13 8.5,13 Z\"></path></svg>
        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"10\" height=\"10\" viewBox=\"0 0 10 10\" class=\"icon-close blog-desktop-header-search-icon-fill\" style=\"fill-rule: evenodd;\"><path d=\"M3144.99,617.882l-1.11,1.109-3.88-3.882-3.88,3.882-1.11-1.109,3.88-3.882-3.88-3.882,1.11-1.109,3.88,3.882,3.88-3.882,1.11,1.109L3141.11,614Z\" transform=\"translate(-3135 -609)\"></path></svg>
    ";
    }

    public function getTemplateName()
    {
        return "sites/all/themes/giaidieu/templates/input--form-control--search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 32,  70 => 31,  65 => 1,  62 => 27,  60 => 24,  54 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"input.html.twig\" %}
{#
/**
 * @file
 * Default theme implementation for an 'input__textfield' #type form element.
 *
 * Available variables:
 * - attributes: A list of HTML attributes for the input element.
 * - children: Optional additional rendered elements.
 * - icon: An icon.
 * - input_group: Flag to display as an input group.
 * - icon_position: Where an icon should be displayed.
 * - prefix: Markup to display before the input element.
 * - suffix: Markup to display after the input element.
 * - type: The type of input.
 *
 * @ingroup templates
 *
 * @see \\Drupal\\bootstrap\\Plugin\\Preprocess\\Input
 * @see template_preprocess_input()
 */
#}

{% spaceless %}
    
    {%
        set classes = [
        'form-control',
        ]
    %}
    {% block input %}
        <input{{ attributes.addClass(classes) }} />
        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"19\" viewBox=\"0 0 19 19\" role=\"img\" class=\"icon-search blog-desktop-header-search-icon-fill\"><path d=\"M12.8617648,11.8617648 L15.8633394,14.8633394 C15.9414442,14.9414442 15.9414442,15.0680772 15.8633394,15.1461821 L15.1461821,15.8633394 C15.0680772,15.9414442 14.9414442,15.9414442 14.8633394,15.8633394 L11.8617648,12.8617648 C10.9329713,13.578444 9.76865182,14.0047607 8.50476074,14.0047607 C5.46719462,14.0047607 3.00476074,11.5423269 3.00476074,8.50476074 C3.00476074,5.46719462 5.46719462,3.00476074 8.50476074,3.00476074 C11.5423269,3.00476074 14.0047607,5.46719462 14.0047607,8.50476074 C14.0047607,9.76865182 13.578444,10.9329713 12.8617648,11.8617648 Z M8.5,13 C10.9852814,13 13,10.9852814 13,8.5 C13,6.01471863 10.9852814,4 8.5,4 C6.01471863,4 4,6.01471863 4,8.5 C4,10.9852814 6.01471863,13 8.5,13 Z\"></path></svg>
        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"10\" height=\"10\" viewBox=\"0 0 10 10\" class=\"icon-close blog-desktop-header-search-icon-fill\" style=\"fill-rule: evenodd;\"><path d=\"M3144.99,617.882l-1.11,1.109-3.88-3.882-3.88,3.882-1.11-1.109,3.88-3.882-3.88-3.882,1.11-1.109,3.88,3.882,3.88-3.882,1.11,1.109L3141.11,614Z\" transform=\"translate(-3135 -609)\"></path></svg>
    {% endblock %}
    
{% endspaceless %}

", "sites/all/themes/giaidieu/templates/input--form-control--search.html.twig", "/home/daido/public_html/sites/all/themes/giaidieu/templates/input--form-control--search.html.twig");
    }
}
