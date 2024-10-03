<head>
    <meta charset="UTF-8">
    <meta name="description" content="Male_Fashion Template">
    <meta name="keywords" content="Male_Fashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Male-Fashion | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap"
    rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<?php
                include_once("admin/includes/config.php");
                $settingqry = "select * from siteinfo";
                $settingresult=mysqli_query($con,$settingqry) or exit("Information Select Fail".mysqli_error($con));
                $settingrow=mysqli_fetch_array($settingresult);
        ?>

<header class="header">
        
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="header__logo">
                        <a href="./index.php">
                            <?php
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
                            ?>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <nav class="header__menu mobile-menu">
                        <ul>
                            <li class=""><a href="./index.php">Home</a></li>
                            <li><a href="./shop.php">Shop</a></li>
                            <li><a href="#">Category</a>
                                <ul class="dropdown">
                                <?php include_once("admin/includes/config.php"); 
                                        $qry = "select * from categories";
                                        $result=mysqli_query($con,$qry) or exit("Category Select Fail".mysqli_error($con));
                                        while($row=mysqli_fetch_array($result))
                                        {
                                    ?>
                                     <li><a href="shop.php?cat=<?php echo $row['id']; ?>"><?php echo $row['catname'] ?>
                                    </a></li>

                                     <?php
                                        }
                                    ?>
                                </ul>
                            </li>
                            <li><a href="./about.php">About Us</a></li>
                            <li><a href="./contact.php">Contacts</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="header__nav__option">
                        <!-- <a href="#" class="search-switch"><img src="img/icon/search.png" alt=""></a> -->
                        <a href="shopping-cart.php"><img src="img/icon/wishlist.png" alt="" width="23"></a>
                        <a href="shopping-cart.php"><img src="img/icon/shopping-cart-icon.jpg" alt="" width="30"> <span></span></a>
                        <a href="login.php"><img src="img/icon/user-128.png" alt="" srcset="" width="30"></a>
                        <!-- <div class="price">$0.00</div> -->
                    </div>
                </div>
            </div>
            <div class="canvas__open"><i class="fa fa-bars"></i></div>
        </div>
    </header>