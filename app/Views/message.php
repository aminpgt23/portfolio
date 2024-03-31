<!DOCTYPE html>
<html lang="en">
<head>
<script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>

        body {
            margin: 0;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background-color: #000000; /* Set your desired background color */
        }
        #toolbarContainer
		{
			display:none;
		}

        #particles-js {
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
        }


        .welcome-text {
            font-size: 30px;
            margin-bottom: 20px;
            color : white;
        }

        .input-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            z-index: 1;
        }

        input {
            padding: 10px;
            margin-bottom: 10px;
            width: 300px;
            box-sizing: border-box;
            border: none;
            border-radius: 20px;
            outline: none;
            text-align: center;
        }

        button {
            padding: 10px;
            width: 150px;
            background-color: #F4A460;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 20px;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #A0522D;
        }

        #container {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        .social-icons {
             display:flex;
            top: 70px;
            left: 10px;
            margin: 20px;
            
        }

        .social-icons img {
            width: 50px;
            height: 50px;
            transition: transform 0.5s;
        }

        .link img:hover {
            transform: scale(1.2);
        }

        .header {
            /* position: absolute; */
            align-self: end;
            margin-top:5%;
        }
    </style>
</head>

<body id="particles-js">
<div class="header">
        <div class="social-icons">
            <div class="link">
            <a href="https://instagram.com/oeamynt.ico" class="blank"> <!-- Add the desired URL -->
                <img src="<?= base_url('images/ig.png') ?>" alt="Instagram">
            </a>
            </div>
            <div class="link">
                <a href="https://github.com/aminpgt23">
                    <img src="<?= base_url('images/git.png') ?>" alt="GitHub" class="blank">
                </a>
            </div>
            <div class="link">
                <a href="https://www.linkedin.com/in/mukhammad-syafiqul-amin-623611265?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app">
                    <img src="<?= base_url('images/linkedin.png') ?>" alt="LinkedIn" class="blank">
                </a>
            </div>
        </div>
    </div>
    <div id="container">
        <div class="welcome-text">Welcome to Amin's Portofolio</div>
            <div class="input-container">
                <input type="text" placeholder="Enter your name" id="visitorName" name="visitorName" oninput="updateHelloText()">
                <button onclick="redirectToDashboard()">submit</button>
            </div>
    </div>

</body>
    <script>
    function redirectToDashboard() {
        const visitorName = document.getElementById('visitorName').value;
        const baseUrl = '<?= base_url() ?>'; // Add this line to get the base URL
        window.location.href = `${baseUrl}/dashboard?name=${encodeURIComponent(visitorName)}`;
    }
    </script>
    <script src="<?= base_url('js/costum.js') ?>"></script> 

</html>
