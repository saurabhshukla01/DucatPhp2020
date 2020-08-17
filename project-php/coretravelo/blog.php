<?php include('header.php'); ?>
<!-- bradcam_area  -->
<div class="bradcam_area bradcam_bg_4">
   <div class="container">
      <div class="row">
         <div class="col-xl-12">
            <div class="bradcam_text text-center">
               <h3>Blog Post</h3>
               <p>Pixel perfect design with awesome contents</p>
            </div>
         </div>
      </div>
   </div>
</div>
<!--/ bradcam_area  -->
<!--================Blog Area =================-->
<section class="blog_area section-padding">
   <div class="container">
      <div class="row">
         <div class="col-lg-8 mb-5 mb-lg-0">
            <div class="blog_left_sidebar">
               <?php 
                  $sql = "SELECT * FROM blogs order by updated_at desc";
                  if($result = mysqli_query($link, $sql)){
                     while($row=mysqli_fetch_assoc($result)){
                  ?>
               <article class="blog_item">
                  <div class="blog_item_img">
                     <img class="card-img rounded-0" src="admin/travelo/blog/<?php echo $row['blog_image'];?>" alt="" style="width:720px;height:400px;">
                     <a href="single-blog.php?blog_uid=<?php echo $row['blog_uid'];?>" class="blog_item_date">
                        <p>Blog Post Date</p>
                        <p><?php echo $row['blog_date'];?></p>
                     </a>
                  </div>
                  <div class="blog_details">
                     <a class="d-inline-block" href="single-blog.php?blog_uid=<?php echo $row['blog_uid'];?>">
                        <h2><?php echo $row['blog_title'];?></h2>
                     </a>
                     <p><?php echo $row['blog_desc'];?>
                     </p>
                     <ul class="blog-info-link">
                        <li>
                           <a href="category-blog.php?category_name=<?php echo $row['category_name'];?>">
                           <i class="fa fa-user"></i>
                           Category  
                           <span class="text-primary font-weight-bold">
                           <?php echo $row['category_name'];?>
                           </span>
                           </a>
                        </li>
                        <li>
                           <a href="#">
                           <i class="fa fa-comments"></i> 
                           03 Comments
                           </a>
                        </li>
                     </ul>
                  </div>
               </article>
               <?php
                  }
                  
                  }
                  ?>
               <nav class="blog-pagination justify-content-center d-flex">
                  <ul class="pagination">
                     <li class="page-item">
                        <a href="#" class="page-link" aria-label="Previous">
                        <i class="ti-angle-left"></i>
                        </a>
                     </li>
                     <li class="page-item">
                        <a href="#" class="page-link">1</a>
                     </li>
                     <li class="page-item active">
                        <a href="#" class="page-link">2</a>
                     </li>
                     <li class="page-item">
                        <a href="#" class="page-link" aria-label="Next">
                        <i class="ti-angle-right"></i>
                        </a>
                     </li>
                  </ul>
               </nav>
            </div>
         </div>
         <div class="col-lg-4">
            <div class="blog_right_sidebar">
               <aside class="single_sidebar_widget search_widget">
                  <form action="#">
                     <div class="form-group">
                        <div class="input-group mb-3">
                           <input type="text" class="form-control" placeholder='Search Keyword'
                              onfocus="this.placeholder = ''"
                              onblur="this.placeholder = 'Search Keyword'">
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
<!--================Blog Area =================-->
<?php include('footer.php'); ?>