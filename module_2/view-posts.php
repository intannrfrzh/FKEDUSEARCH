<html>
    
    <head>
        <title>Post module</title>
        <?php include('container/links.php'); ?>
    </head>
    <body>
    <div class="wrapper">
        <!-- Sidebar  -->
        <?php include("container/navbar.php"); ?>

        <!-- Page Content  -->
        <div id="content">
            <div class="row">
                <div class="col-md-6">
                    <a href="add-post.php" class="btn btn-primary"><i class='fa fa-plus'></i> Add Post</a>
                </div>
                <div class="col-md-3"></div>
                <div class="col-md-3">
                </div>
            </div>
            <div class="row w-100 mt-2" style="margin-left:0px;">   
                <div class="col-md-12 block-center" style="padding-left:0px;padding-right:0px;">
                   <div class="table-responsive" id="results">
                        <table class='table table-striped  bg-white'>
                            <tr class='bg'>
                                <th>No</th>
                                <th>Post Topic</th>
                                <th>Post Description</th>
                                <th>Action</th>
                                <th>Category</th>
                                <th>Status</th>
                            </tr>
                            <?php 
                            $Q="Select * from posts order by id desc";
                            $re=mysqli_query($conn,$Q);
                            $i=1;
                            while($posts=mysqli_fetch_assoc($re)){
                                ?>
                                    <tr>
                                        <td><?php echo $i; ?></td>
                                        <td><?php echo $posts['topic'] ?></td>
                                        <td>
                                            <textarea class="form-control" disabled cols="30" rows="1"><?php echo $posts['description'] ?></textarea>
                                        </td>
                                        <td>
                                           <a href="add-post.php?id=<?php echo $posts['id']; ?>"> <i class="fa fa-pencil bg-warning text-white p-2"></i></a>
                                            <a href='delete.php?id=<?php echo $posts['id']; ?>'><i class="fa fa-trash bg-danger text-white p-2"></i></a>
                                            <a href="forum.php?id=<?php echo $posts['id']; ?>"><i class="fa fa-plus bg-primary text-white p-2"></i></a>
                                            <form action="like.php" method="POST">
                                            <input type="hidden" name="post_id" value="1"> <!-- Replace 1 with the actual post ID -->
                                            <button type="submit" name="like">Like</button>
                                            </form>

                                        </td>
                                        <td>
                                        <select name="myList">
                                            <option style="color:#888888;" >Select a Category</option>
                                            <option value="option2">Neetwork Engineering</option>
                                            <option value="option3">Software Engineering</option>
                                            <option value="option4">Cybersecurity</option>
                                            <option value="option4">Multimedia</option>
                                        </select>
                                            
  

                                        </td>
                                        <td><button style="background-color: green;">Compeleted</button></td>
                                    </tr>

                                <?php
                                $i++;
                            }
                            ?>

                        
                        </table>
                   </div>

                </div>
                
            </div>
        </div>
    </div>
<script>
    $(document).ready(function(){
        $('#search').on('keyup',function(e){
            e.preventDefault();
            var val=$(this).val();
            console.log(val);
            $.ajax({
                url: "search.php",
                data: { searchTerm: val},
                success: function(response) {
                    // Update the results div with the returned HTML string.
                    $("#results").html(response);
                    console.log(response);
                }
            });
        });
    });
</script>


    </body>
</html>