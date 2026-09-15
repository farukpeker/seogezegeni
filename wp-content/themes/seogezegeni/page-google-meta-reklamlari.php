<?php
/**
 * Template Name: Google Meta Reklamlari Sayfasi
 * Template Post Type: page
 *
 * Google Ads ve Meta reklam yonetimi hizmet sayfasi ozel sablonu.
 */

defined( 'ABSPATH' ) || exit;

get_header();

if ( have_posts() ) {
    the_post();
}

$ad_stats = [
    [ 'value' => '2', 'label' => __( 'Güçlü reklam ekosistemi', 'seogezegeni' ) ],
    [ 'value' => '10+', 'label' => __( 'Kampanya modeli ve optimizasyon alanı', 'seogezegeni' ) ],
    [ 'value' => '5', 'label' => __( 'Analizden raporlamaya süreç adımı', 'seogezegeni' ) ],
];

$benefits = [
    [ 'fa-solid fa-users-viewfinder', __( 'Doğru hedef kitleye ulaşmayı sağlar.', 'seogezegeni' ) ],
    [ 'fa-solid fa-chart-line', __( 'Ölçülebilir sonuçlar sunar.', 'seogezegeni' ) ],
    [ 'fa-solid fa-coins', __( 'Reklam bütçesinin daha verimli kullanılmasını sağlar.', 'seogezegeni' ) ],
    [ 'fa-solid fa-bullhorn', __( 'Marka bilinirliğini güçlendirir.', 'seogezegeni' ) ],
    [ 'fa-solid fa-user-plus', __( 'Satış ve potansiyel müşteri kazanımını destekler.', 'seogezegeni' ) ],
    [ 'fa-solid fa-layer-group', __( 'Pazarlama süreçlerini güçlendirir.', 'seogezegeni' ) ],
];

$google_services = [
    [ 'fa-solid fa-magnifying-glass', __( 'Google Arama Ağı Reklamları', 'seogezegeni' ), __( 'Aktif olarak ürün veya hizmet arayan kullanıcılara doğru anahtar kelime, reklam metni, negatif kelime ve teklif stratejileriyle ulaşılır.', 'seogezegeni' ) ],
    [ 'fa-solid fa-wand-magic-sparkles', __( 'Performance Max Kampanyaları', 'seogezegeni' ), __( 'Google Arama, YouTube, Gmail, Display, Discover ve Maps alanlarında yapay zeka destekli kampanya yapılarıyla görünürlük sağlanır.', 'seogezegeni' ) ],
    [ 'fa-solid fa-cart-shopping', __( 'Google Shopping Reklamları', 'seogezegeni' ), __( 'Ürün feed optimizasyonu, Merchant Center yapılandırması, kategori düzeni, stok yönetimi ve ürün başlıkları birlikte ele alınır.', 'seogezegeni' ) ],
    [ 'fa-solid fa-image', __( 'Display Reklamları', 'seogezegeni' ), __( 'Marka bilinirliği, yeniden pazarlama ve kampanya duyuruları için geniş reklam ağı üzerinde stratejik gösterimler planlanır.', 'seogezegeni' ) ],
    [ 'fa-brands fa-youtube', __( 'YouTube Reklamları', 'seogezegeni' ), __( 'Video kampanyalarında izlenme süresi, etkileşim, dönüşüm ve performans metrikleriyle marka hikayesi doğru hedef kitleye taşınır.', 'seogezegeni' ) ],
    [ 'fa-solid fa-repeat', __( 'Remarketing Kampanyaları', 'seogezegeni' ), __( 'Web sitenizi ziyaret eden, ürün inceleyen veya sepeti yarım bırakan kullanıcılar yeniden hedeflenerek satın alma süreci desteklenir.', 'seogezegeni' ) ],
];

$meta_services = [
    [ 'fa-brands fa-instagram', __( 'Instagram Reklamları', 'seogezegeni' ), __( 'Görsel ve video odaklı kampanyalarda kullanıcı davranışları, içerik formatları, reklam mesajı, hedefleme ve dönüşüm hedefleri birlikte değerlendirilir.', 'seogezegeni' ) ],
    [ 'fa-brands fa-facebook-f', __( 'Facebook Reklamları', 'seogezegeni' ), __( 'Yerel işletmeler, hizmet sektörleri ve B2B firmalar için ilgi alanı, form, yeniden pazarlama ve potansiyel müşteri kampanyaları planlanır.', 'seogezegeni' ) ],
    [ 'fa-solid fa-clapperboard', __( 'Reels Reklamları', 'seogezegeni' ), __( 'Kısa video formatlarında dikkat çekici, hızlı ve çağrı mesajı güçlü kreatiflerle kullanıcı dikkatini yakalayan kampanyalar oluşturulur.', 'seogezegeni' ) ],
    [ 'fa-solid fa-clipboard-list', __( 'Lead Ads Kampanyaları', 'seogezegeni' ), __( 'Kullanıcıların platformdan ayrılmadan form doldurmasını sağlayan kampanyalarla başvuru, teklif ve potansiyel müşteri süreçleri kolaylaştırılır.', 'seogezegeni' ) ],
    [ 'fa-solid fa-robot', __( 'Advantage+ Kampanyaları', 'seogezegeni' ), __( 'Meta’nın yapay zeka destekli sistemleriyle hedef kitle seçimi, reklam dağıtımı, bütçe kullanımı ve yerleşim optimizasyonu otomatik olarak geliştirilir.', 'seogezegeni' ) ],
    [ 'fa-solid fa-bullseye', __( 'Meta Remarketing Kampanyaları', 'seogezegeni' ), __( 'Web sitesi ziyaretçileri, video izleyen kullanıcılar, Instagram etkileşimleri ve form dolduran kişiler farklı hedef kitleler olarak yeniden değerlendirilebilir.', 'seogezegeni' ) ],
];

$strategy_cards = [
    [ 'fa-solid fa-filter', __( 'Hedef Kitle ve Segmentasyon', 'seogezegeni' ), __( 'Yaş, lokasyon ve demografiyle sınırlı kalmadan ilgi alanları, satın alma davranışları, çevrim içi alışkanlıklar ve karar verme süreçleri incelenir.', 'seogezegeni' ) ],
    [ 'fa-solid fa-funnel-dollar', __( 'Pazarlama Hunisi', 'seogezegeni' ), __( 'Farkındalık, değerlendirme, dönüşüm ve sadakat aşamalarına göre farklı reklam mesajları, hedef kitleler ve kampanya yapıları planlanır.', 'seogezegeni' ) ],
    [ 'fa-solid fa-palette', __( 'Kreatif Performansı', 'seogezegeni' ), __( 'Güçlü ilk izlenim, net değer önerisi, sade tasarım, dikkat çekici başlık ve açık çağrı mesajı reklam performansını doğrudan etkiler.', 'seogezegeni' ) ],
    [ 'fa-solid fa-window-maximize', __( 'Landing Page Optimizasyonu', 'seogezegeni' ), __( 'Reklam mesajıyla tutarlı, hızlı yüklenen, mobil uyumlu ve dönüşüm sürecini kolaylaştıran açılış sayfaları kampanya başarısını artırır.', 'seogezegeni' ) ],
    [ 'fa-solid fa-vial', __( 'A/B Testleri', 'seogezegeni' ), __( 'Başlıklar, reklam metinleri, görseller, videolar, hedef kitleler, teklif stratejileri ve açılış sayfaları düzenli olarak karşılaştırılır.', 'seogezegeni' ) ],
    [ 'fa-solid fa-repeat', __( 'Sürekli Optimizasyon', 'seogezegeni' ), __( 'Anahtar kelimeler, reklam metinleri, kreatifler, hedef kitleler, bütçe dağılımları ve dönüşüm verileri düzenli olarak geliştirilir.', 'seogezegeni' ) ],
];

$measurement_cards = [
    [ 'fa-brands fa-google', __( 'Google Analytics 4', 'seogezegeni' ), __( 'Kullanıcı yolculuğu, kanal performansı, sayfa geçişleri, dönüşüm yolları ve kampanyaların gerçek etkisi analiz edilir.', 'seogezegeni' ) ],
    [ 'fa-brands fa-google', __( 'Google Tag Manager', 'seogezegeni' ), __( 'Takip kodları merkezi biçimde yönetilerek teknik süreçler kolaylaştırılır ve veri doğruluğu artırılır.', 'seogezegeni' ) ],
    [ 'fa-brands fa-meta', __( 'Meta Pixel ve Conversion API', 'seogezegeni' ), __( 'Tarayıcı kısıtlamaları ve gizlilik politikaları karşısında daha doğru dönüşüm verisi, güçlü hedefleme ve sağlıklı raporlama desteklenir.', 'seogezegeni' ) ],
    [ 'fa-solid fa-shield-halved', __( 'Consent Mode ve Veri Gizliliği', 'seogezegeni' ), __( 'Çerez tercihleri dikkate alınarak reklam ve analiz verilerinin daha sağlıklı modellenmesine yardımcı olunur.', 'seogezegeni' ) ],
    [ 'fa-solid fa-route', __( 'Attribution Analizi', 'seogezegeni' ), __( 'Kullanıcı yolculuğundaki temas noktaları incelenerek dönüşümün hangi kanallardan etkilendiği daha doğru yorumlanır.', 'seogezegeni' ) ],
    [ 'fa-solid fa-database', __( 'First-Party Data', 'seogezegeni' ), __( 'Mevcut müşteri, e-posta abonesi ve CRM verileriyle özel, benzer ve yeniden pazarlama hedef kitleleri geliştirilebilir.', 'seogezegeni' ) ],
];

$business_types = [
    [ 'fa-solid fa-store', __( 'E-Ticaret Markaları', 'seogezegeni' ), __( 'Google Shopping, Search, Performance Max ve Meta katalog reklamları birlikte kullanılarak ürün görünürlüğü ve satış performansı artırılır.', 'seogezegeni' ) ],
    [ 'fa-solid fa-briefcase', __( 'Hizmet Sektörleri', 'seogezegeni' ), __( 'Avukatlık, sağlık, eğitim, emlak, danışmanlık ve benzeri alanlarda kaliteli potansiyel müşteri kazanımı hedeflenir.', 'seogezegeni' ) ],
    [ 'fa-solid fa-location-dot', __( 'Yerel İşletmeler', 'seogezegeni' ), __( 'Lokasyon hedeflemeli kampanyalar, telefon aramaları, yol tarifi talepleri ve mağaza ziyaretleriyle yerel görünürlük artırılır.', 'seogezegeni' ) ],
    [ 'fa-solid fa-industry', __( 'Kurumsal ve B2B Firmalar', 'seogezegeni' ), __( 'Marka bilinirliği, nitelikli iş bağlantıları, teklif talepleri ve uzun satış döngüleri için Google ve Meta reklamları birlikte planlanır.', 'seogezegeni' ) ],
];

$metrics = [
    [ 'fa-solid fa-percent', __( 'Dönüşüm Oranı', 'seogezegeni' ), __( 'Reklamların satış, teklif veya form hedeflerine ne ölçüde dönüştüğü takip edilir.', 'seogezegeni' ) ],
    [ 'fa-solid fa-sack-dollar', __( 'ROAS', 'seogezegeni' ), __( 'Reklam harcamasının işletmeye sağladığı gelir karşılığı analiz edilir.', 'seogezegeni' ) ],
    [ 'fa-solid fa-user-plus', __( 'CPA ve CAC', 'seogezegeni' ), __( 'Müşteri edinme maliyeti ve kampanya maliyetleri düzenli olarak değerlendirilir.', 'seogezegeni' ) ],
    [ 'fa-solid fa-hand-pointer', __( 'CTR ve CPC', 'seogezegeni' ), __( 'Tıklama oranı ve tıklama başı maliyet reklam ilgisini ve bütçe verimini gösterir.', 'seogezegeni' ) ],
    [ 'fa-solid fa-star', __( 'Quality Score', 'seogezegeni' ), __( 'Google reklamlarında kalite puanı ve potansiyel müşteri kalitesi birlikte incelenir.', 'seogezegeni' ) ],
    [ 'fa-solid fa-eye', __( 'Gösterim Payı', 'seogezegeni' ), __( 'Reklamların rekabet ortamında ne kadar görünür olduğu analiz edilir.', 'seogezegeni' ) ],
    [ 'fa-solid fa-chart-simple', __( 'Yatırım Getirisi', 'seogezegeni' ), __( 'Yalnızca kampanya performansı değil, reklam yatırımlarının işletmeye sağladığı gerçek katkı ölçülür.', 'seogezegeni' ) ],
    [ 'fa-solid fa-medal', __( 'Lead Kalitesi', 'seogezegeni' ), __( 'Potansiyel müşterilerin satışa yakınlığı ve ticari değeri değerlendirilir.', 'seogezegeni' ) ],
];

$process_steps = [
    [ __( 'Analiz ve Hedef Belirleme', 'seogezegeni' ), __( 'Sektörünüz, rakipleriniz, hedef kitleniz ve mevcut dijital performansınız analiz edilerek reklam hedefleri netleştirilir.', 'seogezegeni' ) ],
    [ __( 'Ölçüm Altyapısının Kurulması', 'seogezegeni' ), __( 'Google Analytics 4, Google Tag Manager, Meta Pixel ve gerekli ölçüm altyapıları yapılandırılır.', 'seogezegeni' ) ],
    [ __( 'Kampanya Stratejisinin Oluşturulması', 'seogezegeni' ), __( 'Kampanya türleri, hedef kitleler, reklam mesajları, kreatif içerikler ve bütçe planlaması hazırlanır.', 'seogezegeni' ) ],
    [ __( 'Yayın, Test ve Optimizasyon', 'seogezegeni' ), __( 'Kampanyalar yayına alındıktan sonra performans verileri takip edilir, A/B testleri yapılır ve bütçe dağılımları optimize edilir.', 'seogezegeni' ) ],
    [ __( 'Raporlama ve Sürekli Gelişim', 'seogezegeni' ), __( 'Elde edilen veriler doğrultusunda yeni büyüme fırsatları belirlenir ve kampanyalar sürekli geliştirilir.', 'seogezegeni' ) ],
];

$faqs = [
    [ __( 'Google Ads ve Meta reklamları birlikte kullanılmalı mı?', 'seogezegeni' ), __( 'Çoğu işletme için evet. Google Ads aktif talebi yakalarken, Meta reklamları yeni hedef kitlelere ulaşmayı ve marka bilinirliği oluşturmayı destekler.', 'seogezegeni' ) ],
    [ __( 'Google Ads mi yoksa Meta reklamları mı daha etkilidir?', 'seogezegeni' ), __( 'Bu cevap sektör, hedef kitle, satış süreci ve pazarlama hedeflerine göre değişir. Çoğu durumda iki platform birlikte daha dengeli performans sağlar.', 'seogezegeni' ) ],
    [ __( 'Reklam bütçesi neye göre belirlenir?', 'seogezegeni' ), __( 'Sektör rekabeti, kampanya hedefleri, hedeflenen anahtar kelimeler, büyüme planları ve işletmenin öncelikleri dikkate alınır.', 'seogezegeni' ) ],
    [ __( 'Reklam sonuçları ne kadar sürede görülür?', 'seogezegeni' ), __( 'İlk performans verileri kısa sürede oluşabilir; ancak kampanyaların optimize edilmesi ve sürdürülebilir sonuçlar için düzenli analiz gerekir.', 'seogezegeni' ) ],
    [ __( 'Yüksek bütçe her zaman daha iyi sonuç verir mi?', 'seogezegeni' ), __( 'Hayır. Kampanya yapısı, hedefleme, reklam kalitesi, dönüşüm altyapısı ve optimizasyon doğru planlanmadığında yüksek bütçeler de verimsiz kullanılabilir.', 'seogezegeni' ) ],
    [ __( 'Reklam yönetimi SEO çalışmalarının yerine geçer mi?', 'seogezegeni' ), __( 'Hayır. Reklamlar kısa vadede görünürlük sağlarken, SEO uzun vadeli organik büyümeyi destekler. Birlikte planlandığında daha güçlü sonuçlar elde edilebilir.', 'seogezegeni' ) ],
    [ __( 'Performance Max her işletme için uygun mudur?', 'seogezegeni' ), __( 'Performance Max birçok işletme için avantaj sunabilir; ancak doğru dönüşüm verileri, güçlü kreatifler ve düzenli optimizasyon süreçleri gerektirir.', 'seogezegeni' ) ],
    [ __( 'Remarketing neden önemlidir?', 'seogezegeni' ), __( 'Kullanıcıların önemli bir bölümü ilk ziyaretinde dönüşüm gerçekleştirmez. Remarketing, daha önce etkileşim kurmuş kullanıcıları yeniden hedeflemeyi sağlar.', 'seogezegeni' ) ],
    [ __( 'Reklam performansı hangi metriklerle değerlendirilmelidir?', 'seogezegeni' ), __( 'ROAS, CPA, dönüşüm oranı, müşteri edinme maliyeti, potansiyel müşteri kalitesi ve yatırım getirisi gibi metrikler birlikte analiz edilmelidir.', 'seogezegeni' ) ],
];
?>

<main id="sg-main" class="sg-seo-page sg-ads-page" role="main">

    <section class="sg-page-hero sg-seo-hero sg-ads-hero" aria-labelledby="ads-page-heading">
        <div class="container">
            <div class="sg-seo-hero-grid">
                <div class="sg-seo-hero-copy" data-sg-reveal="left">
                    <span class="sg-hero-badge">
                        <i class="fa-solid fa-rectangle-ad" aria-hidden="true"></i>
                        <?php esc_html_e( 'Google Ads & Meta Reklam Ajansı', 'seogezegeni' ); ?>
                    </span>
                    <h1 id="ads-page-heading">
                        <?php esc_html_e( 'Profesyonel Google Ads ve', 'seogezegeni' ); ?>
                        <span><?php esc_html_e( 'Meta Reklam Yönetimi', 'seogezegeni' ); ?></span>
                    </h1>
                    <p><?php esc_html_e( 'Google Ads, Instagram ve Facebook reklam yatırımlarınızı hedef kitle, dönüşüm, ROAS, kreatif test ve sürekli optimizasyon odağıyla yönetiyoruz.', 'seogezegeni' ); ?></p>
                    <div class="sg-seo-hero-actions">
                        <a href="<?php echo esc_url( home_url( '/iletisim/' ) ); ?>" class="sg-btn sg-btn-primary">
                            <i class="fa-solid fa-paper-plane" aria-hidden="true"></i>
                            <?php esc_html_e( 'Reklam Planı Al', 'seogezegeni' ); ?>
                        </a>
                        <a href="#reklam-sureci" class="sg-btn sg-btn-outline">
                            <i class="fa-solid fa-route" aria-hidden="true"></i>
                            <?php esc_html_e( 'Süreci İncele', 'seogezegeni' ); ?>
                        </a>
                    </div>
                </div>

                <div class="sg-seo-hero-visual sg-ads-visual" data-sg-reveal="right" aria-hidden="true">
                    <div class="sg-ads-stack">
                        <div class="sg-ads-platform is-google"><i class="fa-brands fa-google"></i><strong>Google Ads</strong><span>Search, PMax, Shopping</span></div>
                        <div class="sg-ads-platform is-meta"><i class="fa-brands fa-meta"></i><strong>Meta Ads</strong><span>Instagram, Facebook, Reels</span></div>
                    </div>
                    <div class="sg-seo-dashboard sg-ads-dashboard">
                        <div class="sg-seo-searchbar"><i class="fa-solid fa-bullseye"></i><span>performance ads</span></div>
                        <div class="sg-seo-result is-active"><strong>ROAS</strong><span>Yatırım getirisi</span><em>+%58</em></div>
                        <div class="sg-seo-result"><strong>CPA</strong><span>Müşteri edinme maliyeti</span><em>-%32</em></div>
                        <div class="sg-seo-chart"><span style="height:52%"></span><span style="height:64%"></span><span style="height:76%"></span><span style="height:84%"></span><span style="height:94%"></span></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="sg-breadcrumb-bar">
        <div class="container"><?php seogezegeni_breadcrumb(); ?></div>
    </div>

    <section class="sg-seo-intro section-pad light-section">
        <div class="container">
            <div class="sg-seo-split">
                <div data-sg-reveal="left">
                    <?php
                    sg_section_head(
                        __( 'Reklam Yönetimi', 'seogezegeni' ),
                        __( 'Google Ads ve Meta Reklam Yönetimi <span class="text-accent">Nedir?</span>', 'seogezegeni' ),
                        '',
                        false,
                        true
                    );
                    ?>
                    <div class="sg-seo-richtext">
                        <p><?php esc_html_e( 'Google Ads ve Meta reklam yönetimi; işletmelerin dijital reklam yatırımlarını planlama, hedefleme, yayınlama, analiz etme ve sürekli optimize etme süreçlerinin tamamını kapsayan profesyonel performans pazarlaması hizmetidir.', 'seogezegeni' ); ?></p>
                        <p><?php esc_html_e( 'Başarılı reklam yönetimi yalnızca kampanya oluşturmak değildir. Hedef kitlenin analiz edilmesi, kullanıcı niyetinin doğru anlaşılması, reklam kanallarının belirlenmesi, dönüşüm altyapısının kurulması ve verilerin düzenli olarak değerlendirilmesi gerekir.', 'seogezegeni' ); ?></p>
                        <p><?php esc_html_e( 'SEO Gezegeni olarak reklam yönetimini teknik panel işlemleri olarak değil, işletmenin büyüme hedeflerini destekleyen performans odaklı bir pazarlama sistemi olarak ele alıyoruz.', 'seogezegeni' ); ?></p>
                    </div>
                </div>
                <aside class="sg-seo-stat-panel" data-sg-reveal="right">
                    <?php foreach ( $ad_stats as $stat ) : ?>
                        <div class="sg-seo-stat">
                            <strong><?php echo esc_html( $stat['value'] ); ?></strong>
                            <span><?php echo esc_html( $stat['label'] ); ?></span>
                        </div>
                    <?php endforeach; ?>
                </aside>
            </div>
        </div>
    </section>

    <section class="sg-seo-benefits section-pad soft-section">
        <div class="container">
            <?php
            sg_section_head(
                __( 'Avantajlar', 'seogezegeni' ),
                __( 'Google Ads ve Meta Reklamlarının İşletmelere <span class="text-accent">Sağladığı Avantajlar</span>', 'seogezegeni' ),
                __( 'Doğru planlanan kampanyalar yalnızca kısa vadeli satış hedeflerini değil, uzun vadeli marka büyümesini de destekler.', 'seogezegeni' ),
                true
            );
            ?>
            <div class="sg-seo-benefit-grid">
                <?php foreach ( $benefits as $index => $benefit ) : ?>
                    <article class="sg-seo-mini-card" data-sg-reveal data-delay="<?php echo esc_attr( ( $index % 3 ) * 120 ); ?>">
                        <i class="<?php echo esc_attr( $benefit[0] ); ?>" aria-hidden="true"></i>
                        <h3><?php echo esc_html( $benefit[1] ); ?></h3>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="sg-seo-components section-pad dark-section">
        <div class="container">
            <?php
            sg_section_head(
                __( 'Google Ads', 'seogezegeni' ),
                __( 'Google Ads Hizmetlerimiz', 'seogezegeni' ),
                __( 'Kampanya kurulumundan dönüşüm takibine kadar Google reklamlarını işletmenize gerçek değer üretecek şekilde yönetiyoruz.', 'seogezegeni' ),
                true
            );
            ?>
            <div class="sg-seo-component-grid">
                <?php foreach ( $google_services as $index => $service ) : ?>
                    <article class="sg-seo-component-card" data-sg-reveal data-delay="<?php echo esc_attr( ( $index % 3 ) * 120 ); ?>">
                        <span class="sg-seo-component-icon" aria-hidden="true"><i class="<?php echo esc_attr( $service[0] ); ?>"></i></span>
                        <h3><?php echo esc_html( $service[1] ); ?></h3>
                        <p><?php echo esc_html( $service[2] ); ?></p>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="sg-seo-types section-pad light-section">
        <div class="container">
            <?php
            sg_section_head(
                __( 'Meta Reklamları', 'seogezegeni' ),
                __( 'Meta Reklam Hizmetlerimiz', 'seogezegeni' ),
                __( 'Instagram ve Facebook reklamlarını hedef kitle, kreatif, reklam metni ve performans geliştirme çalışmalarıyla birlikte yürütüyoruz.', 'seogezegeni' ),
                true,
                true
            );
            ?>
            <div class="sg-seo-type-grid">
                <?php foreach ( $meta_services as $index => $service ) : ?>
                    <article class="sg-seo-type-card" data-sg-reveal data-delay="<?php echo esc_attr( ( $index % 3 ) * 120 ); ?>">
                        <i class="<?php echo esc_attr( $service[0] ); ?>" aria-hidden="true"></i>
                        <h3><?php echo esc_html( $service[1] ); ?></h3>
                        <p><?php echo esc_html( $service[2] ); ?></p>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="sg-digital-strategy section-pad soft-section">
        <div class="container">
            <?php
            sg_section_head(
                __( 'Strateji', 'seogezegeni' ),
                __( 'Başarılı Bir Reklam Stratejisi <span class="text-accent">Nasıl Oluşturulur?</span>', 'seogezegeni' ),
                __( 'Profesyonel reklam yönetimi kampanya oluşturmakla başlamaz; analiz, planlama, test ve sürekli optimizasyonla değer üretir.', 'seogezegeni' ),
                true
            );
            ?>
            <div class="sg-seo-type-grid">
                <?php foreach ( $strategy_cards as $index => $card ) : ?>
                    <article class="sg-seo-type-card" data-sg-reveal data-delay="<?php echo esc_attr( ( $index % 3 ) * 120 ); ?>">
                        <i class="<?php echo esc_attr( $card[0] ); ?>" aria-hidden="true"></i>
                        <h3><?php echo esc_html( $card[1] ); ?></h3>
                        <p><?php echo esc_html( $card[2] ); ?></p>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="sg-seo-components section-pad dark-section">
        <div class="container">
            <?php
            sg_section_head(
                __( 'Ölçümleme', 'seogezegeni' ),
                __( 'Veriye Dayalı <span class="text-accent">Reklam Optimizasyonu</span>', 'seogezegeni' ),
                __( 'Reklam performansını doğru okuyabilmek için ölçüm altyapısı eksiksiz kurulmalı ve tüm kararlar verilerle desteklenmelidir.', 'seogezegeni' ),
                true
            );
            ?>
            <div class="sg-seo-component-grid">
                <?php foreach ( $measurement_cards as $index => $card ) : ?>
                    <article class="sg-seo-component-card" data-sg-reveal data-delay="<?php echo esc_attr( ( $index % 3 ) * 120 ); ?>">
                        <span class="sg-seo-component-icon" aria-hidden="true"><i class="<?php echo esc_attr( $card[0] ); ?>"></i></span>
                        <h3><?php echo esc_html( $card[1] ); ?></h3>
                        <p><?php echo esc_html( $card[2] ); ?></p>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="sg-seo-types section-pad light-section">
        <div class="container">
            <?php
            sg_section_head(
                __( 'Kimler İçin Uygun?', 'seogezegeni' ),
                __( 'Hangi İşletmeler Google Ads ve Meta Reklam Yönetimine <span class="text-accent">İhtiyaç Duyar?</span>', 'seogezegeni' ),
                __( 'Her sektörün müşteri yolculuğu ve dönüşüm hedefi farklıdır. Kampanya yapıları işletmenin ticari hedeflerine göre planlanmalıdır.', 'seogezegeni' ),
                true,
                true
            );
            ?>
            <div class="sg-ads-business-grid">
                <?php foreach ( $business_types as $index => $type ) : ?>
                    <article class="sg-seo-type-card" data-sg-reveal data-delay="<?php echo esc_attr( ( $index % 4 ) * 100 ); ?>">
                        <i class="<?php echo esc_attr( $type[0] ); ?>" aria-hidden="true"></i>
                        <h3><?php echo esc_html( $type[1] ); ?></h3>
                        <p><?php echo esc_html( $type[2] ); ?></p>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="sg-seo-measure section-pad soft-section">
        <div class="container">
            <?php
            sg_section_head(
                __( 'Performans', 'seogezegeni' ),
                __( 'Reklam Başarısı <span class="text-accent">Nasıl Ölçülür?</span>', 'seogezegeni' ),
                __( 'Başarı yalnızca tıklama sayısı veya gösterim miktarıyla değil, reklam yatırımlarının işletme hedeflerine katkısıyla ölçülür.', 'seogezegeni' ),
                true
            );
            ?>
            <div class="sg-seo-metric-grid">
                <?php foreach ( $metrics as $metric ) : ?>
                    <article class="sg-seo-metric-card" data-sg-reveal>
                        <i class="<?php echo esc_attr( $metric[0] ); ?>" aria-hidden="true"></i>
                        <h3><?php echo esc_html( $metric[1] ); ?></h3>
                        <p><?php echo esc_html( $metric[2] ); ?></p>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section id="reklam-sureci" class="sg-seo-process section-pad light-section">
        <div class="container">
            <?php
            sg_section_head(
                __( 'Süreç', 'seogezegeni' ),
                __( 'SEO Gezegeni ile Google Ads ve Meta Reklam Yönetimi <span class="text-accent">Sürecimiz</span>', 'seogezegeni' ),
                __( 'Standart çözümler yerine işletmeye özel, ölçülebilir ve sürekli gelişen kampanya yapıları kuruyoruz.', 'seogezegeni' ),
                true,
                true
            );
            ?>
            <div class="sg-seo-timeline">
                <?php foreach ( $process_steps as $index => $step ) : ?>
                    <article class="sg-seo-step" data-sg-reveal>
                        <span><?php echo esc_html( sprintf( '%02d', $index + 1 ) ); ?></span>
                        <div>
                            <h3><?php echo esc_html( $step[0] ); ?></h3>
                            <p><?php echo esc_html( $step[1] ); ?></p>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="sg-seo-faq section-pad dark-section">
        <div class="container">
            <?php
            sg_section_head(
                __( 'Sık Sorulan Sorular', 'seogezegeni' ),
                __( 'Google Ads ve Meta Reklamları Hakkında <span class="text-accent">Merak Edilenler</span>', 'seogezegeni' ),
                '',
                true
            );
            ?>
            <div class="sg-seo-faq-grid">
                <?php foreach ( $faqs as $faq ) : ?>
                    <details class="sg-seo-faq-item" data-sg-reveal>
                        <summary><?php echo esc_html( $faq[0] ); ?></summary>
                        <p><?php echo esc_html( $faq[1] ); ?></p>
                    </details>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="sg-seo-final-cta section-pad light-section">
        <div class="container">
            <div class="sg-seo-cta-panel" data-sg-reveal>
                <span class="sg-hero-badge">
                    <i class="fa-solid fa-rocket" aria-hidden="true"></i>
                    <?php esc_html_e( 'Performans Odaklı Reklam Yönetimi', 'seogezegeni' ); ?>
                </span>
                <h2><?php esc_html_e( 'Performans Pazarlamasında Doğru Strateji ile Sürdürülebilir Büyüme', 'seogezegeni' ); ?></h2>
                <p><?php esc_html_e( 'Google Ads ve Meta reklam yönetimini yalnızca görünürlük sağlayan kampanyalar oluşturmak değil; doğru hedef kitleye ulaşan, reklam bütçesini verimli kullanan ve işletme hedeflerine katkı sağlayan sürdürülebilir bir performans sistemi olarak kurguluyoruz.', 'seogezegeni' ); ?></p>
                <a href="<?php echo esc_url( home_url( '/iletisim/' ) ); ?>" class="sg-btn sg-btn-primary">
                    <i class="fa-solid fa-paper-plane" aria-hidden="true"></i>
                    <?php esc_html_e( 'Bizimle İletişime Geçin', 'seogezegeni' ); ?>
                </a>
            </div>
        </div>
    </section>

</main>

<?php
get_template_part( 'template-parts/pre-footer-contact' );
get_footer();
