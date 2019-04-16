<form method="POST" action="{{route('addContestant')}}">
  {{csrf_field()}}

  <div class="form-group">
    <p>Click on the button to see</p>
    <button type="button" class="btn btn-success" data-toggle="collapse" data-target="#Entertainment">Entertainment Category</button>
    <div id="Entertainment" class="collapse">
      <h2>Entertainment Category</h2>
        <div class="containe row">
          <h4>Best Music Producer</h4>
          @foreach($contestants as $contestant)
              <div class="col-md-2">
                  @if(($contestant{'SubCategory'} == "BMusic"))
                            <div class="contt">
                              <p class="Nickname">{{ $contestant -> Nick }}
                          <!--    <input onclick="BMusic('{{ $contestant -> Nick}}')" type="radio" class="Nicked" name="BMusic" value="{{ $contestant -> Nick}}"> -->
                            </div>
                  @endif
              </div>
          @endforeach
        </div>

        <div class="containe row">
         
        <h4>Best Record Label On Campus</h4>
          @foreach($contestants as $contestant)
              <div class="col-md-2">
                  @if(($contestant{'SubCategory'} == "BRec"))
                            <div class="contt">
                              <p class="Nickname">{{ $contestant -> Nick }}
                              <input onclick="BRec('{{ $contestant -> Nick}}')" type="radio" class="Nicked" name="BRec" value="{{ $contestant -> Nick}}">
                            </div>
                  @endif
              </div>
          @endforeach
        </div>

        <div class="containe row">
        
        <h4>AAUA Indiginous Song of the Year </h4>
          @foreach($contestants as $contestant)
              <div class="col-md-2">
                  @if(($contestant{'SubCategory'} == "IndSong"))
                            <div class="contt">
                              <p class="Nickname">{{ $contestant -> Nick }}
                              <input type="radio" class="Nicked" name="IndSong" value="{{ $contestant -> Nick}}">
                            </div>
                  @endif
              </div>
          @endforeach
        </div>

        <div class="containe row">
        
        <h4>Best Drama Group On Campus</h4>
          @foreach($contestants as $contestant)
              <div class="col-md-2">
                  @if(($contestant{'SubCategory'} == "BDrama"))
                            <div class="contt">
                              <p class="Nickname">{{ $contestant -> Nick }}
                              <input type="radio" class="Nicked" name="BDrama" value="{{ $contestant -> Nick}}">
                            </div>
                  @endif
              </div>
          @endforeach
          </div>

      <div class="containe row">
        
        <div class="form-group">
        <h4>Best Dance Group On Campus</h4>
          @foreach($contestants as $contestant)
              <div class="col-md-2">
                  @if(($contestant{'SubCategory'} == "BDance"))
                            <div class="contt">
                              <p class="Nickname">{{ $contestant -> Nick }}
                              <input type="radio" class="Nicked" name="BDance" value="{{ $contestant -> Nick}}">
                            </div>
                  @endif
              </div>
          @endforeach
        </div>
      </div>

      <div class="containe row">
        
        <div class="form-group">
        <h4>Best Commedian On Campus</h4>
          @foreach($contestants as $contestant)
              <div class="col-md-2">
                  @if(($contestant{'SubCategory'} == "BComed"))
                            <div class="contt">
                              <p class="Nickname">{{ $contestant -> Nick }}
                              <input type="radio" class="Nicked" name="BComed" value="{{ $contestant -> Nick}}">
                            </div>
                  @endif
              </div>
          @endforeach
        </div>
      </div>

      <div class="containe row">
        
        <div class="form-group">
        <h4>Best M.C. On Campus</h4>
          @foreach($contestants as $contestant)
              <div class="col-md-2">
                  @if(($contestant{'SubCategory'} == "BMc"))
                            <div class="contt">
                              <p class="Nickname">{{ $contestant -> Nick }}
                              <input type="radio" class="Nicked" name="BMc" value="{{ $contestant -> Nick}}">
                            </div>
                  @endif
              </div>
          @endforeach
        </div>
      </div>

    </div>
  </div>


  <div class="form-group">
    <p>Click on the button to see</p>
    <button type="button" class="btn btn-success" data-toggle="collapse" data-target="#Media">Media Category</button>
    <div id="Media" class="collapse">
      <h2>Media Category</h2>
        <div class="containe row">
          <h4>Best Campus Online Media Outlet</h4>
          @foreach($contestants as $contestant)
              <div class="col-md-2">
                  @if(($contestant{'SubCategory'} == "BMedia"))
                            <div class="contt">
                              <p class="Nickname">{{ $contestant -> Nick }}
                              <input type="radio" class="Nicked" name="BMedia" value="{{ $contestant -> Nick}}">
                            </div>
                  @endif
              </div>
          @endforeach
        </div>

        <div class="containe row">
        
        <h4>Best Blog Site of the Year</h4>
          @foreach($contestants as $contestant)
              <div class="col-md-2">
                  @if(($contestant{'SubCategory'} == "Bblog"))
                            <div class="contt">
                              <p class="Nickname">{{ $contestant -> Nick }}
                              <input type="radio" class="Nicked" name="Bblog" value="{{ $contestant -> Nick}}">
                            </div>
                  @endif
              </div>
          @endforeach
        </div>

        <div class="containe row">
        
        <h4>Best Online P.R. of the Year</h4>
          @foreach($contestants as $contestant)
              <div class="col-md-2">
                  @if(($contestant{'SubCategory'} == "BPr"))
                            <div class="contt">
                              <p class="Nickname">{{ $contestant -> Nick }}
                              <input type="radio" class="Nicked" name="BPr" value="{{ $contestant -> Nick}}">
                            </div>
                  @endif
              </div>
          @endforeach
        </div>


    </div>
  </div>


  <div class="form-group">
    <p>Click on the button to see</p>
    <button type="button" class="btn btn-success" data-toggle="collapse" data-target="#Official">Official Category</button>
    <div id="Official" class="collapse">
      <h2>Oficial Category</h2>
        <div class="containe row">
          <h4>Best AAUASU Exco</h4>
          @foreach($contestants as $contestant)
              <div class="col-md-2">
                  @if(($contestant{'SubCategory'} == "BExco"))
                            <div class="contt">
                              <p class="Nickname">{{ $contestant -> Nick }}
                              <input type="radio" class="Nicked" name="BExco" value="{{ $contestant -> Nick}}">
                            </div>
                  @endif
              </div>
          @endforeach
        </div>

        <div class="containe row">
        
        <h4>Best Faculty President</h4>
          @foreach($contestants as $contestant)
              <div class="col-md-2">
                  @if(($contestant{'SubCategory'} == "BPresi"))
                            <div class="contt">
                              <p class="Nickname">{{ $contestant -> Nick }}
                              <input type="radio" class="Nicked" name="BPresi" value="{{ $contestant -> Nick}}">
                            </div>
                  @endif
              </div>
          @endforeach
        </div>

        <div class="containe row">
        
        <h4>Best Faculty Social Director</h4>
          @foreach($contestants as $contestant)
              <div class="col-md-2">
                  @if(($contestant{'SubCategory'} == "BFSocial"))
                            <div class="contt">
                              <p class="Nickname">{{ $contestant -> Nick }}
                              <input type="radio" class="Nicked" name="BFSocial" value="{{ $contestant -> Nick}}">
                            </div>
                  @endif
              </div>
          @endforeach
        </div>

        <div class="containe row">
        
        <h4>Best Departmental Social Director</h4>
          @foreach($contestants as $contestant)
              <div class="col-md-2">
                  @if(($contestant{'SubCategory'} == "BDSocial"))
                            <div class="contt">
                              <p class="Nickname">{{ $contestant -> Nick }}
                              <input type="radio" class="Nicked" name="BDSocial" value="{{ $contestant -> Nick}}">
                            </div>
                  @endif
              </div>
          @endforeach
          </div>



    </div>
  </div>


  <div class="form-group">
    <p>Click on the button to see</p>
    <button type="button" class="btn btn-success" data-toggle="collapse" data-target="#Personality">Personality Category</button>
    <div id="Personality" class="collapse">
      <h2>Personality Category</h2>
        <div class="containe row">
          <h4>Mr Personality Of The Year</h4>
          @foreach($contestants as $contestant)
              <div class="col-md-2">
                  @if(($contestant{'SubCategory'} == "MrPerso"))
                            <div class="contt">
                              <p class="Nickname">{{ $contestant -> Nick }}
                              <input type="radio" class="Nicked" name="MrPerso" value="{{ $contestant -> Nick}}">
                            </div>
                  @endif
              </div>
          @endforeach
        </div>

        <div class="containe row">
        
        <h4>Most Sought After AAUAITE</h4>
          @foreach($contestants as $contestant)
              <div class="col-md-2">
                  @if(($contestant{'SubCategory'} == "MSAfter"))
                            <div class="contt">
                              <p class="Nickname">{{ $contestant -> Nick }}
                              <input type="radio" class="Nicked" name="MSAfter" value="{{ $contestant -> Nick}}">
                            </div>
                  @endif
              </div>
          @endforeach
        </div>

        <div class="containe row">
        
        <h4>Best Clique Of The Year</h4>
          @foreach($contestants as $contestant)
              <div class="col-md-2">
                  @if(($contestant{'SubCategory'} == "BClique"))
                            <div class="contt">
                              <p class="Nickname">{{ $contestant -> Nick }}
                              <input type="radio" class="Nicked" name="BClique" value="{{ $contestant -> Nick}}">
                            </div>
                  @endif
              </div>
          @endforeach
        </div>

        <div class="containe row">
        
        <h4>Hour Class of the Year</h4>
          @foreach($contestants as $contestant)
              <div class="col-md-2">
                  @if(($contestant{'SubCategory'} == "HClass"))
                            <div class="contt">
                              <p class="Nickname">{{ $contestant -> Nick }}
                              <input type="radio" class="Nicked" name="HClass" value="{{ $contestant -> Nick}}">
                            </div>
                  @endif
              </div>
          @endforeach
          </div>




    </div>
  </div>


  <div class="form-group">
    <p>Click on the button to see</p>
    <button type="button" class="btn btn-success" data-toggle="collapse" data-target="#MoneyGang">Money Gang Category</button>
    <div id="MoneyGang" class="collapse">
      <h2>Money Gang Category</h2>
        <div class="containe row">
          <h4>Money Bag of The Year</h4>
          @foreach($contestants as $contestant)
              <div class="col-md-2">
                  @if(($contestant{'SubCategory'} == "MBag"))
                            <div class="contt">
                              <p class="Nickname">{{ $contestant -> Nick }}
                              <input type="radio" class="Nicked" name="MBag" value="{{ $contestant -> Nick}}">
                            </div>
                  @endif
              </div>
          @endforeach
        </div>

      <div class="containe row">
        
        <h4>Most Expensive AAUAITE</h4>
          @foreach($contestants as $contestant)
              <div class="col-md-2">
                  @if(($contestant{'SubCategory'} == "MExp"))
                            <div class="contt">
                              <p class="Nickname">{{ $contestant -> Nick }}
                              <input type="radio" class="Nicked" name="MExp" value="{{ $contestant -> Nick}}">
                            </div>
                  @endif
              </div>
          @endforeach
        </div>

    </div>
  </div>


  <div class="form-group">
    <p>Click on the button to see</p>
    <button type="button" class="btn btn-success" data-toggle="collapse" data-target="#Fame">Fame Category</button>
    <div id="Fame" class="collapse">
      <h2>Fame Category</h2>
        <div class="containe row">
          <h4>Hall of Fame</h4>
          @foreach($contestants as $contestant)
              <div class="col-md-2">
                  @if(($contestant{'SubCategory'} == "HFame"))
                            <div class="contt">
                              <p class="Nickname">{{ $contestant -> Nick }}
                              <input type="radio" class="Nicked" name="HFame" value="{{ $contestant -> Nick}}">
                            </div>
                  @endif
              </div>
          @endforeach
        </div>

    </div>
  </div>


  <div class="form-group">
    <p>Click on the button to see</p>
    <button type="button" class="btn btn-success" data-toggle="collapse" data-target="#Beauty">Beauty Category</button>
    <div id="Beauty" class="collapse">
      <h2>Media Category</h2>
        <div class="containe row">
          <h4>Most Handsome AAUAITE	</h4>
          @foreach($contestants as $contestant)
              <div class="col-md-2">
                  @if(($contestant{'SubCategory'} == "MHands"))
                            <div class="contt">
                              <p class="Nickname">{{ $contestant -> Nick }}
                              <input type="radio" class="Nicked" name="MHands" value="{{ $contestant -> Nick}}">
                            </div>
                  @endif
              </div>
          @endforeach
        </div>

        <div class="containe row">
        
        <h4>Most Beautiful AAUAITE</h4>
          @foreach($contestants as $contestant)
              <div class="col-md-2">
                  @if(($contestant{'SubCategory'} == "MBeauty"))
                            <div class="contt">
                              <p class="Nickname">{{ $contestant -> Nick }}
                              <input type="radio" class="Nicked" name="MBeauty" value="{{ $contestant -> Nick}}">
                            </div>
                  @endif
              </div>
          @endforeach
        </div>

        <div class="containe row">
        
        <h4>Black Diamond of the Year</h4>
          @foreach($contestants as $contestant)
              <div class="col-md-2">
                  @if(($contestant{'SubCategory'} == "BDiamond"))
                            <div class="contt">
                              <p class="Nickname">{{ $contestant -> Nick }}
                              <input type="radio" class="Nicked" name="BDiamond" value="{{ $contestant -> Nick}}">
                            </div>
                  @endif
              </div>
          @endforeach
        </div>

        <div class="containe row">
        
        <h4>Miss Cute Of The Year</h4>
          @foreach($contestants as $contestant)
              <div class="col-md-2">
                  @if(($contestant{'SubCategory'} == "MCute"))
                            <div class="contt">
                              <p class="Nickname">{{ $contestant -> Nick }}
                              <input type="radio" class="Nicked" name="MCute" value="{{ $contestant -> Nick}}">
                            </div>
                  @endif
              </div>
          @endforeach
          </div>

      <div class="containe row">
        
      <div class="form-group">
        <h4>Most Endowed of the Year</h4>
          @foreach($contestants as $contestant)
              <div class="col-md-2">
                  @if(($contestant{'SubCategory'} == "MEndowed"))
                            <div class="contt">
                              <p class="Nickname">{{ $contestant -> Nick }}
                              <input type="radio" class="Nicked" name="MEndowed" value="{{ $contestant -> Nick}}">
                            </div>
                  @endif
              </div>
          @endforeach
        </div>
      </div>....

      <div class="containe row">
        
        <div class="form-group">
        <h4>Big-Bold & Beautiful</h4>
          @foreach($contestants as $contestant)
              <div class="col-md-2">
                  @if(($contestant{'SubCategory'} == "BBB"))
                            <div class="contt">
                              <p class="Nickname">{{ $contestant -> Nick }}
                              <input type="radio" class="Nicked" name="BBB" value="{{ $contestant -> Nick}}">
                            </div>
                  @endif
              </div>
          @endforeach
        </div>
      </div>

      <div class="containe row">
        
        <div class="form-group">
        <h4>Most Sophisticated Female</h4>
          @foreach($contestants as $contestant)
              <div class="col-md-2">
                  @if(($contestant{'SubCategory'} == "MSophFem"))
                            <div class="contt">
                              <p class="Nickname">{{ $contestant -> Nick }}
                              <input type="radio" class="Nicked" name="MSophFem" value="{{ $contestant -> Nick}}">
                            </div>
                  @endif
              </div>
          @endforeach
        </div>
      </div>

    </div>
  </div>

  
  <div class="form-group">
    <p>Click on the button to see</p>
    <button type="button" class="btn btn-success" data-toggle="collapse" data-target="#Creativity">Creativity Category</button>
    <div id="Creativity" class="collapse">
      <h2>Creativity Category</h2>
        <div class="containe row">
          <h4>Entrepreneur Of The Year</h4>
          @foreach($contestants as $contestant)
              <div class="col-md-2">
                  @if(($contestant{'SubCategory'} == "Ent"))
                            <div class="contt">
                              <p class="Nickname">{{ $contestant -> Nick }}
                              <input type="radio" class="Nicked" name="Ent" value="{{ $contestant -> Nick}}">
                            </div>
                  @endif
              </div>
          @endforeach
        </div>

        <div class="containe row">
        
        <h4>Innovative Student Of The Year</h4>
          @foreach($contestants as $contestant)
              <div class="col-md-2">
                  @if(($contestant{'SubCategory'} == "Inno"))
                            <div class="contt">
                              <p class="Nickname">{{ $contestant -> Nick }}
                              <input type="radio" class="Nicked" name="Inno" value="{{ $contestant -> Nick}}">
                            </div>
                  @endif
              </div>
          @endforeach
        </div>

        <div class="containe row">
        
        <h4>Writer Of The Year</h4>
          @foreach($contestants as $contestant)
              <div class="col-md-2">
                  @if(($contestant{'SubCategory'} == "Writer"))
                            <div class="contt">
                              <p class="Nickname">{{ $contestant -> Nick }}
                              <input type="radio" class="Nicked" name="Writer" value="{{ $contestant -> Nick}}">
                            </div>
                  @endif
              </div>
          @endforeach
        </div>
    </div>
  </div>

  
  <div class="form-group">
    <p>Click on the button to see</p>
    <button type="button" class="btn btn-success" data-toggle="collapse" data-target="#Services">Services Category</button>
    <div id="Services" class="collapse">
      <h2>Services Category</h2>
        <div class="containe row">
          <h4>Best Restaurant on Campus</h4>
          @foreach($contestants as $contestant)
              <div class="col-md-2">
                  @if(($contestant{'SubCategory'} == "BRest"))
                            <div class="contt">
                              <p class="Nickname">{{ $contestant -> Nick }}
                              <input type="radio" class="Nicked" name="BRest" value="{{ $contestant -> Nick}}">
                            </div>
                  @endif
              </div>
          @endforeach
        </div>

        <div class="containe row">
        
        <h4>Best Unisex Salon On Campus</h4>
          @foreach($contestants as $contestant)
              <div class="col-md-2">
                  @if(($contestant{'SubCategory'} == "BUnisex"))
                            <div class="contt">
                              <p class="Nickname">{{ $contestant -> Nick }}
                              <input type="radio" class="Nicked" name="BUnisex" value="{{ $contestant -> Nick}}">
                            </div>
                  @endif
              </div>
          @endforeach
        </div>

    </div>
  </div>


  <div class="form-group">
    <p>Click on the button to see</p>
    <button type="button" class="btn btn-success" data-toggle="collapse" data-target="#Politics">Politics Category</button>
    <div id="Politics" class="collapse">
      <h2>Politics Category</h2>
        <div class="containe row">
          <h4>Political Elite Of The Year</h4>
          @foreach($contestants as $contestant)
              <div class="col-md-2">
                  @if(($contestant{'SubCategory'} == "PElite"))
                            <div class="contt">
                              <p class="Nickname">{{ $contestant -> Nick }}
                              <input type="radio" class="Nicked" name="PElite" value="{{ $contestant -> Nick}}">
                            </div>
                  @endif
              </div>
          @endforeach
        </div>

        <div class="containe row">
        
        <h4>Most Political Conscious AAUAITE</h4>
          @foreach($contestants as $contestant)
              <div class="col-md-2">
                  @if(($contestant{'SubCategory'} == "MPConscious"))
                            <div class="contt">
                              <p class="Nickname">{{ $contestant -> Nick }}
                              <input type="radio" class="Nicked" name="MPConscious" value="{{ $contestant -> Nick}}">
                            </div>
                  @endif
              </div>
          @endforeach
        </div>

    </div>
  </div>


  <div class="form-group">
    <p>Click on the button to see</p>
    <button type="button" class="btn btn-success" data-toggle="collapse" data-target="#FBeauty">Freshers Beauty Category</button>
    <div id="FBeauty" class="collapse">
      <h2>Freshers Beauty Category</h2>
        <div class="containe row">
          <h4>Most Beautiful Fresher</h4>
          @foreach($contestants as $contestant)
              <div class="col-md-2">
                  @if(($contestant{'SubCategory'} == "MBeautyF"))
                            <div class="contt">
                              <p class="Nickname">{{ $contestant -> Nick }}
                              <input type="radio" class="Nicked" name="MBeautyF" value="{{ $contestant -> Nick}}">
                            </div>
                  @endif
              </div>
          @endforeach
        </div>

        <div class="containe row">
        
        <h4>Most Handsome Fresher</h4>
          @foreach($contestants as $contestant)
              <div class="col-md-2">
                  @if(($contestant{'SubCategory'} == "MHandsF"))
                            <div class="contt">
                              <p class="Nickname">{{ $contestant -> Nick }}
                              <input type="radio" class="Nicked" name="MHandsF" value="{{ $contestant -> Nick}}">
                            </div>
                  @endif
              </div>
          @endforeach
        </div>

    </div>
  </div>


  <div class="form-group">
    <p>Click on the button to see</p>
    <button type="button" class="btn btn-success" data-toggle="collapse" data-target="#FPersonality">Freshers Personality Category</button>
    <div id="FPersonality" class="collapse">
      <h2>Freshers Personality Category</h2>
        <div class="containe row">
          <h4>Most Popular Fresher</h4>
          @foreach($contestants as $contestant)
              <div class="col-md-2">
                  @if(($contestant{'SubCategory'} == "MPopF"))
                            <div class="contt">
                              <p class="Nickname">{{ $contestant -> Nick }}
                              <input type="radio" class="Nicked" name="MPopF" value="{{ $contestant -> Nick}}">
                            </div>
                  @endif
              </div>
          @endforeach
        </div>

        <div class="containe row">
        
        <h4>Most Friendly Fresher</h4>
          @foreach($contestants as $contestant)
              <div class="col-md-2">
                  @if(($contestant{'SubCategory'} == "MFrndF"))
                            <div class="contt">
                              <p class="Nickname">{{ $contestant -> Nick }}
                              <input type="radio" class="Nicked" name="MFrndF" value="{{ $contestant -> Nick}}">
                            </div>
                  @endif
              </div>
          @endforeach
        </div>

        <div class="containe row">
        
        <h4>Most Sophisticated Fresher</h4>
          @foreach($contestants as $contestant)
              <div class="col-md-2">
                  @if(($contestant{'SubCategory'} == "MSophF"))
                            <div class="contt">
                              <p class="Nickname">{{ $contestant -> Nick }}
                              <input type="radio" class="Nicked" name="MSophF" value="{{ $contestant -> Nick}}">
                            </div>
                  @endif
              </div>
          @endforeach
        </div>

        <div class="containe row">
        
        <h4>Most Expensive Fresher</h4>
          @foreach($contestants as $contestant)
              <div class="col-md-2">
                  @if(($contestant{'SubCategory'} == "MExpF"))
                            <div class="contt">
                              <p class="Nickname">{{ $contestant -> Nick }}
                              <input type="radio" class="Nicked" name="MExpF" value="{{ $contestant -> Nick}}">
                            </div>
                  @endif
              </div>
          @endforeach
          </div>

          <div class="containe row">
        
        <h4>Most Sought After Fresher</h4>
          @foreach($contestants as $contestant)
              <div class="col-md-2">
                  @if(($contestant{'SubCategory'} == "MSAfterF"))
                            <div class="contt">
                              <p class="Nickname">{{ $contestant -> Nick }}
                              <input type="radio" class="Nicked" name="MSAfterF" value="{{ $contestant -> Nick}}">
                            </div>
                  @endif
              </div>
          @endforeach
          </div>

      <div class="containe row">
        
        <div class="form-group">
        <h4>Most Outspoken Fresher</h4>
          @foreach($contestants as $contestant)
              <div class="col-md-2">
                  @if(($contestant{'SubCategory'} == "MOutF"))
                            <div class="contt">
                              <p class="Nickname">{{ $contestant -> Nick }}
                              <input type="radio" class="Nicked" name="MOutF" value="{{ $contestant -> Nick}}">
                            </div>
                  @endif
              </div>
          @endforeach
        </div>
      </div>

    </div>
  </div>


  <div class="form-group">
    <p>Click on the button to see</p>
    <button type="button" class="btn btn-success" data-toggle="collapse" data-target="#FSocial">Freshers Social Category</button>
    <div id="FSocial" class="collapse">
      <h2>Freshers Social Category</h2>
        <div class="containe row">
          <h4>Most Swaggilicious Fresher</h4>
          @foreach($contestants as $contestant)
              <div class="col-md-2">
                  @if(($contestant{'SubCategory'} == "MSwagF"))
                            <div class="contt">
                              <p class="Nickname">{{ $contestant -> Nick }}
                              <input type="radio" class="Nicked" name="MSwagF" value="{{ $contestant -> Nick}}">
                            </div>
                  @endif
              </div>
          @endforeach
        </div>

        <div class="containe row">
        <h4>Most Sociable Fresher</h4>
          @foreach($contestants as $contestant)
              <div class="col-md-2">
                  @if(($contestant{'SubCategory'} == "MSocF"))
                            <div class="contt">
                              <p class="Nickname">{{ $contestant -> Nick }}
                              <input type="radio" class="Nicked" name="MSocF" value="{{ $contestant -> Nick}}">
                            </div>
                  @endif
              </div>
          @endforeach
        </div>
    </div>
  </div>


  


  </div>
  
</div>