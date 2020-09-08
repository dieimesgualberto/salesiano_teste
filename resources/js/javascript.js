(function(win,doc){
'use strict';


function confirmDel(event)
{
    event.prevenDefault();
    //console.log(event.target.parentNode.href);
    let token=doc.getElementsByName("_token")[0].value;
    if(confirm("Deseja mesmo apagar?")){
        //console.log("Apagou!")
        let ajax=new XMLHttpRequest();
        ajax.open("DELETE",event.target.parentNode.href);
        ajax.setRequestHeader('x-CSRF-TOKEN',token);
        ajax.onreadystatechange=function(){
            if(ajaxd.readyState === 4 && ajax.status === 200){
                win.location.href="";
            }
        }
    }else{
        return false;
    }
}
if(doc.querySelector('.js-del')){
    let btn-doc.querySelectorAll('.js-del');
    for(let i=0; i<btn.length; i++){
        btn[i].addEventLister('click',confirmDel,false);
    }
}

})(window,document);