function next1() {
    document.getElementById('etape1').classList.add('hidden');
    document.getElementById('etape2').classList.remove('hidden');
}
function next2() {
    document.getElementById('etape2').classList.add('hidden');
    document.getElementById('etape3').classList.remove('hidden');
}

function back1() {
    document.getElementById('etape2').classList.add('hidden');
    document.getElementById('etape1').classList.remove('hidden');
}
function back2() {
    document.getElementById('etape3').classList.add('hidden');
    document.getElementById('etape2').classList.remove('hidden');
}