<!-- Button trigger modal -->
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
  <i class="fas fa-trash-alt fa-lg"></i>
</button>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-danger" id="exampleModalLabel">Do you want to cancel this pizza?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         Are you sure?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>

        <form  action={{route('pizzas.destroy', compact('pizza'))}}  method="post">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger">Yes - Delete pizza id:{{$pizza->id}}</button>

        </form>

      </div>
    </div>
  </div>
</div>
