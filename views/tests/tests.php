<?php
require_once VIEWS . 'tests/testFilter.php'
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
/* if ($ResultFilter) {
    $ResultFilter = $ResultFilter;
} else {
    $ResultFilter = "";
} */
$resultFilter ? $resultFilter = $resultFilter : $resultFilter = "";
foreach ($tests as $test) {
    $testResult = $test->results === "positive" ? "table-danger" : "table-success";
    $typeInfo = $test->test_type;
    if ($typeInfo === "PCR") {
        $typeInfo === "PCR";
    } else if ($typeInfo === "Test Antigeno") {
        $typeInfo = "Test%20Antigeno";
    } else {
        $typeInfo = "Test%20Anticuerpo";
    };
    echo '<tr class='.$testResult.'>';
    echo '<td><a class="btn btn-outline-primary" href="index.php?request=getPatient&id='.$test->id_pat.'">'.$test->id_pat.'</a></td>';
    echo '<td ><a href=index.php?request='.$request.'&id=["'.$resultFilter.'",'.json_encode($typeInfo).']>'.$test->test_type.'</a></td>';
    echo '<td>'.$test->results.'</td>';
    echo '<td>'.$test->date_test.'</td>';
    echo '</tr>';
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

