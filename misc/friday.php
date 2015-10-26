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

$tableName = "tblTeachers";

if (isset($_GET['getRecordsFor'])) {
    $tableName = $_GET['getRecordsFor'];
}

// Begin output
print '<article>';
print '<h2>Database: ' . DATABASE_NAME . '</h2>';

// print out a list of all the tables and their description
    // all done
    print '<aside>';


$start = (int) 0;
$numRecords = (int) 9;


if(isset($_GET['num'])){
    $numRecords = $_GET['num'];
}
if(isset($_GET['begin'])){
    $start = $_GET['begin'];
}

print '<a href="https://jrdyke.w3.uvm.edu/cs148/misc/friday.php?begin=10&num=19">Next</a>';

//SELECT `pmkStudentId`, `fldFirstName`, `fldLastName`, `fldStreetAddress`, `fldCity`, `fldState`, `fldZip`, `fldGender` FROM `tblStudents` ORDER BY `fldLastName`,`fldFirstName`;
$query = 'SELECT pmkStudentId, fldFirstName, fldLastName, fldStreetAddress, fldCity, fldState, fldZip, fldGender ' . 
         'FROM tblStudents ' . 
         'ORDER BY fldLastName,fldFirstName ' .
         'LIMIT ' . $start . ',' . $numRecords;

//    $results = $thisDatabaseReader->testQuery($query, "", 0, 1, 0, 0, false, false);
    $results = $thisDatabaseReader->select($query, "", 0, 1, 0, 0, false, false);

// the array $records is both associative and indexed, column zero is associative
// which you see in teh above print_r statement
$fields = array_keys($results[0]);
$labels = array_filter($fields, "is_string");
$columns = count($labels);
        
//now print out each record
    print '<p>Displaying records indexed ' . $start . ' - ' . ($numRecords);



// Display all the records for a given table
if ($tableName != "") {
print '<table class="records">';
    
print '<tr><th colspan="' . $columns . '">' . $query . '</th></tr>';
// print out the column headings, note i always use a 3 letter prefix
// and camel case like pmkCustomerId and fldFirstName
print '<tr>';
foreach ($labels as $label) {
    print '<th>';
    $camelCase = preg_split('/(?=[A-Z])/', substr($label, 3));
    foreach ($camelCase as $one) {
        print $one . " ";
    }
    print '</th>';
}
print '</tr>';


    $highlight = 0; // used to highlight alternate rows
    foreach ($results as $rec) {
        $highlight++;
        if ($highlight % 2 != 0) {
            $style = ' odd ';
        } else {
            $style = ' even ';
        }
        print '<tr class="' . $style . '">';
        for ($i = 0; $i < $columns; $i++) {
            print '<td>' . $rec[$i] . '</td>';
        }
        print '</tr>';
    }

    // all done
    print '</table>';   
    
    print '</aside>';
}
print '</article>';
include "footer.php";
?>