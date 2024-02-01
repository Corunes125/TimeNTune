 <!-- ======= Footer ======= -->
 <footer id="footer" class="footer">

   <div class="container footer-top">
     <div class="row gy-4">
       <div class="col-lg-5 col-md-12 footer-about">
         <a href="index.php" class="logo d-flex align-items-center">
           <span>TimeNTune</span>
         </a>
         <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta
           donna mare fermentum iaculis eu non diam phasellus.</p>
         <div class="social-links d-flex mt-4">
           <a href="https://twitter.com/"><i class="bi bi-twitter"></i></a>
           <a href="https://www.facebook.com/"><i class="bi bi-facebook"></i></a>
           <a href="https://www.instagram.com/corunes_bhatti_/"><i class="bi bi-instagram"></i></a>
           <a href="https://www.linkedin.com/in/corunes-bhatti-0a817b275/"><i class="bi bi-linkedin"></i></a>
         </div>
       </div>

       <!--usefull links  -->
       <div class="col-lg-2 col-6 footer-links">
         <h4>Useful Links</h4>
         <ul>
           <li><a href="index.php">Home</a></li>
           <li><a href="index.php#about">About us</a></li>
           <li><a href="index.php#services">Services</a></li>
           <li><a href="index.php#team">Team</a></li>
           <li><a href="index.php#portfolio">Gallary</a></li>
           <li><a href="index.php#contact">Contact</a></li>
           <li><a href="index.php#faq">FAQ</a></li>
         </ul>
       </div>
       <!--  -->

       <!-- our-services -->
       <div class="col-lg-2 col-6 footer-links">
         <h4>Our Services</h4>
         <ul>
           <!-- php script start -->
           <!-- engine-swap section start -->
           <?php
            // Include your database configuration file
            include("../dashboard/auth/config.php");

            // Assuming your table name is 'services'
            $query = "SELECT * FROM service_categories WHERE id = 1";
            $result = mysqli_query($con, $query);


            if (!$result) {
              die("Query failed: " . mysqli_error($con));
            }

            if ($result) {
              while ($row = mysqli_fetch_assoc($result)) {

                echo   '<li><a href="engine-swapp.php?engineswapp=' . $row['service_name'] . '">Engine Swap</a></li>';
              }
            }
            ?>
           <!-- engine-swap section start -->

           <!-- tune section start -->
           <?php
            $query = "SELECT * FROM service_categories WHERE id = 2";
            $result = mysqli_query($con, $query);

            if (!$result) {
              die("Query failed: " . mysqli_error($con));
            }

            if ($result) {
              while ($row = mysqli_fetch_assoc($result)) {

                echo   '<li><a href="tune.php?tune=' . $row['service_name'] . '">Tune</a></li>';
              }
            }
            ?>
           <!-- tune section end -->

           <!-- detailing section start -->
           <?php
            $query = "SELECT * FROM service_categories WHERE id = 3";
            $result = mysqli_query($con, $query);

            if (!$result) {
              die("Query failed: " . mysqli_error($con));
            }

            if ($result) {
              while ($row = mysqli_fetch_assoc($result)) {

                echo   '<li><a href="detailing.php?detailing=' . $row['service_name'] . '">Detailing</a></li>';
              }
            }
            ?>
           <!-- detailing section end -->

           <!-- php script End -->

       </div>
       <!--  -->

       <!-- contact-us -->
       <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
         <h4>Contact Us</h4>
         <p>A108 Adam Street</p>
         <p>New York, NY 535022</p>
         <p>United States</p>
         <p class="mt-4"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
         <p><strong>Email:</strong> <span>info@example.com</span></p>
       </div>
       <!--  -->

     </div>
   </div>

   <div class="container copyright text-center mt-4">
     <p>&copy; <span>Copyright</span> <strong class="px-1">TimeNTune</strong> <span>All Rights Reserved</span></p>
     <div class="credits">
       Designed by <a href="https://www.linkedin.com/in/corunes-bhatti-0a817b275/">Corunes Bhatti</a>
     </div>
   </div>
   <!--  -->
 </footer>
 <!-- End Footer -->

 <!-- Scroll Top Button -->
 <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

 <!-- Preloader -->
 <div id="preloader">
   <div></div>
   <div></div>
   <div></div>
   <div></div>
 </div>

 <!-- Vendor JS Files -->
 <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
 <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
 <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
 <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
 <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
 <script src="assets/vendor/aos/aos.js"></script>
 <script src="assets/vendor/php-email-form/validate.js"></script>

 <!-- Template Main JS File -->
 <script src="assets/js/main.js"></script>

 </body>

 </html>