
jQuery(function($){

    $("input[type=submit][name=del_room]").submit(function(){
        if(confirm("現在の部屋を削除しますか？")){
            return false;
        }
    })