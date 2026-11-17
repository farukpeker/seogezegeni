<?php
/**
 * Hakkimizda sayfasi varsayilan icerigi.
 * Panelde bir alan bos birakilirsa bu degerler kullanilir.
 */

defined( 'ABSPATH' ) || exit;

function sg_about_default_content() {
    return [
        'seo_title'   => '',
        'meta_desc'   => __( 'SEO Gezegeni; SEO, Google Ads, sosyal medya, web tasarım ve online itibar yönetimi alanlarında 2017\'den bu yana hizmet veren İzmir merkezli dijital ajanstır.', 'seogezegeni' ),
        'hero_badge'  => __( 'Markanızın Dijital Gezegeni', 'seogezegeni' ),
        'hero_title'  => __( 'SEO Gezegeni Hakkında', 'seogezegeni' ),
        'hero_accent' => __( 'Her Şey', 'seogezegeni' ),
        'hero_text'   => __( 'SEO Gezegeni hakkında daha detaylı bilgi edinmek ve çalışma yaklaşımımızı tanımak için doğru yerdesiniz.', 'seogezegeni' ),
        'btn1_text'   => __( 'İletişime Geç', 'seogezegeni' ),
        'btn1_url'    => '/iletisim/',
        'btn2_text'   => __( 'Referansları İncele', 'seogezegeni' ),
        'btn2_url'    => '/referanslar/',
        'hero_stats'  => [
            [ 'value' => '2017', 'label' => __( 'Kuruluş', 'seogezegeni' ) ],
            [ 'value' => '2',    'label' => __( 'Ajans Ofisi', 'seogezegeni' ) ],
            [ 'value' => '20+',  'label' => __( 'Ekip Üyesi', 'seogezegeni' ) ],
        ],

        'h_story'      => __( 'Hikayemiz & *Çalışmamız*', 'seogezegeni' ),
        'story_text'   => [
            __( 'SEO Gezegeni; profesyonel dijital ajans olarak uzman olduğu SEO, Google AdWords reklamları, sosyal medya yönetimi ve reklamları, web tasarım ve online itibar yönetimi alanlarında firmalara hizmet vermek için 2017 yılında uzun yıllardır farklı dijital ajanslarda çalışan uzmanların bir araya gelerek kurmuş olduğu bir dijital ajanstır.', 'seogezegeni' ),
        ],
        'intro_points' => [
            __( 'SEO, Google Ads, sosyal medya, web tasarım ve online itibar yönetimi alanlarında uzman ekip.', 'seogezegeni' ),
            __( '2017 yılından bu yana İzmir ve İstanbul ofislerinden Türkiye geneline dijital ajans hizmeti.', 'seogezegeni' ),
            __( 'Performans, kalite ve ölçülebilir sonuç odaklı çalışma yaklaşımı.', 'seogezegeni' ),
        ],
        'visual_items' => [
            [ 'icon' => 'fa-solid fa-magnifying-glass-chart', 'title' => __( 'SEO', 'seogezegeni' ),          'text' => __( 'Organik görünürlük & sıralama', 'seogezegeni' ) ],
            [ 'icon' => 'fa-brands fa-google',                'title' => __( 'Google Ads', 'seogezegeni' ),   'text' => __( 'Performans odaklı reklam', 'seogezegeni' ) ],
            [ 'icon' => 'fa-solid fa-share-nodes',            'title' => __( 'Sosyal Medya', 'seogezegeni' ), 'text' => __( 'Marka bilinirliği & etkileşim', 'seogezegeni' ) ],
            [ 'icon' => 'fa-solid fa-code',                   'title' => __( 'Web Tasarım', 'seogezegeni' ),  'text' => __( 'SEO uyumlu & hızlı siteler', 'seogezegeni' ) ],
        ],

        'h_exp'    => __( 'Dijital Büyüme İçin *Temel Disiplinler*', 'seogezegeni' ),
        'exp_lead' => __( 'Ajans deneyimimizi performans, teknik doğruluk ve kullanıcı odaklı tasarımla birleştiriyoruz.', 'seogezegeni' ),
        'expertise_cards' => [
            [
                'icon'  => 'fa-solid fa-laptop-code',
                'title' => __( 'Web Tasarım', 'seogezegeni' ),
                'desc'  => __( 'Yüzlerce web sitesi deneyimini SEO Gezegeni çatısı altında SEO ile uyumlu WordPress projelerine taşıyoruz.', 'seogezegeni' ),
            ],
            [
                'icon'  => 'fa-brands fa-google',
                'title' => __( 'Google Reklamları', 'seogezegeni' ),
                'desc'  => __( 'Küçük ve büyük bütçeli kampanya deneyimimizle Google reklam modellerini performans odaklı yönetiyoruz.', 'seogezegeni' ),
            ],
            [
                'icon'  => 'fa-solid fa-magnifying-glass-chart',
                'title' => __( 'Arama Motoru Optimizasyonu', 'seogezegeni' ),
                'desc'  => __( 'Web sitelerini arama motorlarına uygun hale getiriyor, organik görünürlük ve sıralama hedefleri için çalışıyoruz.', 'seogezegeni' ),
            ],
            [
                'icon'  => 'fa-solid fa-share-nodes',
                'title' => __( 'Sosyal Medya Reklamları', 'seogezegeni' ),
                'desc'  => __( 'Facebook, Instagram, YouTube, LinkedIn ve Twitter kampanyalarında dönüşüm ve performansı merkeze alıyoruz.', 'seogezegeni' ),
            ],
        ],

        'h_areas'    => __( 'Profesyonel *Çalışma Alanlarımız*', 'seogezegeni' ),
        'areas_lead' => __( 'Aşağıdaki her alanda tutkuyla çalışıyor, ihtiyaçlarınıza göre strateji ve uygulama süreçlerini birlikte şekillendiriyoruz.', 'seogezegeni' ),
        'work_areas' => [
            [
                'icon'  => 'fa-solid fa-magnifying-glass-chart',
                'title' => __( 'SEO', 'seogezegeni' ),
                'desc'  => __( 'Teknik SEO, içerik optimizasyonu ve otorite çalışmalarıyla organik görünürlüğünüzü artırın.', 'seogezegeni' ),
                'url'   => '/seo/',
            ],
            [
                'icon'  => 'fa-solid fa-chart-pie',
                'title' => __( '360° DİJİTAL PAZARLAMA', 'seogezegeni' ),
                'desc'  => __( 'Markanızın tüm dijital kanallarını tek strateji altında büyüme hedeflerinize göre planlayın.', 'seogezegeni' ),
                'url'   => '/360-dijital-pazarlama/',
            ],
            [
                'icon'  => 'fa-solid fa-share-nodes',
                'title' => __( 'SOSYAL MEDYA YÖNETİMİ', 'seogezegeni' ),
                'desc'  => __( 'İçerik üretimi, topluluk yönetimi ve düzenli raporlamayla sosyal medya varlığınızı güçlendirin.', 'seogezegeni' ),
                'url'   => '/sosyal-medya-yonetimi/',
            ],
            [
                'icon'  => 'fa-brands fa-google',
                'title' => __( 'GOOGLE & META REKLAMLARI', 'seogezegeni' ),
                'desc'  => __( 'Google, Instagram ve Facebook reklamlarında dönüşüm odaklı kampanya kurguları oluşturun.', 'seogezegeni' ),
                'url'   => '/google-meta-reklamlari/',
            ],
            [
                'icon'  => 'fa-solid fa-laptop-code',
                'title' => __( 'WEB TASARIM ve YAZILIM', 'seogezegeni' ),
                'desc'  => __( 'SEO uyumlu, hızlı, mobil dostu ve dönüşüm odaklı web siteleri ile yazılım çözümleri geliştirin.', 'seogezegeni' ),
                'url'   => '/web-tasarim-ve-yazilim/',
            ],
        ],
        'cta_icon'  => 'fa-solid fa-paper-plane',
        'cta_title' => __( 'Teklif Alın', 'seogezegeni' ),
        'cta_text'  => __( 'Hedeflerinize uygun dijital büyüme planını birlikte çıkaralım. Ekibimiz kısa sürede sizinle iletişime geçsin.', 'seogezegeni' ),
        'cta_url'   => '/iletisim/',

        'h_media'       => __( 'Ajansı Daha *Yakından Tanıyın*', 'seogezegeni' ),
        'media_lead'    => __( 'Tanıtım videosu, ajans fotoğrafı ve Instagram paylaşımlarıyla bizi daha yakından tanıyın.', 'seogezegeni' ),
        'video_url'     => 'https://www.youtube.com/watch?v=xqxWxhz3HRY',
        'photo_url'     => 'https://seogezegeni.com/wp-content/uploads/2023/02/seo-gezegeni-ekibi-2023-2.jpg',
        'photo_caption' => __( 'SEO Gezegeni ekibi', 'seogezegeni' ),
        'instagram_posts' => [
    [
        'title' => __( 'OpenAI’dan Yapay Zekâda Yeni Adım', 'seogezegeni' ),
        'desc'  => __( 'Teknoloji ve dijital pazarlama gündeminden öne çıkan güncel paylaşım.', 'seogezegeni' ),
        'url'   => 'https://www.instagram.com/p/DaK4et6DSyX/',
        'image' => ''],
    [
        'title' => __( 'Instagram Deneyimi Değişiyor', 'seogezegeni' ),
        'desc'  => __( 'Reels, içerik akışı ve sosyal medya stratejisi hakkında güncel paylaşım.', 'seogezegeni' ),
        'url'   => 'https://www.instagram.com/p/DYew2_Pna6c/',
        'image' => ''],
    [
        'title' => __( 'Ajans Günlüğü', 'seogezegeni' ),
        'desc'  => __( 'Ofis hayatından, ekip enerjisinden ve ajans kültüründen kısa bir kesit.', 'seogezegeni' ),
        'url'   => 'https://www.instagram.com/p/DfHa2kDRmpx/',
        'image' => ''],
        ],

        'h_quality'    => __( 'Kalite İşlerimizin *Anahtar Sözcüğü*', 'seogezegeni' ),
        'quality_text' => [
            __( 'Yaptığımız tüm işlerde kaliteli hizmet vermeyi taahhüt ediyor ve bu bilinçle hareket ediyoruz. SEO çalışmalarımızda güçlü sıralama hedefleriyle ilerliyor, AdWords ve sosyal medya reklamlarında hedefleri tutturmak adına sürekli optimizasyon yapıyor, web tasarım işlerimizde SEO uyumluluğuna ve kullanıcı dostu deneyime dikkat ediyoruz.', 'seogezegeni' ),
        ],
        'quality_metrics' => [
            [ __( 'Tasarım', 'seogezegeni' ), '95' ],
            [ __( 'Pazarlama', 'seogezegeni' ), '96' ],
            [ __( 'Yazılım', 'seogezegeni' ), '92' ],
            [ __( 'Kullanıcı Dostu', 'seogezegeni' ), '98' ],
            [ __( 'Hedef Odaklı', 'seogezegeni' ), '97' ],
        ],
    ];
}
