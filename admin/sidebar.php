<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>

    <link rel="stylesheet" href="../dist/output.css?v=1.0.99">
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

</head>

<body>

    <div class="sidebar h-screen flex">



        <div
            class="bg-white w-64 p-6 md:hidden fixed md:relative z-50 inset-y-0 left-0 transform -translate-x-full md:translate-x-0 transition-transform duration-300 ease-in-out shadow-lg md:shadow-none">

            <button id="menu-btn" class="text-gray-700 focus:outline-none">
                <i class="fas fa-bars text-2xl"></i>
            </button>

            <div class="flex justify-center mb-4">
                <div class="overflow-hidden rounded-full w-50 h-20 flex items-center justify-center">
                    <img src="../src/img/logo1 with name.png" alt="D NEW ERA Logo"
                        class="object-cover w-full h-full scale-110">
                </div>
            </div>
            <ul class="space-y-4 mt-10">
                <li class="mb-2">
                    <button onclick="window.location.href='admin.php'"
                        class="flex items-center text-gray-500 hover:text-white gap-2 w-full px-4 py-2 rounded transition-colors duration-200 hover:bg-green-700">
                        <i class="fas fa-home"></i>
                        <span>Dashboard</span>
                    </button>
                </li>
                <li class="mb-2">
                    <button onclick="window.location.href='appointment.php'"
                        class="flex items-center text-gray-500 hover:text-white gap-2 w-full px-4 py-2 rounded transition-colors duration-200 hover:bg-green-700">
                        <i class="fas fa-calendar-alt mr-3"></i> <span>Appointments</span>
                    </button>
                </li>
                <li class="mb-2">
                    <button onclick="window.location.href='clients.php'"
                        class="flex items-center text-gray-500 hover:text-white gap-2 w-full px-4 py-2 rounded transition-colors duration-200 hover:bg-green-700">
                        <i class="fas fa-users mr-3"></i> <span>Clients information</span>
                    </button>
                </li>
                <li class="mb-2">
                    <button onclick="window.location.href='schedules.php'"
                        class="flex items-center text-gray-500 hover:text-white gap-2 w-full px-4 py-2 rounded transition-colors duration-200 hover:bg-green-700">
                        <i class="fas fa-clock mr-3"></i> <span>Schedules</span>
                    </button>
                </li>
                <li class="mb-4">
                    <button onclick="window.location.href='payments.php'"
                        class="flex items-center text-gray-500 hover:text-white gap-2 w-full px-4 py-2 rounded transition-colors duration-200 hover:bg-green-700">
                        <i class="fas fa-credit-card mr-3"></i> <span>Payments</span>
                    </button>
                </li>
            </ul>

            <div class="absolute bottom-20 left-0 w-64 px-6 pb-6">
                <hr class="border-t border-gray-500 mb-4">
                <ul class="space-y-4">

                    <li>
                        <button onclick="window.location.href='logout.php'"
                            class="flex items-center text-gray-500 hover:text-white gap-2 w-full px-4 py-2 rounded transition-colors duration-200 hover:bg-green-700">
                            <i class="fas fa-sign-out-alt mr-3"></i> <span>Log Out</span>
                        </button>
                    </li>
                </ul>
            </div>

        </div>
    </div>
    
    <script>
        const sidebar = document.getElementById("sidebar");
        const menuBtn = document.getElementById("menu-btn");

        menuBtn.addEventListener("click", () => {
            sidebar.classList.toggle("-translate-x-full");
        });
    </script>
</body>

</html>