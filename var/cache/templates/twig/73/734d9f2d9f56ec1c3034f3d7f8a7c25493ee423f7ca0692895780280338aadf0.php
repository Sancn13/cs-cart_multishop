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

/* __string_template__714642a60a16eadbfd43985883ebd815dcc75db07c58f7a01e5ff565dbd03b10 */
class __TwigTemplate_7ebb90ef4803ee239e8075a1b31cf7dca0fc2ba8df05e8e55c280cf12960d58b extends \Twig\Template
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
        echo ($context["company_name"] ?? null);
        echo ": ";
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "low_stock_subj", ["[product]" => ((($context["product"] ?? null) . " #") . ($context["product_id"] ?? null))]);
    }

    public function getTemplateName()
    {
        return "__string_template__714642a60a16eadbfd43985883ebd815dcc75db07c58f7a01e5ff565dbd03b10";
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
        return new Source("{{ company_name }}: {{ __(\"low_stock_subj\", {\"[product]\": \"#{product} ##{product_id}\"}) }}", "__string_template__714642a60a16eadbfd43985883ebd815dcc75db07c58f7a01e5ff565dbd03b10", "");
    }
}
