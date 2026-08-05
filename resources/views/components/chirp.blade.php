@props(['chirp'])

<div class="card bg-base-100">
    <div class="card-body">
        <div class="flex space-x-3">
            <div class="avatar">
                <div class="size-10 rounded-full">
                    <img src="https://avatars.laravel.cloud/{{ urlencode($chirp->user->email ?? 'anonymous') }}?vibe=ocean"
                        alt="{{ $chirp->user->name ?? 'Anonymous' }}'s avatar" class="rounded-full" />
                </div>
            </div>

            <div class="flex-1 min-w-0">
                <div class="flex items-center space-x-1">
                    <p class="text-sm font-semibold">
                        {{ $chirp->user->name ?? 'Anonymous' }}
                    </p>
                    <span class="text-base-content/60">·</span>
                    <p class="text-sm text-base-content/60">
                        {{ $chirp->created_at->diffForHumans() }}
                    </p>
                </div>

                <p class="mt-1">
                    {{ $chirp->message }}
                </p>
            </div>
        </div>
    </div>
</div>
