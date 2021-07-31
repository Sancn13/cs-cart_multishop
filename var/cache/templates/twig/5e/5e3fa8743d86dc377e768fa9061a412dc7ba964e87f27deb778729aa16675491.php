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

/* __string_template__4c8743d5b783df6927af957541696cb91542f9879f0a3f864e3b26d5324b35d8 */
class __TwigTemplate_cd395a6f7f626ee0f00813c28eb02f0c669434706cde1977119a5786bb1e6a45 extends \Twig\Template
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
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "vendor_payouts.new_payout_issued");
    }

    public function getTemplateName()
    {
        return "__string_template__4c8743d5b783df6927af957541696cb91542f9879f0a3f864e3b26d5324b35d8";
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
        return new Source("{{ payment.vendor }}: {{ __(\"vendor_payouts.new_payout_issued\") }}", "__string_template__4c8743d5b783df6927af957541696cb91542f9879f0a3f864e3b26d5324b35d8", "");
    }
}
