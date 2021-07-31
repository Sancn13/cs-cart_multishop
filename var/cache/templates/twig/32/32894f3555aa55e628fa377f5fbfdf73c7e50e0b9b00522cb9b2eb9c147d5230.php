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

/* __string_template__5fce7704733dd0601937d60f949f057954900baa97e9a9a5db34882d8c435413 */
class __TwigTemplate_c39099b2eaced5ce6637c08a17c4d10aa0719d0bce97ebbaa4a7931c2ae7b4cb extends \Twig\Template
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
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "order");
        echo " #";
        echo $this->getAttribute(($context["order_info"] ?? null), "order_id", []);
        echo " ";
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "new_shipment_was_created");
    }

    public function getTemplateName()
    {
        return "__string_template__5fce7704733dd0601937d60f949f057954900baa97e9a9a5db34882d8c435413";
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
        return new Source("{{ company_name }}: {{ __(\"order\") }} #{{ order_info.order_id }} {{ __(\"new_shipment_was_created\") }}", "__string_template__5fce7704733dd0601937d60f949f057954900baa97e9a9a5db34882d8c435413", "");
    }
}
