<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/olivierstyle.css">
    <title>Journaleintrag</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js"
        integrity="sha256-+C0A5Ilqmu4QcSPxrlGpaZxJ04VjsRjKu+G82kl5UJk=" crossorigin="anonymous"></script>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.bootstrap3.min.css"
        integrity="sha256-ze/OEYGcFbPRmvCnrSeKbRTtjG4vGLHXgOqsyLFTRjg=" crossorigin="anonymous" />
</head>

<body>

    <div class="title">
        <h1>Colley</h1>
        <h2>Bitte wählen Sie das Datum, die Konten und geben Sie den Betrag ein.</h2>
    </div>

    <?php
    include("heading.view.php");
    ?>

    <p id="datum_error"></p>
    <p id="haben_error"></p>
    <p id="soll_error"></p>
    <p id="betrag_error"></p>

    <form>

        <table class="TabelleKlein margin-auto">
            <tr>
                <td><label>Datum:</label></td>
                <td><input type="date" id="date" name="fname"><br>
                </td>
            </tr>
            <tr>
                <td><label>Haben:</label></td>
                <td>
                    <select name="haben" id="haben" placeholder="Bitte wählen sie ein Konto aus">
                        <option value="">-- Select --</option>
                        <option style="background-color: blue; color: white;" disabled>1 Aktiven</option>
                        <option style="background-color: lightgreen; color: black;" disabled>10 Umlaufvermögen</option>
                        <option style="font-weight: bold;" disabled>100 Flüssige Mittel</option>
                        <option value="1000">1000 Kasse</option>
                        <option value="1020">1020 Bankguthaben</option>
                        <option style="font-weight: bold;" disabled>106 Kurzfristig gehaltene Aktiven mit Börsenkurs
                        </option>
                        <option value="1060">1060 Wertschriften</option>
                        <option value="1069">1069 Wertberichtigungen Wertschriften</option>
                        <option style="font-weight: bold;" disabled>110 Forderungen aus Lieferungen und Liestungen
                        </option>
                        <option value="1100">1100 Forderungen aus Lieferungen und Leistungen (Debitoren)</option>
                        <option value="1109">1109 Delkredere</option>
                        <option style="font-weight: bold;" disabled>114 Übrige kurzfristige Forderungen</option>
                        <option value="1140">1140 Vorschüsse und Darlehen</option>
                        <option value="1149">1149 Wertberichtigungen Vorschüsse und Darlehen</option>
                        <option value="1170">1170 Vorsteuer MWST Material, Waren, Dienstleistungen, Energie</option>
                        <option value="1171">1171 Vorsteuer MWST Investitionen, übriger Betriebsaufwand</option>
                        <option value="1176">1176 Verrechnungssteuer</option>
                        <option value="1180">1180 Forderungen gegenüber Sozialversicherungen und Vorsorgeeinrichtungen
                        </option>
                        <option value="1189">1189 Quellensteuer</option>
                        <option value="1190">1190 Sonstige kurzfristige Forderungen</option>
                        <option value="1199">1199 Wertberichtigungen sonstige kurzfristige Forderungen</option>
                        <option style="font-weight: bold;" disabled>120 Vorräte und nicht fakturierte Dienstleistungen
                        </option>
                        <option value="1200">1200 Handelswaren</option>
                        <option value="1210">1210 Rohstoffe</option>
                        <option value="1220">1220 Werkstoffe</option>
                        <option value="1230">1230 Hilfs- und Verbrauchsmaterial</option>
                        <option value="1250">1250 Handelswaren in Konsignation</option>
                        <option value="1260">1260 Fertige Erzeugnisse</option>
                        <option value="1270">1270 Unfertige Erzeugnisse</option>
                        <option value="1280">1280 Nicht fakturierte Dienstleistungen</option>
                        <option style="font-weight: bold;" disabled>130 Aktive Rechnungsabgrenzungen</option>
                        <option value="1300">1300 Bezahlter Aufwand des Folgejahres</option>
                        <option value="1301">1301 Noch nicht erhaltener Ertrag</option>
                        <option style="background-color: lightgreen; color: black;" disabled>14 Anlagevermögen</option>
                        <option style="font-weight: bold;">140 Finanzanlagen</option>
                        <option value="1400">1400 Wertschriften</option>
                        <option value="1409">1409 Wertberichtigungen Wertschriften</option>
                        <option value="1440">1440 Darlehen</option>
                        <option value="1441">1441 Hypotheken</option>
                        <option value="1449">1449 Wertberichtigungen langfristige Forderungen</option>
                        <option style="font-weight: bold;" disabled>148 Beteiligungen</option>
                        <option value="1480">1480 Beteiligungen</option>
                        <option value="1489">1489 Wertberichtigungen Beteiligungen</option>
                        <option style="font-weight: bold;" disabled>150 Mobile Sachanlagen</option>
                        <option value="1500">1500 Maschinen und Apparate</option>
                        <option value="1509">1509 Wertberichtigungen Maschinen und Apparate</option>
                        <option value="1510">1510 Mobiliar und Einrichtungen</option>
                        <option value="1519">1519 Wertberichtigungen Mobiliar und Einrichtungen</option>
                        <option value="1520">1520 Büromaschinen, Informatik, Kommunikationstechnologie</option>
                        <option value="1529">1529 Wertberichtigungen Büromaschinen, Informatik,
                            Kommunikationstechnologie</option>
                        <option value="1530">1530 Fahrzeuge</option>
                        <option value="1539">1539 Wertberichtigungen Fahrzeuge</option>
                        <option value="1540">1540 Werkzeuge und Geräte</option>
                        <option value="1549">1549 Wertberichtigungen Werkzeuge und Geräte</option>
                        <option style="font-weight: bold;" disabled>160 Immobile Sachanlagen</option>
                        <option value="1600">1600 Geschäftsliegenschaften</option>
                        <option value="1609">1609 Wertberichtigungen Geschäftsliegenschaften</option>
                        <option style="font-weight: bold;" disabled>170 Immaterielle Werte</option>
                        <option value="1700">1700 Patente, Know-how, Lizenzen, Rechte, Entwicklungen</option>
                        <option value="1709">1709 Wertberichtigungen Patente, Know-how, Lizenzen, Rechte, Entwicklungen
                        </option>
                        <option value="1770">1770 Goodwill</option>
                        <option value="1779">1779 Wertberichtigungen Goodwill</option>
                        <option style="font-weight: bold;" disabled>180 Nicht einbezahltes Grund-, Gesellschafter- oder
                            Stiftungs kapital</option>
                        <option value="1850">1850 Nicht einbezahltes Aktien-, Stamm-, Anteilschein- oder
                            Stiftungskapital</option>
                        <option style="background-color: blue; color: white;" disabled>2 Passiven</option>
                        <option style="background-color: lightgreen; color: black;">20 Kurzfristiges Fremdkapital
                        </option>
                        <option style="font-weight: bold;" disabled>200 Verbindlichkeiten aus Lieferungen und Leistungen
                        </option>
                        <option value="2000">2000 Verbindlichkeiten aus Lieferungen und Leistungen (Kreditoren)</option>
                        <option value="2030">2030 Erhaltene Anzahlungen</option>
                        <option style="font-weight: bold;" disabled>210 Kurzfristige verzinsliche Verbindlichkeiten
                        </option>
                        <option value="2100">2100 Bankverbindlichkeiten</option>
                        <option value="2120">2120 Verbindlichkeiten aus Finanzierungsleasing</option>
                        <option value="2140">2140 Übrige verzinsliche Verbindlichkeiten</option>
                        <option style="font-weight: bold;" disabled>220 Übrige kurzfristige Verbindlichkeiten</option>
                        <option value="2200">2200 Geschuldete MWST (Umsatzsteuer)</option>
                        <option value="2201">2201 Abrechnungskonto MWST</option>
                        <option value="2206">2206 Verrechnungssteuer</option>
                        <option value="2208">2208 Direkte Steuern</option>
                        <option value="2210">2210 Sonstige kurzfristige Verbindlichkeiten</option>
                        <option value="2261">2261 Beschlossene Ausschüttungen</option>
                        <option value="2270">2270 Sozialversicherungen und Vorsorgeeinrichtungen</option>
                        <option value="2279">2279 Quellensteuer</option>
                        <option style="font-weight: bold;" disabled>230 Passive Rechnungsabgrenzungen und kurzfristige
                            Rückstellungen</option>
                        <option value="2300">2300 Noch nicht bezahlter Aufwand</option>
                        <option value="2301">2301 Erhaltener Ertrag des Folgejahres</option>
                        <option value="2330">2330 Kurzfristige Rückstellungen</option>
                        <option style="background-color: lightgreen; color: black;">24 Langfristiges Fremdkapital
                        </option>
                        <option style="font-weight: bold;" disabled>240 Langfristige verzinsliche Verbindlichkeiten
                        </option>
                        <option value="2400">Bankverbindlichkeiten</option>
                        <option value="2420">2420 Verbindlichkeiten aus Finanzierungsleasing</option>
                        <option value="2430">2430 Obligationenanleihen</option>
                        <option value="2450">2450 Darlehen</option>
                        <option value="2451">2451 Hypotheken</option>
                        <option style="font-weight: bold;" disabled>250 Übrige langfristige Verbindlichkeiten</option>
                        <option value="2500">2500 Übrige langfristige Verbindlichkeiten (unverzinslich)</option>
                        <option style="font-weight: bold;" disabled>260 Rückstellungen sowie vom Gesetz vorgesehene
                            ähnliche Positionen</option>
                        <option value="2600">2600 Rückstellungen</option>
                        <option style="background-color: lightgreen; color: black;">28 Eigenkapital (juristische
                            Personen)</option>
                        <option style="font-weight: bold;" disabled>280 Grund-, Gesellschafter- oder Stiftungskapital
                        </option>
                        <option value="2800">2800 Aktien-, Stamm-, Anteilschein- oder Stiftungskapital</option>
                        <option style="font-weight: bold;">290 Reserven und Jahresgewinn oder Jahresverlust</option>
                        <option value="2900">2900 Gesetzliche Kapitalreserve</option>
                        <option value="2930">2930 Reserve für eigene Kapitalanteile</option>
                        <option value="2940">2940 Aufwertungsreserve</option>
                        <option value="2950">2950 Gesetzliche Gewinnreserve</option>
                        <option value="2960">2960 Freiwillige Gewinnreserven</option>
                        <option value="2970">2970 Gewinnvortrag oder Verlustvortrag</option>
                        <option value="2979">2979 Jahresgewinn oder Jahresverlust</option>
                        <option value="2980">2980 Eigene Aktien, Stammanteile oder Anteilscheine (Minusposten)</option>
                        <option style="background-color: lightgreen; color: black;">28 Eigenkapital (Einzelunternehmen)
                        </option>
                        <option value="2800">2800 Eigenkapital zu Beginn des Geschäftsjahres</option>
                        <option value="2820">2820 Kapitaleinlagen und Kapitalrückzüge</option>
                        <option value="2850">2850 Privat</option>
                        <option value="2891">2891 Jahresgewinn oder Jahresverlust</option>
                        <option style="background-color: lightgreen; color: black;" disabled>28 Eigenkapital
                            (Personengesellschaft)</option>
                        <option value="2800">2800 Eigenkapital Gesellschafter A zu Beginn des Geschäftsjahres</option>
                        <option value="2810">2810 Kapitaleinlagen und Kapitalrückzüge Gesellschafter A</option>
                        <option value="2820">2820 Privat Gesellschafter A</option>
                        <option value="2831">2831 Jahresgewinn oder Jahresverlust Gesellschafter A</option>
                        <option value="2850">2850 Eigenkapital Kommanditär A zu Beginn des Geschäftsjahres</option>
                        <option value="2860">2860 Kapitaleinlagen und Kapitalrückzüge Kommanditär A </option>
                        <option value="2870">2870 Privat Kommanditär A</option>
                        <option value="2881">2881 Jahresgewinn oder Jahresverlust Kommanditär A</option>
                        <option style="background-color: blue; color: white;" disabled>3 Betrieblicher Ertrag aus
                            Lieferungen und Leistungen</option>
                        <option value="3000">3000 Produktionserlöse</option>
                        <option value="3200">3200 Handelserlöse</option>
                        <option value="3400">3400 Dienstleistungserlöse</option>
                        <option value="3600">3600 Übrige Erlöse aus Lieferungen und Leistungen</option>
                        <option value="3700">3700 Eigenleistungen</option>
                        <option value="3710">3710 Eigenverbrauch</option>
                        <option value="3800">3800 Erlösminderungen</option>
                        <option value="3805">3805 Verluste Forderungen (Debitoren), Veränderung Delkredere</option>
                        <option value="3900">3900 Bestandesänderungen unfertige Erzeugnisse</option>
                        <option value="3901">3901 Bestandesänderungen fertige Erzeugnisse</option>
                        <option value="3940">3940 Bestandesänderungen nicht fakturierte Dienstleistungen</option>
                        <option style="background-color: blue; color: white;" disabled>4 Aufwand für Material,
                            Handelswaren, Dienstleistungen und Energie</option>
                        <option value="4000">4000 Materialaufwand Produktion</option>
                        <option value="4200">4200 Handelswarenaufwand</option>
                        <option value="4400">4400 Aufwand für bezogene Dienstleistungen</option>
                        <option value="4500">4500 Energieaufwand zur Leistungserstellung</option>
                        <option value="4900">4900 Aufwandminderungen</option>
                        <option style="background-color: blue; color: white;" disabled>5 Personalaufwand</option>
                        <option value="5000">5000 Lohnaufwand</option>
                        <option value="5700">5700 Sozialversicherungsaufwand</option>
                        <option value="5800">5800 Übriger Personalaufwand</option>
                        <option value="5900">5900 Leistungen Dritter</option>
                        <option style="background-color: blue; color: white;" disabled>6 Übriger betrieblicher Aufwand,
                            Abschreibungen und Wertberichtigungen sowie Finanzergebnis</option>
                        <option value="6000">6000 Raumaufwand</option>
                        <option value="6100">6100 Unterhalt, Reparaturen, Ersatz mobile Sachanlagen</option>
                        <option value="6105">6105 Leasingaufwand mobile Sachanlagen</option>
                        <option value="6200">6200 Fahrzeug- und Transportaufwand</option>
                        <option value="6260">6260 Fahrzeugleasing und -mieten</option>
                        <option value="6300">6300 Sachversicherungen, Abgaben, Gebühren, Bewilligungen</option>
                        <option value="6400">6400 Energie- und Entsorgungsaufwand</option>
                        <option value="6500">6500 Verwaltungsaufwand</option>
                        <option value="6570">6570 Informatikaufwand inkl. Leasing</option>
                        <option value="6600">6600 Werbeaufwand</option>
                        <option value="6700">6700 Sonstiger betrieblicher Aufwand</option>
                        <option value="6800">6800 Abschreibungen und Wertberichtigungen auf Positionen des
                            Anlagevermögens</option>
                        <option value="6900">6900 Finanzaufwand</option>
                        <option value="6950">6950 Finanzertrag</option>
                        <option style="background-color: blue; color: white;" disabled>7 Betrieblicher Nebenerfolg
                        </option>
                        <option value="7000">7000 Ertrag Nebenbetrieb</option>
                        <option value="7010">7010 Aufwand Nebenbetrieb</option>
                        <option value="7500">7500 Ertrag betriebliche Liegenschaft</option>
                        <option value="7510">7510 Aufwand betriebliche Liegenschaft</option>
                        <option style="background-color: blue; color: white;" disabled>8 Betriebsfremder,
                            ausserordentlicher, einmaliger oder perioden-fremder Aufwand und Ertrag</option>
                        <option value="8000">8000 Betriebsfremder Aufwand</option>
                        <option value="8100">8100 Betriebsfremder Ertrag</option>
                        <option value="8500">8500 Ausserordentlicher, einmaliger oder periodenfremder Aufwand</option>
                        <option value="8510">8510 Ausserordentlicher, einmaliger oder periodenfremder Ertrag</option>
                        <option value="8900">8900 Direkte Steuern</option>
                        <option style="background-color: blue; color: white;" disabled>9 Abschluss</option>
                        <option value="9200">9200 Jahresgewinn oder Jahresverlust</option>
                    </select><br>
                </td>
            </tr>
            <tr>
                <td><label>Soll:</label></td>
                <td>
                    <select name="soll" id="soll" placeholder="Bitte wählen sie ein Konto aus">
                        <option value="">-- Select --</option>
                        <option style="background-color: blue; color: white;" disabled>1 Aktiven</option>
                        <option style="background-color: lightgreen; color: black;" disabled>10 Umlaufvermögen</option>
                        <option style="font-weight: bold;" disabled>100 Flüssige Mittel</option>
                        <option value="1000">1000 Kasse</option>
                        <option value="1020">1020 Bankguthaben</option>
                        <option style="font-weight: bold;" disabled>106 Kurzfristig gehaltene Aktiven mit Börsenkurs
                        </option>
                        <option value="1060">1060 Wertschriften</option>
                        <option value="1069">1069 Wertberichtigungen Wertschriften</option>
                        <option style="font-weight: bold;" disabled>110 Forderungen aus Lieferungen und Liestungen
                        </option>
                        <option value="1100">1100 Forderungen aus Lieferungen und Leistungen (Debitoren)</option>
                        <option value="1109">1109 Delkredere</option>
                        <option style="font-weight: bold;" disabled>114 Übrige kurzfristige Forderungen</option>
                        <option value="1140">1140 Vorschüsse und Darlehen</option>
                        <option value="1149">1149 Wertberichtigungen Vorschüsse und Darlehen</option>
                        <option value="1170">1170 Vorsteuer MWST Material, Waren, Dienstleistungen, Energie</option>
                        <option value="1171">1171 Vorsteuer MWST Investitionen, übriger Betriebsaufwand</option>
                        <option value="1176">1176 Verrechnungssteuer</option>
                        <option value="1180">1180 Forderungen gegenüber Sozialversicherungen und Vorsorgeeinrichtungen
                        </option>
                        <option value="1189">1189 Quellensteuer</option>
                        <option value="1190">1190 Sonstige kurzfristige Forderungen</option>
                        <option value="1199">1199 Wertberichtigungen sonstige kurzfristige Forderungen</option>
                        <option style="font-weight: bold;" disabled>120 Vorräte und nicht fakturierte Dienstleistungen
                        </option>
                        <option value="1200">1200 Handelswaren</option>
                        <option value="1210">1210 Rohstoffe</option>
                        <option value="1220">1220 Werkstoffe</option>
                        <option value="1230">1230 Hilfs- und Verbrauchsmaterial</option>
                        <option value="1250">1250 Handelswaren in Konsignation</option>
                        <option value="1260">1260 Fertige Erzeugnisse</option>
                        <option value="1270">1270 Unfertige Erzeugnisse</option>
                        <option value="1280">1280 Nicht fakturierte Dienstleistungen</option>
                        <option style="font-weight: bold;" disabled>130 Aktive Rechnungsabgrenzungen</option>
                        <option value="1300">1300 Bezahlter Aufwand des Folgejahres</option>
                        <option value="1301">1301 Noch nicht erhaltener Ertrag</option>
                        <option style="background-color: lightgreen; color: black;" disabled>14 Anlagevermögen</option>
                        <option style="font-weight: bold;">140 Finanzanlagen</option>
                        <option value="1400">1400 Wertschriften</option>
                        <option value="1409">1409 Wertberichtigungen Wertschriften</option>
                        <option value="1440">1440 Darlehen</option>
                        <option value="1441">1441 Hypotheken</option>
                        <option value="1449">1449 Wertberichtigungen langfristige Forderungen</option>
                        <option style="font-weight: bold;" disabled>148 Beteiligungen</option>
                        <option value="1480">1480 Beteiligungen</option>
                        <option value="1489">1489 Wertberichtigungen Beteiligungen</option>
                        <option style="font-weight: bold;" disabled>150 Mobile Sachanlagen</option>
                        <option value="1500">1500 Maschinen und Apparate</option>
                        <option value="1509">1509 Wertberichtigungen Maschinen und Apparate</option>
                        <option value="1510">1510 Mobiliar und Einrichtungen</option>
                        <option value="1519">1519 Wertberichtigungen Mobiliar und Einrichtungen</option>
                        <option value="1520">1520 Büromaschinen, Informatik, Kommunikationstechnologie</option>
                        <option value="1529">1529 Wertberichtigungen Büromaschinen, Informatik,
                            Kommunikationstechnologie</option>
                        <option value="1530">1530 Fahrzeuge</option>
                        <option value="1539">1539 Wertberichtigungen Fahrzeuge</option>
                        <option value="1540">1540 Werkzeuge und Geräte</option>
                        <option value="1549">1549 Wertberichtigungen Werkzeuge und Geräte</option>
                        <option style="font-weight: bold;" disabled>160 Immobile Sachanlagen</option>
                        <option value="1600">1600 Geschäftsliegenschaften</option>
                        <option value="1609">1609 Wertberichtigungen Geschäftsliegenschaften</option>
                        <option style="font-weight: bold;" disabled>170 Immaterielle Werte</option>
                        <option value="1700">1700 Patente, Know-how, Lizenzen, Rechte, Entwicklungen</option>
                        <option value="1709">1709 Wertberichtigungen Patente, Know-how, Lizenzen, Rechte, Entwicklungen
                        </option>
                        <option value="1770">1770 Goodwill</option>
                        <option value="1779">1779 Wertberichtigungen Goodwill</option>
                        <option style="font-weight: bold;" disabled>180 Nicht einbezahltes Grund-, Gesellschafter- oder
                            Stiftungs kapital</option>
                        <option value="1850">1850 Nicht einbezahltes Aktien-, Stamm-, Anteilschein- oder
                            Stiftungskapital</option>
                        <option style="background-color: blue; color: white;" disabled>2 Passiven</option>
                        <option style="background-color: lightgreen; color: black;">20 Kurzfristiges Fremdkapital
                        </option>
                        <option style="font-weight: bold;" disabled>200 Verbindlichkeiten aus Lieferungen und Leistungen
                        </option>
                        <option value="2000">2000 Verbindlichkeiten aus Lieferungen und Leistungen (Kreditoren)</option>
                        <option value="2030">2030 Erhaltene Anzahlungen</option>
                        <option style="font-weight: bold;" disabled>210 Kurzfristige verzinsliche Verbindlichkeiten
                        </option>
                        <option value="2100">2100 Bankverbindlichkeiten</option>
                        <option value="2120">2120 Verbindlichkeiten aus Finanzierungsleasing</option>
                        <option value="2140">2140 Übrige verzinsliche Verbindlichkeiten</option>
                        <option style="font-weight: bold;" disabled>220 Übrige kurzfristige Verbindlichkeiten</option>
                        <option value="2200">2200 Geschuldete MWST (Umsatzsteuer)</option>
                        <option value="2201">2201 Abrechnungskonto MWST</option>
                        <option value="2206">2206 Verrechnungssteuer</option>
                        <option value="2208">2208 Direkte Steuern</option>
                        <option value="2210">2210 Sonstige kurzfristige Verbindlichkeiten</option>
                        <option value="2261">2261 Beschlossene Ausschüttungen</option>
                        <option value="2270">2270 Sozialversicherungen und Vorsorgeeinrichtungen</option>
                        <option value="2279">2279 Quellensteuer</option>
                        <option style="font-weight: bold;" disabled>230 Passive Rechnungsabgrenzungen und kurzfristige
                            Rückstellungen</option>
                        <option value="2300">2300 Noch nicht bezahlter Aufwand</option>
                        <option value="2301">2301 Erhaltener Ertrag des Folgejahres</option>
                        <option value="2330">2330 Kurzfristige Rückstellungen</option>
                        <option style="background-color: lightgreen; color: black;">24 Langfristiges Fremdkapital
                        </option>
                        <option style="font-weight: bold;" disabled>240 Langfristige verzinsliche Verbindlichkeiten
                        </option>
                        <option value="2400">Bankverbindlichkeiten</option>
                        <option value="2420">2420 Verbindlichkeiten aus Finanzierungsleasing</option>
                        <option value="2430">2430 Obligationenanleihen</option>
                        <option value="2450">2450 Darlehen</option>
                        <option value="2451">2451 Hypotheken</option>
                        <option style="font-weight: bold;" disabled>250 Übrige langfristige Verbindlichkeiten</option>
                        <option value="2500">2500 Übrige langfristige Verbindlichkeiten (unverzinslich)</option>
                        <option style="font-weight: bold;" disabled>260 Rückstellungen sowie vom Gesetz vorgesehene
                            ähnliche Positionen</option>
                        <option value="2600">2600 Rückstellungen</option>
                        <option style="background-color: lightgreen; color: black;">28 Eigenkapital (juristische
                            Personen)</option>
                        <option style="font-weight: bold;" disabled>280 Grund-, Gesellschafter- oder Stiftungskapital
                        </option>
                        <option value="2800">2800 Aktien-, Stamm-, Anteilschein- oder Stiftungskapital</option>
                        <option style="font-weight: bold;">290 Reserven und Jahresgewinn oder Jahresverlust</option>
                        <option value="2900">2900 Gesetzliche Kapitalreserve</option>
                        <option value="2930">2930 Reserve für eigene Kapitalanteile</option>
                        <option value="2940">2940 Aufwertungsreserve</option>
                        <option value="2950">2950 Gesetzliche Gewinnreserve</option>
                        <option value="2960">2960 Freiwillige Gewinnreserven</option>
                        <option value="2970">2970 Gewinnvortrag oder Verlustvortrag</option>
                        <option value="2979">2979 Jahresgewinn oder Jahresverlust</option>
                        <option value="2980">2980 Eigene Aktien, Stammanteile oder Anteilscheine (Minusposten)</option>
                        <option style="background-color: lightgreen; color: black;">28 Eigenkapital (Einzelunternehmen)
                        </option>
                        <option value="2800">2800 Eigenkapital zu Beginn des Geschäftsjahres</option>
                        <option value="2820">2820 Kapitaleinlagen und Kapitalrückzüge</option>
                        <option value="2850">2850 Privat</option>
                        <option value="2891">2891 Jahresgewinn oder Jahresverlust</option>
                        <option style="background-color: lightgreen; color: black;" disabled>28 Eigenkapital
                            (Personengesellschaft)</option>
                        <option value="2800">2800 Eigenkapital Gesellschafter A zu Beginn des Geschäftsjahres</option>
                        <option value="2810">2810 Kapitaleinlagen und Kapitalrückzüge Gesellschafter A</option>
                        <option value="2820">2820 Privat Gesellschafter A</option>
                        <option value="2831">2831 Jahresgewinn oder Jahresverlust Gesellschafter A</option>
                        <option value="2850">2850 Eigenkapital Kommanditär A zu Beginn des Geschäftsjahres</option>
                        <option value="2860">2860 Kapitaleinlagen und Kapitalrückzüge Kommanditär A </option>
                        <option value="2870">2870 Privat Kommanditär A</option>
                        <option value="2881">2881 Jahresgewinn oder Jahresverlust Kommanditär A</option>
                        <option style="background-color: blue; color: white;" disabled>3 Betrieblicher Ertrag aus
                            Lieferungen und Leistungen</option>
                        <option value="3000">3000 Produktionserlöse</option>
                        <option value="3200">3200 Handelserlöse</option>
                        <option value="3400">3400 Dienstleistungserlöse</option>
                        <option value="3600">3600 Übrige Erlöse aus Lieferungen und Leistungen</option>
                        <option value="3700">3700 Eigenleistungen</option>
                        <option value="3710">3710 Eigenverbrauch</option>
                        <option value="3800">3800 Erlösminderungen</option>
                        <option value="3805">3805 Verluste Forderungen (Debitoren), Veränderung Delkredere</option>
                        <option value="3900">3900 Bestandesänderungen unfertige Erzeugnisse</option>
                        <option value="3901">3901 Bestandesänderungen fertige Erzeugnisse</option>
                        <option value="3940">3940 Bestandesänderungen nicht fakturierte Dienstleistungen</option>
                        <option style="background-color: blue; color: white;" disabled>4 Aufwand für Material,
                            Handelswaren, Dienstleistungen und Energie</option>
                        <option value="4000">4000 Materialaufwand Produktion</option>
                        <option value="4200">4200 Handelswarenaufwand</option>
                        <option value="4400">4400 Aufwand für bezogene Dienstleistungen</option>
                        <option value="4500">4500 Energieaufwand zur Leistungserstellung</option>
                        <option value="4900">4900 Aufwandminderungen</option>
                        <option style="background-color: blue; color: white;" disabled>5 Personalaufwand</option>
                        <option value="5000">5000 Lohnaufwand</option>
                        <option value="5700">5700 Sozialversicherungsaufwand</option>
                        <option value="5800">5800 Übriger Personalaufwand</option>
                        <option value="5900">5900 Leistungen Dritter</option>
                        <option style="background-color: blue; color: white;" disabled>6 Übriger betrieblicher Aufwand,
                            Abschreibungen und Wertberichtigungen sowie Finanzergebnis</option>
                        <option value="6000">6000 Raumaufwand</option>
                        <option value="6100">6100 Unterhalt, Reparaturen, Ersatz mobile Sachanlagen</option>
                        <option value="6105">6105 Leasingaufwand mobile Sachanlagen</option>
                        <option value="6200">6200 Fahrzeug- und Transportaufwand</option>
                        <option value="6260">6260 Fahrzeugleasing und -mieten</option>
                        <option value="6300">6300 Sachversicherungen, Abgaben, Gebühren, Bewilligungen</option>
                        <option value="6400">6400 Energie- und Entsorgungsaufwand</option>
                        <option value="6500">6500 Verwaltungsaufwand</option>
                        <option value="6570">6570 Informatikaufwand inkl. Leasing</option>
                        <option value="6600">6600 Werbeaufwand</option>
                        <option value="6700">6700 Sonstiger betrieblicher Aufwand</option>
                        <option value="6800">6800 Abschreibungen und Wertberichtigungen auf Positionen des
                            Anlagevermögens</option>
                        <option value="6900">6900 Finanzaufwand</option>
                        <option value="6950">6950 Finanzertrag</option>
                        <option style="background-color: blue; color: white;" disabled>7 Betrieblicher Nebenerfolg
                        </option>
                        <option value="7000">7000 Ertrag Nebenbetrieb</option>
                        <option value="7010">7010 Aufwand Nebenbetrieb</option>
                        <option value="7500">7500 Ertrag betriebliche Liegenschaft</option>
                        <option value="7510">7510 Aufwand betriebliche Liegenschaft</option>
                        <option style="background-color: blue; color: white;" disabled>8 Betriebsfremder,
                            ausserordentlicher, einmaliger oder perioden-fremder Aufwand und Ertrag</option>
                        <option value="8000">8000 Betriebsfremder Aufwand</option>
                        <option value="8100">8100 Betriebsfremder Ertrag</option>
                        <option value="8500">8500 Ausserordentlicher, einmaliger oder periodenfremder Aufwand</option>
                        <option value="8510">8510 Ausserordentlicher, einmaliger oder periodenfremder Ertrag</option>
                        <option value="8900">8900 Direkte Steuern</option>
                        <option style="background-color: blue; color: white;" disabled>9 Abschluss</option>
                        <option value="9200">9200 Jahresgewinn oder Jahresverlust</option>
                    </select><br>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Betrag:</label>
                </td>
                <td>
                    <input type="number" id="betrag" placeholder="CHF">
                </td>
            </tr>
            <tr>
                <td>

                </td>
                <td>
                    <button type="submit">Journaleintrag erstellen</button>
                </td>
            </tr>
        </table>
    </form>

    <script>
    $(document).ready(function() {
        $('select').selectize({
            sortField: 'text'
        });
    });
    </script>

    <script src="public/js/clientSideValidationJournaleintrag.js"></script>
    <script src="public/js/navigate.js"></script>
</body>

</html>