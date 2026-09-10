const btn_dodaj = document.querySelector('#btn_dodaj')

function delete_tr(e){
    document.querySelector('')
}


btn_dodaj.addEventListener('click' , (e) => {
e.preventDefault()

const inp_zadanie = document.querySelector('input[type="text"]').value
const inp_data = document.querySelector('input[type="date"]').value

const row = `
    <tr>
        <td> ${inp_zadanie}</td>
        <td> ${inp_data}</td>
        <td> <button class='btn_usun' onclick='delete()'>USUN<button> </td>
    </tr>

`

const table = document.querySelector('#xd')
table.innerHTML += row

inp_zadanie = ``
inp_data = ``




const btn_usun = document.querySelectorAll('#btn_usun')
for(let btn_usun of btns_usun){
    btn_usun.addEventListener('click', () =>{
        btn_usun.parentElement.remove()
    })
}
  

})

