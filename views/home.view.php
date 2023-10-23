<html>

<head>
    <style>
    body {
        font-family: 'Open Sans Condensed', sans-serif;
    }


    figure {
        position: relative;
        width: 100%;
        min-height: 160px;
        display: block;
        float: left;
        overflow: hidden;
        margin: 10px 0;
        box-shadow: inset 0px 2px 3px rgba(0, 0, 0, .2);
        -webkit-transition: all .15s ease-in-out;
    }

    .ocean {
        background-color: #000;

        background-size: cover;
        background-position: center center;
    }

    figcaption {
        display: block;
        float: left;
        position: absolute;
        top: 0;
        left: 0;
        color: #FFF;
        font-size: 15px;
        line-height: 20px;
        font-weight: bold;
        text-transform: uppercase;
        background-color: rgba(0, 0, 0, .7);
        width: 50%;
        height: 100%;
        margin: 0 0 0 -20px;
        ;
        padding: 20px;
        padding-left: 40px;
        -webkit-transform: skew(-10deg);
        -moz-transform: skew(-10deg);
        -o-transform: skew(-10deg);
        -webkit-transition: all .15s ease-in-out;
    }

    figcaption a,
    figcaption a:hover {
        color: #FFF;
        text-decoration: none;
    }

    figcaption strong {
        display: block;
        word-wrap: normal;
        -webkit-transform: skew(10deg);
        -moz-transform: skew(10deg);
        -o-transform: skew(10deg);
    }

    figcaption strong:before {
        content: " ";
        border-top: solid 3px rgba(211, 29, 26, 1);
        width: 140%;
        display: block;
        clear: both;
        margin-bottom: 20px;
        -webkit-transition: all .15s ease-in-out;
    }

    /* HOVERS */
    figure:hover figcaption {
        background-color: rgba(211, 29, 26, .9);
        -webkit-transition: all .15s ease-in-out;
    }

    figure:hover figcaption strong:before {
        width: 200%;
        border-color: #FFF;
        -webkit-transition: all .15s ease-in-out;
    }
    </style>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

</head>
<?php require "partials/head.php" ?>

<?php require "partials/nav.php" ?>

<?php

$locations  = ["Main Street - Vancouver",
"Elm Avenue - Kelowna",
"Oak Road - Victoria",
"Pine Lane - Nanaimo",
"Maple Drive - Surrey",
"Birch Street - Kamloops",
"Cedar Avenue - Prince George",
"Redwood Road - Burnaby",
"Sequoia Lane - Abbotsford",
"Willow Lane - Richmond",
"Cherry Street - Vernon",
"Poplar Avenue - Nelson",
"Spruce Road - Whistler",
"Ash Lane - Chilliwack",
"Sycamore Drive - Tofino",
"Magnolia Avenue - Squamish",
"Dogwood Lane - Revelstoke",
"Rose Street - Cranbrook",
"Tulip Road - Penticton",
"Lily Lane - Powell River"]

?>

<form class="space-y-6" action="#" method="POST">
    <div style="margin-top:20px;display:flex;flex-direction:column;align-items:center;justify-content:center">
        <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Enter your location


        </label>
        <div class="col-7">

            <select id="countries"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option>- Select your location - </option>
                <?php
					foreach ($locations as $location) {
						echo "<option>". $location ."</option>";
					}
				?>
            </select>

        </div>
    </div>
</form>

<div class="container">

    <div class="row gx-5 gy-5">
        <div class="col-md-4 col-sm-6">
            <a href="/services">
                <figure style="background-image: url('../images/w1.png');" class="ocean">
                    <figcaption>

                        <strong>DETAIL CAR WASHING</strong>

                    </figcaption>
                </figure>
            </a>
        </div>
        <div class="col-md-4 col-sm-6">
            <a href="/services">
                <figure style="background-image: url('../images/w2.png');" class="ocean">
                    <figcaption>
                        <strong>WINDOWS CLEANING</strong>
                    </figcaption>
                </figure>
            </a>
        </div>
        <div class="col-md-4 col-sm-6">
            <a href="/services">
                <figure style="background-image: url('../images/w3.png');" class="ocean">
                    <figcaption>
                        <strong>ENGINE CLEANING</strong>
                    </figcaption>
                </figure>
            </a>
        </div>
        <div class="col-md-4 col-sm-6">
            <a href="/services">
                <figure style="background-image: url('../images/w4.png');" class="ocean">
                    <figcaption>

                        <strong>OIL CHANGE AND UNDER HOOD CAR CLEANING</strong>

                    </figcaption>
                </figure>
            </a>
        </div>
        <div class="col-md-4 col-sm-6">
            <a href="/services">
                <figure style="background-image: url('../images/w5.png');" class="ocean">
                    <figcaption>
                        <strong>TYRE REPAIR AND DEEP CLEANING</strong>
                    </figcaption>
                </figure>
            </a>
        </div>
        <div class="col-md-4 col-sm-6">
            <a href="/services">
                <figure style="background-image: url('../images/w6.png');" class="ocean">
                    <figcaption>
                        <strong>CAR POLISHING</strong>
                    </figcaption>
                </figure>
            </a>
        </div>
        <div class="col-md-4 col-sm-6">
            <a href="/services">
                <figure style="background-image: url('../images/w7.png');" class="ocean">
                    <figcaption>

                        <strong>INTERIOR DETAIL CLEANING</strong>

                    </figcaption>
                </figure>
            </a>
        </div>
        <div class="col-md-4 col-sm-6">
            <a href="/services">
                <figure style="background-image: url('../images/w8.png');" class="ocean">
                    <figcaption>
                        <strong>OUTER SIDE FLEX CLEANING</strong>
                    </figcaption>
                </figure>
            </a>
        </div>
        <div class="col-md-4 col-sm-6">
            <a href="/services">
                <figure style="background-image: url('../images/w9.png');" class="ocean">
                    <figcaption>
                        <strong>FULL DETAIL CAR CLEANING PACKAGE</strong>
                    </figcaption>
                </figure>
            </a>
        </div>
    </div>
</div>





<?php require "partials/footer.php" ?>

</html>