<?php
/**
 * Template Name: 360 Dijital Pazarlama Sayfasi
 * Template Post Type: page
 *
 * 360 derece dijital pazarlama hizmet sayfasi ozel sablonu.
 */

defined( 'ABSPATH' ) || exit;

get_header();

if ( have_posts() ) {
    the_post();
}

$digital_stats = [
    [ 'value' => '360°', 'label' => __( 'Tüm kanalları tek stratejide birleştiren yaklaşım', 'seogezegeni' ) ],
    [ 'value' => '14+',  'label' => __( 'Dijital pazarlama hizmet alanı', 'seogezegeni' ) ],
    [ 'value' => '5',    'label' => __( 'Analizden optimizasyona çalışma adımı', 'seogezegeni' ) ],
];

$benefits = [
    [ 'fa-solid fa-bullhorn', __( 'Marka bilinirliğini artırır.', 'seogezegeni' ) ],
    [ 'fa-solid fa-user-check', __( 'Daha nitelikli müşteri adayları oluşturur.', 'seogezegeni' ) ],
    [ 'fa-solid fa-chart-pie', __( 'Satış süreçlerini destekler.', 'seogezegeni' ) ],
    [ 'fa-solid fa-coins', __( 'Reklam yatırımlarını optimize eder.', 'seogezegeni' ) ],
    [ 'fa-solid fa-repeat', __( 'Müşteri sadakatini güçlendirir.', 'seogezegeni' ) ],
    [ 'fa-solid fa-scale-balanced', __( 'Organik ve ücretli kanallar arasında denge kurar.', 'seogezegeni' ) ],
];

$service_components = [
    [ 'fa-solid fa-magnifying-glass-chart', __( 'SEO ve Organik Büyüme', 'seogezegeni' ), __( 'Teknik altyapı, içerik kalitesi, kullanıcı deneyimi, semantik yapı ve marka otoritesi birlikte değerlendirilerek uzun vadeli organik büyüme planlanır.', 'seogezegeni' ) ],
    [ 'fa-brands fa-google', __( 'Google Ads Yönetimi', 'seogezegeni' ), __( 'Arama Ağı, Görüntülü Reklam Ağı, YouTube, Performance Max ve alışveriş kampanyaları hedefleme, bütçe, dönüşüm ve ROAS odağıyla yönetilir.', 'seogezegeni' ) ],
    [ 'fa-solid fa-rectangle-ad', __( 'Performans Pazarlaması', 'seogezegeni' ), __( 'Reklam harcamalarının satış, teklif, form doldurma ve diğer dönüşüm hedeflerine etkisi veri analizi, A/B testleri ve optimizasyonlarla izlenir.', 'seogezegeni' ) ],
    [ 'fa-solid fa-robot', __( 'Programatik Reklamcılık', 'seogezegeni' ), __( 'Yapay zeka destekli teklif sistemleri, kullanıcı davranışları ve gerçek zamanlı verilerle doğru kullanıcıya doğru zamanda reklam gösterimi hedeflenir.', 'seogezegeni' ) ],
    [ 'fa-solid fa-cart-shopping', __( 'E-Ticaret Dijital Pazarlaması', 'seogezegeni' ), __( 'Kategori, ürün, alışveriş reklamları, ürün feed optimizasyonu, remarketing, kampanya kurgusu ve müşteri yaşam boyu değeri birlikte ele alınır.', 'seogezegeni' ) ],
    [ 'fa-solid fa-pen-nib', __( 'İçerik Pazarlaması', 'seogezegeni' ), __( 'Doğru konu planlaması, arama niyeti analizi, konu kümeleri, iç bağlantı stratejisi ve kullanıcı yolculuğuna uygun içerik üretimi planlanır.', 'seogezegeni' ) ],
    [ 'fa-solid fa-star-half-stroke', __( 'Online İtibar Yönetimi', 'seogezegeni' ), __( 'Google yorumları, forumlar, haber siteleri, şikayet platformları ve sosyal medya paylaşımları marka algısını güçlendirecek şekilde yönetilir.', 'seogezegeni' ) ],
    [ 'fa-solid fa-envelope-open-text', __( 'E-Posta ve SMS Pazarlama', 'seogezegeni' ), __( 'Kampanya duyuruları, yeniden etkileşim, müşteri segmentasyonu, otomatik bilgilendirme ve satış sonrası iletişim süreçleri kurgulanır.', 'seogezegeni' ) ],
    [ 'fa-solid fa-gauge-high', __( 'CRO Optimizasyonu', 'seogezegeni' ), __( 'Form tasarımları, CTA yerleşimleri, sayfa hızı, mobil deneyim, ısı haritaları, oturum kayıtları ve A/B testleriyle dönüşüm oranları artırılır.', 'seogezegeni' ) ],
];

$strategy_steps = [
    [ __( 'Mevcut Durum Analizi', 'seogezegeni' ), __( 'Web siteniz, dijital varlıklarınız, reklam hesaplarınız, rakipleriniz ve hedef kitleniz detaylı olarak analiz edilir.', 'seogezegeni' ) ],
    [ __( 'Stratejik Yol Haritası', 'seogezegeni' ), __( 'Analiz sonuçlarına göre hedefler, kullanılacak kanallar, öncelikler ve performans hedefleri belirlenir.', 'seogezegeni' ) ],
    [ __( 'Uygulama Süreci', 'seogezegeni' ), __( 'SEO, reklam yönetimi, içerik pazarlaması, CRO ve diğer dijital çalışmalar plan doğrultusunda uygulanır.', 'seogezegeni' ) ],
    [ __( 'Ölçümleme ve Raporlama', 'seogezegeni' ), __( 'Kampanyaların performansı düzenli analiz edilir; elde edilen verilerle hangi aksiyonların değer ürettiği netleştirilir.', 'seogezegeni' ) ],
    [ __( 'Sürekli Gelişim', 'seogezegeni' ), __( 'Platform değişimleri, kullanıcı davranışları ve rekabet koşulları izlenerek strateji düzenli olarak güncellenir.', 'seogezegeni' ) ],
];

$strategy_cards = [
    [ 'fa-solid fa-users-viewfinder', __( 'Hedef Kitle Analizi', 'seogezegeni' ), __( 'Kullanıcıların arama davranışları, satın alma niyetleri, ilgi alanları, kullandıkları cihazlar, ziyaret ettikleri sayfalar ve dönüşüm yolları incelenir.', 'seogezegeni' ) ],
    [ 'fa-solid fa-user-secret', __( 'Rakip Analizi', 'seogezegeni' ), __( 'Organik görünürlük, reklam stratejileri, anahtar kelime dağılımı, içerik üretimi, backlink profili ve sosyal medya performansı birlikte değerlendirilir.', 'seogezegeni' ) ],
    [ 'fa-solid fa-diagram-project', __( 'Çok Kanallı Yaklaşım', 'seogezegeni' ), __( 'Kullanıcı Google’da araştırma yapabilir, sosyal medya hesabınızı inceleyebilir, yorumları okuyabilir ve yeniden pazarlama reklamıyla karar verebilir.', 'seogezegeni' ) ],
    [ 'fa-solid fa-brain', __( 'Yapay Zeka Destekli Pazarlama', 'seogezegeni' ), __( 'Veri analizi, içerik planlaması, kampanya optimizasyonu ve kullanıcı segmentasyonu yapay zeka destekli sistemlerle güçlendirilir.', 'seogezegeni' ) ],
    [ 'fa-solid fa-seedling', __( 'Growth Marketing', 'seogezegeni' ), __( 'Kullanıcı deneyimi, dönüşüm oranları, müşteri sadakati, tekrar satın alma ve tavsiye edilme oranı sürdürülebilir büyüme odağıyla optimize edilir.', 'seogezegeni' ) ],
    [ 'fa-solid fa-gears', __( 'Marketing Automation', 'seogezegeni' ), __( 'Otomatik e-posta senaryoları, terk edilen sepet hatırlatmaları, CRM entegrasyonları ve yeniden pazarlama süreçleri verimli hale getirilir.', 'seogezegeni' ) ],
];

$business_types = [
    [ 'fa-solid fa-building', __( 'Kurumsal Firmalar', 'seogezegeni' ), __( 'Marka güveni, kurumsal itibar, SEO, içerik pazarlaması, LinkedIn reklamları, Google Ads ve web sitesi performansı birlikte değerlendirilir.', 'seogezegeni' ) ],
    [ 'fa-solid fa-store', __( 'E-Ticaret Markaları', 'seogezegeni' ), __( 'Ürün görünürlüğü, reklam maliyetleri, satış performansı, ürün feed optimizasyonu, remarketing ve dönüşüm oranı optimizasyonu birlikte yürütülür.', 'seogezegeni' ) ],
    [ 'fa-solid fa-heart-pulse', __( 'Sağlık Sektörü', 'seogezegeni' ), __( 'Güven, doğru bilgi, görünürlük, güçlü dijital itibar ve etik pazarlama yaklaşımı uzun vadeli başarı için kritik rol oynar.', 'seogezegeni' ) ],
    [ 'fa-solid fa-scale-balanced', __( 'Hukuk Büroları', 'seogezegeni' ), __( 'Uzmanlık alanlarını güven oluşturan içeriklerle anlatan, yerel görünürlüğü ve doğru kullanıcıya ulaşmayı hedefleyen stratejiler geliştirilir.', 'seogezegeni' ) ],
    [ 'fa-solid fa-industry', __( 'Üretici ve B2B Firmalar', 'seogezegeni' ), __( 'Teknik içerik üretimi, sektör otoritesi, lead kazanımı ve uluslararası görünürlük uzun satın alma süreçlerine göre planlanır.', 'seogezegeni' ) ],
];

$metrics = [
    [ 'fa-solid fa-chart-line', __( 'Organik Trafik Artışı', 'seogezegeni' ), __( 'SEO ve içerik çalışmalarının büyümeye katkısı takip edilir.', 'seogezegeni' ) ],
    [ 'fa-solid fa-bullseye', __( 'Dönüşüm Oranı', 'seogezegeni' ), __( 'Reklam, form, satış ve teklif süreçlerinin verimliliği ölçülür.', 'seogezegeni' ) ],
    [ 'fa-solid fa-sack-dollar', __( 'ROAS ve ROI', 'seogezegeni' ), __( 'Reklam harcamasının ve toplam yatırımın ticari geri dönüşü analiz edilir.', 'seogezegeni' ) ],
    [ 'fa-solid fa-user-plus', __( 'Müşteri Edinme Maliyeti', 'seogezegeni' ), __( 'Yeni müşteri kazanımının bütçeye etkisi düzenli olarak değerlendirilir.', 'seogezegeni' ) ],
    [ 'fa-solid fa-infinity', __( 'Müşteri Yaşam Boyu Değeri', 'seogezegeni' ), __( 'Tekrar satın alma ve uzun vadeli müşteri değeri izlenir.', 'seogezegeni' ) ],
    [ 'fa-solid fa-comments', __( 'Marka Görünürlüğü', 'seogezegeni' ), __( 'Arama, sosyal medya, yorumlar ve içerik kanallarındaki marka algısı ölçülür.', 'seogezegeni' ) ],
    [ 'fa-solid fa-hand-pointer', __( 'Kullanıcı Etkileşimi', 'seogezegeni' ), __( 'Tıklama oranı, hemen çıkma oranı ve ortalama etkileşim süresi yorumlanır.', 'seogezegeni' ) ],
    [ 'fa-solid fa-chart-simple', __( 'Satış Performansı', 'seogezegeni' ), __( 'Satışa dönüşen kullanıcı oranı ve potansiyel müşteri sayısı takip edilir.', 'seogezegeni' ) ],
];

$faqs = [
    [ __( '360° dijital pazarlama nedir?', 'seogezegeni' ), __( 'SEO, reklam yönetimi, içerik pazarlaması, sosyal medya, e-posta pazarlaması ve veri analitiği gibi farklı kanalların tek bir strateji altında planlanmasıdır.', 'seogezegeni' ) ],
    [ __( 'Dijital pazarlama ajansı ne yapar?', 'seogezegeni' ), __( 'Markanın hedef kitlesine ulaşmasını sağlayacak stratejileri geliştirir, dijital kanalları yönetir, performansı analiz eder ve pazarlama yatırımlarının daha verimli kullanılmasına yardımcı olur.', 'seogezegeni' ) ],
    [ __( 'SEO ve Google Ads birlikte kullanılmalı mı?', 'seogezegeni' ), __( 'Çoğu projede bu iki kanal birbirini tamamlar. Google Ads kısa vadede görünürlük sağlarken, SEO uzun vadeli organik büyümeyi destekler.', 'seogezegeni' ) ],
    [ __( 'Dijital pazarlama bütçesi nasıl belirlenir?', 'seogezegeni' ), __( 'Bütçe; sektör, rekabet seviyesi, büyüme hedefleri, kullanılacak kanallar ve işletmenin önceliklerine göre planlanmalıdır.', 'seogezegeni' ) ],
    [ __( 'CRO neden önemlidir?', 'seogezegeni' ), __( 'CRO, mevcut ziyaretçilerin daha yüksek oranda müşteriye dönüşmesini hedefler. Böylece ek reklam bütçesi oluşturmadan mevcut trafik daha verimli kullanılabilir.', 'seogezegeni' ) ],
    [ __( 'Dijital pazarlamada veri analitiği neden gereklidir?', 'seogezegeni' ), __( 'Veri analitiği sayesinde kampanya performansı ölçülebilir, kullanıcı davranışları analiz edilebilir ve alınacak kararlar somut verilerle desteklenir.', 'seogezegeni' ) ],
    [ __( 'Yapay zeka dijital pazarlamayı nasıl etkiliyor?', 'seogezegeni' ), __( 'Yapay zeka; hedefleme, teklif stratejileri, içerik önerileri, segmentasyon ve performans analizinde birçok süreci destekler.', 'seogezegeni' ) ],
    [ __( 'Remarketing nedir?', 'seogezegeni' ), __( 'Web sitenizi daha önce ziyaret eden kullanıcılara yeniden ulaşmayı sağlayan dijital reklam stratejisidir.', 'seogezegeni' ) ],
    [ __( 'Dijital pazarlama performansı hangi araçlarla ölçülür?', 'seogezegeni' ), __( 'Google Analytics 4, Google Search Console, reklam platformlarının raporlama araçları ve Looker Studio gibi çözümlerle performans değerlendirilebilir.', 'seogezegeni' ) ],
    [ __( 'Profesyonel dijital pazarlama ajansı ile çalışmanın avantajları nelerdir?', 'seogezegeni' ), __( 'Farklı dijital kanalları tek merkezden yönetmek, tutarlı strateji oluşturmak, güncel platform bilgisiyle ilerlemek ve sürekli optimizasyon yapmak yatırımların daha verimli kullanılmasına katkı sağlar.', 'seogezegeni' ) ],
];
?>

<main id="sg-main" class="sg-seo-page sg-digital-page" role="main">

    <section class="sg-page-hero sg-seo-hero sg-digital-hero" aria-labelledby="digital-page-heading">
        <div class="container">
            <div class="sg-seo-hero-grid">
                <div class="sg-seo-hero-copy" data-sg-reveal="left">
                    <span class="sg-hero-badge">
                        <i class="fa-solid fa-chart-pie" aria-hidden="true"></i>
                        <?php esc_html_e( '360° Dijital Pazarlama Ajansı', 'seogezegeni' ); ?>
                    </span>
                    <h1 id="digital-page-heading">
                        <?php esc_html_e( '360° Dijital Pazarlama ile', 'seogezegeni' ); ?>
                        <span><?php esc_html_e( 'Ölçülebilir Dijital Büyüme', 'seogezegeni' ); ?></span>
                    </h1>
                    <p>
                        <?php esc_html_e( 'SEO, performans pazarlaması, Google Ads, sosyal medya, içerik pazarlaması, dönüşüm optimizasyonu ve veri analitiğini tek bir büyüme stratejisinde birleştiriyoruz.', 'seogezegeni' ); ?>
                    </p>
                    <div class="sg-seo-hero-actions">
                        <a href="<?php echo esc_url( home_url( '/iletisim/' ) ); ?>" class="sg-btn sg-btn-primary">
                            <i class="fa-solid fa-paper-plane" aria-hidden="true"></i>
                            <?php esc_html_e( 'Dijital Büyüme Planı Al', 'seogezegeni' ); ?>
                        </a>
                        <a href="#dijital-surec" class="sg-btn sg-btn-outline">
                            <i class="fa-solid fa-route" aria-hidden="true"></i>
                            <?php esc_html_e( 'Süreci İncele', 'seogezegeni' ); ?>
                        </a>
                    </div>
                </div>

                <div class="sg-seo-hero-visual sg-digital-visual" data-sg-reveal="right" aria-hidden="true">
                    <div class="sg-digital-orbit">
                        <span><i class="fa-brands fa-google"></i></span>
                        <span><i class="fa-brands fa-instagram"></i></span>
                        <span><i class="fa-solid fa-envelope"></i></span>
                        <span><i class="fa-solid fa-cart-shopping"></i></span>
                        <span><i class="fa-solid fa-chart-line"></i></span>
                    </div>
                    <div class="sg-digital-hub">
                        <i class="fa-solid fa-chart-pie"></i>
                        <strong>360°</strong>
                        <span><?php esc_html_e( 'Tek strateji, çok kanal', 'seogezegeni' ); ?></span>
                    </div>
                    <div class="sg-seo-dashboard sg-digital-dashboard">
                        <div class="sg-seo-searchbar"><i class="fa-solid fa-layer-group"></i><span>omnichannel growth</span></div>
                        <div class="sg-seo-result is-active"><strong>SEO</strong><span>Organik büyüme</span><em>+%72</em></div>
                        <div class="sg-seo-result"><strong>ADS</strong><span>Reklam verimliliği</span><em>+%48</em></div>
                        <div class="sg-seo-chart"><span style="height:46%"></span><span style="height:62%"></span><span style="height:74%"></span><span style="height:88%"></span><span style="height:96%"></span></div>
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
                        __( '360° Dijital Pazarlama Nedir?', 'seogezegeni' ),
                        __( 'Tüm Kanalları <span class="text-accent">Ortak Büyüme Stratejisinde</span> Birleştirin', 'seogezegeni' ),
                        '',
                        false,
                        true
                    );
                    ?>
                    <div class="sg-seo-richtext">
                        <p><?php esc_html_e( '360° dijital pazarlama, markanın dijital dünyadaki tüm temas noktalarını tek bir strateji altında yöneten bütüncül pazarlama yaklaşımıdır. SEO, performans reklamları, sosyal medya, içerik üretimi, e-posta pazarlaması, dönüşüm optimizasyonu ve analiz süreçleri birbirinden bağımsız değil, aynı hedef doğrultusunda çalışan sistemler olarak değerlendirilir.', 'seogezegeni' ); ?></p>
                        <p><?php esc_html_e( 'Günümüzde başarı yalnızca daha fazla ziyaretçi elde etmekle sınırlı değildir. Asıl amaç doğru kullanıcıya ulaşmak, marka bilinirliğini artırmak, dönüşüm oranlarını yükseltmek ve yatırım getirisini sürekli iyileştirmektir.', 'seogezegeni' ); ?></p>
                        <p><?php esc_html_e( 'SEO Gezegeni olarak dijital pazarlamayı yalnızca reklam yönetimi olarak görmüyoruz. Dijital varlıkları analiz eden, hedef kitleyi doğru tanımlayan, kullanıcı yolculuğunu optimize eden ve ölçülebilir ticari sonuçlar üreten sürdürülebilir büyüme stratejileri geliştiriyoruz.', 'seogezegeni' ); ?></p>
                    </div>
                </div>
                <aside class="sg-seo-stat-panel" data-sg-reveal="right">
                    <?php foreach ( $digital_stats as $stat ) : ?>
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
                __( 'Neden Dijital Pazarlama?', 'seogezegeni' ),
                __( 'Dijital Pazarlama Neden İşletmeler İçin <span class="text-accent">Vazgeçilmezdir?</span>', 'seogezegeni' ),
                __( 'Doğru planlanmış bir dijital pazarlama stratejisi, güven oluşturan marka deneyimi ve ölçülebilir büyüme sağlar.', 'seogezegeni' ),
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
                __( 'Hizmet Kapsamı', 'seogezegeni' ),
                __( 'Dijital Pazarlama Hizmetleri <span class="text-accent">Neleri Kapsar?</span>', 'seogezegeni' ),
                __( 'Başarılı bir strateji, çok uzmanlık alanının koordineli biçimde yönetilmesini gerektirir.', 'seogezegeni' ),
                true
            );
            ?>
            <div class="sg-seo-component-grid">
                <?php foreach ( $service_components as $index => $component ) : ?>
                    <article class="sg-seo-component-card" data-sg-reveal data-delay="<?php echo esc_attr( ( $index % 3 ) * 120 ); ?>">
                        <span class="sg-seo-component-icon" aria-hidden="true"><i class="<?php echo esc_attr( $component[0] ); ?>"></i></span>
                        <h3><?php echo esc_html( $component[1] ); ?></h3>
                        <p><?php echo esc_html( $component[2] ); ?></p>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="sg-digital-strategy section-pad light-section">
        <div class="container">
            <?php
            sg_section_head(
                __( 'Strateji', 'seogezegeni' ),
                __( 'Veriye Dayalı Dijital Pazarlama Stratejisi <span class="text-accent">Nasıl Oluşturulur?</span>', 'seogezegeni' ),
                __( 'Başarılı kampanyalar rastgele değil; doğru veri, hedef kitle analizi, rakip incelemesi ve sürekli optimizasyonla büyür.', 'seogezegeni' ),
                true,
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

    <section id="dijital-surec" class="sg-seo-process section-pad soft-section">
        <div class="container">
            <?php
            sg_section_head(
                __( 'Çalışma Süreci', 'seogezegeni' ),
                __( 'SEO Gezegeni ile <span class="text-accent">Çalışma Süreci</span>', 'seogezegeni' ),
                __( 'Veriye dayalı kararlarla ilerleyen ve düzenli optimizasyonlarla gelişen bir iş ortaklığı kuruyoruz.', 'seogezegeni' ),
                true
            );
            ?>
            <div class="sg-seo-timeline">
                <?php foreach ( $strategy_steps as $index => $step ) : ?>
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

    <section class="sg-seo-types section-pad dark-section">
        <div class="container">
            <?php
            sg_section_head(
                __( 'Kimler İçin Uygun?', 'seogezegeni' ),
                __( '360° Dijital Pazarlama <span class="text-accent">Hangi İşletmeler İçin Uygundur?</span>', 'seogezegeni' ),
                __( 'Her sektörün hedef kitlesi, rekabet koşulları ve satın alma süreci farklıdır. Bu nedenle strateji işletmeye özel planlanır.', 'seogezegeni' ),
                true
            );
            ?>
            <div class="sg-digital-business-grid">
                <?php foreach ( $business_types as $index => $type ) : ?>
                    <article class="sg-seo-type-card" data-sg-reveal data-delay="<?php echo esc_attr( ( $index % 3 ) * 120 ); ?>">
                        <i class="<?php echo esc_attr( $type[0] ); ?>" aria-hidden="true"></i>
                        <h3><?php echo esc_html( $type[1] ); ?></h3>
                        <p><?php echo esc_html( $type[2] ); ?></p>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="sg-seo-measure section-pad light-section">
        <div class="container">
            <?php
            sg_section_head(
                __( 'Performans', 'seogezegeni' ),
                __( 'Dijital Pazarlamada Başarı <span class="text-accent">Nasıl Ölçülür?</span>', 'seogezegeni' ),
                __( 'Gerçek başarı yalnızca trafiğin artmasıyla değil, yapılan yatırımların işletme hedeflerine katkısıyla ölçülür.', 'seogezegeni' ),
                true,
                true
            );
            ?>
            <div class="sg-seo-metric-grid sg-digital-metric-grid">
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

    <section class="sg-seo-faq section-pad dark-section">
        <div class="container">
            <?php
            sg_section_head(
                __( 'Sık Sorulan Sorular', 'seogezegeni' ),
                __( 'Dijital Pazarlama Hakkında <span class="text-accent">Merak Edilenler</span>', 'seogezegeni' ),
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
                    <?php esc_html_e( 'Bütüncül Dijital Büyüme', 'seogezegeni' ); ?>
                </span>
                <h2><?php esc_html_e( 'Dijital Pazarlamada Sürdürülebilir Büyüme İçin Doğru Stratejiyle İlerleyin', 'seogezegeni' ); ?></h2>
                <p><?php esc_html_e( 'SEO, performans reklamları, içerik pazarlaması, dönüşüm optimizasyonu ve veri analitiği birlikte planlandığında pazarlama yatırımları daha verimli kullanılabilir ve işletmeler vadeli, ölçülebilir büyüme elde edebilir.', 'seogezegeni' ); ?></p>
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
