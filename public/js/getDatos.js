let actualizarAuthor = document.getElementById('actualizarModal');

let eliminarAuthor = document.getElementById('eliminarModal');

    actualizarAuthor.addEventListener('shown.bs.modal', event=>{

    let button = event.relatedTarget;

    let id = button.getAttribute('data-bs-id');
    
    let inputID = actualizarAuthor.querySelector('.modal-body #id_autor');
    let inputNombre = actualizarAuthor.querySelector('.modal-body #nombre');
    let inputApellidoP = actualizarAuthor.querySelector('.modal-body #apellidoP');
    let inputApellidoM = actualizarAuthor.querySelector('.modal-body #apellidoM');

        console.log(id);


    let url = "getDatos.php"

    let formData = new FormData()
    formData.append('id',id)

    fetch(url,{
    method: "POST",
    body: formData
    }).then(response=> response.json())
    .then(data =>{
    inputID.value = id;
    inputNombre.value = data.nombre
    inputApellidoP.value = data.apellidoP
    inputApellidoM.value = data.apellidoM
    }).catch(err=>console.log(err))

    });

 
    eliminarAuthor.addEventListener('shown.bs.modal',event =>{
        let button= event.relatedTarget;

        let id = button.getAttribute('data-bs-id');

        
        eliminarAuthor.querySelector('.modal-body #id_autor').value=id;
    })
 