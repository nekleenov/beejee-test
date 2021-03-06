(function($) {
  'use strict';
  window.addEventListener('load', function() {
    var forms = document.getElementsByClassName('simple-example2');
    var invalid = $('.simple-example2 .invalid-feedback');

    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
          invalid.css('display', 'block');
        } else {

          invalid.css('display', 'none');

          var data = $('#editForm').serialize();
		  console.log(data);
          $.ajax({
            url: '/admin/get',
            type: "POST",
            data: data,
          }).done(function(res) {
            res = JSON.parse(res);
            if(res['status']['code'] != 'ok') {
              Snackbar.show({
                text: res['status']['text'],
                pos: 'bottom-right',
                actionTextColor: '#fff',
                backgroundColor: '#e7515a',
                showAction: false
              })
            } else {
				form.classList.add('was-validated');
				const toast = swal.mixin({
					toast: true,
					position: 'top-end',
					showConfirmButton: false,
					timer: 2000,
					padding: '2em'
				});

				toast({
					type: 'success',
					title: 'Задача успешна сохранена',
					padding: '2em',
				});
				var delay = 2200;
				setTimeout("document.location.href='/admin'", delay);
			 
            }
			
			
			
          }).fail(function() {
            alert("responseError");
          });

        }
      }, false);
    });

  }, false);
})(jQuery);