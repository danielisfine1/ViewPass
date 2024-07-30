<!DOCTYPE html>

<html>

<head>
      <title>Home</title>
      <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
</head>

<body>
      <div class="container">
            <div class="header">
                  <h1>ViewPass</h1>
                  <h3>Log in</h3>
            </div>
            <div class="content">
                  <h2>Turn your physical event into a digital experience with ViewPass</h2>
                  <div class="images_container">
                        <?php

                        $images = array(
                              array(
                                    "src" => "./images/image.png",
                                    "alt" => "Image 1",
                                    "title" => "Create & sell digital tickets"
                              ),
                              array(
                                    "src" => "./images/image2.png",
                                    "alt" => "Image 2",
                                    "title" => "Collect ticket payments"
                              ),
                              array(
                                    "src" => "./images/image3.png",
                                    "alt" => "Image 3",
                                    "title" => "Reconnect with customers"
                              ),
                              array(
                                    "src" => "./images/image4.png",
                                    "alt" => "Image 4",
                                    "title" => "Stream multi camera events"
                              )
                        );

                        foreach ($images as $image) {



                        ?>
                              <div class="image">
                                    <img src="<?php echo $image["src"]; ?>" alt="<?php echo $image["alt"]; ?>">
                                    <h2><?php echo $image["title"]; ?></h2>

                              </div>
                        <?php
                        }
                        ?>
                  </div>
            </div>
            <div class="calculator">
                  <div class="calculator_header">
                        <h2>Use our calculator to estimate your revenue</h2>
                  </div>
                  <div class="ticket_container">
                        <div class="ticket_avail">
                              <h2>Tickets available:</h2>
                              <input type="text" id="tickets" name="tickets" value="">
                        </div>
                        <div class="ticket_price">
                              <h2>Price per ticket:</h2>
                              <input type="text" id="price" name="price" value="">
                        </div>
                        <div class="ticket_button">
                              <button id="calculate">Calculate</button>
                        </div>
                  </div>
            </div>
      </div>
</body>

<style>
      body {
            background-color: #1a1a1a;
      }

      h1,
      h2,
      h3 {
            color: white;
            font-family: "Inter";
      }

      .header {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: baseline;
            width: auto;
      }

      .images_container {
            display: flex;
            justify-content: space-between;
      }

      .image {
            display: flex;
            justify-content: center;
            flex-direction: column;
            width: 20%;
      }

      .calculator_header {
            display: flex;
            justify-content: center;
            font-weight: bold;
            font-size: x-large;
            margin-top: 65px;
      }

      .ticket_container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 30vh;
            padding: 0 10%;
      }

      .ticket_avail,
      .ticket_price {
            padding: 5px;
            /* margin: 5px; */
            text-align: start;
            flex: 1;
            margin-bottom: 75px;
      }

      #tickets,
      #price {
            background-color: #FFFFFF;
            border-radius: 10px;
            padding: 20px;
            outline: none;
            width: 80%;
            text-align: end;
            font-style: inter;
            font-size: 25px;
            font-weight: 900;
      }

      #calculate {
            margin-bottom: 13px;
            width: 170px;
            height: 85px;
            border-radius: 20px;
            text-align: center;
            font-style: inter;
            font-size: 25px;
            font-weight: 900;
            text-decoration: underline;
      }
</style>