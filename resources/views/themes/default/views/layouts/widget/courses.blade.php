<!-- Most Viewed Courses Block -->
<div class="block">
    <!-- Most Viewed Courses Title -->
    <div class="block-title">
        <h2><strong>Otros</strong> Cursos</h2>
    </div>
    <!-- END Most Viewed Courses Title -->

    <!-- Most Viewed Courses Content -->
    <table class="table table-striped table-vcenter">
        <tbody>
            @foreach($courses as $course)
            <tr>
                <td>
                    <a href="{{{ route('view_course_get', $course->id) }}}">{{{ $course->name }}}</a><br>
                    <small>
                    {{{$course->value_current}}}
                    </small>
                </td>
                <td class="text-center" style="width: 70px;">
                    <div class="btn-group btn-group-xs">
                        <!-- <a href="javascript:void(0)" class="btn btn-default"><i class="fa fa-shopping-cart"></i></a> -->
                        <!-- <a href="javascript:void(0)" class="btn btn-default"><i class="fa fa-heart text-danger"></i></a>-->
                        <a href="{{{ route('view_course_get', $course->id) }}}" class="btn btn-default"><i class="fa fa-university"></i></i></a>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <!-- END Most Viewed Courses Content -->
</div>
<!-- END Most Viewed Courses Block -->