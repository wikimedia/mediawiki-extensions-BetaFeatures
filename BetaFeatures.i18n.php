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
	'mw-ui-feature-user-count'      => '{{PLURAL:$1|One user has|$1 users have}} enabled this feature.',

	'prefs-betafeatures' => 'Beta features',
	'betafeatures-desc' => 'Lets user enable or disable features on the wiki that are still not ready for prime-time',
	'betafeatures-toplink' => 'Beta',

	'betafeatures-auto-enroll' => 'Automatically enable all new beta features',
	'betafeatures-section-desc' => 'Here {{PLURAL:$1|is a new feature|are some new features}} we\'re considering for $2. Please try them out and give us your thoughts, so we can improve them based on your feedback.',

	// Test messages
	'betafeatures-test-check-field' => 'blah blah blah', # do not translate or duplicate this message to other languages
	'betafeatures-test-feature-field' => 'This is a test feature - it should not show up.', # do not translate or duplicate this message to other languages

	'betafeatures-tooltip' => 'Introducing Beta Features! This new preferences section lets you test and give feedback about new features before we launch them as default behavior. Try out something new now!',
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
	'mw-ui-feature-user-count' => '{{PLURAL:$1|Un usuariu activó|$1 usuarios activaron}} esta carauterística.',
	'prefs-betafeatures' => 'Carauterístiques beta',
	'betafeatures-desc' => "Permite que l'usuariu active o desactive funciones de la wiki qu'inda nun tan pa un usu xeneralizáu",
	'betafeatures-toplink' => 'Beta',
	'betafeatures-auto-enroll' => 'Activar automáticamente toles carauterístiques beta nueves',
	'betafeatures-section-desc' => 'Est{{PLURAL:$1|a ye una carauterística nueva|es son dalgunes carauterístiques nueves}} que tamos considerando pa $2. Por favor. pruebeles y diganos lo que piensa pa que podamos ameyorales basandonos nes sos impresiones.',
);

/** Bikol Central (Bikol Central)
 * @author Geopoet
 */
$messages['bcl'] = array(
	'mw-ui-feature-discuss' => 'orolayan',
	'mw-ui-feature-user-count' => '{{PLURAL:$1|Sarong paragamit|$1 na mga paragamit}} pinagpagana an posturang ini.',
	'prefs-betafeatures' => 'Mga posturang yaon sa beta',
	'betafeatures-desc' => 'Minatugot sa paragamit na paganahon o pauntukon an mga postura kaining wiki na dae pa man handa para sa premyadong-panahon',
	'betafeatures-toplink' => 'Beta',
	'betafeatures-auto-enroll' => 'Awtomatikong magpalista sa gabos na mga posturang yaon sa beta', # Fuzzy
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
	'mw-ui-feature-user-count' => '{{PLURAL:$1|Un usuari ha|$1 usuaris han}} activat aquesta functionalitat.',
	'prefs-betafeatures' => 'Funcionalitats beta',
	'betafeatures-desc' => "Permet a l'usuari activar o desactivar funcionalitats en el wiki que encara no són a punt per a una estrena oficial.",
	'betafeatures-toplink' => 'Funcionalitats beta', # Fuzzy
	'betafeatures-auto-enroll' => 'Apunteu-vos automàticament a totes les funcionalitats beta.', # Fuzzy
);

/** Czech (česky)
 * @author Michaelbrabec
 * @author Mormegil
 */
$messages['cs'] = array(
	'mw-ui-feature-discuss' => 'diskuse',
	'mw-ui-feature-info' => 'informace',
	'mw-ui-feature-user-count' => 'Tuto funkci si {{PLURAL:$1|zapnul jeden uživatel|zapnuli $1 uživatelé|zapnulo $1 uživatelů}}.',
	'prefs-betafeatures' => 'Betaverze',
	'betafeatures-desc' => 'Umožňuje uživatelům zapínat a vypínat nové funkce, které zatím nejsou zcela odladěné',
	'betafeatures-toplink' => 'Beta',
	'betafeatures-auto-enroll' => 'Automaticky zapnout všechny nové funkce betaverze',
	'betafeatures-section-desc' => 'Zde {{PLURAL:$1|je nová funkce, kterou|jsou nové funkce, které}} zvažujeme pro použití na {{grammar:6sg|$2}}. Vyzkoušejte {{PLURAL:$1|ji|je}} a dejte nám vědět, ať {{PLURAL:$1|ji|je}} na základě vašich názorů můžeme vylepšovat.',
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
	'prefs-betafeatures' => 'Beta-Funktionen',
	'betafeatures-desc' => 'Ermöglicht Benutzern das Aktivieren oder Deaktivieren von Funktionen in diesem Wiki, die sich noch in der Entwicklung befinden',
	'betafeatures-toplink' => 'Beta',
	'betafeatures-auto-enroll' => 'Automatisch alle neuen Beta-Funktionen aktivieren',
	'betafeatures-section-desc' => 'Hier {{PLURAL:$1|ist eine neue Funktion|sind einige neue Funktionen}}, die wir für $2 planen. Bitte probier sie aus und sag uns deine Meinung. So können wir sie, basierend auf deiner Rückmeldung, verbessern.',
	'betafeatures-tooltip' => 'Einführende Betafunktionen! Dieser neue Einstellungsabschnitt ermöglicht dir das Testen und Geben von Rückmeldungen über neue Funktionen, bevor wir sie standardmäßig aktivieren. Probier jetzt einige neue Funktionen aus!',
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
 * @author Fitoschido
 * @author Ovruni
 * @author VegaDark
 */
$messages['es'] = array(
	'mw-ui-feature-discuss' => 'discusión',
	'mw-ui-feature-user-count' => '{{PLURAL:$1|Un usuario ha|$1 usuarios han}} habilitado esta característica.',
	'prefs-betafeatures' => 'Características de prueba',
	'betafeatures-desc' => 'Permite al usuario activar o desactivar funciones del wiki que todavía no están listas',
	'betafeatures-toplink' => 'Beta',
	'betafeatures-auto-enroll' => 'Inscribirse automáticamente en todas las funciones de prueba', # Fuzzy
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
	'mw-ui-feature-user-count' => '{{PLURAL:$1|Un utilisateur a|$1 utilisateurs ont}} activé cette fonctionnalité.',
	'prefs-betafeatures' => 'Fonctionnalités bêta',
	'betafeatures-desc' => 'Laisse l’utilisateur activer ou désactiver les fonctionnalités sur ce wiki qui ne sont pas encore prêtes pour être généralisées',
	'betafeatures-toplink' => 'Bêta',
	'betafeatures-auto-enroll' => 'Activer automatiquement toutes les nouvelles fonctionnalités en bêta',
	'betafeatures-section-desc' => 'Voici {{PLURAL:$1|une nouvelle fonctionnalité|de nouvelles fonctionnalités}} que nous envisageons pour $2. Veuillez les essayer et nous donner votre sentiment dessus, afin que nous puissions les améliorer d’après votre retour.',
);

/** Galician (galego)
 * @author Toliño
 */
$messages['gl'] = array(
	'mw-ui-feature-discuss' => 'conversa',
	'mw-ui-feature-user-count' => '{{PLURAL:$1|Un usuario ten|$1 usuarios teñen}} activada esta característica.',
	'prefs-betafeatures' => 'Características en probas',
	'betafeatures-desc' => 'Permite que o usuario active ou desactive as características do wiki que aínda non están listas para o seu uso xeneralizado',
	'betafeatures-toplink' => 'Beta',
	'betafeatures-auto-enroll' => 'Activar automaticamente todas as novas características en probas',
	'betafeatures-section-desc' => 'Aquí hai {{PLURAL:$1|unha característica nova|algunhas características novas}} que estamos considerando para $2. {{PLURAL:$1|Próbea|Próbeas}} e achéguenos a súa opinión, para que poidamos {{PLURAL:$1|mellorala|melloralas}}.',
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
	'prefs-betafeatures' => 'Functionalitate beta',
	'betafeatures-desc' => 'Permitte que le usator activa o disactiva functionalitate in le wiki que non ha ancora essite perfectionate',
	'betafeatures-toplink' => 'Beta',
	'betafeatures-auto-enroll' => 'Activar automaticamente tote le nove functionalitate beta',
	'betafeatures-section-desc' => 'Ecce {{PLURAL:$1|un function nove|alcun functionalitate nove}} que nos considera pro $2. Per favor essaya lo e dice nos tu opinion, de sorta que nos pote meliorar lo.',
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
	'prefs-betafeatures' => 'Funzionalità beta',
	'betafeatures-desc' => "Consente all'utente di attivare o disattivare sul wiki funzioni che non sono ancora pronte per il grande pubblico",
	'betafeatures-toplink' => 'Beta',
	'betafeatures-auto-enroll' => 'Attiva automaticamente tutte le nuove funzioni beta',
	'betafeatures-section-desc' => '{{PLURAL:$1|Questa è una nuova funzionalità|Queste sono nuove funzionalità}} che stiamo prendendo in considerazione per $2. Puoi provarle e dirci cosa ne pensi, così che possiamo migliorare in base alle vostre risposte.',
);

/** Japanese (日本語)
 * @author Shirayuki
 */
$messages['ja'] = array(
	'mw-ui-feature-discuss' => '議論',
	'mw-ui-feature-info' => '情報',
	'mw-ui-feature-user-count' => '{{PLURAL:$1|$1 人の利用者}}がこの機能を有効にしています。',
	'prefs-betafeatures' => 'ベータ版機能',
	'betafeatures-desc' => '本番環境のウィキで使用する準備がまだできていない機能について、利用者が有効化/無効化できるようにする',
	'betafeatures-toplink' => 'ベータ版',
	'betafeatures-auto-enroll' => 'すべてのベータ版機能を自動的に有効にする',
	'betafeatures-section-desc' => '$2で検討している{{PLURAL:$1|新しい機能}}があります。試用していただいてご意見をお寄せください。そのフィードバックに基づいて機能を改善します。',
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
	'prefs-betafeatures' => 'Beta-Funktiounen',
	'betafeatures-desc' => 'Léisst Benotzer Funktiounen op der Wiki aktivéieren oder desaktivéieren déi nach net fäerdeg entwéckelt sinn',
	'betafeatures-toplink' => 'Beta',
	'betafeatures-auto-enroll' => 'Automatesch all Beta-Funktiounen aschalten',
	'betafeatures-section-desc' => 'Hei {{PLURAL:$1|ass eng nei Funktioun|sinn e puer nei Funktiounen}} déi mir fir $2 proposéieren. Probéiert se w.e.g. aus an deelt eis Är Iwwerleeungen dozou mat, da kënne mir se op der Basis vun Ärem Feedback verbesseren.',
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
	'prefs-betafeatures' => 'Бета-можности',
	'betafeatures-desc' => 'Овозможува корисникот да вклучува и исклучува можности што сè уште не се воведени како стандардни',
	'betafeatures-toplink' => 'Бета',
	'betafeatures-auto-enroll' => 'Автоматски вклучувај ги сите бета-можности',
	'betafeatures-section-desc' => 'Еве {{PLURAL:$1|една нова функција што ја планираме|некои нови функции што ги планираме}} за $2. Испробајте ги и кажете ни што мислите, за да можеме да ги подобриме во склад со вашите наоѓања.',
	'betafeatures-tooltip' => 'Ви ги претставуваме новите Бета-функции! Овој нов дел со нагодувања ви овозможува да ги испробувате новите функции и да ни давате ваше мислење пред да ги пуштиме како стандардни. Пробајте некоја нова функција сега!',
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
 * @author Siebrand
 * @author TBloemink
 */
$messages['nl'] = array(
	'mw-ui-feature-discuss' => 'overleg',
	'mw-ui-feature-user-count' => '{{PLURAL:$1|Eén gebruiker heeft|$1 gebruikers hebben}} deze functie ingeschakeld.',
	'prefs-betafeatures' => 'Betafuncties',
	'betafeatures-desc' => 'Laat de gebruiker functies die in ontwikkeling zijn in- of uitschakelen',
	'betafeatures-toplink' => 'Beta',
	'betafeatures-auto-enroll' => 'Automatisch alle betafuncties inschakelen',
	'betafeatures-section-desc' => 'Hier {{PLURAL:$1|is een nieuwe functie|zijn een paar nieuwe functies}} die we overwegen voor $2. Probeert deze uit en laat ons weten wat u ervan vindt, zodat wij ze kunnen verbeteren.',
);

/** Occitan (occitan)
 * @author Cedric31
 */
$messages['oc'] = array(
	'mw-ui-feature-discuss' => 'discussion',
	'prefs-betafeatures' => 'Foncionalitats bèta',
	'betafeatures-desc' => 'Daissa l’utilizaire activar o desactivar las foncionalitats sus aqueste wiki que son pas encara prèstas per èsser generalizadas',
	'betafeatures-toplink' => 'Foncionalitats en bèta', # Fuzzy
);

/** Polish (polski)
 * @author Chrumps
 */
$messages['pl'] = array(
	'mw-ui-feature-discuss' => 'dyskusja',
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
	'prefs-betafeatures' => 'Бета-функции',
	'betafeatures-desc' => 'Позволяет пользователю включить или отключить функции, которые еще не готовы к прайм-тайм',
	'betafeatures-toplink' => 'Бета-версия',
	'betafeatures-auto-enroll' => 'Автоматически включать все новые бета-функции',
	'betafeatures-section-desc' => '{{PLURAL:$1|Появилась новая функция, которую|Появилось несколько новых функций, которые}} мы продумываем для $2. Пожалуйста, попробуйте {{PLURAL:$1|её|их}} и выскажите нам свои мысли, чтобы мы могли улучшить эти нововведения, основываясь на ваших отзывах.',
	'betafeatures-tooltip' => 'Представляем бета-функции! Этот новый раздел настроек позволит вам протестировать и оставить отзывы о новых возможностях до того, как мы их запустим для всех по умолчанию. Попробуйте что-то новое уже сейчас!',
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
	'prefs-betafeatures' => 'Betafunktioner',
	'betafeatures-desc' => 'Låter användare aktivera eller inaktivera funktioner på wikin som fortfarande inte är helt färdiga',
	'betafeatures-toplink' => 'Beta',
	'betafeatures-auto-enroll' => 'Aktivera automatiskt alla nya betafunktioner',
	'betafeatures-section-desc' => 'Här finns {{PLURAL:$1|en ny funktion|några nya funktioner}} som vi funderar på att inkludera i $2. Var god prova ut dem och ge oss dina åsikter så vi kan förbättra dem utifrån din feedback.',
);

/** Ukrainian (українська)
 * @author Andriykopanytsia
 * @author Ата
 */
$messages['uk'] = array(
	'mw-ui-feature-discuss' => 'обговорення',
	'mw-ui-feature-info' => 'інформація',
	'mw-ui-feature-user-count' => '{{PLURAL:$1|Один користувач вже увімкнув|$1 користувачі вже увімкнули|$1 користувачів вже увімкнули}} цю функцію.',
	'prefs-betafeatures' => 'Бета-функції',
	'betafeatures-desc' => 'Дозволяє користувачу вмикати чи вимикати функції вікі, все ще не готові до прайм-тайму',
	'betafeatures-toplink' => 'Бета',
	'betafeatures-auto-enroll' => 'Автоматично увімкнути усі бета-функції',
	'betafeatures-section-desc' => 'Тут  {{PLURAL:$1|є нова функція, яку|деякі нові функції, які}} ми розробляємо для  $2. Спробуйте їх і дайте нам свої думки, щоб ми могли покращити їх, виходячи з ваших відгуків.',
	'betafeatures-tooltip' => 'Представляємо бета-функції! Цей новий розділ налаштувань дозволяє тестувати і надсилати відгуки про нові можливості, перш ніж ми запустимо їх як типову поведінку у основній Медіавікі. Спробувати щось нове зараз!',
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
