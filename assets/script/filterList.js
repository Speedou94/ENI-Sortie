    const isRegistred = document.getElementById('events_list_isRegistred');
    const isNotRegistred = document.getElementById('events_list_isNotRegistred');

    isRegistred.addEventListener('change', (e)=>{
        if(isNotRegistred.checked){
           isNotRegistred.checked = false;
        }
    })
    isNotRegistred.addEventListener('change', (e)=>{
        if(isRegistred.checked){
            isRegistred.checked = false;
        }
    })
