<?php
                include_once("admin/includes/config.php");
                $settingqry = "select * from siteinfo";
                $settingresult=mysqli_query($con,$settingqry) or exit("Information Select Fail".mysqli_error($con));
                $settingrow=mysqli_fetch_array($settingresult);
        ?>

<footer class="footer" >
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__logo">
                            <a href="index.php"><?php
                                if(isset($settingrow['image']) && $settingrow['image']!=null)
                                {
                            ?>
                            <img src="images/siteinfo/<?php echo $settingrow['image']; ?>" alt=""></a>
                            <?php 
                                }else{
                            ?>
                            <h1><?php echo $settingrow['sitename']; ?></h1>
                            <?php
                                }
                            ?></a>
                        </div>
                        <p>The customer is at the heart of our unique business model, which includes design.</p>
                        <!-- <a href="#"><img src="img/payment.png" alt=""></a> -->
                    </div>
                </div>
                <div class="col-lg-2 offset-lg-2 col-md-3 col-sm-6">
                    <div class="footer__widget">
                        <h6>Shopping </h6>
                        <ul>
                        <?php include_once("admin/includes/config.php"); 
                                        $qry = "select * from categories";
                                        $result=mysqli_query($con,$qry) or exit("Category Select Fail".mysqli_error($con));
                                        while($row=mysqli_fetch_array($result))
                                        {
                                    ?>
                                     <li><a href="<?php echo $row['catname'];?>.php"><?php echo $row['catname'] ?>
                                    </a></li>

                                     <?php
                                        }
                                    ?>
                        </ul>
                    </div>
                </div>
                <!-- <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="footer__widget">
                        <h6>Shopping</h6>
                        <ul>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Payment Methods</a></li>
                            <li><a href="#">Delivary</a></li>
                            <li><a href="#">Return & Exchanges</a></li>
                        </ul>
                    </div>
                </div> -->
                <div class="col-lg-4 offset-lg-1 col-md-6 col-sm-6">
                    <div class="footer__widget">
                        <h6>: CONTACT :</h6>
                        <div class="footer__newslatter">
                            <p><?php echo $settingrow['address']; ?></p>
                            <p>+91 <?php echo $settingrow['phoneno']; ?></p>
                            <p><span class="icon_mail_alt"></span> <?php echo $settingrow['email'];?></p>
                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="footer__copyright__text">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        <!-- <p>Copyright ©
                            <script>
                                document.write(new Date().getFullYear());
                            </script>2020
                            All rights reserved | This template is made with <i class="fa fa-heart-o"
                            aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        </p> -->
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </div>
                </div>
            </div> -->
            <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 text-center">
                        <div class="header__top__left">
                            <p>Project Developed By : HIT BORSANIYA    ||    Guide By : BHAVESH CHAVADA</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </footer>