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

/* __string_template__b39e4c80e4dbf6aeb1837d2d67cbc51b1909e08e56311fbf85ddd8dd73d60c80 */
class __TwigTemplate_a19b131deba99d2b0fa5085dd7b44316c735b0e8b1113408d93faf49458dd095 extends \Twig\Template
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
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "vendor_payouts.payout_approved_text", ["[amount]" => $this->getAttribute(($context["payment"] ?? null), "amount", []), "[date]" => $this->getAttribute(($context["payment"] ?? null), "date", [])]);
        echo ".
";
        // line 3
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->snippetFunction($this->env, $context, "footer");
    }

    public function getTemplateName()
    {
        return "__string_template__b39e4c80e4dbf6aeb1837d2d67cbc51b1909e08e56311fbf85ddd8dd73d60c80";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 3,  34 => 2,  30 => 1,);
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
{{ __(\"vendor_payouts.payout_approved_text\", {\"[amount]\": payment.amount, \"[date]\": payment.date}) }}.
{{ snippet(\"footer\") }}", "__string_template__b39e4c80e4dbf6aeb1837d2d67cbc51b1909e08e56311fbf85ddd8dd73d60c80", "");
    }
}
