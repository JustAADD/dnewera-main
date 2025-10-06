<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>D'newera Admin</title>

    <link rel="stylesheet" href="../dist/output.css?v=1.0.99">
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

</head>

<body>
    <!-- Sidebar -->

    <div id="sidebar"
        class=" bg-black fixed lg:static top-0 left-0 w-64 h-full bg-dark shadow-xl z-40 transform -translate-x-full lg:translate-x-0 transition-transform duration-300 ease-in-out">
       

        <div class="border-b flex items-center justify-center py-4 bg-white">
            <img src="../src/img/logo1 with name.png" alt="My App Logo" class="h-16 w-auto object-contain object-cover">
        </div>

        <nav class="p-4 px-6 space-y-2 bg-black">
            <a href="#" class="block py-2 px-4 text-gray-700 rounded hover:bg-indigo-100">
            <i class="fas fa-tachometer-alt mr-2"></i> Dashboard
            </a>
            <a href="#" class="block py-2 px-4 text-gray-700 rounded hover:bg-indigo-100">
            <i class="fas fa-users mr-2"></i> Users
            </a>
            <a href="#" class="block py-2 px-4 text-gray-700 rounded hover:bg-indigo-100">
            <i class="fas fa-cog mr-2"></i> Settings
            </a>
            <a href="#" class="block py-2 px-4 text-gray-700 rounded hover:bg-indigo-100">
            <i class="fas fa-sign-out-alt mr-2"></i> Logout
            </a>
        </nav>

    </div>

    <!-- JS Toggle -->
    <script>
        const sidebar = document.getElementById('sidebar');
        const menuBtn = document.getElementById('menuBtn');

        menuBtn.addEventListener('click', () => {
            sidebar.classList.toggle('-translate-x-full');
        });
    </script>

</body>

</html>