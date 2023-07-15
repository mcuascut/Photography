<!DOCTYPE html>
<html>
<?php include "Include/head.php"; ?>

<body>
  <!-- Navigation -->

  <?php include "Include/nav.php" ?>

  <!-- Signature + 3 Main Images -->

  <div class="under-nav">
    <p class="brand-text" id="brand-text">
      <span id="signature">Michael Cuascut Photography</span>
    </p>
    <div class="row main-images">
      <img class="img" src="https://images.unsplash.com/photo-1653420450442-1ff0bfcdd971?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=80&raw_url=true&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687" alt="female model" />
      <img class="img" id="img" src="https://images.unsplash.com/photo-1542513217-0b0eedf7005d?ixlib=rb-1.2.1&raw_url=true&q=80&fm=jpg&crop=entropy&cs=tinysrgb&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=764" alt="female model" />
      <img class="img" src="https://images.unsplash.com/photo-1519011985187-444d62641929?ixlib=rb-1.2.1&raw_url=true&q=80&fm=jpg&crop=entropy&cs=tinysrgb&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=764" alt="female model" />
    </div>
  </div>

  <!-- About Section -->

  <div class="about-cols" id="about">
    <div class="about-col image">
      <img id="img2" src="https://images.unsplash.com/photo-1524041255072-7da0525d6b34?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=80&raw_url=true&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880" alt="female model" />
    </div>
    <div class="about-col">
      <h1>About.</h1>
      <p>
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero
        architecto amet laborum quisquam, quas, maiores qui autem asperiores
        velit eaque eos aperiam accusamus voluptate odio eligendi corporis
        explicabo sunt repellendus?
      </p>
    </div>
  </div>

  <!-- Section 3 begins Introduction Text and Night Portraits -->

  <div class="section-3-text">
    <h1>Night Portraits</h1>
    <p>
      Night portraits can do a great job at capturing the
      <b><i>atmosphere</i></b> of a location, or the <b><i>vibrancy</i></b> of
      the local night life. They are also great for capturing your myterious
      or fun side. The night accentuates the lights, and breathes new life
      into a portrait.
    </p>
    <span>Scroll Down for More</span>
    <a href="#s3" id="down-arrows"><span><img src="Media/General Icons/down-arrows.png" alt="down arrows" /></span></a>
  </div>

  <div class="section-3-container" id="s3">
    <div class="section-3-sub">
      <img class="grid-img" id="img-1" src="https://images.unsplash.com/photo-1571182160015-2169f6e1aa5f?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=60&raw_url=true&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8bmlnaHQlMjBwb3J0cmFpdHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500" alt="human night portrait" />
    </div>
    <div class="section-3-sub">
      <img class="grid-img" id="img-2" src="https://images.unsplash.com/photo-1541257710737-06d667133a53?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=80&raw_url=true&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=685" alt="human night portrait" />
    </div>
    <div class="section-3-sub">
      <img class="grid-img" id="img-3" src="https://images.unsplash.com/photo-1535467728855-93fe6218a7b1?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=80&raw_url=true&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=685" alt="human night portrait" />
    </div>
    <div class="section-3-sub">
      <img class="grid-img" id="img-4" src="https://images.unsplash.com/photo-1606503257484-76ab19686bca?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=764&q=80" alt="human night portrait" />
    </div>
    <div class="section-3-sub">
      <img class="grid-img" id="img-5" src="https://images.unsplash.com/photo-1535704882196-765e5fc62a53?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=688&q=80" alt="human night portrait" />
    </div>
  </div>


  <!-- Section 4 begins: Socials -->
  <div class="socials col-12">
    <div id="socials-1">
      <img class="socials-img" src="Media/Social Media Icons/facebook.png" alt="facebook logo" />
    </div>
    <div id="socials-2">
      <img class="socials-img" src="Media/Social Media Icons/instagram.png" alt="instagram logo" />
    </div>
    <div id="socials-3">
      <img class="socials-img" src="Media/Social Media Icons/tik-tok.png" alt="tiktok logo" />
    </div>
  </div>

  <!-- Contact -->

  <div class="contact col-12" id="contact">
    <h1>Send me a message</h1>
    <form class="contact-form" name="email-form" action="Include/email.php" method="post">
      <p>Your Name</p>
      <input type="text" name="name" />
      <p>Email</p>
      <input type="text" name="email" />
      <p>Phone Number</p>
      <input type="text" name="phone" />
      <p>Message</p>
      <textarea name="message" id="message" cols="30" rows="5"></textarea>
      <button type="submit">Send Message</button>
    </form>
  </div>

  <!-- Footer -->

  <?php include "Include/footer.php"; ?>


  <!-- Scripts -->

  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js" integrity="sha512-VEBjfxWUOyzl0bAwh4gdLEaQyDYPvLrZql3pw1ifgb6fhEvZl9iDDehwHZ+dsMzA0Jfww8Xt7COSZuJ/slxc4Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/ScrollTrigger.min.js" integrity="sha512-v8B8T8l8JiiJRGomPd2k+bPS98RWBLGChFMJbK1hmHiDHYq0EjdQl20LyWeIs+MGRLTWBycJGEGAjKkEtd7w5Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="/Javascript/gsap.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/dbae9c0cf8.js" crossorigin="anonymous"></script>
</body>

</html>