@extends('layouts.foamaster')  

<title>Face of AAUA</title>
@section('content')

<style>
  .paragraph {
    text-align: justify;
      color:white;
      font-size: 0.7em;
  }
  .this-container {
      border: 2px solid #66ff99;
      border-top: 0px solid #66ff99;
      background: black;
      background-opacity: 0.7;
      padding: 20px;
      padding-bottom: 5px;
      border-radius: 10px 10px 15px 15px;
      bottom: 0 5px 15px 5px;
      text-color: white;
      box-shadow: 0px 3px 3px 3px rgba(0, 0, 0, 0.3);
  }
  body {
    background: white;
  }
  .profile-img {
      max-width: 70px;
      max-height: 120px;
      border: 5px solid #fff;
      border-radius: 25%; {{--For a round-shaped image--}}
  box-shadow: 0 2px 2px rgba(0, 0, 0, 0.3);
  }

  .containe {
    background: white;
  }
  .this-contain {
      border: 2px solid darkgrey;
      border-top: 0px solid #66ff99;
      background: white;
      padding: 5px;
      padding-bottom: 0px;
      border-radius: 5px 5px 5px 5px;
      margin-bottom: 10px;
      text-color: whi te;
  }

  .ad-container {
      border: 0px solid #66ff99;
      border-top: 0px solid #66ff99;
      background: white;
      background-opacity: 0.7;
      padding: 20px;
      padding-bottom: 5px;
      border-radius: 5px 5px 15px 15px;
      margin-bottom: 15px;
      text-color: white;
      box-shadow: 0px 3px 3px 3px rgba(0, 0, 0, 0.3);
  }
    .contestant-img {
        max-width: 50px;
        border: 5px solid #fff;
        border-radius: 100%;
        box-shadow: 0 2px 2px rgba(0, 0, 0, 0.3);
    }
</style>

  <div>
    @if(session('VoteStatus') != null)
        <br><div class="alert alert-success col-md-12">
              <h1 class="col-md-offset-1">{{session('VoteStatus')}}</h1>
        </div>
    @endif
    @if(session('already') != null)
        <br><div class="alert alert-danger col-md-12">
            <h1 class="col-md-offset-2">{{session('already')}}</h1>
        </div><br>
    @endif
  </div>
    
    <div>
      <p><i>Brought to you from the Office of the Social director, Adekunle Ajasin University Students Union</i></p>
    </div>
<h2 class="col col-md-12 col-md-offset-3"><a href="{{ route('votingnormal') }}"><span class="glyphicon glyphicon-log-in"></span> Cast Your Vote</a></h2>

  <div class ="row">
    

    <!--THE MIDDLE BLOCK-->
    <div class="col-md-8 text-center this-container">
      <div class="row">
        <h3><b>QUICK REVIEW OF EVENT</b></h3>
      </div>
      <div class="row">
        <!--ABOUT FOA-->
        <div class="col-md-6">
          <article>
              <h2><a href="#" title="About">About FOA</a></h2>
              <p class="paragraph">
                  <b>Face of AAUA</b> is a Social Event that comes up every <i>Second Semester</i> of
                  each Academic Session. The event being organized by the Office of The 
                  Social Director of The Adekunle Ajasin University Students Union is sponsored 
                  by the AAUA Students Union. The event is an annual event and since its inception 
                  in 2012, this event has commanded a lot of appraisal and positive comments from the 
                  student populace which made it to be tagged the “Biggest Social Event on Campus” by 
                  the students.
                  <br><br>This event is targeted to select a Beauty Queen and King that 
                  will each serve as an <b>Ambassador/Face of ADEKUNLE AJASIN UNIVERSITY, 
                  AKUNGBA AKOKO</b> through a beauty pageantry contest. Also, meritorious 
                  awards are presented to students who have performed excellently in their 
                  <b>Academic Fields, Human Relation and Social Activities</b> on campus.
              </p>
          </article>
        </div>

        <!--bREAKDOWN OF EVENT-->
        <div class="col-md-6">
          <article>
              <h2><a href="#" title="About">Breakdown of Event</a></h2>
              <p class="paragraph">
                  <b>FACE OF AAUA & AAUA CRYSTAL AWARD 2017</b> is a day programme. The beauty 
                  pageantry contest will run simultaneously along with the award presentation,
                  musical performance, and comedy performance.
                  <br><br>The FACE OF AAUA beauty pageantry contest is opened to all AAUA students 
                  (both males & females) who wish to partake in the contest. Winners of this contest 
                  will be selected based on their performances on stage, while at camping and percentage 
                  share of online voting. Each winner will be presented with various gifts such as; 
                  Generator, Student-sized Refrigerator, Wears etc. Cash prices, as well as Modeling 
                  contract to further develop their passion for Modeling and Fashion.
                  <br><br>The AAUA CRYSTAL AWARD 2017 is based on 
                  <a href="{{ route('voting') }}"><strong>Online Voting</strong> </a>
                  that will be strictly monitored after students are nominated for each category of the award. 
                  In addition, the award is also based on academic performance of students. Award plagues 
                  will be presented to students who emerge as winners in each category of the award.
              </p>
          </article>
        </div>
      </div>
      <br>
      
      <div class="row">
        <diV class="col-md-12 text-center">
          <h2><b>Meet our Contestants</b></h2>
        </div>
      </div>

      <div class="row">

        <!--MALE CONTESTANTS BEGIN HERE-->
        <div class="col-md-6 this-contain">
            <div class="row">
                <div class="col">
                    <h4><strong><a href="#" title="MALE CONTESTANTS">MALE Contestants</a></strong></h4>
                </div>
            </div>
          
            <div class="row">
                <div class="col-md-4">
                    <img class="profile-img" src="/images/contestants/m/1.jpg"style="width:70px">
                    <p>Name: Felix<br>No. 1 Male</p>
                </div>
                <div class="col-md-4">
                    <img class="profile-img" src="/images/contestants/m/2.jpg"style="width:70px">
                    <p>Name: Olumide<br>No. 2 Male</p>
                </div>
                <div class="col-md-4">
                    <img class="profile-img" src="/images/contestants/m/3.jpg" style="width:70px">
                    <p>Name: Femi<br>No. 3 Male</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <img class="profile-img" src="/images/contestants/m/4.jpg"style="width:70px">
                    <p>Name: Ebenezer<br>No. 4 Male</p>
                </div>
                <div class="col-md-4">
                    <img class="profile-img" src="/images/contestants/m/5.jpg"style="width:70px">
                    <p>Name: Joshua<br>No. 5 Male</p>
                </div><br>
            </div>
        </div>
        <!--MALE CONTESTANTS END HERE-->
        

        <!--FEMALE CONTESTANTS BEGIN HERE-->
        <div class="col-md-6 this-contain">
            <div class="row">
                <div class="col">
                    <h4><strong><a href="#" title="FEMALE CONTESTANTS">FEMALE Contestants</a></h4>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <img class="profile-img" src="/images/contestants/f/1.jpg"style="width:70px">
                    <p>Name: <br>No. 1 Female</p>
                </div>
                <div class="col-md-4">
                    <img class="profile-img" src="/images/contestants/f/2.jpg"style="width:70px">
                    <p>Name: Anointed<br>No. 2 Female</p>
                </div>
                <div class="col-md-4">
                    <img class="profile-img" src="/images/contestants/f/3.jpg" style="width:70px">
                    <p>Name: Olamide<br>No. 3 Female</p>
                </div>
            </div>

            <div class="row">
              <div class="col-md-4">
                  <img class="profile-img" src="/images/contestants/f/4.jpg"style="width:70px">
                  <p>Name: Esther<br>No. 4 Female</p>
              </div>
              <div class="col-md-4">
                  <img class="profile-img" src="/images/contestants/f/5.jpg"style="width:70px">
                  <p>Name: Faith<br>No. 5 Female</p>
              </div>
              <div class="col-md-4">
                  <img class="profile-img" src="/images/contestants/f/6.jpg"style="width:70px">
                  <p>Name: Taye<br>No. 6 Female</p>
              </div>
            </div>

            <div class="row">
              <div class="col-md-4">
                  <img class="profile-img" src="/images/contestants/f/7.jpg"style="width:70px">
                  <p>Name: Bisola<br>No. 7 Female</p>
              </div>
            </div>
        </div></br>
        <!--FEMALE CONTESTANTS END HERE-->
      </div>
    </div>
    <!--THE MIDDLE BLOCK ends HERE-->


    <!--ADVERT RIGHT HAND SIDE-->

        <div class="col col-md-4">
            <div class="col col-md-6">
                <div class="col-m d-2 text-center ad-container">
                    <br>
                    <div class="col-md-12">
                        <img s rc="/images/slide1.jpg" class="img-responsive" style="wid th:100%" alt="Advert Here">
                    </div>
                    <br><br>
                    {{--<div class="col-md-12">
                      <img s rc="/images/slide2.jpg" class="img-responsive" style="wi dth:100%" alt="Place Your Advert Here">
                      <p>Advert-2</p>
                    </div>
                    <br><br>
                    <div class="col-md-12">
                      <img s rc="/images/slide3.jpg" class="img-responsive" style="wi dth:100%" alt="Place Your Advert Here">
                      <p>Advert-3</p>
                    </div>
                    <br><br>
                    <div class="col-md-12">
                      <img s rc="/images/slide3.jpg" class="img-responsive" style="wi dth:100%" alt="Place Your Advert Here">
                      <p>Advert-4</p>
                    </div>
                    <div class="col-md-12">
                      <img s rc="/images/slide2.jpg" class="img-responsive" style="wi dth:100%" alt="Place Your Advert Here">
                      <p>Advert-5</p>
                    </div> --}}
                </div>
            </div>

            <div class="col col-md-6">
                <div class="col-m d-2 text-center ad-container">
                    <br>
                    <div class="col-md-12">
                        <img s rc="/images/slide1.jpg" class="img-responsive" style="wi dth:100%" alt="Advert Here">
                    </div>
                    <br><br>
                    {{--<div class="col-md-12">
                      <img src="/images/slide2.jpg" class="img-responsive" style="width:100%" alt="Image">
                      <p>Advert-2</p>
                    </div>
                    <br><br>
                    <div class="col-md-12">
                      <img src="/images/slide3.jpg" class="img-responsive" style="width:100%" alt="Image">
                      <p>Advert-3</p>
                    </div>
                    <br><br>
                    <div class="col-md-12">
                      <img src="/images/slide3.jpg" class="img-responsive" style="width:100%" alt="Image">
                      <p>Advert-4</p>
                    </div>
                    <div class="col-md-12">
                      <img src="/images/slide2.jpg" class="img-responsive" style="width:100%" alt="Image">
                      <p>Advert-5</p>
                    </div>
                    <br> --}}
                </div>
            </div>
        </div>

        <!--ADVERT RIGHT ends HERE-->


        <!--ADVERT LEFT HAND SIDE-->
        .

    <!--ADVERT LEFT ends HERE-->

  
</div>


    
@endsection
