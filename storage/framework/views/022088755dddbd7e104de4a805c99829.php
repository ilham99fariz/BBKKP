

<?php $__env->startSection('content'); ?>
<style>
        .survey-form-wrapper {
            margin-top: 20px;
            margin-bottom: 40px;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
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

<div class="survey-form-wrapper">
    <div class="survey-container">
        <form id="surveyForm" action="<?php echo e(route('survey.store')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <!-- PAGE 1: Data Responden -->
            <div class="page active" data-page="1">
                <div class="page-indicator">
                    <h2><?php echo e(__('forms.respondent_data')); ?></h2>
                    <div class="page-number"><?php echo e(__('forms.page_of')); ?> 1 <?php echo e(__('forms.page_of')); ?> 4</div>
                </div>

                <div class="question-group">
                    <label class="question-label"><?php echo e(__('forms.service_type')); ?> <span
                            class="required">*</span></label>
                    <div class="checkbox-grid">
                        <label class="checkbox-item">
                            <input type="checkbox" name="layanan" value="Pengujian">
                            <?php echo e(__('forms.service_type_testing')); ?>

                        </label>
                        <label class="checkbox-item">
                            <input type="checkbox" name="layanan" value="Kalibrasi">
                            <?php echo e(__('forms.service_type_calibration')); ?>

                        </label>
                        <label class="checkbox-item">
                            <input type="checkbox" name="layanan" value="Sertifikasi">
                            <?php echo e(__('forms.service_type_certification')); ?>

                        </label>
                        <label class="checkbox-item">
                            <input type="checkbox" name="layanan" value="Sertifikasi Profesi">
                            <?php echo e(__('forms.service_type_professional_cert')); ?>

                        </label>
                        <label class="checkbox-item">
                            <input type="checkbox" name="layanan" value="Konsultansi / Bimbingan Teknis">
                            <?php echo e(__('forms.service_type_consultation')); ?>

                        </label>
                        <label class="checkbox-item">
                            <input type="checkbox" name="layanan" value="Pedampingan / Pelatihan">
                            <?php echo e(__('forms.service_type_mentoring')); ?>

                        </label>
                        <label class="checkbox-item">
                            <input type="checkbox" name="layanan" value="Validasi & Verifikasi GRK">
                            <?php echo e(__('forms.service_type_validation_grk')); ?>

                        </label>
                        <label class="checkbox-item">
                            <input type="checkbox" name="layanan" value="Verifikasi TKDN">
                            <?php echo e(__('forms.service_type_verification_tkdn')); ?>

                        </label>
                        <label class="checkbox-item">
                            <input type="checkbox" name="layanan" value="Inspeksi">
                            <?php echo e(__('forms.service_type_inspection')); ?>

                        </label>
                        <label class="checkbox-item">
                            <input type="checkbox" name="layanan" value="Uji Profisiensi">
                            <?php echo e(__('forms.service_type_proficiency')); ?>

                        </label>
                        <label class="checkbox-item">
                            <input type="checkbox" name="layanan" value="Audit Teknologi">
                            <?php echo e(__('forms.service_type_technology_audit')); ?>

                        </label>
                        <label class="checkbox-item">
                            <input type="checkbox" name="layanan" value="Miniplant Kulit, Karet, dan Plastik">
                            <?php echo e(__('forms.service_type_mini_plant')); ?>

                        </label>
                        <label class="checkbox-item">
                            <input type="checkbox" name="layanan" value="Pemeriksaan Halal">
                            <?php echo e(__('forms.service_type_halal_check')); ?>

                        </label>
                    </div>
                    <input type="text" name="layanan_lainnya" placeholder="<?php echo e(__('forms.service_type_other')); ?>"
                        style="margin-top: 12px;">
                </div>

                <div class="question-group">
                    <label class="question-label"><?php echo e(__('forms.name')); ?> <span class="required">*</span></label>
                    <input type="text" name="nama" required placeholder="<?php echo e(__('forms.name')); ?>">
                </div>

                <div class="question-group">
                    <label class="question-label"><?php echo e(__('forms.contact_info')); ?> <span class="required">*</span></label>
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
                    <label class="question-label"><?php echo e(__('forms.phone')); ?> <span class="required">*</span></label>
                    <input type="tel" name="telepon" required placeholder="08xxxxxxxxxx">
                </div>

                <div class="question-group">
                    <label class="question-label"><?php echo e(__('forms.email')); ?> <span class="required">*</span></label>
                    <input type="email" name="email" required placeholder="contoh@email.com">
                </div>

                <div class="question-group">
                    <label class="question-label"><?php echo e(__('forms.education_level')); ?> <span class="required">*</span></label>
                    <select name="pendidikan" required>
                        <option value=""><?php echo e(__('forms.choose_option')); ?></option>
                        <option value="SD"><?php echo e(__('forms.education_sd')); ?></option>
                        <option value="SMP"><?php echo e(__('forms.education_smp')); ?></option>
                        <option value="SMA/SMK"><?php echo e(__('forms.education_sma')); ?></option>
                        <option value="D3"><?php echo e(__('forms.education_d3')); ?></option>
                        <option value="S1"><?php echo e(__('forms.education_s1')); ?></option>
                        <option value="S2"><?php echo e(__('forms.education_s2')); ?></option>
                        <option value="S3"><?php echo e(__('forms.education_s3')); ?></option>
                    </select>
                </div>

                <div class="question-group">
                    <label class="question-label"><?php echo e(__('forms.company_name')); ?> <span class="required">*</span></label>
                    <input type="text" name="instansi" required placeholder="<?php echo e(__('forms.company_name')); ?>">
                </div>

                <div class="question-group">
                    <label class="question-label"><?php echo e(__('forms.current_position')); ?> <span class="required">*</span></label>
                    <input type="text" name="pekerjaan" required placeholder="<?php echo e(__('forms.current_position')); ?>">
                </div>

                <div class="button-group">
                    <button type="button" class="btn btn-next" onclick="nextPage()"><?php echo e(__('forms.next')); ?></button>
                </div>
            </div>

            <!-- PAGE 2: Kepuasan Pelanggan -->
            <div class="page" data-page="2">
                <div class="page-indicator">
                    <h2><?php echo e(__('forms.customer_satisfaction')); ?></h2>
                    <div class="page-number"><?php echo e(__('forms.page_of')); ?> 2 <?php echo e(__('forms.page_of')); ?> 4</div>
                </div>

                <div class="info-text">
                    <?php echo e(__('forms.satisfaction_info')); ?>

                </div>

                <div class="question-group">
                    <label class="question-label"><?php echo e(__('forms.appropriate_requirements')); ?> <span
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
                    <label class="question-label"><?php echo e(__('forms.ease_of_procedure')); ?> <span class="required">*</span></label>
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
                    <label class="question-label"><?php echo e(__('forms.timely_service')); ?> <span class="required">*</span></label>
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
                    <label class="question-label"><?php echo e(__('forms.cost_accuracy')); ?> <span class="required">*</span></label>
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
                    <label class="question-label"><?php echo e(__('forms.accuracy_results')); ?> <span class="required">*</span></label>
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
                    <label class="question-label"><?php echo e(__('forms.officer_capability')); ?> <span
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
                    <label class="question-label"><?php echo e(__('forms.officer_attitude')); ?>

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
                    <label class="question-label"><?php echo e(__('forms.infrastructure_quality')); ?> <span class="required">*</span></label>
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
                    <label class="question-label"><?php echo e(__('forms.complaint_handling')); ?> <span
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
                    <label class="question-label"><?php echo e(__('forms.improvement_suggestions')); ?> <span class="required">*</span></label>
                    <textarea name="saran" required placeholder="<?php echo e(__('forms.improvement_suggestions')); ?>..."></textarea>
                </div>

                <div class="question-group">
                    <label class="question-label"><?php echo e(__('forms.general_comments')); ?> <span
                            class="required">*</span></label>
                    <textarea name="jasa_dibutuhkan" required
                        placeholder="<?php echo e(__('forms.general_comments')); ?>..."></textarea>
                </div>

                <div class="button-group">
                    <button type="button" class="btn btn-prev" onclick="prevPage()"><?php echo e(__('forms.previous')); ?></button>
                    <button type="button" class="btn btn-next" onclick="nextPage()"><?php echo e(__('forms.next')); ?></button>
                </div>
            </div>

            <!-- PAGE 3: Persepsi Korupsi -->
            <div class="page" data-page="3">
                <div class="page-indicator">
                    <h2><?php echo e(__('forms.corruption_perception')); ?></h2>
                    <div class="page-number"><?php echo e(__('forms.page_of')); ?> 3 <?php echo e(__('forms.page_of')); ?> 4</div>
                </div>

                <div class="info-text">
                    <?php echo e(__('forms.corruption_info')); ?>

                </div>

                <div class="question-group">
                    <label class="question-label"><?php echo e(__('forms.no_indication_corruption')); ?> <span class="required">*</span></label>
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
                    <h2><?php echo e(__('forms.nps_title')); ?></h2>
                    <div class="page-number"><?php echo e(__('forms.page_of')); ?> 4 <?php echo e(__('forms.page_of')); ?> 4</div>
                </div>

                <div class="question-group">
                    <label class="question-label"><?php echo e(__('forms.information_source')); ?> <span class="required">*</span></label>
                    <div class="checkbox-grid">
                        <label class="checkbox-item">
                            <input type="checkbox" name="info_sumber" value="Petugas Pelayanan">
                            <?php echo e(__('forms.info_source_officer')); ?>

                        </label>
                        <label class="checkbox-item">
                            <input type="checkbox" name="info_sumber" value="Website">
                            <?php echo e(__('forms.info_source_website')); ?>

                        </label>
                        <label class="checkbox-item">
                            <input type="checkbox" name="info_sumber" value="Media Sosial">
                            <?php echo e(__('forms.info_source_social')); ?>

                        </label>
                        <label class="checkbox-item">
                            <input type="checkbox" name="info_sumber" value="Media Massa / Cetak">
                            <?php echo e(__('forms.info_source_print_media')); ?>

                        </label>
                        <label class="checkbox-item">
                            <input type="checkbox" name="info_sumber" value="Pameran">
                            <?php echo e(__('forms.info_source_exhibition')); ?>

                        </label>
                        <label class="checkbox-item">
                            <input type="checkbox" name="info_sumber" value="Rekan Bisnis">
                            <?php echo e(__('forms.info_source_business_associate')); ?>

                        </label>
                        <label class="checkbox-item">
                            <input type="checkbox" name="info_sumber" value="Kerabat">
                            <?php echo e(__('forms.info_source_relative')); ?>

                        </label>
                    </div>
                    <input type="text" name="info_sumber_lainnya" placeholder="<?php echo e(__('forms.service_type_other')); ?>"
                        style="margin-top: 12px;">
                </div>

                <div class="question-group">
                    <label class="question-label"><?php echo e(__('forms.service_duration')); ?> <span class="required">*</span></label>
                    <div class="radio-group">
                        <label class="radio-item">
                            <input type="radio" name="lama_penggunaan" value="1 tahun" required>
                            <?php echo e(__('forms.duration_1_year')); ?>

                        </label>
                        <label class="radio-item">
                            <input type="radio" name="lama_penggunaan" value="2 tahun">
                            <?php echo e(__('forms.duration_2_years')); ?>

                        </label>
                        <label class="radio-item">
                            <input type="radio" name="lama_penggunaan" value="3 tahun">
                            <?php echo e(__('forms.duration_3_years')); ?>

                        </label>
                        <label class="radio-item">
                            <input type="radio" name="lama_penggunaan" value="> 4 tahun">
                            <?php echo e(__('forms.duration_above_4_years')); ?>

                        </label>
                    </div>
                </div>

                <div class="question-group">
                    <label class="question-label"><?php echo e(__('forms.nps_likelihood')); ?> <span class="required">*</span></label>
                    <div class="nps-container">
                        <div class="nps-value" id="npsValue">5</div>
                        <div class="nps-slider">
                            <input type="range" name="nps_score" id="npsSlider" min="0" max="10" value="5" required>
                        </div>
                        <div class="nps-labels">
                            <span><?php echo e(__('forms.nps_unlikely')); ?></span>
                            <span><?php echo e(__('forms.nps_likely')); ?></span>
                        </div>
                    </div>
                </div>

                <div class="question-group">
                    <label class="question-label"><?php echo e(__('forms.nps_reason')); ?> <span
                            class="required">*</span></label>
                    <textarea name="nps_alasan" required placeholder="<?php echo e(__('forms.nps_reason')); ?>..."></textarea>
                </div>

                <div class="success-message" id="successMessage">
                    <strong><?php echo e(__('forms.testimonial_success')); ?></strong><br>
                    <?php echo e(__('forms.survey_success')); ?>

                </div>

                <div class="button-group">
                    <button type="button" class="btn btn-prev" onclick="prevPage()"><?php echo e(__('forms.previous')); ?></button>
                    <button type="submit" class="btn btn-submit"><?php echo e(__('forms.submit')); ?></button>
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
                fetch('<?php echo e(route("survey.store")); ?>', {
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
</style>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\alamak\resources\views/survey/form.blade.php ENDPATH**/ ?>