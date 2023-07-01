<html>
    <head>
        <title>Post module</title>
        <?php include('../../asset/container/links.php'); ?>
    </head>
    <body>
    <div class="wrapper">
        <!-- Sidebar  -->
        <?php include("../../asset/container/navbar.php"); ?>

        <!-- Page Content  -->
        <div id="content"  style="display:flex;align-items:center;">
            <div class="row w-100">
              
                <div class="col-md-6 block-center shadow">
                <?php
                if(isset($_GET['status']) && $_GET['status']=='true'){
                    ?>
                        <div class="alert alert-success">Post successfully added!</div>
                    <?php
                }
                ?>
                    <div class="row" style="border:1px solid #1ECFB5;">
                        <form action="" method='post'>
                            <div class="col-md-12 bg pt-2 pb-2">
                                <?php
                                if(isset($_GET['id'])){
                                    $Q="SELECT * FROM posts where id='".$_GET['id']."'";
                                    $re=mysqli_query($connect,$Q);
                                    $post=mysqli_fetch_assoc($re);
                                    ?>
                                        <h1 class='text-center'>Update Post</h1>
                                    <?php
                                }else{
                                    ?>
                                        <h1 class='text-center'>Create New Post</h1>
                                    <?php
                                }
                                ?>
                                
                            </div>
                            <div class="col-md-12 mt-2">
                                <input type="text" name="topic"  required value="<?php if(isset($_GET['id'])){ echo $post['topic']; } ?>"  placeholder="post topic" id="topic" class="form-control">
                            </div>

                            <div class="col-md-12 mt-3">
                                    <textarea name="description"  required placeholder="Post Description" class="form-control" id="" cols="30" rows="5"><?php if(isset($_GET['id'])){ echo $post['description']; } ?></textarea>
                            </div>
                            <div class="col-md-12 mt-3">
                                <?php
                                if(isset($_GET['id'])){
                                    ?>
                                       <input type="submit" value="Update" name="update" class="form-control bg btn btn-primary" >        

                                    <?php
                                }else{
                                    ?>
                                    <input type="submit" value="Create" name="submit" class="form-control bg btn btn-primary" >        

                                 <?php

                                }
                                ?>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <?php 
    
    if(isset($_POST['submit'])){
       $topic=$_POST['topic'];
       $desc=$_POST['description'];

       date_default_timezone_set("Asia/Malaysia");

       $date=date('Y-m-d');
       $month=date('M');

       $Q="INSERT INTO `posts`(`topic`, `description`, `date`, `month`, `ex1`, `ex2`, `ex3`)
        VALUES ('$topic','$desc','$date','$month','-','-','-')";
        if(mysqli_query($connect,$Q)){
            echo "<script>window.location='add-post.php?status=true';</script>";
        }

    }
    ?>

    <?php 
    
    if(isset($_POST['update'])){
       $topic=$_POST['topic'];
       $desc=$_POST['description'];

       date_default_timezone_set("Asia/Malaysia");

       $date=date('Y-m-d');
       $month=date('M');

       $Q="UPDATE `posts` SET `topic`='$topic',`description`='$desc' WHERE `id`='".$_GET['id']."'";
        if(mysqli_query($conn,$Q)){
            echo "<script>window.location='view-posts.php?status=true';</script>";
        }

    }
    ?>
    </body>
</html>