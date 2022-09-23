
const loc = document.getElementById('location');
const selectedCity = document.getElementById('event_city');
const formLocation = document.getElementById('formLocation');

formLocation.addEventListener('submit',(e)=>{
  //  e.preventDefault();
    console.log(e)

})

selectedCity.addEventListener('change',(e)=>{
    let idVille = e.target.value;
    if (idVille !== ''){
        loc.removeAttribute('disabled')
        getAssociatedLocation(idVille);
    } else {
        loc.setAttribute('disabled','true')
    }
})

function getAssociatedLocation(idVille) {
    let zip = 0 ;
    fetch(`${urlApi}/location/`+idVille).then((res)=>
        res.json()
    ).then((data)=>{
        console.log(data)
        zip = data[0];
        let option ="<option value='0'>Choisir un lieu</option>";
        data[1].map(loc=>{
            option += `<option value="${ loc.id }">${ loc.name }</option>`
        })
        loc.innerHTML = option
    })
    loc.addEventListener('change',(e)=>{
        const infos = document.getElementById('info');
        let idLocation = e.target.value;

        fetch(`${urlApi}/detail/`+idLocation).then((res)=>
            res.json()
        ).then((data)=>{
            console.log(data);
            infos.innerHTML =
                `<div class="mt-5"><h5>Information sur le lieu de la sortie</h5> </div>
                     <div>
                     <p class="text-primary"> Rue :${data.street}</p>
                        <p class="text-primary">code postal :${zip}</p>
                    </div>
                    <div>
                        <div> <label class="form-label">Latitude<input type="number" class="form-control" readonly value="${data.latitude}"></label></div>
                        <div> <label class="form-label">Longitude<input type="number" class="form-control" readonly value="${data.longitude}"></label></div>
                    </div>`;
        })
    })
}