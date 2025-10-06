<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>D'new era appointments</title>

    <link rel="stylesheet" href="dist/output.css?v=1.0.99">

    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

</head>

<body>

    <!-- navbar section -->
    <section id="navbar"
        class="navbar w-screen h-20 bg-transparent shadow-lg fixed top-0 left-0 z-10 transition-colors duration-300">
        <div class="logo h-full w-full flex items-center justify-center">
            <img src="./src/img/logo1 with name.png" alt="Logo" class="h-40">
            <div class="nav-links h-full w-3/4 flex items-center justify-end space-x-8 pr-10">
                <a href="#treatments"
                    class="text-sm font-medium text-black hover:text-green-600 scroll-link">Treatments</a>
                <a href="#sub-footer" class="text-sm font-medium text-black hover:text-green-600 scroll-link">Contact
                    us</a>
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
        <div class="personal-info mx-auto px-4">
            <p class="text-3xl font-bold mt-20 mb-2">Personal Information</p>
            <p class="font-light mb-12">Please fill in the form below to book your appointment.</p>
        </div>

        <form>
            <div class="mt-10 grid xl:grid-cols-2 lg:grid-cols-2 md:grid-cols-1 sm:grid-cols-1 gap-x-6 gap-y-8 px-4">

                <div class="mb-4">
                    <label for="first-name" class="block text-sm/6 font-medium text-black">First name</label>
                    <div class="mt-2">
                        <input id="first-name" type="text" name="first-name" autocomplete="given-name"
                            class="block w-full rounded-md px-4 py-1.5 text-base text-white outline-1 -outline-offset-1 outline-gray  placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6" />
                    </div>
                </div>

                <div class="mb-4">
                    <label for="last-name" class="block text-sm/6 font-medium text-black">Last name</label>
                    <div class="mt-2">
                        <input id="last-name" type="text" name="last-name" autocomplete="family-name"
                            class="block w-full rounded-md px-4 py-1.5 text-base text-white outline-1 -outline-offset-1 outline-gray  placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6" />
                    </div>
                </div>

                <div class="mb-4">
                    <label for="email" class="block text-sm/6 font-medium text-black">Email address</label>
                    <div class="mt-2">
                        <input id="email" name="email" type="email" autocomplete="email"
                            class="block w-full rounded-md px-4 py-1.5 text-base text-white outline-1 -outline-offset-1 outline-gray  placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6" />
                    </div>
                </div>

                <div class="mb-4">
                    <label for="phone-number" class="block text-sm/6 font-medium text-gray">Phone Number</label>
                    <div class="mt-2">
                        <input type="tel" id="phone-number" name="phone-number" autocomplete="tel"
                            class="block w-full rounded-md px-4 py-1.5 text-base text-white outline-1 -outline-offset-1 outline-gray placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-black sm:text-sm/6" />
                    </div>
                </div>

                <div class="mb-4">
                    <label for="date" class="block text-sm/6 font-medium text-gray-900">Preffered Appointment
                        Date</label>
                    <div class="mt-2">
                        <input id="date" type="date" name="date" autocomplete="date"
                            class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" />
                    </div>
                </div>

                <div class="mb-4">
                    <label for="time" class="block text-sm/6 font-medium text-gray-900">Preffered Appointment
                        Time</label>
                    <div class="mt-2">
                        <input id="time" type="time" name="time" autocomplete="time"
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
                            <input id="credit-card" name="payment-method" type="radio" value="credit-card"
                                class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                            <label for="credit-card" class="ml-3 block text-sm/6 font-medium text-gray-900">Direct
                                Billing</label>
                        </div>

                        <div class="flex items-center">
                            <input id="debit-card" name="payment-method" type="radio" value="debit-card"
                                class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                            <label for="debit-card" class="ml-3 block text-sm/6 font-medium text-gray-900">Cash
                                Payment</label>
                        </div>
                    </div>
                </fieldset>
            </div>

            <div class="mt-10 grid xl:grid-cols-2 lg:grid-cols-2 md:grid-cols-1 sm:grid-cols-1 px-4 gap-4">
              <button type="submit"
                    class="w-full h-12 col-span-1 bg-black text-white px-6 py-3 rounded-md text-sm font-medium hover:bg-green-700 transition">Book an appointment</button>  
                <button type="cancel"
                    class="w-full h-12 col-span-1 bg-black text-white px-6 py-3 rounded-md text-sm font-medium hover:bg-gray-300 transition">Cancel</button>  
            </div>
        </form>
    </div>





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

     <div class="footer mt-20 h-12 w-full bg-[#1a1a1a] flex items-center justify-center">
        <p class="text-white text-xs">&copy; 2024 D'new era. All rights reserved.</p>
    </div>
</body>

</html>