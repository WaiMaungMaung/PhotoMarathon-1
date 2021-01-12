@extends('layouts.admin_layout')
@section('content')

<div class="">
    <div class="row justify-content-center">
        <div class="col-2" id="admin_row">

            <a class="nav-link text-white admin-li" style="text-align: center;" href="{{ url('/enroll/student')}}">{{ __('Student ') }} </a>
        </div>
        <div class="col-2"  id="admin_row">

            <a class="nav-link text-white admin-li" style="text-align: center;" href="{{ url('/enroll/theme1')}}">{{ __('Open Category Theme 1 ') }} </a>
        </div>
        <div class="col-2"  id="admin_row">

            <a class="nav-link text-white admin-li" style="text-align: center;" href="{{ url('/enroll/theme2')}}">{{ __('Open Category Theme 2 ') }}</a>
        </div>
        <div class="col-2"></div>
        <div class="col-2">

            <form action="" >
    
                        
                <div class="form-inline row">
                    <input type="text" name="q" placeholder="Search...!" class="form-control"/>
                    <input type="submit" class="btn btn-danger" value="Search"/>
                </div>
            </form>
        </div>
        </div>
    </div>
</div>
<br>
<h3 style="text-transform: capitalize;
margin-left: 120px;color: #800000;"><strong>
@if ($category!='student')
    Open Category

@endif

    {{$category}} - Enrolled List</strong>
</h3>
            <div class="row justify-content-center">
                
                <div class="col-md-10">
                    
                    <table class="table">
                        <thead class="thead-light">
                            <th scope="col">CPM_ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Camera Brand</th>
                            <th scope="col">Enrolled at</th>
                            <th scope="col">Status</th>
    
    
                        </thead>
                        <tbody>
                        
                        
                        @foreach($data as $user)
                        <tr>
                            <td>{{$user->cpm}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->camera_brand}}</td>
                            <td>{{$user->enroll_at}}</td>
                            {{-- <td><img src="{{url("/payslips/$user->image")}}" alt="img" id="payslip_img"></td> --}}
                            
                        </tr>
                        @endforeach
                      <p>Total User: {{$data->count()}}</p>  
                    </tbody>
                    </table>
                   <div class="d-flex justify-content-center">
                    {{ $data->links() }}
                </div>
                
                
    
            </div>
        

@endsection