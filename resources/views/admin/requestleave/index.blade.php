<!DOCTYPE html>
<html>

@include('layouts.admin.partial.top-header')
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
   
    <div class="container-fluid mt--9">
      <div class="row">
     
      <div class="col-md-12">
      
      <div class="row mt-5">
            <div class="col">
            @include('layouts.admin.partial.message')
          <div class="card bg-default shadow">
            <div class="card-header bg-transparent border-0">
              <h3 class="text-white mb-0">Request Leave</h3><br> 
            </div> 

            <div class="card-body">
            <div class="table-responsive">
              <table class="table align-items-center table-dark table-flush" id="myTable">
                <thead class="thead-dark">
                  <tr>
                  <th scope="col"></th>
                  <th scope="col"># ID </th>
                    <th scope="col">User</th>
                    <th scope="col">Type</th>
                    <th scope="col">Description</th>
                    <th scope="col">Status</th>
                   
                    <th scope="col">Date Created</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                      @foreach($requestleaves as $key=>$requestleave) 
                      <tr scope="row">

                        <th>
                       @if($requestleave->type->recommendation_id == 1)
                        
                        <i class="ni ni-like-2 text-yellow"></i>
                         @else
                         <i class="ni ni-like-2 "></i>

                       @endif
                       </th>

                          <td>{{ $key + 1 }}</td>
                          
                          <td>{{ $requestleave->user->name }}</td>
                          <td>{{ $requestleave->type->name }}</td>
                          
                          <td>{{ $requestleave->description }}</td>
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

                        





                          <td><a href="{{route('admin.requestleave.show',$requestleave->id)}}" class="btn btn-lg"><i class="ni ni-bullet-list-67"></i></a>
                          
                          
                          
                        
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
    @include('layouts.admin.partial.footer')
 
</body>

</html>