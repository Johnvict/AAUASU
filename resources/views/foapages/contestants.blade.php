@extends('layouts.foaadminmaster')  

<title>View Contestants</title>
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



<h2>Contestants</h2>
    @if(session('status') != null)
        <div class="alert alert-success">
            {{session('status')}}
        </div>
    @endif


    <div class="row">
        <div class="col col-md-7">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>S/N</th>
                    <th>Nickname</th>
                    <th>Category</th>
                    <th>Cont. Code</th>
                </tr>
                </thead>
                <tbody>
                @if(count($contestantt)>0)
                    @foreach($contestantt as $contestant)
                        <tr>

                            <th class="alert alert-info">{{ $contestant -> id }}</th>
                            <td class="alert alert-success">{{ $contestant -> contnick }} </td>
                            <td class="alert alert-warning">{{ $contestant->Category->catname }}</td>
                            <td class="alert alert-info">{{ $contestant -> contid }}</td>

                            <td class="alert alert-danger">
                                <a href="/delete-contestant/{{ $contestant -> id }}" class="label label-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
                </tr>
            </table>
        </div>

        <!-- form head -->
        <div class="topp col-md-4">
            <!-- <div class="col-md-4"> -->
            <h3>Add A Contestant</h3>
            <!-- </div> -->
        </div>
        <div class="add col-md-4">

            @if(count($errors) > 0)
                @foreach($errors->all() as $error)
                    <div class="alert alert-danger col-md-6 unfloat">{{$error}}</div>
                @endforeach
            @endif
            <form method="POST" action="{{route('addContestant')}}" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="contnick">Nickname</label><br>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-star-empty"></i></span>
                        <input id="contnick" type="text" class="form-control" name="contnick" value = "{{old('contnick')}}" placeholder="Nickname">
                    </div>
                </div>

                <div class="form-group">
                    <label for="contid">Contestant Code</label><br>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-star"></i></span>
                        <input id="contid" type="number" class="form-control" name="contid" value = "{{old('contid')}}" placeholder="Contestant Code">
                    </div>
                </div>

                <div class="form-group col-md-10">
                    <label for="category_catid">Category:</label>
                    <select value="{{old('category_catid')}}" name="category_catid" class="form-control" id="category_catid">
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

                <button type="submit" class="btn btn-primary">Add Contestant</button>
            </form>
        </div>
    </div>


@endsection