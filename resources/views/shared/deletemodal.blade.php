<div id="deleteModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Are you sure you want to delete this comment?</h4>
            </div>
            <div class="modal-body">
                <span>
                    <form action="/comment/{{$temp}}}/delete" method="POST">
                    {{csrf_field()}}
                        {{method_field('DELETE')}}
                        <div class="btn-block">
                            <button class="btn btn-sm btn-success" type="submit">Yes, delete</button>
                            <button type="button" class="btn btn-info" data-dismiss="modal">No, cancel</button>
                        </div>
                    </form>
                </span>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>