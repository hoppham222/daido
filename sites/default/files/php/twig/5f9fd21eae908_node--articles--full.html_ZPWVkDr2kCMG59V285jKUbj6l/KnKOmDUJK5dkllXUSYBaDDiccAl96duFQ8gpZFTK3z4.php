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

/* sites/all/themes/giaidieu/templates/nodes/node--articles--full.html.twig */
class __TwigTemplate_31b322856fd63f2fb05589ac8b7a6f66ed2aac6028b17e0bda6bdc3276846960 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 68, "if" => 79, "trans" => 168];
        $filters = ["clean_class" => 69, "escape" => 76, "date" => 109, "length" => 150];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'trans'],
                ['clean_class', 'escape', 'date', 'length'],
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
        // line 68
        $context["classes"] = [0 => \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(        // line 69
($context["node"] ?? null), "bundle", []))), 1 => (($this->getAttribute(        // line 70
($context["node"] ?? null), "isPromoted", [], "method")) ? ("is-promoted") : ("")), 2 => (($this->getAttribute(        // line 71
($context["node"] ?? null), "isSticky", [], "method")) ? ("is-sticky") : ("")), 3 => (( !$this->getAttribute(        // line 72
($context["node"] ?? null), "isPublished", [], "method")) ? ("is-unpublished") : ("")), 4 => ((        // line 73
($context["view_mode"] ?? null)) ? (\Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null)))) : ("")), 5 => "clearfix", 6 => ("node-" . $this->sandbox->ensureToStringAllowed($this->getAttribute(        // line 74
($context["node"] ?? null), "id", [])))];
        // line 76
        echo "<article";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true));
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => "container"], "method")), "html", null, true));
        echo ">
  ";
        // line 77
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null)), "html", null, true));
        echo "
  ";
        // line 78
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null)), "html", null, true));
        echo "
  ";
        // line 79
        if ( !($context["page"] ?? null)) {
            // line 80
            echo "    <h2";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_attributes"] ?? null)), "html", null, true));
            echo ">
      <a href=\"";
            // line 81
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null)), "html", null, true));
            echo "\" rel=\"bookmark\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true));
            echo "</a>
    </h2>
  ";
        }
        // line 84
        echo "
  <div class=\"search--page-node\">
    ";
        // line 86
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bieumautimkiem_node"] ?? null)), "html", null, true));
        echo "
  </div>

  <div class= 'new-item--page-node'>
    <div class= 'new-item__header'>
      <div class= 'new-item__header__logo'>
        <a href='#'>
          <img src=\"/sites/all/themes/giaidieu/images/icon-logo.png\">
        </a>
      </div>
      <div class= 'new-item__header__mid'>
        <div class= 'new-item__header__name'>
          <div class= 'new-item__header__name-author'>
            <a href='#'>Đại Đô Corporation</a>
          </div>
          <div class= 'new-item__header__icon-author'>
            <a href='#'>
              <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"19\" viewBox=\"0 0 19 19\" class=\"icon-author blog-post-homepage-description-fill\" style=\"fill-rule: evenodd;\"><path d=\"M15.3812,6.495914 L12.6789333,8.77258837 C12.6191333,8.84477644 12.5099333,8.85722265 12.4354,8.79997005 C12.4215333,8.79001308 12.4094,8.77756686 12.3998667,8.76429089 L9.78686667,6.14327115 C9.67766667,5.99225704 9.46186667,5.95491839 9.305,6.05863687 C9.26946667,6.08186981 9.23913333,6.11091099 9.21573333,6.14493065 L6.60013333,8.81075677 C6.5464,8.88626383 6.43893333,8.90534803 6.3592,8.85390366 C6.34446667,8.84394669 6.33146667,8.83233022 6.32106667,8.81905425 L3.61966667,6.50587098 C3.5018,6.36149485 3.28426667,6.33577266 3.13346667,6.44861837 C3.0494,6.51167921 3,6.60792997 3,6.70998895 L4,14 L15,14 L16,6.70169148 C16,6.51831719 15.8448667,6.36979232 15.6533333,6.36979232 C15.5476,6.36979232 15.4470667,6.41625821 15.3812,6.495914 Z\"></path></svg>
            </a>
          </div>
        </div>
        <div class= 'new-item__header__time'>
          <div class='new-item__header__dot'></div> 
          ";
        // line 109
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["node"] ?? null), "createdtime", [])), "F j"), "html", null, true));
        echo "
          <div class='new-item__header__dot'></div> 
          ";
        // line 111
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["date"] ?? null)), "html", null, true));
        echo "
        </div>
      </div>
      <div class= 'new-item__header__share'>
        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"19\" viewBox=\"0 0 19 19\" role=\"img\" class=\"icon-share blog-post-homepage-description-fill blog-post-homepage-link-hashtag-hover-fill\"><path d=\"M2.44398805,5.99973295 C1.62345525,5.9690612 0.980075653,5.28418875 1.00047182,4.46312144 C1.02086799,3.64205413 1.69745853,2.98998831 2.51850166,3.0001164 C3.33954478,3.01024449 3.99985313,3.67880182 4,4.50012255 C3.98424812,5.34399206 3.28763905,6.0153508 2.44398805,5.99973295 L2.44398805,5.99973295 Z M2.44398805,10.9997329 C1.62345525,10.9690612 0.980075653,10.2841888 1.00047182,9.46312144 C1.02086799,8.64205413 1.69745853,7.98998831 2.51850166,8.0001164 C3.33954478,8.01024449 3.99985313,8.67880182 4,9.50012255 C3.98424812,10.3439921 3.28763905,11.0153508 2.44398805,10.9997329 L2.44398805,10.9997329 Z M2.44398805,15.9997329 C1.62345525,15.9690612 0.980075653,15.2841888 1.00047182,14.4631214 C1.02086799,13.6420541 1.69745853,12.9899883 2.51850166,13.0001164 C3.33954478,13.0102445 3.99985313,13.6788018 4,14.5001225 C3.98424812,15.3439921 3.28763905,16.0153508 2.44398805,15.9997329 L2.44398805,15.9997329 Z\"></path></svg>
        <div class= 'new-item__header__share-post'>
          <div class= 'new-item__header__share-post__icon'>
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"19\" viewBox=\"0 0 19 19\" role=\"img\" class=\"icon-share_post blog-icon-fill\"><path d=\"M16.9410444,8.39109677 C17.0195644,8.46818967 17.0195644,8.59371274 16.9410444,8.67080564 L11.9026789,13.6176004 C11.7063789,13.8103326 11.3872657,13.8103326 11.1909657,13.6176004 C11.096339,13.5246935 11.0429857,13.3991705 11.0429857,13.2677172 L11.0429857,11.0013834 C7.27402658,11.0013834 4.38690723,12.7339971 2.38263435,16.1972475 C2.27794104,16.3781194 1.99204777,16.3049799 2.0001011,16.0964337 C2.24975438,10.0357454 5.2637137,6.69011101 11.0429857,6.05953059 L11.0429857,3.79418524 C11.0429857,3.52040659 11.268479,3.29999995 11.5463189,3.29999995 C11.6802056,3.29999995 11.8080522,3.35139522 11.9026789,3.44430206 L16.9410444,8.39109677 Z M3.43409745,13.1243046 C5.43837033,11.0576217 7.98624309,10.0139024 11.0434891,10.0139024 L12.0501555,10.0139024 L12.0501555,12.0746551 L15.6600614,8.53035818 L12.0501555,4.98704968 L12.0501555,6.94501178 L11.1542224,7.0418721 C6.94635665,7.50146442 4.39949056,9.49994971 3.43409745,13.1243046 Z\"></path></svg>
          </div>
          <div class= 'new-item__header__share-post__text'>Share Post</div>
        </div>
      </div>
    </div>
    <div class= 'new-item__content'>
      <div class= 'new-item__title'>
        ";
        // line 126
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["node"] ?? null), "getTitle", [], "method")), "html", null, true));
        echo "
      </div>
      <div class= 'new-item__summary'>

      </div>
      <div class= 'new-item__img'>
        ";
        // line 132
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_image", [])), "html", null, true));
        echo "
      </div>
      <div class= 'new-item__body'>
        ";
        // line 136
        echo "          ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "body", [])), "html", null, true));
        echo "
        ";
        // line 138
        echo "      </div>
    </div>
    <div class= 'new-item__social'>
      ";
        // line 141
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["socialsharingblock_node"] ?? null)), "html", null, true));
        echo "
    </div>
    <div class= 'new-item__bottom'>
      <div class= 'new-item__view'>
      
        ";
        // line 146
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["node_stats"] ?? null)), "html", null, true));
        echo " view
      
      </div>
      <div class= 'new-item__comment'>
        ";
        // line 150
        if ((twig_length_filter($this->env, ($context["comment_count"] ?? null)) > 0)) {
            // line 151
            echo "          ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["comment_count"] ?? null)), "html", null, true));
            echo " comment
        ";
        } else {
            // line 152
            echo " 
          0 comment
        ";
        }
        // line 155
        echo "      </div>
      <div class= 'new-item__heart'>
        ";
        // line 157
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["flag_link"] ?? null)), "html", null, true));
        echo "
        ";
        // line 159
        echo "        
      </div>
    </div>
  </div>

  ";
        // line 164
        if (($context["display_submitted"] ?? null)) {
            // line 165
            echo "    <footer>
      ";
            // line 166
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_picture"] ?? null)), "html", null, true));
            echo "
      <div";
            // line 167
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["author_attributes"] ?? null), "addClass", [0 => "author"], "method")), "html", null, true));
            echo ">
        ";
            // line 168
            echo t("Submitted by @author_name on @date", array("@author_name" => ($context["author_name"] ?? null), "@date" => ($context["date"] ?? null), ));
            // line 169
            echo "        ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["metadata"] ?? null)), "html", null, true));
            echo "
      </div>
    </footer>
  ";
        }
        // line 173
        echo "
</article>

<div class='comment-cm'>";
        // line 176
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_comment", [])), "html", null, true));
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "sites/all/themes/giaidieu/templates/nodes/node--articles--full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  241 => 176,  236 => 173,  228 => 169,  226 => 168,  222 => 167,  218 => 166,  215 => 165,  213 => 164,  206 => 159,  202 => 157,  198 => 155,  193 => 152,  187 => 151,  185 => 150,  178 => 146,  170 => 141,  165 => 138,  160 => 136,  154 => 132,  145 => 126,  127 => 111,  122 => 109,  96 => 86,  92 => 84,  84 => 81,  79 => 80,  77 => 79,  73 => 78,  69 => 77,  63 => 76,  61 => 74,  60 => 73,  59 => 72,  58 => 71,  57 => 70,  56 => 69,  55 => 68,);
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
 * Theme override to display a node.
 *
 * Available variables:
 * - node: The node entity with limited access to object properties and methods.
     Only \"getter\" methods (method names starting with \"get\", \"has\", or \"is\")
     and a few common methods such as \"id\" and \"label\" are available. Calling
     other methods (such as node.delete) will result in an exception.
 * - label: The title of the node.
 * - content: All node items. Use {{ content }} to print them all,
 *   or print a subset such as {{ content.field_example }}. Use
 *   {{ content|without('field_example') }} to temporarily suppress the printing
 *   of a given child element.
 * - author_picture: The node author user entity, rendered using the \"compact\"
 *   view mode.
 * - metadata: Metadata for this node.
 * - date: Themed creation date field.
 * - author_name: Themed author name field.
 * - url: Direct URL of the current node.
 * - display_submitted: Whether submission information should be displayed.
 * - attributes: HTML attributes for the containing element.
 *   The attributes.class element may contain one or more of the following
 *   classes:
 *   - node: The current template type (also known as a \"theming hook\").
 *   - node--type-[type]: The current node type. For example, if the node is an
 *     \"Article\" it would result in \"node--type-article\". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - node--view-mode-[view_mode]: The View Mode of the node; for example, a
 *     teaser would result in: \"node--view-mode-teaser\", and
 *     full: \"node--view-mode-full\".
 *   The following are controlled through the node publishing options.
 *   - node--promoted: Appears on nodes promoted to the front page.
 *   - node--sticky: Appears on nodes ordered above other non-sticky nodes in
 *     teaser listings.
 *   - node--unpublished: Appears on unpublished nodes visible only to site
 *     admins.
 * - title_attributes: Same as attributes, except applied to the main title
 *   tag that appears in the template.
 * - content_attributes: Same as attributes, except applied to the main
 *   content tag that appears in the template.
 * - author_attributes: Same as attributes, except applied to the author of
 *   the node tag that appears in the template.
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 * - view_mode: View mode; for example, \"teaser\" or \"full\".
 * - teaser: Flag for the teaser state. Will be true if view_mode is 'teaser'.
 * - page: Flag for the full page state. Will be true if view_mode is 'full'.
 * - readmore: Flag for more state. Will be true if the teaser content of the
 *   node cannot hold the main body content.
 * - logged_in: Flag for authenticated user status. Will be true when the
 *   current user is a logged-in member.
 * - is_admin: Flag for admin user status. Will be true when the current user
 *   is an administrator.
 *
 * @ingroup templates
 *
 * @see template_preprocess_node()
 *
 * @todo Remove the id attribute (or make it a class), because if that gets
 *   rendered twice on a page this is invalid CSS for example: two lists
 *   in different view modes.
 */
#}
{% set classes = [
  node.bundle|clean_class,
  node.isPromoted() ? 'is-promoted',
  node.isSticky() ? 'is-sticky',
  not node.isPublished() ? 'is-unpublished',
  view_mode ? view_mode|clean_class,
  'clearfix', 'node-'~node.id,
] %}
<article{{ attributes.addClass(classes) }}{{ attributes.addClass('container') }}>
  {{ title_prefix }}
  {{ title_suffix }}
  {% if not page %}
    <h2{{ title_attributes }}>
      <a href=\"{{ url }}\" rel=\"bookmark\">{{ label }}</a>
    </h2>
  {% endif %}

  <div class=\"search--page-node\">
    {{ bieumautimkiem_node }}
  </div>

  <div class= 'new-item--page-node'>
    <div class= 'new-item__header'>
      <div class= 'new-item__header__logo'>
        <a href='#'>
          <img src=\"/sites/all/themes/giaidieu/images/icon-logo.png\">
        </a>
      </div>
      <div class= 'new-item__header__mid'>
        <div class= 'new-item__header__name'>
          <div class= 'new-item__header__name-author'>
            <a href='#'>Đại Đô Corporation</a>
          </div>
          <div class= 'new-item__header__icon-author'>
            <a href='#'>
              <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"19\" viewBox=\"0 0 19 19\" class=\"icon-author blog-post-homepage-description-fill\" style=\"fill-rule: evenodd;\"><path d=\"M15.3812,6.495914 L12.6789333,8.77258837 C12.6191333,8.84477644 12.5099333,8.85722265 12.4354,8.79997005 C12.4215333,8.79001308 12.4094,8.77756686 12.3998667,8.76429089 L9.78686667,6.14327115 C9.67766667,5.99225704 9.46186667,5.95491839 9.305,6.05863687 C9.26946667,6.08186981 9.23913333,6.11091099 9.21573333,6.14493065 L6.60013333,8.81075677 C6.5464,8.88626383 6.43893333,8.90534803 6.3592,8.85390366 C6.34446667,8.84394669 6.33146667,8.83233022 6.32106667,8.81905425 L3.61966667,6.50587098 C3.5018,6.36149485 3.28426667,6.33577266 3.13346667,6.44861837 C3.0494,6.51167921 3,6.60792997 3,6.70998895 L4,14 L15,14 L16,6.70169148 C16,6.51831719 15.8448667,6.36979232 15.6533333,6.36979232 C15.5476,6.36979232 15.4470667,6.41625821 15.3812,6.495914 Z\"></path></svg>
            </a>
          </div>
        </div>
        <div class= 'new-item__header__time'>
          <div class='new-item__header__dot'></div> 
          {{ node.createdtime | date('F j') }}
          <div class='new-item__header__dot'></div> 
          {{ date }}
        </div>
      </div>
      <div class= 'new-item__header__share'>
        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"19\" viewBox=\"0 0 19 19\" role=\"img\" class=\"icon-share blog-post-homepage-description-fill blog-post-homepage-link-hashtag-hover-fill\"><path d=\"M2.44398805,5.99973295 C1.62345525,5.9690612 0.980075653,5.28418875 1.00047182,4.46312144 C1.02086799,3.64205413 1.69745853,2.98998831 2.51850166,3.0001164 C3.33954478,3.01024449 3.99985313,3.67880182 4,4.50012255 C3.98424812,5.34399206 3.28763905,6.0153508 2.44398805,5.99973295 L2.44398805,5.99973295 Z M2.44398805,10.9997329 C1.62345525,10.9690612 0.980075653,10.2841888 1.00047182,9.46312144 C1.02086799,8.64205413 1.69745853,7.98998831 2.51850166,8.0001164 C3.33954478,8.01024449 3.99985313,8.67880182 4,9.50012255 C3.98424812,10.3439921 3.28763905,11.0153508 2.44398805,10.9997329 L2.44398805,10.9997329 Z M2.44398805,15.9997329 C1.62345525,15.9690612 0.980075653,15.2841888 1.00047182,14.4631214 C1.02086799,13.6420541 1.69745853,12.9899883 2.51850166,13.0001164 C3.33954478,13.0102445 3.99985313,13.6788018 4,14.5001225 C3.98424812,15.3439921 3.28763905,16.0153508 2.44398805,15.9997329 L2.44398805,15.9997329 Z\"></path></svg>
        <div class= 'new-item__header__share-post'>
          <div class= 'new-item__header__share-post__icon'>
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"19\" viewBox=\"0 0 19 19\" role=\"img\" class=\"icon-share_post blog-icon-fill\"><path d=\"M16.9410444,8.39109677 C17.0195644,8.46818967 17.0195644,8.59371274 16.9410444,8.67080564 L11.9026789,13.6176004 C11.7063789,13.8103326 11.3872657,13.8103326 11.1909657,13.6176004 C11.096339,13.5246935 11.0429857,13.3991705 11.0429857,13.2677172 L11.0429857,11.0013834 C7.27402658,11.0013834 4.38690723,12.7339971 2.38263435,16.1972475 C2.27794104,16.3781194 1.99204777,16.3049799 2.0001011,16.0964337 C2.24975438,10.0357454 5.2637137,6.69011101 11.0429857,6.05953059 L11.0429857,3.79418524 C11.0429857,3.52040659 11.268479,3.29999995 11.5463189,3.29999995 C11.6802056,3.29999995 11.8080522,3.35139522 11.9026789,3.44430206 L16.9410444,8.39109677 Z M3.43409745,13.1243046 C5.43837033,11.0576217 7.98624309,10.0139024 11.0434891,10.0139024 L12.0501555,10.0139024 L12.0501555,12.0746551 L15.6600614,8.53035818 L12.0501555,4.98704968 L12.0501555,6.94501178 L11.1542224,7.0418721 C6.94635665,7.50146442 4.39949056,9.49994971 3.43409745,13.1243046 Z\"></path></svg>
          </div>
          <div class= 'new-item__header__share-post__text'>Share Post</div>
        </div>
      </div>
    </div>
    <div class= 'new-item__content'>
      <div class= 'new-item__title'>
        {{ node.getTitle() }}
      </div>
      <div class= 'new-item__summary'>

      </div>
      <div class= 'new-item__img'>
        {{ content.field_image }}
      </div>
      <div class= 'new-item__body'>
        {# <div{{ content_attributes.addClass('content') }}> #}
          {{ content.body }}
        {# </div> #}
      </div>
    </div>
    <div class= 'new-item__social'>
      {{ socialsharingblock_node }}
    </div>
    <div class= 'new-item__bottom'>
      <div class= 'new-item__view'>
      
        {{ node_stats  }} view
      
      </div>
      <div class= 'new-item__comment'>
        {% if comment_count|length > 0 %}
          {{ comment_count  }} comment
        {% else %} 
          0 comment
        {% endif %}
      </div>
      <div class= 'new-item__heart'>
        {{ flag_link }}
        {# {% include 'sites/all/themes/giaidieu/templates/flag-count.html.twig' %} #}
        
      </div>
    </div>
  </div>

  {% if display_submitted %}
    <footer>
      {{ author_picture }}
      <div{{ author_attributes.addClass('author') }}>
        {% trans %}Submitted by {{ author_name }} on {{ date }}{% endtrans %}
        {{ metadata }}
      </div>
    </footer>
  {% endif %}

</article>

<div class='comment-cm'>{{ content.field_comment }}</div>", "sites/all/themes/giaidieu/templates/nodes/node--articles--full.html.twig", "/home/daido/public_html/sites/all/themes/giaidieu/templates/nodes/node--articles--full.html.twig");
    }
}
