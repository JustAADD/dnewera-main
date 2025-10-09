<?php
require '../connect/db.php';

?>

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

            <main class="w-full h-screen p-10 bg-gray-50">
                <div class="mb-10">
                    <h1 class="text-2xl font-bold mb-5">Appointments</h1>
                    <p>Manage your appointments here. Use the sidebar to navigate through different sections.</p>
                </div>
                
                <div class="w-full max-w-6xl h-100 bg-white shadow-md rounded-md p-6">
                    <div class="max-h-screen overflow-y-auto">
                        <table class="w-full  border border-gray-500 ">
                            <thead class="sticky top-0 bg-gray-100">
                                <tr>
                                    <th class="border border-gray-300 w-1/5 p-2">Appointment ID</th>
                                    <th class="border border-gray-300 w-1/5 p-2">Patient Name</th>
                                    <th class="border border-gray-300 w-1/5 p-2">Date</th>
                                    <th class="border border-gray-300 w-1/5 p-2">Time</th>
                                    <th class="border border-gray-300 w-1/5 p-2">Status</th>
                                    <th class="border border-gray-300 w-1/5 p-2 text-center">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                $sql = "SELECT * FROM appointment_data";
                                $result = $mysqli->query($sql);
                                if ($result->num_rows > 0) {
                                    while ($row = $result->fetch_assoc()) {
                                        echo "<tr>";
                                        echo "<td class='border border-gray-300 p-2'>" . $row['id'] . "</td>";
                                        echo "<td class='border border-gray-300 p-2'>" . $row['first_name'] . "</td>";
                                        echo "<td class='border border-gray-300 p-2'>" . $row['pref_app_date'] . "</td>";
                                        echo "<td class='border border-gray-300 p-2'>" . $row['pref_app_time'] . "</td>";
                                        echo "<td class='border border-gray-300 p-2'>" . $row['payment_method'] . "</td>";
                                        echo "<td class='border border-gray-300 p-2 text-center'>
                                                <i class='fa-solid fa-pen-to-square'></i>
                                              </td>";
                                        echo "</tr>";
                                    }
                                } else {
                                    echo "<tr><td colspan='6' class='border border-gray-300 p-2 text-center'>No appointments found</td></tr>";
                                } 
                                $mysqli->close();
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </main>

        </div>
    </div>

</body>

</html>