<?php

// Language definitions for frequently used strings
$lang_common = array(

// Text orientation and encoding
'lang_direction'			=>	'ltr',	// ltr (Left-To-Right) or rtl (Right-To-Left)
'lang_identifier'			=>	'tr',

// Number formatting
'lang_decimal_point'		=>	'.',
'lang_thousands_sep'		=>	',',

// Notices
'Bad request'				=>	'Geçersiz işlem. Bağlantı yanlış veye güncelliğini yitirmiş.',
'No view'					=>	'Bu forumları görüntülemek için izniniz yok.',
'No permission'				=>	'Bu sayfaya erişmek için yetkiniz yok.',
'CSRF token mismatch'		=>	'Güvenlik sistemi devrede. Bunun sebebi herhangi bir işlem yapmadan bu sayfada uzun süre kaldığınız dolayı olabilir. Devam etmek için onay butonuna tıklayın veya geri dönmek için iptal butonunu kullanın.',
'No cookie'					=>	'Başarıyla giriş yaptığınız görünmekte, ancak çerezler belirlenmemiş. Lütfen ayarlarınızı kontrol ederek, mümkünse bu web sitesi için çerezleri etkinleştirin.',


// Miscellaneous
'Forum index'				=>	'Forum index',
'Submit'					=>	'Gönder',	// "name" of submit buttons
'Cancel'					=>	'İptal Et', // "name" of cancel buttons
'Preview'					=>	'Önizleme',	// submit button to preview message
'Delete'					=>	'Sil',
'Split'						=>	'Ayır',
'Ban message'				=>	'Forumdan uzaklaştırıldınız.',
'Ban message 2'				=>	'Uzaklaştırma sona erme tarihi; %s.',
'Ban message 3'				=>	'Yönetici veya moderatör tarafından yazılan uzaklaştırılma mesajınız:',
'Ban message 4'				=>	'%s adresinden yöneticiye sorunlarınızı iletebilirsiniz.',
'Never'						=>	'Henüz yok',
'Today'						=>	'Bugün',
'Yesterday'					=>	'Dün',
'Forum message'				=>	'Forum mesajı',
'Maintenance warning'		=>	'<strong>UYARI! %s Etkin.</strong> KESİNLİKLE ÇIKIŞ YAPMAYINIZ. Çıkış yapmanız halinde tekrar giriş yapamazsınız.',
'Maintenance mode'			=>	'Bakım modu',
'Redirecting'				=>	'Yönlendiriliyorsunuz…', // With space!
'Forwarding info'			=>	'%s %s içinde otomatik olarak yeni sayfaya yönlendirileceksiniz.',
'second'					=>	'saniye',	// singular
'seconds'					=>	'saniye',	// plural
'Click redirect'			=>	'Tarayıcınız otomatik olarak yönlendirmediyse veya daha fazla beklemek istemiyorsanız buraya tıklayınız',
'Invalid e-mail'			=>	'Girilen e-posta adresi geçersiz.',
'New posts'					=>	'Yeni mesajlar',	// the link that leads to the first new post
'New posts title'			=>	'Son ziyaretinizden sonra yazılan yeni mesajlar.',	// the popup text for new posts links
'Active topics'				=>	'Aktif konular',
'Active topics title'		=>	'Yeni mesaj gönderilmiş aktif konular.',
'Unanswered topics'			=>	'Cevapsız konular',
'Unanswered topics title'	=>	'Cevap verilmemiş konular.',
'Username'					=>	'Kullanıcı adı',
'Registered'				=>	'Üyelik tarihi',
'Write message'				=>	'Mesajınız',
'Forum'						=>	'Forum',
'Posts'						=>	'Mesajlar',
'Pages'						=>	'Sayfalar',
'Page'						=>	'Sayfa',
'BBCode'					=>	'BBCode',	// You probably shouldn't change this
'Smilies'					=>	'Gülümseme',
'Images'					=>	'Resim',
'You may use'				=>	'Kullanabileceğiniz araçlar: %s',
'and'						=>	've',
'Image link'				=>	'resim',	// This is displayed (i.e. <image>) instead of images when "Show images" is disabled in the profile
'wrote'						=>	'Adlı Üyeden Alıntı',	// For [quote]'s (e.g., User wrote:)
'Code'						=>	'Kod',		// For [code]'s
'Forum mailer'				=>	'%s Postacısı',	// As in "MyForums Mailer" in the signature of outgoing e-mails
'Write message legend'		=>	'Mesajınızı yazın',
'Required information'		=>	'Gerekli bilgiler',
'Reqmark'					=>	'*',
'Required warn'				=>	'Formu göndermeden önce kalın yazılmış yerler tamamlanmalıdır.',
'Crumb separator'			=>	' &rarr;&#160;', // The character or text that separates links in breadcrumbs
'Title separator'			=>	' — ',
'Page separator'			=>	'&#160;', //The character or text that separates page numbers
'Spacer'					=>	'…', // Ellipsis for paginate
'Paging separator'			=>	' ', //The character or text that separates page numbers for page navigation generally
'Previous'					=>	'Önceki',
'Next'						=>	'Sonraki',
'Cancel redirect'			=>	'İşlem iptal edildi.',
'No confirm redirect'		=>	'Onay verilmedi. İşlem iptal edildi.',
'Please confirm'			=>	'Lütfen onaylayın:',
'Help page'					=>	'%s Hakkında yardım',
'Re'						=>	'Cvp:',
'Page info'					=>	'(Sayfa %1$s - %2$s)',
'Item info single'			=>	'%s: %s',
'Item info plural'			=>	'%s: %s - %s of %s', // e.g. Topics [ 10 to 20 of 30 ]
'Info separator'			=>	' ', // e.g. 1 Page | 10 Topics
'Powered by'				=>	'Forum Yazılımı: %s - Sponsor: %s - Türkçe çeviri: <a href="http://www.punbbturkey.com/" title="PunBB Türkiye">PunBBTurkey</a>.',
'Maintenance'				=>	'Bakım',
'Installed extension'		=>	'%s resmi eklentisi yüklendi. Copyright &copy; 2003&ndash;2012 <a href="http://punbb.informer.com/">PunBB</a>.',
'Installed extensions'		=>	'<span id="extensions-used" title="%s">%s resmi eklentiler</span> yüklendi. Copyright &copy; 2003&ndash;2012 <a href="http://punbb.informer.com/">PunBB</a>.',

// CSRF confirmation form
'Confirm'					=>	'Onayla',	// Button
'Confirm action'			=>	'İşlem onayı',
'Confirm action head'		=>	'Lütfen son işleminizi onaylayın veya iptal edin',

// Title
'Title'						=>	'Başlık',
'Member'					=>	'Üye',	// Default title
'Moderator'					=>	'Moderatör',
'Administrator'				=>	'Yönetici',
'Banned'					=>	'Uzaklaştırılmış',
'Guest'						=>	'Ziyaretçi',

// Stuff for include/parser.php
'BBCode error 1'			=>	'[/%1$s] kapatma etiketi, açma etiketi olan [%1$s] etiketinden yoksun',
'BBCode error 2'			=>	'[%s] etiketi boş',
'BBCode error 3'			=>	'[%1$s] etiketi, [%2$s] etiketi içersine açılmış, buna izin verilmiyor',
'BBCode error 4'			=>	'[%s] etiketi, kendi içine açılmış, buna izin verilmiyor',
'BBCode error 5'			=>	'[%1$s] açma etiketi, kapama etiketi olan [/%1$s] etiketinden yoksun',
'BBCode error 6'			=>	'[%s] etiketinin içi boş',
'BBCode nested list'		=>	'[list] etiketleri iç içe olamaz',
'BBCode code problem'		=>	'[code] etiketleriyle ilgili bir sorun oluştu',

// Stuff for the navigator (top of every page)
'Index'						=>	'Ana Sayfa',
'User list'					=>	'Üye Listesi',
'Rules'						=>	'Kurallar',
'Search'					=>	'Arama',
'Register'					=>	'Kayıt ol',
'register'					=>	'kayıt ol',
'Login'						=>	'Giriş',
'login'						=>	'giriş',
'Not logged in'				=>	'Giriş yapmamışsınız.',
'Profile'					=>	'Profil',
'Logout'					=>	'Çıkış',
'Logged in as'				=>	'%s olarak giriş yapıldı.',
'Admin'						=>	'Yönetim',
'Last visit'				=>	'Son ziyaret %s',
'Mark all as read'			=>	'Bütün mesajları okundu say',
'Login nag'					=>	'Lütfen kayıt olun ya da giriş yapın.',
'New reports'				=>	'Yeni raporlar',

// Alerts
'New alerts'				=>	'Yeni Uyarılar',
'Maintenance alert'			=>	'<strong>Bakım modu etkin.</strong> kesinlikle <em>ÇIKIŞ YAPMAYIN</em>, eğer çıkış yaparsanız tekrar giriş yapamazsınız.',
'Updates'					=>	'PunBB günlemmesi:',
'Updates failed'			=>	'PunBB resmi sitesinden son güncelleme girişimi başarısız oldu. Muhtemelen bu hizmetin geçici olarak servis dışı kalmasından kaynaklanıyordur. Bu uyarı, bir veya iki gün içinde geçmezse, otomatik güncelleştirme özelliğini kapatarak bu ve bundan sonraki güncelleme denetlemelerini el ile yapınız.',
'Updates version n hf'		=>	'PunBB\'nin yeni sürümü, versiyon %s, <a href="http://punbb.informer.com/">punbb.informer.com</a> sitesinden indirilebilir. Ayrıca, bir veya daha fazla düzeltme indirilebilir halde, indirmek için <a href="%s">Hotfix yönetimi</a> sayfasını ziyaret ediniz.',
'Updates version'			=>	'PunBB\'nin yeni sürümü, versiyon %s, <a href="http://punbb.informer.com/">punbb.informer.com</a> sitesinden indirilebilir.',
'Updates hf'				=>	'Bir veya daha fazla düzeltme indirilebilir halde, indirmek için <a href="%s">Hotfix yönetimi</a> sayfasını ziyaret ediniz.',
'Database mismatch'			=>	'Veritabanı sürümü uyuşmuyor',
'Database mismatch alert'	=>	'Veritabanınız PunBB\'nin yeni sürümü için tasarlanmış. Bu uyumsuzluk forumun düzgün çalışmamasına neden olabilir. Forumunuzu PunBB\'nin yeni sürümüne güncellemenizi öneririz.',

// Stuff for Jump Menu
'Go'						=>	'Git',		// submit button in forum jump
'Jump to'					=>	'Foruma geç:',

// For extern.php RSS feed
'RSS description'			=>	'%s sayfasındaki en son konular.',
'RSS description topic'		=>	'%s konusundaki en son mesajlar.',
'RSS reply'					=>	'Cvp: ',	// The topic subject will be appended to this string (to signify a reply)

// Accessibility
'Skip to content'			=>	'Forum\'a geç',

// Debug information
'Querytime'					=>	'Sayfa: %1$s saniyede (%2$s%% PHP - %3$s%% DB), %4$s sorgu ile oluşturuldu',
'Debug table'				=>	'Debug Bilgisi',
'Debug summary'				=>	'Veritabanı sorgu bilgisi',
'Query times'				=>	'Zaman (s)',
'Query'						=>	'Sorgu',
'Total query time'			=>	'Toplam sorgu süresi',

// Error message
'Forum error header'		=> 'Üzgünüz! Sayfa yüklenemiyor.',
'Forum error description'	=> 'Bu muhtemelen geçici bir hatadır. Sayfayı yenileyerek ve tekrar deneyin. Eğer problem devam ediyorsa, 5-10 dakika sonra tekrar deneyin.',
'Forum error location'		=> 'Hata konumu; dosya: %1$s - satır: %2$s',
'Forum error db reported'	=> 'Veritabanı raporu:',
'Forum error db query'		=> 'Başarısız sorgu:',

// Menu
'Menu admin'		=> 'Admin Menüsü',
'Menu profile'		=> 'Profil Menüsü',

);
