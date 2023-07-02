<html>
    <head>
        <title>Post module</title>
        <?php include('../../asset/container/links.php'); ?>
        
    </head>
    <body>
    <div class="wrapper">
        <!-- Sidebar  -->
        <?php include("../../asset/container/navbar.php"); 
        $Q="SELECT * from posts where id='".$_GET['id']."'";
        $run=mysqli_query($connect,$Q);
        $post=mysqli_fetch_assoc($run);
        ?>

        <!-- Page Content  -->
        
<main >

<div id="content">
    <form action="" method='post'>
        <div class="row bg p-3 mb-4">
            <div class="col-md-12">
                <h5 class="text-white"><b>TOPIC: </b><?php echo $post['topic']; ?></h5>
            </div>
        </div>
        <div id="post">
            <div id="user-img">
            <i class="fa fa-user" style="font-size: 40px;"></i>
            </div>
        
                <div id="placeholder1"><input type="text" name="coment" required id="" placeholder="discussion..." class="form-control"></div>
                <div id="placeholder2"><button type="submit" name="submit" class="btn btn-primary form-control"><i class="fa fa-send"></i></button></div>
        

        </div>
  </form>

  <?php
  //join tables (camments with post tables)
    $query="
    SELECT *
    FROM posts
    INNER JOIN comments
    ON posts.id = comments.topic_id  order by comments.id desc

    ";
    $ress=mysqli_query($connect,$query);
    while($coments=mysqli_fetch_assoc($ress)){

        ?>
          <article>
            <h2><?php echo $coments['name']; ?></h2>
            <p><?php echo $coments['comment']; ?></p>
        </article>

        <?php

    }
  ?>

</div>
</main>
    </div>
    <?php 
    
    if(isset($_POST['submit'])){
       $name="user";
       $coment= html_entity_decode($_POST['coment']);
       
        $id=$post['id'];
       date_default_timezone_set("Asia/Malaysia");

       $date=date('Y-m-d');
       $month=date('M');

       $Q="INSERT INTO `comments`(`topic_id`, `name`, `comment`, `date`, `month`, `ex1`)
        VALUES ('$id','$name','$coment','$date','$month','0')";
        if(mysqli_query($connect,$Q)){
            echo "<script>window.location='forum.php?id=".$id."';</script>";

        }

    }
    ?>


    </body>
</html>