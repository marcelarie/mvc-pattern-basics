$(function() {
    $(".testType").on("mouseover",function(e) {
        var modalType = $(this).text();
        var mousePosX = e.clientX;
        var mousePosY = e.clientY;

        alert(modalType+ mousePosX+mousePosY)
        
        $.ajax(
            {
                url: 'controllers/mainController.php',
                data: {request:"getTypeInfo", id: modalType},
                success: function( result ) {
                    const testInfoModal = `<div class="modal fade" id="testInfoModal" tabindex="-1" aria-hidden="true">
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
                </div>`;
                $("body").append(testInfoModal);
                    alert( 'El servidor devolvio "' + result + '"' );
                }
            }
        ).then(
            function() {
                
                $(".modal").style.position = 'absolute';
                $(".modal").style.top = mousePosX + 'px';
                $(".modal").style.left = mousePosy + 'px';
                testInfoModal.fadeIn();
            }
        )
    });
});