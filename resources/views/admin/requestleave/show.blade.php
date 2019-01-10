@include('layouts.admin.partial.top-header')
<body>
  <!-- Sidenav -->
  @include('layouts.admin.partial.sidebar')
  <!-- Main content -->
  <div class="main-content">
    <!-- Top navbar -->
    @include('layouts.admin.partial.topbar')
   <!-- Header -->

   
   <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center" style="min-height: 300px; background-image: url(../frontend/img/theme/profile-cover.jpg); background-size: cover; background-position: center top;">
      <!-- Mask -->
      <span class="mask bg-gradient-default opacity-8"></span>
      <!-- Header container -->
      <div class="container-fluid d-flex align-items-center">
        <div class="row">
          <div class="col-lg-7 col-md-10">
           
          </div>
        </div>
      </div>
    </div>
    
     

     <!-- Page content -->
    <div class="container-fluid mt--9">
      <div class="row">
  
        
        <div class="col-xl-8 order-xl-1">
          <div class="card bg-secondary shadow">
            <div class="card-header bg-yellow border-0">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">View Leave Request</h3>
                </div>
               
              </div>
            </div>
            <div class="card-body">
                <div class="pl-lg-2">
            

                  <div class="row">
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" >Employee Name</label>
                        <h3>{{ $requestleave->user->name }}</h3>

                      

                      </div>
                    </div>

                     <div class="col-lg-3">
                      <div class="form-group">
                        <label class="form-control-label" >Start Date</label>
                        <p>{{ $requestleave->startdate }}</p>
                      </div>
                    </div>

                    <div class="col-lg-3">
                      <div class="form-group">
                        <label class="form-control-label" >End Date</label>
                        <p>{{ $requestleave->enddate }}</p>
                      </div>
                    </div>

                    <div class="col-lg-3">
                      <div class="form-group">
                        
                       


                        @if($requestleave->type->recommendation_id == 1)
                        
                        <span class="badge badge-success"><strong>Recommended</strong></span>
                         @else
                        <span class="badge badge-danger"><strong>Not Recommended </strong></span>
                                             
                       @endif

                      </div>
                    </div>
                    

                    <div class="col-lg-3">
                      <div class="form-group">
                        <label class="form-control-label" >Leave Type</label>
                        <p>{{ $requestleave->type->name }}</p>
                      </div>
                    </div>



                     <div class="col-lg-3">
                     <div class="form-group">
                     <label class="form-control-label" >Status</label><br>

                    @if($requestleave->status == 1)
                        
                        <button type="button"  class="btn btn-success btn-sm">
                            <span>Confirmed</span>
                           
                          </button>
                          @elseif($requestleave->status == 2)
                          <button type="button"  class="btn btn-danger btn-sm">
                            <span>Rejected</span>
                           
                          </button>

                           @else
                          <button type="button"  class="btn btn-warning btn-sm">
                            <span>Pending</span>
                           
                          </button>
                                              
                        @endif
                       </div></div>

                    

                    
                  
                
               
                    
                    <div class="col-lg-12">
                    @if($requestleave->message == NULL &&  $requestleave->status == False)
                    <form method="POST" action="{{ route('admin.requestleave.update',$requestleave->id) }}">
                      <div class="form-group">
                      
                      @csrf
                    @method('PUT')

                        <label class="form-control-label">Message</label>
                        <textarea type="text"  name="message" class="form-control" placeholder="Message" value="{{ $requestleave->message }}">
                        </textarea>
                      </div>
                   

                     <div class="col-lg-12">

                      <button type="submit" id="submit" name="submit" class="btn btn-primary btn-sm pull-right"><i class="ni ni-send"></i> Send Message</button>

                      <br/><br/><br/><br/>
                      </form> 
                      @else

                      <div class="col-lg-12">
                      <div class="form-group">
                        <label class="form-control-label" >Message</label>
                        <p>{{ $requestleave->message }}</p>
                      </div>
                      @endif
                    </div>
                  

                   



                     
                    

                      
                      <div class="col-lg-12">
                     @if($requestleave->status == false)
                    <!--   Approved Method     -->
                      <br>
                     <form id="requestleave-form-{{ $requestleave->id }}" 
                      action="{{ route('admin.requestleave.status',$requestleave->id) }}" style="display: none;" method="POST">
                    @csrf
                     </form>

                     <button type="button" class="btn btn-success btn-md" onclick="if(confirm('Are you verify this request by phone?')){
                      event.preventDefault();
                      document.getElementById('requestleave-form-{{ $requestleave->id }}').submit();
                      }else {
                      event.preventDefault();
                      }"><i class="ni ni-check-bold"></i> Approved</button>



                        <form id="reject-form-{{ $requestleave->id }}" 
                      action="{{ route('admin.requestleave.reject',$requestleave->id) }}" style="display: none;" method="POST">
                    @csrf
                     </form>

                     <button type="button" class="btn btn-danger btn-md" onclick="if(confirm('Are you verify this request by phone?')){
                      event.preventDefault();
                      document.getElementById('reject-form-{{ $requestleave->id }}').submit();
                      }else {
                      event.preventDefault();
                      }"><i class="ni ni-fat-remove"></i> Reject</button>
                   
                   
                   @endif









                   
                  </div>
                </div>
                </div>
                
                

          </div>
        </div>
      </div>


      
      <!-- Footer -->
    @include('layouts.admin.partial.footer')
 
    
   
   
