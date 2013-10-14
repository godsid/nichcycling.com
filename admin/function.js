function editcategory(id,name,sort){
	$('#category_name').val(name);
	$('#category_sort').val(sort);
	$('#category_id').val(id);
	$('#category_form').attr('action',$('#category_form').attr('action').replace('new','edit'));
	
	return false;
}

function insertImage(){

}
function addImage(){
	var r = Math.round(Math.random()*10000);
	var template = '<input class="text-input medium-input" type="text" id="product_image'+r+'" name="product_images[]" onchange="insertImage(this)"  /><a href="javascript:void();" onclick="mcImageManager.browse({fields:\'product_image'+r+'\',relative_urls:true,disabled_tools:\'filemanager\'});return false;"> [Uploads]</a> ';
	$(template).insertBefore('#addImageBt');	
	
}