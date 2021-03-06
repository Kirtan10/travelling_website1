<?php

session_start();
if(!isset($_SESSION['username'])){
header('location:login1.php');
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
      href="https://fonts.googleapis.com/css?family=Vollkorn:400,400i,600,700,900&display=swap" rel="stylesheet" >
    <link rel="stylesheet" href="styles.css">
    <title>TRAVEL HERO</title>
</head>
<body>
    <div class="container">
        <!-- Navbar -->
        <div class="open-navbar-icon navbar-icon center">
          <div class="line"></div>
          <div class="line"></div>
          <div class="line"></div>
        </div>
        <div class="navbar-wrapper">
          <nav class="navbar">
            <div class="close-navbar-icon navbar-icon center">
              <div class="line line-1"></div>
              <div class="line line-2"></div>
            </div>
            <div class="nav-list">
              <a href="#header center" class="nav-link center">Home</a>
              <a href="#tours" class="nav-link center">Tours</a>
              <a href="#" class="nav-link center">About Us</a>
              <a href="#" class="nav-link center">Offer</a>
              <a href="#contact us" class="nav-link center">Contact</a>
            </div>
          </nav>
        </div>
        <!-- End of Navbar -->
  
        <!-- Header -->
        <header class="header center" id="header center">
          <div class="header-text">
            <h1 class="heading">TRAVEL HERO</h1>
            <p class="header-paragraph">
              "Traveling - it leaves you speechless, then turns you into a storyteller"
            </p>
          </div>
          <img
            src="images/air-balloon.png"
            alt="Header Image"
            class="header-image">
          <div class="logo">
            <h1>
              <span class="center">T</span>
              <span class="center">R</span>
              <span class="center">A</span>
              <span class="center">V</span>
              <span class="center">E</span>
              <span class="center">L</span>
            </h1>
          </div>
          <div class="container">
   

   <h2 class ="text-center text-success"> Welcome <?php echo $_SESSION['username']; ?> </h2>
   <a href="logout.php">LOGOUT</a>
</div>
        </header>
        <!-- End of Header -->
  
        <!-- Popular tours -->
        <section class="popular-tours" id="tours">
          <h1 class="popular-tours-heading"> Popular Treking Places</h1>
          <div class="cards-wrapper">
            <div class="card">
              <div class="front-side">
                <img src="images/forest.jpg" alt="Forest" class="card-image" />
                <h1 class="tour-name">The wild forest</h1>
                <ul class="card-list">
                  <li class="card-list-item">7 days tour</li>
                  <li class="card-list-item">Up to 20 people</li>
                  <li class="card-list-item">4 tour guides</li>
                  <li class="card-list-item">Sleep in private tents</li>
                  <li class="card-list-item">Difficulty: medium</li>
                </ul>
                <button class="navigation-button">
                  price &gt;&gt;
                </button>
              </div>
              <div class="back-side center">
                <button class="navigation-button">
                  &lt;&lt; back
                </button>
                <h3 class="tour-price">$399</h3>
                <button class="card-button">Booking</button>
              </div>
            </div>
            <div class="card">
              <div class="front-side">
                <img src="images/river.jpg" alt="River" class="card-image" />
                <h1 class="tour-name">Along the river</h1>
                <ul class="card-list">
                  <li class="card-list-item">9 days tour</li>
                  <li class="card-list-item">Up to 30 people</li>
                  <li class="card-list-item">7 tour guides</li>
                  <li class="card-list-item">Sleep in private tents</li>
                  <li class="card-list-item">Difficulty: hard</li>
                </ul>
                <button class="navigation-button">
                  price &gt;&gt;
                </button>
              </div>
              <div class="back-side center">
                <button class="navigation-button">
                  &lt;&lt; back
                </button>
                <h3 class="tour-price">$499</h3>
                <button class="card-button">Booking</button>
              </div>
            </div>
            <div class="card">
              <div class="front-side">
                <img src="images/sea.jpg" alt="Sea" class="card-image" />
                <h1 class="tour-name">The island beach</h1>
                <ul class="card-list">
                  <li class="card-list-item">5 days tour</li>
                  <li class="card-list-item">Up to 40 people</li>
                  <li class="card-list-item">8 tour guides</li>
                  <li class="card-list-item">Sleep in hotel</li>
                  <li class="card-list-item">Difficulty: easy</li>
                </ul>
                <button class="navigation-button">
                  price &gt;&gt;
                </button>
              </div>
              <div class="back-side center">
                <button class="navigation-button">
                  &lt;&lt; back
                </button>
                <h3 class="tour-price">$599</h3>
                <button class="card-button">Booking</button>
              </div>
            </div>
          </div>
        </section>
        <!-- End of Popular tours -->

        <!-- Section 3 -->
        <section class="section-3">
          <h1 class="section-heading">Gallery</h1>
          <div class="gallery">
              <a href="#" class="gallery-link" title="Order Now">
                  <img src="/images/forest.jpg" class="food-img" />
                  <h3 class="food-name">Australia</h3>
                  <p class="food-description">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa
                      commodi possimus iure hic excepturi. Corporis!
                  </p>
              </a>
              <a href="#" class="gallery-link" title="Order Now">
                <img src="/images/forest.jpg" class="food-img" />
                <h3 class="food-name">Australia</h3>
                <p class="food-description">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa
                    commodi possimus iure hic excepturi. Corporis!
                </p>
              </a> 
              <a href="#" class="gallery-link" title="Order Now">
                <img src="/images/forest.jpg" class="food-img" />
                <h3 class="food-name">Australia</h3>
                <p class="food-description">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa
                    commodi possimus iure hic excepturi. Corporis!
                </p>
              </a>
            <a href="#" class="gallery-link" title="Order Now">
              <img src="/images/forest.jpg" class="food-img" />
              <h3 class="food-name">Australia</h3>
              <p class="food-description">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa
                  commodi possimus iure hic excepturi. Corporis!
              </p>
            </a> 
              <a href="#" class="gallery-link" title="Order Now">
                  <img src="/images/gallery-img-2.jpg" class="food-img" />
                  <h3 class="food-name">Canada</h3>
                  <p class="food-description">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa
                      commodi possimus iure hic excepturi. Corporis!
                  </p>
              </a>
              <a href="#" class="gallery-link" title="Order Now">
                  <img src="/images/gallery-img-3.jpg" class="food-img" />
                  <h3 class="food-name">DUBAI</h3>
                  <p class="food-description">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa
                      commodi possimus iure hic excepturi. Corporis!
                  </p>
              </a>
              <a href="#" class="gallery-link" title="Order Now">
                  <img src="/images/gallery-img-4.jpg" class="food-img" />
                  <h3 class="food-name">India</h3>
                  <p class="food-description">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa
                      commodi possimus iure hic excepturi. Corporis!
                  </p>
              </a>
              <a href="#" class="gallery-link" title="Order Now">
                  <img src="/images/gallery-img-5.jpg" class="food-img" />
                  <h3 class="food-name">Paris</h3>
                  <p class="food-description">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa
                      commodi possimus iure hic excepturi. Corporis!
                  </p>
              </a>
              <a href="#" class="gallery-link" title="Order Now">
                  <img src="/images/gallery-img-6.jpg" class="food-img" />
                  <h3 class="food-name">Singapore</h3>
                  <p class="food-description">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa
                      commodi possimus iure hic excepturi. Corporis!
                  </p>
              </a>
          </div>
      </section>
      <!-- End of Section 3 -->
  
        <!-- Stories -->
        <section class="stories">
          <div class="video-container">
            <video class="bg-video" autoplay muted loop>
              <source src="images/video.mp4" type="video/mp4" />
            </video>
          </div>
          <div class="stories-wrapper">
            <div class="story-bg">
              <div class="story">
                <img
                  src="images/story-img-1.jpg"
                  alt="Customer image"
                  class="story-image"
                />
                <div class="story-text">
                  <h1 class="story-heading">
                    These were the best days of this year
                  </h1>
                  <p class="story-paragraph">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Architecto quas, repudiandae veritatis nam mollitia cumque
                    distinctio, quia aperiam aliquid at consequuntur libero
                    quisquam facilis laborum inventore repellat perspiciatis vel
                    fugiat molestias recusandae eum necessitatibus quo possimus
                    aspernatur? Nobis, architecto eaque.
                  </p>
                </div>
              </div>
            </div>
            <div class="story-bg">
              <div class="story">
                <img
                  src="images/story-img-2.jpg"
                  alt="Customer image"
                  class="story-image"
                />
                <div class="story-text">
                  <h1 class="story-heading">
                    I enjoyed this great tour
                  </h1>
                  <p class="story-paragraph">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Architecto quas, repudiandae veritatis nam mollitia cumque
                    distinctio, quia aperiam aliquid at consequuntur libero
                    quisquam facilis laborum inventore repellat perspiciatis vel
                    fugiat molestias recusandae eum necessitatibus quo possimus
                    aspernatur? Nobis, architecto eaque.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- End of Stories -->
  
        <!-- Contact -->
        <section class="contact" id="contact us">
          <h1 class="contact-heading">Contact Us</h1>
          <form class="contact-form center">
            <div class="input-group">
              <label>Full Name *</label>
              <input
                type="text"
                class="contact-input"
                placeholder="Enter Your Name"
              />
            </div>
            <div class="input-groups">
              <div class="input-group">
                <label>Email *</label>
                <input
                  type="email"
                  class="contact-input"
                  placeholder="Enter Your Email"
                />
              </div>
              <div class="input-group">
                <label>Phone</label>
                <input
                  type="text"
                  class="contact-input"
                  placeholder="Enter Phone Number"
                />
              </div>
            </div>
            <div class="input-group">
              <label>Message</label>
              <textarea
                class="form-textarea"
                placeholder="Your Message Here..."
              ></textarea>
            </div>
            <input type="submit" value="Submit" class="form-btn" />
          </form>
        </section>
        <!-- End of Contact -->
  
        <!-- Footer -->
        <footer class="footer">
          <div class="footer-list">
            <a href="#" class="footer-link">Home</a>
            <a href="#" class="footer-link">Tours</a>
            <a href="aboutus/aboutus.html" class="footer-link">About Us</a>
            <a href="#" class="footer-link">Offer</a>
          </div>
          <p class="footer-paragraph">
            Copyright &copy; GROUP 5 All Rights Reserved
          </p>
        </footer>
        <!-- End of Footer -->
      </div>
      <script src="script.js"></script>
      
    
</body>
</html>