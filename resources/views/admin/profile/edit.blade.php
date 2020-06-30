<!--<!DOCTYPE html>
<html>
    
    
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width,initial-scale=1">
    
      <title>Myプロフィール編集画面</title>
    </head>    
    
    <body>
        <h1>Myプロフィール編集画面</h1>
    </body>
    
</html>  -->



@extends(layouts.admin)
@section('title','プロフィールの編集')
@section('content')
   <div class="container">
      <div class="row">
        
      <div class="col-md-8 mx-auto">
          <h2>プロフィールの編集</h2>
           <form action="{{ action('Admin\ProfileController@update') }}" method="post" enctype="multipart/form-data">
            
             @if (count($errors) > 0)
             <ul>
               @foreach($errors->all() as $e)
                   <li>{{ $e }}</li>
               @endforeach
             </ul>
             @endif
      
        
             <div class="form-group row">
                <label class="col-md-2">氏名</label>
                <div class="col-md-10">
                <input type="text" class="form-control" name="name" value="{{ $profile_form->name }}">
                </div>
             </div>
      
             <div class="form-group row">
               <label class="col-md-2">性別</label>
               <div class="col-md-10">
               <input type="text" class="form-control" name="gender" value="{{ $profile_form->gender }}">
               </div>
             </div>
      
             <div class="form-group row">
               <label class="col-md-2">趣味</label>
               <div class="col-md-10">
               <textarea class="form-control" name="hobby" rows="3">$profile_form->hobby</textarea>
               </div>
             </div>
      
             <div class="form-group row">
              <label class="col-md-2">自己紹介</label>
              <div class="col-md-10">
              <textarea class="form-control" name="introduction" rows="10">$profile_form->introduction</textarea>
              </div>
              
             </div>
             <div class="form-group row">
                <div class="col-md-10">
                <input type="hidden" name="id" value="{{ $profile_form->id }}">    
                        {{ csrf_field() }}
                <input type="submit" class="btn btn-primary" value="更新">
             
              
               </div>
             </div>
           </form>
      </div>
      
      </div>
    </div>
    @endsection