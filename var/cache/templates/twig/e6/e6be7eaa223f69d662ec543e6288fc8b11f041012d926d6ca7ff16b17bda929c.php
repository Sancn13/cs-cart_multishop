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

/* __string_template__ecadee73d03c2708eadffdd8c0e9201fa877817b481182f39fcd7e99aba32bc1 */
class __TwigTemplate_b5df803fef09198b7860490865fa566c09193f653972d5533252aa54e1ad7cbd extends \Twig\Template
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
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->snippetFunction($this->env, $context, "header", ["title" => $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "change_order_status_c_subj", ["[order]" => $this->getAttribute(($context["order_info"] ?? null), "order_id", [])])]);
        echo "
    ";
        // line 2
        if ($this->getAttribute(($context["order_info"] ?? null), "firstname", [])) {
            echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "hello_name", ["[name]" => $this->getAttribute(($context["order_info"] ?? null), "firstname", [])]);
            echo " ";
        } else {
            echo " ";
            echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "hello");
            echo ",  ";
            echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "customer");
            echo " ";
        }
        // line 3
        echo "    <br />
    ";
        // line 4
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "change_order_status_default_text", ["[status]" => $this->getAttribute(($context["order_status"] ?? null), "description", [])]);
        echo "
    <br />
    <br /> ";
        // line 6
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->includeDocFunction($this->env, $context, "order.summary", $this->getAttribute(($context["order_info"] ?? null), "order_id", []));
        echo "
  ";
        // line 7
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->snippetFunction($this->env, $context, "footer");
    }

    public function getTemplateName()
    {
        return "__string_template__ecadee73d03c2708eadffdd8c0e9201fa877817b481182f39fcd7e99aba32bc1";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 7,  53 => 6,  48 => 4,  45 => 3,  34 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{{ snippet(\"header\", {\"title\": __(\"change_order_status_c_subj\", {\"[order]\": order_info.order_id}) } ) }}
    {% if order_info.firstname %}{{__(\"hello_name\", {\"[name]\" : order_info.firstname})}} {% else %} {{ __(\"hello\") }},  {{ __(\"customer\") }} {% endif %}
    <br />
    {{ __(\"change_order_status_default_text\", {\"[status]\": order_status.description}) }}
    <br />
    <br /> {{ include_doc(\"order.summary\", order_info.order_id) }}
  {{ snippet(\"footer\") }}", "__string_template__ecadee73d03c2708eadffdd8c0e9201fa877817b481182f39fcd7e99aba32bc1", "");
    }
}
