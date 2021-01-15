function addnewcategory() {
	var addnewcatmodel = '<div class="modal" id="addnew_cat_model" tabindex="-1">' +
		'<div class="modal-dialog">' +
		'<div class="modal-content">' +
		'<div class="modal-header">' +
		'<h5 class="modal-title">Add Book Category</h5>' +
		'<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>' +
		'</div>' +
		'<div class="modal-body">' +
		'<form id="add-book-cat">' +
        '<input type="text" class="form-control" name="category_name" id="category_name" placeholder="Enter category name" style="text-transform: capitalize;" required>' +
        '<div class="mt-2">'+
		    '<button type="submit" class="btn btn-outline-primary mr-1 mb-1" style="margin-top:2rem;" id="create_btn">Create</button>' +
        '</div>'+
		'</form>' +
		'</div>' +
		'</div>' +
		'</div>' +
		'</div>';
	$('#dynamic_data_model').html(addnewcatmodel);
	$('#addnew_cat_model').modal('show');
	$('#add-book-cat').validate({
		errorClass: "is-invalid",
		validClass: "is-valid",
		errorElement: "em"
	});
}
$(document).on('submit', '#add-book-cat', function (e) {
	e.preventDefault();
	if ($(this).valid()) {
        var spinner = '<div class="spinner-border text-primary" role="status">'+
        '</div>';
        $('#create_btn').html(spinner);
        $('#create_btn').prop('disabled',true);
		var formData = new FormData($(this)[0]);
		$.ajax({
			type: "POST",
			url: "" + url + "createcat",
			data: formData,
            dataType: "json",
            processData: false,
            contentType: false,
			headers: {
				'csrftoken': $('meta[name="csrf-token"]').attr('content')
			},
			success: function (response) {
				if (response.status == "success") {
					alert("New category created");
					location.reload();
				}
			}
		});
	}
});
