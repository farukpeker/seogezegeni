<?php
/**
 * SEO sayfasi varsayilan icerigi (page-seo.php icin).
* Panelde bir alan bos birakilirsa bu degerler kullanilir.
 */

defined( 'ABSPATH' ) || exit;

function sg_seo_default_content() {
$seo_stats = [
    [ 'value' => '360°', 'label' => __( 'Bütüncül SEO yaklaşımı', 'seogezegeni' ) ],
    [ 'value' => '10+',  'label' => __( 'Temel optimizasyon alanı', 'seogezegeni' ) ],
    [ 'value' => '5',    'label' => __( 'Süreç adımıyla net yol haritası', 'seogezegeni' ) ],
];

/* SEO Hizmeti Nedir? - bileşenler */
$hizmet_bilesenleri = [
    __( 'Teknik SEO analizleri', 'seogezegeni' ),
    __( 'Anahtar kelime araştırması', 'seogezegeni' ),
    __( 'Rakip analizi', 'seogezegeni' ),
    __( 'Site mimarisi optimizasyonu', 'seogezegeni' ),
    __( 'İçerik stratejisi geliştirme', 'seogezegeni' ),
    __( 'Sayfa içi SEO (On-Page SEO)', 'seogezegeni' ),
    __( 'Sayfa dışı SEO (Off-Page SEO)', 'seogezegeni' ),
    __( 'Yerel SEO çalışmaları', 'seogezegeni' ),
    __( 'Kurumsal SEO planlaması', 'seogezegeni' ),
    __( 'Uluslararası SEO stratejileri', 'seogezegeni' ),
    __( 'Düzenli performans takibi ve raporlama', 'seogezegeni' ),
];

/* Profesyonel SEO Hizmetleri - detaylı akordiyon */
$service_details = [
    [
        'icon'  => 'fa-solid fa-sitemap',
        'title' => __( 'Teknik SEO', 'seogezegeni' ),
        'paras' => [
            __( 'Teknik SEO, arama motorlarının web sitenizi doğru şekilde tarayabilmesi, indeksleyebilmesi ve değerlendirebilmesi için gerçekleştirilen optimizasyon çalışmalarını kapsar. Teknik altyapısı güçlü olmayan bir web sitesinde, en kaliteli içerikler dahi beklenen performansı gösteremeyebilir.', 'seogezegeni' ),
            __( 'Teknik SEO sürecinde öncelikle sitenin mevcut durumu detaylı olarak analiz edilir. Tarama (Crawling), indeksleme (Indexing), yönlendirmeler, URL yapısı, site hızı, mobil uyumluluk ve Core Web Vitals metrikleri incelenerek performansı olumsuz etkileyen unsurlar belirlenir.', 'seogezegeni' ),
        ],
        'list_intro' => __( 'Teknik SEO kapsamında gerçekleştirilen başlıca çalışmalar şunlardır:', 'seogezegeni' ),
        'list' => [
            __( 'XML Sitemap optimizasyonu', 'seogezegeni' ),
            __( 'Robots.txt yapılandırması', 'seogezegeni' ),
            __( 'Canonical etiketlerinin kontrolü', 'seogezegeni' ),
            __( 'HTTP durum kodlarının analizi', 'seogezegeni' ),
            __( '301 ve 302 yönlendirmelerinin düzenlenmesi', 'seogezegeni' ),
            __( 'Kırık bağlantıların tespit edilmesi', 'seogezegeni' ),
            __( 'Sayfa hızının iyileştirilmesi', 'seogezegeni' ),
            __( 'Core Web Vitals optimizasyonu', 'seogezegeni' ),
            __( 'Mobil uyumluluk kontrolleri', 'seogezegeni' ),
            __( 'Yapısal veri (Schema Markup) uygulamaları', 'seogezegeni' ),
            __( 'JavaScript tabanlı sayfaların indekslenebilirlik analizi', 'seogezegeni' ),
            __( 'Crawl Budget yönetimi', 'seogezegeni' ),
            __( 'Log analizi', 'seogezegeni' ),
            __( 'İç bağlantı yapısının optimize edilmesi', 'seogezegeni' ),
        ],
        'closing' => __( 'Teknik SEO yalnızca arama motorlarının web sitesini daha iyi anlamasını sağlamaz; aynı zamanda kullanıcı deneyimini iyileştirerek dönüşüm oranlarının artırılmasına da katkıda bulunur. Özellikle büyük ölçekli web sitelerinde teknik sorunların erken tespit edilmesi, organik performansın sürdürülebilirliği açısından kritik önem taşır.', 'seogezegeni' ),
    ],
    [
        'icon'  => 'fa-solid fa-file-lines',
        'title' => __( 'On-Page SEO (Sayfa İçi SEO)', 'seogezegeni' ),
        'paras' => [
            __( 'Sayfa içi SEO, web sitesindeki her sayfanın hem kullanıcılar hem de arama motorları için en doğru şekilde optimize edilmesini amaçlayan çalışmalardır. Bu süreç yalnızca anahtar kelime yerleştirmekten ibaret değildir; içerik yapısı, bilgi mimarisi ve kullanıcı deneyimi birlikte ele alınmalıdır.', 'seogezegeni' ),
        ],
        'list_intro' => __( 'Başarılı bir sayfa içi optimizasyon için şu unsurlar değerlendirilir:', 'seogezegeni' ),
        'list' => [
            __( 'Arama niyetine uygun içerik planlaması', 'seogezegeni' ),
            __( 'SEO uyumlu başlık yapıları (H1-H6)', 'seogezegeni' ),
            __( 'Title ve Meta Description optimizasyonu', 'seogezegeni' ),
            __( 'URL yapılarının düzenlenmesi', 'seogezegeni' ),
            __( 'Görsel optimizasyonu ve ALT etiketleri', 'seogezegeni' ),
            __( 'İç bağlantı (Internal Linking) stratejisi', 'seogezegeni' ),
            __( 'Okunabilir içerik yapısı', 'seogezegeni' ),
            __( 'CTA (Call To Action) alanlarının planlanması', 'seogezegeni' ),
            __( 'İçerik güncelliğinin korunması', 'seogezegeni' ),
        ],
        'closing' => __( 'Google, kullanıcıların sorularına en kapsamlı cevabı veren sayfaları ön plana çıkarmayı hedefler. Bu nedenle içeriklerin yalnızca belirli kelimeleri içermesi değil, ilgili konunun tüm alt başlıklarını kapsaması da önemlidir.', 'seogezegeni' ),
    ],
    [
        'icon'  => 'fa-solid fa-link',
        'title' => __( 'Off-Page SEO (Sayfa Dışı SEO)', 'seogezegeni' ),
        'paras' => [
            __( 'Sayfa dışı SEO, web sitesinin dijital otoritesini artırmaya yönelik çalışmaların genel adıdır. Google, kaliteli ve güvenilir web sitelerinden alınan referansları bir güven sinyali olarak değerlendirmektedir. Ancak günümüzde backlink sayısından çok bağlantının kalitesi ve doğal oluşu önem kazanmıştır.', 'seogezegeni' ),
        ],
        'list_intro' => __( 'Profesyonel Off-Page SEO sürecinde birlikte planlanması gereken çalışmalar:', 'seogezegeni' ),
        'list' => [
            __( 'Otoriter backlink çalışmaları', 'seogezegeni' ),
            __( 'Dijital PR', 'seogezegeni' ),
            __( 'Marka bahsetmeleri (Brand Mentions)', 'seogezegeni' ),
            __( 'Yerel işletme sinyalleri', 'seogezegeni' ),
            __( 'Sektörel referanslar', 'seogezegeni' ),
            __( 'Dijital itibar yönetimi', 'seogezegeni' ),
        ],
        'closing' => __( 'SEO Gezegeni olarak yalnızca bağlantı edinmeye odaklanmıyor, markanızın dijital ekosistem içerisindeki güvenilirliğini artıracak doğal otorite stratejileri geliştiriyoruz.', 'seogezegeni' ),
    ],
    [
        'icon'  => 'fa-solid fa-brain',
        'title' => __( 'Semantic SEO', 'seogezegeni' ),
        'paras' => [
            __( 'Google artık kelimeleri değil, anlamları analiz ediyor. Bu nedenle modern SEO çalışmalarında Semantic SEO, içerik başarısını doğrudan etkileyen en önemli disiplinlerden biri haline gelmiştir.', 'seogezegeni' ),
            __( 'Semantic SEO, bir konunun yalnızca ana başlığını değil; ilişkili kavramlarını, alt konularını ve kullanıcıların sorabileceği tüm soruları kapsayan içerik yapısı oluşturmayı hedefler.', 'seogezegeni' ),
        ],
        'list_intro' => __( 'Örneğin yalnızca "SEO Hizmeti" hakkında bilgi vermek yerine aşağıdaki ilişkili konuların da aynı içerik içerisinde ele alınması gerekir:', 'seogezegeni' ),
        'list' => [
            __( 'Teknik SEO', 'seogezegeni' ),
            __( 'İçerik optimizasyonu', 'seogezegeni' ),
            __( 'Google algoritmaları', 'seogezegeni' ),
            __( 'Core Web Vitals', 'seogezegeni' ),
            __( 'AI Overviews', 'seogezegeni' ),
            __( 'Yerel SEO', 'seogezegeni' ),
            __( 'Kurumsal SEO', 'seogezegeni' ),
            __( 'E-ticaret SEO', 'seogezegeni' ),
            __( 'Search Intent', 'seogezegeni' ),
            __( 'EEAT', 'seogezegeni' ),
        ],
        'closing' => __( 'Bu yaklaşım yalnızca daha fazla anahtar kelimede görünür olmayı sağlamaz; aynı zamanda konu otoritesini de güçlendirir.', 'seogezegeni' ),
    ],
    [
        'icon'  => 'fa-solid fa-database',
        'title' => __( 'Entity SEO', 'seogezegeni' ),
        'paras' => [
            __( 'Google, web sitelerini yalnızca kelimeler üzerinden değerlendirmez. Aynı zamanda kişiler, markalar, kurumlar, ürünler ve kavramlar arasındaki ilişkileri de analiz eder. Bu ilişki ağı, "Entity SEO" olarak adlandırılan modern optimizasyon yaklaşımının temelini oluşturur.', 'seogezegeni' ),
            __( 'Entity SEO çalışmalarında amaç, markanın belirli bir konu alanındaki uzmanlığını arama motorlarına daha net şekilde göstermektir.', 'seogezegeni' ),
        ],
        'list_intro' => __( 'Bunun için birlikte değerlendirilen unsurlar:', 'seogezegeni' ),
        'list' => [
            __( 'Tutarlı marka bilgileri', 'seogezegeni' ),
            __( 'Yapısal veri kullanımı', 'seogezegeni' ),
            __( 'Konu kümeleri (Topic Clusters)', 'seogezegeni' ),
            __( 'Güçlü iç bağlantı yapısı', 'seogezegeni' ),
            __( 'Otoriter kaynaklara referanslar', 'seogezegeni' ),
            __( 'Uzmanlık odaklı içerikler', 'seogezegeni' ),
        ],
        'closing' => __( 'SEO Gezegeni olarak içerik stratejilerini yalnızca anahtar kelime odaklı değil, konu otoritesi oluşturacak şekilde planlıyoruz. Böylece hem klasik organik sonuçlarda hem de yapay zeka destekli arama sistemlerinde daha güçlü görünürlük elde edilmesini hedefliyoruz.', 'seogezegeni' ),
    ],
];

/* Google SEO Süreci - 10 aşama */
$google_sureci = [
    __( 'Mevcut web sitesinin detaylı SEO analizi', 'seogezegeni' ),
    __( 'Teknik problemlerin tespit edilmesi', 'seogezegeni' ),
    __( 'Anahtar kelime ve kullanıcı niyeti analizi', 'seogezegeni' ),
    __( 'Rakip analizi', 'seogezegeni' ),
    __( 'Bilgi mimarisi ve içerik planlaması', 'seogezegeni' ),
    __( 'Teknik SEO optimizasyonları', 'seogezegeni' ),
    __( 'Sayfa içi SEO çalışmaları', 'seogezegeni' ),
    __( 'Sayfa dışı otorite çalışmaları', 'seogezegeni' ),
    __( 'Performans takibi ve düzenli raporlama', 'seogezegeni' ),
    __( 'Sürekli iyileştirme', 'seogezegeni' ),
];

/* SEO Çalışması Nasıl Planlanır - 7 adım (ana zaman çizelgesi) */
$planlama_adimlari = [
    [
        __( 'Mevcut Durum Analizi', 'seogezegeni' ),
        __( 'İlk aşamada web sitesinin teknik yapısı, içerik kalitesi, organik görünürlüğü ve rakiplerine göre mevcut konumu analiz edilir.', 'seogezegeni' ),
    ],
    [
        __( 'Teknik SEO Denetimi', 'seogezegeni' ),
        __( 'İndeksleme problemleri, site hızı, Core Web Vitals, yönlendirmeler, mobil uyumluluk ve diğer teknik unsurlar detaylı olarak incelenir.', 'seogezegeni' ),
    ],
    [
        __( 'Anahtar Kelime ve Arama Niyeti Analizi', 'seogezegeni' ),
        __( 'Yalnızca yüksek hacimli kelimeler değil, dönüşüm potansiyeli yüksek arama niyetleri de analiz edilir.', 'seogezegeni' ),
    ],
    [
        __( 'Rakip Analizi', 'seogezegeni' ),
        __( 'Rakiplerin içerik stratejileri, backlink profilleri, sayfa yapıları ve teknik performansları incelenerek rekabet avantajı oluşturacak fırsatlar belirlenir.', 'seogezegeni' ),
    ],
    [
        __( 'Bilgi Mimarisi', 'seogezegeni' ),
        __( 'Sayfalar arasındaki ilişki yeniden planlanır. Topic Cluster yapısı oluşturulur. İç bağlantılar güçlendirilir. Sayfa otoritesi dengeli şekilde dağıtılır.', 'seogezegeni' ),
    ],
    [
        __( 'İçerik Stratejisi', 'seogezegeni' ),
        __( 'Her sayfa belirli bir kullanıcı niyetini karşılayacak şekilde planlanır. Yalnızca kelime bazlı değil; konu bazlı (Topic Based SEO) bir yaklaşım uygulanır.', 'seogezegeni' ),
    ],
    [
        __( 'Sürekli Optimizasyon', 'seogezegeni' ),
        __( 'SEO hiçbir zaman tamamlanmış bir süreç değildir. Performans verileri düzenli olarak analiz edilir, Google algoritmaları takip edilir, yeni fırsatlar belirlenir ve içerikler güncellenir.', 'seogezegeni' ),
    ],
];

/* SEO Gezegeni ile çalışma süreci - 5 adım */
$process_steps = [
    [ __( 'Kapsamlı Ön Analiz', 'seogezegeni' ), __( 'İlk aşamada web sitenizin teknik durumu, organik görünürlüğü, içerik yapısı ve rakipleri detaylı olarak analiz edilir.', 'seogezegeni' ) ],
    [ __( 'Strateji Oluşturma', 'seogezegeni' ), __( 'Elde edilen veriler doğrultusunda işletmenizin hedeflerine uygun SEO yol haritası hazırlanır.', 'seogezegeni' ) ],
    [ __( 'Teknik İyileştirmeler', 'seogezegeni' ), __( 'Web sitesinin performansını etkileyen teknik sorunlar öncelik sırasına göre optimize edilir.', 'seogezegeni' ) ],
    [ __( 'İçerik ve Bilgi Mimarisi', 'seogezegeni' ), __( 'Arama niyetlerini karşılayan, konu otoritesini güçlendiren ve kullanıcı deneyimini geliştiren içerik planı oluşturulur.', 'seogezegeni' ) ],
    [ __( 'Sürekli Takip ve Geliştirme', 'seogezegeni' ), __( 'SEO dinamik bir süreç olduğu için performans düzenli olarak analiz edilir, yeni fırsatlar belirlenir ve stratejiler güncellenir.', 'seogezegeni' ) ],
];

/* Danışmanlık sürecinde birlikte yürütülen çalışmalar */
$danismanlik_calismalari = [
    __( 'İşletmenin mevcut dijital görünürlüğünün analiz edilmesi', 'seogezegeni' ),
    __( 'Rakiplerin güçlü ve zayıf yönlerinin incelenmesi', 'seogezegeni' ),
    __( 'Arama niyetlerinin (Search Intent) analiz edilmesi', 'seogezegeni' ),
    __( 'Teknik SEO denetimleri', 'seogezegeni' ),
    __( 'İçerik stratejisinin planlanması', 'seogezegeni' ),
    __( 'Bilgi mimarisinin oluşturulması', 'seogezegeni' ),
    __( 'Dönüşüm odaklı sayfa optimizasyonları', 'seogezegeni' ),
    __( 'Organik performansın düzenli olarak ölçülmesi', 'seogezegeni' ),
    __( 'Algoritma değişikliklerinin takip edilmesi', 'seogezegeni' ),
    __( 'Sürekli iyileştirme süreçlerinin yönetilmesi', 'seogezegeni' ),
];

/* SEO uzmanıyla çalışmanın avantajları */
$uzman_avantajlari = [
    __( 'Teknik problemlerin erken tespit edilmesi', 'seogezegeni' ),
    __( 'Gereksiz optimizasyonlardan kaçınılması', 'seogezegeni' ),
    __( 'Daha hızlı sonuç alınabilecek alanların belirlenmesi', 'seogezegeni' ),
    __( 'Kaynakların doğru önceliklendirilmesi', 'seogezegeni' ),
    __( 'İçerik yatırımlarının daha verimli planlanması', 'seogezegeni' ),
    __( 'Google algoritmalarına uyumlu stratejiler geliştirilmesi', 'seogezegeni' ),
    __( 'Organik büyümenin sürdürülebilir hale getirilmesi', 'seogezegeni' ),
];

/* SEO türleri / uzmanlık alanları - akordiyon */
$seo_types = [
    [
        'icon'  => 'fa-solid fa-building',
        'title' => __( 'Kurumsal SEO Hizmeti', 'seogezegeni' ),
        'paras' => [
            __( 'Kurumsal web siteleri, yüzlerce hatta binlerce sayfadan oluşan büyük bilgi yapıları içerir. Böyle projelerde SEO yalnızca belirli sayfaları optimize etmekten ibaret değildir. Bilgi mimarisi, içerik kümeleri, teknik performans, marka otoritesi ve kullanıcı deneyimi birlikte değerlendirilmelidir.', 'seogezegeni' ),
        ],
        'list_intro' => __( 'Kurumsal SEO çalışmalarında en sık karşılaşılan problemler:', 'seogezegeni' ),
        'list' => [
            __( 'Yinelenen içerikler (Duplicate Content)', 'seogezegeni' ),
            __( 'Yanlış indeksleme', 'seogezegeni' ),
            __( 'Zayıf iç bağlantı yapısı', 'seogezegeni' ),
            __( 'Sayfa otoritesinin dengesiz dağılımı', 'seogezegeni' ),
            __( 'Eski içeriklerin güncellenmemesi', 'seogezegeni' ),
            __( 'Teknik borç (Technical Debt)', 'seogezegeni' ),
        ],
        'closing' => __( 'Kurumsal projelerde başarılı olabilmek için her sayfanın belirli bir arama niyetini karşılaması ve tüm içeriklerin birbirini destekleyen bir konu kümesi (Topic Cluster) içerisinde planlanması gerekir. SEO Gezegeni olarak büyük ölçekli projelerde yalnızca mevcut sayfaları optimize etmiyor; gelecekte oluşacak içerik yapısını da planlayarak uzun vadeli konu otoritesi oluşturuyoruz.', 'seogezegeni' ),
    ],
    [
        'icon'  => 'fa-solid fa-location-dot',
        'title' => __( 'Yerel SEO (Local SEO)', 'seogezegeni' ),
        'paras' => [
            __( 'Yerel hizmet veren işletmeler için organik görünürlük yalnızca web sitesi sıralamalarından ibaret değildir. Google Haritalar, Google Business Profile, yerel dizinler ve bölgesel aramalar da müşteri kazanımında önemli rol oynar.', 'seogezegeni' ),
            __( 'Örneğin "avukat izmir", "diş hekimi karşıyaka", "psikolog bornova" ya da "klima servisi alsancak" gibi sorgular tamamen yerel arama niyetine sahiptir. Bu tür sorgularda başarılı olabilmek için yalnızca web sitesinin optimize edilmesi yeterli değildir.', 'seogezegeni' ),
        ],
        'list_intro' => __( 'Yerel SEO kapsamında birlikte değerlendirilmesi gerekenler:', 'seogezegeni' ),
        'list' => [
            __( 'Google Business Profile optimizasyonu', 'seogezegeni' ),
            __( 'NAP (Name-Address-Phone) tutarlılığı', 'seogezegeni' ),
            __( 'Yerel içerik stratejisi', 'seogezegeni' ),
            __( 'Lokasyon bazlı hizmet sayfaları', 'seogezegeni' ),
            __( 'Yerel backlink çalışmaları', 'seogezegeni' ),
            __( 'Harita optimizasyonu', 'seogezegeni' ),
            __( 'Yerel kullanıcı yorumları', 'seogezegeni' ),
        ],
        'closing' => __( 'Doğru planlanan bir yerel SEO stratejisi, özellikle hizmet sektöründe faaliyet gösteren işletmeler için yüksek dönüşüm sağlayan organik trafik oluşturabilir.', 'seogezegeni' ),
    ],
    [
        'icon'  => 'fa-solid fa-map-location-dot',
        'title' => __( 'İzmir SEO Hizmeti', 'seogezegeni' ),
        'paras' => [
            __( 'İzmir\'de faaliyet gösteren işletmeler için SEO çalışmaları planlanırken ulusal rekabetten farklı dinamikler dikkate alınmalıdır. Bölgesel arama alışkanlıkları, yerel rekabet yoğunluğu ve kullanıcı davranışları analiz edilerek lokasyona özel stratejiler geliştirilmelidir.', 'seogezegeni' ),
        ],
        'list_intro' => __( 'İzmir SEO hizmeti kapsamında yürütülen çalışmalar:', 'seogezegeni' ),
        'list' => [
            __( 'İlçe bazlı anahtar kelime analizleri', 'seogezegeni' ),
            __( 'Yerel rakip incelemeleri', 'seogezegeni' ),
            __( 'Google Haritalar optimizasyonu', 'seogezegeni' ),
            __( 'Lokasyon odaklı içerik üretimi', 'seogezegeni' ),
            __( 'Bölgesel backlink stratejileri', 'seogezegeni' ),
            __( 'Yerel hizmet sayfalarının geliştirilmesi', 'seogezegeni' ),
        ],
        'closing' => __( 'SEO Gezegeni olarak İzmir\'deki işletmelerin hem yerel hem de ulusal ölçekte daha görünür hale gelmesini sağlayacak kapsamlı SEO stratejileri oluşturuyoruz.', 'seogezegeni' ),
    ],
    [
        'icon'  => 'fa-solid fa-globe',
        'title' => __( 'İngilizce SEO (International SEO)', 'seogezegeni' ),
        'paras' => [
            __( 'Uluslararası pazarda faaliyet gösteren markalar için SEO çalışmaları yalnızca içerik çevirisi yapmak anlamına gelmez. Her ülkenin arama davranışları, rekabet düzeyi ve kullanıcı beklentileri farklıdır.', 'seogezegeni' ),
        ],
        'list_intro' => __( 'Başarılı bir uluslararası SEO stratejisinde birlikte planlanması gereken süreçler:', 'seogezegeni' ),
        'list' => [
            __( 'Ülke bazlı anahtar kelime araştırması', 'seogezegeni' ),
            __( 'Çok dilli site mimarisi', 'seogezegeni' ),
            __( 'hreflang etiketleri', 'seogezegeni' ),
            __( 'Yerel içerik üretimi', 'seogezegeni' ),
            __( 'Uluslararası backlink çalışmaları', 'seogezegeni' ),
            __( 'Teknik yapılandırmalar', 'seogezegeni' ),
            __( 'Bölgesel Search Console yönetimi', 'seogezegeni' ),
        ],
        'closing' => __( 'Özellikle ihracat yapan firmalar, sağlık turizmi kuruluşları ve uluslararası hizmet veren şirketler için İngilizce SEO uzun vadeli büyümenin en önemli yatırım alanlarından biridir.', 'seogezegeni' ),
    ],
    [
        'icon'  => 'fa-brands fa-wordpress',
        'title' => __( 'WordPress SEO', 'seogezegeni' ),
        'paras' => [
            __( 'WordPress, dünyanın en yaygın içerik yönetim sistemlerinden biri olmasına rağmen, varsayılan kurulumu tek başına başarılı bir SEO performansı için yeterli değildir.', 'seogezegeni' ),
        ],
        'list_intro' => __( 'Profesyonel WordPress SEO çalışmalarında birlikte değerlendirilen teknik detaylar:', 'seogezegeni' ),
        'list' => [
            __( 'Tema performansı', 'seogezegeni' ),
            __( 'Eklenti optimizasyonu', 'seogezegeni' ),
            __( 'Gereksiz kod yükünün azaltılması', 'seogezegeni' ),
            __( 'Görsel optimizasyonu', 'seogezegeni' ),
            __( 'Site hızı', 'seogezegeni' ),
            __( 'Schema kullanımı', 'seogezegeni' ),
            __( 'URL yapısı', 'seogezegeni' ),
            __( 'İç bağlantılar', 'seogezegeni' ),
            __( 'Güvenlik', 'seogezegeni' ),
            __( 'Cache yönetimi', 'seogezegeni' ),
        ],
        'closing' => __( 'Doğru yapılandırılmış bir WordPress altyapısı, hem kullanıcı deneyimini iyileştirir hem de arama motorlarının siteyi daha verimli taramasına yardımcı olur.', 'seogezegeni' ),
    ],
    [
        'icon'  => 'fa-solid fa-cart-shopping',
        'title' => __( 'E-Ticaret SEO', 'seogezegeni' ),
        'paras' => [
            __( 'E-ticaret sitelerinde SEO\'nun temel amacı yalnızca trafik artırmak değildir; organik ziyaretçileri satışa dönüştürebilecek bir yapı oluşturmaktır.', 'seogezegeni' ),
        ],
        'list_intro' => __( 'Başarılı e-ticaret SEO çalışmalarında kritik öneme sahip alanlar:', 'seogezegeni' ),
        'list' => [
            __( 'Kategori sayfası optimizasyonları', 'seogezegeni' ),
            __( 'Ürün sayfalarının geliştirilmesi', 'seogezegeni' ),
            __( 'Filtreleme yapılarının yönetimi', 'seogezegeni' ),
            __( 'Yinelenen içeriklerin önlenmesi', 'seogezegeni' ),
            __( 'Ürün Schema kullanımı', 'seogezegeni' ),
            __( 'Dahili bağlantı stratejisi', 'seogezegeni' ),
            __( 'Stok yönetimine bağlı indeksleme politikaları', 'seogezegeni' ),
            __( 'Sayfa hızının artırılması', 'seogezegeni' ),
        ],
        'closing' => __( 'Büyük e-ticaret projelerinde binlerce URL bulunduğu için tarama bütçesinin doğru yönetilmesi ve indeksleme stratejisinin planlanması organik büyümenin temel unsurlarından biridir.', 'seogezegeni' ),
    ],
];

/* Sektörel SEO stratejileri - akordiyon */
$sektorel_stratejiler = [
    [
        'icon'  => 'fa-solid fa-scale-balanced',
        'title' => __( 'Hukuk Büroları ve Avukatlık Ofisleri İçin SEO', 'seogezegeni' ),
        'text'  => __( 'Hukuk sektöründe kullanıcılar genellikle belirli bir hukuki problem için araştırma yapar. Bu nedenle yalnızca hizmet sayfaları değil, hukuki süreçleri açıklayan bilgilendirici içerikler de organik görünürlüğün önemli bir parçasıdır. Bu sektörde başarı için reklam mevzuatına uygun içerik üretimi, güven veren kurumsal yapı ve doğru bilgi mimarisi kritik öneme sahiptir.', 'seogezegeni' ),
    ],
    [
        'icon'  => 'fa-solid fa-stethoscope',
        'title' => __( 'Doktorlar ve Klinikler İçin SEO', 'seogezegeni' ),
        'text'  => __( 'Sağlık sektörü, Google\'ın en hassas değerlendirdiği alanlardan biridir. Bu nedenle uzmanlık, güvenilirlik ve doğru bilgi sunumu ön plana çıkar. Tedavi sayfalarının doğru yapılandırılması, doktor profillerinin detaylandırılması, hasta sorularına cevap veren içerikler ve teknik performans birlikte değerlendirildiğinde sürdürülebilir organik büyüme sağlanabilir.', 'seogezegeni' ),
    ],
    [
        'icon'  => 'fa-solid fa-plane-departure',
        'title' => __( 'Sağlık Turizmi SEO', 'seogezegeni' ),
        'text'  => __( 'Uluslararası hasta hedefleyen sağlık kuruluşlarında SEO stratejileri çok dilli yapı, ülke bazlı anahtar kelime analizi ve uluslararası görünürlük üzerine kurulmalıdır. Doğru hreflang kullanımı, lokalize içerikler ve hedef ülkelere yönelik otorite çalışmaları sağlık turizmi projelerinde önemli rol oynar.', 'seogezegeni' ),
    ],
    [
        'icon'  => 'fa-solid fa-bag-shopping',
        'title' => __( 'E-Ticaret SEO Stratejileri', 'seogezegeni' ),
        'text'  => __( 'E-ticaret sitelerinde başarı yalnızca ürün sayısından değil, doğru yapılandırılmış kategori ve ürün sayfalarından gelir. Kategori mimarisi, filtreleme yapıları, ürün açıklamaları, yapılandırılmış veriler ve teknik SEO süreçleri birlikte planlanmalıdır. Organik trafik kadar dönüşüm oranı da e-ticaret SEO başarısının önemli göstergelerinden biridir.', 'seogezegeni' ),
    ],
    [
        'icon'  => 'fa-solid fa-handshake',
        'title' => __( 'B2B Firmalar İçin SEO', 'seogezegeni' ),
        'text'  => __( 'B2B sektöründe satın alma süreçleri daha uzun ve araştırma odaklıdır. Bu nedenle kullanıcılar doğrudan teklif almadan önce teknik bilgi edinmek ister. Uzmanlık makaleleri, sektörel rehberler, vaka analizleri ve teknik içerikler B2B SEO çalışmalarında önemli rol oynar.', 'seogezegeni' ),
    ],
    [
        'icon'  => 'fa-solid fa-industry',
        'title' => __( 'Üretici Firmalar ve Fabrikalar İçin SEO', 'seogezegeni' ),
        'text'  => __( 'Üretim yapan işletmeler için SEO yalnızca yerel pazarı değil, uluslararası görünürlüğü de kapsamalıdır. Üretim kapasitesi, kalite belgeleri, ihracat deneyimi, ürün kategorileri ve teknik içerikler, potansiyel müşterilerin güven kazanmasında önemli rol oynar.', 'seogezegeni' ),
    ],
    [
        'icon'  => 'fa-solid fa-concierge-bell',
        'title' => __( 'Hizmet Sektörü İçin SEO', 'seogezegeni' ),
        'text'  => __( 'Hizmet sektöründe kullanıcıların karar verme süreci büyük ölçüde güvene dayanır. Bu nedenle referans projeler, müşteri yorumları, kapsamlı hizmet açıklamaları ve yerel SEO çalışmaları birlikte planlandığında organik görünürlük önemli ölçüde güçlenebilir.', 'seogezegeni' ),
    ],
];

/* SEO'da sık yapılan hatalar - detaylı */
$mistakes = [
    [
        __( 'Anahtar Kelime Doldurma', 'seogezegeni' ),
        __( 'İçeriklerde aynı anahtar kelimelerin gereğinden fazla kullanılması hem kullanıcı deneyimini olumsuz etkiler hem de içeriğin doğal akışını bozar. Modern SEO\'da önemli olan, belirli kelimeleri tekrar etmek değil; konuyu kapsamlı biçimde ele almaktır.', 'seogezegeni' ),
    ],
    [
        __( 'Teknik SEO\'yu Göz Ardı Etmek', 'seogezegeni' ),
        __( 'Yavaş açılan sayfalar, indeksleme sorunları, hatalı yönlendirmeler ve mobil uyumsuzluk gibi problemler organik performansı doğrudan etkiler. Teknik altyapı güçlendirilmeden yapılan içerik yatırımları beklenen sonucu vermeyebilir.', 'seogezegeni' ),
    ],
    [
        __( 'Kopya İçerik Kullanımı', 'seogezegeni' ),
        __( 'Farklı sayfalarda aynı içeriklerin tekrar edilmesi Google\'ın hangi sayfayı öncelikli değerlendireceğini belirlemesini zorlaştırabilir. Her sayfa benzersiz bir amaca hizmet etmelidir.', 'seogezegeni' ),
    ],
    [
        __( 'İç Bağlantıları İhmal Etmek', 'seogezegeni' ),
        __( 'İç bağlantılar yalnızca kullanıcı yönlendirmesi için değil, sayfa otoritesinin site içerisinde doğru dağıtılması açısından da önemlidir. Başarılı bilgi mimarisi güçlü internal linking ile desteklenmelidir.', 'seogezegeni' ),
    ],
    [
        __( 'Sadece Backlink\'e Odaklanmak', 'seogezegeni' ),
        __( 'Kaliteli içerik ve güçlü teknik altyapı olmadan yalnızca backlink çalışmalarıyla sürdürülebilir başarı elde etmek mümkün değildir. Google artık çok daha fazla kalite sinyalini birlikte değerlendirmektedir.', 'seogezegeni' ),
    ],
    [
        __( 'Kullanıcı Deneyimini İkinci Plana Atmak', 'seogezegeni' ),
        __( 'SEO yalnızca arama motorlarını değil, kullanıcıları da hedefler. Okunması zor içerikler, karmaşık sayfa yapıları ve yavaş açılan web siteleri kullanıcıların sayfadan ayrılmasına neden olabilir.', 'seogezegeni' ),
    ],
    [
        __( 'SEO\'yu Kısa Vadeli Bir Çalışma Olarak Görmek', 'seogezegeni' ),
        __( 'SEO bir kampanya değildir. Düzenli analiz, sürekli geliştirme ve uzun vadeli strateji gerektiren sürdürülebilir bir dijital büyüme modelidir.', 'seogezegeni' ),
    ],
];

$success_factors = [
    __( 'Güçlü teknik altyapı', 'seogezegeni' ),
    __( 'Hızlı ve mobil uyumlu web sitesi', 'seogezegeni' ),
    __( 'Kullanıcı niyetini karşılayan kaliteli içerikler', 'seogezegeni' ),
    __( 'Doğru bilgi mimarisi', 'seogezegeni' ),
    __( 'Güçlü iç bağlantı yapısı', 'seogezegeni' ),
    __( 'Doğal ve güvenilir backlink profili', 'seogezegeni' ),
    __( 'Düzenli performans analizi', 'seogezegeni' ),
    __( 'Sürekli güncellenen içerik stratejisi', 'seogezegeni' ),
    __( 'Güven oluşturan marka sinyalleri', 'seogezegeni' ),
    __( 'Veri odaklı optimizasyon süreçleri', 'seogezegeni' ),
];

$metrics = [
    [ 'fa-solid fa-chart-line', __( 'Organik Trafik', 'seogezegeni' ), __( 'Web sitesine arama motorlarından gelen kullanıcı sayısındaki değişim düzenli olarak analiz edilir.', 'seogezegeni' ) ],
    [ 'fa-solid fa-key', __( 'Anahtar Kelime Görünürlüğü', 'seogezegeni' ), __( 'Hedeflenen sorgulardaki sıralamalar takip edilirken, yeni anahtar kelime kazanımları da değerlendirilir.', 'seogezegeni' ) ],
    [ 'fa-solid fa-bullseye', __( 'Organik Dönüşüm Oranı', 'seogezegeni' ), __( 'SEO çalışmaları sonucunda elde edilen ziyaretçilerin teklif, satış veya iletişim gibi hedeflere ne ölçüde dönüştüğü incelenir.', 'seogezegeni' ) ],
    [ 'fa-solid fa-user-check', __( 'Kullanıcı Davranışları', 'seogezegeni' ), __( 'Sayfada geçirilen süre, etkileşim oranı, gezinme davranışları ve kullanıcı yolculuğu analiz edilerek içeriklerin performansı değerlendirilir.', 'seogezegeni' ) ],
    [ 'fa-solid fa-gauge-high', __( 'Teknik Performans', 'seogezegeni' ), __( 'Core Web Vitals, indeksleme durumu, tarama hataları ve teknik SEO metrikleri düzenli olarak kontrol edilir.', 'seogezegeni' ) ],
    [ 'fa-solid fa-diagram-project', __( 'Sayfa Otoritesi ve Konu Kapsamı', 'seogezegeni' ), __( 'Yalnızca tek bir sayfanın değil, tüm web sitesinin belirli konulardaki görünürlüğü ve konu otoritesi uzun vadeli olarak takip edilir.', 'seogezegeni' ) ],
];

$neden_seo_gezegeni = [
    __( 'Veriye dayalı karar alma süreçleri', 'seogezegeni' ),
    __( 'İşletmeye özel SEO stratejileri', 'seogezegeni' ),
    __( 'Güncel Google algoritmalarına uyum', 'seogezegeni' ),
    __( 'Teknik SEO ve içerik optimizasyonunun birlikte yürütülmesi', 'seogezegeni' ),
    __( 'Şeffaf raporlama anlayışı', 'seogezegeni' ),
    __( 'Uzun vadeli organik büyüme odaklı planlama', 'seogezegeni' ),
    __( 'Sürdürülebilir ve etik SEO uygulamaları', 'seogezegeni' ),
];

/* Sık Sorulan Sorular - Word dosyasındaki tüm sorular (birebir tekrar eden birkaç soru tekilleştirildi) */
$faqs = [
    [ __( 'SEO nedir?', 'seogezegeni' ), __( 'SEO (Search Engine Optimization), web sitelerinin Google ve diğer arama motorlarında organik olarak daha görünür hale gelmesini sağlayan teknik, içerik ve otorite çalışmalarının bütünüdür. Doğru planlanan bir SEO stratejisi, hedef kitlenize reklam bütçesine bağlı kalmadan ulaşmanıza yardımcı olur.', 'seogezegeni' ) ],
    [ __( 'SEO neden önemlidir?', 'seogezegeni' ), __( 'İnternet kullanıcılarının büyük bölümü ürün ve hizmet araştırmalarına arama motorlarından başlar. SEO sayesinde web siteniz doğru kullanıcıların karşısına çıkar, marka bilinirliği artar ve uzun vadeli organik trafik elde edilir.', 'seogezegeni' ) ],
    [ __( 'SEO çalışmaları ne kadar sürede sonuç verir?', 'seogezegeni' ), __( 'SEO\'nun etkisi sektörün rekabet düzeyine, web sitesinin mevcut durumuna ve uygulanacak stratejiye göre değişebilir. Genellikle ilk gelişmeler birkaç ay içinde görülmeye başlarken, sürdürülebilir başarı uzun vadeli çalışmalarla elde edilir.', 'seogezegeni' ) ],
    [ __( 'SEO ile Google Ads arasındaki fark nedir?', 'seogezegeni' ), __( 'Google Ads ücretli reklam modelidir ve bütçe devam ettiği sürece görünürlük sağlar. SEO ise organik sıralamalara odaklanır ve uzun vadede kalıcı görünürlük oluşturmayı hedefler.', 'seogezegeni' ) ],
    [ __( 'SEO her sektör için gerekli midir?', 'seogezegeni' ), __( 'İnternetten müşteri kazanmayı hedefleyen hemen her işletme için SEO önemli bir dijital pazarlama yatırımıdır. Strateji ise sektörün rekabetine, hedef kitlesine ve iş modeline göre planlanmalıdır.', 'seogezegeni' ) ],
    [ __( 'SEO çalışmaları garanti edilebilir mi?', 'seogezegeni' ), __( 'Hiçbir profesyonel SEO ajansı Google\'da belirli bir sıralamayı garanti edemez. Ancak doğru strateji, teknik optimizasyon ve kaliteli içerik çalışmalarıyla organik görünürlüğün sürdürülebilir şekilde artırılması hedeflenebilir.', 'seogezegeni' ) ],
    [ __( 'SEO çalışmaları tamamlandıktan sonra devam etmek gerekir mi?', 'seogezegeni' ), __( 'Evet. Google algoritmaları, kullanıcı davranışları ve sektör rekabeti sürekli değiştiği için SEO düzenli takip ve geliştirme gerektiren dinamik bir süreçtir.', 'seogezegeni' ) ],
    [ __( 'Teknik SEO olmadan içerik çalışmaları yeterli olur mu?', 'seogezegeni' ), __( 'Hayır. Teknik sorunlar çözülmeden yapılan içerik yatırımları arama motorlarının sayfaları doğru değerlendirmesini zorlaştırabilir. En iyi sonuç, teknik SEO ve içerik optimizasyonunun birlikte yürütülmesiyle elde edilir.', 'seogezegeni' ) ],
    [ __( 'Yerel SEO kimler için uygundur?', 'seogezegeni' ), __( 'Belirli bir şehir veya bölgede hizmet veren tüm işletmeler için yerel SEO önemli avantajlar sağlayabilir. Özellikle Google Haritalar görünürlüğü ve Google Business Profile optimizasyonu yerel müşteri kazanımında kritik rol oynar.', 'seogezegeni' ) ],
    [ __( 'Uluslararası SEO ile İngilizce SEO aynı şey midir?', 'seogezegeni' ), __( 'Hayır. Uluslararası SEO; çok dilli yapı, ülke hedefleme, hreflang kullanımı ve farklı pazarlara yönelik optimizasyon süreçlerini kapsayan daha geniş bir stratejidir.', 'seogezegeni' ) ],
    [ __( 'SEO fiyatları neden farklılık gösterir?', 'seogezegeni' ), __( 'SEO maliyetleri; sektörün rekabet seviyesi, web sitesinin büyüklüğü, hedeflenen anahtar kelimeler, yapılacak teknik çalışmalar ve içerik kapsamına göre değişebilir. Bu nedenle her proje kendi ihtiyaçlarına göre değerlendirilmelidir.', 'seogezegeni' ) ],
    [ __( 'SEO danışmanlığı ile SEO hizmeti arasında fark var mıdır?', 'seogezegeni' ), __( 'SEO danışmanlığı daha çok strateji geliştirme, analiz ve yönlendirme süreçlerini kapsarken; SEO hizmeti teknik uygulamalar, içerik optimizasyonları ve operasyonel çalışmaları da içerir. Birçok projede bu iki süreç birlikte yürütülmektedir.', 'seogezegeni' ) ],
    [ __( 'Teknik SEO neden önemlidir?', 'seogezegeni' ), __( 'Teknik SEO, arama motorlarının web sitenizi doğru şekilde tarayabilmesi ve değerlendirebilmesi için gerekli altyapıyı oluşturur. İndeksleme sorunları, site hızı, mobil uyumluluk ve Core Web Vitals gibi unsurlar teknik SEO\'nun temel bileşenleridir.', 'seogezegeni' ) ],
    [ __( 'İçerik SEO başarısını nasıl etkiler?', 'seogezegeni' ), __( 'Kaliteli içerikler yalnızca anahtar kelime içermekle kalmaz; kullanıcıların sorularına kapsamlı cevap verir, güven oluşturur ve konu otoritesini güçlendirir. Google, bilgi değeri yüksek içerikleri daha başarılı değerlendirmektedir.', 'seogezegeni' ) ],
    [ __( 'Backlink hâlâ SEO için önemli mi?', 'seogezegeni' ), __( 'Evet. Ancak günümüzde önemli olan backlink sayısından çok bağlantının kalitesi ve doğal oluşudur. Güvenilir ve sektörel açıdan ilgili web sitelerinden alınan bağlantılar daha yüksek değer taşır.', 'seogezegeni' ) ],
    [ __( 'E-ticaret sitelerinde SEO neden farklıdır?', 'seogezegeni' ), __( 'E-ticaret sitelerinde binlerce ürün ve kategori bulunduğu için teknik SEO, filtreleme yapıları, ürün sayfaları, kategori optimizasyonu ve tarama bütçesi yönetimi çok daha önemli hale gelir.', 'seogezegeni' ) ],
    [ __( 'Yapay zeka SEO\'yu bitirecek mi?', 'seogezegeni' ), __( 'Hayır. Yapay zeka, SEO\'nun sona erdiği anlamına gelmez. Aksine AI Overviews gibi yeni sistemler, kaliteli ve güvenilir içerik üreten web siteleri için yeni görünürlük fırsatları oluşturmaktadır.', 'seogezegeni' ) ],
    [ __( 'AI Overviews nedir?', 'seogezegeni' ), __( 'AI Overviews, Google\'ın yapay zeka destekli arama sonuçlarında kullanıcıya özet bilgiler sunduğu yeni arama deneyimidir. Bu alanda görünür olabilmek için içeriklerin uzmanlık, güvenilirlik ve kapsam açısından güçlü olması gerekir.', 'seogezegeni' ) ],
    [ __( 'SEO için blog yazmak gerekli midir?', 'seogezegeni' ), __( 'Kaliteli blog içerikleri, web sitesinin konu otoritesini artırabilir ve uzun kuyruklu arama sorgularından organik trafik kazanılmasını sağlayabilir. Ancak içeriklerin kullanıcı odaklı ve stratejik olarak planlanması önemlidir.', 'seogezegeni' ) ],
    [ __( 'SEO ile ilk sıraya çıkmak mümkün müdür?', 'seogezegeni' ), __( 'SEO çalışmaları doğru şekilde planlandığında birçok anahtar kelimede üst sıralarda yer almak mümkündür. Ancak kesin bir sıralama garantisi vermek doğru değildir. Sonuçlar sektör, rekabet düzeyi ve Google algoritmalarına göre değişebilir.', 'seogezegeni' ) ],
    [ __( 'SEO performansı nasıl ölçülür?', 'seogezegeni' ), __( 'Başarılı bir SEO çalışması yalnızca sıralama değişiklikleriyle değerlendirilmez. Organik trafik, dönüşüm oranları, kullanıcı davranışları, görünürlük artışı ve teknik performans birlikte analiz edilmelidir.', 'seogezegeni' ) ],
    [ __( 'Doğru SEO ajansı nasıl seçilir?', 'seogezegeni' ), __( 'Bir SEO ajansı seçerken kullanılan yöntemler, raporlama süreçleri, teknik uzmanlık, referanslar ve uzun vadeli strateji yaklaşımı birlikte değerlendirilmelidir. Gerçekçi olmayan vaatlerde bulunan veya kısa sürede garanti sıralama sözü veren firmalara karşı dikkatli olunmalıdır.', 'seogezegeni' ) ],
];

    $benefits = [
                    [ 'fa-solid fa-arrow-trend-up', __( 'Organik görünürlüğü artırır.', 'seogezegeni' ) ],
                    [ 'fa-solid fa-users-viewfinder', __( 'Hedef kitleye doğru zamanda ulaşılmasını sağlar.', 'seogezegeni' ) ],
                    [ 'fa-solid fa-shield-halved', __( 'Marka güvenilirliğini güçlendirir.', 'seogezegeni' ) ],
                    [ 'fa-solid fa-coins', __( 'Reklam maliyetlerini uzun vadede azaltır.', 'seogezegeni' ) ],
                    [ 'fa-solid fa-award', __( 'Daha yüksek dönüşüm oranları elde edilmesine katkı sağlar.', 'seogezegeni' ) ],
                    [ 'fa-solid fa-globe-americas', __( 'Dijital marka bilinirliğini artırır.', 'seogezegeni' ) ],
                    [ 'fa-solid fa-chess-knight', __( 'Rakiplere karşı sürdürülebilir rekabet avantajı oluşturur.', 'seogezegeni' ) ],
    ];

    $ai_points = [
                        __( 'Kullanıcının sorusuna doğrudan cevap vermeleri', 'seogezegeni' ),
                        __( 'Konuyu yüzeysel değil kapsamlı ele almaları', 'seogezegeni' ),
                        __( 'Güvenilir kaynaklara dayanmaları', 'seogezegeni' ),
                        __( 'Uzmanlık sinyalleri taşımaları', 'seogezegeni' ),
                        __( 'Teknik olarak erişilebilir olmaları', 'seogezegeni' ),
                        __( 'Semantik bütünlük oluşturmaları', 'seogezegeni' ),
    ];

    $t_intro_a = [
        __( 'Google\'da her gün milyarlarca arama gerçekleştiriliyor. Kullanıcılar ihtiyaç duydukları ürünlere, hizmetlere ve bilgilere ulaşmak için ilk olarak arama motorlarını kullanıyor. Ancak bu aramaların büyük bölümü yalnızca ilk sayfadaki sonuçlarla sınırlı kalıyor. Yapılan araştırmalar, kullanıcıların önemli bir kısmının ilk sayfanın dışındaki sonuçları incelemediğini gösteriyor. Bu nedenle web sitenizin arama motorlarında görünür olması yalnızca dijital pazarlama açısından değil, markanızın sürdürülebilir büyümesi açısından da kritik önem taşıyor.', 'seogezegeni' ),
        __( '**SEO (Search Engine Optimization),** web sitelerinin organik arama sonuçlarında daha görünür hale gelmesini sağlayan teknik, içerik ve otorite çalışmalarının bütünüdür. Doğru planlanan bir SEO stratejisi yalnızca daha fazla ziyaretçi elde etmeyi değil, doğru hedef kitleye ulaşmayı, marka güvenini artırmayı ve uzun vadeli dijital büyüme sağlamayı amaçlar.', 'seogezegeni' ),
        __( 'SEO Gezegeni olarak işletmelerin yalnızca belirli anahtar kelimelerde sıralama kazanmasına odaklanmıyoruz. Amacımız; kullanıcı deneyimini geliştiren, Google\'ın kalite standartlarına uyum sağlayan ve dönüşüm sağlayan sürdürülebilir organik büyüme stratejileri oluşturmaktır. Her proje; sektör analizi, rekabet değerlendirmesi, teknik altyapı incelemesi, içerik planlaması ve performans ölçümü gibi birçok farklı aşamadan oluşan kapsamlı bir süreçle yönetilir.', 'seogezegeni' ),
        __( 'Bugün *SEO*, geçmiş yıllara göre çok daha gelişmiş bir disiplin haline gelmiştir. Google artık yalnızca anahtar kelime kullanımını değil; kullanıcı deneyimini, içerik kalitesini, uzmanlığı (EEAT), sayfa performansını, teknik altyapıyı ve markanın dijital otoritesini birlikte değerlendirmektedir. Bu nedenle başarılı bir SEO çalışması yalnızca içerik üretmekten veya backlink almaktan ibaret değildir. Teknik SEO, içerik stratejisi, kullanıcı niyeti analizi, yapısal veri kullanımı, sayfa deneyimi ve sürekli optimizasyon süreçlerinin birlikte yürütülmesi gerekir.', 'seogezegeni' ),
        __( 'İster kurumsal bir firma olun, ister e-ticaret sitesi yönetin ya da yerel müşterilere ulaşmak isteyen bir işletme olun; doğru planlanmış profesyonel bir SEO hizmeti dijital pazarlama yatırımlarınızın en yüksek geri dönüş sağlayan alanlarından biri olabilir.', 'seogezegeni' ),
        __( 'Bu sayfada SEO\'nun nasıl çalıştığını, profesyonel SEO danışmanlığının işletmelere sağladığı avantajları, teknik süreçleri, Google algoritmalarının etkilerini ve sektörlere özel SEO stratejilerini kapsamlı şekilde inceleyebilirsiniz.', 'seogezegeni' ),
    ];

    $t_intro_b = [
        __( '*SEO (Search Engine Optimization)*, web sitelerinin Google ve diğer arama motorlarında organik görünürlüğünü artırmak amacıyla gerçekleştirilen teknik, içeriksel ve stratejik optimizasyon çalışmalarının tamamını ifade eder. Temel hedef, kullanıcıların yaptığı aramalarda en doğru sayfayı doğru zamanda karşılarına çıkararak hem arama motorlarının hem de kullanıcıların beklentilerini karşılamaktır.', 'seogezegeni' ),
        __( 'Geçmişte SEO büyük ölçüde anahtar kelime yoğunluğu ve bağlantı sayısına odaklanan bir çalışma alanıydı. Günümüzde ise arama motorları çok daha gelişmiş algoritmalar kullanmaktadır. Artık yalnızca belirli kelimeleri sayfaya eklemek yeterli değildir. İçeriğin kullanıcı sorularına kapsamlı cevap vermesi, teknik olarak erişilebilir olması, güvenilir kaynaklara dayanması ve yüksek kullanıcı deneyimi sunması beklenmektedir.', 'seogezegeni' ),
        __( 'Google\'ın gelişen yapay zeka sistemleri sayesinde arama sonuçları artık yalnızca metin eşleşmelerine göre değil, kullanıcı niyeti (Search Intent), semantik ilişki, konu otoritesi (Topical Authority), içerik kalitesi ve uzmanlık sinyallerine göre değerlendirilmektedir. Bu nedenle modern SEO çalışmaları; teknik optimizasyon, içerik üretimi, bilgi mimarisi, kullanıcı deneyimi ve dijital marka otoritesini birlikte kapsayan çok yönlü bir süreçtir.', 'seogezegeni' ),
        __( 'Profesyonel bir SEO çalışmasının temel amacı yalnızca sıralama elde etmek değildir. Asıl hedef, işletmenizin hedef kitlesiyle doğru noktada buluşmasını sağlayan sürdürülebilir bir organik büyüme modeli oluşturmaktır. Organik trafik, reklam bütçelerinden bağımsız olarak uzun vadeli müşteri kazanımı sağlayabilen en değerli dijital pazarlama kanallarından biridir.', 'seogezegeni' ),
    ];

    $t_benefits_lead = [
        __( '**SEO**, işletmelerin bu görünürlüğü organik olarak elde etmesini sağlar. Üstelik organik trafik, reklam kampanyalarına kıyasla çok daha sürdürülebilir bir yatırım niteliği taşır. Reklam çalışmaları bütçe sona erdiğinde dururken, doğru şekilde optimize edilmiş bir web sitesi uzun süre boyunca organik ziyaretçi çekmeye devam edebilir. SEO\'nun işletmelere sağladığı başlıca avantajlar şunlardır:', 'seogezegeni' ),
    ];

    $t_benefits_foot = [
        __( 'Ancak bu avantajların elde edilebilmesi için SEO çalışmalarının stratejik olarak planlanması gerekir. Her sektörün rekabet yapısı, kullanıcı davranışları ve satın alma süreçleri farklı olduğu için standart çözümler yerine işletmeye özel analizler yapılmalıdır. SEO Gezegeni olarak her projeye öncelikle veri odaklı yaklaşıyoruz. Teknik analizler, anahtar kelime araştırmaları, rakip incelemeleri ve kullanıcı davranış analizleri sonucunda işletmeye özel bir yol haritası oluşturuyoruz. Böylece yalnızca trafik artışı değil; ticari hedeflere katkı sağlayan ölçülebilir sonuçlar elde etmeyi amaçlıyoruz.', 'seogezegeni' ),
    ];

    $t_hizmet = [
        __( '**SEO hizmeti**, bir web sitesinin arama motorlarında daha görünür hale gelmesini sağlamak amacıyla yürütülen tüm teknik, stratejik ve içerik çalışmalarını kapsayan profesyonel bir danışmanlık sürecidir. Bu süreç yalnızca belirli anahtar kelimelerde üst sıralara çıkmayı değil, web sitesinin genel performansını ve dijital rekabet gücünü artırmayı hedefler.', 'seogezegeni' ),
        __( 'Başarılı bir SEO hizmeti, web sitesinin mevcut durumunun analiz edilmesiyle başlar. Teknik altyapı, indekslenebilirlik, sayfa performansı, içerik kalitesi, bağlantı profili ve kullanıcı deneyimi gibi birçok unsur detaylı şekilde incelenir. Ardından elde edilen veriler doğrultusunda işletmenin hedeflerine uygun kapsamlı bir optimizasyon planı hazırlanır.', 'seogezegeni' ),
        __( 'SEO hizmeti tek seferlik bir işlem değildir. Google algoritmaları sürekli gelişirken kullanıcı beklentileri ve rekabet koşulları da değişmektedir. Bu nedenle SEO, düzenli analiz, optimizasyon ve iyileştirme gerektiren dinamik bir süreçtir. SEO Gezegeni olarak her projeyi uzun vadeli bir iş ortaklığı anlayışıyla yönetiyoruz. Teknik ekip, içerik uzmanları ve SEO danışmanlarından oluşan deneyimli ekibimizle web sitenizin yalnızca bugün değil, gelecekte de rekabet gücünü koruyacak sürdürülebilir stratejiler geliştiriyoruz.', 'seogezegeni' ),
    ];

    $t_hizmet_lead = [
        __( 'Modern SEO hizmetleri aşağıdaki temel bileşenlerden oluşur:', 'seogezegeni' ),
    ];

    $t_surec_foot = [
        __( '**SEO**, tamamlanıp bırakılan bir proje değildir. Google\'ın algoritmaları, kullanıcı davranışları ve sektör rekabeti sürekli değiştiği için stratejilerin de düzenli olarak güncellenmesi gerekir. Bu nedenle SEO Gezegeni olarak yalnızca uygulama yapan değil, verileri analiz ederek strateji geliştiren ve uzun vadeli büyümeyi hedefleyen bir danışmanlık yaklaşımı benimsiyoruz.', 'seogezegeni' ),
    ];

    $t_algoritma = [
        __( 'Google, her yıl binlerce algoritma güncellemesi gerçekleştirerek arama sonuçlarının kalitesini artırmayı hedefler. Bu güncellemelerin büyük bölümü küçük iyileştirmelerden oluşurken, Core Update, Spam Update ve Helpful Content Update gibi kapsamlı değişiklikler birçok web sitesinin organik performansını doğrudan etkileyebilir.', 'seogezegeni' ),
        __( 'Geçmişte yalnızca backlink sayısı veya anahtar kelime yoğunluğu yüksek olan sayfalar üst sıralarda yer alabilirken, günümüzde Google çok daha kapsamlı kalite sinyallerini dikkate almaktadır. İçeriğin uzmanlık düzeyi, kullanıcı deneyimi, teknik performansı, güvenilirliği ve arama niyetini karşılama başarısı birlikte değerlendirilmektedir.', 'seogezegeni' ),
        __( 'Bu nedenle algoritma güncellemelerini "cezalandırma" mantığıyla değil, kalite standartlarının gelişimi olarak görmek gerekir. Kısa vadeli manipülatif yöntemler yerine, kullanıcı odaklı ve sürdürülebilir SEO stratejileri geliştiren web siteleri uzun vadede daha istikrarlı sonuçlar elde eder. SEO Gezegeni olarak tüm optimizasyon çalışmalarımızı güncel algoritma standartlarını takip ederek planlıyor; web sitelerinin yalnızca bugünkü sıralamalarını değil, gelecekteki algoritma değişikliklerine karşı da dayanıklı olmasını hedefliyoruz.', 'seogezegeni' ),
    ];

    $t_ai_intro = [
        __( 'Arama motorları son birkaç yılda tarihinin en büyük dönüşümlerinden birini yaşamaktadır. Yapay zeka teknolojilerinin gelişmesiyle birlikte kullanıcılar artık yalnızca klasik arama sonuçlarını değil, Google tarafından oluşturulan AI Overviews özetlerini de görmektedir. Bu değişim, SEO\'nun önemini azaltmak yerine daha stratejik hale getirmiştir.', 'seogezegeni' ),
        __( 'Artık hedef yalnızca ilk sayfada yer almak değildir. Aynı zamanda Google\'ın yapay zeka sistemlerinin güvenilir kaynak olarak değerlendirdiği içerikler arasında bulunmak da önemlidir. AI Overviews içerisinde yer alabilen içerikler incelendiğinde ortak bazı özellikler dikkat çekmektedir:', 'seogezegeni' ),
    ];

    $t_ai_foot = [
        __( 'Bu nedenle günümüzde SEO çalışmaları yalnızca anahtar kelime optimizasyonundan ibaret değildir. İçeriğin bilgi değeri, konu kapsamı ve güvenilirliği de en az teknik optimizasyon kadar önem kazanmıştır. SEO Gezegeni olarak hazırladığımız stratejiler, yalnızca klasik Google sıralamalarını değil; AI Overviews, yapay zeka destekli arama sistemleri ve gelişen kullanıcı davranışlarını da dikkate alacak şekilde planlanmaktadır.', 'seogezegeni' ),
    ];

    $t_danis = [
        __( '**SEO**, web sitesinde birkaç teknik düzenleme yapmak veya belirli anahtar kelimeleri içeriklere eklemekten çok daha kapsamlı bir süreçtir. Başarılı sonuçlar elde edebilmek için teknik analiz, veri yorumlama, içerik stratejisi, kullanıcı davranışı, rekabet analizi ve sürekli optimizasyonun birlikte yürütülmesi gerekir. Bu nedenle profesyonel SEO danışmanlığı, işletmelerin dijital büyüme stratejisinin önemli bir parçasıdır.', 'seogezegeni' ),
        __( 'Bir SEO danışmanının görevi yalnızca sıralama yükseltmek değildir. Asıl sorumluluk; işletmenin hedef kitlesini anlamak, doğru anahtar kelime stratejisini oluşturmak, teknik engelleri ortadan kaldırmak ve organik trafiği ticari değere dönüştürecek bir yapı kurmaktır.', 'seogezegeni' ),
        __( 'SEO Gezegeni olarak danışmanlık hizmetimizi yalnızca rapor sunan bir yapı olarak değil, işletmenizin dijital büyüme süreçlerine aktif katkı sağlayan stratejik bir iş ortaklığı olarak konumlandırıyoruz.', 'seogezegeni' ),
    ];

    $t_danis_lead = [
        __( 'Profesyonel bir SEO danışmanlığı sürecinde aşağıdaki çalışmalar birlikte yürütülür:', 'seogezegeni' ),
    ];

    $t_uzman_intro = [
        __( 'Arama motorları sürekli değişirken başarılı SEO çalışmaları da sürekli güncellenmek zorundadır. Günümüzde Google\'ın değerlendirdiği sıralama sinyalleri yüzlerce farklı kriterden oluşmaktadır. Bu nedenle yalnızca teknik bilgiye sahip olmak yeterli değildir; aynı zamanda bu verileri doğru yorumlayabilmek gerekir. Deneyimli bir SEO uzmanıyla çalışmanın sağladığı başlıca avantajlar:', 'seogezegeni' ),
    ];

    $t_uzman_foot = [
        __( 'SEO\'da yapılan yanlış uygulamalar yalnızca zaman kaybına neden olmaz; aynı zamanda uzun vadede organik görünürlüğün azalmasına da yol açabilir. Bu nedenle deneyimli bir ekip tarafından yönetilen stratejik SEO çalışmaları, işletmeler için önemli bir rekabet avantajı sağlar.', 'seogezegeni' ),
    ];

    $t_success_intro = [
        __( '*SEO*\'da başarı tek bir optimizasyon çalışmasına bağlı değildir. Google\'ın değerlendirme sistemleri her geçen yıl daha gelişmiş hale gelmektedir. Günümüzde yalnızca teknik açıdan doğru yapılandırılmış bir web sitesi yeterli değildir; kullanıcı deneyimi, içerik kalitesi, marka güvenilirliği ve dijital otorite de sıralamaları doğrudan etkileyen faktörler arasında yer alır. Başarılı bir SEO stratejisinin temel bileşenleri:', 'seogezegeni' ),
    ];

    $t_success_foot = [
        __( 'Bu unsurlar birbirinden bağımsız değildir. Eksik kalan tek bir alan bile genel SEO performansını olumsuz etkileyebilir. Bu nedenle başarılı projelerde tüm optimizasyon süreçleri birlikte değerlendirilmelidir.', 'seogezegeni' ),
    ];

    $t_metrics_foot = [
        __( 'SEO Gezegeni olarak raporlarımızı yalnızca sıralama değişikliklerinden oluşan tablolar şeklinde hazırlamıyoruz. Organik büyümeyi etkileyen tüm verileri birlikte değerlendirerek alınan aksiyonların işletmeye sağladığı katkıyı şeffaf şekilde paylaşıyoruz.', 'seogezegeni' ),
    ];

    $t_journey_foot = [
        __( 'Bu yaklaşım sayesinde yalnızca kısa vadeli sıralama artışları değil, sürdürülebilir organik büyüme hedeflenir.', 'seogezegeni' ),
    ];

    $t_neden_foot = [
        __( 'Amacımız yalnızca belirli kelimelerde sıralama elde etmek değil; markanızın dijital görünürlüğünü güçlendiren, kullanıcıların güvenini kazanan ve ticari hedeflerinize katkı sağlayan kalıcı bir SEO altyapısı oluşturmaktır.', 'seogezegeni' ),
    ];

    $t_cta = [
        __( '**SEO**, yalnızca arama motorlarında daha üst sıralarda yer almak için yapılan teknik çalışmaların toplamı değildir. Doğru planlandığında markanızın dijital görünürlüğünü güçlendiren, hedef kitlenize ulaşmanızı kolaylaştıran ve uzun vadeli büyümenizi destekleyen stratejik bir yatırımdır.', 'seogezegeni' ),
        __( 'İşletmenizin faaliyet gösterdiği sektöre, rekabet seviyesine ve hedeflerine uygun bir SEO yol haritası oluşturmak istiyorsanız, SEO Gezegeni olarak size özel analizler ve sürdürülebilir çözümler sunmaya hazırız. İlk adım olarak web sitenizin mevcut durumunu birlikte değerlendirebilir, geliştirilmesi gereken alanları belirleyebilir ve uzun vadeli organik büyüme stratejinizi planlayabiliriz.', 'seogezegeni' ),
        __( '**Organik görünürlüğünüzü güçlendirmek ve dijital rekabette sürdürülebilir başarı elde etmek için bizimle iletişime geçin.**', 'seogezegeni' ),
    ];

    return get_defined_vars();
}
