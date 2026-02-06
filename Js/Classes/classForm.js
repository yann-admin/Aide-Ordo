/* ▂ ▅ ▆ █ Form Class █ ▆ ▅ ▂ */
export default class Form {

    constructor(form) {
        this.id_ = form[0].id;
        this.elements_ = Array.from(document.querySelectorAll(`#${this.id_} *`));
        /* Elements and filter by tagName */
        if(this.arrayFields(this.elements_).inputs.length > 0) { this.inputs_ = this.arrayFields(this.elements_).inputs; } else {  };
        if(this.arrayFields(this.elements_).selects.length > 0) { this.selects_ = this.arrayFields(this.elements_).selects; } else {  };
        if(this.arrayFields(this.elements_).textareas.length > 0) { this.textareas_ = this.arrayFields(this.elements_).textareas; } else {  };
        if(this.arrayFields(this.elements_).buttons.length > 0) { this.buttons_ = this.arrayFields(this.elements_).buttons; } else {  };
        if(this.arrayFields(this.elements_).radios.length > 0) { this.radios_ = this.arrayFields(this.elements_).radios; } else {  };
        if(this.arrayFields(this.elements_).checkboxes.length > 0) { this.checkboxes_ = this.arrayFields(this.elements_).checkboxes; } else {  };
        if(this.arrayFields(this.elements_).files.length > 0) { this.files_ = this.arrayFields(this.elements_).files; } else {  };
        if(this.arrayFields(this.elements_).spans.length > 0) { this.spans_ = this.arrayFields(this.elements_).spans; } else {  };
        /* Elements and filter by attribute function */
        if(this.arrayFields(this.elements_).security.length > 0) { this.security_ = this.arrayFields(this.elements_).security; } else {  };
        /* Elements and filter by class Name" */
        if(this.arrayFields(this.elements_).pictoInfo.length > 0) { this.pictoInfo_ = this.arrayFields(this.elements_).pictoInfo; } else {  };
        if (this.arrayFields(this.elements_).pictoEye.length > 0) { this.pictoEye_ = this.arrayFields(this.elements_).pictoEye; } else { };
        if (this.arrayFields(this.elements_).feedback.length > 0) { this.feedback_ = this.arrayFields(this.elements_).feedback; } else {  };
    };

    arrayFields(elements) {
        let arrayFields = {};
        /* Loop in elements and filter by tagName */
        arrayFields['inputs']=Array.from(elements).filter(element =>element.tagName.toLowerCase() == "input");
        arrayFields['selects']=Array.from(elements).filter(element =>element.tagName.toLowerCase() == "select");
        arrayFields['textareas']=Array.from(elements).filter(element =>element.tagName.toLowerCase() == "textarea");
        arrayFields['buttons'] = Array.from(elements).filter(element => element.tagName.toLowerCase() == "button");
        arrayFields['radios'] = Array.from(elements).filter(element => element.tagName.toLowerCase() == "radio");
        arrayFields['checkboxes'] = Array.from(elements).filter(element => element.tagName.toLowerCase() == "checkbox");
        arrayFields['files'] = Array.from(elements).filter(element => element.tagName.toLowerCase() == "file");
        arrayFields['spans'] = Array.from(elements).filter(element => element.tagName.toLowerCase() == "span");
         
        /* loop in elements and filter by attribute function */
        arrayFields['security'] = Array.from(elements).filter(element => element.hasAttribute('function') && element.getAttribute('function') == "data-security");
        /* loop in elements and filter by class Name" */
        arrayFields['pictoInfo'] = Array.from(elements).filter(element => element.className.includes('pictoInfo'));
        arrayFields['pictoEye'] = Array.from(elements).filter(element => element.className.includes('pictoEye'));
        arrayFields['feedback'] = Array.from(elements).filter(element => element.className.includes('invalid-feedback'));
        return arrayFields;
    };
    
};    