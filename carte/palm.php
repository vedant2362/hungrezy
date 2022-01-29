<?php include("header.php"); 
?><!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HUNGREZY</title>

  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

  <!-- font awesome cdn link  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

  <!-- custom css file link  -->
  <link rel="stylesheet" href="css/styl.css">

  <title>HUNGREZY</title>
</head>

<header>

  <a href="#" class="logo"><i class="fas fa-utensils"></i> HUNGREZY</a>

  <nav class="navbar">
      <a class="active" href="#home">The Palm</a>


  </nav>

  <div class="icons">
      <i class="fas fa-bars" id="menu-bars"></i>
 
      <a href="../2.php" class="fas fa-home"></a>
      <a href="mycart.php" class="fas fa-shopping-cart"></a>
  </div>
</header>
<body><section class="menu" id="menu">
    <br>
    <br> 
    <br>
    <br>
    <h1 class="heading"> Beverages </h1>
  
  
   <div class="box-container">
    <div class="box">
      <div class="image">
          <img src="images/M23.jfif" alt="">
          <a href="#" class="fas fa-heart"></a>
      </div>
      <div class="content">
          <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
          </div>
          <h3>Blueberry Juice </h3>
          <p>Blueberry Juice is a refreshing drink made from fresh blueberries.</p>
          <span class="price">₹120.00</span>
          <form action="manage_cart.php" method="POST">
          <button type="submit"  name="Add_To_Cart" class="btn">Add To Cart</button>
          <input type="hidden" name="Item_Name" value="Blueberry Juice">
          <input type="hidden" name="Price" value="120">
          </form>

</div></div>

<div class="box">
      <div class="image">
          <img src="images/M32.jpg" alt="">
          <a href="#" class="fas fa-heart"></a>
      </div>
      <div class="content">
          <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
          </div>
          <h3>Watermelon Juice</h3>
          <p>Watermelon Juice is a refreshing drink made from fresh Watermelon.</p>
          <span class="price">₹110.00</span>
          <form action="manage_cart.php" method="POST">
          <button type="submit"  name="Add_To_Cart" class="btn">Add To Cart</button>
          <input type="hidden" name="Item_Name" value="Watermelon Juice">
          <input type="hidden" name="Price" value="110">
          </form>

</div></div>

<div class="box">
      <div class="image">
          <img src="images/M12.jpeg" alt="">
          <a href="#" class="fas fa-heart"></a>
      </div>
      <div class="content">
          <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
          </div>
          <h3>Virgin Mojito</h3>
          <p>Virgin Mojito is the epitome of lime juice, sugar, soda water, and mint. </p>
          <span class="price">₹130.00</span>
          <form action="manage_cart.php" method="POST">
          <button type="submit"  name="Add_To_Cart" class="btn">Add To Cart</button>
          <input type="hidden" name="Item_Name" value="Virgin Mojito">
          <input type="hidden" name="Price" value="130">
          </form>

</div></div>

<div class="box">
      <div class="image">
          <img src="images/M30.jpg" alt="">
          <a href="#" class="fas fa-heart"></a>
      </div>
      <div class="content">
          <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
          </div>
          <h3>Cranberry Juice</h3>
          <p>Cranberry Juice is a refreshing drink made from fresh Cranberry.</p>
          <span class="price">₹120.00</span>
          <form action="manage_cart.php" method="POST">
          <button type="submit"  name="Add_To_Cart" class="btn">Add To Cart</button>
          <input type="hidden" name="Item_Name" value="Cranberry Juice">
          <input type="hidden" name="Price" value="120">
          </form>

</div></div>
<div class="box">
      <div class="image">
          <img src="images/M34.jpg" alt="">
          <a href="#" class="fas fa-heart"></a>
      </div>
      <div class="content">
          <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
          </div>
          <h3>Chikoo Milkshake</h3>
          <p>Chikoo milkshake is a refreshing, healthy and filling milkshake made from fresh Chikoos.</p>
          <span class="price">₹100.00</span>
          <form action="manage_cart.php" method="POST">
          <button type="submit"  name="Add_To_Cart" class="btn">Add To Cart</button>
          <input type="hidden" name="Item_Name" value="Chikoo Milkshake">
          <input type="hidden" name="Price" value="100">
          </form>

</div></div>
<div class="box">
      <div class="image">
          <img src="images/M26.jpg" alt="">
          <a href="#" class="fas fa-heart"></a>
      </div>
      <div class="content">
          <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
          </div>
          <h3>Strawberry Milkshake</h3>
          <p>Strawberry Milkshake is a shake prepared with milk & fresh Strawberries.</p>
          <span class="price">₹110.00</span>
          <form action="manage_cart.php" method="POST">
          <button type="submit"  name="Add_To_Cart" class="btn">Add To Cart</button>
          <input type="hidden" name="Item_Name" value="Strawberry Milkshake">
          <input type="hidden" name="Price" value="110">
          </form>

</div></div>
<div class="box">
      <div class="image">
          <img src="images/M31.jpeg" alt="">
          <a href="#" class="fas fa-heart"></a>
      </div>
      <div class="content">
          <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
          </div>
          <h3>Mango Smoothie</h3>
          <p> Mango smoothie is made with mango & milk, all blended together into a creamy drink. </p>
          <span class="price">₹130.00</span>
          <form action="manage_cart.php" method="POST">
          <button type="submit"  name="Add_To_Cart" class="btn">Add To Cart</button>
          <input type="hidden" name="Item_Name" value="Mango Smoothie">
          <input type="hidden" name="Price" value="130">
          </form>

</div></div>
    <div class="box">
      <div class="image">
          <img src="images/M24.jpeg" alt="">
          <a href="#" class="fas fa-heart"></a>
      </div>
      <div class="content">
          <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
          </div>
          <h3>Sol Kadi</h3>
          <p>Sol Kadi is a digestive drink made from Kokum and coconut milk.</p>
          <span class="price">₹100.00</span>
          <form action="manage_cart.php" method="POST">
          <button type="submit"  name="Add_To_Cart" class="btn">Add To Cart</button>
          <input type="hidden" name="Item_Name" value="Sol Kadi">
          <input type="hidden" name="Price" value="100">
          </form>

</div></div>

</div>
</section>
<section class="menu" id="menu">
    <br>
    <br> 
    <br>
    <br>
    <h1 class="heading"> STARTERS </h1>
  
  
   <div class="box-container">
    <div class="box">
      <div class="image">
          <img src="images/6549.jpeg" alt="">
          <a href="#" class="fas fa-heart"></a>
      </div>
      <div class="content">
          <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
          </div>
          <h3>Chicken Ghee Roast</h3>
          <p>It is a combination of chicken with our special masala</p>
          <span class="price">₹150.00</span>
          <form action="manage_cart.php" method="POST">
          <button type="submit"  name="Add_To_Cart" class="btn">Add To Cart</button>
          <input type="hidden" name="Item_Name" value="Chicken Ghee Roast">
          <input type="hidden" name="Price" value="150">
          </form>

</div></div>

<div class="box">
      <div class="image">
          <img src="images/6541.jpeg" alt="">
          <a href="#" class="fas fa-heart"></a>
      </div>
      <div class="content">
          <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
          </div>
          <h3>Chicken Kurkure</h3>
          <p>It is a dish made of chicken pieces coated with flour and pan-fried or deep fried.</p>
          <span class="price">₹180.00</span>
          <form action="manage_cart.php" method="POST">
          <button type="submit"  name="Add_To_Cart" class="btn">Add To Cart</button>
          <input type="hidden" name="Item_Name" value="Chicken Kurkure">
          <input type="hidden" name="Price" value="180">
          </form>

</div></div>

<div class="box">
      <div class="image">
          <img src="images/6544.jpeg" alt="">
          <a href="#" class="fas fa-heart"></a>
      </div>
      <div class="content">
          <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
          </div>
          <h3>Prawns Balchao</h3>
          <p>Prawns Balchao is a fiery dish that finds it's origins in Goa. </p>
          <span class="price">₹170.00</span>
          <form action="manage_cart.php" method="POST">
          <button type="submit"  name="Add_To_Cart" class="btn">Add To Cart</button>
          <input type="hidden" name="Item_Name" value="Prawns Balchao">
          <input type="hidden" name="Price" value="170">
          </form>

</div></div>

<div class="box">
      <div class="image">
          <img src="images/6545.jpeg" alt="">
          <a href="#" class="fas fa-heart"></a>
      </div>
      <div class="content">
          <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
          </div>
          <h3>Mutton Kebab</h3>
          <p>It is made of finely minced mutton and other ingredients</p>
          <span class="price">₹200.00</span>
          <form action="manage_cart.php" method="POST">
          <button type="submit"  name="Add_To_Cart" class="btn">Add To Cart</button>
          <input type="hidden" name="Item_Name" value="Mutton Kebab">
          <input type="hidden" name="Price" value="200">
          </form>

</div></div>
<div class="box">
      <div class="image">
          <img src="images/6546.jpeg" alt="">
          <a href="#" class="fas fa-heart"></a>
      </div>
      <div class="content">
          <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
          </div>
          <h3>Chicken Lollipop</h3>
          <p>It is a succulent treat that lives up to the name</p>
          <span class="price">₹160.00</span>
          <form action="manage_cart.php" method="POST">
          <button type="submit"  name="Add_To_Cart" class="btn">Add To Cart</button>
          <input type="hidden" name="Item_Name" value="Chicken Lollipop">
          <input type="hidden" name="Price" value="160">
          </form>

</div></div>
<div class="box">
      <div class="image">
          <img src="images/6543.jpeg" alt="">
          <a href="#" class="fas fa-heart"></a>
      </div>
      <div class="content">
          <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
          </div>
          <h3>Mackerel Recheado</h3>
          <p>It is a crispy fried mackerel stuffed with Goan spice paste</p>
          <span class="price">₹200.00</span>
          <form action="manage_cart.php" method="POST">
          <button type="submit"  name="Add_To_Cart" class="btn">Add To Cart</button>
          <input type="hidden" name="Item_Name" value="Mackerel Recheado">
          <input type="hidden" name="Price" value="200">
          </form>

</div></div>
<div class="box">
      <div class="image">
          <img src="images/6542.jpeg" alt="">
          <a href="#" class="fas fa-heart"></a>
      </div>
      <div class="content">
          <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
          </div>
          <h3>Tandoori Momos</h3>
          <p>It is a fusion of authentic nepali momos with tandoori gravy.</p>
          <span class="price">₹250.00</span>
          <form action="manage_cart.php" method="POST">
          <button type="submit"  name="Add_To_Cart" class="btn">Add To Cart</button>
          <input type="hidden" name="Item_Name" value="Tandoori Momos">
          <input type="hidden" name="Price" value="250">
          </form>

</div></div>
    <div class="box">
      <div class="image">
          <img src="images/6548.jpeg" alt="">
          <a href="#" class="fas fa-heart"></a>
      </div>
      <div class="content">
          <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
          </div>
          <h3>Squids Batter Fry</h3>
          <p>Batter Fried Squids/Calamari are a popular starter in most hotels in Goa.</p>
          <span class="price">₹190.00</span>
          <form action="manage_cart.php" method="POST">
          <button type="submit"  name="Add_To_Cart" class="btn">Add To Cart</button>
          <input type="hidden" name="Item_Name" value="Squids Batter Fry">
          <input type="hidden" name="Price" value="190">
          </form>

</div></div>

</div>
</section>
<section class="menu" id="menu">
    <br>
    <br> 
    <br>
    <br>
    <h1 class="heading"> MAIN COURSE </h1>
  
  
   <div class="box-container">
    <div class="box">
      <div class="image">
          <img src="images/MC1.jfif" alt="">
          <a href="#" class="fas fa-heart"></a>
      </div>
      <div class="content">
          <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
          </div>
          <h3>Butter Chicken & Naan</h3>
          <p>It's a creamy sweet chicken served with hot garlic naan.</p>
          <span class="price">₹350.00</span>
          <form action="manage_cart.php" method="POST">
          <button type="submit"  name="Add_To_Cart" class="btn">Add To Cart</button>
          <input type="hidden" name="Item_Name" value="Butter Chicken & Naan">
          <input type="hidden" name="Price" value="350">
          </form>

</div></div>

<div class="box">
      <div class="image">
          <img src="images/MC2.jfif" alt="">
          <a href="#" class="fas fa-heart"></a>
      </div>
      <div class="content">
          <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
          </div>
          <h3>Prawn Curry Rice</h3>
          <p>Flavourful dish made of fresh prawns served with rice.</p>
          <span class="price">₹400.00</span>
          <form action="manage_cart.php" method="POST">
          <button type="submit"  name="Add_To_Cart" class="btn">Add To Cart</button>
          <input type="hidden" name="Item_Name" value="Prawn Curry Rice">
          <input type="hidden" name="Price" value="400">
          </form>

</div></div>

<div class="box">
      <div class="image">
          <img src="images/MC3.jfif" alt="">
          <a href="#" class="fas fa-heart"></a>
      </div>
      <div class="content">
          <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
          </div>
          <h3>Chicken Fried Rice</h3>
          <p>Chicken fried rice is the comfort dish of Chinese food.</p>
          <span class="price">₹200.00</span>
          <form action="manage_cart.php" method="POST">
          <button type="submit"  name="Add_To_Cart" class="btn">Add To Cart</button>
          <input type="hidden" name="Item_Name" value="Chicken Fried Rice">
          <input type="hidden" name="Price" value="200">
          </form>

</div></div>

<div class="box">
      <div class="image">
          <img src="images/MC4.jfif" alt="">
          <a href="#" class="fas fa-heart"></a>
      </div>
      <div class="content">
          <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
          </div>
          <h3>Chicken Biryani</h3>
          <p>It's a dish that includes layers of chicken, rice, and aromatics steamed together.</p>
          <span class="price">₹300.00</span>
          <form action="manage_cart.php" method="POST">
          <button type="submit"  name="Add_To_Cart" class="btn">Add To Cart</button>
          <input type="hidden" name="Item_Name" value="Chicken Biryani">
          <input type="hidden" name="Price" value="300">
          </form>

</div></div>
<div class="box">
      <div class="image">
          <img src="images/MC5.jfif" alt="">
          <a href="#" class="fas fa-heart"></a>
      </div>
      <div class="content">
          <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
          </div>
          <h3>White Sauce Pasta</h3>
          <p>It's a mixture of butter,milk,flour,spice and cooked pasta.</p>
          <span class="price">₹250.00</span>
          <form action="manage_cart.php" method="POST">
          <button type="submit"  name="Add_To_Cart" class="btn">Add To Cart</button>
          <input type="hidden" name="Item_Name" value="White Sauce Pasta">
          <input type="hidden" name="Price" value="250">
          </form>

</div></div>
<div class="box">
      <div class="image">
          <img src="images/MC7.jfif" alt="">
          <a href="#" class="fas fa-heart"></a>
      </div>
      <div class="content">
          <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
          </div>
          <h3>Chicken Hakka Noodles</h3>
          <p>Boiled noodles stir fried with sauces,vegetables or meats.</p>
          <span class="price">₹320.00</span>
          <form action="manage_cart.php" method="POST">
          <button type="submit"  name="Add_To_Cart" class="btn">Add To Cart</button>
          <input type="hidden" name="Item_Name" value="Chicken Hakka Noodles">
          <input type="hidden" name="Price" value="320">
          </form>

</div></div>
<div class="box">
      <div class="image">
          <img src="images/MC8.jfif" alt="">
          <a href="#" class="fas fa-heart"></a>
      </div>
      <div class="content">
          <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
          </div>
          <h3>Green Thai Curry & Rice</h3>
          <p>It's thick, creamy and filling served with rice.</p>
          <span class="price">₹400.00</span>
          <form action="manage_cart.php" method="POST">
          <button type="submit"  name="Add_To_Cart" class="btn">Add To Cart</button>
          <input type="hidden" name="Item_Name" value="Green Thai Curry & Rice">
          <input type="hidden" name="Price" value="400">
          </form>

</div></div>
    <div class="box">
      <div class="image">
          <img src="images/MC6.jfif" alt="">
          <a href="#" class="fas fa-heart"></a>
      </div>
      <div class="content">
          <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
          </div>
          <h3>White Sauce Spaghetti</h3>
          <p>Mixture of butter,milk,flour,spice and cooked Spaghetti.</p>
          <span class="price">₹380.00</span>
          <form action="manage_cart.php" method="POST">
          <button type="submit"  name="Add_To_Cart" class="btn">Add To Cart</button>
          <input type="hidden" name="Item_Name" value="White Sauce Spaghetti">
          <input type="hidden" name="Price" value="380">
          </form>

</div></div>

</div>
</section>
<section class="menu" id="menu">
    <br>
    <br> 
    <br>
    <br>
    <h1 class="heading"> DESSERTS </h1>
  
  
   <div class="box-container">
    <div class="box">
      <div class="image">
          <img src="images/D1.jpeg" alt="">
          <a href="#" class="fas fa-heart"></a>
      </div>
      <div class="content">
          <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
          </div>
          <h3>Red Velvet Cupcake</h3>
          <p>A red, or scarlet-colored chocolate cake, layered with ermine icing.</p>
          <span class="price">₹80.00</span>
          <form action="manage_cart.php" method="POST">
          <button type="submit"  name="Add_To_Cart" class="btn">Add To Cart</button>
          <input type="hidden" name="Item_Name" value="Red Velvet Cupcake">
          <input type="hidden" name="Price" value="80">
          </form>

</div></div>

<div class="box">
      <div class="image">
          <img src="images/D7.jpeg" alt="">
          <a href="#" class="fas fa-heart"></a>
      </div>
      <div class="content">
          <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
          </div>
          <h3>Serradura</h3>
          <p> Portuguese dish layering crushed cookies with sweet whipping cream.</p>
          <span class="price">₹100.00</span>
          <form action="manage_cart.php" method="POST">
          <button type="submit"  name="Add_To_Cart" class="btn">Add To Cart</button>
          <input type="hidden" name="Item_Name" value="Serradura">
          <input type="hidden" name="Price" value="100">
          </form>

</div></div>

<div class="box">
      <div class="image">
          <img src="images/D2.jpeg" alt="">
          <a href="#" class="fas fa-heart"></a>
      </div>
      <div class="content">
          <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
          </div>
          <h3>Blueberry Cheesecake</h3>
          <p>Creamy cheesecake filling, studded with blueberries inside, topped with blueberry sauce .</p>
          <span class="price">₹130.00</span>
          <form action="manage_cart.php" method="POST">
          <button type="submit"  name="Add_To_Cart" class="btn">Add To Cart</button>
          <input type="hidden" name="Item_Name" value="Blueberry Cheesecake">
          <input type="hidden" name="Price" value="130">
          </form>

</div></div>

<div class="box">
      <div class="image">
          <img src="images/D3.jpeg" alt="">
          <a href="#" class="fas fa-heart"></a>
      </div>
      <div class="content">
          <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
          </div>
          <h3>Caramel Pudding</h3>
          <p>Silky-smooth dessert made with milk, sugar, and eggs.</p>
          <span class="price">₹120.00</span>
          <form action="manage_cart.php" method="POST">
          <button type="submit"  name="Add_To_Cart" class="btn">Add To Cart</button>
          <input type="hidden" name="Item_Name" value="Caramel Pudding">
          <input type="hidden" name="Price" value="120">
          </form>

</div></div>
<div class="box">
      <div class="image">
          <img src="images/D4.jpeg" alt="">
          <a href="#" class="fas fa-heart"></a>
      </div>
      <div class="content">
          <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
          </div>
          <h3>Strawberry Ice Cream</h3>
          <p>Flavor of ice cream made with strawberry.</p>
          <span class="price">₹90.00</span>
          <form action="manage_cart.php" method="POST">
          <button type="submit"  name="Add_To_Cart" class="btn">Add To Cart</button>
          <input type="hidden" name="Item_Name" value="Strawberry Ice Cream">
          <input type="hidden" name="Price" value="90">
          </form>

</div></div>
<div class="box">
      <div class="image">
          <img src="images/D6.jpeg" alt="">
          <a href="#" class="fas fa-heart"></a>
      </div>
      <div class="content">
          <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
          </div>
          <h3>Tiramisu</h3>
          <p>Fluffy coffee-flavored goodness.</p>
          <span class="price">₹150.00</span>
          <form action="manage_cart.php" method="POST">
          <button type="submit"  name="Add_To_Cart" class="btn">Add To Cart</button>
          <input type="hidden" name="Item_Name" value="Tiramisu">
          <input type="hidden" name="Price" value="150">
          </form>

</div></div>
<div class="box">
      <div class="image">
          <img src="images/D8.jpeg" alt="">
          <a href="#" class="fas fa-heart"></a>
      </div>
      <div class="content">
          <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
          </div>
          <h3>Ras Malai</h3>
          <p>Flattened balls of chhena soaked in malai flavoured with cardamom.</p>
          <span class="price">₹110.00</span>
          <form action="manage_cart.php" method="POST">
          <button type="submit"  name="Add_To_Cart" class="btn">Add To Cart</button>
          <input type="hidden" name="Item_Name" value="Ras Malai">
          <input type="hidden" name="Price" value="110">
          </form>

</div></div>
    <div class="box">
      <div class="image">
          <img src="images/D5.jpeg" alt="">
          <a href="#" class="fas fa-heart"></a>
      </div>
      <div class="content">
          <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
          </div>
          <h3>Chocolate Ice Cream</h3>
          <p>Flavor of ice cream made with Chocolate.</p>
          <span class="price">₹100.00</span>
          <form action="manage_cart.php" method="POST">
          <button type="submit"  name="Add_To_Cart" class="btn">Add To Cart</button>
          <input type="hidden" name="Item_Name" value="Chocolate Ice Cream">
          <input type="hidden" name="Price" value="100">
          </form>

</div></div>

</div>
</section>
</body>
</html>