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
   
    <div class="container-fluid mt--9">
      <div class="row">
     
      <div class="col-md-10">
      
      <div class="row mt-5">
            <div class="col">
            @include('layouts.admin.partial.message')
          <div class="card bg-default shadow">
            <div class="card-header bg-transparent border-0">
             
              <h3 class="text-white mb-0">Recommendation Table</h3><br> <a href="" class="btn btn-success btn-sm"><i class="ni ni-fat-add"></i>Add New</a>
            </div> 

            <div class="table-responsive">
              <table class="table align-items-center table-dark table-flush">
                <thead class="thead-dark">
                  <tr>
                 
                  <th scope="col"># ID </th>
                    <th scope="col">Name</th>
                  
                    <th scope="col">Date Created</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                      @foreach($recommendations as $key=>$recommendation) 
                      <tr scope="row">
                          <td>{{ $key + 1 }}</td>
                          <td>{{ $recommendation->name }}</td>
                          
                          
                          
                          <td>{{ $recommendation->created_at }}</td>
                          <td><a href="" class="btn btn-sm btn-primary"><i class="material-icons">Edit</i></a>
                          
                          <form id="delete-form" action="" style="display: none;" method="POST">
                        @csrf
                        @method('DELETE')


                          </form>

                          <button type="button" class="btn btn-danger btn-sm" onclick="if(confirm('Are you sure you want to delete this?')){
                          
                            event.preventDefault();
                            document.getElementById('delete-form').submit();
                          }else{
                            event.preventDefault();

                          }"><i class="material-icons">delete</i></button>
                        </td>
                          
                        
                     </tr>
                        @endforeach
                      </tbody>
              </table>
            </div>
          </div>
        </div>   </div>


            </div>
        </div>

        


       

      <!-- Footer -->
    @include('layouts.admin.partial.footer')
 
</body>

</html>