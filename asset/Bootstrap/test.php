<?php
// include '../Config/connect.php';

$sql = "SELECT * FROM incentive_list";
$result = mysqli_query($con, $sql);

if ($result) {
  while ($row = mysqli_fetch_assoc($result)) {
    $id = $row['list_ID'];
    $comname = $row['applicant_name'];
    $comdate = $row['submit_date'];
    $comtime = $row['ic_number'];
    echo '<tr>
            <th scope="row">' . $id . '</th>
            <td>' . $comname . '</td>
            <td>' . $comdate . '</td>
            <td>' . $comtime . '</td>
            <td> 
              <select style="width:120px;" class="form-select" aria-label="Default select example">
                <option selected>Choose</option>
                <option value="1">Approved</option>
                <option value="2">Rejected</option>
              </select>
            </td>
            <td>
              <button class="btn btn-primary"><a class="text-light" href="readView.php?id=' . $id . '">View</a></button>
              <button class="btn btn-primary"><a class="text-light" href="checkView.php?id=' . $id . '">Check</a></button>
              <button class="btn btn-danger"><a class="text-light" href="deleteView.php?deleteid=' . $id . '">Delete</a></button>
            </td>
          </tr>';
  }
}
?>
