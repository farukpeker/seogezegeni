<?php
/**
 * Template Name: Sosyal Medya Yonetimi Sayfasi
 * Template Post Type: page
 *
 * Sosyal medya yonetimi hizmet sayfasi ozel sablonu.
 */

defined( 'ABSPATH' ) || exit;

get_header();

if ( have_posts() ) {
    the_post();
}

$social_stats = [
    [ 'value' => '5+', 'label' => __( 'Platform için stratejik yönetim', 'seogezegeni' ) ],
    [ 'value' => '360°', 'label' => __( 'İçerik, topluluk, reklam ve analiz yaklaşımı', 'seogezegeni' ) ],
    [ 'value' => '5', 'label' => __( 'Planlamadan optimizasyona süreç adımı', 'seogezegeni' ) ],
];

$benefits = [
    [ 'fa-solid fa-bullhorn', __( 'Marka bilinirliğini güçlendirir.', 'seogezegeni' ) ],
    [ 'fa-solid fa-shield-heart', __( 'Güven oluşturur.', 'seogezegeni' ) ],
    [ 'fa-solid fa-comments', __( 'Hedef kitleyle etkileşimi artırır.', 'seogezegeni' ) ],
    [ 'fa-solid fa-cart-shopping', __( 'Satış sürecini destekler.', 'seogezegeni' ) ],
    [ 'fa-solid fa-layer-group', __( 'Dijital pazarlama çalışmalarını güçlendirir.', 'seogezegeni' ) ],
    [ 'fa-solid fa-chart-line', __( 'Web sitesi trafiğini ve dönüşümleri destekler.', 'seogezegeni' ) ],
];

$services = [
    [ 'fa-solid fa-compass-drafting', __( 'Sosyal Medya Stratejisi', 'seogezegeni' ), __( 'Sektör analizi, rakip değerlendirmesi, hedef kitle analizi, marka konumlandırması, içerik hedefleri ve platform seçimi birlikte planlanır.', 'seogezegeni' ) ],
    [ 'fa-solid fa-calendar-days', __( 'İçerik Planlaması ve Takvimi', 'seogezegeni' ), __( 'Paylaşım sıklığı, kampanya dönemleri, sezonluk fırsatlar, platformlara uygun içerik dağılımı, hedef kitle ve CTA önceden planlanır.', 'seogezegeni' ) ],
    [ 'fa-solid fa-palette', __( 'Kreatif Tasarım ve Görsel Kimlik', 'seogezegeni' ), __( 'Kurumsal renkler, tipografi, görsel bütünlük, marka dili ve platform dinamikleri birlikte ele alınarak tutarlı bir görsel algı oluşturulur.', 'seogezegeni' ) ],
    [ 'fa-brands fa-instagram', __( 'Instagram ve Facebook Yönetimi', 'seogezegeni' ), __( 'Hesap optimizasyonu, içerik planlaması, Reels stratejisi, hikaye yönetimi, etkileşim çalışmaları ve topluluk iletişimi birlikte yürütülür.', 'seogezegeni' ) ],
    [ 'fa-solid fa-users', __( 'Topluluk Yönetimi', 'seogezegeni' ), __( 'Yorum, mesaj, olumsuz geri bildirim, etkileşim ve marka sadakati süreçleri profesyonel iletişim diliyle yönetilir.', 'seogezegeni' ) ],
    [ 'fa-solid fa-rectangle-ad', __( 'Sosyal Medya Reklam Desteği', 'seogezegeni' ), __( 'Organik içerikler marka güvenini desteklerken reklam kampanyaları hedef kitleye daha hızlı ulaşmayı, trafik ve potansiyel müşteri kazanımını sağlar.', 'seogezegeni' ) ],
    [ 'fa-solid fa-handshake-angle', __( 'Influencer ve Creator İş Birlikleri', 'seogezegeni' ), __( 'Doğru içerik üreticisi seçimi, hedef kitle analizi, marka uyumu ve performans ölçümü bu sürecin temelini oluşturur.', 'seogezegeni' ) ],
    [ 'fa-solid fa-triangle-exclamation', __( 'Kriz İletişimi ve Dijital İtibar', 'seogezegeni' ), __( 'Olumsuz yorumlar, beklenmedik gelişmeler ve marka algısını etkileyebilecek durumlar için hızlı ve şeffaf iletişim senaryoları hazırlanır.', 'seogezegeni' ) ],
    [ 'fa-solid fa-chart-simple', __( 'Performans Analizi', 'seogezegeni' ), __( 'Erişim, gösterim, etkileşim oranı, kaydetme, profil ziyareti, bağlantı tıklaması, dönüşüm ve kullanıcı davranışları birlikte değerlendirilir.', 'seogezegeni' ) ],
];

$strategy_cards = [
    [ 'fa-solid fa-user-check', __( 'Hedef Kitle ve Persona', 'seogezegeni' ), __( 'Hangi platformların öncelikli kullanılacağı, kullanıcıların nasıl hitap edileceği, içerik türleri, paylaşım zamanları ve reklam hedefleri belirlenir.', 'seogezegeni' ) ],
    [ 'fa-solid fa-table-columns', __( 'İçerik Sütunları', 'seogezegeni' ), __( 'Bilgilendirici içerikler, deneyimler, sık sorulan sorular, ürün süreçleri, referans projeler ve uzmanlık alanları marka hedeflerine göre ayrıştırılır.', 'seogezegeni' ) ],
    [ 'fa-solid fa-microphone-lines', __( 'Marka Dili', 'seogezegeni' ), __( 'Samimi, kurumsal, teknik veya eğitici iletişim dili; hedef kitlenin beklentileri, sektör dinamikleri, marka değerleri ve görsel kimlikle uyumlu kurgulanır.', 'seogezegeni' ) ],
    [ 'fa-solid fa-video', __( 'Kısa Video İçerikleri', 'seogezegeni' ), __( 'Instagram Reels, YouTube Shorts, TikTok ve Facebook Reels gibi formatlarda eğitici, ilham verici ve etkileşim odaklı içerikler planlanır.', 'seogezegeni' ) ],
    [ 'fa-solid fa-people-group', __( 'Topluluk Oluşturma', 'seogezegeni' ), __( 'Takipçi sayısından çok yorumlara yanıt veren, geri bildirimleri dikkate alan, içerik üretimini teşvik eden ve düzenli etkileşim kuran topluluklar hedeflenir.', 'seogezegeni' ) ],
    [ 'fa-solid fa-brain', __( 'Yapay Zeka Destekli Yönetim', 'seogezegeni' ), __( 'İçerik fikirleri, paylaşım zamanları, segmentasyon ve performans değerlendirmesi yapay zeka destekli araçlarla desteklenir; nihai strateji insan dokunuşuyla şekillenir.', 'seogezegeni' ) ],
];

$business_types = [
    [ 'fa-solid fa-building', __( 'Kurumsal Firmalar', 'seogezegeni' ), __( 'Marka itibarı, kurumsal iletişim, sektör liderliği ve güven algısı; düzenli içerik üretimi ve profesyonel iletişim diliyle güçlendirilir.', 'seogezegeni' ) ],
    [ 'fa-solid fa-store', __( 'E-Ticaret Markaları', 'seogezegeni' ), __( 'Ürün tanıtımları, kullanıcı deneyimleri, kısa videolar, kampanya duyuruları ve reklam çalışmaları satış süreçlerini destekleyen güçlü bir kanala dönüşür.', 'seogezegeni' ) ],
    [ 'fa-solid fa-heart-pulse', __( 'Sağlık Kuruluşları', 'seogezegeni' ), __( 'Bilgilendirici içerikler, hekim tanıtımları, tedavi süreçleri ve hasta deneyimleri doğru iletişim diliyle marka güvenini güçlendirir.', 'seogezegeni' ) ],
    [ 'fa-solid fa-scale-balanced', __( 'Hukuk Büroları', 'seogezegeni' ), __( 'Güncel hukuki gelişmeler, sık sorular, mevzuat değişiklikleri ve bilgilendirici içerikler hedef kitleyle güven odaklı iletişim kurar.', 'seogezegeni' ) ],
    [ 'fa-solid fa-industry', __( 'Üretim ve B2B Firmaları', 'seogezegeni' ), __( 'Üretim süreçleri, kalite standartları, fabrika görüntüleri, referans projeler ve ihracat başarıları kurumsal güveni artırır.', 'seogezegeni' ) ],
];

$metrics = [
    [ 'fa-solid fa-signal', __( 'Erişim ve Gösterim', 'seogezegeni' ), __( 'İçeriklerin kaç kişiye ulaştığı ve ne sıklıkta görüntülendiği izlenir.', 'seogezegeni' ) ],
    [ 'fa-solid fa-comments', __( 'Etkileşim Oranı', 'seogezegeni' ), __( 'Beğeni, yorum, paylaşım ve kaydetme davranışları analiz edilir.', 'seogezegeni' ) ],
    [ 'fa-solid fa-bookmark', __( 'Kaydetme ve Paylaşım', 'seogezegeni' ), __( 'İçeriğin kullanıcıya gerçek değer sunup sunmadığı bu sinyallerle okunur.', 'seogezegeni' ) ],
    [ 'fa-solid fa-user', __( 'Profil Ziyaretleri', 'seogezegeni' ), __( 'İçeriğin markaya merak ve araştırma davranışı yaratma gücü ölçülür.', 'seogezegeni' ) ],
    [ 'fa-solid fa-link', __( 'Web Sitesi Tıklamaları', 'seogezegeni' ), __( 'Sosyal medya trafiğinin web sitesi ziyaretlerine etkisi değerlendirilir.', 'seogezegeni' ) ],
    [ 'fa-solid fa-user-plus', __( 'Potansiyel Müşteri', 'seogezegeni' ), __( 'Lead sayısı ve dönüşüm oranları pazarlama hedefleriyle birlikte takip edilir.', 'seogezegeni' ) ],
    [ 'fa-solid fa-video', __( 'Video İzlenme Süresi', 'seogezegeni' ), __( 'Kısa video içeriklerinin dikkat çekme ve kullanıcıyı tutma başarısı ölçülür.', 'seogezegeni' ) ],
    [ 'fa-solid fa-people-arrows', __( 'Topluluk Büyüme Oranı', 'seogezegeni' ), __( 'Takipçi kazanımı, etkileşim kalitesi ve topluluk bağlılığı birlikte yorumlanır.', 'seogezegeni' ) ],
];

$process_steps = [
    [ __( 'Marka ve Sektör Analizi', 'seogezegeni' ), __( 'Markanız, sektörünüz, hedef kitleniz ve rakipleriniz detaylı olarak analiz edilir.', 'seogezegeni' ) ],
    [ __( 'Strateji ve Yol Haritası', 'seogezegeni' ), __( 'İçerik stratejisi, platform öncelikleri, iletişim dili ve performans hedefleri belirlenir.', 'seogezegeni' ) ],
    [ __( 'İçerik Üretimi', 'seogezegeni' ), __( 'Marka kimliğine uygun metinler, kreatif tasarımlar, video içerikleri ve paylaşım planları hazırlanır.', 'seogezegeni' ) ],
    [ __( 'Yayın ve Topluluk Yönetimi', 'seogezegeni' ), __( 'İçerikler takvime göre yayınlanır, yorum ve mesajlar takip edilerek marka iletişimi sürdürülür.', 'seogezegeni' ) ],
    [ __( 'Analiz ve Optimizasyon', 'seogezegeni' ), __( 'Paylaşım performansları düzenli analiz edilir ve içerik stratejisi elde edilen verilere göre geliştirilir.', 'seogezegeni' ) ],
];

$faqs = [
    [ __( 'Sosyal medya yönetimi hangi platformları kapsar?', 'seogezegeni' ), __( 'Instagram, Facebook, LinkedIn, TikTok, X ve diğer sosyal medya platformları için strateji oluşturulabilir. Platform seçimi sektörünüze ve pazarlama hedeflerinize göre yapılır.', 'seogezegeni' ) ],
    [ __( 'Her gün paylaşım yapmak gerekir mi?', 'seogezegeni' ), __( 'Hayır. Önemli olan paylaşım sayısı değil, içeriklerin kalitesi, düzeni ve hedef kitleniz için oluşturduğu değerdir.', 'seogezegeni' ) ],
    [ __( 'İçerikler markaya özel hazırlanıyor mu?', 'seogezegeni' ), __( 'Evet. Marka hedefi, iletişim dili ve pazarlama hedefleri analiz edilerek özgün içerikler hazırlanır.', 'seogezegeni' ) ],
    [ __( 'Sosyal medya reklamları yönetime dahil midir?', 'seogezegeni' ), __( 'İhtiyaca göre organik içerik yönetimi ile reklam kampanyaları birlikte planlanabilir.', 'seogezegeni' ) ],
    [ __( 'Sosyal medya yönetiminin sonuçları ne kadar sürede görülür?', 'seogezegeni' ), __( 'Süre; sektör, rekabet düzeyi, içerik kalitesi ve hedeflere göre değişir. Düzenli ve stratejik çalışmalar uzun vadede daha sürdürülebilir sonuçlar sunar.', 'seogezegeni' ) ],
    [ __( 'Sosyal medya yönetimi SEO çalışmalarına katkı sağlar mı?', 'seogezegeni' ), __( 'Sosyal medya doğrudan bir sıralama faktörü olmasa da marka bilinirliği, içerik keşfi, web sitesi trafiği ve güven sinyalleri açısından SEO çalışmalarını destekleyebilir.', 'seogezegeni' ) ],
    [ __( 'Profesyonel sosyal medya yönetimi küçük işletmeler için uygun mudur?', 'seogezegeni' ), __( 'Evet. Doğru planlanmış sosyal medya çalışmaları küçük ve orta ölçekli işletmelerin hedef kitlelerine daha düşük maliyetlerle ulaşmasına yardımcı olabilir.', 'seogezegeni' ) ],
];
?>

<main id="sg-main" class="sg-seo-page sg-social-page" role="main">

    <section class="sg-page-hero sg-seo-hero sg-social-hero" aria-labelledby="social-page-heading">
        <div class="container">
            <div class="sg-seo-hero-grid">
                <div class="sg-seo-hero-copy" data-sg-reveal="left">
                    <span class="sg-hero-badge">
                        <i class="fa-solid fa-share-nodes" aria-hidden="true"></i>
                        <?php esc_html_e( 'Profesyonel Sosyal Medya Ajansı', 'seogezegeni' ); ?>
                    </span>
                    <h1 id="social-page-heading">
                        <?php esc_html_e( 'Sosyal Medya Yönetimi ve', 'seogezegeni' ); ?>
                        <span><?php esc_html_e( 'Marka İletişimi', 'seogezegeni' ); ?></span>
                    </h1>
                    <p><?php esc_html_e( 'İçerik stratejisi, kreatif tasarım, topluluk yönetimi, reklam desteği ve performans analiziyle markanızın sosyal medya varlığını sürdürülebilir büyümeye dönüştürüyoruz.', 'seogezegeni' ); ?></p>
                    <div class="sg-seo-hero-actions">
                        <a href="<?php echo esc_url( home_url( '/iletisim/' ) ); ?>" class="sg-btn sg-btn-primary">
                            <i class="fa-solid fa-paper-plane" aria-hidden="true"></i>
                            <?php esc_html_e( 'Sosyal Medya Planı Al', 'seogezegeni' ); ?>
                        </a>
                        <a href="#sosyal-surec" class="sg-btn sg-btn-outline">
                            <i class="fa-solid fa-route" aria-hidden="true"></i>
                            <?php esc_html_e( 'Süreci İncele', 'seogezegeni' ); ?>
                        </a>
                    </div>
                </div>

                <div class="sg-seo-hero-visual sg-social-visual" data-sg-reveal="right" aria-hidden="true">
                    <div class="sg-social-phone">
                        <div class="sg-social-phone-head"></div>
                        <div class="sg-social-post">
                            <span><i class="fa-brands fa-instagram"></i></span>
                            <strong>Reels</strong>
                            <em>+%68 etkileşim</em>
                        </div>
                        <div class="sg-social-post">
                            <span><i class="fa-brands fa-linkedin-in"></i></span>
                            <strong>LinkedIn</strong>
                            <em>B2B görünürlük</em>
                        </div>
                        <div class="sg-social-post">
                            <span><i class="fa-brands fa-facebook-f"></i></span>
                            <strong>Topluluk</strong>
                            <em>Mesaj & yorum</em>
                        </div>
                    </div>
                    <div class="sg-seo-dashboard sg-social-dashboard">
                        <div class="sg-seo-searchbar"><i class="fa-solid fa-chart-line"></i><span>social performance</span></div>
                        <div class="sg-seo-result is-active"><strong>ER</strong><span>Etkileşim oranı</span><em>+%44</em></div>
                        <div class="sg-seo-result"><strong>CTR</strong><span>Web sitesi tıklaması</span><em>+%31</em></div>
                        <div class="sg-seo-chart"><span style="height:44%"></span><span style="height:58%"></span><span style="height:72%"></span><span style="height:88%"></span><span style="height:96%"></span></div>
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
                        __( 'Sosyal Medya Yönetimi Nedir?', 'seogezegeni' ),
                        __( 'Markanızın Dijital İletişimini <span class="text-accent">Stratejik Hale Getirin</span>', 'seogezegeni' ),
                        '',
                        false,
                        true
                    );
                    ?>
                    <div class="sg-seo-richtext">
                        <p><?php esc_html_e( 'Sosyal medya yönetimi; markaların Instagram, Facebook, LinkedIn ve diğer platformlardaki tüm iletişim süreçlerinin planlanması, uygulanması, analiz edilmesi ve sürekli geliştirilmesini kapsayan stratejik bir çalışmadır.', 'seogezegeni' ); ?></p>
                        <p><?php esc_html_e( 'Bu süreç yalnızca içerik paylaşımından ibaret değildir. Marka kimliğinin oluşturulması, içerik stratejisinin belirlenmesi, görsel tasarım, topluluk yönetimi, kullanıcı etkileşimleri, reklam destekleri ve performans analizleri birlikte ele alınır.', 'seogezegeni' ); ?></p>
                        <p><?php esc_html_e( 'SEO Gezegeni olarak sosyal medya yönetimini yalnızca paylaşım planı hazırlayan bir hizmet olarak görmüyoruz. Hedef kitlenizi analiz ederek markanızın iletişim dilini, içerik ritmini ve büyüme hedeflerini ortak bir stratejide buluşturuyoruz.', 'seogezegeni' ); ?></p>
                    </div>
                </div>
                <aside class="sg-seo-stat-panel" data-sg-reveal="right">
                    <?php foreach ( $social_stats as $stat ) : ?>
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
            <?php sg_section_head( __( 'Avantajlar', 'seogezegeni' ), __( 'Sosyal Medya Yönetiminin Markalara <span class="text-accent">Sağladığı Avantajlar</span>', 'seogezegeni' ), __( 'Doğru planlanmış sosyal medya stratejisi görünürlüğü, güveni, etkileşimi ve uzun vadeli büyümeyi destekler.', 'seogezegeni' ), true ); ?>
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
            <?php sg_section_head( __( 'Hizmet Kapsamı', 'seogezegeni' ), __( 'Sosyal Medya Yönetimi <span class="text-accent">Hizmetlerimiz</span>', 'seogezegeni' ), __( 'Markanın hedef kitlesini tanımak, doğru platformlarda görünür olmak ve tüm süreci ölçülebilir sonuçlara dönüştürmek için çalışıyoruz.', 'seogezegeni' ), true ); ?>
            <div class="sg-seo-component-grid">
                <?php foreach ( $services as $index => $service ) : ?>
                    <article class="sg-seo-component-card" data-sg-reveal data-delay="<?php echo esc_attr( ( $index % 3 ) * 120 ); ?>">
                        <span class="sg-seo-component-icon" aria-hidden="true"><i class="<?php echo esc_attr( $service[0] ); ?>"></i></span>
                        <h3><?php echo esc_html( $service[1] ); ?></h3>
                        <p><?php echo esc_html( $service[2] ); ?></p>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="sg-digital-strategy section-pad light-section">
        <div class="container">
            <?php sg_section_head( __( 'Strateji', 'seogezegeni' ), __( 'Başarılı Bir Sosyal Medya Stratejisi <span class="text-accent">Nasıl Oluşturulur?</span>', 'seogezegeni' ), __( 'Başarı; marka hedefleriyle uyumlu, kullanıcı davranışlarına göre şekillenen ve sürekli geliştirilen bir stratejiyle mümkündür.', 'seogezegeni' ), true, true ); ?>
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

    <section class="sg-seo-types section-pad dark-section">
        <div class="container">
            <?php sg_section_head( __( 'Kimler İçin Uygun?', 'seogezegeni' ), __( 'Hangi İşletmeler Profesyonel Sosyal Medya Yönetimine <span class="text-accent">İhtiyaç Duyar?</span>', 'seogezegeni' ), __( 'Her sektörün hedef kitlesi, iletişim dili ve içerik ihtiyacı farklıdır. Bu nedenle sosyal medya yönetimi işletmeye özel planlanmalıdır.', 'seogezegeni' ), true ); ?>
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

    <section class="sg-seo-measure section-pad soft-section">
        <div class="container">
            <?php sg_section_head( __( 'Performans', 'seogezegeni' ), __( 'Sosyal Medya Başarısı <span class="text-accent">Nasıl Ölçülür?</span>', 'seogezegeni' ), __( 'Başarı yalnızca takipçi sayısıyla değil, içeriklerin işletme hedeflerine katkısıyla değerlendirilmelidir.', 'seogezegeni' ), true ); ?>
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

    <section id="sosyal-surec" class="sg-seo-process section-pad light-section">
        <div class="container">
            <?php sg_section_head( __( 'Süreç', 'seogezegeni' ), __( 'SEO Gezegeni ile Sosyal Medya Yönetimi <span class="text-accent">Sürecimiz</span>', 'seogezegeni' ), __( 'Hazır şablonlar yerine işletmenizin hedeflerine uygun, planlı ve ölçülebilir bir sosyal medya süreci kurguluyoruz.', 'seogezegeni' ), true, true ); ?>
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
            <?php sg_section_head( __( 'Sık Sorulan Sorular', 'seogezegeni' ), __( 'Sosyal Medya Yönetimi Hakkında <span class="text-accent">Merak Edilenler</span>', 'seogezegeni' ), '', true ); ?>
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
                <span class="sg-hero-badge"><i class="fa-solid fa-rocket" aria-hidden="true"></i><?php esc_html_e( 'Güçlü Marka Konumlandırması', 'seogezegeni' ); ?></span>
                <h2><?php esc_html_e( 'Markanızı Sosyal Medyada Güçlü Bir Şekilde Konumlandırın', 'seogezegeni' ); ?></h2>
                <p><?php esc_html_e( 'Sosyal medya; doğru strateji, kaliteli içerik üretimi, güçlü marka iletişimi ve sürekli analizle sürdürülebilir bir dijital pazarlama kanalına dönüşür.', 'seogezegeni' ); ?></p>
                <a href="<?php echo esc_url( home_url( '/iletisim/' ) ); ?>" class="sg-btn sg-btn-primary"><i class="fa-solid fa-paper-plane" aria-hidden="true"></i><?php esc_html_e( 'Bizimle İletişime Geçin', 'seogezegeni' ); ?></a>
            </div>
        </div>
    </section>

</main>

<?php
get_template_part( 'template-parts/pre-footer-contact' );
get_footer();
