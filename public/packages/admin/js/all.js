function convertToSlug(Text)
{
    return Text
        .toLowerCase()
        .replace(/[^\w ]+/g,'')
        .replace(/ +/g,'-')
        ;
}

$('[name=title]').on('keyup', function ()
{
	var title = $(this).val();
	
	var slug = convertToSlug(title);
	
	$('[name=slug]').val(slug);

	$('.slug-preview').text(slug);

});

/*jslint unparam: true, regexp: true */
/*global window, $ */
$(function () {
    'use strict';
    // Change this to the location of your server-side upload handler:
	//var url = '/D3distributor/public/uploads';
	
	var latest_images = [];
   /* var url = window.location.hostname === 'blueimp.github.io' ? 
                '//jquery-file-upload.appspot.com/' : '/D3distributor/public/uploads',
        uploadButton = $('<button type="button" />')
            .addClass('btn btn-primary')
            .prop('disabled', true)
            .text('Processing...')
            .on('click', function () {
                var $this = $(this),
                    data = $this.data();
                $this
                    .off('click')
                    .text('Abort')
                    .on('click', function () {
                        $this.remove();
                        data.abort();
                    });
                data.submit().always(function () {
                    $this.remove();
                });
            });*/
    $('#fileupload').fileupload({
        url: url,
        dataType: 'json',
        autoUpload: false,
        acceptFileTypes: /(\.|\/)(gif|jpe?g|png)$/i,
        maxFileSize: 5000000, // 5 MB
        // Enable image resizing, except for Android and Opera,
        // which actually support image resizing, but fail to
        // send Blob objects via XHR requests:
        disableImageResize: /Android(?!.*Chrome)|Opera/
            .test(window.navigator.userAgent),
        previewMaxWidth: 100,
        previewMaxHeight: 100,
        previewCrop: true
    }).on('fileuploadadd', function (e, data) {
		
		 $('.start').click(function () {			 
                   // $('.start').text('Uploading...');
                    data.submit();
					return false;
                });
        data.context = $('<div/>').attr('class','pre-upload-view').appendTo('#files');
        $.each(data.files, function (index, file) {
            var node = $('<p/>')
                    .append($('<span/>').text(file.name));
           /* if (!index) {
                node
                    .append('<br>')
                    .append(uploadButton.clone(true).data(data));
            }*/
            node.appendTo(data.context);
        });
    }).on('fileuploadprocessstart', function (e) {
		if(document.product_form.elements.namedItem('name').value==''){
			alert("Please enter product name first");
			return false;
		}
		else if(document.product_form.elements.namedItem('category_id').value==''){
			alert("Please choose category for product");
			return false;
		}
	
	}).on('fileuploadprocessalways', function (e, data) {
		
        var index = data.index,
            file = data.files[index],
            node = $(data.context.children()[index]);
        if (file.preview) {
            node
                .prepend('<br>')
                .prepend(file.preview);
        }
        if (file.error) {
            node
                .append('<br>')
                .append($('<span class="text-danger"/>').text(file.error));
        }
        if (index + 1 === data.files.length) {
            data.context.find('button')
                .text('Upload')
                .prop('disabled', !!data.files.error);
        }
    }).on('fileuploadprogressall', function (e, data) {
        var progress = parseInt(data.loaded / data.total * 100, 10);
        $('#progress .progress-bar').css(
            'width',
            progress + '%'
        );
		
		return false;
    }).on('fileuploaddone', function (e, data) {
        $.each(data.result.files, function (index, file) {
			latest_images.push(file.name);
            if (file.url) {
                var link = $('<a>')
                    .attr('target', '_blank')
                    .prop('href', file.url);
                $(data.context.children()[index])
                    .wrap(link);
            } else if (file.error) {
                var error = $('<span class="text-danger"/>').text(file.error);
                $(data.context.children()[index])
                    .append('<br>')
                    .append(error);
            }
			
        });
	}).on('fileuploadstop', function (e) {
		//alert(document.product_form.elements['files']);
		$("#file_hidden").val(JSON.stringify(latest_images));
		document.product_form.submit();
    }).on('fileuploadfail', function (e, data) {
        $.each(data.files, function (index) {
            var error = $('<span class="text-danger"/>').text('File upload failed.');
            $(data.context.children()[index])
                .append('<br>')
                .append(error);
        });
    }).prop('disabled', !$.support.fileInput)
        .parent().addClass($.support.fileInput ? undefined : 'disabled');
});
