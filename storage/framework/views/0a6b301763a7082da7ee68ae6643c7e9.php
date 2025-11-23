

<?php $__env->startSection('title', 'Layanan Pengujian - BBSPJIKP'); ?>
<?php $__env->startSection('description',
    'Layanan pengujian industri kulit, karet, dan plastik dengan standar nasional dan
    internasional'); ?>

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
                            <span class="text-gray-300"><?php echo e(__('common.testing')); ?></span>
                        </div>
                    </li>
                </ol>
            </nav>

            <!-- Header Text -->
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold text-white mb-4"><?php echo e(__('pengujian.hero_title')); ?></h1>
                <div class="flex flex-wrap justify-center gap-4 mt-8">
                    <a href="#detail-pengujian"
                        class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg font-semibold transition">
                        <?php echo e(__('pengujian.detail_testing')); ?>

                    </a>
                    <a href="#permohonan-uji"
                        class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg font-semibold transition">
                        <?php echo e(__('pengujian.test_request')); ?>

                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <!-- Section Pengujian -->
        <section class="mb-16">
            <h2 class="text-3xl font-bold text-gray-900 mb-4"><?php echo e(__('pengujian.testing')); ?></h2>
            <p class="text-lg text-gray-700 mb-6">
                <?php echo e(__('pengujian.testing_description')); ?>

            </p>
            <p class="text-lg font-semibold text-gray-800 mb-4"><?php echo e(__('pengujian.providing_services')); ?></p>
            <ul class="list-disc pl-6 space-y-2 text-gray-700">
                <li><?php echo e(__('pengujian.testing_services_list_1')); ?></li>
                <li><?php echo e(__('pengujian.testing_services_list_2')); ?></li>
                <li><?php echo e(__('pengujian.testing_services_list_3')); ?></li>
                <li><?php echo e(__('pengujian.testing_services_list_4')); ?></li>
            </ul>
        </section>

        <!-- Section Fasilitas -->
        <section class="mb-16">
            <h2 class="text-3xl font-bold text-gray-900 mb-4"><?php echo e(__('pengujian.facilities')); ?></h2>
            <ul class="list-disc pl-6 space-y-2 text-gray-700">
                <li><?php echo e(__('pengujian.facility_1')); ?></li>
                <li><?php echo e(__('pengujian.facility_2')); ?></li>
            </ul>
            <div class="mt-4">
                <a href="https://drive.google.com/drive/folders/1nCke-opRpSULC44qhInNBQ8c_ery3--F" target="_blank"
                    rel="noopener noreferrer" class="text-blue-600 hover:text-blue-800 font-semibold">
                    <?php echo e(__('pengujian.testing_scope')); ?>

                </a>
            </div>
        </section>

        <!-- Section Detail Pengujian -->
        <section id="detail-pengujian" class="mb-16">
            <h2 class="text-3xl font-bold text-gray-900 mb-6"><?php echo e(__('pengujian.detail_testing')); ?></h2>

            <div class="space-y-4">
                <!-- Item 1 -->
                <div class="pengujian-item border rounded-xl shadow-sm overflow-hidden">
                    <button type="button"
                        class="pengujian-btn w-full flex justify-between items-center px-6 py-4 hover:bg-gray-50 transition">
                        <h3 class="text-lg font-semibold">PENGUJIAN PRODUK KULIT</h3>
                        <i class="fas fa-plus pengujian-icon transition-transform duration-300"></i>
                    </button>
                    <div class="pengujian-content max-h-0 overflow-hidden transition-all duration-300">
                        <div class="px-6 py-4 text-gray-600">
                            <div class="overflow-x-auto">
                                <table class="min-w-full divide-y divide-gray-200 border border-gray-300">
                                    <thead class="bg-gray-100">
                                        <tr>
                                            <th
                                                class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider border border-gray-300">
                                                Parameter Pengujian
                                            </th>
                                            <th
                                                class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider border border-gray-300">
                                                Metode Pengujian
                                            </th>
                                            <th
                                                class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider border border-gray-300">
                                                Prinsip Pengujian
                                            </th>
                                            <th
                                                class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider border border-gray-300">
                                                Deskripsi Lain
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        <tr>
                                            <td class="px-4 py-3 text-sm border border-gray-300 font-medium">Formaldehid
                                                Bebas</td>
                                            <td class="px-4 py-3 text-sm border border-gray-300">ISO 17226-2:2018 (Leather -
                                                Chemical determination of formaldehyde content - Part 2: Method using
                                                colorimetric analysis)</td>
                                            <td class="px-4 py-3 text-sm border border-gray-300">Sampel kulit diekstrak
                                                menggunakan larutan deterjen pada suhu 40 °C. Analit hasil ekstraksi
                                                direaksikan dengan Asetilaseton, dimana dalam reaksi ini menghasilkan
                                                senyawa berwarna kuning (3,5-diacetyl-1,4-dihydrolutidine). Absorbansi
                                                senyawa ini diukur pada panjang gelombang 412 nm. Kandungan formaldehida
                                                yang diuji dianggap sebagai jumlah formaldehida bebas dan formaldehida yang
                                                diekstrak melalui hidrolisis yang terkandung dalam ekstrak air dari kulit
                                                dalam kondisi standar.</td>
                                            <td class="px-4 py-3 text-sm border border-gray-300">-</td>
                                        </tr>
                                        <tr class="bg-gray-50">
                                            <td class="px-4 py-3 text-sm border border-gray-300 font-medium">Krom (VI)</td>
                                            <td class="px-4 py-3 text-sm border border-gray-300">ISO 17075-1:2017 (Leather —
                                                Chemical determination of chromium(VI) content in leather — Part 1:
                                                Colorimetric method)</td>
                                            <td class="px-4 py-3 text-sm border border-gray-300">Sampel kulit diekstrak pada
                                                buffer fosfat dengan pH antara 7 - 8 untuk melepaskan Krom (VI) yang
                                                terkandung di dalamnya. Krom (VI) dalam larutan mengoksidasi
                                                1,5-diphenylcarbazide menjadi 1,5-diphenylcarbazone yang selanjutnya
                                                membentuk senyawa kompleks krom yang berwarna merah/ ungu, yang dapat diukur
                                                secara fotometrik pada panjang gelombang 540 nm.</td>
                                            <td class="px-4 py-3 text-sm border border-gray-300">-</td>
                                        </tr>
                                        <tr>
                                            <td class="px-4 py-3 text-sm border border-gray-300 font-medium">pH</td>
                                            <td class="px-4 py-3 text-sm border border-gray-300">SNI ISO 4045:2018 (Kulit –
                                                Pengujian kimiawi – Penentuan pH dan perbedaan nilai)</td>
                                            <td class="px-4 py-3 text-sm border border-gray-300">Kulit yang akan diuji
                                                diekstrak menggunakan air suling, untuk selanjutnya pH dari ekstrak diukur
                                                menggunakan pH meter. Nilai pH dari ekstrak yang diencerkan 10x juga harus
                                                ditentukan apabila hasil pH ekstrak yang terukur di bawah 4 atau di atas 10.
                                            </td>
                                            <td class="px-4 py-3 text-sm border border-gray-300">-</td>
                                        </tr>
                                        <tr class="bg-gray-50">
                                            <td class="px-4 py-3 text-sm border border-gray-300 font-medium">Kadar Abu</td>
                                            <td class="px-4 py-3 text-sm border border-gray-300">ISO 4047:1977 (Leather -
                                                Determination of sulphated total ash and sulphated water-insoluble ash)</td>
                                            <td class="px-4 py-3 text-sm border border-gray-300">Kadar abu merupakan
                                                campuran dari komponen anorganik atau mineral yang terdapat pada suatu
                                                produk dan merupakan residu organik dari proses pembakaran atau oksidasi
                                                komponen organiknya. Kadar abu dari suatu produk menunjukkan kandungan
                                                mineral yang terdapat dalam bahan tersebut. Bagian contoh uji yang telah
                                                ditimbang dipanaskan di dalam cawan di atas pembakar. Setelah semua produk
                                                dekomposisi zat-zat yang dapat menguap hilang, cawan dipindahkan ke tanur
                                                api dan pemanasan dilanjutkan sampai semua senyawa zat arang terbakar dan
                                                diperoleh massa yang konstan.</td>
                                            <td class="px-4 py-3 text-sm border border-gray-300">-</td>
                                        </tr>
                                        <tr>
                                            <td class="px-4 py-3 text-sm border border-gray-300 font-medium">Minyak/ Lemak
                                            </td>
                                            <td class="px-4 py-3 text-sm border border-gray-300">SNI 06-0564-1989 (Cara Uji
                                                Kadar Minyak atau Lemak dalam Kulit Tersamak)</td>
                                            <td class="px-4 py-3 text-sm border border-gray-300">Sejumlah tertentu contoh
                                                uji kulit dimasukkan ke dalam soklet untuk dilakukan ekstraksi berulang
                                                dengan menggunakan pelarut yang sama, sehingga komponen minyak/ lemak dalam
                                                contoh uji dapat terisolasi dengan sempurna. Hasil minyak/ lemak yang
                                                mengendap pada labu destilasi dikeringkan pada suhu 100 °C ± 2 °C sampai
                                                berat tetap. Kadar minyak/lemak dihitung dan dinyatakan dalam persen berat
                                                contoh uji.</td>
                                            <td class="px-4 py-3 text-sm border border-gray-300">-</td>
                                        </tr>
                                        <tr class="bg-gray-50">
                                            <td class="px-4 py-3 text-sm border border-gray-300 font-medium">Bahan Mudah
                                                Menguap</td>
                                            <td class="px-4 py-3 text-sm border border-gray-300">SNI ISO 4684:2013 (Kulit -
                                                Uji kimiawi - Penentuan bahan mudah menguap)</td>
                                            <td class="px-4 py-3 text-sm border border-gray-300">Contoh kulit digiling halus
                                                dan dikeringkan dalam oven pada 102 °C ± 2 °C hingga massa konstan. Bahan
                                                mudah menguap dinyatakan sebagai perbandingan dari perubahan massa contoh
                                                terhadap massa awal sebelum pengeringan.</td>
                                            <td class="px-4 py-3 text-sm border border-gray-300">-</td>
                                        </tr>
                                        <tr>
                                            <td class="px-4 py-3 text-sm border border-gray-300 font-medium">Krom Oksida
                                            </td>
                                            <td class="px-4 py-3 text-sm border border-gray-300">SNI ISO 5398-1 :2018
                                                (Leather - Chemical determination of chromic oxide content - Part 1:
                                                Quantification by titration)</td>
                                            <td class="px-4 py-3 text-sm border border-gray-300">Kandungan krom di dalam
                                                kulit yang ditentukan dalam metode ini dilaporkan sebagai krom oksida.
                                                Kandungan krom dalam kulit yang terlarut sebagai krom heksavalen dianalisis
                                                menggunakan metode titrasi iodometri.</td>
                                            <td class="px-4 py-3 text-sm border border-gray-300">-</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Item 2 -->
                <div class="pengujian-item border rounded-xl shadow-sm overflow-hidden">
                    <button type="button"
                        class="pengujian-btn w-full flex justify-between items-center px-6 py-4 hover:bg-gray-50 transition">
                        <h3 class="text-lg font-semibold">PENGUJIAN PRODUK SIR (STANDARD INDONESIAN RUBBER) / KARET REMAH
                            (CRUMB RUBBER)</h3>
                        <i class="fas fa-plus pengujian-icon transition-transform duration-300"></i>
                    </button>
                    <div class="pengujian-content max-h-0 overflow-hidden transition-all duration-300">
                        <div class="px-6 py-4 text-gray-600">
                            <div class="overflow-x-auto">
                                <table class="min-w-full divide-y divide-gray-200 border border-gray-300">
                                    <thead class="bg-gray-100">
                                        <tr>
                                            <th
                                                class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider border border-gray-300">
                                                Parameter Pengujian
                                            </th>
                                            <th
                                                class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider border border-gray-300">
                                                Metode Pengujian
                                            </th>
                                            <th
                                                class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider border border-gray-300">
                                                Prinsip Pengujian
                                            </th>
                                            <th
                                                class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider border border-gray-300">
                                                Deskripsi Lain
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        <tr>
                                            <td class="px-4 py-3 text-sm border border-gray-300 font-medium">Kadar Kotoran
                                            </td>
                                            <td class="px-4 py-3 text-sm border border-gray-300">SNI 8383-2017 Karet alam,
                                                mentah – Penentuan kadar kotoran</td>
                                            <td class="px-4 py-3 text-sm border border-gray-300">Menentukan jumlah kadar
                                                kotoran dalam ret alam mentah. Pengujian dilakukan dengan melarutkan karet
                                                ke dalam larutan pelunak karet hingga karet larut seutuhnya, lalu saring dan
                                                timbang hasil saringan.</td>
                                            <td class="px-4 py-3 text-sm border border-gray-300">-</td>
                                        </tr>
                                        <tr class="bg-gray-50">
                                            <td class="px-4 py-3 text-sm border border-gray-300 font-medium">Kadar Abu</td>
                                            <td class="px-4 py-3 text-sm border border-gray-300">SNI ISO 247-2012
                                                Karet-Penentun Kadar Abu</td>
                                            <td class="px-4 py-3 text-sm border border-gray-300">Bagian contoh uji yang
                                                telah ditimbang dipanaskan di dalam cawan di atas pembakar gas. Setelah
                                                semua produk dekomposisi zat-zat yang dapat menguap hilang, cawan
                                                dipindahkan ke tanur api dan pemanasan dilanjutkan sampai semua senyawa zat
                                                arang terbakar dandiperoleh massa yang konstan.</td>
                                            <td class="px-4 py-3 text-sm border border-gray-300">-</td>
                                        </tr>
                                        <tr>
                                            <td class="px-4 py-3 text-sm border border-gray-300 font-medium">Kadar Nitrogen
                                            </td>
                                            <td class="px-4 py-3 text-sm border border-gray-300">SNI ISO 1656-2016 Karet
                                                alam, mentah dan lateks - Penentuan kadar nitrogen</td>
                                            <td class="px-4 py-3 text-sm border border-gray-300">Sampel yang telah
                                                ditentukan massanya dilarutkan menggunakan larutan asam sulfat degan bantuan
                                                katalis selenium yang akan merubah komponen nitrogen menjadi amonium
                                                hidrogren sulfat, lalu di destilasi dan dititrasi dengan larutan asam sulfat
                                                yang telah distandarisasi.</td>
                                            <td class="px-4 py-3 text-sm border border-gray-300">-</td>
                                        </tr>
                                        <tr class="bg-gray-50">
                                            <td class="px-4 py-3 text-sm border border-gray-300 font-medium">Plastisitas
                                                SIR</td>
                                            <td class="px-4 py-3 text-sm border border-gray-300">SNI 8425:2017 Karet alam,
                                                mentah – Penentuan plastisitas – Metode Rapid-plastimeter</td>
                                            <td class="px-4 py-3 text-sm border border-gray-300">Potongan uji berbentuk
                                                cakram dikompres secara cepat antara piringan kecil pararel sampai ketebalan
                                                tetp 1 mm. Kompresi terhadap potongan uji dipertahankan selama 15 detik
                                                untuk memungkinkan mencapai suhu keseimbangan dengan piringan. Setelah
                                                periode ini, potongan uji dikenai gaya konstan (100 ± 1) N selama 15 detik.
                                                Ketebalan pada akhir periode ini merupakan ukuran plastisitas.</td>
                                            <td class="px-4 py-3 text-sm border border-gray-300">-</td>
                                        </tr>
                                        <tr>
                                            <td class="px-4 py-3 text-sm border border-gray-300 font-medium">Kadar Zat
                                                Menguap</td>
                                            <td class="px-4 py-3 text-sm border border-gray-300">SNI 8356-2017 Penentuan
                                                Kadar zat Menguap</td>
                                            <td class="px-4 py-3 text-sm border border-gray-300">Bagian contoh uji digiling
                                                menjadi lembaran dengan alat gilingan yang dipanaskan sampai semua zat
                                                menguap hilang. Massa yang hilang selama proses penggilingan dihitung dan
                                                dinyatakan sebagai kadar zat menguap. Apabila bagian contoh uji dihomogenkan
                                                sesuai dengan lampiran B sebelum pengeringan, massa yang hilang selama
                                                proses homogenisasi diikutsertakan dalam perhitungan</td>
                                            <td class="px-4 py-3 text-sm border border-gray-300">-</td>
                                        </tr>
                                        <tr class="bg-gray-50">
                                            <td class="px-4 py-3 text-sm border border-gray-300 font-medium">PRI</td>
                                            <td class="px-4 py-3 text-sm border border-gray-300">SNI ISO 2930-2013 Karet
                                                ala mentah- Penentuan Plasticity retention index (PRI)</td>
                                            <td class="px-4 py-3 text-sm border border-gray-300">Nilai plastisitas cepat
                                                dari potongan contoh uji yang tidak mengalami pengusangan dan potongan
                                                contoh uji yang mengalami pengusangan karena panas di dalam oven pada suhu
                                                140 °C ditentukan dengan menggunakan plastimeter piringan paralel dengan
                                                diameter silinder 10 mm dan sesuai dengan prosedur yang diterangkan dalam
                                                ISO 2007. PRI adalah rasio dari nilai plastisitas cepat setelah dan sebelum
                                                pemanasan dikalikan 100.</td>
                                            <td class="px-4 py-3 text-sm border border-gray-300">-</td>
                                        </tr>
                                        <tr>
                                            <td class="px-4 py-3 text-sm border border-gray-300 font-medium">Viskositas
                                                Mooney</td>
                                            <td class="px-4 py-3 text-sm border border-gray-300">SNI 8384-2017 Karet, yang
                                                tidak divulkanisasi – Penentuan menggunakan viskometer shearing-disc -
                                                Bagian 1: Penentuan viskositas Mooney</td>
                                            <td class="px-4 py-3 text-sm border border-gray-300">Torsi yang digunakan pada
                                                kondisi khusus untuk memutar piringan logam dalam bejana silinder dibentuk
                                                dari pasangan cetakan (dies) yang berisi karet diukur. Ketahanan karet
                                                terhadap putaran ini dinyatakan dalam satuan arbitrasi sebagai viskositas
                                                Mooney dari potongan contoh uji.</td>
                                            <td class="px-4 py-3 text-sm border border-gray-300">-</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Item 3 -->
                <div class="pengujian-item border rounded-xl shadow-sm overflow-hidden">
                    <button type="button"
                        class="pengujian-btn w-full flex justify-between items-center px-6 py-4 hover:bg-gray-50 transition">
                        <h3 class="text-lg font-semibold">PENGUJIAN PRODUK AIR</h3>
                        <i class="fas fa-plus pengujian-icon transition-transform duration-300"></i>
                    </button>
                    <div class="pengujian-content max-h-0 overflow-hidden transition-all duration-300">
                        <div class="px-6 py-4 text-gray-600">
                            <div class="overflow-x-auto">
                                <table class="min-w-full divide-y divide-gray-200 border border-gray-300">
                                    <thead class="bg-gray-100">
                                        <tr>
                                            <th
                                                class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider border border-gray-300">
                                                Parameter Pengujian
                                            </th>
                                            <th
                                                class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider border border-gray-300">
                                                Metode Pengujian
                                            </th>
                                            <th
                                                class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider border border-gray-300">
                                                Prinsip Pengujian
                                            </th>
                                            <th
                                                class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider border border-gray-300">
                                                Deskripsi Lain
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        <tr>
                                            <td class="px-4 py-3 text-sm border border-gray-300 font-medium">Kadar Amonia
                                            </td>
                                            <td class="px-4 py-3 text-sm border border-gray-300">SNI 06-6989.30-2005 Air
                                                dan air limbah - Bagian 30: Cara uji kadar amonia dengan spektrofotometer
                                                secara fenat.</td>
                                            <td class="px-4 py-3 text-sm border border-gray-300">Menguji kadar amoniak
                                                dalam air limbah secara fenat pada kisaran kadar 0,1 mg/L sampai dengan 0,6
                                                mg/L menggunakan spektrofotometer pada panjang gelombang 640 nm. Amonia
                                                bereksi dengan fenol dan hipoklorit membentuk senyawa biru indofenol.
                                                Katalis yang dieprgunakan adalah natrium nitroprusida.</td>
                                            <td class="px-4 py-3 text-sm border border-gray-300">Jaminan mutu: Bahan kimia
                                                p.a., Alat gelas bebas kontaminan, Alat ukur terkalibrasi, Analis yang
                                                kompeten, Analisis dalam jangka waktu tidak emlampaui waktu penyimpanan
                                                maksimum. Pengendalian mutu: Koefisien korelasi lebih besar atau sama dengan
                                                0,97, Intersep lebih kecil atau sama dengan batas deteksi, Analisis blanko,
                                                Analisis duplo, Perbedaan persen relatif hasil pengukuran lebih besar atau
                                                sama dengan 5%</td>
                                        </tr>
                                        <tr class="bg-gray-50">
                                            <td class="px-4 py-3 text-sm border border-gray-300 font-medium">Kebutuhan
                                                Oksigen Biokimia</td>
                                            <td class="px-4 py-3 text-sm border border-gray-300">SNI 6989.72:2009 Air dan
                                                air limbah - Bagian 72: Cara uji Kebutuhan Oksigen Biokimia (Biochemical
                                                Oxygen Demand/BOD).</td>
                                            <td class="px-4 py-3 text-sm border border-gray-300">Menentukan jumlah oksigen
                                                terlarut yang dibutuhkan oleh mikroba aerobik untuk mengoksidasi bahan
                                                organik karbon dalam contoh uji air limbah, efluen atau air yang tercemar
                                                yang tidak mengandung atau yang telah dihilangkan zat-zat toksik dan zat-zat
                                                pengganggu lainnya. Pengujian dilakukan dengan membandingkan kadar oksigen
                                                terlarut pada hari ke-0 dengan hari ke-5 setelah diinkubasi pada suhu 20°C.
                                            </td>
                                            <td class="px-4 py-3 text-sm border border-gray-300">Pengendalian mutu: Bahan
                                                kimia pro analisis (p.a), Alat gelas bebas kontaminan, Alat ukur yang
                                                terkalibrasi atau terverifikasi, Analis/penguji yang kompeten, Air dengan
                                                penurunan konsentrasi oksigen terlarut maksimum < 0,4 mg/L selama 5 hari,
                                                    Nilai BOD5 larutan kontrol standar glukosa-asam glutamat berada pada
                                                    kisaran 198 ± 30,5 mg/L</td>
                                        </tr>
                                        <tr>
                                            <td class="px-4 py-3 text-sm border border-gray-300 font-medium">Kadar Minyak/
                                                Lemak</td>
                                            <td class="px-4 py-3 text-sm border border-gray-300">Metode uji minyak nabati
                                                dan minyak mineral secara gravimetri : SNI 6989.10:2011 dengan judul Air dan
                                                air limbah: bagian 10.</td>
                                            <td class="px-4 py-3 text-sm border border-gray-300">Cara uji ini digunakan
                                                untuk menentukan kandungan minyak dan lemak, minyak nabati, minyak mineral
                                                dalam air dan air limbah secara gravimetri. Cara uji ini dapat digunakan
                                                untuk contoh uji yang mengandung minyak nabati dan minyak mineral lebih dari
                                                5 mg/L. Minyak nabati dan minyak mineral dalam contoh uji air diasamkan
                                                kemudian diekstrak dengan menggunakan n-heksana dalam corong pisah. Ekstrak
                                                minyak nabati dan minyak mineral dipisahkan dari pelarut organik secara
                                                destilasi. Residu yang tertinggal pada labu destilasi ditimbang sebagai
                                                minyak dan lemak atau jumlah minyak nabati dan mineral.</td>
                                            <td class="px-4 py-3 text-sm border border-gray-300">-</td>
                                        </tr>
                                        <tr class="bg-gray-50">
                                            <td class="px-4 py-3 text-sm border border-gray-300 font-medium">Nitrogen
                                                Organik</td>
                                            <td class="px-4 py-3 text-sm border border-gray-300">Metode uji kadar nitrogen
                                                organik secara makro kjeldahl dan titrasi : SNI 06-6989.52-2005.</td>
                                            <td class="px-4 py-3 text-sm border border-gray-300">Cara uji ini digunakan
                                                untuk menentukan kadar nitrogen organik dalam air dan air limbah sampai
                                                kadar 100 mg/L secara makro Kjeldahl. Senyawa nitrogen organik dengan asam
                                                sulfat dan katalis, diubah menjadi garam amonium dengan penambahan basa kuat
                                                diubah menjadi amonia yang dibebaskan dan bereaksi dengan asam borat atau
                                                asam sulfat membentuk senyawaan amonium. Selanjutnya ammonia yang terbentuk
                                                dapat ditetapkan secara titrimetri.</td>
                                            <td class="px-4 py-3 text-sm border border-gray-300">Jaminan Mutu: Menggunakan
                                                bahan kimia pro analisa (pa), Menggunakan alat gelas bebas kontaminasi,
                                                Menggunakan alat ukur yang terkalibrasi, Analisis dilakukan dalam jangka
                                                waktu yang tidak melampaui waktu penyimpanan maksimum, Dikerjakan oleh
                                                analis yang kompeten. Pengendalian Mutu: Analisis blanko, Analisis duplo
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="px-4 py-3 text-sm border border-gray-300 font-medium">Sulfida
                                                Iodometri</td>
                                            <td class="px-4 py-3 text-sm border border-gray-300">Metode uji sulfida secara
                                                iodometri: SNI 6989.75:2009.</td>
                                            <td class="px-4 py-3 text-sm border border-gray-300">Metode ini digunakan untuk
                                                penentuan total sulfida dalam air dan air limbah secara iodometri untuk
                                                kadar sulfida di atas 1,0 mg/L. Iodine secara berlebih ditambahkan ke dalam
                                                contoh uji yang mengandung sulfida, kelebihan iodin dititrasi dengan natrium
                                                tiosulfat.</td>
                                            <td class="px-4 py-3 text-sm border border-gray-300">Pengendalian Mutu:
                                                Menggunakan bahan kimia pro analisa (pa), Menggunakan alat gelas bebas
                                                kontaminasi, Menggunakan alat ukur yang terkalibrasi, Analisis dilakukan
                                                dalam jangka waktu yang tidak melampaui waktu penyimpanan maksimum,
                                                Dikerjakan oleh analis yang kompeten, Analisis blanko, Analisis duplo</td>
                                        </tr>
                                        <tr class="bg-gray-50">
                                            <td class="px-4 py-3 text-sm border border-gray-300 font-medium">Sulfida
                                                Spektrofotometri</td>
                                            <td class="px-4 py-3 text-sm border border-gray-300">Metode pengujian sulfida
                                                dengan metilen biru secara spektrofotometri (SNI 6989.70: 2009).</td>
                                            <td class="px-4 py-3 text-sm border border-gray-300">Metode ini digunakan untuk
                                                pennetuan total sulfida dalam air dan air limbah dengan metilen biru secara
                                                spektrofotometri pada kisaran kadar 0,02 mg/L sampai 1,0 mg/L. Pada
                                                pengujian ini sulfida bereaksi dengan ferri klorida dan
                                                dimetil-p-fenilendiamina membentuk senyawa berwarna biru metilen, kemudian
                                                diukur pada panjang gelombang 664 nm menggunakan spektrofotometer UV-Vis.
                                            </td>
                                            <td class="px-4 py-3 text-sm border border-gray-300">Pengendalian mutu:
                                                Menggunakan bahan kimia pro analisa (pa), Menggunakan alat gelas bebas
                                                kontaminasi, Dikerjakan oleh analis yang kompeten, Dilakukan analisis dalam
                                                jangka waktu yang tidak melampui waktu penyimpanan maksimum, Dilakukan
                                                perhitungan koefisien korelasi (r) lebih besar atau sama dengan 0,995 dengan
                                                intersepsi lebih kecil atau sama dengan batas deteksi, Analisis duplo,
                                                Analisis blanko</td>
                                        </tr>
                                        <tr>
                                            <td class="px-4 py-3 text-sm border border-gray-300 font-medium">TDS</td>
                                            <td class="px-4 py-3 text-sm border border-gray-300">Cara uji padatan terlarut
                                                total (total dissolved solids, TDS) secara gravimetri (SNI 6989.27:2019 Air
                                                dan air limbah – Bagian 27).</td>
                                            <td class="px-4 py-3 text-sm border border-gray-300">Metode ini digunakan untuk
                                                menentukan padatan terlarut total dalam air dan air limbah secara
                                                gravimetri. Contoh uji yang telah homogen disaring dengan media penyaring.
                                                Filtrat yang lolos melalui media penyaring diuapkan sampai kisat lalu
                                                dikeringkan pada suhu 180 °C sampai mencapai berat tetap.</td>
                                            <td class="px-4 py-3 text-sm border border-gray-300">Pengendalian Mutu:
                                                Menggunakan alat gelas bebas kontaminasi, Menggunakan alat ukur yang
                                                terkalibrasi, Dilakukan analisis dalam jangka waktu tidak melebihi 7 hari,
                                                Dikerjakan oleh analis yang kompeten, Analisis duplo</td>
                                        </tr>
                                        <tr class="bg-gray-50">
                                            <td class="px-4 py-3 text-sm border border-gray-300 font-medium">TSS</td>
                                            <td class="px-4 py-3 text-sm border border-gray-300">Cara uji padatan
                                                tersuspensi total (total suspended solids/TSS) secara gravimetri (SNI
                                                6989.3:2019 Air dan air limbah – Bagian 3).</td>
                                            <td class="px-4 py-3 text-sm border border-gray-300">Metode ini digunakan untuk
                                                menentukan residu tersuspensi yang terdapat dalam contoh uji air dan air
                                                limbah secara gravimetri. Metode ini tidak termasuk penentuan bahan yang
                                                mengapung, padatan yang mudah menguap, dan dekomposisi garam mineral. Contoh
                                                uji yang telah homogen disaring dengan media penyaring yang telah ditimbang.
                                                Residu yang tertahan pada media penyaring dikeringkan pada kisaran suhu 103
                                                °C sampai dengan 105 °C hingga mencapai berat tetap. Kenaikan berat saringan
                                                mewakili Padatan Tersuspensi Total (TSS).</td>
                                            <td class="px-4 py-3 text-sm border border-gray-300">Pengendalian Mutu:
                                                Menggunakan alat gelas bebas kontaminasi, Menggunakan alat ukur yang
                                                terkalibrasi, Dilakukan analisis dalam jangka waktu tidak melebihi 7 hari,
                                                Dikerjakan oleh analis yang kompeten, Analisis duplo, Analisis blanko</td>
                                        </tr>
                                        <tr>
                                            <td class="px-4 py-3 text-sm border border-gray-300 font-medium">Suhu</td>
                                            <td class="px-4 py-3 text-sm border border-gray-300">Cara uji suhu dengan
                                                menggunakan termometer (SNI 06-6989.23-2005).</td>
                                            <td class="px-4 py-3 text-sm border border-gray-300">Cara uji ini digunakan
                                                untuk menetapkan suhu air dan air limbah dengan termometer air raksa. Air
                                                raksa dalam termometer akan memuai atau menyusut sesuai dengan panas air
                                                yang diperiksa, sehingga suhu air dapat dibaca pada skala termometer (C)
                                            </td>
                                            <td class="px-4 py-3 text-sm border border-gray-300">Jaminan Mutu: Digunakan
                                                alat ukur yang terkalibrasi, Dikerjakan oleh analis yang kompeten.
                                                Pengendalian Mutu: Dilakukan kalibrasi termometer dengan termometer standar
                                                yang ketiga</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Item 4 -->
                <div class="pengujian-item border rounded-xl shadow-sm overflow-hidden">
                    <button type="button"
                        class="pengujian-btn w-full flex justify-between items-center px-6 py-4 hover:bg-gray-50 transition">
                        <h3 class="text-lg font-semibold">PENGUJIAN PRODUK BELT CONVEYOR</h3>
                        <i class="fas fa-plus pengujian-icon transition-transform duration-300"></i>
                    </button>
                    <div class="pengujian-content max-h-0 overflow-hidden transition-all duration-300">
                        <div class="px-6 py-4 text-gray-600">
                            <div class="overflow-x-auto">
                                <table class="min-w-full divide-y divide-gray-200 border border-gray-300">
                                    <thead class="bg-gray-100">
                                        <tr>
                                            <th
                                                class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider border border-gray-300">
                                                Parameter Pengujian
                                            </th>
                                            <th
                                                class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider border border-gray-300">
                                                Metode Pengujian
                                            </th>
                                            <th
                                                class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider border border-gray-300">
                                                Prinsip Pengujian
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        <tr>
                                            <td class="px-4 py-3 text-sm border border-gray-300 font-medium">Kuat tarik dan
                                                perpanjangan putus</td>
                                            <td class="px-4 py-3 text-sm border border-gray-300">ISO 37:2017</td>
                                            <td class="px-4 py-3 text-sm border border-gray-300">Uji standar berbentuk
                                                dumb-bell atau cincin diregangkan dengan menggunakan alat uji tegangan
                                                dengan kecepatan tertentu.</td>
                                        </tr>
                                        <tr class="bg-gray-50">
                                            <td class="px-4 py-3 text-sm border border-gray-300 font-medium">Kuat sobek
                                            </td>
                                            <td class="px-4 py-3 text-sm border border-gray-300">ISO 34-1:2015<br>ISO
                                                34-2:2015</td>
                                            <td class="px-4 py-3 text-sm border border-gray-300">Contoh uji standar
                                                diregangkan secara terus menerus dari potongan contoh uji hingga sampel
                                                mengalami sobek.</td>
                                        </tr>
                                        <tr>
                                            <td class="px-4 py-3 text-sm border border-gray-300 font-medium">Kekerasan
                                                (Shore A)</td>
                                            <td class="px-4 py-3 text-sm border border-gray-300">ISO 48-4:2018</td>
                                            <td class="px-4 py-3 text-sm border border-gray-300">Indentor dengan dimensi
                                                tertentu ditekan dengan gaya yang ditentukan kedalam benda uji.</td>
                                        </tr>
                                        <tr class="bg-gray-50">
                                            <td class="px-4 py-3 text-sm border border-gray-300 font-medium">Kekerasan
                                                (IRHD)</td>
                                            <td class="px-4 py-3 text-sm border border-gray-300">ISO 48-2:2018</td>
                                            <td class="px-4 py-3 text-sm border border-gray-300">Indentor dengan dimensi
                                                tertentu ditekan dengan gaya yang ditentukan kedalam benda uji.</td>
                                        </tr>
                                        <tr>
                                            <td class="px-4 py-3 text-sm border border-gray-300 font-medium">Ketahanan
                                                kikis</td>
                                            <td class="px-4 py-3 text-sm border border-gray-300">ISO 4649:2017</td>
                                            <td class="px-4 py-3 text-sm border border-gray-300">Benda uji bergerak pada
                                                lintasan kertas amplas dan menggunakan karet standard sebagai verifikasi
                                                kertas amplas.</td>
                                        </tr>
                                        <tr class="bg-gray-50">
                                            <td class="px-4 py-3 text-sm border border-gray-300 font-medium">Kuat rekat
                                                antar layer (kontruksi tekstil)</td>
                                            <td class="px-4 py-3 text-sm border border-gray-300">ISO 252:2007</td>
                                            <td class="px-4 py-3 text-sm border border-gray-300">Dengan metode mengukur
                                                gaya rata-rata yang dibutuhkan untuk melepas penutup dari belt, dan juga
                                                setiap lapis dari yang berikutnya, ditentukan menggunakan laju mesin
                                                traverse yang konstan.</td>
                                        </tr>
                                        <tr>
                                            <td class="px-4 py-3 text-sm border border-gray-300 font-medium">Tebal belt
                                                conveyor (konstruksi tekstil)</td>
                                            <td class="px-4 py-3 text-sm border border-gray-300">ISO 583:2007</td>
                                            <td class="px-4 py-3 text-sm border border-gray-300">Dengan mengukur ketebalan
                                                total benda uji pada setiap titik pengukuran. Melepas penutup atas
                                                sepenuhnya, lalu mengukur ketebalan benda uji sekali lagi pada waktu yang
                                                sama titik-titik pengukuran.</td>
                                        </tr>
                                        <tr class="bg-gray-50">
                                            <td class="px-4 py-3 text-sm border border-gray-300 font-medium">Pull out cord
                                            </td>
                                            <td class="px-4 py-3 text-sm border border-gray-300">ISO 7623:2022</td>
                                            <td class="px-4 py-3 text-sm border border-gray-300">Pengukuran gaya untuk
                                                merobek salah satu kabel warp stell dari belt dengan menerapkan tegangan
                                                tarik sepanjang sumbu kabel.</td>
                                        </tr>
                                        <tr>
                                            <td class="px-4 py-3 text-sm border border-gray-300 font-medium">Tebal belt
                                                conveyor (konstruksi baja)</td>
                                            <td class="px-4 py-3 text-sm border border-gray-300">ISO 7590:2009</td>
                                            <td class="px-4 py-3 text-sm border border-gray-300">Ketebalan total diukur
                                                menggunakan mikrometer pada sejumlah titik tertentu tergantung pada lebar
                                                sabuk. Ketebalan penutup juga diukur: dengan melepas penutup, melakukan
                                                pengukuran lebih lanjut pada titik-titik tertentu yang sama dan menghitung
                                                masing-masing dari ketebalan penutup dengan pengurangan, atau dengan
                                                pengukuran langsung menggunakan alat ukur optik.</td>
                                        </tr>
                                        <tr class="bg-gray-50">
                                            <td class="px-4 py-3 text-sm border border-gray-300 font-medium">Pengusangan
                                            </td>
                                            <td class="px-4 py-3 text-sm border border-gray-300">ISO 188:2012</td>
                                            <td class="px-4 py-3 text-sm border border-gray-300">Benda uji mengalami
                                                kerusakan yang terkendali melalui udara pada suhu tinggi dan tekanan
                                                atmosfer, setelah itu sifat-sifat tertentu diukur dan dibandingkan dengan
                                                benda uji yang tidak diusangkan. Sifat fisik yang bersangkutan harus
                                                digunakan untuk menentukan tingkat kerusakan tetapi, jika tidak ada indikasi
                                                dari sifat ini, direkomendasikan bahwa kekuatan tarik, tegangan pada
                                                perpanjangan menengah, perpanjangan putus (sesuai dengan ISO 37) dan
                                                kekerasan (sesuai dengan ISO 48) diukur.</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Item 5 -->
                <div class="pengujian-item border rounded-xl shadow-sm overflow-hidden">
                    <button type="button"
                        class="pengujian-btn w-full flex justify-between items-center px-6 py-4 hover:bg-gray-50 transition">
                        <h3 class="text-lg font-semibold">PENGUJIAN PRODUK ROL KARET PENGUPAS GABAH</h3>
                        <i class="fas fa-plus pengujian-icon transition-transform duration-300"></i>
                    </button>
                    <div class="pengujian-content max-h-0 overflow-hidden transition-all duration-300">
                        <div class="px-6 py-4 text-gray-600">
                            <div class="overflow-x-auto">
                                <table class="min-w-full divide-y divide-gray-200 border border-gray-300">
                                    <thead class="bg-gray-100">
                                        <tr>
                                            <th
                                                class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider border border-gray-300">
                                                Parameter Pengujian
                                            </th>
                                            <th
                                                class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider border border-gray-300">
                                                Metode Pengujian
                                            </th>
                                            <th
                                                class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider border border-gray-300">
                                                Prinsip Pengujian
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        <tr>
                                            <td class="px-4 py-3 text-sm border border-gray-300 font-medium">Diameter luar
                                            </td>
                                            <td class="px-4 py-3 text-sm border border-gray-300">SNI 1843:2008 / Amd.2:2017
                                            </td>
                                            <td class="px-4 py-3 text-sm border border-gray-300">karet rol dibubut
                                                menggukan mesin, dibagi menjadi 2, diambil bagian karetnya dan dipreparasi
                                                sesuai uji kuat tarik dan kekerasan beserta kikis, sample dipreparasi sesuai
                                                bentuk dumble, dan diuji menggunakan jangka sorong untuk mengukur dimensi.
                                            </td>
                                        </tr>
                                        <tr class="bg-gray-50">
                                            <td class="px-4 py-3 text-sm border border-gray-300 font-medium">Diameter dalam
                                            </td>
                                            <td class="px-4 py-3 text-sm border border-gray-300">SNI 1843:2008 / Amd.2:2017
                                            </td>
                                            <td class="px-4 py-3 text-sm border border-gray-300">-</td>
                                        </tr>
                                        <tr>
                                            <td class="px-4 py-3 text-sm border border-gray-300 font-medium">Diameter
                                                flensa</td>
                                            <td class="px-4 py-3 text-sm border border-gray-300">SNI 1843:2008 / Amd.2:2017
                                            </td>
                                            <td class="px-4 py-3 text-sm border border-gray-300">-</td>
                                        </tr>
                                        <tr class="bg-gray-50">
                                            <td class="px-4 py-3 text-sm border border-gray-300 font-medium">Lingkaran
                                                dasar lubang baut</td>
                                            <td class="px-4 py-3 text-sm border border-gray-300">SNI 1843:2008 / Amd.2:2017
                                            </td>
                                            <td class="px-4 py-3 text-sm border border-gray-300">-</td>
                                        </tr>
                                        <tr>
                                            <td class="px-4 py-3 text-sm border border-gray-300 font-medium">Diameter
                                                lubang baut</td>
                                            <td class="px-4 py-3 text-sm border border-gray-300">SNI 1843:2008 / Amd.2:2017
                                            </td>
                                            <td class="px-4 py-3 text-sm border border-gray-300">-</td>
                                        </tr>
                                        <tr class="bg-gray-50">
                                            <td class="px-4 py-3 text-sm border border-gray-300 font-medium">Lebar rol</td>
                                            <td class="px-4 py-3 text-sm border border-gray-300">SNI 1843:2008 / Amd.2:2017
                                            </td>
                                            <td class="px-4 py-3 text-sm border border-gray-300">-</td>
                                        </tr>
                                        <tr>
                                            <td class="px-4 py-3 text-sm border border-gray-300 font-medium">Lebar dalam
                                            </td>
                                            <td class="px-4 py-3 text-sm border border-gray-300">SNI 1843:2008 / Amd.2:2017
                                            </td>
                                            <td class="px-4 py-3 text-sm border border-gray-300">-</td>
                                        </tr>
                                        <tr class="bg-gray-50">
                                            <td class="px-4 py-3 text-sm border border-gray-300 font-medium">Tebal flensa
                                            </td>
                                            <td class="px-4 py-3 text-sm border border-gray-300">SNI 1843:2008 / Amd.2:2017
                                            </td>
                                            <td class="px-4 py-3 text-sm border border-gray-300">-</td>
                                        </tr>
                                        <tr>
                                            <td class="px-4 py-3 text-sm border border-gray-300 font-medium">Tebal velg
                                            </td>
                                            <td class="px-4 py-3 text-sm border border-gray-300">SNI 1843:2008 / Amd.2:2017
                                            </td>
                                            <td class="px-4 py-3 text-sm border border-gray-300">-</td>
                                        </tr>
                                        <tr class="bg-gray-50">
                                            <td class="px-4 py-3 text-sm border border-gray-300 font-medium">Visual</td>
                                            <td class="px-4 py-3 text-sm border border-gray-300">SNI 1843:2008 / Amd.2:2017
                                            </td>
                                            <td class="px-4 py-3 text-sm border border-gray-300">Dicek retak, gores,
                                                lubang, gelembung, bentuk alur permukaan tidak rata, dan adanya benda asing
                                                yang menempel.</td>
                                        </tr>
                                        <tr>
                                            <td class="px-4 py-3 text-sm border border-gray-300 font-medium">Kekuatan tarik
                                                dan perpanjangan putus</td>
                                            <td class="px-4 py-3 text-sm border border-gray-300">SNI 1843:2008 /
                                                Amd.2:2017<br>ISO 37:2017</td>
                                            <td class="px-4 py-3 text-sm border border-gray-300">Pengujian dilakukan
                                                menggunakan mesin uji tarik (tensile strength machine) dengan mengukur lebar
                                                dan tebal cuplikan, lalu dilakukan test sampai benda uji putus.</td>
                                        </tr>
                                        <tr class="bg-gray-50">
                                            <td class="px-4 py-3 text-sm border border-gray-300 font-medium">Kekerasan
                                                (sebelum pemanasan)</td>
                                            <td class="px-4 py-3 text-sm border border-gray-300">SNI 1843:2008 / Amd.2:2017
                                            </td>
                                            <td class="px-4 py-3 text-sm border border-gray-300">Indentor dengan dimensi
                                                tertentu ditekan dengan gaya yang ditentukan ke dalam benda uji.</td>
                                        </tr>
                                        <tr>
                                            <td class="px-4 py-3 text-sm border border-gray-300 font-medium">Kekerasan
                                                (setelah pemanasan)</td>
                                            <td class="px-4 py-3 text-sm border border-gray-300">SNI 1843:2008 /
                                                Amd.2:2017<br>ISO 188:2012</td>
                                            <td class="px-4 py-3 text-sm border border-gray-300">Memasukan sampel dalam
                                                oven pada suhu dan waktu yang telah ditentukan. Benda uji mengalami
                                                kerusakan pada pada suhu tinggi dan pada waktu tertentu, setelah itu sifat
                                                tertentu diukur dan dibandingkan dengan potongan uji tanpa pengusangan.</td>
                                        </tr>
                                        <tr class="bg-gray-50">
                                            <td class="px-4 py-3 text-sm border border-gray-300 font-medium">Ketahanan
                                                kikis</td>
                                            <td class="px-4 py-3 text-sm border border-gray-300">SNI 1843:2008 /
                                                Amd.2:2017<br>ISO 4649:2017</td>
                                            <td class="px-4 py-3 text-sm border border-gray-300">Membentuk sampel dengan
                                                bentuk silinder, dengan ketebalan dan diameter sesuai standar, menimbang
                                                berat awal dan akhir setelah itu menentukan densitas benda uji. Potongan uji
                                                karet silinder dibuat untuk meluncur di atas lembaran abrasif dengan tingkat
                                                abrasif yang ditentukan di bawah tekanan tertentu pada jarak tertentu.
                                                Potongan uji mungkin berputar atau tidak berputar selama tes. Lembaran
                                                abrasif dilekatkan pada drum berputar silinder yang berputar di mana benda
                                                uji dipegang dan melintasinya. Hilangnya massa benda uji ditentukan dan
                                                digunakan bersama dengan densitas benda uji bahan untuk menghitung
                                                kehilangan volume. Kehilangan volume benda uji dibandingkan dengan referensi
                                                senyawa diuji dalam kondisi yang sama.</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Item 6 -->
                <div class="pengujian-item border rounded-xl shadow-sm overflow-hidden">
                    <button type="button"
                        class="pengujian-btn w-full flex justify-between items-center px-6 py-4 hover:bg-gray-50 transition">
                        <h3 class="text-lg font-semibold">PENGUJIAN PRODUK SOL KARET CETAK</h3>
                        <i class="fas fa-plus pengujian-icon transition-transform duration-300"></i>
                    </button>
                    <div class="pengujian-content max-h-0 overflow-hidden transition-all duration-300">
                        <div class="px-6 py-4 text-gray-600">
                            <!-- Konten akan diisi nanti -->
                        </div>
                    </div>
                </div>

                <!-- Item 7 -->
                <div class="pengujian-item border rounded-xl shadow-sm overflow-hidden">
                    <button type="button"
                        class="pengujian-btn w-full flex justify-between items-center px-6 py-4 hover:bg-gray-50 transition">
                        <h3 class="text-lg font-semibold">PENGUJIAN PRODUK BAN DALAM KENDARAAN BERMOTOR</h3>
                        <i class="fas fa-plus pengujian-icon transition-transform duration-300"></i>
                    </button>
                    <div class="pengujian-content max-h-0 overflow-hidden transition-all duration-300">
                        <div class="px-6 py-4 text-gray-600">
                            <!-- Konten akan diisi nanti -->
                        </div>
                    </div>
                </div>

                <!-- Item 8 -->
                <div class="pengujian-item border rounded-xl shadow-sm overflow-hidden">
                    <button type="button"
                        class="pengujian-btn w-full flex justify-between items-center px-6 py-4 hover:bg-gray-50 transition">
                        <h3 class="text-lg font-semibold">PENGUJIAN PRODUK KARET BANTALAN DERMAGA</h3>
                        <i class="fas fa-plus pengujian-icon transition-transform duration-300"></i>
                    </button>
                    <div class="pengujian-content max-h-0 overflow-hidden transition-all duration-300">
                        <div class="px-6 py-4 text-gray-600">
                            <!-- Konten akan diisi nanti -->
                        </div>
                    </div>
                </div>

                <!-- Item 9 -->
                <div class="pengujian-item border rounded-xl shadow-sm overflow-hidden">
                    <button type="button"
                        class="pengujian-btn w-full flex justify-between items-center px-6 py-4 hover:bg-gray-50 transition">
                        <h3 class="text-lg font-semibold">PENGUJIAN PRODUK VULKANISAT KARET / KARET SECARA UMUM</h3>
                        <i class="fas fa-plus pengujian-icon transition-transform duration-300"></i>
                    </button>
                    <div class="pengujian-content max-h-0 overflow-hidden transition-all duration-300">
                        <div class="px-6 py-4 text-gray-600">
                            <!-- Konten akan diisi nanti -->
                        </div>
                    </div>
                </div>

                <!-- Item 10 -->
                <div class="pengujian-item border rounded-xl shadow-sm overflow-hidden">
                    <button type="button"
                        class="pengujian-btn w-full flex justify-between items-center px-6 py-4 hover:bg-gray-50 transition">
                        <h3 class="text-lg font-semibold">PENGUJIAN PRODUK SEPATU PENGAMAN</h3>
                        <i class="fas fa-plus pengujian-icon transition-transform duration-300"></i>
                    </button>
                    <div class="pengujian-content max-h-0 overflow-hidden transition-all duration-300">
                        <div class="px-6 py-4 text-gray-600">
                            <!-- Konten akan diisi nanti -->
                        </div>
                    </div>
                </div>

                <!-- Item 11 -->
                <div class="pengujian-item border rounded-xl shadow-sm overflow-hidden">
                    <button type="button"
                        class="pengujian-btn w-full flex justify-between items-center px-6 py-4 hover:bg-gray-50 transition">
                        <h3 class="text-lg font-semibold">PENGUJIAN PRODUK SEPATU KULIT SISTEM LEM BAGIAN 1: WANITA</h3>
                        <i class="fas fa-plus pengujian-icon transition-transform duration-300"></i>
                    </button>
                    <div class="pengujian-content max-h-0 overflow-hidden transition-all duration-300">
                        <div class="px-6 py-4 text-gray-600">
                            <!-- Konten akan diisi nanti -->
                        </div>
                    </div>
                </div>

                <!-- Item 12 -->
                <div class="pengujian-item border rounded-xl shadow-sm overflow-hidden">
                    <button type="button"
                        class="pengujian-btn w-full flex justify-between items-center px-6 py-4 hover:bg-gray-50 transition">
                        <h3 class="text-lg font-semibold">PENGUJIAN PRODUK SEPATU KULIT SISTEM LEM BAGIAN 2 : PRIA</h3>
                        <i class="fas fa-plus pengujian-icon transition-transform duration-300"></i>
                    </button>
                    <div class="pengujian-content max-h-0 overflow-hidden transition-all duration-300">
                        <div class="px-6 py-4 text-gray-600">
                            <!-- Konten akan diisi nanti -->
                        </div>
                    </div>
                </div>

                <!-- Item 13 -->
                <div class="pengujian-item border rounded-xl shadow-sm overflow-hidden">
                    <button type="button"
                        class="pengujian-btn w-full flex justify-between items-center px-6 py-4 hover:bg-gray-50 transition">
                        <h3 class="text-lg font-semibold">PENGUJIAN PRODUK BAN MOBIL PENUMPANG</h3>
                        <i class="fas fa-plus pengujian-icon transition-transform duration-300"></i>
                    </button>
                    <div class="pengujian-content max-h-0 overflow-hidden transition-all duration-300">
                        <div class="px-6 py-4 text-gray-600">
                            <!-- Konten akan diisi nanti -->
                        </div>
                    </div>
                </div>

                <!-- Item 14 -->
                <div class="pengujian-item border rounded-xl shadow-sm overflow-hidden">
                    <button type="button"
                        class="pengujian-btn w-full flex justify-between items-center px-6 py-4 hover:bg-gray-50 transition">
                        <h3 class="text-lg font-semibold">PENGUJIAN PRODUK BAN SEPEDA MOTOR</h3>
                        <i class="fas fa-plus pengujian-icon transition-transform duration-300"></i>
                    </button>
                    <div class="pengujian-content max-h-0 overflow-hidden transition-all duration-300">
                        <div class="px-6 py-4 text-gray-600">
                            <!-- Konten akan diisi nanti -->
                        </div>
                    </div>
                </div>

                <!-- Item 15 -->
                <div class="pengujian-item border rounded-xl shadow-sm overflow-hidden">
                    <button type="button"
                        class="pengujian-btn w-full flex justify-between items-center px-6 py-4 hover:bg-gray-50 transition">
                        <h3 class="text-lg font-semibold">PENGUJIAN PRODUK BAN TRUK DAN BUS</h3>
                        <i class="fas fa-plus pengujian-icon transition-transform duration-300"></i>
                    </button>
                    <div class="pengujian-content max-h-0 overflow-hidden transition-all duration-300">
                        <div class="px-6 py-4 text-gray-600">
                            <!-- Konten akan diisi nanti -->
                        </div>
                    </div>
                </div>

                <!-- Item 16 -->
                <div class="pengujian-item border rounded-xl shadow-sm overflow-hidden">
                    <button type="button"
                        class="pengujian-btn w-full flex justify-between items-center px-6 py-4 hover:bg-gray-50 transition">
                        <h3 class="text-lg font-semibold">PENGUJIAN PRODUK BAN TRUK RINGAN</h3>
                        <i class="fas fa-plus pengujian-icon transition-transform duration-300"></i>
                    </button>
                    <div class="pengujian-content max-h-0 overflow-hidden transition-all duration-300">
                        <div class="px-6 py-4 text-gray-600">
                            <!-- Konten akan diisi nanti -->
                        </div>
                    </div>
                </div>

                <!-- Item 17 -->
                <div class="pengujian-item border rounded-xl shadow-sm overflow-hidden">
                    <button type="button"
                        class="pengujian-btn w-full flex justify-between items-center px-6 py-4 hover:bg-gray-50 transition">
                        <h3 class="text-lg font-semibold">PENGUJIAN PRODUK KARUNG TENUN POLIPROPILENA (PP) UNTUK BAHAN
                            PANGAN CURAH</h3>
                        <i class="fas fa-plus pengujian-icon transition-transform duration-300"></i>
                    </button>
                    <div class="pengujian-content max-h-0 overflow-hidden transition-all duration-300">
                        <div class="px-6 py-4 text-gray-600">
                            <!-- Konten akan diisi nanti -->
                        </div>
                    </div>
                </div>

                <!-- Item 18 -->
                <div class="pengujian-item border rounded-xl shadow-sm overflow-hidden">
                    <button type="button"
                        class="pengujian-btn w-full flex justify-between items-center px-6 py-4 hover:bg-gray-50 transition">
                        <h3 class="text-lg font-semibold">PENGUJIAN PRODUK BENANG</h3>
                        <i class="fas fa-plus pengujian-icon transition-transform duration-300"></i>
                    </button>
                    <div class="pengujian-content max-h-0 overflow-hidden transition-all duration-300">
                        <div class="px-6 py-4 text-gray-600">
                            <!-- Konten akan diisi nanti -->
                        </div>
                    </div>
                </div>

                <!-- Item 19 -->
                <div class="pengujian-item border rounded-xl shadow-sm overflow-hidden">
                    <button type="button"
                        class="pengujian-btn w-full flex justify-between items-center px-6 py-4 hover:bg-gray-50 transition">
                        <h3 class="text-lg font-semibold">PENGUJIAN PRODUK KARUNG TENUN PLASTIK POLIPROPILENA (PP) BLOCK
                            BOTTOM SINGLE PLY UNTUK KEMASAN SEMEN</h3>
                        <i class="fas fa-plus pengujian-icon transition-transform duration-300"></i>
                    </button>
                    <div class="pengujian-content max-h-0 overflow-hidden transition-all duration-300">
                        <div class="px-6 py-4 text-gray-600">
                            <!-- Konten akan diisi nanti -->
                        </div>
                    </div>
                </div>

                <!-- Item 20 -->
                <div class="pengujian-item border rounded-xl shadow-sm overflow-hidden">
                    <button type="button"
                        class="pengujian-btn w-full flex justify-between items-center px-6 py-4 hover:bg-gray-50 transition">
                        <h3 class="text-lg font-semibold">PENGUJIAN PRODUK SEPATU BOT PVC UNTUK KEPERLUAN INDUSTRI SECARA
                            UMUM</h3>
                        <i class="fas fa-plus pengujian-icon transition-transform duration-300"></i>
                    </button>
                    <div class="pengujian-content max-h-0 overflow-hidden transition-all duration-300">
                        <div class="px-6 py-4 text-gray-600">
                            <!-- Konten akan diisi nanti -->
                        </div>
                    </div>
                </div>

                <!-- Item 21 -->
                <div class="pengujian-item border rounded-xl shadow-sm overflow-hidden">
                    <button type="button"
                        class="pengujian-btn w-full flex justify-between items-center px-6 py-4 hover:bg-gray-50 transition">
                        <h3 class="text-lg font-semibold">PENGUJIAN PRODUK KARET KONVENSIONAL (RSS)</h3>
                        <i class="fas fa-plus pengujian-icon transition-transform duration-300"></i>
                    </button>
                    <div class="pengujian-content max-h-0 overflow-hidden transition-all duration-300">
                        <div class="px-6 py-4 text-gray-600">
                            <!-- Konten akan diisi nanti -->
                        </div>
                    </div>
                </div>

                <!-- Item 22 - RUANG LINGKUP PENGUJIAN BBSPJIKKP -->
                <div class="pengujian-item border rounded-xl shadow-sm overflow-hidden">
                    <button type="button"
                        class="pengujian-btn w-full flex justify-between items-center px-6 py-4 hover:bg-gray-50 transition">
                        <h3 class="text-lg font-semibold">RUANG LINGKUP PENGUJIAN BBSPJIKKP</h3>
                        <i class="fas fa-plus pengujian-icon transition-transform duration-300"></i>
                    </button>
                    <div class="pengujian-content max-h-0 overflow-hidden transition-all duration-300">
                        <div class="px-6 py-4 text-gray-600">
                            <!-- Konten akan diisi nanti -->
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section Tarif Uji -->
        <section id="tarif-uji" class="mb-16">
            <h2 class="text-3xl font-bold text-gray-900 mb-4"><?php echo e(__('pengujian.test_rate')); ?></h2>
            <div class="bg-white border rounded-lg p-6 shadow-sm">
                <p class="text-gray-700 mb-4">
                    <?php echo e(__('Complete information regarding testing service rates can be downloaded through the following document:')); ?>

                </p>
                <a href="https://bbkkp.kemenperin.go.id/storage/files/page/tarif/Kep.%2040%20Penetapan%20Tarif%20Jasa%20Layanan%20BLU%20BBSPJIKKP%202025%20uji.pdf"
                    target="_blank" rel="noopener noreferrer"
                    class="inline-block bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-lg font-semibold transition">
                    <i class="fas fa-download mr-2"></i><?php echo e(__('pengujian.download')); ?> <?php echo e(__('pengujian.test_rate')); ?>

                </a>
            </div>
        </section>

        <!-- Section SOP Pengujian -->
        <section id="sop-pengujian" class="mb-16">
            <h2 class="text-3xl font-bold text-gray-900 mb-6"><?php echo e(__('pengujian.sop_testing')); ?></h2>

            <div class="space-y-6">
                <div class="bg-white border rounded-lg p-6 shadow-sm">
                    <h3 class="text-xl font-semibold text-gray-900 mb-3"><?php echo e(__('pengujian.sop_testing_services')); ?></h3>
                    <p class="text-gray-700 mb-4">
                        <?php echo e(__('pengujian.completion_time')); ?>: <?php echo e(__('pengujian.completion_time_desc')); ?>

                    </p>
                </div>

                <div class="bg-white border rounded-lg p-6 shadow-sm">
                    <h3 class="text-xl font-semibold text-gray-900 mb-3">SOP Layanan Jasa Pengujian</h3>
                    <a href="https://bbkkp.kemenperin.go.id/storage/files/page/SOP%20Layanan%20Jasa%20Pengujian.pdf"
                        target="_blank" rel="noopener noreferrer"
                        class="inline-block bg-green-600 hover:bg-green-700 text-white px-6 py-2 rounded-lg font-semibold transition">
                        <i class="fas fa-download mr-2"></i>Unduh
                    </a>
                </div>
            </div>
        </section>
    </div>

    <?php $__env->startPush('scripts'); ?>
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const pengujianItems = document.querySelectorAll(".pengujian-item");

                pengujianItems.forEach(item => {
                    const btn = item.querySelector(".pengujian-btn");
                    const content = item.querySelector(".pengujian-content");
                    const icon = item.querySelector(".pengujian-icon");

                    btn.addEventListener("click", () => {
                        // Toggle FAQ yang diklik
                        if (content.style.maxHeight) {
                            content.style.maxHeight = null;
                            icon.classList.remove("rotate-45");
                            icon.classList.remove("fa-times");
                            icon.classList.add("fa-plus");
                        } else {
                            // Tutup semua item lain
                            pengujianItems.forEach(other => {
                                if (other !== item) {
                                    other.querySelector(".pengujian-content").style.maxHeight =
                                        null;
                                    const otherIcon = other.querySelector(".pengujian-icon");
                                    otherIcon.classList.remove("rotate-45");
                                    otherIcon.classList.remove("fa-times");
                                    otherIcon.classList.add("fa-plus");
                                }
                            });

                            content.style.maxHeight = content.scrollHeight + "px";
                            icon.classList.remove("fa-plus");
                            icon.classList.add("fa-times");
                            icon.classList.add("rotate-45");
                        }
                    });
                });
            });
        </script>
    <?php $__env->stopPush(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\alamak\resources\views/pages/pengujian/index.blade.php ENDPATH**/ ?>