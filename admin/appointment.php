<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>D'newera Admin</title>

    <link rel="stylesheet" href="../dist/output.css">
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

</head>

<body>

    <div class="min-h-screen flex bg-gray-100">

        <?php include './sidebar.php'; ?>

        <div class="w-full">

            <main class="w-full p-10 bg-gray-50">
                <div class="appointment-section">
                    <h1 class="text-2xl font-bold mb-4">Appointments</h1>
                    <p>Manage your appointments here. Use the sidebar to navigate through different sections.</p>
                </div>
                <div class="appointment-container flex justify-center items-center mt-10">
                    <div class="w-full bg-white shadow-md rounded-md p-6">
                        <table class="w-full border-separate border border-gray-500 border-spacing-2">
                            <thead>
                                <tr>
                                    <th class="border border-gray-300 ">Appointment ID</th>
                                    <th class="border border-gray-300 ">Patient Name</th>
                                    <th class="border border-gray-300 ">Date</th>
                                    <th class="border border-gray-300 ">Time</th>
                                    <th class="border border-gray-300 ">Status</th>
                                    <th class="border border-gray-300 ">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Appointment rows go here. Populate dynamically via PHP or JavaScript. -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </main>
        </div>
    </div>

</body>

</html>