<?php
    $query = "SELECT all entries from tblsubjects
    LEFT JOIN tblsyllabus
    ON tblsyllabus.subject_id = tblsubjects.subjectid";
    $result = mysqli_query($dbc,$query);
?>