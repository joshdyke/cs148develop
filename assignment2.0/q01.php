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
    $query = 'SELECT pmkNetId FROM tblTeachers';
//    $results = $thisDatabaseReader->testQuery($query, "", 0, 0, 0, 0, false, false);
    $results = $thisDatabaseReader->select($query, "", 0, 0, 0, 0, false, false);

    
    print '<h1>SELECT pmkNetId FROM tblTeachers;<h1>';
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