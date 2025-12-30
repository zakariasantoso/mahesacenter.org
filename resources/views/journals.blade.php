@extends('layouts.public')

@section('title', 'Our Journals - TechScholar Press')

@section('content')

<!-- Page Header -->
<div class="w-full bg-gradient-to-br from-primary to-blue-600 py-16">
    <div class="flex justify-center px-4 md:px-10 lg:px-40">
        <div class="max-w-[1280px] w-full text-center">
            <h1 class="text-white text-4xl md:text-5xl font-black leading-tight tracking-[-0.033em] mb-4">
                Our Journals
            </h1>
            <p class="text-blue-100 text-lg max-w-2xl mx-auto">
                Explore our collection of high-impact, peer-reviewed journals across multiple disciplines
            </p>
        </div>
    </div>
</div>

<!-- Journals List -->
<div class="w-full bg-background-light dark:bg-[#0d1117] py-16">
    <div class="flex justify-center px-4 md:px-10 lg:px-40">
        <div class="flex flex-col max-w-[1280px] flex-1 gap-8">
            
            <!-- Journal Card 1 -->
            <div class="bg-white dark:bg-[#1a202c] rounded-xl border border-[#dcdfe5] dark:border-gray-800 overflow-hidden hover:shadow-2xl transition-all duration-300 hover:border-primary/50">
                <div class="grid md:grid-cols-[300px_1fr] gap-6 p-6">
                    <!-- Thumbnail -->
                    <div class="relative group">
                        <div class="absolute -inset-1 bg-gradient-to-r from-primary to-blue-400 rounded-lg blur opacity-25 group-hover:opacity-50 transition-opacity"></div>
                        <div class="relative w-full h-64 md:h-full bg-center bg-no-repeat bg-cover rounded-lg shadow-lg" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDKdhmDYp5g1tMMyg9pnDZ9TS5v8T86K48smeyLxPX6RyUdw6zPpQeL7ByagbYurMC2mL2PqFQVb389VQLQ1yxtQeLs43tjfUIR9I2zf-hPQ8xbYtn2w11LKqz7vuebLvFMKawadmDUVYhGy0gZ06QdyorRjz1w7zgrPVrmStNz9ly5DPB2YZZz8tRq6kfKuLu8UVbBK8VIGardSeMxtjRHFQJi7ZAejcypN-PDaw5uwHiGHhi0yf3dWZiCz2wDc1Y2XNDP6NDDc8uA");'>
                            <div class="absolute top-3 right-3 bg-green-500 text-white text-xs font-bold px-3 py-1 rounded-full shadow-lg">
                                Open Access
                            </div>
                        </div>
                    </div>
                    
                    <!-- Content -->
                    <div class="flex flex-col">
                        <!-- Header -->
                        <div class="flex flex-col gap-2 mb-4">
                            <h2 class="text-[#111318] dark:text-white text-2xl font-bold leading-tight hover:text-primary transition-colors">
                                Journal of Artificial Intelligence Research
                            </h2>
                            <div class="flex flex-wrap items-center gap-4 text-sm text-[#636f88]">
                                <div class="flex items-center gap-1">
                                    <span class="material-symbols-outlined text-primary" style="font-size: 18px;">tag</span>
                                    <span><strong>ISSN:</strong> 2234-5678</span>
                                </div>
                                <div class="flex items-center gap-1">
                                    <span class="material-symbols-outlined text-primary" style="font-size: 18px;">calendar_month</span>
                                    <span><strong>Published:</strong> Monthly</span>
                                </div>
                                <div class="flex items-center gap-1">
                                    <span class="material-symbols-outlined text-primary" style="font-size: 18px;">trending_up</span>
                                    <span><strong>Impact Factor:</strong> 4.5</span>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Description -->
                        <p class="text-[#636f88] text-base leading-relaxed mb-6 flex-1">
                            A leading international journal dedicated to publishing cutting-edge research in artificial intelligence, machine learning, deep learning, and cognitive computing. We welcome original research articles, review papers, and case studies that advance the field of AI.
                        </p>
                        
                        <!-- Action Buttons -->
                        <div class="flex flex-wrap gap-3">
                            <button class="flex items-center gap-2 px-6 py-3 bg-primary text-white rounded-lg font-bold hover:bg-blue-700 transition-colors shadow-lg shadow-blue-500/30">
                                <span class="material-symbols-outlined text-sm">upload_file</span>
                                <span>Submit Manuscript</span>
                            </button>
                            <button class="flex items-center gap-2 px-6 py-3 bg-white dark:bg-gray-800 border-2 border-primary text-primary dark:text-primary rounded-lg font-bold hover:bg-primary hover:text-white dark:hover:bg-primary transition-colors">
                                <span class="material-symbols-outlined text-sm">visibility</span>
                                <span>View Journal</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Journal Card 2 -->
            <div class="bg-white dark:bg-[#1a202c] rounded-xl border border-[#dcdfe5] dark:border-gray-800 overflow-hidden hover:shadow-2xl transition-all duration-300 hover:border-primary/50">
                <div class="grid md:grid-cols-[300px_1fr] gap-6 p-6">
                    <!-- Thumbnail -->
                    <div class="relative group">
                        <div class="absolute -inset-1 bg-gradient-to-r from-primary to-blue-400 rounded-lg blur opacity-25 group-hover:opacity-50 transition-opacity"></div>
                        <div class="relative w-full h-64 md:h-full bg-center bg-no-repeat bg-cover rounded-lg shadow-lg" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCsZGfFuPY5N1lhcPiOJwzcterFPQB81z7-Zcep8hGsNg7kj4ZtpzChlX1gk5-DviAG9aB_Tp9OHUspPI8zIzaNlY-s5t706BqcM_DwuuUvb_Ek4uQgLsVZ2Gy8Ns5odR6XjFcpGGxus4ANwmiRnY304dMMzJ-Qr80-374oTA-4-GpIafYyLGBB1JmK5xde_FnrIRATEF3NOxk2F9PJiRNjJlUXSMOki4_q2CPxn5sky5Wln660bVc7gDl2dTyB4w-_Kw-C5bq4w8gT");'>
                            <div class="absolute top-3 right-3 bg-green-500 text-white text-xs font-bold px-3 py-1 rounded-full shadow-lg">
                                Open Access
                            </div>
                        </div>
                    </div>
                    
                    <!-- Content -->
                    <div class="flex flex-col">
                        <!-- Header -->
                        <div class="flex flex-col gap-2 mb-4">
                            <h2 class="text-[#111318] dark:text-white text-2xl font-bold leading-tight hover:text-primary transition-colors">
                                Review of Modern Economics
                            </h2>
                            <div class="flex flex-wrap items-center gap-4 text-sm text-[#636f88]">
                                <div class="flex items-center gap-1">
                                    <span class="material-symbols-outlined text-primary" style="font-size: 18px;">tag</span>
                                    <span><strong>ISSN:</strong> 2234-5679</span>
                                </div>
                                <div class="flex items-center gap-1">
                                    <span class="material-symbols-outlined text-primary" style="font-size: 18px;">calendar_month</span>
                                    <span><strong>Published:</strong> Bi-monthly</span>
                                </div>
                                <div class="flex items-center gap-1">
                                    <span class="material-symbols-outlined text-primary" style="font-size: 18px;">trending_up</span>
                                    <span><strong>Impact Factor:</strong> 3.2</span>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Description -->
                        <p class="text-[#636f88] text-base leading-relaxed mb-6 flex-1">
                            An international peer-reviewed journal focusing on contemporary economic theory, policy analysis, and empirical research. We publish innovative studies in microeconomics, macroeconomics, econometrics, and applied economics that contribute to global economic discourse.
                        </p>
                        
                        <!-- Action Buttons -->
                        <div class="flex flex-wrap gap-3">
                            <button class="flex items-center gap-2 px-6 py-3 bg-primary text-white rounded-lg font-bold hover:bg-blue-700 transition-colors shadow-lg shadow-blue-500/30">
                                <span class="material-symbols-outlined text-sm">upload_file</span>
                                <span>Submit Manuscript</span>
                            </button>
                            <button class="flex items-center gap-2 px-6 py-3 bg-white dark:bg-gray-800 border-2 border-primary text-primary dark:text-primary rounded-lg font-bold hover:bg-primary hover:text-white dark:hover:bg-primary transition-colors">
                                <span class="material-symbols-outlined text-sm">visibility</span>
                                <span>View Journal</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Journal Card 3 -->
            <div class="bg-white dark:bg-[#1a202c] rounded-xl border border-[#dcdfe5] dark:border-gray-800 overflow-hidden hover:shadow-2xl transition-all duration-300 hover:border-primary/50">
                <div class="grid md:grid-cols-[300px_1fr] gap-6 p-6">
                    <!-- Thumbnail -->
                    <div class="relative group">
                        <div class="absolute -inset-1 bg-gradient-to-r from-primary to-blue-400 rounded-lg blur opacity-25 group-hover:opacity-50 transition-opacity"></div>
                        <div class="relative w-full h-64 md:h-full bg-center bg-no-repeat bg-cover rounded-lg shadow-lg" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCfxX-_lYLA1uHy-kbp1D_K4xEXiqxo9OYRyzr1uz5E-mfQY9q40tLSTPdoIAV3ZG5nLLwyWEaajImv5uPZXAJt-RTyMwQVMUySPZ6UpdhKfzlDsmDyFfHtSILDt9Tq4Ghs1n4uZYcIwmTUTt5tshNByCTxD9AikoBzEA-DmzTBErDEyyAerUSxs3__9-6MNI68Fcc0QQdUenMCL4m-ma6vF11_O6mP4dhtTigtvDQ3TsykMhdoTcuN0SfwHOwDRwdhqbHHLVKz9qMG");'>
                            <div class="absolute top-3 right-3 bg-green-500 text-white text-xs font-bold px-3 py-1 rounded-full shadow-lg">
                                Open Access
                            </div>
                        </div>
                    </div>
                    
                    <!-- Content -->
                    <div class="flex flex-col">
                        <!-- Header -->
                        <div class="flex flex-col gap-2 mb-4">
                            <h2 class="text-[#111318] dark:text-white text-2xl font-bold leading-tight hover:text-primary transition-colors">
                                Computational Biology
                            </h2>
                            <div class="flex flex-wrap items-center gap-4 text-sm text-[#636f88]">
                                <div class="flex items-center gap-1">
                                    <span class="material-symbols-outlined text-primary" style="font-size: 18px;">tag</span>
                                    <span><strong>ISSN:</strong> 2234-5680</span>
                                </div>
                                <div class="flex items-center gap-1">
                                    <span class="material-symbols-outlined text-primary" style="font-size: 18px;">calendar_month</span>
                                    <span><strong>Published:</strong> Quarterly</span>
                                </div>
                                <div class="flex items-center gap-1">
                                    <span class="material-symbols-outlined text-primary" style="font-size: 18px;">trending_up</span>
                                    <span><strong>Impact Factor:</strong> 5.1</span>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Description -->
                        <p class="text-[#636f88] text-base leading-relaxed mb-6 flex-1">
                            A premier journal for computational biology, bioinformatics, and systems biology research. We focus on novel computational methods, algorithms, and models that advance our understanding of biological systems, from molecular to ecosystem levels.
                        </p>
                        
                        <!-- Action Buttons -->
                        <div class="flex flex-wrap gap-3">
                            <button class="flex items-center gap-2 px-6 py-3 bg-primary text-white rounded-lg font-bold hover:bg-blue-700 transition-colors shadow-lg shadow-blue-500/30">
                                <span class="material-symbols-outlined text-sm">upload_file</span>
                                <span>Submit Manuscript</span>
                            </button>
                            <button class="flex items-center gap-2 px-6 py-3 bg-white dark:bg-gray-800 border-2 border-primary text-primary dark:text-primary rounded-lg font-bold hover:bg-primary hover:text-white dark:hover:bg-primary transition-colors">
                                <span class="material-symbols-outlined text-sm">visibility</span>
                                <span>View Journal</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Journal Card 4 -->
            <div class="bg-white dark:bg-[#1a202c] rounded-xl border border-[#dcdfe5] dark:border-gray-800 overflow-hidden hover:shadow-2xl transition-all duration-300 hover:border-primary/50">
                <div class="grid md:grid-cols-[300px_1fr] gap-6 p-6">
                    <!-- Thumbnail -->
                    <div class="relative group">
                        <div class="absolute -inset-1 bg-gradient-to-r from-primary to-blue-400 rounded-lg blur opacity-25 group-hover:opacity-50 transition-opacity"></div>
                        <div class="relative w-full h-64 md:h-full bg-center bg-no-repeat bg-cover rounded-lg shadow-lg" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCLbYwoGeJubi5w6SFLBnLAZeurXCbzXc__Ch6LAR3K75rZQuxdqo3nXpUXlELJjx_uHrRMsiGtuzSGBYwKIu6hkcSzu8GSxE9QyzDoR1zEoVLaRQSb_QCZ29BL4CM-CdzmULuAdHdoODi42OPrD-NrK415qSgv9LTdyn7zJrcTLYbzMi60HhFX6cSiqLDj9I5yRd42diMYxrCszFUf8F_JBBc-68bXatqwFEHPniS06uY59RQApVb0h0v-jG18ItElRHQDCPb1UZ2e");'>
                            <div class="absolute top-3 right-3 bg-amber-500 text-white text-xs font-bold px-3 py-1 rounded-full shadow-lg">
                                Special Issue
                            </div>
                        </div>
                    </div>
                    
                    <!-- Content -->
                    <div class="flex flex-col">
                        <!-- Header -->
                        <div class="flex flex-col gap-2 mb-4">
                            <h2 class="text-[#111318] dark:text-white text-2xl font-bold leading-tight hover:text-primary transition-colors">
                                Global Health Technology
                            </h2>
                            <div class="flex flex-wrap items-center gap-4 text-sm text-[#636f88]">
                                <div class="flex items-center gap-1">
                                    <span class="material-symbols-outlined text-primary" style="font-size: 18px;">tag</span>
                                    <span><strong>ISSN:</strong> 2234-5681</span>
                                </div>
                                <div class="flex items-center gap-1">
                                    <span class="material-symbols-outlined text-primary" style="font-size: 18px;">calendar_month</span>
                                    <span><strong>Published:</strong> Bi-monthly</span>
                                </div>
                                <div class="flex items-center gap-1">
                                    <span class="material-symbols-outlined text-primary" style="font-size: 18px;">trending_up</span>
                                    <span><strong>Impact Factor:</strong> 2.9</span>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Description -->
                        <p class="text-[#636f88] text-base leading-relaxed mb-6 flex-1">
                            An interdisciplinary journal exploring the intersection of healthcare, technology, and global health policy. We publish research on digital health, medical devices, health informatics, and innovative solutions addressing global health challenges.
                        </p>
                        
                        <!-- Action Buttons -->
                        <div class="flex flex-wrap gap-3">
                            <button class="flex items-center gap-2 px-6 py-3 bg-primary text-white rounded-lg font-bold hover:bg-blue-700 transition-colors shadow-lg shadow-blue-500/30">
                                <span class="material-symbols-outlined text-sm">upload_file</span>
                                <span>Submit Manuscript</span>
                            </button>
                            <button class="flex items-center gap-2 px-6 py-3 bg-white dark:bg-gray-800 border-2 border-primary text-primary dark:text-primary rounded-lg font-bold hover:bg-primary hover:text-white dark:hover:bg-primary transition-colors">
                                <span class="material-symbols-outlined text-sm">visibility</span>
                                <span>View Journal</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection
