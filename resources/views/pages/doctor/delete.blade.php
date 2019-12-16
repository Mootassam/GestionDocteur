

    <!-- Button trigger modal -->

    <!-- Modal -->

    <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h4 class="modal-title" id="myModalLabel">supprimer Doctor</h4>
    </div>
      <form action="{{url('doctor/delete/'.$item->id)}}" method="post">
                    @csrf
                    @method('delete')
    <div class="modal-body">
    <h3>Voulez Vous vraiment supprimer cette enregistrement</h3>
    </div>
    <div class="modal-footer">
            <button type="submit" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="cancel" class="btn btn-primary">Save changes</button>
    </div>
        </form>

    </div>
    </div>
    </div>




