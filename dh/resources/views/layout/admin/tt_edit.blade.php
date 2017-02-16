
@extends('template/admin/supadmin')

@section('edit_and_delete')
<form action='{{ Route('postEditTt',['id'=>$editItem->id]) }}' method='post'>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
              <label>Tựa Đề</label>
              <input type="text" class="form-control" name="title" value='{{$editItem->title}}'>
          </div>
          <div class="form-group">
              <label>mô tả</label>
              <input type="text" class="form-control" name="description" value='{{$editItem->description}}'>
          </div>
          <div class="form-group">
              <label>Thẻ</label>
              <input type="text" class="form-control" name="tag" value='{{$editItem->tag}}'>
          </div>

          <div class="form-group">
            <span class='btn btn-default' id='hide-show-editor' onclick="editContent(); check_click_edit_content()">Sửa nội dung</span>
          	<div id='editor'>
              <label>nội dung</label>
              <textarea class='form-control' id='editor1' name='content' ></textarea>
            </div>
          </div>
          <div class="form-group">
              <label>Ảnh</label>
              <input type="text" class="form-control" onclick="openKCFinder(this)" style="width:600px;cursor:pointer" value='{{$editItem->image}}' name="image" readonly="">
          </div>  
          
          <button type="submit" id="submit" class="btn btn-default" style="display:none;">Submit</button>

         <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'editor1', {
    filebrowserBrowseUrl: '{{url('kcfinder/browse.php?opener=ckeditor&type=files')}}',
    filebrowserUploadUrl: '{{url('kcfinder/upload.php?opener=ckeditor&type=files')}}'
});
            </script>  
            <script>

function openKCFinder(field) {
    window.KCFinder = {
        callBack: function(url) {
            field.value = url;
            window.KCFinder = null;
        }
    };
    window.open('{{url('kcfinder/browse.php?type=files&dir=files/public')}}', 'kcfinder_textbox',
        'status=0, toolbar=0, location=0, menubar=0, directories=0, ' +
        'resizable=1, scrollbars=0, width=800, height=600'
    );
}
</script>
<script>
	function editContent(){
    //đoạn php script này dùng để chỉnh lại text trong database chứa những đoạn xuống đòng mà javascrip không chấp nhận làm giá trị của biến
	var data='<?php   $string = str_replace(array("\r\n", "\r", "\n"), "<br />", $editItem->content); 
	echo $string;
	?>';
	
	CKEDITOR.instances['editor1'].setData(data);
    
	
}
</script>
          </form>
@endsection