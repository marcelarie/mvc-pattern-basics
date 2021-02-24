<?php
require_once HELPERS . "spaces-converter.php";
require_once VIEWS . 'tests/testFilter.php';
?>

<div id="test-dashboard" class="test-dashboard">
    <table class="table table-primary">
        <thead class="table-dark">
            <tr>
                <th>Patient id</th>
                <th>Type</th>
                <th>Result</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
<?php

$resultFilter = $resultFilter ? '"'.$resultFilter.'"' : "\"\"";

foreach ($tests as $test) {
    $testResult = $test->results === "positive" ? "table-danger" : "table-success";

    $typeInfo = json_encode(spacesConverter($test->test_type, '%20')); // change spaces for %20

    echo "<tr class={$testResult}>";
    echo "<td><a class='btn btn-outline-primary' href=index.php?request=getPatient&id=[{$test->id_pat},0,1]>{$test->id_pat}</a></td>";
    echo "<td><a href=index.php?request={$request}&id=[{$resultFilter},{$typeInfo}]>{$test->test_type}</a></td>";
    echo "<td>{$test->results}</td>";
    echo "<td>{$test->date_test}</td>";
    echo "</tr>";
};
?>
</tbody>
</table>
<?php
    if ($testInfo) {
        require VIEWS.'/modal/modal.php';
    }
?>
</div>

