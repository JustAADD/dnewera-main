<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Responsive Sidebar</title>

  <link rel="stylesheet" href="../dist/output.css?v=1.0.99" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
</head>

<body class="bg-gray-100">

  <div class="h-screen flex">  
    <!-- Sidebar -->
    <div id="sidebar"
      class="bg-white w-64 p-6 fixed md:relative z-50 inset-y-0 left-0 transform -translate-x-full md:translate-x-0 transition-transform duration-300 ease-in-out shadow-lg md:shadow-none">

      <!-- Logo -->
      <div class="flex justify-center mb-4">
        <div class="overflow-hidden rounded-full w-32 h-20 flex items-center justify-center">
          <img src="../src/img/logo1 with name.png" alt="D NEW ERA Logo" class="object-cover w-full h-full scale-110" />
        </div>
      </div>

      <!-- Menu -->
      <ul class="space-y-4 mt-10">
        <li>
          <button onclick="window.location.href='admin.php'"
            class="flex items-center text-gray-500 hover:text-white gap-2 w-full px-4 py-2 rounded transition duration-200 hover:bg-green-700">
            <i class="fas fa-home"></i>
            <span>Dashboard</span>
          </button>
        </li>
        <li>
          <button onclick="window.location.href='appointment.php'"
            class="flex items-center text-gray-500 hover:text-white gap-2 w-full px-4 py-2 rounded transition duration-200 hover:bg-green-700">
            <i class="fas fa-calendar-alt"></i>
            <span>Appointments</span>
          </button>
        </li>
        <li>
          <button onclick="window.location.href='clients.php'"
            class="flex items-center text-gray-500 hover:text-white gap-2 w-full px-4 py-2 rounded transition duration-200 hover:bg-green-700">
            <i class="fas fa-users"></i>
            <span>Clients Information</span>
          </button>
        </li>
        <li>
          <button onclick="window.location.href='schedules.php'"
            class="flex items-center text-gray-500 hover:text-white gap-2 w-full px-4 py-2 rounded transition duration-200 hover:bg-green-700">
            <i class="fas fa-clock"></i>
            <span>Schedules</span>
          </button>
        </li>
        <li>
          <button onclick="window.location.href='payments.php'"
            class="flex items-center text-gray-500 hover:text-white gap-2 w-full px-4 py-2 rounded transition duration-200 hover:bg-green-700">
            <i class="fas fa-credit-card"></i>
            <span>Payments</span>
          </button>
        </li>
      </ul>

      <!-- Bottom Links -->
      <div class="absolute bottom-10 left-0 w-64 px-6">
        <hr class="border-t border-gray-300 mb-4" />
        <ul class="space-y-4">
          <li>
            <button onclick="window.location.href='logout.php'"
              class="flex items-center text-gray-500 hover:text-white gap-2 w-full px-4 py-2 rounded transition duration-200 hover:bg-green-700">
              <i class="fas fa-sign-out-alt"></i>
              <span>Log Out</span>
            </button>
          </li>
        </ul>
      </div>
    </div>

    <!-- Main Content -->
    <div class="flex-1 flex flex-col">
      <!-- Top bar for mobile -->
      <header class="bg-white shadow-md p-4 flex items-center justify-between md:hidden">
        <h1 class="text-lg font-semibold text-gray-700">Dashboard</h1>
        <button id="menu-btn" class="text-gray-700 focus:outline-none">
          <i class="fas fa-bars text-2xl"></i>
        </button>
      </header>

      <!-- Page content -->
      <main class="flex-1 p-6">
        <h2 class="text-2xl font-semibold mb-4">Welcome to Admin Dashboard</h2>
        <p class="text-gray-600">This is your main content area.</p>
      </main>
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