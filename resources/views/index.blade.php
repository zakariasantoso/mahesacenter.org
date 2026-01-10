@extends('layouts.public')

@section('title', 'Mahesa Research Center')

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
                            <a href="{{ route('journals') }}" class="flex min-w-[84px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-12 px-6 bg-primary text-white text-base font-bold leading-normal tracking-[0.015em] hover:bg-blue-700 transition-colors shadow-lg shadow-blue-500/30">
                                <span class="truncate">Submit Manuscript</span>
                                <span class="material-symbols-outlined ml-2 text-sm">arrow_forward</span>
                            </a>
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
                        <div class="relative w-full bg-center bg-no-repeat aspect-video bg-cover rounded-xl shadow-2xl" data-alt="Abstract digital network visualization representing data flow and automation" style='background-image: url("{{ asset('main-image.jpeg') }}");'>
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
    <div class="flex justify-center px-4 md:px-10 lg:px-40 w-full">
        <div class="max-w-[1280px] w-full flex flex-col gap-6">
            <div class="w-full flex flex-col md:flex-row items-center justify-between gap-8">
                <div class="flex flex-col text-white">
                    <h3 class="text-2xl font-bold flex items-center gap-2">
                        <span class="material-symbols-outlined">verified_user</span>
                        Verify Acceptance
                    </h3>
                    <p class="text-blue-100 opacity-90">Instant validation for accepted submissions.</p>
                </div>
                <div class="flex w-full md:w-auto flex-1 max-w-lg gap-2 bg-white/10 p-2 rounded-xl backdrop-blur-sm border border-white/20">
                    <input data-loa-input class="w-full bg-transparent border-none text-white placeholder-blue-200 focus:ring-0 px-4 py-2 font-mono text-sm" placeholder="Enter LoA Reference ID (e.g. TSP-2023-8X9)" type="text" aria-label="Letter of Acceptance reference ID"/>
                    <button type="button" data-loa-button class="bg-white text-primary px-6 py-2 rounded-lg font-bold hover:bg-blue-50 transition-colors whitespace-nowrap">
                        Verify Now
                    </button>
                </div>
            </div>
            <div class="max-w-[1280px] w-full">
                <p data-loa-status class="text-white/90 text-sm"></p>
                <div data-loa-result class="mt-4 hidden"></div>
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
                <a class="hidden sm:flex items-center text-primary font-bold hover:underline" href="{{ route('journals') }}">
                    View all journals <span class="material-symbols-outlined text-sm ml-1">arrow_forward</span>
                </a>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 p-4">
                @php
                    use Illuminate\Support\Str;
                    $coverBase = 'https://mrc.kamibisa.online/storage/';
                    $journals = $journals ?? [];
                @endphp

                @forelse($journals as $journal)
                    @php
                        $coverPath = $journal['journal_cover'] ?? null;
                        $coverUrl = $coverPath
                            ? (Str::startsWith($coverPath, ['http://', 'https://'])
                                ? $coverPath
                                : $coverBase . ltrim($coverPath, '/'))
                            : 'https://placehold.co/400x300?text=Journal+Cover';
                        $submitUrl = $journal['ojs_url'] ?? '#';
                    @endphp

                    <div class="group flex flex-col gap-3 bg-white dark:bg-[#1a202c] p-4 rounded-xl border border-[#dcdfe5] dark:border-gray-800 hover:shadow-xl hover:border-primary/50 transition-all duration-300">
                        <div class="w-full h-48 bg-center bg-no-repeat bg-cover rounded-lg relative overflow-hidden" data-alt="{{ $journal['name'] ?? 'Journal cover' }}" style="background-image: url('{{ $coverUrl }}');">
                            @if(($journal['is_active'] ?? false))
                                <div class="absolute top-2 right-2 bg-green-500 text-white text-xs font-bold px-2 py-1 rounded shadow-sm">
                                    Open
                                </div>
                            @endif
                        </div>
                        <div class="flex flex-col flex-1">
                            <h3 class="text-[#111318] dark:text-white text-lg font-bold leading-snug group-hover:text-primary transition-colors">{{ $journal['name'] ?? 'Untitled Journal' }}</h3>
                            <p class="text-[#636f88] text-sm mt-2 line-clamp-2">{{ $journal['short_code'] ?? '—' }}</p>
                            <a href="{{ $submitUrl }}" target="_blank" rel="noopener" class="mt-4 w-full py-2 rounded-lg border border-primary text-primary hover:bg-primary hover:text-white transition-colors text-sm font-bold text-center">
                                Submit Paper
                            </a>
                        </div>
                    </div>
                @empty
                    <div class="col-span-1 sm:col-span-2 lg:col-span-4 text-center text-[#636f88] dark:text-gray-400 bg-white dark:bg-[#1a202c] rounded-xl border border-dashed border-[#dcdfe5] dark:border-gray-800 p-8">
                        Journals are loading. Please refresh in a moment.
                    </div>
                @endforelse
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
                                <img src="{{ asset('cs.jpg') }}" alt="Mahesa" class="w-full h-full object-cover">
                            </div>
                        </div>
                        
                        <!-- Chat Text -->
                        <div class="text-center">
                            <h3 class="text-2xl font-bold text-[#111318] dark:text-white mb-2">Chat with Mahesa</h3>
                            <p class="text-[#636f88] text-sm max-w-xs">Get instant support for your submission queries and publishing questions</p>
                        </div>
                        
                        <!-- Chat Button -->
                        <a href="https://wa.me/6285178531851" target="_blank" rel="noopener" class="flex items-center gap-2 px-6 py-3 bg-primary text-white rounded-lg font-bold hover:bg-blue-700 transition-colors shadow-lg shadow-blue-500/30">
                            <span class="material-symbols-outlined">chat</span>
                            <span>Start Conversation</span>
                        </a>
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

@push('scripts')
<script>
// Lightweight LoA verification client
document.addEventListener('DOMContentLoaded', () => {
    const apiUrl = 'https://mrc.kamibisa.online/api/loa/verify-by-number';
    const input = document.querySelector('[data-loa-input]');
    const button = document.querySelector('[data-loa-button]');
    const statusEl = document.querySelector('[data-loa-status]');
    const resultEl = document.querySelector('[data-loa-result]');

    if (!input || !button || !statusEl || !resultEl) {
        return;
    }

    const setStatus = (message, tone = 'muted') => {
        if (!message) {
            statusEl.textContent = '';
            return;
        }

        const toneClass = tone === 'error' ? 'text-red-100' : tone === 'success' ? 'text-green-100' : 'text-white/90';
        statusEl.className = `text-sm ${toneClass}`;
        statusEl.textContent = message;
    };

    const setLoading = (isLoading) => {
        button.disabled = isLoading;
        button.textContent = isLoading ? 'Verifying...' : 'Verify Now';
        button.classList.toggle('opacity-70', isLoading);
        button.classList.toggle('cursor-not-allowed', isLoading);
    };

    const clearResult = () => {
        resultEl.innerHTML = '';
        resultEl.classList.add('hidden');
    };

    const formatDate = (value) => {
        if (!value) return '—';
        const date = new Date(value);
        if (Number.isNaN(date.getTime())) return value;
        return date.toLocaleDateString('en-US', { year: 'numeric', month: 'short', day: 'numeric' });
    };

    const addRow = (parent, label, value) => {
        const row = document.createElement('div');
        row.className = 'flex justify-between items-center gap-3 py-2 border-b border-slate-100 last:border-b-0';

        const labelEl = document.createElement('span');
        labelEl.className = 'text-sm font-medium text-slate-600';
        labelEl.textContent = label;

        const valueEl = document.createElement('span');
        valueEl.className = 'text-sm text-slate-900 text-right';
        valueEl.textContent = value ?? '—';

        row.append(labelEl, valueEl);
        parent.appendChild(row);
    };

    const renderResult = (data) => {
        resultEl.innerHTML = '';

        const card = document.createElement('div');
        card.className = 'bg-white text-[#111318] rounded-xl shadow-xl border border-white/40 overflow-hidden';

        const header = document.createElement('div');
        header.className = 'bg-primary text-white px-4 py-3 flex items-center justify-between';

        const title = document.createElement('div');
        title.className = 'text-sm font-bold tracking-wide uppercase';
        title.textContent = `LoA ${data.loa_number || 'Reference'}`;

        const statusBadge = document.createElement('span');
        statusBadge.className = 'text-xs font-bold px-2 py-1 rounded bg-white/15 border border-white/20';
        statusBadge.textContent = (data.status || 'unknown').toString().toUpperCase();

        header.append(title, statusBadge);

        const body = document.createElement('div');
        body.className = 'p-4 grid grid-cols-1 md:grid-cols-2 gap-4';

        const left = document.createElement('div');
        left.className = 'space-y-0';
        addRow(left, 'Author', data.author_name);
        addRow(left, 'Email', data.author_email);
        addRow(left, 'Article', data.article_title);
        addRow(left, 'Article ID', data.article_id);
        addRow(left, 'Issue', data.issue);
        addRow(left, 'Volume', data.volume);
        addRow(left, 'Publication Date', formatDate(data.publication_date));

        const right = document.createElement('div');
        right.className = 'space-y-0';
        addRow(right, 'Journal', data?.journal?.name);
        addRow(right, 'Short Code', data?.journal?.short_code);
        addRow(right, 'Invoice Amount', data.apc_invoice_amount ? `IDR ${numberFormat(data.apc_invoice_amount)}` : '—');
        addRow(right, 'Invoice Date', formatDate(data.invoice_date));

        if (data.verification_link) {
            const linkRow = document.createElement('div');
            linkRow.className = 'flex justify-between items-center gap-3 py-2';

            const label = document.createElement('span');
            label.className = 'text-sm font-medium text-slate-600';
            label.textContent = 'Verification Link';

            const link = document.createElement('a');
            link.className = 'text-sm font-bold text-primary hover:underline text-right break-all';
            link.href = data.verification_link;
            link.target = '_blank';
            link.rel = 'noopener';
            link.textContent = data.verification_link;

            linkRow.append(label, link);
            right.appendChild(linkRow);
        }

        body.append(left, right);
        card.append(header, body);
        resultEl.appendChild(card);
        resultEl.classList.remove('hidden');
    };

    const verifyLoa = async () => {
        const loaNumber = input.value.trim();

        if (!loaNumber) {
            setStatus('Please enter a Letter of Acceptance reference ID.', 'error');
            clearResult();
            input.focus();
            return;
        }

        setLoading(true);
        setStatus('Verifying LoA reference...', 'muted');
        clearResult();

        try {
            const response = await fetch(apiUrl, {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({ loa_number: loaNumber }),
            });

            const payload = await response.json();

            if (!payload.success) {
                setStatus(payload.message || 'LoA not found. Please check the reference ID.', 'error');
                return;
            }

            setStatus('LoA verified successfully.', 'success');
            renderResult(payload.data || {});
        } catch (error) {
            setStatus('Unable to verify right now. Please try again in a moment.', 'error');
            clearResult();
        } finally {
            setLoading(false);
        }
    };

    const numberFormat = (num) => {
        return num.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ',');
    };

    button.addEventListener('click', verifyLoa);
    input.addEventListener('keydown', (event) => {
        if (event.key === 'Enter') {
            event.preventDefault();
            verifyLoa();
        }
    });
});
</script>
@endpush
