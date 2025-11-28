

<?php $__env->startSection('title', 'Layanan Kalibrasi - BBSPJIKP'); ?>
<?php $__env->startSection('description', 'Laboratorium Kalibrasi BBSPJIKKP yang terakreditasi KAN dengan nomor LK-085-IDN'); ?>

<?php $__env->startSection('content'); ?>
    <!-- Hero Section with Background -->
    <div class="relative bg-gray-900">
        <!-- Background Image with Overlay -->
        <div class="absolute inset-0">
            <img src="<?php echo e(asset('images/bg-random.webp')); ?>" alt="Header Background" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-black opacity-50"></div>
        </div>

        <!-- Content -->
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24">
            <!-- Breadcrumb -->
            <nav class="flex mb-8" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3">
                    <li class="inline-flex items-center">
                        <a href="<?php echo e(route('home')); ?>" class="text-gray-300 hover:text-white">
                            <i class="fas fa-home mr-2"></i>
                            <?php echo e(__('common.home')); ?>

                        </a>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <i class="fas fa-chevron-right text-gray-400 mx-2"></i>
                            <a href="<?php echo e(route('services.index')); ?>" class="text-gray-300 hover:text-white">
                                <?php echo e(__('common.services')); ?>

                            </a>
                        </div>
                    </li>
                    <li aria-current="page">
                        <div class="flex items-center">
                            <i class="fas fa-chevron-right text-gray-400 mx-2"></i>
                            <span class="text-gray-300"><?php echo e(__('common.calibration')); ?></span>
                        </div>
                    </li>
                </ol>
            </nav>

            <!-- Header Text -->
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold text-white mb-4"><?php echo e(__('kalibrasi.hero_title')); ?></h1>
                <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                    <?php echo e(__('kalibrasi.hero_subtitle')); ?>

                </p>
            </div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <!-- Section Deskripsi -->
        <section class="mb-16">
            <h2 class="text-3xl font-bold text-gray-900 mb-6"><?php echo e(__('kalibrasi.calibration')); ?></h2>
            <h3 class="text-2xl font-semibold text-gray-800 mb-4"><?php echo e(__('kalibrasi.calibration_lab')); ?></h3>

            <div class="prose max-w-none text-gray-700 space-y-4">
                <p>
                    <?php echo e(__('kalibrasi.intro_text_1')); ?>

                </p>
                <p>
                    <?php echo e(__('kalibrasi.intro_text_2')); ?>

                </p>
                <p>
                    <?php echo e(__('kalibrasi.intro_text_3')); ?>

                </p>
                <p>
                    <a href="https://drive.google.com/drive/folders/1WzkiIqyblkmRUpKo0z6VwFDgzeEQzTvN" target="_blank"
                        rel="noopener noreferrer" class="text-blue-600 hover:text-blue-800 font-semibold">
                        <?php echo e(__('kalibrasi.view_download_certificate')); ?>

                    </a>
                </p>
                <p class="text-lg font-semibold text-gray-800 mt-6">
                    <?php echo e(__('kalibrasi.our_motto')); ?> : <span class="text-blue-600"><?php echo e(__('kalibrasi.motto_text')); ?></span>
                </p>
            </div>
        </section>

        <!-- Section Layanan Kalibrasi dengan Tabs -->
        <section class="mb-16">
            <h2 class="text-3xl font-bold text-gray-900 mb-6"><?php echo e(__('kalibrasi.calibration_services')); ?></h2>

            <!-- Tabs Navigation -->
            <div class="border-b border-gray-200 mb-6">
                <nav class="flex space-x-8" aria-label="Tabs">
                    <button onclick="showTab('deskripsi')" id="tab-deskripsi"
                        class="tab-button border-b-2 border-blue-600 py-4 px-1 text-sm font-medium text-blue-600">
                        <?php echo e(__('kalibrasi.description')); ?>

                    </button>
                    <button onclick="showTab('permohonan')" id="tab-permohonan"
                        class="tab-button border-b-2 border-transparent py-4 px-1 text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300">
                        <?php echo e(__('kalibrasi.calibration_request')); ?>

                    </button>
                    <button onclick="showTab('data')" id="tab-data"
                        class="tab-button border-b-2 border-transparent py-4 px-1 text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300">
                        <?php echo e(__('kalibrasi.calibration_data')); ?>

                    </button>
                    <button onclick="showTab('sop')" id="tab-sop"
                        class="tab-button border-b-2 border-transparent py-4 px-1 text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300">
                        <?php echo e(__('kalibrasi.sop_calibration')); ?>

                    </button>
                    <button onclick="showTab('tarif')" id="tab-tarif"
                        class="tab-button border-b-2 border-transparent py-4 px-1 text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300">
                        <?php echo e(__('kalibrasi.calibration_rate')); ?>

                    </button>
                </nav>
            </div>

            <!-- Tab Content: Deskripsi -->
            <div id="content-deskripsi" class="tab-content">
                <div class="prose max-w-none text-gray-700">
                    <p>
                        <?php echo e(__('kalibrasi.calibration_services_desc')); ?>

                    </p>
                    <p>
                        <?php echo e(__('kalibrasi.accreditation_info')); ?>

                    </p>
                </div>
            </div>

            <!-- Tab Content: Permohonan Kalibrasi -->
            <div id="content-permohonan" class="tab-content hidden">
                <div class="bg-white border rounded-lg p-6 shadow-sm">
                    <h3 class="text-xl font-semibold text-gray-900 mb-4">Formulir Permohonan Kalibrasi</h3>
                    <p class="text-gray-700 mb-4">
                        Untuk mengajukan permohonan kalibrasi, silakan hubungi kami atau kunjungi laboratorium kami.
                        Formulir permohonan dapat diisi secara langsung di laboratorium atau melalui sistem informasi yang
                        tersedia.
                    </p>
                    <p class="text-gray-700">
                        Informasi lebih lanjut dapat menghubungi:
                    </p>
                    <ul class="list-disc pl-6 mt-2 text-gray-700">
                        <li>Telepon: (0274) 512929, 563939</li>
                        <li>Email: bbkkp_jogja@yahoo.com</li>
                        <li>Alamat: Jalan Sekonandi Nomor 9 Yogyakarta 55166</li>
                    </ul>
                </div>
            </div>

            <!-- Tab Content: Data Kalibrasi -->
            <div id="content-data" class="tab-content hidden">
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200 border border-gray-300">
                        <thead class="bg-gray-100">
                            <tr>
                                <th
                                    class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider border border-gray-300">
                                    NO</th>
                                <th
                                    class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider border border-gray-300">
                                    Nama Pemohon</th>
                                <th
                                    class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider border border-gray-300">
                                    Nama Alat</th>
                                <th
                                    class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider border border-gray-300">
                                    Jumlah</th>
                                <th
                                    class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider border border-gray-300">
                                    Besaran Kalibrasi</th>
                                <th
                                    class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider border border-gray-300">
                                    Uraian Penjelasan Kalibrasi Yang Dikehendaki</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <tr>
                                <td class="px-4 py-3 text-sm border border-gray-300 text-center font-medium">1</td>
                                <td class="px-4 py-3 text-sm border border-gray-300">prima mandiri estetika</td>
                                <td class="px-4 py-3 text-sm border border-gray-300">timbangan digital, manual rotasi dan
                                    timbangan centicimal</td>
                                <td class="px-4 py-3 text-sm border border-gray-300 text-center">6</td>
                                <td class="px-4 py-3 text-sm border border-gray-300">Massa</td>
                                <td class="px-4 py-3 text-sm border border-gray-300">massa sesuai dengan syarat yang di
                                    tentukan oleh masing-masing timbangan</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Tab Content: SOP Kalibrasi -->
            <div id="content-sop" class="tab-content hidden">
                <div class="bg-white border rounded-lg p-6 shadow-sm">
                    <h3 class="text-xl font-semibold text-gray-900 mb-4">SOP Layanan Jasa Kalibrasi</h3>
                    <p class="text-gray-700 mb-4">
                        Standar Operasional Prosedur (SOP) Layanan Jasa Kalibrasi mengatur proses dan prosedur pelaksanaan
                        kalibrasi di Laboratorium Kalibrasi BBSPJIKKP.
                    </p>
                    <a href="https://bbkkp.kemenperin.go.id/storage/files/page/SOP%20Layanan%20Jasa%20Pengujian.pdf"
                        target="_blank" rel="noopener noreferrer"
                        class="inline-block bg-green-600 hover:bg-green-700 text-white px-6 py-2 rounded-lg font-semibold transition">
                        <i class="fas fa-download mr-2"></i>Unduh SOP Kalibrasi
                    </a>
                </div>
            </div>

            <!-- Tab Content: Tarif Kalibrasi -->
            <div id="content-tarif" class="tab-content hidden">
                <div class="bg-white border rounded-lg p-6 shadow-sm">
                    <h3 class="text-xl font-semibold text-gray-900 mb-4">Tarif Kalibrasi</h3>
                    <p class="text-gray-700 mb-4">
                        Informasi lengkap mengenai tarif jasa layanan kalibrasi dapat diunduh melalui dokumen berikut:
                    </p>
                    <a href="https://bbkkp.kemenperin.go.id/storage/files/page/tarif/Kep.%2040%20Penetapan%20Tarif%20Jasa%20Layanan%20BLU%20BBSPJIKKP%202025%20Kalibrasi_1.pdf"
                        target="_blank" rel="noopener noreferrer"
                        class="inline-block bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-lg font-semibold transition">
                        <i class="fas fa-download mr-2"></i>Unduh Tarif Kalibrasi
                    </a>
                </div>
            </div>
        </section>

        <!-- Section Kemampuan Laboratorium Kalibrasi -->
        <section class="mb-16">
            <h2 class="text-3xl font-bold text-gray-900 mb-8"><?php echo e(__('kalibrasi.laboratory_capabilities')); ?></h2>

            <!-- 1. MASSA -->
            <div class="mb-12">
                <h3 class="text-2xl font-semibold text-gray-800 mb-4">1. <?php echo e(__('kalibrasi.mass')); ?></h3>
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200 border border-gray-300">
                        <thead class="bg-gray-100">
                            <tr>
                                <th
                                    class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider border border-gray-300">
                                    NO</th>
                                <th
                                    class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider border border-gray-300">
                                    NAMA ALAT</th>
                                <th
                                    class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider border border-gray-300">
                                    METODE</th>
                                <th
                                    class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider border border-gray-300">
                                    KEMAMPUAN</th>
                                <th
                                    class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider border border-gray-300">
                                    KETERANGAN</th>
                                <th
                                    class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider border border-gray-300">
                                    BIAYA (Rp)</th>
                                <th
                                    class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider border border-gray-300">
                                    KET BIAYA</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <tr>
                                <td class="px-4 py-3 text-sm border border-gray-300 text-center font-medium"
                                    rowspan="4">
                                    1</td>
                                <td class="px-4 py-3 text-sm border border-gray-300 font-medium" rowspan="4">Neraca
                                    mekanik / elektronik</td>
                                <td class="px-4 py-3 text-sm border border-gray-300" rowspan="4">NMI Australia,
                                    Monograph
                                    4: The Calibration of Weights and Balances (Mei 2010)</td>
                                <td class="px-4 py-3 text-sm border border-gray-300">s.d. 200 gram</td>
                                <td class="px-4 py-3 text-sm border border-gray-300">Resolusi s.d. 0,1 mg</td>
                                <td class="px-4 py-3 text-sm border border-gray-300 text-right">300.000</td>
                                <td class="px-4 py-3 text-sm border border-gray-300"></td>
                            </tr>
                            <tr>
                                <td class="px-4 py-3 text-sm border border-gray-300">s.d. 2000 gram</td>
                                <td class="px-4 py-3 text-sm border border-gray-300">Resolusi s.d. 10 mg</td>
                                <td class="px-4 py-3 text-sm border border-gray-300 text-right">300.000</td>
                                <td class="px-4 py-3 text-sm border border-gray-300"></td>
                            </tr>
                            <tr>
                                <td class="px-4 py-3 text-sm border border-gray-300">s.d 200 kg</td>
                                <td class="px-4 py-3 text-sm border border-gray-300"></td>
                                <td class="px-4 py-3 text-sm border border-gray-300 text-right">350.000</td>
                                <td class="px-4 py-3 text-sm border border-gray-300">Untuk 10 ~ 150 Kg</td>
                            </tr>
                            <tr>
                                <td class="px-4 py-3 text-sm border border-gray-300"></td>
                                <td class="px-4 py-3 text-sm border border-gray-300"></td>
                                <td class="px-4 py-3 text-sm border border-gray-300 text-right">500.000</td>
                                <td class="px-4 py-3 text-sm border border-gray-300">Untuk > 150 Kg</td>
                            </tr>
                            <tr class="bg-gray-50">
                                <td class="px-4 py-3 text-sm border border-gray-300 text-center font-medium">2</td>
                                <td class="px-4 py-3 text-sm border border-gray-300 font-medium">Anak Timbangan</td>
                                <td class="px-4 py-3 text-sm border border-gray-300">OIML R 111-1 (2004)</td>
                                <td class="px-4 py-3 text-sm border border-gray-300">0,001 gram ~ 2000 gram</td>
                                <td class="px-4 py-3 text-sm border border-gray-300">Anak timbangan kelas M</td>
                                <td class="px-4 py-3 text-sm border border-gray-300 text-right">120.000</td>
                                <td class="px-4 py-3 text-sm border border-gray-300">per pcs</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- 2. SUHU -->
            <div class="mb-12">
                <h3 class="text-2xl font-semibold text-gray-800 mb-4">2. <?php echo e(__('kalibrasi.temperature')); ?></h3>
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200 border border-gray-300">
                        <thead class="bg-gray-100">
                            <tr>
                                <th
                                    class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider border border-gray-300">
                                    NO</th>
                                <th
                                    class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider border border-gray-300">
                                    NAMA ALAT</th>
                                <th
                                    class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider border border-gray-300">
                                    METODE</th>
                                <th
                                    class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider border border-gray-300">
                                    KEMAMPUAN</th>
                                <th
                                    class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider border border-gray-300">
                                    KETERANGAN</th>
                                <th
                                    class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider border border-gray-300">
                                    BIAYA (Rp)</th>
                                <th
                                    class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider border border-gray-300">
                                    KET BIAYA</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <tr>
                                <td class="px-4 py-3 text-sm border border-gray-300 text-center font-medium">1</td>
                                <td class="px-4 py-3 text-sm border border-gray-300 font-medium">Termometer gelas</td>
                                <td class="px-4 py-3 text-sm border border-gray-300">SNSU PK.S-01:2020</td>
                                <td class="px-4 py-3 text-sm border border-gray-300">0 ~ 100 °C</td>
                                <td class="px-4 py-3 text-sm border border-gray-300">Resolusi s.d. 0,4 °C</td>
                                <td class="px-4 py-3 text-sm border border-gray-300 text-right">250.000</td>
                                <td class="px-4 py-3 text-sm border border-gray-300"></td>
                            </tr>
                            <tr class="bg-gray-50">
                                <td class="px-4 py-3 text-sm border border-gray-300 text-center font-medium"
                                    rowspan="2">2</td>
                                <td class="px-4 py-3 text-sm border border-gray-300 font-medium" rowspan="2">Termometer
                                    dial / digital</td>
                                <td class="px-4 py-3 text-sm border border-gray-300" rowspan="2">SNSU PK.S-02:2021</td>
                                <td class="px-4 py-3 text-sm border border-gray-300" rowspan="2">0 ~ 100 °C</td>
                                <td class="px-4 py-3 text-sm border border-gray-300">Resolusi s.d. 0,1 °C</td>
                                <td class="px-4 py-3 text-sm border border-gray-300 text-right">250.000</td>
                                <td class="px-4 py-3 text-sm border border-gray-300">Dial</td>
                            </tr>
                            <tr class="bg-gray-50">
                                <td class="px-4 py-3 text-sm border border-gray-300"></td>
                                <td class="px-4 py-3 text-sm border border-gray-300 text-right">450.000</td>
                                <td class="px-4 py-3 text-sm border border-gray-300">Digital</td>
                            </tr>
                            <tr>
                                <td class="px-4 py-3 text-sm border border-gray-300 text-center font-medium">3</td>
                                <td class="px-4 py-3 text-sm border border-gray-300 font-medium">COD reaktor / Termoreaktor
                                </td>
                                <td class="px-4 py-3 text-sm border border-gray-300">MK. IIId.S.LPK No. 7.4 revisi 2/2 (09
                                    September 2021)</td>
                                <td class="px-4 py-3 text-sm border border-gray-300">50 ~ 200 °C</td>
                                <td class="px-4 py-3 text-sm border border-gray-300">Resolusi s.d. 0,1 °C</td>
                                <td class="px-4 py-3 text-sm border border-gray-300 text-right">430.000</td>
                                <td class="px-4 py-3 text-sm border border-gray-300"></td>
                            </tr>
                            <tr class="bg-gray-50">
                                <td class="px-4 py-3 text-sm border border-gray-300 text-center font-medium">4</td>
                                <td class="px-4 py-3 text-sm border border-gray-300 font-medium">Hotplate / Rheometer /
                                    Mooney Viscometer / Plastimeter</td>
                                <td class="px-4 py-3 text-sm border border-gray-300">MK. IIId.S.LPK No. 7.5 revisi 2/2 (3
                                    Oktober 2022)</td>
                                <td class="px-4 py-3 text-sm border border-gray-300">50 ~ 250 °C</td>
                                <td class="px-4 py-3 text-sm border border-gray-300">Resolusi s.d. 0,1 °C</td>
                                <td class="px-4 py-3 text-sm border border-gray-300 text-right">350.000</td>
                                <td class="px-4 py-3 text-sm border border-gray-300"></td>
                            </tr>
                            <tr>
                                <td class="px-4 py-3 text-sm border border-gray-300 text-center font-medium">5</td>
                                <td class="px-4 py-3 text-sm border border-gray-300 font-medium">Freezer</td>
                                <td class="px-4 py-3 text-sm border border-gray-300">KAN Pd-02.04 Revisi: 0 (2019)</td>
                                <td class="px-4 py-3 text-sm border border-gray-300">-25 ~ 0 °C</td>
                                <td class="px-4 py-3 text-sm border border-gray-300">Resolusi s.d. 0,1 °C</td>
                                <td class="px-4 py-3 text-sm border border-gray-300 text-right">500.000</td>
                                <td class="px-4 py-3 text-sm border border-gray-300"></td>
                            </tr>
                            <tr class="bg-gray-50">
                                <td class="px-4 py-3 text-sm border border-gray-300 text-center font-medium">6</td>
                                <td class="px-4 py-3 text-sm border border-gray-300 font-medium">Refrigerator / Showcase /
                                    Almari sampel</td>
                                <td class="px-4 py-3 text-sm border border-gray-300">KAN Pd-02.04 Revisi: 0 (2019)</td>
                                <td class="px-4 py-3 text-sm border border-gray-300">-5 ~ 20 °C</td>
                                <td class="px-4 py-3 text-sm border border-gray-300">Resolusi s.d. 0,1 °C</td>
                                <td class="px-4 py-3 text-sm border border-gray-300 text-right">500.000</td>
                                <td class="px-4 py-3 text-sm border border-gray-300"></td>
                            </tr>
                            <tr>
                                <td class="px-4 py-3 text-sm border border-gray-300 text-center font-medium">7</td>
                                <td class="px-4 py-3 text-sm border border-gray-300 font-medium">Inkubator</td>
                                <td class="px-4 py-3 text-sm border border-gray-300">KAN Pd-02.04 Revisi: 0 (2019)</td>
                                <td class="px-4 py-3 text-sm border border-gray-300">0 ~ 100 °C</td>
                                <td class="px-4 py-3 text-sm border border-gray-300">Resolusi s.d. 0,1 °C</td>
                                <td class="px-4 py-3 text-sm border border-gray-300 text-right">500.000</td>
                                <td class="px-4 py-3 text-sm border border-gray-300"></td>
                            </tr>
                            <tr class="bg-gray-50">
                                <td class="px-4 py-3 text-sm border border-gray-300 text-center font-medium">8</td>
                                <td class="px-4 py-3 text-sm border border-gray-300 font-medium">Waterbath</td>
                                <td class="px-4 py-3 text-sm border border-gray-300">KAN Pd-02.04 Revisi: 0 (2019)</td>
                                <td class="px-4 py-3 text-sm border border-gray-300">0 ~ 100 °C</td>
                                <td class="px-4 py-3 text-sm border border-gray-300">Resolusi s.d. 0,1 °C</td>
                                <td class="px-4 py-3 text-sm border border-gray-300 text-right">600.000</td>
                                <td class="px-4 py-3 text-sm border border-gray-300"></td>
                            </tr>
                            <tr>
                                <td class="px-4 py-3 text-sm border border-gray-300 text-center font-medium">9</td>
                                <td class="px-4 py-3 text-sm border border-gray-300 font-medium">Oven</td>
                                <td class="px-4 py-3 text-sm border border-gray-300">KAN Pd-02.04 Revisi: 0 (2019)</td>
                                <td class="px-4 py-3 text-sm border border-gray-300">30 ~ 200 °C</td>
                                <td class="px-4 py-3 text-sm border border-gray-300">Resolusi s.d. 0,1 °C</td>
                                <td class="px-4 py-3 text-sm border border-gray-300 text-right">500.000</td>
                                <td class="px-4 py-3 text-sm border border-gray-300"></td>
                            </tr>
                            <tr class="bg-gray-50">
                                <td class="px-4 py-3 text-sm border border-gray-300 text-center font-medium">10</td>
                                <td class="px-4 py-3 text-sm border border-gray-300 font-medium">Muffle Furnace</td>
                                <td class="px-4 py-3 text-sm border border-gray-300">KAN Pd-02.04 Revisi: 0 (2019)
                                    (Modifikasi)</td>
                                <td class="px-4 py-3 text-sm border border-gray-300">30 ~ 700 °C</td>
                                <td class="px-4 py-3 text-sm border border-gray-300">Resolusi s.d. 0,1 °C</td>
                                <td class="px-4 py-3 text-sm border border-gray-300 text-right">650.000</td>
                                <td class="px-4 py-3 text-sm border border-gray-300"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- 3. PERALATAN VOLUMETRIK -->
            <div class="mb-12">
                <h3 class="text-2xl font-semibold text-gray-800 mb-4">3. <?php echo e(__('kalibrasi.volumetric_equipment')); ?></h3>
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200 border border-gray-300">
                        <thead class="bg-gray-100">
                            <tr>
                                <th
                                    class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider border border-gray-300">
                                    NO</th>
                                <th
                                    class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider border border-gray-300">
                                    NAMA ALAT</th>
                                <th
                                    class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider border border-gray-300">
                                    METODE</th>
                                <th
                                    class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider border border-gray-300">
                                    KEMAMPUAN</th>
                                <th
                                    class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider border border-gray-300">
                                    KETERANGAN</th>
                                <th
                                    class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider border border-gray-300">
                                    BIAYA (Rp)</th>
                                <th
                                    class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider border border-gray-300">
                                    KET BIAYA</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <tr>
                                <td class="px-4 py-3 text-sm border border-gray-300 text-center font-medium">1</td>
                                <td class="px-4 py-3 text-sm border border-gray-300 font-medium">Buret</td>
                                <td class="px-4 py-3 text-sm border border-gray-300">ASTM E 542 - 01 (2021)</td>
                                <td class="px-4 py-3 text-sm border border-gray-300">10 ml ~ 100 ml</td>
                                <td class="px-4 py-3 text-sm border border-gray-300"></td>
                                <td class="px-4 py-3 text-sm border border-gray-300 text-right">184.000</td>
                                <td class="px-4 py-3 text-sm border border-gray-300"></td>
                            </tr>
                            <tr class="bg-gray-50">
                                <td class="px-4 py-3 text-sm border border-gray-300 text-center font-medium"
                                    rowspan="2">2</td>
                                <td class="px-4 py-3 text-sm border border-gray-300 font-medium" rowspan="2">Gelas Ukur
                                </td>
                                <td class="px-4 py-3 text-sm border border-gray-300" rowspan="2"></td>
                                <td class="px-4 py-3 text-sm border border-gray-300" rowspan="2">10 ml ~ 1000 ml</td>
                                <td class="px-4 py-3 text-sm border border-gray-300"></td>
                                <td class="px-4 py-3 text-sm border border-gray-300 text-right">177.000</td>
                                <td class="px-4 py-3 text-sm border border-gray-300">Untuk ≥ 100 ml</td>
                            </tr>
                            <tr class="bg-gray-50">
                                <td class="px-4 py-3 text-sm border border-gray-300"></td>
                                <td class="px-4 py-3 text-sm border border-gray-300 text-right">156.000</td>
                                <td class="px-4 py-3 text-sm border border-gray-300">Untuk < 100 ml</td>
                            </tr>
                            <tr>
                                <td class="px-4 py-3 text-sm border border-gray-300 text-center font-medium">3</td>
                                <td class="px-4 py-3 text-sm border border-gray-300 font-medium">Labu Ukur</td>
                                <td class="px-4 py-3 text-sm border border-gray-300"></td>
                                <td class="px-4 py-3 text-sm border border-gray-300">5 ml ~ 1000 ml</td>
                                <td class="px-4 py-3 text-sm border border-gray-300"></td>
                                <td class="px-4 py-3 text-sm border border-gray-300 text-right">150.000</td>
                                <td class="px-4 py-3 text-sm border border-gray-300"></td>
                            </tr>
                            <tr class="bg-gray-50">
                                <td class="px-4 py-3 text-sm border border-gray-300 text-center font-medium">4</td>
                                <td class="px-4 py-3 text-sm border border-gray-300 font-medium">Pipet Ukur</td>
                                <td class="px-4 py-3 text-sm border border-gray-300"></td>
                                <td class="px-4 py-3 text-sm border border-gray-300">0,1 ml ~ 25 ml</td>
                                <td class="px-4 py-3 text-sm border border-gray-300"></td>
                                <td class="px-4 py-3 text-sm border border-gray-300 text-right">185.000</td>
                                <td class="px-4 py-3 text-sm border border-gray-300"></td>
                            </tr>
                            <tr>
                                <td class="px-4 py-3 text-sm border border-gray-300 text-center font-medium">5</td>
                                <td class="px-4 py-3 text-sm border border-gray-300 font-medium">Piknometer</td>
                                <td class="px-4 py-3 text-sm border border-gray-300"></td>
                                <td class="px-4 py-3 text-sm border border-gray-300">5 ml ~ 100 ml</td>
                                <td class="px-4 py-3 text-sm border border-gray-300"></td>
                                <td class="px-4 py-3 text-sm border border-gray-300 text-right">150.000</td>
                                <td class="px-4 py-3 text-sm border border-gray-300"></td>
                            </tr>
                            <tr class="bg-gray-50">
                                <td class="px-4 py-3 text-sm border border-gray-300 text-center font-medium">6</td>
                                <td class="px-4 py-3 text-sm border border-gray-300 font-medium">Pipet Volume</td>
                                <td class="px-4 py-3 text-sm border border-gray-300"></td>
                                <td class="px-4 py-3 text-sm border border-gray-300">1 ml ~ 100 ml</td>
                                <td class="px-4 py-3 text-sm border border-gray-300"></td>
                                <td class="px-4 py-3 text-sm border border-gray-300 text-right">167.000</td>
                                <td class="px-4 py-3 text-sm border border-gray-300"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- 4. GAYA -->
            <div class="mb-12">
                <h3 class="text-2xl font-semibold text-gray-800 mb-4">4. <?php echo e(__('kalibrasi.force')); ?></h3>
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200 border border-gray-300">
                        <thead class="bg-gray-100">
                            <tr>
                                <th
                                    class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider border border-gray-300">
                                    NO</th>
                                <th
                                    class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider border border-gray-300">
                                    NAMA ALAT</th>
                                <th
                                    class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider border border-gray-300">
                                    METODE</th>
                                <th
                                    class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider border border-gray-300">
                                    KEMAMPUAN</th>
                                <th
                                    class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider border border-gray-300">
                                    KETERANGAN</th>
                                <th
                                    class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider border border-gray-300">
                                    BIAYA (Rp)</th>
                                <th
                                    class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider border border-gray-300">
                                    KET BIAYA</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <tr>
                                <td class="px-4 py-3 text-sm border border-gray-300 text-center font-medium">1</td>
                                <td class="px-4 py-3 text-sm border border-gray-300 font-medium">Tensile strength /
                                    Universal testing machine</td>
                                <td class="px-4 py-3 text-sm border border-gray-300">SNSU PK.M-03:2021</td>
                                <td class="px-4 py-3 text-sm border border-gray-300">0 ~ 500 kgf</td>
                                <td class="px-4 py-3 text-sm border border-gray-300"></td>
                                <td class="px-4 py-3 text-sm border border-gray-300 text-right">500.000</td>
                                <td class="px-4 py-3 text-sm border border-gray-300"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- 5. TEKANAN -->
            <div class="mb-12">
                <h3 class="text-2xl font-semibold text-gray-800 mb-4">5. <?php echo e(__('kalibrasi.pressure')); ?></h3>
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200 border border-gray-300">
                        <thead class="bg-gray-100">
                            <tr>
                                <th
                                    class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider border border-gray-300">
                                    NO</th>
                                <th
                                    class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider border border-gray-300">
                                    NAMA ALAT</th>
                                <th
                                    class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider border border-gray-300">
                                    METODE</th>
                                <th
                                    class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider border border-gray-300">
                                    KEMAMPUAN</th>
                                <th
                                    class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider border border-gray-300">
                                    KETERANGAN</th>
                                <th
                                    class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider border border-gray-300">
                                    BIAYA (Rp)</th>
                                <th
                                    class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider border border-gray-300">
                                    KET BIAYA</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <tr>
                                <td class="px-4 py-3 text-sm border border-gray-300 text-center font-medium">1</td>
                                <td class="px-4 py-3 text-sm border border-gray-300 font-medium">Pressure gauge</td>
                                <td class="px-4 py-3 text-sm border border-gray-300">DKD-R 6-1 edition 03/2014; Euramet
                                    CG-17 version 4.0 (04/2019)</td>
                                <td class="px-4 py-3 text-sm border border-gray-300">0 ~ 5000 Psi</td>
                                <td class="px-4 py-3 text-sm border border-gray-300"></td>
                                <td class="px-4 py-3 text-sm border border-gray-300 text-right">300.000</td>
                                <td class="px-4 py-3 text-sm border border-gray-300"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- 6. INSTRUMEN ANALISIS -->
            <div class="mb-12">
                <h3 class="text-2xl font-semibold text-gray-800 mb-4">6. <?php echo e(__('kalibrasi.analytical_instruments')); ?></h3>
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200 border border-gray-300">
                        <thead class="bg-gray-100">
                            <tr>
                                <th
                                    class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider border border-gray-300">
                                    NO</th>
                                <th
                                    class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider border border-gray-300">
                                    NAMA ALAT</th>
                                <th
                                    class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider border border-gray-300">
                                    METODE</th>
                                <th
                                    class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider border border-gray-300">
                                    KEMAMPUAN</th>
                                <th
                                    class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider border border-gray-300">
                                    KETERANGAN</th>
                                <th
                                    class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider border border-gray-300">
                                    BIAYA (Rp)</th>
                                <th
                                    class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider border border-gray-300">
                                    KET BIAYA</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <tr>
                                <td class="px-4 py-3 text-sm border border-gray-300 text-center font-medium">1</td>
                                <td class="px-4 py-3 text-sm border border-gray-300 font-medium">pH Meter</td>
                                <td class="px-4 py-3 text-sm border border-gray-300">ASTM E70-19</td>
                                <td class="px-4 py-3 text-sm border border-gray-300">4, 7, 10</td>
                                <td class="px-4 py-3 text-sm border border-gray-300"></td>
                                <td class="px-4 py-3 text-sm border border-gray-300 text-right">255.000</td>
                                <td class="px-4 py-3 text-sm border border-gray-300"></td>
                            </tr>
                            <tr class="bg-gray-50">
                                <td class="px-4 py-3 text-sm border border-gray-300 text-center font-medium"
                                    rowspan="3">2</td>
                                <td class="px-4 py-3 text-sm border border-gray-300 font-medium" rowspan="3">
                                    Spektrofotometer UV-VIS</td>
                                <td class="px-4 py-3 text-sm border border-gray-300" rowspan="3">SNSU PK.F-01:2020</td>
                                <td class="px-4 py-3 text-sm border border-gray-300">Akurasi panjang gelombang (Holmium) :
                                    279~638 nm</td>
                                <td class="px-4 py-3 text-sm border border-gray-300"></td>
                                <td class="px-4 py-3 text-sm border border-gray-300 text-right" rowspan="3">500.000
                                </td>
                                <td class="px-4 py-3 text-sm border border-gray-300" rowspan="3"></td>
                            </tr>
                            <tr class="bg-gray-50">
                                <td class="px-4 py-3 text-sm border border-gray-300">Akurasi panjang gelombang (Didynium) :
                                    443~887 nm</td>
                                <td class="px-4 py-3 text-sm border border-gray-300"></td>
                            </tr>
                            <tr class="bg-gray-50">
                                <td class="px-4 py-3 text-sm border border-gray-300">Linieritas Fotometri pada α 590 nm :
                                    0,2 Abs; 0,5 Abs; 1,0 Abs</td>
                                <td class="px-4 py-3 text-sm border border-gray-300"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- 7. DIMENSI -->
            <div class="mb-12">
                <h3 class="text-2xl font-semibold text-gray-800 mb-4">7. <?php echo e(__('kalibrasi.dimensions')); ?></h3>
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200 border border-gray-300">
                        <thead class="bg-gray-100">
                            <tr>
                                <th
                                    class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider border border-gray-300">
                                    NO</th>
                                <th
                                    class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider border border-gray-300">
                                    NAMA ALAT</th>
                                <th
                                    class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider border border-gray-300">
                                    METODE</th>
                                <th
                                    class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider border border-gray-300">
                                    KEMAMPUAN</th>
                                <th
                                    class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider border border-gray-300">
                                    KETERANGAN</th>
                                <th
                                    class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider border border-gray-300">
                                    BIAYA (Rp)</th>
                                <th
                                    class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider border border-gray-300">
                                    KET BIAYA</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <tr>
                                <td class="px-4 py-3 text-sm border border-gray-300 text-center font-medium">1</td>
                                <td class="px-4 py-3 text-sm border border-gray-300 font-medium">Jangka sorong / Caliper
                                </td>
                                <td class="px-4 py-3 text-sm border border-gray-300">JIS B 7507-2016</td>
                                <td class="px-4 py-3 text-sm border border-gray-300">0 ~ 225 mm</td>
                                <td class="px-4 py-3 text-sm border border-gray-300">Manual, dial, digital</td>
                                <td class="px-4 py-3 text-sm border border-gray-300 text-right">234.000</td>
                                <td class="px-4 py-3 text-sm border border-gray-300"></td>
                            </tr>
                            <tr class="bg-gray-50">
                                <td class="px-4 py-3 text-sm border border-gray-300 text-center font-medium">2</td>
                                <td class="px-4 py-3 text-sm border border-gray-300 font-medium">Mikrometer luar (outside
                                    micrometer)</td>
                                <td class="px-4 py-3 text-sm border border-gray-300">JIS B 7502-2016</td>
                                <td class="px-4 py-3 text-sm border border-gray-300">0 ~ 50 mm</td>
                                <td class="px-4 py-3 text-sm border border-gray-300">Manual, dial, digital</td>
                                <td class="px-4 py-3 text-sm border border-gray-300 text-right">500.000</td>
                                <td class="px-4 py-3 text-sm border border-gray-300"></td>
                            </tr>
                            <tr>
                                <td class="px-4 py-3 text-sm border border-gray-300 text-center font-medium">3</td>
                                <td class="px-4 py-3 text-sm border border-gray-300 font-medium">Alat ukur ketebalan
                                    (thickness gauge)</td>
                                <td class="px-4 py-3 text-sm border border-gray-300">ASME B89.1.10M-2001</td>
                                <td class="px-4 py-3 text-sm border border-gray-300">0 ~ 30 mm</td>
                                <td class="px-4 py-3 text-sm border border-gray-300">Manual, dial, digital</td>
                                <td class="px-4 py-3 text-sm border border-gray-300 text-right">250.000</td>
                                <td class="px-4 py-3 text-sm border border-gray-300"></td>
                            </tr>
                            <tr class="bg-gray-50">
                                <td class="px-4 py-3 text-sm border border-gray-300 text-center font-medium">4</td>
                                <td class="px-4 py-3 text-sm border border-gray-300 font-medium">Depth Gauge</td>
                                <td class="px-4 py-3 text-sm border border-gray-300">JIS B 7518:2018</td>
                                <td class="px-4 py-3 text-sm border border-gray-300">0 ~ 100 mm</td>
                                <td class="px-4 py-3 text-sm border border-gray-300">Manual, dial, digital</td>
                                <td class="px-4 py-3 text-sm border border-gray-300 text-right">400.000</td>
                                <td class="px-4 py-3 text-sm border border-gray-300"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- 8. WAKTU DAN FREKUENSI -->
            <div class="mb-12">
                <h3 class="text-2xl font-semibold text-gray-800 mb-4">8. <?php echo e(__('kalibrasi.time_frequency')); ?></h3>
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200 border border-gray-300">
                        <thead class="bg-gray-100">
                            <tr>
                                <th
                                    class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider border border-gray-300">
                                    NO</th>
                                <th
                                    class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider border border-gray-300">
                                    NAMA ALAT</th>
                                <th
                                    class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider border border-gray-300">
                                    METODE</th>
                                <th
                                    class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider border border-gray-300">
                                    KEMAMPUAN</th>
                                <th
                                    class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider border border-gray-300">
                                    KETERANGAN</th>
                                <th
                                    class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider border border-gray-300">
                                    BIAYA (Rp)</th>
                                <th
                                    class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider border border-gray-300">
                                    KET BIAYA</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <tr>
                                <td class="px-4 py-3 text-sm border border-gray-300 text-center font-medium">1</td>
                                <td class="px-4 py-3 text-sm border border-gray-300 font-medium">Stopwatch</td>
                                <td class="px-4 py-3 text-sm border border-gray-300">NIST SP 960-12 (2009)</td>
                                <td class="px-4 py-3 text-sm border border-gray-300">10 detik ~ 32400 detik</td>
                                <td class="px-4 py-3 text-sm border border-gray-300"></td>
                                <td class="px-4 py-3 text-sm border border-gray-300 text-right">150.000</td>
                                <td class="px-4 py-3 text-sm border border-gray-300"></td>
                            </tr>
                            <tr class="bg-gray-50">
                                <td class="px-4 py-3 text-sm border border-gray-300 text-center font-medium">2</td>
                                <td class="px-4 py-3 text-sm border border-gray-300 font-medium">Timer</td>
                                <td class="px-4 py-3 text-sm border border-gray-300">NIST SP 960-12 (2009)</td>
                                <td class="px-4 py-3 text-sm border border-gray-300">15 detik ~ 7200 detik</td>
                                <td class="px-4 py-3 text-sm border border-gray-300"></td>
                                <td class="px-4 py-3 text-sm border border-gray-300 text-right">150.000</td>
                                <td class="px-4 py-3 text-sm border border-gray-300"></td>
                            </tr>
                            <tr>
                                <td class="px-4 py-3 text-sm border border-gray-300 text-center font-medium">3</td>
                                <td class="px-4 py-3 text-sm border border-gray-300 font-medium">Indikator Kecepatan Putar
                                    (Centrifuge/Stirer)</td>
                                <td class="px-4 py-3 text-sm border border-gray-300">MK.IIId.WF.LPK No. Bagian 7 (revisi:
                                    1/2-22 Juli 2022)</td>
                                <td class="px-4 py-3 text-sm border border-gray-300">50 rpm ~ 5000 rpm</td>
                                <td class="px-4 py-3 text-sm border border-gray-300"></td>
                                <td class="px-4 py-3 text-sm border border-gray-300 text-right">280.000</td>
                                <td class="px-4 py-3 text-sm border border-gray-300"></td>
                            </tr>
                            <tr class="bg-gray-50">
                                <td class="px-4 py-3 text-sm border border-gray-300 text-center font-medium"
                                    rowspan="2">4</td>
                                <td class="px-4 py-3 text-sm border border-gray-300 font-medium" rowspan="2">Indikator
                                    Kecepatan Translasi (Speedometer)</td>
                                <td class="px-4 py-3 text-sm border border-gray-300" rowspan="2">MK.IIId.WF.LPK No.
                                    Bagian 8 (revisi: 1/2-22 Juli 2022)</td>
                                <td class="px-4 py-3 text-sm border border-gray-300">5 mm/min ~ 500 mm/min</td>
                                <td class="px-4 py-3 text-sm border border-gray-300"></td>
                                <td class="px-4 py-3 text-sm border border-gray-300 text-right" rowspan="2">280.000
                                </td>
                                <td class="px-4 py-3 text-sm border border-gray-300" rowspan="2"></td>
                            </tr>
                            <tr class="bg-gray-50">
                                <td class="px-4 py-3 text-sm border border-gray-300">20 km/jam ~ 300 km/jam</td>
                                <td class="px-4 py-3 text-sm border border-gray-300"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Ruang lingkup yang belum terakreditasi KAN -->
            <div class="mb-12">
                <h3 class="text-2xl font-semibold text-gray-800 mb-4"><?php echo e(__('kalibrasi.non_accredited_scope')); ?></h3>
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200 border border-gray-300">
                        <thead class="bg-gray-100">
                            <tr>
                                <th
                                    class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider border border-gray-300">
                                    NO</th>
                                <th
                                    class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider border border-gray-300">
                                    NAMA ALAT</th>
                                <th
                                    class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider border border-gray-300">
                                    METODE</th>
                                <th
                                    class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider border border-gray-300">
                                    KEMAMPUAN</th>
                                <th
                                    class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider border border-gray-300">
                                    KETERANGAN</th>
                                <th
                                    class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider border border-gray-300">
                                    BIAYA (Rp)</th>
                                <th
                                    class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider border border-gray-300">
                                    KET BIAYA</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <tr>
                                <td class="px-4 py-3 text-sm border border-gray-300 text-center font-medium">1</td>
                                <td class="px-4 py-3 text-sm border border-gray-300 font-medium">Turbidimeter</td>
                                <td class="px-4 py-3 text-sm border border-gray-300">STABLCAL-Instructions for Use (HACH,
                                    Ed. 5, Oktober 2009)</td>
                                <td class="px-4 py-3 text-sm border border-gray-300">0,05 NTU; 15,1 NTU; 100 NTU; 751 NTU
                                </td>
                                <td class="px-4 py-3 text-sm border border-gray-300"></td>
                                <td class="px-4 py-3 text-sm border border-gray-300 text-right">300.000</td>
                                <td class="px-4 py-3 text-sm border border-gray-300"></td>
                            </tr>
                            <tr class="bg-gray-50">
                                <td class="px-4 py-3 text-sm border border-gray-300 text-center font-medium">2</td>
                                <td class="px-4 py-3 text-sm border border-gray-300 font-medium">TDS meter</td>
                                <td class="px-4 py-3 text-sm border border-gray-300">OIML R 68 (1985)</td>
                                <td class="px-4 py-3 text-sm border border-gray-300">7,5 mg/L; 74,6 mg/L; 746 mg/L</td>
                                <td class="px-4 py-3 text-sm border border-gray-300"></td>
                                <td class="px-4 py-3 text-sm border border-gray-300 text-right">250.000</td>
                                <td class="px-4 py-3 text-sm border border-gray-300"></td>
                            </tr>
                            <tr>
                                <td class="px-4 py-3 text-sm border border-gray-300 text-center font-medium">3</td>
                                <td class="px-4 py-3 text-sm border border-gray-300 font-medium">Conductivity meter</td>
                                <td class="px-4 py-3 text-sm border border-gray-300">OIML R 68 (1985)</td>
                                <td class="px-4 py-3 text-sm border border-gray-300">0,015 mS/cm; 0,14 mS/cm; 1,41 mS/cm
                                </td>
                                <td class="px-4 py-3 text-sm border border-gray-300"></td>
                                <td class="px-4 py-3 text-sm border border-gray-300 text-right">250.000</td>
                                <td class="px-4 py-3 text-sm border border-gray-300"></td>
                            </tr>
                            <tr class="bg-gray-50">
                                <td class="px-4 py-3 text-sm border border-gray-300 text-center font-medium">4</td>
                                <td class="px-4 py-3 text-sm border border-gray-300 font-medium">Autoclave</td>
                                <td class="px-4 py-3 text-sm border border-gray-300">BS 2646-1:2021</td>
                                <td class="px-4 py-3 text-sm border border-gray-300">Suhu & Tekanan</td>
                                <td class="px-4 py-3 text-sm border border-gray-300"></td>
                                <td class="px-4 py-3 text-sm border border-gray-300 text-right">600.000</td>
                                <td class="px-4 py-3 text-sm border border-gray-300"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>

    <?php $__env->startPush('scripts'); ?>
        <script>
            function showTab(tabName) {
                // Hide all tab contents
                const allContents = document.querySelectorAll('.tab-content');
                allContents.forEach(content => {
                    content.classList.add('hidden');
                });

                // Remove active state from all tabs
                const allTabs = document.querySelectorAll('.tab-button');
                allTabs.forEach(tab => {
                    tab.classList.remove('border-blue-600', 'text-blue-600');
                    tab.classList.add('border-transparent', 'text-gray-500');
                });

                // Show selected tab content
                const selectedContent = document.getElementById('content-' + tabName);
                if (selectedContent) {
                    selectedContent.classList.remove('hidden');
                }

                // Add active state to selected tab
                const selectedTab = document.getElementById('tab-' + tabName);
                if (selectedTab) {
                    selectedTab.classList.remove('border-transparent', 'text-gray-500');
                    selectedTab.classList.add('border-blue-600', 'text-blue-600');
                }
            }

            // Initialize: show deskripsi tab by default
            document.addEventListener('DOMContentLoaded', function() {
                showTab('deskripsi');
            });
        </script>
    <?php $__env->stopPush(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\alamak\resources\views/pages/kalibrasi/index.blade.php ENDPATH**/ ?>