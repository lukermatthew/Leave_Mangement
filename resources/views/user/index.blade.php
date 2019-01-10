<!DOCTYPE html>
<html>

@include('layouts.user.partial.top-header')
<body>
  <!-- Sidenav -->
  @include('layouts.user.partial.sidebar')
  <!-- Main content -->
  <div class="main-content">
    <!-- Top navbar -->
    @include('layouts.user.partial.topbar')
    <!-- Header -->
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
      <div class="container-fluid">
        <div class="header-body">
          <!-- Card stats -->
          
          
             
            
        
        </div>
      </div>
    </div>
    
    <!-- Page content -->
   
    <div class="container-fluid mt--9">
      <div class="row">
     
      <div class="col-md-12">
      
      <div class="row mt-5">
            <div class="col">
            
          <div class="card bg-default shadow">
            <div class="card-header bg-transparent border-0">
              <h3 class="text-white mb-0">Request Leave</h3><br> 
            </div> 

            <div class="card-body">
            <div class="table-responsive">
            <table class="table align-items-center table-dark table-flush" id="myTable">
                <thead class="thead-dark">
                  <tr>
                  
                  <th scope="col"># ID </th>
                    <th scope="col">User</th>
                    <th scope="col">Type</th>
                    <th scope="col">Admin Message</th>
                    <th scope="col">Status</th>
                   
                    <th scope="col">Sent Date</th>
                    
                  </tr>
                </thead>
                <tbody>
                      @foreach($requestleaves as $key=>$requestleave) 
                      <tr scope="row">

                      

                          <td>{{ $key + 1 }}</td>
                          
                          <td>{{ $requestleave->user->name }}</td>
                          <td>{{ $requestleave->type->name }}</td>
                          
                          <td>{{ $requestleave->message }}</td>
                          <th>
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
                          </th>
                        
                          <td>{{ $requestleave->created_at }}</td>

                        





                         
                          
                          
                          
                        
                     </tr>
                        @endforeach
                      </tbody>
              </table>
            </div>
          </div>
        </div>   </div>


            </div>
        </div></div>

        


       

      <!-- Footer -->
    @include('layouts.user.partial.footer')
 
</body>

</html>