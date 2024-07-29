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
                  <h2>Use our calculator to estimate your revenue</h2>
                  <div>
                        <h2>Tickets available:</h2>
                        <input type="text" id="tickets" name="tickets" value="">
                  </div>
                  <div>
                        <h2>Price per ticket:</h2>
                        <input type="text" id="price" name="price" value="">
                  </div>
                  <div>
                        <button id="calculate">Calculate</button>
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
</style>