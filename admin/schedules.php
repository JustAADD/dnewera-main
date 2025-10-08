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

            <main class="w-full h-screen p-10 bg-gray-50">
                <div class="appointment-section">
                    <h1 class="text-2xl font-bold mb-4">Schedules</h1>

                    <div class="w-full max-w-6xl h-100 bg-white shadow-md rounded-md p-6">
                        <div class="max-h-screen overflow-y-auto">
                            <table class="w-full  border border-gray-500 ">
                                <thead class="sticky top-0 bg-gray-100">
                                    <tr>
                                        <th class="border border-gray-300 w-1/5 p-2 text-center">Available date</th>
                                        <th class="border border-gray-300 w-1/5 p-2 text-center">Available Time</th>
                                        <th class="border border-gray-300 w-1/5 p-2 text-center">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Appointment rows go here -->
                                    
                                    <td class="border border-gray-300 p-2 text-center">
                                        2024-07-01
                                    </td>
                                    <td class="border border-gray-300 p-2 text-center">
                                        10:00 AM - 11:00 AM
                                    </td>
                                    <td class="border border-gray-300 p-2 text-center">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </td>
                                </tbody>
                            </table>
                        </div>
                    </div>


                </div>
            </main>


        </div>
    </div>

</body>

</html>