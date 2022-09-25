<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tutorial</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">
    <!-- CSS -->
    <link href="style1.css" rel="stylesheet">
    <meta name="robots" content="noindex,follow" />
    <?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "gadget";
	
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}
	
	$sql = "SELECT * FROM mobile where rating=4.8";
	$result = $conn->query($sql);
	
	if ($result->num_rows > 0) {
       $brand=$row['brand'];
       $name=$row['name'];
       $price=$row['price'];
       $imgurl=$row['imgurl'];
       $url=$row['url'];
	  }
	 else {
	  echo "0 results";
	}
  
	$conn->close();

  </head>

  <body>
  
	<div id="Gadget_Finder">
		<span style="font-style:normal;font-weight:normal;font-size:50px;color:rgba(0,100,254,1);">Gadget </span><span style="font-style:normal;font-weight:normal;font-size:50px;">Finder</span>
    </div>
</div>

    <main class="container">

        
      <!-- Left Column / Headphones Image -->
      <div class="left-column">
        <img data-image="black" src="Image_2.png" alt="">
        <img data-image="blue" src="Image_5.png" alt="">
        <img data-image="red" class="active" src="Image_2.png" alt="">
      </div>
      echo $brand=$row['brand'];
       echo $name=$row['name'];
       echo $price=$row['price'];
       echo $imgurl=$row['imgurl'];
       echo $url=$row['url'];

      <!-- Right Column -->
      <div class="right-column">

        <!-- Product Description -->
        <div class="product-description">
          <span><a href="fm.html">MOBILE</a></span>
          <h1>Apple Iphone14</h1>
          <p>apple apple apple iphone 14 i phone 14</p>
        </div>

        <!-- Product Configuration -->
        <div class="product-configuration">

          <!-- Product Color -->
          <div class="product-color">
            <span>Color</span>

            <div class="color-choose">
              <div>
                <input data-image="red" type="radio" id="red" name="color" value="red" checked>
                <label for="red"><span></span></label>
              </div>
              <div>
                <input data-image="blue" type="radio" id="blue" name="color" value="blue">
                <label for="blue"><span></span></label>
              </div>
              <div>
                <input data-image="black" type="radio" id="black" name="color" value="black">
                <label for="black"><span></span></label>
              </div>
            </div>

          </div>

          <!-- Cable Configuration -->
          <div class="cable-config">
            <span>STORAGE</span>

            <div class="cable-choose">
              <button>128GB</button>
              <button>256GB</button>
              <button>512GB</button>
            </div>

           
          </div>
        </div>

        <!-- Product Pricing -->
        <div class="product-price">
          <span>148$</span>
          <a href="#" class="cart-btn">BUY NOW</a>
        </div>
      </div>
    </main>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" charset="utf-8"></script>
    <script src="script.js" charset="utf-8"></script>
    ?>
  </body>
</html>
