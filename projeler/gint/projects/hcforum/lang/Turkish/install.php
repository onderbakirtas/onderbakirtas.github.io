<?php

// Language definitions used in install.php
$lang_install = array(

// Install Form
'Install PunBB'				=>	'PunBB %s Yükle',
'Choose language'			=>	'Kurulum Dilini Değiştir',
'Choose language help'		=>	'Yükeleme talimatlarını kendi dilinizde daha rahat yerine getirirsiniz. Yukardaki listeden dil seçiminizi yapınız.',
'Installer language'		=>	'Kurulum dili:',
'Choose language legend'	=>	'Kurulum dili',
'Install intro'				=>	'PunBB kurulumunu yapabilmeniz için aşağıdaki formda gerekli yerleri düzgünce doldurmalısınız. Formu doldurmadan önce verilen talimatları okuyun. Eğer kurulumda herhangi bir sorunla karşılaşırsanız, PunBB indirme paketinin bir parçası olarak verilen belgelere bakın.',
'Part1'						=>	'Bölüm 1 — Veritabanı Kurulumu',
'Part1 intro'				=>	'PunBB için gerekli olan veritabanı bilgilerini giriniz. Aşağıdaki bilgileri kurulum yapılmadan önce biliyor olmanız gerek. Bu bölüm ile ilgili yardım notu aşağıda belirtilmiştir.',
'Database type'				=>	'Veritabanı Tipi',
'Database name'				=>	'Veritabanı Adı',
'Database server'			=>	'Veritabanı Sunucusu',
'Database username'			=>	'Veritabanı Kullanıcı Adı',
'Database password'			=>	'Veritabanı Şifresi',
'Database user pass'		=>	'Veritabanı kullanıcı adı ve şifresi',
'Table prefix'				=>	'Tablo Ön eki',
'Database type info'		=>	'PunBB sistemi MySQL, PostgreSQL ve SQLite tiplerini destekler. Eğer aşağıdaki açılır kutuda sizin veritabını tipiniz yoksa, bu söz konusu veritabanı tipi desteklenmiyor anlamına gelir. Her veritabanı tipi için daha fazla bilgi, SSS içerisinde bulunabilir.',
'Mysql type info'			=>	'PunBB MySQL bağlantınızı iki farklı şekilde tespit eder. Bunlar "<em>Standart</em>" ve "<em>Gelişmiş</em>" olarak iki seçenektir. Hangisini kullanacağınızdan emin değilseniz, "<em>Gelişmiş</em>" seçenekten başlayın, başarısız olursa "<em>Standart</em>" seçeneğini deneyin.',
'Database server info'		=>	'Veritabanı sunucusunun adresini girin (örnek: <em>localhost</em>, <em>mysql1.alanadi.com</em> ya da <em>208.77.188.166</em>). Eğer veritabanınız varsayılan port üzerinde çalışmıyorsa, bunu düzenlemeniz gerekir (örnek: <em>localhost:3580</em>). SQLite desteği için, bu kısma herhangi bir şey girebilir ya da \'localhost\' olarak bırakabilirsiniz.',
'Database name info'		=>	'PunBB tablolarının yükleneceği veritabanı adını girin. Gireceğiniz veritabanı adı kurulu ama içi boş olmalı. SQLite için, bu veritabanı dosyası yoludur. Eğer SQLite veritabanı dosyası yoksa, PunBB oluşturmaya çalışacaktır.',
'Database username info'	=>	'Seçilen veritabanı için kullanıcı adı ve şifre girin. SQLite için yoksayın.',
'Table prefix info'			=>	'Opsiyonel — veritabanı tablo ön eki girin. Farklı ön ekler kullanarak aynı veritabanı içerisinde birden fazla PunBB kurulumu yapabilirsiniz (örnet: <em>foo_</em>).',
'Part1 legend'				=>	'Veritabanı bilgisi',
'Database type help'		=>	'Veritabanı tipini seçin.',
'Database server help'		=>	'Veritabanı sunucusu adresi. SQLite için herhangi bir değer.',
'Database name help'		=>	'PunBB tablolarının yükleneceği varolan veritabanı adı.',
'Database username help'	=>	'Veritabanı bağlantısı için. SQLite için yoksayın.',
'Database password help'	=>	'Veritabanı bağlantısı için. SQLite için yoksayın.',
'Table prefix help'			=>	'Opsiyonel veritabanı tablosu ön eki örn. "foo_".',
'Part2'						=>	'Bölüm 2 — Forum Yönetici Kayıdı',
'Part2 legend'				=>	'Yönetici detayları',
'Part2 intro'				=>	'Lütfen PunBB yüklemesi için gerekli olan yönetici hesap bilgilerini girin. Daha fazla yönetici ve moderatörü kurulumdan sonra ekleyebilirsiniz.',
'Admin username'			=>	'Yönetici Kullanıcı Adı',
'Admin password'			=>	'Yönetici Şifresi',
'Admin confirm password'	=>	'Şifre (Tekrar)',
'Admin e-mail'				=>	'Yönetici E-postası',
'Username help'				=>	'2 ile 25 karakter arası.',
'Password help'				=>	'En az 4 karakter. BüYüK KüÇüK HaRf DuYaRLı.',
'Confirm password help'		=>	'Re-enter exactly as before.',
'E-mail address help'		=>	'Forum yöneticisi için geçerli bir e-posta adresi.',
'Part3'						=>	'Bölüm 3 — Forum Kurulumu',
'Part3 legend'				=>	'Forum bilgisi',
'Part3 intro'				=>	'Lütfen istenilen bilgileri girin. Forum URL\'sini girerken aşağıdaki uyarıyı göz önünde bulundurun.',
'Base URL'					=>	'Forum URL',
'Base URL info'				=>	'Lütfen Forum URL\'sini girerken dikkat edin. Doğru Forum URL\'si girmelisiniz, yoksa sistem düzgün çalışmayabilir. Forum URL\'si PunBB forum siteninizin bulunduğu adrestir (örnek: <em>http://forum.alanadi.com</em> or <em>http://example.com/punbb</em>). Lütfen Forum URL\'si belirtirken sonunda \'/\' işareti koymayın. Aşağıdaki varsayılan değerin bir tahmin olduğunu unutmayın.',
'Base URL help'				=>	'PunBB Forum URL\'si. Sonuna \'/\' işareti koymayın.',
'Pun repository'			=>	'Pun repository',
'Pun repository help'		=>	'Forum kurulumundan sonra pun_repository eklentisini (tek tıkla eklenti indirici ile) yükle.',
'Start install'				=>	'Yükle :)', // Label for submit button
'Required'					=>	'(Gerekli)',
'Required warn'				=>	'Form gönderilmeden önce kalın yazılan yerler doldurulmalı.',

// Install errors
'No database support'		=>	'Sunucunuzun desteklediği veritabanlarından hiç birini PunBB desteklemiyor. Sunucunuza PunBB yükleyebilmek için, sunucunuzun MySQL, PostgreSQL ya da SQLite\'ı desteklemesi gerekir.',
'Missing database name'		=>	'Bir veritabanı adı girmelisiniz. Lütfen geri dönüp düzeltin.',
'Username too long'			=>	'Kullanıcı adı 25 karakterden uzun olamaz. Lütfen düzeltin.',
'Username too short'		=>	'Kullanıcı adı 2 karakterden az olamaz. Lütfen düzeltin.',
'Pass too short'			=>	'Şifre 4 karakterden az olamaz. Lütfen düzeltin.',
'Username guest'			=>	'Misafir kullanıcı adı ayrılmıştır. Lütfen düzeltin.',
'Username BBCode'			=>	'Kullanıcı adı forumun kullandığı metin biçim etiketi (BBCode) içeremez. Lütfen düzeltin.',
'Username reserved chars'	=>	'Kullanıcı adı şu karakterleri içeremez; \', " veya aynı anda [ ya da ]. Lütfen düzeltin.',
'Username IP'				=>	'Kullanıcı adı IP adresi biçiminde olmamalıdır. Lütfen düzeltin.',
'Invalid email'				=>	'Girdiğiniz yönetici e-posta adresi geçersiz. Lütfen düzeltin.',
'Missing base url'			=>	'Forum URL\'si girmelisiniz. Lütfen düzeltin.',
'No such database type'		=>	'\'%s\' geçerli bir veritabanı tipi değil.',
'Invalid MySQL version'		=>	'MySQL versiyonunuz %1$s. PunBB\'nin yüklenebilmesi için MySQL versiyonunuzun en az %2$s olması gerekir. Devam etmeden önce MySQL versiyonunuzu yükseltmelisiniz.',
'Invalid table prefix'		=>	'\'%s\' ön eki yasaklı karakter içeriyor ya da çok uzun. Ön ek harf, numara ve altçizgi içermelidir. Ön ek numara ile başlayamaz. Maksimum uzunluk 40 karakterdir. Lütfen farklı bir ön ek seçiniz.',
'SQLite prefix collision'	=>	'\'sqlite_\' ön eki SQLite motoru tarafından ayrılmıştır. Lütfen farklı bir ön ek seçiniz.',
'PunBB already installed'	=>	'"%1$susers" tablosu zaten "%2$s" veritabanının içerisinde mevcut. Bu PunBB\'nin yüklü olduğubu ya da bir başka yazılımın bir veya birden çok tablosunun, PunBB\'ye gerekli olan tablo adlarına benzer olduğu anlamına gelebilir. Eğer aynı veritabanına birden çok PunBB yüklemek istiyorsanız, farklı bir tablo ön eki seçmelisiniz.',
'Invalid language'			=>	'Seçtiğiniz dil paketi mevcut değil ya da bozulmuş. Lütfen kontrol edip tekrar deneyin.',
'InnoDB Not Supported'		=>	'MySQL versiyonunuz InnoDB desteği olmadan çalışıyor.',

// Used in the install
'Default language'			=>	'Varsayılan Dil',
'Default language help'		=>	'(Eğer dil paketini silerseniz bu seçeneği düzeltmeniz gerekir)',
'Default announce heading'	=>	'Örnek duyuru',
'Default announce message'	=>	'<p>Buraya duyuru yazısını girin.</p>',
'Default rules'				=>	'Buraya kuralları girin.',
'Default category name'		=>	'Deneme kategorisi',
'Default forum name'		=>	'Deneme forumu',
'Default forum descrip'		=>	'Bu bir deneme forumudur.',
'Default topic subject'		=>	'Deneme konusu',
'Default post contents'		=>	'Eğer burayı okuyabiliyorsanız (ki burdasınız), PunBB yüklemesi başarıya ulaşmış gibi görünüyor! Şimdi yönetici paneline giriş yaparak forum ayarlarınızı düzeltebilirsiniz.',
'Default rank 1'			=>	'Yeni Üye',
'Default rank 2'			=>	'Üye',


// Installation completed form
'Success description'		=>	'Tebrikler! PunBB %s başarıyla yüklendi.',
'Final instructions'		=>	'Son talimatlar',
'No write info 1'			=>	'Önemli! Kurulumu tamamlamak için, aşağıdaki config.php dosyasını indirmeniz gerekiyor. Daha sonra bu dosyayı, PunBB forum klasörlerinin bulunduğu ana dizine yüklemelisiniz.',
'No write info 2'			=>	'Config.php dosyasını yükledikten sonra, PunBB tamamen yüklenmiş olacak! Config.php dosyasını yükledikten sonra %s.',
'Go to index'				=>	'Ana Sayfa',
'Warning'					=>	'Uyarı!',
'No cache write'			=>	'<strong>Cache dizini şuanda yazılabilir değil!</strong> PunBB fonksiyonlarının düzgün çalışabilmesi için <em>cache</em> dizinin yazılabilir olması gerekir. Chmod ayarlarını kullanarak gerekli dizine yazım izini verebilirsiniz. Chmod 0777 olmalıdır.',
'No avatar write'			=>	'<strong>Avatar dizini şuanda yazılabilir değil!</strong> Kullanıcılarınızın avatar yüklemesini istiyorsanız, <em>img/avatars</em> dizinin yazılabilir olması gerekir. Avatar yüklenmesi için farklı bir dizini daha sonra seçebilirsiniz (Yönetim->Ayarlar->Özellikler kısmına bakın). Chmod ayarlarını kullanarak gerekli dizine yazım izini verebilirsiniz. Chmod 0777 olmalıdır.',
'File upload alert'			=>	'<strong>Dosya yükleme bu server için geçerli gözükmüyor!</strong> Kullanıcılarınızın avatar yüklemesini isiyorsanız, file_uploads ayarını etkinleştirmelisiniz. Dosya yükleme etkinleştirildiğinde, avatar yükleme özelliğini Yönetim->Ayarlar->Özellikler kısmından etkinleştirebilirsiniz.',
'Download config'			=>	'Config.php dosyasını indirin', // Label for submit button
'Write info'				=>	'PunBB tamamen yüklendi! Artık forum %s\'sına gidebilirsiniz.',
);
