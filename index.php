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
                  <a href="https://en.wikipedia.org/wiki/Nutria">
                        <h3 style="text-decoration: underline;">Log in</h3>
                  </a>
            </div>
            <div class="content">
                  <div class="content_header">
                        <h2>Turn your physical event into a digital experience with ViewPass</h2>
                  </div>
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

      h1 {
            color: white;
            font-family: "Inter";
            font-weight: bolder;
      }

      h2,
      h3 {
            color: white;
            font-family: "Inter";
      }

      .header {
            display: flex;
            padding-left: 5px;
            padding-right: 10px;
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
            width: auto;
      }

      .content_header {
            display: flex;
            justify-content: center;
            padding: 10px;
            margin-bottom: 20px;
      }

      .images_container {
            display: flex;
            justify-content: space-between;
            padding: 20px;
      }

      .image {
            display: flex;
            justify-content: center;
            flex-direction: column;
            width: 20%;
            transition: transform .2s;
      }

      .image:hover {
            transform: scale(1.2);
            cursor: pointer;
      }

      .calculator_header {
            display: flex;
            justify-content: center;
            font-weight: bold;
            font-size: x-large;
            margin-top: 30px;
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