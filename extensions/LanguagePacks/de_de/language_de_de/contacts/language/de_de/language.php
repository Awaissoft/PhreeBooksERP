﻿<?php
// +-----------------------------------------------------------------+
// |                   PhreeBooks Open Source ERP                    |
// +-----------------------------------------------------------------+
// | Copyright (c) 2008, 2009, 2010 PhreeSoft, LLC                   |
// | http://www.PhreeSoft.com                                        |
// +-----------------------------------------------------------------+
// | This program is free software: you can redistribute it and/or   |
// | modify it under the terms of the GNU General Public License as  |
// | published by the Free Software Foundation, either version 3 of  |
// | the License, or any later version.                              |
// |                                                                 |
// | This program is distributed in the hope that it will be useful, |
// | but WITHOUT ANY WARRANTY; without even the implied warranty of  |
// | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the   |
// | GNU General Public License for more details.                    |
// |                                                                 |
// | The license that is bundled with this package is located in the |
// | file: /doc/manual/ch01-Introduction/license.html.               |
// | If not, see http://www.gnu.org/licenses/                        |
// +-----------------------------------------------------------------+
//  Path: /modules/contacts/language/en_us/language.php
//

// Konto Tabellenfelder - für alle Kontoarten
define ('ACT_POPUP_WINDOW_TITLE', 'Kontakt Suche');
define ('ACT_POPUP_TERMS_WINDOW_TITLE', 'Zahlungsbedingungen');

// Allgemeine definiert
define ('ACT_CATEGORY_I_ADDRESS', 'Add / Edit Kontakt');
define ('TEXT_BUYER', 'Käufer');
define ('ACT_SHORT_NAME', 'Contact ID');
define ('TEXT_CONTACTS', 'Kontakte');
define ('TEXT_EMPLOYEE', 'Mitarbeiter');
define ('TEXT_LINK_TO', 'Link zu:');
define ('TEXT_NEW_CONTACT', 'Neuer Kontakt');
define ('TEXT_SALES_REP', 'Sales Rep');
define ('TEXT_COPY_ADDRESS', 'Transfer-Adresse');

// Adresse / Kontakt Identifikatoren
define ('GEN_PRIMARY_NAME', 'Name / Firma');
define ('GEN_EMPLOYEE_NAME', 'Employee Name');
define ('GEN_CONTACT', 'Achtung');
define ('GEN_ADDRESS1', 'Adresse1');
define ('GEN_ADDRESS2', 'Address2');
define ('GEN_CITY_TOWN', 'City');
define ('GEN_STATE_PROVINCE '," Staat ");
define ('GEN_POSTAL_CODE', 'Postleitzahl');
define ('GEN_COUNTRY', 'Land');
define ('GEN_COUNTRY_CODE', 'ISO-Code');
define ('GEN_FIRST_NAME', 'Vorname');
define ('GEN_MIDDLE_NAME', 'Vornamen');
define ('GEN_LAST_NAME', 'Nachname');
define ('GEN_TELEPHONE1', 'Telefon');
define ('GEN_TELEPHONE2', 'Alt Telefon');
define ('GEN_FAX', 'Fax');
define ('GEN_TELEPHONE4', 'Handy');
define ('GEN_ACCOUNT_ID', 'Konto-ID');
define ('GEN_CUSTOMER_ID', 'Kunden-ID:');
define ('GEN_VENDOR_ID', 'Vendor ID:');
define ('ACT_ACCOUNT_NUMBER', 'Facebook-ID');
define ('ACT_ID_NUMBER', 'Twitter-ID');
define ('GEN_WEBSITE', 'Website');
define ('GEN_ACCOUNT_LINK', 'Link to Employee Konto');

// Gezielte definiert (zum Wortlaut Unterschiede für verschiedene Kontoarten differenzieren)
// Text spezifische Kontakte Filiale
define ('ACT_B_TYPE_NAME', 'Filialen');
define ('ACT_B_HEADING_TITLE', 'Filialen');
define ('ACT_B_SHORT_NAME', 'Branch ID');
define ('ACT_B_GL_ACCOUNT_TYPE', TEXT_NOT_USED);
define ('ACT_B_ID_NUMBER', TEXT_NOT_USED);
define ('ACT_B_REP_ID', TEXT_NOT_USED);
define ('ACT_B_ACCOUNT_NUMBER', TEXT_NOT_USED);
define ('ACT_B_FIRST_DATE', 'Erstellungsdatum:');
define ('ACT_B_LAST_DATE1', TEXT_NOT_USED);
define ('ACT_B_LAST_DATE2', TEXT_NOT_USED);
define ('ACT_B_PAGE_TITLE_EDIT', 'Edit Branch');
// Text speziell für Kundenkontakte (Standard)
define ('ACT_C_TYPE_NAME', 'Kunden');
define ('ACT_C_HEADING_TITLE', 'Kunden');
define ('ACT_C_SHORT_NAME', 'Kunden-ID');
define ('ACT_C_GL_ACCOUNT_TYPE', 'Sales FIBU-Konto ');
define ('ACT_C_ID_NUMBER', 'Resale-Lizenznummer');
define ('ACT_C_REP_ID', 'Sales Rep-ID');
define ('ACT_C_ACCOUNT_NUMBER', 'Account Number ');
define ('ACT_C_FIRST_DATE', 'Kunde seit:');
define ('ACT_C_LAST_DATE1', 'letzte Rechnung Datum:');
define ('ACT_C_LAST_DATE2', 'Letzte Auszahlung:');
define ('ACT_C_PAGE_TITLE_EDIT', 'Kunden bearbeiten');
// Text speziell für Mitarbeiter Kontakte
define ('ACT_E_TYPE_NAME', 'Mitarbeiter');
define ('ACT_E_HEADING_TITLE', 'Mitarbeiter');
define ('ACT_E_SHORT_NAME', 'Employee ID');
define ('ACT_E_GL_ACCOUNT_TYPE', 'Arbeitnehmertyp');
define ('ACT_E_ID_NUMBER', 'Social Security Number');
define ('ACT_E_REP_ID', 'Department ID');
define ('ACT_E_ACCOUNT_NUMBER', TEXT_NOT_USED);
define ('ACT_E_FIRST_DATE', 'Hire Date:');
define ('ACT_E_LAST_DATE1', 'letzte Erhöhung Datum:');
define ('ACT_E_LAST_DATE2', 'Transaktionsdatum:');
define ('ACT_E_PAGE_TITLE_EDIT', 'Edit Mitarbeiter');
// Text spezifische PhreeCRM
define ('ACT_I_SHORT_NAME', 'Kontakt');
define ('ACT_I_HEADING_TITLE', 'PhreeCRM');
define ('ACT_I_TYPE_NAME', 'Kontakte');
define ('ACT_I_PAGE_TITLE_EDIT', 'Kontakt bearbeiten');
// Text spezifische Projekte
define ('ACT_J_TYPE_NAME', 'Projekte');
define ('ACT_J_HEADING_TITLE', 'Projekte');
define ('ACT_J_SHORT_NAME', 'Projekt-ID');
define ('ACT_J_ID_NUMBER', 'Referenz PO');
define ('ACT_J_REP_ID', 'Sales Rep-ID');
define ('ACT_J_PAGE_TITLE_EDIT', 'Projekt bearbeiten');
define ('ACT_J_ACCOUNT_NUMBER', 'Break in Phasen:');
// Text speziell für Hersteller Kontakte
define ('ACT_V_TYPE_NAME', 'Vendors');
define ('ACT_V_HEADING_TITLE', 'Vendors');
define ('ACT_V_SHORT_NAME', 'Vendor ID');
define ('ACT_V_GL_ACCOUNT_TYPE', 'Bestellen FIBU-Konto ');
define ('ACT_V_ID_NUMBER', 'Federal EIN');
define ('ACT_V_REP_ID', 'Bestellen Rep-ID');
define ('ACT_V_ACCOUNT_NUMBER', 'Account Number ');
define ('ACT_V_FIRST_DATE', 'Hersteller Seit:');
define ('ACT_V_LAST_DATE1', 'letzte Rechnung Datum:');
define ('ACT_V_LAST_DATE2', 'Letzte Auszahlung:');
define ('ACT_V_PAGE_TITLE_EDIT', 'Edit Hersteller');

// Kategorie Überschriften
define ('ACT_CATEGORY_CONTACT', 'Kontakt');
define ('ACT_CATEGORY_M_ADDRESS', 'Main Postanschrift');
define ('ACT_CATEGORY_S_ADDRESS', 'Versandkosten Adressen');
define ('ACT_CATEGORY_B_ADDRESS', 'Billing Adressen');
define ('ACT_CATEGORY_P_ADDRESS', 'Credit Card Payment Information');
define ('ACT_CATEGORY_PAYMENT_TERMS', 'Zahlungsbedingungen');
define ('TEXT_ADDRESS_BOOK', 'Adressbuch');
define ('TEXT_EMPLOYEE_ROLES', 'Mitarbeiterrollen');
define ('ACT_ACT_HISTORY', 'Account History');
define ('ACT_ORDER_HISTORY', 'Order History');
define ('ACT_SO_HIST', 'Sales Order History (Neueste Ergebnisse %s)');
define ('ACT_PO_HIST', 'Bestellung Geschichte (Neueste Ergebnisse %s)');
define ('ACT_INV_HIST', 'Invoice Geschichte (Neueste Ergebnisse %s)');
define ('ACT_SO_NUMBER', 'SO Anzahl');
define ('ACT_PO_NUMBER', 'Bestellnummer');
define ('ACT_INV_NUMBER', 'Invoice Number');
define ('ACT_NO_RESULTS', 'Keine Ergebnisse gefunden');
define ('ACT_PAYMENT_MESSAGE', 'Geben Sie die Zahlungsinformationen in PhreeBooks gespeichert werden.');
define ('ACT_CARDHOLDER_NAME', 'Name des Karteninhabers');
define ('ACT_PAYMENT_CREDIT_CARD_NUMBER', 'Kreditkarten-Nummer');
define ('ACT_PAYMENT_CREDIT_CARD_EXPIRES', 'Ablaufdatum der Kreditkarte');
define ('ACT_CARD_HINT', 'Hinweis Card');
define ('ACT_EXP', 'Exp');
define ('ACT_PAYMENT_CREDIT_CARD_CVV2', 'Sicherheits-Code');

// Kontobedingungen
define ('ACT_SPECIAL_TERMS', 'Besondere');
define ('ACT_TERMS_DUE', 'Terms (Due)');
define ('ACT_TERMS_DEFAULT', 'Default');
define ('ACT_TERMS_USE_DEFAULTS', 'Use Default AGB');
define ('ACT_COD_SHORT', 'COD');
define ('ACT_COD_LONG', 'Nachnahme');
define ('ACT_PREPAID', 'Prepaid');
define ('ACT_SPECIAL_TERMS', 'Aufgrund der Anzahl der Tage');
define ('ACT_END_OF_MONTH', 'Durch Ende des Monats');
define ('ACT_DAY_NEXT_MONTH', 'Aufgrund von bestimmten Datum');
define ('ACT_DUE_ON', 'Durch auf:');
define ('ACT_DISCOUNT', 'Discount');
define ('ACT_EARLY_DISCOUNT', 'Prozent.');
define ('ACT_EARLY_DISCOUNT_SHORT', '%');
define ('ACT_DUE_IN', 'Durch in');
define ('ACT_TERMS_EARLY_DAYS', 'Tag (e).');
define ('ACT_TERMS_NET', 'Net');
define ('ACT_TERMS_STANDARD_DAYS', 'Tag (e).');
define ('ACT_TERMS_CREDIT_LIMIT', 'Credit Limit:');
define ('ACT_AMT_PAST_DUE', 'Amount überfällig:');

// Misc Informationen Nachrichten
define ('RECORD_NUM_REF_ONLY', 'Datensatz-ID (nur zur Referenz) =');
define ('ACT_ID_AUTO_FILL', '(Lassen Sie für System generierten ID) leer');
define ('ACT_WARN_DELETE_ADDRESS', 'Sind Sie sicher, dass Sie an diese Adresse löschen?');
define ('ACT_WARN_DELETE_ACCOUNT', 'Sind Sie sicher, dass Sie dieses Konto löschen wollen?');
define ('ACT_WARN_DELETE_PAYMENT', 'Sind Sie sicher, dass Sie diese Zahlung Datensatz wirklich löschen?');
define ('ACT_ERROR_CANNOT_DELETE', 'kann nicht gelöscht werden, weil an einer Zeitschrift Datensatz enthält dieses Konto');
define ('ACT_ERROR_DUPLICATE_ACCOUNT', 'Die Konto-ID bereits im System vorhanden, geben Sie bitte eine neue ID.');
define ('ACT_ERROR_ACCOUNT_NOT_FOUND', 'Die Rechnung, die Sie suchen konnte nicht gefunden werden!');
define ('ACT_BILLING_MESSAGE', 'Diese Felder sind nicht erforderlich, es sei denn, eine Rechnungsadresse hinzugefügt wird.');
define ('ACT_SHIPPING_MESSAGE', 'Diese Felder sind nicht erforderlich, es sei denn, eine Lieferadresse hinzugefügt wird.');
define ('ACT_NO_ENCRYPT_KEY_ENTERED', 'ACHTUNG:.! Der Schlüssel wurde nicht eingegeben gespeicherten Kreditkartendaten werden nicht angezeigt und hier eingegebenen Werte werden nicht gespeichert werden');
define ('ACT_PAYMENT_REF', 'Die Zahlung Ref');
define ('ACT_LIST_OPEN_ORDERS', 'Offene Bestellungen');
define ('ACT_LIST_OPEN_INVOICES', 'Offene Rechnungen');
define ('ACT_NO_KEY_EXISTS', 'Eine Zahlung angegeben wurde, aber den Schlüssel nicht eingegeben wurde Die Zahlung Adresse gespeichert wurde aber die Zahlung Informationen war es nicht..');
define ('ACT_ERROR_DUPLICATE_CONTACT', 'Die Kontakt-ID bereits im System vorhanden, geben Sie bitte einen neuen Kontakt-ID.');

// Java Script Fehler
define ('ACT_JS_SHORT_NAME', "* Die 'ID' Eintrag darf nicht leer sein. \n ");

?>