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

/* __string_template__edaf056220128a4fc63984fcb16fea00cd5acafb9b6d7788779ce72188e8406e */
class __TwigTemplate_b9172a61a0f8deed625e463d8edea4933d408a5f4ffa6e144d251cb501bde9b8 extends \Twig\Template
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
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "vendor_debt_payout.vendor_status_changed.message", ["[vendor_name]" => ($context["vendor_name"] ?? null), "[status]" => ($context["status_to"] ?? null)]);
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
        return "__string_template__edaf056220128a4fc63984fcb16fea00cd5acafb9b6d7788779ce72188e8406e";
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
{{ __(\"vendor_debt_payout.vendor_status_changed.message\", {\"[vendor_name]\": vendor_name, \"[status]\": status_to}) }}
{% if reason %}
    {{ __(\"reason\") }}: {{ reason }}
    <br /><br />
{% endif %}
{{ snippet(\"footer\") }}
            ", "__string_template__edaf056220128a4fc63984fcb16fea00cd5acafb9b6d7788779ce72188e8406e", "");
    }
}
