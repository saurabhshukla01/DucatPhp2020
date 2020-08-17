<?php include('header.php'); ?>
<?php
   $blog_uid=$_GET['blog_uid'];
   ?>
<!-- bradcam_area  -->
<div class="bradcam_area bradcam_bg_4">
   <div class="container">
      <div class="row">
         <div class="col-xl-12">
            <div class="bradcam_text text-center">
               <h3>Single Blog Post</h3>
               <p>Pixel perfect design with awesome contents</p>
            </div>
         </div>
      </div>
   </div>
</div>
<!--/ bradcam_area  -->
<!--================Blog Area =================-->
<section class="blog_area single-post-area section-padding">
   <div class="container">
      <div class="row">
         <div class="col-lg-8 posts-list">
            <?php 
               $sql = "SELECT * FROM blogs where blog_uid='$blog_uid'";
               if($result = mysqli_query($link, $sql)){
                  while($row=mysqli_fetch_assoc($result)){
               ?>
            <div class="single-post">
               <div class="feature-img">
                  <img class="img-fluid" src="admin/travelo/blog/<?php echo $row['blog_image'];?>" alt="" style="width:720px;height:400px;">
               </div>
               <div class="blog_details">
                  <h2><?php echo $row['blog_title'];?>
                  </h2>
                  <ul class="blog-info-link mt-3 mb-4">
                     <li><a href="#"><i class="fa fa-user"></i>Category&nbsp;&nbsp;<span class="text-primary font-weight-bold"><?php echo $row['category_name'];?></span></a></li>
                     <li><a href="#"><i class="fa fa-comments"></i> 03 Comments</a></li>
                  </ul>
                  <p class="excert">
                     <?php echo $row['blog_desc'];?>
                  </p>
                  <div class="quote-wrapper">
                     <div class="quotes">
                        <h3 class="text-danger text-center"><?php echo $row['blog_title'];?></h3>
                        All Blog Post Data with Title Must be Required These updates come as part of the Business Application Platform and PowerApps announcements made today.
                     </div>
                  </div>
               </div>
            </div>
            <?php
               }
               }
               ?>
            <div class="navigation-top">
               <div class="d-sm-flex justify-content-between text-center">
                  <p class="like-info"><span class="align-middle"><i class="fa fa-heart"></i></span> Saurabh Shukla and 4
                     people like this Blog Post data
                  </p>
                  <div class="col-sm-4 text-center my-2 my-sm-0">
                     <p class="comment-count"><span class="align-middle"><i class="fa fa-comment"></i></span> 05 Comments</p>
                  </div>
                  <ul class="social-icons">
                     <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                     <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                     <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                     <li><a href="#"><i class="fa fa-behance"></i></a></li>
                  </ul>
               </div>
               <div class="navigation-area">
                  <?php 
                     $sql = "SELECT * FROM blogs where blog_uid='$blog_uid'";
                     if($result = mysqli_query($link, $sql)){
                        while($row=mysqli_fetch_assoc($result)){
                           $blog_id=$row['blog_id'];
                           $blog_id_prev=$blog_id-1;
                           $blog_id_next=$blog_id+1;
                     ?>
                  <div class="row">
                     <?php 
                        $sql1 = "SELECT * FROM blogs where blog_id='$blog_id_prev'";
                        if($result = mysqli_query($link, $sql)){
                           while($row1=mysqli_fetch_assoc($result)){?>
                     <div class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                        <div class="thumb">
                           <a href="single-blog.php?category_name=<?php echo $row1['category_name'];?>&&blog_uid=<?php echo $row1['blog_uid'];?>">
                           <img class="img-fluid" src="admin/travelo/blog/<?php echo $row1['blog_image'];?>" alt="" style="width:120px;height:70px;">
                           </a>
                        </div>
                        <div class="arrow">
                           <a href="single-blog.php?category_name=<?php echo $row1['category_name'];?>&&blog_uid=<?php echo $row1['blog_uid'];?>">
                           <span class="lnr text-white ti-arrow-left"></span>
                           </a>
                        </div>
                        <div class="detials">
                           <p>Prev Post</p>
                           <a href="single-blog.php?category_name=<?php echo $row1['category_name'];?>&&blog_uid=<?php echo $row1['blog_uid'];?>">
                              <h5><?php echo $row1['blog_title'];?></h5>
                           </a>
                        </div>
                     </div>
                     <?php
                        }
                        }
                        ?>
                     <?php
                        $sql1 = "SELECT * FROM blogs where blog_id='$blog_id_next'";
                        if($result = mysqli_query($link, $sql1)){
                           while($row1=mysqli_fetch_assoc($result)){?>
                     <div class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                        <div class="detials">
                           <p>Next Post</p>
                           <a href="single-blog.php?category_name=<?php echo $row1['category_name'];?>&&blog_uid=<?php echo $row1['blog_uid'];?>">
                              <h5><?php echo $row1['blog_title'];?></h5>
                           </a>
                        </div>
                        <div class="arrow">
                           <a href="single-blog.php?category_name=<?php echo $row1['category_name'];?>&&blog_uid=<?php echo $row1['blog_uid'];?>">
                           <span class="lnr text-white ti-arrow-right"></span>
                           </a>
                        </div>
                        <div class="thumb">
                           <a href="single-blog.php?category_name=<?php echo $row1['category_name'];?>&&blog_uid=<?php echo $row1['blog_uid'];?>">
                           <img class="img-fluid" src="admin/travelo/blog/<?php echo $row1['blog_image'];?>" alt="" style="width:120px;height:70px;">
                           </a>
                        </div>
                     </div>
                     <?php 
                        }
                        }  
                        ?>
                  </div>
                  <?php
                     }
                     }
                     ?>
               </div>
            </div>
            <?php 
               $sql = "SELECT * FROM comments where blog_uid='$blog_uid'";
                  if($result = mysqli_query($link, $sql)){
                     while($row=mysqli_fetch_assoc($result)){
                        if($row['comment_email']=="saurabh@gmail.com"||$row['comment_email']=="admin@gmail.com"){?> 
            <div class="blog-author">
               <div class="media align-items-center">
                  <img src="img/blog/author.png" alt="">
                  <div class="media-body">
                     <a href="#">
                        <h4><?php echo $row['comment_name'];?>&nbsp;(<?php echo $row['comment_email'];?>)</h4>
                     </a>
                     <p><?php echo $row['comment_body'];?>
                     </p>
                  </div>
               </div>
            </div>
            <?php
               }
               }
               }
               ?>
            <div class="comments-area">
               <?php 
                  $sql = "SELECT count(comment_name) as count_comment FROM comments where blog_uid='$blog_uid'";
                     if($result = mysqli_query($link, $sql)){
                        while($row=mysqli_fetch_assoc($result)){
                           $count_comment=$row['count_comment'];
                           if($count_comment!=0){?>
               <h4><?php echo @($count_comment-1);?> Comments</h4>
               <?php 
                  }else{?>
               <h4>No Comments</h4>
               <?php 
                  }
                  }
                  }
                  ?>
               <?php 
                  $sql = "SELECT * FROM comments where blog_uid='$blog_uid'";
                     if($result = mysqli_query($link, $sql)){
                        while($row=mysqli_fetch_assoc($result)){
                           if($row['comment_email']!="saurabh@gmail.com" &&$row['comment_email']!="admin@gmail.com"){?> 
               <div class="comment-list">
                  <div class="single-comment justify-content-between d-flex">
                     <div class="user justify-content-between d-flex">
                        <div class="thumb">
                           <img src="img/comment/comment_1.png" alt="">
                        </div>
                        <div class="desc">
                           <p class="comment">
                              <?php echo $row['comment_body'];?>
                           </p>
                           <div class="d-flex justify-content-between">
                              <div class="d-flex align-items-center">
                                 <h5>
                                    <a href="#"><?php echo $row['comment_name'];?></a>
                                 </h5>
                                 <p class="date"><?php echo $row['created_at'];?></p>
                              </div>
                              <div class="reply-btn">
                                 <a href="#" class="btn-reply text-uppercase">reply</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <?php
                  }
                  }
                  }
                  ?>
            </div>
            <?php 
               // add Comments
               $errormsg ="";
               $comment_body=$comment_email=$comment_name=$comment_website="";
               
               extract($_POST);
               if(isset($comment_btn)){
               
                  $blog_uid=$_GET['blog_uid'];
                  $comment_uid=uniqid();
                  $comment_body=trim($comment_body);
                  $comment_name=trim($comment_name);
                  $comment_email=trim($comment_email);
                  $comment_website=trim($comment_website);
               
                  if(empty($comment_body)||empty($comment_name)||empty($comment_email)||empty($comment_website)||empty($comment_body)&&empty($comment_name)&&empty($comment_email)&&empty($comment_website)){
                     $errormsg .="All Fields Must be Required.";
                  }
                  else{
                     if(mysqli_query($link,"insert into comments(comment_uid,blog_uid,comment_body,comment_name,comment_email,comment_website) values('$comment_uid','$blog_uid','$comment_body','$comment_name','$comment_email','$comment_website')")){
                        $errormsg .="Your Comments Is successfully Post";
                     }else{
                        $errormsg .="Not Post Comments please Try again";
                     }
                  }
               
               }
               
               ?>
            <div class="comment-form">
               <h4>Leave a Reply</h4>
               <?php if(!empty($errormsg)){?>
               <label class="alert-danger mb-2 p-2"><?php echo $errormsg;?></label>
               <?php } ?>    
               <form class="form-contact comment_form" method="POST" id="commentForm">
                  <div class="row">
                     <div class="col-12">
                        <div class="form-group">
                           <textarea class="form-control w-100" name="comment_body" id="comment" cols="30" rows="9"
                              placeholder="Write Comment"></textarea>
                        </div>
                     </div>
                     <div class="col-sm-6">
                        <div class="form-group">
                           <input class="form-control" name="comment_name" id="name" type="text" placeholder="Name">
                        </div>
                     </div>
                     <div class="col-sm-6">
                        <div class="form-group">
                           <input class="form-control" name="comment_email" id="email" type="email" placeholder="Email">
                        </div>
                     </div>
                     <div class="col-12">
                        <div class="form-group">
                           <input class="form-control" name="comment_website" id="website" type="text" placeholder="Website">
                        </div>
                     </div>
                  </div>
                  <div class="form-group">
                     <button type="submit" name="comment_btn" class="button button-contactForm btn_1 boxed-btn">Send Message</button>
                  </div>
               </form>
            </div>
         </div>
         <div class="col-lg-4">
            <div class="blog_right_sidebar">
               <aside class="single_sidebar_widget search_widget">
                  <form action="#">
                     <div class="form-group">
                        <div class="input-group mb-3">
                           <input type="text" class="form-control" placeholder='Search Keyword'
                              onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Keyword'">
                           <div class="input-group-append">
                              <button class="btn" type="button"><i class="ti-search"></i></button>
                           </div>
                        </div>
                     </div>
                     <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                        type="submit">Search</button>
                  </form>
               </aside>
               <aside class="single_sidebar_widget post_category_widget">
                  <h4 class="widget_title">Category</h4>
                  <ul class="list cat-list">
                     <?php 
                        $sql = "SELECT * FROM categories order by updated_at desc";
                        if($result = mysqli_query($link, $sql)){
                           while($row=mysqli_fetch_assoc($result)){
                              $category_name=$row['category_name'];
                        ?>
                     <li>
                        <a href="category-blog.php?category_name=<?php echo $row['category_name'];?>" class="d-flex">
                           <p><?php echo $row['category_name'];?></p>
                           <?php 
                              $sql1 = "SELECT count(blog_title) as blog_count FROM blogs Where category_name='$category_name'";
                              if($result1 = mysqli_query($link, $sql1)){
                                 while($row_count=mysqli_fetch_assoc($result1)){?>
                           <p>&nbsp;&nbsp;(<?php echo $row_count['blog_count'];?>)</p>
                           <?php
                              }
                              }
                              ?>
                        </a>
                     </li>
                     <?php
                        }
                        }
                        ?>
                  </ul>
               </aside>
               <aside class="single_sidebar_widget popular_post_widget">
                  <h3 class="widget_title">Recent Post</h3>
                  <?php 
                     $sql = "SELECT * FROM blogs order by updated_at desc Limit 4";
                     if($result = mysqli_query($link, $sql)){
                        while($row=mysqli_fetch_assoc($result)){
                     ?>
                  <div class="media post_item">
                     <img src="admin/travelo/blog/<?php echo $row['blog_image'];?>" alt="post" style="width:100px;height:80px;">
                     <div class="media-body">
                        <a href="single-blog.php?blog_uid=<?php echo $row['blog_uid'];?>">
                           <h3><?php echo $row['blog_title'];?></h3>
                        </a>
                        <p><?php echo $row['blog_date'];?></p>
                     </div>
                  </div>
                  <?php
                     }
                     }
                     ?>
               </aside>
               <aside class="single_sidebar_widget tag_cloud_widget">
                  <h4 class="widget_title">Tag Clouds</h4>
                  <ul class="list">
                     <?php 
                        $sql = "SELECT * FROM categories order by updated_at desc";
                        if($result = mysqli_query($link, $sql)){
                           while($row=mysqli_fetch_assoc($result)){
                        ?>
                     <li>
                        <a href="category-blog.php?category_name=<?php echo $row['category_name'];?>"><?php echo $row['category_name'];?></a>
                     </li>
                     <?php
                        }
                        }
                        ?>
                  </ul>
               </aside>
               <aside class="single_sidebar_widget instagram_feeds">
                  <h4 class="widget_title">Instagram Feeds</h4>
                  <ul class="instagram_row flex-wrap">
                     <?php 
                        $sql = "SELECT * FROM blogs order by updated_at desc Limit 6";
                        if($result = mysqli_query($link, $sql)){
                           while($row=mysqli_fetch_assoc($result)){
                        ?>
                     <li>
                        <a href="single-blog.php?blog_uid=<?php echo $row['blog_uid'];?>">
                        <img class="img-fluid" src="admin/travelo/blog/<?php echo $row['blog_image'];?>" alt="post" style="width:100px;height:80px;">
                        </a>
                     </li>
                     <?php 
                        }
                        }
                        ?>
                  </ul>
               </aside>
               <aside class="single_sidebar_widget newsletter_widget">
                  <h4 class="widget_title">Newsletter</h4>
                  <form action="#">
                     <div class="form-group">
                        <input type="email" class="form-control" onfocus="this.placeholder = ''"
                           onblur="this.placeholder = 'Enter email'" placeholder='Enter email' required>
                     </div>
                     <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                        type="submit">Subscribe</button>
                  </form>
               </aside>
            </div>
         </div>
      </div>
   </div>
</section>
<!--================ Blog Area end =================-->
<?php include('footer.php'); ?>