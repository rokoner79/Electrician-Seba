
                  <?php     
				session_start();
				include 'connection.php';
				include 'navbar.php';
				?>

  <?php     
				
				include 'connection.php';
                $select2 = "SELECT * from information";
                $data = mysqli_query($conn,$select2);
                while ($row = mysqli_fetch_array($data)) {
                
                
                ?>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="shop-cat-box">
                        <br>
                           <span><b>Name:<?php echo $row['username']; ?></b></span><br>
                           <span><b>Email:<?php echo $row['email']; ?></b></span><br>
                           <span><b>Contact:<?php echo $row['contact']; ?></b></span><br>
                           <span><b>Thana:<?php echo $row['thana']; ?></b></span>

						   
                    </div>
                </div>
                <?php
                }
				
				
                ?>
				
				<?php
include'footer.php'; 
?>