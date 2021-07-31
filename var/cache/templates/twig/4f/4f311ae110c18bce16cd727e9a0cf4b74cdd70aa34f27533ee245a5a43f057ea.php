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

/* __string_template__aba82c07599a0db83e986947b46f5e1d0298db0650b57aa9c8de667cda14d05c */
class __TwigTemplate_192c1d685a51bf444cf290e5576dc10aded075900a6853a8e4bc45605556c712 extends \Twig\Template
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
        echo $this->getAttribute(($context["payment"] ?? null), "vendor", []);
        echo ": ";
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "vendor_payouts.payout_declined");
    }

    public function getTemplateName()
    {
        return "__string_template__aba82c07599a0db83e986947b46f5e1d0298db0650b57aa9c8de667cda14d05c";
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
        return new Source("{{ payment.vendor }}: {{ __(\"vendor_payouts.payout_declined\") }}", "__string_template__aba82c07599a0db83e986947b46f5e1d0298db0650b57aa9c8de667cda14d05c", "");
    }
}
