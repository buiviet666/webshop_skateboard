<?php
    $id_blog = $_GET['id'];

    require 'customer/connect.php';

    $sql_id_blog = "select * from blog where id_blog = '$id_blog'";
    $result_id_blog = mysqli_query($connect, $sql_id_blog);
    $each = mysqli_fetch_array($result_id_blog);

    $sql_blog = "select * from blog";
    $result_blog = mysqli_query($connect, $sql_blog);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/css/single.css">
    <link rel="stylesheet" href="src/css/nomalize.css">
    <link rel='stylesheet' type='text/css' href='src/css/style.css'/>
    <link rel="stylesheet" href="src/css/media.css">
    <title>Skateboard life</title>
    <link rel="shortcut icon" href="./src/img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/4.0.17/fullpage.css" integrity="sha512-hcCQQPp7EFTf6BXS6aGe9vk02E5YZzjaI4K1KsAUUjm6WvfvSPKFn4jJiYMiQ68NRl/I6SEl33gW+NVeqZI15g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100;200;300;400;500;600;700&family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</head>

<body>

    <div id = "main">
        <?php include "component_sidebar_left.php" ?>    

        <div class = "main_right_content">
            <div class = "right_content_position">
                <!-- main content -->
                <div class="part1">
                    <div class="img_b1">
                        <img src="src/save_img_from_db/<?php echo $each['img_blog']; ?>" class="imgblog1">
                        <div class="part2">
                            <div class="main_blog_headed">
                                <h3>
                                    <?php echo $each['name_blog']; ?>
                                </h3>
                            </div>
                            <div class="main_blog_content"><?php echo $each['date_blog']; ?></div>
                            <hr>
                            <div class="main_blog_content">
                                <?php echo $each['desc_blog']; ?>
                            </div>
                        </div>
                    </div>
                    <div class="recent">
                        <h2>RECENT ARTICLE</h2>
                        <div class="recent_content">
                            <?php foreach ($result_blog as $eachblogs) { ?>
                            <div class="contents">
                                <img src="src/save_img_from_db/<?php echo $eachblogs['img_blog']; ?>" class="smallimg">
                                <div class="recent_para"> 
                                    <div class="recent_title">
                                        <a href="single_blog.php?id=<?php echo $eachblogs['id_blog'] ?>">
                                            <?php echo $eachblogs['name_blog']; ?>
                                        </a>
                                    </div>
                                    <div class="small_content"><?php echo $eachblogs['date_blog']; ?></div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                        <div>
                            <a href="blog.php" style="color: #000;">trở lại blog</a>
                        </div>
                    </div>
                </div>

                <!-- footer content -->
                <?php include "component_footer.php" ?>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/4.0.17/fullpage.min.js" integrity="sha512-zAHJKGyoPf2Y20Wi4uo32sa/vSvwKfY4tYUt6gJfmkA79X0wt5ZfaxL5GqJ5cMnmvGslWi5PKTo51rHRZqYbJg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="src/javascript/index.js"></script>
</body>
</html> 