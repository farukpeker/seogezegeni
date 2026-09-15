<?php
/**
 * Template Name: SEO Hizmeti Sayfasi
 * Template Post Type: page
 *
 * SEO hizmet sayfasi ozel sablonu.
 */

defined( 'ABSPATH' ) || exit;

get_header();

if ( have_posts() ) {
    the_post();
}

$seo_stats = [
    [ 'value' => '360°', 'label' => __( 'Bütüncül SEO yaklaşımı', 'seogezegeni' ) ],
    [ 'value' => '10+',  'label' => __( 'Temel optimizasyon alanı', 'seogezegeni' ) ],
    [ 'value' => '5',    'label' => __( 'Süreç adımıyla net yol haritası', 'seogezegeni' ) ],
];

$service_components = [
    [ 'fa-solid fa-sitemap', __( 'Teknik SEO', 'seogezegeni' ), __( 'Tarama, indekslenebilirlik, site hızı, Core Web Vitals, yönlendirmeler, canonical, robots.txt, schema ve log analizleri birlikte değerlendirilir.', 'seogezegeni' ) ],
    [ 'fa-solid fa-file-lines', __( 'On-Page SEO', 'seogezegeni' ), __( 'Arama niyetine uygun içerik planı, H1-H6 yapısı, title ve meta description, URL yapısı, görsel ALT etiketleri ve iç bağlantılar optimize edilir.', 'seogezegeni' ) ],
    [ 'fa-solid fa-link', __( 'Off-Page SEO', 'seogezegeni' ), __( 'Otoriter backlink çalışmaları, dijital PR, marka bahsetmeleri, sektör referansları ve itibar sinyalleri doğal bir otorite stratejisiyle planlanır.', 'seogezegeni' ) ],
    [ 'fa-solid fa-brain', __( 'Semantic SEO', 'seogezegeni' ), __( 'Yalnızca anahtar kelimeler değil; konu ilişkileri, alt başlıklar, kullanıcı soruları ve konu kapsamı birlikte ele alınır.', 'seogezegeni' ) ],
    [ 'fa-solid fa-database', __( 'Entity SEO', 'seogezegeni' ), __( 'Marka, kurum, kişi, ürün ve kavram ilişkileri yapılandırılmış veri, konu kümeleri ve güvenilir referanslarla güçlendirilir.', 'seogezegeni' ) ],
    [ 'fa-solid fa-location-dot', __( 'Yerel SEO', 'seogezegeni' ), __( 'Google Business Profile, NAP tutarlılığı, lokasyon bazlı sayfalar, harita optimizasyonu ve yerel yorum sinyalleri yönetilir.', 'seogezegeni' ) ],
];

$process_steps = [
    [ __( 'Kapsamlı Ön Analiz', 'seogezegeni' ), __( 'Web sitenizin teknik durumu, organik görünürlüğü, içerik yapısı ve rakipleri detaylı olarak analiz edilir.', 'seogezegeni' ) ],
    [ __( 'Strateji Oluşturma', 'seogezegeni' ), __( 'Hedef kitleniz, sektör rekabeti ve büyüme hedeflerinize uygun SEO yol haritası hazırlanır.', 'seogezegeni' ) ],
    [ __( 'Teknik İyileştirmeler', 'seogezegeni' ), __( 'Performansı etkileyen teknik sorunlar öncelik sırasına göre optimize edilir.', 'seogezegeni' ) ],
    [ __( 'İçerik ve Bilgi Mimarisi', 'seogezegeni' ), __( 'Arama niyetlerini karşılayan, konu otoritesini güçlendiren ve kullanıcı deneyimini geliştiren içerik planı oluşturulur.', 'seogezegeni' ) ],
    [ __( 'Sürekli Takip ve Geliştirme', 'seogezegeni' ), __( 'SEO dinamik bir süreç olduğu için performans düzenli analiz edilir, yeni fırsatlar belirlenir ve strateji güncellenir.', 'seogezegeni' ) ],
];

$seo_types = [
    [ 'fa-solid fa-building', __( 'Kurumsal SEO', 'seogezegeni' ), __( 'Binlerce sayfadan oluşabilen büyük yapılarda bilgi mimarisi, teknik performans, içerik kümeleri ve sayfa otoritesi birlikte yönetilir.', 'seogezegeni' ) ],
    [ 'fa-solid fa-map-location-dot', __( 'İzmir SEO Hizmeti', 'seogezegeni' ), __( 'Bölgesel arama alışkanlıkları, yerel rekabet ve Google Haritalar görünürlüğü dikkate alınarak özel stratejiler geliştirilir.', 'seogezegeni' ) ],
    [ 'fa-solid fa-globe', __( 'İngilizce SEO', 'seogezegeni' ), __( 'Çok dilli site mimarisi, hreflang, ülke bazlı anahtar kelime analizi ve uluslararası otorite çalışmaları planlanır.', 'seogezegeni' ) ],
    [ 'fa-brands fa-wordpress', __( 'WordPress SEO', 'seogezegeni' ), __( 'Tema performansı, eklenti optimizasyonu, görseller, schema, URL yapısı, cache ve güvenlik detayları birlikte ele alınır.', 'seogezegeni' ) ],
    [ 'fa-solid fa-cart-shopping', __( 'E-Ticaret SEO', 'seogezegeni' ), __( 'Kategori, ürün, filtreleme, stok yönetimi, schema, tarama bütçesi ve dönüşüm odaklı organik büyüme kurgulanır.', 'seogezegeni' ) ],
    [ 'fa-solid fa-scale-balanced', __( 'Sektörel SEO', 'seogezegeni' ), __( 'Hukuk, sağlık, turizm, B2B, üretim ve hizmet sektörleri için arama niyeti ve güven sinyalleri farklı stratejilerle yönetilir.', 'seogezegeni' ) ],
];

$mistakes = [
    __( 'Anahtar kelime doldurma', 'seogezegeni' ),
    __( 'Teknik SEO sorunlarını göz ardı etme', 'seogezegeni' ),
    __( 'Kopya içerik kullanımı', 'seogezegeni' ),
    __( 'İç bağlantıları ihmal etme', 'seogezegeni' ),
    __( 'Sadece backlink çalışmalarına odaklanma', 'seogezegeni' ),
    __( 'Kullanıcı deneyimini ikinci plana atma', 'seogezegeni' ),
    __( 'SEO’yu kısa vadeli bir kampanya gibi görmek', 'seogezegeni' ),
];

$metrics = [
    [ 'fa-solid fa-chart-line', __( 'Organik Trafik', 'seogezegeni' ), __( 'Arama motorlarından gelen kullanıcı sayısındaki değişim düzenli olarak analiz edilir.', 'seogezegeni' ) ],
    [ 'fa-solid fa-key', __( 'Anahtar Kelime Görünürlüğü', 'seogezegeni' ), __( 'Hedeflenen sorgulardaki sıralamalar ve yeni anahtar kelime kazanımları takip edilir.', 'seogezegeni' ) ],
    [ 'fa-solid fa-bullseye', __( 'Organik Dönüşüm Oranı', 'seogezegeni' ), __( 'Ziyaretçilerin teklif, satış veya iletişim gibi hedeflere ne ölçüde dönüştüğü incelenir.', 'seogezegeni' ) ],
    [ 'fa-solid fa-gauge-high', __( 'Teknik Performans', 'seogezegeni' ), __( 'Core Web Vitals, indeksleme, tarama hataları ve teknik metrikler kontrol edilir.', 'seogezegeni' ) ],
];

$faqs = [
    [ __( 'SEO nedir?', 'seogezegeni' ), __( 'SEO, web sitelerinin Google ve diğer arama motorlarında organik olarak daha görünür hale gelmesini sağlayan teknik, içerik ve otorite çalışmalarının bütünüdür.', 'seogezegeni' ) ],
    [ __( 'SEO neden önemlidir?', 'seogezegeni' ), __( 'Kullanıcıların büyük bölümü ürün ve hizmet araştırmalarına arama motorlarında başlar. SEO doğru kitleye reklam bütçesine bağlı kalmadan ulaşmanıza yardımcı olur.', 'seogezegeni' ) ],
    [ __( 'SEO çalışmaları ne kadar sürede sonuç verir?', 'seogezegeni' ), __( 'Süre; sektör rekabeti, sitenin mevcut durumu ve uygulanacak stratejiye göre değişir. İlk gelişmeler birkaç ay içinde görülebilir, sürdürülebilir başarı uzun vadeli çalışmayla elde edilir.', 'seogezegeni' ) ],
    [ __( 'SEO ile Google Ads arasındaki fark nedir?', 'seogezegeni' ), __( 'Google Ads ücretli reklam modelidir ve bütçe devam ettiği sürece görünürlük sağlar. SEO ise organik sıralamalara odaklanır ve uzun vadede kalıcı görünürlük oluşturmayı hedefler.', 'seogezegeni' ) ],
    [ __( 'SEO çalışmaları garanti edilebilir mi?', 'seogezegeni' ), __( 'Hiçbir profesyonel SEO ajansı Google’da belirli bir sıralamayı garanti edemez. Doğru strateji, teknik optimizasyon ve kaliteli içerik sürdürülebilir görünürlük sağlar.', 'seogezegeni' ) ],
    [ __( 'Teknik SEO olmadan içerik yeterli olur mu?', 'seogezegeni' ), __( 'Hayır. Teknik sorunlar arama motorlarının sayfaları doğru değerlendirmesini zorlaştırabilir. En iyi sonuç teknik SEO ve içerik optimizasyonunun birlikte yürütülmesiyle elde edilir.', 'seogezegeni' ) ],
    [ __( 'Yerel SEO kimler için uygundur?', 'seogezegeni' ), __( 'Belirli bir şehir veya bölgede hizmet veren işletmeler için yerel SEO önemli avantaj sağlar. Google Haritalar görünürlüğü ve bölgesel içerikler müşteri kazanımında kritik rol oynar.', 'seogezegeni' ) ],
    [ __( 'Yapay zeka SEO’yu bitirecek mi?', 'seogezegeni' ), __( 'Hayır. Yapay zeka ve AI Overviews, kaliteli ve güvenilir içerik üreten web siteleri için yeni görünürlük fırsatları oluşturur.', 'seogezegeni' ) ],
];
?>

<main id="sg-main" class="sg-seo-page" role="main">

    <section class="sg-page-hero sg-seo-hero" aria-labelledby="seo-page-heading">
        <div class="container">
            <div class="sg-seo-hero-grid">
                <div class="sg-seo-hero-copy" data-sg-reveal="left">
                    <span class="sg-hero-badge">
                        <i class="fa-solid fa-magnifying-glass-chart" aria-hidden="true"></i>
                        <?php esc_html_e( 'Profesyonel SEO Hizmeti', 'seogezegeni' ); ?>
                    </span>
                    <h1 id="seo-page-heading">
                        <?php esc_html_e( 'SEO Ajansı ile Profesyonel', 'seogezegeni' ); ?>
                        <span><?php esc_html_e( 'SEO Danışmanlığı', 'seogezegeni' ); ?></span>
                    </h1>
                    <p>
                        <?php esc_html_e( 'Teknik SEO, içerik optimizasyonu, kurumsal SEO, yerel SEO ve Google SEO danışmanlığı hizmetleriyle organik görünürlüğünüzü güçlendiren sürdürülebilir bir büyüme planı oluşturuyoruz.', 'seogezegeni' ); ?>
                    </p>
                    <div class="sg-seo-hero-actions">
                        <a href="<?php echo esc_url( home_url( '/iletisim/' ) ); ?>" class="sg-btn sg-btn-primary">
                            <i class="fa-solid fa-paper-plane" aria-hidden="true"></i>
                            <?php esc_html_e( 'Ücretsiz SEO Analizi Al', 'seogezegeni' ); ?>
                        </a>
                        <a href="#seo-sureci" class="sg-btn sg-btn-outline">
                            <i class="fa-solid fa-route" aria-hidden="true"></i>
                            <?php esc_html_e( 'Süreci İncele', 'seogezegeni' ); ?>
                        </a>
                    </div>
                </div>

                <div class="sg-seo-hero-visual" data-sg-reveal="right" aria-hidden="true">
                    <div class="sg-seo-orbit">
                        <span><i class="fa-brands fa-google"></i></span>
                        <span><i class="fa-solid fa-chart-line"></i></span>
                        <span><i class="fa-solid fa-code"></i></span>
                        <span><i class="fa-solid fa-link"></i></span>
                    </div>
                    <div class="sg-seo-dashboard">
                        <div class="sg-seo-searchbar"><i class="fa-solid fa-magnifying-glass"></i><span>seo hizmeti</span></div>
                        <div class="sg-seo-result is-active"><strong>#1</strong><span>Organik görünürlük</span><em>+%84</em></div>
                        <div class="sg-seo-result"><strong>#3</strong><span>Teknik performans</span><em>+%62</em></div>
                        <div class="sg-seo-chart"><span style="height:42%"></span><span style="height:68%"></span><span style="height:54%"></span><span style="height:82%"></span><span style="height:96%"></span></div>
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
                        __( 'SEO Nedir?', 'seogezegeni' ),
                        __( 'Arama Motorlarında <span class="text-accent">Güçlü ve Kalıcı Görünürlük</span>', 'seogezegeni' ),
                        '',
                        false,
                        true
                    );
                    ?>
                    <div class="sg-seo-richtext">
                        <p><?php esc_html_e( 'SEO, web sitelerinin Google ve diğer arama motorlarında organik görünürlüğünü artırmak amacıyla yürütülen teknik, içeriksel ve stratejik optimizasyon çalışmalarının tamamını ifade eder. Temel hedef, kullanıcıların yaptığı aramalarda doğru sayfayı doğru zamanda karşılarına çıkararak hem arama motorlarının hem de kullanıcıların beklentilerini karşılamaktır.', 'seogezegeni' ); ?></p>
                        <p><?php esc_html_e( 'Günümüzde SEO yalnızca anahtar kelime yoğunluğu veya bağlantı sayısından ibaret değildir. Kullanıcı deneyimi, içerik kalitesi, uzmanlık, güvenilirlik, teknik performans, yapay zeka destekli arama sonuçları ve marka otoritesi birlikte değerlendirilir.', 'seogezegeni' ); ?></p>
                        <p><?php esc_html_e( 'SEO Gezegeni olarak işletmelerin sadece belirli anahtar kelimelerde sıralama kazanmasına odaklanmıyoruz. Amacımız; sürdürülebilir organik büyüme, doğru hedef kitleye ulaşma ve arama trafiğini ticari değere dönüştüren bir sistem kurmaktır.', 'seogezegeni' ); ?></p>
                    </div>
                </div>
                <aside class="sg-seo-stat-panel" data-sg-reveal="right">
                    <?php foreach ( $seo_stats as $stat ) : ?>
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
                __( 'Neden SEO?', 'seogezegeni' ),
                __( 'SEO Neden İşletmeler İçin <span class="text-accent">Vazgeçilmezdir?</span>', 'seogezegeni' ),
                __( 'Organik görünürlük, marka güveni ve uzun vadeli dijital büyüme için SEO en kritik kanallardan biridir.', 'seogezegeni' ),
                true
            );
            ?>
            <div class="sg-seo-benefit-grid">
                <?php
                $benefits = [
                    [ 'fa-solid fa-arrow-trend-up', __( 'Organik görünürlüğü artırır.', 'seogezegeni' ) ],
                    [ 'fa-solid fa-users-viewfinder', __( 'Hedef kitleye doğru zamanda ulaşmanızı sağlar.', 'seogezegeni' ) ],
                    [ 'fa-solid fa-shield-halved', __( 'Marka güvenilirliğini güçlendirir.', 'seogezegeni' ) ],
                    [ 'fa-solid fa-coins', __( 'Reklam maliyetlerini uzun vadede azaltır.', 'seogezegeni' ) ],
                    [ 'fa-solid fa-award', __( 'Daha yüksek dönüşüm oranlarına katkı sağlar.', 'seogezegeni' ) ],
                    [ 'fa-solid fa-chess-knight', __( 'Rakiplere karşı sürdürülebilir avantaj oluşturur.', 'seogezegeni' ) ],
                ];
                foreach ( $benefits as $index => $benefit ) :
                ?>
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
                __( 'SEO Hizmeti', 'seogezegeni' ),
                __( 'Profesyonel SEO Hizmetleri <span class="text-accent">Neleri Kapsar?</span>', 'seogezegeni' ),
                __( 'Başarılı bir SEO çalışması teknik altyapı, içerik stratejisi, kullanıcı deneyimi, otorite ve düzenli raporlamanın birlikte yönetilmesiyle oluşur.', 'seogezegeni' ),
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

    <section id="seo-sureci" class="sg-seo-process section-pad light-section">
        <div class="container">
            <?php
            sg_section_head(
                __( 'SEO Süreci', 'seogezegeni' ),
                __( 'Google SEO Süreci <span class="text-accent">Nasıl Yönetilir?</span>', 'seogezegeni' ),
                __( 'SEO tamamlanıp bırakılan bir proje değildir. Analiz, uygulama, ölçüm ve sürekli geliştirme döngüsüyle yönetilmelidir.', 'seogezegeni' ),
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

    <section class="sg-seo-ai section-pad soft-section">
        <div class="container">
            <div class="sg-seo-ai-grid">
                <div class="sg-seo-ai-card" data-sg-reveal="left">
                    <i class="fa-solid fa-wand-magic-sparkles" aria-hidden="true"></i>
                    <h2><?php esc_html_e( 'SEO’da Yapay Zeka ve AI Overviews Dönemi', 'seogezegeni' ); ?></h2>
                    <p><?php esc_html_e( 'Arama motorları artık yalnızca klasik arama sonuçlarını değil, yapay zeka destekli özetleri de kullanıcıya göstermektedir. Bu nedenle içeriklerin uzmanlık, güvenilirlik, konu kapsamı, teknik kalite ve semantik bütünlük açısından güçlü olması gerekir.', 'seogezegeni' ); ?></p>
                </div>
                <div class="sg-seo-ai-list" data-sg-reveal="right">
                    <?php
                    $ai_points = [
                        __( 'Kullanıcının sorusuna doğrudan cevap verme', 'seogezegeni' ),
                        __( 'Konuyu yüzeysel değil kapsamlı ele alma', 'seogezegeni' ),
                        __( 'Güvenilir kaynaklara ve uzmanlık sinyallerine dayanma', 'seogezegeni' ),
                        __( 'Teknik olarak erişilebilir ve hızlı olma', 'seogezegeni' ),
                        __( 'Semantik bütünlük oluşturma', 'seogezegeni' ),
                    ];
                    foreach ( $ai_points as $point ) :
                    ?>
                        <div><i class="fa-solid fa-check" aria-hidden="true"></i><?php echo esc_html( $point ); ?></div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <section class="sg-seo-types section-pad dark-section">
        <div class="container">
            <?php
            sg_section_head(
                __( 'Strateji Alanları', 'seogezegeni' ),
                __( 'Sektöre ve Hedefe Göre <span class="text-accent">SEO Stratejileri</span>', 'seogezegeni' ),
                __( 'Her sektörün rekabet yapısı, kullanıcı davranışları ve satın alma süreci farklıdır. Bu yüzden SEO stratejisi işletmenin gerçek ihtiyacına göre şekillendirilmelidir.', 'seogezegeni' ),
                true
            );
            ?>
            <div class="sg-seo-type-grid">
                <?php foreach ( $seo_types as $index => $type ) : ?>
                    <article class="sg-seo-type-card" data-sg-reveal data-delay="<?php echo esc_attr( ( $index % 3 ) * 120 ); ?>">
                        <i class="<?php echo esc_attr( $type[0] ); ?>" aria-hidden="true"></i>
                        <h3><?php echo esc_html( $type[1] ); ?></h3>
                        <p><?php echo esc_html( $type[2] ); ?></p>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="sg-seo-errors section-pad light-section">
        <div class="container">
            <div class="sg-seo-split">
                <div data-sg-reveal="left">
                    <?php
                    sg_section_head(
                        __( 'SEO Hataları', 'seogezegeni' ),
                        __( 'SEO’da Sık Yapılan <span class="text-accent">Hatalar</span>', 'seogezegeni' ),
                        __( 'Yanlış uygulamalar yalnızca sıralama kaybına değil, uzun vadeli organik görünürlüğün zayıflamasına da neden olabilir.', 'seogezegeni' ),
                        false,
                        true
                    );
                    ?>
                    <div class="sg-seo-error-list">
                        <?php foreach ( $mistakes as $mistake ) : ?>
                            <div><i class="fa-solid fa-triangle-exclamation" aria-hidden="true"></i><?php echo esc_html( $mistake ); ?></div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="sg-seo-success-card" data-sg-reveal="right">
                    <h3><?php esc_html_e( 'SEO Başarısını Belirleyen Faktörler', 'seogezegeni' ); ?></h3>
                    <p><?php esc_html_e( 'Başarı tek bir optimizasyon çalışmasına bağlı değildir. Güçlü teknik altyapı, hızlı ve mobil uyumlu web sitesi, kaliteli içerikler, doğru bilgi mimarisi, güvenilir backlink profili ve düzenli analiz birlikte sonuç üretir.', 'seogezegeni' ); ?></p>
                    <a href="<?php echo esc_url( home_url( '/iletisim/' ) ); ?>" class="sg-service-link">
                        <?php esc_html_e( 'SEO planı iste', 'seogezegeni' ); ?>
                        <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="sg-seo-measure section-pad soft-section">
        <div class="container">
            <?php
            sg_section_head(
                __( 'Performans', 'seogezegeni' ),
                __( 'SEO Performansı <span class="text-accent">Nasıl Ölçülür?</span>', 'seogezegeni' ),
                __( 'SEO raporlamasını yalnızca sıralama tablolarından ibaret görmüyoruz. Organik büyümeyi etkileyen tüm verileri birlikte değerlendiriyoruz.', 'seogezegeni' ),
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

    <section class="sg-seo-faq section-pad dark-section">
        <div class="container">
            <?php
            sg_section_head(
                __( 'Sık Sorulan Sorular', 'seogezegeni' ),
                __( 'SEO Hakkında <span class="text-accent">Merak Edilenler</span>', 'seogezegeni' ),
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
                    <?php esc_html_e( 'Sürdürülebilir Organik Büyüme', 'seogezegeni' ); ?>
                </span>
                <h2><?php esc_html_e( 'Dijital Büyümenizi Doğru SEO Stratejisiyle Planlayın', 'seogezegeni' ); ?></h2>
                <p><?php esc_html_e( 'İşletmenizin faaliyet gösterdiği sektöre, rekabet seviyesine ve hedeflerine uygun bir SEO yol haritası oluşturmak istiyorsanız, SEO Gezegeni olarak size özel analizler ve sürdürülebilir çözümler sunmaya hazırız.', 'seogezegeni' ); ?></p>
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
