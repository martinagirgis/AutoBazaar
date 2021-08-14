@extends("layouts.admin")
@section("pageTitle", "Ejada")
@section("style")
    <link href="{{asset("assets/admin/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css")}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset("assets/admin/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css")}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset("assets/admin/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css")}}" rel="stylesheet" type="text/css"/>

@endsection
@section("content")
@if(LaravelLocalization::getCurrentLocale() == 'ar')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div>
                    @endif
                    @if ($message = Session::get('error'))
                    <div class="alert alert-danger alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>    
                        <strong>{{ $message }}</strong>
                    </div>
                    @endif
                    <h5 class="">الطلاب</h5>
                    
                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                        <thead>
                        <tr>
                            <th>الصورة</th>
                            <th>الاسم</th>
                            <th>البريد الالكتروني</th>
                            <th>دوراته</th>
                            <th>التحكم</th>
                        </tr>
                        </thead>

                        <tbody>
                            @foreach($users as $user)
     
                            <tr>
                                <th>{{$user->image}}</th>
                                <th>{{$user->fname}} {{$user->mname}} {{$user->lname}}</th>
                                <th>{{$user->email}}</th>
                                <th>
                                    <a class="btn btn-dark col-sm-12" data-toggle="modal" data-target="#course{{$user->id}}">عرض</a><br>
                                </th>
                            <th> 
                                <center>
                                    <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
        
                                        <div class="btn-group" role="group">
                                            <button id="btnGroupDrop1" type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                التحكم
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                <a class="btn btn-dark col-sm-12"  href="{{route('users.show',['user'=>$user->id])}}">عرض</a><br>
                                                <a class="btn btn-dark col-sm-12"  href="{{route('users.edit',['user'=>$user->id])}}">تعديل</a>
                                                <form method="post" action="{{route('users.destroy',['user'=>$user->id])}}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-dark col-sm-12" >حذف</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </center>
                            </th>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div> <!-- end col --> 
    </div>
    @foreach($users as $userr)
    <div class="modal fade" id="course{{$userr->id}}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="courseLabel{{$userr->id}}" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            <div class="modal-header backgroundColor text-white" style="border:none">
                <h5 class="modal-title" id="courseLabel{{$userr->id}}">{{$userr->fname}} الدورات</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body backgroundColorSec p-5">
                <div class="row">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                            <th scope="col">الدورة</th>
                            <th scope="col">التاريخ</th>
                            <th scope="col">الوقت</th>
                            </tr>
                        </thead>
                        <tbody>
                            @for($i = 0; $i < count($userr->userCourses); $i++)
                                <tr>
                                    <td>{{$userr->userCourses[$i]->course->name}}</td>
                                    <td>{{$userr->userCourses[$i]->time->timeDate->date}}</td>
                                    <td>{{$userr->userCourses[$i]->time->time}}</td>
                                </tr>
                            @endfor
                        </tbody>
                    </table>
                </div>
                
            </div>
            
            </div>
        </div>
    </div>
    @endforeach
@else
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div>
                    @endif
                    @if ($message = Session::get('error'))
                    <div class="alert alert-danger alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>    
                        <strong>{{ $message }}</strong>
                    </div>
                    @endif
                    <h5 class="">Users</h5>
                    
                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                        <thead>
                        <tr>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>his course</th>
                            <th>Controls</th>
                        </tr>
                        </thead>

                        <tbody>
                            @foreach($users as $user)
    
                            <tr>
                                <th>{{$user->image}}</th>
                                <th>{{$user->fname}} {{$user->mname}} {{$user->lname}}</th>
                                <th>{{$user->email}}</th>
                                <th>
                                    <a class="btn btn-dark col-sm-12" data-toggle="modal" data-target="#course{{$user->id}}">Show</a><br>
                                </th>
                            <th> 
                                <center>
                                    <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
        
                                        <div class="btn-group" role="group">
                                            <button id="btnGroupDrop1" type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Controllers
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                <a class="btn btn-dark col-sm-12"  href="{{route('users.show',['user'=>$user->id])}}">Show</a><br>
                                                <a class="btn btn-dark col-sm-12"  href="{{route('users.edit',['user'=>$user->id])}}">Edit</a>
                                                <form method="post" action="{{route('users.destroy',['user'=>$user->id])}}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-dark col-sm-12" >Delete</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </center>
                            </th>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div> <!-- end col --> 
    </div>
    @foreach($users as $userr)
    <div class="modal fade" id="course{{$userr->id}}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="courseLabel{{$userr->id}}" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            <div class="modal-header backgroundColor text-white" style="border:none">
                <h5 class="modal-title" id="courseLabel{{$userr->id}}">{{$userr->fname}} Courses</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body backgroundColorSec p-5">
                <div class="row">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                            <th scope="col">Course</th>
                            <th scope="col">Date</th>
                            <th scope="col">Time</th>
                            </tr>
                        </thead>
                        <tbody>
                            @for($i = 0; $i < count($userr->userCourses); $i++)
                                <tr>
                                    <td>{{$userr->userCourses[$i]->course->name}}</td>
                                    <td>{{$userr->userCourses[$i]->time->timeDate->date}}</td>
                                    <td>{{$userr->userCourses[$i]->time->time}}</td>
                                </tr>
                            @endfor
                        </tbody>
                    </table>
                </div>
                
            </div>
            
            </div>
        </div>
    </div>
    @endforeach
@endif
@endsection
@section("script")
<script src="{{asset("assets/admin/libs/datatables.net/js/jquery.dataTables.min.js")}}"></script>
<script src="{{asset("assets/admin/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js")}}"></script>
<script src="{{asset("assets/admin/libs/datatables.net-buttons/js/dataTables.buttons.min.js")}}"></script>
<script src="{{asset("assets/admin/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js")}}"></script>
<script src="{{asset("assets/admin/libs/jszip/jszip.min.js")}}"></script>
<script src="{{asset("assets/admin/libs/pdfmake/build/pdfmake.min.js")}}"></script>
<script src="{{asset("assets/admin/libs/pdfmake/build/vfs_fonts.js")}}"></script>
<script src="{{asset("assets/admin/libs/datatables.net-buttons/js/buttons.html5.min.js")}}"></script>
<script src="{{asset("assets/admin/libs/datatables.net-buttons/js/buttons.print.min.js")}}"></script>
<script src="{{asset("assets/admin/libs/datatables.net-buttons/js/buttons.colVis.min.j")}}"></script>
<script src="{{asset("assets/admin/libs/datatables.net-responsive/js/dataTables.responsive.min.js")}}"></script>
<script src="{{asset("assets/admin/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js")}}"></script>
<script src="{{asset("assets/admin/js/pages/datatables.init.js")}}"></script>
@endsection