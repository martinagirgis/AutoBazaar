@extends("layouts.admin")
@section("pageTitle", "Koala Web Libraries")
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
                    <h5 class="mb-5 mt-3">{{$user->name}}</h5>

                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">الصورة</label>
                        <div class="col-sm-10">
                            <img width="300" height="300" src="{{asset('assets/site/images/users')}}/{{$user->image}}">
                        </div>
                    </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">الاسم الاول</label>
                            <div class="col-sm-10">
                                <div class="form-control">{{$user->fname}}</div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">الاسم الاوسط</label>
                            <div class="col-sm-10">
                                <div class="form-control" > {{$user->mname}}</div>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">الاسم الاخير</label>
                            <div class="col-sm-10">
                                <div class="form-control">{{$user->lname}}</div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">الاسم باللغة العربية</label>
                            <div class="col-sm-10">
                                <div class="form-control" >{{$user->arabic_name}}</div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">البريد الالكتروني</label>
                            <div class="col-sm-10">
                                <div class="form-control" >{{$user->email}}</div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">رقم الهاتف</label>
                            <div class="col-sm-10">
                                <div class="form-control" >{{$user->phone}}</div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">SCHS حالة</label>
                            <div class="col-sm-10">
                                <div class="form-control" >{{$user->schs}}</div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">ID Type</label>
                            <div class="col-sm-10">
                                <div class="form-control">{{$user->id_type}}</div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">ID</label>
                            <div class="col-sm-10">
                                <div class="form-control" >{{$user->id_number}}</div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">الجنسية</label>
                            <div class="col-sm-10">
                                <div class="form-control">{{$user->nationality}}</div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">تاريخ الميلاد</label>
                            <div class="col-sm-10">
                                <div class="form-control">{{$user->date_of_birth}}</div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Saudi Council Registeration - Optional</label>
                            <div class="col-sm-10">
                                <div class="form-control">{{$user->saudi_council_registeration}}</div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">المدينة</label>
                            <div class="col-sm-10">
                                <div class="form-control">{{$user->city}}</div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Academic Qualification</label>
                            <div class="col-sm-10">
                                <div class="form-control">{{$user->academic_qualification}}</div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Speciality</label>
                            <div class="col-sm-10">
                                <div class="form-control">{{$user->speciality}}</div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">العنوان</label>
                            <div class="col-sm-10">
                                <div class="form-control">{{$user->address}}</div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Work Place</label>
                            <div class="col-sm-10">
                                <div class="form-control">{{$user->work_place}}</div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">نبذة عني</label>
                            <div class="col-sm-10">
                                <div class="form-control">{{$user->about_me}}</div>
                            </div>
                        </div>
                                               
                       
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
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
                    <h5 class="mb-5 mt-3">{{$user->name}}</h5>

                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">First Name</label>
                        <div class="col-sm-10">
                            <img width="300" height="300" src="{{asset('assets/site/images/users')}}/{{$user->image}}">
                        </div>
                    </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">First Name</label>
                            <div class="col-sm-10">
                                <div class="form-control">{{$user->fname}}</div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Middle Name</label>
                            <div class="col-sm-10">
                                <div class="form-control" > {{$user->mname}}</div>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Last Name</label>
                            <div class="col-sm-10">
                                <div class="form-control">{{$user->lname}}</div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Arabic Name</label>
                            <div class="col-sm-10">
                                <div class="form-control" >{{$user->arabic_name}}</div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <div class="form-control" >{{$user->email}}</div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Phone Number</label>
                            <div class="col-sm-10">
                                <div class="form-control" >{{$user->phone}}</div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">SCHS Status</label>
                            <div class="col-sm-10">
                                <div class="form-control" >{{$user->schs}}</div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">ID Type</label>
                            <div class="col-sm-10">
                                <div class="form-control">{{$user->id_type}}</div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">ID</label>
                            <div class="col-sm-10">
                                <div class="form-control" >{{$user->id_number}}</div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Nationality</label>
                            <div class="col-sm-10">
                                <div class="form-control">{{$user->nationality}}</div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Date of Birth</label>
                            <div class="col-sm-10">
                                <div class="form-control">{{$user->date_of_birth}}</div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Saudi Council Registeration - Optional</label>
                            <div class="col-sm-10">
                                <div class="form-control">{{$user->saudi_council_registeration}}</div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">City</label>
                            <div class="col-sm-10">
                                <div class="form-control">{{$user->city}}</div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Academic Qualification</label>
                            <div class="col-sm-10">
                                <div class="form-control">{{$user->academic_qualification}}</div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Speciality</label>
                            <div class="col-sm-10">
                                <div class="form-control">{{$user->speciality}}</div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Address</label>
                            <div class="col-sm-10">
                                <div class="form-control">{{$user->address}}</div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Work Place</label>
                            <div class="col-sm-10">
                                <div class="form-control">{{$user->work_place}}</div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Brief about me</label>
                            <div class="col-sm-10">
                                <div class="form-control">{{$user->about_me}}</div>
                            </div>
                        </div>
                                            
                    
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
@endif
@endsection

@section("script")
<script src="{{asset("libs/tinymce/tinymce.min.js")}}"></script>
<script src="{{asset("js/pages/form-editor.init.js")}}"></script>
<script src="{{asset("js/codeColor.js")}}"></script>

@endsection