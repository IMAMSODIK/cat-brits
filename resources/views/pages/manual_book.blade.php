<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manual Book - Yanks and Brits Computer Assisted Test</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
     <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background-color: #f8f9fa;
            color: #333;
            line-height: 1.6;
            padding: 15px;
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .manual-container {
            background-color: white;
            border-radius: 12px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            overflow: hidden;
            margin-bottom: 20px;
        }
        
        header {
            background: #4274B9;
            color: white;
            padding: 25px 20px;
            text-align: center;
        }
        
        .logo {
            font-size: 2.5rem;
            margin-bottom: 10px;
        }
        
        h1 {
            font-size: 1.8rem;
            margin-bottom: 8px;
            line-height: 1.3;
        }
        
        .subtitle {
            font-size: 1rem;
            opacity: 0.9;
            padding: 0 10px;
        }
        
        .version {
            background-color: rgba(255, 255, 255, 0.2);
            display: inline-block;
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 0.85rem;
            margin-top: 10px;
        }
        
        .content-wrapper {
            display: flex;
            flex-direction: column;
        }
        
        @media (min-width: 768px) {
            .content-wrapper {
                flex-direction: row;
            }
        }
        
        .sidebar {
            background-color: #f1f5f9;
            padding: 20px 15px;
            border-bottom: 1px solid #e2e8f0;
        }
        
        @media (min-width: 768px) {
            .sidebar {
                flex: 1;
                min-width: 250px;
                border-right: 1px solid #e2e8f0;
                border-bottom: none;
            }
        }
        
        .main-content {
            padding: 20px 15px;
        }
        
        @media (min-width: 768px) {
            .main-content {
                flex: 3;
                min-width: 300px;
                padding: 25px 30px;
            }
        }
        
        h2 {
            color: #4274B9;
            margin: 25px 0 15px;
            padding-bottom: 8px;
            border-bottom: 2px solid #e2e8f0;
            font-size: 1.5rem;
        }
        
        h2:first-of-type {
            margin-top: 0;
        }
        
        .section {
            margin-bottom: 25px;
        }
        
        .step {
            display: flex;
            align-items: flex-start;
            margin-bottom: 20px;
            background-color: #f8fafc;
            padding: 15px;
            border-radius: 8px;
            border-left: 4px solid #4274B9;
        }
        
        .step-number {
            background-color: #4274B9;
            color: white;
            width: 32px;
            height: 32px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            margin-right: 15px;
            flex-shrink: 0;
            font-size: 0.9rem;
        }
        
        .nav-list {
            list-style-type: none;
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 10px;
        }
        
        @media (max-width: 480px) {
            .nav-list {
                grid-template-columns: 1fr;
            }
        }
        
        .nav-list li {
            margin-bottom: 0;
        }
        
        .nav-list a {
            text-decoration: none;
            color: #4274B9;
            display: flex;
            align-items: center;
            padding: 12px 15px;
            border-radius: 6px;
            transition: all 0.3s ease;
            background-color: white;
            border: 1px solid #e2e8f0;
            height: 100%;
        }
        
        .nav-list a:hover {
            background-color: #e0e7ff;
            color: #3a0ca3;
        }
        
        .nav-list i {
            margin-right: 10px;
            width: 20px;
            text-align: center;
        }
        
        .note, .warning, .tip {
            padding: 15px;
            border-radius: 6px;
            margin: 20px 0;
            border-left: 4px solid;
        }
        
        .note {
            background-color: #fff7ed;
            border-left-color: #f59e0b;
        }
        
        .warning {
            background-color: #fef2f2;
            border-left-color: #ef4444;
        }
        
        .tip {
            background-color: #f0f9ff;
            border-left-color: #0ea5e9;
        }
        
        .icon {
            margin-right: 8px;
        }
        
        .code-block {
            background-color: #1e293b;
            color: #e2e8f0;
            padding: 15px;
            border-radius: 6px;
            font-family: 'Courier New', monospace;
            margin: 15px 0;
            overflow-x: auto;
            font-size: 0.9rem;
        }
        
        footer {
            text-align: center;
            padding: 20px;
            color: #64748b;
            font-size: 0.9rem;
            border-top: 1px solid #e2e8f0;
            margin-top: 20px;
        }
        
        /* Mobile Navigation Toggle */
        .mobile-toggle {
            display: none;
            background-color: #4361ee;
            color: white;
            border: none;
            padding: 12px 20px;
            border-radius: 6px;
            width: 100%;
            margin-bottom: 15px;
            font-weight: bold;
            cursor: pointer;
        }
        
        @media (max-width: 767px) {
            .mobile-toggle {
                display: flex;
                align-items: center;
                justify-content: center;
            }
            
            .mobile-toggle i {
                margin-left: 10px;
                transition: transform 0.3s;
            }
            
            .sidebar.collapsed {
                display: none;
            }
        }
        
        /* Improve mobile readability */
        @media (max-width: 480px) {
            body {
                padding: 10px;
            }
            
            header {
                padding: 20px 15px;
            }
            
            h1 {
                font-size: 1.6rem;
            }
            
            .step {
                padding: 12px;
                flex-direction: column;
            }
            
            .step-number {
                margin-bottom: 10px;
                margin-right: 0;
            }
            
            .main-content {
                padding: 15px 12px;
            }
            
            .code-block {
                padding: 12px;
                font-size: 0.85rem;
            }
        }
    </style>

    <style>
        .content-block {
            margin-bottom: 32px;
        }

        h3 {
            font-size: 20px;
            margin-bottom: 12px;
            color: #1f2937;
        }

        h4 {
            margin-bottom: 8px;
            font-size: 16px;
        }

        .list {
            padding-left: 18px;
        }

        .list li {
            margin-bottom: 8px;
        }

        .role-box {
            padding: 15px 18px;
            border-radius: 8px;
            margin-bottom: 15px;
            background: #f9fafb;
            border-left: 5px solid #d1d5db;
        }

        .role-box.admin {
            border-color: #ef4444;
        }

        .role-box.teacher {
            border-color: #3b82f6;
        }

        .role-box.student {
            border-color: #10b981;
        }

        .checklist li::before {
            content: "✔";
            color: #16a34a;
            margin-right: 8px;
        }

        .closing {
            background: #f3f4f6;
            padding: 18px;
            border-radius: 10px;
        }
    </style>
</head>

<body>
    <div class="manual-container">
        <header>
            <div class="logo">
                <img src="{{asset('dashboard_assets/assets/images/logo/logo.png')}}" width="15%" alt="">
            </div>
            <h1>Manual Book Aplikasi</h1>
            <p class="subtitle">Panduan lengkap penggunaan aplikasi untuk pengguna</p>
            <div class="version">Versi 1.0 | Terakhir diperbarui: Januari 2026</div>
        </header>

        <div class="content-wrapper">
            <aside class="sidebar">
                <h3>Semua Pengguna</h3>
                <ul class="nav-list">
                    <li><a href="#pengenalan"><i class="fas fa-home"></i> Pengenalan</a></li>
                    <li><a href="#login"><i class="fas fa-sign-in-alt"></i> Login</a></li>
                    <li><a href="#lupa-password"><i class="fas fa-key"></i> Lupa Password</a></li>
                    <li><a href="#profile"><i class="fas fa-user-edit"></i> Update Profile</a></li>
                </ul>

                <h3>Halaman Admin</h3>
                <ul class="nav-list">
                    <li><a href="#dashboard"><i class="fas fa-chart-line"></i> Dashboard</a></li>
                    <li><a href="#manajemen-teacher"><i class="fas fa-chalkboard-teacher"></i> Teacher Management</a></li>
                    <li><a href="#manajemen-student"><i class="fas fa-users"></i> Student Management</a></li>
                    <li><a href="#verifikasi-student"><i class="fas fa-user-check"></i> Student Verification</a></li>
                    <li><a href="#exam-preparation"><i class="fas fa-clipboard-list"></i> Exam Preparation</a></li>
                    <li><a href="#exam-correction"><i class="fas fa-file-signature"></i> Request Correction</a></li>
                    <li><a href="#exam-history"><i class="fas fa-history"></i> Exam History</a></li>
                </ul>

                <h3>Halaman Teacher</h3>
                <ul class="nav-list">
                    <li><a href="#teacher-dashboard"><i class="fas fa-chart-line"></i> Dashboard</a></li>
                    <li><a href="#teacher-manajemen-student"><i class="fas fa-users"></i> Student Management</a></li>
                    <li><a href="#teacher-verifikasi-student"><i class="fas fa-user-check"></i> Student Verification</a></li>
                    <li><a href="#teacher-exam-preparation"><i class="fas fa-clipboard-list"></i> Exam Preparation</a></li>
                    <li><a href="#teacher-exam-correction"><i class="fas fa-file-signature"></i> Request Correction</a></li>
                    <li><a href="#teacher-exam-history"><i class="fas fa-history"></i> Exam History</a></li>
                </ul>

                <h3>Halaman Student</h3>
                <ul class="nav-list">
                    <li><a href="#student-dashboard-admin"><i class="fas fa-chart-line"></i> Dashboard</a></li>
                    <li><a href="#student-exam-preparation"><i class="fas fa-clipboard-list"></i> Exam Preparation</a></li>
                </ul>

                <div class="tip">
                    <p><i class="fas fa-lightbulb icon"></i> <strong>Tips:</strong> Gunakan CTRL+F untuk mencari istilah
                        tertentu di halaman ini.</p>
                </div>
            </aside>

            <main class="main-content">
                <section id="pengenalan" class="section">
                    <h2 class="section-title">
                        <i class="fas fa-home icon"></i> Pengenalan Aplikasi
                    </h2>

                    <div class="content-block">
                        <h3>1. Tentang Aplikasi</h3>
                        <p>
                            Aplikasi <b>CAT (Computer Assisted Test)</b> adalah sebuah sistem ujian berbasis komputer
                            yang dirancang untuk membantu proses evaluasi pembelajaran secara digital, efisien,
                            dan terukur.
                        </p>
                        <p>
                            Aplikasi ini memungkinkan pelaksanaan ujian secara online dengan pengelolaan soal,
                            peserta, serta hasil ujian yang terintegrasi dalam satu sistem.
                        </p>

                        <div class="note">
                            <strong>Catatan:</strong> Aplikasi ini memerlukan koneksi internet untuk sinkronisasi data.
                        </div>
                    </div>

                    <div class="content-block">
                        <h3>2. Tujuan Penggunaan Aplikasi</h3>
                        <ul class="list">
                            <li>Meningkatkan efisiensi pelaksanaan ujian tanpa menggunakan kertas</li>
                            <li>Meminimalkan kesalahan koreksi dan pengolahan nilai</li>
                            <li>Menyediakan hasil ujian secara cepat dan akurat</li>
                            <li>Mendukung transparansi dan objektivitas penilaian</li>
                            <li>Memberikan pengalaman ujian yang nyaman bagi peserta</li>
                        </ul>
                    </div>

                    <div class="content-block">
                        <h3>3. Ruang Lingkup Aplikasi</h3>
                        <ul class="list">
                            <li>Manajemen pengguna (Admin, Teacher, Student)</li>
                            <li>Pelaksanaan ujian berbasis waktu (timer otomatis)</li>
                            <li>Berbagai tipe soal (pilihan ganda, isian, matching, dsb.)</li>
                            <li>Penilaian otomatis dan konversi skor</li>
                            <li>Riwayat ujian dan laporan hasil</li>
                            <li>Dashboard statistik dan monitoring aktivitas</li>
                        </ul>
                    </div>

                    <div class="content-block">
                        <h3>4. Peran Pengguna dalam Aplikasi</h3>

                        <div class="role-box admin">
                            <h4>Admin</h4>
                            <ul class="list">
                                <li>Mengelola seluruh data sistem</li>
                                <li>Mengatur pengguna (teacher dan student)</li>
                                <li>Melakukan verifikasi akun</li>
                                <li>Melihat laporan dan statistik keseluruhan</li>
                            </ul>
                        </div>

                        <div class="role-box teacher">
                            <h4>Teacher</h4>
                            <ul class="list">
                                <li>Memantau hasil ujian siswa</li>
                                <li>Menerima atau menolak permintaan speaking mock test</li>
                                <li>Memberikan penilaian dan feedback</li>
                                <li>Melihat performa peserta</li>
                            </ul>
                        </div>

                        <div class="role-box student">
                            <h4>Student</h4>
                            <ul class="list">
                                <li>Mengikuti ujian yang tersedia</li>
                                <li>Melihat hasil dan riwayat ujian</li>
                                <li>Mengajukan speaking mock test</li>
                                <li>Mengikuti sesi video call</li>
                            </ul>
                        </div>
                    </div>

                    <div class="content-block">
                        <h3>5. Keunggulan Aplikasi CAT</h3>
                        <ul class="list checklist">
                            <li>Berbasis web dan multi-perangkat</li>
                            <li>Antarmuka sederhana dan responsif</li>
                            <li>Penilaian otomatis dan real-time</li>
                            <li>Keamanan data dan autentikasi pengguna</li>
                        </ul>
                    </div>

                    <div class="content-block">
                        <h3>6. Manfaat bagi Pengguna</h3>
                        <ul class="list">
                            <li><b>Institusi</b>: Proses ujian lebih terkontrol dan terdokumentasi</li>
                            <li><b>Pengajar</b>: Pengelolaan ujian dan evaluasi lebih mudah</li>
                            <li><b>Peserta</b>: Pengalaman ujian yang praktis dan transparan</li>
                        </ul>
                    </div>

                    <div class="content-block closing">
                        <h3>7. Penutup</h3>
                        <p>
                            Aplikasi CAT hadir sebagai solusi digital untuk pelaksanaan ujian yang modern,
                            efektif, dan terpercaya, serta mendukung transformasi digital di bidang pendidikan.
                        </p>
                    </div>
                </section>

                <section id="login" class="section">
                    <h2><i class="fas fa-sign-in-alt"></i> Login Admin</h2>
                    <p>Menu Login digunakan oleh semua pengguna untuk mengakses sistem aplikasi CAT sesuai dengan hak akses masing-masing.</p>

                    <h3>Alur Login</h3>
                    <ul class="list">
                        <li>Pengguna membuka halaman <a href="/login">login</a> aplikasi CAT.</li>
                        <li>Pengguna memasukkan email dan password yang telah terdaftar.</li>
                        <li>Pengguna menekan tombol Login.</li>
                        <li>Sistem akan melakukan validasi data.</li>
                        <li>Jika data valid, Pengguna diarahkan ke Dashboard Pengguna.</li>
                        <li>Jika data tidak valid, sistem akan menampilkan pesan kesalahan.</li>
                    </ul>

                    <div class="warning">
                        <p><strong>Catatan:</strong> Untuk Student wajib menggunakan akun yang telah diverifikasi oleh Pengguna atau Teacher.</p>
                    </div>
                </section>

                <section id="lupa-password" class="section">
                    <h2><i class="fas fa-key"></i> Lupa Password</h2>
                    <p>Menu Lupa Password digunakan apabila Pengguna lupa kata sandi akun.</p>

                    <h3>Alur Lupa Password</h3>
                    <ul class="list">
                        <li>Pengguna menekan menu <a href="/forgot-password">Lupa Password</a> pada halaman login.</li>
                        <li>Pengguna memasukkan alamat email terdaftar.</li>
                        <li>Sistem mengirimkan <b>OTP</b> atau <b>tautan reset password</b> ke email Pengguna.</li>
                        <li>Pengguna memasukkan OTP atau membuka tautan yang dikirimkan.</li>
                        <li>Pengguna membuat password baru.</li>
                        <li>Sistem menyimpan password baru dan menampilkan notifikasi berhasil.</li>
                        <li>User dapat kembali melakukan proses login</li>
                    </ul>

                    <div class="warning">
                        <p><strong>Catatan:</strong> OTP bersifat rahasia dan memiliki batas waktu dan gunakan password yang kuat dan tidak mudah ditebak.</p>
                    </div>
                </section>

                <section id="profile" class="section">
                    <h2><i class="fas fa-user-edit"></i> Ubah Profil Pengguna</h2>
                    <p>Menu Ubah Profil digunakan untuk memperbarui data pribadi Pengguna.</p>

                    <h3>Fitur yang Tersedia</h3>
                    <ul class="list">
                        <li>Mengubah nama</li>
                        <li>Mengganti foto profil</li>
                        <li>Mengubah password</li>
                    </ul>

                    <h3>Alur Ubah Profil</h3>
                    <ul class="list">
                        <li>
                            Pengguna membuka menu <b>Profil.</b> <br>
                            <img src="{{asset('own_assets\images\documentation\profile.png')}}" alt="" width="350px">
                        </li>
                        <li>Pengguna melakukan perubahan data yang diinginkan.</li>
                        <li>Pengguna menekan tombol Simpan / Update Profil.</li>
                        <li>Sistem menyimpan perubahan dan menampilkan notifikasi berhasil.</li>
                    </ul>
                    
                </section>

                <section id="dashboard" class="section">
                    <h2><i class="fas fa-chart-line"></i> Dashboard Admin</h2>
                    <p>Dashboard Admin menampilkan ringkasan informasi utama terkait aktivitas aplikasi CAT.</p>

                    <h3>Tujuan Dashboard</h3>
                    <ul class="list">
                        <li>Memberikan gambaran kondisi sistem secara keseluruhan</li>
                        <li>Memudahkan Admin dalam pengambilan keputusan</li>
                        <li>Monitoring aktivitas pengguna</li>
                    </ul>

                    <img src="{{asset('own_assets\images\documentation\dashboard.png')}}" alt="" width="100%">
                    
                </section>

                <section id="manajemen-teacher" class="section">
                    <h2><i class="fas fa-chalkboard-teacher"></i> Manajemen Teacher</h2>
                    <p>Menu Manajemen Teacher digunakan untuk mengelola data guru atau pengajar.</p>

                    <h3>Alur Manajemen Teacher</h3>
                    <ul class="list">
                        <li>Admin membuka menu Manajemen <a href="/teacher">Teacher.</a></li>
                        <li>Sistem menampilkan daftar teacher.</li>
                        <li>
                            Admin dapat:
                            <ul>
                                <li>Menambah teacher baru</li>
                                <li>Mengedit data teacher</li>
                                <li>Menonaktifkan akun teacher</li>
                            </ul>
                        </li>
                        <li>Perubahan disimpan dan dicatat oleh sistem.</li>
                    </ul>

                    <img src="{{asset('own_assets\images\documentation\teacher.png')}}" alt="" width="100%">
                    
                </section>

                <section id="manajemen-student" class="section">
                    <h2><i class="fas fa-users"></i> Student Management</h2>
                    <p>Menu Manajemen Student digunakan untuk mengelola seluruh data peserta ujian.</p>

                    <h3>Alur Manajemen Teacher</h3>
                    <ul class="list">
                        <li>Admin membuka menu Manajemen <a href="/students">Student</a>.</li>
                        <li>Sistem menampilkan daftar student.</li>
                        <li>Admin memilih student untuk melihat detail.</li>
                        <li>
                            Admin dapat:
                            <ul>
                                <li>Menambah student baru</li>
                                <li>Mengedit data student</li>
                                <li>Menonaktifkan akun student</li>
                            </ul>
                        </li>
                        <li>Admin dapat melakukan pengelolaan sesuai kebutuhan.</li>
                    </ul>

                    <img src="{{asset('own_assets\images\documentation\student.png')}}" alt="" width="100%">
                    
                </section>

                <section id="verifikasi-student" class="section">
                    <h2><i class="fas fa-user-check"></i> Student Verification</h2>
                    <p>Menu ini digunakan untuk memverifikasi akun student yang baru mendaftar.</p>

                    <h3>Alur Verifikasi Student</h3>
                    <ul class="list">
                        <li>Admin membuka menu Verifikasi Student.</li>
                        <li>Sistem menampilkan daftar student yang belum diverifikasi.</li>
                        <li>
                            Admin dapat:
                            <ul>
                                <li>Menerima (verifikasi)</li>
                                <li>Menolak pendaftaran (opsional)</li>
                            </ul>
                        </li>
                        <li>Jika diverifikasi, akun student menjadi aktif dan dapat mengikuti ujian.</li>
                    </ul>

                    <img src="{{asset('own_assets\images\documentation\verification.png')}}" alt="" width="100%">

                    <div class="warning">
                        <p><strong>Catatan:</strong> Verifikasi bertujuan menjaga kualitas dan validitas peserta.</p>
                    </div>
                    
                </section>

                <section id="exam-preparation" class="section">
                    <h2><i class="fas fa-clipboard-list"></i> Exam Preparation</h2>
                    <p>Menu ini memungkinkan Admin untuk mencoba atau mensimulasikan ujian.</p>

                    <h3>Tujuan</h3>
                    <ul class="list">
                        <li>Mengecek alur ujian</li>
                        <li>Memastikan soal dan sistem berjalan normal</li>
                    </ul>

                    <h3>Alur Mencoba Test</h3>
                    <ul class="list">
                        <li>
                            Admin memilih salah satu sub menu pada Exam Preparation (IELTS, TOEFL, GE atau SAT). <br>
                            <img src="{{asset('own_assets\images\documentation\preparation.png')}}" alt="" width="100%">
                        </li>

                        <li>Admin memilih salah satu set soal.</li>
                        <li>Admin memilih kategori dan jenis test (mock / practice).</li>
                        <li>Sistem menjalankan ujian seperti student.</li>
                        <li>Hasil ujian ditampilkan setelah selesai.</li>
                    </ul>
                </section>

                <section id="exam-correction" class="section">
                    <h2><i class="fas fa-file-signature"></i> Request Correction</h2>
                    <p>Menu ini digunakan untuk melihat permintaan student yang membutuhkan koreksi manual oleh teacher.</p>

                    <h3>Jenis Request</h3>
                    <ul class="list">
                        <li>Upload video speaking</li>
                        <li>Upload writing untuk dikoreksi</li>
                        <li>Permintaan video call speaking mock test</li>
                    </ul>

                    <h3>Alur Pengelolaan Request</h3>
                    <ul class="list">
                        <li>Student mengirim request koreksi.</li>
                        <li>Admin memilih salah satu tipe test di menu Request Correction.</li>
                        <li>Sistem menampilkan daftar permintaan.</li>
                    </ul>

                    <div class="warning">
                        <p><strong>Catatan:</strong> Hanya pengguna dengan role Teacher yang dapat melakukan penilaian</p>
                    </div>
                </section>

                <section id="exam-history" class="section">
                    <h2><i class="fas fa-history"></i> Exam History</h2>
                    <p>Menu Exam History berisi seluruh riwayat ujian yang pernah dilakukan.</p>

                    <h3>Informasi yang Ditampilkan</h3>
                    <ul class="list">
                        <li>Nama student</li>
                        <li>Set Soal</li>
                        <li>Jenis ujian (mock / practice)</li>
                        <li>Kategori (reading, listening, speaking, writing)</li>
                        <li>Skor dan konversi nilai</li>
                        <li>Tanggal dan waktu ujian</li>
                    </ul>

                    <h3>Alur Melihat Riwayat Ujian</h3>
                    <ul class="list">
                        <li>Admin membuka menu Exam History.</li>
                        <li>Admin memilih salah satu tipe test di menu Exam History</li>
                        <li>Sistem menampilkan daftar student.</li>
                        <li>Admin memilih salah satu student untuk melihat detail history test</li>
                        <li>Sistem menampilkan informasi history test dari student tersebut</li>
                    </ul>
                </section>

                <section id="teacher-dashboard" class="section">
                    <h2><i class="fas fa-chart-line"></i> Dashboard Teacher</h2>
                    <p>Dashboard Teacher menampilkan ringkasan informasi utama terkait aktivitas aplikasi CAT.</p>

                    <h3>Tujuan Dashboard</h3>
                    <ul class="list">
                        <li>Memberikan gambaran kondisi sistem secara keseluruhan</li>
                        <li>Monitoring aktivitas pengguna</li>
                    </ul>

                    <img src="{{asset('own_assets\images\documentation\dashboard.png')}}" alt="" width="100%">
                    
                </section>

                <section id="teacher-manajemen-student" class="section">
                    <h2><i class="fas fa-users"></i> Student Management</h2>
                    <p>Menu Manajemen Student digunakan untuk mengelola seluruh data peserta ujian.</p>

                    <h3>Alur Manajemen Teacher</h3>
                    <ul class="list">
                        <li>Teacher membuka menu Manajemen <a href="/students">Student</a>.</li>
                        <li>Sistem menampilkan daftar student.</li>
                        <li>Teacher memilih student untuk melihat detail.</li>
                        <li>
                            Teacher dapat:
                            <ul>
                                <li>Menambah student baru</li>
                                <li>Mengedit data student</li>
                                <li>Menonaktifkan akun student</li>
                            </ul>
                        </li>
                        <li>Teacher dapat melakukan pengelolaan sesuai kebutuhan.</li>
                    </ul>

                    <img src="{{asset('own_assets\images\documentation\student.png')}}" alt="" width="100%">
                    
                </section>

                <section id="teacher-verifikasi-student" class="section">
                    <h2><i class="fas fa-user-check"></i> Student Verification</h2>
                    <p>Menu ini digunakan untuk memverifikasi akun student yang baru mendaftar.</p>

                    <h3>Alur Verifikasi Student</h3>
                    <ul class="list">
                        <li>Teacher membuka menu Verifikasi Student.</li>
                        <li>Sistem menampilkan daftar student yang belum diverifikasi.</li>
                        <li>
                            Teacher dapat:
                            <ul>
                                <li>Menerima (verifikasi)</li>
                                <li>Menolak pendaftaran (opsional)</li>
                            </ul>
                        </li>
                        <li>Jika diverifikasi, akun student menjadi aktif dan dapat mengikuti ujian.</li>
                    </ul>

                    <img src="{{asset('own_assets\images\documentation\verification.png')}}" alt="" width="100%">

                    <div class="warning">
                        <p><strong>Catatan:</strong> Verifikasi bertujuan menjaga kualitas dan validitas peserta.</p>
                    </div>
                    
                </section>

                <section id="teacher-exam-preparation" class="section">
                    <h2><i class="fas fa-clipboard-list"></i> Exam Preparation</h2>
                    <p>Menu ini memungkinkan Teacher untuk mencoba atau mensimulasikan ujian.</p>

                    <h3>Tujuan</h3>
                    <ul class="list">
                        <li>Mengecek alur ujian</li>
                        <li>Memastikan soal dan sistem berjalan normal</li>
                    </ul>

                    <h3>Alur Mencoba Test</h3>
                    <ul class="list">
                        <li>
                            Teacher memilih salah satu sub menu pada Exam Preparation (IELTS, TOEFL, GE atau SAT). <br>
                            <img src="{{asset('own_assets\images\documentation\preparation.png')}}" alt="" width="100%">
                        </li>

                        <li>Teacher memilih salah satu set soal.</li>
                        <li>Teacher memilih kategori dan jenis test (mock / practice).</li>
                        <li>Sistem menjalankan ujian seperti student.</li>
                        <li>Hasil ujian ditampilkan setelah selesai.</li>
                    </ul>
                </section>

                <section id="teacher-exam-correction" class="section">
                    <h2><i class="fas fa-file-signature"></i> Request Correction</h2>
                    <p>Menu ini digunakan untuk melihat permintaan student yang membutuhkan koreksi manual oleh teacher.</p>

                    <h3>Jenis Request</h3>
                    <ul class="list">
                        <li>Upload video speaking</li>
                        <li>Upload writing untuk dikoreksi</li>
                        <li>Permintaan video call speaking mock test</li>
                    </ul>

                    <h3>Alur Pengelolaan Request</h3>
                    <ul class="list">
                        <li>Student mengirim request koreksi.</li>
                        <li>Teacher memilih salah satu tipe test di menu Request Correction.</li>
                        <li>Sistem menampilkan daftar permintaan.</li>
                    </ul>

                    <div class="warning">
                        <p><strong>Catatan:</strong> Hanya pengguna dengan role Teacher yang dapat melakukan penilaian</p>
                    </div>
                </section>

                <section id="teacher-exam-history" class="section">
                    <h2><i class="fas fa-history"></i> Exam History</h2>
                    <p>Menu Exam History berisi seluruh riwayat ujian yang pernah dilakukan.</p>

                    <h3>Informasi yang Ditampilkan</h3>
                    <ul class="list">
                        <li>Nama student</li>
                        <li>Set Soal</li>
                        <li>Jenis ujian (mock / practice)</li>
                        <li>Kategori (reading, listening, speaking, writing)</li>
                        <li>Skor dan konversi nilai</li>
                        <li>Tanggal dan waktu ujian</li>
                    </ul>

                    <h3>Alur Melihat Riwayat Ujian</h3>
                    <ul class="list">
                        <li>Teacher membuka menu Exam History.</li>
                        <li>Teacher memilih salah satu tipe test di menu Exam History</li>
                        <li>Sistem menampilkan daftar student.</li>
                        <li>Teacher memilih salah satu student untuk melihat detail history test</li>
                        <li>Sistem menampilkan informasi history test dari student tersebut</li>
                    </ul>
                </section>

                <section id="student-dashboard" class="section">
                    <h2><i class="fas fa-chart-line"></i> Dashboard Student</h2>
                    <p>Dashboard Student menampilkan ringkasan informasi utama terkait aktivitas student terhadap aplikasi.</p>

                    <h3>Tujuan Dashboard</h3>
                    <ul class="list">
                        <li>Memberikan gambaran statistik dari aktifitas student</li>
                        <li>Monitoring aktivitas pengguna</li>
                    </ul>

                    <img src="{{asset('own_assets\images\documentation\dashboard.png')}}" alt="" width="100%">
                    
                </section>

                <section id="student-exam-preparation" class="section">
                    <h2><i class="fas fa-clipboard-list"></i> Exam Preparation</h2>
                    <p>
                        Menu <b>Exam Preparation</b> digunakan oleh Student untuk mengikuti ujian latihan (Practice) 
                        maupun ujian simulasi (Mock Test) sebelum menghadapi ujian sesungguhnya.
                    </p>

                    <h3>Tujuan</h3>
                    <ul class="list">
                        <li>Membiasakan diri dengan sistem ujian berbasis CAT</li>
                        <li>Melatih manajemen waktu saat ujian</li>
                        <li>Mengukur kemampuan sebelum ujian resmi</li>
                        <li>Mengetahui format dan tipe soal yang akan dihadapi</li>
                    </ul>

                    <h3>Alur Mengikuti Test</h3>
                    <ul class="list">
                        <li>
                            Student memilih salah satu sub menu pada Exam Preparation 
                            (IELTS, TOEFL, GE, atau SAT). <br>
                            <img src="{{asset('own_assets\images\documentation\preparation.png')}}" alt="" width="100%">
                        </li>

                        <li>Student memilih salah satu set soal yang tersedia.</li>
                        <li>Student memilih kategori dan jenis test (Practice atau Mock Test).</li>
                        <li>Sistem menampilkan informasi ujian (durasi, jumlah soal, dan aturan).</li>
                        <li>Student memulai ujian dan mengerjakan soal sesuai waktu yang ditentukan.</li>
                        <li>Timer berjalan otomatis selama ujian berlangsung.</li>
                        <li>Setelah ujian selesai, hasil akan ditampilkan atau disimpan di riwayat ujian.</li>
                    </ul>

                    <h3>Catatan Penting</h3>
                    <ul class="list">
                        <li>Pastikan koneksi internet stabil sebelum memulai ujian</li>
                        <li>Ujian yang telah dimulai tidak dapat diulang kecuali diizinkan sistem</li>
                        <li>Gunakan waktu dengan bijak karena timer berjalan otomatis</li>
                    </ul>
                </section>

                <section id="troubleshooting" class="section">
                    <h2><i class="fas fa-wrench icon"></i> Troubleshooting</h2>
                    <p>
                        Bagian ini berisi solusi atas permasalahan umum yang mungkin terjadi saat menggunakan aplikasi 
                        <b>CAT (Computer Assisted Test)</b>.
                    </p>

                    <h3>Aplikasi Tidak Bisa Diakses</h3>
                    <p>
                        Jika aplikasi tidak dapat dibuka atau halaman tidak tampil dengan sempurna, lakukan langkah berikut:
                    </p>
                    <ul class="list">
                        <li>Periksa koneksi internet dan pastikan dalam kondisi stabil</li>
                        <li>Gunakan browser yang direkomendasikan (Google Chrome / Mozilla Firefox versi terbaru)</li>
                        <li>Lakukan refresh halaman atau logout lalu login kembali</li>
                        <li>Hapus cache dan cookies browser jika masalah berlanjut</li>
                    </ul>

                    <h3>Tidak Bisa Login atau Lupa Password</h3>
                    <p>
                        Apabila tidak dapat login ke sistem:
                    </p>
                    <ul class="list">
                        <li>Pastikan email dan password yang dimasukkan sudah benar</li>
                        <li>Gunakan menu <b>Lupa Password</b> untuk melakukan reset password</li>
                        <li>Periksa inbox atau folder spam pada email untuk email reset password atau OTP</li>
                    </ul>

                    <h3>OTP Tidak Masuk ke Email</h3>
                    <p>
                        Jika kode OTP tidak diterima:
                    </p>
                    <ul class="list">
                        <li>Periksa folder Spam atau Promotions pada email</li>
                        <li>Pastikan email yang digunakan aktif dan benar</li>
                        <li>Tunggu beberapa menit lalu minta kirim ulang OTP</li>
                        <li>Pastikan koneksi internet stabil saat proses pendaftaran</li>
                    </ul>

                    <h3>Ujian Tidak Bisa Dimulai</h3>
                    <p>
                        Jika ujian tidak dapat dijalankan:
                    </p>
                    <ul class="list">
                        <li>Pastikan ujian masih dalam jadwal aktif</li>
                        <li>Periksa apakah waktu ujian belum berakhir</li>
                        <li>Pastikan Anda belum pernah menyelesaikan ujian tersebut</li>
                        <li>Refresh halaman dan coba kembali</li>
                    </ul>

                    <h3>Timer Ujian Berjalan Tidak Normal</h3>
                    <p>
                        Timer ujian berjalan otomatis dan tidak dapat dijeda. Jika terjadi kendala:
                    </p>
                    <ul class="list">
                        <li>Jangan melakukan refresh halaman saat ujian berlangsung</li>
                        <li>Pastikan koneksi internet stabil selama ujian</li>
                        <li>Gunakan satu tab browser saja saat mengerjakan ujian</li>
                    </ul>

                    <h3>Hasil Ujian Tidak Muncul</h3>
                    <p>
                        Jika hasil ujian belum terlihat:
                    </p>
                    <ul class="list">
                        <li>Periksa menu <b>Exam History</b></li>
                        <li>Beberapa jenis ujian (Speaking / Writing / Video Upload) memerlukan proses koreksi manual</li>
                        <li>Hasil akan muncul setelah Teacher atau Admin menyelesaikan penilaian</li>
                    </ul>

                    <h3>Video Speaking / Upload Tidak Berhasil</h3>
                    <p>
                        Jika mengalami kendala saat upload video atau video call:
                    </p>
                    <ul class="list">
                        <li>Pastikan ukuran dan format video sesuai ketentuan</li>
                        <li>Izinkan akses kamera dan mikrofon pada browser</li>
                        <li>Pastikan koneksi internet stabil</li>
                        <li>Coba ulangi proses upload atau refresh halaman</li>
                    </ul>

                    <h3>Bantuan Lebih Lanjut</h3>
                    <p>
                        Jika permasalahan masih belum terselesaikan, silakan hubungi 
                        <b>Admin</b> atau <b>Tim Support</b> melalui menu bantuan atau kontak yang tersedia di aplikasi.
                    </p>
                </section>

                <section id="kontak" class="section">
                    <h2><i class="fas fa-envelope icon"></i> Kontak & Dukungan</h2>
                    <p>Kami siap membantu Anda! Hubungi kami melalui:</p>

                    <div class="step">
                        <div class="step-number"><i class="fas fa-globe"></i></div>
                        <div>
                            <h3>Situs Web</h3>
                            <p>www.pixelionsolution.com/contact-us</p>
                        </div>
                    </div>

                    <div class="step">
                        <div class="step-number"><i class="fas fa-envelope"></i></div>
                        <div>
                            <h3>Email</h3>
                            <p>support@pixelionsolution.com</p>
                        </div>
                    </div>
                </section>
            </main>
        </div>

        <footer>
            <p>&copy; 2025 Yanks and Brits Computer Assisted Test.</p>
        </footer>
    </div>

    <script>
        // Smooth scrolling untuk navigasi
        document.querySelectorAll('.nav-list a').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();

                const targetId = this.getAttribute('href');
                const targetElement = document.querySelector(targetId);

                window.scrollTo({
                    top: targetElement.offsetTop - 20,
                    behavior: 'smooth'
                });
            });
        });

        // Highlight section aktif saat scroll
        window.addEventListener('scroll', function () {
            const sections = document.querySelectorAll('.section');
            const navLinks = document.querySelectorAll('.nav-list a');

            let currentSection = '';

            sections.forEach(section => {
                const sectionTop = section.offsetTop - 100;
                const sectionHeight = section.clientHeight;

                if (window.scrollY >= sectionTop && window.scrollY < sectionTop + sectionHeight) {
                    currentSection = '#' + section.getAttribute('id');
                }
            });

            navLinks.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href') === currentSection) {
                    link.classList.add('active');
                    link.style.backgroundColor = '#4361ee';
                    link.style.color = 'white';
                } else {
                    link.style.backgroundColor = '';
                    link.style.color = '';
                }
            });
        });
    </script>
</body>

</html>