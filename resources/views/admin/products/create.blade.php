@extends("layouts.admin")
@section("pageTitle", "Instructors")
@section("content")
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
                <h5 class="mb-5 mt-3">اضافة منتج جديد</h5>

                <form method="post" action="{{route('products.store')}}" enctype="multipart/form-data">
                    @csrf

                    {{-- 1 for cars and heavy equipment --}}
                    <input type="hidden" name="category_id" value="1">

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">نوع الاعلان</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="sellType" name="sell_type_id">
                                @foreach($sellTypes as $sellType)
                                    <option value="{{$sellType->id}}">{{$sellType->Title_ar}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">القسم</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="section_id" name="section_id">
                                {{-- @foreach($sections as $section)
                                    <option value="{{$section->id}}">{{$section->Title_ar}}</option>
                                @endforeach --}}
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">التصنيف</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="type_category_id" name="type_category_id">
                                {{-- @foreach($typeCategories as $typeCategory)
                                    <option value="{{$typeCategory->id}}">{{$typeCategory->Title_ar}}</option>
                                @endforeach --}}
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">النوع</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="make_id" name="make_id">
                                {{-- @foreach($makes as $make)
                                    <option value="{{$make->id}}">{{$make->Title_ar}}</option>
                                @endforeach --}}
                            </select>
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">المدينة باللغة العربية</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" id="example-text-input" name="Title_ar">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">المدينة باللغة الانجليزية</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" id="example-text-input" name="Title_en">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">المدينة باللغة الكردية</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" id="example-text-input" name="Title_ku">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <div class="col-12 text-center">
                            <button type="submit" class="btn btn-dark w-25">اضافة</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->
@endsection

<script
  src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
  integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8="
  crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
        $(document).ready(function(){
            $('#sellType').on('change', function() {
               var id = $(this).val();
               console.log(id);
               $.ajax({
               url:'http://127.0.0.1:8000/getSections',
                   method:"get",
                   data:{sellTypeId:id},
                   dataType:"json",
                   headers: {
                       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                   },
                   success:function(data){ 
                    
                    var sections = document.getElementById('section_id');
                    var typeCategories = document.getElementById('type_category_id');
                    var makes = document.getElementById('make_id');
                    
                    sections.innerHTML = "";
                    typeCategories.innerHTML = "";
                    makes.innerHTML = "";

                    data['sections'].forEach(section => sections.innerHTML += "<option value="+section.id+">"+section.Title_ar+"</option>");
                    data['typeCategories'].forEach(typeCategory => typeCategories.innerHTML += "<option value="+typeCategory.id+">"+typeCategory.Title_ar+"</option>");
                    data['makes'].forEach(make => makes.innerHTML += "<option value="+make.id+">"+make.Title_ar+"</option>");
                    
                    //console.log(typeof data);

                   // console.log(data);
                   }
               });
   
           });
       });
   </script>
