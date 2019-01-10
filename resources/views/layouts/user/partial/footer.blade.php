<footer class="footer">
        <div class="row align-items-center justify-content-xl-between">
          <div class="col-xl-6">
            <div class="copyright text-center text-xl-left text-muted">
              &copy; 2018 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">Sample</a>
            </div>
          </div>
         
        </div>
      </footer>

       </div>
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="{{ asset('frontend/vendor/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('frontend/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('frontend/js/bootstrap-datetimepicker.min.js') }}"></script>
  <!-- Optional JS -->
  <script src="{{ asset('frontend/vendor/chart.js/dist/Chart.min.js') }}"></script>
  <script src="{{ asset('frontend/vendor/chart.js/dist/Chart.extension.js') }}"></script>
  <!-- Argon JS -->
  <script src="{{ asset('frontend/js/argon.js?v=1.0.0') }}"></script>
  
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
  $(document).ready(function() {
    $('#myTable').DataTable();
} );
</script>

  @if ($errors->any())
    @foreach ($errors->all() as $error)
       <script>
           toastr.error('{{ $error }}');
       </script>
    @endforeach
@endif

{!! Toastr::message() !!}