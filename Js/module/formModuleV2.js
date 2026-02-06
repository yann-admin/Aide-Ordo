/*
MEMO:
    https://developer.mozilla.org/fr/docs/Web/API/EventTarget/addEventListener
*/

/* ↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓ Import  ↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓ */
import { OBJ_FORM } from "../scriptPage/formCreateAccount.js";
/* ↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑ Import  ↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑ */

/* ↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓ Export  ↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓ */

/* ↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑ Export  ↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑ */

/* ▂ ▅ ▆ █ Grafcet █ ▆ ▅ ▂ 

    Step 1 ▂ ▅ ▆ █ INIT FORM █ ▆ ▅ ▂
        ╚ Step 1 We add attribute novalidate to form to disable browser validation and use our custom validation

    Step 2 ▂ ▅ ▆ █ DISABLED BTN SUBMIT █ ▆ ▅ ▂
        ╚ Step 1 We disabled submit button if form is not valid

    Step 3 ▂ ▅ ▆ █ RESET FORM █ ▆ ▅ ▂
        ╚ Step 1 Loop in obj_form.inputs_ and reset value
        ╚ Step 2 Loop in obj_form.pictoEye_ and reset <i></i>

    Step 4 ▂ ▅ ▆ █ TOGGLE PASSWORD VISIBILITY █ ▆ ▅ ▂
        ╚ Step 1 We test if field form is input or field form classList does not include "validate" => return 
        ╚ Step 2 We search error.validity
        ╚ Step 3 We Show error.message

    Step 5 ▂ ▅ ▆ █ VALIDITY FIELD █ ▆ ▅ ▂
        ╚ Step 1 We test type of field => return     
        ╚ Step 2 We statement variable validity of field
        ╚ Step 3 We test validity, if valid => return
        ╚ Step 4 We test validity.valueMissing => return error type and message
        ╚ Step 5 We test validity.typeMismatch => return error type and message
        ╚ Step 6 We test validity.patternMismatch => return error type and message
        ╚ Step 7 We test validity.tooLong => return error type and message
        ╚ Step 8 We test validity.tooShort => return error type and message
        ╚ Step 9 We test validity.badInput => return error type and message
        ╚ Step 10 We test validity.stepMismatch => return error type and message
        ╚ Step 11 We test validity.rangeOverflow => return error type and message
        ╚ Step 12 We test validity.rangeUnderflow => return error type and message
        ╚ Step 13 We return error type and message unknownError
        

    Step 7 ▂ ▅ ▆ █ SHOW ERROR █ ▆ ▅ ▂
        ╚ Step 1 We add class is-invalid to field
        ╚ Step 2 We search element with class .invalid-feedback in field parentNode
        ╚ Step 3 We add error.message in element with class .invalid-feedback

    Step 8 ▂ ▅ ▆ █ RESET ERROR █ ▆ ▅ ▂
        ╚ Step 1 We reset error message and style of field
        ╚ Step 2 We search element with class .invalid-feedback in field parentNode
        ╚ Step 3 We reset error message in element with class .invalid-feedback

*/

/*▂ ▅ ▆ █ CONSTANT █ ▆ ▅ ▂ */
const MODE_DEV = true;
const HEADER_CONSOLE_LOG = "↓↓↓↓↓↓↓↓↓↓ formModuleV2.js   ↓↓↓↓↓↓↓↓↓";
const FOOTER_CONSOLE_LOG = "↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑";
/* ▂▂▂▂▂▂▂▂▂▂▂▂▂ */


/* Step function 1 ▂ ▅ ▆ █ INIT FORM █ ▆ ▅ ▂ */
export function initForm(form) {
    // /* Loop over them and prevent submission form class .needs-validation */
    // form[0].addEventListener('submit', function (event) {
    //     if (!form[0].checkValidity()) {
    //         event.preventDefault();
    //         event.stopPropagation();
    //     } else {
    //         form[0].classList.add('was-validated');
    //     };
    // }, false);
    /* Add attribute novalidate to form */
    /* Step 1 We add attribute novalidate to form to disable browser validation and use our custom validation */
    for (let i = 0; i < form.length; i++) {
        form[i].setAttribute('novalidate', 'novalidate');
    };

};

/* Step function 2 ▂ ▅ ▆ █ DISABLED BTN SUBMIT █ ▆ ▅ ▂ */
export function disabledBtnSubmit(form, submitBtn) {
    /* Step 1 We disabled submit button if form is not valid */
        if (form[0].getAttribute('novalidate')=='novalidate' ) {
            submitBtn.disabled = true;
        } else {
            submitBtn.disabled = false;
    };

};

/* Step function 3 ▂ ▅ ▆ █ RESET FORM █ ▆ ▅ ▂ */
export function resetForm(obj_form) {
    var input = obj_form.inputs_;
    var pictoEye = obj_form.pictoEye_;
    /* Step 1 Loop in obj_form.inputs_ and reset value */
    Array.from(input).forEach(input => {
        /* if input function is not data-security: reset input. */
        if (!input.hasAttribute('function') || input.getAttribute('function') !== "data-security") {
            /* If input is type text, email, password, select, textarea: reset value. */
            if (input.type === "text" || input.type === "email" || input.type === "password" || input.tagName.toLowerCase() === "select" || input.tagName.toLowerCase() === "textarea") {
                input.value = "";
            }
            /* If input is type radio or checkbox: reset checked. */
            else if (input.type === "radio" || input.type === "checkbox") {
                input.checked = false;
            };
        };
    });
    /* Step 2 Loop in obj_form.pictoEye_ and reset <i></i> */
    Array.from(pictoEye).forEach(element => {
        element.innerHTML = '<i class="fa-solid fa-eye"></i>';
        element.style.color = "#212529";
    });
};

/* Step function 4 ▂ ▅ ▆ █ TOGGLE PASSWORD VISIBILITY █ ▆ ▅ ▂ */
export function togglePasswordVisibility(event) {
    var target = event.currentTarget;
    var input = target.parentNode.querySelector('input');
    if (input.type === "password") {
        input.type = "text";
        target.innerHTML = '<i class="fa-solid fa-eye-slash"></i>';
        target.style.color = "#ff0000";
    } else {
        input.type = "password";
        target.innerHTML = '<i class="fa-solid fa-eye"></i>';
        target.style.color = "#212529";
    };
};

/* Step function 5 ▂ ▅ ▆ █ VALIDITY FIELD █ ▆ ▅ ▂ */
export function validityField(e) {
    let field = e.target; 
    /* Step 1 We test if field form is input or field form classList does not include "validate" => return */
    if ( !field.form.className.includes('validate') ) { return; };

      
    /* Step 2 We search error.validity  */
    let error = haserror(field);
    /* Step 3 We Show error.message  */
    if (error) {
        showerror(field, error.message); 
    } else {
        resetErrorField(field)
    };



    //if (MODE_DEV) console.clear();
    if (MODE_DEV) console.log(HEADER_CONSOLE_LOG); 
    if (MODE_DEV) {if (error) {console.log((error.type ? 'type:' + error.type : '') + " " + (error.message ? 'message:' + error.message : '') + " " + (error.pattern ? 'pattern: ' + error.pattern : ''));}};
    if (MODE_DEV) console.log(FOOTER_CONSOLE_LOG);    
};

/* Step function 6 ▂ ▅ ▆ █ HAS ERROR █ ▆ ▅ ▂ */
var haserror = function (field) {
    /* Step 1 We test type of field => return */
    if (field.disabled || field.type === 'file' || field.type === 'reset' || field.type === 'submit' || field.type === 'button') { return; };

    /* Step 2 We statement variable validity of field */
    var validity = field.validity;
 
    /* Step 3 We test validity, if valid => return */
    if (validity.valid) { return; };

    /* Step 4 We test validity.valueMissing => return error type and message */
    if (validity.valueMissing) { return { type: 'valueMissing', message: 'Veuillez remplir le champ ' + field.name + ' s\'il vous plaît' }; };
    /* Step 5 We test validity.typeMismatch => return error type and message */
    if (validity.typeMismatch) {
        if (field.type === 'email'){
        return { type: 'typeMismatch', message: 'Veuillez entrer une adresse email valide s\'il vous plaît' };
        };
        if (field.type === 'url') {
        return { type: 'typeMismatch', message: 'Veuillez entrer une adresse URL valide s\'il vous plaît' };
        };
    };
    /* Step 6 We test validity.patternMismatch => return error type and message */
    if (validity.patternMismatch) {
        if (field.hasAttribute('title') && field.getAttribute('title') != "") {
            return { type: 'patternMismatch', message: field.getAttribute('title') };
        } else {
            return {pattern:field.pattern , type: 'patternMismatch', message: 'Veuillez respecter le format du champ ' + field.name + ' s\'il vous plaît' };
        };
    };
    /* Step 7 We test validity.tooLong => return error type and message */
    if (validity.tooLong) { return { type: 'tooLong', message: 'Le champ ' + field.name + ' doit comporter au maximum ' + field.maxLength + ' caractères.' + ' Vous utilisez actuellement ' + field.value.length + ' caractères.' }; }
    /* Step 8 We test validity.tooShort => return error type and message */
    if (validity.tooShort) { return { type: 'tooShort', message: 'Le champ ' + field.name + ' doit comporter au minimum ' + field.minLength + ' caractères.' + ' Vous utilisez actuellement ' + field.value.length + ' caractères.' }; }
    /* Step 9 We test validity.badInput => return error type and message */
    if (validity.badInput) { return { type: 'badInput', message: 'Veuillez entrer un nombre valide pour le champ ' + field.name + ' s\'il vous plaît' }; }
    /* Step 10 We test validity.stepMismatch => return error type and message */
    if (validity.stepMismatch) { return { type: 'stepMismatch', message: 'Veuillez entrer une valeur avec un pas ' + field.step +' pour le champ ' + field.name + ' s\'il vous plaît' }; }
    /*  Step 11 WE test validity.rangeOverflow => return error type and message */
    if (validity.rangeOverflow) { return { type: 'rangeOverflow', message: 'Veuillez entrer une valeur inférieure ou égale à ' + field.max + ' pour le champ ' + field.name + ' s\'il vous plaît' }; }
    /* Step 12 We test validity.rangeUnderflow => return error type and message */
    if (validity.rangeUnderflow) { return { type: 'rangeUnderflow', message: 'Veuillez entrer une valeur supérieure ou égale à ' + field.min + ' pour le champ ' + field.name + ' s\'il vous plaît' }; }
    /* Step 13 We return error type and message unknownError */
    return { type: 'unknownError', message: 'Le champ ' + field.name + ' est invalide.' };
};

/* Step function 7 ▂ ▅ ▆ █ SHOW ERROR █ ▆ ▅ ▂ */
function showerror(field, error) {
    /* We search element with class .invalid-feedback in field parentNode */
    Array.from(OBJ_FORM.feedback_).forEach(element =>  {
        if (element.id == `feedback-${field.id}`) {
            element.innerHTML = error;
            element.classList.add('is-invalid');
            element.classList.remove('is-valid');
        }
    });
    /* We add class is-invalid bootstrap and remove class is-valid bootstrap to field */
    field.classList.add('is-invalid');
    field.classList.remove('is-valid');
};
/* Step function 8 ▂ ▅ ▆ █ RESET ERROR █ ▆ ▅ ▂ */
function resetErrorField(field) {
    /* We search element with class .invalid-feedback in field parentNode */
    Array.from(OBJ_FORM.feedback_).forEach(element =>  {
        if (element.id == `feedback-${field.id}`) {
            element.innerHTML = '';
            element.classList.remove('is-invalid');
            element.classList.add('is-valid');
        }
    });
    /* We reset class is-invalid bootstrap and add class is-valid bootstrap to field */
    field.classList.remove('is-invalid');
    field.classList.add('is-valid');
};




