<?php
/**
 * Web tasarim ve yazilim sayfasi varsayilan icerigi (docx: WEB TASARIM).
 * Panelde bir alan bos birakilirsa bu degerler kullanilir.
 */

defined( 'ABSPATH' ) || exit;

function sg_wb_default_content() {
    return [
        'seo_title' => __( 'Web Tasarım ve Yazılım Geliştirme | Profesyonel Web Tasarım | İzmir | SEO Gezegeni', 'seogezegeni' ),
        'meta_desc' => __( 'SEO Gezegeni ile profesyonel web tasarım ve özel yazılım çözümleri geliştirin. SEO uyumlu, mobil uyumlu, hızlı ve dönüşüm odaklı web siteleriyle dijital büyümenizi destekleyin.', 'seogezegeni' ),
        'hero_title' => __( 'Profesyonel Web Tasarım ve *Özel Yazılım Çözümleri*', 'seogezegeni' ),
        'hero_text' => __( 'SEO uyumlu, mobil uyumlu, hızlı, güvenli ve dönüşüm odaklı web siteleri ile işletmenize özel yazılım altyapıları geliştiriyoruz.', 'seogezegeni' ),
        'stats' => [
            [
                'value' => __( 'SEO', 'seogezegeni' ),
                'label' => __( 'Arama motoru uyumlu teknik altyapı', 'seogezegeni' ),
            ],
            [
                'value' => __( 'UX', 'seogezegeni' ),
                'label' => __( 'Kullanıcı deneyimi ve dönüşüm odaklı tasarım', 'seogezegeni' ),
            ],
            [
                'value' => __( '6', 'seogezegeni' ),
                'label' => __( 'Analizden desteğe proje adımı', 'seogezegeni' ),
            ],
        ],
        'h_intro' => __( 'Profesyonel Web Tasarım ve *Özel Yazılım Çözümleri*', 'seogezegeni' ),
        't_intro_a' => [
            __( 'Dijital dünyada ilk izlenim artık fiziksel mağazalarda değil, web sitelerinde oluşuyor. Potansiyel müşterileriniz markanızla ilk kez çoğu zaman web siteniz üzerinden tanışıyor, hizmetlerinizi inceliyor, güvenilirliğinizi değerlendiriyor ve satın alma kararının ilk adımını burada atıyor. Bu nedenle bir web sitesi yalnızca şirketinizi tanıtan dijital bir vitrin değil; satış süreçlerini destekleyen, marka algısını güçlendiren ve pazarlama yatırımlarının verimliliğini artıran stratejik bir iş aracıdır.', 'seogezegeni' ),
            __( 'Bugün birçok işletme profesyonel görünen bir web sitesine sahip olsa da bu sitelerin önemli bir bölümü ziyaretçileri müşteriye dönüştürmekte yetersiz kalmaktadır. Bunun temel nedeni, web tasarım sürecinin yalnızca estetik kaygılarla ele alınmasıdır. Oysa başarılı bir web sitesi; kullanıcı deneyimi, performans, SEO altyapısı, mobil uyumluluk, güvenlik, içerik mimarisi ve dönüşüm optimizasyonu gibi birçok bileşenin birlikte planlanmasıyla ortaya çıkar.', 'seogezegeni' ),
        ],
        't_intro_b' => [
            __( 'SEO Gezegeni olarak **web tasarım** ve özel yazılım projelerine yalnızca tasarım perspektifiyle yaklaşmıyoruz. Geliştirdiğimiz her projeyi dijital pazarlama stratejisinin temel yapı taşı olarak değerlendiriyor; kullanıcı deneyimini, arama motoru görünürlüğünü ve dönüşüm hedeflerini aynı çatı altında buluşturuyoruz. Böylece yalnızca modern görünen değil, işletmenizin büyümesine katkı sağlayan dijital platformlar geliştiriyoruz.', 'seogezegeni' ),
        ],
        'h_yatirim' => __( 'Web Tasarım Neden *Bir Dijital Yatırımdır?*', 'seogezegeni' ),
        't_yatirim' => [
            __( 'Bir web sitesi oluşturmak tek başına yatırım değildir. Gerçek yatırım, işletmenizin uzun yıllar boyunca müşteri kazanmasını destekleyecek sürdürülebilir bir dijital altyapı kurmaktır.', 'seogezegeni' ),
            __( 'Bir kullanıcı web sitenizi ziyaret ettiğinde saniyeler içinde markanız hakkında bir fikir oluşturur. Sayfanın yavaş açılması, karmaşık bir arayüz, mobil cihazlarda yaşanan kullanım problemleri veya güven vermeyen bir tasarım; ziyaretçinin siteyi terk etmesine neden olabilir. Bu durum yalnızca kullanıcı deneyimini değil, SEO performansını, reklam kampanyalarının verimliliğini ve dönüşüm oranlarını da doğrudan etkiler.', 'seogezegeni' ),
            __( 'Başarılı bir **web tasarım**, markanızın dijital dünyadaki güvenilirliğini artırırken kullanıcıların ihtiyaç duyduğu bilgiye hızlı ulaşmasını sağlar. Aynı zamanda işletmenizin pazarlama faaliyetlerinin üzerine inşa edileceği sağlam bir altyapı oluşturur.', 'seogezegeni' ),
        ],
        't_yatirim_lead' => [
            __( 'Bir web sitesi;', 'seogezegeni' ),
        ],
        'yatirim_list' => [
            __( 'Organik trafik kazanmalı', 'seogezegeni' ),
            __( 'Reklam kampanyalarını desteklemeli', 'seogezegeni' ),
            __( 'Potansiyel müşterileri yönlendirebilmeli', 'seogezegeni' ),
            __( 'Marka güvenini güçlendirmeli', 'seogezegeni' ),
            __( 'İş süreçlerini kolaylaştırmalı', 'seogezegeni' ),
            __( 'Uzun yıllar boyunca geliştirilebilir olmalıdır.', 'seogezegeni' ),
        ],
        't_yatirim_foot' => [
            __( 'Bu nedenle web tasarım, yalnızca bugünün ihtiyaçlarını değil gelecekteki büyüme hedeflerini de destekleyen stratejik bir yatırımdır.', 'seogezegeni' ),
        ],
        'h_gerek' => __( 'Neden Profesyonel *Web Tasarım Gereklidir?*', 'seogezegeni' ),
        't_gerek' => [
            __( 'Hazır tema kullanılarak kısa sürede oluşturulan web siteleri başlangıç aşamasında ekonomik bir çözüm gibi görünse de uzun vadede performans, güvenlik ve ölçeklenebilirlik açısından önemli sınırlamalar oluşturabilir.', 'seogezegeni' ),
            __( 'Profesyonel **kurumsal web tasarım**, işletmenin marka kimliğine, hedef kitlesine ve dijital pazarlama hedeflerine özel olarak planlanır. Böylece her sayfa yalnızca estetik açıdan değil; kullanıcı davranışları, SEO kriterleri ve dönüşüm hedefleri doğrultusunda geliştirilir.', 'seogezegeni' ),
        ],
        't_gerek_lead' => [
            __( 'Profesyonel yaklaşımın sağladığı avantajlardan bazıları şunlardır:', 'seogezegeni' ),
        ],
        'gerek_list' => [
            __( 'Marka kimliğine özel tasarım dili', 'seogezegeni' ),
            __( 'SEO uyumlu sayfa mimarisi', 'seogezegeni' ),
            __( 'Mobil öncelikli (Mobile First) geliştirme', 'seogezegeni' ),
            __( 'Hızlı yüklenen sayfalar', 'seogezegeni' ),
            __( 'Güçlü güvenlik altyapısı', 'seogezegeni' ),
            __( 'Esnek yönetim paneli', 'seogezegeni' ),
            __( 'Ölçeklenebilir yazılım mimarisi', 'seogezegeni' ),
            __( 'Gelişmiş entegrasyon desteği', 'seogezegeni' ),
        ],
        't_gerek_foot' => [
            __( 'Bu özellikler yalnızca daha modern görünen bir web sitesi oluşturmaz; aynı zamanda dijital pazarlama yatırımlarınızın daha yüksek verimle çalışmasını sağlar.', 'seogezegeni' ),
        ],
        'h_ozel' => __( 'Modern Web Sitelerinde *Bulunması Gereken Özellikler*', 'seogezegeni' ),
        't_ozel' => [
            __( 'Dijital kullanıcı beklentileri her geçen yıl değişiyor. Artık kullanıcılar yalnızca bilgiye ulaşmak istemiyor; bunu hızlı, güvenli ve kesintisiz bir deneyimle gerçekleştirmeyi bekliyor.', 'seogezegeni' ),
            __( 'Bu nedenle modern bir web sitesi geliştirilirken birçok teknik ve tasarımsal kriter birlikte değerlendirilmelidir.', 'seogezegeni' ),
        ],
        'features' => [
            [
                'icon' => 'fa-solid fa-hand-pointer',
                'title' => __( 'Kullanıcı Deneyimi (UX)', 'seogezegeni' ),
                'paras' => [
                    __( 'Kullanıcı deneyimi, ziyaretçilerin web sitesiyle kurduğu etkileşimin tamamını kapsar.', 'seogezegeni' ),
                    __( 'Menü yapısından içerik yerleşimine, buton konumlarından form kullanımına kadar her detay kullanıcıların siteyi kolay kullanabilmesini sağlamalıdır.', 'seogezegeni' ),
                ],
                'list_intro' => __( 'İyi planlanmış kullanıcı deneyimi aşağıdaki sonuçlara katkı sağlar:', 'seogezegeni' ),
                'list' => [
                    __( 'Sayfada geçirilen süreyi artırır', 'seogezegeni' ),
                    __( 'Hemen çıkma oranını düşürür', 'seogezegeni' ),
                    __( 'Dönüşüm oranlarını yükseltir.', 'seogezegeni' ),
                ],
                'closing' => [],
            ],
            [
                'icon' => 'fa-solid fa-palette',
                'title' => __( 'Kullanıcı Arayüzü (UI)', 'seogezegeni' ),
                'paras' => [
                    __( 'Görsel tasarım yalnızca estetik değildir.', 'seogezegeni' ),
                    __( 'Renk kullanımı, tipografi, boşluk yönetimi, ikonlar ve görsel hiyerarşi kullanıcıların içerikleri daha rahat algılamasını sağlar.', 'seogezegeni' ),
                    __( 'Modern kullanıcı arayüzü tasarımları sade, okunabilir ve marka kimliğiyle uyumlu olmalıdır.', 'seogezegeni' ),
                ],
                'list_intro' => __( '', 'seogezegeni' ),
                'list' => [],
                'closing' => [],
            ],
            [
                'icon' => 'fa-solid fa-mobile-screen',
                'title' => __( 'Responsive (Mobil Uyumlu) Tasarım', 'seogezegeni' ),
                'paras' => [
                    __( 'Bugün web sitesi trafiğinin büyük bölümü mobil cihazlardan gelmektedir.', 'seogezegeni' ),
                    __( 'Bu nedenle masaüstünde iyi görünen ancak mobil cihazlarda sorun yaşatan web siteleri hem kullanıcı deneyimi hem de SEO açısından önemli dezavantaj oluşturur.', 'seogezegeni' ),
                    __( '**Mobil uyumlu web tasarım**, ekran boyutundan bağımsız olarak tüm cihazlarda aynı kaliteyi sunmalıdır.', 'seogezegeni' ),
                    __( 'SEO Gezegeni olarak geliştirdiğimiz projelerde Mobile First yaklaşımını esas alıyor, tasarım ve yazılım süreçlerini öncelikle mobil kullanıcı deneyimine göre planlıyoruz.', 'seogezegeni' ),
                ],
                'list_intro' => __( '', 'seogezegeni' ),
                'list' => [],
                'closing' => [],
            ],
            [
                'icon' => 'fa-solid fa-gauge-high',
                'title' => __( 'Core Web Vitals ve Site Performansı', 'seogezegeni' ),
                'paras' => [
                    __( 'Sayfa hızı yalnızca kullanıcı memnuniyetini değil, arama motorlarındaki görünürlüğü de doğrudan etkileyen faktörlerden biridir.', 'seogezegeni' ),
                ],
                'list_intro' => __( 'Google\'ın Core Web Vitals metrikleri aşağıdaki performans kriterlerini değerlendirerek kullanıcı deneyimini ölçmektedir:', 'seogezegeni' ),
                'list' => [
                    __( 'Largest Contentful Paint (LCP)', 'seogezegeni' ),
                    __( 'Interaction to Next Paint (INP)', 'seogezegeni' ),
                    __( 'Cumulative Layout Shift (CLS)', 'seogezegeni' ),
                ],
                'closing' => [
                    __( 'Optimum performansa sahip bir web sitesi hem organik görünürlüğü destekler hem de reklam kampanyalarının daha yüksek dönüşüm sağlamasına katkıda bulunur.', 'seogezegeni' ),
                ],
            ],
            [
                'icon' => 'fa-solid fa-shield-halved',
                'title' => __( 'Güvenlik Altyapısı', 'seogezegeni' ),
                'paras' => [
                    __( 'Bir web sitesi yalnızca ziyaretçilere bilgi sunmakla kalmaz; aynı zamanda işletmenin dijital varlıklarını da korumalıdır.', 'seogezegeni' ),
                    __( 'SSL sertifikaları, güvenli giriş sistemleri, düzenli yazılım güncellemeleri, güvenlik duvarları ve yedekleme çözümleri modern web projelerinin vazgeçilmez bileşenleri arasında yer alır.', 'seogezegeni' ),
                    __( 'Güçlü güvenlik altyapısı, hem kullanıcı güvenini artırır hem de olası veri kayıplarının önüne geçer.', 'seogezegeni' ),
                ],
                'list_intro' => __( '', 'seogezegeni' ),
                'list' => [],
                'closing' => [],
            ],
        ],
        'h_marka' => __( 'Web Tasarım ile *Marka Algısı Arasındaki İlişki*', 'seogezegeni' ),
        't_marka' => [
            __( 'Bir markanın dijital dünyadaki itibarı büyük ölçüde web sitesi üzerinden şekillenir.', 'seogezegeni' ),
            __( 'Profesyonel bir tasarım, ziyaretçilere güven verirken markanın kurumsal kimliğini de güçlendirir. Kullanıcılar kaliteli tasarlanmış, hızlı çalışan ve kolay kullanılan web sitelerini daha güvenilir olarak algılama eğilimindedir.', 'seogezegeni' ),
            __( 'Buna karşılık eski teknolojiyle hazırlanmış, karmaşık yapıya sahip veya güncelliğini yitirmiş web siteleri markanın profesyonelliği hakkında olumsuz bir izlenim oluşturabilir.', 'seogezegeni' ),
        ],
        't_marka_foot' => [
            __( 'Bu nedenle *web tasarım* yalnızca estetik bir çalışma değil, marka iletişiminin en güçlü araçlarından biridir.', 'seogezegeni' ),
        ],
        'h_yeter' => __( 'Web Tasarım Neden *Tek Başına Yeterli Değildir?*', 'seogezegeni' ),
        't_yeter' => [
            __( 'Başarılı bir web sitesi oluşturmak önemli bir adımdır; ancak tek başına yeterli değildir.', 'seogezegeni' ),
            __( 'Bir web sitesinin gerçek değer üretmesi için dijital pazarlamanın diğer bileşenleriyle entegre çalışması gerekir.', 'seogezegeni' ),
        ],
        't_yeter_lead' => [
            __( 'Örneğin;', 'seogezegeni' ),
        ],
        'yeter_list' => [
            __( 'SEO çalışmaları güçlü bir teknik altyapı gerektirir.', 'seogezegeni' ),
            __( 'Google Ads kampanyaları hızlı açılan açılış sayfalarına ihtiyaç duyar.', 'seogezegeni' ),
            __( 'Meta reklamları dönüşüm odaklı kullanıcı deneyiminden beslenir.', 'seogezegeni' ),
            __( 'İçerik pazarlaması doğru bilgi mimarisi üzerine kurulmalıdır.', 'seogezegeni' ),
            __( 'Dönüşüm optimizasyonu kullanıcı davranışlarının analiz edilmesini gerektirir.', 'seogezegeni' ),
        ],
        't_yeter_foot' => [
            __( 'Tüm bu süreçler bir araya geldiğinde web sitesi yalnızca bilgi veren bir platform olmaktan çıkar; işletmenin satış, pazarlama ve büyüme hedeflerini destekleyen stratejik bir dijital merkeze dönüşür.', 'seogezegeni' ),
            __( 'SEO Gezegeni olarak geliştirdiğimiz web tasarım ve yazılım projelerinde, estetik görünüm ile teknik altyapıyı birlikte ele alıyor; SEO, performans pazarlaması ve kullanıcı deneyimini aynı sistem içinde planlıyoruz. Böylece yalnızca bugünün ihtiyaçlarını karşılayan değil, gelecekte büyümeye devam edecek sürdürülebilir dijital platformlar geliştiriyoruz.', 'seogezegeni' ),
        ],
        'h_hiz' => __( 'Web Tasarım *Hizmetlerimiz*', 'seogezegeni' ),
        't_hiz' => [
            __( 'Her işletmenin dijital hedefleri, hedef kitlesi ve büyüme stratejisi farklıdır. Bu nedenle tüm projelerde aynı tasarım anlayışını uygulamak yerine, işletmenin ihtiyaçlarına uygun web çözümleri geliştiriyoruz.', 'seogezegeni' ),
            __( 'SEO Gezegeni olarak web tasarım sürecini yalnızca görsel bir çalışma olarak değerlendirmiyoruz. Her projeye; kullanıcı deneyimi, teknik SEO, performans, güvenlik, dönüşüm optimizasyonu ve sürdürülebilir yazılım altyapısını kapsayan bütüncül bir bakış açısıyla yaklaşıyoruz.', 'seogezegeni' ),
            __( 'Geliştirdiğimiz web siteleri yalnızca estetik görünmek için değil; ziyaretçilerin doğru bilgiye hızlı ulaşmasını sağlamak, marka güvenini artırmak ve işletmenizin dijital pazarlama faaliyetlerini desteklemek amacıyla planlanır.', 'seogezegeni' ),
        ],
        'services' => [
            [
                'icon' => 'fa-solid fa-building',
                'title' => __( 'Kurumsal Web Tasarım', 'seogezegeni' ),
                'paras' => [
                    __( 'Kurumsal web sitesi, bir işletmenin dijital dünyadaki en önemli temsil alanıdır. Potansiyel müşteriler, iş ortakları ve yatırımcılar çoğu zaman marka hakkında ilk izlenimlerini web sitesi üzerinden oluşturur.', 'seogezegeni' ),
                    __( 'Bu nedenle **kurumsal web tasarım**, yalnızca modern bir arayüz oluşturmakla sınırlı değildir. Marka kimliği, hedef kitle beklentileri ve kullanıcı deneyimi birlikte değerlendirilerek güven veren bir dijital yapı oluşturulmalıdır.', 'seogezegeni' ),
                ],
                'list_intro' => __( 'Kurumsal projelerde özellikle şu unsurlara önem veriyoruz:', 'seogezegeni' ),
                'list' => [
                    __( 'Marka kimliğine uygun özgün tasarım', 'seogezegeni' ),
                    __( 'Kolay kullanılabilir bilgi mimarisi', 'seogezegeni' ),
                    __( 'Güçlü içerik hiyerarşisi', 'seogezegeni' ),
                    __( 'Mobil uyumlu yapı', 'seogezegeni' ),
                    __( 'Hızlı yükleme süreleri', 'seogezegeni' ),
                    __( 'SEO dostu sayfa yapısı', 'seogezegeni' ),
                    __( 'Kolay yönetilebilir içerik sistemi', 'seogezegeni' ),
                ],
                'closing' => [
                    __( 'Böylece işletmeler yalnızca profesyonel görünen değil, dijital iletişim süreçlerini güçlendiren bir web altyapısına sahip olur.', 'seogezegeni' ),
                ],
            ],
            [
                'icon' => 'fa-solid fa-magnifying-glass-chart',
                'title' => __( 'SEO Uyumlu Web Tasarım', 'seogezegeni' ),
                'paras' => [
                    __( 'Arama motorlarında görünür olmak yalnızca sonradan yapılan SEO çalışmalarıyla sağlanmaz. Başarılı SEO\'nun temelinde doğru planlanmış teknik altyapı yer alır.', 'seogezegeni' ),
                    __( 'Bu nedenle geliştirdiğimiz tüm projelerde SEO kriterleri tasarım ve yazılım sürecinin ilk aşamasından itibaren dikkate alınır.', 'seogezegeni' ),
                ],
                'list_intro' => __( 'SEO uyumlu bir web sitesinde aşağıdakiler birlikte planlanmalıdır:', 'seogezegeni' ),
                'list' => [
                    __( 'Temiz kod yapısı', 'seogezegeni' ),
                    __( 'Mantıksal URL mimarisi', 'seogezegeni' ),
                    __( 'Doğru başlık hiyerarşisi', 'seogezegeni' ),
                    __( 'Yapılandırılmış veri desteği', 'seogezegeni' ),
                    __( 'Hızlı yükleme süreleri', 'seogezegeni' ),
                    __( 'Mobil uyumluluk', 'seogezegeni' ),
                    __( 'Taranabilir içerik yapısı', 'seogezegeni' ),
                ],
                'closing' => [
                    __( 'Bu yaklaşım sayesinde web sitesi yalnızca kullanıcılar için değil, arama motorları için de daha anlaşılır hâle gelir.', 'seogezegeni' ),
                ],
            ],
            [
                'icon' => 'fa-solid fa-mobile-screen-button',
                'title' => __( 'Mobil Uyumlu (Responsive) Web Tasarım', 'seogezegeni' ),
                'paras' => [
                    __( 'Mobil cihazlardan yapılan ziyaretlerin masaüstünü geride bırakmasıyla birlikte responsive tasarım artık tercih değil, zorunluluk hâline gelmiştir.', 'seogezegeni' ),
                    __( 'Kullanıcılar farklı ekran boyutlarında aynı kaliteyi bekler. Menülerin kolay kullanılabilmesi, içeriklerin rahat okunabilmesi ve formların sorunsuz çalışması kullanıcı deneyimini doğrudan etkiler.', 'seogezegeni' ),
                ],
                'list_intro' => __( 'Responsive geliştirme sürecinde aşağıdakiler dikkate alınmalıdır:', 'seogezegeni' ),
                'list' => [
                    __( 'Farklı ekran çözünürlükleri', 'seogezegeni' ),
                    __( 'Dokunmatik kullanım alışkanlıkları', 'seogezegeni' ),
                    __( 'Mobil performans', 'seogezegeni' ),
                    __( 'Okunabilir tipografi', 'seogezegeni' ),
                    __( 'Esnek grid sistemleri', 'seogezegeni' ),
                ],
                'closing' => [
                    __( 'SEO Gezegeni olarak tüm projelerimizi Mobile First yaklaşımıyla geliştiriyor, kullanıcı deneyimini masaüstünden önce mobil cihazlarda optimize ediyoruz.', 'seogezegeni' ),
                ],
            ],
            [
                'icon' => 'fa-solid fa-bullseye',
                'title' => __( 'Landing Page Tasarımı', 'seogezegeni' ),
                'paras' => [
                    __( 'Her web sayfasının amacı aynı değildir.', 'seogezegeni' ),
                    __( 'Bazı sayfalar bilgi vermek için hazırlanırken, bazıları doğrudan dönüşüm üretmek amacıyla geliştirilir.', 'seogezegeni' ),
                ],
                'list_intro' => __( 'Landing Page tasarımları özellikle aşağıdaki çalışmalar için yüksek dönüşüm odaklı olarak hazırlanır:', 'seogezegeni' ),
                'list' => [
                    __( 'Google Ads', 'seogezegeni' ),
                    __( 'Meta reklamları', 'seogezegeni' ),
                    __( 'E-posta pazarlaması', 'seogezegeni' ),
                    __( 'Kampanya yönetimi', 'seogezegeni' ),
                    __( 'Ürün lansmanları', 'seogezegeni' ),
                ],
                'closing' => [
                    __( 'Başarılı bir landing page; dikkat dağıtmayan sade yapı, güçlü başlık, net değer önerisi, güven unsurları, etkili CTA, hızlı yüklenme süresi gibi kriterleri birlikte karşılamalıdır.', 'seogezegeni' ),
                    __( 'Reklam kampanyalarının başarısında yalnızca reklam metinleri değil, kullanıcıların yönlendirildiği açılış sayfalarının kalitesi de belirleyici rol oynar.', 'seogezegeni' ),
                ],
            ],
            [
                'icon' => 'fa-solid fa-cart-shopping',
                'title' => __( 'E-Ticaret Web Sitesi Geliştirme', 'seogezegeni' ),
                'paras' => [
                    __( 'E-ticaret projeleri yalnızca ürünlerin listelendiği web siteleri değildir.', 'seogezegeni' ),
                    __( 'Başarılı bir e-ticaret altyapısı; kullanıcı deneyimi, ödeme sistemleri, stok yönetimi, ürün filtreleme, sipariş süreçleri ve SEO performansını aynı sistem içerisinde yönetebilmelidir.', 'seogezegeni' ),
                ],
                'list_intro' => __( 'Geliştirdiğimiz e-ticaret projelerinde aşağıdaki süreçleri birlikte planlıyoruz:', 'seogezegeni' ),
                'list' => [
                    __( 'Kategori mimarisi', 'seogezegeni' ),
                    __( 'Ürün sayfası optimizasyonu', 'seogezegeni' ),
                    __( 'Hızlı ödeme süreçleri', 'seogezegeni' ),
                    __( 'Güvenli ödeme altyapısı', 'seogezegeni' ),
                    __( 'Mobil alışveriş deneyimi', 'seogezegeni' ),
                    __( 'Gelişmiş filtreleme', 'seogezegeni' ),
                    __( 'Pazaryeri entegrasyonları', 'seogezegeni' ),
                ],
                'closing' => [
                    __( 'Amaç yalnızca satış yapmak değil; kullanıcıların alışveriş deneyimini kolaylaştırarak tekrar satın alma olasılığını artırmaktır.', 'seogezegeni' ),
                ],
            ],
            [
                'icon' => 'fa-brands fa-wordpress',
                'title' => __( 'WordPress Web Siteleri', 'seogezegeni' ),
                'paras' => [
                    __( 'WordPress, dünyanın en yaygın içerik yönetim sistemlerinden biri olmasına rağmen her WordPress projesi aynı kaliteyi sunmaz.', 'seogezegeni' ),
                    __( 'Hazır tema ve çok sayıda eklentiyle oluşturulan web siteleri zaman içinde performans, güvenlik ve bakım sorunları yaşayabilir.', 'seogezegeni' ),
                ],
                'list_intro' => __( 'SEO Gezegeni olarak WordPress projelerinde:', 'seogezegeni' ),
                'list' => [
                    __( 'Gereksiz eklenti kullanımını sınırlandırıyor', 'seogezegeni' ),
                    __( 'Performans odaklı tema geliştirme yapıyor', 'seogezegeni' ),
                    __( 'Güvenlik standartlarını uyguluyor', 'seogezegeni' ),
                    __( 'SEO dostu yapı oluşturuyor', 'seogezegeni' ),
                    __( 'Ölçeklenebilir sistemler geliştiriyoruz.', 'seogezegeni' ),
                ],
                'closing' => [
                    __( 'Böylece yönetimi kolay, hızlı çalışan ve uzun yıllar geliştirilebilecek WordPress altyapıları oluşturuyoruz.', 'seogezegeni' ),
                ],
            ],
            [
                'icon' => 'fa-solid fa-sliders',
                'title' => __( 'İçerik Yönetim Sistemleri (CMS)', 'seogezegeni' ),
                'paras' => [
                    __( 'Bir web sitesi yalnızca yayınlandıktan sonra değil, kullanım süresi boyunca da kolay yönetilebilir olmalıdır.', 'seogezegeni' ),
                    __( 'Bu nedenle içerik yönetim sistemleri; teknik bilgi gerektirmeden sayfa düzenleme, blog ekleme, görsel güncelleme ve içerik yönetimi yapılmasına olanak tanır.', 'seogezegeni' ),
                    __( 'İşletmenin ihtiyaçlarına göre WordPress veya özel geliştirilen yönetim panelleri tercih edilebilir.', 'seogezegeni' ),
                    __( 'Amacımız, teknik bağımlılığı azaltan ve içerik süreçlerini hızlandıran kullanıcı dostu sistemler geliştirmektir.', 'seogezegeni' ),
                ],
                'list_intro' => __( '', 'seogezegeni' ),
                'list' => [],
                'closing' => [],
            ],
        ],
        'h_donus' => __( 'Web Tasarımda *Dönüşüm Odaklı Yaklaşım*', 'seogezegeni' ),
        't_donus' => [
            __( 'Modern **web tasarım** yalnızca estetik görünüm üretmez.', 'seogezegeni' ),
            __( 'Başarılı projeler, kullanıcıların belirli aksiyonları gerçekleştirmesini kolaylaştıracak şekilde planlanır.', 'seogezegeni' ),
        ],
        't_donus_lead' => [
            __( 'Bu aksiyonlar şunlar olabilir:', 'seogezegeni' ),
        ],
        'donus_list' => [
            __( 'Teklif formu doldurmak', 'seogezegeni' ),
            __( 'Telefon aramak', 'seogezegeni' ),
            __( 'WhatsApp üzerinden iletişime geçmek', 'seogezegeni' ),
            __( 'Ürün satın almak', 'seogezegeni' ),
            __( 'Randevu oluşturmak', 'seogezegeni' ),
            __( 'Demo talebinde bulunmak', 'seogezegeni' ),
        ],
        't_donus_lead2' => [
            __( 'Dönüşüm odaklı tasarım yaklaşımında;', 'seogezegeni' ),
        ],
        'donus_list2' => [
            __( 'Kullanıcı davranışları analiz edilir', 'seogezegeni' ),
            __( 'Dikkat dağıtan unsurlar azaltılır', 'seogezegeni' ),
            __( 'CTA yerleşimleri optimize edilir', 'seogezegeni' ),
            __( 'Güven unsurları güçlendirilir', 'seogezegeni' ),
            __( 'Kullanıcı yolculuğu sadeleştirilir.', 'seogezegeni' ),
        ],
        't_donus_foot' => [
            __( 'Bu çalışmalar sayesinde web sitesi yalnızca ziyaret edilen değil, işletme hedeflerine katkı sağlayan aktif bir satış kanalına dönüşür.', 'seogezegeni' ),
        ],
        'h_birlikte' => __( 'Tasarım ve Yazılım *Birlikte Planlanmalıdır*', 'seogezegeni' ),
        't_birlikte' => [
            __( 'Başarılı dijital projelerde tasarım ve yazılım birbirinden bağımsız düşünülemez.', 'seogezegeni' ),
            __( 'Etkileyici bir tasarım; güçlü teknik altyapıyla desteklenmediğinde performans sorunları yaşanabilir. Aynı şekilde güçlü bir yazılım altyapısı da kullanıcı deneyimi zayıf olduğunda beklenen etkiyi oluşturamaz.', 'seogezegeni' ),
        ],
        't_birlikte_lead' => [
            __( 'Bu nedenle projelerimizde aşağıdakiler aynı proje planı içerisinde birlikte ele alınır:', 'seogezegeni' ),
        ],
        'birlikte_list' => [
            __( 'UX tasarımı', 'seogezegeni' ),
            __( 'UI tasarımı', 'seogezegeni' ),
            __( 'Frontend geliştirme', 'seogezegeni' ),
            __( 'Backend geliştirme', 'seogezegeni' ),
            __( 'Performans optimizasyonu', 'seogezegeni' ),
            __( 'SEO altyapısı', 'seogezegeni' ),
            __( 'Güvenlik', 'seogezegeni' ),
            __( 'Ölçeklenebilir yazılım mimarisi', 'seogezegeni' ),
        ],
        't_birlikte_foot' => [
            __( 'Bu yaklaşım sayesinde ortaya yalnızca şık görünen bir web sitesi değil, uzun yıllar geliştirilebilecek güçlü bir dijital altyapı çıkar.', 'seogezegeni' ),
        ],
        'h_yaz' => __( 'Özel Yazılım *Geliştirme Hizmetlerimiz*', 'seogezegeni' ),
        't_yaz' => [
            __( 'Her işletmenin çalışma modeli, operasyon süreçleri ve büyüme hedefleri birbirinden farklıdır. Bu nedenle hazır yazılımlar her zaman ihtiyaçları tam olarak karşılamayabilir. İş süreçleri geliştikçe standart paketlerin sınırları daha belirgin hâle gelir ve işletmeler mevcut sistemlerini süreçlerine uydurmak yerine, süreçlerini yazılımın sınırlarına göre şekillendirmek zorunda kalabilir.', 'seogezegeni' ),
            __( 'İşte bu noktada **özel yazılım geliştirme** çözümleri devreye girer.', 'seogezegeni' ),
            __( 'SEO Gezegeni olarak işletmelerin mevcut iş akışlarını analiz ediyor, ihtiyaçlarını detaylı şekilde değerlendiriyor ve tamamen kuruma özel yazılım altyapıları geliştiriyoruz. Amacımız yalnızca çalışan bir sistem oluşturmak değil; süreçleri hızlandıran, verimliliği artıran ve gelecekte büyümeye uyum sağlayabilecek ölçeklenebilir dijital platformlar geliştirmektir.', 'seogezegeni' ),
            __( 'Hazırladığımız özel yazılım projeleri, işletmenin mevcut operasyonlarına uyum sağlayacak şekilde planlanır ve gerektiğinde yeni modüllerle genişletilebilir. Böylece kullanılan yazılım, büyüyen işletmenin önünde engel oluşturan değil; gelişimini destekleyen stratejik bir yatırım hâline gelir.', 'seogezegeni' ),
        ],
        'h_yazned' => __( 'Özel Yazılım Geliştirme *Nedir?*', 'seogezegeni' ),
        't_yazned' => [
            __( 'Hazır paket yazılımlar birçok işletme için başlangıç aşamasında pratik çözümler sunabilir. Ancak süreçler karmaşıklaştıkça, farklı departmanlar devreye girdikçe ve iş hacmi büyüdükçe standart yazılımların sınırları ortaya çıkmaya başlar.', 'seogezegeni' ),
            __( '**Özel yazılım geliştirme**, işletmenin ihtiyaçlarına göre sıfırdan planlanan ve tamamen o organizasyonun iş süreçlerine uygun olarak geliştirilen dijital sistemlerin oluşturulmasını ifade eder.', 'seogezegeni' ),
        ],
        't_yazned_lead' => [
            __( 'Bu yaklaşım sayesinde;', 'seogezegeni' ),
        ],
        'yazned_list' => [
            __( 'Gereksiz modüller kullanılmaz', 'seogezegeni' ),
            __( 'İhtiyaç duyulan fonksiyonlar önceliklendirilir', 'seogezegeni' ),
            __( 'Kullanıcı deneyimi işletmeye göre şekillendirilir', 'seogezegeni' ),
            __( 'Süreçler otomatikleştirilebilir', 'seogezegeni' ),
            __( 'Farklı sistemlerle entegrasyon sağlanabilir.', 'seogezegeni' ),
        ],
        't_yazned_foot' => [
            __( 'Sonuç olarak işletme, hazır sistemlerin sınırları içerisinde çalışmak yerine kendi ihtiyaçlarına uygun bir dijital altyapıya sahip olur.', 'seogezegeni' ),
        ],
        'h_hazir' => __( 'Hazır Yazılım mı, *Özel Yazılım mı?*', 'seogezegeni' ),
        't_hazir' => [
            __( 'Bu sorunun tek bir doğru cevabı yoktur. Tercih; işletmenin büyüklüğüne, operasyonel ihtiyaçlarına, hedeflerine ve gelecekteki büyüme planlarına göre değişiklik gösterebilir.', 'seogezegeni' ),
        ],
        't_hazir_lead' => [
            __( 'Hazır yazılımlar aşağıdaki avantajları sunabilir:', 'seogezegeni' ),
        ],
        'hazir_list' => [
            __( 'Daha kısa sürede kullanılabilir', 'seogezegeni' ),
            __( 'Başlangıç maliyetleri düşük olabilir', 'seogezegeni' ),
            __( 'Standart ihtiyaçları karşılayabilir.', 'seogezegeni' ),
        ],
        't_hazir_lead2' => [
            __( 'Ancak zaman içerisinde aşağıdaki sınırlamalar işletmenin gelişimini yavaşlatabilir:', 'seogezegeni' ),
        ],
        'hazir_list2' => [
            __( 'Özelleştirme sınırları', 'seogezegeni' ),
            __( 'Lisans maliyetleri', 'seogezegeni' ),
            __( 'Entegrasyon problemleri', 'seogezegeni' ),
            __( 'Performans kısıtları', 'seogezegeni' ),
        ],
        't_hazir_foot' => [
            __( 'Buna karşılık **özel yazılım çözümleri**, tamamen işletmeye göre geliştirildiği için süreçlere daha yüksek uyum sağlar. Gerektiğinde yeni modüller eklenebilir, mevcut yapı genişletilebilir ve farklı sistemlerle kolayca entegre edilebilir.', 'seogezegeni' ),
            __( 'Bu nedenle özellikle büyüme hedefi bulunan işletmeler için özel yazılım uzun vadede daha sürdürülebilir bir yatırım olabilir.', 'seogezegeni' ),
        ],
        'h_isl' => __( 'İşletmeye Özel *Yazılım Çözümleri*', 'seogezegeni' ),
        't_isl' => [
            __( 'Her işletmenin operasyon modeli farklıdır. Üretim yapan bir firmanın ihtiyaçları ile sağlık sektöründe faaliyet gösteren bir kurumun ya da hizmet sektöründeki bir işletmenin beklentileri aynı değildir.', 'seogezegeni' ),
            __( 'Bu nedenle geliştirdiğimiz **özel yazılım çözümleri**, hazır kalıplar yerine işletmenin gerçek ihtiyaçlarına göre şekillendirilir.', 'seogezegeni' ),
        ],
        't_isl_lead' => [
            __( 'Projeye başlamadan önce aşağıdaki adımlar uygulanır:', 'seogezegeni' ),
        ],
        'isl_list' => [
            __( 'Mevcut iş akışları analiz edilir', 'seogezegeni' ),
            __( 'Kullanıcı senaryoları hazırlanır', 'seogezegeni' ),
            __( 'Departmanların ihtiyaçları belirlenir', 'seogezegeni' ),
            __( 'Veri akışı planlanır', 'seogezegeni' ),
            __( 'Büyüme hedefleri değerlendirilir.', 'seogezegeni' ),
        ],
        't_isl_foot' => [
            __( 'Bu analizler doğrultusunda geliştirilen yazılımlar, yalnızca bugünkü ihtiyaçları değil gelecekte oluşabilecek gereksinimleri de destekleyecek şekilde tasarlanır.', 'seogezegeni' ),
        ],
        'solutions' => [
            [
                'icon' => 'fa-solid fa-address-book',
                'title' => __( 'CRM Yazılımları', 'seogezegeni' ),
                'paras' => [
                    __( 'Müşteri ilişkileri yönetimi, birçok işletme için satış süreçlerinin en kritik parçalarından biridir.', 'seogezegeni' ),
                    __( 'Hazır CRM sistemleri belirli ihtiyaçları karşılayabilir; ancak farklı satış süreçlerine sahip işletmeler için yeterli esnekliği sunmayabilir.', 'seogezegeni' ),
                ],
                'list_intro' => __( 'İşletmeye özel geliştirilen CRM yazılımları sayesinde:', 'seogezegeni' ),
                'list' => [
                    __( 'Müşteri kayıtları merkezi olarak yönetilebilir', 'seogezegeni' ),
                    __( 'Teklif süreçleri takip edilebilir', 'seogezegeni' ),
                    __( 'Satış ekipleri organize edilebilir', 'seogezegeni' ),
                    __( 'Müşteri iletişim geçmişi görüntülenebilir', 'seogezegeni' ),
                    __( 'Raporlamalar oluşturulabilir.', 'seogezegeni' ),
                ],
                'closing' => [
                    __( 'Böylece müşteri yönetimi yalnızca kayıt tutmaktan çıkar, satış süreçlerini destekleyen stratejik bir sisteme dönüşür.', 'seogezegeni' ),
                ],
            ],
            [
                'icon' => 'fa-solid fa-chart-pie',
                'title' => __( 'Yönetim Panelleri ve Dashboard Sistemleri', 'seogezegeni' ),
                'paras' => [
                    __( 'Veriye hızlı erişim, doğru karar almanın temel şartlarından biridir.', 'seogezegeni' ),
                    __( 'İşletmeye özel geliştirilen yönetim panelleri sayesinde farklı departmanlardan gelen bilgiler tek bir ekranda toplanabilir.', 'seogezegeni' ),
                ],
                'list_intro' => __( 'Dashboard sistemleri aşağıdakileri anlık olarak takip etmeye yardımcı olur:', 'seogezegeni' ),
                'list' => [
                    __( 'Satış performansını', 'seogezegeni' ),
                    __( 'Finansal verileri', 'seogezegeni' ),
                    __( 'Sipariş durumlarını', 'seogezegeni' ),
                    __( 'Kullanıcı hareketlerini', 'seogezegeni' ),
                    __( 'Operasyon süreçlerini', 'seogezegeni' ),
                ],
                'closing' => [
                    __( 'Karmaşık raporlar yerine görsel olarak anlaşılır paneller oluşturulması, yöneticilerin daha hızlı ve doğru kararlar almasını sağlar.', 'seogezegeni' ),
                ],
            ],
            [
                'icon' => 'fa-solid fa-diagram-project',
                'title' => __( 'ERP ve Üçüncü Taraf Sistem Entegrasyonları', 'seogezegeni' ),
                'paras' => [
                    __( 'Birçok işletme aynı anda birden fazla yazılım kullanmaktadır.', 'seogezegeni' ),
                    __( 'Muhasebe programları, stok sistemleri, kargo altyapıları, CRM uygulamaları, ödeme sistemleri ve ERP çözümleri arasında veri aktarımı manuel olarak yapıldığında hem zaman kaybı yaşanır hem de hata riski artar.', 'seogezegeni' ),
                    __( 'Bu nedenle özel yazılım projelerinde farklı sistemlerin birbirleriyle güvenli ve kesintisiz şekilde iletişim kurabilmesi büyük önem taşır.', 'seogezegeni' ),
                ],
                'list_intro' => __( 'API tabanlı entegrasyonlar sayesinde:', 'seogezegeni' ),
                'list' => [
                    __( 'Veri tekrarları önlenebilir', 'seogezegeni' ),
                    __( 'Manuel işlemler azaltılabilir', 'seogezegeni' ),
                    __( 'Operasyonel verimlilik artırılabilir', 'seogezegeni' ),
                    __( 'Departmanlar arasında bilgi akışı hızlandırılabilir.', 'seogezegeni' ),
                ],
                'closing' => [],
            ],
            [
                'icon' => 'fa-solid fa-calendar-check',
                'title' => __( 'Rezervasyon ve Randevu Sistemleri', 'seogezegeni' ),
                'paras' => [
                    __( 'Hizmet sektöründe faaliyet gösteren birçok işletme için rezervasyon süreçlerinin dijital olarak yönetilmesi önemli avantajlar sağlar.', 'seogezegeni' ),
                    __( 'İşletmeye özel geliştirilen rezervasyon sistemleri sayesinde kullanıcılar çevrim içi olarak uygun tarihleri görüntüleyebilir, randevu oluşturabilir ve süreçleri kolayca takip edebilir.', 'seogezegeni' ),
                ],
                'list_intro' => __( 'Bu sistemler aşağıdaki sektörler için uyarlanabilir:', 'seogezegeni' ),
                'list' => [
                    __( 'Klinikler', 'seogezegeni' ),
                    __( 'Eğitim kurumları', 'seogezegeni' ),
                    __( 'Danışmanlık şirketleri', 'seogezegeni' ),
                    __( 'Güzellik merkezleri', 'seogezegeni' ),
                    __( 'Spor salonları', 'seogezegeni' ),
                    __( 'Turizm işletmeleri', 'seogezegeni' ),
                ],
                'closing' => [],
            ],
            [
                'icon' => 'fa-solid fa-truck-ramp-box',
                'title' => __( 'B2B ve Bayi Yönetim Sistemleri', 'seogezegeni' ),
                'paras' => [
                    __( 'Üretici firmalar, distribütörler ve bayi ağıyla çalışan işletmeler için standart e-ticaret altyapıları çoğu zaman yeterli değildir.', 'seogezegeni' ),
                ],
                'list_intro' => __( 'Bu tür yapılarda aşağıdaki gelişmiş fonksiyonlara ihtiyaç duyulur:', 'seogezegeni' ),
                'list' => [
                    __( 'Bayi bazlı fiyatlandırmalar', 'seogezegeni' ),
                    __( 'İskonto oranları', 'seogezegeni' ),
                    __( 'Sipariş limitleri', 'seogezegeni' ),
                    __( 'Stok görüntüleme', 'seogezegeni' ),
                    __( 'Ödeme vadeleri', 'seogezegeni' ),
                    __( 'Kullanıcı yetkilendirmeleri', 'seogezegeni' ),
                ],
                'closing' => [
                    __( 'İşletmeye özel geliştirilen B2B platformları sayesinde tüm bu süreçler tek bir sistem üzerinden güvenli şekilde yönetilebilir.', 'seogezegeni' ),
                ],
            ],
            [
                'icon' => 'fa-solid fa-plug',
                'title' => __( 'API Entegrasyonları ve Otomasyon Çözümleri', 'seogezegeni' ),
                'paras' => [
                    __( 'İşletmeler büyüdükçe aynı işlemlerin tekrar tekrar manuel olarak yapılması ciddi zaman kayıplarına neden olur.', 'seogezegeni' ),
                    __( 'Özel yazılımlar sayesinde farklı platformlar arasında veri alışverişi otomatik hâle getirilebilir.', 'seogezegeni' ),
                ],
                'list_intro' => __( 'Örneğin aşağıdaki sistemler birbirine entegre edilerek süreçler otomatikleştirilebilir:', 'seogezegeni' ),
                'list' => [
                    __( 'Web sitesi ile ERP sistemi', 'seogezegeni' ),
                    __( 'CRM ile muhasebe yazılımı', 'seogezegeni' ),
                    __( 'E-ticaret altyapısı ile kargo firmaları', 'seogezegeni' ),
                    __( 'Ödeme sistemleri ile sipariş yönetimi', 'seogezegeni' ),
                ],
                'closing' => [
                    __( 'Bu yaklaşım yalnızca operasyonel verimliliği artırmaz; aynı zamanda hata oranlarını azaltarak daha güvenilir iş süreçleri oluşturur.', 'seogezegeni' ),
                ],
            ],
            [
                'icon' => 'fa-solid fa-robot',
                'title' => __( 'Yapay Zeka Destekli Yazılım Çözümleri', 'seogezegeni' ),
                'paras' => [
                    __( 'Yapay zeka, yalnızca içerik üretiminde değil; iş süreçlerinin yönetiminde de önemli fırsatlar sunmaktadır.', 'seogezegeni' ),
                ],
                'list_intro' => __( 'Günümüzde özel yazılım projelerinde aşağıdaki yapay zeka destekli çözümler kullanılabilmektedir:', 'seogezegeni' ),
                'list' => [
                    __( 'Akıllı arama sistemleri', 'seogezegeni' ),
                    __( 'Belge sınıflandırma', 'seogezegeni' ),
                    __( 'Müşteri destek asistanları', 'seogezegeni' ),
                    __( 'Öneri motorları', 'seogezegeni' ),
                    __( 'Otomatik raporlama', 'seogezegeni' ),
                    __( 'Veri analizi', 'seogezegeni' ),
                    __( 'Süreç otomasyonları', 'seogezegeni' ),
                ],
                'closing' => [
                    __( 'İşletmenin ihtiyaçlarına uygun şekilde planlanan bu teknolojiler, tekrar eden işleri azaltırken ekiplerin daha stratejik alanlara odaklanmasını sağlar.', 'seogezegeni' ),
                ],
            ],
        ],
        'h_mimari' => __( 'Ölçeklenebilir *Yazılım Mimarisi*', 'seogezegeni' ),
        't_mimari' => [
            __( 'Başarılı bir yazılım yalnızca bugünün ihtiyaçlarını karşılamaz; işletme büyüdükçe gelişmeye devam eder.', 'seogezegeni' ),
            __( 'Bu nedenle projelerimizi geliştirirken modüler mimariyi esas alıyor, yeni özelliklerin sisteme kolayca eklenebileceği esnek altyapılar oluşturuyoruz.', 'seogezegeni' ),
        ],
        't_mimari_lead' => [
            __( 'Ölçeklenebilir yazılım yaklaşımı sayesinde;', 'seogezegeni' ),
        ],
        'mimari_list' => [
            __( 'Yeni kullanıcılar sisteme kolayca eklenebilir', 'seogezegeni' ),
            __( 'Farklı modüller geliştirilebilir', 'seogezegeni' ),
            __( 'Performans kaybı yaşamadan büyüme sağlanabilir', 'seogezegeni' ),
            __( 'Gelecekteki teknolojilere daha kolay uyum sağlanabilir.', 'seogezegeni' ),
        ],
        't_mimari_foot' => [
            __( 'Bu yaklaşım, yazılım yatırımlarının uzun yıllar boyunca değer üretmeye devam etmesine katkı sağlar.', 'seogezegeni' ),
        ],
        't_ozet' => [
            __( 'Başarılı bir web sitesi yalnızca estetik açıdan etkileyici görünen sayfalardan oluşmaz. Gerçek başarı; kullanıcı deneyimini kolaylaştıran, yüksek performans sunan, arama motorları tarafından doğru şekilde taranabilen ve işletmenin ticari hedeflerine katkı sağlayan bütüncül bir dijital altyapı oluşturabilmektir.', 'seogezegeni' ),
            __( 'Birçok web projesi tasarım aşamasında başarılı görünmesine rağmen yayınlandıktan sonra beklenen performansı gösteremez. Bunun en önemli nedeni, projenin yalnızca görsel tasarım odaklı ele alınması ve teknik geliştirme süreçlerinin yeterince planlanmamasıdır.', 'seogezegeni' ),
            __( 'SEO Gezegeni olarak her projeyi; kullanıcı deneyimi, teknik SEO, performans, güvenlik, ölçeklenebilir yazılım mimarisi ve dönüşüm optimizasyonunu kapsayan kapsamlı bir geliştirme süreciyle yönetiyoruz. Böylece ortaya yalnızca modern görünen değil, işletmenin uzun vadeli büyümesini destekleyen güçlü dijital platformlar çıkıyor.', 'seogezegeni' ),
        ],
        'h_teknik' => __( 'Web Projelerinde *Teknik Yaklaşımımız*', 'seogezegeni' ),
        'tech_topics' => [
            [
                'icon' => 'fa-solid fa-hand-pointer',
                'title' => __( 'Kullanıcı Deneyimi (UX) Başarının Temelidir', 'seogezegeni' ),
                'paras' => [
                    __( 'Web sitesini ziyaret eden kullanıcı, aradığı bilgiye ne kadar hızlı ulaşabiliyorsa web sitesi o kadar başarılıdır.', 'seogezegeni' ),
                    __( 'Kullanıcı deneyimi (UX), ziyaretçinin site içerisindeki tüm yolculuğunu kapsar. Menü yapısı, içerik akışı, buton yerleşimleri, form süreçleri ve sayfalar arası geçişler kullanıcı davranışlarını doğrudan etkiler.', 'seogezegeni' ),
                ],
                'list_intro' => __( 'Başarılı bir UX tasarımında:', 'seogezegeni' ),
                'list' => [
                    __( 'Kullanıcı hedefleri analiz edilir', 'seogezegeni' ),
                    __( 'Bilgiye ulaşma süresi azaltılır', 'seogezegeni' ),
                    __( 'Gereksiz adımlar kaldırılır', 'seogezegeni' ),
                    __( 'Dikkat dağıtan unsurlar minimize edilir', 'seogezegeni' ),
                    __( 'Kullanıcıların karar verme süreci kolaylaştırılır.', 'seogezegeni' ),
                ],
                'closing' => [
                    __( 'İyi planlanmış bir kullanıcı deneyimi yalnızca memnuniyeti artırmaz; aynı zamanda dönüşüm oranlarının yükselmesine de katkı sağlar.', 'seogezegeni' ),
                ],
            ],
            [
                'icon' => 'fa-solid fa-swatchbook',
                'title' => __( 'Kullanıcı Arayüzü (UI) ve Görsel Hiyerarşi', 'seogezegeni' ),
                'paras' => [
                    __( 'Görsel tasarım, kullanıcı deneyimini destekleyen en önemli unsurlardan biridir.', 'seogezegeni' ),
                    __( 'Ancak başarılı bir kullanıcı arayüzü yalnızca estetik açıdan güçlü olmakla değerlendirilmez. Tasarım dili, markanın kimliğini yansıtmalı ve kullanıcıların içerikleri kolay algılayabileceği bir yapı sunmalıdır.', 'seogezegeni' ),
                ],
                'list_intro' => __( 'Bu süreçte aşağıdakiler bir bütün olarak değerlendirilir:', 'seogezegeni' ),
                'list' => [
                    __( 'Tipografi', 'seogezegeni' ),
                    __( 'Renk kullanımı', 'seogezegeni' ),
                    __( 'Boşluk dengesi', 'seogezegeni' ),
                    __( 'İkonografi', 'seogezegeni' ),
                    __( 'Kart yapıları', 'seogezegeni' ),
                    __( 'CTA butonları', 'seogezegeni' ),
                    __( 'Görsel hiyerarşi', 'seogezegeni' ),
                ],
                'closing' => [
                    __( 'Doğru tasarlanmış kullanıcı arayüzü, ziyaretçilerin web sitesi içerisinde daha rahat hareket etmesini sağlar ve karar verme sürecini destekler.', 'seogezegeni' ),
                ],
            ],
            [
                'icon' => 'fa-solid fa-sitemap',
                'title' => __( 'Bilgi Mimarisi (Information Architecture)', 'seogezegeni' ),
                'paras' => [
                    __( 'Bir web sitesinde kullanıcıların ihtiyaç duyduğu bilgiye kolay ulaşabilmesi, doğru bilgi mimarisiyle mümkündür.', 'seogezegeni' ),
                    __( 'Sayfalar rastgele oluşturulduğunda hem kullanıcılar hem de arama motorları içerikleri anlamakta zorlanabilir.', 'seogezegeni' ),
                ],
                'list_intro' => __( 'Proje planlama aşamasında aşağıdakiler detaylı olarak planlanmalıdır:', 'seogezegeni' ),
                'list' => [
                    __( 'Sayfa hiyerarşisi', 'seogezegeni' ),
                    __( 'Kategori yapıları', 'seogezegeni' ),
                    __( 'URL mimarisi', 'seogezegeni' ),
                    __( 'Dahili bağlantılar', 'seogezegeni' ),
                    __( 'Gezinme (navigation) sistemi', 'seogezegeni' ),
                ],
                'closing' => [
                    __( 'Doğru bilgi mimarisi sayesinde hem kullanıcı deneyimi gelişir hem de arama motorlarının web sitesini daha verimli taraması sağlanır.', 'seogezegeni' ),
                ],
            ],
            [
                'icon' => 'fa-solid fa-magnifying-glass',
                'title' => __( 'Teknik SEO Altyapısı', 'seogezegeni' ),
                'paras' => [
                    __( 'SEO yalnızca içerik üretmekten ibaret değildir.', 'seogezegeni' ),
                    __( 'Web sitesinin teknik altyapısı, arama motorlarının sayfaları doğru şekilde tarayabilmesi ve indeksleyebilmesi açısından kritik öneme sahiptir.', 'seogezegeni' ),
                ],
                'list_intro' => __( 'Geliştirdiğimiz projelerde aşağıdakiler başlangıç aşamasından itibaren planlanmaktadır:', 'seogezegeni' ),
                'list' => [
                    __( 'Temiz HTML yapısı', 'seogezegeni' ),
                    __( 'Semantik etiket kullanımı', 'seogezegeni' ),
                    __( 'Optimize edilmiş URL yapıları', 'seogezegeni' ),
                    __( 'XML Sitemap', 'seogezegeni' ),
                    __( 'Robots.txt yapılandırması', 'seogezegeni' ),
                    __( 'Canonical etiketleri', 'seogezegeni' ),
                    __( 'Schema.org işaretlemeleri', 'seogezegeni' ),
                    __( 'Breadcrumb yapıları', 'seogezegeni' ),
                ],
                'closing' => [
                    __( 'Teknik açıdan güçlü bir altyapı, organik görünürlüğün sürdürülebilir şekilde gelişmesine katkı sağlar.', 'seogezegeni' ),
                ],
            ],
            [
                'icon' => 'fa-solid fa-gauge-high',
                'title' => __( 'Core Web Vitals ve Site Performansı', 'seogezegeni' ),
                'paras' => [
                    __( 'Web sitesi performansı yalnızca kullanıcı memnuniyetini değil, SEO ve reklam performansını da doğrudan etkiler.', 'seogezegeni' ),
                    __( 'Google\'ın Core Web Vitals metrikleri, kullanıcı deneyimini ölçmek amacıyla sayfa yüklenme hızını, etkileşim süresini ve görsel kararlılığı değerlendirir.', 'seogezegeni' ),
                ],
                'list_intro' => __( 'Bu kapsamda özellikle aşağıdaki değerlerin optimize edilmesi önemlidir:', 'seogezegeni' ),
                'list' => [
                    __( 'Largest Contentful Paint (LCP)', 'seogezegeni' ),
                    __( 'Interaction to Next Paint (INP)', 'seogezegeni' ),
                    __( 'Cumulative Layout Shift (CLS)', 'seogezegeni' ),
                ],
                'closing' => [
                    __( 'Performansı yüksek web siteleri; daha düşük hemen çıkma oranına, daha uzun oturum sürelerine, daha yüksek dönüşüm oranlarına, daha güçlü SEO performansına katkı sağlayabilir.', 'seogezegeni' ),
                ],
            ],
            [
                'icon' => 'fa-solid fa-arrow-trend-up',
                'title' => __( 'Dönüşüm Odaklı Web Tasarımı (CRO)', 'seogezegeni' ),
                'paras' => [
                    __( 'Başarılı bir web sitesi yalnızca ziyaretçi çekmekle sınırlı değildir.', 'seogezegeni' ),
                    __( 'Asıl amaç, ziyaretçilerin işletme hedeflerine uygun aksiyonlar gerçekleştirmesini sağlamaktır.', 'seogezegeni' ),
                ],
                'list_intro' => __( 'CRO çalışmaları kapsamında aşağıdakiler sürekli analiz edilerek geliştirilir:', 'seogezegeni' ),
                'list' => [
                    __( 'CTA yerleşimleri', 'seogezegeni' ),
                    __( 'Form uzunlukları', 'seogezegeni' ),
                    __( 'Güven unsurları', 'seogezegeni' ),
                    __( 'Referans alanları', 'seogezegeni' ),
                    __( 'Kullanıcı akışları', 'seogezegeni' ),
                    __( 'İçerik sıralaması', 'seogezegeni' ),
                ],
                'closing' => [
                    __( 'Bu çalışmalar sayesinde aynı trafikle daha fazla teklif talebi, satış veya iletişim formu elde etmek mümkün olabilir.', 'seogezegeni' ),
                ],
            ],
            [
                'icon' => 'fa-solid fa-chart-line',
                'title' => __( 'Google Analytics 4 ile Kullanıcı Davranışlarını Anlamak', 'seogezegeni' ),
                'paras' => [
                    __( 'Başarılı geliştirme süreçleri tahminlere değil, gerçek verilere dayanmalıdır.', 'seogezegeni' ),
                    __( 'Google Analytics 4 sayesinde kullanıcıların web sitesi üzerindeki davranışları ayrıntılı olarak analiz edilebilir.', 'seogezegeni' ),
                ],
                'list_intro' => __( 'Örneğin aşağıdaki soruların cevapları analiz edilerek web sitesi sürekli geliştirilebilir:', 'seogezegeni' ),
                'list' => [
                    __( 'Hangi sayfalar daha fazla ziyaret ediliyor', 'seogezegeni' ),
                    __( 'Kullanıcılar hangi aşamada siteyi terk ediyor', 'seogezegeni' ),
                    __( 'Hangi trafik kaynakları daha kaliteli ziyaretçi getiriyor', 'seogezegeni' ),
                    __( 'Hangi içerikler dönüşüme katkı sağlıyor', 'seogezegeni' ),
                ],
                'closing' => [
                    __( 'Veriye dayalı yaklaşım, yalnızca pazarlama kararlarını değil; tasarım ve yazılım geliştirme süreçlerini de daha sağlıklı hâle getirir.', 'seogezegeni' ),
                ],
            ],
            [
                'icon' => 'fa-solid fa-tags',
                'title' => __( 'Google Tag Manager ile Esnek Ölçüm Altyapısı', 'seogezegeni' ),
                'paras' => [
                    __( 'Modern web projelerinde kullanıcı etkileşimlerinin doğru şekilde ölçülmesi büyük önem taşır.', 'seogezegeni' ),
                    __( 'Google Tag Manager sayesinde farklı izleme kodları tek bir merkezden yönetilebilir ve geliştirilebilir.', 'seogezegeni' ),
                ],
                'list_intro' => __( 'GTM ile aşağıdakiler kolayca takip edilebilir:', 'seogezegeni' ),
                'list' => [
                    __( 'Form gönderimleri', 'seogezegeni' ),
                    __( 'Telefon tıklamaları', 'seogezegeni' ),
                    __( 'WhatsApp butonları', 'seogezegeni' ),
                    __( 'PDF indirmeleri', 'seogezegeni' ),
                    __( 'Video izlenmeleri', 'seogezegeni' ),
                    __( 'E-ticaret olayları', 'seogezegeni' ),
                    __( 'CTA etkileşimleri', 'seogezegeni' ),
                ],
                'closing' => [
                    __( 'Bu veriler sayesinde hem reklam kampanyaları hem de kullanıcı deneyimi sürekli olarak optimize edilebilir.', 'seogezegeni' ),
                ],
            ],
            [
                'icon' => 'fa-solid fa-fire',
                'title' => __( 'Isı Haritaları (Heatmap) ve Kullanıcı Analizi', 'seogezegeni' ),
                'paras' => [
                    __( 'Her ziyaretçi web sitesini aynı şekilde kullanmaz.', 'seogezegeni' ),
                    __( 'Bazı kullanıcılar belirli alanlara odaklanırken, bazıları sayfayı hızla terk edebilir.', 'seogezegeni' ),
                ],
                'list_intro' => __( 'Heatmap analizleri sayesinde aşağıdakiler görselleştirilebilir:', 'seogezegeni' ),
                'list' => [
                    __( 'Kullanıcıların en çok tıkladığı alanlar', 'seogezegeni' ),
                    __( 'Dikkat edilen bölümler', 'seogezegeni' ),
                    __( 'Kaydırma davranışları', 'seogezegeni' ),
                    __( 'Etkileşim yoğunluğu', 'seogezegeni' ),
                ],
                'closing' => [
                    __( 'Bu analizler doğrultusunda sayfa düzeni ve kullanıcı akışı geliştirilebilir.', 'seogezegeni' ),
                ],
            ],
            [
                'icon' => 'fa-solid fa-code-compare',
                'title' => __( 'A/B Testleri ile Sürekli Gelişim', 'seogezegeni' ),
                'paras' => [
                    __( 'İyi bir web sitesi hiçbir zaman tamamen bitmiş kabul edilmez.', 'seogezegeni' ),
                    __( 'Kullanıcı beklentileri, sektör dinamikleri ve teknolojiler sürekli değişmektedir.', 'seogezegeni' ),
                    __( 'Bu nedenle geliştirme süreci yayın sonrasında da devam eder.', 'seogezegeni' ),
                ],
                'list_intro' => __( 'A/B testleri sayesinde aşağıdakiler karşılaştırılarak hangi versiyonun daha başarılı olduğu ölçülebilir:', 'seogezegeni' ),
                'list' => [
                    __( 'Farklı başlıklar', 'seogezegeni' ),
                    __( 'CTA metinleri', 'seogezegeni' ),
                    __( 'Renk kullanımları', 'seogezegeni' ),
                    __( 'Form tasarımları', 'seogezegeni' ),
                    __( 'Sayfa yerleşimleri', 'seogezegeni' ),
                    __( 'Görsel seçimleri', 'seogezegeni' ),
                ],
                'closing' => [
                    __( 'Bu yaklaşım sayesinde web sitesi zaman içerisinde kullanıcı davranışlarına göre gelişmeye devam eder.', 'seogezegeni' ),
                ],
            ],
            [
                'icon' => 'fa-solid fa-lock',
                'title' => __( 'Güvenlik ve Sürdürülebilirlik', 'seogezegeni' ),
                'paras' => [
                    __( 'Başarılı bir web sitesi yalnızca hızlı ve estetik olmakla kalmamalı; aynı zamanda güvenli ve sürdürülebilir bir altyapıya sahip olmalıdır.', 'seogezegeni' ),
                ],
                'list_intro' => __( 'Projelerde aşağıdaki güvenlik katmanları planlanmalıdır:', 'seogezegeni' ),
                'list' => [
                    __( 'SSL sertifikaları', 'seogezegeni' ),
                    __( 'Düzenli güvenlik güncellemeleri', 'seogezegeni' ),
                    __( 'Rol bazlı yetkilendirme', 'seogezegeni' ),
                    __( 'Otomatik yedekleme', 'seogezegeni' ),
                    __( 'Sunucu güvenliği', 'seogezegeni' ),
                    __( 'Kötü amaçlı yazılım korumaları', 'seogezegeni' ),
                ],
                'closing' => [
                    __( 'Ayrıca yazılım mimarisinin modüler şekilde geliştirilmesi, ilerleyen süreçte yeni özelliklerin kolayca sisteme eklenebilmesini sağlar.', 'seogezegeni' ),
                ],
            ],
            [
                'icon' => 'fa-solid fa-link',
                'title' => __( 'Web Tasarım, Yazılım ve Dijital Pazarlama Birlikte Planlanmalıdır', 'seogezegeni' ),
                'paras' => [
                    __( 'Başarılı dijital projelerde web tasarım tek başına değerlendirilmez.', 'seogezegeni' ),
                ],
                'list_intro' => __( 'Bir web sitesi aşağıdakileri sağlamalıdır:', 'seogezegeni' ),
                'list' => [
                    __( 'SEO çalışmalarını desteklemeli', 'seogezegeni' ),
                    __( 'Google Ads kampanyalarının performansını artırmalı', 'seogezegeni' ),
                    __( 'Meta reklamlarından gelen kullanıcıları doğru yönlendirmeli', 'seogezegeni' ),
                    __( 'İçerik pazarlamasına uygun yapı sunmalı', 'seogezegeni' ),
                    __( 'Dönüşüm optimizasyonunu desteklemelidir.', 'seogezegeni' ),
                ],
                'closing' => [
                    __( 'Bu nedenle SEO Gezegeni olarak web tasarım ve yazılım projelerini dijital pazarlama stratejisinden bağımsız düşünmüyoruz.', 'seogezegeni' ),
                    __( 'Teknik altyapıyı, kullanıcı deneyimini ve pazarlama hedeflerini aynı proje planı içerisinde ele alıyor; markaların uzun vadeli dijital büyümesini destekleyen bütüncül çözümler geliştiriyoruz.', 'seogezegeni' ),
                ],
            ],
        ],
        'h_tek' => __( 'Kullandığımız *Teknolojiler*', 'seogezegeni' ),
        't_tek' => [
            __( 'Başarılı bir web sitesi veya özel yazılım projesi yalnızca iyi bir tasarımla değil, doğru teknoloji seçimleriyle geliştirilir. Kullanılan yazılım altyapısı; performans, güvenlik, ölçeklenebilirlik ve bakım süreçlerini doğrudan etkiler. Bu nedenle her projede tek bir teknolojiye bağlı kalmak yerine, projenin ihtiyaçlarını analiz ederek en uygun teknoloji yığınını (technology stack) belirliyoruz.', 'seogezegeni' ),
            __( 'SEO Gezegeni olarak geliştirdiğimiz projelerde modern yazılım mimarilerini benimsiyor, performans odaklı, güvenli ve uzun yıllar geliştirilebilecek altyapılar oluşturuyoruz.', 'seogezegeni' ),
        ],
        'tech_cards' => [
            [
                'icon' => 'fa-brands fa-laravel',
                'title' => __( 'Laravel ile Güçlü ve Ölçeklenebilir Web Uygulamaları', 'seogezegeni' ),
                'paras' => [
                    __( 'Laravel, PHP ekosisteminin en güçlü framework\'lerinden biri olarak kurumsal projelerde yüksek performans ve güvenlik sunar.', 'seogezegeni' ),
                ],
                'list_intro' => __( 'Özellikle aşağıdaki kapsamlı projelerde Laravel kullanıyoruz:', 'seogezegeni' ),
                'list' => [
                    __( 'CRM sistemleri', 'seogezegeni' ),
                    __( 'ERP entegrasyonları', 'seogezegeni' ),
                    __( 'B2B platformları', 'seogezegeni' ),
                    __( 'Yönetim panelleri', 'seogezegeni' ),
                    __( 'Rezervasyon sistemleri', 'seogezegeni' ),
                    __( 'Özel iş uygulamaları', 'seogezegeni' ),
                ],
                'closing' => [
                    __( 'Laravel\'in sunduğu modüler yapı sayesinde gelecekte geliştirilebilecek sürdürülebilir yazılım altyapıları oluşturuyoruz.', 'seogezegeni' ),
                ],
            ],
            [
                'icon' => 'fa-brands fa-php',
                'title' => __( 'PHP ile Esnek Sunucu Tarafı Geliştirme', 'seogezegeni' ),
                'paras' => [
                    __( 'Dünyadaki web sitelerinin önemli bir bölümü PHP tabanlı teknolojiler üzerinde çalışmaktadır.', 'seogezegeni' ),
                ],
                'list_intro' => __( 'Modern PHP mimarileri sayesinde:', 'seogezegeni' ),
                'list' => [
                    __( 'Yüksek performans', 'seogezegeni' ),
                    __( 'Güvenli veri yönetimi', 'seogezegeni' ),
                    __( 'Güçlü API desteği', 'seogezegeni' ),
                    __( 'Hızlı geliştirme süreçleri', 'seogezegeni' ),
                ],
                'closing' => [
                    __( 'Doğru mimariyle geliştirilen PHP projeleri uzun yıllar boyunca güvenle kullanılabilecek güçlü sistemler oluşturur.', 'seogezegeni' ),
                ],
            ],
            [
                'icon' => 'fa-brands fa-react',
                'title' => __( 'React ile Modern Kullanıcı Deneyimi', 'seogezegeni' ),
                'paras' => [
                    __( 'Kullanıcı beklentileri arttıkça daha hızlı ve akıcı arayüzlere ihtiyaç duyulmaktadır.', 'seogezegeni' ),
                ],
                'list_intro' => __( 'React kullanarak geliştirilen modern kullanıcı arayüzleri sayesinde:', 'seogezegeni' ),
                'list' => [
                    __( 'Sayfalar daha hızlı çalışır', 'seogezegeni' ),
                    __( 'Kullanıcı etkileşimleri hızlanır', 'seogezegeni' ),
                    __( 'Dinamik içerikler daha verimli yönetilir', 'seogezegeni' ),
                    __( 'SPA (Single Page Application) yapıları oluşturulabilir.', 'seogezegeni' ),
                ],
                'closing' => [
                    __( 'Bu yaklaşım özellikle yoğun kullanıcı etkileşimine sahip projelerde önemli avantajlar sağlar.', 'seogezegeni' ),
                ],
            ],
            [
                'icon' => 'fa-solid fa-n',
                'title' => __( 'Next.js ile SEO ve Performans Odaklı Projeler', 'seogezegeni' ),
                'paras' => [
                    __( 'Modern web geliştirme süreçlerinde Next.js, React tabanlı projelerin performansını ve SEO başarısını önemli ölçüde artırmaktadır.', 'seogezegeni' ),
                ],
                'list_intro' => __( 'Server Side Rendering (SSR), Static Site Generation (SSG) ve gelişmiş önbellekleme mekanizmaları sayesinde:', 'seogezegeni' ),
                'list' => [
                    __( 'Daha hızlı yüklenen sayfalar', 'seogezegeni' ),
                    __( 'Gelişmiş Core Web Vitals değerleri', 'seogezegeni' ),
                    __( 'Daha güçlü SEO performansı', 'seogezegeni' ),
                    __( 'Yüksek kullanıcı deneyimi', 'seogezegeni' ),
                ],
                'closing' => [
                    __( 'Özellikle içerik yoğun ve organik trafik hedefleyen projelerde Next.js güçlü bir altyapı sunmaktadır.', 'seogezegeni' ),
                ],
            ],
            [
                'icon' => 'fa-brands fa-wordpress-simple',
                'title' => __( 'WordPress ile Esnek İçerik Yönetimi', 'seogezegeni' ),
                'paras' => [
                    __( 'WordPress, doğru planlandığında güçlü ve sürdürülebilir projeler geliştirmek için etkili bir içerik yönetim sistemidir.', 'seogezegeni' ),
                ],
                'list_intro' => __( 'Kurumsal web siteleri, blog projeleri ve içerik odaklı platformlarda WordPress şunları sunar:', 'seogezegeni' ),
                'list' => [
                    __( 'Kolay yönetilebilir yapı', 'seogezegeni' ),
                    __( 'Kullanıcı dostu yönetim paneli', 'seogezegeni' ),
                    __( 'SEO uyumluluğu', 'seogezegeni' ),
                    __( 'Geniş geliştirme seçenekleri', 'seogezegeni' ),
                ],
                'closing' => [
                    __( 'Hazır tema kullanımından kaçınarak performans ve güvenlik odaklı WordPress projeleri geliştiriyoruz.', 'seogezegeni' ),
                ],
            ],
            [
                'icon' => 'fa-solid fa-database',
                'title' => __( 'MySQL ile Güvenilir Veri Yönetimi', 'seogezegeni' ),
                'paras' => [
                    __( 'Veri tabanı mimarisi, özel yazılım projelerinin en kritik bileşenlerinden biridir.', 'seogezegeni' ),
                ],
                'list_intro' => __( 'MySQL altyapısı sayesinde:', 'seogezegeni' ),
                'list' => [
                    __( 'Güvenilir veri saklama', 'seogezegeni' ),
                    __( 'Hızlı sorgulama', 'seogezegeni' ),
                    __( 'Yüksek performans', 'seogezegeni' ),
                    __( 'Ölçeklenebilir veri yönetimi', 'seogezegeni' ),
                ],
                'closing' => [
                    __( 'Doğru tasarlanmış veri tabanı yapıları, yazılım projelerinin uzun vadeli başarısını doğrudan etkiler.', 'seogezegeni' ),
                ],
            ],
            [
                'icon' => 'fa-solid fa-code-branch',
                'title' => __( 'REST API ile Sistemler Arası Entegrasyon', 'seogezegeni' ),
                'paras' => [
                    __( 'Modern yazılım projeleri artık tek başına çalışan sistemlerden oluşmamaktadır.', 'seogezegeni' ),
                ],
                'list_intro' => __( 'REST API teknolojileri sayesinde aşağıdaki sistemler birbiriyle güvenli şekilde haberleşebilir:', 'seogezegeni' ),
                'list' => [
                    __( 'ERP sistemleri', 'seogezegeni' ),
                    __( 'Muhasebe yazılımları', 'seogezegeni' ),
                    __( 'Ödeme altyapıları', 'seogezegeni' ),
                    __( 'Kargo sistemleri', 'seogezegeni' ),
                    __( 'CRM uygulamaları', 'seogezegeni' ),
                    __( 'Mobil uygulamalar', 'seogezegeni' ),
                ],
                'closing' => [
                    __( 'Bu sayede veri tekrarları azaltılır ve iş süreçleri otomatik hâle getirilebilir.', 'seogezegeni' ),
                ],
            ],
            [
                'icon' => 'fa-solid fa-cloud',
                'title' => __( 'Cloud Hosting ile Yüksek Erişilebilirlik', 'seogezegeni' ),
                'paras' => [
                    __( 'Bulut tabanlı sunucu altyapıları sayesinde projeler daha güvenli, daha hızlı ve daha ölçeklenebilir şekilde çalışabilir.', 'seogezegeni' ),
                ],
                'list_intro' => __( 'Cloud Hosting çözümleri aşağıdaki avantajları sunar:', 'seogezegeni' ),
                'list' => [
                    __( 'Yüksek erişilebilirlik', 'seogezegeni' ),
                    __( 'Otomatik kaynak yönetimi', 'seogezegeni' ),
                    __( 'Esnek kapasite', 'seogezegeni' ),
                    __( 'Kesintisiz çalışma', 'seogezegeni' ),
                ],
                'closing' => [
                    __( 'Bu avantajlarla Cloud Hosting, büyüyen projelerin ihtiyaçlarını karşılar.', 'seogezegeni' ),
                ],
            ],
            [
                'icon' => 'fa-solid fa-earth-europe',
                'title' => __( 'CDN ile Daha Hızlı Web Siteleri', 'seogezegeni' ),
                'paras' => [
                    __( 'Kullanıcı deneyiminde hız önemli bir faktördür.', 'seogezegeni' ),
                    __( 'Content Delivery Network (CDN) teknolojileri sayesinde web sitesi içerikleri dünyanın farklı bölgelerindeki sunucular üzerinden kullanıcılara ulaştırılır.', 'seogezegeni' ),
                ],
                'list_intro' => __( 'Bu sayede:', 'seogezegeni' ),
                'list' => [
                    __( 'Yüklenme süreleri azalır', 'seogezegeni' ),
                    __( 'Sunucu yükü düşer', 'seogezegeni' ),
                    __( 'Kullanıcı deneyimi gelişir', 'seogezegeni' ),
                    __( 'SEO performansı desteklenir.', 'seogezegeni' ),
                ],
                'closing' => [],
            ],
        ],
        'h_sek' => __( '*Sektörel* Çözümler', 'seogezegeni' ),
        't_sek' => [
            __( 'Her sektörün dijital ihtiyaçları farklıdır. Aynı tasarım anlayışı veya aynı yazılım altyapısı tüm işletmeler için uygun olmayabilir. Bu nedenle SEO Gezegeni olarak geliştirdiğimiz projelerde sektörün dinamiklerini, kullanıcı davranışlarını ve iş süreçlerini analiz ederek sektöre özel çözümler üretiyoruz.', 'seogezegeni' ),
        ],
        'sektor' => [
            [
                'icon' => 'fa-solid fa-heart-pulse',
                'title' => __( 'Sağlık Sektörü', 'seogezegeni' ),
                'text' => __( 'Sağlık kuruluşları için geliştirilen projelerde güven, erişilebilirlik ve kullanıcı deneyimi ön planda tutulur. Online randevu sistemleri, doktor profilleri, tedavi sayfaları, hasta bilgilendirme içerikleri ve KVKK uyumlu formlar gibi bileşenlerle hem kullanıcı deneyimini hem de dijital görünürlüğü destekleyen web platformları geliştiriyoruz.', 'seogezegeni' ),
            ],
            [
                'icon' => 'fa-solid fa-scale-balanced',
                'title' => __( 'Hukuk Büroları', 'seogezegeni' ),
                'text' => __( 'Hukuk sektöründe dijital görünürlük kadar kurumsal güven de büyük önem taşır. Avukatlık büroları için geliştirilen projelerde; uzmanlık alanlarının doğru sunulması, güçlü içerik mimarisi, sEO odaklı hizmet sayfaları, kolay iletişim altyapısı öncelikli olarak planlanmaktadır.', 'seogezegeni' ),
            ],
            [
                'icon' => 'fa-solid fa-city',
                'title' => __( 'İnşaat ve Gayrimenkul', 'seogezegeni' ),
                'text' => __( 'İnşaat firmaları ve gayrimenkul şirketleri için projelerin güven veren şekilde sunulması kritik öneme sahiptir. Referans projeler, portföy yönetimi, proje filtreleme sistemleri, teklif formları ve yatırımcı odaklı içerik yapıları ile satış süreçlerini destekleyen web çözümleri geliştiriyoruz.', 'seogezegeni' ),
            ],
            [
                'icon' => 'fa-solid fa-industry',
                'title' => __( 'Üretim ve Sanayi', 'seogezegeni' ),
                'text' => __( 'Üretim sektöründe faaliyet gösteren firmalar için web sitesi yalnızca tanıtım aracı değil, aynı zamanda ihracat ve kurumsal iletişim platformudur. Ürün katalogları, teknik dokümanlar, bayi sistemleri, teklif talepleri ve çok dilli yapı gibi özelliklerle ulusal ve uluslararası pazarlara hitap eden dijital altyapılar oluşturuyoruz.', 'seogezegeni' ),
            ],
            [
                'icon' => 'fa-solid fa-umbrella-beach',
                'title' => __( 'Turizm', 'seogezegeni' ),
                'text' => __( 'Turizm sektöründe kullanıcı deneyimi, görsel sunum ve rezervasyon süreçleri ön plana çıkar. Oteller, seyahat acenteleri ve turizm işletmeleri için rezervasyon sistemleri, kampanya sayfaları, çok dilli yapı ve mobil uyumlu deneyimler geliştirerek kullanıcıların rezervasyon süreçlerini kolaylaştırıyoruz.', 'seogezegeni' ),
            ],
            [
                'icon' => 'fa-solid fa-graduation-cap',
                'title' => __( 'Eğitim', 'seogezegeni' ),
                'text' => __( 'Eğitim kurumlarının dijital platformlarında bilgiye kolay erişim ve güvenilir iletişim büyük önem taşır. Kurslar, okullar ve eğitim merkezleri için; online başvuru sistemleri, eğitim programları, öğretmen profilleri, etkinlik yönetimi, duyuru altyapıları gibi çözümler geliştiriyoruz.', 'seogezegeni' ),
            ],
            [
                'icon' => 'fa-solid fa-cart-shopping',
                'title' => __( 'E-Ticaret', 'seogezegeni' ),
                'text' => __( 'E-ticaret projelerinde yalnızca tasarım değil; satış performansı belirleyicidir. Ürün filtreleme, hızlı ödeme süreçleri, pazaryeri entegrasyonları, kampanya yönetimi ve SEO odaklı kategori yapıları sayesinde satış süreçlerini destekleyen güçlü e-ticaret altyapıları oluşturuyoruz.', 'seogezegeni' ),
            ],
            [
                'icon' => 'fa-solid fa-handshake',
                'title' => __( 'Kurumsal B2B Çözümleri', 'seogezegeni' ),
                'text' => __( 'B2B firmalar için geliştirilen projelerde kullanıcı yetkilendirmeleri, bayi panelleri, teklif yönetimi, sipariş sistemleri ve ERP entegrasyonları gibi gelişmiş fonksiyonlar ön plana çıkar. İşletmelerin operasyonel süreçlerini dijitalleştiren ve iş ortaklarıyla daha verimli çalışmasını sağlayan ölçeklenebilir B2B platformları geliştiriyoruz.', 'seogezegeni' ),
            ],
        ],
        'h_isletme' => __( 'Hangi İşletmeler Profesyonel *Web Tasarım ve Özel Yazılım Hizmetine İhtiyaç Duyar?*', 'seogezegeni' ),
        't_isletme' => [
            __( 'Her işletmenin dijital ihtiyaçları farklıdır. Bazı firmalar kurumsal kimliğini dijital ortamda doğru şekilde temsil edecek modern bir web sitesine ihtiyaç duyarken, bazıları mevcut iş süreçlerini hızlandıracak özel yazılım çözümlerine ihtiyaç duyar. Bu nedenle başarılı projeler, hazır şablonlarla değil; işletmenin hedeflerine ve operasyonel yapısına göre planlanmalıdır.', 'seogezegeni' ),
            __( 'Profesyonel web tasarım ve özel yazılım hizmetleri; yalnızca büyük ölçekli şirketler için değil, dijitalde sürdürülebilir büyüme hedefleyen her işletme için stratejik bir yatırımdır.', 'seogezegeni' ),
        ],
        'isletme_cards' => [
            [
                'icon' => 'fa-solid fa-building',
                'title' => __( 'Kurumsal Firmalar', 'seogezegeni' ),
                'text' => __( 'Kurumsal şirketler için web sitesi yalnızca bir tanıtım platformu değildir. Marka itibarı, yatırımcı ilişkileri, iş ortaklarıyla iletişim ve potansiyel müşteri kazanımı açısından önemli bir rol üstlenir. Kurumsal projelerde güçlü bilgi mimarisi, güven veren tasarım, yüksek performans ve ölçeklenebilir altyapı ön plana çıkar.', 'seogezegeni' ),
            ],
            [
                'icon' => 'fa-solid fa-shop',
                'title' => __( 'KOBİ\'ler ve Yerel İşletmeler', 'seogezegeni' ),
                'text' => __( 'Yerel ölçekte faaliyet gösteren işletmeler için dijital görünürlük, yeni müşterilere ulaşmanın en etkili yollarından biridir. Profesyonel bir web sitesi sayesinde; hizmetler daha etkili tanıtılabilir, google aramalarında görünürlük artırılabilir, iletişim süreçleri kolaylaştırılabilir, reklam kampanyalarının performansı yükseltilebilir.', 'seogezegeni' ),
            ],
            [
                'icon' => 'fa-solid fa-cart-shopping',
                'title' => __( 'E-Ticaret Markaları', 'seogezegeni' ),
                'text' => __( 'E-ticaret projelerinde kullanıcı deneyimi, sayfa performansı ve ödeme süreçleri satış oranlarını doğrudan etkiler. Ürün filtreleme, kategori yapısı, hızlı ödeme adımları, mobil deneyim ve SEO altyapısı birlikte planlandığında hem kullanıcı memnuniyeti hem de dönüşüm oranları artabilir.', 'seogezegeni' ),
            ],
            [
                'icon' => 'fa-solid fa-industry',
                'title' => __( 'Üretim ve Sanayi Firmaları', 'seogezegeni' ),
                'text' => __( 'Üretim yapan işletmeler için web sitesi çoğu zaman uluslararası müşterilere ulaşmanın ilk adımıdır. Bunun yanında bayi yönetimi, teklif süreçleri, sipariş takibi ve operasyon yönetimi gibi alanlarda geliştirilen özel yazılım çözümleri, iş süreçlerini önemli ölçüde kolaylaştırabilir.', 'seogezegeni' ),
            ],
            [
                'icon' => 'fa-solid fa-stethoscope',
                'title' => __( 'Sağlık, Eğitim ve Hizmet Sektörü', 'seogezegeni' ),
                'text' => __( 'Randevu yönetimi, online başvuru sistemleri, danışmanlık formları ve kullanıcı panelleri gibi çözümler, hizmet sektöründe faaliyet gösteren işletmeler için önemli avantajlar sağlar. **Web tasarım** ve özel yazılımın birlikte planlanması, kullanıcı deneyimini geliştirirken operasyonel süreçleri de hızlandırabilir.', 'seogezegeni' ),
            ],
        ],
        'h_surec' => __( 'SEO Gezegeni ile Web Tasarım ve Yazılım *Geliştirme Sürecimiz*', 'seogezegeni' ),
        't_surec' => [
            __( 'Başarılı bir dijital proje, yalnızca yazılım geliştirme aşamasından ibaret değildir. Her proje; analiz, planlama, tasarım, geliştirme, test ve sürekli iyileştirme süreçlerinden oluşan kapsamlı bir yol haritası doğrultusunda ilerlemelidir.', 'seogezegeni' ),
        ],
        'steps' => [
            [
                __( 'İhtiyaç Analizi ve Strateji', 'seogezegeni' ),
                __( 'Projeye başlamadan önce işletmenizi, sektörünüzü, hedef kitlenizi ve dijital hedeflerinizi detaylı şekilde analiz ediyoruz. Bu aşamada; mevcut web altyapısı, rakip analizi, kullanıcı beklentileri, teknik gereksinimler, büyüme hedefleri değerlendirilerek proje kapsamı netleştiriliyor.', 'seogezegeni' ),
            ],
            [
                __( 'Bilgi Mimarisi ve Kullanıcı Deneyimi Planlaması', 'seogezegeni' ),
                __( 'Web sitesinin veya yazılımın nasıl çalışacağı, kullanıcıların hangi adımları izleyeceği ve içeriklerin nasıl organize edileceği bu aşamada planlanıyor. Wireframe çalışmaları, kullanıcı senaryoları ve sayfa akışları hazırlanarak projenin temel iskeleti oluşturuluyor.', 'seogezegeni' ),
            ],
            [
                __( 'UI Tasarımı ve Arayüz Geliştirme', 'seogezegeni' ),
                __( 'Belirlenen kullanıcı deneyimi doğrultusunda markanıza özel kullanıcı arayüzü tasarlanıyor. Bu süreçte; renk sistemi, tipografi, ikonlar, bileşen yapıları, görsel hiyerarşi oluşturularak tüm ekranlar modern tasarım prensiplerine uygun şekilde hazırlanıyor.', 'seogezegeni' ),
            ],
            [
                __( 'Yazılım Geliştirme', 'seogezegeni' ),
                __( 'Onaylanan tasarımlar, performans ve güvenlik odaklı yazılım altyapısıyla geliştiriliyor. Projeye göre; özel yönetim panelleri, aPI entegrasyonları, kullanıcı yetkilendirmeleri, otomasyon sistemleri, özel modüller geliştirilerek ihtiyaçlara uygun çözümler sunuluyor.', 'seogezegeni' ),
            ],
            [
                __( 'Test ve Kalite Kontrol', 'seogezegeni' ),
                __( 'Yayın öncesinde tüm proje detaylı test süreçlerinden geçiriliyor. Kontrol edilen başlıca alanlar: mobil uyumluluk, farklı tarayıcı desteği, sayfa performansı, güvenlik, form süreçleri, bağlantılar, kullanıcı senaryoları. Bu sayede olası hatalar yayın öncesinde tespit edilerek düzeltiliyor.', 'seogezegeni' ),
            ],
            [
                __( 'Yayına Alma ve Sürekli Destek', 'seogezegeni' ),
                __( 'Proje tamamlandıktan sonra süreç sona ermiyor. Yayın sonrasında; performans takibi, güvenlik güncellemeleri, teknik destek, geliştirme talepleri, yeni modüller ile dijital altyapının güncel ve verimli şekilde çalışmasını sürdürüyoruz.', 'seogezegeni' ),
            ],
        ],
        'h_why' => __( 'Neden *SEO Gezegeni?*', 'seogezegeni' ),
        't_why' => [
            __( '**Web tasarım** ve yazılım projelerinde yalnızca estetik tasarımlar üretmiyoruz.', 'seogezegeni' ),
            __( 'Amacımız; işletmenizin dijital pazarlama faaliyetlerini destekleyen, arama motorlarında güçlü performans gösterebilen, kullanıcı deneyimini ön planda tutan ve uzun yıllar geliştirilebilecek dijital altyapılar oluşturmaktır.', 'seogezegeni' ),
        ],
        't_why_lead' => [
            __( 'SEO Gezegeni olarak projelerimizde aşağıdaki unsurlarla işletmelere uzun vadeli değer üretmeyi hedefliyoruz:', 'seogezegeni' ),
        ],
        'why_list' => [
            __( 'Özgün tasarım anlayışı', 'seogezegeni' ),
            __( 'SEO odaklı teknik altyapı', 'seogezegeni' ),
            __( 'Mobil öncelikli geliştirme', 'seogezegeni' ),
            __( 'Yüksek performans', 'seogezegeni' ),
            __( 'Güvenli yazılım mimarisi', 'seogezegeni' ),
            __( 'Ölçeklenebilir sistemler', 'seogezegeni' ),
            __( 'Kullanıcı deneyimi odaklı yaklaşım', 'seogezegeni' ),
            __( 'Veriye dayalı geliştirme süreçleri', 'seogezegeni' ),
        ],
        't_why_foot' => [
            __( 'Web tasarım, özel yazılım, SEO ve performans pazarlamasını tek çatı altında planlayarak tüm dijital süreçlerin birbirini desteklemesini sağlıyoruz.', 'seogezegeni' ),
        ],
        'h_faq' => __( 'Sık Sorulan *Sorular*', 'seogezegeni' ),
        'faqs' => [
            [
                __( 'Web tasarım ile web geliştirme arasındaki fark nedir?', 'seogezegeni' ),
                __( 'Web tasarım, kullanıcı arayüzü ve deneyimini kapsarken; web geliştirme, bu tasarımın yazılım altyapısıyla çalışan bir sisteme dönüştürülmesini ifade eder. Başarılı projelerde bu iki süreç birlikte planlanmalıdır.', 'seogezegeni' ),
            ],
            [
                __( 'Hazır tema mı, özel tasarım mı tercih edilmeli?', 'seogezegeni' ),
                __( 'Hazır temalar belirli ihtiyaçlar için hızlı çözümler sunabilir. Ancak marka kimliği, performans, SEO ve ölçeklenebilirlik açısından özel tasarımlar uzun vadede daha fazla avantaj sağlayabilir.', 'seogezegeni' ),
            ],
            [
                __( 'Özel yazılım geliştirme hangi işletmeler için uygundur?', 'seogezegeni' ),
                __( 'Standart yazılımların ihtiyaçlarını karşılamadığı, özel iş süreçlerine sahip veya operasyonlarını dijitalleştirmek isteyen işletmeler için özel yazılım çözümleri önemli avantajlar sunar.', 'seogezegeni' ),
            ],
            [
                __( 'Web sitesi SEO uyumlu olarak geliştirilebilir mi?', 'seogezegeni' ),
                __( 'Evet. Teknik SEO kriterleri, sayfa yapısı, URL mimarisi, mobil uyumluluk ve performans optimizasyonları proje geliştirme sürecinin başından itibaren planlanmalıdır.', 'seogezegeni' ),
            ],
            [
                __( 'Web sitesi tamamlandıktan sonra destek veriyor musunuz?', 'seogezegeni' ),
                __( 'Evet. Yayın sonrası teknik destek, güvenlik güncellemeleri, performans iyileştirmeleri ve yeni geliştirme talepleri doğrultusunda projeleri desteklemeye devam ediyoruz.', 'seogezegeni' ),
            ],
            [
                __( 'Web sitesi ne kadar sürede tamamlanır?', 'seogezegeni' ),
                __( 'Projenin kapsamına, sayfa sayısına, tasarım detaylarına ve yazılım ihtiyaçlarına göre süre değişiklik gösterebilir. Analiz aşamasında proje takvimi net olarak planlanır.', 'seogezegeni' ),
            ],
            [
                __( 'WordPress mi, özel yazılım mı daha avantajlıdır?', 'seogezegeni' ),
                __( 'Bu tamamen projenin ihtiyaçlarına bağlıdır. İçerik odaklı projelerde WordPress etkili bir çözüm olabilirken, özel iş süreçleri ve gelişmiş entegrasyon gerektiren projelerde özel yazılım daha uygun olabilir.', 'seogezegeni' ),
            ],
            [
                __( 'Web sitesi mobil uyumlu olmak zorunda mı?', 'seogezegeni' ),
                __( 'Evet. Günümüzde kullanıcıların büyük bölümü mobil cihazlardan erişim sağladığı için responsive tasarım hem kullanıcı deneyimi hem de SEO açısından önemli bir gerekliliktir.', 'seogezegeni' ),
            ],
            [
                __( 'Web sitesi performansı neden önemlidir?', 'seogezegeni' ),
                __( 'Yavaş yüklenen sayfalar kullanıcı deneyimini olumsuz etkileyebilir, dönüşüm oranlarını düşürebilir ve arama motoru performansını olumsuz etkileyebilir. Bu nedenle hız optimizasyonu modern web projelerinin temel bileşenlerinden biridir.', 'seogezegeni' ),
            ],
            [
                __( 'Web sitesi yayına alındıktan sonra geliştirilebilir mi?', 'seogezegeni' ),
                __( 'Evet. Doğru planlanmış ve ölçeklenebilir bir yazılım mimarisi sayesinde yeni modüller, entegrasyonlar ve özellikler zaman içerisinde sisteme kolayca eklenebilir.', 'seogezegeni' ),
            ],
        ],
        'h_cta' => __( 'Güçlü Dijital Altyapılar ile İşletmenizi *Geleceğe Taşıyın*', 'seogezegeni' ),
        't_cta' => [
            __( 'Başarılı bir web sitesi veya özel yazılım projesi, yalnızca bugünkü ihtiyaçları karşılamak için değil; işletmenizin gelecekteki büyümesini desteklemek için geliştirilmelidir. Güçlü teknik altyapı, kullanıcı odaklı tasarım ve ölçeklenebilir yazılım mimarisi sayesinde dijital platformlar, markanızın en değerli iş geliştirme araçlarından biri hâline gelir.', 'seogezegeni' ),
            __( 'SEO Gezegeni olarak web tasarım, özel yazılım geliştirme, SEO ve performans pazarlamasını tek bir strateji altında birleştiriyor; markalar için sadece modern görünen değil, ölçülebilir sonuçlar üreten dijital çözümler geliştiriyoruz. Amacımız, web sitenizi veya yazılım projenizi işletmenizin büyümesini destekleyen güçlü bir dijital merkeze dönüştürmektir.', 'seogezegeni' ),
            __( '**İşletmenize özel web tasarım ve yazılım çözümleri geliştirmek, dijital altyapınızı güçlendirmek ve uzun vadeli büyümeyi destekleyen profesyonel projeler hayata geçirmek için SEO Gezegeni ile iletişime geçin.**', 'seogezegeni' ),
        ],
    ];
}
