<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Wisata Kota Majalengka - Nature Experience</title>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&family=Playfair+Display:wght@700&display=swap"
      rel="stylesheet"
    />

    <script src="https://cdn.tailwindcss.com"></script>

    <script>
      tailwind.config = {
        theme: {
          extend: {
            colors: {
              sage: {
                50: "#f4f7f5",
                100: "#e3ebe5",
                300: "#abc4b5",
                500: "#8a9a5b",
                600: "#6e7e48",
                800: "#3a4a3b", 
                900: "#243025",
              },
            },
            fontFamily: {
              serif: ['"Playfair Display"', "serif"],
              sans: ['"Lato"', "sans-serif"],
            },
          },
        },
      };
    </script>
  </head>
  <body class="bg-sage-50 text-sage-800 font-sans antialiased">
    <nav
      class="fixed w-full z-50 bg-sage-100/90 backdrop-blur-md shadow-sm transition-all"
    >
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-20">
          <div class="flex-shrink-0 flex items-center">
            <h1
              class="text-2xl font-serif font-bold text-sage-600 tracking-wide"
            >
              Wisata<span class="text-sage-800">Majalengka</span>.
            </h1>
          </div>
          <div class="hidden md:block">
            <div class="ml-10 flex items-baseline space-x-8">
              <a
                href="#"
                class="text-sage-800 hover:text-sage-500 font-semibold px-3 py-2 transition"
                >Beranda</a
              >
              <a
                href="#about"
                class="text-gray-500 hover:text-sage-500 px-3 py-2 transition"
                >About</a
              >
              <a
                href="#paket"
                class="text-gray-500 hover:text-sage-500 px-3 py-2 transition"
                >Paket Wisata</a
              >
              <a
                href="#fasilitas"
                class="text-gray-500 hover:text-sage-500 px-3 py-2 transition"
                >Fasilitas</a
              >
              <a
                href="form_pemesanan.php"
                class="bg-sage-500 text-white px-5 py-2 rounded-full hover:bg-sage-600 transition shadow-lg shadow-sage-500/30"
                >Pemesanan</a
              >
            </div>
          </div>
        </div>
      </div>
    </nav>

    <header class="relative pt-28 pb-16 lg:pt-32 lg:pb-24 overflow-hidden">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
          <div class="text-center lg:text-left z-10">
            <span
              class="text-sage-500 font-bold tracking-wider uppercase text-sm mb-2 block"
              >Wisata Alam & Budaya</span
            >
            <h1
              class="text-5xl md:text-6xl font-serif font-bold text-sage-900 leading-tight mb-6"
            >
              Jelajahi Keindahan <br />Wisata
              <span class="text-sage-500 italic">Majalengka</span>
            </h1>
            <p
              class="text-lg text-gray-600 mb-8 leading-relaxed max-w-lg mx-auto lg:mx-0"
            >
              Setiap sudut Majalengka punya cerita yang layak untuk dibagikan, mulai dari panorama pegunungan yang menawan hingga jernihnya air di berbagai situ wisata.
            </p>
            <div
              class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start"
            >
              <a
                href="#paket"
                class="px-8 py-3 bg-sage-800 text-white rounded-lg font-semibold hover:bg-sage-900 transition shadow-lg"
                >Lihat Paket</a
              >
              <a
                href="#video"
                class="px-8 py-3 border border-sage-800 text-sage-800 rounded-lg font-semibold hover:bg-sage-100 transition"
                >Tonton Video</a
              >
            </div>
          </div>

          <div class="relative">
            <div class="grid grid-cols-2 gap-4">
              <img
                src="img/mjl.webp"
                class="rounded-2xl shadow-xl w-full h-64 object-cover transform translate-y-8"
                alt="River Tubing"
              />
              <img
                src="img/alun.jpg"
                class="rounded-2xl shadow-xl w-full h-64 object-cover"
                alt="Pemandangan Alam"
              />
            </div>
            <div
              class="absolute -z-10 top-10 right-10 w-full h-full bg-sage-300 rounded-full opacity-20 blur-3xl"
            ></div>
          </div>
        </div>
      </div>
    </header>

    <section id="paket" class="py-20 bg-white">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
          <h2 class="text-3xl md:text-4xl font-serif font-bold text-sage-900">
            Pilihan Paket Wisata
          </h2>
          <p class="mt-4 text-gray-500">
            Temukan petualangan yang sesuai dengan gaya liburan Anda.
          </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
          <div
            class="group bg-white border border-sage-100 rounded-2xl overflow-hidden shadow-sm hover:shadow-2xl hover:shadow-sage-500/20 transition-all duration-300"
          >
            <div class="relative h-60 overflow-hidden">
              <img
                src="img/ciboer pas.webp"
                class="w-full h-full object-cover group-hover:scale-110 transition duration-500"
                alt="Ciboer pass"
              />
              <div
                class="absolute top-4 right-4 bg-white/90 px-3 py-1 rounded-full text-xs font-bold text-sage-800 uppercase tracking-wider"
              >
                Promo
              </div>
            </div>
            <div class="p-6">
              <div class="flex justify-between items-center mb-3">
                <span class="text-sm text-sage-500 font-semibold"
                  >2 Hari 1 Malam</span
                >
                <div class="flex text-yellow-400 text-xs">★★★★★</div>
              </div>
              <h3
                class="text-xl font-bold text-gray-800 mb-2 leading-snug group-hover:text-sage-600 transition"
              >
                Paket Penginapan & Camping Ground
              </h3>
              <p class="text-gray-500 text-sm mb-4 line-clamp-2">
                Nikmati keindahan alam wisata ciboer pass dilanjutkan camping
                ceria di tepi sawah.
              </p>
              <div
                class="flex items-center justify-between pt-4 border-t border-gray-100"
              >
                <div>
                  <span class="text-xs text-gray-400 block">Mulai dari</span>
                  <span class="text-lg font-bold text-sage-700"
                    >Rp 650.000</span
                  >
                </div>
                <a
                  href="form_pemesanan.php?paket_id=1"
                  class="w-10 h-10 rounded-full bg-sage-100 text-sage-600 flex items-center justify-center hover:bg-sage-500 hover:text-white transition"
                >
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-5 w-5"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M14 5l7 7m0 0l-7 7m7-7H3"
                    />
                  </svg>
                </a>
              </div>
            </div>
          </div>

          <div
            class="group bg-white border border-sage-100 rounded-2xl overflow-hidden shadow-sm hover:shadow-2xl hover:shadow-sage-500/20 transition-all duration-300"
          >
            <div class="relative h-60 overflow-hidden">
              <img
                src="img/cipanten.webp"
                class="w-full h-full object-cover group-hover:scale-110 transition duration-500"
                alt="Situ cipanten"
              />
              <div
                class="absolute top-4 right-4 bg-sage-500/90 px-3 py-1 rounded-full text-xs font-bold text-white uppercase tracking-wider"
              >
                Terlaris
              </div>
            </div>
            <div class="p-6">
              <div class="flex justify-between items-center mb-3">
                <span class="text-sm text-sage-500 font-semibold"
                  >Wisata Alam</span
                >
                <div class="flex text-yellow-400 text-xs">★★★★☆</div>
              </div>
              <h3
                class="text-xl font-bold text-gray-800 mb-2 leading-snug group-hover:text-sage-600 transition"
              >
                Situ Cipanten
              </h3>
              <p class="text-gray-500 text-sm mb-4 line-clamp-2">
                nikmati keindahan situ cipanten dengan air yang jernih
              </p>
              <div
                class="flex items-center justify-between pt-4 border-t border-gray-100"
              >
                <div>
                  <span class="text-xs text-gray-400 block">Mulai dari</span>
                  <span class="text-lg font-bold text-sage-700"
                    >Rp 20.000</span
                  >
                </div>
                <a
                  href="form_pemesanan.php?paket_id=1"
                  class="w-10 h-10 rounded-full bg-sage-100 text-sage-600 flex items-center justify-center hover:bg-sage-500 hover:text-white transition"
                >
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-5 w-5"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M14 5l7 7m0 0l-7 7m7-7H3"
                    />
                  </svg>
                </a>
              </div>
            </div>
          </div>

          <div
            class="group bg-white border border-sage-100 rounded-2xl overflow-hidden shadow-sm hover:shadow-2xl hover:shadow-sage-500/20 transition-all duration-300"
          >
            <div class="relative h-60 overflow-hidden">
              <img
                src="img/cikadongdong.webp"
                class="w-full h-full object-cover group-hover:scale-110 transition duration-500"
                alt="ATV"
              />
            </div>
            <div class="p-6">
              <div class="flex justify-between items-center mb-3">
                <span class="text-sm text-sage-500 font-semibold">3 Jam</span>
                <div class="flex text-yellow-400 text-xs">★★★★★</div>
              </div>
              <h3
                class="text-xl font-bold text-gray-800 mb-2 leading-snug group-hover:text-sage-600 transition"
              >
                Arum Jeram cikadongdong
              </h3>
              <p class="text-gray-500 text-sm mb-4 line-clamp-2">
                Memacu adrenalin melewati rintangan arum jeram
              </p>
              <div
                class="flex items-center justify-between pt-4 border-t border-gray-100"
              >
                <div>
                  <span class="text-xs text-gray-400 block">Mulai dari</span>
                  <span class="text-lg font-bold text-sage-700"
                    >Rp 350.000</span
                  >
                </div>
                <a
                  href="form_pemesanan.php?paket_id=1"
                  class="w-10 h-10 rounded-full bg-sage-100 text-sage-600 flex items-center justify-center hover:bg-sage-500 hover:text-white transition"
                >
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-5 w-5"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M14 5l7 7m0 0l-7 7m7-7H3"
                    />
                  </svg>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="about" class="max-w-7xl mx-auto px-4 py-16">
  <h2 class="text-3xl font-bold mb-6 text-sage-700">Tentang Wisata Majalengka</h2>

  <p class="text-gray-600 leading-relaxed mb-6">
    Wisata Majalengka merupakan platform informasi dan pemesanan destinasi wisata
    yang menyajikan keindahan alam dan budaya khas Kabupaten Majalengka.
    Mulai dari pegunungan, situ alami, hingga wisata petualangan.
  </p>

  <div class="grid md:grid-cols-3 gap-6 mt-10">
    <div class="bg-white p-6 rounded-xl shadow">
      <h3 class="font-semibold text-lg mb-2">🌿 Wisata Alam</h3>
      <p class="text-gray-500">Gunung, situ, air terjun, dan panorama alam yang menenangkan.</p>
    </div>
    <div class="bg-white p-6 rounded-xl shadow">
      <h3 class="font-semibold text-lg mb-2">🎭 Budaya Lokal</h3>
      <p class="text-gray-500">Kearifan lokal, tradisi, dan kuliner khas Majalengka.</p>
    </div>
    <div class="bg-white p-6 rounded-xl shadow">
      <h3 class="font-semibold text-lg mb-2">🧭 Petualangan</h3>
      <p class="text-gray-500">Camping, arung jeram, dan aktivitas outdoor seru.</p>
    </div>
  </div>
</section>

<section id="fasilitas" class="max-w-7xl mx-auto px-4 py-16">
  <h2 class="text-3xl font-bold mb-10 text-sage-700">Fasilitas Wisata</h2>

  <div class="grid md:grid-cols-4 gap-6">
    <div class="bg-white p-6 rounded-xl shadow text-center">
      <p class="text-4xl mb-3">🅿️</p>
      <h4 class="font-semibold">Parkir Luas</h4>
    </div>
    <div class="bg-white p-6 rounded-xl shadow text-center">
      <p class="text-4xl mb-3">🚻</p>
      <h4 class="font-semibold">Toilet Umum</h4>
    </div>
    <div class="bg-white p-6 rounded-xl shadow text-center">
      <p class="text-4xl mb-3">🍽️</p>
      <h4 class="font-semibold">Tempat Makan</h4>
    </div>
    <div class="bg-white p-6 rounded-xl shadow text-center">
      <p class="text-4xl mb-3">⛺</p>
      <h4 class="font-semibold">Area Camping</h4>
    </div>
  </div>
</section>

    <section id="video" class="py-20 bg-sage-800 relative overflow-hidden">
      <div
        class="absolute top-0 left-0 w-full h-full opacity-10 pointer-events-none"
      >
        <svg width="100%" height="100%" xmlns="http://www.w3.org/2000/svg">
          <defs>
            <pattern
              id="a"
              width="40"
              height="40"
              patternUnits="userSpaceOnUse"
            >
              <path
                d="M0 40L40 0H20L0 20M40 40V20L20 40"
                stroke="#fff"
                stroke-width="2"
                fill="none"
              />
            </pattern>
          </defs>
          <rect width="100%" height="100%" fill="url(#a)" />
        </svg>
      </div>

      <div class="max-w-5xl mx-auto px-4 relative z-10 text-center">
        <h2 class="text-3xl font-serif font-bold text-white mb-8">
          Intip Keseruan Aktivitas Kami
        </h2>

        <div
          class="relative aspect-video w-full rounded-2xl overflow-hidden shadow-2xl border-4 border-white/20"
        >
          <iframe
            class="w-full h-full"
            src="https://www.youtube.com/embed/oxtXOpc6Hbw?si=fWztHVLkWFHOrCX5"
            title="Video Wisata"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen
          >
          </iframe>
        </div>
        <p class="text-sage-100 mt-6 text-sm md:text-base">
          Jangan lewatkan momen terbaik bersama keluarga dan sahabat di seluruh
          Wisata Kota Majalengka
        </p>
      </div>
    </section>
    
    <footer class="bg-sage-900 text-white py-10 border-t border-sage-800">
      <div class="max-w-7xl mx-auto px-4 text-center">
        <p class="text-sage-300">
          &copy; 2025 FachryHlm - Wisata Kota Majalengka.
        </p>
        <div class="mt-4 flex justify-center space-x-6 text-sm text-sage-500">
          <a href="#" class="hover:text-white">Instagram</a>
          <a href="#" class="hover:text-white">Facebook</a>
          <a href="#" class="hover:text-white">Twitter</a>
        </div>
      </div>
    </footer>
  </body>
</html>
