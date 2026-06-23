<?php
/**
 * Template Name: Hakkımızda Sayfası
 * Template Post Type: page
 *
 * SEO Gezegeni hakkında sayfası özel şablonu.
 */
get_header();

if ( have_posts() ) {
    the_post();
}

$intro_points = [
    __( 'SEO, Google Ads, sosyal medya, web tasarım ve online itibar yönetimi alanlarında uzman ekip.', 'seogezegeni' ),
    __( '2017 yılından bu yana İzmir ve İstanbul ofislerinden Türkiye geneline dijital ajans hizmeti.', 'seogezegeni' ),
    __( 'Performans, kalite ve ölçülebilir sonuç odaklı çalışma yaklaşımı.', 'seogezegeni' ),
];

$expertise_cards = [
    [
        'icon'  => 'fa-solid fa-laptop-code',
        'title' => __( 'Web Tasarım', 'seogezegeni' ),
        'desc'  => __( 'Yüzlerce web sitesi deneyimini SEO Gezegeni çatısı altında SEO ile uyumlu WordPress projelerine taşıyoruz.', 'seogezegeni' ),
    ],
    [
        'icon'  => 'fa-brands fa-google',
        'title' => __( 'AdWords Reklamları', 'seogezegeni' ),
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
];

$work_areas = [
    [ 'fa-solid fa-chart-line', __( 'SEO Hizmeti', 'seogezegeni' ), __( 'Profesyonel SEO danışmanlığıyla anahtar kelimelerde güçlü konumlar hedefliyoruz.', 'seogezegeni' ) ],
    [ 'fa-solid fa-pen-nib', __( 'İçerik Pazarlama', 'seogezegeni' ), __( 'Satışları destekleyecek içerik stratejileri geliştiriyoruz.', 'seogezegeni' ) ],
    [ 'fa-solid fa-bullhorn', __( 'Marka Bilinirliği', 'seogezegeni' ), __( 'Markanızı hedef kitlenize tanıtacak dijital pazarlama kurguları oluşturuyoruz.', 'seogezegeni' ) ],
    [ 'fa-brands fa-google', __( 'Google AdWords', 'seogezegeni' ), __( 'Google reklam kanallarını satış ve performans hedeflerine göre yönetiyoruz.', 'seogezegeni' ) ],
    [ 'fa-solid fa-users', __( 'Sosyal Medya', 'seogezegeni' ), __( 'Sosyal medya yönetimi ve reklam süreçlerini planlıyor, uyguluyor ve optimize ediyoruz.', 'seogezegeni' ) ],
    [ 'fa-solid fa-code', __( 'Web Tasarım ve Yazılım', 'seogezegeni' ), __( 'İhtiyaca uygun, kullanıcı dostu ve SEO uyumlu web siteleri geliştiriyoruz.', 'seogezegeni' ) ],
];

$quality_metrics = [
    [ __( 'Tasarım', 'seogezegeni' ), '95' ],
    [ __( 'Pazarlama', 'seogezegeni' ), '96' ],
    [ __( 'Yazılım', 'seogezegeni' ), '92' ],
    [ __( 'Kullanıcı Dostu', 'seogezegeni' ), '98' ],
    [ __( 'Hedef Odaklı', 'seogezegeni' ), '97' ],
];
?>

<main id="sg-main" class="sg-about-page" role="main">

    <section class="sg-page-hero sg-about-hero" aria-labelledby="about-page-heading">
        <div class="container">
            <div class="sg-page-hero-inner">
                <div class="sg-about-hero-grid">
                    <div class="sg-about-hero-copy" data-sg-reveal="left">
                        <span class="sg-hero-badge">
                            <i class="fa-solid fa-rocket" aria-hidden="true"></i>
                            <?php esc_html_e( 'Markanızın Dijital Gezegeni', 'seogezegeni' ); ?>
                        </span>
                        <h1 id="about-page-heading">
                            <?php esc_html_e( 'SEO Gezegeni Hakkında', 'seogezegeni' ); ?>
                            <span><?php esc_html_e( 'Her Şey', 'seogezegeni' ); ?></span>
                        </h1>
                        <p>
                            <?php esc_html_e( 'SEO Gezegeni hakkında daha detaylı bilgi edinmek ve çalışma yaklaşımımızı tanımak için doğru yerdesiniz.', 'seogezegeni' ); ?>
                        </p>
                        <div class="sg-about-hero-actions">
                            <a href="<?php echo esc_url( home_url( '/iletisim/' ) ); ?>" class="sg-btn sg-btn-primary">
                                <i class="fa-solid fa-paper-plane" aria-hidden="true"></i>
                                <?php esc_html_e( 'İletişime Geç', 'seogezegeni' ); ?>
                            </a>
                            <a href="<?php echo esc_url( home_url( '/portfolio/' ) ); ?>" class="sg-btn sg-btn-outline">
                                <i class="fa-solid fa-briefcase" aria-hidden="true"></i>
                                <?php esc_html_e( 'Projeleri İncele', 'seogezegeni' ); ?>
                            </a>
                        </div>
                    </div>

                    <div class="sg-about-hero-panel" data-sg-reveal="right" aria-label="<?php esc_attr_e( 'Ajans özeti', 'seogezegeni' ); ?>">
                        <div class="sg-about-orbit" aria-hidden="true">
                            <i class="fa-solid fa-globe"></i>
                        </div>
                        <div class="sg-about-hero-stat">
                            <strong>2017</strong>
                            <span><?php esc_html_e( 'Kuruluş', 'seogezegeni' ); ?></span>
                        </div>
                        <div class="sg-about-hero-stat">
                            <strong>2</strong>
                            <span><?php esc_html_e( 'Ajans Ofisi', 'seogezegeni' ); ?></span>
                        </div>
                        <div class="sg-about-hero-stat">
                            <strong>100%</strong>
                            <span><?php esc_html_e( 'Performans Odağı', 'seogezegeni' ); ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Breadcrumb Bar -->
    <div class="sg-breadcrumb-bar">
        <div class="container"><?php seogezegeni_breadcrumb(); ?></div>
    </div>

    <section class="sg-about-story section-pad light-section">
        <div class="container">
            <div class="sg-about-story-grid">
                <div data-sg-reveal="left">
                    <?php
                    sg_section_head(
                        __( 'Hikayemiz', 'seogezegeni' ),
                        __( 'Hikayemiz & <span class="text-accent">Çalışmamız</span>', 'seogezegeni' ),
                        '',
                        false,
                        true
                    );
                    ?>
                    <div class="sg-about-story-text">
                        <p>
                            <?php esc_html_e( 'SEO Gezegeni; profesyonel dijital ajans olarak uzman olduğu SEO, Google AdWords reklamları, sosyal medya yönetimi ve reklamları, web tasarım ve online itibar yönetimi alanlarında firmalara hizmet vermek için 2017 yılında uzun yıllardır farklı dijital ajanslarda çalışan uzmanların bir araya gelerek kurmuş olduğu bir dijital ajanstır.', 'seogezegeni' ); ?>
                        </p>
                        <ul class="sg-about-list">
                            <?php foreach ( $intro_points as $point ) : ?>
                                <li><?php echo esc_html( $point ); ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>

                <div class="sg-about-story-visual" data-sg-reveal="right">
                    <?php if ( has_post_thumbnail() ) : ?>
                        <?php the_post_thumbnail( 'sg-hero-thumb', [ 'loading' => 'eager', 'alt' => get_the_title() ] ); ?>
                    <?php else : ?>
                        <div class="sg-about-visual-card">
                            <?php
                            $visual_items = [
                                [ 'fa-solid fa-magnifying-glass-chart', __( 'SEO', 'seogezegeni' ),            __( 'Organik görünürlük & sıralama', 'seogezegeni' ) ],
                                [ 'fa-brands fa-google',                __( 'Google Ads', 'seogezegeni' ),     __( 'Performans odaklı reklam', 'seogezegeni' ) ],
                                [ 'fa-solid fa-share-nodes',            __( 'Sosyal Medya', 'seogezegeni' ),   __( 'Marka bilinirliği & etkileşim', 'seogezegeni' ) ],
                                [ 'fa-solid fa-code',                   __( 'Web Tasarım', 'seogezegeni' ),    __( 'SEO uyumlu & hızlı siteler', 'seogezegeni' ) ],
                            ];
                            foreach ( $visual_items as $item ) : ?>
                                <div class="sg-about-visual-item">
                                    <span class="sg-about-visual-icon" aria-hidden="true">
                                        <i class="<?php echo esc_attr( $item[0] ); ?>"></i>
                                    </span>
                                    <span class="sg-about-visual-text">
                                        <strong><?php echo esc_html( $item[1] ); ?></strong>
                                        <small><?php echo esc_html( $item[2] ); ?></small>
                                    </span>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <section class="sg-about-expertise section-pad alt-section">
        <div class="container">
            <?php
            sg_section_head(
                __( 'Uzmanlıklarımız', 'seogezegeni' ),
                __( 'Dijital Büyüme İçin <span class="text-accent">Temel Disiplinler</span>', 'seogezegeni' ),
                __( 'Ajans deneyimimizi performans, teknik doğruluk ve kullanıcı odaklı tasarımla birleştiriyoruz.', 'seogezegeni' ),
                true
            );
            ?>

            <div class="sg-about-card-grid">
                <?php foreach ( $expertise_cards as $index => $card ) : ?>
                    <article class="sg-service-card" data-sg-reveal data-delay="<?php echo esc_attr( ( $index % 4 ) * 100 ); ?>">
                        <div class="sg-service-icon" aria-hidden="true">
                            <i class="<?php echo esc_attr( $card['icon'] ); ?>"></i>
                        </div>
                        <h3><?php echo esc_html( $card['title'] ); ?></h3>
                        <p><?php echo esc_html( $card['desc'] ); ?></p>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="sg-about-areas section-pad dark-section">
        <div class="container">
            <?php
            sg_section_head(
                __( 'Çalışma Alanlarımız', 'seogezegeni' ),
                __( 'Profesyonel <span class="text-accent">Çalışma Alanlarımız</span>', 'seogezegeni' ),
                __( 'Aşağıdaki her alanda tutkuyla çalışıyor, ihtiyaçlarınıza göre strateji ve uygulama süreçlerini birlikte şekillendiriyoruz.', 'seogezegeni' ),
                true
            );
            ?>

            <div class="sg-about-area-grid">
                <?php foreach ( $work_areas as $index => $area ) : ?>
                    <article class="sg-why-card" data-sg-reveal data-delay="<?php echo esc_attr( ( $index % 3 ) * 100 ); ?>">
                        <div class="sg-why-num" aria-hidden="true">
                            <i class="<?php echo esc_attr( $area[0] ); ?>"></i>
                        </div>
                        <div class="sg-why-body">
                            <h3><?php echo esc_html( $area[1] ); ?></h3>
                            <p><?php echo esc_html( $area[2] ); ?></p>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="sg-about-quality section-pad light-section">
        <div class="container">
            <div class="sg-about-quality-grid">
                <div data-sg-reveal="left">
                    <?php
                    sg_section_head(
                        __( 'Kaliteli Hizmet', 'seogezegeni' ),
                        __( 'Kalite İşlerimizin <span class="text-accent">Anahtar Sözcüğü</span>', 'seogezegeni' ),
                        '',
                        false,
                        true
                    );
                    ?>
                    <p>
                        <?php esc_html_e( 'Yaptığımız tüm işlerde kaliteli hizmet vermeyi taahhüt ediyor ve bu bilinçle hareket ediyoruz. SEO çalışmalarımızda güçlü sıralama hedefleriyle ilerliyor, AdWords ve sosyal medya reklamlarında hedefleri tutturmak adına sürekli optimizasyon yapıyor, web tasarım işlerimizde SEO uyumluluğuna ve kullanıcı dostu deneyime dikkat ediyoruz.', 'seogezegeni' ); ?>
                    </p>
                </div>

                <div class="sg-about-progress-list" data-sg-reveal="right">
                    <?php foreach ( $quality_metrics as $metric ) : ?>
                        <div class="sg-about-progress-item">
                            <div class="sg-about-progress-label">
                                <span><?php echo esc_html( $metric[0] ); ?></span>
                                <strong><?php echo esc_html( $metric[1] ); ?>%</strong>
                            </div>
                            <div class="sg-about-progress-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="<?php echo esc_attr( $metric[1] ); ?>">
                                <span style="width:<?php echo esc_attr( $metric[1] ); ?>%;"></span>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <section class="sg-cta section-pad dark-section" aria-labelledby="about-cta-heading">
        <div class="container">
            <div class="sg-cta-inner" data-sg-reveal>
                <div class="sg-label">
                    <span class="sg-label-dot" aria-hidden="true"></span>
                    <?php esc_html_e( 'Dijital Pazarlama Hizmeti Alın', 'seogezegeni' ); ?>
                </div>
                <h2 id="about-cta-heading">
                    <?php esc_html_e( 'SEO ve dijital pazarlama hedeflerinizi birlikte büyütelim.', 'seogezegeni' ); ?>
                </h2>
                <p>
                    <?php esc_html_e( 'Kalitemize ve iş yapma kapasitemize güveniyoruz. Siz de bize güvenin ve kısa sürede alacağınız hizmetin etkisini görün.', 'seogezegeni' ); ?>
                </p>
                <div class="sg-cta-actions">
                    <a href="<?php echo esc_url( home_url( '/iletisim/' ) ); ?>" class="sg-btn sg-btn-primary">
                        <i class="fa-solid fa-paper-plane" aria-hidden="true"></i>
                        <?php esc_html_e( 'Teklif Alın', 'seogezegeni' ); ?>
                    </a>
                    <a href="<?php echo esc_url( 'tel:05551626211' ); ?>" class="sg-btn sg-btn-outline">
                        <i class="fa-solid fa-phone" aria-hidden="true"></i>
                        <?php esc_html_e( '0555 162 62 11', 'seogezegeni' ); ?>
                    </a>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
