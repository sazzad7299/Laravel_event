@extends('backend.layouts.master')


@section('main_content')
 <!-- Begin Page Content -->
 <div class="container-fluid">

    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">All Produts</h5>
                <div class="table-responsive">
                    <table id="zero_config" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Banner ID</th>
                          <th>Title</th>
                          <th>Position</th>
                          <th>Image</th>
                          <th>Status</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($banners as $banner)
                        <tr class="gradeX">
                          <td class="center">{{ $banner->id }}</td>
                          <td class="center">{{ $banner->title }}</td>
                          <td>
                            @if($banner->position==0) Middle @endif
                            @if($banner->position==1) TOP-LEFT @endif
                            @if($banner->position==2) TOP-RIGHT @endif
                            @if($banner->position==3) BUTTOM-LEFT @endif
                            @if($banner->position==4) BUTTOM-RIGHT  @endif
                            
                          </td>
                          <td class="center">
                            @if(!empty($banner->image))
                            <img src="{{ asset('assets/img/slider/'.$banner->image) }}" style="width:250px;" alt="">
                            @endif
                          </td>
                          <td class="center">@if($banner->status==1) Active @else Inactive @endif</td>
                          <td class="center">
                            <a href="{{ route('editslider',$banner->id) }}" class="btn btn-primary btn-mini"><em class="far fa-edit"></em></a> 
                            <a  href="{{ route('deleteSlider',$banner->id) }}" class="btn btn-danger btn-mini"><em class="far fa-trash-alt"></em></a>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                        <tfoot>
                            <tr>
                              <th>Banner ID</th>
                              <th>Title</th>
                              <th>Position</th>
                              <th>Image</th>
                              <th>Status</th>
                              <th>Actions</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>

            </div>
          </div>
    </div>
</div>
<!-- /.container-fluid -->
    
@endsection