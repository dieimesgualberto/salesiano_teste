(function(win,doc){
'use strict';


function confirmDel(event)
{
    //event.prevenDefault();
    let token=doc.getElementsByName("_token")[0].value;
    if(confirm("Deseja mesmo apagar?")){
        let ajax=new XMLHttpRequest();
        $.ajax({
            url: event.target.dataset.path,
            type: 'DELETE',
            headers: {
                "X-CSRF-TOKEN":token,
            },
            success: function(result) {
                doc.location.reload();
            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert(xhr.status);
                alert(thrownError);
            }
        });
    }else{
        return false;
    }
}
if(doc.querySelector('.js-del')){
    let btn = doc.querySelectorAll('.js-del');
    for(let i=0; i<btn.length; i++){
        btn[i].addEventListener('click',confirmDel,false);
    }
}

})(window,document);