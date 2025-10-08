<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>D'New Era Web Based System</title>

    <!-- Tailwind -->
    <link rel="stylesheet" href="dist/output.css?v=1.0.99">

    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
</body>

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
            <a href="#treatments"
                class="text-sm font-medium text-black hover:text-green-600 scroll-link flex flex-row items-center gap-2">
                <i class="fa-solid fa-spa"></i>
                Treatments
            </a>
            <a href="#sub-footer"
                class="text-sm font-medium text-black hover:text-green-600 scroll-link flex items-center gap-2">
                <i class="fa-solid fa-envelope"></i>
                Contact us
            </a>
            <a href="appointment.php"
                class="px-4 py-2 bg-black text-white text-sm font-medium rounded hover:bg-green-700 transition">Book
                now</a>
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


<!-- header section -->

<div class="w-full h-screen bg-center relative">
    <img src="./src/img/dnewera-bg.png" alt="Logo" class="w-full h-screen object-cover">
    <div class="absolute inset-0 bg-white opacity-60"></div>

    <div class="w-full absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-center">
        <h1 class="font-bold mb-8 sm:mb-5 text-4xl sm:text-3xl mx-auto">Escape to Tropical Serenity
            with Every
            Massage</h1>
        <p class="text-lg mb-6">Your one-stop solution for all your wellness needs</p>

        <a href="appointment.php"
            class="px-6 py-2 h-12 bg-black text-white text-sm font-medium rounded-full hover:bg-green-700 transition inline-flex items-center justify-center">
            Book an appointment now
        </a>
    </div>
</div>


<!-- treatments -->

<div class="treatments w-full h-auto items-center justify-center p-20" id="treatments">
    <div class="items-center justify-center px-5">
        <h2 class="text-4xl font-bold mb-2">Services</h2>
        <p class="text-lg mb-8 text-gray-700">Discover the perfect massage experience for you</p>
    </div>

    <div class="grid lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 gap-4 max-w-6xl mx-auto items-center justify-center">
        <div class="treatment-card shadow-md h-full max-h-full p-6 bg-gray-100">
            <img src="src\img\swedish-massage.jpg" alt="Treatment 1" class="w-full h-48 object-cover rounded">
            <h3 class="text-xl font-semibold mt-4">Swedish Massage</h3>
            <p class="mt-2 text-gray-600">A relaxing full-body massage that uses long strokes to improve circulation
                and relieve tension.</p>
        </div>
        <div class="treatment-card shadow-md h-full max-h-full p-6 bg-gray-100">
            <img src="src\img\deep-tissue-massage.jpg" alt="Treatment 2" class="w-full h-48 object-cover rounded">
            <h3 class="text-xl font-semibold mt-4">Deep Tissue Massage</h3>
            <p class="mt-2 text-gray-600">A deep tissue massage that targets deep muscles and tendons for a
                therapeutic experience.</p>
        </div>
        <div class="treatment-card shadow-md h-full max-h-full p-6 bg-gray-100">
            <img src="src\img\hot-stone.jpg" alt="Treatment 3" class="w-full h-48 object-cover rounded">
            <h3 class="text-xl font-semibold mt-4">Hot Stone & Facial Massage</h3>
            <p class="mt-2 text-gray-600">A massage using heated stones to relax and soothe muscles and joints.</p>
        </div>
        <div class="treatment-card shadow-md h-full max-h-full p-6 bg-gray-100 ">
            <img src="src\img\therapeutic massage.jpg" alt="Treatment 1" class="w-full h-48 object-cover rounded">
            <h3 class="text-xl font-semibold mt-4">Therapeutic Massage</h3>
            <p class="mt-2 text-gray-600">Relieve tension, reduce pain, and restore balance to support healing and
                relaxation.</p>
        </div>
        <div class="treatment-card shadow-md h-full max-h-full p-6 bg-gray-100 ">
            <img src="src\img\myofascial massag.jpg" alt="Treatment 2" class="w-full h-48 object-cover rounded">
            <h3 class="text-xl font-semibold mt-4">Myofascial Remodeling</h3>
            <p class="mt-2 text-gray-600">Release restrictions and improve mobility through focused treatment on
                fascia and connective tissues.</p>
        </div>
        <div class="treatment-card shadow-md h-full max-h-full p-6 bg-gray-100 ">
            <img src="src\img\relaxation-cupping.jpg" alt="Treatment 3" class="w-full h-48 object-cover rounded">
            <h3 class="text-xl font-semibold mt-4">Relaxation Cupping</h3>
            <p class="mt-2 text-gray-600">Enhance circulation and ease muscle tension using gentle suction for deep
                relaxation and recovery.</p>
        </div>
    </div>
</div>


<!-- footer -->

<div class="sub-footer w-full h-auto p-20 mt-10 bg-[#222222] items-center justify-center" id="sub-footer">
    <p class="text-white text-xs mb-5 text-center">Contact us for more information or to book an appointment!
    </p>

    <div class="grid grid-cols-1 gap-4 max-w-6xl mx-auto items-center justify-center text-center">
        <p class="text-white font-bold text-lg">Daxcel Geronimo Bautista</p>

        <p class="text-white text-sm flex items-center justify-center">
            <i class="fa-solid fa-envelope text-white text-sm mr-2"></i>
            dnewera@example.com
        </p>

        <p class="text-white text-sm flex items-center justify-center">
            <i class="fa-solid fa-phone text-white text-sm mr-2"></i>
            (587)-336-9926
        </p>

        <p class="text-white text-sm flex items-center justify-center">
            <i class="fa-solid fa-location-dot text-white text-sm mr-2"></i>
            1016 38 St NW, Edmonton AB
        </p>

    </div>
</div>


<div class="footer h-12 w-full bg-[#1a1a1a] flex items-center justify-center">
    <p class="text-white text-xs">&copy; 2024 D'new era. All rights reserved.</p>
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