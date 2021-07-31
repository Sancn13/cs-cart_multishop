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

/* __string_template__508c68959092f5f659ada14fb7f5293bbcb08ba5b09ba8760994b04325ca7065 */
class __TwigTemplate_ebdbf57a48b30b9604faf7dfff09a791bf11d0c33b62c13ab7810836d531c8f7 extends \Twig\Template
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
        echo "
                ";
        // line 2
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->snippetFunction($this->env, $context, "header");
        echo "
";
        // line 3
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "vendor_debt_payout.weekly_digest_of_debtors.message", ["[href]" => ($context["href"] ?? null)]);
        echo "
<br /><br />
";
        // line 5
        if (($context["suspended_vendors"] ?? null)) {
            // line 6
            echo "    <b>";
            echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "vendor_debt_payout.list_of_vendors_got_suspended_label");
            echo "</b>
    <br /><br />
    <table width=\"50%\">
        <tr><th>";
            // line 9
            echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "vendor");
            echo "</th><th>";
            echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "vendor_debt_payout.debt_owned");
            echo "</th></tr>
        ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["suspended_vendors"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["vendor"]) {
                // line 11
                echo "            <tr><td>";
                echo $this->getAttribute($context["vendor"], "company", []);
                echo "</td><td>";
                echo $this->getAttribute($context["vendor"], "debt", []);
                echo "</td></tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vendor'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "    </table>
";
        } else {
            // line 15
            echo "    <b>";
            echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "vendor_debt_payout.empty_list_of_vendors_got_suspended_label");
            echo "</b>
";
        }
        // line 17
        echo "<br /><br />
";
        // line 18
        if (($context["active_vendors"] ?? null)) {
            // line 19
            echo "    <b>";
            echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "vendor_debt_payout.list_of_vendors_got_suspended_and_paid_label");
            echo "</b>
    <br /><br />
    <table width=\"50%\">
        <tr><th>";
            // line 22
            echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "vendor");
            echo "</th><th>";
            echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "vendor_debt_payout.account_balance");
            echo "</th></tr>
        ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["active_vendors"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["vendor"]) {
                // line 24
                echo "            <tr><td>";
                echo $this->getAttribute($context["vendor"], "company", []);
                echo "</td><td>";
                echo $this->getAttribute($context["vendor"], "balance", []);
                echo "</td></tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vendor'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "    </table>
";
        } else {
            // line 28
            echo "    <b>";
            echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "vendor_debt_payout.empty_list_of_vendors_got_suspended_and_paid_label");
            echo "</b>
";
        }
        // line 30
        echo "<br /><br />
<b>";
        // line 31
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "vendor_debt_payout.total_debts", ["[total_debt]" => ($context["total_debt"] ?? null)]);
        echo "</b>
";
        // line 32
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->snippetFunction($this->env, $context, "footer");
        echo "
            ";
    }

    public function getTemplateName()
    {
        return "__string_template__508c68959092f5f659ada14fb7f5293bbcb08ba5b09ba8760994b04325ca7065";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 32,  128 => 31,  125 => 30,  119 => 28,  115 => 26,  104 => 24,  100 => 23,  94 => 22,  87 => 19,  85 => 18,  82 => 17,  76 => 15,  72 => 13,  61 => 11,  57 => 10,  51 => 9,  44 => 6,  42 => 5,  37 => 3,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("
                {{ snippet(\"header\") }}
{{ __(\"vendor_debt_payout.weekly_digest_of_debtors.message\", {\"[href]\": href}) }}
<br /><br />
{% if suspended_vendors %}
    <b>{{ __(\"vendor_debt_payout.list_of_vendors_got_suspended_label\") }}</b>
    <br /><br />
    <table width=\"50%\">
        <tr><th>{{ __(\"vendor\") }}</th><th>{{ __(\"vendor_debt_payout.debt_owned\") }}</th></tr>
        {% for vendor in suspended_vendors %}
            <tr><td>{{vendor.company}}</td><td>{{vendor.debt}}</td></tr>
        {% endfor %}
    </table>
{% else %}
    <b>{{ __(\"vendor_debt_payout.empty_list_of_vendors_got_suspended_label\") }}</b>
{% endif %}
<br /><br />
{% if active_vendors %}
    <b>{{ __(\"vendor_debt_payout.list_of_vendors_got_suspended_and_paid_label\") }}</b>
    <br /><br />
    <table width=\"50%\">
        <tr><th>{{ __(\"vendor\") }}</th><th>{{ __(\"vendor_debt_payout.account_balance\") }}</th></tr>
        {% for vendor in active_vendors %}
            <tr><td>{{vendor.company}}</td><td>{{vendor.balance}}</td></tr>
        {% endfor %}
    </table>
{% else %}
    <b>{{ __(\"vendor_debt_payout.empty_list_of_vendors_got_suspended_and_paid_label\") }}</b>
{% endif %}
<br /><br />
<b>{{ __(\"vendor_debt_payout.total_debts\", {\"[total_debt]\": total_debt}) }}</b>
{{ snippet(\"footer\") }}
            ", "__string_template__508c68959092f5f659ada14fb7f5293bbcb08ba5b09ba8760994b04325ca7065", "");
    }
}
