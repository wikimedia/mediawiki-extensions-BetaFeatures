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
	'betafeatures-toplink' => 'Beta features',

	'betafeatures-auto-enroll' => 'Auto-enroll in all beta features',
	'betafeatures-auto-enroll-desc' => 'This is for the daring, intrepid early adopters who want to see every single experimental feature as it rolls out. Your account will automatically get the latest features when they come out. You can always come back to this page to disable the ones you decide not to use, but this will give you the most bleeding-edge experience on the site.',
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
	'betafeatures-toplink' => 'Used as link text. The link points to [[Special:Preferences]] but takes the user directly to the "Beta features" section.
{{Identical|Beta feature}}',
	'betafeatures-auto-enroll' => 'Label for a checkbox that automatically enrolls the user in all the experiments happening on the wiki.

Description for this checkbox is:
* {{msg-mw|Betafeatures-auto-enroll-desc}}',
	'betafeatures-auto-enroll-desc' => 'Description for the auto-enroll beta preference, which enrolls the user in every new feature that gets released on the wiki.

See also:
* {{msg-mw|Betafeatures-auto-enroll}} - label for the checkbox',
);

/** Asturian (asturianu)
 * @author Xuacu
 */
$messages['ast'] = array(
	'mw-ui-feature-discuss' => 'alderique',
	'mw-ui-feature-user-count' => '{{PLURAL:$1|Un usuariu activó|$1 usuarios activaron}} esta carauterística.',
	'prefs-betafeatures' => 'Carauterístiques beta',
	'betafeatures-desc' => "Permite que l'usuariu active o desactive funciones de la wiki qu'inda nun tan pa un usu xeneralizáu",
	'betafeatures-toplink' => 'Carauterístiques beta',
	'betafeatures-auto-enroll' => 'Apuntase automaticamente a toles carauterístiques beta',
	'betafeatures-auto-enroll-desc' => "Esto ye pa los pioneros arrogantes y atrevíos que quieren ver caúna de les carauterístiques esperimentales de la que se desendolquen. La so cuenta recibirá automáticamente les últimes carauterístiques de la qu'apaecen. Siempre pue volver a esta páxina pa desactivar les que nun quiera usar, pero esto dará-y la esperiencia más avanzada del sitiu.",
);

/** Bikol Central (Bikol Central)
 * @author Geopoet
 */
$messages['bcl'] = array(
	'betafeatures-desc' => 'Minatugot sa paragamit na paganahon o pauntukon an mga postura kaining wiki na dae pa man handa para sa premyadong-panahon',
	'betafeatures-toplink' => 'Beta na mga Postura',
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
	'betafeatures-toplink' => 'Perzhioù beta',
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
);

/** Welsh (Cymraeg)
 * @author Lloffiwr
 */
$messages['cy'] = array(
	'mw-ui-feature-discuss' => 'sgwrs',
	'mw-ui-feature-user-count' => "{{PLURAL:$1|Nid oes unrhyw ddefnyddiwr|Mae $1 defnyddiwr|Mae $1 ddefnyddiwr|Mae $1 defnyddiwr}} wedi galluogi'r nodwedd hon.",
	'prefs-betafeatures' => 'Nodweddion beta',
	'betafeatures-desc' => "Yn galluogi'r defnyddiwr i alluogi nodweddion ar y wici nad ydynt yn barod i'w llwyr fabwysiadu eto, neu i'w hanalluogi.",
	'betafeatures-toplink' => 'Nodweddion Beta',
	'betafeatures-auto-enroll' => "Ymuno'n awtomatig yn yr holl nodweddion beta",
);

/** German (Deutsch)
 * @author Metalhead64
 */
$messages['de'] = array(
	'mw-ui-feature-discuss' => 'Diskussion',
	'mw-ui-feature-user-count' => '{{PLURAL:$1|Ein Benutzer hat|$1 Benutzer haben}} diese Funktion aktiviert.',
	'prefs-betafeatures' => 'Beta-Funktionen',
	'betafeatures-desc' => 'Ermöglicht Benutzern das Aktivieren oder Deaktivieren von Funktionen in diesem Wiki, die sich noch in der Entwicklung befinden',
	'betafeatures-toplink' => 'Beta-Funktionen',
	'betafeatures-auto-enroll' => 'Automatisch bei allen Beta-Funktionen anmelden',
	'betafeatures-auto-enroll-desc' => 'Das ist für wagemutige, unerschrockene „Early Adopters“, die jede einzelne experimentelle Funktion in Aktion sehen wollen. Dein Benutzerkonto erhält automatisch die aktuellsten Funktionen, wenn sie erscheinen. Du kannst jederzeit zu dieser Seite zurückkehren, um solche Funktionen zu deaktivieren, die du nicht benötigst, jedoch bekommst du dadurch die neueste Technik auf der Website.',
);

/** Spanish (español)
 * @author Fitoschido
 */
$messages['es'] = array(
	'betafeatures' => 'Funciones en beta',
	'betafetaures-intro' => 'En esta página puedes activar o desactivar funciones del wiki que todavía están en beta. Estas funciones pueden no funcionar del todo o como lo has previsto; actívalas bajo tu propio riesgo.',
	'betafeatures-enable-all' => 'Activar todas las funciones en beta',
	'betafeatures-desc' => 'Permite al usuario activar o desactivar funciones del wiki que todavía no están listas',
);

/** Faroese (føroyskt)
 * @author EileenSanda
 */
$messages['fo'] = array(
	'betafeatures-desc' => 'Loyvir brúkara at gera funksjónir, sum enn ikki eru heilt klárar, virknar ella óvirknar á wikiini.',
	'betafeatures-toplink' => 'Betafunktiónir',
);

/** French (français)
 * @author Gomoko
 */
$messages['fr'] = array(
	'betafeatures' => 'Fonctionnalités en bêta',
	'betafetaures-intro' => 'Sur cette page, vous pouvez activer ou désactiver les fonctionnalités de ce wiki qui sont encore en version bêta. Ces fonctionnalités peuvent ne pas marcher aussi bien que vous y êtes habitué ; activez-le donc à vos propres risques !',
	'betafeatures-enable-all' => 'Activer toutes les fonctionnalités bêta',
	'betafeatures-desc' => 'Laisse l’utilisateur activer ou désactiver les fonctionnalités sur ce wiki qui ne sont pas encore prêtes pour être généralisées',
	'betafeatures-enable-all-desc' => 'Si vous activez ce choix, toutes les préférences de cette page, quelle que soit leur valeur actuelle, seront mises à vrai dans la base de données. À utiliser avec précaution !',
);

/** Galician (galego)
 * @author Toliño
 */
$messages['gl'] = array(
	'mw-ui-feature-discuss' => 'conversa',
	'mw-ui-feature-user-count' => '{{PLURAL:$1|Un usuario ten|$1 usuarios teñen}} activada esta característica.',
	'prefs-betafeatures' => 'Características en probas',
	'betafeatures-desc' => 'Permite que o usuario active ou desactive as características do wiki que aínda non están listas para o seu uso xeneralizado',
	'betafeatures-toplink' => 'Características en probas',
	'betafeatures-auto-enroll' => 'Activar automaticamente todas as características en probas',
	'betafeatures-auto-enroll-desc' => 'Isto é para os pioneiros audaces e intrépidos que queren botar un ollo ás características experimentais en canto saen á luz. A súa conta ha obter automaticamente as últimas características cando aparezan. Sempre pode volver a esta páxina para desactivar aquelas que non queira usar, pero isto dá a experiencia máis vangardista do sitio.',
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
	'betafeatures-toplink' => 'Functionalitate beta',
	'betafeatures-auto-enroll' => 'Activar automaticamente tote le functionalitate beta',
	'betafeatures-auto-enroll-desc' => 'Isto es pro le pioneros audace e intrepide qui vole vider cata function preliminar e experimental in action. Tu conto recipera automaticamente le ultime functionalitate al momento de prime apparentia. Tu potera sempre retornar a iste pagina pro disactivar le functiones que tu non vole usar, ma intertanto tu habera le experientia le plus vanguardista possibile in iste sito.',
);

/** Italian (italiano)
 * @author Beta16
 * @author Gianfranco
 */
$messages['it'] = array(
	'mw-ui-feature-discuss' => 'discussione',
	'mw-ui-feature-user-count' => '{{PLURAL:$1|Un utente ha|$1 utenti hanno}} abilitato questa funzione.',
	'prefs-betafeatures' => 'Funzionalità beta',
	'betafeatures-desc' => "Consente all'utente di attivare o disattivare sul wiki funzioni che non sono ancora pronte per il grande pubblico",
	'betafeatures-toplink' => 'Funzionalità beta',
	'betafeatures-auto-enroll' => 'Registrazione automatica per tutte le funzioni beta',
	'betafeatures-auto-enroll-desc' => "Questo è per tutti gli audaci e intrepidi amanti del rischio che vogliono vedere ogni singola funzione in sperimentazione così come arriva. Il tuo account otterrà automaticamente tutte le ultime funzioni in sperimentazione non appena usciranno. Potrai sempre tornare a questa pagina per disabilitare quelle che non vuoi più usare, ma questa configurazione ti darà l'esperienza più emozionante di questo sito.",
);

/** Japanese (日本語)
 * @author Shirayuki
 */
$messages['ja'] = array(
	'mw-ui-feature-discuss' => '議論',
	'mw-ui-feature-user-count' => '{{PLURAL:$1|$1 人の利用者}}がこの機能を有効にしています。',
	'prefs-betafeatures' => 'ベータ版機能',
	'betafeatures-desc' => '本番環境のウィキで使用する準備がまだできていない機能について、利用者が有効化/無効化できるようにする',
	'betafeatures-toplink' => 'ベータ版機能',
	'betafeatures-auto-enroll' => 'すべてのベータ版機能に自動的に参加',
	'betafeatures-auto-enroll-desc' => 'この設定は、実験的な機能が公開されるたびにその機能を早期に試用したい勇敢な利用者のためのものです。最新の機能が公開されると、その機能が自動的にあなたのアカウントで有効になります。この設定は、ベータ版機能を使用したくなくなった場合にこのページでいつでも無効にできますが、有効にすると開発の最前線の機能をこのサイトで体験できます。',
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
 * @author 아라
 */
$messages['ko'] = array(
	'mw-ui-feature-discuss' => '토론',
	'mw-ui-feature-user-count' => '{{PLURAL:$1|사용자 한 명|사용자 $1명}}이 이 기능을 활성화했습니다.',
	'prefs-betafeatures' => '베타 기능',
	'betafeatures-desc' => '사용자가 아직 준비가 되지 않은 위키에서 기능을 활성화하거나 비활성화할 수 있습니다',
	'betafeatures-toplink' => '베타 기능',
	'betafeatures-auto-enroll' => '모든 베타 기능에 자동 등록',
	'betafeatures-auto-enroll-desc' => '이것은 새로운 기능이 나오자마자 각각의 모든 실험적인 기능을 써보고 싶은 대담하고 용감한 얼리어답터를 위한 것입니다. 당신의 계정은 그것들이 출시되자마자 자동적으로 최신의 기능들을 받게될 것입니다. 당신은 언제라도 본 페이지로 돌아와 그 기능들을 사용하지 않도록 변경할 수 있지만,  이 기능들은 본 사이트에서 당신에게 가장 최신의 첨단 기능들을 경험하도록 해 줄 것입니다.',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Robby
 */
$messages['lb'] = array(
	'mw-ui-feature-discuss' => 'Diskussioun',
	'prefs-betafeatures' => 'Beta-Fonctiounen',
	'betafeatures-desc' => 'Léisst Benotzer Fonctiounen op der Wiki aktivéieren oder desaktivéieren déi nach net fäerdeg entwéckelt sinn',
	'betafeatures-toplink' => 'Beta-Fonctiounen',
	'betafeatures-auto-enroll' => 'Automatesch bäi alle Beta-Fonctiounen umellen',
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
	'betafeatures-toplink' => 'Бета-можности',
	'betafeatures-auto-enroll' => 'Автоматски вклучувај бета-можности',
	'betafeatures-auto-enroll-desc' => 'Ова е за смелите и бестрашни корисници што сакаат да ја видат секоја можна експериментална функција веднаш штом ќе излезе. На вашата сметка автоматски ќе се појавуваат најновите експериментални можности во моментот кога ќе станат достпни. Секогаш можете да се навратите на страницава и да изберете кои од нив не сакате да ги користите, но со ова секогаш сте во тек со најновата техника на викито.',
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
	'betafeatures-toplink' => 'Funziune de Beta',
	'betafeatures-auto-enroll' => "Auto iscrizione jndr'à le funziune beta",
	'betafeatures-auto-enroll-desc' => "Quiste jè pe le audace, indrepide ca volene cu vedene ogne funzione sperimendale cumme iesse. 'U cunde avène aggiornate automaticamende a l'urteme funziune quanne iessene. Puè sembre turnà rrete a sta pàgene pe disabbilità e non ausarle cchiù, ma quiste te dè l'esperienze cchiù estreme sus a 'u site.",
);

/** Swedish (svenska)
 * @author Skalman
 * @author WikiPhoenix
 */
$messages['sv'] = array(
	'betafeatures' => 'Betafunktioner',
	'betafetaures-intro' => 'På denna sida kan du aktivera eller inaktivera funktioner på denna wiki som fortfarande är i betastadiet. Dessa funktioner kanske inte fungerar lika bra som du är van vid, så aktivera dem på egen risk!',
	'betafeatures-enable-all' => 'Aktivera alla betafunktioner',
	'betafeatures-desc' => 'Låter användare aktivera eller inaktivera funktioner på wikin som fortfarande inte är helt färdiga',
	'betafeatures-enable-all-desc' => 'Om du aktiverar detta val kommer alla inställningar på denna sida, oavsett deras faktiska värde, sättas till "sant" i databasen. Använd försiktigt!',
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
	'betafeatures-toplink' => 'Бета-функції',
	'betafeatures-auto-enroll' => 'Автоматичний запис на всіх бета-функції',
	'betafeatures-auto-enroll-desc' => 'Це для сміливих, безстрашних перших користувачів, які хочуть бачити кожну експериментальну функцію, як тільки-но вона появляється. Ваш обліковий запис буде автоматично отримувати новітні функції, коли вони виходять. Ви завжди можете повернутися до цієї сторінки, щоб відключити те, що ви вирішили не використовувати, але це даватиме вам найпередовіший досвід на сайті.',
);

/** Simplified Chinese (中文（简体）‎)
 * @author Qiyue2001
 */
$messages['zh-hans'] = array(
	'betafeatures' => '测试特性',
	'betafetaures-intro' => '在该页面上，您可以启用或禁用此wiki上仍处于测试版的功能。这些功能可能无法使用或者使人不习惯，所以一切风险由用户自己承担。',
	'betafeatures-enable-all' => '启用测试版的所有功能',
);

/** Traditional Chinese (中文（繁體）‎)
 * @author Openerror
 */
$messages['zh-hant'] = array(
	'betafeatures' => '測試中的功能 (Beta)',
	'betafetaures-intro' => '在此頁面上，您可以啟用或禁用此 wiki 上仍然處於測試中 (Beta) 的功能。這些功能的運作可能會強差人意，因此請三思而行！',
	'betafeatures-enable-all' => '啟用所有測試中 (Beta) 的功能',
	'betafeatures-desc' => '允許使用者啟用或禁用 wiki 上 仍需要完善、除錯的功能',
);
