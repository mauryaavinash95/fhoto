<?php
include "header.php";
$userid = $_SESSION['userid'];
$sql_posts = "SELECT * FROM posts WHERE userid='".$userid."'";
$res_posts = mysqli_query($connect, $sql_posts);

// TODO:
// This page uses the same code as dashboard/index.php.
// Your task eliminate these redundant codes. How would you go about doing it?
// Hint: Copy the below code in a file called table.php and include that file here.

echo "
<center>
<div class='table-responsive' style='width: 90%'>
    <table class='table table-bordered'>
        <tr>
            <th width='7%'>POST ID</th>
            <th width='40%'>IMAGE</th>
            <th width='10%'>TIMESTAMP</th>
            <th width='25%'>TEXT</th>
        </tr>
";
while($row_posts = mysqli_fetch_array($res_posts))
{
    echo '<tr>';
        echo "<td><center>";
            echo $row_posts['postid'];
        echo "</center></td>";
        echo "<td>";
            echo "<img style='height: 100px' src='../uploads/".$row_posts['image']."' alt='".$row_posts['image']."''/>";
        echo "</td>";
        echo "<td>";
            echo '<div id="timestamp">';
                echo $row_posts['timestamp'];
            echo '</div>';
        echo "</td>";
        echo "<td>";
            echo $row_posts['text'];
        echo "</td>";
    echo '</tr>';
}
echo " 
</table>
</div>
</center>";
?>

<script>
// TODO
// Can you implement this similar functionality on Home Page (dashboard/index.php)
// Function to convert PHP rendered timestamp in moment().fromNow();
let timestamp = document.getElementById('timestamp').innerHTML;
document.getElementById('timestamp').innerHTML = moment(timestamp).fromNow();

// TODO ADVANCED
// Can you make the above code non-redundant in index.php & my_posts.php files??

</script>