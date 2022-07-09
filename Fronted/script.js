
let id = []
let name = [];
let email = [];
let phone = [];
let city = [];
var cantidad = 0; 
let datos = '';

let url = "http://127.0.0.1:8000/api/company/";
fetch(url)
.then(data_obtanined => data_obtanined.json())
.then(function (data_obtanined){
    data_obtanined.forEach(function agregar(data_obtanined) {

        id.push(data_obtanined.id)
        name.push(data_obtanined.name);
        email.push(data_obtanined.email);
        phone.push(data_obtanined.phone);
        city.push(data_obtanined.city);
        cantidad += 1;
        
    });

    for(var i = 0; i < cantidad; i++){
        datos = datos + 
        `            
            <tr>
                <td>`+id[i]+`</td>
                <td>`+name[i]+`</td>
                <td>`+email[i]+`</td>
                <td>`+phone[i]+`</td>
                <td>`+city[i]+`</td>
            </tr>
        `
    }
    document.getElementById("DatosAPI").innerHTML = datos;
});
    
