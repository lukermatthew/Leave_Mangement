@include('layouts.user.partial.top-header')
<body>
  <!-- Sidenav -->
  @include('layouts.user.partial.sidebar')
  <!-- Main content -->
  <div class="main-content">
    <!-- Top navbar -->
    @include('layouts.user.partial.topbar')
   <!-- Header -->
   <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center" style="min-height: 300px; background-image: url(../../frontend/img/theme/profile-cover.jpg); background-size: cover; background-position: center top;">
      <!-- Mask -->
      <span class="mask bg-gradient-default opacity-8"></span>
      <!-- Header container -->
      <div class="container-fluid d-flex align-items-center">
        <div class="row">
          <div class="col-lg-7 col-md-10">
            <h1 class="display-2 text-white">Hello {{ Auth::user()->name }}</h1>
            <p class="text-white mt-0 mb-5">This is your profile page. You can see the progress you've made with your work and manage your projects or assigned tasks</p>
          </div>
        </div>
      </div>
    </div>
     

     <!-- Page content -->
    <div class="container-fluid mt--9">
      <div class="row">
      <div class="col-md-8">
      
      </div>
        
        <div class="col-xl-6 order-xl-1">
          <div class="card bg-secondary shadow">
            <div class="card-header bg-yellow border-0">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">Leave Request</h3>
                </div>
               
              </div>
            </div>
            <div class="card-body">
                <div class="pl-lg-2">
                <form  method="POST" action="{{ route('user.requestleave.leaverequest') }}">
                  <div class="row">
                  @csrf
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label">*Select Type of leave</label>
                        <select class="form-control" name="type">

                                   <option value="" disabled {{ old('type') ? '' : 'selected' }}>Choose a Type of Leave</option>
                                    @foreach($types as $type)
                                        <option value="{{$type->id}}" {{ old('type') ? 'selected' : '' }}>{{$type->name}}</option>
                                    @endforeach

                        </select>


                      </div>
                    </div>
                  </div>

                


                  <div class="row">
                    <div class="col-lg-12">
                      <div class="form-group">
                        <label class="form-control-label" >Description</label>
                        <input type="text"  name="description" id="description" class="form-control" placeholder="Message">
                      </div>
                    </div>

                     <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" >Start Date</label>
                        <input type="text"   name="startdate" id="datetimepicker1" class="form-control" placeholder="Select date">
                      </div>
                    </div>

                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" >End Date</label>
                        <input type="text"  name="enddate"  id="datetimepicker2" class="form-control" placeholder="Select date">
                      </div>
                    </div>

                 
                     <div class="col-lg-12">

                        <button type="submit" id="submit" name="submit" class="btn btn-success"><i class="ni ni-send"></i> Send Request</button>
                       

                    </div>

                  </div>
                </div>
                </div>
                </form>

          </div>
        </div>
      </div>


      
      <!-- Footer -->
    @include('layouts.user.partial.footer')
 
    <script>
    $(function () {
        $('#datetimepicker1').datetimepicker({
            format: "dd MM yyyy - HH:11 P",
            showMeridian: true,
            autoclose: true,
            todayBtn: true
        });
    })

    $(function () {
        $('#datetimepicker2').datetimepicker({
            format: "dd MM yyyy - HH:11 P",
            showMeridian: true,
            autoclose: true,
            todayBtn: true
        });
    })
   

</script>