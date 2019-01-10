<!DOCTYPE html>
<html>

@include('layouts.user.partial.top-header')
<body>
  <!-- Sidenav -->
  @include('layouts.admin.partial.sidebar')
  <!-- Main content -->
  <div class="main-content">
    <!-- Top navbar -->
    @include('layouts.admin.partial.topbar')
    <!-- Header -->
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
    
      <div class="container-fluid">
        <div class="header-body">
          <!-- Card stats -->
          
          
             
            
        
        </div>
      </div>
    </div>
    
    <!-- Page content -->
  
    <div class="container-fluid mt--7">
    
      <div class="row">
      
      <div class="col-md-8">
      @include('layouts.admin.partial.message')
      </div>
      
        <div class="col-xl-6 order-xl-1">
       
          <div class="card bg-secondary shadow">
            <div class="card-header bg-green border-0">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">Create Type of leave</h3>
                </div>
               
              </div>
            </div>
            <div class="card-body">
                <h6 class="heading-small text-muted mb-4">Create Type</h6>
               
                <div class="pl-lg-4">
                <form method="POST" action="{{ route('admin.type.store') }}">
                  <div class="row">
                  @csrf


                    

                    <div class="col-lg-12">
                      <div class="form-group">
                        <label class="form-control-label">Type</label>
                        
                        <input type="text" id="name" class="form-control" name="name" placeholder="name" >
                       
                      </div>
                    </div>
                  </div>


                


                  <div class="row">
                    <div class="col-lg-12">
                      <div class="form-group">
                        <label class="form-control-label" >Description</label>
                        <input type="text" id="description" class="form-control" name="description" placeholder="description">
                      </div>
                    </div>







                  <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label">*Select if Recommended</label>
                        <select class="form-control" name="recommendation">

                                   <option value="" disabled {{ old('recommendation') ? '' : 'selected' }}>Choose</option>
                                   
                                    @foreach($recommendations as $recommendation)
                                        <option value="{{$recommendation->id}}" {{ old('recommendation') ? 'selected' : '' }}>{{$recommendation->name}}</option>
                                    @endforeach

                        </select>


                     
                    </div>
                  </div>

               
                   







                   

                  <br>








                     <div class="col-lg-12">
                    <button type="submit" class="btn btn-primary">Create</button>
                             
                    </div>
                  </div>
                </div>
                </div>
                </form>
              

          </div>
        </div>
      </div>
      <br>
     

       

       

      <!-- Footer -->
    @include('layouts.admin.partial.footer')
 
</body>

</html>