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

/* __string_template__c2aedfff0732046ad80f2b9219a0ef00a0a57436af5465b2bf94f703d9f4b261 */
class __TwigTemplate_48445031b3b6828a816a858a049a99dd3eb8a00d4d521f941eae83225537554b extends \Twig\Template
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
        echo "<h2 style=\"margin: 0px; font-size: 22px; font-family: Helvetica, Arial, sans-serif; color: #444444; text-transform: uppercase; margin-bottom: 15px; line-height: 1.5em; \">";
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "ship_to");
        echo "</h2>
    <p style=\"margin: 0px; font-size:14px; font-family: Helvetica, Arial, sans-serif; padding-bottom: 5px;\">
        <strong>";
        // line 3
        echo $this->getAttribute(($context["u"] ?? null), "firstname", []);
        echo " ";
        echo $this->getAttribute(($context["u"] ?? null), "lastname", []);
        echo "</strong>
    </p>
    <p style=\"margin: 0px; font-size:14px; font-family: Helvetica, Arial, sans-serif; padding-bottom: 5px;\">
        ";
        // line 6
        echo $this->getAttribute(($context["u"] ?? null), "s_address", []);
        echo " <br>";
        echo $this->getAttribute(($context["u"] ?? null), "s_address_2", []);
        echo "
    </p>
    <p style=\"margin: 0px; font-size:14px; font-family: Helvetica, Arial, sans-serif; padding-bottom: 5px;\">
        ";
        // line 9
        echo $this->getAttribute(($context["u"] ?? null), "s_city", []);
        echo ", ";
        echo $this->getAttribute(($context["u"] ?? null), "s_state_descr", []);
        echo " ";
        echo $this->getAttribute(($context["u"] ?? null), "s_zipcode", []);
        echo "
    </p>
    <p style=\"margin: 0px; font-size:14px; font-family: Helvetica, Arial, sans-serif; padding-bottom: 5px;\">
        ";
        // line 12
        echo $this->getAttribute(($context["u"] ?? null), "s_country_descr", []);
        echo "
    </p>
    <p style=\"margin: 0px; font-size:14px; font-family: Helvetica, Arial, sans-serif; padding-bottom: 5px;\">
        <bdi>";
        // line 15
        echo $this->getAttribute(($context["u"] ?? null), "phone", []);
        echo "</bdi>
    </p>
";
    }

    public function getTemplateName()
    {
        return "__string_template__c2aedfff0732046ad80f2b9219a0ef00a0a57436af5465b2bf94f703d9f4b261";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 15,  62 => 12,  52 => 9,  44 => 6,  36 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<h2 style=\"margin: 0px; font-size: 22px; font-family: Helvetica, Arial, sans-serif; color: #444444; text-transform: uppercase; margin-bottom: 15px; line-height: 1.5em; \">{{__(\"ship_to\")}}</h2>
    <p style=\"margin: 0px; font-size:14px; font-family: Helvetica, Arial, sans-serif; padding-bottom: 5px;\">
        <strong>{{u.firstname}} {{u.lastname}}</strong>
    </p>
    <p style=\"margin: 0px; font-size:14px; font-family: Helvetica, Arial, sans-serif; padding-bottom: 5px;\">
        {{u.s_address}} <br>{{u.s_address_2}}
    </p>
    <p style=\"margin: 0px; font-size:14px; font-family: Helvetica, Arial, sans-serif; padding-bottom: 5px;\">
        {{u.s_city}}, {{u.s_state_descr}} {{u.s_zipcode}}
    </p>
    <p style=\"margin: 0px; font-size:14px; font-family: Helvetica, Arial, sans-serif; padding-bottom: 5px;\">
        {{u.s_country_descr}}
    </p>
    <p style=\"margin: 0px; font-size:14px; font-family: Helvetica, Arial, sans-serif; padding-bottom: 5px;\">
        <bdi>{{u.phone}}</bdi>
    </p>
", "__string_template__c2aedfff0732046ad80f2b9219a0ef00a0a57436af5465b2bf94f703d9f4b261", "");
    }
}
