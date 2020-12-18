function showTables(id) {
    var form;
    if (id==1) {
        form = 'consumptionForm';
    } else if (id==3) {
        form = 'maxCofeeForm';
    } else if (id ==4) {
        form = 'avarageCoffeeForm';
    } else if (id ==6) {
        form = 'avarageCoffeeDay';
    }
    if (form) {
    document.getElementById(form).submit();
    }
}

const DAY = document.getElementById("submitDay");
DAY.addEventListener("change", function(item){
    document.getElementById("consumptionFormByDay").submit();
});

const Programmer = document.getElementById("submitPr");
DAY.addEventListener("change", function(item){
    document.getElementById("consumptionCoffeeProg").submit();
});