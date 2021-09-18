tinymce.init({
  selector: '.richtext',
  height: 200,
  plugin: ['advlist autolink lists link image charmap print preview anchor', 'searchreplace visualblocks code fullscreen', 'insertdatetime media table contextmenu paste imagetools renponsivefilemanager'],

  toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter ' + 'lighright alignjustify | bullist numlist outdent indent | respinsivefilemanager',
  imagetools_cors_hosts: ['www.tinymce.com', 'codepen.io'],
  content_css: ['//www.tinymce.com/css/codepen.min.css'],
  external_filemanager_path: '../plugin/filemanager',
  filemanager_title: 'File Manager',
  external_plugins: { filemanager: '../filemanager/plugin.min.js' },
});
