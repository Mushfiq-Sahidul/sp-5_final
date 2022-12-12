<?php


@include 'config.php';
session_start();
include('header.php');


?>


<section>
    <div class="slider">

      <div class="slider-wrapper theme-dark">
        <div id="slider" class="nivoSlider">
          <img src="slider/img/1.png" data-thumb="img/toystory.jpg" alt="" />

          <a><img src="slider/img/2.png" data-thumb="img/up.jpg" alt="" /></a>

          <img src="slider/img/3.png" data-thumb="img/walle.jpg" alt="" data-transition="slideInLeft" />

          <img src="slider/img/4.png" data-thumb="img/nemo.jpg" alt="" />

        </div>
      </div>

      <script type="text/javascript" src="slider/js/jquery-1.9.0.min.js"></script>
      <script type="text/javascript" src="slider/js/jquery.nivo.slider.js"></script>

      <script type="text/javascript">
        $(window).load(function () {
          $('#slider').nivoSlider();
        });
      </script>

    </div>
  </section>


  <div class="featured_category">
    <h2 class="featured-header">Featured Category</h2>
    <p class="featured-text">Get Your Desired Product from Featured Category!</p>
    <div class="featured-items">


      <div class="cat-item">

        <span class="cat-icon">
          <img src="feature/laptop.png" alt="Laptop" width="48" height="48">
        </span>
        <p>Laptop</p>

      </div>

      <div class="cat-item">

        <span class="cat-icon">
          <img src="feature/monitor.png" alt="monitor" width="48" height="48">
        </span>
        <p>Monitor</p>

      </div>

      <div class="cat-item">

        <span class="cat-icon">
          <img src="feature/keyboard.png" alt="Keyboard" width="48" height="48">
        </span>
        <p>Keyboard</p>

      </div>

      <div class="cat-item">

        <span class="cat-icon">
          <img src="feature/mouse.png" alt="Mouse" width="48" height="48">
        </span>
        <p>Mouse</p>

      </div>

      <div class="cat-item">

        <span class="cat-icon">
          <img src="feature/cpu.png" alt="Processor" width="48" height="48">
        </span>
        <p>Processor</p>

      </div>

      <div class="cat-item">

        <span class="cat-icon">
          <img src="feature/gpu.png" alt="Graphics Card" width="48" height="48">
        </span>
        <p>Graphics Card</p>

      </div>

      <div class="cat-item">

        <span class="cat-icon">
          <img src="feature/ssd.png" alt="SSD" width="48" height="48">
        </span>
        <p>SSD</p>

      </div>

      <div class="cat-item">

        <span class="cat-icon">
          <img src="feature/gaming-console.png" alt="Gaming Console" width="48" height="48">
        </span>
        <p>Gaming Console</p>

      </div>

      <div class="cat-item">

        <span class="cat-icon">
          <img src="feature/headphone.png" alt="Headphone" width="48" height="48">
        </span>
        <p>Headphone</p>

      </div>


      <div class="cat-item">

        <span class="cat-icon">
          <img src="feature/smart-watch.png" alt="Smart Watch" width="48" height="48">
        </span>
        <p>Smart Watch</p>

      </div>

      <div class="cat-item">

        <span class="cat-icon">
          <img src="feature/router.png" alt="Router" width="48" height="48">
        </span>
        <p>Router</p>

      </div>

      <div class="cat-item">

        <span class="cat-icon">
          <img src="feature/portable-camera.png" alt="Portable WiFi Camera" width="48" height="48">
        </span>
        <p>Portable WiFi Camera</p>

      </div>

    </div>
  </div>
  <div class="featured products">
    <h2 class="products-header">Featured Products</h2>
    <p class="products-text">Get Your Desired Product from Featured Category!</p>
    <div class="products-items">

      <div class="list-item">

        <span class="cat-icon">
          <img src="./products/MacBook Pro 14-Inch M1 Max Chip, 32GB RAM, 1TB SSD (Z15H00107) Space Grey-228x228.jpg"
            alt="Laptop">
        </span>
        <p class="produc-title">MacBook Pro 14-Inch M1 Max Chip, 32GB RAM, 1TB SSD</p>
        <span class="price-tag">1499.99$</span>
        <button class="button"><b>Buy Now</b></button>

      </div>
      <div class="list-item">

        <span class="cat-icon">
          <img src="./products/MSI Prestige PS341WU 34 8ms Nano IPS 5K2K WUHD Ultra-Wide Monitor.jpg" alt="Monitor">
        </span>
        <p class="produc-title">MSI Prestige PS341WU 34 8ms Nano IPS 5K2K WUHD Ultra-Wide Monitor</p>
        <span class="price-tag">399.99$</span>
        <button class="button"><b>Buy Now</b></button>

      </div>
      <div class="list-item">

        <span class="cat-icon">
          <img src="./products/Corsair K70 RGB Mechanical Gaming Keyboard Cherry MX Speed.jpg" alt="Laptop">
        </span>
        <p class="produc-title">Corsair K70 RGB Mechanical Gaming Keyboard Cherry MX Speed</p>
        <span class="price-tag">149.99$</span>
        <button class="button"><b>Buy Now</b></button>

      </div>
      <div class="list-item">

        <span class="cat-icon">
          <img src="./products/Razer Viper Ultimate RGB Gaming Mouse with Charging Dock.jpg" alt="Laptop">
        </span>
        <p class="produc-title">Razer Viper Ultimate RGB Gaming Mouse with Charging Dock</p>
        <span class="price-tag">169.99$</span>
        <button class="button"><b>Buy Now</b></button>

      </div>
      <div class="list-item">

        <span class="cat-icon">
          <img src="./products/Intel 12th Gen Core i9-12900K Alder Lake Processor.jpg" alt="Laptop">
        </span>
        <p class="produc-title">Intel 12th Gen Core i9-12900K Alder Lake Processor</p>
        <span class="price-tag">299.99$</span>
        <button class="button"><b>Buy Now</b></button>

      </div>
      <div class="list-item">

        <span class="cat-icon">
          <img src="./products/Zotac Gaming GeForce RTX 3090 Ti AMP Extreme Holo 24GB GDDR6X Graphics Card.jpg"
            alt="Laptop">
        </span>
        <p class="produc-title">Zotac Gaming GeForce RTX 3090 Ti AMP Extreme Holo 24GB GDDR6X Graphics Card</p>
        <span class="price-tag">499.99$</span>
        <button class="button"><b>Buy Now</b></button>

      </div>
      <div class="list-item">

        <span class="cat-icon">
          <img src="./products/Transcend 230S 4TB 2.5 Inch SATA III SSD.jpg" alt="Laptop">
        </span>
        <p class="produc-title">Transcend 230S 4TB 2.5 Inch SATA III SSD</p>
        <span class="price-tag">99.99$</span>
        <button class="button"><b>Buy Now</b></button>

      </div>

      <div class="list-item">

        <span class="cat-icon">
          <img src="./products/Sony PlayStation 5 Analog Version FIFA 2023 Edition.jpg" alt="Laptop">
        </span>
        <p class="produc-title">Sony PlayStation 5 Analog Version FIFA 2023 Edition</p>
        <span class="price-tag">699.99$</span>
        <button class="button"><b>Buy Now</b></button>

      </div>
      <div class="list-item">

        <span class="cat-icon">
          <img src="./products/Razer BlackShark V2 Pro Rainbow Six Siege Special Edition.jpg" alt="Laptop">
        </span>
        <p class="produc-title">Razer BlackShark V2 Pro Rainbow Six Siege Special Edition</p>
        <span class="price-tag">139.99$</span>
        <button class="button"><b>Buy Now</b></button>

      </div>
      <div class="list-item">

        <span class="cat-icon">
          <img src="./products/Apple Watch Series 7 45mm Sports Band.jpg" alt="Laptop">
        </span>
        <p class="produc-title">Apple Watch Series 7 45mm Sports Band</p>
        <span class="price-tag">199.99$</span>
        <button class="button"><b>Buy Now</b></button>

      </div>
      <div class="list-item">

        <span class="cat-icon">
          <img src="./products/Asus Rog Rapture GT-AC5300 5334 Mbps Tri Band WiFi Router.jpg" alt="Laptop">
        </span>
        <p class="produc-title">Asus Rog Rapture GT-AC5300 5334 Mbps Tri Band WiFi Router</p>
        <span class="price-tag">129.99$</span>
        <button class="button"><b>Buy Now</b></button>

      </div>
      <div class="list-item">

        <span class="cat-icon">
          <img src="./products/Netgear VMS3230 Arlo Home Video Monitoring IP Camera System.jpg" alt="Laptop">
        </span>
        <p class="produc-title">Netgear VMS3230 Arlo Home Video Monitoring IP Camera System</p>
        <span class="price-tag">89.99$</span>
        <button class="button"><b>Buy Now</b></button>

      </div>


    </div>
  </div>
  
  
<?php

include('footer.php');

?>