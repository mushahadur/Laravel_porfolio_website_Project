$(document).ready(function () {
    $('#VisitorDt').DataTable();
    $('.dataTables_length').addClass('bs-select');
});


function getServicesData() {

    axios.get('/getServicesData')
        .then(function (response) {

            if(response.status == 200){
                $('#mainSectionDiv').removeClass('d-none');
                $('#loaderDiv').addClass('d-none');

                var dataJSON = response.data;
                $.each(dataJSON, function (i, item) {
                    $('<tr>').html(
                        "<td><img class='table-img' src="+dataJSON[i].service_img+"></td>"+
                        "<td>" + dataJSON[i].service_name + "</td>"+
                        "<td>" + dataJSON[i].service_des + "</td>"+
                        "<td><a href='' ><i class='fas fa-edit'></i></a></td>"+
                        "<td><a class='serviceDeleteBtn' data-id="+dataJSON[i].id+"  ><i class='fas fa-trash-alt danger'></i></a></td>"
                    ).appendTo('#service_table');
                });

                $('.serviceDeleteBtn').click(function (){
                    var id = $(this).data('id');
                    $('#serviceDeleteConformBtn').attr('data-id', id);
                    $('#deleteModal').modal('show');
                });

                $('.serviceDeleteConformBtn').click(function (){
                    var id = $(this).data('id');
                     servicesDeleteById(id);
                });

            }
            else{
                $('#loaderDiv').addClass('d-none');
                $('#wrongDiv').removeClass('d-none');
            }
        }).catch(function (error) {
            $('#loaderDiv').addClass('d-none');
            $('#wrongDiv').removeClass('d-none');
        });

}

function servicesDeleteById(deleteId) {
    axios.post('/serviceDelete', {'id':deleteId})
        .then(function (res) {
            if (res.data == 1) {
                alert('success');
            }
            else{
                alert('failed');
            }
        }).catch(function (error) {

        });
}
