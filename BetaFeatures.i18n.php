<?php
/*
 * This file is part of the MediaWiki extension BetaFeatures.
 *
 * BetaFeatures is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 2 of the License, or
 * (at your option) any later version.
 *
 * BetaFeatures is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with BetaFeatures.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @file
 * @ingroup extensions
 */

$messages = array();

/**
 * English
 * @author Mark Holmquist <mtraceur@member.fsf.org>
 */
$messages['en'] = array(
	# Feature field messages
	'mw-ui-feature-discuss'         => 'discussion',
	'mw-ui-feature-info'            => 'information',
	'mw-ui-feature-user-count'      => '{{PLURAL:$1|One user has|$1 users have|0=No users have}} enabled this feature.',

	'mw-ui-feature-requirements-betafeatures' => 'This feature requires the following {{PLURAL:$1|feature|features}} to be enabled:',
	'mw-ui-feature-requirements-browser' => 'The following {{PLURAL:$1|browser is|browsers are}} not supported:',
	'mw-ui-feature-requirements-javascript' => 'This feature requires JavaScript.',
	'mw-ui-feature-requirements-skins' => 'This feature requires you to be using {{PLURAL:$1|the following skin|one of the following skins}}:',

	'prefs-betafeatures' => 'Beta features',
	'betafeatures-desc' => 'Lets user enable or disable features on the wiki that are still not ready for prime-time',
	'betafeatures-toplink' => 'Beta',

	'betafeatures-auto-enroll' => 'Automatically enable all new beta features',
	'betafeatures-section-desc' => 'Here {{PLURAL:$1|is a new feature|are some new features}} we\'re considering for $2. Please try them out and give us your thoughts, so we can improve them based on your feedback.',

	// Test messages
	'betafeatures-test-check-field' => 'blah blah blah', # do not translate or duplicate this message to other languages
	'betafeatures-test-feature-field' => 'This is a test feature - it should not show up.', # do not translate or duplicate this message to other languages

	'betafeatures-tooltip' => 'Introducing Beta Features! This new preferences section lets you test and give feedback about new features before we launch them as default behavior. Try out something new now!',

	'betafeatures-about-betafeatures' => 'About Beta Features',
	'betafeatures-discuss-betafeatures' => 'Leave feedback',
);

/** Message documentation (Message documentation)
 * @author Mark Holmquist <mtraceur@member.fsf.org>
 * @author Raymond
 * @author Shirayuki
 */
$messages['qqq'] = array(
	'mw-ui-feature-discuss' => 'Used as link text for the link which points to discussion of a feature.
{{Identical|Discussion}}',
	'mw-ui-feature-info' => 'Used as link text for the link which points to information about a feature.
{{Identical|Information}}',
	'mw-ui-feature-user-count' => 'Used to show how many users have enabled a particular feature on the site.

Parameters:
* $1 - number of users',
	'mw-ui-feature-requirements-betafeatures' => 'Error message shown when other features are required and not enabled.

Followed by list of features.

Parameters:
* $1 - number of features in list',
	'mw-ui-feature-requirements-browser' => 'Error message shown when the browser is not supported.

Followed by list of browsers.

Parameters:
* $1 - number of browsers in list',
	'mw-ui-feature-requirements-javascript' => 'Error message shown when the feature requires javascript.',
	'mw-ui-feature-requirements-skins' => 'Error message shown when the skin is not supported.

Followed by list of skins.

Parameters:
* $1 - number of skins in list',
	'prefs-betafeatures' => 'Used as section title for beta features in [[Special:Preferences]].
{{Identical|Beta feature}}',
	'betafeatures-desc' => '{{desc|name=Beta Features|url=http://www.mediawiki.org/wiki/Extension:BetaFeatures}}',
	'betafeatures-toplink' => 'Used as link text. The link points to [[Special:Preferences]] but takes the user directly to the "Beta" section.

See example: [[mw:Special:Preferences#mw-prefsection-editing|mw:Special:Preferences]]',
	'betafeatures-auto-enroll' => 'Label for a checkbox that automatically enrolls the user in all the experiments happening on the wiki.

Description for this checkbox is:
* {{msg-mw|Betafeatures-auto-enroll-desc}}',
	'betafeatures-section-desc' => 'Used as description for the checkbox in [[Special:Preferences]].

Followed by the checkbox which has the label {{msg-mw|Betafeatures-auto-enroll}}.

Parameters:
* $1 - number of beta features
* $2 - sitename',
	'betafeatures-test-check-field' => 'Used as label for the checkbox, used to test the extension.

The description for this checkbox is {{msg-mw|Betafeatures-test-feature-field}}.',
	'betafeatures-test-feature-field' => 'Used as description for the checkbox, used to test the extension.

The label for the checkbox is {{msg-mw|Betafeatures-test-check-field}}.',
	'betafeatures-tooltip' => 'A tooltip meant to advertise the existence of the BetaFeatures preferences page the first time a user sees it. Only shown once, meant to be a call to action.',
	'betafeatures-about-betafeatures' => 'Text for a link to a page describing what Beta Features is, what the project is for, etc.',
	'betafeatures-discuss-betafeatures' => 'Text for a link to a page where users can leave feedback about Beta Features.
{{Identical|Leave feedback}}',
);

/** Arabic (العربية)
 * @author مشعل الحربي
 */
$messages['ar'] = array(
	'mw-ui-feature-info' => 'معلومات',
);

/** Asturian (asturianu)
 * @author Xuacu
 */
$messages['ast'] = array(
	'mw-ui-feature-discuss' => 'alderique',
	'mw-ui-feature-info' => 'Información',
	'mw-ui-feature-user-count' => '{{PLURAL:$1|Un usuariu activó|$1 usuarios activaron}} esta carauterística.',
	'prefs-betafeatures' => 'Carauterístiques beta',
	'betafeatures-desc' => "Permite que l'usuariu active o desactive funciones de la wiki qu'inda nun tan pa un usu xeneralizáu",
	'betafeatures-toplink' => 'Beta',
	'betafeatures-auto-enroll' => 'Activar automáticamente toles carauterístiques beta nueves',
	'betafeatures-section-desc' => 'Est{{PLURAL:$1|a ye una carauterística nueva|es son dalgunes carauterístiques nueves}} que tamos considerando pa $2. Por favor. pruebeles y diganos lo que piensa pa que podamos ameyorales basandonos nes sos impresiones.',
	'betafeatures-tooltip' => '¡Presentamos les carauterístiques Beta! Esta nueva seición de les preferencies permite-y probar y comentar les carauterístiques nueves enantes de que les llancemos de mou predetermináu. ¡Pruebe agora daqué nuevo!',
);

/** Bikol Central (Bikol Central)
 * @author Geopoet
 */
$messages['bcl'] = array(
	'mw-ui-feature-discuss' => 'orolayan',
	'mw-ui-feature-info' => 'impormasyon',
	'mw-ui-feature-user-count' => '{{PLURAL:$1|Sarong paragamit|$1 na mga paragamit}} pinagpagana an posturang ini.',
	'mw-ui-feature-requirements-betafeatures' => 'Ining estima minakaipo kan minasunod na {{PLURAL:$1|estima|mga estima}} tanganing pagpaganahon:',
	'mw-ui-feature-requirements-browser' => 'An minasunod na {{PLURAL:$1|pangilyaw|mga pangilyaw}} bakong suportado:',
	'mw-ui-feature-requirements-javascript' => 'Ining estima minakaipo nin JavaScript.',
	'mw-ui-feature-requirements-skins' => 'Ining estima minakaipo saimo na gumamit nin  {{PLURAL:$1|minasunod na kublit|saro kan minasunod na mga kublit}}:',
	'prefs-betafeatures' => 'Mga posturang yaon sa beta',
	'betafeatures-desc' => 'Minatugot sa paragamit na paganahon o pauntukon an mga postura kaining wiki na dae pa man handa para sa premyadong-panahon',
	'betafeatures-toplink' => 'Beta',
	'betafeatures-auto-enroll' => 'Awtomatikong pagpaganahon an gabos na baguhong mga estima nin beta',
	'betafeatures-section-desc' => 'Uya {{PLURAL:$1|an sarong baguhong estima|an nagkapirang baguhon na mga estima}} na samuyang kinokonsidera para sa $2. Tabi man prubari sinda asin itao samuya an saimong mga kaisipan, na tangani baya samuya pang mapakarhay sinda na pinagbase sa saimong balik-simbag.',
	'betafeatures-tooltip' => 'Ipinapabisto an Beta na mga Estima! Ining baguhon na seksyon nin mga kamuyahan minatugot saimo na prubaran asin magtao nin balik-simbag mapanungod sa baguhong mga estima bago mi ipaglansar sinda bilang panugmad na kagawian. Magprubar nin sarong baguhon ngunyan!',
	'betafeatures-about-betafeatures' => 'Mapanungod sa Beta na mga Estima',
	'betafeatures-discuss-betafeatures' => 'Magwalat nin balik-simbag',
);

/** Bengali (বাংলা)
 * @author Aftab1995
 * @author Bellayet
 */
$messages['bn'] = array(
	'mw-ui-feature-discuss' => 'আলোচনা',
	'mw-ui-feature-info' => 'তথ্য',
	'mw-ui-feature-user-count' => '{{PLURAL:$1|একজন ব্যবহারকারী|$1জন ব্যবহারকারী}} এই বৈশিষ্ট্য সক্রিয় করেছেন।',
	'prefs-betafeatures' => 'বেটা বৈশিষ্ট্যসমূহ',
	'betafeatures-desc' => 'ব্যবহারকারীদের এই উইকিতে বৈশিষ্ট্য সক্রিয় বা নিস্ক্রিয় করার ব্যবস্থা করো যা এখনও প্রধান-সময়ের জন্য তৈরি নয়',
	'betafeatures-toplink' => 'বেটা',
	'betafeatures-auto-enroll' => 'স্বয়ংক্রিয়ভাবে সমস্ত নতুন বেটা বৈশিষ্ট্য সক্রিয় হবে',
);

/** Breton (brezhoneg)
 * @author Fohanno
 * @author Y-M D
 */
$messages['br'] = array(
	'mw-ui-feature-discuss' => 'kaozeadenn',
	'mw-ui-feature-info' => 'titouroù',
	'mw-ui-feature-user-count' => "{{PLURAL:$1|Un implijer|$1 implijer}} o deus gweredekaet an arc'hwel-mañ.",
	'prefs-betafeatures' => 'Perzhioù beta',
	'betafeatures-toplink' => 'Beta',
);

/** Catalan (català)
 * @author QuimGil
 */
$messages['ca'] = array(
	'mw-ui-feature-discuss' => 'discussió',
	'mw-ui-feature-info' => 'informació',
	'mw-ui-feature-user-count' => '{{PLURAL:$1|Un usuari ha|$1 usuaris han}} activat aquesta functionalitat.',
	'mw-ui-feature-requirements-betafeatures' => 'Aquesta funcionalitat requereix {{PLURAL:$1|aquesta altra funcionalitat|aquestes altres funcionalitats}} per a ser activada:',
	'mw-ui-feature-requirements-browser' => '{{PLURAL:$1|Aquest navegador|Aquests navegadors}} no estan suportats:',
	'mw-ui-feature-requirements-javascript' => 'Aquesta funcionalitat requereix JavaScript.',
	'mw-ui-feature-requirements-skins' => "Aquesta funcionalitat requereix la utilitzacio d'{{PLURAL:$1|aquesta plantilla|una d'aquestes plantilles}}:",
	'prefs-betafeatures' => 'Funcionalitats beta',
	'betafeatures-desc' => "Permet a l'usuari activar o desactivar funcionalitats en el wiki que encara no són a punt per a una estrena oficial.",
	'betafeatures-toplink' => 'Beta',
	'betafeatures-auto-enroll' => 'Activeu automàticament totes les funcionalitats beta.',
	'betafeatures-section-desc' => 'Aquí teniu {{PLURAL:$1|una nova funcionalitat|noves funcionalitats}} que estem considerant per a $2. Si us plau, proveu-les i compartiu les vostres opinions. Així podrem millorar-les en base als vostres comentaris.',
	'betafeatures-tooltip' => "Us presentem Funcionalitats Beta! Aquesta nova secció a les vostres preferències us permet avaluar noves funcionalitats i compartir els vostres comentaris abans d'activar-les per a tothom.  This new preferences section lets you test and give feedback about new features before we launch them as default behavior. Prova alguna beta!",
);

/** Chechen (нохчийн)
 * @author Умар
 */
$messages['ce'] = array(
	'betafeatures-discuss-betafeatures' => 'Язде хьайна хетарг',
);

/** Czech (čeština)
 * @author Michaelbrabec
 * @author Mormegil
 */
$messages['cs'] = array(
	'mw-ui-feature-discuss' => 'diskuse',
	'mw-ui-feature-info' => 'informace',
	'mw-ui-feature-user-count' => 'Tuto funkci si {{PLURAL:$1|zapnul jeden uživatel|zapnuli $1 uživatelé|zapnulo $1 uživatelů}}.',
	'mw-ui-feature-requirements-betafeatures' => 'Tato funkce vyžaduje k zapnutí následující {{PLURAL:$1|funkci|funkce}}:',
	'mw-ui-feature-requirements-browser' => 'Následující {{PLURAL:$1|prohlížeč|prohlížeče}} nejsou podporovány:',
	'mw-ui-feature-requirements-javascript' => 'Tato funkce vyžaduje JavaScript.',
	'mw-ui-feature-requirements-skins' => 'Tato funkce vyžaduje použití {{PLURAL:$1|následujícího vzhledu|jednoho z následujících vzhledů}}:',
	'prefs-betafeatures' => 'Betaverze',
	'betafeatures-desc' => 'Umožňuje uživatelům zapínat a vypínat nové funkce, které zatím nejsou zcela odladěné',
	'betafeatures-toplink' => 'Beta',
	'betafeatures-auto-enroll' => 'Automaticky zapnout všechny nové funkce betaverze',
	'betafeatures-section-desc' => 'Zde {{PLURAL:$1|je nová funkce, kterou|jsou nové funkce, které}} zvažujeme pro použití na {{grammar:6sg|$2}}. Vyzkoušejte {{PLURAL:$1|ji|je}} a dejte nám vědět, ať {{PLURAL:$1|ji|je}} na základě vašich názorů můžeme vylepšovat.',
	'betafeatures-tooltip' => 'Představujeme funkce z betaverze! Tato nová sekce nastavení vám umožňuje vyzkoušet a okomentovat nové funkce dříve, než je spustíme pro všechny. Vyzkoušejte něco nového!',
	'betafeatures-about-betafeatures' => 'O betaverzi',
	'betafeatures-discuss-betafeatures' => 'Sdělte svůj názor',
);

/** Welsh (Cymraeg)
 * @author Lloffiwr
 */
$messages['cy'] = array(
	'mw-ui-feature-discuss' => 'sgwrs',
	'mw-ui-feature-user-count' => "{{PLURAL:$1|Nid oes unrhyw ddefnyddiwr|Mae $1 defnyddiwr|Mae $1 ddefnyddiwr|Mae $1 defnyddiwr}} wedi galluogi'r nodwedd hon.",
	'prefs-betafeatures' => 'Nodweddion beta',
	'betafeatures-desc' => "Yn galluogi'r defnyddiwr i alluogi nodweddion ar y wici nad ydynt yn barod i'w llwyr fabwysiadu eto, neu i'w hanalluogi.",
	'betafeatures-toplink' => 'Beta',
	'betafeatures-auto-enroll' => 'Galluogi pob nodwedd beta yn awtomatig',
);

/** German (Deutsch)
 * @author Metalhead64
 */
$messages['de'] = array(
	'mw-ui-feature-discuss' => 'Diskussion',
	'mw-ui-feature-info' => 'Information',
	'mw-ui-feature-user-count' => '{{PLURAL:$1|Ein Benutzer hat|$1 Benutzer haben}} diese Funktion aktiviert.',
	'mw-ui-feature-requirements-betafeatures' => 'Diese Funktion erfordert die Aktivierung folgender {{PLURAL:$1|Funktion|Funktionen}}:',
	'mw-ui-feature-requirements-browser' => '{{PLURAL:$1|Der folgende Browser wird|Die folgenden Browser werden}} nicht unterstützt:',
	'mw-ui-feature-requirements-javascript' => 'Diese Funktion benötigt JavaScript.',
	'mw-ui-feature-requirements-skins' => 'Diese Funktion erfordert die Verwendung {{PLURAL:$1|der folgenden Benutzeroberfläche|eine der folgenden Benutzeroberflächen}}:',
	'prefs-betafeatures' => 'Beta-Funktionen',
	'betafeatures-desc' => 'Ermöglicht Benutzern das Aktivieren oder Deaktivieren von Funktionen in diesem Wiki, die sich noch in der Entwicklung befinden',
	'betafeatures-toplink' => 'Beta',
	'betafeatures-auto-enroll' => 'Automatisch alle neuen Beta-Funktionen aktivieren',
	'betafeatures-section-desc' => 'Hier {{PLURAL:$1|ist eine neue Funktion|sind einige neue Funktionen}}, die wir für $2 planen. Bitte probier sie aus und sag uns deine Meinung. So können wir sie, basierend auf deiner Rückmeldung, verbessern.',
	'betafeatures-tooltip' => 'Einführende Betafunktionen! Dieser neue Einstellungsabschnitt ermöglicht dir das Testen und Geben von Rückmeldungen über neue Funktionen, bevor wir sie standardmäßig aktivieren. Probier jetzt einige neue Funktionen aus!',
	'betafeatures-about-betafeatures' => 'Über Betafunktionen',
	'betafeatures-discuss-betafeatures' => 'Eine Rückmeldung hinterlassen',
);

/** Zazaki (Zazaki)
 * @author Gorizon
 */
$messages['diq'] = array(
	'mw-ui-feature-discuss' => 'vaten',
	'prefs-betafeatures' => 'Xaceta beta',
	'betafeatures-toplink' => 'Beta',
);

/** Spanish (español)
 * @author Benfutbol10
 * @author Fitoschido
 * @author Ovruni
 * @author VegaDark
 */
$messages['es'] = array(
	'mw-ui-feature-discuss' => 'discusión',
	'mw-ui-feature-info' => 'información',
	'mw-ui-feature-user-count' => '{{PLURAL:$1|Un usuario ha|$1 usuarios han}} habilitado esta característica.',
	'mw-ui-feature-requirements-betafeatures' => 'Esta funcionalidad requiere {{PLURAL:$1|la siguiente funcionalidad|las siguientes funcionalidades}} para ser activada:',
	'mw-ui-feature-requirements-browser' => '{{PLURAL:$1|El siguiente navegador|Los siguientes navegadores}} no son soportados:',
	'mw-ui-feature-requirements-javascript' => 'Esta funcionalidad requiere JavaScript.',
	'mw-ui-feature-requirements-skins' => 'Esta funcionalidad requiere que utilices {{PLURAL:$1|la siguiente piel|una de las siguientes pieles}}:',
	'prefs-betafeatures' => 'Características de prueba',
	'betafeatures-desc' => 'Permite al usuario activar o desactivar funciones del wiki que todavía no están listas',
	'betafeatures-toplink' => 'Beta',
	'betafeatures-auto-enroll' => 'Activar automáticamente todas las nuevas funcionalidades de prueba',
	'betafeatures-section-desc' => 'Aquí se {{PLURAL:$1|encuentra una nueva funcionalidad|encuentran algunas nuevas funcionalidades}} que estamos considerando para $2. Por favor, {{PLURAL:$1|pruébala|pruébalas}} y dinos lo que piensas acerca de {{PLURAL:$1|ella|ellas}}, así podemos {{PLURAL:$1|mejorarla|mejorarlas}} de acuerdo a tus comentarios.',
	'betafeatures-tooltip' => '¡Introduciendo las funcionalidades de prueba! Esta nueva sección de tus preferencias te permite probar y comentar acerca de las nuevas funcionalidades antes de que las implementemos por defecto.',
	'betafeatures-about-betafeatures' => 'Acerca de las funcionalidades de prueba',
	'betafeatures-discuss-betafeatures' => 'Dejar comentarios',
);

/** Persian (فارسی)
 * @author Ebraminio
 * @author Reza1615
 * @author درفش کاویانی
 */
$messages['fa'] = array(
	'mw-ui-feature-discuss' => 'بحث',
	'mw-ui-feature-info' => 'اطلاعات',
	'mw-ui-feature-user-count' => '{{PLURAL:$1|یک کاربر| $1  کاربر}} این ویژگی را فعال کرد.',
	'mw-ui-feature-requirements-betafeatures' => 'این قابلیت نیازمند این {{PLURAL:$1|قابلیت|قابلیت‌ها}} است که باید فعال شوند:',
	'mw-ui-feature-requirements-browser' => 'این {{PLURAL:$1|مرورگر|مرورگرها}} حمایت نشده‌است:',
	'mw-ui-feature-requirements-javascript' => 'این ویژگی نیازمند جاوااسکریپ است.',
	'prefs-betafeatures' => 'ویژگی‌های آزمایشی',
	'betafeatures-desc' => 'به کاربر اجازه می‌دهد تا ویژگی‌های جدیدی که هنوز به صورت آزمایشی هستند را فعال یا غیرفعال کند.',
	'betafeatures-toplink' => 'آزمایشی',
	'betafeatures-auto-enroll' => 'فعال‌کردن خودکار کلیهٔ ویژگی‌های جدید آزمایشی',
	'betafeatures-section-desc' => 'اینجا  {{PLURAL:$1|ویژگی جدیدی موجود است |ویژگی‌های جدید موجودند}} که برای  $2  در نظر گرفته شده‌اند. لطفاً آنها را امتحان کنید و بازخوردتان را ارسال کنید تا ما بر اساس بازخوردهای شما آنها را بهبود دهیم.',
	'betafeatures-tooltip' => 'معرفی ویژگی‌های آزمایشی! این بخش جدید تنظیمات به شما اجازه می دهد تا امتحان کنید و نظرات‌تان در مورد ویژگی‌های جدید را قبل از اینکه ما آن‌ها را به‌صورت پیش‌فرض راه‌اندازی کنیم ارائه دهید. الان یک مورد جدید را امتحان کنید!',
	'betafeatures-about-betafeatures' => 'دربارهٔ ویژگی‌های آزمایشی',
	'betafeatures-discuss-betafeatures' => 'افزودن بازخورد',
);

/** Finnish (suomi)
 * @author Stryn
 */
$messages['fi'] = array(
	'mw-ui-feature-discuss' => 'keskustelu',
	'mw-ui-feature-info' => 'tietoa',
	'mw-ui-feature-user-count' => '{{PLURAL:$1|Yksi käyttäjä on|$1 käyttäjää ovat}} ottaneet tämän ominaisuuden käyttöön.',
	'mw-ui-feature-requirements-betafeatures' => 'Tämä ominaisuus vaatii {{PLURAL:$1|seuraavaa ominaisuutta|seuraavia ominaisuuksia}} käyttöönotettavaksi:',
	'mw-ui-feature-requirements-browser' => '{{PLURAL:$1|Seuraava selain ei ole tuettu|Seuraavat selaimet eivät ole tuettuja}}:',
	'mw-ui-feature-requirements-javascript' => 'Tämä ominaisuus vaatii JavaScriptin olevan käytössä.',
	'mw-ui-feature-requirements-skins' => 'Tämä ominaisuus vaatii sinua käyttämään {{PLURAL:$1|seuraavaa ulkoasua|yhtä seuraavista ulkoasuista}}:',
	'prefs-betafeatures' => 'Beeta-ominaisuudet',
	'betafeatures-desc' => 'Antaa käyttäjän ottaa käyttöön tai poistaa käytöstä ominaisuuksia wikissä, jotka ovat eivät ole vielä valmiita kaikkien käytettäväksi',
	'betafeatures-toplink' => 'Beeta',
	'betafeatures-auto-enroll' => 'Ota automaattisesti käyttöön kaikki uudet beeta-ominaisuudet',
	'betafeatures-section-desc' => 'Tässä {{PLURAL:$1|on uusi ominaisuus, jota|on joitakin uusia ominaisuuksia, joita}} harkitsemme sivustolle $2. Kokeile niitä ja kerro meille mielipiteesi, jotta voimme parantaa niitä palautteesi perusteella.',
	'betafeatures-tooltip' => 'Esittelyssä Beeta-ominaisuudet! Tämä uusi asetukset-osio antaa sinun kokeilla ja antaa palautetta uusista ominaisuuksista, ennen kuin julkaisemme ne oletuksena. Kokeile jotain uutta nyt!',
	'betafeatures-about-betafeatures' => 'Tietoa Beeta-ominaisuuksista',
	'betafeatures-discuss-betafeatures' => 'Jätä palautetta',
);

/** Faroese (føroyskt)
 * @author EileenSanda
 */
$messages['fo'] = array(
	'betafeatures-desc' => 'Loyvir brúkara at gera funksjónir, sum enn ikki eru heilt klárar, virknar ella óvirknar á wikiini.',
	'betafeatures-toplink' => 'Beta',
);

/** French (français)
 * @author Gomoko
 * @author Jean-Frédéric
 * @author Sherbrooke
 */
$messages['fr'] = array(
	'mw-ui-feature-discuss' => 'discussion',
	'mw-ui-feature-info' => 'information',
	'mw-ui-feature-user-count' => '{{PLURAL:$1|Un utilisateur a|$1 utilisateurs ont}} activé cette fonctionnalité.',
	'mw-ui-feature-requirements-betafeatures' => 'Cette fonctionnalité nécessite que {{PLURAL:$1|la fonctionnalité suivante soit activée|les fonctionnalités suivantes soient activées}} :',
	'mw-ui-feature-requirements-browser' => '{{PLURAL:$1|Le navigateur suivant n’est pas supporté|Les navigateurs suivants ne sont pas supportés}} :',
	'mw-ui-feature-requirements-javascript' => 'Cette fonctionnalité nécessite JavaScript.',
	'mw-ui-feature-requirements-skins' => 'Cette fonctionnalité nécessite que vous utilisiez {{PLURAL:$1|l’habillage suivant|un des habillages suivants}} :',
	'prefs-betafeatures' => 'Fonctionnalités bêta',
	'betafeatures-desc' => 'Laisse l’utilisateur activer ou désactiver les fonctionnalités sur ce wiki qui ne sont pas encore prêtes pour être généralisées',
	'betafeatures-toplink' => 'Bêta',
	'betafeatures-auto-enroll' => 'Activer automatiquement toutes les nouvelles fonctionnalités en bêta',
	'betafeatures-section-desc' => 'Voici {{PLURAL:$1|une nouvelle fonctionnalité|de nouvelles fonctionnalités}} que nous envisageons pour $2. Veuillez les essayer et nous donner votre sentiment dessus, afin que nous puissions les améliorer d’après votre retour.',
	'betafeatures-tooltip' => 'Voici les fonctionnalités en beta ! Cette nouvelle section des préférences vous laisse tester et donner votre ressenti sur les nouvelles fonctionnalités avant que nous les lancions par défaut. Essayez dès à présent quelque chose de nouveau !',
	'betafeatures-about-betafeatures' => 'À propos des fonctionnalités en bêta',
	'betafeatures-discuss-betafeatures' => 'Laisser un avis',
);

/** Galician (galego)
 * @author Toliño
 */
$messages['gl'] = array(
	'mw-ui-feature-discuss' => 'conversa',
	'mw-ui-feature-info' => 'información',
	'mw-ui-feature-user-count' => '{{PLURAL:$1|Un usuario ten|$1 usuarios teñen}} activada esta característica.',
	'mw-ui-feature-requirements-betafeatures' => 'Esta característica necesita a activación {{PLURAL:$1|da seguinte característica|das seguintes características}}:',
	'mw-ui-feature-requirements-browser' => '{{PLURAL:$1|O seguinte navegador non está soportado|Os seguintes navegadores non están soportados}}:',
	'mw-ui-feature-requirements-javascript' => 'Esta característica necesita JavaScript.',
	'mw-ui-feature-requirements-skins' => 'Esta característica necesita o uso {{PLURAL:$1|a seguinte aparencia|unha das seguintes aparencias}}:',
	'prefs-betafeatures' => 'Características en probas',
	'betafeatures-desc' => 'Permite que o usuario active ou desactive as características do wiki que aínda non están listas para o seu uso xeneralizado',
	'betafeatures-toplink' => 'Beta',
	'betafeatures-auto-enroll' => 'Activar automaticamente todas as novas características en probas',
	'betafeatures-section-desc' => 'Aquí hai {{PLURAL:$1|unha característica nova|algunhas características novas}} que estamos considerando para $2. {{PLURAL:$1|Próbea|Próbeas}} e achéguenos a súa opinión, para que poidamos {{PLURAL:$1|mellorala|melloralas}}.',
	'betafeatures-tooltip' => 'Velaquí están as características en probas! Esta nova sección das preferencias permítelle probar e achegar comentarios sobre as novas características antes de que as lancemos para todos. Probe algo novo agora!',
	'betafeatures-about-betafeatures' => 'Acerca das características en probas',
	'betafeatures-discuss-betafeatures' => 'Deixe un comentario',
);

/** Hebrew (עברית)
 * @author Ademo
 */
$messages['he'] = array(
	'betafeatures-toplink' => 'מאפייני בטא', # Fuzzy
);

/** Hungarian (magyar)
 * @author Misibacsi
 */
$messages['hu'] = array(
	'betafeatures-toplink' => 'Béta funkciók', # Fuzzy
);

/** Interlingua (interlingua)
 * @author McDutchie
 */
$messages['ia'] = array(
	'mw-ui-feature-discuss' => 'discussion',
	'mw-ui-feature-info' => 'information',
	'mw-ui-feature-user-count' => '{{PLURAL:$1|Un usator|$1 usatores}} ha activate iste function.',
	'mw-ui-feature-requirements-betafeatures' => 'Iste function necessita activar le sequente {{PLURAL:$1|function|functiones}}:',
	'mw-ui-feature-requirements-browser' => 'Le sequente {{PLURAL:$1|navigator|navigatores}} non es supportate:',
	'mw-ui-feature-requirements-javascript' => 'Iste function require JavaScript.',
	'mw-ui-feature-requirements-skins' => 'Iste function necessita usar {{PLURAL:$1|le sequente apparentia|un del sequente apparentias}}:',
	'prefs-betafeatures' => 'Functionalitate beta',
	'betafeatures-desc' => 'Permitte que le usator activa o disactiva functionalitate in le wiki que non ha ancora essite perfectionate',
	'betafeatures-toplink' => 'Beta',
	'betafeatures-auto-enroll' => 'Activar automaticamente tote le nove functionalitate beta',
	'betafeatures-section-desc' => 'Ecce {{PLURAL:$1|un function nove|alcun functionalitate nove}} que nos considera pro $2. Per favor essaya lo e dice nos tu opinion, de sorta que nos pote meliorar lo.',
	'betafeatures-tooltip' => 'Nos presenta le functionalitate beta! Iste nove section de preferentias permitte testar e evalutar nove functiones ante lor activation pro omnes. Essaya ora qualcosa nove!',
	'betafeatures-about-betafeatures' => 'A proposito del functionalitate beta',
	'betafeatures-discuss-betafeatures' => 'Lassar evalutation',
);

/** Italian (italiano)
 * @author Beta16
 * @author Davio
 * @author Gianfranco
 */
$messages['it'] = array(
	'mw-ui-feature-discuss' => 'discussione',
	'mw-ui-feature-info' => 'informazioni',
	'mw-ui-feature-user-count' => '{{PLURAL:$1|Un utente ha|$1 utenti hanno}} abilitato questa funzione.',
	'mw-ui-feature-requirements-betafeatures' => 'Questa funzionalità richiede che {{PLURAL:$1|sia abilitata la seguente|siano abilitate le seguenti}} funzionalità:',
	'mw-ui-feature-requirements-browser' => '{{PLURAL:$1|Il seguente browser non è supportato|I seguenti browser non sono supportati}}:',
	'mw-ui-feature-requirements-javascript' => 'Questa funzionalità richiede JavaScript.',
	'mw-ui-feature-requirements-skins' => 'Questa funzionalità richiede {{PLURAL:$1|la seguente skin|una delle seguenti skin}}:',
	'prefs-betafeatures' => 'Funzionalità beta',
	'betafeatures-desc' => "Consente all'utente di attivare o disattivare sul wiki funzioni che non sono ancora pronte per il grande pubblico",
	'betafeatures-toplink' => 'Beta',
	'betafeatures-auto-enroll' => 'Attiva automaticamente tutte le nuove funzioni beta',
	'betafeatures-section-desc' => '{{PLURAL:$1|Questa è una nuova funzionalità|Queste sono nuove funzionalità}} che stiamo prendendo in considerazione per $2. Puoi provarle e dirci cosa ne pensi, così che possiamo migliorare in base alle vostre risposte.',
	'betafeatures-about-betafeatures' => 'Sulle funzionalità Beta',
	'betafeatures-discuss-betafeatures' => 'Lascia un commento',
);

/** Japanese (日本語)
 * @author Shirayuki
 */
$messages['ja'] = array(
	'mw-ui-feature-discuss' => '議論',
	'mw-ui-feature-info' => '情報',
	'mw-ui-feature-user-count' => '{{PLURAL:$1|$1 人の利用者}}がこの機能を有効にしています。',
	'mw-ui-feature-requirements-betafeatures' => 'この機能を使用するには、以下の{{PLURAL:$1|機能}}を有効にする必要があります:',
	'mw-ui-feature-requirements-browser' => '以下の{{PLURAL:$1|ブラウザー}}には対応していません:',
	'mw-ui-feature-requirements-javascript' => 'この機能の使用には JavaScript が必要です。',
	'mw-ui-feature-requirements-skins' => 'この機能には{{PLURAL:$1|以下の外装|以下の外装のいずれか}}の使用が必須です:',
	'prefs-betafeatures' => 'ベータ版機能',
	'betafeatures-desc' => '本番環境のウィキで使用する準備がまだできていない機能について、利用者が有効化/無効化できるようにする',
	'betafeatures-toplink' => 'ベータ版',
	'betafeatures-auto-enroll' => 'すべてのベータ版機能を自動的に有効にする',
	'betafeatures-section-desc' => '$2で検討している{{PLURAL:$1|新しい機能}}があります。試用していただいてご意見をお寄せください。そのフィードバックに基づいて機能を改善します。',
	'betafeatures-about-betafeatures' => 'ベータ版の機能について',
	'betafeatures-discuss-betafeatures' => 'フィードバックを送信',
);

/** Kazakh (Cyrillic script) (қазақша (кирил)‎)
 * @author Arystanbek
 */
$messages['kk-cyrl'] = array(
	'betafeatures-toplink' => 'Beta мүмкіндік', # Fuzzy
);

/** Korean (한국어)
 * @author AlexPark
 * @author Hym411
 * @author Kwj2772
 * @author 아라
 */
$messages['ko'] = array(
	'mw-ui-feature-discuss' => '토론',
	'mw-ui-feature-info' => '정보',
	'mw-ui-feature-user-count' => '{{PLURAL:$1|사용자 한 명|사용자 $1명}}이 이 기능을 활성화했습니다.',
	'prefs-betafeatures' => '베타 기능',
	'betafeatures-desc' => '사용자가 아직 준비가 되지 않은 위키에서 기능을 활성화하거나 비활성화할 수 있습니다',
	'betafeatures-toplink' => '베타',
	'betafeatures-auto-enroll' => '자동으로 새 베타 기능을 모두 활성화',
	'betafeatures-section-desc' => '$2를 고려하고 있는 {{PLURAL:$1|새로운 기능|새로운 기능들}}이 있습니다. 사용해 보시고, 의견을 남겨 주시면, 의견을 바탕으로 발전시켜 나가겠습니다.',
	'betafeatures-tooltip' => '베타 기능을 소개합니다! 이 새로운 환경 설정을 사용하여 저희가 기본 설정으로 설정하기 전에 새로운 기능에 대한 의견을 들을 수 있습니다! 새 기능을 시도해 보세요!',
);

/** Latin (Latina)
 * @author Autokrator
 * @author UV
 */
$messages['la'] = array(
	'mw-ui-feature-discuss' => 'discussio',
	'mw-ui-feature-user-count' => '{{PLURAL:$1|Unus usor hac facultate utitur.|$1 usores hac facultate utuntur.}}',
	'prefs-betafeatures' => 'Facultates experimentales',
	'betafeatures-toplink' => 'Facultates experimentales', # Fuzzy
	'betafeatures-auto-enroll' => 'Automatice omnibus facultatibus experimentalibus utere', # Fuzzy
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Robby
 * @author Soued031
 */
$messages['lb'] = array(
	'mw-ui-feature-discuss' => 'Diskussioun',
	'mw-ui-feature-info' => 'Informatioun',
	'mw-ui-feature-user-count' => '{{PLURAL:$1|Ee Benotzer huet|$1 Benotzer hunn}} dës Funktioun aktivéiert.',
	'mw-ui-feature-requirements-javascript' => 'Dës Funktioun brauch JavaScript',
	'prefs-betafeatures' => 'Beta-Funktiounen',
	'betafeatures-desc' => 'Léisst Benotzer Funktiounen op der Wiki aktivéieren oder desaktivéieren déi nach net fäerdeg entwéckelt sinn',
	'betafeatures-toplink' => 'Beta',
	'betafeatures-auto-enroll' => 'Automatesch all Beta-Funktiounen aschalten',
	'betafeatures-section-desc' => 'Hei {{PLURAL:$1|ass eng nei Funktioun|sinn e puer nei Funktiounen}} déi mir fir $2 proposéieren. Probéiert se w.e.g. aus an deelt eis Är Iwwerleeungen dozou mat, da kënne mir se op der Basis vun Ärem Feedback verbesseren.',
	'betafeatures-about-betafeatures' => 'Iwwer Betafunktiounen',
	'betafeatures-discuss-betafeatures' => 'Feedback ginn',
);

/** Lithuanian (lietuvių)
 * @author Eitvys200
 */
$messages['lt'] = array(
	'betafeatures-toplink' => 'Beta Funkcijos', # Fuzzy
);

/** Macedonian (македонски)
 * @author Bjankuloski06
 */
$messages['mk'] = array(
	'mw-ui-feature-discuss' => 'разговор',
	'mw-ui-feature-info' => 'информации',
	'mw-ui-feature-user-count' => 'Функцијата ја {{PLURAL:$1|има вклученоо еден корисник|имаат вклучено $1 корисници}}.',
	'mw-ui-feature-requirements-betafeatures' => 'Оваа функција бара да {{PLURAL:$1|е вклучена следнава функција|се вклучени следниве функции}}:',
	'mw-ui-feature-requirements-browser' => '{{PLURAL:$1|Не е поддржан следниов прелистувач|Не се поддржани следниве прелистувачи}}:',
	'mw-ui-feature-requirements-javascript' => 'Оваа функција бара JavaScript.',
	'mw-ui-feature-requirements-skins' => 'Оваа функција бара да {{PLURAL:$1|го користите следново руво|користите едно од следниве рува}}:',
	'prefs-betafeatures' => 'Бета-можности',
	'betafeatures-desc' => 'Овозможува корисникот да вклучува и исклучува можности што сè уште не се воведени како стандардни',
	'betafeatures-toplink' => 'Бета',
	'betafeatures-auto-enroll' => 'Автоматски вклучувај ги сите бета-можности',
	'betafeatures-section-desc' => 'Еве {{PLURAL:$1|една нова функција што ја планираме|некои нови функции што ги планираме}} за $2. Испробајте ги и кажете ни што мислите, за да можеме да ги подобриме во склад со вашите наоѓања.',
	'betafeatures-tooltip' => 'Ви ги претставуваме новите Бета-функции! Овој нов дел со нагодувања ви овозможува да ги испробувате новите функции и да ни давате ваше мислење пред да ги пуштиме како стандардни. Пробајте некоја нова функција сега!',
	'betafeatures-about-betafeatures' => 'За бета-функциите',
	'betafeatures-discuss-betafeatures' => 'Дајте мислење',
);

/** Malayalam (മലയാളം)
 * @author Praveenp
 */
$messages['ml'] = array(
	'betafeatures-toplink' => 'പരീക്ഷണാടിസ്ഥാനത്തിലുള്ള (ബീറ്റ) സൗകര്യങ്ങൾ', # Fuzzy
);

/** Marathi (मराठी)
 * @author V.narsikar
 */
$messages['mr'] = array(
	'betafeatures-desc' => 'सदस्यास,या विकिवर कोणतेही फिचर्स जे अद्याप पूर्ण सुविधांसह परिपूर्ण नाहीत,सक्षम किंवा अक्षम करू देते',
	'betafeatures-toplink' => 'बीटा तोंडवळा', # Fuzzy
);

/** Dutch (Nederlands)
 * @author Flightmare
 * @author Siebrand
 * @author TBloemink
 */
$messages['nl'] = array(
	'mw-ui-feature-discuss' => 'overleg',
	'mw-ui-feature-info' => 'informatie',
	'mw-ui-feature-user-count' => '{{PLURAL:$1|Eén gebruiker heeft|$1 gebruikers hebben}} deze functie ingeschakeld.',
	'mw-ui-feature-requirements-betafeatures' => 'Deze functie vereist dat de volgende {{PLURAL:$1|functie wordt|functies worden}} ingeschakeld:',
	'mw-ui-feature-requirements-browser' => 'De volgende {{PLURAL:$1|browser wordt|browsers worden}} niet ondersteund:',
	'mw-ui-feature-requirements-javascript' => 'Deze functie vereist JavaScript.',
	'mw-ui-feature-requirements-skins' => 'Deze functie vereist {{PLURAL:$1|de volgende skin|een van de volgende skins}}:',
	'prefs-betafeatures' => 'Betafuncties',
	'betafeatures-desc' => 'Laat de gebruiker functies die in ontwikkeling zijn in- of uitschakelen',
	'betafeatures-toplink' => 'Beta',
	'betafeatures-auto-enroll' => 'Automatisch alle betafuncties inschakelen',
	'betafeatures-section-desc' => 'Hier {{PLURAL:$1|is een nieuwe functie|zijn een paar nieuwe functies}} die we overwegen voor $2. Probeert deze uit en laat ons weten wat u ervan vindt, zodat wij ze kunnen verbeteren.',
	'betafeatures-discuss-betafeatures' => 'Terugkoppeling achterlaten',
);

/** Occitan (occitan)
 * @author Cedric31
 */
$messages['oc'] = array(
	'mw-ui-feature-discuss' => 'discussion',
	'prefs-betafeatures' => 'Foncionalitats bèta',
	'betafeatures-desc' => 'Daissa l’utilizaire activar o desactivar las foncionalitats sus aqueste wiki que son pas encara prèstas per èsser generalizadas',
	'betafeatures-toplink' => 'Bèta',
);

/** Polish (polski)
 * @author Chrumps
 * @author Matma Rex
 * @author Woytecr
 */
$messages['pl'] = array(
	'mw-ui-feature-discuss' => 'dyskusja',
	'mw-ui-feature-info' => 'informacje',
	'mw-ui-feature-user-count' => '{{PLURAL:$1|Jeden użytkownik włączył|$1 użytkowników włączyło}} tę funkcję.',
	'mw-ui-feature-requirements-betafeatures' => 'Ta funkcja wymaga włączenia najpierw {{PLURAL:$1|następującej|następujących}}:',
	'mw-ui-feature-requirements-browser' => '{{PLURAL:$1|Nieobsługiwana przeglądarka|Nieobsługiwane przeglądarki}}:',
	'mw-ui-feature-requirements-javascript' => 'Ta funkcja wymaga włączonej obsługi JavaScriptu.',
	'mw-ui-feature-requirements-skins' => 'Ta funkcja działa tylko z {{PLURAL:$1|następującą skórką|następującymi skórkami}}:',
	'prefs-betafeatures' => 'Funkcje eksperymentalne',
	'betafeatures-desc' => 'Pozwala użytkownikom włączać lub wyłączać funkcje, które nie są jeszcze w pełni dopracowane',
	'betafeatures-toplink' => 'Funkcje eksperymentalne',
	'betafeatures-auto-enroll' => 'Automatycznie włączaj nowe funkcje eksperymentalne',
	'betafeatures-section-desc' => 'Masz możliwość przetestowania {{PLURAL:$1|nowej, eksperymentalnych funkcji|nowych, eksperymentalnych funkcji}} przygotowanych dla {{GRAMMAR:D.lp|$2}}. Prosimy o ich wypróbowanie i przekazanie nam swoich refleksji, abyśmy mogli je ulepszyć bazując na Twoich komentarzach.',
	'betafeatures-tooltip' => 'Sekcja funkcji eksperymentalnych umożliwia Ci testowanie i wyrażanie opinii na temat nowych funkcji, zanim uruchomimy je jako domyślne zachowanie. Wypróbuj coś nowego!',
	'betafeatures-about-betafeatures' => 'O funkcjach eksperymentalnych',
	'betafeatures-discuss-betafeatures' => 'Skomentuj',
);

/** Brazilian Portuguese (português do Brasil)
 * @author Cainamarques
 * @author Fúlvio
 */
$messages['pt-br'] = array(
	'mw-ui-feature-discuss' => 'discussão',
	'mw-ui-feature-user-count' => '{{PLURAL:$1|Um usuário ativou|$1 usuários ativaram}} este recurso.',
	'prefs-betafeatures' => 'Recursos beta',
	'betafeatures-desc' => 'Permite ao usuário ativar ou desativar funções da wiki que ainda não estão prontas para serem ativamente usadas',
	'betafeatures-toplink' => 'Funções em Beta', # Fuzzy
);

/** tarandíne (tarandíne)
 * @author Joetaras
 */
$messages['roa-tara'] = array(
	'mw-ui-feature-discuss' => "'ngazzamende",
	'mw-ui-feature-user-count' => "{{PLURAL:$1|'Nu utende ave|$1 utinde onne}} abbilitate sta funzione.",
	'prefs-betafeatures' => 'Funziune de Beta',
	'betafeatures-desc' => "Lasse l'utende a abbilità o disabbilità le funziune sus 'a ucchi ca non ge so angore pronde pa prima vote",
	'betafeatures-toplink' => 'Beta',
	'betafeatures-auto-enroll' => 'Automaticamende abbilite tutte le funziune beta nove',
	'betafeatures-section-desc' => "Aqquà {{PLURAL:$1|ste 'na funziona nove|stonne cchiù funziune nove}} ca ste considerame pe $2. Pe piacere pruèvale e danne 'na parere, accussì nuje putime migliorà basannene sus 'a segnalaziona toje.",
);

/** Russian (русский)
 * @author Lord Dimetr
 * @author Okras
 */
$messages['ru'] = array(
	'mw-ui-feature-discuss' => 'обсуждение',
	'mw-ui-feature-info' => 'информация',
	'mw-ui-feature-user-count' => '$1 {{PLURAL:$1|пользователь включил|пользователя включили|пользователей включили}} эту функцию.',
	'mw-ui-feature-requirements-betafeatures' => 'Эта функция требует, чтоб {{PLURAL:$1|была включена следующая функция|были включены следующие функции}}:',
	'mw-ui-feature-requirements-browser' => '{{PLURAL:$1|Следующий браузер не поддерживается|Следующие браузеры не поддерживаются}}:',
	'mw-ui-feature-requirements-javascript' => 'Эта функция требует JavaScript.',
	'mw-ui-feature-requirements-skins' => 'Эта функция требует, чтоб у вас {{PLURAL:$1|была включена следующая тема|были включены следующие темы}}:',
	'prefs-betafeatures' => 'Бета-функции',
	'betafeatures-desc' => 'Позволяет пользователю включить или отключить функции, которые еще не готовы к прайм-тайм',
	'betafeatures-toplink' => 'Бета-версия',
	'betafeatures-auto-enroll' => 'Автоматически включать все новые бета-функции',
	'betafeatures-section-desc' => '{{PLURAL:$1|Появилась новая функция, которую|Появилось несколько новых функций, которые}} мы продумываем для $2. Пожалуйста, попробуйте {{PLURAL:$1|её|их}} и выскажите нам свои мысли, чтобы мы могли улучшить эти нововведения, основываясь на ваших отзывах.',
	'betafeatures-tooltip' => 'Представляем бета-функции! Этот новый раздел настроек позволит вам протестировать и оставить отзывы о новых возможностях до того, как мы их запустим для всех по умолчанию. Попробуйте что-то новое уже сейчас!',
	'betafeatures-about-betafeatures' => 'О бета-функциях',
	'betafeatures-discuss-betafeatures' => 'Оставить отзыв',
);

/** Slovenian (slovenščina)
 * @author Dbc334
 * @author Eleassar
 */
$messages['sl'] = array(
	'mw-ui-feature-discuss' => 'razprava',
	'mw-ui-feature-user-count' => '$1 {{PLURAL:$1|uporabnik|uporabnika|uporabniki|uporabnikov}} je omogočilo to funkcijo.',
	'prefs-betafeatures' => 'Preizkusne funkcije',
	'betafeatures-desc' => 'Dovoljuje uporabniku omogočiti ali onemogočiti funkcije na wikiju, ki še niso pripravljene za redno uporabo',
	'betafeatures-toplink' => 'Beta',
	'betafeatures-auto-enroll' => 'Samodejno omogoči vse betamožnosti',
	'betafeatures-section-desc' => 'Tu {{PLURAL:$1|je nova možnost|je nekaj novih možnosti}}, o katerih razmišljamo v zvezi z $2. Prosimo, preizkusite jih in nam sporočite svoje mnenje, tako da jih bomo lahko na podlagi vaših povratnih informacij izboljšali.',
);

/** Swedish (svenska)
 * @author Ainali
 * @author Skalman
 * @author WikiPhoenix
 */
$messages['sv'] = array(
	'mw-ui-feature-discuss' => 'diskussion',
	'mw-ui-feature-info' => 'information',
	'mw-ui-feature-user-count' => '{{PLURAL:$1|En|$1}} användare har aktiverat denna funktion.',
	'mw-ui-feature-requirements-javascript' => 'Denna funktion kräver JavaScript.',
	'prefs-betafeatures' => 'Betafunktioner',
	'betafeatures-desc' => 'Låter användare aktivera eller inaktivera funktioner på wikin som fortfarande inte är helt färdiga',
	'betafeatures-toplink' => 'Beta',
	'betafeatures-auto-enroll' => 'Aktivera automatiskt alla nya betafunktioner',
	'betafeatures-section-desc' => 'Här finns {{PLURAL:$1|en ny funktion|några nya funktioner}} som vi funderar på att inkludera i $2. Var god prova ut dem och ge oss dina åsikter så vi kan förbättra dem utifrån din feedback.',
	'betafeatures-about-betafeatures' => 'Om betafunktioner',
	'betafeatures-discuss-betafeatures' => 'Lämna feedback',
);

/** Ukrainian (українська)
 * @author Andriykopanytsia
 * @author Ата
 */
$messages['uk'] = array(
	'mw-ui-feature-discuss' => 'обговорення',
	'mw-ui-feature-info' => 'інформація',
	'mw-ui-feature-user-count' => '{{PLURAL:$1|Один користувач вже увімкнув|$1 користувачі вже увімкнули|$1 користувачів вже увімкнули}} цю функцію.',
	'mw-ui-feature-requirements-betafeatures' => 'Ця функція вимагає, щоб {{PLURAL:$1|була включена наступна функція|були включені наступні функції}}:',
	'mw-ui-feature-requirements-browser' => '{{PLURAL:$1| Наступний веб-переглядач не підтримується|Наступні веб-переглядачі не підтримуються}}:',
	'mw-ui-feature-requirements-javascript' => 'Ця функція вимагає JavaScript.',
	'mw-ui-feature-requirements-skins' => 'Ця функція вимагає, щоб у вас {{PLURAL:$1|була включена наступна тема|були включені наступні теми}}:',
	'prefs-betafeatures' => 'Бета-функції',
	'betafeatures-desc' => 'Дозволяє користувачу вмикати чи вимикати функції вікі, все ще не готові до прайм-тайму',
	'betafeatures-toplink' => 'Бета',
	'betafeatures-auto-enroll' => 'Автоматично увімкнути усі бета-функції',
	'betafeatures-section-desc' => 'Тут  {{PLURAL:$1|є нова функція, яку|деякі нові функції, які}} ми розробляємо для  $2. Спробуйте їх і дайте нам свої думки, щоб ми могли покращити їх, виходячи з ваших відгуків.',
	'betafeatures-tooltip' => 'Представляємо бета-функції! Цей новий розділ налаштувань дозволяє тестувати і надсилати відгуки про нові можливості, перш ніж ми запустимо їх як типову поведінку у основній Медіавікі. Спробувати щось нове зараз!',
	'betafeatures-about-betafeatures' => 'Про бета-функції',
	'betafeatures-discuss-betafeatures' => 'Залишити відгук',
);

/** Wu (吴语)
 * @author Benojan
 * @author 十弌
 */
$messages['wuu'] = array(
	'betafeatures-toplink' => '試驗版',
);

/** Simplified Chinese (中文（简体）‎)
 * @author Fantasticfears
 * @author Liuxinyu970226
 * @author Qiyue2001
 */
$messages['zh-hans'] = array(
	'mw-ui-feature-discuss' => '讨论',
	'mw-ui-feature-info' => '信息',
	'mw-ui-feature-user-count' => '有$1个用户启用此功能。',
	'prefs-betafeatures' => '测试特性',
	'betafeatures-desc' => '允许用户启用或禁用wiki上仍在测试的功能',
	'betafeatures-toplink' => '测试特性',
	'betafeatures-auto-enroll' => '自动使用全部新近测试功能',
);

/** Traditional Chinese (中文（繁體）‎)
 * @author Openerror
 * @author StephDC
 */
$messages['zh-hant'] = array(
	'mw-ui-feature-discuss' => '討論',
	'prefs-betafeatures' => '測試中的功能 (Beta)',
	'betafeatures-desc' => '允許使用者啟用或禁用 wiki 上 仍需要完善、除錯的功能',
	'betafeatures-toplink' => '測試版',
	'betafeatures-auto-enroll' => '自動啟用所有新的測試版功能',
);
