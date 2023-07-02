<?php
include("../../db/database.php");

// Get the posts from the database that match the search term.
$sql = "SELECT * FROM posts WHERE topic LIKE '%" . $_GET['searchTerm'] . "%' order by id desc";
$results = $connect->query($sql);

if($results->num_rows > 0){
    // Loop through the posts and print them out in a table.
    echo '<table class="table table-striped  bg-white">';
    echo '<thead class="bg">';
    echo '<tr>';
    echo '<th>Title</th>';
    echo '<th>Author</th>';
    echo '<th>Date</th>';
    echo'<th>Action</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';
    $i=1;
    foreach ($results as $row) {
        echo "<tr>
                                            <td>".$i."</td>
                                            <td>".$row['topic']."</td>
                                            <td>
                                                <textarea class='form-control' disabled cols='30' rows='1'>".$row['description']."</textarea>
                                            </td>
                                            <td>
                                            <a href='add-post.php?id=".$row['id']."'> <i class='fa fa-pencil bg-warning text-white p-2'></i></a>
                                                <a href='delete.php?id=".$row['id']."'><i class='fa fa-trash bg-danger text-white p-2'></i></a>
                                                <a href='forum.php?id=".$row['id']."'><i class='fa fa-plus bg-primary text-white p-2'></i></a>
                                            </td>
                                        
                                        </tr>";
                                        $i++;
    }
    echo '</tbody>';
    echo '</table>';
}else{
    echo '<table class="table table-striped  bg-white">';
    echo '<thead class="bg">';
    echo '<tr>';
    echo '<th>Title</th>';
    echo '<th>Author</th>';
    echo '<th>Date</th>';
    echo'<th>Action</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';
    $i=1;
    echo '<tr><td colspan="4" class="text-center">No Record Found</td></tr>';
    echo '</tbody>';
    echo '</table>';
}

