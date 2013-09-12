<?php
/**
 * Internationalisation file for Concepts extension.
 *
 */

$messages = array();

$messages['en'] = array(
	'concepts-desc' => 'Allows IP and unconfirmed editor to contribute to the wiki by creating pages within the {{ns:concept}} namespace, and allows qualified reviewers to ensure such pages are suitable for the main article space.',
	'concepts-error' => 'Error in [[{{ns:concept}}:$1|concept $1]]',
	'group-conceptreviewer' => 'Concept reviewers',
	'group-conceptreviewer-member' => '{{GENDER:$1|concept reviewer}}',
	'grouppage-conceptreviewer' => '{{ns:project}}:Concept reviewers',
	'right-editconcepts' => 'Create and edit [http://www.mediawiki.org/wiki/Extension:Concepts concepts] in the <tt>{{ns:concept}}</tt> namespace',

	'group-conceptreviewer.css' => '/* CSS placed here will affect concept reviewers only */', # only translate this message to other languages if you have to change it
	'group-conceptreviewer.js'  => '/* JS placed here will affect concept reviewers only */', # only translate this message to other languages if you have to change it
);

/** Message documentation (Message documentation)
 * @author Fryed-peach
 * @author Khaledelmansourya
 * @author Purodha
 * @author Shirayuki
 * @author Siebrand
 * @author Umherirrender
 * @author 아라
 */
$messages['qqq'] = array(
	'concepts-desc' => '{{desc|name=Concepts|url=http://www.mediawiki.org/wiki/Extension:Concepts}}',
	'group-conceptreviewer' => '{{doc-group|conceptreviewer}}',
	'group-conceptreviewer-member' => '{{doc-group|conceptreviewer|member}}',
	'grouppage-conceptreviewer' => '{{doc-group|conceptreviewer|page}}',
	'right-editconcepts' => '{{doc-right|editconcepts}}',
	'group-conceptreviewer.css' => '{{doc-group|conceptreviewer|css}}',
	'group-conceptreviewer.js' => '{{doc-group|conceptreviewer|js}}',
);

/** Gheg Albanian (Gegë)
 * @author Mdupont
 */
$messages['aln'] = array(
	'concepts-desc' => 'Wiki jep mundësin administratorëve të shtoni pa-formë Concepts në wiki nga faqet redaktimi brenda {{ns:concept}} hapësira. Zhvilluar Fillimisht për [http://www.ardorado.com Ardorado.com]', # Fuzzy
	'concepts-error' => 'Gabim në [[{{ns:concept}}:$1|concept $1]]',
	'group-conceptreviewer' => 'redaktorët concept',
	'group-conceptreviewer-member' => 'reviewer concept', # Fuzzy
	'grouppage-conceptreviewer' => 'Projekti: redaktorët concept', # Fuzzy
	'right-editconcepts' => 'Krijo dhe ndrysho http://www.mediawiki.org/wiki/Extension:Concepts [Concepts] në <tt>{{ns:concept}}</tt> namespace',
);

/** Arabic (العربية)
 * @author ;Hiba;1
 * @author DRIHEM
 * @author OsamaK
 * @author زكريا
 */
$messages['ar'] = array(
	'concepts-desc' => 'يتيح لإداريي الويكي إضافة ودجات حرة الشكل إلى الويكي عن طريق تعديل صفحات نطاق {{ns:concept}}.
الودجات التي يساهم بها المجتمع توجد في [http://www.mediawikiconcepts.org/Main_Page MediaWikiConcepts.org]',
	'concepts-error' => 'خطأ في [[{{ns:concept}}:$1|الودجة $1]]',
	'group-conceptreviewer' => 'محررو الودجات',
	'group-conceptreviewer-member' => '{{GENDER:$1|محرر ودجات}}',
	'grouppage-conceptreviewer' => '{{ns:project}}:محررو الودجات',
	'right-editconcepts' => 'إنشاء وتحرير [http://www.mediawiki.org/wiki/Extension:Concepts concepts] في الــ <tt>{{ns:concept}}</tt> مكان الاسم',
);

/** Belarusian (Taraškievica orthography) (беларуская (тарашкевіца)‎)
 * @author EugeneZelenko
 * @author Jim-by
 * @author Wizardist
 */
$messages['be-tarask'] = array(
	'concepts-desc' => 'Дазваляе адміністратарам {{GRAMMAR:родны|{{SITENAME}}}} дадаваць віджэты вольных формаў у {{GRAMMAR:вінавальны|{{SITENAME}}}} праз рэдагаваньне старонак у прасторы назваў {{ns:concept}}. 
Віджэты, якія падтрымліваюцца супольнасьцю, можна знайсьці на [http://www.mediawikiconcepts.org/Main_Page MediaWikiConcepts.org]',
	'concepts-error' => 'Памылка ў [[{{ns:concept}}:$1|віджэце $1]]',
	'group-conceptreviewer' => 'Рэдактар віджэтаў',
	'group-conceptreviewer-member' => '{{GENDER:$1|Рэдактар|Рэдактарка}} віджэтаў',
	'grouppage-conceptreviewer' => '{{ns:project}}:Рэдактары віджэтаў',
	'right-editconcepts' => 'стварэньне і рэдагаваньне [http://www.mediawiki.org/wiki/Extension:Concepts дапаўненьняў] у прасторы назваў <tt>{{ns:concept}}</tt>',
);

/** Breton (brezhoneg)
 * @author Fulup
 * @author Y-M D
 */
$messages['br'] = array(
	'concepts-desc' => "Talvezout a ra d'ar verourien da ouzhpennañ conceptoù d'ar wiki en ur gemmañ pajennoù en esaouenn anv {{ns:concept}}.
Ar conceptoù kinniget gant ar gumuniezh a gaver war [http://www.mediawikiconcepts.org/Main_Page MediaWikiConcepts.org]",
	'concepts-error' => 'Fazi e [[{{ns:concept}}:$1|concept $1]]',
	'group-conceptreviewer' => 'Aozerien concept',
	'group-conceptreviewer-member' => '{{GENDER:$1|Aozer|Aozerez}} Concept',
	'grouppage-conceptreviewer' => '{{ns:project}}:Aozerien concept',
	'right-editconcepts' => 'Krouiñ ha kemmañ ar [http://www.mediawiki.org/wiki/Extension:Concepts conceptoù] en esaouenn anv <tt>{{ns:concept}}<tt>',
);

/** Bosnian (bosanski)
 * @author CERminator
 */
$messages['bs'] = array(
	'concepts-desc' => 'Omogućuje wiki administratorima da dodaju dodatke u slobodnoj formi na wiki putem uređivanja stranica unutar imenskog prostora {{ns:concept}}.
Prvobitno razvijeni dodaci se mogu naći na [http://www.mediawikiconcepts.org/Main_Page MediaWikiConcepts.org].',
	'concepts-error' => 'Greška u [[{{ns:concept}}:$1|conceptu $1]]',
	'group-conceptreviewer' => 'Uređivači dodataka',
	'group-conceptreviewer-member' => 'Uređivač dodataka', # Fuzzy
	'grouppage-conceptreviewer' => '{{ns:project}}:Uređivač dodataka',
	'right-editconcepts' => 'Pravljenje i uređivanje [http://www.mediawiki.org/wiki/Extension:Concepts concepta] u imenskom prostoru <tt>{{ns:concept}}</tt>',
);

/** Catalan (català)
 * @author Paucabot
 * @author SMP
 */
$messages['ca'] = array(
	'right-editconcepts' => "Crear i editar [http://www.mediawiki.org/wiki/Extension:Concepts ginys] a l'espai de noms <tt>{{ns:concept}}</tt>",
);

/** Czech (česky)
 * @author Kuvaly
 * @author Matěj Grabovský
 * @author Mormegil
 * @author Reaperman
 */
$messages['cs'] = array(
	'concepts-desc' => 'Umožňuje správcům wiki přidávat na wiki ovládací prvky úpravou stránek ve jmenném prostoru {{ns:concept}}.
Prvky vytvořené komunitou lze nalézt na [http://www.mediawikiconcepts.org/Main_Page MediaWikiConcepts.org]',
	'concepts-error' => 'Chyba ve [[{{ns:concept}}:$1|conceptu $1]]',
	'group-conceptreviewer' => 'Editoři ovládacích prvků',
	'group-conceptreviewer-member' => '{{GENDER:$1|reviewer ovládacích prvků|reviewerka ovládacích prvků}}',
	'grouppage-conceptreviewer' => '{{ns:project}}:Editoři ovládacích prvků',
	'right-editconcepts' => 'Tvorba a úprava stránek [http://www.mediawiki.org/wiki/Extension:Concepts ovládacích prvků] ve jmenném prostoru <tt>{{ns:concept}}</tt>',
	'group-conceptreviewer.css' => '/* Zde uvedené CSS bude ovlivňovat pouze reviewery ovládacích prvků */',
	'group-conceptreviewer.js' => '/* Zde uvedený JavaScript bude použit pouze pro reviewery ovládacích prvků */',
);

/** German (Deutsch)
 * @author Jan Luca
 * @author Kghbln
 * @author Pill
 * @author Sebastian Wallroth
 * @author The Evil IP address
 * @author Umherirrender
 */
$messages['de'] = array(
	'concepts-desc' => 'Ermöglicht das Hinzufügen von Freiformat-Concepts durch das Bearbeiten von Seiten im Namensraum {{ns:concept}}.
Vorhandene Concepts werden auf der Website [http://www.mediawikiconcepts.org/Main_Page MediaWikiConcepts.org] gesammelt',
	'concepts-error' => 'Fehler beim [[{{ns:concept}}:$1|Concept $1]]',
	'group-conceptreviewer' => 'Concept-Bearbeiter',
	'group-conceptreviewer-member' => '{{GENDER:$1|Concept-Bearbeiter|Concept-Bearbeiterin}}',
	'grouppage-conceptreviewer' => '{{ns:project}}:Concept-Bearbeiter',
	'right-editconcepts' => '[https://www.mediawiki.org/wiki/Extension:Concepts Concepts] im <code>{{ns:concept}}</code>-Namensraum bearbeiten und erstellen',
);

/** Lower Sorbian (dolnoserbski)
 * @author Michawiki
 */
$messages['dsb'] = array(
	'concepts-desc' => 'Dowólujo wikijowym administratoram wikijeju pśez wobźěłowanje w mjenjowem rumje {{ns:concept}} swójske miniprogramy pśidaś.
Miniprogramy, kótarež su se napórali wót zromaźeństwa, móžoš na  [http://www.mediawikiconcepts.org/Main_Page MediaWikiConcepts.org] namakaś.',
	'concepts-error' => 'Zmólka w [[{{ns:concept}}:$1|miniprogramje $1]]',
	'group-conceptreviewer' => 'Wobźěłowarje miniprogramow',
	'group-conceptreviewer-member' => '{{GENDER:$1|Wobźěłaŕ miniprogramow|Wobźěłarka miniprogramow}}',
	'grouppage-conceptreviewer' => '{{ns:project}}: Wobźěłowarje miniprogramow',
	'right-editconcepts' => '[http://www.mediawiki.org/wiki/Extension:Concepts Woknowe elementy] w mjenjowem rumje <tt>{{ns:concept}}</tt> napóraś a wobźěłaś',
);

/** Greek (Ελληνικά)
 * @author Geraki
 * @author Lou
 * @author Omnipaedista
 * @author Protnet
 * @author ZaDiak
 */
$messages['el'] = array(
	'concepts-desc' => 'Επιτρέπει στους διαχειριστές του wiki να προσθέτουν ελεύθερης μορφής concept στο wiki μέσω επεξεργασίας σελίδων στο χώρο ονομάτων {{ns:concept}}.
Concept φτιαγμένα από την κοινότητα μπορούν να βρεθούν στο [http://www.mediawikiconcepts.org/Main_Page MediaWikiConcepts.org]',
	'concepts-error' => 'Σφάλμα στο [[{{ns:concept}}:$1|concept $1]]',
	'group-conceptreviewer' => 'Επεξεργαστές concept',
	'group-conceptreviewer-member' => 'Επεξεργαστής concept',
	'grouppage-conceptreviewer' => '{{ns:project}}:Επεξεργαστές concept',
	'right-editconcepts' => 'Δημιουργία και επεξεργασία [http://www.mediawiki.org/wiki/Extension:Concepts concept] στο χώρο ονομάτων <tt>{{ns:concept}}</tt>',
);

/** Esperanto (Esperanto)
 * @author Airon90
 */
$messages['eo'] = array(
	'concepts-error' => 'Eraro en [[{{ns:concept}}:$1|fenestraĵo $1]]',
	'group-conceptreviewer' => 'Fenestraĵaj eldonistoj',
	'group-conceptreviewer-member' => 'Fenestraĵa eldonist{{GENDER:$1||in}}o',
	'grouppage-conceptreviewer' => '{{ns:project}}:Fenestraĵaj eldonistoj',
	'right-editconcepts' => 'Krei kaj redakti [http://www.mediawiki.org/vikia/Extension:Concepts fenestraĵojn] en la nomspaco <tt>{{ns:concept}}</tt>',
);

/** Spanish (español)
 * @author Antur
 * @author Armando-Martin
 * @author Crazymadlover
 * @author Diego Grez
 * @author Peter17
 */
$messages['es'] = array(
	'concepts-desc' => 'Permite a los administradores agregar concepts a la wiki editando páginas dentro del espacio de nombres {{ns:concept}}.
Concepts desarrollados comunitariamente pueden ser encontrados en [http://www.mediawikiconcepts.org/Main_Page MediaWikiConcepts.org]',
	'concepts-error' => 'Error en [[{{ns:concept}}:$1|concept $1]]',
	'group-conceptreviewer' => 'Editores de concept',
	'group-conceptreviewer-member' => '{{GENDER:$1|reviewer|reviewera}} de concepts',
	'grouppage-conceptreviewer' => '{{ns:project}}:Editores de concept',
	'right-editconcepts' => 'Crear y editar [http://www.mediawiki.org/wiki/Extension:Concepts concepts] en el espacio de nombre "{{ns:concept}}"',
);

/** Persian (فارسی)
 * @author ZxxZxxZ
 */
$messages['fa'] = array(
	'concepts-error' => 'خطا در [[{{ns:concept}}:$1|ابزار $1]]',
	'group-conceptreviewer' => 'ویرایشگران ابزار',
	'group-conceptreviewer-member' => '{{GENDER:$1|ویرایشگر ابزار}}',
	'grouppage-conceptreviewer' => '{{ns:project}}:ویرایشگران ابزار',
	'right-editconcepts' => 'ایجاد و ویرایش [http://www.mediawiki.org/wiki/Extension:Concepts ابزارها] در فضای‌نام <tt>{{ns:concept}}</tt>',
);

/** Finnish (suomi)
 * @author Cimon Avaro
 * @author Crt
 * @author Nike
 */
$messages['fi'] = array(
	'concepts-desc' => 'Mahdollistaa wikin ylläpitäjille vapaamuotoisten pienoisohjelmien lisäämisen sivua nimiavaruudessa {{ns:concept}} muokkaamalla.
Yhteisön tekemiä pienoisohjelmia löytyy osoitteesta [http://www.mediawikiconcepts.org/Main_Page MediaWikiConcepts.org].',
	'concepts-error' => 'Virhe [[{{ns:concept}}:$1|pienoisohjelmassa $1]]',
	'group-conceptreviewer' => 'pienoisohjelmien muokkaajat',
	'group-conceptreviewer-member' => '{{GENDER:$1|pienoisohjelman muokkaaja}}',
	'grouppage-conceptreviewer' => '{{ns:project}}:Pienoisohjelmien muokkaajat',
	'right-editconcepts' => 'Luoda ja muokata [http://www.mediawiki.org/wiki/Extension:Concepts pienoisohjelmia] nimiavaruudessa <tt>{{ns:concept}}</tt>',
);

/** French (français)
 * @author Gomoko
 * @author IAlex
 * @author Jean-Frédéric
 * @author Urhixidur
 */
$messages['fr'] = array(
	'concepts-desc' => "Permet aux administrateurs du wiki d’ajouter des ''concepts'' (gadgets logiciels) au wiki en modifiant des pages dans l’espace de noms {{ns:concept}}. Les ''concepts'' proposés par la communauté sont disponibles sur [http://www.mediawikiconcepts.org/Main_Page MediaWikiConcepts.org]",
	'concepts-error' => 'Erreur dans le [[{{ns:concept}}:$1|concept $1]]',
	'group-conceptreviewer' => 'Modificateurs de concepts',
	'group-conceptreviewer-member' => '{{GENDER:$1|Modificateur de concept}}',
	'grouppage-conceptreviewer' => '{{ns:project}}:Modificateurs de concepts',
	'right-editconcepts' => 'Créer et modifier les [http://www.mediawiki.org/wiki/Extension:Concepts concepts] dans l’espace de noms « {{ns:concept}} »',
);

/** Franco-Provençal (arpetan)
 * @author ChrisPtDe
 */
$messages['frp'] = array(
	'concepts-error' => 'Èrror dens lo [[{{ns:concept}}:$1|vouidgèt $1]]',
	'group-conceptreviewer' => 'Changiors de vouidgèts',
	'group-conceptreviewer-member' => 'changio{{GENDER:$1|r|sa}} de vouidgèts',
	'grouppage-conceptreviewer' => '{{ns:project}}:Changiors de vouidgèts',
	'right-editconcepts' => 'Fâre et changiér los [http://www.mediawiki.org/wiki/Extension:Concepts vouidgèts] dens l’èspâço de noms « {{ns:concept}} »',
);

/** Galician (galego)
 * @author Toliño
 */
$messages['gl'] = array(
	'concepts-desc' => 'Permite aos administradores do wiki engadir concepts ao editar páxinas no espazo de nomes "{{ns:concept}}".
Pódense atopar os concepts desenvolvidos para a comunidade en [http://www.mediawikiconcepts.org/Main_Page MediaWikiConcepts.org]',
	'concepts-error' => 'Erro no [[{{ns:concept}}:$1|concept "$1"]]',
	'group-conceptreviewer' => 'Editores de concepts',
	'group-conceptreviewer-member' => '{{GENDER:$1|reviewer|reviewera}} de concepts',
	'grouppage-conceptreviewer' => '{{ns:project}}:Editores de concepts',
	'right-editconcepts' => 'Crear e editar [http://www.mediawiki.org/wiki/Extension:Concepts concepts] no espazo de nomes <tt>{{ns:concept}}</tt>',
	'group-conceptreviewer.css' => '/* O CSS que se coloque aquí afectará soamente aos revieweres de concepts */',
	'group-conceptreviewer.js' => '/* O JS que se coloque aquí afectará soamente aos revieweres de concepts */',
);

/** Swiss German (Alemannisch)
 * @author Als-Chlämens
 * @author Als-Holder
 */
$messages['gsw'] = array(
	'concepts-desc' => 'Erlaubt Wikiadministratore Frej-Form-Concepts zum Wiki zuezfiege dur d Bearbeitig vu Syte im {{ns:concept}}-Namensruum.
Vu dr Gmeinschaft aagleiti Concepts chenne unter [http://www.mediawikiconcepts.org/Main_Page MediaWikiConcepts.org] gfunde wäre.',
	'concepts-error' => 'Fähler im [[{{ns:concept}}:$1|Concept $1]]',
	'group-conceptreviewer' => 'Concept-Editore',
	'group-conceptreviewer-member' => '{{GENDER:$1|Concept-Bearbeiter|Concept-Bearbeiteri}}',
	'grouppage-conceptreviewer' => '{{ns:project}}:Concept-Editore',
	'right-editconcepts' => '[http://www.mediawiki.org/wiki/Extension:Concepts Concepts] im <tt>{{ns:concept}}</tt>-Namensruum aalege un bearbeite',
);

/** Hebrew (עברית)
 * @author Amire80
 * @author Rotemliss
 * @author YaronSh
 */
$messages['he'] = array(
	'concepts-desc' => 'מתן האפשרות למנהלי אתר הוויקי להוסיף וידג׳טים הבנויים בצורה חופשית לאתר הוויקי באמצעות עריכת הדפים שבמרחב השם {{ns:concept}}.
ניתן למצוא וידג׳טים שנתרמו על ידי הקהילה ב־[http://www.mediawikiconcepts.org/Main_Page MediaWikiConcepts.org]',
	'concepts-error' => "שגיאה ב[[{{ns:concept}}:$1|ווידג'ט $1]]",
	'group-conceptreviewer' => "עורכי וידג'טים",
	'group-conceptreviewer-member' => "{{GENDER:$1|עורך|עורכת}} וידג'טים",
	'grouppage-conceptreviewer' => "{{ns:project}}:עורכי וידג'טים",
	'right-editconcepts' => 'יצירה ועריכה של [http://www.mediawiki.org/wiki/Extension:Concepts וידג׳טים] במרחב השם <tt>{{ns:concept}}</tt>',
);

/** Upper Sorbian (hornjoserbsce)
 * @author Michawiki
 */
$messages['hsb'] = array(
	'concepts-desc' => 'Dowola wikijowym administratoram wikijej přez wobdźěłowanje stronow znutřka mjenjoweho ruma {{ns:concept}} swójske miniprogramy přidać.
Wot zhromadźenstwa wutowrjene miniprogramy móžeš na [http://www.mediawikiconcepts.org/Main_Page MediaWikiConcepts.org] namakać.',
	'concepts-error' => 'Zmylk w [[{{ns:concept}}:$1|miniprogramje $1]]',
	'group-conceptreviewer' => 'Wobdźěłowarjo miniprogramow',
	'group-conceptreviewer-member' => '{{GENDER:$1|Wobdźěłar miniprogramow|Wobdźěłarka miniprogramow}}',
	'grouppage-conceptreviewer' => '{{ns:project}}:Wobdźěłowarjo miniprogramow',
	'right-editconcepts' => '[http://www.mediawiki.org/wiki/Extension:Concepts Woknowe elementy] w mjenowym rumje <tt>{{ns:concept}}</tt> wutworić a wobdźěłać',
);

/** Hungarian (magyar)
 * @author Dj
 * @author Glanthor Reviol
 */
$messages['hu'] = array(
	'concepts-desc' => 'Lehetővé teszi a wiki adminisztrátorainak, hogy kötetlen alakú minialkalmazásokat adjanak a wikihez lapok szerkesztésével a(z) {{ns:concept}} névtérben. Közösség által fejlesztett minialkalmazások a [http://www.mediawikiconcepts.org/Main_Page MediaWikiConcepts.org] oldalon találhatók.',
	'concepts-error' => 'Hiba a(z) [[{{ns:concept}}:$1|$1 minialkalmazásban]]',
	'group-conceptreviewer' => 'Minialkalmazás szerkesztői',
	'group-conceptreviewer-member' => 'Minialkalmazás-szerkesztő',
	'grouppage-conceptreviewer' => '{{ns:project}}:Minialkalmazás-szerkesztők',
	'right-editconcepts' => 'conceptek létrehozása és szerkesztése a <tt>{{ns:concept}}</tt> névtérben',
);

/** Interlingua (interlingua)
 * @author McDutchie
 */
$messages['ia'] = array(
	'concepts-desc' => 'Permitte al administratores del wiki inserer concepts qualcunque in le wiki, per modificar paginas intra le spatio de nomines {{ns:concept}}.
Le concepts contribuite per le communitate se trova a [http://www.mediawikiconcepts.org/Main_Page MediaWikiConcepts.org]',
	'concepts-error' => 'Error in [[{{ns:concept}}:$1|concept $1]]',
	'group-conceptreviewer' => 'Modificatores de concepts',
	'group-conceptreviewer-member' => '{{GENDER:$1|modificator|modificatrice}} de concepts',
	'grouppage-conceptreviewer' => '{{ns:project}}:Modificatores de concepts',
	'right-editconcepts' => 'Crear e modificar [http://www.mediawiki.org/wiki/Extension:Concepts concepts] in le spatio de nomines <tt>{{ns:concept}}</tt>',
);

/** Indonesian (Bahasa Indonesia)
 * @author Bennylin
 * @author Irwangatot
 */
$messages['id'] = array(
	'concepts-desc' => 'Mengijinkan pengurus wiki untuk menambahkan formulir bebas concept ke wiki dengan menyunting halaman di ruang nama {{ns:concept}}.
komunitas kontribusi concepts dapat di temuai pada [http://www.mediawikiconcepts.org/Main_Page MediaWikiConcepts.org]',
	'concepts-error' => 'Kesalahan pada [[{{ns:concept}}:$1|concept $1]]',
	'group-conceptreviewer' => 'Penyunting concept',
	'group-conceptreviewer-member' => 'Penyunting concept', # Fuzzy
	'grouppage-conceptreviewer' => '{{ns:project}}:Penyunting concept',
	'right-editconcepts' => 'Buat dan Sunting halaman [http://www.mediawiki.org/wiki/Extension:Concepts concepts]  di <tt>{{ns:concept}}</tt> ruang nama',
);

/** Italian (italiano)
 * @author Beta16
 * @author Civvì
 * @author Darth Kule
 */
$messages['it'] = array(
	'concepts-desc' => 'Permette agli amministratori del sito di aggiungere concept liberi al sito modificando pagine nel namespace {{ns:concept}}.
Concept creati dalla comunità possono essere trovati su [http://www.mediawikiconcepts.org/Main_Page MediaWikiConcepts.org]',
	'concepts-error' => 'Errore nel [[{{ns:concept}}:$1|concept $1]]',
	'group-conceptreviewer' => 'Editori concept',
	'group-conceptreviewer-member' => '{{GENDER:$1|Editore concept|Editrice concept|Editore\\trice concept}}',
	'grouppage-conceptreviewer' => '{{ns:project}}:Editori concept',
	'right-editconcepts' => 'Crea e modifica [http://www.mediawiki.org/wiki/Extension:Concepts concept] nel namespace <tt>{{ns:concept}}</tt>',
);

/** Japanese (日本語)
 * @author Fryed-peach
 * @author Iwai.masaharu
 * @author Shirayuki
 * @author Whym
 * @author 青子守歌
 */
$messages['ja'] = array(
	'concepts-desc' => '管理者が「{{ns:concept}}」名前空間内のページを編集し、ウィキに自由な形式のウィジェットを追加できるようにする。
コミュニティが提供しているウィジェットは [http://www.mediawikiconcepts.org/Main_Page MediaWikiConcepts.org] にある',
	'concepts-error' => '[[{{ns:concept}}:$1|ウィジェット $1]] でのエラー',
	'group-conceptreviewer' => 'ウィジェット編集者',
	'group-conceptreviewer-member' => '{{GENDER:$1|ウィジェット編集者}}',
	'grouppage-conceptreviewer' => '{{ns:project}}:ウィジェット編集者',
	'right-editconcepts' => '<tt>{{ns:concept}}</tt>名前空間で[http://www.mediawiki.org/wiki/Extension:Concepts ウィジェット]を作成/編集',
	'group-conceptreviewer.css' => '/* ここに記述したCSSはウィジェット編集者のみに影響します */',
	'group-conceptreviewer.js' => '/* ここに記述したJSはウィジェット編集者のみに影響します */',
);

/** Korean (한국어)
 * @author 아라
 */
$messages['ko'] = array(
	'concepts-desc' => '위키 관리자는 {{ns:concept}} 이름공간에서 문서를 편집해 자유로운 형태의 위젯을 더할 수 있습니다.
커뮤니티 기여 위젯은 [http://www.mediawikiconcepts.org/Main_Page MediaWikiConcepts.org]에서 찾을 수 있습니다',
	'concepts-error' => '[[{{ns:concept}}:$1|$1 위젯]] 오류',
	'group-conceptreviewer' => '위젯 편집자',
	'group-conceptreviewer-member' => '{{GENDER:$1|위젯 편집자}}',
	'grouppage-conceptreviewer' => '{{ns:project}}:위젯 편집자',
	'right-editconcepts' => '<tt>{{ns:concept}}</tt> 이름공간에서 [http://www.mediawiki.org/wiki/Extension:Concepts 위젯]을 만들고 편집',
	'group-conceptreviewer.css' => '/* 이 CSS 설정은 위젯 편집자에만 적용됩니다 */',
	'group-conceptreviewer.js' => '/* 이 자바스크립트 설정은 위젯 편집자에만 적용됩니다 */',
);

/** Colognian (Ripoarisch)
 * @author Purodha
 */
$messages['ksh'] = array(
	'concepts-desc' => 'Määt et müjjelesch, dat Wiki-Köbeße <i lang="en">Concepts</i> en ene freie Forrem en däm Appachtemang „{{ns:concept}}“ enndraare. 
Divärse Lück han ehr <i lang="en">Concepts</i> op <i lang="en">[http://www.mediawikiconcepts.org/Main_Page MediaWikiConcepts.org]</i> öffentlesch jemaat.',
	'concepts-error' => 'Doh es ene Fähler em [[{{ns:concept}}:$1|<i lang="en">Concept</i> $1]]',
	'group-conceptreviewer' => 'Schriiver för <i lang="en">Concepts</i>',
	'group-conceptreviewer-member' => '{{GENDER:$1|<i lang="en">Concept</i>-Schriiver}}',
	'grouppage-conceptreviewer' => '{{ns:project}}:Concept-Schriiver',
	'right-editconcepts' => 'Sigge, alsu <i lang="en">[http://www.mediawiki.org/wiki/Extension:Concepts Concepts]</i>, em Appachemang „{{ns:concept}}“ ändere udder aanlääje',
	'group-conceptreviewer.css' => '/* Dat CSS heh aan dä Stell wirrek bloß beim Ändere vun Concepts */',
	'group-conceptreviewer.js' => '/* Dat JavaSkrep heh aan dä Stell wirrek bloß beim Ändere vun Concepts */',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Robby
 */
$messages['lb'] = array(
	'concepts-error' => 'Feeler an [[{{ns:concept}}:$1|concept $1]]',
	'group-conceptreviewer' => 'Concept-Editeuren',
	'group-conceptreviewer-member' => '{{GENDER:$1|Concept-Editeur}}',
	'grouppage-conceptreviewer' => '{{ns:project}}:Concept Editeuren',
	'right-editconcepts' => '[http://www.mediawiki.org/wiki/Extension:Concepts concepts] am <tt>{{ns:concept}}</tt> Nummraum uleeën an  änneren',
);

/** Macedonian (македонски)
 * @author Bjankuloski06
 */
$messages['mk'] = array(
	'concepts-desc' => 'Им овозможува на администраторите да додаваат посреднички елементи со уредување на страници во именскиот простор {{ns:concept}}.
Елементи изработени од учесници од заедницата можете да најдете на  [http://www.mediawikiconcepts.org/Main_Page MediaWikiConcepts.org]',
	'concepts-error' => 'Грешка во [[{{ns:concept}}:$1|посредничкиот елемент $1]]',
	'group-conceptreviewer' => 'Уредници на посреднички елементи',
	'group-conceptreviewer-member' => '{{GENDER:$1|уредник на посреднички елементи}}',
	'grouppage-conceptreviewer' => '{{ns:project}}:Уредници на посреднички елементи',
	'right-editconcepts' => 'Создавање и уредување на [http://www.mediawiki.org/wiki/Extension:Concepts направи] во именскиот простор <tt>{{ns:concept}}</tt>',
	'group-conceptreviewer.css' => '/* Тука поставениот CSS ќе се применува само врз уредниците на посреднички елементи (помагала) */',
	'group-conceptreviewer.js' => '/* Тука поставениот JS ќе се применува само врз уредниците на посреднички елементи (помагала) */',
);

/** Malay (Bahasa Melayu)
 * @author Anakmalaysia
 */
$messages['ms'] = array(
	'concepts-desc' => 'Membolehkan pentadbir wiki untuk menambahkan concept berbentuk bebas pada wiki dengan menyunting laman di dalam ruang nama {{ns:concept}}.
Concept sumbangan komuniti boleh didapati di [http://www.mediawikiconcepts.org/Main_Page MediaWikiConcepts.org]',
	'concepts-error' => 'Ralat pada [[{{ns:concept}}:$1|concept $1]]',
	'group-conceptreviewer' => 'Penyunting concept',
	'group-conceptreviewer-member' => '{{GENDER:$1|Penyunting concept}}',
	'grouppage-conceptreviewer' => '{{ns:project}}:Penyunting concept',
	'right-editconcepts' => 'Mencipta dan menyunting [http://www.mediawiki.org/wiki/Extension:Concepts concept] dalam ruang nama <tt>{{ns:concept}}</tt>',
);

/** Norwegian Bokmål (norsk (bokmål)‎)
 * @author Danmichaelo
 * @author Nghtwlkr
 */
$messages['nb'] = array(
	'concepts-desc' => 'Tillater wikiadministratorer å legge til fri-form skjermelement til wikien ved å redigere siden innen {{ns:concept}}-navnerommet.
Fellesskaps-bidratte skjermelement kan finnes på [http://mediawikiconcepts.org/Main_Page MediaWikiConcepts.org]',
	'concepts-error' => 'Feil i [[{{ns:concept}}:$1|skjermelement $1]]',
	'group-conceptreviewer' => 'Bidragsytere for skjermelement',
	'group-conceptreviewer-member' => '{{GENDER:$1|Bidragsyter for skjermelement}}',
	'grouppage-conceptreviewer' => '{{ns:project}}:Bidragsytere for skjermelement',
	'right-editconcepts' => 'Lag og rediger [http://www.mediawiki.org/wiki/Extension:Concepts skjermelement] i <tt>{{ns:concept}}</tt>-navnerommet',
);

/** Dutch (Nederlands)
 * @author SPQRobin
 * @author Siebrand
 */
$messages['nl'] = array(
	'concepts-desc' => "Stelt wikibeheerders in staat naar eigen inzicht concepts aan de wiki toe te voegen door het bewerken van pagina's in de naamruimte {{ns:concept}}.
Door de gemeenschap ontwikkelde concepts zijn te vinden op [http://www.mediawikiconcepts.org/Main_Page MediaWikiConcepts.org]",
	'concepts-error' => 'Fout in [[{{ns:concept}}:$1|concept $1]]',
	'group-conceptreviewer' => 'Conceptbewerkers',
	'group-conceptreviewer-member' => '{{GENDER:$1|conceptbewerker}}',
	'grouppage-conceptreviewer' => '{{ns:project}}:Conceptbewerkers',
	'right-editconcepts' => '[http://www.mediawiki.org/wiki/Extension:Concepts Concepts] aanmaken en bewerken in de naamruimte <tt>{{ns:concept}}</tt>',
);

/** Norwegian Nynorsk (norsk (nynorsk)‎)
 * @author Harald Khan
 */
$messages['nn'] = array(
	'right-editconcepts' => 'Endra sider i «{{ns:concept}}»-namnerommet', # Fuzzy
);

/** Occitan (occitan)
 * @author Cedric31
 */
$messages['oc'] = array(
	'concepts-desc' => "Permet als administrators del wiki d'apondre de concepts al wiki en modificant de paginas dins l'espac de noms {{ns:concept}}. Desvolopat a la basa per [http://www.ardorado.com Ardorado.com]", # Fuzzy
	'concepts-error' => 'Error dins lo [[{{ns:concept}}:$1|concept $1]]',
	'group-conceptreviewer' => 'Modificators de concepts',
	'group-conceptreviewer-member' => 'modificator de concepts', # Fuzzy
	'grouppage-conceptreviewer' => '{{ns:project}}:Modificators de concepts',
	'right-editconcepts' => "Crear e modificar las [http://www.mediawiki.org/wiki/Extension:Concepts concepts] dins l'espaci de noms « {{ns:concept}} »",
);

/** Polish (polski)
 * @author BeginaFelicysym
 * @author Sp5uhe
 * @author ToSter
 * @author Woytecr
 */
$messages['pl'] = array(
	'concepts-desc' => 'Pozwala administratorom wiki na dodawanie widżetów w dowolnej formie do wiki poprzez edycję stron w przestrzeni nazw {{ns:concept}}.
Widżety stworzone przez społeczność można odnaleźć na stronie [http://www.mediawikiconcepts.org/Main_Page MediaWikiConcepts.org]',
	'concepts-error' => 'Błąd w [[{{ns:concept}}:$1|widżecie $1]]',
	'group-conceptreviewer' => 'Redaktorzy widżetów',
	'group-conceptreviewer-member' => '{{GENDER:$1|Redaktor widżetów|Redaktorka widżetów}}',
	'grouppage-conceptreviewer' => '{{ns:project}}:Redaktorzy widżetów',
	'right-editconcepts' => 'Tworzenie i edycja [http://www.mediawiki.org/wiki/Extension:Concepts widżetów] w przestrzeni nazw <tt>{{ns:concept}}</tt>',
);

/** Piedmontese (Piemontèis)
 * @author Borichèt
 * @author Dragonòt
 */
$messages['pms'] = array(
	'concepts-desc' => "A përmët a j'aministrator dla wiki ëd gionté ëd concept a forma lìbera a la wiki an modificand dle pàgine ant lë spassi nominal {{ns:concept}}.
Dij concept creà da la comunità a peulo esse trovà su [http://www.mediawikiconcepts.org/Main_Page MediaWikiConcepts.org]",
	'concepts-error' => 'Eror an [[{{ns:concept}}:$1|concept $1]]',
	'group-conceptreviewer' => 'Editor ëd concept',
	'group-conceptreviewer-member' => '{{GENDER:$1|Editor ëd concept}}',
	'grouppage-conceptreviewer' => '{{ns:project}}:Editor ëd concept',
	'right-editconcepts' => 'Crea e modìfica [http://www.mediawiki.org/wiki/Extension:Concepts concepts] ant lë spassi nominal <tt>{{ns:concept}}</tt>',
);

/** Portuguese (português)
 * @author Hamilton Abreu
 * @author SandroHc
 */
$messages['pt'] = array(
	'concepts-desc' => "Permite que os administradores da wiki adicionem ''concepts free-form'' à wiki, editando páginas no espaço nominal {{ns:concept}}.
Concepts fornecidos pela comunidade podem ser encontrados na [http://www.mediawikiconcepts.org/Main_Page MediaWikiConcepts.org]",
	'concepts-error' => "Erro no [[{{ns:concept}}:$1|''concept'' $1]]",
	'group-conceptreviewer' => "Editores de ''concepts''",
	'group-conceptreviewer-member' => "{{GENDER:$1|reviewer|reviewera}} de ''concepts''",
	'grouppage-conceptreviewer' => "{{ns:project}}:Editores de ''concepts''",
	'right-editconcepts' => 'Criar e editar [http://www.mediawiki.org/wiki/Extension:Concepts concepts] no espaço nominal <tt>{{ns:concept}}</tt>',
);

/** Brazilian Portuguese (português do Brasil)
 * @author Eduardo.mps
 * @author Giro720
 * @author Helder.wiki
 * @author Heldergeovane
 */
$messages['pt-br'] = array(
	'concepts-desc' => "Permite que os administradores da wiki adicionem ''concepts free-form'' à wiki, editando páginas no espaço nominal {{ns:concept}}.
Concepts fornecidos pela comunidade podem ser encontrados na [http://www.mediawikiconcepts.org/Main_Page MediaWikiConcepts.org]",
	'concepts-error' => 'Erro em [[{{ns:concept}}:$1|concept $1]]',
	'group-conceptreviewer' => 'Editores de concept',
	'group-conceptreviewer-member' => 'Editor de concept', # Fuzzy
	'grouppage-conceptreviewer' => '{{ns:project}}:Editores de concept',
	'right-editconcepts' => 'Criar e editar [http://www.mediawiki.org/wiki/Extension:Concepts concepts] no espaço nominal <tt>{{ns:concept}}</tt>',
);

/** Romanian (română)
 * @author Minisarm
 * @author Stelistcristi
 */
$messages['ro'] = array(
	'group-conceptreviewer' => 'Editori de concepturi',
);

/** tarandíne (tarandíne)
 * @author Joetaras
 */
$messages['roa-tara'] = array(
	'concepts-error' => "Errore jndr'à [[{{ns:concept}}:$1|concept $1]]",
);

/** Russian (русский)
 * @author G0rn
 * @author Александр Сигачёв
 */
$messages['ru'] = array(
	'concepts-desc' => 'Позволяет администраторам вики добавлять различные виджеты, посредством редактирования страниц пространства имён {{ns:concept}}. Поддерживаемые сообществом виджеты можно найти на [http://www.mediawikiconcepts.org/Main_Page MediaWikiConcepts.org].',
	'concepts-error' => 'Ошибка в [[{{ns:concept}}:$1|виджете $1]]',
	'group-conceptreviewer' => 'Редакторы виджетов',
	'group-conceptreviewer-member' => 'Редактор виджетов', # Fuzzy
	'grouppage-conceptreviewer' => '{{ns:project}}:Редакторы виджетов',
	'right-editconcepts' => 'создавать и редактировать [http://www.mediawiki.org/wiki/Extension:Concepts виджеты] страницы в пространстве имён <tt>{{ns:concept}}</tt>',
);

/** Sinhala (සිංහල)
 * @author පසිඳු කාවින්ද
 */
$messages['si'] = array(
	'group-conceptreviewer' => 'ගැජට්ටු සංස්කාරකවරු',
	'group-conceptreviewer-member' => '{{GENDER:$1|ගැජට්ටු සංස්කාරක}}',
	'grouppage-conceptreviewer' => '{{ns:project}}:ගැජට්ටු සංස්කාරකවරු',
);

/** Slovak (slovenčina)
 * @author Helix84
 * @author Teslaton
 */
$messages['sk'] = array(
	'concepts-desc' => 'Umožňuje správcom wiki pridávať ovládacie prvky na wiki úpravou stránky v mennom priestore {{ns:concept}}.
Prvky vytvorené komunitou možno nájsť na [http://www.mediawikiconcepts.org/Main_Page MediaWikiConcepts.org]',
	'concepts-error' => 'Chyba v [[{{ns:concept}}:$1|ovládacom prvku $1]]',
	'group-conceptreviewer' => 'Editori ovládacích prvkov',
	'group-conceptreviewer-member' => '{{GENDER:$1|Redaktor|Redaktorka}} ovládacích prvkov',
	'grouppage-conceptreviewer' => '{{ns:project}}:Editori ovládacích prvkov',
	'right-editconcepts' => 'Tvorba a úprava stránok [http://www.mediawiki.org/wiki/Extension:Concepts ovládacích prvkov] v mennom priestore <tt>{{ns:concept}}</tt>',
);

/** Serbian (Cyrillic script) (српски (ћирилица)‎)
 * @author Rancher
 */
$messages['sr-ec'] = array(
	'concepts-desc' => 'Омогућава администраторима да додају елементе на викију уређивањем страница унутар именског простора {{ns:concept}}.
Елементи које је направила заједница могу се наћи на [http://www.mediawikiconcepts.org/Main_Page?setlang=sr-ec MediaWikiConcepts.org]',
	'concepts-error' => 'Грешка у [[{{ns:concept}}:$1|$1 елементу]]',
	'group-conceptreviewer' => 'Уредници елемената',
	'group-conceptreviewer-member' => '{{GENDER:$1|Уредник елемената|Уредница елемената|Уредник елемената}}',
	'grouppage-conceptreviewer' => '{{ns:project}}:Уредници елемената',
	'right-editconcepts' => 'прављење и уређивање [http://www.mediawiki.org/wiki/Extension:Concepts елемената] у именском простору <tt>{{ns:concept}}</tt>',
);

/** Serbian (Latin script) (srpski (latinica)‎)
 */
$messages['sr-el'] = array(
	'concepts-desc' => 'Omogućava administratorima da dodaju vidžete na vikiju uređivanjem stranica unutar {{ns:concept}} imenskog prostora.
Vidžeti napravljeni od strane zajednice mogu se naći na [http://www.mediawikiconcepts.org/Main_Page MediaWikiConcepts.org]',
	'concepts-error' => 'Greška u [[{{ns:concept}}:$1|$1 vidžetu]]',
	'group-conceptreviewer' => 'Urednici elemenata',
	'group-conceptreviewer-member' => '{{GENDER:$1|Urednik elemenata|Urednica elemenata|Urednik elemenata}}',
	'grouppage-conceptreviewer' => '{{ns:project}}:Urednici elemenata',
	'right-editconcepts' => 'pravljenje i uređivanje [http://www.mediawiki.org/wiki/Extension:Concepts vidžeta] u <tt>{{ns:concept}}</tt> imenskom prostoru',
);

/** Swedish (svenska)
 * @author Martinwiss
 * @author Ozp
 * @author Per
 * @author WikiPhoenix
 */
$messages['sv'] = array(
	'concepts-desc' => 'Gör så att administratörer kan lägga till egna manicker (concepts) till wikin genom att skapa sidor i namnrymden {{ns:concept}}. Manicker som andra har skapat finn på [http://www.mediawikiconcepts.org/Main_Page MediaWikiConcepts.org].',
	'concepts-error' => 'Fel i [[{{ns:concept}}:$1|concept $1]]',
	'group-conceptreviewer' => 'Concept-redigerare',
	'group-conceptreviewer-member' => '{{GENDER:$1|concept-redigerare}}',
	'grouppage-conceptreviewer' => '{{ns:project}}:Concept-redigerare',
	'right-editconcepts' => 'Skapa och redigera [http://www.mediawiki.org/wiki/Extension:Concepts concepts] i namnrymden<tt>{{ns:concept}}</tt>',
);

/** Telugu (తెలుగు)
 * @author Ravichandra
 */
$messages['te'] = array(
	'group-conceptreviewer' => 'విడ్జెట్ ఎడిటర్లు',
	'group-conceptreviewer-member' => 'విడ్జెట్ ఎడిటర్', # Fuzzy
);

/** Tagalog (Tagalog)
 * @author AnakngAraw
 */
$messages['tl'] = array(
	'concepts-desc' => 'Nagpapahintulot sa mga tagapangasiwa ng wiki na makapagdagdag ng may malayang anyong mga widyet sa wiki sa pamamagitan ng pagbago sa mga pahinang nasa loob ng puwang pampangalan na {{ns:concept}}.
Ang mga widyet na inambag ng pamayan ay matatagpuan sa [http://www.mediawikiconcepts.org/Main_Page MediaWikiConcepts.org]',
	'concepts-error' => 'Kamalian sa loob ng [[{{ns:concept}}:$1|widyet na $1]]',
	'group-conceptreviewer' => 'Mga patnugot ng widyet',
	'group-conceptreviewer-member' => '{{GENDER:$1|patnugot ng widyet}}',
	'grouppage-conceptreviewer' => '{{ns:project}}:Mga patnugot ng widyet',
	'right-editconcepts' => 'Lumikha at baguhin ang [http://www.mediawiki.org/wiki/Extension:Concepts mga widyet] sa loob ng puwang na pampangalan ng <tt>{{ns:concept}}</tt>',
	'group-conceptreviewer.css' => '/* Ang inilagay na Mga Pilas ng Estilong Lumalagaslas (Cascading Style Sheets o CSS) dito ay makakaapekto lamang sa mga patnugot ng widyet */',
	'group-conceptreviewer.js' => '/* Ang JavaScript o JS na inilagay dito ay makakaapekto lamang sa mga patnugot ng widyet */',
);

/** Central Atlas Tamazight (ⵜⴰⵎⴰⵣⵉⵖⵜ)
 * @author Tifinaghes
 */
$messages['tzm'] = array(
	'right-editconcepts' => 'ⴰⵔⴰ ⵏⵖ ⴱⴷⴷⴻⵍ [http://www.mediawiki.org/wiki/Extension:Concepts concepts] ⴷⵉ <tt>{{ns:concept}}</tt> ⴰⵏⵙⴰ ⵏ ⵡⴰⵙⵙⴰⵖ',
);

/** Ukrainian (українська)
 * @author Base
 * @author Prima klasy4na
 * @author Тест
 */
$messages['uk'] = array(
	'concepts-desc' => 'Дозволяє адміністраторам вікі додавати різноманітні віджети шляхом редагування сторінок простору назв {{ns:concept}}.
Підтримувані спільнотою віджети можна знайти на [http://www.mediawikiconcepts.org/Main_Page MediaWikiConcepts.org]',
	'concepts-error' => 'Помилка [[{{ns:concept}}:$1|віджету $1]]',
	'group-conceptreviewer' => 'Редактори віджетів',
	'group-conceptreviewer-member' => '{{GENDER:$1|Редактор віджетів|Редакторка віджетів}}',
	'grouppage-conceptreviewer' => '{{ns:project}}:Редактори віджетів',
	'right-editconcepts' => 'Створювати і редагувати [http://www.mediawiki.org/wiki/Extension:Concepts віджети] у просторі назв <tt>{{ns:concept}}</tt>',
);

/** Vietnamese (Tiếng Việt)
 * @author Minh Nguyen
 */
$messages['vi'] = array(
	'concepts-desc' => 'Cho phép các bảo quản viên wiki thêm công cụ đa năng vào wiki bằng cách sửa đổi trang trong không gian tên {{ns:concept}}.
Có thể lấy thêm công cụ đa năng do cộng đồng đóng góp tại [http://www.mediawikiconcepts.org/Main_Page MediaWikiConcepts.org].',
	'concepts-error' => 'Lỗi trong [[{{ns:concept}}:$1|công cụ đa năng $1]]',
	'group-conceptreviewer' => 'Người sửa công cụ đa năng',
	'group-conceptreviewer-member' => 'người sửa công cụ đa năng',
	'grouppage-conceptreviewer' => '{{ns:project}}:Người sửa công cụ đa năng',
	'right-editconcepts' => 'Tạo và sửa [http://www.mediawiki.org/wiki/Extension:Concepts?uselang=vi công cụ đa năng] trong không gian tên <tt>{{ns:concept}}</tt>',
	'group-conceptreviewer.css' => '/* Mã CSS tại đây sẽ chỉ ảnh hưởng đến những người sửa công cụ đa năng */',
	'group-conceptreviewer.js' => '/* Mã JS tại đây sẽ chỉ ảnh hưởng đến những người sửa công cụ đa năng */',
);

/** Cantonese (粵語)
 */
$messages['yue'] = array(
	'concepts-desc' => '容許wiki管理員響{{ns:concept}}空間名度加入自由形式嘅concept響個wiki度。
原先為[http://www.ardorado.com Ardorado.com]而設計嘅', # Fuzzy
	'concepts-error' => '響[[{{ns:concept}}:$1|concept $1]]出錯',
	'group-conceptreviewer' => 'Concept編輯器',
	'group-conceptreviewer-member' => 'Concept編輯器', # Fuzzy
	'grouppage-conceptreviewer' => '{{ns:project}}:Concept編輯器',
	'right-editconcepts' => '響"{{ns:concept}}"空間名度編輯頁', # Fuzzy
);

/** Simplified Chinese (中文（简体）‎)
 * @author Anakmalaysia
 * @author PhiLiP
 * @author Xiaomingyan
 * @author Yfdyh000
 */
$messages['zh-hans'] = array(
	'concepts-desc' => '允许wiki的管理员编辑{{ns:concept}}名字空间页面以添加各种形式的小工具。您可以在[http://www.mediawikiconcepts.org/Main_Page MediaWikiConcepts.org]中找到社区贡献的小工具',
	'concepts-error' => '[[{{ns:concept}}:$1|小工具$1]]出错',
	'group-conceptreviewer' => '小工具编辑者',
	'group-conceptreviewer-member' => '{{GENDER:$1|小工具编辑者}}',
	'grouppage-conceptreviewer' => '{{ns:project}}:小工具编辑者',
	'right-editconcepts' => '在<tt>{{ns:concept}}</tt>名字空间中创建和编辑[http://www.mediawiki.org/wiki/Extension:Concepts 小工具]',
);

/** Traditional Chinese (中文（繁體）‎)
 * @author Anakmalaysia
 * @author Mark85296341
 * @author Yfdyh000
 */
$messages['zh-hant'] = array(
	'concepts-desc' => '容許 wiki 管理員通過編輯 {{ns:concept}} 名子空間中加入自由形式的 concept 至 wiki 中。
[http://www.mediawikiconcepts.org/Main_Page MediaWikiConcepts.org] 提供社群貢獻的 concept',
	'concepts-error' => '在 [[{{ns:concept}}:$1|concept $1]] 發生錯誤',
	'group-conceptreviewer' => 'Concept 編輯者',
	'group-conceptreviewer-member' => '{{GENDER:$1|Concept 編輯者}}',
	'grouppage-conceptreviewer' => '{{ns:project}}:Concept 編輯者',
	'right-editconcepts' => '建立並編輯 <tt>{{ns:concept}}</tt> 名子空間中的 [http://www.mediawiki.org/wiki/Extension:Concepts Concepts]',
);
