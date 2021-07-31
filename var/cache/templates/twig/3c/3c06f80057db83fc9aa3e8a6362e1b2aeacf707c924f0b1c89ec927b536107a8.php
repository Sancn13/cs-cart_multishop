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

/* __string_template__4ee188bfc173ffcb9abd55cf6295cebf14170247e4e89df8d06deb33cdfa2f65 */
class __TwigTemplate_794bb9ce38618e02547535cd3cbd2957f67e7940f0545ef1b28060b3eb0662f2 extends \Twig\Template
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
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->snippetFunction($this->env, $context, "header");
        echo "
";
        // line 2
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "hello");
        echo ",
<br />
<br />
";
        // line 5
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "vendor_payouts.new_payout_issued_text", ["[amount]" => $this->getAttribute(($context["payment"] ?? null), "amount", []), "[issuer]" => $this->getAttribute(($context["payment"] ?? null), "initiator", [])]);
        echo ".
";
        // line 6
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "vendor_payouts.view_details");
        echo ": <a href=\"";
        echo ($context["accounting_url"] ?? null);
        echo "\">";
        echo ($context["accounting_url"] ?? null);
        echo "</a>
";
        // line 7
        if ($this->getAttribute(($context["payment"] ?? null), "comments", [])) {
            // line 8
            echo "    <br />
    <br />
    ";
            // line 10
            echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "vendor_payouts.payout_comments");
            echo ":
    <br />
    ";
            // line 12
            echo $this->getAttribute(($context["payment"] ?? null), "comments", []);
            echo "
";
        }
        // line 14
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->snippetFunction($this->env, $context, "footer");
    }

    public function getTemplateName()
    {
        return "__string_template__4ee188bfc173ffcb9abd55cf6295cebf14170247e4e89df8d06deb33cdfa2f65";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 14,  63 => 12,  58 => 10,  54 => 8,  52 => 7,  44 => 6,  40 => 5,  34 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{{ snippet(\"header\") }}
{{ __(\"hello\") }},
<br />
<br />
{{ __(\"vendor_payouts.new_payout_issued_text\", {\"[amount]\": payment.amount, \"[issuer]\": payment.initiator}) }}.
{{ __(\"vendor_payouts.view_details\") }}: <a href=\"{{ accounting_url }}\">{{ accounting_url }}</a>
{% if payment.comments %}
    <br />
    <br />
    {{ __(\"vendor_payouts.payout_comments\") }}:
    <br />
    {{ payment.comments }}
{% endif %}
{{ snippet(\"footer\") }}", "__string_template__4ee188bfc173ffcb9abd55cf6295cebf14170247e4e89df8d06deb33cdfa2f65", "");
    }
}
