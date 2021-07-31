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

/* __string_template__f4cf05567ada67e904537e3c64da1a3b28383eeb50f640b7c00c95356a4fc501 */
class __TwigTemplate_bd352966a63b0b19c2412549b3c407722a39759b5462c09757bc177a277171d7 extends \Twig\Template
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
        echo "<h2 style=\"margin: 0px; font-size: 22px; font-family: Helvetica, Arial, sans-serif; color: #444444; text-transform: uppercase; padding-bottom: 20px; border-bottom: 3px solid #e8e8e8; margin-bottom: 20px;\">";
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "ship_to");
        echo "</h2>
";
        // line 2
        if ($this->getAttribute(($context["pickup_point"] ?? null), "name", [])) {
            // line 3
            echo "    <p style=\"margin: 0px; font-size:14px; font-family: Helvetica, Arial, sans-serif; padding-bottom: 5px;\">
        <strong>";
            // line 4
            echo $this->getAttribute(($context["pickup_point"] ?? null), "name", []);
            echo "</strong>
    </p>
";
        }
        // line 7
        if ($this->getAttribute(($context["pickup_point"] ?? null), "full_address", [])) {
            // line 8
            echo "    <p style=\"margin: 0px; font-size:14px; font-family: Helvetica, Arial, sans-serif; padding-bottom: 5px;\">
        ";
            // line 9
            echo $this->getAttribute(($context["pickup_point"] ?? null), "full_address", []);
            echo "
    </p>
";
        }
        // line 12
        if ($this->getAttribute(($context["pickup_point"] ?? null), "phone", [])) {
            // line 13
            echo "    <p style=\"margin: 0px; font-size:14px; font-family: Helvetica, Arial, sans-serif; padding-bottom: 5px;\">
        <strong>";
            // line 14
            echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "phone");
            echo ":</strong>
        ";
            // line 15
            echo $this->getAttribute(($context["pickup_point"] ?? null), "phone", []);
            echo "
    </p>
";
        }
        // line 18
        if ($this->getAttribute(($context["pickup_point"] ?? null), "open_hours", [])) {
            // line 19
            echo "    <p style=\"margin: 0px; font-size:14px; font-family: Helvetica, Arial, sans-serif; padding-bottom: 5px;\">
        <strong>";
            // line 20
            echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "open_hours");
            echo ":</strong><br/>
        ";
            // line 21
            echo $this->getAttribute(($context["pickup_point"] ?? null), "open_hours", []);
            echo "
    </p>
";
        }
        // line 24
        if ($this->getAttribute(($context["pickup_point"] ?? null), "description", [])) {
            // line 25
            echo "    <p style=\"margin: 0px; font-size:14px; font-family: Helvetica, Arial, sans-serif; padding-bottom: 5px;\">
        <strong>";
            // line 26
            echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "description");
            echo ":</strong><br/>
        ";
            // line 27
            echo $this->getAttribute(($context["pickup_point"] ?? null), "description", []);
            echo "
    </p>
";
        }
    }

    public function getTemplateName()
    {
        return "__string_template__f4cf05567ada67e904537e3c64da1a3b28383eeb50f640b7c00c95356a4fc501";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 27,  92 => 26,  89 => 25,  87 => 24,  81 => 21,  77 => 20,  74 => 19,  72 => 18,  66 => 15,  62 => 14,  59 => 13,  57 => 12,  51 => 9,  48 => 8,  46 => 7,  40 => 4,  37 => 3,  35 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<h2 style=\"margin: 0px; font-size: 22px; font-family: Helvetica, Arial, sans-serif; color: #444444; text-transform: uppercase; padding-bottom: 20px; border-bottom: 3px solid #e8e8e8; margin-bottom: 20px;\">{{__(\"ship_to\")}}</h2>
{% if pickup_point.name %}
    <p style=\"margin: 0px; font-size:14px; font-family: Helvetica, Arial, sans-serif; padding-bottom: 5px;\">
        <strong>{{ pickup_point.name }}</strong>
    </p>
{% endif %}
{% if pickup_point.full_address %}
    <p style=\"margin: 0px; font-size:14px; font-family: Helvetica, Arial, sans-serif; padding-bottom: 5px;\">
        {{ pickup_point.full_address }}
    </p>
{% endif %}
{% if pickup_point.phone %}
    <p style=\"margin: 0px; font-size:14px; font-family: Helvetica, Arial, sans-serif; padding-bottom: 5px;\">
        <strong>{{ __(\"phone\") }}:</strong>
        {{ pickup_point.phone }}
    </p>
{% endif %}
{% if pickup_point.open_hours %}
    <p style=\"margin: 0px; font-size:14px; font-family: Helvetica, Arial, sans-serif; padding-bottom: 5px;\">
        <strong>{{ __(\"open_hours\") }}:</strong><br/>
        {{ pickup_point.open_hours }}
    </p>
{% endif %}
{% if pickup_point.description %}
    <p style=\"margin: 0px; font-size:14px; font-family: Helvetica, Arial, sans-serif; padding-bottom: 5px;\">
        <strong>{{ __(\"description\") }}:</strong><br/>
        {{ pickup_point.description }}
    </p>
{% endif %}", "__string_template__f4cf05567ada67e904537e3c64da1a3b28383eeb50f640b7c00c95356a4fc501", "");
    }
}
