<?php
    $query = "SELECT all entries from tblsubjects LEFT JOIN tblsyllabus ON tblsyllabus.subject_ID = tblsubjects.subject_ID";
    $result = mysqli_query($dbc,$query);
?>