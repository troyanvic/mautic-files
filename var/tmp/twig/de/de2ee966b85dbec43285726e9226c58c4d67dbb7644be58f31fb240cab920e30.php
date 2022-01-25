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

/* :speckert_and_klein:email.mjml.twig */
class __TwigTemplate_9cf7033c4a643f12a58f2ec6f5c632aecbd65c3d1d42c6c63f771c3cecd0699b extends \Twig\Template
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
        echo "<mjml>
  <mj-body background-color=\"#fcfcfc\">
    <mj-section padding-top=\"0\"
                padding-bottom=\"0\"
                background-color=\"#ffff00\">
      <mj-column vertical-align=\"middle\">
        <mj-text padding-left=\"0\"
                 padding-right=\"0\"
                 padding-bottom=\"18px\"
                 padding-top=\"18px\"
                 align=\"center\"
                 font-family=\"Ubuntu, Helvetica, Arial, sans-serif, Helvetica, Arial, sans-serif\"
                 font-size=\"17px\"
                 font-weight=\"bold\"
                 text-transform=\"uppercase\"
                 color=\"#000000\">Speckert + Klein • Der Spezialist wenn es um stempel geht</mj-text>
      </mj-column>
    </mj-section>

    <mj-section padding-top=\"0\"
                padding-bottom=\"40px\"
                background-color=\"#ffff00\">
      <mj-column vertical-align=\"middle\">
        <mj-text padding-left=\"0\"
                 padding-right=\"0\"
                 padding-bottom=\"18px\"
                 padding-top=\"18px\"
                 align=\"center\"
                 font-family=\"Ubuntu, Helvetica, Arial, sans-serif, Helvetica, Arial, sans-serif\"
                 font-size=\"30px\"
                 font-weight=\"bold\"
                 line-height=\"60px\"
                 text-transform=\"uppercase\"
                 letter-spacing=\"1.2px\"
                 color=\"#000000\">Erleichtert den office-alltag, ob in der firma oder zuhause.</mj-text>
      </mj-column>
    </mj-section>

    <mj-section padding-bottom=\"0\"
                padding-top=\"0\"
                background-color=\"#ffffff\">
      <mj-column width=\"100%\"
                 vertical-align=\"top\">
        <mj-image src=\"";
        // line 44
        echo $this->extensions['Mautic\CoreBundle\Templating\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . ($context["template"] ?? null)) . "/assets/header.png"), null, null, true);
        echo "\"
                  alt=\"Erleichtert den office-alltag, ob in der firma oder zuhause.\"
                  align=\"center\"
                  border=\"none\"
                  width=\"600px\"
                  padding-left=\"0px\"
                  padding-right=\"0px\"
                  padding-bottom=\"0px\"
                  padding-top=\"0\">
        </mj-image>
      </mj-column>
    </mj-section>

    <mj-section padding-bottom=\"10px\"
                padding-top=\"10px\"
                background-color=\"#fcfcfc\">
      <mj-column width=\"100%\"
                 vertical-align=\"top\">
        <mj-text padding-left=\"5px\"
                 padding-right=\"5px\"
                 padding-top=\"3px\"
                 padding-bottom=\"0\"
                 align=\"justify\"
                 font-family=\"Ubuntu, Helvetica, Arial, sans-serif, Helvetica, Arial, sans-serif\"
                 font-size=\"16px\"
                 line-height=\"1.5em\"
                 color=\"#000000\">
          <p>Sie kennen es bestimmt, hektische Tage im Office, nur noch \"schnell\" einen Stempelabdruck auf Ihre Papiere und dann passiert es. Schief, nicht sichtbar und unsauber.</p>
        </mj-text>
        <mj-text padding-left=\"5px\"
                 padding-right=\"5px\"
                 padding-top=\"0\"
                 padding-bottom=\"0\"
                 align=\"justify\"
                 font-family=\"Ubuntu, Helvetica, Arial, sans-serif, Helvetica, Arial, sans-serif\"
                 font-size=\"16px\"
                 line-height=\"1.5em\"
                 color=\"#000000\">
          <p>Diese kleinen Ärgernisse sind nicht mehr nötig!</p>
        </mj-text>
        <mj-text padding-left=\"5px\"
                 padding-right=\"5px\"
                 padding-top=\"0\"
                 padding-bottom=\"0\"
                 align=\"justify\"
                 font-family=\"Ubuntu, Helvetica, Arial, sans-serif, Helvetica, Arial, sans-serif\"
                 font-size=\"16px\"
                 line-height=\"1.5em\"
                 color=\"#000000\">
          <p>Die Professional Office Stempel sind extra für den Büro-Alltag und eine rege Nutzung entworfen worden. Das robuste Gehäuse aus Edelstahl ermöglicht einen sauberen Abdruck und es gibt sie in der Ausführung mit oder ohne Datum und bei Bedarf auch in Multicolor. Mit dem zeitlosen Design und der einfachen Bedienung ist er der perfekte Begleiter durch den Geschäftsalltag.</p>
        </mj-text>
        <mj-text padding-left=\"5px\"
                 padding-right=\"5px\"
                 padding-top=\"0\"
                 padding-bottom=\"0\"
                 align=\"justify\"
                 font-family=\"Ubuntu, Helvetica, Arial, sans-serif, Helvetica, Arial, sans-serif\"
                 font-size=\"16px\"
                 line-height=\"1.5em\"
                 color=\"#000000\">
          <p>Überzeugen Sie sich von den Professional Stempel.</p>
        </mj-text>
        <mj-text padding-left=\"5px\"
                 padding-right=\"5px\"
                 padding-top=\"0\"
                 padding-bottom=\"15px\"
                 align=\"justify\"
                 font-family=\"Ubuntu, Helvetica, Arial, sans-serif, Helvetica, Arial, sans-serif\"
                 font-size=\"16px\"
                 line-height=\"1.5em\"
                 color=\"#000000\">
          <p>Mit nur einem Klick zum den Professional Office Stempel.</p>
        </mj-text>
        <mj-text padding-left=\"5px\"
                 padding-right=\"5px\"
                 padding-top=\"0\"
                 padding-bottom=\"0\"
                 align=\"justify\"
                 font-family=\"Ubuntu, Helvetica, Arial, sans-serif, Helvetica, Arial, sans-serif\"
                 font-size=\"16px\"
                 line-height=\"1.5em\"
                 color=\"#000000\">
          <p>Freundliche Grüsse</p>
        </mj-text>
        <mj-text padding-left=\"5px\"
                 padding-right=\"5px\"
                 padding-top=\"0\"
                 padding-bottom=\"0\"
                 align=\"justify\"
                 font-family=\"Ubuntu, Helvetica, Arial, sans-serif, Helvetica, Arial, sans-serif\"
                 font-size=\"16px\"
                 line-height=\"1.5em\"
                 color=\"#000000\">
          <p>Speckert + Klein AG</p>
        </mj-text>
      </mj-column>
    </mj-section>

    <mj-section padding-bottom=\"10px\"
                padding-top=\"0\"
                background-color=\"#fcfcfc\">
      <mj-column width=\"50%\"
                 vertical-align=\"top\">
        <mj-image src=\"";
        // line 147
        echo $this->extensions['Mautic\CoreBundle\Templating\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . ($context["template"] ?? null)) . "/assets/signature-brasser.png"), null, null, true);
        echo "\"
                  alt=\"Daniel Brasser signature\"
                  align=\"center\"
                  width=\"300px\"
                  border=\"none\"
                  padding-left=\"0\"
                  padding-right=\"0\"
                  padding-bottom=\"0\"
                  padding-top=\"0\">
        </mj-image>
        <mj-text padding-left=\"5px\"
                 padding-right=\"5px\"
                 padding-top=\"0\"
                 padding-bottom=\"2px\"
                 align=\"center\"
                 font-family=\"Ubuntu, Helvetica, Arial, sans-serif, Helvetica, Arial, sans-serif\"
                 font-size=\"16px\"
                 line-height=\"1.5em\"
                 color=\"#000000\">
          <span>Daniel Brasser</span>
        </mj-text>
        <mj-text padding-left=\"5px\"
                 padding-right=\"5px\"
                 padding-top=\"0\"
                 padding-bottom=\"2px\"
                 align=\"center\"
                 font-family=\"Ubuntu, Helvetica, Arial, sans-serif, Helvetica, Arial, sans-serif\"
                 font-size=\"16px\"
                 line-height=\"1.5em\"
                 color=\"#000000\">
          <span>Verkaufsleiter & Mitglied der</span>
        </mj-text>
        <mj-text padding-left=\"5px\"
                 padding-right=\"5px\"
                 padding-top=\"0\"
                 padding-bottom=\"0\"
                 align=\"center\"
                 font-family=\"Ubuntu, Helvetica, Arial, sans-serif, Helvetica, Arial, sans-serif\"
                 font-size=\"16px\"
                 line-height=\"1.5em\"
                 color=\"#000000\">
          <span>Geschäftsleitung</span>
        </mj-text>
      </mj-column>


      <mj-column width=\"50%\"
                 vertical-align=\"top\">
        <mj-image src=\"";
        // line 195
        echo $this->extensions['Mautic\CoreBundle\Templating\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . ($context["template"] ?? null)) . "/assets/signature-sherifi.png"), null, null, true);
        echo "\"
                  alt=\"Burim Sherifi signature\"
                  align=\"center\"
                  width=\"300px\"
                  border=\"none\"
                  padding-left=\"0\"
                  padding-right=\"0\"
                  padding-bottom=\"8px\"
                  padding-top=\"0\">
        </mj-image>
        <mj-text padding-left=\"5px\"
                 padding-right=\"5px\"
                 padding-top=\"0\"
                 padding-bottom=\"2px\"
                 align=\"center\"
                 font-family=\"Ubuntu, Helvetica, Arial, sans-serif, Helvetica, Arial, sans-serif\"
                 font-size=\"16px\"
                 line-height=\"1.5em\"
                 color=\"#000000\">
          <span>Burim Sherifi</span>
        </mj-text>
        <mj-text padding-left=\"5px\"
                 padding-right=\"5px\"
                 padding-top=\"0\"
                 padding-bottom=\"2px\"
                 align=\"center\"
                 font-family=\"Ubuntu, Helvetica, Arial, sans-serif, Helvetica, Arial, sans-serif\"
                 font-size=\"16px\"
                 line-height=\"1.5em\"
                 color=\"#000000\">
          <span>Kundenberatung</span>
        </mj-text>
      </mj-column>
    </mj-section>

    <mj-section padding-bottom=\"20px\"
                padding-top=\"0\"
                background-color=\"#fcfcfc\">
      <mj-column width=\"70%\"
                 align=\"center\">
      <mj-button href=\"https://www.speckertklein.ch/UI/de-DE/Catalog/SpeckertuC/PROFESSIONAL-TEXTSTEMPEL/20200722115501778\"
                 width=\"100%\"
                 height=\"71px\"
                 align=\"center\"
                 border=\"none\"
                 border-radius=\"7px\"
                 padding-left=\"5px\"
                 padding-right=\"5px\"
                 padding-bottom=\"20px\"
                 padding-top=\"20px\"
                 inner-padding=\"5\"
                 font-family=\"Ubuntu, Helvetica, Arial, sans-serif, Helvetica, Arial, sans-serif\"
                 font-size=\"25px\"
                 font-weight=\"bold\"
                 line-height=\"30px\"
                 text-transform=\"uppercase\"
                 vertical-align=\"middle\"
                 letter-spacing=\"1px\"
                 color=\"#000000\"
                 background-color=\"#ffff00\">Zum professional stempel</mj-button>
      </mj-column>
    </mj-section>

    <mj-section padding-bottom=\"0\"
                padding-top=\"0\"
                padding-left=\"10px\"
                padding-right=\"10px\"
                background-color=\"#ffff00\">
      <mj-column width=\"33.33333333333333%\"
                 vertical-align=\"top\">
        <mj-image src=\"";
        // line 265
        echo $this->extensions['Mautic\CoreBundle\Templating\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . ($context["template"] ?? null)) . "/assets/footer_img-1.png"), null, null, true);
        echo "\"
                  alt=\"Red Pepper\"
                  align=\"center\"
                  width=\"185px\"
                  border=\"3px solid #BFBFBF\"
                  border-radius=\"15px\"
                  padding-left=\"0px\"
                  padding-right=\"0px\"
                  padding-bottom=\"8px\"
                  padding-top=\"0\"></mj-image>
        <mj-text padding-left=\"5px\"
                 padding-right=\"5px\"
                 padding-top=\"0\"
                 padding-bottom=\"2px\"
                 align=\"center\"
                 font-family=\"Ubuntu, Helvetica, Arial, sans-serif, Helvetica, Arial, sans-serif\"
                 font-size=\"12px\"
                 font-weight=\"bold\"
                 line-height=\"1.5em\"
                 text-transform=\"uppercase\"
                 color=\"#000000\">Grösseres indexfenster</mj-text>
        <mj-text padding-left=\"5px\"
                 padding-right=\"5px\"
                 padding-top=\"0\"
                 padding-bottom=\"0\"
                 align=\"center\"
                 font-family=\"Ubuntu, Helvetica, Arial, sans-serif, Helvetica, Arial, sans-serif\"
                 font-size=\"13px\"
                 line-height=\"1em\"
                 color=\"#000000\">für eine bessere Erkennung</mj-text>
      </mj-column>
      <mj-column width=\"33.33333333333333%\"
                 vertical-align=\"top\">
        <mj-image src=\"";
        // line 298
        echo $this->extensions['Mautic\CoreBundle\Templating\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . ($context["template"] ?? null)) . "/assets/footer_img-2.png"), null, null, true);
        echo "\"
                  alt=\"Red Pepper\"
                  align=\"center\"
                  width=\"185px\"
                  border=\"3px solid #BFBFBF\"
                  border-radius=\"15px\"
                  padding-left=\"0px\"
                  padding-right=\"0px\"
                  padding-bottom=\"8px\"
                  padding-top=\"0\"></mj-image>
        <mj-text padding-left=\"5px\"
                 padding-right=\"5px\"
                 padding-top=\"0\"
                 padding-bottom=\"2px\"
                 align=\"center\"
                 font-family=\"Ubuntu, Helvetica, Arial, sans-serif, Helvetica, Arial, sans-serif\"
                 font-size=\"12px\"
                 font-weight=\"bold\"
                 line-height=\"1.5em\"
                 text-transform=\"uppercase\"
                 color=\"#000000\">Breitere DatumsrÄder</mj-text>
        <mj-text padding-left=\"5px\"
                 padding-right=\"5px\"
                 padding-top=\"0\"
                 padding-bottom=\"0\"
                 align=\"center\"
                 font-family=\"Ubuntu, Helvetica, Arial, sans-serif, Helvetica, Arial, sans-serif\"
                 font-size=\"13px\"
                 line-height=\"1em\"
                 color=\"#000000\">mit NEUEM BANDANTRIED</mj-text>
      </mj-column>
      <mj-column width=\"33.33333333333333%\"
                 vertical-align=\"top\">
        <mj-image src=\"";
        // line 331
        echo $this->extensions['Mautic\CoreBundle\Templating\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . ($context["template"] ?? null)) . "/assets/footer_img-3.png"), null, null, true);
        echo "\"
                  alt=\"Red Pepper\"
                  align=\"center\"
                  width=\"185px\"
                  border=\"3px solid #BFBFBF\"
                  border-radius=\"15px\"
                  padding-left=\"0px\"
                  padding-right=\"0px\"
                  padding-bottom=\"8px\"
                  padding-top=\"0\"></mj-image>
        <mj-text padding-left=\"5px\"
                 padding-right=\"5px\"
                 padding-top=\"0\"
                 padding-bottom=\"2px\"
                 align=\"center\"
                 font-family=\"Ubuntu, Helvetica, Arial, sans-serif, Helvetica, Arial, sans-serif\"
                 font-size=\"12px\"
                 font-weight=\"bold\"
                 line-height=\"1.5em\"
                 text-transform=\"uppercase\"
                 color=\"#000000\">Spezialle GRIFFZONEN</mj-text>
        <mj-text padding-left=\"5px\"
                 padding-right=\"5px\"
                 padding-top=\"0\"
                 padding-bottom=\"0\"
                 align=\"center\"
                 font-family=\"Ubuntu, Helvetica, Arial, sans-serif, Helvetica, Arial, sans-serif\"
                 font-size=\"13px\"
                 line-height=\"1em\"
                 color=\"#000000\">an den Standfüssen</mj-text>
      </mj-column>
    </mj-section>

    <mj-section padding-bottom=\"15px\"
                padding-top=\"15px\"
                background-color=\"#ffff00\">
      <mj-navbar>
        <mj-navbar-link href=\"https://www.speckertklein.ch/UI/de-DE/Catalog/SpeckertuC/STEMPELKISSEN-STANDARD-VON-TRODAT/20200519072605528?pageNumber=1\"
                        font-family=\"Ubuntu, Helvetica, Arial, sans-serif, Helvetica, Arial, sans-serif\"
                        font-size=\"16px\"
                        font-weight=\"bold\"
                        text-transform=\"lowercase\"
                        color=\"#000000\">www.speckertklein.ch</mj-navbar-link>
      </mj-navbar>
    </mj-section>

    <mj-section padding-top=\"15px\"
                padding-bottom=\"5px\"
                background-color=\"#ffff00\">
      <mj-text padding-left=\"5px\"
               padding-right=\"5px\"
               padding-top=\"0\"
               padding-bottom=\"0\"
               align=\"center\"
               font-family=\"Ubuntu, Helvetica, Arial, sans-serif, Helvetica, Arial, sans-serif\"
               font-size=\"14px\"
               line-height=\"1em\"
               color=\"#000000\">Gesendet an: {contactfield=email}</mj-text>
    </mj-section>

    <mj-section padding-top=\"5px\"
                padding-bottom=\"0\"
                background-color=\"#ffff00\">
      <mj-text padding-left=\"5px\"
               padding-right=\"5px\"
               padding-top=\"0\"
               padding-bottom=\"0\"
               align=\"center\"
               font-family=\"Ubuntu, Helvetica, Arial, sans-serif, Helvetica, Arial, sans-serif\"
               font-size=\"11px\"
               line-height=\"1em\"
               color=\"#000000\">{unsubscribe_text}</mj-text>
    </mj-section>

    <mj-section padding-top=\"30px\"
                padding-bottom=\"30px\"
                background-color=\"#ffff00\">
      <mj-text padding-left=\"5px\"
               padding-right=\"5px\"
               padding-top=\"0\"
               padding-bottom=\"0\"
               align=\"center\"
               font-family=\"Ubuntu, Helvetica, Arial, sans-serif, Helvetica, Arial, sans-serif\"
               font-size=\"14px\"
               line-height=\"1em\"
               color=\"#000000\">Speckert+Klein AG, Hölzliwisenstrasse 2a, Postfach 327, 8604 Volketswil, Schweiz</mj-text>
    </mj-section>
  </mj-body>
</mjml>
";
    }

    public function getTemplateName()
    {
        return ":speckert_and_klein:email.mjml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  384 => 331,  348 => 298,  312 => 265,  239 => 195,  188 => 147,  82 => 44,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", ":speckert_and_klein:email.mjml.twig", "/Applications/MAMP/htdocs/monkeys-mautic-latest/themes/speckert_and_klein/html/email.mjml.twig");
    }
}
