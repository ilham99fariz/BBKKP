<!-- Footer -->
<footer class="bg-gradient-to-r from-blue-500 to-blue-600 text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        
        <!-- Charts Section -->
        <?php if((isset($serviceRatings) && $serviceRatings->count() > 0) || (isset($ipkRatings) && $ipkRatings->count() > 0) || (isset($curveRatings) && $curveRatings->count() > 0)): ?>
        <div class="mb-8">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-4 items-start">
                <!-- Kepuasan Pelanggan (Single Chart from first serviceRating) -->
                <?php if(isset($serviceRatings) && $serviceRatings->count() > 0): ?>
                <?php $rating = $serviceRatings->first(); ?>
                <div class="rounded-xl p-4 h-full flex flex-col">
                    <h3 class="text-base font-bold mb-4 text-center uppercase tracking-wide"><?php echo e($rating->getTitleByLocale() ?? 'Kepuasan Pelanggan'); ?></h3>
                    <div class="rounded-lg p-3 flex flex-col">
                        <!-- Vertical Bar Chart -->
                        <div class="flex items-end">
                            <!-- Y-Axis Scale -->
                            <div class="flex flex-col justify-between text-[8px] text-white/60 w-1 min-w-5 pr-0 text-right" style="height: 110px;">
                                <span style="line-height: 1; transform: translateY(-50%);">10</span>
                                <span style="line-height: 1; transform: translateY(-40%);">9</span>
                                <span style="line-height: 1; transform: translateY(-30%);">8</span>
                                <span style="line-height: 1; transform: translateY(-20%);">7</span>
                                <span style="line-height: 1; transform: translateY(-15%);">6</span>
                                <span style="line-height: 1; transform: translateY(-5%);">5</span>
                                <span style="line-height: 1; transform: translateY(3%);">4</span>
                                <span style="line-height: 1; transform: translateY(15%);">3</span>
                                <span style="line-height: 1; transform: translateY(20%);">2</span>
                                <span style="line-height: 1; transform: translateY(30%);">1</span>
                                <span style="line-height: 1; transform: translateY(50%);">0</span>
                            </div>
                            
                            <!-- Chart Area with Grid -->
                            <div class="flex-1 relative" style="height: 110px;">
                                <!-- Grid Lines -->
                                <div class="absolute inset-0 flex flex-col justify-between pointer-events-none">
                                    <div class="border-t border-white/20 w-full"></div>
                                    <div class="border-t border-white/10 w-full"></div>
                                    <div class="border-t border-white/10 w-full"></div>
                                    <div class="border-t border-white/10 w-full"></div>
                                    <div class="border-t border-white/10 w-full"></div>
                                    <div class="border-t border-white/15 w-full"></div>
                                    <div class="border-t border-white/10 w-full"></div>
                                    <div class="border-t border-white/10 w-full"></div>
                                    <div class="border-t border-white/10 w-full"></div>
                                    <div class="border-t border-white/10 w-full"></div>
                                    <div class="border-t border-white/20 w-full"></div>
                                </div>
                                
                                <!-- Bars Container -->
                                <div class="absolute inset-0 flex items-end justify-center space-x-1 px-2">
                                    <?php for($i = 1; $i <= 5; $i++): ?>
                                    <div class="relative group flex-1 max-w-8 h-full flex flex-col cursor-pointer" x-data="{ showPopup: false }" @click="showPopup = !showPopup" @click.away="showPopup = false" @mouseenter="showPopup = true" @mouseleave="showPopup = false">
                                        <div class="w-full rounded-t relative overflow-hidden flex-1">
                                            <div class="absolute bottom-0 w-full rounded-t transition-all duration-700 ease-out group-hover:brightness-125"
                                                style="height: <?php echo e($rating->{'percentage'.$i}); ?>%; background-color: <?php echo e($rating->{'color'.$i}); ?>;">
                                            </div>
                                        </div>
                                        <div x-show="showPopup" x-transition class="absolute -top-10 left-1/2 transform -translate-x-1/2 bg-gray-900 text-white px-3 py-2 rounded-lg text-xs font-bold shadow-lg z-30 whitespace-nowrap">
                                            <?php echo e($rating->{'label_year'.$i}); ?>: <?php echo e(number_format($rating->{'percentage'.$i} / 10, 2)); ?>

                                            <div class="absolute bottom-0 left-1/2 transform -translate-x-1/2 translate-y-full border-4 border-transparent border-t-gray-900"></div>
                                        </div>
                                    </div>
                                    <?php endfor; ?>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Year Labels Below Bars -->
                        <div class="flex">
                            <div class="w-1 min-w-5 pr-0 text-right"></div>
                                <div class="flex-1 flex justify-center space-x-1 px-2 mt-1">
                                <?php for($i = 1; $i <= 5; $i++): ?>
                                <div class="flex-1 max-w-8 text-center">
                                    <span class="text-[9px] text-white/90"><?php echo e($rating->{'label_year'.$i}); ?></span>
                                </div>
                                <?php endfor; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endif; ?>

                <!-- Indeks Persepsi Korupsi (IPK) -->
                <?php if(isset($ipkRatings) && $ipkRatings->count() > 0): ?>
                <?php 
                    $ipk = $ipkRatings->first(); 
                    $maxScale = $ipk->max_scale ?: 4;
                ?>
                <div class="rounded-xl p-4 h-full flex flex-col">
                    <h3 class="text-base font-bold mb-4 text-center uppercase tracking-wide"><?php echo e($ipk->getTitleByLocale() ?? 'Indeks Persepsi Korupsi'); ?></h3>
                    <div class="rounded-lg p-3 flex flex-col">
                        <!-- Vertical Bar Chart -->
                        <div class="flex items-end">
                            <!-- Y-Axis Scale (Dynamic based on max_scale) -->
                            <div class="flex flex-col justify-between text-[8px] text-white/60 w-1 min-w-5 pr-0 text-right" style="height: 110px;">
                                <span style="line-height: 1; transform: translateY(-50%);"><?php echo e($maxScale); ?></span>
                                <span style="line-height: 1; transform: translateY(-25%);"><?php echo e($maxScale * 0.75); ?></span>
                                <span style="line-height: 1; transform: translateY(0%);"><?php echo e($maxScale * 0.5); ?></span>
                                <span style="line-height: 1; transform: translateY(25%);"><?php echo e($maxScale * 0.25); ?></span>
                                <span style="line-height: 1; transform: translateY(50%);">0</span>
                            </div>
                            
                            <!-- Chart Area with Grid -->
                            <div class="flex-1 relative" style="height: 110px;">
                                <!-- Grid Lines -->
                                <div class="absolute inset-0 flex flex-col justify-between pointer-events-none">
                                    <div class="border-t border-white/20 w-full"></div>
                                    <div class="border-t border-white/10 w-full"></div>
                                    <div class="border-t border-white/10 w-full"></div>
                                    <div class="border-t border-white/10 w-full"></div>
                                    <div class="border-t border-white/20 w-full"></div>
                                </div>
                                
                                <!-- Bars Container -->
                                <div class="absolute inset-0 flex items-end justify-center space-x-1 px-2">
                                    <?php for($i = 1; $i <= 5; $i++): ?>
                                    <div class="relative group flex-1 max-w-8 h-full flex flex-col cursor-pointer" x-data="{ showPopup: false }" @click="showPopup = !showPopup" @click.away="showPopup = false" @mouseenter="showPopup = true" @mouseleave="showPopup = false">
                                        <div class="w-full rounded-t relative overflow-hidden flex-1">
                                            <div class="absolute bottom-0 w-full rounded-t transition-all duration-700 ease-out group-hover:brightness-125"
                                                style="height: <?php echo e($ipk->{'percentage'.$i}); ?>%; background-color: <?php echo e($ipk->{'color'.$i}); ?>;">
                                            </div>
                                        </div>
                                        <div x-show="showPopup" x-transition class="absolute -top-10 left-1/2 transform -translate-x-1/2 bg-gray-900 text-white px-3 py-2 rounded-lg text-xs font-bold shadow-lg z-30 whitespace-nowrap">
                                            <?php echo e($ipk->{'label_year'.$i}); ?>: <?php echo e(number_format($ipk->{'year'.$i}, 2)); ?>

                                            <div class="absolute bottom-0 left-1/2 transform -translate-x-1/2 translate-y-full border-4 border-transparent border-t-gray-900"></div>
                                        </div>
                                    </div>
                                    <?php endfor; ?>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Year Labels Below Bars -->
                        <div class="flex">
                            <div class="w-1 min-w-5 pr-0 text-right"></div>
                                <div class="flex-1 flex justify-center space-x-1 px-2 mt-1">
                                <?php for($i = 1; $i <= 5; $i++): ?>
                                <div class="flex-1 max-w-8 text-center">
                                    <span class="text-[9px] text-white/90"><?php echo e($ipk->{'label_year'.$i}); ?></span>
                                </div>
                                <?php endfor; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endif; ?>

                <!-- Keluhan Pelanggan (First curve chart only) -->
                <?php if(isset($curveRatings) && $curveRatings->count() > 0): ?>
                <?php $curve = $curveRatings->first(); ?>
                <div class="rounded-xl p-4 h-full flex flex-col">
                    <h3 class="text-base font-bold mb-4 text-center uppercase tracking-wide"><?php echo e($curve->getTitleByLocale() ?? 'Keluhan Pelanggan'); ?></h3>
                    <div class="rounded-lg p-3 flex flex-col">
                        
                        <!-- Curve/Line Chart -->
                        <div class="flex items-end">
                            <!-- Y-Axis Scale (0-6) -->
                            <div class="flex flex-col justify-between text-[8px] text-white/60 w-1 min-w-5 pr-0 text-right" style="height: 110px;">
                                <span style="line-height: 1; transform: translateY(-50%);">6</span>
                                <span style="line-height: 1; transform: translateY(-30%);">5</span>
                                <span style="line-height: 1; transform: translateY(-10%);">4</span>
                                <span style="line-height: 1; transform: translateY(10%);">3</span>
                                <span style="line-height: 1; transform: translateY(30%);">2</span>
                                <span style="line-height: 1; transform: translateY(40%);">1</span>
                                <span style="line-height: 1; transform: translateY(50%);">0</span>
                            </div>
                            
                            <!-- Chart Area with Grid and Curve -->
                            <div class="flex-1 relative" style="height: 110px;">
                                <!-- Grid Lines - 7 lines for scale 0-6 -->
                                <div class="absolute inset-0 flex flex-col justify-between pointer-events-none">
                                    <div class="border-t border-white/20 w-full"></div>
                                    <div class="border-t border-white/10 w-full"></div>
                                    <div class="border-t border-white/10 w-full"></div>
                                    <div class="border-t border-white/15 w-full"></div>
                                    <div class="border-t border-white/10 w-full"></div>
                                    <div class="border-t border-white/10 w-full"></div>
                                    <div class="border-t border-white/20 w-full"></div>
                                </div>
                                
                                <!-- SVG Curve Chart -->
                                <svg class="absolute inset-0 w-full h-full" viewBox="0 0 100 100" preserveAspectRatio="none">
                                    <!-- Area fill under the curve -->
                                    <defs>
                                        <linearGradient id="curveGradient0" x1="0%" y1="0%" x2="0%" y2="100%">
                                            <stop offset="0%" style="stop-color:<?php echo e($curve->line_color ?? '#10B981'); ?>;stop-opacity:0.4" />
                                            <stop offset="100%" style="stop-color:<?php echo e($curve->line_color ?? '#10B981'); ?>;stop-opacity:0.05" />
                                        </linearGradient>
                                    </defs>
                                    
                                    <!-- Filled area -->
                                    <path 
                                        d="M 10,<?php echo e(100 - ($curve->value1 / 6 * 100)); ?> 
                                           C 20,<?php echo e(100 - ($curve->value1 / 6 * 100)); ?> 22,<?php echo e(100 - ($curve->value2 / 6 * 100)); ?> 30,<?php echo e(100 - ($curve->value2 / 6 * 100)); ?>

                                           C 38,<?php echo e(100 - ($curve->value2 / 6 * 100)); ?> 42,<?php echo e(100 - ($curve->value3 / 6 * 100)); ?> 50,<?php echo e(100 - ($curve->value3 / 6 * 100)); ?>

                                           C 58,<?php echo e(100 - ($curve->value3 / 6 * 100)); ?> 62,<?php echo e(100 - ($curve->value4 / 6 * 100)); ?> 70,<?php echo e(100 - ($curve->value4 / 6 * 100)); ?>

                                           C 78,<?php echo e(100 - ($curve->value4 / 6 * 100)); ?> 82,<?php echo e(100 - ($curve->value5 / 6 * 100)); ?> 90,<?php echo e(100 - ($curve->value5 / 6 * 100)); ?>

                                           L 90,100 L 10,100 Z"
                                        fill="url(#curveGradient0)"
                                    />
                                    
                                    <!-- Curve line -->
                                    <path 
                                        d="M 10,<?php echo e(100 - ($curve->value1 / 6 * 100)); ?> 
                                           C 20,<?php echo e(100 - ($curve->value1 / 6 * 100)); ?> 22,<?php echo e(100 - ($curve->value2 / 6 * 100)); ?> 30,<?php echo e(100 - ($curve->value2 / 6 * 100)); ?>

                                           C 38,<?php echo e(100 - ($curve->value2 / 6 * 100)); ?> 42,<?php echo e(100 - ($curve->value3 / 6 * 100)); ?> 50,<?php echo e(100 - ($curve->value3 / 6 * 100)); ?>

                                           C 58,<?php echo e(100 - ($curve->value3 / 6 * 100)); ?> 62,<?php echo e(100 - ($curve->value4 / 6 * 100)); ?> 70,<?php echo e(100 - ($curve->value4 / 6 * 100)); ?>

                                           C 78,<?php echo e(100 - ($curve->value4 / 6 * 100)); ?> 82,<?php echo e(100 - ($curve->value5 / 6 * 100)); ?> 90,<?php echo e(100 - ($curve->value5 / 6 * 100)); ?>"
                                        fill="none"
                                        stroke="<?php echo e($curve->line_color ?? '#10B981'); ?>"
                                        stroke-width="0.6"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    />
                                </svg>
                                
                                <!-- Data Points with Tooltips -->
                                <div class="absolute inset-0 flex justify-between items-end px-2" style="padding-left: 6%; padding-right: 6%;">
                                    <?php
                                        $values = [$curve->value1, $curve->value2, $curve->value3, $curve->value4, $curve->value5];
                                        $labels = [$curve->label_year1, $curve->label_year2, $curve->label_year3, $curve->label_year4, $curve->label_year5];
                                    ?>
                                    <?php $__currentLoopData = $values; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="relative group cursor-pointer" 
                                         style="position: absolute; left: <?php echo e(10 + ($index * 20)); ?>%; bottom: <?php echo e(($value / 6) * 100); ?>%; transform: translate(-50%, 50%);"
                                         x-data="{ showPopup: false }" 
                                         @mouseenter="showPopup = true" 
                                         @mouseleave="showPopup = false"
                                         @click="showPopup = !showPopup">
                                        <!-- Point -->
                                            <div class="w-2 h-2 rounded-full border border-white transition-all duration-200 group-hover:scale-125"
                                             style="background-color: <?php echo e($curve->line_color ?? '#10B981'); ?>;">
                                        </div>
                                        <!-- Tooltip -->
                                        <div x-show="showPopup" x-transition 
                                             class="absolute -top-10 left-1/2 transform -translate-x-1/2 bg-gray-900 text-white px-3 py-2 rounded-lg text-xs font-bold shadow-lg z-30 whitespace-nowrap">
                                            <?php echo e($labels[$index]); ?>: <?php echo e(number_format($value, 2)); ?>

                                            <div class="absolute bottom-0 left-1/2 transform -translate-x-1/2 translate-y-full border-4 border-transparent border-t-gray-900"></div>
                                        </div>
                                    </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Year Labels Below Chart -->
                        <div class="flex mt-1">
                            <div class="w-1 min-w-5 pr-0 text-right"></div>
                            <div class="flex-1 relative" style="height: 16px;">
                                <span class="absolute text-[9px] text-white/80" style="left: 9%; transform: translateX(-50%);"><?php echo e($curve->label_year1); ?></span>
                                <span class="absolute text-[9px] text-white/80" style="left: 30%; transform: translateX(-50%);"><?php echo e($curve->label_year2); ?></span>
                                <span class="absolute text-[9px] text-white/80" style="left: 50%; transform: translateX(-50%);"><?php echo e($curve->label_year3); ?></span>
                                <span class="absolute text-[9px] text-white/80" style="left: 70%; transform: translateX(-50%);"><?php echo e($curve->label_year4); ?></span>
                                <span class="absolute text-[9px] text-white/80" style="left: 90%; transform: translateX(-50%);"><?php echo e($curve->label_year5); ?></span>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>
        <?php endif; ?>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-8">
            <!-- Company Info -->
            <div class="col-span-1 lg:col-span-1">
                <div class="flex items-center mb-4">
                    <!-- <div class="h-12 w-12 bg-white rounded-full flex items-center justify-center">
                        <i class="fas fa-cog text-blue-500 text-2xl"></i>
                    </div> -->
                    <img class="h-15 w-auto sm:h-17" src="<?php echo e(asset('images/logobalai-hitamputih.png')); ?>" alt="Logo">
                    <!-- <span class="ml-3 text-lg font-bold">BBSPJIKKP</span> -->
                </div>
                <p class="text-white text-sm mb-4 leading-relaxed">
                    <?php echo e(__('common.institution_name')); ?>

                </p>
                <div class="space-y-2 text-white text-sm">
                    <div class="flex items-start">
                        <i class="fas fa-map-marker-alt mr-2 mt-1"></i>
                        <span>Jl. Sukonandi No.9, Yogyakarta<br>Indonesia 55166</span>
                    </div>
                    <div class="flex items-center">
                        <i class="fas fa-phone mr-2"></i>
                        <span>+628112827821</span>
                    </div>
                    <div class="flex items-center">
                        <i class="fas fa-envelope mr-2"></i>
                        <span>bbkkp_jogja@kemenprin.id</span>
                    </div>
                </div>

                <!-- Jam Pelayanan -->
                <div class="mt-6 bg-white/10 rounded-lg p-4 backdrop-blur-sm">
                    <h4 class="font-bold mb-3 text-sm uppercase tracking-wide flex items-center">
                        <i class="far fa-clock mr-2"></i>
                        <?php echo e(__('common.service_hours')); ?>

                    </h4>
                    <div class="space-y-2.5">
                        <div class="flex items-start justify-between text-xs">
                            <div class="flex items-center">
                                <div class="w-1.5 h-1.5 bg-green-400 rounded-full mr-2"></div>
                                <span class="font-medium"><?php echo e(__('common.monday_thursday')); ?></span>
                            </div>
                            <span class="font-semibold">08:00 - 15:30</span>
                        </div>
                        <div class="flex items-start justify-between text-xs">
                            <div class="flex items-center">
                                <div class="w-1.5 h-1.5 bg-green-400 rounded-full mr-2"></div>
                                <span class="font-medium"><?php echo e(__('common.friday')); ?></span>
                            </div>
                            <span class="font-semibold">08:00 - 16:00</span>
                        </div>
                        <div class="flex items-start justify-between text-xs border-t border-white/20 pt-2">
                            <div class="flex items-center">
                                <div class="w-1.5 h-1.5 bg-red-400 rounded-full mr-2"></div>
                                <span class="font-medium"><?php echo e(__('common.saturday_sunday')); ?></span>
                            </div>
                            <span class="font-semibold text-red-300"><?php echo e(__('common.closed')); ?></span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Layanan -->
            <div>
                <?php if($footerLayanan && $footerLayanan->children->count() > 0): ?>
                    <!-- Desktop version -->
                    <div class="hidden md:block">
                        <h3 class="text-base font-bold mb-4 uppercase"><?php echo e($footerLayanan->display_title); ?></h3>
                        <ul class="space-y-2 text-sm">
                            <?php $__currentLoopData = $footerLayanan->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($item->is_active): ?>
                                    <li>
                                        <a href="<?php echo e($item->url ?: url($item->slug)); ?>" 
                                           class="hover:text-blue-200 transition-colors duration-200"
                                           <?php if($item->open_new_tab): ?> target="_blank" <?php endif; ?>>
                                            <?php echo e($item->display_title); ?>

                                        </a>
                                    </li>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                    
                    <!-- Mobile version -->
                    <div class="md:hidden" x-data="{ open: false }">
                        <button @click="open = !open" class="w-full flex items-center justify-between text-base font-bold mb-4 uppercase">
                            <span><?php echo e($footerLayanan->display_title); ?></span>
                            <i class="fas fa-chevron-down transition-transform duration-200" :class="{ 'rotate-180': open }"></i>
                        </button>
                        <ul class="space-y-2 text-sm" x-show="open" x-cloak>
                            <?php $__currentLoopData = $footerLayanan->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($item->is_active): ?>
                                    <li>
                                        <a href="<?php echo e($item->url ?: url($item->slug)); ?>" 
                                           class="hover:text-blue-200 transition-colors duration-200"
                                           <?php if($item->open_new_tab): ?> target="_blank" <?php endif; ?>>
                                            <?php echo e($item->display_title); ?>

                                        </a>
                                    </li>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                <?php endif; ?>
            </div>

            <!-- Standar Pelayanan -->
            <div>
                <?php if($footerStandar && $footerStandar->children->count() > 0): ?>
                    <!-- Desktop version -->
                    <div class="hidden md:block">
                        <h3 class="text-base font-bold mb-4 uppercase"><?php echo e($footerStandar->display_title); ?></h3>
                        <ul class="space-y-2 text-sm">
                            <?php $__currentLoopData = $footerStandar->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($item->is_active): ?>
                                    <li>
                                        <a href="<?php echo e($item->url ?: url($item->slug)); ?>" 
                                           class="hover:text-blue-200 transition-colors duration-200"
                                           <?php if($item->open_new_tab): ?> target="_blank" <?php endif; ?>>
                                            <?php echo e($item->display_title); ?>

                                        </a>
                                    </li>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                    
                    <!-- Mobile version -->
                    <div class="md:hidden" x-data="{ open: false }">
                        <button @click="open = !open" class="w-full flex items-center justify-between text-base font-bold mb-4 uppercase">
                            <span><?php echo e($footerStandar->display_title); ?></span>
                            <i class="fas fa-chevron-down transition-transform duration-200" :class="{ 'rotate-180': open }"></i>
                        </button>
                        <ul class="space-y-2 text-sm" x-show="open" x-cloak>
                            <?php $__currentLoopData = $footerStandar->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($item->is_active): ?>
                                    <li>
                                        <a href="<?php echo e($item->url ?: url($item->slug)); ?>" 
                                           class="hover:text-blue-200 transition-colors duration-200"
                                           <?php if($item->open_new_tab): ?> target="_blank" <?php endif; ?>>
                                            <?php echo e($item->display_title); ?>

                                        </a>
                                    </li>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                <?php endif; ?>
            </div>

            <!-- Media & Informasi -->
            <div>
                <?php if($footerMedia && $footerMedia->children->count() > 0): ?>
                    <!-- Desktop version -->
                    <div class="hidden md:block">
                        <h3 class="text-base font-bold mb-4 uppercase"><?php echo e($footerMedia->display_title); ?></h3>
                        <ul class="space-y-2 text-sm">
                            <?php $__currentLoopData = $footerMedia->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($item->is_active): ?>
                                    <li>
                                        <a href="<?php echo e($item->url ?: url($item->slug)); ?>" 
                                           class="hover:text-blue-200 transition-colors duration-200"
                                           <?php if($item->open_new_tab): ?> target="_blank" <?php endif; ?>>
                                            <?php echo e($item->display_title); ?>

                                        </a>
                                    </li>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                    
                    <!-- Mobile version -->
                    <div class="md:hidden" x-data="{ open: false }">
                        <button @click="open = !open" class="w-full flex items-center justify-between text-base font-bold mb-4 uppercase">
                            <span><?php echo e($footerMedia->display_title); ?></span>
                            <i class="fas fa-chevron-down transition-transform duration-200" :class="{ 'rotate-180': open }"></i>
                        </button>
                        <ul class="space-y-2 text-sm" x-show="open" x-cloak>
                            <?php $__currentLoopData = $footerMedia->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($item->is_active): ?>
                                    <li>
                                        <a href="<?php echo e($item->url ?: url($item->slug)); ?>" 
                                           class="hover:text-blue-200 transition-colors duration-200"
                                           <?php if($item->open_new_tab): ?> target="_blank" <?php endif; ?>>
                                            <?php echo e($item->display_title); ?>

                                        </a>
                                    </li>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                <?php endif; ?>
            </div>

            <!-- Tentang Kami -->
            <div>
                <?php if($footerTentang && $footerTentang->children->count() > 0): ?>
                    <!-- Desktop version -->
                    <div class="hidden md:block">
                        <h3 class="text-base font-bold mb-4 uppercase"><?php echo e($footerTentang->display_title); ?></h3>
                        <ul class="space-y-2 text-sm">
                            <?php $__currentLoopData = $footerTentang->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($item->is_active): ?>
                                    <li>
                                        <a href="<?php echo e($item->url ?: url($item->slug)); ?>" 
                                           class="hover:text-blue-200 transition-colors duration-200"
                                           <?php if($item->open_new_tab): ?> target="_blank" <?php endif; ?>>
                                            <?php echo e($item->display_title); ?>

                                        </a>
                                    </li>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                    
                    <!-- Mobile version -->
                    <div class="md:hidden" x-data="{ open: false }">
                        <button @click="open = !open" class="w-full flex items-center justify-between text-base font-bold mb-4 uppercase">
                            <span><?php echo e($footerTentang->display_title); ?></span>
                            <i class="fas fa-chevron-down transition-transform duration-200" :class="{ 'rotate-180': open }"></i>
                        </button>
                        <ul class="space-y-2 text-sm" x-show="open" x-cloak>
                            <?php $__currentLoopData = $footerTentang->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($item->is_active): ?>
                                    <li>
                                        <a href="<?php echo e($item->url ?: url($item->slug)); ?>" 
                                           class="hover:text-blue-200 transition-colors duration-200"
                                           <?php if($item->open_new_tab): ?> target="_blank" <?php endif; ?>>
                                            <?php echo e($item->display_title); ?>

                                        </a>
                                    </li>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                <?php endif; ?>
            </div>

            <!-- LAPOR Badge -->
            <div class="flex flex-col items-center justify-center">
                <a href="https://lapor.go.id" target="_blank" class="hover:opacity-75 transition-opacity duration-200" title="LAPOR - Layanan Aspirasi dan Pengaduan Online Rakyat">
                    <img src="<?php echo e(asset('images/logolapor.png')); ?>" alt="LAPOR" class="h-16 w-auto">
                </a>
            </div>
        </div>

        <!-- Social Media & Copyright -->
        <div class="border-t border-blue-400 mt-8 pt-8">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="text-white text-sm mb-4 md:mb-0 text-center md:text-left">
                    © 2025 - <?php echo e(__('common.institution_name')); ?>. <?php echo e(__('common.copyright')); ?>

                </div>

                <!-- Social Media Links -->
                <div class="flex items-center space-x-1">
                    <span class="text-sm mr-3 font-semibold"><?php echo e(__('common.follow_us')); ?></span>
                    <a href="https://www.instagram.com/bbkkp.kemenperin?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="
                        class="bg-white text-pink-500 hover:bg-blue-300 w-8 h-8 rounded flex items-center justify-center transition-colors duration-200">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="https://x.com/BbkkpKemenperin"
                        class="bg-white text-black hover:bg-blue-300 w-8 h-8 rounded flex items-center justify-center transition-colors duration-200">
                        <i class="fab fa-x"></i>
                    </a>
                    <a href="https://www.facebook.com/bbkkp.yogyakarta"
                        class="bg-white text-blue-600 hover:bg-blue-300 w-8 h-8 rounded flex items-center justify-center transition-colors duration-200">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="http://www.youtube.com/@BBKKPKemenperin"
                        class="bg-white text-red-500 hover:bg-blue-300 w-8 h-8 rounded flex items-center justify-center transition-colors duration-200">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>
</body>
</html><?php /**PATH C:\alamak\resources\views/partials/footer.blade.php ENDPATH**/ ?>