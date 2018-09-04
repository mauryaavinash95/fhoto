<?php
include 'header.php';
?>

<form method="post" action="insert_new_post.php" enctype="multipart/form-data">
    <center>
        <div class="table-responsive">
            <table class="table">
                <tr>
                    <td><center>Upload Post Image</center></td>
                    <td><center><input type="file" name="fileToUpload"></center> </td>
                </tr>
                <tr>
                    <td colspan="2"><center><input type="text" style="width:75%" maxlength="200" name="post_text" required placeholder="Start entering your post/description here"/></center> </td>
                </tr>
                <tr>
                    <td colspan="2"><center><input type="submit" name="new_post_submit"/></center></td>
                </tr>
            </table>
        </div>
    </center>
</form>