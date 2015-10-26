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

//*****    Display each building name and the number of sections it has (59) *****//
    $query = 'SELECT fldBuilding, COUNT(fldSection) FROM tblSections GROUP BY fldBuilding';
//    $results = $thisDatabaseReader->testQuery($query, "", 0, 0, 0, 0, false, false);
    $results = $thisDatabaseReader->select($query, "", 0, 0, 0, 0, false, false);

    print '<h1>SELECT fldBuilding, COUNT(fldSection) FROM tblSections GROUP BY fldBuilding;<h1>';
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