import swal from 'sweetalert';

export default (function () {
	 if (document.getElementById("success"))
	 {
		let success = document.getElementById("success");
		let message = success.getAttribute('data-message');

		setTimeout(() => {
			swal("Success!", message, "success", {
				button: {
					text: "Got it!",
					className: "btn btn-primary",
				}
		 	});
		}, 1000);
	 }
}())
