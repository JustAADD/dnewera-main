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

    <div class="min-h-screen flex bg-gray-100">

        <?php include './sidebar.php'; ?>

        <div class="w-full">

            <main class="w-full h-screen p-10 bg-gray-50 overflow-y-auto">
                <h1 class="text-2xl font-bold mb-4">Admin Dashboard</h1>
                <p>Welcome to the admin dashboard. Use the sidebar to navigate through different sections.</p>

                <div class="mt-5 grid xl:grid-cols-4 lg:grid-cols-4 md:grid-cols-2 sm:grid-cols-1 gap-x-6 gap-y-8 px-4">
                    <div class="bg-white p-6 rounded-md shadow-md">
                        <h2 class="text-md font-semibold mb-2">Total Appointments</h2>
                        <p class="text-3xl font-bold">150</p>
                    </div>
                    <div class="bg-white p-6 rounded-md shadow-md">
                        <h2 class="text-md font-semibold mb-2">Total Clients</h2>
                        <p class="text-3xl font-bold">85</p>
                    </div>
                    <div class="bg-white p-6 rounded-md shadow-md">
                        <h2 class="text-md font-semibold mb-2">Pending appointments</h2>
                        <p class="text-3xl font-bold">25</p>
                    </div>
                    <div class="bg-white p-6 rounded-md shadow-md">
                        <h2 class="text-md font-semibold mb-2">Total Staff</h2>
                        <p class="text-3xl font-bold">12</p>
                    </div>
                </div>

                <div class="mt-5 grid xl:grid-cols-2 lg:grid-cols-2 md:grid-cols-1 sm:grid-cols-1 gap-x-6 gap-y-8 px-4">
                    <div class="mt-5 bg-white p-6 rounded-md shadow-md max-h-screen overflow-y-auto">
                        <h2 class="text-lg font-semibold mb-4">Recent Activities</h2>
                        <ul class="list-disc list-inside">
                            <li>New appointment booked by John Doe.</li>
                            <li>Client Jane Smith updated her profile.</li>
                            <li>Appointment with Mike Johnson confirmed.</li>
                        </ul>
                    </div>

                    <div class="mt-5 bg-white p-6 rounded-md shadow-md">
                        <h2 class="text-lg font-semibold mb-4">System Notifications</h2>
                        <ul class="list-disc list-inside">
                            <li>No new notifications.</li>
                        </ul>
                    </div>
                </div>
            </main>


        </div>
    </div>


</body>

</html>