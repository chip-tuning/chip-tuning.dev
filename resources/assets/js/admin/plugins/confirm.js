import * as $ from 'jquery';
import swal from 'sweetalert';

export default (function() {
	$('a[rel="delete"]').on('click', (event) => {
		event.preventDefault();
		let id = $(event.currentTarget).data('id');

		swal({
			title: "Are you sure?",
			text: "This action will permamently delete data from our records.",
			icon: "warning",
			buttons: {
			  cancel: {
			    text: "Cancel",
			    value: false,
			    visible: true,
			    className: "btn btn-default",
			    closeModal: true,
			  },
			  confirm: {
			    text: "Confirm",
			    value: true,
			    visible: true,
			    className: "btn btn-danger",
			    closeModal: true
			  }
			},
			dangerMode: true,
		})
		.then((willDelete) => {
			if (willDelete) {
				$(id).submit();
			}
		});
	});
}())