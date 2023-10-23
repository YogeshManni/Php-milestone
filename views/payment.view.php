<html>

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <style>
    *,
    *::before,
    *::after {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

    body {
        background-color: #d3e9fc;
        font-family: "Source Sans Pro", sans-serif;
    }

    .container {
        max-width: 620px;
        margin: 150px auto 100px;
    }

    .card-image {
        width: 425px;
        position: absolute;
        top: -125px;
        left: 100px;
        z-index: 1;
    }

    .card-image-shadow {
        position: absolute;
        width: 410px;
        height: 253px;
        top: -113px;
        left: 107px;
        border-radius: 15px;
        box-shadow: -5px 10px 32px 0px #000;
        z-index: 0;
    }

    .form {
        border-radius: 15px;
        background-color: #fff;
        min-width: 100%;
        padding-top: 165px;
        position: relative;
        box-shadow: -5px 7px 32px 0px rgba(0, 0, 0, 0.35);
    }

    form {
        padding: 15px;
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
    }

    .flex-row {
        width: 100%;
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
    }

    .flex-column {
        width: 100%;
        display: flex;
        flex-direction: column;
        flex-wrap: wrap;
    }

    input.card-number,
    input.card-name,
    input.card-cvv,
    table {
        width: 100%;
    }

    input {
        padding: 10px;
        height: 40px;
        font-size: 18px;
        border: 1px solid #ccc;
        border-radius: 5px;
        outline-color: #4183f5;
    }

    input:not(.card-cvv, .card-submit),
    table {
        margin-bottom: 20px;
    }

    label {
        display: block;
    }

    select {
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        padding-left: 15px;
        width: 30%;
        height: 40px;
        margin-right: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background: url("https://img.icons8.com/external-those-icons-lineal-color-those-icons/24/000000/external-arrow-arrows-those-icons-lineal-color-those-icons-1.png");
        background-size: 15px;
        background-repeat: no-repeat;
        background-position-x: 125px;
        background-position-y: center;
        font-size: 18px;
        outline-color: #4183f5;
    }

    .table-column:last-child {
        width: 40%;
    }

    .submitBtn {
        width: 90%;
        margin: 0 auto;
        color: white;
        font-size: 18px;
        height: 50px;
        /*   border: none; */
        border-radius: 5px;
        background-color: #2196F3 !important;
        transition: background-color 250ms ease-in-out !important;
        margin: 20px;
    }

    .submitBtn:hover {
        background-color: #4183f5;
    }

    #toast-simple {
        visibility: hidden;
        z-index: 99;
        position: absolute;
        margin: 40%;
    }
    </style>
</head>

<body>

    <?php require "partials/head.php" ?>

    <?php require "partials/nav.php" ?>
    <?php require "partials/banner.php" ?>
    <div id="toast-simple"
        class="flex items-center w-full max-w-xs p-4 space-x-4 text-gray-500 bg-white divide-x divide-gray-200 rounded-lg shadow dark:text-gray-400 dark:divide-gray-700 space-x dark:bg-gray-800"
        role="alert">
        <svg class="w-5 h-5 text-blue-600 dark:text-blue-500 rotate-45" aria-hidden="true"
            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="m9 17 8 2L9 1 1 19l8-2Zm0 0V9" />
        </svg>
        <div class="pl-4 text-sm font-normal">Payment Succeeded fro accoutn 1546 **** **** **** *** redirecting to
            Homepage in 3 seconds.</div>
    </div>
    <div class="container">





        <div class="form">
            <form>
                <div class="flex-row">
                    <label for="card-number">Card Number</label>
                    <input name="card-number" class="card-number" type="text" value="">
                </div>
                <div class="flex-row">
                    <label for="card-name">Holder Name</label>
                    <input name="card-name" class="card-name" type="text" value="">
                </div>

                <!-- <div class="flex-row"> -->
                <label for="month">Expiration Date</label>
                <div style="display:flex;flex-direction:row;justify-content:space-evenly;width:100%;margin-bottom:20px">

                    <select name="month" id="month-select">
                        <option value="Month" selected disabled>Month</option>
                        <option value="January">January</option>
                        <option value="February">February</option>
                        <option value="March">March</option>
                        <option value="April">April</option>
                        <option value="May">May</option>
                        <option value="June">June</option>
                        <option value="July">July</option>
                        <option value="August">August</option>
                        <option value="September">September</option>
                        <option value="October">October</option>
                        <option value="November">November</option>
                        <option value="December">December</option>
                    </select>
                    <select name="year" id="year-select">
                        <option value="Year" selected disabled>Year</option>

                        <option value="2023">2023</option>
                        <option value="2024">2024</option>
                        <option value="2025">2025</option>
                        <option value="2026">2026</option>
                        <option value="2027">2027</option>
                        <option value="2028">2028</option>
                        <option value="2029">2029</option>
                        <option value="2030">2030</option>
                    </select>
                    <div>
                        <label for="card-cvv">CVV</label>
                        <input name="card-cvv" class="card-cvv" type="text" value="">
                    </div>
                </div>

                <!-- </div> -->
            </form>

            <button class="submitBtn" onClick="showToast()">
                Submit
            </button>
            <img class="card-image" src="https://pngimg.com/uploads/credit_card/credit_card_PNG99.png" alt="Card image">
            <div class="card-image-shadow"></div>
        </div>
    </div>
    <?php require "partials/footer.php" ?>
    <script>
    function showToast() {
        console.log("dssdds")
        document.getElementById('toast-simple').setAttribute('style', 'visibility:visible');
        setTimeout(() => {
            url = window.location.href.split("/");
            url[url.length - 1] = "home"
            url = url.join("/")
            window.location.href = url

        }, 4000)
    }
    </script>
</body>

</html>