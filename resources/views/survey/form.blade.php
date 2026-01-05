<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Survey Layanan BBSPJIKKP</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f5f5f5;
            padding: 20px;
        }

        .survey-container {
            max-width: 900px;
            margin: 0 auto;
            background: white;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 40px;
        }

        .page-indicator {
            text-align: center;
            margin-bottom: 30px;
            padding-bottom: 20px;
            border-bottom: 2px solid #e0e0e0;
        }

        .page-indicator h2 {
            color: #1e3c72;
            font-size: 24px;
            margin-bottom: 10px;
        }

        .page-number {
            color: #666;
            font-size: 14px;
        }

        .page {
            display: none;
        }

        .page.active {
            display: block;
            animation: fadeIn 0.3s;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .question-group {
            margin-bottom: 30px;
        }

        .question-label {
            display: block;
            color: #333;
            font-weight: 600;
            margin-bottom: 15px;
            font-size: 15px;
            line-height: 1.6;
        }

        .required {
            color: #dc3545;
        }

        input[type="text"],
        input[type="email"],
        input[type="tel"],
        textarea,
        select {
            width: 100%;
            padding: 12px;
            border: 2px solid #e0e0e0;
            border-radius: 8px;
            font-size: 14px;
            font-family: inherit;
            transition: border-color 0.3s;
        }

        input:focus,
        textarea:focus,
        select:focus {
            outline: none;
            border-color: #1e3c72;
        }

        textarea {
            resize: vertical;
            min-height: 100px;
        }

        .checkbox-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 12px;
        }

        .checkbox-item {
            display: flex;
            align-items: center;
            padding: 12px;
            border: 2px solid #e0e0e0;
            border-radius: 8px;
            transition: all 0.3s;
            cursor: pointer;
        }

        .checkbox-item:hover {
            border-color: #1e3c72;
            background: #f8f9fa;
        }

        .checkbox-item input[type="checkbox"] {
            margin-right: 10px;
            width: 18px;
            height: 18px;
            cursor: pointer;
        }

        .radio-group {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .radio-item {
            display: flex;
            align-items: center;
            padding: 12px;
            border: 2px solid #e0e0e0;
            border-radius: 8px;
            transition: all 0.3s;
            cursor: pointer;
        }

        .radio-item:hover {
            border-color: #1e3c72;
            background: #f8f9fa;
        }

        .radio-item input[type="radio"] {
            margin-right: 10px;
            width: 18px;
            height: 18px;
            cursor: pointer;
        }

        .star-rating {
            display: flex;
            gap: 8px;
            font-size: 40px;
            direction: rtl;
            justify-content: flex-end;
        }

        .star-rating input {
            display: none;
        }

        .star-rating label {
            color: #ddd;
            cursor: pointer;
            transition: color 0.2s;
        }

        .star-rating label:hover,
        .star-rating label:hover~label,
        .star-rating input:checked~label {
            color: #ffc107;
        }

        .nps-container {
            margin: 20px 0;
        }

        .nps-slider {
            width: 100%;
            margin: 20px 0;
        }

        .nps-slider input[type="range"] {
            width: 100%;
            height: 10px;
            border-radius: 5px;
            background: linear-gradient(to right, #dc3545 0%, #ffc107 50%, #28a745 100%);
            outline: none;
            -webkit-appearance: none;
        }

        .nps-slider input[type="range"]::-webkit-slider-thumb {
            -webkit-appearance: none;
            appearance: none;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background: #1e3c72;
            cursor: pointer;
            border: 4px solid white;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.3);
        }

        .nps-slider input[type="range"]::-moz-range-thumb {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background: #1e3c72;
            cursor: pointer;
            border: 4px solid white;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.3);
        }

        .nps-labels {
            display: flex;
            justify-content: space-between;
            font-size: 13px;
            color: #666;
            margin-top: 10px;
        }

        .nps-value {
            text-align: center;
            font-size: 48px;
            font-weight: bold;
            color: #1e3c72;
            margin: 20px 0;
        }

        .button-group {
            display: flex;
            gap: 15px;
            margin-top: 40px;
            padding-top: 30px;
            border-top: 2px solid #e0e0e0;
        }

        .btn {
            flex: 1;
            padding: 15px 30px;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
        }

        .btn-prev {
            background: #6c757d;
            color: white;
        }

        .btn-prev:hover {
            background: #5a6268;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
        }

        .btn-next {
            background: #1e3c72;
            color: white;
        }

        .btn-next:hover {
            background: #2a5298;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(30, 60, 114, 0.4);
        }

        .btn-submit {
            background: #28a745;
            color: white;
        }

        .btn-submit:hover {
            background: #218838;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(40, 167, 69, 0.4);
        }

        .btn:disabled {
            opacity: 0.5;
            cursor: not-allowed;
        }

        .success-message {
            display: none;
            background: #d4edda;
            color: #155724;
            padding: 20px;
            border-radius: 8px;
            margin: 20px 0;
            text-align: center;
            font-size: 16px;
            border: 2px solid #c3e6cb;
        }

        .info-text {
            background: #e7f3ff;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 25px;
            color: #004085;
            font-size: 14px;
            border-left: 4px solid #1e3c72;
        }

        @media (max-width: 768px) {
            .survey-container {
                padding: 20px;
            }

            .checkbox-grid {
                grid-template-columns: 1fr;
            }

            .star-rating {
                font-size: 32px;
            }

            .button-group {
                flex-direction: column;
            }
        }
    </style>
</head>

<body>
    <div class="survey-container">
        <form id="surveyForm" action="{{ route('survey.store') }}" method="POST">
            @csrf
            <!-- PAGE 1: Data Responden -->
            <div class="page active" data-page="1">
                <div class="page-indicator">
                    <h2>Data Responden</h2>
                    <div class="page-number">Halaman 1 dari 4</div>
                </div>

                <div class="question-group">
                    <label class="question-label">Jenis Layanan yang Saudara Gunakan <span
                            class="required">*</span></label>
                    <div class="checkbox-grid">
                        <label class="checkbox-item">
                            <input type="checkbox" name="layanan" value="Pengujian">
                            Pengujian
                        </label>
                        <label class="checkbox-item">
                            <input type="checkbox" name="layanan" value="Kalibrasi">
                            Kalibrasi
                        </label>
                        <label class="checkbox-item">
                            <input type="checkbox" name="layanan" value="Sertifikasi">
                            Sertifikasi
                        </label>
                        <label class="checkbox-item">
                            <input type="checkbox" name="layanan" value="Sertifikasi Profesi">
                            Sertifikasi Profesi
                        </label>
                        <label class="checkbox-item">
                            <input type="checkbox" name="layanan" value="Konsultansi / Bimbingan Teknis">
                            Konsultansi / Bimbingan Teknis
                        </label>
                        <label class="checkbox-item">
                            <input type="checkbox" name="layanan" value="Pedampingan / Pelatihan">
                            Pedampingan / Pelatihan
                        </label>
                        <label class="checkbox-item">
                            <input type="checkbox" name="layanan" value="Validasi & Verifikasi GRK">
                            Validasi & Verifikasi GRK
                        </label>
                        <label class="checkbox-item">
                            <input type="checkbox" name="layanan" value="Verifikasi TKDN">
                            Verifikasi TKDN
                        </label>
                        <label class="checkbox-item">
                            <input type="checkbox" name="layanan" value="Inspeksi">
                            Inspeksi
                        </label>
                        <label class="checkbox-item">
                            <input type="checkbox" name="layanan" value="Uji Profisiensi">
                            Uji Profisiensi
                        </label>
                        <label class="checkbox-item">
                            <input type="checkbox" name="layanan" value="Audit Teknologi">
                            Audit Teknologi
                        </label>
                        <label class="checkbox-item">
                            <input type="checkbox" name="layanan" value="Miniplant Kulit, Karet, dan Plastik">
                            Miniplant Kulit, Karet, dan Plastik
                        </label>
                        <label class="checkbox-item">
                            <input type="checkbox" name="layanan" value="Pemeriksaan Halal">
                            Pemeriksaan Halal
                        </label>
                    </div>
                    <input type="text" name="layanan_lainnya" placeholder="Lainnya (sebutkan)"
                        style="margin-top: 12px;">
                </div>

                <div class="question-group">
                    <label class="question-label">Nama Lengkap <span class="required">*</span></label>
                    <input type="text" name="nama" required placeholder="Masukkan nama lengkap">
                </div>

                <div class="question-group">
                    <label class="question-label">Jenis Kelamin <span class="required">*</span></label>
                    <div class="radio-group">
                        <label class="radio-item">
                            <input type="radio" name="jenis_kelamin" value="Laki-laki" required>
                            Laki-laki
                        </label>
                        <label class="radio-item">
                            <input type="radio" name="jenis_kelamin" value="Perempuan">
                            Perempuan
                        </label>
                    </div>
                </div>

                <div class="question-group">
                    <label class="question-label">Nomor Whatsapp/Telepon <span class="required">*</span></label>
                    <input type="tel" name="telepon" required placeholder="08xxxxxxxxxx">
                </div>

                <div class="question-group">
                    <label class="question-label">Email <span class="required">*</span></label>
                    <input type="email" name="email" required placeholder="contoh@email.com">
                </div>

                <div class="question-group">
                    <label class="question-label">Pendidikan Terakhir Anda <span class="required">*</span></label>
                    <select name="pendidikan" required>
                        <option value="">Pilih pendidikan terakhir</option>
                        <option value="SD">SD</option>
                        <option value="SMP">SMP</option>
                        <option value="SMA/SMK">SMA/SMK</option>
                        <option value="D3">D3</option>
                        <option value="S1">S1</option>
                        <option value="S2">S2</option>
                        <option value="S3">S3</option>
                    </select>
                </div>

                <div class="question-group">
                    <label class="question-label">Nama Instansi / Perusahaan <span class="required">*</span></label>
                    <input type="text" name="instansi" required placeholder="Masukkan nama instansi/perusahaan">
                </div>

                <div class="question-group">
                    <label class="question-label">Pekerjaan Saat Ini <span class="required">*</span></label>
                    <input type="text" name="pekerjaan" required placeholder="Masukkan pekerjaan saat ini">
                </div>

                <div class="button-group">
                    <button type="button" class="btn btn-next" onclick="nextPage()">Selanjutnya</button>
                </div>
            </div>

            <!-- PAGE 2: Kepuasan Pelanggan -->
            <div class="page" data-page="2">
                <div class="page-indicator">
                    <h2>Kepuasan Pelanggan</h2>
                    <div class="page-number">Halaman 2 dari 4</div>
                </div>

                <div class="info-text">
                    Pilihan terdiri dari bintang 1 hingga bintang 4. Berikan bintang 4 jika memang pelayanan kami telah
                    sesuai dan memuaskan.
                </div>

                <div class="question-group">
                    <label class="question-label">Kesesuaian persyaratan pelayanan dengan jenis pelayanannya <span
                            class="required">*</span></label>
                    <div class="star-rating">
                        <input type="radio" name="kepuasan_1" id="k1_4" value="4" required>
                        <label for="k1_4">★</label>
                        <input type="radio" name="kepuasan_1" id="k1_3" value="3">
                        <label for="k1_3">★</label>
                        <input type="radio" name="kepuasan_1" id="k1_2" value="2">
                        <label for="k1_2">★</label>
                        <input type="radio" name="kepuasan_1" id="k1_1" value="1">
                        <label for="k1_1">★</label>
                    </div>
                </div>

                <div class="question-group">
                    <label class="question-label">Kemudahan prosedur pelayanan di Balai Besar Standardisasi dan
                        Pelayanan Jasa Industri Kulit, Karet dan Plastik <span class="required">*</span></label>
                    <div class="star-rating">
                        <input type="radio" name="kepuasan_2" id="k2_4" value="4" required>
                        <label for="k2_4">★</label>
                        <input type="radio" name="kepuasan_2" id="k2_3" value="3">
                        <label for="k2_3">★</label>
                        <input type="radio" name="kepuasan_2" id="k2_2" value="2">
                        <label for="k2_2">★</label>
                        <input type="radio" name="kepuasan_2" id="k2_1" value="1">
                        <label for="k2_1">★</label>
                    </div>
                </div>

                <div class="question-group">
                    <label class="question-label">Ketepatan waktu pelayanan di Balai Besar Standardisasi dan Pelayanan
                        Jasa Industri Kulit, Karet dan Plastik <span class="required">*</span></label>
                    <div class="star-rating">
                        <input type="radio" name="kepuasan_3" id="k3_4" value="4" required>
                        <label for="k3_4">★</label>
                        <input type="radio" name="kepuasan_3" id="k3_3" value="3">
                        <label for="k3_3">★</label>
                        <input type="radio" name="kepuasan_3" id="k3_2" value="2">
                        <label for="k3_2">★</label>
                        <input type="radio" name="kepuasan_3" id="k3_1" value="1">
                        <label for="k3_1">★</label>
                    </div>
                </div>

                <div class="question-group">
                    <label class="question-label">Kesesuaian antara biaya yang dibayarkan dengan biaya yang telah
                        ditetapkan <span class="required">*</span></label>
                    <div class="star-rating">
                        <input type="radio" name="kepuasan_4" id="k4_4" value="4" required>
                        <label for="k4_4">★</label>
                        <input type="radio" name="kepuasan_4" id="k4_3" value="3">
                        <label for="k4_3">★</label>
                        <input type="radio" name="kepuasan_4" id="k4_2" value="2">
                        <label for="k4_2">★</label>
                        <input type="radio" name="kepuasan_4" id="k4_1" value="1">
                        <label for="k4_1">★</label>
                    </div>
                </div>

                <div class="question-group">
                    <label class="question-label">Kesesuaian antara hasil pelayanan yang diberikan dengan ketentuan yang
                        telah ditetapkan/ permintaan awal pelanggan <span class="required">*</span></label>
                    <div class="star-rating">
                        <input type="radio" name="kepuasan_5" id="k5_4" value="4" required>
                        <label for="k5_4">★</label>
                        <input type="radio" name="kepuasan_5" id="k5_3" value="3">
                        <label for="k5_3">★</label>
                        <input type="radio" name="kepuasan_5" id="k5_2" value="2">
                        <label for="k5_2">★</label>
                        <input type="radio" name="kepuasan_5" id="k5_1" value="1">
                        <label for="k5_1">★</label>
                    </div>
                </div>

                <div class="question-group">
                    <label class="question-label">Kemampuan petugas dalam memberikan pelayanan <span
                            class="required">*</span></label>
                    <div class="star-rating">
                        <input type="radio" name="kepuasan_6" id="k6_4" value="4" required>
                        <label for="k6_4">★</label>
                        <input type="radio" name="kepuasan_6" id="k6_3" value="3">
                        <label for="k6_3">★</label>
                        <input type="radio" name="kepuasan_6" id="k6_2" value="2">
                        <label for="k6_2">★</label>
                        <input type="radio" name="kepuasan_6" id="k6_1" value="1">
                        <label for="k6_1">★</label>
                    </div>
                </div>

                <div class="question-group">
                    <label class="question-label">Sikap (kesopanan dan keramahan) petugas dalam memberikan pelayanan
                        <span class="required">*</span></label>
                    <div class="star-rating">
                        <input type="radio" name="kepuasan_7" id="k7_4" value="4" required>
                        <label for="k7_4">★</label>
                        <input type="radio" name="kepuasan_7" id="k7_3" value="3">
                        <label for="k7_3">★</label>
                        <input type="radio" name="kepuasan_7" id="k7_2" value="2">
                        <label for="k7_2">★</label>
                        <input type="radio" name="kepuasan_7" id="k7_1" value="1">
                        <label for="k7_1">★</label>
                    </div>
                </div>

                <div class="question-group">
                    <label class="question-label">Kualitas sarana dan prasarana <span class="required">*</span></label>
                    <div class="star-rating">
                        <input type="radio" name="kepuasan_8" id="k8_4" value="4" required>
                        <label for="k8_4">★</label>
                        <input type="radio" name="kepuasan_8" id="k8_3" value="3">
                        <label for="k8_3">★</label>
                        <input type="radio" name="kepuasan_8" id="k8_2" value="2">
                        <label for="k8_2">★</label>
                        <input type="radio" name="kepuasan_8" id="k8_1" value="1">
                        <label for="k8_1">★</label>
                    </div>
                </div>

                <div class="question-group">
                    <label class="question-label">Penanganan terhadap pengaduan, saran dan masukan <span
                            class="required">*</span></label>
                    <div class="star-rating">
                        <input type="radio" name="kepuasan_9" id="k9_4" value="4" required>
                        <label for="k9_4">★</label>
                        <input type="radio" name="kepuasan_9" id="k9_3" value="3">
                        <label for="k9_3">★</label>
                        <input type="radio" name="kepuasan_9" id="k9_2" value="2">
                        <label for="k9_2">★</label>
                        <input type="radio" name="kepuasan_9" id="k9_1" value="1">
                        <label for="k9_1">★</label>
                    </div>
                </div>

                <div class="question-group">
                    <label class="question-label">Saran / Masukan <span class="required">*</span></label>
                    <textarea name="saran" required placeholder="Tuliskan saran atau masukan Anda..."></textarea>
                </div>

                <div class="question-group">
                    <label class="question-label">Jasa Industri apa yang dibutuhkan Perusahaan Anda? <span
                            class="required">*</span></label>
                    <textarea name="jasa_dibutuhkan" required
                        placeholder="Tuliskan jasa industri yang dibutuhkan..."></textarea>
                </div>

                <div class="button-group">
                    <button type="button" class="btn btn-prev" onclick="prevPage()">Sebelumnya</button>
                    <button type="button" class="btn btn-next" onclick="nextPage()">Selanjutnya</button>
                </div>
            </div>

            <!-- PAGE 3: Persepsi Korupsi -->
            <div class="page" data-page="3">
                <div class="page-indicator">
                    <h2>Persepsi Korupsi</h2>
                    <div class="page-number">Halaman 3 dari 4</div>
                </div>

                <div class="info-text">
                    Pilihan terdiri dari bintang 1 hingga bintang 4. Berikan bintang 4 jika Saudara Sangat Setuju dengan
                    pernyataan terkait indikasi praktik korupsi pada pelayanan kami.
                </div>

                <div class="question-group">
                    <label class="question-label">Tidak terdapat praktek-praktek Kolusi, Korupsi dan Nepotisme (KKN)
                        dalam pelayanan di BBSPJIKKP <span class="required">*</span></label>
                    <div class="star-rating">
                        <input type="radio" name="korupsi_1" id="p1_4" value="4" required>
                        <label for="p1_4">★</label>
                        <input type="radio" name="korupsi_1" id="p1_3" value="3">
                        <label for="p1_3">★</label>
                        <input type="radio" name="korupsi_1" id="p1_2" value="2">
                        <label for="p1_2">★</label>
                        <input type="radio" name="korupsi_1" id="p1_1" value="1">
                        <label for="p1_1">★</label>
                    </div>
                </div>

                <div class="question-group">
                    <label class="question-label">Saya tidak pernah memberikan tanda terima kasih atas pelayanan yang
                        telah diselesaikan (meskipun tidak diminta), dalam bentuk barang ataupun uang <span
                            class="required">*</span></label>
                    <div class="star-rating">
                        <input type="radio" name="korupsi_2" id="p2_4" value="4" required>
                        <label for="p2_4">★</label>
                        <input type="radio" name="korupsi_2" id="p2_3" value="3">
                        <label for="p2_3">★</label>
                        <input type="radio" name="korupsi_2" id="p2_2" value="2">
                        <label for="p2_2">★</label>
                        <input type="radio" name="korupsi_2" id="p2_1" value="1">
                        <label for="p2_1">★</label>
                    </div>
                </div>

                <div class="question-group">
                    <label class="question-label">Tidak terdapat oknum-oknum petugas yang melakukan praktek Korupsi di
                        BBSPJIKKP <span class="required">*</span></label>
                    <div class="star-rating">
                        <input type="radio" name="korupsi_3" id="p3_4" value="4" required>
                        <label for="p3_4">★</label>
                        <input type="radio" name="korupsi_3" id="p3_3" value="3">
                        <label for="p3_3">★</label>
                        <input type="radio" name="korupsi_3" id="p3_2" value="2">
                        <label for="p3_2">★</label>
                        <input type="radio" name="korupsi_3" id="p3_1" value="1">
                        <label for="p3_1">★</label>
                    </div>
                </div>

                <div class="question-group">
                    <label class="question-label">Saya tidak pernah ditawari untuk memperoleh pelayanan yang lebih cepat
                        dan mudah dengan meminta imbalan tertentu <span class="required">*</span></label>
                    <div class="star-rating">
                        <input type="radio" name="korupsi_4" id="p4_4" value="4" required>
                        <label for="p4_4">★</label>
                        <input type="radio" name="korupsi_4" id="p4_3" value="3">
                        <label for="p4_3">★</label>
                        <input type="radio" name="korupsi_4" id="p4_2" value="2">
                        <label for="p4_2">★</label>
                        <input type="radio" name="korupsi_4" id="p4_1" value="1">
                        <label for="p4_1">★</label>
                    </div>
                </div>

                <div class="question-group">
                    <label class="question-label">Saya tidak pernah dipersulit oleh petugas (walaupun persyaratan
                        layanan lengkap) untuk mendapatkan layanan dan tidak terindikasi dugaan petugas tersebut
                        menghendaki imbalan (uang atau barang) tertentu <span class="required">*</span></label>
                    <div class="star-rating">
                        <input type="radio" name="korupsi_5" id="p5_4" value="4" required>
                        <label for="p5_4">★</label>
                        <input type="radio" name="korupsi_5" id="p5_3" value="3">
                        <label for="p5_3">★</label>
                        <input type="radio" name="korupsi_5" id="p5_2" value="2">
                        <label for="p5_2">★</label>
                        <input type="radio" name="korupsi_5" id="p5_1" value="1">
                        <label for="p5_1">★</label>
                    </div>
                </div>

                <div class="question-group">
                    <label class="question-label">Saya tidak pernah dihubungi oleh seseorang (yang mengatasnamakan
                        BBSPJIKKP) untuk mendapatkan layanan tanpa melalui jalur atau prosedur resmi yang ditetapkan
                        <span class="required">*</span></label>
                    <div class="star-rating">
                        <input type="radio" name="korupsi_6" id="p6_4" value="4" required>
                        <label for="p6_4">★</label>
                        <input type="radio" name="korupsi_6" id="p6_3" value="3">
                        <label for="p6_3">★</label>
                        <input type="radio" name="korupsi_6" id="p6_2" value="2">
                        <label for="p6_2">★</label>
                        <input type="radio" name="korupsi_6" id="p6_1" value="1">
                        <label for="p6_1">★</label>
                    </div>
                </div>

                <div class="question-group">
                    <label class="question-label">Petugas selalu memberikan bukti/kwitansi yang sah setelah proses
                        pembayaran dilakukan <span class="required">*</span></label>
                    <div class="star-rating">
                        <input type="radio" name="korupsi_7" id="p7_4" value="4" required>
                        <label for="p7_4">★</label>
                        <input type="radio" name="korupsi_7" id="p7_3" value="3">
                        <label for="p7_3">★</label>
                        <input type="radio" name="korupsi_7" id="p7_2" value="2">
                        <label for="p7_2">★</label>
                        <input type="radio" name="korupsi_7" id="p7_1" value="1">
                        <label for="p7_1">★</label>
                    </div>
                </div>

                <div class="question-group">
                    <label class="question-label">Jumlah rupiah transaksi yang tertera dalam dokumen pembayaran dan
                        jumlah yang saya bayarkan ke petugas selalu sama/sesuai <span class="required">*</span></label>
                    <div class="star-rating">
                        <input type="radio" name="korupsi_8" id="p8_4" value="4" required>
                        <label for="p8_4">★</label>
                        <input type="radio" name="korupsi_8" id="p8_3" value="3">
                        <label for="p8_3">★</label>
                        <input type="radio" name="korupsi_8" id="p8_2" value="2">
                        <label for="p8_2">★</label>
                        <input type="radio" name="korupsi_8" id="p8_1" value="1">
                        <label for="p8_1">★</label>
                    </div>
                </div>

                <div class="question-group">
                    <label class="question-label">Tidak ada upaya petugas menutup-nutupi informasi terkait rincian
                        keuangan/tagihan pembayaran atas layanan yang telah/sedang diberikan <span
                            class="required">*</span></label>
                    <div class="star-rating">
                        <input type="radio" name="korupsi_9" id="p9_4" value="4" required>
                        <label for="p9_4">★</label>
                        <input type="radio" name="korupsi_9" id="p9_3" value="3">
                        <label for="p9_3">★</label>
                        <input type="radio" name="korupsi_9" id="p9_2" value="2">
                        <label for="p9_2">★</label>
                        <input type="radio" name="korupsi_9" id="p9_1" value="1">
                        <label for="p9_1">★</label>
                    </div>
                </div>

                <div class="question-group">
                    <label class="question-label">Tidak ada upaya petugas menutup-nutupi informasi terkait tarif layanan
                        melalui Badan Layanan Umum (BLU) pada saat akan menggunakan layanan <span
                            class="required">*</span></label>
                    <div class="star-rating">
                        <input type="radio" name="korupsi_10" id="p10_4" value="4" required>
                        <label for="p10_4">★</label>
                        <input type="radio" name="korupsi_10" id="p10_3" value="3">
                        <label for="p10_3">★</label>
                        <input type="radio" name="korupsi_10" id="p10_2" value="2">
                        <label for="p10_2">★</label>
                        <input type="radio" name="korupsi_10" id="p10_1" value="1">
                        <label for="p10_1">★</label>
                    </div>
                </div>

                <div class="button-group">
                    <button type="button" class="btn btn-prev" onclick="prevPage()">Sebelumnya</button>
                    <button type="button" class="btn btn-next" onclick="nextPage()">Selanjutnya</button>
                </div>
            </div>

            <!-- PAGE 4: Net Promoter Score -->
            <div class="page" data-page="4">
                <div class="page-indicator">
                    <h2>Net Promoter Score (NPS)</h2>
                    <div class="page-number">Halaman 4 dari 4</div>
                </div>

                <div class="question-group">
                    <label class="question-label">Darimana Saudara mengenal dan mendapatkan Informasi mengenai Layanan
                        BBSPJIKKP? <span class="required">*</span></label>
                    <div class="checkbox-grid">
                        <label class="checkbox-item">
                            <input type="checkbox" name="info_sumber" value="Petugas Pelayanan">
                            Petugas Pelayanan
                        </label>
                        <label class="checkbox-item">
                            <input type="checkbox" name="info_sumber" value="Website">
                            Website
                        </label>
                        <label class="checkbox-item">
                            <input type="checkbox" name="info_sumber" value="Media Sosial">
                            Media Sosial
                        </label>
                        <label class="checkbox-item">
                            <input type="checkbox" name="info_sumber" value="Media Massa / Cetak">
                            Media Massa / Cetak
                        </label>
                        <label class="checkbox-item">
                            <input type="checkbox" name="info_sumber" value="Pameran">
                            Pameran
                        </label>
                        <label class="checkbox-item">
                            <input type="checkbox" name="info_sumber" value="Rekan Bisnis">
                            Rekan Bisnis
                        </label>
                        <label class="checkbox-item">
                            <input type="checkbox" name="info_sumber" value="Kerabat">
                            Kerabat
                        </label>
                    </div>
                    <input type="text" name="info_sumber_lainnya" placeholder="Lainnya (sebutkan)"
                        style="margin-top: 12px;">
                </div>

                <div class="question-group">
                    <label class="question-label">Sudah berapa tahun anda menggunakan jasa layanan industri di
                        BBSPJIKKP? <span class="required">*</span></label>
                    <div class="radio-group">
                        <label class="radio-item">
                            <input type="radio" name="lama_penggunaan" value="1 tahun" required>
                            1 tahun
                        </label>
                        <label class="radio-item">
                            <input type="radio" name="lama_penggunaan" value="2 tahun">
                            2 tahun
                        </label>
                        <label class="radio-item">
                            <input type="radio" name="lama_penggunaan" value="3 tahun">
                            3 tahun
                        </label>
                        <label class="radio-item">
                            <input type="radio" name="lama_penggunaan" value="> 4 tahun">
                            &gt; 4 tahun
                        </label>
                    </div>
                </div>

                <div class="question-group">
                    <label class="question-label">Pada skala 0 hingga 10, seberapa besar kemungkinan Anda
                        merekomendasikan kami kepada teman atau kolega? <span class="required">*</span></label>
                    <div class="nps-container">
                        <div class="nps-value" id="npsValue">5</div>
                        <div class="nps-slider">
                            <input type="range" name="nps_score" id="npsSlider" min="0" max="10" value="5" required>
                        </div>
                        <div class="nps-labels">
                            <span>0 (Sangat Tidak Mungkin)</span>
                            <span>10 (Sangat Mungkin)</span>
                        </div>
                    </div>
                </div>

                <div class="question-group">
                    <label class="question-label">Apa alasan utama Anda memberikan skor tersebut? <span
                            class="required">*</span></label>
                    <textarea name="nps_alasan" required placeholder="Tuliskan alasan Anda..."></textarea>
                </div>

                <div class="success-message" id="successMessage">
                    <strong>Terima kasih!</strong><br>
                    Survey Anda telah berhasil dikirim.
                </div>

                <div class="button-group">
                    <button type="button" class="btn btn-prev" onclick="prevPage()">Sebelumnya</button>
                    <button type="submit" class="btn btn-submit">Kirim Survey</button>
                </div>
            </div>
        </form>
    </div>

    <script>
        let currentPage = 1;
        const totalPages = 4;

        // NPS Slider functionality
        const npsSlider = document.getElementById('npsSlider');
        const npsValue = document.getElementById('npsValue');

        if (npsSlider) {
            npsSlider.addEventListener('input', function () {
                npsValue.textContent = this.value;
            });
        }

        function showPage(pageNum) {
            const pages = document.querySelectorAll('.page');
            pages.forEach(page => page.classList.remove('active'));

            const targetPage = document.querySelector(`.page[data-page="${pageNum}"]`);
            if (targetPage) {
                targetPage.classList.add('active');
                window.scrollTo({ top: 0, behavior: 'smooth' });
            }
        }

        function validatePage(pageNum) {
            const currentPageElement = document.querySelector(`.page[data-page="${pageNum}"]`);
            const requiredInputs = currentPageElement.querySelectorAll('[required]');

            for (let input of requiredInputs) {
                if (input.type === 'checkbox') {
                    const checkboxGroup = currentPageElement.querySelectorAll(`[name="${input.name}"]`);
                    const isChecked = Array.from(checkboxGroup).some(cb => cb.checked);
                    if (!isChecked && input.hasAttribute('required')) {
                        alert('Mohon lengkapi semua field yang wajib diisi (*)');
                        return false;
                    }
                } else if (input.type === 'radio') {
                    const radioGroup = currentPageElement.querySelectorAll(`[name="${input.name}"]`);
                    const isChecked = Array.from(radioGroup).some(radio => radio.checked);
                    if (!isChecked) {
                        alert('Mohon lengkapi semua field yang wajib diisi (*)');
                        return false;
                    }
                } else if (!input.value.trim()) {
                    alert('Mohon lengkapi semua field yang wajib diisi (*)');
                    input.focus();
                    return false;
                }
            }
            return true;
        }

        function nextPage() {
            if (validatePage(currentPage)) {
                if (currentPage < totalPages) {
                    currentPage++;
                    showPage(currentPage);
                }
            }
        }

        function prevPage() {
            if (currentPage > 1) {
                currentPage--;
                showPage(currentPage);
            }
        }


        // Form submission - YANG PENTING INI DIUBAH
        document.getElementById('surveyForm').addEventListener('submit', function (e) {
            e.preventDefault();

            if (validatePage(currentPage)) {
                const formData = new FormData(this);

                // Konversi checkbox layanan menjadi array
                const layanan = [];
                document.querySelectorAll('input[name="layanan"]:checked').forEach(cb => {
                    layanan.push(cb.value);
                });
                formData.delete('layanan');
                layanan.forEach(val => formData.append('layanan[]', val));

                // Konversi checkbox info_sumber menjadi array
                const infoSumber = [];
                document.querySelectorAll('input[name="info_sumber"]:checked').forEach(cb => {
                    infoSumber.push(cb.value);
                });
                formData.delete('info_sumber');
                infoSumber.forEach(val => formData.append('info_sumber[]', val));

                // Kirim ke Laravel
                fetch('{{ route("survey.store") }}', {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                        'Accept': 'application/json',
                    },
                    body: formData
                })
                    .then(response => {
                        if (!response.ok) {
                            return response.json().then(err => {
                                throw err;
                            });
                        }
                        return response.json();
                    })
                    .then(data => {
                        if (data.success) {
                            document.getElementById('successMessage').style.display = 'block';
                            document.getElementById('successMessage').scrollIntoView({ behavior: 'smooth' });

                            // Reset form setelah 3 detik
                            setTimeout(() => {
                                location.reload();
                            }, 3000);
                        } else {
                            let errorMsg = 'Terjadi kesalahan:\n\n';
                            if (data.message) {
                                errorMsg += data.message + '\n\n';
                            }
                            if (data.errors) {
                                errorMsg += 'Detail error:\n';
                                Object.keys(data.errors).forEach(key => {
                                    errorMsg += '- ' + data.errors[key].join('\n- ') + '\n';
                                });
                            }
                            alert(errorMsg);
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        let errorMsg = 'Terjadi kesalahan saat mengirim survey.\n\n';
                        if (error.message) {
                            errorMsg += 'Pesan: ' + error.message + '\n\n';
                        }
                        if (error.errors) {
                            errorMsg += 'Detail:\n';
                            Object.keys(error.errors).forEach(key => {
                                errorMsg += '- ' + error.errors[key].join('\n- ') + '\n';
                            });
                        }
                        alert(errorMsg);
                    });
            }
        });
    </script>




</body>

</html>