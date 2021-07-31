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

/* __string_template__d018b3770494aa3d16b9c697c3f54aa3c57d8cb2d153b9b37e56fc1b124b9a13 */
class __TwigTemplate_0f9b35b0e083f096f1e4c984489738c54033e780cc6aac61adf9d4b872228472 extends \Twig\Template
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
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "vendor_plans.plan_payment_text", ["[plan]" => $this->getAttribute(($context["plan"] ?? null), "plan", []), "[price]" => $this->getAttribute(($context["plan"] ?? null), "price", []), "[href]" => ($context["url"] ?? null)]);
        echo "
<br /><br />
";
        // line 4
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->snippetFunction($this->env, $context, "vendorplans.plandetails");
        echo "
";
        // line 5
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->snippetFunction($this->env, $context, "footer");
    }

    public function getTemplateName()
    {
        return "__string_template__d018b3770494aa3d16b9c697c3f54aa3c57d8cb2d153b9b37e56fc1b124b9a13";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 5,  39 => 4,  34 => 2,  30 => 1,);
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
{{ __(\"vendor_plans.plan_payment_text\", {\"[plan]\": plan.plan, \"[price]\": plan.price, \"[href]\": url}) }}
<br /><br />
{{ snippet(\"vendorplans.plandetails\") }}
{{ snippet(\"footer\") }}", "__string_template__d018b3770494aa3d16b9c697c3f54aa3c57d8cb2d153b9b37e56fc1b124b9a13", "");
    }
}
