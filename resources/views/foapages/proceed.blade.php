@extends('layouts.foamaster')
@section('content')
<style>
    .col-md-4 {
      float: none;
      margin-top: 5px;
      marging-righ t: 0px
    }
    .form-group {
      float: none;
      margin-top: 5px;
      marging-right: 0px
    }
    .conta{
      border: 2px solid gray;
      border-radius: 10px;
      margin: 20px;
      padding: 20px;
    }
</style>
    <div class="conta row">
        <form method="POST" action="{{route('vote')}}">
            <div class="row">
                <div class="col-md-4">
                    
                        @if(session('nonexist') != null)
                            <p class="alert alert-danger size"><b>Please Check the Matric Number</b></P><br>
                            {{session('nonexist')}}        
                        @endif

                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="matnum">Matric. No:</label>
                        <input type="text" class="form-control" id="text" value="{{old('MatricNumber')}}" placeholder="Enter Your Matric No. Again" name="MatricNumber">
                    </div>
                    
                    <div class="col-md-4">
                        <button type="submit" class="btn btn-success">Proceed</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
  

@endsection      