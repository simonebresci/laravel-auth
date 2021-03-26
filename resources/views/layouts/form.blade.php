

@php
if (isset($edit) && !empty($edit)){
    // EDIT CASE
    $method = 'PUT';
    $url = route('pizzas.update', compact('pizza'));
}else{
    // CREATE CASE
    $url = route('pizzas.store');
    $method = 'POST';
}
@endphp


<form class="form-horizontal" action={{$url}}  method="post">
  @csrf
  @method($method)

  <div class="form-group">
    <label class="control-label col-sm-2" for="name">Img Path</label>
    <div class="col-sm-10">
      <input type="text" value="{{(isset($pizza)?$pizza->img_path:'')}}" class="form-control {{($errors->has('img_path')?'is-invalid':'')}}" id="img_path" name="img_path" placeholder="Enter img path">
      @php
        if($errors->has('img_path')){
          echo '<span class=text-danger>'. $errors->first('img_path') . '</span>';
        }
      @endphp
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="name">Name:</label>
    <div class="col-sm-10">
      <input type="text" value="{{(isset($pizza)?$pizza->name:'')}}" class="form-control {{($errors->has('name')?'is-invalid':'')}}" id="name" name="name" placeholder="Enter name">
      @php
        if($errors->has('name')){
          echo '<span class=text-danger>'. $errors->first('name') . '</span>';
        }
      @endphp
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="name">Ingredients:</label>
    <div class="col-sm-10">
      <input type="text" value="{{(isset($pizza)?$pizza->ingredients:'')}}" class="form-control {{($errors->has('ingredients')?'is-invalid':'')}}" id="ingredients" name="ingredients" placeholder="Enter ingredients">
      @php
        if($errors->has('ingredients')){
          echo '<span class=text-danger>'. $errors->first('ingredients') . '</span>';
        }
      @endphp
    </div>
  </div>


  <div class="form-group">
    <label class="control-label col-sm-2" for="name">Price:</label>
    <div class="col-sm-10">
      <input type="text" value="{{(isset($pizza)?$pizza->price:'')}}" class="form-control {{($errors->has('price')?'is-invalid':'')}}" id="price" name="price" placeholder="Enter price">
      @php
        if($errors->has('price')){
          echo '<span class=text-danger>'. $errors->first('price') . '</span>';
        }
      @endphp
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="name">Description:</label>
    <div class="col-sm-10">
      <input type="text" value="{{(isset($pizza)?$pizza->description:'')}}" class="form-control {{($errors->has('description')?'is-invalid':'')}}" id="description" name="description" placeholder="Enter description">
      @php
        if($errors->has('description')){
          echo '<span class=text-danger>'. $errors->first('description') . '</span>';
        }
      @endphp
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="name">Peso:</label>
    <div class="col-sm-10">
      <input type="text" value="{{(isset($pizza)?$pizza->peso:'')}}" class="form-control {{($errors->has('peso')?'is-invalid':'')}}" id="peso" name="peso" placeholder="Enter img path">
      @php
        if($errors->has('peso')){
          echo '<span class=text-danger>'. $errors->first('peso') . '</span>';
        }
      @endphp
    </div>
  </div>


  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Submit</button>
    </div>
  </div>

</form>
