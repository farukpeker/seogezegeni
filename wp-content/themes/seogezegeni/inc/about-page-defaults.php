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
        'image' => 'https://scontent-ist2-1.cdninstagram.com/v/t39.30808-6/733575305_1785003562932493_4034273863766537928_n.jpg?stp=dst-jpg_e35_tt6&_nc_cat=104&ig_cache_key=MzkzMDIwMjAyNjMxNTQyNjk2Nw%3D%3D.3-ccb7-5&ccb=7-5&_nc_sid=58cdad&efg=eyJ2ZW5jb2RlX3RhZyI6IkZFRUQueHBpZHMuMTA4MC5zZHIucmVndWxhcl9waG90by5DMyJ9&_nc_ohc=B6F9oHlHEEAQ7kNvwGP4b7S&_nc_oc=AdqvhDcFO_FkIkd8HFYYXG0_hRZ5X-5rhiNy1-VrRJDqlby8iU4BqYS_3Z2vY_lSaKI&_nc_ad=z-m&_nc_cid=0&_nc_zt=23&_nc_ht=scontent-ist2-1.cdninstagram.com&_nc_gid=zAP2oDzqimLAjC-zxKDcBQ&_nc_ss=7a22e&oh=00_AQPVi7wUINHS4eU249NcLOqO6-Y1u39rp6AVE2VbA_p8Sg&oe=6ACEF26C'],
    [
        'title' => __( 'Instagram Deneyimi Değişiyor', 'seogezegeni' ),
        'desc'  => __( 'Reels, içerik akışı ve sosyal medya stratejisi hakkında güncel paylaşım.', 'seogezegeni' ),
        'url'   => 'https://www.instagram.com/p/DYew2_Pna6c/',
        'image' => 'https://scontent-ist2-1.cdninstagram.com/v/t39.30808-6/701119789_1747046560061527_3013202353213918311_n.jpg?stp=dst-jpg_e35_tt6&_nc_cat=102&ig_cache_key=Mzg5OTc2OTE5MDkyNTMxMjg2MQ%3D%3D.3-ccb7-5&ccb=7-5&_nc_sid=58cdad&efg=eyJ2ZW5jb2RlX3RhZyI6IkNBUk9VU0VMX0lURU0ueHBpZHMuMTI1NC5zZHIucmVndWxhcl9waG90by5DMyJ9&_nc_ohc=t92q6fIH9A0Q7kNvwEPzLGX&_nc_oc=Ado_6ZwuDti-uJFg44fM0Wc1IEUKb9DlVWl5_uCmYgWl6J54QhPHfUCY7lcQyG-qGBQ&_nc_zt=23&_nc_ht=scontent-ist2-1.cdninstagram.com&_nc_gid=wy9CQ0M0Dv3ds2OdhXANgQ&_nc_ss=7b6a8&oh=00_AQMigv47L_aIr6SG1DyLvWoBXDrZB8_6vY7P0gBo95Yxjg&oe=6ACED4D9'],
    [
        'title' => __( 'Ajans Günlüğü', 'seogezegeni' ),
        'desc'  => __( 'Ofis hayatından, ekip enerjisinden ve ajans kültüründen kısa bir kesit.', 'seogezegeni' ),
        'url'   => 'https://www.instagram.com/p/DZaAL04oUgq/',
        'image' => 'https://scontent-ist1-1.cdninstagram.com/v/t51.71878-15/718942852_2066512658081436_3262498267232655870_n.jpg?stp=dst-jpg_e15_tt6&_nc_cat=101&ig_cache_key=MzkxNjQ0MzYzODY1MDk4MDM5NDEwMjYxMzAyMjY1MjA3MDA%3D.3-ccb7-5&ccb=7-5&_nc_sid=58cdad&efg=eyJ2ZW5jb2RlX3RhZyI6IkNMSVBTLnhwaWRzLjY0MC5zZHIudmlkZW9fbmZyYW1lX2NvdmVyX2ZyYW1lLkMzIn0%3D&_nc_ohc=kwzOUAGFqAkQ7kNvwFPaFjC&_nc_oc=AdrR2ET4dMP7veyy_w4g_2pIJ9hNYTVMk9OGaO3tZXPapcA10Ojjg1gZEM2TLZWj6x4&_nc_zt=23&_nc_ht=scontent-ist1-1.cdninstagram.com&_nc_gid=wy9CQ0M0Dv3ds2OdhXANgQ&_nc_ss=7b6a8&oh=00_AQMs-MpePlMZA9DGsSO1wkU7T5AXfwEQMI25JRIEWPEKiA&oe=6ACECE74'],
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
