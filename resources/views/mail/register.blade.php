<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <style>
        @import url('https://fonts.bunny.net/css?family=Nunito');
        @import url('https://fonts.googleapis.com/css2?family=Libre+Bodoni:ital,wght@0,400..700;1,400..700&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Noto+Kufi+Arabic:wght@100..900&display=swap');

        :root {
            --font-family-sans-serif: "Work Sans", sans-serif;
            --font-family-arabic: "Noto Kufi Arabic", sans-serif !important;
            --color-primary: #0A1E3F;
            --color-secondary: #70AADC;
            --bs-box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
        }

        *,
        *::before,
        *::after {
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
        }

        body {
            font-family: var(--font-family-sans-serif), Arial, sans-serif;
            line-height: 1.6;
            color: var(--color-primary);
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 650px;
            margin: 20px auto;
        }

        h1 {
            text-align: center;
        }

        .logo {
            width: 100px;
            height: 100px;
        }

        .logo img {
            display: block;
            width: 100%;
            max-width: 100%;
        }

        .registration {
            border: 2px solid var(--color-primary);
            border-radius: 10px;
            box-shadow: var(--bs-box-shadow) !important;
        }

        .registration-header {
            text-align: center;
            margin-top: 0;
            padding: 8px;
            background-color: var(--color-primary);
            color: white;
        }

        .registration-info {
            padding: 0 20px
        }

        .registration-title {
            font-weight: 700;
            margin-right: 10px;
        }
    </style>
</head>

<body style="font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #0A1E3F;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;">
    <div class="container" style="max-width: 650px;
            margin: 20px auto;">

        <div class="logo" style=" width: 100px;
            height: 100px;">
            <img style="display: block;
            width: 100%;
            max-width: 100%;" src="cid:logo.jpg" alt="Captain Academy">
        </div>
        <h1 style="text-align: center; margin: 30px 0;">New Student has successfully registered</h1>

        <div class="registration" style="border: 2px solid #0A1E3F;
            border-radius: 10px;
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);">
            <h2 class="registration-header" style="text-align: center;
            margin-top: 0;
            padding: 8px;
            background-color: #0A1E3F;
            color: white;">
                Player's Information
            </h2>
            <div class="registration-info" style="padding: 10px 20px">
                <p><span class="registration-title" style="font-weight: 700;
            margin-right: 10px;">Date: </span> {{ $data['date'] }}</p>
                <p><span class="registration-title" style="font-weight: 700;
            margin-right: 10px;">Player's Name: </span> {{ $data['player'] }}</p>
                <p><span class="registration-title" style="font-weight: 700;
            margin-right: 10px;">Iqama / Resident' ID: </span> {{ $data['id'] }}</p>
                <p><span class="registration-title" style="font-weight: 700;
            margin-right: 10px;">Phone Number: </span> {{ $data['phone'] }}</p>
                <p><span class="registration-title" style="font-weight: 700;
            margin-right: 10px;">Blood Type: </span> {{ $data['bloodType'] }}</p>
                <p><span class="registration-title" style="font-weight: 700;
            margin-right: 10px;">Age: </span> {{ $data['age'] }}</p>
                <p><span class="registration-title" style="font-weight: 700;
            margin-right: 10px;">Agreed: </span> {{ $data['agreed'] }}</p>
            </div>
        </div>
    </div>
</body>

</html>