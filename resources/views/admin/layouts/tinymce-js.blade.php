{{-- <script src="{{URL::asset('assets/tinymce/tinymce.min.js')}}"></script> --}}
{{-- <script>
    tinymce.init({
        theme: 'advanced',
        resize: false,
        fontsize_formats: "8pt 10pt 12pt 14pt 18pt 24pt 36pt",
        selector: "textarea.ckeditor",
        theme: "modern",
        width: '100%',
        height: 500,
        autoresize_min_height: 500,
        autoresize_max_height: 800,
        plugins: [
          "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
          "searchreplace wordcount visualblocks code fullscreen visualchars insertdatetime media nonbreaking",
          "table contextmenu directionality emoticons paste textcolor responsivefilemanager autoresize"
        ],
        toolbar1: "undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent  | fontselect |  fontsizeselect ",
        toolbar2: "| responsivefilemanager | link unlink anchor | image media | forecolor backcolor  | print preview code | styleselect ",
        image_advtab: true,
        external_filemanager_path: "/filemanager/",
        filemanager_title: "filemanager",
        external_plugins: {
          "filemanager": "filemanager/plugin.min.js"
        }
      });
    </script> --}}
    <script src="https://cdn.tiny.cloud/1/54wk04eunysb2hfpl8vn3zrgywvszaegk172u8fje1rx4wts/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: 'textarea.ckeditor',

            image_class_list: [
            {title: 'img-responsive', value: 'img-responsive'},
            ],
            height: 500,
            setup: function (editor) {
                editor.on('init change', function () {
                    editor.save();
                });
            },
            plugins: [
                "advlist autolink lists link image charmap print preview anchor",
                "searchreplace visualblocks code fullscreen",
                "insertdatetime media table contextmenu paste imagetools"
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image ",

            image_title: true,
            automatic_uploads: true,
            images_upload_url: '/upload',
            file_picker_types: 'image',
            file_picker_callback: function(cb, value, meta) {
                var input = document.createElement('input');
                input.setAttribute('type', 'file');
                input.setAttribute('accept', 'image/*');
                input.onchange = function() {
                    var file = this.files[0];

                    var reader = new FileReader();
                    reader.readAsDataURL(file);
                    reader.onload = function () {
                        var id = 'blobid' + (new Date()).getTime();
                        var blobCache =  tinymce.activeEditor.editorUpload.blobCache;
                        var base64 = reader.result.split(',')[1];
                        var blobInfo = blobCache.create(id, file, base64);
                        blobCache.add(blobInfo);
                        cb(blobInfo.blobUri(), { title: file.name });
                    };
                };
                input.click();
            }
        });
</script>




