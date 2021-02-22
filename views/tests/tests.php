<div id="test-dashboard" class="test-dashboard">
    <table class="table table-primary">
        <thead>
            <tr>
                <th>id</th>
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
    echo '<td>'.$test->id_test.'</td>';
    echo '<td>'.$test->id_pat.'</td>';
    echo '<td ><a href="index.php?request=getAllTests&id='.$test->test_type.'">'.$test->test_type.'</a></td>';
    echo '<td>'.$test->results.'</td>';
    echo '<td>'.$test->date_test.'</td>';
    echo '</tr>';
}
    if ($testInfo) {
        echo '<div class="alert">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title">'.$testInfo->test_type.'</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <p>'.$testInfo->description.'</p>
                        <p>'.$testInfo->price.'</p>
                      </div>
                    </div>
                  </div>
                </div>';
    }
?>
</tbody>
</table>
</div>

