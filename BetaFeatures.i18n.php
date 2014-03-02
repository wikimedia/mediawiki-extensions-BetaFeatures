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
 * BetaFeatures extension internationalisation
 *
 * @file
 * @ingroup Extensions
 * @copyright 2013 Mark Holmquist and others; see AUTHORS
 * @license GNU General Public License version 2 or later
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
	'betafeatures-section-desc' => 'Here {{PLURAL:$1|is a new feature|are some new features}} we\'re considering for {{SITENAME}}. Please try {{PLURAL:$1|it|them}} out and give us your thoughts, so we can improve {{PLURAL:$1|it|them}} based on your feedback.',

	// Test messages
	'betafeatures-test-check-field' => 'blah blah blah', # do not translate or duplicate this message to other languages
	'betafeatures-test-feature-field' => 'This is a test feature - it should not show up.', # do not translate or duplicate this message to other languages

	'betafeatures-tooltip' => 'Introducing Beta Features! This new preferences section lets you test and give feedback about new features before we launch them as default behavior. Try out something new now!',

	'betafeatures-about-betafeatures' => 'About Beta Features',
	'betafeatures-discuss-betafeatures' => 'Leave feedback',
	'betafeatures-extension-type' => 'Beta features',
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
* $1 - number of beta features',
	'betafeatures-test-check-field' => 'Used as label for the checkbox, used to test the extension.

The description for this checkbox is {{msg-mw|Betafeatures-test-feature-field}}.',
	'betafeatures-test-feature-field' => 'Used as description for the checkbox, used to test the extension.

The label for the checkbox is {{msg-mw|Betafeatures-test-check-field}}.',
	'betafeatures-tooltip' => 'A tooltip meant to advertise the existence of the BetaFeatures preferences page the first time a user sees it. Only shown once, meant to be a call to action. "Introducing" is jargon meaning "we are explaining you", you can avoid translating it in your language if it doesn\'t fit.',
	'betafeatures-about-betafeatures' => 'Text for a link to a page describing what Beta Features is, what the project is for, etc.',
	'betafeatures-discuss-betafeatures' => 'Text for a link to a page where users can leave feedback about Beta Features.
{{Identical|Leave feedback}}',
	'betafeatures-extension-type' => 'Section header on [[Special:Version]].
{{Identical|Beta feature}}',
);

/** Arabic (العربية)
 * @author Kuwaity26
 * @author زكريا
 * @author مشعل الحربي
 */
$messages['ar'] = array(
	'mw-ui-feature-discuss' => 'نقاش',
	'mw-ui-feature-info' => 'معلومات',
	'mw-ui-feature-user-count' => '{{PLURAL:$1|لم يفعل أي مستخدم|مستخدم واحد فعل|مستخدمان فعلا|$1 مستخدمين فعلوا|$1 مستخدما فعلوا|$1 مستخدم فعلوا}} هذه الميزة.',
	'mw-ui-feature-requirements-betafeatures' => 'تتطلب هذه الميزة تفعيل {{PLURAL:$1||الميزة التالية|الميزتين التاليتن|المزايا التالية}}:',
	'mw-ui-feature-requirements-browser' => '{{PLURAL:$1||المتصفح التالي غير مدعوم|المتصفحان التاليان غير مدعومين|المتصفحات التالية غير مدعومة}}:',
	'mw-ui-feature-requirements-javascript' => 'هذه الميزة تتطلب جافاسكريبت.',
	'mw-ui-feature-requirements-skins' => 'هذه الميزة تعمل فقط مع {{PLURAL:$1||المظهر التالي|المظهرين التاليين|المظاهر التالية}}:',
	'prefs-betafeatures' => 'مزايا تجريبية',
	'betafeatures-desc' => 'تسمح للمستخدم بتمكين أو تعطيل المزايا غير الجاهزة تمامًا لتشغيلها على الويكي',
	'betafeatures-toplink' => 'تجريبي',
	'betafeatures-auto-enroll' => 'تمكين كافة المزايا التجريبية الجديدة تلقائيا',
	'betafeatures-section-desc' => 'هنا {{PLURAL:$1|ميزة جديدة|مزايا جديدة}} نخطط لإضافتها إلى {{SITENAME}}. نرجو تجربتها وتزويدنا بآرائك حولها، لنتمكن من تحسينها حسب تعليقاتكم.',
	'betafeatures-tooltip' => 'نقدم لكم المزايا التجريبية! يسمح لك قسم التفضيلات الجديد هذا باختبار وإعطاء رأيك في المزايا الجديدة قبل أن نطلقها بشكل افتراضي. جربوا شيئا جديدا الآن!',
	'betafeatures-about-betafeatures' => 'عن المزايا التجريبية',
	'betafeatures-discuss-betafeatures' => 'إعطاء رأيك',
);

/** Assamese (অসমীয়া)
 * @author Gitartha.bordoloi
 */
$messages['as'] = array(
	'betafeatures-toplink' => 'বিটা',
);

/** Asturian (asturianu)
 * @author Fitoschido
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
	'betafeatures-section-desc' => 'Est{{PLURAL:$1|a ye una carauterística nueva|es son dalgunes carauterístiques nueves}} que tamos considerando pa {{SITENAME}}. {{PLURAL:$1|Pruébala|Pruébales}} y dinos lo que pienses pa que podamos {{PLURAL:$1|ameyorarla|ameyorarles}} basandonos nes tos impresiones.',
	'betafeatures-tooltip' => '¡Presentamos les carauterístiques Beta! Esta nueva seición de les preferencies permite-y probar y comentar les carauterístiques nueves enantes de que les llancemos de mou predetermináu. ¡Pruebe agora daqué nuevo!',
	'betafeatures-about-betafeatures' => 'Tocante a les carauterístiques Beta',
	'betafeatures-discuss-betafeatures' => 'Dexar un comentariu',
	'betafeatures-extension-type' => 'Carauterístiques beta',
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
	'betafeatures-section-desc' => 'Uya {{PLURAL:$1|an sarong baguhong estima|an nagkapirang baguhon na mga estima}} na samuyang kinokonsidera para sa {{SITENAME}}. Tabi man prubari sinda asin itao samuya an saimong mga kaisipan, na tangani baya samuya pang mapakarhay sinda na pinagbase sa saimong balik-simbag.',
	'betafeatures-tooltip' => 'Ipinapabisto an Beta na mga Estima! Ining baguhon na seksyon nin mga kamuyahan minatugot saimo na prubaran asin magtao nin balik-simbag mapanungod sa baguhong mga estima bago mi ipaglansar sinda bilang panugmad na kagawian. Magprubar nin sarong baguhon ngunyan!',
	'betafeatures-about-betafeatures' => 'Mapanungod sa Beta na mga Estima',
	'betafeatures-discuss-betafeatures' => 'Magwalat nin balik-simbag',
);

/** Belarusian (Taraškievica orthography) (беларуская (тарашкевіца)‎)
 * @author Red Winged Duck
 * @author Renessaince
 */
$messages['be-tarask'] = array(
	'mw-ui-feature-discuss' => 'абмеркаваньне',
	'mw-ui-feature-info' => 'інфармацыя',
	'mw-ui-feature-user-count' => '{{PLURAL:$1|Адзін удзельнік уключыў|$1 удзельнікі ўключылі|$1 удзельнікаў уключылі|0=Ніхто з удзельнікаў не ўключыў}} гэтую магчымасьць.',
	'mw-ui-feature-requirements-betafeatures' => 'Для гэтай магчымасьці неабходна ўключыць {{PLURAL:$1|наступную магчымасьць|наступныя магчымасьці}}:',
	'mw-ui-feature-requirements-browser' => '{{PLURAL:$1|Гэты браўзэр|Гэтыя браўзэры}} не падтрымліваюцца:',
	'mw-ui-feature-requirements-javascript' => 'Гэтая магчымасьць патрабуе JavaScript.',
	'mw-ui-feature-requirements-skins' => 'Гэтая магчымасьць працуе толькі пад {{PLURAL:$1|наступнай тэмай|наступнымі тэмамі}}:',
	'prefs-betafeatures' => 'Тэставыя магчымасьці',
	'betafeatures-desc' => 'Дазваляе карыстальніку ўключаць ці адключаць магчымасьці, якія яшчэ цалкам не дапрацаваныя',
	'betafeatures-toplink' => 'Бэта',
	'betafeatures-auto-enroll' => 'Аўтаматычна ўключаць усе новыя тэставыя магчымасьці',
	'betafeatures-section-desc' => '{{PLURAL:$1|1=Зьявілася новая магчымасьць|Зьявіліся новыя магчымасьці}}, якія мы плянуем для {{SITENAME}}. Калі ласка, паспрабуйце {{PLURAL:$1|1=яе|іх}} і выкажыце нам сваё меркаваньне, каб мы палепшылі {{PLURAL:$1|1=яе|іх}} паводле Вашых заўвагаў.',
	'betafeatures-tooltip' => 'Прадстаўляем тэставыя магчымасьці! Новая закладка ў наладах дазваляе Вам паспрабаваць і ацаніць новыя функцыі перш, чым мы запусьцім ім для ўсіх дапомна. Паспрабуйце ўжо цяпер!',
	'betafeatures-about-betafeatures' => 'Пра тэставыя магчымасьці',
	'betafeatures-discuss-betafeatures' => 'Пакінуць водгук',
);

/** Bulgarian (български)
 * @author DCLXVI
 */
$messages['bg'] = array(
	'mw-ui-feature-discuss' => 'обсъждане',
	'mw-ui-feature-info' => 'информация',
	'mw-ui-feature-user-count' => '{{PLURAL:$1|Един потребител е активирал|$1 потребители са активирали|0=Нито един потребител не е активирал}} тази функционалност.',
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
	'mw-ui-feature-user-count' => '{{PLURAL:$1|একজন ব্যবহারকারী|$1 জন ব্যবহারকারী|0=কোন ব্যবহারকারী}} এই বৈশিষ্ট্য সক্রিয় {{PLURAL:$1|করেছেন|0=করেন নি}}।',
	'mw-ui-feature-requirements-betafeatures' => 'এই বৈশিষ্ট্য সক্রিয় করতে নিম্নলিখিত {{PLURAL:$1|বৈশিষ্ট্য|বৈশিষ্ট্যগুলি}} সক্রিয় করতে হবে:',
	'mw-ui-feature-requirements-browser' => 'নিম্নলিখিত {{PLURAL:$1|ব্রাউজার|ব্রাউজারগুলি}} সমর্থিত নয়:',
	'mw-ui-feature-requirements-javascript' => 'এই বৈশিষ্ট্যের জন্য জাভাস্ক্রিপ্ট প্রয়োজন।',
	'prefs-betafeatures' => 'বেটা বৈশিষ্ট্যসমূহ',
	'betafeatures-desc' => 'ব্যবহারকারীদের এই উইকিতে বৈশিষ্ট্য সক্রিয় বা নিস্ক্রিয় করার ব্যবস্থা করো যা এখনও প্রধান-সময়ের জন্য তৈরি নয়',
	'betafeatures-toplink' => 'বেটা',
	'betafeatures-auto-enroll' => 'স্বয়ংক্রিয়ভাবে সমস্ত নতুন বেটা বৈশিষ্ট্য সক্রিয় করো',
	'betafeatures-section-desc' => 'এখানে {{PLURAL:$1|একটি|কিছু}} নতুন বৈশিষ্ট্য রয়েছে যা আমরা {{SITENAME}}-এর জন্য বিবেচনা করছি। দয়া করে {{PLURAL:$1|এটি|এগুলি}} একবার ব্যবহার করুন এবং আপনার চিন্তাভাবনা আমাদের জানান, তাহলে আমরা আপনার মতামতের উপর ভিত্তি করে {{PLURAL:$1|এটি|তাদের}} উন্নত করতে পারব।',
	'betafeatures-about-betafeatures' => 'বেটা বৈশিষ্ট্যসমূহ সম্পর্কে',
	'betafeatures-discuss-betafeatures' => 'প্রতিক্রিয়া জানান',
	'betafeatures-extension-type' => 'বেটা বৈশিষ্ট্যসমূহ',
);

/** Breton (brezhoneg)
 * @author Fohanno
 * @author Y-M D
 */
$messages['br'] = array(
	'mw-ui-feature-discuss' => 'kaozeadenn',
	'mw-ui-feature-info' => 'titouroù',
	'mw-ui-feature-user-count' => "{{PLURAL:$1|Un implijer en deus|$1 implijer o deus}} gweredekaet an arc'hweladur-mañ.",
	'mw-ui-feature-requirements-browser' => "Ar {{PLURAL:$1|merder-mañ ne c'haller ket ober gantañ|merdeerien-mañ ne c'haller ket ober ganto}} :",
	'mw-ui-feature-requirements-javascript' => "Ezhomm zo eus JavaScript evit an arc'heladur-mañ.",
	'prefs-betafeatures' => 'Perzhioù beta',
	'betafeatures-toplink' => 'Beta',
	'betafeatures-auto-enroll' => "Gweredekaat ent emgefre an holl arc'heladurioù beta nevez",
	'betafeatures-about-betafeatures' => "Diwar-benn an arc'hweladurioù beta",
	'betafeatures-discuss-betafeatures' => 'Ober un evezhiadenn',
);

/** Catalan (català)
 * @author Alvaro Vidal-Abarca
 * @author Fitoschido
 * @author QuimGil
 * @author Vriullop
 */
$messages['ca'] = array(
	'mw-ui-feature-discuss' => 'discussió',
	'mw-ui-feature-info' => 'informació',
	'mw-ui-feature-user-count' => '{{PLURAL:$1|Un usuari ha|$1 usuaris han|0=Cap usuari ha}} activat aquesta functionalitat.',
	'mw-ui-feature-requirements-betafeatures' => 'Aquesta funcionalitat requereix {{PLURAL:$1|aquesta altra funcionalitat|aquestes altres funcionalitats}} per a ser activada:',
	'mw-ui-feature-requirements-browser' => '{{PLURAL:$1|Aquest navegador|Aquests navegadors}} no estan suportats:',
	'mw-ui-feature-requirements-javascript' => 'Aquesta funcionalitat requereix JavaScript.',
	'mw-ui-feature-requirements-skins' => 'Aquesta funcionalitat només funciona amb {{PLURAL:$1|aquesta plantilla|aquestes plantilles}}:',
	'prefs-betafeatures' => 'Funcionalitats beta',
	'betafeatures-desc' => "Permet a l'usuari activar o desactivar funcionalitats en el wiki que encara no són a punt per a una estrena oficial.",
	'betafeatures-toplink' => 'Beta',
	'betafeatures-auto-enroll' => "Activa automàticament totes les funcionalitats ''beta'' noves",
	'betafeatures-section-desc' => 'Aquí teniu {{PLURAL:$1|una nova funcionalitat|noves funcionalitats}} que estem considerant per a {{SITENAME}}. Si us plau, proveu-les i compartiu les vostres opinions. Així podrem millorar-les en base als vostres comentaris.',
	'betafeatures-tooltip' => "Us presentem Funcionalitats Beta! Aquesta nova secció a les vostres preferències us permet avaluar noves funcionalitats i compartir els vostres comentaris abans d'activar-les per a tothom.  This new preferences section lets you test and give feedback about new features before we launch them as default behavior. Prova alguna beta!",
);

/** Chechen (нохчийн)
 * @author Умар
 */
$messages['ce'] = array(
	'mw-ui-feature-discuss' => 'дийцаре',
	'mw-ui-feature-info' => 'хаам',
	'mw-ui-feature-user-count' => '{{PLURAL:$1|Цхьам декъашхочо латина|$1 декъашхоша латина|0=Цхьамо латина яц}} хӀара функци.', # Fuzzy
	'mw-ui-feature-requirements-browser' => '{{PLURAL:$1|1=ХӀара браузер ловш яц|ХӀара браузераш ловш яц}}:', # Fuzzy
	'prefs-betafeatures' => 'Бета-функцеш',
	'betafeatures-desc' => 'Декъашхошна прайм-тайман кийча йоцу функцеш лато я дӀаяйа таро хуьлуьйту',
	'betafeatures-toplink' => 'Бета-верси',
	'betafeatures-auto-enroll' => 'Ша лата йо керла бета-функцеш',
	'betafeatures-section-desc' => '{{PLURAL:$1|Йина керла фунуцеш}} оха уьш йина {{SITENAME}}н. Дехар до, {{PLURAL:$1|уьш}} лела яй а хьайна хетарг ала,тӀакха тхуна уьш дика ян аьтту хира бу.', # Fuzzy
	'betafeatures-about-betafeatures' => 'Бета-функцешах лаьцна',
	'betafeatures-discuss-betafeatures' => 'Язде хьайна хетарг',
	'betafeatures-extension-type' => 'Бета-функцеш',
);

/** Sorani Kurdish (کوردی)
 * @author Calak
 */
$messages['ckb'] = array(
	'prefs-betafeatures' => 'تایبەتمەندییەکانی بیتا',
	'betafeatures-toplink' => 'بیتا',
	'betafeatures-auto-enroll' => 'بە شێوەی خۆگەڕ ھەموو تایبەتمەندییە نوێکانی بیتا چالاک بکە',
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
	'mw-ui-feature-requirements-skins' => 'Tato funkce je k dispozici jen v {{PLURAL:$1|následujícím vzhledu|následujících vzhledech}}:',
	'prefs-betafeatures' => 'Betaverze',
	'betafeatures-desc' => 'Umožňuje uživatelům zapínat a vypínat nové funkce, které zatím nejsou zcela odladěné',
	'betafeatures-toplink' => 'Beta',
	'betafeatures-auto-enroll' => 'Automaticky zapnout všechny nové funkce betaverze',
	'betafeatures-section-desc' => 'Zde {{PLURAL:$1|je nová funkce, kterou|jsou nové funkce, které}} zvažujeme pro použití na {{grammar:6sg|{{SITENAME}}}}. Vyzkoušejte {{PLURAL:$1|ji|je}} a dejte nám vědět, ať {{PLURAL:$1|ji|je}} na základě vašich názorů můžeme vylepšovat.',
	'betafeatures-tooltip' => 'Představujeme funkce z betaverze! Tato nová sekce nastavení vám umožňuje vyzkoušet a okomentovat nové funkce dříve, než je spustíme pro všechny. Vyzkoušejte něco nového!',
	'betafeatures-about-betafeatures' => 'O betaverzi',
	'betafeatures-discuss-betafeatures' => 'Sdělte svůj názor',
	'betafeatures-extension-type' => 'Betaverze',
);

/** Church Slavic (словѣньскъ / ⰔⰎⰑⰂⰡⰐⰠⰔⰍⰟ)
 * @author ОйЛ
 */
$messages['cu'] = array(
	'betafeatures-toplink' => 'вита',
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
	'betafeatures-extension-type' => 'Nodweddion beta',
);

/** Danish (dansk)
 * @author Christian List
 */
$messages['da'] = array(
	'mw-ui-feature-discuss' => 'diskussion',
	'mw-ui-feature-info' => 'information',
	'mw-ui-feature-user-count' => '{{PLURAL:$1|Én bruger|$1 brugere|0=ingen brugere}} har aktiveret denne funktion.',
	'mw-ui-feature-requirements-betafeatures' => 'Denne funktion kræver, at følgende {{PLURAL:$1|funktion|funktioner}} er aktiveret:',
	'mw-ui-feature-requirements-browser' => 'Følgende {{PLURAL:$1|browser|browsere}} er ikke understøttet:',
	'mw-ui-feature-requirements-javascript' => 'Denne funktion kræver JavaScript.',
	'mw-ui-feature-requirements-skins' => 'Denne funktion virker kun med {{PLURAL:$1|det følgende udseende|de følgende udseender}}:',
	'prefs-betafeatures' => 'Betafunktioner',
	'betafeatures-desc' => 'Lader brugeren aktivere eller deaktivere funktioner på wikien, der stadig ikke er helt færdige',
	'betafeatures-toplink' => 'Beta',
	'betafeatures-auto-enroll' => 'Aktivér automatisk alle nye beta funktioner',
	'betafeatures-section-desc' => 'Her er {{PLURAL:$1|en ny funktion|nogle nye funktioner}} vi overvejer til {{SITENAME}}. Prøv {{PLURAL:$1|den|dem}} og lad os vide hvad du tænker om {{PLURAL:$1|den|dem}}, så vi kan forbedre {{PLURAL:$1|den|dem}} baseret på din tilbagemelding.',
	'betafeatures-tooltip' => 'Vi introducerer betafunktioner! Dette nye afsnit under indstillinger giver dig mulighed for at teste og give tilbagemelding om nye funktioner, før vi lancerer dem som standard for alle brugere. Prøv noget nyt nu!',
	'betafeatures-about-betafeatures' => 'Om betafunktioner',
	'betafeatures-discuss-betafeatures' => 'Giv tilbagemelding',
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
	'betafeatures-section-desc' => 'Hier {{PLURAL:$1|ist eine neue Funktion|sind einige neue Funktionen}}, die wir für {{SITENAME}} planen. Bitte probier sie aus und sag uns deine Meinung. So können wir sie, basierend auf deiner Rückmeldung, verbessern.',
	'betafeatures-tooltip' => 'Einführende Betafunktionen! Dieser neue Einstellungsabschnitt ermöglicht dir das Testen und Geben von Rückmeldungen über neue Funktionen, bevor wir sie standardmäßig aktivieren. Probier jetzt einige neue Funktionen aus!',
	'betafeatures-about-betafeatures' => 'Über Betafunktionen',
	'betafeatures-discuss-betafeatures' => 'Eine Rückmeldung hinterlassen',
	'betafeatures-extension-type' => 'Beta-Funktionen',
);

/** Zazaki (Zazaki)
 * @author Gorizon
 * @author Marmase
 * @author Mirzali
 */
$messages['diq'] = array(
	'mw-ui-feature-discuss' => 'werênayış',
	'prefs-betafeatures' => 'Xaceta beta',
	'betafeatures-toplink' => 'Beta',
	'betafeatures-section-desc' => 'Qandé {{SITENAME}} {{PLURAL:$1|Ğısusiyeta newi|tay ğısusiyete newey}} este. Na dezger bıcerbné u maya ena {{PLURAL:$1|ğısusiyet|ğısusiyetan}} peyd bırşeé maré. Mayv peyd rıştan de şmaya  na {{PLURAL:$1|ğısusiyet|ğısusiyetan}} vırazem.',
);

/** Lower Sorbian (dolnoserbski)
 * @author Michawiki
 */
$messages['dsb'] = array(
	'mw-ui-feature-discuss' => 'diskusija',
	'mw-ui-feature-info' => 'Informacije',
	'mw-ui-feature-user-count' => '{{PLURAL:$1|Jaden wužywaŕ jo|$1 wužywarja stej|$1 wužywarje su||0=Žeden wužywar njejo}} toś tu funkciju {{PLURAL:$1|zmóžnił|zmóžniłej|zmóžnili|zmóžnił}}',
	'mw-ui-feature-requirements-betafeatures' => 'Toś ta funkcija pomina se zmóžnjenje {{PLURAL:$1|slědujuceje funkcije|slědujuceju funkcijowu|slědujucych funkcijow}}',
	'mw-ui-feature-requirements-browser' => '{{PLURAL:$1|Slědujucy wobglědowak se njepódpěra|Slědujucej wobglědowaka se njepódpěratej|Slědujuce wobglědowaki se njepódpěraju}}',
	'mw-ui-feature-requirements-javascript' => 'Toś ta funkcija pomina se JavaScript.',
	'mw-ui-feature-requirements-skins' => 'Toś ta funkcija funkcioněrujo jano ze {{PLURAL:$1|slědujuceju drastwu|slědujucyma drastwoma|slědujucymi drastwami}}:',
	'prefs-betafeatures' => 'Betafunkcije',
	'betafeatures-desc' => 'Dowólujo wužywarjeju, funkcije na wikiju zmóžniś abo znjemóžniś, kótarež su hyšći we wuwiśu.',
	'betafeatures-toplink' => 'Beta',
	'betafeatures-auto-enroll' => 'Wšykne nowe betafunkcije awtomatiski zmóžniś',
	'betafeatures-section-desc' => 'How {{PLURAL:$1|jo nowa funkcija, kótaruž|někotare funkcije, kótarež}} za {{SITENAME}} planujomy. Pšosym wuproběruj {{PLURAL:$1|ju|je}} a pósćel nam swóje měnjenje, až my by mógli {{PLURAL:$1|ju|je}} na zakłaźe twójich komentarow pólěpšyś.',
	'betafeatures-tooltip' => 'Pśedstajenje betafunkcijow! Toś te nowe nastajenja daju tebi móžnosć, nowe funkcije testowaś a wó nich twóje měnjenje pósrědniś, nježli až zmóžnijomy je ako standard. Wuproběruj něnto nowe funkcije!',
	'betafeatures-about-betafeatures' => 'Wó betafunkcijach',
	'betafeatures-discuss-betafeatures' => 'Komentar zawóstajiś',
);

/** British English (British English)
 * @author Shirayuki
 */
$messages['en-gb'] = array(
	'betafeatures-tooltip' => 'Introducing Beta Features! This new preferences section lets you test and give feedback about new features before we launch them as default behaviour. Try out something new now!',
);

/** Esperanto (Esperanto)
 * @author KuboF
 */
$messages['eo'] = array(
	'betafeatures-extension-type' => 'Betaj funkcioj',
);

/** Spanish (español)
 * @author Benfutbol10
 * @author Fitoschido
 * @author Ovruni
 * @author VegaDark
 * @author Vivaelcelta
 */
$messages['es'] = array(
	'mw-ui-feature-discuss' => 'discusión',
	'mw-ui-feature-info' => 'información',
	'mw-ui-feature-user-count' => '{{PLURAL:$1|Un usuario ha|$1 usuarios han}} activado esta función.',
	'mw-ui-feature-requirements-betafeatures' => 'Esta funcionalidad requiere {{PLURAL:$1|la siguiente funcionalidad|las siguientes funcionalidades}} para ser activada:',
	'mw-ui-feature-requirements-browser' => '{{PLURAL:$1|El siguiente navegador no es compatible|Los siguientes navegadores no son compatibles}}:',
	'mw-ui-feature-requirements-javascript' => 'Esta funcionalidad requiere JavaScript.',
	'mw-ui-feature-requirements-skins' => 'Esta funcionalidad requiere que utilices {{PLURAL:$1|la siguiente apariencia|una de las siguientes apariencias}}:',
	'prefs-betafeatures' => 'Funciones en pruebas',
	'betafeatures-desc' => 'Permite al usuario activar o desactivar funciones del wiki que todavía no están listas',
	'betafeatures-toplink' => 'Beta',
	'betafeatures-auto-enroll' => 'Activar automáticamente las funciones en pruebas nuevas',
	'betafeatures-section-desc' => 'Aquí te presentamos {{PLURAL:$1|una función nueva|algunas funciones nuevas}} que estamos considerando para {{SITENAME}}. {{PLURAL:$1|Pruébala|Pruébalas}} y danos tus comentarios, así podremos {{PLURAL:$1|mejorarla|mejorarlas}} con base a tus necesidades.',
	'betafeatures-tooltip' => 'Te presentamos las funciones en pruebas. Esta sección permite probar y evaluar funcionalidades nuevas antes de que las activemos para todos.',
	'betafeatures-about-betafeatures' => 'Acerca de las funciones en pruebas',
	'betafeatures-discuss-betafeatures' => 'Dejar comentarios',
);

/** Estonian (eesti)
 * @author Pikne
 */
$messages['et'] = array(
	'mw-ui-feature-discuss' => 'arutelu',
	'mw-ui-feature-info' => 'teave',
	'mw-ui-feature-user-count' => '{{PLURAL:$1|Üks kasutaja on selle|$1 kasutajat on selle|0=Ükski kasutaja pole seda}} funktsiooni sisse lülitanud.',
	'mw-ui-feature-requirements-betafeatures' => 'See funktsioon nõuab {{PLURAL:$1|järgmise funktsiooni|järgmiste funktsioonide}} kasutamist:',
	'mw-ui-feature-requirements-browser' => 'Toetatud on {{PLURAL:$1|järgmine võrgulehitseja|järgmised võrgulehitsejad}}:',
	'mw-ui-feature-requirements-javascript' => 'Selle funktsiooni jaoks on vaja JavaScripti.',
	'mw-ui-feature-requirements-skins' => 'See funktsioon töötab ainult {{PLURAL:$1|järgmise kujundusega|järgmiste kujundustega}}:',
	'prefs-betafeatures' => 'Beetafunktsioonid',
	'betafeatures-desc' => 'Võimaldab kasutajal proovida või keelata funktsioone, mis pole veel valmis kõigile kasutamiseks.',
	'betafeatures-toplink' => 'Beeta',
	'betafeatures-auto-enroll' => 'Kasuta automaatselt kõiki uusi beetafunktsioone',
	'betafeatures-section-desc' => 'Siin on {{PLURAL:$1|uus funktsioon|mõned uued funktsioonid}}, mille {{GRAMMAR:inessive|{{SITENAME}}}} kasutamist kaalume. Palun proovi {{PLURAL:$1|seda|neid}} ja avalda arvamust, et saaksime {{PLURAL:$1|seda|neid}} sinu tagasiside põhjal täiustada.',
	'betafeatures-about-betafeatures' => 'Beetafunktsioonidest',
	'betafeatures-discuss-betafeatures' => 'Anna tagasisidet',
);

/** Persian (فارسی)
 * @author Armin1392
 * @author Dalba
 * @author Ebraminio
 * @author Reza1615
 * @author درفش کاویانی
 */
$messages['fa'] = array(
	'mw-ui-feature-discuss' => 'بحث',
	'mw-ui-feature-info' => 'اطلاعات',
	'mw-ui-feature-user-count' => '{{PLURAL:$1|$1 کاربر این ویژگی را فعال کرده‌اند|0=هیچ کاربری این ویژگی را فعال نکرده‌است}}.',
	'mw-ui-feature-requirements-betafeatures' => 'برای فعال‌شدن، این ویژگی نیازمند این {{PLURAL:$1|قابلیت|قابلیت‌ها}} است:',
	'mw-ui-feature-requirements-browser' => 'این {{PLURAL:$1|مرورگر|مرورگرها}} حمایت نشده‌است:',
	'mw-ui-feature-requirements-javascript' => 'این ویژگی نیازمند جاوااسکریپ است.',
	'mw-ui-feature-requirements-skins' => 'این ویژگی فقط با {{PLURAL:$1|این پوسته|یکی از این پوسته‌ها}} کار می‌کند:',
	'prefs-betafeatures' => 'ویژگی‌های آزمایشی',
	'betafeatures-desc' => 'به کاربر اجازه می‌دهد تا ویژگی‌های جدیدی که هنوز به صورت آزمایشی هستند را فعال یا غیرفعال کند.',
	'betafeatures-toplink' => 'آزمایشی',
	'betafeatures-auto-enroll' => 'فعال‌کردن خودکار کلیهٔ ویژگی‌های جدید آزمایشی',
	'betafeatures-section-desc' => 'اینجا  {{PLURAL:$1|ویژگی جدیدی موجود است |ویژگی‌های جدید موجودند}} که برای  {{SITENAME}}  در نظر گرفته شده‌اند. لطفاً آنها را امتحان کنید و بازخوردتان را ارسال کنید تا ما بر اساس بازخوردهای شما آنها را بهبود دهیم.',
	'betafeatures-tooltip' => 'معرفی ویژگی‌های آزمایشی! این بخش جدید تنظیمات به شما اجازه می دهد تا امتحان کنید و نظرات‌تان در مورد ویژگی‌های جدید را قبل از اینکه ما آن‌ها را به‌صورت پیش‌فرض راه‌اندازی کنیم ارائه دهید. الان یک مورد جدید را امتحان کنید!',
	'betafeatures-about-betafeatures' => 'دربارهٔ ویژگی‌های آزمایشی',
	'betafeatures-discuss-betafeatures' => 'افزودن بازخورد',
	'betafeatures-extension-type' => 'ویژگی‌های بتا',
);

/** Finnish (suomi)
 * @author Pxos
 * @author Silvonen
 * @author Stryn
 */
$messages['fi'] = array(
	'mw-ui-feature-discuss' => 'keskustelu',
	'mw-ui-feature-info' => 'tietoa',
	'mw-ui-feature-user-count' => '{{PLURAL:$1|Yksi käyttäjä on ottanut tämän ominaisuuden|$1 käyttäjää on ottanut tämän ominaisuuden|0=Kukaan ei ole ottanut tätä ominaisuutta}} käyttöön.',
	'mw-ui-feature-requirements-betafeatures' => 'Tämä ominaisuus vaatii {{PLURAL:$1|seuraavaa ominaisuutta|seuraavia ominaisuuksia}} käyttöönotettavaksi:',
	'mw-ui-feature-requirements-browser' => '{{PLURAL:$1|Seuraava selain ei ole tuettu|Seuraavat selaimet eivät ole tuettuja}}:',
	'mw-ui-feature-requirements-javascript' => 'Tämä ominaisuus vaatii JavaScriptin olevan käytössä.',
	'mw-ui-feature-requirements-skins' => 'Tämä ominaisuus toimii ainoastaan {{PLURAL:$1|seuraavan ulkoasun|seuraavien ulkoasujen}} kanssa:',
	'prefs-betafeatures' => 'Beeta-ominaisuudet',
	'betafeatures-desc' => 'Antaa käyttäjän ottaa käyttöön tai poistaa käytöstä ominaisuuksia wikissä, jotka ovat eivät ole vielä valmiita kaikkien käytettäväksi',
	'betafeatures-toplink' => 'Beeta',
	'betafeatures-auto-enroll' => 'Ota automaattisesti käyttöön kaikki uudet beeta-ominaisuudet',
	'betafeatures-section-desc' => 'Tässä {{PLURAL:$1|on uusi ominaisuus, jota|on muutamia uusia ominaisuuksia, joita}} harkitsemme sivustolle {{SITENAME}}. Kokeile {{PLURAL:$1|sitä|niitä}} ja kerro meille mielipiteesi, jotta voimme parantaa {{PLURAL:$1|sitä|niitä}} palautteesi perusteella.',
	'betafeatures-tooltip' => 'Esittelyssä Beeta-ominaisuudet! Tämä uusi asetukset-osio antaa sinun kokeilla ja antaa palautetta uusista ominaisuuksista, ennen kuin julkaisemme ne oletuksena. Kokeile jotain uutta nyt!',
	'betafeatures-about-betafeatures' => 'Tietoa Beeta-ominaisuuksista',
	'betafeatures-discuss-betafeatures' => 'Jätä palautetta',
	'betafeatures-extension-type' => 'Beeta-ominaisuudet',
);

/** Faroese (føroyskt)
 * @author EileenSanda
 */
$messages['fo'] = array(
	'mw-ui-feature-discuss' => 'kjak',
	'mw-ui-feature-info' => 'kunning',
	'mw-ui-feature-user-count' => '{{PLURAL:$1|Ein brúkari hevur|$1 brúkarar hava|0=Ongir brúkarar hava}} tikið hesa funksjónina í nýtslu.',
	'mw-ui-feature-requirements-javascript' => 'Henda funksjónin krevur JavaScript.',
	'prefs-betafeatures' => 'Betafunktiónir',
	'betafeatures-desc' => 'Loyvir brúkara at gera funksjónir, sum enn ikki eru heilt klárar, virknar ella óvirknar á wikiini.',
	'betafeatures-toplink' => 'Beta',
	'betafeatures-auto-enroll' => 'Aktivera sjálvvirkandi allar nýggjar betafunksjónir',
	'betafeatures-about-betafeatures' => 'Um betafunksjónir',
	'betafeatures-discuss-betafeatures' => 'Gev afturmelding',
);

/** French (français)
 * @author Boniface
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
	'betafeatures-section-desc' => 'Voici {{PLURAL:$1|une nouvelle fonctionnalité|de nouvelles fonctionnalités}} que nous envisageons pour {{SITENAME}}. Veuillez les essayer et nous donner votre sentiment à leur sujet, afin que nous puissions les améliorer d’après votre retour.',
	'betafeatures-tooltip' => 'Voici les fonctionnalités en beta ! Cette nouvelle section des préférences vous laisse tester et donner votre ressenti sur les nouvelles fonctionnalités avant que nous les lancions par défaut. Essayez dès à présent quelque chose de nouveau !',
	'betafeatures-about-betafeatures' => 'À propos des fonctionnalités en bêta',
	'betafeatures-discuss-betafeatures' => 'Laisser un avis',
	'betafeatures-extension-type' => 'Fonctionnalités bêta',
);

/** Galician (galego)
 * @author Toliño
 * @author Vivaelcelta
 */
$messages['gl'] = array(
	'mw-ui-feature-discuss' => 'conversa',
	'mw-ui-feature-info' => 'información',
	'mw-ui-feature-user-count' => '{{PLURAL:$1|Un usuario ten|$1 usuarios teñen|0=Ningún usuario ten}} activada esta característica.',
	'mw-ui-feature-requirements-betafeatures' => 'Esta característica necesita a activación {{PLURAL:$1|da seguinte característica|das seguintes características}}:',
	'mw-ui-feature-requirements-browser' => '{{PLURAL:$1|O seguinte navegador non está soportado|Os seguintes navegadores non están soportados}}:',
	'mw-ui-feature-requirements-javascript' => 'Esta característica necesita JavaScript.',
	'mw-ui-feature-requirements-skins' => 'Esta característica funciona unicamente {{PLURAL:$1|coa seguinte aparencia|coas seguintes aparencias}}:',
	'prefs-betafeatures' => 'Características en probas',
	'betafeatures-desc' => 'Permite que o usuario active ou desactive as características do wiki que aínda non están listas para o seu uso xeneralizado',
	'betafeatures-toplink' => 'Beta',
	'betafeatures-auto-enroll' => 'Activar automaticamente todas as novas características en probas',
	'betafeatures-section-desc' => 'Aquí hai {{PLURAL:$1|unha característica nova|algunhas características novas}} que estamos considerando para {{SITENAME}}. {{PLURAL:$1|Próbea|Próbeas}} e achéguenos a súa opinión, para que poidamos {{PLURAL:$1|mellorala|melloralas}}.',
	'betafeatures-tooltip' => 'Velaquí están as características en probas! Esta nova sección das preferencias permítelle probar e achegar comentarios sobre as novas características antes de que as lancemos para todos. Probe algo novo agora!',
	'betafeatures-about-betafeatures' => 'Acerca das características en probas',
	'betafeatures-discuss-betafeatures' => 'Deixe un comentario',
	'betafeatures-extension-type' => 'Características en probas',
);

/** Goan Konkani (कोंकणी/Konknni )
 * @author The Discoverer
 */
$messages['gom'] = array(
	'betafeatures-toplink' => 'Beta',
);

/** Goan Konkani (Latin script) (Konknni)
 * @author The Discoverer
 */
$messages['gom-latn'] = array(
	'betafeatures-toplink' => 'Beta',
);

/** Hebrew (עברית)
 * @author Ademo
 * @author Amire80
 * @author Guycn2
 * @author ערן
 */
$messages['he'] = array(
	'mw-ui-feature-discuss' => 'דיון',
	'mw-ui-feature-info' => 'מידע',
	'mw-ui-feature-user-count' => '{{PLURAL:$1|משתמש אחד הפעיל|$1 משתמשים הפעילו|0=שום משתמש לא הפעיל}} את האפשרות הזאת.',
	'mw-ui-feature-requirements-betafeatures' => 'האפשרות הזאת דורשת {{PLURAL:$1|שהאפשרות הבאה תהיה מופעלת|שהאפשרויות הבאות יהיו מופעלות}}:',
	'mw-ui-feature-requirements-browser' => '{{PLURAL:$1|הדפדפן הבא אינו נתמך|הדפדפנים הבאים אינם נתמכים}}:',
	'mw-ui-feature-requirements-javascript' => 'האפשרות הזאת דורשת הפעלה של JavaScript.',
	'mw-ui-feature-requirements-skins' => 'האפשרות הזאת עובדת רק עם {{PLURAL:$1|העיצוב הבא|העיצובים הבאים}}:',
	'prefs-betafeatures' => 'אפשרויות בטא',
	'betafeatures-desc' => 'מתן אפשרות למשתמש להפעיל או לכבות בוויקי אפשרויות שעדיין אינן מוכנות להוצאה כללית',
	'betafeatures-toplink' => 'בטא',
	'betafeatures-auto-enroll' => 'להפעיל אוטומטית את כל אפשרויות הבטא',
	'betafeatures-section-desc' => 'הנה {{PLURAL:$1|אפשרות חדשה|אפשרויות חדשות}} שאנחנו שוקלים להוסיף ל{{GRAMMAR:תחילית|{{SITENAME}}}}. אנו מבקשים ממך לנסות {{PLURAL:$1|אותה|אותן}}, כדי שנוכל לשפר {{PLURAL:$1|אותה|אותן}} לפי המשוב שלך.',
	'betafeatures-tooltip' => 'אנו גאים להציג את "אפשרויות בטא"! החל החדש הזה בהעדפות מאפשר לך לבדוק אפשרויות חדשות ולתת עליהן משוב לפני שנפעיל אותן בתור ההתנהגות הרגילה. נסו משהו חדש!',
	'betafeatures-about-betafeatures' => 'אודות אפשרויות בטא',
	'betafeatures-discuss-betafeatures' => 'שליחת משוב',
	'betafeatures-extension-type' => 'אפשרויות בטא',
);

/** Hindi (हिन्दी)
 * @author Siddhartha Ghai
 */
$messages['hi'] = array(
	'mw-ui-feature-discuss' => 'चर्चा',
	'mw-ui-feature-info' => 'जानकारी',
	'mw-ui-feature-user-count' => 'इस सुविधा को {{PLURAL:$1|एक सदस्य ने|$1 सदस्यों ने|0=किसी भी सदस्य ने नहीं}} सक्षम किया है।',
	'mw-ui-feature-requirements-betafeatures' => 'इस सुविधा के लिये निम्न {{PLURAL:$1|सुविधा|सुविधायें}} सक्षम करनी {{PLURAL:$1|होगी|होंगी}}:',
	'mw-ui-feature-requirements-browser' => 'निम्न ब्राउज़र समर्थित नहीं {{PLURAL:$1|है|हैं}}:',
	'mw-ui-feature-requirements-javascript' => 'इस सुविधा के लिये जावास्क्रिप्ट की आवश्यकता है।',
	'mw-ui-feature-requirements-skins' => 'यह सुविधा केवल निम्न {{PLURAL:$1|त्वचा|त्वचाओं}} के साथ काम करती है:',
	'prefs-betafeatures' => 'बीटा सुविधाएँ',
	'betafeatures-desc' => 'सदस्यों को विकी पर वो सुविधाएँ सक्षम करने देता है जो अभी सबके द्वारा प्रयोग करने के लिए तैयार नहीं हैं',
	'betafeatures-toplink' => 'बीटा',
	'betafeatures-auto-enroll' => 'सभी नई बीटा सुविधाओं को स्वचालित रूप से सक्षम करें',
	'betafeatures-section-desc' => 'ये {{PLURAL:$1|एक ऐसी सुविधा है जिसे|कुछ ऐसी सुविधाएँ हैं जिन्हें}} हम {{SITENAME}} के लिए परख रहे हैं। कृपया {{PLURAL:$1|इसे|इन्हें}} प्रयोग कर के देखें और हमें अपने विचार बताएँ, ताकि हम {{PLURAL:$1|इसे|इन्हें}} आपकी प्रतिक्रियाओं के आधार पर बेहतर बना सकें।',
	'betafeatures-tooltip' => 'पेश हैं बीटा सुविधाएँ! इस नये पसंद अनुभाग से आप नयी सुविधाएँ डिफ़ॉल्ट रूप से जारी होने से पहले जाँच सकते हैं और उनके बारे में प्रतिक्रिया दे सकते हैं। कुछ नया आज़माएँ!',
	'betafeatures-about-betafeatures' => 'बीटा सुविधाओं के बारे में',
	'betafeatures-discuss-betafeatures' => 'प्रतिक्रिया दें',
	'betafeatures-extension-type' => 'बीटा सुविधाएँ',
);

/** Croatian (hrvatski)
 * @author MaGa
 */
$messages['hr'] = array(
	'mw-ui-feature-discuss' => 'rasprava',
	'mw-ui-feature-info' => 'informacije',
	'mw-ui-feature-user-count' => '{{PLURAL:$1|Ovu mogućnost omogućio je jedan suradnik.|Ovu mogućnost omogućilo je $1 suradnika.|0=Ovu mogućnost nije omogućio niti jedan suradnik.}}',
	'mw-ui-feature-requirements-skins' => 'Moguće jedino sa sljedećim {{PLURAL:$1|izgledom|izgledima}}:',
	'prefs-betafeatures' => 'Beta mogućnosti',
	'betafeatures-auto-enroll' => 'Automatski omogući beta mogućnosti.',
	'betafeatures-section-desc' => 'Ovo {{PLURAL:$1|je nova mogućnost|su nove mogućnosti}} na projektu {{SITENAME}}. Molimo {{PLURAL:$1|iskušajte ju|iskušajte ih}} i napišite nam svoje mišljenje kako bismo {{PLURAL:$1|je|ih}} poboljšali na osnovi Vaših povratnih informacija.',
	'betafeatures-tooltip' => 'Predstavljamo beta mogućnosti! Novo poglavlje u postavkama Vam omogućava testiranje i mogućnost povratne informacije o novim značajkama prije nego ih postavimo kao osnovne. Isprobajte nešto novo!',
	'betafeatures-about-betafeatures' => 'O beta mogućnostima',
	'betafeatures-discuss-betafeatures' => 'Napišite povratnu informaciju',
);

/** Upper Sorbian (hornjoserbsce)
 * @author Michawiki
 */
$messages['hsb'] = array(
	'mw-ui-feature-discuss' => 'diskusija',
	'mw-ui-feature-info' => 'Informacije',
	'mw-ui-feature-user-count' => '{{PLURAL:$1|Jedyn wužiwar je|$1 wužiwarjej staj|$1 wužiwarjo su||0=Žadyn wužiwar je}} tutu funkciju {{PLURAL:$1|zmóžnił|zmóžniłoj|zmóžnili|zmóžnił}}',
	'mw-ui-feature-requirements-betafeatures' => 'Tuta funkcija wužaduje sej zmóžnjenje {{PLURAL:$1|slědowaceje funkcije|slědowaceju funkcijow|slědowacych funkcijow}}',
	'mw-ui-feature-requirements-browser' => '{{PLURAL:$1|Slědowacy wobhladowak so njepodpěruje|Slědowacej wobhladowakaj so njepodpěrujetej|Slědowace wobhladowaki so njepodpěruja}}',
	'mw-ui-feature-requirements-javascript' => 'Tuta funkcija sej JavaScript wužaduje.',
	'mw-ui-feature-requirements-skins' => 'Tuta funkcija jenož ze {{PLURAL:$1|slědowacej drastu|slědowacymaj drastomaj|slědowacymi drastami}} funguje:',
	'prefs-betafeatures' => 'Betafunkcije',
	'betafeatures-desc' => 'Dowola wužiwarjej, funkcije na wikiju zmóžnić abo znjemóžnić, kotrež su hišće we wuwiću.',
	'betafeatures-toplink' => 'Beta',
	'betafeatures-auto-enroll' => 'Wšě nowe betafunkcije awtomatisce zmóžnić',
	'betafeatures-section-desc' => 'Tu {{PLURAL:$1|je nowa funkcija, kotruž|někotre funkcije, kotrež}} za {{SITENAME}} planujemy. Prošu wuprobuj {{PLURAL:$1|ju|je}} a pósćel nam swoje měnjenje, zo my móhli {{PLURAL:$1|ju|je}} na zakładźe twojich komentarow polěpšić.',
	'betafeatures-tooltip' => 'Předstajenje betafunkcijow! Tute nowe nastajenja dadźa tebi móžnosć, nowe funkcije testować a wo nich twoje měnjenje sposrědkować, prjedy hač je jako standard zmóžnimy. Wuprobuj nětko nowe funkcije!',
	'betafeatures-about-betafeatures' => 'Wo betafunkcijach',
	'betafeatures-discuss-betafeatures' => 'Komentar zawostajić',
	'betafeatures-extension-type' => 'Betafunkcije',
);

/** Hungarian (magyar)
 * @author Misibacsi
 * @author Tgr
 */
$messages['hu'] = array(
	'mw-ui-feature-discuss' => 'megbeszélés',
	'mw-ui-feature-info' => 'információ',
	'mw-ui-feature-user-count' => '{{PLURAL:$1|Egy felhasználó|$1 felhasználó|0=Még senki sem}} használja ezt a funkciót.',
	'mw-ui-feature-requirements-betafeatures' => 'A használatához be kell kapcsolni {{PLURAL:$1|ezt a funkciót|ezeket a funkciókat}} is:',
	'mw-ui-feature-requirements-browser' => 'Nem működik {{PLURAL:$1|ezzel a böngészővel|ezekkel a böngészőkkel}}:',
	'mw-ui-feature-requirements-javascript' => 'JavaScript szükséges hozzá.',
	'mw-ui-feature-requirements-skins' => 'Csak {{PLURAL:$1|ezzel a felülettel|ezekkel a felületekkel}} működik:',
	'prefs-betafeatures' => 'Béta funkciók',
	'betafeatures-desc' => 'Lehetővé teszi az egyes felhasználóknak az olyan funkciók be- és kikapcsolását, amik még nem készültek el teljesen.',
	'betafeatures-toplink' => 'Béta',
	'betafeatures-auto-enroll' => 'Automatikusan kapcsoljon be minden új béta funkciót',
	'betafeatures-section-desc' => 'Itt {{PLURAL:$1|egy|néhány}} olyan új funkciót látsz, amit idővel be szeretnénk vezetni a {{SITENAME}} wikin. Próbáld {{PLURAL:$1|ki|ki őket}}, és mondd el a véleményed, hogy javítani tudjunk {{PLURAL:$1|rajta|rajtuk}} a visszajelzésed alapján.',
	'betafeatures-tooltip' => 'Ismerkedj meg a béta funkciókkal! Ez az új fül a beállításaidnál olyan funkciókat tartalmaz, amiket a közeljövőben mindenkinek alapértelmezetté szeretnénk tenni; ha még előtte kipróbálod őket és megírod a véleményed, azzal segítesz tökéletesebbé tenni őket. Próbálj ki valami újat még ma!',
	'betafeatures-about-betafeatures' => 'A béta funkciókról',
	'betafeatures-discuss-betafeatures' => 'Üzenj a fejlesztőknek',
	'betafeatures-extension-type' => 'Béta funkciók',
);

/** Armenian (Հայերեն)
 * @author Vacio
 * @author Vadgt
 */
$messages['hy'] = array(
	'prefs-betafeatures' => 'Փորձնական հնարավորություններ',
	'betafeatures-toplink' => 'Փորձնական',
	'betafeatures-about-betafeatures' => 'Փորձնական Հնարվորությունների մասին',
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
	'betafeatures-section-desc' => 'Ecce {{PLURAL:$1|un function nove|alcun functionalitate nove}} que nos considera pro {{SITENAME}}. Per favor essaya lo e dice nos tu opinion, de sorta que nos pote meliorar lo.',
	'betafeatures-tooltip' => 'Nos presenta le functionalitate beta! Iste nove section de preferentias permitte testar e evalutar nove functiones ante lor activation pro omnes. Essaya ora qualcosa nove!',
	'betafeatures-about-betafeatures' => 'A proposito del functionalitate beta',
	'betafeatures-discuss-betafeatures' => 'Lassar evalutation',
);

/** Indonesian (Bahasa Indonesia)
 * @author William Surya Permana
 */
$messages['id'] = array(
	'mw-ui-feature-discuss' => 'pembicaraan',
	'mw-ui-feature-info' => 'informasi',
	'mw-ui-feature-user-count' => '{{PLURAL:$1|Seorang pengguna telah|$1 pengguna telah|0=Tidak ada pengguna yang telah}} mengaktifkan fitur ini.',
	'mw-ui-feature-requirements-betafeatures' => 'Fitur ini memerlukan {{PLURAL:$1|fitur|fitur-fitur berikut}} ini untuk diaktifkan:',
	'mw-ui-feature-requirements-browser' => '{{PLURAL:$1|Peramban|Peramban berikut}} ini tidak didukung:',
	'mw-ui-feature-requirements-javascript' => 'Fitur ini memerlukan JavaScript.',
	'mw-ui-feature-requirements-skins' => 'Fitur ini hanya berfungsi dengan {{PLURAL:$1|kulit|kulit-kulit berikut}} ini:',
	'prefs-betafeatures' => 'Fitur beta',
	'betafeatures-desc' => 'Memungkinkan pengguna mengaktifkan atau menonaktifkan fitur di wiki yang masih belum siap untuk tayang',
	'betafeatures-toplink' => 'Beta',
	'betafeatures-auto-enroll' => 'Secara otomatis aktifkan semua fitur beta baru',
	'betafeatures-section-desc' => '{{PLURAL:$1|Ini adalah|Berikut ini adalah beberapa}} fitur baru yang sedang kami pertimbangkan untuk {{SITENAME}}. Silakan coba  {{PLURAL:$1|fitur|fitur-fitur}} tersebut dan beritahu kami apa yang Anda pikirkan, sehingga kami dapat menyempurnakan{{PLURAL:$1|nya}} berdasarkan umpan balik Anda.',
	'betafeatures-tooltip' => 'Memperkenalkan Fitur Beta! Bagian preferensi baru ini memungkinkan Anda untuk menguji dan memberikan umpan balik mengenai fitur baru sebelum kami meluncurkannya secara baku. Cobalah sesuatu yang baru sekarang!',
	'betafeatures-about-betafeatures' => 'Tentang Fitur Beta',
	'betafeatures-discuss-betafeatures' => 'Tinggalkan umpan balik',
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
	'betafeatures-section-desc' => 'Ditoy {{PLURAL:$1|ket ti baro a langa|ket dagiti baro a langa}} a panpanunotenmi para iti {{SITENAME}}. Pangngaasi a padasen {{PLURAL:$1|daytoy|dagitoy}} ken agited kaniami dagiti panunotyo, tapno mapasayaatmi {{PLURAL:$1|daytoy|dagitoy}} a maibatay iti bukodmo a feedback.',
	'betafeatures-tooltip' => 'Ipayam-ammo dagiti Beta a Langa! Daytoy a baro a paset dagit ikakaykayatan ket mangpalubos kenka a mangsubok ken mangited ti feedback a maipanggep kadagiti baro a langa sakbay nga iparuarmi a kas kasisigud a panagkukua. Agpadas tattan ti kabarbaro!',
	'betafeatures-about-betafeatures' => 'Maipanggep kadagiti Beta a Langa',
	'betafeatures-discuss-betafeatures' => 'Mangibati ti feedback',
	'betafeatures-extension-type' => 'Dagiti beta a langa',
);

/** Italian (italiano)
 * @author Beta16
 * @author Davio
 * @author Elitre
 * @author FRacco
 * @author Gianfranco
 * @author Nemo bis
 */
$messages['it'] = array(
	'mw-ui-feature-discuss' => 'discussione',
	'mw-ui-feature-info' => 'informazioni',
	'mw-ui-feature-user-count' => '{{PLURAL:$1|1 utente ha|$1 utenti hanno|0=Nessun utente ha}} abilitato questa funzione.',
	'mw-ui-feature-requirements-betafeatures' => 'Questa funzionalità richiede che {{PLURAL:$1|sia abilitata la seguente|siano abilitate le seguenti}} funzionalità:',
	'mw-ui-feature-requirements-browser' => '{{PLURAL:$1|Il seguente browser non è abilitato|I seguenti browser non sono abilitati}}:',
	'mw-ui-feature-requirements-javascript' => 'Questa funzionalità richiede JavaScript.',
	'mw-ui-feature-requirements-skins' => 'Questa funzionalità funziona solo con {{PLURAL:$1|la seguente skin|le seguenti skin}}:',
	'prefs-betafeatures' => 'Funzionalità sperimentali',
	'betafeatures-desc' => "Consente all'utente di attivare o disattivare sul wiki funzionalità che non sono ancora pronte per il grande pubblico",
	'betafeatures-toplink' => 'Beta',
	'betafeatures-auto-enroll' => 'Attiva automaticamente tutte le nuove funzionalità sperimentali',
	'betafeatures-section-desc' => '{{PLURAL:$1|Questa è una nuova funzionalità|Queste sono nuove funzionalità}} che stiamo prendendo in considerazione per {{SITENAME}}. Puoi {{PLURAL:$1|provarla|provarle}} e dirci cosa ne pensi, così potremo {{PLURAL:$1|migliorarla|migliorarle}} in base alle tue risposte.',
	'betafeatures-tooltip' => 'Benvenuto nelle funzionalità sperimentali! Questa nuova sezione delle preferenze consente di provare e lasciare un commento sulle funzionalità sperimentali prima che siano estese a tutti. Prova subito qualcosa di nuovo!',
	'betafeatures-about-betafeatures' => 'Informazioni su Beta Features',
	'betafeatures-discuss-betafeatures' => 'Lascia un commento',
	'betafeatures-extension-type' => 'Funzionalità sperimentali',
);

/** Japanese (日本語)
 * @author Fryed-peach
 * @author Shirayuki
 * @author Whym
 */
$messages['ja'] = array(
	'mw-ui-feature-discuss' => '議論',
	'mw-ui-feature-info' => '情報',
	'mw-ui-feature-user-count' => '{{PLURAL:$1|$1 人の利用者がこの機能を有効にしています|0=この機能を有効にしている利用者はいません}}。',
	'mw-ui-feature-requirements-betafeatures' => 'この機能を使用するには、以下の{{PLURAL:$1|機能}}を有効にする必要があります:',
	'mw-ui-feature-requirements-browser' => '以下の{{PLURAL:$1|ブラウザー}}には対応していません:',
	'mw-ui-feature-requirements-javascript' => 'この機能の使用には JavaScript が必要です。',
	'mw-ui-feature-requirements-skins' => 'この機能には{{PLURAL:$1|以下の外装|以下の外装のいずれか}}でのみ動作します:',
	'prefs-betafeatures' => 'ベータ版機能',
	'betafeatures-desc' => '本番環境のウィキで使用する準備がまだできていない機能について、利用者が有効化/無効化できるようにする',
	'betafeatures-toplink' => 'ベータ版',
	'betafeatures-auto-enroll' => 'すべてのベータ版機能を自動的に有効にする',
	'betafeatures-section-desc' => '{{SITENAME}}のために検討している{{PLURAL:$1|新しい機能}}があります。お試しの上ご意見をお寄せください。そのフィードバックに基づいて機能を改善します。',
	'betafeatures-tooltip' => 'ベータ版機能を紹介します！この個人設定に新しく設けられたセクションでは、新しい機能を既定の動作として採用する前に試験したりフィードバックを送ったりできます。なにか新しいものを試してみましょう！',
	'betafeatures-about-betafeatures' => 'ベータ版の機能について',
	'betafeatures-discuss-betafeatures' => 'フィードバックを送信',
	'betafeatures-extension-type' => 'ベータ版機能',
);

/** Georgian (ქართული)
 * @author David1010
 */
$messages['ka'] = array(
	'mw-ui-feature-user-count' => 'ამ შესაძლებლობას {{PLURAL:$1|ერთი მომხმარებელი|$1 მომხმარებელი|0=არავინ არ}} იყენებს.',
	'prefs-betafeatures' => 'ბეტა შესაძლებლობები',
	'betafeatures-toplink' => 'ბეტა',
	'betafeatures-auto-enroll' => 'ავტომატურად ჩაირთოს ყველა ახალი ბეტა შესაძლებლობა',
	'betafeatures-section-desc' => '{{PLURAL:$1|გამოჩნდა ახალი ფუნქცია, რომელსაც|გამოჩნდა რამდენიმე ახალი ფუნქცია, რომელთაც}} ჩვენ განვიხილავთ პროექტისათვის {{SITENAME}}. გთხოვთ, მოსინჯოთ {{PLURAL:$1|ის|ისინი}} და გამოთქვათ თქვენი მოსაზრება, რათა თქვენ გამოხმაურებებზე დაყრდნობით ჩვენ შევძლოთ ამ სიახლის გაუმჯობესება.',
	'betafeatures-about-betafeatures' => 'ბეტა შესაძლებლობების შესახებ',
	'betafeatures-discuss-betafeatures' => 'გამოხმაურების დატოვება',
);

/** Kazakh (Cyrillic script) (қазақша (кирил)‎)
 * @author Arystanbek
 */
$messages['kk-cyrl'] = array(
	'mw-ui-feature-discuss' => 'талқылауы',
	'mw-ui-feature-info' => 'мәлімет',
	'mw-ui-feature-user-count' => '{{PLURAL:$1|Бір қатысушы|$1 қатысушы|0=ешбір қатысушы}} бұл мүмкіндікті қосқан.',
	'mw-ui-feature-requirements-betafeatures' => 'Бұл мүмкіндікті қосу үшін төмендегі {{PLURAL:$1|мүмкіндікті|мүмкіндіктерді}} қосуы керек:',
	'mw-ui-feature-requirements-browser' => 'Төмендегі {{PLURAL:$1|шолғыш|шолғыштар}} қолдамайды:',
	'mw-ui-feature-requirements-javascript' => 'Бұл мүмкіндік JavaScript керек етеді',
	'mw-ui-feature-requirements-skins' => 'Бұл мүмкіндік теу  {{PLURAL:$1|келесі күйде|келесі күйлерде}} жұмыс істейді:',
	'prefs-betafeatures' => 'Beta мүмкіндіктер',
	'betafeatures-toplink' => 'Beta',
	'betafeatures-auto-enroll' => 'Барлық жаңа beta мүмкіндіктерді өздікті қосу',
	'betafeatures-section-desc' => 'Сізге {{SITENAME}} сайтына арналған {{PLURAL:$1|жаңа мүмкіндікті|жаңа мүмкіндіктерді}} ұсынамыз. {{PLURAL:$1|Оны|Оларды}} сынап көріп, өз ойларыңызбен бөлісуіңізді сұраймыз. Сіз берген сын-бағалардың негізінде {{PLURAL:$1|оны|оларды}} жетілдіруге мүмкіндігіміз бар.',
	'betafeatures-about-betafeatures' => 'Beta мүмкіндіктер туралы',
	'betafeatures-discuss-betafeatures' => 'Пікір қалдыру',
);

/** Khmer (ភាសាខ្មែរ)
 * @author គីមស៊្រុន
 */
$messages['km'] = array(
	'mw-ui-feature-discuss' => 'ការពិភាក្សា',
	'mw-ui-feature-info' => 'ព័ត៌មាន',
	'mw-ui-feature-user-count' => '{{PLURAL:$1|អ្នកប្រើប្រាស់ម្នាក់|អ្នកប្រើប្រាស់ចំនួន $1 នាក់|0=គ្មានអ្នកប្រើប្រាស់ណាម្នាក់}} បានបើកប្រើមុខងារនេះទេ។',
	'mw-ui-feature-requirements-betafeatures' => 'មុខងារនេះត្រូវការអោយបើកប្រើ {{PLURAL:$1|មុខងារ|មុខងារ}} ដូចខាងក្រោម៖',
	'mw-ui-feature-requirements-browser' => '{{PLURAL:$1|ឧបការណ៍រាវរកអ៊ីនធើណិត|ឧបការណ៍រាវរកអ៊ីនធើណិត}} ខាងក្រោមមិនអាចប្រើបានទេ៖',
	'mw-ui-feature-requirements-javascript' => 'មុខងារនេះត្រូវការ JavaScript ។',
	'mw-ui-feature-requirements-skins' => 'មុខងារនេះដំណើរការតែជាមួយ {{PLURAL:$1|សំបកខាងក្រោម|សំបកខាងក្រោម}}ប៉ុណ្ណោះ៖',
	'prefs-betafeatures' => 'មុខងារពិសេសបេតា',
	'betafeatures-toplink' => 'បេតា',
	'betafeatures-auto-enroll' => 'បើកប្រើមុខងារបេតាថ្មីៗទាំងអស់ដោយស្វ័យប្រវត្តិ',
	'betafeatures-about-betafeatures' => 'អំពីមុខងារពិសេសបេតា',
	'betafeatures-discuss-betafeatures' => 'ផ្ដល់​មតិ​កែ​លម្អ',
	'betafeatures-extension-type' => 'មុខងារពិសេសបេតា',
);

/** Korean (한국어)
 * @author AlexPark
 * @author Hym411
 * @author Kwj2772
 * @author Priviet
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
	'betafeatures-section-desc' => '{{SITENAME}}를 고려하고 있는 {{PLURAL:$1|새로운 기능|새로운 기능들}}이 있습니다. 사용해 보시고, 의견을 남겨 주시면, 의견을 바탕으로 발전시켜 나가겠습니다.',
	'betafeatures-tooltip' => '베타 기능을 소개합니다! 이 새로운 환경 설정을 사용하여 저희가 기본 설정으로 설정하기 전에 새로운 기능에 대한 의견을 들을 수 있습니다! 새 기능을 시도해 보세요!',
	'betafeatures-about-betafeatures' => '베타 기능에 대해서',
	'betafeatures-discuss-betafeatures' => '피드백 남기기',
	'betafeatures-extension-type' => '베타 기능',
);

/** Colognian (Ripoarisch)
 * @author Purodha
 */
$messages['ksh'] = array(
	'mw-ui-feature-discuss' => 'Klaaf',
	'mw-ui-feature-info' => 'Enfomazjuhne',
	'mw-ui-feature-user-count' => '{{PLURAL:$1|Eine metmaacher hät|$1 Metmaacher han|Keine Metmaacher hät}} dat enjeschalld.',
	'mw-ui-feature-requirements-betafeatures' => 'Dat heh bruch de volljende {{PLURAL:$1|Saach|Saache|Saach}} och noch:',
	'mw-ui-feature-requirements-browser' => '{{PLURAL:$1|Heh dä|Heh di|Keine}} weed nit öngerschtöz:',
	'mw-ui-feature-requirements-javascript' => 'Dat heh bruch JavaSkrep.',
	'mw-ui-feature-requirements-skins' => 'Jat jeiht {{PLURAL:$1|bloß med dä Bedeebovverfläsch|bloß med dä volljende Bedeebovverfläsche:|met keine Bedeebovverfläsch.}}',
	'prefs-betafeatures' => 'Eijeschaffte zom Ußprobeere',
	'betafeatures-desc' => 'Löht der Metmaacher Saache un Eijeschaffte em Wiki bruche udder ußschallde, di noch nit rääsch fäädesch för er alljemeine Jebruch sin künnte.',
	'betafeatures-toplink' => 'Zom ußprobeere',
	'betafeatures-auto-enroll' => 'Donn den neue Denge zum Ußprobeere Automattesch enschallde.',
	'betafeatures-about-betafeatures' => 'Övver des Saache zom Ußprobeere',
	'betafeatures-discuss-betafeatures' => 'Jivv_en Enschäzong af',
	'betafeatures-extension-type' => 'Zom Ußprobeere',
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
	'mw-ui-feature-requirements-betafeatures' => "Dës Funktioun erfuerdert d'Aktivéiere vun {{PLURAL:$1|dëser Funktioun|dëse Funktiounen}}:",
	'mw-ui-feature-requirements-browser' => '{{PLURAL:$1|Dëse Browser gëtt|Dës Browsere ginn}} net ënnerstëtzt:',
	'mw-ui-feature-requirements-javascript' => 'Dës Funktioun brauch JavaScript',
	'mw-ui-feature-requirements-skins' => 'Dës Funktioun funktionéiert nëmme mat {{PLURAL:$1|dësem Benotzerinterfacen|dëse Benotzerinterfacen}}:',
	'prefs-betafeatures' => 'Beta-Funktiounen',
	'betafeatures-desc' => 'Léisst Benotzer Funktiounen op der Wiki aktivéieren oder desaktivéieren déi nach net fäerdeg entwéckelt sinn',
	'betafeatures-toplink' => 'Beta',
	'betafeatures-auto-enroll' => 'Automatesch all Beta-Funktiounen aschalten',
	'betafeatures-section-desc' => 'Hei {{PLURAL:$1|ass eng nei Funktioun|sinn e puer nei Funktiounen}} déi mir fir {{SITENAME}} proposéieren. Probéiert se w.e.g. aus an deelt eis Är Iwwerleeungen dozou mat, da kënne mir se op der Basis vun Ärem Feedback verbesseren.',
	'betafeatures-tooltip' => "Aféierung an d'Beta Funktiounen! Dësen neien Abschnitt vun den Astellungen erméiglecht et Iech fir nei Funktiounen ze testen an äre Feedback ze ginn ier si als Standard-Funktioun aktivéieren. Probéiert elo eppes Neies aus!",
	'betafeatures-about-betafeatures' => 'Iwwer Betafunktiounen',
	'betafeatures-discuss-betafeatures' => 'Feedback ginn',
	'betafeatures-extension-type' => 'Beta-Funktiounen',
);

/** Lithuanian (lietuvių)
 * @author Eitvys200
 */
$messages['lt'] = array(
	'betafeatures-toplink' => 'Beta Funkcijos', # Fuzzy
);

/** Malagasy (Malagasy)
 * @author Jagwar
 */
$messages['mg'] = array(
	'betafeatures-extension-type' => 'Fitaovana beta',
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
	'betafeatures-section-desc' => 'Еве {{PLURAL:$1|една нова функција што ја планираме|некои нови функции што ги планираме}} за {{SITENAME}}. Испробајте ги и кажете ни што мислите, за да можеме да ги подобриме во склад со вашите наоѓања.',
	'betafeatures-tooltip' => 'Ви ги претставуваме новите Бета-функции! Овој нов дел со нагодувања ви овозможува да ги испробувате новите функции и да ни давате ваше мислење пред да ги пуштиме како стандардни. Пробајте некоја нова функција сега!',
	'betafeatures-about-betafeatures' => 'За бета-функциите',
	'betafeatures-discuss-betafeatures' => 'Дајте мислење',
	'betafeatures-extension-type' => 'Бета-можности',
);

/** Malayalam (മലയാളം)
 * @author Praveenp
 */
$messages['ml'] = array(
	'mw-ui-feature-discuss' => 'സം‌വാദം',
	'mw-ui-feature-info' => 'വിവരം',
	'mw-ui-feature-user-count' => '{{PLURAL:$1|ഒരു ഉപയോക്താവ്|$1 ഉപയോക്താക്കൾ|0=ഇതുവരെ ആരും }} ഈ സൗകര്യം {{PLURAL:$1|സജ്ജമാക്കി.|0=സജ്ജമാക്കിയില്ല.}}',
	'mw-ui-feature-requirements-betafeatures' => 'ഈ സൗകര്യം സജ്ജമാക്കാൻ താഴെക്കൊടുക്കുന്ന {{PLURAL:$1|സവിശേഷത|സവിശേഷതകൾ}} സജ്ജമാക്കേണ്ടതുണ്ട്:',
	'mw-ui-feature-requirements-browser' => 'താഴെപ്പറയുന്ന {{PLURAL:$1|ബ്രൗസർ|ബ്രൗസറുകൾ}}പിന്തുണയ്ക്കുന്നില്ല:',
	'mw-ui-feature-requirements-javascript' => 'ഈ സൗകര്യം പ്രവർത്തിക്കാൻ ജാവാസ്ക്രിപ്റ്റ് ആവശ്യമാണ്.',
	'mw-ui-feature-requirements-skins' => 'ഈ സൗകര്യം {{PLURAL:$1|ഈ ദൃശ്യരൂപത്തിൽ|ഈ ദൃശ്യരൂപങ്ങളിൽ}} മാത്രമേ പ്രവർത്തിക്കൂ:',
	'prefs-betafeatures' => 'പരീക്ഷണാടിസ്ഥാനത്തിലുള്ള സൗകര്യങ്ങൾ',
	'betafeatures-desc' => 'മുഖ്യധാരയ്ക്ക് തയ്യാറാവാത്ത സവിശേഷതകൾ വിക്കിയിൽ പരീക്ഷിക്കാൻ ഉപയോക്താക്കളെ അനുവദിക്കുന്നു',
	'betafeatures-toplink' => 'ബീറ്റ',
	'betafeatures-auto-enroll' => 'സ്വയം എല്ലാ ബീറ്റാ സവിശേഷതകളും സജ്ജമാക്കുക',
	'betafeatures-section-desc' => '{{SITENAME}} സംരംഭത്തിനായി ഞങ്ങൾ  പരിഗണിക്കുന്ന {{PLURAL:$1|സവിശേഷ സൗകര്യം|സവിശേഷ സൗകര്യങ്ങൾ}} നൽകുന്നു. ദയവായി {{PLURAL:$1|അത്|അവ}} പരീക്ഷിക്കുകയും താങ്കളുടെ അഭിപ്രായം അറിയിക്കുകയും ചെയ്യുക, അതുവഴി ഞങ്ങൾക്ക്  {{PLURAL:$1|അത്|അവ}} മെച്ചപ്പെടുത്താനാവുന്നതാണ്.',
	'betafeatures-tooltip' => 'പരീക്ഷണാടിസ്ഥാനത്തിലുള്ള സൗകര്യങ്ങൾ അവതരിപ്പിക്കുന്നു! ഈ പുതിയ ക്രമീകരണങ്ങൾ എല്ലാവർക്കുമായി നൽകുന്നതിനു മുമ്പ് താങ്കൾക്ക് പരീക്ഷിക്കാനും, അങ്ങനെ താങ്കൾക്ക് അവ പരീക്ഷിക്കാനും പ്രതികരണം അറിയിക്കാനുമുള്ള അവസരം നൽകുന്നു. പുതിയ സൗകര്യങ്ങൾ ഇപ്പോൾ തന്നെ പരിശോധിക്കുക!',
	'betafeatures-about-betafeatures' => 'പരീക്ഷണാടിസ്ഥാനത്തിലുള്ള സൗകര്യങ്ങളുടെ വിവരണം',
	'betafeatures-discuss-betafeatures' => 'പ്രതികരണം ചേർക്കുക',
	'betafeatures-extension-type' => 'പരീക്ഷണാടിസ്ഥാനത്തിലുള്ള സൗകര്യങ്ങൾ',
);

/** Marathi (मराठी)
 * @author V.narsikar
 */
$messages['mr'] = array(
	'mw-ui-feature-discuss' => 'चर्चा',
	'mw-ui-feature-info' => 'माहिती',
	'mw-ui-feature-user-count' => '{{PLURAL:$1|एका सदस्याने|$1 सदस्यांनी|0=कोणत्याही सदस्याने नव्हे}} हा फिचर सक्षम केला आहे.',
	'mw-ui-feature-requirements-betafeatures' => 'या फिचरसाठी खालील {{PLURAL:$1|फिचर|फिचर्स}} सक्षम करावे लागतात:',
	'mw-ui-feature-requirements-browser' => 'खालील {{PLURAL:$1|न्याहाळक}} सहाय्यीभूत नाहीत:',
	'mw-ui-feature-requirements-javascript' => 'या फिचरसाठी जावास्क्रिप्ट हवी.',
	'mw-ui-feature-requirements-skins' => '{{PLURAL:$1|खालील त्वचेसाठीच|खालील त्वचांसाठीच}} हा फिचर काम करतो:',
	'prefs-betafeatures' => 'बीटा तोंडवळा',
	'betafeatures-desc' => 'सदस्यास,या विकिवर कोणतेही फिचर्स जे अद्याप पूर्ण सुविधांसह परिपूर्ण नाहीत,सक्षम किंवा अक्षम करू देते',
	'betafeatures-toplink' => 'बीटा',
	'betafeatures-auto-enroll' => 'स्वयंचलितरित्या सर्व नविन बीटा फिचर्स सक्षम करा',
	'betafeatures-section-desc' => 'आम्ही {{SITENAME}} साठी विचारात घेत {{PLURAL:$1|असलेला एक नविन फिचर|असलेले काही नविन फिचर्स}} येथे आहेत.{{PLURAL:$1|त्यास|त्यांना}} वापरून बघुन आपले विचार आम्हास कळवा जेणेकरुन, आपल्या प्रतिक्रिया अनुसरुन, {{PLURAL:$1|त्यास|त्यांना}} आम्ही जास्त चांगले करु शकु.',
	'betafeatures-tooltip' => 'बीटा फिचर्सची ओळख करून देत आहो!त्यांना डिफॉल्ट वर्तन म्हणून विमोचन करण्यापूर्वी, पसंतीक्रमाचा हा नविन विभाग आपणास त्याची चाचणी करू देईल व त्याबद्दलची प्रतिक्रिया देणे शक्य करेल.आता काहीतरी नविन वापरून बघा!',
	'betafeatures-about-betafeatures' => 'बीटा फिचर्स बद्दल',
	'betafeatures-discuss-betafeatures' => 'प्रतिसाद द्या',
	'betafeatures-extension-type' => 'बीटा तोंडवळा',
);

/** Maltese (Malti)
 * @author Chrisportelli
 */
$messages['mt'] = array(
	'betafeatures-section-desc' => "{{PLURAL:$1|Din hija funzjonalità ġdida|Dawn huma funzjonijiet ġodda}} li qegħdin nikkunsidraw għal {{SITENAME}}. Tista' tipprova{{PLURAL:$1|ha|hom}} u tgħildna x'taħseb, sabiex inkunu nistgħu ntejjbu{{PLURAL:$1|ha|hom}} skont dak li tkun għidtilna.",
	'betafeatures-about-betafeatures' => 'Dwar il-funzjonijiet Beta',
);

/** Norwegian Bokmål (norsk bokmål)
 * @author Danmichaelo
 */
$messages['nb'] = array(
	'mw-ui-feature-discuss' => 'diskusjon',
	'mw-ui-feature-info' => 'informasjon',
	'mw-ui-feature-user-count' => '{{PLURAL:$1|En bruker|$1 brukere|0=Ingen brukere}} har skrudd på denne funksjonen.',
	'mw-ui-feature-requirements-betafeatures' => 'Denne funksjonen krever at følgende {{PLURAL:$1|funksjon|funksjoner}} er påskrudd:',
	'mw-ui-feature-requirements-browser' => 'Følgende {{PLURAL:$1|nettleser|nettlesere}} er ikke støttet:',
	'mw-ui-feature-requirements-javascript' => 'Denne funksjonen krever JavaScript.',
	'mw-ui-feature-requirements-skins' => 'Denne funksjonen virker kun med {{PLURAL:$1|den følgende drakten|de følgende draktene}}:',
	'prefs-betafeatures' => 'Betafunksjoner',
	'betafeatures-desc' => 'La brukere aktivere eller deaktivere funksjoner på wikien som ikke enda er helt ferdige.',
	'betafeatures-toplink' => 'Beta',
	'betafeatures-auto-enroll' => 'Automatisk aktiver alle nye betafunksjoner',
	'betafeatures-section-desc' => 'Her {{PLURAL:$1|er en ny funksjon|er noen nye funksjoner}} vi vurderer å innføre på {{SITENAME}}. Prøv {{PLURAL:$1|den|dem}} gjerne og gi oss din tilbakemelding, så vi kan forbedre {{PLURAL:$1|den|dem}}.',
	'betafeatures-tooltip' => 'Vi introduserer betafunksjoner! Denne nye innstillingsseksjonen lar deg teste og gi tilbakemelding på nye funksjoner før vi lanserer dem som standardfunksjoner. Prøv noe nytt nå!',
	'betafeatures-about-betafeatures' => 'Om betafunksjoner',
	'betafeatures-discuss-betafeatures' => 'Gi tilbakemelding',
);

/** Dutch (Nederlands)
 * @author Flightmare
 * @author Romaine
 * @author Siebrand
 * @author Sjoerddebruin
 * @author TBloemink
 */
$messages['nl'] = array(
	'mw-ui-feature-discuss' => 'overleg',
	'mw-ui-feature-info' => 'informatie',
	'mw-ui-feature-user-count' => '{{PLURAL:$1|Eén gebruiker heeft|$1 gebruikers hebben|0=Geen enkele gebruiker heeft}} deze functie ingeschakeld.',
	'mw-ui-feature-requirements-betafeatures' => 'Deze functie vereist dat de volgende {{PLURAL:$1|functie wordt|functies worden}} ingeschakeld:',
	'mw-ui-feature-requirements-browser' => 'De volgende {{PLURAL:$1|browser wordt|browsers worden}} niet ondersteund:',
	'mw-ui-feature-requirements-javascript' => 'Deze functie vereist JavaScript.',
	'mw-ui-feature-requirements-skins' => 'Deze functie werkt alleen met {{PLURAL:$1|het volgende uiterlijk|een van de volgende uiterlijken}}:',
	'prefs-betafeatures' => 'Betafuncties',
	'betafeatures-desc' => 'Laat de gebruiker functies die in ontwikkeling zijn in- of uitschakelen',
	'betafeatures-toplink' => 'Beta',
	'betafeatures-auto-enroll' => 'Automatisch alle betafuncties inschakelen',
	'betafeatures-section-desc' => 'Hier {{PLURAL:$1|is een nieuwe functie|zijn enkele nieuwe functies}} die we overwegen voor {{SITENAME}}. Probeer {{PLURAL:$1|deze|ze}} uit en laat ons weten wat u ervan vindt, zodat wij {{PLURAL:$1|de functie|ze}} kunnen verbeteren.',
	'betafeatures-tooltip' => 'Introductie van Beta Features! Via dit nieuwe onderdeel kunt u nieuwe functies testen en er terugkoppeling over geven voordat we ze invoeren als standaard. Probeer nu iets nieuws uit!',
	'betafeatures-about-betafeatures' => 'Over de Betafuncties',
	'betafeatures-discuss-betafeatures' => 'Terugkoppeling achterlaten',
	'betafeatures-extension-type' => 'Betafuncties',
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
	'mw-ui-feature-requirements-skins' => 'Ta funkcja działa tylko z {{PLURAL:$1|następującą skórką|następującymi skórkami}}:',
	'prefs-betafeatures' => 'Funkcje eksperymentalne',
	'betafeatures-desc' => 'Pozwala użytkownikom włączać lub wyłączać funkcje, które nie są jeszcze w pełni dopracowane',
	'betafeatures-toplink' => 'Funkcje eksperymentalne',
	'betafeatures-auto-enroll' => 'Automatycznie włączaj nowe funkcje eksperymentalne',
	'betafeatures-section-desc' => 'Masz możliwość przetestowania {{PLURAL:$1|nowej, eksperymentalnych funkcji|nowych, eksperymentalnych funkcji}} przygotowanych dla {{GRAMMAR:D.lp|{{SITENAME}}}}. Prosimy o ich wypróbowanie i przekazanie nam swoich refleksji, abyśmy mogli je ulepszyć bazując na Twoich komentarzach.',
	'betafeatures-tooltip' => 'Sekcja funkcji eksperymentalnych umożliwia Ci testowanie i wyrażanie opinii na temat nowych funkcji, zanim uruchomimy je jako domyślne zachowanie. Wypróbuj coś nowego!',
	'betafeatures-about-betafeatures' => 'O funkcjach eksperymentalnych',
	'betafeatures-discuss-betafeatures' => 'Skomentuj',
	'betafeatures-extension-type' => 'Funkcje eksperymentalne',
);

/** Pashto (پښتو)
 * @author Ahmed-Najib-Biabani-Ibrahimkhel
 */
$messages['ps'] = array(
	'mw-ui-feature-info' => 'مالومات',
	'prefs-betafeatures' => 'د آزمېښتي بڼې ځانگړنې',
	'betafeatures-toplink' => 'بيټا',
	'betafeatures-auto-enroll' => 'په اتوماتيک ډول ټولې نوې بيټا ځانتياوې چارنول',
);

/** Portuguese (português)
 * @author Fúlvio
 * @author Imperadeiro98
 * @author Vitorvicentevalente
 */
$messages['pt'] = array(
	'mw-ui-feature-discuss' => 'discussão',
	'mw-ui-feature-info' => 'informação',
	'mw-ui-feature-user-count' => '{{PLURAL:$1|Um utilizador|$1 utilizadores}} activaram este recurso.',
	'mw-ui-feature-requirements-betafeatures' => 'Este recurso necessita {{PLURAL:$1|do seguinte recurso|dos seguintes recursos}} para ser ativado:',
	'mw-ui-feature-requirements-browser' => '{{PLURAL:$1|O seguinte navegador não é suportado|Os seguintes navegadores não são suportados}}:',
	'mw-ui-feature-requirements-javascript' => 'Este recurso requer JavaScript.',
	'mw-ui-feature-requirements-skins' => 'Este recurso apenas funciona {{PLURAL:$1|no seguinte tema|num dos seguintes temas}}:',
	'prefs-betafeatures' => 'Recursos Beta',
	'betafeatures-desc' => 'Permite que o utilizador active ou desactive os recursos da wiki que ainda não estão prontos',
	'betafeatures-toplink' => 'Beta',
	'betafeatures-auto-enroll' => 'Activar automaticamente todos os novos recursos beta',
	'betafeatures-section-desc' => 'Aqui {{PLURAL:$1|encontra-se um novo recurso|encontram-se novos recursos}} que estamos a considerar para {{SITENAME}}. Por favor, {{PLURAL:$1|teste-o|teste-os}} e diga o que pensa {{PLURAL:$1|dele|deles}}, para que possamos {{PLURAL:$1|melhorá-lo|melhorá-los}} com base no seu comentário.',
	'betafeatures-tooltip' => 'Apresentamos os Recursos Beta! Esta nova secção das suas preferências permite que teste e comente sobre os novos recursos antes de implementá-los como padrão. Experimente algo novo agora!',
	'betafeatures-about-betafeatures' => 'Sobre os Recursos Beta',
	'betafeatures-discuss-betafeatures' => 'Deixe um comentário',
	'betafeatures-extension-type' => 'Recursos Beta',
);

/** Brazilian Portuguese (português do Brasil)
 * @author Cainamarques
 * @author Fúlvio
 * @author Helder.wiki
 */
$messages['pt-br'] = array(
	'mw-ui-feature-discuss' => 'discussão',
	'mw-ui-feature-info' => 'informação',
	'mw-ui-feature-user-count' => '{{PLURAL:$1|Um usuário ativou|$1 usuários ativaram|0=Nenhum usuário ativou}} este recurso.',
	'mw-ui-feature-requirements-betafeatures' => 'Este recurso necessita {{PLURAL:$1|do seguinte recurso|dos seguintes recursos}} para ser ativado:',
	'mw-ui-feature-requirements-browser' => '{{PLURAL:$1|O seguinte navegador não é suportado|Os seguintes navegadores não são suportados}}:',
	'mw-ui-feature-requirements-javascript' => 'Este recurso requer JavaScript.',
	'mw-ui-feature-requirements-skins' => 'Este recurso funciona com {{PLURAL:$1|o seguinte skin|os seguintes skins}}:',
	'prefs-betafeatures' => 'Recursos beta',
	'betafeatures-desc' => 'Permite ao usuário ativar ou desativar funções da wiki que ainda não estão prontas para serem ativamente usadas',
	'betafeatures-toplink' => 'Beta',
	'betafeatures-auto-enroll' => 'Ativar automaticamente todos os novos recursos beta',
	'betafeatures-section-desc' => 'Aqui {{PLURAL:$1|encontra-se um novo recurso|encontram-se novos recursos}} que estamos considerando para {{SITENAME}}. Por favor, {{PLURAL:$1|teste-o|teste-os}} e diga o que pensa {{PLURAL:$1|dele|deles}}, para que possamos {{PLURAL:$1|melhorá-lo|melhorá-los}} com base em seu comentário.',
	'betafeatures-tooltip' => 'Apresentando os Recursos Beta! Esta nova seção das preferências permite que você teste e comente sobre os novos recursos antes que sejam implementados como padrão. Experimente algo novo agora!',
	'betafeatures-about-betafeatures' => 'Sobre os Recursos Beta',
	'betafeatures-discuss-betafeatures' => 'Deixe um comentário',
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
	'betafeatures-section-desc' => 'Mai jos {{PLURAL:$1|se află o caracterisitică nouă|sunt câteva caracteristici noi}} pe care {{PLURAL:$1|o|le}} luăm în calcul la {{SITENAME}}. Încercați-{{PLURAL:$1|o|le}} și spuneți-ne ce credeți, astfel încât să {{PLURAL:$1|o|le}} îmbunătățim pe baza părerilor dumneavoastră.',
	'betafeatures-tooltip' => 'Vă prezentăm funcțiile beta! Această nouă secțiune a preferințelor vă permite să testați și să comentați noile caracteristici înainte de lansarea lor generală. Încercați chiar acum ceva nou!',
	'betafeatures-about-betafeatures' => 'Despre opțiunile beta',
	'betafeatures-discuss-betafeatures' => 'Lăsați o părere',
);

/** tarandíne (tarandíne)
 * @author Joetaras
 */
$messages['roa-tara'] = array(
	'mw-ui-feature-discuss' => "'ngazzamende",
	'mw-ui-feature-info' => "'mbormaziune",
	'mw-ui-feature-user-count' => "{{PLURAL:$1|'Nu utende ave|$1 utinde onne|0=nisciune utende ave}} abbilitate sta funzione.",
	'prefs-betafeatures' => 'Funziune de Beta',
	'betafeatures-desc' => "Lasse l'utende a abbilità o disabbilità le funziune sus 'a ucchi ca non ge so angore pronde pa prima vote",
	'betafeatures-toplink' => 'Beta',
	'betafeatures-auto-enroll' => 'Automaticamende abbilite tutte le funziune beta nove',
	'betafeatures-section-desc' => "Aqquà {{PLURAL:$1|ste 'na funziona nove|stonne cchiù funziune nove}} ca ste considerame pe {{SITENAME}}. Pe piacere pruèvale e danne 'na parere, accussì nuje putime migliorà basannene sus 'a segnalaziona toje.",
	'betafeatures-discuss-betafeatures' => "Lasse 'na segnalazione",
);

/** Russian (русский)
 * @author Kaganer
 * @author Lockal
 * @author Lord Dimetr
 * @author Okras
 */
$messages['ru'] = array(
	'mw-ui-feature-discuss' => 'обсуждение',
	'mw-ui-feature-info' => 'информация',
	'mw-ui-feature-user-count' => '{{PLURAL:$1|Один пользователь включил|$1 пользователей включили|0=Никто не включил|$1 пользователя включили}} эту функцию.',
	'mw-ui-feature-requirements-betafeatures' => 'Эта функция требует, чтоб {{PLURAL:$1|1=была включена следующая функция|были включены следующие функции}}:',
	'mw-ui-feature-requirements-browser' => '{{PLURAL:$1|1=Следующий браузер не поддерживается|Следующие браузеры не поддерживаются}}:',
	'mw-ui-feature-requirements-javascript' => 'Эта функция требует JavaScript.',
	'mw-ui-feature-requirements-skins' => 'Эта функция работает только со {{PLURAL:$1|1=следующей темой|следующими темами}}:',
	'prefs-betafeatures' => 'Бета-функции',
	'betafeatures-desc' => 'Позволяет пользователю включить или отключить функции, которые еще не готовы к прайм-тайм',
	'betafeatures-toplink' => 'Бета-версия',
	'betafeatures-auto-enroll' => 'Автоматически включать все новые бета-функции',
	'betafeatures-section-desc' => '{{PLURAL:$1|1=Появилась новая функция, которую|Появилось несколько новых функций, которые}} мы продумываем для {{grammar:genitive|{{SITENAME}}}}. Пожалуйста, попробуйте {{PLURAL:$1|1=её|их}} и выскажите нам свои соображения, чтобы мы могли улучшить {{PLURAL:$1|1=это нововведения|эти нововведения}}, основываясь на ваших отзывах.',
	'betafeatures-tooltip' => 'Представляем бета-функции! Этот новый раздел настроек позволит вам протестировать и оставить отзывы о новых возможностях до того, как мы их запустим для всех по умолчанию. Попробуйте что-то новое уже сейчас!',
	'betafeatures-about-betafeatures' => 'О бета-функциях',
	'betafeatures-discuss-betafeatures' => 'Оставить отзыв',
	'betafeatures-extension-type' => 'Бета-функции',
);

/** Sanskrit (संस्कृतम्)
 * @author Visdaviva
 */
$messages['sa'] = array(
	'mw-ui-feature-discuss' => 'सम्भाषणम्',
	'mw-ui-feature-info' => 'सूचना',
);

/** Scots (Scots)
 * @author John Reid
 */
$messages['sco'] = array(
	'betafeatures-extension-type' => 'Beta features',
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
	'betafeatures-section-desc' => 'Tu {{PLURAL:$1|je nova možnost|je nekaj novih možnosti}}, ki {{PLURAL:$1|jo|jih}} načrtujemo za {{SITENAME}}. Prosimo, {{PLURAL:$1|preizkusite jo|preizkusite jih}} in nam sporočite svoje mnenje, tako da {{PLURAL:$1|jo|jih}} bomo lahko na podlagi vaših povratnih informacij izboljšali.',
	'betafeatures-tooltip' => 'Predstavljamo Betamožnosti! Novi razdelek v nastavitvah vam omogoča preizkušanje in posredovanje povratnih informacij o novih možnostih, preden jih uveljavimo kot privzeto vedenje. Poskusite nekaj novega!',
	'betafeatures-about-betafeatures' => 'O Betamožnostih',
	'betafeatures-discuss-betafeatures' => 'Pustite povratne informacije',
);

/** Serbian (Cyrillic script) (српски (ћирилица)‎)
 * @author Milicevic01
 */
$messages['sr-ec'] = array(
	'mw-ui-feature-discuss' => 'расправа',
	'mw-ui-feature-info' => 'информације',
	'mw-ui-feature-user-count' => '{{PLURAL:$1|Један корисник је укључио ову могућност|Ову могућност је укључило $1 корисника|0=Ниједан корисник није укључио ову могућност.}}',
	'prefs-betafeatures' => 'Бета могућности',
	'betafeatures-toplink' => 'Бета могућности',
	'betafeatures-auto-enroll' => 'Аутоматски укључи бета могућности.',
	'betafeatures-about-betafeatures' => 'О бета могућностима',
	'betafeatures-discuss-betafeatures' => 'Повратне информације',
);

/** Serbian (Latin script) (srpski (latinica)‎)
 * @author Milicevic01
 */
$messages['sr-el'] = array(
	'mw-ui-feature-discuss' => 'rasprava',
	'mw-ui-feature-info' => 'informacije',
	'mw-ui-feature-user-count' => '{{PLURAL:$1|Jedan korisnik je uključio ovu mogućnost|Ovu mogućnost je uključilo $1 korisnika|0=Nijedan korisnik nije uključio ovu mogućnost.}}',
	'prefs-betafeatures' => 'Beta mogućnosti',
	'betafeatures-toplink' => 'Beta mogućnosti',
	'betafeatures-auto-enroll' => 'Automatski uključi beta mogućnosti.',
	'betafeatures-about-betafeatures' => 'O beta mogućnostima',
	'betafeatures-discuss-betafeatures' => 'Povratne informacije',
);

/** Swedish (svenska)
 * @author Ainali
 * @author Jopparn
 * @author NH
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
	'mw-ui-feature-requirements-skins' => 'Den här funktionen kräver att du använder {{PLURAL:$1|följande utseende|en av de följande utseenden}}:',
	'prefs-betafeatures' => 'Betafunktioner',
	'betafeatures-desc' => 'Låter användare aktivera eller inaktivera funktioner på wikin som fortfarande inte är helt färdiga',
	'betafeatures-toplink' => 'Beta',
	'betafeatures-auto-enroll' => 'Aktivera automatiskt alla nya betafunktioner',
	'betafeatures-section-desc' => 'Följande {{PLURAL:$1|funktion|funktioner}} är under utveckling och kan komma att införas på {{SITENAME}}. Prova {{PLURAL:$1|den|dem}} gärna, och lämna gärna förslag på förbättringar.',
	'betafeatures-tooltip' => 'Vi intoruducerar betafunktioner! Denna nya inställningsavsnitt låter dig testa och ge återkoppling på nya funktioner innan vi lanserar dem som standardfunktionerna. Testa något nytt nu!',
	'betafeatures-about-betafeatures' => 'Om betafunktioner',
	'betafeatures-discuss-betafeatures' => 'Ge återkoppling',
	'betafeatures-extension-type' => 'Betafunktioner',
);

/** Silesian (ślůnski)
 * @author Krol111
 */
$messages['szl'] = array(
	'betafeatures-toplink' => 'Ekszperymentalne funkcyje',
);

/** Telugu (తెలుగు)
 * @author Chaduvari
 * @author Ravichandra
 * @author Veeven
 * @author Visdaviva
 */
$messages['te'] = array(
	'mw-ui-feature-discuss' => 'చర్చ',
	'mw-ui-feature-info' => 'సమాచారం',
	'mw-ui-feature-requirements-javascript' => 'ఈ సౌలభ్యానికి జావాస్క్రిప్టు కావాలి.',
	'prefs-betafeatures' => 'బీటా సౌలభ్యాలు',
	'betafeatures-toplink' => 'బీటా',
	'betafeatures-auto-enroll' => 'అన్నీ బీటా సౌలభ్యాలు వాటంతట అవే చేతనం కావాలి',
	'betafeatures-about-betafeatures' => 'బీటా సౌలభ్యాల గురించి',
	'betafeatures-discuss-betafeatures' => 'సూచనలివ్వండి',
	'betafeatures-extension-type' => 'బీటా విశేషాలు',
);

/** Turkish (Türkçe)
 * @author Incelemeelemani
 * @author Meelo
 * @author Rapsar
 */
$messages['tr'] = array(
	'mw-ui-feature-discuss' => 'tartışma',
	'mw-ui-feature-info' => 'bilgi',
	'mw-ui-feature-user-count' => '{{PLURAL:$1|Bir kullanıcı|$1 kullanıcı}} bu özelliği etkinleştirdi.',
	'mw-ui-feature-requirements-betafeatures' => 'Bu özelliğin etkin olabilmesi için şu {{PLURAL:$1|özelliğe|özelliklere}} gereksinim duymaktadır:',
	'mw-ui-feature-requirements-browser' => 'Aşağıdaki {{PLURAL:$1|tarayıcı|tarayıcılar}} desteklenmemektedir:',
	'mw-ui-feature-requirements-javascript' => 'Bu özellik, JavaScript gerektirir.',
	'mw-ui-feature-requirements-skins' => 'Bu özellik yalnızca {{PLURAL:$1|şu tema|şu temalar}} ile çalışır:',
	'prefs-betafeatures' => 'Beta özellikler',
	'betafeatures-desc' => "Wiki'de hala tam zamanlı kullanım için hazır olmayan özellikleri etkinleştirmenize veya devre dışı bırakmanıza olanak sağlar",
	'betafeatures-toplink' => 'Beta',
	'betafeatures-auto-enroll' => 'Tüm yeni beta özellikleri otomatik olarak etkinleştirin',
	'betafeatures-section-desc' => 'Burada {{SITENAME}} için düşündüğümüz {{PLURAL:$1|yeni özellik|bazı yeni özellikler}} var. {{PLURAL:$1|Özelliği|Özellikleri}}  lütfen deneyin ve düşüncelerinizi bizimle paylaşın. Biz geri bildirimlerinize dayanarak {{PLURAL:$1|özelliği|özellikleri}} geliştiriyoruz.',
	'betafeatures-tooltip' => 'Beta Özellikleri Tanıtımı! Tercihlerinize eklenen bu yeni bölüm ile beta aşamasındaki özelliklerin varsayılan olarak başlatılması sağlanabilir ve bu özellikler hakkında geri bildirimde bulunulabilir. Şimdi yeni bir şeyler deneyin!',
	'betafeatures-about-betafeatures' => 'Beta Özellikler Hakkında',
	'betafeatures-discuss-betafeatures' => 'Geri bildirim bırak',
);

/** Ukrainian (українська)
 * @author Andriykopanytsia
 * @author Lystopad
 * @author Ата
 */
$messages['uk'] = array(
	'mw-ui-feature-discuss' => 'обговорення',
	'mw-ui-feature-info' => 'інформація',
	'mw-ui-feature-user-count' => '{{PLURAL:$1|Один користувач вже увімкнув|$1 користувачі вже увімкнули|$1 користувачів вже увімкнули|0=Жодний користувач ще не увімкнув}} цю функцію.',
	'mw-ui-feature-requirements-betafeatures' => 'Ця функція вимагає, щоб {{PLURAL:$1|1=була включена наступна функція|були включені наступні функції}}:',
	'mw-ui-feature-requirements-browser' => '{{PLURAL:$1|1= Наступний веб-переглядач не підтримується|Наступні веб-переглядачі не підтримуються}}:',
	'mw-ui-feature-requirements-javascript' => 'Ця функція вимагає JavaScript.',
	'mw-ui-feature-requirements-skins' => 'Ця функція працює лише з {{PLURAL:$1|1=наступною темою|однією з наступних тем}}:',
	'prefs-betafeatures' => 'Бета-функції',
	'betafeatures-desc' => 'Дозволяє користувачу вмикати чи вимикати функції вікі, все ще не готові до прайм-тайму',
	'betafeatures-toplink' => 'Бета',
	'betafeatures-auto-enroll' => 'Автоматично увімкнути усі бета-функції',
	'betafeatures-section-desc' => 'Тут  {{PLURAL:$1|1=є нова функція, яку|деякі нові функції, які}} ми розробляємо для  {{SITENAME}}. Спробуйте їх та висловіть ваші думки, щоб ми могли покращити їх, виходячи з ваших відгуків.',
	'betafeatures-tooltip' => 'Представляємо бета-функції! Цей новий розділ налаштувань дозволяє тестувати і надсилати відгуки про нові можливості, перш ніж ми запустимо їх як типову поведінку у основній Медіавікі. Спробувати щось нове зараз!',
	'betafeatures-about-betafeatures' => 'Про бета-функції',
	'betafeatures-discuss-betafeatures' => 'Залишити відгук',
	'betafeatures-extension-type' => 'Бета-функції',
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
	'betafeatures-section-desc' => 'Đây có {{PLURAL:$1|một tính năng|những tính năng}} mới mà chúng tôi đang phát triển cho {{SITENAME}}. Xin vui lòng thử {{PLURAL:$1|nó|chúng}} và gửi cho chúng tôi những ý kiến của bạn để giúp chúng tôi cải thiện {{PLURAL:$1|nó|chúng}}.',
	'betafeatures-tooltip' => 'Giới thiệu các tính năng beta! Phần tùy chọn mới này cho phép bạn thử các tính năng mới và gửi phản hồi trước khi chúng trở thành mặc định. Hãy thử những gì mới ngay bây giờ!',
	'betafeatures-about-betafeatures' => 'Giới thiệu tính năng beta',
	'betafeatures-discuss-betafeatures' => 'Gửi phản hồi',
	'betafeatures-extension-type' => 'Tính năng beta',
);

/** Wu (吴语)
 * @author Benojan
 * @author 十弌
 */
$messages['wuu'] = array(
	'betafeatures-toplink' => '試驗版',
);

/** Yiddish (ייִדיש)
 * @author פוילישער
 */
$messages['yi'] = array(
	'betafeatures-toplink' => 'בעטא',
);

/** Yoruba (Yorùbá)
 * @author Demmy
 */
$messages['yo'] = array(
	'betafeatures-toplink' => 'Bẹ́tà',
);

/** Simplified Chinese (中文（简体）‎)
 * @author Fantasticfears
 * @author Liangent
 * @author Liuxinyu970226
 * @author Qiyue2001
 * @author Shizhao
 * @author Xiaomingyan
 * @author 乌拉跨氪
 */
$messages['zh-hans'] = array(
	'mw-ui-feature-discuss' => '讨论',
	'mw-ui-feature-info' => '信息',
	'mw-ui-feature-user-count' => '{{PLURAL:$1|$1个用户已|0=没有用户}}启用该功能。',
	'mw-ui-feature-requirements-betafeatures' => '启用该功能需要先启用以下{{PLURAL:$1|功能}}：',
	'mw-ui-feature-requirements-browser' => '不支持以下{{PLURAL:$1|浏览器}}：',
	'mw-ui-feature-requirements-javascript' => '该功能需要JavaScript。',
	'mw-ui-feature-requirements-skins' => '该功能只适用于以下{{PLURAL:$1|皮肤}}：',
	'prefs-betafeatures' => '测试功能',
	'betafeatures-desc' => '让用户能够启用或停用仍在本wiki测试的功能',
	'betafeatures-toplink' => '测试版',
	'betafeatures-auto-enroll' => '自动启用所有新测试功能',
	'betafeatures-section-desc' => '我们{{PLURAL:$1|有一个|有一些}}计划用于{{SITENAME}}的新功能。请试用{{PLURAL:$1|该|这些}}功能，并把你的想法告诉我们，以便我们依据你的反馈改进{{PLURAL:$1|它|它们}}。',
	'betafeatures-tooltip' => '欢迎使用测试功能！这个新的设置分项可以让你在我们默认启用新功能前测试它们并提供反馈。现在就来试试这些新功能吧！',
	'betafeatures-about-betafeatures' => '关于功能测试',
	'betafeatures-discuss-betafeatures' => '留下反馈',
	'betafeatures-extension-type' => '测试功能',
);

/** Traditional Chinese (中文（繁體）‎)
 * @author Liuxinyu970226
 * @author Openerror
 * @author StephDC
 */
$messages['zh-hant'] = array(
	'mw-ui-feature-discuss' => '討論',
	'mw-ui-feature-info' => '資訊',
	'mw-ui-feature-user-count' => '{{PLURAL:$1|$1位用戶已|0=尚無用戶}}啟用此功能。',
	'mw-ui-feature-requirements-betafeatures' => '此功能需要啟用以下$1個功能：',
	'mw-ui-feature-requirements-browser' => '不支援以下$1個瀏覽器：',
	'mw-ui-feature-requirements-javascript' => '此功能需要JavaScript。',
	'mw-ui-feature-requirements-skins' => '此功能進於以下$1個皮膚中工作之：',
	'prefs-betafeatures' => '測試功能',
	'betafeatures-desc' => '允許用戶啟用或禁用wiki上仍於測試之功能',
	'betafeatures-toplink' => '測試版',
	'betafeatures-auto-enroll' => '自動啟用所有新的測試版功能',
	'betafeatures-section-desc' => '目前我們考慮將下述之$1個測試功能部署於{{SITENAME}}。請測試之，並遞交反饋。',
	'betafeatures-tooltip' => '介紹測試功能！此設置選項允許您於正式部署前對新功能測試與遞交反饋。歡迎測試！',
	'betafeatures-about-betafeatures' => '關於測試功能',
	'betafeatures-discuss-betafeatures' => '遞交反饋',
	'betafeatures-extension-type' => '測試功能',
);
