@extends('layouts.foamaster')
  <title>Face of AAUA 2017</title>
@section('content')

  

  
  <style>
    .size {
      font-size: 2.0em;
      text-align:center;
      color: red;
      font-weight:bold;
    }
  </style>
  <hr>
  <h3>Just a moment please.. Kindly fill in your details below</h3>
  <div>
    <p class="alert alert-danger size">Note: Multiple Votes will be void! <br>
    @if(session('jumper') != null)
            {{session('jumper')}}
        
  @endif</p>
    
  </div>

  <style>
    .col-md-3 {
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
    }
  </style>


  <div class="container col-md-12">

    @if(count($errors) > 0)
      @foreach($errors->all() as $error)
        <div class="alert alert-danger col-md-3">{{$error}}</div>
      @endforeach
    @endif

    <!-- FORM TO REGULATE VOTING -->
      
    <div class="conta">
      <div class="container row">
        <form action="{{route('savevoter')}}" method="POST">
          {{csrf_field()}}
          <div class="form-group col-md-3">
            <label for="matnum">Matric. No:</label>
            <input type="text" class="form-control" id="text" value="{{old('MatricNumber')}}" placeholder="Enter Your Matric No." name="MatricNumber">
          </div>

          <div class="form-group col-md-3">
            <label for="sel1">Select your Faculty:</label>
            <select value="{{old('Faculty')}}" name="Faculty" class="form-control" id="sel1">
              <option value="">Select Faculty</option>        
              <option value="Agriculture">Agriculture</option>
              <option value="Arts">Arts</option>
              <option value="Education">Education</option>
              <option value="Law">Law</option>
              <option value="Science">Science</option>
              <option value="Social & Management Sciences">Social & Management Sciences</option>
            </select>
          </div>

          <div class="form-group col-md-3">
            <label for="pnum">Phone No:</label>
            <input type="text" class="form-control" id="text" value="{{old('PhoneNumber')}}" placeholder="Enter Your Phone Number" name="PhoneNumber">
          </div>

          <div class="form-group col-md-3">
            <label for="nick">Nickname:</label>
            <input type="text" class="form-control" id="text" value="{{old('Nick')}}" placeholder="Enter Your Nickname" name="Nick">
          </div>
          
          <button type="submit" class="btn btn-success">Submit Credentials</button>
          <input type="hidden" name="_token" value="{{Session::token()}}">
        </form>
      </div>
    </div>
  
    







    








    <div class="div">
      <p>The students union of Adekunle Ajasin University Akungba Akoko Ondo State, Nigeria</p>
    </div>
@endsection
