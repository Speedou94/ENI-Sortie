"use strict";(self.webpackChunk=self.webpackChunk||[]).push([[842],{4571:(t,e,o)=>{var n=o(6633);!function(){var t=n.UI("map").setView([latitude,longitude],11);n.RM("https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png",{maxZoom:20,minZoom:1,attribution:'&copy; OpenStreetMap France | &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'}).addTo(t);var e=n.qv({iconUrl:"/build/images/icon.png",iconSize:[50,50],iconAnchor:[25,50],popupAnchor:[0,-50]});n.Jw([latitude,longitude],{icon:e}).addTo(t).bindPopup("point de rdv")}()}},t=>{t.O(0,[633],(()=>{return e=4571,t(t.s=e);var e}));t.O()}]);