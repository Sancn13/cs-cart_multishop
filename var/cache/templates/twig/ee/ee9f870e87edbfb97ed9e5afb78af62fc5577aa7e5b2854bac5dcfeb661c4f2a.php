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

/* __string_template__a92a9fd499692c9c93cfbd1e998d4b56e0a882ca42088aa7e6bb3456fdc81b8a */
class __TwigTemplate_63bd8a68095e4fb20dd8ab2f33c28123bed59cc975dfe5dbd643f238a28511b9 extends \Twig\Template
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
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "hello");
        echo ",<br /><br />

";
        // line 5
        if ((((((($context["status_from"] ?? null) == "A") && (($context["status_to"] ?? null) == "D")) || ((($context["status_from"] ?? null) == "D") && (($context["status_to"] ?? null) == "A"))) || ((($context["status_from"] ?? null) == "P") && (($context["status_to"] ?? null) == "D"))) || ((($context["status_from"] ?? null) == "D") && (($context["status_to"] ?? null) == "P")))) {
            // line 6
            echo "    ";
            echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "text_company_status_changed", ["[company]" => $this->getAttribute(($context["company"] ?? null), "company_name", []), "[status]" => ($context["status"] ?? null)]);
            echo "
";
        } elseif (((        // line 7
($context["status_from"] ?? null) == "A") && (($context["status_to"] ?? null) == "P"))) {
            // line 8
            echo "    ";
            echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "text_company_status_active_to_pending", ["[company]" => $this->getAttribute(($context["company"] ?? null), "company_name", [])]);
            echo "
";
        } elseif (((        // line 9
($context["status_from"] ?? null) == "N") && (($context["status_to"] ?? null) == "A"))) {
            // line 10
            echo "    ";
            echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "text_company_status_new_to_active", ["[company]" => $this->getAttribute(($context["company"] ?? null), "company_name", [])]);
            echo "
";
        } elseif (((        // line 11
($context["status_from"] ?? null) == "N") && (($context["status_to"] ?? null) == "D"))) {
            // line 12
            echo "    ";
            echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "text_company_status_new_to_disable", ["[company]" => $this->getAttribute(($context["company"] ?? null), "company_name", [])]);
            echo "
";
        } elseif (((        // line 13
($context["status_from"] ?? null) == "N") && (($context["status_to"] ?? null) == "P"))) {
            // line 14
            echo "    ";
            echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "text_company_status_new_to_pending", ["[company]" => $this->getAttribute(($context["company"] ?? null), "company_name", [])]);
            echo "
";
        } elseif (((        // line 15
($context["status_from"] ?? null) == "P") && (($context["status_to"] ?? null) == "A"))) {
            // line 16
            echo "    ";
            echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "text_company_status_pending_to_active", ["[company]" => $this->getAttribute(($context["company"] ?? null), "company_name", [])]);
            echo "
";
        }
        // line 18
        echo "
<br /><br />

";
        // line 21
        if (($context["reason"] ?? null)) {
            // line 22
            echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "reason");
            echo ": ";
            echo ($context["reason"] ?? null);
            echo "
<br /><br />
";
        }
        // line 25
        echo "
";
        // line 26
        if ((($context["e_account"] ?? null) == "updated")) {
            // line 27
            echo "    ";
            echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "text_company_status_new_to_active_administrator_updated", ["[link]" => ($context["vendor_url"] ?? null), "[link_text]" => $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->punyDecodeFilter(($context["vendor_url"] ?? null)), "[login]" => ($context["e_username"] ?? null)]);
            echo "
";
        } elseif ((        // line 28
($context["e_account"] ?? null) == "new")) {
            // line 29
            echo "    ";
            echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "text_company_status_new_to_active_administrator_created", ["[link]" => ($context["vendor_url"] ?? null), "[link_text]" => $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->punyDecodeFilter(($context["vendor_url"] ?? null)), "[login]" => ($context["e_username"] ?? null), "[password]" => ($context["e_password"] ?? null)]);
            echo "
";
        }
        // line 31
        echo "
";
        // line 32
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->snippetFunction($this->env, $context, "footer");
    }

    public function getTemplateName()
    {
        return "__string_template__a92a9fd499692c9c93cfbd1e998d4b56e0a882ca42088aa7e6bb3456fdc81b8a";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 32,  116 => 31,  110 => 29,  108 => 28,  103 => 27,  101 => 26,  98 => 25,  90 => 22,  88 => 21,  83 => 18,  77 => 16,  75 => 15,  70 => 14,  68 => 13,  63 => 12,  61 => 11,  56 => 10,  54 => 9,  49 => 8,  47 => 7,  42 => 6,  40 => 5,  35 => 3,  30 => 1,);
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

  {{ __(\"hello\") }},<br /><br />

{% if (status_from == \"A\" and status_to == \"D\") or (status_from == \"D\" and status_to == \"A\") or (status_from == \"P\" and status_to == \"D\") or (status_from == \"D\" and status_to == \"P\") %}
    {{ __(\"text_company_status_changed\", {\"[company]\": company.company_name, \"[status]\": status}) }}
{% elseif status_from == \"A\" and status_to == \"P\" %}
    {{ __(\"text_company_status_active_to_pending\", {\"[company]\": company.company_name}) }}
{% elseif status_from == \"N\" and status_to == \"A\" %}
    {{ __(\"text_company_status_new_to_active\", {\"[company]\": company.company_name}) }}
{% elseif status_from == \"N\" and status_to == \"D\" %}
    {{ __(\"text_company_status_new_to_disable\", {\"[company]\": company.company_name}) }}
{% elseif status_from == \"N\" and status_to == \"P\" %}
    {{ __(\"text_company_status_new_to_pending\", {\"[company]\": company.company_name}) }}
{% elseif status_from == \"P\" and status_to == \"A\" %}
    {{ __(\"text_company_status_pending_to_active\", {\"[company]\": company.company_name}) }}
{% endif %}

<br /><br />

{% if reason %}
{{ __(\"reason\") }}: {{ reason }}
<br /><br />
{% endif %}

{% if e_account == 'updated' %}
    {{ __(\"text_company_status_new_to_active_administrator_updated\", {\"[link]\": vendor_url, \"[link_text]\": vendor_url|puny_decode, \"[login]\": e_username}) }}
{% elseif e_account == 'new' %}
    {{ __(\"text_company_status_new_to_active_administrator_created\", {\"[link]\": vendor_url, \"[link_text]\": vendor_url|puny_decode, \"[login]\": e_username, \"[password]\": e_password}) }}
{% endif %}

{{ snippet(\"footer\") }}", "__string_template__a92a9fd499692c9c93cfbd1e998d4b56e0a882ca42088aa7e6bb3456fdc81b8a", "");
    }
}
