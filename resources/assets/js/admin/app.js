// Bootstrap app
require('./bootstrap');

import Clipboard from 'clipboard';

export default (function () {
	// Utilities
  // ------------------------------------------------------
  // @Window Resize
  // ------------------------------------------------------

  /**
   * NOTE: Register resize event for Masonry layout
   */
  const EVENT = document.createEvent('UIEvents');
  window.EVENT = EVENT;
  EVENT.initUIEvent('resize', true, false, window, 0);


  window.addEventListener('load', () => {
    /**
     * Trigger window resize event after page load
     * for recalculation of masonry layout.
     */
    window.dispatchEvent(EVENT);
  });

  // ------------------------------------------------------
  // @External Links
  // ------------------------------------------------------

  // Open external links in new window
  $('a')
    .filter('[href^="http"], [href^="//"]')
    .not(`[href*="${window.location.host}"]`)
    .attr('rel', 'noopener noreferrer')
    .attr('target', '_blank');

  // ------------------------------------------------------
  // @Resize Trigger
  // ------------------------------------------------------

  // Trigger resize on any element click
  document.addEventListener('click', () => {
    window.dispatchEvent(window.EVENT);
  });

	// Search
  $('.search-toggle').on('click', e => {
    $('.search-box, .search-input').toggleClass('active');
    $('.search-input input').focus();
    e.preventDefault();
  });

	// Sidebar
  // Sidebar links
  $('.sidebar .sidebar-menu li a').on('click', function () {
    const $this = $(this);

    if ($this.parent().hasClass('open')) {
      $this
        .parent()
        .children('.dropdown-menu')
        .slideUp(200, () => {
          $this.parent().removeClass('open');
        });
    } else {
      $this
        .parent()
        .parent()
        .children('li.open')
        .children('.dropdown-menu')
        .slideUp(200);

      $this
        .parent()
        .parent()
        .children('li.open')
        .children('a')
        .removeClass('open');

      $this
        .parent()
        .parent()
        .children('li.open')
        .removeClass('open');

      $this
        .parent()
        .children('.dropdown-menu')
        .slideDown(200, () => {
          $this.parent().addClass('open');
        });
    }
  });

  // Sidebar Activity Class
  const sidebarLinks = $('.sidebar').find('.sidebar-link');

  sidebarLinks
    .each((index, el) => {
      $(el).removeClass('active');
    })
    .filter(function () {
      const href = $(this).attr('href');
      const pattern = href[0] === '/' ? href.substr(1) : href;
      return pattern === (window.location.pathname).substr(1);
    })
    .addClass('active');

  // ٍSidebar Toggle
  $('.sidebar-toggle').on('click', e => {
    $('.app').toggleClass('is-collapsed');
    e.preventDefault();
  });

  /**
   * Wait untill sidebar fully toggled (animated in/out)
   * then trigger window resize event in order to recalculate
   * masonry layout widths and gutters.
   */
  $('#sidebar-toggle').click(e => {
    e.preventDefault();
    setTimeout(() => {
      window.dispatchEvent(window.EVENT);
    }, 300);
  });

	//Faq
	if ($('#faq').length > 0) {
		if ($('#question').val())
			$('#question-preview').html($('#question').val());

		if ($('#answer').val())
			$('#answer-preview').html($('#answer').val());		
		
		$('#question').on('keyup', (event) => {
			if ($(event.currentTarget).val())
				$('#question-preview').html($(event.currentTarget).val());
			else
				$('#question-preview').html('Question will be shown here.');
		});
		$('#answer').on('keyup', (event) => {
			if ($(event.currentTarget).val())
				$('#answer-preview').html($(event.currentTarget).val());
			else
				$('#answer-preview').html('Answer will be shown here.');
		});
	}

	// Blog
	if ($('#articles').length > 0) {
		// Title and slug
    $('#slug').slugify('#title');

    // Tags
     let tags = $('#tags').magicSuggest({
        useTabKey: true,
        useCommaKey: true,
        method: 'GET',
        valueField: 'name', 
        data: '/admin/api/tags'
    });

    // Dropzone
    if ($('.dropzone').length > 0)
    {
        $('.dropzone').on('click', function () {
            let dropzone = $(this);
            let file = $('<input>', {
                type: 'file',
                name: 'file',
                accept: 'image/*',
                multiple: 'multiple'
            });

            file.click();

            $(file).on('change', function(event) {
                let files = event.target.files || event.dataTransfer.files;

                if (files.length)
                {
                    $.each(files, function(key, object) {
                        let preview = $('<div />', {
                            'class': 'preview col-md-3 text-right',
                            click: function(event) {
                                event.stopPropagation();
                            }
                        });
                        let image = new Image();
                        let reader = new FileReader();
                        let canvas = document.createElement("canvas");
                            canvas.setAttribute('width', 1152);
                            canvas.setAttribute('class', 'img-fluid');
                        let ctx = canvas.getContext("2d");

                        reader.onload = function(event) {
                            image.onload = function() {
                                canvas.height = Math.round(canvas.width * 9/16);

                                let oc = document.createElement('canvas'),
                                    octx = oc.getContext('2d');
                                    oc.width = image.width * 0.5;
                                    oc.height = image.height * 0.5;
                                    octx.drawImage(image, 0, 0, oc.width, oc.height);
                                    octx.drawImage(oc, 0, 0, oc.width * 0.5, oc.height * 0.5);
                                    ctx.drawImage(oc, 0, 0, oc.width * 0.5, oc.height * 0.5, 0, 0, canvas.width, canvas.height);
                            }

                            image.src = event.target.result;
                        }

                        reader.readAsDataURL(files[key]);

                        let progressbar = $('<div />', {
                            'class': 'progress-bar',
                            role: 'progressbar',
                            'aria-valuenow': '0',
                            'aria-valuemin': '0',
                            'aria-valuemax': '100',
                            text: '0%'
                        }).css('width', '0%')

                        let progress = $('<div />', {
                            'class': 'progress'
                        }).html(progressbar);

                        let copy = $('<button />', {
                            'class': 'btn btn-sm btn-primary mr-2 copy', 
                            type: 'button',
                            text: 'Copy link',
                            click: function(event) {
                                event.stopPropagation();
                            }
                        });

                        let remove = $('<button />', {
                            'class': 'btn btn-sm btn-danger remove',
                            type: 'button',
                            text: 'Remove',
                            click: function(event) {
                                event.stopPropagation();
                                
                                if ($(this).parent().has('input').length) {
                                  axios.delete('/admin/api/dropzone/' + $(this).data('filename').split(/(\\|\/)/g).pop())
                                  .catch((error) => {
                                      if ($(this).parent().has('.progress').length)
                                          $(this).parent().children('.progress').remove();

                                      if ($(this).parent().has('.error').length) 
                                      {
                                          $(this).parent().children('.error').html(error.message);
                                      }
                                      else
                                      {
                                          let msg = $('<div />', {
                                              'class': 'error text-danger text-center',
                                              text: error.message
                                          }).css('margin', '8px 0 7px');

                                          msg.insertAfter($(this).parent().children('canvas'));                                                
                                      }
                                  });  
                                }

                                $(this).parent().remove();

                                if (!$(dropzone).children('.preview').length) 
                                    dropzone.children('.message').show();
                            }
                        });

                        let input = $('<input>', {
                            type: 'hidden',
                            name: 'files[]'
                        });

                        let data = new FormData();
                            data.append('file', object);  

                        $('.message').hide();
                        preview.append(canvas, progress);
                        preview.appendTo(dropzone);
                        
                        axios.post('/admin/api/dropzone', data, {
                            onUploadProgress: function(progressEvent) {
                                let percentCompleted = Math.round( (progressEvent.loaded * 100) / progressEvent.total);
                                $('.progress-bar').css('width', percentCompleted + '%').attr('aria-valuenow', percentCompleted).html(percentCompleted + '%');
                            }
                        })
                        .then((result) => {
                            input.attr('value', result.data.id);
                            copy.attr('aria-label', result.data.url);
                            remove.attr('data-filename', result.data.path);
                            new Clipboard(copy[0], {
                                    text: function(trigger) {
                                        return trigger.getAttribute('aria-label');
                                    }
                            });
                            preview.append(copy, remove, input);
                        })
                        .catch((error) => {
                            progressbar.addClass('bg-danger').html(error.response.data.file[0]);
                            preview.append(remove);
                        });  
                    });
                }
            });
        });
    }

    if ($('#edit').length > 0) {
      let id = $('#load-tags').data('id');
      axios.get('/admin/api/tags/edit', {
        params: {
          id: id
        }
      })
      .then(function (response) {
        tags.addToSelection(response.data)
      });

      new Clipboard('.edit-copy');
      
      $('.edit-remove').on('click', function(event) {
        event.stopPropagation();
        let removal = $(this);

        axios.delete('/admin/api/dropzone/' + removal.data('filename').split(/(\\|\/)/g).pop())
        .then(function (response) {
          removal.parent().parent().remove();

          if (!$.trim($('.uploaded-group').children('.uploaded').html()))
            $('.uploaded-group').remove();
        });
      });
    }
  }
}())