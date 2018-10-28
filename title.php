<?php
$url=explode("/",$_SERVER["REQUEST_URI"]) ;
$page=$url[2];
switch ($page) {
  case 'about-us.php':
    $title = "Hakkımızda";
    $aciklama = "Dermatoloji kliniğimiz, cilt, saç, tırnak ve mukoza zarlarının hem yaygın hem de nadir problemlerine bakım yapar.";
  break;
  case 'blog.php':
  case 'blog2.php':
    $title = "Blog";
    $aciklama = "";
  break;
  case 'contacts.php':
    $title = "İletişim";
    $aciklama = "Tüm cilt rahatsızlıklarını sivilce ve cilt kanserinden tedavi etmeye yardımcı olmaya hazırız.";
  break;
  case 'doctors.php':
    $title = "Doktorlarımız";
    $aciklama = "Dermatoloji sorununuzu çözmek için her zaman yardımcı olmaya hazır profesyonellerle tanışın.";
  break;
  case 'products.php':
    $title = "Ürünler";
    $aciklama = "Dermatoloji sorununuzu tedavi etmenize, cildinizi koruyabilmenize ve yenilemenize yardımcı olabilecek çok çeşitli cilt bakım ürünleri sunuyoruz.";
  break;
  case 'gallery.php':
    $title = "Galeri";
    $aciklama = "En son fotoğraflarımızdan en iyi fotoğraf çekimlerini burada bulabilirsiniz.";
  break;
  case 'index.php':
    $title = "Dermatoloji ve Cilt Bakımı";
    $aciklama = "Tüm cilt rahatsızlıklarını sivilceden cilt kanserine uygulama.";
  break;
  case 'make-an-appointment.php':
    $title = "Randevu";
    $aciklama = "Cildiniz problemini bekleyemez.";
  break;
  case 'services.php':
    $title = "Hizmetlerimiz";
    $aciklama = "Cilt Bakım Kliniği, cilt bakımı hedeflerinize ulaşmanıza yardımcı olmak için eksiksiz bir cilt bakımı tedavisi sunar.";
  break;
  case 'testimonial.php':
    $title = "Referanslar";
    $aciklama = "Müşterilerimizin kliniğimiz hakkında söylediklerini burada bulabilirsiniz.";
  break;
  case 'privacy-policy.php':
    $title = "Gizlilik Politikası";
    $aciklama = "";
  break;
  case 'more.php':
    $title = "Daha Fazlası";
    $aciklama = "";
  break;
  case 'blog_detay.php':
    $title = "Mesajlardan Biri";
    $aciklama = "";
  break;
  default:
    $title = "";
    $aciklama = "";
  break;
}
