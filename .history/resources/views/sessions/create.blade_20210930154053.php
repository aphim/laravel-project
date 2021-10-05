@extends ('layouts.master')

@section ('content')

    <div class="col-md-8">

        <h1>Sign In</h1>

        <form method="POST" action="/sessions">

            {{csrf_field()}}
    
            <div class="form-group">
    
                <label for="email">Email Address:</label>
                <input type="text" class="form-control" id="name" name="name">
            
            </div>


        </form>    


</div>

@endsection