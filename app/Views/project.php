<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <style>
        /* Your existing styles */
        #container {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        #particles-js {
            width: 100%;
            height: 100%;
        }

        .profile-container {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
            overflow: hidden;
            position: relative;
            z-index: 2;
            padding: 20px;
            width:80vh;
            text-align: center;
            height: 50vh;

        }

        /* .profile img {
            width: 150px;
            height: 150px;
            border-radius: 30%;
            margin-right: 20px;
            transition: transform 0.3s ease-in-out;
        } */

        
        a button {
            padding: 5px;
            width: 150px;
            margin-left : 38%;
            background-color: #4caf50;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 20px;
            transition: background-color 0.3s;
        }

        a button:hover {
            background-color: #7CFC00;
        }

        .profile-container:hover img {
            transform: scale(1.1);
        }

        .profile-container h4 {
            color: #7CFC00;
            margin-bottom: 10px;
        }
        .profile-container p {
            color: #7CFC00;
            margin-bottom: 10px;
        }
        .project-container {
            overflow: hidden;
            position: relative;
            z-index: 2;
            padding: 10px;
            background-color:black;
            box-shadow : 1px 1px 2px 2px #7CFC00;
            border-radius: 10px;
            text-align: center;
            margin: 10px;
            animation: fadeIn 1s ease-in-out; /* Fade-in animation */
        }

        /* Add the fade-in animation */
        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
        body {
            margin: 0;
            overflow: hidden;
            perspective: 800px;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: black;
            scrollbar-width: thin;
            scrollbar-color: transparent transparent;
        }
    </style>
</head>

<body id="particles-js">
    <div id="container">
        <div class="profile">
            <!-- <img src="" alt="Your Name"> -->
            <div class="profile-container">
                <div class="project-container">
                <p>haihahai</p>
                </div>
                <div class="project-container">
                    <h4>Project 3</h4>  
                </div>
                <div class="project-container">
                    <h4>Project 5</h4>
 
                </div>
                <div class="project-container">
                    <h4>Project 5</h4>
        
                </div>
            </div>
        <a href="<?= base_url('/dashboard') ?>"> <button>kembali</button></a>
        </div>
    </div>
    <script src="<?= base_url('js/costum.js') ?>"></script> <!-- Include your JavaScript file -->
</body>

</html>
