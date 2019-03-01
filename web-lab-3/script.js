function showTaskEditor() {

    let modal = document.querySelector(".task-edit-modal");
    modal.style.visibility = 'visible';
    modal.style.opacity = '1';

}

function hideTaskEditor() {

    let modal = document.querySelector(".task-edit-modal");
    modal.style.visibility = 'hidden';
    modal.style.opacity = '0';
    putContentToTaskEditor('','','');
}

function putContentToTaskEditor(title, notes, responsible) {
    let titleInput = document.querySelector('.js-task-edit-modal__task-title-input');
    titleInput.value = title;

    let notesInput = document.querySelector('.js-task-edit-modal__task-notes-input');
    notesInput.innerText = notes;

    let responsibleInput = document.querySelector('.js-task-edit-modal__task-responsible-input');
    responsibleInput.value = responsible;
}


let addTaskButton = document.querySelector('.js-task-column__add-task-button-title');
addTaskButton.addEventListener('click', showTaskEditor);

let modalCancelButton = document.querySelector('.js-task-edit-modal__cancel-button');
modalCancelButton.addEventListener('click', hideTaskEditor);

let modalCreateButton = document.querySelector('.js-task-edit-modal__create-button');
modalCreateButton.addEventListener('click', function (event) {
    hideTaskEditor();
});


let editButtons = document.querySelectorAll('.js-task__control-button-edit');
editButtons.forEach(function (value) {
    value.addEventListener('click', function (event) {



        putContentToTaskEditor('Not implemented loading data', 'Not implemented loading data','Not implemented loading data');
        showTaskEditor();
    });
});





function asdf(string) {
    
    let returnValue = {};
    
    for (let i = 0; i < string.length; i++) {
        
        if (returnValue[string[i]] === undefined) {
            returnValue[string[i]] = 1;
        } else {
            returnValue[string[i]] += 1;
        }

    }
    
    return returnValue;
}


console.log(asdf("dont forget to be champion"));;

