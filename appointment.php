<?php

require 'connect/db.php';

if (isset($_POST['submit'])) {

    $firstName = $mysqli->real_escape_string($_POST['first_name'] ?? '');
    $lastName = $mysqli->real_escape_string($_POST['last_name'] ?? '');
    $email = $mysqli->real_escape_string($_POST['email_address'] ?? '');
    $phoneNumber = $mysqli->real_escape_string($_POST['phone_number'] ?? '');
    $appointmentDate = $mysqli->real_escape_string($_POST['pref_app_date'] ?? '');
    $appointmentTime = $mysqli->real_escape_string($_POST['pref_app_time'] ?? '');
    $paymentMethod = $mysqli->real_escape_string($_POST['payment_method'] ?? '');



    $dateTimestamp = strtotime($appointmentDate);
    $timeTimestamp = strtotime($appointmentTime);

    // Format: YYYY-MM-DD (standard SQL date)
    $formattedDate = date("Y-m-d", $dateTimestamp);

    // Format: 9:30pm (12-hour with am/pm)
    $formattedTime = date("g:ia", $timeTimestamp);

    if (
        empty($firstName) || empty($lastName) || empty($email) ||
        empty($phoneNumber) || empty($appointmentDate) ||
        empty($appointmentTime) || empty($paymentMethod)
    ) {
        echo "
    <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                title: 'Error!',
                text: 'Please fill in all required fields.',
                icon: 'error',
                confirmButtonText: 'OK'
            }).then(() => {
                window.history.back(); // Go back to the form
            });
        });
    </script>
    ";
        exit();
    }

    $stmt = $mysqli->prepare("INSERT INTO appointment_data (first_name, last_name, email_address, phone_number, pref_app_date, pref_app_time, payment_method) VALUES (?, ?, ?, ?, ?, ?, ?)");
    if ($stmt) {
        $stmt->bind_param('sssssss', $firstName, $lastName, $email, $phoneNumber, $formattedDate, $formattedTime, $paymentMethod);
        if ($stmt->execute()) {
            echo "
             <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
                <script>
                document.addEventListener('DOMContentLoaded', function() {
                    Swal.fire({
                        title: 'Booking Submitted',
                        text: 'Thank you for your booking, we will contact you shortly.',
                        icon: 'success',
                        confirmButtonText: 'OK'
                    }).then(() => {
                        window.location.href = 'index.php';
                    });
                });
                </script>
            ";
            exit();
        } else {
            echo "Error executing statement: " . $stmt->error;
        }
    } else {
        echo "Error preparing statement: " . $mysqli->error;
    }
} else if (isset($_POST['cancel'])) {

    echo "
    <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
    <script>
        Swal.fire({
            title: 'Booking Cancelled',
            text: 'Your booking has been cancelled.',
            icon: 'info',
            draggable: true,
            confirmButtonText: 'OK'
        }).then(() => {
            window.location.href = 'index.php';
        });
    </script>
    ";
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>D'new era appointments</title>

    <link rel="stylesheet" href="dist/output.css?v=1.0.99">

    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <!-- SweetAlert 2 library -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body>

    <button onclick="topFunction()" id="myBtn" title="Go to top"
        class="none fixed right-10 bottom-10 z-99 border-none outline-none bg-black hover:bg-green-700 cursor-pointer text-white font-bold py-2 px-4 rounded">
        <i class="fa-solid fa-arrow-up"></i>
    </button>


    <!-- navbar section -->
    <section id="navbar"
        class="navbar w-screen h-20 bg-transparent shadow-lg fixed top-0 left-0 z-10 transition-colors duration-300">
        <div class="logo h-full w-full flex items-center justify-center">
            <a href="index.php">
                <img src="./src/img/logo1 with name.png" alt="Logo" class="h-20">
            </a>
            <div class="nav-links h-full w-3/4 flex items-center justify-end space-x-8 pr-10">
                <a href="index.php#treatments" onclick="location.href=this.href; return true;" class="text-sm font-medium text-black hover:text-green-600 scroll-link flex flex-row items-center
                    gap-2">
                    <i class="fa-solid fa-spa"></i>
                    Treatments
                </a>
                <a href="index.php#sub-footer" onclick="location.href=this.href; return true;"
                    class="text-sm font-medium text-black hover:text-green-600 scroll-link flex items-center gap-2">
                    <i class="fa-solid fa-envelope"></i>
                    Contact us
                </a>
                <button
                    class="px-4 py-2 bg-black text-white text-sm font-medium rounded hover:bg-green-700 transition">Book
                    now</button>
            </div>

            <script>
                document.querySelectorAll('.scroll-link').forEach(link => {
                    link.addEventListener('click', function (e) {
                        e.preventDefault();
                        const targetId = this.getAttribute('href').replace('#', '');
                        const target = document.getElementById(targetId);
                        if (target) {
                            window.scrollTo({
                                top: target.offsetTop - 70,
                                behavior: 'smooth'
                            });
                        }
                    });
                });
            </script>
        </div>
    </section>

    <div class="w-full h-auto items-center justify-center py-15 px-20 md:px-10 ">
        <div class="max-w-5xl personal-info mx-auto">
            <p class="text-3xl font-bold mt-20 mb-2">Personal Information</p>
            <p class="font-light mb-12">Please fill in the form below to book your appointment.</p>
        </div>

        <form method="POST" action="./appointment.php"
            class="max-w-5xl mx-auto bg-white shadow-lg rounded-md px-6 pt-5 pb-10">
            <div class="mt-10 grid xl:grid-cols-2 lg:grid-cols-2 md:grid-cols-1 sm:grid-cols-1 gap-x-6 gap-y-8">

                <div class="mb-4">
                    <label for="first_name" class="block text-sm/6 font-medium text-black">First name</label>
                    <div class="mt-2">
                        <input id="first_name" type="text" name="first_name" autocomplete="given-name"
                            class="block w-full rounded-md px-4 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300  placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6" />
                    </div>
                </div>

                <div class="mb-4">
                    <label for="last_name" class="block text-sm/6 font-medium text-black">Last name</label>
                    <div class="mt-2">
                        <input id="last_name" type="text" name="last_name" autocomplete="family-name"
                            class="block w-full rounded-md px-4 py-1.5 text-base  text-gray-900 outline-1 -outline-offset-1 outline-gray-300  placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6" />
                    </div>
                </div>

                <div class="mb-4">
                    <label for="email" class="block text-sm/6 font-medium text-black">Email address</label>
                    <div class="mt-2">
                        <input id="email" name="email_address" type="email_address" autocomplete="email"
                            class="block w-full rounded-md px-4 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300  placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6" />
                    </div>
                </div>

                <div class="mb-4">
                    <label for="phone_number" class="block text-sm/6 font-medium text-gray">Phone Number</label>
                    <div class="mt-2">
                        <input type="phone_number" id="phone_number" name="phone_number" autocomplete="tel"
                            class="block w-full rounded-md px-4 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-black sm:text-sm/6" />
                    </div>
                </div>

                <div class="mb-4">
                    <label for="date" class="block text-sm/6 font-medium text-gray-900">Preffered Appointment
                        Date</label>
                    <div class="mt-2">
                        <input id="date" type="date" name="pref_app_date" autocomplete="date"
                            class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" />
                    </div>
                </div>

                <div class="mb-4">
                    <label for="time" class="block text-sm/6 font-medium text-gray-900">Preffered Appointment
                        Time</label>
                    <div class="mt-2">
                        <input id="time" type="time" name="pref_app_time" autocomplete="time"
                            class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" />
                    </div>
                </div>


            </div>
            <div class="sm:col-span-6 col-start-1 shadow-lg rounded-md p-6 bg-white mt-4">
                <p class="font-medium mb-2 text-gray-900">Payment Method</p>
                <fieldset>
                    <legend class="block text-sm/6 font-light">Please choose payment option</legend>
                    <div class="mt-4 space-y-6">
                        <div class="flex items-center mb-4">
                            <input id="credit-card" name="payment_method" type="radio" value="Direct Billing"
                                class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                            <label for="credit-card" class="ml-3 block text-sm/6 font-medium text-gray-900">Direct
                                Billing</label>
                        </div>
                        <div class="flex items-center">
                            <input id="debit-card" name="payment_method" type="radio" value="Cash Payment"
                                class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                            <label for="debit-card" class="ml-3 block text-sm/6 font-medium text-gray-900">Cash
                                Payment</label>
                        </div>
                    </div>
                </fieldset>
            </div>

            <div class="mt-10 grid xl:grid-cols-2 lg:grid-cols-2 md:grid-cols-1 sm:grid-cols-1 px-4 gap-4">
                <button type="submit" name="submit" value="submit"
                    class="w-full h-12 col-span-1 bg-black text-white px-6 py-3 rounded-md text-sm font-medium hover:bg-green-700 transition">
                    Book an appointment
                </button>

                <button type="button" onclick="confirmCancel()"
                    class="w-full h-12 col-span-1 bg-black text-white px-6 py-3 rounded-md text-sm font-medium hover:bg-green-700 transition">
                    Cancel
                </button>

                <script>
                    function confirmCancel() {
                        Swal.fire({
                            title: 'Cancel Booking?',
                            text: 'Are you sure you want to cancel your booking?',
                            icon: 'warning',
                            showCancelButton: true,
                            confirmButtonColor: '#3085d6',
                            cancelButtonColor: '#d33',
                            confirmButtonText: 'Yes, cancel it',
                            cancelButtonText: 'No, keep it'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                Swal.fire({
                                    title: 'Booking Cancelled',
                                    text: 'Your booking has been cancelled.',
                                    icon: 'info',
                                    confirmButtonText: 'OK'
                                }).then(() => {
                                    // Redirect to index.php
                                    window.location.href = 'index.php';
                                });
                            }
                        });
                    }
                </script>


            </div>

        </form>
    </div>


    <!-- script js for navar section -->
    <script>
        window.addEventListener('scroll', function () {
            const navbar = document.getElementById('navbar');
            if (window.scrollY > 10) {
                navbar.classList.remove('bg-transparent');
                navbar.classList.add('bg-white');
            } else {
                navbar.classList.remove('bg-white');
                navbar.classList.add('bg-transparent');
            }
        });
    </script>

    <!-- footer -->
    <div class="footer mt-20 h-12 w-full bg-[#1a1a1a] flex items-center justify-center">
        <p class="text-white text-xs">&copy; 2024 D'new era. All rights reserved.</p>
    </div>


    <!-- script button -->
    <script>

        let mybutton = document.getElementById("myBtn");

        window.onscroll = function () { scrollFunction() };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                mybutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        }
    </script>
</body>

</html>