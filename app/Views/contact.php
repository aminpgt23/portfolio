<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <style>
        /* Your existing styles */
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
            overflow: hidden;
            position: relative;
            z-index: 2;
            padding: 20px;
            border-radius: 20px;
            text-align: center;
            height: 80vh;
            width:80vh;
            animation: fadeIn 1s ease-in-out; 
        }

        .profile-container img {
            width: 150px;
            height: 150px; /* Square shape for a better look */
            border-radius: 30%;
            margin-right: 20px;
            transition: transform 0.3s ease-in-out; /* Zoom-in animation */
        }

        .profile-container:hover img {
            transform: scale(1.1);
        }

        .profile-container h3 {
            color: #7CFC00;
            margin-bottom: 10px;
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

        /* Add the fade-in animation */
        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
        .project-container {
            overflow: hidden;
            position: relative;
            text-align: center;
            margin: 10px;
            animation: fadeIn 1s ease-in-out; /* Fade-in animation */
        }
        .contact-head{
            display: grid;
            box-shadow : 2px 2px 2px 2px #7CFC00;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
            overflow: hidden;
            position: relative;
            z-index: 2;
            width:75vh;
            padding: 10px;
            background-color:black;
            border-radius: 10px;
            text-align: center;
            height: 50vh;
            animation: fadeIn 1s ease-in-out;
        }

        input {
            padding: 10px;
            margin-bottom: 10px;
            width: 200px;
            box-sizing: border-box;
            border: none;
            border-radius: 20px;
            outline: none;
            text-align: center;
        }
        button {
            padding: 10px;
            width: 100px;
            height:40px;
            margin-left:85%;
            background-color: #4caf50;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 20px;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #7CFC00;
        }


    </style>
</head>

<body id="particles-js">
    <div id="container">
        <div class="profile-container">
            <img src="<?= base_url('/images/profile.jpg') ?>" alt="Your Name">
            <div>
                <h3>form contacts</h3>
            </div>
            <div class="contact-head">
                <div class="project-container">
                  <input type="text" placeholder="input your email">
                </div>
                <div class="project-container" >
                  <input type="text" placeholder="input your number phone">
                </div>
                <div class="project-container">
                  <input type="text" placeholder="input your message">
                </div>
                <div class="project-container">
                  <input type="text" placeholder="input your explaine">
                </div>
                <button onclick="redirectToDashboard()">submit</button>
            </div>
        </div>
    </div>
    <script src="<?= base_url('js/costum.js') ?>"></script> <!-- Include your JavaScript file -->
</body>
</html>
