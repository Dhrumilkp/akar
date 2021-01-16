

function addnewcontact()
{
    var addnewcontactmodal = '<div class="modal" id="add_new_contact" tabindex="-1">' +
    '<div class="modal-dialog">' +
    '<div class="modal-content">' +
    '<div class="modal-header">' +
    '<h5 class="modal-title">Add Header Slider Modal</h5>' +
    '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>' +
    '</div>' +
    '<div class="modal-body">' +
    '<form id="add_new_contact_form" enctype="multipart/form-data">' +
    '<label style="margin-top:5px;">Slider 1</label>' +
    '<input type="number" class="form-control" name="contact" id="contact" required>' +
    '<div class="mt-2">' +
    '<button type="submit" class="btn btn-outline-primary mr-1 mb-1" style="margin-top:2rem;" id="update_contact_number">Update</button>' +
    '</div>' +
    '</form>' +
    '</div>' +
    '</div>' +
    '</div>' +
    '</div>';
    $('#dynamic_data_model').html(addnewcontactmodal);
    $('#add_new_contact').modal('show');
    $('#add_new_contact_form').validate({
		errorClass: "is-invalid",
		validClass: "is-valid",
		errorElement: "em"
	});
}
$(document).on('submit','#add_new_contact_form',function(e){
    e.preventDefault();
    if($(this).valid())
    {
        var spinner = '<div class="spinner-border text-primary" role="status">' +
		'</div>';
        $('#update_contact_number').html(spinner);
        $('#update_contact_number').prop('disabled',true);
        var formData = new FormData($(this)[0]);
        $.ajax({
            type: "POST",
            url: ""+url+"updatecontact",
            data: formData,
            dataType: "json",
            processData: false,
            contentType: false,
            headers: {
				'csrftoken': $('meta[name="csrf-token"]').attr('content')
			},
            success: function (response) {
                if (response.status == "success") {
					alert("Contact Updated");
					location.reload();
				}
            }
        });
    }
});