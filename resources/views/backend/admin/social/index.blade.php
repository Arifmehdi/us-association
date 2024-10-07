@extends('backend.admin.layout.app')
@section('content')

    <!--Main Body Start-->
    <div class="main-body bg-light">
        <div class="wrapper p-3">
            <div class="breadcrumb-links">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i class="fas fa-home"></i></a></li>
                    <li class="active ">&nbsp; Social Media</li>
                </ul>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-end"><button class="btn btn-dark" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-plus"></i> Add New</button></div>
                    <div class="card card-primary">
                        <div class="card-title">Social Media List</div>
                        <div class="card-content">
                           
                            <!-- <p class="para mb-20">You can be use those table for your desired dynamic content. It will
                                be help you to show multiple data.</p> -->
                            <table id="datatable1" class="display responsive nowrap" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Social Name</th>
                                        <th>Social Icon</th>
                                        <!-- <th>Social Comment</th> -->
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Main Body End-->


    <!-- model start  -->

<!-- Create Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Social Media</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ route('admin.socials.store') }}"  enctype="multipart/form-data" method="post">
        @csrf
        <div class="modal-body">
            <div class="form-group ">
                <label for="name">Name</label>
                <input type="text" class="form-control" placeholder="Enter Name" id="cname" name="name">
            </div>
            <div class="form-group ">
                <div class="custom-file">
                    <label for="icon">Social Icon</label>
                    <input type="file" class="form-control" id="customFile" name="icon">
                </div>
            </div>
            <div class="form-group ">
                <label for="name">Social URL</label>
                <input type="text" class="form-control"placeholder="Enter URL" name="link">
            </div>
            <div class="form-group ">
                <label for="name">Comment</label>
                <textarea id="" class="form-control" placeholder="Enter Comment" name="comment"></textarea>
            </div>
            <div class="form-group ">
                <div class="form-check form-switch">
                    <label class="form-check-label" for="switch1">Status</label>
                    <input type="checkbox" class="form-check-input" id="switch1" checked name="status">
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" id="modelSubmitBtn">Save changes</button>
        </div>
      </form>
    </div>
  </div>
</div>




<!-- Edit Modal -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Edit Social Media</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="editForm">
                    @csrf
                    <input type="hidden" name="id" id="social_id">
                    <div class="form-group">
                        <label for="name">Social Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="icon">Current Icon:</label>
                        <div>
                            <img id="iconPreview" src="" alt="Current Icon" style="width: 100px; height: auto; display: none;">
                        </div>
                        <input type="file" class="form-control" id="icon" name="icon">
                    </div>
                    <div class="form-group">
                        <label for="link">Link</label>
                        <input type="text" class="form-control" id="link" name="link" required>
                    </div>
                    <div class="form-group">
                        <div class="form-check form-switch">
                            <label class="form-check-label" for="switch2">Status</label>
                            <input type="checkbox" class="form-check-input" id="switch2" name="status" value="1">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </form>
            </div>
        </div>
    </div>
</div>



<script>
$(document).ready(function() {
    // Check if the table has been initialized already
    if ($.fn.dataTable.isDataTable('#datatable1')) {
        $('#datatable1').DataTable().destroy();
    }
    
    if (!$.fn.DataTable.isDataTable('#datatable1')) {
        $('#datatable1').DataTable({
            processing: true,
            serverSide: true,
            destroy: true,
            ajax: {
                url: '{{ route("admin.socials.index") }}', // Adjust to your route
                type: 'GET',
            },
            columns: [
                { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false, sWidth: '3%' }, // This will automatically show row numbers
                { data: 'name', name: 'name' , sWidth: '20%'},
                { data: 'icon', name: 'icon' , sWidth: '30%'},
                // { data: 'comment', name: 'comment' ,sWidth: '10%'},
                { data: 'status', name: 'status', orderable: false, searchable: false }, // Status column
                { data: 'action', name: 'action', orderable: false, searchable: false } // Action buttons
            ]
        });
    }
});

function reloadDataTable() {
    let table = $('#datatable1').DataTable();
    table.ajax.reload(null, false); // Reloads data without resetting the pagination
}
    $(document).ready(function(){
        $('#modelSubmitBtn').on('click', function(event){
            event.preventDefault();

            var submitButton = $('#modelSubmitBtn');
            submitButton.prop('disabled', true).text('Submitting...');

            let formData = new FormData();

            // Append form data
            formData.append('name', $('#cname').val());
            formData.append('icon', $('#customFile')[0].files[0]);
            formData.append('link', $('input[name="link"]').val());
            formData.append('comment', $('textarea[name="comment"]').val());
            formData.append('status', $('#switch1').is(':checked') ? 1 : 0);

            $.ajax({
                url: "{{ route('admin.socials.store') }}",
                method: "POST",
                data: formData,
                processData: false,
                contentType: false,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    toastr.success('Social media added successfully!');
                    console.log(response);

                    $('#exampleModal').modal('hide');
                    $('#exampleModal form')[0].reset();
                    reloadDataTable()
                },
                error: function(xhr) {
                    alert('Error submitting form.');
                    console.log(xhr.responseText);
                },
                complete: function() {
                    submitButton.prop('disabled', false).text('Save changes');
                }
            });
        });


        $(document).on('click', '.edit', function() {
            // Get data attributes from the clicked edit button
            var id = $(this).data('id');
            var name = $(this).data('name');
            var icon = $(this).data('icon');
            var link = $(this).data('link');
            var status = $(this).data('status');
            var baseUrl = "{{ url('') }}";

            $('#social_id').val(id);
            $('#name').val(name);
            $('#iconPreview').attr('src', baseUrl + '/' + icon).show();
            $('#icon').val(''); // Clear the file input
            $('#link').val(link);
            $('#switch2').prop('checked', status == 1);

            // Show the modal
            $('#editModal').modal('show');
        });

        $('#editForm').on('submit', function(e) {
            e.preventDefault();

            var socialId = $('#social_id').val(); // Get the social ID

            $.ajax({
                url: '{{ route("admin.socials.update", "") }}' + '/' + socialId, // Adjust to your update route
                type: 'PUT',
                data: $(this).serialize(),
                success: function(response) {
                    // Close the modal
                    $('#editModal').modal('hide');

                    // Refresh the DataTable
                    $('#datatable1').DataTable().ajax.reload();
                },
                error: function(xhr) {
                    // Handle errors
                    console.log(xhr.responseText);
                }
            });
        });
    });
</script>

    <!-- model end  -->
@endsection
