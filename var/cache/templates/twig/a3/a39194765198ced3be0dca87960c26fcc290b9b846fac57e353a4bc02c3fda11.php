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

/* __string_template__686526a826661ff33da5428fe4a884a510b6106f198c0540428c45f8a48331b4 */
class __TwigTemplate_ef6251aad07c3712b0b0ecfc90e0e722b0a3b51d21c868f5f07025950c617978 extends \Twig\Template
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
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "vendor_payouts.payout_declined_text", ["[amount]" => $this->getAttribute(($context["payment"] ?? null), "amount", []), "[date]" => $this->getAttribute(($context["payment"] ?? null), "date", [])]);
        echo ".
";
        // line 3
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->snippetFunction($this->env, $context, "footer");
    }

    public function getTemplateName()
    {
        return "__string_template__686526a826661ff33da5428fe4a884a510b6106f198c0540428c45f8a48331b4";
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
{{ __(\"vendor_payouts.payout_declined_text\", {\"[amount]\": payment.amount, \"[date]\": payment.date}) }}.
{{ snippet(\"footer\") }}", "__string_template__686526a826661ff33da5428fe4a884a510b6106f198c0540428c45f8a48331b4", "");
    }
}
