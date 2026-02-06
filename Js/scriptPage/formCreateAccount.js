/*
MEMO:
    https://developer.mozilla.org/fr/docs/Web/API/EventTarget/addEventListener
*/

/* ↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓ Import  ↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓ */
import { startLoader, stopLoader } from "../module/loader.js";
import Form from "../Classes/classForm.js";
import { initForm, resetForm, togglePasswordVisibility, disabledBtnSubmit, validityField} from "../module/formModuleV2.js";
import { handleFormSubmit } from "../module/submitForm.js";
/* ↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑ Import  ↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑ */

/* ↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓ Export  ↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓ */

/* ↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑ Export  ↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑ */

/* ▂ ▅ ▆ █ Grafcet █ ▆ ▅ ▂ 

    Step 1 ▂ ▅ ▆ █ START LOADER █ ▆ ▅ ▂

    Step 2 ▂ ▅ ▆ █ CONSTANT █ ▆ ▅ ▂

    Step 3 ▂ ▅ ▆ █ window.addEventListener █ ▆ ▅ ▂
        ╚ step 3.1 Initialize the form (  )
        ╚ step 3.2 For Bootstrap: Enable tooltips Bootstrap
        ╚ step 3.3 earphone construction event: listenBtnRest
        ╚ step 3.4 earphone construction event: listenSubmitForm

    Step 10 ▂ ▅ ▆ █ STOP LOADER █ ▆ ▅ ▂

    Step debug ▂ ▅ ▆ █ DEBUG █ ▆ ▅ ▂

*/



/* Step 1: ▂ ▅ ▆ █ START LOADER █ ▆ ▅ ▂ */
startLoader(3000); 


/*Step 2 ▂ ▅ ▆ █ CONSTANT █ ▆ ▅ ▂ */
const MODE_DEV = true;
const HEADER_CONSOLE_LOG = "↓↓↓↓↓↓↓↓↓↓ formCreateAccount.js  ↓↓↓↓↓↓↓↓↓";
const FOOTER_CONSOLE_LOG = "↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑";
const FORM = document.querySelectorAll('.validate');  
export const OBJ_FORM = new Form( FORM );
if (MODE_DEV) console.clear();


if (MODE_DEV) console.log(HEADER_CONSOLE_LOG);
if (MODE_DEV) console.log(OBJ_FORM);

/*Step 3: ▂ ▅ ▆ █ window.addEventListener █ ▆ ▅ ▂ */
window.addEventListener("load", () => {
    var falseBtn = OBJ_FORM.buttons_.find(button => button.name == "false");
    var submitBtn = OBJ_FORM.buttons_.find(button => button.name == "true");
    /* Step 3.1: Initialize the form */
    initForm(FORM);/* @ function module formModuleV2.js */
    
    /* Step 3.2: Disabled submit button if form is not valid */
    disabledBtnSubmit(FORM, submitBtn); /* @ function module formModuleV2.js  */
    
    /* Step 3.3: For Bootstrap: */
    /* For Bootstrap: */
        /* Enable tooltips Bootstrap: */
        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
        const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl));
    /* -------------- */

    /* Step 3.4 earphone construction event: listenBtnRest */
        listenBtnRest([ (falseBtn.id) ], resetForm); /* @ function resetError module formModule.js  */
        function listenBtnRest(ids, callback) {
            ids.forEach(id => document.getElementById(id).addEventListener('click', () => callback(OBJ_FORM), true));
        };
    /* ------------------------------------ */

    /* Step 3.5 earphone construction event: listenSubmitForm */
        listenSubmitForm([ (submitBtn.id) ] , handleFormSubmit);/* @ function handleFormSubmit module submitForm.js  */
        function listenSubmitForm(ids, callback) {
            ids.forEach(id => document.getElementById(id).addEventListener('submit', function(event) { callback(event) }, true));
        };
    /* ------------------------------------ */

    /* Step 3.6 earphone construction event: listenPictoEye */
        listenPictoEye(OBJ_FORM.pictoEye_, togglePasswordVisibility);/* @ function togglePasswordVisibility module formModule.js  */
        function listenPictoEye(elements, callback) {
            elements.forEach(element => element.addEventListener('click', (event) => { callback(event) }, true));
        };
    /* ------------------------------------ */
        
    /* Step 3.7 earphone construction event: blur */
        document.addEventListener('blur', function (event) {validityField(event)}, true);/* @ function module formModule.js function() */
    /* ------------------------------------ */


});

/* Step 10 ▂ ▅ ▆ █ STOP LOADER █ ▆ ▅ ▂ */
stopLoader(500);


if (MODE_DEV) console.log(FOOTER_CONSOLE_LOG);
