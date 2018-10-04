@extends('adminpanel.layout')

@section('head')
<title>All Pages | abTutorFinder</title>
@endsection


@section('content')
  <div class="main-panel">
        <div class="content-wrapper white">
            <div class="page-header">
              <h3 class="page-title">
                All Pages 
                <br><br>
                <a href="{{asset('')}}admin/add-page" class="btn btn-success" target="blank">Add New Page</a>
              </h3>
            </div>
          <div class="row grid-margin off " style="background-color: #fff">

  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>Page Name</th>
                          <th>Page Link</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($datas as $data)
                        <tr>
                          <td>{{$data->title}}</td>
                          <td><a href="{{asset('')}}{{$data->slug}}" target="blank">{{asset('')}}{{$data->slug}}</a></td>
                          <td><a href="{{asset('')}}admin/update-page/{{$data->slug}}" class="btn btn-info"  target="blank">Edit</a></td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
          </div>
        </div>
      </div>
@endsection


@section('jsblock')

@endsection

