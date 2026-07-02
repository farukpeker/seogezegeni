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
];

$work_areas = [
    [
        'icon'  => 'fa-solid fa-magnifying-glass-chart',
        'title' => __( 'SEO', 'seogezegeni' ),
        'desc'  => __( 'Teknik SEO, içerik optimizasyonu ve otorite çalışmalarıyla organik görünürlüğünüzü artırın.', 'seogezegeni' ),
        'url'   => home_url( '/seo/' ),
    ],
    [
        'icon'  => 'fa-solid fa-chart-pie',
        'title' => __( '360° DİJİTAL PAZARLAMA', 'seogezegeni' ),
        'desc'  => __( 'Markanızın tüm dijital kanallarını tek strateji altında büyüme hedeflerinize göre planlayın.', 'seogezegeni' ),
        'url'   => home_url( '/dijital-reklam/' ),
    ],
    [
        'icon'  => 'fa-solid fa-share-nodes',
        'title' => __( 'SOSYAL MEDYA YÖNETİMİ', 'seogezegeni' ),
        'desc'  => __( 'İçerik üretimi, topluluk yönetimi ve düzenli raporlamayla sosyal medya varlığınızı güçlendirin.', 'seogezegeni' ),
        'url'   => home_url( '/sosyal-medya/' ),
    ],
    [
        'icon'  => 'fa-brands fa-google',
        'title' => __( 'GOOGLE & META REKLAMLARI', 'seogezegeni' ),
        'desc'  => __( 'Google, Instagram ve Facebook reklamlarında dönüşüm odaklı kampanya kurguları oluşturun.', 'seogezegeni' ),
        'url'   => home_url( '/sem/' ),
    ],
    [
        'icon'  => 'fa-solid fa-laptop-code',
        'title' => __( 'WEB TASARIM ve YAZILIM', 'seogezegeni' ),
        'desc'  => __( 'SEO uyumlu, hızlı, mobil dostu ve dönüşüm odaklı web siteleri ile yazılım çözümleri geliştirin.', 'seogezegeni' ),
        'url'   => home_url( '/web-tasarim/' ),
    ],
];

$quality_metrics = [
    [ __( 'Tasarım', 'seogezegeni' ), '95' ],
    [ __( 'Pazarlama', 'seogezegeni' ), '96' ],
    [ __( 'Yazılım', 'seogezegeni' ), '92' ],
    [ __( 'Kullanıcı Dostu', 'seogezegeni' ), '98' ],
    [ __( 'Hedef Odaklı', 'seogezegeni' ), '97' ],
];

$about_video_url = 'https://www.youtube.com/watch?v=xqxWxhz3HRY';
$about_video_id  = sg_youtube_video_id_from_url( $about_video_url );
$about_photo_url = 'https://seogezegeni.com/wp-content/uploads/2023/02/seo-gezegeni-ekibi-2023-2.jpg';
$instagram_url   = 'https://www.instagram.com/seogezegeni/';

$instagram_posts = [
    [
        'title' => __( 'OpenAI’dan Yapay Zekâda Yeni Adım', 'seogezegeni' ),
        'desc'  => __( 'Teknoloji ve dijital pazarlama gündeminden öne çıkan güncel paylaşım.', 'seogezegeni' ),
        'url'   => 'https://www.instagram.com/p/DaK4et6DSyX/',
        'image' => 'https://scontent-ist1-2.cdninstagram.com/v/t39.30808-6/733575305_1785003562932493_4034273863766537928_n.jpg?stp=dst-jpg_e35_tt6&_nc_cat=104&ig_cache_key=MzkzMDIwMjAyNjMxNTQyNjk2Nw%3D%3D.3-ccb7-5&ccb=7-5&_nc_sid=58cdad&efg=eyJ2ZW5jb2RlX3RhZyI6IkZFRUQueHBpZHMuMTA4MC5zZHIucmVndWxhcl9waG90by5DMyJ9&_nc_ohc=XPxHrX5UZTMQ7kNvwFeX3VB&_nc_oc=Adp8IK4c5pjU_tuvePju-JP6C3hQaFx3k98d5XlohTARm1s0_VLeCIdvmd055jwmNyU&_nc_ad=z-m&_nc_cid=0&_nc_zt=23&_nc_ht=scontent-ist1-2.cdninstagram.com&_nc_gid=PsLNBjBCfzd_EAJ1Qafrrw&_nc_ss=7a22e&oh=00_AQDUv_8T6YGf6_V-ri6HqHCiGqBbxf-RCgY5RGWIeZ04kQ&oe=6A495A6C',
    ],
    [
        'title' => __( 'Instagram Deneyimi Değişiyor', 'seogezegeni' ),
        'desc'  => __( 'Reels, içerik akışı ve sosyal medya stratejisi hakkında güncel paylaşım.', 'seogezegeni' ),
        'url'   => 'https://www.instagram.com/p/DYew2_Pna6c/',
        'image' => 'https://scontent-ist1-1.cdninstagram.com/v/t39.30808-6/701119789_1747046560061527_3013202353213918311_n.jpg?stp=dst-jpg_e35_tt6&_nc_cat=102&ig_cache_key=Mzg5OTc2OTE5MDkyNTMxMjg2MQ%3D%3D.3-ccb7-5&ccb=7-5&_nc_sid=58cdad&efg=eyJ2ZW5jb2RlX3RhZyI6IkNBUk9VU0VMX0lURU0ueHBpZHMuMTI1NC5zZHIucmVndWxhcl9waG90by5DMyJ9&_nc_ohc=ustcKMplyWsQ7kNvwHF4-Mk&_nc_oc=AdolKqA5CIAsUdXWX4vDhmONUSm2Y7zNCtDl7491ES0sG7e8mcHBoNGZ1cSaTYb3jOE&_nc_ad=z-m&_nc_cid=0&_nc_zt=23&_nc_ht=scontent-ist1-1.cdninstagram.com&_nc_gid=6O_s2dZs6ZqPCsrBLPW5Jw&_nc_ss=7a22e&oh=00_AQAn7cSsujqf-XGeNHOJGEyhfOq4yiG5aGBPyBaMLXKdeA&oe=6A497519',
    ],
    [
        'title' => __( 'Ajans Günlüğü', 'seogezegeni' ),
        'desc'  => __( 'Ofis hayatından, ekip enerjisinden ve ajans kültüründen kısa bir kesit.', 'seogezegeni' ),
        'url'   => 'https://www.instagram.com/p/DZaAL04oUgq/',
        'image' => 'https://scontent-ist1-1.cdninstagram.com/v/t51.71878-15/718942852_2066512658081436_3262498267232655870_n.jpg?stp=cmp1_dst-jpg_e35_s640x640_tt6&_nc_cat=101&ccb=7-5&_nc_sid=18de74&efg=eyJlZmdfdGFnIjoiQ0xJUFMuYmVzdF9pbWFnZV91cmxnZW4uQzMifQ%3D%3D&_nc_ohc=cFyImb02hwAQ7kNvwG3zi2C&_nc_oc=AdqhtdrCnx97ycGZGlnQHHl0Szr-pvlUnePMDhwNme8zO6i4xAd8BXy26-0bA8a7-Jk&_nc_zt=23&_nc_ht=scontent-ist1-1.cdninstagram.com&_nc_gid=iKOhQ_Pl_dP8yjldXWxpMg&_nc_ss=7ca02&oh=00_AQCoWgKz1qwwckSS91_ldtXVUGESUxOrR72GuJ0GvWRp0Q&oe=6A496EB4',
    ],
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
                            <a href="<?php echo esc_url( home_url( '/referanslar/' ) ); ?>" class="sg-btn sg-btn-outline">
                                <i class="fa-solid fa-briefcase" aria-hidden="true"></i>
                                <?php esc_html_e( 'Referansları İncele', 'seogezegeni' ); ?>
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
                            <strong>20+</strong>
                            <span><?php esc_html_e( 'Ekip Üyesi', 'seogezegeni' ); ?></span>
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

            <div class="sg-about-area-grid sg-about-service-grid">
                <?php foreach ( $work_areas as $index => $area ) : ?>
                    <article class="sg-service-card" data-sg-reveal data-delay="<?php echo esc_attr( ( $index % 3 ) * 100 ); ?>">
                        <div class="sg-service-icon" aria-hidden="true">
                            <i class="<?php echo esc_attr( $area['icon'] ); ?>"></i>
                        </div>
                        <h3><?php echo esc_html( $area['title'] ); ?></h3>
                        <p><?php echo esc_html( $area['desc'] ); ?></p>
                        <a href="<?php echo esc_url( $area['url'] ); ?>" class="sg-service-link">
                            <?php esc_html_e( 'Detaylı Bilgi', 'seogezegeni' ); ?>
                            <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
                        </a>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="sg-about-media section-pad alt-section">
        <div class="container">
            <?php
            sg_section_head(
                __( 'Biz Kimiz?', 'seogezegeni' ),
                __( 'Ajansı Daha <span class="text-accent">Yakından Tanıyın</span>', 'seogezegeni' ),
                __( 'Tanıtım videosu, ajans fotoğrafı ve Instagram paylaşımları için sabit alanlar hazırladık.', 'seogezegeni' ),
                true
            );
            ?>

            <div class="sg-about-media-grid">
                <div class="sg-about-video-card" data-sg-reveal="left">
                    <?php if ( $about_video_id ) : ?>
                        <iframe
                            src="<?php echo esc_url( sprintf( 'https://www.youtube-nocookie.com/embed/%s', rawurlencode( $about_video_id ) ) ); ?>"
                            title="<?php esc_attr_e( 'SEO Gezegeni tanıtım videosu', 'seogezegeni' ); ?>"
                            loading="lazy"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                    <?php else : ?>
                        <a href="<?php echo esc_url( $about_video_url ); ?>" class="sg-about-video-placeholder" target="_blank" rel="noopener">
                            <i class="fa-solid fa-play" aria-hidden="true"></i>
                            <span><?php esc_html_e( 'Tanıtım videosunu izleyin', 'seogezegeni' ); ?></span>
                        </a>
                    <?php endif; ?>
                </div>

                <div class="sg-about-photo-card" data-sg-reveal="right">
                    <a
                        href="<?php echo esc_url( $about_photo_url ); ?>"
                        data-fancybox="about-gallery"
                        data-caption="<?php esc_attr_e( 'SEO Gezegeni ekibi', 'seogezegeni' ); ?>">
                        <img
                            src="<?php echo esc_url( $about_photo_url ); ?>"
                            alt="<?php esc_attr_e( 'SEO Gezegeni ekibi', 'seogezegeni' ); ?>"
                            loading="lazy">
                    </a>
                </div>
            </div>

            <div class="sg-about-instagram-grid" aria-label="<?php esc_attr_e( 'Instagram paylaşımları', 'seogezegeni' ); ?>">
                <?php foreach ( $instagram_posts as $index => $post ) : ?>
                    <a class="sg-about-instagram-card" href="<?php echo esc_url( $post['url'] ); ?>" target="_blank" rel="noopener" data-sg-reveal data-delay="<?php echo esc_attr( ( $index % 3 ) * 100 ); ?>">
                        <div class="sg-about-instagram-media">
                            <?php if ( ! empty( $post['image'] ) ) : ?>
                                <img src="<?php echo esc_url( $post['image'] ); ?>" alt="<?php echo esc_attr( $post['title'] ); ?>" loading="lazy">
                            <?php else : ?>
                                <i class="fa-brands fa-instagram" aria-hidden="true"></i>
                            <?php endif; ?>
                        </div>
                        <div class="sg-about-instagram-body">
                            <h3><?php echo esc_html( $post['title'] ); ?></h3>
                            <p><?php echo esc_html( $post['desc'] ); ?></p>
                            <span class="sg-about-instagram-link">
                                <?php esc_html_e( 'Instagram’da Gör', 'seogezegeni' ); ?>
                                <i class="fa-solid fa-arrow-up-right-from-square" aria-hidden="true"></i>
                            </span>
                        </div>
                    </a>
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

<?php get_template_part( 'template-parts/pre-footer-cta' ); ?>
<?php get_template_part( 'template-parts/pre-footer-contact' ); ?>

</main>

<?php get_footer(); ?>
