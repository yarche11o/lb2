function leagueFunction() {
    let key = document.getElementById("league").value;
    let value = localStorage.getItem(key);
    document.getElementById('res').innerHTML = value;
}
function playerFunction(){
    let key = document.getElementById("player").value;
    key = key + " 1";
    let value = localStorage.getItem(key);
    document.getElementById('res').innerHTML = value;
}
function teamFunction() {
    let key = document.getElementById("team").value;
    key = key + " 2";
    let value = localStorage.getItem(key);
    document.getElementById('res').innerHTML = value;
}
