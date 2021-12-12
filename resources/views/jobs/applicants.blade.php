@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                @foreach($applicants as applicant)
                <div class="card-header">{{$applicant->title}}</div>

                <div class="card-body">
                    @foreach($applicant->users as user)
                    <table class="table">
                        <thead>
                          <tr>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            
                            <td>{{}}</td>
                            <td>Ot</td>
                            <td>@mdo</td>
                          </tr>
                          
                        </tbody>
                      </table>
                </div>
                @endforeach
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
