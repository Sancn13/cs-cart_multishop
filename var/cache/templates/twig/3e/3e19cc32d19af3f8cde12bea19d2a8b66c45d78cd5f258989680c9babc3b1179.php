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

/* __string_template__ed9ca87b7c08368aeb941f6c4f14bdfa4b43fc7ca4d79f58fec5d741ff8aea0e */
class __TwigTemplate_41023564278f82ecbe5f53df76ed26c717012620eedcea254e901a9b68c0d19c extends \Twig\Template
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
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "text_new_post_notification");
        echo "&nbsp;<b>";
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, ($context["object_name"] ?? null));
        echo "</b>:&nbsp;";
        echo $this->getAttribute(($context["object_data"] ?? null), "description", []);
        echo "
<br /><br />
<b>";
        // line 7
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "person_name");
        echo "</b>:&nbsp;";
        echo $this->getAttribute(($context["post_data"] ?? null), "name", []);
        echo "<br />
";
        // line 8
        if ($this->getAttribute(($context["post_data"] ?? null), "rating_value", [])) {
            // line 9
            echo "<b>";
            echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "rating");
            echo "</b>:&nbsp;";
            if (($this->getAttribute(($context["post_data"] ?? null), "rating_value", []) == "5")) {
                echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "excellent");
            } elseif (($this->getAttribute(($context["post_data"] ?? null), "rating_value", []) == "4")) {
                echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "very_good");
            } elseif (($this->getAttribute(($context["post_data"] ?? null), "rating_value", []) == "3")) {
                echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "average");
            } elseif (($this->getAttribute(($context["post_data"] ?? null), "rating_value", []) == "2")) {
                echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "fair");
            } elseif (($this->getAttribute(($context["post_data"] ?? null), "rating_value", []) == "1")) {
                echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "poor");
            }
            // line 10
            echo "<br />
";
        }
        // line 12
        echo "
";
        // line 13
        if ($this->getAttribute(($context["post_data"] ?? null), "message", [])) {
            // line 14
            echo "<b>";
            echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "message");
            echo "</b>:<br />
";
            // line 15
            echo nl2br(twig_escape_filter($this->env, $this->getAttribute(($context["post_data"] ?? null), "message", []), "html", null, true));
            echo "
<br /><br />
";
        }
        // line 18
        echo "
";
        // line 19
        if (($this->getAttribute(($context["post_data"] ?? null), "status", []) == "N")) {
            // line 20
            echo "<b>";
            echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "text_approval_notice");
            echo "</b>
<br />
";
        }
        // line 23
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "view");
        echo ":<br />
<a href=\"";
        // line 24
        echo ($context["url"] ?? null);
        echo "\">";
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->punyDecodeFilter(($context["url"] ?? null));
        echo "</a>
";
        // line 25
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->snippetFunction($this->env, $context, "footer");
    }

    public function getTemplateName()
    {
        return "__string_template__ed9ca87b7c08368aeb941f6c4f14bdfa4b43fc7ca4d79f58fec5d741ff8aea0e";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 25,  108 => 24,  104 => 23,  97 => 20,  95 => 19,  92 => 18,  86 => 15,  81 => 14,  79 => 13,  76 => 12,  72 => 10,  57 => 9,  55 => 8,  49 => 7,  40 => 5,  35 => 3,  30 => 1,);
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

{{ __(\"text_new_post_notification\") }}&nbsp;<b>{{ __(object_name) }}</b>:&nbsp;{{ object_data.description }}
<br /><br />
<b>{{ __(\"person_name\") }}</b>:&nbsp;{{ post_data.name }}<br />
{% if post_data.rating_value %}
<b>{{ __(\"rating\") }}</b>:&nbsp;{% if post_data.rating_value == \"5\" %}{{ __(\"excellent\") }}{% elseif post_data.rating_value == \"4\" %}{{ __(\"very_good\") }}{% elseif post_data.rating_value == \"3\" %}{{ __(\"average\") }}{% elseif post_data.rating_value == \"2\" %}{{ __(\"fair\") }}{% elseif post_data.rating_value == \"1\" %}{{ __(\"poor\") }}{% endif %}
<br />
{% endif %}

{% if post_data.message %}
<b>{{ __(\"message\") }}</b>:<br />
{{ post_data.message|nl2br }}
<br /><br />
{% endif %}

{% if post_data.status == 'N' %}
<b>{{ __(\"text_approval_notice\") }}</b>
<br />
{% endif %}
{{ __(\"view\") }}:<br />
<a href=\"{{ url }}\">{{ url|puny_decode }}</a>
{{ snippet(\"footer\") }}", "__string_template__ed9ca87b7c08368aeb941f6c4f14bdfa4b43fc7ca4d79f58fec5d741ff8aea0e", "");
    }
}
