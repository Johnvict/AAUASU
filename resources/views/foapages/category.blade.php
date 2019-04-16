@extends('layouts.foaadminmaster')

<title>Categories</title>
@section('content')

    <style>
        .add{
            border: 2px solid green;
            background: lightgreen;
            padding: 10px;
            width: 400px;
            border-radius: 0 0 10px 10px;
        }

        .topp {
            border: 2px solid green;
            background: white;
            padding: 10px;
            width: 400px;
            border-radius: 10px 10px 0 0;
            text-align: center;
        }

        .add .form-group {
            color: white;
            float: none;
        }

        .add .col-md-6, unfloat, row{
            float: none;
        }
    </style>

    @if(session('status') != null)
        <div class="alert alert-success">
            {{session('status')}}
        </div>
    @endif
<br><br>
    <h2 class="">Add, View & Remove Categories</h2>

    <div class="row">
        <div class="col-md-4">
            <div class="topp col-md-4">
                <!-- <div class="col-md-4"> -->
                <h3>Add Categories</h3>
                <!-- </div> -->
            </div>

            <div class="add">
                @if(count($errors) > 0)
                    @foreach($errors->all() as $error)
                        <div class="alert alert-danger col-md-6 unfloat">{{$error}}</div>
                    @endforeach
                @endif
                <form method="POST" action="{{route('addCategory')}}" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group col-md-10">
                        <label for="catname">Category Name:</label>
                        <select value="{{old('catname')}}" name="catname" class="form-control" id="catname">
                            <option value="Artiste of the Year">Artiste of the Year</option>
                            <option value="Best Female Artist of the Year">Best Female Artist of the Year</option>
                            <option value="Best Male Artist of the Year">Best Male Artist of the Year</option>
                            <option value="Next Artist on Campus">Next Artist on Campus</option>
                            <option value="Best Music Producer Of The Year">Best Music Producer Of The Year</option>
                            <option value="Best Record Label On Campus">Best Record Label On Campus</option>
                            <option value="Best Music Vocalist Of The Year">Best Music Vocalist Of The Year</option>
                            <option value="Best Drama Group on Campus">Best Drama Group on Campus</option>
                            <option value="Best Dance Group on Campus">Best Dance Group on Campus</option>
                            <option value="Best Comedian on Campus">Best Comedian on Campus</option>
                            <option value="Entertainer of the Year">Entertainer of the Year</option>
                            <option value="Best Comedy Stage Performance">Best Comedy Stage Performance</option>
                            <option value="Best M.C. of the Year">Best M.C. of the Year</option>
                            <option value="Best D.J. on Campus">Best D.J. on Campus</option>
                            <option value="Rookie of the Year">Rookie of the Year</option>
                            <option value="Best Hypeman of the Year">Best Hypeman of the Year</option>
                            <option value="Best Campus Online Media Outlet">Best Campus Online Media Outlet</option>
                            <option value="Best Blog Site of the Year">Best Blog Site of the Year</option>
                            <option value="Best Online P.R. of the Year">Best Online P.R. of the Year</option>
                            <option value="Best AAUASU Exco">Best AAUASU Exco</option>
                            <option value="Best Faculty President">Best Faculty President</option>
                            <option value="Best Department President">Best Department President</option>
                            <option value="Best Class Governor of the Year">Best Class Governor of the Year</option>
                            <option value="Best Faculty Social Director">Best Faculty Social Director</option>
                            <option value="Best Departmental Social Director">Best Departmental Social Director</option>
                            <option value="Mr Personality Of The Year">Mr Personality Of The Year</option>
                            <option value="Miss Personality Of The Year">Miss Personality Of The Year</option>
                            <option value="Most Popular Female AAUAITE">Most Popular Female AAUAITE</option>
                            <option value="Most Outspoken">Most Outspoken</option>
                            <option value="Most Sociable AAUAITE">Most Sociable AAUAITE</option>
                            <option value="Most Swaggalicious AAUAITE">Most Swaggalicious AAUAITE</option>
                            <option value="Most Sought After AAUAITE">Most Sought After AAUAITE</option>
                            <option value="Most Popular Male AAUAITE">Most Popular Male AAUAITE</option>
                            <option value="Most Influential Female AAUAITE">Most Influential Female AAUAITE</option>
                            <option value="Most Influential Male AAUAITE">Most Influential Male AAUAITE</option>
                            <option value="Best Clique Of The Year">Best Clique Of The Year</option>
                            <option value="Hour Glass of the Year">Hour Glass of the Year</option>
                            <option value="Miss Fashionista of the Year">Miss Fashionista of the Year</option>
                            <option value="Mr Fashionista of the Year">Mr Fashionista of the Year</option>
                            <option value="Best Fashion Line on Campus">Best Fashion Line on Campus</option>
                            <option value="Fast Upcoming Fashion Line on Campus">Fast Upcoming Fashion Line on Campus</option>
                            <option value="Ever Radiant Female AAUAITE">Ever Radiant Female AAUAITE</option>
                            <option value="Ever Radiant Male AAUAITE">Ever Radiant Male AAUAITE</option>
                            <option value="Money Bag Of The Year">Money Bag Of The Year</option>
                            <option value="Most Expensive Female AAUAITE">Most Expensive Female AAUAITE</option>
                            <option value="Most Expensive Male AAUAITE">Most Expensive Male AAUAITE</option>
                            <option value="Most Expensive Female Duo in AAUA">Most Expensive Female Duo in AAUA</option>
                            <option value="Most Expensive Male Duo in AAUA">Most Expensive Male Duo in AAUA</option>
                            <option value="Most Expensive Female Crew in AAUA">Most Expensive Female Crew in AAUA</option>
                            <option value="Most Expensive Male Crew in AAUA">Most Expensive Male Crew in AAUA</option>
                            <option value="Most Expensive Female Clique in AAUA">Most Expensive Female Clique in AAUA</option>
                            <option value="Most Expensive Male Clique in AAUA">Most Expensive Male Clique in AAUA</option>
                            <option value="Hall of Fame">Hall of Fame</option>
                            <option value="Most Handsome AAUAITE">Most Handsome AAUAITE</option>
                            <option value="Most Beautiful AAUAITE">Most Beautiful AAUAITE</option>
                            <option value="Black Diamond of the Year">Black Diamond of the Year</option>
                            <option value="Miss Cute Of The Year">Miss Cute Of The Year</option>
                            <option value="Most Endowed of the Year">Most Endowed of the Year</option>
                            <option value="Big-Bold & Beautiful">Big-Bold & Beautiful</option>
                            <option value="Most Sophisticated Female AAUAITE">Most Sophisticated Female AAUAITE</option>
                            <option value="Most Sophisticated Male AAUAITE">Most Sophisticated Male AAUAITE</option>
                            <option value="Entrepreneur Of The Year">Entrepreneur Of The Year</option>
                            <option value="Best Sportsman Of The Year">Best Sportsman Of The Year</option>
                            <option value="Best Event Planner Of The Year">Best Event Planner Of The Year</option>
                            <option value="Innovative Student Of The Year">Innovative Student Of The Year</option>
                            <option value="Industrious Student Of The Year">Industrious Student Of The Year</option>
                            <option value="Writer Of The Year">Writer Of The Year</option>
                            <option value="Best Eatery in Town">Best Eatery in Town</option>
                            <option value="Best Beauty Cafe in Town">Best Beauty Cafe in Town</option>
                            <option value="Best Online Registration Centre">Best Online Registration Centre</option>
                            <option value="Best Club in Town">Best Club in Town</option>
                            <option value="Best Hotel in Town">Best Hotel in Town</option>
                            <option value="Best Bar in Town">Best Bar in Town</option>
                            <option value="Best POS Outlet">Best POS Outlet</option>
                            <option value="Students Favourite Gas Filler">Students Favourite Gas Filler</option>
                            <option value="Most Expensive Hostel of the Year">Most Expensive Hostel of the Year</option>
                            <option value="Best Off-Campus Hostel">Best Off-Campus Hostel</option>
                            <option value="Best Girl's Hostel on Campus">Best Girl's Hostel on Campus</option>
                            <option value="Best Filling Station in Town">Best Filling Station in Town</option>
                            <option value="Political Elite Of The Year">Political Elite Of The Year</option>
                            <option value="Most Political Conscious AAUAITE">Most Political Conscious AAUAITE</option>
                            <option value="Most Beautiful Fresher">Most Beautiful Fresher</option>
                            <option value="Most Handsome Fresher">Most Handsome Fresher</option>
                            <option value="Most Popular Fresher">Most Popular Fresher</option>
                            <option value="Most Friendly Fresher">Most Friendly Fresher</option>
                            <option value="Most Sophisticated Fresher">Most Sophisticated Fresher</option>
                            <option value="Most Expensive Fresher">Most Expensive Fresher</option>
                            <option value="Most Outspoken Fresher">Most Outspoken Fresher</option>
                            <option value="Most Sought After Fresher">Most Sought After Fresher</option>
                            <option value="Most Swaggalicious Fresher">Most Swaggalicious Fresher</option>
                            <option value="Most Sociable Fresher">Most Sociable Fresher</option>
                            <option value="Most Prolific Manager">Most Prolific Manager</option>
                            <option value="Best Fine-Artist">Best Fine-Artist</option>
                            <option value="Best Couple of The Year">Best Couple of The Year</option>
                            <option value="Miss Portable">Miss Portable</option>
                            <option value="Mr Portable">Mr Portable</option>
                            <option value="Mr AAUA">Mr AAUA</option>
                            <option value="Miss AAUA">Miss AAUA</option>
                        </select>
                    </div>

                    <div class="form-group col-md-10">
                        <label for="id">Confirm Category Name:</label>
                        <select value="{{old('id')}}" name="id" class="form-control" id="id">
                            <option value="1">Artiste of the Year</option>
                            <option value="2">Best Female Artist of the Year</option>
                            <option value="3">Best Male Artist of the Year</option>
                            <option value="4">Next Artist on Campus</option>
                            <option value="5">Best Music Producer Of The Year</option>
                            <option value="6">Best Record Label On Campus</option>
                            <option value="7">Best Music Vocalist Of The Year</option>
                            <option value="8">Best Drama Group on Campus</option>
                            <option value="9">Best Dance Group on Campus</option>
                            <option value="10">Best Comedian on Campus</option>
                            <option value="11">Entertainer of the Year</option>
                            <option value="12">Best Comedy Stage Performance</option>
                            <option value="13">Best M.C. of the Year</option>
                            <option value="14">Best D.J. on Campus</option>
                            <option value="15">Rookie of the Year</option>
                            <option value="16">Best Hypeman of the Year</option>
                            <option value="17">Best Campus Online Media Outlet</option>
                            <option value="18">Best Blog Site of the Year</option>
                            <option value="19">Best Online P.R. of the Year</option>
                            <option value="20">Best AAUASU Exco</option>
                            <option value="21">Best Faculty President</option>
                            <option value="22">Best Department President</option>
                            <option value="23">Best Class Governor of the Year</option>
                            <option value="24">Best Faculty Social Director</option>
                            <option value="25">Best Departmental Social Director</option>
                            <option value="26">Mr Personality Of The Year</option>
                            <option value="27">Miss Personality Of The Year</option>
                            <option value="28">Most Popular Female AAUAITE</option>
                            <option value="29">Most Outspoken</option>
                            <option value="30">Most Sociable AAUAITE</option>
                            <option value="31">Most Swaggalicious AAUAITE</option>
                            <option value="32">Most Sought After AAUAITE</option>
                            <option value="33">Most Popular Male AAUAITE</option>
                            <option value="34">Most Influential Female AAUAITE</option>
                            <option value="35">Most Influential Male AAUAITE</option>
                            <option value="36">Best Clique Of The Year</option>
                            <option value="37">Hour Glass of the Year</option>
                            <option value="38">Miss Fashionista of the Year</option>
                            <option value="39">Mr Fashionista of the Year</option>
                            <option value="40">Best Fashion Line on Campus</option>
                            <option value="41">Fast Upcoming Fashion Line on Campus</option>
                            <option value="42">Ever Radiant Female AAUAITE</option>
                            <option value="43">Ever Radiant Male AAUAITE</option>
                            <option value="44">Money Bag Of The Year</option>
                            <option value="45">Most Expensive Female AAUAITE</option>
                            <option value="46">Most Expensive Male AAUAITE</option>
                            <option value="47">Most Expensive Female Duo in AAUA</option>
                            <option value="48">Most Expensive Male Duo in AAUA</option>
                            <option value="49">Most Expensive Female Crew in AAUA</option>
                            <option value="50">Most Expensive Male Crew in AAUA</option>
                            <option value="51">Most Expensive Female Clique in AAUA</option>
                            <option value="52">Most Expensive Male Clique in AAUA</option>
                            <option value="53">Hall of Fame</option>
                            <option value="54">Most Handsome AAUAITE</option>
                            <option value="55">Most Beautiful AAUAITE</option>
                            <option value="56">Black Diamond of the Year</option>
                            <option value="57">Miss Cute Of The Year</option>
                            <option value="58">Most Endowed of the Year</option>
                            <option value="59">Big-Bold & Beautiful</option>
                            <option value="60">Most Sophisticated Female AAUAITE</option>
                            <option value="61">Most Sophisticated Male AAUAITE</option>
                            <option value="62">Entrepreneur Of The Year</option>
                            <option value="63">Best Sportsman Of The Year</option>
                            <option value="64">Best Event Planner Of The Year</option>
                            <option value="65">Innovative Student Of The Year</option>
                            <option value="66">Industrious Student Of The Year</option>
                            <option value="67">Writer Of The Year</option>
                            <option value="68">Best Eatery in Town</option>
                            <option value="69">Best Beauty Cafe in Town</option>
                            <option value="70">Best Online Registration Centre</option>
                            <option value="71">Best Club in Town</option>
                            <option value="72">Best Hotel in Town</option>
                            <option value="73">Best Bar in Town</option>
                            <option value="74">Best POS Outlet</option>
                            <option value="75">Students Favourite Gas Filler</option>
                            <option value="76">Most Expensive Hostel of the Year</option>
                            <option value="77">Best Off-Campus Hostel</option>
                            <option value="78">Best Girl's Hostel on Campus</option>
                            <option value="79">Best Filling Station in Town</option>
                            <option value="80">Political Elite Of The Year</option>
                            <option value="81">Most Political Conscious AAUAITE</option>
                            <option value="82">Most Beautiful Fresher</option>
                            <option value="83">Most Handsome Fresher</option>
                            <option value="84">Most Popular Fresher</option>
                            <option value="85">Most Friendly Fresher</option>
                            <option value="86">Most Sophisticated Fresher</option>
                            <option value="87">Most Expensive Fresher</option>
                            <option value="88">Most Outspoken Fresher</option>
                            <option value="89">Most Sought After Fresher</option>
                            <option value="90">Most Swaggalicious Fresher</option>
                            <option value="91">Most Sociable Fresher</option>
                            <option value="92">Most Prolific Manager</option>
                            <option value="93">Best Fine-Artist</option>
                            <option value="94">Best Couple of The Year</option>
                            <option value="95">Miss Portable</option>
                            <option value="96">Mr Portable</option>
                            <option value="97">Mr AAUA</option>
                            <option value="98">Miss AAUA</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Add Category</button>
                </form>
            </div>
        </div>
        <div class="col col-md-1">
        </div>

        <div class="col col-md-6">
            @if(count($Categories)>0)
                <table class="table table-stripe d">
                    <thead>
                    <tr  class="alert alert-info">
                        <th>Cat. ID</th>
                        <th>Category Title</th>
                        <th>Action</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($Categories as $category)
                        <tr></tr>
                        <th class="alert alert-info">{{ $category -> id }}</th>
                        <td class="alert alert-warning">{{ $category -> catname }}</td>
                        <td class="alert alert-danger">
                            <a href="/delete-category/{{ $category -> id }}" class="label label-danger">Remove Category</a>
                        </td>
                        <td class="alert alert-info"></td>
                    @endforeach
                    <tr class="alert alert-info">
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>

                    </tbody>
                    <tr>
                </table><br><br>
            @endif
        </div>
    </div>

@endsection