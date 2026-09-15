<?php
/**
 * Template Name: Web Tasarim ve Yazilim Sayfasi
 * Template Post Type: page
 *
 * Web tasarim ve yazilim gelistirme hizmet sayfasi ozel sablonu.
 */

defined( 'ABSPATH' ) || exit;

get_header();

if ( have_posts() ) {
    the_post();
}

$web_stats = [
    [ 'value' => 'SEO', 'label' => __( 'Arama motoru uyumlu teknik altyapı', 'seogezegeni' ) ],
    [ 'value' => 'UX', 'label' => __( 'Kullanıcı deneyimi ve dönüşüm odaklı tasarım', 'seogezegeni' ) ],
    [ 'value' => '6', 'label' => __( 'Analizden desteğe proje adımı', 'seogezegeni' ) ],
];

$benefits = [
    [ 'fa-solid fa-magnifying-glass-chart', __( 'Organik trafik kazanımını destekler.', 'seogezegeni' ) ],
    [ 'fa-solid fa-rectangle-ad', __( 'Reklam kampanyalarının verimini artırır.', 'seogezegeni' ) ],
    [ 'fa-solid fa-user-plus', __( 'Potansiyel müşterileri doğru yönlendirir.', 'seogezegeni' ) ],
    [ 'fa-solid fa-shield-halved', __( 'Marka güvenini güçlendirir.', 'seogezegeni' ) ],
    [ 'fa-solid fa-gears', __( 'İş süreçlerini kolaylaştırır.', 'seogezegeni' ) ],
    [ 'fa-solid fa-layer-group', __( 'Uzun yıllar geliştirilebilir altyapı sağlar.', 'seogezegeni' ) ],
];

$web_services = [
    [ 'fa-solid fa-building', __( 'Kurumsal Web Tasarım', 'seogezegeni' ), __( 'Marka kimliğine uygun özgün tasarım, kolay kullanılabilir bilgi mimarisi, güçlü içerik hiyerarşisi, mobil uyum ve SEO dostu sayfa yapısı birlikte planlanır.', 'seogezegeni' ) ],
    [ 'fa-solid fa-magnifying-glass-chart', __( 'SEO Uyumlu Web Tasarım', 'seogezegeni' ), __( 'Temiz kod yapısı, mantıksal URL mimarisi, doğru başlık hiyerarşisi, yapılandırılmış veri, hızlı yükleme ve taranabilir içerik yapısı ilk aşamadan itibaren kurgulanır.', 'seogezegeni' ) ],
    [ 'fa-solid fa-mobile-screen-button', __( 'Mobil Uyumlu Web Tasarım', 'seogezegeni' ), __( 'Farklı ekran çözünürlükleri, dokunmatik kullanım, mobil performans, okunabilir tipografi ve esnek grid sistemleri kullanıcı deneyimine göre optimize edilir.', 'seogezegeni' ) ],
    [ 'fa-solid fa-bullseye', __( 'Landing Page Tasarımı', 'seogezegeni' ), __( 'Google Ads, Meta reklamları, e-posta pazarlaması, kampanya yönetimi ve ürün lansmanları için hızlı, güven veren ve dönüşüm odaklı açılış sayfaları hazırlanır.', 'seogezegeni' ) ],
    [ 'fa-solid fa-cart-shopping', __( 'E-Ticaret Web Sitesi', 'seogezegeni' ), __( 'Kategori mimarisi, ürün sayfası optimizasyonu, hızlı ödeme süreçleri, güvenli altyapı, mobil alışveriş deneyimi, gelişmiş filtreleme ve pazaryeri entegrasyonları planlanır.', 'seogezegeni' ) ],
    [ 'fa-brands fa-wordpress', __( 'WordPress Web Siteleri', 'seogezegeni' ), __( 'Gereksiz eklenti kullanımını sınırlandıran, performans odaklı, güvenli, SEO dostu ve ölçeklenebilir WordPress altyapıları oluşturulur.', 'seogezegeni' ) ],
    [ 'fa-solid fa-pen-to-square', __( 'İçerik Yönetim Sistemleri', 'seogezegeni' ), __( 'Sayfa düzenleme, blog ekleme, görsel güncelleme ve içerik yönetimi teknik bilgi gerektirmeden yapılabilecek şekilde tasarlanır.', 'seogezegeni' ) ],
    [ 'fa-solid fa-chart-line', __( 'Dönüşüm Odaklı Web Tasarımı', 'seogezegeni' ), __( 'CTA yerleşimleri, form uzunlukları, güven unsurları, referans alanları, kullanıcı akışları ve içerik sıralaması düzenli analizlerle geliştirilir.', 'seogezegeni' ) ],
    [ 'fa-solid fa-lock', __( 'Güvenlik ve Sürdürülebilirlik', 'seogezegeni' ), __( 'SSL, güvenlik güncellemeleri, rol bazlı yetkilendirme, otomatik yedekleme, sunucu güvenliği ve kötü amaçlı yazılım korumaları birlikte planlanır.', 'seogezegeni' ) ],
];

$software_services = [
    [ 'fa-solid fa-users-gear', __( 'CRM Yazılımları', 'seogezegeni' ), __( 'Müşteri kayıtları, teklif süreçleri, satış ekipleri, iletişim geçmişi ve raporlamalar tek merkezden takip edilebilir hale gelir.', 'seogezegeni' ) ],
    [ 'fa-solid fa-gauge-high', __( 'Yönetim Panelleri ve Dashboard', 'seogezegeni' ), __( 'Satış performansı, finansal veriler, sipariş durumları, kullanıcı hareketleri ve operasyon süreçleri anlaşılır panellerle izlenir.', 'seogezegeni' ) ],
    [ 'fa-solid fa-plug-circle-bolt', __( 'ERP ve Sistem Entegrasyonları', 'seogezegeni' ), __( 'Muhasebe, stok, kargo, CRM, ödeme ve mobil uygulama sistemleri güvenli API bağlantılarıyla birbirine bağlanır.', 'seogezegeni' ) ],
    [ 'fa-solid fa-calendar-check', __( 'Rezervasyon ve Randevu Sistemleri', 'seogezegeni' ), __( 'Klinik, eğitim, danışmanlık, güzellik, spor ve turizm işletmeleri için çevrim içi randevu ve süreç takip sistemleri geliştirilebilir.', 'seogezegeni' ) ],
    [ 'fa-solid fa-truck-ramp-box', __( 'B2B ve Bayi Yönetim Sistemleri', 'seogezegeni' ), __( 'Bayi bazlı fiyatlandırma, iskonto oranları, sipariş limitleri, stok görüntüleme, ödeme vadeleri ve kullanıcı yetkilendirmeleri planlanır.', 'seogezegeni' ) ],
    [ 'fa-solid fa-robot', __( 'Yapay Zeka Destekli Yazılım', 'seogezegeni' ), __( 'Akıllı arama, belge sınıflandırma, müşteri destek asistanları, öneri motorları, otomatik raporlama ve süreç otomasyonları iş akışlarını hızlandırır.', 'seogezegeni' ) ],
];

$tech_cards = [
    [ 'fa-brands fa-laravel', __( 'Laravel', 'seogezegeni' ), __( 'CRM, ERP entegrasyonları, B2B platformları, yönetim panelleri, rezervasyon sistemleri ve özel iş uygulamaları için güçlü bir altyapı sunar.', 'seogezegeni' ) ],
    [ 'fa-brands fa-php', __( 'PHP', 'seogezegeni' ), __( 'Yüksek performans, güvenli veri yönetimi, güçlü API desteği ve hızlı geliştirme süreçleriyle uzun ömürlü sistemler oluşturulabilir.', 'seogezegeni' ) ],
    [ 'fa-brands fa-react', __( 'React', 'seogezegeni' ), __( 'Hızlı, akıcı ve kullanıcı etkileşimi yüksek arayüzler; dinamik içerik, SPA yapıları ve modern kullanıcı deneyimleri için tercih edilir.', 'seogezegeni' ) ],
    [ 'fa-solid fa-code', __( 'Next.js', 'seogezegeni' ), __( 'SSR, SSG ve gelişmiş önbellekleme mekanizmalarıyla SEO ve performans odaklı modern projelerde güçlü sonuçlar üretir.', 'seogezegeni' ) ],
    [ 'fa-brands fa-wordpress', __( 'WordPress', 'seogezegeni' ), __( 'Kurumsal web siteleri, blog projeleri ve içerik odaklı platformlar için doğru yapılandırıldığında esnek ve sürdürülebilir çözümler sağlar.', 'seogezegeni' ) ],
    [ 'fa-solid fa-database', __( 'MySQL', 'seogezegeni' ), __( 'Güvenilir veri saklama, hızlı sorgulama, yüksek performans ve ölçeklenebilir veri yönetimi yazılım projelerinin temelini oluşturur.', 'seogezegeni' ) ],
    [ 'fa-solid fa-cloud', __( 'Cloud Hosting ve CDN', 'seogezegeni' ), __( 'Yüksek erişilebilirlik, esnek kapasite, kesintisiz çalışma, hızlı yükleme ve global içerik dağıtımıyla performans desteklenir.', 'seogezegeni' ) ],
    [ 'fa-solid fa-code-branch', __( 'REST API', 'seogezegeni' ), __( 'ERP, ödeme, kargo, CRM ve mobil uygulama sistemleri güvenli şekilde haberleşerek veri tekrarını ve manuel işleri azaltır.', 'seogezegeni' ) ],
];

$business_types = [
    [ 'fa-solid fa-heart-pulse', __( 'Sağlık Sektörü', 'seogezegeni' ), __( 'Online randevu sistemleri, doktor profilleri, tedavi sayfaları ve KVKK uyumlu formlar güven ve erişilebilirlik odağıyla geliştirilir.', 'seogezegeni' ) ],
    [ 'fa-solid fa-scale-balanced', __( 'Hukuk Büroları', 'seogezegeni' ), __( 'Uzmanlık alanları, güçlü içerik mimarisi, SEO odaklı hizmet sayfaları ve kolay iletişim altyapısı öncelikli planlanır.', 'seogezegeni' ) ],
    [ 'fa-solid fa-building', __( 'İnşaat ve Gayrimenkul', 'seogezegeni' ), __( 'Referans projeler, portföy yönetimi, proje filtreleme, teklif formları ve yatırımcı odaklı sayfa yapıları geliştirilir.', 'seogezegeni' ) ],
    [ 'fa-solid fa-industry', __( 'Üretim ve Sanayi', 'seogezegeni' ), __( 'Ürün katalogları, teknik dokümanlar, bayi sistemleri, teklif talepleri ve çok dilli yapılar ihracat ve kurumsal iletişimi destekler.', 'seogezegeni' ) ],
    [ 'fa-solid fa-plane-departure', __( 'Turizm', 'seogezegeni' ), __( 'Oteller, seyahat acenteleri ve turizm işletmeleri için rezervasyon, kampanya, çok dilli yapı ve mobil uyumlu deneyimler oluşturulur.', 'seogezegeni' ) ],
    [ 'fa-solid fa-graduation-cap', __( 'Eğitim', 'seogezegeni' ), __( 'Online başvuru sistemleri, eğitim programları, öğretmen profilleri, etkinlik yönetimi ve duyuru altyapıları geliştirilebilir.', 'seogezegeni' ) ],
    [ 'fa-solid fa-store', __( 'E-Ticaret Markaları', 'seogezegeni' ), __( 'Ürün filtreleme, kategori yapısı, hızlı ödeme adımları, mobil deneyim ve SEO altyapısı dönüşüm oranlarını doğrudan etkiler.', 'seogezegeni' ) ],
    [ 'fa-solid fa-handshake', __( 'Kurumsal B2B Çözümleri', 'seogezegeni' ), __( 'Kullanıcı yetkilendirme, bayi panelleri, teklif yönetimi, sipariş sistemleri ve ERP entegrasyonları öne çıkar.', 'seogezegeni' ) ],
];

$process_steps = [
    [ __( 'İhtiyaç Analizi ve Strateji', 'seogezegeni' ), __( 'Mevcut altyapı, rakipler, kullanıcı beklentileri, teknik gereksinimler ve büyüme hedefleri analiz edilir.', 'seogezegeni' ) ],
    [ __( 'Bilgi Mimarisi ve UX Planlama', 'seogezegeni' ), __( 'Kullanıcının hangi adımları izleyeceği, içeriklerin nasıl organize edileceği, wireframe ve sayfa akışları planlanır.', 'seogezegeni' ) ],
    [ __( 'UI Tasarımı ve Arayüz Geliştirme', 'seogezegeni' ), __( 'Renk sistemi, tipografi, ikonlar, bileşen yapıları ve görsel hiyerarşi modern tasarım prensipleriyle oluşturulur.', 'seogezegeni' ) ],
    [ __( 'Yazılım Geliştirme', 'seogezegeni' ), __( 'Yönetim panelleri, API entegrasyonları, kullanıcı yetkilendirmeleri, otomasyon sistemleri ve özel modüller geliştirilir.', 'seogezegeni' ) ],
    [ __( 'Test ve Kalite Kontrol', 'seogezegeni' ), __( 'Mobil uyumluluk, tarayıcı desteği, performans, güvenlik, form süreçleri ve kullanıcı senaryoları test edilir.', 'seogezegeni' ) ],
    [ __( 'Yayına Alma ve Sürekli Destek', 'seogezegeni' ), __( 'Performans takibi, güvenlik güncellemeleri, teknik destek, geliştirme talepleri ve yeni modüllerle altyapı canlı tutulur.', 'seogezegeni' ) ],
];

$metrics = [
    [ 'fa-solid fa-gauge-high', __( 'Core Web Vitals', 'seogezegeni' ), __( 'LCP, INP ve CLS değerleri kullanıcı deneyimi ve SEO performansı için optimize edilir.', 'seogezegeni' ) ],
    [ 'fa-solid fa-mobile-screen', __( 'Mobil Kullanılabilirlik', 'seogezegeni' ), __( 'Mobil kullanıcıların menü, içerik, form ve ödeme akışlarını sorunsuz tamamlaması hedeflenir.', 'seogezegeni' ) ],
    [ 'fa-solid fa-percent', __( 'Dönüşüm Oranı', 'seogezegeni' ), __( 'Teklif, arama, WhatsApp, ürün satın alma, randevu ve demo talepleri gibi aksiyonlar ölçülür.', 'seogezegeni' ) ],
    [ 'fa-solid fa-shield-halved', __( 'Güvenlik', 'seogezegeni' ), __( 'SSL, rol bazlı yetki, yedekleme, güncelleme ve kötü amaçlı yazılım korumaları takip edilir.', 'seogezegeni' ) ],
    [ 'fa-solid fa-magnifying-glass-chart', __( 'SEO Altyapısı', 'seogezegeni' ), __( 'HTML yapısı, URL mimarisi, schema, robots.txt, sitemap ve breadcrumb yapıları planlanır.', 'seogezegeni' ) ],
    [ 'fa-solid fa-chart-line', __( 'Kullanıcı Davranışı', 'seogezegeni' ), __( 'GA4, Tag Manager, ısı haritaları ve A/B testleriyle kullanıcı akışları geliştirilir.', 'seogezegeni' ) ],
    [ 'fa-solid fa-layer-group', __( 'Ölçeklenebilirlik', 'seogezegeni' ), __( 'Yeni kullanıcılar, modüller, entegrasyonlar ve büyüme hedefleri için esnek mimari kurulur.', 'seogezegeni' ) ],
    [ 'fa-solid fa-plug', __( 'Entegrasyon Başarısı', 'seogezegeni' ), __( 'ERP, CRM, ödeme, kargo ve üçüncü taraf servislerin güvenli çalışması izlenir.', 'seogezegeni' ) ],
];

$faqs = [
    [ __( 'Web tasarım ile web geliştirme arasındaki fark nedir?', 'seogezegeni' ), __( 'Web tasarım kullanıcı arayüzü ve deneyimini kapsar; web geliştirme bu tasarımın yazılım altyapısıyla çalışan bir sisteme dönüştürülmesini ifade eder.', 'seogezegeni' ) ],
    [ __( 'Hazır tema mı, özel tasarım mı tercih edilmeli?', 'seogezegeni' ), __( 'Hazır temalar hızlı çözümler sunabilir; ancak marka kimliği, performans, SEO ve ölçeklenebilirlik açısından özel tasarımlar uzun vadede daha fazla avantaj sağlayabilir.', 'seogezegeni' ) ],
    [ __( 'Özel yazılım geliştirme hangi işletmeler için uygundur?', 'seogezegeni' ), __( 'Standart yazılımların karşılamadığı iş süreçlerine sahip veya operasyonlarını dijitalleştirmek isteyen işletmeler için özel yazılım çözümleri avantaj sağlar.', 'seogezegeni' ) ],
    [ __( 'Web sitesi SEO uyumlu olarak geliştirilebilir mi?', 'seogezegeni' ), __( 'Evet. Teknik SEO kriterleri, sayfa yapısı, URL mimarisi, mobil uyumluluk ve performans optimizasyonları proje geliştirme sürecinin başından itibaren planlanabilir.', 'seogezegeni' ) ],
    [ __( 'Web sitesi tamamlandıktan sonra destek veriyor musunuz?', 'seogezegeni' ), __( 'Evet. Yayın sonrası teknik destek, güvenlik güncellemeleri, performans iyileştirmeleri ve yeni geliştirme talepleri doğrultusunda projeleri desteklemeye devam ediyoruz.', 'seogezegeni' ) ],
    [ __( 'Web sitesi ne kadar sürede tamamlanır?', 'seogezegeni' ), __( 'Projenin kapsamı, sayfa sayısı, tasarım detayları ve yazılım ihtiyaçlarına göre süre değişebilir. Analiz aşamasında proje takvimi net olarak planlanır.', 'seogezegeni' ) ],
    [ __( 'WordPress mi, özel yazılım mı daha avantajlıdır?', 'seogezegeni' ), __( 'İçerik odaklı projelerde WordPress etkili olabilir; gelişmiş entegrasyon ve özel iş süreçleri gereken projelerde özel yazılım daha uygun olabilir.', 'seogezegeni' ) ],
];
?>

<main id="sg-main" class="sg-seo-page sg-web-page" role="main">

    <section class="sg-page-hero sg-seo-hero sg-web-hero" aria-labelledby="web-page-heading">
        <div class="container">
            <div class="sg-seo-hero-grid">
                <div class="sg-seo-hero-copy" data-sg-reveal="left">
                    <span class="sg-hero-badge"><i class="fa-solid fa-laptop-code" aria-hidden="true"></i><?php esc_html_e( 'Web Tasarım ve Yazılım Geliştirme', 'seogezegeni' ); ?></span>
                    <h1 id="web-page-heading"><?php esc_html_e( 'Profesyonel Web Tasarım ve', 'seogezegeni' ); ?><span><?php esc_html_e( 'Özel Yazılım Çözümleri', 'seogezegeni' ); ?></span></h1>
                    <p><?php esc_html_e( 'SEO uyumlu, mobil uyumlu, hızlı, güvenli ve dönüşüm odaklı web siteleri ile işletmenize özel yazılım altyapıları geliştiriyoruz.', 'seogezegeni' ); ?></p>
                    <div class="sg-seo-hero-actions">
                        <a href="<?php echo esc_url( home_url( '/iletisim/' ) ); ?>" class="sg-btn sg-btn-primary"><i class="fa-solid fa-paper-plane" aria-hidden="true"></i><?php esc_html_e( 'Proje Teklifi Al', 'seogezegeni' ); ?></a>
                        <a href="#web-sureci" class="sg-btn sg-btn-outline"><i class="fa-solid fa-route" aria-hidden="true"></i><?php esc_html_e( 'Süreci İncele', 'seogezegeni' ); ?></a>
                    </div>
                </div>

                <div class="sg-seo-hero-visual sg-web-visual" data-sg-reveal="right" aria-hidden="true">
                    <div class="sg-web-browser">
                        <div class="sg-web-browser-bar"><span></span><span></span><span></span></div>
                        <div class="sg-web-layout">
                            <strong>UX</strong><strong>SEO</strong><strong>CRO</strong>
                            <em></em><em></em><em></em><em></em>
                        </div>
                    </div>
                    <div class="sg-seo-dashboard sg-web-dashboard">
                        <div class="sg-seo-searchbar"><i class="fa-solid fa-code"></i><span>performant website</span></div>
                        <div class="sg-seo-result is-active"><strong>LCP</strong><span>Hızlı yükleme</span><em>1.8s</em></div>
                        <div class="sg-seo-result"><strong>CRO</strong><span>Dönüşüm odaklı akış</span><em>+%39</em></div>
                        <div class="sg-seo-chart"><span style="height:48%"></span><span style="height:66%"></span><span style="height:72%"></span><span style="height:86%"></span><span style="height:98%"></span></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="sg-breadcrumb-bar"><div class="container"><?php seogezegeni_breadcrumb(); ?></div></div>

    <section class="sg-seo-intro section-pad light-section"><div class="container"><div class="sg-seo-split">
        <div data-sg-reveal="left"><?php sg_section_head( __( 'Web Tasarım Neden Bir Dijital Yatırımdır?', 'seogezegeni' ), __( 'Güven Veren, Hızlı ve <span class="text-accent">Büyümeyi Destekleyen</span> Dijital Altyapı', 'seogezegeni' ), '', false, true ); ?>
            <div class="sg-seo-richtext">
                <p><?php esc_html_e( 'Dijital dünyada ilk izlenim artık çoğu zaman web sitesi üzerinden oluşuyor. Potansiyel müşterileriniz markanızla ilk kez çoğu zaman web sitenizde tanışıyor, hizmetlerinizi inceliyor, güvenilirliğinizi değerlendiriyor ve satın alma kararını bu deneyime göre şekillendiriyor.', 'seogezegeni' ); ?></p>
                <p><?php esc_html_e( 'Başarılı bir web sitesi; kullanıcı deneyimi, performans, SEO altyapısı, mobil uyumluluk, güvenlik, içerik mimarisi ve dönüşüm optimizasyonu gibi birçok bileşenin birlikte planlanmasıyla ortaya çıkar.', 'seogezegeni' ); ?></p>
                <p><?php esc_html_e( 'SEO Gezegeni olarak web tasarım ve yazılım projelerini yalnızca tasarım perspektifiyle ele almıyoruz. Her projeyi, işletmenin dijital pazarlama stratejisinin temel yapı taşı olarak değerlendiriyoruz.', 'seogezegeni' ); ?></p>
            </div>
        </div>
        <aside class="sg-seo-stat-panel" data-sg-reveal="right"><?php foreach ( $web_stats as $stat ) : ?><div class="sg-seo-stat"><strong><?php echo esc_html( $stat['value'] ); ?></strong><span><?php echo esc_html( $stat['label'] ); ?></span></div><?php endforeach; ?></aside>
    </div></div></section>

    <section class="sg-seo-benefits section-pad soft-section"><div class="container"><?php sg_section_head( __( 'Avantajlar', 'seogezegeni' ), __( 'Profesyonel Web Tasarımın <span class="text-accent">Sağladığı Avantajlar</span>', 'seogezegeni' ), __( 'Modern web sitesi yalnızca bugünün ihtiyaçlarını değil, gelecekteki büyüme hedeflerini de desteklemelidir.', 'seogezegeni' ), true ); ?><div class="sg-seo-benefit-grid"><?php foreach ( $benefits as $index => $benefit ) : ?><article class="sg-seo-mini-card" data-sg-reveal data-delay="<?php echo esc_attr( ( $index % 3 ) * 120 ); ?>"><i class="<?php echo esc_attr( $benefit[0] ); ?>" aria-hidden="true"></i><h3><?php echo esc_html( $benefit[1] ); ?></h3></article><?php endforeach; ?></div></div></section>

    <section class="sg-seo-components section-pad dark-section"><div class="container"><?php sg_section_head( __( 'Web Tasarım', 'seogezegeni' ), __( 'Web Tasarım <span class="text-accent">Hizmetlerimiz</span>', 'seogezegeni' ), __( 'Her projeyi kullanıcı deneyimi, teknik SEO, performans, güvenlik, dönüşüm optimizasyonu ve sürdürülebilir yazılım altyapısı kapsamında ele alıyoruz.', 'seogezegeni' ), true ); ?><div class="sg-seo-component-grid"><?php foreach ( $web_services as $index => $service ) : ?><article class="sg-seo-component-card" data-sg-reveal data-delay="<?php echo esc_attr( ( $index % 3 ) * 120 ); ?>"><span class="sg-seo-component-icon" aria-hidden="true"><i class="<?php echo esc_attr( $service[0] ); ?>"></i></span><h3><?php echo esc_html( $service[1] ); ?></h3><p><?php echo esc_html( $service[2] ); ?></p></article><?php endforeach; ?></div></div></section>

    <section class="sg-seo-types section-pad light-section"><div class="container"><?php sg_section_head( __( 'Özel Yazılım', 'seogezegeni' ), __( 'Özel Yazılım Geliştirme <span class="text-accent">Hizmetlerimiz</span>', 'seogezegeni' ), __( 'Hazır kalıplar yerine işletmenin mevcut iş akışlarını analiz ederek süreçleri hızlandıran, verimliliği artıran ve ölçeklenebilir dijital sistemler geliştiriyoruz.', 'seogezegeni' ), true, true ); ?><div class="sg-seo-type-grid"><?php foreach ( $software_services as $index => $service ) : ?><article class="sg-seo-type-card" data-sg-reveal data-delay="<?php echo esc_attr( ( $index % 3 ) * 120 ); ?>"><i class="<?php echo esc_attr( $service[0] ); ?>" aria-hidden="true"></i><h3><?php echo esc_html( $service[1] ); ?></h3><p><?php echo esc_html( $service[2] ); ?></p></article><?php endforeach; ?></div></div></section>

    <section class="sg-digital-strategy section-pad soft-section"><div class="container"><?php sg_section_head( __( 'Teknolojiler', 'seogezegeni' ), __( 'Kullandığımız <span class="text-accent">Teknolojiler</span>', 'seogezegeni' ), __( 'Her projede tek bir teknolojiye bağlı kalmadan, ihtiyaca en uygun teknoloji yığınını belirliyoruz.', 'seogezegeni' ), true ); ?><div class="sg-seo-type-grid"><?php foreach ( $tech_cards as $index => $card ) : ?><article class="sg-seo-type-card" data-sg-reveal data-delay="<?php echo esc_attr( ( $index % 4 ) * 100 ); ?>"><i class="<?php echo esc_attr( $card[0] ); ?>" aria-hidden="true"></i><h3><?php echo esc_html( $card[1] ); ?></h3><p><?php echo esc_html( $card[2] ); ?></p></article><?php endforeach; ?></div></div></section>

    <section class="sg-seo-types section-pad dark-section"><div class="container"><?php sg_section_head( __( 'Sektörel Çözümler', 'seogezegeni' ), __( 'Hangi İşletmeler Profesyonel Web Tasarım ve Özel Yazılım Hizmetine <span class="text-accent">İhtiyaç Duyar?</span>', 'seogezegeni' ), __( 'Her sektörün dijital ihtiyaçları farklıdır. Bu nedenle çözümler sektör dinamikleri ve iş süreçlerine göre planlanır.', 'seogezegeni' ), true ); ?><div class="sg-seo-metric-grid"><?php foreach ( $business_types as $type ) : ?><article class="sg-seo-type-card" data-sg-reveal><i class="<?php echo esc_attr( $type[0] ); ?>" aria-hidden="true"></i><h3><?php echo esc_html( $type[1] ); ?></h3><p><?php echo esc_html( $type[2] ); ?></p></article><?php endforeach; ?></div></div></section>

    <section class="sg-seo-measure section-pad soft-section"><div class="container"><?php sg_section_head( __( 'Performans', 'seogezegeni' ), __( 'Web ve Yazılım Başarısı <span class="text-accent">Nasıl Ölçülür?</span>', 'seogezegeni' ), __( 'Başarı yalnızca estetik görünümle değil; hız, güvenlik, SEO, dönüşüm ve ölçeklenebilirlik verileriyle değerlendirilmelidir.', 'seogezegeni' ), true ); ?><div class="sg-seo-metric-grid"><?php foreach ( $metrics as $metric ) : ?><article class="sg-seo-metric-card" data-sg-reveal><i class="<?php echo esc_attr( $metric[0] ); ?>" aria-hidden="true"></i><h3><?php echo esc_html( $metric[1] ); ?></h3><p><?php echo esc_html( $metric[2] ); ?></p></article><?php endforeach; ?></div></div></section>

    <section id="web-sureci" class="sg-seo-process section-pad light-section"><div class="container"><?php sg_section_head( __( 'Süreç', 'seogezegeni' ), __( 'SEO Gezegeni ile Web Tasarım ve Yazılım Geliştirme <span class="text-accent">Sürecimiz</span>', 'seogezegeni' ), __( 'Her proje analiz, planlama, tasarım, geliştirme, test ve sürekli iyileştirme sürecinden oluşan kapsamlı bir yol haritasıyla ilerler.', 'seogezegeni' ), true, true ); ?><div class="sg-seo-timeline"><?php foreach ( $process_steps as $index => $step ) : ?><article class="sg-seo-step" data-sg-reveal><span><?php echo esc_html( sprintf( '%02d', $index + 1 ) ); ?></span><div><h3><?php echo esc_html( $step[0] ); ?></h3><p><?php echo esc_html( $step[1] ); ?></p></div></article><?php endforeach; ?></div></div></section>

    <section class="sg-seo-faq section-pad dark-section"><div class="container"><?php sg_section_head( __( 'Sık Sorulan Sorular', 'seogezegeni' ), __( 'Web Tasarım ve Yazılım Hakkında <span class="text-accent">Merak Edilenler</span>', 'seogezegeni' ), '', true ); ?><div class="sg-seo-faq-grid"><?php foreach ( $faqs as $faq ) : ?><details class="sg-seo-faq-item" data-sg-reveal><summary><?php echo esc_html( $faq[0] ); ?></summary><p><?php echo esc_html( $faq[1] ); ?></p></details><?php endforeach; ?></div></div></section>

    <section class="sg-seo-final-cta section-pad light-section"><div class="container"><div class="sg-seo-cta-panel" data-sg-reveal><span class="sg-hero-badge"><i class="fa-solid fa-rocket" aria-hidden="true"></i><?php esc_html_e( 'Geleceğe Hazır Dijital Altyapı', 'seogezegeni' ); ?></span><h2><?php esc_html_e( 'Güçlü Dijital Altyapılar ile İşletmenizi Geleceğe Taşıyın', 'seogezegeni' ); ?></h2><p><?php esc_html_e( 'Web tasarım, özel yazılım, SEO ve performans pazarlamasını tek bir strateji altında birleştirerek yalnızca modern görünen değil, ölçülebilir sonuçlar üreten dijital çözümler geliştiriyoruz.', 'seogezegeni' ); ?></p><a href="<?php echo esc_url( home_url( '/iletisim/' ) ); ?>" class="sg-btn sg-btn-primary"><i class="fa-solid fa-paper-plane" aria-hidden="true"></i><?php esc_html_e( 'Bizimle İletişime Geçin', 'seogezegeni' ); ?></a></div></div></section>

</main>

<?php
get_template_part( 'template-parts/pre-footer-contact' );
get_footer();
