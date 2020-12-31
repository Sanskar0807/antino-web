  if( $("#customform_data").length ){
    $("#customform_data").append('<iframe src="https://contactform.hulkapps.com/corepage/contact?id=525f6005237c6d8eb70a9f" id="frame_525f6005237c6d8eb70a9f" frameborder="0" width="100%">');
    frame_resize();
  }

  $(document).ready(function($) {
    if($('body').find("#hulk_customform_button").length > 0){
    }
    
    $(document).on('click', '.hulk_form_as_popup', function(){
      var id = $("#hulk_customform_button").attr('data-id')
      $(".hulk-modal-content").html('<iframe src="https://contactform.hulkapps.com/corepage/contact?id=525f6005237c6d8eb70a9f" id="framepopup_525f6005237c6d8eb70a9f" frameborder="0" width="100%">')
      $('.confirm_popup, .confirm-backdrop').show();
      frame_resize();
    });

    $(document).on('click', '.hulk-close-btn', function(){ 
      $('.confirm_popup, .confirm-backdrop').hide();
      $('body').removeClass('body-fixed');
    });
  });

  function hulkAddCss(fileName) {
    var head = document.head;
    var link = document.createElement("link");
    link.type = "text/css";
    link.rel = "stylesheet";
    link.href = fileName;
    head.appendChild(link);
  }

  // Resize the iframes when the window is resized
  $( window ).resize( function () {
    frame_resize();
  }).resize();

  function frame_resize(){
    var iframes = $( "#customform_data iframe, #hulk_contact iframe" );
    iframes.each( function() {
      var width = $( this ).parent().width();
      $( this ).width( width );
      var divId = $(this).attr('id');
      var zino_resize = function (event) {
          if (event.origin !== "https://contactform.hulkapps.com") {
              return;
          }
          var zino_iframe = document.getElementById(divId);
          if (zino_iframe) {
              zino_iframe.style.height = event.data + "px";
          }
      };
      if (window.addEventListener) {
          window.addEventListener("message", zino_resize, false);
      } else if (window.attachEvent) {
          window.attachEvent("onmessage", zino_resize);
      }
    });
  }
