<main class="flex-1 container mx-auto px-4 py-8">
    <div class="max-w-2xl mx-auto">
        <div class="card bg-base-100 shadow mt-8">
            <div class="card-body">
                <h1 class="text-3xl font-bold">{{ $title ?? 'Chirper' }}</h1>
                <div class="mt-6">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </div>
</main>