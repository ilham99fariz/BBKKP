<!-- Footer -->
<footer class="bg-gradient-to-r from-blue-500 to-blue-600 text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        
        <!-- Charts Section -->
        @if((isset($serviceRatings) && $serviceRatings->count() > 0) || (isset($ipkRatings) && $ipkRatings->count() > 0) || (isset($curveRatings) && $curveRatings->count() > 0))
        <div class="mb-8">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-4 items-start">
                <!-- Kepuasan Pelanggan (Single Chart from first serviceRating) -->
                @if(isset($serviceRatings) && $serviceRatings->count() > 0)
                @php $rating = $serviceRatings->first(); @endphp
                <div class="rounded-xl p-4 h-full flex flex-col">
                    <h3 class="text-base font-bold mb-4 text-center uppercase tracking-wide">Kepuasan Pelanggan</h3>
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
                                    @for($i = 1; $i <= 5; $i++)
                                    <div class="relative group flex-1 max-w-8 h-full flex flex-col cursor-pointer" x-data="{ showPopup: false }" @click="showPopup = !showPopup" @click.away="showPopup = false" @mouseenter="showPopup = true" @mouseleave="showPopup = false">
                                        <div class="w-full rounded-t relative overflow-hidden flex-1">
                                            <div class="absolute bottom-0 w-full rounded-t transition-all duration-700 ease-out group-hover:brightness-125"
                                                style="height: {{ $rating->{'percentage'.$i} }}%; background-color: {{ $rating->{'color'.$i} }};">
                                            </div>
                                        </div>
                                        <div x-show="showPopup" x-transition class="absolute -top-10 left-1/2 transform -translate-x-1/2 bg-gray-900 text-white px-3 py-2 rounded-lg text-xs font-bold shadow-lg z-30 whitespace-nowrap">
                                            {{ $rating->{'label_year'.$i} }}: {{ number_format($rating->{'percentage'.$i} / 10, 2) }}
                                            <div class="absolute bottom-0 left-1/2 transform -translate-x-1/2 translate-y-full border-4 border-transparent border-t-gray-900"></div>
                                        </div>
                                    </div>
                                    @endfor
                                </div>
                            </div>
                        </div>
                        
                        <!-- Year Labels Below Bars -->
                        <div class="flex">
                            <div class="w-1 min-w-5 pr-0 text-right"></div>
                                <div class="flex-1 flex justify-center space-x-1 px-2 mt-1">
                                @for($i = 1; $i <= 5; $i++)
                                <div class="flex-1 max-w-8 text-center">
                                    <span class="text-[9px] text-white/90">{{ $rating->{'label_year'.$i} }}</span>
                                </div>
                                @endfor
                            </div>
                        </div>
                    </div>
                </div>
                @endif

                <!-- Indeks Persepsi Korupsi (IPK) -->
                @if(isset($ipkRatings) && $ipkRatings->count() > 0)
                @php 
                    $ipk = $ipkRatings->first(); 
                    $maxScale = $ipk->max_scale ?: 4;
                @endphp
                <div class="rounded-xl p-4 h-full flex flex-col">
                    <h3 class="text-base font-bold mb-4 text-center uppercase tracking-wide">Indeks Persepsi Korupsi</h3>
                    <div class="rounded-lg p-3 flex flex-col">
                        <!-- Vertical Bar Chart -->
                        <div class="flex items-end">
                            <!-- Y-Axis Scale (Dynamic based on max_scale) -->
                            <div class="flex flex-col justify-between text-[8px] text-white/60 w-1 min-w-5 pr-0 text-right" style="height: 110px;">
                                <span style="line-height: 1; transform: translateY(-50%);">{{ $maxScale }}</span>
                                <span style="line-height: 1; transform: translateY(-25%);">{{ $maxScale * 0.75 }}</span>
                                <span style="line-height: 1; transform: translateY(0%);">{{ $maxScale * 0.5 }}</span>
                                <span style="line-height: 1; transform: translateY(25%);">{{ $maxScale * 0.25 }}</span>
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
                                    @for($i = 1; $i <= 5; $i++)
                                    <div class="relative group flex-1 max-w-8 h-full flex flex-col cursor-pointer" x-data="{ showPopup: false }" @click="showPopup = !showPopup" @click.away="showPopup = false" @mouseenter="showPopup = true" @mouseleave="showPopup = false">
                                        <div class="w-full rounded-t relative overflow-hidden flex-1">
                                            <div class="absolute bottom-0 w-full rounded-t transition-all duration-700 ease-out group-hover:brightness-125"
                                                style="height: {{ $ipk->{'percentage'.$i} }}%; background-color: {{ $ipk->{'color'.$i} }};">
                                            </div>
                                        </div>
                                        <div x-show="showPopup" x-transition class="absolute -top-10 left-1/2 transform -translate-x-1/2 bg-gray-900 text-white px-3 py-2 rounded-lg text-xs font-bold shadow-lg z-30 whitespace-nowrap">
                                            {{ $ipk->{'label_year'.$i} }}: {{ number_format($ipk->{'year'.$i}, 2) }}
                                            <div class="absolute bottom-0 left-1/2 transform -translate-x-1/2 translate-y-full border-4 border-transparent border-t-gray-900"></div>
                                        </div>
                                    </div>
                                    @endfor
                                </div>
                            </div>
                        </div>
                        
                        <!-- Year Labels Below Bars -->
                        <div class="flex">
                            <div class="w-1 min-w-5 pr-0 text-right"></div>
                                <div class="flex-1 flex justify-center space-x-1 px-2 mt-1">
                                @for($i = 1; $i <= 5; $i++)
                                <div class="flex-1 max-w-8 text-center">
                                    <span class="text-[9px] text-white/90">{{ $ipk->{'label_year'.$i} }}</span>
                                </div>
                                @endfor
                            </div>
                        </div>
                    </div>
                </div>
                @endif

                <!-- Keluhan Pelanggan (First curve chart only) -->
                @if(isset($curveRatings) && $curveRatings->count() > 0)
                @php $curve = $curveRatings->first(); @endphp
                <div class="rounded-xl p-4 h-full flex flex-col">
                    <h3 class="text-base font-bold mb-4 text-center uppercase tracking-wide">Keluhan Pelanggan</h3>
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
                                            <stop offset="0%" style="stop-color:{{ $curve->line_color ?? '#10B981' }};stop-opacity:0.4" />
                                            <stop offset="100%" style="stop-color:{{ $curve->line_color ?? '#10B981' }};stop-opacity:0.05" />
                                        </linearGradient>
                                    </defs>
                                    
                                    <!-- Filled area -->
                                    <path 
                                        d="M 10,{{ 100 - ($curve->value1 / 6 * 100) }} 
                                           C 20,{{ 100 - ($curve->value1 / 6 * 100) }} 22,{{ 100 - ($curve->value2 / 6 * 100) }} 30,{{ 100 - ($curve->value2 / 6 * 100) }}
                                           C 38,{{ 100 - ($curve->value2 / 6 * 100) }} 42,{{ 100 - ($curve->value3 / 6 * 100) }} 50,{{ 100 - ($curve->value3 / 6 * 100) }}
                                           C 58,{{ 100 - ($curve->value3 / 6 * 100) }} 62,{{ 100 - ($curve->value4 / 6 * 100) }} 70,{{ 100 - ($curve->value4 / 6 * 100) }}
                                           C 78,{{ 100 - ($curve->value4 / 6 * 100) }} 82,{{ 100 - ($curve->value5 / 6 * 100) }} 90,{{ 100 - ($curve->value5 / 6 * 100) }}
                                           L 90,100 L 10,100 Z"
                                        fill="url(#curveGradient0)"
                                    />
                                    
                                    <!-- Curve line -->
                                    <path 
                                        d="M 10,{{ 100 - ($curve->value1 / 6 * 100) }} 
                                           C 20,{{ 100 - ($curve->value1 / 6 * 100) }} 22,{{ 100 - ($curve->value2 / 6 * 100) }} 30,{{ 100 - ($curve->value2 / 6 * 100) }}
                                           C 38,{{ 100 - ($curve->value2 / 6 * 100) }} 42,{{ 100 - ($curve->value3 / 6 * 100) }} 50,{{ 100 - ($curve->value3 / 6 * 100) }}
                                           C 58,{{ 100 - ($curve->value3 / 6 * 100) }} 62,{{ 100 - ($curve->value4 / 6 * 100) }} 70,{{ 100 - ($curve->value4 / 6 * 100) }}
                                           C 78,{{ 100 - ($curve->value4 / 6 * 100) }} 82,{{ 100 - ($curve->value5 / 6 * 100) }} 90,{{ 100 - ($curve->value5 / 6 * 100) }}"
                                        fill="none"
                                        stroke="{{ $curve->line_color ?? '#10B981' }}"
                                        stroke-width="0.6"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    />
                                </svg>
                                
                                <!-- Data Points with Tooltips -->
                                <div class="absolute inset-0 flex justify-between items-end px-2" style="padding-left: 6%; padding-right: 6%;">
                                    @php
                                        $values = [$curve->value1, $curve->value2, $curve->value3, $curve->value4, $curve->value5];
                                        $labels = [$curve->label_year1, $curve->label_year2, $curve->label_year3, $curve->label_year4, $curve->label_year5];
                                    @endphp
                                    @foreach($values as $index => $value)
                                    <div class="relative group cursor-pointer" 
                                         style="position: absolute; left: {{ 10 + ($index * 20) }}%; bottom: {{ ($value / 6) * 100 }}%; transform: translate(-50%, 50%);"
                                         x-data="{ showPopup: false }" 
                                         @mouseenter="showPopup = true" 
                                         @mouseleave="showPopup = false"
                                         @click="showPopup = !showPopup">
                                        <!-- Point -->
                                            <div class="w-2 h-2 rounded-full border border-white transition-all duration-200 group-hover:scale-125"
                                             style="background-color: {{ $curve->line_color ?? '#10B981' }};">
                                        </div>
                                        <!-- Tooltip -->
                                        <div x-show="showPopup" x-transition 
                                             class="absolute -top-10 left-1/2 transform -translate-x-1/2 bg-gray-900 text-white px-3 py-2 rounded-lg text-xs font-bold shadow-lg z-30 whitespace-nowrap">
                                            {{ $labels[$index] }}: {{ number_format($value, 2) }}
                                            <div class="absolute bottom-0 left-1/2 transform -translate-x-1/2 translate-y-full border-4 border-transparent border-t-gray-900"></div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        
                        <!-- Year Labels Below Chart -->
                        <div class="flex mt-1">
                            <div class="w-1 min-w-5 pr-0 text-right"></div>
                            <div class="flex-1 relative" style="height: 16px;">
                                <span class="absolute text-[9px] text-white/80" style="left: 9%; transform: translateX(-50%);">{{ $curve->label_year1 }}</span>
                                <span class="absolute text-[9px] text-white/80" style="left: 30%; transform: translateX(-50%);">{{ $curve->label_year2 }}</span>
                                <span class="absolute text-[9px] text-white/80" style="left: 50%; transform: translateX(-50%);">{{ $curve->label_year3 }}</span>
                                <span class="absolute text-[9px] text-white/80" style="left: 70%; transform: translateX(-50%);">{{ $curve->label_year4 }}</span>
                                <span class="absolute text-[9px] text-white/80" style="left: 90%; transform: translateX(-50%);">{{ $curve->label_year5 }}</span>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
        @endif

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-8">
            <!-- Company Info -->
            <div class="col-span-1 lg:col-span-1">
                <div class="flex items-center mb-4">
                    <!-- <div class="h-12 w-12 bg-white rounded-full flex items-center justify-center">
                        <i class="fas fa-cog text-blue-500 text-2xl"></i>
                    </div> -->
                    <img class="h-15 w-auto sm:h-17" src="{{ asset('images/logobalai-hitamputih.png') }}" alt="Logo">
                    <!-- <span class="ml-3 text-lg font-bold">BBSPJIKKP</span> -->
                </div>
                <p class="text-white text-sm mb-4 leading-relaxed">
                    Balai Besar Standardisasi dan Pelayanan Jasa Industri Kulit, Karet, dan Plastik
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
                        <span>bbkkp_jogja@yahoo.com</span>
                    </div>
                </div>

                <!-- Jam Pelayanan -->
                <div class="mt-6">
                    <h4 class="font-semibold mb-2 text-sm">Jam Pelayanan</h4>
                    <div class="text-xs space-y-1">
                        <div class="flex items-center">
                            <i class="far fa-clock mr-2"></i>
                            <span>Senin - Kamis: 08:00 - 15:30</span>
                        </div>
                        <div class="flex items-center">
                            <i class="far fa-clock mr-2"></i>
                            <span>Jumat: 08:00 - 16:00</span>
                        </div>
                        <div class="flex items-center">
                            <i class="far fa-calendar-times mr-2"></i>
                            <span>Sabtu, Ahad: Tutup</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- PROFIL -->
            <div>
                <!-- Desktop version -->
                <div class="hidden md:block">
                    <h3 class="text-base font-bold mb-4 uppercase">Profil</h3>
                    <ul class="space-y-2 text-sm">
                    <li><a href="#" class="hover:text-blue-200 transition-colors duration-200">Sejarah</a>
                    </li>
                    <li><a href="#" class="hover:text-blue-200 transition-colors duration-200">Visi dan
                            Misi</a></li>
                    <li><a href="#" class="hover:text-blue-200 transition-colors duration-200">Tugas Pokok dan
                            Fungsi</a></li>
                    <li><a href="#" class="hover:text-blue-200 transition-colors duration-200">Motto</a></li>
                    <li><a href="#" class="hover:text-blue-200 transition-colors duration-200">Maklumat
                            Pelayanan</a></li>
                    <li><a href="#" class="hover:text-blue-200 transition-colors duration-200">Kebijakan
                            Mutu</a></li>
                    <li><a href="#" class="hover:text-blue-200 transition-colors duration-200">Struktur
                            Organisasi</a></li>
                    <li><a href="#" class="hover:text-blue-200 transition-colors duration-200">Profil Singkat
                            Penjabat</a></li>
                    <li><a href="#" class="hover:text-blue-200 transition-colors duration-200">Sumber Daya</a>
                    </li>
                    </ul>
                </div>
                
                <!-- Mobile version -->
                <div class="md:hidden" x-data="{ open: false }">
                    <button @click="open = !open" class="w-full flex items-center justify-between text-base font-bold mb-4 uppercase">
                        <span>Profil</span>
                        <i class="fas fa-chevron-down transition-transform duration-200" :class="{ 'rotate-180': open }"></i>
                    </button>
                    <ul class="space-y-2 text-sm" x-show="open" x-cloak>
                        <li><a href="#" class="hover:text-blue-200 transition-colors duration-200">Sejarah</a></li>
                        <li><a href="#" class="hover:text-blue-200 transition-colors duration-200">Visi dan Misi</a></li>
                        <li><a href="#" class="hover:text-blue-200 transition-colors duration-200">Tugas Pokok dan Fungsi</a></li>
                        <li><a href="#" class="hover:text-blue-200 transition-colors duration-200">Motto</a></li>
                        <li><a href="#" class="hover:text-blue-200 transition-colors duration-200">Maklumat Pelayanan</a></li>
                        <li><a href="#" class="hover:text-blue-200 transition-colors duration-200">Kebijakan Mutu</a></li>
                        <li><a href="#" class="hover:text-blue-200 transition-colors duration-200">Struktur Organisasi</a></li>
                        <li><a href="#" class="hover:text-blue-200 transition-colors duration-200">Profil Singkat Penjabat</a></li>
                        <li><a href="#" class="hover:text-blue-200 transition-colors duration-200">Sumber Daya</a></li>
                    </ul>
                </div>
            </div>

            <!-- LAYANAN UTAMA & LAYANAN EDUKASI -->
            <div>
                <!-- Desktop version -->
                <div class="hidden md:block">
                    <h3 class="text-base font-bold mb-4 uppercase">Layanan Utama</h3>
                    <ul class="space-y-2 text-sm mb-6">
                    <li><a href="#" class="hover:text-blue-200 transition-colors duration-200">Audit
                            Teknologi</a></li>
                    <li><a href="#" class="hover:text-blue-200 transition-colors duration-200">Pengujian</a>
                    </li>
                    <li><a href="#" class="hover:text-blue-200 transition-colors duration-200">Sertifikasi</a>
                    </li>
                    <li><a href="#" class="hover:text-blue-200 transition-colors duration-200">Kalibrasi</a>
                    </li>
                    <li><a href="#" class="hover:text-blue-200 transition-colors duration-200">Konsultansi</a>
                    </li>
                    <li><a href="#" class="hover:text-blue-200 transition-colors duration-200">Pelatihan
                            Teknis</a></li>
                    <li><a href="#" class="hover:text-blue-200 transition-colors duration-200">Produsen Bahan
                            Acuan (PBA)</a></li>
                    <li><a href="#" class="hover:text-blue-200 transition-colors duration-200">Pendampingan
                            INDI 4.0</a></li>
                    <li><a href="#" class="hover:text-blue-200 transition-colors duration-200">Pendampingan
                            TKDN</a></li>
                    <li><a href="#" class="hover:text-blue-200 transition-colors duration-200">Lembaga
                            Verifikasi dan Validasi</a></li>
                    <li><a href="#" class="hover:text-blue-200 transition-colors duration-200">Lembaga
                            Inspeksi</a></li>
                    <li><a href="#" class="hover:text-blue-200 transition-colors duration-200">Uji
                            Profisiensi</a></li>
                    <li><a href="#" class="hover:text-blue-200 transition-colors duration-200">Lembaga
                            Sertifikasi Profesi</a></li>
                    <li><a href="#" class="hover:text-blue-200 transition-colors duration-200">Standar
                            Playanan Publik</a></li>
                    <li><a href="#" class="hover:text-blue-200 transition-colors duration-200">Tarif
                            Percepatan Layanan</a></li>
                    </ul>

                    <h3 class="text-base font-bold mb-4 uppercase">Layanan Edukasi</h3>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="hover:text-blue-200 transition-colors duration-200">PKL/Magang</a></li>
                        <li><a href="#" class="hover:text-blue-200 transition-colors duration-200">Kunjungan</a></li>
                    </ul>
                </div>
                
                <!-- Mobile version -->
                <div class="md:hidden" x-data="{ openUtama: false, openEdukasi: false }">
                    <button @click="openUtama = !openUtama" class="w-full flex items-center justify-between text-base font-bold mb-4 uppercase">
                        <span>Layanan Utama</span>
                        <i class="fas fa-chevron-down transition-transform duration-200" :class="{ 'rotate-180': openUtama }"></i>
                    </button>
                    <ul class="space-y-2 text-sm mb-6" x-show="openUtama" x-cloak>
                        <li><a href="#" class="hover:text-blue-200 transition-colors duration-200">Audit Teknologi</a></li>
                        <li><a href="#" class="hover:text-blue-200 transition-colors duration-200">Pengujian</a></li>
                        <li><a href="#" class="hover:text-blue-200 transition-colors duration-200">Sertifikasi</a></li>
                        <li><a href="#" class="hover:text-blue-200 transition-colors duration-200">Kalibrasi</a></li>
                        <li><a href="#" class="hover:text-blue-200 transition-colors duration-200">Konsultansi</a></li>
                        <li><a href="#" class="hover:text-blue-200 transition-colors duration-200">Pelatihan Teknis</a></li>
                        <li><a href="#" class="hover:text-blue-200 transition-colors duration-200">Produsen Bahan Acuan (PBA)</a></li>
                        <li><a href="#" class="hover:text-blue-200 transition-colors duration-200">Pendampingan INDI 4.0</a></li>
                        <li><a href="#" class="hover:text-blue-200 transition-colors duration-200">Pendampingan TKDN</a></li>
                        <li><a href="#" class="hover:text-blue-200 transition-colors duration-200">Lembaga Verifikasi dan Validasi</a></li>
                        <li><a href="#" class="hover:text-blue-200 transition-colors duration-200">Lembaga Inspeksi</a></li>
                        <li><a href="#" class="hover:text-blue-200 transition-colors duration-200">Uji Profisiensi</a></li>
                        <li><a href="#" class="hover:text-blue-200 transition-colors duration-200">Lembaga Sertifikasi Profesi</a></li>
                        <li><a href="#" class="hover:text-blue-200 transition-colors duration-200">Standar Playanan Publik</a></li>
                        <li><a href="#" class="hover:text-blue-200 transition-colors duration-200">Tarif Percepatan Layanan</a></li>
                    </ul>

                    <button @click="openEdukasi = !openEdukasi" class="w-full flex items-center justify-between text-base font-bold mb-4 uppercase">
                        <span>Layanan Edukasi</span>
                        <i class="fas fa-chevron-down transition-transform duration-200" :class="{ 'rotate-180': openEdukasi }"></i>
                    </button>
                    <ul class="space-y-2 text-sm" x-show="openEdukasi" x-cloak>
                        <li><a href="#" class="hover:text-blue-200 transition-colors duration-200">PKL/Magang</a></li>
                        <li><a href="#" class="hover:text-blue-200 transition-colors duration-200">Kunjungan</a></li>
                    </ul>
                </div>
            </div>

            <!-- LAYANAN HALAL & ZONA INTEGRITAS -->
            <div>
                <!-- Desktop version -->
                <div class="hidden md:block">
                    <h3 class="text-base font-bold mb-4 uppercase">Layanan Halal</h3>
                    <ul class="space-y-2 text-sm mb-6">
                    <li><a href="#" class="hover:text-blue-200 transition-colors duration-200">Tentang LPH</a>
                    </li>
                    <li><a href="#" class="hover:text-blue-200 transition-colors duration-200">Layanan LPH</a>
                    </li>
                    <li><a href="#" class="hover:text-blue-200 transition-colors duration-200">Proses
                            Sertifikasi Halal</a></li>
                    <li><a href="#" class="hover:text-blue-200 transition-colors duration-200">Peraturan dan
                            Pedoman Halal</a></li>
                    <li><a href="#" class="hover:text-blue-200 transition-colors duration-200">Pertanyaan
                            Yang Sering Terkait Halal</a></li>
                    </ul>

                    <h3 class="text-base font-bold mb-4 uppercase">Zona Integritas</h3>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="hover:text-blue-200 transition-colors duration-200">Komitmen</a></li>
                        <li><a href="#" class="hover:text-blue-200 transition-colors duration-200">Peta Jalan</a></li>
                        <li><a href="#" class="hover:text-blue-200 transition-colors duration-200">Gratifikasi</a></li>
                        <li><a href="#" class="hover:text-blue-200 transition-colors duration-200">Laporan Pelanggaran</a></li>
                        <li><a href="#" class="hover:text-blue-200 transition-colors duration-200">Benturan Kepentingan</a></li>
                    </ul>
                </div>
                
                <!-- Mobile version -->
                <div class="md:hidden" x-data="{ openHalal: false, openZona: false }">
                    <button @click="openHalal = !openHalal" class="w-full flex items-center justify-between text-base font-bold mb-4 uppercase">
                        <span>Layanan Halal</span>
                        <i class="fas fa-chevron-down transition-transform duration-200" :class="{ 'rotate-180': openHalal }"></i>
                    </button>
                    <ul class="space-y-2 text-sm mb-6" x-show="openHalal" x-cloak>
                        <li><a href="#" class="hover:text-blue-200 transition-colors duration-200">Tentang LPH</a></li>
                        <li><a href="#" class="hover:text-blue-200 transition-colors duration-200">Layanan LPH</a></li>
                        <li><a href="#" class="hover:text-blue-200 transition-colors duration-200">Proses Sertifikasi Halal</a></li>
                        <li><a href="#" class="hover:text-blue-200 transition-colors duration-200">Peraturan dan Pedoman Halal</a></li>
                        <li><a href="#" class="hover:text-blue-200 transition-colors duration-200">Pertanyaan Yang Sering Terkait Halal</a></li>
                    </ul>

                    <button @click="openZona = !openZona" class="w-full flex items-center justify-between text-base font-bold mb-4 uppercase">
                        <span>Zona Integritas</span>
                        <i class="fas fa-chevron-down transition-transform duration-200" :class="{ 'rotate-180': openZona }"></i>
                    </button>
                    <ul class="space-y-2 text-sm" x-show="openZona" x-cloak>
                        <li><a href="#" class="hover:text-blue-200 transition-colors duration-200">Komitmen</a></li>
                        <li><a href="#" class="hover:text-blue-200 transition-colors duration-200">Peta Jalan</a></li>
                        <li><a href="#" class="hover:text-blue-200 transition-colors duration-200">Gratifikasi</a></li>
                        <li><a href="#" class="hover:text-blue-200 transition-colors duration-200">Laporan Pelanggaran</a></li>
                        <li><a href="#" class="hover:text-blue-200 transition-colors duration-200">Benturan Kepentingan</a></li>
                    </ul>
                </div>
            </div>

            <!-- INFORMASI PUBLIK & HUBUNGI KAMI -->
            <div>
                <!-- Desktop version -->
                <div class="hidden md:block">
                    <h3 class="text-base font-bold mb-4 uppercase">Informasi Publik</h3>
                    <ul class="space-y-2 text-sm mb-6">
                    <li><a href="#" class="hover:text-blue-200 transition-colors duration-200">Berita</a>
                    </li>
                    <li><a href="#" class="hover:text-blue-200 transition-colors duration-200">Agenda
                            Pimpinan</a></li>
                    <li><a href="#" class="hover:text-blue-200 transition-colors duration-200">Penjabat
                            Pengelola Informasi dan Dokumentasi (PPID)</a></li>
                    <li><a href="#" class="hover:text-blue-200 transition-colors duration-200">Daftar
                            Informasi Publik (DIP)</a></li>
                    <li><a href="#" class="hover:text-blue-200 transition-colors duration-200">Daftar
                            Informasi Yang Dikecualikan (DIK)</a></li>
                    <li><a href="#" class="hover:text-blue-200 transition-colors duration-200">Informasi
                            Berkala</a></li>
                    <li><a href="#" class="hover:text-blue-200 transition-colors duration-200">Informasi
                            Setiap Saat</a></li>
                    <li><a href="#" class="hover:text-blue-200 transition-colors duration-200">Layanan
                            Informasi Publik</a></li>
                    <li><a href="#" class="hover:text-blue-200 transition-colors duration-200">Kode Etik
                            Pelayanan Publik</a></li>
                    <li><a href="#" class="hover:text-blue-200 transition-colors duration-200">SOP
                            Penanganan Bencana</a></li>
                    </ul>

                    <h3 class="text-base font-bold mb-4 uppercase">Hubungi Kami</h3>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="hover:text-blue-200 transition-colors duration-200">Buku Tamu</a></li>
                        <li><a href="#" class="hover:text-blue-200 transition-colors duration-200">Keluhan dan Pengaduan</a></li>
                        <li><a href="#" class="hover:text-blue-200 transition-colors duration-200">Survey Pelanggan</a></li>
                        <li><a href="#" class="hover:text-blue-200 transition-colors duration-200">Kontak</a></li>
                        <li><a href="#" class="hover:text-blue-200 transition-colors duration-200">Kebijakan Privasi</a></li>
                    </ul>
                </div>
                
                <!-- Mobile version -->
                <div class="md:hidden" x-data="{ openInfo: false, openHubungi: false }">
                    <button @click="openInfo = !openInfo" class="w-full flex items-center justify-between text-base font-bold mb-4 uppercase">
                        <span>Informasi Publik</span>
                        <i class="fas fa-chevron-down transition-transform duration-200" :class="{ 'rotate-180': openInfo }"></i>
                    </button>
                    <ul class="space-y-2 text-sm mb-6" x-show="openInfo" x-cloak>
                        <li><a href="#" class="hover:text-blue-200 transition-colors duration-200">Berita</a></li>
                        <li><a href="#" class="hover:text-blue-200 transition-colors duration-200">Agenda Pimpinan</a></li>
                        <li><a href="#" class="hover:text-blue-200 transition-colors duration-200">Penjabat Pengelola Informasi dan Dokumentasi (PPID)</a></li>
                        <li><a href="#" class="hover:text-blue-200 transition-colors duration-200">Daftar Informasi Publik (DIP)</a></li>
                        <li><a href="#" class="hover:text-blue-200 transition-colors duration-200">Daftar Informasi Yang Dikecualikan (DIK)</a></li>
                        <li><a href="#" class="hover:text-blue-200 transition-colors duration-200">Informasi Berkala</a></li>
                        <li><a href="#" class="hover:text-blue-200 transition-colors duration-200">Informasi Setiap Saat</a></li>
                        <li><a href="#" class="hover:text-blue-200 transition-colors duration-200">Layanan Informasi Publik</a></li>
                        <li><a href="#" class="hover:text-blue-200 transition-colors duration-200">Kode Etik Pelayanan Publik</a></li>
                        <li><a href="#" class="hover:text-blue-200 transition-colors duration-200">SOP Penanganan Bencana</a></li>
                    </ul>

                    <button @click="openHubungi = !openHubungi" class="w-full flex items-center justify-between text-base font-bold mb-4 uppercase">
                        <span>Hubungi Kami</span>
                        <i class="fas fa-chevron-down transition-transform duration-200" :class="{ 'rotate-180': openHubungi }"></i>
                    </button>
                    <ul class="space-y-2 text-sm" x-show="openHubungi" x-cloak>
                        <li><a href="#" class="hover:text-blue-200 transition-colors duration-200">Buku Tamu</a></li>
                        <li><a href="#" class="hover:text-blue-200 transition-colors duration-200">Keluhan dan Pengaduan</a></li>
                        <li><a href="#" class="hover:text-blue-200 transition-colors duration-200">Survey Pelanggan</a></li>
                        <li><a href="#" class="hover:text-blue-200 transition-colors duration-200">Kontak</a></li>
                        <li><a href="#" class="hover:text-blue-200 transition-colors duration-200">Kebijakan Privasi</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Social Media & Copyright -->
        <div class="border-t border-blue-400 mt-8 pt-8">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="text-white text-sm mb-4 md:mb-0 text-center md:text-left">
                    © 2025 - Balai Besar Standardisasi dan Pelayanan Jasa Industri Kulit, Karet, dan Plastik. All
                    Rights Reserved.
                </div>

                <!-- Social Media Links -->
                <div class="flex items-center space-x-1">
                    <span class="text-sm mr-3 font-semibold">Media Sosial</span>
                    <a href="https://www.instagram.com/bbkkp.kemenperin?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="
                        class="bg-white text-blue-500 hover:bg-blue-100 w-8 h-8 rounded flex items-center justify-center transition-colors duration-200">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="https://x.com/BbkkpKemenperin"
                        class="bg-white text-blue-500 hover:bg-blue-100 w-8 h-8 rounded flex items-center justify-center transition-colors duration-200">
                        <i class="fab fa-x-twitter"></i>
                    </a>
                    <a href="https://www.facebook.com/bbkkp.yogyakarta"
                        class="bg-white text-blue-500 hover:bg-blue-100 w-8 h-8 rounded flex items-center justify-center transition-colors duration-200">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="http://www.youtube.com/@BBKKPKemenperin"
                        class="bg-white text-blue-500 hover:bg-blue-100 w-8 h-8 rounded flex items-center justify-center transition-colors duration-200">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>
</body>
</html>