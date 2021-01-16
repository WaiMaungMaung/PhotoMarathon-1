@extends('layouts.admin_layout')
@section('content')

    <div class="">
    <div class="row justify-content-center">
        <div class="col-2" id="admin_row">

            <a class="nav-link text-white admin-li" style="text-align: center;" href="{{ url('/submit/student')}}">{{ __('Student ') }} </a>
        </div>
        <div class="col-2"  id="admin_row">

            <a class="nav-link text-white admin-li" style="text-align: center;" href="{{ url('/submit/theme1')}}">{{ __('Open Category Theme 1 ') }} </a>
        </div>
        <div class="col-2"  id="admin_row">

            <a class="nav-link text-white admin-li" style="text-align: center;" href="{{ url('/submit/theme2')}}">{{ __('Open Category Theme 2 ') }}</a>
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

            {{$category}} - Submission List</strong>
        </h3>
        </div>
            <div class="row justify-content-center">
                <div class="col-md-10">
                    
                    <table class="table">
                        <thead class="thead-light">
                            <th scope="col">CPM_ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Camera Brand</th>
                            <th scope="col">Submit at</th>
                            <th scope="col">Status</th>
    
    
                        </thead>
                        <tbody>
                            {{-- <pre>{{print_r($data)}}</pre> --}}
                        
                        @foreach($data as $user)
                        <tr>
                            <td>{{$user->cmp}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->camera_brand}}</td>
                            <td>{{$user->submitTime}}</td>
                            <td>{{$user->themeCAT}}</td>
                            {{-- <td><img src="{{url("/payslips/$user->image")}}" alt="img" id="payslip_img"></td> --}}
                            
                        </tr>
                        @endforeach
                      <p>Total User: {{$data->count()}}</p>  
                    </tbody>
                    </table>
                   <div class="d-flex justify-content-center">
                    {{ $data->links() }}
                </div>

                <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    
                    <a class="btn btn-secondary" href="{{ route('submissionExport',['category'=>$category]) }}">Export {{$category}} Submission Data</a>
                </form>
                
                
    
            </div>
        

@endsection