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

/* __string_template__5d3b6ebc77c4a7f1a109177f7d217ed0a580b593674359e82c060ae052a34c5d */
class __TwigTemplate_2171aff2138f47f551cfbe8273959f522dfffb90907d099438e96f564d2f8147 extends \Twig\Template
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
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "vendor_debt_payout.vendor_status_changed.reason", ["[amount]" => ($context["amount"] ?? null), "[date]" => ($context["date"] ?? null)]);
        echo "
            ";
    }

    public function getTemplateName()
    {
        return "__string_template__5d3b6ebc77c4a7f1a109177f7d217ed0a580b593674359e82c060ae052a34c5d";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 2,  30 => 1,);
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
                {{ __(\"vendor_debt_payout.vendor_status_changed.reason\", {\"[amount]\": amount, \"[date]\": date}) }}
            ", "__string_template__5d3b6ebc77c4a7f1a109177f7d217ed0a580b593674359e82c060ae052a34c5d", "");
    }
}
