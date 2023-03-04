function dashboard(){  
    $.ajax({
        url:"../student/dashboard.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}

function student_room(){  
    $.ajax({
        url:"../student/student_room.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}

function student_equipment(){  
    $.ajax({
        url:"../student/student_equipment.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}