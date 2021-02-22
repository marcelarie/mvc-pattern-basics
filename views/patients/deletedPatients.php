<?php
if ($count > 1) {
    echo '<div>'.$count.' patients were deleted</div>';
} elseif ($count === 1) {
    echo '<div>'.$count.' patients were deleted</div>';
} else {
}
