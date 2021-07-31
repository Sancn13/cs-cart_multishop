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

/* __string_template__c78399f245e8de10e63c011d28ba89872e5cab89657f7c9fe9c18ce1dba6774b */
class __TwigTemplate_483b075456e640d703203f3ddeee1f9944bfc0bf2a4eef416a04a10721bc0ed7 extends \Twig\Template
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
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "vendor_debt_payout.weekly_digest_of_debtors.subject", ["[marketplace_name]" => ($context["marketplace_name"] ?? null)]);
    }

    public function getTemplateName()
    {
        return "__string_template__c78399f245e8de10e63c011d28ba89872e5cab89657f7c9fe9c18ce1dba6774b";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{{ __(\"vendor_debt_payout.weekly_digest_of_debtors.subject\", {\"[marketplace_name]\": marketplace_name}) }}", "__string_template__c78399f245e8de10e63c011d28ba89872e5cab89657f7c9fe9c18ce1dba6774b", "");
    }
}
