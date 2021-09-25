@extends ('layouts.master')

@section ('content')

<div class="col-md-8 blog-main">
    
    <h1>Create a Post</h1>
    <hr/>
    <form method="POST" action="/posts">

        {{ csrf_field() }}

        <div class="form-group">
          <label>Title</label>
          <input type="text" class="form-control" id="title" name="title">
        </div>

        <div class="form-group">
          <label>Body</label>
          <textarea id="body" name="body" class="form-control"> </textarea>

        </div>

        <button type="submit" class="btn btn-primary">Publish</button>
      </form>
    
      <div class='alert alert-error'>
        <ul>

          @foreach ($errors->all as $error)
          <li>{{$error}}</li>
        
        </ul>
      </div>

</div>
@endsection