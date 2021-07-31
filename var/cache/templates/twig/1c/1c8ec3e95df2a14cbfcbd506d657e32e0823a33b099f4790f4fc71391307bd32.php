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

/* __string_template__355903ce5e46b7f178d9d1882c9ef6e7afcba9768f2aa74c92175d3c2363663a */
class __TwigTemplate_31ad46ec83bfae12949039882b99f2f595cac116a5d54479aff6c88e1d279561 extends \Twig\Template
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
        echo "<table>
    <tr>
        <td>";
        // line 3
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "vendor_plans.plan");
        echo ":</td>
        <td>";
        // line 4
        echo $this->getAttribute(($context["plan"] ?? null), "plan", []);
        echo "</td>
    </tr>
    <tr>
        <td>";
        // line 7
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "price");
        echo ":</td>
        <td>";
        // line 8
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->priceFilter($this->getAttribute(($context["plan"] ?? null), "price", []));
        echo "&nbsp;(";
        echo twig_lower_filter($this->env, $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, ("vendor_plans.periodicity_" . $this->getAttribute(($context["plan"] ?? null), "periodicity", []))));
        echo ")</td>
    </tr>
    <tr>
        <td>";
        // line 11
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "vendor_plans.products_limit");
        echo ":</td>
        <td>";
        // line 12
        if ($this->getAttribute(($context["plan"] ?? null), "products_limit", [])) {
            echo " ";
            echo $this->getAttribute(($context["plan"] ?? null), "products_limit", []);
            echo " ";
        } else {
            echo " ";
            echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "vendor_plans.unlimited");
            echo " ";
        }
        echo "</td>
    </tr>
    <tr>
        <td>";
        // line 15
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "vendor_plans.revenue_up_to");
        echo ":</td>
        <td>";
        // line 16
        if ($this->getAttribute(($context["plan"] ?? null), "revenue_limit", [])) {
            echo " ";
            echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->priceFilter($this->getAttribute(($context["plan"] ?? null), "revenue_limit", []));
            echo " ";
        } else {
            echo " ";
            echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "vendor_plans.unlimited");
            echo " ";
        }
        echo "</td>
    </tr>
    <tr>
        <td>";
        // line 19
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "vendor_plans.transaction_fee");
        echo ":</td>
        <td>";
        // line 20
        echo $this->getAttribute(($context["plan"] ?? null), "commission", []);
        echo "(%)</td>
    </tr>
    <tr>
        <td>";
        // line 23
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "vendor_plans.vendor_store");
        echo ":</td>
        <td>";
        // line 24
        if ($this->getAttribute(($context["plan"] ?? null), "vendor_store", [])) {
            echo " ";
            echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "yes");
            echo " ";
        } else {
            echo " ";
            echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "no");
            echo " ";
        }
        echo "</td>
    </tr>
    ";
        // line 26
        if ($this->getAttribute(($context["plan"] ?? null), "description", [])) {
            // line 27
            echo "    <tr>
        <td>";
            // line 28
            echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "description");
            echo ":</td>
        <td>";
            // line 29
            echo $this->getAttribute(($context["plan"] ?? null), "description", []);
            echo "</td>
    </tr>
    ";
        }
        // line 32
        echo "</table>";
    }

    public function getTemplateName()
    {
        return "__string_template__355903ce5e46b7f178d9d1882c9ef6e7afcba9768f2aa74c92175d3c2363663a";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 32,  128 => 29,  124 => 28,  121 => 27,  119 => 26,  106 => 24,  102 => 23,  96 => 20,  92 => 19,  78 => 16,  74 => 15,  60 => 12,  56 => 11,  48 => 8,  44 => 7,  38 => 4,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<table>
    <tr>
        <td>{{ __(\"vendor_plans.plan\") }}:</td>
        <td>{{ plan.plan }}</td>
    </tr>
    <tr>
        <td>{{ __(\"price\") }}:</td>
        <td>{{ plan.price|price }}&nbsp;({{ __(\"vendor_plans.periodicity_\" ~ plan.periodicity)|lower }})</td>
    </tr>
    <tr>
        <td>{{ __(\"vendor_plans.products_limit\") }}:</td>
        <td>{% if plan.products_limit %} {{ plan.products_limit }} {% else %} {{ __(\"vendor_plans.unlimited\") }} {% endif %}</td>
    </tr>
    <tr>
        <td>{{ __(\"vendor_plans.revenue_up_to\") }}:</td>
        <td>{% if plan.revenue_limit %} {{ plan.revenue_limit|price }} {% else %} {{ __(\"vendor_plans.unlimited\") }} {% endif %}</td>
    </tr>
    <tr>
        <td>{{ __(\"vendor_plans.transaction_fee\") }}:</td>
        <td>{{ plan.commission }}(%)</td>
    </tr>
    <tr>
        <td>{{ __(\"vendor_plans.vendor_store\") }}:</td>
        <td>{% if plan.vendor_store %} {{ __(\"yes\") }} {% else %} {{ __(\"no\") }} {% endif %}</td>
    </tr>
    {% if plan.description %}
    <tr>
        <td>{{ __(\"description\") }}:</td>
        <td>{{ plan.description }}</td>
    </tr>
    {% endif %}
</table>", "__string_template__355903ce5e46b7f178d9d1882c9ef6e7afcba9768f2aa74c92175d3c2363663a", "");
    }
}
