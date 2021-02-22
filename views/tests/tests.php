<?php
    echo '<div id="test-dashboard" class="test-dashboard">
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>Patient id</th>
                <th>Type</th>
                <th>Result</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>';
foreach ($tests as $test) {
    echo '<tr>';
    echo '<td>'.$test->id_test.'</td>';
    echo '<td>'.$test->id_pat.'</td>';
    echo '<td class="testType" data-toggle="modal" data-target="#testInfoModal">'.$test->test_type.'</td>';
    echo '<td>'.$test->results.'</td>';
    echo '<td>'.$test->date_test.'</td>';
    echo '</tr>';
}
echo '</tbody>
</table>
</div>';
?>

