<?php
echo "<div class='alert absolute-modal'>
          <div class='modal-dialog'>
            <div class='modal-content'>
              <div class='modal-header'>
                <h5 class='modal-title'>{$testInfo[0]->test_type}</h5>
                <a class='btn-close' href=index.php?request={$request}&id=[{$resultFilter}]></a>
              </div>
              <div class='modal-body'>
                <p>{$testInfo[0]->test_description}</p>
                <p>{$testInfo[0]->price} €</p>
              </div>
            </div>
          </div>
        </div>";
