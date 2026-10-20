<?php
/**
 * Çerez Politikası sayfası.
 * Sayfa editörü doluysa onu gösterir; boşsa varsayılan metni kullanır.
 */
get_header();

if ( have_posts() ) {
    the_post();
}

$email = sg_option( 'sg_email', 'info@seogezegeni.com' );

$legal_items = [
    [ 'icon' => 'fa-solid fa-cookie-bite',  'title' => __( 'Çerez Nedir?', 'seogezegeni' ),        'desc' => __( 'Tarayıcınıza kaydedilen küçük metin dosyalarıdır.', 'seogezegeni' ) ],
    [ 'icon' => 'fa-solid fa-chart-line',   'title' => __( 'Neden Kullanıyoruz?', 'seogezegeni' ), 'desc' => __( 'Site performansını ölçmek ve deneyimi iyileştirmek için.', 'seogezegeni' ) ],
    [ 'icon' => 'fa-solid fa-sliders',      'title' => __( 'Kontrol Sizde', 'seogezegeni' ),       'desc' => __( 'Çerez tercihlerinizi tarayıcı ayarlarından yönetebilirsiniz.', 'seogezegeni' ) ],
];
?>

<main id="sg-main" class="sg-legal-page" role="main">

    <section class="sg-page-hero sg-legal-hero" aria-labelledby="legal-page-heading">
        <div class="container">
            <div class="sg-page-hero-inner">
                <div class="sg-legal-hero-grid">
                    <div class="sg-legal-hero-copy" data-sg-reveal="left">
                        <span class="sg-hero-badge">
                            <i class="fa-solid fa-cookie-bite" aria-hidden="true"></i>
                            <?php esc_html_e( 'Yasal Bilgilendirme', 'seogezegeni' ); ?>
                        </span>
                        <h1 id="legal-page-heading"><?php the_title(); ?></h1>
                        <p><?php esc_html_e( 'SEO Gezegeni web sitesinde hangi çerezleri, hangi amaçlarla kullandığımızı ve bunları nasıl yönetebileceğinizi bu sayfada bulabilirsiniz.', 'seogezegeni' ); ?></p>
                    </div>

                    <div class="sg-legal-hero-panel" data-sg-reveal="right" aria-label="<?php esc_attr_e( 'Sayfa özeti', 'seogezegeni' ); ?>">
                        <?php foreach ( $legal_items as $item ) : ?>
                            <div class="sg-legal-summary-item">
                                <span aria-hidden="true"><i class="<?php echo esc_attr( $item['icon'] ); ?>"></i></span>
                                <div>
                                    <strong><?php echo esc_html( $item['title'] ); ?></strong>
                                    <em><?php echo esc_html( $item['desc'] ); ?></em>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="sg-breadcrumb-bar">
        <div class="container"><?php seogezegeni_breadcrumb(); ?></div>
    </div>

    <section class="sg-legal-content section-pad dark-section">
        <div class="container">
            <article id="post-<?php the_ID(); ?>" <?php post_class( 'sg-post-body sg-legal-body' ); ?>>
                <div class="sg-post-body-content">
                    <?php if ( '' !== trim( wp_strip_all_tags( get_the_content() ) ) ) : ?>
                        <?php the_content(); ?>
                    <?php else : ?>

                        <p><?php esc_html_e( 'Bu Çerez Politikası, seogezegeni.com web sitesini ziyaret ettiğinizde cihazınıza yerleştirilen çerezlerin ve benzeri teknolojilerin nasıl kullanıldığını açıklar. Politika, 6698 sayılı Kişisel Verilerin Korunması Kanunu (KVKK) ve ilgili mevzuata uygun olarak hazırlanmıştır.', 'seogezegeni' ); ?></p>

                        <h2><?php esc_html_e( '1. Çerez Nedir?', 'seogezegeni' ); ?></h2>
                        <p><?php esc_html_e( 'Çerezler, bir web sitesini ziyaret ettiğinizde tarayıcınız aracılığıyla cihazınıza (bilgisayar, tablet veya telefon) kaydedilen küçük metin dosyalarıdır. Siteyi hatırlamasına, tercihlerinizi saklamasına ve ziyaret deneyiminizi iyileştirmesine yardımcı olurlar.', 'seogezegeni' ); ?></p>

                        <h2><?php esc_html_e( '2. Hangi Çerezleri Kullanıyoruz?', 'seogezegeni' ); ?></h2>
                        <h3><?php esc_html_e( 'Zorunlu çerezler', 'seogezegeni' ); ?></h3>
                        <p><?php esc_html_e( 'Sitenin temel işlevlerinin çalışması, formların güvenli şekilde gönderilmesi ve güvenlik doğrulamaları için gereklidir. Bu çerezler olmadan site düzgün çalışmaz ve açık rıza gerektirmez.', 'seogezegeni' ); ?></p>
                        <h3><?php esc_html_e( 'Performans ve analiz çerezleri', 'seogezegeni' ); ?></h3>
                        <p><?php esc_html_e( 'Ziyaretçilerin siteyi nasıl kullandığını (hangi sayfaların ziyaret edildiği, ne kadar süre kalındığı vb.) anonim olarak ölçmemizi sağlar. Google Analytics gibi araçlar bu kapsamda kullanılabilir.', 'seogezegeni' ); ?></p>
                        <h3><?php esc_html_e( 'İşlevsellik çerezleri', 'seogezegeni' ); ?></h3>
                        <p><?php esc_html_e( 'Dil, bölge veya daha önce girdiğiniz bilgiler gibi tercihlerinizi hatırlayarak size daha kişiselleştirilmiş bir deneyim sunar.', 'seogezegeni' ); ?></p>
                        <h3><?php esc_html_e( 'Pazarlama ve reklam çerezleri', 'seogezegeni' ); ?></h3>
                        <p><?php esc_html_e( 'İlgi alanlarınıza uygun reklamlar göstermek ve reklam kampanyalarının etkinliğini ölçmek için Google Ads ve Meta (Facebook/Instagram) gibi üçüncü taraf hizmetler tarafından yerleştirilebilir.', 'seogezegeni' ); ?></p>

                        <h2><?php esc_html_e( '3. Çerezleri Ne Kadar Süre Saklıyoruz?', 'seogezegeni' ); ?></h2>
                        <p><?php esc_html_e( 'Oturum çerezleri tarayıcınızı kapattığınızda silinir. Kalıcı çerezler ise türüne göre belirli bir süre (genellikle birkaç gün ile 24 ay arasında) cihazınızda kalır veya siz silene kadar saklanır.', 'seogezegeni' ); ?></p>

                        <h2><?php esc_html_e( '4. Üçüncü Taraf Çerezleri', 'seogezegeni' ); ?></h2>
                        <p><?php esc_html_e( 'Sitemizde Google, Meta gibi üçüncü taraf hizmet sağlayıcıların analiz ve reklam çerezleri yer alabilir. Bu çerezlerin kullanımı ilgili sağlayıcıların kendi gizlilik politikalarına tabidir.', 'seogezegeni' ); ?></p>

                        <h2><?php esc_html_e( '5. Çerezleri Nasıl Yönetebilirsiniz?', 'seogezegeni' ); ?></h2>
                        <p><?php esc_html_e( 'Çerezleri tarayıcı ayarlarınızdan dilediğiniz zaman silebilir, engelleyebilir veya çerez kaydedilmeden önce uyarı almayı seçebilirsiniz. Zorunlu çerezleri devre dışı bırakmanız halinde sitenin bazı bölümleri düzgün çalışmayabilir. Başlıca tarayıcılar için ayarlar:', 'seogezegeni' ); ?></p>
                        <ul>
                            <li><a href="https://support.google.com/chrome/answer/95647" target="_blank" rel="noopener">Google Chrome</a></li>
                            <li><a href="https://support.mozilla.org/tr/kb/cerezleri-silme-web-sitelerinin-bilgilerini-kaldirma" target="_blank" rel="noopener">Mozilla Firefox</a></li>
                            <li><a href="https://support.apple.com/tr-tr/guide/safari/sfri11471/mac" target="_blank" rel="noopener">Safari</a></li>
                            <li><a href="https://support.microsoft.com/tr-tr/microsoft-edge" target="_blank" rel="noopener">Microsoft Edge</a></li>
                        </ul>
                        <p><?php esc_html_e( 'Google Analytics takibini tamamen devre dışı bırakmak için Google Analytics Opt-out Browser Add-on eklentisini de kullanabilirsiniz.', 'seogezegeni' ); ?></p>

                        <h2><?php esc_html_e( '6. KVKK Kapsamındaki Haklarınız', 'seogezegeni' ); ?></h2>
                        <p><?php esc_html_e( 'KVKK’nın 11. maddesi uyarınca; kişisel verilerinizin işlenip işlenmediğini öğrenme, işlenmişse bilgi talep etme, düzeltilmesini veya silinmesini isteme gibi haklara sahipsiniz. Taleplerinizi aşağıdaki e-posta adresi üzerinden bize iletebilirsiniz.', 'seogezegeni' ); ?></p>

                        <h2><?php esc_html_e( '7. Politika Değişiklikleri', 'seogezegeni' ); ?></h2>
                        <p><?php esc_html_e( 'Bu politikayı yasal düzenlemelere veya hizmetlerimizdeki değişikliklere bağlı olarak güncelleyebiliriz. Güncel sürüm her zaman bu sayfada yayımlanır.', 'seogezegeni' ); ?></p>

                        <h2><?php esc_html_e( '8. İletişim', 'seogezegeni' ); ?></h2>
                        <p>
                            <?php esc_html_e( 'Çerez politikamızla ilgili sorularınız için bize ulaşabilirsiniz:', 'seogezegeni' ); ?>
                            <a href="mailto:<?php echo esc_attr( $email ); ?>"><?php echo esc_html( $email ); ?></a>
                        </p>

                    <?php endif; ?>
                </div>
            </article>
        </div>
    </section>

    <?php get_template_part( 'template-parts/pre-footer-cta' ); ?>
    <?php get_template_part( 'template-parts/pre-footer-contact' ); ?>

</main>

<?php get_footer(); ?>
