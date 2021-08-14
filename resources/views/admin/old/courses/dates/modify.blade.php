<?php
function isExpird($time,$state){
    date_default_timezone_set('Africa/Cairo');
    $date = strtotime($time);
    $date_now = date('h:i A');
    $date_old =date('h:i A', $date);
    if($state == 1){
    return date('h:i A', $date);
    } else{
        if($date_now < $date_old){
            $res = 1;
        }else{
            $res= 0;
        }

      switch($res){
          case 1:
              return 'waiting';
          case 0:
              return 'expired';
      }
    }
}
?>
@extends("layouts.admin")
@section("title", "Modify Dates ")
@section("pageTitle", "Modify Dates")
@section("style")
    <link href="{{asset("libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css")}}" rel="stylesheet"
          type="text/css"/>
    <link href="{{asset("libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css")}}" rel="stylesheet"
          type="text/css"/>
@endsection
@section("content")

    <div class="container">
        <div class="row">
            <div class="col-sm-12 pb-3">
                <center>
                    <div class="col-sm-5 p-2 btn btn-dark mr-1"  data-toggle="modal" data-target="#exampleModalCenter1">
                        Add Day
                    </div>
                    <div class="col-sm-5 p-2 btn btn-dark mr-1"  data-toggle="modal" data-target="#exampleModalCenter2">
                        Add Time
                    </div>
                </center>
            </div>


        </div>
        @for($i=0;$i<count($course->dates);$i++)

        <div class="row">
            <table class="table text-center">
                <thead class="thead-dark">
                <tr>
                    <th colspan="8">
                        <div class="row">
                            <div class="col-sm-9 h3">
                                <center>
                                    {{ $course->dates[$i]->date}}
                                </center>
                            </div>
                            <div class="col-sm-3">
                                <a class=" btn btn-danger" href="{{route('modify.dates.date.remove',['date_id'=>$course->dates[$i]->id])}}">remove</a>
                            </div>
                        </div>
                    </th>
                </tr>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Start Time</th>
                    <th scope="col">End Time</th>
                    <th>state</th>
                    <th>Instructor</th>
                    <th>Requests</th>
                    <th>Students</th>
                    <th scope="col">Remove</th>
                </tr>
                </thead>
                <tbody>
                @if(count($course->dates[$i]->times) > 0)
                @for($j=0;$j<count($course->dates[$i]->times);$j++)
                <tr >
                    <th scope="row">{{($j + 1)}}</th>
                    <td><?php echo isExpird($course->dates[$i]->times[$j]->start_time,1) ?></td>
                    <td><?php echo isExpird($course->dates[$i]->times[$j]->end_time,1) ?></td>
                    <td><?php echo isExpird($course->dates[$i]->times[$j]->end_time,0) ?></td>

                    <td>
                        <div class="p-2 btn btn-dark mr-1"  data-toggle="modal" data-target="#exampleModalCenter3<?php echo $i.$j?>">
                            Set Instructor
                        </div>
                    </td>
                    <td>
                        <div class="p-2 btn btn-dark mr-1"  data-toggle="modal" data-target="#exampleModalCenter4ByHand<?php echo $i.$j?>" style="width: 170px">
                            ByHand
                        </div>
                        <div class="p-2 btn btn-dark mr-1"  data-toggle="modal" data-target="#exampleModalCenter4Bank<?php echo $i.$j?>" style="width: 170px">
                            Bank Transfer
                        </div>

                    </td>
                    <td>
                        <div class="p-2 btn btn-dark mr-1"  data-toggle="modal" data-target="#exampleModalCenter5<?php echo $i.$j?>">
                            Students
                        </div>
                    </td>
                    <td>
                        <a class=" btn btn-danger" href="{{route('modify.dates.time.remove',['time_id'=>$course->dates[$i]->times[$j]->id])}}">remove</a>
                    </td>
                </tr>
                @endfor
                @else
                    <tr>
                        <th colspan="4">
                            <center>
                                <h6>There is no times yet</h6>
                            </center>

                        </th>
                    </tr>
                @endif
                </tbody>
            </table>

        </div>
        @endfor

    </div>


@endsection

@section("script")
    <script src="{{asset("libs/datatables.net/js/jquery.dataTables.min.js")}}"></script>
    <script src="{{asset("libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js")}}"></script>
@endsection

<!-- Button trigger modal -->

<!-- Date Modal -->
<div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">

        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Add Day</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" action="{{route('modify.dates.date')}}">
                @csrf

            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-6">
                        <center>
                            Date
                        </center>
                    </div>
                    <div class="col-sm-6">
                        <input type="date" name="date" required>
                        <input type="hidden" name="course_id" value="{{$course->id}}">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="Submit" class="btn btn-primary">Save changes</button>
            </div>
            </form>

        </div>

    </div>
</div>
<!-- Time Modal -->
<div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Add Time</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" action="{{route('modify.dates.time')}}">
                @csrf

                 <div class="modal-body">
                    <div class="row">
                    <div class="col-sm-6">
                        <center>
                            Start Time
                        </center>
                    </div>
                    <div class="col-sm-6">
                        <input class="btn btn-dark" type="time" name="start_time" required>
                    </div>
                </div>
                     <div class="row">
                         <div class="col-sm-6">
                             <center>
                                 End Time
                             </center>
                         </div>
                         <div class="col-sm-6">
                             <input class="btn btn-dark" type="time" name="end_time" required>
                         </div>
                     </div>
                    <div class="row">
                    <div class="col-sm-6">
                        <center>
                          Select  Date
                        </center>
                    </div>

                    <div class="col-sm-6">
                        <select name="date_id" required class="btn btn-dark">
                            @foreach($dates as $date)
                                @if($date->course_id == $course->id)
                            <option value="{{$date->id}}">
                                {{$date->date}}
                            </option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                </div>
                 </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
            </form>

        </div>
    </div>
</div>
<!-- Instructor Modal -->
@for($i=0;$i<count($course->dates);$i++)
    @if(count($course->dates[$i]->times) > 0)
        @for($j=0;$j<count($course->dates[$i]->times);$j++)
            <div class="modal fade" id="exampleModalCenter3<?php echo $i.$j?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Set Instructor</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form method="post" action="{{route('modify.dates.setInstructor')}}">
                            @csrf

                            <div class="modal-body">
                                <div class="row">
                                        <div class="col-sm-12">
                                        <center>
                                            <?php echo isExpird($course->dates[$i]->times[$j]->time,1) ?>
                                        </center>
                                            <br>
                                      </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <center>
                                            Current Instructor
                                        </center>
                                    </div>

                                    <div class="col-sm-6">
                                        @if(isset($course->dates[$i]->times[$j]->instructor->name))
                                            {{$course->dates[$i]->times[$j]->instructor->name}}
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <center>
                                            New Instructor
                                        </center>
                                    </div>

                                    <div class="col-sm-6">
                                        <input type="hidden" name="time_id" value="{{$course->dates[$i]->times[$j]->id}}">
                                        <select name="instructor_id" required>
                                            @foreach($instructors as $date)
                                                <option value="{{$date->id}}">
                                                    {{$date->name}}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
            <div class="modal fade" id="exampleModalCenter4ByHand<?php echo $i.$j?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Requests By hand</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                            <table class="table">
                                <thead class="thead-dark">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Accept</th>
                                    <th scope="col">Refuse</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $bookings = \App\Models\UserBookCourse::where('type','byhand')->get();
                                $i=0;
                                ?>
                                @foreach($bookings as $bookByHand )
                                <?php $i++ ?>
                                <tr>
                                    <th scope="row">{{$i}}</th>
                                    <td></td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                @endforeach
                                <?php $i=0; ?>

                                </tbody>
                            </table>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>

                    </div>
                </div>
            </div>
            <div class="modal fade" id="exampleModalCenter4Bank<?php echo $i.$j?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Requests Bank Transfer</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <table class="table">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Handle</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                            </tr>
                            </tbody>
                        </table>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>

                    </div>
                </div>
            </div>
            <div class="modal fade" id="exampleModalCenter5<?php echo $i.$j?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Set Instructor</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form method="post" action="{{route('modify.dates.setInstructor')}}">
                            @csrf

                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <center>
                                            <?php echo isExpird($course->dates[$i]->times[$j]->time,1) ?>
                                        </center>
                                        <br>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <center>
                                            Current Instructor
                                        </center>
                                    </div>

                                    <div class="col-sm-6">
                                        @if(isset($course->dates[$i]->times[$j]->instructor->name))
                                            {{$course->dates[$i]->times[$j]->instructor->name}}
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <center>
                                            New Instructor
                                        </center>
                                    </div>

                                    <div class="col-sm-6">
                                        <input type="hidden" name="time_id" value="{{$course->dates[$i]->times[$j]->id}}">
                                        <select name="instructor_id" required>
                                            @foreach($instructors as $date)
                                                <option value="{{$date->id}}">
                                                    {{$date->name}}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>

        @endfor
    @endif
@endfor
<script>
    $(document).ready(function(){
        $("#myInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#myTable tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
</script>
