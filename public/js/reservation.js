var service = document.getElementById("service");
var midi = document.getElementById('midi');
var soir = document.getElementById('soir');


function Afficher(select) {
    console.log(midi.value);
    if(service.value == 'Déjeuner'){
    midi.style.display = "block";
    soir.style.display = "none";
    }else{
    midi.style.display = "none";
    soir.style.display = "block";
    }
};
$(function () {
    $("#date").datepicker({
        
    });
});



$('#date').datepicker({
    clearText: 'Effacer', clearStatus: '',
    closeText: 'Fermer', closeStatus: 'Fermer sans modifier',
    prevText: 'Précédent', prevStatus: 'Voir le mois précédent',
    nextText: 'Suivant', nextStatus: 'Voir le mois suivant',
    currentText: 'Courant', currentStatus: 'Voir le mois courant',
    monthNames: ['Janvier','Février','Mars','Avril','Mai','Juin',
    'Juillet','Août','Septembre','Octobre','Novembre','Décembre'],
    monthNamesShort: ['Jan','Fév','Mar','Avr','Mai','Jun',
    'Jul','Aoû','Sep','Oct','Nov','Déc'],
    monthStatus: 'Voir un autre mois', yearStatus: 'Voir un autre année',
    weekHeader: 'Sm', weekStatus: '',
    dayNames: ['Dimanche','Lundi','Mardi','Mercredi','Jeudi','Vendredi','Samedi'],
    dayNamesShort: ['Dim','Lun','Mar','Mer','Jeu','Ven','Sam'],
    dayNamesMin: ['Di','Lu','Ma','Me','Je','Ve','Sa'],
    dayStatus: 'Utiliser DD comme premier jour de la semaine', dateStatus: 'Choisir le DD, MM d',
    dateFormat: 'dd/mm/yy', firstDay: 1, 
    initStatus: 'Choisir la date', isRTL: false,
    defaultDate: "+1w",
        changeMonth: true,
        numberOfMonths: 1,
        beforeShowDay: $.datepicker.noWeekends
});
$.datepicker.setDefaults($.datepicker.regional[fr]);


