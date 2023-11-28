<!DOCTYPE html>
<html>
    <head>
        <title>Add Syllabus</title>
    </head>
    <body>
        <?php
        include_once("../dbConnection/mysqlconfig_connection.php");

        if(isset($_POST['submit'])) {
            $code = $_POST['code'];
            $author = $_POST['author'];
            $subject = $_POST['subject'];

            if(empty($code) || empty($author)) {
                if(empty($code)) {
                    echo "<font color = 'red'> Subject Code field is empty.</font><br/>";
                }
                    if(empty($author)) {
                    echo "<font color = 'red'> Syllabus Author field is empty.</font><br/>";
                }
                    echo "<br/><a href = 'javascript:self.history.back();'>Go Back</a>";
                }
                else {
                    $result = mysqli_query($dbc, "<<UPDATE SELECT QUERY>>");

                    echo "<font color = 'green'>Data added Successfully.";
                    echo "<br/><a href = '../index.php'>View Result</a>";
                }
            }
        ?>
    </body>
</html>