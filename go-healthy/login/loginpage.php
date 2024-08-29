<?php
    require 'function2.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Log in to GO HEALTHY</title>

    <style>
        * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
        font-family: "Nunito", sans-serif;
        }

        body {
        background: #20618a;
        }

        .container {
        min-height: 100vh;
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        position: relative;
        overflow: hidden;
        }

        .card {
        width: 400px;
        min-height: 250px;
        background: rgba(255, 255, 255, 0.15);
        box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
        backdrop-filter: blur(18px);
        -webkit-backdrop-filter: blur(18px);
        border: 1px solid rgba(255, 255, 255, 0.18);
        border-radius: 1rem;
        padding: 1.5rem;
        z-index: 10;
        color: whitesmoke;
        }

        .title {
        font-size: 2.2rem;
        margin-bottom: 1rem;
        display: flex;
        justify-content: center;
        align-items: center;
        }

        .subtitle {
        font-size: 1rem;
        margin-bottom: 2rem;
        display: flex;
        justify-content: center;
        align-items: center;
        }

        .btn {
        background: none;
        border: none;
        text-align: center;
        font-size: 1rem;
        color: whitesmoke;
        background-color: #5aabde;
        padding: 0.8rem 1.8rem;
        border-radius: 2rem;
        cursor: pointer;
        }
        .btn:hover
        {
            background-color: #20618a;
        }
        .blob {
        position: absolute;
        width: 500px;
        height: 500px;
        background: linear-gradient(
            180deg,
            rgba(127, 131, 133, 0.42) 31.77%,
            #1e66c5 100%
        );
        mix-blend-mode: color-dodge;
        -webkit-animation: move 25s infinite alternate;
        animation: move 25s infinite alternate;
        transition: 1s cubic-bezier(0.07, 0.8, 0.16, 1);
        }

        .blob:hover {
        width: 520px;
        height: 520px;
        -webkit-filter: blur(30px);
        filter: blur(30px);
        box-shadow: inset 0 0 0 5px rgba(255, 255, 255, 0.6),
            inset 100px 100px 0 0px #537f9f, inset 200px 200px 0 0px #4b4ba8,
            inset 300px 300px 0 0px #084775;
        }

        @-webkit-keyframes move {
        from {
            transform: translate(-100px, -50px) rotate(-90deg);
            border-radius: 24% 76% 35% 65% / 27% 36% 64% 73%;
        }

        to {
            transform: translate(500px, 100px) rotate(-10deg);
            border-radius: 76% 24% 33% 67% / 68% 55% 45% 32%;
        }
        }

        @keyframes move {
        from {
            transform: translate(-100px, -50px) rotate(-90deg);
            border-radius: 24% 76% 35% 65% / 27% 36% 64% 73%;
        }

        to {
            transform: translate(500px, 100px) rotate(-10deg);
            border-radius: 76% 24% 33% 67% / 68% 55% 45% 32%;
        }
        }

        .modal {
        position: fixed;
        left: 0;
        bottom: 0;
        width: 100%;
        height: 60px;
        background: rgba(170, 200, 255, 0.22);
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        transition: 0.4s;
        }
        .modal-container {
        display: flex;
        max-width: 720px;
        width: 100%;
        border-radius: 10px;
        overflow: hidden;
        position: absolute;
        opacity: 0;
        pointer-events: none;
        transition-duration: 0.3s;
        background: #fff;
        transform: translateY(100px) scale(0.4);
        }
        .modal-title {
        font-size: 26px;
        margin: 0;
        font-weight: 400;
        color: #55311c;
        }
        .modal-desc {
        margin: 6px 0 30px 0;
        }
        .modal-left {
        padding: 60px 30px 20px;
        background: #fff;
        flex: 1.5;
        transition-duration: 0.5s;
        transform: translateY(80px);
        opacity: 0;
        }
        .modal-button {
        color: #1b4f7d;
        font-family: "Nunito", sans-serif;
        font-size: 18px;
        cursor: pointer;
        border: 0;
        outline: 0;
        padding: 10px 40px;
        border-radius: 30px;
        background: white;
        box-shadow: 0 10px 40px rgba(255, 255, 255, 0.16);
        transition: 0.3s;
        }
        .modal-button:hover {
        border-color: rgba(255, 255, 255, 0.2);
        background: rgba(255, 255, 255, 0.8);
        }
        .modal-right {
        flex: 2;
        font-size: 0;
        transition: 0.3s;
        overflow: hidden;
        }
        .modal-right img {
        width: 100%;
        height: 100%;
        transform: scale(2);
        -o-object-fit: cover;
            object-fit: cover;
        transition-duration: 1.2s;
        }
        .modal.is-open {
        height: 100%;
        background: rgba(170, 200, 255, 0.22);
        }
        .modal.is-open .modal-button {
        opacity: 0;
        }
        .modal.is-open .modal-container {
        opacity: 1;
        transition-duration: 0.6s;
        pointer-events: auto;
        transform: translateY(0) scale(1);
        }
        .modal.is-open .modal-right img {
        transform: scale(1);
        }
        .modal.is-open .modal-left {
        transform: translateY(0);
        opacity: 1;
        transition-delay: 0.1s;
        }
        .modal-buttons {
        display: flex;
        justify-content: space-between;
        align-items: center;
        }
        .modal-buttons a {
        color: rgba(255, 255, 255, 0.6);
        font-size: 14px;
        }

        .input-button {
        padding: 8px 12px;
        outline: none;
        border: 0;
        color: #fff;
        border-radius: 6px;
        background: #5aabde;
        font-family: "Nunito", sans-serif;
        transition: 0.3s;
        cursor: pointer;
        }
        .input-button:hover {
        background: #55311c;
        }

        .input-label {
        font-size: 11px;
        text-transform: uppercase;
        font-family: "Nunito", sans-serif;
        font-weight: 600;
        letter-spacing: 0.7px;
        color: #ffffff;
        transition: 0.3s;
        padding-bottom: 6px;
        }

        .input-block {
        display: flex;
        flex-direction: column;
        padding: 10px 10px 8px;
        border: 1px solid #ddd;
        border-radius: 4px;
        margin-bottom: 20px;
        transition: 0.3s;
        }
        .input-block input {
            outline: 0;
            border: 0;
            border-radius: 2px;
            /* padding: 8px 8px 8px 8px; */
        padding: 3px 0 0;
        font-size: 14px;
        font-family: "Nunito", sans-serif;
        }
        .input-block input::-moz-placeholder {
        color: #5aabde;
        opacity: 1;
        }
        .input-block input:-ms-input-placeholder {
        color: #430505;
        opacity: 1;
        }
        .input-block input::placeholder {
        /* color: #cccccc; */
        /* opacity: 1; */
        }
        .input-block:focus-within {
        /* border-color: #8c7569; */
        }
        .input-block:focus-within .input-label {
        /* color: rgba(105, 105, 140, 0.8); */
        }
        .center {
        display: flex;
        justify-content: center;
        align-items: center;
        }

    </style>
</head>
<body>
    <div class="container">
        <div class="card">
          <h1 class="title" style="font-size: 25px;">Welcome to GO HEALTHY!</h1>
          <p class="subtitle">Let us know who you are</p>
          
          <form method="post">

              <div class="input-block">
                  <label for="email" class="input-label">Username</label>
                  <input type="text" id="username" name="uname" style="padding-left: 5px; placeholder="" required>
                </div>
                <div class="input-block">
                    <label for="password" class="input-label">Password</label>
                    <input type="password" id="password" name="psw" style="padding-left: 5px; placeholder="" required>
                </div>
                
            <?php
                if (!empty($error_message)) {
                    echo '<p style="color:red;">' . $error_message . '</p>';
                }
            ?>

            <div class="center">
                <button type="submit" class="btn" style="margin-bottom: 7px" name="login">Log in</button>
            </div>
        </form>
        <form method="post">
            <div class="center">
                <button type="submit" class="btn" name="userlogin">Guest</button>
            </div>
        </form>

    </div>

        <div class="blob"></div>
      </div>


</body>
</html>