<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="style.css" rel="stylesheet">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <!--------------- NAVBAR SECTION ------------>
    <nav class="navbar-section">
        <div class="nav-top">
            <div class="nav-contacts">
              <p><i class="fa-solid fa-phone"></i>Need help? Call us: +1 (234) 567-890</p>
            </div>
            <div class="nav-offer">
              <p><i class="fa-solid fa-gift"></i>20% off on  your first order</p>
            </div>
            <div class="nav-languages">
                <i class="fa-solid fa-language"></i>
                <p><select id="language">
                    <option value="" deselected option>ENG</option>
                    <option value="1">English</option>
                    <option value="2">Español </option>
                    <option value="3">Français</option>
                    <option value="4">Deutsch </option>
                </select></p>
                <i class="fa-solid fa-dollar-sign"></i>
                <p><select id="currenct">
                    <option value="" deselected option>USD</option>
                    <option value="1">USD</option>
                    <option value="2">EUR</option>
                    <option value="3">GBP</option>
                </select></p>
            </div>
        </div><br>

        <div class="nav-center">
            <div class="logo">
                <img src="img/440a164f-4f6b-46e5-a002-a09cc25a6656.jpg">
            </div>
            <div class="nav-search">
                <input type="search" id="nav-search" name="nav-search" placeholder="Search for products">
            </div>
            <div class="nav-center-icons">
                 <p><a href="cart.html"><i class="fa-solid fa-cart-shopping"></i></a></p>
                  <i class="fa-solid fa-heart"></i>
                  <i class="fa-solid fa-user"></i>
            </div>
        </div>

        <div class="navigation">
            <ul class="nav-links">
                <li><a href="index.html">Home</a></li>
                <li><a href="products.html">Products</a></li>
                <li><a href="cart.html">Cart</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contacts">Contact</a></li>
            </ul>
        </div>
    </nav>

<!------------------ CART-SECtION ---------------->
    <section class="cart-head">
        <h1>Cart</h1>
        <p><a href="index.html">Home</a>  /  Cart</p>
    </section>
    
<!------------------ MAIN-CARTS ------------------->  
    <section class="main-carts">
        
        <div class="cart-items">
           
            <div class="carts">
             
                <div class="cart-table">
                    <div class="cart-product"><p>Products</p></div>
                    
                    <div class="cart-product">
                        <img src="img/product/product-4.webp">
                        <span>
                            <p class="cart-name">Lorem ipsum dolor sit amet</p>
                            <p>Color: Black    Size: M</p>
                            <a href="#dremove-cart">Remove</a>
                        </span>
                    </div>
                    <div class="cart-product">
                        <img src="img/shoes/download (4).jpeg">
                        <span>
                            <p class="cart-name">Consectetur adipiscing elit</p>
                            <p>Color: white    Size: L</p>
                            <a href="#dremove-cart">Remove</a>
                        </span>
                    </div>
                    <div class="cart-product">
                        <img src="img/caps/images (21).jpeg">
                        <span>
                            <p class="cart-name">Sed do eiusmod tempor</p>
                            <p>Color: Blue    Size: S</p>
                            <a href="#dremove-cart">Remove</a>
                        </span>
                    </div>
               
                </div>
              
            
                <div class="cart-price">
                    <p>Price</p>
                    <p>$89.99</p>
                    <p>$64.99<br><span>$79.99</span></p>
                    <p>$49.99</p>
                </div>
               
                <div class="cart-quantity">
                    <p>Quantity</p>
                    <p><input type="number" placeholder="Quantity"></p>
                    <p><input type="number" placeholder="Quantity"></p>
                    <p><input type="number" placeholder="Quantity"></p>
                </div>
             
                <div class="cart-total">
                    <p>Total</p>
                    <p>$89.99</p>
                    <p>$129.98</p>
                    <p>$49.99</p>
                </div>
           </div>
           <div class="carts-btn">
            <span class="update"><a href="#update-cart" >Update Cart</a></span>
            <span class="clear"><a href="#clear-cart"  >Clear Cart</a></span>
        </div>
        <br><br><br>
        </div>
       
        <div class="cart-payment">
             <h2>Order Summary</h2>

                <div class="cart-payment-list">
                    <p>Subtotal:</p>
                    <span>$269.96</span>
                </div>
                <div class="cart-payment-list">
                    <p>Tax:</p>
                    <span>$7.00</span>
                </div>
                <div class="cart-payment-list">
                    <p>Discount:</p>
                    <span>$0.00</span>
                </div>
                 <div class="cart-payment-list-total">
                    <p>Total:</p>
                    <span>$301.95</span>
                 </div>
                 <div class="checkout">
                    <a href="checkout">Proceed to Checkout =></a>
                 </div>
                 <div class="continue-shop">
                    <a href="products"><=continue Shopping</a>
                 </div>
            </div> 
    
    </section><br><br>

 <!---------------------- FOOTER-SECTION ----------------->
    <section class="Contact-section" id="contacts">
       <div class="contant-info">
        <div class="ft-desc">
              <h1>GWERU FASHION <span>way</span></h1>
             <p>Thank you for choosing GWERU FASHION <span>way.</span> We are committed to bringing you the best in fashion, ensuring you always step out in style.</p>
             <p>Connect With Us</p>
         <div class="medias">
             <a href="facebook"><i class="fa-brands fa-facebook"></i></a>
             <a href="instagram"><i class="fa-brands fa-instagram"></i></a>
             <a href="tiktok"><i class="fa-brands fa-tiktok"></i></a></a>
             <a href="whatsapp"><i class="fa-brands fa-whatsapp"></i></a></a>
         </div>
       </div>

     <div class="ft-shop">
          <h2>Shop</h2><hr>
          <a href="index.html">Home</a>
          <a href="#about">About</a>
          <a href="products.html">Products</a>
          <a href="cart.html">Cart</a>
          <a href="#contacts">Contact</a>
     </div>

     <div class="ft-contact">
          <h2>Information Contact</h2><hr>
          <p><i class="fa-solid fa-location-dot"></i>Global Village Room 58 & 06</p>
          <p><i class="fa-solid fa-phone"></i>+263 78 404 0311</p>
          <p><i class="fa-solid fa-envelope"></i>gwerufashionway@gmail.com</p>
          <p><i class="fa-solid fa-clock"></i>Monday-Friday: 9am-6pm<br>
            saturday: 10am-4pm<br>
            Sunday: Closed
         </p>
     </div>

     </div>
     <hr>
     <p class="copyright">© 2025 Copyright Gweru Fashion Way. All Rights Reserved.</p><br>
    </section>

</body>
</html>
