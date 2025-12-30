@extends('layouts.public')

@section('title', 'TechScholar Press - Tech-Driven Academic Publishing')

@section('content')

<!-- Hero Section -->
<div class="w-full bg-white dark:bg-[#111621] relative">
    <div class="absolute inset-0 opacity-5 pointer-events-none bg-[radial-gradient(#1754cf_1px,transparent_1px)] [background-size:16px_16px]"></div>
    <div class="flex justify-center px-4 md:px-10 lg:px-40 py-5">
        <div class="flex flex-col max-w-[1280px] flex-1">
            <div class="@container">
                <div class="flex flex-col gap-6 py-10 lg:py-20 @[864px]:flex-row items-center">
                    <div class="flex flex-col gap-6 @[480px]:min-w-[400px] @[480px]:gap-8 flex-1">
                        <div class="flex flex-col gap-4 text-left">
                            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-blue-50 dark:bg-blue-900/30 w-fit">
                                <span class="material-symbols-outlined text-primary text-sm">auto_awesome</span>
                                <span class="text-primary text-xs font-bold uppercase tracking-wider">AI-Powered Publishing</span>
                            </div>
                            <h1 class="text-[#111318] dark:text-white text-4xl font-black leading-tight tracking-[-0.033em] @[480px]:text-5xl lg:text-6xl">
                                Publish Smarter. Review Faster. Decide with Confidence.
                            </h1>
                            <h2 class="text-[#636f88] dark:text-gray-400 text-lg font-normal leading-normal max-w-xl">
All manuscripts are reviewed by expert reviewers,
while AI supports submission handling, tracking, and communication efficiency.                        </div>
                        <div class="flex flex-wrap gap-3">
                            <button class="flex min-w-[84px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-12 px-6 bg-primary text-white text-base font-bold leading-normal tracking-[0.015em] hover:bg-blue-700 transition-colors shadow-lg shadow-blue-500/30">
                                <span class="truncate">Submit Manuscript</span>
                                <span class="material-symbols-outlined ml-2 text-sm">arrow_forward</span>
                            </button>
                        </div>
                        <div class="flex items-center gap-4 text-sm text-[#636f88] dark:text-gray-500 mt-2">
                            <div class="flex items-center gap-1">
                                <span class="material-symbols-outlined text-primary" style="font-size: 18px;">check_circle</span>
                                <span>COPE Compliant</span>
                            </div>
                            <div class="flex items-center gap-1">
                                <span class="material-symbols-outlined text-primary" style="font-size: 18px;">check_circle</span>
                                <span>Avg. 21 Days Review</span>
                            </div>
                        </div>
                    </div>
                    <div class="w-full flex-1 mt-10 lg:mt-0 relative group">
                        <div class="absolute -inset-1 bg-gradient-to-r from-blue-600 to-cyan-400 rounded-xl blur opacity-25 group-hover:opacity-50 transition duration-1000 group-hover:duration-200"></div>
                        <div class="relative w-full bg-center bg-no-repeat aspect-video bg-cover rounded-xl shadow-2xl" data-alt="Abstract digital network visualization representing data flow and automation" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDBehZE_L78h8_q6UjIdJa7faDIVaQtz0PM5dmi-euXdKb9uV-OGbGiomMUcJCxWX_CWizhOIxlfZiGl2c0uwgbdzZyldHWg-gdTrI49kLjvLABchft7H4rPZ2xnR72VfdOwQF3dcId6k0lY7l4nucpESwVfLTcmuE9NkbRMEDGUmXC7L7XUQ_X464PgYXmdtQ9_YgtJw0jkAK4vVQ1qnM3-VI5KOjZaxrSxjGIU7MBa7F9003L83Juztb9PSezgnm18cd2kB_DlwYL");'>
                            <!-- Overlay for contrast if needed -->
                            <div class="absolute inset-0 bg-gradient-to-tr from-black/20 to-transparent rounded-xl"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- LoA Verification Banner (Tech Emphasis) -->
<div class="w-full bg-primary py-12">
    <div class="flex justify-center px-4 md:px-10 lg:px-40">
        <div class="max-w-[1280px] w-full flex flex-col md:flex-row items-center justify-between gap-8">
            <div class="flex flex-col text-white">
                <h3 class="text-2xl font-bold flex items-center gap-2">
                    <span class="material-symbols-outlined">verified_user</span>
                    Verify Acceptance
                </h3>
                <p class="text-blue-100 opacity-90">Instant verification for institutional validation.</p>
            </div>
            <div class="flex w-full md:w-auto flex-1 max-w-lg gap-2 bg-white/10 p-2 rounded-xl backdrop-blur-sm border border-white/20">
                <input class="w-full bg-transparent border-none text-white placeholder-blue-200 focus:ring-0 px-4 py-2 font-mono text-sm" placeholder="Enter LoA Reference ID (e.g. TSP-2023-8X9)" type="text"/>
                <button class="bg-white text-primary px-6 py-2 rounded-lg font-bold hover:bg-blue-50 transition-colors whitespace-nowrap">
                    Verify Now
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Journals Grid Section -->
<div class="w-full bg-background-light dark:bg-[#0d1117] py-16">
    <div class="flex justify-center px-4 md:px-10 lg:px-40">
        <div class="flex flex-col max-w-[1280px] flex-1">
            <div class="flex justify-between items-end px-4 pb-8">
                <div>
                    <h2 class="text-[#111318] dark:text-white text-3xl font-bold leading-tight tracking-[-0.015em]">High-Impact Journals</h2>
                    <p class="text-[#636f88] mt-2">Leading research across technology, science, and economics.</p>
                </div>
                <a class="hidden sm:flex items-center text-primary font-bold hover:underline" href="#">
                    View all journals <span class="material-symbols-outlined text-sm ml-1">arrow_forward</span>
                </a>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 p-4">
                <!-- Journal Card 1 -->
                <div class="group flex flex-col gap-3 bg-white dark:bg-[#1a202c] p-4 rounded-xl border border-[#dcdfe5] dark:border-gray-800 hover:shadow-xl hover:border-primary/50 transition-all duration-300">
                    <div class="w-full h-48 bg-center bg-no-repeat bg-cover rounded-lg relative overflow-hidden" data-alt="Abstract blue digital pattern cover art for AI journal" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDKdhmDYp5g1tMMyg9pnDZ9TS5v8T86K48smeyLxPX6RyUdw6zPpQeL7ByagbYurMC2mL2PqFQVb389VQLQ1yxtQeLs43tjfUIR9I2zf-hPQ8xbYtn2w11LKqz7vuebLvFMKawadmDUVYhGy0gZ06QdyorRjz1w7zgrPVrmStNz9ly5DPB2YZZz8tRq6kfKuLu8UVbBK8VIGardSeMxtjRHFQJi7ZAejcypN-PDaw5uwHiGHhi0yf3dWZiCz2wDc1Y2XNDP6NDDc8uA");'>
                        <div class="absolute top-2 right-2 bg-green-500 text-white text-xs font-bold px-2 py-1 rounded shadow-sm">
                            Open
                        </div>
                    </div>
                    <div class="flex flex-col flex-1">
                        <h3 class="text-[#111318] dark:text-white text-lg font-bold leading-snug group-hover:text-primary transition-colors">Journal of AI Research</h3>
                        <div class="mt-3 space-y-2">
                            <div class="flex justify-between text-sm">
                                <span class="text-[#636f88]">Impact Factor</span>
                                <span class="font-mono font-bold text-[#111318] dark:text-white">4.5</span>
                            </div>
                            <div class="flex justify-between text-sm">
                                <span class="text-[#636f88]">Avg Review</span>
                                <span class="font-mono font-bold text-[#111318] dark:text-white">20 Days</span>
                            </div>
                        </div>
                        <button class="mt-4 w-full py-2 rounded-lg border border-primary text-primary hover:bg-primary hover:text-white transition-colors text-sm font-bold">
                            Submit Paper
                        </button>
                    </div>
                </div>

                <!-- Journal Card 2 -->
                <div class="group flex flex-col gap-3 bg-white dark:bg-[#1a202c] p-4 rounded-xl border border-[#dcdfe5] dark:border-gray-800 hover:shadow-xl hover:border-primary/50 transition-all duration-300">
                    <div class="w-full h-48 bg-center bg-no-repeat bg-cover rounded-lg relative overflow-hidden" data-alt="Modern geometric architectural pattern for Economics journal cover" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCsZGfFuPY5N1lhcPiOJwzcterFPQB81z7-Zcep8hGsNg7kj4ZtpzChlX1gk5-DviAG9aB_Tp9OHUspPI8zIzaNlY-s5t706BqcM_DwuuUvb_Ek4uQgLsVZ2Gy8Ns5odR6XjFcpGGxus4ANwmiRnY304dMMzJ-Qr80-374oTA-4-GpIafYyLGBB1JmK5xde_FnrIRATEF3NOxk2F9PJiRNjJlUXSMOki4_q2CPxn5sky5Wln660bVc7gDl2dTyB4w-_Kw-C5bq4w8gT");'>
                        <div class="absolute top-2 right-2 bg-green-500 text-white text-xs font-bold px-2 py-1 rounded shadow-sm">
                            Open
                        </div>
                    </div>
                    <div class="flex flex-col flex-1">
                        <h3 class="text-[#111318] dark:text-white text-lg font-bold leading-snug group-hover:text-primary transition-colors">Review of Modern Economics</h3>
                        <div class="mt-3 space-y-2">
                            <div class="flex justify-between text-sm">
                                <span class="text-[#636f88]">Impact Factor</span>
                                <span class="font-mono font-bold text-[#111318] dark:text-white">3.2</span>
                            </div>
                            <div class="flex justify-between text-sm">
                                <span class="text-[#636f88]">Avg Review</span>
                                <span class="font-mono font-bold text-[#111318] dark:text-white">25 Days</span>
                            </div>
                        </div>
                        <button class="mt-4 w-full py-2 rounded-lg border border-primary text-primary hover:bg-primary hover:text-white transition-colors text-sm font-bold">
                            Submit Paper
                        </button>
                    </div>
                </div>

                <!-- Journal Card 3 -->
                <div class="group flex flex-col gap-3 bg-white dark:bg-[#1a202c] p-4 rounded-xl border border-[#dcdfe5] dark:border-gray-800 hover:shadow-xl hover:border-primary/50 transition-all duration-300">
                    <div class="w-full h-48 bg-center bg-no-repeat bg-cover rounded-lg relative overflow-hidden" data-alt="DNA strand visualization for Computational Biology journal cover" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCfxX-_lYLA1uHy-kbp1D_K4xEXiqxo9OYRyzr1uz5E-mfQY9q40tLSTPdoIAV3ZG5nLLwyWEaajImv5uPZXAJt-RTyMwQVMUySPZ6UpdhKfzlDsmDyFfHtSILDt9Tq4Ghs1n4uZYcIwmTUTt5tshNByCTxD9AikoBzEA-DmzTBErDEyyAerUSxs3__9-6MNI68Fcc0QQdUenMCL4m-ma6vF11_O6mP4dhtTigtvDQ3TsykMhdoTcuN0SfwHOwDRwdhqbHHLVKz9qMG");'>
                        <div class="absolute top-2 right-2 bg-green-500 text-white text-xs font-bold px-2 py-1 rounded shadow-sm">
                            Open
                        </div>
                    </div>
                    <div class="flex flex-col flex-1">
                        <h3 class="text-[#111318] dark:text-white text-lg font-bold leading-snug group-hover:text-primary transition-colors">Computational Biology</h3>
                        <div class="mt-3 space-y-2">
                            <div class="flex justify-between text-sm">
                                <span class="text-[#636f88]">Impact Factor</span>
                                <span class="font-mono font-bold text-[#111318] dark:text-white">5.1</span>
                            </div>
                            <div class="flex justify-between text-sm">
                                <span class="text-[#636f88]">Avg Review</span>
                                <span class="font-mono font-bold text-[#111318] dark:text-white">18 Days</span>
                            </div>
                        </div>
                        <button class="mt-4 w-full py-2 rounded-lg border border-primary text-primary hover:bg-primary hover:text-white transition-colors text-sm font-bold">
                            Submit Paper
                        </button>
                    </div>
                </div>

                <!-- Journal Card 4 -->
                <div class="group flex flex-col gap-3 bg-white dark:bg-[#1a202c] p-4 rounded-xl border border-[#dcdfe5] dark:border-gray-800 hover:shadow-xl hover:border-primary/50 transition-all duration-300">
                    <div class="w-full h-48 bg-center bg-no-repeat bg-cover rounded-lg relative overflow-hidden" data-alt="Global connectivity map for Global Health Tech journal cover" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCLbYwoGeJubi5w6SFLBnLAZeurXCbzXc__Ch6LAR3K75rZQuxdqo3nXpUXlELJjx_uHrRMsiGtuzSGBYwKIu6hkcSzu8GSxE9QyzDoR1zEoVLaRQSb_QCZ29BL4CM-CdzmULuAdHdoODi42OPrD-NrK415qSgv9LTdyn7zJrcTLYbzMi60HhFX6cSiqLDj9I5yRd42diMYxrCszFUf8F_JBBc-68bXatqwFEHPniS06uY59RQApVb0h0v-jG18ItElRHQDCPb1UZ2e");'>
                        <div class="absolute top-2 right-2 bg-amber-500 text-white text-xs font-bold px-2 py-1 rounded shadow-sm">
                            Special Issue
                        </div>
                    </div>
                    <div class="flex flex-col flex-1">
                        <h3 class="text-[#111318] dark:text-white text-lg font-bold leading-snug group-hover:text-primary transition-colors">Global Health Tech</h3>
                        <div class="mt-3 space-y-2">
                            <div class="flex justify-between text-sm">
                                <span class="text-[#636f88]">Impact Factor</span>
                                <span class="font-mono font-bold text-[#111318] dark:text-white">2.9</span>
                            </div>
                            <div class="flex justify-between text-sm">
                                <span class="text-[#636f88]">Avg Review</span>
                                <span class="font-mono font-bold text-[#111318] dark:text-white">22 Days</span>
                            </div>
                        </div>
                        <button class="mt-4 w-full py-2 rounded-lg border border-primary text-primary hover:bg-primary hover:text-white transition-colors text-sm font-bold">
                            Submit Paper
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Workflow Section -->
<div class="w-full bg-white dark:bg-[#111621] py-16">
    <div class="flex justify-center px-4 md:px-10 lg:px-40">
        <div class="flex flex-col max-w-[1280px] flex-1">
            <div class="flex flex-col gap-10 px-4">
                <div class="flex flex-col gap-4 text-center items-center">
                    <h2 class="text-[#111318] dark:text-white text-3xl font-black leading-tight max-w-[720px]">
                        Streamlined Publishing Workflow
                    </h2>
                    <p class="text-[#636f88] text-lg font-normal leading-normal max-w-[720px]">
                        From Manuscript to Letter of Acceptance (LoA) in record time, ensuring transparency at every step.
                    </p>
                </div>
                <!-- Steps Layout -->
                <div class="relative grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 pt-8">
                    <!-- Connecting Line (Desktop) -->
                    <div class="hidden lg:block absolute top-[52px] left-0 w-full h-1 bg-[#f0f2f4] dark:bg-gray-800 -z-10"></div>
                    
                    <!-- Step 1 -->
                    <div class="flex flex-col items-center text-center gap-4 group">
                        <div class="size-14 rounded-full bg-primary text-white flex items-center justify-center shadow-lg shadow-blue-500/20 group-hover:scale-110 transition-transform">
                            <span class="material-symbols-outlined">upload_file</span>
                        </div>
                        <div class="bg-white dark:bg-[#1a202c] p-6 rounded-xl border border-[#dcdfe5] dark:border-gray-800 w-full h-full hover:border-primary transition-colors">
                            <h3 class="text-[#111318] dark:text-white text-lg font-bold mb-2">1. Auto-Check</h3>
                            <p class="text-[#636f88] text-sm">AI-driven preliminary checks for formatting compliance and plagiarism detection.</p>
                        </div>
                    </div>

                    <!-- Step 2 -->
                    <div class="flex flex-col items-center text-center gap-4 group">
                        <div class="size-14 rounded-full bg-white border-2 border-primary text-primary flex items-center justify-center shadow-lg group-hover:bg-primary group-hover:text-white transition-all">
                            <span class="material-symbols-outlined">groups</span>
                        </div>
                        <div class="bg-white dark:bg-[#1a202c] p-6 rounded-xl border border-[#dcdfe5] dark:border-gray-800 w-full h-full hover:border-primary transition-colors">
                            <h3 class="text-[#111318] dark:text-white text-lg font-bold mb-2">2. Peer Review</h3>
                            <p class="text-[#636f88] text-sm">Rigorous double-blind review managed by field experts with automated reminders.</p>
                        </div>
                    </div>

                    <!-- Step 3 -->
                    <div class="flex flex-col items-center text-center gap-4 group">
                        <div class="size-14 rounded-full bg-white border-2 border-primary text-primary flex items-center justify-center shadow-lg group-hover:bg-primary group-hover:text-white transition-all">
                            <span class="material-symbols-outlined">verified</span>
                        </div>
                        <div class="bg-white dark:bg-[#1a202c] p-6 rounded-xl border border-[#dcdfe5] dark:border-gray-800 w-full h-full hover:border-primary transition-colors">
                            <h3 class="text-[#111318] dark:text-white text-lg font-bold mb-2">3. Instant LoA</h3>
                            <p class="text-[#636f88] text-sm">Automated generation of the Letter of Acceptance immediately upon approval.</p>
                        </div>
                    </div>

                    <!-- Step 4 -->
                    <div class="flex flex-col items-center text-center gap-4 group">
                        <div class="size-14 rounded-full bg-white border-2 border-primary text-primary flex items-center justify-center shadow-lg group-hover:bg-primary group-hover:text-white transition-all">
                            <span class="material-symbols-outlined">public</span>
                        </div>
                        <div class="bg-white dark:bg-[#1a202c] p-6 rounded-xl border border-[#dcdfe5] dark:border-gray-800 w-full h-full hover:border-primary transition-colors">
                            <h3 class="text-[#111318] dark:text-white text-lg font-bold mb-2">4. Global Indexing</h3>
                            <p class="text-[#636f88] text-sm">Immediate data push to major databases like Scopus, WoS, and DOAJ.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Author Tools & Features -->
<div class="w-full bg-[#f6f8fb] dark:bg-[#0d1117] py-16">
    <div class="flex justify-center px-4 md:px-10 lg:px-40">
        <div class="flex flex-col max-w-[1280px] flex-1">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="flex flex-col gap-6">
                    <h2 class="text-[#111318] dark:text-white text-3xl font-black leading-tight">
                        Powerful Tools for Modern Authors
                    </h2>
                    <p class="text-[#636f88] text-lg">
                        We provide a suite of automated tools designed to remove the friction from academic publishing, allowing you to focus on your research.
                    </p>
                    <div class="flex flex-col gap-4 mt-4">
                        <!-- Tool Item -->
                        <div class="flex gap-4 p-4 rounded-lg bg-white dark:bg-[#1a202c] shadow-sm border border-transparent hover:border-blue-200 transition-colors">
                            <div class="mt-1 text-primary">
                                <span class="material-symbols-outlined">dashboard</span>
                            </div>
                            <div>
                                <h4 class="font-bold text-[#111318] dark:text-white">Real-time Dashboard</h4>
                                <p class="text-sm text-[#636f88]">Track every step of the review process with granular status updates.</p>
                            </div>
                        </div>
                        <!-- Tool Item -->
                        <div class="flex gap-4 p-4 rounded-lg bg-white dark:bg-[#1a202c] shadow-sm border border-transparent hover:border-blue-200 transition-colors">
                            <div class="mt-1 text-primary">
                                <span class="material-symbols-outlined">format_quote</span>
                            </div>
                            <div>
                                <h4 class="font-bold text-[#111318] dark:text-white">Smart Citation Formatter</h4>
                                <p class="text-sm text-[#636f88]">Automatically format your bibliography to our specific journal standards.</p>
                            </div>
                        </div>
                        <!-- Tool Item -->
                        <div class="flex gap-4 p-4 rounded-lg bg-white dark:bg-[#1a202c] shadow-sm border border-transparent hover:border-blue-200 transition-colors">
                            <div class="mt-1 text-primary">
                                <span class="material-symbols-outlined">support_agent</span>
                            </div>
                            <div>
                                <h4 class="font-bold text-[#111318] dark:text-white">24/7 AI Support</h4>
                                <p class="text-sm text-[#636f88]">Get instant answers to submission queries via our specialized chatbot.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Visual Representation -->
                <div class="relative h-full min-h-[400px] rounded-2xl bg-white dark:bg-[#1a202c] shadow-2xl p-6 border border-[#dcdfe5] dark:border-gray-800 overflow-hidden">
                    <div class="absolute top-0 right-0 p-4 opacity-10">
                        <span class="material-symbols-outlined text-[200px]">analytics</span>
                    </div>
                    <!-- Chat with Mahesa -->
                    <div class="flex flex-col items-center justify-center gap-6 relative z-10 h-full">
                        <!-- Profile Image -->
                        <div class="relative group">
                            <div class="absolute -inset-2 bg-gradient-to-r from-primary to-blue-400 rounded-full blur-lg opacity-50 group-hover:opacity-75 transition-opacity"></div>
                            <div class="relative size-40 rounded-full overflow-hidden border-4 border-white dark:border-gray-800 shadow-2xl">
                                <img src="https://ui-avatars.com/api/?name=Mahesa&size=200&background=1754cf&color=fff&bold=true" alt="Mahesa" class="w-full h-full object-cover">
                            </div>
                        </div>
                        
                        <!-- Chat Text -->
                        <div class="text-center">
                            <h3 class="text-2xl font-bold text-[#111318] dark:text-white mb-2">Chat with Mahesa</h3>
                            <p class="text-[#636f88] text-sm max-w-xs">Get instant support for your submission queries and publishing questions</p>
                        </div>
                        
                        <!-- Chat Button -->
                        <button class="flex items-center gap-2 px-6 py-3 bg-primary text-white rounded-lg font-bold hover:bg-blue-700 transition-colors shadow-lg shadow-blue-500/30">
                            <span class="material-symbols-outlined">chat</span>
                            <span>Start Conversation</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Ethical Statement / Footer Top -->
<div class="w-full bg-white dark:bg-[#111621] py-12 border-t border-[#f0f2f4] dark:border-gray-800">
    <div class="flex justify-center px-4 md:px-10 lg:px-40">
        <div class="flex flex-col items-center text-center max-w-[800px]">
            <h3 class="text-xl font-bold mb-4">Commitment to Ethical Publishing</h3>
            <p class="text-[#636f88] mb-8">
                TechScholar Press adheres strictly to the COPE (Committee on Publication Ethics) guidelines. We believe in transparency, rigorous peer review, and the democratization of knowledge through technology.
            </p>
            <div class="flex flex-wrap justify-center gap-8 opacity-60 grayscale hover:grayscale-0 transition-all">
                <!-- Placeholders for Logos using text for now or simple shapes -->
                <div class="h-8 flex items-center font-bold text-xl text-gray-400">Web of Science</div>
                <div class="h-8 flex items-center font-bold text-xl text-gray-400">DOAJ</div>
                <div class="h-8 flex items-center font-bold text-xl text-gray-400">Google Scholar</div>
            </div>
        </div>
    </div>
</div>

@endsection
