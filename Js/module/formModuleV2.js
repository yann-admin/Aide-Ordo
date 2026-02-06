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

    Step 1 ▂ ▅ ▆ █ INITFORM █ ▆ ▅ ▂

    Step 2 ▂ ▅ ▆ █ RESET FORM █ ▆ ▅ ▂

    Step 3 ▂ ▅ ▆ █ TOGGLE PASSWORD VISIBILITY █ ▆ ▅ ▂

    Step 12 ▂ ▅ ▆ █ RESET ERROR █ ▆ ▅ ▂

    Step debug ▂ ▅ ▆ █ DEBUG █ ▆ ▅ ▂

*/





/*▂ ▅ ▆ █ CONSTANT █ ▆ ▅ ▂ */
    const MODE_DEV = false;
    const HEADER_CONSOLE_LOG = "↓↓↓↓↓↓↓↓↓↓ formModuleV2.js   ↓↓↓↓↓↓↓↓↓";
    const FOOTER_CONSOLE_LOG = "↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑";
/* ▂▂▂▂▂▂▂▂▂▂▂▂▂ */


/* Step 1 ▂ ▅ ▆ █ INIT FORM █ ▆ ▅ ▂ */
export function initForm(form) {
    /* Loop over them and prevent submission form class .needs-validation */
    form[0].addEventListener('submit', function (event) {
        if (!form[0].checkValidity()) {
            //event.preventDefault();
            event.stopPropagation();
        } else {
            form[0].classList.add('was-validated');
        };
    }, false);

    
};


/* Step 2 ▂ ▅ ▆ █ RESET FORM █ ▆ ▅ ▂ */
export function resetForm(obj_form) {
    var input = obj_form.inputs_;
    var pictoEye = obj_form.pictoEye_;
    /* Loop in obj_form.inputs_ and reset value */
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
    /* Loop in obj_form.pictoEye_ and reset <i></i> */
    Array.from(pictoEye).forEach(element => {
        element.innerHTML = '<i class="fa-solid fa-eye"></i>';
    });
};


/* Step 3 ▂ ▅ ▆ █ TOGGLE PASSWORD VISIBILITY █ ▆ ▅ ▂ */
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






/* Step 12 ▂ ▅ ▆ █ RESET ERROR █ ▆ ▅ ▂ */
export function resetError(event) {
    event.preventDefault();
    let form = event.target.closest('form');
    form.classList.remove('was-validated');
    form.querySelector('#userMessage').textContent = "";
}