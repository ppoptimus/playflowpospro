<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PlayFlowPOSPro | ระบบ POS และบริหารร้านแบบครบวงจร</title>
    <meta name="description" content="PlayFlowPOS ระบบจัดการร้านสำหรับร้านนวด สปา คลินิก และธุรกิจบริการหลายสาขา">
    <meta name="theme-color" content="#133b61">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai:wght@400;500;600;700;800&family=Sora:wght@500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="icon" href="{{ asset('favicon.ico') }}" sizes="any">
    <link rel="icon" type="image/svg+xml" href="{{ asset('assets/icons/playflowpos-mark.svg') }}">
    <link rel="apple-touch-icon" href="{{ asset('apple-touch-icon.png') }}">
    <link href="{{ asset('assets/css/landing.css') }}" rel="stylesheet">
</head>
<body class="pf-page">
    <nav class="navbar navbar-expand-lg fixed-top pf-navbar">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center gap-3" href="#top">
                <span class="pf-brand-mark">
                    <img src="{{ asset('assets/icons/playflowpos-mark.svg') }}" alt="PlayFlowPOS">
                </span>
                <span>
                    <span class="pf-brand-title">PlayFlowPOSPro</span>
                    <span class="pf-brand-subtitle">ระบบจัดการร้านและหลายสาขา</span>
                </span>
            </a>
            <button class="navbar-toggler pf-navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse pf-nav-panel" id="mainNav">
                <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-2 pf-nav-list">
                    <li class="nav-item"><a class="nav-link" href="#benefits">จุดเด่น</a></li>
                    <li class="nav-item"><a class="nav-link" href="#modules">ฟีเจอร์</a></li>
                    <li class="nav-item"><a class="nav-link" href="#pricing">ราคา</a></li>
                    <li class="nav-item"><a class="nav-link" href="#workflow">วิธีเริ่มต้น</a></li>
                    <li class="nav-item"><a class="nav-link" href="#faq">คำถามที่พบบ่อย</a></li>
                    <li class="nav-item ms-lg-2"><a class="btn btn-primary rounded-pill px-4" href="#contact">ติดต่อเรา</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <main id="top">
        <section class="pf-hero">
            <div class="container">
                <div class="row align-items-center g-5">
                    <div class="col-lg-6">
                        <span class="pf-kicker">เหมาะกับร้านบริการที่ต้องการทำงานเป็นระบบ</span>
                        <h1 class="pf-hero-title">ระบบ POS และบริหารร้านที่ทำให้หน้าร้าน, คน, คิวงาน และหลายสาขาเดินพร้อมกัน</h1>
                        <p class="pf-copy pf-copy--hero">PlayFlowPOS ช่วยให้ร้านจัดการงานหน้าร้าน การจองคิว พนักงาน ลูกค้า และรายงานต่าง ๆ ได้ในระบบเดียว เหมาะกับร้านนวด สปา คลินิก และธุรกิจบริการที่ต้องการลดความวุ่นวายและควบคุมการทำงานให้ชัดขึ้น</p>
                        <div class="d-flex flex-wrap gap-3 mb-4">
                            <a class="btn btn-primary btn-lg rounded-pill px-4" href="#contact">
                                <i class="bi bi-chat-dots me-2"></i>สอบถามข้อมูล
                            </a>
                            <a class="btn btn-outline-dark btn-lg rounded-pill px-4" href="#modules">
                                <i class="bi bi-box-arrow-in-right me-2"></i>ดูฟีเจอร์หลัก
                            </a>
                        </div>
                        <div class="pf-proof-list">
                            @foreach ($proofPoints as $proofPoint)
                                <span><i class="bi bi-check2-circle"></i> {{ $proofPoint }}</span>
                            @endforeach
                        </div>
                        <div class="row g-3 mt-2">
                            @foreach ($heroStats as $heroStat)
                                <div class="col-md-4">
                                    <div class="pf-hero-metric">
                                        <span class="pf-hero-metric__icon"><i class="bi {{ $heroStat['icon'] }}"></i></span>
                                        <div class="pf-hero-metric__label">{{ $heroStat['label'] }}</div>
                                        <div class="pf-hero-metric__value">{{ $heroStat['value'] }}</div>
                                        <p class="pf-hero-metric__detail">{{ $heroStat['detail'] }}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="pf-showcase">
                            <div class="pf-showcase-glow pf-showcase-glow--one"></div>
                            <div class="pf-showcase-glow pf-showcase-glow--two"></div>
                            <div class="pf-dashboard">
                                <div class="pf-dashboard__top">
                                    <div>
                                        <div class="pf-dashboard__eyebrow">PlayFlow Control</div>
                                        <h2>ภาพรวมร้านในมุมที่เจ้าของร้านอยากเห็นทุกวัน</h2>
                                    </div>
                                    <span class="pf-badge">ภาพรวมธุรกิจ</span>
                                </div>
                                <div class="row g-3">
                                    <div class="col-7">
                                        <div class="pf-card pf-card--tall">
                                            <span class="pf-label">ยอดขายวันนี้</span>
                                            <strong class="pf-value">฿48,750</strong>
                                            <small class="pf-trend up"><i class="bi bi-graph-up-arrow"></i> +18% จากเมื่อวาน</small>
                                            <div class="pf-bars">
                                                <span style="height:36%"></span>
                                                <span style="height:52%"></span>
                                                <span style="height:68%"></span>
                                                <span style="height:86%"></span>
                                                <span style="height:73%"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-5">
                                        <div class="pf-card pf-card--soft">
                                            <span class="pf-label">สถานะคิว</span>
                                            <ul class="pf-mini-list">
                                                <li><span>รอคิว</span><strong>05</strong></li>
                                                <li><span>กำลังบริการ</span><strong>11</strong></li>
                                                <li><span>ใกล้เสร็จ</span><strong>03</strong></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="pf-card">
                                            <span class="pf-label">สาขาเด่นวันนี้</span>
                                            <div class="pf-branch-item"><strong>สุขุมวิท</strong><span class="pf-dot success"></span></div>
                                            <div class="pf-branch-item"><strong>พระราม 9</strong><span class="pf-dot warning"></span></div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="pf-card">
                                            <span class="pf-label">ทีมงานวันนี้</span>
                                            <div class="pf-chip-list">
                                                <span>ผู้จัดการ 2</span>
                                                <span>แคชเชียร์ 4</span>
                                                <span>หมอนวด 12</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pf-floating pf-floating--left">จัดการการจอง ขายหน้าร้าน พนักงาน และลูกค้าได้จากที่เดียว</div>
                            <div class="pf-floating pf-floating--right">เจ้าของร้านดูภาพรวมได้ ส่วนผู้จัดการและพนักงานเห็นเฉพาะหน้าที่ของตัวเอง</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="pf-section pf-stats">
            <div class="container">
                <div class="row g-3">
                    @foreach ($stats as $stat)
                        <div class="col-md-3 col-6">
                            <div class="pf-stat">
                                <span class="pf-stat__icon"><i class="bi {{ $stat['icon'] }}"></i></span>
                                <strong>{{ $stat['title'] }}</strong>
                                <span>{{ $stat['text'] }}</span>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <section id="benefits" class="pf-section">
            <div class="container">
                <div class="pf-heading">
                    <span class="pf-kicker">จุดเด่นของระบบ</span>
                    <h2>ทำไมหลายร้านถึงเลือกใช้ PlayFlowPOS</h2>
                    <p class="pf-copy">ระบบถูกออกแบบมาเพื่อช่วยลดงานซ้ำซ้อนที่หน้าร้าน ทำให้เจ้าของร้านมองภาพรวมง่ายขึ้น และช่วยให้ทีมหน้าร้านทำงานได้คล่องขึ้นในทุกวัน</p>
                </div>
                <div class="row g-4">
                    @foreach ($benefits as $benefit)
                        <div class="col-lg-4">
                            <div class="pf-panel-box h-100">
                                <span class="pf-panel-box__icon"><i class="bi {{ $benefit['icon'] }}"></i></span>
                                <h3>{{ $benefit['title'] }}</h3>
                                <p class="pf-copy">{{ $benefit['text'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <section id="modules" class="pf-section pf-section--soft">
            <div class="container">
                <div class="pf-heading">
                    <span class="pf-kicker">ฟีเจอร์หลัก</span>
                    <h2>ฟีเจอร์ที่ช่วยให้ร้านทำงานง่ายขึ้นทุกวัน</h2>
                </div>
                <div class="row g-4">
                    @foreach ($modules as $module)
                        <div class="col-md-6 col-xl-4">
                            <div class="pf-module h-100">
                                <div class="pf-module__top">
                                    <span>{{ $module['number'] }}</span>
                                    <i class="bi {{ $module['icon'] }}"></i>
                                </div>
                                <h3>{{ $module['title'] }}</h3>
                                <p class="pf-copy">{{ $module['text'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <section id="pricing" class="pf-section pf-section--pricing">
            <div class="container">
                <div class="pf-heading pf-pricing-heading">
                    <span class="pf-kicker pf-pricing-kicker-clean">ราคาโดยประมาณ</span>
                    <h2 class="pf-pricing-title-clean">แพ็กเกจและราคา</h2>
                    <p class="pf-copy pf-pricing-copy-clean">เลือกระยะเวลาที่เหมาะกับร้านของคุณได้ทันที พร้อมราคาอ้างอิงให้เทียบชัดเจน</p>
                    <span class="pf-kicker">ราคาโดยประมาณ</span>
                    <h2>เลือกแพ็กเกจที่เหมาะกับจังหวะการเริ่มต้นของร้าน</h2>
                    <p class="pf-copy">ส่วนนี้ออกแบบให้สื่อสารราคาแบบหน้า SaaS ที่ตัดสินใจง่าย มีแพ็กเริ่มต้นให้ลอง มีแพ็กยอดนิยมสำหรับใช้งานจริง และมีแพ็กโปรหลักที่ใช้ราคาเต็มเป็นตัวเปรียบเทียบเพื่อดันความคุ้มให้ชัด</p>
                </div>

                <div class="pf-pricing-hero">
                    <div class="pf-pricing-hero__content">
                        <span class="pf-pricing-hero__eyebrow pf-pricing-hero__eyebrow-clean">ราคา</span>
                        <h3 class="pf-pricing-hero__title-clean">ราคาใช้งาน PlayFlowPOSPro</h3>
                        <p class="pf-pricing-hero__text-clean">มีทั้งแพ็กทดลอง แพ็กใช้งานต่อเนื่อง และโปรหลักสำหรับร้านที่ต้องการความคุ้มค่าในระยะยาว</p>
                        <span class="pf-pricing-hero__eyebrow">Pricing Snapshot</span>
                        <h3>วางแพ็กให้เห็นความต่างชัดใน 3 วินาที</h3>
                        <p>แพ็ก 3 เดือนช่วยลดแรงต้านการเริ่มต้น, แพ็ก 6 เดือนทำหน้าที่เป็นตัวขายดี, และแพ็ก 1 ปีราคา 3,000 เป็น hero offer ที่เด่นที่สุดเมื่อวางคู่กับราคาอ้างอิง 4,999</p>
                    </div>
                    <div class="pf-pricing-hero__stats">
                        <div class="pf-pricing-mini">
                            <span>เริ่มต้นเร็ว</span>
                            <strong>3 เดือน / THB 1,200</strong>
                        </div>
                        <div class="pf-pricing-mini">
                            <span>ตัวขายดี</span>
                            <strong>6 เดือน / THB 2,100</strong>
                        </div>
                        <div class="pf-pricing-mini pf-pricing-mini--accent">
                            <span>โปรเด่น</span>
                            <strong>1 ปี / THB 3,000</strong>
                        </div>
                        <div class="pf-pricing-mini">
                            <span>ราคาอ้างอิง</span>
                            <strong>1 ปี / THB 4,999</strong>
                        </div>
                    </div>
                </div>

                <div class="row g-4">
                    @foreach ($pricingPlans as $plan)
                        <div class="col-md-6 col-xl-3">
                            <article class="pf-price-card @if ($plan['featured']) pf-price-card--featured @endif pf-price-card--{{ $plan['badge_class'] }}">
                                <div class="pf-price-card__frame"></div>
                                <div class="pf-price-card__top">
                                    <span class="pf-price-badge pf-price-badge--{{ $plan['badge_class'] }}">{{ $plan['badge'] }}</span>
                                    <div class="pf-price-term">{{ $plan['duration'] }}</div>
                                </div>

                                <div class="pf-price-card__body">
                                    <h3>{{ $plan['name'] }}</h3>
                                    <p class="pf-copy">{{ $plan['summary'] }}</p>

                                    <div class="pf-price-stack">
                                        @if ($plan['old_price'])
                                            <div class="pf-price-old">THB {{ $plan['old_price'] }}</div>
                                        @endif

                                        <div class="pf-price-main">
                                            <span class="pf-price-currency">THB</span>
                                            <strong>{{ $plan['price'] }}</strong>
                                        </div>

                                        <div class="pf-price-caption">{{ $plan['caption'] }}</div>
                                    </div>

                                    <a class="btn @if ($plan['featured']) btn-primary @else btn-outline-dark @endif rounded-pill w-100 pf-price-cta" href="#contact">
                                        {{ $plan['cta'] }}
                                    </a>

                                    <ul class="pf-price-list">
                                        @foreach ($plan['features'] as $feature)
                                            <li><i class="bi bi-check2-circle"></i> {{ $feature }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </article>
                        </div>
                    @endforeach
                </div>

                <div class="pf-pricing-note">
                    <div class="pf-pricing-note__clean">
                        <strong>สนใจรายละเอียดเพิ่มเติม</strong>
                        <span>สอบถามเงื่อนไขการใช้งาน โปรโมชั่น และการเริ่มต้นระบบได้โดยตรง</span>
                    </div>
                    <a class="btn btn-primary rounded-pill px-4 pf-pricing-note__action" href="#contact">สอบถามราคา</a>
                    <div>
                        <strong>วิเคราะห์การจัดราคา</strong>
                        <span>โครงนี้ทำให้ลูกค้าเห็น anchor price ชัด, เข้าใจว่าแพ็กไหนเหมาะกับการเริ่มใช้จริง, และรับรู้ทันทีว่าโปร 1 ปี 3,000 คือข้อเสนอที่ควรตัดสินใจมากที่สุด</span>
                    </div>
                    <a class="btn btn-primary rounded-pill px-4" href="#contact">คุยเรื่องราคาและเงื่อนไข</a>
                </div>
            </div>
        </section>

        <section id="workflow" class="pf-section pf-section--dark">
            <div class="container">
                <div class="pf-heading pf-heading--light">
                    <span class="pf-kicker">เริ่มต้นใช้งาน</span>
                    <h2>เริ่มต้นกับ PlayFlowPOS ได้ง่าย ๆ ใน 3 ขั้นตอน</h2>
                </div>
                <div class="row g-4">
                    @foreach ($steps as $step)
                        <div class="col-md-4">
                            <div class="pf-step">
                                <strong>{{ $step['number'] }}</strong>
                                <h3>{{ $step['title'] }}</h3>
                                <p>{{ $step['text'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <section id="faq" class="pf-section">
            <div class="container">
                <div class="pf-heading">
                    <span class="pf-kicker">คำถามที่พบบ่อย</span>
                    <h2>คำถามที่หลายร้านมักถามก่อนเริ่มใช้งาน</h2>
                </div>
                <div class="accordion pf-accordion" id="faqAccordion">
                    @foreach ($faqs as $faq)
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button @if (! $loop->first) collapsed @endif" type="button" data-bs-toggle="collapse" data-bs-target="#{{ $faq['id'] }}">
                                    {{ $faq['question'] }}
                                </button>
                            </h2>
                            <div id="{{ $faq['id'] }}" class="accordion-collapse collapse @if ($loop->first) show @endif" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">{{ $faq['answer'] }}</div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <section id="contact" class="pf-section pf-contact">
            <div class="container">
                <div class="pf-contact-card">
                    <div class="row align-items-start g-4">
                        <div class="col-lg-5">
                            <span class="pf-kicker">ขอคำแนะนำเบื้องต้น</span>
                            <h2>คุยกับเราเพื่อดูว่า PlayFlowPOS เหมาะกับร้านคุณไหม</h2>
                            <p class="pf-copy">ถ้าคุณสนใจระบบสำหรับร้านนวด สปา คลินิก หรือธุรกิจบริการหลายสาขา สามารถติดต่อเราได้ทันทีผ่าน LINE หรือโทรเข้ามาเพื่อสอบถามข้อมูลและนัดเดโม</p>
                            <div class="pf-contact-note">
                                <strong>ติดต่อสะดวก ไม่ต้องกรอกฟอร์มยาว</strong>
                                <span>เลือกช่องทางที่สะดวกที่สุด แล้วคุยรายละเอียดของร้านกับเราได้เลย</span>
                            </div>
                            <div class="pf-contact-side">
                                @foreach ($contactHighlights as $highlight)
                                    <div class="pf-contact-side__item">
                                        <span>{{ $highlight['label'] }}</span>
                                        <strong>{{ $highlight['text'] }}</strong>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="pf-form-shell">
                                <div class="pf-contact-actions">
                                    @foreach ($contactMethods as $contactMethod)
                                        <a href="{{ $contactMethod['href'] }}" class="pf-contact-cta pf-contact-cta--{{ $contactMethod['type'] }}"
                                            @if ($contactMethod['target']) target="{{ $contactMethod['target'] }}" @endif
                                            @if ($contactMethod['rel']) rel="{{ $contactMethod['rel'] }}" @endif>
                                            <span class="pf-contact-cta__icon"><i class="bi {{ $contactMethod['icon'] }}"></i></span>
                                            <span class="pf-contact-cta__content">
                                                <small>{{ $contactMethod['label'] }}</small>
                                                <strong>{{ $contactMethod['value'] }}</strong>
                                            </span>
                                            <span class="pf-contact-cta__arrow"><i class="bi @if ($contactMethod['type'] === 'line') bi-arrow-up-right @else bi-arrow-right @endif"></i></span>
                                        </a>
                                    @endforeach
                                </div>

                                <div class="pf-contact-tips">
                                    @foreach ($contactTips as $contactTip)
                                        <div class="pf-contact-tips__item">
                                            <span>{{ $contactTip['label'] }}</span>
                                            <strong>{{ $contactTip['text'] }}</strong>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="pf-footer">
        <div class="container d-flex flex-column flex-lg-row justify-content-between gap-2">
            <div>
                <div class="pf-footer__brand">PlayFlowPOSPro</div>
                <div class="pf-copy mb-0">ระบบจัดการร้านสำหรับร้านนวด สปา คลินิก และธุรกิจบริการหลายสาขา</div>
            </div>
            <div class="pf-copy mb-0">ช่วยให้ร้านทำงานเป็นระบบมากขึ้น ตั้งแต่หน้าร้านไปจนถึงการดูภาพรวมของธุรกิจ</div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var menu = document.getElementById('mainNav');

            if (!menu || typeof bootstrap === 'undefined') {
                return;
            }

            var navCollapse = bootstrap.Collapse.getOrCreateInstance(menu, { toggle: false });

            menu.querySelectorAll('a').forEach(function (link) {
                link.addEventListener('click', function () {
                    if (window.innerWidth < 992 && menu.classList.contains('show')) {
                        navCollapse.hide();
                    }
                });
            });
        });
    </script>
</body>
</html>
