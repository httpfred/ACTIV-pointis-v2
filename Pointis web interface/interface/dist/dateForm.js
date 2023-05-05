// Format de la date

function formatComplet(arg) {
    let format = new Date(arg),
        ret;
    ret = format.toLocaleDateString('fr-fr', { weekday: "long", year: "numeric", month: "short", day: "numeric" });
    return ret
}

function formatHeure(arg) {

    if(arg === undefined){
        let infos = "Pas encore pointé";
        return infos;
    }
    else
    {
        let format = new Date(arg),
        ret;
        ret = format.getHours() + "h:" + format.getMinutes() + "mn:" + format.getSeconds() + "s";
        return ret
    }
    
}
