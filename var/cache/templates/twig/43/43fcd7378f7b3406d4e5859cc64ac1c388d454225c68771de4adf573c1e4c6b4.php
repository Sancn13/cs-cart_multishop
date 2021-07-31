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

/* __string_template__2b65bdc543161385e1279cf6d9629ddd040712a5f3c6e42c8a7865546eb217d7 */
class __TwigTemplate_22981c2d26343260e2572706398a94969165aed081657c8d08058333469c6ebb extends \Twig\Template
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
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->snippetFunction($this->env, $context, "header");
        echo "
";
        // line 3
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "vendor_debt_payout.vendor_days_before_suspend.message", ["[marketplace]" => ($context["marketplace"] ?? null)]);
        echo "
";
        // line 4
        if (($context["reason"] ?? null)) {
            // line 5
            echo "    ";
            echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "reason");
            echo ": ";
            echo ($context["reason"] ?? null);
            echo "
    <br /><br />
";
        }
        // line 8
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->snippetFunction($this->env, $context, "footer");
        echo "
            ";
    }

    public function getTemplateName()
    {
        return "__string_template__2b65bdc543161385e1279cf6d9629ddd040712a5f3c6e42c8a7865546eb217d7";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 8,  43 => 5,  41 => 4,  37 => 3,  33 => 2,  30 => 1,);
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
                {{ snippet(\"header\") }}
{{ __(\"vendor_debt_payout.vendor_days_before_suspend.message\", {\"[marketplace]\": marketplace}) }}
{% if reason %}
    {{ __(\"reason\") }}: {{ reason }}
    <br /><br />
{% endif %}
{{ snippet(\"footer\") }}
            ", "__string_template__2b65bdc543161385e1279cf6d9629ddd040712a5f3c6e42c8a7865546eb217d7", "");
    }
}
