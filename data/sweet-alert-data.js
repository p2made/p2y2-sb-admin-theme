// tooltip demo
$('.tooltip-demo').tooltip({
	selector: "[data-toggle=tooltip]",
	container: "body"
})

// popover demo
$("[data-toggle=popover]").popover()

document.querySelector('#sweet-1').onclick = function(){
	swal("Here's a message!");
};

document.querySelector('#sweet-2').onclick = function(){
	swal("Here's a message!", "It's pretty, isn't it?")
};

document.querySelector('#sweet-3').onclick = function(){
	swal("Good job!", "You clicked the button!", "success");
};

document.querySelector('#sweet-4').onclick = function(){
	swal("Warning!", "You clicked the button!", "warning");
};

document.querySelector('#sweet-5').onclick = function(){
	swal("Error!", "You clicked the button!", "error");
};

document.querySelector('#sweet-6').onclick = function(){
	swal("Info!", "You clicked the button!", "info");
};

document.querySelector('#sweet-7').onclick = function(){
	swal({
		title: "Sweet!",
		text: "Here's a custom image.",
		imageUrl: 'data/thumbs-up.jpg'
	});
};

document.querySelector('#sweet-8').onclick = function(){
	swal({
		title: "Are you sure?",
		text: "You will not be able to recover this imaginary file!",
		type: "warning",
		showCancelButton: true,
		confirmButtonClass: 'btn-danger',
		confirmButtonText: 'Yes, delete it!',
		closeOnConfirm: false,
		//closeOnCancel: false
	},
	function(){
		swal("Deleted!", "Your imaginary file has been deleted!", "success");
	});
};

document.querySelector('#sweet-9').onclick = function(){
	swal({
		title: "Are you sure?",
		text: "You will not be able to recover this imaginary file!",
		type: "warning",
		showCancelButton: true,
		confirmButtonClass: 'btn-danger',
		confirmButtonText: 'Yes, delete it!',
		cancelButtonText: "No, cancel plx!",
		closeOnConfirm: false,
		closeOnCancel: false
	},
	function(isConfirm){
		window.console.log('fuck', isConfirm);
		if (isConfirm){
			swal("Deleted!", "Your imaginary file has been deleted!", "success");
		} else {
			swal("Cancelled", "Your imaginary file is safe :)", "error");
		}
	});
};

document.querySelector('.sweet-10').onclick = function(){
	swal({
		title: "Are you sure?",
		text: "You will not be able to recover this imaginary file!",
		type: "info",
		showCancelButton: true,
		confirmButtonClass: 'btn-primary',
		confirmButtonText: 'Primary!'
	});
};

document.querySelector('.sweet-11').onclick = function(){
	swal({
		title: "Are you sure?",
		text: "You will not be able to recover this imaginary file!",
		type: "info",
		showCancelButton: true,
		confirmButtonClass: 'btn-info',
		confirmButtonText: 'Info!'
	});
};

document.querySelector('.sweet-12').onclick = function(){
	swal({
		title: "Are you sure?",
		text: "You will not be able to recover this imaginary file!",
		type: "success",
		showCancelButton: true,
		confirmButtonClass: 'btn-success',
		confirmButtonText: 'Success!'
	});
};

document.querySelector('.sweet-13').onclick = function(){
	swal({
		title: "Are you sure?",
		text: "You will not be able to recover this imaginary file!",
		type: "warning",
		showCancelButton: true,
		confirmButtonClass: 'btn-warning',
		confirmButtonText: 'Warning!'
	});
};

document.querySelector('.sweet-14').onclick = function(){
	swal({
		title: "Are you sure?",
		text: "You will not be able to recover this imaginary file!",
		type: "error",
		showCancelButton: true,
		confirmButtonClass: 'btn-danger',
		confirmButtonText: 'Danger!'
	});
};
