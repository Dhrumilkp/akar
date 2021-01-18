$(document).ready(function () {
	$('#add-book-form').validate({
		errorClass: "is-invalid",
		validClass: "is-valid",
		errorElement: "em"
	});
});

function addbooks() {
	$('#add_book_model').modal('show');
}
$(document).on('submit', '#add-book-form', function (e) {
	e.preventDefault();
	if ($(this).valid()) {
        $('#upload-book-btn').html('Uploading...');
        $('#upload-book-btn').prop('disabled',true);
        var formData = new FormData($(this)[0]);
        $.ajax({
			type: "POST",
			url: "" + url + "uploadbook",
			data: formData,
			processData: false,
            contentType: false,
            dataType : "json",
			headers: {
				'csrftoken': $('meta[name="csrf-token"]').attr('content')
			},
			success: function (response) {
				if (response.status == "success") {
					alert("Book Uploaded");
					location.reload();
				}
			}
		});
	}
});
function editbook(bookid)
{
    alert(bookid);
}