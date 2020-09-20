(function($) {
  'use strict';
  window.addEventListener('load', function() {
    var forms = document.getElementsByClassName('simple-example');
    var invalid = $('.simple-example .invalid-feedback');

    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
          invalid.css('display', 'block');
        } else {

          invalid.css('display', 'none');
          form.classList.add('was-validated');

          var data = $('#loginForm').serialize();

          $.ajax({
            url: '/login/get',
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

              $.blockUI({
                message: '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-loader spin"><line x1="12" y1="2" x2="12" y2="6"></line><line x1="12" y1="18" x2="12" y2="22"></line><line x1="4.93" y1="4.93" x2="7.76" y2="7.76"></line><line x1="16.24" y1="16.24" x2="19.07" y2="19.07"></line><line x1="2" y1="12" x2="6" y2="12"></line><line x1="18" y1="12" x2="22" y2="12"></line><line x1="4.93" y1="19.07" x2="7.76" y2="16.24"></line><line x1="16.24" y1="7.76" x2="19.07" y2="4.93"></line></svg>',
                fadeIn: 800,
                timeout: 2000, //unblock after 2 seconds
                overlayCSS: {
                  backgroundColor: '#191e3a',
                  opacity: 0.8,
                  zIndex: 1200,
                  cursor: 'wait'
                },
                css: {
                  border: 0,
                  color: '#25d5e4',
                  zIndex: 1201,
                  padding: 0,
                  backgroundColor: 'transparent'
                }
              });

              var delay = 2000;
              setTimeout("document.location.href='/admin/index'", delay);
            }
          }).fail(function() {
            alert("responseError");
          });

        }
      }, false);
    });

  }, false);
})(jQuery);