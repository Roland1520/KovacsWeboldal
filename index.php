<?php
// --- ADATOK KONFIGURÁCIÓJA ---

$current_year = date("Y");

// Projektek listája
$projects = [
    [
        'id' => 1, 
        'title' => 'Damaszkuszi Örökség', 
        'cat' => 'Késkészítés', 
        'img' => 'https://images.unsplash.com/photo-1594142465967-31976ccc3972?auto=format&fit=crop&q=80', 
        'color' => 'text-emerald-700' // Sötétebb árnyalat a olvashatóságért PHP-ban
    ],
    [
        'id' => 2, 
        'title' => 'Gótikus Kúria Kapu', 
        'cat' => 'Építészet', 
        'img' => 'https://images.unsplash.com/photo-1517336714731-489689fd1ca8?auto=format&fit=crop&q=80', 
        'color' => 'text-orange-700'
    ],
    [
        'id' => 3, 
        'title' => 'Minimál Kandalló', 
        'cat' => 'Belsőépítészet', 
        'img' => 'https://images.unsplash.com/photo-1578301978018-3005759f48f7?auto=format&fit=crop&q=80', 
        'color' => 'text-blue-700'
    ]
];

// Galéria képek
$workshopImages = [
    ['src' => 'https://images.unsplash.com/photo-1549480111-893ec19b2221?auto=format&fit=crop&q=80', 'title' => 'Izzó vas formálása 1200°C-on'],
    ['src' => 'https://images.unsplash.com/photo-1590159441097-40f09079979c?auto=format&fit=crop&q=80', 'title' => 'Precíziós csiszolás kézzel'],
    ['src' => 'https://images.unsplash.com/photo-1598970434795-0c54fe7c0648?auto=format&fit=crop&q=80', 'title' => 'Hagyományos tűzhely és üllő'],
    ['src' => 'https://images.unsplash.com/photo-1534073828943-f801091bb18c?auto=format&fit=crop&q=80', 'title' => 'A sármelléki műhely enteriőrje'],
    ['src' => 'https://images.unsplash.com/photo-1610214818454-e69888910074?auto=format&fit=crop&q=80', 'title' => 'Részletek kidolgozása kalapáccsal'],
];
?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Szabó László - Kovácsmester & Designer</title>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;1,400&family=Inter:wght@300;400;700;900&display=swap" rel="stylesheet">

    <style>
        body { font-family: 'Inter', sans-serif; }
        h1, h2, h3, .font-serif { font-family: 'Playfair Display', serif; }
        
        /* Scrollbar elrejtése a galériához */
        .scrollbar-hide::-webkit-scrollbar {
            display: none;
        }
        .scrollbar-hide {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
        
        .fade-in { animation: fadeIn 0.5s ease-in-out; }
        @keyframes fadeIn { from { opacity: 0; } to { opacity: 1; } }
    </style>
</head>
<body class="bg-[#EBE9E4] text-[#1c1917] p-4 md:p-8 selection:bg-[#9f1239] selection:text-white relative">

    <!-- HEADER -->
    <header className="max-w-[1600px] mx-auto flex flex-col md:flex-row justify-between items-end mb-8 border-b border-[#1c1917]/10 pb-6 gap-4">
        <div class="max-w-[1600px] mx-auto w-full flex flex-col md:flex-row justify-between items-end mb-8 border-b border-[#1c1917]/10 pb-6 gap-4">
            <div class="flex items-start gap-5">
                <div class="w-14 h-14 bg-[#134e4a] flex items-center justify-center rounded-xl rotate-[-2deg] shadow-lg border-2 border-[#ccfbf1]/20">
                    <i data-lucide="hammer" class="text-[#ccfbf1] w-7 h-7"></i>
                </div>
                <div>
                    <h1 class="text-3xl font-black uppercase tracking-tighter leading-none text-[#134e4a]">Szabó László</h1>
                    <p class="text-[11px] uppercase tracking-[0.25em] font-bold text-[#78350f] mt-1.5 font-serif">Kovácsmester & Designer</p>
                </div>
            </div>
            
            <div class="flex items-center gap-6 md:gap-12 text-[10px] font-bold uppercase tracking-widest text-[#57534e]">
                <div class="flex flex-col items-end">
                    <span class="text-[#1c1917] flex items-center gap-2">
                        <i data-lucide="clock" class="w-3 h-3"></i> 
                        <span id="clock-display">--:--</span>
                    </span>
                    <span>Sármellék, Zala vm.</span>
                </div>
                <div class="hidden sm:flex flex-col items-end">
                    
                </div>
            </div>
        </div>
    </header>

    <!-- MAIN GRID -->
    <main class="max-w-[1600px] mx-auto grid grid-cols-1 md:grid-cols-12 grid-rows-none gap-5">
        
        <!-- HERO BOX -->
        <div class="md:col-span-7 lg:col-span-6 bg-[#134e4a] text-[#f0fdfa] rounded-[2rem] p-10 flex flex-col justify-between relative overflow-hidden shadow-xl group transition-all hover:shadow-2xl hover:scale-[1.005] duration-500">
            <div class="relative z-10">
                <div class="inline-flex items-center gap-2 px-3 py-1 bg-[#ffffff]/10 backdrop-blur-md rounded-full mb-8 border border-white/10">
                    <i data-lucide="flame" class="w-3 h-3 text-orange-400"></i>
                    <span class="text-[9px] uppercase font-black tracking-widest text-orange-50">Tűz • Üllő • Lélek</span>
                </div>
                <h2 class="text-5xl lg:text-7xl font-serif leading-[1.05] tracking-tight">
                    A vasat nem töröm. <br/>
                    <span class="italic text-[#2dd4bf] decoration-1 underline-offset-8">Megnevelem.</span>
                </h2>
            </div>
            
            <div class="mt-16 flex items-end justify-between relative z-10">
                <p class="max-w-xs text-sm text-[#ccfbf1]/80 leading-relaxed font-medium">
                    Sármelléki műhelyemből indulva ötvözöm a nyers erőt a mérnöki pontossággal. Egyedi megoldások, amik túlélik az időt.
                </p>
                
                <div class="flex items-center gap-4 group/bio cursor-pointer" onclick="openModal('about-modal')">
                    <span class="hidden md:block text-[#ccfbf1] text-[10px] font-bold uppercase tracking-widest opacity-70 group-hover/bio:opacity-100 transition-opacity translate-x-2 group-hover/bio:translate-x-0 duration-300">
                        Tudj meg többet
                    </span>
                    <button class="w-20 h-20 bg-[#f0fdfa] text-[#134e4a] rounded-2xl flex items-center justify-center group-hover/bio:bg-[#99f6e4] transition-all group-hover/bio:rotate-90 group-hover/bio:rounded-full shadow-lg">
                        <i data-lucide="plus" class="w-9 h-9"></i>
                    </button>
                </div>
            </div>

            <div class="absolute -bottom-20 -right-20 w-80 h-80 bg-[#2dd4bf] blur-[100px] opacity-20 pointer-events-none mix-blend-overlay"></div>
            <div class="absolute top-0 left-0 w-full h-full opacity-10 mix-blend-multiply" style="background-image: url('https://www.transparenttextures.com/patterns/cubes.png');"></div>
        </div>

        <!-- STATUS BOX -->
        <div class="md:col-span-5 lg:col-span-3 bg-[#7c2d12] rounded-[2rem] p-8 text-[#ffedd5] flex flex-col justify-between shadow-lg relative group overflow-hidden">
            <div class="absolute top-[-20%] right-[-20%] w-40 h-40 bg-orange-500/40 blur-[50px] group-hover:bg-orange-400/50 transition-all"></div>
            <div class="space-y-4 relative z-10">
                <i data-lucide="layers" class="w-8 h-8 text-orange-300"></i>
                <h3 class="text-xl font-bold leading-tight">Göllei <br/> Örökség</h3>
            </div>
            <div class="space-y-3 relative z-10">
                <div class="flex justify-between text-[10px] uppercase font-bold text-orange-200/80">
                    <span>Precizitás</span>
                    <span>100%</span>
                </div>
                <div class="h-1.5 bg-black/20 rounded-full overflow-hidden">
                    <div class="h-full bg-orange-400 w-[95%]"></div>
                </div>
                <p class="text-[10px] text-orange-100/80 mt-4 leading-relaxed font-medium">
                    Hagyományos technikák és modern design találkozása a Barátság lakótelepen.
                </p>
            </div>
        </div>

        <!-- BLURRED GALLERY TRIGGER (4 COL) -->
        <div 
            class="md:col-span-12 lg:col-span-12 bg-[#1c1917] rounded-[2rem] relative overflow-hidden min-h-[400px] shadow-lg group cursor-pointer border border-white/10"
            onclick="openModal('gallery-modal')"
        >
            <!-- Blurred Background Grid using first 3 images -->
            <div class="absolute inset-0 grid grid-cols-3 gap-0 opacity-60">
                <?php for($i = 0; $i < 3; $i++): ?>
                <div class="relative w-full h-full overflow-hidden">
                    <img src="<?php echo $workshopImages[$i]['src']; ?>" class="w-full h-full object-cover blur-md scale-110 group-hover:scale-125 transition-transform duration-[2s]" alt="">
                    <div class="absolute inset-0 bg-[#1c1917]/30"></div>
                </div>
                <?php endfor; ?>
            </div>
            
            <!-- Center Content -->
            <div class="absolute inset-0 flex flex-col items-center justify-center text-center z-10 p-8">
                <h3 class="text-4xl md:text-5xl font-serif text-white mb-8 drop-shadow-2xl">Referencia Munkák</h3>
                
                <button class="bg-white text-[#1c1917] px-8 py-5 rounded-2xl text-xs font-black uppercase tracking-[0.2em] shadow-[0_20px_50px_rgba(0,0,0,0.5)] flex items-center gap-3 group-hover:scale-110 transition-transform duration-300 border border-white/20 hover:bg-[#ea580c] hover:text-white">
                    Galéria Megnyitása <i data-lucide="image" class="w-4 h-4"></i>
                </button>
                
                <div class="mt-8 flex items-center gap-2 opacity-0 group-hover:opacity-100 transition-opacity transform translate-y-4 group-hover:translate-y-0 duration-500">
                    <div class="flex -space-x-3">
                        <div class="w-8 h-8 rounded-full border-2 border-[#1c1917] bg-slate-400 overflow-hidden"><img src="<?php echo $projects[0]['img']; ?>" class="w-full h-full object-cover"></div>
                        <div class="w-8 h-8 rounded-full border-2 border-[#1c1917] bg-slate-400 overflow-hidden"><img src="<?php echo $projects[1]['img']; ?>" class="w-full h-full object-cover"></div>
                        <div class="w-8 h-8 rounded-full border-2 border-[#1c1917] bg-slate-400 overflow-hidden flex items-center justify-center text-[8px] font-bold text-[#1c1917] bg-white">+12</div>
                    </div>
                    <span class="text-white/60 text-[10px] font-bold uppercase tracking-widest">Válogatott projektek</span>
                </div>
            </div>
        </div>

        <!-- INFO BOXES -->
        <div class="md:col-span-6 lg:col-span-4 bg-[#ccfbf1] rounded-[2rem] p-8 border border-[#99f6e4] flex items-center gap-6 group hover:bg-[#99f6e4] transition-all">
            <div class="w-16 h-16 bg-[#0f766e] rounded-2xl flex items-center justify-center flex-shrink-0 group-hover:scale-105 transition-transform shadow-lg rotate-3 group-hover:rotate-6">
                <i data-lucide="map-pin" class="text-[#ccfbf1] w-7 h-7"></i>
            </div>
            <div>
                <h4 class="font-bold text-sm uppercase text-[#0f766e] mb-1">Műhely</h4>
                <p class="text-xs text-[#115e59] font-medium leading-tight">Sármellék,<br/>Barátság lakótelep 31.</p>
            </div>
        </div>

        <div class="md:col-span-6 lg:col-span-4 bg-[#ffedd5] rounded-[2rem] p-8 border border-[#fed7aa] flex items-center gap-6 group hover:bg-[#fed7aa] transition-all">
            <div class="w-16 h-16 bg-[#c2410c] rounded-2xl flex items-center justify-center flex-shrink-0 group-hover:scale-105 transition-transform shadow-lg -rotate-2 group-hover:-rotate-6">
                <i data-lucide="award" class="text-[#ffedd5] w-7 h-7"></i>
            </div>
            <div>
                <h4 class="font-bold text-sm uppercase text-[#7c2d12] mb-1">Garancia</h4>
                <p class="text-xs text-[#9a3412] font-medium leading-tight">Mestervizsgával igazolt<br/>minőség és élettartam.</p>
            </div>
        </div>

        <div class="md:col-span-12 lg:col-span-4 bg-white rounded-[2rem] p-8 flex items-center justify-between group cursor-pointer overflow-hidden relative border border-white hover:border-[#2dd4bf] transition-all shadow-sm hover:shadow-xl">
            <div class="flex items-center gap-6 relative z-10">
                <div class="w-12 h-12 bg-blue-600 rounded-full flex items-center justify-center text-white shadow-lg">
                    <i data-lucide="facebook" class="w-6 h-6"></i>
                </div>
                <div>
                    <p class="text-sm font-black uppercase tracking-widest text-[#1c1917]">Facebook</p>
                    <p class="text-[10px] text-[#78716c] font-bold">Kövessen a közösségi médiában</p>
                </div>
            </div>
            <div class="relative z-10 bg-[#f5f5f4] p-3 rounded-full group-hover:bg-[#134e4a] group-hover:text-white transition-colors">
                <i data-lucide="arrow-up-right" class="w-5 h-5"></i>
            </div>
            <div class="absolute inset-0 bg-gradient-to-r from-blue-50 to-white opacity-0 group-hover:opacity-100 transition-opacity"></div>
        </div>
    </main>

    <!-- FOOTER -->
    <footer class="max-w-[1600px] mx-auto mt-20 pb-8 flex flex-col md:flex-row justify-between items-center text-[10px] uppercase font-black tracking-[0.2em] text-[#a8a29e] border-t border-[#1c1917]/5 pt-8">
        <div class="flex gap-8 mb-4 md:mb-0">
            <a href="#" class="hover:text-[#ea580c] transition-colors">Galéria</a>
            <a href="#" class="hover:text-[#ea580c] transition-colors">Kapcsolat</a>
        </div>
        <p>© <?php echo date("Y"); ?> Szabó László E.V. — Sármellék</p>
    </footer>

    <!-- ABOUT MODAL -->
    <div id="about-modal" class="fixed inset-0 z-[100] hidden flex items-center justify-center p-4">
        <div class="absolute inset-0 bg-[#134e4a]/90 backdrop-blur-md" onclick="closeModal('about-modal')"></div>
        <div class="relative bg-[#EBE9E4] w-full max-w-2xl rounded-[2.5rem] p-8 md:p-12 shadow-2xl overflow-hidden animate-in fade-in zoom-in duration-300 border border-white/20">
            <button onclick="closeModal('about-modal')" class="absolute top-6 right-6 md:top-8 md:right-8 w-12 h-12 bg-[#1c1917] text-white rounded-full flex items-center justify-center hover:rotate-90 hover:bg-orange-600 transition-all z-20 shadow-lg">
                <i data-lucide="x" class="w-6 h-6"></i>
            </button>

            <div class="space-y-8 relative z-10">
                <div class="inline-flex items-center gap-2 px-3 py-1 bg-[#134e4a] rounded-full text-[#ccfbf1]">
                    <i data-lucide="hammer" class="w-3 h-3"></i>
                    <span class="text-[10px] uppercase font-black tracking-widest">Szabó László E.V.</span>
                </div>
                
                <h2 class="text-3xl md:text-5xl font-serif text-[#1c1917] leading-tight">
                    A Sármelléki Műhely története
                </h2>
                
                <div class="space-y-4 text-[#57534e] text-sm leading-relaxed md:text-base font-medium">
                    <p>
                        Több mint 15 éve dolgozom a vas megmunkálásával Zala vármegye szívében. A <span class="text-[#134e4a] font-bold">Sármellék, Barátság lakótelep 31.</span> szám alatti műhelyemben a hagyományos kovácsmesterség találkozik a modern belsőépítészeti igényekkel.
                    </p>
                    <p>
                        Nem hiszek a tömeggyártásban. Minden kapu, korlát vagy kés, ami kikerül a kezeim közül, egyedi tervezés eredménye. A célom nem csupán tárgyakat készíteni, hanem olyan értékálló alkotásokat, amelyek generációkon át szolgálják tulajdonosaikat.
                    </p>
                    
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 pt-6">
                        <div class="flex items-center gap-3 p-3 bg-white rounded-xl shadow-sm">
                            <div class="bg-[#ccfbf1] p-2 rounded-lg"><i data-lucide="shield" class="text-[#0f766e] w-4 h-4"></i></div>
                            <span class="font-bold text-[#1c1917] text-xs uppercase tracking-wide">Hivatalos Mestervizsga</span>
                        </div>
                        <div class="flex items-center gap-3 p-3 bg-white rounded-xl shadow-sm">
                            <div class="bg-[#ffedd5] p-2 rounded-lg"><i data-lucide="award" class="text-[#c2410c] w-4 h-4"></i></div>
                            <span class="font-bold text-[#1c1917] text-xs uppercase tracking-wide">Garancia minden munkára</span>
                        </div>
                        <div class="flex items-center gap-3 p-3 bg-white rounded-xl shadow-sm">
                            <div class="bg-[#e0f2fe] p-2 rounded-lg"><i data-lucide="map-pin" class="text-[#0369a1] w-4 h-4"></i></div>
                            <span class="font-bold text-[#1c1917] text-xs uppercase tracking-wide">Helyi vállalkozás</span>
                        </div>
                        <div class="flex items-center gap-3 p-3 bg-white rounded-xl shadow-sm">
                            <div class="bg-[#fee2e2] p-2 rounded-lg"><i data-lucide="flame" class="text-[#b91c1c] w-4 h-4"></i></div>
                            <span class="font-bold text-[#1c1917] text-xs uppercase tracking-wide">Hagyományos technológia</span>
                        </div>
                    </div>
                </div>
                
                <div class="pt-8 border-t border-[#1c1917]/10 flex flex-col sm:flex-row gap-6 items-center justify-between">
                        <div>
                        <p class="text-[10px] uppercase font-black tracking-widest text-[#78350f] mb-1">Közvetlen kapcsolat</p>
                        <p class="font-serif text-2xl text-[#1c1917]">+36 20 555 0192</p>
                        </div>
                        <button onclick="closeModal('about-modal')" class="w-full sm:w-auto px-8 py-4 bg-[#134e4a] text-white rounded-xl font-bold uppercase text-[10px] tracking-[0.2em] hover:bg-[#0f3d3a] transition-colors shadow-lg">
                        Vissza a műhelybe
                        </button>
                </div>
            </div>
            <div class="absolute top-0 right-0 w-64 h-64 bg-orange-400/10 rounded-full blur-3xl -translate-y-1/2 translate-x-1/2 pointer-events-none"></div>
        </div>
    </div>

    <!-- GALLERY MODAL -->
    <div id="gallery-modal" class="fixed inset-0 z-[100] hidden flex items-center justify-center">
        <!-- Backdrop -->
        <div class="absolute inset-0 bg-black/95 backdrop-blur-xl" onclick="closeModal('gallery-modal')"></div>
        
        <button onclick="closeModal('gallery-modal')" class="absolute top-6 right-6 w-14 h-14 bg-white/10 text-white rounded-full flex items-center justify-center hover:bg-white hover:text-black transition-all z-20">
            <i data-lucide="x" class="w-7 h-7"></i>
        </button>

        <div class="relative w-full h-full flex items-center overflow-x-auto snap-x snap-mandatory py-10 px-4 md:px-20 scrollbar-hide">
            <div class="flex gap-0.5 h-[60vh] md:h-[70vh]">
                <?php foreach($workshopImages as $index => $img): ?>
                <div class="relative h-full aspect-[2/3] md:aspect-[3/4] flex-shrink-0 snap-center group overflow-hidden first:rounded-l-3xl last:rounded-r-3xl">
                    <img src="<?php echo $img['src']; ?>" alt="<?php echo $img['title']; ?>" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent opacity-60 group-hover:opacity-40 transition-opacity"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 md:p-8 transform translate-y-2 group-hover:translate-y-0 transition-transform">
                        <p class="text-orange-400 text-[10px] font-black uppercase tracking-widest mb-2">Műhelytitkok <?php echo $index + 1; ?>/<?php echo count($workshopImages); ?></p>
                        <h3 class="text-white text-xl md:text-3xl font-serif leading-tight"><?php echo $img['title']; ?></h3>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            
            <div class="absolute bottom-10 left-10 text-white/50 text-xs font-bold uppercase tracking-widest pointer-events-none flex items-center gap-2">
                <i data-lucide="move-right" class="inline-block animate-pulse"></i> Lapozz jobbra
            </div>
        </div>
    </div>

    <!-- JAVASCRIPT LOGIC -->
    <script>
        // Init Icons
        lucide.createIcons();

        // Clock Functionality
        function updateClock() {
            const now = new Date();
            const timeString = now.toLocaleTimeString('hu-HU', { hour: '2-digit', minute: '2-digit' });
            document.getElementById('clock-display').innerText = timeString;
        }
        setInterval(updateClock, 1000);
        updateClock();

        // Project Display Logic
        function updateProjectDisplay(element) {
            // Get data
            const id = element.getAttribute('data-id');
            const title = element.getAttribute('data-title');
            const img = element.getAttribute('data-img');

            // Reset all buttons style
            document.querySelectorAll('.project-trigger').forEach(btn => {
                btn.classList.remove('bg-white', 'shadow-md', 'border', 'border-[#e7e5e4]', 'text-[#1c1917]');
                btn.classList.add('text-[#78716c]');
            });

            // Set active button style
            element.classList.remove('text-[#78716c]');
            element.classList.add('bg-white', 'shadow-md', 'border', 'border-[#e7e5e4]', 'text-[#1c1917]');

            // Update Display Area
            const imgEl = document.getElementById('project-main-image');
            const placeholderEl = document.getElementById('project-placeholder');
            const infoOverlay = document.getElementById('project-info-overlay');
            const infoTitle = document.getElementById('project-info-title');
            const infoId = document.getElementById('project-info-id');

            placeholderEl.classList.add('hidden');
            imgEl.src = img;
            imgEl.classList.remove('hidden');
            
            infoTitle.innerText = title;
            infoId.innerText = 'PROJEKT ID: SZL-00' + id;
            infoOverlay.classList.remove('hidden');
            infoOverlay.classList.add('flex'); // Ensure flex display
        }

        // Modal Logic
        function openModal(modalId) {
            const modal = document.getElementById(modalId);
            modal.classList.remove('hidden');
            document.body.style.overflow = 'hidden'; // Disable scroll
        }

        function closeModal(modalId) {
            const modal = document.getElementById(modalId);
            modal.classList.add('hidden');
            document.body.style.overflow = 'unset'; // Enable scroll
        }
    </script>
</body>
</html>