jQuery(document).ready(function($){  

    $("ul.sub-menu").parent().append("<span></span>"); //Only shows drop down trigger when js is enabled (Adds empty span tag after ul.sub-menu*) sub-menuiクラスがある親liの最後に空のspanタグをつける＞cssでナビ用の下三角をつける 

    $("ul#menu-menu li span").click(function() { //When trigger is clicked... spanクラスがクリックされたら  

        //Following events are applied to the sub-menu itself (moving sub-menu up and down) sub-menu自身に次の効果が適用される(サブナビが上下に動く) 
        $(this).parent().find("ul.sub-menu").slideDown('fast').show(); //Drop down the sub-menu on click  

        $(this).parent().hover(function() {  
        }, function(){    
            $(this).parent().find("ul.sub-menu").slideUp('fast'); //When the mouse hovers out of the sub-menu, move it back up  
        });  

        //Following events are applied to the trigger (Hover events for the trigger)  トリガーに次の効果が適用される(トリガーにホバーイベント)
    }).hover(function() {   
        $(this).addClass("subhover"); //On hover over, add class "subhover"  
    }, function(){  //On Hover Out  
        $(this).removeClass("subhover"); //On hover out, remove class "subhover"  
    });  

    //ナンバリング
    //コントロール
    if($('.single-post h2').size != 0){
        $('.single-post h2').each(function(i){
            $(this).after('<div id="jumpto_' +(i+1)+'" class="anchor-p"></div>');
            $('div#control>ol').append(
                '<li><a href="#jumpto_'+(i+1)+'" >'+$(this).html()+'</a></li>'
                );
            $(this).text((i+1)+ ' ' +$(this).text());
        });
    };
    if($('.single-post h2').html() == null){
        $('div.control').hide();
    
    }

}); 

