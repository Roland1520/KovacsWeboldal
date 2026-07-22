<?php
$current_year = date('Y');
?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Impresszum | Szabó László egyéni vállalkozó</title>
    <script src="https://cdn.tailwindcss.com"></script>
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
                <p class="brand-subtitle">Egyéni vállalkozó</p>
            </div>
        </div>

        <div class="header-meta">
            <span class="meta-item muted">Sármellék</span>
        </div>
    </header>

    <main class="impresszum-page">
        <section class="impresszum-card">
            <p class="section-kicker">Impresszum</p>
            <h2>Szolgáltató</h2>
            <p>
                <strong>Név:</strong> Szabó László E.V.<br>
                <strong>Székhely:</strong> 8986 Sármellék, Barátság lakótelep 31, földszint 1.<br>
                <strong>Adószám:</strong> 75310411-1-40<br>
                <strong>E-mail:</strong> spido14@gmail.com <br>
                <strong>Telefon:</strong> +36 30 586 4514
            </p>

            <h2>Tárhelyszolgáltató</h2>
            <p>
                <strong>Név:</strong> VPS4You Kft.<br>
                <strong>Weboldal:</strong> https://vps4you.hu
            </p>

            <h2>Kapcsolat</h2>
            <p>
                Bármilyen kérdés esetén az alábbi e-mail címen lehet kapcsolatba lépni: <strong>spido14@gmail.com </strong>
            </p>

            <h2>Szerzői jog</h2>
            <p>
                A weboldal teljes tartalma szerzői jogi védelem alatt áll. A tartalmak részleges vagy teljes másolása, terjesztése vagy felhasználása kizárólag előzetes írásbeli engedéllyel történhet.
            </p>

            <h2>Felelősség</h2>
            <p>
                A weboldalon található információk tájékoztató jellegűek. A szolgáltató fenntartja a jogot azok módosítására, és nem vállal felelősséget az esetleges pontatlanságokból eredő károkért.
            </p>

            <a class="primary-btn impresszum-back" href="index.php">Vissza a főoldalra</a>
        </section>
    </main>

    <footer class="site-footer">
        <div class="footer-links">
            <a href="impresszum.php">Impresszum</a>
            <a href="adatkezeles.php">Adatkezelés</a>
        </div>
        <p>© <?php echo $current_year; ?> Szabó László E.V. — Minden jog fenntartva.</p>
    </footer>

    <script src="https://unpkg.com/lucide@latest"></script>
    <script>
        lucide.createIcons();
    </script>
</body>
</html>
