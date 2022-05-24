<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/olivierstyle.css">
    <link rel="shortcut icon" href="assets/favicon.ico">
    <title>Kontoübersicht</title>
</head>

<body>

    <?php
    include("heading.view.php");
    ?>

    <div class="title">
        <h1>Colley</h1>
        <h2>Hier ist eine Übersicht aller Konten</h2>
    </div>
    <div class="part">
        <h2>1 Aktiven</h2>
        <h2>10 Umlaufvermögen</h2>
        <h2>100 Flüssige Mittel</h2>
    </div>
    <div class="kontouebersichtTabelle">
        <div class="konto">
            <p>1000</p>
            <p>Kasse</p>
            <p>Kasse im Büro</p>
        </div>
        <div class="konto">
            <p>1020</p>
            <p>Bankkonto</p>
            <p>Bankkonto für Rechnungsbeträge der Kunden</p>
        </div>
    </div>
    <div class="part">
        <h2>Kurzfristig gehaltene Aktiven mit Börsenkurs</h2>
    </div>
    <div class="kontouebersichtTabelle">
        <div class="konto">
            <p>1060</p>
            <p>Wertschriften</p>
            <p>Beschreibung</p>
        </div>
        <div class="konto">
            <p>1069</p>
            <p>Wertberichtigungen Wertschriften</p>
            <p>Beschreibung</p>
        </div>
    </div>
    <div class="part">
        <h2>Forderungen aus Lieferungen und Leistungen</h2>
    </div>
    <div class="kontouebersichtTabelle">
        <div class="konto">
            <p>1100</p>
            <p>Forderungen aus Lieferungen und Leistungen (Debitoren)</p>
            <p>Beschreibung</p>
        </div>
        <div class="konto">
            <p>1109</p>
            <p>Delkredere</p>
            <p>Beschreibung</p>
        </div>
    </div>
    <div class="part">
        <h2>Übrige kurzfristige Forderungen</h2>
    </div>
    <div class="kontouebersichtTabelle">
        <div class="konto">
            <p>1140</p>
            <p>Vorschüsse und Darlehen</p>
            <p>Beschreibung</p>
        </div>
        <div class="konto">
            <p>1149</p>
            <p>Wertberichtigungen Vorschüsse und Darlehen</p>
            <p>Beschreibung</p>
        </div>
        <div class="konto">
            <p>1170</p>
            <p>Vorsteuer MWST Material, Waren, Dienstleistungen, Energie</p>
            <p>Beschreibung</p>
        </div>
        <div class="konto">
            <p>1171</p>
            <p>Vorsteuer MWST Investitionen, übriger Betriebsaufwand</p>
            <p>Beschreibung</p>
        </div>
        <div class="konto">
            <p>1176</p>
            <p>Verrechnungssteuer</p>
            <p>Beschreibung</p>
        </div>
        <div class="konto">
            <p>1180</p>
            <p>Forderungen gegenüber Sozialversicherungen und Vorsorgeeinrichtungen</p>
            <p>Beschreibung</p>
        </div>
        <div class="konto">
            <p>1189</p>
            <p>Quellensteuer</p>
            <p>Beschreibung</p>
        </div>
        <div class="konto">
            <p>1190</p>
            <p>Sonstige kurzfristige Forderungen</p>
            <p>Beschreibung</p>
        </div>
        <div class="konto">
            <p>1199</p>
            <p>Wertberichtigungen sonstige kurzfristige Forderungen</p>
            <p>Beschreibung</p>
        </div>
    </div>
    <div class="part">
        <h2>Vorräte und nicht fakturierte Dienstleistungen</h2>
    </div>
    <div class="kontouebersichtTabelle">
        <div class="konto">
            <p>1200</p>
            <p>Handelswaren</p>
            <p>Beschreibung</p>
        </div>
        <div class="konto">
            <p>1210</p>
            <p>Rohstoffe</p>
            <p>Beschreibung</p>
        </div>
        <div class="konto">
            <p>1220</p>
            <p>Werkstoffe</p>
            <p>Beschreibung</p>
        </div>
        <div class="konto">
            <p>1230</p>
            <p>Hilfs- und Verbrauchsmaterial</p>
            <p>Beschreibung</p>
        </div>
        <div class="konto">
            <p>1250</p>
            <p>Handelswaren in Konsignation</p>
            <p>Beschreibung</p>
        </div>
        <div class="konto">
            <p>1260</p>
            <p>Fertige Erzeugnisse</p>
            <p>Beschreibung</p>
        </div>
        <div class="konto">
            <p>1270</p>
            <p>Unfertige Erzeugnisse</p>
            <p>Beschreibung</p>
        </div>
        <div class="konto">
            <p>1280</p>
            <p>Nicht fakturierte Dienstleistungen</p>
            <p>Beschreibung</p>
        </div>
    </div>
    <div class="part">
        <h2>Aktive Rechnungsabgrenzungen</h2>
    </div>
    <div class="kontouebersichtTabelle">
        <div class="konto">
            <p>1300</p>
            <p>Bezahlter Aufwand des Folgejahres</p>
            <p>Beschreibung</p>
        </div>
        <div class="konto">
            <p>1301</p>
            <p>Noch nicht erhaltener Ertrag</p>
            <p>Beschreibung</p>
        </div>
    </div>
    <div class="part">
        <h2>14 Anlagevermögen</h2>
        <h2>140 Finanzanlagen</h2>
    </div>
    <div class="kontouebersichtTabelle">
        <div class="konto">
            <p>1400</p>
            <p>Wertschriften</p>
            <p>Beschreibung</p>
        </div>
        <div class="konto">
            <p>1409</p>
            <p>Wertberichtigungen Wertschriften</p>
            <p>Beschreibung</p>
        </div>
        <div class="konto">
            <p>1440</p>
            <p>Darlehen</p>
            <p>Beschreibung</p>
        </div>
        <div class="konto">
            <p>1441</p>
            <p>Hypotheken</p>
            <p>Beschreibung</p>
        </div>
        <div class="konto">
            <p>1449</p>
            <p>Wertberichtigungen langfristige Forderungen</p>
            <p>Beschreibung</p>
        </div>
    </div>
    <div class="part">
        <h2>148 Beteiligungen</h2>
    </div>
    <div class="kontouebersichtTabelle">
        <div class="konto">
            <p>1480</p>
            <p>Beteiligungen</p>
            <p>Beschreibung</p>
        </div>
        <div class="konto">
            <p>1489</p>
            <p>Wertberichtigungen Beteiligungen</p>
            <p>Beschreibung</p>
        </div>
    </div>
    <div class="part">
        <h2>150 Mobile Sachanlagen</h2>
    </div>
    <div class="kontouebersichtTabelle">
        <div class="konto">
            <p>1500</p>
            <p>Maschinen und Apparate</p>
            <p>Beschreibung</p>
        </div>
        <div class="konto">
            <p>1509</p>
            <p>Wertberichtigungen Maschinen und Apparate</p>
            <p>Beschreibung</p>
        </div>
        <div class="konto">
            <p>1510</p>
            <p>Mobiliar und Einrichtungen</p>
            <p>Beschreibung</p>
        </div>
        <div class="konto">
            <p>1519</p>
            <p>Wertberichtigungen Mobiliar und Einrichtungen</p>
            <p>Beschreibung</p>
        </div>
        <div class="konto">
            <p>1520</p>
            <p>Büromaschinen, Informatik, Kommunikationstechnologie</p>
            <p>Beschreibung</p>
        </div>
        <div class="konto">
            <p>1529</p>
            <p>Wertberichtigungen Büromaschinen, Informatik, Kommunikationstechnologie</p>
            <p>Beschreibung</p>
        </div>
        <div class="konto">
            <p>1530</p>
            <p>Fahrzeuge</p>
            <p>Beschreibung</p>
        </div>
        <div class="konto">
            <p>1539</p>
            <p>Wertberichtigungen Fahrzeuge</p>
            <p>Beschreibung</p>
        </div>
        <div class="konto">
            <p>1540</p>
            <p>Werkzeuge und Geräte</p>
            <p>Beschreibung</p>
        </div>
        <div class="konto">
            <p>1549</p>
            <p>Wertberichtigungen Werkzeuge und Geräte</p>
            <p>Beschreibung</p>
        </div>
    </div>
    <div class="part">
        <h2>160 Immobile Sachanlagen</h2>
    </div>
    <div class="kontouebersichtTabelle">
        <div class="konto">
            <p>1600</p>
            <p>Geschäftsliegenschaften</p>
            <p>Beschreibung</p>
        </div>
        <div class="konto">
            <p>1609</p>
            <p>Wertberichtigungen Geschäftsliegenschaften</p>
            <p>Beschreibung</p>
        </div>
    </div>
    <div class="part">
        <h2>170 Immobile Werte</h2>
    </div>
    <div class="kontouebersichtTabelle">
        <div class="konto">
            <p>1700</p>
            <p>Patente, Know-how, Lizenzen, Rechte, Entwicklungen</p>
            <p>Beschreibung</p>
        </div>
        <div class="konto">
            <p>1709</p>
            <p>Wertberichtigungen Patente, Know-how, Lizenzen, Rechte, Entwicklungen</p>
            <p>Beschreibung</p>
        </div>
        <div class="konto">
            <p>1770</p>
            <p>Goodwill</p>
            <p>Beschreibung</p>
        </div>
        <div class="konto">
            <p>1779</p>
            <p>Wertberichtigungen Goodwill</p>
            <p>Beschreibung</p>
        </div>
    </div>
    <div class="part">
        <h2>180 Nicht einbezahltes Grund-, Gesellschafter- oder Stiftungskapital</h2>
    </div>
    <div class="kontouebersichtTabelle">
        <div class="konto">
            <p>1850</p>
            <p>Nicht einbezahltes Aktien-, Stamm-, Anteilschei- oder Stiftungskapital</p>
            <p>Beschreibung</p>
        </div>
    </div>
    <div class="part">
        <h2>2 Passiven</h2>
        <h2>20 Kurzfristiges Fremdkapital</h2>
        <h2>200 Verbindlichkeiten aus Lieferungen und Leistungen</h2>
    </div>
    <div class="kontouebersichtTabelle">
        <div class="konto">
            <p>2000</p>
            <p>Verbindlichkeiten aus Lieferungen und Leistungen (Kreditoren)</p>
            <p>Beschreibung</p>
        </div>
        <div class="konto">
            <p>2030</p>
            <p>Erhaltene Anzahlungen</p>
            <p>Beschreibung</p>
        </div>
    </div>
    <div class="part">
        <h2>210 Kurzfristige verzinsliche Verbindlichkeiten</h2>
    </div>
    <div class="kontouebersichtTabelle">
        <div class="konto">
            <p>2100</p>
            <p>Bankverbindlichkeiten</p>
            <p>Beschreibung</p>
        </div>
        <div class="konto">
            <p>2120</p>
            <p>Verbindlichkeiten aus Finanzierungsleasing</p>
            <p>Beschreibung</p>
        </div>
        <div class="konto">
            <p>2140</p>
            <p>Übrige verzinsliche Verbindlichkeiten</p>
            <p>Beschreibung</p>
        </div>
    </div>
    <div class="part">
        <h2>220 Übrige kurzfristige Verbindlichkeiten</h2>
    </div>
    <div class="kontouebersichtTabelle">
        <div class="konto">
            <p>2200</p>
            <p>Geschuldete MWST (Umsatzsteuer)</p>
            <p>Beschreibung</p>
        </div>
        <div class="konto">
            <p>2201</p>
            <p>Abrechnungskonto MWST</p>
            <p>Beschreibung</p>
        </div>
        <div class="konto">
            <p>2206</p>
            <p>Verrechnungssteuer</p>
            <p>Beschreibung</p>
        </div>
        <div class="konto">
            <p>2208</p>
            <p>Direkte Steuern</p>
            <p>Beschreibung</p>
        </div>
        <div class="konto">
            <p>2210</p>
            <p>Sonstige kurzfristige Verbindlichkeiten</p>
            <p>Beschreibung</p>
        </div>
        <div class="konto">
            <p>2261</p>
            <p>Beschlossene Ausschüttungen</p>
            <p>Beschreibung</p>
        </div>
        <div class="konto">
            <p>2270</p>
            <p>Sozialversicherungen und Vorsorgeeinrichtungen</p>
            <p>Beschreibung</p>
        </div>
        <div class="konto">
            <p>2279</p>
            <p>Quellensteuer</p>
            <p>Beschreibung</p>
        </div>
    </div>
    <div class="part">
        <h2>230 Passive Rechnungsabgrenzungen und kurzfristige Rückstellungen</h2>
    </div>
    <div class="kontouebersichtTabelle">
        <div class="konto">
            <p>2300</p>
            <p>Noch nicht bezahlter Aufwand</p>
            <p>Beschreibung</p>
        </div>
        <div class="konto">
            <p>2301</p>
            <p>Erhaltener Ertrag des Folgejahres</p>
            <p>Beschreibung</p>
        </div>
        <div class="konto">
            <p>2330</p>
            <p>Kurzfristige Rückstellungen</p>
            <p>Beschreibung</p>
        </div>
    </div>
    <div class="part">
        <h2>24 Langfristiges Fremdkapital</h2>
        <h2>240 Langfristige verzinsliche Verbindlichkeiten</h2>
    </div>
    <div class="kontouebersichtTabelle">
        <div class="konto">
            <p>2400</p>
            <p>Bankverbindlichkeiten</p>
            <p>Beschreibung</p>
        </div>
        <div class="konto">
            <p>2420</p>
            <p>Verbindlichkeiten aus Finanzierungsleasing</p>
            <p>Beschreibung</p>
        </div>
        <div class="konto">
            <p>2430</p>
            <p>Obligationenanleihen</p>
            <p>Beschreibung</p>
        </div>
        <div class="konto">
            <p>2450</p>
            <p>Darlehen</p>
            <p>Beschreibung</p>
        </div>
        <div class="konto">
            <p>2451</p>
            <p>Hypotheken</p>
            <p>Beschreibung</p>
        </div>
    </div>
    <div class="part">
        <h2>250 Übrige langfristige Verbindlichkeiten</h2>
    </div>
    <div class="kontouebersichtTabelle">
        <div class="konto">
            <p>2500</p>
            <p>Übrige langfristige Verbindlichkeiten (unverzinslich)</p>
            <p>Beschreibung</p>
        </div>
    </div>
    <div class="part">
        <h2>260 Rückstellungen sowie vom Gesetz vorgesehene ähnliche Positionen</h2>
    </div>
    <div class="kontouebersichtTabelle">
        <div class="konto">
            <p>2600</p>
            <p>Rückstellungen</p>
            <p>Beschreibung</p>
        </div>
    </div>
    <div class="part">
        <h2>28 Eigenkapital (juristische Personen)</h2>
        <h2>280 Grund-, Gesellschafter- oder Stiftungskapital</h2>
    </div>
    <div class="kontouebersichtTabelle">
        <div class="konto">
            <p>2800</p>
            <p>Aktien-, Stamm-, Anteilschein- oder Stiftungskapital</p>
            <p>Beschreibung</p>
        </div>
    </div>
    <div class="part">
        <h2>290 Reserven und Jahresgewinn oder Jahresverlust</h2>
    </div>
    <div class="kontouebersichtTabelle">
        <div class="konto">
            <p>2900</p>
            <p>Gesetzliche Kapitalreserve</p>
            <p>Beschreibung</p>
        </div>
        <div class="konto">
            <p>2930</p>
            <p>Reserve für eigene Kapitalanteile</p>
            <p>Beschreibung</p>
        </div>
        <div class="konto">
            <p>2940</p>
            <p>Aufwertungsreserve</p>
            <p>Beschreibung</p>
        </div>
        <div class="konto">
            <p>2950</p>
            <p>Gesetzliche Gewinnreserve</p>
            <p>Beschreibung</p>
        </div>
        <div class="konto">
            <p>2960</p>
            <p>Freiwillige Gewinnreserven</p>
            <p>Beschreibung</p>
        </div>
        <div class="konto">
            <p>2970</p>
            <p>Gewinnvortrag oder Verlustvortrag</p>
            <p>Beschreibung</p>
        </div>
        <div class="konto">
            <p>2979</p>
            <p>Jahresgewinn oder Jahresverlust</p>
            <p>Beschreibung</p>
        </div>
        <div class="konto">
            <p>2980</p>
            <p>Eigene Aktien, Stammanteile oder Anteilscheine (Minusposten)</p>
            <p>Beschreibung</p>
        </div>
    </div>
    <div class="part">
        <h2>28 Eigenkapital (Einzelunternehmen)</h2>
    </div>
    <div class="kontouebersichtTabelle">
        <div class="konto">
            <p>2800</p>
            <p>Eigenkapital zu Beginn des Geschäftsjahres</p>
            <p>Beschreibung</p>
        </div>
        <div class="konto">
            <p>2820</p>
            <p>Kapitaleinlagen und Kapitalrückzüge</p>
            <p>Beschreibung</p>
        </div>
        <div class="konto">
            <p>2850</p>
            <p>Privat</p>
            <p>Beschreibung</p>
        </div>
        <div class="konto">
            <p>2891</p>
            <p>Jahresgewinn oder Jahresverlust</p>
            <p>Beschreibung</p>
        </div>
    </div>
    <div class="part">
        <h2>28 Eigenkapital (Personengesellschaft)</h2>
    </div>
    <div class="kontouebersichtTabelle">
        <div class="konto">
            <p>2800</p>
            <p>Eigenkapital Gesellschafter A zu Beginn des Geschäftsjahres</p>
            <p>Beschreibung</p>
        </div>
        <div class="konto">
            <p>2810</p>
            <p>Kapitaleinlagen und Kapitalrückzüge Gesellschafter A</p>
            <p>Beschreibung</p>
        </div>
        <div class="konto">
            <p>2820</p>
            <p>Privat Gesellschafter A</p>
            <p>Beschreibung</p>
        </div>
        <div class="konto">
            <p>2831</p>
            <p>Jahresgewinn oder Jahresverlust Gesellschafter A</p>
            <p>Beschreibung</p>
        </div>
        <div class="konto">
            <p>2850</p>
            <p>Eigenkapital Kommanditär A zu Beginn des Geschäftsjahres</p>
            <p>Beschreibung</p>
        </div>
        <div class="konto">
            <p>2860</p>
            <p>Kapitaleinlagen und Kapitalrückzüge Kommanditär A</p>
            <p>Beschreibung</p>
        </div>
        <div class="konto">
            <p>2870</p>
            <p>Privat Kommanditär A</p>
            <p>Beschreibung</p>
        </div>
        <div class="konto">
            <p>2881</p>
            <p>Jahresgewinn oder Jahresverlust Kommanditär A</p>
            <p>Beschreibung</p>
        </div>
    </div>
    <div class="part">
        <h2>3 Betrieblicher Ertrag aus Lieferungen und Leistungen</h2>
    </div>
    <div class="kontouebersichtTabelle">
        <div class="konto">
            <p>3000</p>
            <p>Produktionserlös</p>
            <p>Beschreibung</p>
        </div>
        <div class="konto">
            <p>3200</p>
            <p>Handelserlöse</p>
            <p>Beschreibung</p>
        </div>
        <div class="konto">
            <p>3400</p>
            <p>Dienstleistungserlöse</p>
            <p>Beschreibung</p>
        </div>
        <div class="konto">
            <p>3600</p>
            <p>Übrige Erlöse aus Lieferungen und Leistungen</p>
            <p>Beschreibung</p>
        </div>
        <div class="konto">
            <p>3700</p>
            <p>Eigenleistungen</p>
            <p>Beschreibung</p>
        </div>
        <div class="konto">
            <p>3710</p>
            <p>Eigenverbrauch</p>
            <p>Beschreibung</p>
        </div>
        <div class="konto">
            <p>3800</p>
            <p>Erlösminderungen</p>
            <p>Beschreibung</p>
        </div>
        <div class="konto">
            <p>3805</p>
            <p>Verluste Forderungen (Debitoren), Veränderung Delkredere</p>
            <p>Beschreibung</p>
        </div>
        <div class="konto">
            <p>3900</p>
            <p>Bestandesänderungen unfertige Erzeugnisse</p>
            <p>Beschreibung</p>
        </div>
        <div class="konto">
            <p>3901</p>
            <p>Bestandesänderungen fertige Erzeugnisse</p>
            <p>Beschreibung</p>
        </div>
        <div class="konto">
            <p>3940</p>
            <p>Bestandesänderungen nicht fakturierte Dienstleistungen</p>
            <p>Beschreibung</p>
        </div>
    </div>
    <div class="part">
        <h2>4 Aufwand für Material, Handelswaren, Dienstleistungen und Energie</h2>
    </div>
    <div class="kontouebersichtTabelle">
        <div class="konto">
            <p>4000</p>
            <p>Materialaufwand Produktion</p>
            <p>Beschreibung</p>
        </div>
        <div class="konto">
            <p>4200</p>
            <p>Handelswarenaufwand</p>
            <p>Beschreibung</p>
        </div>
        <div class="konto">
            <p>4400</p>
            <p>Aufwand für bezogene Dienstleistungen</p>
            <p>Beschreibung</p>
        </div>
        <div class="konto">
            <p>4500</p>
            <p>Energieaufwand für Leistungserstellung</p>
            <p>Beschreibung</p>
        </div>
        <div class="konto">
            <p>4900</p>
            <p>Aufwandminderungen</p>
            <p>Beschreibung</p>
        </div>
    </div>
    <div class="part">
        <h2>5 Personalaufwand</h2>
    </div>
    <div class="kontouebersichtTabelle">
        <div class="konto">
            <p>5000</p>
            <p>Lohnaufwand</p>
            <p>Beschreibung</p>
        </div>
        <div class="konto">
            <p>5700</p>
            <p>Sozialversicherungsaufwand</p>
            <p>Beschreibung</p>
        </div>
        <div class="konto">
            <p>5800</p>
            <p>Übriger Personalaufwand</p>
            <p>Beschreibung</p>
        </div>
        <div class="konto">
            <p>5900</p>
            <p>Leistungen Dritter</p>
            <p>Beschreibung</p>
        </div>
    </div>
    <div class="part">
        <h2>6 Übriger betrieblicher Aufwand, Abschreibungen und Wertberichtigungen sowie Finanzergebnis</h2>
    </div>
    <div class="kontouebersichtTabelle">
        <div class="konto">
            <p>6000</p>
            <p>Raumaufwand</p>
            <p>Beschreibung</p>
        </div>
        <div class="konto">
            <p>6100</p>
            <p>Unterhalt, Reparaturen, Ersatz mobile Sachanlagen</p>
            <p>Beschreibung</p>
        </div>
        <div class="konto">
            <p>6105</p>
            <p>Leasingaufwand mobile Sachanlagen</p>
            <p>Beschreibung</p>
        </div>
        <div class="konto">
            <p>6200</p>
            <p>Fahrzeug- und Transportaufwand</p>
            <p>Beschreibung</p>
        </div>
        <div class="konto">
            <p>6260</p>
            <p>Fahrzeugleasing und -mieten</p>
            <p>Beschreibung</p>
        </div>
        <div class="konto">
            <p>6300</p>
            <p>Sachversicherunge, Abgaben, Gebühren, Bewilligungen</p>
            <p>Beschreibung</p>
        </div>
        <div class="konto">
            <p>6400</p>
            <p>Energie- und Entsorgungsaufwand</p>
            <p>Beschreibung</p>
        </div>
        <div class="konto">
            <p>6500</p>
            <p>Verwaltungsaufwand</p>
            <p>Beschreibung</p>
        </div>
        <div class="konto">
            <p>6570</p>
            <p>Informatikaufwand inkl. Leasing</p>
            <p>Beschreibung</p>
        </div>
        <div class="konto">
            <p>6600</p>
            <p>Werbeaufwand</p>
            <p>Beschreibung</p>
        </div>
        <div class="konto">
            <p>6700</p>
            <p>Sonstiger betrieblicher Aufwand</p>
            <p>Beschreibung</p>
        </div>
        <div class="konto">
            <p>6800</p>
            <p>Abschreibungen und Wertberichtigungen auf Positionen des Anlagevermögens</p>
            <p>Beschreibung</p>
        </div>
        <div class="konto">
            <p>6900</p>
            <p>Finanzaufwand</p>
            <p>Beschreibung</p>
        </div>
        <div class="konto">
            <p>6950</p>
            <p>Finanzertrag</p>
            <p>Beschreibung</p>
        </div>
    </div>
    <div class="part">
        <h2>7 Betrieblicher Nebenerfolg</h2>
    </div>
    <div class="kontouebersichtTabelle">
        <div class="konto">
            <p>7000</p>
            <p>Ertrag Nebenbetrieb</p>
            <p>Beschreibung</p>
        </div>
        <div class="konto">
            <p>7010</p>
            <p>Aufwand Nebenbetrieb</p>
            <p>Beschreibung</p>
        </div>
        <div class="konto">
            <p>7500</p>
            <p>Ertrag betriebliche Liegenschaft</p>
            <p>Beschreibung</p>
        </div>
        <div class="konto">
            <p>7510</p>
            <p>Aufwand betriebliche Liegenschaft</p>
            <p>Beschreibung</p>
        </div>
    </div>
    <div class="part">
        <h2>8 Betriebsfremder, ausserordentlicher, einmaliger oder periodenfremder Aufwand und Ertrag</h2>
    </div>
    <div class="kontouebersichtTabelle">
        <div class="konto">
            <p>8000</p>
            <p>Betriebsfremder Aufwand</p>
            <p>Beschreibung</p>
        </div>
        <div class="konto">
            <p>8100</p>
            <p>Betriebsfremder Ertrag</p>
            <p>Beschreibung</p>
        </div>
        <div class="konto">
            <p>8500</p>
            <p>Ausserordentlicher, einmaliger oder periodenfremder Aufwand</p>
            <p>Beschreibung</p>
        </div>
        <div class="konto">
            <p>8510</p>
            <p>Ausserodentlicher, einmaliger oder periodenfremder Ertrag</p>
            <p>Beschreibung</p>
        </div>
        <div class="konto">
            <p>8900</p>
            <p>Direkte Steuern</p>
            <p>Beschreibung</p>
        </div>
    </div>
    <div class="part">
        <h2>9 Abschluss</h2>
    </div>
    <div class="kontouebersichtTabelle">
        <div class="konto">
            <p>9200</p>
            <p>Jahresgewinn oder Jahresverlust</p>
            <p>Beschreibung</p>
        </div>
    </div>
    <script src="public/js/navigate.js"></script>
</body>

</html>