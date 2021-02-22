<div id="patientTestTable" class="test-dashboard">
    <table class="table table-primary">
        <thead class="table-dark">
            <tr>
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
    echo '<td>'.$test->test_type.'</td>';
    echo '<td>'.$test->results.'</td>';
    echo '<td>'.$test->date_test.'</td>';
    echo '</tr>';
};
?>
</tbody>
</table>
</div>

