<form action="" method="POST" >
  @csrf
  <div class="mb-3">
    <label>Name Category</label>
    <input type="text" class="form-control" name="name_category">
  </div>
  <div class="mb-3">
    <label>Description</label>
    <input type="text" class="form-control" name="description">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<a href="{{ route('categories.list') }}">back to list</a>