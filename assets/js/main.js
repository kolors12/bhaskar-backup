$(document).ready(function(){
    $('#classes_id').change(function(){
        var id=$(this).val();
        $.ajax({
            url : base_url+"attendance/students_details",
            method : "POST",
            data : {id: id},
            async : true,
            dataType : 'json',
            success: function(data){
                var html = '';
                var i;
                for(i=0; i<data.length; i++){
                   $('#student').append('<option value='+data[i].adm_id+'>'+data[i].student_name+'</option>') ;
                }
                $('#student').selectpicker('refresh');
                
            }
        });
        return false;
    }); 

});


$(document).ready(function(){
	
    $('#subject_id').change(function(){
        var id=$(this).val();
		var class_id = $('#classes_id').val();
		$.ajax({
            url : base_url+"classes_assign/resource_details",
            method : "POST",
            data : {id: id,class_id:class_id},
            async : true,
            dataType : 'json',
            success: function(data){
                var html = '';
                var i;
               
				for(i=0; i<data.length; i++){
                  html += '<option value='+data[i].re_id+'>'+data[i].topic_name+'</option>';
                   }
             
               $('#resource').html(html);
                
            }
        });
        return false;
    }); 

});
