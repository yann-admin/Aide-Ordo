/* ▂ ▅ ▆ █ Form Class █ ▆ ▅ ▂ */
export default class Form {
    id_ = null;
    inputs_ = null;
    inputsText_ = null;
    inputsText_required_ = null;
    inputsSelect_ = null;
    inputsSelect_required_ = null;
    inputsRadio_ = null;
    inputsRadio_required_ = null;
    inputsCheckbox_ = null;
    inputsCheckbox_required_ = null;
    inputsFile_ = null;
    inputsFile_required_ = null;
    inputsTextarea_ = null;
    inputsTextarea_required_ = null;
    submitBtn_ = null;
    falseBtn_ = null;
    pictoInfo_ = null;
    pictoEye_ = null;
    errorMsg_ = null;
    buttons_ = null;
    inputsSecurity_ = null;
    elements_ = null;
        
    constructor(form) {
        this.id_ = form[0].id;
        this.inputs_ = this.arrayFormInputs();
        this.inputsText_ = this.inputs_.filter(input => input.type == "text");
        this.inputsText_required_ = this.inputs_.filter(input => input.hasAttribute('required'));

        this.inputsSelect_ = this.arrayFormSelects();
        this.inputsSelect_required_ = this.inputsSelect_.filter(input => input.hasAttribute('required'));

        this.inputsRadio_ = this.arrayFormRadios();
        this.inputsRadio_required_ = this.inputsRadio_.filter(input => input.hasAttribute('required'));

        this.inputsCheckbox_ = this.arrayFormCheckboxes();
        this.inputsCheckbox_required_ = this.inputsCheckbox_.filter(input => input.hasAttribute('required'));

        this.inputsFile_ = this.arrayFormFiles();
        this.inputsFile_required_ = this.inputsFile_.filter(input => input.hasAttribute('required'));

        this.inputsTextarea_ = this.arrayFormTextareas();
        this.inputsTextarea_required_ = this.inputsTextarea_.filter(input => input.hasAttribute('required'));

        this.buttons_ = this.arrayFormBtns();
        this.submitBtn_ = this.buttons_.find(button => button.type == "submit");
        this.falseBtn_ = this.buttons_.find(button => button.id == "false");
        this.errorMsg_ = this.arrayFormDivs().find(div => div.id == "userMessage");
        this.pictoInfo_ = this.arrayPictoInfo();
        this.inputsSecurity_ = this.arrayInputsSecurity();
        this.pictoEye_ = this.arrayPictoEye();

        this.elements_ = Array.from(document.querySelectorAll(`#${this.id_} *`));
  
    };
        
    arrayFormInputs() {
        let arrayInputs = Array.from(document.querySelectorAll(`#${this.id_} input`));
        return arrayInputs;
    };
    arrayFormSelects() {
        let arraySelects = Array.from(document.querySelectorAll(`#${this.id_} select`));
        return arraySelects;
    };
    arrayFormTextareas() {
        let arrayTextareas = Array.from(document.querySelectorAll(`#${this.id_} textarea`));
        return arrayTextareas;
    };  
    arrayFormRadios() {
        let arrayRadios = Array.from(document.querySelectorAll(`#${this.id_} input[type="radio"]`));
        return arrayRadios;
    };
    arrayFormCheckboxes() {
        let arrayCheckboxes = Array.from(document.querySelectorAll(`#${this.id_} input[type="checkbox"]`));
        return arrayCheckboxes;
    };
    arrayFormFiles() {
        let arrayFiles = Array.from(document.querySelectorAll(`#${this.id_} input[type="file"]`));
        return arrayFiles;
    };
    arrayFormBtns() {
        let arrayBtns = Array.from(document.querySelectorAll(`#${this.id_} button`));
        return arrayBtns;
    };
    arrayFormDivs() {
        let arrayDivs = Array.from(document.querySelectorAll(`#${this.id_} div`));
        return arrayDivs;
    };
    arrayPictoInfo() {
        let arrayPictoInfo = Array.from(document.querySelectorAll(`#${this.id_} .pictoInfo`));
        return arrayPictoInfo;
    };
    arrayInputsSecurity() {
        let arrayInputsSecurity = Array.from(document.querySelectorAll(`#${this.id_} input[function="data-security"]`));
        return arrayInputsSecurity;
    };
    arrayPictoEye() {
        let arrayPictoEye = Array.from(document.querySelectorAll(`#${this.id_} .picto-eye`));
        return arrayPictoEye;   
    };  
}   
/* ▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂ */