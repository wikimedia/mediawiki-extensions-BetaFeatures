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
	'mw-ui-feature-requirements-skins' => 'This feature only works with {{PLURAL:$1|the following skin|the following skins}}:',

	'prefs-betafeatures' => 'Beta features',
	'betafeatures-desc' => 'Lets user enable or disable features on the wiki that are still not ready for prime-time',
	'betafeatures-toplink' => 'Beta',

	'betafeatures-auto-enroll' => 'Automatically enable all new beta features',
	'betafeatures-section-desc' => 'Here {{PLURAL:$1|is a new feature|are some new features}} we\'re considering for $2. Please try {{PLURAL:$1|it|them}} out and give us your thoughts, so we can improve {{PLURAL:$1|it|them}} based on your feedback.',

	// Test messages
	'betafeatures-test-check-field' => 'blah blah blah', # do not translate or duplicate this message to other languages
	'betafeatures-test-feature-field' => 'This is a test feature - it should not show up.', # do not translate or duplicate this message to other languages

	'betafeatures-tooltip' => 'Introducing Beta Features! This new preferences section lets you test and give feedback about new features before we launch them as default behavior. Try out something new now!',

	'betafeatures-about-betafeatures' => 'About Beta Features',
	'betafeatures-discuss-betafeatures' => 'Leave feedback',
);

/** Message documentation (Message documentation)
 * @author Mark Holmquist <mtraceur@member.fsf.org>
 * @author Nemo bis
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
	'mw-ui-feature-requirements-javascript' => 'Error message shown when the feature requires JavaScript.',
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
	'betafeatures-tooltip' => 'A tooltip meant to advertise the existence of the BetaFeatures preferences page the first time a user sees it. Only shown once, meant to be a call to action. "Introducing" is jargon meaning "we are explaining you", you can avoid translating it in your language if it doesn\'t fit.',
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
	'mw-ui-feature-user-count' => '{{PLURAL:$1|Un usuariu activó|$1 usuarios activaron|0=Dengún usuariu activó}} esta carauterística.',
	'mw-ui-feature-requirements-betafeatures' => 'Esta carauterística necesita activar {{PLURAL:$1|la siguiente carauterística|les siguientes carauterístiques}}:',
	'mw-ui-feature-requirements-browser' => '{{PLURAL:$1|El siguiente navegador nun tien|Los siguientes navegadores nun tienen}} encontu:',
	'mw-ui-feature-requirements-javascript' => 'Esta carauterística necesita JavaScript.',
	'mw-ui-feature-requirements-skins' => 'Esta carauterística sólo funciona con {{PLURAL:$1|la piel siguiente|les pieles siguientes}}:',
	'prefs-betafeatures' => 'Carauterístiques beta',
	'betafeatures-desc' => "Permite que l'usuariu active o desactive funciones de la wiki qu'inda nun tan pa un usu xeneralizáu",
	'betafeatures-toplink' => 'Beta',
	'betafeatures-auto-enroll' => 'Activar automáticamente toles carauterístiques beta nueves',
	'betafeatures-section-desc' => 'Est{{PLURAL:$1|a ye una carauterística nueva|es son dalgunes carauterístiques nueves}} que tamos considerando pa $2. Por favor. pruebeles y diganos lo que piensa pa que podamos ameyorales basandonos nes sos impresiones.',
	'betafeatures-tooltip' => '¡Presentamos les carauterístiques Beta! Esta nueva seición de les preferencies permite-y probar y comentar les carauterístiques nueves enantes de que les llancemos de mou predetermináu. ¡Pruebe agora daqué nuevo!',
	'betafeatures-about-betafeatures' => 'Tocante a les carauterístiques Beta',
	'betafeatures-discuss-betafeatures' => 'Dexar un comentariu',
);

/** Bikol Central (Bikol Central)
 * @author Geopoet
 */
$messages['bcl'] = array(
	'mw-ui-feature-discuss' => 'orolayan',
	'mw-ui-feature-info' => 'impormasyon',
	'mw-ui-feature-user-count' => '{{PLURAL:$1|Sarong paragamit igwa nin|$1 mga paragamit igwa nin|0=Mayong paragamit na igwa nin}} pinagpagana ining estima.',
	'mw-ui-feature-requirements-betafeatures' => 'Ining estima minakaipo kan minasunod na {{PLURAL:$1|estima|mga estima}} tanganing pagpaganahon:',
	'mw-ui-feature-requirements-browser' => 'An minasunod na {{PLURAL:$1|pangilyaw|mga pangilyaw}} bakong suportado:',
	'mw-ui-feature-requirements-javascript' => 'Ining estima minakaipo nin JavaScript.',
	'mw-ui-feature-requirements-skins' => 'Ining estima minagana sana sa{{PLURAL:$1|minasunod na kublit|minasunod na mga kublit}}:',
	'prefs-betafeatures' => 'Mga posturang yaon sa beta',
	'betafeatures-desc' => 'Minatugot sa paragamit na paganahon o pauntukon an mga postura kaining wiki na dae pa man handa para sa premyadong-panahon',
	'betafeatures-toplink' => 'Beta',
	'betafeatures-auto-enroll' => 'Awtomatikong pagpaganahon an gabos na baguhong mga estima nin beta',
	'betafeatures-section-desc' => 'Uya {{PLURAL:$1|an sarong baguhong estima|an nagkapirang baguhon na mga estima}} na samuyang kinokonsidera para sa $2. Tabi man prubari sinda asin itao samuya an saimong mga kaisipan, na tangani baya samuya pang mapakarhay sinda na pinagbase sa saimong balik-simbag.',
	'betafeatures-tooltip' => 'Ipinapabisto an Beta na mga Estima! Ining baguhon na seksyon nin mga kamuyahan minatugot saimo na prubaran asin magtao nin balik-simbag mapanungod sa baguhong mga estima bago mi ipaglansar sinda bilang panugmad na kagawian. Magprubar nin sarong baguhon ngunyan!',
	'betafeatures-about-betafeatures' => 'Mapanungod sa Beta na mga Estima',
	'betafeatures-discuss-betafeatures' => 'Magwalat nin balik-simbag',
);

/** Bulgarian (български)
 * @author DCLXVI
 */
$messages['bg'] = array(
	'mw-ui-feature-info' => 'информация',
	'mw-ui-feature-requirements-javascript' => 'Тази функционалност изисква JavaScript.',
	'mw-ui-feature-requirements-skins' => 'Тази функционалност изисква да използвате {{PLURAL:$1|следния облик|един от следните облици}}:', # Fuzzy
	'prefs-betafeatures' => 'Тестови функционалности',
	'betafeatures-desc' => 'Позволява на потребителя да включва или изключва функционалности от уикито, които все още не са готови за публично използване',
	'betafeatures-toplink' => 'Бета',
	'betafeatures-auto-enroll' => 'Автоматично включване на всички нови тестови функционалности',
	'betafeatures-discuss-betafeatures' => 'Обратна връзка',
);

/** Bengali (বাংলা)
 * @author Aftab1995
 * @author Bellayet
 */
$messages['bn'] = array(
	'mw-ui-feature-discuss' => 'আলোচনা',
	'mw-ui-feature-info' => 'তথ্য',
	'mw-ui-feature-user-count' => '{{PLURAL:$1|একজন ব্যবহারকারী|$1জন ব্যবহারকারী|0=কোন ব্যবহারকারী}} এই বৈশিষ্ট্য সক্রিয় {{PLURAL:$1|করেছেন|0=করেন নি}}।',
	'mw-ui-feature-requirements-betafeatures' => 'এই বৈশিষ্ট্য সক্রিয় করতে নিম্নলিখিত {{PLURAL:$1|বৈশিষ্ট্য|বৈশিষ্ট্যগুলি}} সক্রিয় করতে হবে:',
	'mw-ui-feature-requirements-browser' => 'নিম্নলিখিত {{PLURAL:$1|ব্রাউজার|ব্রাউজারগুলি}} সমর্থিত নয়:',
	'mw-ui-feature-requirements-javascript' => 'এই বৈশিষ্ট্যের জন্য জাভাস্ক্রিপ্ট প্রয়োজন।',
	'prefs-betafeatures' => 'বেটা বৈশিষ্ট্যসমূহ',
	'betafeatures-desc' => 'ব্যবহারকারীদের এই উইকিতে বৈশিষ্ট্য সক্রিয় বা নিস্ক্রিয় করার ব্যবস্থা করো যা এখনও প্রধান-সময়ের জন্য তৈরি নয়',
	'betafeatures-toplink' => 'বেটা',
	'betafeatures-auto-enroll' => 'স্বয়ংক্রিয়ভাবে সমস্ত নতুন বেটা বৈশিষ্ট্য সক্রিয় করো',
	'betafeatures-about-betafeatures' => 'বেটা বৈশিষ্ট্যসমূহ সম্পর্কে',
	'betafeatures-discuss-betafeatures' => 'প্রতিক্রিয়া জানান',
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
 * @author Vriullop
 */
$messages['ca'] = array(
	'mw-ui-feature-discuss' => 'discussió',
	'mw-ui-feature-info' => 'informació',
	'mw-ui-feature-user-count' => '{{PLURAL:$1|Un usuari ha|$1 usuaris han}} activat aquesta functionalitat.', # Fuzzy
	'mw-ui-feature-requirements-betafeatures' => 'Aquesta funcionalitat requereix {{PLURAL:$1|aquesta altra funcionalitat|aquestes altres funcionalitats}} per a ser activada:',
	'mw-ui-feature-requirements-browser' => '{{PLURAL:$1|Aquest navegador|Aquests navegadors}} no estan suportats:',
	'mw-ui-feature-requirements-javascript' => 'Aquesta funcionalitat requereix JavaScript.',
	'mw-ui-feature-requirements-skins' => "Aquesta funcionalitat requereix la utilitzacio d'{{PLURAL:$1|aquesta plantilla|una d'aquestes plantilles}}:", # Fuzzy
	'prefs-betafeatures' => 'Funcionalitats beta',
	'betafeatures-desc' => "Permet a l'usuari activar o desactivar funcionalitats en el wiki que encara no són a punt per a una estrena oficial.",
	'betafeatures-toplink' => 'Beta',
	'betafeatures-auto-enroll' => 'Activa automàticament totes les funcionalitats beta.',
	'betafeatures-section-desc' => 'Aquí teniu {{PLURAL:$1|una nova funcionalitat|noves funcionalitats}} que estem considerant per a $2. Si us plau, proveu-les i compartiu les vostres opinions. Així podrem millorar-les en base als vostres comentaris.',
	'betafeatures-tooltip' => "Us presentem Funcionalitats Beta! Aquesta nova secció a les vostres preferències us permet avaluar noves funcionalitats i compartir els vostres comentaris abans d'activar-les per a tothom.  This new preferences section lets you test and give feedback about new features before we launch them as default behavior. Prova alguna beta!",
);

/** Chechen (нохчийн)
 * @author Умар
 */
$messages['ce'] = array(
	'mw-ui-feature-requirements-browser' => '{{PLURAL:$1|ХӀара браузер ловш яц|ХӀара браузераш ловш яц}}:',
	'betafeatures-discuss-betafeatures' => 'Язде хьайна хетарг',
);

/** Czech (čeština)
 * @author Michaelbrabec
 * @author Mormegil
 */
$messages['cs'] = array(
	'mw-ui-feature-discuss' => 'diskuse',
	'mw-ui-feature-info' => 'informace',
	'mw-ui-feature-user-count' => 'Tuto funkci si {{PLURAL:$1|zapnul jeden uživatel|zapnuli $1 uživatelé|zapnulo $1 uživatelů|0=nikdo nezapnul}}.',
	'mw-ui-feature-requirements-betafeatures' => 'Tato funkce vyžaduje k zapnutí následující {{PLURAL:$1|funkci|funkce}}:',
	'mw-ui-feature-requirements-browser' => 'Následující {{PLURAL:$1|prohlížeč|prohlížeče}} nejsou podporovány:',
	'mw-ui-feature-requirements-javascript' => 'Tato funkce vyžaduje JavaScript.',
	'mw-ui-feature-requirements-skins' => 'Tato funkce vyžaduje použití {{PLURAL:$1|následujícího vzhledu|jednoho z následujících vzhledů}}:', # Fuzzy
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
	'mw-ui-feature-user-count' => '{{PLURAL:$1|Ein Benutzer hat|$1 Benutzer haben|0=Kein Benutzer hat}} diese Funktion aktiviert.',
	'mw-ui-feature-requirements-betafeatures' => 'Diese Funktion erfordert die Aktivierung folgender {{PLURAL:$1|Funktion|Funktionen}}:',
	'mw-ui-feature-requirements-browser' => '{{PLURAL:$1|Der folgende Browser wird|Die folgenden Browser werden}} nicht unterstützt:',
	'mw-ui-feature-requirements-javascript' => 'Diese Funktion benötigt JavaScript.',
	'mw-ui-feature-requirements-skins' => 'Diese Funktion funktioniert nur mit {{PLURAL:$1|der folgenden Benutzeroberfläche|den folgenden Benutzeroberflächen}}:',
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
	'mw-ui-feature-user-count' => '{{PLURAL:$1|Un usuario ha|$1 usuarios han}} habilitado esta característica.', # Fuzzy
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
	'mw-ui-feature-user-count' => '{{PLURAL:$1|$1 کاربر این ویژگی را فعال کرده‌است|0=هیچ کاربری این ویژگی را فعال نکرده‌است}}.',
	'mw-ui-feature-requirements-betafeatures' => 'این قابلیت نیازمند این {{PLURAL:$1|قابلیت|قابلیت‌ها}} است که باید فعال شوند:',
	'mw-ui-feature-requirements-browser' => 'این {{PLURAL:$1|مرورگر|مرورگرها}} حمایت نشده‌است:',
	'mw-ui-feature-requirements-javascript' => 'این ویژگی نیازمند جاوااسکریپ است.',
	'mw-ui-feature-requirements-skins' => 'این ویژگی نیازمند است که شما از {{PLURAL:$1|این پوسته|یکی از این پوسته‌های}} استفاده کنید:', # Fuzzy
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
	'mw-ui-feature-user-count' => '{{PLURAL:$1|Yksi käyttäjä on|$1 käyttäjää ovat}} ottaneet tämän ominaisuuden käyttöön.', # Fuzzy
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
 * @author Ltrlg
 * @author Sherbrooke
 */
$messages['fr'] = array(
	'mw-ui-feature-discuss' => 'discussion',
	'mw-ui-feature-info' => 'information',
	'mw-ui-feature-user-count' => '{{PLURAL:$1|Un utilisateur a|$1 utilisateurs ont|0=Aucun utilisateur n’a}} activé cette fonctionnalité.',
	'mw-ui-feature-requirements-betafeatures' => 'Cette fonctionnalité nécessite que {{PLURAL:$1|la fonctionnalité suivante soit activée|les fonctionnalités suivantes soient activées}} :',
	'mw-ui-feature-requirements-browser' => '{{PLURAL:$1|Le navigateur suivant n’est pas supporté|Les navigateurs suivants ne sont pas supportés}} :',
	'mw-ui-feature-requirements-javascript' => 'Cette fonctionnalité nécessite JavaScript.',
	'mw-ui-feature-requirements-skins' => 'Cette fonctionnalité fonctionne uniquement avec {{PLURAL:$1|l’habillage suivant|les habillages suivants}} :',
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
	'mw-ui-feature-user-count' => '{{PLURAL:$1|Un usuario ten|$1 usuarios teñen}} activada esta característica.', # Fuzzy
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
 * @author Amire80
 */
$messages['he'] = array(
	'mw-ui-feature-discuss' => 'דיון',
	'mw-ui-feature-info' => 'מידע',
	'mw-ui-feature-user-count' => '{{PLURAL:$1|משתמש אחד הפעיל|$1 משתמשים הפעילו|0=שום משתמש לא הפעיל}} את האפשרות הזאת.',
	'mw-ui-feature-requirements-betafeatures' => 'האפשרות הזאת דורשת {{PLURAL:$1|שהאפשרות הבאה תהיה מופעלת|שהאפשרויות הבאות יהיו מופעלות}}:',
	'mw-ui-feature-requirements-browser' => '{{PLURAL:$1|הדפדפן הבא אינו נתמך|הדפדפנים הבאים אינם נתמכים}}:',
	'mw-ui-feature-requirements-javascript' => "האפשרות הזאת דורשת הפעלה של ג'אווה סקריפט.",
	'mw-ui-feature-requirements-skins' => 'האפשרות הזאת עובדת רק עם {{PLURAL:$1|העיצוב הבא|העיצובים הבאים}}:',
	'prefs-betafeatures' => 'אפשרויות בטא',
	'betafeatures-desc' => 'מתן אפשרות למשתמש להפעיל או לכבות בוויקי אפשרויות שעדיין אינן מוכנות להוצאה כללית',
	'betafeatures-toplink' => 'בטא',
	'betafeatures-auto-enroll' => 'להפעיל אוטומטית את כל אפשרויות הבטא',
	'betafeatures-section-desc' => 'הנה {{PLURAL:$1|אפשרות חדשה|אפשרויות חדשות}} שאנחנו שוקלים להוסיף ל{{GRAMMAR:תחילית|$2}}. אנו מבקשים ממך לנסות {{PLURAL:$1|אותה|אותן}}, כדי שנוכל לשפר {{PLURAL:$1|אותה|אותן}} לפי המשוב שלך.',
	'betafeatures-tooltip' => 'אנו גאים להציג את "אפשרויות בטא"! החל החדש הזה בהעדפות מאפשר לך לבדוק אפשרויות חדשות ולתת עליהן משוב לפני שנפעיל אותן בתור ההתנהגות הרגילה. נסו משהו חדש!',
	'betafeatures-about-betafeatures' => 'אודות אפשרויות בטא',
	'betafeatures-discuss-betafeatures' => 'שליחת משוב',
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
	'mw-ui-feature-user-count' => '{{PLURAL:$1|Un usator|$1 usatores|0=Nulle usator}} ha activate iste function.',
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

/** Iloko (Ilokano)
 * @author Lam-ang
 */
$messages['ilo'] = array(
	'mw-ui-feature-discuss' => 'pagtungtungan',
	'mw-ui-feature-info' => 'pakaammo',
	'mw-ui-feature-user-count' => '{{PLURAL:$1|Maysa nga agar-aramat|$1 kadagiti agar-aramat|0=Awan kadagiti agar-aramat}} ti nangpakabael daytoy a langa.',
	'mw-ui-feature-requirements-betafeatures' => 'Daytoy a langa ket masapulna ti sumaganad a {{PLURAL:$1|langa|lang-langa}} tapno mapakabaelan:',
	'mw-ui-feature-requirements-browser' => '{{PLURAL:$1|Ti sumaganad a pagbasabasa|Dagiti sumaganad a pagbasabasa}} ket saan a masuportaran:',
	'mw-ui-feature-requirements-javascript' => 'Daytoy a langa ket masapulna ti JavaScript.',
	'mw-ui-feature-requirements-skins' => 'Daytoy a langa ket mabalin {{PLURAL:$1|iti sumaganad a kudil|kadagiti sumaganad a kudil}}:',
	'prefs-betafeatures' => 'Dagiti beta a langa',
	'betafeatures-desc' => 'Mangpalubos a mangpakabael ti agar-aramat wenno mangbaldado kadagiti langa iti wiki a saan pay a makasagana para iti kangrunaan a panawen',
	'betafeatures-toplink' => 'Beta',
	'betafeatures-auto-enroll' => 'Automatiko a mangpakabael kadagiti amin a baro a beta a langa',
	'betafeatures-section-desc' => 'Ditoy {{PLURAL:$1|ket ti baro a langa|ket dagiti baro a langa}} a panpanunotenmi para iti $2. Pangngaasi a padasen {{PLURAL:$1|daytoy|dagitoy}} ken agited kaniami dagiti panunotyo, tapno mapasayaatmi {{PLURAL:$1|daytoy|dagitoy}} a maibatay iti bukodmo a feedback.',
	'betafeatures-tooltip' => 'Ipayam-ammo dagiti Beta a Langa! Daytoy a baro a paset dagit ikakaykayatan ket mangpalubos kenka a mangsubok ken mangited ti feedback a maipanggep kadagiti baro a langa sakbay nga iparuarmi a kas kasisigud a panagkukua. Agpadas tattan ti kabarbaro!',
	'betafeatures-about-betafeatures' => 'Maipanggep kadagiti Beta a Langa',
	'betafeatures-discuss-betafeatures' => 'Mangibati ti feedback',
);

/** Italian (italiano)
 * @author Beta16
 * @author Davio
 * @author Gianfranco
 * @author Nemo bis
 */
$messages['it'] = array(
	'mw-ui-feature-discuss' => 'discussione',
	'mw-ui-feature-info' => 'informazioni',
	'mw-ui-feature-user-count' => '{{PLURAL:$1|Un utente ha|$1 utenti hanno|0=Nessun utente ha}} abilitato questa funzione.',
	'mw-ui-feature-requirements-betafeatures' => 'Questa funzionalità richiede che {{PLURAL:$1|sia abilitata la seguente|siano abilitate le seguenti}} funzionalità:',
	'mw-ui-feature-requirements-browser' => '{{PLURAL:$1|Il seguente browser non è abilitato|I seguenti browser non sono abilitati}}:',
	'mw-ui-feature-requirements-javascript' => 'Questa funzionalità richiede JavaScript.',
	'mw-ui-feature-requirements-skins' => 'Questa funzionalità funziona solo con {{PLURAL:$1|la seguente skin|le seguenti skin}}:',
	'prefs-betafeatures' => 'Funzionalità in preparazione',
	'betafeatures-desc' => "Consente all'utente di attivare o disattivare sul wiki funzionalità che non sono ancora pronte per il grande pubblico",
	'betafeatures-toplink' => '(in preparazione)',
	'betafeatures-auto-enroll' => 'Attiva automaticamente tutte le nuove funzionalità in preparazione',
	'betafeatures-section-desc' => '{{PLURAL:$1|Questa è una nuova funzionalità|Queste sono nuove funzionalità}} che stiamo prendendo in considerazione per $2. Puoi provarle e dirci cosa ne pensi, così che possiamo migliorare in base alle vostre risposte.',
	'betafeatures-tooltip' => 'Benvenuto nelle funzionalità in preparazione! Questa nuova sezione delle preferenze consente di provare e lasciare un commento sulle funzionalità in preparazione prima che siano estese a tutti. Prova qualcosa di nuovo!',
	'betafeatures-about-betafeatures' => 'Informazioni su Funzionalità in preparazione',
	'betafeatures-discuss-betafeatures' => 'Lascia un commento',
);

/** Japanese (日本語)
 * @author Shirayuki
 * @author Whym
 */
$messages['ja'] = array(
	'mw-ui-feature-discuss' => '議論',
	'mw-ui-feature-info' => '情報',
	'mw-ui-feature-user-count' => '{{PLURAL:$1|$1 人の利用者がこの機能を有効にしています|この機能を有効にしている利用者はいません}}。',
	'mw-ui-feature-requirements-betafeatures' => 'この機能を使用するには、以下の{{PLURAL:$1|機能}}を有効にする必要があります:',
	'mw-ui-feature-requirements-browser' => '以下の{{PLURAL:$1|ブラウザー}}には対応していません:',
	'mw-ui-feature-requirements-javascript' => 'この機能の使用には JavaScript が必要です。',
	'mw-ui-feature-requirements-skins' => 'この機能には{{PLURAL:$1|以下の外装|以下の外装のいずれか}}でのみ動作します:',
	'prefs-betafeatures' => 'ベータ版機能',
	'betafeatures-desc' => '本番環境のウィキで使用する準備がまだできていない機能について、利用者が有効化/無効化できるようにする',
	'betafeatures-toplink' => 'ベータ版',
	'betafeatures-auto-enroll' => 'すべてのベータ版機能を自動的に有効にする',
	'betafeatures-section-desc' => '$2のために検討している{{PLURAL:$1|新しい機能}}があります。お試しの上ご意見をお寄せください。そのフィードバックに基づいて機能を改善します。',
	'betafeatures-about-betafeatures' => 'ベータ版の機能について',
	'betafeatures-discuss-betafeatures' => 'フィードバックを送信',
);

/** Georgian (ქართული)
 * @author David1010
 */
$messages['ka'] = array(
	'betafeatures-toplink' => 'ბეტა',
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
	'mw-ui-feature-user-count' => '{{PLURAL:$1|사용자 한 명이|사용자 $1명이|0=아무도}} 이 기능을 활성화{{PLURAL:$1|시켰습니다|0=시키지 않았습니다}}.',
	'mw-ui-feature-requirements-betafeatures' => '이 기능을 사용하기 위해서는 다음 {{PLURAL:$1|기능}}을 활성화해야 합니다:',
	'mw-ui-feature-requirements-browser' => '다음 {{PLURAL:$1|브라우저}}는 지원하지 않습니다:',
	'mw-ui-feature-requirements-javascript' => '이 기능은 자바스크립트가 필요합니다.',
	'mw-ui-feature-requirements-skins' => '이 기능은 {{PLURAL:$1|다음 스킨|다음 스킨 중 하나}}에서만 작동합니다:',
	'prefs-betafeatures' => '베타 기능',
	'betafeatures-desc' => '사용자가 아직 준비가 되지 않은 위키에서 기능을 활성화하거나 비활성화할 수 있습니다',
	'betafeatures-toplink' => '베타',
	'betafeatures-auto-enroll' => '자동으로 새 베타 기능을 모두 활성화',
	'betafeatures-section-desc' => '$2를 고려하고 있는 {{PLURAL:$1|새로운 기능|새로운 기능들}}이 있습니다. 사용해 보시고, 의견을 남겨 주시면, 의견을 바탕으로 발전시켜 나가겠습니다.',
	'betafeatures-tooltip' => '베타 기능을 소개합니다! 이 새로운 환경 설정을 사용하여 저희가 기본 설정으로 설정하기 전에 새로운 기능에 대한 의견을 들을 수 있습니다! 새 기능을 시도해 보세요!',
	'betafeatures-about-betafeatures' => '베타 기능에 대해서',
	'betafeatures-discuss-betafeatures' => '피드백 남기기',
);

/** Latin (Latina)
 * @author Autokrator
 * @author UV
 */
$messages['la'] = array(
	'mw-ui-feature-discuss' => 'discussio',
	'mw-ui-feature-user-count' => '{{PLURAL:$1|Unus usor hac facultate utitur.|$1 usores hac facultate utuntur.}}', # Fuzzy
	'mw-ui-feature-requirements-browser' => '{{PLURAL:$1|Istud navigatrum|Ista navigatra}} adhiberi non licent:',
	'mw-ui-feature-requirements-javascript' => 'Haec facultas necessitat JavaScript.',
	'prefs-betafeatures' => 'Facultates experimentales',
	'betafeatures-toplink' => 'Facultates experimentales',
	'betafeatures-auto-enroll' => 'Automatice omnibus facultatibus experimentalibus utere',
	'betafeatures-about-betafeatures' => 'De facultatibus modi experimentalis',
	'betafeatures-discuss-betafeatures' => 'Commentationem scribere',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Robby
 * @author Soued031
 */
$messages['lb'] = array(
	'mw-ui-feature-discuss' => 'Diskussioun',
	'mw-ui-feature-info' => 'Informatioun',
	'mw-ui-feature-user-count' => '{{PLURAL:$1|Ee Benotzer huet|$1 Benotzer hunn|0=Kee Benotzer huet}} dës Funktioun aktivéiert.',
	'mw-ui-feature-requirements-browser' => '{{PLURAL:$1|Dëse Browser gëtt|Dës Browsere ginn}} net ënnerstëtzt:',
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
	'mw-ui-feature-user-count' => 'Функцијата ја {{PLURAL:$1|има вклучено еден корисник|имаат вклучено $1 корисници|0=нема вклучено никој}}.',
	'mw-ui-feature-requirements-betafeatures' => 'Оваа функција бара да {{PLURAL:$1|е вклучена следнава функција|се вклучени следниве функции}}:',
	'mw-ui-feature-requirements-browser' => '{{PLURAL:$1|Не е поддржан следниов прелистувач|Не се поддржани следниве прелистувачи}}:',
	'mw-ui-feature-requirements-javascript' => 'Оваа функција бара JavaScript.',
	'mw-ui-feature-requirements-skins' => 'Оваа функција работи само со {{PLURAL:$1|следново руво|следниве рува}}:',
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
	'mw-ui-feature-discuss' => 'സം‌വാദം',
	'mw-ui-feature-info' => 'വിവരം',
	'mw-ui-feature-user-count' => '{{PLURAL:$1|ഒരു ഉപയോക്താവ്|$1 ഉപയോക്താക്കൾ|0=ഇതുവരെ ആരും }} ഈ സൗകര്യം {{PLURAL:$1|സജ്ജമാക്കി.|സജ്ജമാക്കി.|0=സജ്ജമാക്കിയില്ല.}}', # Fuzzy
	'mw-ui-feature-requirements-betafeatures' => 'ഈ സൗകര്യം സജ്ജമാക്കാൻ താഴെക്കൊടുക്കുന്ന {{PLURAL:$1|സവിശേഷത|സവിശേഷതകൾ}} സജ്ജമാക്കേണ്ടതുണ്ട്:',
	'mw-ui-feature-requirements-browser' => 'താഴെപ്പറയുന്ന {{PLURAL:$1|ബ്രൗസർ|ബ്രൗസറുകൾ}}പിന്തുണയ്ക്കുന്നില്ല:',
	'mw-ui-feature-requirements-javascript' => 'ഈ സൗകര്യം പ്രവർത്തിക്കാൻ ജാവാസ്ക്രിപ്റ്റ് ആവശ്യമാണ്.',
	'mw-ui-feature-requirements-skins' => 'ഈ സൗകര്യം {{PLURAL:$1|ഈ ദൃശ്യരൂപത്തിൽ|ഈ ദൃശ്യരൂപങ്ങളിൽ}} മാത്രമേ പ്രവർത്തിക്കൂ:',
	'prefs-betafeatures' => 'പരീക്ഷണാടിസ്ഥാനത്തിലുള്ള സൗകര്യങ്ങൾ',
	'betafeatures-desc' => 'മുഖ്യധാരയ്ക്ക് തയ്യാറാവാത്ത സവിശേഷതകൾ വിക്കിയിൽ പരീക്ഷിക്കാൻ ഉപയോക്താക്കളെ അനുവദിക്കുന്നു',
	'betafeatures-toplink' => 'ബീറ്റ',
	'betafeatures-auto-enroll' => 'സ്വയം എല്ലാ ബീറ്റാ സവിശേഷതകളും സജ്ജമാക്കുക',
	'betafeatures-section-desc' => '$2 സംരംഭത്തിനായി ഞങ്ങൾ  പരിഗണിക്കുന്ന {{PLURAL:$1|സവിശേഷ സൗകര്യം|സവിശേഷ സൗകര്യങ്ങൾ}} നൽകുന്നു. ദയവായി {{PLURAL:$1|അത്|അവ}} പരീക്ഷിക്കുകയും താങ്കളുടെ അഭിപ്രായം അറിയിക്കുകയും ചെയ്യുക, അതുവഴി ഞങ്ങൾക്ക്  {{PLURAL:$1|അത്|അവ}} മെച്ചപ്പെടുത്താനാവുന്നതാണ്.',
	'betafeatures-tooltip' => 'പരീക്ഷണാടിസ്ഥാനത്തിലുള്ള സൗകര്യങ്ങൾ അവതരിപ്പിക്കുന്നു! ഈ പുതിയ ക്രമീകരണങ്ങൾ എല്ലാവർക്കുമായി നൽകുന്നതിനു മുമ്പ് താങ്കൾക്ക് പരീക്ഷിക്കാനും, അങ്ങനെ താങ്കൾക്ക് അവ പരീക്ഷിക്കാനും പ്രതികരണം അറിയിക്കാനുമുള്ള അവസരം നൽകുന്നു. പുതിയ സൗകര്യങ്ങൾ ഇപ്പോൾ തന്നെ പരിശോധിക്കുക!',
	'betafeatures-about-betafeatures' => 'പരീക്ഷണാടിസ്ഥാനത്തിലുള്ള സൗകര്യങ്ങളുടെ വിവരണം',
	'betafeatures-discuss-betafeatures' => 'പ്രതികരണം ചേർക്കുക',
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
 * @author Romaine
 * @author Siebrand
 * @author TBloemink
 */
$messages['nl'] = array(
	'mw-ui-feature-discuss' => 'overleg',
	'mw-ui-feature-info' => 'informatie',
	'mw-ui-feature-user-count' => '{{PLURAL:$1|Eén gebruiker heeft|$1 gebruikers hebben|0=Geen enkele gebruiker heeft}} deze functie ingeschakeld.',
	'mw-ui-feature-requirements-betafeatures' => 'Deze functie vereist dat de volgende {{PLURAL:$1|functie wordt|functies worden}} ingeschakeld:',
	'mw-ui-feature-requirements-browser' => 'De volgende {{PLURAL:$1|browser wordt|browsers worden}} niet ondersteund:',
	'mw-ui-feature-requirements-javascript' => 'Deze functie vereist JavaScript.',
	'mw-ui-feature-requirements-skins' => 'Deze functie werkt alleen met {{PLURAL:$1|de volgende skin|een van de volgende skins}}:',
	'prefs-betafeatures' => 'Betafuncties',
	'betafeatures-desc' => 'Laat de gebruiker functies die in ontwikkeling zijn in- of uitschakelen',
	'betafeatures-toplink' => 'Beta',
	'betafeatures-auto-enroll' => 'Automatisch alle betafuncties inschakelen',
	'betafeatures-section-desc' => 'Hier {{PLURAL:$1|is een nieuwe functie|zijn enkele nieuwe functies}} die we overwegen voor $2. Probeert deze uit en laat ons weten wat u ervan vindt, zodat wij ze kunnen verbeteren.',
	'betafeatures-tooltip' => 'Introductie van Beta Features! Deze nieuwe sectie in je voorkeuren stelt je in staat om te testen en feedback te geven over nieuwe functies voordat we ze invoeren als standaard. Probeer nu iets nieuws uit!',
	'betafeatures-about-betafeatures' => 'Over de Betafuncties',
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
 * @author WTM
 * @author Woytecr
 */
$messages['pl'] = array(
	'mw-ui-feature-discuss' => 'dyskusja',
	'mw-ui-feature-info' => 'informacje',
	'mw-ui-feature-user-count' => '{{PLURAL:$1|Jeden użytkownik włączył tę funkcję.|$1 użytkowników włączyło tę funkcję.|0=Żaden użytkownik nie włączył tej funkcji.}}',
	'mw-ui-feature-requirements-betafeatures' => 'Ta funkcja wymaga włączenia najpierw {{PLURAL:$1|następującej|następujących}}:',
	'mw-ui-feature-requirements-browser' => '{{PLURAL:$1|Nieobsługiwana przeglądarka|Nieobsługiwane przeglądarki}}:',
	'mw-ui-feature-requirements-javascript' => 'Ta funkcja wymaga włączonej obsługi JavaScriptu.',
	'mw-ui-feature-requirements-skins' => 'Ta funkcja działa tylko z {{PLURAL:$1|następującą skórką|następującymi skórkami}}:', # Fuzzy
	'prefs-betafeatures' => 'Funkcje eksperymentalne',
	'betafeatures-desc' => 'Pozwala użytkownikom włączać lub wyłączać funkcje, które nie są jeszcze w pełni dopracowane',
	'betafeatures-toplink' => 'Funkcje eksperymentalne',
	'betafeatures-auto-enroll' => 'Automatycznie włączaj nowe funkcje eksperymentalne',
	'betafeatures-section-desc' => 'Masz możliwość przetestowania {{PLURAL:$1|nowej, eksperymentalnych funkcji|nowych, eksperymentalnych funkcji}} przygotowanych dla {{GRAMMAR:D.lp|$2}}. Prosimy o ich wypróbowanie i przekazanie nam swoich refleksji, abyśmy mogli je ulepszyć bazując na Twoich komentarzach.',
	'betafeatures-tooltip' => 'Sekcja funkcji eksperymentalnych umożliwia Ci testowanie i wyrażanie opinii na temat nowych funkcji, zanim uruchomimy je jako domyślne zachowanie. Wypróbuj coś nowego!',
	'betafeatures-about-betafeatures' => 'O funkcjach eksperymentalnych',
	'betafeatures-discuss-betafeatures' => 'Skomentuj',
);

/** Portuguese (português)
 * @author Fúlvio
 */
$messages['pt'] = array(
	'mw-ui-feature-discuss' => 'discussão',
	'mw-ui-feature-info' => 'informação',
	'mw-ui-feature-user-count' => '{{PLURAL:$1|Um utilizador|$1 utilizadores}} ativaram este recurso.', # Fuzzy
	'mw-ui-feature-requirements-betafeatures' => 'Este recurso necessita {{PLURAL:$1|do seguinte recurso|dos seguintes recursos}} para ser ativado:',
	'mw-ui-feature-requirements-browser' => '{{PLURAL:$1|O seguinte navegador não é suportado|Os seguintes navegadores não são suportados}}:',
	'mw-ui-feature-requirements-javascript' => 'Este recurso requer JavaScript.',
	'mw-ui-feature-requirements-skins' => 'Este recurso requer o uso {{PLURAL:$1|do seguinte tema|de um dos seguintes temas}}:', # Fuzzy
	'prefs-betafeatures' => 'Recursos Beta',
	'betafeatures-desc' => 'Permite que o usuário ative ou desative recursos da wiki que ainda não estão prontos',
	'betafeatures-toplink' => 'Beta',
	'betafeatures-auto-enroll' => 'Ativar automaticamente todos os novos recursos beta',
	'betafeatures-section-desc' => 'Aqui {{PLURAL:$1|encontra-se um novo recurso|encontra-se novos recursos}} que estamos considerando para $2. Por favor, {{PLURAL:$1|teste-o|teste-os}} e diga o que pensa {{PLURAL:$1|dele|deles}}, para que possamos {{PLURAL:$1|melhorá-lo|melhorá-los}} com base em seu comentário.',
	'betafeatures-tooltip' => 'Apresentando os Recursos Beta! Esta nova seção das suas preferências permite que você teste e comente sobre os novos recursos antes de implementá-los como padrão. Experimente algo novo agora!',
	'betafeatures-about-betafeatures' => 'Sobre os Recursos Beta',
	'betafeatures-discuss-betafeatures' => 'Deixe um comentário',
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

/** Romanian (română)
 * @author Minisarm
 */
$messages['ro'] = array(
	'mw-ui-feature-discuss' => 'discuție',
	'mw-ui-feature-info' => 'informații',
	'mw-ui-feature-user-count' => '{{PLURAL:$1|Un utilizator a|$1 utilizatori au|$1 de utilizatori au|0=Niciun utilizator nu a}} activat această caracteristică.',
	'mw-ui-feature-requirements-betafeatures' => 'Această caracteristică are nevoie ca {{PLURAL:$1|următoarea caracteristică|următoarele caracteristici}} să fie {{PLURAL:$1|activată|activate}}:',
	'mw-ui-feature-requirements-browser' => '{{PLURAL:$1|Următorul navigator nu este suportat|Următoarele navigatoare nu sunt suportate}}:',
	'mw-ui-feature-requirements-javascript' => 'Această caracteristică necesită JavaScript.',
	'mw-ui-feature-requirements-skins' => 'Această caracteristică funcționează doar împreună cu {{PLURAL:$1|următoarea interfață|următoarele interfețe}}:',
	'prefs-betafeatures' => 'Opțiuni beta',
	'betafeatures-desc' => 'Permite utilizatorilor să activeze sau să dezactiveze în cadrul wikiului caracteristici care nu sunt pregătire pentru lansarea generală',
	'betafeatures-toplink' => 'Beta',
	'betafeatures-auto-enroll' => 'Activează automat toate noile caracteristici beta',
	'betafeatures-about-betafeatures' => 'Despre opțiunile beta',
	'betafeatures-discuss-betafeatures' => 'Lăsați o părere',
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
	'mw-ui-feature-user-count' => '{{PLURAL:$1|Один пользователь включил|$1 пользователя включили|$1 пользователей включили|0=Никто не включил}} эту функцию.',
	'mw-ui-feature-requirements-betafeatures' => 'Эта функция требует, чтоб {{PLURAL:$1|была включена следующая функция|были включены следующие функции}}:',
	'mw-ui-feature-requirements-browser' => '{{PLURAL:$1|Следующий браузер не поддерживается|Следующие браузеры не поддерживаются}}:',
	'mw-ui-feature-requirements-javascript' => 'Эта функция требует JavaScript.',
	'mw-ui-feature-requirements-skins' => 'Эта функция работает только со {{PLURAL:$1|следующей темой|следующими темами}}:',
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
	'mw-ui-feature-discuss' => 'pogovor',
	'mw-ui-feature-info' => 'opis',
	'mw-ui-feature-user-count' => '{{PLURAL:$1|To možnost je omogočil en uporabnik|To možnost sta omogočila $1 uporabnika|To možnost so omogočili $1 uporabniki|To možnost je omogočilo $1 uporabnikov|0=Te možnosti ni omogočil noben uporabnik}}.',
	'mw-ui-feature-requirements-betafeatures' => 'Ta možnost zahteva, da {{PLURAL:$1|je omogočena naslednja možnost|so omogočene naslednje možnosti}}:',
	'mw-ui-feature-requirements-browser' => '{{PLURAL:$1|Naslednji brskalnik ni podprt|Naslednja brskalnika nista podprta|Naslednji brskalniki niso podprti}}:',
	'mw-ui-feature-requirements-javascript' => 'Ta možnost zahteva JavaScript',
	'mw-ui-feature-requirements-skins' => 'Ta možnost deluje samo z {{PLURAL:$1|naslednjo kožo|eno od naslednjih kož}}:',
	'prefs-betafeatures' => 'Preizkusne funkcije',
	'betafeatures-desc' => 'Dovoljuje uporabniku omogočiti ali onemogočiti funkcije na wikiju, ki še niso pripravljene za redno uporabo',
	'betafeatures-toplink' => 'Beta',
	'betafeatures-auto-enroll' => 'Samodejno omogoči vse betamožnosti',
	'betafeatures-section-desc' => 'Tu {{PLURAL:$1|je nova možnost|je nekaj novih možnosti}}, ki {{PLURAL:$1|jo|jih}} načrtujemo za $2. Prosimo, {{PLURAL:$1|preizkusite jo|preizkusite jih}} in nam sporočite svoje mnenje, tako da {{PLURAL:$1|jo|jih}} bomo lahko na podlagi vaših povratnih informacij izboljšali.',
	'betafeatures-tooltip' => 'Predstavljamo Betamožnosti! Novi razdelek v nastavitvah vam omogoča preizkušanje in posredovanje povratnih informacij o novih možnostih, preden jih uveljavimo kot privzeto vedenje. Poskusite nekaj novega!',
	'betafeatures-about-betafeatures' => 'O Betamožnostih',
	'betafeatures-discuss-betafeatures' => 'Pustite povratne informacije',
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
	'mw-ui-feature-requirements-betafeatures' => 'Den här funktionen kräver att följande {{PLURAL:$1|funktion är aktiverad|funktioner är aktiverade}}:',
	'mw-ui-feature-requirements-browser' => 'Följande {{PLURAL:$1|webbläsare}} stöds inte:',
	'mw-ui-feature-requirements-javascript' => 'Denna funktion kräver JavaScript.',
	'mw-ui-feature-requirements-skins' => 'Den här funktionen kräver att du använder {{PLURAL:$1|följande utseende|en av de följande utseenden}}:', # Fuzzy
	'prefs-betafeatures' => 'Betafunktioner',
	'betafeatures-desc' => 'Låter användare aktivera eller inaktivera funktioner på wikin som fortfarande inte är helt färdiga',
	'betafeatures-toplink' => 'Beta',
	'betafeatures-auto-enroll' => 'Aktivera automatiskt alla nya betafunktioner',
	'betafeatures-section-desc' => 'Här finns {{PLURAL:$1|en ny funktion|några nya funktioner}} som vi funderar på att inkludera i $2. Var god prova ut {{PLURAL:$1|den|dem}} och ge oss dina åsikter så vi kan förbättra {{PLURAL:$1|den|dem}} utifrån din feedback.',
	'betafeatures-tooltip' => 'Vi intoruducerar betafunktioner! Denna nya inställningsavsnitt låter dig testa och ge återkoppling på nya funktioner innan vi lanserar dem som standardfunktionerna. Testa något nytt nu!',
	'betafeatures-about-betafeatures' => 'Om betafunktioner',
	'betafeatures-discuss-betafeatures' => 'Ge återkoppling',
);

/** Ukrainian (українська)
 * @author Andriykopanytsia
 * @author Ата
 */
$messages['uk'] = array(
	'mw-ui-feature-discuss' => 'обговорення',
	'mw-ui-feature-info' => 'інформація',
	'mw-ui-feature-user-count' => '{{PLURAL:$1|Один користувач вже увімкнув|$1 користувачі вже увімкнули|$1 користувачів вже увімкнули|0=Жодний користувач ще не увімкнув}} цю функцію.',
	'mw-ui-feature-requirements-betafeatures' => 'Ця функція вимагає, щоб {{PLURAL:$1|була включена наступна функція|були включені наступні функції}}:',
	'mw-ui-feature-requirements-browser' => '{{PLURAL:$1| Наступний веб-переглядач не підтримується|Наступні веб-переглядачі не підтримуються}}:',
	'mw-ui-feature-requirements-javascript' => 'Ця функція вимагає JavaScript.',
	'mw-ui-feature-requirements-skins' => 'Ця функція працює лише з {{PLURAL:$1|наступною темою|однією з наступних тем}}:',
	'prefs-betafeatures' => 'Бета-функції',
	'betafeatures-desc' => 'Дозволяє користувачу вмикати чи вимикати функції вікі, все ще не готові до прайм-тайму',
	'betafeatures-toplink' => 'Бета',
	'betafeatures-auto-enroll' => 'Автоматично увімкнути усі бета-функції',
	'betafeatures-section-desc' => 'Тут  {{PLURAL:$1|є нова функція, яку|деякі нові функції, які}} ми розробляємо для  $2. Спробуйте їх і дайте нам свої думки, щоб ми могли покращити їх, виходячи з ваших відгуків.',
	'betafeatures-tooltip' => 'Представляємо бета-функції! Цей новий розділ налаштувань дозволяє тестувати і надсилати відгуки про нові можливості, перш ніж ми запустимо їх як типову поведінку у основній Медіавікі. Спробувати щось нове зараз!',
	'betafeatures-about-betafeatures' => 'Про бета-функції',
	'betafeatures-discuss-betafeatures' => 'Залишити відгук',
);

/** Vietnamese (Tiếng Việt)
 * @author Minh Nguyen
 */
$messages['vi'] = array(
	'mw-ui-feature-discuss' => 'thảo luận',
	'mw-ui-feature-info' => 'thông tin',
	'mw-ui-feature-user-count' => '{{PLURAL:$1|Một người dùng đã|$1 người dùng đã|0=Chưa có ai}} bật lên tính năng này.',
	'mw-ui-feature-requirements-betafeatures' => 'Tính năng này cần {{PLURAL:$1|tính năng|các tính năng}} sau được kích hoạt:',
	'mw-ui-feature-requirements-browser' => '{{PLURAL:$1|Trình duyệt|Các trình duyệt}} sau không được hỗ trợ:',
	'mw-ui-feature-requirements-javascript' => 'Tính năng này cần JavaScript.',
	'mw-ui-feature-requirements-skins' => 'Tính năng này chỉ tương thích với {{PLURAL:$1|hình dạng|các hình dạng}} sau:',
	'prefs-betafeatures' => 'Tính năng beta',
	'betafeatures-desc' => 'Cho phép người dùng bật hay tắt các tính năng wiki chưa ổn định',
	'betafeatures-toplink' => 'Beta',
	'betafeatures-auto-enroll' => 'Tự động bật lên các tính năng beta mới',
	'betafeatures-section-desc' => 'Đây có {{PLURAL:$1|một tính năng|những tính năng}} mới mà chúng tôi đang phát triển cho $2. Xin vui lòng thử {{PLURAL:$1|nó|chúng}} và gửi cho chúng tôi những ý kiến của bạn để giúp chúng tôi cải thiện {{PLURAL:$1|nó|chúng}}.',
	'betafeatures-tooltip' => 'Giới thiệu các tính năng beta! Phần tùy chọn mới này cho phép bạn thử các tính năng mới và gửi phản hồi trước khi chúng trở thành mặc định. Hãy thử những gì mới ngay bây giờ!',
	'betafeatures-about-betafeatures' => 'Giới thiệu tính năng beta',
	'betafeatures-discuss-betafeatures' => 'Gửi phản hồi',
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
 * @author Shizhao
 * @author 乌拉跨氪
 */
$messages['zh-hans'] = array(
	'mw-ui-feature-discuss' => '讨论',
	'mw-ui-feature-info' => '信息',
	'mw-ui-feature-user-count' => '{{PLURAL:$1|有一个用户|有$1个用户|0=没有用户}} 启用该功能。',
	'mw-ui-feature-requirements-betafeatures' => '此功能需要启用以下功能：', # Fuzzy
	'mw-ui-feature-requirements-browser' => '尚不支持以下{{PLURAL:$1|浏览器}}：',
	'mw-ui-feature-requirements-javascript' => '此功能依赖JavaScript。',
	'mw-ui-feature-requirements-skins' => '此功能只能在以下皮肤中工作：', # Fuzzy
	'prefs-betafeatures' => '测试功能',
	'betafeatures-desc' => '允许用户启用或禁用wiki上仍在测试的功能',
	'betafeatures-toplink' => '测试功能',
	'betafeatures-auto-enroll' => '自动启用所有新的测试功能',
	'betafeatures-section-desc' => '这里{{PLURAL:$1|有一个新功能|有一些新功能}}，我们正在考虑将其部署到$2。请试用{{PLURAL:$1|这个|这些}}功能，并把你的想法告诉我们。这样我们可以基于您的想法对其进行改善。',
	'betafeatures-tooltip' => '引入测试功能！这个新的参数设置章节允许您在我们将之作为默认功能之前进行测试和反馈。现在就来尝试新东西吧！',
	'betafeatures-about-betafeatures' => '关于测试功能',
	'betafeatures-discuss-betafeatures' => '留下反馈意见',
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
