@extends('layouts.front')

@section('content')
  <div class='container'>
      <hr color="#c0c0c0">
      
         <div class="row">
             <div class="profile col-md-10 mx-auto">
                  <div class="row">
                     <div class="col-md-6">
                         <div class="caption mx-auto">
                            <div class="name p-2">
                                <h2>名前</h2>
                                <p class="name mx-auto">{{ str_limit($profile->name, 20)}}</h1>
                            </div>
                         </div>
                     </div>
                     
                     <div class="col-md-6">
                          <h2>性別</h2>
                          <p class="gender mx-auto">{{ str_limit($profile->gender, 10)}}</p>
                     </div>
                     
                     
                     <div class="col-md-6">
                          <h2>趣味</h2>
                          <p class="hobby mx-auto">{{ str_limit($profile->hobby, 300)}}</p>
                     </div>
                     
                     
                     <div class="col-md-6">
                          <h2>自己紹介</h2>
                          <p class="introduction mx-auto">{{ str_limit($profile->introduction, 650)}}</p>
                     </div>
                     
         </div>
         </div>
         </div> 
         </div>
        
@endsection
                            
    
      
         
         