window.setTimeout("waktu()", 1000);

function waktu() {
    var pukul = document.getElementById('jam');
    var waktu = new Date(),
        h, m, s;
    h = waktu.getHours();
    m = waktu.getMinutes();
    s = waktu.getSeconds();

    pukul.innerHTML = h + ':' + m + ':' + s;
    setTimeout("waktu()", 1000);
}
