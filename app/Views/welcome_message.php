<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <style>
        /* Your existing styles */

        .text-container {
            position: absolute;
            top: 10px;
            left: 10px;
            color: white;
            margin: 10px;
            font-size: 28px;
        }

        .text-container2 {
            position: absolute;
            top: 40px;
            left: 10px;
            color: white;
            margin: 10px;
            font-size: 10px;
        }

        body {
            margin: 0;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background-image: url('<?= base_url('images/room1.jpg') ?>');
            background-size: cover; /* Adjust as needed */
            background-position: center; /* Adjust as needed */
        }

        /* Modified CSS for Carousel */
        .slideshow-container {
            max-width: 1000px;
            position: relative;
            margin: auto;
            overflow: hidden;
        }

        .mySlides {
            display: none;
            width: 100%;
        }

        h3 {
            vertical-align: middle;
            font-size:400%;
            color:#CD853F;
            -webkit-text-stroke-width: 1px; 
            -webkit-text-stroke-color: black; 
        }

        .prev, .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            padding: 10px;
            margin-top: -22px;
            color: white;
            font-weight: bold;
            font-size: 18px;
            transition: 0.6s ease;
            border-radius: 0 3px 3px 0;
            user-select: none;
           
            /* background-color: rgba(0,0,0,0.8); */
        }

        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }

        .prev:hover, .next:hover {
            background-color: rgba(0,0,0,0.8);
        }

        .text {
            color: #f2f2f2;
            font-size: 15px;
            padding: 8px 12px;
            position: absolute;
            bottom: 8px;
            width: 100%;
            text-align: center;
        }

        .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }

        .dot {
            cursor: pointer;
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }

        .active, .dot:hover {
            background-color: #717171;
        }

        .fade {
            animation-name: fade;
            animation-duration: 1.5s;
        }

        @keyframes fade {
            from {opacity: .4} 
            to {opacity: 1}
        }

        @media only screen and (max-width: 300px) {
            .prev, .next,.text {font-size: 11px}
        }
        .color{
            background-color:transparent;
            border: white 1px solid;
            border-radius:10px;
            width:70vh;
            text-align:center;
        }
        a{
            text-decoration: none;
        }
    </style>
</head>

<body>
   
    <h4 class="text-container2">tombol backnya gaada mas wkwk</h4>
    <div class="slideshow-container">
        <div class="mySlides fade">
            <div class="numbertext">1 / 3</div>
            <a href="<?= base_url('/dashboard/profile')?>">
                <div class="color">
                    <h3 style="">PROFILE</h3>
                </div>
            </a>
            <!-- <img src="<?= base_url('images/crud.png') ?>" alt="Image 1"> -->
            <div class="text">my profile is funny</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">2 / 3</div>
            <a href="<?= base_url('/dashboard/contact')?>">
                <div class="color">
                    <h3 style="">CONTACT</h3>
                </div>
            </a>
            <!-- <img src="<?= base_url('images/contactus.png') ?>" alt="Image 2"> -->
            <div class="text">Caption Two</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">3 / 3</div>
            <a href="<?= base_url('/dashboard/project')?>">
                <div class="color">
                    <h3 style="">PROJECT</h3>
                </div>
            </a>
            <!-- <img src="<?= base_url('images/project.png') ?>" alt="Image 3"> -->
            <div class="text">Caption Three</div>
        </div>

        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    
    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span> 
        <span class="dot" onclick="currentSlide(2)"></span> 
        <span class="dot" onclick="currentSlide(3)"></span> 
    </div>

    <script>
        let slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            let dots = document.getElementsByClassName("dot");
            if (n > slides.length) {slideIndex = 1}    
            if (n < 1) {slideIndex = slides.length}
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";  
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex-1].style.display = "block";  
            dots[slideIndex-1].className += " active";
        }
    </script>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="<?= base_url('js/costum.js') ?>"></script>
</body>

</html>
