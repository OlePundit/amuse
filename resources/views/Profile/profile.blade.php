
@extends('layouts.app')

@section('content')
<div class="section-profile">
<div class="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-4">
                    <div class="card">
                        <div class="card-body">
                        <div class="row">
                                <div class="col-6">
                                    <h5 class="">Welcome <b>{{ $user->name}}</b></h5>
                                    
                                    <p class="">Manage your Children</p>
                            
<h4>    Children</h4> 




                                    <div class="mt-4">
                                        <a href="/children/create"style="border:1px solid #0F0B09; border-radius:8px;padding:7px;" class="mx-1 " >Add a Child</button> </a> 

                                    </div>
                                    
                                </div>

                                <div class="col-5 ml-auto">
                                    <div>
                                        <img src="files/profileimages/" alt="" class="img-fluid" style="border-radius:50%;box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);border:4px solid #f1f1f1;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>

            

                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-body">
                            <div class="float-right ml-2">
                            </div>
                            <h5 class="header-title mb-4 ">Children</h5>                                           
                        
                            <div class="table-responsive">
                                <table class="table table-centered table-hover mb-0">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="">Child #</th>
                                            <th scope="col" class="">First name</th>
                                            <th scope="col" class="">Second name</th>                                                          
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @if($user->children) 
                                    @php
                                    $childNumber = 1; // Initialize the child number counter
                                    @endphp  
                                    @foreach($user->children as $children)
                                        <tr>
                                            <td scope="row">
                                                {{ $childNumber }}
                                            </td>
                                            
                                            <td class="">{{$children->name_of_child}}</td>
                                                <td class="">{{$children->child_last_name}}</td>
                                            
                        
                                            
                                        </tr>
                                        @php
                                        $childNumber++; // Increment the child number counter
                                        @endphp 
                                    @endforeach
                                    @else
<h5 align="center" style="color:#3051d3;font-weight:900;font-family:arial;">You have not posted any Jobs Yet</h5>
                                    @endif
                                    
                                    </tbody>
                                </table>
                            </div>

                            
                        </div>
                    </div>
                </div>
                <div class="text-dark"></div>
            </div>
            <!-- end row -->



        </div> <!-- container-fluid -->
    </div>
</div>

    

                    
            

 
@endsection
