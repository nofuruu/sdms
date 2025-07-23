<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>

    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.4.3/dist/tailwind.min.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="<?= base_url('assets/css/output.css') ?>"> -->
    <link rel="stylesheet" href="<?= base_url('assets/css/vendor/izitoast/iziToast.min.css') ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/css/vendor/animsition/animsition.min.css') ?>">


</head>

<body class="bg-[#0B192C]">

    <!-- Sidebar -->
    <?= view('partials/sidebar') ?>








    <!-- Content Container -->
    <div id="mainContent" class="ml-60 mr-4 mt-4 bg-white/90 rounded-2xl relative">

        <!-- Header Navbar -->
        <header class="flex items-center justify-between px-6 py-4 bg-white/90 rounded-t-2xl shadow-sm">
            <!-- Judul / Logo -->
            <h1 class="text-xl font-semibold text-gray-800">Dashboard</h1>

            <!-- Aksi / Profile / Notifikasi -->
            <div class="flex items-center space-x-4">
                <!-- Notifikasi
                <button class="relative text-gray-600 hover:text-blue-600 transition">
                    <i class="fas fa-bell text-lg"></i>
                    <span class="absolute top-0 right-0 inline-block w-2 h-2 bg-red-500 rounded-full"></span>
                </button> -->

                <!-- Profile -->
                <div class="flex items-center space-x-2">
                    <img src="<?= base_url('assets/images/Default.png') ?>" alt="Profile"
                        class="w-8 h-8 rounded-full object-cover">
                    <span class="text-gray-700 font-medium">Hi, Superdildo</span>
                </div>
            </div>
        </header>

        <!-- Content -->
        <div class="flex">
            <main class="flex-1 p-6 overflow-y-auto min-h-screen text-black">
                <?= $this->renderSection('content') ?>
            </main>
        </div>

        <!-- Footer -->
        <?= view('partials/footer') ?>
    </div>




</body>
<script src="<?= base_url('assets/js/vendor/jquery/jquery.min.js') ?>"></script>
<script src="<?= base_url('assets/js/vendor/izitoast/iziToast.min.js') ?>"></script>
<script src="<?= base_url('assets/js/vendor/animsition/animsition.min.js') ?>"></script>
<script src="https://cdn.tailwindcss.com"></script>
<script>
    document.getElementById('toggleSidebar').addEventListener('click', function () {
        const sidebar = document.getElementById('sidebar');
        const content = document.getElementById('mainContent'); // konten utama
        const sidebarTexts = document.querySelectorAll('.sidebar-text');

        if (sidebar.classList.contains('w-60')) {
            // Collapse ke mini
            sidebar.classList.remove('w-60');
            sidebar.classList.add('w-16');

            content.classList.remove('ml-60');
            content.classList.add('ml-16');

            sidebarTexts.forEach(el => el.classList.add('hidden'));
        } else {
            // Expand kembali
            sidebar.classList.remove('w-16');
            sidebar.classList.add('w-60');

            content.classList.remove('ml-16');
            content.classList.add('ml-60');

            sidebarTexts.forEach(el => el.classList.remove('hidden'));
        }
    });
</script>

</html>