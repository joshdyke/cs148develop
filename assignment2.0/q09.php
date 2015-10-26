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
$columns = 2;
    //now print out each record

//*****    Display each building name and the number of students in it on Wednesday, sorted by the number of students descending (51) *****//
 
    $query = 'SELECT fldBuilding, SUM(fldNumStudents) AS totalStudents , fldDays FROM tblSections WHERE fldDays LIKE "%W%" GROUP BY fldBuilding ORDER BY totalStudents DESC';
//    $results = $thisDatabaseReader->testQuery($query, "", 1, 1, 2, 0, false, false);
    $results = $thisDatabaseReader->select($query, "", 1, 1, 2, 0, false, false);

    print '<h1>SELECT fldBuilding, SUM(fldNumStudents) AS totalStudents , fldDays FROM tblSections WHERE fldDays LIKE "%W%" GROUP BY fldBuilding ORDER BY totalStudents DESC;<h1>';
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