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

//*****    Repeat the above query for Friday (44) - Compare the Kalkin building for Wednesday and Friday. How would you verify the results and explain why? *****//
    $query = 'SELECT fldBuilding, SUM(fldNumStudents) AS totalSudents, fldDays FROM tblSections WHERE fldDays LIKE "%F%" GROUP BY fldBuilding ORDER BY fldBuilding';
//    $results = $thisDatabaseReader->testQuery($query, "", 1, 1, 2, 0, false, false);
    $results = $thisDatabaseReader->select($query, "", 1, 1, 2, 0, false, false);

    print '<h1>SELECT fldBuilding, SUM(fldNumStudents) AS totalSudents, fldDays FROM tblSections WHERE fldDays LIKE "%F%" GROUP BY fldBuilding ORDER BY fldBuilding; (Left Table)<h1>';
    print '<h1>SELECT fldBuilding, SUM(fldNumStudents) AS totalStudents , fldDays FROM tblSections WHERE fldDays LIKE "%W%" GROUP BY fldBuilding ORDER BY fldBuilding; (Right Table</h1>';
    print '<table class = "friday">';
    foreach ($results as $rec) {
        
        print '<tr class="">';
        for ($i = 0; $i < $columns; $i++) {
            print '<td>' . $rec[$i] . '</td>';
        }
        print '</tr>';
    }

    // all done
    print '</table>';
    print '</article>';
    
    
    $query = 'SELECT fldBuilding, SUM(fldNumStudents) AS totalStudents , fldDays FROM tblSections WHERE fldDays LIKE "%W%" GROUP BY fldBuilding ORDER BY fldBuilding';
//    $results = $thisDatabaseReader->testQuery($query, "", 1, 1, 2, 0, false, false);
    $results = $thisDatabaseReader->select($query, "", 1, 1, 2, 0, false, false);

    print '<table class = "friday">';
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

    print '<p>I decided to do this problem by creating both tables side by side and ordering by building so that it was easier to see how many students their were in each building depending on the day.  What i did not accout for was that on Fridays there were different buildings that had students in them so the rows got a little horsed up.</p>';
include "footer.php";
?>