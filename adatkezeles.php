<?php
$current_year = date('Y');
?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adatkezelés | Szabó László egyéni vállalkozó</title>
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
            <p class="section-kicker">Adatkezelés</p>
            <h2>1. Az adatkezelő</h2>
            <p>
                <strong>Név:</strong> Szabó László E.V.<br>
                <strong>Székhely:</strong> 8986 Sármellék, Barátság lakótelep 31, földszint 1.<br>
                <strong>Adószám:</strong> 75310411-1-40<br>
                <strong>E-mail:</strong> spido14@gmail.com<br>
                <strong>Telefon:</strong> +36 30 586 4514
            </p>

            <h2>2. A kezelt adatok</h2>
            <p>
                - Név<br>
                - E-mail cím<br>
                - Az üzenet tartalma<br>
                - Technikai naplóadatok (IP-cím, böngésző típusa, időpont)
            </p>

            <h2>3. Az adatkezelés célja</h2>
            <p>
                - Kapcsolatfelvételi kérelmek megválaszolása.<br>
                - Ajánlatkérés kezelése.<br>
                - Ügyfélkapcsolat fenntartása.<br>
                - Weboldal biztonságának biztosítása.
            </p>

            <h2>4. Jogalap</h2>
            <p>
                Az adatkezelés az érintett önkéntes hozzájárulásán, illetve a GDPR 6. cikk (1) bekezdés b) és f) pontján alapul.
            </p>

            <h2>5. Adattárolás időtartama</h2>
            <p>
                A kapcsolatfelvételi űrlapon megadott adatokat legfeljebb 12 hónapig, illetve a jogszabályokban előírt ideig kezeljük.
            </p>

            <h2>6. Adatfeldolgozó</h2>
            <p>
                <strong>Tárhelyszolgáltató:</strong> VPS4You Kft.<br>
                A tárhelyszolgáltató a weboldal üzemeltetéséhez szükséges technikai adatokat kezeli.
            </p>

            <h2>7. Az érintettek jogai</h2>
            <p>
                - Tájékoztatáshoz való jog<br>
                - Hozzáféréshez való jog<br>
                - Helyesbítéshez való jog<br>
                - Törléshez való jog<br>
                - Adatkezelés korlátozásához való jog<br>
                - Adathordozhatósághoz való jog<br>
                - Tiltakozáshoz való jog
            </p>

            <h2>8. Kapcsolat</h2>
            <p>
                Adatkezeléssel kapcsolatos kérdés esetén írjon az <strong>spido14@gmail.com </strong> címre.
            </p>

            <h2>9. Hatósági jogorvoslat</h2>
            <p>
                Nemzeti Adatvédelmi és Információszabadság Hatóság (NAIH)<br>
                1055 Budapest, Falk Miksa utca 9-11.<br>
                https://naih.hu
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
