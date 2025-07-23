<?= $this->extend('index') ?>

<?= $this->section('content') ?>

<div class="flex flex-col items-center justify-center mt-10 space-y-4">
    <!-- SVG Icon -->
    <svg class="w-32 h-32 text-blue-500" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" d="M3 3v18h18M3 16l4.5-4.5 4 4L21 6" />
    </svg>

    <!-- Welcome Text -->
    <h2 class="text-2xl font-bold text-gray-800">Welcome to <span class="text-blue-600">fnTrackr</span></h2>
    <p class="text-gray-600 text-sm">Your personal tracking dashboard</p>
</div>


<?= $this->endSection() ?>