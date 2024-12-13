<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Glassmorphism Signup Form</title>
    <style>
        /* General Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Open Sans", sans-serif;
        }

        /* Body Styling */
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            width: 100%;
            padding: 0 10px;
        }

        body::before {
            content: "";
            position: absolute;
            width: 100%;
            height: 100%;
            background: url("https://www.codingnepalweb.com/demos/create-glassmorphism-login-form-html-css/hero-bg.jpg"), #000;
            background-position: center;
            background-size: cover;
        }

        /* Wrapper for the Form */
        .wrapper {
            width: 400px;
            border-radius: 8px;
            padding: 30px;
            text-align: center;
            border: 1px solid rgba(255, 255, 255, 0.5);
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
        }

        form {
            display: flex;
            flex-direction: column;
        }

        /* Heading */
        h2 {
            font-size: 2rem;
            margin-bottom: 20px;
            color: #fff;
        }

        /* Input Fields Styling */
        .input-field {
            position: relative;
            border-bottom: 2px solid #ccc;
            margin: 15px 0;
        }

        .input-field label {
            position: absolute;
            top: 50%;
            left: 0;
            transform: translateY(-50%);
            color: #fff;
            font-size: 16px;
            pointer-events: none;
            transition: 0.15s ease;
        }

        .input-field input {
            width: 100%;
            height: 40px;
            background: transparent;
            border: none;
            outline: none;
            font-size: 16px;
            color: #fff;
        }

        .input-field input:focus~label,
        .input-field input:valid~label {
            font-size: 0.8rem;
            top: 10px;
            transform: translateY(-120%);
        }

        /* Links */
        .wrapper a {
            color: #efefef;
            text-decoration: none;
        }

        .wrapper a:hover {
            text-decoration: underline;
        }

        /* Submit Button */
        button {
            background: #fff;
            color: #000;
            font-weight: 600;
            border: none;
            padding: 12px 20px;
            cursor: pointer;
            border-radius: 3px;
            font-size: 16px;
            border: 2px solid transparent;
            transition: 0.3s ease;
        }

        button:hover {
            color: #fff;
            border-color: #fff;
            background: rgba(255, 255, 255, 0.15);
        }

        /* Login Section */
        .register {
            text-align: center;
            margin-top: 30px;
            color: #fff;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <form action="#">
            <h2>Signup</h2>

            <!-- Name Input Field -->
            <div class="input-field">
                <input type="text" required>
                <label>Enter your name</label>
            </div>

            <!-- Email Input Field -->
            <div class="input-field">
                <input type="email" required>
                <label>Enter your email</label>
            </div>

            <!-- Password Input Field -->
            <div class="input-field">
                <input type="password" required>
                <label>Create a password</label>
            </div>

            <!-- Confirm Password Input Field -->
            <div class="input-field">
                <input type="password" required>
                <label>Confirm your password</label>
            </div>

            <!-- Submit Button -->
            <button type="submit">Sign Up</button>

            <!-- Login Link -->
            <div class="register">
                <p>Already have an account? <a href="{{ route('login') }}">Login</a></p>
            </div>
        </form>
    </div>
</body>

</html>
