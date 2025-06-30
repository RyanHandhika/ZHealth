<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Judul Artikel Kesehatan Anda | Nama Website</title>
    
    <style>
        /* Menggunakan CamelCase untuk penamaan class dan id */

        /* ------------------------- */
        /* --- Global & Body --- */
        /* ------------------------- */
        body {
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: rgb(225, 250, 240);
            color: #334155; /* Warna teks utama (abu-abu gelap) */
            line-height: 1.7;
        }

        /* ------------------------- */
        /* --- Container Utama --- */
        /* ------------------------- */
        .pageContainer {
            padding: 50px 20px; /* Jarak atas-bawah dan kiri-kanan */
        }

        /* --------------------------------- */
        /* --- Wrapper Artikel (Efek Melayang) --- */
        /* --------------------------------- */
        .articleWrapper {
            max-width: 800px; /* Lebar maksimal konten agar mudah dibaca */
            margin: 0 auto; /* Otomatis di tengah secara horizontal */
            background-color: #FFFFFF; /* Latar belakang kartu artikel */
            border-radius: 16px; /* Sudut yang tumpul (border radius) */
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08); /* Efek bayangan untuk kesan melayang */
            padding: 40px;
            transition: transform 0.3s ease-in-out;
        }

        .articleWrapper:hover {
            transform: translateY(-5px); /* Efek sedikit terangkat saat cursor di atasnya */
        }
        
        /* ------------------------- */
        /* --- Tombol Kembali --- */
        /* ------------------------- */
        .backLinkContainer {
            margin-bottom: 24px;
        }

        .backLink {
            text-decoration: none;
            color: #14B8A6; /* Hijau tosca yang sedikit lebih gelap untuk kontras */
            font-weight: 600;
            font-size: 1em;
            transition: color 0.3s;
        }

        .backLink:hover {
            color: #0D9488;
        }

        /* ------------------------- */
        /* --- Header Artikel --- */
        /* ------------------------- */
        .articleHeader {
            margin-bottom: 30px;
            border-bottom: 1px solid #E2E8F0;
            padding-bottom: 20px;
        }

        .articleTitle {
            font-size: 2.5em; /* Ukuran judul utama */
            font-weight: 700;
            color: #111827; /* Sedikit lebih gelap untuk judul */
            margin: 0 0 10px 0;
            line-height: 1.2;
        }

        .articleMeta {
            font-size: 0.9em;
            color: #64748B; /* Warna abu-abu untuk info meta */
        }
        
        .articleMeta span {
            margin-right: 15px; /* Jarak antar item meta */
        }

        /* ------------------------- */
        /* --- Konten Artikel --- */
        /* ------------------------- */
        .featuredImage {
            width: 100%;
            height: auto;
            border-radius: 12px; /* Border radius untuk gambar */
            margin-bottom: 30px;
            object-fit: cover;
        }
        
        .articleBody h2 {
            font-size: 1.8em;
            font-weight: 600;
            color: #2DD4BF; /* Warna aksen hijau tosca untuk subjudul */
            margin-top: 40px;
            margin-bottom: 15px;
        }

        .articleBody p {
            font-size: 1.1em;
            margin-bottom: 20px;
        }

        .articleBody a {
            color: #14B8A6;
            text-decoration: none;
            font-weight: 600;
            border-bottom: 2px solid transparent;
            transition: border-bottom 0.3s;
        }

        .articleBody a:hover {
            border-bottom: 2px solid #2DD4BF;
        }

        /* Styling untuk blockquote agar tidak monoton */
        .articleBody blockquote {
            margin: 30px 0;
            padding: 20px;
            background-color: #F8FAFC;
            border-left: 5px solid #2DD4BF; /* Garis aksen di kiri */
            font-style: italic;
            font-size: 1.1em;
            color: #475569;
        }

        /* ------------------------- */
        /* --- Tombol Scroll-to-Top --- */
        /* ------------------------- */
        #scrollToTopBtn {
            display: none; /* Awalnya disembunyikan */
            position: fixed;
            bottom: 30px;
            right: 30px;
            z-index: 99;
            border: none;
            outline: none;
            background-color: #2DD4BF;
            color: white;
            cursor: pointer;
            padding: 15px;
            border-radius: 50%; /* Membuatnya bulat */
            width: 50px;
            height: 50px;
            font-size: 18px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
            transition: background-color 0.3s, transform 0.3s;
        }

        #scrollToTopBtn:hover {
            background-color: #14B8A6;
            transform: scale(1.1);
        }

        /* ------------------------- */
        /* --- Media Query (Responsif) --- */
        /* ------------------------- */
        @media (max-width: 768px) {
            .pageContainer {
                padding: 20px 10px;
            }

            .articleWrapper {
                padding: 25px;
            }

            .articleTitle {
                font-size: 2em;
            }

            .articleBody h2 {
                font-size: 1.5em;
            }

            .articleBody p {
                font-size: 1em;
            }
        }

    </style>
</head>
<body>

    <div class="pageContainer">
        <article class="articleWrapper">

            <div class="backLinkContainer">
                <a href="/" class="backLink">← Kembali ke Beranda</a>
            </div>

            <header class="articleHeader">
                <h1 class="articleTitle">7 Manfaat Luar Biasa Minum Air Putih di Pagi Hari</h1>
                <div class="articleMeta">
                    <span>Penulis: Dr. Anisa Putri</span>
                    <span>•</span>
                    <span>Diterbitkan: 27 Juni 2025</span>
                    <span>•</span>
                    <span>Waktu Baca: 5 Menit</span>
                </div>
            </header>

            <img src="https://source.unsplash.com/800x400/?water,healthy" alt="Segelas air putih di pagi hari" class="featuredImage">

            <div class="articleBody">
                <p>Memulai hari dengan segelas air putih adalah salah satu kebiasaan paling sederhana namun memberikan dampak yang sangat besar bagi kesehatan tubuh. Seringkali disepelekan, ritual ini sebenarnya adalah kunci untuk membuka berbagai manfaat kesehatan jangka panjang. Mari kita jelajahi mengapa kebiasaan ini begitu penting.</p>
                
                <h2>1. Rehidrasi Setelah Tidur Malam</h2>
                <p>Selama 6-8 jam tidur, tubuh kita tidak mendapatkan asupan cairan sama sekali. Akibatnya, kita bangun dalam kondisi dehidrasi ringan. Minum air putih segera setelah bangun tidur membantu mengisi kembali cairan yang hilang, menyegarkan organ-organ tubuh, dan mempersiapkan sistem pencernaan untuk bekerja.</p>

                <h2>2. Meningkatkan Metabolisme Tubuh</h2>
                <p>Penelitian menunjukkan bahwa minum air putih di pagi hari dapat meningkatkan laju metabolisme hingga 24% selama satu jam ke depan. Metabolisme yang lebih cepat berarti tubuh lebih efisien dalam membakar kalori. Anda bisa mencari <a href="#">studi terkait</a> untuk informasi lebih lanjut.</p>

                <blockquote>
                    "Air adalah kekuatan pendorong dari semua alam." - Leonardo da Vinci. Kutipan ini mengingatkan kita betapa fundamentalnya peran air bagi kehidupan dan kesehatan kita.
                </blockquote>

                <h2>3. Membantu Mengeluarkan Racun</h2>
                <p>Air minum membantu ginjal untuk bekerja lebih efektif dalam menyaring dan membuang racun dari dalam tubuh melalui urine. Ketika Anda minum air saat perut kosong di pagi hari, proses detoksifikasi alami ini menjadi lebih optimal.</p>

                <h2>4. Meningkatkan Kesehatan Kulit</h2>
                <p>Dehidrasi adalah salah satu penyebab utama kulit kusam dan kering. Dengan memastikan tubuh terhidrasi dengan baik sejak pagi, Anda membantu menjaga elastisitas dan kelembapan kulit, membuatnya tampak lebih cerah dan sehat.</p>

                <p>Dengan mengadopsi kebiasaan sederhana ini, Anda telah mengambil langkah besar untuk investasi kesehatan jangka panjang. Selamat mencoba!</p>
            </div>

        </article>
    </div>

    <button id="scrollToTopBtn" title="Kembali ke atas">↑</button>

    <script>
        // --- JavaScript Sederhana untuk Tombol Scroll to Top ---

        // Mengambil elemen tombol
        const scrollToTopBtn = document.getElementById("scrollToTopBtn");

        // Fungsi untuk menampilkan atau menyembunyikan tombol
        window.onscroll = function() {
            scrollFunction();
        };

        function scrollFunction() {
            // Tampilkan tombol jika user scroll lebih dari 100px
            if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
                scrollToTopBtn.style.display = "block";
            } else {
                scrollToTopBtn.style.display = "none";
            }
        }

        // Fungsi untuk scroll ke atas saat tombol di klik
        scrollToTopBtn.onclick = function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth' // Animasi scroll yang halus
            });
        };
    </script>

</body>
</html>