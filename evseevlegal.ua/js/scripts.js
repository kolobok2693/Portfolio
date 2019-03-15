$("#contactForm").submit(function(event){
    // отменяет отправку данных формы
    event.preventDefault();
    submitForm();
});