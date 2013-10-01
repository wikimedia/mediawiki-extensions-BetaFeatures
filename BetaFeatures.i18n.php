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
	'mw-ui-feature-user-count'      => '{{PLURAL:$1|One user has|$1 users have}} enabled this feature.',

	'prefs-betafeatures' => 'Beta features',
	'betafeatures-desc' => 'Lets user enable or disable features on the wiki that are still not ready for prime-time',
	'betafeatures-toplink' => 'Beta',

	'betafeatures-auto-enroll' => 'Automatically enable all new beta features',
	'betafeatures-section-desc' => 'Here {{PLURAL:$1|is a new feature|are some new features}} we\'re considering for $2. Please try them out and give us your thoughts, so we can improve them based on your feedback.',

	// Test messages
	'betafeatures-test-check-field' => 'blah blah blah', # do not translate or duplicate this message to other languages
	'betafeatures-test-feature-field' => 'This is a test feature - it should not show up.', # do not translate or duplicate this message to other languages
);

/** Message documentation (Message documentation)
 * @author Mark Holmquist <mtraceur@member.fsf.org>
 * @author Raymond
 * @author Shirayuki
 */
$messages['qqq'] = array(
	'mw-ui-feature-discuss' => 'Used as link text for the link which points to discussion of a feature.',
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
	'betafeatures-auto-enroll' => 'Awtomatikong magpalista sa gabos na mga posturang yaon sa beta',
	'betafeatures-auto-enroll-desc' => 'Ini para sa dating mga para-adaptar na boot mahiling an gabos na eksperimental na mga postura mantang sinda pinagbuhi. An saimong panindog awtomatikong makakapagkua nin pinakahuring mga postura kunsoarin na sinda minaluwas pa sana. Ika puwede man na makapagpili na maghali kan indibidwal na mga postura aro-atyan.',
);

/** Bengali (বাংলা)
 * @author Bellayet
 */
$messages['bn'] = array(
	'betafeatures' => 'বেটা বৈশিষ্ট্যসমূহ',
	'betafetaures-intro' => 'এই পাতায় আপনি এই বৈশিষ্ট্যগুলো সক্রিয় বা নিস্ক্রিয় করতে পারবেন যা এই উইকিতে এখনও বেটা অবস্থায় রয়েছে। এই বৈশিষ্ট্যগুলো হয়তো ঠিকমতন কাজ নাও করতে পারে, তাই নিজে ঝুঁকি নিয়ে তা সক্রিয় করুন!',
	'betafeatures-enable-all' => 'সকল বেটা বৈশিষ্ট্য সক্রিয় করো',
	'betafeatures-desc' => 'ব্যবহারকারীদের এই উইকিতে বৈশিষ্ট্য সক্রিয় বা নিস্ক্রিয় করার ব্যবস্থা করো যা এখনও প্রধান-সময়ের জন্য তৈরি নয়',
	'betafeatures-enable-all-desc' => 'আপনি যদি এটি সক্রিয় করেন, এই পাতার সকল পছন্দসমূহ ডাটাবেজে সক্রিয় হবে। সতর্কতা অবলম্বন করুন!',
);

/** Breton (brezhoneg)
 * @author Fohanno
 * @author Y-M D
 */
$messages['br'] = array(
	'mw-ui-feature-discuss' => 'kaozeadenn',
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
	'betafeatures-toplink' => 'Funcionalitats beta',
	'betafeatures-auto-enroll' => 'Apunteu-vos automàticament a totes les funcionalitats beta.',
);

/** Czech (česky)
 * @author Michaelbrabec
 * @author Mormegil
 */
$messages['cs'] = array(
	'mw-ui-feature-discuss' => 'diskuse',
	'mw-ui-feature-user-count' => 'Tuto funkci si {{PLURAL:$1|zapnul jeden uživatel|zapnuli $1 uživatelé|zapnulo $1 uživatelů}}.',
	'prefs-betafeatures' => 'Betaverze',
	'betafeatures-desc' => 'Umožňuje uživatelům zapínat a vypínat nové funkce, které zatím nejsou zcela odladěné',
	'betafeatures-toplink' => 'Funkce z betaverze',
	'betafeatures-auto-enroll' => 'Automaticky se přihlásit ke všem funkcím v betaverzi',
	'betafeatures-auto-enroll-desc' => 'Toto je určeno pro odvážné, neohrožené experimentátory, kteří chtějí vidět úplně každou pokusnou funkci hned, jakmile vznikne. Váš účet automaticky získá nejnovější funkce v okamžiku jejich zveřejnění. Kdykoli se můžete na tuto stránku vrátit a vypnout ty, které se rozhodnete nepoužívat, ale získáte tu nejžhavější technologie.', # Fuzzy
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
	'mw-ui-feature-user-count' => '{{PLURAL:$1|Ein Benutzer hat|$1 Benutzer haben}} diese Funktion aktiviert.',
	'prefs-betafeatures' => 'Beta-Funktionen',
	'betafeatures-desc' => 'Ermöglicht Benutzern das Aktivieren oder Deaktivieren von Funktionen in diesem Wiki, die sich noch in der Entwicklung befinden',
	'betafeatures-toplink' => 'Beta',
	'betafeatures-auto-enroll' => 'Automatisch alle neuen Beta-Funktionen aktivieren',
	'betafeatures-section-desc' => 'Hier {{PLURAL:$1|ist eine neue Funktion|sind einige neue Funktionen}}, die wir für $2 planen. Bitte probier sie aus und sag uns deine Meinung. So können wir sie, basierend auf deiner Rückmeldung, verbessern.',
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
	'betafeatures-toplink' => 'מאפייני בטא',
);

/** Hungarian (magyar)
 * @author Misibacsi
 */
$messages['hu'] = array(
	'betafeatures' => 'Béta funkciók',
);

/** Interlingua (interlingua)
 * @author McDutchie
 */
$messages['ia'] = array(
	'mw-ui-feature-discuss' => 'discussion',
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
	'mw-ui-feature-user-count' => '{{PLURAL:$1|Un utente ha|$1 utenti hanno}} abilitato questa funzione.',
	'prefs-betafeatures' => 'Funzionalità beta',
	'betafeatures-desc' => "Consente all'utente di attivare o disattivare sul wiki funzioni che non sono ancora pronte per il grande pubblico",
	'betafeatures-toplink' => 'Beta',
	'betafeatures-auto-enroll' => 'Attiva automaticamente tutte le nuove funzioni beta',
);

/** Japanese (日本語)
 * @author Shirayuki
 */
$messages['ja'] = array(
	'mw-ui-feature-discuss' => '議論',
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
	'betafeatures' => 'Beta мүмкіндік',
	'betafeatures-enable-all' => 'Барлық beta мүмкіндіктерді қосу',
);

/** Korean (한국어)
 * @author AlexPark
 * @author Kwj2772
 * @author 아라
 */
$messages['ko'] = array(
	'mw-ui-feature-discuss' => '토론',
	'mw-ui-feature-user-count' => '{{PLURAL:$1|사용자 한 명|사용자 $1명}}이 이 기능을 활성화했습니다.',
	'prefs-betafeatures' => '베타 기능',
	'betafeatures-desc' => '사용자가 아직 준비가 되지 않은 위키에서 기능을 활성화하거나 비활성화할 수 있습니다',
	'betafeatures-toplink' => '베타',
	'betafeatures-auto-enroll' => '모든 베타 기능에 자동 등록',
	'betafeatures-auto-enroll-desc' => '이것은 새로운 기능이 나올 때마다 각각의 모든 실험적인 기능을 써보고 싶은 얼리어답터를 위한 것입니다. 당신의 계정은 그것들이 출시되자마자 자동적으로 최신의 기능들을 이용할 수 있게 될 것입니다. 당신은 추후에 각각의 기능들을 사용하지 않도록 변경할 수 있습니다',
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
	'betafeatures-auto-enroll' => 'Automatice omnibus facultatibus experimentalibus utere',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Robby
 * @author Soued031
 */
$messages['lb'] = array(
	'mw-ui-feature-discuss' => 'Diskussioun',
	'mw-ui-feature-user-count' => '{{PLURAL:$1|Ee Benotzer huet|$1 Benotzer hunn}} dës Funktioun aktivéiert.',
	'prefs-betafeatures' => 'Beta-Funktiounen',
	'betafeatures-desc' => 'Léisst Benotzer Funktiounen op der Wiki aktivéieren oder desaktivéieren déi nach net fäerdeg entwéckelt sinn',
	'betafeatures-toplink' => 'Beta',
	'betafeatures-auto-enroll' => 'Automatesch all Beta-Funktiounen aschalten',
);

/** Lithuanian (lietuvių)
 * @author Eitvys200
 */
$messages['lt'] = array(
	'betafeatures' => 'Beta Funkcijos',
	'betafeatures-enable-all' => 'Įgalinti visas beta funkcijas',
);

/** Macedonian (македонски)
 * @author Bjankuloski06
 */
$messages['mk'] = array(
	'mw-ui-feature-discuss' => 'разговор',
	'mw-ui-feature-user-count' => 'Функцијата ја {{PLURAL:$1|има вклученоо еден корисник|имаат вклучено $1 корисници}}.',
	'prefs-betafeatures' => 'Бета-можности',
	'betafeatures-desc' => 'Овозможува корисникот да вклучува и исклучува можности што сè уште не се воведени како стандардни',
	'betafeatures-toplink' => 'Бета',
	'betafeatures-auto-enroll' => 'Автоматски вклучувај ги сите бета-можности',
	'betafeatures-section-desc' => 'Еве {{PLURAL:$1|една нова функција што ја планираме|некои нови функции што ги планираме}} за $2. Испробајте ги и кажете ни што мислите, за да можеме да ги подобриме во склад со вашите наоѓања.',
);

/** Malayalam (മലയാളം)
 * @author Praveenp
 */
$messages['ml'] = array(
	'betafeatures' => 'പരീക്ഷണാടിസ്ഥാനത്തിലുള്ള (ബീറ്റ) സൗകര്യങ്ങൾ',
	'betafeatures-enable-all' => 'പരീക്ഷണാടിസ്ഥാനത്തിലുള്ള (ബീറ്റ) സൗകര്യങ്ങൾ സജ്ജമാക്കുക',
);

/** Marathi (मराठी)
 * @author V.narsikar
 */
$messages['mr'] = array(
	'betafeatures' => 'बीटा तोंडवळा',
	'betafetaures-intro' => 'या विकिच्या पानावर,जे अद्याप चाचणी स्थितीत आहेत, ते फिचर्स आपण  सक्षम किंवा अक्षम करू शकता.हे फिचर्स, आपण त्यांचा जो पर्यंत सराव करत नाहीत तोवर ते बरोबर वाटणार नाहीत.म्हणुन आपल्या जबाबदारीवर सक्षम करा!',
	'betafeatures-enable-all' => 'बीटा फिचर्स सक्षम करा',
	'betafeatures-desc' => 'सदस्यास,या विकिवर कोणतेही फिचर्स जे अद्याप पूर्ण सुविधांसह परिपूर्ण नाहीत,सक्षम किंवा अक्षम करू देते',
	'betafeatures-enable-all-desc' => "जर आपण ही निवड शक्य केली तर,या पानातील सर्व पसंती,त्याच्या काहीही मुल्याव्यतिरिक्त, डाटाबेस मध्ये 'ट्रू' म्हणुन नोंदविल्या जातील.हे काळजीपूर्वक वापरा!",
);

/** Dutch (Nederlands)
 * @author TBloemink
 */
$messages['nl'] = array(
	'mw-ui-feature-discuss' => 'overleg',
	'mw-ui-feature-user-count' => '{{PLURAL:$1|Éen gebruiker heeft|$1 gebruikers hebben}} deze functie ingeschakeld.',
	'prefs-betafeatures' => 'Betafunctionaliteit',
	'betafeatures-desc' => 'Laat de gebruiker functies op de wiki die nog niet gelanceerd zijn in- of uitschakelen',
	'betafeatures-toplink' => 'Beta',
	'betafeatures-auto-enroll' => 'Schakel automatisch alle beta-functies in',
	'betafeatures-section-desc' => 'Hier {{PLURAL:$1|is een nieuwe functie|zijn een paar functies}} waarvan we overwegen deze te gebruiken op $2. Probeert u deze alstublieft uit en laat ons weten wat u ervan vindt, zodat wij deze kunnen verbeteren.',
);

/** Occitan (occitan)
 * @author Cedric31
 */
$messages['oc'] = array(
	'mw-ui-feature-discuss' => 'discussion',
	'prefs-betafeatures' => 'Foncionalitats bèta',
	'betafeatures-desc' => 'Daissa l’utilizaire activar o desactivar las foncionalitats sus aqueste wiki que son pas encara prèstas per èsser generalizadas',
	'betafeatures-toplink' => 'Foncionalitats en bèta',
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
	'betafeatures-toplink' => 'Funções em Beta',
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
	'mw-ui-feature-user-count' => '$1 {{PLURAL:$1|пользователь включил|пользователя включили|пользователей включили}} эту функцию.',
	'prefs-betafeatures' => 'Бета-функции',
	'betafeatures-toplink' => 'Бета-версия',
	'betafeatures-auto-enroll' => 'Автоматически включать все новые бета-функции',
);

/** Swedish (svenska)
 * @author Skalman
 * @author WikiPhoenix
 */
$messages['sv'] = array(
	'betafeatures-desc' => 'Låter användare aktivera eller inaktivera funktioner på wikin som fortfarande inte är helt färdiga',
	'betafeatures-toplink' => 'Beta',
);

/** Ukrainian (українська)
 * @author Andriykopanytsia
 * @author Ата
 */
$messages['uk'] = array(
	'mw-ui-feature-discuss' => 'обговорення',
	'mw-ui-feature-user-count' => '{{PLURAL:$1|Один користувач вже увімкнув|$1 користувачі вже увімкнули|$1 користувачів вже увімкнули}} цю функцію.',
	'prefs-betafeatures' => 'Бета-функції',
	'betafeatures-desc' => 'Дозволяє користувачу вмикати чи вимикати функції вікі, все ще не готові до прайм-тайму',
	'betafeatures-toplink' => 'Бета',
	'betafeatures-auto-enroll' => 'Автоматично увімкнути усі бета-функції',
	'betafeatures-section-desc' => 'Тут  {{PLURAL:$1|є нова функція, яку|деякі нові функції, які}} ми розробляємо для  $2. Спробуйте їх і дайте нам свої думки, щоб ми могли покращити їх, виходячи з ваших відгуків.',
);

/** Wu (吴语)
 * @author 十弌
 */
$messages['wuu'] = array(
	'betafeatures-toplink' => '試驗版本',
);

/** Simplified Chinese (中文（简体）‎)
 * @author Fantasticfears
 * @author Liuxinyu970226
 * @author Qiyue2001
 */
$messages['zh-hans'] = array(
	'mw-ui-feature-discuss' => '讨论',
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
