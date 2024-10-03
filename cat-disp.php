<br>
<section class="blog spad">
    <div class="container">
        <div class="row">
			<?php include_once("admin/includes/config.php"); 
                $qry = "select * from categories";
                $result=mysqli_query($con,$qry) or exit("Category Select Fail".mysqli_error($con));
                while($row=mysqli_fetch_array($result))
                {
            ?>
			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="blog__item">
					<div class="blog__item__pic set-bg" data-setbg="images/categories/<?php echo $row['image']; ?>"></div>
					<div class="blog__item__text bg-dark">
						<h5 class="text-white"><?php echo $row['catname']; ?></h5>
						<a href="shop.php?cat=<?php echo $row['id']; ?>" class="text-white">Explore More</a>
					</div>
				</div>
			</div>
			<?php
			    }
			?>
		</div>
	</div>
</section>