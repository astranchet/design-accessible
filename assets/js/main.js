    function initChecklist(elem, option){
        //add active class to all checked items
        var elementList = document.querySelectorAll(elem +' input:checked');
        console.log(elementList);
        Array.prototype.forEach.call(elementList, function (e) {
            e.parentElement.classList.add('active');
        });

        //addEventListener on mouse click
        document.addEventListener('click', function (e) {
            //check is the right element clicked
            if (!e.target.matches('input')) return;
            else {
                //check if element contains active class
                if(!e.target.parentElement.classList.contains('active')){
                    //add active class on cliked accordion     
                    e.target.parentElement.classList.add('active');
                }else{
                    //remove active class on cliked accordion     
                    e.target.parentElement.classList.remove('active');
                }
            }
        });
    }
     
    initChecklist('.checklist__item');