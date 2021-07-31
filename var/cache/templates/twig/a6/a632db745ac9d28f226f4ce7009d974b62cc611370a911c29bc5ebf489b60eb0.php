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

/* __string_template__b90e02e1c6891e0a8189fba6796c162438229d424927100434953e3b07a99408 */
class __TwigTemplate_5aa7807ba37f22bf7a54c9b7c0b485a49e2fb65de1a188ddbfb6c4fd32f22dc4 extends \Twig\Template
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
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "text_company_status_changed", ["[company]" => $this->getAttribute(($context["company"] ?? null), "company_name", []), "[status]" => ($context["status"] ?? null)]);
        echo "

<br /><br />

";
        // line 9
        if (($context["reason"] ?? null)) {
            // line 10
            echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "reason");
            echo ": ";
            echo ($context["reason"] ?? null);
            echo "
<br /><br />

";
        }
        // line 14
        if ((($context["e_account"] ?? null) == "updated")) {
            // line 15
            echo "    ";
            echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "text_company_status_new_to_active_administrator_updated", ["[link]" => ($context["vendor_url"] ?? null), "[link_text]" => $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->punyDecodeFilter(($context["vendor_url"] ?? null)), "[login]" => ($context["e_username"] ?? null)]);
            echo "
";
        } elseif ((        // line 16
($context["e_account"] ?? null) == "new")) {
            // line 17
            echo "    ";
            echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "text_company_status_new_to_active_administrator_created", ["[link]" => ($context["vendor_url"] ?? null), "[link_text]" => $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->punyDecodeFilter(($context["vendor_url"] ?? null)), "[login]" => ($context["e_username"] ?? null), "[password]" => ($context["e_password"] ?? null)]);
            echo "
";
        }
        // line 19
        echo "
";
        // line 20
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->snippetFunction($this->env, $context, "footer");
    }

    public function getTemplateName()
    {
        return "__string_template__b90e02e1c6891e0a8189fba6796c162438229d424927100434953e3b07a99408";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 20,  73 => 19,  67 => 17,  65 => 16,  60 => 15,  58 => 14,  49 => 10,  47 => 9,  40 => 5,  35 => 3,  30 => 1,);
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

  {{ __(\"text_company_status_changed\", {\"[company]\": company.company_name, \"[status]\": status}) }}

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

{{ snippet(\"footer\") }}", "__string_template__b90e02e1c6891e0a8189fba6796c162438229d424927100434953e3b07a99408", "");
    }
}
