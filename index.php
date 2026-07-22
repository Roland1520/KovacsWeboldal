<?php
// --- ADATOK KONFIGURÁCIÓJA ---

$current_year = date("Y");

// Projektek listája
$projects = [
    [
        'id' => 1, 
        'title' => 'Kerítéskészítés', 
        'cat' => 'Kültéri kovácsoltvas', 
        'img' => '/images/fence4.jpeg', 
        'color' => 'text-emerald-700'
    ],
    [
        'id' => 2, 
        'title' => 'Vas rózsák', 
        'cat' => 'Dekoráció', 
        'img' => '/images/rose.jpeg',
        'color' => 'text-orange-700'
    ],
    [
        'id' => 3, 
        'title' => 'Kovácsolt asztalok', 
        'cat' => 'Beltéri kovácsoltvas', 
        'img' => '/images/desk2.jpeg', 
        'color' => 'text-blue-700'
    ]
];

// Galéria képek
$workshopImages = [
    ['src' => '/images/fence.jpeg', 'title' => 'Kovácsolt kerítések'],
    ['src' => '/images/fence1.jpeg', 'title' => ''],
    ['src' => '/images/fence2.jpeg', 'title' => ''],
    ['src' => '/images/fence3.jpeg', 'title' => ''],
    ['src' => '/images/fence4.jpeg', 'title' => ''],
    ['src' => '/images/rose.jpeg', 'title' => 'Vas rózsák'],
    ['src' => '/images/rose1.jpeg', 'title' => ''],
    ['src' => '/images/rose2.jpeg', 'title' => ''],
    ['src' => '/images/desk.jpeg', 'title' => 'Kovácsolt asztalok'],
    ['src' => '/images/desk1.jpeg', 'title' => ''],
    ['src' => '/images/desk2.jpeg', 'title' => ''],
    ['src' => '/images/swing.jpeg', 'title' => 'Kovácsolt hinta'],
    ['src' => '/images/swing1.jpeg', 'title' => ''],
    ['src' => '/images/wine.jpeg', 'title' => 'Rozsdamentes borospohár tartó'],
    ['src' => '/images/wine1.jpeg', 'title' => ''],
    ['src' => '/images/woodbracket.jpeg', 'title' => 'Kovácsolt faállvány'],
];
?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Szabó László - Kovácsmester</title>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;1,400&family=Inter:wght@300;400;700;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="index.css">
</head>
<body class="page-shell">

    <header class="site-header">
        <div class="brand-wrap">
            <div class="brand-icon">
                <i data-lucide="hammer" class="w-7 h-7"></i>
            </div>
            <div>
                <h1 class="brand-title">Szabó László</h1>
                <p class="brand-subtitle">Kovácsmester</p>
            </div>
        </div>

        <nav class="site-nav" aria-label="Fő navigáció">
            <a href="#projects">Projektek</a>
            <a href="#gallery">Galéria</a>
            <a href="#contact">Kapcsolatfelvétel</a>
        </nav>

        <div class="header-meta">
            <span class="meta-item">
                <i data-lucide="clock" class="w-3 h-3"></i>
                <span id="clock-display">--:--</span>
            </span>
            <span class="meta-item muted">Sármellék</span>
        </div>
    </header>

    <main class="site-main">
        <section class="hero-card">
            <div class="hero-copy">
                <span class="eyebrow">
                    <i data-lucide="flame" class="w-3 h-3"></i>
                    Tűz • Üllő • Lélek
                </span>
                <h2>
                    A vasat nem töröm.
                    <span>Megnevelem.</span>
                </h2>
                <p style="margin-bottom: 1rem;">
                    Sármelléki műhelyemből indulva modern kovácsolt darabokat készítek, amelyek a funkcionalitást és az esztétikát egyaránt szolgálják.
                </p>
            </div>

            <div class="hero-actions">
                <button class="primary-btn" onclick="openModal('about-modal')">Rólam</button>
                <a class="ghost-btn" href="#projects">Projektek</a>
            </div>
        </section>

        <aside class="status-card">
            <div class="status-video-wrap" aria-hidden="true">
                <video class="status-video" autoplay muted loop playsinline preload="auto">
                    <source src="/images/video.mp4" type="video/mp4">
                </video>
            </div>
        </aside>

        <section id="projects" class="projects-section">
            <div class="section-header">
                <div>
                    <p class="section-kicker">Referencia munkák</p>
                    <h3>Modern kovácsolt alkotások</h3>
                </div>
                <button class="secondary-btn" onclick="openModal('gallery-modal')">
                    Galéria megnyitása
                </button>
            </div>

            <div class="project-grid">
                <?php foreach ($projects as $project): ?>
                <article class="project-card">
                    <div class="project-image-wrap">
                        <img src="<?php echo $project['img']; ?>" alt="<?php echo $project['title']; ?>">
                    </div>
                    <div class="project-body">
                        <div class="project-meta">
                            <span class="project-category"><?php echo $project['cat']; ?></span>
                            <span class="project-id">#<?php echo $project['id']; ?></span>
                        </div>
                        <h4><?php echo $project['title']; ?></h4>
                        <button class="mini-btn" onclick="openModal('gallery-modal')">Képek megtekintése</button>
                    </div>
                </article>
                <?php endforeach; ?>
            </div>
        </section>

        <section id="gallery" class="gallery-preview">
            <div class="gallery-preview-image">
                <img src="<?php echo $workshopImages[0]['src']; ?>" alt="">
            </div>
            <div class="gallery-preview-image">
                <img src="<?php echo $workshopImages[5]['src']; ?>" alt="">
            </div>
            <div class="gallery-preview-image">
                <img src="<?php echo $workshopImages[10]['src']; ?>" alt="">
            </div>
            <div class="gallery-preview-copy">
                <p class="section-kicker">Műhelytitkok</p>
                <h3>Éles képekkel mutatom be a munkafolyamatot.</h3>
                <button class="secondary-btn" onclick="openModal('gallery-modal')">Teljes galéria</button>
            </div>
        </section>

        <section id="contact" class="contact-card">
            <div class="contact-copy">
                <p class="section-kicker">Kapcsolat</p>
                <h3>Indítsunk el valamit.</h3>
                <p style="margin-bottom: 1rem;">
                    Egyedi kapu, lépcső, kandalló vagy kovácsolt dekoráció? Írjon vagy hívjon, és egyeztetünk a legjobb megoldásról.
                </p>

                <div class="contact-list">
                    <div class="contact-item">
                        <span class="contact-icon"><i data-lucide="phone" class="w-5 h-5"></i></span>
                        <span>+36 30 586 4514</span>
                    </div>
                    <div class="contact-item">
                        <span class="contact-icon"><i data-lucide="mail" class="w-5 h-5"></i></span>
                        <span>spido14@gmail.com</span>
                    </div>
                    <div class="contact-item">
                        <span class="contact-icon"><i data-lucide="map-pin" class="w-5 h-5"></i></span>
                        <span>Sármellék, Barátság lakótelep 31, földszint 1.</span>
                    </div>
                </div>
            </div>

            <form class="contact-form" action="#" method="post">
                <label>
                    <span>Név</span>
                    <input type="text" name="name" placeholder="Írja be a nevét" required>
                </label>

                <label>
                    <span>E-mail cím</span>
                    <input type="email" name="email" placeholder="pelda@email.com" required>
                </label>

                <label>
                    <span>Leírás</span>
                    <textarea name="message" rows="6" placeholder="Írja le, mire van szüksége..." required></textarea>
                </label>

                <button type="submit" class="primary-btn form-submit-btn">Üzenet küldése</button>
            </form>
        </section>
    </main>

    <footer class="site-footer">
        <div class="footer-links">
            <a href="impresszum.php">Impresszum</a>
            <a href="adatkezeles.php">Adatkezelés</a>
        </div>
        <p>© <?php echo $current_year; ?> Szabó László E.V. — Minden jog fenntartva.</p>
    </footer>

    <div id="about-modal" class="modal hidden">
        <div class="modal-backdrop" onclick="closeModal('about-modal')"></div>
        <div class="modal-panel modal-panel-light">
            <button class="close-btn" onclick="closeModal('about-modal')">
                <i data-lucide="x" class="w-6 h-6"></i>
            </button>

            <div class="modal-content">
                <span class="eyebrow in-modal">
                    <i data-lucide="hammer" class="w-3 h-3"></i>
                    Szabó László E.V.
                </span>
                <h2>A Sármelléki Műhely története</h2>
                <p>
                    Több mint 15 éve dolgozom a vas megmunkálásával. A műhelyemben a hagyományos kovácsmesterség találkozik a modern, elegáns designnel.
                </p>
                <p>
                    Minden darab egyedi, hosszú élettartammal és esztétikus megjelenéssel készül, így a munkák nem csupán funkcionálisak, hanem örökségként is értékesek maradnak.
                </p>
                <div class="info-grid">
                    <div class="info-card"><i data-lucide="award" class="w-4 h-4"></i><span>Garancia a munkára</span></div>
                    <div class="info-card"><i data-lucide="map-pin" class="w-4 h-4"></i><span>Helyi vállalkozás</span></div>
                    <div class="info-card"><i data-lucide="flame" class="w-4 h-4"></i><span>Hagyományos technológia</span></div>
                </div>
            </div>
        </div>
    </div>

    <div id="gallery-modal" class="modal hidden">
        <div class="modal-backdrop" onclick="closeModal('gallery-modal')"></div>
        <button class="close-btn close-btn-light" onclick="closeModal('gallery-modal')">
            <i data-lucide="x" class="w-7 h-7"></i>
        </button>

        <div class="gallery-frame">
            <div class="gallery-track">
                <?php foreach ($workshopImages as $index => $img): ?>
                <article class="gallery-slide">
                    <img src="<?php echo $img['src']; ?>" alt="<?php echo $img['title']; ?>">
                    <div class="gallery-copy">
                        <p>Műhelytitkok <?php echo $index + 1; ?>/<?php echo count($workshopImages); ?></p>
                        <h3><?php echo $img['title']; ?></h3>
                    </div>
                </article>
                <?php endforeach; ?>
            </div>
            <div class="gallery-hint">
                <i data-lucide="move-right" class="w-4 h-4"></i>
                Lapozz jobbra
            </div>
        </div>
    </div>

    <script>
        lucide.createIcons();

        function updateClock() {
            const now = new Date();
            const timeString = now.toLocaleTimeString('hu-HU', { hour: '2-digit', minute: '2-digit' });
            document.getElementById('clock-display').innerText = timeString;
        }

        setInterval(updateClock, 1000);
        updateClock();

        function openModal(modalId) {
            const modal = document.getElementById(modalId);
            if (modal) {
                modal.classList.remove('hidden');
                document.body.style.overflow = 'hidden';
            }
        }

        function closeModal(modalId) {
            const modal = document.getElementById(modalId);
            if (modal) {
                modal.classList.add('hidden');
                document.body.style.overflow = '';
            }
        }
    </script>
</body>
</html>