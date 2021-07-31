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

/* __string_template__c310ec1162b97a72adc17d0c7f637fbd664d57d8e83e309a36d2fb1769293284 */
class __TwigTemplate_033bfea76a8bd40df119a5a0baa9c73676ba7c43ed1c310c83e15e20ba8c8618 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->snippetFunction($this->env, $context, "header", ["title" => $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "low_stock_subj", ["[product]" => ((($context["product"] ?? null) . " #") . ($context["product_id"] ?? null))])]);
        echo "

    <table class=\"info\">
      <tr>
        <td>";
        // line 5
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "product");
        echo ":</td>
        <td>";
        // line 6
        echo ($context["product"] ?? null);
        echo "</td>
      </tr>
      <tr>
        <td>";
        // line 9
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "id");
        echo ":</td>
        <td>";
        // line 10
        echo ($context["product_id"] ?? null);
        echo "</td>
      </tr>
      <tr>
        <td>";
        // line 13
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "sku");
        echo ":</td>
        <td>";
        // line 14
        echo ($context["product_code"] ?? null);
        echo "</td>
      </tr>
      <tr>
        <td>";
        // line 17
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "qty");
        echo ":</td>
        <td><b>";
        // line 18
        echo ($context["new_qty"] ?? null);
        echo "</b></td>
      </tr>
      ";
        // line 20
        if (($context["product_options"] ?? null)) {
            // line 21
            echo "      <tr>
        <td colspan=\"2\">";
            // line 22
            echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "product_options");
            echo ":
          <br>
          <hr>
        </td>
      </tr>
      ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["product_options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 28
                echo "      <tr>
        <td>";
                // line 29
                echo $this->getAttribute($context["option"], "option_name", []);
                echo ":</td>
        <td>";
                // line 30
                echo $this->getAttribute($context["option"], "variant_name", []);
                echo "</td>
      </tr>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo " ";
        }
        // line 33
        echo "    </table>

";
        // line 35
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->snippetFunction($this->env, $context, "footer");
    }

    public function getTemplateName()
    {
        return "__string_template__c310ec1162b97a72adc17d0c7f637fbd664d57d8e83e309a36d2fb1769293284";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 35,  112 => 33,  109 => 32,  100 => 30,  96 => 29,  93 => 28,  89 => 27,  81 => 22,  78 => 21,  76 => 20,  71 => 18,  67 => 17,  61 => 14,  57 => 13,  51 => 10,  47 => 9,  41 => 6,  37 => 5,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{{ snippet(\"header\", {\"title\":__(\"low_stock_subj\", {\"[product]\": \"#{product} ##{product_id}\"}) } ) }}

    <table class=\"info\">
      <tr>
        <td>{{ __(\"product\") }}:</td>
        <td>{{ product }}</td>
      </tr>
      <tr>
        <td>{{ __(\"id\") }}:</td>
        <td>{{ product_id }}</td>
      </tr>
      <tr>
        <td>{{ __(\"sku\") }}:</td>
        <td>{{ product_code }}</td>
      </tr>
      <tr>
        <td>{{ __(\"qty\") }}:</td>
        <td><b>{{ new_qty }}</b></td>
      </tr>
      {% if product_options %}
      <tr>
        <td colspan=\"2\">{{ __(\"product_options\") }}:
          <br>
          <hr>
        </td>
      </tr>
      {% for option in product_options %}
      <tr>
        <td>{{ option.option_name }}:</td>
        <td>{{ option.variant_name }}</td>
      </tr>
      {% endfor %} {% endif %}
    </table>

{{ snippet(\"footer\") }}", "__string_template__c310ec1162b97a72adc17d0c7f637fbd664d57d8e83e309a36d2fb1769293284", "");
    }
}
