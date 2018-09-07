<?php
include "header.php";

// TODO
// Modify the query to show posts ordered by their upload time.
$sql_posts = "SELECT * FROM posts ORDER BY timestamp DESC";
$res_posts = mysqli_query($connect, $sql_posts);

// TODO ADVANCED:
// Insert a column to show username of the user who uploaded the post.
echo "
<center>
<div class='table-responsive' style='width: 90%'>

    <table class='table table-bordered'>
        <tr>
            <th width='7%'>POST ID</th>
            <th width='40%'>IMAGE</th>
            <th width='10%'>TIMESTAMP</th>
            <th width='25%'>DESCRIPTION</th>
        </tr>
";

while($row_posts = mysqli_fetch_array($res_posts))
{
    $postid = $row_posts['postid'];
    // TODO:
    // How should we access the below variables? ($image, $timestamp, $text)
    $image = $row_posts['image'];
    $timestamp = $row_posts['timestamp'];
    $text = $row_posts['text'];

    echo '<tr>';

        echo "<td>";
            echo "<center>";
                echo $postid;
            echo "</center>";
        echo "</td>";

        echo "<td>";
            echo "<img style='height: 100px' src='../uploads/".$image."' alt='".$image."''/>";
        echo "</td>";
        
        echo "<td>";
            echo $timestamp;
        echo "</td>";
        
        echo "<td>";
            echo $text;
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
// Can you implement this similar functionality on My Post Page (dashboard/my_posts.php)
// Function to convert PHP rendered timestamp in moment().fromNow();
let timestamp = document.getElementById('timestamp').innerHTML;
document.getElementById('timestamp').innerHTML = moment(timestamp).fromNow();

// TODO ADVANCED
// Can you make the above code non-redundant in index.php & my_posts.php files??

</script>