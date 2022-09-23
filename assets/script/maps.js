import * as L from "leaflet";
(function init(){

    // Initialisation de la Carte
    let map = L.map('map').setView([latitude ,longitude], 11);

    //Chargement des Tuiles
    L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
        maxZoom: 20,
        minZoom: 1,
        attribution: '&copy; OpenStreetMap France | &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    //Personnalisation du Marqueur (il faut regler le décalage de l icone par rapport au bord avec iconAnchor
    // et la Popup avec popupAnchor
       let icon = L.icon({
            iconUrl : '/build/images/icon.png',
            iconSize : [50,50],
            iconAnchor : [25,50],
            popupAnchor : [0,-50]
        })
    //Placement du Marqueur
        let marker = L.marker([latitude,longitude],{icon:icon}).addTo(map);
    //Attribution de son Popup
        marker.bindPopup(
            'point de rdv'
        );
}())



