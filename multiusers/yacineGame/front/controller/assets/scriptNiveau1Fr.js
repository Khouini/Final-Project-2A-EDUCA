"use strict";
const draggables = document.querySelectorAll('.draggable');
const containers = document.querySelectorAll('.container1');
const submit = document.getElementById('submit');
const submit2 = document.getElementById('submit2');
const result1 = document.getElementById('result1');
const result2 = document.getElementById('result2');
const result3 = document.getElementById('result3');
const resultScore = document.getElementById('resutScore');

draggables.forEach(draggable => {
    draggable.addEventListener('dragstart', () => {
        draggable.classList.add('dragging');
    })
})
draggables.forEach(draggable => {
    draggable.addEventListener('dragend', () => {
        draggable.classList.remove('dragging');
    })
})
containers.forEach(container => {
    container.addEventListener('dragover', e => {
        e.preventDefault();
        const draggable = document.querySelector('.dragging');
        container.appendChild(draggable);
        draggable.classList.add('dragCont2');
    })
})

function check() {
    var container2 = document.querySelectorAll('.dragCont2');
    var checker;
    var winchecker = true;
    var launch = true;
    var indiceMistake1;
    var indiceMistake2;
    var indiceMistake3;
    var indiceMistake4;
    if (container2.length === 4) {
        for (let i = 0; i < container2.length; i++) {
            //console.log(container2[i].textContent);
            switch (i) {
                case 0:
                    switch (container2[i].textContent) {
                        case 'Les élèves':
                            checker = true;
                            break;
                        default:
                            winchecker = false;
                            checker = false;
                            indiceMistake1 = i;
                    }
                    break;
                case 1:
                    switch (container2[i].textContent) {
                        case 'jouent':
                            checker = true;
                            break;
                        default:
                            winchecker = false;
                            checker = false;
                            indiceMistake2 = i;
                    }
                    break;
                case 2:
                    switch (container2[i].textContent) {
                        case 'dans':
                            checker = true;
                            break;
                        default:
                            winchecker = false;
                            checker = false;
                            indiceMistake3 = i;
                    }
                    break;
                case 3:
                    switch (container2[i].textContent) {
                        case 'la cours':
                            checker = true;
                            break;
                        default:
                            winchecker = false;
                            checker = false;
                            indiceMistake4 = i;
                    }
                    break;
                default:
                    console.log('Error');
            }
        }
        if (winchecker) {
            submit2.removeAttribute("hidden");
            result1.textContent = 'Réponse juste';
            resultScore.textContent = 'Score: 5';
        } else {
            result2.classList.add('border');
            result3.textContent = 'Fause réponse';
            if ((typeof(indiceMistake1)) != 'undefined') {
                var li = document.createElement("li");
                li.appendChild(document.createTextNode(`Erreur a la case ${indiceMistake1+1}`));
                li.classList.add("list-group-item");
                result2.appendChild(li);
            }
            if ((typeof(indiceMistake2)) != 'undefined') {
                var li = document.createElement("li");
                li.appendChild(document.createTextNode(`Erreur a la case ${indiceMistake2+1}`));
                li.classList.add("list-group-item");
                result2.appendChild(li);
            }
            if ((typeof(indiceMistake3)) != 'undefined') {
                var li = document.createElement("li");
                li.appendChild(document.createTextNode(`Erreur a la case ${indiceMistake3+1}`));
                li.classList.add("list-group-item");
                result2.appendChild(li);
            }
            if ((typeof(indiceMistake4)) != 'undefined') {
                var li = document.createElement("li");
                li.appendChild(document.createTextNode(`Erreur a la case ${indiceMistake4+1}`));
                li.classList.add("list-group-item");
                result2.appendChild(li);
            }
        }
    } else {
        result3.textContent = "Compléter à remplir l'étiquette";
    }
}
submit.addEventListener('click', check);