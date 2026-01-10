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
            @php
                use Illuminate\Support\Str;
                $coverBase = 'https://mrc.kamibisa.online/storage/';
                $journals = $journals ?? [];
                
                // Helper function to extract SINTA level from scope_description
                $getSintaLevel = function($scopeDesc) {
                    if (is_string($scopeDesc)) {
                        $decoded = json_decode($scopeDesc, true);
                        return $decoded['sinta']['level'] ?? null;
                    }
                    return $scopeDesc['sinta']['level'] ?? null;
                };
                
                // Helper function to extract APC from scope_description
                $getApcInfo = function($scopeDesc) {
                    if (is_string($scopeDesc)) {
                        $decoded = json_decode($scopeDesc, true);
                        return $decoded['apc'] ?? null;
                    }
                    return $scopeDesc['apc'] ?? null;
                };
            @endphp

            @forelse($journals as $journal)
                @php
                    $coverPath = $journal['journal_cover'] ?? null;
                    $coverUrl = $coverPath
                        ? (Str::startsWith($coverPath, ['http://', 'https://'])
                            ? $coverPath
                            : $coverBase . ltrim($coverPath, '/'))
                        : 'https://placehold.co/600x400?text=Journal+Cover';

                    $submitUrl = $journal['ojs_url'] ?? '#';
                    $descRaw = $journal['web_description'] ?? '';
                    $desc = Str::limit(trim(strip_tags($descRaw)), 260);
                @endphp

                <div class="bg-white dark:bg-[#1a202c] rounded-xl border border-[#dcdfe5] dark:border-gray-800 overflow-hidden hover:shadow-2xl transition-all duration-300 hover:border-primary/50">
                    <div class="grid md:grid-cols-[300px_1fr] gap-6 p-6">
                        <!-- Thumbnail -->
                        <div class="relative group">
                            <div class="absolute -inset-1 bg-gradient-to-r from-primary to-blue-400 rounded-lg blur opacity-25 group-hover:opacity-50 transition-opacity"></div>
                            <div class="relative w-full h-64 md:h-full bg-center bg-no-repeat bg-cover rounded-lg shadow-lg" style="background-image: url('{{ $coverUrl }}');">
                                @if(($journal['is_active'] ?? false))
                                    <div class="absolute top-3 right-3 bg-green-500 text-white text-xs font-bold px-3 py-1 rounded-full shadow-lg">
                                        Open Access
                                    </div>
                                @endif
                            </div>
                        </div>
                        
                        <!-- Content -->
                        <div class="flex flex-col">
                            <!-- Header -->
                            <div class="flex flex-col gap-2 mb-4">
                                <h2 class="text-[#111318] dark:text-white text-2xl font-bold leading-tight hover:text-primary transition-colors">
                                    {{ $journal['name'] ?? 'Untitled Journal' }}
                                </h2>
                                <div class="flex flex-wrap items-center gap-4 text-sm text-[#636f88]">
                                    {{-- @if(!empty($journal['short_code']))
                                        <div class="flex items-center gap-1">
                                            <span class="material-symbols-outlined text-primary" style="font-size: 18px;">tag</span>
                                            <span><strong>Code:</strong> {{ $journal['short_code'] }}</span>
                                        </div>
                                    @endif --}}
                                    @if(!empty($journal['issn']))
                                        <div class="flex items-center gap-1">
                                            <span class="material-symbols-outlined text-primary" style="font-size: 18px;">fingerprint</span>
                                            <span><strong>ISSN:</strong> {{ $journal['issn'] }}</span>
                                        </div>
                                    @endif
                                    @php
                                        $sintaLevel = $getSintaLevel($journal['scope_description'] ?? null);
                                        $akreditasiLevel = $journal['akreditasi_level'] ?? $sintaLevel;
                                    @endphp
                                    @if(!empty($akreditasiLevel))
                                        <div class="flex items-center gap-1">
                                            <span class="material-symbols-outlined text-primary" style="font-size: 18px;">trending_up</span>
                                            <span><strong>SINTA:</strong> {{ $akreditasiLevel }}</span>
                                        </div>
                                    @endif
                                    @php
                                        $apcInfo = $getApcInfo($journal['scope_description'] ?? null);
                                    @endphp
                                    @if(!empty($apcInfo) && ($apcInfo['has_apc'] ?? false))
                                        <div class="flex items-center gap-1">
                                            <span class="material-symbols-outlined text-primary" style="font-size: 18px;">paid</span>
                                            <span><strong>APC:</strong> {{ number_format($apcInfo['publication_fee'] ?? 0) }} {{ $apcInfo['currency'] ?? 'IDR' }}</span>
                                        </div>
                                    @endif
                                </div>
                            </div>
                            
                            <!-- Description -->
                            <p class="text-[#636f88] text-base leading-relaxed mb-6 flex-1">
                                {{ $desc ?: 'Discover the latest research from this journal.' }}
                            </p>
                            
                            <!-- Action Buttons -->
                            <div class="flex flex-wrap gap-3">
                                <a href="{{ $submitUrl }}" target="_blank" rel="noopener" class="flex items-center gap-2 px-6 py-3 bg-primary text-white rounded-lg font-bold hover:bg-blue-700 transition-colors shadow-lg shadow-blue-500/30">
                                    <span class="material-symbols-outlined text-sm">upload_file</span>
                                    <span>Submit Manuscript</span>
                                </a>
                                <a href="{{ $submitUrl }}" target="_blank" rel="noopener" class="flex items-center gap-2 px-6 py-3 bg-white dark:bg-gray-800 border-2 border-primary text-primary dark:text-primary rounded-lg font-bold hover:bg-primary hover:text-white dark:hover:bg-primary transition-colors">
                                    <span class="material-symbols-outlined text-sm">visibility</span>
                                    <span>View Journal</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="bg-white dark:bg-[#1a202c] rounded-xl border border-dashed border-[#dcdfe5] dark:border-gray-800 p-10 text-center text-[#636f88] dark:text-gray-400">
                    Journals are loading. Please refresh in a moment.
                </div>
            @endforelse

        </div>
    </div>
</div>

@endsection
