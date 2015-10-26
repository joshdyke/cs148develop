<?php

//##############################################################################
//
// This page lists your tables and fields within your database. if you click on
// a database name it will show you all the records for that table. 
// 
// 
// This file is only for class purposes and should never be publicly live
//##############################################################################
include "top.php";
$columns = 1;
    //now print out each record

//*****    Display just the department for courses named "Introduction" (12) *****//
    $query = 'SELECT fldDepartment, fldCourseName FROM tblCourses WHERE fldCourseName LIKE "Introduction%"';
//    $results = $thisDatabaseReader->testQuery($query, "", 1, 0, 2, 0, false, false);
    $results = $thisDatabaseReader->select($query, "", 1, 0, 2, 0, false, false);

    print '<h1>SELECT fldDepartment, fldCourseName FROM tblCourses WHERE fldCourseName LIKE "Introduction%";<h1>';
    print '<table>';
    foreach ($results as $rec) {
        
        print '<tr class="">';
        for ($i = 0; $i < $columns; $i++) {
            print '<td>' . $rec[$i] . '</td>';
        }
        print '</tr>';
    }

    // all done
    print '</table>';
    print '</aside>';

print '</article>';
include "footer.php";
?>