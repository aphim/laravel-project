@extends ('layouts.master')

@section ('content')

<div class="col-md-8 blog-main">
    
    <h1>Create a Post</h1>
    <hr/>
    <form>
        <div class="form-group">
          <label for="exampleInputEmail1">Title</label>
          <input type="text" class="form-control" id="title" name="title">
        </div>

        <div class="form-group">
          <label for="exampleInputPassword1">Body</label>
          <textarea id="body" name="body"> </textarea>

        </div>
        <div class="form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    
</div>
@endsection