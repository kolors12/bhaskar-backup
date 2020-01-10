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
                $('#student').selectpicker('refresh') ;
                
            }
        });
        return false;
    }); 

});
