<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @CorePluginsAdmin/safemode.twig */
class __TwigTemplate_a6d656bf9ec07f366c68fb92517cc4b75f32a6d3712560c7d844d5fa0b0a162e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <meta name=\"robots\" content=\"noindex,nofollow\">
        <meta name=\"google\" content=\"notranslate\">
        <style type=\"text/css\">
            html, body {
                background-color: white;
            }
            td {
                border: 1px solid #ccc;
                border-collapse: collapse;
                padding: 5px;
            }
            table {
                border-collapse: collapse;
                border: 0px;
            }
            a {
                text-decoration: none;
            }
            a:hover {
                text-decoration: underline;
            }
        </style>
        <title>A fatal error occurred</title>
    </head>
    <body>

        <h1>A fatal error occurred</h1>

        <div style=\"width: 640px\">

        ";
        // line 35
        if (((isset($context["isAllowedToTroubleshootAsSuperUser"]) || array_key_exists("isAllowedToTroubleshootAsSuperUser", $context) ? $context["isAllowedToTroubleshootAsSuperUser"] : (function () { throw new RuntimeError('Variable "isAllowedToTroubleshootAsSuperUser" does not exist.', 35, $this->source); })()) ||  !(isset($context["isAnonymousUser"]) || array_key_exists("isAnonymousUser", $context) ? $context["isAnonymousUser"] : (function () { throw new RuntimeError('Variable "isAnonymousUser" does not exist.', 35, $this->source); })()))) {
            // line 36
            echo "            <p>
                The following error just broke Matomo";
            // line 37
            if ((isset($context["showVersion"]) || array_key_exists("showVersion", $context) ? $context["showVersion"] : (function () { throw new RuntimeError('Variable "showVersion" does not exist.', 37, $this->source); })())) {
                echo " (v";
                echo \Piwik\piwik_escape_filter($this->env, (isset($context["piwikVersion"]) || array_key_exists("piwikVersion", $context) ? $context["piwikVersion"] : (function () { throw new RuntimeError('Variable "piwikVersion" does not exist.', 37, $this->source); })()), "html", null, true);
                echo ")";
            }
            echo ":
            </p>
            <pre>";
            // line 39
            echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lastError"]) || array_key_exists("lastError", $context) ? $context["lastError"] : (function () { throw new RuntimeError('Variable "lastError" does not exist.', 39, $this->source); })()), "message", [], "any", false, false, false, 39), "html", null, true);
            echo "
";
            // line 40
            if (twig_get_attribute($this->env, $this->source, ($context["lastError"] ?? null), "backtrace", [], "any", true, true, false, 40)) {
                echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lastError"]) || array_key_exists("lastError", $context) ? $context["lastError"] : (function () { throw new RuntimeError('Variable "lastError" does not exist.', 40, $this->source); })()), "backtrace", [], "any", false, false, false, 40), "html", null, true);
            } else {
                echo "in ";
                echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lastError"]) || array_key_exists("lastError", $context) ? $context["lastError"] : (function () { throw new RuntimeError('Variable "lastError" does not exist.', 40, $this->source); })()), "file", [], "any", false, false, false, 40), "html", null, true);
                echo " line ";
                echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lastError"]) || array_key_exists("lastError", $context) ? $context["lastError"] : (function () { throw new RuntimeError('Variable "lastError" does not exist.', 40, $this->source); })()), "line", [], "any", false, false, false, 40), "html", null, true);
            }
            // line 41
            echo "            </pre>

            <hr>
            <h3>Troubleshooting</h3>

            Follow these steps to solve the issue or report it to the team:
            <ul>
                <li>
                    If you have just updated Matomo to the latest version, please try to restart your web server.
                    This will clear the PHP opcache which may solve the problem.
                </li>
                <li>
                    If this is the first time you see this error, please try refresh the page.
                </li>
                <li>
                    <strong>If this error continues to happen</strong>, we appreciate if you send the
                    <a href=\"mailto:hello@matomo.org?subject=";
            // line 57
            echo \Piwik\piwik_escape_filter($this->env, ("Fatal error in Matomo " . \Piwik\piwik_escape_filter($this->env, (isset($context["piwikVersion"]) || array_key_exists("piwikVersion", $context) ? $context["piwikVersion"] : (function () { throw new RuntimeError('Variable "piwikVersion" does not exist.', 57, $this->source); })()), "url")), "html", null, true);
            echo "&body=";
            echo \Piwik\piwik_escape_filter($this->env, \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lastError"]) || array_key_exists("lastError", $context) ? $context["lastError"] : (function () { throw new RuntimeError('Variable "lastError" does not exist.', 57, $this->source); })()), "message", [], "any", false, false, false, 57), "url"), "html", null, true);
            echo "%20in%20";
            echo \Piwik\piwik_escape_filter($this->env, \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lastError"]) || array_key_exists("lastError", $context) ? $context["lastError"] : (function () { throw new RuntimeError('Variable "lastError" does not exist.', 57, $this->source); })()), "file", [], "any", false, false, false, 57), "url"), "html", null, true);
            echo "%20";
            echo \Piwik\piwik_escape_filter($this->env, \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lastError"]) || array_key_exists("lastError", $context) ? $context["lastError"] : (function () { throw new RuntimeError('Variable "lastError" does not exist.', 57, $this->source); })()), "line", [], "any", false, false, false, 57), "url"), "html", null, true);
            echo "%20using%20PHP%20";
            echo \Piwik\piwik_escape_filter($this->env, twig_constant("PHP_VERSION"), "html", null, true);
            echo "\">error report</a>
                    to the Matomo team.
                </li>
            </ul>
            <hr/>

        ";
        }
        // line 64
        echo "
        ";
        // line 65
        if (((isset($context["isAllowedToTroubleshootAsSuperUser"]) || array_key_exists("isAllowedToTroubleshootAsSuperUser", $context) ? $context["isAllowedToTroubleshootAsSuperUser"] : (function () { throw new RuntimeError('Variable "isAllowedToTroubleshootAsSuperUser" does not exist.', 65, $this->source); })()) || (isset($context["isSuperUser"]) || array_key_exists("isSuperUser", $context) ? $context["isSuperUser"] : (function () { throw new RuntimeError('Variable "isSuperUser" does not exist.', 65, $this->source); })()))) {
            // line 66
            echo "
            <h3>Further troubleshooting</h3>
            <p>
                If this error continues to happen, you may be able to fix this issue by disabling one or more of
                the Third-Party plugins. If you don't know which plugin is causing this error, we recommend to first disable any plugin not created by \"Matomo\" and not created by \"InnoCraft\".
                You can enable plugin again afterwards in the
                <a rel=\"noreferrer noopener\" target=\"_blank\" href=\"index.php?module=CorePluginsAdmin&action=plugins\">Plugins</a>
                or <a target=\"_blank\" href=\"index.php?module=CorePluginsAdmin&action=themes\">Themes</a> page under
                settings at any time.

                ";
            // line 76
            if ((isset($context["pluginCausesIssue"]) || array_key_exists("pluginCausesIssue", $context) ? $context["pluginCausesIssue"] : (function () { throw new RuntimeError('Variable "pluginCausesIssue" does not exist.', 76, $this->source); })())) {
                // line 77
                echo "                    Based on the error message, the issue is probably caused by the plugin <strong>";
                echo \Piwik\piwik_escape_filter($this->env, (isset($context["pluginCausesIssue"]) || array_key_exists("pluginCausesIssue", $context) ? $context["pluginCausesIssue"] : (function () { throw new RuntimeError('Variable "pluginCausesIssue" does not exist.', 77, $this->source); })()), "html", null, true);
                echo "</strong>.
                ";
            }
            // line 79
            echo "            </p>
            <table>
                ";
            // line 81
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, (isset($context["plugins"]) || array_key_exists("plugins", $context) ? $context["plugins"] : (function () { throw new RuntimeError('Variable "plugins" does not exist.', 81, $this->source); })()), function ($__plugin__) use ($context, $macros) { $context["plugin"] = $__plugin__; return (twig_get_attribute($this->env, $this->source, $context["plugin"], "uninstallable", [], "any", false, false, false, 81) && twig_get_attribute($this->env, $this->source, $context["plugin"], "activated", [], "any", false, false, false, 81)); }));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["pluginName"] => $context["plugin"]) {
                // line 82
                echo "                    <tr ";
                if ((0 == twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 82) % 2)) {
                    echo "style=\"background-color: #eeeeee\"";
                }
                echo ">
                        <td style=\"min-width:200px;\">
                            ";
                // line 84
                echo \Piwik\piwik_escape_filter($this->env, $context["pluginName"], "html", null, true);
                echo "
                        </td>
                        <td>
                            ";
                // line 87
                echo \Piwik\piwik_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["plugin"], "info", [], "any", false, true, false, 87), "version", [], "any", true, true, false, 87)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["plugin"], "info", [], "any", false, true, false, 87), "version", [], "any", false, false, false, 87), "")) : ("")), "html", null, true);
                echo "
                        </td>
                        <td>
                            <a href=\"index.php?module=CorePluginsAdmin&action=deactivate&pluginName=";
                // line 90
                echo \Piwik\piwik_escape_filter($this->env, $context["pluginName"], "html", null, true);
                echo "&nonce=";
                echo \Piwik\piwik_escape_filter($this->env, (isset($context["deactivateNonce"]) || array_key_exists("deactivateNonce", $context) ? $context["deactivateNonce"] : (function () { throw new RuntimeError('Variable "deactivateNonce" does not exist.', 90, $this->source); })()), "html", null, true);
                if ( !twig_test_empty((isset($context["deactivateIAmSuperUserSalt"]) || array_key_exists("deactivateIAmSuperUserSalt", $context) ? $context["deactivateIAmSuperUserSalt"] : (function () { throw new RuntimeError('Variable "deactivateIAmSuperUserSalt" does not exist.', 90, $this->source); })()))) {
                    echo "&i_am_super_user=";
                    echo \Piwik\piwik_escape_filter($this->env, (isset($context["deactivateIAmSuperUserSalt"]) || array_key_exists("deactivateIAmSuperUserSalt", $context) ? $context["deactivateIAmSuperUserSalt"] : (function () { throw new RuntimeError('Variable "deactivateIAmSuperUserSalt" does not exist.', 90, $this->source); })()), "html", null, true);
                }
                echo "\"
                               target=\"_blank\">deactivate</a>
                        </td>
                    </tr>
                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['pluginName'], $context['plugin'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 95
            echo "            </table>

            ";
            // line 97
            $context["uninstalledPluginsFound"] = false;
            // line 98
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, (isset($context["plugins"]) || array_key_exists("plugins", $context) ? $context["plugins"] : (function () { throw new RuntimeError('Variable "plugins" does not exist.', 98, $this->source); })()), function ($__plugin__) use ($context, $macros) { $context["plugin"] = $__plugin__; return (twig_get_attribute($this->env, $this->source, $context["plugin"], "uninstallable", [], "any", false, false, false, 98) &&  !twig_get_attribute($this->env, $this->source, $context["plugin"], "activated", [], "any", false, false, false, 98)); }));
            foreach ($context['_seq'] as $context["pluginName"] => $context["plugin"]) {
                // line 99
                echo "                ";
                $context["uninstalledPluginsFound"] = true;
                // line 100
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['pluginName'], $context['plugin'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 101
            echo "
            ";
            // line 102
            if ((isset($context["uninstalledPluginsFound"]) || array_key_exists("uninstalledPluginsFound", $context) ? $context["uninstalledPluginsFound"] : (function () { throw new RuntimeError('Variable "uninstalledPluginsFound" does not exist.', 102, $this->source); })())) {
                // line 103
                echo "
                <p>
                    If this error still occurs after disabling all plugins, you might want to consider uninstalling some
                    plugins. Keep in mind: The plugin will be completely removed from your platform.
                </p>

                <table>
                    ";
                // line 110
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, (isset($context["plugins"]) || array_key_exists("plugins", $context) ? $context["plugins"] : (function () { throw new RuntimeError('Variable "plugins" does not exist.', 110, $this->source); })()), function ($__plugin__) use ($context, $macros) { $context["plugin"] = $__plugin__; return (twig_get_attribute($this->env, $this->source, $context["plugin"], "uninstallable", [], "any", false, false, false, 110) &&  !twig_get_attribute($this->env, $this->source, $context["plugin"], "activated", [], "any", false, false, false, 110)); }));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["pluginName"] => $context["plugin"]) {
                    // line 111
                    echo "                        <tr ";
                    if ((0 == twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 111) % 2)) {
                        echo "style=\"background-color: #eeeeee\"";
                    }
                    echo ">
                            <td style=\"min-width:200px;\">
                                ";
                    // line 113
                    echo \Piwik\piwik_escape_filter($this->env, $context["pluginName"], "html", null, true);
                    echo "
                            </td>
                            <td>
                                <a href=\"index.php?module=CorePluginsAdmin&action=uninstall&pluginName=";
                    // line 116
                    echo \Piwik\piwik_escape_filter($this->env, $context["pluginName"], "html", null, true);
                    echo "&nonce=";
                    echo \Piwik\piwik_escape_filter($this->env, (isset($context["uninstallNonce"]) || array_key_exists("uninstallNonce", $context) ? $context["uninstallNonce"] : (function () { throw new RuntimeError('Variable "uninstallNonce" does not exist.', 116, $this->source); })()), "html", null, true);
                    echo "\"
                                   target=\"_blank\" onclick=\"return confirm('";
                    // line 117
                    echo \Piwik\piwik_escape_filter($this->env, \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CorePluginsAdmin_UninstallConfirm", $context["pluginName"]]), "js"), "html", null, true);
                    echo "')\">uninstall</a>
                            </td>
                        </tr>
                    ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['pluginName'], $context['plugin'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 121
                echo "                </table>
            ";
            }
            // line 123
            echo "
        ";
        } elseif (        // line 124
(isset($context["isAnonymousUser"]) || array_key_exists("isAnonymousUser", $context) ? $context["isAnonymousUser"] : (function () { throw new RuntimeError('Variable "isAnonymousUser" does not exist.', 124, $this->source); })())) {
            // line 125
            echo "
            <p>Please contact the system administrator, or <a href=\"?module=";
            // line 126
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["loginModule"]) || array_key_exists("loginModule", $context) ? $context["loginModule"] : (function () { throw new RuntimeError('Variable "loginModule" does not exist.', 126, $this->source); })()), "html", null, true);
            echo "\">login to Matomo</a> to learn more.</p>

        ";
        } else {
            // line 129
            echo "            <p>
                If this error continues to happen you may want to send an
                <a href=\"mailto:";
            // line 131
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["emailSuperUser"]) || array_key_exists("emailSuperUser", $context) ? $context["emailSuperUser"] : (function () { throw new RuntimeError('Variable "emailSuperUser" does not exist.', 131, $this->source); })()), "html", null, true);
            echo "?subject=";
            echo \Piwik\piwik_escape_filter($this->env, ("Fatal error in Matomo " . \Piwik\piwik_escape_filter($this->env, (isset($context["piwikVersion"]) || array_key_exists("piwikVersion", $context) ? $context["piwikVersion"] : (function () { throw new RuntimeError('Variable "piwikVersion" does not exist.', 131, $this->source); })()), "url")), "html", null, true);
            echo "&body=";
            echo \Piwik\piwik_escape_filter($this->env, \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lastError"]) || array_key_exists("lastError", $context) ? $context["lastError"] : (function () { throw new RuntimeError('Variable "lastError" does not exist.', 131, $this->source); })()), "message", [], "any", false, false, false, 131), "url"), "html", null, true);
            echo "%20in%20";
            echo \Piwik\piwik_escape_filter($this->env, \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lastError"]) || array_key_exists("lastError", $context) ? $context["lastError"] : (function () { throw new RuntimeError('Variable "lastError" does not exist.', 131, $this->source); })()), "file", [], "any", false, false, false, 131), "url"), "html", null, true);
            echo "%20";
            echo \Piwik\piwik_escape_filter($this->env, \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lastError"]) || array_key_exists("lastError", $context) ? $context["lastError"] : (function () { throw new RuntimeError('Variable "lastError" does not exist.', 131, $this->source); })()), "line", [], "any", false, false, false, 131), "url"), "html", null, true);
            echo "%20using%20PHP%20";
            echo \Piwik\piwik_escape_filter($this->env, twig_constant("PHP_VERSION"), "html", null, true);
            echo "\">error report</a>
                to your system administrator.
            </p>
        ";
        }
        // line 135
        echo "

        ";
        // line 137
        if (( !(isset($context["isAllowedToTroubleshootAsSuperUser"]) || array_key_exists("isAllowedToTroubleshootAsSuperUser", $context) ? $context["isAllowedToTroubleshootAsSuperUser"] : (function () { throw new RuntimeError('Variable "isAllowedToTroubleshootAsSuperUser" does not exist.', 137, $this->source); })()) &&  !(isset($context["isSuperUser"]) || array_key_exists("isSuperUser", $context) ? $context["isSuperUser"] : (function () { throw new RuntimeError('Variable "isSuperUser" does not exist.', 137, $this->source); })()))) {
            // line 138
            echo "            <p>If you are Super User, but cannot login because of this error, you can still troubleshoot further. Follow these steps:
                <br/>1) open the config/config.ini.php file and look for the <code>salt</code> value under <code>[General]</code>.
                <br/>2) edit this current URL you are viewing and add the following text (replacing <code>salt_value_from_config</code> by the <code>salt</code> value from the config file):
                <br/><br/><code>index.php?i_am_super_user=salt_value_from_config&....</code>
            </p>
        ";
        }
        // line 144
        echo "

        </div>

    </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "@CorePluginsAdmin/safemode.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  369 => 144,  361 => 138,  359 => 137,  355 => 135,  338 => 131,  334 => 129,  328 => 126,  325 => 125,  323 => 124,  320 => 123,  316 => 121,  298 => 117,  292 => 116,  286 => 113,  278 => 111,  261 => 110,  252 => 103,  250 => 102,  247 => 101,  241 => 100,  238 => 99,  233 => 98,  231 => 97,  227 => 95,  202 => 90,  196 => 87,  190 => 84,  182 => 82,  165 => 81,  161 => 79,  155 => 77,  153 => 76,  141 => 66,  139 => 65,  136 => 64,  118 => 57,  100 => 41,  91 => 40,  87 => 39,  78 => 37,  75 => 36,  73 => 35,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <meta name=\"robots\" content=\"noindex,nofollow\">
        <meta name=\"google\" content=\"notranslate\">
        <style type=\"text/css\">
            html, body {
                background-color: white;
            }
            td {
                border: 1px solid #ccc;
                border-collapse: collapse;
                padding: 5px;
            }
            table {
                border-collapse: collapse;
                border: 0px;
            }
            a {
                text-decoration: none;
            }
            a:hover {
                text-decoration: underline;
            }
        </style>
        <title>A fatal error occurred</title>
    </head>
    <body>

        <h1>A fatal error occurred</h1>

        <div style=\"width: 640px\">

        {% if isAllowedToTroubleshootAsSuperUser or not isAnonymousUser %}
            <p>
                The following error just broke Matomo{% if showVersion %} (v{{ piwikVersion }}){% endif %}:
            </p>
            <pre>{{ lastError.message }}
{% if lastError.backtrace is defined %}{{ lastError.backtrace }}{% else %}in {{ lastError.file }} line {{ lastError.line }}{% endif %}
            </pre>

            <hr>
            <h3>Troubleshooting</h3>

            Follow these steps to solve the issue or report it to the team:
            <ul>
                <li>
                    If you have just updated Matomo to the latest version, please try to restart your web server.
                    This will clear the PHP opcache which may solve the problem.
                </li>
                <li>
                    If this is the first time you see this error, please try refresh the page.
                </li>
                <li>
                    <strong>If this error continues to happen</strong>, we appreciate if you send the
                    <a href=\"mailto:hello@matomo.org?subject={{ 'Fatal error in Matomo ' ~ piwikVersion|e('url') }}&body={{ lastError.message|e('url') }}%20in%20{{ lastError.file|e('url') }}%20{{ lastError.line|e('url') }}%20using%20PHP%20{{ constant('PHP_VERSION') }}\">error report</a>
                    to the Matomo team.
                </li>
            </ul>
            <hr/>

        {% endif %}

        {% if isAllowedToTroubleshootAsSuperUser or isSuperUser %}

            <h3>Further troubleshooting</h3>
            <p>
                If this error continues to happen, you may be able to fix this issue by disabling one or more of
                the Third-Party plugins. If you don't know which plugin is causing this error, we recommend to first disable any plugin not created by \"Matomo\" and not created by \"InnoCraft\".
                You can enable plugin again afterwards in the
                <a rel=\"noreferrer noopener\" target=\"_blank\" href=\"index.php?module=CorePluginsAdmin&action=plugins\">Plugins</a>
                or <a target=\"_blank\" href=\"index.php?module=CorePluginsAdmin&action=themes\">Themes</a> page under
                settings at any time.

                {% if pluginCausesIssue %}
                    Based on the error message, the issue is probably caused by the plugin <strong>{{ pluginCausesIssue }}</strong>.
                {% endif %}
            </p>
            <table>
                {% for pluginName, plugin in plugins|filter(plugin => plugin.uninstallable and plugin.activated) %}
                    <tr {% if loop.index is divisible by(2) %}style=\"background-color: #eeeeee\"{% endif %}>
                        <td style=\"min-width:200px;\">
                            {{ pluginName }}
                        </td>
                        <td>
                            {{ plugin.info.version|default('') }}
                        </td>
                        <td>
                            <a href=\"index.php?module=CorePluginsAdmin&action=deactivate&pluginName={{ pluginName }}&nonce={{ deactivateNonce }}{% if deactivateIAmSuperUserSalt is not empty %}&i_am_super_user={{ deactivateIAmSuperUserSalt }}{% endif %}\"
                               target=\"_blank\">deactivate</a>
                        </td>
                    </tr>
                {% endfor %}
            </table>

            {% set uninstalledPluginsFound = false %}
            {% for pluginName, plugin in plugins|filter(plugin => plugin.uninstallable and not plugin.activated) %}
                {% set uninstalledPluginsFound = true %}
            {% endfor %}

            {% if uninstalledPluginsFound %}

                <p>
                    If this error still occurs after disabling all plugins, you might want to consider uninstalling some
                    plugins. Keep in mind: The plugin will be completely removed from your platform.
                </p>

                <table>
                    {% for pluginName, plugin in plugins|filter(plugin => plugin.uninstallable and not plugin.activated) %}
                        <tr {% if loop.index is divisible by(2) %}style=\"background-color: #eeeeee\"{% endif %}>
                            <td style=\"min-width:200px;\">
                                {{ pluginName }}
                            </td>
                            <td>
                                <a href=\"index.php?module=CorePluginsAdmin&action=uninstall&pluginName={{ pluginName }}&nonce={{ uninstallNonce }}\"
                                   target=\"_blank\" onclick=\"return confirm('{{ 'CorePluginsAdmin_UninstallConfirm'|translate(pluginName)|e('js') }}')\">uninstall</a>
                            </td>
                        </tr>
                    {% endfor %}
                </table>
            {% endif %}

        {% elseif isAnonymousUser %}

            <p>Please contact the system administrator, or <a href=\"?module={{ loginModule }}\">login to Matomo</a> to learn more.</p>

        {% else %}
            <p>
                If this error continues to happen you may want to send an
                <a href=\"mailto:{{ emailSuperUser }}?subject={{ 'Fatal error in Matomo ' ~ piwikVersion|e('url') }}&body={{ lastError.message|e('url') }}%20in%20{{ lastError.file|e('url') }}%20{{ lastError.line|e('url') }}%20using%20PHP%20{{ constant('PHP_VERSION') }}\">error report</a>
                to your system administrator.
            </p>
        {% endif %}


        {% if not isAllowedToTroubleshootAsSuperUser and not isSuperUser %}
            <p>If you are Super User, but cannot login because of this error, you can still troubleshoot further. Follow these steps:
                <br/>1) open the config/config.ini.php file and look for the <code>salt</code> value under <code>[General]</code>.
                <br/>2) edit this current URL you are viewing and add the following text (replacing <code>salt_value_from_config</code> by the <code>salt</code> value from the config file):
                <br/><br/><code>index.php?i_am_super_user=salt_value_from_config&....</code>
            </p>
        {% endif %}


        </div>

    </body>
</html>
", "@CorePluginsAdmin/safemode.twig", "/var/www/cse135bpj.site/public_html/matomo/plugins/CorePluginsAdmin/templates/safemode.twig");
    }
}
