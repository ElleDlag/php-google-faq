window.onload = function(){
    var question = document.querySelectorAll('.theQuestion');
    var groupAsks = document.querySelectorAll('.all-asks');
    var ask = document.querySelector('.allAsk');
    question.forEach(function(elem,i){
        elem.addEventListener('click',function(ev,n){
            for (var k = 0; k < groupAsks.length; k++) {
                if (k == i){
                    groupAsks[k].classList.add('viewAsk');
                } else {
                    groupAsks[k].classList.remove('viewAsk');
                }
            }
        })
    });
  /*   question.addEventListener('click',function(el){
        console.log(indexOf(this))
    }) */
}//end here
