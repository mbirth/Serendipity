<?php

/**
 *  @version 1.0
 *  Copyright (c) 2003-2005, Jannis Hermanns (on behalf the Serendipity Developer Team)
 *  All rights reserved.  See LICENSE file for licensing details
 *  Translation (c) 2010 Martin Matu�ka <martin@matuska.org>
 */
$i18n_filename_from = array (
'�','�','�','�','�','�','�','�','�','�','�','�','�','�','�','�','�','�','�','�','�',
'�','�','�','�','�','�','�','�','�','�','�','�','�','�','�','�','�','�','�','�','�',
' ',',','.','!',
);
$i18n_filename_to = array (
'a','c','d','e','e','i','l','l','n','o','o','r','r','s','s','t','u','u','y','z','z',
'A','C','D','E','E','I','L','L','N','O','O','R','R','S','S','T','U','U','Y','Z','Z',
'-', '', '', '',
);
@define('LANG_CHARSET', 'ISO-8859-2');
@define('SQL_CHARSET', 'latin2');
@define('DATE_LOCALES', 'sk_SK.ISO-8859-2, sk_SK.ISO8859-2, slovak, sk');
@define('DATE_FORMAT_ENTRY', '%A, %e. %B %Y');
@define('DATE_FORMAT_SHORT', '%d.%m.%Y %H:%M');
@define('WYSIWYG_LANG', 'sk-iso');
@define('NUMBER_FORMAT_DECIMALS', '2');
@define('NUMBER_FORMAT_DECPOINT', ',');
@define('NUMBER_FORMAT_THOUSANDS', ' ');
@define('LANG_DIRECTION', 'ltr');
// ISO 8601 compliant format for date conversion
@define('DATE_FORMAT_2', 'Y-m-d H:i');

/* ONE AND TWO WORD CONSTANTS */
@define('TYPE', 'Typ');
@define('PREVIEW', 'N�h�ad');
@define('DATE', 'D�tum');
@define('TIME', 'Time');
@define('APPEARANCE', 'Vzh�ad');
@define('LOGIN', 'Prihl�senie');
@define('LOGOUT', 'Odhl�senie');
@define('LOGGEDOUT', 'Odhl�sen�.');
@define('CREATE', 'Vytvori�');
@define('BACK', 'Nasp�');
@define('FORWARD', '�alej');
@define('ANONYMOUS', 'Anonym');
@define('RECENT', 'Nov�...');
@define('OLDER', 'Star�ie...');
@define('DONE', 'Hotovo');
@define('TITLE', 'Titulok');
@define('DESCRIPTION', 'Popis');
@define('PLACEMENT', 'Umiestnenie');
@define('DELETE', 'Zmaza�');
@define('SAVE', 'Ulo�i�');
@define('UP', 'HORE');
@define('DOWN', 'DOLE');
@define('PREVIOUS', 'Predch�dzaj�ce');
@define('NEXT', '�al�ie');
@define('ENTRIES', '�l�nky');
@define('CATEGORIES', 'Kateg�rie');
@define('NAME', 'Meno');
@define('EMAIL', 'E-mail');
@define('HOMEPAGE', 'Domovsk� webstr�nka');
@define('COMMENT', 'Koment�r');
@define('VIEW', 'Uk�za�');
@define('HIDE', 'Skry�');
@define('WEEK', 'T��den');
@define('WEEKS', 'T��dne(-ov)');
@define('MONTHS', 'Mesiace(-ov)');
@define('DAYS', 'Dni');
@define('DEBUG', 'Debug');
@define('SUCCESS', '�spe�ne dokon�en�.');
@define('COMMENTS', 'Koment�re');
@define('ADD_COMMENT', 'Prida� koment�r');
@define('NO_COMMENTS', '�iadne koment�re');
@define('POSTED_BY', 'Nap�sal(a)');
@define('ON', 'v');
@define('NO_CATEGORY', '�iadna kateg�ria');
@define('CATEGORY', 'Kateg�ria');
@define('EDIT', 'Upravi�');
@define('GO', 'Vykona�!');
@define('YES', '�no');
@define('NO', 'Nie');
@define('NOT_REALLY', 'Nie, nechcem...');
@define('DUMP_IT', 'Zmaza�!');
@define('IN', 'vo');
@define('AT', 'o');
@define('LEFT', 'v�avo');
@define('RIGHT', 'vpravo');
@define('CENTER', 'stred');
@define('ARCHIVES', 'Arch�vy');
@define('SUBSCRIBE', 'Subscribe');
@define('UNSUBSCRIBE', 'Unsubscribe');
@define('QUICKSEARCH', 'R�chle h�adanie');
@define('TRACKBACKS', 'Odozvy');
@define('TRACKBACK', 'Odozva');
@define('NO_TRACKBACKS', '�iadne odozvy');
@define('PINGBACKS', 'Pingbacks');
@define('NO_PINGBACKS', 'No Pingbacks');
@define('WEBLOG', 'Weblog');
@define('SOURCE', 'Source');
@define('EXCERPT', 'V�pis');
@define('TRACKED', 'Sledovan�');
@define('USER', 'Pou��vate�');
@define('USERNAME', 'Meno');
@define('PASSWORD', 'Heslo');
@define('HIDDEN', 'skryt�');
@define('IMAGE', 'Obr�zok');
@define('VIDEO', 'Video');
@define('AUTHOR', 'Autor');
@define('ENTRY', 'Entry');
@define('BLOG', 'Blog');
@define('VERSION', 'verzia');
@define('INSTALL', 'In�talova�');
@define('REPLY', 'Odpove�');
@define('SUBSCRIPTIONS', 'Subscriptions');
@define('SUBSCRIBED', 'Subscribed');
@define('SUBSCRIBED_AT', 'Subscribed at:');
@define('ERROR', 'Chyba');
@define('FRONTEND', 'Frontend');
@define('BACKEND', 'Backend');
@define('SUMMARY', 'Summary');
@define('MORE', 'More');
@define('FORCE', 'Vyn�ti�');
@define('UPLOAD', 'Upload');
@define('DOWNLOAD', 'Download');
@define('ADMIN', 'Administr�cia');
@define('ADMIN_FRONTPAGE', 'Hlavn� str�nka');
@define('QUOTE', 'Cit�t');
@define('NONE', 'ni�');
@define('GROUP', 'Skupina');
@define('AUTHORS', 'Autori');
@define('UPGRADE', 'Aktualiz�cia');
@define('NAVIGATION', 'Navigation');
@define('MOVE', 'Move');
@define('MOVE_UP', 'Move up');
@define('MOVE_DOWN', 'Move down');
@define('ALL_AUTHORS', 'V�etci autori');
@define('PREVIOUS_PAGE', 'predo�l� str�nka');
@define('NEXT_PAGE', '�al�ia str�nka');
@define('FIRST_PAGE', 'First Page');
@define('LAST_PAGE', 'Last Page');
@define('ALL_CATEGORIES', 'V�etky kateg�rie');
@define('LAST_UPDATED', 'Naposledy zmenen�');
@define('IP_ADDRESS', 'IP adresa');
@define('CHARSET', 'Znakov� sada');
@define('REFERER', 'Odkazuj�ca str�nka');
@define('APPROVE', 'Schv�li�');
@define('NOT_FOUND', 'Nen�jden�');
@define('WRITABLE', 'Zapisovate�n�');
@define('NOT_WRITABLE', 'Nezapisovate��');
@define('WELCOME_BACK', 'Vitajte nasp�,');
@define('USE_DEFAULT', 'Prednastaven�');
@define('SORT_BY', 'Zoradi� pod�a');
@define('SORT_ORDER', 'Zora�i� pod�a');
@define('SORT_ORDER_ASC', 'Vzostupne');
@define('SORT_ORDER_DESC', 'Zostupne');
@define('FILTERS', 'Filtre');
@define('RESET_FILTERS', 'Reset filters');
@define('TOGGLE_ALL', 'Vybra� v�etko');
@define('TOGGLE_OPTION', 'Vybra� vo�bu');
@define('IN_REPLY_TO', 'Odpove� na');

/* WIDELY USED */
@define('FILTER_DIRECTORY', 'Adres�r');
@define('BACK_TO_BLOG', 'Nasp� na weblog');
@define('HTML_NUGGET', 'Vlo�en� HTML k�d');
@define('TITLE_FOR_NUGGET', 'N�zov HTML k�du');
@define('COMMENT_ADDED', 'V� koment�r bol �spe�ne pridan�.');
@define('ENTRIES_FOR', '�l�nky pre %s');
@define('NO_ENTRIES_TO_PRINT', '�iadne �l�nky na zobrazenie');
@define('COMMENT_DELETE_CONFIRM', 'Naozaj chcete zmaza� koment�r #%d, vlo�en� %s?');
@define('DELETE_SURE', 'Naozaj chcete trvale zmaza� #%s?');
@define('MEDIA_FULLSIZE', 'Pln� rozmer');
@define('SIDEBAR_PLUGIN', 'doplnok bo�nej li�ty');
@define('EVENT_PLUGIN', 'doplnok udalost�');
@define('PLUGIN_ITEM_DISPLAY', 'Kde by mala b�� t�to polo�ka zobrazen�?');
@define('PLUGIN_ITEM_DISPLAY_EXTENDED', 'V roz��renej �asti');
@define('PLUGIN_ITEM_DISPLAY_OVERVIEW', 'V preh�ade');
@define('PLUGIN_ITEM_DISPLAY_BOTH', 'V obidvoch �astiach');
@define('DIRECTORY_WRITE_ERROR', 'Do prie�inka %s sa ned� zapisova� - pros�m skontrolujte opr�vnenia');
@define('FILE_WRITE_ERROR', 'Nepodarilo sa zap�sa� do s�boru %s.');
@define('INCLUDE_ERROR', 'chyba serendipity: s�bor "%s" sa nepodarilo vlo�i� - ukon�en�.');
@define('DO_MARKUP', 'Form�tova� text (markup)');
@define('GENERAL_PLUGIN_DATEFORMAT', 'Form�t d�tumu');
@define('GENERAL_PLUGIN_DATEFORMAT_BLAHBLAH', 'Form�t d�tumu �l�nku, vytv�ra sa pomocou PHP funkcie strftime(). (Prednastaven�: "%s")');
@define('APPLY_MARKUP_TO', 'Pou�i� form�tovanie textu na %s');
@define('XML_IMAGE_TO_DISPLAY', 'Symbol XML');
@define('XML_IMAGE_TO_DISPLAY_DESC', 'Odkazy na XML kan�ly bud� zobrazen� pod t�mto symbolom. Nechajte pr�zdn� pre p�vodn� nastavenie, alebo zadajte \'none\' pre vypnutie.');
@define('MAIL_IMAGE_TO_DISPLAY', 'Subscribe Button');
@define('MAIL_IMAGE_TO_DISPLAY_DESC', 'The email subscription page will be displayed by this image. Leave empty for default, enter \'none\' to disable.');
@define('DELETING_FILE', 'Zmazanie s�boru \'%s\'...');
@define('SETTINGS_SAVED_AT', 'Nov� nastavenia boli ulo�en� v %s');
@define('INVERT_SELECTIONS', 'Obr�ti� v�ber');

@define('PERSONAL_SETTINGS', 'Osobn� nastavenia');
@define('DO_MARKUP_DESCRIPTION', 'Aplikova� transform�cie na text (smajl�ky, skratky *, /, _, ...). Vypnutie tohto nastavenia zabezpe�� ulo�enie HTML k�dov v texte.');
@define('BASE_DIRECTORY', 'Kore�ov� prie�inok');
@define('PERM_READ', 'Pr�vo na ��tanie');
@define('PERM_WRITE', 'Pr�vo na z�pis');
@define('PERM_DENIED', 'Pr�stup odmietnut�.');
@define('CURRENT_AUTHOR', 'Aktu�lny autor');
@define('PLUGIN_ACTIVE', 'Akt�vny');
@define('PLUGIN_INACTIVE', 'Neakt�vny');
@define('FURTHER_LINKS_S9Y_BOOKMARKLET', 'Bookmarklet');
@define('FURTHER_LINKS_S9Y_BOOKMARKLET_DESC', 'Ulo�te tento odkaz do ob��ben�ch z�lo�iek a pou�ite z�lo�ku na akejko�vek str�nke, o ktorej chcete p�sa�. Z�lo�ka V�s r�chle prepne do V�ho Serendipity weblogu.');
@define('SET_TO_MODERATED', 'Schv�li�');
@define('TOGGLE_SELECT', 'Mark for selection');
@define('ENTRY_METADATA', 'Entry metadata');

/* INSTALLER.TPL */
@define('SERENDIPITY_INSTALLATION', 'In�tal�cia Serendipity');
@define('WELCOME_TO_INSTALLATION', 'Vitajte v in�tal�cii Serendipity');
@define('FIRST_WE_TAKE_A_LOOK', 'Najprv skontrolujeme Va�e z�kladn� nastavenie a sk�sime zisti� pr�padn� probl�my');
@define('ERRORS_ARE_DISPLAYED_IN', 'Chyby bud� zobrazen� %s, odpor��ania %s a �spe�nos� %s');
@define('RED', '�erveou');
@define('YELLOW', '�ltou');
@define('GREEN', 'zelenou');
@define('PRE_INSTALLATION_REPORT', 'Serendipity v%s - predin�tala�n� spr�va');
@define('INTEGRITY', 'Kontrola integrity in�tal�cie');
@define('PHP_INSTALLATION', 'In�tal�cia PHP');
@define('INSTALLER_KEY', 'Key');
@define('INSTALLER_VALUE', 'Value');
@define('OPERATING_SYSTEM', 'Opera�n� syst�m');
@define('WEBSERVER_SAPI', 'Webserver SAPI');
@define('PHPINI_CONFIGURATION', 'konfigur�cia php.ini');
@define('RECOMMENDED', 'Odpor��an�');
@define('ACTUAL', 'Aktu�lne');
@define('PERMISSIONS', 'Opr�vnenia');
@define('INSTALLER_CLI_TOOLS', 'Server-side command line tools');
@define('INSTALLER_CLI_TOOLNAME', 'CLI tool');
@define('INSTALLER_CLI_TOOLSTATUS', 'Executable?');
@define('PROBLEM_PERMISSIONS_HOWTO', 'Opr�vnenia m��u by� nastaven� pou�it�m shellov�ho pr�kazu: `<em>%s</em>` v prie�inku, alebo nastaven�m pomocou FTP programu');
@define('PROBLEM_DIAGNOSTIC', 'Boli zisten� probl�my a v in�tal�cii, pokra�ova� m��ete a� po ich odstr�nen�');
@define('SELECT_INSTALLATION_TYPE', 'Vyberte typ in�tal�cie');
@define('RECHECK_INSTALLATION', 'Skontrolova� in�tal�ciu');
@define('SIMPLE_INSTALLATION', 'Jednoduch� in�tal�cia');
@define('EXPERT_INSTALLATION', 'Pokro�il� in�tal�cia');
@define('COMPLETE_INSTALLATION', 'Kompletn� in�tal�cia');
@define('WONT_INSTALL_DB_AGAIN', 'nebude sa znova vytv�ra� datab�za');
@define('THEY_DO', 'pozit�vne');
@define('THEY_DONT', 'negat�vne');
@define('CHECK_DATABASE_EXISTS', 'Kontrola, �i datab�za a tabulky u� existuj�');
@define('CREATE_DATABASE', 'Vytvorenie z�kladnej datab�zy...');
@define('ATTEMPT_WRITE_FILE', 'Pokus o z�pis do s�boru %s...');
@define('CREATING_PRIMARY_AUTHOR', 'Vytvorenie hlavn�ho autora \'%s\'');
@define('SETTING_DEFAULT_TEMPLATE', 'Nastavenie prednastavenej �abl�ny (template)');
@define('INSTALLING_DEFAULT_PLUGINS', 'In�tal�cia prednastaven�ch doplnkov');
@define('SERENDIPITY_INSTALLED', 'Serendipity bolo �spe�ne nain�talovan�');
@define('VISIT_BLOG_HERE', 'Tu nav�t�vite svoj nov� weblog');
@define('THANK_YOU_FOR_CHOOSING', '�akujeme, �e ste si vybrali Serendipity');
@define('ERROR_DETECTED_IN_INSTALL', 'Pri in�tal�cii bola zisten� chyba');
@define('INSTALL_DBPREFIX_INVALID', 'The database table name prefix must not be empty and may only contain letters, numbers and the underscore character.');
@define('POWERED_BY', 'Vytvoren� pomocou');
@define('ADMIN_FOOTER_POWERED_BY', 'Vytvoren� pomocou Serendipity %s a PHP %s');

/* INSTALLER.PHP - FUNCTIONS_INSTALLER */
@define('USERLEVEL_EDITOR_DESC', 'Autor');
@define('USERLEVEL_CHIEF_DESC', 'Redaktor');
@define('USERLEVEL_ADMIN_DESC', 'Administr�tor');
@define('WWW_USER', 'Zme�te "www" na pou��vate�a, pod ktor�m be�� webserver (napr. nobody).');
@define('INSTALL_PASSWORD_INVALID', 'Your entered passwords for the administrator user do not match.');
@define('DIRECTORY_CREATE_ERROR', 'Prie�inok %s neexistuje a nepodarilo sa ho vytvori�. Pros�m vytvorte prie�inok ru�ne.');
@define('DIRECTORY_RUN_CMD', '&nbsp;-&gt; spusti� <i>%s %s</i>');
@define('CANT_EXECUTE_BINARY', 'Nepodarilo sa spusti� bin�rny s�bor %s.');
@define('FILE_CREATE_YOURSELF', 'Pros�m vytvorte s�bor ru�ne alebo skontrolujte opr�vnenia.');
@define('COPY_CODE_BELOW', '<br />* Skop�rujte k�d uveden� n���ie a umiestnite ho do s�boru "%s" vo va�om prie�inku "%s":<b><pre>%s</pre></b>' . "\n");
@define('BROWSER_RELOAD', 'Po dokon�en� stla�te tla�idlo obnovenia str�nky vo va�om prehliada�i.');
@define('ERROR_TEMPLATE_FILE', 'S�bor so �abl�nou sa nepodarilo otvori�, pros�m aktualizujte verziu Serendipity!');
@define('HTACCESS_ERROR', 'Na otestovanie konfigur�cie V�ho webservera potrebuje Serendipity pr�va na vytvorenie s�bora ".htaccess". Tento s�bor sa nepodarilo vytvori�. Pros�m upravte pr�va s�boru n�sledovne: <br />&nbsp;&nbsp;%s<br />a op�tovne nahrajte t�to str�nku..');
@define('EMPTY_SETTING', 'Nezadali ste platn� hodnotu pre "%s"!');
@define('NOT_WRITABLE_SPARTACUS', ' (Vy�adovan� iba ak chcete v bud�cnosti vyu��va� plugin Spartacus pre s�ahovanie nov�ch doplnkov.)');

/* UPGRADER.TPL */
@define('SERENDIPITY_NEEDS_UPGRADE', 'Serendipity zistil, �e m�te nain�talovan� verziu %s a zrejme sa pok��ate aktualizova� na verziu %s. Ak chcete pokra�ova� v aktualiz�cii, <a href="%s">kliknite tu</a>.');
@define('SERENDIPITY_UPGRADER_WELCOME', 'V�ta V�s spr�vca aktualiz�cie Serendipity.');
@define('SERENDIPITY_UPGRADER_PURPOSE', 'Pom��em V�m s aktualiz�ciou Va�ej in�tal�cie Serendipity %s.');
@define('SERENDIPITY_UPGRADER_WHY', 'T�to spr�va sa V�m zobrazila preto, lebo ste nain�talovali Serendipity %s, ale Va�a datab�za e�te nebola aktualizovan� na t�to verziu.');
@define('SERENDIPITY_UPGRADER_DATABASE_UPDATES', 'Aktualiz�cia datab�zy (%s)');
@define('SERENDIPITY_UPGRADER_FOUND_SQL_FILES', 'Boli n�jden� tieto .sql s�bory, ktor� musia by� spusten� pred pokra�ovan�m v pr�ci so Serendipity');
@define('SERENDIPITY_UPGRADER_VERSION_SPECIFIC', '�pecifick� �lohy pre t�to verziu');
@define('SERENDIPITY_UPGRADER_NO_VERSION_SPECIFIC', '�iadne �pecifick� �lohy');
@define('SERENDIPITY_UPGRADER_PROCEED_QUESTION', 'M��em vykona� horeuveden� �lohy?');
@define('SERENDIPITY_UPGRADER_PROCEED_ABORT', 'Nie, spust�m ich ru�ne');
@define('SERENDIPITY_UPGRADER_PROCEED_DOIT', '�no, vykona�');
@define('SERENDIPITY_UPGRADER_NO_UPGRADES', 'Aktualiz�cia nie je potrebn�');
@define('SERENDIPITY_UPGRADER_CONSIDER_DONE', 'Serendipity bol aktualizovan�');
@define('SERENDIPITY_UPGRADER_YOU_HAVE_IGNORED', 'Vynechali ste aktualiza�n� proces Serendipity, pros�m preverte, �i je Va�a datab�za spr�vne nain�talovan� a pl�novan� �lohy boli spusten�');
@define('SERENDIPITY_UPGRADER_NOW_UPGRADED', 'Va�a in�tal�cia Serendipity bola aktualizovan� na verziu %s');
@define('SERENDIPITY_UPGRADER_RETURN_HERE', 'Kliknut�m %ssem%s sa vr�tite do V�ho weblogu');
@define('ADMIN_ENTRIES', '�l�nky');

/* ADMIN - IMPORTERS.TPL AND IMPORTERS */
@define('COULDNT_CONNECT', 'Nepodarilo sa spoji� s datab�zou MySQL: %s.');
@define('COULDNT_SELECT_DB', 'Nepodarilo sa vybra� datab�zu: %s.');
@define('COULDNT_SELECT_USER_INFO', 'Nepodarilo sa na��ta� �daje pou��vate�a: %s.');
@define('COULDNT_SELECT_CATEGORY_INFO', 'Nepodarilo sa na��ta� �daje kateg�rie: %s.');
@define('COULDNT_SELECT_ENTRY_INFO', 'Nepodarilo sa na��ta� �daje �l�nku: %s.');
@define('COULDNT_SELECT_COMMENT_INFO', 'Nepodarilo sa na��ta� �daje koment�ra: %s.');
@define('MYSQL_REQUIRED', 'Na tento �kon mus� by� nain�talovan� roz�irenie MySQL.');
@define('CREATE_AUTHOR', 'Vytvori� autora \'%s\'.');
@define('CREATE_CATEGORY', 'Vytvori� kateg�riu \'%s\'.');
@define('MT_DATA_FILE', 'S�bory Movable Type');
@define('INSTALL_DBPORT', 'Port datab�zy');
@define('INSTALL_DBPORT_DESC', 'Port pou�it� pre spojenie s V��m datab�zov�m serverom');
@define('IMPORT_PLEASE_ENTER', 'Pros�m vlo�te d�ta uveden� ni��ie');
@define('IMPORT_NOW', 'Naimportova�');
@define('IMPORT_STARTING', 'Sp���am import...');
@define('IMPORT_FAILED', 'Import ne�spe�n�');
@define('IMPORT_DONE', 'Import �spe�ne dokon�en�');
@define('IMPORT_WEBLOG_APP', 'Weblogov� aplik�cia');
@define('IMPORT_NOTES', 'Pozn�mka:');
@define('IMPORT_STATUS', 'Stav po importe');
@define('RSS_IMPORT_WPXRSS', 'WordPress eXtended RSS import (roz��ren� WordPress RSS import), vy�aduje PHP5 a m��e spotrebova� prive�a pam�ti');
@define('RSS_IMPORT_BODYONLY', 'Ulo�i� cel� importovan� text do "hlavnej" �asti, nerozde�ova� do "roz��renej" �asti.');
@define('IMPORT_GENERIC_RSS', 'Z�kladn� RSS import');
@define('ACTIVATE_AUTODISCOVERY', 'Odosla� odozvy na odkazy obsiahnut� v �l�nku');
@define('RSS_IMPORT_CATEGORY', 'Pou��� t�to kateg�riu pre nezaraden� �l�nky');
@define('IMPORT_WP_PAGES', 'Zobrazova� ako be�n� �lanky blogu i pr�lohy a statick� str�nky?');
@define('DOCUMENT_NOT_FOUND', 'Dokument %s nebol n�jden�.');
@define('CONVERT_HTMLENTITIES', 'Sk�si� automatick� konverziu HTML ent�t?');

/* ADMIN - INDEX.TPL */
@define('SERENDIPITY_ADMIN_SUITE', 'Administr�torsk� oblas�');
@define('WRONG_USERNAME_OR_PASSWORD', 'Nespsr�vne meno alebo heslo.');
@define('PLEASE_ENTER_CREDENTIALS', 'Zadajte pros�m prihlasovacie �daje.');
@define('AUTOMATIC_LOGIN', 'Zapam�ta� login');
@define('MAIN_MENU', 'Main menu');
@define('MENU_PERSONAL', 'Personal menu');
@define('MENU_DASHBOARD', 'Dashboard');
@define('MENU_ACTIVITY', 'Activity');
@define('MENU_SETTINGS', 'Settings');
@define('MENU_TEMPLATES', 'Templates');
@define('MENU_PLUGINS', 'Plugins');
@define('MENU_USERS', 'Users');
@define('MENU_GROUPS', 'Groups');
@define('MENU_MAINTENANCE', 'Maintenance');
@define('MEDIA', 'M�di� (obr�zky)');
@define('MEDIA_LIBRARY', 'Kni�nica m�di�');
@define('ADD_MEDIA', 'Prida�');
@define('MANAGE_DIRECTORIES', 'Spravova� prie�inky');
@define('CONFIGURATION', 'Konfigur�cia');

/* ADMIN - OVERVIEW.TPL */
@define('NEW_VERSION_AVAILABLE', 'New stable Serendipity version available: ');
@define('UPDATE_FAILMSG', 'Check for new Serendipity version failed. This can happen because either the URL https://raw.github.com/s9y/Serendipity/master/docs/RELEASE is down, your server blocks outgoing connections or there are other connection issues.');
@define('FURTHER_LINKS', '�al�ie odkazy');
@define('UPDATE_FAILACTION', 'Disable automatic update check');
@define('DASHBOARD_ENTRIES', 'In Progress');
@define('FURTHER_LINKS_S9Y', 'Domovsk� str�nka Serendipity');
@define('FURTHER_LINKS_S9Y_DOCS', 'Dokument�cia Serendipity');
@define('FURTHER_LINKS_S9Y_BLOG', 'Ofici�lny blog');
@define('FURTHER_LINKS_S9Y_FORUMS', 'F�rum');
@define('FURTHER_LINKS_S9Y_SPARTACUS', 'Spartacus');
@define('PUBLISH_NOW', 'Publish this entry now (sets current time and date)');
@define('ENTRY_PUBLISHED', 'Entry #%s published');
@define('PUBLISH_ERROR', 'Error publishing entry:');
@define('PUBLISHED', 'Published');
@define('JS_FAILURE', 'The Serendipity JavaScript-library could not be loaded. This can happen due to PHP or Plugin errors, or even a malformed browser cache. To check the exact error please open <a href="%1$s">%1$s</a> manually in your browser and check for error messages.');
@define('ENTRY_PUBLISHED_FUTURE', 'Tento �l�nok e�te nie je zverejnen�.');

/* ADMIN - PLUGINS.TPL */
@define('PLUGIN_DOCUMENTATION', 'Website');
@define('PLUGIN_DOCUMENTATION_LOCAL', 'Lok�lna dokument�cia');
@define('PLUGIN_DOCUMENTATION_CHANGELOG', 'Hist�ria verzi�');
@define('MEDIA_PROPERTY_COPYRIGHT', 'Copyright');
@define('SIDEBAR_PLUGINS', 'Doplnky pre bo�n� li�ty');
@define('EVENT_PLUGINS', 'Doplnky udalost�');
@define('CONFIGURE_PLUGINS', 'Spravova� doplnky');
@define('PLUGIN_ALREADY_INSTALLED', 'Plugin already installed, and does not support multiple installation ("stackable").');
@define('UNMET_REQUIREMENTS', 'Nesplnen� po�iadavky: %s');
@define('INSTALL_NEW_SIDEBAR_PLUGIN', 'Install a new sidebar plugin');
@define('INSTALL_NEW_EVENT_PLUGIN', 'Install a new event plugin');
@define('UPGRADE_TO_VERSION', 'Aktualiz�cia na verziu %s');
@define('CLICK_HERE_TO_INSTALL_PLUGIN', 'Tu kliknite pre nain�talovanie %s');
@define('ALREADY_INSTALLED', 'Nain�talovan�');
@define('PLUGIN_AVAILABLE_COUNT', 'Spolu %d pluginov');
@define('NO_UPDATES', 'No plugin updates are available');
@define('PLUGIN_ALL_UPDATED', 'All Plugins updated');
@define('PLUGIN_LINK_SPARTACUS', 'More information');
@define('PLUGIN_SOURCE_BUNDLED', 'bundled core plugin');
@define('PLUGIN_SOURCE_LOCAL', 'locally installed');

/* ADMIN - ENTRIES.TPL */
@define('EDIT_ENTRIES', 'Editovat �l�nky');
@define('EDIT_ENTRY', 'Editova� �l�nok');
@define('ENTRY_STATUS', 'Entry status');
@define('DRAFT', 'Koncept');
@define('PUBLISH', 'Publikova�');
@define('CONTENT', 'Obsah');
@define('ENTRIES_PER_PAGE', '�l�nkov na str�nku');
@define('SCHEDULED', 'Scheduled');
@define('STICKY_POSTINGS', 'Prilepen� �l�nky');
@define('PAGE_BROWSE_ENTRIES', 'Str�nka %s z %s, spolu %s �l�nkov');
@define('FIND_ENTRIES', 'H�ada� z�znamy');
@define('RIP_ENTRY', 'Zmazan� �l�nok #%s');
@define('NEW_ENTRY', 'Nov� �l�nok');
@define('EDITOR_TAGS', 'Tags');
@define('ENTRY_BODY', 'Text �l�nku');
@define('EXTENDED_BODY', 'Roz��ren� textov� �as�');
@define('IFRAME_SAVE', 'Serendipity is now saving your entry, sending emails to subscribers, creating trackbacks and performing possible XML-RPC calls. This may take a while..');
@define('IFRAME_SAVE_DRAFT', 'Koncept tohto �l�nku bol ulo�en�');
@define('IFRAME_PREVIEW', 'Serendipity teraz vytv�ra n�h�ad V�ho �l�nku...');
@define('IFRAME_WARNING', 'V� prehliada� nepodporuje iframe. Otvorte s�bor serendipity_config.inc.php a nastavte premenn� $serendipity[\'use_iframe\'] na FALSE.');
@define('DATE_INVALID', 'Upozornenie: D�tum pre �l�nok je neplatn�. Mus� ma� form�t RRRR-MM-DD HH:MM.');
@define('ADVANCED_OPTIONS', 'Roz��ren� nastavenia');
@define('TOGGLE_VIEW', 'Switch category view mode');
@define('TRACKBACK_SPECIFIC_ON_CLICK', 'Tento odkaz nie je ur�en� na klikanie. Obsahuje sp�tn� URI pre tento �l�nok. M��ete pou�i� toto URI na odoslanie pingov a sledovanie odoziev z V�ho vlastn�ho weblogu. Odkaz skop�rujete kliknut�m prav�ho tla��tka my�i a vybran�m "Kop�rova� odkaz" v Internet Exploreri alebo "Kop�rova� adresu odkazu" v Mozille alebo Firefoxe.');
@define('RESET_DATE', 'Resetova� d�tum');
@define('RESET_DATE_DESC', 'Kliknite sem na vr�tenie d�tumu na dne�n�');

/* ADMIN - USERS.TPL */
@define('MANAGE_USERS', 'Spr�va pou��vate�ov');
@define('CREATE_NEW_USER', 'Vytvori� nov�ho pou��vate�a');
@define('CREATE_NOT_AUTHORIZED', 'Nem��ete meni� pou��vate�ov s rovnakou �rov�ou pr�stupu, ako je Va�a �rove�');
@define('CREATE_NOT_AUTHORIZED_USERLEVEL', 'Nem��ete vytv�ra� pou��vate�ov s vy��ou �rov�ou pr�stupu, ako je Va�a �rove�');
@define('CREATED_USER', 'Nov� pou��vate� %s bol vytvoren�');
@define('MODIFIED_USER', 'Nastavenia pou��vate�a %s boli zmenen�');
@define('USER_LEVEL', '�rove� pr�stupu');
@define('WARNING_NO_GROUPS_SELECTED', 'Varovanie: Nevybrali ste �lenstvo v �iadnej skupine. To by V�s odhl�silo zo spr�vy u��vate�sk�ch skup�n a Va�e nastavenie �lenstva v skupin�ch by zostalo nezmenen�.');
@define('DELETE_USER', 'Chcete zmaza� pou��vate�a #%d %s. �lohu naozaj vykona�? T�to zmena znemo�n� prehliadanie n�m vytvoren�ch �l�nkov na hlavnej str�nke.');
@define('DELETED_USER', 'Pou��vate� #%d %s bol zmazan�.');

/* ADMIN - GROUPS.TPL */
@define('MANAGE_GROUPS', 'Spr�va skup�n');
@define('DELETED_GROUP', 'Skupina #%d %s zmazan�.');
@define('CREATED_GROUP', 'Nov� skupina %s bola vytvoren�');
@define('MODIFIED_GROUP', 'Nastavenia skupiny %s boli zmenen�');
@define('CREATE_NEW_GROUP', 'Vytvori� nov� skupinu');
@define('DELETE_GROUP', 'Chyst�te sa zmaza� skupinu #%d %s. Naozaj zmaza�?');
@define('GROUP_NAME_DESC', "Use as uppercased eg. 'EXAMPLE_GROUP' name, but not as a constant 'USERLEVEL_XYZ' group name.");

/* ADMIN - COMMENTS.TPL */
@define('FIND_COMMENTS', 'H�ada� koment�re');
@define('COMMENTS_FILTER_SHOW', 'Zobrazi�');
@define('COMMENTS_FILTER_ALL', 'V�etko');
@define('COMMENTS_FILTER_APPROVED_ONLY', 'Iba schv�len�');
@define('COMMENTS_FILTER_NEED_APPROVAL', '�akaj�ce na s�hlas');
@define('COMMENTS_FILTER_NEED_CONFIRM', '�ak� sa na potvrdenie u��vate�om');
@define('COMMENT_NOT_DELETED', 'Could not delete comment #%s .');
@define('COMMENTS_DELETE_CONFIRM', 'Naozaj chcete zmazaza� vybran� koment�re??');
@define('PAGE_BROWSE_COMMENTS', 'Str�nka %s zo %s, spolu %s koment�rov');
@define('COMMENT_IS_DELETED', '(Koment�r odstr�nen�)');
@define('COMMENT_MODERATED', 'Koment�r �.%s bol �spe�ne schv�len�');
@define('ACTIVE_COMMENT_SUBSCRIPTION', 'Subscribed');

/* ADMIN - SUBSCRIPTIONS.TPL */
@define('EDIT_SUBSCRIPTIONS', 'Edit Subscriptions');
@define('SUBSCRIPTION_ENTRY', 'Subscriptions for Entry');
@define('SUBSCRIPTION_TYPE', 'Subscription type');
@define('SUBSCRIPTION_TIME', 'Subscribed at');
@define('SUBSCRIPTION_STATE', 'Subscription state');
@define('SUBSCRIPTION_BLOG', 'Blog subscription');
@define('SUBSCRIPTION_AUTHOR', 'Author subscription');
@define('SUBSCRIPTION_CATEGORY', 'Author subscription');
@define('NO_SUBSCRIPTIONS_TO_PRINT', 'No subscriptions to print');
@define('PAGE_BROWSE_SUBSCRIPTIONS', 'Page %s of %s, totally %s subscriptions');
@define('OPTIN_PENDING', 'optin pending');
@define('RIP_SUB', 'Subscription #%s deleted.');
@define('FIND_SUBSCRIPTIONS', 'Find subscriptions');

/* ADMIN - CATEGORY.TPL */
@define('CATEGORY_SAVED', 'Kateg�ria ulo�en�');
@define('CATEGORY_ALREADY_EXIST', 'Kateg�ria s n�zvom "%s" u� existuje');
@define('CATEGORY_DELETED_ARTICLES_MOVED', 'Kateg�ria #%s bola zmazan�. Star�ie �l�nky boli presunut� do #%s');
@define('CATEGORY_DELETED', 'Kateg�ria #%s bbola zmazan�.');
@define('INVALID_CATEGORY', 'Na vymazanie nebola vybran� �iadna kateg�ria');
@define('EDIT_THIS_CAT', 'Edit�cia "%s"');
@define('CATEGORY_REMAINING', 'Vymaza� t�to kateg�riu a presun�� �l�nky do kateg�rie');
@define('PARENT_CATEGORY', 'Nadraden� kateg�ria');
@define('CATEGORY_HIDE_SUB', 'Skry� �l�nky z podkateg�ri�?');
@define('CATEGORY_HIDE_SUB_DESC', 'Ak je zobrazen� kateg�ria, be�ne sa zobrazuj� aj v�etky �l�nky z jej podkateg�ri�. Ak je t�to vo�ba zapnut�, bud� sa zobrazova� iba pr�spevky z vybranej kateg�rie.');
@define('CREATE_NEW_CAT', 'Vytvori� nov� kateg�riu');
@define('ALREADY_SUBCATEGORY', '%s u� je podkateg�riou %s.');
@define('NO_CATEGORIES', '�iadne kateg�rie');

/* ADMIN - MAINTENANCE.TPL */
@define('CHECKSUMS_NOT_FOUND', 'Nie je mo�n� porovna� kontroln� s��ty! (v z�kladnom prie�inku ch�ba s�bor checksums.ini.php)');
@define('CHECKSUMS_PASS', 'V�etky s�bory skontrolovan�.');
@define('CHECKSUM_FAILED', 'Kontrola zlyhala: %s je po�koden� nebo zmenen�');
@define('CLEANCOMPILE_PASS', '[smarty clearCompiledTemplate(%s)]');
@define('CLEANCOMPILE_FAIL', 'No files available for clearing.');
@define('CLEANCOMPILE_TITLE', 'Clear template cache');
@define('CLEANCOMPILE_INFO', 'This will purge all compiled template files of the currently active template. Compiled templates will be automatically re-created on demand by the Smarty framework.');
@define('IMPORT_ENTRIES', 'Import d�t');
@define('EXPORT_ENTRIES', 'Export �l�nkov');
@define('EXPORT_FEED', 'Exportova� pln� RSS kan�l');
@define('CREATE_THUMBS', 'Vytvori� n�h�ady');
@define('WARNING_THIS_BLAHBLAH', "POZOR:\\nTento �kon m��e trva� dlh�ie, ak m�te ve�a obr�zkov bez n�h�adov.");
@define('SYNC_OPTION_LEGEND', 'Nastavenia synchroniz�cie n�h�adov obr�zov');
@define('SYNC_OPTION_KEEPTHUMBS', 'Zachova� v�etky existuj�ce n�h�ady');
@define('SYNC_OPTION_SIZECHECKTHUMBS', 'Zachova� existuj�ce n�h�ady iba ak maj� spr�vnu ve�kos�');
@define('SYNC_OPTION_DELETETHUMBS', 'Znovu vytvori� v�etky n�h�ady');
@define('MAINTENANCE_MODE', 'Maintenance Mode');
@define('MAINTENANCE_MODE_DESC', 'Activate maintenance mode to prevent access from users that are not logged in.');
@define('MAINTENANCE_MODE_WARNING', "Do not log out, as you won't be able to log in again until maintenance mode expires!");
@define('MAINTENANCE_MODE_DURATION', 'Duration (in hours):');
@define('MAINTENANCE_MODE_TIME', 'Will be active until');
@define('MAINTENANCE_MODE_ACTIVATE', 'Activate');
@define('MAINTENANCE_MODE_DEACTIVATE', 'Deactivate');

/* ADMIN - TEMPLATES.TPL */
@define('TEMPLATE_SET', '\'%s\' bolo nastaven� ako prednastaven� �abl�na (template)');
@define('WARNING_TEMPLATE_DEPRECATED', 'Varov�nie: V�a �abl�na pou��va nepovolen� met�du, ak je to mo�n�, vykonajte aktualiz�ciu');
@define('STYLE_OPTIONS_NONE', 'T�to t�ma/�t�l nem� �pecifick� vo�by. Ak chcete vedie�, ako m��ete pre Va�e �abl�ny nastavi� �pecifick� vo�by, pre��tajte si Technical Documentation (technick� dokument�ciu) na www.s9y.org "Configuration of Theme options".');
@define('STYLE_OPTIONS', 'Nastavenia pre t�mu/�t�l');
@define('CURRENT_TEMPLATE', 'Current Template');
@define('CUSTOM_ADMIN_INTERFACE', 'Upraven� prostredie pre administr�ciu je dostupn�');
@define('CUSTOM_CONFIG', 'Custom configuration file');
@define('TEMPLATE_INFO', 'Show template info');
@define('AVAILABLE_TEMPLATES', 'Available Templates');
@define('THEMES_PREVIEW_BLOG', 'See demo on blog.s9y.org');
@define('SET_AS_TEMPLATE', 'Nastavi� ako �abl�nu');

/* ADMIN - CONFIG_TEMPLATE.TPL */
@define('CHECK_N_SAVE', 'Skontrolova� a ulo�i�');

/* ADMIN - SHOW_PLUGINS.TPL */
@define('REMOVE_TICKED_PLUGINS', 'Odstr�ni� ozna�en� doplnky');
@define('SAVE_CHANGES_TO_LAYOUT', 'Ulo�i� zmeny vzh�adu');

/* ADMIN - IMAGES.TPL EDITOR.JS.TPL IMAGES.PHP FUNCTIONS_IMAGES */
@define('SYNCING', 'Synchroniz�cia datab�zy s prie�inkom obr�zkov');
@define('SYNC_DONE', 'Hotov� (synchronizovan�ch %s obr�zkov).');
@define('RESIZE_BLAHBLAH', '<b>Zmeni� rozmery %s</b>');
@define('ORIGINAL_SIZE', 'P�vodn� rozmery: <i>%sx%s</i> pixelov');
@define('RESIZING', 'Zmena rozmerov');
@define('RESIZE_DONE', 'Hotov� (upraven� rozmery %s obr�zkov).');
@define('KEEP_PROPORTIONS', 'Zachova� pomer str�n');
@define('REALLY_SCALE_IMAGE', 'Naozaj chcete zmeni� rozmery? N�vrat nie je mo�n�!');
@define('HERE_YOU_CAN_ENTER_BLAHBLAH', '<p>Tu m��ete zada� nov� rozmery obr�zku. Ak chcete zachova� pomer str�n, zadajte iba jednu stranu a stla�te kl�vesu TAB, rozmer druhej strany bude vypo��tan� automaticky:');
@define('MEDIA_RESIZE_EXISTS', 'File dimensions already exist!');
@define('NEWSIZE', 'Nov� rozmer: ');
@define('SCALING_IMAGE', 'Zmena rozmerov %s na %s x %s px');
@define('MEDIA_DIRECTORY_MOVED', 'Prie�inky a s�bory boli �spe�ne presunut� do %s');
@define('MEDIA_DIRECTORY_MOVE_ERROR', 'Prie�inky a s�bory sa nepodarilo presun�� do %s!');
@define('DIRECTORY_INFO', 'Directory info');
@define('DIRECTORY_INFO_DESC', 'Directories reflect their physical folder directory name. If you want to change or move directories which contain items, you have two choices. Either create the directory or subdirectory you want, then move the items to the new directory via the media library and afterwards, delete the empty old directory there. Or completely change the whole old directory via the edit directory button below and rename it to whatever you like (existing subdir/ + newname). This will move all directories and items and change referring blog entries.');
@define('DIRECTORY_CREATED', 'Prie�inok <strong>%s</strong> bol vytvoren�.');
@define('PARENT_DIRECTORY', 'Nadraden� prie�inok');
@define('CONFIRM_DELETE_DIRECTORY', 'Naozaj chcete odstr�ni� v�etok obsah prie�inka <strong>%s</strong>?');
@define('ERROR_NO_DIRECTORY', 'Chyba: prie�inok <strong>%s</strong> neexistuje.');
@define('ERROR_DIRECTORY_NOT_EMPTY', 'Prie�inok sa nepodarilo zmaza�, lebo obsahuje s�bory. Sk�ste vybra� "zmaza� v�etky s�bory", ak chcete zmaza� prie�inok aj s jeho obsahom. Existuj�ce s�bory:');
@define('DIRECTORY_DELETE_FAILED', 'Nepodarilo sa vymaza� prie�inok \'%s\'. Pros�m skontrolujte opr�vnenia alebo vy��ie uveden� upozornenia.');
@define('DIRECTORY_DELETE_SUCCESS', 'Prie�inok \'%s\' bol �spe�ne zmazan�.');
@define('CHECKING_DIRECTORY', 'Kontrola s�borov v prie�inku \'%s\'');
@define('DELETE_DIRECTORY', 'Zmaza� prie�inok');
@define('DELETE_DIRECTORY_DESC', 'Chcete zmaza� obsah prie�inka obsahuj�ceho medi�lne s�bory, ktor� m��u by� pou�it� vo Va�ich existuj�cich �l�nkoch.');
@define('FORCE_DELETE', 'Zmaza� V�ETKY s�bory v prie�inku vr�tane s�borov, ktor� neboli vytvoren� pomocou Serendipity');
@define('CREATE_DIRECTORY', 'Vytvori� prie�inok');
@define('CREATE_NEW_DIRECTORY', 'Vytvori� nov� prie�inok');
@define('CREATE_DIRECTORY_DESC', 'Tu m��ete vytvori� prie�inok pre ukladanie medi�ln�ch s�borov. Vyberte n�zov prie�inka n�zev a pr�padn� nadraden� prie�inok.');
@define('ABOUT_TO_DELETE_FILE', 'Chcete zmaza� <b>%s</b><br />Ak pou��vate tento s�bor v �l�nkoch, sp�sob� to nepr�tomnos� odkazov alebo obr�zkov.<br />Napriek tomu pokra�ova�?<br /><br />');
@define('ERROR_FILE_EXISTS_ALREADY', 'Chyba: S�bor u� na serveri existuje!');
@define('REMOTE_FILE_INVALID', 'The given URL appears to be local and is not allowed to be fetched. You can allow this by setting the option "Allow to fetch data from local URLs" in your blog configuration.');
@define('FILE_NOT_FOUND', 'Nepodarilo sa n�js� s�bor s n�zvom <b>%s</b>, mo�no u� bol vymazan�?');
@define('ERROR_FILE_FORBIDDEN', 'Nem�te opr�vnenie nahr�va� s�bory s akt�vnym obsahom');
@define('REMOTE_FILE_NOT_FOUND', 'S�bor nebol na vzdialenom serveri n�jden�, je URL: <b>%s</b> naozaj spr�vn�?');
@define('FILE_FETCHED', '%s ulo�en� ako %s');
@define('FILE_UPLOADED', 'S�bor %s bol �spe�ne nahran� ako %s.');
@define('DELETE_FILE_FAIL', 'S�bor <b>%s</b> sa nepodarilo zmaza�');
@define('DELETE_FILE', 'Vymaza� s�bor s n�zvom <b>%s</b>');
@define('FOUND_FILE', 'Na�iel sa nov�/zmenen� s�bor: \'%s\'.');
@define('FILENAME_REASSIGNED', 'Automaticky priraden� nov� meno s�boru: %s');
@define('ERROR_FILE_EXISTS', 'Chyba: Nov� n�zov s�boru u� je pou�it�, zvo�te in� n�zov!');
@define('ABOUT_TO_DELETE_FILES', 'You are about to delete a bunch of files at once.<br />If you are using these in some of your entries, it will cause dead links or images<br />Are you sure you wish to proceed?<br /><br />');
@define('MEDIA_HOTLINKED', 'prepojen�');
@define('EDITOR_NO_TAGS', 'No tags');
@define('ENTER_NEW_NAME', 'Pros�m zadajte nov� n�zov pre: ');
@define('MEDIA_PROPERTIES_DONE', 'Properties of #%d changed.');
@define('MULTICHECK_NO_ITEM', 'No item selected, please check at least one. <a href="%s">Return to previous page</a>.');
@define('MULTICHECK_NO_DIR', 'No directory selected, please choose one. <a href="%s">Return to previous page</a>.');
@define('ADDING_IMAGE', 'Prida� obr�zok...');
@define('THUMB_CREATED_DONE', 'N�h�ad vytvoren�.<br>Hotov�.');
@define('THUMBNAIL_USING_OWN', '%s je pou�it� ako n�h�ad, lebo je prive�mi mal�.');
@define('THUMBNAIL_FAILED_COPY', '%s sa nepodarilo pou��� ako vlastn� n�h�ad, lebo sa ned� skop��ova�!');
@define('DELETE_THUMBNAIL', 'Zmazan� n�h�ad obr�zku s n�zvom <b>%s</b>');
@define('ERROR_UNKNOWN_NOUPLOAD', 'Nezn�ma chyba, s�bor sa nenahral. Mo�n�m d�vodom je, �e ve�kos� s�boru prekra�uje maxim�lnu ve�kos� povolen� serverom. Spojte sa s va��m providerom alebo upravte s�bor php.ini a povolte v��iu ve�kos�.');
@define('MEDIA_UPLOAD_SIZEERROR', 'Chyba: Nem��ete uploadova� s�bory v��ie ako %s bytov!');
@define('MEDIA_UPLOAD_DIMERROR', 'Chyba: Nem��ete uploadova� s�bory obr�zkov v��ie ako %s x %s pixelov!');
@define('HOTLINK_DONE', 'S�bor prepojen� odkazom.<br />Dokon�en�.');
@define('DELETE_HOTLINK_FILE', 'Zmazan� odkazovan� s�bor <b>%s</b>');
@define('IMAGICK_EXEC_ERROR', 'Nepodarilo sa spusti�: "%s", chyba: %s, vracia premenn�: %d');
@define('SKIPPING_FILE_EXTENSION', 'S�bor vynechan�: ch�baj�ca pr�pona \'%s\'.');
@define('SKIPPING_FILE_UNREADABLE', 'S�bor vynechan�: nepodarilo sa na��ta� \'%s\'.');
@define('MEDIA_RENAME_FAILED', 'Renaming failed!');
@define('PERM_SET_CHILD', 'Nastavi� rovnak� pr�va pre v�etky podprie�inky');
@define('TIMESTAMP_RESET', 'The timestamp has been reset to the current time.');
@define('CURRENT_TAB', 'Current tab: ');

/* ADMIN - MEDIA_CHOOSE.TPL */
@define('I_WANT_THUMB', 'Chcem ma� v �l�nku n�h�ad.');
@define('I_WANT_BIG_IMAGE', 'Chcem ma� v �l�nku ve�k� obr�zok.');
@define('I_WANT_NO_LINK', 'Obr�zok nem� by� odkazom.');
@define('I_WANT_IT_TO_LINK', 'Obr�zok m� odkazova� na URL:');
@define('MEDIA_ALT', 'Atrib�t ALT (popis alebo kr�tky popis)');
@define('MEDIA_TITLE', 'Atrib�t TITLE (zobrazuje sa pri prejden� kurzorom na obr�zok)');
@define('IMAGE_SIZE', 'Rozmery obr�zku');
@define('IMAGE_ALIGNMENT', '�prava obr�zku');
@define('ALIGN_TOP', 'Top');
@define('ALIGN_LEFT', 'Left');
@define('ALIGN_RIGHT', 'Right');
@define('IMAGE_AS_A_LINK', 'Vlo�enie obr�zka');
@define('MEDIA_TARGET', 'Cie� tohto odkazu');
@define('MEDIA_TARGET_JS', 'Popup okno (pomocou JavaScriptu, prisp�sobite�n� ve�kos�)');
@define('MEDIA_ENTRY', 'Samostatn� �l�nok');
@define('MEDIA_TARGET_BLANK', 'Popup okno (pomocou target=_blank)');
@define('YOU_CHOSE', 'Vybrali ste %s');

/* ADMIN - MEDIA_ITEMS.TPL */
@define('IMAGE_ROTATE_LEFT', 'Oto�i� o 90 stup�ov v�avo');
@define('IMAGE_ROTATE_RIGHT', 'Oto�i� o 90 stup�ov vpravo');
@define('MEDIA_RENAME', 'Premenova� s�bor');
@define('THUMBNAIL_SHORT', 'N�h�.');
@define('ORIGINAL_SHORT', 'Orig.');
@define('SORT_ORDER_NAME', 'N�zov s�boru');
@define('SORT_ORDER_EXTENSION', 'Pr�pona s�boru');
@define('SORT_ORDER_SIZE', 'Ve�kos�');
@define('SORT_ORDER_WIDTH', '��rka obr�zku');
@define('SORT_ORDER_HEIGHT', 'V��ka obr�zku');
@define('SORT_ORDER_DATE', 'D�tum nahrania');
@define('SHOW_METADATA', 'Show metadata');

/* ADMIN - MEDIA_UPLOAD.TPL */
@define('ADD_MEDIA_BLAHBLAH', '<b>Prida� s�bor do schr�nky m�di�:</b><p>Tu m��ete uklada� medi�lne s�bory, alebo ur�i�, kde ich stiahnu� z WEBu! Ak nem�te odpovedaj�ci obr�zok, <a href="https://images.google.com/" target="_blank">h�adajte obr�zok na Google</a>, toto h�adanie je dos� �asto �spe�n� a z�bavn� :). Ale pozor, v��ina obr�zkov je chr�nen�ch autorsk�mi pr�vami, tak�e potrebujete na ich pou�itie s�hlas autora.<p><b>Vyberte met�du:</b><br>');
@define('ENTER_MEDIA_URL', 'Vlo�te URL s�boru na pridanie:');
@define('ENTER_MEDIA_UPLOAD', 'Vyberte s�bor pre nahranie:');
@define('SAVE_FILE_AS', 'Ulo�i� s�bor ako:');
@define('STORE_IN_DIRECTORY', 'Ulo�i� do tohto prie�inka: ');
@define('IMAGE_MORE_INPUT', 'Prida� viac obr�zkov');
@define('ENTER_MEDIA_URL_METHOD', 'Sp�sob prepojenia:');
@define('ADD_MEDIA_BLAHBLAH_NOTE', 'Pozn�mka: Ak zvol�te odkaz na server, uistite sa, �e m�te potrebn� pr�va, alebo �e ide o V� web. Odkazy V�m umo�nia vyu��va� obr�zky z in�ch ako miestnych zdrojov.');
@define('FETCH_METHOD_IMAGE', 'Nahranie na server');
@define('FETCH_METHOD_HOTLINK', 'Odkaz na server');
@define('GO_ADD_PROPERTIES', 'Zada� vlastnosti');
@define('PLAIN_ASCII_NAMES', '(no special characters, umlauts)');
@define('NO_FILE_SELECTED', 'For s9y to do something, you have to select a file first');

/* ADMIN - MEDIA_PANE.TPL */
@define('IMAGE_RESIZE', 'Zmeni� rozmer obr�zka');
@define('MEDIA_DELETE', 'Vymaza� s�bor');
@define('FILES_PER_PAGE', 'S�borov na str�nku');
@define('HIDE_SUBDIR_FILES', 'Hide files in subdirectory');
@define('NO_IMAGES_FOUND', '�iadne obr�zky');
@define('RANGE_FROM', 'From');
@define('RANGE_TO', 'To');
@define('MEDIA_DIRECTORY_MOVE', 'Move files to another directory');
@define('INSERT_ALL', 'Insert All');
@define('ALL_DIRECTORIES', 'v�etky prie�inky');

/* ADMIN - CONFIGURATION.TPL */
@define('WRITTEN_N_SAVED', 'Konfigur�cia bola zap�san� a ulo�en�');
@define('DIAGNOSTIC_ERROR', 'Diagnostika na�la chyby vo vkladan�ch �dajoch:');
@define('FULL_COMMENT_TEXT', '�no, s pln�m znen�m koment�ra');

/* DATABASE SETTINGS */
@define('INSTALL_CAT_DB', 'Nastavenia datab�zy');
@define('INSTALL_CAT_DB_DESC', 'Tu zadajte v�etky nastavenia datab�zy. Serendipity vy�aduje tieto nastavenia.');
@define('INSTALL_DBTYPE', 'Typ datab�zy');
@define('INSTALL_DBTYPE_DESC', 'Typ datab�zy');
@define('INSTALL_DBHOST', 'Server');
@define('INSTALL_DBHOST_DESC', 'N�zev alebo IP adresa datab�zov�ho serveru');
@define('INSTALL_DBUSER', 'Pou��vate�');
@define('INSTALL_DBUSER_DESC', 'Meno pou��vate�a na pripojenie do datab�zy');
@define('INSTALL_DBPASS', 'Heslo');
@define('INSTALL_DBPASS_DESC', 'Heslo pou��vate�a na pripojenie do datab�yz');
@define('INSTALL_DBNAME', 'N�zov');
@define('INSTALL_DBNAME_DESC', 'N�zov datab�zy');
@define('INSTALL_DBPREFIX', 'Predpona');
@define('INSTALL_DBPREFIX_DESC', 'Predpona pre n�zvy tabuliek, napr. serendipity_');
@define('INSTALL_DBPERSISTENT', 'Pou�i� trval� pripojenie');
@define('INSTALL_DBPERSISTENT_DESC', 'Zapn�� trval� pripojenie do datab�zy, viac inform�ci� n�jdete <a href="https://php.net/manual/features.persistent-connections.php" target="_blank">tu</a>. Nastavenie neodpor��ame.');
@define('INSTAL_DB_UTF8', 'Zapn�� konverziu datab�zovej znakovej sady');
@define('INSTAL_DB_UTF8_DESC', 'Spust� dotaz MySQL "SET NAMES", aby sa zistila po�adovan� znakov� sada pre datab�zu. Zapnite alebo vypnite, ak sa V�m na blogu objevuj� divn� znaky.');

/* PATH SETTINGS */
@define('INSTALL_CAT_PATHS', 'Cesty');
@define('INSTALL_CAT_PATHS_DESC', 'Cesty k r�znym prie�inkom a s�borom. Prie�inky pros�m nezabudn�� ukon�i� lom�tkom!');
@define('INSTALL_FULLPATH', '�pln� cesta');
@define('INSTALL_FULLPATH_DESC', '�pln� absol�tna cesta k Va�ej in�tal�cii Serendipity.');
@define('INSTALL_UPLOADPATH', 'Cesta pre upload');
@define('INSTALL_UPLOADPATH_DESC', 'V�etky uploady bud� nahran� sem, hodnota je relat�vna k \'�plnej ceste\' - �tandardne \'uploads/\'');
@define('INSTALL_RELPATH', 'Relat�vna cesta');
@define('INSTALL_RELPATH_DESC', 'Cesta k Serendipity pre prehliada�e, �tandardne \'/serendipity/\'');
@define('INSTALL_RELTEMPLPATH', 'Relat�vna cesta k �abl�nam');
@define('INSTALL_RELTEMPLPATH_DESC', 'Cesta k prie�inku, ktor� obsahuje �abl�ny (templates) - relat�vne k \'relat�vnej ceste\'');
@define('INSTALL_RELUPLOADPATH', 'Relat�vna cesta k uploadom');
@define('INSTALL_RELUPLOADPATH_DESC', 'Cesta k uploadom pre prehliada�e - relat�vne k \'relat�vnej ceste\'');
@define('INSTALL_URL', 'URL weblogu');
@define('INSTALL_URL_DESC', 'Z�kladn� URL Va�ej in�tal�cie Serendipity');
@define('INSTALL_AUTODETECT_URL', 'Autodetekcia pou�itej HTTP adresy na serveri');
@define('INSTALL_AUTODETECT_URL_DESC', 'Pri vo�be "�no" bude Serendipity predpoklada�, �e HTTP adresa pou�it� n�v�tevn�kom, je Va�� z�kladn� nastavenie URL. Zapnutie umo�n� pou��v�n�e r�znych dom�n k pr�stupu na Va�e str�nky, a pou�itie t�jto jednej dom�ny pre v�etky odkazy na sledov�nie zmien na str�nk�ch.');
@define('INSTALL_INDEXFILE', 'Indexov� s�bor');
@define('INSTALL_INDEXFILE_DESC', 'N�zov s�boru pou�it�ho ako index');

/* PERMALINK SETTINGS */
@define('INSTALL_CAT_PERMALINKS', 'Trval� odkazy');
@define('INSTALL_CAT_PERMALINKS_DESC', 'Definuje r�zne vzory URL patterns pre defin�ciu trval�ch odkazov (permanent links) Vo va�om weblogu. Doporu�ujeme pou�i� prednastaven� hodnotu; inak sk�ste pou�i� hodnotu %id% tam, kde je to mo�n�, aby ste predi�li dotazom do datab�zy pri h�adan� cie�ovej URL.');
@define('INSTALL_PERMALINK', '�trukt�ra URL trval�ch odkazov');
@define('INSTALL_PERMALINK_DESC', 'Tu m��ete definova� relat�vnu �trukt�ru URL, kde za�iatok je Va�e z�kladn� URL, z ktor�ho m��u by� Va�e �l�nky dostupn�. M��ete pou�i� premenn� %id%, %title%, %day%, %month%, %year% a ak�ko�vek in� znaky.');
@define('INSTALL_PERMALINK_AUTHOR', '�trukt�ra URL autorov');
@define('INSTALL_PERMALINK_AUTHOR_DESC', 'Tu m��ete definova� relat�vnu �trukt�ru URL, kde za�iatok je Va�e z�kladn� URL, z ktor�ho m��u by� dostupn� �l�nky ur�it�ch autorov. M��ete pou��� premenn� %id%, %realname%, %username%, %email% a ak�ko�vek in� znaky.');
@define('INSTALL_PERMALINK_CATEGORY', '�trukt�ra URL kateg�ri�');
@define('INSTALL_PERMALINK_CATEGORY_DESC', 'Tu m��ete definova� relat�vnu �trukt�ru URL, kde za�iatok je Va�e z�kladn� URL, z ktor�ho m��u by� dostupn� ur�it� kateg�rie. M��ete pou��� premenn� %id%, %name%, %parentname%, %description% a ak�ko�vek in� znaky.');
@define('INSTALL_PERMALINK_FEEDCATEGORY', '�trukt�ra URL trval�ch odkazov kateg�ri� RSS');
@define('INSTALL_PERMALINK_FEEDCATEGORY_DESC', 'Tu m��ete definova� relat�vnu �trukt�ru URL, kde za�iatok je Va�e z�kladn� URL, z ktor�ho m��u by� dostupn� RSS kan�ly z ur�it�ch kateg�ri�. M��ete pou��� premenn� %id%, %name%, %description% a ak�ko�vek in� znaky.');
@define('INSTALL_PERMALINK_FEEDAUTHOR', '�trukt�ra URL adresy pre RSS kan�l autorov');
@define('INSTALL_PERMALINK_FEEDAUTHOR_DESC', 'Tu m��ete definova� relat�vnu �trukt�ru URL, kde za�iatok je Va�e z�kladn� URL, z ktor�ho m��u by� dostupn� RSS kan�ly od ur�it�ch pou�ivate�ov. M��ete pou��t premenn� %id%, %realname%, %username%, %email% a �k�ko�vek in� znaky.');
@define('INSTALL_PERMALINK_ARCHIVESPATH', 'Cesta k arch�vom');
@define('INSTALL_PERMALINK_ARCHIVEPATH', 'Cesta k arch�vu');
@define('INSTALL_PERMALINK_CATEGORIESPATH', 'Cesta ku kateg�ri�m');
@define('INSTALL_PERMALINK_AUTHORSPATH', 'Cesta k autorom');
@define('INSTALL_PERMALINK_SUBSCRIBEPATH', 'Path to subscribe the blog');
@define('INSTALL_PERMALINK_UNSUBSCRIBEPATH', 'Cesta k odhl�seniu koment�rov');
@define('INSTALL_PERMALINK_DELETEPATH', 'Cesta pre zmazanie koment�rov');
@define('INSTALL_PERMALINK_APPROVEPATH', 'Cesta k schv�leniu koment�rov');
@define('INSTALL_PERMALINK_FEEDSPATH', 'Cesta k RSS');
@define('INSTALL_PERMALINK_PLUGINPATH', 'Cesta k jednotliv�mu doplnku');
@define('INSTALL_PERMALINK_ADMINPATH', 'Cesta do administr�cie');
@define('INSTALL_PERMALINK_SEARCHPATH', 'Cesta k vyh�ad�vaniu');
@define('INSTALL_PERMALINK_COMMENTSPATH', 'Cesta ku koment�rom');
@define('CONFIG_PERMALINK_PATH_DESC', 'Please note that you have to use a prefix so that Serendipity can properly map the URL to the proper action. You may change the prefix to any unique name, but not remove it. This applies to all path prefix definitions.');

/* GENERAL SETTINGS */
@define('INSTALL_CAT_SETTINGS', 'Z�kladn� nastavenia');
@define('INSTALL_CAT_SETTINGS_DESC', 'Nastavenie spr�vania Serendipity');
@define('INSTALL_USERNAME', 'Meno administr�tora');
@define('INSTALL_USERNAME_DESC', 'Prihlasovacie meno administr�tora');
@define('INSTALL_PASSWORD', 'Heslo administr�tora');
@define('INSTALL_PASSWORD_DESC', 'Prihlasovacie heslo administr�tora');
@define('INSTALL_PASSWORD2', 'Admin password (verify)');
@define('INSTALL_PASSWORD2_DESC', 'Password for admin login, enter again to verify.');
@define('USERCONF_REALNAME', 'Skuto�n� Meno');
@define('USERCONF_REALNAME_DESC', 'Pln� meno autora. Toto meno je vidite�n� pre n�v�tevn�kov');
@define('INSTALL_EMAIL', 'E-mail administr�tora');
@define('INSTALL_EMAIL_DESC', 'E-mail administr�torsk�ho pou��vate�a');
@define('INSTALL_SENDMAIL', 'Posiela� administr�torovi e-maily?');
@define('INSTALL_SENDMAIL_DESC', 'Chcete dost�va� e-mailov� spr�vy o koment�roch k Va��m �l�nkom?');
@define('INSTALL_SUBSCRIBE', 'Allow users to subscribe?');
@define('INSTALL_SUBSCRIBE_DESC', 'Allow users to subscribe and thereby receive a mail when new content is published to that subscription');
@define('INSTALL_SUBSCRIBE_OPTIN', 'Use Double-Opt In for subscriptions?');
@define('INSTALL_SUBSCRIBE_OPTIN_DESC', 'If enabled, when a a person wants to be notified via e-mail about new articles or new comments to the subscribed entries, he must confirm his subscription. This Double-Opt In is required by german law, for example.');
@define('INSTALL_SUBSCRIBE_CHUNK', 'Subscription message size');
@define('INSTALL_SUBSCRIBE_CHUNK_DESC', 'How much of the content will be included in the email');
@define('SUBSCRIPTION_MAIL_FORMAT', 'Mail format Hmtl for Subscriptions');
@define('SUBSCRIPTION_MAIL_FORMAT_DESC', 'Send mail to subscribers in multipart/alternative as Html or plain text');
@define('INSTALL_BLOGNAME', 'N�zov weblogu');
@define('INSTALL_BLOGNAME_DESC', 'N�zev V�ho weblogu');
@define('INSTALL_BLOGDESC', 'Popis weblogu');
@define('INSTALL_BLOGDESC_DESC', 'Popis Va�ho weblogu');
@define('INSTALL_BLOG_EMAIL', 'E-Mail pre weblog');
@define('INSTALL_BLOG_EMAIL_DESC', 'Tu je nastaven� e-mailov� adresa, ktor� je pou�it� v poli "From"- (od) pre odch�dzaj�ce e-maily. Nastavte t�to adresu tak, aby byla rozpoznana� mailov�m serverom V�ho poskytovate�a - ve�a mailov�ch serverov odmieta po�tu, ktor� m� nezn�mu From-addresu (adr. odosielate�a).');
@define('COMMENT_TOKENS', 'Pou�i� pr�znaky (tokens) pre schva�ovanie koment�rov?');
@define('COMMENT_TOKENS_DESC', 'Ak s� pr�znaky (tokens) pou��v�n�, koment�re m��u by� schv�len� alebo odstr�nen� kliknut�m na odkaz v oznamovacom e-maile, bez potreby prihl�senia do weblogu. Berte do �vahy, �e ak niekto z�ska pr�stup k Va��m e-mailom, m��e schva�ova� a maza� koment�re bez zadania prihlasovac�ch �dajov.');
@define('INSTALL_LANG', 'Jazyk');
@define('INSTALL_LANG_DESC', 'Vyberte jazyk V�ho weblogu');
@define('INSTALL_CHARSET', 'V�ber znakovej sady - Charset');
@define('INSTALL_CHARSET_DESC', 'Tu m��ete vybra� medzi UTF-8 alebo n�rodnou (ISO, EUC, ...) znakovou sadou. Niektor� jazyky maj� iba UTF-8 preklady, tak�e nastavenie znakovej sady na n�rodn� nem� ��inok. UTF-8 je odpor��an� pre nov� in�tal�cie. Nemente toto nastavenie, pokia� ste u� nap�sali �l�nky s diakritikou - m��e to sp�sobi� poru�enie textu. O tomto probl�me si m��ete pre��ta� viac na adrese https://docs.s9y.org/docs/developers/internationalization.html .');
@define('INSTALL_CAL', 'Typ kalend�re');
@define('INSTALL_CAL_DESC', 'Vyberte form�t kalend�ra');
@define('AUTOLANG', 'Pou�i� jazyk prehliada�a ako prednastaven�');
@define('AUTOLANG_DESC', 'Zapnut�m t�jto vo�by ur��te, �e jazyk prehliada�a bude prevzat� ako z�kladn� jazyk pre u�ivate�sk� rozhranie a pre �l�nky.');
@define('USERGROUPS_FORBIDDEN_ENABLE', 'Zapn�� Doplnok ACL pre pou��vate�sk� skupiny?');
@define('USERGROUPS_FORBIDDEN_ENABLE_DESC', 'Ak je volba "Plugin ACL pre pou��vate�sk� skupiny" v nastaveniach zapnut�, m��ete ur�i�, ktor� skupiny u��vate�ov m�zu pou��va� ur�it� doplnky/udalosti.');
@define('UPDATE_NOTIFICATION', 'Update notification');
@define('UPDATE_NOTIFICATION_DESC', 'Show the update notification in the Dashboard, and for which channel?');
@define('LOG_LEVEL', 'Log Level');
@define('LOG_LEVEL_DESC', 'At certain places in the Serendipity code we have placed debugging breakpoints. If this option is set to "Debug", it will write this debug output to templates_c/logs/. You should only enable this option if you are experiencing bugs in those areas, or if you are a developer. Setting this option to "Error" will enable logging PHP errors, overwriting the PHP error_log setting.');
@define('USE_CACHE', 'Enable caching');
@define('USE_CACHE_DESC', 'Enables an internal cache to not repeat specific database queries. This reduces the load on servers with medium to high traffic and improves page load time.');
@define('QUICKSEARCH_SORT_RELEVANCE', 'Relevancia');
@define('UPDATE_STABLE', 'stable');
@define('UPDATE_BETA', 'beta');

/* APPEARANCE AND OPTIONS SETTINGS */
@define('INSTALL_CAT_DISPLAY', 'Vzh�ad a nastavenia');
@define('INSTALL_CAT_DISPLAY_DESC', '�prava vzh�adu a spr�vania Serendipity');
@define('INSTALL_FETCHLIMIT', '�l�nky zobrazen� na hlavnej str�nke');
@define('INSTALL_FETCHLIMIT_DESC', 'Po�et �l�nkov zobrazen�ch na hlavnej str�nke');
@define('INSTALL_RSSFETCHLIMIT', '�l�nky, ktor� sa maj� zobrazi� v RSS Feede');
@define('INSTALL_RSSFETCHLIMIT_DESC', 'Po�et �l�nkov, ktor� sa maj� zobrazi� na ka�dej str�nke v RSS Feede.');
@define('ARCHIVE_SORT_STABLE', 'Stable Archives');
@define('ARCHIVE_SORT_STABLE_DESC', 'Sort the archive-pages descending, so they are stable and search-crawler do not have to reindex them.');
@define('QUICKSEARCH_SORT', 'Ako sa maj� zora�ova� v�sledky h�adania?');
@define('SYNDICATION_RFC2616', 'Aktivova� strict RFC2616 RSS-Feed compliance');
@define('SYNDICATION_RFC2616_DESC', 'Ak neaktivujete RFC2616, bude to ma� za n�sledok, �e v�etky podmienen� GETy na Serendipity vr�tia pr�spevky, ktor� boli modifikovan� od �asu posledn�ho po�iadavku. Tak�e pri takejto vo�be "false" dostan� Va�i n�v�tevn�ci v�etky �l�nky od svojho posledn�ho po�iadavku, �o sa pova�uje za dobr�. Av�ak niektor� agenti ako Planet funguj� za tejto situ�cie nespr�vne a tie� to poru�uje RFC2616. Tak�e ak nastav�te t�to vo�bu na "TRUE", budete vyhovova� RFC ale n�v�tevn�kom m��u v ��ta�k�ch behom pr�zdnin zmizn�� pr�spevky. V ka�dom pr�pade, bu� to nevyhovuje agreg�torom ako je Planet, alebo to nevyhovuje n�v�tevn�kom weblogu. Ak sa vyskytn� s�a�nosti z ktorejko�vek strany, m��ete t�to vo�bu prepn��. Referencia: <a href="https://sourceforge.net/tracker/index.php?func=detail&amp;aid=1461728&amp;group_id=75065&amp;atid=542822" target="_blank" rel="nofollow">SourceForge</a>');
@define('INSTALL_USEGZIP', 'Pou�i� kompresiu gzip');
@define('INSTALL_USEGZIP_DESC', 'Kompresia str�nok ur�ch�uje ich nahranie, pokia� to prehliada� podporuje. Odpor��ame pou�i� toto nastavenie.');
@define('INSTALL_XHTML11', 'Vyn�ti� kompatibilitu s XHTML 1.1?');
@define('INSTALL_XHTML11_DESC', 'Chcete pln� kompatibilitu s XHTML 1.1? (m��e sp�sobi� probl�my v star��ch prehliada�och)');
@define('INSTALL_POPUP', 'Zapn�� pou�itie vyskakovac�ch okien');
@define('INSTALL_POPUP_DESC', 'Chcete vo weblogu pou��va� vyskakovacie okn� pre koment�re, odozvy at�.?');
@define('INSTALL_EMBED', 'Je Serendipity integrovan�?');
@define('INSTALL_EMBED_DESC', 'Ak chcete vlo�i� weblog do Va��ch str�nok, vyberte �no pre odstr�nenie v�tk�ch z�hlav�, zobraz� sa iba obsah. M��ete pou�i� volite�n� s�bor indexFile na ur�enie vlastn�ch z�hlav�. Viac inform�ci� n�jdete v s�bore README!');
@define('INSTALL_SHOW_EXTERNAL_LINKS', 'Spravi� extern� odkazy klikate�n�mi?');
@define('INSTALL_SHOW_EXTERNAL_LINKS_DESC', '"Nie": Neozna�en� extern� odkazy (Top v�stupy, Top odkazuj�ce str�nky, U��vate�sk� koment�re) nebud� zobrazen� alebo bud� zobrazen� ako be�n� text v�ade, kde je to mo�n� (doporu�en� pre obmedzenie spamu). "Ano": Neozna�en� extern� odkazy bud� zobrazen� ako hyperlinky. Nastavenie m��e by� prep�san� v konfigur�cii doplnkov!');
@define('INSTALL_TRACKREF', 'Zapn�� sledovanie odkazuj�cich str�nok?');
@define('INSTALL_TRACKREF_DESC', 'Zapnutie sledovania odkazuj�cich str�nok V�m uk�e, ktor� webov� str�nky odkazuj� na Va�e �l�nky. Dnes sa to �asto zneu��va na SPAM, tak�e to m��ete necha� vypnut�.');
@define('INSTALL_BLOCKREF', 'Blokovan� odkazuj�ce str�nky');
@define('INSTALL_BLOCKREF_DESC', 'Chcete obmedzi� pr�stup z ur�it�ch adries? Adresy oddelujte znakom \';\' a pozor, adresy s� blokovan� vr�tane podadries!');
@define('INSTALL_REWRITE', 'Prepisovanie URL');
@define('INSTALL_REWRITE_DESC', 'Nastavte pravidl� pre tvorbu URL. Zapnutie re�imu prepisovania umo�n� �ah�ie �itate�n� URL a zjednodu�� index�ciu vyh�ad�va�mi, ako napr. Google. Webserver mus� podporova� mod_rewrite, alebo nastavenie "AllowOverride All" pre prie�inok Serendipity. Prednastaven� je automatick� detekcia.');
@define('INSTALL_OFFSET_ON_SERVER_TIME', 'Nastavi� posun �asov�j z�ny vo�i serveru?');
@define('INSTALL_OFFSET_ON_SERVER_TIME_DESC', 'Posun �asu �l�nkov vo�i �asu na serveri. Vyberte "�no" pre zadanie relat�vneho �asov�ho posunu vo�i �asovej z�ne serveru. Nejedn� sa o posun vo�i GMT (Greenwich mean time).');
@define('INSTALL_OFFSET', '�asov� posun servera');
@define('INSTALL_OFFSET_DESC', 'Vlo�te po�et hod�n medzi �asem serveru (aktu�lny �as: %clock%) a Va�ou �asovou z�nou');
@define('INSTALL_SHOWFUTURE', 'Zobrazi� bud�ce �l�nky');
@define('INSTALL_SHOWFUTURE_DESC', 'Toto nastavenie zapne zobrazenie bud�c�ch �l�nkov weblogu. �tandardne s� skryt� a bud� zobrazen� a� v �ase ich vydania.');
@define('INSTALL_ACL', 'Aplikova� pr�va na ��tanie pre kateg�rie');
@define('INSTALL_ACL_DESC', 'Ak je zapnut�, nastavenia u��vate�sk�ch skup�n, ktor� nastav�te pre kateg�rie, bud� aplikovan� ke� si prihl�sen� u��vatelia prezeraj� V� weblog. Ak je vypnut�, pr�va na ��tanie nie s� aplikovan� a pozit�vnym efektom je mierne zr�chlenie V�ho weblogu. Ak nepotrebujete pr�va na ��tanie pre r�znych pou��vate�ov, nechajte toto nastavenie vypnut�.');

/* FEED SETTINGS */
@define('INSTALL_CAT_FEEDS', 'Feed Settings');
@define('INSTALL_CAT_FEEDS_DESC', 'Settings for the RSS feed');
@define('SYNDICATION_PLUGIN_FULLFEED', 'Zobrazi� cel� �l�nky vr�tane roz��renej �asti v RSS kan�li');
@define('SYNDICATION_PLUGIN_BANNERURL', 'Obr�zok pre kan�l RSS');
@define('SYNDICATION_PLUGIN_BANNERURL_DESC', 'URL obr�zku vo form�te GIF/JPEG/PNG, ak je k dispoz�cii. (pr�zdn�: logo serendipity)');
@define('SYNDICATION_PLUGIN_BANNERWIDTH', '��rka obr�zku');
@define('SYNDICATION_PLUGIN_BANNERWIDTH_DESC', 'v pixeloch, max. 144');
@define('SYNDICATION_PLUGIN_BANNERHEIGHT', 'V��ka obr�zku');
@define('SYNDICATION_PLUGIN_BANNERHEIGHT_DESC', 'v pixeloch, max. 400');
@define('SYNDICATION_PLUGIN_SHOW_MAIL', 'Zobrazova� e-mailov� adresy?');
@define('SYNDICATION_PLUGIN_MANAGINGEDITOR', 'Pole "hlavn� redaktor"');
@define('SYNDICATION_PLUGIN_MANAGINGEDITOR_DESC', 'E-mailov� adresa hlavn�ho redaktora, ak je k dispoz�cii. (pr�zdn�: nezobrazi�) [RSS 2.0]');
@define('SYNDICATION_PLUGIN_WEBMASTER', 'Pole "webmaster"');
@define('SYNDICATION_PLUGIN_WEBMASTER_DESC', 'E-mailov� adresa webmastera, ak je k dispoz�cii. (pr�zdn�: nezobrazi�) [RSS 2.0]');
@define('SYNDICATION_PLUGIN_TTL', 'Pole "ttl" (�ivotnos�)');
@define('SYNDICATION_PLUGIN_TTL_DESC', '�as v min�tach, po ktorom by V� weblog nemal b�� na�alej vo vyrovn�vacej pam�i na cudz�ch serveroch/aplik�ci�ch (pr�zdn�: nezobrazi�) [RSS 2.0]');
@define('SYNDICATION_PLUGIN_PUBDATE', 'Pole "pubDate"');
@define('SYNDICATION_PLUGIN_PUBDATE_DESC', 'M� by� pole "pubDate" integrovan� do kan�lu RSS, aby obsahoval d�tum posledn�ho �l�nku?');
@define('FEED_CUSTOM', 'Custom feed URL');
@define('FEED_CUSTOM_DESC', 'If set, a custom feed URL can be set to forward Feedreaders to a specific URL. Useful for statistical analyzers like Feedburner, in which case you would enter your Feedburner-URL here.');
@define('FEED_FORCE', 'Force custom feed URL?');
@define('FEED_FORCE_DESC', 'If enabled, the URL entered above will be mandatory for Feedreaders, and your usual feed cannot be accessed from clients.');

/* IMAGECONVERSION SETTINGS */
@define('INSTALL_CAT_IMAGECONV', 'Nastavenie �pravy obr�zkov');
@define('INSTALL_CAT_IMAGECONV_DESC', 'Tu zadajte v�eobecn� inform�cie, ako m� Serendipity spracov�va� obr�zky');
@define('INSTALL_IMAGEMAGICK', 'Pou��va� Imagemagick?');
@define('INSTALL_IMAGEMAGICK_DESC', 'M�te nain�talovan� Imagemagick a chcete ho pou�i� na zmenu ve�kosti obr�zkov?');
@define('INSTALL_IMAGEMAGICKPATH', 'Cesta k s�boru convert');
@define('INSTALL_IMAGEMAGICKPATH_DESC', '�pln� cesta a n�zev bin�rneho s�boru convert programu Imagemagick');
@define('INSTALL_THUMBSUFFIX', 'Pr�pona n�h�adov');
@define('INSTALL_THUMBSUFFIX_DESC', 'N�h�ady bud� pomenovan� n�sledovne: origin�l.[pr�pona].typ');
@define('INSTALL_THUMBWIDTH', 'Maxim�lna ve�kos� n�h�adu');
@define('INSTALL_THUMBWIDTH_DESC', 'Maxim�lna ve�kos� n�h�adu v obmedzuj�com rozmere');
@define('INSTALL_THUMBDIM', 'Obmedzuj�ci rozmer pre n�h�ady');
@define('INSTALL_THUMBDIM_LARGEST', 'najdlh�ia hrana');
@define('INSTALL_THUMBDIM_WIDTH', '��rka');
@define('INSTALL_THUMBDIM_HEIGHT', 'v��ka');
@define('INSTALL_THUMBDIM_DESC', 'Rozmer , ktor� ur�uje maxim�lnu ve�kos� n�h�adu. �tandardn� nastavenie "' . INSTALL_THUMBDIM_LARGEST .  '" obmedzuje obidva rozmery, tak�e ani jeden z nich nem��e by� v��� ako maxim�lna ve�kos�; "' . INSTALL_THUMBDIM_WIDTH . '" a "' .  INSTALL_THUMBDIM_HEIGHT . '" obmedzuj� iba jeden rozmer, tak�e druh� rozmer m��e by� v��� ako maxim�lna ve�kos�.');
@define('MEDIA_UPLOAD_SIZE', 'Max. ve�kos� uploadovan�ho s�boru');
@define('MEDIA_UPLOAD_SIZE_DESC', 'Zadajte maxim�lnu ve�kos� pre uploadovan� (nahr�van�) s�bory v bytoch. Toto nastavenie m��e by� prep�san� nastaven�m servera v php.ini: upload_max_filesize, post_max_size, max_input_time maj� prednos� pred touto vo�bou. Pr�zdny re�azec znamen�, �e sa pou�ije limit serveru.');
@define('MEDIA_UPLOAD_MAXWIDTH', 'Max. ��rka obr�zku pre upload');
@define('MEDIA_UPLOAD_MAXWIDTH_DESC', 'Zadajte maxim�lnu ��rku pre uploadovan� obr�zky v pixeloch.');
@define('MEDIA_UPLOAD_MAXHEIGHT', 'Max. v��ka obr�zku pre upload');
@define('MEDIA_UPLOAD_MAXHEIGHT_DESC', 'Zadajte maxim�lnu v��ku v pixelech pre uploadovan� obr�zky.');
@define('MEDIA_UPLOAD_RESIZE', 'Resize before Upload');
@define('MEDIA_UPLOAD_RESIZE_DESC', 'Resize images before the upload using Javascript. This will also change the uploader to use Ajax and thus remove the Property-Button');
@define('ONTHEFLYSYNCH', 'Zapn�� synchroniz�ciu m�di� za behu (on the fly)');
@define('ONTHEFLYSYNCH_DESC', 'Ak je zapnut�, Serendipity bude porovn�va� datab�zu m�di� so s�bormi ulo�en�mi na serveri a bude synchronizova� obsah datab�zy a prie�inkov.');
@define('MEDIA_DYN_RESIZE', 'Zapn�� dynamick� zmenu ve�kosti obr�zkov?');
@define('MEDIA_DYN_RESIZE_DESC', 'Ak je zapnut�, m��e media selector vraca� obr�zky v akejko�vek po�adovanej ve�kosti pomocou premennej GET. V�sledky s� cachovan�, tak�e sa m��e pri intenz�vnom vyu�it� vytvori� ve�k� mno�stvo s�borov.');
@define('MEDIA_EXIF', 'Importova� EXIF/JPEG d�ta obr�zku');
@define('MEDIA_EXIF_DESC', 'Ak je zapnut�, existuj�ce EXIF/JPEG metadata obr�zkov bud� spracovan� a ulo�en� v datab�ze, aby sa dali zobrazi� v gal�rii m�di�.');
@define('MEDIA_PROP', 'Vlastnosti m�di�');
@define('MEDIA_PROP_DESC', 'Zadajte zoznam pol� vlastnost� (oddelen�ch  ";"), ktor� chcete definova� pre ka�d� souor v m�di�ch');
@define('MEDIA_PROP_MULTIDESC', '(Za ka�d� polo�ku m��ete prida� ":MULTI", �o bude indikova�, �e t�to polo�ka bude obsahova� dlh� text namiesto iba nieko�ko znamkv)');
@define('MEDIA_KEYWORDS', 'M�di� - k���ov� slov�');
@define('MEDIA_KEYWORDS_DESC', 'Zadajte zoznam slov (oddelen�ch ";"), ktor� chcete pou�i� ako prednastaven� k���ov� slov� pre polo�ky v m�di�ch.');
@define('CONFIG_ALLOW_LOCAL_URL', 'Allow to fetch data from local URLs');
@define('CONFIG_ALLOW_LOCAL_URL_DESC', 'By default, it is forbidden due to security constrains to fetch data from local URLs to prevent Server Side Request Forgers (SSRF). If you use a local intranet, you can enable this option to allow fetching data.');

/* PERSONAL SETTINGS CONFIG_PERSONAL.TPL */
@define('USERCONF_CAT_PERSONAL', 'Osobn� nastavenia');
@define('USERCONF_CAT_PERSONAL_DESC', 'Nastavenia V�ho ��tu');
@define('USERCONF_USERNAME', 'Meno');
@define('USERCONF_USERNAME_DESC', 'Va�e u��vate�sk� meno');
@define('USERCONF_PASSWORD', 'Heslo');
@define('USERCONF_PASSWORD_DESC', 'Va�e heslo');
@define('USERCONF_CHECK_PASSWORD', 'Star� heslo');
@define('USERCONF_CHECK_PASSWORD_DESC', 'Ak men�te heslo v poli vy��ie, mus�te zada� p�vodn� heslo do tohto po�a.');
@define('USERCONF_USERLEVEL', '�rove� pr�stupu');
@define('USERCONF_USERLEVEL_DESC', 'T�to �rove� pr�stupu ur�uje pr�va pou��vate�a weblogu.');
@define('USERCONF_GROUPS', '�lenstvo v skupin�ch');
@define('USERCONF_GROUPS_DESC', 'Tento pou��vate� je �lenom nasleduj�cich skup�n. �lenstvo vo viacer�ch skupin�ch je mo�n�.');
@define('USERCONF_EMAIL', 'E-mailov� adresa');
@define('USERCONF_EMAIL_DESC', 'V� e-mail');
@define('INSTALL_WYSIWYG', 'Pou��va� WYSIWYG editor?');
@define('INSTALL_WYSIWYG_DESC', 'Chcete pou��va� WYSIWYG editor? (Pracuje v IE5+, �iasto�ne v Mozille 1.3+)');
@define('USERCONF_USE_CORE_WYSIWYG_TOOLBAR', 'Toolbar for WYSIWYG editor');
@define('USERCONF_USE_CORE_WYSIWYG_TOOLBAR_DESC', 'Sets the list of available toolbar buttons for the WYSIWYG-Editor. If you need to further change those presets, you can create a file templates/XXX/admin/ckeditor_custom_config.js. For further details please check out the files htmlarea/ckeditor_s9y_config.js and htmlarea/ckeditor_s9y_plugin.js.');
@define('USERCONF_WYSIWYG_PRESET_S9Y', 'Serendipity (default)');
@define('USERCONF_WYSIWYG_PRESET_BASIC', 'Reduced');
@define('USERCONF_WYSIWYG_PRESET_FULL', 'Full');
@define('USERCONF_WYSIWYG_PRESET_STANDARD', 'Alternate');
@define('USERCONF_WYSIWYG_PRESET_CKE', 'CKEditor Full');
@define('USERCONF_WYSIWYG_PRESET_NOCC_S9Y', 'Force: Serendipity');
@define('USERCONF_WYSIWYG_PRESET_NOCC_BASIC', 'Force: Reduced');
@define('USERCONF_WYSIWYG_PRESET_NOCC_FULL', 'Force: Full');
@define('USERCONF_WYSIWYG_PRESET_NOCC_STANDARD', 'Force: Alternate');
@define('USERCONF_WYSIWYG_PRESET_NOCC_CKE', 'Force: CKEditor Full');
@define('USERCONF_SENDCOMMENTS', 'Posiela� spr�vy o koment�roch?');
@define('USERCONF_SENDCOMMENTS_DESC', 'Chcete dost�va� zpr�vy o koment�roch k �l�nkom e-mailom?');
@define('USERCONF_SENDTRACKBACKS', 'Posiela� spr�vy o odozv�ch?');
@define('USERCONF_SENDTRACKBACKS_DESC', 'Chcete dost�va� spr�vy o odozv�ch na �l�nky e-mailom?');
@define('USERCONF_CREATE', 'Zneplatni� pou��vate�a / zak�za� aktivitu?');
@define('USERCONF_CREATE_DESC', 'Ak je t�to vo�ba vybran�, pou��vate� nebude ma� �iadne pr�va k vytv�raniu alebo meneniu weblogu. Ak sa prihl�si do administr�torskej oblasti, m��e si iba prehliada� osobn� nastavenia alebo sa odhl�si�.');
@define('USERCONF_ALLOWPUBLISH', 'Pr�vo publikova� �l�nky?');
@define('USERCONF_ALLOWPUBLISH_DESC', 'Umo�ni� u��vate�ovi publikova� �l�nky?');
@define('SIMPLE_FILTERS', 'Simplified filters');
@define('SIMPLE_FILTERS_DESC', 'When enabled, search forms and filter functions are reduced to essential options. When disabled, you will see every possible filter option, i.e. in the media library or the entry editor.');
@define('INSTALL_BACKENDPOPUP', 'Enable use of popup windows for the backend');
@define('INSTALL_BACKENDPOPUP_DESC', 'Do you want to use popup windows for some backend functionality? When disabled (default), inline modal dialogs will be used for e.g. the category selector and media library.');
@define('INSTALL_BACKENDPOPUP_GRANULAR', 'Force specific backend popups');
@define('INSTALL_BACKENDPOPUP_GRANULAR_DESC', 'If you generally disable backend popups, you can specifically force using popups for specific places by entering a comma seperated list of places here. Available places are: ');
@define('SHOW_MEDIA_TOOLBAR', 'Zobrazi� li�tu n�strojov v okne v�beru m�di�?');
@define('USERCONF_CAT_DEFAULT_NEW_ENTRY', 'Prednastaven� vo�by pre nov� �l�nky');
@define('CONF_USE_AUTOSAVE', 'Enable autosave-feature');
@define('CONF_USE_AUTOSAVE_DESC', 'When enabled, the text you enter into blog entries will be periodically saved in your browser\'s session storage. If your browser crashes during writing, the next time you create a new entry, the text will be restored from this autosave.');
@define('USERLEVEL_OBSOLETE', 'UPOZORNENIE: Atrib�t �rove� pr�stupu pou��vate�a (userlevel) je teraz pou��van� iba kv�li sp�tnej kompatibilite s doplnkami a autoriz�ciou. U��vate�sk� pr�va sa odteraz riadia pomocou �lensk�ch skup�n!');
@define('USERCONF_CHECK_PASSWORD_ERROR', 'Nezadali ste spr�vne star� heslo a t�m p�dom nem�te pr�vo zmeni� heslo. Va�e nastavenia neboli ulo�en�.');
@define('USERCONF_CHECK_USERNAME_ERROR', 'Meno pou��vate�a nem��e by� pr�zdne.');

/* PERMISSIONS - generated dynamically! */
@define('PERMISSION_PERSONALCONFIGURATION', 'ersonalConfiguration: Pr�stup k osobnej konfigur�cii');
@define('PERMISSION_PERSONALCONFIGURATIONUSERLEVEL', 'personalConfigurationUserlevel: Zmena �rovne pou��vate�a (level)');
@define('PERMISSION_PERSONALCONFIGURATIONNOCREATE', 'personalConfigurationNoCreate: Zmena "z�kazu nov�ch �l�nkov"');
@define('PERMISSION_PERSONALCONFIGURATIONRIGHTPUBLISH', 'personalConfigurationRightPublish: Zmena pr�va na publikovanie �l�nkov');
@define('PERMISSION_SITECONFIGURATION', 'siteConfiguration: Konfigur�cia syst�mu');
@define('PERMISSION_BLOGCONFIGURATION', 'blogConfiguration: Konfigur�cia weblogu');
@define('PERMISSION_ADMINENTRIES', 'adminEntries: Spr�va �l�nkov');
@define('PERMISSION_ADMINENTRIESMAINTAINOTHERS', 'adminEntriesMaintainOthers: Spr�va �l�nkov ostatn�ch pou��vate�ov');
@define('PERMISSION_ADMINSUBSCRIPTIONS', 'adminSubscriptions: Delete subscriptions');
@define('PERMISSION_ADMINIMPORT', 'adminImport: Import �l�nkov');
@define('PERMISSION_ADMINCATEGORIES', 'adminCategories: Spr�va kateg�ri�');
@define('PERMISSION_ADMINCATEGORIESMAINTAINOTHERS', 'adminCategoriesMaintainOthers: Spr�va kateg�ri� ostatn�ch pou��vate�ov');
@define('PERMISSION_ADMINCATEGORIESDELETE', 'adminCategoriesDelete: Mazanie kateg�ri�');
@define('PERMISSION_ADMINUSERS', 'adminUsers: Spr�va pou��vate�ov');
@define('PERMISSION_ADMINUSERSDELETE', 'adminUsersDelete: Mazanie pou��vate�ov');
@define('PERMISSION_ADMINUSERSEDITUSERLEVEL', 'adminUsersEditUserlevel: Zmena �rovne pou��vate�a');
@define('PERMISSION_ADMINUSERSMAINTAINSAME', 'adminUsersMaintainSame: Spr�va pou��vate�ov v rovnak�ch skupin�ch');
@define('PERMISSION_ADMINUSERSMAINTAINOTHERS', 'adminUsersMaintainOthers: Spr�va pou��vate�ov v in�ch skupin�ch');
@define('PERMISSION_ADMINUSERSCREATENEW', 'adminUsersCreateNew: Vytv�ranie nov�ch pou��vate�ov');
@define('PERMISSION_ADMINUSERSGROUPS', 'adminUsersGroups: Spr�va pou��vate�sk�ch skup�n');
@define('PERMISSION_ADMINPLUGINS', 'adminPlugins: Spr�va doplnkov');
@define('PERMISSION_ADMINPLUGINSMAINTAINOTHERS', 'adminPluginsMaintainOthers: Spr�va doplnkov ostatn�ch u��vate�ov');
@define('PERMISSION_ADMINIMAGES', 'adminImages: Spr�va medi�lnych s�borov (obr�zkov)');
@define('PERMISSION_ADMINIMAGESDIRECTORIES', 'adminImagesDirectories: Spr�va medi�lnych (obr�zkov�ch) prie�inkov');
@define('PERMISSION_ADMINIMAGESADD', 'adminImagesAdd: Pridanie nov�ch medi�lnych s�borov (obr�zkov)');
@define('PERMISSION_ADMINIMAGESDELETE', 'adminImagesDelete: Mazanie medi�lnych s�borov (obr�zkov)');
@define('PERMISSION_ADMINIMAGESMAINTAINOTHERS', 'adminImagesMaintainOthers: Spr�va medi�lnych s�borov (obr�zkov) ostatn�ch pou��vate�ov');
@define('PERMISSION_ADMINIMAGESVIEW', 'adminImagesView: Prehliadanie medi�lnych s�borov (obr�zkov)');
@define('PERMISSION_ADMINIMAGESSYNC', 'adminImagesSync: Synchroniz�cia n�h�adov');
@define('PERMISSION_ADMINCOMMENTS', 'adminComments: Spr�va koment�rov');
@define('PERMISSION_ADMINTEMPLATES', 'adminTemplates: Spr�va �abl�n (templates)');
@define('PERMISSION_ADMINIMAGESVIEWOTHERS', 'adminImagesViewOthers: Zobrazi� medi�lne s�bory (obr�zky) ostatn�ch pou��vate�ov');
@define('PERMISSION_FORBIDDEN_PLUGINS', 'Zak�zan� doplnky');
@define('PERMISSION_FORBIDDEN_HOOKS', 'Zak�zan� udalosti');
@define('PERMISSION_HIDDENGROUP', 'Hidden group / Non-Author');

/* PREVIEW_IFRAME.TPL */
@define('ENTRY_SAVED', 'Z�znam ulo�en�');

/* ENTRIES.TPL */
@define('COMMENTS_VIEWMODE_THREADED', 'Vl�knov�');
@define('COMMENTS_VIEWMODE_LINEAR', 'Line�rne');
@define('DISPLAY_COMMENTS_AS', 'Zobrazi� koment�re ako');
@define('COMMENTS_DISABLE', 'Zablokova� prid�v�nie koment�rov');
@define('COMMENTS_ENABLE', 'Povoli� prid�v�nie koment�rov');
@define('COMMENTS_CLOSED', 'Autor zablokoval prid�vanie koment�rov');
@define('VIEW_EXTENDED_ENTRY', 'Pokra�ova� v ��tan� "%s"');
@define('TRACKBACK_SPECIFIC', 'Odozva zo �pecifick�ho URI na tento �l�nok');

/* ENTRIES_ARCHIVES.TPL */
@define('VIEW_FULL', 'zobrazi� v�etko');
@define('VIEW_TOPICS', 'zobrazi� nadpisy');

/* ENTRIES_SUMMARY.TPL */
@define('TOPICS_OF', 'T�ma');

/* FUNCTIONS_ENTRIES */
@define('ENTRIES_NOT_SUCCESSFULLY_INSERTED', '�l�nky sa nepodarilo �spe�ne vlo�i�!');

/* COMMENTFORM.TPL */
@define('REMEMBER_INFO', 'Zapam�ta� �daje? ');
@define('SUBMIT_COMMENT', 'Odosla� koment�r');
@define('SUBSCRIBE_COMMENT', 'Subscribe comments');
@define('SUBSCRIBE_COMMENT_BLAHBLAH', 'You can also subscribe to new comments without writing one. Please enter your email address down below.');
@define('SUBSCRIBE_TO_THIS_ENTRY', 'Prihl�si� sa k sledovaniu koment�ov tohto �l�nku');

/* FUNCTIONS_CONFIG */
@define('ERROR_XSRF', 'V� prehliada� nezaslal platn� re�azec HTTP-Referrer. To m��e by� sp�soben� nespr�vnym nastaven�m prehliada�a resp. proxy servera alebo ide o tzv. Cross Site Request Forgery (XSRF), ktor� je namieren� na V�s. Po�adovan� �kon nemohol by� dokon�en�.');
@define('NAVLINK_AMOUNT', 'Enter number of links in the navbar (needs reload of the Manage Themes page)');
@define('NAV_LINK_TEXT', 'Enter the navbar link text');
@define('NAV_LINK_URL', 'Enter the full URL of your link');

/* FUNCTIONS_COMMENTS */
@define('COMMENT_ALREADY_APPROVED', 'Koment�r #%s u� bol schv�len�');
@define('COMMENT_EDITED', 'Vybran� koment�r bol upraven�');
@define('COMMENTS_WILL_BE_MODERATED', 'Odoslan� koment�re bud� pred zverejnen�m moderovan�.');
@define('THIS_COMMENT_NEEDS_REVIEW', 'Pozor: Tento koment�r mus� by� pred uverejnen�m schv�len�');
@define('DELETE_COMMENT', 'Zmaza� koment�r');
@define('APPROVE_COMMENT', 'Schv�li� koment�r');
@define('REQUIRES_REVIEW', 'Vy�aduje kontrolu');
@define('COMMENT_APPROVED', 'Koment�r #%s bol schv�len�');
@define('COMMENT_DELETED', 'Koment�r #%s bol zmazan�');
@define('COMMENTS_MODERATE', 'Koment�re a odozvy k tomuto �l�nku bud� moderovan�');
@define('THIS_TRACKBACK_NEEDS_REVIEW', 'Pozor: T�to odozva mus� b�� pred zverejnen�m schv�len�');
@define('DELETE_TRACKBACK', 'Vymaza� odeovu');
@define('APPROVE_TRACKBACK', 'Schv�li� odozvu');
@define('TRACKBACK_APPROVED', 'Odozva #%s bola schv�len�');
@define('TRACKBACK_DELETED', 'Odozva #%s bola vymazan�');
@define('COMMENT_NOTOKENMATCH', 'Odkazu na schv�lenie vypr�ala platnos�, alebo bol koment�r �. %s u� schv�len� alebo odstr�nen�');
@define('TRACKBACK_NOTOKENMATCH', 'Odkazu na schv�lenie vypr�ala platnos�, alebo bola odozva �. %s u� schv�len� alebo odstr�nen�');
@define('BADTOKEN', 'Neplatn� odkaz na schv�lenie');
@define('TOP_LEVEL', 'Najvy��ia �rove�');
@define('VIEW_COMMENT', 'Zobrazi� koment�r');
@define('VIEW_ENTRY', 'Zobrazi� �l�nok');
@define('LINK_TO_ENTRY', 'Odkaz na �l�nok');
@define('LINK_TO_REMOTE_ENTRY', 'Odkaz na extern� �l�nok');

/* FUNCTIONS_TRACKBACKS */
@define('PINGBACK_SENDING', 'Posielanie ozn�menia (pingback) na URI %s...');
@define('PINGBACK_SENT', 'Ozn�menie �spe�n�');
@define('PINGBACK_FAILED', 'Ozn�menie zlyhalo: %s');
@define('PINGBACK_NOT_FOUND', 'Oznamovacia URI adresa neexistuje.');
@define('TRACKBACK_SENDING', 'Odoslanie odozvy na URI %s...');
@define('TRACKBACK_SENT', 'Odozva �spe�n�');
@define('TRACKBACK_FAILED', 'Odozva ne�spe�n�: %s');
@define('TRACKBACK_NOT_FOUND', 'URI odozvy neexistuje.');
@define('TRACKBACK_URI_MISMATCH', 'Automaticky z�skan� URI neoodpoved� V�mu cie�ov�mu.');
@define('TRACKBACK_CHECKING', 'Testovanie <u>%s</u> na mo�n� odozvy...');
@define('TRACKBACK_NO_DATA', 'Cie� neobsahuje d�ta');
@define('TRACKBACK_COULD_NOT_CONNECT', 'Odozva nebola odoslan�: nepodarilo sa spoji� s %s na porte %d');

/* FUNCTIONS_SUBSCRIPTIONS */
@define('MAILTO_SUBSCRIBERS', 'Sending emails to % subscribers ...');
@define('MAILTO_SUBSCRIBERS_SUCCESS', 'Emails sent');

/* EMAIL TEMPLATES */
@define('CONFIRMATION_MAIL_SUBSCRIPTION', "Dobr� de� %s,\n\nPo�iadali ste o zasielanie ozn�men� o nov�ch koment�roch k �l�nku \"%s\" (<%s>). T�to �iados� (\"Double Opt In\") potvrd�te kliknut�m na nasleduj�ci odkaz:\n<%s>\n.");
@define('CONFIRMATION_MAIL_TITLE', 'Email Subscription to new articles of "%s" ');
@define('CONFIRMATION_MAIL_BLOGSUBSCRIPTION', "Hello %s,\n\nYou have requested to be notified for new articles to the blog \"%s\" (<%s>). To approve this subscription (\"Double Opt In\") please click this link:\n<%s>\n.");
@define('CONFIRMATION_MAIL_ALWAYS', "Dobr� de� %s,\n\nPoslali ste nov� koment�r na \"%s\". Koment�r znie:\n\n%s\n\nVlastn�k weblogu po�aduje e-mailov� potvrdenie, tak�e je potrebn� koment�r potvrdi� klikn�t�m na nasleduj�c� odkaz:\n<%s>\n");
@define('CONFIRMATION_MAIL_ONCE', "Dobr� de� %s,\n\nPoslali ste nov� koment�r na \"%s\". V� koment�r znie:\n\n%s\n\nVlastn�k weblogu vy�aduje prvotn� e-mailov� potvrdenie. Znamen� to, �e je potrebn� koment�r potvrdi� kliknut�m na nasleduj�c� odkaz:\n<%s>\n\nS��asne t�m bud� potvrden� v�etky �al�ie koment�re s t�m ist�m menom a tou istou e-mailovou adresou, tak�e V�m v bud�cnosti u� podobn� ozn�menie nebude doru�ovan�.");
@define('SUBSCRIPTION_MAIL_INTRO', 'In the blog %s a new article was posted:');
@define('SUBSCRIPTION_MAIL_OUTRO', 'You get this email because you have subscribed to receive new articles of the blog %s. To unsubscribe, click here.');
@define('SUBSCRIPTION_NEW_ARTICLE', 'New article');
@define('NEW_COMMENT_TO_SUBSCRIBED_ENTRY', 'Nov� koment�r k sledovan�mu �l�nku "%s"');
@define('SUBSCRIPTION_MAIL', "Dobr� de� %s,\n\nA k �l�ku, ktor� sledujete na \"%s\", s n�zvom \"%s\", bol pr�ve pridan� nov� koment�r.\nMeno odosielate�a: %s\n\nOdkaz na �l�nok: %s\n\nOdhl�si� sledovanie �l�nku: %s\n");
@define('SUBSCRIPTION_TRACKBACK_MAIL', "Dobr� de� %s,\n\nA k �l�nku, ktor� sledujete na \"%s\", s n�zvem \"%s\", bola pr�ve pridan� nov� odozva\nMeno odosielate�a: %s\n\nOdkaz na �l�nok: %s\n\nOdhl�si� sledovanie �l�nku: %s\n");
@define('SIGNATURE', "\n-- \n%s je vytvoren� pomocou Serendipity.\n Tento v�born� vo�n� blogovac� syst�m m��ete pou�i� aj vy.\nViac inform�ci� na webstr�nke <https://s9y.org>.");
@define('SIGNATURE_HTML', "<hr><p>%s is powered by Serendipity.<br>The best blog around, you can use it too.<br>Check out <a href='https://s9y.org'>s9y.org</a> to find out how.</p>");
@define('A_NEW_COMMENT_BLAHBLAH', 'Nov� koment�r vo weblogu "%s", k �l�nku s n�zvom "%s".');
@define('A_NEW_TRACKBACK_BLAHBLAH', 'Nov� odozva na weblog/�l�nok s n�zvom "%s".');
@define('YOU_HAVE_THESE_OPTIONS', 'M�te k dispoz�cii tieto vo�by:');
@define('NEW_TRACKBACK_TO', 'Nov� odozva na');
@define('NEW_COMMENT_TO', 'Nov� koment�r ku');

/* ROUTING */
@define('URL_NOT_FOUND', 'The requested page could not be found (404). This is the default page.');


/* GENPAGE */
@define('NO_ENTRIES_BLAHBLAH', 'Nebol n�jden� �ianen �l�nok obsahuj�ci v�raz "%s"' . "\n");
@define('YOUR_SEARCH_RETURNED_BLAHBLAH', 'Pri h�adan� v�razu "%s" bolo n�jden�ch %s v�sledkov:');
@define('SEARCH_TOO_SHORT', 'H�adan� v�raz mus� b�t dlh�� ako 3 znaky. Pri h�adan� krat��ch v�razov sk�ste k v�razu prida� znak "*", ako napr�klad v�raz: "s9y*".');
@define('SEARCH_ERROR', 'Funkcia vyh�ad�vania nepracovala pod�a o�ak�van�. Pozn�mka pre administr�tora webblogu: Toto m��e by� sp�soben� nepr�tomnos�ou pr�slu�n�ch indexov v datab�ze. Pou��vate�sk� ��et v datab�ze MySQL mus� ma� pr�va na vykonanie tohto pr�kazu: <pre>CREATE FULLTEXT INDEX entry_idx on %sentries (title,body,extended)</pre> Konkr�tna chyba vr�ten� datab�zou bola: <pre>%s</pre>');

/* SERVE ENTRY */
@define('EMPTY_COMMENT', 'V� koment�r je pr�zdny, pros�m %svr�tte sa%s a sk�ste znovu');
@define('COMMENT_NOT_ADDED', 'V� koment�r sa nepodarilo prida�, lebo koment�re k tomuto pr�spevku boli zak�zan�, zadali ste nespr�vne �daje alebo bol V� koment�r zachyten� antispamom.');

/* SERVE COMMENTS*/
@define('COMMENTS_FROM', 'Koment�re od');

/* SERVE COMMENT EMAIL CONFIRM */
@define('NOTIFICATION_CONFIRM_MAIL', 'Va�e potvrdenie koment�ra bolo �spe�ne prijat�.');
@define('NOTIFICATION_CONFIRM_MAIL_FAIL', 'Va�e potvrdenie koment�ra nemohlo by� prijat�. Skontrolujte pros�m odkaz, na ktor� ste klikli. Ak je odkaz star�� ako 3 t��dne, mus�te po�iada� o zasielanie ozn�men� znova.');

/* SERVE OPTIN */
@define('NOTIFICATION_OPTIN_FAIL', 'Your subscription could not be confirmed. Please check the link you clicked on for completion. If the link was sent more than 3 weeks ago, you must request a new confirmation mail.');
@define('NOTIFICATION_CONFIRM_SUBMAIL', 'Va�e potvrdenie �iadosti o zasielanie ozn�men� o nov�ch koment�roch bolo �spe�ne prijat�.');

/* SERVE UNSUBSCRIBE */
@define('NOTIFICATION_UNSUBSCRIBE_CONFIRM', "Your subscription to \"%s\" is successfully deleted. You won't get informed about new articles.");
@define('NOTIFICATION_UNSUBSCRIBE_FAIL', 'Your subscription for the email %s cannot be deleted. Please check the link you clicked on for completion.');
@define('NOTIFICATION_UNSUBSCRIBE_ENTRY_CONFIRM', "Your subscription to \"%s\" for the email %s is successfully deleted. You won't get informed about new comments.");
@define('NOTIFICATION_UNSUBSCRIBE_BAD_TOKEN', 'Your subscription cannot be deleted. Please check the link you clicked on for completion.');

/* SERVE SUBSCRIBE */
@define('NOTIFICATION_OPTINMAIL_SENT', 'Your request for a blog subscription is recieved. An email will be sent to %s to approve this subscription ("Double Opt In") with a link to confirm your email address.');
@define('NOTIFICATION_SUBSCRIBE_CONFIRM', 'The subscription to "%s" is received. A summary of a new article will be sent to you. You can unsubscribe with a link included in every mail.');
@define('NOTIFICATION_SUBSCRIBE_DUPE', 'Your subscription failed because there is already an active subscription for "%s".');
@define('NOTIFICATION_SUBSCRIBE_CONFIRM_FAIL', 'Your subscription failed. Please check your email address.');
@define('BLOG_SUBSCRIPTION_TITLE', 'Email Subscription of new articles');
@define('BLOG_SUBSCRIPTION_BLAHBLAH', 'To get informed of new articles, enter your email address here.');
@define('BLOG_SUBSCRIPTION_AUTHOR', "To get informed of new articles from \"%s\", enter your email address here.");
@define('BLOG_SUBSCRIPTION_CATEGORY', "To get informed of new articles in the category \"%s\", enter your email address here.");
@define('BLOG_SUBSCRIPTION_OPTIN', 'An email with an confirmation link will be sent to this address, click on the link to confirm your subscription.');
@define('BLOG_SUBSCRIPTION_BLAHBLAH_AUTHOR', 'To get informed of new articles from "%s", enter your email address here.');
@define('BLOG_SUBSCRIPTION_BLAHBLAH_CATEGORY', 'To get informed of new articles in the category "%s", enter your email address here.');

/* PLUGIN_API */
@define('PLUGIN_API_VALIDATE_ERROR', 'Konfigura�n� syntax pre vo�bu "%s" je chybn�. Vy�adovan� obsah je typu "%s".');

/* PLUGIN CATEGORIES */
@define('CATEGORY_PLUGIN_DESC', 'Zoznam kateg�ri�.');
@define('CATEGORIES_PARENT_BASE', 'Zobrazi� iba kateg�rie ni��ie ...');
@define('CATEGORIES_PARENT_BASE_DESC', 'M��ete vybra� nadraden� kateg�riu a bud� zobrazen� iba jej podraden� kateg�rie.');
@define('CATEGORIES_HIDE_PARALLEL', 'Skry� kateg�rie, ktor� nie s� s��as�ou stromu kateg�ri�');
@define('CATEGORIES_HIDE_PARALLEL_DESC', 'Ak chcete skry� kateg�rie, ktor� s� ��s�ou in�ho stromu kateg�ri�, mus�te pou�i� toto nastavenie. T�to mo�nost m� najlep�ie vyu�itie s multi-blogom a doplnkom "Properties/Templates of categories".');
@define('CATEGORIES_HIDE_PARENT', 'Skry� zvolen� nadraden� kateg�riu?');
@define('CATEGORIES_HIDE_PARENT_DESC', 'Ak obmedz�te v�pis kateg�ri� na ur�it� kateg�riu, �tandardne bude vo v�stupe t�to kateg�ria zobrazen�. Ak zapnete toto nastavenie, nadraden� kateg�ria nebude zobrazen�.');
@define('CATEGORY_PLUGIN_TEMPLATE', 'Zapn�� Smarty-Templates?');
@define('CATEGORY_PLUGIN_TEMPLATE_DESC', 'Ak je t�to mo�nos� zapnut�, bude doplnok pre v�pis kateg�ri� vyu��va� mo�nost� Smarty-Templating. Vzh�ad m��ete upravi� pomocou �abl�ny "plugin_categories.tpl". Zapnutie tejto vo�by m� negat�vny vplyv na v�kon, tak�e ak nechcete robi� vladn� �pravy, nechajte to vypnut�.');
@define('CATEGORY_PLUGIN_SHOWCOUNT', 'Zobrazi� po�et �l�nkov v kateg�rii? ');
@define('CATEGORY_PLUGIN_SHOWALL', 'If enabled, a link for the visitor to display the blog with no category restriction will be added.');
@define('CATEGORY_PLUGIN_SHOWALL_DESC', 'If enabled, a link for the visitor to display the blog with no category restriction will be added.');
@define('CATEGORIES_ALLOW_SELECT', 'Povoli� n�v�tevn�kom zobrazi� viac kateg�ri� naraz?');
@define('CATEGORIES_ALLOW_SELECT_DESC', 'k je t�to vo�ba zapnut�, bude ved�a ka�dej kateg�rie v tomto doplnku bo�nej li�ty zobrazen� okienko. N�v�tevn�ci m��u za�krtn�� tieto okienka a bude im zobrazen� �l�nky vyhovuj�ce tomuto v�beru.');
@define('CATEGORIES_TO_FETCH', 'Zdroj kateg�ri�');
@define('CATEGORIES_TO_FETCH_DESC', 'Kateg�rie ktor�ch autorov sa maj� zahrn��?');

/* PLUGIN_AUTHORS */
@define('AUTHOR_PLUGIN_DESC', 'Zobrazi� zoznam autorov');
@define('AUTHORS_SHOW_ARTICLE_COUNT', 'Zobrazi� po�et �l�nkov pri autorovom mene?');
@define('AUTHORS_SHOW_ARTICLE_COUNT_DESC', 'Ak je t�to vo�ba zapnut�, ved�a mena autora bude v z�tvorke zobrazen� po�et jeho �l�nkov.');
@define('PLUGIN_AUTHORS_MINCOUNT', 'Zobrazi� iba autorov s viac ako X �l�nkami');

/* PLUGIN SYNDICATION */
@define('SYNDICATION', 'Spolupr�ca');
@define('SHOWS_RSS_BLAHBLAH', 'Zdie�an� RSS odkazy');
@define('SYNDICATE_THIS_BLOG', 'Subscribe');
@define('SYNDICATION_PLUGIN_FEEDFORMAT', 'Feed format');
@define('SYNDICATION_PLUGIN_FEEDFORMAT_DESC', 'Which format shall be used for all feeds. Both are supported in all common readers');
@define('SYNDICATION_PLUGIN_COMMENTFEED', 'Comment feed');
@define('SYNDICATION_PLUGIN_COMMENTFEED_DESC', 'Show an additional link to a comment feed. This should be interesting only to the blogauthor itself');
@define('SYNDICATION_PLUGIN_GENERIC_FEED', 'Kan�l %s');
@define('SYNDICATION_PLUGIN_091', 'Kan�l RSS 0.91');
@define('SYNDICATION_PLUGIN_10', 'Kan�l RSS 1.0');
@define('SYNDICATION_PLUGIN_20', 'Kan�l RSS 2.0');
@define('SYNDICATION_PLUGIN_20c', 'Koment�re RSS 2.0');
@define('SYNDICATION_PLUGIN_ATOM03', 'Kan�l ATOM 0.3');
@define('SYNDICATION_PLUGIN_FEEDICON', 'Feed icon');
@define('SYNDICATION_PLUGIN_FEEDICON_DESC', 'Show a (big) icon insteaf of a textlink to the feed. Set to "none" to deactivate, or to "feedburner" to show a feedburner counter if an id is given below');
@define('SYNDICATION_PLUGIN_SUBTOME', 'subToMe');
@define('SYNDICATION_PLUGIN_SUBTOME_DESC', 'Show the subToMe button, a layer to make feed subscription easier');
@define('SYNDICATION_PLUGIN_CUSTOMURL', 'Custom URL');
@define('SYNDICATION_PLUGIN_CUSTOMURL_DESC', 'If you want to link to the custom feed specified in the blog configuration, enable this option.');
@define('SYNDICATION_PLUGIN_FEEDNAME', 'Zobrazen� meno pre "kan�l"');
@define('SYNDICATION_PLUGIN_FEEDNAME_DESC', 'Zadajte volite�n� meno pre kan�l (ak je pr�zdne, tak je �tandardne pomenovan� ako "kan�l")');
@define('SYNDICATION_PLUGIN_COMMENTNAME', 'Zobrazovan� meno pre kan�l s koment�rmi');
@define('SYNDICATION_PLUGIN_COMMENTNAME_DESC', 'Zadajte (volitelne) ak�ko�vek meno pre kan�l s koment�rmi');
@define('SYNDICATION_PLUGIN_FEEDBURNERID', 'FeedBurner ID');
@define('SYNDICATION_PLUGIN_FEEDBURNERID_DESC', 'ID feedu, ktor� chcete publikova�');
@define('SYNDICATION_PLUGIN_FEEDBURNERIMG', 'FeedBurner obr�zok');
@define('SYNDICATION_PLUGIN_FEEDBURNERIMG_DESC', 'N�zov obr�zku, ktor� sa m� zobrazi� (alebo pr�zdny pre po�itadlo), umiestnen� na feedburner.com, napr.: fbapix.gif');
@define('SYNDICATION_PLUGIN_FEEDBURNERTITLE', 'FeedBurner nadpis');
@define('SYNDICATION_PLUGIN_FEEDBURNERTITLE_DESC', 'Nadpis (volite�n�), ktor� sa m� zobrazi� pri obr�zku');
@define('SYNDICATION_PLUGIN_FEEDBURNERALT', 'FeedBurner text obr�zku');
@define('SYNDICATION_PLUGIN_FEEDBURNERALT_DESC', 'Text (volite�n�) ktor� sa m� zobrazi� pri pohybe kurzoru nad obr�zkom');
@define('SYNDICATION_PLUGIN_XML_DESC', 'Set to "none" if you only want to show a text link.');

/* PLUGIN_SUBSCRIBE */
@define('PLUGIN_SUBSCRIBE_NAME', 'Blog subscription with email');
@define('PLUGIN_SUBSCRIBE_DESC', 'Allows an user to subscribe to the blog. He will receive an email if new articles are published with the option to unsubscribe');
@define('PLUGIN_SUBSCRIBE_TITLE', 'Title');
@define('PLUGIN_SUBSCRIBE_TITLE_DESC', 'Enter the sidebar title to display:');
@define('PLUGIN_SUBSCRIBE_TITLE_DEFAULT', 'Email subscription');
@define('PLUGIN_SUBSCRIBE_LINK', 'Linktext');
@define('PLUGIN_SUBSCRIBE_LINK_DESC', 'which text should be shown in the subscribe link?');
@define('PLUGIN_SUBSCRIBE_LINK_DEFAULT', 'Email subscription');
@define('PLUGIN_SUBSCRIBE_IMAGE_TO_DISPLAY', 'Subscribe Button');
@define('PLUGIN_SUBSCRIBE_IMAGE_DESC', 'Set to "none" if you only want to show a text link.');

/* PLUGIN_ARCHIVES */
@define('CATEGORY_PLUGIN_HIDEZEROCOUNT', 'Schova� odkaz na arch�vy, ak nie s� vo vybranom obdob� vydan� �iadne �l�nky (vy�aduje po��t�nie �l�nkov)');
@define('ARCHIVE_COUNT', 'Po�et polo�iek v arch�vnom zozname');
@define('ARCHIVE_COUNT_DESC', 'Celkov� po�et zobrazen�ch mesiacov, t��dnov alebo dn�');
@define('ARCHIVE_FREQUENCY', 'Arch�vny interval');
@define('ARCHIVE_FREQUENCY_DESC', 'Kalend�ny interval medzi polo�kami v arch�vnom zozname');
@define('BROWSE_ARCHIVES', 'Prehliada� mesa�n� arch�vy');

/* PLUGIN_PLUG */
@define('POWERED_BY_SHOW_TEXT', 'Zobrazi� "Serendipity" ako text');
@define('POWERED_BY_SHOW_TEXT_DESC', 'Vytvoren� v "Serendipity" sa zobraz� ako text');
@define('POWERED_BY_SHOW_IMAGE', 'Zobrazi� "Serendipity" s logom');
@define('POWERED_BY_SHOW_IMAGE_DESC', 'Zobraz� sa logo Serendipity');
@define('ADVERTISES_BLAHBLAH', 'Reklama na tvorcov syst�mu v�ho weblogu');

/* PLUGIN_SUPERUSER */
@define('PLUGIN_SUPERUSER_HTTPS', 'Pou��t https pre prihl�senie');
@define('PLUGIN_SUPERUSER_HTTPS_DESC', 'Pre login sa pou�ije https odkaz. V� webserver to mus� podporova�!');
@define('SUPERUSER', 'Spr�va weblogu');
@define('SUPERUSER_OPEN_ADMIN', 'Administr�cia');
@define('SUPERUSER_OPEN_LOGIN', 'Prihl�senie');
@define('ALLOWS_YOU_BLAHBLAH', 'Vlo�i� odkaz do bo�n�ho bloku administr�cie weblogu');

/* PLUGIN_CALENDAR */
@define('CALENDAR', 'Kalend�r');
@define('CALENDAR_BOW_DESC', 'De� ur�en� ako za�iatok t��d�a. Prednastaven� je pondelok');
@define('QUICKJUMP_CALENDAR', 'Vyh�ad�vac� kalend�r');
@define('CALENDAR_BEGINNING_OF_WEEK', 'Za�iatok t��d�a');
@define('CALENDAR_ENABLE_EXTERNAL_EVENTS', 'Zapn�� Plugin API hook');
@define('CALENDAR_EXTEVENT_DESC', 'Ak je zapnut�, doplnky sa m��u napoji� na kalend�r a zv�raz�ova� svoje vlastn� udalosti. Zapnite iba ak m�te doplnky, ktor� toto vy�aduj�, inak to zni�uje v�kon.');

/* PLUGIN_QUICKSEARCH */
@define('SEARCH_FOR_ENTRY', 'H�ada� �l�nky');
@define('SEARCH_FULLENTRY', 'Show full entry');

/* PLUGIN_HTML_NUGGET */
@define('HOLDS_A_BLAHBLAH', 'Vlo�enie HTML k�du do krajn�ho st�pca');
@define('THE_NUGGET', 'Vlo�en� HTML');
@define('BACKEND_TITLE', 'Dal�ie inform�cie v konfigur�cii doplnku');
@define('BACKEND_TITLE_FOR_NUGGET', 'Tu m��ete zada� re�azec, ktor� bude zobrazen� v konfigura�nej str�nke doplnkov spolu s popisom doplnku HTML Nugget. Ak m�te nieko�ko HTML Nuggetov s pr�zdnym n�zvom, toto V�m pom��e ich rozl��i�.');

/* ORPHANED CONSTANTS */
@define('INSTALL_TOP_AS_LINKS', 'Zobrazi� Top v�stupy/odkazuj�ce str�nky ako odkazy?');
@define('INSTALL_TOP_AS_LINKS_DESC', '"Nie": V�stupy a adresy odkazuj�cich str�nok bud� zobrazen� ako �ist� text pre obmedzenie spamu, "�no": ako hypertextov� odkazy. "Default": Pou�i� glob�lne nastavenia (doporu�en�).');
@define('HAVE_TO_BE_LOGGED_ON', 'Na zobrazenie tejto str�nky mus�te by� prihl�sen�');
@define('WELCOME_TO_ADMIN', 'Vitajte v administr�cii Serendipity.');
@define('SERENDIPITY_PHPVERSION_FAIL', 'Serendipity requires a PHP version >= %2$s - you are running a lower version (%1$s) and need to upgrade your PHP version. Most providers offer you to switch to newer PHP versions through their admin panels or .htaccess directives.');
@define('SYNDICATION_PLUGIN_BIGIMG', 'Ve�k� obr�zok');
@define('SYNDICATION_PLUGIN_BIGIMG_DESC', 'Display a (big) image at the top of the feeds in sidebar, enter full or absolute URL to image file. Set to "none" to show a textlink (the old default)');
@define('SYNDICATION_PLUGIN_FEEDBURNERID_FORWARD', '(Ak zad�te absol�tnu URL adresu s http://..., bude t�to adresa pou�it� ako cie� presmerovania v pr�pade, �e ste vybrali vo�bu "Vyn�ti�" pre FeedBurner. Nezabudnite, �e to m��e b�t URL adresa nez�visl� na FeedBurneri. Pre nov� kan�ly Google FeedBurnera budete musie� zada� http://feeds2.feedburner.com/jmenoVasehoKanalu)');
@define('SYNDICATION_PLUGIN_FEEDBURNERID_FORWARD2', 'Ak nastav�te t�to vo�bu na "Vyn�ti�", m��ete presmerova� RSS kan�l na ak�ko�vek webov� slu�bu, nie len na FeedBurner. Pozrite sa ni��ie na vo�bu "Feedburner ID" pre zadanie absol�tnej adresy.');
@define('MEDIA_PROPERTY_COMMENT1', 'Kr�tky koment�r');
@define('MEDIA_PROPERTY_COMMENT2', 'Dlh� koment�r');
@define('DELETE_SELECTED_ENTRIES', 'Zmaza� vybran� pr�spevky');
@define('MEDIA_PROPERTY_ALT', 'Popis (zhrnutie pre atrib�t ALT)');
@define('MEDIA_PROPERTY_DPI', 'DPI');
@define('MEDIA_PROPERTY_TITLE', 'Titulok');
@define('SERENDIPITY_NOT_INSTALLED', 'Serendipity e�te nie je nain�talovan�. Pros�m <a href="%s">nain�talujte</a> ho teraz.');
@define('COMMENT_ADDED_CLICK', 'Kliknite %ssem%s pre n�vrat ku koment�rom nebo %ssem%s pre zavretie okna.');
@define('COMMENT_NOT_ADDED_CLICK', 'Kliknite %ssem%s pre n�vrat ku koment�rom alebo %ssem%s pre zavretie okna.');
@define('MEDIA_PROPERTY_RUN_LENGTH', 'D�ka');
@define('MEDIA_PROPERTY_DATE', 'Asociovan� d�tum');
@define('MEDIA_DIRECTORY_MOVE_ENTRIES', 'URL presunut�ho prie�inka zmenen� v %s �l�nkoch.');
@define('MEDIA_DIRECTORY_MOVE_ENTRY', 'V in�ch datab�zach ako MySQL nie je mo�n� iter�cia po �l�nkoch a nahradenie starej adresy p�vodn�ho adres�ra novou URL. Budete musie� �l�nky ru�ne editova� a adresy upravi�. Prie�inok sa d� ale st�le presn�� nasp� na p�vodn� miesto, ak to pova�ujete za n�ro�n�.');
@define('TRACKBACK_SIZE', 'Cie�ov� URI prekro�ilo max. ve�kos� s�boru %s bajtov.');
@define('CLICK_FILE_TO_INSERT', 'Kliknite na s�bor, ktor� chcete vlo�i�:');
@define('SELECT_FILE', 'Vyberte s�bor na vlo�enie:');
@define('MANAGE_IMAGES', 'Spr�va obr�zkov');
@define('WORD_NEW', 'Nov�');
@define('WORD_OR', 'alebo');
@define('PLUGIN_GROUP_FRONTEND_EXTERNAL_SERVICES', 'Frontend: Extern� slu�by');
@define('PLUGIN_GROUP_FRONTEND_FEATURES', 'Frontend: �al�ie mo�nosti');
@define('PLUGIN_GROUP_FRONTEND_FULL_MODS', 'Frontend: �pln� mody');
@define('PLUGIN_GROUP_FRONTEND_VIEWS', 'Frontend: Zobrazenie/filtre');
@define('PLUGIN_GROUP_FRONTEND_ENTRY_RELATED', 'Frontend: Doplnky pre �l�nky');
@define('PLUGIN_GROUP_BACKEND_EDITOR', 'Backend: Editor');
@define('PLUGIN_GROUP_BACKEND_USERMANAGEMENT', 'Backend: Spr�va pou��vate�ov');
@define('PLUGIN_GROUP_BACKEND_METAINFORMATION', 'Backend: Meta inform�cie');
@define('PLUGIN_GROUP_BACKEND_TEMPLATES', 'Backend: Templates - �abl�ny vzh�adov');
@define('PLUGIN_GROUP_BACKEND_FEATURES', 'Backend: Dal�ie mo�nosti');
@define('PLUGIN_GROUP_IMAGES', 'Obr�zky');
@define('PLUGIN_GROUP_ANTISPAM', 'Antispam');
@define('PLUGIN_GROUP_MARKUP', 'Markup - textov� zna�ky');
@define('PLUGIN_GROUP_STATISTICS', '�tatistiky');
@define('IMPORT_WELCOME', 'Vitajte v n�stroji pre import d�t');
@define('USER_SELF_INFO', 'Prihl�sen� ako %s (%s)');
@define('IMPORT_WHAT_CAN', 'Tu m��ete importova� �l�nky z in�ch weblogov');
@define('IMPORT_SELECT', 'Vyberte program, z ktor�ho chcete importova�');
@define('MANAGE_STYLES', 'Spravova� �t�ly');
@define('SELECT_A_PLUGIN_TO_ADD', 'Vyberte doplnok, ktor� chcete nain�talova�');
@define('BELOW_IS_A_LIST_OF_INSTALLED_PLUGINS', 'Ni��ie je zoznam nain�talovan�ch doplnkov');
@define('PENDING_CONFIRMATION', 'Pending confirmation');
@define('PENDING_MODERATION', 'Pending moderation');
@define('ABORT_NOW', 'Zru�i�');
@define('DELETE_SELECTED_COMMENTS', 'Zmaza� vybran� koment�re');
@define('MODERATE_SELECTED_COMMENTS', 'Approve selected comments');
@define('FIND_MEDIA', 'H�ada� m�di�');
@define('TEMPLATE_OPTIONS', 'Template options');
@define('BULKMOVE_INFO', 'Bulk-move info');
@define('BULKMOVE_INFO_DESC', 'You can select multiple files to bulk-move them to a new location. <strong>Note:</strong> This action cannot be undone, just like bulk-deletion of multiple files. All checked files will be physically moved, and referring blog entries are rewritten to point to the new location.');
@define('UPDATE_ALL', 'Update All');
@define('START_UPDATE', 'Starting Update ...');
@define('ERROR_FILE_NOT_EXISTS', 'Chyba: Star� n�zov s�boru neexistuje!');
@define('ERROR_SOMETHING', 'Chyba: Nie�o nie je v poriadku.');
@define('DIRECT_LINK', 'Priamy odkaz na tento �l�nok');
@define('SELECT_TEMPLATE', 'Vyberte �abl�nu pre v� web');
@define('DATABASE_ERROR', 'chyba serendipity: nepodarilo sa spoji� s datab�zou - ukon�en�.');
@define('LIMIT_TO_NUMBER', 'Ko�ko �l�nkov sa m� zobrazi�?');
@define('DIRECTORIES_AVAILABLE', 'Kliknut�m na niektor� prie�inok v zozname m��ete vytvori� jeho podprie�inok.');
@define('CATEGORY_INDEX', 'Ni��ie je zoznam kateg�ri�, ktor� m��ete pou�i� vo Va�om �l�nku');
@define('PAGE_BROWSE_PLUGINS', 'Strana %s z %s, spolu %s doplnkov');
@define('CHARSET_NATIVE', 'N�rodn�');
@define('XMLRPC_NO_LONGER_BUNDLED', 'XML-RPC API Interface u� nie je s��as�ou Serendipity kv�li bezpe�nostn�m probl�mom s touto API a n�zkemu po�tu jeho pou��vate�ov. Preto mus�te nain�talova� doplnok XML-RPC, ak chcete XML-RPC API pou��va�. URL, ktor� sa pou�ije vo Va�ej aplik�cii sa nezmen� - hne� po in�tal�cii doplnku m��ete API pou��va�.');
@define('AUTHORS_ALLOW_SELECT', 'Povoli� n�v�tevn�kom vybra� viac autorov naraz?');
@define('AUTHORS_ALLOW_SELECT_DESC', 'Ak je t�to vo�ba zapnut�, bude ved�a ka�d�ho autora v tomto doplnku bo�nej li�ty zobrazen� okienko. N�v�tevn�ci m��u za�krtn�� tieto okienka a bude im zobrazen� �l�nky vyhovuj�ce tomuto v�beru.');
@define('PREFERENCE_USE_JS', 'Zapn�� pou��vanie advanced JS?');
@define('PREFERENCE_USE_JS_DESC', 'Ak je zapnut�, bud� pre zlep�enie pou�ite�nosti aktivovan� oblasti s advanced JavaScript. Napr. v oblasti pre konfigur�ciu doplnkov m��ete pre reorganiz�ciu doplnkov pou�i� drag and drop (tiahnu� my�ou).');
@define('PREFERENCE_USE_JS_WARNING', '(T�to str�nka pou��va advanced JavaScripting. Ak m�te probl�my s funk�nos�ou, zak�te pros�m pou��vanie advanced JS vo svojich osobn�ch nastaveniach alebo zak�te javascript vo Va�om prehliada�i.)');
@define('PLUGIN_GROUP_ALL', 'All categories');
@define('PENDING_COMMENT_SUBSCRIPTION', 'Pending confirmation');
@define('NO_COMMENT_SUBSCRIPTION', 'Not subscribed');
@define('NOTIFICATION_CONFIRM_SUBMAIL_FAIL', 'Sorry, the confirmation of your subscription to new comments has failed.');
