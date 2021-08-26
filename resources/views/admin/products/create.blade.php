@extends("layouts.admin")
@section("pageTitle", "Instructors")
@section('styleChart')
<link href="{{asset("assets/admin/libs/select2/css/select2.min.css")}}" rel="stylesheet" type="text/css"/>
@endsection
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
                            <select class="form-control" id="sellType" name="sell_type_id" required>
                                <option>اختر نوع الاعلان</option>
                                @foreach($sellTypes as $sellType)
                                    <option value="{{$sellType->id}}">{{$sellType->Title_ar}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group row" id="sections">
                        
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">التصنيف</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="type_category_id" name="type_category_id" required>
                                
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">النوع</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="make_id" name="make_id" required>
                                
                            </select>
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">الفئة</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" id="example-text-input" name="model" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">الحالة</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="status_id" name="status_id" required>
                                @foreach($statuses as $status)
                                    <option value="{{$status->id}}">{{$status->Title_ar}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">سنة الصنع</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="year" name="year" required>
                                @for($i = date('Y')-50 ; $i <= date('Y'); $i++ )
                                    <option value="{{$i}}">{{$i}}</option>
                                @endfor
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">ناقل الحركة</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="gearbox_id" name="gearbox_id" required>
                                @foreach($gearboxes as $gearbox)
                                    <option value="{{$gearbox->id}}">{{$gearbox->Title_ar}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">نوع الوقود</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="fuel_type_id" name="fuel_type_id" required>
                                @foreach($fuels as $fuel)
                                    <option value="{{$fuel->id}}">{{$fuel->Title_ar}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group row" id="distance">
                        
                    </div>

                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">اللون</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="color" id="example-text-input" name="color" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">طرق الدفع</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="payment_method" name="payment_method" required>
                                <option value="cash">كاش</option>
                                <option value="installment">اقساط</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">المدينة</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="city_id" name="city_id" required>
                                <option>اختر المدينة</option>
                                @foreach($cities as $city)
                                    <option value="{{$city->id}}">{{$city->Title_ar}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">الحي</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="district_id" name="district_id" required>
                                
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="control-label col-sm-2">الإضافات</label>
                        <div class="col-sm-10">
                        <select class="select2 form-control select2-multiple" multiple="multiple" name="advandage_id[]" multiple data-placeholder="اختر الإضافات">
                            @foreach($advandages as $advandage)
                                <option value="{{$advandage->id}}">{{$advandage->Title_ar}}</option>
                            @endforeach
                        </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="control-label col-sm-2">الفرش الداخلي</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="payment_method" name="payment_method" required>
                                <option value="leather">جلد</option>
                                <option value="cloth">قماش</option>
                                <option value="both of them">كلايهما</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">اللون الداخلي</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="color" id="example-text-input" name="interior_color" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">السعر</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="number" id="example-text-input" name="price" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">تفاصيل المنتج</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" rows="3" id="example-text-input" name="description"></textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="control-label col-sm-2">التاجر</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="user_id" name="user_id" required>
                                @foreach($users as $user)
                                    <option value="{{$user->id}}">{{$user->fname}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">صور المنتج</label>
                        <div class="col-sm-10">
                            <input type="file" class="filestyle" accept="image/*" multiple data-buttonname="btn-secondary" name="images[]" required>
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
        crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
        $(document).ready(function(){
            $('#sellType').on('change', function() {
               var id = $(this).val();
               var text = $( "#sellType option:selected" ).text();
               if(text == "آليات ثقيلة للبيع")
               {
                    $("#distance").html(`<label class="col-sm-2 col-form-label">ساعات العمل</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" id="example-text-input" name="work_hour">
                        </div>`);
               }
               else
               {
                    $("#distance").html(`<label class="col-sm-2 col-form-label">المسافة المقطوعة</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" id="example-text-input" name="distance">
                        </div>`);
               }
            
               console.log(text);
               $.ajax({
               url:'http://127.0.0.1:8000/getSections',
                   method:"get",
                   data:{sellTypeId:id},
                   dataType:"json",
                   headers: {
                       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                   },
                   success:function(data){ 
                    
                        var sectionss = document.getElementById('sections');

                        if(text == "آليات ثقيلة للايجار")
                        {
                            sectionss.innerHTML = " <label class='col-sm-2 col-form-label'>القسم</label><div class='col-sm-10'><select class='form-control' id='section_id' name='section_id'></select></div>";
                            var sections = document.getElementById('section_id');

                            data['sections'].forEach(section => sections.innerHTML += "<option value="+section.id+">"+section.Title_ar+"</option>");
                                                
                        }
                        else
                        {
                            sectionss.innerHTML = "";
                        }

                        var typeCategories = document.getElementById('type_category_id');
                        var makes = document.getElementById('make_id');

                        typeCategories.innerHTML = "";
                        makes.innerHTML = "";

                        data['typeCategories'].forEach(typeCategory => typeCategories.innerHTML += "<option value="+typeCategory.id+">"+typeCategory.Title_ar+"</option>");
                        data['makes'].forEach(make => makes.innerHTML += "<option value="+make.id+">"+make.Title_ar+"</option>");

                        //console.log(typeof data);

                        // console.log(data);
                   }
               });
   
           });

           $('#city_id').on('change', function() {
               var id = $(this).val();
               console.log(id);
               $.ajax({
               url:'http://127.0.0.1:8000/getDistricts',
                   method:"get",
                   data:{cityId:id},
                   dataType:"json",
                   headers: {
                       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                   },
                   success:function(data){ 
                    
                    var districts = document.getElementById('district_id');
                    
                    districts.innerHTML = "";
                    
                    data.forEach(district => districts.innerHTML += "<option value="+district.id+">"+district.Title_ar+"</option>");
                    
                    //console.log(typeof data);

                   // console.log(data);
                   }
               });
   
           });
       });
   </script>

   @section('script')
   <script src="{{asset("assets/admin/libs/select2/js/select2.min.js")}}"></script>
   <script src="{{asset("assets/admin/libs/admin-resources/bootstrap-filestyle/bootstrap-filestyle.min.js")}}"></script>
   @endsection
