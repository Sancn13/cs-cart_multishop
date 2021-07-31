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

/* __string_template__08a2c85863138bd9186856145ade701b91bd77ef8359cb6f607bd186574a15e6 */
class __TwigTemplate_68baa9fd1b296b5533896e332a0b05cb15ef6d6fb8ef01f8992affb3e502ef4a extends \Twig\Template
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
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "vendor_payouts.payout_approved");
    }

    public function getTemplateName()
    {
        return "__string_template__08a2c85863138bd9186856145ade701b91bd77ef8359cb6f607bd186574a15e6";
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
        return new Source("{{ payment.vendor }}: {{ __(\"vendor_payouts.payout_approved\") }}", "__string_template__08a2c85863138bd9186856145ade701b91bd77ef8359cb6f607bd186574a15e6", "");
    }
}
