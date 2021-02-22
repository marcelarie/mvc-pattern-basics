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
foreach ($tests as $test) {
    $testResult = $test->results === "positive" ? "table-danger" : "table-success";
    echo '<tr class='.$testResult.'>';
    echo '<td>'.$test->id_pat.'</td>';
    echo '<td ><a href="index.php?request=getAllTests&id='.$test->test_type.'">'.$test->test_type.'</a></td>';
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

