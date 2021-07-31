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

/* __string_template__c48af0a48dff47499f1980a8f42f6b27077dd4bddbc02202ba0d7cf8e5d7bfeb */
class __TwigTemplate_19ba53640ba8103a9650131f4921f39d160549d0e88d4b784d07bfe012eb0716 extends \Twig\Template
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
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "vendor_debt_payout.vendor_status_changed.subject", ["[vendor_name]" => ($context["vendor_name"] ?? null), "[status]" => ($context["status_to"] ?? null)]);
    }

    public function getTemplateName()
    {
        return "__string_template__c48af0a48dff47499f1980a8f42f6b27077dd4bddbc02202ba0d7cf8e5d7bfeb";
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
        return new Source("{{ __(\"vendor_debt_payout.vendor_status_changed.subject\", {\"[vendor_name]\": vendor_name, \"[status]\": status_to}) }}", "__string_template__c48af0a48dff47499f1980a8f42f6b27077dd4bddbc02202ba0d7cf8e5d7bfeb", "");
    }
}
