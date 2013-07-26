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
	'mw-ui-feature-discuss' => 'Link to discussion of a feature.',
	'mw-ui-feature-user-count' => 'How many users have enabled a particular feature on the site.',

	'prefs-betafeatures' => 'Title of the preference section for beta features.',

	'betafeatures-auto-enroll' => 'Label for a checkbox that automatically enrolls the user in all the experiments happening on the wiki.',
	'betafeatures-auto-enroll-desc' => 'Description for the auto-enroll beta preference, which enrolls the user in every new feature that gets released on the wiki.',

	'betafeatures-enable-all' => 'Label for a checkbox that enables all beta features on the wiki

See also:
* {{msg-mw|Betafeatures-enable-all-desc}}',
	'betafeatures-desc' => '{{desc|name=Beta Features|url=http://www.mediawiki.org/wiki/Extension:BetaFeatures}}',
	'betafeatures-enable-all-desc' => 'Description for the enable-all beta preference.

See also:
* {{msg-mw|Betafeatures-enable-all}}',
	'betafeatures-toplink' => 'Link that goes next to the link to Special:Preferences but takes the user directly to the BetaFeatures section.',
);

/** Asturian (asturianu)
 * @author Xuacu
 */
$messages['ast'] = array(
	'betafeatures' => 'Carauterístiques beta',
	'betafetaures-intro' => "Nesta páxina pue activar o desactivar les funciones d'esta wiki qu'inda tan en fase beta. Estes carauterístiques seique nun funcionen tán bien como lo demás, ¡activeles baxo la so responsabilidá!",
	'betafeatures-enable-all' => 'Activar toles funciones beta',
	'betafeatures-desc' => "Permite que l'usuariu active o desactive funciones de la wiki qu'inda nun tan pa un usu xeneralizáu",
	'betafeatures-enable-all-desc' => 'Si activa esto, toles preferencies d\'esta páxina, independientemente del so valor auténticu, pondránse como "true" na base de datos. ¡Úselo con cuidáu!',
);

/** Bikol Central (Bikol Central)
 * @author Geopoet
 */
$messages['bcl'] = array(
	'betafeatures' => 'Beta na mga Postura',
	'betafetaures-intro' => 'Sa laog kaining pahina ika makakapagpagana or makakapagpauntok sa mga postura na yaon digde sa wiki na yaon pa giraray sa beta.
Ining mga postura mapuwedeng dae matrabaho siring sa paggamit mo kaidto, kaya paganaha uyon sa saimong sadiring kaagyatan!',
	'betafeatures-enable-all' => 'Paganaha an gabos na mga posturang beta',
	'betafeatures-desc' => 'Minatugot sa paragamit na paganahon o pauntukon an mga postura kaining wiki na dae pa man handa para sa premyadong-panahon',
	'betafeatures-enable-all-desc' => 'Kun paganahon ining pinili mo, gabos na mga kamuyahan mo sa pahinang ini, dawa ano pa man saindang aktuwal na kahalagahan, panunuytuyon na totoo sa laog nin datos-sarayan. Gamita na igwang pag-iingat!',
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
 * @author Y-M D
 */
$messages['br'] = array(
	'betafeatures' => 'Perzhioù beta',
	'betafeatures-enable-all' => 'Gweredekaat an holl berzhioù beta',
);

/** Czech (česky)
 * @author Michaelbrabec
 * @author Mormegil
 */
$messages['cs'] = array(
	'betafeatures' => 'Funkce z betaverze',
	'betafeatures-enable-all' => 'Povolit všechny funkce betaverze',
);

/** German (Deutsch)
 * @author Metalhead64
 */
$messages['de'] = array(
	'betafeatures' => 'Beta-Funktionen',
	'betafetaures-intro' => 'Auf dieser Seite kannst du Funktionen in diesem Wiki aktivieren oder deaktivieren, die sich in der Beta-Phase befinden. Diese Funktionen funktionieren nicht so, wie du es gewohnt bist. Aktiviere sie auf dein eigenes Risiko!',
	'betafeatures-enable-all' => 'Alle Beta-Funktionen aktivieren',
	'betafeatures-desc' => 'Ermöglicht Benutzern das Aktivieren oder Deaktivieren von Funktionen in diesem Wiki, die sich noch in der Entwicklung befinden',
	'betafeatures-enable-all-desc' => 'Falls du diese Option aktivierst, werden alle Einstellungen auf dieser Seite, unabhängig von ihrem tatsächlichen Wert, in der Datenbank auf „wahr“ gesetzt. Mit Vorsicht verwenden!',
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
	'betafeatures' => 'Betafunktiónir',
	'betafetaures-intro' => 'Á hesi síðu kanst tú gera funksjónir, sum enn eru í beta, virknar ella óvirknar á hesi wiki. Hesar funksjónir virka møguliga ikki eins væl og tú ert vanur/von við, so aktivering verður undir egnari ábyrgd!',
	'betafeatures-enable-all' => 'Ger allar beta funksjónir virknar',
	'betafeatures-desc' => 'Loyvir brúkara at gera funksjónir, sum enn ikki eru heilt klárar, virknar ella óvirknar á wikiini.',
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
	'betafeatures' => 'Características en probas',
	'betafetaures-intro' => 'Nesta páxina pode activar ou desactivar as características deste wiki que aínda están en probas. Estas características poden non funcionar todo o ben que deberan. Úseas baixo a súa responsabilidade!',
	'betafeatures-enable-all' => 'Activar todas as características en probas',
	'betafeatures-desc' => 'Permite que o usuario active ou desactive as características do wiki que aínda non están listas para o seu uso xeneralizado',
	'betafeatures-enable-all-desc' => 'Se activa isto, todas as preferencias desta páxina, independentemente do seu valor real, quedarán definidas como "true" na base de datos. Vaia con tino!',
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
	'betafeatures' => 'Functionalitate beta',
	'betafetaures-intro' => 'Iste pagina permitte activar o disactivar le functionalitate in iste wiki que es ancora in stadio beta.
Iste functionalitate pote non functionar tanto ben como tu lo expectarea, dunque, activa lo a tu proprie disco!',
	'betafeatures-enable-all' => 'Activar tote le functionalitate beta',
	'betafeatures-desc' => 'Permitte que le usator activa o disactiva functionalitate in le wiki que non ha ancora essite perfectionate',
	'betafeatures-enable-all-desc' => 'Si tu activa iste option, tote le preferentias in iste pagina, independentemente de lor valor real, essera mittite a ver in le base de datos. Usar con prudentia!',
);

/** Italian (italiano)
 * @author Beta16
 */
$messages['it'] = array(
	'betafeatures' => 'Funzionalità beta',
	'betafetaures-intro' => 'Su questa pagina è possibile attivare o disattivare funzionalità su questo wiki che sono ancora in fase beta. Queste caratteristiche potrebbero non funzionare come dovrebbero, perciò abilitale a tuo rischio!',
	'betafeatures-enable-all' => 'Abilita tutte le funzionalità beta',
	'betafeatures-desc' => "Consente all'utente di attivare o disattivare sul wiki funzioni che non sono ancora pronte per il grande pubblico",
	'betafeatures-enable-all-desc' => 'Se si attiva questa opzione, tutte le preferenze su questa pagina, indipendentemente dal loro effettivo valore, verranno impostate come abilitate nel database. Usa con cautela!',
);

/** Japanese (日本語)
 * @author Shirayuki
 */
$messages['ja'] = array(
	'betafeatures' => 'ベータ版機能',
	'betafetaures-intro' => 'このページでは、まだベータ版の機能をこのウィキで有効化/無効化できます。これらの機能は正常に動作しないおそれがあるため、自己責任で有効化してください。',
	'betafeatures-enable-all' => 'ベータ版機能をすべて有効にする',
	'betafeatures-desc' => '本番環境のウィキで使用する準備がまだできていない機能について、利用者が有効化/無効化できるようにする',
	'betafeatures-enable-all-desc' => 'これを有効にすると、このページのすべての設定項目について、実際の値にかかわらず、データベース内で true に設定されます。自己責任で使用してください!',
);

/** Kazakh (Cyrillic script) (қазақша (кирил)‎)
 * @author Arystanbek
 */
$messages['kk-cyrl'] = array(
	'betafeatures' => 'Beta мүмкіндік',
	'betafeatures-enable-all' => 'Барлық beta мүмкіндіктерді қосу',
);

/** Korean (한국어)
 * @author 아라
 */
$messages['ko'] = array(
	'betafeatures' => '베타 기능',
	'betafetaures-intro' => '이 문서에서 아직 베타인 이 위키의 기능을 활성화하거나 비활성화할 수 있습니다. 이러한 기능은 제대로 작동하지 않을 수 있기 때문에, 자기 책임으로 활성화하세요!',
	'betafeatures-enable-all' => '모든 베타 기능 활성화',
	'betafeatures-desc' => '사용자가 아직 준비가 되지 않은 위키에서 기능을 활성화하거나 비활성화할 수 있습니다',
	'betafeatures-enable-all-desc' => '이 선텍을 활성화하면 이 문서의 모든 환경 설정은 실제 값에 상관 없이, 데이터베이스에서 참으로 설정됩니다. 주의해서 사용하세요!',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Robby
 */
$messages['lb'] = array(
	'betafeatures' => 'Beta-Fonctiounen',
	'betafetaures-intro' => 'Op dëser Säit kënnt Dir Fonctiounen aschalten oder ausschalten déi eréischt an der Beta-Phase sinn. Dës Fonctioune fonctionnéieren eventuell net esou wéi Dir et gewinnt sidd, dofir aktivéiert Dir se op Ären eegene Risiko!',
	'betafeatures-enable-all' => 'All Beta-Fonctiounen aktivéieren',
	'betafeatures-desc' => 'Léisst Benotzer Fonctiounen op der Wiki aktivéieren oder desaktivéieren déi nach net fäerdeg entwéckelt sinn',
	'betafeatures-enable-all-desc' => 'Wann Dir dës Optioun aschalt da ginn all Astellungen op dëser Säit, onofhängeg vun hirem aktuelle Wäert, an der Datebank op "wouer" gesat. Virsiichteg benotzen!',
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
	'betafeatures' => 'Бета-можности',
	'betafetaures-intro' => 'На страницава можете да вклучувате и исклучувате можности на викито кои сè уште се во бета. Може да не работат сосема како што треба, па затоа користете ги на ваш ризик!',
	'betafeatures-enable-all' => 'Вклучи ги сите бета-можности',
	'betafeatures-desc' => 'Овозможува корисникот да вклучува и исклучува можности што сè уште не се воведени како стандардни',
	'betafeatures-enable-all-desc' => 'Доколку ја изберете оваа можност, сите поставки на страницава, без оглед на нивната фактичка вредност, ќе бидат ставени на „точно“ во базата. Користете ги претпазливо!',
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
	'betafeatures' => 'Foncionalitats en bèta',
	'betafetaures-intro' => "Sus aquesta pagina, podètz activar o desactivar las foncionalitats d'aqueste wiki que son encara en version bèta. Es possible qu'aquelas foncionalitats foncionen pas tant plan coma i sètz acostumat ; activatz-lo doncas a vòstres pròpris risques !",
	'betafeatures-enable-all' => 'Activar totas las foncionalitats bèta',
	'betafeatures-desc' => 'Daissa l’utilizaire activar o desactivar las foncionalitats sus aqueste wiki que son pas encara prèstas per èsser generalizadas',
	'betafeatures-enable-all-desc' => "Se activatz aquesta causida, totas las preferéncias d'aquesta pagina, quina que siá lor valor actuala, seràn mesas a verai dins la banca de donadas. D'utilizar amb precaucion !",
);

/** Brazilian Portuguese (português do Brasil)
 * @author Fúlvio
 */
$messages['pt-br'] = array(
	'betafeatures' => 'Funções em Beta',
	'betafetaures-intro' => 'Nesta página, você pode ativar ou desativar funções desta wiki que ainda estão em fase beta. Estas funções podem não funcionarem como o previsto, por isso use-as por sua própria conta e risco!',
	'betafeatures-enable-all' => 'Ativar todas as funções em beta',
	'betafeatures-desc' => 'Permite ao usuário ativar ou desativar funções da wiki que ainda não estão prontas para serem ativamente usadas',
	'betafeatures-enable-all-desc' => 'Se você ativar esta opção, todas as preferências desta página, independentemente de seus valores atuais, será definido como "true" no banco de dados. Use com cuidado!',
);

/** tarandíne (tarandíne)
 * @author Joetaras
 */
$messages['roa-tara'] = array(
	'betafeatures' => 'Funziune de Beta',
	'betafetaures-intro' => "Sus a sta pàgene puè abbilità o disabbilità le funziune sus a sta uicchi ca sò angore beta. Chiste funziune non ge ponne fatià cumme vue tu, ce l'abbilite jè a rischie tune!",
	'betafeatures-enable-all' => 'Abbilite tutte le funziune beta',
	'betafeatures-desc' => "Lasse l'utende a abbilità o disabbilità le funziune sus 'a ucchi ca non ge so angore pronde pa prima vote",
	'betafeatures-enable-all-desc' => "Ce tu abbilite sta scelte, tutte le preferenze sus a sta pàgene, senze uardanne 'a fatìa toje, avènene mise a true sus a 'u database. Ause cu attenzione!",
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
 * @author Ата
 */
$messages['uk'] = array(
	'betafeatures' => 'Бета-функції',
	'betafetaures-intro' => 'На цій сторінці ви можете увімкнути чи вимкнути функції цієї вікі, що все ще у стадії бета. Ці функції можуть не працювати так, як ви звикли, тому вмикайте їх на власний ризик!',
	'betafeatures-enable-all' => 'Увімкнути усі бета-функції',
	'betafeatures-desc' => 'Дозволяє користувачу вмикати чи вимикати функції вікі, все ще не готові до прайм-тайму',
	'betafeatures-enable-all-desc' => 'Якщо ви обираєте цей варіант, усі налаштування цієї сторінки, не залежно від їхнього значення на даний момент, будуть встановлені як true у базі даних. Використовуйте обережно!',
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
