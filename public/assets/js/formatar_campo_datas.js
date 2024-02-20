let data = new Date();
let ano_actual = data.getFullYear();
let data_inicial = document.querySelector("#data_inicial");
let data_terminal = document.querySelector("#data_terminal");

data_inicial.addEventListener("focus", ()=>{
    flatpickr(data_inicial, 
        {
            dateFormat: "d-m-Y",
            minDate: "01.01.2021",
            maxDate: "31.12." + ano_actual
        });
});

data_terminal.addEventListener("focus", ()=>{
    flatpickr(data_terminal, 
        {
            dateFormat: "d-m-Y",
            minDate: "01.01.2021",
            maxDate: "31.12." + ano_actual
        });
});
