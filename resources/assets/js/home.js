import { runInContext } from "vm";

$(document).ready(function(){
    var left = 200;
    var top = 200;
    
    $('.popup').each(function(index){
        $(this).css('left',left);
        $(this).css('top',top);
        left+=50;
        top+=50;
    })

    $('.popup_delete').on("click",function(){
        $(this).parents('div.popup').fadeOut();
    })

    $('#korea div p').each(function(index,elem){

        $(elem).mouseover(function(){
            $(elem).siblings('img').css('opacity','1');

        })
        $(elem).mouseleave(function(){
            $(elem).siblings('img').css('opacity','0');
        })

        // $(elem).click(function(){
            
        //     console.log(index);
        // })
    })
    console.log('test');
    function popup_show(imgurl)
    {
        $("#popimg").attr("src", imgurl);
        
        $("#popup").css("background-color","rgba( 000, 000, 000, 0.5 )");
        $("#popup").css("display","block");
    }
    
    function popup_del(){
        $("#popup").css("background-color","#fff");
        $("#popup").css("display","none");
    
    }
})