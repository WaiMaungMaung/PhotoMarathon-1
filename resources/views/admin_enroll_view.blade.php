@extends('layouts.admin_layout')
@section('content')

<nav class="navbar navbar-expand-md navbar-light shadow-sm admin-nav" id="">

    <ul class="navbar-nav mr-auto admin-ul">                                
                               
                                
        <li class="nav-item admin-li">
            <a class="nav-link" href="{{ url('/enroll/student')}}">{{ __('Student ') }} </a>
        </li>
        <li class="nav-item admin-li">
            <a class="nav-link"  href="{{ url('/enroll/theme1')}}">{{ __('Open Category Theme 1 ') }} </a>
        </li>
        <li class="nav-item admin-li">
            <a class="nav-link" href="{{ url('/enroll/theme2')}}">Open Category Theme 2 </a>
        </li>
    
    </ul>
    </nav>
        
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <form action="" >
    
                        
                        <div class="form-group row">
                            <input type="text" name="q" placeholder="Search...!" class="form-control col-10"/>
                            <input type="submit" class="btn btn-primary col-2" value="Search"/>
                        </div>
                    </form>
                </div>
                <div class="col-md-10">
                    <table class="table">
                        <thead class="thead-dark">
                            <td scope="col">CPM_ID</td>
                            <td scope="col">Name</td>
                            <td scope="col">Camera Brand</td>
                            <td scope="col">Enrolled at</td>
                            <td scope="col">Status</td>
    
    
                        </thead>
                        
                        
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
    
                    </table>
                   <div class="d-flex justify-content-center">
                    {{ $data->links() }}
                </div>
                
                
    
            </div>
        

@endsection