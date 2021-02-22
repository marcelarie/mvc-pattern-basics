<?php
echo '<div class="modal fade" id="testInfoModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="testInfoTitle">'.$info[0]->test_type.'</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">'.$info[0]->price.'</div>
                <div class="modal-body">'.$info[0]->description.'</div>
            </div>
        </div>
    </div>';
    /* echo '<div id="test-info" class="test-info">
    <h2>'.$info[0]->test_type.'</h2>
    <p>'.$info[0]->price.'</p>
    <p>'.$info[0]->description.'</p>
</div>'; */
?>