$('#date').datepicker({
    beforeShowDay: function(date){
        var day = date.getDay();
        if (day==1 || day==0)
        {
            return [false];
        }
        else
            return [true];
    },
    minDate:0,
    closeText: 'Fermer',
    prevText: 'Précédent',
    nextText: 'Suivant',
    monthNames: ['Janvier','Février','Mars','Avril','Mai','Juin',
    'Juillet','Août','Septembre','Octobre','Novembre','Décembre'],
    monthNamesShort: ['Jan','Fév','Mar','Avr','Mai','Jun',
    'Jul','Aoû','Sep','Oct','Nov','Déc'],
    dayNames: ['Dimanche','Lundi','Mardi','Mercredi','Jeudi','Vendredi','Samedi'],
    dayNamesShort: ['Dim','Lun','Mar','Mer','Jeu','Ven','Sam'],
    dayNamesMin: ['Di','Lu','Ma','Me','Je','Ve','Sa'],
    dateFormat: 'yy/mm/dd', firstDay: 1, 
});

var resaplacement = document.getElementById("placement");
var lundi = document.getElementById("lundi");
var jeudi = document.getElementById("jeudi");
var dimanche = document.getElementById("dimanche");
var serv = document.getElementById("serve");
var brheure = document.getElementById("brheure");
var date = document.getElementById("date");
var midi = document.getElementById("midi");
var miditrente = document.getElementById("miditrente")
resaplacement.addEventListener("change", afficherheure);
date.addEventListener("click",reset);

function reset(){
    resaplacement.value = "";
    lundi.value = "";
    lundi.style.display = "none";
    jeudi.value = "";
    jeudi.style.display = "none";
    dimanche.value = "";
    dimanche.style.display = "none";
    serv.style.display = "none";
    brheure.style.display = "none";
}

function afficherheure(){
    if(resaplacement.value == "intérieur" || resaplacement.value == "extérieur"){
        console.log("cc")
        lundi.style.display = "inline";
        serv.style.display = "inline";
        brheure.style.display = "inline";
        }else{
        lundi.style.display = "none";
        serv.style.display = "none";
        brheure.style.display = "none";
        }
    var day = new Date(date.value);
    var getday = day.getDay();
    console.log(getday);
    if( getday == 1 || getday == 2 || getday == 3){
        console.log("cc")
        lundi.style.display ="inline";
        jeudi.style.display = "none";
        dimanche.style.display = "none";
    }else if( getday == 4 || getday == 5 || getday == 6){
        jeudi.style.display = "inline";
        lundi.style.display = "none";
        dimanche.style.display = "none";
    }else{
        jeudi.style.display = "none";
        lundi.style.display = "none";
        dimanche.style.display = "inline";
    }
    }

// function afficherheure(){
//     day = new Date(date.value);
//     if(day == 1 || day == 2 || day == 3){
//         console.log("cc")
//         midi.style.display = "none";
//         miditrente.style.dyplay = "none";
//     }else{
//         midi.style.display = "inline";
//         miditrente.style.display = "inline"; 
//     }
// }