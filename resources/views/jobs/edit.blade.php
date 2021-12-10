@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <div class="card">
        <div class="card-header">Update a job</div>
        <div class="card-body">
            <form action="{{route('job.update',[$job->id])}}" method="POST">@csrf
            <div class="form-group">
            <label for="title">Title:</label>

           
            <input type="text" name="title" class="form-control
            {{$errors->has('title') ?'is-invalid' :''}}" value="{{$jobs->title}}">
            @if($errors->has('title'))
                <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('title') }}</strong>
                </span>
             @endif
            </div>
            <div class="form-group">
            <label for="description">Description:</label>
            <textarea name="description" class="form-control  {{$errors->has('description') ?'is-invalid' :''}}" value="{{$job->description}}"></textarea>
            @if($errors->has('description'))
            <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('description') }}</strong>
            </span>
         @endif
            </div>
            <div class="form-group">
            <label for="role">Roles:</label>
            <textarea name="roles" class="form-control"></textarea>
            @if($errors->has('roles'))
            <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('roles') }}</strong>
            </span>
         @endif
            </div>
            <div class="form-group">
            <label for="category">Category:</label>
            <select name="category_id" class="form-control">
            @foreach(App\Models\Category::all() as $cat)
            <option value="{{$cat->id}}"{{$cat->id==$job->category_id?'selected':''}}>{{$cat->name}}</option>
            @endforeach
            </select>
            </div>
            <div class="form-group">
            <label for="position">Position:</label>
            <input type="text" name="position" class="form-control">
            </div>
            <div class="form-group">
            <label for="address">Address:</label>
            <input type="text" name="address" class="form-control">

            </div>
            <div class="form-group">
            <label for="type">Type:</label>
           <select class="form-control" name="type">
           <option value="fulltime"{{$job->type=='fulltime'?'selected':''}}>fulltime</option>
           <option value="parttime"{{$job->type=='parttime'?'selected':''}}>parttime</option>
           <option value="casual"{{$job->type=='casual'?'selected':''}}>casual</option>
           
           </select>

            </div>
            <div class="form-group">
            <label for="status">Status:</label>
           <select class="form-control" name="status">
            <option value="1"{{$job->status<i class="fa fa-usb" aria-hidden="true"></i>=='1'?'selected':''}}>Live</option>
            <option value="0"{{$job->status=='0'?'selected':''}}>Draft</option>

           </select>

            </div>
            <div class="form-group">
            <label for="lastdate">Last date:</label>
            <input type="date" name="last_date" class="form-control">
            </div>
            <div class="form-group">
            <button type="submit" class="btn btn-dark">Submit</button>
            </div>
            @if(Session::has('message'))
                <div class="alert alert-success">
                {{Session::get('message')}}
                </div>
            @endif
            
        </div>
    </form>
    </div>
    </div>
    </div>
</div>
@endsection
