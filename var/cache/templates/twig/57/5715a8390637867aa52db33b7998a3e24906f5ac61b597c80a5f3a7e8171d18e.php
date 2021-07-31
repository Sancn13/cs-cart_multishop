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

/* __string_template__9acf4b397d483430fa0df93f839c488ea9ab1fd3fb80c59a49c687fda014a925 */
class __TwigTemplate_6589ad0091a71e5f63dc248a40905c425d07b781c656ef667d7296fe56f40536 extends \Twig\Template
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
        // line 3
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "vendor_plans.plan_has_been_changed_text", ["[plan]" => $this->getAttribute(($context["plan"] ?? null), "plan", [])]);
        echo "
<br /><br />
";
        // line 5
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->snippetFunction($this->env, $context, "vendorplans.plandetails");
        echo "
";
        // line 6
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->snippetFunction($this->env, $context, "footer");
    }

    public function getTemplateName()
    {
        return "__string_template__9acf4b397d483430fa0df93f839c488ea9ab1fd3fb80c59a49c687fda014a925";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 6,  40 => 5,  35 => 3,  30 => 1,);
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

{{ __(\"vendor_plans.plan_has_been_changed_text\", {\"[plan]\": plan.plan}) }}
<br /><br />
{{ snippet(\"vendorplans.plandetails\") }}
{{ snippet(\"footer\") }}", "__string_template__9acf4b397d483430fa0df93f839c488ea9ab1fd3fb80c59a49c687fda014a925", "");
    }
}
