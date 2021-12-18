// const inputs = document.querySelectorAll('.w-25');
const submit = document.getElementById('submit');
const result1 = document.getElementById('result1');
const result2 = document.getElementById('result2');
const result3 = document.getElementById('result3');
const resultScore = document.getElementById('resutScore');
const submit2 = document.getElementById('submit2');

function check() {
    let input1 = document.forms['myForm']['input1'];
    let input2 = document.forms['myForm']['input2'];
    let input3 = document.forms['myForm']['input3'];
    let input4 = document.forms['myForm']['input4'];
    let input5 = document.forms['myForm']['input5'];
    let input6 = document.forms['myForm']['input6'];
    let input7 = document.forms['myForm']['input7'];
    let input8 = document.forms['myForm']['input8'];
    let input9 = document.forms['myForm']['input9'];



    let checker1;
    let checker2;
    let checker3;
    let checker4;
    let checker5;
    let checker6;
    let checker7;
    let checker8;
    let checker9;

    let winChecker1;
    let winChecker2;
    let winChecker3;
    let winChecker4;
    let winChecker5;
    let winChecker6;
    let winChecker7;
    let winChecker8;
    let winChecker9;

    // input 1
    if (input1.value === '10') {
        winChecker1 = true;
        checker1 = true;
    } else {
        winChecker1 = false;
        checker1 = false;
    }
    // input 2
    if (input2.value === '2') {
        winChecker2 = true;
        checker2 = true;
    } else {
        winChecker2 = false;
        checker2 = false;
    }
    // input 3
    if (input3.value === '100') {
        winChecker3 = true;
        checker3 = true;
    } else {
        winChecker4 = false;
        checker3 = false;
    }
    // input 4
    if (input4.value === '700') {
        winChecker4 = true;
        checker4 = true;
    } else {
        winChecker4 = false;
        checker4 = false;
    }
    // input 5
    if (input5.value === '800') {
        winChecker5 = true;
        checker5 = true;
    } else {
        winChecker5 = false;
        checker5 = false;
    }
    // input 6
    if (input6.value === '7') {
        winChecker6 = true;
        checker6 = true;
    } else {
        winChecker6 = false;
        checker6 = false;
    }
    // input 7
    if (input7.value === '10') {
        winChecker7 = true;
        checker7 = true;
    } else {
        winChecker7 = false;
        checker7 = false;
    }
    // input 8
    if (input8.value === '90') {
        winChecker8 = true;
        checker8 = true;
    } else {
        winChecker8 = false;
        checker8 = false;
    }
    // input 9
    if (input9.value === '80') {
        winChecker9 = true;
        checker9 = true;
    } else {
        winChecker9 = false;
        checker9 = false;
    }
    // results
    if (winChecker1 && winChecker2 && winChecker3 && winChecker4 && winChecker5 && winChecker6 && winChecker6 && winChecker7 && winChecker8 && winChecker9) {
        submit2.removeAttribute("hidden");
        result1.textContent = 'Réponse juste';
        resultScore.textContent = 'Score: 5';
    } else {
        result2.classList.add('border');
        result3.textContent = 'Fause réponse';
        if (checker1 === false) {
            var li = document.createElement("li");
            li.appendChild(document.createTextNode(`Erreur a la case 1`));
            li.classList.add("list-group-item");
            result2.appendChild(li);
            input1.classList.add('bg-danger');
        }
        if (checker2 === false) {
            var li = document.createElement("li");
            li.appendChild(document.createTextNode(`Erreur a la case 2`));
            li.classList.add("list-group-item");
            result2.appendChild(li);
            input2.classList.add('bg-danger');

        }
        if (checker3 === false) {
            var li = document.createElement("li");
            li.appendChild(document.createTextNode(`Erreur a la case 3`));
            li.classList.add("list-group-item");
            result2.appendChild(li);
            input3.classList.add('bg-danger');

        }
        if (checker4 === false) {
            var li = document.createElement("li");
            li.appendChild(document.createTextNode(`Erreur a la case 4`));
            li.classList.add("list-group-item");
            result2.appendChild(li);
            input4.classList.add('bg-danger');

        }
        if (checker5 === false) {
            var li = document.createElement("li");
            li.appendChild(document.createTextNode(`Erreur a la case 5`));
            li.classList.add("list-group-item");
            result2.appendChild(li);
            input5.classList.add('bg-danger');

        }
        if (checker6 === false) {
            var li = document.createElement("li");
            li.appendChild(document.createTextNode(`Erreur a la case 6`));
            li.classList.add("list-group-item");
            result2.appendChild(li);
            input6.classList.add('bg-danger');

        }
        if (checker7 === false) {
            var li = document.createElement("li");
            li.appendChild(document.createTextNode(`Erreur a la case 7`));
            li.classList.add("list-group-item");
            result7.appendChild(li);
        }
        if (checker8 === false) {
            var li = document.createElement("li");
            li.appendChild(document.createTextNode(`Erreur a la case 8`));
            li.classList.add("list-group-item");
            result2.appendChild(li);
            input8.classList.add('bg-danger');

        }
        if (checker9 === false) {
            var li = document.createElement("li");
            li.appendChild(document.createTextNode(`Erreur a la case 9`));
            li.classList.add("list-group-item");
            result2.appendChild(li);
            input9.classList.add('bg-danger');

        }
    }

}
submit.addEventListener('click', check);