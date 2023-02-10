@extends('Layout.app')

@section('content')


	<div id="mainSectionDiv"  class="container d-none">
		<div class="row">
			<div class="col-md-12 p-5">
				<table id="" class="table table-striped table-bordered" cellspacing="0" width="100%">
				<thead>
					<tr>
					<th class="th-sm">Image</th>
					<th class="th-sm">Name</th>
					<th class="th-sm">Description</th>
					<th class="th-sm">Edit</th>
					<th class="th-sm">Delete</th>
					</tr>
				</thead>
				<tbody id="service_table">

				</tbody>
				</table>

			</div>
		</div>
	</div>


    <div id="loaderDiv" class="container">
        <div class="row">
            <div class="col-md-12 p-5 text-center mt-5">
                <img class="loader_icon" src="{{asset('/')}}assets/images/loader2.svg" alt="">
            </div>
        </div>
    </div>


    <div id="wrongDiv"  class="container d-none">
        <div class="row">
            <div class="col-md-12 p-5 mt-5">
                <h2 class="text-center">Something Wrong !!</h2>
            </div>
        </div>
    </div>



    <!-- Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-body text-center p-3">
                    <h5 class="m-3 text-danger">Do You Want to Delete</h5>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-primary" data-mdb-dismiss="modal">NO</button>
                    <button id="serviceDeleteConformBtn" data-id=" " type="button" class="btn btn-sm  btn-danger">YES</button>
                </div>
            </div>
        </div>
    </div>

@endsection


@section('script')
<script>
	 getServicesData();
</script>
@endsection
