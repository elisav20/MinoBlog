 <!-- .footer -->
 <footer class="footer">
     <div class="container">
         <div class="footer__info">
             <div class="row">
                 <div class="col-md-3">
                     <div class="footer__recent-posts">
                         <h4>Recent posts</h4>

                         <?php 
                            $recent_posts = get_recent_posts ();
                            foreach ($recent_posts as $recent_post):
                        ?>

                         <div class="footer__recent-post__info">
                             <a class="footer__recent-post__title" href="#"><?=$recent_post["title"]; ?></a>
                             <div class="footer__recent-post__date">
                                 <?=date("F j, Y",strtotime($recent_post["date"])); ?></div>
                         </div>

                         <?php endforeach; ?>
                     </div>
                 </div>

                 <div class="col-md-3">
                     <div class="footer__nav">
                         <h4>Pages</h4>

                         <a class="footer__nav-link" href="index.php">Home</a>
                         <a class="footer__nav-link" href="categories.php">Categories</a>
                         <a class="footer__nav-link" href="#">Store</a>
                         <a class="footer__nav-link" href="contact.php">Contacts</a>
                     </div>
                 </div>

                 <div class="col-md-3">
                     <div class="footer__categories">
                         <h4>Categories</h4>

                         <div class="footer__categories-content">
                             <?php 
                                $categories = get_categories ();
                                foreach ($categories as $category):
                            ?>
                             <a class="footer__categories-item rounded-pill" href="#"><?=$category["name"]; ?></a>
                             <?php endforeach; ?>
                         </div>
                     </div>
                 </div>

                 <div class="col-md-3">
                     <div class="footer__text">
                         <h4>Text widget</h4>
                         <p>We’re both adults. I can’t pretend I don’t know that person is you. I want there to be no
                             confusion. I
                             know I owe you my life. And more than that, I respect the strategy. No speeches. Short
                             speech.
                             You lost
                             your partner today. </p>
                     </div>
                 </div>

             </div>
             <!-- /.row -->
         </div>
         <!-- /.footer__info -->

         <div class="copyright">
             <p class="copyright__text">Designed by <span>Tonjoostudio</span></p>
         </div>
     </div>
     <!-- /.container -->
 </footer>
 <!-- .footer -->

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js">
 </script>
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js">
 </script>
 <script type="text/javascript"
     src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.11/js/mdb.min.js">
 </script>
 <script src="assets/js/main.min.js"></script>
 </body>

 </html>