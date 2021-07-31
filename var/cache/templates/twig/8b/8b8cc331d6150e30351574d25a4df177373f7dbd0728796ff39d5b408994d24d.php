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

/* __string_template__022e6e03a98998825190d192824dbf7fcba071b8d403aac7243120e25cfc64a8 */
class __TwigTemplate_02c88927315ddb649c1c88160af9bbd95542ba937a978a169dc4a96f6e9f3568 extends \Twig\Template
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
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "vendor_plans.revenue_exceeded_text", ["[vendor]" => $this->getAttribute(($context["company"] ?? null), "company", []), "[href]" => ($context["company_url"] ?? null), "[plan]" => $this->getAttribute(($context["plan"] ?? null), "plan", [])]);
        echo "
";
        // line 3
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->snippetFunction($this->env, $context, "footer");
    }

    public function getTemplateName()
    {
        return "__string_template__022e6e03a98998825190d192824dbf7fcba071b8d403aac7243120e25cfc64a8";
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
{{ __(\"vendor_plans.revenue_exceeded_text\", {\"[vendor]\": company.company, \"[href]\": company_url, \"[plan]\": plan.plan}) }}
{{ snippet(\"footer\") }}", "__string_template__022e6e03a98998825190d192824dbf7fcba071b8d403aac7243120e25cfc64a8", "");
    }
}
