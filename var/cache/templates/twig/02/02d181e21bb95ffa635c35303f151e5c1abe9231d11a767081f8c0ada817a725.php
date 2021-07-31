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

/* __string_template__bc072a75d49e4454b102ac5b4cb2a10085695cf02617595d15767bea37f261aa */
class __TwigTemplate_7a5398f93582dcac7201f79a81791128d6aeecaaa88365595f5e7cde154b9e29 extends \Twig\Template
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
        echo "<table width=\"100%;\" style=\"min-width: 800px; font-family: Helvetica, Arial, sans-serif; border-collapse: separate;\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\">
<tbody>
<tr style=\"vertical-align: top;\">
    <td>
        <table width=\"100%;\" cellspacing=\"0\" border=\"0\" style=\"border-collapse: separate; font-family: Helvetica, Arial, sans-serif;\">
        <tbody>
        <tr>
            <td width=\"66%\" style=\"padding-bottom: 40px; vertical-align: top; font-family: Helvetica, Arial, sans-serif;\"><img src=\"";
        // line 8
        echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["c"] ?? null), "logos", []), "mail", []), "image", []), "image_path", []);
        echo "\" width=\"";
        echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["c"] ?? null), "logos", []), "mail", []), "image", []), "image_x", []);
        echo "\" height=\"";
        echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["c"] ?? null), "logos", []), "mail", []), "image", []), "image_y", []);
        echo "\" alt=\"";
        echo $this->getAttribute(($context["c"] ?? null), "name", []);
        echo "\">
            </td>
            <td width=\"34%\" style=\"padding-bottom: 40px; -webkit-print-color-adjust: exact; font-family: Helvetica, Arial, sans-serif;\">
                <p style=\"color: #787878; font-size: 14px; font-family: Helvetica, Arial, sans-serif; padding-bottom: 3px; margin: 0px;\">
                    <span style=\"color: #000000; font-weight: 600; font-family: Helvetica, Arial, sans-serif; text-transform: uppercase; line-height: 20px;\">";
        // line 12
        echo $this->getAttribute(($context["o"] ?? null), "invoice_id_text", []);
        echo "</span>
                </p>

                <p style=\"color: #787878; font-size: 14px; font-family: Helvetica, Arial, sans-serif; padding-bottom: 5px; margin: 0px;\">
                    <span style=\"color: #000000; font-weight: 600; font-family: Helvetica, Arial, sans-serif; text-transform: uppercase;\">";
        // line 16
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "order_date");
        echo "</span>  ";
        echo $this->getAttribute(($context["o"] ?? null), "timestamp", []);
        echo "
                </p>
                <p style=\"color: #787878; font-size: 14px; font-family: Helvetica, Arial, sans-serif; padding-bottom: 5px; margin: 0px;\">
                    <span style=\"color: #000000; font-weight: 600; font-family: Helvetica, Arial, sans-serif; text-transform: uppercase;\">";
        // line 19
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "payment");
        echo "</span>  ";
        echo $this->getAttribute(($context["p"] ?? null), "payment", []);
        echo "
                </p>
                <p style=\"color: #787878; font-size: 14px; font-family: Helvetica, Arial, sans-serif; padding-bottom: 5px; margin: 0px;\">
                    <span style=\"color: #000000; font-weight: 600; font-family: Helvetica, Arial, sans-serif; text-transform: uppercase;\">";
        // line 22
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "shipping");
        echo "</span>  ";
        echo $this->getAttribute(($context["o"] ?? null), "shippings_method", []);
        echo "
                </p>
                ";
        // line 24
        if ($this->getAttribute(($context["o"] ?? null), "tracking_number", [])) {
            // line 25
            echo "                <p style=\"color: #787878; font-size: 14px; font-family: Helvetica, Arial, sans-serif; padding-bottom: 5px; margin: 0px;\">
                    <span style=\"color: #000000; font-weight: 600; font-family: Helvetica, Arial, sans-serif; text-transform: uppercase;\">";
            // line 26
            echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "tracking_number");
            echo "</span>  ";
            echo $this->getAttribute(($context["o"] ?? null), "tracking_number", []);
            echo "
                </p>
                ";
        }
        // line 29
        echo "            </td>
        </tr>
        </tbody>
        </table>
    </td>
</tr>
<tr>
    <td colspan=\"2\">
        <table width=\"100%;\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" style=\" border-collapse: separate; font-family: Helvetica, Arial, sans-serif;\">
        <tbody>
        <tr>
            <td style=\"vertical-align: top; background-color: #f7f7f7; color: #444444; padding: 20px 10px; color: #444444; font-size: 14px; font-family: Helvetica, Arial, sans-serif; -webkit-print-color-adjust: exact;\" width=\"30%\">
                <h1 style=\"margin: 0px; font-size: 22px; font-family: Helvetica, Arial, sans-serif; color: #444444; text-transform: uppercase; padding-bottom: 20px; border-bottom: 3px solid #444444; margin-bottom: 20px;\">";
        // line 41
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "store");
        echo "</h1>
                <p style=\"margin: 0px; padding-bottom: 10px;\"><strong>";
        // line 42
        echo $this->getAttribute(($context["c"] ?? null), "name", []);
        echo "</strong>
                </p>
                ";
        // line 44
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->snippetFunction($this->env, $context, "company_address");
        echo "
            </td>
            <td style=\"vertical-align: top; padding: 20px 30px; color: #444444; font-size: 14px; font-family: Helvetica, Arial, sans-serif;\" width=\"36%\">
                ";
        // line 47
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->snippetFunction($this->env, $context, "bill_to");
        echo "
            </td>
            <td style=\"vertical-align: top; padding: 20px 0px; color: #444444; font-size: 14px; font-family: Helvetica, Arial, sans-serif;\" width=\"34%\">
                ";
        // line 50
        if ($this->getAttribute(($context["pickup_point"] ?? null), "is_selected", [])) {
            // line 51
            echo "                ";
            echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->snippetFunction($this->env, $context, "pickup_point");
            echo "
                ";
        } else {
            // line 53
            echo "                ";
            echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->snippetFunction($this->env, $context, "ship_to");
            echo "
                ";
        }
        // line 55
        echo "            </td>
        </tr>
        </tbody>
        </table>
    </td>
</tr>
<tr>
    <td style=\"font-family: Helvetica, Arial, sans-serif;\">
        ";
        // line 63
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->snippetFunction($this->env, $context, "products_table");
        echo "
    </td>
</tr>
<tr>
    <td style=\"border-top: 3px solid #444444; padding-top: 10px; font-family: Helvetica, Arial, sans-serif;\">
        <table width=\"100%\" style=\"border-collapse: separate; font-family: Helvetica, Arial, sans-serif;\">
        <tbody>
        <tr>
            <td width=\"66%\" style=\"font-size: 14px; font-family: Helvetica, Arial, sans-serif; line-height: 21px; color: #444444; padding-right: 30px; vertical-align:top;\">
                ";
        // line 72
        if ($this->getAttribute(($context["o"] ?? null), "notes", [])) {
            // line 73
            echo "                <h2 style=\"margin: 0px; font-size: 22px; font-family: Helvetica, Arial, sans-serif; color: #444444; text-transform: uppercase; padding-bottom: 20px; border-bottom: 3px solid #e8e8e8; margin-bottom: 10px;\">";
            echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "customer_notes");
            echo "</h2>
                ";
            // line 74
            echo $this->getAttribute(($context["o"] ?? null), "notes", []);
            echo "
                                ";
        }
        // line 76
        echo "            </td>
            <td width=\"34%\" style=\"vertical-align: top; font-family: Helvetica, Arial, sans-serif;\">
                <table width=\"100%;\" style=\"font-size: 14px; color: #444; font-family: Helvetica, Arial, sans-serif;\">
                <tbody>
                <tr style=\" vertical-align: top;\">
                    <td align=\"left\" style=\"padding-bottom: 20px; font-family: Helvetica, Arial, sans-serif;\">";
        // line 81
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "subtotal");
        echo "
                    </td>
                    <td align=\"right\" style=\"font-family: Helvetica, Arial, sans-serif;\">";
        // line 83
        echo $this->getAttribute(($context["o"] ?? null), "display_subtotal", []);
        echo "
                    </td>
                </tr>
                <tr style=\" vertical-align: top; font-family: Helvetica, Arial, sans-serif;\">
                    <td align=\"left\" style=\"padding-bottom: 20px; text-transform: uppercase; font-family: Helvetica, Arial, sans-serif;\">";
        // line 87
        echo $this->getAttribute(($context["o"] ?? null), "tax_name", []);
        echo "
                    </td>
                    <td align=\"right\" style=\"font-family: Helvetica, Arial, sans-serif;\">";
        // line 89
        echo $this->getAttribute(($context["o"] ?? null), "tax_total", []);
        echo "
                    </td>
                </tr>
                <tr style=\" vertical-align: top; font-family: Helvetica, Arial, sans-serif;\">
                    <td align=\"left\" style=\"padding-bottom: 20px; font-family: Helvetica, Arial, sans-serif;\">";
        // line 93
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "shipping");
        echo "
                    </td>
                    <td align=\"right\" style=\"font-family: Helvetica, Arial, sans-serif;\">";
        // line 95
        echo $this->getAttribute(($context["o"] ?? null), "display_shipping_cost", []);
        echo "
                    </td>
                </tr>
                <tr style=\" vertical-align: top; font-family: Helvetica, Arial, sans-serif;\">
                    <td align=\"left\" style=\"font-family: Helvetica, Arial, sans-serif;\">";
        // line 99
        if ($this->getAttribute(($context["o"] ?? null), "payment_surcharge", [])) {
            // line 100
            echo "                        <div style=\"padding-bottom: 20px; font-family: Helvetica, Arial, sans-serif;\"> ";
            echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "payment_surcharge");
            echo " </div> ";
        }
        // line 101
        echo "                    </td>
                    <td align=\"right\" style=\"font-family: Helvetica, Arial, sans-serif;\">";
        // line 102
        if ($this->getAttribute(($context["o"] ?? null), "payment_surcharge", [])) {
            echo " ";
            echo $this->getAttribute(($context["o"] ?? null), "payment_surcharge", []);
            echo " ";
        }
        echo "<br>
                    </td>
                </tr>
                <tr style=\" vertical-align: top; font-family: Helvetica, Arial, sans-serif;\">
                    <td align=\"left\">";
        // line 106
        if ($this->getAttribute(($context["o"] ?? null), "coupon_code", [])) {
            echo " <div style=\"padding-bottom: 20px; font-family: Helvetica, Arial, sans-serif;\"> ";
            echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "coupon");
            echo " </div> ";
        }
        // line 107
        echo "                    </td>
                    <td align=\"right\" style=\"font-family: Helvetica, Arial, sans-serif;\">";
        // line 108
        if ($this->getAttribute(($context["o"] ?? null), "coupon_code", [])) {
            echo " ";
            echo $this->getAttribute(($context["o"] ?? null), "coupon_code", []);
            echo " ";
        }
        // line 109
        echo "                    </td>
                </tr>
                <tr style=\" vertical-align: top; font-family: Helvetica, Arial, sans-serif;\">
                    <td align=\"left\" style=\"font-family: Helvetica, Arial, sans-serif;\">";
        // line 112
        if ($this->getAttribute($this->getAttribute(($context["o"] ?? null), "raw", []), "discount", [])) {
            echo " <div style=\"padding-bottom: 20px; font-family: Helvetica, Arial, sans-serif;\"> ";
            echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "including_discount");
            echo " </div> ";
        }
        // line 113
        echo "                    </td>
                    <td align=\"right\" style=\"font-family: Helvetica, Arial, sans-serif;\">";
        // line 114
        if ($this->getAttribute($this->getAttribute(($context["o"] ?? null), "raw", []), "discount", [])) {
            echo " ";
            echo $this->getAttribute(($context["o"] ?? null), "discount", []);
            echo " ";
        }
        // line 115
        echo "                    </td>
                </tr>
                <tr style=\" vertical-align: top; font-family: Helvetica, Arial, sans-serif;\">
                    <td align=\"left\" style=\"font-family: Helvetica, Arial, sans-serif;\">";
        // line 118
        if ($this->getAttribute($this->getAttribute(($context["o"] ?? null), "raw", []), "subtotal_discount", [])) {
            echo " <div style=\"padding-bottom: 20px; font-family: Helvetica, Arial, sans-serif;\"> ";
            echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "order_discount");
            echo " </div> ";
        }
        // line 119
        echo "                    </td>
                    <td align=\"right\" style=\"font-family: Helvetica, Arial, sans-serif;\">";
        // line 120
        if ($this->getAttribute($this->getAttribute(($context["o"] ?? null), "raw", []), "subtotal_discount", [])) {
            echo " ";
            echo $this->getAttribute(($context["o"] ?? null), "subtotal_discount", []);
            echo " ";
        }
        // line 121
        echo "                    </td>
                </tr>
                <tr style=\" vertical-align: top; font-size: 22px; font-family: Helvetica, Arial, sans-serif; font-weight: 600;\">
                    <td align=\"left\" style=\"padding-top: 20px; border-top: 1px solid #e8e8e8; font-size: 22px; font-family: Helvetica, Arial, sans-serif; \">";
        // line 124
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "total");
        echo "
                    </td>
                    <td align=\"right\" style=\"padding-top: 20px; border-top: 1px solid #e8e8e8; font-size: 22px; font-family: Helvetica, Arial, sans-serif; \">";
        // line 126
        echo $this->getAttribute(($context["o"] ?? null), "total", []);
        echo "
                    </td>
                </tr>
                </tbody>
                </table>
            </td>
        </tr>
        </tbody>
        </table>
    </td>
</tr>
</tbody>
</table>";
    }

    public function getTemplateName()
    {
        return "__string_template__bc072a75d49e4454b102ac5b4cb2a10085695cf02617595d15767bea37f261aa";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  307 => 126,  302 => 124,  297 => 121,  291 => 120,  288 => 119,  282 => 118,  277 => 115,  271 => 114,  268 => 113,  262 => 112,  257 => 109,  251 => 108,  248 => 107,  242 => 106,  231 => 102,  228 => 101,  223 => 100,  221 => 99,  214 => 95,  209 => 93,  202 => 89,  197 => 87,  190 => 83,  185 => 81,  178 => 76,  173 => 74,  168 => 73,  166 => 72,  154 => 63,  144 => 55,  138 => 53,  132 => 51,  130 => 50,  124 => 47,  118 => 44,  113 => 42,  109 => 41,  95 => 29,  87 => 26,  84 => 25,  82 => 24,  75 => 22,  67 => 19,  59 => 16,  52 => 12,  39 => 8,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<table width=\"100%;\" style=\"min-width: 800px; font-family: Helvetica, Arial, sans-serif; border-collapse: separate;\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\">
<tbody>
<tr style=\"vertical-align: top;\">
    <td>
        <table width=\"100%;\" cellspacing=\"0\" border=\"0\" style=\"border-collapse: separate; font-family: Helvetica, Arial, sans-serif;\">
        <tbody>
        <tr>
            <td width=\"66%\" style=\"padding-bottom: 40px; vertical-align: top; font-family: Helvetica, Arial, sans-serif;\"><img src=\"{{c.logos.mail.image.image_path}}\" width=\"{{c.logos.mail.image.image_x}}\" height=\"{{c.logos.mail.image.image_y}}\" alt=\"{{ c.name }}\">
            </td>
            <td width=\"34%\" style=\"padding-bottom: 40px; -webkit-print-color-adjust: exact; font-family: Helvetica, Arial, sans-serif;\">
                <p style=\"color: #787878; font-size: 14px; font-family: Helvetica, Arial, sans-serif; padding-bottom: 3px; margin: 0px;\">
                    <span style=\"color: #000000; font-weight: 600; font-family: Helvetica, Arial, sans-serif; text-transform: uppercase; line-height: 20px;\">{{ o.invoice_id_text }}</span>
                </p>

                <p style=\"color: #787878; font-size: 14px; font-family: Helvetica, Arial, sans-serif; padding-bottom: 5px; margin: 0px;\">
                    <span style=\"color: #000000; font-weight: 600; font-family: Helvetica, Arial, sans-serif; text-transform: uppercase;\">{{__(\"order_date\")}}</span>  {{o.timestamp}}
                </p>
                <p style=\"color: #787878; font-size: 14px; font-family: Helvetica, Arial, sans-serif; padding-bottom: 5px; margin: 0px;\">
                    <span style=\"color: #000000; font-weight: 600; font-family: Helvetica, Arial, sans-serif; text-transform: uppercase;\">{{__(\"payment\")}}</span>  {{p.payment}}
                </p>
                <p style=\"color: #787878; font-size: 14px; font-family: Helvetica, Arial, sans-serif; padding-bottom: 5px; margin: 0px;\">
                    <span style=\"color: #000000; font-weight: 600; font-family: Helvetica, Arial, sans-serif; text-transform: uppercase;\">{{__(\"shipping\")}}</span>  {{o.shippings_method}}
                </p>
                {% if o.tracking_number %}
                <p style=\"color: #787878; font-size: 14px; font-family: Helvetica, Arial, sans-serif; padding-bottom: 5px; margin: 0px;\">
                    <span style=\"color: #000000; font-weight: 600; font-family: Helvetica, Arial, sans-serif; text-transform: uppercase;\">{{__(\"tracking_number\")}}</span>  {{o.tracking_number}}
                </p>
                {% endif %}
            </td>
        </tr>
        </tbody>
        </table>
    </td>
</tr>
<tr>
    <td colspan=\"2\">
        <table width=\"100%;\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" style=\" border-collapse: separate; font-family: Helvetica, Arial, sans-serif;\">
        <tbody>
        <tr>
            <td style=\"vertical-align: top; background-color: #f7f7f7; color: #444444; padding: 20px 10px; color: #444444; font-size: 14px; font-family: Helvetica, Arial, sans-serif; -webkit-print-color-adjust: exact;\" width=\"30%\">
                <h1 style=\"margin: 0px; font-size: 22px; font-family: Helvetica, Arial, sans-serif; color: #444444; text-transform: uppercase; padding-bottom: 20px; border-bottom: 3px solid #444444; margin-bottom: 20px;\">{{__(\"store\")}}</h1>
                <p style=\"margin: 0px; padding-bottom: 10px;\"><strong>{{c.name}}</strong>
                </p>
                {{ snippet(\"company_address\") }}
            </td>
            <td style=\"vertical-align: top; padding: 20px 30px; color: #444444; font-size: 14px; font-family: Helvetica, Arial, sans-serif;\" width=\"36%\">
                {{ snippet(\"bill_to\") }}
            </td>
            <td style=\"vertical-align: top; padding: 20px 0px; color: #444444; font-size: 14px; font-family: Helvetica, Arial, sans-serif;\" width=\"34%\">
                {% if pickup_point.is_selected %}
                {{ snippet(\"pickup_point\") }}
                {% else %}
                {{ snippet(\"ship_to\") }}
                {% endif %}
            </td>
        </tr>
        </tbody>
        </table>
    </td>
</tr>
<tr>
    <td style=\"font-family: Helvetica, Arial, sans-serif;\">
        {{ snippet(\"products_table\") }}
    </td>
</tr>
<tr>
    <td style=\"border-top: 3px solid #444444; padding-top: 10px; font-family: Helvetica, Arial, sans-serif;\">
        <table width=\"100%\" style=\"border-collapse: separate; font-family: Helvetica, Arial, sans-serif;\">
        <tbody>
        <tr>
            <td width=\"66%\" style=\"font-size: 14px; font-family: Helvetica, Arial, sans-serif; line-height: 21px; color: #444444; padding-right: 30px; vertical-align:top;\">
                {% if o.notes %}
                <h2 style=\"margin: 0px; font-size: 22px; font-family: Helvetica, Arial, sans-serif; color: #444444; text-transform: uppercase; padding-bottom: 20px; border-bottom: 3px solid #e8e8e8; margin-bottom: 10px;\">{{ __(\"customer_notes\") }}</h2>
                {{ o.notes }}
                                {% endif %}
            </td>
            <td width=\"34%\" style=\"vertical-align: top; font-family: Helvetica, Arial, sans-serif;\">
                <table width=\"100%;\" style=\"font-size: 14px; color: #444; font-family: Helvetica, Arial, sans-serif;\">
                <tbody>
                <tr style=\" vertical-align: top;\">
                    <td align=\"left\" style=\"padding-bottom: 20px; font-family: Helvetica, Arial, sans-serif;\">{{ __(\"subtotal\") }}
                    </td>
                    <td align=\"right\" style=\"font-family: Helvetica, Arial, sans-serif;\">{{o.display_subtotal}}
                    </td>
                </tr>
                <tr style=\" vertical-align: top; font-family: Helvetica, Arial, sans-serif;\">
                    <td align=\"left\" style=\"padding-bottom: 20px; text-transform: uppercase; font-family: Helvetica, Arial, sans-serif;\">{{o.tax_name}}
                    </td>
                    <td align=\"right\" style=\"font-family: Helvetica, Arial, sans-serif;\">{{o.tax_total}}
                    </td>
                </tr>
                <tr style=\" vertical-align: top; font-family: Helvetica, Arial, sans-serif;\">
                    <td align=\"left\" style=\"padding-bottom: 20px; font-family: Helvetica, Arial, sans-serif;\">{{ __(\"shipping\") }}
                    </td>
                    <td align=\"right\" style=\"font-family: Helvetica, Arial, sans-serif;\">{{ o.display_shipping_cost }}
                    </td>
                </tr>
                <tr style=\" vertical-align: top; font-family: Helvetica, Arial, sans-serif;\">
                    <td align=\"left\" style=\"font-family: Helvetica, Arial, sans-serif;\">{% if o.payment_surcharge %}
                        <div style=\"padding-bottom: 20px; font-family: Helvetica, Arial, sans-serif;\"> {{__(\"payment_surcharge\")}} </div> {% endif %}
                    </td>
                    <td align=\"right\" style=\"font-family: Helvetica, Arial, sans-serif;\">{% if o.payment_surcharge %} {{o.payment_surcharge}} {% endif %}<br>
                    </td>
                </tr>
                <tr style=\" vertical-align: top; font-family: Helvetica, Arial, sans-serif;\">
                    <td align=\"left\">{% if o.coupon_code %} <div style=\"padding-bottom: 20px; font-family: Helvetica, Arial, sans-serif;\"> {{ __(\"coupon\") }} </div> {% endif %}
                    </td>
                    <td align=\"right\" style=\"font-family: Helvetica, Arial, sans-serif;\">{% if o.coupon_code %} {{o.coupon_code}} {% endif %}
                    </td>
                </tr>
                <tr style=\" vertical-align: top; font-family: Helvetica, Arial, sans-serif;\">
                    <td align=\"left\" style=\"font-family: Helvetica, Arial, sans-serif;\">{% if o.raw.discount %} <div style=\"padding-bottom: 20px; font-family: Helvetica, Arial, sans-serif;\"> {{ __(\"including_discount\") }} </div> {% endif %}
                    </td>
                    <td align=\"right\" style=\"font-family: Helvetica, Arial, sans-serif;\">{% if o.raw.discount %} {{o.discount}} {% endif %}
                    </td>
                </tr>
                <tr style=\" vertical-align: top; font-family: Helvetica, Arial, sans-serif;\">
                    <td align=\"left\" style=\"font-family: Helvetica, Arial, sans-serif;\">{% if o.raw.subtotal_discount %} <div style=\"padding-bottom: 20px; font-family: Helvetica, Arial, sans-serif;\"> {{ __(\"order_discount\") }} </div> {% endif %}
                    </td>
                    <td align=\"right\" style=\"font-family: Helvetica, Arial, sans-serif;\">{% if o.raw.subtotal_discount %} {{o.subtotal_discount}} {% endif %}
                    </td>
                </tr>
                <tr style=\" vertical-align: top; font-size: 22px; font-family: Helvetica, Arial, sans-serif; font-weight: 600;\">
                    <td align=\"left\" style=\"padding-top: 20px; border-top: 1px solid #e8e8e8; font-size: 22px; font-family: Helvetica, Arial, sans-serif; \">{{ __(\"total\") }}
                    </td>
                    <td align=\"right\" style=\"padding-top: 20px; border-top: 1px solid #e8e8e8; font-size: 22px; font-family: Helvetica, Arial, sans-serif; \">{{o.total}}
                    </td>
                </tr>
                </tbody>
                </table>
            </td>
        </tr>
        </tbody>
        </table>
    </td>
</tr>
</tbody>
</table>", "__string_template__bc072a75d49e4454b102ac5b4cb2a10085695cf02617595d15767bea37f261aa", "");
    }
}
